import React, {useEffect, useRef, useState} from 'react';
import {useReactToPrint} from "react-to-print";
import {PrintCommande} from "./PrintCommande";
import NumberFormat from "../../fonctions/NumberFormat";
import {EditText} from "react-edit-text";
import {deviceType} from "react-device-detect";
import axios from "axios";
import $ from "jquery";
import ReactHTMLTableToExcel from 'react-html-table-to-excel';
import {createRoot} from "react-dom/client";
import Moment from "react-moment";

const Commande = () => {

    const [loading, setLoading] = useState(false);
    const [bon, setBon] = useState('');
    const [lignes, setLignes] = useState([]);
    const [groupes, setGroupes] = useState([]);
    const [forme, setforme] = useState([]);
    const [formes, setformes] = useState([]);

    const fetchBon = async () => {
        const bbon = JSON.parse($('#jsonbon').val());
        const forme = JSON.parse($('#jsonforme').val());
        const formes = JSON.parse($('#jsonformes').val());
        setBon(bbon);
        setLignes(bbon.lignes);
        setGroupes(bbon.groupes);
        setLoading(true);
        setforme(forme);
        setformes(formes);
        if (bbon.preparation !== null) {
            setSuivi(bbon.preparation.lignes);
        }

    };
    useEffect(() => {
        fetchBon();
    }, []);

    let renderLigne = null;
    let renderCaisse = null;
    let renderGroupe = null;
    let renderGroupeMobile = null;
    let renderLigneMobile = null;
    const numberToLetters = require('number-2-letters');

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

    function pdfBon(e) {
        e.preventDefault();
        $("#prpdf").css("display", "block");
        window.location.href = "/crm/doc/attache/" + bon.id + "/bon/oui";
    }
    const formatNumber = (num, precision, separator) => {
        let parts;
        num = Number(num);
        num = (typeof precision !== 'undefined' ? num.toFixed(precision) : num).toString();
        parts = num.split('.');
        parts[0] = parts[0].toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1' + (separator));
        return parts.join(',');
    }
    async function dupliquerBon(e) {
        e.preventDefault()
        $('#Traitement').modal('show');
        $('#ConfirmDelete').modal('show')
        $('#accept').click(async function () {
            $('#ConfirmDelete').modal('hide')
            $('#Traitement').modal('show')
            await axios({
                method: 'POST',
                url: '/crm/bon/dupliquer/' + bon.id,
            }).then(function (response) {
                window.location.href = '/crm/bon/' + response.data['result'] + '/' + bon.chantier.id
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
                url: '/crm/ligne/upd/bon/remise/' + resp.name + '/' + bon.id + '/' + resp.value.replace('.', ','),
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
                url: '/crm/ligne/upd/bon/pu/' + resp.name + '/' + bon.id + '/' + resp.value.replace('.', ','),
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
                url: '/crm/ligne/upd/bon/qte/' + resp.name + '/' + bon.id + '/' + resp.value.replace('.', ','),
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
                url: '/crm/ligne/upd/bon/unite/' + resp.name + '/' + bon.id + '/' + resp.value,
            }).then(function (response) {
                let bibon = response.data;
                setBon(bibon);
                setLignes(bibon.lignes);
                if (bibon.preparation !== null) {
                    setSuivi(bibon.preparation.lignes);
                }
                $('#Traitement').modal('hide');
            }).catch(function (error) {
                $('#ModalErreur').modal('show')
            });
        } else {
            window.location.reload()
        }
    }
    const deleteLigne = (delid) => {
        if (deviceType !== "mobile") {
            $('#modalList').modal('toggle');
        }
        $('#ConfirmDelete').modal('show');
        $('#accept').click(async function () {
            $('#ConfirmDelete').modal('hide');
            $('#Traitement').modal('show');
            await axios({
                method: 'DELETE',
                url: '/crm/ligne/delete/' + bon.id + '/' + bon.chantier.id + '/' + delid + '/bon',
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
            }).then(function (response) {
                window.location.reload()
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
        $('#accept').click(async function () {
            $('#ConfirmDelete').modal('hide');
            $('#Traitement').modal('show');
            await axios({
                method: 'DELETE',
                url: '/crm/ligne/groupe/' + bon.id + '/' + bon.chantier.id + '/' + delid + '/bon',
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
    async function delBon(resp) {
        if (resp.value !== '') {
            $('#ConfirmDelete').modal('show');
            $('#accept').click(async function () {
                $('#ConfirmDelete').modal('hide');
                $('#Traitement').modal('show');
                await axios({
                    method: 'DELETE',
                    url: '/crm/bon/del/' + bon.id,
                }).then(function (response) {
                    window.location.reload();
                }).catch(function (error) {
                    $('#ModalErreur').modal('show')
                });
            });
        } else {
            window.location.reload()
        }
    }
    async function restaureBon(e) {
        e.preventDefault()
        $('#ConfirmDelete').modal('show');
        $('#accept').click(async function () {
            $('#ConfirmDelete').modal('hide');
            $('#Traitement').modal('show');
            await axios({
                method: 'GET',
                url: '/crm/bon/restaurer/' + bon.id,
            }).then(function (response) {
                let bibon = response.data;
                setBon(bibon);
                setLignes(bibon.lignes);
                if (bibon.preparation !== null) {
                    setSuivi(bibon.preparation.lignes);
                }
                $('#Traitement').modal('toggle');
            }).catch(function (error) {
                $('#Traitement').modal('toggle')
                $('#ModalErreur').modal('show');
            });
        });
    }
    async function valideBon(e) {
        e.preventDefault()
        $('#Traitement').modal('show');
        await axios({
            method: 'GET',
            url: '/crm/bon/valider/' + bon.id,
        }).then(function (response) {
            window.location.reload()
            window.location.reload()
        }).catch(function (error) {
            $('#Traitement').modal('toggle')
            $('#ModalErreur').modal('show');
        });

    }
    async function devalideBon(e) {
        e.preventDefault()
        $('#Traitement').modal('show');
        await axios({
            method: 'GET',
            url: '/crm/bon/devalider/' + bon.id,
        }).then(function (response) {
            window.location.reload()
        }).catch(function (error) {
            $('#Traitement').modal('toggle')
            $('#ModalErreur').modal('show');
        });
    }

    $('#updBonPresta').off().on("click", async function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#updBonPresta').hide()
            $('#closeUpdBonPresta').hide()
            $('#loadUpdBonPresta').css('display', '')

            $('#editor').val(CKEDITOR.instances['editor'].getData())
            $('#editor2').val(CKEDITOR.instances['editor2'].getData())

            await axios({
                method: 'PUT',
                url: '/crm/bon/presta/update/' + bon.id,
                data: JSON.stringify($('#updBonPrestaForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
            }).then(function (response) {
                location.reload();
            }).catch(function (error) {
                $('#modalInfo').modal('toggle')
                $('#ModalErreur').modal('show')
            });
        }
    });
    $('#updBonFourn').off().on("click", async function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#updBonFourn').hide()
            $('#closeUpdBonFourn').hide()
            $('#loadUpdBonFourn').css('display', '')

            $('#editor').val(CKEDITOR.instances['editor'].getData())
            $('#editor2').val(CKEDITOR.instances['editor2'].getData())

            await axios({
                method: 'PUT',
                url: '/crm/bon/fourn/update/' + bon.id,
                data: JSON.stringify($('#updBonFournForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
            }).then(function (response) {
                location.reload();
            }).catch(function (error) {
                $('#modalInfo').modal('toggle')
                $('#ModalErreur').modal('show')
            });
        }
    });
    $('#addChoisirBon').off().on("click", async function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#addChoisirBon').hide()
            $('#closeChoisirBon').hide()
            $('#loadChoisirBon').css('display', '')

            await axios({
                method: 'POST',
                url: '/crm/ligne/choisir/bon/' + bon.id,
                data: JSON.stringify($('#addChoisirBonForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
            }).then(function (response) {
                location.reload()
            }).catch(function (error) {
                $('#modalChoisir').modal('toggle')
                $('#ModalErreur').modal('show')
            });

        }

    })
    $('#addLigneBon').off().on("click", async function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#addLigneBon').hide()
            $('#closeLigne').hide()
            $('#loadLigne').css('display', '')

            await axios({
                method: 'POST',
                url: '/crm/ligne/add/bon/' + bon.id,
                data: JSON.stringify($('#addLigneBonForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
            }).then(function (response) {
                let bibon = response.data;
                setBon(bibon);
                setLignes(bibon.lignes);
                if (bibon.preparation !== null) {
                    setSuivi(bibon.preparation.lignes);
                }
                $('#addLigneBon').show();
                $('#closeLigne').show();
                $('#loadLigne').hide();
                $('#addLigneBonForm')[0].reset();
            }).catch(function (error) {
                $('#modalLigne').modal('toggle')
                $('#ModalErreur').modal('show')
            });
        }
    })
    $('#addBonPresta').off().on("click", function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#addBonPresta').hide()
            $('#closeBonPresta').hide()
            $('#loadBonPresta').css('display', '')

            $('#editor3').val(CKEDITOR.instances['editor3'].getData())
            $('#editor6').val(CKEDITOR.instances['editor6'].getData())

            $.ajax({
                type: 'POST',
                url: '/crm/bon/presta/add',
                data: JSON.stringify($('#addBonPrestaForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    window.location.href =
                        '/crm/bon/' +
                        respdata['result'][0]['numbon'] +
                        '/' +
                        respdata['result'][0]['idchantier']
                },
                error: function (xhr, resp, text) {
                    $('#ModalErreur').modal('show')
                },
            })
        }
    })
    $('#addBonFourn').off().on("click", function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#addBonFourn').hide()
            $('#closeBonFourn').hide()
            $('#loadBonFourn').css('display', '')
            $('#editor7').val(CKEDITOR.instances['editor7'].getData())
            $('#editor8').val(CKEDITOR.instances['editor8'].getData())
            $.ajax({
                type: 'POST',
                url: '/crm/bon/fourn/add',
                data: JSON.stringify($('#addBonFournForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    window.location.href =
                        '/crm/bon/' +
                        respdata['result'][0]['numbon'] +
                        '/' +
                        respdata['result'][0]['idchantier']
                },
                error: function (xhr, resp, text) {
                    $('#ModalErreur').modal('show')
                },
            })
        }
    })
    $('#addDeplacerBon').off().on("click", async function (event) {
        event.preventDefault()
        const idchan = $('#deplacerBon').val();
        $('#addDeplacerBon').hide()
        $('#closeDeplacer').hide()
        $('#loadDeplacer').css('display', '')
        await axios({
            method: 'GET',
            url: '/crm/bon/deplacer/' + bon.id + '/' + idchan,
        }).then(function (response) {
            window.location.href = '/crm/bon/' + response.data['result'] + '/' + bon.chantier.id;
        }).catch(function (error) {
            $('#modalDeplacer').modal('toggle')
            $('#ModalErreur').modal('show')
        });
    })
    $('#solderBon').off().on("click", async function (event) {
        event.preventDefault();
        const idsolde = $('#soldeBon').val();
        $('#solderBon').hide()
        $('#closeSolder').hide()
        $('#loadSolder').css('display', '')
        $.ajax({
            type: 'GET',
            url: '/crm/bon/solder/' + bon.id + '/' + idsolde,
            data: JSON.stringify($('#addBonPrestaForm').serializeObject()),
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
                $('#modalSolder').modal('toggle')
                $('#ModalErreur').modal('show')
            },
        })
    })
    $('#addGroupBon').off().on("click", async function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#addGroupBon').hide()
            $('#closeGroup').hide()
            $('#loadGroup').css('display', '')

            await axios({
                method: 'POST',
                url: '/crm/groupe/add/' + bon.id + '/bon',
                data: JSON.stringify($('#addGroupeBonForm').serializeObject()),
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
    $('#updateLigneBon').off().on("click", async function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#updateLigneBon').hide()
            $('#closeLigne').hide()
            $('#loadLigne').css('display', '')

            const idligne = $('#idligne').val();

            await axios({
                method: 'POST',
                url: '/crm/ligne/update/bon/' + idligne + '/' + bon.id,
                data: JSON.stringify($('#addLigneBonForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
            }).then(function (response) {
                let bibon = response.data;
                setBon(bibon);
                setLignes(bibon.lignes);
                $('#updateLigneBon').show();
                $('#closeLigne').show();
                $('#loadLigne').hide();
                $('#modalLigne').modal('toggle')
                window.location.href = '/crm/bon/' + bon.id + '/' + bon.chantier.id
            }).catch(function (error) {
                $('#modalLigne').modal('toggle')
                $('#ModalErreur').modal('show')
            });
        }
    })
    $('#updateGroupBon').off().on("click", async function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#updateGroupBon').hide()
            $('#closeGroup').hide()
            $('#loadGroup').css('display', '')

            const idgroupe = $('#idgroupe').val();

            await axios({
                method: 'PUT',
                url: '/crm/groupe/update/' + idgroupe + '/' + bon.id + '/bon',
                data: JSON.stringify($('#addGroupeBonForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
            }).then(function (response) {
                let bibon = response.data;
                setBon(bibon);
                if (bibon.preparation !== null) {
                    setSuivi(bibon.preparation.lignes);
                }
                setGroupes(bibon.groupe);
                $('#updateGroupeBon').show();
                $('#closeGroup').show();
                $('#loadGroup').hide();
                $('#modalGroup').modal('toggle')
                window.location.href = '/crm/bon/' + bon.id + '/' + bon.chantier.id
            }).catch(function (e) {
                $('#modalGroup').modal('toggle')
                $('#ModalErreur').modal('show')
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
                url: '/crm/bon/remise/' + bon.id,
                data: JSON.stringify($('#addRemiseThtForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
            }).then(function (response) {
                let bibon = response.data;
                setBon(bibon);
                setLignes(bibon.lignes);
                if (bibon.preparation !== null) {
                    setSuivi(bibon.preparation.lignes);
                }
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
                url: '/crm/bon/forme',
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

    $(function () {
        $(".dele").each(function () {
            $(this).off().on("click", async function () {
                $('#Traitement').modal('show');
                await axios({
                    method: 'DELETE',
                    url: '/crm/ligne/delete/' + bon.id + '/' + bon.chantier.id + '/' + this.id + '/bon',
                    contentType: 'application/json; charset=utf-8',
                    dataType: 'json',
                }).then(function (response) {
                    location.reload();
                }).catch(function (error) {
                    $('#Traitement').modal('hide');
                });
            });
        });
        const $seldevis = $('.seldevis');
        $('.seldevis').html('');
        $.ajax({
            type: 'POST',
            url: '/crm/devis/gets/' + bon.chantier.id,
            contentType: 'application/json; charset=utf-8',
            success: function (respdata, textStatus, jqXHR) {
                $(".didev").empty();
                $(".didev").append('<span class="col-pink">Chargement des devis</span> <img src="/img/loading.gif" style="width: 20px">');
                respdata.map((de) => {
                    const group = $('<option value=' + de.id + '>Devis Nº ' + de.iddevis + '</option>');
                    group.appendTo($seldevis);
                });
                $(".didev").empty();
                $(".didev").append('<span class="col-green">Devis téléchargés</span>');
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })

        const $seldeu = $('.seldeu');
        $('.seldeu').html('');
        $.ajax({
            type: 'POST',
            url: '/crm/devis/gets/' + bon.chantier.id,
            contentType: 'application/json; charset=utf-8',
            success: function (respdata, textStatus, jqXHR) {
                $(".didu").empty();
                $(".didu").append('<span class="col-pink">Chargement des devis</span> <img src="/img/loading.gif" style="width: 20px">');
                respdata.map((de) => {
                    const group = $('<option value=' + de.id + '>Devis Nº ' + de.iddevis + '</option>');
                    group.appendTo($seldeu);
                });
                $(".didu").empty();
                $(".didu").append('<span class="col-green">Devis téléchargés</span>');
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })

        $(".delegr").each(function () {
            $(this).off().on("click", async function () {
                $('#Traitement').modal('show');
                await axios({
                    method: 'DELETE',
                    url: '/crm/ligne/groupe/' + bon.id + '/' + bon.chantier.id + '/' + this.id + '/bon',
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

    $('#secha').off().on("change", function (event) {
        event.preventDefault();
        const $sedevis = $('.sedevis');
        $('.sedevis').html('');
        $.ajax({
            type: 'POST',
            url: '/crm/devis/gets/' + this.value,
            contentType: 'application/json; charset=utf-8',
            success: function (respdata, textStatus, jqXHR) {
                $(".dido").empty();
                $(".dido").append('<span class="col-pink">Chargement des devis</span> <img src="/img/loading.gif" style="width: 20px">');
                respdata.map((de) => {
                    const group = $('<option value=' + de.id + '>Devis Nº ' + de.iddevis + '</option>');
                    group.appendTo($sedevis);
                });
                $(".dido").empty();
                $(".dido").append('<span class="col-green">Devis téléchargés</span>');
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    })
    $('#sechas').off().on("change", function (event) {
        event.preventDefault();
        const $seldevs = $('.seldevs');
        $('.seldevs').html('');
        $.ajax({
            type: 'POST',
            url: '/crm/devis/gets/' + this.value,
            contentType: 'application/json; charset=utf-8',
            success: function (respdata, textStatus, jqXHR) {
                $(".dides").empty();
                $(".dides").append('<span class="col-pink">Chargement des devis</span> <img src="/img/loading.gif" style="width: 20px">');
                respdata.map((de) => {
                    const group = $('<option value=' + de.id + '>Devis Nº ' + de.iddevis + '</option>');
                    group.appendTo($seldevs);
                });
                $(".dides").empty();
                $(".dides").append('<span class="col-green">Devis téléchargés</span>');
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    })
    $('#sechau').off().on("change", function (event) {
        event.preventDefault();
        const $seldeu = $('.seldeu');
        $('.seldeu').html('');
        $.ajax({
            type: 'POST',
            url: '/crm/devis/gets/' + this.value,
            contentType: 'application/json; charset=utf-8',
            success: function (respdata, textStatus, jqXHR) {
                $(".didu").empty();
                $(".didu").append('<span class="col-pink">Chargement des devis</span> <img src="/img/loading.gif" style="width: 20px">');
                respdata.map((de) => {
                    const group = $('<option value=' + de.id + '>Devis Nº ' + de.iddevis + '</option>');
                    group.appendTo($seldeu);
                });
                $(".didu").empty();
                $(".didu").append('<span class="col-green">Devis téléchargés</span>');
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    })
    $('#sechane').off().on("change", function (event) {
        event.preventDefault();
        const $seldevis = $('.seldevis');
        $('.seldevis').html('');
        $.ajax({
            type: 'POST',
            url: '/crm/devis/gets/' + this.value,
            contentType: 'application/json; charset=utf-8',
            success: function (respdata, textStatus, jqXHR) {
                $(".didev").empty();
                $(".didev").append('<span class="col-pink">Chargement des devis</span> <img src="/img/loading.gif" style="width: 20px">');
                respdata.map((de) => {
                    const group = $('<option value=' + de.id + '>Devis Nº ' + de.iddevis + '</option>');
                    group.appendTo($seldevis);
                });
                $(".didev").empty();
                $(".didev").append('<span class="col-green">Devis téléchargés</span>');
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    })

    if (groupes) {
        renderGroupe = groupes.map((group) => {
            let st = 0;
            let popg = group.id;
            let opg = '';
            if (bon.etat === 'valide') {
                opg = group.groupe + '<p class="bordz hide ' + group.id + 'gr" ></p>';
            } else {
                opg = group.groupe + '<p class="bordz hide ' + group.id + 'gr" >' +
                    '<a href=/crm/bon/groupe/' + bon.id + '/' + group.id + '/' + bon.chantier.id + '><i class="fa fa-edit text-success m-r-15" style="font-size: 16px" aria-hidden="true" title="Modifier cette ligne"></i></a>' +
                    '<a class="delegr" id=' + popg + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a>' +
                    '</p>';
            }
            const renderLigneGroupe = lignes.map((ligne) => {
                let opp = "";
                if (ligne.groupe !== null) {
                    if (ligne.groupe.id === group.id) {
                        if (bon.aarem === 'oui') {
                            st = st + ((ligne.pu * ligne.quantite) * ((100 - ligne.remise) / 100));
                        } else {
                            st = st + (ligne.pu * ligne.quantite);
                        }
                    }
                    let popp = ligne.id;
                    if (bon.etat === 'valide') {
                        opp = ligne.designation + '<p class="text-center bordz hide ' + ligne.id + 'li" ></p>';
                    } else {
                        opp = ligne.designation + '<p class="text-center bordz hide ' + ligne.id + 'li" >' +
                            '<a href=/crm/bon/ligne/' + bon.id + '/' + ligne.id + '/' + bon.chantier.id + '><i class="fa fa-edit text-success m-r-15" style="font-size: 16px" aria-hidden="true" title="Modifier cette ligne"></i></a>' +
                            '<a class="dele" id=' + popp + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a>' +
                            '</p>';
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
                                        {bon.aaref === 'oui' &&
                                            <td className="text-center borde" style={{whiteSpace: "nowrap"}}
                                                dangerouslySetInnerHTML={{__html: ligne.reference}}/>
                                        }

                                        <td className="text-left borde" dangerouslySetInnerHTML={{__html: opp}}/>
                                        <td className="text-center borde" style={{whiteSpace: "nowrap"}}>
                                            <EditText
                                                type='text'
                                                name={ligne.id}
                                                defaultValue={ligne.unite}
                                                onSave={val => saveUnite(val)}
                                            />
                                        </td>
                                        {bon.type === "none" &&
                                            <td className="text-center borde" style={{whiteSpace: "nowrap"}}>
                                                <EditText
                                                    type='number'
                                                    name={ligne.id}
                                                    defaultValue={formatNumber(ligne.quantite, 2, ' ')}
                                                    onSave={val => saveQte(val)}
                                                />
                                            </td>
                                        }
                                        {bon.type === "prepa" &&
                                            <>
                                                <td className="text-center borde" style={{whiteSpace: "nowrap"}}>
                                                    <EditText
                                                        type='number'
                                                        name={ligne.id}
                                                        defaultValue={formatNumber(ligne.quantite, 2, ' ')}
                                                        onSave={val => saveQte(val)}
                                                    />
                                                </td>
                                                <td className="text-center borde">{formatNumber(livre, 2, ' ')}</td>
                                                <td className="text-center borde">{formatNumber(reste, 2, ' ')}</td>
                                                <td className="text-right borde" style={{whiteSpace: "nowrap"}}>
                                                    <EditText
                                                        type='number'
                                                        name={ligne.id}
                                                        inputClassName='nowhitespace'
                                                        defaultValue={formatNumber(ligne.pu, 2, ' ')}
                                                        onSave={val => savePu(val)}
                                                    />
                                                </td>
                                                {bon.aarem === 'oui' &&
                                                    <td className="text-center borde" style={{whiteSpace: "nowrap"}}>
                                                        <EditText
                                                            type='number'
                                                            name={ligne.id}
                                                            defaultValue={formatNumber(ligne.remise, 2, ' ')}
                                                            onSave={val => saveRemise(val)}
                                                        />
                                                    </td>
                                                }
                                                {bon.aarem !== 'oui' &&
                                                    <td className="text-right borde" style={{whiteSpace: "nowrap"}}>
                                                        <NumberFormat
                                                            numb={(ligne.pu * ligne.quantite)}/></td>
                                                }
                                                {bon.aarem === 'oui' &&
                                                    <td className="text-right borde" style={{whiteSpace: "nowrap"}}>
                                                        <NumberFormat
                                                            numb={((ligne.pu * ligne.quantite) * ((100 - ligne.remise) / 100))}/>
                                                    </td>
                                                }
                                            </>
                                        }
                                        {bon.type === "pste" &&
                                            <>
                                                <td className="text-center borde">{formatNumber(prevu, 2, ' ')}</td>
                                                <td className="text-center borde">{formatNumber(livre, 2, ' ')}</td>
                                                <td className="text-center borde">{formatNumber(reste, 2, ' ')}</td>
                                            </>
                                        }
                                        {bon.type === "pst" &&
                                            <>
                                                <td className="text-center borde" style={{whiteSpace: "nowrap"}}>
                                                    <EditText
                                                        type='number'
                                                        name={ligne.id}
                                                        defaultValue={formatNumber(ligne.quantite, 2, ' ')}
                                                        onSave={val => saveQte(val)}
                                                    />
                                                </td>
                                                <td className="text-right borde" style={{whiteSpace: "nowrap"}}>
                                                    <EditText
                                                        type='number'
                                                        name={ligne.id}
                                                        inputClassName='nowhitespace'
                                                        defaultValue={formatNumber(ligne.pu, 2, ' ')}
                                                        onSave={val => savePu(val)}
                                                    />
                                                </td>
                                                {bon.aarem === 'oui' &&
                                                    <td className="text-center borde" style={{whiteSpace: "nowrap"}}>
                                                        <EditText
                                                            type='number'
                                                            name={ligne.id}
                                                            defaultValue={formatNumber(ligne.remise, 2, ' ')}
                                                            onSave={val => saveRemise(val)}
                                                        />
                                                    </td>
                                                }
                                                {bon.aarem !== 'oui' &&
                                                    <td className="text-right borde" style={{whiteSpace: "nowrap"}}>
                                                        <NumberFormat
                                                            numb={(ligne.pu * ligne.quantite)}/></td>
                                                }
                                                {bon.aarem === 'oui' &&
                                                    <td className="text-right borde" style={{whiteSpace: "nowrap"}}>
                                                        <NumberFormat
                                                            numb={((ligne.pu * ligne.quantite) * ((100 - ligne.remise) / 100))}/>
                                                    </td>
                                                }
                                            </>
                                        }
                                        {bon.type === "oui" &&
                                            <>
                                                {bon.preparation === null &&
                                                    <>
                                                        <td className="text-center borde"
                                                            style={{whiteSpace: "nowrap"}}>
                                                            <EditText
                                                                type='number'
                                                                name={ligne.id}
                                                                defaultValue={formatNumber(ligne.quantite, 2, ' ')}
                                                                onSave={val => saveQte(val)}
                                                            />
                                                        </td>
                                                        <td className="text-right borde" style={{whiteSpace: "nowrap"}}>
                                                            <EditText
                                                                type='number'
                                                                name={ligne.id}
                                                                inputClassName='nowhitespace'
                                                                defaultValue={formatNumber(ligne.pu, 2, ' ')}
                                                                onSave={val => savePu(val)}
                                                            />
                                                        </td>
                                                    </>
                                                }
                                                {bon.preparation !== null &&
                                                    <>
                                                        <td className="text-center borde">{formatNumber(prevu, 2, ' ')}</td>
                                                        <td className="text-center borde">{formatNumber(livre, 2, ' ')}</td>
                                                        <td className="text-center borde">{formatNumber(reste, 2, ' ')}</td>
                                                        <td className="text-center borde"
                                                            style={{whiteSpace: "nowrap"}}>
                                                            <EditText
                                                                type='number'
                                                                name={ligne.id}
                                                                defaultValue={formatNumber(ligne.quantite, 2, ' ')}
                                                                onSave={val => saveQte(val)}
                                                            />
                                                        </td>
                                                        <td className="text-right borde" style={{whiteSpace: "nowrap"}}>
                                                            <EditText
                                                                type='number'
                                                                name={ligne.id}
                                                                inputClassName='nowhitespace'
                                                                defaultValue={formatNumber(ligne.pu, 2, ' ')}
                                                                onSave={val => savePu(val)}
                                                            />
                                                        </td>
                                                    </>
                                                }
                                                {bon.aarem === 'oui' &&
                                                    <td className="text-center borde" style={{whiteSpace: "nowrap"}}>
                                                        <EditText
                                                            type='number'
                                                            name={ligne.id}
                                                            defaultValue={formatNumber(ligne.remise, 2, ' ')}
                                                            onSave={val => saveRemise(val)}
                                                        />
                                                    </td>
                                                }
                                                {bon.aarem !== 'oui' &&
                                                    <td className="text-right borde" style={{whiteSpace: "nowrap"}}>
                                                        <NumberFormat
                                                            numb={(ligne.pu * ligne.quantite)}/></td>
                                                }
                                                {bon.aarem === 'oui' &&
                                                    <td className="text-right borde" style={{whiteSpace: "nowrap"}}>
                                                        <NumberFormat
                                                            numb={((ligne.pu * ligne.quantite) * ((100 - ligne.remise) / 100))}/>
                                                    </td>
                                                }
                                            </>
                                        }
                                        {bon.type === "non" &&
                                            <>
                                                {bon.preparation === null &&
                                                    <>
                                                        <td className="text-center borde"
                                                            style={{whiteSpace: "nowrap"}}>
                                                            <EditText
                                                                type='number'
                                                                name={ligne.id}
                                                                defaultValue={formatNumber(ligne.quantite, 2, ' ')}
                                                                onSave={val => saveQte(val)}
                                                            />
                                                        </td>
                                                        <td className="text-right borde" style={{whiteSpace: "nowrap"}}>
                                                            <EditText
                                                                type='number'
                                                                name={ligne.id}
                                                                inputClassName='nowhitespace'
                                                                defaultValue={formatNumber(ligne.pu, 2, ' ')}
                                                                onSave={val => savePu(val)}
                                                            />
                                                        </td>
                                                    </>
                                                }
                                                {bon.preparation !== null &&
                                                    <>
                                                        <td className="text-center borde">{formatNumber(prevu, 2, ' ')}</td>
                                                        <td className="text-center borde">{formatNumber(livre, 2, ' ')}</td>
                                                        <td className="text-center borde">{formatNumber(reste, 2, ' ')}</td>
                                                        <td className="text-center borde"
                                                            style={{whiteSpace: "nowrap"}}>
                                                            <EditText
                                                                type='number'
                                                                name={ligne.id}
                                                                defaultValue={formatNumber(ligne.quantite, 2, ' ')}
                                                                onSave={val => saveQte(val)}
                                                            />
                                                        </td>
                                                        <td className="text-right borde" style={{whiteSpace: "nowrap"}}>
                                                            <EditText
                                                                type='number'
                                                                name={ligne.id}
                                                                inputClassName='nowhitespace'
                                                                defaultValue={formatNumber(ligne.pu, 2, ' ')}
                                                                onSave={val => savePu(val)}
                                                            />
                                                        </td>
                                                    </>
                                                }
                                                {bon.aarem === 'oui' &&
                                                    <td className="text-center borde" style={{whiteSpace: "nowrap"}}>
                                                        <EditText
                                                            type='number'
                                                            name={ligne.id}
                                                            defaultValue={formatNumber(ligne.remise, 2, ' ')}
                                                            onSave={val => saveRemise(val)}
                                                        />
                                                    </td>
                                                }
                                                {bon.aarem !== 'oui' &&
                                                    <td className="text-right borde" style={{whiteSpace: "nowrap"}}>
                                                        <NumberFormat
                                                            numb={(ligne.pu * ligne.quantite)}/></td>
                                                }
                                                {bon.aarem === 'oui' &&
                                                    <td className="text-right borde" style={{whiteSpace: "nowrap"}}>
                                                        <NumberFormat
                                                            numb={((ligne.pu * ligne.quantite) * ((100 - ligne.remise) / 100))}/>
                                                    </td>
                                                }
                                            </>
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
                        {bon.aarem === 'oui' && bon.aaref === 'oui' &&
                            <>
                                <td className="borde text-center"><b>{group.reference}</b></td>
                                <td colSpan="6" className="borde" dangerouslySetInnerHTML={{__html: opg}}/>
                            </>
                        }

                        {bon.aarem === 'non' && bon.aaref === 'oui' &&
                            <>
                                <td className="borde text-center"><b>{group.reference}</b></td>
                                <td colSpan="5" className="borde" dangerouslySetInnerHTML={{__html: opg}}/>
                            </>
                        }

                        {bon.aarem === 'oui' && bon.aaref === 'non' &&
                            <>
                                <td colSpan="6" className="borde" dangerouslySetInnerHTML={{__html: opg}}/>
                            </>
                        }

                        {bon.aarem === 'non' && bon.aaref === 'non' &&
                            <>
                                <td colSpan="5" className="borde" dangerouslySetInnerHTML={{__html: opg}}/>
                            </>
                        }
                    </tr>
                    {renderLigneGroupe}
                    {bon.type !== "none" &&
                        <tr className="togo">
                            {bon.aarem === 'oui' && bon.aaref === 'oui' &&
                                <td colSpan="7" className="borde text-right">
                                    <b>SOUS-TOTAL: <NumberFormat numb={st}/></b></td>
                            }

                            {bon.aarem === 'non' && bon.aaref === 'oui' &&
                                <td colSpan="6" className="borde text-right">
                                    <b>SOUS-TOTAL: <NumberFormat numb={st}/></b></td>
                            }

                            {bon.aarem === 'oui' && bon.aaref === 'non' &&
                                <td colSpan="6" className="borde text-right">
                                    <b>SOUS-TOTAL: <NumberFormat numb={st}/></b></td>
                            }


                            {bon.aarem === 'non' && bon.aaref === 'non' &&
                                <td colSpan="5" className="borde text-right">
                                    <b>SOUS-TOTAL: <NumberFormat numb={st}/></b></td>
                            }

                        </tr>
                    }
                </>
            );
        })
        renderGroupeMobile = groupes.map((group) => {
            let st = 0;
            const renderLigneGroupeMobile = lignes.map((ligne) => {
                if (ligne.groupe !== null) {
                    if (ligne.groupe.id === group.id) {
                        if (bon.aarem === 'oui') {
                            st = st + ((ligne.pu * ligne.quantite) * ((100 - ligne.remise) / 100));
                        } else {
                            st = st + (ligne.pu * ligne.quantite);
                        }
                    }
                }

                return (
                    <>
                        {lignes.length !== "0" &&
                            <>
                                {ligne.groupe !== null &&
                                    <>
                                        {ligne.groupe.id === group.id &&
                                            <tr>
                                                {bon.aaref === 'oui' &&
                                                    <td className="text-center">{ligne.reference}</td>
                                                }
                                                <td>
                                                    <span className="pri bolo600 text-left"
                                                          dangerouslySetInnerHTML={{__html: ligne.designation}}/><br/>
                                                    <table style={{width: "100%", marginTop: "10px"}} border="0"
                                                           cellSpacing="0" cellPadding="0">
                                                        <tr>
                                                            <td className="text-right bordz font-bold">Unité:</td>
                                                            <td className="text-left bordz font-weight-bold"> {ligne.unite}</td>
                                                        </tr>
                                                        <tr>
                                                            <td className="text-right bordz font-bold">Quantité:</td>
                                                            <td className="text-left bordz font-weight-bold">
                                                                <NumberFormat
                                                                    numb={(ligne.quantite)}/></td>
                                                        </tr>
                                                        <tr>
                                                            <td className="text-right bordz font-bold">Prix unitaire:
                                                            </td>
                                                            <td className="text-left bordz font-weight-bold">
                                                                <NumberFormat
                                                                    numb={(ligne.pu)}/>
                                                            </td>
                                                        </tr>
                                                        {bon.aarem === 'oui' &&
                                                            <>
                                                                <tr>
                                                                    <td className="text-right bordz font-bold">Remise:</td>
                                                                    <td className="text-left bordzfont-weight-bold"> {ligne.remise}%</td>
                                                                </tr>
                                                            </>
                                                        }
                                                        <tr>
                                                            <td className="text-right bordz font-bold">Montant HT:</td>
                                                            {bon.aarem !== 'oui' &&
                                                                <NumberFormat numb={(ligne.pu * ligne.quantite)}/>
                                                            }

                                                            {bon.aarem === 'oui' &&
                                                                <NumberFormat
                                                                    numb={((ligne.pu * ligne.quantite) * ((100 - ligne.remise) / 100))}/>
                                                            }
                                                        </tr>
                                                        <tr>
                                                            {bon.etat === 'save' &&
                                                                <td className="text-center bordz" colSpan={2}
                                                                    style={{width: "80px"}}>
                                                                    <a href={`/crm/bon/ligne/${bon.id}/${ligne.id}/${bon.chantier.id}`}><i
                                                                        className="fa fa-edit text-success m-r-10"
                                                                        style={{fontSize: "14px"}}
                                                                        aria-hidden="true"
                                                                        title="Modifier"/></a>

                                                                    <a href=""><i
                                                                        className="fa fa-reply col-blue m-r-10"
                                                                        style={{fontSize: "14px"}}
                                                                        aria-hidden="true"
                                                                        title="Dupliquer"/></a>

                                                                    <a onClick={() => {
                                                                        deleteLigne(ligne.id)
                                                                    }}><i className="fa fa-trash col-pink"
                                                                          style={{fontSize: "14px"}}
                                                                          aria-hidden="true"
                                                                          title="Supprimer"/></a></td>

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
                        {bon.aaref === 'oui' &&
                            <>
                                <td className="text-center borde">{group.reference}</td>
                                <td className="borde">{group.groupe}<br/>
                                    <span style={{float: "right"}}>
                                            {bon.etat === 'save' &&
                                                <>

                                                    <a href={`/crm/bon/groupe/${bon.id}/${group.id}/${bon.chantier.id}`}><i
                                                        className="fa fa-edit text-success m-r-10"
                                                        style={{fontSize: "16px"}} aria-hidden="true"
                                                        title="Modifier"/></a>

                                                    <a onClick={() => {
                                                        deleteGroupe(group.id)
                                                    }}><i className="fa fa-trash col-pink" style={{fontSize: "14px"}}
                                                          aria-hidden="true"
                                                          title="Supprimer"/></a>
                                                </>
                                            }
                                    </span>
                                </td>
                            </>
                        }

                        {bon.aaref !== 'oui' &&
                            <td className="borde">{group.groupe}<br/>
                                <span style={{float: "right"}}>
                                            {bon.etat === 'save' &&
                                                <>


                                                    <a href={`/crm/bon/groupe/${bon.id}/${group.id}/${bon.chantier.id}`}><i
                                                        className="fa fa-edit text-success m-r-10"
                                                        style={{fontSize: "16px"}} aria-hidden="true"
                                                        title="Modifier"/></a>

                                                    <a onClick={() => {
                                                        deleteGroupe(group.id)
                                                    }}><i className="fa fa-trash col-pink" style={{fontSize: "14px"}}
                                                          aria-hidden="true"
                                                          title="Supprimer"/></a>
                                                </>
                                            }
                                    </span>
                            </td>
                        }


                    </tr>

                    {renderLigneGroupeMobile}

                    <tr className="togo">
                        {bon.aaref === 'oui' &&
                            <td colSpan="2" className="borde text-right">
                                <b>SOUS-TOTAL: <NumberFormat numb={st}/></b></td>
                        }

                        {bon.aaref !== 'oui' &&
                            <td className="borde text-right">
                                <b>SOUS-TOTAL: <NumberFormat numb={st}/></b></td>
                        }
                    </tr>
                </>
            );
        })
    }
    if (lignes) {
        renderLigneMobile = lignes.map((lign) => {
            return (
                <>
                    {lignes.length !== "0" &&
                        <>
                            {lign.groupe === null &&
                                <>
                                    <tr>
                                        <td>
                                            <span className="pri bolo600 text-left"
                                                  dangerouslySetInnerHTML={{__html: lign.designation}}/><br/>
                                            {bon.aaref === 'oui' &&
                                                <span
                                                    className="pri bolo600 text-left nowhitespace">{lign.reference}</span>
                                            }
                                            <table style={{width: "100%"}} border="0" cellSpacing="0"
                                                   cellPadding="0">
                                                <tr>
                                                    <td className="text-right bordz font-bold">Unité:</td>
                                                    <td className="text-left bordz font-weight-bold">{lign.unite}</td>
                                                </tr>
                                                <tr>
                                                    <td className="text-right bordz font-bold">Quantité:</td>
                                                    <td className="text-left bordz font-weight-bold"><NumberFormat
                                                        numb={lign.quantite}/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td className="text-right bordz font-bold">Prix unitaire:</td>
                                                    <td className="text-left bordz font-weight-bold"><NumberFormat
                                                        numb={lign.pu}/></td>
                                                </tr>
                                                {bon.aarem === 'oui' &&
                                                    <tr>
                                                        <td className="text-right bordz font-bold">Remise:</td>
                                                        <td className="text-left bordz font-weight-bold"><NumberFormat
                                                            numb={lign.remise}/>%
                                                        </td>
                                                    </tr>
                                                }
                                                <tr>
                                                    <td className="text-right bordz font-bold">Montant HT:</td>
                                                    <td className="text-left bordz font-weight-bold">
                                                        {bon.aarem === 'non' &&
                                                            <NumberFormat numb={(lign.pu * lign.quantite)}/>
                                                        }
                                                        {bon.aarem !== 'non' &&
                                                            <><NumberFormat
                                                                numb={((lign.pu * lign.quantite) * ((100 - lign.remise) / 100))}/></>
                                                        }
                                                    </td>
                                                </tr>
                                                <tr>
                                                    {bon.etat === 'save' &&
                                                        <>
                                                            <td className="text-center bordz" colSpan={2}
                                                                style={{width: "80px"}}>
                                                                <a href={`/crm/bon/ligne/${bon.id}/${lign.id}/${bon.chantier.id}`}><i
                                                                    className="fa fa-edit text-success m-r-10"
                                                                    style={{fontSize: "14px"}}
                                                                    aria-hidden="true"
                                                                    title="Modifier"/></a>

                                                                <a onClick={() => {
                                                                    deleteLigne(lign.id)
                                                                }}><i className="fa fa-trash col-pink"
                                                                      style={{fontSize: "14px"}}
                                                                      aria-hidden="true"
                                                                      title="Supprimer"/></a></td>
                                                        </>
                                                    }
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colSpan={2} className="bg-gray" style={{height: "5px"}}/>
                                    </tr>
                                </>
                            }
                        </>
                    }
                </>
            );
        })
        renderLigne = lignes.map((ligne) => {
            let prevu = parseFloat(ligne.livrer) + parseFloat(ligne.reste);
            let livre = ligne.livrer;
            let reste = ligne.reste;
            let pop = ligne.id;
            let op = '';

            if (bon.etat === 'valide') {
                op = ligne.designation + '<p class="text-center bordz hide ' + ligne.id + 'li" ></p>';
            } else {
                op = ligne.designation + '<p class="text-center bordz hide ' + ligne.id + 'li" >' +
                    '<a href=/crm/bon/ligne/' + bon.id + '/' + ligne.id + '/' + bon.chantier.id + '><i class="fa fa-edit text-success m-r-15" style="font-size: 16px" aria-hidden="true" title="Modifier cette ligne"></i></a>' +
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
                            {bon.aaref === 'oui' &&
                                <td className="text-center borde" style={{whiteSpace: "nowrap"}}
                                    dangerouslySetInnerHTML={{__html: ligne.reference}}/>
                            }

                            <td className="text-left borde" dangerouslySetInnerHTML={{__html: op}}/>

                            <td className="text-center borde" style={{whiteSpace: "nowrap"}}>
                                <EditText
                                    type='text'
                                    name={ligne.id}
                                    defaultValue={ligne.unite}
                                    onSave={val => saveUnite(val)}
                                />
                            </td>
                            {bon.type === "none" &&
                                <td className="text-center borde" style={{whiteSpace: "nowrap"}}>
                                    <EditText
                                        type='number'
                                        name={ligne.id}
                                        defaultValue={formatNumber(ligne.quantite, 2, ' ')}
                                        onSave={val => saveQte(val)}
                                    />
                                </td>
                            }
                            {bon.type === "prepa" &&
                                <>
                                    <td className="text-center borde" style={{whiteSpace: "nowrap"}}>
                                        <EditText
                                            type='number'
                                            name={ligne.id}
                                            defaultValue={formatNumber(ligne.quantite, 2, ' ')}
                                            onSave={val => saveQte(val)}
                                        />
                                    </td>
                                    <td className="text-center borde">{formatNumber(livre, 2, ' ')}</td>
                                    <td className="text-center borde">{formatNumber(reste, 2, ' ')}</td>
                                    <td className="text-right borde" style={{whiteSpace: "nowrap"}}>
                                        <EditText
                                            type='number'
                                            name={ligne.id}
                                            inputClassName='nowhitespace'
                                            defaultValue={formatNumber(ligne.pu, 2, ' ')}
                                            onSave={val => savePu(val)}
                                        />
                                    </td>
                                    {bon.aarem === 'oui' &&
                                        <td className="text-center borde" style={{whiteSpace: "nowrap"}}>
                                            <EditText
                                                type='number'
                                                name={ligne.id}
                                                defaultValue={formatNumber(ligne.remise, 2, ' ')}
                                                onSave={val => saveRemise(val)}
                                            />
                                        </td>
                                    }
                                    {bon.aarem !== 'oui' &&
                                        <td className="text-right borde" style={{whiteSpace: "nowrap"}}><NumberFormat
                                            numb={(ligne.pu * ligne.quantite)}/></td>
                                    }
                                    {bon.aarem === 'oui' &&
                                        <td className="text-right borde" style={{whiteSpace: "nowrap"}}><NumberFormat
                                            numb={((ligne.pu * ligne.quantite) * ((100 - ligne.remise) / 100))}/></td>
                                    }
                                </>
                            }
                            {bon.type === "pste" &&
                                <>
                                    <td className="text-center borde">{formatNumber(prevu, 2, ' ')}</td>
                                    <td className="text-center borde">{formatNumber(livre, 2, ' ')}</td>
                                    <td className="text-center borde">{formatNumber(reste, 2, ' ')}</td>
                                </>
                            }
                            {bon.type === "pst" &&
                                <>
                                    <td className="text-center borde" style={{whiteSpace: "nowrap"}}>
                                        <EditText
                                            type='number'
                                            name={ligne.id}
                                            defaultValue={formatNumber(ligne.quantite, 2, ' ')}
                                            onSave={val => saveQte(val)}
                                        />
                                    </td>
                                    <td className="text-right borde" style={{whiteSpace: "nowrap"}}>
                                        <EditText
                                            type='number'
                                            name={ligne.id}
                                            inputClassName='nowhitespace'
                                            defaultValue={formatNumber(ligne.pu, 2, ' ')}
                                            onSave={val => savePu(val)}
                                        />
                                    </td>
                                    {bon.aarem === 'oui' &&
                                        <td className="text-center borde" style={{whiteSpace: "nowrap"}}>
                                            <EditText
                                                type='number'
                                                name={ligne.id}
                                                defaultValue={formatNumber(ligne.remise, 2, ' ')}
                                                onSave={val => saveRemise(val)}
                                            />
                                        </td>
                                    }
                                    {bon.aarem !== 'oui' &&
                                        <td className="text-right borde" style={{whiteSpace: "nowrap"}}><NumberFormat
                                            numb={(ligne.pu * ligne.quantite)}/></td>
                                    }
                                    {bon.aarem === 'oui' &&
                                        <td className="text-right borde" style={{whiteSpace: "nowrap"}}><NumberFormat
                                            numb={((ligne.pu * ligne.quantite) * ((100 - ligne.remise) / 100))}/></td>
                                    }
                                </>
                            }
                            {bon.type === "oui" &&
                                <>
                                    {bon.preparation === null &&
                                        <>
                                            <td className="text-center borde" style={{whiteSpace: "nowrap"}}>
                                                <EditText
                                                    type='number'
                                                    name={ligne.id}
                                                    defaultValue={formatNumber(ligne.quantite, 2, ' ')}
                                                    onSave={val => saveQte(val)}
                                                />
                                            </td>
                                            <td className="text-right borde" style={{whiteSpace: "nowrap"}}>
                                                <EditText
                                                    type='number'
                                                    name={ligne.id}
                                                    inputClassName='nowhitespace'
                                                    defaultValue={formatNumber(ligne.pu, 2, ' ')}
                                                    onSave={val => savePu(val)}
                                                />
                                            </td>
                                        </>
                                    }
                                    {bon.preparation !== null &&
                                        <>
                                            <td className="text-center borde">{formatNumber(prevu, 2, ' ')}</td>
                                            <td className="text-center borde">{formatNumber(livre, 2, ' ')}</td>
                                            <td className="text-center borde">{formatNumber(reste, 2, ' ')}</td>
                                            <td className="text-center borde" style={{whiteSpace: "nowrap"}}>
                                                <EditText
                                                    type='number'
                                                    name={ligne.id}
                                                    defaultValue={formatNumber(ligne.quantite, 2, ' ')}
                                                    onSave={val => saveQte(val)}
                                                />
                                            </td>
                                            <td className="text-right borde" style={{whiteSpace: "nowrap"}}>
                                                <EditText
                                                    type='number'
                                                    name={ligne.id}
                                                    inputClassName='nowhitespace'
                                                    defaultValue={formatNumber(ligne.pu, 2, ' ')}
                                                    onSave={val => savePu(val)}
                                                />
                                            </td>
                                        </>
                                    }
                                    {bon.aarem === 'oui' &&
                                        <td className="text-center borde" style={{whiteSpace: "nowrap"}}>
                                            <EditText
                                                type='number'
                                                name={ligne.id}
                                                defaultValue={formatNumber(ligne.remise, 2, ' ')}
                                                onSave={val => saveRemise(val)}
                                            />
                                        </td>
                                    }
                                    {bon.aarem !== 'oui' &&
                                        <td className="text-right borde" style={{whiteSpace: "nowrap"}}><NumberFormat
                                            numb={(ligne.pu * ligne.quantite)}/></td>
                                    }
                                    {bon.aarem === 'oui' &&
                                        <td className="text-right borde" style={{whiteSpace: "nowrap"}}><NumberFormat
                                            numb={((ligne.pu * ligne.quantite) * ((100 - ligne.remise) / 100))}/></td>
                                    }
                                </>
                            }
                            {bon.type === "non" &&
                                <>
                                    {bon.preparation === null &&
                                        <>
                                            <td className="text-center borde" style={{whiteSpace: "nowrap"}}>
                                                <EditText
                                                    type='number'
                                                    name={ligne.id}
                                                    defaultValue={formatNumber(ligne.quantite, 2, ' ')}
                                                    onSave={val => saveQte(val)}
                                                />
                                            </td>
                                            <td className="text-right borde" style={{whiteSpace: "nowrap"}}>
                                                <EditText
                                                    type='number'
                                                    name={ligne.id}
                                                    inputClassName='nowhitespace'
                                                    defaultValue={formatNumber(ligne.pu, 2, ' ')}
                                                    onSave={val => savePu(val)}
                                                />
                                            </td>
                                        </>
                                    }
                                    {bon.preparation !== null &&
                                        <>
                                            <td className="text-center borde">{formatNumber(prevu, 2, ' ')}</td>
                                            <td className="text-center borde">{formatNumber(livre, 2, ' ')}</td>
                                            <td className="text-center borde">{formatNumber(reste, 2, ' ')}</td>
                                            <td className="text-center borde" style={{whiteSpace: "nowrap"}}>
                                                <EditText
                                                    type='number'
                                                    name={ligne.id}
                                                    defaultValue={formatNumber(ligne.quantite, 2, ' ')}
                                                    onSave={val => saveQte(val)}
                                                />
                                            </td>
                                            <td className="text-right borde" style={{whiteSpace: "nowrap"}}>
                                                <EditText
                                                    type='number'
                                                    name={ligne.id}
                                                    inputClassName='nowhitespace'
                                                    defaultValue={formatNumber(ligne.pu, 2, ' ')}
                                                    onSave={val => savePu(val)}
                                                />
                                            </td>
                                        </>
                                    }
                                    {bon.aarem === 'oui' &&
                                        <td className="text-center borde" style={{whiteSpace: "nowrap"}}>
                                            <EditText
                                                type='number'
                                                name={ligne.id}
                                                defaultValue={formatNumber(ligne.remise, 2, ' ')}
                                                onSave={val => saveRemise(val)}
                                            />
                                        </td>
                                    }
                                    {bon.aarem !== 'oui' &&
                                        <td className="text-right borde" style={{whiteSpace: "nowrap"}}><NumberFormat
                                            numb={(ligne.pu * ligne.quantite)}/></td>
                                    }
                                    {bon.aarem === 'oui' &&
                                        <td className="text-right borde" style={{whiteSpace: "nowrap"}}><NumberFormat
                                            numb={((ligne.pu * ligne.quantite) * ((100 - ligne.remise) / 100))}/></td>
                                    }
                                </>
                            }
                        </tr>
                    }
                </>
            );
        })
    }
    if (bon) {
        if (bon.caisses !== null) {
            let caisses = bon.caisses;
            renderCaisse = caisses.map((cais) => {
                return (
                    <>
                        {cais.etat === "valide" &&
                            <>
                                <>
                                    {bon.aaref === 'oui' && bon.preparation === null &&
                                        <>
                                            {bon.aarem === 'oui' &&
                                                <tr>
                                                    <td colSpan="6" className="borde"><Moment
                                                        format="DD/MM/YYYY">{cais.date}</Moment> | <span>N° Bon: {cais.numcaisse}</span>
                                                    </td>
                                                    <td className="borde text-right"><NumberFormat numb={cais.montant}/>
                                                    </td>
                                                </tr>
                                            }
                                            {bon.aarem !== 'oui' &&
                                                <tr>
                                                    <td colSpan="5" className="borde"><Moment
                                                        format="DD/MM/YYYY">{cais.date}</Moment> | <span>N° Bon: {cais.numcaisse}</span>
                                                    </td>
                                                    <td className="borde text-right"><NumberFormat numb={cais.montant}/>
                                                    </td>
                                                </tr>
                                            }
                                            {renderCaisse}
                                        </>
                                    }
                                    {bon.aaref !== 'oui' && bon.preparation !== null &&
                                        <>
                                            {bon.aarem === 'oui' &&
                                                <tr>
                                                    <td colSpan="8" className="borde"><Moment
                                                        format="DD/MM/YYYY">{cais.date}</Moment> | <span>N° Bon: {cais.numcaisse}</span>
                                                    </td>
                                                    <td className="borde text-right"><NumberFormat numb={cais.montant}/>
                                                    </td>
                                                </tr>
                                            }
                                            {bon.aarem !== 'oui' &&
                                                <tr>
                                                    <td colSpan="7" className="borde"><Moment
                                                        format="DD/MM/YYYY">{cais.date}</Moment> | <span>N° Bon: {cais.numcaisse}</span>
                                                    </td>
                                                    <td className="borde text-right"><NumberFormat numb={cais.montant}/>
                                                    </td>
                                                </tr>
                                            }
                                            {renderCaisse}
                                        </>
                                    }
                                </>
                            </>
                        }
                    </>
                )
            });
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
                                        <table id="borde" style={{width: "100%", marginTo: "-20px"}}>
                                            <tr className="bg-pri text-white"
                                                style={{fontSize: "12px"}}>
                                                {bon.aaref === 'oui' &&
                                                    <th className="borde text-center">RÉF</th>
                                                }
                                                <th style={{textAlign: "left", padding: "10px"}}>
                                                    DÉSIGNATION
                                                </th>
                                            </tr>
                                            {renderGroupeMobile}
                                            {renderLigneMobile}
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div className="row clearfix " style={{padding: "0.1cm"}}>
                        <div className="col-sm-12">
                            <h3 className="font-bold col-purple text-center">{bon.client.nomclient.toUpperCase()}</h3>
                            <h3 className="font-bold m-t--10  col-pink text-center">{bon.chantier.nomchantier.toUpperCase()}</h3>
                            <h3 className="font-bold m-t--10 col-blue text-center">BON N°: {bon.numbon}</h3>
                            {bon.devis !== null &&
                                <h3 className="font-bold m-t--10 pri text-center">DEVIS N°: <a
                                    href={`/crm/devis/${bon.devis.id}/${bon.chantier.id}`}>{bon.devis.iddevis}</a></h3>
                            }
                            {bon.etat === "valide" &&
                                <h4 className="font-bold col-black text-center">CE BON EST VALIDÉ</h4>}
                            {bon.corbeille !== null &&
                                <div className="text-center">
                                    <h4 className="font-bold col-black">CE BON EST SUPPRIMÉ</h4>
                                    <button className="btn bg-deep-orange text-white m-r-5"
                                            onClick={restaureBon}><i
                                        className="fa fa-redo"/> RESTAURER
                                    </button>
                                </div>
                            }

                            {deviceType !== "mobile" &&
                                <>
                                    {bon.corbeille === null &&
                                        <>
                                            {bon.type !== "cps" &&
                                                <div className="text-center">
                                                    <div className="btn-group">
                                                        <a href={`/crm/chantier/${bon.chantier.id}`}
                                                           className="btn bg-green align-left m-b-10 text-white waves-effect ">ACCÉDER
                                                            AU CHANTIER</a>
                                                    </div>
                                                    <br/>
                                                    <div className="btn-group">
                                                        <button type="button"
                                                                className="btn bg-blue  align-left m-b-10 text-white waves-effect "
                                                                data-toggle="modal" data-target="#modalBonPresta">CRÉER
                                                            UN
                                                            BON PRESTATAIRE
                                                        </button>
                                                        <button type="button"
                                                                className="btn bg-pri  align-left m-b-10 text-white waves-effect "
                                                                data-toggle="modal" data-target="#modalBonFourne">CRÉER
                                                            UN
                                                            BON FOURNISSEUR
                                                        </button>
                                                    </div>
                                                    <br/>

                                                    {bon.etat === "save" &&
                                                        <>
                                                            <div className="btn-group">
                                                                <button type="button"
                                                                        className="btn btn-labeled bg-pri text-white btn-sm"
                                                                        data-toggle="modal"
                                                                        data-target="#modalGroup">+ AJOUTER DES LOTS
                                                                </button>

                                                                <button type="button"
                                                                        className="btn btn-labeled bg-blue text-white btn-sm"
                                                                        data-toggle="modal"
                                                                        data-target="#modalChoisir">CHOISIR
                                                                    UN BIEN
                                                                    /
                                                                    SERVICE
                                                                </button>
                                                                {bon.type !== "none" &&
                                                                    <>
                                                                        {bon.type !== "prepa" &&
                                                                            <button type="button"
                                                                                    className="btn btn-labeled bg-pri text-white btn-sm"
                                                                                    data-toggle="modal"
                                                                                    data-target="#modalLigne">+
                                                                                AJOUTER UNE LIGNE
                                                                            </button>
                                                                        }

                                                                        <button type="button"
                                                                                className="btn btn-labeled bg-purple text-white btn-sm"
                                                                                data-toggle="modal"
                                                                                data-target="#modalDeplacer">DÉPLACER
                                                                            VERS
                                                                        </button>
                                                                    </>
                                                                }

                                                                <button type="button"
                                                                        className="btn btn-labeled bg-pri text-white btn-sm"
                                                                        onClick={dupliquerBon}>
                                                                    + DUPLIQUER
                                                                </button>
                                                            </div>
                                                            <br/>
                                                            <div className="btn-group">
                                                                <button type="button"
                                                                        className="btn btn-labeled bg-green btn-sm text-white"
                                                                        data-toggle="modal"
                                                                        data-target="#modalBon">- INFORMATIONS
                                                                </button>
                                                                <button type="button"
                                                                        className="btn btn-labeled bg-success text-white btn-sm"
                                                                        data-toggle="modal"
                                                                        data-target="#modalList">- MODIFIER LOTS ET
                                                                    LIGNES
                                                                </button>
                                                            </div>
                                                        </>
                                                    }

                                                    <div className="btn-group">
                                                        {bon.etat === "valide" &&
                                                            <a className="btn bg-pink text-white m-b-10 waves-effect"
                                                               onClick={devalideBon}><i
                                                                className="fa fa-check-circle"/> DÉVALIDER</a>
                                                        }
                                                        {bon.etat !== "valide" &&
                                                            <button className="btn bg-blue text-white"
                                                                    onClick={valideBon}><i
                                                                className="fa fa-check-circle"/> VALIDER
                                                            </button>
                                                        }

                                                        <a href={`/crm/doc/attache/${bon.id}/bon/non`}
                                                           className="btn bg-deep-orange text-white"><i
                                                            className="fa fa-envelope"/> MAIL</a>

                                                        <button className="btn bg-pri text-white"
                                                                onClick={pdfBon}><i
                                                            className="fas fa-file-pdf"/> PDF
                                                        </button>

                                                        <ReactHTMLTableToExcel
                                                            id="test-table-xls-button"
                                                            className="btn bg-green text-white"
                                                            table="bon2excel"
                                                            filename={`Bon de commande N° ${bon.numbon}`}
                                                            sheet="tablexls"
                                                            buttonText="EXCEL"/>
                                                        {bon.etat !== "valide" &&
                                                            <button className="btn bg-pink text-white"
                                                                    onClick={delBon}><i
                                                                className="fa fa-trash"/> SUPPRIMER
                                                            </button>
                                                        }
                                                        <button type="button"
                                                                className="btn  bg-info text-white"
                                                                data-toggle="modal" data-target="#modalMise">- MISE EN
                                                            FORME
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
                                                    <div className="btn-group">
                                                        {bon.etat === "valide" &&
                                                            <button type="button"
                                                                    className="btn btn-labeled bg-purple text-white btn-sm"
                                                                    data-toggle="modal"
                                                                    data-target="#modalSolder">EFFECTUER LE PAIEMENT
                                                            </button>
                                                        }
                                                    </div>
                                                </div>
                                            }
                                            {bon.type === "cps" &&
                                                <div className="text-center">
                                                    {bon.etat === "save" &&
                                                        <>
                                                        <div className="btn-group">
                                                                <button type="button"
                                                                        className="btn btn-labeled bg-blue text-white btn-sm"
                                                                        data-toggle="modal"
                                                                        data-target="#modalChoisir">CHOISIR
                                                                    UN BIEN
                                                                    /
                                                                    SERVICE
                                                                </button>
                                                            </div>
                                                            <br/>
                                                        </>
                                                    }

                                                    <div className="btn-group">
                                                        <a href={`/crm/doc/attache/${bon.id}/bon/non`}
                                                           className="btn bg-deep-orange text-white"><i
                                                            className="fa fa-envelope"/> MAIL</a>

                                                        <button className="btn bg-pri text-white"
                                                                onClick={pdfBon}><i
                                                            className="fas fa-file-pdf"/> PDF
                                                        </button>

                                                        <ReactHTMLTableToExcel
                                                            id="test-table-xls-button"
                                                            className="btn bg-green text-white"
                                                            table="bon2excel"
                                                            filename={`Bon de commande N° ${bon.numbon}`}
                                                            sheet="tablexls"
                                                            buttonText="EXCEL"/>
                                                        <button type="button"
                                                                className="btn  bg-info text-white"
                                                                data-toggle="modal" data-target="#modalMise">- MISE EN
                                                            FORME
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
                                                </div>
                                            }
                                        </>
                                    }
                                    <br/>
                                    <table id="bon2excel">
                                        <tr>
                                            <td>
                                                <PrintCommande bon={bon} lignes={lignes} groupes={groupes}
                                                               ref={componentRef}
                                                               renderLigne={renderLigne} renderCaisse={renderCaisse}
                                                               renderGroupe={renderGroupe}
                                                               forme={forme}/>
                                            </td>
                                        </tr>
                                    </table>
                                </>
                            }
                            {deviceType === "mobile" &&
                                <>
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
                                                     left: "50px",
                                                     position: "absolute"
                                                 }}>

                                                <a href={`/crm/chantier/${bon.chantier.id}`}
                                                   className="btn bg-green btn-block btn-labeled col-white">ACCÉDER AU
                                                    CHANTIER</a>

                                                <button type="button"
                                                        className="btn bg-blue btn-block btn-labeled col-white"
                                                        data-toggle="modal" data-target="#modalBon">CRÉER UN NOUVEAU BON
                                                </button>
                                                <li role="separator" className="divider"></li>
                                                {bon.etat === "save" &&
                                                    <>

                                                        <button type="button"
                                                                className="btn btn-block btn-labeled bg-pri text-white"
                                                                data-toggle="modal" data-target="#modalGroup">AJOUTER
                                                            DES LOTS
                                                        </button>

                                                        <button type="button"
                                                                className="btn btn-block btn-labeled bg-pri text-white"
                                                                data-toggle="modal" data-target="#modalChoisir">CHOISIR
                                                            UN BIEN / SERVICE
                                                        </button>
                                                        {bon.type !== "prepa" &&
                                                            <button type="button"
                                                                    className="btn btn-block btn-labeled bg-pri text-white"
                                                                    data-toggle="modal"
                                                                    data-target="#modalLigne">AJOUTER
                                                                UNE LIGNE
                                                            </button>
                                                        }

                                                        <button type="button"
                                                                className="btn btn-block btn-labeled bg-pri text-white btn-sm"
                                                                onClick={dupliquerBon}>
                                                            DUPLIQUER CE BON
                                                        </button>
                                                        <li role="separator" className="divider"></li>
                                                        <button type="button"
                                                                className="btn btn-block btn-labeled bg-pink btn-sm text-white"
                                                                data-toggle="modal"
                                                                data-target="#modalInfo">MODIFIER LES INFORMATIONS
                                                        </button>

                                                        <button type="button"
                                                                className="btn btn-block btn-labeled bg-pink text-white btn-sm"
                                                                data-toggle="modal" data-target="#modalMise">MISE EN
                                                            FORME DU BON
                                                        </button>
                                                        <br/>
                                                    </>
                                                }

                                            </div>
                                        </div>
                                        {bon.etat === "valide" &&
                                            <a className="btn bg-pink text-white m-r-5 waves-effect"
                                               onClick={devalideBon}><i
                                                className="fa fa-check-circle"/> DÉVALIDER
                                            </a>
                                        }
                                        {bon.etat !== "valide" &&
                                            <button className="btn bg-blue text-white m-r-5" onClick={valideBon}><i
                                                className="fa fa-check-circle"/> VALIDER
                                            </button>
                                        }
                                        {bon.etat !== "valide" &&
                                            <button className="btn bg-pink text-white m-r-5"><i
                                                className="fa fa-trash"/> SUPPRIMER
                                            </button>
                                        }

                                        {bon.etat === "save" &&
                                            <>
                                                <button className="btn bg-indigo text-white m-r-5"
                                                        onClick={handlePrint}><i
                                                    className="fa fa-print"/> IMPRIMER
                                                </button>

                                                <button className="btn bg-deep-orange text-white m-r-5"
                                                        onClick={handlePrint}><i
                                                    className="fa fa-envelope"/> MAIL
                                                </button>

                                                <button className="btn bg-pri text-white"
                                                        onClick={pdfBon}><i
                                                    className="fas fa-file-pdf"/> PDF
                                                </button>

                                                <ReactHTMLTableToExcel
                                                    id="test-table-xls-button"
                                                    className="btn bg-green text-white m-r-5"
                                                    table="bon2excel"
                                                    filename={`Bon de commande N° ${bon.numbon}`}
                                                    sheet="tablexls"
                                                    buttonText="EXCEL"/><br/>

                                            </>
                                        }
                                    </p>

                                    <table id="borde"
                                           style={{width: "100%", marginTop: "30px", backgroundColor: "#FFF"}}>
                                        <tr className="bg-pri text-white"
                                            style={{fontSize: "12px"}}>
                                            <th style={{textAlign: "left", padding: "10px"}}>
                                                DÉSIGNATION
                                            </th>
                                        </tr>
                                        {renderGroupeMobile}
                                        {renderLigneMobile}
                                        <tr>
                                            <td className="text-right"><b>TOTAL HT : </b>< NumberFormat
                                                numb={bon.totalht}/>&nbsp;&nbsp;&nbsp;</td>
                                        </tr>
                                        {bon.aarem === 'oui' &&
                                            <tr>
                                                <td className="text-right p-r-10"><b>REMISE : </b><NumberFormat
                                                    numb={bon.vremise}/>&nbsp;&nbsp;&nbsp;</td>
                                            </tr>
                                        }
                                        <tr>
                                            <td className="text-right p-r-10"><b>TVA({bon.tva}%): </b><NumberFormat
                                                numb={bon.vtva}/>&nbsp;&nbsp;&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td className="text-right p-r-10 col-blue font-bold"><b>BON TOTAL TTC : </b><NumberFormat
                                                numb={bon.totalttc}/>&nbsp;&nbsp;&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td className="text-right p-r-10 font-bold">
                                                <p style={{clear: "both"}}/><br/>
                                                <p className="text-center">
                                                    Arrêté le bon à la somme
                                                    de:<br/> {numberToLetters(parseInt(bon.totalttc), {lang: 'fr'})}
                                                    <span><b> {bon.monnaie.code}</b></span>
                                                </p>
                                                <br/>
                                                {bon.conditions !== null &&
                                                    <>
                                                        <p style={{float: "left", color: "#4e73df"}}><u>INFORMATIONS
                                                            ADDITIONNELLES</u></p>
                                                        <p style={{clear: "both"}}/>
                                                        <p style={{color: "#000000"}}
                                                           dangerouslySetInnerHTML={{__html: bon.conditions}}/>
                                                    </>
                                                }
                                            </td>
                                        </tr>
                                    </table>

                                </>
                            }
                            <br/><br/><br/><br/>
                        </div>
                    </div>
                </>
            }
        </>
    )
}

try {
    const container = document.getElementById('shacontentCommande');
    const root = createRoot(container);
    root.render(<Commande/>);
} catch (e) {
}