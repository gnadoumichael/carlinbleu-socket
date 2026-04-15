$('#addContact').on("click", function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addContact').hide()
        $('#closeContact').hide()
        $('#loadContact').css('display', '')
        const id = $('#idchantier').val();
        $.ajax({
            type: 'POST',
            url: '/crm/contact/add/' + id,
            data: JSON.stringify($('#addContactForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#mdModalContact').modal('toggle')
                    location.reload()
                }
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#addeContact').on("click",async function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#divContact').hide()
        $('#loadContact').css('display', '')
        await axios({
            method: 'POST',
            url: '/crm/contact/adde',
            data: JSON.stringify($('#addContactForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
        }).then(function (response) {
            location.reload()
        }).catch(function (error) {
            $('#ModalErreur').modal('show');
        });

    }
})
$('#updateContact').on("click",function (event) {
    event.preventDefault()
    if($(this).closest('form').valid()) {
        $('#updateContact').hide()
        $('#closeContact').hide()
        $('#loadContact').css('display', '');
        let pager = $('#pager').val();
        let lieu = "chantier";
        if(pager === 'chantiers'){
            lieu = "chantiers";
        }
        if(pager === 'technique'){
            lieu = "chantiers";
        }

        var id = $('#idcontact').val();
        var idchantier = $('#idchantier').val();
        $.ajax({
            type: 'PUT',
            url: '/crm/contact/update/' + id +'/' + lieu ,
            data: JSON.stringify($('#addContactForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if(pager === 'chantiers'){
                    window.location.href = '/crm/chantiers';
                }
                if(pager === 'technique'){
                    window.location.href = '/crm/technique';
                }
                if(pager === 'gestion'){
                    window.location.href = '/crm/gestion/'+idchantier
                }
                if(pager === 'chantier'){
                    window.location.href = '/crm/chantier/'+ idchantier
                }
            },
            error: function (xhr, resp, text) {
                $('#mdModalContact').modal('toggle')
                $('#ModalErreur').modal('show')
            },
        })
    }
})



