$(function () {
    if ($("#ddclient").val()) {
        $('#modalClient').modal('show');
    }
    $('#dddClients').DataTable({
        retrieve: true,
        displayLength: 20,
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
        buttons: [
            {
                text: '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
                className: 'fred2',
                action: function (e, dt, node, config) {
                    if (false === $("input[class = 'CLYES']").prop('checked')) {
                        $("input[class='CLYES]").prop('checked', true)
                    } else {
                        $("input[class='CLYES']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa fa-edit fa-2x"/>',
                className: 'edit',
                action: function (e, dt, node, config) {

                    $("input:checkbox[class='CLYES']:checked").each(async function () {
                        const id = $(this).val();
                        window.location.href = '/crm/listeclient/' + id
                    })
                },
                titleAttr: 'Modifier le client',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CLYES']:checked").each(async function () {
                        let pos = $(this).closest('tr').get(0);
                        let id = $(this).val();
                        $('#ConfirmDelete').modal('hide')
                        $('#Traitement').modal('show')

                        await axios({
                            method: 'DELETE',
                            url: '/crm/client/delete/' + id,
                            contentType: 'application/json; charset=utf-8',
                            dataType: 'json',
                        }).then(function (response) {
                            location.reload();
                            $('#Traitement').modal('hide');

                        }).catch(function (error) {
                            $('#Traitement').modal('hide');
                            $('#ModalErreur').modal('show');
                        });

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
        columnDefs: [
            {targets: [0, 4], className: 'text-center'},
            {orderable: false, targets: [0]},
        ],
        order: [
            [1, 'asc']
        ],
    });
})

$('#updateClient').off().on("click", async function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#divClient').addClass('hide');
        $('#loadClient').show();

        await axios({
            method: 'PUT',
            url: '/crm/client/update/' + $("#ddclient").val(),
            data: JSON.stringify($('#addClientForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
        }).then(function (response) {
            window.location.href = '/crm/listeclient/'
            $('#Traitement').modal('hide');
        }).catch(function (error) {
            $('#Traitement').modal('hide');
            $('#ModalErreur').modal('show');
            $('#loadClient').hide();
        });

    }
})
$('#updClient').off().on("click", async function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#updClient').hide()
        $('#loadClient').css('display', '')
        const id = $('#idclient').val();
        await axios({
            method: 'PUT',
            url: '/crm/client/update/' + id,
            data: JSON.stringify($('#addClientForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
        }).then(function (response) {
            location.reload();
            $('#Traitement').modal('hide');
        }).catch(function (error) {
            $('#Traitement').modal('hide');
            $('#ModalErreur').modal('show');
            $('#loadClient').hide();
        });
    }
})
$('#addReglementClient').on("click", function (event) {
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
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#mdModalReglement').modal('toggle')
                    location.reload()
                }
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#addTechClient').off().on("click", function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#divClient').hide();
        $('#loadClient').css('display', '');
        axios({
            method: 'POST',
            url: '/crm/client/add',
            data: JSON.stringify($('#addClientForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
        }).then(function (response) {
            location.reload();
        }).catch(function (error) {
            $('#Traitement').modal('hide');
            $('#ModalErreur').modal('show');
        });
    }
})
$('#addClient').off().on("click", function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#divClient').hide();
        $('#loadClient').css('display', '');
        axios({
            method: 'POST',
            url: '/crm/client/add',
            data: JSON.stringify($('#addClientForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
        }).then(function (response) {
            window.location.href = '/crm/listeclient/'
        }).catch(function (error) {
            $('#Traitement').modal('hide');
            $('#ModalErreur').modal('show');
        });
    }
})