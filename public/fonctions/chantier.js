$(function () {

    $('#suivichantier').off().on("change", async function () {
        let id = $('#suivichantier option:selected').val();
        window.location.href = '/crm/rapportchantier/chchan/' + id
    });

    $('.selclient').html('');
    $('.selchantier').html('');
    $('#dataStory').DataTable({
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
        buttons: [
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
                text: '20',
                className: 'fred3',
                extend: 'pageLength',
                titleAttr: 'Nombre de pages',
            },
        ],
        columnDefs: [
            {
                targets: 0,
                visible: false,
            },
            {orderable: false, targets: [0]},
        ],
        order: [[0, 'ASC']],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="4" class="col-blue bolo700" style="background-color: #dbdfef">' + group + '</td>',
                )
            },
            dataSrc: 0,
        },
    })
    $('#dataEtude').DataTable({
        stateSave: true,
        retrieve: true,
        fixedHeader: {
            retrieve: true,
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
        buttons: [
            {
                text: '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
                className: 'fred2',
                action: function (e, dt, node, config) {
                    if (false === $("input[class='PROETU']").prop('checked')) {
                        $("input[class='PROETU']").prop('checked', true)
                    } else {
                        $("input[class='PROETU']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa fa-edit fa-2x"></i>',
                className: 'edit',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='PROETU']:checked").each(async function () {
                        $('#addChantierForm')[0].reset();
                        let id = $(this).val();
                        $('#Traitement').modal('show')

                        await axios({
                            method: 'GET',
                            url: '/crm/chantier/get/' + id,
                            dataType: 'json',
                        }).then(function (response) {
                            localStorage.setItem('token', id.toString());
                            let data = response.data;

                            $('#modalChantier').modal('show');

                            $('#chfa').removeClass('hide');
                            $('#chfb').addClass('hide');

                            $('#divChantiere').removeClass('hide');
                            $('#divChantier').addClass('hide');

                            $('.chr').addClass('col-pink');
                            $('.chrs').addClass('col-pink');

                            $("#client").val(data.client.id.toString());

                            if (data.sous !== null) {
                                $("#sous").val(data.sous.id.toString());
                            }
                            $('#nomchantier').val(data.nomchantier);
                            $('#localisation').val(data.localisation);
                            $('#description').val(data.description);

                            const ddebut = moment(data.ddebut).format('DD/MM/YYYY HH:mm:ss');
                            $('#ddebut').val(ddebut);

                            const dfin = moment(data.dfin).format('DD/MM/YYYY HH:mm:ss');
                            $('#dfin').val(dfin);

                            $('#Traitement').modal('hide');
                        }).catch(function (error) {
                            $('#Traitement').modal('hide');
                        });
                    })
                },
                titleAttr: 'Modifier le chantier',
            },
            {
                text: '<i class="fa fa-ban fa-2x"></i>',
                className: 'fred',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='PROETU']:checked").each(async function () {
                        let id = $(this).val();
                        $('#ConfirmDelete').modal('show')
                        $('#accept').on("click", async function () {

                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')

                            await axios({
                                method: 'GET',
                                url: '/crm/chantiers/echoue/' + id,
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
                                            if (chantier.etat === "etude" && chantier.corbeille === null) {
                                                let balance = 0;
                                                if (chantier.terminer === 'oui') {
                                                    balance = -(chantier.cout - chantier.reglement);
                                                } else {
                                                    balance = chantier.reglement - chantier.depense;
                                                }

                                                if (chantier.sous !== null) {
                                                    tabluu.row.add([
                                                        '<input type="checkbox" data-toggle="toggle" class="PROETU" value=' + chantier.id + '></input>',
                                                        '<a href="/crm/chantier/' + chantier.id + '" class="chchantier"><span class="badge bg-orange">SC</span> ' + chantier.nomchantier + '</a>',
                                                        '<a href="/crm/client/' + client.id + '" class="chclient supper" style="background-color: #6636f6 !important;">' + client.nomclient + '</a>',
                                                        formatNumber(chantier.cout, 2, ' '),
                                                        formatNumber(chantier.reglement, 2, ' '),
                                                        formatNumber((chantier.cout - chantier.reglement), 2, ' '),
                                                        formatNumber(chantier.depense, 2, ' '),
                                                        formatNumber(balance, 2, ' ')
                                                    ]).draw();
                                                } else {
                                                    tabluu.row.add([
                                                        '<input type="checkbox" data-toggle="toggle" class="PROETU" value=' + chantier.id + '></input>',
                                                        '<a href="/crm/chantier/' + chantier.id + '" class="chchantier">' + chantier.nomchantier + '</a>',
                                                        '<a href="/crm/client/' + client.id + '" class="chclient supper" style="background-color: #6636f6 !important;">' + client.nomclient + '</a>',
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

                                const tablm = $('#dataEchoue').DataTable();
                                tablm.clear().draw();
                                data.map((client) => {
                                    if (client.corbeille === null && client.type === null) {
                                        let dachantier = client.chantiers;
                                        dachantier.map((chantier) => {
                                            if (chantier.etat === "echouer" && chantier.corbeille === null) {
                                                let balance = 0;
                                                if (chantier.terminer === 'oui') {
                                                    balance = -(chantier.cout - chantier.reglement);
                                                } else {
                                                    balance = chantier.reglement - chantier.depense;
                                                }
                                                if (chantier.sous !== null) {
                                                    tablm.row.add([
                                                        '<input type="checkbox" data-toggle="toggle" class="PROECHO" value=' + chantier.id + '></input>',
                                                        '<a href="/crm/chantier/' + chantier.id + '" class="chchantier"><span class="badge bg-orange">SC</span> ' + chantier.nomchantier + '</a>',
                                                        formatNumber(chantier.cout, 2, ' '),
                                                        '<a href="/crm/client/' + client.id + '" class="text-white">' + client.nomclient + '</a>',
                                                        formatNumber(chantier.reglement, 2, ' '),
                                                        formatNumber((chantier.cout - chantier.reglement), 2, ' '),
                                                        formatNumber(chantier.depense, 2, ' '),
                                                        formatNumber(balance, 2, ' ')
                                                    ]).draw();
                                                } else {
                                                    tablm.row.add([
                                                        '<input type="checkbox" data-toggle="toggle" class="PROECHO" value=' + chantier.id + '></input>',
                                                        '<a href="/crm/chantier/' + chantier.id + '" class="chchantier">' + chantier.nomchantier + '</a>',
                                                        formatNumber(chantier.cout, 2, ' '),
                                                        '<a href="/crm/client/' + client.id + '" class="text-white">' + client.nomclient + '</a>',
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

                                $('#Traitement').modal('hide');

                            }).catch(function (error) {
                                $('#Traitement').modal('hide');
                                $('#ModalErreur').modal('show');
                            });
                        })
                    })
                },
                titleAttr: 'Déplacer vers chantiers échoués',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='PROETU']:checked").each(async function () {
                        let id = $(this).val();
                        $('#ConfirmDelete').modal('show')
                        $('#accept').on("click", async function () {

                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')

                            await axios({
                                method: 'DELETE',
                                url: '/crm/chantiers/del/' + id,
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
                                            if (chantier.etat === "etude" && chantier.corbeille === null) {
                                                let balance = 0;
                                                if (chantier.terminer === 'oui') {
                                                    balance = -(chantier.cout - chantier.reglement);
                                                } else {
                                                    balance = chantier.reglement - chantier.depense;
                                                }

                                                if (chantier.sous !== null) {
                                                    tabluu.row.add([
                                                        '<input type="checkbox" data-toggle="toggle" class="PROETU" value=' + chantier.id + '></input>',
                                                        '<a href="/crm/chantier/' + chantier.id + '" class="chchantier"><span class="badge bg-orange">SC</span>' + chantier.nomchantier + '</a>',
                                                        '<a href="/crm/client/' + client.id + '" class="chclient supper" style="background-color: #6636f6 !important;">' + client.nomclient + '</a>',
                                                        formatNumber(chantier.cout, 2, ' '),
                                                        formatNumber(chantier.reglement, 2, ' '),
                                                        formatNumber((chantier.cout - chantier.reglement), 2, ' '),
                                                        formatNumber(chantier.depense, 2, ' '),
                                                        formatNumber(balance, 2, ' ')
                                                    ]).draw();
                                                } else {
                                                    tabluu.row.add([
                                                        '<input type="checkbox" data-toggle="toggle" class="PROETU" value=' + chantier.id + '></input>',
                                                        '<a href="/crm/chantier/' + chantier.id + '" class="chchantier">' + chantier.nomchantier + '</a>',
                                                        '<a href="/crm/client/' + client.id + '" class="chclient supper" style="background-color: #6636f6 !important;">' + client.nomclient + '</a>',
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

                                const tablm = $('#dataEchoue').DataTable();
                                tablm.clear().draw();
                                data.map((client) => {
                                    if (client.corbeille === null && client.type === null) {
                                        let dachantier = client.chantiers;
                                        dachantier.map((chantier) => {
                                            if (chantier.etat === "echouer" && chantier.corbeille === null) {
                                                let balance = 0;
                                                if (chantier.terminer === 'oui') {
                                                    balance = -(chantier.cout - chantier.reglement);
                                                } else {
                                                    balance = chantier.reglement - chantier.depense;
                                                }
                                                if (chantier.sous !== null) {
                                                    tablm.row.add([
                                                        '<input type="checkbox" data-toggle="toggle" class="PROECHO" value=' + chantier.id + '>',
                                                        '<a href="/crm/chantier/' + chantier.id + '" class="chchantier"><span class="badge bg-orange">SC</span> ' + chantier.nomchantier + '</a>',
                                                        formatNumber(chantier.cout, 2, ' '),
                                                        '<a href="/crm/client/' + client.id + '" class="text-white">' + client.nomclient + '</a>',
                                                        formatNumber(chantier.reglement, 2, ' '),
                                                        formatNumber((chantier.cout - chantier.reglement), 2, ' '),
                                                        formatNumber(chantier.depense, 2, ' '),
                                                        formatNumber(balance, 2, ' ')
                                                    ]).draw();
                                                } else {
                                                    tablm.row.add([
                                                        '<input type="checkbox" data-toggle="toggle" class="PROECHO" value=' + chantier.id + '>',
                                                        '<a href="/crm/chantier/' + chantier.id + '" class="chchantier">' + chantier.nomchantier + '</a>',
                                                        formatNumber(chantier.cout, 2, ' '),
                                                        '<a href="/crm/client/' + client.id + '" class="text-white">' + client.nomclient + '</a>',
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

                                const tablo = $('#dataToChantiers').DataTable();
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

                                axios({
                                    method: 'GET',
                                    url: '/crm/chantiers/getdatass/clients',
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

                                $('#Traitement').modal('hide');

                            }).catch(function (error) {
                                $('#Traitement').modal('hide');
                                $('#ModalErreur').modal('show');
                            });
                        });
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
                text: '10',
                className: 'fred3',
                extend: 'pageLength',
            },
        ],
        columnDefs: [
            {targets: 2, visible: false},
            {targets: 0, className: 'text-center'},
            {targets: [3, 4, 5, 6, 7], className: 'text-right'},
            {orderable: false, targets: [0]},
        ],
        order: [
            [2, 'asc'],
            [1, 'asc']
        ],
        displayLength: 15,
        rowGroup: {
            dataSrc: 2,
            startRender: function (rows, group) {
                var solde = rows
                    .data()
                    .pluck(5)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var regle = rows
                    .data()
                    .pluck(4)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var valeur = rows
                    .data()
                    .pluck(3)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var depense = rows
                    .data()
                    .pluck(6)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var balance = rows
                    .data()
                    .pluck(7)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                solde = $.fn.dataTable.render.number(' ', ',', 2, '').display(solde)
                regle = $.fn.dataTable.render.number(' ', ',', 2, '').display(regle)
                valeur = $.fn.dataTable.render.number(' ', ',', 2, '').display(valeur)
                depense = $.fn.dataTable.render.number(' ', ',', 2, '').display(depense)
                balance = $.fn.dataTable.render.number(' ', ',', 2, '').display(balance)

                return $('<tr/>')
                    .append(
                        '<td style="text-align:right;background-color: #6636f6 !important; color:#FFFFFF !important; font-weight: 600 !important;"></td>',
                    )
                    .append(
                        '<td style="text-align:left;background-color: #6636f6 !important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        group +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B !important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        valeur +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B !important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        regle +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B !important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        solde +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B !important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        depense +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B !important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        balance +
                        '</td>',
                    )

            },
        },
        "drawCallback": function (row, data, start, end, display) {
            const api = this.api();

            let tcout = api.column(3).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let tregle = api.column(4).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let tsolde = api.column(5).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let tdepense = api.column(6).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let tbalance = api.column(7).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            api.column(3).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tcout);
            api.column(4).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tregle);
            api.column(5).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tsolde);
            api.column(6).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tdepense);
            api.column(7).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tbalance);

        }
    });
    $('#dataEchoue').DataTable({
        stateSave: true,
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
        buttons: [
            {
                text: '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
                className: 'fred2',
                action: function (e, dt, node, config) {
                    if (false === $("input[class='PROECHO']").prop('checked')) {
                        $("input[class='PROECHO']").prop('checked', true)
                    } else {
                        $("input[class='PROECHO']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa fa-share fa-2x col-blue"></i>',
                className: 'fred',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='PROECHO']:checked").each(function () {
                        const id = $(this).val();
                        $('#ConfirmDelete').modal('show')
                        $('#accept').on("click", async function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')

                            await axios({
                                method: 'GET',
                                url: '/crm/chantiers/accepter/' + id,
                                dataType: 'json',
                            }).then(function (response) {
                                let data = response.data;

                                const tabluu = $('#dataEtude').DataTable();
                                tabluu.clear().draw();
                                data.map((client) => {
                                    if (client.corbeille === null && client.type === null) {
                                        let dachantier = client.chantiers;
                                        dachantier.map((chantier) => {
                                            if (chantier.etat === "etude" && chantier.corbeille === null) {
                                                let balance = 0;
                                                if (chantier.terminer === 'oui') {
                                                    balance = -(chantier.cout - chantier.reglement);
                                                } else {
                                                    balance = chantier.reglement - chantier.depense;
                                                }
                                                if (chantier.sous !== null) {
                                                    tabluu.row.add([
                                                        '<input type="checkbox" data-toggle="toggle" class="PROETU" value=' + chantier.id + '></input>',
                                                        '<a href="/crm/chantier/' + chantier.id + '" class="chchantier"><span class="badge bg-orange">SC</span>' + chantier.nomchantier + '</a>',
                                                        '<a href="/crm/client/' + client.id + '" class="chclient supper" style="background-color: #6636f6 !important;">' + client.nomclient + '</a>',
                                                        formatNumber(chantier.cout, 2, ' '),
                                                        formatNumber(chantier.reglement, 2, ' '),
                                                        formatNumber((chantier.cout - chantier.reglement), 2, ' '),
                                                        formatNumber(chantier.depense, 2, ' '),
                                                        formatNumber(balance, 2, ' ')
                                                    ]).draw();
                                                } else {
                                                    tabluu.row.add([
                                                        '<input type="checkbox" data-toggle="toggle" class="PROETU" value=' + chantier.id + '></input>',
                                                        '<a href="/crm/chantier/' + chantier.id + '" class="chchantier">' + chantier.nomchantier + '</a>',
                                                        '<a href="/crm/client/' + client.id + '" class="chclient supper" style="background-color: #6636f6 !important;">' + client.nomclient + '</a>',
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

                                const tablm = $('#dataEchoue').DataTable();
                                tablm.clear().draw();
                                data.map((client) => {
                                    if (client.corbeille === null && client.type === null) {
                                        let dachantier = client.chantiers;
                                        dachantier.map((chantier) => {
                                            if (chantier.etat === "echouer" && chantier.corbeille === null) {
                                                let balance = 0;
                                                if (chantier.terminer === 'oui') {
                                                    balance = -(chantier.cout - chantier.reglement);
                                                } else {
                                                    balance = chantier.reglement - chantier.depense;
                                                }
                                                if (chantier.sous !== null) {
                                                    tablm.row.add([
                                                        '<input type="checkbox" data-toggle="toggle" class="PROECHO" value=' + chantier.id + '></input>',
                                                        '<a href="/crm/chantier/' + chantier.id + '" class="chchantier"><span class="badge bg-orange">SC</span> ' + chantier.nomchantier + '</a>',
                                                        formatNumber(chantier.cout, 2, ' '),
                                                        '<a href="/crm/client/' + client.id + '" class="text-white">' + client.nomclient + '</a>',
                                                        formatNumber(chantier.reglement, 2, ' '),
                                                        formatNumber((chantier.cout - chantier.reglement), 2, ' '),
                                                        formatNumber(chantier.depense, 2, ' '),
                                                        formatNumber(balance, 2, ' ')
                                                    ]).draw();
                                                } else {
                                                    tablm.row.add([
                                                        '<input type="checkbox" data-toggle="toggle" class="PROECHO" value=' + chantier.id + '></input>',
                                                        '<a href="/crm/chantier/' + chantier.id + '" class="chchantier"> ' + chantier.nomchantier + '</a>',
                                                        formatNumber(chantier.cout, 2, ' '),
                                                        '<a href="/crm/client/' + client.id + '" class="text-white">' + client.nomclient + '</a>',
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

                                $('#Traitement').modal('hide');

                            }).catch(function (error) {
                                $('#Traitement').modal('hide');
                            });
                        })
                    })
                },
                titleAttr: 'Déplacer ver chantiers en étude.',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='PROECHO']:checked").each(async function () {
                        let id = $(this).val();
                        $('#ConfirmDelete').modal('show')
                        $('#accept').on("click", async function () {

                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')

                            await axios({
                                method: 'DELETE',
                                url: '/crm/chantiers/del/' + id,
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
                                                let balance = 0;
                                                if (chantier.terminer === 'oui') {
                                                    balance = -(chantier.cout - chantier.reglement);
                                                } else {
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
                                                            formatNumber(balance, 2, ' ')
                                                        ]).draw();
                                                    }
                                                }
                                            }
                                        });

                                    }
                                });

                                const tablm = $('#dataEchoue').DataTable();
                                tablm.clear().draw();
                                data.map((client) => {
                                    if (client.corbeille === null && client.type === null) {
                                        let dachantier = client.chantiers;
                                        dachantier.map((chantier) => {
                                            if (chantier.etat === "echouer") {
                                                let balance = 0;
                                                if (chantier.terminer === 'oui') {
                                                    balance = -(chantier.cout - chantier.reglement);
                                                } else {
                                                    balance = chantier.reglement - chantier.depense;
                                                }
                                                if (chantier.etat !== 'archiver' && chantier.corbeille === null) {
                                                    if (chantier.sous !== null && chantier.terminer === 'oui') {
                                                        tablm.row.add([
                                                            '<input type="checkbox" data-toggle="toggle" class="PROECHO" value=' + chantier.id + '></input>',
                                                            '<a href="/crm/chantier/' + chantier.id + '" class="chchantier"><span class="badge bg-orange">SC</span> <i class="fas fa-flag-checkered col-orange"></i> ' + chantier.nomchantier + '</a>',
                                                            formatNumber(chantier.cout, 2, ' '),
                                                            '<a href="/crm/client/' + client.id + '" class="text-white">' + client.nomclient + '</a>',
                                                            formatNumber(chantier.reglement, 2, ' '),
                                                            formatNumber((chantier.cout - chantier.reglement), 2, ' '),
                                                            formatNumber(chantier.depense, 2, ' '),
                                                            formatNumber(balance, 2, ' ')
                                                        ]).draw();
                                                    }
                                                    if (chantier.sous !== null && chantier.terminer !== 'oui') {
                                                        tablm.row.add([
                                                            '<input type="checkbox" data-toggle="toggle" class="PROECHO" value=' + chantier.id + '></input>',
                                                            '<a href="/crm/chantier/' + chantier.id + '" class="chchantier"><span class="badge bg-orange">SC</span> ' + chantier.nomchantier + '</a>',
                                                            formatNumber(chantier.cout, 2, ' '),
                                                            '<a href="/crm/client/' + client.id + '" class="text-white">' + client.nomclient + '</a>',
                                                            formatNumber(chantier.reglement, 2, ' '),
                                                            formatNumber((chantier.cout - chantier.reglement), 2, ' '),
                                                            formatNumber(chantier.depense, 2, ' '),
                                                            formatNumber(balance, 2, ' ')
                                                        ]).draw();
                                                    }
                                                    if (chantier.sous === null && chantier.terminer === 'oui') {
                                                        tablm.row.add([
                                                            '<input type="checkbox" data-toggle="toggle" class="PROECHO" value=' + chantier.id + '></input>',
                                                            '<a href="/crm/chantier/' + chantier.id + '" class="chchantier"><i class="fas fa-flag-checkered col-orange"></i> ' + chantier.nomchantier + '</a>',
                                                            formatNumber(chantier.cout, 2, ' '),
                                                            '<a href="/crm/client/' + client.id + '" class="text-white">' + client.nomclient + '</a>',
                                                            formatNumber(chantier.reglement, 2, ' '),
                                                            formatNumber((chantier.cout - chantier.reglement), 2, ' '),
                                                            formatNumber(chantier.depense, 2, ' '),
                                                            formatNumber(balance, 2, ' ')
                                                        ]).draw();
                                                    }
                                                    if (chantier.sous === null && chantier.terminer !== 'oui') {
                                                        tablm.row.add([
                                                            '<input type="checkbox" data-toggle="toggle" class="PROECHO" value=' + chantier.id + '></input>',
                                                            '<a href="/crm/chantier/' + chantier.id + '" class="chchantier">' + chantier.nomchantier + '</a>',
                                                            formatNumber(chantier.cout, 2, ' '),
                                                            '<a href="/crm/client/' + client.id + '" class="text-white">' + client.nomclient + '</a>',
                                                            formatNumber(chantier.reglement, 2, ' '),
                                                            formatNumber((chantier.cout - chantier.reglement), 2, ' '),
                                                            formatNumber(chantier.depense, 2, ' '),
                                                            formatNumber(balance, 2, ' ')
                                                        ]).draw();
                                                    }
                                                }
                                            }
                                        });
                                    }
                                });

                                const tablo = $('#dataToChantiers').DataTable();
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

                                axios({
                                    method: 'GET',
                                    url: '/crm/chantiers/getdatass/clients',
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

                                $('#Traitement').modal('hide');

                            }).catch(function (error) {
                                $('#Traitement').modal('hide');
                                $('#ModalErreur').modal('show');
                            });
                        });
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
                text: '10',
                className: 'fred3',
                extend: 'pageLength',
            },
        ],
        columnDefs: [
            {targets: 3, visible: false},
            {targets: 0, className: 'text-center'},
            {targets: [2, 4, 5, 6, 7], className: 'text-right'},
            {orderable: false, targets: [0]},
        ],
        order: [
            [3, 'asc'],
            [1, 'asc']
        ],
        displayLength: 15,
        rowGroup: {
            dataSrc: 3,
            startRender: function (rows, group) {
                var solde = rows
                    .data()
                    .pluck(5)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var regle = rows
                    .data()
                    .pluck(4)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var valeur = rows
                    .data()
                    .pluck(2)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var depense = rows
                    .data()
                    .pluck(6)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var balance = rows
                    .data()
                    .pluck(7)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                solde = $.fn.dataTable.render.number(' ', ',', 2, '').display(solde)
                regle = $.fn.dataTable.render.number(' ', ',', 2, '').display(regle)
                valeur = $.fn.dataTable.render.number(' ', ',', 2, '').display(valeur)
                depense = $.fn.dataTable.render.number(' ', ',', 2, '').display(depense)
                balance = $.fn.dataTable.render.number(' ', ',', 2, '').display(balance)

                return $('<tr/>')
                    .append(
                        '<td style="background-color:  #00BCD4 !important;color:#FFFFFF !important; font-weight: 600 !important;"></td>',
                    )
                    .append(
                        '<td style="background-color:  #00BCD4 !important;color:#FFFFFF !important; font-weight: 600 !important;">' +
                        group +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        valeur +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        regle +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        solde +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        depense +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        balance +
                        '</td>',
                    )

            },
        },
        "drawCallback": function (row, data, start, end, display) {
            const api = this.api();

            let tcout = api.column(2).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let tregle = api.column(4).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let tsolde = api.column(5).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let tdepense = api.column(6).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let tbalance = api.column(7).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            api.column(2).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tcout);
            api.column(4).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tregle);
            api.column(5).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tsolde);
            api.column(6).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tdepense);
            api.column(7).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tbalance);

        }
    })

    $('#dataCours').DataTable({
        stateSave: true,
        retrieve: true,
        fixedHeader: {
            retrieve: true,
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
        buttons: [
            {
                text: '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
                className: 'fred2',
                action: function (e, dt, node, config) {
                    if (false === $("input[class='PROJY']").prop('checked')) {
                        $("input[class='PROJY']").prop('checked', true)
                    } else {
                        $("input[class='PROJY']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa fa-edit fa-2x"></i>',
                className: 'edit',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='PROJY']:checked").each(async function () {
                        $('#addChantierForm')[0].reset();
                        let id = $(this).val();
                        window.location.href = '/crm/chantiercours/' + id
                        $('#Traitement').modal('show')
                    })
                },
                titleAttr: 'Modifier le chantier',
            },
            {
                text: '<i class="fas fa-flag-checkered col-orange"/>',
                className: 'valider',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='PROJY']:checked").each(async function () {
                        let id = $(this).val();
                        $('#ConfirmDelete').modal('show')
                        $('#accept').on("click", async function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            await axios({
                                method: 'GET',
                                url: '/crm/chantiers/archiver/' + id,
                                dataType: 'json',
                            }).then(function (response) {
                                window.location.reload();
                            }).catch(function (error) {
                                $('#Traitement').modal('hide');
                                $('#ModalErreur').modal('show');
                            });
                        })
                    })
                },
                titleAttr: 'Déplacer vers chantiers terminés',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='PROJY']:checked").each(async function () {
                        let pos = $(this).closest('tr').get(0);
                        let id = $(this).val();
                        $('#ConfirmDelete').modal('show')
                        $('#accept').on("click", async function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            await axios({
                                method: 'DELETE',
                                url: '/crm/chantiers/del/' + id,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                            }).then(function (response) {
                                window.location.reload();
                            }).catch(function (error) {
                                $('#Traitement').modal('hide');
                                $('#ModalErreur').modal('show');
                            });
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
                text: '10',
                className: 'fred3',
                extend: 'pageLength',
            },
        ],
        columnDefs: [
            {targets: 3, visible: false},
            {targets: 0, className: 'text-center'},
            {targets: [4, 5, 6, 7, 8], className: 'text-right'},
            {orderable: false, targets: [0, 1]},
        ],
        order: [
            [3, 'asc'],
            [2, 'asc']
        ],
        displayLength: 15,
        rowGroup: {
            dataSrc: 3,
            startRender: function (rows, group) {
                var valeur = rows
                    .data()
                    .pluck(4)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var regle = rows
                    .data()
                    .pluck(5)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var solde = rows
                    .data()
                    .pluck(6)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)


                var depense = rows
                    .data()
                    .pluck(7)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var balance = rows
                    .data()
                    .pluck(8)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)


                solde = $.fn.dataTable.render.number(' ', ',', 2, '').display(solde)
                regle = $.fn.dataTable.render.number(' ', ',', 2, '').display(regle)
                valeur = $.fn.dataTable.render.number(' ', ',', 2, '').display(valeur)
                depense = $.fn.dataTable.render.number(' ', ',', 2, '').display(depense)
                balance = $.fn.dataTable.render.number(' ', ',', 2, '').display(balance)


                return $('<tr/>')
                    .append(
                        '<td style="text-align:right;background-color: #E91E63 !important; color:#FFFFFF !important; font-weight: 600 !important;"></td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #E91E63 !important; color:#FFFFFF !important; font-weight: 600 !important;"></td>',
                    )
                    .append(
                        '<td style="text-align:left;background-color: #E91E63 !important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        group +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        valeur +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        regle +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        solde +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        depense +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        balance +
                        '</td>',
                    )
            },
        },
        "drawCallback": function (row, data, start, end, display) {
            const api = this.api();


            let tcout = api.column(4).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let tregle = api.column(5).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let tsolde = api.column(6).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let tdepense = api.column(7).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let tbalance = api.column(8).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);


            api.column(4).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tcout);
            api.column(5).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tregle);
            api.column(6).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tsolde);
            api.column(7).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tdepense);
            api.column(8).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tbalance);

        }
    });
    $('#dataExercices').DataTable({
        stateSave: true,
        retrieve: true,
        fixedHeader: {
            retrieve: true,
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
        buttons: [
            {
                text: '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
                className: 'fred2',
                action: function (e, dt, node, config) {
                    if (false === $("input[class='PROJY']").prop('checked')) {
                        $("input[class='PROJY']").prop('checked', true)
                    } else {
                        $("input[class='PROJY']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='PROJY']:checked").each(async function () {
                        let pos = $(this).closest('tr').get(0);
                        let id = $(this).val();
                        $('#ConfirmDelete').modal('show')
                        $('#accept').on("click", async function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            await axios({
                                method: 'DELETE',
                                url: '/crm/exercices/remove/' + id + '/' + $("#idexer").val(),
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                            }).then(function (response) {
                                window.location.reload();
                            }).catch(function (error) {
                                $('#Traitement').modal('hide');
                                $('#ModalErreur').modal('show');
                            });
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
                text: '10',
                className: 'fred3',
                extend: 'pageLength',
            },
        ],
        columnDefs: [
            {targets: 3, visible: false},
            {targets: 0, className: 'text-center'},
            {targets: [4, 5, 6, 7, 8], className: 'text-right'},
            {orderable: false, targets: [0, 1]},
        ],
        order: [
            [3, 'asc'],
            [2, 'asc']
        ],
        displayLength: 15,
        rowGroup: {
            dataSrc: 3,
            startRender: function (rows, group) {
                var valeur = rows
                    .data()
                    .pluck(4)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var regle = rows
                    .data()
                    .pluck(5)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var bonpresta = rows
                    .data()
                    .pluck(6)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)


                var bonfourni = rows
                    .data()
                    .pluck(7)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var presta = rows
                    .data()
                    .pluck(8)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)


                var fourni = rows
                    .data()
                    .pluck(9)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var chantier = rows
                    .data()
                    .pluck(10)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)


                regle = $.fn.dataTable.render.number(' ', ',', 2, '').display(regle)
                valeur = $.fn.dataTable.render.number(' ', ',', 2, '').display(valeur)
                bonpresta = $.fn.dataTable.render.number(' ', ',', 2, '').display(bonpresta)
                bonfourni = $.fn.dataTable.render.number(' ', ',', 2, '').display(bonfourni)
                presta = $.fn.dataTable.render.number(' ', ',', 2, '').display(presta)
                fourni = $.fn.dataTable.render.number(' ', ',', 2, '').display(fourni)
                chantier = $.fn.dataTable.render.number(' ', ',', 2, '').display(chantier)

                return $('<tr/>')
                    .append(
                        '<td style="text-align:right;background-color: #E91E63 !important; color:#FFFFFF !important; font-weight: 600 !important;"></td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #E91E63 !important; color:#FFFFFF !important; font-weight: 600 !important;"></td>',
                    )
                    .append(
                        '<td style="text-align:left;background-color: #E91E63 !important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        group +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        valeur +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        regle +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        bonpresta +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        bonfourni +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        presta +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        fourni +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        chantier +
                        '</td>',
                    )
            },
        },
        "drawCallback": function (row, data, start, end, display) {
            const api = this.api();

            let tcout = api.column(4).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let tregle = api.column(5).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let tbonpresta = api.column(6).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let tbonfourni = api.column(7).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let tpresta = api.column(8).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let tfourni = api.column(9).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);


            let tchantier = api.column(10).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0)


            api.column(4).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tcout);
            api.column(5).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tregle);
            api.column(6).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tbonpresta);
            api.column(7).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tbonfourni);
            api.column(8).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tpresta);
            api.column(9).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tfourni);
            api.column(10).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tchantier);

        }
    });
    $('#dataArchive').DataTable({
        stateSave: true,
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
        buttons: [
            {
                text: '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
                className: 'fred2',
                action: function (e, dt, node, config) {
                    if (false === $("input[class='PROJY2']").prop('checked')) {
                        $("input[class='PROJY2']").prop('checked', true)
                    } else {
                        $("input[class='PROJY2']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa fa-share fa-2x col-blue"></i>',
                className: 'fred',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='PROJY2']:checked").each(function () {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').on("click", async function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            await axios({
                                method: 'GET',
                                url: '/crm/chantiers/encours/' + id,
                                dataType: 'json',
                            }).then(function (response) {
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
                                                        formatNumber(chantier.progression, 2, ' ') + "%",
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
                                                        formatNumber(chantier.progression, 2, ' ') + "%",
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

                                const tabla = $('#dataArchive').DataTable();
                                tabla.clear().draw();
                                data.map((client) => {
                                    if (client.corbeille === null && client.type === null) {
                                        let dachantier = client.chantiers;
                                        dachantier.map((chantier) => {
                                            if (chantier.etat === 'archiver' && chantier.corbeille === null) {
                                                let marge = 0;
                                                let balance = 0;
                                                if (chantier.terminer === 'oui') {
                                                    marge = chantier.cout - chantier.depense;
                                                    balance = -(chantier.cout - chantier.reglement);
                                                } else {
                                                    marge = 0;
                                                    balance = chantier.reglement - chantier.depense;
                                                }

                                                if (chantier.sous !== null) {
                                                    tabla.row.add([
                                                        '<input type="checkbox" data-toggle="toggle" class="PROJY2" value=' + chantier.id + '></input>',
                                                        formatNumber(chantier.progression, 2, ' ') + "%",
                                                        '<a href="/crm/chantier/' + chantier.id + '" class="chchantier"><span class="badge bg-orange">SC</span> ' + chantier.nomchantier + '</a>',
                                                        formatNumber(chantier.cout, 2, ' '),
                                                        '<a href="/crm/client/' + client.id + '" class="text-white">' + client.nomclient + '</a>',
                                                        formatNumber(chantier.reglement, 2, ' '),
                                                        formatNumber((chantier.cout - chantier.reglement), 2, ' '),
                                                        formatNumber(chantier.depense, 2, ' '),
                                                        formatNumber(marge, 2, ' '),
                                                        formatNumber(balance, 2, ' ')
                                                    ]).draw();
                                                } else {
                                                    tabla.row.add([
                                                        '<input type="checkbox" data-toggle="toggle" class="PROJY2" value=' + chantier.id + '></input>',
                                                        formatNumber(chantier.progression, 2, ' ') + "%",
                                                        '<a href="/crm/chantier/' + chantier.id + '" class="chchantier"> ' + chantier.nomchantier + '</a>',
                                                        formatNumber(chantier.cout, 2, ' '),
                                                        '<a href="/crm/client/' + client.id + '" class="text-white">' + client.nomclient + '</a>',
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
                                $('#Traitement').modal('hide');

                            }).catch(function (error) {
                                $('#Traitement').modal('hide');
                            });
                        })
                    })
                },
                titleAttr: 'Déplacer ver chantiers en cours.',
            },
            {
                text: '<i class="fa fa fa-handshake fa-2x col-blue"></i>',
                className: 'fred',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='PROJY2']:checked").each(function () {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').on("click", async function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            await axios({
                                method: 'GET',
                                url: '/crm/chantiers/cloturer/' + id,
                                dataType: 'json',
                            }).then(function (response) {
                                let data = response.data;

                                const tabla = $('#dataArchive').DataTable();
                                tabla.clear().draw();
                                data.map((client) => {
                                    if (client.corbeille === null && client.type === null) {
                                        let dachantier = client.chantiers;
                                        dachantier.map((chantier) => {
                                            if (chantier.etat === 'archiver' && chantier.corbeille === null) {
                                                let marge = 0;
                                                let balance = 0;
                                                if (chantier.terminer === 'oui') {
                                                    marge = chantier.cout - chantier.depense;
                                                    balance = -(chantier.cout - chantier.reglement);
                                                } else {
                                                    marge = 0;
                                                    balance = chantier.reglement - chantier.depense;
                                                }

                                                if (chantier.sous !== null) {
                                                    tabla.row.add([
                                                        '<input type="checkbox" data-toggle="toggle" class="PROJY2" value=' + chantier.id + '></input>',
                                                        formatNumber(chantier.progression, 2, ' ') + "%",
                                                        '<a href="/crm/chantier/' + chantier.id + '" class="chchantier"><span class="badge bg-orange">SC</span> ' + chantier.nomchantier + '</a>',
                                                        formatNumber(chantier.cout, 2, ' '),
                                                        '<a href="/crm/client/' + client.id + '" class="text-white">' + client.nomclient + '</a>',
                                                        formatNumber(chantier.reglement, 2, ' '),
                                                        formatNumber((chantier.cout - chantier.reglement), 2, ' '),
                                                        formatNumber(chantier.depense, 2, ' '),
                                                        formatNumber(marge, 2, ' '),
                                                        formatNumber(balance, 2, ' ')
                                                    ]).draw();
                                                } else {
                                                    tabla.row.add([
                                                        '<input type="checkbox" data-toggle="toggle" class="PROJY2" value=' + chantier.id + '></input>',
                                                        formatNumber(chantier.progression, 2, ' ') + "%",
                                                        '<a href="/crm/chantier/' + chantier.id + '" class="chchantier"> ' + chantier.nomchantier + '</a>',
                                                        formatNumber(chantier.cout, 2, ' '),
                                                        '<a href="/crm/client/' + client.id + '" class="text-white">' + client.nomclient + '</a>',
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

                                const tably = $('#dataClotures').DataTable();
                                tably.clear().draw();
                                data.map((client) => {
                                    if (client.corbeille === null && client.type === null) {
                                        let dachantier = client.chantiers;
                                        dachantier.map((chantier) => {
                                            if (chantier.etat === 'cloturer' && chantier.corbeille === null) {
                                                let marge = 0;
                                                let balance = 0;
                                                if (chantier.terminer === 'oui') {
                                                    marge = chantier.cout - chantier.depense;
                                                    balance = -(chantier.cout - chantier.reglement);
                                                } else {
                                                    marge = 0;
                                                    balance = chantier.reglement - chantier.depense;
                                                }
                                                if (chantier.sous !== null) {
                                                    tably.row.add([
                                                        '<input type="checkbox" data-toggle="toggle" class="PROCLO" value=' + chantier.id + '></input>',
                                                        '<a href="/crm/chantier/' + chantier.id + '" class="chchantier"><span class="badge bg-orange">SC</span></i> ' + chantier.nomchantier + '</a>',
                                                        formatNumber(chantier.cout, 2, ' '),
                                                        '<a href="/crm/client/' + client.id + '" class="text-white">' + client.nomclient + '</a>',
                                                        formatNumber(chantier.reglement, 2, ' '),
                                                        formatNumber((chantier.cout - chantier.reglement), 2, ' '),
                                                        formatNumber(chantier.depense, 2, ' '),
                                                        formatNumber(marge, 2, ' '),
                                                        formatNumber(balance, 2, ' ')
                                                    ]).draw();

                                                } else {
                                                    tably.row.add([
                                                        '<input type="checkbox" data-toggle="toggle" class="PROCLO" value=' + chantier.id + '></input>',
                                                        '<a href="/crm/chantier/' + chantier.id + '" class="chchantier"></i> ' + chantier.nomchantier + '</a>',
                                                        formatNumber(chantier.cout, 2, ' '),
                                                        '<a href="/crm/client/' + client.id + '" class="text-white">' + client.nomclient + '</a>',
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

                                $('#Traitement').modal('hide');

                            }).catch(function (error) {
                                $('#Traitement').modal('hide');
                            });
                        })
                    })
                },
                titleAttr: 'Déplacer vers chantiers clôturés',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='PROJY2']:checked").each(async function () {
                        let pos = $(this).closest('tr').get(0);
                        let id = $(this).val();
                        $('#ConfirmDelete').modal('show')
                        $('#accept').on("click", async function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            await axios({
                                method: 'DELETE',
                                url: '/crm/chantiers/del/' + id,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                            }).then(function (response) {
                                let data = response.data;

                                const tabla = $('#dataArchive').DataTable();
                                tabla.clear().draw();
                                data.map((client) => {
                                    if (client.corbeille === null && client.type === null) {
                                        let dachantier = client.chantiers;
                                        dachantier.map((chantier) => {
                                            if (chantier.etat === 'archiver' && chantier.corbeille === null) {
                                                let marge = 0;
                                                let balance = 0;
                                                if (chantier.terminer === 'oui') {
                                                    marge = chantier.cout - chantier.depense;
                                                    balance = -(chantier.cout - chantier.reglement);
                                                } else {
                                                    marge = 0;
                                                    balance = chantier.reglement - chantier.depense;
                                                }

                                                if (chantier.sous !== null) {
                                                    tabla.row.add([
                                                        '<input type="checkbox" data-toggle="toggle" class="PROJY2" value=' + chantier.id + '></input>',
                                                        formatNumber(chantier.progression, 2, ' ') + "%",
                                                        '<a href="/crm/chantier/' + chantier.id + '" class="chchantier"><span class="badge bg-orange">SC</span> ' + chantier.nomchantier + '</a>',
                                                        formatNumber(chantier.cout, 2, ' '),
                                                        '<a href="/crm/client/' + client.id + '" class="text-white">' + client.nomclient + '</a>',
                                                        formatNumber(chantier.reglement, 2, ' '),
                                                        formatNumber((chantier.cout - chantier.reglement), 2, ' '),
                                                        formatNumber(chantier.depense, 2, ' '),
                                                        formatNumber(marge, 2, ' '),
                                                        formatNumber(balance, 2, ' ')
                                                    ]).draw();
                                                } else {
                                                    tabla.row.add([
                                                        '<input type="checkbox" data-toggle="toggle" class="PROJY2" value=' + chantier.id + '></input>',
                                                        formatNumber(chantier.progression, 2, ' ') + "%",
                                                        '<a href="/crm/chantier/' + chantier.id + '" class="chchantier"> ' + chantier.nomchantier + '</a>',
                                                        formatNumber(chantier.cout, 2, ' '),
                                                        '<a href="/crm/client/' + client.id + '" class="text-white">' + client.nomclient + '</a>',
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

                                axios({
                                    method: 'GET',
                                    url: '/crm/chantiers/getdatass/clients',
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
                                $('#Traitement').modal('hide');
                            }).catch(function (error) {
                                $('#Traitement').modal('hide');
                                $('#ModalErreur').modal('show');
                            });
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
                text: '10',
                className: 'fred3',
                extend: 'pageLength',
            },
        ],
        columnDefs: [
            {targets: 4, visible: false},
            {targets: 0, className: 'text-center'},
            {targets: [3, 5, 6, 7, 8, 9], className: 'text-right'},
            {orderable: false, targets: [0, 1]},
        ],
        order: [
            [4, 'asc'],
            [2, 'asc']
        ],
        displayLength: 15,
        rowGroup: {
            dataSrc: 4,
            startRender: function (rows, group) {
                var solde = rows
                    .data()
                    .pluck(6)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var regle = rows
                    .data()
                    .pluck(5)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var valeur = rows
                    .data()
                    .pluck(3)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var depense = rows
                    .data()
                    .pluck(7)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var marge = rows
                    .data()
                    .pluck(8)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var balance = rows
                    .data()
                    .pluck(9)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                solde = $.fn.dataTable.render.number(' ', ',', 2, '').display(solde)
                regle = $.fn.dataTable.render.number(' ', ',', 2, '').display(regle)
                valeur = $.fn.dataTable.render.number(' ', ',', 2, '').display(valeur)
                depense = $.fn.dataTable.render.number(' ', ',', 2, '').display(depense)
                marge = $.fn.dataTable.render.number(' ', ',', 2, '').display(marge)
                balance = $.fn.dataTable.render.number(' ', ',', 2, '').display(balance)

                return $('<tr/>')
                    .append(
                        '<td style="background-color:#2196F3 !important;color:#FFFFFF !important; font-weight: 600 !important;"></td>',
                    )
                    .append(
                        '<td style="background-color:#2196F3 !important;color:#FFFFFF !important; font-weight: 600 !important;"></td>',
                    )
                    .append(
                        '<td style="background-color: #2196F3 !important;color:#FFFFFF !important; font-weight: 600 !important;">' +
                        group +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        valeur +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        regle +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        solde +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        depense +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        marge +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        balance +
                        '</td>',
                    )

            },
        },
        "drawCallback": function (row, data, start, end, display) {
            const api = this.api();

            let tcout = api.column(3).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let tregle = api.column(5).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let tsolde = api.column(6).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let tdepense = api.column(7).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let tbalance = api.column(8).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let tmarge = api.column(8).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);


            api.column(3).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tcout);
            api.column(5).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tregle);
            api.column(6).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tsolde);
            api.column(7).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tdepense);
            api.column(9).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tbalance);
            api.column(8).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tmarge);
        }
    })
    $('#dataClotures').DataTable({
        stateSave: true,
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
        buttons: [
            {
                text: '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
                className: 'fred2',
                action: function (e, dt, node, config) {
                    if (false === $("input[class='PROCLO']").prop('checked')) {
                        $("input[class='PROCLO']").prop('checked', true)
                    } else {
                        $("input[class='PROCLO']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa fa-reply fa-2x col-blue"></i>',
                className: 'fred',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='PROCLO']:checked").each(function () {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').on("click", async function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            await axios({
                                method: 'GET',
                                url: '/crm/chantiers/archiver/' + id,
                                dataType: 'json',
                            }).then(function (response) {
                                let data = response.data;

                                const tabla = $('#dataArchive').DataTable();
                                tabla.clear().draw();
                                data.map((client) => {
                                    if (client.corbeille === null && client.type === null) {
                                        let dachantier = client.chantiers;
                                        dachantier.map((chantier) => {
                                            if (chantier.etat === 'archiver' && chantier.corbeille === null) {
                                                let marge = 0;
                                                let balance = 0;
                                                if (chantier.terminer === 'oui') {
                                                    marge = chantier.cout - chantier.depense;
                                                    balance = -(chantier.cout - chantier.reglement);
                                                } else {
                                                    marge = 0;
                                                    balance = chantier.reglement - chantier.depense;
                                                }

                                                if (chantier.sous !== null) {
                                                    tabla.row.add([
                                                        '<input type="checkbox" data-toggle="toggle" class="PROJY2" value=' + chantier.id + '></input>',
                                                        formatNumber(chantier.progression, 2, ' ') + "%",
                                                        '<a href="/crm/chantier/' + chantier.id + '" class="chchantier"><span class="badge bg-orange">SC</span> ' + chantier.nomchantier + '</a>',
                                                        formatNumber(chantier.cout, 2, ' '),
                                                        '<a href="/crm/client/' + client.id + '" class="text-white">' + client.nomclient + '</a>',
                                                        formatNumber(chantier.reglement, 2, ' '),
                                                        formatNumber((chantier.cout - chantier.reglement), 2, ' '),
                                                        formatNumber(chantier.depense, 2, ' '),
                                                        formatNumber(marge, 2, ' '),
                                                        formatNumber(balance, 2, ' ')
                                                    ]).draw();
                                                } else {
                                                    tabla.row.add([
                                                        '<input type="checkbox" data-toggle="toggle" class="PROJY2" value=' + chantier.id + '></input>',
                                                        formatNumber(chantier.progression, 2, ' ') + "%",
                                                        '<a href="/crm/chantier/' + chantier.id + '" class="chchantier"> ' + chantier.nomchantier + '</a>',
                                                        formatNumber(chantier.cout, 2, ' '),
                                                        '<a href="/crm/client/' + client.id + '" class="text-white">' + client.nomclient + '</a>',
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

                                const tably = $('#dataClotures').DataTable();
                                tably.clear().draw();
                                data.map((client) => {
                                    if (client.corbeille === null && client.type === null) {
                                        let dachantier = client.chantiers;
                                        dachantier.map((chantier) => {
                                            if (chantier.etat === 'cloturer' && chantier.corbeille === null) {
                                                let marge = 0;
                                                let balance = 0;
                                                if (chantier.terminer === 'oui') {
                                                    marge = chantier.cout - chantier.depense;
                                                    balance = -(chantier.cout - chantier.reglement);
                                                } else {
                                                    marge = 0;
                                                    balance = chantier.reglement - chantier.depense;
                                                }
                                                if (chantier.sous !== null) {
                                                    tably.row.add([
                                                        '<input type="checkbox" data-toggle="toggle" class="PROCLO" value=' + chantier.id + '></input>',
                                                        '<a href="/crm/chantier/' + chantier.id + '" class="chchantier"><span class="badge bg-orange">SC</span>' + chantier.nomchantier + '</a>',
                                                        formatNumber(chantier.cout, 2, ' '),
                                                        '<a href="/crm/client/' + client.id + '" class="text-white">' + client.nomclient + '</a>',
                                                        formatNumber(chantier.reglement, 2, ' '),
                                                        formatNumber((chantier.cout - chantier.reglement), 2, ' '),
                                                        formatNumber(chantier.depense, 2, ' '),
                                                        formatNumber(marge, 2, ' '),
                                                        formatNumber(balance, 2, ' ')
                                                    ]).draw();

                                                } else {
                                                    tably.row.add([
                                                        '<input type="checkbox" data-toggle="toggle" class="PROCLO" value=' + chantier.id + '></input>',
                                                        '<a href="/crm/chantier/' + chantier.id + '" class="chchantier">' + chantier.nomchantier + '</a>',
                                                        formatNumber(chantier.cout, 2, ' '),
                                                        '<a href="/crm/client/' + client.id + '" class="text-white">' + client.nomclient + '</a>',
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

                                $('#Traitement').modal('hide');

                            }).catch(function (error) {
                                $('#Traitement').modal('hide');
                            });
                        })
                    })
                },
                titleAttr: 'Déplacer vers chantiers terminés',
            },
            {
                text: '<i class="fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='PROCLO']:checked").each(async function () {

                        let id = $(this).val();
                        $('#ConfirmDelete').modal('show')
                        $('#accept').on("click", async function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            await axios({
                                method: 'DELETE',
                                url: '/crm/chantiers/del/' + id,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                            }).then(function (response) {
                                let data = response.data;

                                const tably = $('#dataClotures').DataTable();
                                tably.clear().draw();
                                data.map((client) => {
                                    if (client.corbeille === null && client.type === null) {
                                        let dachantier = client.chantiers;
                                        dachantier.map((chantier) => {
                                            if (chantier.etat === 'cloturer' && chantier.corbeille === null) {
                                                let marge = 0;
                                                let balance = 0;
                                                if (chantier.terminer === 'oui') {
                                                    marge = chantier.cout - chantier.depense;
                                                    balance = -(chantier.cout - chantier.reglement);
                                                } else {
                                                    marge = 0;
                                                    balance = chantier.reglement - chantier.depense;
                                                }
                                                if (chantier.sous !== null) {
                                                    tably.row.add([
                                                        '<input type="checkbox" data-toggle="toggle" class="PROCLO" value=' + chantier.id + '></input>',
                                                        '<a href="/crm/chantier/' + chantier.id + '" class="chchantier"><span class="badge bg-orange">SC</span></i> ' + chantier.nomchantier + '</a>',
                                                        formatNumber(chantier.cout, 2, ' '),
                                                        '<a href="/crm/client/' + client.id + '" class="text-white">' + client.nomclient + '</a>',
                                                        formatNumber(chantier.reglement, 2, ' '),
                                                        formatNumber((chantier.cout - chantier.reglement), 2, ' '),
                                                        formatNumber(chantier.depense, 2, ' '),
                                                        formatNumber(marge, 2, ' '),
                                                        formatNumber(balance, 2, ' ')
                                                    ]).draw();

                                                } else {
                                                    tably.row.add([
                                                        '<input type="checkbox" data-toggle="toggle" class="PROCLO" value=' + chantier.id + '></input>',
                                                        '<a href="/crm/chantier/' + chantier.id + '" class="chchantier"></i> ' + chantier.nomchantier + '</a>',
                                                        formatNumber(chantier.cout, 2, ' '),
                                                        '<a href="/crm/client/' + client.id + '" class="text-white">' + client.nomclient + '</a>',
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

                                const tablo = $('#dataToChantiers').DataTable();
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

                                axios({
                                    method: 'GET',
                                    url: '/crm/chantiers/getdatass/clients',
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
                                $('#Traitement').modal('hide');
                            }).catch(function (error) {
                                $('#Traitement').modal('hide');
                                $('#ModalErreur').modal('show');
                            });
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
                text: '10',
                className: 'fred3',
                extend: 'pageLength',
            },
        ],
        columnDefs: [
            {targets: 3, visible: false},
            {targets: 0, className: 'text-center'},
            {targets: [2, 4, 5, 6, 7, 8], className: 'text-right'},
            {orderable: false, targets: [0]},
        ],
        order: [
            [3, 'asc'],
            [1, 'asc']
        ],
        displayLength: 15,
        rowGroup: {
            dataSrc: 3,
            startRender: function (rows, group) {
                var solde = rows
                    .data()
                    .pluck(5)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var regle = rows
                    .data()
                    .pluck(4)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var valeur = rows
                    .data()
                    .pluck(2)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var depense = rows
                    .data()
                    .pluck(6)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var marge = rows
                    .data()
                    .pluck(7)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var balance = rows
                    .data()
                    .pluck(8)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                solde = $.fn.dataTable.render.number(' ', ',', 2, '').display(solde)
                regle = $.fn.dataTable.render.number(' ', ',', 2, '').display(regle)
                valeur = $.fn.dataTable.render.number(' ', ',', 2, '').display(valeur)
                depense = $.fn.dataTable.render.number(' ', ',', 2, '').display(depense)
                marge = $.fn.dataTable.render.number(' ', ',', 2, '').display(marge)
                balance = $.fn.dataTable.render.number(' ', ',', 2, '').display(balance)

                return $('<tr/>')
                    .append(
                        '<td style="background-color:  #00BCD4 !important;color:#FFFFFF !important; font-weight: 600 !important;"></td>',
                    )
                    .append(
                        '<td style="background-color:  #00BCD4 !important;color:#FFFFFF !important; font-weight: 600 !important;">' +
                        group +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        valeur +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        regle +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        solde +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        depense +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        marge +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        balance +
                        '</td>',
                    )

            },
        },
        "drawCallback": function (row, data, start, end, display) {
            const api = this.api();

            let tcout = api.column(2).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let tregle = api.column(4).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let tsolde = api.column(5).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let tdepense = api.column(6).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let tbalance = api.column(8).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let tmarge = api.column(7).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);


            api.column(2).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tcout);
            api.column(4).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tregle);
            api.column(5).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tsolde);
            api.column(6).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tdepense);
            api.column(8).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tbalance);
            api.column(7).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tmarge);
        }
    })
    $('#dataToChantiers').DataTable({
        retrieve: true,
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
        buttons: [
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
                text: '10',
                className: 'fred3',
                extend: 'pageLength',
            },
        ],

        columnDefs: [
            {targets: 2, visible: false,},
            {targets: [1, 3, 4, 5, 6, 7], className: 'dt-body-right'},
            {orderable: false, targets: [0]},
        ],
        order: [
            [2, 'asc']
        ],
        displayLength: 15,
        rowGroup: {
            dataSrc: 2,
            startRender: function (rows, group) {
                var solde = rows
                    .data()
                    .pluck(4)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var regle = rows
                    .data()
                    .pluck(3)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var valeur = rows
                    .data()
                    .pluck(1)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var depense = rows
                    .data()
                    .pluck(5)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var marge = rows
                    .data()
                    .pluck(6)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var balance = rows
                    .data()
                    .pluck(7)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                solde = $.fn.dataTable.render.number(' ', ',', 2, '').display(solde)
                regle = $.fn.dataTable.render.number(' ', ',', 2, '').display(regle)
                valeur = $.fn.dataTable.render.number(' ', ',', 2, '').display(valeur)
                depense = $.fn.dataTable.render.number(' ', ',', 2, '').display(depense)
                marge = $.fn.dataTable.render.number(' ', ',', 2, '').display(marge)
                balance = $.fn.dataTable.render.number(' ', ',', 2, '').display(balance)

                return $('<tr/>')
                    .append(
                        '<td style="text-align:left;background-color: #79A807 !important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        group +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color:  #607D8B !important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        valeur +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        regle +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        solde +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        depense +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        marge +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        balance +
                        '</td>',
                    )

            },
        },

    })

    $('#listeChantiers').DataTable({
        retrieve: true,
        fixedHeader: {
            retrieve: true,
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
        buttons: [
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
                text: '20',
                className: 'fred3',
                extend: 'pageLength',
                titleAttr: 'Nombre de ligne',
            },
        ],
        columnDefs: [
            {targets: 1, visible: false},
            {targets: 1, className: 'bolo600'},
        ],
        order: [
            [1, 'asc'],
            [0, 'asc']
        ],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="7" class="col-pink bolo700" style="background-color: #dbdfef">' + group + '</td>',
                )
            },
            dataSrc: 1,
        },
    })
    $('#listeChantiersCours').DataTable({
        retrieve: true,
        fixedHeader: {
            retrieve: true,
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
        buttons: [
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
                text: '20',
                className: 'fred3',
                extend: 'pageLength',
                titleAttr: 'Nombre de ligne',
            },
        ],
        columnDefs: [
            {targets: 1, visible: false},
            {targets: 1, className: 'bolo600'}
        ],
        order: [
            [1, 'asc'],
            [0, 'asc']
        ],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="7" class="col-pink bolo700" style="background-color: #dbdfef">' + group + '</td>',
                )
            },
            dataSrc: 1,
        },
    })
    $('#listeChantiersEchouer').DataTable({
        retrieve: true,
        fixedHeader: {
            retrieve: true,
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
        buttons: [
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
                text: '20',
                className: 'fred3',
                extend: 'pageLength',
                titleAttr: 'Nombre de ligne',
            },
        ],
        columnDefs: [
            {targets: 1, visible: false},
            {targets: 1, className: 'bolo600'}
        ],
        order: [
            [1, 'asc'],
            [0, 'asc']
        ],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="7" class="col-pink bolo700" style="background-color: #dbdfef">' + group + '</td>',
                )
            },
            dataSrc: 1,
        },
    })
    $('#listeSous').DataTable({
        retrieve: true,
        fixedHeader: {
            retrieve: true,
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
        buttons: [
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
                text: '20',
                className: 'fred3',
                extend: 'pageLength',
                titleAttr: 'Nombre de ligne',
            },
        ],
        columnDefs: [
            {targets: 1, visible: false},
            {targets: 1, className: 'bolo600'},
            {targets: 0, className: 'pd20'},
        ],
        order: [
            [1, 'asc'],
            [0, 'asc']
        ],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="7" class="col-pink bolo700" style="background-color: #dbdfef">' + group + '</td>',
                )
            },
            dataSrc: 1,
        },
    })
    $('#listeArchiver').DataTable({
        retrieve: true,
        fixedHeader: {
            retrieve: true,
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
        buttons: [
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
                text: '20',
                className: 'fred3',
                extend: 'pageLength',
                titleAttr: 'Nombre de ligne',
            },
        ],
        columnDefs: [
            {targets: 1, visible: false},
            {targets: 1, className: 'bolo600'},
            {targets: 0, className: 'pd20'},
        ],
        order: [
            [1, 'asc'],
            [0, 'asc']
        ],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="7" class="col-pink bolo700" style="background-color: #dbdfef">' + group + '</td>',
                )
            },
            dataSrc: 1,
        },
    })
    $('#listeTout').DataTable({
        retrieve: true,
        fixedHeader: {
            retrieve: true,
            header: true,
            footer: true,
        },
        dom: 'Bfrtip',
        buttons: [
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
                text: '20',
                className: 'fred3',
                extend: 'pageLength',
                titleAttr: 'Nombre de ligne',
            },
        ],
        columnDefs: [
            {targets: 1, visible: false},
            {targets: 1, className: 'bolo600'},
            {targets: 0, className: 'pd20'},
        ],
        order: [
            [1, 'asc'],
            [0, 'asc']
        ],
        lengthMenu: [
            [20, 40, 60, 80, 100, -1],
            ['20', '40', '60', '80', '100', 'Tout'],
        ],
        rowGroup: {
            startRender: function (rows, group) {
                return $('<tr/>').append(
                    '<td colspan="7" class="col-pink bolo700" style="background-color: #dbdfef">' + group + '</td>',
                )
            },
            dataSrc: 1,
        },
    })
    $('#dataCHANTIERSUP').DataTable({
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
        buttons: [
            {
                text:
                    '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
                className: 'fred2',
                action: function (e, dt, node, config) {
                    if (false === $("input[class='PROJSUP']").prop('checked')) {
                        $("input[class='PROJSUP']").prop('checked', true)
                    } else {
                        $("input[class='PROJSUP']").prop('checked', false)
                    }
                },
                titleAttr: 'Cocher tout /  Décocher tout',
            },
            {
                text: '<i class="fa fa-redo fa-2x"></i>',
                className: 'valide',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='PROJSUP']:checked").each(function () {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'GET',
                                url: '/crm/chantiers/restaurer/' + id,
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
                },
                titleAttr: 'Restaurer',
            },
            {
                text: '<i class="fa fa fa-trash fa-2x"></i>',
                className: 'del',
                action: function (e, dt, node, config) {
                    $("input:checkbox[class='PROJSUP']:checked").each(function () {
                        var id = $(this).val()
                        $('#ConfirmDelete').modal('show')
                        $('#accept').click(function () {
                            $('#ConfirmDelete').modal('hide')
                            $('#Traitement').modal('show')
                            $.ajax({
                                type: 'DELETE',
                                url: '/crm/chantiers/deldefinitive/' + id,
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function (respdata, textStatus, jqXHR) {
                                    if (jqXHR.status == '204') {
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
                },
                titleAttr: 'Supprimer définitivement',
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
                text: '10',
                className: 'fred3',
                extend: 'pageLength',
            },
        ],
        columnDefs: [
            {
                targets: 3,
                visible: false,
            },
            {orderable: false, targets: [0]},
        ],
        order: [[3, 'asc']],
        displayLength: 10,
        rowGroup: {
            startRender: function (rows, group) {
                var solde = rows
                    .data()
                    .pluck(5)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var regle = rows
                    .data()
                    .pluck(4)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var valeur = rows
                    .data()
                    .pluck(2)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var depense = rows
                    .data()
                    .pluck(6)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var marge = rows
                    .data()
                    .pluck(7)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var res = rows.data().pluck(8)

                solde = $.fn.dataTable.render.number(' ', ',', 2, '').display(solde)
                regle = $.fn.dataTable.render.number(' ', ',', 2, '').display(regle)
                valeur = $.fn.dataTable.render.number(' ', ',', 2, '').display(valeur)
                depense = $.fn.dataTable.render.number(' ', ',', 2, '').display(depense)
                marge = $.fn.dataTable.render.number(' ', ',', 2, '').display(marge)

                return $('<tr/>')
                    .append(
                        '<td style="background-color:#E91E63!important;color:#FFFFFF !important; font-weight: 600 !important;"></td>',
                    )
                    .append(
                        '<td style="background-color:#E91E63!important;color:#FFFFFF !important; font-weight: 600 !important;">' +
                        group +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        valeur +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        regle +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        solde +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        depense +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        marge +
                        '</td>',
                    )
            },
            dataSrc: 3,
        },
    })
    $('#dataSous').DataTable({
        stateSave: true,
        retrieve: true,
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
        buttons: [
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
                text: '10',
                className: 'fred3',
                extend: 'pageLength',
            },
        ],
        columnDefs: [
            {targets: 2, visible: false},
            {targets: 0, className: 'text-left'},
            {targets: [3, 4, 5, 6], className: 'text-right'},
        ],
        order: [
            [2, 'asc'],
            [1, 'asc']
        ],
        displayLength: 15,
        rowGroup: {
            dataSrc: 2,
            startRender: function (rows, group) {
                var solde = rows
                    .data()
                    .pluck(4)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var regle = rows
                    .data()
                    .pluck(3)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var valeur = rows
                    .data()
                    .pluck(1)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                var depense = rows
                    .data()
                    .pluck(5)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)


                var balance = rows
                    .data()
                    .pluck(6)
                    .reduce(function (a, b) {
                        b = b.split(' ').join('')
                        b = b.split(',').join('.')
                        b = parseFloat(b)
                        return a + b
                    }, 0)

                solde = $.fn.dataTable.render.number(' ', ',', 2, '').display(solde)
                regle = $.fn.dataTable.render.number(' ', ',', 2, '').display(regle)
                valeur = $.fn.dataTable.render.number(' ', ',', 2, '').display(valeur)
                depense = $.fn.dataTable.render.number(' ', ',', 2, '').display(depense)
                balance = $.fn.dataTable.render.number(' ', ',', 2, '').display(balance)

                return $('<tr/>')
                    .append(
                        '<td style="text-align:left;background-color:#FF9800!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        group +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        valeur +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        regle +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        solde +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        depense +
                        '</td>',
                    )
                    .append(
                        '<td style="text-align:right;background-color: #607D8B!important; color:#FFFFFF !important; font-weight: 600 !important;">' +
                        balance +
                        '</td>',
                    )
            },
        },
        "drawCallback": function (row, data, start, end, display) {
            const api = this.api();

            let tcout = api.column(1).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let tregle = api.column(3).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let tsolde = api.column(4).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let tdepense = api.column(5).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);

            let tbalance = api.column(6).data().reduce(function (a, b) {
                b = b.split(' ').join('')
                b = b.split(',').join('.')
                b = parseFloat(b)
                return a + b
            }, 0);


            api.column(1).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tcout);
            api.column(3).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tregle);
            api.column(4).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tsolde);
            api.column(5).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tdepense);
            api.column(6).footer().innerHTML = $.fn.dataTable.render.number(' ', ',', 2, '').display(tbalance);
        }
    })
})
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
        if ($(this).closest('form').valid()) {
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
                window.location.href = '/crm/chantieretude/'
            }).catch(function (error) {
                $('#Traitement').modal('hide');
                $('#ModalErreur').modal('show');
            });
        }
    }
)
;
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
                                    formatNumber(chantier.progression, 2, ' ') + "%",
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
                                    formatNumber(chantier.progression, 2, ' ') + "%",
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
                url: '/crm/chantiers/getdatass/clients',
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
        $(".ploc").val(data["reste"].replaceAll(' ', ''));
        $(".dvfac").empty();
        $(".dvfac").append('<span class="col-blue-grey bolo700 h5">Facture Total TTC:</span><span class="col-pink bolo700 h5"> ' + data["ttc"] + '</span>');
        $(".dvface").empty();
        $(".dvface").append('<span class="col-blue-grey bolo700 h5">Règlements effectués:</span><span class="col-pink bolo700 h5"> ' + data["regler"] + '</span>');
        $(".dvfaces").empty();
        $(".dvfaces").append('<span class="col-blue-grey bolo700 h5">Reste à régler:</span><span class="col-pink bolo700 h5"> ' + data["reste"] + '</span>');
        $(".resta").append(data["reste"]);
    });

})
$('#addReglementChantiers').on("click", function (event) {
    event.preventDefault();
    if ($(this).closest('form').valid()) {
        let rest = $('.resta').html().replaceAll(' ', '');
        $(".restu").append(" ");
        let vivo = $('#addReglementForm').find('input[name="montant"]').val();
        if (parseFloat(vivo) <= parseFloat(rest)) {
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
        } else {
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
$('#veligne').on('change', function () {
    let id = $('#addCaisseForm option:selected').val();
    $.ajax({
        type: 'GET',
        url: '/crm/budget/devis/lignes/' + id,
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function (respdata, textStatus, jqXHR) {
            let lignes = respdata;
            lignes.map((lign) => {
                $('#prevcaiss').append('<option value=' + lign.id + '>' + lign.designation + '</option>');
            });
        },
        error: function (xhr, resp, text) {
            $('#ModalErreur').modal('show')
        },
    })
});
$('#selbox').on('change', function () {
    let id = this.value;
    $.ajax({
        type: 'GET',
        url: '/crm/budget/bon/lignes/' + id,
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function (respdata, textStatus, jqXHR) {
            let lignes = respdata;
            lignes.map((lign) => {
                $('#prevfour').append('<option value=' + lign.id + '>' + lign.designation + '</option>');
            });
        },
        error: function (xhr, resp, text) {
            $('#ModalErreur').modal('show')
        },
    })
});
$('#selboxa').on('change', function () {
    let id = this.value;
    $.ajax({
        type: 'GET',
        url: '/crm/budget/bon/lignes/' + id,
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function (respdata, textStatus, jqXHR) {
            let lignes = respdata;
            lignes.map((lign) => {
                $('#prevpresta').append('<option value=' + lign.id + '>' + lign.designation + '</option>');
            });
        },
        error: function (xhr, resp, text) {
            $('#ModalErreur').modal('show')
        },
    })
});
if ($("#idchan").val()) {
    $('#modalChantier').modal('show');
}
$('#updateChanier').on("click", async function (event) {
    event.preventDefault()
    if ($(this).closest('form').valid()) {
        const id = $("#idchan").val();
        const page = $("#page").val();
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
            if (page === "chancours") {
                window.location.href = '/crm/chantiercours';
            }
        }).catch(function (error) {
            $('#Traitement').modal('hide');
        });
    }
});




