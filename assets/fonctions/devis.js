$(function () {
    $('#dataDEVIS').DataTable({
        retreive: true,
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
            {
                targets: 11,
                visible: false,
            },
            {
                targets: 3,
                render: function(data) {return moment(new Date(data)).locale('fr-fr').format('DD.MMM.YYYY');}
            },
            {orderable: false, targets: [0]},
            {orderable: false, targets: [1]},
            {orderable: false, targets: [2]},
        ],
        dom: 'Bfrtip',
        buttons: [{
            text: '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
            className: 'fred2',
            action: function (e, dt, node, config) {
                if (false === $("input[class='DEVYS']").prop('checked')) {
                    $("input[class='DEVYS']").prop('checked', true)
                } else {
                    $("input[class='DEVYS']").prop('checked', false)
                }
            },
            titleAttr: 'Cocher tout /  Décocher tout',
        },
            {
                text: '<span class="badge badge-pill badge-blue-grey">V</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='DEVYS']:checked").each(function () {
                        var iddevis = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/devis/devalider/' + iddevis,
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
                    $("input:checkbox[class='DEVYS']:checked").each(function () {
                        const iddevis = $(this).val();
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + iddevis + '/devis/non'
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
                    $("input:checkbox[class='DEVYS']:checked").each(function () {
                        var iddevis = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + iddevis + '/devis/oui'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'Devis en PDF',
            },
            {
                extend: 'copy',
                className: 'coppy',
                text: '<i class="fa fa-copy fa-2x"></i>',
                titleAttr: 'Copier',
            },
            {
                extend: 'excel',
                className: 'ecel',
                text: '<i class="fa fa-file-excel fa-2x"></i>',
                titleAttr: 'Liste en Excel',
            },
            {
                extend: 'pdf',
                className: 'pdff',
                text: '<i class="fa fa-file-pdf fa-2x"></i>',
                titleAttr: 'Liste en PDF',
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
            [3, 'ASC']
        ],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        displayLength: 9,
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="13" class="col-blue bolo700" style="background-color: #dbdfef">' +
                    group +
                    '</td>',
                )
            },
            dataSrc: 11,
        },
        "drawCallback": function (row, data, start, end, display) {
            const api = this.api();

            let th = api.column(6).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let ttc = api.column(7).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);
            let regler = api.column(8).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let solde = api.column(9).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);


            api.column(6).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(th);
            api.column(7).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(ttc);
            api.column(8).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(regler);
            api.column(9).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(solde);

        }
    })
    $('#dataDEVIS2').DataTable({
        retreive: true,
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
            {
                targets: 8,
                visible: false,
            },
            {
                targets: 2,
                render: function (data) {
                    return moment(new Date(data)).locale('fr-fr').format('DD.MMM.YYYY');
                }
            },
            {orderable: false, targets: [0]},
            {orderable: false, targets: [1]},
        ],
        dom: 'Bfrtip',
        buttons: [{
            text: '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i></i>',
            className: 'fred2',
            action: function (e, dt, node, config) {
                if (false === $("input[class='DEVYS2']").prop('checked')) {
                    $("input[class='DEVYS2']").prop('checked', true)
                } else {
                    $("input[class='DEVYS2']").prop('checked', false)
                }
            },
            titleAttr: 'Cocher tout /  Décocher tout',
        },
            {
                text: '<span class="badge badge-pill bg-blue">V</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='DEVYS2']:checked").each(function () {
                        var iddevis = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/devis/valider/' + iddevis,
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
                    $("input:checkbox[class='DEVYS2']:checked").each(function () {
                        var iddevis = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/devis/del/' + iddevis,
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
                    $("input:checkbox[class='DEVYS2']:checked").each(function () {
                        var iddevis = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + iddevis + '/devis/non'
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
                    $("input:checkbox[class='DEVYS2']:checked").each(function () {
                        var iddevis = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + iddevis + '/devis/oui'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'Devis en PDF',
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
            [2, 'ASC']
        ],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        displayLength: 9,
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="10" class="col-blue bolo700" style="background-color: #dbdfef">' +
                    group +
                    '</td>',
                )
            },
            dataSrc: 8,
        },
        "drawCallback": function (row, data, start, end, display) {
            const api = this.api();

            let th = api.column(5).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let ttc = api.column(6).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);


            api.column(5).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(th);
            api.column(6).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(ttc);

        }
    })
    $('#dataDEVIS3').DataTable({
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
            {targets: 7, visible: false,},
            {orderable: false, targets: [0]},
            {orderable: false, targets: [1]},
        ],
        dom: 'Bfrtip',
        buttons: [{
            text: '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i></i>',
            className: 'fred2',
            action: function (e, dt, node, config) {
                if (false === $("input[class='DEVYS3']").prop('checked')) {
                    $("input[class='DEVYS3']").prop('checked', true)
                } else {
                    $("input[class='DEVYS3']").prop('checked', false)
                }
            },
            titleAttr: 'Cocher tout /  Décocher tout',
        },
            {
                text: '<span class="badge badge-pill bg-blue">V</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='DEVYS3']:checked").each(function () {
                        var iddevis = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/devis/valider/' + iddevis,
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
                    $("input:checkbox[class='DEVYS3']:checked").each(function () {
                        var iddevis = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/devis/devalider/' + iddevis,
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
                    $("input:checkbox[class='DEVYS3']:checked").each(function () {
                        var iddevis = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/devis/del/' + iddevis,
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
                    $("input:checkbox[class='DEVYS3']:checked").each(function () {
                        var iddevis = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + iddevis + '/devis/non'
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
                    $("input:checkbox[class='DEVYS3']:checked").each(function () {
                        var iddevis = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + iddevis + '/devis/oui'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'Devis en PDF',
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
            [7, 'asc'], [2, 'desc']
        ],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        displayLength: 10,
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="9" class="col-blue bolo700" style="background-color: #dbdfef">' + group + '</td>',
                )
            },
            dataSrc: 7,
        },
    })
    $('#dataDEVIS4').DataTable({
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
            {targets: 7, visible: false},
            {orderable: false, targets: [0, 1]},
        ],
        dom: 'Bfrtip',
        buttons: [{
            text: '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i></i>',
            className: 'fred2',
            action: function (e, dt, node, config) {
                if (false === $("input[class='DEVYS2']").prop('checked')) {
                    $("input[class='DEVYS4']").prop('checked', true)
                } else {
                    $("input[class='DEVYS4']").prop('checked', false)
                }
            },
            titleAttr: 'Cocher tout /  Décocher tout',
        },
            {
                text: '<span class="badge badge-pill bg-blue">V</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='DEVYS4']:checked").each(function () {
                        var iddevis = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/devis/valider/' + iddevis,
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
                    $("input:checkbox[class='DEVYS4']:checked").each(function () {
                        var iddevis = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/devis/del/' + iddevis,
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
                    $("input:checkbox[class='DEVYS4']:checked").each(function () {
                        var iddevis = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + iddevis + '/devis/non'
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
                    $("input:checkbox[class='DEVYS4']:checked").each(function () {
                        var iddevis = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + iddevis + '/devis/oui'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'Devis en PDF',
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
            [7, 'asc'], [2, 'desc']
        ],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        displayLength: 10,
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="9" class="col-blue bolo700" style="background-color: #dbdfef">' + group + '</td>',
                )
            },
            dataSrc: 7,
        },
    })
    $('#dataCORDEVIS').DataTable({
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
                    '<i class="fa fa-check-square fa-2x"></i> / <i class="fa fa-square fa-2x"></i>',
                className: 'fred2',
                action: function (e, dt, node, config) {
                    if (false === $("input[class='CORBDEV']").prop('checked')) {
                        $("input[class='CORBDEV']").prop('checked', true)
                    } else {
                        $("input[class='CORBDEV']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa-redo fa-2x"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CORBDEV']:checked").each(function () {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'GET',
                                url: '/crm/devis/restaurer/' + id,
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
                titleAttr: 'Restaurer',
            },
            {
                text: '<i class="fa fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CORBDEV']:checked").each(function () {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/devis/deldefinitive/' + id,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '204') {
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
                titleAttr: 'Supprimer définitivement',
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
                text: '10',
                className: 'fred3',
                extend: 'pageLength',
            },
        ],
        columnDefs: [{
            targets: 6,
            visible: false,
        },
            {orderable: false, targets: [0]},
            {orderable: false, targets: [1]},
        ],
        order: [
            [1, 'asc'],
            [6, 'asc'],
        ],
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="8" class="col-blue bolo700" style="background-color: #dbdfef">' +
                    group +
                    '</td>',
                )
            },
            dataSrc: 6,
        },
    })
})

$('#addeDevis').on("click", function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addeDevis').hide()
        $('#closeDevis').hide()
        $('#loadDevis').css('display', '')
        $('#editor5').val(CKEDITOR.instances['editor5'].getData())
        $('#editor6').val(CKEDITOR.instances['editor6'].getData())
        $.ajax({
            type: 'POST',
            url: '/crm/devis/adde',
            data: JSON.stringify($('#addDevisForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#mdModalDevis').modal('toggle')
                    window.location.href = '/crm/devis/' + respdata['result'][0]['iddevis'] + '/' + respdata['result'][0]['idchantier'];
                }
            },
            error: function (xhr, resp, text) {
                $('#mdModalDevis').modal('toggle')
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#addDevis').on("click", function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addDevis').hide()
        $('#closeDevis').hide()
        $('#loadDevis').css('display', '')

        $('#editor').val(CKEDITOR.instances['editor'].getData())
        $('#editor2').val(CKEDITOR.instances['editor2'].getData())

        const idchantier = $('#idchantier').val();

        $.ajax({
            type: 'POST',
            url: '/crm/devis/add/' + idchantier,
            data: JSON.stringify($('#addDevisForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#mdModalDevis').modal('toggle')
                    window.location.href = '/crm/devis/' + respdata['result'] + '/' + idchantier
                }
            },
            error: function (xhr, resp, text) {
                $('#mdModalDevis').modal('toggle')
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#refchan').on('change', function () {
    $(".devcon").empty();
    $(".devcon").append('<span class="col-pink">Chargement des contacts </span> <img src="/img/loading.gif" style="width: 20px">');
    $.ajax({
        type: 'GET',
        url: '/crm/chantiers/getcontact/' + this.value,
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function (respdata, textStatus, jqXHR) {
            $("#refcon").empty();
            $(respdata).each(function (i) {
                $("#refcon").append('<option class="supper" value=' + respdata[i].id + '>' + respdata[i].contact + '</option>')
            });
            $(".devcon").empty();
            $(".devcon").append('<span class="col-green">Contacts chargés <i class="fa fa-check-circle fa-1x"></i></span>');
        },
        error: function (xhr, resp, text) {
        },
    })
});

$(".devaldevis").on('click', function (event) {
    event.preventDefault()
    const id = $(this).attr('id');
    $('#ConfirmDelete').modal('show')
    $('#accept').click(function () {
        $('#ConfirmDelete').modal('hide')
        $('#Traitement').modal('show')
        $.ajax({
            type: 'GET',
            url: '/crm/devis/devalider/' + id,
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

});