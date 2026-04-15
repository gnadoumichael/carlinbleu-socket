import React, {useEffect, useState} from "react";
import {createRoot} from 'react-dom/client';
import axios from "axios";
import ReactHTMLTableToExcel from 'react-html-table-to-excel';
import NumberFormat from "../../fonctions/NumberFormat";
import Moment from 'react-moment';
import $ from "jquery";

const ListeFournisseurs = () => {
    let furne = $("#fournes").val();
    const [fourne, setFourne] = useState([]);

    const fetchFourne = async () => {
        const data = JSON.parse($('#jsonfournes').val());
        setFourne(data)
    };

    useEffect(() => {
        fetchFourne();

    }, []);

    const showBonFourne = (id) => {
        if ($('.' + id + 'foune').hasClass("hide")) {
            $('.' + id + 'foune').removeClass('hide');
        } else {
            $('.' + id + 'foune').addClass('hide');
        }
    }

    let fttc = 0;
    let frec = 0;
    let fres = 0;
    let fourcount = 0;
    const renderFourne = fourne.map((foune) => {
        let bons = foune.bons;
        fourcount = fourcount + 1;
        let ttc = 0;
        let rec = 0;
        let res = 0;
        let bbcount = 0;
        bons = bons.sort(function (a, b) {
            return a.chantier.nomchantier - b.chantier.nomchantier;
        });
        const renderBones = bons.map((bon) => {
            if (bon.corbeille === null) {
                bbcount = bbcount + 1;
                if (bon.etat === 'valide') {
                    ttc = ttc + bon.totalttc;
                    rec = rec + bon.recu;
                    res = res + bon.reste;

                    fttc = fttc + bon.totalttc;
                    frec = frec + bon.recu;
                    fres = fres + bon.reste;
                }
                let caisses = bon.caisses;

                const renderCaissees = caisses.map((caisse) => {
                    return (<tr key={caisse.id} className={foune.id + 'foune' + ' hide'}>
                        <td className="text-left bolo600 ml30 borde"></td>
                        <td className="ml60 borde">
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
                                        delCaisse(caisse.id)
                                    }} style={{marginRight: "5px"}}><i className="fa fa-trash col-pink"
                                                                       title="Supprimer" aria-hidden="true"></i></a>

                                </>}
                            <a href="#" onClick={() => {
                                shasha(caisse.id, 'imprimcaisse')
                            }} style={{marginRight: "5px"}}><i
                                className="fa fa-eye col-green"
                                aria-hidden="true"></i></a>
                            <a href={`/crm/caisse/${caisse.id}/${bon.chantier.id}`}
                               className="text-left col-blue-grey bolo600">Caisse N° {caisse.numcaisse}</a>
                        </td>
                        <td className="text-right borde"><NumberFormat numb={caisse.montant}/></td>
                        <td className="text-left ml30 borde" colSpan="5"
                            dangerouslySetInnerHTML={{__html: caisse.caissereference}}></td>
                    </tr>);
                });
                return (<>
                    <tr key={bon.id} className={foune.id + 'foune' + ' hide'} style={{backgroundColor: "#dae8f5"}}>
                        <td className="text-left bolo600 ml30 borde"><Moment format="DD/MM/YYYY">{bon.date}</Moment>
                        </td>
                        <td className="text-left pri ml30 borde">
                            {bon.etat === "valide" && <a onClick={() => {
                                devalideBon(bon.id)
                            }} title="Dévalider" className="badge badge-pill bg-blue"
                                                         style={{marginRight: "5px"}}>V</a>}
                            {bon.etat === "save" &&
                                <>
                                    <a onClick={() => {
                                        valideBon(bon.id)
                                    }} title="Valider" className="badge badge-pill bg-blue-grey"
                                       style={{marginRight: "5px"}}>V</a>
                                    <a onClick={() => {
                                        delBon(bon.id)
                                    }} style={{marginRight: "5px"}}><i className="fa fa-trash col-pink"
                                                                       title="Supprimer" aria-hidden="true"></i></a>
                                </>}
                            <a href="#" onClick={() => {
                                shasha(bon.id, 'imprimbon')
                            }} style={{marginRight: "5px"}}><i
                                className="fa fa-eye col-green"
                                aria-hidden="true"></i></a>
                            <a href={`/crm/bon/${bon.id}/${bon.chantier.id}`}> Bon N° {bon.numbon}</a>
                        </td>
                        <td className="text-right borde"><NumberFormat numb={bon.totalttc}/></td>
                        <td className="text-right borde"><NumberFormat numb={bon.recu}/></td>
                        <td className="text-right borde"><NumberFormat numb={bon.reste}/></td>
                        <td className="text-left ml30 borde"
                            colSpan="2">{bon.client.nomclient.toUpperCase()} | {bon.chantier.nomchantier.toUpperCase()}</td>
                        <td className="text-left borde" dangerouslySetInnerHTML={{__html: bon.bonreference}}></td>
                    </tr>
                    {renderCaissees}
                </>)
            } else {
                return null;
            }
        });
        return (<>
            <tr className="paginate3" key={foune.id} onClick={() => {
                showBonFourne(foune.id)
            }}>
                <td className="mw30 text-center"><input className="form-check-input" type="checkbox"
                                                        value={foune.id} name="fourne"/></td>
                <td className="text-left" colSpan="2"><b className={"col-blue"}>({bbcount})</b> {foune.fournisseur}
                </td>
                <td className="text-right"><NumberFormat numb={ttc}/></td>
                <td className="text-right"><NumberFormat numb={rec}/></td>
                <td className="text-right"><NumberFormat numb={res}/></td>
                <td className="text-center" colSpan="2">{foune.titre}</td>
                <td className="text-center">{foune.mobile}</td>
                <td className="text-center">{foune.mail}</td>
                <td className="text-center">{foune.adresse}</td>
            </tr>
            <tr className={foune.id + 'foune' + ' hide'}>
                <td className="text-left bolo600 col-pink ml30 borde">Date</td>
                <td className="text-left bolo600 col-pink ml30 borde">Bons</td>
                <td className="text-right bolo600 col-pink borde">Total TTC</td>
                <td className="text-right bolo600 col-pink borde">Perçue</td>
                <td className="text-right bolo600 col-pink borde">Reste</td>
                <td className="text-left bolo600 col-pink ml30 borde" colSpan="2">Client | Chantier</td>
                <td className="text-left bolo600 col-pink borde">Référence</td>
            </tr>
            {renderBones}
        </>);
    });

    const handleFourne = event => {
        let filter = event.target.value.toLowerCase();
        $("#fournis tr.paginate3").filter(function () {
            $(this).toggle($(this).text().toLowerCase().replaceAll(' ', '').indexOf(filter) > -1)
        });
    };
    if (furne !== 'a') {
        $('#modalFournisseur').modal('show');
    }

    $(function () {
        $(".js-example-basic-multiple").select2();
        $(".js-example-basic-single").select2();
        $("#fournis").simplePagination(('tbody .paginate3'));
    });
    $("#delFourne").off().on("click", function () {
        $.each($("input[name='fourne']:checked"), function () {
            $('#Traitement').modal('show')
            axios({
                method: 'DELETE', url: '/crm/fournisseur/del/' + $(this).val(),
            }).then(function (response) {
                location.reload();
            }).catch(function (error) {
                $('#Traitement').modal('hide');
                $('#ModalErreur').modal('show');
            });
        });
    });
    $("#editFourne").off().on("click", function () {
        $.each($("input[name='fourne']:checked"), function () {
            window.$('#Traitement').modal('show');
            window.location.href = '/crm/fournisseur/edit/' + $(this).val();
            return false;
        });
    });
    $("#checkedFourne").change(function () {
        if (this.checked) {
            $.each($("input[name='fourne']"), function () {
                this.checked = true;
            });
        } else {
            $.each($("input[name='fourne']"), function () {
                this.checked = false;
            });
        }
    });

    $('#addFourn').off().on("click", function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#addFourn').hide()
            $('#closeFourn').hide()
            $('#loadFourn').css('display', '')
            $.ajax({
                type: 'POST',
                url: '/crm/fournisseur/add/1',
                data: JSON.stringify($('#addFournisseurForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    location.reload();
                },
                error: function (xhr, resp, text) {
                    $('#ModalErreur').modal('show')
                },
            })
        }
    })
    $('#updateFourn').off().on("click", function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#updateFourn').hide()
            $('#closeFourn').hide()
            $('#loadFourn').css('display', '')
            $.ajax({
                type: 'POST',
                url: '/crm/fournisseur/update/' + furne,
                data: JSON.stringify($('#addFournisseurForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    window.location.href = '/crm/fournisseur/';
                },
                error: function (xhr, resp, text) {
                    $('#ModalErreur').modal('show')
                },
            })
        }
    })

    $('#addiBon').on("click", function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#addiBon').hide()
            $('#closeBon').hide()
            $('#loadBon').css('display', '')
            $('#editor7').val(CKEDITOR.instances['editor7'].getData())
            $('#editor6').val(CKEDITOR.instances['editor6'].getData())
            $.ajax({
                type: 'POST',
                url: '/crm/bon/addi',
                data: JSON.stringify($('#addBonForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    window.location.href =
                        '/crm/bon/' +
                        respdata['result'][0]['numbon'] +
                        '/' +
                        respdata['result'][0]['idchantier'];
                },
                error: function (xhr, resp, text) {
                    $('#mdModalBon').modal('toggle')
                    $('#ModalErreur').modal('show')
                },
            })
        }
    })

    return (<>
        <div className="col-md-12" style={{paddingLeft: "0"}}>
            <button type="button" data-color="blue" className="btn bg-blue-grey text-white bolo600 waves-effect m-r-5"
                    data-toggle="modal" data-target="#modalFournisseur">+ FOURNISSEUR
            </button>
            <button type="button" data-color="blue" className="btn bg-blue-grey text-white bolo600 waves-effect"
                    data-toggle="modal" data-target="#modalBon">+ BON FOURNISSEUR
            </button>
            <div className="panel-group" id="accordion_2" role="tablist" aria-multiselectable="true">
                <div className="panel panel-pri">
                    <div className="panel-heading bg-pri" role="tab" id="headingFourne">
                        <h5 className="panel-title ">
                            <a className="collapsed text-white" role="button" data-toggle="collapse"
                               data-parent="#accordion_2"
                               href="#collapseFourne" aria-expanded="false" aria-controls="collapseFourne"
                               style={{fontSize: "16px", fontWeight: "500"}}>
                                <i className="material-icons col-white"
                                   style={{fontSize: "18px", float: "left"}}>keyboard_arrow_down</i> Fournisseurs
                                d'articles<span
                                className="badge bg-pink float-right">{fourcount}</span>
                            </a>
                        </h5>
                    </div>
                    <div id="collapseFourne" className="panel-collapse" role="tabpanel"
                         aria-labelledby="headingFourne">
                        <div className="panel-body" style={{overflow: "scroll"}}>
                            <div className="body">
                                <div className="table-responsive">

                                    <div className="row">
                                        <div className="col-md-8" style={{paddingTop: "20px"}}>
                                                <span className="m-r-5 vareact"><input type="checkbox"
                                                                                       name="checkFourne"
                                                                                       id="checkedFourne"/></span>
                                            <a href="#" id="editFourne" className="m-r-5 vareact"><i
                                                className="fa fa fa-edit  col-green"/></a>
                                            <a href="#" id="delFourne" className="m-r-5 vareact"><i
                                                className="fa fa fa-trash col-pink "/></a>
                                            <ReactHTMLTableToExcel
                                                id="test-table-xls-button"
                                                className="btn badge badge-pill col-green m-r-5 float-left vareact"
                                                table="fournis"
                                                title="Générer un fichier Excel"
                                                filename="COMPTE FOURNISSEUR"
                                                sheet="tablexls"
                                                buttonText="Ex"/>
                                        </div>
                                        <div className="col-md-4 float-right">
                                            <div className="input-group">
                                                <div className="form-line">
                                                    <input type="text" className="form-control"
                                                           onChange={handleFourne}
                                                           placeholder="Rechercher"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table id="fournis"
                                           className="table table-hover table-striped dashboard-task-infos display nowrape m-t--10"
                                           style={{width: "100%"}}>
                                        <thead>
                                        <tr>
                                            <th className="text-center">#</th>
                                            <th className="text-left" colSpan="2">FOURNISSEURS</th>
                                            <th className="text-center">TOTAL TTC</th>
                                            <th className="text-center">PERÇUE TTC</th>
                                            <th className="text-center">SOLDE TTC</th>
                                            <th className="text-center" colSpan="2">TITRE</th>
                                            <th className="text-center">CONTACTS</th>
                                            <th className="text-center">EMAIL</th>
                                            <th className="text-center">ADRESSE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {renderFourne}
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td className="text-center"></td>
                                            <td className="text-left" colSpan="2"></td>
                                            <td className="text-right"><NumberFormat numb={fttc}/></td>
                                            <td className="text-right"><NumberFormat numb={frec}/></td>
                                            <td className="text-right"><NumberFormat numb={fres}/></td>
                                            <td className="text-center" colSpan="2"></td>
                                            <td className="text-center"></td>
                                            <td className="text-center"></td>
                                            <td className="text-center"></td>
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
        </div>
    </>);

}

try {
    const root = createRoot(document.getElementById('setfournisseurs'));
    root.render(<ListeFournisseurs/>);
} catch (e) {
}
