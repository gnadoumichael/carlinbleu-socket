import React from 'react';
import Moment from "react-moment";
import NumberFormat from "./../../fonctions/NumberFormat";
import $ from "jquery";

export const PrintDecompte = React.forwardRef((props, ref) => {

    let decompte = props.decompte;
    let vava = props.vava;
    let chantier = props.chantier;
    let client = props.client;
    let devis = props.devis;
    let renderLigne = props.renderLigne;
    let renderGroupe = props.renderGroupe;
    let forme = props.forme;
    let decdate = $("#decdate").val();
    let mocode = $("#mocode").val();

    let tht = 0;
    let acompte = 0;
    let garantie = 0;
    let finition = 0;
    let prorata = 0;
    let trc = 0;
    let vtva = 0;
    let stva = "";

    const numberToLetters = require('number-2-letters');

    if (devis.aarem === "tht") {
        tht = parseFloat(devis.vremise) + parseFloat(devis.totalht);
    }

    if(decompte.deduction === "partielle"){
        acompte = (decompte.valeur * decompte.acompte) / 100;
    }
    if(decompte.deduction === "complete"){
        acompte = (devis.totalht * decompte.acompte) / 100;
    }
    if(decompte.deduction === "aucune"){
        acompte = 0;
    }

    garantie = (decompte.valeur * decompte.garantie) / 100;
    finition = (decompte.valeur * decompte.finition) / 100;
    prorata = (decompte.valeur * decompte.prorata) / 100;
    trc = (decompte.valeur * decompte.trc) / 100;
    vtva = (decompte.apayer * (devis.tva/ 100));

    if(devis.ptva !== 'oui'){
        stva = "(Non applicable)";
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
                    {forme.Entete === "aucun" &&
                        <>
                            <h3 className="text-center col-black"><br/><br/>Dimension de la zone
                                d'entête<br/>{forme.headerHeight}cm x {forme.headerWith}cm</h3>
                            <h5 className="text-center col-blue-grey">Veuillez cliquer sur le bouton <b>"MISE EN FORME"</b> pour apporter des modifications svp.</h5>
                        </>
                    }
                </div>
                <div className="bood" style={{paddingLeft: "1cm", paddingRight: "1cm"}}>
                    <table align="right" style={{marginTop: "10px", marginBottom: "25px"}}>
                        <tr>
                            <td style={{border: "none", textAlign: "center", lineHeight: "1.5"}}>
                                <b>{client.nomclient}</b> <br/>
                                {client.adresse === " " &&
                                    <> <br/> {client.adresse} </>
                                }
                                <br/>
                                {client.code != null &&
                                    <> <b> N° CLIENT: </b> {client.code} </>
                                }
                            </td>
                        </tr>
                    </table>
                    <p style={{clear: "both"}}/>
                    <table>
                        <tr style={{backgroundColor: "#f8f9fa", fontWeight: "700", width: "45%"}}>
                            <td className="borde"> DATE</td>
                            <td className="borde"> N° DÉCOMPTE</td>
                            <td className="borde"> N° DÉVIS</td>
                        </tr>
                        <tr>
                            <td className="borde">{decdate}</td>
                            <td className="borde">{decompte.numdecompte}</td>
                            <td className="borde">{devis.iddevis}</td>
                        </tr>
                    </table>
                    <br/>
                    <table style={{width: "100%"}}>
                        <tr className="printer">
                            {devis.aaref === 'oui' &&
                                <th className="borde" style={{textAlign: "center"}}>RÉF</th>
                            }

                            <th className="bor text-left"> DÉSIGNATION</th>

                            {devis.zone === 'oui' &&
                                <th className="borde" style={{textAlign: "center"}}>ZONE</th>
                            }
                            <th className="borde" style={{textAlign: "center"}}>UNITÉ</th>
                            <th className="borde" style={{textAlign: "center"}}>QTÉ</th>
                            <th className="borde" style={{textAlign: "center"}}>PRIX.U</th>
                            {devis.aarem === 'oui' &&
                                <th className="borde" style={{textAlign: "center"}}>%REM</th>
                            }
                            <th className="borde" style={{textAlign: "center"}}>MONTANT&nbsp;HT</th>
                            <th className="borde" style={{textAlign: "center"}}>%</th>
                            <th className="borde" style={{textAlign: "center"}}>VALEUR</th>
                        </tr>

                        {renderGroupe}
                        {renderLigne}

                        {devis.aarem === 'tht' &&
                            <tr>
                                {devis.aarem !== 'oui' && devis.zone === 'oui' &&
                                    <>
                                        {devis.aaref === 'oui' &&
                                            <td className="bord text-right" colSpan="6"
                                                style={{fontWeight: "bold"}}>TOTAL HT REMISÉ | AVANCEMENT:
                                            </td>
                                        }
                                        {devis.aaref !== 'oui' &&
                                            <td className="bord text-right" colSpan="5"
                                                style={{fontWeight: "bold"}}>TOTAL HT REMISÉ | AVANCEMENT:
                                            </td>
                                        }
                                    </>
                                }
                                {devis.aarem === 'oui' && devis.zone !== 'oui' &&
                                    <>
                                        {devis.aaref === 'oui' &&
                                            <td className="bord text-right" colSpan="6"
                                                style={{fontWeight: "bold"}}>TOTAL HT REMISÉ | AVANCEMENT:
                                            </td>
                                        }
                                        {devis.aaref !== 'oui' &&
                                            <td className="bord text-right" colSpan="5"
                                                style={{fontWeight: "bold"}}>TOTAL HT REMISÉ | AVANCEMENT:
                                            </td>
                                        }
                                    </>
                                }
                                {devis.aarem === 'oui' && devis.zone === 'oui' &&
                                    <>
                                        {devis.aaref === 'oui' &&
                                            <td className="bord text-right" colSpan="7"
                                                style={{fontWeight: "bold"}}>TOTAL HT REMISÉ | AVANCEMENT:
                                            </td>
                                        }
                                        {devis.aaref !== 'oui' &&
                                            <td className="bord text-right" colSpan="6"
                                                style={{fontWeight: "bold"}}>TOTAL HT REMISÉ | AVANCEMENT:
                                            </td>
                                        }
                                    </>
                                }
                                {devis.aarem !== 'oui' && devis.zone !== 'oui' &&
                                    <>
                                        {devis.aaref === 'oui' &&
                                            <td className="bord text-right" colSpan="5"
                                                style={{fontWeight: "bold"}}>TOTAL HT REMISÉ | AVANCEMENT:
                                            </td>
                                        }
                                        {devis.aaref !== 'oui' &&
                                            <td className="bord text-right" colSpan="4"
                                                style={{fontWeight: "bold"}}>TOTAL HT REMISÉ | AVANCEMENT:
                                            </td>
                                        }
                                    </>
                                }
                                <td className="bordeu" style={{textAlign: "right", whiteSpace:"nowrap"}}><NumberFormat numb={tht}/></td>
                                <td className="bordeu" style={{textAlign: "center"}}></td>
                                <td className="bordeu" style={{textAlign: "right", fontWeight: "bold"}}></td>
                            </tr>
                        }

                        {devis.aarem === 'oui' &&
                            <>
                            <tr>
                                {devis.aarem !== 'oui' && devis.zone === 'oui' &&
                                    <>
                                        {devis.aaref === 'oui' &&
                                            <td className="bord text-right" colSpan="6"
                                                style={{fontWeight: "bold"}}>REMISE:
                                            </td>
                                        }
                                        {devis.aaref !== 'oui' &&
                                            <td className="bord text-right" colSpan="5"
                                                style={{fontWeight: "bold"}}>REMISE:
                                            </td>
                                        }
                                    </>
                                }
                                {devis.aarem === 'oui' && devis.zone !== 'oui' &&
                                    <>
                                        {devis.aaref === 'oui' &&
                                            <td className="bord text-right" colSpan="6"
                                                style={{fontWeight: "bold"}}>REMISE:
                                            </td>
                                        }
                                        {devis.aaref !== 'oui' &&
                                            <td className="bord text-right" colSpan="5"
                                                style={{fontWeight: "bold"}}>REMISE:
                                            </td>
                                        }
                                    </>
                                }
                                {devis.aarem === 'oui' && devis.zone === 'oui' &&
                                    <>
                                        {devis.aaref === 'oui' &&
                                            <td className="bord text-right" colSpan="7"
                                                style={{fontWeight: "bold"}}>REMISE:
                                            </td>
                                        }
                                        {devis.aaref !== 'oui' &&
                                            <td className="bord text-right" colSpan="6"
                                                style={{fontWeight: "bold"}}>REMISE:
                                            </td>
                                        }
                                    </>
                                }
                                {devis.aarem !== 'oui' && devis.zone !== 'oui' &&
                                    <>
                                        {devis.aaref === 'oui' &&
                                            <td className="bord text-right" colSpan="5"
                                                style={{fontWeight: "bold"}}>REMISE:
                                            </td>
                                        }
                                        {devis.aaref !== 'oui' &&
                                            <td className="bord text-right" colSpan="4"
                                                style={{fontWeight: "bold"}}>REMISE:
                                            </td>
                                        }
                                    </>
                                }
                                <td className="bordeu" style={{textAlign: "right"}}><NumberFormat
                                    numb={devis.vremise}/></td>
                                <td className="bordeu" style={{textAlign: "center"}}></td>
                                <td className="bordeu" style={{textAlign: "right", fontWeight: "bold", whiteSpace:"nowrap"}}></td>
                            </tr>
                            <tr>
                                {devis.aarem !== 'oui' && devis.zone === 'oui' &&
                                    <>
                                        {devis.aaref === 'oui' &&
                                            <td className="bord text-right" colSpan="6"
                                                style={{fontWeight: "bold"}}>TOTAL HT REMISÉ | AVANCEMENT:
                                            </td>
                                        }
                                        {devis.aaref !== 'oui' &&
                                            <td className="bord text-right" colSpan="5"
                                                style={{fontWeight: "bold"}}>TOTAL HT REMISÉ | AVANCEMENT:
                                            </td>
                                        }
                                    </>
                                }
                                {devis.aarem === 'oui' && devis.zone !== 'oui' &&
                                    <>
                                        {devis.aaref === 'oui' &&
                                            <td className="bord text-right" colSpan="6"
                                                style={{fontWeight: "bold"}}>TOTAL HT REMISÉ | AVANCEMENT:
                                            </td>
                                        }
                                        {devis.aaref !== 'oui' &&
                                            <td className="bord text-right" colSpan="5"
                                                style={{fontWeight: "bold"}}>TOTAL HT REMISÉ | AVANCEMENT:
                                            </td>
                                        }
                                    </>
                                }
                                {devis.aarem === 'oui' && devis.zone === 'oui' &&
                                    <>
                                        {devis.aaref === 'oui' &&
                                            <td className="bord text-right" colSpan="7"
                                                style={{fontWeight: "bold"}}>TOTAL HT REMISÉ | AVANCEMENT:
                                            </td>
                                        }
                                        {devis.aaref !== 'oui' &&
                                            <td className="bord text-right" colSpan="6"
                                                style={{fontWeight: "bold"}}>TOTAL HT REMISÉ | AVANCEMENT:
                                            </td>
                                        }
                                    </>
                                }
                                {devis.aarem !== 'oui' && devis.zone !== 'oui' &&
                                    <>
                                        {devis.aaref === 'oui' &&
                                            <td className="bord text-right" colSpan="5"
                                                style={{fontWeight: "bold"}}>TOTAL HT REMISÉ | AVANCEMENT:
                                            </td>
                                        }
                                        {devis.aaref !== 'oui' &&
                                            <td className="bord text-right" colSpan="4"
                                                style={{fontWeight: "bold"}}>TOTAL HT REMISÉ | AVANCEMENT:
                                            </td>
                                        }
                                    </>
                                }
                                <td className="bordeu" style={{textAlign: "right"}}><NumberFormat
                                    numb={decompte.totalht}/></td>
                                <td className="bordeu" style={{textAlign: "center"}}><NumberFormat
                                    numb={decompte.avancement}/>%
                                </td>
                                <td className="bordeu" style={{textAlign: "right", fontWeight: "bold", whiteSpace:"nowrap"}}><NumberFormat
                                    numb={decompte.valeur}/></td>
                            </tr>
                            </>
                        }

                        {devis.aarem === 'non' &&
                            <tr>
                                {devis.zone === 'oui' &&
                                    <>
                                        {devis.aaref === 'oui' &&
                                            <td className="bord text-right" colSpan="6"
                                                style={{fontWeight: "bold"}}>TOTAL HT AVANCEMENT:
                                            </td>
                                        }
                                        {devis.aaref !== 'oui' &&
                                            <td className="bord text-right" colSpan="5"
                                                style={{fontWeight: "bold"}}>TOTAL HT AVANCEMENT:
                                            </td>
                                        }
                                    </>
                                }

                                {devis.zone !== 'oui' &&
                                    <>
                                        {devis.aaref === 'oui' &&
                                            <td className="bord text-right" colSpan="5"
                                                style={{fontWeight: "bold"}}>TOTAL HT AVANCEMENT:
                                            </td>
                                        }
                                        {devis.aaref !== 'oui' &&
                                            <td className="bord text-right" colSpan="4"
                                                style={{fontWeight: "bold"}}>TOTAL HT AVANCEMENT:
                                            </td>
                                        }
                                    </>
                                }

                                <td className="bordeu" style={{textAlign: "right"}}><NumberFormat
                                    numb={decompte.totalht}/>
                                </td>
                                <td className="bordeu" style={{textAlign: "center"}}><NumberFormat
                                    numb={decompte.avancement}/>%
                                </td>
                                <td className="bordeu" style={{textAlign: "right", fontWeight: "bold", whiteSpace:"nowrap"}}><NumberFormat
                                    numb={decompte.valeur}/></td>

                            </tr>
                        }

                        <tr>
                            {devis.aarem !== 'oui' && devis.zone === 'oui' &&
                                <>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord text-right" colSpan="6"
                                            style={{fontWeight: "bold"}}>DÉDUCTION ACOMPTE / FACTURE D'ACOMPTE:
                                        </td>
                                    }
                                    {devis.aaref !== 'oui' &&
                                        <td className="bord text-right" colSpan="5"
                                            style={{fontWeight: "bold"}}>DÉDUCTION ACOMPTE / FACTURE D'ACOMPTE:
                                        </td>
                                    }
                                </>
                            }
                            {devis.aarem === 'oui' && devis.zone !== 'oui' &&
                                <>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord text-right" colSpan="6"
                                            style={{fontWeight: "bold"}}>DÉDUCTION ACOMPTE / FACTURE D'ACOMPTE:
                                        </td>
                                    }
                                    {devis.aaref !== 'oui' &&
                                        <td className="bord text-right" colSpan="5"
                                            style={{fontWeight: "bold"}}>DÉDUCTION ACOMPTE / FACTURE D'ACOMPTE:
                                        </td>
                                    }
                                </>
                            }
                            {devis.aarem === 'oui' && devis.zone === 'oui' &&
                                <>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord text-right" colSpan="7"
                                            style={{fontWeight: "bold"}}>DÉDUCTION ACOMPTE / FACTURE D'ACOMPTE:
                                        </td>
                                    }
                                    {devis.aaref !== 'oui' &&
                                        <td className="bord text-right" colSpan="6"
                                            style={{fontWeight: "bold"}}>DÉDUCTION ACOMPTE / FACTURE D'ACOMPTE:
                                        </td>
                                    }
                                </>
                            }
                            {devis.aarem !== 'oui' && devis.zone !== 'oui' &&
                                <>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord text-right" colSpan="5"
                                            style={{fontWeight: "bold"}}>DÉDUCTION ACOMPTE / FACTURE D'ACOMPTE:
                                        </td>
                                    }
                                    {devis.aaref !== 'oui' &&
                                        <td className="bord text-right" colSpan="4"
                                            style={{fontWeight: "bold"}}>DÉDUCTION ACOMPTE / FACTURE D'ACOMPTE:
                                        </td>
                                    }
                                </>
                            }
                            <td className="bordeu" style={{textAlign: "right"}}></td>
                            {decompte.deduction !== 'aucune' &&
                                <td className="bordeu" style={{textAlign: "center"}}><NumberFormat numb={decompte.acompte}/>%</td>
                            }
                            {decompte.deduction === 'aucune' &&
                                <td className="bordeu" style={{textAlign: "center"}}>0,00%</td>
                            }
                            <td className="bordeu" style={{textAlign: "right", fontWeight: "bold", whiteSpace: "nowrap"}}><NumberFormat numb={acompte}/></td>
                        </tr>
                        <tr>
                            {devis.aarem !== 'oui' && devis.zone === 'oui' &&
                                <>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord text-right" colSpan="6"
                                            style={{fontWeight: "bold"}}>DÉDUCTION RETENUE ASSURANCE TRC:
                                        </td>
                                    }
                                    {devis.aaref !== 'oui' &&
                                        <td className="bord text-right" colSpan="5"
                                            style={{fontWeight: "bold"}}>DÉDUCTION RETENUE ASSURANCE TRC:
                                        </td>
                                    }
                                </>
                            }
                            {devis.aarem === 'oui' && devis.zone !== 'oui' &&
                                <>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord text-right" colSpan="6"
                                            style={{fontWeight: "bold"}}>DÉDUCTION RETENUE ASSURANCE TRC:
                                        </td>
                                    }
                                    {devis.aaref !== 'oui' &&
                                        <td className="bord text-right" colSpan="5"
                                            style={{fontWeight: "bold"}}>DÉDUCTION RETENUE ASSURANCE TRC:
                                        </td>
                                    }
                                </>
                            }
                            {devis.aarem === 'oui' && devis.zone === 'oui' &&
                                <>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord text-right" colSpan="7"
                                            style={{fontWeight: "bold"}}>DÉDUCTION RETENUE ASSURANCE TRC:
                                        </td>
                                    }
                                    {devis.aaref !== 'oui' &&
                                        <td className="bord text-right" colSpan="6"
                                            style={{fontWeight: "bold"}}>DÉDUCTION RETENUE ASSURANCE TRC:
                                        </td>
                                    }
                                </>
                            }
                            {devis.aarem !== 'oui' && devis.zone !== 'oui' &&
                                <>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord text-right" colSpan="5"
                                            style={{fontWeight: "bold"}}>DÉDUCTION RETENUE ASSURANCE TRC:
                                        </td>
                                    }
                                    {devis.aaref !== 'oui' &&
                                        <td className="bord text-right" colSpan="4"
                                            style={{fontWeight: "bold"}}>DÉDUCTION RETENUE ASSURANCE TRC:
                                        </td>
                                    }
                                </>
                            }
                            <td className="bordeu" style={{textAlign: "right"}}></td>
                            <td className="bordeu" style={{textAlign: "center"}}><NumberFormat numb={decompte.trc}/>%</td>
                            <td className="bordeu" style={{textAlign: "right", fontWeight: "bold", whiteSpace:"nowrap"}}><NumberFormat numb={trc}/></td>
                        </tr>
                        <tr>
                            {devis.aarem !== 'oui' && devis.zone === 'oui' &&
                                <>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord text-right" colSpan="6"
                                            style={{fontWeight: "bold"}}>DÉDUCTION GARANTIE:
                                        </td>
                                    }
                                    {devis.aaref !== 'oui' &&
                                        <td className="bord text-right" colSpan="5"
                                            style={{fontWeight: "bold"}}>DÉDUCTION GARANTIE:
                                        </td>
                                    }
                                </>
                            }
                            {devis.aarem === 'oui' && devis.zone !== 'oui' &&
                                <>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord text-right" colSpan="6"
                                            style={{fontWeight: "bold"}}>DÉDUCTION GARANTIE:
                                        </td>
                                    }
                                    {devis.aaref !== 'oui' &&
                                        <td className="bord text-right" colSpan="5"
                                            style={{fontWeight: "bold"}}>DÉDUCTION GARANTIE:
                                        </td>
                                    }
                                </>
                            }
                            {devis.aarem === 'oui' && devis.zone === 'oui' &&
                                <>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord text-right" colSpan="7"
                                            style={{fontWeight: "bold"}}>DÉDUCTION GARANTIE:
                                        </td>
                                    }
                                    {devis.aaref !== 'oui' &&
                                        <td className="bord text-right" colSpan="6"
                                            style={{fontWeight: "bold"}}>DÉDUCTION GARANTIE:
                                        </td>
                                    }
                                </>
                            }
                            {devis.aarem !== 'oui' && devis.zone !== 'oui' &&
                                <>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord text-right" colSpan="5"
                                            style={{fontWeight: "bold"}}>DÉDUCTION GARANTIE:
                                        </td>
                                    }
                                    {devis.aaref !== 'oui' &&
                                        <td className="bord text-right" colSpan="4"
                                            style={{fontWeight: "bold"}}>DÉDUCTION GARANTIE:
                                        </td>
                                    }
                                </>
                            }
                            <td className="bordeu" style={{textAlign: "right"}}></td>
                            <td className="bordeu" style={{textAlign: "center"}}><NumberFormat numb={decompte.garantie}/>%</td>
                            <td className="bordeu" style={{textAlign: "right", fontWeight: "bold", whiteSpace:"nowrap"}}><NumberFormat numb={garantie}/></td>
                        </tr>
                        <tr>
                            {devis.aarem !== 'oui' && devis.zone === 'oui' &&
                                <>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord text-right" colSpan="6"
                                            style={{fontWeight: "bold"}}>DÉDUCTION RETENUE DE FINITION:
                                        </td>
                                    }
                                    {devis.aaref !== 'oui' &&
                                        <td className="bord text-right" colSpan="5"
                                            style={{fontWeight: "bold"}}>DÉDUCTION RETENUE DE FINITION:
                                        </td>
                                    }
                                </>
                            }
                            {devis.aarem === 'oui' && devis.zone !== 'oui' &&
                                <>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord text-right" colSpan="6"
                                            style={{fontWeight: "bold"}}>DÉDUCTION RETENUE DE FINITION:
                                        </td>
                                    }
                                    {devis.aaref !== 'oui' &&
                                        <td className="bord text-right" colSpan="5"
                                            style={{fontWeight: "bold"}}>DÉDUCTION RETENUE DE FINITION:
                                        </td>
                                    }
                                </>
                            }
                            {devis.aarem === 'oui' && devis.zone === 'oui' &&
                                <>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord text-right" colSpan="7"
                                            style={{fontWeight: "bold"}}>DÉDUCTION RETENUE DE FINITION:
                                        </td>
                                    }
                                    {devis.aaref !== 'oui' &&
                                        <td className="bord text-right" colSpan="6"
                                            style={{fontWeight: "bold"}}>DÉDUCTION RETENUE DE FINITION:
                                        </td>
                                    }
                                </>
                            }
                            {devis.aarem !== 'oui' && devis.zone !== 'oui' &&
                                <>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord text-right" colSpan="5"
                                            style={{fontWeight: "bold"}}>DÉDUCTION RETENUE DE FINITION:
                                        </td>
                                    }
                                    {devis.aaref !== 'oui' &&
                                        <td className="bord text-right" colSpan="4"
                                            style={{fontWeight: "bold"}}>DÉDUCTION RETENUE DE FINITION:
                                        </td>
                                    }
                                </>
                            }
                            <td className="bordeu" style={{textAlign: "right"}}></td>
                            <td className="bordeu" style={{textAlign: "center"}}><NumberFormat numb={decompte.finition}/>%</td>
                            <td className="bordeu" style={{textAlign: "right", fontWeight: "bold", whiteSpace:"nowrap"}}><NumberFormat numb={finition}/></td>
                        </tr>
                        <tr>
                            {devis.aarem !== 'oui' && devis.zone === 'oui' &&
                                <>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord text-right" colSpan="6"
                                            style={{fontWeight: "bold"}}>DÉDUCTION PRORATA:
                                        </td>
                                    }
                                    {devis.aaref !== 'oui' &&
                                        <td className="bord text-right" colSpan="5"
                                            style={{fontWeight: "bold"}}>DÉDUCTION PRORATA:
                                        </td>
                                    }
                                </>
                            }
                            {devis.aarem === 'oui' && devis.zone !== 'oui' &&
                                <>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord text-right" colSpan="6"
                                            style={{fontWeight: "bold"}}>DÉDUCTION PRORATA:
                                        </td>
                                    }
                                    {devis.aaref !== 'oui' &&
                                        <td className="bord text-right" colSpan="5"
                                            style={{fontWeight: "bold"}}>DÉDUCTION PRORATA:
                                        </td>
                                    }
                                </>
                            }
                            {devis.aarem === 'oui' && devis.zone === 'oui' &&
                                <>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord text-right" colSpan="7"
                                            style={{fontWeight: "bold"}}>DÉDUCTION PRORATA:
                                        </td>
                                    }
                                    {devis.aaref !== 'oui' &&
                                        <td className="bord text-right" colSpan="6"
                                            style={{fontWeight: "bold"}}>DÉDUCTION PRORATA:
                                        </td>
                                    }
                                </>
                            }
                            {devis.aarem !== 'oui' && devis.zone !== 'oui' &&
                                <>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord text-right" colSpan="5"
                                            style={{fontWeight: "bold"}}>DÉDUCTION PRORATA:
                                        </td>
                                    }
                                    {devis.aaref !== 'oui' &&
                                        <td className="bord text-right" colSpan="4"
                                            style={{fontWeight: "bold"}}>DÉDUCTION PRORATA:
                                        </td>
                                    }
                                </>
                            }
                            <td className="bordeu" style={{textAlign: "right"}}></td>
                            <td className="bordeu" style={{textAlign: "center"}}><NumberFormat numb={decompte.prorata}/>%</td>
                            <td className="bordeu" style={{textAlign: "right", fontWeight: "bold", whiteSpace:"nowrap"}}><NumberFormat numb={prorata}/></td>
                        </tr>
                        <tr>
                            {devis.aarem !== 'oui' && devis.zone === 'oui' &&
                                <>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord text-right" colSpan="6"
                                            style={{fontWeight: "bold"}}>DÉDUCTION DES DÉCOMPTES:
                                        </td>
                                    }
                                    {devis.aaref !== 'oui' &&
                                        <td className="bord text-right" colSpan="5"
                                            style={{fontWeight: "bold"}}>DÉDUCTION DES DÉCOMPTES:
                                        </td>
                                    }
                                </>
                            }
                            {devis.aarem === 'oui' && devis.zone !== 'oui' &&
                                <>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord text-right" colSpan="6"
                                            style={{fontWeight: "bold"}}>DÉDUCTION DES DÉCOMPTES:
                                        </td>
                                    }
                                    {devis.aaref !== 'oui' &&
                                        <td className="bord text-right" colSpan="5"
                                            style={{fontWeight: "bold"}}>DÉDUCTION DES DÉCOMPTES:
                                        </td>
                                    }
                                </>
                            }
                            {devis.aarem === 'oui' && devis.zone === 'oui' &&
                                <>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord text-right" colSpan="7"
                                            style={{fontWeight: "bold"}}>DÉDUCTION DES DÉCOMPTES:
                                        </td>
                                    }
                                    {devis.aaref !== 'oui' &&
                                        <td className="bord text-right" colSpan="6"
                                            style={{fontWeight: "bold"}}>DÉDUCTION DES DÉCOMPTES:
                                        </td>
                                    }
                                </>
                            }
                            {devis.aarem !== 'oui' && devis.zone !== 'oui' &&
                                <>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord text-right" colSpan="5"
                                            style={{fontWeight: "bold"}}>DÉDUCTION DES DÉCOMPTES:
                                        </td>
                                    }
                                    {devis.aaref !== 'oui' &&
                                        <td className="bord text-right" colSpan="4"
                                            style={{fontWeight: "bold"}}>DÉDUCTION DES DÉCOMPTES:
                                        </td>
                                    }
                                </>
                            }
                            <td className="bordeu" style={{textAlign: "right"}}></td>
                            <td className="bordeu" style={{textAlign: "center"}}></td>
                            <td className="bordeu" style={{textAlign: "right", fontWeight: "bold", whiteSpace:"nowrap"}}><NumberFormat numb={vava}/></td>
                        </tr>
                        <tr>
                            {devis.aarem !== 'oui' && devis.zone === 'oui' &&
                                <>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord text-right" colSpan="6"
                                            style={{fontWeight: "bold"}}>TOTAL HT DÉCOMPTE N°:{ decompte.numdecompte }
                                        </td>
                                    }
                                    {devis.aaref !== 'oui' &&
                                        <td className="bord text-right" colSpan="5"
                                            style={{fontWeight: "bold"}}>TOTAL HT DÉCOMPTE N°:{ decompte.numdecompte }
                                        </td>
                                    }
                                </>
                            }
                            {devis.aarem === 'oui' && devis.zone !== 'oui' &&
                                <>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord text-right" colSpan="6"
                                            style={{fontWeight: "bold"}}>TOTAL HT DÉCOMPTE N°:{ decompte.numdecompte }
                                        </td>
                                    }
                                    {devis.aaref !== 'oui' &&
                                        <td className="bord text-right" colSpan="5"
                                            style={{fontWeight: "bold"}}>TOTAL HT DÉCOMPTE N°:{ decompte.numdecompte }
                                        </td>
                                    }
                                </>
                            }
                            {devis.aarem === 'oui' && devis.zone === 'oui' &&
                                <>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord text-right" colSpan="7"
                                            style={{fontWeight: "bold"}}>TOTAL HT DÉCOMPTE N°:{ decompte.numdecompte }
                                        </td>
                                    }
                                    {devis.aaref !== 'oui' &&
                                        <td className="bord text-right" colSpan="6"
                                            style={{fontWeight: "bold"}}>TOTAL HT DÉCOMPTE N°:{ decompte.numdecompte }
                                        </td>
                                    }
                                </>
                            }
                            {devis.aarem !== 'oui' && devis.zone !== 'oui' &&
                                <>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord text-right" colSpan="5"
                                            style={{fontWeight: "bold"}}>TOTAL HT DÉCOMPTE N°:{ decompte.numdecompte }
                                        </td>
                                    }
                                    {devis.aaref !== 'oui' &&
                                        <td className="bord text-right" colSpan="4"
                                            style={{fontWeight: "bold"}}>TOTAL HT DÉCOMPTE N°:{ decompte.numdecompte }
                                        </td>
                                    }
                                </>
                            }
                            <td className="bordeu" style={{textAlign: "right"}}></td>
                            <td className="bordeu" style={{textAlign: "center"}}></td>
                            <td className="bordeu" style={{textAlign: "right", fontWeight: "bold", whiteSpace:"nowrap"}}><NumberFormat numb={ decompte.apayer }/></td>
                        </tr>
                        <tr>
                            {devis.aarem !== 'oui' && devis.zone === 'oui' &&
                                <>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord text-right" colSpan="6"
                                            style={{fontWeight: "bold"}}>TVA { devis.tva }% {stva}
                                        </td>
                                    }
                                    {devis.aaref !== 'oui' &&
                                        <td className="bord text-right" colSpan="5"
                                            style={{fontWeight: "bold"}}>TVA { devis.tva }% {stva}
                                        </td>
                                    }
                                </>
                            }
                            {devis.aarem === 'oui' && devis.zone !== 'oui' &&
                                <>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord text-right" colSpan="6"
                                            style={{fontWeight: "bold"}}>TVA { devis.tva }% {stva}
                                        </td>
                                    }
                                    {devis.aaref !== 'oui' &&
                                        <td className="bord text-right" colSpan="5"
                                            style={{fontWeight: "bold"}}>TVA { devis.tva }% {stva}
                                        </td>
                                    }
                                </>
                            }
                            {devis.aarem === 'oui' && devis.zone === 'oui' &&
                                <>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord text-right" colSpan="7"
                                            style={{fontWeight: "bold"}}>TVA { devis.tva }% {stva}
                                        </td>
                                    }
                                    {devis.aaref !== 'oui' &&
                                        <td className="bord text-right" colSpan="6"
                                            style={{fontWeight: "bold"}}>TVA { devis.tva }% {stva}
                                        </td>
                                    }
                                </>
                            }
                            {devis.aarem !== 'oui' && devis.zone !== 'oui' &&
                                <>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord text-right" colSpan="5"
                                            style={{fontWeight: "bold"}}>TVA { devis.tva }% {stva}
                                        </td>
                                    }
                                    {devis.aaref !== 'oui' &&
                                        <td className="bord text-right" colSpan="4"
                                            style={{fontWeight: "bold"}}>TVA { devis.tva }% {stva}
                                        </td>
                                    }
                                </>
                            }
                            <td className="bordeu" style={{textAlign: "right"}}></td>
                            <td className="bordeu" style={{textAlign: "center"}}></td>
                            <td className="bordeu" style={{textAlign: "right", fontWeight: "bold", whiteSpace:"nowrap"}}><NumberFormat numb={ vtva }/></td>
                        </tr>
                        <tr>
                            {devis.aarem !== 'oui' && devis.zone === 'oui' &&
                                <>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord text-right" colSpan="6"
                                            style={{fontWeight: "bold"}}>TOTAL TTC DÉCOMPTE N°:{ decompte.numdecompte }
                                        </td>
                                    }
                                    {devis.aaref !== 'oui' &&
                                        <td className="bord text-right" colSpan="5"
                                            style={{fontWeight: "bold"}}>TOTAL TTC DÉCOMPTE N°:{ decompte.numdecompte }
                                        </td>
                                    }
                                </>
                            }
                            {devis.aarem === 'oui' && devis.zone !== 'oui' &&
                                <>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord text-right" colSpan="6"
                                            style={{fontWeight: "bold"}}>TOTAL TTC DÉCOMPTE N°:{ decompte.numdecompte }
                                        </td>
                                    }
                                    {devis.aaref !== 'oui' &&
                                        <td className="bord text-right" colSpan="5"
                                            style={{fontWeight: "bold"}}>TOTAL TTC DÉCOMPTE N°:{ decompte.numdecompte }
                                        </td>
                                    }
                                </>
                            }
                            {devis.aarem === 'oui' && devis.zone === 'oui' &&
                                <>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord text-right" colSpan="7"
                                            style={{fontWeight: "bold"}}>TOTAL TTC DÉCOMPTE N°:{ decompte.numdecompte }
                                        </td>
                                    }
                                    {devis.aaref !== 'oui' &&
                                        <td className="bord text-right" colSpan="6"
                                            style={{fontWeight: "bold"}}>TOTAL TTC DÉCOMPTE N°:{ decompte.numdecompte }
                                        </td>
                                    }
                                </>
                            }
                            {devis.aarem !== 'oui' && devis.zone !== 'oui' &&
                                <>
                                    {devis.aaref === 'oui' &&
                                        <td className="bord text-right" colSpan="5"
                                            style={{fontWeight: "bold"}}>TOTAL TTC DÉCOMPTE N°:{ decompte.numdecompte }
                                        </td>
                                    }
                                    {devis.aaref !== 'oui' &&
                                        <td className="bord text-right" colSpan="4"
                                            style={{fontWeight: "bold"}}>TOTAL TTC DÉCOMPTE N°:{ decompte.numdecompte }
                                        </td>
                                    }
                                </>
                            }
                            <td className="bordeu" style={{textAlign: "right"}}></td>
                            <td className="bordeu" style={{textAlign: "center"}}></td>
                            <td className="bordeu" style={{textAlign: "right", fontWeight: "bold", whiteSpace:"nowrap"}}><NumberFormat numb={ decompte.ttc }/></td>
                        </tr>


                    </table>
                    <p className="text-left">
                        Arrêté le décompte à la somme
                        de:<br/>
                        <span><b>{numberToLetters(parseInt(decompte.ttc), {lang: 'fr'})} {mocode}</b></span>
                    </p>
                    <p style={{float: "right",  textDecoration: "underline"}}>SIGNATURE AUTORISÉE</p>
                    <br/><br/><br/>

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
                            <h6 className="text-center col-blue-grey">Veuillez cliquer sur le bouton <b>"MISE EN FORME "</b> pour apporter des modifications svp.</h6>
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
                                                <b>{client.nomclient}</b> <br/>
                                                <b>{chantier.nomchantier}</b>
                                                {client.adresse === " " &&
                                                    <> <br/> {client.adresse} </>
                                                }
                                                <br/>
                                                {client.code != null &&
                                                    <> <b> N° CLIENT: </b> {client.code} </>
                                                }
                                            </td>
                                        </tr>
                                    </table>
                                    <p style={{clear: "both"}}/>
                                    <table>
                                        <tr className="printa" style={{fontWeight: "700", width: "45%"}}>
                                            <td className="borde"> DATE</td>
                                            <td className="borde"> N° DÉCOMPTE</td>
                                            <td className="borde"> N° DÉVIS</td>
                                        </tr>
                                        <tr>
                                            <td className="borde">{decdate}</td>
                                            <td className="borde">{decompte.numdecompte}</td>
                                            <td className="borde">{devis.iddevis}</td>
                                        </tr>
                                    </table>
                                    <br/>
                                    <table style={{width: "100%"}}>
                                        <tr className="printer">
                                            {devis.aaref === 'oui' &&
                                                <th className="borde" style={{textAlign: "center"}}>RÉF</th>
                                            }
                                            <th className="bor text-left"> DÉSIGNATION</th>
                                            {devis.zone === 'oui' &&
                                                <th className="borde" style={{textAlign: "center"}}>ZONE</th>
                                            }
                                            <th className="borde" style={{textAlign: "center"}}>UNITÉ</th>
                                            <th className="borde" style={{textAlign: "center"}}>QTÉ</th>
                                            <th className="borde" style={{textAlign: "center"}}>PRIX.U</th>
                                            {devis.aarem === 'oui' &&
                                                <th className="borde" style={{textAlign: "center"}}>%REM</th>
                                            }
                                            <th className="borde" style={{textAlign: "center"}}>MONTANT&nbsp;HT</th>
                                            <th className="borde" style={{textAlign: "center"}}>%</th>
                                            <th className="borde" style={{textAlign: "center"}}>VALEUR<br/></th>
                                        </tr>

                                        {renderGroupe}
                                        {renderLigne}

                                        {devis.aarem === 'tht' &&
                                            <>
                                                <tr>
                                                    {devis.aarem !== 'oui' && devis.zone === 'oui' &&
                                                        <>
                                                            {devis.aaref === 'oui' &&
                                                                <td className="bord text-right" colSpan="6"
                                                                    style={{fontWeight: "bold"}}>TOTAL HT:
                                                                </td>
                                                            }
                                                            {devis.aaref !== 'oui' &&
                                                                <td className="bord text-right" colSpan="5"
                                                                    style={{fontWeight: "bold"}}>TOTAL HT:
                                                                </td>
                                                            }
                                                        </>
                                                    }
                                                    {devis.aarem === 'oui' && devis.zone !== 'oui' &&
                                                        <>
                                                            {devis.aaref === 'oui' &&
                                                                <td className="bord text-right" colSpan="6"
                                                                    style={{fontWeight: "bold"}}>TOTAL HT:
                                                                </td>
                                                            }
                                                            {devis.aaref !== 'oui' &&
                                                                <td className="bord text-right" colSpan="5"
                                                                    style={{fontWeight: "bold"}}>TOTAL HT:
                                                                </td>
                                                            }
                                                        </>
                                                    }
                                                    {devis.aarem === 'oui' && devis.zone === 'oui' &&
                                                        <>
                                                            {devis.aaref === 'oui' &&
                                                                <td className="bord text-right" colSpan="7"
                                                                    style={{fontWeight: "bold"}}>TOTAL HT:
                                                                </td>
                                                            }
                                                            {devis.aaref !== 'oui' &&
                                                                <td className="bord text-right" colSpan="6"
                                                                    style={{fontWeight: "bold"}}>TOTAL HT:
                                                                </td>
                                                            }
                                                        </>
                                                    }
                                                    {devis.aarem !== 'oui' && devis.zone !== 'oui' &&
                                                        <>
                                                            {devis.aaref === 'oui' &&
                                                                <td className="bord text-right" colSpan="5"
                                                                    style={{fontWeight: "bold"}}>TOTAL HT:
                                                                </td>
                                                            }
                                                            {devis.aaref !== 'oui' &&
                                                                <td className="bord text-right" colSpan="4"
                                                                    style={{fontWeight: "bold"}}>TOTAL HT:
                                                                </td>
                                                            }
                                                        </>
                                                    }
                                                    <td className="bordeu" style={{textAlign: "right", whiteSpace: "nowrap"}}><NumberFormat numb={tht}/></td>
                                                    <td className="bordeu" style={{textAlign: "center"}}></td>
                                                    <td className="bordeu" style={{textAlign: "right", fontWeight: "bold"}}></td>
                                                </tr>
                                            </>
                                        }

                                        {devis.aarem === 'oui' &&
                                            <>
                                                <tr>
                                                    {devis.aarem !== 'oui' && devis.zone === 'oui' &&
                                                        <>
                                                            {devis.aaref === 'oui' &&
                                                                <td className="bord text-right" colSpan="6"
                                                                    style={{fontWeight: "bold"}}>REMISE:
                                                                </td>
                                                            }
                                                            {devis.aaref !== 'oui' &&
                                                                <td className="bord text-right" colSpan="5"
                                                                    style={{fontWeight: "bold"}}>REMISE:
                                                                </td>
                                                            }
                                                        </>
                                                    }
                                                    {devis.aarem === 'oui' && devis.zone !== 'oui' &&
                                                        <>
                                                            {devis.aaref === 'oui' &&
                                                                <td className="bord text-right" colSpan="6"
                                                                    style={{fontWeight: "bold"}}>REMISE:
                                                                </td>
                                                            }
                                                            {devis.aaref !== 'oui' &&
                                                                <td className="bord text-right" colSpan="5"
                                                                    style={{fontWeight: "bold"}}>REMISE:
                                                                </td>
                                                            }
                                                        </>
                                                    }
                                                    {devis.aarem === 'oui' && devis.zone === 'oui' &&
                                                        <>
                                                            {devis.aaref === 'oui' &&
                                                                <td className="bord text-right" colSpan="7"
                                                                    style={{fontWeight: "bold"}}>REMISE:
                                                                </td>
                                                            }
                                                            {devis.aaref !== 'oui' &&
                                                                <td className="bord text-right" colSpan="6"
                                                                    style={{fontWeight: "bold"}}>REMISE:
                                                                </td>
                                                            }
                                                        </>
                                                    }
                                                    {devis.aarem !== 'oui' && devis.zone !== 'oui' &&
                                                        <>
                                                            {devis.aaref === 'oui' &&
                                                                <td className="bord text-right" colSpan="5"
                                                                    style={{fontWeight: "bold"}}>REMISE:
                                                                </td>
                                                            }
                                                            {devis.aaref !== 'oui' &&
                                                                <td className="bord text-right" colSpan="4"
                                                                    style={{fontWeight: "bold"}}>REMISE:
                                                                </td>
                                                            }
                                                        </>
                                                    }
                                                    <td className="bordeu" style={{textAlign: "right", whiteSpace: "nowrap"}}><NumberFormat numb={devis.vremise}/></td>
                                                    <td className="bordeu" style={{textAlign: "center", whiteSpace: "nowrap"}}></td>
                                                    <td className="bordeu" style={{textAlign: "right", fontWeight: "bold", whiteSpace: "nowrap"}}></td>
                                                </tr>
                                                <tr>
                                                    {devis.aarem !== 'oui' && devis.zone === 'oui' &&
                                                        <>
                                                            {devis.aaref === 'oui' &&
                                                                <td className="bord text-right" colSpan="6"
                                                                    style={{fontWeight: "bold"}}>TOTAL HT REMISÉ | AVANCEMENT:
                                                                </td>
                                                            }
                                                            {devis.aaref !== 'oui' &&
                                                                <td className="bord text-right" colSpan="5"
                                                                    style={{fontWeight: "bold"}}>TOTAL HT REMISÉ | AVANCEMENT:
                                                                </td>
                                                            }
                                                        </>
                                                    }
                                                    {devis.aarem === 'oui' && devis.zone !== 'oui' &&
                                                        <>
                                                            {devis.aaref === 'oui' &&
                                                                <td className="bord text-right" colSpan="6"
                                                                    style={{fontWeight: "bold"}}>TOTAL HT REMISÉ | AVANCEMENT:
                                                                </td>
                                                            }
                                                            {devis.aaref !== 'oui' &&
                                                                <td className="bord text-right" colSpan="5"
                                                                    style={{fontWeight: "bold"}}>TOTAL HT REMISÉ | AVANCEMENT:
                                                                </td>
                                                            }
                                                        </>
                                                    }
                                                    {devis.aarem === 'oui' && devis.zone === 'oui' &&
                                                        <>
                                                            {devis.aaref === 'oui' &&
                                                                <td className="bord text-right" colSpan="7"
                                                                    style={{fontWeight: "bold"}}>TOTAL HT REMISÉ | AVANCEMENT:
                                                                </td>
                                                            }
                                                            {devis.aaref !== 'oui' &&
                                                                <td className="bord text-right" colSpan="6"
                                                                    style={{fontWeight: "bold"}}>TOTAL HT REMISÉ | AVANCEMENT:
                                                                </td>
                                                            }
                                                        </>
                                                    }
                                                    {devis.aarem !== 'oui' && devis.zone !== 'oui' &&
                                                        <>
                                                            {devis.aaref === 'oui' &&
                                                                <td className="bord text-right" colSpan="5"
                                                                    style={{fontWeight: "bold"}}>TOTAL HT REMISÉ | AVANCEMENT:
                                                                </td>
                                                            }
                                                            {devis.aaref !== 'oui' &&
                                                                <td className="bord text-right" colSpan="4"
                                                                    style={{fontWeight: "bold"}}>TOTAL HT REMISÉ | AVANCEMENT:
                                                                </td>
                                                            }
                                                        </>
                                                    }
                                                    <td className="bordeu" style={{textAlign: "right", whiteSpace: "nowrap"}}><NumberFormat numb={decompte.totalht}/></td>
                                                    <td className="bordeu" style={{textAlign: "center", whiteSpace: "nowrap"}}><NumberFormat numb={decompte.avancement}/>%</td>
                                                    <td className="bordeu" style={{textAlign: "right", fontWeight: "bold", whiteSpace: "nowrap"}}><NumberFormat numb={decompte.valeur}/></td>
                                                </tr>
                                            </>
                                        }

                                        {devis.aarem === 'non' &&
                                            <tr>
                                                {devis.aarem !== 'oui' && devis.zone === 'oui' &&
                                                    <>
                                                        {devis.aaref === 'oui' &&
                                                            <td className="bord text-right" colSpan="6"
                                                                style={{fontWeight: "bold"}}>TOTAL HT AVANCEMENT:
                                                            </td>
                                                        }
                                                        {devis.aaref !== 'oui' &&
                                                            <td className="bord text-right" colSpan="5"
                                                                style={{fontWeight: "bold"}}>TOTAL HT AVANCEMENT:
                                                            </td>
                                                        }
                                                    </>
                                                }
                                                {devis.aarem === 'oui' && devis.zone !== 'oui' &&
                                                    <>
                                                        {devis.aaref === 'oui' &&
                                                            <td className="bord text-right" colSpan="6"
                                                                style={{fontWeight: "bold"}}>TOTAL HT AVANCEMENT:
                                                            </td>
                                                        }
                                                        {devis.aaref !== 'oui' &&
                                                            <td className="bord text-right" colSpan="5"
                                                                style={{fontWeight: "bold"}}>TOTAL HT AVANCEMENT:
                                                            </td>
                                                        }
                                                    </>
                                                }
                                                {devis.aarem === 'oui' && devis.zone === 'oui' &&
                                                    <>
                                                        {devis.aaref === 'oui' &&
                                                            <td className="bord text-right" colSpan="7"
                                                                style={{fontWeight: "bold"}}>TOTAL HT AVANCEMENT:
                                                            </td>
                                                        }
                                                        {devis.aaref !== 'oui' &&
                                                            <td className="bord text-right" colSpan="6"
                                                                style={{fontWeight: "bold"}}>TOTAL HT AVANCEMENT:
                                                            </td>
                                                        }
                                                    </>
                                                }
                                                {devis.aarem !== 'oui' && devis.zone !== 'oui' &&
                                                    <>
                                                        {devis.aaref === 'oui' &&
                                                            <td className="bord text-right" colSpan="5"
                                                                style={{fontWeight: "bold"}}>TOTAL HT AVANCEMENT:
                                                            </td>
                                                        }
                                                        {devis.aaref !== 'oui' &&
                                                            <td className="bord text-right" colSpan="4"
                                                                style={{fontWeight: "bold"}}>TOTAL HT AVANCEMENT:
                                                            </td>
                                                        }
                                                    </>
                                                }
                                                <td className="bordeu" style={{textAlign: "right", whiteSpace: "nowrap"}}><NumberFormat numb={decompte.totalht}/></td>
                                                <td className="bordeu" style={{textAlign: "center", whiteSpace: "nowrap"}}><NumberFormat numb={decompte.avancement}/>%</td>
                                                <td className="bordeu" style={{textAlign: "right", fontWeight: "bold", whiteSpace: "nowrap"}}><NumberFormat numb={decompte.valeur}/></td>

                                            </tr>
                                        }

                                        <tr>
                                            {devis.aarem !== 'oui' && devis.zone === 'oui' &&
                                                <>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord text-right" colSpan="6"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION ACOMPTE / FACTURE D'ACOMPTE:
                                                        </td>
                                                    }
                                                    {devis.aaref !== 'oui' &&
                                                        <td className="bord text-right" colSpan="5"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION ACOMPTE / FACTURE D'ACOMPTE:
                                                        </td>
                                                    }
                                                </>
                                            }
                                            {devis.aarem === 'oui' && devis.zone !== 'oui' &&
                                                <>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord text-right" colSpan="6"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION ACOMPTE / FACTURE D'ACOMPTE:
                                                        </td>
                                                    }
                                                    {devis.aaref !== 'oui' &&
                                                        <td className="bord text-right" colSpan="5"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION ACOMPTE / FACTURE D'ACOMPTE:
                                                        </td>
                                                    }
                                                </>
                                            }
                                            {devis.aarem === 'oui' && devis.zone === 'oui' &&
                                                <>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord text-right" colSpan="7"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION ACOMPTE / FACTURE D'ACOMPTE:
                                                        </td>
                                                    }
                                                    {devis.aaref !== 'oui' &&
                                                        <td className="bord text-right" colSpan="6"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION ACOMPTE / FACTURE D'ACOMPTE:
                                                        </td>
                                                    }
                                                </>
                                            }
                                            {devis.aarem !== 'oui' && devis.zone !== 'oui' &&
                                                <>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord text-right" colSpan="5"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION ACOMPTE / FACTURE D'ACOMPTE:
                                                        </td>
                                                    }
                                                    {devis.aaref !== 'oui' &&
                                                        <td className="bord text-right" colSpan="4"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION ACOMPTE / FACTURE D'ACOMPTE:
                                                        </td>
                                                    }
                                                </>
                                            }
                                            <td className="bordeu" style={{textAlign: "right"}}></td>
                                            <td className="bordeu" style={{textAlign: "center", whiteSpace: "nowrap"}} ><NumberFormat numb={decompte.acompte}/>%</td>
                                            <td className="bordeu" style={{textAlign: "right", fontWeight: "bold", whiteSpace: "nowrap"}}><NumberFormat numb={acompte}/></td>
                                        </tr>
                                        <tr>
                                            {devis.aarem !== 'oui' && devis.zone === 'oui' &&
                                                <>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord text-right" colSpan="6"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION RETENUE ASSURANCE TRC:
                                                        </td>
                                                    }
                                                    {devis.aaref !== 'oui' &&
                                                        <td className="bord text-right" colSpan="5"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION RETENUE ASSURANCE TRC:
                                                        </td>
                                                    }
                                                </>
                                            }
                                            {devis.aarem === 'oui' && devis.zone !== 'oui' &&
                                                <>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord text-right" colSpan="6"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION RETENUE ASSURANCE TRC:
                                                        </td>
                                                    }
                                                    {devis.aaref !== 'oui' &&
                                                        <td className="bord text-right" colSpan="5"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION RETENUE ASSURANCE TRC:
                                                        </td>
                                                    }
                                                </>
                                            }
                                            {devis.aarem === 'oui' && devis.zone === 'oui' &&
                                                <>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord text-right" colSpan="7"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION RETENUE ASSURANCE TRC:
                                                        </td>
                                                    }
                                                    {devis.aaref !== 'oui' &&
                                                        <td className="bord text-right" colSpan="6"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION RETENUE ASSURANCE TRC:
                                                        </td>
                                                    }
                                                </>
                                            }
                                            {devis.aarem !== 'oui' && devis.zone !== 'oui' &&
                                                <>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord text-right" colSpan="5"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION RETENUE ASSURANCE TRC:
                                                        </td>
                                                    }
                                                    {devis.aaref !== 'oui' &&
                                                        <td className="bord text-right" colSpan="4"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION RETENUE ASSURANCE TRC:
                                                        </td>
                                                    }
                                                </>
                                            }
                                            <td className="bordeu" style={{textAlign: "right"}}></td>
                                            <td className="bordeu" style={{textAlign: "center", whiteSpace: "nowrap"}}><NumberFormat numb={decompte.trc}/>%</td>
                                            <td className="bordeu" style={{textAlign: "right", fontWeight: "bold", whiteSpace: "nowrap"}}><NumberFormat numb={trc}/></td>
                                        </tr>
                                        <tr>
                                            {devis.aarem !== 'oui' && devis.zone === 'oui' &&
                                                <>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord text-right" colSpan="6"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION GARANTIE:
                                                        </td>
                                                    }
                                                    {devis.aaref !== 'oui' &&
                                                        <td className="bord text-right" colSpan="5"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION GARANTIE:
                                                        </td>
                                                    }
                                                </>
                                            }
                                            {devis.aarem === 'oui' && devis.zone !== 'oui' &&
                                                <>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord text-right" colSpan="6"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION GARANTIE:
                                                        </td>
                                                    }
                                                    {devis.aaref !== 'oui' &&
                                                        <td className="bord text-right" colSpan="5"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION GARANTIE:
                                                        </td>
                                                    }
                                                </>
                                            }
                                            {devis.aarem === 'oui' && devis.zone === 'oui' &&
                                                <>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord text-right" colSpan="7"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION GARANTIE:
                                                        </td>
                                                    }
                                                    {devis.aaref !== 'oui' &&
                                                        <td className="bord text-right" colSpan="6"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION GARANTIE:
                                                        </td>
                                                    }
                                                </>
                                            }
                                            {devis.aarem !== 'oui' && devis.zone !== 'oui' &&
                                                <>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord text-right" colSpan="5"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION GARANTIE:
                                                        </td>
                                                    }
                                                    {devis.aaref !== 'oui' &&
                                                        <td className="bord text-right" colSpan="4"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION GARANTIE:
                                                        </td>
                                                    }
                                                </>
                                            }
                                            <td className="bordeu" style={{textAlign: "right"}}></td>
                                            <td className="bordeu" style={{textAlign: "center", whiteSpace: "nowrap"}}><NumberFormat numb={decompte.garantie}/>%</td>
                                            <td className="bordeu" style={{textAlign: "right", fontWeight: "bold", whiteSpace: "nowrap"}}><NumberFormat numb={garantie}/></td>
                                        </tr>
                                        <tr>
                                            {devis.aarem !== 'oui' && devis.zone === 'oui' &&
                                                <>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord text-right" colSpan="6"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION RETENUE DE FINITION:
                                                        </td>
                                                    }
                                                    {devis.aaref !== 'oui' &&
                                                        <td className="bord text-right" colSpan="5"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION RETENUE DE FINITION:
                                                        </td>
                                                    }
                                                </>
                                            }
                                            {devis.aarem === 'oui' && devis.zone !== 'oui' &&
                                                <>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord text-right" colSpan="6"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION RETENUE DE FINITION:
                                                        </td>
                                                    }
                                                    {devis.aaref !== 'oui' &&
                                                        <td className="bord text-right" colSpan="5"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION RETENUE DE FINITION:
                                                        </td>
                                                    }
                                                </>
                                            }
                                            {devis.aarem === 'oui' && devis.zone === 'oui' &&
                                                <>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord text-right" colSpan="7"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION RETENUE DE FINITION:
                                                        </td>
                                                    }
                                                    {devis.aaref !== 'oui' &&
                                                        <td className="bord text-right" colSpan="6"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION RETENUE DE FINITION:
                                                        </td>
                                                    }
                                                </>
                                            }
                                            {devis.aarem !== 'oui' && devis.zone !== 'oui' &&
                                                <>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord text-right" colSpan="5"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION RETENUE DE FINITION:
                                                        </td>
                                                    }
                                                    {devis.aaref !== 'oui' &&
                                                        <td className="bord text-right" colSpan="4"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION RETENUE DE FINITION:
                                                        </td>
                                                    }
                                                </>
                                            }
                                            <td className="bordeu" style={{textAlign: "right"}}></td>
                                            <td className="bordeu" style={{textAlign: "center", whiteSpace: "nowrap"}}><NumberFormat numb={decompte.finition}/>%</td>
                                            <td className="bordeu" style={{textAlign: "right", fontWeight: "bold", whiteSpace: "nowrap"}}><NumberFormat numb={finition}/></td>
                                        </tr>
                                        <tr>
                                            {devis.aarem !== 'oui' && devis.zone === 'oui' &&
                                                <>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord text-right" colSpan="6"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION PRORATA:
                                                        </td>
                                                    }
                                                    {devis.aaref !== 'oui' &&
                                                        <td className="bord text-right" colSpan="5"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION PRORATA:
                                                        </td>
                                                    }
                                                </>
                                            }
                                            {devis.aarem === 'oui' && devis.zone !== 'oui' &&
                                                <>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord text-right" colSpan="6"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION PRORATA:
                                                        </td>
                                                    }
                                                    {devis.aaref !== 'oui' &&
                                                        <td className="bord text-right" colSpan="5"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION PRORATA:
                                                        </td>
                                                    }
                                                </>
                                            }
                                            {devis.aarem === 'oui' && devis.zone === 'oui' &&
                                                <>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord text-right" colSpan="7"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION PRORATA:
                                                        </td>
                                                    }
                                                    {devis.aaref !== 'oui' &&
                                                        <td className="bord text-right" colSpan="6"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION PRORATA:
                                                        </td>
                                                    }
                                                </>
                                            }
                                            {devis.aarem !== 'oui' && devis.zone !== 'oui' &&
                                                <>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord text-right" colSpan="5"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION PRORATA:
                                                        </td>
                                                    }
                                                    {devis.aaref !== 'oui' &&
                                                        <td className="bord text-right" colSpan="4"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION PRORATA:
                                                        </td>
                                                    }
                                                </>
                                            }
                                            <td className="bordeu" style={{textAlign: "right"}}></td>
                                            <td className="bordeu" style={{textAlign: "center", whiteSpace: "nowrap"}}><NumberFormat numb={decompte.prorata}/>%</td>
                                            <td className="bordeu" style={{textAlign: "right", fontWeight: "bold", whiteSpace: "nowrap"}}><NumberFormat numb={prorata}/></td>
                                        </tr>
                                        <tr>
                                            {devis.aarem !== 'oui' && devis.zone === 'oui' &&
                                                <>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord text-right" colSpan="6"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION DES DÉCOMPTES:
                                                        </td>
                                                    }
                                                    {devis.aaref !== 'oui' &&
                                                        <td className="bord text-right" colSpan="5"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION DES DÉCOMPTES:
                                                        </td>
                                                    }
                                                </>
                                            }
                                            {devis.aarem === 'oui' && devis.zone !== 'oui' &&
                                                <>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord text-right" colSpan="6"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION DES DÉCOMPTES:
                                                        </td>
                                                    }
                                                    {devis.aaref !== 'oui' &&
                                                        <td className="bord text-right" colSpan="5"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION DES DÉCOMPTES:
                                                        </td>
                                                    }
                                                </>
                                            }
                                            {devis.aarem === 'oui' && devis.zone === 'oui' &&
                                                <>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord text-right" colSpan="7"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION DES DÉCOMPTES:
                                                        </td>
                                                    }
                                                    {devis.aaref !== 'oui' &&
                                                        <td className="bord text-right" colSpan="6"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION DES DÉCOMPTES:
                                                        </td>
                                                    }
                                                </>
                                            }
                                            {devis.aarem !== 'oui' && devis.zone !== 'oui' &&
                                                <>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord text-right" colSpan="5"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION DES DÉCOMPTES:
                                                        </td>
                                                    }
                                                    {devis.aaref !== 'oui' &&
                                                        <td className="bord text-right" colSpan="4"
                                                            style={{fontWeight: "bold"}}>DÉDUCTION DES DÉCOMPTES:
                                                        </td>
                                                    }
                                                </>
                                            }
                                            <td className="bordeu" style={{textAlign: "right"}}></td>
                                            <td className="bordeu" style={{textAlign: "center"}}></td>
                                            <td className="bordeu" style={{textAlign: "right", fontWeight: "bold", whiteSpace: "nowrap"}}><NumberFormat numb={vava}/></td>
                                        </tr>
                                        <tr>
                                            {devis.aarem !== 'oui' && devis.zone === 'oui' &&
                                                <>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord text-right" colSpan="6"
                                                            style={{fontWeight: "bold"}}>TOTAL HT DÉCOMPTE N°:{ decompte.numdecompte }
                                                        </td>
                                                    }
                                                    {devis.aaref !== 'oui' &&
                                                        <td className="bord text-right" colSpan="5"
                                                            style={{fontWeight: "bold"}}>TOTAL HT DÉCOMPTE N°:{ decompte.numdecompte }
                                                        </td>
                                                    }
                                                </>
                                            }
                                            {devis.aarem === 'oui' && devis.zone !== 'oui' &&
                                                <>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord text-right" colSpan="6"
                                                            style={{fontWeight: "bold"}}>TOTAL HT DÉCOMPTE N°:{ decompte.numdecompte }
                                                        </td>
                                                    }
                                                    {devis.aaref !== 'oui' &&
                                                        <td className="bord text-right" colSpan="5"
                                                            style={{fontWeight: "bold"}}>TOTAL HT DÉCOMPTE N°:{ decompte.numdecompte }
                                                        </td>
                                                    }
                                                </>
                                            }
                                            {devis.aarem === 'oui' && devis.zone === 'oui' &&
                                                <>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord text-right" colSpan="7"
                                                            style={{fontWeight: "bold"}}>TOTAL HT DÉCOMPTE N°:{ decompte.numdecompte }
                                                        </td>
                                                    }
                                                    {devis.aaref !== 'oui' &&
                                                        <td className="bord text-right" colSpan="6"
                                                            style={{fontWeight: "bold"}}>TOTAL HT DÉCOMPTE N°:{ decompte.numdecompte }
                                                        </td>
                                                    }
                                                </>
                                            }
                                            {devis.aarem !== 'oui' && devis.zone !== 'oui' &&
                                                <>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord text-right" colSpan="5"
                                                            style={{fontWeight: "bold"}}>TOTAL HT DÉCOMPTE N°:{ decompte.numdecompte }
                                                        </td>
                                                    }
                                                    {devis.aaref !== 'oui' &&
                                                        <td className="bord text-right" colSpan="4"
                                                            style={{fontWeight: "bold"}}>TOTAL HT DÉCOMPTE N°:{ decompte.numdecompte }
                                                        </td>
                                                    }
                                                </>
                                            }
                                            <td className="bordeu" style={{textAlign: "right"}}></td>
                                            <td className="bordeu" style={{textAlign: "center"}}></td>
                                            <td className="bordeu" style={{textAlign: "right", fontWeight: "bold", whiteSpace: "nowrap"}}><NumberFormat numb={ decompte.apayer }/></td>
                                        </tr>
                                        <tr>
                                            {devis.aarem !== 'oui' && devis.zone === 'oui' &&
                                                <>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord text-right" colSpan="6"
                                                            style={{fontWeight: "bold"}}>TVA { devis.tva }% {stva}
                                                        </td>
                                                    }
                                                    {devis.aaref !== 'oui' &&
                                                        <td className="bord text-right" colSpan="5"
                                                            style={{fontWeight: "bold"}}>TVA { devis.tva }% {stva}
                                                        </td>
                                                    }
                                                </>
                                            }
                                            {devis.aarem === 'oui' && devis.zone !== 'oui' &&
                                                <>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord text-right" colSpan="6"
                                                            style={{fontWeight: "bold"}}>TVA { devis.tva }% {stva}
                                                        </td>
                                                    }
                                                    {devis.aaref !== 'oui' &&
                                                        <td className="bord text-right" colSpan="5"
                                                            style={{fontWeight: "bold"}}>TVA { devis.tva }% {stva}
                                                        </td>
                                                    }
                                                </>
                                            }
                                            {devis.aarem === 'oui' && devis.zone === 'oui' &&
                                                <>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord text-right" colSpan="7"
                                                            style={{fontWeight: "bold"}}>TVA { devis.tva }% {stva}
                                                        </td>
                                                    }
                                                    {devis.aaref !== 'oui' &&
                                                        <td className="bord text-right" colSpan="6"
                                                            style={{fontWeight: "bold"}}>TVA { devis.tva }% {stva}
                                                        </td>
                                                    }
                                                </>
                                            }
                                            {devis.aarem !== 'oui' && devis.zone !== 'oui' &&
                                                <>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord text-right" colSpan="5"
                                                            style={{fontWeight: "bold"}}>TVA { devis.tva }% {stva}
                                                        </td>
                                                    }
                                                    {devis.aaref !== 'oui' &&
                                                        <td className="bord text-right" colSpan="4"
                                                            style={{fontWeight: "bold"}}>TVA { devis.tva }% {stva}
                                                        </td>
                                                    }
                                                </>
                                            }
                                            <td className="bordeu" style={{textAlign: "right"}}></td>
                                            <td className="bordeu" style={{textAlign: "center"}}></td>
                                            <td className="bordeu" style={{textAlign: "right", fontWeight: "bold", whiteSpace:"nowrap"}}><NumberFormat numb={ vtva }/></td>
                                        </tr>
                                        <tr>
                                            {devis.aarem !== 'oui' && devis.zone === 'oui' &&
                                                <>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord text-right" colSpan="6"
                                                            style={{fontWeight: "bold"}}>TOTAL TTC DÉCOMPTE N°:{ decompte.numdecompte }
                                                        </td>
                                                    }
                                                    {devis.aaref !== 'oui' &&
                                                        <td className="bord text-right" colSpan="5"
                                                            style={{fontWeight: "bold"}}>TOTAL TTC DÉCOMPTE N°:{ decompte.numdecompte }
                                                        </td>
                                                    }
                                                </>
                                            }
                                            {devis.aarem === 'oui' && devis.zone !== 'oui' &&
                                                <>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord text-right" colSpan="6"
                                                            style={{fontWeight: "bold"}}>TOTAL TTC DÉCOMPTE N°:{ decompte.numdecompte }
                                                        </td>
                                                    }
                                                    {devis.aaref !== 'oui' &&
                                                        <td className="bord text-right" colSpan="5"
                                                            style={{fontWeight: "bold"}}>TOTAL TTC DÉCOMPTE N°:{ decompte.numdecompte }
                                                        </td>
                                                    }
                                                </>
                                            }
                                            {devis.aarem === 'oui' && devis.zone === 'oui' &&
                                                <>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord text-right" colSpan="7"
                                                            style={{fontWeight: "bold"}}>TOTAL TTC DÉCOMPTE N°:{ decompte.numdecompte }
                                                        </td>
                                                    }
                                                    {devis.aaref !== 'oui' &&
                                                        <td className="bord text-right" colSpan="6"
                                                            style={{fontWeight: "bold"}}>TOTAL TTC DÉCOMPTE N°:{ decompte.numdecompte }
                                                        </td>
                                                    }
                                                </>
                                            }
                                            {devis.aarem !== 'oui' && devis.zone !== 'oui' &&
                                                <>
                                                    {devis.aaref === 'oui' &&
                                                        <td className="bord text-right" colSpan="5"
                                                            style={{fontWeight: "bold"}}>TOTAL TTC DÉCOMPTE N°:{ decompte.numdecompte }
                                                        </td>
                                                    }
                                                    {devis.aaref !== 'oui' &&
                                                        <td className="bord text-right" colSpan="4"
                                                            style={{fontWeight: "bold"}}>TOTAL TTC DÉCOMPTE N°:{ decompte.numdecompte }
                                                        </td>
                                                    }
                                                </>
                                            }
                                            <td className="bordeu" style={{textAlign: "right"}}></td>
                                            <td className="bordeu" style={{textAlign: "center"}}></td>
                                            <td className="bordeu" style={{textAlign: "right", fontWeight: "bold", whiteSpace: "nowrap"}}><NumberFormat numb={ decompte.ttc }/></td>
                                        </tr>

                                    </table>
                                    <p className="text-left">
                                        Arrêté le décompte à la somme
                                        de:<br/>
                                        <span><b>{numberToLetters(parseInt(decompte.ttc), {lang: 'fr'})} {mocode}</b></span>
                                    </p>
                                    <p style={{float: "right",  textDecoration: "underline"}}>SIGNATURE AUTORISÉE</p>
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
                                    <p style={{fontSize: forme.piedsize + "px", textAlign: "center", paddingLeft:"1cm", paddingRight:"1cm"}}
                                       dangerouslySetInnerHTML={{__html: forme.pied}}/>
                                }
                                {forme.typeFooter === "image" &&
                                    <img src={`/gallery/${forme.footerImage}`}
                                         style={{
                                             width: "21cm",
                                             minHeight: forme.footerHeight+"cm",
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