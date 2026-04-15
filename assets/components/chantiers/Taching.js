import {createRoot} from "react-dom/client";
import React from "react";
import {useEffect, useState, useCallback} from "react";
import axios from "axios";
import $ from "jquery";
import Gallery from "react-photo-gallery";
import Carousel, {Modal, ModalGateway} from "react-images";
import * as moment from "moment";

const Taching = () => {

    const [tache, setTache] = useState();
    const [chats, setChats] = useState([]);
    const [currentImage, setCurrentImage] = useState(0);
    const [viewerIsOpen, setViewerIsOpen] = useState(false);

    let taid = $('#taid').val();
    let current = $('#current').val();

    const openLightbox = useCallback((event, {index}) => {
        setCurrentImage(index);
        setViewerIsOpen(true);
    }, []);

    const closeLightbox = () => {
        setCurrentImage(0);
        setViewerIsOpen(false);
    };

    const fetchTaches = async () => {
        axios({
            method: 'GET',
            url: '/crm/tache/get/' + taid,
            contentType: 'application/json; charset=utf-8'
        }).then(function (response) {
            setTache(response.data);
        }).catch(function (error) {
        });
    };

    const fetchChat = async () => {
        window.setInterval(function () {
            axios({
                method: 'GET',
                url: '/crm/chat/tache/' + taid,
                contentType: 'application/json; charset=utf-8'
            }).then(function (response) {
                setChats(response.data);
            }).catch(function (error) {
            });
        }, 5000);
    };

    useEffect(() => {
        fetchTaches();
        fetchChat();
    }, [])

    const showAddFile = () => {
        $('#modalFiche').modal('toggle')
    }

    async function delPic(a) {
        await axios({
            method: 'DELETE',
            url: '/crm/gestion/delfichier/' + a,
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
        }).then(function (response) {
            location.reload();
        })
    }

    $(function () {
        $(".deleto").each(function () {
            $(this).off().on("click", async function () {
                let id = this.id;
                $('#Traitement').modal('show');
                await axios({
                    method: 'DELETE',
                    url: '/crm/chat/del/tache/' + id + '/' + taid,
                    contentType: 'application/json; charset=utf-8',
                    dataType: 'json',
                }).then(function (response) {
                    $('#Traitement').modal('hide');
                    setChats(response.data);
                })
            });
        });
        $(".deleta").each(function () {
            $(this).off().on("click", async function () {
                let id = this.id;
                await axios({
                    method: 'DELETE',
                    url: '/crm/gestion/delfichier/' + id,
                    contentType: 'application/json; charset=utf-8',
                    dataType: 'json',
                }).then(function (response) {
                    location.reload();
                })
            });
        });
    });
    const addChat = () => {
        axios({
            method: 'POST',
            url: '/crm/chat/tache/add/' + tache.id + '/' + $('#messa').val(),

            dataType: 'json',
        }).then(function (response) {
            setChats(response.data);
            $('#messa').val('');
        }).catch(function (error) {
        });
    }

    $('#addFileTache').off().on("click", function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#addFileTache').addClass('hide');
            $('#closeFileTache').addClass('hide');
            $('#loadFileTache').css('display', '');
            axios({
                method: 'POST',
                url: '/crm/gestion/fichier/tache/add/' + tache.id,
                data: new FormData($('#addFileTacheForm')[0]),
                contentType: false,
                processData: false,
                cache: false,
                dataType: 'json',
            }).then(function (response) {
                setTache(response.data);
                $('#addFileTache').removeClass('hide');
                $('#closeFileTache').removeClass('hide');
                $('#loadFileTache').hide();
                $('#modalFiche').modal('toggle')
            }).catch(function (error) {
            });
        }
    });

    if (tache !== undefined) {
        let fichiers = tache.fichiers;
        let renderFichiers = '';
        let renderChats = '';
        let photos = null;
        const donnee = [];
        const res = {};
        if (fichiers.length > 0) {
            fichiers.map((fiche) => {
                if (fiche.categorie === 'IMAGES') {
                    res.src = '/' + fiche.folde + '/' + fiche.nomfichier;
                    res.width = 80;
                    res.id = fiche.id;
                    res.height = 50;
                    donnee.push({...res})
                }
            })
            photos = JSON.parse(JSON.stringify(donnee));
            renderFichiers = fichiers.map((fiche) => {
                if (fiche.categorie === 'FICHIERS') {
                    return (
                        <table>
                            <tr>
                                <td key={fiche.id.toString()} style={{fontSize: "13px"}}>
                                    <a
                                        href={`/${fiche.folde}/${fiche.nomfichier}`}
                                        style={{color: "#000", marginLeft: "20px"}}>&raquo; {fiche.nomfichier}</a>
                                </td>
                                <td>
                                    <a className="deleta" id={fiche.id}><i className="fa fa-trash col-pink" style={{fontSize: "16px"}}
                                                                                aria-hidden="true"
                                                                                title="Supprimer cette ligne"></i></a>
                                </td>
                            </tr>
                        </table>
                    )
                }
            })
        }
        if (chats.length > 0) {
            renderChats = chats.map((chat) => {
                let del = " ";
                if (parseInt(chat.owner.id) === parseInt(current)) {
                    del = '<a class="deleto" id=' + chat.id + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a>';
                } else {
                    del = " ";
                }

                return (
                    <div key={chat.id.toString()} className="bg-gray"
                         style={{padding: "10px", borderRadius: "20px", marginBottom: "10px"}}>
                        <p className="col-blue">De: <span
                            className="col-pink">{chat.owner.nom + ' ' + chat.owner.prenoms}</span>
                            <br/> <span
                                className="col-blue-grey">le {moment(chat.date).locale("fr").format('LLLL')}</span></p>
                        <p>{chat.message}</p>
                        <p className="text-right" dangerouslySetInnerHTML={{__html: del}}/>
                    </div>
                )
            })
        }

        localStorage.setItem('reloadd', 'tache/' + tache.id);

        return (
            <div className="container-fluid">
                <div className="block-header">
                    <div className="row clearfix p-b-5">
                        <div className="col-md-12">
                            <h3 className="bolo700 col-pink">Gestionnaire des taches</h3>
                            <div className="card" style={{padding: "20px"}}>
                                <h4 className="bolo700 col-blue">&raquo; Tache</h4>
                                <h6 className="font-14 m-l-20" dangerouslySetInnerHTML={{__html: tache.libelle}}/>
                                <hr/>
                                <h4 className="font-14  col-blue-grey m-t-20">&raquo; Section: <span
                                    className="col-black">{tache.section.libelle}</span></h4>
                                <h4 className="font-14  col-blue-grey">&raquo; Planning: <span
                                    className="col-black">{tache.section.planning.planning}</span></h4>
                                <h4 className="font-14  col-blue-grey">&raquo; Chantier: <a
                                    href={`/crm/gestion/${tache.chantier.id}`}> {tache.chantier.client.nomclient} | {tache.chantier.nomchantier}</a>
                                </h4>
                            </div>
                        </div>
                        <div className="col-md-5">
                            <h4 className="bolo700">Commentaires</h4>
                            <textarea id="messa" name="w3review" rows="4" cols="50"
                                      style={{width: "100%"}}></textarea><br/>
                            <button type="button" className="btn btn-primary text-right" onClick={() => {
                                addChat()
                            }}>Envoyer
                            </button>
                            <div className="bg-white col-black"
                                 style={{overflowY: "scroll", height: "600px", padding: "10px"}}>
                                {renderChats}
                            </div>
                        </div>
                        <div className="col-md-7">
                            <h4 className="bolo700">Documents | Images</h4>
                            <button type="button" className="btn btn-primary text-center" onClick={() => {
                                showAddFile()
                            }}>AJOUTER DES FICHIERS OU IMAGES
                            </button>
                            <h5 className="bolo600 col-pink"><u>Fichiers</u></h5>
                            {renderFichiers}
                            <br/>
                            <h5 className="bolo600 col-pink"><u>Images</u></h5>

                            {photos !== null && photos.length > 0 &&
                                <Gallery photos={photos} onClick={openLightbox} direction={"column"}/>
                            }
                            <h5 className="bolo600 col-pink"><u>Supprimer les photos</u></h5>
                            {photos !== null && photos.map((img, index) => (
                                <h5> &raquo; <a href="#" onClick={() => {
                                    delPic(img.id);
                                }} className="bolo600">Photo {index + 1}</a></h5>
                            ))}
                            <ModalGateway>
                                {viewerIsOpen && true ? (
                                    <Modal onClose={closeLightbox}>
                                        <Carousel
                                            currentIndex={currentImage}
                                            views={photos.map(x => ({
                                                ...x,
                                                srcset: x.srcSet,
                                                caption: x.title
                                            }))}
                                        />
                                    </Modal>
                                ) : null}
                            </ModalGateway>
                        </div>

                    </div>
                </div>
            </div>
        );
    } else {
        return (<></>);
    }

}

try {
    const root = createRoot(document.getElementById('taching'));
    root.render(<Taching/>);
} catch (e) {
}
