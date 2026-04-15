$('#addPers').off().on("click",function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addPers').hide()
        $('#closePers').hide()
        $('#loadPers').css('display', '')
        $.ajax({
            type: 'POST',
            url: '/crm/personnel/add',
            data: JSON.stringify($('#addPersonnelForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                location.reload()
            },
            error: function(xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#addSer').off().on("click",function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addSer').hide()
        $('#closeSer').hide()
        $('#loadSer').css('display', '')
        $.ajax({
            type: 'POST',
            url: '/crm/personnel/service/add',
            data: JSON.stringify($('#addServiceForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                location.reload()
            },
            error: function(xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#addInter').off().on("click",function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addInter').hide()
        $('#closeInter').hide()
        $('#loadInter').css('display', '')

        $.ajax({
            type: 'POST',
            url: '/crm/personnel/operation/add',
            data: JSON.stringify($('#addInterForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                location.reload()
            },
            error: function(xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#updatePers').off().on("click",function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#updatePers').hide()
        $('#closePers').hide()
        $('#loadPers').css('display', '')
        var idperson = $('#idperson').val()
        $.ajax({
            type: 'POST',
            url: '/crm/personnel/update/' + idperson,
            data: JSON.stringify($('#addPersonnelForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {

                if($("#pager").val() === 'chantiers') {
                    window.location.href = '/crm/chantiers'
                }
               if($("#pager").val() === 'chantiers'){
                    window.location.href = '/crm/technique'
                }
                if($("#pager").val() === 'personnel'){
                    window.location.href = '/crm/personnel'
                }
            },
            error: function(xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#updateInter').off().on("click",function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#updateInter').hide()
        $('#closeInter').hide()
        $('#loadInter').css('display', '')
        var idperson = $('#idoperation').val();
        var pager = $('#pager').val();
        $.ajax({
            type: 'POST',
            url: '/crm/personnel/operation/update/' + idperson,
            data: JSON.stringify($('#addInterForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                if(pager === 'chantiers'){
                    window.location.href = '/crm/chantiers'
                }else{
                    window.location.href = '/crm/technique'
                }
            },
            error: function(xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#addSuper').off().on("click",function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addSuper').hide()
        $('#closeSuper').hide()
        $('#loadSuper').css('display', '')

        $.ajax({
            type: 'POST',
            url: '/crm/personnel/lier',
            data: JSON.stringify($('#addSuperviseurForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                $('#modalSuperviseur').modal('toggle')
                location.reload()
            },
            error: function(xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#addTeam').off().on("click",function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addTeam').hide()
        $('#closeTeam').hide()
        $('#loadTeam').css('display', '');
        const idchantier = $('#idchantier').val();
        $.ajax({
            type: 'POST',
            url: '/crm/personnel/team/add/' + idchantier,
            data: JSON.stringify($('#addTeamForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                $('#modalEquipe').modal('toggle')
                location.reload()
            },
            error: function(xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#addUsa').on('click', function (e) {
    $('#modalImage').modal('show');
})
$('#addImagePer').off().on("click",function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addImagePer').hide()
        $('#closeImagePer').hide()
        $('#loadImagePer').css('display', '')

        $.ajax({
            type: 'POST',
            url: '/crm/personnel/imager/pers/'+ localStorage.getItem('idpers'),
            data: new FormData($('#addImagerForm')[0]),
            contentType: false,
            processData: false,
            cache: false,
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
$('.addPersa').on('click', function (e) {
    localStorage.setItem('idpers', this.id);
    $('#modalImager').modal('show');
})
$('#addImageUser').off().on("click",function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addImageUser').hide()
        $('#closeImageUser').hide()
        $('#loadImageUser').css('display', '')

        $.ajax({
            type: 'POST',
            url: '/crm/personnel/image/user',
            data: new FormData($('#addImageForm')[0]),
            contentType: false,
            processData: false,
            cache: false,
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
$('#updateUser').on('click', function (e) {
    $('#modalUpdateUser').modal('show');
})
$('#updateUsere').off().on("click",function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#updateUsere').hide()
        $('#closeUpdateUsere').hide()
        $('#loadUpdateUsere').css('display', '')
        $.ajax({
            type: 'PUT',
            url: '/crm/parametre/user/update',
            data: JSON.stringify($('#updateUsereForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                location.reload()
            },
            error: function(xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#updPasse').off().on("click",function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        if($('#nouveau').val() === $('#confirmer').val()) {
            $('#updPasse').hide()
            $('#loadUpdPasse').css('display', '')
            $.ajax({
                type: 'PUT',
                url: '/crm/parametre/passe/update',
                data: JSON.stringify($('#updPassForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function(respdata, textStatus, jqXHR) {
                    location.reload()
                },
                error: function(xhr, resp, text) {
                    $('#updPasse').show();
                    $('#loadUpdPasse').hide()
                    $('#messar').html('Impossible de traiter votre demande.');
                },
            })
        }else{
            $('#messar').html('Vos nouveaux mots de passe doit être identitiques !');
        }

    }
})
$('#addSousCpte').on('click', function (e) {
    $('#modalSousCpte').modal('show');
})
$('#addss').off().on("click",function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
            $('#addss').hide();
            $('#closeaddss').hide()
            $('#loadaddss').css('display', '')
            $.ajax({
                type: 'POST',
                url: '/crm/parametre/sous/add',
                data: JSON.stringify($('#addSoussForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function(respdata, textStatus, jqXHR) {
                    location.reload()
                },
                error: function(xhr, resp, text) {
                    $('#ModalErreur').modal('show')
                },
            })
    }
})
$('#updss').off().on("click",function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#updss').hide();
        $('#closeupdss').hide()
        $('#loadupdss').css('display', '')
        $.ajax({
            type: 'PUT',
            url: '/crm/parametre/sousupd/upd/'+ $("#sousid").val(),
            data: JSON.stringify($('#addSoussForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                window.location.href = '/crm/parametre'
            },
            error: function(xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#delcompte').off().on("click",function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#updss').hide();
        $('#closeupdss').hide()
        $('#loadupdss').css('display', '')

    }
})
function delcompte(a){
    $.ajax({
        type: 'DELETE',
        url: '/crm/parametre/delusers/'+ a,
        success: function(respdata, textStatus, jqXHR) {
            location.reload()
        },
        error: function(xhr, resp, text) {
            $('#ModalErreur').modal('show')
        },
    })
}
