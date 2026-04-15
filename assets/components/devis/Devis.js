 import React, { useEffect, useRef, useState } from 'react';
import axios from "axios";
import { useReactToPrint } from "react-to-print";
import { PrintDevis } from "./PrintDevis";
import NumberFormat from "../../fonctions/NumberFormat";
import { EditText } from 'react-edit-text';
import { deviceType } from "react-device-detect";
import $ from "jquery";
import Moment from "react-moment";
import ReactHTMLTableToExcel from 'react-html-table-to-excel';
import { createRoot } from "react-dom/client";

const Devis = () => {
    let devdate = $("#devdate").val();
    const [loading, setLoading] = useState(false);
    const [devis, setDevis] = useState('');
    const [dede, setDede] = useState('');
    const [lignes, setLignes] = useState([]);
    const [groupes, setGroupes] = useState([]);
    const [forme, setforme] = useState('');
    const [usa, setUsa] = useState('');
    const [formes, setformes] = useState([]);
    const [idmaster, setIdmaster] = useState('');

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

    let renderLigne = null;
    let renderBons = null;
    let renderGroupe = null;

    function pdfDevis(e) {
        e.preventDefault();
        $("#prpdf").css("display", "block");
        window.location.href = "/crm/doc/attache/" + devis.id + "/devis/oui";
    }
    const numberToLetters = require('number-2-letters');
    async function restaureDevis(e) {
        e.preventDefault()
        $('#ConfirmDelete').modal('show');
        $('#accept').on("click", async function () {
            $('#ConfirmDelete').modal('hide');
            $('#Traitement').modal('show');
            await axios({
                method: 'GET',
                url: '/crm/devis/restaurer/' + devis.id,
            }).then(function (response) {
                let ddevis = response.data;
                setDevis(ddevis);
                setLignes(ddevis.lignes);
                $('#Traitement').modal('toggle')
            }).catch(function (error) {
                $('#Traitement').modal('toggle')
                $('#ModalErreur').modal('show');
            });
        });
    }
    function ltrim(str) {
        if (!str) return str;
        return str.replace(/^\s+/g, '');
    }
    const formatNumber = (num, precision, separator) => {
        let parts;
        num = Number(num);
        num = (typeof precision !== 'undefined' ? num.toFixed(precision) : num).toString();
        parts = num.split('.');
        parts[0] = parts[0].toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1' + (separator));
        return parts.join(',');
    }
    async function dupliquerDevis(e) {
        e.preventDefault()
        $('#ConfirmDelete').modal('show')
        $('#accept').on("click", async function () {
            $('#ConfirmDelete').modal('hide')
            $('#Traitement').modal('show')
            await axios({
                method: 'GET',
                url: '/crm/devis/dupliquer/' + devis.id,
            }).then(function (response) {
                window.location.href = '/crm/devis/' + response.data['result'] + '/' + devis.chantier.id
            }).catch(function (error) {
                $('#Traitement').modal('toggle')
                $('#ModalErreur').modal('show');
            });
        });
    }
    async function saveRemise(resp) {
        const val = resp.value.replace(',', '.')
        if (resp.value !== '' && !isNaN(val)) {
            $('#Traitement').modal('show');
            await axios({
                method: 'POST',
                url: '/crm/ligne/upd/devis/remise/' + resp.name + '/' + devis.id + '/' + resp.value.replace('.', ','),
            }).then(function (response) {
                window.location.reload()
            }).catch(function (error) {
                $('#ModalErreur').modal('show')
            });
        } else {
            window.location.reload()
        }
    }
    async function savePu(resp) {
        const val = resp.value.replace(',', '.')
        if (resp.value !== '' && !isNaN(val)) {
            $('#Traitement').modal('show');
            await axios({
                method: 'POST',
                url: '/crm/ligne/upd/devis/pu/' + resp.name + '/' + devis.id + '/' + resp.value.replace('.', ','),
            }).then(function (response) {
                window.location.reload()
            }).catch(function (error) {
                $('#ModalErreur').modal('show')
            });
        } else {
            window.location.reload()
        }
    }
    async function saveQte(resp) {
        const val = resp.value.replace(',', '.')
        if (resp.value !== '' && !isNaN(val)) {
            $('#Traitement').modal('show');
            await axios({
                method: 'POST',
                url: '/crm/ligne/upd/devis/qte/' + resp.name + '/' + devis.id + '/' + resp.value.replace('.', ','),
            }).then(function (response) {
                window.location.reload()
            }).catch(function (error) {
                $('#ModalErreur').modal('show')
            });
        } else {
            window.location.reload()
        }
    }
    async function saveUnite(resp) {
        if (resp.value !== '') {
            $('#Traitement').modal('show');
            await axios({
                method: 'POST',
                url: '/crm/ligne/upd/devis/unite/' + resp.name + '/' + devis.id + '/' + resp.value,
            }).then(function (response) {
                let ddevis = response.data;
                setDevis(ddevis);
                setLignes(ddevis.lignes);
                $('#Traitement').modal('hide');
            }).catch(function (error) {
                $('#ModalErreur').modal('show')
            });
        } else {
            window.location.reload()
        }
    }
    async function saveReference(resp) {
        if (resp.value !== '') {
            $('#Traitement').modal('show');
            await axios({
                method: 'POST',
                url: '/crm/ligne/upd/devis/ref/' + resp.name + '/' + devis.id + '/' + resp.value,
            }).then(function (response) {
                let ddevis = response.data;
                setDevis(ddevis);
                setLignes(ddevis.lignes);
                $('#Traitement').modal('hide');
            }).catch(function (error) {
                $('#ModalErreur').modal('show')
            });
        } else {
            window.location.reload()
        }
    }
    async function saveZone(resp) {
        if (resp.value !== '') {
            $('#Traitement').modal('show');
            await axios({
                method: 'POST',
                url: '/crm/ligne/upd/devis/zone/' + resp.name + '/' + devis.id + '/' + resp.value,
            }).then(function (response) {
                let ddevis = response.data;
                setDevis(ddevis);
                setLignes(ddevis.lignes);
                $('#Traitement').modal('hide');
            }).catch(function (error) {
                $('#ModalErreur').modal('show')
            });
        } else {
            window.location.reload()
        }
    }
    async function delDevis(resp) {
        if (resp.value !== '') {
            $('#ConfirmDelete').modal('show');
            $('#accept').on("click", async function () {
                $('#ConfirmDelete').modal('hide');
                $('#Traitement').modal('show');
                await axios({
                    method: 'DELETE',
                    url: '/crm/devis/del/' + devis.id,
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
    async function evaluerDevis(resp) {
        if (resp.value !== '') {
            $('#Traitement').modal('show');
            await axios({
                method: 'POST',
                url: '/crm/devis/evaluer/' + devis.id,
            }).then(function (response) {
                window.location.href = '/crm/devis/' + response.data['result'] + '/' + devis.chantier.id
            }).catch(function (error) {
                $('#ModalErreur').modal('show')
            });
        } else {
            window.location.reload()
        }
    }
    async function venteDevis(resp) {
        if (resp.value !== '') {
            $('#Traitement').modal('show');
            await axios({
                method: 'POST',
                url: '/crm/devis/vente/' + devis.id,
            }).then(function (response) {
                window.location.href = '/crm/devis/' + response.data['result'] + '/' + devis.chantier.id
            }).catch(function (error) {
                $('#ModalErreur').modal('show')
            });
        } else {
            window.location.reload()
        }
    }
    const deleteLigne = (delid) => {
        $('#ConfirmDelete').modal('show');
        $('#accept').on("click", async function () {
            $('#ConfirmDelete').modal('hide');
            $('#Traitement').modal('show');
            await axios({
                method: 'DELETE',
                url: '/crm/ligne/delete/' + devis.id + '/' + devis.chantier.id + '/' + delid + '/devis',
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
            }).then(function (response) {
                let ddevis = response.data;
                setDevis(ddevis);
                setLignes(ddevis.lignes);
                $('#Traitement').modal('hide');
            }).catch(function (error) {
                $('#Traitement').modal('hide');
                $('#ModalErreur').modal('show');
            });
        })
    }
    const deleteGroupe = (delid) => {
        if (deviceType !== "mobile") {
            $('#modalList').modal('toggle');
        }
        $('#ConfirmDelete').modal('show');
        $('#accept').on("click", async function () {
            $('#ConfirmDelete').modal('hide');
            $('#Traitement').modal('show');
            await axios({
                method: 'DELETE',
                url: '/crm/ligne/groupe/' + devis.id + '/' + devis.chantier.id + '/' + delid + '/devis',
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
            }).then(function (response) {
                window.location.reload();
            }).catch(function (error) {
                $('#Traitement').modal('hide');
                $('#ModalErreur').modal('show');
            });
        })
    }
    const shuper = (id) => {
        $('.' + id + 'li').removeClass('hide');
    }
    const shupere = (id) => {
        $('.' + id + 'li').addClass('hide');
    }
    const shuperg = (id) => {
        $('.' + id + 'gr').removeClass('hide');
    }
    const shupereg = (id) => {
        $('.' + id + 'gr').addClass('hide');
    }

    $('#updateDevis').off().on("click", async function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#updateDevis').hide()
            $('#closeupDevis').hide()
            $('#loadupDevis').css('display', '')
            $('#editor3').val(CKEDITOR.instances['editor3'].getData())
            $('#editor4').val(CKEDITOR.instances['editor4'].getData())

            await axios({
                method: 'PUT',
                url: '/crm/devis/update/' + devis.id,
                data: JSON.stringify($('#updateDevisForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
            }).then(function (response) {
                window.location.reload();
            }).catch(function (error) {
                $('#modalInfo').modal('toggle')
                $('#ModalErreur').modal('show')
            });
        }
    });
    $('#addLigneDevis').off().on("click", async function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#addLigneDevis').hide()
            $('#closeLigne').hide()
            $('#loadLigne').css('display', '')
            $('#editor1').val(CKEDITOR.instances['editor1'].getData())
            await axios({
                method: 'POST',
                url: '/crm/ligne/add/devis/' + devis.id,
                data: JSON.stringify($('#addLigneDevisForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
            }).then(function (response) {
                let ddevis = response.data;
                setDevis(ddevis);
                setLignes(ddevis.lignes);
                $('#addLigneDevis').show();
                $('#closeLigne').show();
                $('#loadLigne').hide();
                $('#addLigneDevisForm')[0].reset();
            }).catch(function (error) {
                $('#modalLigne').modal('toggle')
                $('#ModalErreur').modal('show')
            });
        }
    })
    $('#updateLigneDevis').off().on("click", async function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#updateLigneDevis').hide()
            $('#closeLigne').hide()
            $('#loadLigne').css('display', '')

            var idligne = $('#idligne').val()
            $('#editor1').val(CKEDITOR.instances['editor1'].getData())

            await axios({
                method: 'POST',
                url: '/crm/ligne/update/devis/' + idligne + '/' + devis.id,
                data: JSON.stringify($('#addLigneDevisForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
            }).then(function (response) {
                let ddevis = response.data;
                setDevis(ddevis);
                setLignes(ddevis.lignes);
                $('#updateLigneDevis').show();
                $('#closeLigne').show();
                $('#loadLigne').hide();
                $('#modalLigne').modal('toggle')
                window.location.href = '/crm/devis/' + devis.id + '/' + devis.chantier.id
            }).catch(function (error) {
                $('#modalLigne').modal('toggle')
                $('#ModalErreur').modal('show')
            });


        }

    })
    $('#addDevis').off().on("click", async function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#addDevis').hide()
            $('#closeDevis').hide()
            $('#loadDevis').css('display', '')

            $('#editor').val(CKEDITOR.instances['editor'].getData());
            $('#editor2').val(CKEDITOR.instances['editor2'].getData());

            await axios({
                method: 'POST',
                url: '/crm/devis/add/' + devis.chantier.id,
                data: JSON.stringify($('#addDevisForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
            }).then(function (response) {
                $('#modalDevis').modal('toggle')
                window.location.href = '/crm/devis/' + response.data['result'] + '/' + devis.chantier.id;
            }).catch(function (error) {
                $('#modalDevis').modal('toggle')
                $('#ModalErreur').modal('show')
            });
        }
    })
    $('#addGroupDev').off().on("click", async function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#addGroupDev').hide()
            $('#closeGroup').hide()
            $('#loadGroup').css('display', '')

            await axios({
                method: 'POST',
                url: '/crm/groupe/add/' + devis.id + '/devis',
                data: JSON.stringify($('#addGroupeDevisForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
            }).then(function (response) {
                window.location.reload();
            }).catch(function (e) {
                $('#modalLigne').modal('toggle')
                $('#ModalErreur').modal('show')
            });

        }
    })
    $('#updateGroupDev').off().on("click", async function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#updateGroupDev').hide()
            $('#closeGroup').hide()
            $('#loadGroup').css('display', '')
        }
        var idgroupe = $('#idgroupe').val()

        await axios({
            method: 'PUT',
            url: '/crm/groupe/update/' + idgroupe + '/' + devis.id + '/devis',
            data: JSON.stringify($('#addGroupeDevisForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
        }).then(function (response) {
            let dde = response.data;
            setDevis(dde);
            setGroupes(dde.groupe);
            $('#updateGroupDev').show();
            $('#closeGroup').show();
            $('#loadGroup').hide();
            $('#modalGroup').modal('toggle')
            window.location.href = '/crm/devis/' + devis.id + '/' + devis.chantier.id
        }).catch(function (e) {
            $('#modalGroup').modal('toggle')
            $('#ModalErreur').modal('show')
        });

    })
    $('#addChoisirDevis').off().on("click", async function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#addChoisirDevis').hide()
            $('#closeChoisirDevis').hide()
            $('#loadChoisirDevis').css('display', '')

            await axios({
                method: 'POST',
                url: '/crm/ligne/choisir/devis/' + devis.id,
                data: JSON.stringify($('#addChoisirDevisForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
            }).then(function (response) {
                let ddevis = response.data;
                setDevis(ddevis);
                setLignes(ddevis.lignes);
                $('#addChoisirDevis').show();
                $('#closeChoisirDevis').show();
                $('#loadChoisirDevis').hide();
                $('#addChoisirDevisForm')[0].reset();
            }).catch(function (error) {
                $('#modalChoisir').modal('toggle')
                $('#ModalErreur').modal('show')
            });

        }

    })
    $('#addBase').off().on("click", async function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#addBase').hide();
            $('#closeBase').hide();
            $('#loadBase').css('display', '');

            await axios({
                method: 'PUT',
                url: '/crm/devis/basetva/' + devis.id,
                data: JSON.stringify($('#addBaseDevisForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
            }).then(function (response) {
                let ddevis = response.data;
                setDevis(ddevis);
                setLignes(ddevis.lignes);
                $('#addBase').show();
                $('#closeBase').show();
                $('#loadBase').hide();
                $('#modalBase').modal('toggle')
            }).catch(function (error) {
                $('#modalBase').modal('toggle');
                $('#ModalErreur').modal('show');
            });
        }
    })
    $('#addRem').off().on("click", async function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#addRem').hide();
            $('#closeRem').hide();
            $('#loadRem').css('display', '');
            await axios({
                method: 'POST',
                url: '/crm/devis/remise/' + devis.id,
                data: JSON.stringify($('#addRemiseThtForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
            }).then(function (response) {
                let ddevis = response.data;
                setDevis(ddevis);
                setLignes(ddevis.lignes);
                $('#addRem').show();
                $('#closeRem').show();
                $('#loadRem').hide();
                $('#modalRemise').modal('toggle')
            }).catch(function (error) {
                $('#modalRemise').modal('toggle')
                $('#ModalErreur').modal('show');
            });
        }
    })
    $('#addDeplacerDevis').off().on("click", async function (event) {
        event.preventDefault()
        var idchantier = $('#deplacerDevis').val();
        $('#addDeplacerDevis').hide()
        $('#closeDeplacer').hide()
        $('#loadDeplacer').css('display', '')
        await axios({
            method: 'GET',
            url: '/crm/devis/deplacer/' + devis.id + '/' + idchantier,
        }).then(function (response) {
            window.location.href = '/crm/chantier/' + idchantier
        }).catch(function (error) {
            $('#modalDeplacer').modal('toggle')
            $('#ModalErreur').modal('show')
        });
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
    $('#adoFacture').off().on("click", async function (event) {
        event.preventDefault()
        alert("salut");
    })

    $(function () {
        $(".dup").each(function () {
            $(this).off().on("click", async function () {
                $('#Traitement').modal('show');
                await axios({
                    method: 'DELETE',
                    url: '/crm/ligne/dupliquer/' + devis.id + '/' + devis.chantier.id + '/' + this.id + '/devis',
                    contentType: 'application/json; charset=utf-8',
                    dataType: 'json',
                }).then(function (response) {
                    let ddevis = response.data;
                    setDevis(ddevis);
                    setLignes(ddevis.lignes);
                    $('#Traitement').modal('hide');
                }).catch(function (error) {
                    $('#Traitement').modal('hide');
                });
            });
        });
        $(".dele").each(function () {
            $(this).off().on("click", async function () {
                $('#Traitement').modal('show');
                await axios({
                    method: 'DELETE',
                    url: '/crm/ligne/delete/' + devis.id + '/' + devis.chantier.id + '/' + this.id + '/devis',
                    contentType: 'application/json; charset=utf-8',
                    dataType: 'json',
                }).then(function (response) {
                    let ddevis = response.data;
                    setDevis(ddevis);
                    setLignes(ddevis.lignes);
                    $('#Traitement').modal('hide');
                }).catch(function (error) {
                    $('#Traitement').modal('hide');
                });
            });
        });
        $(".delegr").each(function () {
            $(this).off().on("click", async function () {
                $('#Traitement').modal('show');
                await axios({
                    method: 'DELETE',
                    url: '/crm/ligne/groupe/' + devis.id + '/' + devis.chantier.id + '/' + this.id + '/devis',
                    contentType: 'application/json; charset=utf-8',
                    dataType: 'json',
                }).then(function (response) {
                    location.reload();
                }).catch(function (error) {
                    $('#Traitement').modal('hide');
                });
            });
        });
    });
    async function convertirPlanning(e) {
        e.preventDefault()
        window.$('#Traitement').modal('show');
        await axios({
            method: 'GET',
            url: '/crm/devis/convertir/' + devis.id,
        }).then(function (response) {
            location.reload();
        }).catch(function (error) {
            $('#Traitement').modal('toggle')
            window.$('#ModalErreur').modal('show');
        });
    }
    async function valideDevis(e) {
        e.preventDefault()
        window.$('#Traitement').modal('show');
        await axios({
            method: 'GET',
            url: '/crm/devis/valider/' + devis.id,
        }).then(function (response) {
            location.reload();
        }).catch(function (error) {
            $('#Traitement').modal('toggle')
            window.$('#ModalErreur').modal('show');
        });
    }
    async function devalideDevis(e) {
        e.preventDefault()
        $('#ConfirmDevaDevis').modal('show');
        $('#acceptDeva').on("click", async function () {
            $('#ConfirmDevaDevis').modal('toggle');
            $('#Traitement').modal('show');
            await axios({
                method: 'GET',
                url: '/crm/devis/devalider/' + devis.id,
            }).then(function (response) {
                location.reload();
            }).catch(function (error) {
                $('#Traitement').modal('toggle')
                $('#ModalErreur').modal('show');
            });
        });
    }



    const sortlignes = lignes.sort(function (a, b) {
        if(devis.aaref ==="oui" && a.reference !== null && b.reference !== null){
            if (a.reference.toString().indexOf(".") >= 0){
                if(a.reference.toString().split(".")[0] === b.reference.toString().split(".")[0]){
                    return a.reference.toString().split(".")[1] - b.reference.toString().split(".")[1];
                }else{
                    return a.reference.toString().split(".")[0] - b.reference.toString().split(".")[0];
                }
            }
            else if (a.reference.toString().indexOf("-") >= 0){
                if(a.reference.toString().split("-")[0] === b.reference.toString().split("-")[0]){
                    return a.reference.toString().split("-")[1] - b.reference.toString().split("-")[1];
                }else{
                    return a.reference.toString().split("-")[0] - b.reference.toString().split("-")[0];
                }
            }
            else if (a.reference.toString().indexOf("_") >= 0){
                if(a.reference.toString().split("_")[0] === b.reference.toString().split("_")[0]){
                    return a.reference.toString().split("_")[1] - b.reference.toString().split("_")[1];
                }else{
                    return a.reference.toString().split("_")[0] - b.reference.toString().split("_")[0];
                }
            }else{
                return a.reference - b.reference;
            }
        }
    });
    const sortgroupes = groupes.sort(function (a, b) {
        if(devis.aaref ==="oui" && a.reference !== null && b.reference !== null) {
            if (a.reference.toString().indexOf(".") >= 0) {
                if (a.reference.toString().split(".")[0] === b.reference.toString().split(".")[0]) {
                    return a.reference.toString().split(".")[1] - b.reference.toString().split(".")[1];
                } else {
                    return a.reference.toString().split(".")[0] - b.reference.toString().split(".")[0];
                }
            } else if (a.reference.toString().indexOf("-") >= 0) {
                if (a.reference.toString().split("-")[0] === b.reference.toString().split("-")[0]) {
                    return a.reference.toString().split("-")[1] - b.reference.toString().split("-")[1];
                } else {
                    return a.reference.toString().split("-")[0] - b.reference.toString().split("-")[0];
                }
            } else if (a.reference.toString().indexOf("_") >= 0) {
                if (a.reference.toString().split("_")[0] === b.reference.toString().split("_")[0]) {
                    return a.reference.toString().split("_")[1] - b.reference.toString().split("_")[1];
                } else {
                    return a.reference.toString().split("_")[0] - b.reference.toString().split("_")[0];
                }
            } else {
                return a.reference - b.reference;
            }
        }
    });

    const renderLigneMobile = sortlignes.map((lign) => {
        let pop = lign.id;
        let op = '';
        if (devis.etat === 'valide') {
            op = lign.designation + '<p class="text-center bordz' + lign.id + 'li" ></p>';
        } else {
            op = lign.designation + '<p class="text-center bordz' + lign.id + 'li" >' +
                '<a href=/crm/devis/ligne/' + devis.id + '/' + lign.id + '/' + devis.chantier.id + '><i class="fa fa-edit text-success m-r-15" style="font-size: 16px" aria-hidden="true" title="Modifier cette ligne"></i></a>' +
                '<a class="dup" id=' + pop + '><i class="fa fa-reply col-blue m-r-15" style="font-size: 16px" aria-hidden="true" title="Dupliquer cette ligne"></i></a>' +
                '<a class="dele" id=' + pop + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a>' +
                '</p>';
        }

        return (
            <>
                {sortlignes.length !== "0" &&
                    <>
                        {lign.groupe === null &&
                            <>
                                <tr className="borde">
                                    {devis.aaref === 'oui' &&
                                        <td className="borde text-center">{lign.reference}</td>
                                    }
                                    <td className="borde">
                                        <span className="pri bolo600 text-left"
                                            dangerouslySetInnerHTML={{ __html: lign.designation }} /><br />
                                        {devis.zone === 'oui' &&
                                            <span className="m-t--10 text-left">Zone: <span
                                                className="font-weight-bold">{lign.zone} </span></span>
                                        }<br />

                                        <table style={{ width: "100%" }} border="0" cellSpacing="0"
                                            cellPadding="0">
                                            <tr>
                                                <td className="text-right  font-bold">Unité:</td>
                                                <td className="text-left  font-weight-bold">{lign.unite}</td>
                                            </tr>
                                            <tr>
                                                <td className="text-right  font-bold">Quantité:</td>
                                                <td className="text-left  font-weight-bold"><NumberFormat
                                                    numb={lign.quantite} />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td className="text-right  font-bold">Prix unitaire:</td>
                                                <td className="text-left  font-weight-bold"><NumberFormat
                                                    numb={lign.pu} />
                                                </td>
                                            </tr>
                                            {devis.aarem === 'oui' &&
                                                <tr>
                                                    <td className="text-right  font-bold">Remise:</td>
                                                    <td className="text-left  font-weight-bold"><NumberFormat
                                                        numb={lign.remise} />%
                                                    </td>
                                                </tr>
                                            }
                                            <tr>
                                                <td className="text-right  font-bold">Montant HT:</td>
                                                <td className="text-left  font-weight-bold">
                                                    {devis.aarem === 'non' &&
                                                        <> <NumberFormat numb={(lign.pu * lign.quantite)} /></>
                                                    }
                                                    {devis.aarem !== 'non' &&
                                                        <><NumberFormat
                                                            numb={((lign.pu * lign.quantite) * ((100 - lign.remise) / 100))} /></>
                                                    }
                                                </td>
                                            </tr>
                                            <tr>
                                                {devis.etat === 'save' &&
                                                    <>
                                                        <td colSpan={2} style={{ width: "80px" }}
                                                            className="text-center bordz"
                                                            dangerouslySetInnerHTML={{ __html: op }} />
                                                    </>
                                                }
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td colSpan={2} className="bg-gray" style={{ height: "5px" }} />
                                </tr>
                            </>
                        }
                    </>
                }
            </>
        );
    });
    const renderGroupeMobile = groupes.map((group) => {
        let st = 0;
        const renderLigneGroupeMobile = sortlignes.map((ligne) => {
            if (ligne.groupe !== null) {
                if (ligne.groupe.id === group.id) {
                    if (devis.aarem === 'oui') {
                        st = st + ((ligne.pu * ligne.quantite) * ((100 - ligne.remise) / 100));
                    } else {
                        st = st + (ligne.pu * ligne.quantite);
                    }
                }
            }

            return (
                <>
                    {sortlignes.length !== "0" &&
                        <>
                            {ligne.groupe !== null &&
                                <>
                                    {ligne.groupe.id === group.id &&
                                        <tr>
                                            {devis.aaref === 'oui' &&
                                                <td className="text-center borde">{ligne.reference}</td>
                                            }
                                            <td className="borde">
                                                <span className="pri bolo600"
                                                    dangerouslySetInnerHTML={{ __html: ligne.designation }} /><br />
                                                {devis.zone === 'oui' &&
                                                    <>
                                                        <span className="m-t--10 text-left font-bold">Zone: <span
                                                            className="font-weight-bold">{ligne.zone} </span></span><br /></>
                                                }
                                                <table style={{ width: "100%", marginTop: "10px" }} border="0"
                                                    cellSpacing="0" cellPadding="0">
                                                    <tr>
                                                        <td className="text-right font-bold">Unité:</td>
                                                        <td className="text-left font-weight-bold"> {ligne.unite}</td>
                                                    </tr>
                                                    <tr>
                                                        <td className="text-right font-bold">Quantité:</td>
                                                        <td className="text-left font-weight-bold"><NumberFormat
                                                            numb={(ligne.quantite)} /></td>
                                                    </tr>
                                                    <tr>
                                                        <td className="text-right font-bold">Prix unitaire:</td>
                                                        <td className="text-left font-weight-bold"><NumberFormat
                                                            numb={(ligne.pu)} />
                                                        </td>
                                                    </tr>
                                                    {devis.aarem === 'oui' &&
                                                        <>
                                                            <tr>
                                                                <td className="text-right font-bold">Remise:</td>
                                                                <td className="text-left font-weight-bold"> {ligne.remise}%</td>
                                                            </tr>
                                                        </>
                                                    }
                                                    <tr>
                                                        <td className="text-right font-bold">Montant HT:</td>
                                                        {devis.aarem !== 'oui' &&
                                                            <td className="text-left"><NumberFormat
                                                                numb={(ligne.pu * ligne.quantite)} /></td>
                                                        }
                                                        {devis.aarem === 'oui' &&
                                                            <td className="text-left"><NumberFormat
                                                                numb={((ligne.pu * ligne.quantite) * ((100 - ligne.remise) / 100))} />
                                                            </td>
                                                        }
                                                    </tr>
                                                    <tr>
                                                        {devis.etat === 'save' &&
                                                            <>
                                                                <td className="text-center bordz" colSpan={2}
                                                                    style={{ width: "80px" }}>
                                                                    <a href={`/crm/devis/ligne/${devis.id}/${ligne.id}/${devis.chantier.id}`}><i
                                                                        className="fa fa-edit text-success m-r-10"
                                                                        style={{ fontSize: "14px" }}
                                                                        aria-hidden="true"
                                                                        title="Modifier" /></a>

                                                                    <a href=""><i
                                                                        className="fa fa-reply col-blue m-r-10"
                                                                        style={{ fontSize: "14px" }}
                                                                        aria-hidden="true"
                                                                        title="Dupliquer" /></a>

                                                                    <a onClick={() => {
                                                                        deleteLigne(ligne.id)
                                                                    }}><i className="fa fa-trash col-pink"
                                                                        style={{ fontSize: "14px" }}
                                                                        aria-hidden="true"
                                                                        title="Supprimer" /></a></td>
                                                            </>
                                                        }
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    }
                                </>
                            }
                        </>
                    }
                </>
            );
        })
        return (
            <>
                <tr className="togo bolo600">
                    {devis.aaref === 'oui' &&
                        <>
                            <td className="text-center borde">{group.reference}</td>
                            <td className="borde">{group.groupe}<br />
                                <span style={{ float: "right" }}>
                                    {devis.etat === 'save' &&
                                        <>
                                            <a href={`/crm/devis/groupe/${devis.id}/${group.id}/${devis.chantier.id}`}><i
                                                className="fa fa-edit text-success m-r-10"
                                                style={{ fontSize: "16px" }} aria-hidden="true"
                                                title="Modifier" /></a>

                                            <a onClick={() => {
                                                deleteGroupe(group.id)
                                            }}><i className="fa fa-trash col-pink" style={{ fontSize: "14px" }}
                                                aria-hidden="true"
                                                title="Supprimer" /></a>
                                        </>
                                    }
                                </span>
                            </td>
                        </>
                    }

                    {devis.aaref !== 'oui' &&
                        <td className="borde">{group.groupe}<br />
                            <span style={{ float: "right" }}>
                                {devis.etat === 'save' &&
                                    <>
                                        <a href={`/crm/bon/groupe/${devis.id}/${group.id}/${devis.chantier.id}`}><i
                                            className="fa fa-edit text-success m-r-10"
                                            style={{ fontSize: "16px" }} aria-hidden="true"
                                            title="Modifier" /></a>

                                        <a onClick={() => {
                                            deleteGroupe(group.id)
                                        }}><i className="fa fa-trash col-pink" style={{ fontSize: "14px" }}
                                            aria-hidden="true"
                                            title="Supprimer" /></a>
                                    </>
                                }
                            </span>
                        </td>
                    }

                </tr>

                {renderLigneGroupeMobile}

                <tr className="togo">
                    {devis.zone === 'oui' && devis.aarem !== 'non' &&
                        <>
                            {devis.aaref === 'oui' &&
                                <td colSpan="8" className="borde text-right">
                                    <b>SOUS-TOTAL: <NumberFormat numb={st} /></b></td>
                            }
                            {devis.aaref !== 'oui' &&
                                <td colSpan="7" className="borde text-right">
                                    <b>SOUS-TOTAL: <NumberFormat numb={st} /></b></td>
                            }
                        </>
                    }

                    {devis.zone === 'non' && devis.aarem === 'non' &&
                        <>
                            {devis.aaref === 'oui' &&
                                <td colSpan="6" className="borde text-right">
                                    <b>SOUS-TOTAL: <NumberFormat numb={st} /></b></td>
                            }
                            {devis.aaref !== 'oui' &&
                                <td colSpan="5" className="borde text-right">
                                    <b>SOUS-TOTAL: <NumberFormat numb={st} /></b></td>
                            }
                        </>
                    }

                    {devis.zone === 'oui' && devis.aarem === 'non' &&
                        <>
                            {devis.aaref === 'oui' &&
                                <td colSpan="7" className="borde text-right">
                                    <b>SOUS-TOTAL: <NumberFormat numb={st} /></b></td>
                            }
                            {devis.aaref !== 'oui' &&
                                <td colSpan="6" className="borde text-right">
                                    <b>SOUS-TOTAL: <NumberFormat numb={st} /></b></td>
                            }
                        </>
                    }

                    {devis.aarem !== 'non' && devis.zone === 'non' &&
                        <>
                            {devis.aaref === 'oui' &&
                                <td colSpan="7" className="borde text-right">
                                    <b>SOUS-TOTAL: <NumberFormat numb={st} /></b></td>
                            }
                            {devis.aaref !== 'oui' &&
                                <td colSpan="6" className="borde text-right">
                                    <b>SOUS-TOTAL: <NumberFormat numb={st} /></b></td>
                            }
                        </>
                    }
                </tr>
            </>
        );
    });

    if (devis.type === "cps") {
        let bons = devis.bons;
        renderBons = bons.map((bon) => {
            let lignes = bon.lignes;
            renderLigne = lignes.map((ligne) => {
                return (<tr>
                    <td className="borde">{ligne.reference}</td>
                    <td className="borde">{ligne.designation}</td>
                    <td className="borde text-center">{ligne.unite}</td>
                    <td className="borde text-center"><NumberFormat numb={ligne.quantite} /></td>
                    <td className="borde text-right"><NumberFormat numb={ligne.pu} /></td>
                    <td className="borde text-right"><NumberFormat numb={ligne.pu * ligne.quantite} /></td>
                </tr>)
            });
            return (<>
                <tr>
                    <td className="borde col-pink bolo700">Bon Nº {bon.numbon}</td>
                    <td className="borde col-pink bolo700" colSpan="2">{bon.articlecomposer.designation}</td>
                    <td className="borde col-pink bolo700">{bon.articlecomposer.reference}</td>
                    <td className="borde text-center col-pink bolo700">{bon.articlecomposer.unite}</td>
                    <td className="borde col-pink bolo700"><NumberFormat numb={bon.articlecomposer.pu} /></td>
                </tr>
                <tr style={{ backgroundColor: "#f8f9fa", fontWeight: "700" }}>
                    <td className="borde">RÉF</td>
                    <td className="borde" style={{ maxWidth: "500px", minWidth: "200px" }}>DÉSIGNATION</td>
                    <td className="borde text-center">UNITÉ</td>
                    <td className="borde text-center">QTÉ</td>
                    <td className="borde text-center">PRIX&nbsp;U.</td>
                    <td className="borde text-center" style={{ minWidth: "120px" }}>MONTANT&nbsp;HT</td>
                </tr>
                {renderLigne}

            </>)
        });
    } else {
        if (devis.modele === 1) {
            renderLigne = sortlignes.map((ligne) => {
                let pop = ligne.id;
                let op = '';
                if (devis.etat === 'valide') {
                    op = ligne.designation + '<p class="text-center bordz hide ' + ligne.id + 'li" ></p>';
                } else {
                    op = ligne.designation + '<p class="text-center bordz hide ' + ligne.id + 'li" >' +
                        '<a href=/crm/devis/ligne/' + devis.id + '/' + ligne.id + '/' + devis.chantier.id + '><i class="fa fa-edit text-success m-r-15" style="font-size: 16px" aria-hidden="true" title="Modifier cette ligne"></i></a>' +
                        '<a class="dup" id=' + pop + '><i class="fa fa-reply col-blue m-r-15" style="font-size: 16px" aria-hidden="true" title="Dupliquer cette ligne"></i></a>' +
                        '<a class="dele" id=' + pop + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a>' +
                        '</p>';
                }

                return (
                    <>
                        {ligne.groupe === null &&
                            <tr key={ligne.id.toString()} onMouseOver={() => {
                                shuper(ligne.id)
                            }} onMouseOut={() => {
                                shupere(ligne.id)
                            }}>
                                {devis.aaref === 'oui' &&
                                    <td className="text-center borde">
                                        <EditText
                                            type='text'
                                            name={ligne.id}
                                            defaultValue={ligne.reference}
                                            onSave={val => saveReference(val)}
                                        />
                                    </td>
                                }
                                <td className=" borde" dangerouslySetInnerHTML={{ __html: op }} />
                                {devis.zone === 'oui' &&
                                    <td className="text-center borde">
                                        <EditText
                                            type='text'
                                            name={ligne.id}
                                            defaultValue={ligne.zone}
                                            onSave={val => saveZone(val)}
                                        />
                                    </td>
                                }
                                <td className="text-center borde">
                                    <EditText
                                        type='text'
                                        name={ligne.id}
                                        defaultValue={ligne.unite}
                                        onSave={val => saveUnite(val)}
                                    />
                                </td>
                                <td className="text-center borde nowrape">
                                    <EditText
                                        type='number'
                                        name={ligne.id}
                                        defaultValue={formatNumber(ligne.quantite, 2, ' ')}
                                        onSave={val => saveQte(val)}
                                    />
                                </td>
                                <td className="text-right borde nowrape">
                                    <EditText
                                        type='number'
                                        name={ligne.id}
                                        defaultValue={formatNumber(ligne.pu, 2, ' ')}
                                        onSave={val => savePu(val)}
                                    />
                                </td>
                                {devis.aarem === 'oui' &&
                                    <td className="text-center borde nowrape">
                                        <EditText
                                            type='number'
                                            name={ligne.id}
                                            defaultValue={formatNumber(ligne.remise, 2, ' ')}
                                            onSave={val => saveRemise(val)}
                                        />
                                    </td>
                                }
                                {devis.aarem !== 'oui' &&
                                    <td className="text-right borde nowrape"><NumberFormat
                                        numb={(ligne.pu * ligne.quantite)} />
                                    </td>
                                }
                                {devis.aarem === 'oui' &&
                                    <td className="text-right borde nowrape"><NumberFormat
                                        numb={((ligne.pu * ligne.quantite) * ((100 - ligne.remise) / 100))} /></td>
                                }
                            </tr>
                        }
                    </>
                );
            });
        }
        if (devis.modele === 2) {
            renderLigne = sortlignes.map((ligne) => {
                let pop = ligne.id;
                let op = '';
                if (devis.etat === 'valide') {
                    op = ligne.designation + '<p class="text-center bordz hide ' + ligne.id + 'li" ></p>';
                } else {
                    op = ligne.designation + '<p class="text-center bordz hide ' + ligne.id + 'li" >' +
                        '<a href=/crm/devis/ligne/' + devis.id + '/' + ligne.id + '/' + devis.chantier.id + '><i class="fa fa-edit text-success m-r-15" style="font-size: 16px" aria-hidden="true" title="Modifier cette ligne"></i></a>' +
                        '<a class="dup" id=' + pop + '><i class="fa fa-reply col-blue m-r-15" style="font-size: 16px" aria-hidden="true" title="Dupliquer cette ligne"></i></a>' +
                        '<a class="dele" id=' + pop + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a>' +
                        '</p>';
                }

                return (
                    <>
                        {ligne.groupe === null &&
                            <tr key={ligne.id.toString()} onMouseOver={() => {
                                shuper(ligne.id)
                            }} onMouseOut={() => {
                                shupere(ligne.id)
                            }}>
                                {devis.aaref === 'oui' &&
                                    <td className="text-center borde">
                                        <EditText
                                            type='text'
                                            name={ligne.id}
                                            defaultValue={ligne.reference}
                                            onSave={val => saveReference(val)}
                                        />
                                    </td>
                                }
                                <td className="text-center borde">
                                    <EditText
                                        type='text'
                                        name={ligne.id}
                                        defaultValue={ligne.unite}
                                        onSave={val => saveUnite(val)}
                                    />
                                </td>
                                <td className=" borde" dangerouslySetInnerHTML={{ __html: op }} />
                                {devis.zone === 'oui' &&
                                    <td className="text-center borde">
                                        <EditText
                                            type='text'
                                            name={ligne.id}
                                            defaultValue={ligne.zone}
                                            onSave={val => saveZone(val)}
                                        />
                                    </td>
                                }
                                <td className="text-center borde nowrape">
                                    <EditText
                                        type='number'
                                        name={ligne.id}
                                        defaultValue={formatNumber(ligne.quantite, 2, ' ')}
                                        onSave={val => saveQte(val)}
                                    />
                                </td>
                                <td className="text-right borde nowrape">
                                    <EditText
                                        type='number'
                                        name={ligne.id}
                                        defaultValue={formatNumber(ligne.pu, 2, ' ')}
                                        onSave={val => savePu(val)}
                                    />
                                </td>
                                {devis.aarem === 'oui' &&
                                    <td className="text-center borde nowrape">
                                        <EditText
                                            type='number'
                                            name={ligne.id}
                                            defaultValue={formatNumber(ligne.remise, 2, ' ')}
                                            onSave={val => saveRemise(val)}
                                        />
                                    </td>
                                }
                                {devis.aarem !== 'oui' &&
                                    <td className="text-right borde nowrape"><NumberFormat
                                        numb={(ligne.pu * ligne.quantite)} />
                                    </td>
                                }
                                {devis.aarem === 'oui' &&
                                    <td className="text-right borde nowrape"><NumberFormat
                                        numb={((ligne.pu * ligne.quantite) * ((100 - ligne.remise) / 100))} /></td>
                                }
                            </tr>
                        }
                    </>
                );
            });
        }
        if (devis.modele === 3) {
            renderLigne = sortlignes.map((ligne) => {
                let pop = ligne.id;
                let op = '';
                if (devis.etat === 'valide') {
                    op = ligne.designation + '<p class="text-center bordz hide ' + ligne.id + 'li" ></p>';
                } else {
                    op = ligne.designation + '<p class="text-center bordz hide ' + ligne.id + 'li" >' +
                        '<a href=/crm/devis/ligne/' + devis.id + '/' + ligne.id + '/' + devis.chantier.id + '><i class="fa fa-edit text-success m-r-15" style="font-size: 16px" aria-hidden="true" title="Modifier cette ligne"></i></a>' +
                        '<a class="dup" id=' + pop + '><i class="fa fa-reply col-blue m-r-15" style="font-size: 16px" aria-hidden="true" title="Dupliquer cette ligne"></i></a>' +
                        '<a class="dele" id=' + pop + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a>' +
                        '</p>';
                }

                return (
                    <>
                        {ligne.groupe === null &&
                            <tr key={ligne.id.toString()} onMouseOver={() => {
                                shuper(ligne.id)
                            }} onMouseOut={() => {
                                shupere(ligne.id)
                            }}>
                                {devis.aaref === 'oui' &&
                                    <td className="text-center borde">
                                        <EditText
                                            type='text'
                                            name={ligne.id}
                                            defaultValue={ligne.reference}
                                            onSave={val => saveReference(val)}
                                        />
                                    </td>
                                }
                                <td className=" borde" dangerouslySetInnerHTML={{ __html: op }} />
                                {devis.zone === 'oui' &&
                                    <td className="text-center borde">
                                        <EditText
                                            type='text'
                                            name={ligne.id}
                                            defaultValue={ligne.zone}
                                            onSave={val => saveZone(val)}
                                        />
                                    </td>
                                }
                                <td className="text-center borde">
                                    <EditText
                                        type='text'
                                        name={ligne.id}
                                        defaultValue={ligne.unite}
                                        onSave={val => saveUnite(val)}
                                    />
                                </td>
                                <td className="text-center borde nowrape">
                                    <EditText
                                        type='number'
                                        name={ligne.id}
                                        defaultValue={formatNumber(ligne.quantite, 2, ' ')}
                                        onSave={val => saveQte(val)}
                                    />
                                </td>
                                <td className="text-right borde nowrape">
                                    <EditText
                                        type='number'
                                        name={ligne.id}
                                        defaultValue={formatNumber(ligne.pu, 2, ' ')}
                                        onSave={val => savePu(val)}
                                    />
                                </td>
                                {devis.aarem === 'oui' &&
                                    <td className="text-center borde nowrape">
                                        <EditText
                                            type='number'
                                            name={ligne.id}
                                            defaultValue={formatNumber(ligne.remise, 2, ' ')}
                                            onSave={val => saveRemise(val)}
                                        />
                                    </td>
                                }
                                {devis.aarem !== 'oui' &&
                                    <td className="text-right borde nowrape"><NumberFormat
                                        numb={(ligne.pu * ligne.quantite)} />
                                    </td>
                                }
                                {devis.aarem === 'oui' &&
                                    <td className="text-right borde nowrape"><NumberFormat
                                        numb={((ligne.pu * ligne.quantite) * ((100 - ligne.remise) / 100))} /></td>
                                }
                            </tr>
                        }
                    </>
                );
            });
        }
    }
    if (devis.modele === 1) {
        renderGroupe = sortgroupes.map((group) => {
            let st = 0;
            let popg = group.id;
            let opg = '';
            if (devis.etat === 'valide') {
                opg = group.groupe + '<p class="bordz hide ' + group.id + 'gr" ></p>';
            } else {
                opg = group.groupe + '<p class="bordz hide ' + group.id + 'gr" >' +
                    '<a href=/crm/devis/groupe/' + devis.id + '/' + group.id + '/' + devis.chantier.id + '><i class="fa fa-edit text-success m-r-15" style="font-size: 16px" aria-hidden="true" title="Modifier cette ligne"></i></a>' +
                    '<a class="delegr" id=' + popg + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a>' +
                    '</p>';
            }
            const renderLigneGroupe = sortlignes.map((ligne) => {
                let pop = ligne.id;
                let op = ' ';
                if (devis.etat === 'valide') {
                    op = ligne.designation + '<p class="text-center bordz hide ' + ligne.id + 'li" ></p>';
                } else {
                    op = ligne.designation + '<p class="text-center bordz hide ' + ligne.id + 'li" >' +
                        '<a href=/crm/devis/ligne/' + devis.id + '/' + ligne.id + '/' + devis.chantier.id + '><i class="fa fa-edit text-success m-r-15" style="font-size: 16px" aria-hidden="true" title="Modifier cette ligne"></i></a>' +
                        '<a class="dup" id=' + pop + '><i class="fa fa-reply col-blue m-r-15" style="font-size: 16px" aria-hidden="true" title="Dupliquer cette ligne"></i></a>' +
                        '<a class="dele" id=' + pop + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a>' +
                        '</p>';
                }

                if (ligne.groupe !== null) {
                    if (ligne.groupe.id === group.id) {
                        if (devis.aarem === 'oui') {
                            st = st + ((ligne.pu * ligne.quantite) * ((100 - ligne.remise) / 100));
                        } else {
                            st = st + (ligne.pu * ligne.quantite);
                        }
                    }
                }

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
                                            <td className="text-center borde">
                                                <EditText
                                                    type='text'
                                                    name={ligne.id}
                                                    defaultValue={ligne.reference}
                                                    onSave={val => saveReference(val)}
                                                />
                                            </td>
                                        }
                                        <td className=" borde" dangerouslySetInnerHTML={{ __html: op }} />
                                        {devis.zone === 'oui' &&
                                            <td className="text-center borde">
                                                <EditText
                                                    type='text'
                                                    name={ligne.id}
                                                    defaultValue={ligne.zone}
                                                    onSave={val => saveZone(val)}
                                                />
                                            </td>
                                        }
                                        <td className="text-center borde">
                                            <EditText
                                                type='text'
                                                name={ligne.id}
                                                defaultValue={ligne.unite}
                                                onSave={val => saveUnite(val)}
                                            />
                                        </td>
                                        <td className="text-center borde nowrape">
                                            <EditText
                                                type='number'
                                                name={ligne.id}
                                                defaultValue={formatNumber(ligne.quantite, 2, ' ')}
                                                onSave={val => saveQte(val)}
                                            />
                                        </td>
                                        <td className="text-right borde nowrape">
                                            <EditText
                                                type='number'
                                                name={ligne.id}
                                                defaultValue={formatNumber(ligne.pu, 2, ' ')}
                                                onSave={val => savePu(val)}
                                            />
                                        </td>
                                        {devis.aarem === 'oui' &&
                                            <td className="text-center borde nowrape">
                                                <EditText
                                                    type='number'
                                                    name={ligne.id}
                                                    defaultValue={formatNumber(ligne.remise, 2, ' ')}
                                                    onSave={val => saveRemise(val)}
                                                />
                                            </td>
                                        }
                                        {devis.aarem !== 'oui' &&
                                            <td className="text-right borde"><NumberFormat
                                                numb={(ligne.pu * ligne.quantite)} /></td>
                                        }
                                        {devis.aarem === 'oui' &&
                                            <td className="text-right borde"><NumberFormat
                                                numb={((ligne.pu * ligne.quantite) * ((100 - ligne.remise) / 100))} />
                                            </td>
                                        }
                                    </tr>
                                }
                            </>
                        }
                    </>
                );
            })
            return (
                <>
                    <tr className="togo" key={group.id.toString()}
                        onMouseOver={() => {
                            shuperg(group.id)
                        }}
                        onMouseOut={() => {
                            shupereg(group.id)
                        }}
                    >

                        {devis.zone === 'oui' && devis.aarem !== 'non' && <>
                            {devis.aaref === 'oui' &&
                                <td className="borde text-center"><b>{group.reference}</b></td>
                            }
                            <td colSpan="7" className="borde" dangerouslySetInnerHTML={{ __html: opg }} />
                        </>
                        }

                        {devis.zone === 'non' && devis.aarem === 'non' &&
                            <>
                                {devis.aaref === 'oui' &&
                                    <td className="borde text-center"><b>{group.reference}</b></td>
                                }
                                <td colSpan="5" className="borde" dangerouslySetInnerHTML={{ __html: opg }} />
                            </>
                        }

                        {devis.zone === 'oui' && devis.aarem === 'non' &&
                            <>
                                {devis.aaref === 'oui' &&
                                    <td className="borde text-center"><b>{group.reference}</b></td>
                                }
                                <td colSpan="6" className="borde" dangerouslySetInnerHTML={{ __html: opg }} />
                            </>
                        }

                        {devis.aarem !== 'non' && devis.zone === 'non' &&
                            <>
                                {devis.aaref === 'oui' &&
                                    <td className="borde text-center"><b>{group.reference}</b></td>
                                }
                                <td colSpan="6" className="borde" dangerouslySetInnerHTML={{ __html: opg }} />
                            </>
                        }
                    </tr>

                    {renderLigneGroupe}

                    <tr className="togo">
                        {devis.zone === 'oui' && devis.aarem !== 'non' &&
                            <>
                                {devis.aaref === 'oui' &&
                                    <td colSpan="8" className="borde text-right">
                                        <b>SOUS-TOTAL: <NumberFormat numb={st} /></b></td>
                                }
                                {devis.aaref !== 'oui' &&
                                    <td colSpan="7" className="borde text-right">
                                        <b>SOUS-TOTAL: <NumberFormat numb={st} /></b></td>
                                }
                            </>
                        }

                        {devis.zone === 'non' && devis.aarem === 'non' &&
                            <>
                                {devis.aaref === 'oui' &&
                                    <td colSpan="6" className="borde text-right">
                                        <b>SOUS-TOTAL: <NumberFormat numb={st} /></b></td>
                                }
                                {devis.aaref !== 'oui' &&
                                    <td colSpan="5" className="borde text-right">
                                        <b>SOUS-TOTAL: <NumberFormat numb={st} /></b></td>
                                }
                            </>
                        }

                        {devis.zone === 'oui' && devis.aarem === 'non' &&
                            <>
                                {devis.aaref === 'oui' &&
                                    <td colSpan="7" className="borde text-right">
                                        <b>SOUS-TOTAL: <NumberFormat numb={st} /></b></td>
                                }
                                {devis.aaref !== 'oui' &&
                                    <td colSpan="6" className="borde text-right">
                                        <b>SOUS-TOTAL: <NumberFormat numb={st} /></b></td>
                                }
                            </>
                        }

                        {devis.aarem !== 'non' && devis.zone === 'non' &&
                            <>
                                {devis.aaref === 'oui' &&
                                    <td colSpan="7" className="borde text-right">
                                        <b>SOUS-TOTAL: <NumberFormat numb={st} /></b></td>
                                }

                                {devis.aaref !== 'oui' &&

                                    <td colSpan="6" className="borde text-right">
                                        <b>SOUS-TOTAL: <NumberFormat numb={st} /></b></td>
                                }
                            </>
                        }
                    </tr>
                </>
            );
        });
    }
    if (devis.modele === 2) {
        renderGroupe = sortgroupes.map((group) => {
            let st = 0;
            let popg = group.id;
            let opg = '';
            if (devis.etat === 'valide') {
                opg = group.groupe + '<p class="bordz hide ' + group.id + 'gr" ></p>';
            } else {
                opg = group.groupe + '<p class="bordz hide ' + group.id + 'gr" >' +
                    '<a href=/crm/devis/groupe/' + devis.id + '/' + group.id + '/' + devis.chantier.id + '><i class="fa fa-edit text-success m-r-15" style="font-size: 16px" aria-hidden="true" title="Modifier cette ligne"></i></a>' +
                    '<a class="delegr" id=' + popg + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a>' +
                    '</p>';
            }
            const renderLigneGroupe = sortlignes.map((ligne) => {
                let pop = ligne.id;
                let op = ' ';
                if (devis.etat === 'valide') {
                    op = ligne.designation + '<p class="text-center bordz hide ' + ligne.id + 'li" ></p>';
                } else {
                    op = ligne.designation + '<p class="text-center bordz hide ' + ligne.id + 'li" >' +
                        '<a href=/crm/devis/ligne/' + devis.id + '/' + ligne.id + '/' + devis.chantier.id + '><i class="fa fa-edit text-success m-r-15" style="font-size: 16px" aria-hidden="true" title="Modifier cette ligne"></i></a>' +
                        '<a class="dup" id=' + pop + '><i class="fa fa-reply col-blue m-r-15" style="font-size: 16px" aria-hidden="true" title="Dupliquer cette ligne"></i></a>' +
                        '<a class="dele" id=' + pop + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a>' +
                        '</p>';
                }

                if (ligne.groupe !== null) {
                    if (ligne.groupe.id === group.id) {
                        if (devis.aarem === 'oui') {
                            st = st + ((ligne.pu * ligne.quantite) * ((100 - ligne.remise) / 100));
                        } else {
                            st = st + (ligne.pu * ligne.quantite);
                        }
                    }
                }

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
                                            <td className="text-center borde">
                                                <EditText
                                                    type='text'
                                                    name={ligne.id}
                                                    defaultValue={ligne.reference}
                                                    onSave={val => saveReference(val)}
                                                />
                                            </td>
                                        }
                                        <td className="text-center borde">
                                            <EditText
                                                type='text'
                                                name={ligne.id}
                                                defaultValue={ligne.unite}
                                                onSave={val => saveUnite(val)}
                                            />
                                        </td>
                                        <td className=" borde" dangerouslySetInnerHTML={{ __html: op }} />
                                        {devis.zone === 'oui' &&
                                            <td className="text-center borde">
                                                <EditText
                                                    type='text'
                                                    name={ligne.id}
                                                    defaultValue={ligne.zone}
                                                    onSave={val => saveZone(val)}
                                                />
                                            </td>
                                        }
                                        <td className="text-center borde nowrape">
                                            <EditText
                                                type='number'
                                                name={ligne.id}
                                                defaultValue={formatNumber(ligne.quantite, 2, ' ')}
                                                onSave={val => saveQte(val)}
                                            />
                                        </td>
                                        <td className="text-right borde nowrape">
                                            <EditText
                                                type='number'
                                                name={ligne.id}
                                                defaultValue={formatNumber(ligne.pu, 2, ' ')}
                                                onSave={val => savePu(val)}
                                            />
                                        </td>
                                        {devis.aarem === 'oui' &&
                                            <td className="text-center borde nowrape">
                                                <EditText
                                                    type='number'
                                                    name={ligne.id}
                                                    defaultValue={formatNumber(ligne.remise, 2, ' ')}
                                                    onSave={val => saveRemise(val)}
                                                />
                                            </td>
                                        }
                                        {devis.aarem !== 'oui' &&
                                            <td className="text-right borde"><NumberFormat
                                                numb={(ligne.pu * ligne.quantite)} /></td>
                                        }
                                        {devis.aarem === 'oui' &&
                                            <td className="text-right borde"><NumberFormat
                                                numb={((ligne.pu * ligne.quantite) * ((100 - ligne.remise) / 100))} />
                                            </td>
                                        }
                                    </tr>
                                }
                            </>
                        }
                    </>
                );
            })
            return (
                <>
                    <tr className="togo" key={group.id.toString()}
                        onMouseOver={() => {
                            shuperg(group.id)
                        }}
                        onMouseOut={() => {
                            shupereg(group.id)
                        }}
                    >
                        {devis.zone === 'oui' && devis.aarem !== 'non' && <>
                            {devis.aaref === 'oui' &&
                                <td className="borde text-center"><b>{group.reference}</b></td>
                            }
                            <td colSpan="7" className="borde" dangerouslySetInnerHTML={{ __html: opg }} />
                        </>
                        }

                        {devis.zone === 'non' && devis.aarem === 'non' &&
                            <>
                                {devis.aaref === 'oui' &&
                                    <td className="borde text-center"><b>{group.reference}</b></td>
                                }
                                <td colSpan="5" className="borde" dangerouslySetInnerHTML={{ __html: opg }} />
                            </>
                        }

                        {devis.zone === 'oui' && devis.aarem === 'non' &&
                            <>
                                {devis.aaref === 'oui' &&
                                    <td className="borde text-center"><b>{group.reference}</b></td>
                                }
                                <td colSpan="6" className="borde" dangerouslySetInnerHTML={{ __html: opg }} />
                            </>
                        }

                        {devis.aarem !== 'non' && devis.zone === 'non' &&
                            <>
                                {devis.aaref === 'oui' &&
                                    <td className="borde text-center"><b>{group.reference}</b></td>
                                }
                                <td colSpan="6" className="borde" dangerouslySetInnerHTML={{ __html: opg }} />
                            </>
                        }
                    </tr>

                    {renderLigneGroupe}

                    <tr className="togo">
                        {devis.zone === 'oui' && devis.aarem !== 'non' &&
                            <>
                                {devis.aaref === 'oui' &&
                                    <td colSpan="8" className="borde text-right">
                                        <b>SOUS-TOTAL: <NumberFormat numb={st} /></b></td>
                                }
                                {devis.aaref !== 'oui' &&
                                    <td colSpan="7" className="borde text-right">
                                        <b>SOUS-TOTAL: <NumberFormat numb={st} /></b></td>
                                }
                            </>
                        }

                        {devis.zone === 'non' && devis.aarem === 'non' &&
                            <>
                                {devis.aaref === 'oui' &&
                                    <td colSpan="6" className="borde text-right">
                                        <b>SOUS-TOTAL: <NumberFormat numb={st} /></b></td>
                                }
                                {devis.aaref !== 'oui' &&
                                    <td colSpan="5" className="borde text-right">
                                        <b>SOUS-TOTAL: <NumberFormat numb={st} /></b></td>
                                }
                            </>
                        }

                        {devis.zone === 'oui' && devis.aarem === 'non' &&
                            <>
                                {devis.aaref === 'oui' &&
                                    <td colSpan="7" className="borde text-right">
                                        <b>SOUS-TOTAL: <NumberFormat numb={st} /></b></td>
                                }
                                {devis.aaref !== 'oui' &&
                                    <td colSpan="6" className="borde text-right">
                                        <b>SOUS-TOTAL: <NumberFormat numb={st} /></b></td>
                                }
                            </>
                        }

                        {devis.aarem !== 'non' && devis.zone === 'non' &&
                            <>
                                {devis.aaref === 'oui' &&
                                    <td colSpan="7" className="borde text-right">
                                        <b>SOUS-TOTAL: <NumberFormat numb={st} /></b></td>
                                }

                                {devis.aaref !== 'oui' &&

                                    <td colSpan="6" className="borde text-right">
                                        <b>SOUS-TOTAL: <NumberFormat numb={st} /></b></td>
                                }
                            </>
                        }
                    </tr>
                </>
            );
        });
    }
    if (devis.modele === 3) {
        renderGroupe = sortgroupes.map((group) => {
            let st = 0;
            let popg = group.id;
            let opg = '';
            if (devis.etat === 'valide') {
                opg = group.groupe + '<p class="bordz hide ' + group.id + 'gr" ></p>';
            } else {
                opg = group.groupe + '<p class="bordz hide ' + group.id + 'gr" >' +
                    '<a href=/crm/devis/groupe/' + devis.id + '/' + group.id + '/' + devis.chantier.id + '><i class="fa fa-edit text-success m-r-15" style="font-size: 16px" aria-hidden="true" title="Modifier cette ligne"></i></a>' +
                    '<a class="delegr" id=' + popg + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a>' +
                    '</p>';
            }
            const renderLigneGroupe = sortlignes.map((ligne) => {
                let pop = ligne.id;
                let op = ' ';
                if (devis.etat === 'valide') {
                    op = ligne.designation + '<p class="text-center bordz hide ' + ligne.id + 'li" ></p>';
                } else {
                    op = ligne.designation + '<p class="text-center bordz hide ' + ligne.id + 'li" >' +
                        '<a href=/crm/devis/ligne/' + devis.id + '/' + ligne.id + '/' + devis.chantier.id + '><i class="fa fa-edit text-success m-r-15" style="font-size: 16px" aria-hidden="true" title="Modifier cette ligne"></i></a>' +
                        '<a class="dup" id=' + pop + '><i class="fa fa-reply col-blue m-r-15" style="font-size: 16px" aria-hidden="true" title="Dupliquer cette ligne"></i></a>' +
                        '<a class="dele" id=' + pop + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a>' +
                        '</p>';
                }

                if (ligne.groupe !== null) {
                    if (ligne.groupe.id === group.id) {
                        if (devis.aarem === 'oui') {
                            st = st + ((ligne.pu * ligne.quantite) * ((100 - ligne.remise) / 100));
                        } else {
                            st = st + (ligne.pu * ligne.quantite);
                        }
                    }
                }

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
                                            <td className="text-center borde">
                                                <EditText
                                                    type='text'
                                                    name={ligne.id}
                                                    defaultValue={ligne.reference}
                                                    onSave={val => saveReference(val)}
                                                />
                                            </td>
                                        }
                                        <td className=" borde" dangerouslySetInnerHTML={{ __html: op }} />
                                        {devis.zone === 'oui' &&
                                            <td className="text-center borde">
                                                <EditText
                                                    type='text'
                                                    name={ligne.id}
                                                    defaultValue={ligne.zone}
                                                    onSave={val => saveZone(val)}
                                                />
                                            </td>
                                        }
                                        <td className="text-center borde">
                                            <EditText
                                                type='text'
                                                name={ligne.id}
                                                defaultValue={ligne.unite}
                                                onSave={val => saveUnite(val)}
                                            />
                                        </td>
                                        <td className="text-center borde nowrape">
                                            <EditText
                                                type='number'
                                                name={ligne.id}
                                                defaultValue={formatNumber(ligne.quantite, 2, ' ')}
                                                onSave={val => saveQte(val)}
                                            />
                                        </td>
                                        <td className="text-right borde nowrape">
                                            <EditText
                                                type='number'
                                                name={ligne.id}
                                                defaultValue={formatNumber(ligne.pu, 2, ' ')}
                                                onSave={val => savePu(val)}
                                            />
                                        </td>
                                        {devis.aarem === 'oui' &&
                                            <td className="text-center borde nowrape">
                                                <EditText
                                                    type='number'
                                                    name={ligne.id}
                                                    defaultValue={formatNumber(ligne.remise, 2, ' ')}
                                                    onSave={val => saveRemise(val)}
                                                />
                                            </td>
                                        }
                                        {devis.aarem !== 'oui' &&
                                            <td className="text-right borde"><NumberFormat
                                                numb={(ligne.pu * ligne.quantite)} /></td>
                                        }
                                        {devis.aarem === 'oui' &&
                                            <td className="text-right borde"><NumberFormat
                                                numb={((ligne.pu * ligne.quantite) * ((100 - ligne.remise) / 100))} />
                                            </td>
                                        }
                                    </tr>
                                }
                            </>
                        }
                    </>
                );
            })
            return (
                <>
                    <tr className="togo" key={group.id.toString()}
                        onMouseOver={() => {
                            shuperg(group.id)
                        }}
                        onMouseOut={() => {
                            shupereg(group.id)
                        }}
                    >

                        {devis.zone === 'oui' && devis.aarem !== 'non' && <>
                            {devis.aaref === 'oui' &&
                                <td className="borde text-center"><b>{group.reference}</b></td>
                            }
                            <td colSpan="7" className="borde" dangerouslySetInnerHTML={{ __html: opg }} />
                        </>
                        }

                        {devis.zone === 'non' && devis.aarem === 'non' &&
                            <>
                                {devis.aaref === 'oui' &&
                                    <td className="borde text-center"><b>{group.reference}</b></td>
                                }
                                <td colSpan="5" className="borde" dangerouslySetInnerHTML={{ __html: opg }} />
                            </>
                        }

                        {devis.zone === 'oui' && devis.aarem === 'non' &&
                            <>
                                {devis.aaref === 'oui' &&
                                    <td className="borde text-center"><b>{group.reference}</b></td>
                                }
                                <td colSpan="6" className="borde" dangerouslySetInnerHTML={{ __html: opg }} />
                            </>
                        }

                        {devis.aarem !== 'non' && devis.zone === 'non' &&
                            <>
                                {devis.aaref === 'oui' &&
                                    <td className="borde text-center"><b>{group.reference}</b></td>
                                }
                                <td colSpan="6" className="borde" dangerouslySetInnerHTML={{ __html: opg }} />
                            </>
                        }
                    </tr>

                    {renderLigneGroupe}

                    <tr className="togo">
                        {devis.zone === 'oui' && devis.aarem !== 'non' &&
                            <>
                                {devis.aaref === 'oui' &&
                                    <td colSpan="8" className="borde text-right">
                                        <b>SOUS-TOTAL: <NumberFormat numb={st} /></b></td>
                                }
                                {devis.aaref !== 'oui' &&
                                    <td colSpan="7" className="borde text-right">
                                        <b>SOUS-TOTAL: <NumberFormat numb={st} /></b></td>
                                }
                            </>
                        }

                        {devis.zone === 'non' && devis.aarem === 'non' &&
                            <>
                                {devis.aaref === 'oui' &&
                                    <td colSpan="6" className="borde text-right">
                                        <b>SOUS-TOTAL: <NumberFormat numb={st} /></b></td>
                                }
                                {devis.aaref !== 'oui' &&
                                    <td colSpan="5" className="borde text-right">
                                        <b>SOUS-TOTAL: <NumberFormat numb={st} /></b></td>
                                }
                            </>
                        }

                        {devis.zone === 'oui' && devis.aarem === 'non' &&
                            <>
                                {devis.aaref === 'oui' &&
                                    <td colSpan="7" className="borde text-right">
                                        <b>SOUS-TOTAL: <NumberFormat numb={st} /></b></td>
                                }
                                {devis.aaref !== 'oui' &&
                                    <td colSpan="6" className="borde text-right">
                                        <b>SOUS-TOTAL: <NumberFormat numb={st} /></b></td>
                                }
                            </>
                        }

                        {devis.aarem !== 'non' && devis.zone === 'non' &&
                            <>
                                {devis.aaref === 'oui' &&
                                    <td colSpan="7" className="borde text-right">
                                        <b>SOUS-TOTAL: <NumberFormat numb={st} /></b></td>
                                }

                                {devis.aaref !== 'oui' &&

                                    <td colSpan="6" className="borde text-right">
                                        <b>SOUS-TOTAL: <NumberFormat numb={st} /></b></td>
                                }
                            </>
                        }
                    </tr>
                </>
            );
        });
    }

    $('#facselect').off().on("change", async function () {
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
    $('#facselectez').off().on("change", async function () {
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

    const fetchQuote = async () => {
        const dde = JSON.parse($('#jsondevis').val());
        const dede = JSON.parse($('#jsondede').val());
        const forme = JSON.parse($('#jsonforme').val());
        const formes = JSON.parse($('#jsonformes').val());
        const usaa = JSON.parse($('#jsonusers').val());
        setDevis(dde);
        setDede(dede);
        setLignes(dde.lignes);
        setGroupes(dde.groupe);
        setLoading(true);
        setforme(forme);
        setformes(formes);
        setUsa(usaa);
        setIdmaster(JSON.parse($('#idmaster').val()));
    };
    useEffect(() => {
        fetchQuote();
    }, []);

    if (forme.info === null) {
        $('#modalMise').modal('show');
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

    console.log(idmaster);

    return (
        <>
            {loading === true &&
                <>
                    <div className="modal fade right" id="modalList" tabIndex="-1" role="dialog"
                        aria-labelledby="myModalLabel"
                        aria-hidden="true">
                        <div className="modal-dialog modal-full-height modal-right" role="document">
                            <div className="modal-content">
                                <div className="modal-header bg-pink text-white">
                                    <h4 className="modal-title text-white" id="defaultModalLabel">MODIFIER LES
                                        LIGNES</h4>
                                </div>
                                <div className="modal-body m-t-10 bien">
                                    <div className="body">
                                        <table id="borde" style={{ width: "100%", marginTo: "-20px" }}>
                                            <thead>
                                                <tr className="bg-pri text-white"
                                                    style={{ fontSize: "12px" }}>
                                                    {devis.aaref === 'oui' &&
                                                        <th className="borde text-center">RÉF</th>
                                                    }
                                                    <th style={{ textAlign: "left", padding: "10px" }}>
                                                        DÉSIGNATION
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {renderGroupeMobile}
                                                {renderLigneMobile}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div className="row clearfix" style={{ padding: "0.1cm" }}>
                        <div className="col-sm-12 text-center">
                            {devis.type !== "cps" &&
                                <>
                                    <h3 className="font-bold m-t--10 col-purple"><a
                                        href={`/crm/client/${devis.client.id}`}>{devis.client.nomclient.toUpperCase()}</a></h3>
                                    <h3 className="font-bold m-t--10 col-pink"><a
                                        href={`/crm/chantier/${devis.chantier.id}`}>{devis.chantier.nomchantier.toUpperCase()}</a>
                                    </h3>
                                </>
                            }
                            {devis.type !== "esti" && devis.type !== "vte" &&
                                <h3 className="font-bold m-t--10 col-pink">DEVIS N°: {devis.iddevis}</h3>
                            }
                            {devis.type === "esti" &&
                                <>
                                    <h3 className="font-bold m-t--10 col-pink">DEVIS ESTIMATIF N°: {devis.iddevis}</h3>
                                    <h3 className="font-bold m-t--10 pri"><a
                                        href={`/crm/devis/${dede.id}/${dede.chantier.id}`}>SUR DEVIS N°: {dede.iddevis}</a></h3>
                                </>
                            }
                            {devis.type === "vte" &&
                                <>
                                    <h3 className="font-bold m-t--10 col-pink">DEVIS DE VENTE N°: {devis.iddevis}</h3>
                                    <h3 className="font-bold m-t--10 pri"><a
                                        href={`/crm/devis/${dede.id}/${dede.chantier.id}`}>SUR DEVIS N°: {dede.iddevis}</a></h3>
                                </>
                            }
                            {devis.type === "cps" &&
                                <h3 className="font-bold m-t--10 col-pink">DEVIS DES ARTICLES COMPOSÉS</h3>
                            }

                            {devis.etat === "valide" && devis.type !== "cps" &&
                                <h4 className="font-bold col-black">CE DEVIS EST VALIDÉ</h4>
                            }

                            {devis.corbeille !== null && devis.type !== "cps" &&
                                <div className="text-center">
                                    <h4 className="font-bold col-black">CE DEVIS EST SUPPRIMÉ</h4>
                                    <button className="btn bg-deep-orange text-white m-r-5"
                                        onClick={restaureDevis}><i
                                            className="fa fa-redo" /> RESTAURER
                                    </button>
                                </div>
                            }
                        </div>
                    </div>

                    {deviceType !== "mobile" &&
                        <>
                            {devis.corbeille === null && devis.type !== "cps" &&
                                <>
                                    <div className="row clearfix" style={{ padding: "0.1cm" }}>
                                        <div className="col-sm-12 text-center">
                                            <div className="btn-group">
                                                <a href={`/crm/chantier/${devis.chantier.id}`}
                                                    className="btn bg-purple  align-left m-b-10 text-white waves-effect ">ACCÉDER AU CHANTIER</a>
                                            </div>
                                            <div className="col-sm-12 text-center">
                                                {devis.type !== "esti" &&
                                                    <button type="button"
                                                        className="btn bg-blue align-left m-b-10 text-white waves-effect"
                                                        data-toggle="modal" data-target="#modalDevis">CRÉER UN NOUVEAU
                                                        DEVIS
                                                    </button>
                                                }
                                                <button type="button"
                                                    className="btn bg-orange align-left m-b-10 text-white waves-effect"
                                                    data-toggle="modal" data-target="#modalDevis">CRÉER UN BON
                                                    FOURNISSEUR
                                                </button>
                                                <button type="button"
                                                    className="btn bg-pri align-left m-b-10 text-white waves-effect"
                                                    data-toggle="modal" data-target="#modalDevis">CRÉER UN BON
                                                    PRESTATAIRE
                                                </button>
                                            </div>
                                            <br />
                                            {devis.etat === "save" &&
                                                <>
                                                    <div className="btn-group">
                                                        <button type="button"
                                                            className="btn btn-labeled bg-pri text-white btn-sm"
                                                            data-toggle="modal" data-target="#modalGroup">
                                                            + AJOUTER DES LOTS
                                                        </button>

                                                        <button type="button"
                                                            className="btn btn-labeled bg-blue text-white btn-sm"
                                                            data-toggle="modal" data-target="#modalChoisir">
                                                            CHOISIR UN BIEN / SERVICE
                                                        </button>

                                                        {!$('#idligne').val() &&
                                                            <button type="button"
                                                                className="btn btn-labeled bg-pri text-white btn-sm"
                                                                data-toggle="modal" data-target="#modalLigne">
                                                                + AJOUTER UNE LIGNE
                                                            </button>}

                                                        {$('#idligne').val() &&
                                                            <button type="button"
                                                                className="btn btn-labeled bg-pink text-white btn-sm"
                                                                data-toggle="modal" data-target="#modalLigne">
                                                                - DÉSIGNATION
                                                            </button>}

                                                    </div>
                                                    <br />
                                                    <div className="btn-group">
                                                        {devis.type !== "esti" &&
                                                            <>
                                                                <button type="button"
                                                                    className="btn btn-labeled bg-pri text-white btn-sm"
                                                                    data-toggle="modal" data-target="#modalBase">
                                                                    + BASE TVA
                                                                </button>
                                                                <button type="button"
                                                                    className="btn btn-labeled bg-blue text-white btn-sm"
                                                                    data-toggle="modal" data-target="#modalDeplacer">
                                                                    + DÉPLACER VERS
                                                                </button>

                                                                <button type="button"
                                                                    className="btn btn-labeled bg-pri text-white btn-sm"
                                                                    onClick={dupliquerDevis}>
                                                                    + DUPLIQUER
                                                                </button>

                                                            </>
                                                        }
                                                        <button type="button"
                                                            className="btn btn-labeled bg-blue text-white btn-sm"
                                                            data-toggle="modal" data-target="#modalRemise">
                                                            + REMISE SUR TOTAL HT
                                                        </button>

                                                        <button type="button"
                                                            className="btn btn-labeled bg-green btn-sm text-white"
                                                            data-toggle="modal"
                                                            data-target="#modalInfo">- INFORMATIONS
                                                        </button>
                                                    </div>
                                                    <br />
                                                </>
                                            }

                                            <div className="btn-group ">
                                                {devis.type !== "esti" &&
                                                    <>
                                                        {devis.etat === "valide" &&
                                                            <a className="btn bg-pink text-white" onClick={devalideDevis}><i
                                                                className="fa fa-check-circle" /> DÉVALIDER
                                                            </a>
                                                        }
                                                        {devis.etat !== "valide" &&
                                                            <button className="btn bg-blue text-white"
                                                                onClick={valideDevis}>
                                                                <i className="fa fa-check-circle" /> VALIDER
                                                            </button>
                                                        }
                                                    </>
                                                }
                                                <a href={`/crm/doc/attache/${devis.id}/devis/non`}
                                                    className="btn bg-deep-orange text-white"><i
                                                        className="fa fa-envelope" /> MAIL</a>

                                                <button className="btn bg-pri text-white"
                                                    onClick={pdfDevis}><i
                                                        className="fas fa-file-pdf" /> PDF
                                                </button>

                                                <ReactHTMLTableToExcel
                                                    id="test-table-xls-button"
                                                    className="btn bg-green text-white"
                                                    table="dev2excel"
                                                    filename={`Devis N° ${devis.iddevis}`}
                                                    sheet="tablexls"
                                                    buttonText="EXCEL" />
                                                {devis.type !== "esti" &&
                                                    <>
                                                        {devis.etat !== "valide" &&
                                                            <button className="btn bg-pink text-white"
                                                                onClick={delDevis}><i
                                                                    className="fa fa-trash" /> SUPPRIMER
                                                            </button>
                                                        }</>
                                                }
                                            </div>
                                            <br />
                                            <div className="btn-group">
                                                <button className="btn bg-pri text-white"
                                                    onClick={handlePrinte}><i
                                                        className="fa fa-print" /> IMPRESSION SANS ENTÊTE
                                                </button>
                                                <button className="btn bg-blue text-white"
                                                    onClick={handlePrint}><i
                                                        className="fa fa-print" /> IMPRESSION AVEC ENTÊTE
                                                </button>

                                                {devis.type !== "esti" &&
                                                    <button type="button"
                                                        className="btn bg-pink align-left m-b-10 text-white waves-effect"
                                                        data-toggle="modal"
                                                        data-target="#modalTechnique">OPÉRATIONS LIÉES
                                                    </button>
                                                }
                                            </div>
                                            <br />
                                            {devis.etat === "valide" &&
                                                <>
                                                    <div className="btn-group">
                                                        <>
                                                            <button type="button"
                                                                    className="btn bg-blue align-left m-b-10 text-white waves-effect"
                                                                    data-toggle="modal"
                                                                    data-target="#modalDecompte">CRÉER
                                                                UN DÉCOMPTE
                                                            </button>
                                                            <button type="button"
                                                                    className="btn bg-purple align-left m-b-10 text-white waves-effect"
                                                                    data-toggle="modal"
                                                                    data-target="#modalFacture">CRÉER
                                                                UNE FACTURE
                                                            </button>
                                                            <button className="btn bg-teal text-white"
                                                                    onClick={convertirPlanning}> CONVERTIR EN PLANNING
                                                            </button>
                                                        </>
                                                    </div>
                                                    <br/>
                                                </>
                                            }

                                            <div className="btn-group">
                                            <button type="button"
                                                        className="btn bg-primary text-white"
                                                        data-toggle="modal"
                                                        data-target="#modalMise">MISE EN FORME DU DEVIS
                                                </button>
                                                {formes.map((forme, index) => {
                                                    return (
                                                        <div className="btn-group">
                                                            {forme.used === "used" &&
                                                                <button type="button" onClick={() => {
                                                                    shasha(forme.id)
                                                                }}
                                                                    className="btn bg-yellow bolo600  align-left m-b-10 col-black waves-effect">{forme.intituler}</button>
                                                            }
                                                            {forme.used !== "used" &&
                                                                <button type="button" onClick={() => {
                                                                    shasha(forme.id)
                                                                }}
                                                                    className="btn bolo600  align-left m-b-10 col-black waves-effect">{forme.intituler}</button>
                                                            }
                                                        </div>
                                                    );
                                                })}
                                            </div>
                                            <br />
                                            {devis.type === null && devis.etat === "save" &&
                                                <button type="button" className="btn bg-blue-grey  bolo700  align-left m-b-10 text-white waves-effect m-r-5" onClick={evaluerDevis} style={{ padding: "20px", fontSize: "18px" }}>GÉNÉRER LES LOTS</button>
                                            }

                                        </div>
                                    </div>
                                </>
                            }
                            {devis.type === "cps" &&
                                <>
                                    <div className="row clearfix" style={{ padding: "0.1cm" }}>
                                        <div className="col-sm-12 text-center">
                                            <div className="btn-group ">
                                                <a href={`/crm/doc/attache/${devis.id}/devis/non`}
                                                    className="btn bg-deep-orange text-white"><i
                                                        className="fa fa-envelope" /> MAIL</a>

                                                <button className="btn bg-pri text-white"
                                                    onClick={pdfDevis}><i
                                                        className="fas fa-file-pdf" /> PDF
                                                </button>

                                                <ReactHTMLTableToExcel
                                                    id="test-table-xls-button"
                                                    className="btn bg-green text-white"
                                                    table="dev2excel"
                                                    filename={`Devis N° ${devis.iddevis}`}
                                                    sheet="tablexls"
                                                    buttonText="EXCEL" />
                                                <button type="button"
                                                    className="btn bg-primary text-white"
                                                    data-toggle="modal"
                                                    data-target="#modalMise">MISE EN FORME DU DEVIS
                                                </button>
                                            </div>
                                            <br />
                                            <div className="btn-group">
                                                <button className="btn bg-pri text-white"
                                                    onClick={handlePrinte}><i
                                                        className="fa fa-print" /> IMPRESSION SANS ENTÊTE
                                                </button>
                                                <button className="btn bg-blue text-white"
                                                    onClick={handlePrint}><i
                                                        className="fa fa-print" /> IMPRESSION AVEC ENTÊTE
                                                </button>
                                                {formes.map((forme, index) => {
                                                    return (
                                                        <div className="btn-group">
                                                            {forme.used === "used" &&
                                                                <button type="button" onClick={() => {
                                                                    shasha(forme.id)
                                                                }}
                                                                    className="btn bg-yellow bolo600  align-left m-b-10 col-black waves-effect">{forme.intituler}</button>
                                                            }
                                                            {forme.used !== "used" &&
                                                                <button type="button" onClick={() => {
                                                                    shasha(forme.id)
                                                                }}
                                                                    className="btn bolo600  align-left m-b-10 col-black waves-effect">{forme.intituler}</button>
                                                            }
                                                        </div>
                                                    );
                                                })}
                                            </div>
                                        </div>
                                    </div>
                                </>
                            }
                            <table id="dev2excel">
                                <tbody>
                                    <tr>
                                        <td>
                                            <PrintDevis devis={devis} lignes={lignes} groupes={groupes} ref={componentRef}
                                                renderLigne={renderLigne} renderGroupe={renderGroupe} renderBons={renderBons}
                                                forme={forme} usa={usa} />

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </>
                    }


                    {deviceType === "mobile" &&
                        <>
                            <p style={{ textAlign: "center" }}>
                                <div className="btn-group">
                                    <button type="button" className="btn bg-pink dropdown-toggle m-r-5"
                                        data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="true">
                                        <i className="fa fa-cog" /> FAIRE <span className="caret" />
                                    </button>

                                    <div className="dropdown-menu p-l-10 p-r-10"
                                        style={{ backgroundColor: "#e9e9e9", left: "50px", position: "absolute" }}>
                                        <a href={`/crm/chantier/${devis.chantier.id}`}
                                            className="btn bg-purple btn-block btn-labeled col-white">ACCÉDER AU
                                            CHANTIER</a>

                                        <button type="button"
                                            className="btn btn-block btn-labeled  bg-blue col-white"
                                            data-toggle="modal" data-target="#modalDevis">CRÉER UN NOUVEAU DEVIS
                                        </button>
                                        <li role="separator" className="divider"></li>
                                        {devis.etat === "save" &&
                                            <>
                                                <button type="button"
                                                    className="btn btn-block btn-labeled bg-pri col-white"
                                                    data-toggle="modal" data-target="#modalGroup">
                                                    AJOUTER UN GROUPE DE LIGNES
                                                </button>
                                                <button type="button"
                                                    className="btn btn-block btn-labeled bg-pri col-white"
                                                    data-toggle="modal" data-target="#modalChoisir">
                                                    CHOISIR UN BIEN / SERVICE
                                                </button>
                                                {!$('#idligne').val() &&
                                                    <button type="button"
                                                        className="btn btn-block btn-labeled bg-pri col-white"
                                                        data-toggle="modal" data-target="#modalLigne">
                                                        AJOUTER UNE LIGNE
                                                    </button>}
                                                {$('#idligne').val() &&
                                                    <button type="button"
                                                        className="btn btn-block btn-labeled bg-pri col-white"
                                                        data-toggle="modal" data-target="#modalLigne">
                                                        MODIFIER UNE LIGNE
                                                    </button>}
                                                <br />
                                                <button type="button"
                                                    className="btn btn-block btn-labeled bg-pri col-white"
                                                    data-toggle="modal" data-target="#modalBase">
                                                    BASE TVA
                                                </button>
                                                <button type="button"
                                                    className="btn btn-block btn-labeled bg-pri col-white"
                                                    data-toggle="modal" data-target="#modalRemise">
                                                    REMISE SUR TOTAL HT
                                                </button>
                                                <button type="button"
                                                    className="btn btn-block btn-labeled bg-pri col-white"
                                                    data-toggle="modal" data-target="#modalDeplacer">
                                                    DÉPLACER VERS UN AUTRE CHANTIER
                                                </button>
                                                <button type="button"
                                                    className="btn btn-block btn-labeled bg-pri col-white"
                                                    onClick={dupliquerDevis}>
                                                    DUPLIQUER CE DEVIS
                                                </button>
                                                <br />
                                                <button type="button"
                                                    className="btn btn-block btn-labeled bg-pink col-white"
                                                    data-toggle="modal"
                                                    data-target="#modalInfo">MODIFIER LES INFORMATIONS
                                                </button>
                                                <button type="button"
                                                    className="btn btn-block btn-labeled bg-green col-white"
                                                    data-toggle="modal"
                                                    data-target="#modalMise">MISE EN FORME DU DEVIS
                                                </button>
                                                <br />
                                            </>
                                        }
                                    </div>
                                </div>
                                {devis.etat === "valide" &&
                                    <a className="btn bg-pink text-white m-r-5" onClick={devalideDevis}><i
                                        className="fa fa-check-circle" /> DÉVALIDER
                                    </a>
                                }
                                {devis.etat !== "valide" &&
                                    <button className="btn bg-blue text-white m-r-5" onClick={valideDevis}><i
                                        className="fa fa-check-circle" /> VALIDER
                                    </button>
                                }

                                {devis.etat !== "valide" &&
                                    <button className="btn bg-pink text-white m-r-5" onClick={delDevis}><i
                                        className="fa fa-trash" /> SUPPRIMER
                                    </button>
                                }

                                <a href={`/crm/doc/attache/${devis.id}/devis/non`}
                                    className="btn bg-deep-orange text-white m-r-5"><i
                                        className="fa fa-envelope" /> MAIL</a>
                                <button className="btn bg-pri text-white"
                                    onClick={pdfDevis}><i
                                        className="fas fa-file-pdf" /> PDF
                                </button>
                                <ReactHTMLTableToExcel
                                    id="test-table-xls-button"
                                    className="btn bg-green text-white m-r-5"
                                    table="dev2excel"
                                    filename={`Devis N° ${devis.iddevis}`}
                                    sheet="tablexls"
                                    buttonText="EXCEL" />
                            </p>
                            <br />

                            <div style={{ backgroundColor: "#FFF" }}>
                                {devis.modele !== 2 &&
                                    <>
                                        <table style={{ float: "right" }}>
                                            <tr>
                                                <td style={{ border: "none", textAlign: "center" }}>
                                                    <b>{devis.chantier.client.nomclient}</b><br />
                                                    {devis.chantier.client.contribuable}<br />
                                                    {devis.chantier.client.adresse}<br />
                                                    {devis.chantier.client.mail}<br />
                                                </td>
                                            </tr>
                                        </table>
                                        <table style={{ width: "100%" }}>
                                            <tr>
                                                <td className="bordz"><b><u>DATE:</u></b> {devdate}</td>
                                            </tr>
                                            <tr>
                                                <td className="bordz"><b><u>N° DEVIS:</u></b> {devis.iddevis}</td>
                                            </tr>
                                            <tr>
                                                <td className="bordz"><b><u>CONTACT CLIENT: </u></b> <br />
                                                    {devis.contact != null &&
                                                        <p style={{ paddingLeft: "20px" }}>
                                                            {devis.contact.contact} <br />
                                                            {devis.contact.mail}
                                                        </p>
                                                    }
                                                </td>
                                            </tr>
                                            <tr>
                                                <td className="bordz" colSpan="2"><b><u>VALIDITÉ:</u></b>
                                                    <span style={{ marginLeft: "10px" }}>
                                                        {devis.validit != null &&
                                                            <>{devis.validit} </>
                                                        }
                                                    </span>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td className="bordz">
                                                    <b><u>RÉFÉRENCE:</u></b><br />
                                                    <span dangerouslySetInnerHTML={{ __html: devis.devreference }} />
                                                </td>
                                            </tr>

                                        </table>
                                    </>


                                }
                                {devis.modele === 2 &&
                                    <table cellSpacing="0" style={{ width: "100%" }}>
                                        <tr style={{ backgroundColor: "#f8f9fa", fontWeight: "700" }}>
                                            <td colSpan="2" className="borde col-pink">DOSSIER QUANTITATIF ET TARIFAIRE
                                                - OFFRE
                                                DE PRIX
                                            </td>
                                        </tr>
                                        <tr style={{ backgroundColor: "#f8f9fa", fontWeight: "700" }}>
                                            <td className="borde col-blue"> DATE</td>
                                            <td className="borde">{devdate}</td>
                                        </tr>
                                        <tr style={{ backgroundColor: "#f8f9fa", fontWeight: "700" }}>
                                            <td className="borde col-blue"> N° DEVIS</td>
                                            <td className="borde"> {devis.iddevis}</td>
                                        </tr>
                                        <tr style={{ backgroundColor: "#f8f9fa", fontWeight: "700" }}>
                                            <td className="borde col-blue">CLIENT</td>
                                            <td className="borde">
                                                <b> {devis.chantier.client.nomclient} </b>
                                                {devis.chantier.client.adresse != null &&
                                                    <> <br /> {devis.chantier.client.adresse} </>
                                                }
                                                <br />
                                                {devis.chantier.client.code != null &&
                                                    <> <b> N° CLIENT: </b> {devis.chantier.client.code
                                                    } </>
                                                }
                                            </td>
                                        </tr>
                                        <tr style={{ backgroundColor: "#f8f9fa", fontWeight: "700" }}>
                                            <td className="borde col-blue"> CONTACT CLIENT</td>
                                            <td className="borde">
                                                {devis.contact != null &&
                                                    <>
                                                        {devis.contact.contact} <br />
                                                        {devis.contact.mail}
                                                    </>
                                                }
                                            </td>
                                        </tr>
                                        <tr style={{ backgroundColor: "#f8f9fa", fontWeight: "700" }}>
                                            <td className="borde col-blue">VALIDITÉ</td>
                                            <td className="borde">
                                                {devis.validit != null &&
                                                    <><Moment format="DD/MM/YY"> {devis.validit} </Moment></>
                                                }
                                            </td>
                                        </tr>
                                        <tr style={{ backgroundColor: "#f8f9fa", fontWeight: "700" }}>
                                            <td colSpan="2"
                                                className="borde">
                                                <span className="col-blue" style={{
                                                    textDecoration: "underline",
                                                    lineHeight: "1.2",
                                                    fontWeight: "bold"
                                                }}> RÉFÉRENCE </span><br />
                                                <span dangerouslySetInnerHTML={{ __html: devis.devreference }} /></td>
                                        </tr>
                                    </table>
                                }
                            </div>

                            <table id="borde" style={{ width: "100%", backgroundColor: "#FFF", marginTop: "5px" }}>
                                <tr className="bg-pri text-white"
                                    style={{ fontSize: "12px" }}>
                                    {devis.aaref === 'oui' &&
                                        <th className="borde text-center">RÉF</th>
                                    }
                                    <th style={{ textAlign: "left", padding: "10px" }}>
                                        DÉSIGNATION
                                    </th>
                                </tr>

                                {renderGroupeMobile}
                                {renderLigneMobile}

                                {devis.aarem !== 'non' &&
                                    <tr>
                                        <td colSpan="2" className="text-right"><b>REMISE : </b> <NumberFormat
                                            numb={devis.vremise} /></td>
                                    </tr>
                                }

                                {devis.abasetva === 'oui' &&
                                    <tr>
                                        <td colSpan="2" className="text-right"><b>BASETVA: </b> <NumberFormat
                                            numb={devis.basetva} /></td>
                                    </tr>
                                }
                                <tr>
                                    <td colSpan="2" className="text-right"><b>TOTAL HT :</b> <NumberFormat
                                        numb={devis.totalht} /></td>
                                </tr>
                                <tr>
                                    <td colSpan="2" className="text-right" style={{ fontWeight: " 600" }}>
                                        <b> TVA(<NumberFormat
                                            numb={devis.tva} />%</b>) : <NumberFormat numb={devis.vtva} /></td>
                                </tr>
                                <tr>
                                    <td colSpan="2" className="text-right col-blue"><b>DEVIS TOTAL TTC : </b>
                                        <NumberFormat numb={devis.totalttc} /></td>
                                </tr>
                                <tr>
                                    <td colSpan="2" className="text-center" style={{ fontWeight: " 600" }}>
                                        <p className="text-center">
                                            Arrêté le devis à la somme
                                            de:<br /> {numberToLetters(parseInt(devis.totalttc), { lang: 'fr' })}
                                            <span><b> {devis.monnaie.code}</b></span>
                                        </p>
                                        <br />
                                        <p style={{ clear: "both" }} /><br />
                                        {devis.conditions !== null &&
                                            <>
                                                <p style={{ float: "left", color: forme.decolor }}><u> INFORMATIONS
                                                    ADDITIONNELLES </u></p>
                                                <p style={{ clear: "both" }} />
                                                <p style={{ color: "#000000" }}
                                                    dangerouslySetInnerHTML={{ __html: devis.conditions }} />
                                            </>
                                        }
                                    </td>
                                </tr>

                            </table>
                        </>
                    }
                    <br /><br /><br /><br />
                </>
            }
        </>
    );
}

try {
    const container = document.getElementById('shacontentDevis');
    const root = createRoot(container);
    root.render(<Devis />);
} catch (e) {
}

