$('#addDecompte').on("click", function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addDecompte').hide()
        $('#closeDecompte').hide()
        $('#loadDecompte').css('display', '')
        const idchantier = $('#idchantier').val();
        $.ajax({
            type: 'POST',
            url: '/crm/decompte/add/' + idchantier,
            data: JSON.stringify($('#addDecompteForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#mdModalDecompte').modal('toggle')
                    window.location.href = '/crm/decompte/' + respdata['result'] + '/' + idchantier
                }
            },
            error: function (xhr, resp, text) {
                $('#mdModalDecompte').modal('toggle')
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#addeDecompte').on("click",function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addeDecompte').hide()
        $('#closeDecompte').hide()
        $('#loadDecompte').css('display', '')
        $.ajax({
            type: 'POST',
            url: '/crm/decompte/adde',
            data: JSON.stringify($('#addDecompteForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                window.location.href = '/crm/decompte/' + respdata['result'][0]['iddecompte'] + '/' + respdata['result'][0]['idchantier'];
            },
            error: function (xhr, resp, text) {
                $('#mdModalDecompte').modal('toggle')
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#updateDecompte').on("click",function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#updateDecompte').hide()
        $('#closeUpDecompte').hide()
        $('#loadUpDecompte').css('display', '')
        var id = $('#iddecompte').val()
        $.ajax({
            type: 'PUT',
            url: '/crm/decompte/update/' + id,
            data: JSON.stringify($('#updateDecompteForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '200') {
                    $('#mdModalDecompte').modal('toggle')
                    location.reload()
                }
            },
            error: function (xhr, resp, text) {
                $('#mdModalDecompte').modal('toggle')
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#reloadDevis').on("click",function (event) {
    event.preventDefault()
    var iddecompte = $('#iddecompte').val()
    $('#Traitement').modal('show')
    $.ajax({
        type: 'GET',
        url: '/crm/decompte/reloaddevis/' + iddecompte,
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

$('#toutvalider').on("click",function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#toutvalider').hide()
        $('#loadtout').css('display', '')
        var id = $('#iddecompte').val()
        $.ajax({
            type: 'POST',
            url: '/crm/ligne/updateres/' +id,
            data: JSON.stringify($('#toutvaliderform').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '200') {
                    location.reload()
                }
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#toutvalider2').on("click",function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#toutvalider2').hide()
        $('#load2tout').css('display', '')
        var id = $('#iddecompte').val()
        $.ajax({
            type: 'POST',
            url: '/crm/ligne/updateres/' +id,
            data: JSON.stringify($('#toutvaliderform2').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '200') {
                    location.reload()
                }
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#valideDecompte').on("click",function (event) {
    event.preventDefault()
    var iddecompte = $('#iddecompte').val()
    $('#Traitement').modal('show')
    $.ajax({
        type: 'GET',
        url: '/crm/decompte/valider/' + iddecompte,
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
$('#devalideDecompte').on("click",function (event) {
    event.preventDefault()
    var iddecompte = $('#iddecompte').val()
    $('#Traitement').modal('show')
    $.ajax({
        type: 'GET',
        url: '/crm/decompte/devalider/' + iddecompte,
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
$('#deleteDecompte').on("click",function (event) {
    event.preventDefault()
    var id = $('#iddecompte').val();
    $('#ConfirmDelete').modal('show');
    $('#accept').on("click",async function () {
        $('#ConfirmDelete').modal('hide');
        $('#Traitement').modal('show');
        await axios({
            method: 'DELETE',
            url: '/crm/decompte/del/' + id,
        }).then(function (response) {
            window.location.href = '/crm/chantiers'
        }).catch(function (error) {
            $('#ModalErreur').modal('show')
        });
    });
})
$("#devdec").on('change', async function () {
    const id = $('select[name="devdec"] :selected').attr('class');
    $(".devcoy").empty();
    $(".devcoy").append('<span class="col-pink">Chargement... </span> <img src="/img/loading.gif" style="width: 20px">');
    await axios({
        method: 'POST',
        url: '/crm/devis/get/' + id,
        dataType: 'json',
    }).then(function (response) {
        let data = response.data;

        if(data.acomrage > 0){$("#acomrage").val(data.acomrage);}else{$("#acomrage").val("0.00");}
        if(data.garantie > 0){$("#garantie").val(data.garantie);}else{$("#garantie").val("0.00");}
        if(data.finition > 0  ){$("#finition").val(data.finition);}else{$("#finition").val("0.00");}
        if(data.prorata > 0){$("#prorata").val(data.prorata);}else{$("#prorara").val("0.00");}

        $(".devcoy").empty();
        $(".devcoy").append('<span class="col-green">Données chargées <i class="fa fa-check-circle fa-1x"></i></span>');
    });

})
$('#pdfDecompte').on("click",function (event) {
    event.preventDefault();
    const id = $('#iddecompte').val();
    $("#prpdf").css("display", "block");
    window.location.href = "http://127.0.0.1:8000/crm/doc/attache/"+id+"/pdfdecompte/oui";
})
window.printDecEntete = function printDecEntete() {
    window.frames[1].focus();
    window.frames[1].print();
    return false;
}
window.printDecSaEntete = function printDecSaEntete() {
    $('#frame').css("display", "none");
    window.frames[1].focus();
    window.frames[1].print();
    return false;
}