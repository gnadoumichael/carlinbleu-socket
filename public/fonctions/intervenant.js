$(function () {
    $('#dataJOURNALIER').DataTable({
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
                    if (false === $("input[class='JOURNA']").prop('checked')) {
                        $("input[class='JOURNA']").prop('checked', true)
                    } else {
                        $("input[class='JOURNA']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa fa-edit fa-2x"></i>',
                className: 'edit',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='JOURNA']:checked").each(function () {
                        var id = $(this).val()
                        window.location.href =
                            '/crm/paie/journalier/' + id
                    })
                },
                titleAttr: 'Modifier',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='JOURNA']:checked").each(function () {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/paie/journalier/del/' + id,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '204') {
                                        $('#Traitement').modal('hide')
                                        location.reload()                                   }
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
        order: [[1, 'ASC']],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
    })
    $('#addJournalier').off().on("click",function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#addJournalier').hide()
            $('#closeJournalier').hide()
            $('#loadJournalier').css('display', '')
            $.ajax({
                type: 'POST',
                url: '/crm/paie/journalier/add',
                data: JSON.stringify($('#addJournalierForm').serializeObject()),
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
    $('#updateJournalier').off().on("click", function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#updateJournalier').hide()
            $('#closeJournalier').hide()
            $('#loadJournalier').css('display', '')

            var id = $('#idjourna').val();

            $.ajax({
                type: 'PUT',
                url: '/crm/paie/journalier/update/' + id,
                data: JSON.stringify($('#addJournalierForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    location.reload()
                },
                error: function (xhr, resp, text) {
                    $('#modalJOURNAS').modal('toggle')
                    $('#ModalErreur').modal('show')
                },
            })
        }
    })
    $('#addFichePaie').off().on("click",function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#addFichePaie').hide()
            $('#closeFichePaie').hide()
            $('#loadFichePaie').css('display', '')
            $.ajax({
                type: 'POST',
                url: '/crm/paie/fiche/add',
                data: JSON.stringify($('#addFichePaieForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    location.reload()
                },
                error: function (xhr, resp, text) {
                    $('#ModalErreur').modal('show')
                },
            })
        }
    })
    $('#updateFichePaie').off().on("click", function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#updateFichePaie').hide()
            $('#closeFichePaie').hide()
            $('#loadFichePaie').css('display', '')

            var id = $('#idfiche').val();

            $.ajax({
                type: 'PUT',
                url: '/crm/paie/fiche/update/' + id,
                data: JSON.stringify($('#addFichePaieForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    location.reload()
                },
                error: function (xhr, resp, text) {
                    $('#modalJOURNAS').modal('toggle')
                    $('#ModalErreur').modal('show')
                },
            })
        }
    })
})


$(function () {
    $('#dataINTERVE').DataTable({
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
                    if (false === $("input[class='INTERVE']").prop('checked')) {
                        $("input[class='INTERVE']").prop('checked', true)
                    } else {
                        $("input[class='INTERVE']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa fa-edit fa-2x"></i>',
                className: 'edit',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='INTERVE']:checked").each(function () {
                        var idchantier = $('#idchantier').val()
                        var id = $(this).val()
                        window.location.href =
                            '/crm/chantier/intervenant/' + id + '/' + idchantier
                    })
                },
                titleAttr: 'Modifier',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='INTERVE']:checked").each(function () {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/intervenant/del/' + id,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '204') {
                                        $('#Traitement').modal('hide')
                                        location.reload()                                   }
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
        columnDefs: [
            {
                targets: 2,
                visible: false,
            },
            {orderable: false, targets: [0]},
        ],
        order: [[0, 'ASC']],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="7" class="col-deep-orange bolo700" style="background-color: #dbdfef">' + group + '</td>',
                )
            },
            dataSrc: 2,
        },
        "drawCallback": function (row, data, start, end, display) {
            const api = this.api();

            let facturer = api.column(3).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let solder = api.column(4).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let reste = api.column(5).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);


            api.column(3).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(facturer);
            api.column(4).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(solder);
            api.column(5).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(reste);

        }
    })
})
$(function () {
    $('#dataINTERVER').DataTable({
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
                    if (false === $("input[class='INTERVER']").prop('checked')) {
                        $("input[class='INTERVER']").prop('checked', true)
                    } else {
                        $("input[class='INTERVER']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa fa-edit fa-2x"></i>',
                className: 'edit',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='INTERVER']:checked").each(function () {
                        var idchantier = $('#idchantier').val()
                        var id = $(this).val()
                        window.location.href =
                            '/crm/chantier/intervenant/' + id + '/' + idchantier
                    })
                },
                titleAttr: 'Modifier',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='INTERVER']:checked").each(function () {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/intervenant/del/' + id,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '204') {
                                        $('#Traitement').modal('hide')
                                        location.reload()                                   }
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
        columnDefs: [
            {
                targets: 2,
                visible: false,
            },
            {orderable: false, targets: [0]},
        ],
        order: [[0, 'ASC']],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="6" class="col-blue bolo700" style="background-color: #dbdfef">' + group + '</td>',
                )
            },
            dataSrc: 2,
        },
        "drawCallback": function (row, data, start, end, display) {
            const api = this.api();

            let facturer = api.column(3).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let solder = api.column(4).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);


            api.column(3).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(facturer);
            api.column(4).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(solder);

        }

    })
})
$(function () {
    $('#dataINTERVERPER').DataTable({
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
                    if (false === $("input[class='INTERVER']").prop('checked')) {
                        $("input[class='INTERVER']").prop('checked', true)
                    } else {
                        $("input[class='INTERVER']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa fa-edit fa-2x"></i>',
                className: 'edit',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='INTERVER']:checked").each(function () {
                        var id = $(this).val()
                        window.location.href = '/crm/chantiers/intervenant/frais/' + id
                    })
                },
                titleAttr: 'Modifier',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='INTERVER']:checked").each(function () {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/intervenant/del/' + id,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '204') {
                                        $('#Traitement').modal('hide')
                                        window.location.href = '/crm/chantiers/'
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
        columnDefs: [
            {
                targets: 2,
                visible: false,
            },
            {orderable: false, targets: [0]},
        ],
        order: [[0, 'ASC']],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="7" class="bg-pri text-white">' + group + '</td>',
                )
            },
            dataSrc: 2,
        },
    })
})

/// CORBEILLE INTERVENANT
$(function () {
    $('#dataCORBINTERVE').DataTable({
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
                    if (false === $("input[class='CORBINTERVE']").prop('checked')) {
                        $("input[class='CORBINTERVE']").prop('checked', true)
                    } else {
                        $("input[class='CORBINTERVE']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa-redo fa-2x"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CORBINTERVE']:checked").each(function () {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'GET',
                                url: '/crm/intervenant/restaurer/' + id,
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
                    $("input:checkbox[class='CORBINTERVE']:checked").each(function () {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/intervenant/deldefinitive/' + id,
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
                text: '20',
                className: 'fred3',
                extend: 'pageLength',
                titleAttr: 'Nombre de pages',
            },
        ],
        columnDefs: [
            {
                targets: 2,
                visible: false,
            },
            {orderable: false, targets: [0]},
        ],
        order: [[0, 'ASC']],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="7" class="bg-pink text-white">' + group + '</td>',
                )
            },
            dataSrc: 2,
        },
    })
})

/// CHANTIERS INTERVENANT
$(function () {
    $('#dataINTERVE2').DataTable({
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
                    if (false === $("input[class='INTERVE2']").prop('checked')) {
                        $("input[class='INTERVE2']").prop('checked', true)
                    } else {
                        $("input[class='INTERVE2']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa fa-edit fa-2x"></i>',
                className: 'edit',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='INTERVE2']:checked").each(function () {
                        var id = $(this).val()
                        window.location.href =
                            '/crm/chantiers/intervenant/' + id
                    })
                },
                titleAttr: 'Modifier',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='INTERVE2']:checked").each(function () {
                        var idprojet = $('#idprojet').val()
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/intervenant/del/' + id,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '204') {
                                        $('#Traitement').modal('hide')
                                        location.reload()                                   }
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
        columnDefs: [
            {
                targets: 7,
                visible: false,
            },
            {orderable: false, targets: [0]},
        ],
        order: [[0, 'ASC']],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="8" class="col-blue bolo700" style="background-color: #dbdfef">' + group + '</td>',
                )
            },
            dataSrc: 7,
        },
    })
})
$(function () {
    $('#dataINTERVE3').DataTable({
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
                    if (false === $("input[class='INTERVE3']").prop('checked')) {
                        $("input[class='INTERVE3']").prop('checked', true)
                    } else {
                        $("input[class='INTERVE3']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa fa-edit fa-2x"></i>',
                className: 'edit',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='INTERVE3']:checked").each(function () {
                        var id = $(this).val()
                        window.location.href =
                            '/crm/chantiers/intervenant/' + id
                    })
                },
                titleAttr: 'Modifier',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='INTERVE3']:checked").each(function () {
                        var idprojet = $('#idprojet').val()
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/intervenant/del/' + id,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '204') {
                                        $('#Traitement').modal('hide')
                                        location.reload()                                   }
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
        columnDefs: [
            {
                targets: 7,
                visible: false,
            },
            {orderable: false, targets: [0]},
        ],
        order: [[0, 'ASC']],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="8" class="col-blue bolo700" style="background-color: #dbdfef">' + group + '</td>',
                )
            },
            dataSrc: 7,
        },
    })
})
$(function () {
    $('#dataOPER2').DataTable({
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
                    if (false === $("input[class='OPER2']").prop('checked')) {
                        $("input[class='OPER2']").prop('checked', true)
                    } else {
                        $("input[class='OPER2']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa fa-edit fa-2x"></i>',
                className: 'edit',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='OPER2']:checked").each(function () {
                        var id = $(this).val()
                        window.location.href =
                            '/crm/chantiers/intervenant/' + id
                    })
                },
                titleAttr: 'Modifier',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='OPER2']:checked").each(function () {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').off().on("click", function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/intervenant/del/' + id,
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
        columnDefs: [
            {
                targets: 6,
                visible: false,
            },
            {orderable: false, targets: [0]},
        ],
        order: [[0, 'ASC']],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="7" class="col-blue bolo700" style="background-color: #dbdfef">' + group + '</td>',
                )
            },
            dataSrc: 6,
        },
    })
})
$(function () {
    $('#dataOPER3').DataTable({
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
                    if (false === $("input[class='OPER3']").prop('checked')) {
                        $("input[class='OPER3']").prop('checked', true)
                    } else {
                        $("input[class='OPER3']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa fa-edit fa-2x"></i>',
                className: 'edit',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='OPER3']:checked").each(function () {
                        var id = $(this).val()
                        window.location.href =
                            '/crm/chantiers/intervenant/' + id
                    })
                },
                titleAttr: 'Modifier',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='OPER3']:checked").each(function () {
                        var idprojet = $('#idprojet').val()
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/intervenant/del/' + id,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '204') {
                                        $('#Traitement').modal('hide')
                                        location.reload()                                   }
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
        columnDefs: [
            {
                targets: 6,
                visible: false,
            },
            {orderable: false, targets: [0]},
        ],
        order: [[0, 'ASC']],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="7" class="col-blue bolo700" style="background-color: #dbdfef">' + group + '</td>',
                )
            },
            dataSrc: 6,
        },
    })
})

$(function () {
    $('#dataOPER').DataTable({
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
                    if (false === $("input[class='OPER']").prop('checked')) {
                        $("input[class='OPER']").prop('checked', true)
                    } else {
                        $("input[class='OPER']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa fa-edit fa-2x"></i>',
                className: 'edit',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='OPER']:checked").each(function () {
                        var idchantier = $('#idchantier').val()
                        var id = $(this).val()
                        window.location.href =
                            '/crm/chantier/intervenant/' + id + '/' + idchantier
                    })
                },
                titleAttr: 'Modifier',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='OPER']:checked").each(function () {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/intervenant/del/' + id,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '204') {
                                        $('#Traitement').modal('hide')
                                        location.reload()                                   }
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
        columnDefs: [
            {
                targets: 2,
                visible: false,
            },
            {orderable: false, targets: [0]},
        ],
        order: [[0, 'ASC']],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="7" class="col-deep-orange bolo700" style="background-color: #dbdfef">' + group + '</td>',
                )
            },
            dataSrc: 2,
        },
        "drawCallback": function (row, data, start, end, display) {
            const api = this.api();

            let facturer = api.column(3).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let decaisse = api.column(4).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let reste = api.column(5).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);


            api.column(3).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(facturer);
            api.column(4).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(decaisse);
            api.column(5).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(reste);

        }
    })
})
$(function () {
    $('#dataOPER1').DataTable({
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
                    if (false === $("input[class='OPER1']").prop('checked')) {
                        $("input[class='OPER1']").prop('checked', true)
                    } else {
                        $("input[class='OPER1']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa fa-edit fa-2x"></i>',
                className: 'edit',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='OPER1']:checked").each(function () {
                        var idchantier = $('#idchantier').val()
                        var id = $(this).val()
                        window.location.href =
                            '/crm/chantier/intervenant/' + id + '/' + idchantier
                    })
                },
                titleAttr: 'Modifier',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='OPER1']:checked").each(function () {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/intervenant/del/' + id,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '204') {
                                        $('#Traitement').modal('hide')
                                        location.reload()                                   }
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
        columnDefs: [
            {
                targets: 2,
                visible: false,
            },
            {orderable: false, targets: [0]},
        ],
        order: [[0, 'ASC']],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="7" class="col-blue bolo700" style="background-color: #dbdfef">' + group + '</td>',
                )
            },
            dataSrc: 2,
        },
        "drawCallback": function (row, data, start, end, display) {
            const api = this.api();

            let facturer = api.column(3).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let decaisse = api.column(4).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let reste = api.column(5).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);


            api.column(3).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(facturer);
            api.column(4).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(decaisse);
            api.column(5).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(reste);

        }
    })
})

/// FORMULAIRE AJOUTER UN INTERVENANT PROJET
$('#addInterve').off().on("click",function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addInterve').hide()
        $('#closeInterve').hide()
        $('#loadInterve').css('display', '')
        var id = $('#idchantier').val()
        $.ajax({
            type: 'POST',
            url: '/crm/intervenant/add/' + id,
            data: JSON.stringify($('#addInterveForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    location.reload()
                }
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})


/// FRAIS INTERVENANT PROJETS
$('#adderInterve').off().on("click",function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#adderInterve').hide()
        $('#closerInterve').hide()
        $('#loaderInterve').css('display', '')
        $.ajax({
            type: 'POST',
            url: '/crm/intervenant/frais/add',
            data: JSON.stringify($('#addInterveFraisForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    location.reload()
                }
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})

/// FRAIS INTERVENANT PROJETS
$('#adderIntervePersonnel').off().on("click",function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#adderIntervePersonnel').hide()
        $('#closerIntervePersonnel').hide()
        $('#loaderIntervePersonnel').css('display', '')
        $.ajax({
            type: 'POST',
            url: '/crm/intervenant/personnel/add',
            data: JSON.stringify($('#addIntervePersonnelForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    location.reload()
                }
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})

/// INTERVENANT chantiers
$('#addeInterve').off().on("click",function (event) {
    event.preventDefault()
    if ( $(this).closest('form').valid()) {
        $('#addeInterve').hide()
        $('#closeInterve').hide()
        $('#loadInterve').css('display', '')

        $.ajax({
            type: 'POST',
            url: '/crm/intervenant/adde',
            data: JSON.stringify($('#addInterveForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    location.reload()
                }
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})



/// FORMULAIRE MODIFIER UN INTERVENANT PROJET
$('#updateInterve').off().on("click", function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#updateInterve').hide()
        $('#closeInterve').hide()
        $('#loadInterve').css('display', '')

        var idinterve = $('#idinterve').val();
        var idchantier = $('#idchantier').val();
        var pager = $('#pager').val()

        $.ajax({
            type: 'PUT',
            url: '/crm/intervenant/update/' + idinterve,
            data: JSON.stringify($('#addInterveForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '200') {
                    $('#mdModalIntervenant').modal('toggle')
                    if(pager == 'chantiers'){
                        window.location.href = '/crm/chantiers/'
                    }
                    if(pager == 'chantier'){
                        window.location.href = '/crm/chantier/' + idchantier
                    }
                }
            },
            error: function (xhr, resp, text) {
                $('#modalInterve').modal('toggle')
                $('#ModalErrInterve').modal('show')
            },
        })
    }
})

/// FORMULAIRE MODIFIER UN INTERVENANT FRAIS
$('#updaterInterve').off().on("click",function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#updaterInterve').hide()
        $('#closerInterve').hide()
        $('#loaderInterve').css('display', '')
        var id = $('#idInterveFrais').val()
        $.ajax({
            type: 'PUT',
            url: '/crm/intervenant/update/frais/' + id,
            data: JSON.stringify($('#addInterveFraisForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '200') {
                    $('#mdModalInterveFrais').modal('toggle')
                    window.location.href = '/crm/projets/'
                }
            },
            error: function (xhr, resp, text) {
                $('#mdModalInterveFrais').modal('toggle')
                $('#ModalErreur').modal('show')
            },
        })
    }
})

/// FORMULAIRE DEPLACER UN INTERVENANT
$('#depIntervenant').off().on("click",function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#depIntervenant').hide()
        $('#closedepIntervenant').hide()
        $('#loaddepIntervenant').css('display', '')
        var id = $('#idprojet').val()
        $.ajax({
            type: 'POST',
            url: '/crm/intervenant/deplacer',
            data: JSON.stringify($('#deplacerInterveForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '200') {
                    $('#modalDeplacerInterve').modal('toggle')
                    window.location.href = '/crm/projet/' + id
                }
            },
            error: function (xhr, resp, text) {
                $('#modalDeplacerInterve').modal('toggle')
                $('#ModalErreur').modal('show')
            },
        })
    }
})


/// OPERATION chantiers
$('#addeOpere').off().on("click" , async function (event) {
    event.preventDefault();
    if ($(this).closest('form').valid()) {
        $('#addeOpere').hide()
        $('#closeOper').hide()
        $('#loadOper').css('display', '')

        $.ajax({
            type: 'POST',
            url: '/crm/intervenant/operation/add',
            data: JSON.stringify($('#addOperForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    location.reload()
                }
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#addOper').off().on("click",function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addOper').hide()
        $('#closeOper').hide()
        $('#loadOper').css('display', '')
        var id = $('#idchantier').val()
        $.ajax({
            type: 'POST',
            url: '/crm/intervenant/operation/add/' + id,
            data: JSON.stringify($('#addOperForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    location.reload()
                }
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})
/// FORMULAIRE MODIFIER UN INTERVENANT PROJET
$('#updateOper').off().on("click", function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#updateOper').hide()
        $('#closeOper').hide()
        $('#loadOper').css('display', '')

        var idinterne = $('#idinterne').val()
        var idchantier = $('#idchantier').val()
        var pager = $('#pager').val()

        $.ajax({
            type: 'PUT',
            url: '/crm/intervenant/operation/update/' + idinterne,
            data: JSON.stringify($('#addOperForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '200') {
                    $('#modalOperation').modal('toggle')
                    if(pager == 'chantiers'){
                        window.location.href = '/crm/chantiers/'
                    }
                    if(pager == 'chantier'){
                        window.location.href = '/crm/chantier/' + idchantier
                    }
                }
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})