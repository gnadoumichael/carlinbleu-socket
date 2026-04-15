import React, {useEffect, useRef, useState} from 'react';
import axios from "axios";
import {useReactToPrint} from "react-to-print";
import NumberFormat from "../../fonctions/NumberFormat";
import {EditText} from 'react-edit-text';
import {deviceType} from "react-device-detect";
import $ from "jquery";
import ReactHTMLTableToExcel from 'react-html-table-to-excel';
import {createRoot} from "react-dom/client";
import {PrintDecompte} from "./PrintDecompte";

const Decompte = () => {
    let vava = $("#vava").val();
    let isfirst = $("#isfirst").val();
    const [client, setClient] = useState('');
    const [chantier, setChantier] = useState('');
    const [devis, setDevis] = useState('');
    const [facture, setFacture] = useState('');
    const [decompte, setDecompte] = useState('');
    const [lignes, setLignes] = useState([]);
    const [groupes, setGroupes] = useState([]);
    const [forme, setforme] = useState([]);
    const [formes, setformes] = useState([]);
    let decdate = $("#decdate").val();


    const fetchDecompte = async () => {
        const dde = JSON.parse($('#jsondecompte').val());
        const ddgroupe = JSON.parse($('#jsongroupes').val());
        const forme = JSON.parse($('#jsonforme').val());
        const formes = JSON.parse($('#jsonformes').val());

        setDecompte(dde);
        setFacture(dde.facture);
        setClient(dde.client);
        setChantier(dde.chantier);
        setDevis(dde.devis);
        setLignes(dde.lignes);
        setGroupes(ddgroupe);
        setforme(forme);
        setformes(formes);
    };
    useEffect(() => {
        fetchDecompte();
    }, []);


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

    function pdfDecompte(e) {
        e.preventDefault();
        $("#prpdf").css("display", "block");
        window.location.href = "/crm/doc/attache/" + decompte.id + "/decompte/oui";
    }

    const shuper = (id) => {
        $('.' + id + 'li').removeClass('hide');
    }
    const shupere = (id) => {
        $('.' + id + 'li').addClass('hide');
    }
    const formatNumber = (num, precision, separator) => {
        let parts;
        num = Number(num);
        num = (typeof precision !== 'undefined' ? num.toFixed(precision) : num).toString();
        parts = num.split('.');
        parts[0] = parts[0].toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1' + (separator));
        return parts.join(',');
    }

    function ltrim(str) {
        if (!str) return str;
        return str.replace(/^\s+/g, '');
    }

    let sortgroupes = [];
    let sortlignes = lignes.sort(function (a, b) {
        if (Number.isInteger(parseInt(ltrim(a.reference)))) {
            return parseInt(ltrim(a.reference)) - parseInt(ltrim(b.reference));
        } else {
            if (a.reference > b.reference) return 1;
            if (a.reference < b.reference) return -1;
            return 0;
        }
    });
    if (groupes.length) {
        sortgroupes = groupes.sort(function (a, b) {
            if (Number.isInteger(parseInt(ltrim(a.reference)))) {
                return parseInt(ltrim(a.reference)) - parseInt(ltrim(b.reference));
            } else {
                if (a.reference > b.reference) return 1;
                if (a.reference < b.reference) return -1;
                return 0;
            }
        });
    }

    $('#addeDecompte').off().on("click", async function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#addeDecompte').hide()
            $('#closeDecompte').hide()
            $('#loadDecompte').css('display', '')
            $.ajax({
                type: 'POST',
                url: '/crm/decompte/adde',
                data: JSON.stringify($('#addDecompteForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    window.location.href = '/crm/decompte/' + respdata['result'][0]['iddecompte'] + '/' + respdata['result'][0]['idchantier'];
                },
                error: function (xhr, resp, text) {
                    $('#mdModalDecompte').modal('toggle')
                    $('#ModalErreur').modal('show')
                },
            })
        }
    })
    $('#updateDecompte').off().on("click", function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#updateDecompte').hide()
            $('#closeUpDecompte').hide()
            $('#loadUpDecompte').css('display', '')
            $.ajax({
                type: 'PUT',
                url: '/crm/decompte/update/' + decompte.id,
                data: JSON.stringify($('#updateDecompteForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    if (jqXHR.status == '200') {
                        $('#mdModalDecompte').modal('toggle')
                        location.reload()
                    }
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

    async function conFacture(e) {
        e.preventDefault()
        $('#Traitement').modal('show')
        $.ajax({
            type: 'GET',
            url: '/crm/decompte/convertirfacture/' + decompte.id,
            success: function (respdata, textStatus, jqXHR) {
                window.location.href = '/crm/facture/' + respdata["result"] + '/' + chantier.id
            },
            error: function (xhr, resp, text) {
                $('#Traitement').modal('toggle')
                $('#ModalErreur').modal('show')
            },
        })
    }

    async function vaconFacture(e) {
        e.preventDefault()
        $('#Traitement').modal('show')
        $.ajax({
            type: 'GET',
            url: '/crm/decompte/valideconvertirfacture/' + decompte.id,
            success: function (respdata, textStatus, jqXHR) {
                window.location.href = '/crm/facture/' + respdata["result"] + '/' + chantier.id
            },
            error: function (xhr, resp, text) {
                $('#Traitement').modal('toggle')
                $('#ModalErreur').modal('show')
            },
        })
    }

    async function vaDecompte(e) {
        e.preventDefault()
        window.$('#Traitement').modal('show');
        await axios({
            method: 'GET',
            url: '/crm/decompte/valider/' + decompte.id,
        }).then(function (response) {
            location.reload();
        }).catch(function (error) {
            $('#Traitement').modal('toggle')
            window.$('#ModalErreur').modal('show');
        });
    }

    async function devaDecompte(e) {
        e.preventDefault()
        $('#ConfirmDevaDevis').modal('show');
        $('#acceptDeva').on("click", async function () {
            $('#ConfirmDevaDevis').modal('toggle');
            $('#Traitement').modal('show');
            await axios({
                method: 'GET',
                url: '/crm/decompte/devalider/' + decompte.id,
            }).then(function (response) {
                location.reload();
            }).catch(function (error) {
                $('#Traitement').modal('toggle')
                $('#ModalErreur').modal('show');
            });
        });
    }

    async function delDecompte(resp) {
        if (resp.value !== '') {
            $('#ConfirmDelete').modal('show');
            $('#accept').on("click", async function () {
                $('#ConfirmDelete').modal('hide');
                $('#Traitement').modal('show');
                await axios({
                    method: 'DELETE',
                    url: '/crm/decompte/del/' + decompte.id,
                }).then(function (response) {
                    window.location.href = '/crm/chantiers'
                }).catch(function (error) {
                    $('#ModalErreur').modal('show')
                });
            });
        } else {
            window.location.reload()
        }
    }

    async function reloadDevis(e) {
        event.preventDefault();
        $('#Traitement').modal('show');
        await axios({
            method: 'GET',
            url: '/crm/decompte/reloaddevis/' + decompte.id,
        }).then(function (response) {
            location.reload()
        }).catch(function (error) {
            $('#Traitement').modal('toggle')
            $('#ModalErreur').modal('show');
        });
    }

    async function saveAvancement(resp) {
        if (resp.value !== '') {
            if (decompte.etat === 'save') {
                $('#Traitement').modal('show');
                await axios({
                    method: 'POST',
                    url: '/crm/ligne/upd/decompte/avan/' + resp.name + '/' + decompte.id + '/' + resp.value,
                }).then(function (response) {
                    let bidec = response.data;
                    setDecompte(bidec);
                    setLignes(bidec.lignes);
                    $('#Traitement').modal('hide');
                }).catch(function (error) {
                    $('#ModalErreur').modal('show')
                });
            }else{
                $('#ModalErreur').modal('show');
                setTimeout(
                    function()
                    {
                        window.location.reload();
                    }, 3000);

            }
        } else {
            window.location.reload()
        }
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

    const renderLigne = sortlignes.map((ligne) => {
        return (
            <>
                {ligne.groupe === null &&
                    <tr key={ligne.id.toString()} onMouseOver={() => {
                        shuper(ligne.id)
                    }} onMouseOut={() => {
                        shupere(ligne.id)
                    }}>
                        {devis.aaref === 'oui' &&
                            <td className="text-center borde">{ligne.reference}</td>
                        }

                        <td className="borde" dangerouslySetInnerHTML={{__html: ligne.designation}}/>

                        {devis.zone === 'oui' &&
                            <td className="text-center borde">{ligne.zone}</td>
                        }
                        <td className="text-center borde">{ligne.unite}</td>
                        <td className="text-center borde">{ligne.quantite}</td>
                        <td className="text-right borde nowrape"><NumberFormat numb={ligne.pu}/></td>
                        {devis.aarem === 'oui' &&
                            <td className="text-center borde nowrape"><NumberFormat numb={ligne.remise}/></td>
                        }
                        {devis.aarem !== 'oui' &&
                            <td className="text-right borde nowrape"><NumberFormat
                                numb={(ligne.pu * ligne.quantite)}/>
                            </td>
                        }

                        {devis.aarem === 'oui' &&
                            <td className="text-right borde nowrape"><NumberFormat
                                numb={((ligne.pu * ligne.quantite) * ((100 - ligne.remise) / 100))}/></td>
                        }

                        <td className="text-center borde">
                            <EditText
                                type='number'
                                name={ligne.id}
                                defaultValue={formatNumber(ligne.avancement, 2, ' ')}
                                onSave={val => saveAvancement(val)}
                            />
                        </td>

                        {devis.aarem === 'tht' &&
                            <td className="borde" style={{textAlign: "right"}}>
                                <NumberFormat
                                    numb={(((ligne.pu * ligne.quantite) * ligne.avancement) / 100)}/>
                            </td>
                        }

                        {devis.aarem === 'non' &&
                            <td className="borde" style={{textAlign: "right"}}>
                                <NumberFormat
                                    numb={(((ligne.pu * ligne.quantite) * ligne.avancement) / 100)}/>
                            </td>
                        }

                        {devis.aarem === 'oui' &&
                            <td className="borde" style={{textAlign: "right"}}>
                                <NumberFormat
                                    numb={((((ligne.pu * ligne.quantite) * ((100 - ligne.remise) / 100)) * ligne.avancement) / 100)}/>
                            </td>
                        }

                    </tr>

                }
            </>
        );
    });
    const renderLigneMobile = sortlignes.map((lign) => {
        let om = 'avancisse' + lign.id;
        return (
            <>
                {lign.groupe === null &&
                    <>
                        <tr>
                            <td>
                                <table style={{width: "100%", marginTop: "10px"}}>
                                    {devis.aaref == 'oui' &&
                                        <tr>
                                            <td className="bordz" colSpan="2"><span
                                                className="col-blue"><u>Référence:</u></span>{lign.reference}
                                            </td>
                                        </tr>
                                    }
                                    <tr>
                                        <td className="bordz" colSpan="2"><span
                                            className="col-blue"><u>Désignation:</u><br/></span><span
                                            dangerouslySetInnerHTML={{__html: lign.designation}}/>
                                        </td>
                                    </tr>
                                    {devis.zone === 'oui' &&
                                        <>
                                            <tr>
                                                <td className="bordz" colSpan="2"><span
                                                    className="col-blue"><u>Zone:</u><br/></span>{lign.zone}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colSpan="2 " className="bordz"
                                                    style={{height: "10px"}}></td>
                                            </tr>
                                        </>
                                    }
                                    <tr>
                                        <td className="text-right bordz font-bold col-blue">Unité:</td>
                                        <td className="text-left bordz font-weight-bold"> {lign.unite}</td>
                                    </tr>
                                    <tr>
                                        <td className="text-right bordz font-bold col-blue">Quantité:
                                        </td>
                                        <td className="text-left bordz font-weight-bold"> {formatNumber(lign.quantite, 2, " ")}</td>
                                    </tr>
                                    <tr>
                                        <td className="text-right bordz font-bold col-blue">Prix unitaire:</td>
                                        <td className="text-left bordz font-weight-bold"> {formatNumber(lign.pu, 2, " ")}</td>
                                    </tr>
                                    {devis.aarem === 'oui' &&
                                        <tr>
                                            <td className="text-right bordz font-bold col-blue">
                                                Remise:
                                            </td>
                                            <td className="text-left bordz font-weight-bold"> {lign.remise}%</td>
                                        </tr>
                                    }
                                    <tr>
                                        <td className="text-right bordz font-bold col-blue">Montant HT:</td>
                                        <td className="text-left bordz font-weight-bold">
                                            {devis.aarem === 'non' &&
                                                <>
                                                    {formatNumber((lign.pu * lign.quantite), 2, " ")}
                                                </>
                                            }
                                            {devis.aarem !== 'non' &&
                                                <>
                                                    {formatNumber((lign.pu * lign.quantite) * ((100 - lign.remise) / 100), 2, " ")}
                                                </>
                                            }
                                        </td>
                                    </tr>
                                    <tr>
                                        <td className="text-right bordz font-bold col-blue">
                                            Avancement(%):
                                        </td>
                                        <td className="text-left bordz font-weight-bold"><input
                                            type="text" id={om} className="bop"
                                            name={om} size="3"
                                            value={lign.avancement}
                                            style={{textAlign: "right", border: "1px solid red", color: "red"}}/>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td className="bg-gray" style={{height: "5px"}}></td>
                        </tr>
                    </>
                }
            </>
        );
    });
    const renderGroupe = sortgroupes.map((group) => {
        let renderLigns = sortlignes.map((ligne) => {
            return (
                <>
                    {ligne.groupe !== null &&
                        <>
                            {ligne.groupe.id === group.id &&
                                <tr key={ligne.id.toString()} onMouseOver={() => {
                                    shuper(ligne.id)
                                }} onMouseOut={() => {
                                    shupere(ligne.id)
                                }}>
                                    {devis.aaref === 'oui' &&
                                        <td className="text-center borde">{ligne.reference}</td>
                                    }

                                    <td className="borde" dangerouslySetInnerHTML={{__html: ligne.designation}}/>

                                    {devis.zone === 'oui' &&
                                        <td className="text-center borde">{ligne.zone}</td>
                                    }
                                    <td className="text-center borde">{ligne.unite}</td>
                                    <td className="text-center borde">{ligne.quantite}</td>
                                    <td className="text-right borde nowrape"><NumberFormat numb={ligne.pu}/></td>
                                    {devis.aarem === 'oui' &&
                                        <td className="text-center borde nowrape"><NumberFormat numb={ligne.remise}/>
                                        </td>
                                    }
                                    {devis.aarem !== 'oui' &&
                                        <td className="text-right borde nowrape"><NumberFormat
                                            numb={(ligne.pu * ligne.quantite)}/>
                                        </td>
                                    }

                                    {devis.aarem === 'oui' &&
                                        <td className="text-right borde nowrape"><NumberFormat
                                            numb={((ligne.pu * ligne.quantite) * ((100 - ligne.remise) / 100))}/></td>
                                    }

                                    <td className="text-center borde">
                                        <EditText
                                            type='number'
                                            name={ligne.id}
                                            defaultValue={formatNumber(ligne.avancement, 2, ' ')}
                                            onSave={val => saveAvancement(val)}
                                        />
                                    </td>

                                    {devis.aarem === 'tht' &&
                                        <td className="borde" style={{textAlign: "right"}}>
                                            <NumberFormat
                                                numb={(((ligne.pu * ligne.quantite) * ligne.avancement) / 100)}/>
                                        </td>
                                    }

                                    {devis.aarem === 'non' &&
                                        <td className="borde" style={{textAlign: "right"}}>
                                            <NumberFormat
                                                numb={(((ligne.pu * ligne.quantite) * ligne.avancement) / 100)}/>
                                        </td>
                                    }

                                    {devis.aarem === 'oui' &&
                                        <td className="borde" style={{textAlign: "right"}}>
                                            <NumberFormat
                                                numb={((((ligne.pu * ligne.quantite) * ((100 - ligne.remise) / 100)) * ligne.avancement) / 100)}/>
                                        </td>
                                    }

                                </tr>
                            }
                        </>
                    }
                </>
            );
        });
        return (
            <>
                <tr key={group.id.toString()} className="printa">
                    {devis.aaref === 'oui' &&
                        <td className="borde">{group.reference}</td>
                    }
                    {devis.aaref === 'oui' &&
                        <>
                            {devis.zone === 'oui' &&
                                <>
                                    {devis.aarem === 'oui' &&
                                        <td className="borde" colSpan='10'>{group.groupe}</td>
                                    }
                                    {devis.aarem !== 'oui' &&
                                        <td className="borde" colSpan='9'>{group.groupe}</td>
                                    }
                                </>
                            }
                            {devis.zone !== 'oui' &&
                                <>
                                    {devis.aarem === 'oui' &&
                                        <td className="borde" colSpan='9'>{group.groupe}</td>
                                    }
                                    {devis.aarem !== 'oui' &&
                                        <td className="borde" colSpan='8'>{group.groupe}</td>
                                    }
                                </>
                            }
                        </>
                    }
                    {devis.aaref !== 'oui' &&
                        <>
                            {devis.zone === 'oui' &&
                                <>
                                    {devis.aarem === 'oui' &&
                                        <td className="borde" colSpan='9'>{group.groupe}</td>
                                    }
                                    {devis.aarem !== 'oui' &&
                                        <td className="borde" colSpan='18'>{group.groupe}</td>
                                    }
                                </>
                            }
                            {devis.zone !== 'oui' &&
                                <>
                                    {devis.aarem === 'oui' &&
                                        <td className="borde" colSpan='8'>{group.groupe}</td>
                                    }
                                    {devis.aarem !== 'oui' &&
                                        <td className="borde" colSpan='7'>{group.groupe}</td>
                                    }
                                </>
                            }
                        </>
                    }

                </tr>
                {renderLigns}
            </>
        );
    })
    const renderGroupeMobile = sortgroupes.map((group) => {
        let set = 0;


        return (
            <>
                <tr key={group.id.toString()} className="printa">
                    {devis.aaref === 'oui' &&
                        <>
                            <td align="center">{group.reference}</td>
                            <td>{group.groupe}<br/></td>
                        </>
                    }
                    {devis.aaref !== 'oui' &&
                        <>
                            <td>{group.groupe}<br/>
                                {devis.etat === 'save' &&
                                    <span style={{float: "right"}}>
                                        <a href="" class="btn-circle"><i class="material-icons col-green"
                                                                         title="Modifier">edit</i></a>
                                    <a href="" class="sholigne btn-circle"><i class="material-icons col-pink"
                                                                              title="Supprimer">delete</i></a>
                                    </span>
                                }
                            </td>
                        </>
                    }

                </tr>

            </>
        );
    })

    let stva = "";

    let vtva = (decompte.valeur * devis.tva) / 100;

    if (devis.ptva !== 'oui') {
        stva = "(Non applicable)";
    }

    return (
        <>
            {deviceType === "mobile" &&
                <div className="row clearfix" style={{padding: "0.1cm"}}>
                    <div className="col-sm-12 text-center">
                        <h3 className="font-bold m-t--10 col-purple">{client.nomclient}</h3>
                        <h3 className="font-bold m-t--10 col-deep-orange">{chantier.nomchantier}</h3>
                        <h3 className="m-t--10">
                            <span
                                className="font-bold m-t--10 col-black">DÉCOMPTE N°: {decompte.numdecompte}</span><br/>
                            <a href={`/crm/devis/${devis.id}/${chantier.id}`} className="font-bold m-t--10 pri">DEVIS
                                N°: {devis.iddevis}</a>
                        </h3>
                        {facture !== null &&
                            <h3 className="m-t--10"><a href={`/crm/facture/${facture.id}/${chantier.id}`}
                                                       className="font-bold  col-brown">FACTURE
                                N°: {facture.numfacture}</a></h3>
                        }
                        {decompte.etat === "valide" &&
                            <h4 className="font-bold col-pink">CE DÉCOMPTE EST VALIDÉ</h4>
                        }

                    </div>
                    <p style={{textAlign: "center"}}>
                        <div className="btn-group">
                            <button type="button" className="btn bg-pink dropdown-toggle m-r-5"
                                    data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="true">
                                <i className="fa fa-cog"/> FAIRE <span className="caret"/>
                            </button>

                            <div className="dropdown-menu p-l-10 p-r-10"
                                 style={{
                                     backgroundColor: "#e9e9e9",
                                     left: "-60px",
                                     position: "absolute",
                                     textAlign: "center"
                                 }}>

                                <a href={`/crm/chantier/${chantier.id}`} style={{width: "100%"}}
                                   className="btn bg-purple col-12 text-white btn-sm waves-effect">ACCÉDER
                                    AU CHANTIER</a>

                                <button type="button" style={{width: "100%"}}
                                        className="btn btn-labeled bg-blue text-white btn-sm  waves-effect"
                                        data-toggle="modal" data-target="#modalDecompte">CRÉER UN NOUVEAU
                                    DÉCOMPTE
                                </button>
                                {decompte.etat === "save" &&
                                    <>
                                        {isfirst === "1" &&
                                            <button type="button" style={{width: "100%"}}
                                                    className="btn btn-labeled bg-green btn-sm text-white"
                                                    data-toggle="modal"
                                                    data-target="#modalInfo">- INFORMATIONS
                                            </button>
                                        }
                                        <button type="button" style={{width: "100%"}}
                                                className="btn btn-labeled bg-success btn-sm text-white"
                                                data-toggle="modal"
                                                data-target="#modalMise">MISE EN FORME DU DÉCOMPTE
                                        </button>
                                        <button className="btn bg-deep-purple text-white" style={{width: "100%"}}
                                                onClick={reloadDevis}> RECHARGER LES LIGNES DU DEVIS
                                        </button>
                                        <button className="btn bg-pri bolo600 col-white" style={{width: "100%"}}
                                                onClick={vaconFacture}> VALIDER AND CONVERTIR EN FACTURE
                                        </button>
                                    </>
                                }
                            </div>
                        </div>
                        <br/>
                        {decompte.etat === "valide" &&
                            <a className="btn bg-pink text-white m-r-5" onClick={devaDecompte}><i
                                className="fa fa-check-circle"/> DÉVALIDER
                            </a>
                        }
                        {decompte.etat === "save" &&
                            <button className="btn bg-blue text-white m-r-5"
                                    onClick={vaDecompte}>
                                <i className="fa fa-check-circle"/> VALIDER
                            </button>
                        }
                        <a href={`/crm/doc/attache/${decompte.id}/decompte/non`}
                           className="btn bg-deep-orange text-white m-r-5"><i
                            className="fa fa-envelope"/> MAIL</a>

                        <button className="btn bg-pri text-white m-r-5"
                                onClick={pdfDecompte}><i
                            className="fas fa-file-pdf"/> PDF
                        </button>
                        <ReactHTMLTableToExcel
                            id="test-table-xls-button"
                            className="btn bg-green text-white m-r-5"
                            table="dev2excel"
                            filename={`Décompte N° ${decompte.numdecompte}`}
                            sheet="tablexls"
                            buttonText="EXCEL"/>

                        {devis.etat !== "valide" &&
                            <button className="btn bg-pink text-white m-r-5"
                                    onClick={delDecompte}><i
                                className="fa fa-trash"/> SUPPRIMER
                            </button>
                        }<br/>

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
                    </p>
                    <form action="#" method="post" id="toutvaliderform2" className="shoher">
                        <div style={{padding: "10px", backgroundColor: "#FFF", marginBottom: "5px"}}>
                            <p className="text-center"><a href="#" className="btn btn-primary" id="toutvalider2">VALIDER
                                TOUTES LES LIGNES</a><br/>
                                <img src="/img/loading.gif" style={{width: "50px", display: "none"}}
                                     className="align-justify" id="load2tout"/></p>
                            <div style={{padding: "10px", backgroundColor: "#FFF", marginBottom: "5px"}}>
                                <table style={{width: "100%", backgroundColor: "#FFF", padding: "10px"}}>
                                    <tr>
                                        <td><b><u>DATE:</u></b>{decdate}</td>
                                    </tr>
                                    <tr>
                                        <td><b><u>DÉCOMPTE N°: </u></b> {decompte.numdecompte}</td>
                                    </tr>
                                    <tr>
                                        <td><b><u>RÉFÉRENCE:</u></b>
                                            Selon <span
                                                style={{fontWeight: "bold"}}>Devis N° {devis.iddevis}</span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <table id="borde" style={{width: "100%", backgroundColor: "#FFF", marginTop: "5px"}}>
                                <tr className="bg-pri text-white" align="center" style={{fontSize: "12px"}}>
                                    <th style={{textAlign: " left", padding: "5px"}}>
                                        DÉSIGNATION
                                    </th>
                                </tr>
                                {renderGroupeMobile}
                                {renderLigneMobile}
                                <tr>
                                    <td colSpan="2" style={{paddingLeft: "20px"}}><b>DEVIS TOTAL
                                        HT:</b> {formatNumber(decompte.totalht, 2, " ")}</td>
                                </tr>
                                <tr>
                                    <td colSpan="2" style={{paddingLeft: "20px"}}><b>TOTAL HT
                                        AVANCEMENT: {formatNumber(decompte.valeur, 2, " ")} </b>|
                                        <span className="col-pink">{formatNumber(decompte.avancement, 2, " ")}%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colSpan="2" style={{paddingLeft: "20px"}}><b>DÉDUCTION ACOMPTE: </b>
                                        {decompte.deduction === 'montant' &&
                                            <>
                                                {formatNumber(((decompte.totalht * decompte.acompte) / 100), 2, " ")}
                                            </>
                                        }
                                        {decompte.deduction !== 'montant' &&
                                            <>
                                                {formatNumber(((decompte.valeur * decompte.acompte) / 100), 2, " ")}
                                            </>
                                        }
                                        | {formatNumber(decompte.acompte, 2, " ")}%
                                    </td>
                                </tr>
                                <tr>
                                    <td colSpan="2" style={{paddingLeft: "20px"}}><b>DÉDUCTION GARANTIE: </b>
                                        {decompte.deduction === 'montant' &&
                                            <>
                                                {formatNumber(((decompte.totalht * decompte.garantie) / 100), 2, " ")}
                                            </>
                                        }

                                        {decompte.deduction !== 'montant' &&
                                            <>
                                                {formatNumber(((decompte.valeur * decompte.garantie) / 100), 2, " ")}
                                            </>
                                        }
                                        | {formatNumber(decompte.garantie, 2, " ")}%
                                    </td>
                                </tr>
                                <tr>
                                    <td colSpan="2" style={{paddingLeft: "20px"}}><b>RETENUE DE FINITION: </b>
                                        {decompte.deduction === 'montant' &&
                                            <>
                                                {formatNumber(((decompte.totalht * decompte.finition) / 100), 2, " ")}
                                            </>
                                        }
                                        {decompte.deduction !== 'montant' &&
                                            <>
                                                {formatNumber(((decompte.valeur * decompte.finition) / 100), 2, " ")}
                                            </>
                                        }
                                        | {formatNumber(decompte.finition, 2, " ")}%
                                    </td>
                                </tr>
                                <tr>
                                    <td colSpan="2" style={{paddingLeft: "20px"}}><b>DÉDUCTION PRORATA: </b>
                                        {decompte.deduction === 'montant' &&
                                            <>
                                                {formatNumber(((decompte.totalht * decompte.prorata) / 100), 2, " ")}
                                            </>
                                        }
                                        {decompte.deduction !== 'montant' &&
                                            <>
                                                {formatNumber(((decompte.valeur * decompte.prorata) / 100), 2, " ")}
                                            </>
                                        }
                                        | {formatNumber(decompte.prorata, 2, " ")}%
                                    </td>
                                </tr>
                                <tr>
                                    <td colSpan="2" style={{paddingLeft: "20px"}}><b>DÉDUCTION DES DÉCOMPTES: </b>
                                        {formatNumber(vava, 2, " ")}</td>
                                </tr>
                                <tr>
                                    <td colSpan="2" style={{paddingLeft: "20px"}}><b className="col-blue">TOTAL HT
                                        DÉCOMPTE : {formatNumber(decompte.apayer, 2, " ")}</b></td>
                                </tr>
                                <tr>
                                    <td colSpan="2" style={{paddingLeft: "20px"}}><b className="col-blue">TVA {stva} :
                                        {formatNumber(vtva, 2, " ")}</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td colSpan="2" style={{paddingLeft: "20px"}}><b className="col-blue">TOTAL TTC
                                        DÉCOMPTE : </b>
                                        {devis.ptva === 'oui' &&
                                            <b>
                                                {formatNumber(decompte.ttc, 2, " ")}
                                            </b>
                                        }
                                        {devis.ptva !== 'oui' &&
                                            <b>
                                                {formatNumber(decompte.ttc, 2, " ")}
                                            </b>
                                        }
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
            }
            {deviceType !== "mobile" &&
                <>
                    <div className="col-sm-12 text-center">
                        <h3 className="font-bold m-t--10 col-purple">{client.nomclient}</h3>
                        <h3 className="font-bold m-t--10 col-deep-orange">{chantier.nomchantier}</h3>
                        <h3 className="m-t--10">
                            <span
                                className="font-bold m-t--10 col-black">DÉCOOMPTE N°: {decompte.numdecompte}</span><br/>
                            <a href={`/crm/devis/${devis.id}/${chantier.id}`} className="font-bold m-t--10 pri">DEVIS
                                N°: {devis.iddevis}</a>
                        </h3>
                        {facture !== null &&
                            <h3 className="m-t--10"><a href={`/crm/facture/${facture.id}/${chantier.id}`}
                                                       className="font-bold  col-brown">FACTURE
                                N°: {facture.numfacture}</a></h3>
                        }
                        {decompte.etat === "valide" &&
                            <h4 className="font-bold col-pink">CE DÉCOMPTE EST VALIDÉ</h4>
                        }

                    </div>
                    <div className="row clearfix" style={{padding: "0.1cm"}}>
                        <div className="col-sm-12 text-center">
                            <div className="btn-group">
                                <a href={`/crm/chantier/${chantier.id}`}
                                   className="btn bg-purple  align-left m-b-10 text-white waves-effect ">ACCÉDER
                                    AU
                                    CHANTIER</a>
                                <button type="button"
                                        className="btn bg-blue align-left m-b-10 text-white waves-effect"
                                        data-toggle="modal" data-target="#modalDecompte">CRÉER UN NOUVEAU
                                    DÉCOMPTE
                                </button>
                            </div>
                            <br/>

                            {decompte.etat === "save" &&
                                <>
                                    <div className="btn-group">
                                        {isfirst === "1" &&
                                            <button type="button"
                                                    className="btn btn-labeled bg-green btn-sm text-white"
                                                    data-toggle="modal"
                                                    data-target="#modalInfo">- INFORMATIONS
                                            </button>
                                        }
                                        <button type="button"
                                                className="btn btn-labeled bg-success btn-sm text-white"
                                                data-toggle="modal"
                                                data-target="#modalMise">MISE EN FORME DU DÉCOMPTE
                                        </button>
                                    </div>
                                    <br/>
                                </>
                            }
                            <div className="btn-group">

                                {decompte.etat === "valide" &&
                                    <a className="btn bg-pink text-white" onClick={devaDecompte}><i
                                        className="fa fa-check-circle"/> DÉVALIDER
                                    </a>
                                }
                                {decompte.etat !== "valide" &&
                                    <>
                                        <button className="btn bg-blue text-white"
                                                onClick={vaDecompte}>
                                            <i
                                                className="fa fa-check-circle"/> VALIDER
                                        </button>
                                        <button className="btn bg-pink text-white"
                                                onClick={delDecompte}><i
                                            className="fa fa-trash"/> SUPPRIMER
                                        </button>
                                    </>
                                }

                                <a href={`/crm/doc/attache/${decompte.id}/decompte/non`}
                                   className="btn bg-deep-orange text-white"><i
                                    className="fa fa-envelope"/> MAIL</a>

                                <button className="btn bg-pri text-white"
                                        onClick={pdfDecompte}><i
                                    className="fas fa-file-pdf"/> PDF
                                </button>

                                <ReactHTMLTableToExcel
                                    id="test-table-xls-button"
                                    className="btn bg-green text-white"
                                    table="dev2excel"
                                    filename={`Décompte N° ${decompte.numdecompte}`}
                                    sheet="tablexls"
                                    buttonText="EXCEL"/>

                                {devis.etat !== "valide" &&
                                    <button className="btn bg-pink text-white"
                                            onClick={delDecompte}><i
                                        className="fa fa-trash"/> SUPPRIMER
                                    </button>
                                }
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
                            <div className="btn-group">
                                {decompte.etat !== "valide" &&
                                    <>
                                        <button className="btn bg-deep-purple text-white"
                                                onClick={reloadDevis}> RECHARGER LES LIGNES DU DEVIS
                                        </button>
                                        <button className="btn bg-pri bolo600 col-white"
                                                onClick={vaconFacture}> VALIDER AND CONVERTIR EN FACTURE
                                        </button>
                                    </>
                                }
                                {decompte.etat === "valide" &&
                                    <button className="btn bg-pri bolo600 col-white"
                                            onClick={conFacture}> CONVERTIR EN FACTURE
                                    </button>
                                }
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
                        </div>
                    </div>
                    <table id="dev2excel">
                        <tbody>
                        <tr>
                            <td><br/>
                                <PrintDecompte decompte={decompte} lignes={lignes} groupes={groupes} ref={componentRef}
                                               renderLigne={renderLigne} renderGroupe={renderGroupe}
                                               forme={forme} chantier={chantier} client={client} devis={devis}
                                               vava={vava}/>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <br/><br/><br/><br/>
                </>
            }
        </>
    );
}

try {
    const container = document.getElementById('shacontentDecompte');
    const root = createRoot(container);
    root.render(<Decompte/>);
} catch (e) {
}