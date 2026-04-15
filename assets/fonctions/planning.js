$(function() {
    $('.js-example-basic-multiple').select2();
});


/// FORMULAIRE AJOUTER UN PLANNING
$('#addPlanning').on("click",function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addPlanning').hide()
        $('#closePlanning').hide()
        $('#loadPlanning').css('display', '')
        var id = $('#idchantier').val()
        $.ajax({
            type: 'POST',
            url: '/crm/planning/add/' + id,
            data: JSON.stringify($('#addPlanningForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    window.location.href = '/crm/gestion/' + id
                }
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})

/// FORMULAIRE AJOUTER UN PLANNING
$('#updatePlanning').on("click",function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#updatePlanning').hide()
        $('#closePlanning').hide()
        $('#loadPlanning').css('display', '');

        const id = $('#idplanning').val();
        var idchantier = $('#idchantier').val();

        $.ajax({
            type: 'PUT',
            url: '/crm/planning/update/' + id,
            data: JSON.stringify($('#addPlanningForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
               window.location.href = '/crm/gestion/' + idchantier
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})

/// FORMULAIRE AJOUTER UNE SECTION
$('#addSection').on("click",function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addSection').hide()
        $('#closeSection').hide()
        $('#loadSection').css('display', '')
        var id = $('#idchantier').val()
        $.ajax({
            type: 'POST',
            url: '/crm/planning/section/add/' + id,
            data: JSON.stringify($('#addSectionForm').serializeObject()),
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

/// FORMULAIRE AJOUTER UNE TACHE
$('#addTache').on("click",function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addTache').hide()
        $('#closeTache').hide()
        $('#loadTache').css('display', '');
        var id = $('#idchantier').val();
        $('#libelle').val(CKEDITOR.instances['libelle'].getData())
        $.ajax({
            type: 'POST',
            url: '/crm/planning/tache/add/' + id,
            data: JSON.stringify($('#addTacheForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                    $('#mdModalTache').modal('toggle')
                    location.reload()
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})

/// FORMULAIRE MODIFIER UNE TACHE
$('#updateTache').on("click",function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#updateTache').hide()
        $('#closeTache').hide()
        $('#loadTache').css('display', '');
        var id = $('#idtache').val();
        var idd = $('#idchantier').val();
        $('#libelle').val(CKEDITOR.instances['libelle'].getData())
        $.ajax({
            type: 'POST',
            url: '/crm/planning/tache/update/' + id,
            data: JSON.stringify($('#addTacheForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                $('#mdModalTache').modal('toggle')
                window.location.href = '/crm/gestion/' + idd
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})

// DATATABLES PLANNING
$(function () {
    $('#dataPLAN').DataTable({
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
                    if (false === $("input[class='PLAN']").prop('checked')) {
                        $("input[class='PLAN']").prop('checked', true)
                    } else {
                        $("input[class='PLAN']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa fa-edit fa-2x"></i>',
                className: 'edit',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='PLAN']:checked").each(function () {
                        var idtache = $(this).val()
                        var idprojet = $('#projetvale').text()
                        window.location.href =
                            '/crm/projet/tache/' + idtache + '/' + idprojet
                    })
                },
                titleAttr: 'Modifier',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='PLAN']:checked").each(function () {
                        var idtache = $(this).val()
                        $('#myModal').modal('show')
                        axios({
                            method: 'post',
                            url: '/projet/deltache/' + idtache + '/del/planning/section',
                        })
                            .then(function (response) {
                                $('#myModal').modal('hide')
                                $('#myModal1').modal('show')
                                window.setTimeout(function () {
                                    $('#myModal1').modal('hide')
                                }, 1500)
                                location.reload()
                            })
                            .catch(function (error) {
                                $('#myModal').modal('hide')
                                $('#myModal2').modal('show')
                                window.setTimeout(function () {
                                    $('#myModal2').modal('hide')
                                }, 2000)
                                console.log(error)
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
                text: '15',
                className: 'fred3',
                extend: 'pageLength',
            },
        ],
        columnDefs: [
            {
                targets: 5,
                visible: false,
            },
            {orderable: false, targets: [0]},
        ],
        order: [
            [1, 'ASC'],
            [5, 'ASC'],
        ],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="6" class="bg-gray-300" style="color: #4e73df !important;">' +
                    group +
                    '</td>',
                )
            },
            dataSrc: 5,
        },
    })
})

$(function () {
    $('#dataTACHE').DataTable({
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
                        var idprojet = $('#idprojet').val()
                        var id = $(this).val()
                        window.location.href =
                            '/crm/projet/intervenant/' + id + '/' + idprojet
                    })
                },
                titleAttr: 'Modifier',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='INTERVE']:checked").each(function () {
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
                targets: 0,
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
            dataSrc: 0,
        },
    })
})

