import React from "react";
import {createRoot} from 'react-dom/client';
import {useEffect, useState} from "react";
import axios from "axios";
import $ from "jquery";
import * as moment from "moment";
import ReactHTMLTableToExcel from 'react-html-table-to-excel';

const DataFirst = () => {

    const [todos, setTodos] = useState([]);
    const [chats, setChats] = useState([]);
    const [users, setUsers] = useState([]);
    let todei = $('#todei').val();
    let current = $('#current').val();

    const fetchdata = async () => {
        if ($('#page').val() !== undefined) {
            axios({
                method: 'GET',
                url: '/crm/start/gets',
                contentType: 'application/json; charset=utf-8'
            }).then(function (response) {
                setTodos(response.data);
            }).catch(function (error) {
            });
        }
    };
    const fetchUsers = async () => {
        if ($('#page').val() !== undefined) {
            axios({
                method: 'GET',
                url: '/crm/start/users/get',
                contentType: 'application/json; charset=utf-8'
            }).then(function (response) {
                setUsers(response.data);
            }).catch(function (error) {
            });
        }
    };
    const fetchChats = async () => {
        const id = localStorage.getItem('token');
        if (id !== null) {
            axios({
                method: 'GET',
                url: '/crm/start/chats/get/' + id,
                contentType: 'application/json; charset=utf-8'
            }).then(function (response) {
                setChats(response.data);
            }).catch(function (error) {
            });
        }
    };

    useEffect(() => {
        fetchdata();
        fetchUsers();
        const interval = setInterval(() => {
            fetchdata();
            fetchChats();
        }, 10000);
        return () => clearInterval(interval);
    }, [])

    function filterById(jsonObject, id) {
        return jsonObject.filter(function (jsonObject) {
            return (parseInt(jsonObject['id']) === parseInt(id));
        })[0];
    }

    function addTachers() {
        $('#addTodoForm')[0].reset();
        CKEDITOR.instances.todo.setData(' ');
        $('#chtodoadd').removeClass('hide');
        $('#chtodoedit').addClass('hide');
        $('#divTodo').removeClass('hide');
        $('#divTodor').addClass('hide');
        $('#smallTache').modal('show');
    }

    const shuto = (id) => {
        $('.' + id + 'to').removeClass('hide');
    }
    const shutod = (id) => {
        $('.' + id + 'to').addClass('hide');
    }

    $('#sendchat').off().on("click", async function (event) {
        event.preventDefault();
        let message = $('textarea#chat').val();
        const receiver = localStorage.getItem('receiverid');
        const todo = localStorage.getItem('todoid');
        axios({
            method: 'POST',
            url: '/crm/start/chat/add/' + message + '/' + todo + '/' + receiver,
            contentType: 'application/json; charset=utf-8'
        }).then(function (response) {
            setChats(response.data);
        }).catch(function (error) {
        });
    })
    $('#addTodo').off().on("click", async function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#divTodo').hide();
            $('#loadTodo').css('display', '')
            $('#todo').val(CKEDITOR.instances['todo'].getData());
            await axios({
                method: 'POST',
                url: '/crm/start/todo/add',
                data: new FormData($('#addTodoForm')[0]),
                contentType: false,
                processData: false,
                cache: false,
                dataType: 'json',
            }).then(function (response) {
                setTodos(response.data)
                $('#divTodo').show();
                $('#loadTodo').hide();
                $('#smallTache').modal('toggle');
            }).catch(function (error) {
                $('#ModalErreur').modal('show');
            });
        }
    })
    $('#updTodo').off().on("click", async function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#divTodor').hide();
            $('#loadTodo').css('display', '')
            $('#todo').val(CKEDITOR.instances['todo'].getData());
            const id = localStorage.getItem('token');
            await axios({
                method: 'PUT',
                url: '/crm/start/todo/update/' + id,
                data: new FormData($('#addTodoForm')[0]),
                contentType: false,
                processData: false,
                cache: false,
                dataType: 'json',
            }).then(function (response) {
                setTodos(response.data)
                $('#chtodoadd').removeClass('hide');
                $('#chtodoedit').addClass('hide');
                $('#divTodo').removeClass('hide');
                $('#divTodor').addClass('hide');
                $('#loadTodo').hide();
                $('#smallTache').modal('toggle');
            }).catch(function (error) {
                $('#Traitement').modal('hide');
                $('#ModalErreur').modal('show');
                $('#loadTodo').hide();
            });
        }
    })

    $(function () {
        $(".delety").each(function () {
            $(this).off().on("click", async function () {
                let id = this.id;
                    const todo = localStorage.getItem('todoid');
                    axios({
                        method: 'DELETE',
                        url: '/crm/start/chats/delete/' + id +'/'+ todo,
                        contentType: 'application/json; charset=utf-8'
                    }).then(function (response) {
                        setChats(response.data);
                    }).catch(function (error) {
                    });
            });
        });
    });
    $(function () {
        $(".deletodo").each(function () {
            $(this).off().on("click", async function () {
                let id = this.id;
                    $('#Traitement').modal('show');
                    await axios({
                        method: 'DELETE',
                        url: '/crm/start/todo/delete/' + id,
                        contentType: 'application/json; charset=utf-8',
                        dataType: 'json',
                    }).then(function (response) {
                        setTodos(response.data);
                        $('#Traitement').modal('hide');
                    }).catch(function (error) {
                        $('#Traitement').modal('hide');
                    });
            });
        });
    });
    $(function () {
        $(".commento").each(function () {
            $(this).off().on("click", async function () {
                let id = this.id;
                let sela = " ";
                localStorage.setItem('token', id);
                await axios({
                    method: 'GET',
                    url: '/crm/start/users/get',
                    contentType: 'application/json; charset=utf-8',
                    dataType: 'json',
                }).then(function (response) {
                    let receiver = 0;
                    const seleMessage = filterById(todos, id);
                    if (parseInt(current) === parseInt(seleMessage.sender.id)) {
                        sela = filterById(users, parseInt(seleMessage.owner.id));
                        $('.useselected').text(sela.nom + ' ' + sela.prenoms);
                        $('.usemessage').html(seleMessage.todo);
                        receiver = parseInt(seleMessage.owner.id)
                    } else {
                        sela = filterById(users, parseInt(seleMessage.sender.id));
                        $('.useselected').text(sela.nom + ' ' + sela.prenoms);
                        $('.usemessage').html(seleMessage.todo);
                        receiver = parseInt(seleMessage.sender.id)
                    }

                    setUsers(response.data)
                    $('#chatModal').modal('show');
                    localStorage.setItem('todoid', seleMessage.id);
                    localStorage.setItem('receiverid', receiver);
                    fetchChats();
                    $('#chatcontent').scrollTop($('#chatcontent')[0].scrollHeight);
                })
            });
        });
    });
    $(function () {
        $(".updo").each(function () {
            $(this).off().on("click", async function () {
                $('#Traitement').modal('show');
                $('#divTodor').removeClass('hide');
                $('#divTodor').css('display', '')
                $('#divTodo').addClass('hide');
                $('#addTodoForm')[0].reset();
                const dd = this.id
                const id = parseInt(dd.split(',')[0]);
                const dur = dd.split(',')[2] + ' ' + dd.split(',')[1];
                $('#ddtodo').val(dur);
                await axios({
                    method: 'GET',
                    url: '/crm/start/todo/get/' + id,
                    contentType: 'application/json; charset=utf-8',
                    dataType: 'json',
                }).then(function (response) {
                    localStorage.setItem('token', id.toString());
                    let data = response.data;
                    $('#datetache').val(data.date);
                    CKEDITOR.instances.todo.setData(data.todo);
                    $('#chtodoadd').addClass('hide');
                    $('#chtodoedit').removeClass('hide');
                    $('#smallTache').modal('show');
                    $('#Traitement').modal('hide');
                }).catch(function (error) {
                    $('#Traitement').modal('hide');
                });
            });
        });
    });
    $(function () {
        $(".getu").each(function () {
            $(this).off().on("click", async function () {
                var sele = filterById(users, this.id);
                $('.useselected').html(sele.nom + ' ' + sele.prenoms)
            });
        });
    });

    const renderChats = chats.map((chat) => {
        let mp = ' ';
        let delo = '<a class="delety" id=' + chat.id + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a>';

        if (parseInt(current) === parseInt(chat.owner.id)) {
            mp = '<div class="message-data text-right">' +
                '<span class="message-data-time">' + moment(chat.date).locale("fr").format('LLLL') + '</span></div>' +
                '<div class="message other-message float-right">' + chat.message + '<br/>'+delo+'</div>'
            ;
        } else {
            mp = '<div class="message-data">' +
                '<span class="message-data-time">' + moment(chat.date).locale("fr").format('LLLL') + '</span></div>' +
                '<div class="message my-message">' + chat.message + '</div>';
        }
        return (<li class="clearfix" key={chat.id} dangerouslySetInnerHTML={{__html: mp}}/>)

    });
    

    const renderMonday = todos.map((todo) => {
        let dd = moment(todo.date).format("dddd");
        let ded = moment(todo.date).format("DD/MM/YYYY HH:mm");
        let dad = moment(todo.date).format("YYYY/MM/DD");

        let statut = '';
        if(new Date(dad) > new Date(todei)){
            if(todo.priorite !== 2){
                statut = '<span class="bolo700 bg-green col-white">À FAIRE</span></br>'
            }else{
                statut = '<span class="bg-deep-orange col-white">EN ATTENTE</span></br>';
            }
        }
        if(new Date(dad) < new Date(todei)){
            if(todo.priorite !== 2) {
                statut = '<span class="bolo700 bg-blue-grey col-white">DATE EXPIRÉE</span></br>'
            }else{
                statut = '<span class="bolo700 bg-blue-grey col-white">DATE EXPIRÉE</span></br><span class="bg-deep-orange col-white">EN ATTENTE</span></br>'
            }
        }

        let fiii =  " ";
        let fichiers = todo.fichiers;
        if(fichiers.length > 0){
            fichiers.map((fich) => {
                fiii = '<p><i class="fa fa-paperclip"></i><a href="/'+fich.folde+'/'+fich.nomfichier+'" target="_blank" class="col-deep-purple"> ' + fich.nomfichier + '</a></br></p>' + fiii;
            });
        }

        let mamie;
        let sender = '<p  style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' +
            '<a class="deletodo" id=' + todo.id + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a></p></td></tr></table>';

        if (todo.sender && parseInt(current) !== parseInt(todo.sender.id)) {
            sender = 'De: ' + '<span class="col-pink">' + todo.sender.nom + ' ' + todo.sender.prenoms + '</span>' +
                '<p style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' +
                '<a class="commento" id=' + todo.id + '><i class="fa fa-comment text-warning m-r-15" style="font-size: 16px" aria-hidden="true" title="Commenter"></i></a></p></td></tr></table>';
        }

        if (todo.sender && parseInt(current) === parseInt(todo.sender.id)) {
            sender = 'À: ' + '<span class="col-pink">' + todo.owner.nom + ' ' + todo.owner.prenoms + '</span>' +
                '<p style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' +
                '<a class="commento" id=' + todo.id + '><i class="fa fa-comment text-warning m-r-15" style="font-size: 16px" aria-hidden="true" title="Commenter"></i></a>' +
                '<a class="deletodo" id=' + todo.id + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a></p></td></tr></table>';
        }

        if (dd === "lundi" && todo.priorite === 3) {
            mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">'+statut+'<span class="bg-pink col-white">IMPORTANT</span></br>' + todo.todo + fiii + ' ' + sender;
        }
        if (dd === "lundi" && todo.priorite === 2) {
            mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">'+statut+'<span class="bg-deep-purple col-white">Note du: '+ded+'</span></br>' + todo.todo + fiii + ' ' + sender;
        }
        if (dd === "lundi" && todo.priorite === 1) {
            mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">'+statut+'<span class="bg-deep-purple col-white">Note du: '+ded+'</span></br>' + todo.todo + fiii + ' ' + sender;
        }

        return (<div onMouseOver={() => {
            shuto(todo.id)
        }} onMouseOut={() => {
            shutod(todo.id)
        }} key={todo.id}>
            {dd === "lundi" && todo.priorite === 3 &&
                <div key={todo.id} dangerouslySetInnerHTML={{__html: mamie}}></div>
            }
            {dd === "lundi" && todo.priorite === 2 &&
                <div key={todo.id} dangerouslySetInnerHTML={{__html: mamie}}></div>
            }
            {dd === "lundi" && todo.priorite === 1 &&
                <div key={todo.id} dangerouslySetInnerHTML={{__html: mamie}}></div>
            }

        </div>)

    });
    const renderTuesday = todos.map((todo) => {
        let dd = moment(todo.date).format("dddd");
        let ded = moment(todo.date).format("DD/MM/YYYY HH:mm");
        let dad = moment(todo.date).format("YYYY/MM/DD");

        let statut = '';
        if(new Date(dad) > new Date(todei)){
            if(todo.priorite !== 2){
                statut = '<span class="bolo700 bg-green col-white">À FAIRE</span></br>'
            }else{
                statut = '<span class="bg-deep-orange col-white">EN ATTENTE</span></br>';
            }
        }
        if(new Date(dad) < new Date(todei)){
            if(todo.priorite !== 2) {
                statut = '<span class="bolo700 bg-blue-grey col-white">DATE EXPIRÉE</span></br>'
            }else{
                statut = '<span class="bolo700 bg-blue-grey col-white">DATE EXPIRÉE</span></br><span class="bg-deep-orange col-white">EN ATTENTE</span></br>'
            }
        }


        let fiii =  " ";
        let fichiers = todo.fichiers;
        if(fichiers.length > 0){
            fichiers.map((fich) => {
                fiii = '<p><i class="fa fa-paperclip"></i><a href="/'+fich.folde+'/'+fich.nomfichier+'" target="_blank" class="col-deep-purple"> ' + fich.nomfichier + '</a></br></p>' + fiii;
            });
        }
        let mamie;
        let sender = '<p  style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' +
            '<a class="deletodo" id=' + todo.id + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a></p></td></tr></table>';

        if (todo.sender && parseInt(current) !== parseInt(todo.sender.id)) {
            sender = 'De: ' + '<span class="col-pink">' + todo.sender.nom + ' ' + todo.sender.prenoms + '</span>' +
                '<p style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' +
                '<a class="commento" id=' + todo.id + '><i class="fa fa-comment text-warning m-r-15" style="font-size: 16px" aria-hidden="true" title="Commenter"></i></a></p></td></tr></table>';
        }

        if (todo.sender && parseInt(current) === parseInt(todo.sender.id)) {
            sender = 'À: ' + '<span class="col-pink">' + todo.owner.nom + ' ' + todo.owner.prenoms + '</span>' +
                '<p style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' +
                '<a class="commento" id=' + todo.id + '><i class="fa fa-comment text-warning m-r-15" style="font-size: 16px" aria-hidden="true" title="Commenter"></i></a>' +
                '<a class="deletodo" id=' + todo.id + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a></p></td></tr></table>';
        }

        if (dd === "mardi" && todo.priorite === 3) {
            mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">'+statut+'<span class="bg-pink col-white">IMPORTANT</span></br>' + todo.todo + fiii + ' ' + sender;
        }
        if (dd === "mardi" && todo.priorite === 2) {
            mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">'+statut+'<span class="bg-deep-purple col-white">Note du: '+ded+'</span></br>' + todo.todo + fiii + ' ' + sender;
        }
        if (dd === "mardi" && todo.priorite === 1) {
            mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">'+statut+'<span class="bg-deep-purple col-white">Note du: '+ded+'</span></br>' + todo.todo + fiii + ' ' + sender;
        }

        return (<div onMouseOver={() => {
            shuto(todo.id)
        }} onMouseOut={() => {
            shutod(todo.id)
        }} key={todo.id}>
            {dd === "mardi" && todo.priorite === 3 &&
                <div key={todo.id} dangerouslySetInnerHTML={{__html: mamie}}></div>
            }
            {dd === "mardi" && todo.priorite === 2 &&
                <div key={todo.id} dangerouslySetInnerHTML={{__html: mamie}}></div>
            }
            {dd === "mardi" && todo.priorite === 1 &&
                <div key={todo.id} dangerouslySetInnerHTML={{__html: mamie}}></div>
            }
        </div>)
    });
    const renderWesnesday = todos.map((todo) => {
        let dd = moment(todo.date).format("dddd");
        let ded = moment(todo.date).format("DD/MM/YYYY HH:mm");
        let dad = moment(todo.date).format("YYYY/MM/DD");

        let statut = '';
        if(new Date(dad) > new Date(todei)){
            if(todo.priorite !== 2){
                statut = '<span class="bolo700 bg-green col-white">À FAIRE</span></br>'
            }else{
                statut = '<span class="bg-deep-orange col-white">EN ATTENTE</span></br>';
            }
        }
        if(new Date(dad) < new Date(todei)){
            if(todo.priorite !== 2) {
                statut = '<span class="bolo700 bg-blue-grey col-white">DATE EXPIRÉE</span></br>'
            }else{
                statut = '<span class="bolo700 bg-blue-grey col-white">DATE EXPIRÉE</span></br><span class="bg-deep-orange col-white">EN ATTENTE</span></br>'
            }
        }


        let fiii =  " ";
        let fichiers = todo.fichiers;
        if(fichiers.length > 0){
            fichiers.map((fich) => {
                fiii = '<p><i class="fa fa-paperclip"></i><a href="/'+fich.folde+'/'+fich.nomfichier+'" target="_blank" class="col-deep-purple"> ' + fich.nomfichier + '</a></br></p>' + fiii;
            });
        }

        let mamie;
        let sender = '<p  style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' +
            '<a class="deletodo" id=' + todo.id + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a></p></td></tr></table>';

        if (todo.sender && parseInt(current) !== parseInt(todo.sender.id)) {
            sender = 'De: ' + '<span class="col-pink">' + todo.sender.nom + ' ' + todo.sender.prenoms + '</span>' +
                '<p style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' +
                '<a class="commento" id=' + todo.id + '><i class="fa fa-comment text-warning m-r-15" style="font-size: 16px" aria-hidden="true" title="Commenter"></i></a></p></td></tr></table>';
        }

        if (todo.sender && parseInt(current) === parseInt(todo.sender.id)) {
            sender = 'À: ' + '<span class="col-pink">' + todo.owner.nom + ' ' + todo.owner.prenoms + '</span>' +
                '<p style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' +
                '<a class="commento" id=' + todo.id + '><i class="fa fa-comment text-warning m-r-15" style="font-size: 16px" aria-hidden="true" title="Commenter"></i></a>' +
                '<a class="deletodo" id=' + todo.id + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a></p></td></tr></table>';
        }

        if (dd === "mercredi" && todo.priorite === 3) {
            mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">'+statut+'<span class="bg-pink col-white">IMPORTANT</span></br>' + todo.todo + fiii + ' ' + sender;
        }
        if (dd === "mercredi" && todo.priorite === 2) {
            mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">'+statut+'<span class="bg-deep-purple col-white">Note du: '+ded+'</span></br>' + todo.todo + fiii + ' ' + sender;
        }
        if (dd === "mercredi" && todo.priorite === 1) {
            mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">'+statut+'<span class="bg-deep-purple col-white">Note du: '+ded+'</span></br>' + todo.todo + fiii + ' ' + sender;
        }

        return (<div onMouseOver={() => {
            shuto(todo.id)
        }} onMouseOut={() => {
            shutod(todo.id)
        }} key={todo.id}>
            {dd === "mercredi" && todo.priorite === 3 &&
                <div key={todo.id} dangerouslySetInnerHTML={{__html: mamie}}></div>
            }
            {dd === "mercredi" && todo.priorite === 2 &&
                <div key={todo.id} dangerouslySetInnerHTML={{__html: mamie}}></div>
            }
            {dd === "mercredi" && todo.priorite === 1 &&
                <div key={todo.id} dangerouslySetInnerHTML={{__html: mamie}}></div>
            }
        </div>)
    });
    const renderThursday = todos.map((todo) => {

        let dd = moment(todo.date).format("dddd");
        let ded = moment(todo.date).format("DD/MM/YYYY HH:mm");
        let dad = moment(todo.date).format("YYYY-MM-DD");

        let statut = '';

        if(new Date(dad) > new Date(todei)){
            if(todo.priorite !== 2){
                statut = '<span class="bolo700 bg-green col-white">À FAIRE</span></br>'
            }else{
                statut = '<span class="bg-deep-orange col-white">EN ATTENTE</span></br>';
            }
        }
        if(new Date(dad) < new Date(todei)){
            if(todo.priorite !== 2) {
                statut = '<span class="bolo700 bg-blue-grey col-white">DATE EXPIRÉE</span></br>'
            }else{
                statut = '<span class="bolo700 bg-blue-grey col-white">DATE EXPIRÉE</span></br><span class="bg-deep-orange col-white">EN ATTENTE</span></br>'
            }
        }

        let fiii =  " ";
        let fichiers = todo.fichiers;
        if(fichiers.length > 0){
            fichiers.map((fich) => {
                fiii = '<p><i class="fa fa-paperclip"></i><a href="/'+fich.folde+'/'+fich.nomfichier+'" target="_blank" class="col-deep-purple"> ' + fich.nomfichier + '</a></br></p>' + fiii;
            });
        }

        let mamie;
        let sender = '<p  style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' +
            '<a class="deletodo" id=' + todo.id + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a></p></td></tr></table>';

        if (todo.sender && parseInt(current) !== parseInt(todo.sender.id)) {
            sender = 'De: ' + '<span class="col-pink">' + todo.sender.nom + ' ' + todo.sender.prenoms + '</span>' +
                '<p style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' +
                '<a class="commento" id=' + todo.id + '><i class="fa fa-comment text-warning m-r-15" style="font-size: 16px" aria-hidden="true" title="Commenter"></i></a></p></td></tr></table>';
        }

        if (todo.sender && parseInt(current) === parseInt(todo.sender.id)) {
            sender = 'À: ' + '<span class="col-pink">' + todo.owner.nom + ' ' + todo.owner.prenoms + '</span>' +
                '<p style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' +
                '<a class="commento" id=' + todo.id + '><i class="fa fa-comment text-warning m-r-15" style="font-size: 16px" aria-hidden="true" title="Commenter"></i></a>' +
                '<a class="deletodo" id=' + todo.id + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a></p></td></tr></table>';
        }

        if (dd === "jeudi" && todo.priorite === 3) {
            mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">'+statut+'<span class="bg-pink col-white">IMPORTANT</span></br>' + todo.todo + fiii + ' ' + sender;
        }
        if (dd === "jeudi" && todo.priorite === 2) {
            mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">'+statut+'<span class="bg-deep-purple col-white">Note du: '+ded+'</span></br>' + todo.todo + fiii + ' ' + sender;
        }
        if (dd === "jeudi" && todo.priorite === 1) {
            mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">'+statut+'<span class="bg-deep-purple col-white">Note du: '+ded+'</span></br>' + todo.todo + fiii + ' ' + sender;
        }

        return (<div onMouseOver={() => {
            shuto(todo.id)
        }} onMouseOut={() => {
            shutod(todo.id)
        }} key={todo.id}>
            {dd === "jeudi" && todo.priorite === 3 &&
                <div key={todo.id} dangerouslySetInnerHTML={{__html: mamie}}></div>
            }
            {dd === "jeudi" && todo.priorite === 2 &&
                <div key={todo.id} dangerouslySetInnerHTML={{__html: mamie}}></div>
            }
            {dd === "jeudi" && todo.priorite === 1 &&
                <div key={todo.id} dangerouslySetInnerHTML={{__html: mamie}}></div>
            }
        </div>)
    });
    const renderFriday = todos.map((todo) => {
        let dd = moment(todo.date).format("dddd");
        let ded = moment(todo.date).format("DD/MM/YYYY HH:mm");
        let dad = moment(todo.date).format("YYYY/MM/DD");

        let statut = '';
        if(new Date(dad) > new Date(todei)){
            if(todo.priorite !== 2){
                statut = '<span class="bolo700 bg-green col-white">À FAIRE</span></br>'
            }else{
                statut = '<span class="bg-deep-orange col-white">EN ATTENTE</span></br>';
            }
        }
        if(new Date(dad) < new Date(todei)){
            if(todo.priorite !== 2) {
                statut = '<span class="bolo700 bg-blue-grey col-white">DATE EXPIRÉE</span></br>'
            }else{
                statut = '<span class="bolo700 bg-blue-grey col-white">DATE EXPIRÉE</span></br><span class="bg-deep-orange col-white">EN ATTENTE</span></br>'
            }
        }


        let fiii =  " ";
        let fichiers = todo.fichiers;

        if(fichiers.length > 0){
            fichiers.map((fich) => {
                fiii = '<p><i class="fa fa-paperclip"></i><a href="/'+fich.folde+'/'+fich.nomfichier+'" target="_blank" class="col-deep-purple"> ' + fich.nomfichier + '</a></br></p>' + fiii;
            });
        }

        let mamie;
        let sender = '<p  style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' +
            '<a class="deletodo" id=' + todo.id + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a>' +
            '</p></td></tr></table>';

        if (todo.sender && parseInt(current) !== parseInt(todo.sender.id)) {
            sender = 'De: ' + '<span class="col-pink">' + todo.sender.nom + ' ' + todo.sender.prenoms + '</span>' +
                '<p style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' +
                '<a class="commento" id=' + todo.id + '><i class="fa fa-comment text-warning m-r-15" style="font-size: 16px" aria-hidden="true" title="Commenter"></i></a></p></td></tr></table>';
        }

        if (todo.sender && parseInt(current) === parseInt(todo.sender.id)) {
            sender = 'À: ' + '<span class="col-pink">' + todo.owner.nom + ' ' + todo.owner.prenoms + '</span>' +
                '<p style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' +
                '<a class="commento" id=' + todo.id + '><i class="fa fa-comment text-warning m-r-15" style="font-size: 16px" aria-hidden="true" title="Commenter"></i></a>' +
                '<a class="deletodo" id=' + todo.id + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a></p></td></tr></table>';
        }


        if (dd === "vendredi" && todo.priorite === 3) {
            mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">'+statut+'<span class="bg-pink col-white">IMPORTANT</span></br>' + todo.todo + fiii + ' ' + sender;
        }
        if (dd === "vendredi" && todo.priorite === 2) {
            mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">'+statut+'<span class="bg-deep-purple col-white">Note du: '+ded+'</span></br>' + todo.todo + fiii + ' ' + sender;
        }
        if (dd === "vendredi" && todo.priorite === 1) {
            mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">'+statut+'<span class="bg-deep-purple col-white">Note du: '+ded+'</span></br>' + todo.todo + fiii + ' ' + sender;
        }


        return (<div onMouseOver={() => {
            shuto(todo.id)
        }} onMouseOut={() => {
            shutod(todo.id)
        }} key={todo.id}>
            {dd === "vendredi" && todo.priorite === 3 &&
                <div key={todo.id} dangerouslySetInnerHTML={{__html: mamie}}></div>
            }
            {dd === "vendredi" && todo.priorite === 2 &&
                <div key={todo.id} dangerouslySetInnerHTML={{__html: mamie}}></div>
            }
            {dd === "vendredi" && todo.priorite === 1 &&
                <div key={todo.id} dangerouslySetInnerHTML={{__html: mamie}}></div>
            }
        </div>)
    });
    const renderSaturday = todos.map((todo) => {
        let dd = moment(todo.date).format("dddd");
        let ded = moment(todo.date).format("DD/MM/YYYY HH:mm");
        let dad = moment(todo.date).format("YYYY/MM/DD");

        let statut = '';
        if(new Date(dad) > new Date(todei)){
            if(todo.priorite !== 2){
                statut = '<span class="bolo700 bg-green col-white">À FAIRE</span></br>'
            }else{
                statut = '<span class="bg-deep-orange col-white">EN ATTENTE</span></br>';
            }
        }
        if(new Date(dad) < new Date(todei)){
            if(todo.priorite !== 2) {
                statut = '<span class="bolo700 bg-blue-grey col-white">DATE EXPIRÉE</span></br>'
            }else{
                statut = '<span class="bolo700 bg-blue-grey col-white">DATE EXPIRÉE</span></br><span class="bg-deep-orange col-white">EN ATTENTE</span></br>'
            }
        }

        let fiii =  " ";
        let fichiers = todo.fichiers;
        if(fichiers.length > 0){
            fichiers.map((fich) => {
                fiii = '<p><i class="fa fa-paperclip"></i><a href="/'+fich.folde+'/'+fich.nomfichier+'" target="_blank" class="col-deep-purple"> ' + fich.nomfichier + '</a></br></p>' + fiii;
            });
        }
        let mamie;
        let sender = '<p  style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' +
            '<a class="deletodo" id=' + todo.id + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a></p></td></tr></table>';

        if (todo.sender && parseInt(current) !== parseInt(todo.sender.id)) {
            sender = 'De: ' + '<span class="col-pink">' + todo.sender.nom + ' ' + todo.sender.prenoms + '</span>' +
                '<p style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' +
                '<a class="commento" id=' + todo.id + '><i class="fa fa-comment text-warning m-r-15" style="font-size: 16px" aria-hidden="true" title="Commenter"></i></a></p></td></tr></table>';
        }

        if (todo.sender && parseInt(current) === parseInt(todo.sender.id)) {
            sender = 'À: ' + '<span class="col-pink">' + todo.owner.nom + ' ' + todo.owner.prenoms + '</span>' +
                '<p style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' +
                '<a class="commento" id=' + todo.id + '><i class="fa fa-comment text-warning m-r-15" style="font-size: 16px" aria-hidden="true" title="Commenter"></i></a>' +
                '<a class="deletodo" id=' + todo.id + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a></p></td></tr></table>';
        }

        if (dd === "samedi" && todo.priorite === 3) {
            mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">'+statut+'<span class="bg-pink col-white">IMPORTANT</span></br>' + todo.todo + fiii + ' ' + sender;
        }
        if (dd === "samedi" && todo.priorite === 2) {
            mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">'+statut+'<span class="bg-deep-purple col-white">Note du: '+ded+'</span></br>' + todo.todo + fiii + ' ' + sender;
        }
        if (dd === "samedi" && todo.priorite === 1) {
            mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">'+statut+'<span class="bg-deep-purple col-white">Note du: '+ded+'</span></br>' + todo.todo + fiii + ' ' + sender;
        }


        return (<div onMouseOver={() => {
            shuto(todo.id)
        }} onMouseOut={() => {
            shutod(todo.id)
        }} key={todo.id}>
            {dd === "samedi" && todo.priorite === 3 &&
                <div key={todo.id} dangerouslySetInnerHTML={{__html: mamie}}></div>
            }
            {dd === "samedi" && todo.priorite === 2 &&
                <div key={todo.id} dangerouslySetInnerHTML={{__html: mamie}}></div>
            }
            {dd === "samedi" && todo.priorite === 1 &&
                <div key={todo.id} dangerouslySetInnerHTML={{__html: mamie}}></div>
            }
        </div>)


    });
    const renderSunday = todos.map((todo) => {
        let dd = moment(todo.date).format("dddd");
        let ded = moment(todo.date).format("DD/MM/YYYY HH:mm");
        let dad = moment(todo.date).format("YYYY/MM/DD");

        let statut = '';
        if(new Date(dad) > new Date(todei)){
            if(todo.priorite !== 2){
                statut = '<span class="bolo700 bg-green col-white">À FAIRE</span></br>'
            }else{
                statut = '<span class="bg-deep-orange col-white">EN ATTENTE</span></br>';
            }
        }
        if(new Date(dad) < new Date(todei)){
            if(todo.priorite !== 2) {
                statut = '<span class="bolo700 bg-blue-grey col-white">DATE EXPIRÉE</span></br>'
            }else{
                statut = '<span class="bolo700 bg-blue-grey col-white">DATE EXPIRÉE</span></br><span class="bg-deep-orange col-white">EN ATTENTE</span></br>'
            }
        }

        let fiii =  " ";
        let fichiers = todo.fichiers;
        if(fichiers.length > 0){
            fichiers.map((fich) => {
                fiii = '<p><i class="fa fa-paperclip"></i><a href="/'+fich.folde+'/'+fich.nomfichier+'" target="_blank" class="col-deep-purple"> ' + fich.nomfichier + '</a></br></p>' + fiii;
            });
        }

        let mamie;
        let sender = '<p  style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' +
            '<a class="deletodo" id=' + todo.id + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a></p></td></tr></table>';

        if (todo.sender && parseInt(current) !== parseInt(todo.sender.id)) {
            sender = 'De: ' + '<span class="col-pink">' + todo.sender.nom + ' ' + todo.sender.prenoms + '</span>' +
                '<p style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' +
                '<a class="commento" id=' + todo.id + '><i class="fa fa-comment text-warning m-r-15" style="font-size: 16px" aria-hidden="true" title="Commenter"></i></a></p></td></tr></table>';
        }

        if (todo.sender && parseInt(current) === parseInt(todo.sender.id)) {
            sender = 'À: ' + '<span class="col-pink">' + todo.owner.nom + ' ' + todo.owner.prenoms + '</span>' +
                '<p style="margin:0 !important" class="text-center hide ' + todo.id + 'to">' +
                '<a class="commento" id=' + todo.id + '><i class="fa fa-comment text-warning m-r-15" style="font-size: 16px" aria-hidden="true" title="Commenter"></i></a>' +
                '<a class="deletodo" id=' + todo.id + '><i class="fa fa-trash col-pink" style="font-size: 16px" aria-hidden="true" title="Supprimer cette ligne"></i></a></p></td></tr></table>';
        }

        if (dd === "dimanche" && todo.priorite === 3) {
            mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">'+statut+'<span class="bg-pink col-white">IMPORTANT</span></br>' + todo.todo + fiii + ' ' + sender;
        }
        if (dd === "dimanche" && todo.priorite === 2) {
            mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">'+statut+'<span class="bg-deep-purple col-white">Note du: '+ded+'</span></br>' + todo.todo + fiii + ' ' + sender;
        }
        if (dd === "dimanche" && todo.priorite === 1) {
            mamie = '<table style="width:100%;padding:5px; border: 2px solid #607D8B; margin-bottom:5px"><tr><td class="bg-white col-black m-t-5">'+statut+'<span class="bg-deep-purple col-white">Note du: '+ded+'</span></br>' + todo.todo + fiii + ' ' + sender;
        }


        return (<div onMouseOver={() => {
            shuto(todo.id)

        }} onMouseOut={() => {
            shutod(todo.id)
        }} key={todo.id}>
            {dd === "dimanche" && todo.priorite === 3 &&
                <div key={todo.id} dangerouslySetInnerHTML={{__html: mamie}}></div>
            }
            {dd === "dimanche" && todo.priorite === 2 &&
                <div key={todo.id} dangerouslySetInnerHTML={{__html: mamie}}></div>
            }
            {dd === "dimanche" && todo.priorite === 1 &&
                <div key={todo.id} dangerouslySetInnerHTML={{__html: mamie}}></div>
            }
        </div>)


    });


    return (
        <>
            <div className="modal fade" id="ConfirmDelete" tabIndex="-1" role="dialog"
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
                            <div type="button" id="accepto"
                                 className="btn btn-link waves-effect text-white bg-primary m-r-10">
                                OUI
                            </div>
                            <div type="button" id="closeLier" className="btn btn-link waves-effect text-white bg-pink"
                                 data-dismiss="modal">
                                NON
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div className="modal fade" id="chatModal" data-bs-backdrop="static" data-bs-keyboard="false" tabIndex="-1"
                 aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div className="modal-dialog modal-md">
                    <div className="modal-content">
                        <div className="container">
                            <div className="row chat-window " id="chat_window_1"
                                 style={{marginLeft:"10px"}}>
                                <div className="panel panel-default">
                                    <div className="panel-heading top-bar">
                                        <div className="col-md-10 col-xs-10">
                                            <h3 className="panel-title"><span
                                                className="glyphicon glyphicon-comment"></span> Chat</h3>
                                        </div>

                                    </div>
                                    <div className="panel-body msg_container_base">
                                        <div className="row msg_container base_sent">
                                            <div className="col-md-10 col-xs-10">
                                                <div className="messages msg_sent">
                                                    <p>that mongodb thing looks good, huh?
                                                        tiny master db, and huge document store</p>
                                                    <time dateTime="2009-11-13T20:00">Timothy • 51 min</time>
                                                </div>
                                            </div>
                                            <div className="col-md-2 col-xs-2 avatar">
                                                <img
                                                    src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg"
                                                    className=" img-responsive "/>
                                            </div>
                                        </div>
                                        <div className="row msg_container base_receive">
                                            <div className="col-md-2 col-xs-2 avatar">
                                                <img
                                                    src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg"
                                                    className=" img-responsive "/>
                                            </div>
                                            <div className="col-md-10 col-xs-10">
                                                <div className="messages msg_receive">
                                                    <p>that mongodb thing looks good, huh?
                                                        tiny master db, and huge document store</p>
                                                    <time dateTime="2009-11-13T20:00">Timothy • 51 min</time>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="row msg_container base_receive">
                                            <div className="col-md-2 col-xs-2 avatar">
                                                <img
                                                    src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg"
                                                    className=" img-responsive "/>
                                            </div>
                                            <div className="col-xs-10 col-md-10">
                                                <div className="messages msg_receive">
                                                    <p>that mongodb thing looks good, huh?
                                                        tiny master db, and huge document store</p>
                                                    <time dateTime="2009-11-13T20:00">Timothy • 51 min</time>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="row msg_container base_sent">
                                            <div className="col-xs-10 col-md-10">
                                                <div className="messages msg_sent">
                                                    <p>that mongodb thing looks good, huh?
                                                        tiny master db, and huge document store</p>
                                                    <time dateTime="2009-11-13T20:00">Timothy • 51 min</time>
                                                </div>
                                            </div>
                                            <div className="col-md-2 col-xs-2 avatar">
                                                <img
                                                    src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg"
                                                    className=" img-responsive "/>
                                            </div>
                                        </div>
                                        <div className="row msg_container base_receive">
                                            <div className="col-md-2 col-xs-2 avatar">
                                                <img
                                                    src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg"
                                                    className=" img-responsive "/>
                                            </div>
                                            <div className="col-xs-10 col-md-10">
                                                <div className="messages msg_receive">
                                                    <p>that mongodb thing looks good, huh?
                                                        tiny master db, and huge document store</p>
                                                    <time dateTime="2009-11-13T20:00">Timothy • 51 min</time>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="row msg_container base_sent">
                                            <div className="col-md-10 col-xs-10 ">
                                                <div className="messages msg_sent">
                                                    <p>that mongodb thing looks good, huh?
                                                        tiny master db, and huge document store</p>
                                                    <time dateTime="2009-11-13T20:00">Timothy • 51 min</time>
                                                </div>
                                            </div>
                                            <div className="col-md-2 col-xs-2 avatar">
                                                <img
                                                    src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg"
                                                    className=" img-responsive "/>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="panel-footer">
                                        <div className="input-group">
                                            <textarea  type="text" id="chat" row="5"
                                                   className="form-control input-sm chat_input"
                                                   placeholder="Votre message ici..."/>
                                            <span className="input-group-btn">
                        <button className="btn btn-primary btn-sm" id="sendchat">Envoyer</button>
                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div className="container-fluid diti">
                <div className="block-header">

                    <ReactHTMLTableToExcel
                        id="test-table-xls-button"
                        className="btn bg-green text-white m-r-5"
                        table="agenda"
                        filename="votre agenda"
                        sheet="tablexls"
                        buttonText="EXPORTER EN EXCEL"/>

                    <button className="btn bg-blue text-white m-r-5" onClick={() => {
                        addTachers()
                    }}><i className="fa fa-circle-plus"/> AJOUTER UNE NOTE
                    </button>

                    <div style={{overflow: "scroll", padding: "20px", height: "15cm", border: "2px solid #4e73df"}}
                         className="shadow table-responsive">

                        <h4 className="bolo700">TOUTE VOTRE AGENDA </h4>
                        <table className="table-bordered" id="agenda"
                               style={{minHeight: "120px", backgroundColor: '#F0F8FF'}}>
                            <thead>
                            <tr className="col-black text-center  ">
                                <th className="text-center" style={{
                                    minWidth: "230px",
                                    border: "1px solid #607D8B",
                                    borderBottom: "6px solid #F44336"
                                }}>LUNDI
                                </th>
                                <th className="text-center" style={{
                                    minWidth: "230px",
                                    border: "1px solid #607D8B",
                                    borderBottom: "6px solid #673AB7"
                                }}>MARDI
                                </th>

                                <th className="text-center" style={{
                                    minWidth: "230px",
                                    border: "1px solid #607D8B",
                                    borderBottom: "6px solid #9C27B0"
                                }}>MERCREDI
                                </th>
                                <th className="text-center" style={{
                                    minWidth: "230px",
                                    border: "1px solid #607D8B",
                                    borderBottom: "6px solid #FF9800"
                                }}>JEUDI
                                </th>
                                <th className="text-center" style={{
                                    minWidth: "230px",
                                    border: "1px solid #607D8B",
                                    borderBottom: "6px solid #2196F3"
                                }}>VENDREDI
                                </th>

                                <th className="text-center" style={{
                                    minWidth: "230px",
                                    border: "1px solid #607D8B",
                                    borderBottom: "6px solid #607D8B"
                                }}>SAMEDI
                                </th>


                                <th className="text-center" style={{
                                    minWidth: "230px",
                                    border: "1px solid #607D8B",
                                    borderBottom: "6px solid #009688"
                                }}>DIMANCHE
                                </th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td className="col-black" valign="top">{renderMonday}</td>
                                <td className="col-black" valign="top">{renderTuesday}</td>
                                <td className="col-black" valign="top">{renderWesnesday}</td>
                                <td className="col-black" valign="top">{renderThursday}</td>
                                <td className="col-black" valign="top">{renderFriday}</td>
                                <td className="col-black" valign="top">{renderSaturday}</td>
                                <td className="col-black" valign="top">{renderSunday}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </>
    );
}
try {
    const root = createRoot(document.getElementById('datafirst'));
    root.render(<DataFirst/>);
} catch (e) {

}
