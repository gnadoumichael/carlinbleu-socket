import React, {useEffect, useState} from "react";
import {createRoot} from 'react-dom/client';
import axios from "axios";
import ReactHTMLTableToExcel from 'react-html-table-to-excel';
import NumberFormat from "../../fonctions/NumberFormat";
import Moment from 'react-moment';
import $ from "jquery";

const ComptesClients = () => {
    const [clients, setClients] = useState([]);
    let tozcout = 0;
    let tozregle = 0;
    let tozsolde = 0;
    let totdecnv = 0;
    let totdecv = 0;
    let totfacnv = 0;
    let totfacv = 0;
    let tosoldeClient = 0;

    const fetchClients = async () => {
        const dde = JSON.parse($('#jsonclients').val());
        setClients(dde);
    };

    useEffect(() => {
        fetchClients();
    }, []);

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
    const handleClients = event => {
        let filter = event.target.value.toLowerCase();
        $("#etates tr.paginate1").filter(function () {
            $(this).toggle($(this).text().toLowerCase().replaceAll(' ', '').indexOf(filter) > -1)
        });
    };
    const showChantier = (id) => {
        if ($('.' + id + 'clie').hasClass("hide")) {
            $('.' + id + 'clie').removeClass('hide');
        } else {
            $('.' + id + 'clie').addClass('hide');
        }
    }
    const showChantierContent = (id) => {
        if ($('.' + id + 'chan').hasClass("hide")) {
            $('.' + id + 'chan').removeClass('hide');
        } else {
            $('.' + id + 'chan').addClass('hide');
        }
    }

    return (<>
        <div className="col-md-12" style={{paddingLeft: "0", marginTop: "20px"}}>
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
                    <div id="collapseEtats" className="panel-collapse " role="tabpanel"
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
            </div>
        </div>
    </>);

}

try {
    const root = createRoot(document.getElementById('setcomptesclients'));
    root.render(<ComptesClients/>);
} catch (e) {
}
