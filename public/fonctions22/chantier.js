const formatNumber = (num, precision, separator) => {
    let parts;
    num = Number(num);
    num = (typeof precision !== 'undefined' ? num.toFixed(precision) : num).toString();
    parts = num.split('.');
    parts[0] = parts[0].toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1' + (separator));
    return parts.join(',');
}
$('#addRecap').on("click", function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        $('#closeRecap').hide()
        $('#addRecap').hide()
        $('#loadRecap').css('display', '')
        var id = $('#idchantier').val()
        $.ajax({
            type: 'POST',
            url: '/crm/chantier/recap/add/' + id,
            data: JSON.stringify($('#addRecapForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
                    location.reload()
                }
            },
            error: function (xhr, resp, text) {
                $('#ModalErreur').modal('show')
            },
        })
    }
});

$('#addChantier').on("click", async function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid())
        $('#divChantier').hide()
    $('#loadChantier').css('display', '')
    $('#description').val(CKEDITOR.instances['description'].getData());
    await axios({
        method: 'POST',
        url: '/crm/chantiers/add',
        data: JSON.stringify($('#addChantierForm').serializeObject()),
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
    }).then(function (response) {
        let data = response.data;

        const tabluu = $('#dataEtude').DataTable();
        tabluu.clear().draw();
        data.map((client) => {
            if (client.corbeille === null && client.type === null) {
                let dachantier = client.chantiers;
                dachantier.map((chantier) => {
                    if (chantier.etat === "etude") {
                        let marge = 0;
                        let balance = 0;
                        if (chantier.terminer === 'oui') {
                            marge = chantier.cout - chantier.depense;
                            balance = -(chantier.cout - chantier.reglement);
                        } else {
                            marge = 0;
                            balance = chantier.reglement - chantier.depense;
                        }
                        if (chantier.etat !== 'archiver' && chantier.corbeille === null) {
                            if (chantier.sous !== null && chantier.terminer === 'oui') {
                                tabluu.row.add([
                                    '<input type="checkbox" data-toggle="toggle" class="PROETU" value=' + chantier.id + '></input>',
                                    '<a href="/crm/chantier/' + chantier.id + '" class="chchantier"><span class="badge bg-orange">SC</span> <i class="fas fa-flag-checkered col-orange"></i> ' + chantier.nomchantier + '</a>',
                                    '<a href="/crm/client/' + client.id + '" class="chclient supper" style="background-color: #6636f6 !important;">' + client.nomclient + '</a>',
                                    formatNumber(chantier.cout, 2, ' '),
                                    formatNumber(chantier.reglement, 2, ' '),
                                    formatNumber((chantier.cout - chantier.reglement), 2, ' '),
                                    formatNumber(chantier.depense, 2, ' '),
                                    formatNumber(marge, 2, ' '),
                                    formatNumber(balance, 2, ' ')
                                ]).draw();
                            }
                            if (chantier.sous !== null && chantier.terminer !== 'oui') {
                                tabluu.row.add([
                                    '<input type="checkbox" data-toggle="toggle" class="PROETU" value=' + chantier.id + '></input>',
                                    '<a href="/crm/chantier/' + chantier.id + '" class="chchantier"><span class="badge bg-orange">SC</span> ' + chantier.nomchantier + '</a>',
                                    '<a href="/crm/client/' + client.id + '" class="chclient" style="background-color: #6636f6 !important;">' + client.nomclient + '</a>',
                                    formatNumber(chantier.cout, 2, ' '),
                                    formatNumber(chantier.reglement, 2, ' '),
                                    formatNumber((chantier.cout - chantier.reglement), 2, ' '),
                                    formatNumber(chantier.depense, 2, ' '),
                                    formatNumber(marge, 2, ' '),
                                    formatNumber(balance, 2, ' ')
                                ]).draw();
                            }
                            if (chantier.sous === null && chantier.terminer === 'oui') {
                                tabluu.row.add([
                                    '<input type="checkbox" data-toggle="toggle" class="PROETU" value=' + chantier.id + '></input>',
                                    '<a href="/crm/chantier/' + chantier.id + '" class="chchantier"><i class="fas fa-flag-checkered col-orange"></i> ' + chantier.nomchantier + '</a>',
                                    '<a href="/crm/client/' + client.id + '" class="chclient" style="background-color: #6636f6 !important;">' + client.nomclient + '</a>',
                                    formatNumber(chantier.cout, 2, ' '),
                                    formatNumber(chantier.reglement, 2, ' '),
                                    formatNumber((chantier.cout - chantier.reglement), 2, ' '),
                                    formatNumber(chantier.depense, 2, ' '),
                                    formatNumber(marge, 2, ' '),
                                    formatNumber(balance, 2, ' ')
                                ]).draw();
                            }
                            if (chantier.sous === null && chantier.terminer !== 'oui') {
                                tabluu.row.add([
                                    '<input type="checkbox" data-toggle="toggle" class="PROETU" value=' + chantier.id + '></input>',
                                    '<a href="/crm/chantier/' + chantier.id + '" class="chchantier">' + chantier.nomchantier + '</a>',
                                    '<a href="/crm/client/' + client.id + '" class="chclient" style="background-color: #6636f6 !important;">' + client.nomclient + '</a>',
                                    formatNumber(chantier.cout, 2, ' '),
                                    formatNumber(chantier.reglement, 2, ' '),
                                    formatNumber((chantier.cout - chantier.reglement), 2, ' '),
                                    formatNumber(chantier.depense, 2, ' '),
                                    formatNumber(marge, 2, ' '),
                                    formatNumber(balance, 2, ' ')
                                ]).draw();
                            }
                        }
                    }
                });

            }
        });

        const tables = $('#dataSous').DataTable();
        tables.clear().draw();
        data.map((client) => {
            let dachantier = client.chantiers;
            dachantier.map((chantier) => {
                if (chantier.sous !== null) {
                    let marge = 0;
                    let balance = 0;
                    if (chantier.terminer === 'oui') {
                        marge = chantier.cout - chantier.depense;
                        balance = -(chantier.cout - chantier.reglement);
                    } else {
                        marge = 0;
                        balance = chantier.reglement - chantier.depense;
                    }
                    if (chantier.etat !== 'archiver' && chantier.corbeille === null) {
                        if (chantier.terminer === 'oui') {
                            tables.row.add([
                                '<a href="/crm/chantier/' + chantier.id + '" class="chchantier"> <i class="fas fa-flag-checkered col-orange"></i>' + chantier.nomchantier + '</a>',
                                formatNumber(chantier.cout, 2, ' '),
                                '<a href="/crm/chantier/' + chantier.sous.id + '" class="col-white supper">' + chantier.sous.nomchantier + '</a>',
                                formatNumber(chantier.reglement, 2, ' '),
                                formatNumber((chantier.cout - chantier.reglement), 2, ' '),
                                formatNumber(chantier.depense, 2, ' '),
                                formatNumber(marge, 2, ' '),
                                formatNumber(balance, 2, ' ')
                            ]).draw();
                        } else {
                            tables.row.add([
                                '<a href="/crm/chantier/' + chantier.id + '" class="chchantier">' + chantier.nomchantier + '</a>',
                                formatNumber(chantier.cout, 2, ' '),
                                '<a href="/crm/chantier/' + chantier.sous.id + '" class="col-white">' + chantier.sous.nomchantier + '</a>',
                                formatNumber(chantier.reglement, 2, ' '),
                                formatNumber((chantier.cout - chantier.reglement), 2, ' '),
                                formatNumber(chantier.depense, 2, ' '),
                                formatNumber(marge, 2, ' '),
                                formatNumber(balance, 2, ' ')
                            ]).draw();
                        }

                    }

                }
            });
        });

        const tablo = $('#dataTer').DataTable();
        tablo.clear().draw();
        data.map((client) => {
            if (client.corbeille === null && client.type === null) {
                let dachantier = client.chantiers;
                dachantier.map((chantier) => {
                    let marge = 0;
                    let balance = 0;
                    let arche = '';
                    if (chantier.terminer === 'oui') {
                        marge = chantier.cout - chantier.depense;
                        balance = -(chantier.cout - chantier.reglement);
                    } else {
                        marge = 0;
                        balance = chantier.reglement - chantier.depense;
                    }
                    if (chantier.etat === 'archiver') {
                        arche = '<i class="fa fa fa-archive"></i>';
                    }
                    if (chantier.corbeille === null) {
                        if (chantier.sous !== null && chantier.terminer === 'oui') {
                            tablo.row.add([
                                '<a href="/crm/chantier/' + chantier.id + '" class="chchantier">' + arche + ' <span class="badge bg-orange">SC</span> <i class="fas fa-flag-checkered col-orange"></i> ' + chantier.nomchantier + '</a>',
                                formatNumber(chantier.cout, 2, ' '),
                                '<a href="/crm/client/' + client.id + '" class="chclient supper">' + client.nomclient + '</a>',
                                formatNumber(chantier.reglement, 2, ' '),
                                formatNumber((chantier.cout - chantier.reglement), 2, ' '),
                                formatNumber(chantier.depense, 2, ' '),
                                formatNumber(marge, 2, ' '),
                                formatNumber(balance, 2, ' ')
                            ]).draw();
                        }
                        if (chantier.sous !== null && chantier.terminer !== 'oui') {
                            tablo.row.add([
                                '<a href="/crm/chantier/' + chantier.id + '" class="chchantier">' + arche + ' <span class="badge bg-orange">SC</span> ' + chantier.nomchantier + '</a>',
                                formatNumber(chantier.cout, 2, ' '),
                                '<a href="/crm/client/' + client.id + '" class="chclient">' + client.nomclient + '</a>',
                                formatNumber(chantier.reglement, 2, ' '),
                                formatNumber((chantier.cout - chantier.reglement), 2, ' '),
                                formatNumber(chantier.depense, 2, ' '),
                                formatNumber(marge, 2, ' '),
                                formatNumber(balance, 2, ' ')
                            ]).draw();
                        }
                        if (chantier.sous === null && chantier.terminer === 'oui') {
                            tablo.row.add([
                                '<a href="/crm/chantier/' + chantier.id + '" class="chchantier">' + arche + ' <i class="fas fa-flag-checkered col-orange"></i> ' + chantier.nomchantier + '</a>',
                                formatNumber(chantier.cout, 2, ' '),
                                '<a href="/crm/client/' + client.id + '" class="chclient">' + client.nomclient + '</a>',
                                formatNumber(chantier.reglement, 2, ' '),
                                formatNumber((chantier.cout - chantier.reglement), 2, ' '),
                                formatNumber(chantier.depense, 2, ' '),
                                formatNumber(marge, 2, ' '),
                                formatNumber(balance, 2, ' ')
                            ]).draw();
                        }
                        if (chantier.sous === null && chantier.terminer !== 'oui') {
                            tablo.row.add([
                                '<a href="/crm/chantier/' + chantier.id + '" class="chchantier">' + arche + ' ' + chantier.nomchantier + '</a>',
                                formatNumber(chantier.cout, 2, ' '),
                                '<a href="/crm/client/' + client.id + '" class="chclient">' + client.nomclient + '</a>',
                                formatNumber(chantier.reglement, 2, ' '),
                                formatNumber((chantier.cout - chantier.reglement), 2, ' '),
                                formatNumber(chantier.depense, 2, ' '),
                                formatNumber(marge, 2, ' '),
                                formatNumber(balance, 2, ' ')
                            ]).draw();
                        }
                    }
                });
            }
        });

        $('#divChantier').show();
        $('#loadChantier').hide();
        if ($('#collapseEtu_1p').hasClass('collapse')) {
            $('#collapseEtu_1p').collapse('toggle');
        }
        $('#modalEtude').modal('toggle');

        axios({
            method: 'GET',
            url: '/crm/chantiers/getdatassoooo/clients',
            headers: {
                'Content-Type': 'application/json'
            },
        }).then(function (response) {
            let dapa = response.data;
            const $selclient = $('.selclient');
            const $selchantier = $('.selchantier');

            $('.selclient').html('');
            $('.selchantier').html('');


            dapa.map((client) => {
                if (client.corbeille === null && client.type === null) {
                    const group = $('<option value="' + client.id + '" >' + client.nomclient + '</option>');
                    group.appendTo($selclient);
                }
            });

            dapa.map((client) => {
                const chantiers = client.chantiers;
                let count = 0;
                if (chantiers.length > 0) {
                    chantiers.map((chantier) => {
                        if (chantier.etat !== 'archiver' && chantier.corbeille === null) {
                            count++;
                        }
                    });
                }

                if (client.corbeille === null && client.type === null) {
                    if (count > 0) {
                        const group = $('<optgroup label="' + client.nomclient + '" />');
                        chantiers.map((chantier) => {
                            if (chantier.etat !== 'archiver' && chantier.corbeille === null) {
                                $('<option value="' + chantier.id + '"  />').html(chantier.nomchantier).appendTo(group);
                            }
                        });
                        group.appendTo($selchantier);
                    }
                }
            });

        }).catch(function () {
        })


    }).catch(function (error) {
        $('#Traitement').modal('hide');
        $('#ModalErreur').modal('show');
    });
});
$('#updateChr').on("click", async function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        const id = localStorage.getItem('token');
        $('#divChantiere').addClass('hide');
        $('#loadChantier').show();
        $('#description').val(CKEDITOR.instances['description'].getData());
        await axios({
            method: 'PUT',
            url: '/crm/chantiers/update/' + id,
            data: JSON.stringify($('#addChantierForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
        }).then(function (response) {

            $('#divChantier').removeClass('hide');
            $('#loadChantier').hide();

            $('#chfb').removeClass('hide');
            $('#chfa').addClass('hide');

            let data = response.data;

            const table = $('#dataCours').DataTable();
            table.clear().draw();
            data.map((client) => {
                if (client.corbeille === null && client.type === null) {
                    let dachantier = client.chantiers;
                    dachantier.map((chantier) => {
                        if (chantier.etat === 'encours' && chantier.corbeille === null) {
                            let balance = 0;
                            if (chantier.terminer === 'oui') {
                                balance = -(chantier.cout - chantier.reglement);
                            } else {
                                balance = chantier.reglement - chantier.depense;
                            }

                            if (chantier.sous !== null) {
                                table.row.add([
                                    '<input type="checkbox" data-toggle="toggle" class="PROJY" value=' + chantier.id + '></input>',
                                    formatNumber(chantier.progression, 2, ' ')+"%",
                                    '<a href="/crm/chantier/' + chantier.id + '" class="chchantier"><span class="badge bg-orange">SC</span> ' + chantier.nomchantier + '</a>',
                                    '<a href="/crm/client/' + client.id + '" class="chclient supper">' + client.nomclient + '</a>',
                                    formatNumber(chantier.cout, 2, ' '),
                                    formatNumber(chantier.reglement, 2, ' '),
                                    formatNumber((chantier.cout - chantier.reglement), 2, ' '),
                                    formatNumber(chantier.depense, 2, ' '),
                                    formatNumber(balance, 2, ' ')
                                ]).draw();
                            } else {
                                table.row.add([
                                    '<input type="checkbox" data-toggle="toggle" class="PROJY" value=' + chantier.id + '></input>',
                                    formatNumber(chantier.progression, 2, ' ')+"%",
                                    '<a href="/crm/chantier/' + chantier.id + '" class="chchantier">' + chantier.nomchantier + '</a>',
                                    '<a href="/crm/client/' + client.id + '" class="chclient supper">' + client.nomclient + '</a>',
                                    formatNumber(chantier.cout, 2, ' '),
                                    formatNumber(chantier.reglement, 2, ' '),
                                    formatNumber((chantier.cout - chantier.reglement), 2, ' '),
                                    formatNumber(chantier.depense, 2, ' '),
                                    formatNumber(balance, 2, ' ')
                                ]).draw();
                            }
                        }
                    });

                }
            });

            const tables = $('#dataSous').DataTable();
            tables.clear().draw();
            data.map((client) => {
                let dachantier = client.chantiers;
                dachantier.map((chantier) => {
                    if (chantier.sous !== null) {
                        let marge = 0;
                        let balance = 0;
                        if (chantier.terminer === 'oui') {
                            marge = chantier.cout - chantier.depense;
                            balance = -(chantier.cout - chantier.reglement);
                        } else {
                            marge = 0;
                            balance = chantier.reglement - chantier.depense;
                        }
                        if (chantier.etat !== 'archiver' && chantier.corbeille === null) {
                            if (chantier.terminer === 'oui') {
                                tables.row.add([
                                    '<a href="/crm/chantier/' + chantier.id + '" class="chchantier"> <i class="fas fa-flag-checkered col-orange"></i>' + chantier.nomchantier + '</a>',
                                    formatNumber(chantier.cout, 2, ' '),
                                    '<a href="/crm/chantier/' + chantier.sous.id + '" class="col-white supper">' + chantier.sous.nomchantier + '</a>',
                                    formatNumber(chantier.reglement, 2, ' '),
                                    formatNumber((chantier.cout - chantier.reglement), 2, ' '),
                                    formatNumber(chantier.depense, 2, ' '),
                                    formatNumber(marge, 2, ' '),
                                    formatNumber(balance, 2, ' ')
                                ]).draw();
                            } else {
                                tables.row.add([
                                    '<a href="/crm/chantier/' + chantier.id + '" class="chchantier">' + chantier.nomchantier + '</a>',
                                    formatNumber(chantier.cout, 2, ' '),
                                    '<a href="/crm/chantier/' + chantier.sous.id + '" class="col-white">' + chantier.sous.nomchantier + '</a>',
                                    formatNumber(chantier.reglement, 2, ' '),
                                    formatNumber((chantier.cout - chantier.reglement), 2, ' '),
                                    formatNumber(chantier.depense, 2, ' '),
                                    formatNumber(marge, 2, ' '),
                                    formatNumber(balance, 2, ' ')
                                ]).draw();
                            }

                        }

                    }
                });
            });

            const tablo = $('#dataTer').DataTable();
            tablo.clear().draw();
            data.map((client) => {
                if (client.corbeille === null && client.type === null) {
                    let dachantier = client.chantiers;
                    dachantier.map((chantier) => {
                        let marge = 0;
                        let balance = 0;
                        let arche = '';
                        if (chantier.terminer === 'oui') {
                            marge = chantier.cout - chantier.depense;
                            balance = -(chantier.cout - chantier.reglement);
                        } else {
                            marge = 0;
                            balance = chantier.reglement - chantier.depense;
                        }
                        if (chantier.etat === 'archiver') {
                            arche = '<i class="fa fa fa-archive"></i>';
                        }
                        if (chantier.corbeille === null) {
                            if (chantier.sous !== null && chantier.terminer === 'oui') {
                                tablo.row.add([
                                    '<a href="/crm/chantier/' + chantier.id + '" class="chchantier">' + arche + ' <span class="badge bg-orange">SC</span> <i class="fas fa-flag-checkered col-orange"></i> ' + chantier.nomchantier + '</a>',
                                    formatNumber(chantier.cout, 2, ' '),
                                    '<a href="/crm/client/' + client.id + '" class="chclient supper">' + client.nomclient + '</a>',
                                    formatNumber(chantier.reglement, 2, ' '),
                                    formatNumber((chantier.cout - chantier.reglement), 2, ' '),
                                    formatNumber(chantier.depense, 2, ' '),
                                    formatNumber(marge, 2, ' '),
                                    formatNumber(balance, 2, ' ')
                                ]).draw();
                            }
                            if (chantier.sous !== null && chantier.terminer !== 'oui') {
                                tablo.row.add([
                                    '<a href="/crm/chantier/' + chantier.id + '" class="chchantier">' + arche + ' <span class="badge bg-orange">SC</span> ' + chantier.nomchantier + '</a>',
                                    formatNumber(chantier.cout, 2, ' '),
                                    '<a href="/crm/client/' + client.id + '" class="chclient">' + client.nomclient + '</a>',
                                    formatNumber(chantier.reglement, 2, ' '),
                                    formatNumber((chantier.cout - chantier.reglement), 2, ' '),
                                    formatNumber(chantier.depense, 2, ' '),
                                    formatNumber(marge, 2, ' '),
                                    formatNumber(balance, 2, ' ')
                                ]).draw();
                            }
                            if (chantier.sous === null && chantier.terminer === 'oui') {
                                tablo.row.add([
                                    '<a href="/crm/chantier/' + chantier.id + '" class="chchantier">' + arche + ' <i class="fas fa-flag-checkered col-orange"></i> ' + chantier.nomchantier + '</a>',
                                    formatNumber(chantier.cout, 2, ' '),
                                    '<a href="/crm/client/' + client.id + '" class="chclient">' + client.nomclient + '</a>',
                                    formatNumber(chantier.reglement, 2, ' '),
                                    formatNumber((chantier.cout - chantier.reglement), 2, ' '),
                                    formatNumber(chantier.depense, 2, ' '),
                                    formatNumber(marge, 2, ' '),
                                    formatNumber(balance, 2, ' ')
                                ]).draw();
                            }
                            if (chantier.sous === null && chantier.terminer !== 'oui') {
                                tablo.row.add([
                                    '<a href="/crm/chantier/' + chantier.id + '" class="chchantier">' + arche + ' ' + chantier.nomchantier + '</a>',
                                    formatNumber(chantier.cout, 2, ' '),
                                    '<a href="/crm/client/' + client.id + '" class="chclient">' + client.nomclient + '</a>',
                                    formatNumber(chantier.reglement, 2, ' '),
                                    formatNumber((chantier.cout - chantier.reglement), 2, ' '),
                                    formatNumber(chantier.depense, 2, ' '),
                                    formatNumber(marge, 2, ' '),
                                    formatNumber(balance, 2, ' ')
                                ]).draw();
                            }
                        }
                    });
                }
            });

            if ($('#collapseOne_1p').hasClass('collapse')) {
                $('#collapseOne_1p').collapse('toggle');
            }

            $('#modalChantier').modal('toggle');
            $('#addChantierForm')[0].reset();

            $('.chr').removeClass('col-pink');
            $('.chrs').removeClass('col-pink');

            axios({
                method: 'GET',
                url: '/crm/chantiers/getdatassuuuu/clients',
                headers: {
                    'Content-Type': 'application/json'
                },
            }).then(function (response) {
                let dapa = response.data;
                const $selclient = $('.selclient');
                const $selchantier = $('.selchantier');

                $('.selclient').html('');
                $('.selchantier').html('');


                dapa.map((client) => {
                    if (client.corbeille === null && client.type === null) {
                        const group = $('<option value="' + client.id + '" >' + client.nomclient + '</option>');
                        group.appendTo($selclient);
                    }
                });

                dapa.map((client) => {
                    const chantiers = client.chantiers;
                    let count = 0;
                    if (chantiers.length > 0) {
                        chantiers.map((chantier) => {
                            if (chantier.etat !== 'archiver' && chantier.corbeille === null) {
                                count++;
                            }
                        });
                    }

                    if (client.corbeille === null && client.type === null) {
                        if (count > 0) {
                            const group = $('<optgroup label="' + client.nomclient + '" />');
                            chantiers.map((chantier) => {
                                if (chantier.etat !== 'archiver' && chantier.corbeille === null) {
                                    $('<option value="' + chantier.id + '"  />').html(chantier.nomchantier).appendTo(group);
                                }
                            });
                            group.appendTo($selchantier);
                        }
                    }
                });

            }).catch(function () {
            })


        }).catch(function (error) {
            $('#Traitement').modal('hide');
        });
    }
})
$('#updateChraz').on("click", async function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        const id = $("#idchantier").val();
        $('#divChantiere').addClass('hide');
        $('#loadChantier').show();
        $('#description').val(CKEDITOR.instances['description'].getData());
        await axios({
            method: 'PUT',
            url: '/crm/chantiers/upda/' + id,
            data: JSON.stringify($('#updChantierForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
        }).then(function (response) {
            location.reload();
        }).catch(function (error) {
            $('#Traitement').modal('hide');
            $('#ModalErreur').modal('show');
        });
    }
})
$("#facfac").on('change', async function () {
    const id = $('select[name="facfac"] :selected').attr('class');

    $(".dvface").empty();
    $(".dvface").append('<span class="col-pink">Règlements effectués:... </span> <img src="/img/loading.gif" style="width: 20px">');
    $(".dvfac").empty();
    $(".dvfac").append('<span class="col-pink">Facture Total TTC:... </span> <img src="/img/loading.gif" style="width: 20px">');
    $(".dvfaces").empty();
    $(".dvfaces").append('<span class="col-pink">Reste à régler:... </span> <img src="/img/loading.gif" style="width: 20px">');
    await axios({
        method: 'GET',
        url: '/crm/facture/getreste/' + id,
        dataType: 'json',
    }).then(function (response) {
        let data = response.data;
        $("#montant").val(data["reste"].replaceAll(' ',''));
        $(".dvfac").empty();
        $(".dvfac").append('<span class="col-blue-grey bolo700 h5">Facture Total TTC:</span><span class="col-pink bolo700 h5"> '+data["ttc"]+'</span>');
        $(".dvface").empty();
        $(".dvface").append('<span class="col-blue-grey bolo700 h5">Règlements effectués:</span><span class="col-pink bolo700 h5"> '+data["regler"]+'</span>');
        $(".dvfaces").empty();
        $(".dvfaces").append('<span class="col-blue-grey bolo700 h5">Reste à régler:</span><span class="col-pink bolo700 h5"> '+data["reste"]+'</span>');
        $(".resta").append(data["reste"]);
    });

})
$('#addReglementChantiers').on("click", function (event) {
    event.preventDefault();
        if ($(this).closest('form').valid()) {
            let rest = $('.resta').html().replaceAll(' ','');
            $(".restu").append(" ");
            if(parseFloat($("#montant").val()) <= parseFloat(rest)) {
                $('#addReglementChantiers').hide()
                $('#closeReglement').hide()
                $('#loadReglement').css('display', '')
                $.ajax({
                    type: 'POST',
                    url: '/crm/chantiers/reglement/chantiers/add',
                    data: JSON.stringify($('#addReglementForm').serializeObject()),
                    contentType: 'application/json; charset=utf-8',
                    dataType: 'json',
                    success: function (respdata, textStatus, jqXHR) {
                        if (jqXHR.status == '201') {
                            $('#modalReglement').modal('toggle')
                            window.location.href = '/crm/client/' + respdata['result'];
                        }
                    },
                    error: function (xhr, resp, text) {
                        $('#modalReglement').modal('toggle')
                        $('#ModalErreur').modal('show')
                        $('#addReglementChantiers').show()
                        $('#closeReglement').show()
                        $('#loadReglement').css('display', 'none')
                    },
                })
            }else{
                $(".restu").append("Montant supérieur à la somme restante.");
            }
        }
})

$('#vclient').on('change', function () {
    $.ajax({
        type: 'POST',
        url: '/crm/chantiers/getcontact/' + this.value,
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function (respdata, textStatus, jqXHR) {
            if (jqXHR.status == '200') {
                document.getElementById('refcon').innerHTML = ' '
            }
        },
        error: function (xhr, resp, text) {
            $('#ModalErreur').modal('show')
        },
    })
});
$('#adduChantier').on("click", async function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid())
        $('#divChantier').hide()
    $('#loadChantier').css('display', '')
    $('#description').val(CKEDITOR.instances['description'].getData());
    await axios({
        method: 'POST',
        url: '/crm/chantiers/add',
        data: JSON.stringify($('#addChantierForm').serializeObject()),
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
    }).then(function (response) {
        location.reload();
    }).catch(function (error) {
        $('#Traitement').modal('hide');
        $('#ModalErreur').modal('show');
    });
});

$('#updateChan').on("click", async function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        const id = localStorage.getItem('token');
        $('#divChantiere').addClass("hide");
        $('#loadChantier').css('display', '');
        $('#description').val(CKEDITOR.instances['description'].getData());
        await axios({
            method: 'PUT',
            url: '/crm/chantiers/update/' + id,
            data: JSON.stringify($('#addChantierForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
        }).then(function (response) {
            let data = response.data;

            const table = $('#listeChantiers').DataTable();
            table.clear().draw();
            data.map((client) => {
                if (client.corbeille === null && client.type === null) {
                    let dachantier = client.chantiers;
                    dachantier.map((chantier) => {
                        let superviseur = " ";
                        let superviseurs = chantier.superviseurs;
                        superviseurs.map((supervisor) => {
                            superviseur = ' <span class="pri m-l-5"><a href="/crm/personnel/lier/' + chantier.id + '/' + supervisor.id + '" title="Supprimer" class="sholigne"><i class="material-icons col-pink" style="font-size: 18px;float: left">highlight_off</i></a>' + supervisor.noms + '</span> <br>' + superviseur;
                        });
                        if (chantier.etat !== 'archiver' && chantier.corbeille === null) {
                            if (chantier.sous !== null && chantier.terminer === 'oui') {
                                table.row.add([
                                    '<input class="TECHPRO" type="checkbox" data-toggle="toggle" value=' + chantier.id + '></input>',
                                    '<a href="/crm/gestion/' + chantier.id + '" class="chchantier"><span class="badge bg-orange">SC</span> <i class="fas fa-flag-checkered col-orange"></i> ' + chantier.nomchantier + '</a>',
                                    '<a href="/crm/client/' + client.id + '" class="chcliente supper">' + client.nomclient + '</a>',
                                    moment(chantier.ddebut).locale('fr').format("L"),
                                    moment(chantier.dfin).locale('fr').format("L"),
                                    superviseur,
                                    '<div class="progress"><div class="progress-bar bg-green" role="progressbar" aria-valuenow="' + formatNumber(chantier.progression, 0, ' ') + '" aria-valuemin="0" aria-valuemax="100" style="width: ' + formatNumber(chantier.progression, 0, ' ') + '"></div></div>',
                                    chantier.progression
                                ]).draw();
                            }
                            if (chantier.sous !== null && chantier.terminer !== 'oui') {
                                table.row.add([
                                    '<input class="TECHPRO"type="checkbox" data-toggle="toggle" value=' + chantier.id + '></input>',
                                    '<a href="/crm/gestion/' + chantier.id + '" class="chchantier"><span class="badge bg-orange">SC</span> ' + chantier.nomchantier + '</a>',
                                    '<a href="/crm/client/' + client.id + '" class="chcliente supper">' + client.nomclient + '</a>',
                                    moment(chantier.ddebut).locale('fr').format("L"),
                                    moment(chantier.dfin).locale('fr').format("L"),
                                    superviseur,
                                    '<div class="progress"><div class="progress-bar bg-green" role="progressbar" aria-valuenow="' + formatNumber(chantier.progression, 0, ' ') + '" aria-valuemin="0" aria-valuemax="100" style="width: ' + formatNumber(chantier.progression, 0, ' ') + '"></div></div>',
                                    chantier.progression
                                ]).draw();
                            }
                            if (chantier.sous === null && chantier.terminer === 'oui') {
                                table.row.add([
                                    '<input class="TECHPRO" type="checkbox" data-toggle="toggle" value=' + chantier.id + '></input>',
                                    '<a href="/crm/gestion/' + chantier.id + '" class="chchantier"><i class="fas fa-flag-checkered col-orange"></i> ' + chantier.nomchantier + '</a>',
                                    '<a href="/crm/client/' + client.id + '" class="chcliente supper">' + client.nomclient + '</a>',
                                    moment(chantier.ddebut).locale('fr').format("L"),
                                    moment(chantier.dfin).locale('fr').format("L"),
                                    superviseur,
                                    '<div class="progress"><div class="progress-bar bg-green" role="progressbar" aria-valuenow="' + formatNumber(chantier.progression, 0, ' ') + '" aria-valuemin="0" aria-valuemax="100" style="width: ' + formatNumber(chantier.progression, 0, ' ') + '"></div></div>',
                                    chantier.progression
                                ]).draw();
                            }
                            if (chantier.sous === null && chantier.terminer !== 'oui') {
                                table.row.add([
                                    '<input class="TECHPRO" type="checkbox" data-toggle="toggle" value=' + chantier.id + '></input>',
                                    '<a href="/crm/gestion' + chantier.id + '" class="chchantier">' + chantier.nomchantier + '</a>',
                                    '<a href="/crm/client/' + client.id + '" class="chcliente supper">' + client.nomclient + '</a>',
                                    moment(chantier.ddebut).locale('fr').format("L"),
                                    moment(chantier.dFIN).locale('fr').format("L"),
                                    superviseur,
                                    '<div class="progress"><div class="progress-bar bg-green" role="progressbar" aria-valuenow="' + formatNumber(chantier.progression, 0, ' ') + '" aria-valuemin="0" aria-valuemax="100" style="width: ' + formatNumber(chantier.progression, 0, ' ') + '"></div></div>',
                                    chantier.progression,
                                ]).draw();
                            }
                        }
                    });
                }
            });

            const tablear = $('#listeArchiver').DataTable();
            tablear.clear().draw();
            data.map((client) => {
                if (client.corbeille === null && client.type === null) {
                    let dachantier = client.chantiers;
                    dachantier.map((chantier) => {
                        let superviseur = " ";
                        let superviseurs = chantier.superviseurs;
                        superviseurs.map((supervisor) => {
                            superviseur = ' <span class="pri m-l-5"><a href="/crm/personnel/lier/' + chantier.id + '/' + supervisor.id + '" title="Supprimer" class="sholigne"><i class="material-icons col-pink" style="font-size: 18px;float: left">highlight_off</i></a>' + supervisor.noms + '</span> <br>' + superviseur;
                        });
                        if (chantier.etat === 'archiver' && chantier.corbeille === null) {
                            if (chantier.sous !== null && chantier.terminer === 'oui') {
                                tablear.row.add([
                                    '<a href="/crm/gestion/' + chantier.id + '" class="chchantier"><span class="badge bg-orange">SC</span> <i class="fas fa-flag-checkered col-orange"></i> ' + chantier.nomchantier + '</a>',
                                    '<a href="/crm/client/' + client.id + '" class="chcliente supper">' + client.nomclient + '</a>',
                                    moment(chantier.ddebut).locale('fr').format("L"),
                                    moment(chantier.dfin).locale('fr').format("L"),
                                    superviseur,
                                    '<div class="progress"><div class="progress-bar bg-green" role="progressbar" aria-valuenow="' + formatNumber(chantier.progression, 0, ' ') + '" aria-valuemin="0" aria-valuemax="100" style="width: ' + formatNumber(chantier.progression, 0, ' ') + '"></div></div>',
                                    chantier.progression
                                ]).draw();
                            }
                            if (chantier.sous !== null && chantier.terminer !== 'oui') {
                                tablear.row.add([
                                    '<a href="/crm/gestion/' + chantier.id + '" class="chchantier"><span class="badge bg-orange">SC</span> ' + chantier.nomchantier + '</a>',
                                    '<a href="/crm/client/' + client.id + '" class="chcliente supper">' + client.nomclient + '</a>',
                                    moment(chantier.ddebut).locale('fr').format("L"),
                                    moment(chantier.dfin).locale('fr').format("L"),
                                    superviseur,
                                    '<div class="progress"><div class="progress-bar bg-green" role="progressbar" aria-valuenow="' + formatNumber(chantier.progression, 0, ' ') + '" aria-valuemin="0" aria-valuemax="100" style="width: ' + formatNumber(chantier.progression, 0, ' ') + '"></div></div>',
                                    chantier.progression
                                ]).draw();
                            }
                            if (chantier.sous === null && chantier.terminer === 'oui') {
                                tablear.row.add([
                                    '<a href="/crm/gestion/' + chantier.id + '" class="chchantier"><i class="fas fa-flag-checkered col-orange"></i> ' + chantier.nomchantier + '</a>',
                                    '<a href="/crm/client/' + client.id + '" class="chcliente supper">' + client.nomclient + '</a>',
                                    moment(chantier.ddebut).locale('fr').format("L"),
                                    moment(chantier.dfin).locale('fr').format("L"),
                                    superviseur,
                                    '<div class="progress"><div class="progress-bar bg-green" role="progressbar" aria-valuenow="' + formatNumber(chantier.progression, 0, ' ') + '" aria-valuemin="0" aria-valuemax="100" style="width: ' + formatNumber(chantier.progression, 0, ' ') + '"></div></div>',
                                    chantier.progression
                                ]).draw();
                            }
                            if (chantier.sous === null && chantier.terminer !== 'oui') {
                                tablear.row.add([
                                    '<a href="/crm/gestion' + chantier.id + '" class="chchantier">' + chantier.nomchantier + '</a>',
                                    '<a href="/crm/client/' + client.id + '" class="chcliente supper">' + client.nomclient + '</a>',
                                    moment(chantier.ddebut).locale('fr').format("L"),
                                    moment(chantier.dFIN).locale('fr').format("L"),
                                    superviseur,
                                    '<div class="progress"><div class="progress-bar bg-green" role="progressbar" aria-valuenow="' + formatNumber(chantier.progression, 0, ' ') + '" aria-valuemin="0" aria-valuemax="100" style="width: ' + formatNumber(chantier.progression, 0, ' ') + '"></div></div>',
                                    chantier.progression,
                                ]).draw();
                            }
                        }
                    });
                }
            });

            const tablesous = $('#listeSous').DataTable();
            tablesous.clear().draw();
            data.map((client) => {
                if (client.corbeille === null && client.type === null) {
                    let dachantier = client.chantiers;
                    dachantier.map((chantier) => {
                        if (chantier.sous !== null) {
                            let pro = chantier.sous;
                            let superviseur = " ";
                            let superviseurs = pro.superviseurs;
                            superviseurs.map((supervisor) => {
                                superviseur = ' <span class="pri m-l-5"><a href="/crm/personnel/lier/' + pro.id + '/' + supervisor.id + '" title="Supprimer" class="sholigne"><i class="material-icons col-pink" style="font-size: 18px;float: left">highlight_off</i></a>' + supervisor.noms + '</span> <br>' + superviseur;
                            });
                            if (chantier.etat !== 'archiver' && chantier.corbeille === null) {
                                if (chantier.terminer === 'oui') {
                                    tablesous.row.add([
                                        '<a href="/crm/gestion/' + pro.id + '" class="chchantier"><i class="fas fa-flag-checkered col-orange font-bold"></i> ' + pro.nomchantier + '</a>',
                                        '<a href="/crm/gestion/' + client.id + '" class="chcliente supper font-bold">' + client.nomclient + ' | ' + chantier.nomchantier + '</a>',
                                        moment(pro.ddebut).locale('fr').format("L"),
                                        moment(pro.dfin).locale('fr').format("L"),
                                        superviseur,
                                        '<div class="progress"><div class="progress-bar bg-green" role="progressbar" aria-valuenow="' + formatNumber(pro.progression, 0, ' ') + '" aria-valuemin="0" aria-valuemax="100" style="width: ' + formatNumber(pro.progression, 0, ' ') + '"></div></div>',
                                        pro.progression
                                    ]).draw();
                                } else {
                                    tablesous.row.add([
                                        '<a href="/crm/gestion/' + pro.id + '" class="chchantier font-bold">' + pro.nomchantier + '</a>',
                                        '<a href="/crm/gestion/' + client.id + '" class="chcliente supper font-bold">' + client.nomclient + ' | ' + chantier.nomchantier + '</a>',
                                        moment(pro.ddebut).locale('fr').format("L"),
                                        moment(pro.dfin).locale('fr').format("L"),
                                        superviseur,
                                        '<div class="progress"><div class="progress-bar bg-green" role="progressbar" aria-valuenow="' + formatNumber(pro.progression, 0, ' ') + '" aria-valuemin="0" aria-valuemax="100" style="width: ' + formatNumber(pro.progression, 0, ' ') + '"></div></div>',
                                        pro.progression
                                    ]).draw();
                                }
                            }
                        }
                    });

                }
            });

            const tabletout = $('#listeTout').DataTable();
            tabletout.clear().draw();
            data.map((client) => {
                if (client.corbeille === null && client.type === null) {
                    let dachantier = client.chantiers;
                    dachantier.map((chantier) => {
                        let superviseur = " ";
                        let superviseurs = chantier.superviseurs;
                        superviseurs.map((supervisor) => {
                            superviseur = ' <span class="pri m-l-5"><a href="/crm/personnel/lier/' + chantier.id + '/' + supervisor.id + '" title="Supprimer" class="sholigne"><i class="material-icons col-pink" style="font-size: 18px;float: left">highlight_off</i></a>' + supervisor.noms + '</span> <br>' + superviseur;
                        });

                        if (chantier.corbeille === null) {
                            if (chantier.sous !== null && chantier.terminer === 'oui') {
                                tabletout.row.add([
                                    '<a href="/crm/gestion/' + chantier.id + '" class="chchantier"><span class="badge bg-orange">SC</span> <i class="fas fa-flag-checkered col-orange"></i> ' + chantier.nomchantier + '</a>',
                                    '<a href="/crm/client/' + client.id + '" class="chcliente supper">' + client.nomclient + '</a>',
                                    moment(chantier.ddebut).locale('fr').format("L"),
                                    moment(chantier.dfin).locale('fr').format("L"),
                                    superviseur,
                                    '<div class="progress"><div class="progress-bar bg-green" role="progressbar" aria-valuenow="' + formatNumber(chantier.progression, 0, ' ') + '" aria-valuemin="0" aria-valuemax="100" style="width: ' + formatNumber(chantier.progression, 0, ' ') + '"></div></div>',
                                    chantier.progression
                                ]).draw();
                            }
                            if (chantier.sous !== null && chantier.terminer !== 'oui') {
                                tabletout.row.add([
                                    '<a href="/crm/gestion/' + chantier.id + '" class="chchantier"><span class="badge bg-orange">SC</span> ' + chantier.nomchantier + '</a>',
                                    '<a href="/crm/client/' + client.id + '" class="chcliente supper">' + client.nomclient + '</a>',
                                    moment(chantier.ddebut).locale('fr').format("L"),
                                    moment(chantier.dfin).locale('fr').format("L"),
                                    superviseur,
                                    '<div class="progress"><div class="progress-bar bg-green" role="progressbar" aria-valuenow="' + formatNumber(chantier.progression, 0, ' ') + '" aria-valuemin="0" aria-valuemax="100" style="width: ' + formatNumber(chantier.progression, 0, ' ') + '"></div></div>',
                                    chantier.progression
                                ]).draw();
                            }
                            if (chantier.sous === null && chantier.terminer === 'oui') {
                                tabletout.row.add([
                                    '<a href="/crm/gestion/' + chantier.id + '" class="chchantier"><i class="fas fa-flag-checkered col-orange"></i> ' + chantier.nomchantier + '</a>',
                                    '<a href="/crm/client/' + client.id + '" class="chcliente supper">' + client.nomclient + '</a>',
                                    moment(chantier.ddebut).locale('fr').format("L"),
                                    moment(chantier.dfin).locale('fr').format("L"),
                                    superviseur,
                                    '<div class="progress"><div class="progress-bar bg-green" role="progressbar" aria-valuenow="' + formatNumber(chantier.progression, 0, ' ') + '" aria-valuemin="0" aria-valuemax="100" style="width: ' + formatNumber(chantier.progression, 0, ' ') + '"></div></div>',
                                    chantier.progression
                                ]).draw();
                            }
                            if (chantier.sous === null && chantier.terminer !== 'oui') {
                                tabletout.row.add([
                                    '<a href="/crm/gestion/' + chantier.id + '" class="chchantier">' + chantier.nomchantier + '</a>',
                                    '<a href="/crm/client/' + client.id + '" class="chcliente supper">' + client.nomclient + '</a>',
                                    moment(chantier.ddebut).locale('fr').format("L"),
                                    moment(chantier.dFIN).locale('fr').format("L"),
                                    superviseur,
                                    '<div class="progress"><div class="progress-bar bg-green" role="progressbar" aria-valuenow="' + formatNumber(chantier.progression, 0, ' ') + '" aria-valuemin="0" aria-valuemax="100" style="width: ' + formatNumber(chantier.progression, 0, ' ') + '"></div></div>',
                                    chantier.progression,
                                ]).draw();
                            }
                        }

                    });

                }
            });

            $('#divChantier').removeClass("hide");

            $('#loadChantier').hide();
            if ($('#collapseOne_1p').hasClass('collapse')) {
                $('#collapseOne_1p').collapse('toggle');
            }
            $('#modalChantier').modal('toggle');
        }).catch(function (error) {
            $('#Traitement').modal('hide');
        });
    }
})
$('#updateChann').on("click", async function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        const id = $("#idchantier").val();
        $('#divChan').addClass("hide");
        $('#loadChantier').css('display', '');
        $('#description').val(CKEDITOR.instances['description'].getData());
        await axios({
            method: 'PUT',
            url: '/crm/chantiers/update/' + id,
            data: JSON.stringify($('#addeChantierForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
        }).then(function (response) {
            location.reload();
        }).catch(function (error) {
            $('#Traitement').modal('hide');
        });
    }
})
$('#closeClient').on("click", async function (event) {

    $('#divClienter').addClass("hide");
    $('#divClient').removeClass("hide");

    $('#clfa').addClass("hide");
    $('#clfb').removeClass("hide");

    $('.cls').removeClass('col-pink');

    $('#modalClient').modal('toggle');
    $('#addClientForm')[0].reset();
})
$('#closeChantier').on("click", async function (event) {

    $('#divChantiere').addClass("hide");
    $('#divChantier').removeClass("hide");

    $('#chfa').addClass("hide");
    $('#chfb').removeClass("hide");

    $('.chr').removeClass('col-pink');
    $('.chrs').removeClass('col-pink');

    $('#addChantierForm')[0].reset();
    $('#modalChantier').modal('toggle');
})
$(".delreglement").on('click', function (event) {
    event.preventDefault()
    const id = $(this).attr('id');
    $('#ConfirmDelete').modal('show')
    $('#accept').click(function () {
        $('#ConfirmDelete').modal('hide')
        $('#Traitement').modal('show')
        $.ajax({
            type: 'GET',
            url: '/crm/chantiers/delreglement/' + id,
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                if (jqXHR.status == '201') {
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

});




