const { useEffect, useState } = React;
const {createRoot} = ReactDOM;
const App = () => {
    const [data, setDatas] = useState([]);
    const [loading, setLoading] = useState(false);
    let [lood, setLood] = useState(0);
    const length = Object.keys(data).length;

    if (length === 0 && $('#jsonclients').val() !== undefined) {
           axios({
               method: 'GET',
               url: '/crm/chantiers/getdatass/clients',
               contentType: 'application/json; charset=utf-8'
           }).then(function (response) {
               setDatas(response.data);
               setLoading(true);
               setLood(lood++);
               $("#jsonclients").remove();
               $('#setbons').removeClass('hide');
               $('#setdevis').removeClass('hide');
               $('#setcaisses').removeClass('hide');
           }).catch(function (error) {
               $('#ModalErreur').modal('show');
           });
       }

    const formatNumber = (num, precision, separator) => {
        let parts;
        num = Number(num);
        num = (typeof precision !== 'undefined' ? num.toFixed(precision) : num).toString();
        parts = num.split('.');
        parts[0] = parts[0].toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1' + (separator));
        return parts.join(',');
    }

    useEffect(() => {
             const $selclient = $('.selclient');
             const $selchantier = $('.selchantier');

             $('.selclient').html('');
             $('.selchantier').html('');

             data.map((client) => {
                 if (client.corbeille === null && client.type === null) {
                     const group = $('<option value="' + client.id + '" >' + client.nomclient + '</option>');
                     group.appendTo($selclient);
                 }
             });
             data.map((client) => {
                 const chantiers = client.chantiers;
                 let count = 0;
                 if (chantiers.length > 0) {
                     chantiers.map((chantier) => {
                         if (chantier.archiver !== 'oui' && chantier.corbeille === null) {
                             count++;
                         }
                     });
                 }

                 if (client.corbeille === null && client.type === null) {
                     if (count > 0) {
                         const group = $('<optgroup label="' + client.nomclient + '" />');
                         chantiers.map((chantier) => {
                             if (chantier.archiver !== 'oui' && chantier.corbeille === null) {
                                 $('<option value="' + chantier.id + '"  />').html(chantier.nomchantier).appendTo(group);
                             }
                         });
                         group.appendTo($selchantier);
                     }
                 }
             });

             $('#dataClients').DataTable({
                         ajax: {
                             "url": '/crm/chantiers/getdatas/clients',
                             "contentType": "application/json",
                             "type": "GET",
                             complete: function () {
                                 $('.dadclients').removeClass('panel-grey ');
                                 $('.dadclients').addClass('panel-pri');
                             }
                         },
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
                                 previous: '<i class="fa fa-chevron-left"/>',
                                 next: '<i class="fa fa-chevron-right"/>',
                             },
                         },
                         dom: 'Bfrtip',
                         buttons: [{
                             text: '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
                             className: 'fred2',
                             action: function (e, dt, node, config) {
                                 if (false === $("input[class='CLYE']").prop('checked')) {
                                     $("input[class='CLYE']").prop('checked', true)
                                 } else {
                                     $("input[class='CLYE']").prop('checked', false)
                                 }
                             },
                             titleAttr: 'Cocher tout /  Décocher tout',
                         },
                             {
                                 text: '<i class="fa fa fa-edit fa-2x"/>',
                                 className: 'edit',
                                 action: function (e, dt, node, config) {
                                     $("input:checkbox[class='CLYE']:checked").each(async function () {
                                         $('#addClientForm')[0].reset();
                                         const id = $(this).val();
                                         $('#Traitement').modal('show')
                                         await axios({
                                             method: 'GET',
                                             url: '/crm/client/get/' + id,
                                             dataType: 'json',
                                         }).then(function (response) {
                                             localStorage.setItem('token', id.toString());
                                             let data = response.data;
                                             $('#modalClient').modal('show');
                                             $('#clfa').removeClass('hide');
                                             $('#clfb').addClass('hide');

                                             $('#divClienter').removeClass('hide');
                                             $('#divClient').addClass('hide');

                                             $('.cls').addClass('col-pink');
                                             $("#nomclient").val(data.nomclient);
                                             $("#code").val(data.code);
                                             $("#adresse").val(data.adresse);
                                             $("#contact").val(data.contact);
                                             $("#contribuable").val(data.contribuable);

                                             $('#Traitement').modal('hide');
                                         }).catch(function (error) {
                                             $('#Traitement').modal('hide');
                                             $('#ModalErreur').modal('show');
                                         });


                                     })
                                 },
                                 titleAttr: 'Modifier le client',
                             },
                             {
                                 text: '<i class="fa fa-trash fa-2x"></i>',
                                 className: 'del',
                                 action: function (e, dt, node, config) {
                                     $("input:checkbox[class='CLYE']:checked").each(async function () {
                                         let pos = $(this).closest('tr').get(0);
                                         let id = $(this).val();
                                         $('#ConfirmDelete').modal('hide')
                                         $('#Traitement').modal('show')
                                         await axios({
                                             method: 'DELETE',
                                             url: '/crm/client/delete/' + id,
                                             contentType: 'application/json; charset=utf-8',
                                             dataType: 'json',
                                         }).then(function (response) {
                                             setDatas(response.data);
                                             $('#dataClients').DataTable().ajax.reload();
                                             $('#dataCours').DataTable().ajax.reload();
                                             $('#dataSous').DataTable().ajax.reload();
                                             $('#dataArchive').DataTable().ajax.reload();
                                             $('#dataTerminer').DataTable().ajax.reload();
                                             $('#dataContocts').DataTable().ajax.reload();
                                             $('#Traitement').modal('hide');
                                         }).catch(function (error) {
                                             $('#Traitement').modal('hide');
                                             $('#ModalErreur').modal('show');
                                         });
                                     })
                                 },
                                 titleAttr: 'Supprimer',
                             },
                             {
                                 extend: 'copy',
                                 className: 'coppy',
                                 text: '<i class="fa fa-copy fa-2x"/>',
                                 titleAttr: 'Copy',
                             },
                             {
                                 extend: 'excel',
                                 className: 'ecel',
                                 text: '<i class="fa fa-file-excel  fa-2x" ></i>',
                                 titleAttr: 'Excel',
                             },
                             {
                                 extend: 'pdf',
                                 orientation: 'landscape',
                                 pageSize: 'LEGAL',
                                 className: 'pdff',
                                 text: '<i class="fa fa-file-pdf fa-2x"/>',
                                 titleAttr: 'PDF',
                             },
                             {
                                 extend: 'print',
                                 className: 'printt',
                                 text: '<i class="fa fa-print fa-2x"/>',
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
                             {targets: [0, 5], className: 'text-center'},
                             {orderable: false, targets: [0]},
                         ],
                         order: [
                             [1, 'asc']
                         ],
                     });
             $('#dataCours').DataTable({
                 ajax: {
                     "url": '/crm/chantiers/getdatas/chantiers',
                     "contentType": "application/json",
                     "type": "GET",
                     complete: function () {
                         $('.dadcours').removeClass('panel-grey');
                         $('.dadcours').addClass('panel-pri');
                     }
                 },
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
                 buttons: [{
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
                                     $('#ModalErreur').modal('show');
                                 });
                             })
                         },
                         titleAttr: 'Modifier le chantier',
                     },
                     {
                         text: '<i class="fa fa fa-archive fa-2x col-blue"></i>',
                         className: 'fred',
                         action: function (e, dt, node, config) {
                             $("input:checkbox[class='PROJY']:checked").each(async function () {
                                 let id = $(this).val();
                                 $('#ConfirmDelete').modal('hide')
                                 $('#Traitement').modal('show')
                                 await axios({
                                     method: 'GET',
                                     url: '/crm/chantiers/archiver/' + id,
                                     dataType: 'json',
                                 }).then(function (response) {
                                     setDatas(response.data);
                                     $('#dataCours').DataTable().ajax.reload();
                                     $('#dataSous').DataTable().ajax.reload();
                                     $('#dataArchive').DataTable().ajax.reload();
                                     $('#dataTerminer').DataTable().ajax.reload();
                                     $('#Traitement').modal('hide');
                                 }).catch(function (error) {
                                     $('#Traitement').modal('hide');
                                     $('#ModalErreur').modal('show');
                                 });
                             })
                         },
                         titleAttr: 'Archiver',
                     },
                     {
                         text: '<i class="fas fa-flag-checkered col-orange"/>',
                         className: 'valider',
                         action: function (e, dt, node, config) {
                             $("input:checkbox[class='PROJY']:checked").each(async function () {
                                 let id = $(this).val();
                                 $('#ConfirmDelete').modal('hide')
                                 $('#Traitement').modal('show')
                                 await axios({
                                     method: 'GET',
                                     url: '/crm/chantiers/terminer/' + id,
                                     dataType: 'json',
                                 }).then(function (response) {
                                     setDatas(response.data);
                                     $('#dataCours').DataTable().ajax.reload();
                                     $('#dataSous').DataTable().ajax.reload();
                                     $('#dataArchive').DataTable().ajax.reload();
                                     $('#dataTerminer').DataTable().ajax.reload();
                                     $('#Traitement').modal('hide');
                                 }).catch(function (error) {
                                     $('#Traitement').modal('hide');
                                     $('#ModalErreur').modal('show');
                                 });
                             })
                         },
                         titleAttr: 'Clôturer',
                     },
                     {
                         text: '<i class="fa fa-trash fa-2x"></i>',
                         className: 'del',
                         action: function (e, dt, node, config) {
                             $("input:checkbox[class='PROJY']:checked").each(async function () {
                                 let pos = $(this).closest('tr').get(0);
                                 let id = $(this).val();
                                 $('#ConfirmDelete').modal('hide')
                                 $('#Traitement').modal('show')
                                 await axios({
                                     method: 'DELETE',
                                     url: '/crm/chantiers/del/' + id,
                                     contentType: 'application/json; charset=utf-8',
                                     dataType: 'json',
                                 }).then(function (response) {
                                     const tablePr = $('#dataCours').DataTable();
                                     tablePr.rows(pos).remove().draw();
                                     $('#Traitement').modal('hide');
                                     setDatas(response.data);
                                     $('#dataClients').DataTable().ajax.reload();
                                     $('#dataCours').DataTable().ajax.reload();
                                     $('#dataSous').DataTable().ajax.reload();
                                     $('#dataArchive').DataTable().ajax.reload();
                                     $('#dataTerminer').DataTable().ajax.reload();
                                     $('#dataContocts').DataTable().ajax.reload();
                                 }).catch(function (error) {
                                     $('#Traitement').modal('hide');
                                     $('#ModalErreur').modal('show');
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
                     {targets: [3, 4, 5, 6, 7, 8], className: 'text-right'},
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
                 "footerCallback": function (row, data, start, end, display) {
                     const api = this.api();
                     let cout = api
                         .column(3)
                         .data()
                         .reduce(function (a, b) {
                             b = b.split(' ').join('')
                             b = b.split(',').join('.')
                             b = parseFloat(b)
                             return a + b
                         }, 0);

                     let regle = api
                         .column(4)
                         .data()
                         .reduce(function (a, b) {
                             b = b.split(' ').join('')
                             b = b.split(',').join('.')
                             b = parseFloat(b)
                             return a + b
                         }, 0);

                     let solde = api
                         .column(5)
                         .data()
                         .reduce(function (a, b) {
                             b = b.split(' ').join('')
                             b = b.split(',').join('.')
                             b = parseFloat(b)
                             return a + b
                         }, 0);

                     let depense = api
                         .column(6)
                         .data()
                         .reduce(function (a, b) {
                             b = b.split(' ').join('')
                             b = b.split(',').join('.')
                             b = parseFloat(b)
                             return a + b
                         }, 0);

                     let marge = api
                         .column(7)
                         .data()
                         .reduce(function (a, b) {
                             b = b.split(' ').join('')
                             b = b.split(',').join('.')
                             b = parseFloat(b)
                             return a + b
                         }, 0);

                     let balance = api
                         .column(8)
                         .data()
                         .reduce(function (a, b) {
                             b = b.split(' ').join('')
                             b = b.split(',').join('.')
                             b = parseFloat(b)
                             return a + b
                         }, 0);


                     cout = $.fn.dataTable.render.number(' ', ',', 2, '').display(cout);
                     regle = $.fn.dataTable.render.number(' ', ',', 2, '').display(regle);
                     solde = $.fn.dataTable.render.number(' ', ',', 2, '').display(solde);
                     depense = $.fn.dataTable.render.number(' ', ',', 2, '').display(depense);
                     marge = $.fn.dataTable.render.number(' ', ',', 2, '').display(marge);
                     balance = $.fn.dataTable.render.number(' ', ',', 2, '').display(balance)

                     $(api.column(3).footer()).html(cout);
                     $(api.column(4).footer()).html(regle);
                     $(api.column(5).footer()).html(solde);
                     $(api.column(6).footer()).html(depense);
                     $(api.column(7).footer()).html(marge);
                     $(api.column(8).footer()).html(balance);

                 }
             });
             $('#dataSous').DataTable({
                 ajax: {
                     "url": '/crm/chantiers/getdatas/sous',
                     "contentType": "application/json",
                     "type": "GET",
                     complete: function () {
                         $('.dadsous').removeClass('panel-grey');
                         $('.dadsous').addClass('panel-pri');
                     }
                 },
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
                 buttons: [{
                     text: '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
                     className: 'fred2',
                     action: function (e, dt, node, config) {
                         if (false === $("input[class='PROJYS']").prop('checked')) {
                             $("input[class='PROJYS']").prop('checked', true)
                         } else {
                             $("input[class='PROJYS']").prop('checked', false)
                         }
                     },
                     titleAttr: 'Cocher tout /  Décocher tout',
                 },
                     {
                         text: '<i class="fa fa fa-edit fa-2x"></i>',
                         className: 'edit',
                         action: function (e, dt, node, config) {
                             $("input:checkbox[class='PROJYS']:checked").each(async function () {
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
                                     $('#ModalErreur').modal('show');
                                 });
                             })
                         },
                         titleAttr: 'Modifier le chantier',
                     },
                     {
                         text: '<i class="fa fa fa-archive fa-2x col-blue"></i>',
                         className: 'fred',
                         action: function (e, dt, node, config) {
                             $("input:checkbox[class='PROJYS']:checked").each(async function () {
                                 let pos = $(this).closest('tr').get(0);
                                 let id = $(this).val();
                                 $('#ConfirmDelete').modal('hide')
                                 $('#Traitement').modal('show')
                                 await axios({
                                     method: 'GET',
                                     url: '/crm/chantiers/archiver/' + id,
                                     dataType: 'json',
                                 }).then(function (response) {
                                     setDatas(response.data);
                                     $('#dataClients').DataTable().ajax.reload();
                                     $('#dataCours').DataTable().ajax.reload();
                                     $('#dataSous').DataTable().ajax.reload();
                                     $('#dataArchive').DataTable().ajax.reload();
                                     $('#dataTerminer').DataTable().ajax.reload();
                                     $('#dataContocts').DataTable().ajax.reload();
                                     $('#Traitement').modal('hide');
                                 }).catch(function (error) {
                                     $('#Traitement').modal('hide');
                                     $('#ModalErreur').modal('show');
                                 });
                             })
                         },
                         titleAttr: 'Archiver',
                     },
                     {
                         text: '<i class="fas fa-flag-checkered col-orange"/>',
                         className: 'valider',
                         action: function (e, dt, node, config) {
                             $("input:checkbox[class='PROJYS']:checked").each(async function () {
                                 let pos = $(this).closest('tr').get(0);
                                 let id = $(this).val();
                                 $('#ConfirmDelete').modal('hide')
                                 $('#Traitement').modal('show')
                                 await axios({
                                     method: 'GET',
                                     url: '/crm/chantiers/terminer/' + id,
                                     dataType: 'json',
                                 }).then(function (response) {
                                     setDatas(response.data);
                                     $('#dataClients').DataTable().ajax.reload();
                                     $('#dataCours').DataTable().ajax.reload();
                                     $('#dataSous').DataTable().ajax.reload();
                                     $('#dataArchive').DataTable().ajax.reload();
                                     $('#dataTerminer').DataTable().ajax.reload();
                                     $('#dataContocts').DataTable().ajax.reload();
                                     $('#Traitement').modal('hide');
                                 }).catch(function (error) {
                                     $('#Traitement').modal('hide');
                                     $('#ModalErreur').modal('show');
                                 });
                             })
                         },
                         titleAttr: 'Clôturer',
                     },
                     {
                         text: '<i class="fa fa-trash fa-2x"></i>',
                         className: 'del',
                         action: function (e, dt, node, config) {
                             $("input:checkbox[class='PROJYS']:checked").each(async function () {
                                 let pos = $(this).closest('tr').get(0);
                                 let id = $(this).val();
                                 $('#ConfirmDelete').modal('hide')
                                 $('#Traitement').modal('show')
                                 await axios({
                                     method: 'DELETE',
                                     url: '/crm/chantiers/del/' + id,
                                     contentType: 'application/json; charset=utf-8',
                                     dataType: 'json',
                                 }).then(function (response) {
                                     const tablePr = $('#dataSous').DataTable();
                                     tablePr.rows(pos).remove().draw();
                                     setDatas(response.data);
                                     $('#dataClients').DataTable().ajax.reload();
                                     $('#dataCours').DataTable().ajax.reload();
                                     $('#dataSous').DataTable().ajax.reload();
                                     $('#dataArchive').DataTable().ajax.reload();
                                     $('#dataTerminer').DataTable().ajax.reload();
                                     $('#dataContocts').DataTable().ajax.reload();
                                     $('#Traitement').modal('hide');
                                 }).catch(function (error) {
                                     $('#Traitement').modal('hide');
                                     $('#ModalErreur').modal('show');
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
                     {targets: 3, visible: false,},
                     {targets: 0, className: 'text-center'},
                     {targets: [2, 4, 5, 6, 7, 8], className: 'text-right'},
                     {orderable: false, targets: [0]},
                 ],
                 order: [
                     [3, 'asc']
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
                                 '<td style="text-align:right;background-color:#FF9800!important; color:#FFFFFF !important; font-weight: 600 !important;"></td>',
                             )
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

             });
             $('#dataArchive').DataTable({
                 ajax: {
                     "url": '/crm/chantiers/getdatas/archiver',
                     "contentType": "application/json",
                     "type": "GET",
                     complete: function () {
                         $('.dadarchiver').removeClass('panel-grey');
                         $('.dadarchiver').addClass('panel-pri');
                     }
                 },
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
                 buttons: [{
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
                         text: '<i class="fa fa fa-edit fa-2x"></i>',
                         className: 'edit',
                         action: function (e, dt, node, config) {
                             $("input:checkbox[class='PROJY2']:checked").each(async function () {
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
                                     $('#ModalErreur').modal('show');
                                 });
                             })
                         },
                         titleAttr: 'Modifier le chantier',
                     },
                     {
                         text: '<i class="fa fa fa-archive fa-2x col-blue"></i>',
                         className: 'fred',
                         action: function (e, dt, node, config) {
                             $("input:checkbox[class='PROJY2']:checked").each(async function () {
                                 let id = $(this).val();
                                 $('#ConfirmDelete').modal('hide')
                                 $('#Traitement').modal('show')
                                 await axios({
                                     method: 'GET',
                                     url: '/crm/chantiers/archiver/' + id,
                                     dataType: 'json',
                                 }).then(function (response) {
                                     setDatas(response.data);

                                     $('#dataClients').DataTable().ajax.reload();
                                     $('#dataCours').DataTable().ajax.reload();
                                     $('#dataSous').DataTable().ajax.reload();
                                     $('#dataArchive').DataTable().ajax.reload();
                                     $('#dataTerminer').DataTable().ajax.reload();
                                     $('#dataContocts').DataTable().ajax.reload();

                                     $('#Traitement').modal('hide');
                                 }).catch(function (error) {
                                     $('#Traitement').modal('hide');
                                     $('#ModalErreur').modal('show');
                                 });
                             })
                         },
                         titleAttr: 'Relancer',
                     },
                     {
                         text: '<i class="fas fa-flag-checkered col-orange"/>',
                         className: 'valider',
                         action: function (e, dt, node, config) {
                             $("input:checkbox[class='PROJY2']:checked").each(async function () {
                                 let id = $(this).val();
                                 $('#ConfirmDelete').modal('hide')
                                 $('#Traitement').modal('show')
                                 await axios({
                                     method: 'GET',
                                     url: '/crm/chantiers/terminer/' + id,
                                     dataType: 'json',
                                 }).then(function (response) {
                                     setDatas(response.data);
                                     $('#dataClients').DataTable().ajax.reload();
                                     $('#dataCours').DataTable().ajax.reload();
                                     $('#dataSous').DataTable().ajax.reload();
                                     $('#dataArchive').DataTable().ajax.reload();
                                     $('#dataTerminer').DataTable().ajax.reload();
                                     $('#dataContocts').DataTable().ajax.reload();
                                     $('#Traitement').modal('hide');
                                 }).catch(function (error) {
                                     $('#Traitement').modal('hide');
                                     $('#ModalErreur').modal('show');
                                 });
                             })
                         },
                         titleAttr: 'Clôturer',
                     },
                     {
                         text: '<i class="fa fa-trash fa-2x"></i>',
                         className: 'del',
                         action: function (e, dt, node, config) {
                             $("input:checkbox[class='PROJY2']:checked").each(async function () {
                                 let pos = $(this).closest('tr').get(0);
                                 let id = $(this).val();
                                 $('#ConfirmDelete').modal('hide')
                                 $('#Traitement').modal('show')
                                 await axios({
                                     method: 'DELETE',
                                     url: '/crm/chantiers/del/' + id,
                                     contentType: 'application/json; charset=utf-8',
                                     dataType: 'json',
                                 }).then(function (response) {
                                     const tablePr = $('#dataArchive').DataTable();
                                     tablePr.rows(pos).remove().draw();
                                     setDatas(response.data);
                                     $('#dataClients').DataTable().ajax.reload();
                                     $('#dataCours').DataTable().ajax.reload();
                                     $('#dataSous').DataTable().ajax.reload();
                                     $('#dataArchive').DataTable().ajax.reload();
                                     $('#dataTerminer').DataTable().ajax.reload();
                                     $('#dataContocts').DataTable().ajax.reload();
                                     $('#Traitement').modal('hide');
                                 }).catch(function (error) {
                                     $('#Traitement').modal('hide');
                                     $('#ModalErreur').modal('show');
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
                     {targets: 3, visible: false,},
                     {targets: 0, className: 'text-center'},
                     {targets: [2, 4, 5, 6, 7, 8], className: 'text-right'},
                     {orderable: false, targets: [0]},
                 ],
                 order: [
                     [3, 'asc']
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
                                 '<td style="background-color:  #00BCD4!important;color:#FFFFFF !important; font-weight: 600 !important;"></td>',
                             )
                             .append(
                                 '<td style="background-color:  #00BCD4!important;color:#FFFFFF !important; font-weight: 600 !important;">' +
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

             });
             $('#dataTerminer').DataTable({
                 ajax: {
                     "url": '/crm/chantiers/getdatas/terminer',
                     "contentType": "application/json",
                     "type": "GET",
                     complete: function () {
                         $('.dadterminer').removeClass('panel-grey');
                         $('.dadterminer').addClass('panel-pri');
                     }
                 },
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
                 buttons: [{
                     text: '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
                     className: 'fred2',
                     action: function (e, dt, node, config) {
                         if (false === $("input[class='PROJY3']").prop('checked')) {
                             $("input[class='PROJY3']").prop('checked', true)
                         } else {
                             $("input[class='PROJY3']").prop('checked', false)
                         }
                     },
                     titleAttr: 'Cocher tout /  Décocher tout',
                 },
                     {
                         text: '<i class="fa fa fa-edit fa-2x"></i>',
                         className: 'edit',
                         action: function (e, dt, node, config) {
                             $("input:checkbox[class='PROJY3']:checked").each(async function () {
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
                                     $('#ModalErreur').modal('show');
                                 });
                             })
                         },
                         titleAttr: 'Modifier le chantier',
                     },
                     {
                         text: '<i class="fa fa fa-archive fa-2x col-blue"></i>',
                         className: 'fred',
                         action: function (e, dt, node, config) {
                             $("input:checkbox[class='PROJY3']:checked").each(async function () {
                                 let id = $(this).val();
                                 $('#ConfirmDelete').modal('hide')
                                 $('#Traitement').modal('show')
                                 await axios({
                                     method: 'GET',
                                     url: '/crm/chantiers/archiver/' + id,
                                     dataType: 'json',
                                 }).then(function (response) {
                                     setDatas(response.data);
                                     $('#dataClients').DataTable().ajax.reload();
                                     $('#dataCours').DataTable().ajax.reload();
                                     $('#dataSous').DataTable().ajax.reload();
                                     $('#dataArchive').DataTable().ajax.reload();
                                     $('#dataTerminer').DataTable().ajax.reload();
                                     $('#dataContocts').DataTable().ajax.reload();
                                     $('#Traitement').modal('hide');
                                 }).catch(function (error) {
                                     $('#Traitement').modal('hide');
                                     $('#ModalErreur').modal('show');
                                 });
                             })
                         },
                         titleAttr: 'Archiver/Relancer',
                     },
                     {
                         text: '<i class="fas fa-flag-checkered col-orange"/>',
                         className: 'valider',
                         action: function (e, dt, node, config) {
                             $("input:checkbox[class='PROJY3']:checked").each(async function () {
                                 let id = $(this).val();
                                 $('#ConfirmDelete').modal('hide')
                                 $('#Traitement').modal('show')
                                 await axios({
                                     method: 'GET',
                                     url: '/crm/chantiers/terminer/' + id,
                                     dataType: 'json',
                                 }).then(function (response) {
                                     setDatas(response.data);
                                     $('#dataClients').DataTable().ajax.reload();
                                     $('#dataCours').DataTable().ajax.reload();
                                     $('#dataSous').DataTable().ajax.reload();
                                     $('#dataArchive').DataTable().ajax.reload();
                                     $('#dataTerminer').DataTable().ajax.reload();
                                     $('#dataContocts').DataTable().ajax.reload();
                                     $('#Traitement').modal('hide');
                                 }).catch(function (error) {
                                     $('#Traitement').modal('hide');
                                     $('#ModalErreur').modal('show');
                                 });
                             })
                         },
                         titleAttr: 'Clôturer/Relancer',
                     },
                     {
                         text: '<i class="fa fa-trash fa-2x"></i>',
                         className: 'del',
                         action: function (e, dt, node, config) {
                             $("input:checkbox[class='PROJY3']:checked").each(async function () {
                                 let pos = $(this).closest('tr').get(0);
                                 let id = $(this).val();
                                 $('#ConfirmDelete').modal('hide')
                                 $('#Traitement').modal('show')
                                 await axios({
                                     method: 'DELETE',
                                     url: '/crm/chantiers/del/' + id,
                                     contentType: 'application/json; charset=utf-8',
                                     dataType: 'json',
                                 }).then(function (response) {
                                     const tablePr = $('#dataTerminer').DataTable();
                                     tablePr.rows(pos).remove().draw();
                                     setDatas(response.data);
                                     $('#dataClients').DataTable().ajax.reload();
                                     $('#dataCours').DataTable().ajax.reload();
                                     $('#dataSous').DataTable().ajax.reload();
                                     $('#dataArchive').DataTable().ajax.reload();
                                     $('#dataTerminer').DataTable().ajax.reload();
                                     $('#dataContocts').DataTable().ajax.reload();
                                     $('#Traitement').modal('hide');
                                 }).catch(function (error) {
                                     $('#Traitement').modal('hide');
                                     $('#ModalErreur').modal('show');
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
                     {targets: 3, visible: false,},
                     {targets: 0, className: 'text-center'},
                     {targets: [2, 4, 5, 6, 7, 8], className: 'text-right'},
                     {orderable: false, targets: [0]},
                 ],
                 order: [
                     [3, 'asc']
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

             });
             $('#dataContocts').DataTable({
                 ajax: {
                     "url": '/crm/chantiers/getdatas/contacts',
                     "contentType": "application/json",
                     "type": "GET",
                     complete: function () {
                         $('.loaditi').addClass('hide');
                         $('.dadcontacts').removeClass('panel-grey ');
                         $('.dadcontacts').addClass('panel-pri');
                     }
                 },
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
                         text:
                             '<i class="fa fa-check-square fa-2x"></i> / <i class="far fa-square fa-2x"></i>',
                         className: 'fred2',
                         action: function (e, dt, node, config) {
                             if (false === $("input[class='CONTAK']").prop('checked')) {
                                 $("input[class='CONTAK']").prop('checked', true)
                             } else {
                                 $("input[class='CONTAK']").prop('checked', false)
                             }
                         },
                         titleAttr: 'Cocher tout /  Décocher tout',
                     },
                     {
                         text: '<i class="fa fa fa-edit fa-2x"></i>',
                         className: 'edit',
                         action: function (e, dt, node, config) {
                             $("input:checkbox[class='CONTAK']:checked").each(async function () {
                                 $('#addContactForm')[0].reset();
                                 let id = $(this).val();
                                 $('#Traitement').modal('show')
                                 await axios({
                                     method: 'GET',
                                     url: '/crm/chantiers/getcontact/' + id,
                                     dataType: 'json',
                                 }).then(function (response) {
                                     localStorage.setItem('token', id.toString());
                                     let da = response.data;
                                     console.log(da);
                                     $('#loadContact').hide();
                                     $('#modalContact').modal('show');
                                     $('#cofa').removeClass('hide');
                                     $('#cofb').addClass('hide');

                                     $('#divContacte').removeClass('hide');
                                     $('#divContact').addClass('hide');

                                     $('.cohr').addClass('col-pink');
                                     $('.chors').addClass('col-pink');

                                     $('#addContactForm').find('select[id="client"]').val(da.client.id.toString());
                                     $('#addContactForm').find('input[id="contact"]').val(da.contact);
                                     $('#addContactForm').find('input[id="fonction"]').val(da.fonction);
                                     $('#addContactForm').find('input[id="mail"]').val(da.mail);
                                     $('#addContactForm').find('input[id="phone"]').val(da.phone);
                                     $('#addContactForm').find('input[id="bureau"]').val(da.bureau);
                                     $('#Traitement').modal('hide');
                                 }).catch(function (error) {
                                     $('#Traitement').modal('hide');
                                     $('#ModalErreur').modal('show');
                                 });
                             })
                         },
                         titleAttr: 'Modifier le Contact',
                     },
                     {
                         text: '<i class="fa fa-trash fa-2x"></i>',
                         className: 'del',
                         action: function (e, dt, node, config) {
                             $("input:checkbox[class='CONTAK']:checked").each(async function () {
                                 let pos = $(this).closest('tr').get(0);
                                 let id = $(this).val();
                                 $('#ConfirmDelete').modal('hide')
                                 $('#Traitement').modal('show')
                                 await axios({
                                     method: 'DELETE',
                                     url: '/crm/contact/del/' + id,
                                     contentType: 'application/json; charset=utf-8',
                                     dataType: 'json',
                                 }).then(function (response) {
                                     const tablePr = $('#dataContacts').DataTable();
                                     tablePr.rows(pos).remove().draw();
                                     setDatas(response.data);
                                     $('#dataClients').DataTable().ajax.reload();
                                     $('#dataCours').DataTable().ajax.reload();
                                     $('#dataSous').DataTable().ajax.reload();
                                     $('#dataArchive').DataTable().ajax.reload();
                                     $('#dataTerminer').DataTable().ajax.reload();
                                     $('#dataContocts').DataTable().ajax.reload();
                                     $('#Traitement').modal('hide');
                                 }).catch(function (error) {
                                     $('#Traitement').modal('hide');
                                     $('#ModalErreur').modal('show');
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
                         text: '20',
                         className: 'fred3',
                         extend: 'pageLength',
                         titleAttr: 'Nombre de pages',
                     },
                 ],
                 displayLength: 10,
                 lengthMenu: [
                     [20, 40, 60, 80, 100, -1],
                     ['20', '40', '60', '80', '100', 'Tout'],
                 ],
                 columnDefs: [
                     {targets: 0, className: 'text-center'},
                     {targets: [2, 3, 4, 5], className: 'text-right'},
                     {targets: 7, visible: false,},
                     {orderable: false, targets: [0]},

                 ],
                 order: [
                     [7, 'asc']
                 ],
                 rowGroup: {
                     startRender: function (rows, group) {
                         return $('<tr/>').append(
                             '<td colspan="8" class="col-blue bolo700" style="background-color: #dbdfef">' + group + '</td>',
                         )
                     },
                     dataSrc: 7,
                 },
             });


         }, [data]);

    const moclient = () => {
        $('#clfa').addClass('hide');
        $('#clfb').removeClass('hide');
        $('.cls').removeClass('col-pink');
        $('#addClientForm')[0].reset();
        $('#divClienter').addClass('hide');
        $('#divClient').removeClass('hide');
        $('#modalClient').modal('show');
    }
    $('#addClient').off().on("click", async function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#divClient').hide();
            $('#loadClient').css('display', '')
            await axios({
                method: 'POST',
                url: '/crm/client/add',
                data: JSON.stringify($('#addClientForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
            }).then(function (response) {
                setDatas(response.data);
                $('#divClient').show();
                $('#loadClient').hide();
                $('#dataClients').DataTable().ajax.reload();
                $('#dataCours').DataTable().ajax.reload();
                $('#dataSous').DataTable().ajax.reload();
                $('#dataArchive').DataTable().ajax.reload();
                $('#dataTerminer').DataTable().ajax.reload();
                $('#dataContocts').DataTable().ajax.reload();
                if ($('#collapseOne_0').hasClass('collapse')) {
                    $('#collapseOne_0').collapse('toggle');
                }
                $('#modalClient').modal('toggle');
            }).catch(function (error) {
                $('#Traitement').modal('hide');
                $('#ModalErreur').modal('show');
            });
        }
    })
    $('#updateClient').off().on("click", async function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#divClienter').hide();
            $('#loadClient').show();
            const id = localStorage.getItem('token');
            await axios({
                method: 'PUT',
                url: '/crm/client/update/' + id,
                data: JSON.stringify($('#addClientForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
            }).then(function (response) {
                setDatas(response.data);
                $('#modalClient').modal('toggle');
                $('#divClienter').show();
                $('#loadClient').hide();
                $('#dataClients').DataTable().ajax.reload();
                $('#dataCours').DataTable().ajax.reload();
                $('#dataSous').DataTable().ajax.reload();
                $('#dataArchive').DataTable().ajax.reload();
                $('#dataTerminer').DataTable().ajax.reload();
                $('#dataContocts').DataTable().ajax.reload();
            }).catch(function (error) {
                $('#Traitement').modal('hide');
                $('#ModalErreur').modal('show');
                $('#loadClient').hide();
            });
        }
    })

    const mochantier = () => {
        $('#chfa').addClass('hide');
        $('#chfb').removeClass('hide');
        $('#divChantiere').addClass('hide');
        $('#divChantier').removeClass('hide');
        $('.chr').removeClass('col-pink');
        $('.chrs').removeClass('col-pink');
        $('#addChantierForm')[0].reset();
        $('#modalChantier').modal('show');
    }
    $('#addChantier').off().on("click", async function (event) {
        event.preventDefault();
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
                $('#dataClients').DataTable().ajax.reload();
                $('#dataCours').DataTable().ajax.reload();
                $('#dataSous').DataTable().ajax.reload();
                $('#dataArchive').DataTable().ajax.reload();
                $('#dataTerminer').DataTable().ajax.reload();
                $('#dataContocts').DataTable().ajax.reload();
                $('#divChantier').show();
                $('#loadChantier').hide();
                if ($('#collapseOne_1p').hasClass('collapse')) {
                    $('#collapseOne_1p').collapse('toggle');
                }
                $('#modalChantier').modal('toggle');
            }).catch(function (error) {
                $('#Traitement').modal('hide');
                $('#ModalErreur').modal('show');
            });
        }
    });
    $('#updateChr').off().on("click", async function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            const id = localStorage.getItem('token');
            $('#divChantiere').hide();
            $('#loadChantier').css('display', '');
            $('#description').val(CKEDITOR.instances['description'].getData());
            await axios({
                method: 'PUT',
                url: '/crm/chantiers/update/' + id,
                data: JSON.stringify($('#addChantierForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
            }).then(function (response) {
                $('#modalChantier').modal('toggle');
                $('#divChantiere').show();
                $('#loadChantier').hide();
                $('#dataClients').DataTable().ajax.reload();
                $('#dataCours').DataTable().ajax.reload();
                $('#dataSous').DataTable().ajax.reload();
                $('#dataArchive').DataTable().ajax.reload();
                $('#dataTerminer').DataTable().ajax.reload();
                $('#dataContocts').DataTable().ajax.reload();
            }).catch(function (error) {
                $('#Traitement').modal('hide');
                $('#ModalErreur').modal('show');
            });
        }
    })

    const mocontact = () => {
        $('#cofa').addClass('hide');
        $('#cofb').removeClass('hide');
        $('.cohr').removeClass('col-pink');
        $('.chors').removeClass('col-pink');
        $('#addContactForm')[0].reset();
        $('#divContacte').addClass('hide');
        $('#divContact').removeClass('hide');
        $('#modalContact').modal('show');
    }
    $('#addeContact').off().on("click", async function (event) {
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
                $('#modalContact').modal('toggle');
                $('#divContact').show();
                $('#loadContact').hide();
                setDatas(response.data);
                $('#dataClients').DataTable().ajax.reload();
                $('#dataCours').DataTable().ajax.reload();
                $('#dataSous').DataTable().ajax.reload();
                $('#dataArchive').DataTable().ajax.reload();
                $('#dataTerminer').DataTable().ajax.reload();
                $('#dataContocts').DataTable().ajax.reload();
            }).catch(function (error) {
                $('#ModalErreur').modal('show');
            });

        }
    })
    $('#updateContact').off().on("click", async function (event) {
        event.preventDefault()
        if ($(this).closest('form').valid()) {
            $('#divContacte').hide()
            $('#loadContact').css('display', '');
            const id = localStorage.getItem('token');
            await axios({
                method: 'PUT',
                url: '/crm/contact/update/' + id + '/chantiers',
                data: JSON.stringify($('#addContactForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
            }).then(function (response) {
                $('#modalContact').modal('toggle');
                $('#divContacte').show();
                $('#loadClient').hide();
                setDatas(response.data);
                $('#dataClients').DataTable().ajax.reload();
                $('#dataCours').DataTable().ajax.reload();
                $('#dataSous').DataTable().ajax.reload();
                $('#dataArchive').DataTable().ajax.reload();
                $('#dataTerminer').DataTable().ajax.reload();
                $('#dataContocts').DataTable().ajax.reload();
            }).catch(function (error) {
                $('#ModalErreur').modal('show');
                $('#divContacte').show();
                $('#loadContact').hide();
            });
        }
    })

     return (
            <>
               <h4 className="col-blue bolo600 loaditi m-t--20">Chargement de vos données <img src="/img/loading.gif" width="30" height="30"/></h4>
                   <div className="container-fluid diti">
                        <div className="block-header">
                            <div className="row clearfix">
                                <div className="col-sm-12 ">
                                    <h4 className="bolo700">
                                        Client - Chantier - Contact
                                    </h4>
                                </div>
                            </div>
                             <div className="row clearfix p-b-5">
                                <div className="col-sm-12">
                                    <a type="button" className="btn btn-primary m-r-5 col-white"
                                       style={{textAlign: "left"}} onClick={() => {
                                        moclient()
                                    }}>AJOUTER UN CLIENT</a>

                                    <a type="button" className="btn btn-primary m-r-5 col-white"
                                       style={{textAlign: "left"}} onClick={() => {
                                        mochantier()
                                    }}> AJOUTER UN CHANTIER</a>

                                    <a type="button" className="btn btn-primary m-r-5 col-white"
                                       style={{textAlign: "left"}} onClick={() => {
                                        mocontact()
                                    }}> AJOUTER UN CONTACT</a>

                                </div>
                             </div>
                             <div className="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">
                                <div className="panel panel-grey  dadclients shadow">
                                     <div className="panel-heading" role="tab" id="headingOne_1">
                                         <h5 className="panel-title">
                                             <a className="collapsed col-white outai" role="button"
                                                data-toggle="collapse"
                                                data-parent="#accordion_0" href="#collapseOne_0" aria-expanded="false"
                                                aria-controls="collapseOne_0">
                                                 <i className="material-icons col-white"
                                                    style={{fontSize: "18px", float: "left"}}>keyboard_arrow_down</i>Clients
                                             </a>
                                         </h5>
                                     </div>
                                     <div id="collapseOne_0" className="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne_0">
                                         <div className="panel-body">
                                             <div className="table-responsive shadow" style={{padding: "20px", overflow: "scroll"}}>
                                                         <table className="table-bordered  display nowrap" id="dataClients" style={{width: "100%"}}>
                                                              <thead>
                                                                     <tr>
                                                                        <th className="text-center mw30"/>
                                                                        <th className="mw200">CLIENTS</th>
                                                                        <th className="mw100">N°&nbsp;DE&nbsp;CLIENT</th>
                                                                        <th className="mw200">ADRESSE</th>
                                                                        <th className="mw200">CONTACTS</th>
                                                                        <th className="mw100">COMPTE&nbsp;C.</th>
                                                                     </tr>
                                                              </thead>
                                                             <tbody></tbody>
                                                        </table>
                                                </div>
                                           </div>
                                      </div>
                                   </div>
                                </div>
                         </div>
                   </div>
            </>
      );
}
const pager = $('#pager').val();
if (pager === 'chantiers') {
    const root = createRoot(document.getElementById('setchantier'));
    root.render(<App />);
}
