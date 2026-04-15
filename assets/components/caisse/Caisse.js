import React, {useEffect, useRef, useState} from 'react';
import {useReactToPrint} from "react-to-print";
import NumberFormat from "../../fonctions/NumberFormat";
import axios from "axios";
import $ from "jquery";
import ReactHTMLTableToExcel from 'react-html-table-to-excel';
import {createRoot} from "react-dom/client";
import {PrintCaisse} from "./PrintCaisse";
import Moment from "react-moment";

const Caisse = () => {
    require('table-to-excel');
    const componentRef = useRef();
    const handlePrint = useReactToPrint({
        content: () => componentRef.current,
    });
    const handlePrinte = useReactToPrint({
        content: () => componentRef.current,
        onBeforeGetContent: () => {
            $('.header').addClass("hide");
            $('.footer').addClass("hide");
        },
        onAfterPrint: () => {
            $('.header').removeClass("hide");
            $('.footer').removeClass("hide");
        }
    });

    const [loading, setLoading] = useState(false);
    const [caisse, setCaisse] = useState('');
    const [boncais, setBonCais] = useState([]);
    const [forme, setforme] = useState([]);
    const [formes, setformes] = useState([]);
    const [lignes, setLignes] = useState([]);

    let renderLigne = null;
    let renderHisCaisse = null;

    function pdfCaisse(e) {
        e.preventDefault();
        $("#prpdf").css("display", "block");
        window.location.href = "/crm/doc/attache/" + caisse.id + "/caisse/oui";
    }

    const fetchCaisse = async () => {
        const bbon = JSON.parse($('#jsoncaisse').val());
        const forme = JSON.parse($('#jsonforme').val());
        const formes = JSON.parse($('#jsonformes').val());
        const bbone = JSON.parse($('#jsonbon').val());

        setCaisse(bbon);

        if (bbon.fournisseur !== undefined && bbon.fournisseur !== null) {
            setBonCais(bbone.caisses);
        }
        setLoading(true);
        setforme(forme);
        setformes(formes);
        setLignes(bbon.lignes);
    };

    useEffect(() => {
        fetchCaisse();
    }, []);

    async function restaureBon(e) {
        e.preventDefault()
        $('#ConfirmDelete').modal('show');
        $('#accept').click(async function () {
            $('#ConfirmDelete').modal('hide');
            $('#Traitement').modal('show');
            await axios({
                method: 'GET',
                url: '/crm/bon/restaurer/' + caisse.id,
            }).then(function (response) {
                location.reload();
            }).catch(function (error) {
                $('#Traitement').modal('toggle')
                $('#ModalErreur').modal('show');
            });
        });
    }

    const shasha = async (a) => {
        $('#Traitement').modal('show');
        await axios({
            method: 'GET',
            url: '/crm/chantiers/forte/' + a,
        }).then(function (response) {
            location.reload();
        }).catch(function (error) {
            $('#Traitement').modal('toggle');
            window.$('#ModalErreur').modal('show');
        });
    }
    $('#addLigneCaisse').off().on("click", async function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#addLigneCaisse').hide()
            $('#closeLignecaisse').hide()
            $('#loadLignecaisse').css('display', '')

            $('#editor2').val(CKEDITOR.instances['editor2'].getData());

            $.ajax({
                type: 'POST',
                url: '/crm/ligne/add/caisse/' + caisse.id,
                data: JSON.stringify($('#addLigneCaisseForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    location.reload();
                },
                error: function (xhr, resp, text) {
                    if (xhr.status == '404') {
                        $('#modalLigne').modal('toggle')
                        $('#ModalErreur').modal('show')
                    }
                },
            })
        }
    })
    $('#addMontant').off().on("click", async function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#addMontant').hide()
            $('#closeMontant').hide()
            $('#loadMontant').css('display', '')
            $.ajax({
                type: 'PUT',
                url: '/crm/caisse/montant/' + caisse.id,
                data: JSON.stringify($('#addMontantForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    location.reload()
                },
                error: function (xhr, resp, text) {
                    $('#modalMontant').modal('toggle')
                    $('#ModalErreur').modal('show')
                },
            })
        }
    })
    $('#deplacerCaisse').off().on("click", async function (event) {
        event.preventDefault()
        const idchantier = $('#deplacerCaisse').val()
        $('#addDeplacerCaisse').hide()
        $('#closeDeplacer').hide()
        $('#loadDeplacer').css('display', '')
        $.ajax({
            type: 'GET',
            url: '/crm/caisse/deplacer/' + caisse.id + '/' + idchantier,
            success: function (respdata, textStatus, jqXHR) {
                window.location.href = '/crm/chantier/' + idchantier
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    })
    $('#updateLigneCaisse').off().on("click", async function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#updateLigneCaisse').hide()
            $('#closeLignecaisse').hide()
            $('#loadLignecaisse').css('display', '')
        }
        const idligne = $('#idligne').val();
        const idchantier = $('#idchantier').val();
        $('#editor2').val(CKEDITOR.instances['editor2'].getData())
        $.ajax({
            type: 'PUT',
            url: '/crm/ligne/update/caisse/' + idligne + '/' + caisse.id,
            data: JSON.stringify($('#addLigneCaisseForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '200') {
                    $('#modalLigne').modal('toggle')
                    window.location.href = '/crm/caisse/' + caisse.id + '/' + idchantier
                }
            },
            error: function (xhr, resp, text) {
                if (xhr.status == '404') {
                    $('#ModalErreur').modal('show')
                    $('#modalLigne').modal('toggle')
                }
            },
        })
    })
    $('#updCaisse').off().on("click", async function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#updCaisse').hide()
            $('#closeUpdCaisse').hide()
            $('#loadUpdCaisse').css('display', '')
            $('#editor15').val(CKEDITOR.instances['editor15'].getData())
            $.ajax({
                type: 'PUT',
                url: '/crm/caisse/etats/update/' + caisse.id,
                data: JSON.stringify($('#updCaisseForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    location.reload()
                },
                error: function (xhr, resp, text) {
                    $('#modalInfo').modal('toggle')
                    $('#ModalErreur').modal('show')
                },
            })
        }
    })
    $('#updInterneCaisse').off().on("click", async function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#updInterneCaisse').hide()
            $('#closerUpdInterneCaisse').hide()
            $('#loaderUpdinterneCaisse').css('display', '')
            $('#editor19').val(CKEDITOR.instances['editor19'].getData())
            $.ajax({
                type: 'PUT',
                url: '/crm/caisse/frais/update/' + caisse.id,
                data: JSON.stringify($('#updCaisseChargeForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    location.reload()
                },
                error: function (xhr, resp, text) {
                    $('#modalInfo').modal('toggle')
                    $('#ModalErreur').modal('show')
                },
            })
        }
    })
    $('#updCaissePersonnel').off().on("click", async function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#updCaissePersonnel').hide()
            $('#closerCaissePersonnel').hide()
            $('#loaderCaissePersonnel').css('display', '')
            $('#editor20').val(CKEDITOR.instances['editor20'].getData())
            $.ajax({
                type: 'PUT',
                url: '/crm/caisse/personnel/upd/' + caisse.id,
                data: JSON.stringify($('#updCaissePersonnelForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    location.reload()
                },
                error: function (xhr, resp, text) {
                    $('#modalInfo').modal('toggle')
                    $('#ModalErreur').modal('show')
                },
            })
        }
    })
    $('#updInterneCaiss').off().on("click", async function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#updInterneCaiss').hide()
            $('#cloCaisse').hide()
            $('#loCaisse').css('display', '')
            $('#editor19').val(CKEDITOR.instances['editor19'].getData())
            $.ajax({
                type: 'PUT',
                url: '/crm/caisse/fraischantier/update/' + caisse.id,
                data: JSON.stringify($('#upddCaisseForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    location.reload()
                },
                error: function (xhr, resp, text) {
                    $('#modalInfo').modal('toggle')
                    $('#ModalErreur').modal('show')
                },
            })
        }
    })
    $('#updateForme').off().on("click", async function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#updateForme').hide()
            $('#loadupForme').css('display', '')
            $('#Traitement').modal('show');
            $('#modalMise').modal('toggle')

            $('#editor5').val(CKEDITOR.instances['editor5'].getData());

            await axios({
                method: 'POST',
                url: '/crm/chantiers/forme',
                data: new FormData($('#addforme')[0]),
                contentType: false,
                processData: false,
                cache: false,
                dataType: 'json',
            }).then(function (response) {
                $('#modalMise').modal('toggle')
                location.reload()
            }).catch(function (error) {
                $('#ModalErreur').modal('show')
            });

        }
    })
    $('#sefone').off().on("change", function (event) {
        event.preventDefault();
        const $selbon = $('.selbon');
        $('.selbon').html('');
        $.ajax({
            type: 'POST',
            url: '/crm/bon/fournisseur/' + this.value,
            contentType: 'application/json; charset=utf-8',
            success: function (respdata, textStatus, jqXHR) {
                $(".dibon").empty();
                $(".dibon").append('<span class="col-pink">Chargement des bons</span> <img src="/img/loading.gif" style="width: 20px">');
                respdata.map((bo) => {
                    const group = $('<option value=' + bo.id + '>Bon Nº ' + bo.numbon + '</option>');
                    group.appendTo($selbon);
                });
                $(".dibon").empty();
                $(".dibon").append('<span class="col-green">Bons téléchargés</span>');
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    })
    $('#addeCaisse').off().on("click", function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#addeCaisse').hide()
            $('#closeCaisse').hide()
            $('#loadCaisse').css('display', '')
            $('#editor15').val(CKEDITOR.instances['editor15'].getData())
            $.ajax({
                type: 'POST',
                url: '/crm/caisse/adde',
                data: JSON.stringify($('#addCaisseForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    window.location.href =
                        '/crm/caisse/' +
                        respdata['result'][0]['numcaisse'] +
                        '/' +
                        respdata['result'][0]['idchantier']
                },
                error: function (xhr, resp, text) {
                    $('#modalCaisse').modal('toggle')
                    $('#ModalErreur').modal('show')
                },
            })
        }
    })

    async function valideCaisse(e) {
        e.preventDefault()
        $('#Traitement').modal('show')
        $.ajax({
            type: 'GET',
            url: '/crm/caisse/valider/' + caisse.id,
            success: function (respdata, textStatus, jqXHR) {
                location.reload()
            },
            error: function (xhr, resp, text) {
                $('#Traitement').modal('toggle')
                $('#ModalErreur').modal('show')
            },
        })
    }
    async function delCaisse(e) {
        e.preventDefault()
        $('#ConfirmDelete').modal('show')
        $('#accept').click(function () {
            $('#ConfirmDelete').modal('hide')
            $('#Traitement').modal('show')
            $.ajax({
                type: 'DELETE',
                url: '/crm/caisse/del/' + caisse.id,
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    location.reload()
                },
                error: function (xhr, resp, text) {
                    $('#Traitement').modal('hide')
                    $('#ModalErreur').modal('show')
                },
            })
        })
    }
    async function devaCaisse(e) {
        e.preventDefault()
        $('#ConfirmDelete').modal('show')
        $('#accept').click(function () {
            $('#ConfirmDelete').modal('hide')
            $('#Traitement').modal('show')
            $.ajax({
                type: 'GET',
                url: '/crm/caisse/devalider/' + caisse.id,
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    location.reload();
                },
                error: function (xhr, resp, text) {
                    $('#Traitement').modal('hide')
                    $('#ModalErreur').modal('show')
                },
            })
        })
    }

    renderLigne = lignes.map((lign) => {

        return (
            <tr>
                <td className="borde" style={{lineHeight: "1.5", textAlign: "left"}}
                    dangerouslySetInnerHTML={{__html: lign.designation}}/>
                <td className="borde nowrape" style={{textAlign: "right"}}><NumberFormat numb={lign.pu}/></td>
            </tr>
        );
    })
    if (boncais !== null) {
        renderHisCaisse = boncais.map((cais) => {
            return (
                <>
                    {cais.etat === "valide" &&
                        <tr key={cais.id}>
                            <td className="borde text-left"><Moment format="DD/MM/YYYY">{cais.date}</Moment> | <span>N° Bon: {cais.numcaisse}</span>
                            </td>
                            <td className="borde text-right"><NumberFormat numb={cais.montant}/></td>
                        </tr>
                    }
                </>
            )
        });
    }
    $(function () {
        if (caisse.bon) {
            const $selbon = $('.selbon');
            $('.selbon').html('');
            $.ajax({
                type: 'POST',
                url: '/crm/bon/fournisseur/' + caisse.fournisseur.id,
                contentType: 'application/json; charset=utf-8',
                success: function (respdata, textStatus, jqXHR) {
                    $(".dibon").empty();
                    $(".dibon").append('<span class="col-pink">Chargement des bons</span> <img src="/img/loading.gif" style="width: 20px">');
                    respdata.map((bo) => {
                        const group = $('<option value=' + bo.id + '>Bon Nº ' + bo.numbon + '</option>');
                        group.appendTo($selbon);
                    });
                    $(".dibon").empty();
                    $(".dibon").append('<span class="col-green">Bons téléchargés</span>');
                },
                error: function (xhr, resp, text) {
                    $('#ModalErreur').modal('show')
                },
            })
        }
    });

    console.log(caisse)

    return (
        <>
            {loading === true &&
                <>
                    <div className="row clearfix" style={{padding: "0.1cm"}}>
                        <div className="col-sm-12 text-center">
                            <h3 className="font-bold col-purple text-center">{caisse.client.nomclient.toUpperCase()}</h3>
                            <h3 className="font-bold m-t--10  col-pink text-center">{caisse.chantier.nomchantier.toUpperCase()}</h3>
                            <h3 className="font-bold m-t--10 col-blue text-center">ORDRE DE PAIEMENT
                                N°: {caisse.numcaisse}</h3>
                            {caisse.bon !== null &&
                                <>
                                    <h3 className="font-bold m-t--10 pri text-center">BON N°: <a
                                        href={`/crm/bon/${caisse.bon.id}/${caisse.chantier.id}`}>{caisse.bon.numbon}</a>
                                    </h3>
                                    <h3 className="font-bold m-t--10 pri text-center">DEVIS N°: <a
                                        href={`/crm/devis/${caisse.bon.devis.id}/${caisse.chantier.id}`}>{caisse.bon.devis.iddevis}</a>
                                    </h3>
                                </>
                            }
                            {caisse.etat === "valide" &&
                                <h4 className="font-bold col-black text-center">CE BON EST VALIDÉ</h4>
                            }
                            {caisse.corbeille !== null &&
                                <div className="text-center">
                                    <h4 className="font-bold col-black">CE BON EST SUPPRIMÉ</h4>
                                    <button className="btn bg-deep-orange text-white m-r-5"
                                            onClick={restaureBon}><i
                                        className="fa fa-redo"/> RESTAURER
                                    </button>
                                </div>
                            }
                            {caisse.corbeille === null &&
                                <>
                                    <>
                                            <div className="btn-group">
                                                <a href={`/crm/chantier/${caisse.chantier.id}`}
                                                   className="btn bg-purple  align-left m-b-10 text-white waves-effect btn-sm ">ACCÉDER
                                                    AU CHANTIER</a>
                                                <button type="button"
                                                        className="btn btn-labeled bg-pri text-white btn-sm m-b-10"
                                                        data-toggle="modal" data-target="#modalLigne">+ AJOUTER UNE LIGNE
                                                </button>
                                                <br/>
                                            </div>

                                            {caisse.type !== 3 &&
                                                <>
                                                    <br/>
                                                    <div className="btn-group">
                                                        <button type="button"
                                                                className="btn bg-blue align-left m-b-10 text-white waves-effect"
                                                                data-toggle="modal" data-target="#modalCaisse">NOUVEAU
                                                            BON FOURNISSEUR
                                                        </button>
                                                        <button type="button"
                                                                className="btn bg-pri align-left m-b-10 text-white waves-effect"
                                                                data-toggle="modal" data-target="#modalCaisse">NOUVEAU
                                                            BON CHARGE INTERNE
                                                        </button>
                                                    </div>
                                                </>
                                            }
                                        </>
                                    {caisse.etat === "save" &&
                                        <>
                                            <br/>
                                            <div className="btn-group">
                                                {caisse.bon !== null &&
                                                    <button type="button"
                                                            className="btn btn-labeled bg-pri text-white btn-sm m-b-10"
                                                            data-toggle="modal" data-target="#modalDeplacer">+ DÉPLACER
                                                        VERS
                                                    </button>
                                                }
                                            </div>
                                        </>
                                    }
                                    {caisse.etat === "save" &&
                                        <>
                                            <div className="btn-group">
                                                {caisse.bon !== null &&
                                                    <button type="button"
                                                            className="btn btn-labeled bg-green text-white btn-sm m-b-10"
                                                            data-toggle="modal"
                                                            data-target="#modalInfo"> - INFORMATIONS
                                                    </button>
                                                }
                                                {caisse.bon === null &&
                                                    <button type="button"
                                                            className="btn btn-labeled bg-green text-white btn-sm m-b-10"
                                                            data-toggle="modal"
                                                            data-target="#updCaisseCharg"> - INFORMATIONS
                                                    </button>
                                                }
                                                <button type="button"
                                                        className="btn btn-labeled bg-success text-white btn-sm m-b-10"
                                                        data-toggle="modal" data-target="#modalList"> - MODIFIER UNE LIGNE
                                                </button>
                                            </div>
                                        </>
                                    }
                                    <br/>
                                    <div className="btn-group">
                                        {caisse.etat === "save" &&
                                            <button className="btn btn-labeled bg-blue text-white btn-sm m-b-10"
                                                    onClick={valideCaisse}><i
                                                className="fa fa-check-circle"/> VALIDER
                                            </button>
                                        }
                                        {caisse.etat === "valide" &&
                                            <button className="btn bg-pink btn-labeled text-white btn-sm m-b-10"
                                                    onClick={devaCaisse}><i
                                                className="fa fa-check-circle"/> DÉVALIDER
                                            </button>
                                        }

                                        <a href={`/crm/doc/attache/${caisse.id}/caisse/non`}
                                           className="btn btn-labeled bg-deep-orange text-white btn-sm m-b-10"><i
                                            className="fa fa-envelope"/> MAIL</a>

                                        <button className="btn btn-labeled bg-pri text-white btn-sm m-b-10"
                                                onClick={pdfCaisse}><i
                                            className="fas fa-file-pdf"/> PDF
                                        </button>
                                        <ReactHTMLTableToExcel
                                            id="test-table-xls-button"
                                            className="btn btn-labeled bg-green text-white btn-sm m-b-10"
                                            table="caisse2excel"
                                            filename={`Bon de caisse N° ${caisse.numcaisse}`}
                                            sheet="tablexls"
                                            buttonText="EXCEL"/>
                                        {caisse.etat === "save" &&
                                            <button type="button"
                                                    className="btn btn-labeled bg-pink text-white btn-sm m-b-10"
                                                    onClick={delCaisse}>
                                                <i className="fa fa-trash"></i> SUPPRIMER
                                            </button>
                                        }
                                        <button type="button"
                                                className="btn btn-labeled bg-info text-white btn-sm m-b-10"
                                                data-toggle="modal" data-target="#modalMise"> - MISE EN FORME
                                        </button>
                                    </div>
                                    <br/>
                                    <div className="btn-group">

                                        <button className="btn bg-indigo text-white"
                                                onClick={handlePrinte}><i
                                            className="fa fa-print"/> IMPRESSION SANS ENTÊTE
                                        </button>
                                        <button className="btn bg-blue text-white"
                                                onClick={handlePrint}><i
                                            className="fa fa-print"/> IMPRESSION AVEC ENTÊTE
                                        </button>
                                    </div>
                                    <br/>
                                    {formes.map((forme, index) => {
                                        return (
                                            <div className="btn-group">
                                                {forme.used === "used" &&
                                                    <button type="button" onClick={() => {
                                                        shasha(forme.id)
                                                    }}
                                                            className="btn bg-yellow bolo600  align-left m-b-10 col-black waves-effect m-r-5">{forme.intituler}</button>
                                                }
                                                {forme.used !== "used" &&
                                                    <button type="button" onClick={() => {
                                                        shasha(forme.id)
                                                    }}
                                                            className="btn bolo600  align-left m-b-10 col-black waves-effect m-r-5">{forme.intituler}</button>
                                                }
                                            </div>
                                        );
                                    })}
                                    <br/>
                                </>}
                            <table id="caisse2excel">
                                <tr>
                                    <td>
                                        <PrintCaisse caisse={caisse} ref={componentRef} forme={forme}
                                                     renderLigne={renderLigne} renderHisCaisse={renderHisCaisse}/>
                                    </td>
                                </tr>
                            </table>
                            <br/><br/><br/>
                        </div>
                    </div>
                </>
            }
        </>
    );
}

try {
    const container = document.getElementById('shacontentCaisse');
    const root = createRoot(container);
    root.render(<Caisse/>);
} catch (e) {
}