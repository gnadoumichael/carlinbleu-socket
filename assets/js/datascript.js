import $ from 'jquery';
import axios from "axios";

$(function(){

    if(window.matchMedia("(max-width: 767px)").matches){
        $('.modal').removeClass('right');
        $('.modal-body').removeClass('bien');
        $('.devtohide').hide();
        $('.hidere').hide();
        $('.ont').removeClass('tohidbut');
        $('.hi').addClass('mohide');
        $('#bod').removeClass('sizepc');
    } else{
        $('.shoher').hide();
    }
});

$('#tuo').on('click', function (e) {
    if ($('#collapseOne_0').attr('aria-expanded') === 'true') {
        $('#collapseOne_0').toggle();
        $("#collapseOne_0").attr('aria-expanded' === 'false');
    } else {
        $('#collapseOne_0').toggle();
    }

})


$('.dd').on('change', function() {
    alert("salut")
});
$('#collapse-all').on('click', function() {
    $("#nestable").nestable({
        maxDepth: 10,
        collapsedClass:'dd-collapsed',
    }).nestable('collapseAll');//Add this line
});
const perfEntries = performance.getEntriesByType('navigation')
if (perfEntries[0].type === 'back_forward') {
    location.reload()
}

setInterval(function () {
    if($("#idmise").val()){
        var id = $("#idchantier").val();
        $.ajax({
            type: "POST",
            async: true,
            url: "/crm/chantier/miseajour/" + id,
            success: function (respdata, textStatus, jqXHR) {
            },
            error: function (xhr, resp, text) {}
        })
    }
}, 60 * 500);
function removeTags(str) {
    if ((str===null) || (str===''))
        return false;
    else
        str = str.toString();
    str = str.replace( /(<([^>]+)>)/ig, '');
    str = str.replace('&nbsp;', '');
    return str;

}
function cur(num) {
    return (
        num
            .toFixed(2) // always two decimal digits
            .replace('.', ',')
            .replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
    ) // use . as a separator
}


$(document).on('input', '#richi', function(){
    if($(this).val().length >= 2) {
        $.ajax({
            type: 'POST',
            url: '/crm/chantier/search/' + $(this).val(),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '200') {
                    document.getElementById('ressult').innerHTML = ' '
                    let obj = JSON.parse(respdata['result'])
                    for (let i = 1; i <= obj[0]['count']; i++) {
                        const link = obj[i]['link'];
                        const desi = obj[i]['refe'];
                        const opt = document.createElement('LI');
                        const aa = document.createElement("A");
                        aa.setAttribute("href",link);
                        const t = document.createTextNode(desi);
                        aa.appendChild(t)
                        opt.appendChild(aa)
                        document.getElementById('ressult').appendChild(opt)
                        document.getElementById('ressult').style.visibility = 'visible'
                    }
                }
            },
            error: function (xhr, resp, text) {},
        })
    }
});
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

$('.sholigne').on('click', function (e) {
    e.preventDefault()
    $('#ConfirmDelete').modal('show')
    let href = $(this).attr('href')
    $('#accept').click(function () {
        $('#ConfirmDelete').hide();
        $('#Traitement').modal('show');
        window.location = href
    })
})

$('#tablee').on('click', function (e) {
    e.preventDefault()
    $('#table2excel').tblToExcel();
})



$('#tablez').on('click', function (e) {
    e.preventDefault()
    $('#table3excel').tblToExcel();
})

if ($("#idmateriel").val()) {
    $('#ajouterMATERIEL').modal('show');
}
if ($("#idtache").val()) {
    $('#mdModalTache').modal('show');
}
if ($("#idarticle").val()) {
    $('#modalArticle').modal('show');
}
if ($("#idsection").val()) {
    $('#mdModalSection').modal('show');
}
if ($("#idplanning").val()) {
    $('#mdModalPlanning').modal('show');
}
if ($("#idfamille").val()) {
    $('#modalFamille').modal('show');
}
if ($("#idfourn").val()) {
    $('#modalFournisseur').modal('show');
}
if ($("#idclient").val()) {
    $('#modalClient').modal('show');
}

if ($("#idoperation").val()) {
    $('#modalInterne').modal('show');
}
if ($("#idinterve").val()) {
    $('#modalInterve').modal('show');
}
if ($("#idinterne").val()) {
    $('#modalOperation').modal('show');
}
if ($("#idcontact").val()) {
    $('#modalContact').modal('show');
}
if ($("#idrecap").val()) {
    $('#mdModalRecap').modal('show');
}
if ($("#idligne").val()) {
    $('#modalLigne').modal('show');
}
if ($("#idgroupe").val()) {
    $('#modalGroup').modal('show');
}

$.fn.serializeObject = function() {
    var o = {};
    var a = this.serializeArray();
    $.each(a, function() {
        if (o[this.name]) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
}

$('#shoChantiers').addClass('col-pink');
$('#setchantier').show();
$('#setdevis').hide();
$('#setbons').hide();
$('#setcaisses').hide();

$('#shoChantiers').click(function() {
    $('#setchantier').show();
    $('#setdevis').hide();
    $('#setbons').hide();
    $('#setcaisses').hide();

    $('#shoChantiers').addClass('col-pink');
    $('#shoDevis').removeClass('col-pink');
    $('#shoBons').removeClass('col-pink');
    $('#shoCaisses').removeClass('col-pink');
});
$('#shoDevis').click(function() {
    $('#setchantier').hide();
    $('#setdevis').show();
    $('#setbons').hide();
    $('#setcaisses').hide();
    $('#shoChantiers').removeClass('col-pink');
    $('#shoDevis').addClass('col-pink');
    $('#shoBons').removeClass('col-pink');
    $('#shoCaisses').removeClass('col-pink');
});
$('#shoBons').click(function() {
    $('#setchantier').hide();
    $('#setdevis').hide();
    $('#setbons').show();
    $('#setcaisses').hide();
    $('#shoChantiers').removeClass('col-pink');
    $('#shoDevis').removeClass('col-pink');
    $('#shoBons').addClass('col-pink');
    $('#shoCaisses').removeClass('col-pink');
});
$('#shoCaisses').click(function() {
    $('#setchantier').hide();
    $('#setdevis').hide();
    $('#setbons').hide();
    $('#setcaisses').show();
    $('#shoChantiers').removeClass('col-pink');
    $('#shoDevis').removeClass('col-pink');
    $('#shoBons').removeClass('col-pink');
    $('#shoCaisses').addClass('col-pink');
});

window.shasha = function shasha(a, b) {
    event.preventDefault();
    document.getElementById('shacontent').innerText = ' ';
    var frame = document.createElement("IFRAME");
    frame.setAttribute("style", 'width: 100%; height: 100%; border: none;');
    frame.setAttribute("id", 'frame');
    frame.setAttribute("src", '/crm/doc/attache/' + a + '/' + b + '/oui');
    document.getElementById('shacontent').appendChild(frame)
    $('#large').modal('toggle');
}

window.printFrame = function printFrame() {
    window.frames[1].focus();
    window.frames[1].print();
    return false;
}

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