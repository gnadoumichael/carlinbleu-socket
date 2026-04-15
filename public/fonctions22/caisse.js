$(function () {

    var collapsedGroupes = {};
    var tableFichePaie = $('#dataFichePaie').DataTable({
        fixedHeader: {
            header: true,
            footer: true,
        },
        language: {
            search: 'Rechercher:',
            zeroRecords: 'Aucune donnée disponible dans le tableau',
            info: "Affichage de l'élement _START_ à _END_ sur _TOTAL_ élement(s)",
            infoEmpty: "Affichage de l'élement 0 à 0 sur 0 élément",
            paginate: {
                previous: '<i class="fa fa-chevron-left"></i>',
                next: '<i class="fa fa-chevron-right"></i>',
            },
        },
        dom: 'Bfrtip',
        buttons: [
            {
                text:
                    '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
                className: 'fred2',
                action: function (e, dt, node, config) {
                    if (false === $("input[class='FICHA']").prop('checked')) {
                        $("input[class='FICHA']").prop('checked', true)
                    } else {
                        $("input[class='FICHA']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa fa-edit fa-2x"></i>',
                className: 'edit',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='FICHA']:checked").each(function () {
                        const id = $(this).val();
                        window.location.href = '/crm/paie/fiche/' + id
                    })
                },
                titleAttr: 'Modifier',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='FICHA']:checked").each(function () {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/paie/fiche/del/' + id,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    location.reload()
                                },
                                error: function (xhr, resp, text) {
                                    $('#Traitement').modal('hide')
                                    $('#ModalErreur').modal('show')
                                },
                            })
                        })
                    })
                },
                titleAttr: 'Supprimer',
            },
            {
                extend: 'copy',
                className: 'coppy',
                text: '<i class="fa fa-copy fa-2x"></i>',
                titleAttr: 'Copy',
            },
            {
                extend: 'excel',
                className: 'ecel',
                text: '<i class="fa fa-file-excel fa-2x"></i>',
                titleAttr: 'Excel',
            },
            {
                extend: 'pdf',
                className: 'pdff',
                text: '<i class="fa fa-file-pdf fa-2x"></i>',
                titleAttr: 'PDF',
            },
            {
                extend: 'print',
                className: 'printt',
                text: '<i class="fa fa-print fa-2x"></i>',
                titleAttr: 'Imprimer',
            },
            {
                text: '20',
                className: 'fred3',
                extend: 'pageLength',
                titleAttr: 'Nombre de pages',
            },
        ],
        columnDefs: [{
            targets:2,
            visible: false,
        },],
        displayLength: 25000,
        rowGroup: {
            dataSrc: '2',
            startRender: function (rows, group, level) {
                let level_1 = '';
                let level_2 = '';
                var summy = rows
                    .data()
                    .pluck(8)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                let sommy = $.fn.dataTable.render.number(' ', ',', 2, '').display(summy)

                let all;
                if (level === 0) {
                    level_1 = group;
                    all = group;
                    level_2 = '';
                } else {
                    if (!!collapsedGroupes[level - 1]) {
                        return;
                    }
                    if (level === 1) {
                        level_2 = group
                    }

                    all = level_1 + level_2 + group;
                }

                var collapsed = !!collapsedGroupes[all];
                rows.nodes().each(function (r) {
                    r.style.display = 'none';
                    if (collapsed) {
                        r.style.display = '';
                    }
                });

                var toggleClass = collapsed ? 'fa fa-minus-circle' : 'fa fa-plus-circle';

                return $('<tr/>')
                    .append("<td colspan='7' class='col-blue bolo600' style='background-color: #dbdfef'>" + "<span class='fa fa-fw col-blue " + toggleClass + " toggler' style='cursor: pointer'></span> " + group + "</td>")
                    .append(
                        '<td class="bolo600 text-right" style="background-color: #dbdfef">' +
                        sommy +
                        '</td>',
                    )
                    .append(
                        '<td colspan="3" class="bolo600 text-right" style="background-color: #dbdfef"></td>',
                    )
                    .attr('data-name', group)
                    .toggleClass('collapsed', collapsed);
            },
            startClassName: 'group-start',
            endClassName: 'group-end'
        },
    })
    $('#dataFichePaie tbody').on('click', 'tr.group-start', function () {
        var name = $(this).data('name');
        collapsedGroupes[name] = !collapsedGroupes[name];
        tableFichePaie.draw(false);
    });

    var collapsedGroups = {};
    var tablePaie = $('#dataPAIE').DataTable({
        fixedHeader: {
            header: true,
            footer: true,
        },
        language: {
            search: 'Rechercher:',
            zeroRecords: 'Aucune donnée disponible dans le tableau',
            info: "Affichage de l'élement _START_ à _END_ sur _TOTAL_ élement(s)",
            infoEmpty: "Affichage de l'élement 0 à 0 sur 0 élément",
            paginate: {
                previous: '<i class="fa fa-chevron-left"></i>',
                next: '<i class="fa fa-chevron-right"></i>',
            },
        },
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copy',
            className: 'coppy',
            text: '<i class="fa fa-copy fa-2x"></i>',
            titleAttr: 'Copy',
        },
            {
                extend: 'excel',
                className: 'ecel',
                text: '<i class="fa fa-file-excel fa-2x"></i>',
                titleAttr: 'Excel',
            },
            {
                extend: 'pdf',
                className: 'pdff',
                text: '<i class="fa fa-file-pdf fa-2x"></i>',
                titleAttr: 'PDF',
            },
            {
                extend: 'print',
                className: 'printt',
                text: '<i class="fa fa-print fa-2x"></i>',
                titleAttr: 'Imprimer',
            },
            {
                text: '20',
                className: 'fred3',
                extend: 'pageLength',
                titleAttr: 'Nombre de pages',
            },
        ],
        columnDefs: [{
            targets: 3,
            visible: false,
        }, ],
        displayLength: 5000,
        rowGroup: {
            dataSrc: 3,
            startRender: function(rows, group, level) {
                let level_1 = '';
                let level_2 = '';
                var summy = rows
                    .data()
                    .pluck(6)
                    .reduce(function(a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                let sommy = $.fn.dataTable.render.number(' ', ',', 2, '').display(summy)

                let all;
                if (level === 0) {
                    level_1 = group;
                    all = group;
                    level_2 = '';
                } else {
                    if (!!collapsedGroups[level - 1]) {
                        return;
                    }
                    if (level === 1) {
                        level_2 = group
                    }

                    all = level_1 + level_2 + group;
                }

                var collapsed = !!collapsedGroups[all];
                rows.nodes().each(function(r) {
                    r.style.display = 'none';
                    if (collapsed) {
                        r.style.display = '';
                    }
                });

                var toggleClass = collapsed ? 'fa fa-minus-circle' : 'fa fa-plus-circle';

                return $('<tr/>')
                    .append("<td colspan='5' class='col-blue bolo600' style='background-color: #dbdfef'>" + "<span class='fa fa-fw col-blue " + toggleClass + " toggler' style='cursor: pointer'></span> " + group + "</td>")
                    .append(
                        '<td class="bolo600 text-right" style="background-color: #dbdfef">' +
                        sommy +
                        '</td>',
                    )
                    .attr('data-name', group)
                    .toggleClass('collapsed', collapsed);
            },
            startClassName: 'group-start',
            endClassName: 'group-end'
        },
    })
    $('#dataPAIE tbody').on('click', 'tr.group-start', function() {
        var name = $(this).data('name');
        collapsedGroups[name] = !collapsedGroups[name];
        tablePaie.draw(false);
    });

    $('#dataPaieCaisse').DataTable({
        fixedHeader: {
            header: true,
            footer: true,
        },
        language: {
            search: 'Rechercher:',
            zeroRecords: 'Aucune donnée disponible dans le tableau',
            info: "Affichage de l'élement _START_ à _END_ sur _TOTAL_ élement(s)",
            infoEmpty: "Affichage de l'élement 0 à 0 sur 0 élément",
            paginate: {
                previous: '<i class="fa fa-chevron-left"></i>',
                next: '<i class="fa fa-chevron-right"></i>',
            },
        },
        columnDefs: [
            {orderable: false, targets: [0]},
            {orderable: false, targets: [1]},
            {
                targets: 4,
                visible: false,
            },
            {
                targets: 2,
                render: function (data, type, full) {
                    return moment(new Date(data)).locale('fr-fr').format('DD MMM YYYY');
                }
            }
        ],
        dom: 'Bfrtip',
        buttons: [{
            text: '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
            className: 'fred2',
            action: function (e, dt, node, config) {
                if (false === $("input[class='CAYSS']").prop('checked')) {
                    $("input[class='CAYSS']").prop('checked', true)
                } else {
                    $("input[class='CAYSS']").prop('checked', false)
                }
            },
            titleAttr: 'Cocher tout /  Décocher tout',
        },
            {
                text: '<span class="badge badge-pill badge-blue-grey">V</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/caisse/devalider/' + idcaisse,
                            success: function (respdata, textStatus, jqXHR) {
                                if (jqXHR.status == '200') {
                                    location.reload()
                                }
                            },
                            error: function (xhr, resp, text) {
                                $('#Traitement').modal('toggle')
                                $('#ModalErreur').modal('show')
                            },
                        })
                    })
                },
                titleAttr: 'Dévalider',
            },
            {
                text: '<i class="fa fa fa-paperclip fa-2x col-orange"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/non'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'Joindre pour mail',
            },
            {
                text: '<i class="fa fa fa-file-pdf fa-2x col-pink"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/oui'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'BON DE CAISSE EN PDF',
            },
            {
                text: '<i class="fa fa fa-file-word fa-2x col-blue"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS']:checked").each(function () {
                        var idcaisse = $(this).val()
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/oui'
                    })
                },
                titleAttr: 'BON DE CAISSE EN WORD',
            },
            {
                text: '<i class="fa fa fa-file-excel fa-2x col-light-green"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS']:checked").each(function () {
                        var idcaisse = $(this).val()
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/oui'
                    })
                },
                titleAttr: 'BON DE CAISSE EN EXCEL',
            },
            {
                extend: 'copy',
                className: 'coppy',
                text: '<i class="fa fa-copy fa-2x"></i>',
                titleAttr: 'Copy',
            },
            {
                extend: 'excel',
                className: 'ecel',
                text: '<i class="fa fa-file-excel fa-2x"></i>',
                titleAttr: 'Excel',
            },
            {
                extend: 'pdf',
                className: 'pdff',
                text: '<i class="fa fa-file-pdf fa-2x"></i>',
                titleAttr: 'PDF',
            },
            {
                extend: 'print',
                className: 'printt',
                text: '<i class="fa fa-print fa-2x"></i>',
                titleAttr: 'Imprimer',
            },
            {
                text: '15',
                className: 'fred3',
                extend: 'pageLength',
            },
        ],
        order: [
            [4, 'ASC'],
            [3, 'ASC'],
        ],
        lengthMenu: [
            [160, 240, 320, 420, -1],
            ['160', '240', '320', '420', 'Tout'],
        ],
        displayLength: 10,
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td class="col-blue bolo700" style="background-color: #dbdfef" colspan="10">' +
                    group +
                    '</td>',
                )
            },
            dataSrc: 4,
        },
        "drawCallback": function (row, data, start, end, display) {
            const api = this.api();

            let de = api.column(6).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            api.column(6).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(de);
        }
    })
    $('#dataCAISSE').DataTable({
        fixedHeader: {
            header: true,
            footer: true,
        },
        language: {
            search: 'Rechercher:',
            zeroRecords: 'Aucune donnée disponible dans le tableau',
            info: "Affichage de l'élement _START_ à _END_ sur _TOTAL_ élement(s)",
            infoEmpty: "Affichage de l'élement 0 à 0 sur 0 élément",
            paginate: {
                previous: '<i class="fa fa-chevron-left"></i>',
                next: '<i class="fa fa-chevron-right"></i>',
            },
        },
        columnDefs: [
            {orderable: false, targets: [0]},
            {orderable: false, targets: [1]},
            {
                targets: 4,
                visible: false,
            },
            {
                targets: 2,
                render: function (data, type, full) {
                    return moment(new Date(data)).locale('fr-fr').format('DD MMM YYYY');
                }
            }
        ],
        dom: 'Bfrtip',
        buttons: [{
            text: '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
            className: 'fred2',
            action: function (e, dt, node, config) {
                if (false === $("input[class='CAYSS']").prop('checked')) {
                    $("input[class='CAYSS']").prop('checked', true)
                } else {
                    $("input[class='CAYSS']").prop('checked', false)
                }
            },
            titleAttr: 'Cocher tout /  Décocher tout',
        },
            {
                text: '<span class="badge badge-pill badge-blue-grey">V</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/caisse/devalider/' + idcaisse,
                            success: function (respdata, textStatus, jqXHR) {
                                if (jqXHR.status == '200') {
                                    location.reload()
                                }
                            },
                            error: function (xhr, resp, text) {
                                $('#Traitement').modal('toggle')
                                $('#ModalErreur').modal('show')
                            },
                        })
                    })
                },
                titleAttr: 'Dévalider',
            },
            {
                text: '<i class="fa fa fa-paperclip fa-2x col-orange"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/non'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'Joindre pour mail',
            },
            {
                text: '<i class="fa fa fa-file-pdf fa-2x col-pink"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/oui'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'BON DE CAISSE EN PDF',
            },
            {
                text: '<i class="fa fa fa-file-word fa-2x col-blue"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS']:checked").each(function () {
                        var idcaisse = $(this).val()
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/oui'
                    })
                },
                titleAttr: 'BON DE CAISSE EN WORD',
            },
            {
                text: '<i class="fa fa fa-file-excel fa-2x col-light-green"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS']:checked").each(function () {
                        var idcaisse = $(this).val()
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/oui'
                    })
                },
                titleAttr: 'BON DE CAISSE EN EXCEL',
            },
            {
                extend: 'copy',
                className: 'coppy',
                text: '<i class="fa fa-copy fa-2x"></i>',
                titleAttr: 'Copy',
            },
            {
                extend: 'excel',
                className: 'ecel',
                text: '<i class="fa fa-file-excel fa-2x"></i>',
                titleAttr: 'Excel',
            },
            {
                extend: 'pdf',
                className: 'pdff',
                text: '<i class="fa fa-file-pdf fa-2x"></i>',
                titleAttr: 'PDF',
            },
            {
                extend: 'print',
                className: 'printt',
                text: '<i class="fa fa-print fa-2x"></i>',
                titleAttr: 'Imprimer',
            },
            {
                text: '15',
                className: 'fred3',
                extend: 'pageLength',
            },
        ],
        order: [
            [4, 'ASC'],
            [3, 'ASC'],
        ],
        lengthMenu: [
            [160, 240, 320, 420, -1],
            ['160', '240', '320', '420', 'Tout'],
        ],
        displayLength: 10,
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td class="col-blue bolo700" style="background-color: #dbdfef" colspan="10">' +
                    group +
                    '</td>',
                )
            },
            dataSrc: 4,
        },
        "drawCallback": function (row, data, start, end, display) {
            const api = this.api();

            let de = api.column(6).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            api.column(6).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(de);
        }
    })
    $('#dataCAISSE2').DataTable({
        fixedHeader: {
            header: true,
            footer: true,
        },
        language: {
            search: 'Rechercher:',
            zeroRecords: 'Aucune donnée disponible dans le tableau',
            info: "Affichage de l'élement _START_ à _END_ sur _TOTAL_ élement(s)",
            infoEmpty: "Affichage de l'élement 0 à 0 sur 0 élément",
            paginate: {
                previous: '<i class="fa fa-chevron-left"></i>',
                next: '<i class="fa fa-chevron-right"></i>',
            },
        },
        columnDefs: [
            {orderable: false, targets: [0]},
            {
                targets: 4,
                visible: false,
            },
            {
                targets: 2,
                render: function (data, type, full) {
                    return moment(new Date(data)).locale('fr-fr').format('DD MMM YYYY');
                }
            }
        ],
        dom: 'Bfrtip',
        buttons: [{
            text: '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
            className: 'fred2',
            action: function (e, dt, node, config) {
                if (false === $("input[class='CAYSS2']").prop('checked')) {
                    $("input[class='CAYSS2']").prop('checked', true)
                } else {
                    $("input[class='CAYSS2']").prop('checked', false)
                }
            },
            titleAttr: 'Cocher tout /  Décocher tout',
        },
            {
                text: '<span class="badge badge-pill bg-blue">V</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS2']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/caisse/valider/' + idcaisse,
                            contentType: 'application/json; charset=utf-8',
                            success: function (respdata, textStatus, jqXHR) {
                                if (jqXHR.status == '200') {
                                    location.reload()
                                }
                            },
                            error: function (xhr, resp, text) {
                                $('#Traitement').modal('toggle')
                                $('#ModalErreur').modal('show')
                            },
                        })
                    })
                },
                titleAttr: 'Valider',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS2']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/caisse/del/' + idcaisse,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '200') {
                                        $('#Traitement').modal('hide')
                                        location.reload()
                                    }
                                },
                                error: function (xhr, resp, text) {
                                    $('#Traitement').modal('hide')
                                    $('#ModalErreur').modal('show')
                                },
                            })
                        })
                    })
                },
                titleAttr: 'Supprimer',
            },
            {
                text: '<i class="fa fa fa-paperclip fa-2x col-orange"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS2']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/non'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'Joindre pour mail',
            },
            {
                text: '<i class="fa fa fa-file-pdf fa-2x col-pink"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS2']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/oui'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'BON DE CAISSE EN PDF',
            },
            {
                text: '<i class="fa fa fa-file-word fa-2x col-blue"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS2']:checked").each(function () {
                        var idcaisse = $(this).val()
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/oui'
                    })
                },
                titleAttr: 'BON DE CAISSE EN WORD',
            },
            {
                text: '<i class="fa fa fa-file-excel fa-2x col-light-green"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS2']:checked").each(function () {
                        var idcaisse = $(this).val()
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/oui'
                    })
                },
                titleAttr: 'BON DE CAISSE EN EXCEL',
            },
            {
                extend: 'copy',
                className: 'coppy',
                text: '<i class="fa fa-copy fa-2x"></i>',
                titleAttr: 'Copy',
            },
            {
                extend: 'excel',
                className: 'ecel',
                text: '<i class="fa fa-file-excel fa-2x"></i>',
                titleAttr: 'Excel',
            },
            {
                extend: 'pdf',
                className: 'pdff',
                text: '<i class="fa fa-file-pdf fa-2x"></i>',
                titleAttr: 'PDF',
            },
            {
                extend: 'print',
                className: 'printt',
                text: '<i class="fa fa-print fa-2x"></i>',
                titleAttr: 'Imprimer',
            },
            {
                text: '15',
                className: 'fred3',
                extend: 'pageLength',
            },
        ],
        order: [
            [1, 'ASC'],
        ],
        lengthMenu: [
            [160, 240, 320, 420, -1],
            ['160', '240', '320', '420', 'Tout'],
        ],
        displayLength: 10,
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td class="col-blue bolo700" style="background-color: #dbdfef" colspan="9">' +
                    group +
                    '</td>',
                )
            },
            dataSrc: 4,
        },
        "drawCallback": function (row, data, start, end, display) {
            const api = this.api();

            let de = api.column(6).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            api.column(6).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(de);
        }
    })

    $('#dataCAISSE3').DataTable({
        fixedHeader: {
            header: true,
            footer: true,
        },
        language: {
            search: 'Rechercher:',
            zeroRecords: 'Aucune donnée disponible dans le tableau',
            info: "Affichage de l'élement _START_ à _END_ sur _TOTAL_ élement(s)",
            infoEmpty: "Affichage de l'élement 0 à 0 sur 0 élément",
            paginate: {
                previous: '<i class="fa fa-chevron-left"></i>',
                next: '<i class="fa fa-chevron-right"></i>',
            },
        },
        columnDefs: [
            {orderable: false, targets: [0]},
            {
                targets: 8,
                visible: false,
            },
            {
                targets: 2,
                render: function (data, type, full) {
                    return moment(new Date(data)).locale('fr-fr').format('DD MMM YYYY');
                }
            }
        ],
        dom: 'Bfrtip',
        buttons: [{
            text: '<i class="fa fa-check-square fa-2x"></i> / <i class="fa fa-square fa-2x"></i>',
            className: 'fred2',
            action: function (e, dt, node, config) {
                if (false === $("input[class='CAYSS3']").prop('checked')) {
                    $("input[class='CAYSS3']").prop('checked', true)
                } else {
                    $("input[class='CAYSS3']").prop('checked', false)
                }
            },
            titleAttr: 'Cocher tout /  Décocher tout',
        },
            {
                text: '<span class="badge badge-pill badge-blue-grey">V</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS3']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/caisse/devalider/' + idcaisse,
                            success: function (respdata, textStatus, jqXHR) {
                                if (jqXHR.status == '200') {
                                    location.reload()
                                }
                            },
                            error: function (xhr, resp, text) {
                                $('#Traitement').modal('toggle')
                                $('#ModalErreur').modal('show')
                            },
                        })
                    })
                },
                titleAttr: 'Dévalider',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS3']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/caisse/del/' + idcaisse,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '200') {
                                        $('#Traitement').modal('hide')
                                        location.reload()
                                    }
                                },
                                error: function (xhr, resp, text) {
                                    $('#Traitement').modal('hide')
                                    $('#ModalErreur').modal('show')
                                },
                            })
                        })
                    })
                },
                titleAttr: 'Supprimer',
            },
            {
                text: '<i class="fa fa fa-paperclip fa-2x col-orange"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS3']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/non'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'Joindre pour mail',
            },
            {
                text: '<i class="fa fa fa-file-pdf fa-2x col-pink"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS3']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/oui'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'BON DE CAISSE EN PDF',
            },
            {
                text: '<i class="fa fa fa-file-word fa-2x col-blue"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS3']:checked").each(function () {
                        var idcaisse = $(this).val()
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/oui'
                    })
                },
                titleAttr: 'BON DE CAISSE EN WORD',
            },
            {
                text: '<i class="fa fa fa-file-excel fa-2x col-light-green"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS3']:checked").each(function () {
                        var idcaisse = $(this).val()
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/oui'
                    })
                },
                titleAttr: 'BON DE CAISSE EN EXCEL',
            },
            {
                extend: 'copy',
                className: 'coppy',
                text: '<i class="fa fa-copy fa-2x"></i>',
                titleAttr: 'Copy',
            },
            {
                extend: 'excel',
                className: 'ecel',
                text: '<i class="fa fa-file-excel fa-2x"></i>',
                titleAttr: 'Excel',
            },
            {
                extend: 'pdf',
                className: 'pdff',
                text: '<i class="fa fa-file-pdf fa-2x"></i>',
                titleAttr: 'PDF',
            },
            {
                extend: 'print',
                className: 'printt',
                text: '<i class="fa fa-print fa-2x"></i>',
                titleAttr: 'Imprimer',
            },
            {
                text: '15',
                className: 'fred3',
                extend: 'pageLength',
            },
        ],
        lengthMenu: [
            [160, 240, 320, 420, -1],
            ['160', '240', '320', '420', 'Tout'],
        ],
        displayLength: 10,
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td class="col-blue bolo700" style="background-color: #dbdfef" colspan="9">' +
                    group +
                    '</td>',
                )
            },
            dataSrc: 8,
        },
        "drawCallback": function (row, data, start, end, display) {
            const api = this.api();

            let de = api.column(5).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            api.column(5).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(de);
        }
    })
    $('#dataCAISSE4').DataTable({
        fixedHeader: {
            header: true,
            footer: true,
        },
        language: {
            search: 'Rechercher:',
            zeroRecords: 'Aucune donnée disponible dans le tableau',
            info: "Affichage de l'élement _START_ à _END_ sur _TOTAL_ élement(s)",
            infoEmpty: "Affichage de l'élement 0 à 0 sur 0 élément",
            paginate: {
                previous: '<i class="fa fa-chevron-left"></i>',
                next: '<i class="fa fa-chevron-right"></i>',
            },
        },
        dom: 'Bfrtip',
        columnDefs: [
            {orderable: false, targets: [0]},
            {
                targets: 8,
                visible: false,
            },
            {
                targets: 2,
                render: function (data, type, full) {
                    return moment(new Date(data)).locale('fr-fr').format('DD MMM YYYY');
                }
            }
        ],
        buttons: [{
            text: '<i class="fa fa-check-square fa-2x"></i> / <i class="fa fa-square fa-2x"></i>',
            className: 'fred2',
            action: function (e, dt, node, config) {
                if (false === $("input[class='CAYSS4']").prop('checked')) {
                    $("input[class='CAYSS4']").prop('checked', true)
                } else {
                    $("input[class='CAYSS4']").prop('checked', false)
                }
            },
            titleAttr: 'Cocher tout /  Décocher tout',
        },
            {
                text: '<span class="badge badge-pill bg-blue">V</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS4']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/caisse/valider/' + idcaisse,
                            contentType: 'application/json; charset=utf-8',
                            success: function (respdata, textStatus, jqXHR) {
                                if (jqXHR.status == '200') {
                                    location.reload()
                                }
                            },
                            error: function (xhr, resp, text) {
                                $('#Traitement').modal('toggle')
                                $('#ModalErreur').modal('show')
                            },
                        })
                    })
                },
                titleAttr: 'Valider',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS4']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/caisse/del/' + idcaisse,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '200') {
                                        $('#Traitement').modal('hide')
                                        location.reload()
                                    }
                                },
                                error: function (xhr, resp, text) {
                                    $('#Traitement').modal('hide')
                                    $('#ModalErreur').modal('show')
                                },
                            })
                        })
                    })
                },
                titleAttr: 'Supprimer',
            },
            {
                text: '<i class="fa fa fa-paperclip fa-2x col-orange"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS4']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/non'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'Joindre pour mail',
            },
            {
                text: '<i class="fa fa fa-file-pdf fa-2x col-pink"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS4']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/oui'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'BON DE CAISSE EN PDF',
            },
            {
                text: '<i class="fa fa fa-file-word fa-2x col-blue"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS4']:checked").each(function () {
                        var idcaisse = $(this).val()
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/oui'
                    })
                },
                titleAttr: 'BON DE CAISSE EN WORD',
            },
            {
                text: '<i class="fa fa fa-file-excel fa-2x col-light-green"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS4']:checked").each(function () {
                        var idcaisse = $(this).val()
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/oui'
                    })
                },
                titleAttr: 'BON DE CAISSE EN EXCEL',
            },
            {
                extend: 'copy',
                className: 'coppy',
                text: '<i class="fa fa-copy fa-2x"></i>',
                titleAttr: 'Copy',
            },
            {
                extend: 'excel',
                className: 'ecel',
                text: '<i class="fa fa-file-excel fa-2x"></i>',
                titleAttr: 'Excel',
            },
            {
                extend: 'pdf',
                className: 'pdff',
                text: '<i class="fa fa-file-pdf fa-2x"></i>',
                titleAttr: 'PDF',
            },
            {
                extend: 'print',
                className: 'printt',
                text: '<i class="fa fa-print fa-2x"></i>',
                titleAttr: 'Imprimer',
            },
            {
                text: '15',
                className: 'fred3',
                extend: 'pageLength',
            },
        ],
        lengthMenu: [
            [160, 240, 320, 420, -1],
            ['160', '240', '320', '420', 'Tout'],
        ],
        displayLength: 10,
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td class="col-blue bolo700" style="background-color: #dbdfef" colspan="9">' +
                    group +
                    '</td>',
                )
            },
            dataSrc: 8,
        },
        "drawCallback": function (row, data, start, end, display) {
            const api = this.api();

            let de = api.column(5).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            api.column(5).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(de);
        }
    })


    $('#daCAISSE').DataTable({
        fixedHeader: {
            header: true,
            footer: true,
        },
        language: {
            search: 'Rechercher:',
            zeroRecords: 'Aucune donnée disponible dans le tableau',
            info: "Affichage de l'élement _START_ à _END_ sur _TOTAL_ élement(s)",
            infoEmpty: "Affichage de l'élement 0 à 0 sur 0 élément",
            paginate: {
                previous: '<i class="fa fa-chevron-left"></i>',
                next: '<i class="fa fa-chevron-right"></i>',
            },
        },
        columnDefs: [
            {orderable: false, targets: [0]},
            {orderable: false, targets: [1]},
            {
                targets: 4,
                visible: false,
            },
            {
                targets: 2,
                render: function (data, type, full) {
                    return moment(new Date(data)).locale('fr-fr').format('DD MMM YYYY');
                }
            }
        ],
        dom: 'Bfrtip',
        buttons: [{
            text: '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
            className: 'fred2',
            action: function (e, dt, node, config) {
                if (false === $("input[class='CASS']").prop('checked')) {
                    $("input[class='CASS']").prop('checked', true)
                } else {
                    $("input[class='CASS']").prop('checked', false)
                }
            },
            titleAttr: 'Cocher tout /  Décocher tout',
        },
            {
                text: '<span class="badge badge-pill badge-blue-grey">V</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CASS']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/caisse/devalider/' + idcaisse,
                            success: function (respdata, textStatus, jqXHR) {
                                if (jqXHR.status == '200') {
                                    location.reload()
                                }
                            },
                            error: function (xhr, resp, text) {
                                $('#Traitement').modal('toggle')
                                $('#ModalErreur').modal('show')
                            },
                        })
                    })
                },
                titleAttr: 'Dévalider',
            },
            {
                text: '<i class="fa fa fa-paperclip fa-2x col-orange"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CASS']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/non'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'Joindre pour mail',
            },
            {
                text: '<i class="fa fa fa-file-pdf fa-2x col-pink"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CASS']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/oui'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'BON DE CAISSE EN PDF',
            },
            {
                text: '<i class="fa fa fa-file-word fa-2x col-blue"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CASS']:checked").each(function () {
                        var idcaisse = $(this).val()
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/oui'
                    })
                },
                titleAttr: 'BON DE CAISSE EN WORD',
            },
            {
                text: '<i class="fa fa fa-file-excel fa-2x col-light-green"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CASS']:checked").each(function () {
                        var idcaisse = $(this).val()
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/oui'
                    })
                },
                titleAttr: 'BON DE CAISSE EN EXCEL',
            },
            {
                extend: 'copy',
                className: 'coppy',
                text: '<i class="fa fa-copy fa-2x"></i>',
                titleAttr: 'Copy',
            },
            {
                extend: 'excel',
                className: 'ecel',
                text: '<i class="fa fa-file-excel fa-2x"></i>',
                titleAttr: 'Excel',
            },
            {
                extend: 'pdf',
                className: 'pdff',
                text: '<i class="fa fa-file-pdf fa-2x"></i>',
                titleAttr: 'PDF',
            },
            {
                extend: 'print',
                className: 'printt',
                text: '<i class="fa fa-print fa-2x"></i>',
                titleAttr: 'Imprimer',
            },
            {
                text: '15',
                className: 'fred3',
                extend: 'pageLength',
            },
        ],
        order: [
            [4, 'ASC'],
            [3, 'ASC'],
        ],
        lengthMenu: [
            [160, 240, 320, 420, -1],
            ['160', '240', '320', '420', 'Tout'],
        ],
        displayLength: 10,
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td class="col-blue bolo700" style="background-color: #dbdfef" colspan="10">' +
                    group +
                    '</td>',
                )
            },
            dataSrc: 4,
        },
        "drawCallback": function (row, data, start, end, display) {
            const api = this.api();

            let de = api.column(6).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            api.column(6).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(de);
        }
    })
    $('#daCAISSE2').DataTable({
        fixedHeader: {
            header: true,
            footer: true,
        },
        language: {
            search: 'Rechercher:',
            zeroRecords: 'Aucune donnée disponible dans le tableau',
            info: "Affichage de l'élement _START_ à _END_ sur _TOTAL_ élement(s)",
            infoEmpty: "Affichage de l'élement 0 à 0 sur 0 élément",
            paginate: {
                previous: '<i class="fa fa-chevron-left"></i>',
                next: '<i class="fa fa-chevron-right"></i>',
            },
        },
        columnDefs: [
            {orderable: false, targets: [0]},
            {
                targets: 4,
                visible: false,
            },
            {
                targets: 2,
                render: function (data, type, full) {
                    return moment(new Date(data)).locale('fr-fr').format('DD MMM YYYY');
                }
            }
        ],
        dom: 'Bfrtip',
        buttons: [{
            text: '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
            className: 'fred2',
            action: function (e, dt, node, config) {
                if (false === $("input[class='CASS2']").prop('checked')) {
                    $("input[class='CASS2']").prop('checked', true)
                } else {
                    $("input[class='CASS2']").prop('checked', false)
                }
            },
            titleAttr: 'Cocher tout /  Décocher tout',
        },
            {
                text: '<span class="badge badge-pill bg-blue">V</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CASS2']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/caisse/valider/' + idcaisse,
                            contentType: 'application/json; charset=utf-8',
                            success: function (respdata, textStatus, jqXHR) {
                                if (jqXHR.status == '200') {
                                    location.reload()
                                }
                            },
                            error: function (xhr, resp, text) {
                                $('#Traitement').modal('toggle')
                                $('#ModalErreur').modal('show')
                            },
                        })
                    })
                },
                titleAttr: 'Valider',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CASS2']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/caisse/del/' + idcaisse,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '200') {
                                        $('#Traitement').modal('hide')
                                        location.reload()
                                    }
                                },
                                error: function (xhr, resp, text) {
                                    $('#Traitement').modal('hide')
                                    $('#ModalErreur').modal('show')
                                },
                            })
                        })
                    })
                },
                titleAttr: 'Supprimer',
            },
            {
                text: '<i class="fa fa fa-paperclip fa-2x col-orange"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CASS2']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/non'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'Joindre pour mail',
            },
            {
                text: '<i class="fa fa fa-file-pdf fa-2x col-pink"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CASS2']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/oui'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'BON DE CAISSE EN PDF',
            },
            {
                text: '<i class="fa fa fa-file-word fa-2x col-blue"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CASS2']:checked").each(function () {
                        var idcaisse = $(this).val()
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/oui'
                    })
                },
                titleAttr: 'BON DE CAISSE EN WORD',
            },
            {
                text: '<i class="fa fa fa-file-excel fa-2x col-light-green"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CASS2']:checked").each(function () {
                        var idcaisse = $(this).val()
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/oui'
                    })
                },
                titleAttr: 'BON DE CAISSE EN EXCEL',
            },
            {
                extend: 'copy',
                className: 'coppy',
                text: '<i class="fa fa-copy fa-2x"></i>',
                titleAttr: 'Copy',
            },
            {
                extend: 'excel',
                className: 'ecel',
                text: '<i class="fa fa-file-excel fa-2x"></i>',
                titleAttr: 'Excel',
            },
            {
                extend: 'pdf',
                className: 'pdff',
                text: '<i class="fa fa-file-pdf fa-2x"></i>',
                titleAttr: 'PDF',
            },
            {
                extend: 'print',
                className: 'printt',
                text: '<i class="fa fa-print fa-2x"></i>',
                titleAttr: 'Imprimer',
            },
            {
                text: '15',
                className: 'fred3',
                extend: 'pageLength',
            },
        ],
        order: [
            [1, 'ASC'],
        ],
        lengthMenu: [
            [160, 240, 320, 420, -1],
            ['160', '240', '320', '420', 'Tout'],
        ],
        displayLength: 10,
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td class="col-blue bolo700" style="background-color: #dbdfef" colspan="9">' +
                    group +
                    '</td>',
                )
            },
            dataSrc: 4,
        },
        "drawCallback": function (row, data, start, end, display) {
            const api = this.api();

            let de = api.column(6).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            api.column(6).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(de);
        }
    })

    $('#dCAISSE').DataTable({
        fixedHeader: {
            header: true,
            footer: true,
        },
        language: {
            search: 'Rechercher:',
            zeroRecords: 'Aucune donnée disponible dans le tableau',
            info: "Affichage de l'élement _START_ à _END_ sur _TOTAL_ élement(s)",
            infoEmpty: "Affichage de l'élement 0 à 0 sur 0 élément",
            paginate: {
                previous: '<i class="fa fa-chevron-left"></i>',
                next: '<i class="fa fa-chevron-right"></i>',
            },
        },
        columnDefs: [
            {orderable: false, targets: [0]},
            {orderable: false, targets: [1]},
            {
                targets: 6,
                visible: false,
            },
            {
                targets: 2,
                render: function (data, type, full) {
                    return moment(new Date(data)).locale('fr-fr').format('DD MMM YYYY');
                }
            }
        ],
        dom: 'Bfrtip',
        buttons: [{
            text: '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
            className: 'fred2',
            action: function (e, dt, node, config) {
                if (false === $("input[class='CSS']").prop('checked')) {
                    $("input[class='CSS']").prop('checked', true)
                } else {
                    $("input[class='CSS']").prop('checked', false)
                }
            },
            titleAttr: 'Cocher tout /  Décocher tout',
        },
            {
                text: '<span class="badge badge-pill badge-blue-grey">V</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CSS']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/caisse/devalider/' + idcaisse,
                            success: function (respdata, textStatus, jqXHR) {
                                if (jqXHR.status == '200') {
                                    location.reload()
                                }
                            },
                            error: function (xhr, resp, text) {
                                $('#Traitement').modal('toggle')
                                $('#ModalErreur').modal('show')
                            },
                        })
                    })
                },
                titleAttr: 'Dévalider',
            },
            {
                text: '<i class="fa fa fa-paperclip fa-2x col-orange"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CSS']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/non'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'Joindre pour mail',
            },
            {
                text: '<i class="fa fa fa-file-pdf fa-2x col-pink"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CSS']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/oui'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'BON DE CAISSE EN PDF',
            },
            {
                text: '<i class="fa fa fa-file-word fa-2x col-blue"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CSS']:checked").each(function () {
                        var idcaisse = $(this).val()
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/oui'
                    })
                },
                titleAttr: 'BON DE CAISSE EN WORD',
            },
            {
                text: '<i class="fa fa fa-file-excel fa-2x col-light-green"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CSS']:checked").each(function () {
                        var idcaisse = $(this).val()
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/oui'
                    })
                },
                titleAttr: 'BON DE CAISSE EN EXCEL',
            },
            {
                extend: 'copy',
                className: 'coppy',
                text: '<i class="fa fa-copy fa-2x"></i>',
                titleAttr: 'Copy',
            },
            {
                extend: 'excel',
                className: 'ecel',
                text: '<i class="fa fa-file-excel fa-2x"></i>',
                titleAttr: 'Excel',
            },
            {
                extend: 'pdf',
                className: 'pdff',
                text: '<i class="fa fa-file-pdf fa-2x"></i>',
                titleAttr: 'PDF',
            },
            {
                extend: 'print',
                className: 'printt',
                text: '<i class="fa fa-print fa-2x"></i>',
                titleAttr: 'Imprimer',
            },
            {
                text: '15',
                className: 'fred3',
                extend: 'pageLength',
            },
        ],
        order: [
            [2, 'ASC'],
        ],
        lengthMenu: [
            [160, 240, 320, 420, -1],
            ['160', '240', '320', '420', 'Tout'],
        ],
        displayLength: 10,
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td class="col-blue bolo700" style="background-color: #dbdfef" colspan="10">' +
                    group +
                    '</td>',
                )
            },
            dataSrc: 6,
        },
        "drawCallback": function (row, data, start, end, display) {
            const api = this.api();
            let de = api.column(9).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            api.column(9).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(de);
        }
    })
    $('#dCAISSE2').DataTable({
        fixedHeader: {
            header: true,
            footer: true,
        },
        language: {
            search: 'Rechercher:',
            zeroRecords: 'Aucune donnée disponible dans le tableau',
            info: "Affichage de l'élement _START_ à _END_ sur _TOTAL_ élement(s)",
            infoEmpty: "Affichage de l'élement 0 à 0 sur 0 élément",
            paginate: {
                previous: '<i class="fa fa-chevron-left"></i>',
                next: '<i class="fa fa-chevron-right"></i>',
            },
        },
        columnDefs: [
            {orderable: false, targets: [0]},
            {
                targets: 6,
                visible: false,
            },
            {
                targets: 2,
                render: function (data, type, full) {
                    return moment(new Date(data)).locale('fr-fr').format('DD MMM YYYY');
                }
            }
        ],
        dom: 'Bfrtip',
        buttons: [{
            text: '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
            className: 'fred2',
            action: function (e, dt, node, config) {
                if (false === $("input[class='CSS2']").prop('checked')) {
                    $("input[class='CSS2']").prop('checked', true)
                } else {
                    $("input[class='CSS2']").prop('checked', false)
                }
            },
            titleAttr: 'Cocher tout /  Décocher tout',
        },
            {
                text: '<span class="badge badge-pill bg-blue">V</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CSS2']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/caisse/valider/' + idcaisse,
                            contentType: 'application/json; charset=utf-8',
                            success: function (respdata, textStatus, jqXHR) {
                                if (jqXHR.status == '200') {
                                    location.reload()
                                }
                            },
                            error: function (xhr, resp, text) {
                                $('#Traitement').modal('toggle')
                                $('#ModalErreur').modal('show')
                            },
                        })
                    })
                },
                titleAttr: 'Valider',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CSS2']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/caisse/del/' + idcaisse,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '200') {
                                        $('#Traitement').modal('hide')
                                        location.reload()
                                    }
                                },
                                error: function (xhr, resp, text) {
                                    $('#Traitement').modal('hide')
                                    $('#ModalErreur').modal('show')
                                },
                            })
                        })
                    })
                },
                titleAttr: 'Supprimer',
            },
            {
                text: '<i class="fa fa fa-paperclip fa-2x col-orange"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CSS2']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/non'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'Joindre pour mail',
            },
            {
                text: '<i class="fa fa fa-file-pdf fa-2x col-pink"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CSS2']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/oui'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'BON DE CAISSE EN PDF',
            },
            {
                text: '<i class="fa fa fa-file-word fa-2x col-blue"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CSS2']:checked").each(function () {
                        var idcaisse = $(this).val()
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/oui'
                    })
                },
                titleAttr: 'BON DE CAISSE EN WORD',
            },
            {
                text: '<i class="fa fa fa-file-excel fa-2x col-light-green"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CSS2']:checked").each(function () {
                        var idcaisse = $(this).val()
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/oui'
                    })
                },
                titleAttr: 'BON DE CAISSE EN EXCEL',
            },
            {
                extend: 'copy',
                className: 'coppy',
                text: '<i class="fa fa-copy fa-2x"></i>',
                titleAttr: 'Copy',
            },
            {
                extend: 'excel',
                className: 'ecel',
                text: '<i class="fa fa-file-excel fa-2x"></i>',
                titleAttr: 'Excel',
            },
            {
                extend: 'pdf',
                className: 'pdff',
                text: '<i class="fa fa-file-pdf fa-2x"></i>',
                titleAttr: 'PDF',
            },
            {
                extend: 'print',
                className: 'printt',
                text: '<i class="fa fa-print fa-2x"></i>',
                titleAttr: 'Imprimer',
            },
            {
                text: '15',
                className: 'fred3',
                extend: 'pageLength',
            },
        ],
        order: [
            [2, 'ASC'],
        ],
        lengthMenu: [
            [160, 240, 320, 420, -1],
            ['160', '240', '320', '420', 'Tout'],
        ],
        displayLength: 10,
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td class="col-blue bolo700" style="background-color: #dbdfef" colspan="10">' +
                    group +
                    '</td>',
                )
            },
            dataSrc: 6,
        },
        "drawCallback": function (row, data, start, end, display) {
            const api = this.api();
            let de = api.column(8).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            api.column(8).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(de);
        }
    })


    $('#dataCAISSE5').DataTable({
        fixedHeader: {
            header: true,
            footer: true,
        },
        language: {
            search: 'Rechercher:',
            zeroRecords: 'Aucune donnée disponible dans le tableau',
            info: "Affichage de l'élement _START_ à _END_ sur _TOTAL_ élement(s)",
            infoEmpty: "Affichage de l'élement 0 à 0 sur 0 élément",
            paginate: {
                previous: '<i class="fa fa-chevron-left"></i>',
                next: '<i class="fa fa-chevron-right"></i>',
            },
        },
        columnDefs: [
            {orderable: false, targets: [0]},
            {
                targets: 4,
                visible: false,
            },
        ],
        dom: 'Bfrtip',
        buttons: [{
            text: '<i class="fa fa-check-square fa-2x"></i> / <i class="fa fa-square fa-2x"></i>',
            className: 'fred2',
            action: function (e, dt, node, config) {
                if (false === $("input[class='CAYSS5']").prop('checked')) {
                    $("input[class='CAYSS5']").prop('checked', true)
                } else {
                    $("input[class='CAYSS5']").prop('checked', false)
                }
            },
            titleAttr: 'Cocher tout /  Décocher tout',
        },
            {
                text: '<span class="badge badge-pill bg-blue">V</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS5']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/caisse/valider/' + idcaisse,
                            contentType: 'application/json; charset=utf-8',
                            success: function (respdata, textStatus, jqXHR) {
                                if (jqXHR.status == '200') {
                                    location.reload()
                                }
                            },
                            error: function (xhr, resp, text) {
                                $('#Traitement').modal('toggle')
                                $('#ModalErreur').modal('show')
                            },
                        })
                    })
                },
                titleAttr: 'Valider',
            },
            {
                text: '<span class="badge badge-pill badge-blue-grey">V</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS5']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/caisse/devalider/' + idcaisse,
                            success: function (respdata, textStatus, jqXHR) {
                                if (jqXHR.status == '200') {
                                    location.reload()
                                }
                            },
                            error: function (xhr, resp, text) {
                                $('#Traitement').modal('toggle')
                                $('#ModalErreur').modal('show')
                            },
                        })
                    })
                },
                titleAttr: 'Dévalider',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS5']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/caisse/del/' + idcaisse,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '200') {
                                        $('#Traitement').modal('hide')
                                        location.reload()
                                    }
                                },
                                error: function (xhr, resp, text) {
                                    $('#Traitement').modal('hide')
                                    $('#ModalErreur').modal('show')
                                },
                            })
                        })
                    })
                },
                titleAttr: 'Supprimer',
            },
            {
                text: '<i class="fa fa fa-paperclip fa-2x col-orange"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS5']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/non'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'Joindre pour mail',
            },
            {
                text: '<i class="fa fa fa-file-pdf fa-2x col-pink"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS5']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/oui'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'BON DE CAISSE EN PDF',
            },
            {
                text: '<i class="fa fa fa-file-word fa-2x col-blue"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS5']:checked").each(function () {
                        var idcaisse = $(this).val()
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/oui'
                    })
                },
                titleAttr: 'BON DE CAISSE EN WORD',
            },
            {
                text: '<i class="fa fa fa-file-excel fa-2x col-light-green"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS5']:checked").each(function () {
                        var idcaisse = $(this).val()
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/oui'
                    })
                },
                titleAttr: 'BON DE CAISSE EN EXCEL',
            },
            {
                extend: 'copy',
                className: 'coppy',
                text: '<i class="fa fa-copy fa-2x"></i>',
                titleAttr: 'Copy',
            },
            {
                extend: 'excel',
                className: 'ecel',
                text: '<i class="fa fa-file-excel fa-2x"></i>',
                titleAttr: 'Excel',
            },
            {
                extend: 'pdf',
                className: 'pdff',
                text: '<i class="fa fa-file-pdf fa-2x"></i>',
                titleAttr: 'PDF',
            },
            {
                extend: 'print',
                className: 'printt',
                text: '<i class="fa fa-print fa-2x"></i>',
                titleAttr: 'Imprimer',
            },
            {
                text: '15',
                className: 'fred3',
                extend: 'pageLength',
            },
        ],
        order: [
            [3, 'ASC'],
            [1, 'ASC'],
        ],
        lengthMenu: [
            [160, 240, 320, 420, -1],
            ['160', '240', '320', '420', 'Tout'],
        ],
        displayLength: 10,
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="9" class="col-blue bolo700" style="background-color: #dbdfef">' + group + '</td>',
                )
            },
            dataSrc: 4,
        },
    })
    $('#dataCAISSE6').DataTable({
        fixedHeader: {
            header: true,
            footer: true,
        },
        language: {
            search: 'Rechercher:',
            zeroRecords: 'Aucune donnée disponible dans le tableau',
            info: "Affichage de l'élement _START_ à _END_ sur _TOTAL_ élement(s)",
            infoEmpty: "Affichage de l'élement 0 à 0 sur 0 élément",
            paginate: {
                previous: '<i class="fa fa-chevron-left"></i>',
                next: '<i class="fa fa-chevron-right"></i>',
            },
        },
        columnDefs: [
            {orderable: false, targets: [0]},
            {
                targets: 4,
                visible: false,
            },
        ],
        dom: 'Bfrtip',
        buttons: [{
            text: '<i class="fa fa-check-square fa-2x"></i> / <i class="fa fa-square fa-2x"></i>',
            className: 'fred2',
            action: function (e, dt, node, config) {
                if (false === $("input[class='CAYSS6']").prop('checked')) {
                    $("input[class='CAYSS6']").prop('checked', true)
                } else {
                    $("input[class='CAYSS6']").prop('checked', false)
                }
            },
            titleAttr: 'Cocher tout /  Décocher tout',
        },
            {
                text: '<span class="badge badge-pill bg-blue">V</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS6']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/caisse/valider/' + idcaisse,
                            contentType: 'application/json; charset=utf-8',
                            success: function (respdata, textStatus, jqXHR) {
                                if (jqXHR.status == '200') {
                                    location.reload()
                                }
                            },
                            error: function (xhr, resp, text) {
                                $('#Traitement').modal('toggle')
                                $('#ModalErreur').modal('show')
                            },
                        })
                    })
                },
                titleAttr: 'Valider',
            },
            {
                text: '<span class="badge badge-pill badge-blue-grey">V</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS6']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/caisse/devalider/' + idcaisse,
                            success: function (respdata, textStatus, jqXHR) {
                                if (jqXHR.status == '200') {
                                    location.reload()
                                }
                            },
                            error: function (xhr, resp, text) {
                                $('#Traitement').modal('toggle')
                                $('#ModalErreur').modal('show')
                            },
                        })
                    })
                },
                titleAttr: 'Dévalider',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS6']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/caisse/del/' + idcaisse,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '200') {
                                        $('#Traitement').modal('hide')
                                        location.reload()
                                    }
                                },
                                error: function (xhr, resp, text) {
                                    $('#Traitement').modal('hide')
                                    $('#ModalErreur').modal('show')
                                },
                            })
                        })
                    })
                },
                titleAttr: 'Supprimer',
            },
            {
                text: '<i class="fa fa fa-paperclip fa-2x col-orange"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS6']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/non'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'Joindre pour mail',
            },
            {
                text: '<i class="fa fa fa-file-pdf fa-2x col-pink"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS6']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/oui'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'BON DE CAISSE EN PDF',
            },
            {
                text: '<i class="fa fa fa-file-word fa-2x col-blue"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS6']:checked").each(function () {
                        var idcaisse = $(this).val()
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/oui'
                    })
                },
                titleAttr: 'BON DE CAISSE EN WORD',
            },
            {
                text: '<i class="fa fa fa-file-excel fa-2x col-light-green"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS6']:checked").each(function () {
                        var idcaisse = $(this).val()
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/oui'
                    })
                },
                titleAttr: 'BON DE CAISSE EN EXCEL',
            },
            {
                extend: 'copy',
                className: 'coppy',
                text: '<i class="fa fa-copy fa-2x"></i>',
                titleAttr: 'Copy',
            },
            {
                extend: 'excel',
                className: 'ecel',
                text: '<i class="fa fa-file-excel fa-2x"></i>',
                titleAttr: 'Excel',
            },
            {
                extend: 'pdf',
                className: 'pdff',
                text: '<i class="fa fa-file-pdf fa-2x"></i>',
                titleAttr: 'PDF',
            },
            {
                extend: 'print',
                className: 'printt',
                text: '<i class="fa fa-print fa-2x"></i>',
                titleAttr: 'Imprimer',
            },
            {
                text: '15',
                className: 'fred3',
                extend: 'pageLength',
            },
        ],
        order: [
            [3, 'ASC'],
            [1, 'ASC'],
        ],
        lengthMenu: [
            [160, 240, 320, 420, -1],
            ['160', '240', '320', '420', 'Tout'],
        ],
        displayLength: 10,
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="9" class="col-blue bolo700" style="background-color: #dbdfef">' + group + '</td>',
                )
            },
            dataSrc: 4,
        },
    })

    $('#dataCAISSEPER').DataTable({
        fixedHeader: {
            header: true,
            footer: true,
        },
        language: {
            search: 'Rechercher:',
            zeroRecords: 'Aucune donnée disponible dans le tableau',
            info: "Affichage de l'élement _START_ à _END_ sur _TOTAL_ élement(s)",
            infoEmpty: "Affichage de l'élement 0 à 0 sur 0 élément",
            paginate: {
                previous: '<i class="fa fa-chevron-left"></i>',
                next: '<i class="fa fa-chevron-right"></i>',
            },
        },
        columnDefs: [
            {orderable: false, targets: [0]},
            {
                targets: 3,
                visible: false,
            },
        ],
        dom: 'Bfrtip',
        buttons: [{
            text: '<i class="fa fa-check-square fa-2x"></i> / <i class="fa fa-square fa-2x"></i>',
            className: 'fred2',
            action: function (e, dt, node, config) {
                if (false === $("input[class='CAYSS4']").prop('checked')) {
                    $("input[class='CAYSS4']").prop('checked', true)
                } else {
                    $("input[class='CAYSS4']").prop('checked', false)
                }
            },
            titleAttr: 'Cocher tout /  Décocher tout',
        },
            {
                text: '<span class="badge badge-pill bg-blue">V</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS4']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/caisse/valider/' + idcaisse,
                            contentType: 'application/json; charset=utf-8',
                            success: function (respdata, textStatus, jqXHR) {
                                if (jqXHR.status == '200') {
                                    location.reload()
                                }
                            },
                            error: function (xhr, resp, text) {
                                $('#Traitement').modal('toggle')
                                $('#ModalErreur').modal('show')
                            },
                        })
                    })
                },
                titleAttr: 'Valider',
            },
            {
                text: '<span class="badge badge-pill badge-blue-grey">V</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS4']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/caisse/devalider/' + idcaisse,
                            success: function (respdata, textStatus, jqXHR) {
                                if (jqXHR.status == '200') {
                                    location.reload()
                                }
                            },
                            error: function (xhr, resp, text) {
                                $('#Traitement').modal('toggle')
                                $('#ModalErreur').modal('show')
                            },
                        })
                    })
                },
                titleAttr: 'Dévalider',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS4']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/caisse/del/' + idcaisse,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '200') {
                                        $('#Traitement').modal('hide')
                                        location.reload()
                                    }
                                },
                                error: function (xhr, resp, text) {
                                    $('#Traitement').modal('hide')
                                    $('#ModalErreur').modal('show')
                                },
                            })
                        })
                    })
                },
                titleAttr: 'Supprimer',
            },
            {
                text: '<i class="fa fa fa-paperclip fa-2x col-orange"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS4']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/non'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'Joindre pour mail',
            },
            {
                text: '<i class="fa fa fa-file-pdf fa-2x col-pink"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS4']:checked").each(function () {
                        var idcaisse = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/oui'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'BON DE CAISSE EN PDF',
            },
            {
                text: '<i class="fa fa fa-file-word fa-2x col-blue"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS4']:checked").each(function () {
                        var idcaisse = $(this).val()
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/oui'
                    })
                },
                titleAttr: 'BON DE CAISSE EN WORD',
            },
            {
                text: '<i class="fa fa fa-file-excel fa-2x col-light-green"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CAYSS4']:checked").each(function () {
                        var idcaisse = $(this).val()
                        window.location.href =
                            '/crm/doc/attache/' + idcaisse + '/caisse/oui'
                    })
                },
                titleAttr: 'BON DE CAISSE EN EXCEL',
            },
            {
                extend: 'copy',
                className: 'coppy',
                text: '<i class="fa fa-copy fa-2x"></i>',
                titleAttr: 'Copy',
            },
            {
                extend: 'excel',
                className: 'ecel',
                text: '<i class="fa fa-file-excel fa-2x"></i>',
                titleAttr: 'Excel',
            },
            {
                extend: 'pdf',
                className: 'pdff',
                text: '<i class="fa fa-file-pdf fa-2x"></i>',
                titleAttr: 'PDF',
            },
            {
                extend: 'print',
                className: 'printt',
                text: '<i class="fa fa-print fa-2x"></i>',
                titleAttr: 'Imprimer',
            },
            {
                text: '15',
                className: 'fred3',
                extend: 'pageLength',
            },
        ],
        order: [
            [3, 'ASC'],
            [1, 'ASC'],
        ],
        lengthMenu: [
            [160, 240, 320, 420, -1],
            ['160', '240', '320', '420', 'Tout'],
        ],
        displayLength: 10,
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td style="color: #4e73df !important;background-color:#F9F9FF" colspan="8">' +
                    group +
                    '</td>',
                )
            },
            dataSrc: 3,
        },
    })

    $('#dataRELE').DataTable({
        language: {
            search: 'Rechercher:',
            zeroRecords: 'Aucune donnée disponible dans le tableau',
            info: "Affichage de l'élement _START_ à _END_ sur _TOTAL_ élement(s)",
            infoEmpty: "Affichage de l'élement 0 à 0 sur 0 élément",
            paginate: {
                previous: '<i class="fa fa-chevron-left"></i>',
                next: '<i class="fa fa-chevron-right"></i>',
            },
        },
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copy',
            className: 'coppy',
            text: '<i class="fa fa-copy fa-2x"></i>',
            titleAttr: 'Copy',
        },
            {
                extend: 'excel',
                className: 'ecel',
                text: '<i class="fa fa-file-excel fa-2x"></i>',
                titleAttr: 'Excel',
            },
            {
                extend: 'pdf',
                className: 'pdff',
                text: '<i class="fa fa-file-pdf fa-2x"></i>',
                titleAttr: 'PDF',
            },
            {
                extend: 'print',
                className: 'printt',
                text: '<i class="fa fa-print fa-2x"></i>',
                titleAttr: 'Imprimer',
            },
            {
                text: '20',
                className: 'fred3',
                extend: 'pageLength',
                titleAttr: 'Nombre de ligne',
            },
        ],
        order: [
            [1, 'DESC']
        ],
        columnDefs: [{orderable: false, targets: [0]}],
        lengthMenu: [
            [20, 50, 80, 160, -1],
            ['20', '50', '80', '160', 'Tout'],
        ],
        "drawCallback": function (row, data, start, end, display) {
            const api = this.api();

            let debit = api.column(2).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let credit = api.column(3).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);


            api.column(2).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(debit);
            api.column(3).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(credit);

        }
    })


    $('#dataRELEPER').DataTable({
        language: {
            search: 'Rechercher:',
            zeroRecords: 'Aucune donnée disponible dans le tableau',
            info: "Affichage de l'élement _START_ à _END_ sur _TOTAL_ élement(s)",
            infoEmpty: "Affichage de l'élement 0 à 0 sur 0 élément",
            paginate: {
                previous: '<i class="fa fa-chevron-left"></i>',
                next: '<i class="fa fa-chevron-right"></i>',
            },
        },
        dom: 'Bfrtip',
        buttons: [{
            text: '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
            className: 'fred2',
            action: function (e, dt, node, config) {
                if (false === $("input[class='RELEP']").prop('checked')) {
                    $("input[class='RELEP']").prop('checked', true)
                } else {
                    $("input[class='RELEP']").prop('checked', false)
                }
            },
            titleAttr: 'Cocher tout /  Décocher tout',
        },
            {
                extend: 'copy',
                className: 'coppy',
                text: '<i class="fa fa-copy fa-2x"></i>',
                titleAttr: 'Copy',
            },
            {
                extend: 'excel',
                className: 'ecel',
                text: '<i class="fa fa-file-excel fa-2x"></i>',
                titleAttr: 'Excel',
            },
            {
                extend: 'pdf',
                className: 'pdff',
                text: '<i class="fa fa-file-pdf fa-2x"></i>',
                titleAttr: 'PDF',
            },
            {
                extend: 'print',
                className: 'printt',
                text: '<i class="fa fa-print fa-2x"></i>',
                titleAttr: 'Imprimer',
            },
            {
                text: '20',
                className: 'fred3',
                extend: 'pageLength',
                titleAttr: 'Nombre de ligne',
            },
        ],
        order: [
            [1, 'DESC']
        ],
        columnDefs: [{orderable: false, targets: [0]}],
        lengthMenu: [
            [20, 50, 80, 160, -1],
            ['20', '50', '80', '160', 'Tout'],
        ],
    })
    $('#dataRELEVE').DataTable({
        language: {
            search: 'Rechercher:',
            zeroRecords: 'Aucune donnée disponible dans le tableau',
            info: "Affichage de l'élement _START_ à _END_ sur _TOTAL_ élement(s)",
            infoEmpty: "Affichage de l'élement 0 à 0 sur 0 élément",
            paginate: {
                previous: '<i class="fa fa-chevron-left"></i>',
                next: '<i class="fa fa-chevron-right"></i>',
            },
        },
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copy',
            className: 'coppy',
            text: '<i class="fa fa-copy fa-2x"></i>',
            titleAttr: 'Copy',
        },
            {
                extend: 'excel',
                className: 'ecel',
                text: '<i class="fa fa-file-excel fa-2x"></i>',
                titleAttr: 'Excel',
            },
            {
                extend: 'pdf',
                className: 'pdff',
                text: '<i class="fa fa-file-pdf fa-2x"></i>',
                titleAttr: 'PDF',
            },
            {
                extend: 'print',
                className: 'printt',
                text: '<i class="fa fa-print fa-2x"></i>',
                titleAttr: 'Imprimer',
            },
            {
                text: '15',
                className: 'fred3',
                extend: 'pageLength',
            },
        ],
        columnDefs: [
            {orderable: false, targets: [5]},
            {
                targets: 4,
                visible: false,
            },
        ],
        order: [
            [4, 'asc']
        ],
        displayLength: 50,
        lengthMenu: [
            [100, -1],
            ['100', 'Tout'],
        ],
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="6" class="bg-gray" style="color: #4e73df !important;">' +
                    group +
                    '</td>',
                )
            },
            dataSrc: 4,
        },
    })





})

$('#addCaisse').on("click", function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addCaisse').hide()
        $('#closeCaisse').hide()
        $('#loadCaisse').css('display', '')
        $('#closeneCaisse').hide()
        $('#loadneCaisse').css('display', '')
        const idchantier = $('#idchantier').val();
        $('#editor5').val(CKEDITOR.instances['editor5'].getData())
        $.ajax({
            type: 'POST',
            url: '/crm/caisse/add/' + idchantier,
            data: JSON.stringify($('#addCaisseForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#mdModalDevis').modal('toggle')
                    window.location.href = '/crm/caisse/' + respdata['result'] + '/' + idchantier
                }
            },
            error: function (xhr, resp, text) {
                $('#mdModalDevis').modal('toggle')
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#addPaie').on("click", function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addPaie').hide()
        $('#closePaie').hide()
        $('#loadPaie').css('display', '')
        $.ajax({
            type: 'POST',
            url: '/crm/caisse/paie/add',
            data: JSON.stringify($('#addPaieForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                location.reload();
            },
            error: function (xhr, resp, text) {
                $('#mdModalPaie').modal('toggle')
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#addeCaisse').on("click", function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addeCaisse').hide()
        $('#closeCaisse').hide()
        $('#loadCaisse').css('display', '')
        $('#editor9').val(CKEDITOR.instances['editor9'].getData())
        $.ajax({
            type: 'POST',
            url: '/crm/caisse/adde',
            data: JSON.stringify($('#addCaisseForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#mdModalCaisse').modal('toggle')
                    window.location.href =
                        '/crm/caisse/' +
                        respdata['result'][0]['numcaisse'] +
                        '/' +
                        respdata['result'][0]['idchantier']
                }
            },
            error: function (xhr, resp, text) {
                $('#mdModalCaisse').modal('toggle')
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#adduCaisse').off().on("click", function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#adduCaisse').hide()
        $('#closuCaisse').hide()
        $('#loaduCaisse').css('display', '')
        const idchantier = $('#idchantier').val();
        $('#editor15').val(CKEDITOR.instances['editor15'].getData())
        $.ajax({
            type: 'POST',
            url: '/crm/caisse/adde',
            data: JSON.stringify($('#addCaisseFournisseurForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#modalCaisse').modal('toggle')
                    window.location.href = '/crm/caisse/' + respdata['result'][0]['numcaisse'] + '/' + respdata['result'][0]['idchantier']
                }
            },
            error: function (xhr, resp, text) {
                $('#modalCaisse').modal('toggle')
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#sefone').off().on("change", function (event) {
    event.preventDefault();
    const $selbon = $('.selbon');
    $('.selbon').html('');
    $.ajax({
        type: 'POST',
        url: '/crm/bon/fournisseur/' + this.value,
        contentType: 'application/json; charset=utf-8',
        success: function (respdata, textStatus, jqXHR) {
            $(".dibon").empty();
            $(".dibon").append('<span class="col-pink">Chargement des bons</span> <img src="/img/loading.gif" style="width: 20px">');
            respdata.map((bo) => {
                const group = $('<option value=' + bo.id + '>Bon Nº ' + bo.numbon + ' | ' + bo.client.nomclient + ' | TTC: ' + bo.totalttc + '</option>');
                group.appendTo($selbon);
            });
            $(".dibon").empty();
            $(".dibon").append('<span class="col-green">Bons téléchargés</span>');
        },
        error: function (xhr, resp, text) {
            $('#ModalErreur').modal('show')
        },
    })
})
$('#adderCaisse').on("click", function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#adderCaisse').hide()
        $('#closerCaisse').hide()
        $('#loaderCaisse').css('display', '')
        $('#editor19').val(CKEDITOR.instances['editor19'].getData())
        $.ajax({
            type: 'POST',
            url: '/crm/caisse/frais/add',
            data: JSON.stringify($('#addCaisseFraisForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#mdModalCaisse').modal('toggle');
                    window.location.href =
                        '/crm/caisse/' +
                        respdata['result'][0]['numcaisse'] +
                        '/' +
                        respdata['result'][0]['idchantier']
                }
            },
            error: function (xhr, resp, text) {
                $('#mdModalCaisse').modal('toggle')
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#adderCaissePersonnel').on("click", function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#adderCaissePersonnel').hide()
        $('#closerCaissePersonnel').hide()
        $('#loaderCaissePersonnel').css('display', '')
        var id = $('#prte').val()
        $('#editor20').val(CKEDITOR.instances['editor20'].getData())
        $.ajax({
            type: 'POST',
            url: '/crm/caisse/personnel/add',
            data: JSON.stringify($('#addCaissePersonnelForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#mdModalCaisse').modal('toggle')
                    window.location.href = '/crm/caisse/' + respdata['result'] + '/' + id
                }
            },
            error: function (xhr, resp, text) {
                $('#mdModalCaisse').modal('toggle')
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#addMontant').on("click", function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addMontant').hide()
        $('#closeMontant').hide()
        $('#loadMontant').css('display', '')
        var id = $('#idcaisse').val()
        $.ajax({
            type: 'PUT',
            url: '/crm/caisse/montant/' + id,
            data: JSON.stringify($('#addMontantForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '200') {
                    $('#modalMontant').modal('toggle')
                    location.reload()
                }
            },
            error: function (xhr, resp, text) {
                $('#modalMontant').modal('toggle')
                $('#ModalErreur').modal('show')
            },
        })
    }
})

/// FORMULAIRE MODIFIER UN BON
$('#updateCaisse').on("click", function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#updateCaisse').hide()
        $('#closeCaisse').hide()
        $('#loadCaisse').css('display', '')
        var idcaisse = $('#idcaisse').val()
        $('#editor1').val(CKEDITOR.instances['editor1'].getData())
        $.ajax({
            type: 'PUT',
            url: '/crm/caisse/update/' + idcaisse,
            data: JSON.stringify($('#form1').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '200') {
                    $('#modalInfo').modal('toggle')
                    location.reload()
                }
            },
            error: function (xhr, resp, text) {
                $('#modalInfo').modal('toggle')
                $('#ModalErreur').modal('show')
            },
        })
    }
})

/// FORMULAIRE VALIDER UN BON DE CAISSE
$('#valideCaisse').on("click", function (event) {
    event.preventDefault()
    var idcaisse = $('#idcaisse').val()
    $('#sideModalTR').modal('toggle')
    $('#Traitement').modal('show')
    $.ajax({
        type: 'GET',
        url: '/crm/caisse/valider/' + idcaisse,
        success: function (respdata, textStatus, jqXHR) {
            if (jqXHR.status == '200') {
                location.reload()
            }
        },
        error: function (xhr, resp, text) {
            $('#Traitement').modal('toggle')
            $('#ModalErreur').modal('show')
        },
    })
})

/// FORMULAIRE DEVALIDER UN BON
$('#devaCaisse').on("click", function (event) {
    event.preventDefault()
    var idcaisse = $('#idcaisse').val()
    $('#ConfirmDelete').modal('show')
    $('#accept').click(function () {
        $('#ConfirmDelete').modal('hide')
        $('#Traitement').modal('show')
        $.ajax({
            type: 'GET',
            url: '/crm/caisse/devalider/' + idcaisse,
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '200') {
                    $('#Traitement').modal('hide')
                    location.reload()
                }
            },
            error: function (xhr, resp, text) {
                $('#Traitement').modal('hide')
                $('#ModalErreur').modal('show')
            },
        })
    })
})

/// FORMULAIRE DEPLACER UN BON
$('#addDeplacerCaisse').on("click", function (event) {
    event.preventDefault()
    const id = $('#idcaisse').val();
    const idchantier = $('#deplacerCaisse').val()
    $('#addDeplacerCaisse').hide()
    $('#closeDeplacer').hide()
    $('#loadDeplacer').css('display', '')
    $.ajax({
        type: 'GET',
        url: '/crm/caisse/deplacer/' + id + '/' + idchantier,
        success: function (respdata, textStatus, jqXHR) {
            if (jqXHR.status == '200') {
                window.location.href = '/crm/chantier/' + idchantier
            }
        },
        error: function (xhr, resp, text) {
            $('#ModalErreur').modal('show')
        },
    })
})

/// FORMULAIRE AJOUTER UNE LIGNE
$('#addLigneCaisse').on("click", function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addLigneCaisse').hide()
        $('#closeLignecaisse').hide()
        $('#loadLignecaisse').css('display', '')

        var idcaisse = $('#idcaisse').val();
        var idchantier = $('#idchantier').val()

        $('#editor2').val(CKEDITOR.instances['editor2'].getData())
        $.ajax({
            type: 'POST',
            url: '/crm/ligne/add/caisse/' + idcaisse,
            data: JSON.stringify($('#addLigneCaisseForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#modalLigne').modal('toggle')
                    window.location.href = '/crm/caisse/' + idcaisse + '/' + idchantier
                }
            },
            error: function (xhr, resp, text) {
                if (xhr.status == '404') {
                    $('#modalLigne').modal('toggle')
                    $('#ModalErreur').modal('show')
                }
            },
        })
    }
})

/// FORMULAIRE MODIFIER UNE LIGE
$('#updateLigneCaisse').on("click", function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#updateLigneCaisse').hide()
        $('#closeLignecaisse').hide()
        $('#loadLignecaisse').css('display', '')
    }
    var idligne = $('#idligne').val()
    var idcaisse = $('#idcaisse').val()
    var idchantier = $('#idchantier').val()
    $('#editor2').val(CKEDITOR.instances['editor2'].getData())
    $.ajax({
        type: 'PUT',
        url: '/crm/ligne/update/caisse/' + idligne + '/' + idcaisse,
        data: JSON.stringify($('#addLigneCaisseForm').serializeObject()),
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function (respdata, textStatus, jqXHR) {
            if (jqXHR.status == '200') {
                $('#modalLigne').modal('toggle')
                window.location.href = '/crm/caisse/' + idcaisse + '/' + idchantier
            }
        },
        error: function (xhr, resp, text) {
            if (xhr.status == '404') {
                $('#ModalErreur').modal('show')
                $('#modalLigne').modal('toggle')
            }
        },
    })
})

$('#caichan').on('change', function () {
    $(".cacon").empty();
    $(".cadev").empty();
    $(".caterv").empty();
    $(".cadev").append('<span class="col-pink">Chargement des devis</span> <img src="/img/loading.gif" style="width: 20px">');
    $(".cacon").append('<span class="col-pink">Chargement des contacts</span> <img src="/img/loading.gif" style="width: 20px">');
    $(".caterv").append('<span class="col-pink">Chargement des intervenants</span> <img src="/img/loading.gif" style="width: 20px">');
    $.ajax({
        type: 'POST',
        url: '/crm/devis/devischantier/' + this.value,
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function (respdata, textStatus, jqXHR) {

            $("#cadevis").empty();
            $(respdata).each(function (i) {
                $("#cadevis").append('<option class="supper" value=' + respdata[i].id + '>DEVIS N° ' + respdata[i].iddevis + '</option>')
            });
            $(".cadev").empty();
            $(".cadev").append('<span class="col-green">Devis chargés <i class="fa fa-check-circle fa-1x"></i></span>');
        },
        error: function (xhr, resp, text) {
        },
    })
    $.ajax({
        type: 'POST',
        url: '/crm/chantiers/getinterve/' + this.value,
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function (respdata, textStatus, jqXHR) {
            $("#caiterv").empty();
            $(respdata).each(function (i) {
                $("#caiterv").append('<option class="supper" value=' + respdata[i].id + '>' + respdata[i].nom + '</option>')
            });
            $(".caterv").empty();
            $(".caterv").append('<span class="col-green">Intervenants chargés <i class="fa fa-check-circle fa-1x"></i></span>');
        },
        error: function (xhr, resp, text) {
        },
    })
    $.ajax({
        type: 'GET',
        url: '/crm/chantiers/getcontact/' + this.value,
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function (respdata, textStatus, jqXHR) {
            $("#caicon").empty();
            $(respdata).each(function (i) {
                $("#caicon").append('<option class="supper" value=' + respdata[i].id + '>' + respdata[i].contact + '</option>')
            });
            $(".cacon").empty();
            $(".cacon").append('<span class="col-green">Contacts chargés <i class="fa fa-check-circle fa-1x"></i></span> ');
        },
        error: function (xhr, resp, text) {
        },
    })
});

///DELETE CAISSE
$('#delCaisse').on("click", function (event) {
    event.preventDefault()
    const idcaisse = $('#idcaisse').val();
    $('#ConfirmDelete').modal('show')
    $('#accept').on("click", function () {
        $('#ConfirmDelete').modal('hide')
        $('#Traitement').modal('show')
        $.ajax({
            type: 'GET',
            url: '/crm/caisse/del/' + idcaisse,
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '200') {
                    $('#Traitement').modal('hide')
                    location.reload()
                }
            },
            error: function (xhr, resp, text) {
                $('#Traitement').modal('hide')
                $('#ModalErreur').modal('show')
            },
        })
    })
})