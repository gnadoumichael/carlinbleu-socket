import React, {useEffect, useState} from "react";
import {createRoot} from 'react-dom/client';
import axios from "axios";
import ReactHTMLTableToExcel from 'react-html-table-to-excel';
import NumberFormat from "../../fonctions/NumberFormat";
import Moment from 'react-moment';
import $ from "jquery";
import * as moment from "moment/moment";

const Etats = () => {

    let furne = $("#fournes").val();
    let purser = $("#prestas").val();
    let moshow = $("#moshow").val();
    let idperson = $("#idperson").val();
    let sumRegle = $("#sumRegle").val();
    let sumDepense = $("#sumDepense").val();

    const [clients, setClients] = useState([]);
    const [prestas, setPrestas] = useState([]);
    const [fourne, setFourne] = useState([]);
    const [persos, setPersos] = useState([]);
    const [caissin, setCaissin] = useState([]);
    const [caissperso, setCaissPerso] = useState([]);
    const [devjour, setDevJour] = useState([]);
    const [bonjour, setBonJour] = useState([]);
    const [caisjour, setCaisJour] = useState([]);
    const [decjour, setDecJour] = useState([]);
    const [facjour, setFacJour] = useState([]);
    const [inventes, setInventes] = useState([]);

    let tozcout = 0;
    let tozregle = 0;
    let tozsolde = 0;
    let totdecnv = 0;
    let totdecv = 0;
    let totfacnv = 0;
    let totfacv = 0;
    let tosoldeClient = 0;
    let frmoisinterne = 0;

    const formatNumber = (num, precision, separator) => {
        let parts;
        num = Number(num);
        num = (typeof precision !== 'undefined' ? num.toFixed(precision) : num).toString();
        parts = num.split('.');
        parts[0] = parts[0].toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1' + (separator));
        return parts.join(',');
    }
    $("#getDepenses").off().on("change", async function () {
        $('#bonMoisInterne tbody').children().remove()
        let bivcount = 0;
        let frvinterne = 0;
        let dew = $(this).val();
        caissin.map((caiss) => {
            let dez = moment(caiss.date).format('MM-YYYY');
            if (dew === dez) {
                bivcount = bivcount + 1;
                frvinterne = frvinterne + caiss.montant;
                let pok = '';
                if (caiss.personnel !== null) {
                    pok = caiss.personnel.noms.toUpperCase();
                }
                $('#bonMoisInterne tbody').append('' +
                    '<tr key={caiss.id} class="paginate12">' +
                    '<td align="center" class="mw30"><input class="form-check-input" type="checkbox" value={caiss.id} name="checkBinvaMo" id="checkBinvaMo"/></td>' +
                    '<td class="text-center"><a href="#"><i class="fa fa-eye col-green" aria-hidden="true"></i></a></td>' +
                    ' <td><Moment format="DD/MM/YYYY">' + moment(caiss.date).locale("fr").format('L') + '</Moment></td>' +
                    '<td> <a href={`/crm/caisse/${caiss.id}/${caiss.chantier.id}`}>' +
                    '<span class="badge badge-pill badge-primary m-r-5">V</span>' + caiss.numcaisse + '</a></td>' +
                    '<td>' + pok + '</td>' +
                    ' <td>' + caiss.caissereference + '</td>' +
                    '<td class="text-right">' + formatNumber(caiss.montant, 2, ' ') + '</td>' +
                    '<td class="text-left pri bolo600"><i className="fa fa-user pri">' + caiss.dobyuser.nom.toUpperCase() + ' ' + caiss.dobyuser.prenoms.toUpperCase() + '</td>' +
                    '</tr>'
                )
            }
        });
    });

    const shasha = (a, b) => {
        document.getElementById('shacontent').innerText = ' ';
        const frame = document.createElement("IFRAME");
        frame.setAttribute("style", 'width: 100%; height: 100%; border: none;');
        frame.setAttribute("id", 'frame');
        frame.setAttribute("src", '/crm/doc/attache/' + a + '/' + b + '/oui');
        document.getElementById('shacontent').appendChild(frame)
        $('#large').modal('toggle');
    }
    const valideDevis = async (a) => {
        window.$('#Traitement').modal('show');
        await axios({
            method: 'GET', url: '/crm/devis/valider/' + a,
        }).then(function (response) {
            location.reload();
        }).catch(function (error) {
            $('#Traitement').modal('toggle')
            window.$('#ModalErreur').modal('show');
        });
    }
    const devalideDevis = async (a) => {
        $('#ConfirmDevaDevis').modal('show');
        $('#acceptDeva').on("click", async function () {
            $('#ConfirmDevaDevis').modal('toggle');
            $('#Traitement').modal('show');
            await axios({
                method: 'GET', url: '/crm/devis/devalider/' + a,
            }).then(function (response) {
                location.reload();
            }).catch(function (error) {
                $('#Traitement').modal('toggle')
                $('#ModalErreur').modal('show');
            });
        });
    }
    const valideDecompte = async (a) => {
        window.$('#Traitement').modal('show');
        await axios({
            method: 'GET', url: '/crm/decompte/valider/' + a,
        }).then(function (response) {
            location.reload();
        }).catch(function (error) {
            $('#Traitement').modal('toggle')
            window.$('#ModalErreur').modal('show');
        });
    }
    const devalideDecompte = async (a) => {
        $('#ConfirmDevaDevis').modal('show');
        $('#acceptDeva').on("click", async function () {
            $('#ConfirmDevaDevis').modal('toggle');
            $('#Traitement').modal('show');
            await axios({
                method: 'GET', url: '/crm/decompte/devalider/' + a,
            }).then(function (response) {
                location.reload();
            }).catch(function (error) {
                $('#Traitement').modal('toggle')
                $('#ModalErreur').modal('show');
            });
        });
    }
    const valideBon = async (a) => {
        $('#Traitement').modal('show');
        await axios({
            method: 'GET', url: '/crm/bon/valider/' + a,
        }).then(function (response) {
            location.reload()
        }).catch(function (error) {
            $('#Traitement').modal('toggle')
            $('#ModalErreur').modal('show');
        });
    }
    const devalideBon = async (a) => {
        $('#ConfirmDelete').modal('show')
        $('#accept').click(function () {
            $('#ConfirmDelete').modal('hide')
            $('#Traitement').modal('show')
            $.ajax({
                type: 'GET',
                url: '/crm/caisse/devalider/' + a,
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
    const valideCaisse = async (a) => {
        $('#Traitement').modal('show');
        $.ajax({
            type: 'GET', url: '/crm/caisse/valider/' + a, success: function (respdata, textStatus, jqXHR) {
                location.reload()
            }, error: function (xhr, resp, text) {
                $('#Traitement').modal('toggle')
                $('#ModalErreur').modal('show')
            },
        })
    }
    const devalideCaisse = async (a) => {
        $('#ConfirmDelete').modal('show')
        $('#accept').click(function () {
            $('#ConfirmDelete').modal('hide')
            $('#Traitement').modal('show')
            $.ajax({
                type: 'GET',
                url: '/crm/caisse/devalider/' + a,
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
    const delBon = async (a) => {
        $('#Traitement').modal('show');
        await axios({
            method: 'DELETE', url: '/crm/bon/del/' + a,
        }).then(function (response) {
            location.reload()
        }).catch(function (error) {
            $('#Traitement').modal('toggle')
            $('#ModalErreur').modal('show');
        });
    }
    const deleteCaisse = async (a) => {
        $('#Traitement').modal('show');
        await axios({
            method: 'DELETE', url: '/crm/caisse/del/' + a,
        }).then(function (response) {
            location.reload()
        }).catch(function (error) {
            $('#Traitement').modal('toggle')
            $('#ModalErreur').modal('show');
        });
    }
    const fetchClients = async () => {
        const dde = JSON.parse($('#jsonclients').val());
        setClients(dde);
    };
    const fetchPresta = async () => {
        const dde = JSON.parse($('#jsonprestas').val());
        setPrestas(dde);
    };
    const fetchFourne = async () => {
        const dede = JSON.parse($('#jsonfournes').val());
        setFourne(dede);
    };
    const fetchPersos = async () => {
        const dede = JSON.parse($('#jsonpersos').val());
        setPersos(dede);
    };
    const fetchCaisseInterne = async () => {
        const dede = JSON.parse($('#caisseinterne').val());
        setCaissin(dede);
    };
    const fetchCaissePerso = async () => {
        const dedo = JSON.parse($('#caisseperso').val());
        setCaissPerso(dedo);
    };
    const fetchDevJour = async () => {
        const dd = JSON.parse($('#jsondevis').val());
        setDevJour(dd);
    };
    const fetchBonJour = async () => {
        const dd = JSON.parse($('#jsonbon').val());

        setBonJour(dd);
    };
    const fetchCaisJour = async () => {
        const dd = JSON.parse($('#jsoncaisse').val());
        setCaisJour(dd);
    };
    const fetchDecJour = async () => {
        const dd = JSON.parse($('#jsondec').val());
        setDecJour(dd);
    };
    const fetchFacJour = async () => {
        const dd = JSON.parse($('#jsonfac').val());
        setFacJour(dd);
    };

    const fetchInventes = async () => {
        const dd = JSON.parse($('#jsoninventes').val());
        setInventes(dd);
    };
    useEffect(() => {
        fetchClients();
        fetchPresta();
        fetchFourne();
        fetchPersos();
        fetchCaisseInterne();
        fetchCaissePerso();
        fetchDevJour();
        fetchBonJour();
        fetchCaisJour();
        fetchDecJour();
        fetchFacJour();
        fetchInventes();
    }, []);

    const showChantier = (id) => {
        if ($('.' + id + 'clie').hasClass("hide")) {
            $('.' + id + 'clie').removeClass('hide');
        } else {
            $('.' + id + 'clie').addClass('hide');
        }
    }
    const showClicli = (id) => {
        if ($('.' + id + 'clicli').hasClass("hide")) {
            $('.' + id + 'clicli').removeClass('hide');
        } else {
            $('.' + id + 'clicli').addClass('hide');
        }
    }
    const showDevsInve = (id) => {
        if ($('.' + id + 'chana').hasClass("hide")) {
            $('.' + id + 'chana').removeClass('hide');
        } else {
            $('.' + id + 'chana').addClass('hide');
        }
    }
    const showBonnInve = (id) => {
        if ($('.' + id + 'devv').hasClass("hide")) {
            $('.' + id + 'devv').removeClass('hide');
        } else {
            $('.' + id + 'devv').addClass('hide');
        }
    }
    const showLignesInve = (id) => {
        if ($('.' + id + 'clacla').hasClass("hide")) {
            $('.' + id + 'clacla').removeClass('hide');
        } else {
            $('.' + id + 'clacla').addClass('hide');
        }
    }
    const showChantierContent = (id) => {
        if ($('.' + id + 'chan').hasClass("hide")) {
            $('.' + id + 'chan').removeClass('hide');
        } else {
            $('.' + id + 'chan').addClass('hide');
        }
    }
    const showBonPresta = (id) => {
        if ($('.' + id + 'presta').hasClass("hide")) {
            $('.' + id + 'presta').removeClass('hide');
        } else {
            $('.' + id + 'presta').addClass('hide');
        }
    }
    const showBonFourne = (id) => {
        if ($('.' + id + 'foune').hasClass("hide")) {
            $('.' + id + 'foune').removeClass('hide');
        } else {
            $('.' + id + 'foune').addClass('hide');
        }
    }
    const showBonCharge = (id) => {
        if ($('.' + id + 'charge').hasClass("hide")) {
            $('.' + id + 'charge').removeClass('hide');
        } else {
            $('.' + id + 'charge').addClass('hide');
        }
    }

    const showBonPerso = (id) => {
        if ($('.' + id + 'periso').hasClass("hide")) {
            $('.' + id + 'periso').removeClass('hide');
        } else {
            $('.' + id + 'periso').addClass('hide');
        }
    }

    $('#addClient').off().on("click", function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#loadClient').css('display', '');
            $('#addClient').hide()
            $('#closeClient').hide()
            axios({
                method: 'POST',
                url: '/crm/client/add',
                data: JSON.stringify($('#addClientForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
            }).then(function (response) {
                location.reload();
            }).catch(function (error) {
                $('#Traitement').modal('hide');
                $('#ModalErreur').modal('show');
            });
        }
    })
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
    $('#addPresta').off().on("click", function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#addPresta').hide()
            $('#closePresta').hide()
            $('#loadPresta').css('display', '')
            $.ajax({
                type: 'POST',
                url: '/crm/fournisseur/presta/add/3',
                data: JSON.stringify($('#addPrestataireForm').serializeObject()),
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
                    window.location.href = '/crm/etat/';
                },
                error: function (xhr, resp, text) {
                    $('#ModalErreur').modal('show')
                },
            })
        }
    })
    $('#updatePresta').off().on("click", function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#updatePresta').hide()
            $('#closePresta').hide()
            $('#loadPresta').css('display', '')
            $.ajax({
                type: 'POST',
                url: '/crm/fournisseur/presta/update/' + purser,
                data: JSON.stringify($('#addPrestataireForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    window.location.href = '/crm/etat/';
                },
                error: function (xhr, resp, text) {
                    $('#ModalErreur').modal('show')
                },
            })
        }
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
    $('#secha').off().on("change", function (event) {
        event.preventDefault();
        const $seldev = $('.seldev');
        $('.seldev').html('');
        $.ajax({
            type: 'POST',
            url: '/crm/devis/gets/' + this.value,
            contentType: 'application/json; charset=utf-8',
            success: function (respdata, textStatus, jqXHR) {
                $(".dide").empty();
                $(".dide").append('<span class="col-pink">Chargement des devis</span> <img src="/img/loading.gif" style="width: 20px">');
                respdata.map((de) => {
                    const group = $('<option value=' + de.id + '>Devis Nº ' + de.iddevis + '</option>');
                    group.appendTo($seldev);
                });
                $(".dide").empty();
                $(".dide").append('<span class="col-green">Devis téléchargés</span>');
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    })
    $('#addBonPresta').off().on("click", function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#addBonPresta').hide()
            $('#closeBonPresta').hide()
            $('#loadBonPresta').css('display', '')
            $('#editor7').val(CKEDITOR.instances['editor7'].getData())
            $('#editor8').val(CKEDITOR.instances['editor8'].getData())
            $.ajax({
                type: 'POST',
                url: '/crm/bon/presta/add',
                data: JSON.stringify($('#addBonPrestaForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    window.location.href = '/crm/bon/' + respdata['result'][0]['numbon'] + '/' + respdata['result'][0]['idchantier']
                },
                error: function (xhr, resp, text) {
                    $('#ModalErreur').modal('show')
                },
            })
        }
    })
    $('#closeFourn').off().on("click", function (event) {
        event.preventDefault()
        window.location.href = '/crm/etat/';
    })
    $('#addBonFourn').off().on("click", function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#addBonFourn').hide()
            $('#closeBonFourn').hide()
            $('#loadBonFourn').css('display', '')
            $('#editor9').val(CKEDITOR.instances['editor9'].getData())
            $('#editor10').val(CKEDITOR.instances['editor10'].getData())
            $.ajax({
                type: 'POST',
                url: '/crm/bon/fourn/add',
                data: JSON.stringify($('#addBonFournForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    window.location.href = '/crm/bon/' + respdata['result'][0]['numbon'] + '/' + respdata['result'][0]['idchantier']
                },
                error: function (xhr, resp, text) {
                    $('#ModalErreur').modal('show')
                },
            })
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
                    const group = $('<option value=' + bo.id + '>Bon Nº ' + bo.numbon + ' | ' + bo.client.nomclient + ' | TTC: ' + bo.totalttc + '</option>');
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
                    if (jqXHR.status == '201') {
                        $('#mdModalCaisse').modal('toggle')
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
    $("#facfac").off().on("change", async function () {
        const id = $('select[name="facfac"] :selected').attr('class');

        $(".dvface").empty();
        $(".dvface").append('<span class="col-pink">Règlements effectués:... </span> <img src="/img/loading.gif" style="width: 20px">');
        $(".dvfac").empty();
        $(".dvfac").append('<span class="col-pink">Facture Total TTC:... </span> <img src="/img/loading.gif" style="width: 20px">');
        $(".dvfaces").empty();
        $(".dvfaces").append('<span class="col-pink">Reste à régler:... </span> <img src="/img/loading.gif" style="width: 20px">');
        await axios({
            method: 'GET', url: '/crm/facture/getreste/' + id, dataType: 'json',
        }).then(function (response) {
            let data = response.data;
            $("#montant").val(data["reste"].replaceAll(' ', ''));
            $(".dvfac").empty();
            $(".dvfac").append('<span class="col-blue-grey bolo700 h5">Facture Total TTC:</span><span class="col-pink bolo700 h5"> ' + data["ttc"] + '</span>');
            $(".dvface").empty();
            $(".dvface").append('<span class="col-blue-grey bolo700 h5">Règlements effectués:</span><span class="col-pink bolo700 h5"> ' + data["regler"] + '</span>');
            $(".dvfaces").empty();
            $(".dvfaces").append('<span class="col-blue-grey bolo700 h5">Reste à régler:</span><span class="col-pink bolo700 h5"> ' + data["reste"] + '</span>');
            $(".resta").append(data["reste"]);
        });

    })
    $('#addReglementChantiers').off().on("click", function (event) {
        event.preventDefault();
        if ($(this).closest('form').valid()) {
            let rest = $('.resta').html().replaceAll(' ', '');
            $(".restu").append(" ");
            if (parseFloat($("#montant").val()) <= parseFloat(rest)) {
                $('#addReglementChantiers').hide()
                $('#closeReglement').hide()
                $('#loadReglement').css('display', '')
                $.ajax({
                    type: 'POST',
                    url: '/crm/chantiers/reglement/chantiers/add',
                    data: JSON.stringify($('#addReglementForm').serializeObject()),
                    contentType: 'application/json; charset=utf-8',
                    dataType: 'json',
                    success: function (respdata, textStatus, jqXHR) {
                        if (jqXHR.status == '201') {
                            $('#modalReglement').modal('toggle')
                            window.location.href = '/crm/client/' + respdata['result'];
                        }
                    },
                    error: function (xhr, resp, text) {
                        $('#modalReglement').modal('toggle')
                        $('#ModalErreur').modal('show')
                        $('#addReglementChantiers').show()
                        $('#closeReglement').show()
                        $('#loadReglement').css('display', 'none')
                    },
                })
            } else {
                $(".restu").append("Montant supérieur à la somme restante.");
            }
        }
    })
    $('#addPers').off().on("click", function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#addPers').hide()
            $('#closePers').hide()
            $('#loadPers').css('display', '')
            $.ajax({
                type: 'POST',
                url: '/crm/personnel/add',
                data: JSON.stringify($('#addPersonnelForm').serializeObject()),
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
    $('#updatePers').off().on("click", function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#updatePers').hide()
            $('#closePers').hide()
            $('#loadPers').css('display', '')
            $.ajax({
                type: 'POST',
                url: '/crm/personnel/update/' + idperson,
                data: JSON.stringify($('#addPersonnelForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    window.location.href = '/crm/etat/';
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
            $('#closeInter').hide()
            $('#loadInter').css('display', '')
            axios({
                method: 'POST',
                url: '/crm/personnel/operation/update/' + idperson,
                data: JSON.stringify($('#addInterForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
            }).then(function (response) {
                window.location.href = '/crm/etat/';
            }).catch(function (error) {
                $('#Traitement').modal('hide');
                $('#ModalErreur').modal('show');
            });
        }
    })
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
    $('#adderCaisse').off().on("click", function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#adderCaisse').hide()
            $('#closerCaisse').hide()
            $('#loaderCaisse').css('display', '')
            $('#editor19').val(CKEDITOR.instances['editor19'].getData())
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
                    if (jqXHR.status == '201') {
                        $('#modalCaissePerso').modal('toggle');
                        window.location.href = '/crm/caisse/' + respdata['result'][0]['numcaisse'] + '/' + respdata['result'][0]['idchantier']
                    }
                },
                error: function (xhr, resp, text) {
                    $('#modalCaissePerso').modal('toggle')
                    $('#ModalErreur').modal('show')
                },
            })
        }
    })
    $('#addChantier').off().on("click", async function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#divChantier').hide()
            $('#loadChantier').css('display', '')
            $('#editor').val(CKEDITOR.instances['editor'].getData())
            $.ajax({
                type: 'POST',
                url: '/crm/chantiers/addetatchantier',
                data: JSON.stringify($('#addChantierForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    window.location.href = '/crm/chantiers';
                },
                error: function (xhr, resp, text) {
                    $('#ModalErreur').modal('show')
                },
            })
        }
    })

    const renderEtats = clients.map((client) => {
        let zcout = 0;
        let countdevva = 0;
        let zregle = 0;
        let zsolde = 0;
        let countdecnv = 0;
        let countdecv = 0;
        let countfacnv = 0;
        let countfacv = 0;
        let soldeClient = 0;

        let deviss = client.devis;
        let decomptes = client.decomptes;
        let factures = client.factures
        let chantiers = client.chantiers;
        if (client.type === null && client.corbeille === null) {
            deviss.map((devis) => {
                if (devis.etat === "valide" && devis.corbeille === null) {
                    countdevva = parseFloat(countdevva) + 1;
                    zcout = parseFloat(zcout) + parseFloat(devis.totalttc);
                }
            });
            chantiers.map((chantier) => {
                if (chantier.corbeille === null) {
                    zregle = parseFloat(zregle) + parseFloat(chantier.reglement);
                }
            });
            if (countdevva > 0) {
                decomptes.map((decompte) => {
                    if (decompte.devis.ptva === "non") {
                        if (decompte.etat === "save") {
                            countdecnv = parseFloat(countdecnv) + parseFloat(decompte.apayer);
                        }
                        if (decompte.etat === "valide") {
                            countdecv = parseFloat(countdecv) + parseFloat(decompte.apayer);
                        }
                    } else {
                        if (decompte.etat === "save") {
                            countdecnv = parseFloat(countdecnv) + (parseFloat(decompte.apayer) + ((parseFloat(decompte.apayer) * parseFloat(decompte.devis.tva)) / 100));
                        }
                        if (decompte.etat === "valide") {
                            countdecv = parseFloat(countdecv) + (parseFloat(decompte.apayer) + ((parseFloat(decompte.apayer) * parseFloat(decompte.devis.tva)) / 100));
                        }
                    }
                });
                factures.map((facture) => {
                    if (facture.type === "devis") {
                        if (facture.etat === "save") {
                            countdecv = parseFloat(countdecv) + parseFloat(facture.totalttc);
                            countfacnv = parseFloat(countfacnv) + parseFloat(facture.totalttc);
                        }
                        if (facture.etat === "valide") {
                            countdecv = parseFloat(countdecv) + parseFloat(facture.totalttc);
                            countfacv = parseFloat(countfacv) + parseFloat(facture.totalttc);
                        }
                    }
                    if (facture.type === "decompte") {
                        if (facture.etat === "save") {
                            countfacnv = parseFloat(countfacnv) + parseFloat(facture.totalttc);
                        }
                        if (facture.etat === "valide") {
                            countfacv = parseFloat(countfacv) + parseFloat(facture.totalttc);
                        }
                    }
                    if (facture.type === "acompte") {
                        let reles = facture.relever;
                        if (facture.etat === "save") {
                            countdecv = parseFloat(countdecv) + parseFloat(facture.totalttc);
                            countfacnv = parseFloat(countfacnv) + parseFloat(facture.totalttc);
                            reles.map((rele) => {
                                countfacnv = parseFloat(countfacnv) - parseFloat(rele.montant);
                                countfacv = parseFloat(countfacv) + parseFloat(rele.montant);
                            })
                        }
                        if (facture.etat === "valide") {
                            countdecv = parseFloat(countdecv) + parseFloat(facture.totalttc);
                            countfacv = parseFloat(countfacv) + parseFloat(facture.totalttc);
                        }
                    }
                })
            }
            soldeClient = parseFloat(countdecv) - (parseFloat(countfacnv) + parseFloat(countfacv));
            zsolde = zcout - zregle;
        }
        let chans = client.chantiers;
        let renderChantiers = chans.map((chan) => {
            if (chan.corbeille === null) {
                let ssdecnv = 0;
                let ssdecv = 0;
                let ssfacnv = 0;
                let ssfacv = 0;
                let coaccnv = 0;
                let coaccv = 0;
                let soldeCli = 0;
                let decs = chan.decomptes;
                let facs = chan.factures;

                decs.map((dec) => {
                    if (dec.devis.ptva === "non") {
                        if (dec.etat === "save") {
                            ssdecnv = parseFloat(ssdecnv) + parseFloat(dec.apayer);
                        }
                        if (dec.etat === "valide") {
                            ssdecv = parseFloat(ssdecv) + parseFloat(dec.apayer);
                        }
                    } else {
                        if (dec.etat === "save") {
                            ssdecnv = parseFloat(ssdecnv) + (parseFloat(dec.apayer) + parseFloat((parseFloat(dec.apayer) * parseFloat(dec.devis.tva)) / 100));
                        }
                        if (dec.etat === "valide") {
                            ssdecv = parseFloat(ssdecv) + (parseFloat(dec.apayer) + parseFloat((parseFloat(dec.apayer) * parseFloat(dec.devis.tva)) / 100));
                        }
                    }
                });
                facs.map((fac) => {
                    if (fac.type === "acompte") {
                        let rels = fac.relever;
                        if (fac.etat === "save") {
                            ssfacnv = parseFloat(ssfacnv) + parseFloat(fac.totalttc);
                            coaccv = parseFloat(coaccv) + parseFloat(fac.totalttc);
                            rels.map((rel) => {
                                ssfacnv = parseFloat(ssfacnv) - parseFloat(rel.montant);
                            })
                            rels.map((rel) => {
                                ssfacv = parseFloat(ssfacv) + parseFloat(rel.montant);
                            })
                        }
                        if (fac.etat === "valide") {
                            ssfacv = parseFloat(ssfacv) + parseFloat(fac.totalttc);
                            coaccv = parseFloat(coaccv) + parseFloat(fac.totalttc);
                        }
                    }
                    if (fac.type === "devis") {
                        if (fac.etat === "save") {
                            ssfacnv = parseFloat(ssfacnv) + parseFloat(fac.totalttc);
                            coaccv = parseFloat(coaccv) + parseFloat(fac.totalttc);
                        }
                        if (fac.etat === "valide") {
                            ssfacv = parseFloat(ssfacv) + parseFloat(fac.totalttc);
                            coaccv = parseFloat(coaccv) + parseFloat(fac.totalttc);
                        }
                    }
                    if (fac.type === "decompte") {
                        if (fac.etat === "save") {
                            ssfacnv = parseFloat(ssfacnv) + parseFloat(fac.totalttc);
                        }
                        if (fac.etat === "valide") {
                            ssfacv = parseFloat(ssfacv) + parseFloat(fac.totalttc);
                        }
                    }
                });

                ssdecnv = parseFloat(ssdecnv) + parseFloat(coaccnv);
                ssdecv = parseFloat(ssdecv) + parseFloat(coaccv);
                soldeCli = parseFloat(ssdecv) - parseFloat(ssfacnv + ssfacv);

                let ssdevis = chan.devis;
                let ssdecomptes = chan.decomptes;
                let ssfacs = chan.factures;

                let ccde = 0;
                let ccdec = 0
                let ccfa = 0;

                let renderDevis = ssdevis.map((deev) => {
                    ccde = ccde + 1;
                    return (<tr key={deev.id} className={chan.id + 'chan' + ' hide'}>
                        <td className="ml60">
                            {deev.etat === "save" && <a onClick={() => {
                                valideDevis(deev.id)
                            }} className="badge badge-pill badge-blue-grey" style={{marginRight: "5px"}}>V</a>}
                            {deev.etat === "valide" && <a onClick={() => {
                                devalideDevis(deev.id)
                            }} className="badge badge-pill bg-blue" style={{marginRight: "5px"}}>V</a>}
                            <a href="#" onClick={() => {
                                shasha(deev.id, 'imprimdevis')
                            }} style={{marginRight: "5px"}}><i
                                className="fa fa-eye col-green"
                                aria-hidden="true"></i></a>
                            <a href={`/crm/devis/${deev.id}/${chan.id}`} className="col-black bolo600">Devis
                                Nº {deev.iddevis}</a></td>
                        <td className="text-right col-black"><NumberFormat numb={deev.totalttc}/></td>
                        <td className="text-right col-black"><NumberFormat numb={deev.totalht}/></td>
                        <td className="text-left col-black ml30" style={{marginTop: "-5px"}} colSpan="6"
                            dangerouslySetInnerHTML={{__html: deev.devreference}}/>
                    </tr>)
                });
                let renderDecomptes = ssdecomptes.map((deec) => {
                    ccdec = ccdec + 1;
                    return (<>
                        <tr key={deec.id} className={chan.id + 'chan' + ' hide'}>
                            <td className="col-black bolo600 ml60">
                                {deec.etat === "save" && <a onClick={() => {
                                    valideDecompte(deec.id)
                                }} className="badge badge-pill badge-blue-grey" style={{marginRight: "5px"}}>V</a>}
                                {deec.etat === "valide" && <a onClick={() => {
                                    devalideDecompte(deec.id)
                                }} className="badge badge-pill bg-blue" style={{marginRight: "5px"}}>V</a>}
                                <a href="#" onClick={() => {
                                    shasha(deec.id, 'imprimdecompte')
                                }} style={{marginRight: "5px"}}><i
                                    className="fa fa-eye col-green"
                                    aria-hidden="true"></i></a>

                                <a href={`/crm/decompte/${deec.id}/${chan.id}`} className="col-black bolo600"> Décompte
                                    Nº {deec.numdecompte}</a> <a href={`/crm/devis/${deec.devis.id}/${chan.id}`}> |
                                Devis {deec.devis.iddevis}</a></td>
                            <td className="text-right col-black"><NumberFormat numb={deec.ttc}/></td>
                            <td className="text-right col-black"><NumberFormat numb={deec.apayer}/></td>
                            <td className="text-left col-black ml30" colSpan="6">Sur Devis Nº {deec.devis.iddevis}</td>
                        </tr>
                    </>)
                });
                let renderFactures = ssfacs.map((faac) => {
                    ccfa = ccfa + 1;
                    return (<tr key={faac.id} className={chan.id + 'chan' + ' hide'}>
                        <td className="col-black ml60">
                            {faac.etat === "save" && <span className="badge badge-pill badge-blue-grey"
                                                           style={{marginRight: "5px"}}>V</span>}
                            {faac.etat === "valide" &&
                                <span className="badge badge-pill bg-blue" style={{marginRight: "5px"}}>V</span>}
                            <a href="#" onClick={() => {
                                shasha(faac.id, 'imprimfacture')
                            }} style={{marginRight: "5px"}}><i
                                className="fa fa-eye col-green"
                                aria-hidden="true"></i></a>
                            <a href={`/crm/facture/${faac.id}/${chan.id}`} className="col-black bolo600"> Facture
                                Nº {faac.numfacture}</a>

                            {faac.type === "devis" &&
                                <a href={`/crm/devis/${faac.devis.id}/${chan.id}`}> | Devis {faac.devis.iddevis}</a>
                            }

                            {faac.type === "decompte" &&
                                <a href={`/crm/devis/${faac.decompte.devis.id}/${chan.id}`}> |
                                    Devis {faac.decompte.devis.iddevis}</a>
                            }

                            {faac.type === "acompte" &&
                                <a href={`/crm/devis/${faac.acompte.devis.id}/${chan.id}`}> |
                                    Devis {faac.acompte.devis.iddevis}</a>
                            }

                        </td>
                        <td className="text-right col-black"><NumberFormat numb={faac.totalttc}/></td>
                        <td className="text-right col-black"><NumberFormat numb={faac.totalht}/></td>
                        <td className="text-left col-black ml30" style={{marginTop: "-5px"}} colSpan="6"
                            dangerouslySetInnerHTML={{__html: faac.factreference}}/>
                    </tr>)
                });

                return (<>
                    <tr key={chan.id} className={client.id + 'clie' + ' hide'} onClick={() => {
                        showChantierContent(chan.id)
                    }}>
                        <td className="pri bolo600 ml30"><a href={`/crm/chantier/${chan.id}`}><i
                            className="fa fa-folder-open col-blue "/></a> {chan.nomchantier.toUpperCase()}</td>
                        <td className="text-right pri bolo600"><NumberFormat numb={chan.cout}/></td>
                        <td className="text-right pri bolo600"><NumberFormat numb={chan.reglement}/></td>
                        <td className="text-right pri bolo600"><NumberFormat numb={chan.cout - chan.reglement}/>
                        </td>
                        <td className="text-right pri bolo600"><NumberFormat numb={ssdecnv}/></td>
                        <td className="text-right pri bolo600"><NumberFormat numb={ssdecv}/></td>
                        <td className="text-right pri bolo600"><NumberFormat numb={ssfacnv}/></td>
                        <td className="text-right pri bolo600"><NumberFormat numb={ssfacv}/></td>
                        <td className="text-right pri bolo600"><NumberFormat numb={soldeCli}/></td>
                    </tr>
                    <tr className={chan.id + 'chan' + ' hide'}>
                        <td className="col-deep-orange bolo600 ml30 text-center">Titre</td>
                        <td className="text-right col-deep-orange bolo600">Total TTC</td>
                        <td className="text-right col-deep-orange bolo600">Total HT</td>
                        <td className="text-left col-deep-orange bolo600 ml30" colSpan="6">Référence</td>
                    </tr>
                    {renderDevis}
                    {renderDecomptes}
                    {renderFactures}
                </>)
            }

            return null;

        });

        totdecnv = parseFloat(countdecnv) + parseFloat(totdecnv);
        totdecv = parseFloat(countdecv) + parseFloat(totdecv);
        totfacnv = parseFloat(countfacnv) + parseFloat(totfacnv);
        totfacv = parseFloat(countfacv) + parseFloat(totfacv);
        tozcout = parseFloat(tozcout) + parseFloat(zcout);
        tozregle = parseFloat(tozregle) + parseFloat(zregle);
        tozsolde = parseFloat(tozsolde) + parseFloat(zsolde);
        tosoldeClient = parseFloat(tosoldeClient) + parseFloat(soldeClient);


        return (<>
            {zsolde > 500 && <>
                <tr className="paginate1" key={client.id} onClick={() => {
                    showChantier(client.id)
                }}>
                    <td className="col-black bolo600"><a href={`/crm/client/${client.id}`}><i
                        className="fa fa-folder-open col-pink  "/></a> {client.nomclient.toUpperCase()}</td>
                    <td className="text-right col-blue-grey"><NumberFormat numb={zcout}/></td>
                    <td className="text-right col-blue-grey"><NumberFormat numb={zregle}/></td>
                    {zregle === 0 &&
                        <td className="text-right bg-blue-grey col-white"><NumberFormat numb={zsolde}/></td>}
                    {zregle > 0 &&
                        <td className="text-right bg-deep-purple col-white"><NumberFormat numb={zsolde}/></td>}
                    <td className="text-right col-blue-grey"><NumberFormat numb={countdecnv}/></td>
                    <td className="text-right col-blue-grey"><NumberFormat numb={countdecv}/></td>
                    {countfacnv === 0 &&
                        <td className="text-right bg-blue-grey col-white"><NumberFormat numb={countfacnv}/></td>}
                    {countfacnv > 0 &&
                        <td className="text-right bg-blue col-white"><NumberFormat numb={countfacnv}/></td>}
                    <td className="text-right col-blue-grey"><NumberFormat numb={countfacv}/></td>
                    {soldeClient < 0 &&
                        <td className="text-right bg-green col-white"><NumberFormat numb={soldeClient}/></td>}
                    {soldeClient === 0 &&
                        <td className="text-right bg-blue-grey col-white"><NumberFormat numb={soldeClient}/>
                        </td>}
                    {soldeClient > 0 &&
                        <td className="text-right bg-deep-orange col-white"><NumberFormat numb={soldeClient}/>
                        </td>}
                </tr>
                {renderChantiers}
            </>}
        </>)
    });

    let pttc = 0;
    let prec = 0;
    let pres = 0;
    let prescount = 0;
    const renderPresta = prestas.map((presta) => {
        prescount = prescount + 1;
        let bons = presta.bons;
        let ttc = 0;
        let rec = 0;
        let res = 0;
        let bbcount = 0;

        const renderBons = bons.map((bon) => {
            if (bon.corbeille === null) {
                bbcount = bbcount + 1;
                if (bon.etat === 'valide') {
                    ttc = ttc + bon.totalttc;
                    rec = rec + bon.recu;
                    res = res + bon.reste;
                    pttc = pttc + bon.totalttc;
                    prec = prec + bon.recu;
                    pres = pres + bon.reste;
                }
                let caisses = bon.caisses;
                const renderCaisses = caisses.map((caisse) => {

                    if (caisse.corbeille === null) {
                        return (<tr key={caisse.id} className={presta.id + 'presta' + ' hide'}>
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
                                <a href={`/crm/caisse/${caisse.id}/${bon.chantier.id}`}
                                   className="text-left col-blue-grey bolo600">Caisse N° {caisse.numcaisse}</a>
                            </td>
                            <td className="text-right borde"></td>
                            <td className="text-right borde"><NumberFormat numb={caisse.montant}/></td>
                            <td className="text-left ml30 borde" colSpan="5"
                                dangerouslySetInnerHTML={{__html: caisse.caissereference}}></td>
                        </tr>);
                    } else {
                        return null;
                    }

                });
                return (<>
                    <tr key={bon.id} className={presta.id + 'presta' + ' hide'} style={{backgroundColor: "#dae8f5"}}>
                        <td className="text-left bolo600 borde"><Moment format="DD/MM/YYYY">{bon.date}</Moment></td>
                        <td className="text-left pri borde">
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
                                    }} style={{marginRight: "5px"}}><i
                                        className="fa fa-trash col-pink" title="Supprimer" aria-hidden="true"></i></a>
                                </>
                            }
                            <a href="#" onClick={() => {
                                shasha(bon.id, 'imprimbon')
                            }} style={{marginRight: "5px"}}><i
                                className="fa fa-eye col-green"
                                aria-hidden="true"></i></a>
                            <a href={`/crm/bon/${bon.id}/${bon.chantier.id}`}> Bon N° {bon.numbon}</a>
                        </td>
                        <td className="text-left pri borde">
                            {bon.devis !== null &&
                                <>
                                    {bon.devis.etat === "valide" && <a onClick={() => {
                                        devalideDevis(bon.devis.id)
                                    }} title="Dévalider" className="badge badge-pill bg-blue"
                                                                       style={{marginRight: "5px"}}>V</a>}
                                    {bon.devis.etat === "save" && <a onClick={() => {
                                        valideDevis(bon.devis.id)
                                    }} title="Valider" className="badge badge-pill bg-blue-grey"
                                                                     style={{marginRight: "5px"}}>V</a>}
                                    <a href="#" onClick={() => {
                                        shasha(bon.devis.id, 'imprimdevis')
                                    }} style={{marginRight: "5px"}}><i
                                        className="fa fa-eye col-green"
                                        aria-hidden="true"></i></a>
                                    <a href={`/crm/devis/${bon.devis.id}/${bon.chantier.id}`}> Devis
                                        N° {bon.devis.iddevis}</a>
                                </>}
                        </td>

                        <td className="text-right borde"><NumberFormat numb={bon.totalttc}/></td>
                        <td className="text-right borde"><NumberFormat numb={bon.recu}/></td>
                        <td className="text-right borde"><NumberFormat numb={bon.reste}/></td>
                        <td className="text-left borde"
                            colSpan="2"><a
                            href={`/crm/client/${bon.client.id}`}>{bon.client.nomclient.toUpperCase()}</a> | <a
                            href={`/crm/chantier/${bon.chantier.id}`}>{bon.chantier.nomchantier.toUpperCase()}</a></td>
                        <td className="text-left borde" dangerouslySetInnerHTML={{__html: bon.bonreference}}></td>
                    </tr>
                    {renderCaisses}
                </>)
            } else {
                return null;
            }
        });
        return (<>
            <tr className="paginate2" key={presta.id} onClick={() => {
                showBonPresta(presta.id)
            }}>
                <td className="mw30 text-center"><input className="form-check-input" type="checkbox" value={presta.id}
                                                        name="presta"/></td>
                <td className="text-left bolo700" colSpan="2"><b
                    className={"col-blue"}>({bbcount})</b> {presta.fournisseur}
                </td>
                <td className="text-right"><NumberFormat numb={ttc}/></td>
                <td className="text-right"><NumberFormat numb={rec}/></td>
                {res === 0 &&
                    <td className="text-right bg-blue-grey"><NumberFormat numb={res}/></td>
                }
                {res > 0 &&
                    <td className="text-right bg-pri text-white"><NumberFormat numb={res}/></td>
                }
                <td className="text-center" colSpan="2">{presta.titre}</td>
                <td className="text-center">{presta.mobile}</td>
                <td className="text-center">{presta.mail}</td>
                <td className="text-center">{presta.adresse}</td>
            </tr>
            <tr className={presta.id + 'presta' + ' hide'}>
                <td className="text-left bolo600 col-pink ml30 borde">Date</td>
                <td className="text-left bolo600 col-pink ml30 borde">Bons</td>
                <td className="text-left bolo600 col-pink ml30 borde">Devis</td>
                <td className="text-right bolo600 col-pink borde">Total TTC</td>
                <td className="text-right bolo600 col-pink borde">Perçu</td>
                <td className="text-right bolo600 col-pink borde">Reste</td>
                <td className="text-left bolo600 col-pink ml30 borde" colSpan="2">Client | Chantier</td>
                <td className="text-left bolo600 col-pink borde">Référence</td>
            </tr>
            {renderBons}
        </>);
    });

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
                    <td className="text-right borde">{caisse.operation === "debit" &&
                        <NumberFormat numb={caisse.montant}/>}</td>
                    <td className="text-right borde">{caisse.operation === "credit" &&
                        <NumberFormat numb={caisse.montant}/>}</td>
                    <td className="text-left ml30 borde" colSpan="5"
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
                        <tr className="paginate4" onClick={() => {
                            showBonPerso(perso.id)
                        }}>
                            <td className="mw30 text-center"><input className="form-check-input" type="checkbox"
                                                                    value={perso.id} name="pers"/></td>
                            <td className="text-left"><b className="col-blue">({culen} Bons validés) </b>{perso.noms}
                            </td>
                            <td className="text-right p-r-15"><NumberFormat numb={freperso}/></td>
                            <td className="text-right p-r-15"><NumberFormat numb={frepersu}/></td>
                            <td className="text-right p-r-15"><NumberFormat numb={freperso - frepersu}/></td>
                            <td className="text-right p-r-15"><NumberFormat
                                numb={freperso - ((freperso - frepersu) + frepersu)}/></td>
                            <td className="text-left">{perso.fonction}</td>
                            <td className="text-left">{perso.contact}</td>
                            <td className="text-left">{perso.mail}</td>
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
                        <td className="text-right borde">{caisse.operation === "debit" &&
                            <NumberFormat numb={caisse.montant}/>}</td>
                        <td className="text-right borde">{caisse.operation === "credit" &&
                            <NumberFormat numb={caisse.montant}/>}</td>
                        <td className="text-left ml30 borde" colSpan="5"
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
                        {pretculen > 0 &&
                            <>
                                <tr className="paginate4" onClick={() => {
                                    showBonPerso(perso.id)
                                }}>
                                    <td className="mw30 text-center"><input className="form-check-input" type="checkbox"
                                                                            value={perso.id} name="pers"/></td>
                                    <td className="text-left"><b className="col-blue">({pretculen} Bons
                                        validés) </b>{perso.noms}
                                    </td>
                                    <td className="text-right p-r-15"><NumberFormat numb={pretperso}/></td>
                                    <td className="text-right p-r-15"><NumberFormat numb={pretpersu}/></td>
                                    <td className="text-right p-r-15"><NumberFormat numb={pretperso - pretpersu}/></td>
                                    <td className="text-right p-r-15"><NumberFormat
                                        numb={pretperso - ((pretperso - pretpersu) + pretpersu)}/></td>
                                    <td className="text-left">{perso.fonction}</td>
                                    <td className="text-left">{perso.contact}</td>
                                    <td className="text-left">{perso.mail}</td>
                                </tr>
                                {renderCaisPretPerso}
                            </>
                        }
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
                        <td className="text-right borde">{caisse.operation === "debit" &&
                            <NumberFormat numb={caisse.montant}/>}</td>
                        <td className="text-right borde">{caisse.operation === "credit" &&
                            <NumberFormat numb={caisse.montant}/>}</td>
                        <td className="text-left ml30 borde" colSpan="5"
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
                        {avculen > 0 &&
                            <>
                                <tr className="paginate4" onClick={() => {
                                    showBonPerso(perso.id)
                                }}>
                                    <td className="mw30 text-center"><input className="form-check-input" type="checkbox"
                                                                            value={perso.id} name="pers"/></td>
                                    <td className="text-left"><b className="col-blue">({avculen} Bons
                                        validés) </b>{perso.noms}
                                    </td>
                                    <td className="text-right p-r-15"><NumberFormat numb={avperso}/></td>
                                    <td className="text-right p-r-15"><NumberFormat numb={avpersu}/></td>
                                    <td className="text-right p-r-15"><NumberFormat numb={avperso - avpersu}/></td>
                                    <td className="text-right p-r-15"><NumberFormat
                                        numb={avperso - ((avperso - avpersu) + avpersu)}/></td>
                                    <td className="text-left">{perso.fonction}</td>
                                    <td className="text-left">{perso.contact}</td>
                                    <td className="text-left">{perso.mail}</td>
                                </tr>
                                {renderCaisAvancesPerso}
                            </>
                        }
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
                        <td className="text-right borde">{caisse.operation === "debit" &&
                            <NumberFormat numb={caisse.montant}/>}</td>
                        <td className="text-right borde">{caisse.operation === "credit" &&
                            <NumberFormat numb={caisse.montant}/>}</td>
                        <td className="text-left ml30 borde" colSpan="5"
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
                        {saculen > 0 &&
                            <>
                                <tr className="paginate4" onClick={() => {
                                    showBonPerso(perso.id)
                                }}>
                                    <td className="mw30 text-center"><input className="form-check-input" type="checkbox"
                                                                            value={perso.id} name="pers"/></td>
                                    <td className="text-left"><b className="col-blue">({saculen} Bons
                                        validés) </b>{perso.noms}
                                    </td>
                                    <td className="text-right p-r-15"><NumberFormat numb={saperso}/></td>
                                    <td className="text-right p-r-15"><NumberFormat numb={sapersu}/></td>
                                    <td className="text-right p-r-15"><NumberFormat numb={saperso - sapersu}/></td>
                                    <td className="text-right p-r-15"><NumberFormat
                                        numb={saperso - ((saperso - sapersu) + sapersu)}/></td>
                                    <td className="text-left">{perso.fonction}</td>
                                    <td className="text-left">{perso.contact}</td>
                                    <td className="text-left">{perso.mail}</td>
                                </tr>
                                {renderCaisSalairePerso}
                            </>
                        }
                    </>
                }
            </>}
        </>);
    });


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
                        opir = "(Débit)";
                    } else {
                        frinterne = frinterne - caisse.montant;
                        freinterne = freinterne - caisse.montant;
                        opir = "(Crédit)";
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
                           className="text-left col-blue-grey bolo600">Caisse N° {caisse.numcaisse} {opir}</a>
                    </td>
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
                            <td className="mw30 text-center"><input className="form-check-input" type="checkbox"
                                                                    value={perso.id} name="inter"/></td>
                            <td className="text-left"><b className="col-blue">({cclen} Bons validés) </b> {perso.noms}
                            </td>
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
            bincount = bincount + 1;
            frnvinterne = frnvinterne + caiss.montant;
        }

        return (<>
            {caiss.corbeille === null && <>
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
            </>}
        </>);
    });

    let bivcount = 0;
    let frvinterne = 0;
    const renderCaisseInterneValides = caissin.map((caiss) => {
        if (caiss.corbeille === null && caiss.etat === "valide") {
            bivcount = bivcount + 1;
            frvinterne = frvinterne + caiss.montant;
        }
        return (<>
            {caiss.corbeille === null && <>
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

    let cpvcount = 0;
    let cpvall = 0;
    const renderCaissePersos = caissperso.map((caiss) => {
        if (caiss.corbeille === null && caiss.etat === "valide") {
            cpvcount = cpvcount + 1;
            cpvall = cpvall + caiss.montant;
        }
        return (<>
            {caiss.corbeille === null && <>
                {caiss.etat === "valide" && <tr key={caiss.id} className="paginate8">
                    <td className="mw30 text-center"><input className="form-check-input" type="checkbox"
                                                            value={caiss.id} name="caisspersva"/></td>
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

    let cpncount = 0;
    let cpnall = 0;
    const renderCaissePersone = caissperso.map((caiss) => {
        if (caiss.corbeille === null && caiss.etat === "save") {
            cpncount = cpncount + 1;
            cpnall = cpnall + caiss.montant;
        }
        return (<>
            {caiss.corbeille === null && <>
                {caiss.etat === "save" && <tr key={caiss.id} className="paginate9">
                    <td className="mw30 text-center"><input className="form-check-input" type="checkbox"
                                                            value={caiss.id} name="caisspersneva"/></td>
                    <td className="text-center">
                        <a href="#" onClick={() => {
                            shasha(caiss.id, 'imprimcaisse')
                        }} style={{marginRight: "5px"}}><i
                            className="fa fa-eye col-green"
                            aria-hidden="true"></i></a>
                    </td>
                    <td><Moment format="DD/MM/YYYY">{caiss.date}</Moment></td>
                    <td><a href={`/crm/caisse/${caiss.id}/${caiss.chantier.id}`}><span
                        className="badge badge-pill bg-blue-grey m-r-5">V</span>{caiss.numcaisse}</a></td>
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
                        <td><a href={`/crm/caisse/${caiss.id}/${caiss.chantier.id}`}>CAISSE N° {caiss.numcaisse}</a>
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

    let rpcount = 0;
    let rpdebit = 0;
    let rpcredit = 0;
    const renderRelePerso = caissperso.map((caiss) => {
        if (caiss.corbeille === null && caiss.etat === "valide") {
            rpcount = rpcount + 1;
            if (caiss.operation === "debit") {
                rpdebit = rpdebit + caiss.montant;
            }
            if (caiss.operation === "credit") {
                rpcredit = rpcredit + caiss.montant;
            }
        }
        return (<>
            {caiss.corbeille === null && <>
                {caiss.etat === "valide" && <tr key={caiss.id} className="paginate11">
                    <td className="text-center"><Moment format="DD/MM/YYYY">{caiss.date}</Moment></td>
                    <td><a href={`/crm/caisse/${caiss.id}/${caiss.chantier.id}`}>BON DE CAISSE N° {caiss.numcaisse}</a>
                    </td>
                    <td dangerouslySetInnerHTML={{__html: caiss.caissereference}}></td>
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

    let dejttc = 0;
    let dejht = 0;
    let devcount = 0;
    const renderDevJour = devjour.map((dev) => {
        if (dev.corbeille === null && dev.type !== 'cps') {
            if (dev.type !== 'esti') {
                if (dev.client.corbeille === null) {
                    dejttc = dev.totalttc + dejttc;
                    dejht = dev.totalht + dejht;
                    devcount = devcount + 1;
                    return (<>
                        <tr key={dev.id}>
                            <td className="mw30 text-center"><a href="#" onClick={() => {
                                shasha(dev.id, 'imprimdevis')
                            }} style={{marginRight: "5px"}}>
                                <i className="fa fa-eye col-green" aria-hidden="true"></i></a>
                            </td>
                            <td className="text-left"><Moment format="DD/MM/YYYY">{dev.date}</Moment></td>
                            <td>
                                {dev.etat === "valide" && <a onClick={() => {
                                    devalideDevis(dev.id)
                                }} title="Dévalider" className="badge badge-pill badge-primary m-r-5">V</a>}
                                {dev.etat === "save" && <a onClick={() => {
                                    valideDevis(dev.id)
                                }} title="Valider" className="badge badge-pill bg-blue-grey m-r-5">V</a>}
                                <a href={`/crm/devis/${dev.id}/${dev.chantier.id}`}> N° DEVIS {dev.iddevis}</a></td>
                            <td className="text-right"><NumberFormat numb={dev.totalht}/></td>
                            <td className="text-right"><NumberFormat numb={dev.totalttc}/></td>
                            <td dangerouslySetInnerHTML={{__html: dev.devreference}}></td>
                            <td className="text-left pri bolo600"><i
                                className="fa fa-user pri"></i>&nbsp;{dev.dobyuser.nom.toUpperCase() + ' '} {dev.dobyuser.prenoms.toUpperCase()}
                            </td>
                        </tr>

                    </>);
                }
            }
        } else {
            return null;
        }
    });

    let bojttc = 0;
    let bojht = 0;
    let boncount = 0;
    const renderBonJour = bonjour.map((bon) => {
        if (bon.corbeille === null && bon.type !== 'none') {
            if (bon.client.corbeille === null) {
                bojttc = bon.totalttc + bojttc;
                bojht = bon.totalht + bojht;
                boncount = boncount + 1;
                return (<>
                    <tr key={bon.id}>
                        <td className="mw30 text-center"><a href="#" onClick={() => {
                            shasha(bon.id, 'imprimbon')
                        }} style={{marginRight: "5px"}}>
                            <i className="fa fa-eye col-green" aria-hidden="true"></i></a>
                        </td>
                        <td className="text-left"><Moment format="DD/MM/YYYY">{bon.date}</Moment></td>
                        <td>
                            {bon.etat === "valide" && <a onClick={() => {
                                devalideBon(bon.id)
                            }} title="Dévalider" className="badge badge-pill badge-primary m-r-5">V</a>}
                            {bon.etat === "save" && <a onClick={() => {
                                valideBon(bon.id)
                            }} title="Valider" className="badge badge-pill bg-blue-grey m-r-5">V</a>}
                            <a href={`/crm/bon/${bon.id}/${bon.chantier.id}`}>{bon.numbon}</a></td>
                        <td>
                            {bon.devis && bon.devis.etat === "valide" && <a onClick={() => {
                                devalideDevis(bon.devis.id)
                            }} title="Dévalider" className="badge badge-pill badge-primary m-r-5">V</a>}
                            {bon.devis && bon.devis.etat === "save" && <a onClick={() => {
                                valideDevis(bon.devis.id)
                            }} title="Valider" className="badge badge-pill bg-blue-grey m-r-5">V</a>}
                            <a href={`/crm/devis/${bon.devis.id}/${bon.chantier.id}`}>{bon.devis.iddevis}</a></td>
                        <td className="text-left">{bon.fournisseur !== null && <>{bon.fournisseur.fournisseur.toUpperCase()}</>}</td>
                        <td className="text-right"><NumberFormat numb={bon.totalht}/></td>
                        <td className="text-right"><NumberFormat numb={bon.totalttc}/></td>
                        <td dangerouslySetInnerHTML={{__html: bon.bonreference}}></td>
                        <td className="text-left pri bolo600"><i
                            className="fa fa-user pri"></i>&nbsp;{bon.dobyuser.nom.toUpperCase() + ' '} {bon.dobyuser.prenoms.toUpperCase()}
                        </td>
                    </tr>

                </>);
            }
        } else {
            return null;
        }
    });

    let lvejttc = 0;
    let lvejht = 0;
    let livrecount = 0;
    const renderLivreJour = bonjour.map((bon) => {
        if (bon.corbeille === null && bon.type === 'none') {
            lvejttc = bon.totalttc + lvejttc;
            lvejht = bon.totalht + lvejht;
            livrecount = livrecount + 1;
            return (<>
                <tr key={bon.id}>
                    <td className="mw30 text-center"><a href="#" onClick={() => {
                        shasha(bon.id, 'imprimbon')
                    }} style={{marginRight: "5px"}}>
                        <i className="fa fa-eye col-green" aria-hidden="true"></i></a>
                    </td>
                    <td className="text-left"><Moment format="DD/MM/YYYY">{bon.date}</Moment></td>
                    <td>
                        {bon.etat === "valide" && <a onClick={() => {
                            devalideBon(bon.id)
                        }} title="Dévalider" className="badge badge-pill badge-primary m-r-5">V</a>}
                        {bon.etat === "save" && <a onClick={() => {
                            valideBon(bon.id)
                        }} title="Valider" className="badge badge-pill bg-blue-grey m-r-5">V</a>}
                        <a href={`/crm/bon/${bon.id}/${bon.chantier.id}`}>{bon.numbon}</a></td>
                    <td>
                        {bon.devis.etat === "valide" && <a onClick={() => {
                            devalideDevis(bon.devis.id)
                        }} title="Dévalider" className="badge badge-pill badge-primary m-r-5">V</a>}
                        {bon.devis.etat === "save" && <a onClick={() => {
                            valideDevis(bon.devis.id)
                        }} title="Valider" className="badge badge-pill bg-blue-grey m-r-5">V</a>}
                        <a href={`/crm/devis/${bon.devis.id}/${bon.chantier.id}`}>{bon.devis.iddevis}</a></td>
                    <td className="text-right"><NumberFormat numb={bon.totalht}/></td>
                    <td className="text-right"><NumberFormat numb={bon.totalttc}/></td>
                    <td dangerouslySetInnerHTML={{__html: bon.bonreference}}></td>
                    <td className="text-left pri bolo600"><i
                        className="fa fa-user pri"></i>&nbsp;{bon.dobyuser.nom.toUpperCase() + ' '} {bon.dobyuser.prenoms.toUpperCase()}
                    </td>
                </tr>

            </>);
        } else {
            return null;
        }
    });

    let cajttc = 0;
    let caiscount = 0;
    const renderCaisJour = caisjour.map((cais) => {
        if (cais.corbeille === null && cais.bon !== null) {
            if (cais.client.corbeille === null) {
                cajttc = cais.montant + cajttc;
                caiscount = caiscount + 1;
                return (<>
                    <tr key={cais.id}>
                        <td className="mw30 text-center"><a href="#" onClick={() => {
                            shasha(cais.id, 'imprimcaisse')
                        }} style={{marginRight: "5px"}}>
                            <i className="fa fa-eye col-green" aria-hidden="true"></i></a>
                        </td>
                        <td className="text-left"><Moment format="DD/MM/YYYY">{cais.date}</Moment></td>
                        <td>
                            {cais.etat === "valide" && <a onClick={() => {
                                devalideCaisse(cais.id)
                            }} title="Dévalider" className="badge badge-pill badge-primary m-r-5">V</a>}
                            {cais.etat === "save" && <a onClick={() => {
                                valideCaisse(cais.id)
                            }} title="Valider" className="badge badge-pill bg-blue-grey m-r-5">V</a>}
                            <a href={`/crm/caisse/${cais.id}/${cais.chantier.id}`}>{cais.numcaisse}</a></td>
                        <td>
                            {cais.bon.etat === "valide" && <a onClick={() => {
                                devalideBon(cais.bon.id)
                            }} title="Dévalider" className="badge badge-pill badge-primary m-r-5">V</a>}
                            {cais.bon.etat === "save" && <a onClick={() => {
                                valideBon(cais.bon.id)
                            }} title="Valider" className="badge badge-pill bg-blue-grey m-r-5">V</a>}
                            <a href={`/crm/bon/${cais.bon.id}/${cais.chantier.id}`}>{cais.bon.numbon}</a></td>
                        <td>
                            {cais.bon.devis.etat === "valide" && <a onClick={() => {
                                devalideDevis(caisse.bon.devis.id)
                            }} title="Dévalider" className="badge badge-pill badge-primary m-r-5">V</a>}
                            {cais.bon.devis.etat === "save" && <a onClick={() => {
                                valideDevis(caisse.bon.devis.id)
                            }} title="Valider" className="badge badge-pill bg-blue-grey m-r-5">V</a>}
                            <a href={`/crm/devis/${cais.bon.devis.id}/${cais.chantier.id}`}>{cais.bon.devis.iddevis}</a>
                        </td>

                        <td className="text-left">{cais.fournisseur.fournisseur.toUpperCase()}</td>
                        <td className="text-right"><NumberFormat numb={cais.montant}/></td>
                        <td dangerouslySetInnerHTML={{__html: cais.caissereference}}></td>
                        <td className="text-left pri bolo600"><i
                            className="fa fa-user pri"></i>&nbsp;{cais.dobyuser.nom.toUpperCase() + ' '} {cais.dobyuser.prenoms.toUpperCase()}
                        </td>
                    </tr>

                </>);
            }
        }
        if (cais.corbeille === null && cais.personnel !== null) {
            if (cais.client.corbeille === null) {
                cajttc = cais.montant + cajttc;
                caiscount = caiscount + 1;
                return (<>
                    <tr key={cais.id}>
                        <td className="mw30 text-center"><a href="#" onClick={() => {
                            shasha(cais.id, 'imprimcaisse')
                        }} style={{marginRight: "5px"}}>
                            <i className="fa fa-eye col-green" aria-hidden="true"></i></a>
                        </td>
                        <td className="text-left"><Moment format="DD/MM/YYYY">{cais.date}</Moment></td>
                        <td>
                            {cais.etat === "valide" && <a onClick={() => {
                                devalideCaisse(cais.id)
                            }} title="Dévalider" className="badge badge-pill badge-primary m-r-5">V</a>}
                            {cais.etat === "save" && <a onClick={() => {
                                valideCaisse(cais.id)
                            }} title="Valider" className="badge badge-pill bg-blue-grey m-r-5">V</a>}
                            <a href={`/crm/caisse/${cais.id}/${cais.chantier.id}`}>{cais.numcaisse}</a></td>
                        <td></td>
                        <td></td>
                        <td className="text-left">{cais.personnel.noms.toUpperCase()}</td>
                        <td className="text-right"><NumberFormat numb={cais.montant}/></td>
                        <td dangerouslySetInnerHTML={{__html: cais.caissereference}}></td>
                        <td className="text-left pri bolo600"><i
                            className="fa fa-user pri"></i>&nbsp;{cais.dobyuser.nom.toUpperCase() + ' '} {cais.dobyuser.prenoms.toUpperCase()}
                        </td>
                    </tr>

                </>);
            }
        }
        return null;
    });

    let decjttc = 0;
    let decjht = 0;
    let deccount = 0;
    const renderDecJour = decjour.map((dec) => {
        if (dec.client.corbeille === null) {
            deccount = deccount + 1;
            decjttc = decjttc + parseFloat(dec.ttc);
            decjht = decjht + parseFloat(dec.apayer);
            return (<>
                <tr key={dec.id}>
                    <td className="mw30 text-center"><a href="#" onClick={() => {
                        shasha(dec.id, 'imprimdecompte')
                    }} style={{marginRight: "5px"}}>
                        <i className="fa fa-eye col-green" aria-hidden="true"></i></a>
                    </td>
                    <td className="text-left"><Moment format="DD/MM/YYYY">{dec.date}</Moment></td>
                    <td>
                        {dec.etat === "valide" && <a onClick={() => {
                            devalideDecompte(dec.id)
                        }} title="Dévalider" className="badge badge-pill badge-primary m-r-5">V</a>}
                        {dec.etat === "save" && <a onClick={() => {
                            valideDecompte(dec.id)
                        }} title="Valider" className="badge badge-pill bg-blue-grey m-r-5">V</a>}
                        <a href={`/crm/decompte/${dec.id}/${dec.chantier.id}`}>{dec.numdecompte}</a></td>
                    <td>
                        {dec.devis.etat === "valide" && <a onClick={() => {
                            devalideDevis(dec.devis.id)
                        }} title="Dévalider" className="badge badge-pill badge-primary m-r-5">V</a>}
                        {dec.devis.etat === "save" && <a onClick={() => {
                            valideDevis(dec.devis.id)
                        }} title="Valider" className="badge badge-pill bg-blue-grey m-r-5">V</a>}
                        <a href={`/crm/devis/${dec.devis.id}/${dec.chantier.id}`}>{dec.devis.iddevis}</a></td>

                    <td className="text-right"><NumberFormat numb={dec.apayer}/></td>
                    <td className="text-right"><NumberFormat numb={dec.ttc}/></td>
                    <td className="text-left pri bolo600"><i
                        className="fa fa-user pri"></i>&nbsp;{dec.dobyuser.nom.toUpperCase() + ' '} {dec.dobyuser.prenoms.toUpperCase()}
                    </td>
                </tr>

            </>);
        }
    });

    let facttc = 0;
    let facht = 0;
    let faccount = 0;
    const renderFacJour = facjour.map((fac) => {
        if (fac.corbeille === null) {
            if (fac.client.corbeille === null) {
                facttc = fac.totalttc + facttc;
                facht = fac.totalht + facht;
                faccount = faccount + 1;
                return (<>
                    <tr key={fac.id}>
                        <td className="mw30 text-center"><a href="#" onClick={() => {
                            shasha(fac.id, 'imprimfacture')
                        }} style={{marginRight: "5px"}}>
                            <i className="fa fa-eye col-green" aria-hidden="true"></i></a></td>
                        <td className="text-left"><Moment format="DD/MM/YYYY">{fac.date}</Moment></td>
                        <td>
                            {fac.etat === "valide" && <a onClick={() => {
                                devalideFacture(fac.id)
                            }} title="Dévalider" className="badge badge-pill badge-primary m-r-5">V</a>}
                            {fac.etat === "save" && <a onClick={() => {
                                valideFacture(fac.id)
                            }} title="Valider" className="badge badge-pill bg-blue-grey m-r-5">V</a>}
                            <a href={`/crm/facture/${fac.id}/${fac.chantier.id}`}>{fac.numfacture}</a></td>

                        {fac.type === "devis" &&
                            <>
                                <td>
                                    {fac.devis.etat === "valide" && <a onClick={() => {
                                        devalideDevis(fac.devis.id)
                                    }} title="Dévalider" className="badge badge-pill badge-primary m-r-5">V</a>}
                                    {fac.devis.etat === "save" && <a onClick={() => {
                                        valideDevis(fac.devis.id)
                                    }} title="Valider" className="badge badge-pill bg-blue-grey m-r-5">V</a>}
                                    <a href={`/crm/devis/${fac.devis.id}/${fac.chantier.id}`}>{fac.devis.iddevis}</a>
                                </td>
                                <td></td>
                            </>
                        }

                        {fac.type === "acompte" &&
                            <>
                                <td>
                                    {fac.acompte.devis.etat === "valide" && <a onClick={() => {
                                        devalideDevis(fac.acompte.devis.id)
                                    }} title="Dévalider" className="badge badge-pill badge-primary m-r-5">V</a>}
                                    {fac.acompte.devis.etat === "save" && <a onClick={() => {
                                        valideDevis(fac.acompte.devis.id)
                                    }} title="Valider" className="badge badge-pill bg-blue-grey m-r-5">V</a>}
                                    <a href={`/crm/devis/${fac.acompte.devis.id}/${fac.chantier.id}`}>{fac.acompte.devis.iddevis}</a>
                                </td>
                                <td></td>
                            </>
                        }
                        {fac.type === "decompte" &&
                            <>
                                <td>
                                    {fac.decompte.devis.etat === "valide" && <a onClick={() => {
                                        devalideDevis(fac.decompte.devis.id)
                                    }} title="Dévalider" className="badge badge-pill badge-primary m-r-5">V</a>}
                                    {fac.decompte.devis.etat === "save" && <a onClick={() => {
                                        valideDevis(fac.decompte.devis.id)
                                    }} title="Valider" className="badge badge-pill bg-blue-grey m-r-5">V</a>}
                                    <a href={`/crm/devis/${fac.decompte.devis.id}/${fac.chantier.id}`}>{fac.decompte.devis.iddevis}</a>
                                </td>

                                <td>
                                    {fac.decompte.etat === "valide" && <a onClick={() => {
                                        devalideDecompte(fac.decompte.id)
                                    }} title="Dévalider" className="badge badge-pill badge-primary m-r-5">V</a>}
                                    {fac.decompte.etat === "save" && <a onClick={() => {
                                        valideDecompte(fac.decompte.id)
                                    }} title="Valider" className="badge badge-pill bg-blue-grey m-r-5">V</a>}
                                    <a href={`/crm/decompte/${fac.decompte.id}/${fac.chantier.id}`}>{fac.decompte.numdecompte}</a>
                                </td>
                            </>
                        }

                        <td className="text-right"><NumberFormat numb={fac.totalht}/></td>
                        <td className="text-right"><NumberFormat numb={fac.totalttc}/></td>
                        <td dangerouslySetInnerHTML={{__html: fac.factreference}}></td>
                        <td className="text-left pri bolo600"><i
                            className="fa fa-user pri"></i>&nbsp;{fac.dobyuser.nom.toUpperCase() + ' '} {fac.dobyuser.prenoms.toUpperCase()}
                        </td>
                    </tr>

                </>);
            }
        }
        return null;
    });

    let renderInventaire = inventes.map((client) => {
        let chans = client.chantiers;
        let countChan = 0;

        let renderChans = chans.map((chan) => {
            let countDevis = 0;
            countChan = countChan + 1;
            let devs = chan.devis;
            let renderDevs = devs.map((dev) => {
                if (dev.etat === 'valide') {
                    let rr = [];
                    countDevis = countDevis + 1;
                    let bons = dev.bons;
                    let renderLignes = null;
                    let countBon = 0;
                    let countLivrs = 0;
                    let countLigneBon = 0;
                    let countLigneLivre = 0;
                    let renderBonns = bons.map((bonn) => {
                        let lignes = bonn.lignes;
                        if (bonn.etat === "valide" && bonn.type !== "pst") {
                            if (bonn.corbeille === null) {
                                if (bonn.type !== "none") {
                                    countBon = countBon + 1;
                                } else {
                                    countLivrs = countLivrs + 1;
                                }

                                return renderLignes = lignes.map((ligne) => {
                                    if (ligne.type === 2 && ligne.article !== null) {
                                        if (!rr.includes(ligne.article.id)) {
                                            let ccligneBon = 0;
                                            let ccligneLivre = 0;
                                            rr.push(ligne.article.id);
                                            let renderBonnes = null;
                                            let renderLivrs = null;
                                            let rrrBon = [];
                                            let rrrLivre = [];

                                            if (bonn.type !== "none") {
                                                ccligneBon = ligne.quantite;
                                                rrrBon.push({
                                                    'id': bonn.id,
                                                    'numbon': bonn.numbon,
                                                    'qte': ligne.quantite
                                                });
                                            } else {
                                                ccligneLivre = ligne.quantite;
                                                rrrBon.push({
                                                    'id': bonn.id,
                                                    'numbon': bonn.numbon,
                                                    'qte': ligne.quantite
                                                });
                                            }

                                            bons.map((bo) => {
                                                if (bo.etat === 'valide' && bo.type !== "none") {
                                                    let ligns = bo.lignes;
                                                    ligns.map((lign) => {
                                                        if (lign.article !== null && lign.id !== ligne.id) {
                                                            if (ligne.article.id === lign.article.id) {
                                                                countLigneBon = countLigneBon + 1;
                                                                if (bo.type === 'oui') {
                                                                    ccligneBon = ccligneBon + lign.quantite;
                                                                    rrrBon.push({
                                                                        'id': bo.id,
                                                                        'numbon': bo.numbon,
                                                                        'qte': lign.quantite
                                                                    });
                                                                }
                                                                if (bo.type === 'non') {
                                                                    ccligneBon = ccligneBon - lign.quantite;
                                                                    rrrBon.push({
                                                                        'id': bo.id,
                                                                        'numbon': bo.numbon + ' (RETOUR)',
                                                                        'qte': lign.quantite
                                                                    });
                                                                }
                                                            }
                                                        }
                                                    })
                                                }
                                                if (bo.etat === 'valide' && bo.type === "none") {
                                                    let ligns = bo.lignes;
                                                    ligns.map((lign) => {
                                                        if (lign.article !== null && lign.id !== ligne.id) {
                                                            if (ligne.article.id === lign.article.id) {
                                                                countLigneLivre = countLigneLivre + 1;
                                                                ccligneLivre = ccligneLivre + lign.quantite;
                                                                rrrLivre.push({
                                                                    'id': bo.id,
                                                                    'numbon': bo.numbon,
                                                                    'qte': lign.quantite
                                                                });
                                                            }
                                                        }
                                                    })
                                                }
                                                renderBonnes = rrrBon.map((ro) => {
                                                    return (
                                                        <tr key={ro.id} className={ligne.id + 'devv' + ' hide'}>
                                                            <td className="ml120">
                                                                <a href={`/crm/bon/${ro.id}/${chan.id}`}
                                                                   className="col-deep-orange"> <i
                                                                    className="fa fa-minus-square"></i> BON
                                                                    Nº {ro.numbon.toUpperCase()}</a>
                                                            </td>
                                                            <td className="col-blue-grey">{ro.qte}</td>
                                                            <td className="col-blue-grey"></td>
                                                        </tr>
                                                    )
                                                })
                                                renderLivrs = rrrLivre.map((ro) => {
                                                    return (
                                                        <tr key={ro.id} className={ligne.id + 'devv' + ' hide'}>
                                                            <td className="ml120">
                                                                <a href={`/crm/bon/${ro.id}/${chan.id}`}
                                                                   className="col-deep-orange"> <i
                                                                    className="fa fa-minus-square"></i> BON
                                                                    Nº {ro.numbon.toUpperCase()}</a>
                                                            </td>
                                                            <td className="col-blue-grey">{ro.qte}</td>
                                                            <td className="col-blue-grey"></td>
                                                        </tr>
                                                    )
                                                })
                                            })

                                            return (
                                                <>
                                                    <tr key={ligne.id} className={dev.id + 'clacla' + ' hide'}
                                                        onClick={() => {
                                                            showBonnInve(ligne.id)
                                                        }}>
                                                        <td className="pri ml90">
                                                            <i className="fa fa-minus-square"></i> {ligne.designation.replace('<p>', '').replace('</p>', '').replace('&nbsp;', '').toUpperCase()}
                                                        </td>
                                                        <td className="col-black bolo700"></td>
                                                        <td className="col-black bolo700">{ligne.article.stock}</td>
                                                    </tr>
                                                    <tr className={ligne.id + 'devv' + ' hide'}>
                                                        <td className="col-blue-grey bolo700 ml120">BONS DE COMMANDE
                                                        </td>
                                                        <td className="col-black bolo700">{ccligneBon}</td>
                                                        <td className="col-black bolo700"></td>
                                                    </tr>
                                                    {renderBonnes}
                                                    <tr className={ligne.id + 'devv' + ' hide'}>
                                                        <td className="col-blue-grey bolo700 ml120">BONS DE LIVRAISON
                                                        </td>
                                                        <td className="col-black bolo700">{ccligneLivre}</td>
                                                        <td className="col-black bolo700"></td>
                                                    </tr>
                                                    {renderLivrs}
                                                </>
                                            )
                                        }
                                        return null;
                                    }
                                    return null;
                                })
                            }
                        }
                        return null;
                    })
                    if (dev.bons.length > 0) {
                        return (
                            <>
                                <tr key={dev.id} className={chan.id + 'chana' + ' hide'} onClick={() => {
                                    showLignesInve(dev.id)
                                }}>
                                    <td className="col-black ml60" colSpan="3">
                                        <i className="fa fa-minus-square"> </i> DEVIS Nº {dev.iddevis.toUpperCase()}
                                    </td>
                                </tr>
                                {renderBonns}
                            </>
                        )
                    }
                    return null;
                }
                return null;
            })
            if (countDevis > 0) {
                return (
                    <>
                        <tr key={chan.id} className={client.id + 'clicli' + ' hide'} onClick={() => {
                            showDevsInve(chan.id)
                        }}>
                            <td className="col-pink  ml30" colSpan="3"><i
                                className="fa fa-minus-square"></i> {chan.nomchantier.toUpperCase()}</td>
                        </tr>
                        {renderDevs}
                    </>
                )
            }
            return null;
        });
        if (countChan > 0) {
            return (
                <>
                    <tr key={client.id} onClick={() => {
                        showClicli(client.id)
                    }}>
                        <td className="col-blue-grey bolo700" style={{marginLeft: "5px"}} colSpan="3"><i
                            className="fa fa-plus-square"></i> {client.nomclient.toUpperCase()}</td>
                    </tr>
                    {renderChans}
                </>
            )
        }
        return null;
    });

    const handleClients = event => {
        let filter = event.target.value.toLowerCase();
        $("#etates tr.paginate1").filter(function () {
            $(this).toggle($(this).text().toLowerCase().replaceAll(' ', '').indexOf(filter) > -1)
        });
    };
    const handlePrests = event => {
        let filter = event.target.value.toLowerCase();
        $("#prets tr.paginate2").filter(function () {
            $(this).toggle($(this).text().toLowerCase().replaceAll(' ', '').indexOf(filter) > -1)
        });
    };
    const handleFourne = event => {
        let filter = event.target.value.toLowerCase();
        $("#fournis tr.paginate3").filter(function () {
            $(this).toggle($(this).text().toLowerCase().replaceAll(' ', '').indexOf(filter) > -1)
        });
    };
    const handlePersos = event => {
        let filter = event.target.value.toLowerCase();
        $("#persoos tr.paginate4").filter(function () {
            $(this).toggle($(this).text().toLowerCase().replaceAll(' ', '').indexOf(filter) > -1)
        });
    };
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
    const handleBonMoisInterne = event => {
        let filter = event.target.value.toLowerCase();
        $("#bonMoisInterne tr.paginate12").filter(function () {
            $(this).toggle($(this).text().toLowerCase().replaceAll(' ', '').indexOf(filter) > -1)
        });
    };
    const handleCaissePersos = event => {
        let filter = event.target.value.toLowerCase();
        $("#caissepersos tr.paginate8").filter(function () {
            $(this).toggle($(this).text().toLowerCase().replaceAll(' ', '').indexOf(filter) > -1)
        });
    };
    const handleCaissePersone = event => {
        let filter = event.target.value.toLowerCase();
        $("#caissepersone tr.paginate9").filter(function () {
            $(this).toggle($(this).text().toLowerCase().replaceAll(' ', '').indexOf(filter) > -1)
        });
    };
    const handleReleInterne = event => {
        let filter = event.target.value.toLowerCase();
        $("#releInterne tr.paginate10").filter(function () {
            $(this).toggle($(this).text().toLowerCase().replaceAll(' ', '').indexOf(filter) > -1)
        });
    };
    const handleRelePerso = event => {
        let filter = event.target.value.toLowerCase();
        $("#relePerso tr.paginate11").filter(function () {
            $(this).toggle($(this).text().toLowerCase().replaceAll(' ', '').indexOf(filter) > -1)
        });
    };

    if (furne !== 'a') {
        $('#modalFournisseur').modal('show');
    }
    if (purser !== 'a') {
        $('#modalPrestataire').modal('show');
    }
    if (moshow === 'perso') {
        $('#modalPerso').modal('show');
    }
    if (moshow === 'interne') {
        $('#modalInterne').modal('show');
    }

    $(function () {
        $(".js-example-basic-multiple").select2();
        $(".js-example-basic-single").select2();
        $("#etates").simplePagination(('tbody .paginate1'));
        $("#prests").simplePagination(('tbody .paginate2'));
        $("#fournis").simplePagination(('tbody .paginate3'));
        $("#persoos").simplePagination(('tbody .paginate4'));
        $("#internes").simplePagination(('tbody .paginate5'));
        $("#boninternesneva").simplePagination(('tbody .paginate6'));
        $("#boninternesva").simplePagination(('tbody .paginate7'));
        $("#caissepersos").simplePagination(('tbody .paginate8'));
        $("#caissepersone").simplePagination(('tbody .paginate9'));
        $("#releInterne").simplePagination(('tbody .paginate10'));
        $("#relePerso").simplePagination(('tbody .paginate11'));
        $("#devjour").simplePagination(('tbody .paginate12'));
    });

    $("#delPresta").off().on("click", function () {
        $.each($("input[name='presta']:checked"), function () {
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
    $("#editPresta").off().on("click", function () {
        $.each($("input[name='presta']:checked"), function () {
            window.$('#Traitement').modal('show');
            window.location.href = '/crm/etat/prestataire/' + $(this).val();
            return false;
        });
    });
    $("#checkedPresta").change(function () {
        if (this.checked) {
            $.each($("input[name='presta']"), function () {
                this.checked = true;
            });
        } else {
            $.each($("input[name='presta']"), function () {
                this.checked = false;
            });
        }
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
            window.location.href = '/crm/etat/fournisseur/' + $(this).val();
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

    $("#checkedBinva").change(function () {
        if (this.checked) {
            $.each($("input[name='caissneva']"), function () {
                this.checked = true;
            });
        } else {
            $.each($("input[name='caissneva']"), function () {
                this.checked = false;
            });
        }
    });
    $("#checkBinvaMo").change(function () {
        if (this.checked) {
            $.each($("input[name='checkBinvaMo']"), function () {
                this.checked = true;
            });
        } else {
            $.each($("input[name='checkBinvaMo']"), function () {
                this.checked = false;
            });
        }
    });

    $("#checkedBpva").change(function () {
        if (this.checked) {
            $.each($("input[name='caisspersva']"), function () {
                this.checked = true;
            });
        } else {
            $.each($("input[name='caisspersva']"), function () {
                this.checked = false;
            });
        }
    });
    $("#checkedBpnva").change(function () {
        if (this.checked) {
            $.each($("input[name='caisspersneva']"), function () {
                this.checked = true;
            });
        } else {
            $.each($("input[name='caisspersneva']"), function () {
                this.checked = false;
            });
        }
    });

    $("#valideCaisse").off().on("click", function () {
        $.each($("input[name='caissneva']:checked"), function () {
            $('#Traitement').modal('show')
            axios({
                method: 'GET',
                url: '/crm/caisse/valider/' + $(this).val(),
            }).then(function (response) {
                location.reload();
            }).catch(function (error) {
                $('#Traitement').modal('hide');
                $('#ModalErreur').modal('show');
            });
        });
    });
    $("#delCaisse").off().on("click", function () {
        $.each($("input[name='caissneva']:checked"), function () {
            $('#Traitement').modal('show')
            axios({
                method: 'DELETE',
                url: '/crm/caisse/del/' + $(this).val(),
            }).then(function (response) {
                location.reload();
            }).catch(function (error) {
                $('#Traitement').modal('hide');
                $('#ModalErreur').modal('show');
            });
        });
    });
    $("#devalideCaisse").off().on("click", function () {
        $.each($("input[name='caissva']:checked"), function () {
            $('#Traitement').modal('show')
            axios({
                method: 'GET',
                url: '/crm/caisse/devalider/' + $(this).val(),
            }).then(function (response) {
                location.reload();
            }).catch(function (error) {
                $('#Traitement').modal('hide');
                $('#ModalErreur').modal('show');
            });
        });
    });

    $("#valideCaissePerso").off().on("click", function () {
        $.each($("input[name='caisspersneva']:checked"), function () {
            $('#Traitement').modal('show')
            axios({
                method: 'GET',
                url: '/crm/caisse/valider/' + $(this).val(),
            }).then(function (response) {
                location.reload();
            }).catch(function (error) {
                $('#Traitement').modal('hide');
                $('#ModalErreur').modal('show');
            });
        });
    });
    $("#delCaissePerso").off().on("click", function () {
        $.each($("input[name='caisspersneva']:checked"), function () {
            $('#Traitement').modal('show')
            axios({
                method: 'DELETE',
                url: '/crm/caisse/del/' + $(this).val(),
            }).then(function (response) {
                location.reload();
            }).catch(function (error) {
                $('#Traitement').modal('hide');
                $('#ModalErreur').modal('show');
            });
        });
    });
    $("#devalideCaissePerso").off().on("click", function () {
        $.each($("input[name='caisspersva']:checked"), function () {
            $('#Traitement').modal('show')
            axios({
                method: 'GET',
                url: '/crm/caisse/devalider/' + $(this).val(),
            }).then(function (response) {
                location.reload();
            }).catch(function (error) {
                $('#Traitement').modal('hide');
                $('#ModalErreur').modal('show');
            });
        });
    });

    $("#delPerso").off().on("click", function () {
        $.each($("input[name='pers']:checked"), function () {
            $('#Traitement').modal('show')
            axios({
                method: 'DELETE', url: '/crm/personnel/del/' + $(this).val(),
            }).then(function (response) {
                location.reload();
            }).catch(function (error) {
                $('#Traitement').modal('hide');
                $('#ModalErreur').modal('show');
            });
        });
    });
    $("#editPerso").off().on("click", function () {
        $.each($("input[name='pers']:checked"), function () {
            window.$('#Traitement').modal('show');
            window.location.href = '/crm/etat/personnel/' + $(this).val();
            return false;
        });
    });
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

    $("#delInterne").off().on("click", function () {
        $.each($("input[name='inter']:checked"), function () {
            $('#Traitement').modal('show')
            axios({
                method: 'DELETE', url: '/crm/personnel/del/' + $(this).val(),
            }).then(function (response) {
                location.reload();
            }).catch(function (error) {
                $('#Traitement').modal('hide');
                $('#ModalErreur').modal('show');
            });
        });
    });
    $("#editInterne").off().on("click", function () {
        $.each($("input[name='inter']:checked"), function () {
            window.$('#Traitement').modal('show');
            window.location.href = '/crm/etat/personnel/' + $(this).val();
            return false;
        });
    });
    $("#checkedInterne").change(function () {
        if (this.checked) {
            $.each($("input[name='inter']"), function () {
                this.checked = true;
            });
        } else {
            $.each($("input[name='inter']"), function () {
                this.checked = false;
            });
        }
    });

    let soldeEntre = (parseFloat(sumRegle) + parseFloat(soreinternecredit) + parseFloat(rpcredit)) - (parseFloat(soreinternedebit) + parseFloat(rpdebit) + parseFloat(sumDepense));

    return (<>
        <div className="text-center">
            <div className="btn-group m-r-5">
                <button type="button" data-color="blue" className="btn bg-blue text-white bolo600 waves-effect"
                        data-toggle="modal" data-target="#modalClient">+ CLIENT
                </button>

                <button type="button" data-color="blue" className="btn bg-green text-white bolo600 waves-effect"
                        data-toggle="modal" data-target="#modalChantier">+ CHANTIER
                </button>
            </div>
            <br/>
            <div className="btn-group m-r-5">
                <button type="button" data-color="blue" className="btn bg-pri text-white bolo600 waves-effect"
                        data-toggle="modal" data-target="#modalFournisseur">+ FOURNISSEUR
                </button>
                <button type="button" data-color="blue" className="btn bg-pink text-white bolo600 waves-effect"
                        data-toggle="modal" data-target="#modalPrestataire">+ PRESTATAIRE
                </button>

                <button type="button" data-color="blue" className="btn bg-purple text-white bolo600 waves-effect"
                        data-toggle="modal" data-target="#modalBonFourn">+ BON FOURNISSEUR D'ARTICLES
                </button>

                <button type="button" data-color="blue" className="btn bg-blue-grey text-white bolo600 waves-effect"
                        data-toggle="modal" data-target="#modalBonPresta">+ BON PRESTATAIRE
                </button>
            </div>
            <br/>
            <div className="btn-group m-r-5">
                <button type="button" data-color="blue" className="btn bg-deep-purple text-white bolo600 waves-effect"
                        data-toggle="modal" data-target="#modalCaisse">+ PAIEMENT FOURNISSEUR | PRESTATAIRE
                </button>

                <button type="button" data-color="blue" className="btn bg-deep-orange text-white bolo600 waves-effect"
                        data-toggle="modal" data-target="#modalReglement">+ RÈGLEMENT FACTURE
                </button>
            </div>
        </div>
        <div className="col-md-12" style={{paddingLeft: "0", marginTop: "20px"}}>
            <div className="row clearfix">
                <div className="col-sm-12 ">
                    <h4 className="bolo700">
                        Travaux du jour
                    </h4>
                </div>
            </div>
            <div className="panel-group" id="accordion_2" role="tablist" aria-multiselectable="true">
                <div className="panel panel-pri">
                    <div className="panel-heading bg-pri" role="tab" id="headingDev">
                        <h5 className="panel-title ">
                            <a className="collapsed text-white" role="button" data-toggle="collapse"
                               data-parent="#accordion_2"
                               href="#collapseDev" aria-expanded="false" aria-controls="collapseDev"
                               style={{fontSize: "16px", fontWeight: "500"}}>
                                <i className="material-icons col-white"
                                   style={{fontSize: "18px", float: "left"}}>keyboard_arrow_down</i> Devis du jour<span
                                className="badge bg-pink float-right">{devcount}</span>
                            </a>
                        </h5>
                    </div>
                    <div id="collapseDev" className="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingDev">
                        <div className="panel-body" style={{overflow: "scroll"}}>
                            <div className="body">
                                <div className="table-responsive">
                                    <ReactHTMLTableToExcel
                                        id="test-table-xls-button"
                                        className="btn bg-green text-white m-r-5 float-right"
                                        table="devjour"
                                        filename="DEVIS DU JOUR"
                                        sheet="tablexls"
                                        buttonText="EXPORTER EN EXCEL"/>
                                    <div className="col-md-4">

                                    </div>
                                    <table className="table-striped table-hover display nowrap" style={{width: "100%"}}
                                           id="devjour">
                                        <thead>
                                        <tr>
                                            <th className="mw30"></th>
                                            <th style={{minWidth: "80px"}}>DATE</th>
                                            <th style={{minWidth: "100px"}}>N° DEVIS</th>
                                            <th style={{minWidth: "120px"}}>TOTAL HT</th>
                                            <th style={{minWidth: "120px"}}>TOTAL TTC</th>
                                            <th>RÉFÉRENCE</th>
                                            <th style={{minWidth: "120px"}}>CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {renderDevJour}
                                        </tbody>
                                        <tfoot>
                                        <tr className="bolderr">
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td className="text-right bg-blue col-white"><NumberFormat numb={dejht}/>
                                            </td>
                                            <td className="text-right bg-blue col-white"><NumberFormat numb={dejttc}/>
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="panel panel-pri">
                    <div className="panel-heading bg-pri" role="tab" id="headingBon">
                        <h5 className="panel-title ">
                            <a className="collapsed text-white" role="button" data-toggle="collapse"
                               data-parent="#accordion_2"
                               href="#collapseBon" aria-expanded="false" aria-controls="collapseBon"
                               style={{fontSize: "16px", fontWeight: "500"}}>
                                <i className="material-icons col-white"
                                   style={{fontSize: "18px", float: "left"}}>keyboard_arrow_down</i> Bons de commande du
                                jour<span
                                className="badge bg-pink float-right">{boncount}</span>
                            </a>
                        </h5>
                    </div>
                    <div id="collapseBon" className="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingBon">
                        <div className="panel-body" style={{overflow: "scroll"}}>
                            <div className="body">
                                <div className="table-responsive">
                                    <table className="table-striped table-hover display nowrap" style={{width: "100%"}}
                                           id="bonjour">
                                        <thead>
                                        <tr>
                                            <th className="mw30"></th>
                                            <th style={{minWidth: "80px"}}>DATE</th>
                                            <th style={{minWidth: "120px"}}>N° BON</th>
                                            <th style={{minWidth: "120px"}}>N° DEVIS</th>
                                            <th style={{minWidth: "150px"}}>FOURNISSEUR</th>
                                            <th style={{minWidth: "120px"}}>TOTAL HT</th>
                                            <th style={{minWidth: "120px"}}>TOTAL TTC</th>
                                            <th>RÉFÉRENCE</th>
                                            <th style={{minWidth: "150px"}}>CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {renderBonJour}
                                        </tbody>
                                        <tfoot>
                                        <tr className="bolderr">
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td className="text-right bg-blue col-white"><NumberFormat numb={bojht}/>
                                            </td>
                                            <td className="text-right bg-blue col-white"><NumberFormat numb={bojttc}/>
                                            </td>
                                            <td></td>
                                            <td className="mw150"></td>
                                        </tr>
                                        </tfoot>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="panel panel-pri">
                    <div className="panel-heading bg-pri" role="tab" id="headingBonLivre">
                        <h5 className="panel-title ">
                            <a className="collapsed text-white" role="button" data-toggle="collapse"
                               data-parent="#accordion_2"
                               href="#collapseBonLivre" aria-expanded="false" aria-controls="collapseBonLivre"
                               style={{fontSize: "16px", fontWeight: "500"}}>
                                <i className="material-icons col-white"
                                   style={{fontSize: "18px", float: "left"}}>keyboard_arrow_down</i> Bons de livraison
                                du
                                jour<span
                                className="badge bg-pink float-right">{livrecount}</span>
                            </a>
                        </h5>
                    </div>
                    <div id="collapseBonLivre" className="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingBonLivre">
                        <div className="panel-body" style={{overflow: "scroll"}}>
                            <div className="body">
                                <div className="table-responsive">
                                    <table className="table-striped table-hover display nowrap" style={{width: "100%"}}
                                           id="livrejour">
                                        <thead>
                                        <tr>
                                            <th className="mw30"></th>
                                            <th style={{minWidth: "80px"}}>DATE</th>
                                            <th style={{minWidth: "120px"}}>N° BON</th>
                                            <th style={{minWidth: "120px"}}>N° DEVIS</th>
                                            <th style={{minWidth: "120px"}}>TOTAL HT</th>
                                            <th style={{minWidth: "120px"}}>TOTAL TTC</th>
                                            <th>RÉFÉRENCE</th>
                                            <th style={{minWidth: "150px"}}>CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {renderLivreJour}
                                        </tbody>
                                        <tfoot>
                                        <tr className="bolderr">
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td className="text-right bg-blue col-white"><NumberFormat numb={lvejht}/>
                                            </td>
                                            <td className="text-right bg-blue col-white"><NumberFormat numb={lvejttc}/>
                                            </td>
                                            <td></td>
                                            <td className="mw150"></td>
                                        </tr>
                                        </tfoot>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="panel panel-pri">
                    <div className="panel-heading bg-pri" role="tab" id="headingBonca">
                        <h5 className="panel-title ">
                            <a className="collapsed text-white" role="button" data-toggle="collapse"
                               data-parent="#accordion_2"
                               href="#collapseBonca" aria-expanded="false" aria-controls="collapseBonca"
                               style={{fontSize: "16px", fontWeight: "500"}}>
                                <i className="material-icons col-white"
                                   style={{fontSize: "18px", float: "left"}}>keyboard_arrow_down</i> Bons de caisse du
                                jour<span
                                className="badge bg-pink float-right">{caiscount}</span>
                            </a>
                        </h5>
                    </div>
                    <div id="collapseBonca" className="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingBonca">
                        <div className="panel-body" style={{overflow: "scroll"}}>
                            <div className="body">
                                <div className="table-responsive">
                                    <table className="table-striped table-hover display nowrap" style={{width: "100%"}}
                                           id="caisjour">
                                        <thead>
                                        <tr>
                                            <th className="mw30"></th>
                                            <th>DATE</th>
                                            <th className="mw120">N° CAISSE</th>
                                            <th className="mw120">N° BON</th>
                                            <th className="mw120">N° DEVIS</th>
                                            <th>FOURNISSEUR | CHARGE</th>
                                            <th className="mw120">TOTAL TTC</th>
                                            <th className="mw200">RÉFÉRENCE</th>
                                            <th className="mw200">CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {renderCaisJour}
                                        </tbody>
                                        <tfoot>
                                        <tr className="bolderr">
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td className="text-right bg-blue col-white"><NumberFormat numb={cajttc}/>
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        </tfoot>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="panel panel-pri">
                    <div className="panel-heading bg-pri" role="tab" id="headingDecjo">
                        <h5 className="panel-title ">
                            <a className="collapsed text-white" role="button" data-toggle="collapse"
                               data-parent="#accordion_2"
                               href="#collapseDecjo" aria-expanded="false" aria-controls="collapseDecjo"
                               style={{fontSize: "16px", fontWeight: "500"}}>
                                <i className="material-icons col-white"
                                   style={{fontSize: "18px", float: "left"}}>keyboard_arrow_down</i> Décomptes du
                                jour<span
                                className="badge bg-pink float-right">{deccount}</span>
                            </a>
                        </h5>
                    </div>
                    <div id="collapseDecjo" className="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingDecjo">
                        <div className="panel-body" style={{overflow: "scroll"}}>
                            <div className="body">
                                <div className="table-responsive">
                                    <table className="table-striped table-hover display nowrap" style={{width: "100%"}}
                                           id="decjour">
                                        <thead>
                                        <tr>
                                            <th className="mw30"></th>
                                            <th>DATE</th>
                                            <th>N° DÉCOMPTE</th>
                                            <th>N° DEVIS</th>
                                            <th>TOTAL HT</th>
                                            <th>TOTAL TTC</th>
                                            <th>CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {renderDecJour}
                                        </tbody>
                                        <tfoot>
                                        <tr className="bolderr">
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td className="text-right bg-blue col-white"><NumberFormat numb={decjht}/>
                                            </td>
                                            <td className="text-right bg-blue col-white"><NumberFormat numb={decjttc}/>
                                            </td>
                                            <td></td>
                                        </tr>
                                        </tfoot>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="panel panel-pri">
                    <div className="panel-heading bg-pri" role="tab" id="headingFacjo">
                        <h5 className="panel-title ">
                            <a className="collapsed text-white" role="button" data-toggle="collapse"
                               data-parent="#accordion_2"
                               href="#collapseFacjo" aria-expanded="false" aria-controls="collapseFacjo"
                               style={{fontSize: "16px", fontWeight: "500"}}>
                                <i className="material-icons col-white"
                                   style={{fontSize: "18px", float: "left"}}>keyboard_arrow_down</i> Factures du
                                jour<span
                                className="badge bg-pink float-right">{faccount}</span>
                            </a>
                        </h5>
                    </div>
                    <div id="collapseFacjo" className="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingFacjo">
                        <div className="panel-body" style={{overflow: "scroll"}}>
                            <div className="body">
                                <div className="table-responsive">
                                    <table className="table-striped table-hover display nowrap" style={{width: "100%"}}
                                           id="facjour">
                                        <thead>
                                        <tr>
                                            <th className="mw30"></th>
                                            <th>DATE</th>
                                            <th>FACTURE</th>
                                            <th>DEVIS</th>
                                            <th>DÉCOMPTE</th>
                                            <th style={{whiteSpace: "nowrap"}}>TOTAL HT</th>
                                            <th style={{whiteSpace: "nowrap"}}>TOTAL TTC</th>
                                            <th>RÉFÉRENCE</th>
                                            <th>CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {renderFacJour}
                                        </tbody>
                                        <tfoot>
                                        <tr className="bolderr">
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td className="text-right bg-blue col-white"><NumberFormat numb={facht}/>
                                            </td>
                                            <td className="text-right bg-blue col-white"><NumberFormat numb={facttc}/>
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div className="row clearfix">
                <div className="col-sm-12 ">
                    <h4 className="bolo700">
                        État des comptes | Inventaire des articles
                    </h4>
                </div>
            </div>

            <div className="panel-group" id="accordion_2" role="tablist" aria-multiselectable="true">
                <div className="panel panel-pri">
                    <div className="panel-heading bg-pri" role="tab" id="headingEtats">
                        <h5 className="panel-title ">
                            <a className="collapsed text-white" role="button" data-toggle="collapse"
                               data-parent="#accordion_2"
                               href="#collapseEtats" aria-expanded="false" aria-controls="collapsePlaJO"
                               style={{fontSize: "16px", fontWeight: "500"}}>
                                <i className="material-icons col-white"
                                   style={{fontSize: "18px", float: "left"}}>keyboard_arrow_down</i> Comptes clients
                            </a>
                        </h5>
                    </div>
                    <div id="collapseEtats" className="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingEtats">
                        <div className="panel-body" style={{overflow: "scroll"}}>
                            <div className="body">
                                <div className="table-responsive">
                                    <ReactHTMLTableToExcel
                                        id="test-table-xls-button"
                                        className="btn bg-green text-white m-r-5 float-right"
                                        table="etates"
                                        filename="ÉTAT GÉNÉRAL DES COMPTES"
                                        sheet="tablexls"
                                        buttonText="EXPORTER EN EXCEL"/>
                                    <div className="col-md-4">
                                        <div className="input-group">
                                            <div className="form-line">
                                                <input type="text" className="form-control"
                                                       onChange={handleClients}
                                                       placeholder="Rechercher"/>
                                            </div>
                                        </div>
                                    </div>

                                    <table id="etates"
                                           className="table table-hover table-striped dashboard-task-infos display nowrape m-t-20 table-sort"
                                           style={{width: "100%"}}>
                                        <thead>
                                        <tr>
                                            <th className="text-left">CLIENTS</th>
                                            <th className="text-center">COÛT</th>
                                            <th className="text-center">RÈGLEMENT</th>
                                            <th className="text-center">SOLDE</th>
                                            <th className="text-center">DÉCOMPTES <br/>NON VALIDÉS</th>
                                            <th className="text-center">DÉCOMPTES <br/>VALIDÉS</th>
                                            <th className="text-center">FACTURES <br/>NON RÉGLÉES</th>
                                            <th className="text-center">FACTURES <br/>SOLDÉES</th>
                                            <th className="text-center">SOLDE <br/>À FACTURER</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {renderEtats}
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th></th>
                                            <td className="text-right"><NumberFormat numb={tozcout}/></td>
                                            <td className="text-right"><NumberFormat numb={tozregle}/></td>
                                            <td className="text-right bg-deep-purple col-white"><NumberFormat
                                                numb={tozsolde}/></td>
                                            <td className="text-right"><NumberFormat numb={totdecnv}/></td>
                                            <td className="text-right"><NumberFormat numb={totdecv}/></td>
                                            <td className="text-right bg-blue col-white"><NumberFormat numb={totfacnv}/>
                                            </td>
                                            <td className="text-right"><NumberFormat numb={totfacv}/></td>
                                            <td className="text-right bg-blue-grey col-white"><NumberFormat
                                                numb={tosoldeClient}/></td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="panel panel-pri">
                    <div className="panel-heading bg-pri" role="tab" id="headingPresta">
                        <h5 className="panel-title ">
                            <a className="collapsed text-white" role="button" data-toggle="collapse"
                               data-parent="#accordion_2"
                               href="#collapsePresta" aria-expanded="false" aria-controls="collapsePresta"
                               style={{fontSize: "16px", fontWeight: "500"}}>
                                <i className="material-icons col-white"
                                   style={{fontSize: "18px", float: "left"}}>keyboard_arrow_down</i> Prestataires de
                                services<span
                                className="badge bg-pink float-right">{prescount}</span>
                            </a>
                        </h5>
                    </div>
                    <div id="collapsePresta" className="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingPresta">
                        <div className="panel-body" style={{overflow: "scroll"}}>
                            <div className="body">
                                <div className="table-responsive">
                                    <div className="row">
                                        <div className="col-md-8" style={{paddingTop: "20px"}}>
                                                <span className="m-r-5 vareact"><input type="checkbox"
                                                                                       name="checkPresta"
                                                                                       id="checkedPresta"/></span>
                                            <a href="#" id="editPresta" className="m-r-5 vareact"><i
                                                className="fa fa fa-edit  col-green"/></a>
                                            <a href="#" id="delPresta" className="m-r-5 vareact"><i
                                                className="fa fa fa-trash col-pink "/></a>
                                            <ReactHTMLTableToExcel
                                                id="test-table-xls-button"
                                                className="btn badge badge-pill col-green m-r-5 float-left vareact"
                                                table="prests"
                                                title="Générer un fichier Excel"
                                                filename="COMPTE PRESTATAIRE"
                                                sheet="tablexls"
                                                buttonText="Ex"/>
                                        </div>
                                        <div className="col-md-4 float-right">
                                            <div className="input-group">
                                                <div className="form-line">
                                                    <input type="text" className="form-control"
                                                           onChange={handlePrests}
                                                           placeholder="Rechercher"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table id="prests"
                                           className="table table-hover table-striped dashboard-task-infos display nowrape m-t--10"
                                           style={{width: "100%"}}>
                                        <thead>
                                        <tr>
                                            <th className="text-center">#</th>
                                            <th className="text-left" colSpan="2">PRESTATAIRE</th>
                                            <th className="text-center">TOTAL TTC</th>
                                            <th className="text-center">PERÇUE TTC</th>
                                            <th className="text-center">SOLDE TTC</th>
                                            <th className="text-left" colSpan="2">FONCTION</th>
                                            <th className="text-center">CONTACTS</th>
                                            <th className="text-center">EMAIL</th>
                                            <th className="text-center">ADRESSE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {renderPresta}
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td></td>
                                            <td colSpan="2"></td>
                                            <td className="text-right"><NumberFormat numb={pttc}/></td>
                                            <td className="text-right"><NumberFormat numb={prec}/></td>
                                            <td className="text-right"><NumberFormat numb={pres}/></td>
                                            <td colSpan="2"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                    <div id="collapseFourne" className="panel-collapse collapse" role="tabpanel"
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
                <div className="panel panel-pri">
                    <div className="panel-heading bg-pri" role="tab" id="headingInv">
                        <h5 className="panel-title ">
                            <a className="collapsed text-white" role="button" data-toggle="collapse"
                               data-parent="#accordion_2"
                               href="#collapseInv" aria-expanded="false" aria-controls="collapseInv"
                               style={{fontSize: "16px", fontWeight: "500"}}>
                                <i className="material-icons col-white"
                                   style={{fontSize: "18px", float: "left"}}>keyboard_arrow_down</i> Inventaire des
                                articles
                            </a>
                        </h5>
                    </div>
                    <div id="collapseInv" className="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingInv">
                        <div className="panel-body" style={{overflow: "scroll"}}>
                            <div className="body">
                                <div className="table-responsive">
                                    <table id="inventaire"
                                           className="table table-hover table-striped dashboard-task-infos display nowrape m-t-20"
                                           style={{width: "100%"}}>
                                        <thead>
                                        <tr>
                                            <th className="text-left">CLIENT | CHANTIERS</th>
                                            <th className="text-left">COMMANDÉE / LIVRÉE</th>
                                            <th className="text-left">STOCK ACTUEL</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {renderInventaire}
                                        </tbody>

                                    </table>
                                    <br/>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div className="row clearfix">
                <div className="col-sm-12 ">
                    <h4 className="bolo700">
                        Charges diverses
                    </h4>
                </div>
            </div>

            <div className="row clearfix p-b-5">
                <div className="col-sm-12">
                    <div className="btn-group btn-group-sm" role="group" aria-label="Small button group">
                        <button type="button" data-toggle="modal" data-target="#modalPerso"
                                className="btn bg-pri text-white" style={{border: "1px solid #dddfeb"}}>+
                            PERSONNEL
                        </button>
                        <button type="button" data-toggle="modal" data-target="#modalInterne"
                                className="btn bolo600 text-black" style={{border: "1px solid #dddfeb"}}>+
                            CHARGE INTERNE
                        </button>
                        <button type="button" data-toggle="modal" data-target="#modalCaisseCharge"
                                className="btn bg-pri text-white" style={{border: "1px solid #dddfeb"}}>+
                            PAIEMENT CHARGE INTERNE
                        </button>
                        <button type="button" data-toggle="modal" data-target="#modalCaissePerso"
                                className="btn bolo600 text-black" style={{border: "1px solid #dddfeb"}}>+
                            PAIEMENT POUR LE PERSONNEL
                        </button>
                    </div>
                </div>
            </div>
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
                                                <span className="m-r-5 vareact"><input type="checkbox"
                                                                                       name="checkInterne"
                                                                                       id="checkedInterne"/></span>
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
                                        <th className="mw150 text-right p-r-15">SOLDE</th>
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
                                   style={{fontSize: "18px", float: "left"}}>keyboard_arrow_down</i>Rélévé des frais
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
                                            <th className="mw30 text-center">#</th>
                                            <th>NOM & PRÉNOMS</th>
                                            <th colSpan="2" className="text-center">SOMMES</th>
                                            <th colSpan="2" className="text-center">SOLDES</th>
                                            <th>PROFESSION</th>
                                            <th>CONTACTS</th>
                                            <th>EMAIL</th>
                                        </tr>
                                        <tr style={{borderBottom: "1px solid #000"}}>
                                            <th></th>
                                            <th></th>
                                            <th className="bg-light">SORTIE</th>
                                            <th className="bg-light">ENTRÉE</th>
                                            <th className="bg-light">SORTIE</th>
                                            <th className="bg-light">ENTRÉE</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {renderPersos}
                                        </tbody>
                                        <tfoot>

                                        <tr style={{borderBottom: "1px solid #000"}}>
                                            <td></td>
                                            <td></td>
                                            <td className="text-center col-white bg-blue"
                                                style={{whiteSpace: "nowrap"}}><NumberFormat numb={frepersoto}/></td>
                                            <td className="text-center col-white bg-blue"
                                                style={{whiteSpace: "nowrap"}}><NumberFormat numb={frepersuto}/></td>
                                            <td className="text-center col-white bg-blue"
                                                style={{whiteSpace: "nowrap"}}><NumberFormat
                                                numb={frepersoto - frepersuto}/></td>
                                            <td className="text-center col-white bg-blue"
                                                style={{whiteSpace: "nowrap"}}><NumberFormat
                                                numb={frepersoto - ((frepersoto - frepersuto) + frepersuto)}/></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
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
                                            <th className="mw30 text-center">#</th>
                                            <th>NOM & PRÉNOMS</th>
                                            <th colSpan="2" className="text-center">SOMMES</th>
                                            <th colSpan="2" className="text-center">SOLDES</th>
                                            <th>PROFESSION</th>
                                            <th>CONTACTS</th>
                                            <th>EMAIL</th>
                                        </tr>
                                        <tr style={{borderBottom: "1px solid #000"}}>
                                            <th></th>
                                            <th></th>
                                            <th className="bg-light">SORITE</th>
                                            <th className="bg-light">ENTRÉE</th>
                                            <th className="bg-light">SORITE</th>
                                            <th className="bg-light">ENTRÉE</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {renderPersoAvances}
                                        </tbody>
                                        <tfoot>

                                        <tr style={{borderBottom: "1px solid #000"}}>
                                            <td></td>
                                            <td></td>
                                            <td className="text-center col-white bg-blue"
                                                style={{whiteSpace: "nowrap"}}><NumberFormat numb={avsoto}/></td>
                                            <td className="text-center col-white bg-blue"
                                                style={{whiteSpace: "nowrap"}}><NumberFormat numb={avsuto}/></td>
                                            <td className="text-center col-white bg-blue"
                                                style={{whiteSpace: "nowrap"}}><NumberFormat
                                                numb={avsoto - avsuto}/></td>
                                            <td className="text-center col-white bg-blue"
                                                style={{whiteSpace: "nowrap"}}><NumberFormat
                                                numb={avsoto - ((avsoto - avsuto) + avsuto)}/></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
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
                                            <th className="mw30 text-center">#</th>
                                            <th>NOM & PRÉNOMS</th>
                                            <th colSpan="2" className="text-center">SOMMES</th>
                                            <th colSpan="2" className="text-center">SOLDES</th>
                                            <th>PROFESSION</th>
                                            <th>CONTACTS</th>
                                            <th>EMAIL</th>
                                        </tr>
                                        <tr style={{borderBottom: "1px solid #000"}}>
                                            <th></th>
                                            <th></th>
                                            <th className="bg-light">SORTIE</th>
                                            <th className="bg-light">ENTRÉE</th>
                                            <th className="bg-light">SORTIE</th>
                                            <th className="bg-light">ENTRÉE</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {renderPersoPrets}
                                        </tbody>
                                        <tfoot>

                                        <tr style={{borderBottom: "1px solid #000"}}>
                                            <td></td>
                                            <td></td>
                                            <td className="text-center col-white bg-blue"
                                                style={{whiteSpace: "nowrap"}}><NumberFormat numb={pretsoto}/></td>
                                            <td className="text-center col-white bg-blue"
                                                style={{whiteSpace: "nowrap"}}><NumberFormat numb={pretsuto}/></td>
                                            <td className="text-center col-white bg-blue"
                                                style={{whiteSpace: "nowrap"}}><NumberFormat
                                                numb={pretsoto - pretsuto}/></td>
                                            <td className="text-center col-white bg-blue"
                                                style={{whiteSpace: "nowrap"}}><NumberFormat
                                                numb={pretsoto - ((pretsoto - pretsuto) + pretsuto)}/></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
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
                                            <th className="mw30 text-center">#</th>
                                            <th>NOM & PRÉNOMS</th>
                                            <th colSpan="2" className="text-center">SOMMES</th>
                                            <th colSpan="2" className="text-center">SOLDES</th>
                                            <th>PROFESSION</th>
                                            <th>CONTACTS</th>
                                            <th>EMAIL</th>
                                        </tr>
                                        <tr style={{borderBottom: "1px solid #000"}}>
                                            <th></th>
                                            <th></th>
                                            <th className="bg-light">SORTIE</th>
                                            <th className="bg-light">ENTRÉE</th>
                                            <th className="bg-light">SORTIE</th>
                                            <th className="bg-light">ENTRÉE</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {renderPersoSalaires}
                                        </tbody>
                                        <tfoot>

                                        <tr style={{borderBottom: "1px solid #000"}}>
                                            <td></td>
                                            <td></td>
                                            <td className="text-center col-white bg-blue"
                                                style={{whiteSpace: "nowrap"}}><NumberFormat numb={sasoto}/></td>
                                            <td className="text-center col-white bg-blue"
                                                style={{whiteSpace: "nowrap"}}><NumberFormat numb={sasuto}/></td>
                                            <td className="text-center col-white bg-blue"
                                                style={{whiteSpace: "nowrap"}}><NumberFormat
                                                numb={sasoto - sasuto}/></td>
                                            <td className="text-center col-white bg-blue"
                                                style={{whiteSpace: "nowrap"}}><NumberFormat
                                                numb={sasoto - ((sasoto - sasuto) + sasuto)}/></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
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
                                        <th>SORITE DE CAISSE</th>
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

                <div className="panel panel-pri shadow m-t-5" style={{marginTop: "20px"}}>
                    <div className="panel-heading" role="tab" id="headingImpEnt">
                        <h4 className="panel-title">
                            <a className="collapsed  col-white" role="button" data-toggle="collapse"
                               data-parent="#accordionImpEnt" href="#collapseImpEnt" aria-expanded="false"
                               aria-controls="collapseImpEnt">
                                <i className="material-icons col-white"
                                   style={{fontSize: "18px", float: "left"}}>keyboard_arrow_down</i>Solde de l'entreprise
                            </a>
                        </h4>
                    </div>
                    <div id="collapseImpEnt" className="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingImpEnt">
                        <div className="panel-body " style={{overflow: "scroll"}}>
                            <div className="table-responsive shadow bg-white"
                                 style={{color: "#555"}}>
                                <div className="row">
                                    <div className="col-md-8" style={{paddingTop: "20px"}}>
                                        <ReactHTMLTableToExcel
                                            id="test-table-xls-button"
                                            className="btn badge badge-pill col-green m-r-5 float-left vareact"
                                            table="releEntre"
                                            title="Générer un fichier Excel"
                                            filename="RÉLÉVÉ SOLDE DE L'ENTREPRISE"
                                            sheet="tablexls"
                                            buttonText="Ex"/>
                                    </div>
                                </div>
                                <table className="table-striped table-hover display nowrap"
                                       style={{width: "100%", marginBottom: "10px"}} id="relePerso">
                                    <thead>
                                    <tr>
                                        <th className="col-blue-grey">RÈGLEMENTS DES CLIENTS</th>
                                        <th className="col-blue-grey">DÉPENSES DES CHANTIERS</th>
                                        <th className="col-blue-grey">CHARGES INTERNES</th>
                                        <th className="col-blue-grey">CHARGES DU PERSONNEL</th>
                                        <th className="col-blue-grey">SOLDE</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td style={{fontWeight: "bold", textAlign: "center"}}><NumberFormat
                                            numb={sumRegle}/></td>
                                        <td style={{fontWeight: "bold", textAlign: "center"}}><NumberFormat
                                            numb={sumDepense}/></td>
                                        <td style={{fontWeight: "bold", textAlign: "center"}}><NumberFormat
                                            numb={soreinternedebit - soreinternecredit}/></td>
                                        <td style={{fontWeight: "bold", textAlign: "center"}}><NumberFormat
                                            numb={rpdebit - rpcredit}/></td>
                                        {soldeEntre > 0 &&
                                            <td className="col-green"
                                                style={{whiteSpace: "nowrap", fontWeight: "bold", textAlign: "center"}}>
                                                <NumberFormat numb={soldeEntre}/></td>
                                        }
                                        {soldeEntre === 0 &&
                                            <td className="col-blue-grey"
                                                style={{whiteSpace: "nowrap", fontWeight: "bold", textAlign: "center"}}>
                                                <NumberFormat numb={soldeEntre}/></td>
                                        }
                                        {soldeEntre < 0 &&
                                            <td className="col-pink"
                                                style={{whiteSpace: "nowrap", fontWeight: "bold", textAlign: "center"}}>
                                                <NumberFormat numb={soldeEntre}/></td>
                                        }

                                    </tr>
                                    </tbody>
                                </table>
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="panel panel-pri shadow m-t-5" style={{marginTop: "20px"}}>
                    <div className="panel-heading" role="tab" id="headingDepComp">
                        <h4 className="panel-title">
                            <a className="collapsed  col-white" role="button" data-toggle="collapse"
                               data-parent="#accordionImpEnt" href="#collapseDepComp" aria-expanded="false"
                               aria-controls="collapseDepComp">
                                <i className="material-icons col-white"
                                   style={{fontSize: "18px", float: "left"}}>keyboard_arrow_down</i>Les différentes
                                dépenses de votre compte
                            </a>
                        </h4>
                    </div>
                    <div id="collapseDepComp" className="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingDepComp">
                        <div className="panel-body " style={{overflow: "scroll"}}>
                            <div className="table-responsive shadow bg-white"
                                 style={{color: "#555"}}>

                                <select className="form-select" id="getDepenses" aria-label="Default select example">
                                    <option value="" selected disabled>Dépenses par mois</option>
                                    <option value="01-2024">JANVIER 2024</option>
                                    <option value="02-2024">FÉVRIER 2024</option>
                                    <option value="03-2024">MARS 2024</option>
                                    <option value="04-2024">AVRIL 2024</option>
                                    <option value="05-2024">MAI 2024</option>
                                </select>

                                <h4 className="bolo600 col-blue">CHARGE INTERNE PAR MOIS</h4>

                                <div className="row">
                                    <div className="col-md-8" style={{paddingTop: "20px"}}>
                                            <span className="m-r-5 vareact" title="Tout sélectionner"><input
                                                type="checkbox" name="checkBinvaMo" id="checkBinvaMo"/></span>

                                        <a title="Valider" style={{textDecoration: "none"}}
                                           className="m-r-5 vareact bg-blue-grey bolo700 col-white"
                                           id="devalideCaisse">V</a>

                                        <a title="Supprimer" id="delCaisse" className="m-r-5 vareact"><i
                                            className="fa fa fa-trash col-pink "/></a>

                                        <ReactHTMLTableToExcel
                                            id="test-table-xls-button"
                                            className="btn badge badge-pill col-green m-r-5 float-left vareact"
                                            table="bonMoisInterne"
                                            title="Générer un fichier Excel"
                                            filename="CHARGE INTERNE PAR MOIS"
                                            sheet="tablexls"
                                            buttonText="Ex"/>
                                    </div>
                                    <div className="col-md-4 float-right">
                                        <div className="input-group">
                                            <div className="form-line">
                                                <input type="text" className="form-control"
                                                       onChange={handleBonMoisInterne}
                                                       placeholder="Rechercher"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table className="table-striped table-hover display nowrap" id="bonMoisInterne"
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
                                            style={{whiteSpace: "nowrap"}}><NumberFormat numb={frmoisinterne}/></th>
                                        <th></th>
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
    const root = createRoot(document.getElementById('setchantier'));
    root.render(<Etats/>);
} catch (e) {
}
