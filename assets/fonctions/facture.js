$('#facselect').on('change', function () {
    const dd = $('#facselect option:selected').val();
    if (dd === 'decompte') {
        $('.dvo').empty();
        $('.deco').removeClass('disabled');
        $('.devo').addClass('disabled');
        $('.dvo').append('* Pas nécessaire');
        $('.dco').empty();
    } else {
        $('.dco').empty();
        $('.devo').removeClass('disabled');
        $('.deco').addClass('disabled');
        $('.dco').append('* Pas nécessaire');
        $('.dvo').empty();
    }

    if (dd === 'acompte') {
        $('.tvo').removeClass('disabled');
        $('.pvo').removeClass('disabled');
        $('.dto').empty();
    } else {
        $('.tvo').addClass('disabled');
        $('.pvo').addClass('disabled');
        $('.dto').append('* Pas nécessaire');
    }
});
$('#facselectez').on('change', function () {
    const dd = $('#facselectez option:selected').val();
    if (dd === 'decompte') {
        $('.dvo').empty();
        $('.deco').removeClass('disabled');
        $('.devo').addClass('disabled');
        $('.dvo').append('* Pas nécessaire');
        $('.dco').empty();
    } else {
        $('.dco').empty();
        $('.devo').removeClass('disabled');
        $('.deco').addClass('disabled');
        $('.dco').append('* Pas nécessaire');
        $('.dvo').empty();
    }

    if (dd === 'acompte') {
        $('.tvo').removeClass('disabled');
        $('.pvo').removeClass('disabled');
        $('.dto').empty();
    } else {
        $('.tvo').addClass('disabled');
        $('.pvo').addClass('disabled');
        $('.dto').append('* Pas nécessaire');
    }
});
$('#deleteFacture').on("click", function (event) {
    event.preventDefault()
    var id = $('#idfacture').val();
    $('#ConfirmDelete').modal('show');
    $('#accept').on("click", async function () {
        $('#ConfirmDelete').modal('hide');
        $('#Traitement').modal('show');
        await axios({
            method: 'DELETE',
            url: '/crm/facture/delete/' + id,
        }).then(function (response) {
            window.location.href = '/crm/chantiers'
        }).catch(function (error) {
            $('#ModalErreur').modal('show')
        });
    });
})

$('#addFacture').on("click", function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addFacture').hide()
        $('#closeFacture').hide()
        $('#loadFacture').css('display', '')
        const idchantier = $('#idchantier').val();
        $('#editor3').val(CKEDITOR.instances['editor3'].getData())
        $('#editor4').val(CKEDITOR.instances['editor4'].getData())
        $.ajax({
            type: 'POST',
            url: '/crm/facture/add/' + idchantier,
            data: JSON.stringify($('#addFactureForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#mdModalFacture').modal('toggle')
                    window.location.href = '/crm/facture/' + respdata['result'] + '/' + idchantier
                }
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#updateFa').on("click", function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#updateFa').hide()
        $('#closeFa').hide()
        $('#loadFa').css('display', '')
        const idchantier = $('#idchantier').val();
        const idfa = $('#idfacture').val();
        $.ajax({
            type: 'POST',
            url: '/crm/facture/pourcentage/' + idchantier + '/' + idfa,
            data: JSON.stringify($('#addPourcentageForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '200') {
                    $('#modalPour').modal('toggle')
                    window.location.href = '/crm/facture/' + idfa + '/' + idchantier
                }
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#addeFacture').on("click", function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addeFacture').hide()
        $('#closeFacture').hide()
        $('#loadFacture').css('display', '')
        $('#editor3').val(CKEDITOR.instances['editor3'].getData())
        $('#editor4').val(CKEDITOR.instances['editor4'].getData())
        $.ajax({
            type: 'POST',
            url: '/crm/facture/adde',
            data: JSON.stringify($('#addFactureForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#modalFacture').modal('toggle')
                    window.location.href = '/crm/facture/' + respdata['result'][0]['idfacture'] + '/' + respdata['result'][0]['idchantier'];
                }
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#updateFacture').on("click", function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#updateFacture').hide()
        $('#closeFacture').hide()
        $('#loadFacture').css('display', '')
        var id = $('#idfacture').val()
        $('#editor').val(CKEDITOR.instances['editor'].getData())
        $('#editor2').val(CKEDITOR.instances['editor2'].getData())
        $.ajax({
            type: 'PUT',
            url: '/crm/facture/update/' + id,
            data: JSON.stringify($('#updateFactureForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '200') {
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
$('#updAccFacture').on("click", function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#updAccFacture').hide()
        $('#closeAccFacture').hide()
        $('#loadAccFacture').css('display', '')
        var id = $('#idfacture').val()
        $.ajax({
            type: 'PUT',
            url: '/crm/facture/acompte/' + id,
            data: JSON.stringify($('#addAccFactureForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '200') {
                    location.reload()
                }
            },
            error: function (xhr, resp, text) {
                $('#modalAcompte').modal('toggle')
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#valideFacture').on("click", function (event) {
    event.preventDefault()
    var idfacture = $('#idfacture').val()
    $('#sideModalTR').modal('toggle')
    $('#Traitement').modal('show')
    $.ajax({
        type: 'GET',
        url: '/crm/facture/valider/' + idfacture,
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
$('#devaFacture').on("click", function (event) {
    event.preventDefault()
    var idfacture = $('#idfacture').val()
    $('#ConfirmDelete').modal('show')
    $('#accept').on("click", function () {
        $('#ConfirmDelete').modal('hide')
        $('#Traitement').modal('show')
        $.ajax({
            type: 'GET',
            url: '/crm/facture/devalider/' + idfacture,
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
$('#addLigneFacture').on("click", function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addLigneFacture').hide()
        $('#closeLigne').hide()
        $('#loadLigne').css('display', '')
        var id = $('#idfacture').val()
        var idchantier = $('#idchantier').val()
        $('#editor1').val(CKEDITOR.instances['editor1'].getData())
        $.ajax({
            type: 'POST',
            url: '/crm/ligne/add/facture/' + id,
            data: JSON.stringify($('#form3').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#modalLigne').modal('toggle')
                    window.location.href = '/crm/facture/' + id + '/' + idchantier
                }
            },
            error: function (xhr, resp, text) {
                if (xhr.status == '404') {
                    $('#ModalErreur').modal('show')
                }
            },
        })
    }
})
$('#updateLigneFacture').on("click", function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#updateLigneFacture').hide()
        $('#closeLigne').hide()
        $('#loadLigne').css('display', '')
    }
    var idligne = $('#idligne').val()
    var idfacture = $('#idfacture').val()
    var idchantier = $('#idchantier').val()
    $('#editor1').val(CKEDITOR.instances['editor1'].getData())
    $.ajax({
        type: 'PUT',
        url: '/crm/ligne/update/facture/' + idligne + '/' + idfacture,
        data: JSON.stringify($('#form3').serializeObject()),
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function (respdata, textStatus, jqXHR) {
            if (jqXHR.status == '200') {
                $('#modalLigne').modal('toggle')
                window.location.href = '/crm/facture/' + idfacture + '/' + idchantier
            }
        },
        error: function (xhr, resp, text) {
            if (xhr.status == '500') {
                $('#ModalErreur').modal('show')
            }
        },
    })
})
$('#addGroupFac').on("click", function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addGroupFac').hide();
        $('#closeGroupFac').hide();
        $('#loadGroupFac').css('display', '');
        var id = $('#idfacture').val();
        $.ajax({
            type: 'POST',
            url: '/crm/groupe/add/' + id + '/facture',
            data: JSON.stringify($('#addGroupFacForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#modalGroup').modal('toggle')
                    location.reload()
                }
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})

// DATATABLES FACTURE COTE PROJET
$(function () {
    $('#dataFACTURE').DataTable({
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
                text: '<i class="fa fa-check-square fa-2x"></i> / <i class="fa fa-square fa-2x"></i>',
                className: 'fred2',
                action: function (e, dt, node, config) {
                    if (false === $("input[class='FACTURE']").prop('checked')) {
                        $("input[class='FACTURE']").prop('checked', true)
                    } else {
                        $("input[class='FACTURE']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa fa-paperclip fa-2x col-orange"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='FACTURE']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + id + '/facture/non'
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
                    $("input:checkbox[class='FACTURE']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + id + '/facture/oui'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'FACTURE EN PDF',
            },
            {
                text: '<i class="fa fa fa-file-excel fa-2x col-light-green"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='BONNS']:checked").each(function () {
                        var id = $(this).val()
                        window.location.href = '/crm/doc/attache/' + id + '/facture/oui'
                    })
                },
                titleAttr: 'EXCEL',
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
        columnDefs: [{
            targets: 9,
            visible: false,
        },
            {orderable: false, targets: [0]},
        ],
        order: [
            [2, 'DESC']
        ],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="11" class="col-blue bolo700" style="background-color: #dbdfef">' +
                    group +
                    '</td>',
                )
            },
            dataSrc: 9,
        },
        "drawCallback": function (row, data, start, end, display) {
            const api = this.api();

            let th= api.column(6).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let ttc = api.column(7).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);


            api.column(6).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(th);
            api.column(7).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(ttc);

        }
    })
    $('#dataFACTURE2').DataTable({
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
            text: '<i class="fa fa-check-square fa-2x"></i> / <i class="fa fa-square fa-2x"></i>',
            className: 'fred2',
            action: function (e, dt, node, config) {
                if (false === $("input[class='FACTURE2']").prop('checked')) {
                    $("input[class='FACTURE2']").prop('checked', true)
                } else {
                    $("input[class='FACTURE2']").prop('checked', false)
                }
            },
            titleAttr: 'Cocher tout /  Décocher tout',
        },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='FACTURE2']:checked").each(function () {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').on("click", function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/facture/del/' + id,
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
                    $("input:checkbox[class='FACTURE2']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + id + '/facture/non'
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
                    $("input:checkbox[class='FACTURE2']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + id + '/facture/oui'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'DOCUMENT EN PDF',
            },
            {
                text: '<i class="fa fa fa-file-excel fa-2x col-light-green"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='FACTURE2']:checked").each(function () {
                        var id = $(this).val()
                        window.location.href = '/crm/doc/attache/' + id + '/facture/oui'
                    })
                },
                titleAttr: 'EXCEL',
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
        columnDefs: [{
            targets: 11,
            visible: false,
        },
            {orderable: false, targets: [0]},
            {orderable: false, targets: [1]},
        ],
        order: [
            [2, 'DESC']
        ],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="13" class="col-blue bolo700" style="background-color: #dbdfef">' +
                    group +
                    '</td>',
                )
            },
            dataSrc: 11,
        },
        "drawCallback": function (row, data, start, end, display) {
            const api = this.api();

            let th= api.column(6).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let ttc = api.column(7).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let regler = api.column(8).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let solde = api.column(9).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            api.column(6).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(th);
            api.column(7).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(ttc);
            api.column(8).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(regler);
            api.column(9).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(solde);

        }
    })
    $('#dataFACTURE3').DataTable({
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
            text: '<i class="fa fa-check-square fa-2x"></i> / <i class="fa fa-square fa-2x"></i>',
            className: 'fred2',
            action: function (e, dt, node, config) {
                if (false === $("input[class='FACTURE3']").prop('checked')) {
                    $("input[class='FACTURE3']").prop('checked', true)
                } else {
                    $("input[class='FACTURE3']").prop('checked', false)
                }
            },
            titleAttr: 'Cocher tout /  Décocher tout',
        },

            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='FACTURE3']:checked").each(function () {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').on("click", function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/facture/del/' + id,
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
                text: '<i class="fa fa fa-file-pdf fa-2x col-pink"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='FACTURE3']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + id + '/facture/oui'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'FACTURE EN PDF',
            },
            {
                text: '<i class="fa fa fa-file-excel fa-2x col-light-green"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='FACTURE3']:checked").each(function () {
                        var id = $(this).val()
                        window.location.href = '/crm/doc/attache/' + id + '/bon/oui'
                    })
                },
                titleAttr: 'EXCEL',
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
            {targets: 9, visible: false},
            {orderable: false, targets: [0]},
            {orderable: false, targets: [1]},
        ],
        order: [
            [9, 'asc']
        ],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        displayLength: 10,
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="11" class="col-blue bolo700" style="background-color: #dbdfef">' +
                    group +
                    '</td>',
                )
            },
            dataSrc: 9,
        },
    })
    $('#dataFACTURE4').DataTable({
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
            text: '<i class="fa fa-check-square fa-2x"></i> / <i class="fa fa-square fa-2x"></i>',
            className: 'fred2',
            action: function (e, dt, node, config) {
                if (false === $("input[class='FACTURE4']").prop('checked')) {
                    $("input[class='FACTURE4']").prop('checked', true)
                } else {
                    $("input[class='FACTURE4']").prop('checked', false)
                }
            },
            titleAttr: 'Cocher tout /  Décocher tout',
        },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='FACTURE4']:checked").each(function () {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').on("click", function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/facture/delete/' + id,
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
                    $("input:checkbox[class='FACTURE4']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + id + '/facture/non'
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
                    $("input:checkbox[class='FACTURE4']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/doc/attache/' + id + '/facture/oui'
                        window.setTimeout(function () {
                            $('#Traitement').modal('toggle')
                        }, 2000)
                    })
                },
                titleAttr: 'FACTURE EN PDF',
            },
            {
                text: '<i class="fa fa fa-file-excel fa-2x col-light-green"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='FACTURE4']:checked").each(function () {
                        var id = $(this).val()
                        window.location.href = '/crm/doc/attache/' + id + '/facture/oui'
                    })
                },
                titleAttr: 'FACTURE EN EXCEL',
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
        columnDefs: [{
            targets: 9,
            visible: false,
        },
            {orderable: false, targets: [0]},
            {orderable: false, targets: [1]},
        ],
        order: [
            [9, 'asc']
        ],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        displayLength: 10,
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="11" class="col-blue bolo700" style="background-color: #dbdfef">' +
                    group +
                    '</td>',
                )
            },
            dataSrc: 9,
        },
    })


})