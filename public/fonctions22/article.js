$('.refarticle').on('input', function(e) {
    var a = $(this).val()
    if (a.length > 2) {
        $.ajax({
            type: 'POST',
            url: '/crm/article/search/' + a,
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                if (jqXHR.status == '200') {
                    document.getElementById('article').innerHTML = ' '
                    let obj = JSON.parse(respdata['result'])
                    for (var i = 1; i <= obj[0]['count']; i++) {
                        var iden = obj[i]['id']
                        var desi = obj[i]['refe']
                        var opt = document.createElement('OPTION')
                        opt.setAttribute('value', iden)
                        var t = document.createTextNode(desi)
                        opt.appendChild(t)
                        document.getElementById('article').appendChild(opt)
                    }
                }
            },
            error: function(xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#typear').on('change', function () {
    const dd = $('#typear option:selected').val();
    if (dd === "2") {
        $('.stock').addClass('disabled');
    }else{
        $('.stock').removeClass('disabled');
    }

})

/// FORMULAIRE AJOUTER UNE FAMILLE
$('#addFamille').click(function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addFamille').hide()
        $('#closeFamille').hide()
        $('#loadFamille').css('display', '')
        $.ajax({
            type: 'POST',
            url: '/crm/famille/add/1',
            data: JSON.stringify($('#addFamilleForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#modalFamille').modal('toggle')
                    location.reload()
                }
            },
            error: function(xhr, resp, text) {
                if (xhr.status == '404') {
                    $('#modalFamille').modal('toggle')
                    $('#ModalErreur').modal('show')
                }
            },
        })
    }
})
$('#addeFamille').click(function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addeFamille').hide()
        $('#closeFamille').hide()
        $('#loadFamille').css('display', '')
        $.ajax({
            type: 'POST',
            url: '/crm/famille/add/2',
            data: JSON.stringify($('#addFamilleForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#modalFamille').modal('toggle')
                    location.reload()
                }
            },
            error: function(xhr, resp, text) {
                if (xhr.status == '404') {
                    $('#modalFamille').modal('toggle')
                    $('#ModalErreur').modal('show')
                }
            },
        })
    }
})
$('#updateFamille').click(function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#updateFamille').hide()
        $('#closeFamille').hide()
        $('#loadFamille').css('display', '')
        var id = $('#idfamille').val();
        $.ajax({
            type: 'POST',
            url: '/crm/famille/update/' + id,
            data: JSON.stringify($('#addFamilleForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    if (respdata['result'] == 1) {
                        window.location.href = '/crm/article/';
                    } else {
                        window.location.href = '/crm/materiel/';
                    }
                }
            },
            error: function(xhr, resp, text) {
                if (xhr.status == '404') {
                    $('#modalFamille').modal('toggle')
                    $('#ModalErreur').modal('show')
                }
            },
        })
    }
})

/// FORMULAIRE AJOUTER UNE SOUS-FAMILLE
$('#addSFamille').click(function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addSFamille').hide()
        $('#closeSFamille').hide()
        $('#loadSFamille').css('display', '')
        $.ajax({
            type: 'POST',
            url: '/crm/sousfamille/add',
            data: JSON.stringify($('#addSFamilleForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#modalSousFamille').modal('toggle')
                    location.reload()
                }
            },
            error: function(xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})

$('#updateSFamille').click(function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#updateSFamille').hide()
        $('#closeSFamille').hide()
        $('#loadSFamille').css('display', '')
        var id = $('#idsfamille').val();
        $.ajax({
            type: 'POST',
            url: '/crm/sousfamille/update/' + id,
            data: JSON.stringify($('#addSFamilleForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    window.location.href = '/crm/article/';
                }
            },
            error: function(xhr, resp, text) {
                if (xhr.status == '404') {
                    $('#ModalErreur').modal('show')
                }
            },
        })
    }
})



$('#addFourn').click(function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addFourn').hide()
        $('#closeFourn').hide()
        $('#loadFourn').css('display', '')
        $.ajax({
            type: 'POST',
            url: '/crm/fournisseur/add/1',
            data: JSON.stringify($('#addFournisseurForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#modalFournisseur').modal('toggle')
                    location.reload()
                }
            },
            error: function(xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#addPresta').click(function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addPresta').hide()
        $('#closePresta').hide()
        $('#loadPresta').css('display', '')
        $.ajax({
            type: 'POST',
            url: '/crm/fournisseur/presta/add/3',
            data: JSON.stringify($('#addPrestataireForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#modalPrestataire').modal('toggle')
                    location.reload()
                }
            },
            error: function(xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})

$('#addeFourn').click(function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addeFourn').hide()
        $('#closeFourn').hide()
        $('#loadFourn').css('display', '')
        $.ajax({
            type: 'POST',
            url: '/crm/fournisseur/add/2',
            data: JSON.stringify($('#addFournisseurForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#modalFournisseur').modal('toggle')
                    location.reload()
                }
            },
            error: function(xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})

$('#updateFourn').click(function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#updateFourn').hide()
        $('#closeFourn').hide()
        $('#loadFourn').css('display', '')
        var id = $('#idfourn').val();
        $.ajax({
            type: 'POST',
            url: '/crm/fournisseur/update/' + id,
            data: JSON.stringify($('#addFournisseurForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#modalFournisseur').modal('toggle')
                    if (respdata['result'] == 1) {
                        window.location.href = '/crm/article/';
                    } else {
                        window.location.href = '/crm/materiel/';
                    }
                }
            },
            error: function(xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})

/// FORMULAIRE AJOUTER UNE SOUS-FAMILLE
function addparticle(id) {
    $('#Traitement').modal('show')
    $.ajax({
        type: 'POST',
        url: '/crm/article/ajouter/' + id,
        success: function(respdata, textStatus, jqXHR) {
            if (jqXHR.status == '200') {
                location.reload();
            }
        },
        error: function(xhr, resp, text) {

        },
    })
}
$('#addArticle').click(function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addArticle').hide()
        $('#closeArticle').hide()
        $('#loadArticle').css('display', '')
        $('#editor').val(CKEDITOR.instances['editor'].getData())
        $.ajax({
            type: 'POST',
            url: '/crm/article/add',
            data: JSON.stringify($('#form4').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#modalArticle').modal('toggle')
                    location.reload()
                }
            },
            error: function(xhr, resp, text) {

            },
        })
    }
})
$('#updateArticle').click(function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#updateArticle').hide()
        $('#closeArticle').hide()
        $('#loadArticle').css('display', '')
        var ide = $('#idarticle').val();
        $('#editor').val(CKEDITOR.instances['editor'].getData())
        $.ajax({
            type: 'POST',
            url: '/crm/article/update/' + ide,
            data: JSON.stringify($('#form4').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#modalArticle').modal('toggle')
                    window.location.href = '/crm/article/'
                }
            },
            error: function(xhr, resp, text) {

            },
        })
    }
})

$(function() {
    $('#dataSOUSFAMILLE').DataTable({
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
        order: [
            [1, 'desc']
        ],
        dom: 'Bfrtip',
        buttons: [{
            text: '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
            className: 'fred2',
            action: function(e, dt, node, config) {
                if (false === $("input[class='SOUSFA']").prop('checked')) {
                    $("input[class='SOUSFA']").prop('checked', true)
                } else {
                    $("input[class='SOUSFA']").prop('checked', false)
                }
            },
            titleAttr: 'Cocher tout /  Décocher tout',
        },
            {
                text: '<i class="fa fa fa-edit fa-2x"></i>',
                className: 'edit',
                action: function(e, dt, node, config) {
                    $("input:checkbox[class='SOUSFA']:checked").each(function() {
                        var idprojet = $('#idprojet').val()
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/article/sousfamille/' + id
                    })
                },
                titleAttr: 'Modifier',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function(e, dt, node, config) {
                    $("input:checkbox[class='SOUSFA']:checked").each(function() {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function() {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/sousfamille/del/' + id,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function(respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '204') {
                                        $('#Traitement').modal('hide')
                                        window.location.href = '/crm/article/'
                                    }
                                },
                                error: function(xhr, resp, text) {

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
        columnDefs: [{
            targets: 2,
            visible: false,
        }, ],
        displayLength: 10,
        rowGroup: {
            startRender: function(rows, group) {
                return $('<tr/>').append(
                    '<td colspan="4" class="bg-gray-300 text-pri"  style="color: #4e73df !important;">' +
                    group +
                    '</td>',
                )
            },
            dataSrc: 2,
        },
    })
    $('#dataARTICLES').DataTable({
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
                    if (false === $("input[class='ARTYS']").prop('checked')) {
                        $("input[class='ARTYS']").prop('checked', true)
                    } else {
                        $("input[class='ARTYS']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa fa-edit fa-2x"></i>',
                className: 'edit',
                action: function(e, dt, node, config) {
                    $("input:checkbox[class='ARTYS']:checked").each(function() {
                        const id = $(this).val();
                        window.location.href = '/crm/article/' + id
                    })
                },
                titleAttr: 'Modifier',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function(e, dt, node, config) {
                    $("input:checkbox[class='ARTYS']:checked").each(function() {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function() {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/article/delete/' + id,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function(respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '200') {
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
                text: '15',
                className: 'fred3',
                extend: 'pageLength',
            },
        ],
        lengthMenu: [
            [15, 40, 60, 80, 100, -1],
            ['15', '40', '60', '80', '100', 'Tout'],
        ],
        displayLength: 15,
        columnDefs: [
            { orderable: false, targets: [0, 4, 5] },
            {
                targets: 1,
                visible: false,
            },
        ],
        order: [
            [1, 'asc']
        ],
        rowGroup: {
            startRender: function(rows, group) {
                return $('<tr/>').append(
                    '<td colspan="6" class="bg-gray-300 text-pri"  style="color: #4e73df !important;">' +
                    group +
                    '</td>',
                )
            },
            dataSrc: 1,
        },
    })
    $('#dataARTY').DataTable({
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
                if (false === $("input[class='ARTYS2']").prop('checked')) {
                    $("input[class='ARTYS2']").prop('checked', true)
                } else {
                    $("input[class='ARTYS2']").prop('checked', false)
                }
            },
            titleAttr: 'Cocher tout /  Décocher tout',
        },
            {
                text: '<i class="fa fa fa-edit fa-2x"></i>',
                className: 'edit',
                action: function(e, dt, node, config) {
                    $("input:checkbox[class='ARTYS2']:checked").each(function() {
                        var id = $(this).val()
                        window.location.href = '/crm/article/' + id
                    })
                },
                titleAttr: 'Modifier',
            },
            {
                text: '<i class="fa fa-share-alt fa-2x"></i>',
                className: 'valide',
                action: function(e, dt, node, config) {
                    $("input:checkbox[class='ARTYS2']:checked").each(function() {
                        var id = $(this).val()
                        $('#myModal').modal('show')
                        axios({
                            method: 'post',
                            url: '/crm/article/partage/' + id,
                        })
                            .then(function(response) {
                                $('#myModal').modal('hide')
                                $('#myModal1').modal('show')
                                window.setTimeout(function() {
                                    $('#myModal1').modal('hide')
                                }, 1500)
                                location.reload()
                            })
                            .catch(function(error) {
                                $('#myModal').modal('hide')
                                $('#myModal2').modal('show')
                                window.setTimeout(function() {
                                    $('#myModal2').modal('hide')
                                }, 2000)
                            })
                    })
                },
                titleAttr: 'Partager',
            },
            {
                text: '<i class="fa fa-shopping-cart fa-2x"></i>',
                className: 'printt',
                action: function(e, dt, node, config) {
                    $("input:checkbox[class='ARTYS2']:checked").each(function() {
                        var id = $(this).val()
                        $('#myModal').modal('show')
                        axios({
                            method: 'post',
                            url: '/article/vente/' + id,
                        })
                            .then(function(response) {
                                $('#myModal').modal('hide')
                                $('#myModal1').modal('show')
                                window.setTimeout(function() {
                                    $('#myModal1').modal('hide')
                                }, 1500)
                                location.reload()
                            })
                            .catch(function(error) {
                                $('#myModal').modal('hide')
                                $('#myModal2').modal('show')
                                window.setTimeout(function() {
                                    $('#myModal2').modal('hide')
                                }, 2000)
                            })
                    })
                },
                titleAttr: 'vendre',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function(e, dt, node, config) {
                    $("input:checkbox[class='ARTYS2']:checked").each(function() {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function() {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/article/delete/' + id,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function(respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '200') {
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
                text: '15',
                className: 'fred3',
                extend: 'pageLength',
            },
        ],
        lengthMenu: [
            [15, 40, 60, 80, 100, -1],
            ['15', '40', '60', '80', '100', 'Tout'],
        ],
        displayLength: 15,
        columnDefs: [
            { orderable: false, targets: [0] },
            {
                targets: 1,
                visible: false,
            },
        ],
        order: [
            [1, 'asc']
        ],
        rowGroup: {
            startRender: function(rows, group) {
                return $('<tr/>').append(
                    '<td colspan="5" class="bg-light text-pri"  style="color: #4e73df !important;">' +
                    group +
                    '</td>',
                )
            },
            dataSrc: 1,
        },
    })
    $('#dataFAMILLE').DataTable({
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
        columnDefs: [{ orderable: false, targets: [0] }],
        order: [
            [1, 'desc']
        ],
        dom: 'Bfrtip',
        buttons: [{
            text: '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
            className: 'fred2',
            action: function(e, dt, node, config) {
                if (false === $("input[class='FAMY']").prop('checked')) {
                    $("input[class='FAMY']").prop('checked', true)
                } else {
                    $("input[class='FAMY']").prop('checked', false)
                }
            },
            titleAttr: 'Cocher tout /  Décocher tout',
        },
            {
                text: '<i class="fa fa fa-edit fa-2x"></i>',
                className: 'edit',
                action: function(e, dt, node, config) {
                    $("input:checkbox[class='FAMY']:checked").each(function() {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/article/famille/' + id
                    })
                },
                titleAttr: 'Modifier',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function(e, dt, node, config) {
                    $("input:checkbox[class='FAMY']:checked").each(function() {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function() {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/famille/del/' + id,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function(respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '204') {
                                        location.reload()
                                    }
                                },
                                error: function(xhr, resp, text) {},
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
        displayLength: 15,
    })
    $('#dataFAMILLEMAT').DataTable({
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
        columnDefs: [{ orderable: false, targets: [0] }],
        order: [
            [1, 'desc']
        ],
        dom: 'Bfrtip',
        buttons: [{
            text: '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
            className: 'fred2',
            action: function(e, dt, node, config) {
                if (false === $("input[class='FAMY']").prop('checked')) {
                    $("input[class='FAMY']").prop('checked', true)
                } else {
                    $("input[class='FAMY']").prop('checked', false)
                }
            },
            titleAttr: 'Cocher tout /  Décocher tout',
        },
            {
                text: '<i class="fa fa fa-edit fa-2x"></i>',
                className: 'edit',
                action: function(e, dt, node, config) {
                    $("input:checkbox[class='FAMY']:checked").each(function() {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/materiel/famille/' + id
                    })
                },
                titleAttr: 'Modifier',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function(e, dt, node, config) {
                    $("input:checkbox[class='FAMY']:checked").each(function() {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function() {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/famille/del/' + id,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function(respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '204') {
                                        location.reload()
                                    }
                                },
                                error: function(xhr, resp, text) {},
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
        displayLength: 15,
    })
    $('#dataFOURNISSEUR').DataTable({
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
        columnDefs: [{ orderable: false, targets: [0] }],
        order: [
            [1, 'desc']
        ],
        dom: 'Bfrtip',
        buttons: [{
            text: '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
            className: 'fred2',
            action: function(e, dt, node, config) {
                if (false === $("input[class='FOUR']").prop('checked')) {
                    $("input[class='FOUR']").prop('checked', true)
                } else {
                    $("input[class='FOUR']").prop('checked', false)
                }
            },
            titleAttr: 'Cocher tout /  Décocher tout',
        },
            {
                text: '<i class="fa fa fa-edit fa-2x"></i>',
                className: 'edit',
                action: function(e, dt, node, config) {
                    $("input:checkbox[class='FOUR']:checked").each(function() {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/article/fournisseur/' + id
                    })
                },
                titleAttr: 'Modifier',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function(e, dt, node, config) {
                    $("input:checkbox[class='FOUR']:checked").each(function() {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function() {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/fournisseur/del/' + id,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function(respdata, textStatus, jqXHR) {
                                    location.reload()
                                },
                                error: function(xhr, resp, text) {},
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
        displayLength: 15,
    })
    $('#dataFOURNISSEURMAT').DataTable({
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
        columnDefs: [{ orderable: false, targets: [0] }],
        order: [
            [1, 'desc']
        ],
        dom: 'Bfrtip',
        buttons: [{
            text: '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
            className: 'fred2',
            action: function(e, dt, node, config) {
                if (false === $("input[class='FOUR']").prop('checked')) {
                    $("input[class='FOUR']").prop('checked', true)
                } else {
                    $("input[class='FOUR']").prop('checked', false)
                }
            },
            titleAttr: 'Cocher tout /  Décocher tout',
        },
            {
                text: '<i class="fa fa fa-edit fa-2x"></i>',
                className: 'edit',
                action: function(e, dt, node, config) {
                    $("input:checkbox[class='FOUR']:checked").each(function() {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/materiel/fournisseur/' + id
                    })
                },
                titleAttr: 'Modifier',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function(e, dt, node, config) {
                    $("input:checkbox[class='FOUR']:checked").each(function() {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function() {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/materiel/fournisseur/del/' + id,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function(respdata, textStatus, jqXHR) {
                                    location.reload()
                                },
                                error: function(xhr, resp, text) {
                                    $('#Traitement').modal('hide');
                                    $('#ModalErreur').modal('show');
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
        displayLength: 15,
    })
    $('#dataPARTAGER').DataTable({
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
            action: function(e, dt, node, config) {
                if (false === $("input[class='PARTA']").prop('checked')) {
                    $("input[class='PARTA']").prop('checked', true)
                } else {
                    $("input[class='PARTA']").prop('checked', false)
                }
            },
            titleAttr: 'Cocher tout /  Décocher tout',
        },
            {
                text: '<i class="fa fa-download fa-2x"></i>',
                className: 'valide',
                action: function(e, dt, node, config) {
                    $("input:checkbox[class='PARTA']:checked").each(function() {
                        var idpartage = $(this).val()
                        $('#myModal').modal('show')
                        axios({
                            method: 'post',
                            url: '/partage/article/' + idpartage + '/p',
                        })
                            .then(function(response) {
                                $('#myModal').modal('hide')
                                $('#myModal1').modal('show')
                                window.setTimeout(function() {
                                    $('#myModal1').modal('hide')
                                }, 1500)
                                location.reload()
                            })
                            .catch(function(error) {
                                $('#myModal').modal('hide')
                                $('#myModal2').modal('show')
                                window.setTimeout(function() {
                                    $('#myModal2').modal('hide')
                                }, 2000)
                            })
                    })
                },
                titleAttr: 'Ajouter à mes articles',
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
        displayLength: 8,
        columnDefs: [{ orderable: false, targets: [0] }],
        order: [
            [1, 'DESC']
        ],
        lengthMenu: [
            [20, 50, 80, 160, -1],
            ['20', '50', '80', '160', 'Tout'],
        ],
    })
    const groupColumn = 0;
    $('#dataRECAP').DataTable({
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
        lengthMenu: [
            [160, 240, 320, 420, -1],
            ['160', '240', '320', '420', 'Tout'],
        ],

        order: [[0, 'asc']],
        displayLength: 15,
    })
    $('#dataINVE').DataTable({
        "searching": false,
        "dom": 'rtip',
        columnDefs: [
            {
                targets: groupColumn,
                visible: false,
            },
        ],
        order: [[0, 'asc']],
        displayLength: 1500,
        rowGroup: {
            startRender: function (rows, group) {
                var qte = rows
                    .data()
                    .pluck(2)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var ht = rows
                    .data()
                    .pluck(3)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)


                var ttc = rows
                    .data()
                    .pluck(4)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                qte = $.fn.dataTable.render.number(' ', ',', 2, '').display(qte)
                ht = $.fn.dataTable.render.number(' ', ',', 2, '').display(ht)
                ttc = $.fn.dataTable.render.number(' ', ',', 2, '').display(ttc)

                return $('<tr/>')
                    .append(
                        '<td class="col-black bolo700" style="background-color: #dbdfef">' +
                        group +
                        '</td>',
                    )
                    .append(
                        '<td align="right" style="background-color: #dbdfef">' +
                        qte +
                        '</td>',
                    )
                    .append(
                        '<td align="right" style="background-color: #dbdfef">'+ht+'</td>',
                    )
                    .append(
                        '<td align="right" style="background-color: #dbdfef">' +
                        ttc +
                        '</td>',
                    )
            },
            dataSrc: 0,
        },
    })
    $('#dataINVENTE').DataTable({
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
        columnDefs: [
            {
                targets: groupColumn,
                visible: false,
            },
        ],
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
        lengthMenu: [
            [160, 240, 320, 420, -1],
            ['160', '240', '320', '420', 'Tout'],
        ],

        order: [[0, 'asc']],
        displayLength: 15,
        rowGroup: {
            startRender: function (rows, group) {
                var qte = rows
                    .data()
                    .pluck(2)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)


                var ttc = rows
                    .data()
                    .pluck(4)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                qte = $.fn.dataTable.render.number(' ', ',', 2, '').display(qte)
                ttc = $.fn.dataTable.render.number(' ', ',', 2, '').display(ttc)

                return $('<tr/>')
                    .append(
                        '<td class="col-black bolo700" style="background-color: #dbdfef">' +
                        group +
                        '</td>',
                    )
                    .append(
                        '<td align="right" style="background-color: #dbdfef">' +
                        qte +
                        '</td>',
                    )
                    .append(
                        '<td align="right" style="background-color: #dbdfef">-</td>',
                    )
                    .append(
                        '<td align="right" style="background-color: #dbdfef">' +
                        ttc +
                        '</td>',
                    )
            },
            dataSrc: 0,
        },
    })
    $('#dataINVENTEUR').DataTable({
        "searching": false,
        "dom": 'rtip',
        columnDefs: [
            {targets: groupColumn, visible: false},
            { orderable: false, targets: [0,1,2,3,4,5]},
        ],
        displayLength: 100000,
        rowGroup: {
            startRender: function (rows, group) {
                var qte = rows
                    .data()
                    .pluck(2)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var ht = rows
                    .data()
                    .pluck(3)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var ttc = rows
                    .data()
                    .pluck(4)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                qte = $.fn.dataTable.render.number(' ', ',', 2, '').display(qte)
                ht = $.fn.dataTable.render.number(' ', ',', 2, '').display(ht)
                ttc = $.fn.dataTable.render.number(' ', ',', 2, '').display(ttc)

                return $('<tr/>')
                    .append(
                        '<td class="col-black bolo700" style="background-color: #dbdfef">' +
                        group +
                        '</td>',
                    )
                    .append(
                        '<td align="right" style="background-color: #dbdfef">' +
                        qte +
                        '</td>',
                    )
                    .append(
                        '<td align="right" style="background-color: #dbdfef">' +
                        ht +
                        '</td>',
                    )
                    .append(
                        '<td align="right" style="background-color: #dbdfef">' +
                        ttc +
                        '</td>',
                    )
            },
            dataSrc: 0,
        },
    })
    $('#dataSTOCK').DataTable({
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
                    if (false === $("input[class='STOCK']").prop('checked')) {
                        $("input[class='STOCK']").prop('checked', true)
                    } else {
                        $("input[class='STOCK']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa fa-edit fa-2x"></i>',
                className: 'edit',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='STOCK']:checked").each(function () {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        var idchantier = $('#idchantier').val();
                        window.location.href = '/crm/chantier/recap/'+id+'/'+idchantier
                    })
                },
                titleAttr: 'Modifier',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='STOCK']:checked").each(function () {
                        var idchantier = $('#idchantier').val()
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/chantier/recap/del/' + id,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '204') {
                                        $('#Traitement').modal('hide')
                                        window.location.href = '/crm/chantier/' + idchantier
                                    }
                                },
                                error: function (xhr, resp, text) {},
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

$('#updateRecap').click(function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#updateRecap').hide()
        $('#closeRecap').hide()
        $('#loadRecap').css('display', '');
        var id = $('#idrecap').val();
        var idchantier = $('#idchantier').val();
        $.ajax({
            type: 'PUT',
            url: '/crm/chantier/recap/update/' + id ,
            data: JSON.stringify($('#addRecapForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                    window.location.href = '/crm/chantier/'+ idchantier
            },
            error: function (xhr, resp, text) {
                $('#mdModalRecap').modal('toggle')
                $('#ModalErreur').modal('show')
            },
        })
    }
})