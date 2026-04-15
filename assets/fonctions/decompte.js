$(function () {
    $('#dataDECOMPTE').DataTable({
        stateSave: true,
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
                targets: 10,
                visible: false,
            },
            {orderable: false, targets: [0]},
            {orderable: false, targets: [1]},
        ],
        dom: 'Bfrtip',
        buttons: [
            {
                text:
                    '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
                className: 'fred2',
                action: function (e, dt, node, config) {
                    if (false === $("input[class='DECO']").prop('checked')) {
                        $("input[class='DECO']").prop('checked', true)
                    } else {
                        $("input[class='DECO']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<span class="badge badge-pill badge-blue-grey">V</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='DECO']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/decompte/devalider/' + id,
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
                text: '<span class="badge badge-pill bg-purple">FA</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='DECO']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/decompte/convertirfacture/' + id,
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
                titleAttr: 'Convertir en facture',
            },
            {
                text: '<i class="fa fa fa-paperclip fa-2x col-orange"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='DECO']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + id + '/decompte/non'
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
                    $("input:checkbox[class='DECO']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + id + '/decompte/oui'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'Décompte en PDF',
            },
            {
                text: '<i class="fa fa fa-file-word fa-2x col-blue"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='DECO']:checked").each(function () {
                        var id = $(this).val()
                        window.location.href = '/crm/doc/attache/' + id + '/decompte/oui'
                    })
                },
                titleAttr: 'Décompte en WORD',
            },
            {
                text: '<i class="fa fa fa-file-excel fa-2x col-light-green"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='DEVYS']:checked").each(function () {
                        var iddevis = $(this).val()
                        window.location.href = '/crm/doc/attache/' + iddevis + '/devis/oui'
                    })
                },
                titleAttr: 'Décompte en EXCEL',
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
        order: [[2, 'ASC']],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        displayLength: 10,
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="11" class="col-blue bolo700" style="background-color: #dbdfef">' +
                    group +
                    '</td>',
                )
            },
            dataSrc: 10,
        },
        "drawCallback": function (row, data, start, end, display) {
            const api = this.api();

            let th= api.column(8).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let ttc = api.column(9).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);


            api.column(8).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(th);
            api.column(9).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(ttc);

        }
    })
    $('#dataDECOMPTE2').DataTable({
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
                targets: 10,
                visible: false,
            },
            {orderable: false, targets: [0]},
            {orderable: false, targets: [1]},
        ],
        dom: 'Bfrtip',
        buttons: [
            {
                text:
                    '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i></i>',
                className: 'fred2',
                action: function (e, dt, node, config) {
                    if (false === $("input[class='DECO2']").prop('checked')) {
                        $("input[class='DECO2']").prop('checked', true)
                    } else {
                        $("input[class='DECO2']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<span class="badge badge-pill bg-blue">V</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='DECO2']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/decompte/valider/' + id,
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
                text: '<span class="badge badge-pill bg-purple">FA</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='DECO2']:checked").each(function () {
                        const id = $(this).val();
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/decompte/valideconvertirfacture/' + id,
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
                titleAttr: 'Valider et convertir en facture',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='DECO2']:checked").each(function () {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').on("click",function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/decompte/del/' + id,
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
                    $("input:checkbox[class='DECO2']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + id + '/decompte/non'
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
                    $("input:checkbox[class='DECO2']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + id + '/devis/oui'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'Décompte en PDF',
            },
            {
                text: '<i class="fa fa fa-file-word fa-2x col-blue"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='DECO2']:checked").each(function () {
                        var iddevis = $(this).val()
                        window.location.href = '/crm/doc/attache/' + iddevis + '/devis/oui'
                    })
                },
                titleAttr: 'Décompte en WORD',
            },
            {
                text: '<i class="fa fa fa-file-excel fa-2x col-light-green"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='DECO2']:checked").each(function () {
                        var iddevis = $(this).val()
                        window.location.href = '/crm/doc/attache/' + iddevis + '/devis/oui'
                    })
                },
                titleAttr: 'Décompte en EXCEL',
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
        order: [[2, 'ASC']],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        displayLength: 10,
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="11"  class="col-blue bolo700" style="background-color: #dbdfef">' +
                    group +
                    '</td>',
                )
            },
            dataSrc: 10,
        },
        "drawCallback": function (row, data, start, end, display) {
            const api = this.api();

            let th= api.column(8).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let ttc = api.column(9).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);


            api.column(8).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(th);
            api.column(9).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(ttc);

        }
    })
    $('#dataDECOMPTE3').DataTable({
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
                targets: 9,
                visible: false,
            },
            {orderable: false, targets: [0]},
            {orderable: false, targets: [1]},
        ],
        dom: 'Bfrtip',
        buttons: [
            {
                text:
                    '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i></i>',
                className: 'fred2',
                action: function (e, dt, node, config) {
                    if (false === $("input[class='DECO3']").prop('checked')) {
                        $("input[class='DECO3']").prop('checked', true)
                    } else {
                        $("input[class='DECO3']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<span class="badge badge-pill bg-blue">V</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='DECO3']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/decompte/valider/' + id,
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
                    $("input:checkbox[class='DECO3']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/decompte/devalider/' + id,
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
                    $("input:checkbox[class='DECO3']:checked").each(function () {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').on("click",function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/decompte/del/' + id,
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
                    $("input:checkbox[class='DECO3']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + id + '/decompte/non'
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
                    $("input:checkbox[class='DECO3']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + id + '/devis/oui'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'Décompte en PDF',
            },
            {
                text: '<i class="fa fa fa-file-word fa-2x col-blue"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='DECO3']:checked").each(function () {
                        var iddevis = $(this).val()
                        window.location.href = '/crm/doc/attache/' + iddevis + '/devis/oui'
                    })
                },
                titleAttr: 'Décompte en WORD',
            },
            {
                text: '<i class="fa fa fa-file-excel fa-2x col-light-green"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='DECO3']:checked").each(function () {
                        var iddevis = $(this).val()
                        window.location.href = '/crm/doc/attache/' + iddevis + '/devis/oui'
                    })
                },
                titleAttr: 'Décompte en EXCEL',
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
        order: [[2, 'ASC']],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        displayLength: 10,
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="10"  class="col-blue bolo700" style="background-color: #dbdfef">' +
                    group +
                    '</td>',
                )
            },
            dataSrc: 9,
        },
    })
    $('#dataDECOMPTE4').DataTable({
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
            {targets: 9, visible: false,},
            {orderable: false, targets: [0]},
            {orderable: false, targets: [1]},
        ],
        dom: 'Bfrtip',
        buttons: [
            {
                text:
                    '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
                className: 'fred2',
                action: function (e, dt, node, config) {
                    if (false === $("input[class='DECO4']").prop('checked')) {
                        $("input[class='DECO4']").prop('checked', true)
                    } else {
                        $("input[class='DECO4']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<span class="badge badge-pill bg-blue">V</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='DECO4']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/decompte/valider/' + id,
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
                text: '<span class="badge badge-pill bg-purple">FA</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='DECO4']:checked").each(function () {
                        const id = $(this).val();
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/decompte/valideconvertirfacture/' + id,
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
                titleAttr: 'Valider et convertir en facture',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='DECO4']:checked").each(function () {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').on("click",function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/decompte/del/' + id,
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
                    $("input:checkbox[class='DECO4']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + id + '/decompte/non'
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
                    $("input:checkbox[class='DECO4']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + id + '/decompte/oui'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'Décompte en PDF',
            },
            {
                text: '<i class="fa fa fa-file-word fa-2x col-blue"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='DECO4']:checked").each(function () {
                        var id = $(this).val()
                        window.location.href = '/crm/doc/attache/' + id + '/decompte/oui'
                    })
                },
                titleAttr: 'Décompte en WORD',
            },
            {
                text: '<i class="fa fa fa-file-excel fa-2x col-light-green"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='DECO4']:checked").each(function () {
                        var iddevis = $(this).val()
                        window.location.href = '/crm/doc/attache/' + iddevis + '/devis/oui'
                    })
                },
                titleAttr: 'Décompte en EXCEL',
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
        order: [[9, 'asc']],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        displayLength: 10,
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="11" class="col-blue bolo700" style="background-color: #dbdfef">' +
                    group +
                    '</td>',
                )
            },
            dataSrc: 9,
        },
    })
})
$('#addDecompte').on("click", function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addDecompte').hide()
        $('#closeDecompte').hide()
        $('#loadDecompte').css('display', '')
        const idchantier = $('#idchantier').val();
        $.ajax({
            type: 'POST',
            url: '/crm/decompte/add/' + idchantier,
            data: JSON.stringify($('#addDecompteForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#mdModalDecompte').modal('toggle')
                    window.location.href = '/crm/decompte/' + respdata['result'] + '/' + idchantier
                }
            },
            error: function (xhr, resp, text) {
                $('#mdModalDecompte').modal('toggle')
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#addeDecompte').on("click",function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addeDecompte').hide()
        $('#closeDecompte').hide()
        $('#loadDecompte').css('display', '')
        $.ajax({
            type: 'POST',
            url: '/crm/decompte/adde',
            data: JSON.stringify($('#addDecompteForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                window.location.href = '/crm/decompte/' + respdata['result'][0]['iddecompte'] + '/' + respdata['result'][0]['idchantier'];
            },
            error: function (xhr, resp, text) {
                $('#mdModalDecompte').modal('toggle')
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#updateDecompte').on("click",function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#updateDecompte').hide()
        $('#closeUpDecompte').hide()
        $('#loadUpDecompte').css('display', '')
        var id = $('#iddecompte').val()
        $.ajax({
            type: 'PUT',
            url: '/crm/decompte/update/' + id,
            data: JSON.stringify($('#updateDecompteForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '200') {
                    $('#mdModalDecompte').modal('toggle')
                    location.reload()
                }
            },
            error: function (xhr, resp, text) {
                $('#mdModalDecompte').modal('toggle')
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#reloadDevis').on("click",function (event) {
    event.preventDefault()
    var iddecompte = $('#iddecompte').val()
    $('#Traitement').modal('show')
    $.ajax({
        type: 'GET',
        url: '/crm/decompte/reloaddevis/' + iddecompte,
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

$('#toutvalider').on("click",function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#toutvalider').hide()
        $('#loadtout').css('display', '')
        var id = $('#iddecompte').val()
        $.ajax({
            type: 'POST',
            url: '/crm/ligne/updateres/' +id,
            data: JSON.stringify($('#toutvaliderform').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '200') {
                    location.reload()
                }
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#toutvalider2').on("click",function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#toutvalider2').hide()
        $('#load2tout').css('display', '')
        var id = $('#iddecompte').val()
        $.ajax({
            type: 'POST',
            url: '/crm/ligne/updateres/' +id,
            data: JSON.stringify($('#toutvaliderform2').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '200') {
                    location.reload()
                }
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#valideDecompte').on("click",function (event) {
    event.preventDefault()
    var iddecompte = $('#iddecompte').val()
    $('#Traitement').modal('show')
    $.ajax({
        type: 'GET',
        url: '/crm/decompte/valider/' + iddecompte,
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
$('#devalideDecompte').on("click",function (event) {
    event.preventDefault()
    var iddecompte = $('#iddecompte').val()
    $('#Traitement').modal('show')
    $.ajax({
        type: 'GET',
        url: '/crm/decompte/devalider/' + iddecompte,
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
$('#deleteDecompte').on("click",function (event) {
    event.preventDefault()
    var id = $('#iddecompte').val();
    $('#ConfirmDelete').modal('show');
    $('#accept').on("click",async function () {
        $('#ConfirmDelete').modal('hide');
        $('#Traitement').modal('show');
        await axios({
            method: 'DELETE',
            url: '/crm/decompte/del/' + id,
        }).then(function (response) {
            window.location.href = '/crm/chantiers'
        }).catch(function (error) {
            $('#ModalErreur').modal('show')
        });
    });
})
$("#devdec").on('change', async function () {
    const id = $('select[name="devdec"] :selected').attr('class');
    $(".devcoy").empty();
    $(".devcoy").append('<span class="col-pink">Chargement... </span> <img src="/img/loading.gif" style="width: 20px">');
    await axios({
        method: 'POST',
        url: '/crm/devis/get/' + id,
        dataType: 'json',
    }).then(function (response) {
        let data = response.data;

        if(data.acomrage > 0){$("#acomrage").val(data.acomrage);}else{$("#acomrage").val("0.00");}
        if(data.garantie > 0){$("#garantie").val(data.garantie);}else{$("#garantie").val("0.00");}
        if(data.finition > 0  ){$("#finition").val(data.finition);}else{$("#finition").val("0.00");}
        if(data.prorata > 0){$("#prorata").val(data.prorata);}else{$("#prorara").val("0.00");}

        $(".devcoy").empty();
        $(".devcoy").append('<span class="col-green">Données chargées <i class="fa fa-check-circle fa-1x"></i></span>');
    });

})
$('#pdfDecompte').on("click",function (event) {
    event.preventDefault();
    const id = $('#iddecompte').val();
    $("#prpdf").css("display", "block");
    window.location.href = "http://127.0.0.1:8000/crm/doc/attache/"+id+"/pdfdecompte/oui";
})
window.printDecEntete = function printDecEntete() {
    window.frames[1].focus();
    window.frames[1].print();
    return false;
}
window.printDecSaEntete = function printDecSaEntete() {
    $('#frame').css("display", "none");
    window.frames[1].focus();
    window.frames[1].print();
    return false;
}