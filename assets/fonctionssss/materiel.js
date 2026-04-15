import $ from 'jquery';

$(document).ready(function() {
    $('#dataMateriel').DataTable({
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
            { orderable: false, targets: [0] },
        ],
        order: [
            [0, 'DESC']
        ],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
    })
})

$(document).ready(function() {
    $('#dataMateriel1').DataTable({
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
                    if (false === $("input[class='BONNS']").prop('checked')) {
                        $("input[class='BONNS']").prop('checked', true)
                    } else {
                        $("input[class='BONNS']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
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
                targets: 6,
                visible: false,
            },
            { orderable: false, targets: [0] },
        ],
        order: [
            [0, 'DESC']
        ],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        rowGroup: {
            startRender: function(rows, group) {
                return $('<tr/>').append(
                    '<td colspan="7" class="bg-gray-300" style="color: #4e73df !important;">' +
                    group +
                    '</td>',
                )
            },
            dataSrc: 6,
        },
    })
})

$(document).ready(function() {
    $('#dataMateriel2').DataTable({
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
                    if (false === $("input[class='MATS']").prop('checked')) {
                        $("input[class='MATS']").prop('checked', true)
                    } else {
                        $("input[class='MATS']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa fa-edit fa-2x"></i>',
                className: 'edit',
                action: function(e, dt, node, config) {
                    $("input:checkbox[class='MATS']:checked").each(function() {
                        var id = $(this).val()
                        $('#Traitement').modal('show')
                        window.location.href = '/crm/materiel/' + id
                    })
                },
                titleAttr: 'Modifier',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function(e, dt, node, config) {
                    $("input:checkbox[class='MATS']:checked").each(function() {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function() {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/materiel/del/' + id,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function(respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '200') {
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
                text: '15',
                className: 'fred3',
                extend: 'pageLength',
            },
        ],
        columnDefs: [{
                targets: 5,
                visible: false,
            },
            { orderable: false, targets: [0] },
        ],
        order: [
            [0, 'DESC']
        ],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        rowGroup: {
            startRender: function(rows, group) {
                return $('<tr/>').append(
                    '<td colspan="8" class="bg-gray-300" style="color: #4e73df !important;">' +
                    group +
                    '</td>',
                )
            },
            dataSrc: 5,
        },
    })
})

// ADD MATERIEL
$('#addMateriel').click(function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addMateriel').hide()
        $('#closeMateriel').hide()
        $('#loadMateriel').css('display', '')
        $.ajax({
            type: 'POST',
            url: '/crm/materiel/add',
            data: JSON.stringify($('#addMaterielForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#ajouterMATERIEL').modal('toggle')
                    location.reload()
                }
            },
            error: function(xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})

/// FORMULAIRE AFFECTER MATERIEL PROJET
$('#affMatChantier').click(function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#affMatChantier').hide()
        $('#closeAffMatChantier').hide()
        $('#loadAffMatChantier').css('display', '')
        $.ajax({
            type: 'POST',
            url: '/crm/materiel/affmat/chantier',
            data: JSON.stringify($('#affMatChantierForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                if (jqXHR.status == '200') {
                    location.reload()
                }
            },
            error: function(xhr, resp, text) {
                $('#affecterMaterielProjet').modal('toggle')
                $('#ModalErreur').modal('show');
                $('#attrMatchantier').show();
                $('#closeAffMatchantier').show();
                $('#loadAffMatChantier').hide();
            },
        })
    }
})

$('#attrMatBenef').click(function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#attrMatBenef').hide()
        $('#closeAttriMatBenef').hide()
        $('#loadAttribuerMatBenef').css('display', '')
        $.ajax({
            type: 'POST',
            url: '/crm/materiel/attrmat/benef',
            data: JSON.stringify($('#attribuerMatBenefForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                location.reload()
            },
            error: function(xhr, resp, text) {
                $('#attribuerBENEFICIAIRE').modal('toggle');
                $('#ModalErreur').modal('show');
                $('#attrMatBenef').show();
                $('#closeAttriMatBenef').show();
                $('#loadAttribuerMatBenef').hide();
            },
        })
    }
})

$('#updateMateriel').click(function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#updateMateriel').hide()
        $('#closeMateriel').hide()
        $('#loadMateriel').css('display', '')
        var id = $('#idmateriel').val();
        $.ajax({
            type: 'PUT',
            url: '/crm/materiel/update/' + id,
            data: JSON.stringify($('#addMaterielForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                window.location.href = '/crm/materiel'
            },
            error: function(xhr, resp, text) {
                $('#ajouterMATERIEL').modal('toggle');
                $('#ModalErreur').modal('show');
                $('#updateMateriel').show()
                $('#closeMateriel').show()
                $('#loadMateriel').hide()
            },
        })
    }
})

$('#restChantier').click(function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#restChantier').hide()
        $('#closeRestChantier').hide()
        $('#loadRestChantier').css('display', '')
        $.ajax({
            type: 'POST',
            url: '/crm/materiel/restitue/chantier',
            data: JSON.stringify($('#restituerChantierForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                location.reload()
            },
            error: function(xhr, resp, text) {
                $('#restituerChantier').modal('toggle');
                $('#ModalErreur').modal('show');
                $('#restChantier').show();
                $('#closeRestChantier').show();
                $('#loadRestChantier').hide();
            },
        })
    }
})

$('#restBenef').click(function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#restBenef').hide()
        $('#closeRestBenef').hide()
        $('#loadRestBenef').css('display', '')
        $.ajax({
            type: 'POST',
            url: '/crm/materiel/restituer/benef',
            data: JSON.stringify($('#restituerBenefForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                location.reload()
            },
            error: function(xhr, resp, text) {
                $('#restituerBenef').modal('toggle');
                $('#ModalErreur').modal('show');
                $('#restBenef').show();
                $('#closeRestBenef').show();
                $('#loadRestBenef').hide();
            },
        })
    }
})

