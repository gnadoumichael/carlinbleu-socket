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
    $('#dataPersonTech').DataTable({
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
        order: [
            [0, 'asc']
        ],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
    })
    $('#dataPERSONNEL').DataTable({
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
                        const id = $(this).val();
                        window.location.href =
                            '/crm/personnel/edit/person/' + id
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
                                        window.location.href = '/crm/personnel/'
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

        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
    })
    $('#dataSERVICE').DataTable({
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
                if (false === $("input[class='SER']").prop('checked')) {
                    $("input[class='SER']").prop('checked', true)
                } else {
                    $("input[class='SER']").prop('checked', false)
                }
            },
            titleAttr: 'Cocher tout /  Décocher tout',
        },
            {
                text: '<i class="fa fa fa-edit fa-2x"></i>',
                className: 'edit',
                action: function(e, dt, node, config) {
                    $("input:checkbox[class='SER']:checked").each(function() {
                        const id = $(this).val();
                        window.location.href =
                            '/crm/personnel/edit/service/' + id
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
                        $('#accept').off().on("click",function() {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/personnel/service/del/' + id,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function(respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '204') {
                                        $('#Traitement').modal('hide')
                                        window.location.href = '/crm/personnel/'
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


$('#addSer').off().on("click",function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addSer').hide()
        $('#closeSer').hide()
        $('#loadSer').css('display', '')
        $.ajax({
            type: 'POST',
            url: '/crm/personnel/service/add',
            data: JSON.stringify($('#addServiceForm').serializeObject()),
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

                if($("#pager").val() === 'chantiers') {
                    window.location.href = '/crm/chantiers'
                }
               if($("#pager").val() === 'chantiers'){
                    window.location.href = '/crm/technique'
                }
                if($("#pager").val() === 'personnel'){
                    window.location.href = '/crm/personnel'
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
        const idchantier = $('#idchantier').val();
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



$('#addUsa').on('click', function (e) {
    $('#modalImage').modal('show');
})
$('#addImagePer').off().on("click",function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addImagePer').hide()
        $('#closeImagePer').hide()
        $('#loadImagePer').css('display', '')

        $.ajax({
            type: 'POST',
            url: '/crm/personnel/imager/pers/'+ localStorage.getItem('idpers'),
            data: new FormData($('#addImagerForm')[0]),
            contentType: false,
            processData: false,
            cache: false,
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

$('.addPersa').on('click', function (e) {
    localStorage.setItem('idpers', this.id);
    $('#modalImager').modal('show');
})
$('#addImageUser').off().on("click",function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addImageUser').hide()
        $('#closeImageUser').hide()
        $('#loadImageUser').css('display', '')

        $.ajax({
            type: 'POST',
            url: '/crm/personnel/image/user',
            data: new FormData($('#addImageForm')[0]),
            contentType: false,
            processData: false,
            cache: false,
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

$('#updateUser').on('click', function (e) {
    $('#modalUpdateUser').modal('show');
})

$('#updateUsere').off().on("click",function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#updateUsere').hide()
        $('#closeUpdateUsere').hide()
        $('#loadUpdateUsere').css('display', '')
        $.ajax({
            type: 'PUT',
            url: '/crm/parametre/user/update',
            data: JSON.stringify($('#updateUsereForm').serializeObject()),
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
$('#updPasse').off().on("click",function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        if($('#nouveau').val() === $('#confirmer').val()) {
            $('#updPasse').hide()
            $('#loadUpdPasse').css('display', '')
            $.ajax({
                type: 'PUT',
                url: '/crm/parametre/passe/update',
                data: JSON.stringify($('#updPassForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function(respdata, textStatus, jqXHR) {
                    location.reload()
                },
                error: function(xhr, resp, text) {
                    $('#updPasse').show();
                    $('#loadUpdPasse').hide()
                    $('#messar').html('Impossible de traiter votre demande.');
                },
            })
        }else{
            $('#messar').html('Vos nouveaux mots de passe doit être identitiques !');
        }

    }
})
$('#addSousCpte').on('click', function (e) {
    $('#modalSousCpte').modal('show');
})
$('#addss').off().on("click",function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
            $('#addss').hide();
            $('#closeaddss').hide()
            $('#loadaddss').css('display', '')
            $.ajax({
                type: 'POST',
                url: '/crm/parametre/sous/add',
                data: JSON.stringify($('#addSoussForm').serializeObject()),
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
$('#updss').off().on("click",function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#updss').hide();
        $('#closeupdss').hide()
        $('#loadupdss').css('display', '')
        $.ajax({
            type: 'PUT',
            url: '/crm/parametre/sousupd/upd/'+ $("#sousid").val(),
            data: JSON.stringify($('#addSoussForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                window.location.href = '/crm/parametre'
            },
            error: function(xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})

function delcompte(a){
    alert(a)
}
