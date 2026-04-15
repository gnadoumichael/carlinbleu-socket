import $ from 'jquery';

$('#addBon').on("click", function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addBon').hide()
        $('#closeBon').hide()
        $('#closeneBon').hide()
        $('#loadneBon').css('display', '')
        $('#loadBon').css('display', '')
        var idchantier = $('#idchantier').val()
        $('#editor7').val(CKEDITOR.instances['editor7'].getData())
        $('#editor6').val(CKEDITOR.instances['editor6'].getData())
        $.ajax({
            type: 'POST',
            url: '/crm/bon/add/' + idchantier,
            data: JSON.stringify($('#addBonForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#mdModalBon').modal('toggle')
                    window.location.href = '/crm/bon/' + respdata['result'] + '/' + idchantier
                }
            },
            error: function (xhr, resp, text) {
                $('#mdModalBon').modal('toggle')
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#addeBon').on("click", function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addeBon').hide()
        $('#closeBon').hide()
        $('#loadBon').css('display', '')
        $('#editor7').val(CKEDITOR.instances['editor7'].getData())
        $('#editor8').val(CKEDITOR.instances['editor8'].getData())
        $.ajax({
            type: 'POST',
            url: '/crm/bon/adde',
            data: JSON.stringify($('#addBonForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#mdModalBon').modal('toggle')
                    window.location.href =
                        '/crm/bon/' +
                        respdata['result'][0]['numbon'] +
                        '/' +
                        respdata['result'][0]['idchantier']
                }
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#updateBon').on("click", function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#updateBon').hide()
        $('#closeBon').hide()
        $('#loadBon').css('display', '')
        var idbon = $('#idbon').val()
        $('#editor1').val(CKEDITOR.instances['editor1'].getData())
        $('#editor2').val(CKEDITOR.instances['editor2'].getData())
        $.ajax({
            type: 'PUT',
            url: '/crm/bon/update/' + idbon,
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
$('#addDeplacerBon').on("click" ,function (event) {
    event.preventDefault()
    var id = $('#idbon').val()
    var idchantier = $('#deplacerBon').val()
    $('#addDeplacerBon').hide()
    $('#closeDeplacer').hide()
    $('#loadDeplacer').css('display', '')
    $.ajax({
        type: 'GET',
        url: '/crm/bon/deplacer/' + id + '/' + idchantier,
        success: function (respdata, textStatus, jqXHR) {
            if (jqXHR.status == '200') {
                window.location.href = '/crm/projet/' + idprojet
            }
        },
        error: function (xhr, resp, text) {
            $('#ModalErreur').modal('show')
        },
    })
})

/// FORMULAIRE VALIDER UN BON
$('#valideBon').on("click", function (event) {
    event.preventDefault()
    var idbon = $('#idbon').val()
    $('#sideModalTR').modal('toggle')
    $('#Traitement').modal('show')
    $.ajax({
        type: 'GET',
        url: '/crm/bon/valider/' + idbon,
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
$('#devabon').on("click", function (event) {
    event.preventDefault()
    var idbon = $('#idbon').val()
    $('#ConfirmDelete').modal('show')
    $('#accept').click(function () {
        $('#ConfirmDelete').modal('hide')
        $('#Traitement').modal('show')
        $.ajax({
            type: 'GET',
            url: '/crm/bon/devalider/' + idbon,
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

/// FORMULAIRE POUR DUPLIQUER BON
$('#addBonDupliquer').on("click", function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addBonDupliquer').hide()
        $('#closeBonDupliquer').hide()
        $('#loadBonDupliquer').css('display', '')
        var id = $('#idprojet').val()
        var idbon = $('#idbon').val()
        $.ajax({
            type: 'POST',
            url: '/crm/bon/dupliquer/' + idbon,
            data: JSON.stringify($('#form6').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '200') {
                    $('#modalDupliquer').modal('toggle')
                    window.location.href = '/crm/bon/' + respdata['result'] + '/' + id
                }
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})

$(function () {
    $('#dataBON').DataTable({
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
                    if (false === $("input[class='BONNS']").prop('checked')) {
                        $("input[class='BONNS']").prop('checked', true)
                    } else {
                        $("input[class='BONNS']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<span class="badge badge-pill badge-blue-grey">V</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='BONNS']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/bon/devalider/' + idbon,
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
                    $("input:checkbox[class='BONNS']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/non'
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
                    $("input:checkbox[class='BONNS']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/oui'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'BON DE COMMANDE EN PDF',
            },
            {
                text: '<i class="fa fa fa-file-word fa-2x col-blue"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='BONNS']:checked").each(function () {
                        var idbon = $(this).val()
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/oui'
                    })
                },
                titleAttr: 'BON DE COMMANDE EN WORD',
            },
            {
                text: '<i class="fa fa fa-file-excel fa-2x col-light-green"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='BONNS']:checked").each(function () {
                        var idbon = $(this).val()
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/oui'
                    })
                },
                titleAttr: 'BON DE COMMANDE EN EXCEL',
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
        columnDefs: [
            {
                targets: 8,
                visible: false,
            },
            {orderable: false, targets: [0]},
            {orderable: false, targets: [1]},
        ],
        order: [[2, 'DESC']],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="9" class="col-blue bolo700" style="background-color: #dbdfef">' +
                    group +
                    '</td>',
                )
            },
            dataSrc: 8,
        },
    })
})
$(function () {
    $('#dataBON2').DataTable({
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
                    if (false === $("input[class='BONNS2']").prop('checked')) {
                        $("input[class='BONNS2']").prop('checked', true)
                    } else {
                        $("input[class='BONNS2']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<span class="badge badge-pill bg-blue">V</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='BONNS2']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/bon/valider/' + idbon,
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
                    $("input:checkbox[class='BONNS2']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/bon/del/' + idbon,
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
                    $("input:checkbox[class='BONNS2']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/non'
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
                    $("input:checkbox[class='BONNS2']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/oui'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'BON DE COMMANDE EN PDF',
            },
            {
                text: '<i class="fa fa fa-file-word fa-2x col-blue"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='BONNS2']:checked").each(function () {
                        var idbon = $(this).val()
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/oui'
                    })
                },
                titleAttr: 'BON DE COMMANDE EN WORD',
            },
            {
                text: '<i class="fa fa fa-file-excel fa-2x col-light-green"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='BONNS2']:checked").each(function () {
                        var idbon = $(this).val()
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/oui'
                    })
                },
                titleAttr: 'BON DE COMMANDE EN EXCEL',
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
        columnDefs: [
            {
                targets: 8,
                visible: false,
            },
            {orderable: true, targets: [2]},
        ],
        order: [[2, 'DESC']],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="9" class="col-blue bolo700" style="background-color: #dbdfef">' +
                    group +
                    '</td>',
                )
            },
            dataSrc: 8,
        },
    })
})
$(function () {
    $('#dataBON3').DataTable({
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
                    if (false === $("input[class='BONNS3']").prop('checked')) {
                        $("input[class='BONNS3']").prop('checked', true)
                    } else {
                        $("input[class='BONNS3']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<span class="badge badge-pill bg-blue">V</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='BONNS3']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/bon/valider/' + idbon,
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
                    $("input:checkbox[class='BONNS3']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/bon/devalider/' + idbon,
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
                    $("input:checkbox[class='BONNS3']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/bon/del/' + idbon,
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
                    $("input:checkbox[class='BONNS3']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/non'
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
                    $("input:checkbox[class='BONNS3']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/oui'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'BON DE COMMANDE EN PDF',
            },
            {
                text: '<i class="fa fa fa-file-word fa-2x col-blue"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='BONNS3']:checked").each(function () {
                        var idbon = $(this).val()
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/oui'
                    })
                },
                titleAttr: 'BON DE COMMANDE EN WORD',
            },
            {
                text: '<i class="fa fa fa-file-excel fa-2x col-light-green"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='BONNS3']:checked").each(function () {
                        var idbon = $(this).val()
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/oui'
                    })
                },
                titleAttr: 'BON DE COMMANDE EN EXCEL',
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
        columnDefs: [
            {
                targets: 8,
                visible: false,
            },
            {orderable: true, targets: [2]},
            {orderable: false, targets: [0]},
            {orderable: false, targets: [1]},
        ],
        order: [[8, 'asc']],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="10" class="col-blue bolo700" style="background-color: #dbdfef">' + group + '</td>',
                )
            },
            dataSrc: 8,
        },
    })
})
$(function () {
    $('#dataBON4').DataTable({
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
                    if (false === $("input[class='BONNS4']").prop('checked')) {
                        $("input[class='BONNS4']").prop('checked', true)
                    } else {
                        $("input[class='BONNS4']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<span class="badge badge-pill bg-blue">V</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='BONNS4']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/bon/valider/' + idbon,
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
                text: '<i class="fa fa-spinner fa-2x"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='BONNS4']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/bon/status/' + id + '/1',
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
                },
                titleAttr: 'Bons en attente',
            },
            {
                text: '<i class="fa fa-check fa-2x"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='BONNS4']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/bon/status/' + id + '/2',
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
                },
                titleAttr: 'Bons confirmés',
            },
            {
                text: '<i class="fa fa-truck fa-2x"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='BONNS4']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/bon/status/' + id + '/3',
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
                },
                titleAttr: 'Bons livrés',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='BONNS4']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/bon/del/' + idbon,
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
                    $("input:checkbox[class='BONNS4']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/non'
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
                    $("input:checkbox[class='BONNS4']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/oui'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'BON DE COMMANDE EN PDF',
            },
            {
                text: '<i class="fa fa fa-file-word fa-2x col-blue"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='BONNS4']:checked").each(function () {
                        var idbon = $(this).val()
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/oui'
                    })
                },
                titleAttr: 'BON DE COMMANDE EN WORD',
            },
            {
                text: '<i class="fa fa fa-file-excel fa-2x col-light-green"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='BONNS4']:checked").each(function () {
                        var idbon = $(this).val()
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/oui'
                    })
                },
                titleAttr: 'BON DE COMMANDE EN EXCEL',
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
        columnDefs: [
            {targets: 8, visible: false,},
            {orderable: true, targets: [2]},
        ],
        order: [[8, 'asc']],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="10" class="col-blue bolo700" style="background-color: #dbdfef">' + group + '</td>',
                )
            },
            dataSrc: 8,
        },
    })
})
$(function () {
    $('#dataBON5').DataTable({
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
                    if (false === $("input[class='BONNS5']").prop('checked')) {
                        $("input[class='BONNS5']").prop('checked', true)
                    } else {
                        $("input[class='BONNS5']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<span class="badge badge-pill bg-blue">V</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='BONNS5']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/bon/valider/' + idbon,
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
                text: '<i class="fa fa-check fa-2x"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='BONNS5']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/bon/status/' + id + '/2',
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
                },
                titleAttr: 'Bons confirmés',
            },
            {
                text: '<i class="fa fa-truck fa-2x"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='BONNS5']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/bon/status/' + id + '/3',
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
                },
                titleAttr: 'Bons livrés',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='BONNS5']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/bon/del/' + idbon,
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
                    $("input:checkbox[class='BONNS5']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/non'
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
                    $("input:checkbox[class='BONNS5']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/oui'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'BON DE COMMANDE EN PDF',
            },
            {
                text: '<i class="fa fa fa-file-excel fa-2x col-light-green"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='BONNS5']:checked").each(function () {
                        var idbon = $(this).val()
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/oui'
                    })
                },
                titleAttr: 'BON DE COMMANDE EN EXCEL',
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
        columnDefs: [
            {targets: 8, visible: false},
            {orderable: true, targets: [2]},
            {orderable: false, targets: [0]},
            {orderable: false, targets: [1]},
        ],
        order: [[8, 'asc']],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="10" class="col-blue bolo700" style="background-color: #dbdfef">' + group +   '</td>',
                )
            },
            dataSrc: 8,
        },
    })
})
$(function () {
    $('#dataBON6').DataTable({
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
                    if (false === $("input[class='BONNS6']").prop('checked')) {
                        $("input[class='BONNS6']").prop('checked', true)
                    } else {
                        $("input[class='BONNS6']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<span class="badge badge-pill bg-blue">V</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='BONNS6']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/bon/valider/' + idbon,
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
                text: '<i class="fa fa-spinner fa-2x"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='BONNS6']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/bon/status/' + id + '/1',
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
                },
                titleAttr: 'Bons en attente',
            },
            {
                text: '<i class="fa fa-truck fa-2x"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='BONNS6']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/bon/status/' + id + '/3',
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
                },
                titleAttr: 'Bons livrés',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='BONNS6']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/bon/del/' + idbon,
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
                    $("input:checkbox[class='BONNS6']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/non'
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
                    $("input:checkbox[class='BONNS6']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/oui'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'BON DE COMMANDE EN PDF',
            },
            {
                text: '<i class="fa fa fa-file-excel fa-2x col-light-green"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='BONNS6']:checked").each(function () {
                        var idbon = $(this).val()
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/oui'
                    })
                },
                titleAttr: 'BON DE COMMANDE EN EXCEL',
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
        columnDefs: [
            {targets: 8, visible: false},
            {orderable: true, targets: [2]},
            {orderable: false, targets: [0]},
            {orderable: false, targets: [1]},
        ],
        order: [[8, 'asc']],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="10" class="col-blue bolo700" style="background-color: #dbdfef">' + group +   '</td>',
                )
            },
            dataSrc: 8,
        },
    })
})
$(function () {
    $('#dataBON7').DataTable({
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
                    if (false === $("input[class='BONNS7']").prop('checked')) {
                        $("input[class='BONNS7']").prop('checked', true)
                    } else {
                        $("input[class='BONNS7']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<span class="badge badge-pill bg-blue">V</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='BONNS7']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/bon/valider/' + idbon,
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
                text: '<i class="fa fa-spinner fa-2x"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='BONNS7']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/bon/status/' + id + '/1',
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
                },
                titleAttr: 'Bons en attente',
            },
            {
                text: '<i class="fa fa-check fa-2x"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='BONNS7']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/bon/status/' + id + '/2',
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
                },
                titleAttr: 'Bons confirmés',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='BONNS7']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/bon/del/' + idbon,
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
                    $("input:checkbox[class='BONNS7']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/non'
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
                    $("input:checkbox[class='BONNS7']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/oui'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'BON DE COMMANDE EN PDF',
            },
            {
                text: '<i class="fa fa fa-file-excel fa-2x col-light-green"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='BONNS7']:checked").each(function () {
                        var idbon = $(this).val()
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/oui'
                    })
                },
                titleAttr: 'BON DE COMMANDE EN EXCEL',
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
        columnDefs: [
            {
                targets: 8,
                visible: false,
            },
            {orderable: true, targets: [2]},
            {orderable: false, targets: [0]},
            {orderable: false, targets: [1]},
        ],
        order: [[8, 'asc']],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="10" class="col-blue bolo700" style="background-color: #dbdfef">' + group +   '</td>',
                )
            },
            dataSrc: 8,
        },
    })
})


// CORBEILLES BON
$(function () {
    $('#dataCORBBON').DataTable({
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
                    if (false === $("input[class='CORBBON']").prop('checked')) {
                        $("input[class='CORBBON']").prop('checked', true)
                    } else {
                        $("input[class='CORB']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa-redo fa-2x"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CORBBON']:checked").each(function () {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'GET',
                                url: '/crm/bon/restaurer/' + id,
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
                    $("input:checkbox[class='CORBBON']:checked").each(function () {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/bon/deldefinitive/' + id,
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
                targets: 7,
                visible: false,
            },
            {orderable: false, targets: [0]},
        ],
        order: [
            [1, 'ASC'],
            [7, 'ASC'],
        ],
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="8" class="bg-gray-300 col-pink">' + group + '</td>',
                )
            },
            dataSrc: 7,
        },
    })
})

$('#bonchan').on('change', function() {

    $(".cocon").empty();
    $(".codev").empty();
    $(".codev").append('<span class="col-pink">Chargement des devis</span> <img src="/img/loading.gif" style="width: 20px">');
    $(".cocon").append('<span class="col-pink">Chargement des contacts</span> <img src="/img/loading.gif" style="width: 20px">');

    $.ajax({
        type: 'POST',
        url: '/crm/devis/devischantier/' + this.value,
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function (respdata, textStatus, jqXHR) {

            $("#bondevis").empty();
            $(respdata).each(function(i){
                $("#bondevis").append('<option class="supper" value='+respdata[i].id+'>DEVIS N° '+respdata[i].iddevis+'</option>')
            });
            $(".codev").empty();
            $(".codev").append('<span class="col-green">Devis chargés <i class="fa fa-check-circle fa-1x"></i></span>');
        },
        error: function (xhr, resp, text) {},
    })

    $.ajax({
        type: 'GET',
        url: '/crm/chantiers/getcontact/' + this.value,
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function (respdata, textStatus, jqXHR) {

            $("#comcon").empty();
            $(respdata).each(function(i){
                $("#comcon").append('<option class="supper" value='+respdata[i].id+'>'+respdata[i].contact+'</option>')
            });
            $(".cocon").empty();
            $(".cocon").append('<span class="col-green">Contacts chargés <i class="fa fa-check-circle fa-1x"></i></span>');
        },
        error: function (xhr, resp, text) {},
    })

});


$(function () {
    $('#dataLIV').DataTable({
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
                    if (false === $("input[class='LIV']").prop('checked')) {
                        $("input[class='LIV']").prop('checked', true)
                    } else {
                        $("input[class='LIV']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<span class="badge badge-pill badge-blue-grey">V</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='LIV']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/bon/devalider/' + idbon,
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
                    $("input:checkbox[class='LIV']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/non'
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
                    $("input:checkbox[class='LIV']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/oui'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'BON DE COMMANDE EN PDF',
            },
            {
                text: '<i class="fa fa fa-file-word fa-2x col-blue"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='LIV']:checked").each(function () {
                        var idbon = $(this).val()
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/oui'
                    })
                },
                titleAttr: 'BON DE COMMANDE EN WORD',
            },
            {
                text: '<i class="fa fa fa-file-excel fa-2x col-light-green"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='LIV']:checked").each(function () {
                        var idbon = $(this).val()
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/oui'
                    })
                },
                titleAttr: 'BON DE COMMANDE EN EXCEL',
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
        columnDefs: [
            {
                targets: 8,
                visible: false,
            },
            {orderable: false, targets: [0]},
            {orderable: false, targets: [1]},
        ],
        order: [[2, 'DESC']],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="9" class="col-blue bolo700" style="background-color: #dbdfef">' +
                    group +
                    '</td>',
                )
            },
            dataSrc: 8,
        },
    })
})
$(function () {
    $('#dataLIV2').DataTable({
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
                    if (false === $("input[class='LIV2']").prop('checked')) {
                        $("input[class='LIV2']").prop('checked', true)
                    } else {
                        $("input[class='LIV2']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<span class="badge badge-pill bg-blue">V</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='LIV2']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/bon/valider/' + idbon,
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
                    $("input:checkbox[class='LIV2']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/bon/del/' + idbon,
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
                    $("input:checkbox[class='LIV2']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/non'
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
                    $("input:checkbox[class='LIV2']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/oui'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'BON DE COMMANDE EN PDF',
            },
            {
                text: '<i class="fa fa fa-file-word fa-2x col-blue"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='LIV2']:checked").each(function () {
                        var idbon = $(this).val()
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/oui'
                    })
                },
                titleAttr: 'BON DE COMMANDE EN WORD',
            },
            {
                text: '<i class="fa fa fa-file-excel fa-2x col-light-green"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='LIV2']:checked").each(function () {
                        var idbon = $(this).val()
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/oui'
                    })
                },
                titleAttr: 'BON DE COMMANDE EN EXCEL',
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
        columnDefs: [
            {
                targets: 8,
                visible: false,
            },
            {orderable: true, targets: [2]},
        ],
        order: [[2, 'DESC']],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="9" class="col-blue bolo700" style="background-color: #dbdfef">' +
                    group +
                    '</td>',
                )
            },
            dataSrc: 8,
        },
    })
})
$(function () {
    $('#dataLIV3').DataTable({
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
                    if (false === $("input[class='LIV3']").prop('checked')) {
                        $("input[class='LIV3']").prop('checked', true)
                    } else {
                        $("input[class='LIV3']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<span class="badge badge-pill bg-blue">V</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='LIV3']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/bon/valider/' + idbon,
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
                    $("input:checkbox[class='LIV3']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/bon/devalider/' + idbon,
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
                    $("input:checkbox[class='LIV3']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/bon/del/' + idbon,
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
                    $("input:checkbox[class='LIV3']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/non'
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
                    $("input:checkbox[class='LIV3']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/oui'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'BON DE COMMANDE EN PDF',
            },
            {
                text: '<i class="fa fa fa-file-word fa-2x col-blue"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='LIV3']:checked").each(function () {
                        var idbon = $(this).val()
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/oui'
                    })
                },
                titleAttr: 'BON DE COMMANDE EN WORD',
            },
            {
                text: '<i class="fa fa fa-file-excel fa-2x col-light-green"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='LIV3']:checked").each(function () {
                        var idbon = $(this).val()
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/oui'
                    })
                },
                titleAttr: 'BON DE COMMANDE EN EXCEL',
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
        columnDefs: [
            {
                targets: 8,
                visible: false,
            },
            {orderable: true, targets: [2]},
            {orderable: false, targets: [0]},
            {orderable: false, targets: [1]},
        ],
        order: [[8, 'asc']],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="10" class="col-blue bolo700" style="background-color: #dbdfef">' + group + '</td>',
                )
            },
            dataSrc: 8,
        },
    })
})
$(function () {
    $('#dataLIV4').DataTable({
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
                    if (false === $("input[class='LIV4']").prop('checked')) {
                        $("input[class='LIV4']").prop('checked', true)
                    } else {
                        $("input[class='LIV4']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<span class="badge badge-pill bg-blue">V</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='LIV4']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/bon/valider/' + idbon,
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
                text: '<i class="fa fa-spinner fa-2x"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='LIV4']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/bon/status/' + id + '/1',
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
                },
                titleAttr: 'Bons en attente',
            },
            {
                text: '<i class="fa fa-check fa-2x"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='LIV4']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/bon/status/' + id + '/2',
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
                },
                titleAttr: 'Bons confirmés',
            },
            {
                text: '<i class="fa fa-truck fa-2x"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='LIV4']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/bon/status/' + id + '/3',
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
                },
                titleAttr: 'Bons livrés',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='LIV4']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/bon/del/' + idbon,
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
                    $("input:checkbox[class='LIV4']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/non'
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
                    $("input:checkbox[class='LIV4']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/oui'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'BON DE COMMANDE EN PDF',
            },
            {
                text: '<i class="fa fa fa-file-word fa-2x col-blue"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='LIV4']:checked").each(function () {
                        var idbon = $(this).val()
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/oui'
                    })
                },
                titleAttr: 'BON DE COMMANDE EN WORD',
            },
            {
                text: '<i class="fa fa fa-file-excel fa-2x col-light-green"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='LIV4']:checked").each(function () {
                        var idbon = $(this).val()
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/oui'
                    })
                },
                titleAttr: 'BON DE COMMANDE EN EXCEL',
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
        columnDefs: [
            {targets: 8, visible: false,},
            {orderable: true, targets: [2]},
        ],
        order: [[8, 'asc']],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="10" class="col-blue bolo700" style="background-color: #dbdfef">' + group + '</td>',
                )
            },
            dataSrc: 8,
        },
    })
})
$(function () {
    $('#dataLIV5').DataTable({
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
                    if (false === $("input[class='LIV5']").prop('checked')) {
                        $("input[class='LIV5']").prop('checked', true)
                    } else {
                        $("input[class='LIV5']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<span class="badge badge-pill bg-blue">V</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='LIV5']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/bon/valider/' + idbon,
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
                text: '<i class="fa fa-check fa-2x"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='LIV5']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/bon/status/' + id + '/2',
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
                },
                titleAttr: 'Bons confirmés',
            },
            {
                text: '<i class="fa fa-truck fa-2x"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='LIV5']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/bon/status/' + id + '/3',
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
                },
                titleAttr: 'Bons livrés',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='LIV5']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/bon/del/' + idbon,
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
                    $("input:checkbox[class='LIV5']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/non'
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
                    $("input:checkbox[class='LIV5']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/oui'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'BON DE COMMANDE EN PDF',
            },
            {
                text: '<i class="fa fa fa-file-excel fa-2x col-light-green"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='LIV5']:checked").each(function () {
                        var idbon = $(this).val()
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/oui'
                    })
                },
                titleAttr: 'BON DE COMMANDE EN EXCEL',
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
        columnDefs: [
            {targets: 8, visible: false},
            {orderable: true, targets: [2]},
            {orderable: false, targets: [0]},
            {orderable: false, targets: [1]},
        ],
        order: [[8, 'asc']],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="10" class="col-blue bolo700" style="background-color: #dbdfef">' + group +   '</td>',
                )
            },
            dataSrc: 8,
        },
    })
})
$(function () {
    $('#dataLIV6').DataTable({
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
                    if (false === $("input[class='LIV6']").prop('checked')) {
                        $("input[class='LIV6']").prop('checked', true)
                    } else {
                        $("input[class='LIV6']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<span class="badge badge-pill bg-blue">V</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='LIV6']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/bon/valider/' + idbon,
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
                text: '<i class="fa fa-spinner fa-2x"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='LIV6']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/bon/status/' + id + '/1',
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
                },
                titleAttr: 'Bons en attente',
            },
            {
                text: '<i class="fa fa-truck fa-2x"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='LIV6']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/bon/status/' + id + '/3',
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
                },
                titleAttr: 'Bons livrés',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='LIV6']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/bon/del/' + idbon,
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
                    $("input:checkbox[class='LIV6']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/non'
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
                    $("input:checkbox[class='LIV6']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/oui'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'BON DE COMMANDE EN PDF',
            },
            {
                text: '<i class="fa fa fa-file-excel fa-2x col-light-green"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='LIV6']:checked").each(function () {
                        var idbon = $(this).val()
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/oui'
                    })
                },
                titleAttr: 'BON DE COMMANDE EN EXCEL',
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
        columnDefs: [
            {targets: 8, visible: false},
            {orderable: true, targets: [2]},
            {orderable: false, targets: [0]},
            {orderable: false, targets: [1]},
        ],
        order: [[8, 'asc']],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="10" class="col-blue bolo700" style="background-color: #dbdfef">' + group +   '</td>',
                )
            },
            dataSrc: 8,
        },
    })
})
$(function () {
    $('#dataLIV7').DataTable({
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
                    if (false === $("input[class='LIV7']").prop('checked')) {
                        $("input[class='LIV7']").prop('checked', true)
                    } else {
                        $("input[class='LIV7']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<span class="badge badge-pill bg-blue">V</span>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='LIV7']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/bon/valider/' + idbon,
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
                text: '<i class="fa fa-spinner fa-2x"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='LIV7']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/bon/status/' + id + '/1',
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
                },
                titleAttr: 'Bons en attente',
            },
            {
                text: '<i class="fa fa-check fa-2x"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='LIV7']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        $.ajax({
                            type: 'GET',
                            url: '/crm/bon/status/' + id + '/2',
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
                },
                titleAttr: 'Bons confirmés',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='LIV7']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/bon/del/' + idbon,
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
                    $("input:checkbox[class='LIV7']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/non'
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
                    $("input:checkbox[class='LIV7']:checked").each(function () {
                        var idbon = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/oui'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'BON DE COMMANDE EN PDF',
            },
            {
                text: '<i class="fa fa fa-file-excel fa-2x col-light-green"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='LIV7']:checked").each(function () {
                        var idbon = $(this).val()
                        window.location.href = '/crm/doc/attache/' + idbon + '/bon/oui'
                    })
                },
                titleAttr: 'BON DE COMMANDE EN EXCEL',
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
        columnDefs: [
            {
                targets: 8,
                visible: false,
            },
            {orderable: true, targets: [2]},
            {orderable: false, targets: [0]},
            {orderable: false, targets: [1]},
        ],
        order: [[8, 'asc']],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="10" class="col-blue bolo700" style="background-color: #dbdfef">' + group +   '</td>',
                )
            },
            dataSrc: 8,
        },
    })
})