import React, {useEffect, useState} from "react";
import {createRoot} from 'react-dom/client';
import ReactHTMLTableToExcel from 'react-html-table-to-excel';
import NumberFormat from "../../fonctions/NumberFormat";
import $ from "jquery";
import * as moment from "moment/moment";
import Moment from "react-moment";
import axios from "axios";

const SoldeCompte = () => {

    let sumRegle = $("#sumRegle").val();
    let sumDepense = $("#sumDepense").val();

    const [caissin, setCaissin] = useState([]);
    const [caisschan, setCaissChantiers] = useState([]);
    const [caissperso, setCaissPerso] = useState([]);
    const [reglements, setReglements] = useState([]);
    const [frmoisinterne, setfrmoisinterne] = useState(0);
    const [frmoischantiers, setfrmoischantiers] = useState(0);
    const [frmoisperso, setfrmoisperso] = useState(0);
    const [frmoisregle, setfrmoisregle] = useState(0);
    const [frdeppresta, setdeppresta] = useState(0);


    const fetchCaisseInterne = async () => {
        const dede = JSON.parse($('#caisseinterne').val());
        setCaissin(dede);
    };
    const fetchCaissePerso = async () => {
        const dedo = JSON.parse($('#caisseperso').val());
        setCaissPerso(dedo);
    };
    const fetchCaisseChantiers = async () => {
        const dedi = JSON.parse($('#caissechantiers').val());
        setCaissChantiers(dedi);
    };
    const fetchReglements = async () => {
        const deda = JSON.parse($('#reglements').val());
        setReglements(deda);
    };


    const formatNumber = (num, precision, separator) => {
        let parts;
        num = Number(num);
        num = (typeof precision !== 'undefined' ? num.toFixed(precision) : num).toString();
        parts = num.split('.');
        parts[0] = parts[0].toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1' + (separator));
        return parts.join(',');
    }
    $("#getDepensesInternes").off().on("change", async function () {
        $('#bonMoisInterne tbody').children().remove()
        let bivcount = 0;
        let dew = $(this).val();
        let ss = 0;
        caissin.map((caiss) => {
            if (caiss.etat === "valide") {
                let dez = moment(caiss.date).format('MM-YYYY');
                if (dew === dez) {
                    ss = ss + caiss.montant;
                }
            }
        });
        setfrmoisinterne(ss);
        caissin.map((caiss) => {
            if (caiss.etat === "valide") {
                let dez = moment(caiss.date).format('MM-YYYY');
                if (dew === dez) {
                    bivcount = bivcount + 1;
                    let pok = '';
                    if (caiss.personnel !== null) {
                        pok = caiss.personnel.noms.toUpperCase();
                    }
                    $('#bonMoisInterne tbody').append('' +
                        '<tr key={caiss.id} class="paginate12">' +
                        '<td align="center" class="mw30"><input class="form-check-input" type="checkbox" value={caiss.id} name="checkChaIntMois" id="checkChaIntMois"/></td>' +
                        '<td class="text-center"><a href="#"><i class="fa fa-eye col-green" aria-hidden="true"></i></a></td>' +
                        ' <td><Moment format="DD/MM/YYYY">' + moment(caiss.date).locale("fr").format('L') + '</Moment></td>' +
                        '<td> <a href="/crm/caisse/' + caiss.id + '/' + caiss.chantier.id + '">' +
                        '<span class="badge badge-pill badge-primary m-r-5">V</span>' + caiss.numcaisse + '</a></td>' +
                        '<td>' + pok + '<br/>' + caiss.caissereference + '</td>' +
                        '<td class="text-right">' + formatNumber(caiss.montant, 2, ' ') + '</td>' +
                        '<td class="text-left pri bolo600">' + caiss.dobyuser.nom.toUpperCase() + ' ' + caiss.dobyuser.prenoms.toUpperCase() + '</td>' +
                        '</tr>'
                    )
                }
            }
        });
    });

    $("#getDepFour").off().on("change", async function () {
        $('#depfour tbody').children().remove()
        let chcount = 0;
        let dewn = $(this).val();
        let sss = 0;
        caisschan.map((caissu) => {
            let dezz = moment(caissu.date).format('MM-YYYY');
            if (dewn === dezz) {
                sss = sss + caissu.montant;
            }
        });
        setfrmoischantiers(sss);
        caisschan.map((caissu) => {
            let dezz = moment(caissu.date).format('MM-YYYY');
            if (dewn === dezz) {
                chcount = chcount + 1;
                let pokk = '';
                if (caissu.bon !== null) {
                    pokk = caissu.bon.fournisseur.fournisseur.toUpperCase();
                }
                $('#depfour tbody').append('' +
                    '<tr key={caissu.id} class="paginate13">' +
                    '<td align="center" class="mw30"><input class="form-check-input" type="checkbox" value={caissu.id} name="checkChanMois" id="checkChanMois"/></td>' +
                    '<td class="text-center"><a href="#"><i class="fa fa-eye col-green" aria-hidden="true"></i></a></td>' +
                    ' <td><Moment format="DD/MM/YYYY">' + moment(caissu.date).locale("fr").format('L') + '</Moment></td>' +
                    '<td> <a href={`/crm/caisse/${caissu.id}/${caissu.chantier.id}`}>' +
                    '<span class="badge badge-pill badge-primary m-r-5">V</span>' + caissu.numcaisse + '</a></td>' +
                    '<td><span class="col-pink bolo700">' + pokk + '</span><br/>' + caissu.caissereference + '(<b>' + caissu.client.nomclient + ' ' + caissu.chantier.nomchantier + '</b>)</td>' +
                    '<td class="text-right">' + formatNumber(caissu.montant, 2, ' ') + '</td>' +
                    '<td class="text-left pri bolo600">' + caissu.dobyuser.nom.toUpperCase() + ' ' + caissu.dobyuser.prenoms.toUpperCase() + '</td>' +
                    '</tr>'
                )
            }
        });
    });
    $("#getDepPresta").off().on("change", async function () {
        $('#deppresta tbody').children().remove()
        let chcount = 0;
        let dewn = $(this).val();
        let sss = 0;
        caisschan.map((caissu) => {
            let dezz = moment(caissu.date).format('MM-YYYY');
            if (dewn === dezz) {
                if (caissu.bon !== null && caissu.etat === "valide") {
                    if (caissu.bon.fournisseur.type === 3) {
                        sss = sss + caissu.montant;
                    }
                }
            }
        });
        setdeppresta(sss);
        caisschan.map((caissu) => {
            let dezz = moment(caissu.date).format('MM-YYYY');
            if (dewn === dezz) {
                chcount = chcount + 1;
                let pokk = '';
                if (caissu.bon !== null && caissu.etat === "valide") {
                    if (caissu.bon.fournisseur.type === 3) {
                        pokk = caissu.bon.fournisseur.fournisseur.toUpperCase();
                        $('#deppresta tbody').append('' +
                            '<tr key={caissu.id} class="paginateDepPresta">' +
                            '<td align="center" class="mw30"><input class="form-check-input" type="checkbox" value='+caissu.id+' name="checkpresta" id="checkpresta"/></td>' +
                            '<td class="text-center"><a href="#"><i class="fa fa-eye col-green" aria-hidden="true"></i></a></td>' +
                            ' <td><Moment format="DD/MM/YYYY">' + moment(caissu.date).locale("fr").format('L') + '</Moment></td>' +
                            '<td> <a href=/crm/caisse/'+caissu.id+'/'+caissu.chantier.id+'>' +
                            '<span class="badge badge-pill badge-primary m-r-5">V</span>' + caissu.numcaisse + '</a></td>' +
                            '<td><span class="col-pink bolo700">' + pokk + '</span><br/>' + caissu.caissereference + '(<b>' + caissu.client.nomclient + ' ' + caissu.chantier.nomchantier + '</b>)</td>' +
                            '<td class="text-right">' + formatNumber(caissu.montant, 2, ' ') + '</td>' +
                            '<td class="text-left pri bolo600">' + caissu.dobyuser.nom.toUpperCase() + ' ' + caissu.dobyuser.prenoms.toUpperCase() + '</td>' +
                            '</tr>'
                        )
                    }
                }
            }
        });
    });
    $("#getDepensesPersonnel").off().on("change", async function () {
        $('#chargepersonnel tbody').children().remove()
        let chpercount = 0;
        let deen = $(this).val();
        let sas = 0;

        caissperso.map((caise) => {
            let dazz = moment(caise.date).format('MM-YYYY');
            if (deen === dazz) {
                sas = sas + caise.montant;
            }
        });
        setfrmoisperso(sas);
        caissperso.map((caise) => {
            let dazz = moment(caise.date).format('MM-YYYY');
            if (deen === dazz) {
                chpercount = chpercount + 1;
                let pakk = '';
                if (caise.personnel !== null) {
                    pakk = caise.personnel.noms.toUpperCase();
                }
                $('#chargepersonnel tbody').append('' +
                    '<tr key={caise.id} class="paginate15">' +
                    '<td align="center" class="mw30"><input class="form-check-input" type="checkbox" value={caise.id} name="checkPersoMois" id="checkPersoMois"/></td>' +
                    '<td class="text-center"><a href="#"><i class="fa fa-eye col-green" aria-hidden="true"></i></a></td>' +
                    ' <td><Moment format="DD/MM/YYYY">' + moment(caise.date).locale("fr").format('L') + '</Moment></td>' +
                    '<td class="bolo600"><a href={`/crm/caisse/${caise.id}/${caise.chantier.id}`}>' +
                    '<span class="badge badge-pill badge-primary m-r-5">V</span>' + caise.numcaisse + '</a></td>' +
                    '<td>' + pakk + '<br/>' + caise.caissereference + '(<b>' + caise.client.nomclient + ' ' + caise.chantier.nomchantier + '</b>)</td>' +
                    '<td class="text-right">' + formatNumber(caise.montant, 2, ' ') + '</td>' +
                    '<td class="text-left pri bolo600">' + caise.dobyuser.nom.toUpperCase() + ' ' + caise.dobyuser.prenoms.toUpperCase() + '</td>' +
                    '</tr>'
                )
            }
        });
    });
    $("#getReglementsClients").off().on("change", async function () {
        $('#reglementsmois tbody').children().remove()
        let chreglecount = 0;
        let dean = $(this).val();
        let saws = 0;

        reglements.map((reglement) => {
            let dazza = moment(reglement.date).format('MM-YYYY');
            if (dean === dazza) {
                saws = saws + parseFloat(reglement.montant);
            }
        });


        setfrmoisregle(saws);
        reglements.map((reglement) => {
            let dazzaa = moment(reglement.date).format('MM-YYYY');
            if (dean === dazzaa) {
                chreglecount = chreglecount + 1;
                let chan = " ";
                let clie = " ";
                let rrr = " ";

                if (reglement.chantier) {
                    chan = reglement.chantier.nomchantier;
                }

                if (reglement.facture.etat === "valide") {
                    rrr = '<span class="badge badge-pill badge-primary m-r-5">V</span>';
                } else {
                    rrr = '<span class="badge badge-pill badge-secondary m-r-5">V</span>';
                }

                if (reglement.client) {
                    clie = reglement.client.nomclient;
                }

                $('#reglementsmois tbody').append('' +
                    '<tr key={reglement.id} class="paginate16">' +
                    '<td><Moment format="DD/MM/YYYY">' + moment(reglement.date).locale("fr").format('L') + '</Moment></td>' +
                    '<td class="bolo600"><a href={`/crm/devis/${reglement.devis.id}/${reglement.chantier.id}`}>' +
                    '<span class="badge badge-pill badge-primary m-r-5">V</span>' + reglement.devis.iddevis + '</a></td>' +
                    '<td class="bolo600"><a href={`/crm/facture/${reglement.facture.id}/${reglement.chantier.id}`}>' + rrr + reglement.facture.numfacture + '</a></td>' +
                    '<td><b>' + clie + '</b> | ' + chan + '</td>' +
                    '<td class="text-right">' + formatNumber(reglement.montant, 2, ' ') + '</td>' +
                    '<td class="text-left pri bolo600">' + reglement.moyen + '</td>' +
                    '</tr>'
                )
            }
        });
    });
    $(".devalideCaisse").off().on("click", function () {
        $.each($("input[name='checkpresta']:checked"), function () {
            window.$('#Traitement').modal('show');
            axios({
                method: 'GET', url: '/crm/caisse/devalider/' + $(this).val(),
            }).then(function (response) {
                window.location.reload();
            }).catch(function (error) {
                $('#Traitement').modal('hide');
                $('#ModalErreur').modal('show');
            });
        });
    });

    useEffect(() => {
        fetchCaisseInterne();
        fetchCaissePerso();
        fetchCaisseChantiers();
        fetchReglements();
    }, []);

    let ricount = 0;
    let soreinternedebit = 0;
    let soreinternecredit = 0;
    caissin.map((caiss) => {
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
    caissperso.map((caiss) => {
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

    let soldeEntre = (parseFloat(sumRegle) + parseFloat(soreinternecredit) + parseFloat(rpcredit)) - (parseFloat(soreinternedebit) + parseFloat(rpdebit) + parseFloat(sumDepense));

    const handleDepFour = event => {
        let filter = event.target.value.toLowerCase();
        $("#depfour tr.paginate13").filter(function () {
            $(this).toggle($(this).text().toLowerCase().replaceAll(' ', '').indexOf(filter) > -1)
        });
    };
    const handleDepPresta = event => {
        let filter = event.target.value.toLowerCase();
        $("#deppresta tr.paginateDepPresta").filter(function () {
            $(this).toggle($(this).text().toLowerCase().replaceAll(' ', '').indexOf(filter) > -1)
        });
    };
    $("#checkDepPresta").change(function () {
        if (this.checked) {
            $.each($("input[name='checkpresta']"), function () {
                this.checked = true;
            });
        } else {
            $.each($("input[name='checkpresta']"), function () {
                this.checked = false;
            });
        }
    });

    const handleBonMoisInterne = event => {
        let filter = event.target.value.toLowerCase();
        $("#bonMoisInterne tr.paginate12").filter(function () {
            $(this).toggle($(this).text().toLowerCase().replaceAll(' ', '').indexOf(filter) > -1)
        });
    };
    const handleChantiersMoisInterne = event => {
        let filter = event.target.value.toLowerCase();
        $("#chantierMoisInterne tr.paginate13").filter(function () {
            $(this).toggle($(this).text().toLowerCase().replaceAll(' ', '').indexOf(filter) > -1)
        });
    };
    const handleChargePersonnel = event => {
        let filter = event.target.value.toLowerCase();
        $("#chargepersonnel tr.paginate15").filter(function () {
            $(this).toggle($(this).text().toLowerCase().replaceAll(' ', '').indexOf(filter) > -1)
        });
    };
    const handleReglementsMois = event => {
        let filter = event.target.value.toLowerCase();
        $("#reglementsmois tr.paginate16").filter(function () {
            $(this).toggle($(this).text().toLowerCase().replaceAll(' ', '').indexOf(filter) > -1)
        });
    };

    $("#checkChaIntMois").change(function () {
        if (this.checked) {
            $.each($("input[name='checkChaIntMois']"), function () {
                this.checked = true;
            });
        } else {
            $.each($("input[name='checkChaIntMois']"), function () {
                this.checked = false;
            });
        }
    });
    $("#checkChanMois").change(function () {
        if (this.checked) {
            $.each($("input[name='checkChanMois']"), function () {
                this.checked = true;
            });
        } else {
            $.each($("input[name='checkChanMois']"), function () {
                this.checked = false;
            });
        }
    });
    $("#checkPersoMois").change(function () {
        if (this.checked) {
            $.each($("input[name='checkPersoMois']"), function () {
                this.checked = true;
            });
        } else {
            $.each($("input[name='checkPersoMois']"), function () {
                this.checked = false;
            });
        }
    });


    return (<>
        <div className="col-md-12" style={{paddingLeft: "0"}}>
            <div className="panel-group" id="accordion_2" role="tablist" aria-multiselectable="true">
                <div className="panel panel-pri shadow m-t-5">
                    <div className="panel-heading" role="tab" id="headingImpEnt">
                        <h4 className="panel-title">
                            <a className="collapsed  col-white" role="button" data-toggle="collapse"
                               data-parent="#accordionImpEnt" href="#collapseImpEnt" aria-expanded="false"
                               aria-controls="collapseImpEnt">
                                <i className="material-icons col-white"
                                   style={{fontSize: "18px", float: "left"}}>keyboard_arrow_down</i>Solde de
                                l'entreprise
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
                                   style={{fontSize: "18px", float: "left"}}>keyboard_arrow_down</i>Dépenses charges
                                Internes par Mois
                            </a>
                        </h4>
                    </div>
                    <div id="collapseDepComp" className="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingDepComp">
                        <div className="panel-body " style={{overflow: "scroll"}}>
                            <div className="table-responsive shadow bg-white"
                                 style={{color: "#555"}}>

                                <select className="form-select" id="getDepensesInternes"
                                        aria-label="Default select example">
                                    <option value="" selected disabled>Dépenses par mois</option>
                                    <option value="01-2024">JANVIER 2024</option>
                                    <option value="02-2024">FÉVRIER 2024</option>
                                    <option value="03-2024">MARS 2024</option>
                                    <option value="04-2024">AVRIL 2024</option>
                                    <option value="05-2024">MAI 2024</option>
                                    <option value="06-2024">JUIN 2024</option>
                                    <option value="07-2024">JUILLET 2024</option>
                                    <option value="08-2024">AOUT 2024</option>
                                    <option value="09-2024">SEPTEMBRE 2024</option>
                                    <option value="10-2024">OCTOBRE 2024</option>
                                    <option value="11-2024">NOVEMBRE 2024</option>
                                    <option value="12-2024">DECEMBRE 2024</option>
                                    <option value="01-2025">JANVIER 2025</option>
                                    <option value="02-2025">FÉVRIER 2025</option>
                                    <option value="03-2025">MARS 2025</option>
                                    <option value="04-2025">AVRIL 2025</option>
                                    <option value="05-2025">MAI 2025</option>
                                    <option value="06-2025">JUIN 2025</option>
                                    <option value="07-2025">JUILLET 2025</option>
                                    <option value="08-2025">AOUT 2025</option>
                                    <option value="09-2025">SEPTEMBRE 2025</option>
                                    <option value="10-2025">OCTOBRE 2025</option>
                                    <option value="11-2025">NOVEMBRE 2025</option>
                                    <option value="12-2025">DECEMBRE 2025</option>
                                    <option value="01-2026">JANVIER 2026</option>
                                    <option value="02-2026">FÉVRIER 2026</option>
                                    <option value="03-2026">MARS 2026</option>
                                    <option value="04-2026">AVRIL 2026</option>
                                    <option value="05-2026">MAI 2026</option>
                                    <option value="06-2026">JUIN 2026</option>
                                    <option value="07-2026">JUILLET 2026</option>
                                    <option value="08-2026">AOUT 2026</option>
                                    <option value="09-2026">SEPTEMBRE 2026</option>
                                    <option value="10-2026">OCTOBRE 2026</option>
                                    <option value="11-2026">NOVEMBRE 2026</option>
                                    <option value="12-2026">DECEMBRE 2026</option>
                                </select>

                                <div className="row">
                                    <div className="col-md-8" style={{paddingTop: "20px"}}>
                                            <span className="m-r-5 vareact" title="Tout sélectionner"><input
                                                type="checkbox" name="checkChaIntMois" id="checkChaIntMois"/></span>

                                        <a title="Valider" style={{textDecoration: "none"}}
                                           className="m-r-5 vareact bg-blue-grey bolo700 col-white"
                                           id="devalideCaisse">V</a>


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
                <div className="panel panel-pri shadow m-t-5">
                    <div className="panel-heading" role="tab" id="headingDepFour">
                        <h4 className="panel-title">
                            <a className="collapsed  col-white" role="button" data-toggle="collapse"
                               data-parent="#accordionImpEnt" href="#collapseDepFour" aria-expanded="false"
                               aria-controls="collapseDepFour">
                                <i className="material-icons col-white"
                                   style={{fontSize: "18px", float: "left"}}>keyboard_arrow_down</i>Dépenses des
                                fournisseurs
                            </a>
                        </h4>
                    </div>
                    <div id="collapseDepFour" className="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingDepFour">
                        <div className="panel-body " style={{overflow: "scroll"}}>
                            <div className="table-responsive shadow bg-white"
                                 style={{color: "#555"}}>

                                <select className="form-select" id="getDepFour"
                                        aria-label="Default select example">
                                    <option value="" selected disabled>Dépenses par mois</option>
                                    <option value="01-2024">JANVIER 2024</option>
                                    <option value="02-2024">FÉVRIER 2024</option>
                                    <option value="03-2024">MARS 2024</option>
                                    <option value="04-2024">AVRIL 2024</option>
                                    <option value="05-2024">MAI 2024</option>
                                    <option value="06-2024">JUIN 2024</option>
                                    <option value="07-2024">JUILLET 2024</option>
                                    <option value="08-2024">AOUT 2024</option>
                                    <option value="09-2024">SEPTEMBRE 2024</option>
                                    <option value="10-2024">OCTOBRE 2024</option>
                                    <option value="11-2024">NOVEMBRE 2024</option>
                                    <option value="12-2024">DECEMBRE 2024</option>
                                    <option value="01-2025">JANVIER 2025</option>
                                    <option value="02-2025">FÉVRIER 2025</option>
                                    <option value="03-2025">MARS 2025</option>
                                    <option value="04-2025">AVRIL 2025</option>
                                    <option value="05-2025">MAI 2025</option>
                                    <option value="06-2025">JUIN 2025</option>
                                    <option value="07-2025">JUILLET 2025</option>
                                    <option value="08-2025">AOUT 2025</option>
                                    <option value="09-2025">SEPTEMBRE 2025</option>
                                    <option value="10-2025">OCTOBRE 2025</option>
                                    <option value="11-2025">NOVEMBRE 2025</option>
                                    <option value="12-2025">DECEMBRE 2025</option>
                                    <option value="01-2026">JANVIER 2026</option>
                                    <option value="02-2026">FÉVRIER 2026</option>
                                    <option value="03-2026">MARS 2026</option>
                                    <option value="04-2026">AVRIL 2026</option>
                                    <option value="05-2026">MAI 2026</option>
                                    <option value="06-2026">JUIN 2026</option>
                                    <option value="07-2026">JUILLET 2026</option>
                                    <option value="08-2026">AOUT 2026</option>
                                    <option value="09-2026">SEPTEMBRE 2026</option>
                                    <option value="10-2026">OCTOBRE 2026</option>
                                    <option value="11-2026">NOVEMBRE 2026</option>
                                    <option value="12-2026">DECEMBRE 2026</option>
                                </select>

                                <div className="row">
                                    <div className="col-md-8" style={{paddingTop: "20px"}}>
                                            <span className="m-r-5 vareact" title="Tout sélectionner"><input
                                                type="checkbox" name="checkDepFourMois" id="checkDepFourMois"/></span>

                                        <a title="Dévalider" style={{textDecoration: "none"}}
                                           className="m-r-5 vareact bg-blue-grey bolo700 col-white"
                                           id="devalideCaisse">V</a>

                                        <ReactHTMLTableToExcel
                                            id="test-table-xls-button"
                                            className="btn badge badge-pill col-green m-r-5 float-left vareact"
                                            table="Depenses fournisseurs "
                                            title="Générer un fichier Excel"
                                            filename="DÉPENSES DES FOIURNISSEUR PAR MOIS"
                                            sheet="tablexls"
                                            buttonText="Ex"/>
                                    </div>
                                    <div className="col-md-4 float-right">
                                        <div className="input-group">
                                            <div className="form-line">
                                                <input type="text" className="form-control"
                                                       onChange={handleDepFour}
                                                       placeholder="Rechercher"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table className="table-striped table-hover display nowrap" id="depfour"
                                       style={{width: "100%", marginBottom: "10px"}}>
                                    <thead>
                                    <tr className="text-center" style={{borderBottom: "1px solid #000"}}>
                                        <th className="mw30 text-center">#</th>
                                        <th className="mw30 text-center"></th>
                                        <th>DATE</th>
                                        <th className="mw120">N° BON</th>
                                        <th className="mw300">FACTURÉ À</th>
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
                                        <th className="text-center col-white bg-blue"
                                            style={{whiteSpace: "nowrap"}}><NumberFormat numb={frmoischantiers}/></th>
                                        <th></th>
                                    </tr>
                                    </tfoot>
                                </table>

                                <br/>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="panel panel-pri shadow m-t-5">
                    <div className="panel-heading" role="tab" id="headingDepPresta">
                        <h4 className="panel-title">
                            <a className="collapsed  col-white" role="button" data-toggle="collapse"
                               data-parent="#accordionImpEnt" href="#collapseDepPresta" aria-expanded="false"
                               aria-controls="collapseDepPresta">
                                <i className="material-icons col-white"
                                   style={{fontSize: "18px", float: "left"}}>keyboard_arrow_down</i>Dépenses des
                                prestataires
                            </a>
                        </h4>
                    </div>
                    <div id="collapseDepPresta" className="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingDepPresta">
                        <div className="panel-body " style={{overflow: "scroll"}}>
                            <div className="table-responsive shadow bg-white"
                                 style={{color: "#555"}}>
                                <select className="form-select" id="getDepPresta"
                                        aria-label="Default select example">
                                    <option value="" selected disabled>Dépenses par mois</option>
                                    <optgroup label="Année 2024">
                                        <option value="01-2024">JANVIER 2024</option>
                                        <option value="02-2024">FÉVRIER 2024</option>
                                        <option value="03-2024">MARS 2024</option>
                                        <option value="04-2024">AVRIL 2024</option>
                                        <option value="05-2024">MAI 2024</option>
                                        <option value="06-2024">JUIN 2024</option>
                                        <option value="07-2024">JUILLET 2024</option>
                                        <option value="08-2024">AOUT 2024</option>
                                        <option value="09-2024">SEPTEMBRE 2024</option>
                                        <option value="10-2024">OCTOBRE 2024</option>
                                        <option value="11-2024">NOVEMBRE 2024</option>
                                        <option value="12-2024">DECEMBRE 2024</option>
                                    </optgroup>
                                    <optgroup label="Année 2025">
                                        <option value="01-2025">JANVIER 2025</option>
                                        <option value="02-2025">FÉVRIER 2025</option>
                                        <option value="03-2025">MARS 2025</option>
                                        <option value="04-2025">AVRIL 2025</option>
                                        <option value="05-2025">MAI 2025</option>
                                        <option value="06-2025">JUIN 2025</option>
                                        <option value="07-2025">JUILLET 2025</option>
                                        <option value="08-2025">AOUT 2025</option>
                                        <option value="09-2025">SEPTEMBRE 2025</option>
                                        <option value="10-2025">OCTOBRE 2025</option>
                                        <option value="11-2025">NOVEMBRE 2025</option>
                                        <option value="12-2025">DECEMBRE 2025</option>
                                    </optgroup>
                                    <optgroup label="Année 2026">
                                        <option value="01-2026">JANVIER 2026</option>
                                        <option value="02-2026">FÉVRIER 2026</option>
                                        <option value="03-2026">MARS 2026</option>
                                        <option value="04-2026">AVRIL 2026</option>
                                        <option value="05-2026">MAI 2026</option>
                                        <option value="06-2026">JUIN 2026</option>
                                        <option value="07-2026">JUILLET 2026</option>
                                        <option value="08-2026">AOUT 2026</option>
                                        <option value="09-2026">SEPTEMBRE 2026</option>
                                        <option value="10-2026">OCTOBRE 2026</option>
                                        <option value="11-2026">NOVEMBRE 2026</option>
                                        <option value="12-2026">DECEMBRE 2026</option>
                                    </optgroup>
                                </select>

                                <div className="row">
                                    <div className="col-md-8" style={{paddingTop: "20px"}}>
                                            <span className="m-r-5 vareact" title="Tout sélectionner"><input
                                                type="checkbox" name="checkDepPresta" id="checkDepPresta"/></span>

                                        <a title="Dévalider" style={{textDecoration: "none"}}
                                           className="m-r-5 vareact bg-blue-grey bolo700 col-white devalideCaisse">V</a>

                                        <ReactHTMLTableToExcel
                                            id="test-table-xls-button"
                                            className="btn badge badge-pill col-green m-r-5 float-left vareact"
                                            table="Depenses fournisseurs et chantiers"
                                            title="Générer un fichier Excel"
                                            filename="DÉPENSES DES PRESTATAIRES PAR MOIS"
                                            sheet="tablexls"
                                            buttonText="Ex"/>
                                    </div>
                                    <div className="col-md-4 float-right">
                                        <div className="input-group">
                                            <div className="form-line">
                                                <input type="text" className="form-control"
                                                       onChange={handleDepPresta}
                                                       placeholder="Rechercher"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table className="table-striped table-hover display nowrap" id="deppresta"
                                       style={{width: "100%", marginBottom: "10px"}}>
                                    <thead>
                                    <tr className="text-center" style={{borderBottom: "1px solid #000"}}>
                                        <th className="mw30 text-center">#</th>
                                        <th className="mw30 text-center"></th>
                                        <th>DATE</th>
                                        <th className="mw120">N° BON</th>
                                        <th className="mw300">FACTURÉ À</th>
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
                                        <th className="text-center col-white bg-blue"
                                            style={{whiteSpace: "nowrap"}}><NumberFormat numb={frdeppresta}/></th>
                                        <th></th>
                                    </tr>
                                    </tfoot>
                                </table>

                                <br/>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="panel panel-pri shadow m-t-5">
                    <div className="panel-heading" role="tab" id="headingDepChCh">
                        <h4 className="panel-title">
                            <a className="collapsed  col-white" role="button" data-toggle="collapse"
                               data-parent="#accordionImpEnt" href="#collapseDepChCh" aria-expanded="false"
                               aria-controls="collapseDepChCh">
                                <i className="material-icons col-white"
                                   style={{fontSize: "18px", float: "left"}}>keyboard_arrow_down</i>Dépenses diverses
                                des chantiers par Mois
                            </a>
                        </h4>
                    </div>
                    <div id="collapseDepChCh" className="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingDepChCh">
                        <div className="panel-body " style={{overflow: "scroll"}}>
                            <div className="table-responsive shadow bg-white"
                                 style={{color: "#555"}}>

                                <select className="form-select" id="getDepensesChantiers"
                                        aria-label="Default select example">
                                    <option value="" selected disabled>Dépenses par mois</option>
                                    <optgroup label="Année 2024">
                                        <option value="01-2024">JANVIER 2024</option>
                                        <option value="02-2024">FÉVRIER 2024</option>
                                        <option value="03-2024">MARS 2024</option>
                                        <option value="04-2024">AVRIL 2024</option>
                                        <option value="05-2024">MAI 2024</option>
                                        <option value="06-2024">JUIN 2024</option>
                                        <option value="07-2024">JUILLET 2024</option>
                                        <option value="08-2024">AOUT 2024</option>
                                        <option value="09-2024">SEPTEMBRE 2024</option>
                                        <option value="10-2024">OCTOBRE 2024</option>
                                        <option value="11-2024">NOVEMBRE 2024</option>
                                        <option value="12-2024">DECEMBRE 2024</option>
                                    </optgroup>
                                    <optgroup label="Année 2025">
                                        <option value="01-2025">JANVIER 2025</option>
                                        <option value="02-2025">FÉVRIER 2025</option>
                                        <option value="03-2025">MARS 2025</option>
                                        <option value="04-2025">AVRIL 2025</option>
                                        <option value="05-2025">MAI 2025</option>
                                        <option value="06-2025">JUIN 2025</option>
                                        <option value="07-2025">JUILLET 2025</option>
                                        <option value="08-2025">AOUT 2025</option>
                                        <option value="09-2025">SEPTEMBRE 2025</option>
                                        <option value="10-2025">OCTOBRE 2025</option>
                                        <option value="11-2025">NOVEMBRE 2025</option>
                                        <option value="12-2025">DECEMBRE 2025</option>
                                    </optgroup>
                                    <optgroup label="Année 2026">
                                        <option value="01-2026">JANVIER 2026</option>
                                        <option value="02-2026">FÉVRIER 2026</option>
                                        <option value="03-2026">MARS 2026</option>
                                        <option value="04-2026">AVRIL 2026</option>
                                        <option value="05-2026">MAI 2026</option>
                                        <option value="06-2026">JUIN 2026</option>
                                        <option value="07-2026">JUILLET 2026</option>
                                        <option value="08-2026">AOUT 2026</option>
                                        <option value="09-2026">SEPTEMBRE 2026</option>
                                        <option value="10-2026">OCTOBRE 2026</option>
                                        <option value="11-2026">NOVEMBRE 2026</option>
                                        <option value="12-2026">DECEMBRE 2026</option>
                                    </optgroup>
                                </select>

                                <div className="row">
                                    <div className="col-md-8" style={{paddingTop: "20px"}}>
                                            <span className="m-r-5 vareact" title="Tout sélectionner"><input
                                                type="checkbox" name="checkChanMois" id="checkChanMois"/></span>

                                        <a title="Valider" style={{textDecoration: "none"}}
                                           className="m-r-5 vareact bg-blue-grey bolo700 col-white"
                                           id="devalideCaisse">V</a>

                                        <ReactHTMLTableToExcel
                                            id="test-table-xls-button"
                                            className="btn badge badge-pill col-green m-r-5 float-left vareact"
                                            table="Depenses fournisseurs et chantiers"
                                            title="Générer un fichier Excel"
                                            filename="CHARGE INTERNE PAR MOIS"
                                            sheet="tablexls"
                                            buttonText="Ex"/>
                                    </div>
                                    <div className="col-md-4 float-right">
                                        <div className="input-group">
                                            <div className="form-line">
                                                <input type="text" className="form-control"
                                                       onChange={handleChantiersMoisInterne}
                                                       placeholder="Rechercher"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table className="table-striped table-hover display nowrap" id="chantierMoisInterne"
                                       style={{width: "100%", marginBottom: "10px"}}>
                                    <thead>
                                    <tr className="text-center" style={{borderBottom: "1px solid #000"}}>
                                        <th className="mw30 text-center">#</th>
                                        <th className="mw30 text-center"></th>
                                        <th>DATE</th>
                                        <th className="mw120">N° BON</th>
                                        <th className="mw300">FACTURÉ À</th>
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
                                        <th className="text-center col-white bg-blue"
                                            style={{whiteSpace: "nowrap"}}><NumberFormat numb={frmoischantiers}/></th>
                                        <th></th>
                                    </tr>
                                    </tfoot>
                                </table>

                                <br/>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="panel panel-pri shadow m-t-5">
                    <div className="panel-heading" role="tab" id="headingDepChPr">
                        <h4 className="panel-title">
                            <a className="collapsed  col-white" role="button" data-toggle="collapse"
                               data-parent="#accordionImpEnt" href="#collapseDepChPr" aria-expanded="false"
                               aria-controls="collapseDepChPr">
                                <i className="material-icons col-white"
                                   style={{fontSize: "18px", float: "left"}}>keyboard_arrow_down</i>Charges du Personnel
                                par Mois
                            </a>
                        </h4>
                    </div>
                    <div id="collapseDepChPr" className="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingDepChPr">
                        <div className="panel-body " style={{overflow: "scroll"}}>
                            <div className="table-responsive shadow bg-white"
                                 style={{color: "#555"}}>

                                <select className="form-select" id="getDepensesPersonnel"
                                        aria-label="Default select example">
                                    <option value="" selected disabled>Dépenses par mois</option>
                                    <option value="01-2024">JANVIER 2024</option>
                                    <option value="02-2024">FÉVRIER 2024</option>
                                    <option value="03-2024">MARS 2024</option>
                                    <option value="04-2024">AVRIL 2024</option>
                                    <option value="05-2024">MAI 2024</option>
                                    <option value="06-2024">JUIN 2024</option>
                                    <option value="07-2024">JUILLET 2024</option>
                                    <option value="08-2024">AOUT 2024</option>
                                    <option value="09-2024">SEPTEMBRE 2024</option>
                                    <option value="10-2024">OCTOBRE 2024</option>
                                    <option value="11-2024">NOVEMBRE 2024</option>
                                    <option value="12-2024">DECEMBRE 2024</option>
                                    <option value="01-2025">JANVIER 2025</option>
                                    <option value="02-2025">FÉVRIER 2025</option>
                                    <option value="03-2025">MARS 2025</option>
                                    <option value="04-2025">AVRIL 2025</option>
                                    <option value="05-2025">MAI 2025</option>
                                    <option value="06-2025">JUIN 2025</option>
                                    <option value="07-2025">JUILLET 2025</option>
                                    <option value="08-2025">AOUT 2025</option>
                                    <option value="09-2025">SEPTEMBRE 2025</option>
                                    <option value="10-2025">OCTOBRE 2025</option>
                                    <option value="11-2025">NOVEMBRE 2025</option>
                                    <option value="12-2025">DECEMBRE 2025</option>
                                    <option value="01-2026">JANVIER 2026</option>
                                    <option value="02-2026">FÉVRIER 2026</option>
                                    <option value="03-2026">MARS 2026</option>
                                    <option value="04-2026">AVRIL 2026</option>
                                    <option value="05-2026">MAI 2026</option>
                                    <option value="06-2026">JUIN 2026</option>
                                    <option value="07-2026">JUILLET 2026</option>
                                    <option value="08-2026">AOUT 2026</option>
                                    <option value="09-2026">SEPTEMBRE 2026</option>
                                    <option value="10-2026">OCTOBRE 2026</option>
                                    <option value="11-2026">NOVEMBRE 2026</option>
                                    <option value="12-2026">DECEMBRE 2026</option>
                                </select>

                                <div className="row">
                                    <div className="col-md-8" style={{paddingTop: "20px"}}>
                                            <span className="m-r-5 vareact" title="Tout sélectionner"><input
                                                type="checkbox" name="checkPersoMois" id="checkPersoMois"/></span>

                                        <a title="Valider" style={{textDecoration: "none"}}
                                           className="m-r-5 vareact bg-blue-grey bolo700 col-white"
                                           id="devalideCaisse">V</a>

                                        <a title="Supprimer" id="delCaisse" className="m-r-5 vareact"><i
                                            className="fa fa fa-trash col-pink "/></a>

                                        <ReactHTMLTableToExcel
                                            id="test-table-xls-button"
                                            className="btn badge badge-pill col-green m-r-5 float-left vareact"
                                            table="chargepersonnel"
                                            title="Générer un fichier Excel"
                                            filename="CHARGE INTERNE PAR MOIS"
                                            sheet="tablexls"
                                            buttonText="Ex"/>
                                    </div>
                                    <div className="col-md-4 float-right">
                                        <div className="input-group">
                                            <div className="form-line">
                                                <input type="text" className="form-control"
                                                       onChange={handleChargePersonnel}
                                                       placeholder="Rechercher"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table className="table-striped table-hover display nowrap" id="chargepersonnel"
                                       style={{width: "100%", marginBottom: "10px"}}>
                                    <thead>
                                    <tr className="text-center" style={{borderBottom: "1px solid #000"}}>
                                        <th className="mw30 text-center">#</th>
                                        <th className="mw30 text-center"></th>
                                        <th>DATE</th>
                                        <th className="mw120">N° BON</th>
                                        <th className="mw300">FACTURÉ À</th>
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
                                        <th className="text-center col-white bg-blue"
                                            style={{whiteSpace: "nowrap"}}><NumberFormat numb={frmoisperso}/></th>
                                        <th></th>
                                    </tr>
                                    </tfoot>
                                </table>

                                <br/>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="panel panel-pri shadow m-t-5">
                    <div className="panel-heading" role="tab" id="headingRegle">
                        <h4 className="panel-title">
                            <a className="collapsed  col-white" role="button" data-toggle="collapse"
                               data-parent="#accordionImpEnt" href="#collapseRegle" aria-expanded="false"
                               aria-controls="collapseRegle">
                                <i className="material-icons col-white"
                                   style={{fontSize: "18px", float: "left"}}>keyboard_arrow_down</i>Règlements des
                                Clients par Mois
                            </a>
                        </h4>
                    </div>
                    <div id="collapseRegle" className="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingRegle">
                        <div className="panel-body " style={{overflow: "scroll"}}>
                            <div className="table-responsive shadow bg-white"
                                 style={{color: "#555"}}>

                                <select className="form-select" id="getReglementsClients"
                                        aria-label="Default select example">
                                    <option value="" selected disabled>Règlements clients par mois</option>
                                    <option value="01-2024">JANVIER 2024</option>
                                    <option value="02-2024">FÉVRIER 2024</option>
                                    <option value="03-2024">MARS 2024</option>
                                    <option value="04-2024">AVRIL 2024</option>
                                    <option value="05-2024">MAI 2024</option>
                                    <option value="06-2024">JUIN 2024</option>
                                    <option value="07-2024">JUILLET 2024</option>
                                    <option value="08-2024">AOUT 2024</option>
                                    <option value="09-2024">SEPTEMBRE 2024</option>
                                    <option value="10-2024">OCTOBRE 2024</option>
                                    <option value="11-2024">NOVEMBRE 2024</option>
                                    <option value="12-2024">DECEMBRE 2024</option>
                                    <option value="01-2025">JANVIER 2025</option>
                                    <option value="02-2025">FÉVRIER 2025</option>
                                    <option value="03-2025">MARS 2025</option>
                                    <option value="04-2025">AVRIL 2025</option>
                                    <option value="05-2025">MAI 2025</option>
                                    <option value="06-2025">JUIN 2025</option>
                                    <option value="07-2025">JUILLET 2025</option>
                                    <option value="08-2025">AOUT 2025</option>
                                    <option value="09-2025">SEPTEMBRE 2025</option>
                                    <option value="10-2025">OCTOBRE 2025</option>
                                    <option value="11-2025">NOVEMBRE 2025</option>
                                    <option value="12-2025">DECEMBRE 2025</option>
                                    <option value="01-2026">JANVIER 2026</option>
                                    <option value="02-2026">FÉVRIER 2026</option>
                                    <option value="03-2026">MARS 2026</option>
                                    <option value="04-2026">AVRIL 2026</option>
                                    <option value="05-2026">MAI 2026</option>
                                    <option value="06-2026">JUIN 2026</option>
                                    <option value="07-2026">JUILLET 2026</option>
                                    <option value="08-2026">AOUT 2026</option>
                                    <option value="09-2026">SEPTEMBRE 2026</option>
                                    <option value="10-2026">OCTOBRE 2026</option>
                                    <option value="11-2026">NOVEMBRE 2026</option>
                                    <option value="12-2026">DECEMBRE 2026</option>
                                </select>

                                <div className="row">
                                    <div className="col-md-8" style={{paddingTop: "20px"}}>
                                        <ReactHTMLTableToExcel
                                            id="test-table-xls-button"
                                            className="btn badge badge-pill col-green m-r-5 float-left vareact"
                                            table="bonMoisReglements"
                                            title="Générer un fichier Excel"
                                            filename="RÈGLEMENTS CLIENTS PAR MOIS"
                                            sheet="tablexls"
                                            buttonText="Ex"/>
                                    </div>
                                    <div className="col-md-4 float-right">
                                        <div className="input-group">
                                            <div className="form-line">
                                                <input type="text" className="form-control"
                                                       onChange={handleReglementsMois}
                                                       placeholder="Rechercher"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table className="table-striped table-hover display nowrap" id="reglementsmois"
                                       style={{width: "100%", marginBottom: "10px"}}>
                                    <thead>
                                    <tr className="text-center" style={{borderBottom: "1px solid #000"}}>
                                        <th>DATE</th>
                                        <th className="mw150">DEVIS</th>
                                        <th className="mw150">FACTURE</th>
                                        <th className="mw300">CLIENT | CHANTIER</th>
                                        <th>MONTANT</th>
                                        <th className="mw200">MOYEN DE PAIE</th>
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
                                        <th className="text-center col-white bg-blue"
                                            style={{whiteSpace: "nowrap"}}><NumberFormat numb={frmoisregle}/></th>
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
    const root = createRoot(document.getElementById('setsoldecompte'));
    root.render(<SoldeCompte/>);
} catch (e) {
}
