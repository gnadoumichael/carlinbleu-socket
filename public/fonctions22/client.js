$(function () {
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
            action: function (e, dt, node, config) {
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
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CLYE']:checked").each(function () {
                        var id = $(this).val()
                        window.location.href = '/crm/projets/client/' + id
                    })
                },
                titleAttr: 'Modifier le client',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CLYE']:checked").each(function () {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').on("click", function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/client/del/' + id,
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
                        const id = $(this).val();
                        $('#ConfirmDelete').modal('show')
                        $('#accept').on("click", function () {
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
                        $('#accept').on("click", function () {
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
        order: [[1, 'asc']],
        columnDefs: [{orderable: false, targets: [0]}],
        lengthMenu: [
            [20, 50, 80, 160, -1],
            ['20', '50', '80', '160', 'Tout'],
        ],
    })
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
            action: function (e, dt, node, config) {
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
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CLYE']:checked").each(async function () {
                        $('#addClientForm')[0].reset();
                        const id = $(this).val();
                        $('#Traitement').modal('show')
                        await axios({
                            method: 'GET',
                            url: '/crm/client/get/' + id,
                            dataType: 'json',
                        }).then(function (response) {
                            localStorage.setItem('token', id.toString());
                            let data = response.data;
                            $('#modalClient').modal('show');
                            $('#clfa').removeClass('hide');
                            $('#clfb').addClass('hide');

                            $('#divClienter').removeClass('hide');
                            $('#divClient').addClass('hide');

                            $('.cls').addClass('col-pink');
                            $("#nomclient").val(data.nomclient);
                            $("#code").val(data.code);
                            $("#adresse").val(data.adresse);
                            $("#contact").val(data.contact);
                            $("#contribuable").val(data.contribuable);

                            $('#Traitement').modal('hide');
                        }).catch(function (error) {
                            $('#Traitement').modal('hide');
                            $('#ModalErreur').modal('show');
                        });
                    })
                },
                titleAttr: 'Modifier le client',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='CLYE']:checked").each(async function () {
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
    $('#dataEtatClients').DataTable({
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
        order: [
            [0, 'asc']
        ],
    });
    $('#dataClientsTech').DataTable({
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
        buttons: [
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
        displayLength: 15,
        columnDefs: [
            {targets: [1, 4], className: 'text-center'},
        ],
        order: [
            [0, 'asc']
        ],
    });
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
            let data = response.data;
            const tabler = $('#dataClients').DataTable();
            tabler.clear().draw();
            data.map((client) => {
                if (client.corbeille === null && client.type === null) {
                    tabler.row.add([
                        '<input type="checkbox" data-toggle="toggle" class="CLYE" value=' + client.id + '></input>',
                        '<a href="/crm/client/' + client.id + '" class="col-blue font-bold supper">' + client.nomclient + '</a>',
                        client.code,
                        client.adresse,
                        client.contact,
                        client.contribuable
                    ]).draw();
                }
            });
            $('#divClient').show();
            $('#loadClient').hide();
            if ($('#collapseOne_0').hasClass('collapse')) {
                $('#collapseOne_0').collapse('toggle');
            }
            $('#modalClient').modal('toggle');

            axios({
                method: 'GET',
                url: '/crm/chantiers/getdatasseeeee/clients',
                headers: {
                    'Content-Type': 'application/json'
                },
            }).then(function (response) {
                let dapa = response.data;
                const $selclient = $('.selclient');
                const $selchantier = $('.selchantier');
                $('.selclient').html('');
                $('.selchantier').html('');
                dapa.map((client) => {
                    if (client.corbeille === null && client.type === null) {
                        const group = $('<option value="' + client.id + '" >' + client.nomclient + '</option>');
                        group.appendTo($selclient);
                    }
                });
                dapa.map((client) => {
                    const chantiers = client.chantiers;
                    let count = 0;
                    if (chantiers.length > 0) {
                        chantiers.map((chantier) => {
                            if (chantier.archiver !== 'oui' && chantier.corbeille === null) {
                                count++;
                            }
                        });
                    }

                    if (client.corbeille === null && client.type === null) {
                        if (count > 0) {
                            const group = $('<optgroup label="' + client.nomclient + '" />');
                            chantiers.map((chantier) => {
                                if (chantier.archiver !== 'oui' && chantier.corbeille === null) {
                                    $('<option value="' + chantier.id + '"  />').html(chantier.nomchantier).appendTo(group);
                                }
                            });
                            group.appendTo($selchantier);
                        }
                    }
                });

            }).catch(function () {
            })
        }).catch(function (error) {
            $('#Traitement').modal('hide');
            $('#ModalErreur').modal('show');
        });
    }
})
$('#updateClient').off().on("click", async function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#divClienter').addClass('hide');
        $('#loadClient').show();
        const id = localStorage.getItem('token');
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