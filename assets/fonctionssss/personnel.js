import $ from 'jquery';

$(function() {
    $('#dataPERSON').DataTable({
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
                    if (false === $("input[class='PERSON']").prop('checked')) {
                        $("input[class='PERSON']").prop('checked', true)
                    } else {
                        $("input[class='PERSON']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa fa-edit fa-2x"></i>',
                className: 'edit',
                action: function(e, dt, node, config) {
                    $("input:checkbox[class='PERSON']:checked").each(function() {
                        var id = $(this).val()
                        window.location.href =
                            '/crm/chantiers/personnel/' + id
                    })
                },
                titleAttr: 'Modifier',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function(e, dt, node, config) {
                    $("input:checkbox[class='PERSON']:checked").each(function() {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function() {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/personnel/del/' + id,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function(respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '204') {
                                        $('#Traitement').modal('hide')
                                        window.location.href = '/crm/chantiers/'
                                    }
                                },
                                error: function(xhr, resp, text) {
                                    $('#Traitement').modal('hide')
                                    $('#ModalErrCai').modal('show')
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
            { orderable: false, targets: [0] },
        ],
        order: [
            [0, 'ASC']
        ],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
    })
})
$(function() {
    $('#dataOPERINTERNE').DataTable({
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
                if (false === $("input[class='OPERINTERNE']").prop('checked')) {
                    $("input[class='OPERINTERNE']").prop('checked', true)
                } else {
                    $("input[class='OPERINTERNE']").prop('checked', false)
                }
            },
            titleAttr: 'Cocher tout /  Décocher tout',
        },
            {
                text: '<i class="fa fa fa-edit fa-2x"></i>',
                className: 'edit',
                action: function(e, dt, node, config) {
                    $("input:checkbox[class='OPERINTERNE']:checked").each(function() {
                        var id = $(this).val()
                        window.location.href =
                            '/crm/chantiers/personnel/' + id
                    })
                },
                titleAttr: 'Modifier',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function(e, dt, node, config) {
                    $("input:checkbox[class='OPERINTERNE']:checked").each(function() {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function() {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/personnel/del/' + id,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function(respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '204') {
                                        $('#Traitement').modal('hide')
                                        window.location.href = '/crm/chantiers/'
                                    }
                                },
                                error: function(xhr, resp, text) {
                                    $('#Traitement').modal('hide')
                                    $('#ModalErrCai').modal('show')
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
            { orderable: false, targets: [0] },
        ],
        order: [
            [0, 'ASC']
        ],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
    })
})

$('#addPers').off().on("click",function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addPers').hide()
        $('#closePers').hide()
        $('#loadPers').css('display', '')

        $.ajax({
            type: 'POST',
            url: '/crm/personnel/add',
            data: JSON.stringify($('#addPersonnelForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                location.reload()
            },
            error: function(xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#addInter').off().on("click",function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addInter').hide()
        $('#closeInter').hide()
        $('#loadInter').css('display', '')

        $.ajax({
            type: 'POST',
            url: '/crm/personnel/operation/add',
            data: JSON.stringify($('#addInterForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                location.reload()
            },
            error: function(xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})

$('#updatePers').off().on("click",function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#updatePers').hide()
        $('#closePers').hide()
        $('#loadPers').css('display', '')
        var idperson = $('#idperson').val()
        $.ajax({
            type: 'POST',
            url: '/crm/personnel/update/' + idperson,
            data: JSON.stringify($('#addPersonnelForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                if(pager === 'chantiers'){
                    window.location.href = '/crm/chantiers'
                }else{
                    window.location.href = '/crm/technique'
                }
            },
            error: function(xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#updateInter').off().on("click",function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#updateInter').hide()
        $('#closeInter').hide()
        $('#loadInter').css('display', '')
        var idperson = $('#idoperation').val();
        var pager = $('#pager').val();
        $.ajax({
            type: 'POST',
            url: '/crm/personnel/operation/update/' + idperson,
            data: JSON.stringify($('#addInterForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                if(pager === 'chantiers'){
                    window.location.href = '/crm/chantiers'
                }else{
                    window.location.href = '/crm/technique'
                }
            },
            error: function(xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})

$('#addBenef').off().on("click",function(event) {
    if ($(this).closest('form').valid()) {
        $('#addBenef').hide()
        $('#closeBenef').hide()
        $('#loadBenef').css('display', '')
        $.ajax({
            type: 'POST',
            url: '/crm/personnel/benef/add',
            data: JSON.stringify($('#addPersonnelForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                $('#addBENEFICIAIRE').modal('toggle')
                location.reload()
            },
            error: function(xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})

$('#addSuper').off().on("click",function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addSuper').hide()
        $('#closeSuper').hide()
        $('#loadSuper').css('display', '')

        $.ajax({
            type: 'POST',
            url: '/crm/personnel/lier',
            data: JSON.stringify($('#addSuperviseurForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                $('#modalSuperviseur').modal('toggle')
                location.reload()
            },
            error: function(xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})

$('#addTeam').off().on("click",function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addTeam').hide()
        $('#closeTeam').hide()
        $('#loadTeam').css('display', '');
        var idchantier = $('#idchantier').val()
        $.ajax({
            type: 'POST',
            url: '/crm/personnel/team/add/' + idchantier,
            data: JSON.stringify($('#addTeamForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                $('#modalEquipe').modal('toggle')
                location.reload()
            },
            error: function(xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})
