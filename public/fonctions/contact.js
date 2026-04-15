$(function () {
    $('#dataContacts').DataTable({
        retreive: true,
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
                    if (false === $("input[class='CONTAK']").prop('checked')) {
                        $("input[class='CONTAK']").prop('checked', true)
                    } else {
                        $("input[class='CONTAK']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa fa-edit fa-2x"></i>',
                className: 'edit',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CONTAK']:checked").each(function () {
                        var id = $(this).val();

                        $('#Traitement').modal('show');
                        let pager = $('#pager').val();

                        if (pager === 'chantiers') {
                            window.location.href = '/crm/chantiers/contact/' + id
                        } else {
                            window.location.href = '/crm/technique/contact/' + id
                        }
                    })
                },
                titleAttr: 'Modifier',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CONTAK']:checked").each(function () {
                        var idchantier = $('#idchantier').val()
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/contact/del/' + id,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    let pager = $('#pager').val();
                                    if (pager === 'chantiers') {
                                        window.location.href = '/crm/chantiers'
                                    } else {
                                        window.location.href = '/crm/technique'
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
        displayLength: 10,
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        columnDefs: [
            {
                targets: 7, visible: false,
            },
            {orderable: false, targets: [0]},
        ],
        order: [[7, 'asc']],
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="8" class="col-blue bolo700" style="background-color: #dbdfef">' + group + '</td>',
                )
            },
            dataSrc: 7,
        },
    })
    $('#dataContact').DataTable({
        retreive: true,
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
        order: [[1, 'desc']],
        dom: 'Bfrtip',
        buttons: [
            {
                text:
                    '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
                className: 'fred2',
                action: function (e, dt, node, config) {
                    if (false === $("input[class='CONTAK']").prop('checked')) {
                        $("input[class='CONTAK']").prop('checked', true)
                    } else {
                        $("input[class='CONTAK']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa fa-edit fa-2x"></i>',
                className: 'edit',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CONTAK']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')

                        let pager = $('#pager').val();
                        var idchantier = $('#idchantier').val();

                        if(pager === 'gestion'){
                            window.location.href = '/crm/gestion/contact/'+id+'/'+idchantier
                        }else{
                            window.location.href = '/crm/chantier/contact/'+id+'/'+idchantier
                        }
                    })
                },
                titleAttr: 'Modifier',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CONTAK']:checked").each(function () {
                        var idchantier = $('#idchantier').val()
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/contact/del/' + id,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '204') {
                                        $('#Traitement').modal('hide')
                                            window.location.href = '/crm/chantier/' + idchantier
                                    }
                                },
                                error: function (xhr, resp, text) {
                                    console.log(xhr)
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
    $('#daCon').DataTable({
        retreive: true,
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
        displayLength: 10,
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        columnDefs: [
            {targets: 6, visible: false},
        ],
        order: [
            [6, 'asc'],
            [0, 'asc']
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
    $('#exame').DataTable({
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
    })
})

$('#addContact').on("click", function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addContact').hide()
        $('#closeContact').hide()
        $('#loadContact').css('display', '')
        const id = $('#idchantier').val();
        $.ajax({
            type: 'POST',
            url: '/crm/contact/add/' + id,
            data: JSON.stringify($('#addContactForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#mdModalContact').modal('toggle')
                    location.reload()
                }
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#addeContact').on("click",async function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#divContact').hide()
        $('#loadContact').css('display', '')
        await axios({
            method: 'POST',
            url: '/crm/contact/adde',
            data: JSON.stringify($('#addContactForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
        }).then(function (response) {
            location.reload()
        }).catch(function (error) {
            $('#ModalErreur').modal('show');
        });

    }
})
$('#updateContact').on("click",function (event) {
    event.preventDefault()
    if($(this).closest('form').valid()) {
        $('#updateContact').hide()
        $('#closeContact').hide()
        $('#loadContact').css('display', '');
        let pager = $('#pager').val();
        let lieu = "chantier";
        if(pager === 'chantiers'){
            lieu = "chantiers";
        }
        if(pager === 'technique'){
            lieu = "chantiers";
        }

        var id = $('#idcontact').val();
        var idchantier = $('#idchantier').val();
        $.ajax({
            type: 'PUT',
            url: '/crm/contact/update/' + id +'/' + lieu ,
            data: JSON.stringify($('#addContactForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if(pager === 'chantiers'){
                    window.location.href = '/crm/chantiers';
                }
                if(pager === 'technique'){
                    window.location.href = '/crm/technique';
                }
                if(pager === 'gestion'){
                    window.location.href = '/crm/gestion/'+idchantier
                }
                if(pager === 'chantier'){
                    window.location.href = '/crm/chantier/'+ idchantier
                }
            },
            error: function (xhr, resp, text) {
                $('#mdModalContact').modal('toggle')
                $('#ModalErreur').modal('show')
            },
        })
    }
})



