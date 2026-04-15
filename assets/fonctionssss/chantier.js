import $ from 'jquery';
$(function () {
    $('#dataChantiers').DataTable({
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
            text: '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
            className: 'fred2',
            action: function (e, dt, node, config) {
                if (false === $("input[class='PROJY']").prop('checked')) {
                    $("input[class='PROJY']").prop('checked', true)
                } else {
                    $("input[class='PROJY']").prop('checked', false)
                }
            },
            titleAttr: 'Cocher tout /  Décocher tout',
        },
            {
                text: '<i class="fa fa fa-edit fa-2x"></i>',
                className: 'edit',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='PROJY']:checked").each(function () {
                        var idchantier = $(this).val()
                        window.location.href = '/crm/chantiers/' + idchantier
                    })
                },
                titleAttr: 'Modifier le chantier',
            },
            {
                text: '<i class="fa fa fa-archive fa-2x col-blue"></i>',
                className: 'fred',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='PROJY']:checked").each(function () {
                        var idchantier = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'GET',
                                url: '/crm/chantiers/archiver/' + idchantier,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '200') {
                                        $('#Traitement').modal('hide')
                                        window.location.href = '/crm/chantiers'
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
                titleAttr: 'Archiver',
            },
            {
                text: '<i class="fas fa-flag-checkered col-orange"/>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='PROJY']:checked").each(function () {
                        var idchantier = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'GET',
                                url: '/crm/chantiers/terminer/' + idchantier,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '200') {
                                        $('#Traitement').modal('hide')
                                        window.location.href = '/crm/chantiers'
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
                titleAttr: 'Clôturer',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='PROJY']:checked").each(function () {
                        var idchantier = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/chantiers/del/' + idchantier,
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
                text: '10',
                className: 'fred3',
                extend: 'pageLength',
            },
        ],

        columnDefs: [{
            targets: 3,
            visible: false,
        },
            {orderable: false, targets: [0]},
        ],
        order: [
            [3, 'asc']
        ],
        displayLength: 15,
        rowGroup: {
            dataSrc: 3,
            startRender: function (rows, group) {
                var solde = rows
                    .data()
                    .pluck(5)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var regle = rows
                    .data()
                    .pluck(4)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var valeur = rows
                    .data()
                    .pluck(2)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var depense = rows
                    .data()
                    .pluck(6)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var marge = rows
                    .data()
                    .pluck(7)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var balance = rows
                    .data()
                    .pluck(8)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                solde = $.fn.dataTable.render.number(' ', ',', 2, '').display(solde)
                regle = $.fn.dataTable.render.number(' ', ',', 2, '').display(regle)
                valeur = $.fn.dataTable.render.number(' ', ',', 2, '').display(valeur)
                depense = $.fn.dataTable.render.number(' ', ',', 2, '').display(depense)
                marge = $.fn.dataTable.render.number(' ', ',', 2, '').display(marge)
                balance = $.fn.dataTable.render.number(' ', ',', 2, '').display(balance)

                return $('<tr/>')
                    .append(
                        '<td style="text-align:right;background-color: #E91E63 !important; color:#FFFFFF !important; font-weight: 600 !important;"></td>',
                    )
                    .append(
                        '<td style="text-align:left;background-color: #E91E63 !important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        group +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        valeur +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        regle +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        solde +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        depense +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        marge +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        balance +
                        '</td>',
                    )

            },
        },

    })

    $('#dataChantiers').on( 'click', 'tbody td:not(:first-child)', function (e) {
        editor.inline( this, {
            submit: 'allIfChanged'
        } );
    } )
})

$(function () {
    $('#dataChantierSous').DataTable({
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
            text: '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
            className: 'fred2',
            action: function (e, dt, node, config) {
                if (false === $("input[class='PROJYS']").prop('checked')) {
                    $("input[class='PROJY']").prop('checked', true)
                } else {
                    $("input[class='PROJYS']").prop('checked', false)
                }
            },
            titleAttr: 'Cocher tout /  Décocher tout',
        },
            {
                text: '<i class="fa fa fa-edit fa-2x"></i>',
                className: 'edit',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='PROJYS']:checked").each(function () {
                        var idchantier = $(this).val()
                        window.location.href = '/crm/chantiers/' + idchantier
                    })
                },
                titleAttr: 'Modifier le chantier',
            },
            {
                text: '<i class="fa fa fa-archive fa-2x col-blue"></i>',
                className: 'fred',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='PROJYS']:checked").each(function () {
                        var idchantier = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'GET',
                                url: '/crm/chantiers/archiver/' + idchantier,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '200') {
                                        $('#Traitement').modal('hide')
                                        window.location.href = '/crm/chantiers'
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
                titleAttr: 'Archiver',
            },
            {
                text: '<i class="fas fa-flag-checkered col-orange"/>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='PROJYS']:checked").each(function () {
                        var idchantier = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'GET',
                                url: '/crm/chantiers/terminer/' + idchantier,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '200') {
                                        $('#Traitement').modal('hide')
                                        window.location.href = '/crm/chantiers'
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
                titleAttr: 'Clôturer',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='PROJYS']:checked").each(function () {
                        var idchantier = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/chantiers/del/' + idchantier,
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
                text: '10',
                className: 'fred3',
                extend: 'pageLength',
            },
        ],

        columnDefs: [{
            targets: 3,
            visible: false,
        },
            {orderable: false, targets: [0]},
        ],
        order: [
            [3, 'asc']
        ],
        displayLength: 15,
        rowGroup: {
            dataSrc: 3,
            startRender: function (rows, group) {
                var solde = rows
                    .data()
                    .pluck(5)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var regle = rows
                    .data()
                    .pluck(4)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var valeur = rows
                    .data()
                    .pluck(2)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var depense = rows
                    .data()
                    .pluck(6)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var marge = rows
                    .data()
                    .pluck(7)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var balance = rows
                    .data()
                    .pluck(8)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                solde = $.fn.dataTable.render.number(' ', ',', 2, '').display(solde)
                regle = $.fn.dataTable.render.number(' ', ',', 2, '').display(regle)
                valeur = $.fn.dataTable.render.number(' ', ',', 2, '').display(valeur)
                depense = $.fn.dataTable.render.number(' ', ',', 2, '').display(depense)
                marge = $.fn.dataTable.render.number(' ', ',', 2, '').display(marge)
                balance = $.fn.dataTable.render.number(' ', ',', 2, '').display(balance)

                return $('<tr/>')
                    .append(
                        '<td style="text-align:right;background-color:#FF9800!important; color:#FFFFFF !important; font-weight: 600 !important;"></td>',
                    )
                    .append(
                        '<td style="text-align:left;background-color:#FF9800!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        group +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        valeur +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        regle +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        solde +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        depense +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        marge +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        balance +
                        '</td>',
                    )

            },
        },

    })
})
$(function () {
    $('#dataCHANTIERSAR').DataTable({
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
            text: '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
            className: 'fred2',
            action: function (e, dt, node, config) {
                if (false === $("input[class='PROJY2']").prop('checked')) {
                    $("input[class='PROJY2']").prop('checked', true)
                } else {
                    $("input[class='PROJY2']").prop('checked', false)
                }
            },
            titleAttr: 'Cocher tout /  Décocher tout',
        },
            {
                text: '<i class="fa fa fa-edit fa-2x"></i>',
                className: 'edit',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='PROJY2']:checked").each(function () {
                        var idchantier = $(this).val()
                        window.location.href = '/crm/chantiers/' + idchantier
                    })
                },
                titleAttr: 'Modifier le chantier',
            },
            {
                text: '<i class="fa fa fa-reply fa-2x col-blue"></i>',
                className: 'fred',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='PROJY2']:checked").each(function () {
                        var idchantier = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'GET',
                                url: '/crm/chantiers/archiver/' + idchantier,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '200') {
                                        $('#Traitement').modal('hide')
                                        window.location.href = '/crm/chantiers'
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
                titleAttr: 'Relancer',
            },
            {
                text: '<i class="fas fa-flag-checkered col-orange"/>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='PROJY2']:checked").each(function () {
                        var idchantier = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'GET',
                                url: '/crm/chantiers/terminer/' + idchantier,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '200') {
                                        $('#Traitement').modal('hide')
                                        window.location.href = '/crm/chantiers'
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
                titleAttr: 'Clôturer',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='PROJY2']:checked").each(function () {
                        var idchantier = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/chantiers/del/' + idchantier,
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
                text: '10',
                className: 'fred3',
                extend: 'pageLength',
            },
        ],

        columnDefs: [{
            targets: 3,
            visible: false,
        },
            {orderable: false, targets: [0]},
        ],
        order: [
            [3, 'asc']
        ],
        displayLength: 15,
        rowGroup: {
            dataSrc: 3,
            startRender: function (rows, group) {
                var solde = rows
                    .data()
                    .pluck(5)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var regle = rows
                    .data()
                    .pluck(4)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var valeur = rows
                    .data()
                    .pluck(2)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var depense = rows
                    .data()
                    .pluck(6)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var marge = rows
                    .data()
                    .pluck(7)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var balance = rows
                    .data()
                    .pluck(8)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                solde = $.fn.dataTable.render.number(' ', ',', 2, '').display(solde)
                regle = $.fn.dataTable.render.number(' ', ',', 2, '').display(regle)
                valeur = $.fn.dataTable.render.number(' ', ',', 2, '').display(valeur)
                depense = $.fn.dataTable.render.number(' ', ',', 2, '').display(depense)
                marge = $.fn.dataTable.render.number(' ', ',', 2, '').display(marge)
                balance = $.fn.dataTable.render.number(' ', ',', 2, '').display(balance)

                return $('<tr/>')
                    .append(
                        '<td style="background-color:  #00BCD4!important;color:#FFFFFF !important; font-weight: 600 !important;"></td>',
                    )
                    .append(
                        '<td style="background-color:  #00BCD4!important;color:#FFFFFF !important; font-weight: 600 !important;">' +
                        group +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        valeur +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        regle +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        solde +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        depense +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        marge +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        balance +
                        '</td>',
                    )

            },
        },

    })
})
$(function () {
    $('#dataCHANTIERSTER').DataTable({
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
            text: '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
            className: 'fred2',
            action: function (e, dt, node, config) {
                if (false === $("input[class='PROJY3']").prop('checked')) {
                    $("input[class='PROJY3']").prop('checked', true)
                } else {
                    $("input[class='PROJY3']").prop('checked', false)
                }
            },
            titleAttr: 'Cocher tout /  Décocher tout',
        },
            {
                text: '<i class="fa fa fa-edit fa-2x"></i>',
                className: 'edit',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='PROJY3']:checked").each(function () {
                        var idchantier = $(this).val()
                        window.location.href = '/crm/chantiers/' + idchantier
                    })
                },
                titleAttr: 'Modifier le chantier',
            },
            {
                text: '<i class="fa fa fa-archive fa-2x col-blue"></i> / <i class="fa fa fa-reply fa-2x col-blue"></i> ',
                className: 'fred2',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='PROJY3']:checked").each(function () {
                        var idchantier = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'GET',
                                url: '/crm/chantiers/archiver/' + idchantier,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '200') {
                                        $('#Traitement').modal('hide')
                                        window.location.href = '/crm/chantiers'
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
                titleAttr: 'Archiver / relancer',
            },
            {
                text: '<i class="fas fa-flag-checkered col-orange"/>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='PROJY3']:checked").each(function () {
                        var idchantier = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'GET',
                                url: '/crm/chantiers/terminer/' + idchantier,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '200') {
                                        $('#Traitement').modal('hide')
                                        window.location.href = '/crm/chantiers'
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
                titleAttr: 'Clôturer',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='PROJY3']:checked").each(function () {
                        var idchantier = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/chantiers/del/' + idchantier,
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
                text: '10',
                className: 'fred3',
                extend: 'pageLength',
            },
        ],

        columnDefs: [{
            targets: 3,
            visible: false,
        },
            {orderable: false, targets: [0]},
        ],
        order: [
            [3, 'asc']
        ],
        displayLength: 15,
        rowGroup: {
            dataSrc: 3,
            startRender: function (rows, group) {
                var solde = rows
                    .data()
                    .pluck(5)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var regle = rows
                    .data()
                    .pluck(4)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var valeur = rows
                    .data()
                    .pluck(2)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var depense = rows
                    .data()
                    .pluck(6)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var marge = rows
                    .data()
                    .pluck(7)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var balance = rows
                    .data()
                    .pluck(8)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                solde = $.fn.dataTable.render.number(' ', ',', 2, '').display(solde)
                regle = $.fn.dataTable.render.number(' ', ',', 2, '').display(regle)
                valeur = $.fn.dataTable.render.number(' ', ',', 2, '').display(valeur)
                depense = $.fn.dataTable.render.number(' ', ',', 2, '').display(depense)
                marge = $.fn.dataTable.render.number(' ', ',', 2, '').display(marge)
                balance = $.fn.dataTable.render.number(' ', ',', 2, '').display(balance)

                return $('<tr/>')
                    .append(
                        '<td style="text-align:right;background-color: #E91E63 !important; color:#FFFFFF !important; font-weight: 600 !important;"></td>',
                    )
                    .append(
                        '<td style="text-align:left;background-color: #E91E63 !important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        group +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        valeur +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        regle +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        solde +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        depense +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        marge +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        balance +
                        '</td>',
                    )

            },
        },

    })
})
$(function () {
    $('#dataLISTECHANTIERS').DataTable({
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
                text: '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
                className: 'fred2',
                action: function (e, dt, node, config) {
                    if (false === $("input[class='TECHPRO']").prop('checked')) {
                        $("input[class='TECHPRO']").prop('checked', true)
                    } else {
                        $("input[class='TECHPRO']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa fa-edit fa-2x"></i>',
                className: 'edit',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='TECHPRO']:checked").each(function () {
                        var id = $(this).val()
                        window.location.href = '/crm/technique/' + id
                    })
                },
                titleAttr: 'Modifier le chantier',
            },
            {
                text: '<i class="fa fa fa-archive fa-2x"></i>',
                className: 'fred',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='TECHPRO']:checked").each(function () {
                        var idchantier = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'GET',
                                url: '/crm/chantiers/archiver/' + idchantier,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '200') {
                                        $('#Traitement').modal('hide')
                                        if (pager === 'chantiers') {
                                            window.location.href = '/crm/chantiers'
                                        } else {
                                            window.location.href = '/crm/technique'
                                        }
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
                titleAttr: 'Archiver',
            },
            {
                text: '<i class="fas fa-flag-checkered col-orange"/>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='TECHPRO']:checked").each(function () {
                        var idchantier = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'GET',
                                url: '/crm/chantiers/terminer/' + idchantier,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '200') {
                                        $('#Traitement').modal('hide')
                                        if (pager === 'chantiers') {
                                            window.location.href = '/crm/chantiers'
                                        } else {
                                            window.location.href = '/crm/technique'
                                        }
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
                titleAttr: 'Clôturer',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='TECHPRO']:checked").each(function () {
                        var idchantier = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/chantiers/del/' + idchantier,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '204') {
                                        $('#Traitement').modal('hide')
                                        if (pager === 'chantiers') {
                                            window.location.href = '/crm/chantiers'
                                        } else {
                                            window.location.href = '/crm/technique'
                                        }
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
                titleAttr: 'Nombre de ligne',
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
                    '<td colspan="8" class="col-pink bolo700" style="background-color: #dbdfef">' + group + '</td>',
                )
            },
            dataSrc: 2,
        },
    })
})
$(function () {
    $('#dataLISTECHANTIERS2').DataTable({
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
                text: '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
                className: 'fred2',
                action: function (e, dt, node, config) {
                    if (false === $("input[class='TECHPRO2']").prop('checked')) {
                        $("input[class='TECHPRO2']").prop('checked', true)
                    } else {
                        $("input[class='TECHPRO2']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa fa-edit fa-2x"></i>',
                className: 'edit',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='TECHPRO2']:checked").each(function () {
                        var id = $(this).val()
                        window.location.href = '/crm/technique/' + id
                    })
                },
                titleAttr: 'Modifier le chantier',
            },
            {
                text: '<i class="fa fa fa-archive fa-2x"></i>',
                className: 'fred',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='TECHPRO2']:checked").each(function () {
                        var idchantier = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'GET',
                                url: '/crm/chantiers/archiver/' + idchantier,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '200') {
                                        $('#Traitement').modal('hide')
                                        if (pager === 'chantiers') {
                                            window.location.href = '/crm/chantiers'
                                        } else {
                                            window.location.href = '/crm/technique'
                                        }
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
                titleAttr: 'Archiver',
            },
            {
                text: '<i class="fas fa-flag-checkered col-orange"/>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='TECHPRO2']:checked").each(function () {
                        var idchantier = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'GET',
                                url: '/crm/chantiers/terminer/' + idchantier,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '200') {
                                        $('#Traitement').modal('hide')
                                        if (pager === 'chantiers') {
                                            window.location.href = '/crm/chantiers'
                                        } else {
                                            window.location.href = '/crm/technique'
                                        }
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
                titleAttr: 'Clôturer',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='TECHPRO2']:checked").each(function () {
                        var idchantier = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/chantiers/del/' + idchantier,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '204') {
                                        $('#Traitement').modal('hide')
                                        if (pager === 'chantiers') {
                                            window.location.href = '/crm/chantiers'
                                        } else {
                                            window.location.href = '/crm/technique'
                                        }
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
                titleAttr: 'Nombre de ligne',
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
                    '<td colspan="8" class="col-pink bolo700" style="background-color: #dbdfef">' + group + '</td>',
                )
            },
            dataSrc: 2,
        },
    })
})
$(function (){
    $('#dataLISTECHANTIERS3').DataTable({
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
                text: '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
                className: 'fred2',
                action: function (e, dt, node, config) {
                    if (false === $("input[class='TECHPRO3']").prop('checked')) {
                        $("input[class='TECHPRO3']").prop('checked', true)
                    } else {
                        $("input[class='TECHPRO3']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa fa-edit fa-2x"></i>',
                className: 'edit',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='TECHPRO3']:checked").each(function () {
                        var id = $(this).val()
                        window.location.href = '/crm/technique/' + id
                    })
                },
                titleAttr: 'Modifier le chantier',
            },
            {
                text: '<i class="fa fa fa-archive fa-2x"></i>',
                className: 'fred',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='TECHPRO3']:checked").each(function () {
                        var idchantier = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'GET',
                                url: '/crm/chantiers/archiver/' + idchantier,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '200') {
                                        $('#Traitement').modal('hide')
                                        if (pager === 'chantiers') {
                                            window.location.href = '/crm/chantiers'
                                        } else {
                                            window.location.href = '/crm/technique'
                                        }
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
                titleAttr: 'Relancer',
            },
            {
                text: '<i class="fas fa-flag-checkered col-orange"/>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='TECHPRO3']:checked").each(function () {
                        var idchantier = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'GET',
                                url: '/crm/chantiers/terminer/' + idchantier,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '200') {
                                        $('#Traitement').modal('hide')
                                        if (pager === 'chantiers') {
                                            window.location.href = '/crm/chantiers'
                                        } else {
                                            window.location.href = '/crm/technique'
                                        }
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
                titleAttr: 'Clôturer',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='TECHPRO3']:checked").each(function () {
                        var idchantier = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/chantiers/del/' + idchantier,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '204') {
                                        $('#Traitement').modal('hide')
                                        if (pager === 'chantiers') {
                                            window.location.href = '/crm/chantiers'
                                        } else {
                                            window.location.href = '/crm/technique'
                                        }
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
                titleAttr: 'Nombre de ligne',
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
                    '<td colspan="8" class="col-pink bolo700" style="background-color: #dbdfef">' + group + '</td>',
                )
            },
            dataSrc: 2,
        },
    })
})
$(function () {
    $('#dataLISTECHANTIERS4').DataTable({
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
                text: '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
                className: 'fred2',
                action: function (e, dt, node, config) {
                    if (false === $("input[class='TECHPRO4']").prop('checked')) {
                        $("input[class='TECHPRO4']").prop('checked', true)
                    } else {
                        $("input[class='TECHPRO4']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa fa-edit fa-2x"></i>',
                className: 'edit',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='TECHPRO4']:checked").each(function () {
                        var id = $(this).val()
                        window.location.href = '/crm/technique/' + id
                    })
                },
                titleAttr: 'Modifier le chantier',
            },
            {
                text: '<i class="fa fa fa-archive fa-2x"></i>',
                className: 'fred',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='TECHPRO4']:checked").each(function () {
                        var idchantier = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'GET',
                                url: '/crm/chantiers/archiver/' + idchantier,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '200') {
                                        $('#Traitement').modal('hide')
                                        if (pager === 'chantiers') {
                                            window.location.href = '/crm/chantiers'
                                        } else {
                                            window.location.href = '/crm/technique'
                                        }
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
                titleAttr: 'Archiver',
            },
            {
                text: '<i class="fas fa-flag-checkered col-orange"/>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='TECHPRO4']:checked").each(function () {
                        var idchantier = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'GET',
                                url: '/crm/chantiers/terminer/' + idchantier,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '200') {
                                        $('#Traitement').modal('hide')
                                        if (pager === 'chantiers') {
                                            window.location.href = '/crm/chantiers'
                                        } else {
                                            window.location.href = '/crm/technique'
                                        }
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
                titleAttr: 'Clôturer',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='TECHPRO4']:checked").each(function () {
                        var idchantier = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/chantiers/del/' + idchantier,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '204') {
                                        $('#Traitement').modal('hide')
                                        if (pager === 'chantiers') {
                                            window.location.href = '/crm/chantiers'
                                        } else {
                                            window.location.href = '/crm/technique'
                                        }
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
                titleAttr: 'Nombre de ligne',
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
                    '<td colspan="8" class="col-pink bolo700" style="background-color: #dbdfef">' + group + '</td>',
                )
            },
            dataSrc: 2,
        },
    })
})

$(function () {
    $('#dataCHANTIERSUP').DataTable({
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
                    if (false === $("input[class='PROJSUP']").prop('checked')) {
                        $("input[class='PROJSUP']").prop('checked', true)
                    } else {
                        $("input[class='PROJSUP']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa-redo fa-2x"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='PROJSUP']:checked").each(function () {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'GET',
                                url: '/crm/chantiers/restaurer/' + id,
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
                    $("input:checkbox[class='PROJSUP']:checked").each(function () {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/chantiers/deldefinitive/' + id,
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
        columnDefs: [
            {
                targets: 3,
                visible: false,
            },
            {orderable: false, targets: [0]},
        ],
        order: [[3, 'asc']],
        displayLength: 10,
        rowGroup: {
            startRender: function (rows, group) {
                var solde = rows
                    .data()
                    .pluck(5)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var regle = rows
                    .data()
                    .pluck(4)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var valeur = rows
                    .data()
                    .pluck(2)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var depense = rows
                    .data()
                    .pluck(6)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var marge = rows
                    .data()
                    .pluck(7)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var res = rows.data().pluck(8)

                solde = $.fn.dataTable.render.number(' ', ',', 2, '').display(solde)
                regle = $.fn.dataTable.render.number(' ', ',', 2, '').display(regle)
                valeur = $.fn.dataTable.render.number(' ', ',', 2, '').display(valeur)
                depense = $.fn.dataTable.render.number(' ', ',', 2, '').display(depense)
                marge = $.fn.dataTable.render.number(' ', ',', 2, '').display(marge)

                return $('<tr/>')
                    .append(
                        '<td style="background-color:#E91E63!important;color:#FFFFFF !important; font-weight: 600 !important;"></td>',
                    )
                    .append(
                        '<td style="background-color:#E91E63!important;color:#FFFFFF !important; font-weight: 600 !important;">' +
                        group +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        valeur +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        regle +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        solde +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        depense +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        marge +
                        '</td>',
                    )
            },
            dataSrc: 3,
        },
    })
})

$('#addRecap').on("click", function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#closeRecap').hide()
        $('#addRecap').hide()
        $('#loadRecap').css('display', '')
        var id = $('#idchantier').val()
        $.ajax({
            type: 'POST',
            url: '/crm/chantier/recap/add/' + id,
            data: JSON.stringify($('#addRecapForm').serializeObject()),
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
$('#addChantier').on("click",function (event) {
    event.preventDefault()
    if($(this).closest('form').valid()) {
        $('#divChantier').hide()
        $('#loadChantier').css('display', '')
        $('#description').val(CKEDITOR.instances['description'].getData())
        $.ajax({
            type: 'POST',
            url: '/crm/chantiers/add',
            data: JSON.stringify($('#addChantierForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#modalChantier').modal('toggle')
                    location.reload()
                }
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})
if ($("#idchantier").val()) {
    $('#modalChantier').modal('show');
}
$('#addReglementChantiers').on("click",function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addReglementChantiers').hide()
        $('#closeReglement').hide()
        $('#loadReglement').css('display', '')
        $.ajax({
            type: 'POST',
            url: '/crm/chantiers/reglement/chantiers/add',
            data: JSON.stringify($('#addReglementForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#modalReglement').modal('toggle')
                    window.location.href = '/crm/client/' + respdata['result'];
                }
            },
            error: function (xhr, resp, text) {
                $('#modalReglement').modal('toggle')
                $('#ModalErreur').modal('show')
                $('#addReglementChantiers').show()
                $('#closeReglement').show()
                $('#loadReglement').css('display', 'none')
            },
        })
    }
})
$('#updateChantier').on("click",function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#divChantier').hide()
        $('#loadChantier').css('display', '')
        const id = $('#idchantier').val();
        const pager = $('#pager').val();
        $('#description').val(CKEDITOR.instances['description'].getData())
        $.ajax({
            type: 'PUT',
            url: '/crm/chantiers/update/' + id,
            data: JSON.stringify($('#addChantierForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                $('#modalChantier').modal('toggle')
                if (pager === 'chantiers') {
                    window.location.href = '/crm/chantiers'
                }else{
                    window.location.href = '/crm/techniques'
                }
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#updateChan').on("click", function (event) {
    event.preventDefault()
    if($(this).closest('form').valid()) {
        $('#divChantier').hide()
        $('#loadChantier').css('display', '')
        var id = $('#idchantier').val()
        $('#description').val(CKEDITOR.instances['description'].getData())
        $.ajax({
            type: 'PUT',
            url: '/crm/chantiers/updatechantier/' + id,
            data: JSON.stringify($('#addChantierForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '200') {
                    $('#modalChantier').modal('toggle')
                    window.location.href = '/crm/chantier/' + id
                }
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})

$('#vclient').on('change', function() {
    $.ajax({
        type: 'POST',
        url: '/crm/chantiers/getcontact/' + this.value,
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function (respdata, textStatus, jqXHR) {
            if (jqXHR.status == '200') {
                document.getElementById('refcon').innerHTML = ' '
            }
        },
        error: function (xhr, resp, text) {
            $('#ModalErreur').modal('show')
        },
    })
});