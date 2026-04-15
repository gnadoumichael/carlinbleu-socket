import React from "react";
import {createRoot} from 'react-dom/client';
import {useEffect, useState} from "react";
import axios from "axios";
import $ from "jquery";
import * as moment from "moment";
import {EditText} from 'react-edit-text';
import ReactHTMLTableToExcel from 'react-html-table-to-excel';


const Planing = () => {

    const [datas, setDatas] = useState([]);
    const [teams, setTeams] = useState([]);
    const [ateams, setaTeams] = useState([]);
    const length = Object.keys(datas).length;

    if (length === 0) {
        axios({
            method: 'GET',
            url: '/crm/planning/gets',
            contentType: 'application/json; charset=utf-8'
        }).then(function (response) {
            setDatas(response.data);
        }).catch(function (error) {
        });
    }

    function compare(dateTimeA, dateTimeB) {
        const momentA = moment(dateTimeA, "DD/MM/YYYY").valueOf();
        const momentB = moment(dateTimeB, "DD/MM/YYYY").valueOf();
        if (momentA > momentB) return 1;
        else if (momentA < momentB) return -1;
        else return 0;
    }
    const formatNumber = (num, precision, separator) => {
        let parts;
        num = Number(num);
        num = (typeof precision !== 'undefined' ? num.toFixed(precision) : num).toString();
        parts = num.split('.');
        parts[0] = parts[0].toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1' + (separator));
        return parts.join(',');
    }

    useEffect(() => {
        axios({
            method: 'GET',
            url: '/crm/planning/equipes/get',
            contentType: 'application/json; charset=utf-8'
        }).then(function (response) {
            setaTeams(response.data);
        }).catch(function (error) {
        });
    }, [datas])

    const $selplanning = $('.selplanning');
    $('.selplanning').html('');

    const $selsection = $('.selsection');
    $('.selsection ').html('');

    const $selequipe = $('.selequipe');
    $('.selequipe ').html('');
    let jjk = null

    datas.map((data) => {
        const chantiers = data.chantiers;
        if (chantiers.length > 0) {
            chantiers.map((chantier) => {
                let count = 0;
                const plannings = chantier.plannings;
                plannings.map((pla) => {
                    if (pla.corbeille === null) {
                        count++;
                    }
                });

                if (count > 0) {
                    const group = $('<optgroup label="' + data.nomclient + ' | ' + chantier.nomchantier + '" />');
                    plannings.map((planning) => {
                        if (planning.corbeille === null) {
                            $('<option value="' + planning.id + '"  />').html(planning.planning).appendTo(group);
                        }
                    });
                    group.appendTo($selplanning);
                }
            });
        }
    });
    datas.map((data) => {
        const chantiers = data.chantiers;
        if (chantiers.length > 0) {
            chantiers.map((chantier) => {
                const plannings = chantier.plannings;
                plannings.map((planning) => {
                    let count = 0;
                    const sections = planning.section;
                    sections.map((sec) => {
                        if (sec.corbeille === null) {
                            count++;
                        }
                    });
                    if (count > 0) {
                        const group = $('<optgroup label="' + data.nomclient + ' | ' + chantier.nomchantier + '" />');
                        sections.map((section) => {
                            if (section.corbeille === null) {
                                $('<option value="' + section.id + '"  />').html(section.libelle).appendTo(group);
                            }
                        });
                        group.appendTo($selsection);
                    }
                });
            });
        }
    });
    teams.map((team) => {
        jjk = '<option value="' + team.id + '">' + team.designation + '</option>' + jjk;
    });

    $('.selequipe ').html(jjk);
    $("#sortchantier").on("change", function () {
        let aa = 'aa';
        if ($(this).val().length > 0) {
            aa = $(this).val();
        }
        axios({
            method: 'GET',
            url: '/crm/planning/search/' + aa,
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
        }).then(function (response) {
            setDatas(response.data);
        }).catch(function (error) {
        });
    });
    $("#sortchantier1").on("change", function () {
        let aa = 'aa';
        if ($(this).val().length > 0) {
            aa = $(this).val();
        }
        axios({
            method: 'GET',
            url: '/crm/planning/search/' + aa,
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
        }).then(function (response) {
            setDatas(response.data);
        }).catch(function (error) {
        });
    });
    $("#sortchantier2").on("change", function () {
        let aa = 'aa';
        if ($(this).val().length > 0) {
            aa = $(this).val();
        }
        axios({
            method: 'GET',
            url: '/crm/planning/search/' + aa,
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
        }).then(function (response) {
            setDatas(response.data);
        }).catch(function (error) {
        });
    });
    $("#tsection").on("change", function () {
        let aa = 'aa';
        if ($(this).val().length > 0) {
            aa = $(this).val();
        }
        axios({
            method: 'GET',
            url: '/crm/planning/chantier/get/' + aa,
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
        }).then(function (response) {
            setTeams(response.data);
        }).catch(function (error) {
        });
    });

    const showPlanning = (id) => {
        if ($('.' + id + 'plann').hasClass("hide")) {
            $('.' + id + 'plann').removeClass('hide');
        } else {
            $('.' + id + 'plann').addClass('hide');
        }
    }
    const showSection = (id) => {
        if ($('.' + id + 'sec').hasClass("hide")) {
            $('.' + id + 'sec').removeClass('hide');
        } else {
            $('.' + id + 'sec').addClass('hide');
        }

    }
    const showTache = (id) => {
        if ($('.' + id + 'tach').hasClass("hide")) {
            $('.' + id + 'tach').removeClass('hide');
        } else {
            $('.' + id + 'tach').addClass('hide');
        }

    }
    const showEquipe = (id) => {
        if ($('.' + id + 'equip').hasClass("hide")) {
            $('.' + id + 'equip').removeClass('hide');
        } else {
            $('.' + id + 'equip').addClass('hide');
        }

    }
    const delplanning = async (id) => {
        $('#Traitement').modal('show');
        await axios({
            method: 'DELETE',
            url: '/crm/planning/delplanning/' + id,
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
        }).then(function (response) {
            setDatas(response.data);
            $('#Traitement').modal('hide');
        }).catch(function (error) {
        });
    }
    const delsection = async (id) => {
        $('#Traitement').modal('show');
        await axios({
            method: 'DELETE',
            url: '/crm/planning/section/del/' + id,
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
        }).then(function (response) {
            setDatas(response.data);
            $('#Traitement').modal('hide');
        }).catch(function (error) {
        });
    }

    $('#addePlanning').off().on("click", function (event) {
        event.preventDefault();
        if ($(this).closest('form').valid()) {
            $('#divaddplan').hide()
            $('#loadPlanning').css('display', '')
            axios({
                method: 'POST',
                url: '/crm/planning/adde',
                data: JSON.stringify($('#addPlanningForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
            }).then(function (response) {
                setDatas(response.data);
                $('#divaddplan').show();
                $('#loadPlanning').hide();
                $('#mdModalPlanning').modal('toggle')
                setTimeout(function () {
                    showPlanning($('#addPlanningForm').serializeObject()['chantier']);
                }, 500);
            }).catch(function (error) {
            });
        }
    });
    $('#updPlanning').off().on("click", function (event) {
        event.preventDefault();
        if ($(this).closest('form').valid()) {
            $('#divupdplan').hide()
            $('#loadPlanning').css('display', '');
            const id = localStorage.getItem('token');
            axios({
                method: 'PUT',
                url: '/crm/planning/updater/' + id,
                data: JSON.stringify($('#addPlanningForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
            }).then(function (response) {
                setDatas(response.data);
                $('#divaddplan').show();
                $('#loadPlanning').hide();
                $('#mdModalPlanning').modal('toggle')
            }).catch(function (error) {
            });
        }
    });

    $('#addeSection').off().on("click", function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#divaddSection').addClass('hide');
            $('#loadSection').css('display', '')
            let pp = $('#addSectionForm').serializeObject()['planning'];
            axios({
                method: 'POST',
                url: '/crm/planning/section/adde',
                data: JSON.stringify($('#addSectionForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
            }).then(function (response) {
                setDatas(response.data);
                $('#divaddSection').removeClass('hide');
                $('#loadSection').hide();
                $('#mdModalSection').modal('toggle')
                setTimeout(function () {
                    showSection(pp);
                }, 500);
            }).catch(function (error) {
            });
        }
    });
    $('#updSection').off().on("click", function (event) {
        event.preventDefault();
        if ($(this).closest('form').valid()) {
            $('#divupdSection').addClass('hide');
            $('#loadSection').css('display', '');
            const id = localStorage.getItem('token');
            axios({
                method: 'PUT',
                url: '/crm/planning/section/updater/' + id,
                data: JSON.stringify($('#addSectionForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
            }).then(function (response) {
                setDatas(response.data);
                $('#divaddSection').removeClass('hide');
                $('#slfa').addClass('hide');
                $('#slfb').removeClass('hide');
                $('#loadSection').hide();
                $('#mdModalSection').modal('toggle')
            }).catch(function (error) {
            });
        }
    });

    $('#addeTache').off().on("click", function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#divaddTache').hide()
            $('#loadTache').css('display', '')
            $('#tache').val(CKEDITOR.instances['tache'].getData())
            let pp = $('#addTacheForm').serializeObject()['section'];
            axios({
                method: 'POST',
                url: '/crm/planning/tache/adde',
                data: JSON.stringify($('#addTacheForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
            }).then(function (response) {
                setDatas(response.data);
                $('#divaddTache').show();
                $('#loadTache').hide();
                $('#mdModalTache').modal('toggle')
                setTimeout(function () {
                    showTache(pp);
                }, 500);
            }).catch(function (error) {
            });
        }
    });
    $('#updTache').off().on("click", function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#divupdTache').hide()
            $('#loadTache').css('display', '')
            $('#tache').val(CKEDITOR.instances['tache'].getData());
            const id = localStorage.getItem('token');
            axios({
                method: 'POST',
                url: '/crm/planning/tache/update/' + id,
                data: JSON.stringify($('#addTacheForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
            }).then(function (response) {
                setDatas(response.data);

                $('#divaddTache').removeClass('hide');
                $('#divaddTache').removeClass('hide');
                $('#divaddTache').show();
                $('#divupdTache').addClass('hide');

                $('#tlfb').removeClass('hide');
                $('#tlfa').addClass('hide');

                $('#loadTache').hide();
                CKEDITOR.instances['tache'].setData(' ')
                $('.toc').addClass('col-pink');


                $('#mdModalTache').modal('toggle')
            }).catch(function (error) {
            });
        }
    })

    $(function () {
        $(".getplanning").each(function () {
            $(this).off().on("click", async function () {
                let id = this.id;
                $('#Traitement').modal('show');
                await axios({
                    method: 'GET',
                    url: '/crm/planning/get/' + id,
                    contentType: 'application/json; charset=utf-8',
                    dataType: 'json',
                }).then(function (response) {
                    localStorage.setItem('token', id.toString());
                    let data = response.data;
                    $('#mdModalPlanning').modal('toggle');

                    $('#plfa').removeClass('hide');
                    $('#plfb').addClass('hide');

                    $('#divupdplan').removeClass('hide');
                    $('#divaddplan').addClass('hide');

                    $('.clos').addClass('col-pink');
                    $("#plany").val(data.planning);

                    $('#addPlanningForm').find('select[id="chantier"]').val(data.chantier.id.toString());

                    $('#Traitement').modal('hide');
                }).catch(function (error) {
                });
            });
        });
        $(".getsection").each(function () {
            $(this).off().on("click", async function () {
                let id = this.id;
                $('#Traitement').modal('show');
                await axios({
                    method: 'GET',
                    url: '/crm/planning/section/get/' + id,
                    contentType: 'application/json; charset=utf-8',
                    dataType: 'json',
                }).then(function (response) {
                    localStorage.setItem('token', id.toString());
                    let data = response.data;
                    $('#Traitement').modal('hide');
                    $('#mdModalSection').modal('toggle');

                    $('#slfa').removeClass('hide');
                    $('#slfb').addClass('hide');

                    $('#divupdSection').removeClass('hide');
                    $('#divaddSection').addClass('hide');

                    $('.clost').addClass('col-pink');
                    $("#secty").val(data.libelle);

                    $('#addSectionForm').find('select[id="planning"]').val(data.planning.id.toString());


                }).catch(function (error) {
                });
            });
        });
        $(".deltache").each(function () {
            $(this).off().on("click", async function () {
                let id = this.id;
                $('#ConfirmDelete').modal('show');
                $('#accepto').off().on("click", async function () {
                    $('#Traitement').modal('show');
                    $('#ConfirmDelete').modal('hide');
                    await axios({
                        method: 'DELETE',
                        url: '/crm/planning/tache/delete/' + id,
                        contentType: 'application/json; charset=utf-8',
                        dataType: 'json',
                    }).then(function (response) {
                        setDatas(response.data);
                        $('#Traitement').modal('hide');
                    }).catch(function (error) {
                    });
                });
            });
        });
        $(".gettache").each(function () {
            $(this).off().on("click", async function () {
                let id = this.id;
                $('#Traitement').modal('show');
                await axios({
                    method: 'GET',
                    url: '/crm/planning/tache/get/' + id,
                    contentType: 'application/json; charset=utf-8',
                    dataType: 'json',
                }).then(function (response) {

                    localStorage.setItem('token', id.toString());
                    let data = response.data;
                    const debut = moment(data.debut).format('DD/MM/YYYY HH:mm');
                    $('#ddebut').val(debut);
                    const fin = moment(data.fin).format('DD/MM/YYYY HH:mm');
                    $('#dfin').val(fin);

                    $('#mdModalTache').modal('toggle');
                    $('#Traitement').modal('hide');

                    CKEDITOR.instances['tache'].setData(data.libelle)
                    $('.toc').addClass('col-pink');

                    $('#tlfa').removeClass('hide');
                    $('#tlfb').addClass('hide');

                    $('#divupdTache').removeClass('hide');
                    $('#divupdTache').removeClass('hide');
                    $('#divupdTache').show();
                    $('#divaddTache').addClass('hide');


                    $('#addTacheForm').find('select[id="tsection"]').val(data.section.id.toString());
                    $('#addTacheForm').find('select[id="tetat"]').val(data.etat.toString());
                    $('#addTacheForm').find('select[id="persou"]').val(data.personnels.id.toString());


                }).catch(function (error) {
                });
            });
        });
        $(".delequipe").each(function () {
            $(this).off().on("click", async function () {
                let id = this.id;
                $('#ConfirmDelete').modal('show');
                $('#accepto').off().on("click", async function () {
                    $('#Traitement').modal('show');
                    $('#ConfirmDelete').modal('hide');
                    await axios({
                        method: 'DELETE',
                        url: '/crm/planning/equipe/delete/' + id,
                        contentType: 'application/json; charset=utf-8',
                        dataType: 'json',
                    }).then(function (response) {
                        setDatas(response.data);
                        $('#Traitement').modal('hide');
                    }).catch(function (error) {
                    });
                });
            });
        });
        $(".getequipe").each(function () {
            $(this).off().on("click", async function () {
                let id = this.id;
                $('#Traitement').modal('show');
                await axios({
                    method: 'GET',
                    url: '/crm/planning/equipe/get/' + id,
                    contentType: 'application/json; charset=utf-8',
                    dataType: 'json',
                }).then(function (response) {

                    localStorage.setItem('token', id.toString());
                    let data = response.data;
                    console.log(data);

                    $('#mdModalEquipe').modal('toggle');
                    $('#Traitement').modal('hide');

                    $('.equi').addClass('col-pink');

                    $('#divupdEquipe').removeClass('hide');
                    $('#divupdEquipe').removeClass('hide');
                    $('#divupdEquipe').show();
                    $('#divaddTEquipe').addClass('hide');

                    $('#addEquipeForm').find('input[id="edesign"]').val(data.designation);
                    $('#addEquipeForm').find('select[id="tsection"]').val(data.section.id.toString());

                }).catch(function (error) {
                });
            });
        });
    });

    $('#addeEquipe').off().on("click", function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#divaddTEquipe').hide()
            $('#loadEquipe').css('display', '')
            let pp = $('#addEquipeForm').serializeObject()['section'];
            axios({
                method: 'POST',
                url: '/crm/planning/equipe/adde',
                data: JSON.stringify($('#addEquipeForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
            }).then(function (response) {
                setDatas(response.data);
                $('#divaddEquipe').show();
                $('#loadEquipe').hide();
                $('#mdModalEquipe').modal('toggle')
                setTimeout(function () {
                    showEquipe(pp);
                }, 500);
            }).catch(function (error) {
            });
        }
    });
    $('#updEquipe').off().on("click", function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#divupdEquipe').hide()
            $('#loadEquipe').css('display', '')
            const id = localStorage.getItem('token');
            axios({
                method: 'POST',
                url: '/crm/planning/equipe/update/' + id,
                data: JSON.stringify($('#addEquipeForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
            }).then(function (response) {
                setDatas(response.data);
                $('#mdModalEquipe').modal('toggle')
            }).catch(function (error) {
            });
        }
    })
    async function saveOrdre(id, val) {
        $('#Traitement').modal('show');
        await axios({
            method: 'POST',
            url: '/crm/planning/tache/ordre/' + id + '/' + val.value,
        }).then(function (response) {
            setDatas(response.data);
            $('#Traitement').modal('hide');
        }).catch(function (error) {
            $('#Traitement').modal('hide');
            $('#ModalErreur').modal('show');
        });
    }

    async function savePlanning(id, val, idchan) {
        $('#Traitement').modal('show');
        await axios({
            method: 'POST',
            url: '/crm/planning/ordre/' + id + '/' + val.value,
        }).then(function (response) {
            setDatas(response.data);
            $('#Traitement').modal('hide');
            setTimeout(function () {
                showPlanning(idchan);
            }, 500);
        }).catch(function (error) {
            $('#Traitement').modal('hide');
            $('#ModalErreur').modal('show');
        });
    }

    async function saveSection(id, val, idplan) {
        $('#Traitement').modal('show');
        await axios({
            method: 'POST',
            url: '/crm/planning/section/ordre/' + id + '/' + val.value,
        }).then(function (response) {
            setDatas(response.data);
            $('#Traitement').modal('hide');
            setTimeout(function () {
                showSection(idplan);
            }, 500);
        }).catch(function (error) {
            $('#Traitement').modal('hide');
            $('#ModalErreur').modal('show');
        });
    }

    const renderPlannings = datas.map((data) => {
        let chantiers = data.chantiers;
        const renderchantiers = chantiers.map((chantier) => {

            let ount = 0;
            let planinngs = chantier.plannings;

            planinngs = planinngs.sort(function (a, b) {
                return a.rang.toString() - b.rang.toString()
            });

            planinngs.map((planning) => {
                if (planning.corbeille === null) {
                    ount = ount + 1;
                }
            });


            const renderPlanning = planinngs.map((planning) => {
                if (planning.corbeille === null) {
                    let sections = planning.section;

                    sections = sections.sort(function (a, b) {
                            return a.rang.toString() - b.rang.toString()
                    });

                    const renderSection = sections.map((section) => {
                        if (section.corbeille === null) {
                            let taches = section.taches;
                            taches = taches.sort(function (a, b) {
                                return a.ordre - b.ordre
                            });
                            const rendertaches = taches.map((tache) => {
                                if (tache.corbeille === null) {
                                    let personnels = tache.personnel;
                                    const renderPers = personnels.map((pers) => {
                                        return (<b className="nowrape">&raquo;&nbsp;{pers.noms}<br/></b>)
                                    });
                                    let equipes = tache.equipes;
                                    const renderEqui = equipes.map((equi) => {
                                        return (<b className="nowrape">&raquo;&nbsp;{equi.designation}<br/></b>)
                                    });

                                    let tacher = ' ';
                                    if (tache.etat === 'À faire') {
                                        tacher = '<span class="label bg-green font-12">' + tache.etat + '</span>';
                                    }

                                    if (tache.etat === 'Achevée') {
                                        tacher = '<span class="label bg-pink font-12">' + tache.etat + '</span>';
                                    }

                                    if (tache.etat === 'En attente') {
                                        tacher = '<span class="label bg-orange font-12">' + tache.etat + '</span>';
                                    }

                                    if (tache.etat === 'En cours') {
                                        tacher = '<span class="label bg-blue font-12">' + tache.etat + '</span>';
                                    }

                                    let lib = '<a href="/crm/tache/' + tache.id + '" class="col-black">' + tache.libelle + '</a>';

                                    return (
                                        <tr key={tache.id} className={section.id + 'tach' + ' hide'}>
                                            <td className="text-right" style={{verticalAlign: "middle"}}>
                                                <EditText
                                                    type='text'
                                                    className='badge badge-pill badge-success'
                                                    name={tache.id}
                                                    defaultValue={tache.ordre}
                                                    onSave={val => saveOrdre(tache.id, val)}
                                                /></td>
                                            <td className="mw100 ml90" style={{whiteSpace: "break-spaces"}}
                                                dangerouslySetInnerHTML={{__html: lib}}/>

                                            <td style={{verticalAlign: "middle", textTransform: "uppercase"}}
                                                className="text-center"><span
                                                className="label bg-blue font-12">{moment(tache.debut).locale("fr").format('lll')}</span>
                                            </td>

                                            <td style={{verticalAlign: "middle", textTransform: "uppercase"}}
                                                className="text-center "><span
                                                className="label bg-blue font-12">{moment(tache.fin).locale("fr").format('lll')}</span>
                                            </td>

                                            <td className="text-center " style={{verticalAlign: "middle"}}
                                                dangerouslySetInnerHTML={{__html: tacher}}/>
                                            <td style={{verticalAlign: "middle"}}>{renderPers}</td>
                                            <td style={{verticalAlign: "middle"}}>{renderEqui}</td>
                                            <td></td>
                                            <td></td>
                                            <td style={{verticalAlign: "middle"}}><a href="#" className="gettache"
                                                                                     id={tache.id}><i
                                                className="fa fa-edit col-green font-16"/>
                                            </a></td>
                                            <td style={{verticalAlign: "middle"}}><a href="#" className="deltache"
                                                                                     id={tache.id}><i
                                                className="fa fa-trash col-pink font-16"/>
                                            </a></td>
                                        </tr>);
                                }
                            });

                            let prsection = '<div class="progress">' +
                                '<div class="progress-bar bg-green"' +
                                'role="progressbar"' +
                                'aria-valuenow=' + section.etat +
                                ' aria-valuemin="0"' +
                                'aria-valuemax="100"' +
                                'style=width:' + section.etat + '%' +
                                '></div>' +
                                '</div>';
                            return (
                                <>
                                    <tr style={{backgroundColor: "#e1f5ee"}} key={section.id}
                                        className={planning.id + 'sec' + ' hide'} onClick={() => {
                                        showTache(section.id)
                                    }}>
                                        <td className="mw60 text-center">
                                            { section.rang !== null &&
                                            <EditText
                                            type='text'
                                            className='badge badge-pill badge-primary'
                                            name={section.id.toString()}
                                            defaultValue={section.rang.toString()}
                                            onSave={val => saveSection(section.id, val, planning.id)}
                                        />}

                                        </td>
                                        <td className="col-blue ml60" colSpan="2"><i
                                            className="fa fa-folder-open"/>&nbsp;{section.libelle}</td>
                                        <td colSpan="4"></td>
                                        <td dangerouslySetInnerHTML={{__html: prsection}}/>
                                        <td>{formatNumber(section.etat, 0, ' ')}%</td>
                                        <td style={{verticalAlign: "middle"}}><a href="#" className="getsection"
                                                                                 id={section.id}><i
                                            className="fa fa-edit col-green font-15"/></a></td>
                                        <td style={{verticalAlign: "middle"}}><a href="#" onClick={() => {
                                            delsection(section.id)
                                        }}><i className="fa fa-trash col-pink font-15"/></a></td>
                                    </tr>
                                    {rendertaches}
                                </>)
                        }
                    });

                    let prplanning = '<div class="progress">' +
                        '<div class="progress-bar bg-green"' +
                        'role="progressbar"' +
                        'aria-valuenow=' + planning.progression +
                        ' aria-valuemin="0"' +
                        'aria-valuemax="100"' +
                        'style=width:' + planning.progression + '%' +
                        '></div>' +
                        '</div>';

                    return (<>
                        <tr style={{backgroundColor: "#fcfcf2"}} key={planning.id}
                            className={chantier.id + 'plann' + ' hide'} onClick={() => {
                            showSection(planning.id)
                        }}>
                            <td><EditText
                                type='text'
                                className='badge badge-pill badge-danger'
                                name={planning.id.toString()}
                                defaultValue={planning.rang.toString()}
                                onSave={val => savePlanning(planning.id, val, chantier.id)}
                            /></td>
                            <td className="col-pink ml30" colSpan="2"><i
                                className="fa fa-folder-open"/>&nbsp;{planning.planning}</td>
                            <td colSpan="4"></td>
                            <td dangerouslySetInnerHTML={{__html: prplanning}}/>
                            <td>{planning.progression}%</td>
                            <td style={{verticalAlign: "middle"}}><a href="#" className="getplanning"
                                                                     id={planning.id}><i
                                className="fa fa-edit col-green font-15"/></a></td>
                            <td style={{verticalAlign: "middle"}}><a href="#" onClick={() => {
                                delplanning(planning.id)
                            }}><i className="fa fa-trash col-pink font-15"/></a></td>
                        </tr>
                        {renderSection}
                    </>);
                }
            });

            if (ount > 0) {
                return (<>
                    <tr style={{backgroundColor: "#dbdfef"}} onClick={() => {
                        showPlanning(chantier.id)
                    }}>
                        <td/>
                        <td colSpan="10" className="text-uppercase"
                            style={{color: '#4e73df'}}>{data.nomclient} | {chantier.nomchantier}</td>
                    </tr>
                    {renderPlanning}
                </>);
            } else {
                return (<></>)
            }
        });
        return (<>{renderchantiers}</>)
    });
    const renderJour = datas.map((data) => {
        let chantiers = data.chantiers;
        const renderchantiers = chantiers.map((chantier) => {
            let ount = 0;
            let planinngs = chantier.plannings;
            planinngs = planinngs.sort(function (a, b) {
                return a.rang.toString() - b.rang.toString()
            });
            planinngs.map((planning) => {
                if (planning.corbeille === null) {
                    ount = ount + 1;
                }
            });
            const renderPlanning = planinngs.map((planning) => {
                if (planning.corbeille === null) {
                    let sections = planning.section;
                    sections = sections.sort(function (a, b) {
                        return a.rang.toString() - b.rang.toString()
                    });

                    const renderSection = sections.map((section) => {
                        if (section.corbeille === null) {
                            let taches = section.taches;
                            taches = taches.sort(function (a, b) {
                                return a.ordre - b.ordre
                            });
                            const rendertaches = taches.map((tache) => {

                                let date1 = moment().format("YYYY-MM-DD")
                                let date2 = moment(tache.debut).format("YYYY-MM-DD");
                                let date3 = moment(tache.fin).format("YYYY-MM-DD");

                                if (date3 >= date1 && date1 >= date2) {
                                    if (tache.corbeille === null) {
                                        let personnels = tache.personnel;
                                        const renderPers = personnels.map((pers) => {
                                            return (<b className="nowrape">&raquo;&nbsp;{pers.noms}<br/></b>)
                                        });
                                        let equipes = tache.equipes;
                                        const renderEqui = equipes.map((equi) => {
                                            return (<b className="nowrape">&raquo;&nbsp;{equi.designation}<br/></b>)
                                        });

                                        let tacher = ' ';
                                        if (tache.etat === 'À faire') {
                                            tacher = '<span class="label bg-green font-12">' + tache.etat + '</span>';
                                        }

                                        if (tache.etat === 'Achevée') {
                                            tacher = '<span class="label bg-pink font-12">' + tache.etat + '</span>';
                                        }

                                        if (tache.etat === 'En attente') {
                                            tacher = '<span class="label bg-orange font-12">' + tache.etat + '</span>';
                                        }

                                        if (tache.etat === 'En cours') {
                                            tacher = '<span class="label bg-blue font-12">' + tache.etat + '</span>';
                                        }

                                        let lib = '<a href="/crm/tache/' + tache.id + '" class="col-black">' + tache.libelle + '<b class="col-pink"><br/>Section:</b> ' + section.libelle + '<br/><b class="col-pink">Planning:</b> ' + planning.planning +
                                            '</a><br/><b class="col-pink">Chantier:</b> <a href="/crm/tache/' + tache.id + '" class="pri">' + data.nomclient + '|' + chantier.nomchantier + '</a>';

                                        return (
                                            <tr key={tache.id}>
                                                <td/>
                                                <td className="mw100" style={{whiteSpace: "break-spaces"}}
                                                    dangerouslySetInnerHTML={{__html: lib}}/>

                                                <td style={{verticalAlign: "middle", textTransform: "uppercase"}}
                                                    className="text-center"><span
                                                    className="label bg-blue font-12">{moment(tache.debut).locale("fr").format('lll')}</span>
                                                </td>

                                                <td style={{verticalAlign: "middle", textTransform: "uppercase"}}
                                                    className="text-center "><span
                                                    className="label bg-blue font-12">{moment(tache.fin).locale("fr").format('lll')}</span>
                                                </td>

                                                <td className="text-center " style={{verticalAlign: "middle"}}
                                                    dangerouslySetInnerHTML={{__html: tacher}}/>
                                                <td style={{verticalAlign: "middle"}}>{renderPers}</td>
                                                <td style={{verticalAlign: "middle"}}>{renderEqui}</td>
                                                <td></td>
                                                <td></td>
                                                <td style={{verticalAlign: "middle"}}><a href="#" className="gettache"
                                                                                         id={tache.id}><i
                                                    className="fa fa-edit col-green font-16"/>
                                                </a></td>
                                                <td style={{verticalAlign: "middle"}}><a href="#" className="deltache"
                                                                                         id={tache.id}><i
                                                    className="fa fa-trash col-pink font-16"/>
                                                </a></td>
                                            </tr>);
                                    }
                                }

                            });

                            let prsection = '<div class="progress">' +
                                '<div class="progress-bar bg-green"' +
                                'role="progressbar"' +
                                'aria-valuenow=' + section.etat +
                                ' aria-valuemin="0"' +
                                'aria-valuemax="100"' +
                                'style=width:' + section.etat + '%' +
                                '></div>' +
                                '</div>';
                            return (
                                <>
                                    {rendertaches}
                                </>)
                        }
                    });

                    let prplanning = '<div class="progress">' +
                        '<div class="progress-bar bg-green"' +
                        'role="progressbar"' +
                        'aria-valuenow=' + planning.progression +
                        ' aria-valuemin="0"' +
                        'aria-valuemax="100"' +
                        'style=width:' + planning.progression + '%' +
                        '></div>' +
                        '</div>';

                    return (<>
                        {renderSection}
                    </>);
                }
            });

            if (ount > 0) {
                return (<>
                    {renderPlanning}
                </>);
            } else {
                return (<></>)
            }
        });
        return (<>{renderchantiers}</>)
    });
    const renderSemaine = datas.map((data) => {
        let chantiers = data.chantiers;
        const renderchantiers = chantiers.map((chantier) => {

            let ount = 0;
            let planinngs = chantier.plannings;

            planinngs = planinngs.sort(function (a, b) {
                return a.rang.toString() - b.rang.toString()
            });

            planinngs.map((planning) => {
                if (planning.corbeille === null) {
                    ount = ount + 1;
                }
            });

            const renderPlanning = planinngs.map((planning) => {
                if (planning.corbeille === null) {
                    let sections = planning.section;
                    sections = sections.sort(function (a, b) {
                        return a.rang.toString() - b.rang.toString()
                    });

                    const renderSection = sections.map((section) => {
                        if (section.corbeille === null) {
                            let taches = section.taches;
                            taches = taches.sort(function (a, b) {
                                return a.ordre - b.ordre
                            });
                            const rendertaches = taches.map((tache) => {

                                let date0 = moment().startOf('isoWeek').format("YYYY-MM-DD");
                                let date1 = moment().endOf('isoWeek').format("YYYY-MM-DD");

                                let date2 = moment(tache.debut).format("YYYY-MM-DD");
                                let date3 = moment(tache.fin).format("YYYY-MM-DD");

                                if (date0 <= date2 && date2 <= date1) {
                                    if (tache.corbeille === null) {
                                        let personnels = tache.personnel;
                                        const renderPers = personnels.map((pers) => {
                                            return (<b className="nowrape">&raquo;&nbsp;{pers.noms}<br/></b>)
                                        });
                                        let equipes = tache.equipes;
                                        const renderEqui = equipes.map((equi) => {
                                            return (<b className="nowrape">&raquo;&nbsp;{equi.designation}<br/></b>)
                                        });
                                        let tacher = ' ';
                                        if (tache.etat === 'À faire') {
                                            tacher = '<span class="label bg-green font-12">' + tache.etat + '</span>';
                                        }

                                        if (tache.etat === 'Achevée') {
                                            tacher = '<span class="label bg-pink font-12">' + tache.etat + '</span>';
                                        }

                                        if (tache.etat === 'En attente') {
                                            tacher = '<span class="label bg-orange font-12">' + tache.etat + '</span>';
                                        }

                                        if (tache.etat === 'En cours') {
                                            tacher = '<span class="label bg-blue font-12">' + tache.etat + '</span>';
                                        }

                                        let lib = '<a href="/crm/tache/' + tache.id + '" class="col-black">' + tache.libelle + '<b class="col-pink"><br/>Section:</b> ' + section.libelle + '<br/><b class="col-pink">Planning:</b> ' + planning.planning +
                                            '</a><br/><b class="col-pink">Chantier:</b> <a href="/crm/tache/' + tache.id + '" class="pri">' + data.nomclient + '|' + chantier.nomchantier + '</a>';

                                        return (
                                            <tr key={tache.id}>
                                                <td/>
                                                <td className="mw100" style={{whiteSpace: "break-spaces"}}
                                                    dangerouslySetInnerHTML={{__html: lib}}/>

                                                <td style={{verticalAlign: "middle", textTransform: "uppercase"}}
                                                    className="text-center"><span
                                                    className="label bg-blue font-12">{moment(tache.debut).locale("fr").format('lll')}</span>
                                                </td>

                                                <td style={{verticalAlign: "middle", textTransform: "uppercase"}}
                                                    className="text-center "><span
                                                    className="label bg-blue font-12">{moment(tache.fin).locale("fr").format('lll')}</span>
                                                </td>

                                                <td className="text-center " style={{verticalAlign: "middle"}}
                                                    dangerouslySetInnerHTML={{__html: tacher}}/>
                                                <td style={{verticalAlign: "middle"}}>{renderPers}</td>
                                                <td style={{verticalAlign: "middle"}}>{renderEqui}</td>
                                                <td></td>
                                                <td></td>
                                                <td style={{verticalAlign: "middle"}}><a href="#" className="gettache"
                                                                                         id={tache.id}><i
                                                    className="fa fa-edit col-green font-16"/>
                                                </a></td>
                                                <td style={{verticalAlign: "middle"}}><a href="#" className="deltache"
                                                                                         id={tache.id}><i
                                                    className="fa fa-trash col-pink font-16"/>
                                                </a></td>
                                            </tr>);
                                    }
                                }
                            });
                            return (
                                <>
                                    {rendertaches}
                                </>)
                        }
                    });
                    return (<>
                        {renderSection}
                    </>);
                }
            });

            if (ount > 0) {
                return (<>
                    {renderPlanning}
                </>);
            } else {
                return (<></>)
            }
        });
        return (<>{renderchantiers}</>)
    });
    const renderaTeams = ateams.map((ateam) => {
        let membres = ateam.personnels;
        let taches = ateam.taches;
        let chef = " ";
        if(ateam.chef !== null){
            chef = ateam.chef.noms;
        }
        const renderMembres = membres.map((membre) =>{
            return(<><span className="col-black">* {membre.noms}</span><br/></>);
        });
        const rendeTaches = taches.map((tache) =>{
            return(<>
                <span className="col-black" dangerouslySetInnerHTML={{__html: tache.libelle}}/>
                <br/>
                <span className="col-black">Etat: <b className="col-blue">{tache.etat}</b></span>
            </>);
        });
        return (<div key={ateam.id} className="col-md-3 shadow col-blue" style={{ margin: "5px", backgroundColor: "#FFF", borderLeft: "6px solid #337ab7", minHeight:"350px"}}>
            <h5 className="text-center">
                <a href="#" className="getequipe" id={ateam.id} style={{marginRight:"10px"}}><i className="fa fa-edit col-green font-16" /></a>
                <a href="#" className="delequipe" id={ateam.id}><i className="fa fa-trash col-pink font-16"/></a>
            </h5>
            <h4 className="col-pink bolo700"><u> { ateam.designation } </u></h4>
            <h5 className="col-blue"><u>Chantier:</u> <br/> <span className="col-black">* { ateam.chantier[0].nomchantier }</span></h5>
            <h5 className="col-blue"><u>Chef:</u> <br/> <span className="col-black">* { chef }</span></h5>
            <h5 className="col-blue"><u>Membres:</u> <br/> {renderMembres}</h5>
            <h5 className="col-blue"><u>Taches:</u> <br/> {rendeTaches}</h5>
        </div>);
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
                <div className="modal-dialog modal-lg">
                    <div className="modal-content">
                        <div className="modal-header">
                            <i className="btn material-icons bg-blue" id="close" data-dismiss="modal"
                               style={{float: "right"}}>clear</i>
                        </div>
                        <div className="modal-body">
                            <div className="chat-app">
                                <div id="plist" className="people-list">
                                    <ul className="list-unstyled chat-list mt-2 mb-0">

                                    </ul>
                                </div>
                                <div className="chat">
                                    <div className="chat-header clearfix">
                                        <div className="row">
                                            <div className="col-lg-6">
                                                <a href="javascript:void(0);" data-toggle="modal"
                                                   data-target="#view_info">
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png"
                                                         alt="avatar"/>
                                                </a>
                                                <div className="chat-about">
                                                    <h4 className="m-b-0 col-blue bolo600 useselected"></h4>
                                                    <h5 className="usemessage" style={{
                                                        backgroundColor: "#e8f1f3",
                                                        padding: "10px",
                                                        borderRadius: "20px"
                                                    }}></h5>
                                                </div>
                                            </div>
                                            <div className="col-lg-6 hidden-sm text-right">
                                                <button className="btn btn-outline-secondary"><i
                                                    className="fa fa-camera"></i></button>
                                                <button className="btn btn-outline-primary"><i
                                                    className="fa fa-image"></i></button>
                                                <button className="btn btn-outline-primary"><i
                                                    className="fa fa-link"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="chat-history" style={{height: "400px", overflow: "scroll"}}
                                         id="chatcontent">
                                        <ul className="m-b-0">

                                        </ul>
                                    </div>

                                    <div style={{display: "flex", justifyContent: "flex-end", width: "100%"}}>
                                        <textarea className="form-control" aria-label="With textarea"
                                                  style={{width: "100%", marginLeft: "20px"}} placeholder="Message"
                                                  id="chat"></textarea>
                                        <button type="button" id="sendchat" className="btn btn-primary btn-sm"
                                                style={{right: "0"}}>Envoyé
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div className="btn-group">
                <button type="button" data-color="blue" className="btn bg-pri text-white waves-effect"
                        data-toggle="modal" data-target="#mdModalPlanning">+ PLANNING
                </button>

                <button type="button" className="btn btn-info text-white waves-effect" data-toggle="modal"
                        data-target="#mdModalSection">+ SECTION
                </button>

                <button type="button" className="btn bg-purple text-white waves-effect" data-toggle="modal"
                        data-target="#mdModalTache">+ TACHE
                </button>

                <button type="button" className="btn bg-orange text-white waves-effect" data-toggle="modal"
                        data-target="#mdModalEquipe">+ EQUIPE
                </button>
            </div>

            <div className="col-md-12" style={{paddingLeft: "0"}}>
                <div className="panel-group" id="accordion_2" role="tablist" aria-multiselectable="true">
                    <div className="panel panel-pri" style={{marginTop:"20px"}}>
                        <div className="panel-heading bg-pri" role="tab" id="headingPla">
                            <h5 className="panel-title ">
                                <a className="collapsed text-white" role="button" data-toggle="collapse"
                                   data-parent="#accordion_2"
                                   href="#collapsePla" aria-expanded="false" aria-controls="collapsePla"
                                   style={{fontSize: "14px", fontWeight: "500"}}>
                                    Planning général
                                </a>
                            </h5>
                        </div>
                        <div id="collapsePla" className="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingPla">
                            <div className="panel-body" style={{overflow: "scroll"}}>
                                <div className="body">
                                    <div className="table-responsive">
                                        <ReactHTMLTableToExcel
                                            id="test-table-xls-button"
                                            className="btn bg-green text-white m-r-5 float-right"
                                            table="planninge"
                                            filename="PLANNING GENERAL"
                                            sheet="tablexls"
                                            buttonText="EXPORTER EN EXCEL"/>


                                        <div className="col-md-4">
                                            <div className="input-group">
                                                <div className="form-line">
                                                    <input type="text" className="form-control" id="sortchantier"
                                                           placeholder="Afficher par chantier"/>
                                                </div>

                                            </div>
                                        </div>

                                        <table className="table table-hover dashboard-task-infos" id="planninge">
                                            <thead>
                                            <tr>
                                                <th className="text-center">#</th>
                                                <th className="mw400"> CLIENT-CHANTIERS | PLANNING | ZONE | TACHES</th>
                                                <th className="mw100">DÉBUT</th>
                                                <th className="mw100">FIN</th>
                                                <th className="text-center">STATUS</th>
                                                <th>SUPERVISEURS</th>
                                                <th>ÉQUIPES</th>
                                                <th>PROGRESSION</th>
                                                <th className="mw60"></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {renderPlannings}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="panel panel-pri">
                        <div className="panel-heading bg-pri" role="tab" id="headingPlaSE">
                            <h5 className="panel-title ">
                                <a className="collapsed text-white" role="button" data-toggle="collapse"
                                   data-parent="#accordion_2"
                                   href="#collapsePlaSE" aria-expanded="false" aria-controls="collapsePlaSE"
                                   style={{fontSize: "14px", fontWeight: "500"}}>
                                    Taches de la semaine
                                </a>
                            </h5>
                        </div>
                        <div id="collapsePlaSE" className="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingPlaSE">
                            <div className="panel-body" style={{overflow: "scroll"}}>
                                <div className="body">
                                    <div className="table-responsive">
                                        <ReactHTMLTableToExcel
                                            id="test-table-xls-button"
                                            className="btn bg-green text-white m-r-5 float-right"
                                            table="planninge"
                                            filename="PLANNING GENERAL"
                                            sheet="tablexls"
                                            buttonText="EXPORTER EN EXCEL"/>


                                        <div className="col-md-4">
                                            <div className="input-group">
                                                <div className="form-line">
                                                    <input type="text" className="form-control" id="sortchantier2"
                                                           placeholder="Afficher par chantier"/>
                                                </div>

                                            </div>
                                        </div>

                                        <table className="table table-hover dashboard-task-infos" id="planninge">
                                            <thead>
                                            <tr>
                                                <th className="text-center">#</th>
                                                <th className="mw400">TACHES</th>
                                                <th className="mw100">DÉBUT</th>
                                                <th className="mw100">FIN</th>
                                                <th className="text-center">STATUS</th>
                                                <th>SUPERVISEURS</th>
                                                <th>ÉQUIPES</th>
                                                <th>PROGRESSION</th>
                                                <th className="mw60"></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {renderSemaine}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="panel panel-pri">
                        <div className="panel-heading bg-pri" role="tab" id="headingPlaJO">
                            <h5 className="panel-title ">
                                <a className="collapsed text-white" role="button" data-toggle="collapse"
                                   data-parent="#accordion_2"
                                   href="#collapsePlaJO" aria-expanded="false" aria-controls="collapsePlaJO"
                                   style={{fontSize: "14px", fontWeight: "500"}}>
                                    Taches du jour
                                </a>
                            </h5>
                        </div>
                        <div id="collapsePlaJO" className="panel-collapse" role="tabpanel"
                             aria-labelledby="headingPlaJO">
                            <div className="panel-body" style={{overflow: "scroll"}}>
                                <div className="body">
                                    <div className="table-responsive">
                                        <ReactHTMLTableToExcel
                                            id="test-table-xls-button"
                                            className="btn bg-green text-white m-r-5 float-right"
                                            table="planninge"
                                            filename="PLANNING GENERAL"
                                            sheet="tablexls"
                                            buttonText="EXPORTER EN EXCEL"/>


                                        <div className="col-md-4">
                                            <div className="input-group">
                                                <div className="form-line">
                                                    <input type="text" className="form-control" id="sortchantier1"
                                                           placeholder="Afficher par chantier"/>
                                                </div>

                                            </div>
                                        </div>

                                        <table className="table table-hover dashboard-task-infos" id="planninge">
                                            <thead>
                                            <tr>
                                                <th className="text-center">#</th>
                                                <th className="mw400">TACHES</th>
                                                <th className="mw100">DÉBUT</th>
                                                <th className="mw100">FIN</th>
                                                <th className="text-center">STATUS</th>
                                                <th>SUPERVISEURS</th>
                                                <th>ÉQUIPES</th>
                                                <th>PROGRESSION</th>
                                                <th className="mw60"></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {renderJour}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div className="col-md-12">
                <div className="row">
                    {renderaTeams}
                </div>
            </div>

        </>
    );


}

try {
    const root = createRoot(document.getElementById('planing'));
    root.render(<Planing/>);
} catch (e) {
}

