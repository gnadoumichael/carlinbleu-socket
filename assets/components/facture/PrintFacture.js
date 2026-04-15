import React from 'react';
import NumberFormat from "./../../fonctions/NumberFormat";
import $ from "jquery";
import numberToLetters from "number-2-letters";

export const PrintFacture = React.forwardRef((props, ref) => {

    let decompte = props.decompte;
    let totaldecomptes = props.totaldecomptes;
    let totalretenue = props.totalretenue;
    let totalacomptes = props.totalacomptes;
    let facture = props.facture;
    let client = props.client;
    let devis = props.devis;
    let forme = props.forme;
    let facdate = $("#facdate").val();
    let mocode = $("#mocode").val();
    let renderLigne = props.renderLigne;
    let renderGroupe = props.renderGroupe;

    const numberToLetters = require('number-2-letters');

    let acompte = 0;
    let totalhtsolde = 0;
    let totaltva = 0;
    let totalttcsolde = 0;
    let addi = 0;
    let stva = "";

    if (decompte.deduction === "partielle") {
        acompte = (decompte.valeur * decompte.acompte) / 100;
    }
    if (decompte.deduction === "complete") {
        acompte = (devis.totalht * decompte.acompte) / 100;
    }
    if (decompte.deduction === "aucune") {
        acompte = 0;
    }

    addi = parseFloat(devis.finition) + parseFloat(devis.prorata) + parseFloat(devis.garantie) + parseFloat(devis.trc);



    if (facture.type === "devis") {
        totalhtsolde = devis.totalht - totalacomptes - totaldecomptes + totalretenue;
        if (devis.ptva === "oui") {
            totaltva = (totalhtsolde * devis.tva) / 100;
            totalttcsolde = totalhtsolde + totaltva;
        } else {
            totaltva = (totalhtsolde * devis.tva) / 100;
            totalttcsolde = totalhtsolde;
        }
    }
    if (devis.ptva !== 'oui') {
        stva = "(non facturée)";
    }

    return (
        <>
            <div style={{
                width: "21cm",
                minHeight: "29.7cm",
                boxShadow: "0 0 0.5cm rgba(0,0,0,0.5)",
                backgroundColor: "#FFF"
            }}>
                <div className="header" style={{
                    width: forme.headerWith + "cm",
                    height: forme.headerHeight + "cm",
                    backgroundColor: "#FFF"
                }}></div>
                <div className="bood" style={{paddingLeft: "1cm", paddingRight: "1cm"}}>
                    {facture.type === "decompte" &&
                        <>
                            <table align="right">
                                <tr>
                                    <td style={{border: "none", textAlign: "center"}}>
                                        <b>{client.nomclient.toUpperCase()}</b><br/>
                                        {client.contribuable}<br/>
                                        {client.adresse}<br/>
                                        {client.mail}<br/>
                                    </td>
                                </tr>
                            </table>
                            <p style={{clear: "both"}}/>
                            <table>
                                <tr>
                                    <td align="left"><b><u>DATE:</u></b> {facdate}</td>
                                </tr>
                                <tr>
                                    <td align="left">
                                        <b><u>RÉFÉRENCE:</u></b> <span
                                        dangerouslySetInnerHTML={{__html: facture.factreference}}/>
                                    </td>
                                </tr>
                            </table>
                            <p style={{clear: "both"}}/>
                            <table style={{width: "100%"}}>
                                <tr class="printer" style={{textAlign: "left", color: "FFF"}}>
                                    <th colSpan="5"><b>1. DÉPENSES ENGAGÉES</b></th>
                                </tr>
                                <tr>
                                    <td colSpan="3" className="borde" style={{textAlign: "right"}}>MONTANT TOTAL HT</td>
                                    <td colSpan="2" className="borde" style={{textAlign: "right"}}><b><NumberFormat
                                        numb={devis.totalht}/></b>
                                    </td>
                                </tr>
                                <tr class="printer" style={{textAlign: "left"}}>
                                    <td colSpan="5" className="borde"><b>2. MODALITÉS DE RÈGLEMENT</b></td>
                                </tr>
                                <tr>
                                    <td colSpan="3" className="borde"
                                        style={{textAlign: "left", paddingLeft: " 20px", color: "#4e73df"}}>
                                        <b>AVANCEMENT DES TRAVAUX</b></td>
                                    <td className="borde" style={{textAlign: "right"}}><b><NumberFormat
                                        numb={decompte.avancement}/>%</b>
                                    </td>
                                    <td className="borde" style={{textAlign: "right"}}><b><NumberFormat
                                        numb={decompte.valeur}/></b></td>
                                </tr>
                                <tr>
                                    <td className="borde" colSpan="5"
                                        style={{textAlign: "left", paddingLeft: " 20px", color: "#4e73df"}}>
                                        <b>À DÉDUIRE</b></td>
                                </tr>
                                <tr>
                                    <td className="borde" colSpan="3" style={{textAlign: "right"}}>DÉDUCTION ACOMPTE DE
                                        DEMARRAGE
                                    </td>
                                    <td style={{textAlign: "right"}} className="borde"><b><NumberFormat
                                        numb={decompte.acompte}/>%</b></td>
                                    <td style={{textAlign: "right"}} className="borde">
                                        <b><NumberFormat numb={acompte}/></b></td>
                                </tr>
                                <tr>
                                    <td colSpan="3" style={{textAlign: "right"}} className="borde">DÉDUCTION RETENUE
                                        GARANTIE
                                    </td>
                                    <td style={{textAlign: "right"}} className="borde"><NumberFormat
                                        numb={decompte.garantie}/>%
                                    </td>
                                    <td style={{textAlign: "right"}} className="borde"><NumberFormat
                                        numb={((decompte.valeur * decompte.garantie) / 100)}/></td>
                                </tr>
                                <tr>
                                    <td colSpan="3" style={{textAlign: "right"}} className="borde">DÉDUCTION RETENUE DE
                                        FINITION
                                    </td>
                                    <td style={{textAlign: "right"}} className="borde"><NumberFormat
                                        numb={decompte.finition}/>%
                                    </td>
                                    <td style={{textAlign: "right"}} className="borde"><NumberFormat
                                        numb={((decompte.valeur * decompte.finition) / 100)}/></td>
                                </tr>
                                <tr>
                                    <td colSpan="3" style={{textAlign: "right"}} className="borde">DÉDUCTION COMPTE
                                        PRORATA
                                    </td>
                                    <td style={{textAlign: "right"}} className="borde"><NumberFormat
                                        numb={decompte.prorata}/>%
                                    </td>
                                    <td style={{textAlign: "right"}} className="borde"><NumberFormat
                                        numb={((decompte.valeur * decompte.prorata) / 100)}/></td>
                                </tr>
                                <tr>
                                    <td colSpan="3" style={{textAlign: "right"}} className="borde">DÉDUCTION RETENUE
                                        ASSURANCE TRC
                                    </td>
                                    <td style={{textAlign: "right"}} className="borde"><NumberFormat
                                        numb={decompte.trc}/>%
                                    </td>
                                    <td style={{textAlign: "right"}} className="borde"><NumberFormat
                                        numb={((decompte.valeur * decompte.trc) / 100)}/></td>
                                </tr>
                                <tr>
                                    <td colSpan="3" style={{textAlign: "right"}} className="borde">DÉDUCTION
                                        DES DÉCOMPTES
                                    </td>
                                    <td style={{textAlign: "right"}} className="borde"></td>
                                    <td style={{textAlign: "right"}} className="borde"><NumberFormat
                                        numb={decompte.countdecompe}/></td>
                                </tr>
                                <tr>
                                    <td colSpan="5" style={{textAlign: "left", paddingLeft: " 20px", color: "#4e73df"}}
                                        className="borde">
                                        <b>SOIT</b></td>
                                </tr>
                                <tr>
                                    <td colSpan="3" style={{textAlign: "right"}} className="borde">MONTANT DE LA
                                        SITUATION À DÉLIVRER HT
                                    </td>
                                    <td style={{textAlign: "right"}} className="borde"></td>
                                    <td style={{textAlign: "right"}} className="borde"><NumberFormat
                                        numb={decompte.apayer}/></td>
                                </tr>
                                <tr>
                                    <td colSpan="3" style={{textAlign: "right"}}
                                        className="borde">TVA {devis.tva}%
                                    </td>
                                    <td style={{textAlign: "right"}} className="borde"></td>
                                    <td style={{textAlign: "right"}} className="borde"><NumberFormat
                                        numb={((decompte.apayer * devis.tva) / 100)}/></td>
                                </tr>
                                <tr>
                                    <td colSpan="3" style={{textAlign: "right", color: "#4e73df"}} className="borde"><b>MONTANT
                                        DE LA
                                        SITUATION
                                        À DÉLIVRER TTC</b></td>
                                    <td style={{textAlign: "right"}} className="borde"></td>
                                    <td style={{textAlign: "right", color: "#4e73df"}} className="borde">
                                        <b><NumberFormat numb={(parseFloat(decompte.ttc))}/></b>
                                    </td>
                                </tr>
                            </table>
                            <p style={{clear: "both"}}></p>
                            <br/>
                            <p style={{textAlign: "left"}}>
                                Arrêté la présente facture à la somme de:<br/>
                                <b><span>{numberToLetters(parseInt((decompte.ttc)), {lang: 'fr'})} {mocode}</span></b>
                            </p><br/>
                            <p style={{float: "right", textDecoration: "underline"}}>SIGNATURE AUTORISÉE</p>
                            <br/><br/><br/>
                            {facture.information !== null &&
                                <>
                                <p style={{float: "left", color: "#4e73df"}}><u>CONDITIONS ET MODALITÉS DE
                                        PAIEMENT</u></p>
                                    <p style={{clear: "both"}}></p>
                                    <p style={{color: "#000000"}}>{facture.information}</p>
                                </>}
                        </>
                    }
                    {facture.type === "acompte" &&
                        <>
                            <table align="right">
                                <tr>
                                    <td style={{border: "none", textAlign: "center"}}>
                                        <b>{client.nomclient}</b><br/>
                                        {client.contribuable}<br/>
                                        {client.adresse}<br/>
                                        {client.mail}<br/>
                                    </td>
                                </tr>
                            </table>
                            <p style={{clear: "both"}}/>
                            <table>
                                <tr>
                                    <td align="left"><b><u>DATE:</u></b> {facdate}</td>
                                </tr>
                                <tr>
                                    <td align="left">
                                        <b><u>RÉFÉRENCE:</u></b> FACTURE D'ACOMPTE DEVIS Nº {devis.iddevis}<br/>
                                        <span dangerouslySetInnerHTML={{__html: facture.factreference}}/>
                                    </td>
                                </tr>
                            </table>
                            <br/>
                            <table style={{width: "100%"}}>
                                <tr class="printer">
                                    {devis.aaref === 'oui' &&
                                        <th className="borde text-center"> RÉF </th>}
                                    <th style={{
                                        maxWidth: "500px",
                                        minWidth: "250px",
                                        textAlign: "left"
                                    }}>DÉSIGNATION
                                    </th>
                                    {devis.zone === 'oui' &&
                                        <th style={{textAlign: "center"}}>SECTION</th>
                                    }
                                    <th style={{textAlign: "center"}}>UNITÉ</th>
                                    <th style={{textAlign: "center"}}>QTÉ</th>
                                    <th style={{textAlign: "center"}}>PRIX&nbsp;U.</th>
                                    {devis.aarem === 'oui' &&
                                        <th style={{textAlign: "center"}}>%REM</th>
                                    }
                                    <th style={{textAlign: "center"}}>MONTANT&nbsp;HT</th>
                                </tr>

                                {renderGroupe}
                                {renderLigne}

                                {devis.aarem === 'oui' &&
                                    <tr>
                                        {devis.aaref === 'oui' &&
                                            <td className="bord"/>
                                        }

                                        <td className="bord"/>

                                        {devis.zone === 'oui' &&
                                            <>
                                                <td className="bord text-right" colSpan="5"><b> REMISE TOTALE </b></td>
                                                <td className="barder text-right nowrape">< NumberFormat
                                                    numb={devis.vremise}/></td>
                                            </>
                                        }
                                        {devis.zone === 'non' &&
                                            <>
                                                <td className="bord text-right" colSpan="4"><b> REMISE TOTALE </b></td>
                                                <td className="barder text-right nowrape">< NumberFormat
                                                    numb={devis.vremise}/></td>
                                            </>
                                        }
                                    </tr>
                                }
                                {devis.aarem === 'tht' &&
                                    <tr>
                                        {devis.aaref === 'oui' &&
                                            <td className="bord"/>
                                        }
                                        <td className="bord"/>
                                        {devis.zone === 'oui' &&
                                            <>
                                                <td className="bord text-right" colSpan="5"><b> REMISE (< NumberFormat
                                                    numb={devis.remtht}/>%) </b></td>
                                                <td className="barder text-right nowrape">< NumberFormat
                                                numb={devis.vremise}/></td>
                                            </>
                                        }
                                        {devis.zone === 'non' &&
                                            <>
                                                <td className="bord text-right" colSpan="4"><b> REMISE (< NumberFormat
                                                    numb={devis.remtht}/>%) </b></td>
                                                <td className="barder text-right nowrape">< NumberFormat
                                                    numb={devis.vremise}/></td>
                                            </>
                                        }
                                    </tr>
                                }
                                <tr>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord"/>
                                    }
                                    <td className="bord"/>
                                    {devis.zone === 'oui' &&
                                        <>
                                            {devis.aarem === 'oui' &&
                                                <td colSpan="5" className="bord text-right"><b> TOTAL HT </b></td>
                                            }
                                            {devis.aarem !== 'oui' &&
                                                <td className="bord text-right" colSpan="4"><b> TOTAL HT </b></td>
                                            }
                                            <td className="barder text-right nowrape">< NumberFormat
                                                numb={devis.totalht}/></td>
                                        </>
                                    }
                                    {devis.zone !== 'oui' &&
                                        <>
                                            {devis.aarem === 'oui' &&
                                                <td colSpan="4" className="bord text-right"><b> TOTAL HT </b></td>
                                            }
                                            {devis.aarem !== 'oui' &&
                                                <td className="bord text-right" colSpan="3"><b> TOTAL HT </b></td>
                                            }
                                            {devis.aarem === 'tht' &&
                                                <td className="barder text-right nowrape">< NumberFormat
                                                    numb={devis.remtht}/></td>
                                            }
                                            <td className="barder text-right nowrape">< NumberFormat
                                                numb={devis.totalht}/></td>
                                        </>
                                    }

                                </tr>
                                <tr>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord"/>
                                    }
                                    <td className="bord"/>

                                    {devis.zone === 'oui' &&
                                        <>
                                            {devis.aarem === 'oui' &&
                                                <td colSpan="5" className="bord text-right"><b> ACOMPTE (<NumberFormat
                                                    numb={facture.acompte.pourcentage}/>%) HT </b></td>
                                            }
                                            {devis.aarem !== 'oui' &&
                                                <td className="bord text-right" colSpan="4"><b> ACOMPTE (<NumberFormat
                                                    numb={facture.acompte.pourcentage}/>%) HT </b></td>
                                            }
                                            <td className="barder text-right nowrape">< NumberFormat
                                                numb={facture.totalht}/></td>
                                        </>
                                    }

                                    {devis.zone !== 'oui' &&
                                        <>
                                            {devis.aarem === 'oui' &&
                                                <td colSpan="4" className="bord text-right"><b> ACOMPTE (<NumberFormat
                                                    numb={facture.acompte.pourcentage}/>%) HT </b></td>
                                            }
                                            {devis.aarem !== 'oui' &&
                                                <td className="bord text-right" colSpan="3"><b> ACOMPTE (<NumberFormat
                                                    numb={facture.acompte.pourcentage}/>%) HT </b></td>
                                            }
                                            {devis.aarem === 'tht' &&
                                                <td className="barder text-right nowrape"></td>
                                            }
                                            <td className="barder text-right nowrape">< NumberFormat
                                                numb={facture.totalht}/></td>
                                        </>
                                    }

                                </tr>
                                {devis.abasetva === 'oui' &&
                                    <tr>
                                        {devis.aaref === 'oui' &&
                                            <td className="bord"/>
                                        }

                                        <td className="bord"/>

                                        {devis.zone === 'oui' &&
                                            <>
                                                {devis.aarem === 'oui' &&
                                                    <td colSpan="5" className="bord text-right"><b> BASE TVA</b></td>
                                                }
                                                {devis.aarem !== 'oui' &&
                                                    <td className="bord text-right" colSpan="4"><b> BASE TVA</b></td>
                                                }

                                                <td className="barder text-right nowrape"><NumberFormat
                                                    numb={devis.basetva * ((facture.totalttc - facture.totalht) / devis.vtva)}/>
                                                </td>
                                            </>
                                        }

                                        {devis.zone !== 'oui' &&
                                            <>
                                                {devis.aarem === 'oui' &&
                                                    <td colSpan="4" className="bord text-right"><b> BASE TVA</b></td>
                                                }
                                                {devis.aarem !== 'oui' &&
                                                    <td className="bord text-right" colSpan="3"><b> BASE TVA</b></td>
                                                }
                                                <td className="barder text-right nowrape"><NumberFormat
                                                    numb={devis.basetva * ((facture.totalttc - facture.totalht) / devis.vtva)}/>
                                                </td>

                                            </>
                                        }

                                    </tr>
                                }
                                {devis.abasetva !== 'oui' &&
                                    <tr>
                                        {devis.aaref === 'oui' &&
                                            <td className="bord"/>
                                        }
                                        <td className="bord"/>

                                        {devis.zone === 'oui' &&
                                            <>
                                                {devis.aarem === 'oui' &&
                                                    <td colSpan="5" className="bord text-right">
                                                        <b>TVA {devis.tva}% {stva}</b></td>
                                                }
                                                {devis.aarem !== 'oui' &&
                                                    <td className="bord text-right" colSpan="4">
                                                        <b>TVA {devis.tva}% {stva}</b></td>
                                                }
                                                <td className="barder text-right nowrape"><NumberFormat
                                                    numb={facture.vtva}/>
                                                </td>

                                            </>
                                        }

                                        {devis.zone !== 'oui' &&
                                            <>
                                                {devis.aarem === 'oui' &&
                                                    <td colSpan="4" className="bord text-right">
                                                        <b>TVA {devis.tva}% {stva}</b></td>
                                                }
                                                {devis.aarem !== 'oui' &&
                                                    <td className="bord text-right" colSpan="3">
                                                        <b>TVA {devis.tva}% {stva}</b></td>
                                                }
                                                <td className="barder text-right nowrape"><NumberFormat
                                                    numb={facture.vtva}/>
                                                </td>
                                            </>
                                        }
                                    </tr>
                                }
                                <tr>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord"/>
                                    }
                                    <td className="bord"/>

                                    {devis.zone === 'oui' &&
                                        <>
                                            {devis.aarem === 'oui' &&
                                                <td colSpan="5" className="text-right" style={{
                                                    textAlign: "right",
                                                    color: "#4e73df",
                                                    borderBottom: "1px solid #D3D3D3"
                                                }}><b>NET À PAYER</b></td>
                                            }
                                            {devis.aarem !== 'oui' &&
                                                <td className="text-right" colSpan="4" style={{
                                                    textAlign: "right",
                                                    color: "#4e73df",
                                                    borderBottom: "1px solid #D3D3D3"
                                                }}><b>NET À PAYER</b></td>
                                            }
                                            <td className="bordeu text-right nowrape"
                                                style={{textAlign: "right", color: "#4e73df"}}>
                                                <NumberFormat
                                                    numb={facture.totalttc}/>
                                            </td>
                                        </>
                                    }

                                    {devis.zone !== 'oui' &&
                                        <>
                                            {devis.aarem === 'oui' &&
                                                <td colSpan="4" className="text-right" style={{
                                                    textAlign: "right",
                                                    color: "#4e73df",
                                                    borderBottom: "1px solid #D3D3D3"
                                                }}><b>NET À PAYER</b></td>
                                            }
                                            {devis.aarem !== 'oui' &&
                                                <td className="text-right" colSpan="3" style={{
                                                    textAlign: "right",
                                                    color: "#4e73df",

                                                    borderBottom: "1px solid #D3D3D3"
                                                }}><b>NET À PAYER</b></td>
                                            }
                                            {devis.aarem === 'tht' &&
                                                <td className="barder text-right nowrape"></td>
                                            }
                                            {devis.aarem !== 'tht' &&
                                                <td className="bordeu text-right nowrape"
                                                    style={{textAlign: "right", color: "#4e73df"}}>
                                                    <NumberFormat
                                                        numb={facture.totalttc}/>
                                                </td>
                                            }
                                        </>
                                    }
                                </tr>

                            </table>
                            <p style={{clear: "both"}}></p>
                            <br/>
                            <p className="text-left">
                                Arrêté la présente facture à la somme de:<br/>
                                <b>{numberToLetters(parseInt(facture.totalttc), {lang: 'fr'})}
                                </b><span><b> {devis.monnaie.code}</b></span>
                            </p>
                            <br/>
                            <p style={{float: "right", textDecoration: "underline"}}>SIGNATURE AUTORISÉE</p>
                            <br/><br/><br/>
                            {facture.information !== null &&
                                <>
                                    <p style={{float: "left", color: "#4e73df"}}><u>CONDITIONS ET MODALITÉS DE
                                        PAIEMENT</u></p>
                                    <p style={{clear: "both"}}></p>
                                    <p style={{color: "#000000"}}
                                       dangerouslySetInnerHTML={{__html: facture.information}}></p>
                                </>
                            }
                        </>
                    }
                    {facture.type === "retenue" &&
                        <>
                            <table align="right">
                                <tr>
                                    <td style={{border: "none", textAlign: "left"}}>
                                        <b>{client.nomclient}</b><br/>
                                        {client.contribuable !== null &&
                                            <>{client.contribuable}<br/></>
                                        }
                                        {client.adresse !== null &&
                                            <>{client.adresse}<br/></>
                                        }
                                        {client.mail !== null &&
                                            <>{client.mail}<br/></>
                                        }
                                    </td>
                                </tr>
                            </table>
                            <p style={{clear: "both"}}/>
                            <table>
                                <tr>
                                    <td align="left"><b><u>DATE:</u></b> {facdate}</td>
                                </tr>
                                <tr>
                                    <td align="left">
                                        <b><u>RÉFÉRENCE:</u></b> FACTURE D'ACOMPTE DEVIS Nº {devis.iddevis}<br/>
                                        <span dangerouslySetInnerHTML={{__html: facture.factreference}}/>
                                    </td>
                                </tr>
                            </table>
                            <p style={{clear: "both"}}/>
                            <br/>
                            <table style={{width: "100%"}}>
                                <tr class="printer">
                                    {devis.aaref === 'oui' &&
                                        <th className="borde text-center"> RÉF </th>}
                                    <th style={{
                                        maxWidth: "500px",
                                        minWidth: "250px",
                                        textAlign: "left"
                                    }}>DÉSIGNATION
                                    </th>
                                    {devis.zone === 'oui' &&
                                        <th style={{textAlign: "center"}}>SECTION</th>
                                    }
                                    <th style={{textAlign: "center"}}>UNITÉ</th>
                                    <th style={{textAlign: "center"}}>QTÉ</th>
                                    <th style={{textAlign: "center"}}>PRIX&nbsp;U.</th>
                                    <th style={{textAlign: "center"}}>MONTANT&nbsp;HT</th>
                                </tr>
                                <tr>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord"/>
                                    }
                                    <td className="bord"/>
                                    {devis.zone === 'oui' &&
                                        <>
                                            {devis.aarem === 'oui' &&
                                                <td colSpan="5" className="bord text-right"><b> SOUS-TOTAL HT </b></td>
                                            }
                                            {devis.aarem !== 'oui' &&
                                                <td className="bord text-right" colSpan="4"><b> SOUS-TOTAL HT </b></td>
                                            }
                                            {devis.aarem === 'tht' &&
                                                <td className="barder text-right nowrape">< NumberFormat
                                                    numb={tht}/></td>
                                            }
                                            {devis.aarem !== 'tht' &&
                                                <td className="barder text-right nowrape"></td>
                                            }
                                        </>
                                    }
                                    {devis.zone !== 'oui' &&
                                        <>
                                            {devis.aarem === 'oui' &&
                                                <td colSpan="4" className="bord text-right"><b> SOUS-TOTAL HT </b></td>
                                            }
                                            {devis.aarem !== 'oui' &&
                                                <td className="bord text-right" colSpan="3"><b> SOUS-TOTAL HT </b></td>
                                            }
                                            {devis.aarem === 'tht' &&
                                                <td className="barder text-right nowrape">< NumberFormat
                                                    numb={tht}/></td>
                                            }
                                            {devis.aarem !== 'tht' &&
                                                <td className="barder text-right nowrape"></td>
                                            }
                                        </>
                                    }
                                </tr>
                                <tr>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord"/>
                                    }
                                    <td className="bord"/>
                                    {devis.zone === 'oui' &&
                                        <>
                                            {devis.aarem === 'oui' &&
                                                <td colSpan="5" className="bord text-right"><b> RETENUE PROVISOIRE
                                                    (<NumberFormat
                                                        numb={facture.acompte.pourcentage}/>%) </b></td>
                                            }
                                            {devis.aarem !== 'oui' &&
                                                <td className="bord text-right" colSpan="4"><b> RETENUE PROVISOIRE
                                                    (<NumberFormat
                                                        numb={facture.acompte.pourcentage}/>%)</b></td>
                                            }
                                            {devis.aarem === 'tht' &&
                                                <td className="barder text-right nowrape"></td>
                                            }
                                            {devis.aarem !== 'tht' &&
                                                <td className="barder text-right nowrape">< NumberFormat
                                                    numb={facture.totalht}/>
                                                </td>
                                            }
                                        </>
                                    }
                                    {devis.zone !== 'oui' &&
                                        <>
                                            {devis.aarem === 'oui' &&
                                                <td colSpan="4" className="bord text-right"><b> RETENUE PROVISOIRE
                                                    (<NumberFormat
                                                        numb={facture.acompte.pourcentage}/>%)</b></td>
                                            }
                                            {devis.aarem !== 'oui' &&
                                                <td className="bord text-right" colSpan="3"><b> RETENUE PROVISOIRE
                                                    (<NumberFormat
                                                        numb={facture.acompte.pourcentage}/>%)</b></td>
                                            }
                                            {devis.aarem === 'tht' &&
                                                <td className="barder text-right nowrape"></td>
                                            }
                                            {devis.aarem !== 'tht' &&
                                                <td className="barder text-right nowrape">< NumberFormat
                                                    numb={facture.totalht}/>
                                                </td>
                                            }
                                        </>
                                    }
                                </tr>
                                <tr>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord"/>
                                    }
                                    <td className="bord"/>
                                    {devis.zone === 'oui' &&
                                        <>
                                            {devis.aarem === 'oui' &&
                                                <td colSpan="5" className="bord text-right"><b>SOUS-TOTAL APRÈS
                                                    RETENUE</b></td>
                                            }
                                            {devis.aarem !== 'oui' &&
                                                <td className="bord text-right" colSpan="4"><b>SOUS-TOTAL APRÈS
                                                    RETENUE</b></td>
                                            }
                                            {devis.aarem === 'tht' &&
                                                <td className="barder text-right nowrape"></td>
                                            }
                                            {devis.aarem !== 'tht' &&
                                                <td className="barder text-right nowrape">< NumberFormat
                                                    numb={facture.totalht}/>
                                                </td>
                                            }
                                        </>
                                    }
                                    {devis.zone !== 'oui' &&
                                        <>
                                            {devis.aarem === 'oui' &&
                                                <td colSpan="4" className="bord text-right"><b>SOUS-TOTAL APRÈS
                                                    RETENUE</b></td>
                                            }
                                            {devis.aarem !== 'oui' &&
                                                <td className="bord text-right" colSpan="3"><b>SOUS-TOTAL APRÈS
                                                    RETENUE</b></td>
                                            }
                                            {devis.aarem === 'tht' &&
                                                <td className="barder text-right nowrape"></td>
                                            }
                                            {devis.aarem !== 'tht' &&
                                                <td className="barder text-right nowrape">< NumberFormat
                                                    numb={facture.totalht}/>
                                                </td>
                                            }
                                        </>
                                    }
                                </tr>
                                <tr>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord"/>
                                    }
                                    <td className="bord"/>
                                    {devis.zone === 'oui' &&
                                        <>
                                            {devis.aarem === 'oui' &&
                                                <td colSpan="5" className="bord text-right"><b>TAUX BNPC</b></td>
                                            }
                                            {devis.aarem !== 'oui' &&
                                                <td className="bord text-right" colSpan="4"><b>TAUX BNPC</b></td>
                                            }
                                            {devis.aarem === 'tht' &&
                                                <td className="barder text-right nowrape"></td>
                                            }
                                            {devis.aarem !== 'tht' &&
                                                <td className="barder text-right nowrape">< NumberFormat
                                                    numb={facture.totalht}/>
                                                </td>
                                            }
                                        </>
                                    }
                                    {devis.zone !== 'oui' &&
                                        <>
                                            {devis.aarem === 'oui' &&
                                                <td colSpan="4" className="bord text-right"><b>TAUX BNPC</b></td>
                                            }
                                            {devis.aarem !== 'oui' &&
                                                <td className="bord text-right" colSpan="3"><b>TAUX BNPC</b></td>
                                            }
                                            {devis.aarem === 'tht' &&
                                                <td className="barder text-right nowrape"></td>
                                            }
                                            {devis.aarem !== 'tht' &&
                                                <td className="barder text-right nowrape">< NumberFormat
                                                    numb={facture.totalht}/>
                                                </td>
                                            }
                                        </>
                                    }
                                </tr>
                                {devis.abasetva === 'oui' &&
                                    <tr>
                                        {devis.aaref === 'oui' &&
                                            <td className="bord"/>
                                        }

                                        <td className="bord"/>

                                        {devis.zone === 'oui' &&
                                            <>
                                                {devis.aarem === 'oui' &&
                                                    <td colSpan="5" className="bord text-right"><b> BASE TVA</b></td>
                                                }
                                                {devis.aarem !== 'oui' &&
                                                    <td className="bord text-right" colSpan="4"><b> BASE TVA</b></td>
                                                }
                                                {devis.aarem === 'tht' &&
                                                    <td className="barder text-right nowrape"></td>
                                                }
                                                {devis.aarem !== 'tht' &&
                                                    <td className="barder text-right nowrape"><NumberFormat
                                                        numb={devis.basetva * ((facture.totalttc - facture.totalht) / devis.vtva)}/>
                                                    </td>
                                                }
                                            </>
                                        }

                                        {devis.zone !== 'oui' &&
                                            <>
                                                {devis.aarem === 'oui' &&
                                                    <td colSpan="4" className="bord text-right"><b> BASE TVA</b></td>
                                                }
                                                {devis.aarem !== 'oui' &&
                                                    <td className="bord text-right" colSpan="3"><b> BASE TVA</b></td>
                                                }
                                                {devis.aarem === 'tht' &&
                                                    <td className="barder text-right nowrape"></td>
                                                }
                                                {devis.aarem !== 'tht' &&
                                                    <td className="barder text-right nowrape"><NumberFormat
                                                        numb={devis.basetva * ((facture.totalttc - facture.totalht) / devis.vtva)}/>
                                                    </td>
                                                }
                                            </>
                                        }

                                    </tr>
                                }
                                {devis.abasetva !== 'oui' &&
                                    <tr>
                                        {devis.aaref === 'oui' &&
                                            <td className="bord"/>
                                        }
                                        <td className="bord"/>

                                        {devis.zone === 'oui' &&
                                            <>
                                                {devis.aarem === 'oui' &&
                                                    <td colSpan="5" className="bord text-right"><b>TVA {stva}</b></td>
                                                }
                                                {devis.aarem !== 'oui' &&
                                                    <td className="bord text-right" colSpan="4"><b>TVA {stva}</b></td>
                                                }
                                                {devis.aarem === 'tht' &&
                                                    <td className="barder text-right nowrape"></td>
                                                }
                                                {devis.aarem !== 'tht' &&
                                                    <td className="barder text-right nowrape"><NumberFormat
                                                        numb={facture.vtva}/>
                                                    </td>
                                                }
                                            </>
                                        }

                                        {devis.zone !== 'oui' &&
                                            <>
                                                {devis.aarem === 'oui' &&
                                                    <td colSpan="4" className="bord text-right"><b>TVA {stva}</b></td>
                                                }
                                                {devis.aarem !== 'oui' &&
                                                    <td className="bord text-right" colSpan="3"><b>TVA {stva}</b></td>
                                                }
                                                {devis.aarem === 'tht' &&
                                                    <td className="barder text-right nowrape"></td>
                                                }
                                                {devis.aarem !== 'tht' &&
                                                    <td className="barder text-right nowrape"><NumberFormat
                                                        numb={facture.vtva}/>
                                                    </td>
                                                }
                                            </>
                                        }
                                    </tr>
                                }
                                <tr>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord"/>
                                    }
                                    <td className="bord"/>

                                    {devis.zone === 'oui' &&
                                        <>
                                            {devis.aarem === 'oui' &&
                                                <td colSpan="5" className="text-right" style={{
                                                    textAlign: "right",
                                                    color: "#4e73df",
                                                    fontSize: "12px",
                                                    borderBottom: "1px solid #D3D3D3"
                                                }}><b>NET À PAYER</b></td>
                                            }
                                            {devis.aarem !== 'oui' &&
                                                <td className="text-right" colSpan="4" style={{
                                                    textAlign: "right",
                                                    color: "#4e73df",
                                                    fontSize: "12px",
                                                    borderBottom: "1px solid #D3D3D3"
                                                }}><b>NET À PAYER</b></td>
                                            }
                                            {devis.aarem === 'tht' &&
                                                <td className="barder text-right nowrape"></td>
                                            }
                                            {devis.aarem !== 'tht' &&
                                                <td className="bordeu text-right nowrape"
                                                    style={{fontSize: "12px", textAlign: "right", color: "#4e73df"}}>
                                                    <NumberFormat
                                                        numb={facture.totalttc}/>
                                                </td>
                                            }
                                        </>
                                    }

                                    {devis.zone !== 'oui' &&
                                        <>
                                            {devis.aarem === 'oui' &&
                                                <td colSpan="4" className="text-right" style={{
                                                    textAlign: "right",
                                                    color: "#4e73df",
                                                    fontSize: "12px",
                                                    borderBottom: "1px solid #D3D3D3"
                                                }}><b>NET À PAYER</b></td>
                                            }
                                            {devis.aarem !== 'oui' &&
                                                <td className="text-right" colSpan="3" style={{
                                                    textAlign: "right",
                                                    color: "#4e73df",
                                                    fontSize: "12px",
                                                    borderBottom: "1px solid #D3D3D3"
                                                }}><b>NET À PAYER</b></td>
                                            }
                                            {devis.aarem === 'tht' &&
                                                <td className="barder text-right nowrape"></td>
                                            }
                                            {devis.aarem !== 'tht' &&
                                                <td className="bordeu text-right nowrape"
                                                    style={{fontSize: "12px", textAlign: "right", color: "#4e73df"}}>
                                                    <NumberFormat
                                                        numb={facture.totalttc}/>
                                                </td>
                                            }
                                        </>
                                    }
                                </tr>
                            </table>
                            <p style={{clear: "both"}}></p>
                            <br/>
                            <p className="text-left">
                                Arrêté la présente facture à la somme de:<br/>
                                <b>{numberToLetters(parseInt(facture.totalttc), {lang: 'fr'})}
                                </b><span><b> {devis.monnaie.code}</b></span>
                            </p>
                            <br/>
                            <p style={{float: "right", textDecoration: "underline"}}>SIGNATURE AUTORISÉE</p>
                            <br/><br/><br/>
                            {facture.information !== null &&
                                <>
                                    <p style={{float: "left", color: "#4e73df"}}><u>CONDITIONS ET MODALITÉS DE
                                        PAIEMENT</u></p>
                                    <p style={{clear: "both"}}></p>
                                    <p style={{color: "#000000"}}
                                       dangerouslySetInnerHTML={{__html: facture.information}}></p>
                                </>
                            }
                        </>
                    }
                    {facture.type === "devis" &&
                        <>
                            <table align="right" style={{marginTop: forme.teteDB}}>
                                <tr>
                                    <td style={{border: "none", textAlign: "center"}}>
                                        <b>{client.nomclient}</b><br/>
                                        {client.contribuable !== null && <>{client.contribuable} <br/></>}
                                        {client.adresse !== null && <> {client.adresse} <br/></>}
                                        {client.mail !== null && <>{client.mail} <br/> </>}
                                    </td>
                                </tr>
                            </table>
                            <p style={{clear: "both"}}/>
                            <table>
                                <tr>
                                    <td align="left"><b><u>DATE:</u></b> {facdate}</td>
                                </tr>
                                <tr>
                                    <td align="left">
                                        <b><u>RÉFÉRENCE:</u></b><br/>
                                        FACTURE DE SOLDE<br/>
                                        <span dangerouslySetInnerHTML={{__html: facture.factreference}}/>
                                    </td>
                                </tr>
                            </table>
                            <br/>
                            <table style={{width: "100%"}}>
                                <tr className="printer">
                                    {devis.aaref === 'oui' &&
                                        <th style={{textAlign: "center"}}>RÉF</th>
                                    }
                                    <th style={{maxWidth: "500px", minWidth: "250px", textAlign: "left"}}>
                                        DÉSIGNATION
                                    </th>
                                    {devis.zone === 'oui' &&
                                        <th style={{textAlign: "center"}}>SECTION</th>
                                    }
                                    <th style={{textAlign: "center"}}>UNITÉ</th>
                                    <th style={{textAlign: "center"}}>QTÉ</th>
                                    <th style={{textAlign: "center"}} className="mw100">PRIX&nbsp;U.</th>
                                    {devis.aarem === 'oui' &&
                                        <th style={{textAlign: "center"}}>REM %</th>
                                    }
                                    <th style={{textAlign: "center"}} className="mw100">MONTANT&nbsp;HT</th>
                                </tr>
                                {renderGroupe}
                                {renderLigne}
                                {devis.aarem === 'tht' &&
                                    <tr>
                                        {devis.aaref === 'oui' &&
                                            <td className="bord"/>
                                        }

                                        <td className="bord"/>

                                        {devis.zone === 'oui' &&
                                            <>
                                                <td className="bord text-right" colSpan="4"><b> BASE TVA</b></td>
                                                <td className="barder text-right nowrape"><NumberFormat
                                                    numb={devis.basetva * ((facture.totalttc - facture.totalht) / devis.vtva)}/>
                                                </td>
                                            </>
                                        }

                                        {devis.zone === 'oui' &&
                                            <>
                                                <td className="bord text-right" colSpan="3"><b> BASE TVA</b></td>
                                                <td className="barder text-right nowrape"><NumberFormat
                                                    numb={devis.basetva * ((facture.totalttc - facture.totalht) / devis.vtva)}/>
                                                </td>
                                            </>
                                        }

                                    </tr>
                                }
                                <tr>
                                    {devis.aaref === 'oui' && <td></td>}
                                    <td></td>
                                    {devis.zone === 'oui' &&
                                        <td></td>
                                    }
                                    {devis.aarem === 'oui' &&
                                        <td colSpan="4" style={{textAlign: "right"}}><b>DEVIS TOTAL HT</b></td>
                                    }
                                    {devis.aarem !== 'oui' &&
                                        <td colSpan="3" style={{textAlign: "right"}}><b>DEVIS TOTAL HT</b></td>
                                    }
                                    <td align="right" className="barder"><NumberFormat numb={devis.totalht}/></td>
                                </tr>
                                <tr>
                                    {devis.aaref === 'oui' && <td></td>}
                                    <td></td>
                                    {devis.zone === 'oui' &&
                                        <td></td>
                                    }
                                    {devis.aarem === 'oui' &&
                                        <td colSpan="4" style={{textAlign: "right"}}><b>DÉDUCTION DES ACOMPTES</b></td>
                                    }
                                    {devis.aarem !== 'oui' &&
                                        <td colSpan="3" style={{textAlign: "right"}}><b>DÉDUCTION DES ACOMPTES</b></td>
                                    }
                                    <td align="right" className="barder"><NumberFormat numb={totalacomptes}/></td>
                                </tr>
                                <tr>
                                    {devis.aaref === 'oui' && <td></td>}
                                    <td></td>
                                    {devis.zone === 'oui' &&
                                        <td></td>
                                    }
                                    {devis.aarem === 'oui' &&
                                        <td colSpan="4" style={{textAlign: "right"}}><b>DÉDUCTION DES DÉCOMPTES</b></td>
                                    }
                                    {devis.aarem !== 'oui' &&
                                        <td colSpan="3" style={{textAlign: "right"}}><b>DÉDUCTION DES DÉCOMPTES</b></td>
                                    }
                                    <td align="right" className="barder"><NumberFormat numb={totaldecomptes}/></td>
                                </tr>
                                <tr>
                                    {devis.aaref === 'oui' && <td></td>}
                                    {devis.zone === 'oui' &&
                                        <>
                                            {devis.aarem === 'oui' &&
                                                <td colSpan="6" style={{textAlign: "right"}}><b>ADDITION DES
                                                    RETENUES(FINITION-GARANTIE-PRORATA-TRC) - {addi}%</b></td>
                                            }
                                            {devis.aarem !== 'oui' &&
                                                <td colSpan="5" style={{textAlign: "right"}}><b>ADDITION DES
                                                    RETENUES(FINITION-GARANTIE-PRORATA-TRC)- {addi}%</b></td>
                                            }
                                        </>
                                    }
                                    {devis.zone !== 'oui' &&
                                        <>
                                            {devis.aarem === 'oui' &&
                                                <td colSpan="5" style={{textAlign: "right"}}><b>ADDITION DES
                                                    RETENUES(FINITION-GARANTIE-PRORATA-TRC)- {addi}%</b></td>
                                            }
                                            {devis.aarem !== 'oui' &&
                                                <td colSpan="4" style={{textAlign: "right"}}><b>ADDITION DES
                                                    RETENUES(FINITION-GARANTIE-PRORATA-TRC)- {addi}%</b></td>
                                            }
                                        </>
                                    }

                                    <td align="right" className="barder"><NumberFormat numb={totalretenue}/></td>
                                </tr>
                                {devis.aarem === 'oui' &&
                                    <tr>
                                        {devis.aaref === 'oui' &&
                                            <td></td>
                                        }
                                        <td></td>
                                        {devis.zone === 'oui' &&
                                            <td></td>
                                        }
                                        {devis.aarem === 'oui' &&
                                            <td colSpan="4" style={{textAlign: "right"}}><b>REMISE</b></td>
                                        }
                                        {devis.aarem !== 'oui' &&
                                            <td colSpan="3" style={{textAlign: "right"}}><b>REMISE</b></td>
                                        }
                                        <td align="right" className="barder"><NumberFormat numb={devis.vremise}/></td>
                                    </tr>
                                }
                                <tr>
                                    {devis.aaref === 'oui' && <td></td>}
                                    <td></td>
                                    {devis.zone === 'oui' &&
                                        <td></td>
                                    }
                                    {devis.aarem === 'oui' &&
                                        <td colSpan="4" style={{textAlign: "right"}}><b>TOTAL HT</b></td>
                                    }
                                    {devis.aarem !== 'oui' &&
                                        <td colSpan="3" style={{textAlign: "right"}}><b>TOTAL HT</b></td>
                                    }
                                    <td align="right" className="barder"><NumberFormat numb={totalhtsolde}/></td>
                                </tr>


                                {devis.abasetva === 'oui' &&
                                    <tr>
                                        {devis.aaref === 'oui' && <td></td>}
                                        <td></td>
                                        {devis.zone === 'oui' && <td></td>}
                                        {devis.aarem === 'oui' &&
                                            <td colSpan="4" style={{textAlign: "right"}}><b>BASE
                                                TVA{devis.code !== null && devis.code}</b></td>
                                        }
                                        <td colSpan="3" style={{textAlign: "right"}}><b>BASE
                                            TVA{devis.code !== null && devis.code}</b></td>
                                        <td align="right" className="barder"><NumberFormat numb={devis.basetva}/></td>
                                    </tr>
                                }
                                <tr>
                                    {devis.aaref === 'oui' &&
                                        <td></td>
                                    }
                                    <td></td>
                                    {devis.zone === 'oui' &&
                                        <td></td>
                                    }
                                    {devis.aarem === 'oui' &&
                                        <td colSpan="4" style={{textAlign: "right"}}><b>TVA {devis.tva}%{stva}</b></td>
                                    }
                                    {devis.aarem !== 'oui' &&
                                        <td colSpan="3" style={{textAlign: "right"}}><b>TVA {devis.tva}%{stva}</b></td>
                                    }
                                    <td align="right" className="barder"><NumberFormat numb={totaltva}/></td>
                                </tr>
                                <tr>
                                    {devis.aaref === 'oui' &&
                                        <td></td>
                                    }
                                    <td></td>
                                    {devis.zone === 'oui' &&
                                        <td></td>
                                    }
                                    <td></td>
                                    {devis.aarem === 'oui' &&
                                        <td align="right" colSpan="3" style={{
                                            color: "#4e73df",
                                            fontSize: "12px",
                                            borderBottom: "1px solid #D3D3D3"
                                        }}>
                                            <b>NET À PAYER</b></td>
                                    }
                                    {devis.aarem !== 'oui' &&
                                        <td align="right" colSpan="2" style={{
                                            color: "#4e73df",
                                            borderBottom: "1px solid #D3D3D3"
                                        }}>
                                            <b>NET À PAYER</b></td>
                                    }
                                    <td align="right" className="barder" style={{color: "#4e73df"}}>
                                        <b><NumberFormat numb={totalttcsolde}/></b></td>
                                </tr>
                            </table>
                            <p style={{clear: "both"}}/>
                            <br/>
                            <p className="text-left">
                                Arrêté la présente facture à la somme de:<br/>
                                <b> {numberToLetters(parseInt(totalttcsolde), {lang: 'fr'})}
                                    <span>{devis.monnaie.code}</span></b>
                            </p>
                            <p style={{clear: "both"}}/><br/>
                            {facture.information !== null &&
                                <>
                                    <p className="kop" style={{
                                        float: "left",
                                        color: "#4e73df",
                                        textDecoration: "underline"
                                    }}>CONDITIONS ET MODALITÉS DE PAIEMENT </p>
                                    <p style={{clear: "both"}}/>
                                    <p style={{color: "#000000"}}
                                       dangerouslySetInnerHTML={{__html: facture.information}}/>
                                </>
                            }
                        </>
                    }
                    {facture.type === "simple" &&
                        <>
                            <table align="right">
                                <tr>
                                    <td style={{border: "none", textAlign: "center"}}>

                                        <b>{client.nomclient}</b><br/>
                                        {client.contribuable !== null && <>{client.contribuable} <br/></>}
                                        {client.adresse !== null && <> {client.adresse} <br/></>}
                                        {client.mail !== null && <>{client.mail} <br/> </>}

                                    </td>
                                </tr>
                            </table>
                            <p style={{clear: "both"}}/>
                            <table>
                                <tr>
                                    <td align="left"><b><u>DATE:</u></b> {facdate}</td>
                                </tr>
                                <tr>
                                    <td align="left">
                                        <b><u>RÉFÉRENCE:</u></b><br/>
                                        <span dangerouslySetInnerHTML={{__html: facture.factreference}}/>
                                    </td>
                                </tr>
                            </table>
                            <br/>
                            <table style={{width: "100%"}}>
                                <tr className="printer">
                                    {devis.aaref === 'oui' &&
                                        <th style={{textAlign: "center"}}>RÉF</th>
                                    }
                                    <th style={{maxWidth: "500px", minWidth: "250px", textAlign: "left"}}>
                                        DÉSIGNATION
                                    </th>
                                    {devis.zone === 'oui' &&
                                        <th style={{textAlign: "center"}}>SECTION</th>
                                    }
                                    <th style={{textAlign: "center"}}>UNITÉ</th>
                                    <th style={{textAlign: "center"}}>QTÉ</th>
                                    <th style={{textAlign: "center"}} className="mw100">PRIX&nbsp;U.</th>
                                    {devis.aarem === 'oui' &&
                                        <th style={{textAlign: "center"}}>REMISE</th>
                                    }
                                    <th style={{textAlign: "center"}} className="mw100">MONTANT&nbsp;HT</th>
                                </tr>
                                {renderGroupe}
                                {renderLigne}

                                <tr>
                                    {devis.aaref === 'oui' && <td></td>}
                                    <td></td>
                                    {devis.zone === 'oui' &&
                                        <td></td>
                                    }
                                    {devis.aarem === 'oui' &&
                                        <td colSpan="4" style={{textAlign: "right"}}><b>TOTAL HT</b></td>
                                    }
                                    {devis.aarem !== 'oui' &&
                                        <td colSpan="3" style={{textAlign: "right"}}><b>TOTAL HT</b></td>
                                    }
                                    <td align="right" className="barder"><NumberFormat numb={totalhtsolde}/></td>
                                </tr>


                                {devis.aarem === 'oui' &&
                                    <tr>
                                        {devis.aaref === 'oui' &&
                                            <td></td>
                                        }
                                        <td></td>
                                        {devis.zone === 'oui' &&
                                            <td></td>
                                        }
                                        {devis.aarem === 'oui' &&
                                            <td colSpan="4" style={{textAlign: "right"}}><b>REMISE</b></td>
                                        }
                                        {devis.aarem !== 'oui' &&
                                            <td colSpan="3" style={{textAlign: "right"}}><b>REMISE</b></td>
                                        }
                                        <td align="right" className="barder"><NumberFormat numb={devis.vremise}/></td>
                                    </tr>
                                }

                                {devis.abasetva === 'oui' &&
                                    <tr>
                                        {devis.aaref === 'oui' && <td></td>}
                                        <td></td>
                                        {devis.zone === 'oui' && <td></td>}
                                        {devis.aarem === 'oui' &&
                                            <td colSpan="4" style={{textAlign: "right"}}><b>BASE
                                                TVA{devis.code !== null && devis.code}</b></td>
                                        }
                                        <td colSpan="3" style={{textAlign: "right"}}><b>BASE
                                            TVA{devis.code !== null && devis.code}</b></td>
                                        <td align="right" className="barder"><NumberFormat numb={devis.basetva}/></td>
                                    </tr>
                                }
                                <tr>
                                    {devis.aaref === 'oui' &&
                                        <td></td>
                                    }
                                    <td></td>
                                    {devis.zone === 'oui' &&
                                        <td></td>
                                    }
                                    <td></td>
                                    {devis.aarem === 'oui' &&
                                        <td colSpan="3" style={{textAlign: "right"}}><b>TVA {devis.tva}%</b></td>
                                    }
                                    {devis.aarem !== 'oui' &&
                                        <td colSpan="2" style={{textAlign: "right"}}><b>TVA {devis.tva}%</b></td>
                                    }
                                    <td align="right" className="barder"><NumberFormat numb={totaltva}/></td>
                                </tr>
                                <tr>
                                    {devis.aaref === 'oui' &&
                                        <td></td>
                                    }
                                    <td></td>
                                    {devis.zone === 'oui' &&
                                        <td></td>
                                    }
                                    <td></td>
                                    {devis.aarem === 'oui' &&
                                        <td align="right" colSpan="3" style={{
                                            color: "#4e73df",
                                            fontSize: "12px",
                                            borderBottom: "1px solid #D3D3D3"
                                        }}>
                                            <b>NET À PAYER</b></td>
                                    }
                                    {devis.aarem !== 'oui' &&
                                        <td align="right" colSpan="2" style={{
                                            color: "#4e73df",
                                            fontSize: "12px",
                                            borderBottom: "1px solid #D3D3D3"
                                        }}>
                                            <b>NET À PAYER</b></td>
                                    }
                                    <td align="right" className="barder" style={{fontSize: "12px", color: "#4e73df"}}>
                                        <b><NumberFormat numb={totalttcsolde}/></b></td>
                                </tr>
                            </table>
                            <p style={{clear: "both"}}/>
                            <br/>
                            <p className="text-left">
                                Arrêté la présente facture à la somme de:<br/>
                                <b>{numberToLetters(parseInt(totalttcsolde), {lang: 'fr'})}
                                    <span>{devis.code !== null && <> {devis.monnaie.code}</>} </span></b>
                            </p>
                            <br/>
                            <p style={{float: "right", textDecoration: "underline"}}> SIGNATURE AUTORISÉE </p>
                            <p style={{clear: "both"}}/><br/>
                            {facture.information !== null &&
                                <>
                                    <p className="kop" style={{
                                        float: "left",
                                        color: "#4e73df",
                                        textDecoration: "underline"
                                    }}>CONDITIONS ET MODALITÉS DE PAIEMENT </p>
                                    <p style={{clear: "both"}}/>
                                    <p style={{color: "#000000"}}
                                       dangerouslySetInnerHTML={{__html: facture.information}}/>
                                </>
                            }
                        </>
                    }
                </div>
                <div className="footer"></div>
            </div>







            <div style={{display: "none",}}>
                <div ref={ref} style={{
                    width: "21cm",
                    minHeight: "29.7cm",
                    boxShadow: "0 0 0.5cm rgba(0,0,0,0.5)",
                    backgroundColor: "#FFF",
                }}>
                    <div className="header" style={{
                        width: forme.headerWith + "cm",
                        height: forme.headerHeight + "cm"
                    }}>
                        {forme.typeEntete !== "aucun" &&
                            <>
                                {forme.typeEntete === "image" &&
                                    <img src={`/gallery/${forme.link}`}
                                         style={{
                                             width: forme.teteH + "cm",
                                             height: forme.teteY + "cm",
                                             paddingRight: forme.teteDD + "cm",
                                             paddingLeft: forme.teteDG + "cm",
                                             paddingTop: forme.teteDH + "cm",
                                             paddingBottom: forme.teteDB + "cm",
                                         }}
                                         alt=""/>
                                }
                                {forme.typeEntete === "texte" &&
                                    <p style={{
                                        paddingRight: forme.teteDD + "cm",
                                        paddingLeft: forme.teteDG + "cm",
                                        paddingTop: forme.teteDH + "cm",
                                        paddingBottom: forme.teteDB + "cm",
                                    }}
                                       dangerouslySetInnerHTML={{__html: forme.headerText}}/>
                                }
                            </>
                        }
                    </div>
                    <div style={{paddingLeft: "1cm", paddingRight: "1cm"}}>
                        {facture.type === "decompte" &&
                            <table style={{width: "100%"}}>
                                <thead>
                                <tr>
                                    <td>
                                        <div className="header-space">&nbsp;</div>
                                    </td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <table align="right">
                                            <tr>
                                                <td style={{border: "none", textAlign: "center"}}>
                                                    <b>{client.nomclient.toUpperCase()}</b><br/>
                                                    {client.contribuable}<br/>
                                                    {client.adresse}<br/>
                                                    {client.mail}<br/>
                                                </td>
                                            </tr>
                                        </table>
                                        <p style={{clear: "both"}}/>
                                        <table>
                                            <tr>
                                                <td align="left"><b><u>DATE:</u></b> {facdate}</td>
                                            </tr>
                                            <tr>
                                                <td align="left">
                                                    <b><u>RÉFÉRENCE:</u></b>
                                                    <span dangerouslySetInnerHTML={{__html: facture.factreference}}/>
                                                </td>
                                            </tr>
                                        </table>
                                        <p style={{clear: "both"}}/>
                                        <table style={{width: "100%"}}>
                                            <tr className="printer" style={{textAlign: "left"}}>
                                                <th colSpan="5" className="borde">1. DÉPENSES ENGAGÉES</th>
                                            </tr>
                                            <tr>
                                                <td colSpan="3" className="borde" style={{textAlign: "right"}}>MONTANT
                                                    TOTAL
                                                    HT
                                                </td>
                                                <td colSpan="2" className="borde" style={{textAlign: "right"}}>
                                                    <b><NumberFormat
                                                        numb={devis.totalht}/></b>
                                                </td>
                                            </tr>
                                            <tr className="printer" style={{textAlign: "left"}}>
                                                <tH colSpan="5" className="borde">2. MODALITÉS DE RÈGLEMENT</tH>
                                            </tr>
                                            <tr>
                                                <td colSpan="3" className="borde kop"
                                                    style={{textAlign: "left", paddingLeft: " 20px"}}>AVANCEMENT DES
                                                    TRAVAUX
                                                </td>
                                                <td className="borde" style={{textAlign: "right"}}><NumberFormat
                                                    numb={decompte.avancement}/>%
                                                </td>
                                                <td className="borde" style={{textAlign: "right"}}><NumberFormat
                                                    numb={decompte.valeur}/></td>
                                            </tr>
                                            <tr>
                                                <td className="borde kop" colSpan="5"
                                                    style={{textAlign: "left", paddingLeft: " 20px"}}>À DÉDUIRE
                                                </td>
                                            </tr>
                                            <tr>
                                                <td className="borde" colSpan="3" style={{textAlign: "right"}}>
                                                    DÉDUCTION ACOMPTE DE DEMARRAGE
                                                </td>
                                                <td style={{textAlign: "right"}} className="borde"><NumberFormat
                                                    numb={decompte.acompte}/>%
                                                </td>
                                                <td style={{textAlign: "right"}} className="borde">
                                                    <NumberFormat numb={acompte}/></td>
                                            </tr>
                                            <tr>
                                                <td colSpan="3" style={{textAlign: "right"}} className="borde">DÉDUCTION
                                                    RETENUE GARANTIE
                                                </td>
                                                <td style={{textAlign: "right"}} className="borde"><NumberFormat
                                                    numb={decompte.garantie}/>%
                                                </td>
                                                <td style={{textAlign: "right"}} className="borde"><NumberFormat
                                                    numb={((decompte.valeur * decompte.garantie) / 100)}/></td>
                                            </tr>
                                            <tr>
                                                <td colSpan="3" style={{textAlign: "right"}} className="borde">DÉDUCTION
                                                    RETENUE DE FINITION
                                                </td>
                                                <td style={{textAlign: "right"}} className="borde"><NumberFormat
                                                    numb={decompte.finition}/>%
                                                </td>
                                                <td style={{textAlign: "right"}} className="borde"><NumberFormat
                                                    numb={((decompte.valeur * decompte.finition) / 100)}/></td>
                                            </tr>
                                            <tr>
                                                <td colSpan="3" style={{textAlign: "right"}} className="borde">DÉDUCTION
                                                    COMPTE PRORATA
                                                </td>
                                                <td style={{textAlign: "right"}} className="borde"><NumberFormat
                                                    numb={decompte.prorata}/>%
                                                </td>
                                                <td style={{textAlign: "right"}} className="borde"><NumberFormat
                                                    numb={((decompte.valeur * decompte.prorata) / 100)}/></td>
                                            </tr>
                                            <tr>
                                                <td colSpan="3" style={{textAlign: "right"}} className="borde">DÉDUCTION
                                                    ASSURANCE TRC
                                                </td>
                                                <td style={{textAlign: "right"}} className="borde"><NumberFormat
                                                    numb={decompte.trc}/>%
                                                </td>
                                                <td style={{textAlign: "right"}} className="borde"><NumberFormat
                                                    numb={((decompte.valeur * decompte.trc) / 100)}/></td>
                                            </tr>
                                            <tr>
                                                <td colSpan="3" style={{textAlign: "right"}} className="borde">DÉDUCTION
                                                    DES DÉCOMPTES
                                                </td>
                                                <td style={{textAlign: "right"}} className="borde"></td>
                                                <td style={{textAlign: "right"}} className="borde"><NumberFormat
                                                    numb={decompte.countdecompe}/></td>
                                            </tr>
                                            <tr>
                                                <td colSpan="5" style={{textAlign: "left", paddingLeft: " 20px"}}
                                                    className="borde kop">SOIT
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colSpan="3" style={{textAlign: "right"}} className="borde">MONTANT
                                                    DE LA
                                                    SITUATION À DÉLIVRER HT
                                                </td>
                                                <td style={{textAlign: "right"}} className="borde"></td>
                                                <td style={{textAlign: "right"}} className="borde"><NumberFormat
                                                    numb={decompte.apayer}/></td>
                                            </tr>
                                            <tr>
                                                <td colSpan="3" style={{textAlign: "right"}}
                                                    className="borde">TVA {devis.tva}%
                                                </td>
                                                <td style={{textAlign: "right"}} className="borde"></td>
                                                <td style={{textAlign: "right"}} className="borde"><NumberFormat
                                                    numb={((decompte.apayer * devis.tva) / 100)}/></td>
                                            </tr>
                                            <tr>
                                                <td colSpan="3" style={{textAlign: "right", color: "#4e73df"}}
                                                    className="borde kop">MONTANT DE LA SITUATION À DÉLIVRER TTC
                                                </td>
                                                <td style={{textAlign: "right"}} className="borde"></td>
                                                <td style={{textAlign: "right", color: "#4e73df"}} className="borde">
                                                    <b><NumberFormat numb={decompte.ttc}/></b>
                                                </td>
                                            </tr>
                                        </table>
                                        <p style={{clear: "both"}}></p>
                                        <br/>
                                        <p style={{textAlign: "left"}}>
                                            Arrêté la présente facture à la somme de:<br/>
                                            <span><b>{numberToLetters(parseInt((decompte.ttc)), {lang: 'fr'})} {mocode}</b></span>
                                        </p><br/>
                                        <p style={{float: "right", textDecoration: "underline"}}>SIGNATURE AUTORISÉE</p>
                                        <br/><br/><br/>
                                        {facture.information !== null &&
                                            <>
                                            <p style={{float: "left", color: "#4e73df"}}><u>CONDITIONS ET MODALITÉS
                                                    DE
                                                    PAIEMENT</u></p>
                                                <p style={{clear: "both"}}></p>
                                                <p style={{color: "#000000"}}>{facture.information}</p>
                                            </>}
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td>
                                        <div className="footer-space">&nbsp;</div>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        }
                        {facture.type === "retenue" &&
                            <table style={{width: "100%"}}>
                                <thead>
                                <tr>
                                    <td>
                                        <div className="header-space">&nbsp;</div>
                                    </td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <table align="right">
                                            <tr>
                                                <td style={{border: "none", textAlign: "center"}}>
                                                    <b>{client.nomclient}</b><br/>
                                                    {client.contribuable}<br/>
                                                    {client.adresse}<br/>
                                                    {client.mail}<br/>
                                                </td>
                                            </tr>
                                        </table>
                                        <p style={{clear: "both"}}/>
                                        <p style={{clear: "both"}}/>
                                        <table>
                                            <tr>
                                                <td align="left"><b><u>DATE:</u></b> {facdate}</td>
                                            </tr>
                                            <tr>
                                                <td align="left">
                                                    <b><u>RÉFÉRENCE:</u></b> FACTURE D'ACOMPTE SELON DEVIS
                                                    Nº {devis.iddevis}<br/>
                                                    <span dangerouslySetInnerHTML={{__html: facture.factreference}}/>
                                                </td>
                                            </tr>
                                        </table>
                                        <br/>
                                        <table style={{width: "100%"}}>
                                            <tr class="printer">
                                                {devis.aaref === 'oui' &&
                                                    <th className="borde text-center"> RÉF </th>}
                                                <th style={{
                                                    maxWidth: "500px",
                                                    minWidth: "250px",
                                                    textAlign: "left"
                                                }}>DÉSIGNATION
                                                </th>
                                                {devis.zone === 'oui' &&
                                                    <th style={{textAlign: "center"}}>SECTION</th>
                                                }
                                                <th style={{textAlign: "center"}}>UNITÉ</th>
                                                <th style={{textAlign: "center"}}>QTÉ</th>
                                                <th style={{textAlign: "center"}} className="mw100">PRIX&nbsp;U.</th>
                                                <th style={{textAlign: "center"}} className="mw100">MONTANT&nbsp;HT</th>
                                            </tr>

                                            {renderGroupe}
                                            {renderLigne}

                                            <tr>
                                                {devis.aaref === 'oui' &&
                                                    <td className="bord"/>
                                                }
                                                <td className="bord"/>
                                                {devis.zone === 'oui' &&
                                                    <>
                                                        {devis.aarem === 'oui' &&
                                                            <td colSpan="5" className="bord text-right"><b> TOTAL
                                                                HT </b></td>
                                                        }
                                                        {devis.aarem !== 'oui' &&
                                                            <td className="bord text-right" colSpan="4"><b> TOTAL
                                                                HT </b></td>
                                                        }
                                                        {devis.aarem === 'tht' &&
                                                            <td className="barder text-right nowrape">< NumberFormat
                                                                numb={tht}/></td>
                                                        }
                                                        {devis.aarem !== 'tht' &&
                                                            <td className="barder text-right nowrape">< NumberFormat
                                                                numb={devis.totalht}/>
                                                            </td>
                                                        }
                                                    </>
                                                }
                                                {devis.zone !== 'oui' &&
                                                    <>
                                                        {devis.aarem === 'oui' &&
                                                            <td colSpan="4" className="bord text-right"><b> TOTAL
                                                                HT </b></td>
                                                        }
                                                        {devis.aarem !== 'oui' &&
                                                            <td className="bord text-right" colSpan="3"><b> TOTAL
                                                                HT </b></td>
                                                        }
                                                        {devis.aarem === 'tht' &&
                                                            <td className="barder text-right nowrape">< NumberFormat
                                                                numb={tht}/></td>
                                                        }
                                                        {devis.aarem !== 'tht' &&
                                                            <td className="barder text-right nowrape">< NumberFormat
                                                                numb={devis.totalht}/>
                                                            </td>
                                                        }
                                                    </>
                                                }

                                            </tr>

                                            <tr>
                                                {devis.aaref === 'oui' &&
                                                    <td className="bord"/>
                                                }
                                                <td className="bord"/>

                                                {devis.zone === 'oui' &&
                                                    <>
                                                        {devis.aarem === 'oui' &&
                                                            <td colSpan="5" className="bord text-right"><b> ACOMPTE
                                                                (<NumberFormat
                                                                    numb={facture.acompte.pourcentage}/>%) HT </b></td>
                                                        }
                                                        {devis.aarem !== 'oui' &&
                                                            <td className="bord text-right" colSpan="4"><b> ACOMPTE
                                                                (<NumberFormat
                                                                    numb={facture.acompte.pourcentage}/>%) HT </b></td>
                                                        }
                                                        {devis.aarem === 'tht' &&
                                                            <td className="barder text-right nowrape"></td>
                                                        }
                                                        {devis.aarem !== 'tht' &&
                                                            <td className="barder text-right nowrape">< NumberFormat
                                                                numb={facture.totalht}/>
                                                            </td>
                                                        }
                                                    </>
                                                }

                                                {devis.zone !== 'oui' &&
                                                    <>
                                                        {devis.aarem === 'oui' &&
                                                            <td colSpan="4" className="bord text-right"><b> ACOMPTE
                                                                (<NumberFormat
                                                                    numb={facture.acompte.pourcentage}/>%) HT </b></td>
                                                        }
                                                        {devis.aarem !== 'oui' &&
                                                            <td className="bord text-right" colSpan="3"><b> ACOMPTE
                                                                (<NumberFormat
                                                                    numb={facture.acompte.pourcentage}/>%) HT </b></td>
                                                        }
                                                        {devis.aarem === 'tht' &&
                                                            <td className="barder text-right nowrape"></td>
                                                        }
                                                        {devis.aarem !== 'tht' &&
                                                            <td className="barder text-right nowrape">< NumberFormat
                                                                numb={facture.totalht}/>
                                                            </td>
                                                        }
                                                    </>
                                                }

                                            </tr>

                                            {devis.abasetva === 'oui' &&
                                                <tr>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord"/>
                                                    }

                                                    <td className="bord"/>

                                                    {devis.zone === 'oui' &&
                                                        <>
                                                            {devis.aarem === 'oui' &&
                                                                <td colSpan="5" className="bord text-right"><b> BASE
                                                                    TVA</b></td>
                                                            }
                                                            {devis.aarem !== 'oui' &&
                                                                <td className="bord text-right" colSpan="4"><b> BASE
                                                                    TVA</b></td>
                                                            }
                                                            {devis.aarem === 'tht' &&
                                                                <td className="barder text-right nowrape"></td>
                                                            }
                                                            {devis.aarem !== 'tht' &&
                                                                <td className="barder text-right nowrape"><NumberFormat
                                                                    numb={devis.basetva * ((facture.totalttc - facture.totalht) / devis.vtva)}/>
                                                                </td>
                                                            }
                                                        </>
                                                    }

                                                    {devis.zone !== 'oui' &&
                                                        <>
                                                            {devis.aarem === 'oui' &&
                                                                <td colSpan="4" className="bord text-right"><b> BASE
                                                                    TVA</b></td>
                                                            }
                                                            {devis.aarem !== 'oui' &&
                                                                <td className="bord text-right" colSpan="3"><b> BASE
                                                                    TVA</b></td>
                                                            }
                                                            {devis.aarem === 'tht' &&
                                                                <td className="barder text-right nowrape"></td>
                                                            }
                                                            {devis.aarem !== 'tht' &&
                                                                <td className="barder text-right nowrape"><NumberFormat
                                                                    numb={devis.basetva * ((facture.totalttc - facture.totalht) / devis.vtva)}/>
                                                                </td>
                                                            }
                                                        </>
                                                    }

                                                </tr>
                                            }

                                            {devis.abasetva !== 'oui' &&
                                                <tr>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord"/>
                                                    }
                                                    <td className="bord"/>

                                                    {devis.zone === 'oui' &&
                                                        <>
                                                            {devis.aarem === 'oui' &&
                                                                <td colSpan="5" className="bord text-right">
                                                                    <b>TVA {devis.tva}% {stva}</b></td>
                                                            }
                                                            {devis.aarem !== 'oui' &&
                                                                <td className="bord text-right" colSpan="4">
                                                                    <b>TVA {devis.tva}% {stva}</b></td>
                                                            }
                                                            {devis.aarem === 'tht' &&
                                                                <td className="barder text-right nowrape"></td>
                                                            }
                                                            {devis.aarem !== 'tht' &&
                                                                <td className="barder text-right nowrape"><NumberFormat
                                                                    numb={facture.vtva}/>
                                                                </td>
                                                            }
                                                        </>
                                                    }

                                                    {devis.zone !== 'oui' &&
                                                        <>
                                                            {devis.aarem === 'oui' &&
                                                                <td colSpan="4" className="bord text-right">
                                                                    <b>TVA {devis.tva}% {stva}</b></td>
                                                            }
                                                            {devis.aarem !== 'oui' &&
                                                                <td className="bord text-right" colSpan="3">
                                                                    <b>TVA {devis.tva}% {stva}</b></td>
                                                            }
                                                            {devis.aarem === 'tht' &&
                                                                <td className="barder text-right nowrape"></td>
                                                            }
                                                            {devis.aarem !== 'tht' &&
                                                                <td className="barder text-right nowrape"><NumberFormat
                                                                    numb={facture.vtva}/>
                                                                </td>
                                                            }
                                                        </>
                                                    }
                                                </tr>
                                            }

                                            <tr>
                                                {devis.aaref === 'oui' &&
                                                    <td className="bord"/>
                                                }
                                                <td className="bord"/>

                                                {devis.zone === 'oui' &&
                                                    <>
                                                        {devis.aarem === 'oui' &&
                                                            <td colSpan="5" className="text-right" style={{
                                                                textAlign: "right",
                                                                color: "#4e73df",
                                                                fontSize: "12px",
                                                                borderBottom: "1px solid #D3D3D3"
                                                            }}><b>NET À PAYER</b></td>
                                                        }
                                                        {devis.aarem !== 'oui' &&
                                                            <td className="text-right" colSpan="4" style={{
                                                                textAlign: "right",
                                                                color: "#4e73df",
                                                                fontSize: "12px",
                                                                borderBottom: "1px solid #D3D3D3"
                                                            }}><b>NET À PAYER</b></td>
                                                        }
                                                        {devis.aarem === 'tht' &&
                                                            <td className="barder text-right nowrape"></td>
                                                        }
                                                        {devis.aarem !== 'tht' &&
                                                            <td className="bordeu text-right nowrape" style={{
                                                                fontSize: "12px",
                                                                textAlign: "right",
                                                                color: "#4e73df"
                                                            }}><NumberFormat
                                                                numb={facture.totalttc}/>
                                                            </td>
                                                        }
                                                    </>
                                                }

                                                {devis.zone !== 'oui' &&
                                                    <>
                                                        {devis.aarem === 'oui' &&
                                                            <td colSpan="4" className="text-right" style={{
                                                                textAlign: "right",
                                                                color: "#4e73df",
                                                                fontSize: "12px",
                                                                borderBottom: "1px solid #D3D3D3"
                                                            }}><b>NET À PAYER</b></td>
                                                        }
                                                        {devis.aarem !== 'oui' &&
                                                            <td className="text-right" colSpan="3" style={{
                                                                textAlign: "right",
                                                                color: "#4e73df",
                                                                fontSize: "12px",
                                                                borderBottom: "1px solid #D3D3D3"
                                                            }}><b>NET À PAYER</b></td>
                                                        }
                                                        {devis.aarem === 'tht' &&
                                                            <td className="barder text-right nowrape"></td>
                                                        }
                                                        {devis.aarem !== 'tht' &&
                                                            <td className="bordeu text-right nowrape" style={{
                                                                fontSize: "12px",
                                                                textAlign: "right",
                                                                color: "#4e73df"
                                                            }}><NumberFormat
                                                                numb={facture.totalttc}/>
                                                            </td>
                                                        }
                                                    </>
                                                }
                                            </tr>

                                        </table>
                                        <p style={{clear: "both"}}></p>
                                        <br/>
                                        <p className="text-left">
                                            Arrêté la présente facture à la somme de:<br/>
                                            <b>{numberToLetters(parseInt(facture.totalttc), {lang: 'fr'})}
                                            </b><span><b> {devis.monnaie.code}</b></span>
                                        </p>
                                        <br/>
                                        <p style={{float: "right", textDecoration: "underline"}}>SIGNATURE AUTORISÉE</p>
                                        <br/><br/><br/>
                                        {facture.information !== null &&
                                            <>
                                                <p style={{float: "left", color: "#4e73df"}}><u>CONDITIONS ET MODALITÉS
                                                    DE
                                                    PAIEMENT</u></p>
                                                <p style={{clear: "both"}}></p>
                                                <p style={{color: "#000000"}}
                                                   dangerouslySetInnerHTML={{__html: facture.information}}></p>
                                            </>
                                        }
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td>
                                        <div className="footer-space">&nbsp;</div>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        }
                        {facture.type === "acompte" &&
                            <table style={{width: "100%"}}>
                                <thead>
                                <tr>
                                    <td>
                                        <div className="header-space">&nbsp;</div>
                                    </td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <table align="right">
                                            <tr>
                                                <td style={{border: "none", textAlign: "center"}}>
                                                    <b>{client.nomclient}</b><br/>
                                                    {client.contribuable}<br/>
                                                    {client.adresse}<br/>
                                                    {client.mail}<br/>
                                                </td>
                                            </tr>
                                        </table>
                                        <p style={{clear: "both"}}/>
                                        <p style={{clear: "both"}}/>
                                        <table>
                                            <tr>
                                                <td align="left"><b><u>DATE:</u></b> {facdate}</td>
                                            </tr>
                                            <tr>
                                                <td align="left">
                                                    <b><u>RÉFÉRENCE:</u></b> FACTURE D'ACOMPTE SELON DEVIS
                                                    Nº {devis.iddevis}<br/>
                                                    <span dangerouslySetInnerHTML={{__html: facture.factreference}}/>
                                                </td>
                                            </tr>
                                        </table>
                                        <br/>
                                        <table style={{width: "100%"}}>
                                            <tr class="printer">
                                                {devis.aaref === 'oui' &&
                                                    <th className="borde text-center"> RÉF </th>}
                                                <th style={{
                                                    maxWidth: "500px",
                                                    minWidth: "250px",
                                                    textAlign: "left"
                                                }}>DÉSIGNATION
                                                </th>
                                                {devis.zone === 'oui' &&
                                                    <th style={{textAlign: "center"}}>SECTION</th>
                                                }
                                                <th style={{textAlign: "center"}}>UNITÉ</th>
                                                <th style={{textAlign: "center"}}>QTÉ</th>
                                                <th style={{textAlign: "center"}} className="mw100">PRIX&nbsp;U.</th>
                                                {devis.aarem === 'oui' &&
                                                    <th style={{textAlign: "center"}}>%REM</th>
                                                }
                                                <th style={{textAlign: "center"}} className="mw100">MONTANT&nbsp;HT</th>
                                            </tr>

                                            {renderGroupe}
                                            {renderLigne}

                                            {devis.aarem === 'oui' &&
                                                <tr>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord"/>
                                                    }

                                                    <td className="bord"/>

                                                    {devis.zone === 'oui' &&
                                                        <>
                                                            <td className="bord text-right" colSpan="5"><b> REMISE
                                                                TOTALE </b></td>
                                                            <td className="barder text-right nowrape">< NumberFormat
                                                                numb={devis.vremise}/></td>
                                                        </>
                                                    }
                                                    {devis.zone === 'non' &&
                                                        <>
                                                            <td className="bord text-right" colSpan="4"><b> REMISE
                                                                TOTALE </b></td>
                                                            <td className="barder text-right nowrape">< NumberFormat
                                                                numb={devis.vremise}/></td>
                                                        </>
                                                    }
                                                </tr>
                                            }
                                            {devis.aarem === 'tht' &&
                                                <tr>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord"/>
                                                    }

                                                    <td className="bord"/>

                                                    {devis.zone === 'oui' &&
                                                        <>
                                                            <td className="bord text-right" colSpan="5"><b> REMISE
                                                                (< NumberFormat numb={devis.remtht}/>%) </b></td>
                                                            <td className="barder text-right nowrape">< NumberFormat
                                                                numb={devis.vremise}/></td>
                                                        </>
                                                    }
                                                    {devis.zone === 'non' &&
                                                        <>
                                                            <td className="bord text-right" colSpan="4"><b> REMISE
                                                                (< NumberFormat numb={devis.remtht}/>%) </b></td>
                                                            <td className="barder text-right nowrape">< NumberFormat
                                                                numb={devis.vremise}/></td>
                                                        </>
                                                    }
                                                </tr>
                                            }
                                            <tr>
                                                {devis.aaref === 'oui' &&
                                                    <td className="bord"/>
                                                }
                                                <td className="bord"/>
                                                {devis.zone === 'oui' &&
                                                    <>
                                                        {devis.aarem === 'oui' &&
                                                            <td colSpan="5" className="bord text-right"><b> TOTAL
                                                                HT </b></td>
                                                        }
                                                        {devis.aarem !== 'oui' &&
                                                            <td className="bord text-right" colSpan="4"><b> TOTAL
                                                                HT </b></td>
                                                        }
                                                        <td className="barder text-right nowrape">< NumberFormat
                                                            numb={devis.totalht}/></td>
                                                    </>
                                                }

                                                {devis.zone !== 'oui' &&
                                                    <>
                                                        {devis.aarem === 'oui' &&
                                                            <td colSpan="4" className="bord text-right"><b> TOTAL
                                                                HT </b></td>
                                                        }
                                                        {devis.aarem !== 'oui' &&
                                                            <td className="bord text-right" colSpan="3"><b> TOTAL
                                                                HT </b></td>
                                                        }
                                                        {devis.aarem === 'tht' &&
                                                            <td className="barder text-right nowrape">< NumberFormat
                                                                numb={devis.remtht}/></td>
                                                        }
                                                        {devis.aarem !== 'tht' &&
                                                            <td className="barder text-right nowrape">< NumberFormat
                                                                numb={devis.totalht}/>
                                                            </td>
                                                        }
                                                    </>
                                                }

                                            </tr>

                                            <tr>
                                                {devis.aaref === 'oui' &&
                                                    <td className="bord"/>
                                                }
                                                <td className="bord"/>

                                                {devis.zone === 'oui' &&
                                                    <>
                                                        {devis.aarem === 'oui' &&
                                                            <td colSpan="5" className="bord text-right"><b> ACOMPTE
                                                                (<NumberFormat
                                                                    numb={facture.acompte.pourcentage}/>%) HT </b></td>
                                                        }
                                                        {devis.aarem !== 'oui' &&
                                                            <td className="bord text-right" colSpan="4"><b> ACOMPTE
                                                                (<NumberFormat
                                                                    numb={facture.acompte.pourcentage}/>%) HT </b></td>
                                                        }
                                                        {devis.aarem === 'tht' &&
                                                            <td className="barder text-right nowrape"></td>
                                                        }
                                                        {devis.aarem !== 'tht' &&
                                                            <td className="barder text-right nowrape">< NumberFormat
                                                                numb={facture.totalht}/>
                                                            </td>
                                                        }
                                                    </>
                                                }

                                                {devis.zone !== 'oui' &&
                                                    <>
                                                        {devis.aarem === 'oui' &&
                                                            <td colSpan="4" className="bord text-right"><b> ACOMPTE
                                                                (<NumberFormat
                                                                    numb={facture.acompte.pourcentage}/>%) HT </b></td>
                                                        }
                                                        {devis.aarem !== 'oui' &&
                                                            <td className="bord text-right" colSpan="3"><b> ACOMPTE
                                                                (<NumberFormat
                                                                    numb={facture.acompte.pourcentage}/>%) HT </b></td>
                                                        }
                                                        {devis.aarem === 'tht' &&
                                                            <td className="barder text-right nowrape"></td>
                                                        }
                                                        {devis.aarem !== 'tht' &&
                                                            <td className="barder text-right nowrape">< NumberFormat
                                                                numb={facture.totalht}/>
                                                            </td>
                                                        }
                                                    </>
                                                }

                                            </tr>

                                            {devis.abasetva === 'oui' &&
                                                <tr>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord"/>
                                                    }

                                                    <td className="bord"/>

                                                    {devis.zone === 'oui' &&
                                                        <>
                                                            {devis.aarem === 'oui' &&
                                                                <td colSpan="5" className="bord text-right"><b> BASE
                                                                    TVA</b></td>
                                                            }
                                                            {devis.aarem !== 'oui' &&
                                                                <td className="bord text-right" colSpan="4"><b> BASE
                                                                    TVA</b></td>
                                                            }
                                                            {devis.aarem === 'tht' &&
                                                                <td className="barder text-right nowrape"></td>
                                                            }
                                                            {devis.aarem !== 'tht' &&
                                                                <td className="barder text-right nowrape"><NumberFormat
                                                                    numb={devis.basetva * ((facture.totalttc - facture.totalht) / devis.vtva)}/>
                                                                </td>
                                                            }
                                                        </>
                                                    }

                                                    {devis.zone !== 'oui' &&
                                                        <>
                                                            {devis.aarem === 'oui' &&
                                                                <td colSpan="4" className="bord text-right"><b> BASE
                                                                    TVA</b></td>
                                                            }
                                                            {devis.aarem !== 'oui' &&
                                                                <td className="bord text-right" colSpan="3"><b> BASE
                                                                    TVA</b></td>
                                                            }
                                                            {devis.aarem === 'tht' &&
                                                                <td className="barder text-right nowrape"></td>
                                                            }
                                                            {devis.aarem !== 'tht' &&
                                                                <td className="barder text-right nowrape"><NumberFormat
                                                                    numb={devis.basetva * ((facture.totalttc - facture.totalht) / devis.vtva)}/>
                                                                </td>
                                                            }
                                                        </>
                                                    }

                                                </tr>
                                            }

                                            {devis.abasetva !== 'oui' &&
                                                <tr>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord"/>
                                                    }
                                                    <td className="bord"/>

                                                    {devis.zone === 'oui' &&
                                                        <>
                                                            {devis.aarem === 'oui' &&
                                                                <td colSpan="5" className="bord text-right">
                                                                    <b>TVA {devis.tva}% {stva}</b></td>
                                                            }
                                                            {devis.aarem !== 'oui' &&
                                                                <td className="bord text-right" colSpan="4">
                                                                    <b>TVA {devis.tva}% {stva}</b></td>
                                                            }
                                                            {devis.aarem === 'tht' &&
                                                                <td className="barder text-right nowrape"></td>
                                                            }
                                                            {devis.aarem !== 'tht' &&
                                                                <td className="barder text-right nowrape"><NumberFormat
                                                                    numb={facture.vtva}/>
                                                                </td>
                                                            }
                                                        </>
                                                    }

                                                    {devis.zone !== 'oui' &&
                                                        <>
                                                            {devis.aarem === 'oui' &&
                                                                <td colSpan="4" className="bord text-right">
                                                                    <b>TVA {devis.tva}% {stva}</b></td>
                                                            }
                                                            {devis.aarem !== 'oui' &&
                                                                <td className="bord text-right" colSpan="3">
                                                                    <b>TVA {devis.tva}% {stva}</b></td>
                                                            }
                                                            {devis.aarem === 'tht' &&
                                                                <td className="barder text-right nowrape"></td>
                                                            }
                                                            {devis.aarem !== 'tht' &&
                                                                <td className="barder text-right nowrape"><NumberFormat
                                                                    numb={facture.vtva}/>
                                                                </td>
                                                            }
                                                        </>
                                                    }
                                                </tr>
                                            }

                                            <tr>
                                                {devis.aaref === 'oui' &&
                                                    <td className="bord"/>
                                                }
                                                <td className="bord"/>

                                                {devis.zone === 'oui' &&
                                                    <>
                                                        {devis.aarem === 'oui' &&
                                                            <td colSpan="5" className="text-right" style={{
                                                                textAlign: "right",
                                                                color: "#4e73df",
                                                                borderBottom: "1px solid #D3D3D3"
                                                            }}><b>NET À PAYER</b></td>
                                                        }
                                                        {devis.aarem !== 'oui' &&
                                                            <td className="text-right" colSpan="4" style={{
                                                                textAlign: "right",
                                                                color: "#4e73df",
                                                                borderBottom: "1px solid #D3D3D3"
                                                            }}><b>NET À PAYER</b></td>
                                                        }
                                                        {devis.aarem === 'tht' &&
                                                            <td className="barder text-right nowrape"></td>
                                                        }
                                                        {devis.aarem !== 'tht' &&
                                                            <td className="bordeu text-right nowrape" style={{
                                                                textAlign: "right",
                                                                color: "#4e73df"
                                                            }}><NumberFormat
                                                                numb={facture.totalttc}/>
                                                            </td>
                                                        }
                                                    </>
                                                }

                                                {devis.zone !== 'oui' &&
                                                    <>
                                                        {devis.aarem === 'oui' &&
                                                            <td colSpan="4" className="text-right" style={{
                                                                textAlign: "right",
                                                                color: "#4e73df",
                                                                fontSize: "12px",
                                                                borderBottom: "1px solid #D3D3D3"
                                                            }}><b>NET À PAYER</b></td>
                                                        }
                                                        {devis.aarem !== 'oui' &&
                                                            <td className="text-right" colSpan="3" style={{
                                                                textAlign: "right",
                                                                color: "#4e73df",
                                                                fontSize: "12px",
                                                                borderBottom: "1px solid #D3D3D3"
                                                            }}><b>NET À PAYER</b></td>
                                                        }
                                                        {devis.aarem === 'tht' &&
                                                            <td className="barder text-right nowrape"></td>
                                                        }
                                                        {devis.aarem !== 'tht' &&
                                                            <td className="bordeu text-right nowrape" style={{
                                                                fontSize: "12px",
                                                                textAlign: "right",
                                                                color: "#4e73df"
                                                            }}><NumberFormat
                                                                numb={facture.totalttc}/>
                                                            </td>
                                                        }
                                                    </>
                                                }
                                            </tr>
                                        </table>
                                        <p style={{clear: "both"}}></p>
                                        <br/>
                                        <p className="text-left">
                                            Arrêté la présente facture à la somme de:<br/>
                                            <b>{numberToLetters(parseInt(facture.totalttc), {lang: 'fr'})}
                                            </b><span><b> {devis.monnaie.code}</b></span>
                                        </p>
                                        <br/>
                                        <p style={{float: "right", textDecoration: "underline"}}>SIGNATURE AUTORISÉE</p>
                                        <br/><br/><br/>
                                        {facture.information !== null &&
                                            <>
                                                <p style={{float: "left", color: "#4e73df"}}><u>CONDITIONS ET MODALITÉS
                                                    DE
                                                    PAIEMENT</u></p>
                                                <p style={{clear: "both"}}></p>
                                                <p style={{color: "#000000"}}
                                                   dangerouslySetInnerHTML={{__html: facture.information}}></p>
                                            </>
                                        }
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td>
                                        <div className="footer-space">&nbsp;</div>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        }
                        {facture.type === "devis" &&
                            <table style={{width: "100%"}}>
                                <thead>
                                <tr>
                                    <td>
                                        <div className="header-space">&nbsp;</div>
                                    </td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <table align="right">
                                            <tr>
                                                <td style={{border: "none", textAlign: "center"}}>

                                                    <b>{client.nomclient}</b><br/>
                                                    {client.contribuable !== null && <>{client.contribuable} <br/></>}
                                                    {client.adresse !== null && <> {client.adresse} <br/></>}
                                                    {client.mail !== null && <>{client.mail} <br/> </>}

                                                </td>
                                            </tr>
                                        </table>
                                        <p style={{clear: "both"}}/>
                                        <table>
                                            <tr>
                                                <td align="left"><b><u>DATE:</u></b> {facdate}</td>
                                            </tr>
                                            <tr>
                                                <td align="left">
                                                    <b><u>RÉFÉRENCE:</u></b><br/>
                                                    FACTURE DE SOLDE<br/>
                                                    <span dangerouslySetInnerHTML={{__html: facture.factreference}}/>
                                                </td>
                                            </tr>
                                        </table>
                                        <br/>
                                        <table style={{width: "100%"}}>
                                            <tr className="printer">
                                                {devis.aaref === 'oui' &&
                                                    <th style={{textAlign: "center"}}>RÉF</th>
                                                }
                                                <th style={{maxWidth: "500px", minWidth: "250px", textAlign: "left"}}>
                                                    DÉSIGNATION
                                                </th>
                                                {devis.zone === 'oui' &&
                                                    <th style={{textAlign: "center"}}>SECTION</th>
                                                }
                                                <th style={{textAlign: "center"}}>UNITÉ</th>
                                                <th style={{textAlign: "center"}}>QTÉ</th>
                                                <th style={{textAlign: "center"}} className="mw100">PRIX&nbsp;U.</th>
                                                {devis.aarem === 'oui' &&
                                                    <th style={{textAlign: "center"}}>REM %</th>
                                                }
                                                <th style={{textAlign: "center"}} className="mw100"> MONTANT&nbsp;HT
                                                </th>
                                            </tr>
                                            {renderGroupe}
                                            {renderLigne}
                                            <tr>
                                                {devis.aaref === 'oui' && <td></td>}
                                                <td></td>
                                                {devis.zone === 'oui' &&
                                                    <td></td>
                                                }
                                                {devis.aarem === 'oui' &&
                                                    <td colSpan="4" style={{textAlign: "right"}}><b>DÉDUCTION DES
                                                        ACOMPTES</b></td>
                                                }
                                                {devis.aarem !== 'oui' &&
                                                    <td colSpan="3" style={{textAlign: "right"}}><b>DÉDUCTION DES
                                                        ACOMPTES</b></td>
                                                }
                                                <td align="right" className="barder"><NumberFormat
                                                    numb={totalacomptes}/></td>
                                            </tr>

                                            <tr>
                                                {devis.aaref === 'oui' && <td></td>}
                                                <td></td>
                                                {devis.zone === 'oui' &&
                                                    <td></td>
                                                }
                                                {devis.aarem === 'oui' &&
                                                    <td colSpan="4" style={{textAlign: "right"}}><b>DÉDUCTION DES
                                                        DÉCOMPTES</b></td>
                                                }
                                                {devis.aarem !== 'oui' &&
                                                    <td colSpan="3" style={{textAlign: "right"}}><b>DÉDUCTION DES
                                                        DÉCOMPTES</b></td>
                                                }
                                                <td align="right" className="barder"><NumberFormat
                                                    numb={totaldecomptes}/></td>
                                            </tr>

                                            <tr>
                                                {devis.aaref === 'oui' && <td></td>}
                                                {devis.zone === 'oui' &&
                                                    <>
                                                        {devis.aarem === 'oui' &&
                                                            <td colSpan="6" style={{textAlign: "right"}}><b>ADDITION DES
                                                                RETENUES(FINITION-GARANTIE-PRORATA-TRC) - {addi}%</b></td>
                                                        }
                                                        {devis.aarem !== 'oui' &&
                                                            <td colSpan="5" style={{textAlign: "right"}}><b>ADDITION DES
                                                                RETENUES(FINITION-GARANTIE-PRORATA-TRC)- {addi}%</b></td>
                                                        }
                                                    </>
                                                }
                                                {devis.zone !== 'oui' &&
                                                    <>
                                                        {devis.aarem === 'oui' &&
                                                            <td colSpan="5" style={{textAlign: "right"}}><b>ADDITION DES
                                                                RETENUES(FINITION-GARANTIE-PRORATA-TRC)- {addi}%</b></td>
                                                        }
                                                        {devis.aarem !== 'oui' &&
                                                            <td colSpan="4" style={{textAlign: "right"}}><b>ADDITION DES
                                                                RETENUES(FINITION-GARANTIE-PRORATA-TRC)- {addi}%</b></td>
                                                        }
                                                    </>
                                                }
                                                <td align="right" className="barder"><NumberFormat numb={totalretenue}/>
                                                </td>
                                            </tr>


                                            {devis.aarem === 'oui' &&
                                                <tr>
                                                    {devis.aaref === 'oui' &&
                                                        <td></td>
                                                    }
                                                    <td></td>
                                                    {devis.zone === 'oui' &&
                                                        <td></td>
                                                    }
                                                    <td></td>
                                                    {devis.aarem === 'oui' &&
                                                        <td colSpan="3" style={{textAlign: "right"}}><b>REMISE</b></td>
                                                    }
                                                    {devis.aarem !== 'oui' &&
                                                        <td colSpan="2" style={{textAlign: "right"}}><b>REMISE</b></td>
                                                    }
                                                    <td align="right" className="barder"><NumberFormat
                                                        numb={devis.vremise}/></td>
                                                </tr>
                                            }


                                            <tr>
                                                {devis.aaref === 'oui' && <td></td>}
                                                <td></td>
                                                {devis.zone === 'oui' &&
                                                    <td></td>
                                                }
                                                <td></td>
                                                {devis.aarem === 'oui' &&
                                                    <td colSpan="3" style={{textAlign: "right"}}><b>TOTAL HT</b></td>
                                                }
                                                {devis.aarem !== 'oui' &&
                                                    <td colSpan="2" style={{textAlign: "right"}}><b>TOTAL HT</b></td>
                                                }
                                                <td align="right" className="barder"><NumberFormat
                                                    numb={totalhtsolde}/></td>
                                            </tr>


                                            {devis.abasetva === 'oui' &&
                                                <tr>
                                                    {devis.aaref === 'oui' && <td></td>}
                                                    <td></td>
                                                    {devis.zone === 'oui' && <td></td>}
                                                    <td></td>
                                                    {devis.aarem === 'oui' &&
                                                        <td colSpan="3" style={{textAlign: "right"}}><b>BASE
                                                            TVA{devis.code !== null && devis.code}</b></td>
                                                    }
                                                    <td colSpan="2" style={{textAlign: "right"}}><b>BASE
                                                        TVA{devis.code !== null && devis.code}</b></td>
                                                    <td align="right" className="barder"><NumberFormat
                                                        numb={devis.basetva}/></td>
                                                </tr>
                                            }

                                            <tr>
                                                {devis.aaref === 'oui' &&
                                                    <td></td>
                                                }
                                                <td></td>
                                                {devis.zone === 'oui' &&
                                                    <td></td>
                                                }
                                                {devis.aarem === 'oui' &&
                                                    <td colSpan="4" style={{textAlign: "right"}}>
                                                        <b>TVA {devis.tva}%{stva}</b>
                                                    </td>
                                                }
                                                {devis.aarem !== 'oui' &&
                                                    <td colSpan="3" style={{textAlign: "right"}}>
                                                        <b>TVA {devis.tva}%{stva}</b>
                                                    </td>
                                                }
                                                <td align="right" className="barder"><NumberFormat numb={totaltva}/>
                                                </td>
                                            </tr>
                                            <tr>
                                                {devis.aaref === 'oui' &&
                                                    <td></td>
                                                }
                                                <td></td>
                                                {devis.zone === 'oui' &&
                                                    <td></td>
                                                }
                                                <td></td>
                                                {devis.aarem === 'oui' &&
                                                    <td align="right" colSpan="3" className="kop" style={{
                                                        color: "#4e73df",
                                                        fontSize: "12px",
                                                        borderBottom: "1px solid #D3D3D3"
                                                    }}>
                                                        NET À PAYER</td>
                                                }
                                                {devis.aarem !== 'oui' &&
                                                    <td align="right" colSpan="2" className="kop" style={{
                                                        color: "#4e73df",
                                                        fontSize: "12px",
                                                        borderBottom: "1px solid #D3D3D3"
                                                    }}>
                                                        NET À PAYER</td>
                                                }
                                                <td align="right" className="barder kop"
                                                    style={{fontSize: "12px", color: "#4e73df"}}>
                                                    <NumberFormat numb={totalttcsolde}/></td>
                                            </tr>
                                        </table>
                                        <p style={{clear: "both"}}/>
                                        <br/>
                                        <p className="text-left">
                                            Arrêté la présente facture à la somme de:<br/>
                                            <b> {numberToLetters(parseInt(totalttcsolde), {lang: 'fr'})}
                                                <span>{devis.monnaie.code}</span></b>
                                        </p>
                                        <br/>
                                        <p style={{float: "right", textDecoration: "underline"}}> SIGNATURE
                                            AUTORISÉE </p>
                                        <p style={{clear: "both"}}/><br/>
                                        {facture.information !== null &&
                                            <>
                                                <p className="kop" style={{
                                                    float: "left",
                                                    color: "#4e73df",
                                                    textDecoration: "underline"
                                                }}>CONDITIONS ET MODALITÉS DE PAIEMENT </p>
                                                <p style={{clear: "both"}}/>
                                                <p style={{color: "#000000"}}
                                                   dangerouslySetInnerHTML={{__html: facture.information}}/>
                                            </>
                                        }
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td>
                                        <div className="footer-space">&nbsp;</div>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        }
                        {facture.type === "simple" &&
                            <table style={{width: "100%"}}>
                                <thead>
                                <tr>
                                    <td>
                                        <div className="header-space">&nbsp;</div>
                                    </td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <table align="right">
                                            <tr>
                                                <td style={{border: "none", textAlign: "center"}}>

                                                    <b>{client.nomclient}</b><br/>
                                                    {client.contribuable !== null && <>{client.contribuable} <br/></>}
                                                    {client.adresse !== null && <> {client.adresse} <br/></>}
                                                    {client.mail !== null && <>{client.mail} <br/> </>}

                                                </td>
                                            </tr>
                                        </table>
                                        <p style={{clear: "both"}}/>
                                        <table>
                                            <tr>
                                                <td align="left"><b><u>DATE:</u></b> {facdate}</td>
                                            </tr>
                                            <tr>
                                                <td align="left">
                                                    <b><u>RÉFÉRENCE:</u></b><br/>
                                                    <span dangerouslySetInnerHTML={{__html: facture.factreference}}/>
                                                </td>
                                            </tr>
                                        </table>
                                        <br/>
                                        <table style={{width: "100%"}}>
                                            <tr className="printer">
                                                {devis.aaref === 'oui' &&
                                                    <th style={{textAlign: "center"}}>RÉF</th>
                                                }
                                                <th style={{maxWidth: "500px", minWidth: "250px", textAlign: "left"}}>
                                                    DÉSIGNATION
                                                </th>
                                                {devis.zone === 'oui' &&
                                                    <th style={{textAlign: "center"}}>SECTION</th>
                                                }
                                                <th style={{textAlign: "center"}}>UNITÉ</th>
                                                <th style={{textAlign: "center"}}>QTÉ</th>
                                                <th style={{textAlign: "center"}} className="mw100">PRIX&nbsp;U.</th>
                                                {devis.aarem === 'oui' &&
                                                    <th style={{textAlign: "center"}}>REMISE</th>
                                                }
                                                <th style={{textAlign: "center"}} className="mw100"> MONTANT&nbsp;HT
                                                </th>
                                            </tr>
                                            {renderGroupe}
                                            {renderLigne}

                                            <tr>
                                                {devis.aaref === 'oui' && <td></td>}
                                                <td></td>
                                                {devis.zone === 'oui' &&
                                                    <td></td>
                                                }
                                                <td></td>
                                                {devis.aarem === 'oui' &&
                                                    <td colSpan="3" style={{textAlign: "right"}}><b>TOTAL HT</b></td>
                                                }
                                                {devis.aarem !== 'oui' &&
                                                    <td colSpan="2" style={{textAlign: "right"}}><b>TOTAL HT</b></td>
                                                }
                                                <td align="right" className="barder"><NumberFormat
                                                    numb={totaldecomptes}/></td>
                                            </tr>

                                            {devis.aarem === 'oui' &&
                                                <tr>
                                                    {devis.aaref === 'oui' &&
                                                        <td></td>
                                                    }
                                                    <td></td>
                                                    {devis.zone === 'oui' &&
                                                        <td></td>
                                                    }
                                                    <td></td>
                                                    {devis.aarem === 'oui' &&
                                                        <td colSpan="3" style={{textAlign: "right"}}><b>REMISE</b></td>
                                                    }
                                                    {devis.aarem !== 'oui' &&
                                                        <td colSpan="2" style={{textAlign: "right"}}><b>REMISE</b></td>
                                                    }
                                                    <td align="right" className="barder"><NumberFormat
                                                        numb={devis.vremise}/></td>
                                                </tr>
                                            }

                                            {devis.abasetva === 'oui' &&
                                                <tr>
                                                    {devis.aaref === 'oui' && <td></td>}
                                                    <td></td>
                                                    {devis.zone === 'oui' && <td></td>}
                                                    <td></td>
                                                    {devis.aarem === 'oui' &&
                                                        <td colSpan="3" style={{textAlign: "right"}}><b>BASE
                                                            TVA{devis.code !== null && devis.code}</b></td>
                                                    }
                                                    <td colSpan="2" style={{textAlign: "right"}}><b>BASE
                                                        TVA{devis.code !== null && devis.code}</b></td>
                                                    <td align="right" className="barder"><NumberFormat
                                                        numb={devis.basetva}/></td>
                                                </tr>
                                            }
                                            <tr>
                                                {devis.aaref === 'oui' &&
                                                    <td></td>
                                                }
                                                <td></td>
                                                {devis.zone === 'oui' &&
                                                    <td></td>
                                                }
                                                <td></td>
                                                {devis.aarem === 'oui' &&
                                                    <td colSpan="3" style={{textAlign: "right"}}><b>TVA {devis.tva}%</b>
                                                    </td>
                                                }
                                                {devis.aarem !== 'oui' &&
                                                    <td colSpan="2" style={{textAlign: "right"}}><b>TVA {devis.tva}%</b>
                                                    </td>
                                                }
                                                <td align="right" className="barder"><NumberFormat numb={totaltva}/>
                                                </td>
                                            </tr>
                                            <tr>
                                                {devis.aaref === 'oui' &&
                                                    <td></td>
                                                }
                                                <td></td>
                                                {devis.zone === 'oui' &&
                                                    <td></td>
                                                }
                                                <td></td>
                                                {devis.aarem === 'oui' &&
                                                    <td align="right" colSpan="3" className="kop" style={{
                                                        color: "#4e73df",
                                                        fontSize: "12px",
                                                        borderBottom: "1px solid #D3D3D3"
                                                    }}>
                                                        NET À PAYER</td>
                                                }
                                                {devis.aarem !== 'oui' &&
                                                    <td align="right" colSpan="2" className="kop" style={{
                                                        color: "#4e73df",
                                                        fontSize: "12px",
                                                        borderBottom: "1px solid #D3D3D3"
                                                    }}>
                                                        NET À PAYER</td>
                                                }
                                                <td align="right" className="barder kop"
                                                    style={{fontSize: "12px", color: "#4e73df"}}>
                                                    <NumberFormat numb={totalttcsolde}/></td>
                                            </tr>
                                        </table>
                                        <p style={{clear: "both"}}/>
                                        <br/>
                                        <p className="text-left">
                                            Arrêté la présente facture à la somme de:<br/>
                                            <b>{numberToLetters(parseInt(totalttcsolde), {lang: 'fr'})}
                                                <span> {devis.monnaie.code}</span></b>
                                        </p>
                                        <br/>
                                        <p style={{float: "right", textDecoration: "underline"}}> SIGNATURE
                                            AUTORISÉE </p>
                                        <p style={{clear: "both"}}/><br/>
                                        {facture.information !== null &&
                                            <>
                                                <p className="kop" style={{
                                                    float: "left",
                                                    color: "#4e73df",
                                                    textDecoration: "underline"
                                                }}>CONDITIONS ET MODALITÉS DE PAIEMENT </p>
                                                <p style={{clear: "both"}}/>
                                                <p style={{color: "#000000"}}
                                                   dangerouslySetInnerHTML={{__html: facture.information}}/>
                                            </>
                                        }
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td>
                                        <div className="footer-space">&nbsp;</div>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        }
                    </div>
                    <div className="footer" >
                        {forme.pied !== "aucun" &&
                            <>
                                {forme.typeFooter === "texte" &&
                                    <p style={{
                                        fontSize: forme.piedsize + "px",
                                        paddingLeft: "1cm",
                                        paddingRight: "1cm"
                                    }}
                                       dangerouslySetInnerHTML={{__html: forme.pied}}/>
                                }
                                {forme.typeFooter === "image" &&
                                    <img src={`/gallery/${forme.footerImage}`}
                                         style={{
                                             width: "21cm",
                                             minHeight: forme.footerHeight + "cm",
                                         }}
                                         alt=""/>
                                }
                            </>
                        }
                    </div>
                </div>
            </div>
        </>
    );

});