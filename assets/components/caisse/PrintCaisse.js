import React from 'react';
import NumberFormat from "./../../fonctions/NumberFormat";


export const PrintCaisse = React.forwardRef((props, ref) => {
    let caisse = props.caisse;
    let forme = props.forme;
    let caissedate = $("#caissedate").val();
    let renderLigne = props.renderLigne;
    let renderHisCaisse = props.renderHisCaisse;

    const numberToLetters = require('number-2-letters');

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
                                         float: "left"
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
                    {forme.Entete === "aucun" &&
                        <>
                            <h3 className="text-center col-black"><br/><br/>Dimension de la zone
                                d'entête<br/>{forme.headerHeight}cm x {forme.headerWith}cm</h3>
                            <h5 className="text-center col-blue-grey">Veuillez cliquer sur le bouton <b>"MISE EN FORME
                                DU DEVIS"</b> pour apporter des modifications svp.</h5>
                        </>
                    }
                </div>
                <div className="bood" style={{paddingLeft: "1cm", paddingRight: "1cm"}}>
                    <table align="right" style={{marginTop: "10px", marginBottom: "25px"}}>
                        <tr>
                            <td style={{border: "none", textAlign: "center", lineHeight: "1.5"}}>
                                <b>{caisse.client.nomclient.toUpperCase()}</b> <br/>
                                <b>{caisse.chantier.nomchantier.toUpperCase()}</b>
                            </td>
                        </tr>
                    </table>
                    <p style={{clear: "both"}}/>
                    <table cellSpacing="0" align="left" style={{marginBottom: "10px"}}>
                        <tr>
                            <td style={{border: "none", fontSize: "25px"}}>
                                {caisse.type !== 3 &&
                                    <>
                                        {caisse.bon !== null &&
                                            <b>PAIEMENT</b>
                                        }
                                        {caisse.personnel !== null && <>
                                            {caisse.personnel.type === "interne" &&
                                                <b>PAIEMENT - CHARGE INTERNE</b>
                                            }
                                            {caisse.personnel.type === "personnelle" &&
                                                <b>PAIEMENT - CHARGE PERSONNEL</b>
                                            }
                                        </>
                                        }
                                    </>
                                }
                                {caisse.type === 3 &&
                                    <>
                                        <b>PAIEMENT - CHARGE CHANTIER</b>
                                    </>
                                }

                            </td>
                        </tr>
                    </table>
                    <p style={{clear: "both"}}/>
                    <table>
                        <tr style={{backgroundColor: "#f8f9fa", fontWeight: "700"}}>
                            <td className="text-center borde"><b>DATE</b></td>
                            {caisse.bon !== null &&
                                <td className="text-center borde"><b>COMMANDE N°</b></td>
                            }
                            <td className="text-center borde"><b>ORDRE N°</b></td>
                            {caisse.devis !== null &&
                                <td className="text-center borde"><b>DEVIS N°</b></td>
                            }
                            {caisse.type !== 3 &&
                                <td className="text-center borde"><b>CHARGE INTERNE</b></td>
                            }

                        </tr>
                        <tr>
                            <td className="text-center borde">{caissedate}</td>
                            {caisse.bon !== null &&
                                <td className="text-center borde">{caisse.bon.numbon}</td>
                            }
                            <td className="text-center borde">{caisse.numcaisse}</td>
                            {caisse.devis !== null &&
                                <td className="text-center borde">{caisse.devis.iddevis}</td>
                            }

                            {caisse.personnel !== null &&
                                <td className="text-center borde">
                                    {caisse.personnel.noms.toUpperCase()}
                                </td>
                            }
                            {caisse.intervenant !== null &&
                                <td className="text-center borde">
                                    {caisse.intervenant.nom.toUpperCase()}
                                </td>
                            }
                            {caisse.fournisseur !== null &&
                                <td className="text-center borde">
                                    {caisse.fournisseur.fournisseur.toUpperCase()}
                                </td>
                            }
                        </tr>
                        <tr>
                            {caisse.bon === null &&
                                <td className="text-left borde" colSpan="4"><span
                                    style={{
                                        textDecoration: "underline",
                                        lineHeight: "1.5"
                                    }}><b>RÉFÉRENCE</b></span><br/><span
                                    dangerouslySetInnerHTML={{__html: caisse.caissereference}}/>
                                </td>
                            }
                            {caisse.bon !== null &&
                                <td className="text-left borde" colSpan="5"><span
                                    style={{
                                        textDecoration: "underline",
                                        lineHeight: "1.5"
                                    }}><b>RÉFÉRENCE</b></span><br/><span
                                    dangerouslySetInnerHTML={{__html: caisse.caissereference}}/>
                                </td>
                            }
                        </tr>
                    </table>
                    <p style={{clear: "both"}}/>
                    <table style={{width: "100%", marginTop: "20px"}}>
                        <tr style={{backgroundColor: "#4e73df", color: "white"}}>
                            <th style={{textAlign: "left"}}>DÉSIGNATION</th>
                            <th className="text-center">MONTANT</th>
                        </tr>
                        {renderLigne}
                        <tr>
                            <td style={{textAlign: "left", color: "red", fontWeight: "700"}} className="borde"
                                colSpan="2">
                                HISTORIQUE DES PAIEMENTS
                            </td>
                        </tr>
                        {renderHisCaisse}
                    </table>
                    {caisse.type === 3 &&
                        <table class="table-bordered"
                               style={{float: "right", width: "30%", marginTop: "10px"}}>
                            <tr style={{fontWeight: "600"}}>
                                <td className="borde"
                                    style={{textAlign: "center", backgroundColor: "#f8f9fa"}}
                                ><b>NET À PAYER</b>
                                </td>
                            </tr>
                            <tr>
                                <td style={{textAlign: "center"}}><NumberFormat numb={caisse.montant}/>
                                </td>
                            </tr>
                        </table>
                    }
                    {caisse.intervenant !== null &&
                        <table class="table-bordered" style={{float: "left", width: "58%", marginTop: "10px"}}>
                            <tr style={{fontWeight: "600"}}>
                                <td className="borde" style={{textAlign: "center", backgroundColor: "#f8f9fa"}}
                                ><b>SOMME À RECEVOIR</b>
                                </td>
                                <td className="borde" style={{textAlign: "center", backgroundColor: "#f8f9fa"}}
                                ><b>SOMME RECUE</b>
                                </td>
                                <td className="borde" style={{textAlign: "center", backgroundColor: "#f8f9fa"}}
                                ><b>RESTE À PAYER</b>
                                </td>
                            </tr>
                            <tr>
                                <td style={{textAlign: "center"}} className="borde"><NumberFormat
                                    numb={caisse.intervenant.payer}/></td>
                                <td align="center" className="borde"><NumberFormat numb={caisse.intervenant.recu}/></td>
                                <td align="center" className="borde"><NumberFormat
                                    numb={caisse.intervenant.payer - caisse.intervenant.recu}/></td>
                            </tr>
                        </table>
                    }

                    {caisse.personnel !== null &&
                        <table class="table-bordered" style={{float: "right", width: "30%", marginTop: "10px"}}>
                            <tr style={{fontWeight: "600"}}>
                                <td className="borde" style={{textAlign: "center", backgroundColor: "#f8f9fa"}}
                                ><b>NET À PAYER</b>
                                </td>
                            </tr>
                            <tr>
                                <td style={{textAlign: "center"}}><NumberFormat numb={caisse.montant}/></td>
                            </tr>
                        </table>
                    }

                    {caisse.fournisseur !== null &&
                        <>
                            <table className="table-bordered"
                                   style={{float: "left", width: "60%", marginTop: "10px"}}>
                                <tr style={{fontWeight: "600"}}>
                                    <td className="borde"
                                        style={{textAlign: "center", backgroundColor: "#f8f9fa"}}
                                    ><b>TTC BON COMMANDE</b>
                                    </td>
                                    <td className="borde"
                                        style={{textAlign: "center", backgroundColor: "#f8f9fa"}}
                                    ><b>SOMME PAYÉE</b>
                                    </td>
                                    <td className="borde"
                                        style={{textAlign: "center", backgroundColor: "#f8f9fa"}}
                                    ><b>RESTE À PAYER</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td className="borde" style={{textAlign: "center"}}><NumberFormat
                                        numb={caisse.bon.totalttc}/></td>
                                    <td className="borde" align="center"><NumberFormat
                                        numb={caisse.bon.recu}/></td>
                                    <td className="borde" align="center"><NumberFormat
                                        numb={caisse.bon.reste}/></td>
                                </tr>
                            </table>
                            <table className="table-bordered"
                                   style={{width: "38%", float: "right", marginTop: "10px"}}>
                                <tr style={{fontWeight: "600"}}>
                                    <td className="borde"
                                        style={{textAlign: "center", backgroundColor: "#f8f9fa"}}><b>TOTAL</b>
                                    </td>
                                </tr>
                                <tr style={{color: "black"}}>
                                    <td className="borde" align="center"><NumberFormat
                                        numb={caisse.montant}/></td>
                                </tr>
                            </table>
                        </>
                    }

                    <p style={{clear: "both"}}/>
                    <br/><br/>
                    <p className="text-left">
                        Arrêté le bon à la somme
                        de:<br/><b> {numberToLetters(parseInt(caisse.montant), {lang: 'fr'})}</b>
                        <span><b> {caisse.monnaie.code}</b></span>
                    </p>

                    <br/>
                    <p style={{float: "right", textDecoration: "underline"}}> SIGNATURE AUTORISÉE </p>
                    <p style={{clear: "both"}}/><br/>

                </div>
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
                            <h6 className="text-center col-blue-grey">Veuillez cliquer sur le bouton <b>"MISE EN FORME
                                DU DEVIS"</b> pour apporter des modifications svp.</h6>
                        </>
                    }
                </div>
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
                                             float: "left"
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
                                    <table align="right" style={{marginTop: "10px", marginBottom: "25px"}}>
                                        <tr>
                                            <td style={{border: "none", textAlign: "center", lineHeight: "1.5"}}>
                                                <b>{caisse.client.nomclient.toUpperCase()}</b> <br/>
                                                <b>{caisse.chantier.nomchantier.toUpperCase()}</b>
                                            </td>
                                        </tr>
                                    </table>
                                    <p style={{clear: "both"}}/>
                                    <table cellSpacing="0" align="left" style={{marginBottom: "10px"}}>
                                        <tr>
                                            <td style={{border: "none", fontSize: "25px"}}>
                                                {caisse.type !== 3 &&
                                                    <>
                                                        {caisse.bon !== null &&
                                                            <b>PAIEMENT</b>
                                                        }
                                                        {caisse.personnel !== null && <>
                                                            {caisse.personnel.type === "interne" &&
                                                                <b>PAIEMENT - CHARGE INTERNE</b>
                                                            }
                                                            {caisse.personnel.type === "personnelle" &&
                                                                <b>PAIEMENT - CHARGE PERSONNEL</b>
                                                            }
                                                        </>
                                                        }
                                                    </>
                                                }
                                                {caisse.type === 3 &&
                                                    <>
                                                        <b>PAIEMENT - CHARGE CHANTIER</b>
                                                    </>
                                                }

                                            </td>
                                        </tr>
                                    </table>
                                    <p style={{clear: "both"}}/>
                                    <table>
                                        <tr style={{backgroundColor: "#f8f9fa", fontWeight: "700"}}>
                                            <td className="text-center borde"><b>DATE</b></td>
                                            {caisse.bon !== null &&
                                                <td className="text-center borde"><b>COMMANDE N°</b></td>
                                            }
                                            <td className="text-center borde"><b>ORDRE N°</b></td>
                                            {caisse.bon !== null &&
                                                <td className="text-center borde"><b>DEVIS N°</b></td>
                                            }
                                            {caisse.devis !== null &&
                                                <td className="text-center borde"><b>DEVIS N°</b></td>
                                            }
                                            {caisse.type === 2 &&
                                                <td className="text-center borde"><b>CHARGE INTERNE</b></td>
                                            }

                                        </tr>
                                        <tr>
                                            <td className="text-center borde">{caissedate}</td>
                                            {caisse.bon !== null &&
                                                <td className="text-center borde">{caisse.bon.numbon}</td>
                                            }
                                            <td className="text-center borde">{caisse.numcaisse}</td>
                                            {caisse.bon !== null &&
                                                <td className="text-center borde">{caisse.bon.devis.iddevis}</td>
                                            }
                                            {caisse.devis !== null &&
                                                <td className="text-center borde">{caisse.devis.iddevis}</td>
                                            }
                                            {caisse.personnel !== null &&
                                                <td className="text-center borde">
                                                    {caisse.personnel.noms.toUpperCase()}
                                                </td>
                                            }
                                            {caisse.intervenant !== null &&
                                                <td className="text-center borde">
                                                    {caisse.intervenant.nom.toUpperCase()}
                                                </td>
                                            }
                                            {caisse.fournisseur !== null &&
                                                <td className="text-center borde">
                                                    {caisse.fournisseur.fournisseur.toUpperCase()}
                                                </td>
                                            }
                                        </tr>
                                        <tr>
                                            {caisse.bon === null &&
                                                <td className="text-left borde" colSpan="4"><span
                                                    style={{
                                                        textDecoration: "underline",
                                                        lineHeight: "1.5"
                                                    }}><b>RÉFÉRENCE</b></span><br/><span
                                                    dangerouslySetInnerHTML={{__html: caisse.caissereference}}/>
                                                </td>
                                            }
                                            {caisse.bon !== null &&
                                                <td className="text-left borde" colSpan="5"><span
                                                    style={{
                                                        textDecoration: "underline",
                                                        lineHeight: "1.5"
                                                    }}><b>RÉFÉRENCE</b></span><br/><span
                                                    dangerouslySetInnerHTML={{__html: caisse.caissereference}}/>
                                                </td>
                                            }
                                        </tr>
                                    </table>
                                    <p style={{clear: "both"}}/>
                                    <table style={{width: "100%", marginTop: "20px"}}>
                                        <tr style={{backgroundColor: "#4e73df", color: "white"}}>
                                            <th style={{textAlign: "left"}}>DÉSIGNATION</th>
                                            <th className="text-center">MONTANT</th>
                                        </tr>
                                        {renderLigne}
                                        <tr>
                                            <td style={{textAlign: "left", color: "red", fontWeight: "700"}}
                                                className="borde kope" colSpan="2">
                                                HISTORIQUE DES PAIEMENTS
                                            </td>
                                        </tr>
                                        {renderHisCaisse}
                                    </table>
                                    {caisse.intervenant !== null &&
                                        <table className="table-bordered"
                                               style={{float: "left", width: "58%", marginTop: "10px"}}>
                                            <tr style={{fontWeight: "600"}}>
                                                <td className="borde"
                                                    style={{textAlign: "center", backgroundColor: "#f8f9fa"}}
                                                ><b>SOMME À RECEVOIR</b>
                                                </td>
                                                <td className="borde"
                                                    style={{textAlign: "center", backgroundColor: "#f8f9fa"}}
                                                ><b>SOMME RECUE</b>
                                                </td>
                                                <td style={{textAlign: "center", backgroundColor: "#f8f9fa"}}
                                                ><b>RESTE À PAYER</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style={{textAlign: "center"}}><NumberFormat
                                                    numb={caisse.intervenant.payer}/></td>
                                                <td align="center"><NumberFormat numb={caisse.intervenant.recu}/></td>
                                                <td align="center"><NumberFormat
                                                    numb={caisse.intervenant.payer - caisse.intervenant.recu}/></td>
                                            </tr>
                                        </table>
                                    }

                                    {caisse.personnel !== null &&
                                        <table class="table-bordered"
                                               style={{float: "right", width: "30%", marginTop: "10px"}}>
                                            <tr style={{fontWeight: "600"}}>
                                                <td className="borde"
                                                    style={{textAlign: "center", backgroundColor: "#f8f9fa"}}
                                                ><b>NET À PAYER</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style={{textAlign: "center"}}><NumberFormat numb={caisse.montant}/>
                                                </td>
                                            </tr>
                                        </table>
                                    }

                                    {caisse.type === 3 &&
                                        <table class="table-bordered"
                                               style={{float: "right", width: "30%", marginTop: "10px"}}>
                                            <tr style={{fontWeight: "600"}}>
                                                <td className="borde"
                                                    style={{textAlign: "center", backgroundColor: "#f8f9fa"}}
                                                ><b>NET À PAYER</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style={{textAlign: "center"}}><NumberFormat numb={caisse.montant}/>
                                                </td>
                                            </tr>
                                        </table>
                                    }

                                    {caisse.fournisseur !== null &&
                                        <>
                                            <table className="table-bordered"
                                                   style={{float: "left", width: "60%", marginTop: "10px"}}>
                                                <tr style={{fontWeight: "600"}}>
                                                    <td className="borde"
                                                        style={{textAlign: "center", backgroundColor: "#f8f9fa"}}
                                                    ><b>TTC BON COMMANDE</b>
                                                    </td>
                                                    <td className="borde"
                                                        style={{textAlign: "center", backgroundColor: "#f8f9fa"}}
                                                    ><b>SOMME PAYÉE</b>
                                                    </td>
                                                    <td className="borde"
                                                        style={{textAlign: "center", backgroundColor: "#f8f9fa"}}
                                                    ><b>RESTE À PAYER</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td className="borde" style={{textAlign: "center"}}><NumberFormat
                                                        numb={caisse.bon.totalttc}/></td>
                                                    <td className="borde" align="center"><NumberFormat
                                                        numb={caisse.bon.recu}/></td>
                                                    <td className="borde" align="center"><NumberFormat
                                                        numb={caisse.bon.reste}/></td>
                                                </tr>
                                            </table>
                                            <table className="table-bordered"
                                                   style={{width: "38%", float: "right", marginTop: "10px"}}>
                                                <tr style={{fontWeight: "600"}}>
                                                    <td className="borde"
                                                        style={{textAlign: "center", backgroundColor: "#f8f9fa"}}>
                                                        <b>NET À PAYER</b>
                                                    </td>
                                                </tr>
                                                <tr style={{color: "black"}}>
                                                    <td className="borde" align="center"><NumberFormat
                                                        numb={caisse.montant}/></td>
                                                </tr>
                                            </table>
                                        </>
                                    }

                                    <p style={{clear: "both"}}/>
                                    <br/><br/>
                                    <p className="text-left">
                                        Arrêté le bon à la somme
                                        de:<br/><b> {numberToLetters(parseInt(caisse.montant), {lang: 'fr'})}</b>
                                        <span><b> {caisse.monnaie.code}</b></span>
                                    </p>

                                    <br/>
                                    <p style={{float: "right", textDecoration: "underline"}}> SIGNATURE AUTORISÉE </p>
                                    <p style={{clear: "both"}}/><br/>
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
        </>
    );
});