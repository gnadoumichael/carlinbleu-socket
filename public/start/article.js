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

$(document).on('input', '#richis', function(){
    if($(this).val().length >= 2) {
        $.ajax({
            type: 'POST',
            url: '/crm/chantier/search/' + $(this).val(),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '200') {
                    document.getElementById('ressulte').innerHTML = ' '
                    let obj = JSON.parse(respdata['result'])
                    for (let i = 1; i <= obj[0]['count']; i++) {
                        const link = obj[i]['link'];
                        const desi = obj[i]['refe'];
                        const opt = document.createElement('H6');
                        const aa = document.createElement("A");
                        aa.setAttribute("href",link);
                        const t = document.createTextNode(desi);
                        const tt = document.createTextNode('# ');
                        aa.appendChild(t)
                        opt.appendChild(tt)
                        opt.appendChild(aa)
                        document.getElementById('ressulte').appendChild(opt)
                        document.getElementById('ressulte').style.visibility = 'visible'
                    }
                }
            },
            error: function (xhr, resp, text) {},
        })
    }
});