import React, {useEffect, useState} from "react";
import {createRoot} from 'react-dom/client';
import axios from "axios";
import ReactHTMLTableToExcel from 'react-html-table-to-excel';
import NumberFormat from "../../fonctions/NumberFormat";
import Moment from 'react-moment';
import $ from "jquery";

const ChargesInternes = () => {

    const [persos, setPersos] = useState([]);
    const [caissin, setCaissin] = useState([]);

    const fetchPersos = async () => {
        const dede = JSON.parse($('#jsonpersos').val());
        setPersos(dede);
    };
    const fetchCaisseInterne = async () => {
        const dede = JSON.parse($('#caisseinterne').val());
        setCaissin(dede);
    };

    if ($("#idcharge").val()) {
        $('#modalInterne').modal('show');
    }

    useEffect(() => {
        fetchPersos();
        fetchCaisseInterne();
    }, []);

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

    let charcount = 0;
    let frinterne = 0;

    const renderInterne = persos.map((perso) => {
        let caisses = perso.caisses;
        let cclen = 0;
        let freinterne = 0;
        charcount = charcount + 1;
        if (perso.type !== 'personnelle') {
            charcount = charcount + 1;
        }
        const renderCais = caisses.map((caisse) => {
            if (caisse.corbeille === null && caisse.chantier.type === "frais") {
                let opir = "";
                if (caisse.etat === "valide") {
                    if (caisse.operation === "debit") {
                        frinterne = frinterne + caisse.montant;
                        freinterne = freinterne + caisse.montant;
                        opir = "Sortie de caisse";
                    } else {
                        frinterne = frinterne - caisse.montant;
                        freinterne = freinterne - caisse.montant;
                        opir = "Entrée de caisse";
                    }
                    cclen = cclen + 1;
                }
                return (<tr key={caisse.id} className={perso.id + 'charge' + ' hide'}>
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
                           className="text-left col-blue-grey bolo600">Caisse N° {caisse.numcaisse} </a>
                    </td>
                    <td className="text-center">{opir}</td>
                    <td className="text-right borde"><NumberFormat numb={caisse.montant}/></td>
                    <td className="text-left ml30 borde" colSpan="5"
                        dangerouslySetInnerHTML={{__html: caisse.caissereference}}></td>
                </tr>);
            } else {
                return null;
            }
        });
        return (<>
            {perso.type !== 'personnelle' && <>
                {perso.corbeille === null &&
                    <>
                        <tr className="paginate5" key={perso.id} onClick={() => {
                            showBonCharge(perso.id)
                        }}>
                            <td className="mw30 text-center"><input className="form-check-input" type="checkbox" value={perso.id} name="inter"/></td>
                            <td className="text-left"><b className="col-blue">({cclen}) </b> {perso.noms}</td>
                            <td className="text-right p-r-15"></td>
                            <td className="text-right p-r-15"><NumberFormat numb={freinterne}/></td>
                            <td className="text-left col-blue p-r-15"><i
                                className="fa fa-user pri"></i> {perso.dobyuser !== null && <>{perso.dobyuser.nom.toUpperCase()} {perso.dobyuser.prenoms.toUpperCase()}</>}
                            </td>
                        </tr>
                        {renderCais}
                    </>
                }
            </>
            }
        </>);
    });

    let bincount = 0;
    let frnvinterne = 0;
    const renderCaisseInterneNonValides = caissin.map((caiss) => {
        if (caiss.corbeille === null && caiss.etat === "save") {
            if (caiss.personnel.corbeille === null) {
                bincount = bincount + 1;
                frnvinterne = frnvinterne + caiss.montant;
            }
        }

        return (<>

            {caiss.corbeille === null && caiss.personnel.corbeille === null &&
                <>
                {caiss.etat === "save" && <tr key={caiss.id} className="paginate6">
                    <td className="mw30 text-center"><input className="form-check-input" type="checkbox"
                                                            value={caiss.id} name="caissneva"/></td>
                    <td className="text-center">
                        <a href="#" onClick={() => {
                            shasha(caiss.id, 'imprimcaisse')
                        }} style={{marginRight: "5px"}}><i
                            className="fa fa-eye col-green"
                            aria-hidden="true"></i></a>
                    </td>
                    <td><Moment format="DD/MM/YYYY">{caiss.date}</Moment></td>
                    <td><a href={`/crm/caisse/${caiss.id}/${caiss.chantier.id}`}><span
                        className="badge badge-pill bg-blue-grey col-white m-r-5">V</span>{caiss.numcaisse}</a></td>
                    <td>  {caiss.personnel !== null && caiss.personnel.noms.toUpperCase()}</td>
                    <td dangerouslySetInnerHTML={{__html: caiss.personnel !== null && caiss.caissereference}}></td>
                    <td className="text-right">{caiss.montant}</td>
                    <td className="text-left pri bolo600"><i
                        className="fa fa-user pri"></i>&nbsp;{caiss.dobyuser.nom.toUpperCase() + ' '} {caiss.dobyuser.prenoms.toUpperCase()}
                    </td>
                </tr>}
               </>
            }
        </>);
    });

    let bivcount = 0;
    let frvinterne = 0;
    const renderCaisseInterneValides = caissin.map((caiss) => {
        if (caiss.corbeille === null && caiss.etat === "valide") {
            if (caiss.personnel.corbeille === null) {
            bivcount = bivcount + 1;
            frvinterne = frvinterne + caiss.montant;
            }
        }
        return (<>
            {caiss.corbeille === null && caiss.personnel.corbeille === null && <>
                {caiss.etat === "valide" && <tr key={caiss.id} className="paginate7">
                    <td className="mw30 text-center"><input className="form-check-input" type="checkbox"
                                                            value={caiss.id} name="caissva"/></td>
                    <td className="text-center">
                        <a href="#" onClick={() => {
                            shasha(caiss.id, 'imprimcaisse')
                        }} style={{marginRight: "5px"}}><i
                            className="fa fa-eye col-green"
                            aria-hidden="true"></i></a>
                    </td>
                    <td><Moment format="DD/MM/YYYY">{caiss.date}</Moment></td>
                    <td>
                        <a href={`/crm/caisse/${caiss.id}/${caiss.chantier.id}`}>
                            <span className="badge badge-pill badge-primary m-r-5">V</span>
                            {caiss.numcaisse}
                        </a></td>
                    <td>  {caiss.personnel !== null && caiss.personnel.noms.toUpperCase()}</td>
                    <td dangerouslySetInnerHTML={{__html: caiss.personnel !== null && caiss.caissereference}}></td>
                    <td className="text-right"><NumberFormat numb={caiss.montant}/></td>
                    <td className="text-left pri bolo600"><i
                        className="fa fa-user pri"></i> &nbsp;{caiss.dobyuser.nom.toUpperCase() + ' '} {caiss.dobyuser.prenoms.toUpperCase()}
                    </td>
                </tr>}
            </>}
        </>);
    });

    let ricount = 0;
    let soreinternedebit = 0;
    let soreinternecredit = 0;
    const renderReleInterne = caissin.map((caiss) => {
        if (caiss.corbeille === null && caiss.etat === "valide") {
            ricount = ricount + 1;
            if (caiss.operation === "debit") {
                soreinternedebit = soreinternedebit + caiss.montant;
            }
            if (caiss.operation === "credit") {
                soreinternecredit = soreinternecredit + caiss.montant;
            }
        }
        return (<>
            {caiss.corbeille === null &&
                <>
                    {caiss.etat === "valide" && <tr key={caiss.id} className="paginate10">
                        <td className="text-center"><Moment format="DD/MM/YYYY">{caiss.date}</Moment></td>
                        <td><a href={`/crm/caisse/${caiss.id}/${caiss.chantier.id}`}>{caiss.numcaisse}</a>
                        </td>
                        <td className="text-left" dangerouslySetInnerHTML={{__html: caiss.caissereference}}/>
                        <td className="text-right">{caiss.operation === 'debit' &&
                            <NumberFormat numb={caiss.montant}/>}</td>
                        <td className="text-right">{caiss.operation === 'credit' &&
                            <NumberFormat numb={caiss.montant}/>}</td>
                        <td className="text-left pri bolo600"><i
                            className="fa fa-user pri"></i> &nbsp;{caiss.dobyuser.nom.toUpperCase() + ' '} {caiss.dobyuser.prenoms.toUpperCase()}
                        </td>
                    </tr>}
                </>}
        </>);
    });

    const handleInterne = event => {
        let filter = event.target.value.toLowerCase();
        $("#internes tr.paginate5").filter(function () {
            $(this).toggle($(this).text().toLowerCase().replaceAll(' ', '').indexOf(filter) > -1)
        });
    };
    const handleBonInterneNonValides = event => {
        let filter = event.target.value.toLowerCase();
        $("#boninternesneva tr.paginate6").filter(function () {
            $(this).toggle($(this).text().toLowerCase().replaceAll(' ', '').indexOf(filter) > -1)
        });
    };
    const handleBonInterneValides = event => {
        let filter = event.target.value.toLowerCase();
        $("#boninternesva tr.paginate7").filter(function () {
            $(this).toggle($(this).text().toLowerCase().replaceAll(' ', '').indexOf(filter) > -1)
        });
    };
    const handleReleInterne = event => {
        let filter = event.target.value.toLowerCase();
        $("#releInterne tr.paginate10").filter(function () {
            $(this).toggle($(this).text().toLowerCase().replaceAll(' ', '').indexOf(filter) > -1)
        });
    };

    const showBonCharge = (id) => {
        if ($('.' + id + 'charge').hasClass("hide")) {
            $('.' + id + 'charge').removeClass('hide');
        } else {
            $('.' + id + 'charge').addClass('hide');
        }
    }

    $("#editInterne").off().on("click", function () {
        $.each($("input[name='inter']:checked"), function () {
            window.$('#Traitement').modal('show');
            window.location.href = '/crm/chargesinternes/edit/charge/' + $(this).val();
            return false;
        });
    });
    $("#delInterne").off().on("click", function () {
        $.each($("input[name='inter']:checked"), function () {
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

    $('#addInter').off().on("click", function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#addInter').hide()
            $('#closeInter').hide()
            $('#loadInter').css('display', '')
            $.ajax({
                type: 'POST',
                url: '/crm/personnel/operation/add',
                data: JSON.stringify($('#addInterForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    location.reload()
                },
                error: function (xhr, resp, text) {
                    $('#ModalErreur').modal('show')
                },
            })
        }
    })
    $('#updInter').off().on("click", function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#updInter').hide()
            $('#closerChargeInterne').hide()
            $('#loadInter').css('display', '')
            $.ajax({
                type: 'POST',
                url: '/crm/personnel/update/'+ $("#idcharge").val(),
                data: JSON.stringify($('#addInterForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    window.location.href = '/crm/chargesinternes/';
                },
                error: function (xhr, resp, text) {
                    $('#ModalErreur').modal('show')
                },
            })
        }
    })
    $('#adderCaisse').off().on("click", function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#adderCaisse').hide()
            $('#closerCaisse').hide()
            $('#loaderCaisse').css('display', '')
            $('#editor19').val(CKEDITOR.instances['editor19'].getData());
            $('#editor20').val(CKEDITOR.instances['editor20'].getData());
            $.ajax({
                type: 'POST',
                url: '/crm/caisse/frais/add',
                data: JSON.stringify($('#addCaisseChargeForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    if (jqXHR.status == '201') {
                        $('#mdModalCaisse').modal('toggle');
                        window.location.href = '/crm/caisse/' + respdata['result'][0]['numcaisse'] + '/' + respdata['result'][0]['idchantier']
                    }
                },
                error: function (xhr, resp, text) {
                    $('#mdModalCaisse').modal('toggle')
                    $('#ModalErreur').modal('show')
                },
            })
        }
    })

    $(function () {
        $(".js-example-basic-multiple").select2();
        $(".js-example-basic-single").select2();
        $("#internes").simplePagination(('tbody .paginate5'));
    });

    return (<>
        <div className="col-md-12" style={{paddingLeft: "0", marginTop: "20px"}}>
            <button type="button" data-color="blue" className="btn bg-blue-grey text-white"
                    data-toggle="modal" data-target="#modalInterne" style={{border: "1px solid #dddfeb"}}>+ CHARGE INTERNE
            </button>
            <button type="button" data-toggle="modal" data-target="#modalCaisseCharge"
                    className="btn bg-blue-grey text-white" style={{border: "1px solid #dddfeb"}}>+
                PAIEMENT CHARGE INTERNE
            </button>
            <div className="panel-group" id="accordion_2" role="tablist" aria-multiselectable="true">
                <div className="panel panel-pri shadow m-t-5">
                    <div className="panel-heading" role="tab" id="headingChargin">
                        <h4 className="panel-title">
                            <a className="collapsed  outai col-white" role="button" data-toggle="collapse"
                               data-parent="#accordionChargin" href="#collapseChargin" aria-expanded="false"
                               aria-controls="collapseChargin">
                                <i className="material-icons col-white"
                                   style={{fontSize: "18px", float: "left"}}>keyboard_arrow_down</i>Les Charges
                                Internes<span
                                className="badge bg-pink float-right">{charcount}</span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseChargin" className="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingChargin">
                        <div className="panel-body " style={{overflow: "scroll"}}>
                            <div className="table-responsive shadow">
                                <div className="row">
                                    <div className="col-md-8" style={{paddingTop: "20px"}}>

                                        <a href="#" id="editInterne" className="m-r-5 vareact"><i
                                            className="fa fa fa-edit  col-green"/></a>
                                        <a href="#" id="delInterne" className="m-r-5 vareact"><i
                                            className="fa fa fa-trash col-pink "/></a>
                                        <ReactHTMLTableToExcel
                                            id="test-table-xls-button"
                                            className="btn badge badge-pill col-green m-r-5 float-left vareact"
                                            table="internes"
                                            title="Générer un fichier Excel"
                                            filename="CHARGE INTERNE"
                                            sheet="tablexls"
                                            buttonText="Ex"/>
                                    </div>
                                    <div className="col-md-4 float-right">
                                        <div className="input-group">
                                            <div className="form-line">
                                                <input type="text" className="form-control"
                                                       onChange={handleInterne}
                                                       placeholder="Rechercher"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table id="internes" className="table-striped table-hover display nowrap"
                                       style={{width: "100%", marginBottom: "10px"}}>
                                    <thead>
                                    <tr style={{borderBottom: "1px solid #000"}}>
                                        <th className="mw30 text-center">#</th>
                                        <th className="mw400 p-r-15">CHARGE INTERNE</th>
                                        <th className="mw150 p-r-15">OPÉRATIONS</th>
                                        <th className="mw150 text-right p-r-15">MONTANT</th>
                                        <th className="mw200">AJOUTER PAR</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {renderInterne}
                                    </tbody>
                                    <tfoot>
                                    <tr className="text-center">
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th className="text-right col-white bg-blue" style={{whiteSpace: "nowrap"}}>
                                            <NumberFormat numb={frinterne}/></th>
                                        <th></th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="panel panel-pri shadow m-t-5">
                    <div className="panel-heading" role="tab" id="headingfrais">
                        <h4 className="panel-title">
                            <a className="collapsed  col-white" role="button" data-toggle="collapse"
                               data-parent="#accordionfrais" href="#collapsefrais" aria-expanded="false"
                               aria-controls="collapsefrais">
                                <i className="material-icons col-white"
                                   style={{fontSize: "18px", float: "left"}}>keyboard_arrow_down</i>Bons internes non
                                validés<span
                                className="badge bg-pink float-right">{bincount}</span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapsefrais" className="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingfrais">
                        <div className="panel-body " style={{overflow: "scroll"}}>
                            <div className="table-responsive shadow">
                                <div className="table-responsive shadow bg-white"
                                     style={{color: "#555", overflowX: "scroll"}}>

                                    <div className="row">
                                        <div className="col-md-8" style={{paddingTop: "20px"}}>
                                            <span className="m-r-5 vareact" title="Tout sélectionner"><input
                                                type="checkbox" name="checkBinva" id="checkedBinva"/></span>
                                            <a title="Valider" style={{textDecoration: "none"}}
                                               className="m-r-5 vareact bg-blue bolo700 col-white"
                                               id="valideCaisse">V</a>
                                            <a title="Supprimer" id="delCaisse" className="m-r-5 vareact"><i
                                                className="fa fa fa-trash col-pink "/></a>
                                            <ReactHTMLTableToExcel
                                                id="test-table-xls-button"
                                                className="btn badge badge-pill col-green m-r-5 float-left vareact"
                                                table="boninternesneva"
                                                title="Générer un fichier Excel"
                                                filename="BONS DE CAISSE INTERNES NON VALIDÉS"
                                                sheet="tablexls"
                                                buttonText="Ex"/>
                                        </div>
                                        <div className="col-md-4 float-right">
                                            <div className="input-group">
                                                <div className="form-line">
                                                    <input type="text" className="form-control"
                                                           onChange={handleBonInterneNonValides}
                                                           placeholder="Rechercher"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table className="table-striped table-hover display nowrap" id="boninternesneva"
                                           style={{width: "100%", marginBottom: "10px"}}>
                                        <thead>
                                        <tr className="text-center" style={{borderBottom: "1px solid #000"}}>
                                            <th className="mw30 text-center">#</th>
                                            <th className="mw30 text-center"></th>
                                            <th>DATE</th>
                                            <th className="mw120">N° BON</th>
                                            <th className="mw300">FACTURÉ À</th>
                                            <th className="mw200">RÉFÉRENCE</th>
                                            <th>MONTANT</th>
                                            <th className="mw200">CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {renderCaisseInterneNonValides}
                                        </tbody>
                                        <tfoot>
                                        <tr className="text-center">
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th className="text-center col-white bg-blue"
                                                style={{whiteSpace: "nowrap"}}><NumberFormat numb={frnvinterne}/></th>
                                            <th></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="panel panel-pri shadow m-t-5">
                    <div className="panel-heading" role="tab" id="headingfraise">
                        <h4 className="panel-title">
                            <a className="collapsed  col-white" role="button" data-toggle="collapse"
                               data-parent="#accordionfraise" href="#collapsefraise" aria-expanded="false"
                               aria-controls="collapsefraise">
                                <i className="material-icons col-white"
                                   style={{fontSize: "18px", float: "left"}}>keyboard_arrow_down</i>Bons internes
                                validés<span
                                className="badge bg-pink float-right">{bivcount}</span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapsefraise" className="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingfraise">
                        <div className="panel-body " style={{overflow: "scroll"}}>
                            <div className="table-responsive shadow">
                                <div className="table-responsive shadow bg-white"
                                     style={{color: "#555", overflowX: "scroll"}}>

                                    <div className="row">
                                        <div className="col-md-8" style={{paddingTop: "20px"}}>
                                            <span className="m-r-5 vareact" title="Tout sélectionner"><input
                                                type="checkbox" name="checkBiva" id="checkedBiva"/></span>
                                            <a title="Dévalider" style={{textDecoration: "none"}}
                                               className="m-r-5 vareact bg-blue-grey bolo700 col-white"
                                               id="devalideCaisse">V</a>
                                            <ReactHTMLTableToExcel
                                                id="test-table-xls-button"
                                                className="btn badge badge-pill col-green m-r-5 float-left vareact"
                                                table="boninternesva"
                                                title="Générer un fichier Excel"
                                                filename="BONS DE CAISSE INTERNES VALIDÉS"
                                                sheet="tablexls"
                                                buttonText="Ex"/>
                                        </div>
                                        <div className="col-md-4 float-right">
                                            <div className="input-group">
                                                <div className="form-line">
                                                    <input type="text" className="form-control"
                                                           onChange={handleBonInterneValides}
                                                           placeholder="Rechercher"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table className="table-striped table-hover display nowrap" id="boninternesva"
                                           style={{width: "100%", marginBottom: "10px"}}>
                                        <thead>
                                        <tr className="text-center" style={{borderBottom: "1px solid #000"}}>
                                            <th className="mw30 text-center">#</th>
                                            <th className="mw30 text-center"></th>
                                            <th>DATE</th>
                                            <th className="mw120">N° BON</th>
                                            <th className="mw300">FACTURÉ À</th>
                                            <th className="mw200">RÉFÉRENCE</th>
                                            <th>MONTANT</th>
                                            <th className="mw200">CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {renderCaisseInterneValides}
                                        </tbody>
                                        <tfoot>
                                        <tr className="text-center">
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th className="text-center col-white bg-blue"
                                                style={{whiteSpace: "nowrap"}}><NumberFormat numb={frvinterne}/></th>
                                            <th></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="panel panel-pri shadow">
                    <div className="panel-heading" role="tab" id="headingImpin">
                        <h4 className="panel-title">
                            <a className="collapsed  col-white" role="button" data-toggle="collapse"
                               data-parent="#accordionImpin" href="#collapseImpin" aria-expanded="false"
                               aria-controls="collapseImpin">
                                <i className="material-icons col-white"
                                   style={{fontSize: "18px", float: "left"}}>keyboard_arrow_down</i>Rélévé des charges
                                internes<span
                                className="badge bg-pink float-right">{ricount}</span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseImpin" className="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingImpin">
                        <div className="panel-body " style={{overflow: "scroll"}}>
                            <div className="table-responsive shadow bg-white"
                                 style={{color: "#555"}}>
                                <div className="row">
                                    <div className="col-md-8" style={{paddingTop: "20px"}}>
                                        <ReactHTMLTableToExcel
                                            id="test-table-xls-button"
                                            className="btn badge badge-pill col-green m-r-5 float-left vareact"
                                            table="releInterne"
                                            title="Générer un fichier Excel"
                                            filename="RÉLÉVÉ DES FRAIS INTERNE"
                                            sheet="tablexls"
                                            buttonText="Ex"/>
                                    </div>
                                    <div className="col-md-4 float-right">
                                        <div className="input-group">
                                            <div className="form-line">
                                                <input type="text" className="form-control"
                                                       onChange={handleReleInterne}
                                                       placeholder="Rechercher"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table className="table-striped table-hover display nowrap"
                                       style={{width: "100%", marginBottom: "10px"}} id="releInterne">
                                    <thead>
                                    <tr>
                                        <th className="text-center">DATE</th>
                                        <th>OPÉRATION</th>
                                        <th>RÉFÉRENCE</th>
                                        <th>SORTIE</th>
                                        <th>ENTRÉE</th>
                                        <th>VALIDÉ PAR</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {renderReleInterne}
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <th className="text-center col-white bg-blue"
                                            style={{whiteSpace: "nowrap"}}><NumberFormat numb={soreinternedebit}/></th>
                                        <th className="text-center col-white bg-blue"
                                            style={{whiteSpace: "nowrap"}}><NumberFormat numb={soreinternecredit}/></th>
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
    const root = createRoot(document.getElementById('setchargesinternes'));
    root.render(<ChargesInternes/>);
} catch (e) {
}
