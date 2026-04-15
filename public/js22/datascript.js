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
                console.log('Fini');
            },
            error: function (xhr, resp, text) {
                console.log('Erreur');
            }
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
$('.sholigne').on('click', function (e) {
    e.preventDefault()
    $('#ConfirmDelete').modal('show')
    let href = $(this).attr('href')
    $('#accept').on("click",function () {
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


if ($("#sousid").val()) {
    $('#modalSousCpte').modal('show');
    $('.cpt').addClass("col-pink");
}

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

if ($("#idfiche").val()) {
    $('#modalFiche').modal('show');
}

if ($("#idfourn").val()) {
    $('#modalFournisseur').modal('show');
}
if ($("#idclient").val()) {
    $('#modalClient').modal('show');
}
if ($("#idperson").val()) {
    $('#modalPersonnel').modal('show');
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
if ($("#idservice").val()) {
    alert($("#idservice").val());
    $('#modalService').modal('show');
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

if ($("#idjourna").val()) {
    $('#modalJOURNAS').modal('show');
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

$('#tgol').click(function() {
    $('#modal').modal().hide();
    window.location.href = '/crm/welcome';
});

window.shasha = function shasha(a, b) {
    event.preventDefault();
    document.getElementById('shacontent').innerText = ' ';
    const frame = document.createElement("IFRAME");
    frame.setAttribute("style", 'width: 100%; height: 100%; border: none;');
    frame.setAttribute("id", 'frame');
    frame.setAttribute("src", '/crm/doc/attache/' + a + '/' + b + '/oui');
    document.getElementById('shacontent').appendChild(frame)
    $('#large').modal('toggle');
}

window.shushu = function shushu(a, b) {
    event.preventDefault();
    document.getElementById('shucontent').innerText = ' ';
    const frame = document.createElement("IFRAME");
    frame.setAttribute("style", 'width: 100%; height: 100%; border: none;');
    frame.setAttribute("id", 'frame');
    frame.setAttribute("src", '/crm/doc/attache/' + a + '/' + b + '/shushu');
    document.getElementById('shucontent').appendChild(frame)
    $('#shularge').modal('toggle');
}

window.printFrame = function printFrame() {
    $('head').append('<style>@page{size: landscape;}</style>')
    window.frames[1].focus();
    window.frames[1].print();
    return false;
}