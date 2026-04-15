import React, {useEffect, useRef, useState} from 'react';
import {useReactToPrint} from "react-to-print";
import {PrintFacture} from "./PrintFacture";
import {deviceType} from "react-device-detect";
import $ from "jquery";
import {createRoot} from "react-dom/client";
import ReactHTMLTableToExcel from "react-html-table-to-excel";
import axios from "axios";
import NumberFormat from "../../fonctions/NumberFormat";


const Facture = () => {
    const [client, setClient] = useState('');
    const [chantier, setChantier] = useState('');
    const [devis, setDevis] = useState('');
    const [facture, setFacture] = useState('');
    const [decompte, setDecompte] = useState('');
    const [lignes, setLignes] = useState([]);
    const [groupes, setGroupes] = useState([]);
    const [ddecomptes, setDDecomptes] = useState([]);
    let [totalacomptes, setTotalacomptes] = useState([]);
    const [forme, setforme] = useState([]);

    let totaldecomptes = 0;
    let totalretenue = 0;

    require('table-to-excel');
    const componentRef = useRef();
    const handlePrint = useReactToPrint({
        content: () => componentRef.current,
    });
    function ltrim(str) {
        if (!str) return str;
        return str.replace(/^\s+/g, '');
    }
    function pdfFacture(e) {
        e.preventDefault();
        $("#prpdf").css("display", "block");
        window.location.href = "/crm/doc/attache/" + facture.id + "/facture/oui";
    }

    $('#facselect').on('change', function () {
        const dd = $('#facselect option:selected').val();
        if (dd === 'decompte') {
            $('.dvo').empty();
            $('.deco').removeClass('disabled');
            $('.devo').addClass('disabled');
            $('.dvo').append('* Pas nécessaire');
            $('.dco').empty();
        } else {
            $('.dco').empty();
            $('.devo').removeClass('disabled');
            $('.deco').addClass('disabled');
            $('.dco').append('* Pas nécessaire');
            $('.dvo').empty();
        }

        if (dd === 'acompte') {
            $('.tvo').removeClass('disabled');
            $('.pvo').removeClass('disabled');
            $('.dto').empty();
        } else {
            $('.tvo').addClass('disabled');
            $('.pvo').addClass('disabled');
            $('.dto').append('* Pas nécessaire');
        }
    });
    $('#facselectez').on('change', function () {
        const dd = $('#facselectez option:selected').val();
        if (dd === 'decompte') {
            $('.dvo').empty();
            $('.deco').removeClass('disabled');
            $('.devo').addClass('disabled');
            $('.dvo').append('* Pas nécessaire');
            $('.dco').empty();
        } else {
            $('.dco').empty();
            $('.devo').removeClass('disabled');
            $('.deco').addClass('disabled');
            $('.dco').append('* Pas nécessaire');
            $('.dvo').empty();
        }

        if (dd === 'acompte') {
            $('.tvo').removeClass('disabled');
            $('.pvo').removeClass('disabled');
            $('.dto').empty();
        } else {
            $('.tvo').addClass('disabled');
            $('.pvo').addClass('disabled');
            $('.dto').append('* Pas nécessaire');
        }
    });

    const sortlignes = lignes.sort(function (a, b) {
        if (Number.isInteger(parseInt(ltrim(a.reference)))) {
            return parseInt(ltrim(a.reference)) - parseInt(ltrim(b.reference));
        } else {
            if (a.reference > b.reference) return 1;
            if (a.reference < b.reference) return -1;
            return 0;
        }
    });
    const sortgroupes = groupes.sort(function (a, b) {
        if (Number.isInteger(parseInt(ltrim(a.reference)))) {
            return parseInt(ltrim(a.reference)) - parseInt(ltrim(b.reference));
        } else {
            if (a.reference > b.reference) return 1;
            if (a.reference < b.reference) return -1;
            return 0;
        }
    });

    const fetchFacture = async () => {
        const dde = JSON.parse($('#jsonfacture').val());
        const ddec = JSON.parse($('#jsondecomptes').val());
        const forme = JSON.parse($('#jsonforme').val());
        setFacture(dde);
        setClient(dde.client);
        setChantier(dde.chantier);
        if (dde.type === "decompte") {
            setDecompte(dde.decompte);
            setDevis(dde.decompte.devis);
            setLignes(dde.lignes);
        }
        if (dde.type === "retenue") {
            setDevis(dde.acompte.devis);
            setLignes(dde.acompte.devis.lignes);
            setGroupes(dde.acompte.devis.groupe);
        }
        if (dde.type === "acompte") {
            setDevis(dde.acompte.devis);
            setLignes(dde.acompte.devis.lignes);
            setGroupes(dde.acompte.devis.groupe);
        }
        if (dde.type === "devis") {
            setDevis(dde.devis);
            setLignes(dde.lignes);
            setGroupes(dde.groupe);
        }
        if (dde.type === "simple") {
            setDevis(dde.devis);
            setLignes(dde.lignes);
            setGroupes(dde.groupe);
        }
        setforme(forme);
        setDDecomptes(ddec);
        totalacomptes = setTotalacomptes($('#totalacomptes').val())
    };
    useEffect(() => {
        fetchFacture();
    }, []);

    const renderLigne = sortlignes.map((lign) => {
        if (facture.type !== "decompte") {
            return (
                <>
                    {lign.groupe === null &&
                        <tr>
                            {devis.aaref === 'oui' &&
                                <td className="borde" style={{textAlign: "center"}}>{lign.reference}</td>
                            }
                            <td className="borde" style={{maxWidth: "500px", minWidth: "250px", textAlign: "left"}}
                                dangerouslySetInnerHTML={{__html: lign.designation}}/>
                            {devis.zone === 'oui' &&
                                <td className="borde" style={{textAlign: "center"}}>{lign.zone}</td>
                            }
                            <td className="borde" style={{textAlign: "center"}}>{lign.unite}</td>
                            <td className="borde" style={{textAlign: "center"}}>{lign.quantite}</td>
                            <td className="borde nowrape" style={{textAlign: "right"}}><NumberFormat numb={lign.pu}/></td>
                            {devis.aarem === 'oui' &&
                                <td className="borde" style={{textAlign: "center"}}><NumberFormat numb={lign.remise}/>
                                </td>
                            }
                            {devis.aarem === 'non' &&
                                <td className="borde" style={{textAlign: "right"}}><NumberFormat
                                    numb={lign.pu * lign.quantite}/>
                                </td>
                            }
                            {devis.aarem !== 'non' &&
                                <td className="borde" style={{textAlign: "right"}}><NumberFormat
                                    numb={((lign.pu * lign.quantite) * ((100 - lign.remise) / 100))}/>
                                </td>
                            }
                        </tr>
                    }
                </>
            );
        }
        return (<></>);
    });
    const renderGroupe = sortgroupes.map((group) => {
        let st = 0;
        const renderLigneGroupe = sortlignes.map((lign) => {
            if(lign.groupe !== null){
                if (lign.groupe.id === group.id){
                    if (devis.aarem === 'oui') {
                        st = st + ((lign.pu * lign.quantite) * ((100 - lign.remise) / 100));
                    } else {
                        st = st + (lign.pu * lign.quantite);
                    }
                    return (
                        <>
                            {
                                <tr>
                                    {devis.aaref === 'oui' &&
                                        <td className="borde" style={{textAlign: "center"}}>{lign.reference}</td>
                                    }
                                    <td className="borde"
                                        style={{maxWidth: "500px", minWidth: "250px", textAlign: "left"}}
                                        dangerouslySetInnerHTML={{__html: lign.designation}}/>
                                    {devis.zone === 'oui' &&
                                        <td className="borde" style={{textAlign: "center"}}>{lign.zone}</td>
                                    }
                                    <td className="borde" style={{textAlign: "center"}}>{lign.unite}</td>
                                    <td className="borde" style={{textAlign: "center"}}>{lign.quantite}</td>
                                    <td className="borde nowrape" style={{textAlign: "right"}}><NumberFormat numb={lign.pu}/>
                                    </td>
                                    {devis.aarem === 'oui' &&
                                        <td className="borde" style={{textAlign: "center"}}><NumberFormat
                                            numb={lign.remise}/>
                                        </td>
                                    }
                                    {devis.aarem === 'non' &&
                                        <td className="borde" style={{textAlign: "right"}}><NumberFormat
                                            numb={lign.pu * lign.quantite}/>
                                        </td>
                                    }
                                    {devis.aarem !== 'non' &&
                                        <td className="borde" style={{textAlign: "right"}}><NumberFormat
                                            numb={((lign.pu * lign.quantite) * ((100 - lign.remise) / 100))}/>
                                        </td>
                                    }
                                </tr>
                            }
                        </>
                    );
                }
            }
            return (<></>);
        });
        return (
            <>

                <tr  className="togo" key={group.id.toString()}>
                    {devis.aaref === 'oui' &&
                        <td className="borde" style={{textAlign: "center"}}>{group.reference}</td>
                    }
                    <td colSpan="7" className="borde text-left" dangerouslySetInnerHTML={{__html: group.groupe }}/>
                </tr>
                {renderLigneGroupe}
                <tr  className="togo" key={group.id.toString()}>
                    <td colSpan="7" className="borde text-right">
                        <b>SOUS-TOTAL: <NumberFormat numb={st}/></b></td>
                </tr>
            </>
        );
    });

    async function delFacture(resp) {
        if (resp.value !== '') {
            let idchan = facture.chantier.id
            $('#ConfirmDelete').modal('show');
            $('#accept').on("click", async function () {
                $('#ConfirmDelete').modal('hide');
                $('#Traitement').modal('show');
                await axios({
                    method: 'DELETE',
                    url: '/crm/facture/del/' + facture.id,
                }).then(function (response) {
                    window.location.href = '/crm/chantier/' + idchan
                }).catch(function (error) {
                    $('#Traitement').modal('hide');
                    $('#ModalErreur').modal('show')
                });
            });
        } else {
            window.location.reload()
        }
    }
    $('#updateFa').on("click", function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#updateFa').hide()
            $('#closeFa').hide()
            $('#loadFa').css('display', '')
            const idchantier = $('#idchantier').val();
            const idfa = $('#idfacture').val();
            $.ajax({
                type: 'POST',
                url: '/crm/facture/pourcentage/' + idchantier + '/' + idfa,
                data: JSON.stringify($('#addPourcentageForm').serializeObject()),
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
    });
    $('#updateMon').on("click", function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#updateMon').hide()
            $('#closeMon').hide()
            $('#loadMon').css('display', '')
            const idchantier = $('#idchantier').val();
            const idfa = $('#idfacture').val();
            $.ajax({
                type: 'POST',
                url: '/crm/facture/montant/' + idchantier + '/' + idfa,
                data: JSON.stringify($('#addMontantForm').serializeObject()),
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
    });
    $('#addLigneFacture').on("click", function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#addLigneFacture').hide()
            $('#closeLigne').hide()
            $('#loadLigne').css('display', '')
            $('#editor1').val(CKEDITOR.instances['editor1'].getData())
            $.ajax({
                type: 'POST',
                url: '/crm/ligne/add/facture/' + facture.id,
                data: JSON.stringify($('#form3').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    location.reload();
                },
                error: function (xhr, resp, text) {
                    if (xhr.status == '404') {
                        $('#ModalErreur').modal('show')
                    }
                },
            })
        }
    })
    $('#updateLigneFacture').on("click", function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#updateLigneFacture').hide()
            $('#closeLigne').hide()
            $('#loadLigne').css('display', '')
        }
        var idligne = $('#idligne').val()
        var idfacture = $('#idfacture').val()
        var idchantier = $('#idchantier').val()
        $('#editor1').val(CKEDITOR.instances['editor1'].getData())
        $.ajax({
            type: 'PUT',
            url: '/crm/ligne/update/facture/' + idligne + '/' + idfacture,
            data: JSON.stringify($('#form3').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '200') {
                    $('#modalLigne').modal('toggle')
                    window.location.href = '/crm/facture/' + idfacture + '/' + idchantier
                }
            },
            error: function (xhr, resp, text) {
                if (xhr.status == '500') {
                    $('#ModalErreur').modal('show')
                }
            },
        })
    })
    $('#addGroupFac').on("click", function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#addGroupFac').hide();
            $('#closeGroupFac').hide();
            $('#loadGroupFac').css('display', '');
            $.ajax({
                type: 'POST',
                url: '/crm/groupe/add/' + facture.id + '/facture',
                data: JSON.stringify($('#addGroupFacForm').serializeObject()),
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
    });
    $('#updeFacture').on("click", function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#updeFacture').hide()
            $('#closuFacture').hide()
            $('#loaduFacture').css('display', '')
            const idfa = $('#idfacture').val();
            $('#editor2').val(CKEDITOR.instances['editor2'].getData());
            $('#editor3').val(CKEDITOR.instances['editor3'].getData());
            $.ajax({
                type: 'PUT',
                url: '/crm/facture/upda/' +  idfa,
                data: JSON.stringify($('#updFactureForm').serializeObject()),
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
    });
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
                url: '/crm/devis/forme',
                data: new FormData($('#addforme')[0]),
                contentType: false,
                processData: false,
                cache: false,
                dataType: 'json',
            }).then(function (response) {
                location.reload()
            }).catch(function (error) {
                $('#ModalErreur').modal('show')
            });

        }
    })

    if(facture.type === "devis"){
        if(ddecomptes){
            ddecomptes.map((decs) => {
                if(decs.etat === 'valide'){
                    totaldecomptes = totaldecomptes + decs.apayer;
                    totalretenue = totalretenue + (decs.valeur * parseFloat(devis.garantie)/100) + (decs.valeur * parseFloat(devis.finition)/100) + (decs.valeur * parseFloat(devis.prorata)/100) + (decs.valeur * parseFloat(devis.trc)/100);
                }
            });
        }
    }

    console.log(devis);

    return (<>
        <div className="row clearfix" style={{padding: "0.1cm"}}>
            <div className="col-sm-12 text-center">

                <h3 className="font-bold m-t--10 col-purple"><a href={`/crm/client/${client.id}`} >{client.nomclient}</a></h3>
                <h3 className="font-bold m-t--10 col-pink"><a href={`/crm/chantier/${chantier.id}`} >{chantier.nomchantier}</a></h3>

                {facture.type === "acompte" &&
                    <>
                        <h4 className="m-t--10 col-blue-grey font-bold ">FACTURE D'ACOMPTE N°: <span
                            className="pri">{facture.numfacture}</span></h4>
                        <h4 className="m-t--10 col-blue-grey font-bold ">DEVIS N°: <a
                            href={`/crm/devis/${facture.acompte.devis.id}/${chantier.id}`}
                            className="font-bold pri">{facture.acompte.devis.iddevis}</a></h4>
                    </>
                }
                {facture.type === "retenue" &&
                    <>
                        <h4 className="m-t--10 col-blue-grey font-bold ">FACTURE D'ACOMPTE N°: <span
                            className="pri">{facture.numfacture}</span></h4>
                        <h4 className="m-t--10 col-blue-grey font-bold ">DEVIS N°: <a
                            href={`/crm/devis/${facture.acompte.devis.id}/${chantier.id}`}
                            className="font-bold pri">{facture.acompte.devis.iddevis}</a></h4>
                    </>
                }
                {facture.type === "devis" &&
                    <>
                        <h4 className="m-t--10 col-blue-grey font-bold ">FACTURE DE SOLDE N°: <span
                            className="pri">{facture.numfacture}</span></h4>
                        <h4 className="m-t--10 col-blue-grey font-bold ">DEVIS N°: <a
                            href={`/crm/devis/${facture.devis.id}/${chantier.id}`}
                            className="font-bold pri">{facture.devis.iddevis}</a></h4>
                    </>
                }

                {facture.type === "simple" &&
                    <>
                        <h4 className="m-t--10 col-blue-grey font-bold ">FACTURE N°: <span
                            className="pri">{facture.numfacture}</span></h4>
                        <h4 className="m-t--10 col-blue-grey font-bold ">DEVIS N°: <a
                            href={`/crm/devis/${facture.devis.id}/${chantier.id}`}
                            className="font-bold pri">{facture.devis.iddevis}</a></h4>
                    </>
                }

                {facture.type === "decompte" &&
                    <>
                        <h4 className="m-t--10 col-blue-grey font-bold ">FACTURE DE DÉCOMPTE N°: <span
                            className="pri">{facture.numfacture}</span></h4>
                        <h4 className="m-t--10 col-blue-grey font-bold ">DÉCOMPTE N°: <a
                            href={`/crm/decompte/${decompte.id}/${chantier.id}`}
                            className="font-bold  pri">{decompte.numdecompte}</a></h4>
                        <h4 className="m-t--10 col-blue-grey font-bold ">DEVIS N°: <a
                            href={`/crm/devis/${decompte.devis.id}/${chantier.id}`}
                            className="font-bold pri">{decompte.devis.iddevis}</a></h4>
                    </>
                }


                <div className="btn-group">
                    <a href={`/crm/chantier/${chantier.id}`}
                       className="btn bg-purple  align-left m-b-10 text-white waves-effect ">ACCÉDER AU CHANTIER</a>
                    <button type="button"
                            className="btn bg-blue align-left m-b-10 text-white waves-effect"
                            data-toggle="modal" data-target="#modalFacture">CRÉER
                        UNE FACTURE
                    </button>
                </div>
                <br/>
                <div className="btn-group m-t--5">
                    {facture.etat === "save" &&
                        <button className="btn bg-pink text-white" onClick={delFacture}><i
                            className="fa fa-trash"/> SUPPRIMER
                        </button>
                    }
                    <button type="button"
                            className="btn bg-info text-white"
                            data-toggle="modal"
                            data-target="#modalMise">MISE EN FORME
                    </button>
                    <button type="button"
                            className="btn btn-labeled bg-green btn-sm text-white"
                            data-toggle="modal"
                            data-target="#modalInfo">- INFORMATIONS
                    </button>
                </div>
                <br/>
                {facture.type === "retenue" &&
                    <>
                        {facture.etat === "save" &&
                            <div className="btn-group">
                                <button type="button"
                                        className="btn btn-labeled bg-pri text-white btn-sm"
                                        data-toggle="modal" data-target="#modalPour">FACTURE SUR
                                    POURCENTAGE
                                </button>
                                <button type="button"
                                        className="btn btn-labeled btn-primary btn-sm"
                                        data-toggle="modal" data-target="#modalMontant">FACTURE SUR
                                    MONTANT
                                </button>
                                <button type="button"
                                        className="btn btn-labeled bg-pri text-white btn-sm"
                                        data-toggle="modal"
                                        data-target="#modalLigne">AJOUTER UNE LIGNE
                                </button>
                            </div>
                        }
                    </>
                }
                {facture.type === "acompte" &&
                    <>
                        {facture.etat === "save" &&
                            <div className="btn-group">
                                <button type="button"
                                        className="btn btn-labeled bg-pri text-white btn-sm"
                                        data-toggle="modal" data-target="#modalPour">FACTURE SUR
                                    POURCENTAGE
                                </button>
                                <button type="button"
                                        className="btn btn-labeled btn-primary btn-sm"
                                        data-toggle="modal" data-target="#modalMontant">FACTURE SUR
                                    MONTANT
                                </button>
                            </div>
                        }
                    </>
                }
                {facture.type === "simple" &&
                    <>
                        {facture.etat === "save" &&
                            <div className="btn-group">
                                <button type="button"
                                        className="btn btn-labeled btn-primary btn-sm"
                                        data-toggle="modal" data-target="#modalLigne">AJOUTER UNE
                                    LIGNE
                                </button>
                                <button type="button"
                                        className="btn btn-labeled bg-green btn-sm text-white"
                                        data-toggle="modal"
                                        data-target="#modalInfo">- INFORMATIONS
                                </button>
                            </div>
                        }
                    </>
                }
                <div className="btn-group">
                    <button className="btn bg-indigo text-white"
                            onClick={handlePrint}><i
                        className="fa fa-print"/> IMPRESSION AVEC ENTÊTE
                    </button>
                    <a href={`/crm/doc/attache/${facture.id}/facture/non`}
                       className="btn bg-deep-orange text-white"><i
                        className="fa fa-envelope"/> MAIL</a>

                    <button className="btn bg-pri text-white"
                            onClick={pdfFacture}><i
                        className="fas fa-file-pdf"/> PDF SANS ENTÊTE
                    </button>

                    <ReactHTMLTableToExcel
                        id="test-table-xls-button"
                        className="btn bg-green text-white"
                        table="dev2excel"
                        filename={`Facture N° ${facture.numfacture}`}
                        sheet="tablexls"
                        buttonText="EXCEL"/>

                    {devis.etat !== "valide" &&
                        <button className="btn bg-pink text-white"
                                onClick={delFacture}><i
                            className="fa fa-trash"/> SUPPRIMER
                        </button>
                    }
                    <br/><br/>
                    {facture.etat === "valide" &&
                        <h4 className="font-bold col-black">CETTE FACTURE EST VALIDÉE</h4>
                    }
                </div>
                <br/><br/>
                {deviceType !== "mobile" &&
                    <>
                        <table id="dev2excel">
                            <tbody>
                            <tr>
                                <td>
                                    <PrintFacture decompte={decompte} lignes={lignes} groupes={groupes}
                                                  ref={componentRef} totalretenue ={totalretenue}
                                                  renderLigne={renderLigne} renderGroupe={renderGroupe}
                                                  forme={forme} chantier={chantier} client={client} devis={devis}
                                                  facture={facture} totaldecomptes={totaldecomptes} totalacomptes={totalacomptes}
                                    />
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <br/><br/><br/><br/>
                    </>
                }

            </div>
        </div>
    </>);

}
try {
    const container = document.getElementById('shacontentFacture');
    const root = createRoot(container);
    root.render(<Facture/>);
} catch (e) {
}