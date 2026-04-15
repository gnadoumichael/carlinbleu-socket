import React, {useEffect, useState} from "react";
import {createRoot} from 'react-dom/client';
import axios from "axios";
import ReactHTMLTableToExcel from 'react-html-table-to-excel';
import NumberFormat from "../../fonctions/NumberFormat";
import Moment from 'react-moment';
import $ from "jquery";

const ChargesPersonnelles = () => {

    const [persos, setPersos] = useState([]);
    const [caissperso, setCaissPerso] = useState([]);

    const fetchPersos = async () => {
        const dede = JSON.parse($('#jsonpersos').val());
        setPersos(dede);

    };
    const fetchCaissePerso = async () => {
        const dedo = JSON.parse($('#caisseperso').val());
        setCaissPerso(dedo);
    };

    useEffect(() => {
        fetchPersos();
        fetchCaissePerso();
    }, []);

    $("#checkedPerso").change(function () {
        if (this.checked) {
            $.each($("input[name='pers']"), function () {
                this.checked = true;
            });
        } else {
            $.each($("input[name='pers']"), function () {
                this.checked = false;
            });
        }
    });
    $("#editPerso").off().on("click", function () {
        $.each($("input[name='pers']:checked"), function () {
            window.$('#Traitement').modal('show');
            window.location.href = '/crm/personnel/edit/person/' + $(this).val();
            return false;
        });
    });
    $("#delPerso").off().on("click", function () {
        $.each($("input[name='pers']:checked"), function () {
            window.$('#Traitement').modal('show');
            axios({
                method: 'DELETE', url: '/crm/personnel/del/' + $(this).val(),
            }).then(function (response) {
                window.location.reload();
            }).catch(function (error) {
                $('#Traitement').modal('hide');
                $('#ModalErreur').modal('show');
            });
        });
    });


    const deleteCaisse = async (id) => {
        $('#Traitement').modal('show');
        await axios({
            method: 'DELETE',
            url: '/crm/caisse/del/' + id,
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
        }).then(function (response) {
            window.location.reload();
        }).catch(function (error) {
        });
    }
    const valideCaisse = async (id) => {
        $('#Traitement').modal('show');
        await axios({
            method: 'GET',
            url: '/crm/caisse/valider/' + id,
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
        }).then(function (response) {
            window.location.reload();
        }).catch(function (error) {
        });
    }
    const devalideCaisse = async (id) => {
        $('#Traitement').modal('show');
        await axios({
            method: 'GET',
            url: '/crm/caisse/devalider/' + id,
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
        }).then(function (response) {
            window.location.reload();
        }).catch(function (error) {
        });
    }

    let rpcount = 0;
    let rpdebit = 0;
    let rpcredit = 0;
    const renderRelePerso = caissperso.map((caiss) => {
        if(caiss.personnel["corbeille"] == null){
            if (caiss.corbeille === null && caiss.etat === "valide") {
                rpcount = rpcount + 1;
                if (caiss.operation === "debit") {
                    rpdebit = rpdebit + caiss.montant;
                }
                if (caiss.operation === "credit") {
                    rpcredit = rpcredit + caiss.montant;
                }
            }

            let ed = 0;
            let ec = 0;
            if (caiss.operation === "debit") {
              ed = caiss.montant;
            }
            if (caiss.operation === "credit") {
               ec = caiss.montant;
            }
            return (<>
                {caiss.corbeille === null && <>
                    {caiss.etat === "valide" && <tr key={caiss.id} className="paginate11">
                        <td className="text-center"><Moment format="DD/MM/YYYY">{caiss.date}</Moment></td>
                        <td><a href={`/crm/caisse/${caiss.id}/${caiss.chantier.id}`}>{caiss.numcaisse}</a></td>
                        <td dangerouslySetInnerHTML={{__html: caiss.caissereference}}></td>
                        <td className="text-right"><NumberFormat numb={ed}/></td>
                        <td className="text-right"><NumberFormat numb={ec}/></td>
                        <td className="text-left pri bolo600 nowrape"><i className="fa fa-user pri"></i> &nbsp;{caiss.dobyuser.nom.toUpperCase() + ' '} {caiss.dobyuser.prenoms.toUpperCase()}
                        </td>
                    </tr>}
                </>}
            </>);
        }
        return null;

    });

    let perscount = 0;
    let frepersoto = 0;
    let frepersuto = 0;
    const renderPersos = persos.map((perso) => {
        let caisses = perso.caisses;
        let culen = 0;
        let freperso = 0;
        let frepersu = 0;

        if (perso.type === 'personnelle') {
            perscount = perscount + 1;
        }
        const renderCaisPe = caisses.map((caisse) => {
            if (caisse.corbeille === null && caisse.chantier.type === "personnel") {

                if (caisse.etat === "valide") {
                    if (caisse.operation === "debit") {
                        freperso = freperso + caisse.montant;
                        frepersoto = frepersoto + caisse.montant;
                    } else {
                        frepersu = frepersu + caisse.montant;
                        frepersuto = frepersuto + caisse.montant;
                    }
                    culen = culen + 1;
                }
                let ddeb = 0;
                let ccred = 0;
                if (caisse.operation === "debit") {
                    ddeb = caisse.montant;
                }
                if (caisse.operation === "credit") {
                     ccred = caisse.montant;
                }

                return (<tr key={caisse.id} className={perso.id + 'periso' + ' hide'}>
                    <td className="text-left bolo600 ml30 borde"><Moment
                        format="DD/MM/YYYY">{caisse.date}</Moment>
                    </td>
                    <td className="borde" style={{whiteSpace:"nowrap"}}>
                        {caisse.etat === "valide" && <a onClick={() => {
                            devalideCaisse(caisse.id)
                        }} title="Dévalider" className="badge badge-pill bg-blue"
                                                        style={{marginRight: "5px"}}>V</a>}
                        {caisse.etat === "save" &&
                            <>
                                <a onClick={() => {
                                    valideCaisse(caisse.id)
                                }} title="Valider" className="badge badge-pill bg-blue-grey"
                                   style={{marginRight: "5px"}}>V</a>
                                <a onClick={() => {
                                    deleteCaisse(caisse.id)
                                }} style={{marginRight: "5px"}}><i
                                    className="fa fa-trash col-pink" title="Supprimer"
                                    aria-hidden="true"></i></a>
                            </>}
                        <a href="#" onClick={() => {
                            shasha(caisse.id, 'imprimcaisse')
                        }} style={{marginRight: "5px"}}><i
                            className="fa fa-eye col-green"
                            aria-hidden="true"></i></a>
                        <a href={`/crm/caisse/${caisse.id}/${caisse.chantier.id}`}
                           className="text-left col-blue-grey bolo600">Caisse N° {caisse.numcaisse}</a>
                    </td>
                    <td className="text-right borde"><NumberFormat numb={ddeb}/></td>
                    <td className="text-right borde"><NumberFormat numb={ccred}/></td>
                    <td className="text-left ml30 borde" colSpan="2"
                        dangerouslySetInnerHTML={{__html: caisse.caissereference}}></td>
                </tr>);
            } else {
                return null;
            }
        });
        return (<>
            {perso.type === 'personnelle' && <>
                {perso.corbeille === null &&
                    <>
                        <tr className="paginate4" onClick={() => {showBonPerso(perso.id)}}>
                            <td className="mw30 text-center"><input className="form-check-input" type="checkbox" value={perso.id} name="pers"/></td>
                            <td className="text-left"><b className="col-blue">({ culen })</b>{perso.noms}</td>
                            <td className="text-right p-r-15"><NumberFormat numb={freperso}/></td>
                            <td className="text-right p-r-15"><NumberFormat numb={frepersu}/></td>
                            <td className="text-left p-r-15"><NumberFormat numb={freperso - frepersu}/></td>
                        </tr>
                        {renderCaisPe}
                    </>
                }
            </>}
        </>);
    });

    let pretcount = 0;
    let pretsoto = 0;
    let pretsuto = 0;
    const renderPersoPrets = persos.map((perso) => {
        let caisses = perso.caisses;
        let pretculen = 0;
        let pretperso = 0;
        let pretpersu = 0;

        if (perso.type === 'personnelle') {
            pretcount = pretcount + 1;
        }
        const renderCaisPretPerso = caisses.map((caisse) => {
            if (caisse.corbeille === null && caisse.chantier.type === "personnel") {
                if (caisse.genre === "pret") {
                    if (caisse.etat === "valide") {
                        if (caisse.operation === "debit") {
                            pretperso = pretperso + caisse.montant;
                            pretsoto = pretsoto + caisse.montant;
                        } else {
                            pretpersu = pretpersu + caisse.montant;
                            pretsuto = pretsuto + caisse.montant;
                        }
                        pretculen = pretculen + 1;
                    }
                    let dpdeb = 0;
                    let cpcred = 0;
                    if (caisse.operation === "debit") {
                        dpdeb = caisse.montant;
                    }
                    if (caisse.operation === "credit") {
                        cpcred = caisse.montant;
                    }
                    return (<tr key={caisse.id} className={perso.id + 'periso' + ' hide'}>
                        <td className="text-left bolo600 ml30 borde"><Moment
                            format="DD/MM/YYYY">{caisse.date}</Moment>
                        </td>
                        <td className="ml30 borde">
                            {caisse.etat === "valide" && <a onClick={() => {
                                devalideCaisse(caisse.id)
                            }} title="Dévalider" className="badge badge-pill bg-blue"
                                                            style={{marginRight: "5px"}}>V</a>}
                            {caisse.etat === "save" &&
                                <>
                                    <a onClick={() => {
                                        valideCaisse(caisse.id)
                                    }} title="Valider" className="badge badge-pill bg-blue-grey"
                                       style={{marginRight: "5px"}}>V</a>
                                    <a onClick={() => {
                                        deleteCaisse(caisse.id)
                                    }} style={{marginRight: "5px"}}><i
                                        className="fa fa-trash col-pink" title="Supprimer"
                                        aria-hidden="true"></i></a>
                                </>}
                            <a href="#" onClick={() => {
                                shasha(caisse.id, 'imprimcaisse')
                            }} style={{marginRight: "5px"}}><i
                                className="fa fa-eye col-green"
                                aria-hidden="true"></i></a>
                            <a href={`/crm/caisse/${caisse.id}/${caisse.chantier.id}`}
                               className="text-left col-blue-grey bolo600">Caisse N° {caisse.numcaisse}</a>
                        </td>
                        <td className="text-right borde"><NumberFormat numb={dpdeb}/></td>
                        <td className="text-right borde"><NumberFormat numb={cpcred}/></td>

                        <td className="text-left ml30 borde"
                            dangerouslySetInnerHTML={{__html: caisse.caissereference}}></td>
                    </tr>);
                }
                return null;
            } else {
                return null;
            }
        });
        return (<>
            {perso.type === 'personnelle' && <>
                {perso.corbeille === null &&
                   <>
                                <tr className="paginate4" onClick={() => {
                                    showBonPerso(perso.id)
                                }}>
                                    <td className="mw30 text-center"><input className="form-check-input" type="checkbox"
                                                                            value={perso.id} name="pers"/></td>
                                    <td className="text-left"><b className="col-blue">({pretculen})</b>{perso.noms}
                                    </td>
                                    <td className="text-right p-r-15"><NumberFormat numb={pretperso}/></td>
                                    <td className="text-right p-r-15"><NumberFormat numb={pretpersu}/></td>
                                    <td className="text-left p-r-15"><NumberFormat numb={pretperso - pretpersu}/></td>
                                </tr>
                                {renderCaisPretPerso}
                            </>
                }
            </>}
        </>);
    });

    let avcount = 0;
    let avsoto = 0;
    let avsuto = 0;
    const renderPersoAvances = persos.map((perso) => {
        let caisses = perso.caisses;
        let avculen = 0;
        let avperso = 0;
        let avpersu = 0;

        if (perso.type === 'personnelle') {
            avcount = avcount + 1;
        }
        const renderCaisAvancesPerso = caisses.map((caisse) => {
            if (caisse.corbeille === null && caisse.chantier.type === "personnel") {
                if (caisse.genre === "avance") {
                    if (caisse.etat === "valide") {
                        if (caisse.operation === "debit") {
                            avperso = avperso + caisse.montant;
                            avsoto = avsoto + caisse.montant;
                        } else {
                            avpersu = avpersu + caisse.montant;
                            avsuto = avsuto + caisse.montant;
                        }
                        avculen = avculen + 1;
                    }
                    let dddeb = 0;
                    let cccred = 0;
                    if (caisse.operation === "debit") {
                        dddeb = caisse.montant;
                    }
                    if (caisse.operation === "credit") {
                        cccred = caisse.montant;
                    }
                    return (<tr key={caisse.id} className={perso.id + 'perisos' + ' hide'}>
                        <td className="text-left bolo600 ml30 borde"><Moment
                            format="DD/MM/YYYY">{caisse.date}</Moment>
                        </td>
                        <td className="borde" style={{whiteSpace:"nowrap"}}>
                            {caisse.etat === "valide" && <a onClick={() => {
                                devalideCaisse(caisse.id)
                            }} title="Dévalider" className="badge badge-pill bg-blue"
                                                            style={{marginRight: "5px"}}>V</a>}
                            {caisse.etat === "save" &&
                                <>
                                    <a onClick={() => {
                                        valideCaisse(caisse.id)
                                    }} title="Valider" className="badge badge-pill bg-blue-grey"
                                       style={{marginRight: "5px"}}>V</a>
                                    <a onClick={() => {
                                        deleteCaisse(caisse.id)
                                    }} style={{marginRight: "5px"}}><i
                                        className="fa fa-trash col-pink" title="Supprimer"
                                        aria-hidden="true"></i></a>
                                </>}
                            <a href="#" onClick={() => {
                                shasha(caisse.id, 'imprimcaisse')
                            }} style={{marginRight: "5px"}}><i
                                className="fa fa-eye col-green"
                                aria-hidden="true"></i></a>
                            <a href={`/crm/caisse/${caisse.id}/${caisse.chantier.id}`}
                               className="text-left col-blue-grey bolo600">Caisse N° {caisse.numcaisse}</a>
                        </td>
                        <td className="text-right borde"><NumberFormat numb={dddeb}/></td>
                        <td className="text-right borde"><NumberFormat numb={cccred}/></td>
                        <td className="text-left ml30 borde" dangerouslySetInnerHTML={{__html: caisse.caissereference}}></td>
                    </tr>);
                }
                return null;
            } else {
                return null;
            }
        });
        return (<>
            {perso.type === 'personnelle' && <>
                {perso.corbeille === null &&
                    <>
                                <tr className="paginate4" onClick={() => {
                                    showBonPersos(perso.id)
                                }}>
                                    <td className="mw30 text-center"><input className="form-check-input" type="checkbox"
                                                                            value={perso.id} name="pers"/></td>
                                    <td className="text-left"><b className="col-blue">({avculen}) </b>{perso.noms}
                                    </td>
                                    <td className="text-right p-r-15"><NumberFormat numb={avperso}/></td>
                                    <td className="text-right p-r-15"><NumberFormat numb={avpersu}/></td>
                                    <td className="text-left p-r-15"><NumberFormat numb={avperso - avpersu}/></td>
                                </tr>
                                {renderCaisAvancesPerso}
                            </>
                }
            </>}
        </>);
    });

    let sacount = 0;
    let sasoto = 0;
    let sasuto = 0;
    const renderPersoSalaires = persos.map((perso) => {
        let caisses = perso.caisses;
        let saculen = 0;
        let saperso = 0;
        let sapersu = 0;

        if (perso.type === 'personnelle') {
            sacount = sacount + 1;
        }
        const renderCaisSalairePerso = caisses.map((caisse) => {
            if (caisse.corbeille === null && caisse.chantier.type === "personnel") {
                if (caisse.genre === "salaire") {
                    if (caisse.etat === "valide") {
                        if (caisse.operation === "debit") {
                            saperso = saperso + caisse.montant;
                            sasoto = sasoto + caisse.montant;
                        } else {
                            sapersu = sapersu + caisse.montant;
                            sasuto = sasuto + caisse.montant;
                        }
                        saculen = saculen + 1;
                    }

                    let dadeb = 0;
                    let cacred = 0;
                    if (caisse.operation === "debit") {
                        dadeb = caisse.montant;
                    }
                    if (caisse.operation === "credit") {
                        cacred = caisse.montant;
                    }

                    return (<tr key={caisse.id} className={perso.id + 'periso' + ' hide'}>
                        <td className="text-left bolo600 ml30 borde"><Moment
                            format="DD/MM/YYYY">{caisse.date}</Moment>
                        </td>
                        <td className="ml30 borde">
                            {caisse.etat === "valide" && <a onClick={() => {
                                devalideCaisse(caisse.id)
                            }} title="Dévalider" className="badge badge-pill bg-blue"
                                                            style={{marginRight: "5px"}}>V</a>}
                            {caisse.etat === "save" &&
                                <>
                                    <a onClick={() => {
                                        valideCaisse(caisse.id)
                                    }} title="Valider" className="badge badge-pill bg-blue-grey"
                                       style={{marginRight: "5px"}}>V</a>
                                    <a onClick={() => {
                                        deleteCaisse(caisse.id)
                                    }} style={{marginRight: "5px"}}><i
                                        className="fa fa-trash col-pink" title="Supprimer"
                                        aria-hidden="true"></i></a>
                                </>}
                            <a href="#" onClick={() => {
                                shasha(caisse.id, 'imprimcaisse')
                            }} style={{marginRight: "5px"}}><i
                                className="fa fa-eye col-green"
                                aria-hidden="true"></i></a>
                            <a href={`/crm/caisse/${caisse.id}/${caisse.chantier.id}`}
                               className="text-left col-blue-grey bolo600">Caisse N° {caisse.numcaisse}</a>
                        </td>
                        <td className="text-right borde"><NumberFormat numb={dadeb}/></td>
                        <td className="text-right borde"><NumberFormat numb={cacred}/></td>
                        <td className="text-left ml30 borde"
                            dangerouslySetInnerHTML={{__html: caisse.caissereference}}></td>
                    </tr>);
                }
                return null;
            } else {
                return null;
            }
        });
        return (<>
            {perso.type === 'personnelle' && <>
                {perso.corbeille === null &&
                   <>
                                <tr className="paginate4" onClick={() => {
                                    showBonPerso(perso.id)
                                }}>
                                    <td className="mw30 text-center"><input className="form-check-input" type="checkbox"
                                                                            value={perso.id} name="pers"/></td>
                                    <td className="text-left"><b className="col-blue">({saculen})</b>{perso.noms}
                                    </td>
                                    <td className="text-right p-r-15"><NumberFormat numb={saperso}/></td>
                                    <td className="text-right p-r-15"><NumberFormat numb={sapersu}/></td>
                                    <td className="text-left p-r-15"><NumberFormat numb={saperso - sapersu}/></td>
                                </tr>
                                {renderCaisSalairePerso}
                            </>
                }
            </>}
        </>);
    });

    const handlePersos = event => {
        let filter = event.target.value.toLowerCase();
        $("#persoos tbody tr.paginate4").filter(function () {
            $(this).toggle($(this).text().toLowerCase().replaceAll(' ', '').indexOf(filter) > -1)
        });
    };
    const showBonPerso = (id) => {
        if ($('.' + id + 'periso').hasClass("hide")) {
            $('.' + id + 'periso').removeClass('hide');
        } else {
            $('.' + id + 'periso').addClass('hide');
        }
    }
    const showBonPersos = (id) => {
        if ($('.' + id + 'perisos').hasClass("hide")) {
            $('.' + id + 'perisos').removeClass('hide');
        } else {
            $('.' + id + 'perisos').addClass('hide');
        }
    }
    const handleRelePerso = event => {
        let filter = event.target.value.toLowerCase();
        $("#relePerso tr.paginate11").filter(function () {
            $(this).toggle($(this).text().toLowerCase().replaceAll(' ', '').indexOf(filter) > -1)
        });
    };

    $('#adderCaissePersonnel').off().on("click", function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#adderCaissePersonnel').hide()
            $('#closerCaissePersonnel').hide()
            $('#loaderCaissePersonnel').css('display', '')
            $('#editor20').val(CKEDITOR.instances['editor20'].getData())
            $.ajax({
                type: 'POST',
                url: '/crm/caisse/personnel/add',
                data: JSON.stringify($('#addCaissePersonnelForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                        $('#modalCaissePerso').modal('toggle');
                        window.location.href = '/crm/caisse/' + respdata['result'][0]['numcaisse'] + '/' + respdata['result'][0]['idchantier']
                },
                error: function (xhr, resp, text) {
                    $('#modalCaissePerso').modal('toggle')
                    $('#ModalErreur').modal('show')
                },
            })
        }
    });

    $(function () {
        $(".js-example-basic-multiple").select2();
        $(".js-example-basic-single").select2();
        $("#persoos").simplePagination(('tbody .paginate4'));
    });

    return (<>
        <div className="col-md-12" style={{paddingLeft: "0"}}>
            <button type="button" data-color="blue" className="btn bg-blue-grey text-white bolo600 waves-effect"
                    data-toggle="modal" data-target="#modalCaissePerso">+ BON DE CAISSE POUR LE PERSONNEL
            </button>
            <div className="panel-group" id="accordion_2" role="tablist" aria-multiselectable="true">
                <div className="panel panel-pri shadow m-t-5" style={{marginTop: "20px"}}>
                    <div className="panel-heading" role="tab" id="headingPers">
                        <h4 className="panel-title">
                            <a className="collapsed  outai col-white" role="button" data-toggle="collapse"
                               data-parent="#accordionPers" href="#collapsePers" aria-expanded="false"
                               aria-controls="collapsePers">
                                <i className="material-icons col-white"
                                   style={{fontSize: "18px", float: "left"}}>keyboard_arrow_down</i>Le Personnel<span
                                className="badge bg-pink float-right">{perscount}</span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapsePers" className="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingPers">
                        <div className="panel-body " style={{overflow: "scroll"}}>
                            <div className="table-responsive shadow">
                                <div className="table-responsive shadow bg-white"
                                     style={{color: "#555", overflow: "scroll"}}>
                                    <h4 className="bolo700 col-blue">LE PERSONNEL</h4>
                                    <div className="row">
                                        <div className="col-md-8" style={{paddingTop: "20px"}}>
                                                <span className="m-r-5 vareact"><input type="checkbox"
                                                                                       name="checkPersos"
                                                                                       id="checkedPerso"/></span>
                                            <a href="#" id="editPerso" className="m-r-5 vareact"><i
                                                className="fa fa fa-edit  col-green"/></a>
                                            <a href="#" id="delPerso" className="m-r-5 vareact"><i
                                                className="fa fa fa-trash col-pink "/></a>
                                            <ReactHTMLTableToExcel
                                                id="test-table-xls-button"
                                                className="btn badge badge-pill col-green m-r-5 float-left vareact"
                                                table="persoos"
                                                title="Générer un fichier Excel"
                                                filename="LE PERSONNEL"
                                                sheet="tablexls"
                                                buttonText="Ex"/>
                                        </div>
                                        <div className="col-md-4 float-right">
                                            <div className="input-group">
                                                <div className="form-line">
                                                    <input type="text" className="form-control"
                                                           onChange={handlePersos}
                                                           placeholder="Rechercher"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table id="persoos" className="table-striped table-hover display nowrap"
                                           style={{width: "100%", overflowX: 'scroll', marginBottom: "10px"}}>
                                        <thead>
                                        <tr style={{borderBottom: "1px solid #000"}} className="bg-light">
                                            <th rowSpan="2"className="mw30 text-center">#</th>
                                            <th rowSpan="2">NOM & PRÉNOMS</th>
                                            <th colSpan="3" className="text-center">ENREGISTREMENTS</th>
                                        </tr>
                                        <tr style={{borderBottom: "1px solid #000"}}>
                                            <th className="bg-light text-right">SORTIE</th>
                                            <th className="bg-light text-right">ENTRÉE</th>
                                            <th className="bg-light text-left">SOLDE / RÉFÉRENCE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {renderPersos}
                                        </tbody>
                                        <tfoot>

                                        <tr style={{borderBottom: "1px solid #000"}}>
                                            <td></td>
                                            <td></td>
                                            <th className="text-right col-white bg-blue p20"
                                                style={{whiteSpace: "nowrap"}}><NumberFormat numb={frepersoto}/></th>
                                            <th className="text-right col-white bg-blue p20"
                                                style={{whiteSpace: "nowrap"}}><NumberFormat numb={frepersuto}/></th>
                                            <th className="text-left col-white bg-blue p20"
                                                style={{whiteSpace: "nowrap"}}><NumberFormat
                                                numb={frepersoto - frepersuto}/></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="panel panel-pri shadow">
                    <div className="panel-heading" role="tab" id="headingAvsal">
                        <h4 className="panel-title">
                            <a className="collapsed  outai col-white" role="button" data-toggle="collapse"
                               data-parent="#accordionAvsal" href="#collapseAvsal" aria-expanded="false"
                               aria-controls="collapseAvsal">
                                <i className="material-icons col-white"
                                   style={{fontSize: "18px", float: "left"}}>keyboard_arrow_down</i>Avances sur
                                salaire<span
                                className="badge bg-pink float-right">{perscount}</span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseAvsal" className="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingAvsal">
                        <div className="panel-body " style={{overflow: "scroll"}}>
                            <div className="table-responsive shadow">
                                <div className="table-responsive shadow bg-white"
                                     style={{color: "#555", overflow: "scroll"}}>
                                    <h4 className="bolo700 col-blue">AVANCES SUR SALAIRE</h4>
                                    <div className="row">
                                        <div className="col-md-8" style={{paddingTop: "20px"}}>
                                            <ReactHTMLTableToExcel
                                                id="test-table-xls-button"
                                                className="btn badge badge-pill col-green m-r-5 float-left vareact"
                                                table="persoos"
                                                title="Générer un fichier Excel"
                                                filename="LE PERSONNEL"
                                                sheet="tablexls"
                                                buttonText="Ex"/>
                                        </div>
                                        <div className="col-md-4 float-right">
                                            <div className="input-group">
                                                <div className="form-line">
                                                    <input type="text" className="form-control"
                                                           onChange={handlePersos}
                                                           placeholder="Rechercher"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table id="persoos" className="table-striped table-hover display nowrap"
                                           style={{width: "100%", overflowX: 'scroll', marginBottom: "10px"}}>
                                        <thead>
                                        <tr style={{borderBottom: "1px solid #000"}} className="bg-light">
                                            <th rowSpan="2"className="mw30 text-center">#</th>
                                            <th rowSpan="2">NOM & PRÉNOMS</th>
                                            <th colSpan="3" className="text-center">ENREGISTREMENTS</th>
                                        </tr>
                                        <tr style={{borderBottom: "1px solid #000"}}>
                                            <th className="bg-light text-right">SORTIE</th>
                                            <th className="bg-light text-right">ENTRÉE</th>
                                            <th className="bg-light text-left">SOLDE / RÉFÉRENCE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {renderPersoAvances}
                                        </tbody>
                                        <tfoot>
                                        <tr style={{borderBottom: "1px solid #000"}}>
                                            <th></th>
                                            <th></th>
                                            <th className="text-right col-white bg-blue"
                                                style={{whiteSpace: "nowrap"}}><NumberFormat numb={avsoto}/></th>
                                            <th className="text-right col-white bg-blue"
                                                style={{whiteSpace: "nowrap"}}><NumberFormat numb={avsuto}/></th>
                                            <th className="text-left col-white bg-blue"
                                                style={{whiteSpace: "nowrap"}}><NumberFormat
                                                numb={avsoto - avsuto}/></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="panel panel-pri shadow">
                    <div className="panel-heading" role="tab" id="headingPrInt">
                        <h4 className="panel-title">
                            <a className="collapsed  outai col-white" role="button" data-toggle="collapse"
                               data-parent="#accordionPrInt" href="#collapsePrInt" aria-expanded="false"
                               aria-controls="collapsePrInt">
                                <i className="material-icons col-white"
                                   style={{fontSize: "18px", float: "left"}}>keyboard_arrow_down</i>Prêts internes<span
                                className="badge bg-pink float-right">{perscount}</span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapsePrInt" className="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingPrInt">
                        <div className="panel-body " style={{overflow: "scroll"}}>
                            <div className="table-responsive shadow">
                                <div className="table-responsive shadow bg-white"
                                     style={{color: "#555", overflow: "scroll"}}>
                                    <h4 className="bolo700 col-blue">PRÊTS INTERNES</h4>
                                    <div className="row">
                                        <div className="col-md-8" style={{paddingTop: "20px"}}>
                                                <span className="m-r-5 vareact"><input type="checkbox"
                                                                                       name="checkPersos"
                                                                                       id="checkedPerso"/></span>
                                            <a href="#" id="editPerso" className="m-r-5 vareact"><i
                                                className="fa fa fa-edit  col-green"/></a>
                                            <a href="#" id="delPerso" className="m-r-5 vareact"><i
                                                className="fa fa fa-trash col-pink "/></a>
                                            <ReactHTMLTableToExcel
                                                id="test-table-xls-button"
                                                className="btn badge badge-pill col-green m-r-5 float-left vareact"
                                                table="persoos"
                                                title="Générer un fichier Excel"
                                                filename="LE PERSONNEL"
                                                sheet="tablexls"
                                                buttonText="Ex"/>
                                        </div>
                                        <div className="col-md-4 float-right">
                                            <div className="input-group">
                                                <div className="form-line">
                                                    <input type="text" className="form-control"
                                                           onChange={handlePersos}
                                                           placeholder="Rechercher"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table id="persoos" className="table-striped table-hover display nowrap"
                                           style={{width: "100%", overflowX: 'scroll', marginBottom: "10px"}}>
                                        <thead>
                                        <tr style={{borderBottom: "1px solid #000"}} className="bg-light">
                                            <th rowSpan="2"className="mw30 text-center">#</th>
                                            <th rowSpan="2">NOM & PRÉNOMS</th>
                                            <th colSpan="3" className="text-center">ENREGISTREMENTS</th>
                                        </tr>
                                        <tr style={{borderBottom: "1px solid #000"}}>
                                            <th className="bg-light text-right">SORTIE</th>
                                            <th className="bg-light text-right">ENTRÉE</th>
                                            <th className="bg-light text-left">SOLDE / RÉFÉRENCE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {renderPersoPrets}
                                        </tbody>
                                        <tfoot>
                                        <tr style={{borderBottom: "1px solid #000"}}>
                                            <th></th>
                                            <th></th>
                                            <th className="text-right col-white bg-blue"
                                                style={{whiteSpace: "nowrap"}}><NumberFormat numb={pretsoto}/></th>
                                            <th className="text-right col-white bg-blue"
                                                style={{whiteSpace: "nowrap"}}><NumberFormat numb={pretsuto}/></th>
                                            <th className="text-left col-white bg-blue"
                                                style={{whiteSpace: "nowrap"}}><NumberFormat
                                                numb={pretsoto - pretsuto}/></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="panel panel-pri shadow">
                    <div className="panel-heading" role="tab" id="headingPeSal">
                        <h4 className="panel-title">
                            <a className="collapsed  outai col-white" role="button" data-toggle="collapse"
                               data-parent="#accordionPeSal" href="#collapsePeSal" aria-expanded="false"
                               aria-controls="collapsePeSal">
                                <i className="material-icons col-white"
                                   style={{fontSize: "18px", float: "left"}}>keyboard_arrow_down</i>Salaires<span
                                className="badge bg-pink float-right">{perscount}</span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapsePeSal" className="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingPeSal">
                        <div className="panel-body " style={{overflow: "scroll"}}>
                            <div className="table-responsive shadow">
                                <div className="table-responsive shadow bg-white"
                                     style={{color: "#555", overflow: "scroll"}}>
                                    <h4 className="bolo700 col-blue">SALAIRES</h4>
                                    <div className="row">
                                        <div className="col-md-8" style={{paddingTop: "20px"}}>
                                                <span className="m-r-5 vareact"><input type="checkbox"
                                                                                       name="checkPersos"
                                                                                       id="checkedPerso"/></span>
                                            <a href="#" id="editPerso" className="m-r-5 vareact"><i
                                                className="fa fa fa-edit  col-green"/></a>
                                            <a href="#" id="delPerso" className="m-r-5 vareact"><i
                                                className="fa fa fa-trash col-pink "/></a>
                                            <ReactHTMLTableToExcel
                                                id="test-table-xls-button"
                                                className="btn badge badge-pill col-green m-r-5 float-left vareact"
                                                table="persoos"
                                                title="Générer un fichier Excel"
                                                filename="LE PERSONNEL"
                                                sheet="tablexls"
                                                buttonText="Ex"/>
                                        </div>
                                        <div className="col-md-4 float-right">
                                            <div className="input-group">
                                                <div className="form-line">
                                                    <input type="text" className="form-control"
                                                           onChange={handlePersos}
                                                           placeholder="Rechercher"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table id="persoos" className="table-striped table-hover display nowrap"
                                           style={{width: "100%", overflowX: 'scroll', marginBottom: "10px"}}>
                                        <thead>
                                        <tr style={{borderBottom: "1px solid #000"}} className="bg-light">
                                            <th rowSpan="2" className="mw30 text-center">#</th>
                                            <th rowSpan="2">NOM & PRÉNOMS</th>
                                            <th colSpan="3" className="text-center">ENREGISTREMENTS</th>
                                        </tr>
                                        <tr style={{borderBottom: "1px solid #000"}}>
                                            <th className="bg-light text-right">SORTIE</th>
                                            <th className="bg-light text-right">ENTRÉE</th>
                                            <th className="bg-light text-left">SOLDE / RÉFÉRENCE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {renderPersoSalaires}
                                        </tbody>
                                        <tfoot>

                                        <tr style={{borderBottom: "1px solid #000"}}>
                                            <th></th>
                                            <th></th>
                                            <th className="text-right col-white bg-blue"
                                                style={{whiteSpace: "nowrap"}}><NumberFormat numb={sasoto}/></th>
                                            <th className="text-right col-white bg-blue"
                                                style={{whiteSpace: "nowrap"}}><NumberFormat numb={sasuto}/></th>
                                            <th className="text-left col-white bg-blue"
                                                style={{whiteSpace: "nowrap"}}><NumberFormat
                                                numb={sasoto - sasuto}/></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="panel panel-pri shadow">
                    <div className="panel-heading" role="tab" id="headingImpus">
                        <h4 className="panel-title">
                            <a className="collapsed  col-white" role="button" data-toggle="collapse"
                               data-parent="#accordionImpus" href="#collapseImpus" aria-expanded="false"
                               aria-controls="collapseImpus">
                                <i className="material-icons col-white"
                                   style={{fontSize: "18px", float: "left"}}>keyboard_arrow_down</i>Rélévé des
                                opérations
                                du personnel<span className="badge bg-pink float-right">{rpcount}</span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseImpus" className="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingImpus">
                        <div className="panel-body " style={{overflow: "scroll"}}>
                            <div className="table-responsive shadow bg-white"
                                 style={{color: "#555"}}>
                                <div className="row">
                                    <div className="col-md-8" style={{paddingTop: "20px"}}>
                                        <ReactHTMLTableToExcel
                                            id="test-table-xls-button"
                                            className="btn badge badge-pill col-green m-r-5 float-left vareact"
                                            table="relePerso"
                                            title="Générer un fichier Excel"
                                            filename="RÉLÉVÉ DES FRAIS PERSONNELS"
                                            sheet="tablexls"
                                            buttonText="Ex"/>
                                    </div>
                                    <div className="col-md-4 float-right">
                                        <div className="input-group">
                                            <div className="form-line">
                                                <input type="text" className="form-control"
                                                       onChange={handleRelePerso}
                                                       placeholder="Rechercher"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table className="table-striped table-hover display nowrap"
                                       style={{width: "100%", marginBottom: "10px"}} id="relePerso">
                                    <thead>
                                    <tr>
                                        <th>DATE</th>
                                        <th>Nº DE BON</th>
                                        <th>RÉFÉRENCE</th>
                                        <th>SORTIE DE CAISSE</th>
                                        <th>ENTRÉE DE CAISSE</th>
                                        <th>VALIDÉ PAR</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {renderRelePerso}
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <th className="text-center col-white bg-blue"
                                            style={{whiteSpace: "nowrap"}}><NumberFormat numb={rpdebit}/></th>
                                        <th className="text-center col-white bg-blue"
                                            style={{whiteSpace: "nowrap"}}><NumberFormat numb={rpcredit}/></th>
                                        <td className="text-left col-blue"></td>
                                    </tr>
                                    </tfoot>
                                </table>
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </>);
}

try {
    const root = createRoot(document.getElementById('setchargespersonnelles'));
    root.render(<ChargesPersonnelles/>);
} catch (e) {
}
