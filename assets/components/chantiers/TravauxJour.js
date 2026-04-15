import React, {useEffect, useState} from "react";
import {createRoot} from 'react-dom/client';
import axios from "axios";
import ReactHTMLTableToExcel from 'react-html-table-to-excel';
import NumberFormat from "../../fonctions/NumberFormat";
import Moment from 'react-moment';
import $ from "jquery";

const TravauxJour = () => {
    const [devjour, setDevJour] = useState([]);
    const [bonjour, setBonJour] = useState([]);
    const [caisjour, setCaisJour] = useState([]);
    const [decjour, setDecJour] = useState([]);
    const [facjour, setFacJour] = useState([]);


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

    useEffect(() => {
        fetchDevJour();
        fetchBonJour();
        fetchCaisJour();
        fetchDecJour();
        fetchFacJour();
    }, []);


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
                            {cais.bon.devis &&
                                <>
                                    {cais.bon.devis.etat === "valide" && <a onClick={() => {
                                        devalideDevis(caisse.bon.devis.id)
                                    }} title="Dévalider" className="badge badge-pill badge-primary m-r-5">V</a>}
                                    {cais.bon.devis.etat === "save" && <a onClick={() => {
                                        valideDevis(caisse.bon.devis.id)
                                    }} title="Valider" className="badge badge-pill bg-blue-grey m-r-5">V</a>}
                                    <a href={`/crm/devis/${cais.bon.devis.id}/${cais.chantier.id}`}>{cais.bon.devis.iddevis}</a>
                                </>
                            }
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
                        {fac.type === "retenue" &&
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


    return (<>
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
        </div>
    </>);
}

try {
    const root = createRoot(document.getElementById('settravauxjour'));
    root.render(<TravauxJour/>);
} catch (e) {
}
