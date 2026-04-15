$('#addCaisse').on("click", function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addCaisse').hide()
        $('#closeCaisse').hide()
        $('#loadCaisse').css('display', '')
        $('#closeneCaisse').hide()
        $('#loadneCaisse').css('display', '')
        const idchantier = $('#idchantier').val();
        $('#editor5').val(CKEDITOR.instances['editor5'].getData())
        $.ajax({
            type: 'POST',
            url: '/crm/caisse/add/' + idchantier,
            data: JSON.stringify($('#addCaisseForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#mdModalDevis').modal('toggle')
                    window.location.href = '/crm/caisse/' + respdata['result'] + '/' + idchantier
                }
            },
            error: function(xhr, resp, text) {
                $('#mdModalDevis').modal('toggle')
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#addPaie').on("click", function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addPaie').hide()
        $('#closePaie').hide()
        $('#loadPaie').css('display', '')
        $.ajax({
            type: 'POST',
            url: '/crm/caisse/paie/add',
            data: JSON.stringify($('#addPaieForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    location.reload();
                }
            },
            error: function(xhr, resp, text) {
                $('#mdModalPaie').modal('toggle')
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#addeCaisse').on("click",function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addeCaisse').hide()
        $('#closeCaisse').hide()
        $('#loadCaisse').css('display', '')
        $('#editor9').val(CKEDITOR.instances['editor9'].getData())
        $.ajax({
            type: 'POST',
            url: '/crm/caisse/adde',
            data: JSON.stringify($('#addCaisseForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#mdModalCaisse').modal('toggle')
                    window.location.href =
                        '/crm/caisse/' +
                        respdata['result'][0]['numcaisse'] +
                        '/' +
                        respdata['result'][0]['idchantier']
                }
            },
            error: function(xhr, resp, text) {
                $('#mdModalCaisse').modal('toggle')
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#adduCaisse').off().on("click", function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#adduCaisse').hide()
        $('#closuCaisse').hide()
        $('#loaduCaisse').css('display', '')
        $('#editor16').val(CKEDITOR.instances['editor16'].getData())
        $.ajax({
            type: 'POST',
            url: '/crm/caisse/adde',
            data: JSON.stringify($('#addCaisseFournisseurForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#modalCaisse').modal('toggle')
                    window.location.href = '/crm/caisse/' + respdata['result'][0]['numcaisse'] + '/' + respdata['result'][0]['idchantier']
                }
            },
            error: function (xhr, resp, text) {
                $('#modalCaisse').modal('toggle')
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#addxCaisse').off().on("click", function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addxCaisse').hide()
        $('#loadxCaisse').css('display', '')
        $('#editor16').val(CKEDITOR.instances['editor16'].getData())
        $.ajax({
            type: 'POST',
            url: '/crm/caisse/addfournisseur',
            data: JSON.stringify($('#addCaisseFournisseurForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#modalCaisse').modal('toggle')
                    window.location.href = '/crm/caisse/' + respdata['result'][0]['numcaisse'] + '/' + respdata['result'][0]['idchantier']
                }
            },
            error: function (xhr, resp, text) {
                $('#modalCaisse').modal('toggle')
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#adduuCaisse').off().on("click", function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#adduuCaisse').hide()
        $('#loaduuCaisse').css('display', '')
        $('#editor15').val(CKEDITOR.instances['editor15'].getData())
        $.ajax({
            type: 'POST',
            url: '/crm/caisse/addprestataire',
            data: JSON.stringify($('#addCaissePrestataireForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#modalCaisse').modal('toggle')
                    window.location.href = '/crm/caisse/' + respdata['result'][0]['numcaisse'] + '/' + respdata['result'][0]['idchantier']
                }
            },
            error: function (xhr, resp, text) {
                $('#modalCaisse').modal('toggle')
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#sefone').off().on("change", function (event) {
    event.preventDefault();
    const $selbon = $('.selbon');
    $('.selbon').html('');
    $.ajax({
        type: 'POST',
        url: '/crm/bon/fournisseur/' + this.value,
        contentType: 'application/json; charset=utf-8',
        success: function (respdata, textStatus, jqXHR) {
            $(".dibon").empty();
            $(".dibon").append('<span class="col-pink">Chargement des bons</span> <img src="/img/loading.gif" style="width: 20px">');
            let gr = $('<option selected>Veuillez choisir un bon svp !</option>');
                gr.appendTo($selbon);
            respdata.map((bo) => {
                let group = $('<option value=' + bo.id + '>Bon Nº ' + bo.numbon + ' | ' + bo.client.nomclient + ' | TTC: ' + bo.totalttc + '</option>');
                group.appendTo($selbon);
            });
            $(".dibon").empty();
            $(".dibon").append('<span class="col-green">Bons téléchargés</span>');
        },
        error: function (xhr, resp, text) {
            $('#ModalErreur').modal('show')
        },
    })
})
$('#sefoner').off().on("change", function (event) {
    event.preventDefault();
    const $selboner = $('.selboner');
    $('.selboner').html('');
    $.ajax({
        type: 'POST',
        url: '/crm/bon/fournisseur/' + this.value,
        contentType: 'application/json; charset=utf-8',
        success: function (respdata, textStatus, jqXHR) {
            $(".diboner").empty();
            $(".diboner").append('<span class="col-pink">Chargement des bons</span> <img src="/img/loading.gif" style="width: 20px">');
            let gr = $('<option selected>Veuillez choisir un bon svp !</option>');
            gr.appendTo($selboner);
            respdata.map((bo) => {
                let group = $('<option value=' + bo.id + '>Bon Nº ' + bo.numbon + ' | ' + bo.client.nomclient + ' | TTC: ' + bo.totalttc + '</option>');
                group.appendTo($selboner);
            });
            $(".diboner").empty();
            $(".diboner").append('<span class="col-green">Bons téléchargés</span>');
        },
        error: function (xhr, resp, text) {
            $('#ModalErreur').modal('show')
        },
    })
})
$('#adderCaisse').on("click",function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#adderCaisse').hide()
        $('#closerCaisse').hide()
        $('#loaderCaisse').css('display', '')
        $('#editor19').val(CKEDITOR.instances['editor19'].getData())
        $.ajax({
            type: 'POST',
            url: '/crm/caisse/frais/add',
            data: JSON.stringify($('#addCaisseFraisForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#mdModalCaisse').modal('toggle');
                    window.location.href =
                        '/crm/caisse/' +
                        respdata['result'][0]['numcaisse'] +
                        '/' +
                        respdata['result'][0]['idchantier']
                }
            },
            error: function(xhr, resp, text) {
                $('#mdModalCaisse').modal('toggle')
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#adderCaissePersonnel').on("click" ,function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#adderCaissePersonnel').hide()
        $('#closerCaissePersonnel').hide()
        $('#loaderCaissePersonnel').css('display', '')
        const id = $('#prte').val();
        $('#editor20').val(CKEDITOR.instances['editor20'].getData())
        $.ajax({
            type: 'POST',
            url: '/crm/caisse/personnel/add',
            data: JSON.stringify($('#addCaissePersonnelForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#mdModalCaisse').modal('toggle')
                    window.location.href = '/crm/caisse/' + respdata['result'] + '/' + id
                }
            },
            error: function(xhr, resp, text) {
                $('#mdModalCaisse').modal('toggle')
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#addMontant').on("click" , function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addMontant').hide()
        $('#closeMontant').hide()
        $('#loadMontant').css('display', '')
        var id = $('#idcaisse').val()
        $.ajax({
            type: 'PUT',
            url: '/crm/caisse/montant/' + id,
            data: JSON.stringify($('#addMontantForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                if (jqXHR.status == '200') {
                    $('#modalMontant').modal('toggle')
                    location.reload()
                }
            },
            error: function(xhr, resp, text) {
                $('#modalMontant').modal('toggle')
                $('#ModalErreur').modal('show')
            },
        })
    }
})


$('#updateCaisse').on("click", function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#updateCaisse').hide()
        $('#closeCaisse').hide()
        $('#loadCaisse').css('display', '')
        var idcaisse = $('#idcaisse').val()
        $('#editor1').val(CKEDITOR.instances['editor1'].getData())
        $.ajax({
            type: 'PUT',
            url: '/crm/caisse/update/' + idcaisse,
            data: JSON.stringify($('#form1').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                if (jqXHR.status == '200') {
                    $('#modalInfo').modal('toggle')
                    location.reload()
                }
            },
            error: function(xhr, resp, text) {
                $('#modalInfo').modal('toggle')
                $('#ModalErreur').modal('show')
            },
        })
    }
})
$('#valideCaisse').on("click" ,function(event) {
    event.preventDefault()
    var idcaisse = $('#idcaisse').val()
    $('#sideModalTR').modal('toggle')
    $('#Traitement').modal('show')
    $.ajax({
        type: 'GET',
        url: '/crm/caisse/valider/' + idcaisse,
        success: function(respdata, textStatus, jqXHR) {
            if (jqXHR.status == '200') {
                location.reload()
            }
        },
        error: function(xhr, resp, text) {
            $('#Traitement').modal('toggle')
            $('#ModalErreur').modal('show')
        },
    })
})
$('#devaCaisse').on("click" ,function(event) {
    event.preventDefault()
    var idcaisse = $('#idcaisse').val()
    $('#ConfirmDelete').modal('show')
    $('#accept').click(function() {
        $('#ConfirmDelete').modal('hide')
        $('#Traitement').modal('show')
        $.ajax({
            type: 'GET',
            url: '/crm/caisse/devalider/' + idcaisse,
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
$('#addDeplacerCaisse').on("click" , function(event) {
    event.preventDefault()
    const id = $('#idcaisse').val();
    const idchantier = $('#deplacerCaisse').val()
    $('#addDeplacerCaisse').hide()
    $('#closeDeplacer').hide()
    $('#loadDeplacer').css('display', '')
    $.ajax({
        type: 'GET',
        url: '/crm/caisse/deplacer/' + id + '/' + idchantier,
        success: function(respdata, textStatus, jqXHR) {
            if (jqXHR.status == '200') {
                window.location.href = '/crm/chantier/' + idchantier
            }
        },
        error: function(xhr, resp, text) {
            $('#ModalErreur').modal('show')
        },
    })
})
$('#addLigneCaisse').on("click" ,function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#addLigneCaisse').hide()
        $('#closeLignecaisse').hide()
        $('#loadLignecaisse').css('display', '')

        var idcaisse = $('#idcaisse').val();
        var idchantier = $('#idchantier').val()

        $('#editor2').val(CKEDITOR.instances['editor2'].getData())
        $.ajax({
            type: 'POST',
            url: '/crm/ligne/add/caisse/' + idcaisse,
            data: JSON.stringify($('#addLigneCaisseForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    $('#modalLigne').modal('toggle')
                    window.location.href = '/crm/caisse/' + idcaisse + '/' + idchantier
                }
            },
            error: function(xhr, resp, text) {
                if (xhr.status == '404') {
                    $('#modalLigne').modal('toggle')
                    $('#ModalErreur').modal('show')
                }
            },
        })
    }
})
$('#updateLigneCaisse').on("click" ,function(event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#updateLigneCaisse').hide()
        $('#closeLignecaisse').hide()
        $('#loadLignecaisse').css('display', '')
    }
    var idligne = $('#idligne').val()
    var idcaisse = $('#idcaisse').val()
    var idchantier = $('#idchantier').val()
    $('#editor2').val(CKEDITOR.instances['editor2'].getData())
    $.ajax({
        type: 'PUT',
        url: '/crm/ligne/update/caisse/' + idligne + '/' + idcaisse,
        data: JSON.stringify($('#addLigneCaisseForm').serializeObject()),
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function(respdata, textStatus, jqXHR) {
            if (jqXHR.status == '200') {
                $('#modalLigne').modal('toggle')
                window.location.href = '/crm/caisse/' + idcaisse + '/' + idchantier
            }
        },
        error: function(xhr, resp, text) {
            if (xhr.status == '404') {
                $('#ModalErreur').modal('show')
                $('#modalLigne').modal('toggle')
            }
        },
    })
})
$('#caichan').on('change', function() {
    $(".cacon").empty();
    $(".cadev").empty();
    $(".caterv").empty();
    $(".cadev").append('<span class="col-pink">Chargement des devis</span> <img src="/img/loading.gif" style="width: 20px">');
    $(".cacon").append('<span class="col-pink">Chargement des contacts</span> <img src="/img/loading.gif" style="width: 20px">');
    $(".caterv").append('<span class="col-pink">Chargement des intervenants</span> <img src="/img/loading.gif" style="width: 20px">');
    $.ajax({
        type: 'POST',
        url: '/crm/devis/devischantier/' + this.value,
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function (respdata, textStatus, jqXHR) {

            $("#cadevis").empty();
            $(respdata).each(function(i){
                $("#cadevis").append('<option class="supper" value='+respdata[i].id+'>DEVIS N° '+respdata[i].iddevis+'</option>')
            });
            $(".cadev").empty();
            $(".cadev").append('<span class="col-green">Devis chargés <i class="fa fa-check-circle fa-1x"></i></span>');
        },
        error: function (xhr, resp, text) {},
    })
    $.ajax({
        type: 'POST',
        url: '/crm/chantiers/getinterve/' + this.value,
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function (respdata, textStatus, jqXHR) {
            $("#caiterv").empty();
            $(respdata).each(function(i){
                $("#caiterv").append('<option class="supper" value='+respdata[i].id+'>'+respdata[i].nom+'</option>')
            });
            $(".caterv").empty();
            $(".caterv").append('<span class="col-green">Intervenants chargés <i class="fa fa-check-circle fa-1x"></i></span>');
        },
        error: function (xhr, resp, text) {},
    })
    $.ajax({
        type: 'GET',
        url: '/crm/chantiers/getcontact/' + this.value,
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function (respdata, textStatus, jqXHR) {
            $("#caicon").empty();
            $(respdata).each(function(i){
                $("#caicon").append('<option class="supper" value='+respdata[i].id+'>'+respdata[i].contact+'</option>')
            });
            $(".cacon").empty();
            $(".cacon").append('<span class="col-green">Contacts chargés <i class="fa fa-check-circle fa-1x"></i></span> ');
        },
        error: function (xhr, resp, text) {},
    })
});
$('#delCaisse').on("click" ,function(event) {
    event.preventDefault()
    const idcaisse = $('#idcaisse').val();
    $('#ConfirmDelete').modal('show')
    $('#accept').on("click", function() {
        $('#ConfirmDelete').modal('hide')
        $('#Traitement').modal('show')
        $.ajax({
            type: 'GET',
            url: '/crm/caisse/del/' + idcaisse,
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