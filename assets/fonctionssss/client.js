import $ from 'jquery';

$(function() {
    $('#dataClients').DataTable({
        retrieve: true,
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
                previous: '<i class="fa fa-chevron-left"/>',
                next: '<i class="fa fa-chevron-right"/>',
            },
        },
        dom: 'Bfrtip',
        buttons: [{
                text: '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
                className: 'fred2',
                action: function(e, dt, node, config) {
                    if (false === $("input[class='CLYE']").prop('checked')) {
                        $("input[class='CLYE]").prop('checked', true)
                    } else {
                        $("input[class='CLYE']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa fa-edit fa-2x"/>',
                className: 'edit',
                action: function(e, dt, node, config) {
                    $("input:checkbox[class='CLYE']:checked").each(function() {
                        const id = $(this).val();
                        const pager = $("#pager").val();
                        if(pager === 'chantiers'){
                            window.location.href = '/crm/chantiers/client/' + id
                        }else{
                            window.location.href = '/crm/technique/client/' + id
                        }
                    })
                },
                titleAttr: 'Modifier le client',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function(e, dt, node, config) {
                    $("input:checkbox[class='CLYE']:checked").each(function() {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').on("click",function() {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/client/delete/' + id,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function(respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '204') {
                                        $('#Traitement').modal('hide')
                                        location.reload()
                                    }
                                },
                                error: function(xhr, resp, text) {
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
                text: '<i class="fa fa-copy fa-2x"/>',
                titleAttr: 'Copy',
            },
            {
                extend: 'excel',
                className: 'ecel',
                text: '<i class="fa fa-file-excel  fa-2x" ></i>',
                titleAttr: 'Excel',
            },
            {
                extend: 'pdf',
                orientation: 'landscape',
                pageSize: 'LEGAL',
                className: 'pdff',
                text: '<i class="fa fa-file-pdf fa-2x"/>',
                titleAttr: 'PDF',
            },
            {
                extend: 'print',
                className: 'printt',
                text: '<i class="fa fa-print fa-2x"/>',
                titleAttr: 'Imprimer',
            },
            {
                text: '20',
                className: 'fred3',
                extend: 'pageLength',
                titleAttr: 'Nombre de ligne',
            },
        ],
    });
})

$('#updateClient').on("click", function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#updateClient').hide();
        $('#closeClient').hide();
        $('#loadClient').css('display', '');
       const id = $('#idclient').val();
        $.ajax({
            type: 'PUT',
            url: '/crm/client/update/' + id,
            data: JSON.stringify($('#addClientForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                const pager = $("#pager").val();
                if(pager === 'chantiers'){
                    window.location.href = '/crm/chantiers'
                }
                if(pager === 'technique'){
                    window.location.href = '/crm/technique'
                }
                if(pager === 'client'){
                    window.location.href = '/crm/client/'+ id;
                }
            },
            error: function(xhr, resp, text) {
                $('#ModalErreur').modal('show')
                $('#mdModalClient').modal('toggle')
            },
        })
    }
})
$('#addClient').on("click", function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#divClient').hide();
        $('#loadClient').css('display', '')
        $.ajax({
            type: 'POST',
            url: '/crm/client/add',
            data: JSON.stringify($('#addClientForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#modalClient').modal('toggle');
                    $('#modalChantier').show();
                    location.reload();
                }
            },
            error: function(xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#addReglementClient').on("click",function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addReglementClient').hide()
        $('#closeReglement').hide()
        $('#loadReglement').css('display', '')
        var idclient = $('#idclient').val()
        $.ajax({
            type: 'POST',
            url: '/crm/chantiers/reglement/client/' + idclient,
            data: JSON.stringify($('#addReglementForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#mdModalReglement').modal('toggle')
                    location.reload()
                }
            },
            error: function(xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})

$(function() {
    $('#dataLISTECLIENTS').DataTable({
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
                action: function(e, dt, node, config) {
                    if (false === $("input[class='CLYE']").prop('checked')) {
                        $("input[class='CLYE']").prop('checked', true)
                    } else {
                        $("input[class='CLYE']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa fa-edit fa-2x"></i>',
                className: 'edit',
                action: function(e, dt, node, config) {
                    $("input:checkbox[class='CLYE']:checked").each(function() {
                        var id = $(this).val()
                        window.location.href = '/crm/projets/client/' + id
                    })
                },
                titleAttr: 'Modifier le client',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function(e, dt, node, config) {
                    $("input:checkbox[class='CLYE']:checked").each(function() {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').on("click",function() {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/client/del/' + id,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function(respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '204') {
                                        $('#Traitement').modal('hide')
                                        location.reload()
                                    }
                                },
                                error: function(xhr, resp, text) {
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
        displayLength: 10,
        columnDefs: [{ orderable: false, targets: [0] }],
        lengthMenu: [
            [20, 50, 80, 160, -1],
            ['20', '50', '80', '160', 'Tout'],
        ],
    })
})
$(function () {
    $('#dataLISTEDELCLIENTS').DataTable({
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
                    if (false === $("input[class='CLYEDEL']").prop('checked')) {
                        $("input[class='CLYEDEL']").prop('checked', true)
                    } else {
                        $("input[class='CLYEDEL']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa-redo fa-2x"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CLYEDEL']:checked").each(function () {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').on("click",function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'GET',
                                url: '/crm/client/restaurer/' + id,
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
                    $("input:checkbox[class='CLYEDEL']:checked").each(function () {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').on("click",function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/client/deldefinitive/' + id,
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
                titleAttr: 'Nombre de ligne',
            },
        ],
        displayLength: 10,
        columnDefs: [{orderable: false, targets: [0]}],
        lengthMenu: [
            [20, 50, 80, 160, -1],
            ['20', '50', '80', '160', 'Tout'],
        ],
    })
})