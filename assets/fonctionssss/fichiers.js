import $ from 'jquery';

function delfichier(a) {
    $('#ConfirmDelete').modal('show')
    $('#accept').click(function () {
        $('#ConfirmDelete').modal('hide')
        $('#Traitement').modal('show')
        $.ajax({
            type: 'GET',
            url: '/crm/gestion/delficher/' + a,
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
}
$(function () {
    $('#dataFichies').DataTable({
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
                    if (false === $("input[class='FICHIES']").prop('checked')) {
                        $("input[class='FICHIES']").prop('checked', true)
                    } else {
                        $("input[class='FICHIES']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='FICHIES']:checked").each(function () {
                        var idprojet = $('#idprojet').val()
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/gestion/delfichier/' + id,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '204') {
                                        $('#Traitement').modal('hide')
                                        location.reload()
                                    }
                                },
                                error: function (xhr, resp, text) {

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
                targets: 3,
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
                    '<td colspan="5" class="col-blue bolo700" style="background-color: #dbdfef">' + group + '</td>',
                )
            },
            dataSrc: 3,
        },
    })
})
$(function () {
    $('#dataFichiesTech').DataTable({
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
        columnDefs: [{orderable: false, targets: [0]}],
        order: [[1, 'ASC']],
        dom: 'Bfrtip',
        buttons: [
            {
                text:
                    '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
                className: 'fred2',
                action: function (e, dt, node, config) {
                    if (false === $("input[class='FICHIESTECH']").prop('checked')) {
                        $("input[class='FICHIESTECH']").prop('checked', true)
                    } else {
                        $("input[class='FICHIESTECH']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='FICHIESTECH']:checked").each(function () {
                        var idprojet = $('#idprojet').val()
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/gestion/delfichier/' + id,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '204') {
                                        $('#Traitement').modal('hide')
                                        location.reload()
                                    }
                                },
                                error: function (xhr, resp, text) {

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
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
    })
})
$(function () {
    $('#dataFichiesDesc').DataTable({
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
        columnDefs: [{orderable: false, targets: [0]}],
        order: [[1, 'ASC']],
        dom: 'Bfrtip',
        buttons: [
            {
                text:
                    '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
                className: 'fred2',
                action: function (e, dt, node, config) {
                    if (false === $("input[class='FICHIESDESC']").prop('checked')) {
                        $("input[class='FICHIESDESC']").prop('checked', true)
                    } else {
                        $("input[class='FICHIESDESC']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='FICHIESDESC']:checked").each(function () {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/gestion/delfichier/' + id,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '204') {
                                        $('#Traitement').modal('hide')
                                        location.reload()
                                    }
                                },
                                error: function (xhr, resp, text) {

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
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
    })
})

$('#addFile').click(function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addFile').hide()
        $('#closeFile').hide()
        $('#loadFile').css('display', '')
        var id = $('#id').val()
        $.ajax({
            type: 'POST',
            url: '/crm/gestion/fichier/' + id,
            data: new FormData($('#addFileForm')[0]),
            contentType: false,
            processData: false,
            cache: false,
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                location.reload()
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
                $('#mdModalDocument').modal('toggle')
            },
        })
    }
})
$('#addFileChantier').click(function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addFileChantier').hide()
        $('#closeFileChantier').hide()
        $('#loadFileChantier').css('display', '')
        $.ajax({
            type: 'POST',
            url: '/crm/gestion/fichier/chantiers/add',
            data: new FormData($('#addFileForm')[0]),
            contentType: false,
            processData: false,
            cache: false,
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                location.reload()
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
                $('#mdModalDocument').modal('toggle')
            },
        })
    }
})
$('#addFileTechnique').click(function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addFileTechnique').hide()
        $('#closeFileTechnique').hide()
        $('#loadFileTechnique').css('display', '')
        $.ajax({
            type: 'POST',
            url: '/crm/gestion/fichier/technique/add',
            data: new FormData($('#addFileTechniqueForm')[0]),
            contentType: false,
            processData: false,
            cache: false,
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                location.reload()
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
                $('#mdModalFiche').modal('toggle')
            },
        })
    }
})
$('#addFileDesc').click(function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addFileDesc').hide()
        $('#closeFileDesc').hide()
        $('#loadFileDesc').css('display', '')
        $.ajax({
            type: 'POST',
            url: '/crm/gestion/fichier/descriptif/add',
            data: new FormData($('#addFileDescForm')[0]),
            contentType: false,
            processData: false,
            cache: false,
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                location.reload()
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
                $('#mdModalFicheDescr').modal('toggle')
            },
        })
    }
})