import React from 'react';
import NumberFormat from "./../../fonctions/NumberFormat";


export const PrintCommande = React.forwardRef((props, ref) => {
    let bon = props.bon;
    let renderLigne = props.renderLigne;
    let renderCaisse = props.renderCaisse;
    let renderGroupe = props.renderGroupe;
    let forme = props.forme;
    let bondate = $("#bondate").val();
    const numberToLetters = require('number-2-letters');

    let caisses = bon.caisses;
    let cc = 0;

    caisses.map((caiss) => {
        if (caiss.etat === 'valide') {
            cc = cc + 1;
        }
    })


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
                            <h5 className="text-center col-blue-grey">Veuillez cliquer sur le bouton <b>"MISE EN FORME
                                DU DEVIS"</b> pour apporter des modifications svp.</h5>
                        </>
                    }
                </div>
                <div className="bood" style={{paddingLeft: "1cm", paddingRight: "1cm"}}>
                    <table align="right" style={{marginTop: "10px", marginBottom: "25px"}}>
                        <tr>
                            <td style={{border: "none", textAlign: "center", lineHeight: "1.5"}}>
                                <b>{bon.chantier.client.nomclient.toUpperCase()}</b> <br/>
                                {bon.chantier.client.adresse === " " &&
                                    <> <br/> {bon.chantier.client.adresse} </>
                                }
                            </td>
                        </tr>
                    </table>
                    <p style={{clear: "both"}}/>
                    <table cellSpacing="0" align="left" style={{marginBottom: "10px"}}>
                        <tr>
                            <td style={{border: "none", fontSize: "25px"}}>
                                {bon.type === "oui" &&
                                    <b>BON DE COMMANDE - FOURNISSEUR</b>
                                }
                                {bon.type === "non" &&
                                    <b>BON DE RETOUR DE COMMANDE - FOURNISSEUR</b>
                                }
                                {bon.type === "none" &&
                                    <b>BON DE LIVRAISON</b>
                                }
                                {bon.type === "pst" &&
                                    <b>BON DE COMMANDE - PRESTATAIRE</b>
                                }
                                {bon.type === "cps" &&
                                    <b>PRÉVISION ARTICLE COMPOSÉ</b>
                                }
                                {bon.type === "prepa" &&
                                    <b>BON DE SUIVI DE COMMANDE</b>
                                }
                            </td>
                        </tr>
                    </table>
                    <p style={{clear: "both"}}/>
                    <table cellSpacing="0">
                        <tr style={{backgroundColor: "#F0F0F0", fontWeight: "700", width: "45%"}}>
                            <td className="borde">DATE</td>
                            <td className="borde">N° BON</td>
                            {bon.preparation !== null &&
                                <td className="borde">N° BON DE SUIVI</td>
                            }
                            <td className="borde">SUR DEVIS N°</td>
                            {bon.type === "pst" &&
                                <td className="borde">PRESTATAIRE</td>
                            }
                            {bon.type === "oui" &&
                                <td className="borde">FOURNISSEUR</td>
                            }
                            {bon.type === "non" &&
                                <td className="borde">FOURNISSEUR</td>
                            }

                        </tr>
                        <tr>
                            <td className="borde">{bondate}</td>
                            <td className="borde">{bon.numbon}</td>
                            {bon.preparation !== null &&
                                <td className="borde">
                                    {bon.preparation !== null && bon.preparation.numbon}
                                </td>
                            }
                            <td className="borde">{bon.devis !== null && bon.devis.iddevis}</td>
                            {bon.type === "oui" &&
                                <td className="borde">{bon.fournisseur !== null && bon.fournisseur.fournisseur}</td>
                            }
                            {bon.type === "non" &&
                                <td className="borde">{bon.fournisseur !== null && bon.fournisseur.fournisseur}</td>
                            }
                            {bon.type === "pst" &&
                                <td className="borde">{bon.fournisseur !== null && bon.fournisseur.fournisseur}</td>
                            }
                        </tr>
                        {bon.type === "oui" &&
                            <tr>
                                {bon.type === "pst" && bon.type === "prepa" &&
                                    <td colSpan="4" className="borde align-left">
                                                        <span style={{
                                                            textDecoration: "underline",
                                                            lineHeight: "1.2",
                                                            fontWeight: "bold"
                                                        }}> RÉFÉRENCE </span><br/>
                                        <span dangerouslySetInnerHTML={{__html: bon.bonreference}}/>
                                    </td>
                                }
                                {bon.type !== "pst" && bon.type !== "prepa" &&
                                    <td colSpan="5" className="borde align-left">
                                                        <span style={{
                                                            textDecoration: "underline",
                                                            lineHeight: "1.2",
                                                            fontWeight: "bold"
                                                        }}> RÉFÉRENCE </span><br/>
                                        <span dangerouslySetInnerHTML={{__html: bon.bonreference}}/>
                                    </td>
                                }
                            </tr>
                        }
                        {bon.type === "non" &&
                            <tr>
                                {bon.type === "pst" && bon.type === "prepa" &&
                                    <td colSpan="4" className="borde align-left">
                                                        <span style={{
                                                            textDecoration: "underline",
                                                            lineHeight: "1.2",
                                                            fontWeight: "bold"
                                                        }}> RÉFÉRENCE </span><br/>
                                        <span dangerouslySetInnerHTML={{__html: bon.bonreference}}/>
                                    </td>
                                }
                                {bon.type !== "pst" && bon.type !== "prepa" &&
                                    <td colSpan="5" className="borde align-left">
                                                        <span style={{
                                                            textDecoration: "underline",
                                                            lineHeight: "1.2",
                                                            fontWeight: "bold"
                                                        }}> RÉFÉRENCE </span><br/>
                                        <span dangerouslySetInnerHTML={{__html: bon.bonreference}}/>
                                    </td>
                                }
                            </tr>
                        }
                        {bon.type === "pst" &&
                            <tr>
                                <td colSpan="4"
                                    className="borde align-left">
                                            <span style={{
                                                textDecoration: "underline",
                                                lineHeight: "1.2",
                                                fontWeight: "bold"
                                            }}> RÉFÉRENCE </span><br/>
                                    <span dangerouslySetInnerHTML={{__html: bon.bonreference}}/></td>
                            </tr>
                        }
                        {bon.type === "cps" &&
                            <tr>
                                <td colSpan="3"
                                    className="borde align-left">
                                            <span style={{
                                                textDecoration: "underline",
                                                lineHeight: "1.2",
                                                fontWeight: "bold"
                                            }}> RÉFÉRENCE </span><br/>
                                    <span dangerouslySetInnerHTML={{__html: bon.bonreference}}/></td>
                            </tr>}
                    </table>
                    <p style={{clear: "both"}}/>
                    <table style={{width: "100%", marginTop: "20px"}} cellSpacing="0">
                        <tr className="printer">
                            {bon.aaref === 'oui' &&
                                <th className="borde text-center"> RÉF </th>
                            }
                            <th className="bor text-left"> DÉSIGNATION</th>
                            {bon.type !== "none" &&
                                <>
                                    <th className="borde text-center"> UNITÉ</th>

                                    {bon.type === "pst" &&
                                        <>
                                            <th className="borde text-center"> QTÉ</th>
                                            <th className="borde text-center" style={{whiteSpace: "nowrap"}}>PRIX U.
                                            </th>
                                        </>
                                    }
                                    {bon.type === "prepa" &&
                                        <>
                                            <th className="borde text-center"> QTÉ<br/>PRÉVUE</th>
                                            <th className="borde text-center"> QTÉ <br/>LIVRÉE</th>
                                            <th className="borde text-center"> RESTE&nbsp;À <br/>LIVRER</th>
                                            <th className="borde text-center" style={{whiteSpace: "nowrap"}}>PRIX U.
                                            </th>
                                        </>
                                    }

                                    {bon.type === "oui" &&
                                        <>
                                            {bon.preparation !== null &&
                                                <>
                                                    <th className="borde text-center"> QTÉ<br/>PRÉVUE</th>
                                                    <th className="borde text-center"> QTÉ <br/>LIVRÉE</th>
                                                    <th className="borde text-center"> RESTE&nbsp;À <br/>LIVRER</th>
                                                    <th className="borde text-center"> QTÉ<br/>DEMANDÉE</th>
                                                </>
                                            }
                                            {bon.preparation === null &&
                                                <th className="borde text-center"> QTÉ</th>
                                            }
                                            <th className="borde text-center" style={{whiteSpace: "nowrap"}}>PRIX U.
                                            </th>
                                        </>
                                    }
                                    {bon.type === "non" &&
                                        <>
                                            {bon.preparation !== null &&
                                                <>
                                                    <th className="borde text-center"> QTÉ<br/>PRÉVUE</th>
                                                    <th className="borde text-center"> QTÉ <br/>LIVRÉE</th>
                                                    <th className="borde text-center"> RESTE&nbsp;À <br/>LIVRER</th>
                                                    <th className="borde text-center"> QTÉ<br/>À RETOURNER</th>
                                                </>
                                            }
                                            {bon.preparation === null &&
                                                <th className="borde text-center"> QTÉ</th>
                                            }
                                            <th className="borde text-center" style={{whiteSpace: "nowrap"}}>PRIX U.
                                            </th>
                                        </>
                                    }
                                    {bon.type === "none" &&
                                        <>
                                            {bon.preparation !== null &&
                                                <>
                                                    <th className="borde text-center"> QTÉ<br/>PRÉVUE</th>
                                                    <th className="borde text-center"> QTÉ <br/>LIVRÉE</th>
                                                    <th className="borde text-center"> RESTE&nbsp;À <br/>LIVRER</th>
                                                    <th className="borde text-center"> QTÉ<br/>DEMANDÉE</th>
                                                </>
                                            }
                                            {bon.preparation === null &&
                                                <th className="borde text-center"> QTÉ</th>
                                            }
                                            <th className="borde text-center" style={{whiteSpace: "nowrap"}}>PRIX U.
                                            </th>
                                        </>
                                    }
                                    {bon.aarem === 'oui' && <th className="borde text-center"> REMISE(%) </th>}
                                    <th className="borde text-center" style={{whiteSpace: "nowrap"}}>MONTANT HT</th>
                                </>
                            }
                            {bon.type === "none" &&
                                <>
                                    <th className="borde text-center"> UNITÉ</th>
                                    <th className="borde text-center" style={{maxWidth: "100px"}}>QUANTITÉ
                                        LIVRÉE
                                    </th>
                                </>
                            }

                        </tr>
                        {renderGroupe}
                        {renderLigne}
                        {bon.type !== "none" &&
                            <>
                                {cc !== 0 &&
                                    <>
                                        <>
                                            {bon.aaref === 'oui' &&
                                                <>
                                                    {bon.aarem === 'oui' && bon.preparation !== null &&
                                                        <tr>
                                                            <td style={{color: "red"}} colSpan="13" className="borde"><b>HISTORIQUE
                                                                DES PAIEMENTS</b></td>
                                                        </tr>
                                                    }
                                                    {bon.aarem !== 'oui' && bon.preparation !== null &&
                                                        <tr>
                                                            <td style={{color: "red"}} colSpan="12" className="borde"><b>HISTORIQUE
                                                                DES PAIEMENTS</b></td>
                                                        </tr>
                                                    }
                                                    {renderCaisse}
                                                </>
                                            }
                                            {bon.aaref === 'non' &&
                                                <>
                                                    {bon.aarem === 'oui' && bon.preparation !== null &&
                                                        <tr>
                                                            <td style={{color: "red"}} colSpan="12" className="borde"><b>HISTORIQUE
                                                                DES PAIEMENTS</b></td>
                                                        </tr>
                                                    }
                                                    {bon.aarem !== 'oui' && bon.preparation !== null &&
                                                        <tr>
                                                            <td style={{color: "red"}} colSpan="11" className="borde"><b>HISTORIQUE
                                                                DES PAIEMENTS</b></td>
                                                        </tr>
                                                    }
                                                    {renderCaisse}
                                                </>
                                            }
                                        </>
                                    </>
                                }
                            </>
                        }
                    </table>
                    <p style={{clear: "both"}}/>
                    {bon.type !== "pst" && bon.type !== "none" &&
                        <>
                        {bon.type !== "prepa" &&
                        <table className="table-bordered" style={{float: "left", width: "30%", marginTop: "10px"}}>
                            <tr style={{fontWeight: "600"}}>
                                <td className="borde" style={{textAlign: "center", backgroundColor: "#f8f9fa"}}><b>SOMME PERÇUE</b></td>
                                <td className="borde" style={{textAlign: "center", backgroundColor: "#f8f9fa"}}><b>RESTE À PAYER</b></td>
                            </tr>
                            <tr>
                                <td className="borde" align="center"><NumberFormat numb={bon.recu}/></td>
                                <td className="borde" align="center"><NumberFormat numb={bon.reste}/></td>
                            </tr>
                        </table>
                        }
                        <table className="table-bordered" style={{float: "right", width: "60%", marginTop: "10px"}}>
                            <tr style={{fontWeight: "600"}}>
                                <td className="borde" style={{textAlign: "center", backgroundColor: "#f8f9fa"}}><b>TOTAL
                                    HT</b></td>
                                {bon.aarem === 'oui' && bon.type !== "none" &&
                                    <td className="borde" style={{textAlign: "center", backgroundColor: "#f8f9fa"}}>
                                        <b>REMISE</b></td>
                                }
                                <td className="borde" style={{textAlign: "center", backgroundColor: "#f8f9fa"}}>
                                    <b>TVA {bon.tva}%</b></td>
                                <td className="borde" style={{textAlign: "center", backgroundColor: "#f8f9fa"}}><b>NET À
                                    PAYER</b></td>
                            </tr>
                            <tr>
                                <td className="borde" style={{textAlign: "center"}}><NumberFormat numb={bon.totalht}/>
                                </td>
                                {bon.aarem === 'oui' && bon.type !== "none" &&
                                    <td className="borde" style={{textAlign: "center"}}><NumberFormat
                                        numb={bon.vremise}/></td>
                                }
                                <td className="borde" align="center"><NumberFormat numb={bon.vtva}/></td>
                                <td className="borde" align="center"><NumberFormat numb={bon.totalttc}/></td>
                            </tr>
                        </table>
                        </>
                    }
                    {bon.type === "pst" &&
                        <>
                        <table className="table-bordered" style={{float: "left", width: "60%", marginTop: "10px"}}>
                            <tr style={{fontWeight: "600"}}>
                                <td className="borde" style={{textAlign: "center", backgroundColor: "#f8f9fa"}}><b>TOTAL
                                    HT</b></td>
                                {bon.aarem === 'oui' && bon.type !== "none" &&
                                    <td className="borde" style={{textAlign: "center", backgroundColor: "#f8f9fa"}}>
                                        <b>REMISE</b></td>
                                }
                                <td className="borde" style={{textAlign: "center", backgroundColor: "#f8f9fa"}}>
                                    <b>TVA {bon.tva}%</b></td>
                                <td className="borde" style={{textAlign: "center", backgroundColor: "#f8f9fa"}}><b>NET À
                                    PAYER</b></td>
                            </tr>
                            <tr>
                                <td className="borde" style={{textAlign: "center"}}><NumberFormat numb={bon.totalht}/>
                                </td>
                                {bon.aarem === 'oui' && bon.type !== "none" &&
                                    <td className="borde" style={{textAlign: "center"}}><NumberFormat
                                        numb={bon.vremise}/></td>
                                }
                                <td className="borde" align="center"><NumberFormat numb={bon.vtva}/></td>
                                <td className="borde" align="center"><NumberFormat numb={bon.totalttc}/></td>
                            </tr>
                        </table>
                        <table className="table-bordered" style={{float: "right", width: "38%", marginTop: "10px"}}>
                        <tr style={{fontWeight: "600"}}>
                            <td className="borde" style={{textAlign: "center", backgroundColor: "#f8f9fa"}}
                            ><b>SOMME PERÇUE</b>
                            </td>
                            <td className="borde" style={{textAlign: "center", backgroundColor: "#f8f9fa"}}
                            ><b>RESTE À PAYER</b>
                            </td>
                        </tr>
                        <tr>
                            <td className="borde" align="center"><NumberFormat numb={bon.recu}/></td>
                            <td className="borde" align="center"><NumberFormat numb={bon.reste}/></td>
                        </tr>
                        </table>
                        </>
                    }
                    <br/>
                    <p style={{clear: "both"}}/>
                    {bon.type !== "none" &&
                        <>
                            <br/>
                            <p className="text-left">
                                Arrêté le bon à la somme
                                de:<br/><b> {numberToLetters(parseInt(bon.totalttc), {lang: 'fr'})}
                                <span> {bon.monnaie.code}</span></b>
                            </p>

                            <br/>
                            <p style={{float: "right", textDecoration: "underline"}}> SIGNATURE AUTORISÉE </p>
                            <p style={{clear: "both"}}/><br/>
                        </>
                    }
                    {bon.type === "none" &&
                        <>
                            <table style={{width: "100%", marginTop: "5px"}} cellSpacing="0">
                                <tr>
                                    <td style={{textAlign: "left", textDecoration: "underline"}}>VISA CHEF
                                        CHANTIER
                                    </td>
                                    <td style={{textAlign: "center", textDecoration: "underline"}}>VISA CHEF
                                        DÉPÔT
                                    </td>
                                    <td style={{textAlign: "right", textDecoration: "underline"}}>VISA
                                        DIRECTION
                                    </td>
                                </tr>
                            </table>
                        </>
                    }
                    {bon.conditions !== null &&
                        <>
                            <p className="kop" style={{ float: "left", color: "#000" }}> INFORMATIONS
                                ADDITIONNELLES</p>
                            <p style={{clear: "both"}}/>
                            <p style={{color: "#000000"}}
                               dangerouslySetInnerHTML={{__html: bon.conditions}}/>
                        </>
                    }
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






            <div style={{display: "none"}}>
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
                                    <table align="right" style={{marginTop: "10px", marginBottom: "25px"}}>
                                        <tr>
                                            <td style={{border: "none", textAlign: "center", lineHeight: "1.5"}}>
                                                <b>{bon.chantier.client.nomclient}</b> <br/>
                                                <b>{bon.chantier.nomchantier}</b>
                                                {bon.chantier.client.adresse === " " &&
                                                    <> <br/> {bon.chantier.client.adresse} </>
                                                }
                                            </td>
                                        </tr>
                                    </table>
                                    <p style={{clear: "both"}}/>
                                    <table cellSpacing="0" align="left" style={{marginBottom: "10px"}}>
                                        <tr>
                                            <td style={{border: "none", fontSize: "25px"}}>
                                                {bon.type === "oui" &&
                                                    <b>BON DE COMMANDE - FOURNISSEUR</b>
                                                }
                                                {bon.type === "non" &&
                                                    <b>BON DE RETOUR DE COMMANDE - FOURNISSEUR</b>
                                                }
                                                {bon.type === "none" &&
                                                    <b>BON DE LIVRAISON</b>
                                                }
                                                {bon.type === "pst" &&
                                                    <b>BON DE COMMANDE - PRESTATAIRE</b>
                                                }
                                                {bon.type === "cps" &&
                                                    <b>PRÉVISION ARTICLE COMPOSÉ</b>
                                                }
                                                {bon.type === "prepa" &&
                                                    <b>BON DE SUIVI DE COMMANDE</b>
                                                }
                                            </td>
                                        </tr>
                                    </table>
                                    <p style={{clear: "both"}}/>
                                    <table cellSpacing="0">
                                        <tr className="printo" style={{width: "45%"}}>
                                            <td className="borde">DATE</td>
                                            <td className="borde">N° BON</td>
                                            {bon.type === "oui" || bon.type === "non" &&
                                                <td className="borde">N° BON DE SUIVI</td>
                                            }
                                            <td className="borde">SUR DEVIS N°</td>
                                            {bon.type === "pst" &&
                                                <td className="borde">PRESTATAIRE</td>
                                            }
                                            {bon.type === "oui" &&
                                                <td className="borde">FOURNISSEUR</td>
                                            }
                                            {bon.type === "non" &&
                                                <td className="borde">FOURNISSEUR</td>
                                            }
                                        </tr>
                                        <tr>
                                            <td className="borde">{bondate}</td>
                                            <td className="borde">{bon.numbon}</td>
                                            {bon.type === "oui" || bon.type === "non" &&
                                                <td className="borde">
                                                    {bon.preparation !== null && bon.preparation.numbon}
                                                </td>
                                            }
                                            <td className="borde">{bon.devis !== null && bon.devis.iddevis}</td>

                                            {bon.type === "non" &&
                                                <td className="borde">{bon.fournisseur !== null && bon.fournisseur.fournisseur}</td>
                                            }

                                            {bon.type === "oui" &&
                                                <td className="borde">{bon.fournisseur !== null && bon.fournisseur.fournisseur}</td>
                                            }

                                            {bon.type === "pst" &&
                                                <td className="borde">{bon.fournisseur !== null && bon.fournisseur.fournisseur}</td>
                                            }
                                        </tr>
                                        {bon.type === "non" &&
                                            <tr>
                                                {bon.type === "pst" && bon.type === "prepa" &&
                                                    <td colSpan="4" className="borde align-left">
                                                        <span style={{
                                                            textDecoration: "underline",
                                                            lineHeight: "1.2",
                                                            fontWeight: "bold"
                                                        }}> RÉFÉRENCE </span><br/>
                                                        <span dangerouslySetInnerHTML={{__html: bon.bonreference}}/>
                                                    </td>
                                                }
                                                {bon.type !== "pst" && bon.type !== "prepa" &&
                                                    <td colSpan="5" className="borde align-left">
                                                        <span style={{
                                                            textDecoration: "underline",
                                                            lineHeight: "1.2",
                                                            fontWeight: "bold"
                                                        }}> RÉFÉRENCE </span><br/>
                                                        <span dangerouslySetInnerHTML={{__html: bon.bonreference}}/>
                                                    </td>
                                                }
                                            </tr>
                                        }
                                        {bon.type === "oui" &&
                                            <tr>
                                                {bon.type === "pst" &&
                                                    <td colSpan="4" className="borde align-left">
                                                        <span style={{
                                                            textDecoration: "underline",
                                                            lineHeight: "1.2",
                                                            fontWeight: "bold"
                                                        }}> RÉFÉRENCE </span><br/>
                                                        <span dangerouslySetInnerHTML={{__html: bon.bonreference}}/>
                                                    </td>
                                                }
                                                {bon.type !== "pst" &&
                                                    <td colSpan="5" className="borde align-left">
                                                        <span style={{
                                                            textDecoration: "underline",
                                                            lineHeight: "1.2",
                                                            fontWeight: "bold"
                                                        }}> RÉFÉRENCE </span><br/>
                                                        <span dangerouslySetInnerHTML={{__html: bon.bonreference}}/>
                                                    </td>
                                                }
                                            </tr>
                                        }
                                        {bon.type === "pst" &&
                                            <tr>
                                                <td colSpan="4"
                                                    className="borde align-left">
                                            <span style={{
                                                textDecoration: "underline",
                                                lineHeight: "1.2",
                                                fontWeight: "bold"
                                            }}> RÉFÉRENCE </span><br/>
                                                    <span dangerouslySetInnerHTML={{__html: bon.bonreference}}/></td>
                                            </tr>
                                        }
                                        {bon.type === "cps" &&
                                            <tr>
                                                <td colSpan="3"
                                                    className="borde align-left">
                                            <span style={{
                                                textDecoration: "underline",
                                                lineHeight: "1.2",
                                                fontWeight: "bold"
                                            }}> RÉFÉRENCE </span><br/>
                                                    <span dangerouslySetInnerHTML={{__html: bon.bonreference}}/></td>
                                            </tr>
                                        }
                                    </table>
                                    <p style={{clear: "both"}}/>
                                    <table style={{width: "100%", marginTop: "20px"}} cellSpacing="0">
                                        <tr className="printer">
                                            {bon.aaref === 'oui' &&
                                                <th className="borde text-center"> RÉF </th>
                                            }
                                            <th className="bor text-left"> DÉSIGNATION</th>
                                            {bon.type !== "none" &&
                                                <>
                                                    <th className="borde text-center"> UNITÉ</th>

                                                    {bon.type === "pst" &&
                                                        <>
                                                            <th className="borde text-center"> QTÉ</th>
                                                            <th className="borde text-center" style={{whiteSpace: "nowrap"}}>PRIX U.
                                                            </th>
                                                        </>
                                                    }
                                                    {bon.type === "prepa" &&
                                                        <>
                                                            <th className="borde text-center"> QTÉ<br/>PRÉVUE</th>
                                                            <th className="borde text-center"> QTÉ <br/>LIVRÉE</th>
                                                            <th className="borde text-center"> RESTE&nbsp;À <br/>LIVRER</th>
                                                            <th className="borde text-center" style={{whiteSpace: "nowrap"}}>PRIX U.
                                                            </th>
                                                        </>
                                                    }

                                                    {bon.type === "oui" &&
                                                        <>
                                                            {bon.preparation !== null &&
                                                                <>
                                                                    <th className="borde text-center"> QTÉ<br/>PRÉVUE</th>
                                                                    <th className="borde text-center"> QTÉ <br/>LIVRÉE</th>
                                                                    <th className="borde text-center"> RESTE&nbsp;À <br/>LIVRER</th>
                                                                    <th className="borde text-center"> QTÉ<br/>DEMANDÉE</th>
                                                                </>
                                                            }
                                                            {bon.preparation === null &&
                                                                <th className="borde text-center"> QTÉ</th>
                                                            }
                                                            <th className="borde text-center" style={{whiteSpace: "nowrap"}}>PRIX U.
                                                            </th>
                                                        </>
                                                    }
                                                    {bon.type === "non" &&
                                                        <>
                                                            {bon.preparation !== null &&
                                                                <>
                                                                    <th className="borde text-center"> QTÉ<br/>PRÉVUE</th>
                                                                    <th className="borde text-center"> QTÉ <br/>LIVRÉE</th>
                                                                    <th className="borde text-center"> RESTE&nbsp;À <br/>LIVRER</th>
                                                                    <th className="borde text-center"> QTÉ<br/>À RETOURNER</th>
                                                                </>
                                                            }
                                                            {bon.preparation === null &&
                                                                <th className="borde text-center"> QTÉ</th>
                                                            }
                                                            <th className="borde text-center" style={{whiteSpace: "nowrap"}}>PRIX U.
                                                            </th>
                                                        </>
                                                    }
                                                    {bon.type === "none" &&
                                                        <>
                                                            {bon.preparation !== null &&
                                                                <>
                                                                    <th className="borde text-center"> QTÉ<br/>PRÉVUE</th>
                                                                    <th className="borde text-center"> QTÉ <br/>LIVRÉE</th>
                                                                    <th className="borde text-center"> RESTE&nbsp;À <br/>LIVRER</th>
                                                                    <th className="borde text-center"> QTÉ<br/>DEMANDÉE</th>
                                                                </>
                                                            }
                                                            {bon.preparation === null &&
                                                                <th className="borde text-center"> QTÉ</th>
                                                            }
                                                            <th className="borde text-center" style={{whiteSpace: "nowrap"}}>PRIX U.
                                                            </th>
                                                        </>
                                                    }
                                                    {bon.aarem === 'oui' && <th className="borde text-center"> REMISE(%) </th>}
                                                    <th className="borde text-center" style={{whiteSpace: "nowrap"}}>MONTANT HT</th>
                                                </>
                                            }
                                            {bon.type === "none" &&
                                                <>
                                                    <th className="borde text-center"> UNITÉ</th>
                                                    <th className="borde text-center" style={{maxWidth: "100px"}}>QUANTITÉ
                                                        LIVRÉE
                                                    </th>
                                                </>
                                            }

                                        </tr>
                                        {renderGroupe}
                                        {renderLigne}
                                        {bon.type !== "none" &&
                                            <>
                                                {cc !== 0 &&
                                                    <>
                                                        {bon.aaref === 'oui' &&
                                                            <>
                                                                {bon.aarem === 'oui' &&
                                                                    <tr>
                                                                        <td colSpan="7" className="borde kope"><b>HISTORIQUE
                                                                            DES PAIEMENTS</b></td>
                                                                    </tr>
                                                                }
                                                                {bon.aarem !== 'oui' &&
                                                                    <tr>
                                                                        <td colSpan="6" className="borde kope"><b>HISTORIQUE
                                                                            DES PAIEMENTS</b></td>
                                                                    </tr>
                                                                }
                                                                {renderCaisse}
                                                            </>
                                                        }
                                                        {bon.aaref !== 'oui' &&
                                                            <>
                                                                {bon.aarem === 'oui' &&
                                                                    <tr>
                                                                        <td colSpan="6" className="borde kope"><b>HISTORIQUE
                                                                            DES PAIEMENTS</b></td>
                                                                    </tr>
                                                                }
                                                                {bon.aarem !== 'oui' &&
                                                                    <tr>
                                                                        <td colSpan="5" className="borde kope"><b>HISTORIQUE
                                                                            DES PAIEMENTS</b></td>
                                                                    </tr>
                                                                }
                                                                {renderCaisse}
                                                            </>
                                                        }
                                                    </>
                                                }
                                            </>
                                        }
                                    </table>

                                    <p style={{clear: "both"}}/>
                                    {bon.type !== "pst" && bon.type !== "none" &&
                                        <>
                                        {bon.type !== "prepa" &&
                                            <table className="table-bordered" style={{float: "left", width: "30%", marginTop: "10px"}}>
                                            <tr style={{fontWeight: "600"}}>
                                                <td className="borde" style={{textAlign: "center", backgroundColor: "#f8f9fa"}}><b>SOMME PERÇUE</b></td>
                                                <td className="borde" style={{textAlign: "center", backgroundColor: "#f8f9fa"}}><b>RESTE À PAYER</b></td>
                                            </tr>
                                            <tr>
                                                <td className="borde" align="center"><NumberFormat numb={bon.recu}/></td>
                                                <td className="borde" align="center"><NumberFormat numb={bon.reste}/></td>
                                            </tr>
                                        </table>
                                        }
                                        <table className="table-bordered" style={{float: "right", width: "60%", marginTop: "10px"}}>
                                            <tr style={{fontWeight: "600"}}>
                                                <td className="borde"
                                                    style={{textAlign: "center", backgroundColor: "#f8f9fa"}}><b>TOTAL
                                                    HT</b></td>
                                                {bon.aarem === 'oui' && bon.type !== "none" &&
                                                    <td className="borde"
                                                        style={{textAlign: "center", backgroundColor: "#f8f9fa"}}>
                                                        <b>REMISE</b></td>
                                                }
                                                <td className="borde"
                                                    style={{textAlign: "center", backgroundColor: "#f8f9fa"}}>
                                                    <b>TVA {bon.tva}%</b></td>
                                                <td className="borde"
                                                    style={{textAlign: "center", backgroundColor: "#f8f9fa"}}><b>NET À
                                                    PAYER</b></td>
                                            </tr>
                                            <tr>
                                                <td className="borde" style={{textAlign: "center"}}><NumberFormat
                                                    numb={bon.totalht}/></td>
                                                {bon.aarem === 'oui' && bon.type !== "none" &&
                                                    <td className="borde" style={{textAlign: "center"}}><NumberFormat
                                                        numb={bon.vremise}/></td>
                                                }
                                                <td className="borde" align="center"><NumberFormat numb={bon.vtva}/>
                                                </td>
                                                <td className="borde" align="center"><NumberFormat numb={bon.totalttc}/>
                                                </td>
                                            </tr>
                                        </table>
                                        </>
                                    }
                                    {bon.type === "pst" &&
                                        <table className="table-bordered"
                                               style={{float: "left", width: "60%", marginTop: "10px"}}>
                                            <tr style={{fontWeight: "600"}}>
                                                <td className="borde"
                                                    style={{textAlign: "center", backgroundColor: "#f8f9fa"}}><b>TOTAL
                                                    HT</b></td>
                                                {bon.aarem === 'oui' && bon.type !== "none" &&
                                                    <td className="borde"
                                                        style={{textAlign: "center", backgroundColor: "#f8f9fa"}}>
                                                        <b>REMISE</b></td>
                                                }
                                                <td className="borde"
                                                    style={{textAlign: "center", backgroundColor: "#f8f9fa"}}>
                                                    <b>TVA {bon.tva}%</b></td>
                                                <td className="borde"
                                                    style={{textAlign: "center", backgroundColor: "#f8f9fa"}}><b>NET À
                                                    PAYER</b></td>
                                            </tr>
                                            <tr>
                                                <td className="borde" style={{textAlign: "center"}}><NumberFormat
                                                    numb={bon.totalht}/></td>
                                                {bon.aarem === 'oui' && bon.type !== "none" &&
                                                    <td className="borde" style={{textAlign: "center"}}><NumberFormat
                                                        numb={bon.vremise}/></td>
                                                }
                                                <td className="borde" align="center"><NumberFormat numb={bon.vtva}/>
                                                </td>
                                                <td className="borde" align="center"><NumberFormat numb={bon.totalttc}/>
                                                </td>
                                            </tr>
                                        </table>
                                    }
                                    {bon.type === "pst" &&
                                        <table className="table-bordered"
                                               style={{float: "right", width: "38%", marginTop: "10px"}}>
                                            <tr style={{fontWeight: "600"}}>
                                                <td className="borde"
                                                    style={{textAlign: "center", backgroundColor: "#f8f9fa"}}
                                                ><b>SOMME PERÇUE</b>
                                                </td>
                                                <td className="borde"
                                                    style={{textAlign: "center", backgroundColor: "#f8f9fa"}}
                                                ><b>RESTE À PAYER</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td className="borde" align="center"><NumberFormat numb={bon.recu}/>
                                                </td>
                                                <td className="borde" align="center"><NumberFormat numb={bon.reste}/>
                                                </td>
                                            </tr>
                                        </table>
                                    }
                                    <br/>
                                    <br/>
                                    <p style={{clear: "both"}}/>
                                    {bon.type !== "none" &&
                                        <>
                                            <p className="text-center">
                                                Arrêté le bon à la somme
                                                de:<br/> {numberToLetters(parseInt(bon.totalttc), {lang: 'fr'})}
                                                <span><b> {bon.monnaie.code}</b></span>
                                            </p>

                                            <br/>
                                            <p style={{float: "right", textDecoration: "underline"}}> SIGNATURE
                                                AUTORISÉE </p>
                                            <p style={{clear: "both"}}/><br/>
                                        </>
                                    }
                                    {bon.type === "none" &&
                                        <>
                                            <table style={{width: "100%", marginTop: "5px"}} cellSpacing="0">
                                                <tr>
                                                    <td style={{textAlign: "left", textDecoration: "underline"}}>VISA
                                                        CHEF CHANTIER
                                                    </td>
                                                    <td style={{textAlign: "center", textDecoration: "underline"}}>VISA
                                                        CHEF DÉPÔT
                                                    </td>
                                                    <td style={{textAlign: "right", textDecoration: "underline"}}>VISA
                                                        DIRECTION
                                                    </td>
                                                </tr>
                                            </table>
                                        </>
                                    }
                                    {bon.conditions !== null &&
                                        <>
                                            <p className="kop" style={{ float: "left", color: "#000" }}> INFORMATIONS
                                                ADDITIONNELLES</p>
                                            <p style={{clear: "both"}}/>
                                            <p style={{color: "#000000"}}
                                               dangerouslySetInnerHTML={{__html: bon.conditions}}/>
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

        </>

    );
});