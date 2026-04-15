import React from 'react';
import NumberFormat from "./../../fonctions/NumberFormat";
import $ from "jquery";

export const PrintDevis = React.forwardRef((props, ref) => {

    let devis = props.devis;
    let usa = props.usa;
    let renderLigne = props.renderLigne;
    let renderBons = props.renderBons;
    let renderGroupe = props.renderGroupe;
    let forme = props.forme;
    let devdate = $("#devdate").val();
    let tht = 0;

    const numberToLetters = require('number-2-letters');

    if (devis.aarem === "tht" || devis.aarem === "oui") {
        tht = parseFloat(devis.vremise) + parseFloat(devis.totalht);
    }

    return (
        <>
            {devis.modele === 1 &&
                <>
                    {/* TRAITEMENT */}
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
                                                 marginTop: forme.teteDH + "cm"
                                             }}
                                             alt=""/>
                                    }
                                    {forme.typeEntete === "texte" &&
                                        <p className="cocolor" style={{
                                            paddingRight: forme.teteDD + "cm",
                                            paddingLeft: forme.teteDG + "cm",
                                            marginTop: forme.teteDH + "cm"
                                        }} dangerouslySetInnerHTML={{__html: forme.headerText}}/>
                                    }
                                </>
                            }
                            {forme.typeEntete === "aucun" &&
                                <>
                                    <h3 className="text-center col-black"><br/><br/>Dimension de la zone
                                        d'entête<br/>{forme.headerHeight}cm x {forme.headerWith}cm</h3>
                                    <h5 className="text-center col-blue-grey">Veuillez cliquer sur le bouton <b>"MISE EN
                                        FORME
                                        DU DEVIS"</b> pour apporter des modifications svp.</h5>
                                </>
                            }
                        </div>
                        {devis.type !== "cps" &&
                            <div className="bood"
                                 style={{paddingLeft: "1cm", paddingRight: "1cm", marginTop: forme.teteDB + "cm"}}>
                                <table align="right" style={{marginTop: "10px", marginBottom: "25px"}}>
                                    <tr>
                                        <td style={{border: "none", textAlign: "center", lineHeight: "1.5"}}>
                                            <b>{devis.chantier.client.nomclient.toUpperCase()}</b> <br/>
                                            {devis.chantier.client.adresse === " " &&
                                                <> <br/> {devis.chantier.client.adresse} </>
                                            }
                                            <br/>
                                            {devis.chantier.client.code != null &&
                                                <> <b> N° CLIENT: </b> {devis.chantier.client.code} </>
                                            }
                                        </td>
                                    </tr>
                                </table>
                                <p style={{clear: "both"}}/>

                                <table cellSpacing="0">
                                    <tr style={{backgroundColor: "#f8f9fa", fontWeight: "700", width: "45%"}}>
                                        <td className="borde"> DATE</td>
                                        <td className="borde"> N° DEVIS</td>
                                        <td className="borde"> AFFAIRE SUIVIE PAR</td>
                                        <td className="borde"> VALIDITÉ</td>
                                    </tr>
                                    <tr>
                                        <td className="borde">{devdate}</td>
                                        <td className="borde"> {devis.iddevis}</td>
                                        <td className="borde text-center"></td>
                                        <td className="borde">
                                            {devis.validit != null &&
                                                <>{devis.validit}</>
                                            }
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colSpan="4"
                                            className="borde">
                                            <span style={{
                                                textDecoration: "underline",
                                                lineHeight: "1.2",
                                                fontWeight: "bold"
                                            }}> RÉFÉRENCE </span><br/>
                                            <span dangerouslySetInnerHTML={{__html: devis.devreference}}/></td>
                                    </tr>
                                </table>

                                <table style={{width: "100%", marginTop: "20px"}} cellSpacing="0">
                                    <tr className="printa"> {
                                        devis.aaref === 'oui' &&
                                        <th className="borde text-center"> RÉF</th>}
                                        <th className="bor text-left"
                                            style={{maxWidth: "500px", minWidth: "200px"}}> DÉSIGNATION
                                        </th>
                                        {devis.zone === 'oui' &&
                                            <th className="borde text-center"> SECTION </th>
                                        }
                                        <th className="borde text-center"> UNITÉ</th>
                                        <th className="borde text-center mw60"> QTÉ</th>
                                        <th className="borde text-center"> PRIX&nbsp;U.</th>
                                        {devis.aarem === 'oui' &&
                                            <th className="borde text-center">%REM</th>
                                        }
                                        <th className="borde text-center" style={{minWidth: "120px"}}>MONTANT HT</th>
                                    </tr>

                                    {renderGroupe}
                                    {renderLigne}

                                    {devis.aarem === 'oui' &&
                                        <tr> {devis.aaref === 'oui' && <td className="bord"/>}
                                            <td className="bord"/>
                                            {devis.zone === 'oui' &&
                                                <td className="bord"/>
                                            }
                                            <td className="bord"/>
                                            {devis.aarem === 'oui' &&
                                                <td colSpan="3" className="bord text-right"><b> TOTAL SANS REMISE</b>
                                                </td>
                                            }
                                            <td className="barder text-right nowrape"><NumberFormat
                                                numb={tht}/>
                                            </td>
                                        </tr>
                                    }
                                    {devis.aarem === 'oui' &&
                                        <tr> {devis.aaref === 'oui' && <td className="bord"/>}
                                            <td className="bord"/>
                                            {devis.zone === 'oui' &&
                                                <td className="bord"/>
                                            }
                                            <td className="bord"/>
                                            {devis.aarem === 'oui' &&
                                                <td colSpan="3" className="bord text-right"><b> REMISE</b>
                                                </td>
                                            }
                                            <td className="barder text-right nowrape"><NumberFormat
                                                numb={devis.vremise}/>
                                            </td>
                                        </tr>
                                    }
                                    <tr>
                                        {devis.aaref === 'oui' &&
                                            <td className="bord"/>
                                        }
                                        <td className="bord"/>
                                        {devis.zone === 'oui' &&
                                            <td className="bord"/>
                                        }
                                        <td className="bord"/>
                                        {devis.aarem === 'oui' &&
                                            <td colSpan="3" className="bord text-right">
                                                {devis.ptva === 'oui' && <b> TOTAL HT </b>}
                                                {devis.ptva === 'susp' && <b> TOTAL HT </b>}
                                                {devis.ptva === 'non' &&
                                                    <>
                                                        {devis.model === 1 &&
                                                            <b>TOTAL HT</b>
                                                        }
                                                        {devis.model === 2 &&
                                                            <b>TOTAL TTC</b>
                                                        }
                                                    </>
                                                }
                                            </td>
                                        }
                                        {devis.aarem !== 'oui' &&
                                            <td className="bord text-right" colSpan="2">
                                                {devis.ptva === 'oui' && <b> TOTAL HT </b>}
                                                {devis.ptva === 'susp' && <b> TOTAL HT </b>}
                                                {devis.ptva === 'non' &&
                                                    <>
                                                        {devis.model === 1 &&
                                                            <b>TOTAL HT</b>
                                                        }
                                                        {devis.model === 2 &&
                                                            <b>TOTAL TTC</b>
                                                        }
                                                    </>
                                                }
                                            </td>
                                        }
                                        {devis.aarem === 'tht' &&
                                            <td className="barder text-right nowrape">< NumberFormat numb={tht}/></td>
                                        }
                                        {devis.aarem !== 'tht' &&
                                            <td className="barder text-right nowrape">< NumberFormat
                                                numb={devis.totalht}/></td>
                                        }
                                    </tr>

                                    {devis.aarem === 'tht' &&
                                        <tr>
                                            {devis.aaref === 'oui' && <td className="bord"/>}
                                            <td className="bord"/>
                                            {devis.zone === 'oui' && <td className="bord"/>}
                                            <td className="bord"/>
                                            {devis.aarem === 'oui' &&
                                                <td colSpan="3" className="bord text-right">
                                                    <b> REMISE < NumberFormat numb={devis.remtht}/>%</b>
                                                </td>
                                            }

                                            {devis.aarem !== 'oui' &&
                                                <td className="bord text-right"
                                                    colSpan="2">
                                                    <b> REMISE < NumberFormat numb={devis.remtht}/>%</b>
                                                < /td>
                                            }
                                            <td className="barder text-right nowrape">< NumberFormat
                                                numb={devis.vremise}/>
                                            </td>
                                        </tr>
                                    }

                                    {devis.aarem === 'tht' &&
                                        <tr>
                                            {devis.aaref === 'oui' &&
                                                <td className="bord"/>
                                            }
                                            <td className="bord"/>
                                            {devis.zone === 'oui' &&
                                                <td className="bord"/>
                                            }
                                            <td className="bord"/>

                                            {devis.aarem === 'oui' &&
                                                <td colSpan="3" className="bord text-right">
                                                    {devis.ptva === 'oui' && <b> TOTAL HT REMISÉ</b>}
                                                    {devis.ptva === 'susp' && <b> TOTAL HT REMISÉ</b>}
                                                    {devis.ptva === 'non' &&
                                                        <>
                                                            {devis.model === 1 &&
                                                                <b>TOTAL HT REMISÉ</b>
                                                            }
                                                            {devis.model === 2 &&
                                                                <b>TOTAL TTC REMISÉ</b>
                                                            }
                                                        </>
                                                    }
                                                </td>
                                            }
                                            {devis.aarem !== 'oui' &&
                                                <td className="bord text-right" colSpan="2">
                                                    {devis.ptva === 'oui' && <b> TOTAL HT REMISÉ</b>}
                                                    {devis.ptva === 'susp' && <b> TOTAL HT REMISÉ</b>}
                                                    {devis.ptva === 'non' &&
                                                        <>
                                                            {devis.model === 1 &&
                                                                <b>TOTAL HT REMISÉ</b>
                                                            }
                                                            {devis.model === 2 &&
                                                                <b>TOTAL TTC REMISÉ</b>
                                                            }
                                                        </>
                                                    }
                                                </td>
                                            }
                                            <td className="barder text-right nowrape">< NumberFormat
                                                numb={devis.totalht}/>
                                            </td>

                                        </tr>
                                    }


                                    {devis.abasetva === 'oui' &&
                                        <tr>
                                            {devis.aaref === 'oui' &&
                                                <td className="bord"/>
                                            }
                                            <td className="bord"/>
                                            {devis.zone === 'oui' &&
                                                <td className="bord"/>
                                            }
                                            <td className="bord"/>
                                            {devis.aarem === 'oui' &&
                                                <td colSpan="3" className="bord text-right">
                                                    <b> BASE TVA</b>
                                                </td>
                                            }

                                            {devis.aarem !== 'oui' &&
                                                <td className="bord text-right" colSpan="2"><b> BASE TVA</b>
                                                </td>
                                            }
                                            <td className="barder text-right nowrape">< NumberFormat
                                                numb={devis.basetva}/>
                                            </td>
                                        </tr>
                                    }
                                    {devis.model === 1 &&
                                        <tr>
                                            {devis.aaref === 'oui' &&
                                                <td className="bord"/>
                                            }
                                            <td className="bord"/>
                                            {devis.zone === 'oui' &&
                                                <td className="bord"/>
                                            }
                                            {devis.aarem === 'oui' &&
                                                <td colSpan="4" className="bord text-right">
                                                    {devis.ptva === 'oui' &&
                                                        <span>TVA(<NumberFormat numb={devis.tva}/>%)</span>
                                                    }
                                                    {devis.ptva === 'susp' &&
                                                        <span>TVA SUSPENDUE(<NumberFormat numb={devis.tva}/>%)</span>
                                                    }
                                                    {devis.ptva === 'non' &&
                                                        <span>TVA NON FACTURÉE(<NumberFormat numb={devis.tva}/>%)</span>
                                                    }
                                                </td>
                                            }
                                            {devis.aarem !== 'oui' &&
                                                <td className="bord text-right" colSpan="3">
                                                    {devis.ptva === 'oui' &&
                                                        <span>TVA(<NumberFormat numb={devis.tva}/>%)</span>
                                                    }
                                                    {devis.ptva === 'susp' &&
                                                        <span>TVA SUSPENDUE(<NumberFormat numb={devis.tva}/>%)</span>
                                                    }
                                                    {devis.ptva === 'non' &&
                                                        <span>TVA NON FACTURÉE(<NumberFormat numb={devis.tva}/>%)</span>
                                                    }
                                                </td>
                                            }
                                            <td className="barder text-right nowrape"><NumberFormat numb={devis.vtva}/>
                                            </td>
                                        </tr>
                                    }

                                    <tr>
                                        {devis.aaref === 'oui' &&
                                            <td className="bord"/>}
                                        <td className="bord"/>
                                        {devis.zone === 'oui' &&
                                            <td className="bord"/>
                                        }
                                        <td className="bord"/>
                                        {devis.aarem === 'oui' &&
                                            <td colSpan="3" className="bord text-right kop"
                                                style={{color: "#000", borderBottom: "1px solid #D3D3D3"}}>TOTAL
                                                TTC</td>
                                        }
                                        {devis.aarem !== 'oui' &&
                                            <td colSpan="2" className="bord text-right kop"
                                                style={{color: "#000", borderBottom: "1px solid #D3D3D3"}}>TOTAL
                                                TTC</td>
                                        }
                                        <td className="barder text-right kop nowrape"
                                            style={{color: "#000"}}><NumberFormat numb={devis.totalttc}/></td>
                                    </tr>
                                </table>
                                <p style={{clear: "both"}}/>
                                <p className="text-left">
                                    Arrêté le devis à la somme
                                    de:<br/><b> {numberToLetters(parseInt(devis.totalttc), {lang: 'fr'})}
                                    <span> {devis.monnaie.code}</span></b>
                            </p>
                            <br/>
                                <p style={{float: "right", textDecoration: "underline"}}> SIGNATURE AUTORISÉE </p>
                                <p style={{clear: "both"}}/><br/>
                                {devis.conditions !== null &&
                                    <>
                                        <p className="kop" style={{
                                            float: "left",
                                            color: forme.decolor,
                                            textDecoration: "underline"
                                        }}>INFORMATIONS
                                            ADDITIONNELLES </p>
                                        <p style={{clear: "both"}}/>
                                        <p style={{color: "#000000"}}
                                           dangerouslySetInnerHTML={{__html: devis.conditions}}/>
                                    </>
                                }
                            </div>
                        }
                        {devis.type === "cps" &&
                            <div className="bood" style={{paddingLeft: "1cm", paddingRight: "1cm"}}>
                                <table align="right" style={{marginTop: "10px", marginBottom: "25px"}}>
                                    <tr>
                                        <td style={{border: "none", textAlign: "center", lineHeight: "1.5"}}>
                                            <b>{devis.chantier.client.nomclient}</b> <br/>
                                            {devis.chantier.client.adresse === " " &&
                                                <> <br/> {devis.chantier.client.adresse} </>
                                            }
                                        </td>
                                    </tr>
                                </table>
                                <p style={{clear: "both"}}/>
                                <table cellSpacing="0">
                                    <tr style={{backgroundColor: "#f8f9fa", fontWeight: "700", width: "45%"}}>
                                        <td className="borde"> DATE</td>
                                        <td className="borde"> N° DEVIS</td>
                                    </tr>
                                    <tr>
                                        <td className="borde">{devdate}</td>
                                        <td className="borde"> {devis.iddevis}</td>
                                    </tr>
                                    <tr>
                                        <td colSpan="4"
                                            className="borde">
                                            <span style={{
                                                textDecoration: "underline",
                                                lineHeight: "1.2",
                                                fontWeight: "bold"
                                            }}> RÉFÉRENCE </span><br/>
                                            <span dangerouslySetInnerHTML={{__html: devis.devreference}}/></td>
                                    </tr>
                                </table>
                                <table style={{width: "100%", marginTop: "20px"}} cellSpacing="0">
                                    <tr className="printa">
                                        <th className="borde text-left" style={{minWidth: "140px"}}> Nº COMMANDE</th>
                                        <th className="bor text-left" colSpan="2"
                                            style={{maxWidth: "500px", minWidth: "200px"}}> DÉSIGNATION
                                        </th>
                                        <th className="borde text-left"> RÉF</th>
                                        <th className="borde text-center" style={{minWidth: "100px"}}> UNITÉ</th>
                                        <th className="borde text-center"> PRIX&nbsp;U.</th>
                                    </tr>

                                    {renderBons}

                                </table>
                            </div>
                        }
                        <div className="footer">
                            {forme.typeFooter !== "aucun" &&
                                <>
                                    {forme.typeFooter === "texte" &&
                                        <p style={{
                                            fontSize: forme.piedsize + "px",
                                            textAlign: "center",
                                            paddingLeft: "1cm",
                                            paddingRight: "1cm"
                                        }}
                                           dangerouslySetInnerHTML={{__html: forme.pied}}/>
                                    }
                                    {forme.typeFooter === "image" &&
                                        <img src={`/gallery/${forme.footerImage}`}
                                             style={{
                                                 width: "21cm",
                                                 height: forme.footerHeight + "cm",
                                             }}
                                             alt=""/>
                                    }
                                </>
                            }
                            {forme.typeFooter === "aucun" &&
                                <>
                                    <h5 className="text-center col-black">Dimension de la zone de pied de
                                        page = {forme.footerHeight}cm x {forme.headerWith}cm</h5>
                                    <h6 className="text-center col-blue-grey">Veuillez cliquer sur le bouton <b>"MISE EN
                                        FORME
                                        DU DEVIS"</b> pour apporter des modifications svp.</h6>
                                </>
                            }
                        </div>
                    </div>
                    {/* FIN TRAITEMENT */}

                    {/* IMPRESSION */}
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
                                                     paddingTop: forme.teteDH + "cm"
                                                 }}
                                                 alt=""/>
                                        }
                                        {forme.typeEntete === "texte" &&
                                            <p style={{
                                                paddingRight: forme.teteDD + "cm",
                                                paddingLeft: forme.teteDG + "cm",
                                                paddingTop: forme.teteDH + "cm"
                                            }}
                                               dangerouslySetInnerHTML={{__html: forme.headerText}}/>
                                        }
                                    </>
                                }
                            </div>
                            <div style={{paddingLeft: "1cm", paddingRight: "1cm", marginTop:forme.teteDB + "cm"}}>
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
                                            {devis.type !== "cps" &&
                                                <>
                                                    <table align="right">
                                                        <tr>
                                                            <td style={{
                                                                border: "none",
                                                                textAlign: "center",
                                                                lineHeight: "1.5"
                                                            }}>
                                                                <b>{devis.chantier.client.nomclient.toUpperCase()}</b> <br/>
                                                                <b>{devis.chantier.nomchantier.toUpperCase()}</b>
                                                                {devis.chantier.client.adresse === " " &&
                                                                    <> <br/> {devis.chantier.client.adresse} </>
                                                                }
                                                                <br/>
                                                                {devis.chantier.client.code != null &&
                                                                    <><b> N° CLIENT: </b> {devis.chantier.client.code} </>
                                                                }
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <p style={{clear: "both"}}/>
                                                    {devis.type === "esti" &&
                                                        <h3 className="font-bold m-t--10 col-blue">DEVIS ESTIMATIF</h3>
                                                    }
                                                    <table>
                                                            <tr style={{
                                                                backgroundColor: "#f8f9fa",
                                                                fontWeight: "700",
                                                                width: "45%"
                                                            }}>
                                                                <td className="borde"> DATE</td>
                                                                <td className="borde"> N° DEVIS</td>
                                                                <td className="borde"> AFFAIRE SUIVIE PAR</td>
                                                                <td className="borde"> VALIDITÉ</td>
                                                            </tr>
                                                            <tr>
                                                                <td className="borde">{devdate}</td>
                                                                <td className="borde"> {devis.iddevis}</td>
                                                                <td className="borde text-center">
                                                                    {devis.contact != null &&
                                                                        <>
                                                                            <b>{devis.contact.contact}</b>
                                                                            <br/>
                                                                            {devis.contact.mail}
                                                                        </>
                                                                    }
                                                                </td>
                                                                <td className="borde">
                                                                    {devis.validit != null &&
                                                                        <>{devis.validit}</>
                                                                    }
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colSpan="4"
                                                                    className="borde">
                                            <span style={{
                                                textDecoration: "underline",
                                                lineHeight: "1.2",
                                                fontWeight: "bold"
                                            }}> RÉFÉRENCE </span><br/>
                                                                    <span
                                                                        dangerouslySetInnerHTML={{__html: devis.devreference}}/>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    <table style={{width: "100%", marginTop: "20px"}} cellSpacing="0">
                                                        <tr className="printa"> {
                                                            devis.aaref === 'oui' &&
                                                            <th className="borde text-center"> RÉF </th>}
                                                            <th className="bor text-left"
                                                                style={{
                                                                    maxWidth: "500px",
                                                                    minWidth: "200px"
                                                                }}> DÉSIGNATION
                                                            </th>
                                                            {devis.zone === 'oui' &&
                                                                <th className="borde text-center"> SECTION </th>
                                                            }
                                                            <th className="borde text-center"> UNITÉ</th>
                                                            <th className="borde text-center mw60"> QTÉ</th>
                                                            <th className="borde text-center"> PRIX&nbsp;U.</th>
                                                            {devis.aarem === 'oui' &&
                                                                <th className="borde text-center">%REM</th>
                                                            }
                                                            <th className="borde text-center"> MONTANT</th>
                                                        </tr>

                                                        {renderGroupe}
                                                        {renderLigne}

                                                        <tr>
                                                            {devis.aaref === 'oui' &&
                                                                <td className="bord"/>
                                                            }
                                                            <td className="bord"/>
                                                            {devis.zone === 'oui' &&
                                                                <td className="bord"/>
                                                            }
                                                            <td className="bord"/>

                                                            {devis.aarem === 'oui' &&
                                                                <td colSpan="3" className="bord text-right">
                                                                    {devis.ptva === 'oui' && <b> TOTAL HT </b>}
                                                                    {devis.ptva === 'susp' && <b> TOTAL HT </b>}
                                                                    {devis.ptva === 'non' &&
                                                                        <>
                                                                            {devis.model === 1 &&
                                                                                <b>TOTAL HT</b>
                                                                            }
                                                                            {devis.model === 2 &&
                                                                                <b>TOTAL TTC</b>
                                                                            }
                                                                        </>
                                                                    }
                                                                </td>
                                                            }
                                                            {devis.aarem !== 'oui' &&
                                                                <td className="bord text-right" colSpan="2">
                                                                    {devis.ptva === 'oui' && <b> TOTAL HT </b>}
                                                                    {devis.ptva === 'susp' && <b> TOTAL HT </b>}
                                                                    {devis.ptva === 'non' &&
                                                                        <>
                                                                            {devis.model === 1 &&
                                                                                <b>TOTAL HT</b>
                                                                            }
                                                                            {devis.model === 2 &&
                                                                                <b>TOTAL TTC</b>
                                                                            }
                                                                        </>
                                                                    }
                                                                </td>
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
                                                        </tr>

                                                        {devis.aarem === 'oui' &&
                                                            <tr> {devis.aaref === 'oui' && <td className="bord"/>}
                                                                <td className="bord"/>
                                                                {devis.zone === 'oui' &&
                                                                    <td className="bord"/>
                                                                }
                                                                <td className="bord"/>
                                                                {devis.aarem === 'oui' &&
                                                                    <td colSpan="3" className="bord text-right">
                                                                        <b> TOTAL HT SANS REMISE</b>
                                                                    </td>
                                                                }
                                                                <td className="barder text-right nowrape"><NumberFormat
                                                                    numb={tht}/>
                                                                </td>
                                                            </tr>
                                                        }

                                                        {devis.aarem === 'oui' &&
                                                            <tr> {devis.aaref === 'oui' && <td className="bord"/>}
                                                                <td className="bord"/>
                                                                {devis.zone === 'oui' &&
                                                                    <td className="bord"/>
                                                                }
                                                                <td className="bord"/>
                                                                {devis.aarem === 'oui' &&
                                                                    <td colSpan="3" className="bord text-right">
                                                                        <b> REMISE</b>
                                                                    </td>
                                                                }
                                                                <td className="barder text-right nowrape"><NumberFormat
                                                                    numb={devis.vremise}/>
                                                                </td>
                                                            </tr>
                                                        }
                                                        {devis.aarem === 'tht' &&
                                                            <tr>
                                                                {devis.aaref === 'oui' && <td className="bord"/>}
                                                                <td className="bord"/>
                                                                {devis.zone === 'oui' && <td className="bord"/>}
                                                                <td className="bord"/>
                                                                {devis.aarem === 'oui' &&
                                                                    <td colSpan="3" className="bord text-right">
                                                                        <b> REMISE < NumberFormat numb={devis.remtht}/>%</b>
                                                                    </td>
                                                                }

                                                                {devis.aarem !== 'oui' &&
                                                                    <td className="bord text-right"
                                                                        colSpan="2">
                                                                        <b> REMISE < NumberFormat numb={devis.remtht}/>%</b>
                                                                    < /td>
                                                                }
                                                                <td className="barder text-right nowrape">< NumberFormat
                                                                    numb={devis.vremise}/>
                                                                </td>
                                                            </tr>
                                                        }

                                                        {devis.aarem === 'tht' &&
                                                            <tr>
                                                                {devis.aaref === 'oui' &&
                                                                    <td className="bord"/>
                                                                }
                                                                <td className="bord"/>
                                                                {devis.zone === 'oui' &&
                                                                    <td className="bord"/>
                                                                }
                                                                <td className="bord"/>

                                                                {devis.aarem === 'oui' &&
                                                                    <td colSpan="3" className="bord text-right">
                                                                        {devis.ptva === 'oui' && <b> TOTAL HT REMISÉ</b>}
                                                                        {devis.ptva === 'susp' && <b> TOTAL HT REMISÉ</b>}
                                                                        {devis.ptva === 'non' &&
                                                                            <>
                                                                                {devis.model === 1 &&
                                                                                    <b>TOTAL HT REMISÉ</b>
                                                                                }
                                                                                {devis.model === 2 &&
                                                                                    <b>TOTAL TTC REMISÉ</b>
                                                                                }
                                                                            </>
                                                                        }
                                                                    </td>
                                                                }
                                                                {devis.aarem !== 'oui' &&
                                                                    <td className="bord text-right" colSpan="2">
                                                                        {devis.ptva === 'oui' && <b> TOTAL HT REMISÉ</b>}
                                                                        {devis.ptva === 'susp' && <b> TOTAL HT REMISÉ</b>}
                                                                        {devis.ptva === 'non' &&
                                                                            <>
                                                                                {devis.model === 1 &&
                                                                                    <b>TOTAL HT REMISÉ</b>
                                                                                }
                                                                                {devis.model === 2 &&
                                                                                    <b>TOTAL TTC REMISÉ</b>
                                                                                }
                                                                            </>
                                                                        }
                                                                    </td>
                                                                }
                                                                <td className="barder text-right nowrape">< NumberFormat
                                                                    numb={devis.totalht}/>
                                                                </td>

                                                            </tr>
                                                        }


                                                        {devis.abasetva === 'oui' &&
                                                            <tr>
                                                                {devis.aaref === 'oui' &&
                                                                    <td className="bord"/>
                                                                }
                                                                <td className="bord"/>
                                                                {devis.zone === 'oui' &&
                                                                    <td className="bord"/>
                                                                }
                                                                <td className="bord"/>
                                                                {devis.aarem === 'oui' &&
                                                                    <td colSpan="3" className="bord text-right">
                                                                        <b> BASE TVA</b>
                                                                    </td>
                                                                }

                                                                {devis.aarem !== 'oui' &&
                                                                    <td className="bord text-right" colSpan="2"><b> BASE
                                                                        TVA</b>
                                                                    </td>
                                                                }
                                                                <td className="barder text-right nowrape">< NumberFormat
                                                                    numb={devis.basetva}/>
                                                                </td>
                                                            </tr>
                                                        }
                                                        {devis.model === 1 &&
                                                            <tr>
                                                                {devis.aaref === 'oui' &&
                                                                    <td className="bord"/>
                                                                }
                                                                <td className="bord"/>
                                                                {devis.zone === 'oui' &&
                                                                    <td className="bord"/>
                                                                }
                                                                {devis.aarem === 'oui' &&
                                                                    <td colSpan="4" className="bord text-right">
                                                                        {devis.ptva === 'oui' &&
                                                                            <span>TVA(<NumberFormat
                                                                                numb={devis.tva}/>%)</span>
                                                                        }
                                                                        {devis.ptva === 'susp' &&
                                                                            <span>TVA SUSPENDUE(<NumberFormat
                                                                                numb={devis.tva}/>%)</span>
                                                                        }
                                                                        {devis.ptva === 'non' &&
                                                                            <span>TVA NON FACTURÉE(<NumberFormat
                                                                                numb={devis.tva}/>%)</span>
                                                                        }
                                                                    </td>
                                                                }
                                                                {devis.aarem !== 'oui' &&
                                                                    <td className="bord text-right" colSpan="3">
                                                                        {devis.ptva === 'oui' &&
                                                                            <span>TVA(<NumberFormat
                                                                                numb={devis.tva}/>%)</span>
                                                                        }
                                                                        {devis.ptva === 'susp' &&
                                                                            <span>TVA SUSPENDUE(<NumberFormat
                                                                                numb={devis.tva}/>%)</span>
                                                                        }
                                                                        {devis.ptva === 'non' &&
                                                                            <span>TVA NON FACTURÉE(<NumberFormat
                                                                                numb={devis.tva}/>%)</span>
                                                                        }
                                                                    </td>
                                                                }
                                                                <td className="barder text-right nowrape"><NumberFormat
                                                                    numb={devis.vtva}/>
                                                                </td>
                                                            </tr>
                                                        }

                                                        <tr>
                                                            {devis.aaref === 'oui' &&
                                                                <td className="bord"/>}
                                                            <td className="bord"/>
                                                            {devis.zone === 'oui' &&
                                                                <td className="bord"/>
                                                            }
                                                            <td className="bord"/>
                                                            {devis.aarem === 'oui' &&
                                                                <td colSpan="3" className="bord text-right kop"
                                                                    style={{
                                                                        color: forme.decolor,
                                                                        borderBottom: "1px solid #D3D3D3"
                                                                    }}>TOTAL TTC</td>
                                                            }
                                                            {devis.aarem !== 'oui' &&
                                                                <td colSpan="2" className="bord text-right kop"
                                                                    style={{
                                                                        color: "#000",
                                                                        borderBottom: "1px solid #D3D3D3"
                                                                    }}>TOTAL TTC</td>
                                                            }
                                                            <td className="barder text-right kop nowrape"
                                                                style={{color: "#000"}}><NumberFormat
                                                                numb={devis.totalttc}/></td>
                                                        </tr>
                                                    </table>
                                                    <p style={{clear: "both"}}/>
                                                    <p className="text-left">
                                                        Arrêté le devis à la somme
                                                        de:<br/> <b> {numberToLetters(parseInt(devis.totalttc), {lang: 'fr'})}
                                                        <span>{devis.monnaie.code}</span></b>
                                                    </p>
                                                    <br/>
                                                    <p style={{float: "right", textDecoration: "underline"}}> SIGNATURE
                                                        AUTORISÉE </p>
                                                    <p style={{clear: "both"}}/><br/>
                                                    {devis.conditions !== null &&
                                                        <>
                                                            <p className="kop" style={{
                                                                float: "left",
                                                                color: forme.decolor,
                                                                textDecoration: "underline"
                                                            }}>INFORMATIONS
                                                                ADDITIONNELLES </p>
                                                            <p style={{clear: "both"}}/>
                                                            <p style={{color: "#000000"}}
                                                               dangerouslySetInnerHTML={{__html: devis.conditions}}/>
                                                        </>
                                                    }
                                                </>
                                            }
                                            {devis.type === "cps" &&
                                                <>
                                                    <table align="right">
                                                        <tr>
                                                            <td style={{
                                                                border: "none",
                                                                textAlign: "center",
                                                                lineHeight: "1.5"
                                                            }}>
                                                                <b>{devis.chantier.client.nomclient}</b> <br/>
                                                                <b>{devis.chantier.nomchantier}</b>
                                                                {devis.chantier.client.adresse === " " &&
                                                                    <> <br/> {devis.chantier.client.adresse} </>
                                                                }
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <p style={{clear: "both"}}/>
                                                    <table>
                                                        <tr style={{
                                                            backgroundColor: "#f8f9fa",
                                                            fontWeight: "700",
                                                            width: "45%"
                                                        }}>
                                                            <td className="borde"> DATE</td>
                                                            <td className="borde"> N° DEVIS</td>
                                                        </tr>
                                                        <tr>
                                                            <td className="borde">{devdate}</td>
                                                            <td className="borde"> {devis.iddevis}</td>
                                                        </tr>
                                                        <tr>
                                                            <td colSpan="4"
                                                                className="borde">
                                            <span style={{
                                                textDecoration: "underline",
                                                lineHeight: "1.2",
                                                fontWeight: "bold"
                                            }}> RÉFÉRENCE </span><br/>
                                                                <span
                                                                    dangerouslySetInnerHTML={{__html: devis.devreference}}/>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table style={{width: "100%", marginTop: "20px"}} cellSpacing="0">
                                                        <tr className="printa">
                                                            <th className="borde text-left"
                                                                style={{minWidth: "140px"}}> Nº
                                                                COMMANDE
                                                            </th>
                                                            <th className="bor text-left" colSpan="2"
                                                                style={{
                                                                    maxWidth: "500px",
                                                                    minWidth: "200px"
                                                                }}> DÉSIGNATION
                                                            </th>
                                                            <th className="borde text-left"> RÉF</th>
                                                            <th className="borde text-center"
                                                                style={{minWidth: "100px"}}> UNITÉ
                                                            </th>
                                                            <th className="borde text-center"> PRIX&nbsp;U.</th>
                                                        </tr>

                                                        {renderBons}

                                                    </table>
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
                            </div>
                            <div className="footer">
                                {forme.pied !== "aucun" &&
                                    <>
                                        {forme.typeFooter === "texte" &&
                                            <p style={{
                                                fontSize: forme.piedsize + "px",
                                                textAlign: "center",
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
                    {/* FIN IMPRESSION */}
                </>
            }

            {devis.modele === 2 &&
                <>
                    {/* TRAITEMENT */}
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
                                        <p className="cocolor" style={{
                                            paddingRight: forme.teteDD + "cm",
                                            paddingLeft: forme.teteDG + "cm",
                                            paddingTop: forme.teteDH + "cm",
                                            paddingBottom: forme.teteDB + "cm",
                                        }} dangerouslySetInnerHTML={{__html: forme.headerText}}/>
                                    }
                                </>
                            }
                            {forme.typeEntete === "aucun" &&
                                <>
                                    <h3 className="text-center col-black"><br/><br/>Dimension de la zone
                                        d'entête<br/>{forme.headerHeight}cm x {forme.headerWith}cm</h3>
                                    <h5 className="text-center col-blue-grey">Veuillez cliquer sur le bouton <b>"MISE EN
                                        FORME
                                        DU DEVIS"</b> pour apporter des modifications svp.</h5>
                                </>
                            }
                        </div>
                        {devis.type !== "cps" &&
                            <div className="bood" style={{paddingLeft: "1cm", paddingRight: "1cm"}}>
                                <table style={{width: "100%", marginTop: "20px", border: "1px solid #D3D3D3"}} cellSpacing="0">
                                    <tr>
                                        <td style={{width: "60%", valign: "top"}}>
                                            <p style={{paddingLeft: "10px"}}>Titre du projet: <b>{devis.chantier.nomchantier}</b></p>
                                            <p style={{paddingLeft: "10px"}}>Référence/Oblet:<br/><span style={{fontWeight: "bold"}} dangerouslySetInnerHTML={{__html: devis.devreference}}/></p>
                                            <br/>
                                            <p style={{paddingLeft: "10px"}}>Date: <b>{devdate}</b></p>
                                            <p style={{paddingLeft: "10px"}}>Validité du devis: <b>{devis.validit}</b></p>
                                            <p style={{paddingLeft: "10px"}}>Affaire suivie par: {devis.contact !== null && <b>{devis.contact.contact}</b>}</p>
                                        </td>
                                        <td style={{width: "40%", valign: "top"}}>
                                            <h4><b>DEVIS Nº: {devis.iddevis}</b></h4><br/>
                                            <p>Client: <b>{devis.chantier.client.nomclient}</b></p>
                                            <p>Nº Client: <b>{devis.chantier.client.code}</b></p>
                                            <p>Adresse: <b>{devis.chantier.client.adresse}</b></p>
                                            <p>Téléphone: <b>{devis.chantier.client.contact}</b></p>
                                        </td>
                                    </tr>
                                </table>
                                <table style={{width: "100%", marginTop: "20px"}} cellSpacing="0">
                                    <tr className="printa">
                                        {devis.aaref === 'oui' &&
                                            <th className="borde text-center"> RÉF</th>
                                        }
                                        <th className="borde text-center"> UNITÉ</th>
                                        <th className="bor text-left"
                                            style={{maxWidth: "500px", minWidth: "150px"}}> DÉSIGNATION
                                        </th>
                                        {devis.zone === 'oui' &&
                                            <th className="borde text-center"> SECTION </th>
                                        }
                                        <th className="borde text-center mw60"> QTÉS</th>
                                        <th className="borde text-center"> PRIX&nbsp;U.</th>
                                        {devis.aarem === 'oui' &&
                                            <th className="borde text-center">%REM</th>
                                        }
                                        <th className="borde text-center" style={{minWidth: "120px"}}>TOTAUX</th>
                                    </tr>

                                    {renderGroupe}
                                    {renderLigne}

                                    <tr>
                                        {devis.aaref === 'oui' &&
                                            <td className="bord"/>
                                        }
                                        <td className="bord"/>
                                        {devis.zone === 'oui' &&
                                            <td className="bord"/>
                                        }
                                        <td className="bord"/>

                                        {devis.aarem === 'oui' &&
                                            <td colSpan="3" className="bord text-right">
                                                {devis.ptva === 'oui' && <b> TOTAL HT </b>}
                                                {devis.ptva === 'susp' && <b> TOTAL HT </b>}
                                                {devis.ptva === 'non' &&
                                                    <>
                                                        {devis.model === 1 &&
                                                            <b>TOTAL HT</b>
                                                        }
                                                        {devis.model === 2 &&
                                                            <b>TOTAL TTC</b>
                                                        }
                                                    </>
                                                }
                                            </td>
                                        }
                                        {devis.aarem !== 'oui' &&
                                            <td className="bord text-right" colSpan="2">
                                                {devis.ptva === 'oui' && <b> TOTAL HT </b>}
                                                {devis.ptva === 'susp' && <b> TOTAL HT </b>}
                                                {devis.ptva === 'non' &&
                                                    <>
                                                        {devis.model === 1 &&
                                                            <b>TOTAL HT</b>
                                                        }
                                                        {devis.model === 2 &&
                                                            <b>TOTAL TTC</b>
                                                        }
                                                    </>
                                                }
                                            </td>
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
                                    </tr>

                                    {devis.aarem === 'oui' &&
                                        <tr> {devis.aaref === 'oui' && <td className="bord"/>}
                                            <td className="bord"/>
                                            {devis.zone === 'oui' &&
                                                <td className="bord"/>
                                            }
                                            <td className="bord"/>
                                            {devis.aarem === 'oui' &&
                                                <td colSpan="3" className="bord text-right"><b> REMISE</b>
                                                </td>
                                            }
                                            <td className="barder text-right nowrape"><NumberFormat
                                                numb={devis.vremise}/>
                                            </td>
                                        </tr>
                                    }


                                    {devis.aarem === 'tht' &&
                                        <tr>
                                            {devis.aaref === 'oui' && <td className="bord"/>}
                                            <td className="bord"/>
                                            {devis.zone === 'oui' && <td className="bord"/>}
                                            <td className="bord"/>
                                            {devis.aarem === 'oui' &&
                                                <td colSpan="3" className="bord text-right">
                                                    <b> REMISE < NumberFormat numb={devis.remtht}/>%</b>
                                                </td>
                                            }

                                            {devis.aarem !== 'oui' &&
                                                <td className="bord text-right"
                                                    colSpan="2">
                                                    <b> REMISE < NumberFormat numb={devis.remtht}/>%</b>
                                                < /td>
                                            }
                                            <td className="barder text-right nowrape">< NumberFormat
                                                numb={devis.vremise}/>
                                            </td>
                                        </tr>
                                    }

                                    {devis.aarem === 'tht' &&
                                        <tr>
                                            {devis.aaref === 'oui' &&
                                                <td className="bord"/>
                                            }
                                            <td className="bord"/>
                                            {devis.zone === 'oui' &&
                                                <td className="bord"/>
                                            }
                                            <td className="bord"/>

                                            {devis.aarem === 'oui' &&
                                                <td colSpan="3" className="bord text-right">
                                                    {devis.ptva === 'oui' && <b> TOTAL HT REMISÉ</b>}
                                                    {devis.ptva === 'susp' && <b> TOTAL HT REMISÉ</b>}
                                                    {devis.ptva === 'non' &&
                                                        <>
                                                            {devis.model === 1 &&
                                                                <b>TOTAL HT REMISÉ</b>
                                                            }
                                                            {devis.model === 2 &&
                                                                <b>TOTAL TTC REMISÉ</b>
                                                            }
                                                        </>
                                                    }
                                                </td>
                                            }
                                            {devis.aarem !== 'oui' &&
                                                <td className="bord text-right" colSpan="2">
                                                    {devis.ptva === 'oui' && <b> TOTAL HT REMISÉ</b>}
                                                    {devis.ptva === 'susp' && <b> TOTAL HT REMISÉ</b>}
                                                    {devis.ptva === 'non' &&
                                                        <>
                                                        {devis.model === 1 &&
                                                                <b>TOTAL HT REMISÉ</b>
                                                            }
                                                            {devis.model === 2 &&
                                                                <b>TOTAL TTC REMISÉ</b>
                                                            }
                                                        </>
                                                    }
                                                </td>
                                            }
                                            <td className="barder text-right nowrape">< NumberFormat
                                                numb={devis.totalht}/>
                                            </td>

                                        </tr>
                                    }


                                    {devis.abasetva === 'oui' &&
                                        <tr>
                                            {devis.aaref === 'oui' &&
                                                <td className="bord"/>
                                            }
                                            <td className="bord"/>
                                            {devis.zone === 'oui' &&
                                                <td className="bord"/>
                                            }
                                            <td className="bord"/>
                                            {devis.aarem === 'oui' &&
                                                <td colSpan="3" className="bord text-right">
                                                    <b> BASE TVA</b>
                                                </td>
                                            }

                                            {devis.aarem !== 'oui' &&
                                                <td className="bord text-right" colSpan="2"><b> BASE TVA</b>
                                                </td>
                                            }
                                            <td className="barder text-right nowrape">< NumberFormat
                                                numb={devis.basetva}/>
                                            </td>
                                        </tr>
                                    }

                                    {devis.model === 1 &&
                                        <tr>
                                            {devis.aaref === 'oui' &&
                                                <td className="bord"/>
                                            }
                                            <td className="bord"/>
                                            {devis.zone === 'oui' &&
                                                <td className="bord"/>
                                            }
                                            {devis.aarem === 'oui' &&
                                                <td colSpan="4" className="bord text-right">
                                                    {devis.ptva === 'oui' &&
                                                        <span>TVA(<NumberFormat numb={devis.tva}/>%)</span>
                                                    }
                                                    {devis.ptva === 'susp' &&
                                                        <span>TVA SUSPENDUE(<NumberFormat numb={devis.tva}/>%)</span>
                                                    }
                                                    {devis.ptva === 'non' &&
                                                        <span>TVA NON FACTURÉE(<NumberFormat numb={devis.tva}/>%)</span>
                                                    }
                                                </td>
                                            }
                                            {devis.aarem !== 'oui' &&
                                                <td className="bord text-right" colSpan="3">
                                                    {devis.ptva === 'oui' &&
                                                        <span>TVA(<NumberFormat numb={devis.tva}/>%)</span>
                                                    }
                                                    {devis.ptva === 'susp' &&
                                                        <span>TVA SUSPENDUE(<NumberFormat numb={devis.tva}/>%)</span>
                                                    }
                                                    {devis.ptva === 'non' &&
                                                        <span>TVA NON FACTURÉE(<NumberFormat numb={devis.tva}/>%)</span>
                                                    }
                                                </td>
                                            }
                                            <td className="barder text-right nowrape"><NumberFormat numb={devis.vtva}/>
                                            </td>
                                        </tr>
                                    }

                                    <tr>
                                        {devis.aaref === 'oui' &&
                                            <td className="bord"/>}
                                        <td className="bord"/>
                                        {devis.zone === 'oui' &&
                                            <td className="bord"/>
                                        }
                                        <td className="bord"/>
                                        {devis.aarem === 'oui' &&
                                            <td colSpan="3" className="bord text-right kop"
                                                style={{color: forme.decolor, borderBottom: "1px solid #D3D3D3"}}>TOTAL TTC</td>
                                        }
                                        {devis.aarem !== 'oui' &&
                                            <td colSpan="2" className="bord text-right kop"
                                                style={{color: forme.decolor, borderBottom: "1px solid #D3D3D3"}}>TOTAL TTC</td>
                                        }
                                        <td className="barder text-right kop nowrape"
                                            style={{color: "#000"}}><NumberFormat numb={devis.totalttc}/></td>
                                    </tr>
                                </table>
                                <p style={{clear: "both"}}/>
                                <p className="text-left">
                                    Arrêté le devis à la somme
                                    de:<br/> <b> {numberToLetters(parseInt(devis.totalttc), {lang: 'fr'})}
                                    <span>{devis.monnaie.code}</span></b>
                                </p>
                                <br/>
                                <p style={{float: "right", textDecoration: "underline"}}> SIGNATURE AUTORISÉE </p>
                                <p style={{clear: "both"}}/><br/>
                                {devis.conditions !== null &&
                                    <>
                                        <p className="kop" style={{
                                            float: "left",
                                            color: "#000",
                                            textDecoration: "underline"
                                        }}>INFORMATIONS
                                            ADDITIONNELLES </p>
                                        <p style={{clear: "both"}}/>
                                        <p style={{color: "#000000"}}
                                           dangerouslySetInnerHTML={{__html: devis.conditions}}/>
                                    </>
                                }
                            </div>
                        }
                        {devis.type === "cps" &&
                            <div className="bood" style={{paddingLeft: "1cm", paddingRight: "1cm"}}>
                                <table align="right" style={{marginTop: "10px", marginBottom: "25px"}}>
                                    <tr>
                                        <td style={{border: "none", textAlign: "center", lineHeight: "1.5"}}>
                                            <b>{devis.chantier.client.nomclient}</b> <br/>
                                            <b>{devis.chantier.nomchantier}</b>
                                            {devis.chantier.client.adresse === " " &&
                                                <> <br/> {devis.chantier.client.adresse} </>
                                            }
                                        </td>
                                    </tr>
                                </table>
                                <p style={{clear: "both"}}/>
                                <table cellSpacing="0">
                                    <tr style={{backgroundColor: "#f8f9fa", fontWeight: "700", width: "45%"}}>
                                        <td className="borde"> DATE</td>
                                        <td className="borde"> N° DEVIS</td>
                                    </tr>
                                    <tr>
                                        <td className="borde">{devdate}</td>
                                        <td className="borde"> {devis.iddevis}</td>
                                    </tr>
                                    <tr>
                                        <td colSpan="4"
                                            className="borde">
                                            <span style={{
                                                textDecoration: "underline",
                                                lineHeight: "1.2",
                                                fontWeight: "bold"
                                            }}> RÉFÉRENCE </span><br/>
                                            <span dangerouslySetInnerHTML={{__html: devis.devreference}}/></td>
                                    </tr>
                                </table>
                                <table style={{width: "100%", marginTop: "20px"}} cellSpacing="0">
                                    <tr className="printa">
                                        <th className="borde text-left" style={{minWidth: "140px"}}> Nº COMMANDE</th>
                                        <th className="bor text-left" colSpan="2"
                                            style={{maxWidth: "500px", minWidth: "200px"}}> DÉSIGNATION
                                        </th>
                                        <th className="borde text-left"> RÉF</th>
                                        <th className="borde text-center" style={{minWidth: "100px"}}> UNITÉ</th>
                                        <th className="borde text-center"> PRIX&nbsp;U.</th>
                                    </tr>

                                    {renderBons}

                                </table>
                            </div>
                        }
                        <div className="footer">
                            {forme.typeFooter !== "aucun" &&
                                <>
                                    {forme.typeFooter === "texte" &&
                                        <p style={{
                                            fontSize: forme.piedsize + "px",
                                            textAlign: "center",
                                            paddingLeft: "1cm",
                                            paddingRight: "1cm"
                                        }}
                                           dangerouslySetInnerHTML={{__html: forme.pied}}/>
                                    }
                                    {forme.typeFooter === "image" &&
                                        <img src={`/gallery/${forme.footerImage}`}
                                             style={{
                                                 width: "21cm",
                                                 height: forme.footerHeight + "cm",
                                             }}
                                             alt=""/>
                                    }
                                </>
                            }
                            {forme.typeFooter === "aucun" &&
                                <>
                                    <h5 className="text-center col-black">Dimension de la zone de pied de
                                        page = {forme.footerHeight}cm x {forme.headerWith}cm</h5>
                                    <h6 className="text-center col-blue-grey">Veuillez cliquer sur le bouton <b>"MISE EN
                                        FORME
                                        DU DEVIS"</b> pour apporter des modifications svp.</h6>
                                </>
                            }
                        </div>
                    </div>
                    {/* FIN TRAITEMENT */}

                    {/* IMPRESSION */}
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
                                            {devis.type !== "cps" &&
                                                <>
                                                <table style={{
                                                    width: "100%",
                                                    marginTop: "20px",
                                                    border: "1px solid #D3D3D3"
                                                }} cellSpacing="0">
                                                    <tr style={{paddingLeft: ""}}>
                                                        <td style={{width: "60%", valign: "top"}}>
                                                            <p style={{paddingLeft: "10px"}}>Titre du
                                                                projet: <b>{devis.chantier.nomchantier}</b></p>
                                                            <p style={{paddingLeft: "10px"}}>Référence/Oblet:<br/><span
                                                                style={{fontWeight: "bold"}}
                                                                dangerouslySetInnerHTML={{__html: devis.devreference}}/>
                                                            </p>
                                                            <br/>
                                                            <p style={{paddingLeft: "10px"}}>Date: <b>{devdate}</b></p>
                                                            <p style={{paddingLeft: "10px"}}>Validité du
                                                                devis: <b>{devis.validit}</b></p>
                                                            <p style={{paddingLeft: "10px"}}>Affaire suivie
                                                                par: {devis.contact != null &&
                                                                    <b>{devis.contact.contact}</b>}</p>
                                                        </td>
                                                        <td style={{width: "40%", valign: "top"}}>
                                                            <h4><b>DEVIS Nº: {devis.iddevis}</b></h4><br/>
                                                            <p>Client: <b>{devis.chantier.client.nomclient}</b></p>
                                                            <p>Nº Client: <b>{devis.chantier.client.code}</b></p>
                                                            <p>Adresse: <b>{devis.chantier.client.adresse}</b></p>
                                                            <p>Téléphone: <b>{devis.chantier.client.contact}</b></p>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <table style={{width: "100%", marginTop: "20px"}} cellSpacing="0">
                                                    <tr className="printa">
                                                        {devis.aaref === 'oui' &&
                                                            <th className="borde text-center"> RÉF</th>
                                                        }
                                                        <th className="borde text-center"> UNITÉ</th>
                                                        <th className="bor text-left"
                                                            style={{maxWidth: "500px", minWidth: "150px"}}> DÉSIGNATION
                                                        </th>
                                                        {devis.zone === 'oui' &&
                                                            <th className="borde text-center"> SECTION </th>
                                                        }
                                                        <th className="borde text-center mw60"> QTÉS</th>
                                                        <th className="borde text-center"> PRIX&nbsp;U.</th>
                                                        {devis.aarem === 'oui' &&
                                                            <th className="borde text-center">%REM</th>
                                                        }
                                                        <th className="borde text-center"
                                                            style={{minWidth: "120px"}}>TOTAUX
                                                        </th>
                                                    </tr>

                                                    {renderGroupe}
                                                    {renderLigne}

                                                    <tr>
                                                        {devis.aaref === 'oui' &&
                                                            <td className="bord"/>
                                                        }
                                                        <td className="bord"/>
                                                        {devis.zone === 'oui' &&
                                                            <td className="bord"/>
                                                        }
                                                        <td className="bord"/>

                                                        {devis.aarem === 'oui' &&
                                                            <td colSpan="3" className="bord text-right">
                                                                {devis.ptva === 'oui' && <b> TOTAL HT </b>}
                                                                {devis.ptva === 'susp' && <b> TOTAL HT </b>}
                                                                {devis.ptva === 'non' &&
                                                                    <>
                                                                        {devis.model === 1 &&
                                                                            <b>TOTAL HT</b>
                                                                        }
                                                                        {devis.model === 2 &&
                                                                            <b>TOTAL TTC</b>
                                                                        }
                                                                    </>
                                                                }
                                                            </td>
                                                        }
                                                        {devis.aarem !== 'oui' &&
                                                            <td className="bord text-right" colSpan="2">
                                                                {devis.ptva === 'oui' && <b> TOTAL HT </b>}
                                                                {devis.ptva === 'susp' && <b> TOTAL HT </b>}
                                                                {devis.ptva === 'non' &&
                                                                    <>
                                                                        {devis.model === 1 &&
                                                                            <b>TOTAL HT </b>
                                                                        }
                                                                        {devis.model === 2 &&
                                                                            <b>TOTAL TTC </b>
                                                                        }
                                                                    </>
                                                                }
                                                            </td>
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
                                                    </tr>

                                                    {devis.aarem === 'oui' &&
                                                        <tr> {devis.aaref === 'oui' && <td className="bord"/>}
                                                            <td className="bord"/>
                                                            {devis.zone === 'oui' &&
                                                                <td className="bord"/>
                                                            }
                                                            <td className="bord"/>
                                                            {devis.aarem === 'oui' &&
                                                                <td colSpan="3" className="bord text-right">
                                                                    <b> REMISE</b>
                                                                </td>
                                                            }
                                                            <td className="barder text-right nowrape"><NumberFormat
                                                                numb={devis.vremise}/>
                                                            </td>
                                                        </tr>
                                                    }
                                                    {devis.aarem === 'tht' &&
                                                        <tr>
                                                            {devis.aaref === 'oui' && <td className="bord"/>}
                                                            <td className="bord"/>
                                                            {devis.zone === 'oui' && <td className="bord"/>}
                                                            <td className="bord"/>
                                                            {devis.aarem === 'oui' &&
                                                                <td colSpan="3" className="bord text-right">
                                                                    <b> REMISE < NumberFormat numb={devis.remtht}/>%</b>
                                                                </td>
                                                            }

                                                            {devis.aarem !== 'oui' &&
                                                                <td className="bord text-right"
                                                                    colSpan="2">
                                                                    <b> REMISE < NumberFormat numb={devis.remtht}/>%</b>
                                                                < /td>
                                                            }
                                                            <td className="barder text-right nowrape">< NumberFormat
                                                                numb={devis.vremise}/>
                                                            </td>
                                                        </tr>
                                                    }

                                                    {devis.aarem === 'tht' &&
                                                        <tr>
                                                            {devis.aaref === 'oui' &&
                                                                <td className="bord"/>
                                                            }
                                                            <td className="bord"/>
                                                            {devis.zone === 'oui' &&
                                                                <td className="bord"/>
                                                            }
                                                            <td className="bord"/>

                                                            {devis.aarem === 'oui' &&
                                                                <td colSpan="3" className="bord text-right">
                                                                    {devis.ptva === 'oui' && <b> TOTAL HT REMISÉ</b>}
                                                                    {devis.ptva === 'susp' && <b> TOTAL HT REMISÉ</b>}
                                                                    {devis.ptva === 'non' &&
                                                                        <>
                                                                            {devis.model === 1 &&
                                                                                <b>TOTAL HT REMISÉ</b>
                                                                            }
                                                                            {devis.model === 2 &&
                                                                                <b>TOTAL TTC REMISÉ</b>
                                                                            }
                                                                        </>
                                                                    }
                                                                </td>
                                                            }
                                                            {devis.aarem !== 'oui' &&
                                                                <td className="bord text-right" colSpan="2">
                                                                    {devis.ptva === 'oui' && <b> TOTAL HT REMISÉ</b>}
                                                                    {devis.ptva === 'susp' && <b> TOTAL HT REMISÉ</b>}
                                                                    {devis.ptva === 'non' &&
                                                                        <>
                                                                            {devis.model === 1 &&
                                                                                <b>TOTAL HT REMISÉ</b>
                                                                            }
                                                                            {devis.model === 2 &&
                                                                                <b>TOTAL TTC REMISÉ</b>
                                                                            }
                                                                        </>
                                                                    }
                                                                </td>
                                                            }
                                                            <td className="barder text-right nowrape">< NumberFormat
                                                                numb={devis.totalht}/>
                                                            </td>

                                                        </tr>
                                                    }


                                                    {devis.abasetva === 'oui' &&
                                                        <tr>
                                                            {devis.aaref === 'oui' &&
                                                                <td className="bord"/>
                                                            }
                                                            <td className="bord"/>
                                                            {devis.zone === 'oui' &&
                                                                <td className="bord"/>
                                                            }
                                                            <td className="bord"/>
                                                            {devis.aarem === 'oui' &&
                                                                <td colSpan="3" className="bord text-right">
                                                                    <b> BASE TVA</b>
                                                                </td>
                                                            }

                                                            {devis.aarem !== 'oui' &&
                                                                <td className="bord text-right" colSpan="2"><b> BASE
                                                                    TVA</b>
                                                                </td>
                                                            }
                                                            <td className="barder text-right nowrape">< NumberFormat
                                                                numb={devis.basetva}/>
                                                            </td>
                                                        </tr>
                                                    }
                                                    {devis.model === 1 &&
                                                        <tr>
                                                            {devis.aaref === 'oui' &&
                                                                <td className="bord"/>
                                                            }
                                                            <td className="bord"/>
                                                            {devis.zone === 'oui' &&
                                                                <td className="bord"/>
                                                            }
                                                            {devis.aarem === 'oui' &&
                                                                <td colSpan="4" className="bord text-right">
                                                                    {devis.ptva === 'oui' &&
                                                                        <span>TVA(<NumberFormat
                                                                            numb={devis.tva}/>%)</span>
                                                                    }
                                                                    {devis.ptva === 'susp' &&
                                                                        <span>TVA SUSPENDUE(<NumberFormat
                                                                            numb={devis.tva}/>%)</span>
                                                                    }
                                                                    {devis.ptva === 'non' &&
                                                                        <span>TVA NON FACTURÉE(<NumberFormat
                                                                            numb={devis.tva}/>%)</span>
                                                                    }
                                                                </td>
                                                            }
                                                            {devis.aarem !== 'oui' &&
                                                                <td className="bord text-right" colSpan="3">
                                                                    {devis.ptva === 'oui' &&
                                                                        <span>TVA(<NumberFormat
                                                                            numb={devis.tva}/>%)</span>
                                                                    }
                                                                    {devis.ptva === 'susp' &&
                                                                        <span>TVA SUSPENDUE(<NumberFormat
                                                                            numb={devis.tva}/>%)</span>
                                                                    }
                                                                    {devis.ptva === 'non' &&
                                                                        <span>TVA NON FACTURÉE(<NumberFormat
                                                                            numb={devis.tva}/>%)</span>
                                                                    }
                                                                </td>
                                                            }
                                                            <td className="barder text-right nowrape"><NumberFormat
                                                                numb={devis.vtva}/>
                                                            </td>
                                                        </tr>
                                                    }

                                                    <tr>
                                                        {devis.aaref === 'oui' &&
                                                            <td className="bord"/>}
                                                        <td className="bord"/>
                                                        {devis.zone === 'oui' &&
                                                            <td className="bord"/>
                                                        }
                                                        <td className="bord"/>
                                                        {devis.aarem === 'oui' &&
                                                            <td colSpan="3" className="bord text-right kop"
                                                                style={{
                                                                    color: "#000",
                                                                    borderBottom: "1px solid #D3D3D3"
                                                                }}>TOTAL TTC</td>
                                                        }
                                                        {devis.aarem !== 'oui' &&
                                                            <td colSpan="2" className="bord text-right kop"
                                                                style={{
                                                                    color: "#000",
                                                                    borderBottom: "1px solid #D3D3D3"
                                                                }}>TOTAL TTC</td>
                                                        }
                                                        <td className="barder text-right kop nowrape"
                                                            style={{color: "#000"}}><NumberFormat
                                                            numb={devis.totalttc}/></td>
                                                    </tr>
                                                </table>
                                                <p style={{clear: "both"}}/>
                                                <p className="text-left">
                                                    Arrêté le devis à la somme
                                                    de:<br/><b>  {numberToLetters(parseInt(devis.totalttc), {lang: 'fr'})}
                                                    <span>{devis.monnaie.code}</span></b>
                                                </p>
                                                <br/>
                                                    <p style={{float: "right", textDecoration: "underline"}}> SIGNATURE
                                                        AUTORISÉE </p>
                                                    <p style={{clear: "both"}}/><br/>
                                                    {devis.conditions !== null &&
                                                        <>
                                                            <p className="kop" style={{
                                                                float: "left",
                                                                color: "#000",
                                                                textDecoration: "underline"
                                                            }}>INFORMATIONS
                                                                ADDITIONNELLES </p>
                                                            <p style={{clear: "both"}}/>
                                                            <p style={{color: "#000000"}}
                                                               dangerouslySetInnerHTML={{__html: devis.conditions}}/>
                                                        </>
                                                    }
                                                </>
                                            }
                                            {devis.type === "cps" &&
                                                <>
                                                    <table align="right">
                                                        <tr>
                                                            <td style={{
                                                                border: "none",
                                                                textAlign: "center",
                                                                lineHeight: "1.5"
                                                            }}>
                                                                <b>{devis.chantier.client.nomclient}</b> <br/>
                                                                <b>{devis.chantier.nomchantier}</b>
                                                                {devis.chantier.client.adresse === " " &&
                                                                    <> <br/> {devis.chantier.client.adresse} </>
                                                                }
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <p style={{clear: "both"}}/>
                                                    <table>
                                                        <tr style={{
                                                            backgroundColor: "#f8f9fa",
                                                            fontWeight: "700",
                                                            width: "45%"
                                                        }}>
                                                            <td className="borde"> DATE</td>
                                                            <td className="borde"> N° DEVIS</td>
                                                        </tr>
                                                        <tr>
                                                            <td className="borde">{devdate}</td>
                                                            <td className="borde"> {devis.iddevis}</td>
                                                        </tr>
                                                        <tr>
                                                            <td colSpan="4"
                                                                className="borde">
                                            <span style={{
                                                textDecoration: "underline",
                                                lineHeight: "1.2",
                                                fontWeight: "bold"
                                            }}> RÉFÉRENCE </span><br/>
                                                                <span
                                                                    dangerouslySetInnerHTML={{__html: devis.devreference}}/>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table style={{width: "100%", marginTop: "20px"}} cellSpacing="0">
                                                        <tr className="printa">
                                                            <th className="borde text-left"
                                                                style={{minWidth: "140px"}}> Nº
                                                                COMMANDE
                                                            </th>
                                                            <th className="bor text-left" colSpan="2"
                                                                style={{
                                                                    maxWidth: "500px",
                                                                    minWidth: "200px"
                                                                }}> DÉSIGNATION
                                                            </th>
                                                            <th className="borde text-left"> RÉF</th>
                                                            <th className="borde text-center"
                                                                style={{minWidth: "100px"}}> UNITÉ
                                                            </th>
                                                            <th className="borde text-center"> PRIX&nbsp;U.</th>
                                                        </tr>

                                                        {renderBons}

                                                    </table>
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
                            </div>
                            <div className="footer">
                                {forme.pied !== "aucun" &&
                                    <>
                                        {forme.typeFooter === "texte" &&
                                            <p style={{
                                                fontSize: forme.piedsize + "px",
                                                textAlign: "center",
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
                    {/* FIN IMPRESSION */}
                </>
            }

            {devis.modele === 3 &&
                <>
                    {/* TRAITEMENT */}
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
                        }}>
                            {forme.typeEntete !== "aucun" &&
                                <>
                                    {forme.typeEntete === "image" &&
                                        <>
                                            <table style={{width: "100%", marginTop: "20px"}} cellSpacing="0">
                                                <tr>
                                                    <td style={{width: "60%", valign: "top"}}>
                                                        <img src={`/gallery/${forme.link}`}
                                                             style={{
                                                                 width: "10cm",
                                                                 height: forme.teteY + "cm",
                                                                 paddingRight: forme.teteDD + "cm",
                                                                 paddingLeft: forme.teteDG + "cm",
                                                                 paddingTop: forme.teteDH + "cm",
                                                                 paddingBottom: forme.teteDB + "cm",
                                                             }}
                                                             alt=""/>
                                                    </td>
                                                    <td style={{width: "40%", valign: "top"}}>
                                                        <table align="center" style={{marginRight: forme.teteDD + "cm", marginTop: forme.teteDH + "cm",}}>
                                                            <tr>
                                                                <td style={{
                                                                    border: "none",
                                                                    textAlign: "center",
                                                                    lineHeight: "1.5"
                                                                }}>
                                                                    <div style={{border: "1px solid #D3D3D3", padding: "20px", borderRadius: "20px", textAlign: "left"}}>
                                                                        <h4><u style={{fontWeight: "bold"}}>DEVIS Nº: {devis.iddevis}</u></h4>
                                                                        <h5>Date: <b>{devdate}</b><br/>
                                                                            Nº Client: <b>{devis.chantier.client.code}</b><br/>
                                                                            Devis valable: <b>{devis.validit}</b><br/>
                                                                            Contact Client: {devis.contact != null && <b>{devis.contact.contact}</b>}
                                                                        </h5>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </>
                                    }
                                    {forme.typeEntete === "texte" &&
                                        <p className="cocolor" style={{
                                            paddingRight: forme.teteDD + "cm",
                                            paddingLeft: forme.teteDG + "cm",
                                            paddingTop: forme.teteDH + "cm",
                                            paddingBottom: forme.teteDB + "cm",
                                        }} dangerouslySetInnerHTML={{__html: forme.headerText}}/>
                                    }
                                </>
                            }
                            {forme.typeEntete === "aucun" &&
                                <>
                                    <h3 className="text-center col-black"><br/><br/>Dimension de la zone
                                        d'entête<br/>{forme.headerHeight}cm x {forme.headerWith}cm</h3>
                                    <h5 className="text-center col-blue-grey">Veuillez cliquer sur le bouton <b>"MISE EN
                                        FORME
                                        DU DEVIS"</b> pour apporter des modifications svp.</h5>
                                </>
                            }
                        </div>
                        <p style={{clear: "both"}}/>
                        {devis.type !== "cps" &&
                            <div className="bood" style={{paddingLeft: "1cm", paddingRight: "1cm", marginTop: "30px"}}>
                                <table cellSpacing="0" style={{width: "19cm"}}>
                                    <tr>
                                        <td style={{width: "70%"}}>
                                            <h4><b>{usa.societe.toUpperCase()}</b></h4>
                                            <p style={{textAlign: "left"}}>
                                                Mail: <b>{usa.username}</b><br/>
                                                Téléphone: <b>{usa.contact}</b><br/>
                                                Adresse: <b>{usa.adresse}</b>
                                            </p>
                                            <p style={{textAlign: "left"}}><b>Référence/Objet:</b><br/>
                                                <span dangerouslySetInnerHTML={{__html: devis.devreference}}/>
                                            </p>
                                        </td>
                                        <td style={{width: "30%", valign: "top", textAlign: "right"}}>
                                            <p style={{textAlign: "center", float: "right", padding: "10px", border: "1px solid #D3D3D3", borderRadius: "20px"}}>Client: <b>{devis.chantier.client.nomclient}</b><br/>
                                                Nº Client: <b>{devis.chantier.client.code}</b><br/>
                                                Adresse: <b>{devis.chantier.client.adresse}</b><br/>
                                                Téléphone: <b>{devis.chantier.client.contact}</b></p>
                                        </td>
                                    </tr>
                                </table>
                                <table style={{width: "100%", marginTop: "20px"}} cellSpacing="0">
                                    <tr className="printa"> {
                                        devis.aaref === 'oui' &&
                                        <th className="borde text-center"> RÉF</th>}
                                        <th className="bor text-left"
                                            style={{maxWidth: "500px", minWidth: "200px"}}> DÉSIGNATION
                                        </th>
                                        {devis.zone === 'oui' &&
                                            <th className="borde text-center"> SECTION </th>
                                        }
                                        <th className="borde text-center"> UNITÉ</th>
                                        <th className="borde text-center mw60"> QTÉ</th>
                                        <th className="borde text-center"> PRIX&nbsp;U.</th>
                                        {devis.aarem === 'oui' &&
                                            <th className="borde text-center">%REM</th>
                                        }
                                        <th className="borde text-center" style={{minWidth: "120px"}}>MONTANT HT</th>
                                    </tr>

                                    {renderGroupe}
                                    {renderLigne}

                                    <tr>
                                        {devis.aaref === 'oui' &&
                                            <td className="bord"/>
                                        }
                                        <td className="bord"/>
                                        {devis.zone === 'oui' &&
                                            <td className="bord"/>
                                        }
                                        <td className="bord"/>

                                        {devis.aarem === 'oui' &&
                                            <td colSpan="3" className="bord text-right">
                                                {devis.ptva === 'oui' && <b> TOTAL HT </b>}
                                                {devis.ptva === 'susp' && <b> TOTAL HT </b>}
                                                {devis.ptva === 'non' &&
                                                    <>
                                                        {devis.model === 1 &&
                                                            <b>TOTAL HT </b>
                                                        }
                                                        {devis.model === 2 &&
                                                            <b>TOTAL TTC </b>
                                                        }
                                                    </>

                                                }
                                            </td>
                                        }
                                        {devis.aarem !== 'oui' &&
                                            <td className="bord text-right" colSpan="2">
                                                {devis.ptva === 'oui' && <b> TOTAL HT </b>}
                                                {devis.ptva === 'susp' && <b> TOTAL HT </b>}
                                                {devis.ptva === 'non' &&
                                                    <>
                                                        {devis.model === 1 &&
                                                            <b>TOTAL HT </b>
                                                        }
                                                        {devis.model === 2 &&
                                                            <b>TOTAL TTC </b>
                                                        }
                                                    </>

                                                }
                                            </td>
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
                                    </tr>

                                    {devis.aarem === 'oui' &&
                                        <tr> {devis.aaref === 'oui' && <td className="bord"/>}
                                            <td className="bord"/>
                                            {devis.zone === 'oui' &&
                                                <td className="bord"/>
                                            }
                                            <td className="bord"/>
                                            {devis.aarem === 'oui' &&
                                                <td colSpan="3" className="bord text-right"><b> REMISE</b>
                                                </td>
                                            }
                                            <td className="barder text-right nowrape"><NumberFormat
                                                numb={devis.vremise}/>
                                            </td>
                                        </tr>
                                    }
                                    {devis.aarem === 'tht' &&
                                        <tr>
                                            {devis.aaref === 'oui' && <td className="bord"/>}
                                            <td className="bord"/>
                                            {devis.zone === 'oui' && <td className="bord"/>}
                                            <td className="bord"/>
                                            {devis.aarem === 'oui' &&
                                                <td colSpan="3" className="bord text-right">
                                                    <b> REMISE < NumberFormat numb={devis.remtht}/>%</b>
                                                </td>
                                            }

                                            {devis.aarem !== 'oui' &&
                                                <td className="bord text-right"
                                                    colSpan="2">
                                                    <b> REMISE < NumberFormat numb={devis.remtht}/>%</b>
                                                < /td>
                                            }
                                            <td className="barder text-right nowrape">< NumberFormat
                                                numb={devis.vremise}/>
                                            </td>
                                        </tr>
                                    }
                                    {devis.aarem === 'tht' &&
                                        <tr>
                                            {devis.aaref === 'oui' &&
                                                <td className="bord"/>
                                            }
                                            <td className="bord"/>
                                            {devis.zone === 'oui' &&
                                                <td className="bord"/>
                                            }
                                            <td className="bord"/>

                                            {devis.aarem === 'oui' &&
                                                <td colSpan="3" className="bord text-right">
                                                    {devis.ptva === 'oui' && <b> TOTAL HT REMISÉ</b>}
                                                    {devis.ptva === 'susp' && <b> TOTAL HT REMISÉ</b>}
                                                    {devis.ptva === 'non' &&
                                                        <>
                                                            {devis.model === 1 &&
                                                                <b>TOTAL HT REMISÉ</b>
                                                            }
                                                            {devis.model === 2 &&
                                                                <b>TOTAL TTC REMISÉ</b>
                                                            }
                                                        </>
                                                    }
                                                </td>
                                            }
                                            {devis.aarem !== 'oui' &&
                                                <td className="bord text-right" colSpan="2">
                                                    {devis.ptva === 'oui' && <b> TOTAL HT REMISÉ</b>}
                                                    {devis.ptva === 'susp' && <b> TOTAL HT REMISÉ</b>}
                                                    {devis.ptva === 'non' &&
                                                        <>
                                                            {devis.model === 1 &&
                                                                <b>TOTAL HT REMISÉ</b>
                                                            }
                                                            {devis.model === 2 &&
                                                                <b>TOTAL TTC REMISÉ</b>
                                                            }
                                                        </>
                                                    }
                                                </td>
                                            }
                                            <td className="barder text-right nowrape">< NumberFormat
                                                numb={devis.totalht}/>
                                            </td>

                                        </tr>
                                    }
                                    {devis.abasetva === 'oui' &&
                                        <tr>
                                            {devis.aaref === 'oui' &&
                                                <td className="bord"/>
                                            }
                                            <td className="bord"/>
                                            {devis.zone === 'oui' &&
                                                <td className="bord"/>
                                            }
                                            <td className="bord"/>
                                            {devis.aarem === 'oui' &&
                                                <td colSpan="3" className="bord text-right">
                                                    <b> BASE TVA</b>
                                                </td>
                                            }

                                            {devis.aarem !== 'oui' &&
                                                <td className="bord text-right" colSpan="2"><b> BASE TVA</b>
                                                </td>
                                            }
                                            <td className="barder text-right nowrape">< NumberFormat
                                                numb={devis.basetva}/>
                                            </td>
                                        </tr>
                                    }
                                    {devis.model === 1 &&
                                        <tr>
                                            {devis.aaref === 'oui' &&
                                                <td className="bord"/>
                                            }
                                            <td className="bord"/>
                                            {devis.zone === 'oui' &&
                                                <td className="bord"/>
                                            }

                                            {devis.aarem === 'oui' &&
                                                <td colSpan="4" className="bord text-right">
                                                    {devis.ptva === 'oui' &&
                                                        <span>TVA(<NumberFormat numb={devis.tva}/>%)</span>
                                                    }
                                                    {devis.ptva === 'susp' &&
                                                        <span>TVA SUSPENDUE(<NumberFormat numb={devis.tva}/>%)</span>
                                                    }
                                                    {devis.ptva === 'non' &&
                                                        <span>TVA NON FACTURÉE(<NumberFormat numb={devis.tva}/>%)</span>
                                                    }
                                                </td>
                                            }
                                            {devis.aarem !== 'oui' &&
                                                <td className="bord text-right" colSpan="3">
                                                    {devis.ptva === 'oui' &&
                                                        <span>TVA(<NumberFormat numb={devis.tva}/>%)</span>
                                                    }
                                                    {devis.ptva === 'susp' &&
                                                        <span>TVA SUSPENDUE(<NumberFormat numb={devis.tva}/>%)</span>
                                                    }
                                                    {devis.ptva === 'non' &&
                                                        <span>TVA NON FACTURÉE(<NumberFormat numb={devis.tva}/>%)</span>
                                                    }
                                                </td>
                                            }
                                            <td className="barder text-right nowrape"><NumberFormat numb={devis.vtva}/>
                                            </td>
                                        </tr>
                                    }

                                    <tr>
                                        {devis.aaref === 'oui' &&
                                            <td className="bord"/>}
                                        <td className="bord"/>
                                        {devis.zone === 'oui' &&
                                            <td className="bord"/>
                                        }
                                        <td className="bord"/>
                                        {devis.aarem === 'oui' &&
                                            <td colSpan="3" className="bord text-right kop"
                                                style={{color: "#000", borderBottom: "1px solid #D3D3D3"}}>TOTAL TTC</td>
                                        }
                                        {devis.aarem !== 'oui' &&
                                            <td colSpan="2" className="bord text-right kop"
                                                style={{color: "#000", borderBottom: "1px solid #D3D3D3"}}>TOTAL TTC</td>
                                        }
                                        <td className="barder text-right kop nowrape"
                                            style={{color: "#000"}}><NumberFormat numb={devis.totalttc}/></td>
                                    </tr>
                                </table>
                                <p style={{clear: "both"}}/>
                                <p className="text-left">
                                    Arrêté le devis à la somme
                                    de:<br/><b>{numberToLetters(parseInt(devis.totalttc), {lang: 'fr'})}
                                    <span> {devis.monnaie.code}</span></b>
                                </p>
                                <br/>
                                <p style={{float: "right", textDecoration: "underline"}}> SIGNATURE AUTORISÉE </p>
                                <p style={{clear: "both"}}/><br/>
                                {devis.conditions !== null &&
                                    <>
                                        <p className="kop" style={{
                                            float: "left",
                                            color: "#000",
                                            textDecoration: "underline"
                                        }}>INFORMATIONS
                                            ADDITIONNELLES </p>
                                        <p style={{clear: "both"}}/>
                                        <p style={{color: "#000000"}}
                                           dangerouslySetInnerHTML={{__html: devis.conditions}}/>
                                    </>
                                }
                            </div>
                        }
                        {devis.type === "cps" &&
                            <div className="bood" style={{paddingLeft: "1cm", paddingRight: "1cm"}}>
                                <table align="right" style={{marginTop: "10px", marginBottom: "25px"}}>
                                    <tr>
                                        <td style={{border: "none", textAlign: "center", lineHeight: "1.5"}}>
                                            <b>{devis.chantier.client.nomclient}</b> <br/>
                                            <b>{devis.chantier.nomchantier}</b>
                                            {devis.chantier.client.adresse === " " &&
                                                <> <br/> {devis.chantier.client.adresse} </>
                                            }
                                        </td>
                                    </tr>
                                </table>
                                <p style={{clear: "both"}}/>
                                <table cellSpacing="0">
                                    <tr style={{backgroundColor: "#f8f9fa", fontWeight: "700", width: "45%"}}>
                                        <td className="borde"> DATE</td>
                                        <td className="borde"> N° DEVIS</td>
                                    </tr>
                                    <tr>
                                        <td className="borde">{devdate}</td>
                                        <td className="borde"> {devis.iddevis}</td>
                                    </tr>
                                    <tr>
                                        <td colSpan="4"
                                            className="borde">
                                            <span style={{
                                                textDecoration: "underline",
                                                lineHeight: "1.2",
                                                fontWeight: "bold"
                                            }}> RÉFÉRENCE </span><br/>
                                            <span dangerouslySetInnerHTML={{__html: devis.devreference}}/></td>
                                    </tr>
                                </table>
                                <table style={{width: "100%", marginTop: "20px"}} cellSpacing="0">
                                    <tr className="printa">
                                        <th className="borde text-left" style={{minWidth: "140px"}}> Nº COMMANDE</th>
                                        <th className="bor text-left" colSpan="2"
                                            style={{maxWidth: "500px", minWidth: "200px"}}> DÉSIGNATION
                                        </th>
                                        <th className="borde text-left"> RÉF</th>
                                        <th className="borde text-center" style={{minWidth: "100px"}}> UNITÉ</th>
                                        <th className="borde text-center"> PRIX&nbsp;U.</th>
                                    </tr>

                                    {renderBons}

                                </table>
                            </div>
                        }
                        <div className="footer">
                            {forme.typeFooter !== "aucun" &&
                                <>
                                    {forme.typeFooter === "texte" &&
                                        <p style={{
                                            fontSize: forme.piedsize + "px",
                                            textAlign: "center",
                                            paddingLeft: "1cm",
                                            paddingRight: "1cm"
                                        }}
                                           dangerouslySetInnerHTML={{__html: forme.pied}}/>
                                    }
                                    {forme.typeFooter === "image" &&
                                        <img src={`/gallery/${forme.footerImage}`}
                                             style={{
                                                 width: "21cm",
                                                 height: forme.footerHeight + "cm",
                                             }}
                                             alt=""/>
                                    }
                                </>
                            }
                            {forme.typeFooter === "aucun" &&
                                <>
                                    <h5 className="text-center col-black">Dimension de la zone de pied de
                                        page = {forme.footerHeight}cm x {forme.headerWith}cm</h5>
                                    <h6 className="text-center col-blue-grey">Veuillez cliquer sur le bouton <b>"MISE EN
                                        FORME
                                        DU DEVIS"</b> pour apporter des modifications svp.</h6>
                                </>
                            }
                        </div>
                    </div>
                    {/* FIN TRAITEMENT */}

                    {/* IMPRESSION */}
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
                                            <>
                                                <table style={{width: "100%", marginTop: "20px"}} cellSpacing="0">
                                                    <tr>
                                                        <td style={{width: "60%", valign: "top"}}>
                                                            <img src={`/gallery/${forme.link}`}
                                                                 style={{
                                                                     width: "10cm",
                                                                     height: forme.teteY + "cm",
                                                                     paddingRight: forme.teteDD + "cm",
                                                                     paddingLeft: forme.teteDG + "cm",
                                                                     paddingTop: forme.teteDH + "cm",
                                                                     paddingBottom: forme.teteDB + "cm",
                                                                 }}
                                                                 alt=""/>
                                                        </td>
                                                        <td style={{width: "40%", valign: "top"}}>
                                                            <table align="center" style={{marginRight: forme.teteDD + "cm", marginTop: forme.teteDH + "cm",}}>
                                                                <tr>
                                                                    <td style={{
                                                                        border: "none",
                                                                        textAlign: "center",
                                                                        lineHeight: "1.5"
                                                                    }}>
                                                                        <div style={{border: "1px solid #D3D3D3", padding: "20px", borderRadius: "20px", textAlign: "left"}}>
                                                                            <h4><u style={{fontWeight: "bold"}}>DEVIS Nº: {devis.iddevis}</u></h4>
                                                                            <h5>Date: <b>{devdate}</b><br/>
                                                                                Nº Client: <b>{devis.chantier.client.code}</b><br/>
                                                                                Devis valable: <b>{devis.validit}</b><br/>
                                                                                Contact Client: {devis.contact != null && <b>{devis.contact.contact}</b>}
                                                                            </h5>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </>
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
                                            {devis.type !== "cps" &&
                                                <>
                                                    <p style={{clear: "both"}}/>
                                                    <table cellSpacing="0" style={{width: "19cm"}}>
                                                        <tr>
                                                            <td style={{width: "70%"}}>
                                                                <h4><b>{usa.societe.toUpperCase()}</b></h4>
                                                                <p style={{textAlign: "left"}}>
                                                                    Mail: <b>{usa.username}</b><br/>
                                                                    Téléphone: <b>{usa.contact}</b><br/>
                                                                    Adresse: <b>{usa.adresse}</b>
                                                                </p>
                                                                <p style={{textAlign: "left"}}><b>Référence/Objet:</b><br/>
                                                                    <span dangerouslySetInnerHTML={{__html: devis.devreference}}/>
                                                                </p>
                                                            </td>
                                                            <td style={{width: "30%", valign: "top", textAlign: "right"}}>
                                                                <p style={{textAlign: "center", float: "right", padding: "10px", border: "1px solid #D3D3D3", borderRadius: "20px"}}>Client: <b>{devis.chantier.client.nomclient}</b><br/>
                                                                    Nº Client: <b>{devis.chantier.client.code}</b><br/>
                                                                    Adresse: <b>{devis.chantier.client.adresse}</b><br/>
                                                                    Téléphone: <b>{devis.chantier.client.contact}</b></p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table style={{width: "100%", marginTop: "20px"}} cellSpacing="0">
                                                        <tr className="printa"> {
                                                            devis.aaref === 'oui' &&
                                                            <th className="borde text-center"> RÉF </th>}
                                                            <th className="bor text-left"
                                                                style={{
                                                                    maxWidth: "500px",
                                                                    minWidth: "200px"
                                                                }}> DÉSIGNATION
                                                            </th>
                                                            {devis.zone === 'oui' &&
                                                                <th className="borde text-center"> SECTION </th>
                                                            }
                                                            <th className="borde text-center"> UNITÉ</th>
                                                            <th className="borde text-center mw60"> QTÉ</th>
                                                            <th className="borde text-center"> PRIX&nbsp;U.</th>
                                                            {devis.aarem === 'oui' &&
                                                                <th className="borde text-center">%REM</th>
                                                            }
                                                            <th className="borde text-center"> MONTANT</th>
                                                        </tr>

                                                        {renderGroupe}
                                                        {renderLigne}


                                                        <tr>
                                                            {devis.aaref === 'oui' &&
                                                                <td className="bord"/>
                                                            }
                                                            <td className="bord"/>
                                                            {devis.zone === 'oui' &&
                                                                <td className="bord"/>
                                                            }
                                                            <td className="bord"/>

                                                            {devis.aarem === 'oui' &&
                                                                <td colSpan="3" className="bord text-right">
                                                                    {devis.ptva === 'oui' && <b> TOTAL HT </b>}
                                                                    {devis.ptva === 'susp' && <b> TOTAL HT </b>}
                                                                    {devis.ptva === 'non' &&
                                                                        <>
                                                                            {devis.model === 1 &&
                                                                                <b>TOTAL HT </b>
                                                                            }
                                                                            {devis.model === 2 &&
                                                                                <b>TOTAL TTC </b>
                                                                            }
                                                                        </>

                                                                    }
                                                                </td>
                                                            }
                                                            {devis.aarem !== 'oui' &&
                                                                <td className="bord text-right" colSpan="2">
                                                                    {devis.ptva === 'oui' && <b> TOTAL HT </b>}
                                                                    {devis.ptva === 'susp' && <b> TOTAL HT </b>}
                                                                    {devis.ptva === 'non' &&
                                                                        <>
                                                                            {devis.model === 1 &&
                                                                                <b>TOTAL HT </b>
                                                                            }
                                                                            {devis.model === 2 &&
                                                                                <b>TOTAL TTC </b>
                                                                            }
                                                                        </>
                                                                    }
                                                                </td>
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
                                                        </tr>

                                                        {devis.aarem === 'oui' &&
                                                            <tr> {devis.aaref === 'oui' && <td className="bord"/>}
                                                                <td className="bord"/>
                                                                {devis.zone === 'oui' &&
                                                                    <td className="bord"/>
                                                                }
                                                                <td className="bord"/>
                                                                {devis.aarem === 'oui' &&
                                                                    <td colSpan="3" className="bord text-right">
                                                                        <b> REMISE</b>
                                                                    </td>
                                                                }
                                                                <td className="barder text-right nowrape"><NumberFormat
                                                                    numb={devis.vremise}/>
                                                                </td>
                                                            </tr>
                                                        }
                                                        {devis.aarem === 'tht' &&
                                                            <tr>
                                                                {devis.aaref === 'oui' && <td className="bord"/>}
                                                                <td className="bord"/>
                                                                {devis.zone === 'oui' && <td className="bord"/>}
                                                                <td className="bord"/>
                                                                {devis.aarem === 'oui' &&
                                                                    <td colSpan="3" className="bord text-right">
                                                                        <b> REMISE < NumberFormat numb={devis.remtht}/>%</b>
                                                                    </td>
                                                                }

                                                                {devis.aarem !== 'oui' &&
                                                                    <td className="bord text-right"
                                                                        colSpan="2">
                                                                        <b> REMISE < NumberFormat numb={devis.remtht}/>%</b>
                                                                    < /td>
                                                                }
                                                                <td className="barder text-right nowrape">< NumberFormat
                                                                    numb={devis.vremise}/>
                                                                </td>
                                                            </tr>
                                                        }

                                                        {devis.aarem === 'tht' &&
                                                            <tr>
                                                                {devis.aaref === 'oui' &&
                                                                    <td className="bord"/>
                                                                }
                                                                <td className="bord"/>
                                                                {devis.zone === 'oui' &&
                                                                    <td className="bord"/>
                                                                }
                                                                <td className="bord"/>

                                                                {devis.aarem === 'oui' &&
                                                                    <td colSpan="3" className="bord text-right">
                                                                        {devis.ptva === 'oui' && <b> TOTAL HT REMISÉ</b>}
                                                                        {devis.ptva === 'susp' && <b> TOTAL HT REMISÉ</b>}
                                                                        {devis.ptva === 'non' &&
                                                                            <>
                                                                                {devis.model === 1 &&
                                                                                    <b>TOTAL HT REMISÉ</b>
                                                                                }
                                                                                {devis.model === 2 &&
                                                                                    <b>TOTAL TTC REMISÉ</b>
                                                                                }
                                                                            </>
                                                                        }
                                                                    </td>
                                                                }
                                                                {devis.aarem !== 'oui' &&
                                                                    <td className="bord text-right" colSpan="2">
                                                                        {devis.ptva === 'oui' && <b> TOTAL HT REMISÉ</b>}
                                                                        {devis.ptva === 'susp' && <b> TOTAL HT REMISÉ</b>}
                                                                        {devis.ptva === 'non' &&
                                                                            <>
                                                                                {devis.model === 1 &&
                                                                                    <b>TOTAL HT REMISÉ</b>
                                                                                }
                                                                                {devis.model === 2 &&
                                                                                    <b>TOTAL TTC REMISÉ</b>
                                                                                }
                                                                            </>
                                                                        }
                                                                    </td>
                                                                }
                                                                <td className="barder text-right nowrape">< NumberFormat
                                                                    numb={devis.totalht}/>
                                                                </td>

                                                            </tr>
                                                        }


                                                        {devis.abasetva === 'oui' &&
                                                            <tr>
                                                                {devis.aaref === 'oui' &&
                                                                    <td className="bord"/>
                                                                }
                                                                <td className="bord"/>
                                                                {devis.zone === 'oui' &&
                                                                    <td className="bord"/>
                                                                }
                                                                <td className="bord"/>
                                                                {devis.aarem === 'oui' &&
                                                                    <td colSpan="3" className="bord text-right">
                                                                        <b> BASE TVA</b>
                                                                    </td>
                                                                }

                                                                {devis.aarem !== 'oui' &&
                                                                    <td className="bord text-right" colSpan="2"><b> BASE
                                                                        TVA</b>
                                                                    </td>
                                                                }
                                                                <td className="barder text-right nowrape">< NumberFormat
                                                                    numb={devis.basetva}/>
                                                                </td>
                                                            </tr>
                                                        }
                                                        {devis.model === 1 &&
                                                            <tr>
                                                                {devis.aaref === 'oui' &&
                                                                    <td className="bord"/>
                                                                }
                                                                <td className="bord"/>
                                                                {devis.zone === 'oui' &&
                                                                    <td className="bord"/>
                                                                }
                                                                {devis.aarem === 'oui' &&
                                                                    <td colSpan="4" className="bord text-right">
                                                                        {devis.ptva === 'oui' &&
                                                                            <span>TVA(<NumberFormat
                                                                                numb={devis.tva}/>%)</span>
                                                                        }
                                                                        {devis.ptva === 'susp' &&
                                                                            <span>TVA SUSPENDUE(<NumberFormat
                                                                                numb={devis.tva}/>%)</span>
                                                                        }
                                                                        {devis.ptva === 'non' &&
                                                                            <span>TVA NON FACTURÉE(<NumberFormat
                                                                                numb={devis.tva}/>%)</span>
                                                                        }
                                                                    </td>
                                                                }
                                                                {devis.aarem !== 'oui' &&
                                                                    <td className="bord text-right" colSpan="3">
                                                                        {devis.ptva === 'oui' &&
                                                                            <span>TVA(<NumberFormat
                                                                                numb={devis.tva}/>%)</span>
                                                                        }
                                                                        {devis.ptva === 'susp' &&
                                                                            <span>TVA SUSPENDUE(<NumberFormat
                                                                                numb={devis.tva}/>%)</span>
                                                                        }
                                                                        {devis.ptva === 'non' &&
                                                                            <span>TVA NON FACTURÉE(<NumberFormat
                                                                                numb={devis.tva}/>%)</span>
                                                                        }
                                                                    </td>
                                                                }
                                                                <td className="barder text-right nowrape"><NumberFormat
                                                                    numb={devis.vtva}/>
                                                                </td>
                                                            </tr>
                                                        }

                                                        <tr>
                                                            {devis.aaref === 'oui' &&
                                                                <td className="bord"/>}
                                                            <td className="bord"/>
                                                            {devis.zone === 'oui' &&
                                                                <td className="bord"/>
                                                            }
                                                            <td className="bord"/>
                                                            {devis.aarem === 'oui' &&
                                                                <td colSpan="3" className="bord text-right kop"
                                                                    style={{
                                                                        color: "#000",
                                                                        borderBottom: "1px solid #D3D3D3"
                                                                    }}>TOTAL TTC</td>
                                                            }
                                                            {devis.aarem !== 'oui' &&
                                                                <td colSpan="2" className="bord text-right kop"
                                                                    style={{
                                                                        color: "#000",
                                                                        borderBottom: "1px solid #D3D3D3"
                                                                    }}>TOTAL TTC</td>
                                                            }
                                                            <td className="barder text-right kop nowrape"
                                                                style={{color: "#000"}}><NumberFormat
                                                                numb={devis.totalttc}/></td>
                                                        </tr>
                                                    </table>
                                                    <p style={{clear: "both"}}/>
                                                    <p className="text-left">
                                                        Arrêté le devis à la somme
                                                        de:<br/> <b>{numberToLetters(parseInt(devis.totalttc), {lang: 'fr'})}
                                                        <span> {devis.monnaie.code}</span></b>
                                                    </p>
                                                    <br/>
                                                    <p style={{float: "right", textDecoration: "underline"}}> SIGNATURE
                                                        AUTORISÉE </p>
                                                    <p style={{clear: "both"}}/><br/>
                                                    {devis.conditions !== null &&
                                                        <>
                                                            <p className="kop" style={{
                                                                float: "left",
                                                                color: "#000",
                                                                textDecoration: "underline"
                                                            }}>INFORMATIONS
                                                                ADDITIONNELLES </p>
                                                            <p style={{clear: "both"}}/>
                                                            <p style={{color: "#000000"}}
                                                               dangerouslySetInnerHTML={{__html: devis.conditions}}/>
                                                        </>
                                                    }
                                                </>
                                            }
                                            {devis.type === "cps" &&
                                                <>
                                                    <table align="right">
                                                        <tr>
                                                            <td style={{
                                                                border: "none",
                                                                textAlign: "center",
                                                                lineHeight: "1.5"
                                                            }}>
                                                                <b>{devis.chantier.client.nomclient}</b> <br/>
                                                                <b>{devis.chantier.nomchantier}</b>
                                                                {devis.chantier.client.adresse === " " &&
                                                                    <> <br/> {devis.chantier.client.adresse} </>
                                                                }
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <p style={{clear: "both"}}/>
                                                    <table>
                                                        <tr style={{
                                                            backgroundColor: "#f8f9fa",
                                                            fontWeight: "700",
                                                            width: "45%"
                                                        }}>
                                                            <td className="borde"> DATE</td>
                                                            <td className="borde"> N° DEVIS</td>
                                                        </tr>
                                                        <tr>
                                                            <td className="borde">{devdate}</td>
                                                            <td className="borde"> {devis.iddevis}</td>
                                                        </tr>
                                                        <tr>
                                                            <td colSpan="4"
                                                                className="borde">
                                            <span style={{
                                                textDecoration: "underline",
                                                lineHeight: "1.2",
                                                fontWeight: "bold"
                                            }}> RÉFÉRENCE </span><br/>
                                                                <span
                                                                    dangerouslySetInnerHTML={{__html: devis.devreference}}/>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table style={{width: "100%", marginTop: "20px"}} cellSpacing="0">
                                                        <tr className="printa">
                                                            <th className="borde text-left"
                                                                style={{minWidth: "140px"}}> Nº
                                                                COMMANDE
                                                            </th>
                                                            <th className="bor text-left" colSpan="2"
                                                                style={{
                                                                    maxWidth: "500px",
                                                                    minWidth: "200px"
                                                                }}> DÉSIGNATION
                                                            </th>
                                                            <th className="borde text-left"> RÉF</th>
                                                            <th className="borde text-center"
                                                                style={{minWidth: "100px"}}> UNITÉ
                                                            </th>
                                                            <th className="borde text-center"> PRIX&nbsp;U.</th>
                                                        </tr>

                                                        {renderBons}

                                                    </table>
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
                            </div>
                            <div className="footer">
                                {forme.pied !== "aucun" &&
                                    <>
                                        {forme.typeFooter === "texte" &&
                                            <p style={{
                                                fontSize: forme.piedsize + "px",
                                                textAlign: "center",
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
                    {/* FIN IMPRESSION */}
                </>
            }

        </>
    );
});