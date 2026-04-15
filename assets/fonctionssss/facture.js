import $ from 'jquery';
import axios from "axios";

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
