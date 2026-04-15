import React from "react";
import {createRoot} from 'react-dom/client';
import {useEffect, useState} from "react";
import axios from "axios";
import $ from "jquery";
import * as moment from "moment";
import {deviceType} from "react-device-detect";
import ReactQuill, {Quill} from 'react-quill';
import 'react-quill/dist/quill.snow.css';


const Chatter = () => {

    const [messa, setMessa] = useState('');
    const [chats, setChats] = useState([]);
    const [taches, setTaches] = useState([]);
    const [users, setUsers] = useState([]);
    const [receive, setReceive] = useState(null);
    const [rece, setRece] = useState();
    const [mess, setMess] = useState();

    let link = " ";
    let listtache = [];
    let listtaches = [];
    let listk = [];
    let renderTaches;

    const fetchUsers = async () => {
        axios({
            method: 'GET',
            url: '/crm/start/users/get',
            contentType: 'application/json; charset=utf-8'
        }).then(function (response) {
            setUsers(response.data);
        }).catch(function (error) {
        });
    };

    const fetchChats = async () => {
        let az = localStorage.getItem("receiverid");

        if (az !== null) {
            if (localStorage.getItem("type") === "chat") {

                $("#uuer").attr("src", "/gallery/" + localStorage.getItem("receiverphoto"));
                $("#chatcontent").animate({scrollTop: $('#chatcontent').height() + 25000}, 500);
                if (localStorage.getItem("receiverphoto") !== "null") {
                    $("#uuer").attr("src", "/gallery/" + localStorage.getItem("receiverphoto"));
                    $("#uuer").css("visibility", "visible");
                    $(".clico").css("visibility", "visible");
                } else {
                    $("#uuer").attr("src", "/gallery/usere.png");
                    $("#uuer").css("visibility", "visible");
                    $(".clico").css("visibility", "visible");
                }
                $("#uuer").css("visibility", "visible");
                $(".clico").css("visibility", "visible");
                $('.useselected').html(localStorage.getItem("receivernom"));


                axios({
                    method: 'GET',
                    url: '/crm/chat/get/' + az + '/' + $('#current').val(),
                    contentType: 'application/json; charset=utf-8'
                }).then(function (response) {

                    let dd = response.data;
                    let sorted = dd.sort(function (a, b) {
                        return new Date(a.date) - new Date(b.date);
                    });
                    setChats(sorted);

                }).catch(function (error) {
                });

            }
            if (localStorage.getItem("type") === "tache") {

                $("#uuer").attr("src", "/img/" + localStorage.getItem("receiverphoto"));
                $("#chatcontent").animate({scrollTop: $('#chatcontent').height() + 25000}, 500);

                $("#uuer").attr("src", "/img/" + localStorage.getItem("receiverphoto"));
                $("#uuer").css("visibility", "visible");
                $(".clico").css("visibility", "visible");

                $("#uuer").css("visibility", "visible");
                $(".clico").css("visibility", "visible");
                $('.useselected').html(localStorage.getItem("receivernom"));


                axios({
                    method: 'GET',
                    url: '/crm/chat/tache/get/' + az,
                    contentType: 'application/json; charset=utf-8'
                }).then(function (response) {

                    let dd = response.data;
                    let sorted = dd.sort(function (a, b) {
                        return new Date(a.date) - new Date(b.date);
                    });

                    setChats(sorted);

                }).catch(function (error) {
                });

            }
        }
    }

    const fetchTaches = async () => {
        axios({
            method: 'GET',
            url: '/crm/chat/tacher/get',
            contentType: 'application/json; charset=utf-8'
        }).then(function (response) {
            setTaches(response.data);
        }).catch(function (error) {
        });
    };

    useEffect(() => {
        jQuery(document).ready(function () {
            jQuery("time.timeago").timeago();
            jQuery.timeago.settings.strings = {
                prefixAgo: "il y a",
                prefixFromNow: null,
                suffixAgo: null,
                suffixFromNow: "d'ici",
                seconds: "moins d'une minute",
                minute: "une minute",
                minutes: "%d minutes",
                hour: "une heure",
                hours: "%d heures",
                day: "un jour",
                days: "%d jours",
                month: "un mois",
                months: "%d mois",
                year: "un an",
                years: "%d ans",
                wordSeparator: " ",
                numbers: []
            };
        });
        fetchUsers();
        fetchTaches();
        $('.clico').removeClass("hide");
        const interval = setInterval(() => {
            fetchChats();
        }, 10000);
        return () => clearInterval(interval);

    }, [])

    function openFile(file) {
        const extension = file.substr((file.lastIndexOf('.') + 1));
        switch (extension) {
            case 'jpg':
            case 'png':
            case 'gif':
                return ('image');
            case 'zip':
            case 'rar':
                return ('rar');
            case 'pdf':
                return ('pdf');
            case 'xls':
            case 'xlsx':
                return ('excel');
            case 'doc':
            case 'docx':
                return ('word');
            default:
                return ('unknow');
        }
    }

    $(function () {
        $(".getu").each(function () {
            $(this).off().on("click", async function () {

                $('#tt3').removeClass("active");
                $('#tt1').addClass("active");
                $(".acces").css("visibility", "hidden");
                let pp = this.id;
                let uu = 0;
                let sele;
                users.map((user) => {
                    if (parseInt(user.id) === parseInt(pp) && uu === 0) {
                        uu = 1;
                        sele = user;
                        setReceive(user);
                    }
                });

                if (sele.photo != null) {
                    $("#uuer").attr("src", "/gallery/" + sele.photo);
                    $("#uuer").css("visibility", "visible");
                    $(".clico").css("visibility", "visible");
                } else {
                    $("#uuer").attr("src", "/gallery/usere.png");
                    $("#uuer").css("visibility", "visible");
                    $(".clico").css("visibility", "visible");
                }
                $('.useselected').html(sele.nom + ' ' + sele.prenoms + '<br>' + sele.contact);

                localStorage.setItem('receiverid', this.id);
                localStorage.setItem('receivernom', sele.nom + ' ' + sele.prenoms + '<br>' + sele.contact);
                localStorage.setItem('receiverphoto', sele.photo);
                localStorage.setItem('type', "chat");


                axios({
                    method: 'GET',
                    url: '/crm/chat/get/' + this.id + '/' + $('#current').val(),
                    contentType: 'application/json; charset=utf-8'
                }).then(function (response) {

                    let dd = response.data;
                    let sorted = dd.sort(function (a, b) {
                        return new Date(a.date) - new Date(b.date);
                    });

                    setChats(sorted);
                    $("#chatcontent").animate({scrollTop: $('#chatcontent').height() + 25000}, 500);

                }).catch(function (error) {
                });
            });
        });
    });
    $(function () {
        $(".getsu").each(function () {
            $(this).off().on("click", async function () {
                $('#tt3').removeClass("active");
                $('#tt1').addClass("active");
                $(".acces").css("visibility", "hidden");
                let pp = this.id;
                let uu = 0;
                let sele;
                taches.map((tache) => {
                    if (parseInt(tache.tache["id"]) === parseInt(pp) && uu === 0) {
                        uu = 1;
                        sele = tache;
                    }
                });
                $("#uuer").attr("src", "/img/tache.png");
                $("#uuer").css("visibility", "visible");
                $(".clico").css("visibility", "visible");

                $('.useselected').html(sele.tache['libelle']);

                localStorage.setItem('receiverid', pp);
                localStorage.setItem('receivernom', sele.tache['libelle']);
                localStorage.setItem('receiverphoto', "tache.png");
                localStorage.setItem('type', "tache");

                axios({
                    method: 'GET',
                    url: '/crm/chat/tache/get/' + pp,
                    contentType: 'application/json; charset=utf-8'
                }).then(function (response) {

                    let dd = response.data;
                    let sorted = dd.sort(function (a, b) {
                        return new Date(a.date) - new Date(b.date);
                    });

                    setChats(sorted);
                    $("#chatcontent").animate({scrollTop: $('#chatcontent').height() + 25000}, 500);

                }).catch(function (error) {
                });

            });
        });
    });

    taches.map((tache) => {
        listtache.push(tache.tache.chantier["id"]);
    });

    taches.map((tache) => {
        listk.push(tache.tache["id"]);
    });

    const mmm = listtache.filter(function (elem, index, self) {
        return index === self.indexOf(elem);
    });

    const mmmm = listk.filter(function (elem, index, self) {
        return index === self.indexOf(elem);
    });

    const renderUsers = users.map((user) => {

        if (user.photo != null) {
            link = user.photo
        } else {
            link = "usere.png";
        }

        return (<li className="clearfix" key={user.id} style={{marginTop: "20px"}}>
            <img src={`/gallery/${link}`}
                 style={{width: "60px", height: "60px", marginRight: "10px", borderRadius: "30px", float: "left"}}
                 alt="avatar"/>
            <a id={user.id} className="about getu" data-toggle="tab" href="#home">
                <div className="name col-white">{user.nom + ' ' + user.prenoms}</div>
                <div className="col-black">{user.contact}</div>
                <div className="col-black">{user.username}</div>
            </a>
        </li>)

    });
    const rendUsers = users.map((user) => {

        if (user.photo != null) {
            link = user.photo
        } else {
            link = "usere.png";
        }

        return (<li className="clearfix" key={user.id}>
            <img src={`/gallery/${link}`}
                 style={{width: "60px", height: "60px", marginRight: "10px", borderRadius: "30px", float: "left"}}
                 alt="avatar"/>
            <a id={user.id} className="about getu">
                <div className="name col-pink">{user.nom + ' ' + user.prenoms}</div>
                <div className="col-black">{user.contact}</div>
                <div className="col-black">{user.username}</div>
            </a>
        </li>)

    });
    const renderSelectUsers = users.map((user) => {
        return (
            <div className="form-check" key={user.id}>
                <input className="form-check-input selu" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                       value={user.id}/>
                <label className="form-check-label col-black" htmlFor="flexRadioDefault1" style={{fontSize: "16px"}}>
                    {user.nom + ' ' + user.prenoms}
                </label>
            </div>
        )
    });
    const renderChats = chats.map((chat) => {

        let mp = ' ';

        if (parseInt($('#current').val()) === parseInt(chat.owner.id)) {
            if (chat.fichier !== null) {
                let typy = openFile(chat.fichier["nomfichier"]);
                if (typy === "pdf") {
                    mp = '<div class="message-data text-right">' +
                        '<div class="message other-message float-right">';
                    if (chat.replyeChat !== null) {
                        mp = mp + '<span class="bg-white col-black" style="border: 1px solid #ff002d; padding: 5px; border-radius: 10px">' + chat.replyeChat['message'] + '</span><br>';
                    }
                    mp = mp + '<a href="/' + chat.fichier["folde"] + '/' + chat.fichier["nomfichier"] + '" target="_blank"><img src="/img/pdf.png" alt="file"/>' + chat.fichier["nomfichier"] + '</a><br>' +
                        '<a href="#" title="Supprimer" class="float-right bg-pink delote hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px;margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">clear</i></a>' +
                        '<a href="#" title="Transférer" class="float-right bg-orange transfer hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">redo</i></a>' +
                        '<a href="#" title="Répondre" class="float-right bg-blue repondre hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">undo</i></a>' +
                        '<a href="#" class="float-right bg-white" style="font-size: 10px; color: black; position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000">' + jQuery.timeago(chat.date) + '</a>' +
                        '</div>';
                }
                if (typy === "excel") {
                    mp = '<div class="message-data text-right">' +
                        '<div class="message other-message float-right">';
                    if (chat.replyeChat !== null) {
                        mp = mp + '<span class="bg-white col-black" style="border: 1px solid #ff002d; padding: 5px; border-radius: 10px">' + chat.replyeChat['message'] + '</span><br>';
                    }
                    mp = mp + '<a href="/' + chat.fichier["folde"] + '/' + chat.fichier["nomfichier"] + '" target="_blank"><img src="/img/excel.png" alt="file"/>' + chat.fichier["nomfichier"] + '</a><br>' +
                        '<a href="#" title="Supprimer" class="float-right bg-pink delote hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px;margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">clear</i></a>' +
                        '<a href="#" title="Transférer" class="float-right bg-orange transfer hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">redo</i></a>' +
                        '<a href="#" title="Répondre" class="float-right bg-blue repondre hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">undo</i></a>' +
                        '<a href="#" class="float-right bg-white" style="font-size: 10px; color: black; position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000">' + jQuery.timeago(chat.date) + '</a>' +
                        '</div>';
                }
                if (typy === "word") {
                    mp = '<div class="message-data text-right">' +
                        '<div class="message other-message float-right">';
                    if (chat.replyeChat !== null) {
                        mp = mp + '<span class="bg-white col-black" style="border: 1px solid #ff002d; padding: 5px; border-radius: 10px">' + chat.replyeChat['message'] + '</span><br>';
                    }
                    mp = mp + '<a href="/' + chat.fichier["folde"] + '/' + chat.fichier["nomfichier"] + '" target="_blank"><img src="/img/word.png" alt="file"/>' + chat.fichier["nomfichier"] + '</a><br>' +
                        '<a href="#" title="Supprimer" class="float-right bg-pink delote hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px;margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">clear</i></a>' +
                        '<a href="#" title="Transférer" class="float-right bg-orange transfer hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">redo</i></a>' +
                        '<a href="#" title="Répondre" class="float-right bg-blue repondre hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">undo</i></a>' +
                        '<a href="#" class="float-right bg-white" style="font-size: 10px; color: black; position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000">' + jQuery.timeago(chat.date) + '</a>' +
                        '</div>';
                }
                if (typy === "image") {
                    mp = '<div class="message-data text-right">' +
                        '<div class="message other-message float-right">';
                    if (chat.replyeChat !== null) {
                        mp = mp + '<span class="bg-white col-black" style="border: 1px solid #ff002d; padding: 5px; border-radius: 10px">' + chat.replyeChat['message'] + '</span><br>';
                    }
                    mp = mp + '<a href="/' + chat.fichier["folde"] + '/' + chat.fichier["nomfichier"] + '" target="_blank"><img src="/img/pictu.png" alt="file"/>' + chat.fichier["nomfichier"] + '</a><br>' +
                        '<a href="#" title="Supprimer" class="float-right bg-pink delote hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px;margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">clear</i></a>' +
                        '<a href="#" title="Transférer" class="float-right bg-orange transfer hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">redo</i></a>' +
                        '<a href="#" title="Répondre" class="float-right bg-blue repondre hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">undo</i></a>' +
                        '<a href="#" class="float-right bg-white" style="font-size: 10px; color: black; position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000">' + jQuery.timeago(chat.date) + '</a>' +
                        '</div>';
                }
                if (typy === "unknow") {
                    mp = '<div class="message-data text-right">' +
                        '<div class="message other-message float-right">';
                    if (chat.replyeChat !== null) {
                        mp = mp + '<span class="bg-white col-black" style="border: 1px solid #ff002d; padding: 5px; border-radius: 10px">' + chat.replyeChat['message'] + '</span><br>';
                    }
                    mp = mp + '<a href="/' + chat.fichier["folde"] + '/' + chat.fichier["nomfichier"] + '" target="_blank"><img src="/img/doc.png" alt="file"/>' + chat.fichier["nomfichier"] + '</a><br>' +
                        '<a href="#" title="Supprimer" class="float-right bg-pink delote hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px;margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">clear</i></a>' +
                        '<a href="#" title="Transférer" class="float-right bg-orange transfer hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">redo</i></a>' +
                        '<a href="#" title="Répondre" class="float-right bg-blue transfer hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">undo</i></a>' +
                        '<a href="#"  class="float-right bg-white" style="font-size: 10px; color: black; position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000">' + jQuery.timeago(chat.date) + '</a>' +
                        '</div>';
                }
            } else {
                mp = '<div class="message-data text-right ">' +
                    '<div class="message other-message float-right">';
                if (chat.replyeChat !== null) {
                    mp = mp + '<span class="bg-white col-black" style="border: 1px solid #ff002d; padding: 5px; border-radius: 10px">' + chat.replyeChat['message'] + '</span><br>';
                }
                mp = mp + '' + chat.message + '<br>' +
                    '<span style="font-size: 10px; border-radius: 20px;  background-color: white; padding:0 2px 0 2px; float: left">' + jQuery.timeago(chat.date) + '</span>' +
                    '<a href="#" class="float-right bg-pink delote hado hide" id="' + chat.id + '" style="border-radius: 20px; padding:  0 3px 0 3px"><i class="material-icons col-white " style="font-size: 16px">clear</i></a>' +
                    '<a href="#" class="float-right  bg-orange transfer hado hide " id="' + chat.id + '" style="border-radius: 20px; padding: 0 3px 0 3px; margin: 0 5px 0 5px"><i class="material-icons col-white" style="font-size: 16px">redo</i></a>' +
                    '<a href="#" title="Répondre" class="float-right bg-blue repondre hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">undo</i></a>' +
                    '</div>';
            }
        } else {
            if (chat.fichier !== null) {
                let typy = openFile(chat.fichier["nomfichier"]);
                if (typy === "pdf") {
                    mp = '<div class="message-data">' +
                        '<div class="message my-message">';
                    if (chat.replyeChat !== null) {
                        mp = mp + '<span class="bg-white col-black" style="border: 1px solid #ff002d; padding: 5px; border-radius: 10px">' + chat.replyeChat['message'] + '</span><br>';
                    }
                    mp = mp + '<a href="/' + chat.fichier["folde"] + '/' + chat.fichier["nomfichier"] + '" target="_blank"><img src="/img/pdf.png" alt="file"/>' + chat.fichier["nomfichier"] + '</a><br>' +
                        '<a href="#" title="Transférer" class="float-right bg-orange transfer hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">redo</i></a>' +
                        '<a href="#" title="Répondre" class="float-right bg-blue repondre hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">undo</i></a>' +
                        '<a href="#" class="float-right bg-white" style="font-size: 10px; color: black; position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000">' + jQuery.timeago(chat.date) + '</a>' +
                        '</div>';
                }
                if (typy === "excel") {
                    mp = '<div class="message-data">' +
                        '<div class="message my-message">';
                    if (chat.replyeChat !== null) {
                        mp = mp + '<span class="bg-white col-black" style="border: 1px solid #ff002d; padding: 5px; border-radius: 10px">' + chat.replyeChat['message'] + '</span><br>';
                    }
                    mp = mp + '<a href="/' + chat.fichier["folde"] + '/' + chat.fichier["nomfichier"] + '" target="_blank"><img src="/img/excel.png" alt="file"/>' + chat.fichier["nomfichier"] + '</a><br>' +
                        '<a href="#" title="Transférer" class="float-right bg-orange transfer hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">redo</i></a>' +
                        '<a href="#" title="Répondre" class="float-right bg-blue repondre hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">undo</i></a>' +
                        '<a href="#" class="float-right bg-white" style="font-size: 10px; color: black; position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000">' + jQuery.timeago(chat.date) + '</a>' +
                        '</div>';
                }
                if (typy === "word") {
                    mp = '<div class="message-data">' +
                        '<div class="message my-message">';
                    if (chat.replyeChat !== null) {
                        mp = mp + '<span class="bg-white col-black" style="border: 1px solid #ff002d; padding: 5px; border-radius: 10px">' + chat.replyeChat['message'] + '</span><br>';
                    }
                    mp = mp + '<a href="/' + chat.fichier["folde"] + '/' + chat.fichier["nomfichier"] + '" target="_blank"><img src="/img/word.png" alt="file"/>' + chat.fichier["nomfichier"] + '</a><br>' +
                        '<a href="#" title="Transférer" class="float-right bg-orange transfer hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">redo</i></a>' +
                        '<a href="#" title="Répondre" class="float-right bg-blue repondre hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">undo</i></a>' +
                        '<a href="#" class="float-right bg-white" style="font-size: 10px; color: black; position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000">' + jQuery.timeago(chat.date) + '</a>' +
                        '</div>';
                }
                if (typy === "image") {
                    mp = '<div class="message-data">' +
                        '<div class="message my-message">';
                    if (chat.replyeChat !== null) {
                        mp = mp + '<span class="bg-white col-black" style="border: 1px solid #ff002d; padding: 5px; border-radius: 10px">' + chat.replyeChat['message'] + '</span><br>';
                    }
                    mp = mp + '<a href="/' + chat.fichier["folde"] + '/' + chat.fichier["nomfichier"] + '" target="_blank"><img src="/img/pictu.png" alt="file"/>' + chat.fichier["nomfichier"] + '</a><br>' +
                        '<a href="#" title="Transférer" class="float-right bg-orange transfer hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">redo</i></a>' +
                        '<a href="#" title="Répondre" class="float-right bg-blue repondre hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">undo</i></a>' +
                        '<a href="#" class="float-right bg-white" style="font-size: 10px; color: black; position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000">' + jQuery.timeago(chat.date) + '</a>' +
                        '</div>';
                }
                if (typy === "unknow") {
                    mp = '<div class="message-data">' +
                        '<div class="message my-message">';
                    if (chat.replyeChat !== null) {
                        mp = mp + '<span class="bg-white col-black" style="border: 1px solid #ff002d; padding: 5px; border-radius: 10px">' + chat.replyeChat['message'] + '</span><br>';
                    }
                    mp = mp + '<a href="/' + chat.fichier["folde"] + '/' + chat.fichier["nomfichier"] + '" target="_blank"><img src="/img/doc.png" alt="file"/>' + chat.fichier["nomfichier"] + '</a><br>' +
                        '<a href="#" title="Transférer" class="float-right bg-orange transfer hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">redo</i></a>' +
                        '<a href="#" title="Répondre" class="float-right bg-blue repondre hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">undo</i></a>' +
                        '<a href="#"  class="float-right bg-white" style="font-size: 10px; color: black; position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000">' + jQuery.timeago(chat.date) + '</a>' +
                        '</div>';
                }
            } else {
                mp = '<div class="message-data">' +
                    '<div class="message my-message">';
                if (chat.replyeChat !== null) {
                    mp = mp + '<span class="bg-white col-black" style="border: 1px solid #ff002d; padding: 5px; border-radius: 10px">' + chat.replyeChat['message'] + '</span><br>';
                }
                mp = mp + '' + chat.message + '<br>' +
                    '<span style="font-size: 10px; border-radius: 20px;  background-color: white; padding:0 2px 0 2px; float: left">' + jQuery.timeago(chat.date) + '</span>' +
                    '<a href="#" title="Transférer" class="float-right  bg-orange transfer hado hide " id="' + chat.id + '" style="border-radius: 20px; padding: 0 3px 0 3px; margin: 0 5px 0 5px"><i class="material-icons col-white" style="font-size: 16px">redo</i></a>' +
                    '<a href="#" title="Répondre" class="float-right bg-blue repondre hado hide" id="' + chat.id + '" style="position: relative; padding: 0 3px 0 3px; border-radius: 20px; margin: 0 5px 0 5px; z-index: 1000"><i class="material-icons col-white" style="font-size: 16px">undo</i></a>' +
                    '</div>';
            }
        }

        return (<li className="clearfix" key={chat.id} dangerouslySetInnerHTML={{__html: mp}}/>)
    });

    for (let i = 0; i < mmm.length; i++) {
        let ppp = 0;
        taches.map((tache) => {
            if (mmm[i] === tache.tache.chantier["id"] && ppp === 0) {
                let mp = ' ';
                let chantier = tache.tache.chantier;
                let client = chantier["client"];
                let section = tache.tache.section;
                let planning = section["planning"];

                mp = '<div class="panel panel-pri shadow" style="margin-bottom: 0 !important;">' +
                    '<div class="panel-heading" role="tab" id="heading' + tache.tache["id"] + '">' +
                    '<h5 class="panel-title">' +
                    '<a class="collapsed outai  col-white" role="button"\n' +
                    '                               data-toggle="collapse"\n' +
                    '                               data-parent="#accordion_1" href="#collapse' + tache.tache["id"] + '"\n' +
                    '                               aria-expanded="false"\n' +
                    '                               aria-controls="collapse' + tache.tache["id"] + '"> <span class="col-yellow"># ' + client["nomclient"] + '</span><br/><span class="h6"> # ' + chantier["nomchantier"] +
                    '                            </span></a>\n' +
                    '                        </h5>\n' +
                    '                    </div>' +
                    '                 <div id="collapse' + tache.tache["id"] + '" class="panel-collapse collapse" role="tabpanel"\n' +
                    '                                                 aria-labelledby="heading' + tache.tache["id"] + '">\n' +
                    '                                                <div class="bg-blue-grey" style="overflow: scroll">\n';
                for (let j = 0; j < mmmm.length; j++) {
                    let pppp = 0;
                    taches.map((tache) => {
                        if (mmmm[j] === tache.tache["id"] && pppp === 0) {
                            mp = mp + '<div class="shadow" style="padding: 20px 0 0 15px">' +
                                '<a id=' + tache.tache["id"] + ' style="padding:5px; m" class="about getsu card">' +
                                '<div class="message-data " style="border-radius: 20px;">' +
                                '<h5 class="col-pink bolo600">Planning | Section</h5>' +
                                '<h5 class="col-black">* ' + planning["planning"] + '</br>' +
                                '* ' + section["libelle"] + '</h5>' +
                                '<h5 class="col-pink bolo600">Tache: </h5>' +
                                '<h5 class="col-black">' + tache.tache["libelle"] + '</h5>' +
                                '<span class="message-data-time col-blue-grey">' + jQuery.timeago(tache.date) + '</span>' +
                                '</div></a></div>';

                            pppp = 1;
                        }
                    });
                }

                mp = mp + '</div></div></div>';
                listtaches.push(<div style={{margin: "10px 5px 10px 5px"}} className="clearfix" key={tache.id}
                                     dangerouslySetInnerHTML={{__html: mp}}/>);
                ppp = 1;
            }
        });
    }
    renderTaches = listtaches.map((tache) => {
        return (tache);
    });
    $('#adfile').off().on("click", function (event) {
        $('#modaler').modal('toggle');
    })

    $('#sendchate').off().on("click", async function (event) {
        event.preventDefault();
        const receiver = localStorage.getItem('receiverid');
        let repy = "0";
        if (localStorage.getItem("replyid") !== null) {
            repy = localStorage.getItem('replyid');
        }
        if (localStorage.getItem("type") === "chat") {
            axios({
                method: 'POST',
                url: '/crm/start/chat/adder/' + receiver + '/0' + '/' + repy,
                data: JSON.stringify({x: messa}),
                contentType: 'application/json; charset=utf-8'
            }).then(function (response) {
                setChats(response.data);
                $("#chatcontent").animate({scrollTop: $('#chatcontent').height() + 25000}, 500);
                $('.repondu').addClass("hide");
                localStorage.setItem('replyid', "0");
            }).catch(function (error) {
            });
        }
        if (localStorage.getItem("type") === "tache") {
            axios({
                method: 'POST',
                url: '/crm/start/chat/adder/' + receiver + '/1' + '/' + repy,
                data: JSON.stringify({x: messa}),
                contentType: 'application/json; charset=utf-8'
            }).then(function (response) {
                setChats(response.data);
                $("#chatcontent").animate({scrollTop: $('#chatcontent').height() + 25000}, 500);
            }).catch(function (error) {
            });
        }
    })

    $('#addFileChat').off().on("click", async function (event) {
        event.preventDefault()
        const receiver = localStorage.getItem('receiverid');
        if ($(this).closest('form').valid()) {
            $('#addFileChat').hide()
            $('#closeFileChat').hide()
            $('#loadFileChat').css('display', '')
            if (localStorage.getItem("type") === "chat") {
                axios({
                    method: 'POST',
                    url: '/crm/gestion/fichier/chat/add/' + receiver + '/0',
                    data: new FormData($('#addFileChatForm')[0]),
                    contentType: false,
                    processData: false,
                    cache: false,
                    dataType: 'json',
                }).then(function (response) {
                    $('#modaler').modal('toggle');
                    setChats(response.data);
                    $("#chatcontent").animate({scrollTop: $('#chatcontent').height() + 25000}, 500);
                    $('#addFileChat').show()
                    $('#closeFileChat').show()
                    $('#loadFileChat').hide()
                }).catch(function (error) {
                });
            }

            if (localStorage.getItem("type") === "tache") {
                axios({
                    method: 'POST',
                    url: '/crm/gestion/fichier/chat/add/' + receiver + '/1',
                    data: new FormData($('#addFileChatForm')[0]),
                    contentType: false,
                    processData: false,
                    cache: false,
                    dataType: 'json',
                }).then(function (response) {
                    $('#modaler').modal('toggle');
                    setChats(response.data);
                    $("#chatcontent").animate({scrollTop: $('#chatcontent').height() + 25000}, 500);
                    $('#addFileChat').show()
                    $('#closeFileChat').show()
                    $('#loadFileChat').hide()
                }).catch(function (error) {
                });
            }
        }
    })

    $('.clico').off().on("click", function (event) {
        if ($(".hado").hasClass("hide")) {
            $('.hado').removeClass("hide");
        } else {
            $('.hado').addClass("hide");
        }
    });
    $('.transfer').off().on("click", function (event) {
        event.preventDefault();
        setMess(this.id);
        $('#modalo').modal('toggle');
    });
    $('#deletereply').off().on("click", function (event) {
        event.preventDefault();
        $('.repondu').addClass("hide");
        localStorage.setItem('replyid', "0");
    });
    $('.repondre').off().on("click", function (event) {
        event.preventDefault();
        let yup = this.id;
        localStorage.setItem('replyid', this.id);
        chats.map((chat) => {
            if (Number(chat.id) === Number(yup)) {
                $('.repondu').removeClass("hide");
                $('.replys').html('<span class="col-black">Répondre au message: </span> <br>' + chat['message']);
            }
        });
    });
    $('.delote').off().on("click", async function (event) {
        event.preventDefault();
        let idd = this.id;
        const receiver = localStorage.getItem('receiverid');
        $('#condelete').modal('toggle');
        $('#accept').click(function () {
            $('#condelete').modal('hide')

            if (localStorage.getItem("type") === "chat") {
                axios({
                    method: 'GET',
                    url: '/crm/chat/del/' + idd + '/' + receive.id + '/' + $('#current').val() + '/0',
                    contentType: 'application/json; charset=utf-8'
                }).then(function (response) {
                    let dd = response.data;
                    let sorted = dd.sort(function (a, b) {
                        return new Date(a.date) - new Date(b.date);
                    });

                    setChats(sorted);
                    $("#chatcontent").animate({scrollTop: $('#chatcontent').height() + 25000}, 500);
                }).catch(function (error) {
                });
            }
            if (localStorage.getItem("type") === "tache") {
                axios({
                    method: 'GET',
                    url: '/crm/chat/del/' + idd + '/' + receiver + '/' + $('#current').val() + '/1',
                    contentType: 'application/json; charset=utf-8'
                }).then(function (response) {
                    let dd = response.data;
                    let sorted = dd.sort(function (a, b) {
                        return new Date(a.date) - new Date(b.date);
                    });

                    setChats(sorted);
                    $("#chatcontent").animate({scrollTop: $('#chatcontent').height() + 25000}, 500);
                }).catch(function (error) {
                });
            }
        });
    });
    $('#tramess').off().on("click", async function (event) {
        event.preventDefault();
        axios({
            method: 'GET',
            url: '/crm/chat/share/' + mess + '/' + rece,
            contentType: 'application/json; charset=utf-8'
        }).then(function (response) {
            $('#modalo').modal('toggle');
        }).catch(function (error) {
        });
    });

    $('.selu').change(function () {
        setRece(this.value);
    });

    return (
        <>
            {deviceType !== "mobile" &&
                <>
                    <div className="modal fade" id="modalo" tabIndex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div className="modal-dialog modal-sm modal-notify" role="document">
                            <div className="modal-content">
                                <div className="modal-header d-flex justify-content-center bg-primary">
                                    <h4>
                                        SÉLECTIONNER
                                    </h4>
                                </div>
                                <div className="modal-body">
                                    <h4 className="col-green">
                                        <div className="list-group">
                                            {renderSelectUsers}
                                            <div className="text-center" style={{marginTop: "10px"}}>
                                                <button type="button" className="btn btn-primary btn-sm"
                                                        id="tramess">ENVOYER
                                                </button>
                                            </div>

                                        </div>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="modal fade" id="condelete" tabIndex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div className="modal-dialog modal-sm modal-notify" role="document">
                            <div className="modal-content text-center">
                                <div className="modal-header d-flex justify-content-center bg-pink">
                                    <h4 className="bolo700">
                                        ÊTES VOUS SUR ?
                                    </h4>
                                </div>
                                <div className="modal-body">
                                    <i className="fas fa-times fa-4x animated rotateIn col-pink"></i>
                                </div>
                                <div className="text-center">
                                    <div type="button" id="accept"
                                         className="btn btn-link waves-effect text-white bg-primary">
                                        OUI
                                    </div>
                                    <div type="button" id="closeLier"
                                         className="btn btn-link waves-effect text-white bg-pink"
                                         data-dismiss="modal">
                                        NON
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="container-fluid diti">
                        <div className="block-header">
                            <div className="row">
                                <div className="col-md-4 chat bg-blue-grey">
                                    <div style={{margin: "2px 0.5px", height: "700px"}}>
                                        <h4 style={{
                                            color: "white",
                                            textAlign: "center",
                                            backgroundColor: "#4e73df",
                                            padding: "10px",
                                            margin: "5px 5px 0 5px"
                                        }}>CHAT</h4>

                                        <div className="chat-header clearfix">
                                            <div className="row">
                                                <div className="col-lg-6">
                                                    <a href="javascript:void(0);" data-toggle="modal"
                                                       data-target="#view_info">
                                                        <img src="/gallery/usere.png" id="uuer"
                                                             style={{
                                                                 width: "60px",
                                                                 height: "60px",
                                                                 border: "2px solid #FFF",
                                                                 visibility: "hidden"
                                                             }}
                                                             alt="avatar"/>
                                                    </a>
                                                    <div className="chat-about">
                                                        <h4 className="m-b-0 col-white useselected"></h4>
                                                    </div>
                                                    <br/><br/>
                                                    <h4>
                                                        <a href="#" className="clico hide" title="Afficher les Options"
                                                           style={{float: "right", visibility: "hidden"}}><i
                                                            className="material-icons col-yellow"
                                                            style={{fontSize: "20px"}}>hub</i></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="chat-history "
                                             style={{height: "450px", width: "100%", overflowY: "scroll"}}
                                             id="chatcontent">
                                            <ul className="m-b-0">
                                                {renderChats}
                                            </ul>
                                        </div>
                                        <div className="row repondu hide" style={{margin: "1px"}}>
                                            <div className=" col-md-12 bg-blue col-white" style={{
                                                padding: "10px",
                                                borderRadius: "5px",
                                                marginTop: "10px"
                                            }}>
                                                <span className="replys"></span>
                                                <a href="#" id="deletereply" title="Supprimer" className="bg-pink"
                                                   style={{borderRadius: "20px", position: "relative", float: "right"}}><i
                                                    className="material-icons col-white"
                                                    style={{fontSize: "18px"}}>clear</i></a>
                                            </div>
                                        </div>
                                        <div style={{
                                            marginBottom: "80px",
                                            display: "flex",
                                            justifyContent: "flex-end",
                                            width: "100%"
                                        }}>


                                            <ReactQuill className="bg-white col-black" style={{height: "100px"}}
                                                        theme="snow" value={messa} onChange={setMessa}/>

                                        </div>
                                        <div className="float-right" style={{marginTop: "5px"}}>
                                            <a href="#" id="adfile" title="Ajouter un fichier"><i
                                                className="material-icons col-lime"
                                                style={{fontSize: "30px", marginRight: "20px"}}>upload_file</i></a>

                                            <a href="#" id="sendchate" title="Envoyer"><i
                                                className="material-icons col-white" style={{
                                                fontSize: "30px",
                                                marginRight: "5px"
                                            }}>send</i></a>
                                        </div>

                                    </div>
                                </div>
                                <div className="col-md-4">
                                    <div className="people-list bg-white" style={{height: "820px", overflow: "scroll"}}>
                                        <h4 style={{
                                            color: "white",
                                            textAlign: "center",
                                            backgroundColor: "#4e73df",
                                            padding: "10px",
                                            margin: "5px 5px 0 5px"
                                        }}>TACHES</h4>

                                        {renderTaches}

                                    </div>
                                </div>
                                <div className="col-md-4">
                                    <div className="people-list bg-white" style={{height: "820px", overflow: "scroll"}}>
                                        <h4 style={{
                                            color: "white",
                                            textAlign: "center",
                                            backgroundColor: "#4e73df",
                                            padding: "10px 10px 10px 15px",
                                            margin: "5px 5px 0 5px"
                                        }}>COMPTES</h4>
                                        <ul className="list-unstyled chat-list mt-2 mb-0" style={{paddingLeft: "15px"}}>
                                            {rendUsers}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </>
            }

            {deviceType === "mobile" &&
                <div className="container-fluid diti">
                    <div className="block-header">
                        <div className="row">
                            <div className="col-md-12 chat">
                                <ul className="nav nav-tabs" style={{backgroundColor: "#4e73df", color: "white"}}>
                                    <li className="active" id="tt1"><a data-toggle="tab" href="#home">CHAT</a></li>
                                    <li id="tt2"><a data-toggle="tab" href="#menu1">TACHES</a></li>
                                    <li id="tt3"><a data-toggle="tab" href="#menu2">COMPTES</a></li>
                                </ul>
                                <div className="tab-content bg-blue-grey" style={{padding: "10px 10px 50px 10px"}}>
                                    <div id="home" className="tab-pane fade in active">
                                        <div className="chat-header clearfix">
                                            <div className="row">
                                                <div className="col-lg-6">
                                                    <a href="javascript:void(0);" data-toggle="modal"
                                                       data-target="#view_info">
                                                        <img src="/gallery/usere.png" id="uuer"
                                                             style={{
                                                                 width: "60px",
                                                                 height: "60px",
                                                                 border: "2px solid #FFF",
                                                                 visibility: "hidden"
                                                             }}
                                                             alt="avatar"/>
                                                    </a>
                                                    <div className="chat-about">
                                                        <h4 className="m-b-0 col-white useselected"></h4>
                                                    </div>
                                                    <br/><br/>
                                                    <h4>
                                                        <a href="#" className="clico"
                                                           style={{float: "right", visibility: "hidden"}}><i
                                                            className="material-icons col-yellow"
                                                            style={{fontSize: "20px"}}>hub</i></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="chat-history "
                                             style={{height: "450px", width: "100%", overflowY: "scroll"}}
                                             id="chatcontent">
                                            <ul className="m-b-0">
                                                {renderChats}
                                            </ul>
                                        </div>
                                        <div style={{
                                            marginTop: "10px",
                                            marginBottom: "80px",
                                            display: "flex",
                                            justifyContent: "flex-end",
                                            width: "100%"
                                        }}>
                                            <ReactQuill className="bg-white col-black" style={{height: "100px"}}
                                                        theme="snow" value={messa} onChange={setMessa}/>
                                        </div>
                                        <div className="float-right" style={{marginTop: "5px"}}>

                                            <a href="#" id="adfile"><i className="material-icons col-lime"
                                                                       style={{
                                                                           fontSize: "30px",
                                                                           marginRight: "20px"
                                                                       }}>upload_file</i></a>

                                            <a href="#" id="sendchate"><i className="material-icons col-white" style={{
                                                fontSize: "30px",
                                                marginRight: "5px"
                                            }}>send</i></a>

                                        </div>

                                    </div>
                                    <div id="menu1" className="tab-pane fade">
                                        {renderTaches}
                                    </div>
                                    <div id="menu2" className="tab-pane fade">
                                        <ul className="list-unstyled chat-list mt-2 mb-0" style={{paddingLeft: "15px"}}>
                                            {renderUsers}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            }
        </>

    )
}

try {
    const root = createRoot(document.getElementById('chatter'));
    root.render(<Chatter/>);
} catch (e) {

}