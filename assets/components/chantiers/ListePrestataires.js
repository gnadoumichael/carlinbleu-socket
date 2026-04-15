import React, {useEffect, useState} from "react";
import {createRoot} from 'react-dom/client';
import axios from "axios";
import ReactHTMLTableToExcel from 'react-html-table-to-excel';
import NumberFormat from "../../fonctions/NumberFormat";
import Moment from 'react-moment';
import $ from "jquery";
import {Filler} from "chart.js";

const ListePrestataires = () => {
    let purser = $("#prestas").val();
    const [prestas, setPrestas] = useState([]);
    const [clients, setClients] = useState([]);

    const fetchPresta = async () => {
        const dde = JSON.parse($('#jsonprestas').val());
        const dyc = JSON.parse($('#jsonclients').val());
        setPrestas(dde);
        setClients(dyc);
    };

    useEffect(() => {
        fetchPresta();
    }, []);

    const showBonPresta = (id) => {
        if ($('.' + id + 'bons').hasClass("hide")) {
            $('.' + id + 'bons').removeClass('hide');
        } else {
            $('.' + id + 'bons').addClass('hide');
        }
    }
    const showChantiers = (id) => {
        if ($('.' + id + 'chantier').hasClass("hide")) {
            $('.' + id + 'chantier').removeClass('hide');
        } else {
            $('.' + id + 'chantier').addClass('hide');
            $('.bonbon').addClass('hide');
        }
    }
    const formatNumber = (num, precision, separator) => {
        let parts;
        num = Number(num);
        num = (typeof precision !== 'undefined' ? num.toFixed(precision) : num).toString();
        parts = num.split('.');
        parts[0] = parts[0].toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1' + (separator));
        return parts.join(',');
    }

    let pttc = 0;
    let prec = 0;
    let pres = 0;
    let prescount = 0;
    let renderPresta = prestas.map((presta) => {
        prescount = prescount + 1;
        let bons = presta.bons;
        let ttc = 0;
        let rec = 0;
        let res = 0;
        let bbcount = 0;


        const renderChantiers = clients.map((client) => {
            let chantiers = client.chantiers;
            if (chantiers.length > 0) {
                return chantiers.map((chan) => {
                    let ca = 0;
                    let chanrecu = 0;
                    let chanreste = 0;
                    let chanttc = 0;

                    bons.map((bon) => {
                        if (bon.corbeille === null && parseInt(bon.chantier.id) === parseInt(chan.id)) {
                            ca = ca + 1;
                        }
                    });
                    const renderBons = bons.map((bon) => {
                        if (bon.corbeille === null && bon.chantier.id === chan.id) {
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
                            chanrecu = chanrecu + bon.recu;
                            chanttc = chanttc + bon.totalttc;
                            chanreste = chanreste + bon.reste;
                            const renderCaisses = caisses.map((caisse) => {
                                if (caisse.corbeille === null) {
                                    return (<tr key={caisse.id}
                                                className={chan.id + '' + presta.id + 'bons bonbon' + ' hide'}>
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
                                               className="text-left col-blue-grey bolo600">Caisse
                                                N° {caisse.numcaisse}</a>
                                        </td>
                                        <td className="text-right borde"></td>
                                        <td className="text-right borde"><NumberFormat numb={caisse.montant}/></td>
                                        <td className="text-left ml30 borde" colSpan="7"
                                            dangerouslySetInnerHTML={{__html: caisse.caissereference}}></td>
                                    </tr>);
                                } else {
                                    return null;
                                }

                            });
                            return (<>
                                <tr key={bon.id} className={chan.id + '' + presta.id + 'bons bonbon' + ' hide'}
                                    style={{backgroundColor: "#dae8f5"}}>
                                    <td className="text-left bolo600 borde"><Moment
                                        format="DD/MM/YYYY">{bon.date}</Moment></td>
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
                                                    className="fa fa-trash col-pink" title="Supprimer"
                                                    aria-hidden="true"></i></a>
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
                                    <td className="text-right borde" style={{backgroundColor: "#34cfac"}}><NumberFormat
                                        numb={bon.reste}/></td>
                                    <td className="text-left borde" colSpan="5"
                                        dangerouslySetInnerHTML={{__html: bon.bonreference}}></td>
                                </tr>
                                {renderCaisses}
                            </>)
                        } else {
                            return null;
                        }
                    });
                    if (ca > 0) {
                        return (<>
                            <tr key={chan.id} className={presta.id + 'chantier' + ' hide'} onClick={() => {
                                showBonPresta(chan.id + '' + presta.id)
                            }}>
                                <td></td>
                                <td colSpan="2"># <span
                                    className="col-pink bolo700">{client.nomclient.toUpperCase()}</span> | <span
                                    className="col-pink bolo700">{chan.nomchantier.toUpperCase()}</span></td>
                                <td className="text-right borde" style={{backgroundColor: "#daeae6"}}><NumberFormat
                                    numb={chanttc}/></td>
                                <td className="text-right borde" style={{backgroundColor: "#daeae6"}}><NumberFormat
                                    numb={chanrecu}/></td>
                                <td className="text-right borde" style={{backgroundColor: "#daeae6"}}><NumberFormat
                                    numb={chanreste}/></td>
                                <td colSpan="5"></td>
                            </tr>
                            {renderBons}
                        </>)
                    }
                    return null;
                });
            }
            return null;

        });

        return (<>
            <tr className="paginate2" key={presta.id} onClick={() => {
                showChantiers(presta.id)
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
            <tr className={presta.id + 'chantier' + ' hide'}>
                <td className="text-left bolo600 col-pink ml30 borde">Date</td>
                <td className="text-left bolo600 col-pink ml30 borde">Bons</td>
                <td className="text-left bolo600 col-pink ml30 borde">Devis</td>
                <td className="text-right bolo600 col-pink borde">Total TTC</td>
                <td className="text-right bolo600 col-pink borde">Perçu</td>
                <td className="text-right bolo600 col-pink borde">Reste</td>
                <td className="text-left bolo600 col-pink ml30 borde" colSpan="2">Client | Chantier</td>
                <td className="text-left bolo600 col-pink borde" colSpan="3">Référence</td>
            </tr>
            {renderChantiers}
        </>);
    });

    if (purser !== 'a') {
        $('#modalPrestataire').modal('show');
    }

    $(function () {
        $(".js-example-basic-multiple").select2();
        $(".js-example-basic-single").select2();
        $("#voise").simplePagination(('tbody .paginate2'));
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
            window.location.href = '/crm/prestataire/edit/' + $(this).val();
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
                    window.location.href = '/crm/prestataire/';
                },
                error: function (xhr, resp, text) {
                    $('#ModalErreur').modal('show')
                },
            })
        }
    })
    $('#adduBon').on("click", function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#adduBon').hide()
            $('#closuBon').hide()
            $('#loaduBon').css('display', '')
            $('#editor10').val(CKEDITOR.instances['editor10'].getData())
            $('#editor11').val(CKEDITOR.instances['editor11'].getData())
            $.ajax({
                type: 'POST',
                url: '/crm/bon/chanpresta/adda',
                data: JSON.stringify($('#adduBonForm').serializeObject()),
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
                    $('#mdModalBon').modal('toggle')
                    $('#ModalErreur').modal('show')
                },
            })
        }
    })

    $("#handlePrests").on("input", function () {
        const value = $(this).val();
        let filter = value.toLowerCase();
        const results = prestas.filter(function (item) {
            if (item.fournisseur.toLowerCase().indexOf(filter) !== -1) {
                return item;
            }
        });
        console.log(results);
        $("#voise tbody").empty();
        $("#voise tfoot").empty();

        results.map((presta) => {
            prescount = prescount + 1;
            let bons = presta.bons;
            let ttc = 0;
            let rec = 0;
            let res = 0;
            let bbcount = 0;
            let mobile = " ";
            let mail = " ";
            let adresse = " ";
            let titre = " ";

            if (presta.adresse !== null) {
                adresse = presta.adresse;
            }

            if (presta.mail !== null) {
                mail = presta.mail;
            }

            if (presta.mobile !== null) {
                mobile = presta.mobile;
            }

            if (presta.titre !== undefined) {
                titre = presta.titre;
            }

            clients.map((client) => {
                let chantiers = client.chantiers;
                if (chantiers.length > 0) {
                    chantiers.map((chan) => {
                        bons.map((bon) => {
                            if (bon.corbeille === null && bon.chantier.id === chan.id) {
                                bbcount = bbcount + 1;
                                if (bon.etat === "valide") {
                                    ttc += bon.totalttc;
                                    rec += bon.recu;
                                    res += bon.reste;
                                }
                            }
                        });
                    });
                }
            });

            ttc = formatNumber(ttc, 2, ' ');
            rec = formatNumber(rec, 2, ' ');
            res = formatNumber(res, 2, ' ');

            let newData =
                `<tr class = "paginate2" onclick = "showChan(${presta.id})" >
                 <td class = "mw30 text-center"></td>
                <td class = "text-left bolo700" colSpan="2"><b class ="col-blue">(${bbcount})</b> ${presta.fournisseur}</td>
                <td class = "text-right">${ttc}</td>
                <td class = "text-right">${rec}</td>
                <td class = "text-right bg-blue-grey">${res}</td>
                <td class = "text-center" colSpan="2">${titre}</td>
                <td class = "text-center">${mobile}</td>
                <td class = "text-center">${mail}</td>
                <td class = "text-center">${adresse}</td>
              </tr>
              <tr class = "${presta.id}chan hide"}>
                    <td class ="text-left bolo600 col-pink ml30 borde">Date</td>
                    <td class ="text-left bolo600 col-pink ml30 borde">Bons</td>
                    <td class ="text-left bolo600 col-pink ml30 borde">Devis</td>
                    <td class ="text-right bolo600 col-pink borde">Total TTC</td>
                    <td class ="text-right bolo600 col-pink borde">Perçu</td>
                    <td class ="text-right bolo600 col-pink borde">Reste</td>
                    <td class ="text-left bolo600 col-pink ml30 borde" colSpan="2">Client | Chantier</td>
                    <td class ="text-left bolo600 col-pink borde" colSpan="3">Référence</td>
                </tr>`;

            clients.map((client) => {
                let chantiers = client.chantiers;
                if (chantiers.length > 0) {
                    chantiers.map((chan) => {

                        let ca = 0;
                        let chanrecu = 0;
                        let chanreste = 0;
                        let chanttc = 0;

                        bons.map((bon) => {
                            if (bon.corbeille === null && bon.chantier.id === chan.id) {
                                ca = ca + 1;
                                bbcount = bbcount + 1;
                                if (bon.etat === "valide") {
                                    chanrecu = chanrecu + bon.recu;
                                    chanttc = chanttc + bon.totalttc;
                                    chanreste = chanreste + bon.reste;
                                }
                            }
                        });

                        chanttc = formatNumber(chanttc, 2, ' ');
                        chanrecu = formatNumber(chanrecu, 2, ' ');
                        chanreste = formatNumber(chanreste, 2, ' ');

                        let aa = chan.id + "" + presta.id;

                        if (ca > 0) {
                            newData +=
                                `<tr class = "${presta.id}chan hide" onclick = "showBons(${aa})">
                                    <td></td>
                                    <td colspan="2"># <span class="col-pink bolo700">${client.nomclient.toUpperCase()}</span> | <span class="col-pink bolo700">${chan.nomchantier.toUpperCase()}</span></td>
                                    <td class="text-right borde">${chanttc}</td>
                                    <td class="text-right borde">${chanrecu}</td>
                                    <td class="text-right borde">${chanreste}</td>
                                    <td colspan="5"></td>
                                </tr>`
                        }

                        bons.map((bon) => {
                            if (bon.corbeille === null && bon.chantier.id === chan.id) {
                                let date = new Date(bon.date);
                                newData += `
                                <tr class = "${chan.id}${presta.id}bons hide" style="background-color: #dae8f5">
                                    <td class ="text-left bolo600 borde">${date.toLocaleDateString('fr-FR')}</td>
                                    <td class ="text-left pri borde">
                                     ${bon.etat === "save"
                                    ? `<a class ="badge badge-pill bg-blue-grey">V</a> <a href="/crm/bon/${bon.id}/${bon.chantier.id}" class = "text-left col-blue-grey bolo600">Bon N° ${bon.numbon}</a>`
                                    : `<a class ="badge badge-pill bg-blue">V</a> <a href="/crm/bon/${bon.id}/${bon.chantier.id}" class = "text-left col-blue bolo600">Bon N° ${bon.numbon}</a>`
                                }
                                    </td>
                                    <td class ="text-left pri borde">
                                    ${bon.devis.etat === "save"
                                    ? `<a class ="badge badge-pill bg-blue-grey">V</a> <a href="/crm/devis/${bon.devis.id}/${bon.chantier.id}" class = "text-left col-blue-grey bolo600">Devis N° ${bon.devis.iddevis}</a>`
                                    : `<a class ="badge badge-pill bg-blue">V</a> <a href="/crm/devis/${bon.devis.id}/${bon.chantier.id}" class = "text-left col-blue bolo600">Devis N° ${bon.devis.iddevis}</a>`
                                }  
                                    </td>
                                    <td class ="text-right borde">${formatNumber(bon.totalttc, 2, ' ')}</td>
                                    <td class ="text-right borde">${formatNumber(bon.recu, 2, ' ')}</td>
                                    <td class ="text-right borde" style="background-color:#34cfac">${formatNumber(bon.reste, 2, ' ')}</td>
                                    <td class ="text-left borde" colSpan="5">${bon.bonreference.replace("<p>&nbsp;</p>", "")}</td>
                                </tr>`;

                                let caisses = bon.caisses;
                                caisses.map((caisse) => {
                                    if (caisse.corbeille === null) {
                                        let date = new Date(caisse.date);
                                        newData += `
                                     <tr class = "${chan.id}${presta.id}bons hide">
                                        <td class = "text-left bolo600 ml30 borde">${date.toLocaleDateString('fr-FR')}</td>
                                        <td class = "ml30 borde">
                                         ${caisse.etat === "save"
                                            ? `<a class ="badge badge-pill bg-blue-grey">V</a> <a href="/crm/caisse/${caisse.id}/${bon.chantier.id}" class = "text-left col-blue-grey bolo600">Caisse N° ${caisse.numcaisse}</a>`
                                            : `<a class ="badge badge-pill bg-blue">V</a>  <a href="/crm/caisse/${caisse.id}/${bon.chantier.id}" class = "text-left col-blue bolo600">Caisse N° ${caisse.numcaisse}</a>`
                                        }
                                        </td>
                                        <td class = "text-right borde"></td>
                                        <td class = "text-right borde">${formatNumber(caisse.montant, 2, ' ')}</td>
                                        <td class = "text-left ml30 borde" colSpan="7">${caisse.caissereference.replace("<p>&nbsp;</p>", "")}</td>
                                    </tr>`;
                                    }
                                });
                            }
                        });
                    });
                }
            });

            $("#voise tbody").append(newData);
        });
    });

    return (<>
        <div className="col-md-12" style={{paddingLeft: "0"}}>
            <button type="button" data-color="blue" className="btn bg-blue-grey text-white bolo600 waves-effect m-r-5"
                    data-toggle="modal" data-target="#modalPrestataire">+ PRESTATAIRE
            </button>
            <button type="button" data-color="blue" className="btn bg-blue-grey text-white bolo600 waves-effect"
                    data-toggle="modal" data-target="#modalBon">+ BON PRESTATAIRE
            </button>
            <div className="panel-group" id="accordion_2" role="tablist" aria-multiselectable="true">
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
                    <div id="collapsePresta" className="panel-collapse" role="tabpanel"
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
                                                           id="handlePrests"
                                                           placeholder="Rechercher"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table id="voise"
                                           className="table table-hover table-striped dashboard-task-infos display nowrape m-t--10"
                                           style={{width: "100%"}}>
                                        <thead>
                                        <tr>
                                            <th className="text-center">#</th>
                                            <th className="text-left" colSpan="2">PRESTATAIRE</th>
                                            <th className="text-center">TOTAL TTC</th>
                                            <th className="text-center">PERÇUE TTC</th>
                                            <th className="text-center" style={{backgroundColor: "#34cfac"}}>SOLDE TTC
                                            </th>
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
            </div>
        </div>
    </>);

}

try {
    const root = createRoot(document.getElementById('setprestataires'));
    root.render(<ListePrestataires/>);
} catch (e) {
}
