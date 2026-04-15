<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/authentications' => [
            [['_route' => 'authentication_token'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'apilogin', '_controller' => 'App\\Controller\\ConnexionController::apilogin'], null, null, null, false, false, null],
        ],
        '/' => [[['_route' => 'app_accueil', '_controller' => 'App\\Controller\\AccueilController::accueil'], null, null, null, false, false, null]],
        '/api/article/get' => [[['_route' => 'api_article', '_controller' => 'App\\Controller\\ApiArticleController::gertArticles'], null, ['POST' => 0], null, false, false, null]],
        '/api/article/famille/python/get' => [[['_route' => 'api_get_famille_article', '_controller' => 'App\\Controller\\ApiArticleController::getFamillesArticle'], null, null, null, false, false, null]],
        '/api/article/sousfamille/python/get' => [[['_route' => 'api_get_sousfamille_article', '_controller' => 'App\\Controller\\ApiArticleController::getSousFamillesArticle'], null, null, null, false, false, null]],
        '/api/article/fournisseur/get' => [[['_route' => 'api_get_fournisseur_article', '_controller' => 'App\\Controller\\ApiArticleController::getFournisseurArticle'], null, null, null, false, false, null]],
        '/api/besoins/ios/get' => [[['_route' => 'apibesoins', '_controller' => 'App\\Controller\\ApiBesoinsController::getAllBesoins'], null, ['POST' => 0], null, false, false, null]],
        '/api/bon/caisse' => [[['_route' => 'api_bon_caisse', '_controller' => 'App\\Controller\\ApiBonCaisseController::index'], null, ['POST' => 0], null, true, false, null]],
        '/api/caisse/charges/get' => [[['_route' => 'api_caisse_charge', '_controller' => 'App\\Controller\\ApiCaisseController::chargeInternes'], null, ['POST' => 0], null, false, false, null]],
        '/api/caisse/valider' => [[['_route' => 'api_caisse_valide_caisse', '_controller' => 'App\\Controller\\ApiCaisseController::valider'], null, ['POST' => 0], null, false, false, null]],
        '/api/caisse/devalider' => [[['_route' => 'api_caisse_devalide_caisse', '_controller' => 'App\\Controller\\ApiCaisseController::devalider'], null, ['POST' => 0], null, false, false, null]],
        '/api/caisse/delete' => [[['_route' => 'api_caisse_delete_caisse', '_controller' => 'App\\Controller\\ApiCaisseController::delete'], null, ['POST' => 0], null, false, false, null]],
        '/api/caisse/pdf/get' => [[['_route' => 'api_caisse_pdf_caisse', '_controller' => 'App\\Controller\\ApiCaisseController::pdff'], null, ['POST' => 0], null, false, false, null]],
        '/api/caisse/paie/get' => [[['_route' => 'api_caisse_paie_caisse', '_controller' => 'App\\Controller\\ApiCaisseController::paie'], null, ['POST' => 0], null, false, false, null]],
        '/api/caisse/travaux' => [[['_route' => 'api_caisse_travaux', '_controller' => 'App\\Controller\\ApiCaisseController::last'], null, ['POST' => 0], null, false, false, null]],
        '/api/caisse/caiscais/get' => [[['_route' => 'api_get_cais_all', '_controller' => 'App\\Controller\\ApiCaisseController::all'], null, ['POST' => 0], null, false, false, null]],
        '/api/chantier/ios/get' => [[['_route' => 'apichantierios', '_controller' => 'App\\Controller\\ApiChantierController::ioschantier'], null, ['POST' => 0], null, false, false, null]],
        '/api/chantier/windows/get' => [[['_route' => 'apichantierwindows', '_controller' => 'App\\Controller\\ApiChantierController::windowsChantier'], null, ['POST' => 0], null, false, false, null]],
        '/api/chantier/python/get' => [[['_route' => 'apigetchantiers', '_controller' => 'App\\Controller\\ApiChantierController::index'], null, ['POST' => 0], null, false, false, null]],
        '/api/chat/tache/get' => [[['_route' => 'api_get_chat_tache', '_controller' => 'App\\Controller\\ApiChatController::tachez'], null, ['POST' => 0], null, false, false, null]],
        '/api/client/get' => [[['_route' => 'api_client', '_controller' => 'App\\Controller\\ApiClientController::allclients'], null, ['POST' => 0], null, false, false, null]],
        '/api/client/ios/get' => [[['_route' => 'apiclientios', '_controller' => 'App\\Controller\\ApiClientController::allclientsios'], null, ['POST' => 0], null, false, false, null]],
        '/api/client/windows/add' => [[['_route' => 'api_add_client_windows', '_controller' => 'App\\Controller\\ApiClientController::addClientwindows'], null, ['POST' => 0], null, false, false, null]],
        '/api/client/python/add' => [[['_route' => 'api_add_client', '_controller' => 'App\\Controller\\ApiClientController::addClient'], null, ['POST' => 0], null, false, false, null]],
        '/api/client/pdf/get' => [[['_route' => 'api_clients', '_controller' => 'App\\Controller\\ApiClientController::pdff'], null, ['POST' => 0], null, false, false, null]],
        '/api/commande/bonfournisseur/get' => [[['_route' => 'api_get_bons_fou', '_controller' => 'App\\Controller\\ApiCommandeController::allbonsfournisseurs'], null, ['POST' => 0], null, false, false, null]],
        '/api/commande/bonsuivi/get' => [[['_route' => 'api_get_bons_suivi', '_controller' => 'App\\Controller\\ApiCommandeController::allbonssuivi'], null, ['POST' => 0], null, false, false, null]],
        '/api/commande/bonprestataire/get' => [[['_route' => 'api_get_bons_prestas', '_controller' => 'App\\Controller\\ApiCommandeController::allbonsprestataire'], null, ['POST' => 0], null, false, false, null]],
        '/api/commande/pdf/get' => [[['_route' => 'api_commande_pdf_bon', '_controller' => 'App\\Controller\\ApiCommandeController::pdff'], null, ['POST' => 0], null, false, false, null]],
        '/api/commande/apdf/get' => [[['_route' => 'api_commande_apdf_bon', '_controller' => 'App\\Controller\\ApiCommandeController::apdff'], null, ['POST' => 0], null, false, false, null]],
        '/api/commande/groupe' => [[['_route' => 'api_commande_groupe_bon', '_controller' => 'App\\Controller\\ApiCommandeController::adgroupe'], null, ['POST' => 0], null, false, false, null]],
        '/api/commande/getgroupe' => [[['_route' => 'api_commande_getgroupe_bon', '_controller' => 'App\\Controller\\ApiCommandeController::getgroupe'], null, ['POST' => 0], null, false, false, null]],
        '/api/commande/travaux' => [[['_route' => 'api_commande_travaux', '_controller' => 'App\\Controller\\ApiCommandeController::last'], null, ['POST' => 0], null, false, false, null]],
        '/api/commande/excel/get' => [[['_route' => 'api_bon_excel_bon', '_controller' => 'App\\Controller\\ApiCommandeController::excel'], null, ['POST' => 0], null, false, false, null]],
        '/api/contacts/pdf/get' => [[['_route' => 'api_chantier_pdf', '_controller' => 'App\\Controller\\ApiContactController::pdff'], null, ['POST' => 0], null, false, false, null]],
        '/api/corbeille/get' => [[['_route' => 'api_corbeille', '_controller' => 'App\\Controller\\ApiCorbeilleController::index'], null, ['POST' => 0], null, false, false, null]],
        '/api/corbeille/client/get' => [[['_route' => 'api_client_corbeille', '_controller' => 'App\\Controller\\ApiCorbeilleController::getClientes'], null, ['POST' => 0], null, false, false, null]],
        '/api/corbeille/chantier/get' => [[['_route' => 'api_chantier_corbeille', '_controller' => 'App\\Controller\\ApiCorbeilleController::getChans'], null, ['POST' => 0], null, false, false, null]],
        '/api/decompte/valide' => [[['_route' => 'api_decompte_valide', '_controller' => 'App\\Controller\\ApiDecompteController::valider'], null, ['POST' => 0], null, false, false, null]],
        '/api/decompte/decdec/get' => [[['_route' => 'api_get_dec_all', '_controller' => 'App\\Controller\\ApiDecompteController::all'], null, ['POST' => 0], null, false, false, null]],
        '/api/devis/devdev/get' => [[['_route' => 'api_get_devis_nom_valider', '_controller' => 'App\\Controller\\ApiDevisController::nonvalider'], null, ['POST' => 0], null, false, false, null]],
        '/api/devis/delete' => [[['_route' => 'api_devis_delete_devis', '_controller' => 'App\\Controller\\ApiDevisController::delete'], null, ['POST' => 0], null, false, false, null]],
        '/api/devis/pdf/get' => [[['_route' => 'api_devis_pdf_devis', '_controller' => 'App\\Controller\\ApiDevisController::pdff'], null, ['POST' => 0], null, false, false, null]],
        '/api/devis/apdf/get' => [[['_route' => 'api_devis_pdf_adevis', '_controller' => 'App\\Controller\\ApiDevisController::apdff'], null, ['POST' => 0], null, false, false, null]],
        '/api/devis/excel/get' => [[['_route' => 'api_devis_excel_devis', '_controller' => 'App\\Controller\\ApiDevisController::excel'], null, ['POST' => 0], null, false, false, null]],
        '/api/devis/travaux' => [[['_route' => 'api_devis_travaux_devis', '_controller' => 'App\\Controller\\ApiDevisController::last'], null, ['POST' => 0], null, false, false, null]],
        '/api/droits/comptable/get' => [[['_route' => 'apidroitcomptable', '_controller' => 'App\\Controller\\ApiDroitsController::droitcomptable'], null, ['POST' => 0], null, false, false, null]],
        '/api/facture/pdf/get' => [[['_route' => 'api_facture_pdf_facture', '_controller' => 'App\\Controller\\ApiFactureController::pdff'], null, ['POST' => 0], null, false, false, null]],
        '/api/facture/facfac/get' => [[['_route' => 'api_get_fac_all', '_controller' => 'App\\Controller\\ApiFactureController::all'], null, ['POST' => 0], null, false, false, null]],
        '/api/fichier/get' => [[['_route' => 'api_get_fichier', '_controller' => 'App\\Controller\\ApiFichierController::index'], null, ['POST' => 0], null, false, false, null]],
        '/api/fichier/technique/add' => [[['_route' => 'api_technique_fichier', '_controller' => 'App\\Controller\\ApiFichierController::addfichiertechnique'], null, ['POST' => 0], null, false, false, null]],
        '/api/fichier/descriptif/add' => [[['_route' => 'api_descriptif_fichier', '_controller' => 'App\\Controller\\ApiFichierController::addfichierdescriptif'], null, ['POST' => 0], null, false, false, null]],
        '/api/forme/get' => [[['_route' => 'api_get_forme', '_controller' => 'App\\Controller\\ApiFormeController::index'], null, ['POST' => 0], null, false, false, null]],
        '/api/fournisseur/get' => [[['_route' => 'api_fournisseurs', '_controller' => 'App\\Controller\\ApiFournisseurController::getFournisseurs'], null, ['POST' => 0], null, false, false, null]],
        '/api/fournisseur/fournes/get' => [[['_route' => 'api_fournes_get', '_controller' => 'App\\Controller\\ApiFournisseurController::fournes'], null, ['POST' => 0], null, false, false, null]],
        '/api/fournisseur/prestataires/get' => [[['_route' => 'api_prestataires_get', '_controller' => 'App\\Controller\\ApiFournisseurController::getPresta'], null, ['POST' => 0], null, false, false, null]],
        '/api/fournisseur/presta/get' => [[['_route' => 'api_presta_get', '_controller' => 'App\\Controller\\ApiFournisseurController::getPrestataire'], null, ['POST' => 0], null, false, false, null]],
        '/api/fournisseur/fourni/get' => [[['_route' => 'api_fourniget', '_controller' => 'App\\Controller\\ApiFournisseurController::getFournis'], null, ['POST' => 0], null, false, false, null]],
        '/api/fournisseur/fournisseur/get' => [[['_route' => 'api_fournisseurs_get', '_controller' => 'App\\Controller\\ApiFournisseurController::getFourni'], null, ['POST' => 0], null, false, false, null]],
        '/api/intervecaisse' => [[['_route' => 'api_interve_caisse', '_controller' => 'App\\Controller\\ApiInterveCaisseController::index'], null, ['POST' => 0], null, true, false, null]],
        '/api/lignes' => [[['_route' => 'apilignes', '_controller' => 'App\\Controller\\ApiLignesController::index'], null, ['POST' => 0], null, true, false, null]],
        '/api/materiel/get' => [[['_route' => 'api_materiel', '_controller' => 'App\\Controller\\ApiMaterielController::getMateriels'], null, null, null, false, false, null]],
        '/api/materiel/famille/get' => [[['_route' => 'api_get_famille_materiel', '_controller' => 'App\\Controller\\ApiMaterielController::getFamillesMat'], null, null, null, false, false, null]],
        '/api/materiel/fournisseur/get' => [[['_route' => 'api_get_fournisseur_materiel', '_controller' => 'App\\Controller\\ApiMaterielController::getFournisseurMat'], null, null, null, false, false, null]],
        '/api/materiel/benef/get' => [[['_route' => 'api_get_benef', '_controller' => 'App\\Controller\\ApiMaterielController::getBenef'], null, null, null, false, false, null]],
        '/api/materiel/matchan/get' => [[['_route' => 'api_get_matchan', '_controller' => 'App\\Controller\\ApiMaterielController::getMatChan'], null, null, null, false, false, null]],
        '/api/materiel/matbenef/get' => [[['_route' => 'api_get_matbeneef', '_controller' => 'App\\Controller\\ApiMaterielController::getMatBenef'], null, null, null, false, false, null]],
        '/api/materiel/mathisto/get' => [[['_route' => 'api_get_mathisto', '_controller' => 'App\\Controller\\ApiMaterielController::getMatHisto'], null, null, null, false, false, null]],
        '/api/monnaie/get' => [[['_route' => 'api_get_monnaies', '_controller' => 'App\\Controller\\ApiMonnaieController::index'], null, ['POST' => 0], null, false, false, null]],
        '/api/personnel/get' => [[['_route' => 'api_personnel', '_controller' => 'App\\Controller\\ApiPersonnelController::loadPers'], null, ['POST' => 0], null, false, false, null]],
        '/api/personnel/get/chantier' => [[['_route' => 'api_personnel_chantier', '_controller' => 'App\\Controller\\ApiPersonnelController::chantierpersonnel'], null, ['POST' => 0], null, false, false, null]],
        '/api/personnel/service/get' => [[['_route' => 'api_service', '_controller' => 'App\\Controller\\ApiPersonnelController::loadService'], null, ['POST' => 0], null, false, false, null]],
        '/api/planning/tache/get' => [[['_route' => 'api_planning_tache', '_controller' => 'App\\Controller\\ApiPlanningController::getTaches'], null, ['POST' => 0], null, false, false, null]],
        '/api/planning/historique/get' => [[['_route' => 'api_historique', '_controller' => 'App\\Controller\\ApiPlanningController::getHistorique'], null, ['POST' => 0], null, false, false, null]],
        '/api/planning/section/get' => [[['_route' => 'api_section_tache', '_controller' => 'App\\Controller\\ApiPlanningController::getSections'], null, ['POST' => 0], null, false, false, null]],
        '/api/planning/get' => [[['_route' => 'api_planning', '_controller' => 'App\\Controller\\ApiPlanningController::getPlanning'], null, ['POST' => 0], null, false, false, null]],
        '/api/relever/get' => [[['_route' => 'api_all_relever', '_controller' => 'App\\Controller\\ApiReleverController::aprelever'], null, ['POST' => 0], null, false, false, null]],
        '/api/statut/get' => [[['_route' => 'apistatut', '_controller' => 'App\\Controller\\ApiStatutController::index'], null, ['POST' => 0], null, false, false, null]],
        '/api/statut/solde/get' => [[['_route' => 'api_solde_et', '_controller' => 'App\\Controller\\ApiStatutController::solde'], null, ['POST' => 0], null, false, false, null]],
        '/api/todo/get' => [[['_route' => 'api_todo', '_controller' => 'App\\Controller\\ApiTodoController::loadTodo'], null, ['POST' => 0], null, false, false, null]],
        '/api/travaux/devis/get' => [[['_route' => 'api_devis_jour_get', '_controller' => 'App\\Controller\\ApiTravauxController::getTravauxDevis'], null, ['POST' => 0], null, false, false, null]],
        '/api/travaux/bons/get' => [[['_route' => 'api_bon_jour_get', '_controller' => 'App\\Controller\\ApiTravauxController::getTravauxBon'], null, ['POST' => 0], null, false, false, null]],
        '/api/travaux/caisses/get' => [[['_route' => 'api_caisse_jour_get', '_controller' => 'App\\Controller\\ApiTravauxController::getTravauxCaisse'], null, ['POST' => 0], null, false, false, null]],
        '/api/travaux/decomptes/get' => [[['_route' => 'api_decompte_jour_get', '_controller' => 'App\\Controller\\ApiTravauxController::getTravauxDecomptes'], null, ['POST' => 0], null, false, false, null]],
        '/api/travaux/factures/get' => [[['_route' => 'api_facture_jour_get', '_controller' => 'App\\Controller\\ApiTravauxController::getTravauxFactures'], null, ['POST' => 0], null, false, false, null]],
        '/api/user/firste/get' => [[['_route' => 'apifirstget', '_controller' => 'App\\Controller\\ApiUserController::updateLangueThemeget'], null, ['POST' => 0], null, false, false, null]],
        '/api/user/formes' => [[['_route' => 'apiformes', '_controller' => 'App\\Controller\\ApiUserController::apiformes'], null, ['POST' => 0], null, false, false, null]],
        '/api/user/getusers' => [[['_route' => 'apiUser', '_controller' => 'App\\Controller\\ApiUserController::getUsers'], null, ['POST' => 0], null, false, false, null]],
        '/api/user/status' => [[['_route' => 'apiUserStatus', '_controller' => 'App\\Controller\\ApiUserController::setUsersStatus'], null, ['POST' => 0], null, false, false, null]],
        '/api/valider/get' => [[['_route' => 'apiallvalider', '_controller' => 'App\\Controller\\ApiValiderController::validers'], null, ['POST' => 0], null, false, false, null]],
        '/crm/article/add' => [[['_route' => 'addArticle', '_controller' => 'App\\Controller\\ArticleController::add'], null, ['POST' => 0], null, false, false, null]],
        '/crm/article' => [[['_route' => 'article', '_controller' => 'App\\Controller\\ArticleController::index'], null, null, null, true, false, null]],
        '/api/assistant-chantier' => [[['_route' => 'assistant_chantier', '_controller' => 'App\\Controller\\AssistantChantierController::analyse'], null, ['POST' => 0], null, false, false, null]],
        '/crm/bilan' => [[['_route' => 'bilan', '_controller' => 'App\\Controller\\BilanController::index'], null, null, null, true, false, null]],
        '/crm/bon/forme' => [[['_route' => 'miseformeBon', '_controller' => 'App\\Controller\\BonController::miseforme'], null, ['POST' => 0], null, false, false, null]],
        '/crm/bon/adde' => [[['_route' => 'addeBon', '_controller' => 'App\\Controller\\BonController::addeBon'], null, ['POST' => 0], null, false, false, null]],
        '/crm/bon/addi' => [[['_route' => 'addiiBon', '_controller' => 'App\\Controller\\BonController::addiBon'], null, ['POST' => 0], null, false, false, null]],
        '/crm/bon/presta/add' => [[['_route' => 'addPrestaBon', '_controller' => 'App\\Controller\\BonController::addPrestaBon'], null, ['POST' => 0], null, false, false, null]],
        '/crm/bon/chanpresta/adda' => [[['_route' => 'addPrestaBonStart', '_controller' => 'App\\Controller\\BonController::addPrestaBonStart'], null, ['POST' => 0], null, false, false, null]],
        '/crm/bon/fourn/add' => [[['_route' => 'addFournBon', '_controller' => 'App\\Controller\\BonController::addFourniBon'], null, ['POST' => 0], null, false, false, null]],
        '/crm/budget' => [[['_route' => 'budget', '_controller' => 'App\\Controller\\BudgetController::index'], null, null, null, true, false, null]],
        '/crm/caisse/adda' => [[['_route' => 'addaCaisse', '_controller' => 'App\\Controller\\CaisseController::addaCaisse'], null, ['POST' => 0], null, false, false, null]],
        '/crm/caisse/addfournisseur' => [[['_route' => 'addCaisseFourn', '_controller' => 'App\\Controller\\CaisseController::addCaisseFourn'], null, ['POST' => 0], null, false, false, null]],
        '/crm/caisse/addprestataire' => [[['_route' => 'addCaissePresta', '_controller' => 'App\\Controller\\CaisseController::addCaissePresta'], null, ['POST' => 0], null, false, false, null]],
        '/crm/caisse/adde' => [[['_route' => 'addeCaisse', '_controller' => 'App\\Controller\\CaisseController::addeCaisse'], null, ['POST' => 0], null, false, false, null]],
        '/crm/caisse/frais/add' => [[['_route' => 'addCaissefrais', '_controller' => 'App\\Controller\\CaisseController::addFraisCaisse'], null, ['POST' => 0], null, false, false, null]],
        '/crm/caisse/personnel/add' => [[['_route' => 'addCaissepersonnel', '_controller' => 'App\\Controller\\CaisseController::addPersonnelCaisse'], null, ['POST' => 0], null, false, false, null]],
        '/crm/caisse/paie/add' => [[['_route' => 'addPaie', '_controller' => 'App\\Controller\\CaisseController::addPaie'], null, ['POST' => 0], null, false, false, null]],
        '/crm/chantiersclotures' => [[['_route' => 'chanclotures', '_controller' => 'App\\Controller\\ChantiersCloturesController::chantermines'], null, null, null, true, false, null]],
        '/crm/chantiers/add' => [[['_route' => 'addChantier', '_controller' => 'App\\Controller\\ChantiersController::addChantier'], null, ['POST' => 0], null, false, false, null]],
        '/crm/chantiers/addetatchantier' => [[['_route' => 'addChantierEtat', '_controller' => 'App\\Controller\\ChantiersController::addChantierEtat'], null, ['POST' => 0], null, false, false, null]],
        '/crm/chantiers/reglement/chantiers/add' => [[['_route' => 'reglement', '_controller' => 'App\\Controller\\ChantiersController::reglementChantiers'], null, ['POST' => 0], null, false, false, null]],
        '/crm/chantiers' => [[['_route' => 'chantiers', '_controller' => 'App\\Controller\\ChantiersController::chantier'], null, null, null, true, false, null]],
        '/crm/chantiercours' => [[['_route' => 'chancours', '_controller' => 'App\\Controller\\ChantiersCoursController::chancours'], null, null, null, true, false, null]],
        '/crm/chantierechouer' => [[['_route' => 'chanechouer', '_controller' => 'App\\Controller\\ChantiersEchouesController::chanechouer'], null, null, null, true, false, null]],
        '/crm/chantieretude' => [[['_route' => 'chanetude', '_controller' => 'App\\Controller\\ChantiersEtudeController::chantieretude'], null, null, null, true, false, null]],
        '/crm/chantierstermines' => [[['_route' => 'chantermines', '_controller' => 'App\\Controller\\ChantiersTerminesController::chantermines'], null, null, null, true, false, null]],
        '/crm/chantierstous' => [[['_route' => 'chantous', '_controller' => 'App\\Controller\\ChantiersTousController::chantous'], null, null, null, true, false, null]],
        '/crm/chargesinternes' => [[['_route' => 'chargesinternes', '_controller' => 'App\\Controller\\ChargesInternesController::index'], null, null, null, true, false, null]],
        '/crm/chargespersonnelles' => [[['_route' => 'chargespersonnelles', '_controller' => 'App\\Controller\\ChargesPersonnellesController::index'], null, null, null, true, false, null]],
        '/crm/chat/tacher/get' => [[['_route' => 'gtache', '_controller' => 'App\\Controller\\ChatController::tachezz'], null, ['GET' => 0], null, false, false, null]],
        '/crm/chat' => [[['_route' => 'chatter', '_controller' => 'App\\Controller\\ChatController::index'], null, null, null, true, false, null]],
        '/crm/client/geet' => [[['_route' => 'geteee', '_controller' => 'App\\Controller\\ClientController::getClientee'], null, null, null, false, false, null]],
        '/crm/client/add' => [[['_route' => 'addClient', '_controller' => 'App\\Controller\\ClientController::addClient'], null, ['POST' => 0], null, false, false, null]],
        '/crm/comptesclients' => [[['_route' => 'comptesclients', '_controller' => 'App\\Controller\\ComptesClientsController::index'], null, null, null, true, false, null]],
        '/connexion' => [[['_route' => 'login', '_controller' => 'App\\Controller\\ConnexionController::formlogin'], null, null, null, false, false, null]],
        '/passe' => [[['_route' => 'passe', '_controller' => 'App\\Controller\\ConnexionController::passelogin'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\ConnexionController::logout'], null, null, null, false, false, null]],
        '/crm/contact/adde' => [[['_route' => 'addeContact', '_controller' => 'App\\Controller\\ContactController::adde'], null, ['POST' => 0], null, false, false, null]],
        '/crm/contact' => [[['_route' => 'contactclient', '_controller' => 'App\\Controller\\ContactController::editcontact'], null, null, null, true, false, null]],
        '/showroom' => [[['_route' => 'content', '_controller' => 'App\\Controller\\ContentController::index'], null, null, null, false, false, null]],
        '/crm/corbeille' => [[['_route' => 'corbeille', '_controller' => 'App\\Controller\\CorbeilleController::index'], null, null, null, true, false, null]],
        '/crm/decompte/adde' => [[['_route' => 'addeDecompte', '_controller' => 'App\\Controller\\DecompteController::addeDecompte'], null, ['POST' => 0], null, false, false, null]],
        '/crm/devis/forme' => [[['_route' => 'miseformeDevis', '_controller' => 'App\\Controller\\DevisController::miseforme'], null, ['POST' => 0], null, false, false, null]],
        '/crm/devis/adde' => [[['_route' => 'addeDevis', '_controller' => 'App\\Controller\\DevisController::addeDevis'], null, ['POST' => 0], null, false, false, null]],
        '/crm/dnbonsfournisseurs' => [[['_route' => 'dnbonsfournisseurs', '_controller' => 'App\\Controller\\DnBonsFournisseursController::bonfournisseurspage'], null, null, null, true, false, null]],
        '/crm/dnbonsprestataires' => [[['_route' => 'dnbonsprestataires', '_controller' => 'App\\Controller\\DnBonsPrestatairesController::bonprestatairespage'], null, null, null, true, false, null]],
        '/crm/dnchargeschantiers' => [[['_route' => 'dnchargeschantiers', '_controller' => 'App\\Controller\\DnChargesChantiersController::bonprestatairespage'], null, null, null, true, false, null]],
        '/crm/dndecomptes' => [[['_route' => 'dndecomptes', '_controller' => 'App\\Controller\\DnDecomptesController::dndecomptes'], null, null, null, true, false, null]],
        '/crm/dndevis' => [[['_route' => 'dndevis', '_controller' => 'App\\Controller\\DnDevisController::dndevispage'], null, null, null, true, false, null]],
        '/crm/dnfactures' => [[['_route' => 'dnfactures', '_controller' => 'App\\Controller\\DnFacturesController::dnfactures'], null, null, null, true, false, null]],
        '/crm/dnpaiesfournisseurs' => [[['_route' => 'dnpaiesfournisseurs', '_controller' => 'App\\Controller\\DnPaiesFournisseursController::paiesfournes'], null, null, null, true, false, null]],
        '/crm/dnpaiesprestataires' => [[['_route' => 'dnpaiesprestataires', '_controller' => 'App\\Controller\\DnPaiesPrestatairesController::paiespresta'], null, null, null, true, false, null]],
        '/crm/documents' => [[['_route' => 'lesdocs', '_controller' => 'App\\Controller\\DocumentController::lesdocs'], null, null, null, true, false, null]],
        '/crm/etat' => [[['_route' => 'etat', '_controller' => 'App\\Controller\\EtatController::index'], null, null, null, true, false, null]],
        '/crm/exercices' => [[['_route' => 'exercices', '_controller' => 'App\\Controller\\ExercicesController::exercicespages'], null, null, null, true, false, null]],
        '/crm/facture/adde' => [[['_route' => 'addeFacture', '_controller' => 'App\\Controller\\FactureController::addeFacture'], null, ['POST' => 0], null, false, false, null]],
        '/felicitations' => [[['_route' => 'felicitations', '_controller' => 'App\\Controller\\FelicitationsController::index'], null, null, null, false, false, null]],
        '/crm/fournisseur/adde' => [[['_route' => 'addeFournisseur', '_controller' => 'App\\Controller\\FournisseurController::adde'], null, ['POST' => 0], null, false, false, null]],
        '/crm/fournisseur' => [[['_route' => 'fournisseurs', '_controller' => 'App\\Controller\\FournisseurController::index'], null, null, null, true, false, null]],
        '/crm/gestion/fichier/chantiers/add' => [[['_route' => 'addfile_chantiers', '_controller' => 'App\\Controller\\GestionController::addfileChantier'], null, ['POST' => 0], null, false, false, null]],
        '/crm/gestion/fichier/technique/add' => [[['_route' => 'addfileTechnique', '_controller' => 'App\\Controller\\GestionController::addfileTechnique'], null, ['POST' => 0], null, false, false, null]],
        '/crm/gestion/fichier/loading/add' => [[['_route' => 'addfileLoad', '_controller' => 'App\\Controller\\GestionController::addfileLoad'], null, ['POST' => 0], null, false, false, null]],
        '/crm/gestion/fichier/descriptif/add' => [[['_route' => 'addfileDescriptif', '_controller' => 'App\\Controller\\GestionController::addfileDescriptif'], null, ['POST' => 0], null, false, false, null]],
        '/crm/historique' => [[['_route' => 'historique', '_controller' => 'App\\Controller\\HistoriqueController::index'], null, null, null, true, false, null]],
        '/crm/intervenant/adde' => [[['_route' => 'addeIntervenant', '_controller' => 'App\\Controller\\IntervenantController::adde'], null, ['POST' => 0], null, false, false, null]],
        '/crm/intervenant/operation/add' => [[['_route' => 'addOperationIntervenant', '_controller' => 'App\\Controller\\IntervenantController::addOperation'], null, ['POST' => 0], null, false, false, null]],
        '/crm/intervenant/deplacer' => [[['_route' => 'depIntervenant', '_controller' => 'App\\Controller\\IntervenantController::deplacerIntervenant'], null, ['POST' => 0], null, false, false, null]],
        '/crm/listeclient' => [[['_route' => 'listeclient', '_controller' => 'App\\Controller\\ListeClientController::index'], null, null, null, true, false, null]],
        '/crm/livraison/adde' => [[['_route' => 'addeLivraison', '_controller' => 'App\\Controller\\LivraisonController::addeLivraison'], null, ['POST' => 0], null, false, false, null]],
        '/crm/main' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::main'], null, null, null, true, false, null]],
        '/crm/materiel/add' => [[['_route' => 'addMateriel', '_controller' => 'App\\Controller\\MaterielController::addMateriel'], null, ['POST' => 0], null, false, false, null]],
        '/crm/materiel/affmat/chantier' => [[['_route' => 'affecterMaterielChantier', '_controller' => 'App\\Controller\\MaterielController::affMatChantier'], null, ['POST' => 0], null, false, false, null]],
        '/crm/materiel/attrmat/benef' => [[['_route' => 'attribuerMaterielBeneficiaire', '_controller' => 'App\\Controller\\MaterielController::attrMatBenef'], null, ['POST' => 0], null, false, false, null]],
        '/crm/materiel/restituer/benef' => [[['_route' => 'restituerBenef', '_controller' => 'App\\Controller\\MaterielController::restbeneficiaire'], null, ['POST' => 0], null, false, false, null]],
        '/crm/materiel/restitue/chantier' => [[['_route' => 'restituerchantier', '_controller' => 'App\\Controller\\MaterielController::restchantier'], null, ['POST' => 0], null, false, false, null]],
        '/crm/materiel/benef/add' => [[['_route' => 'addBeneficiaire', '_controller' => 'App\\Controller\\MaterielController::addBeneficiaire'], null, ['POST' => 0], null, false, false, null]],
        '/crm/materiel' => [[['_route' => 'materiel', '_controller' => 'App\\Controller\\MaterielController::index'], null, null, null, true, false, null]],
        '/crm/message/send' => [[['_route' => 'sendMessage', '_controller' => 'App\\Controller\\MessageController::sendMessage'], null, ['POST' => 0], null, false, false, null]],
        '/crm/message' => [[['_route' => 'message', '_controller' => 'App\\Controller\\MessageController::index'], null, null, null, true, false, null]],
        '/crm/pagechantiers' => [[['_route' => 'pagechantiers', '_controller' => 'App\\Controller\\PageChantiersController::pagechantiers'], null, null, null, true, false, null]],
        '/crm/start/users/get' => [[['_route' => 'getUserss', '_controller' => 'App\\Controller\\PageController::getUserss'], null, ['GET' => 0], null, false, false, null]],
        '/crm/start/gets' => [[['_route' => 'getTodos', '_controller' => 'App\\Controller\\PageController::getTodos'], null, ['GET' => 0], null, false, false, null]],
        '/crm/start/todo/add' => [[['_route' => 'addTodo', '_controller' => 'App\\Controller\\PageController::addTodo'], null, ['POST' => 0], null, false, false, null]],
        '/crm/start' => [[['_route' => 'page', '_controller' => 'App\\Controller\\PageController::page'], null, null, null, true, false, null]],
        '/crm/paie/fiche/add' => [[['_route' => 'addFichePaie', '_controller' => 'App\\Controller\\PaieController::addFichePaie'], null, ['POST' => 0], null, false, false, null]],
        '/crm/paie/journalier/add' => [[['_route' => 'addJournalier', '_controller' => 'App\\Controller\\PaieController::addJournaliers'], null, ['POST' => 0], null, false, false, null]],
        '/crm/paie' => [[['_route' => 'paie', '_controller' => 'App\\Controller\\PaieController::index'], null, null, null, true, false, null]],
        '/crm/parametre/sous/add' => [[['_route' => 'addSouscompte', '_controller' => 'App\\Controller\\ParametreController::addsouscompte'], null, ['POST' => 0], null, false, false, null]],
        '/crm/parametre/user/update' => [[['_route' => 'updateUser', '_controller' => 'App\\Controller\\ParametreController::updateUsere'], null, ['PUT' => 0], null, false, false, null]],
        '/crm/parametre/passe/update' => [[['_route' => 'updatePasse', '_controller' => 'App\\Controller\\ParametreController::updatePasse'], null, ['PUT' => 0], null, false, false, null]],
        '/crm/parametre' => [[['_route' => 'parametre', '_controller' => 'App\\Controller\\ParametreController::parametre'], null, null, null, true, false, null]],
        '/crm/personnel/image/user' => [[['_route' => 'addImageUser', '_controller' => 'App\\Controller\\PersonnelController::addImageUser'], null, ['POST' => 0], null, false, false, null]],
        '/crm/personnel/add' => [[['_route' => 'addPersonnel', '_controller' => 'App\\Controller\\PersonnelController::addPersonnel'], null, ['POST' => 0], null, false, false, null]],
        '/crm/personnel/operation/add' => [[['_route' => 'addInternePersonnel', '_controller' => 'App\\Controller\\PersonnelController::addOperInterne'], null, ['POST' => 0], null, false, false, null]],
        '/crm/personnel/service/add' => [[['_route' => 'addService', '_controller' => 'App\\Controller\\PersonnelController::addService'], null, ['POST' => 0], null, false, false, null]],
        '/crm/personnel/lier' => [[['_route' => 'lierSuperviseur', '_controller' => 'App\\Controller\\PersonnelController::lierSuperviseur'], null, ['POST' => 0], null, false, false, null]],
        '/crm/personnel' => [[['_route' => 'personnel', '_controller' => 'App\\Controller\\PersonnelController::index'], null, null, null, true, false, null]],
        '/crm/planning/gets' => [[['_route' => 'getallPlannings', '_controller' => 'App\\Controller\\PlanningController::getallPlannings'], null, ['GET' => 0], null, false, false, null]],
        '/crm/planning/equipes/get' => [[['_route' => 'getEquipesPlann', '_controller' => 'App\\Controller\\PlanningController::getEquipesPlann'], null, ['GET' => 0], null, false, false, null]],
        '/crm/planning/adde' => [[['_route' => 'addePlanning', '_controller' => 'App\\Controller\\PlanningController::addePlanning'], null, ['POST' => 0], null, false, false, null]],
        '/crm/planning/section/adde' => [[['_route' => 'addeSection', '_controller' => 'App\\Controller\\PlanningController::addeSection'], null, ['POST' => 0], null, false, false, null]],
        '/crm/planning/tache/adde' => [[['_route' => 'addeTache', '_controller' => 'App\\Controller\\PlanningController::addeTache'], null, ['POST' => 0], null, false, false, null]],
        '/crm/planning/equipe/adde' => [[['_route' => 'addeEquipe', '_controller' => 'App\\Controller\\PlanningController::addeEquipe'], null, ['POST' => 0], null, false, false, null]],
        '/crm/planning' => [[['_route' => 'planing', '_controller' => 'App\\Controller\\PlanningController::planing'], null, null, null, true, false, null]],
        '/crm/prestataire' => [[['_route' => 'prestataires', '_controller' => 'App\\Controller\\PrestataireController::index'], null, null, null, true, false, null]],
        '/crm/prevision/add' => [[['_route' => 'addPrevision', '_controller' => 'App\\Controller\\PrevisionController::addPrevision'], null, ['POST' => 0], null, false, false, null]],
        '/crm/rapportchantier' => [[['_route' => 'app_rapportchantier', '_controller' => 'App\\Controller\\RapportchantierController::index'], null, null, null, true, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/privacy/policy' => [[['_route' => 'privacy', '_controller' => 'App\\Controller\\RegistrationController::politie'], null, null, null, false, false, null]],
        '/resetpass' => [[['_route' => 'resetpassword', '_controller' => 'App\\Controller\\RegistrationController::forgottenPassword'], null, null, null, false, false, null]],
        '/crm/soldecompte' => [[['_route' => 'soldecompte', '_controller' => 'App\\Controller\\SoldeCompteController::index'], null, null, null, true, false, null]],
        '/crm/souschantier/forme' => [[['_route' => 'miseforme', '_controller' => 'App\\Controller\\SousChantierController::miseforme'], null, ['POST' => 0], null, false, false, null]],
        '/crm/souschantier' => [[['_route' => 'souschantier', '_controller' => 'App\\Controller\\SousChantierController::chancours'], null, null, null, true, false, null]],
        '/crm/sousfamille/add' => [[['_route' => 'addSousFamille', '_controller' => 'App\\Controller\\SousFamilleController::addSousFamille'], null, ['POST' => 0], null, false, false, null]],
        '/crm/welcome/alertes/get' => [[['_route' => 'getAlertes', '_controller' => 'App\\Controller\\StartController::getAlertes'], null, ['POST' => 0], null, false, false, null]],
        '/crm/welcome/exercices/add' => [[['_route' => 'addExercices', '_controller' => 'App\\Controller\\StartController::addExercices'], null, ['POST' => 0], null, false, false, null]],
        '/crm/welcome/besoins/add' => [[['_route' => 'addBesoins', '_controller' => 'App\\Controller\\StartController::addBesoins'], null, ['POST' => 0], null, false, false, null]],
        '/crm/welcome' => [[['_route' => 'welcome', '_controller' => 'App\\Controller\\StartController::page'], null, null, null, true, false, null]],
        '/crm/welcomes' => [[['_route' => 'welcomes', '_controller' => 'App\\Controller\\StarteController::page'], null, null, null, true, false, null]],
        '/crm/suivi/chauffeur/add' => [[['_route' => 'addChauffeur', '_controller' => 'App\\Controller\\SuiviController::addChauffeur'], null, ['POST' => 0], null, false, false, null]],
        '/crm/suivi/camion/add' => [[['_route' => 'addCamion', '_controller' => 'App\\Controller\\SuiviController::addCamion'], null, ['POST' => 0], null, false, false, null]],
        '/crm/suivi/add' => [[['_route' => 'addSuivi', '_controller' => 'App\\Controller\\SuiviController::addSuivi'], null, ['POST' => 0], null, false, false, null]],
        '/crm/suivi' => [[['_route' => 'appsuivi', '_controller' => 'App\\Controller\\SuiviController::index'], null, null, null, true, false, null]],
        '/crm/technique' => [[['_route' => 'technique', '_controller' => 'App\\Controller\\TechniqueController::chantier'], null, null, null, true, false, null]],
        '/crm/travauxjour' => [[['_route' => 'travauxjour', '_controller' => 'App\\Controller\\TravauxJourController::index'], null, null, null, true, false, null]],
        '/crm/tresorerie' => [[['_route' => 'app_tresorerie', '_controller' => 'App\\Controller\\TresorerieController::index'], null, null, null, true, false, null]],
        '/crm/webgl' => [[['_route' => 'webgler', '_controller' => 'App\\Controller\\WebglController::index'], null, null, null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/api/(?'
                    .'|a(?'
                        .'|lerte/(?'
                            .'|get/([^/]++)(*:235)'
                            .'|delete/([^/]++)(*:258)'
                        .')'
                        .'|rticle/(?'
                            .'|add/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:316)'
                            .'|update/(\\d+)/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:372)'
                            .'|delete/(\\d+)(*:392)'
                            .'|f(?'
                                .'|amille/python/(?'
                                    .'|add/([^/]++)(*:433)'
                                    .'|update/([^/]++)/([^/]++)(*:465)'
                                    .'|del/([^/]++)(*:485)'
                                .')'
                                .'|ournisseur/(?'
                                    .'|python/add/([^/]++)(*:527)'
                                    .'|update/([^/]++)/([^/]++)(*:559)'
                                    .'|delete/([^/]++)(*:582)'
                                .')'
                            .')'
                            .'|sousfamille/python/(?'
                                .'|add/([^/]++)/([^/]++)(*:635)'
                                .'|update/([^/]++)/([^/]++)/([^/]++)(*:676)'
                                .'|del/([^/]++)(*:696)'
                            .')'
                        .')'
                    .')'
                    .'|besoins/(?'
                        .'|delete/([^/]++)(*:733)'
                        .'|ios/(?'
                            .'|chatbesoin(?'
                                .'|/(?'
                                    .'|get/([^/]++)(*:777)'
                                    .'|delete/([^/]++)(*:800)'
                                .')'
                                .'|s/add/([^/]++)/([^/]++)(*:832)'
                            .')'
                            .'|add/([^/]++)(*:853)'
                        .')'
                        .'|cloturer/([^/]++)(*:879)'
                        .'|archiver/([^/]++)(*:904)'
                        .'|relancer/([^/]++)(*:929)'
                        .'|update/([^/]++)/([^/]++)(*:961)'
                    .')'
                    .'|c(?'
                        .'|aisse/(?'
                            .'|mo(?'
                                .'|is/([^/]++)(*:999)'
                                .'|ntant/([^/]++)/([^/]++)(*:1030)'
                            .')'
                            .'|chantier/(\\d+)(*:1054)'
                            .'|get/(\\d+)(*:1072)'
                            .'|history/(\\d+)(*:1094)'
                            .'|valid/([^/]++)(*:1117)'
                            .'|de(?'
                                .'|valid/([^/]++)(*:1145)'
                                .'|le/([^/]++)(*:1165)'
                            .')'
                            .'|add/(?'
                                .'|perso/([^/]++)/([^/]++)(*:1205)'
                                .'|charge/([^/]++)(*:1229)'
                            .')'
                            .'|fournisseur/add/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:1290)'
                        .')'
                        .'|ha(?'
                            .'|ntier/(?'
                                .'|python/add/([^/]++)/([^/]++)(*:1342)'
                                .'|upd/([^/]++)/([^/]++)/([^/]++)(*:1381)'
                                .'|a(?'
                                    .'|rchi/([^/]++)(*:1407)'
                                    .'|ccepter/([^/]++)(*:1432)'
                                .')'
                                .'|e(?'
                                    .'|chouer/([^/]++)(*:1461)'
                                    .'|ncours/([^/]++)(*:1485)'
                                .')'
                                .'|cloturer/([^/]++)(*:1512)'
                                .'|del/([^/]++)(*:1533)'
                                .'|(\\d+)(*:1547)'
                                .'|re(?'
                                    .'|gle(?'
                                        .'|ment/([^/]++)/([^/]++)/([^/]++)(*:1598)'
                                        .'|/delete/([^/]++)(*:1623)'
                                    .')'
                                    .'|lever/client/([^/]++)(*:1654)'
                                .')'
                                .'|get/window/([^/]++)(*:1683)'
                                .'|prestachan/([^/]++)/([^/]++)(*:1720)'
                            .')'
                            .'|t/(?'
                                .'|get/([^/]++)(*:1747)'
                                .'|message/([^/]++)/([^/]++)(*:1781)'
                                .'|share/([^/]++)/([^/]++)(*:1813)'
                                .'|read/([^/]++)/([^/]++)(*:1844)'
                                .'|t(?'
                                    .'|ache/message/([^/]++)(*:1878)'
                                    .'|echnique/add/([^/]++)/([^/]++)/([^/]++)(*:1926)'
                                .')'
                                .'|add/(?'
                                    .'|([^/]++)/([^/]++)/([^/]++)(*:1969)'
                                    .'|tache/([^/]++)/([^/]++)/([^/]++)(*:2010)'
                                .')'
                            .')'
                        .')'
                        .'|lient/(?'
                            .'|python/(?'
                                .'|([^/]++)/get(*:2053)'
                                .'|update/([^/]++)(*:2077)'
                                .'|delete/([^/]++)(*:2101)'
                            .')'
                            .'|searche/([^/]++)(*:2127)'
                            .'|relever(?'
                                .'|/get/([^/]++)(*:2159)'
                                .'|s/([^/]++)(*:2178)'
                            .')'
                            .'|delreglement/([^/]++)/([^/]++)(*:2218)'
                        .')'
                        .'|o(?'
                            .'|mmande/(?'
                                .'|get/(\\d+)(*:2251)'
                                .'|suivi/([^/]++)(*:2274)'
                                .'|chantier/(\\d+)/([^/]++)(*:2306)'
                                .'|valid(?'
                                    .'|e/([^/]++)(*:2333)'
                                    .'|one/([^/]++)(*:2354)'
                                    .'|/([^/]++)(*:2372)'
                                .')'
                                .'|d(?'
                                    .'|e(?'
                                        .'|va(?'
                                            .'|lid(?'
                                                .'|er/([^/]++)(*:2412)'
                                                .'|one/([^/]++)(*:2433)'
                                            .')'
                                            .'|/([^/]++)(*:2452)'
                                        .')'
                                        .'|l(?'
                                            .'|e(?'
                                                .'|/([^/]++)(*:2479)'
                                                .'|te/([^/]++)(*:2499)'
                                            .')'
                                            .'|one/([^/]++)(*:2521)'
                                            .'|groupe/(\\d+)/(\\d+)(*:2548)'
                                        .')'
                                        .'|placer/([^/]++)/([^/]++)(*:2582)'
                                    .')'
                                    .'|upliquer/([^/]++)(*:2609)'
                                .')'
                                .'|restaurer/([^/]++)(*:2637)'
                                .'|a(?'
                                    .'|dd/(?'
                                        .'|([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:2691)'
                                        .'|prepa/([^/]++)(*:2714)'
                                    .')'
                                    .'|pgroupe/([^/]++)(*:2740)'
                                .')'
                                .'|up(?'
                                    .'|date/([^/]++)/([^/]++)/([^/]++)(*:2786)'
                                    .'|groupe/(\\d+)/(\\d+)(*:2813)'
                                .')'
                            .')'
                            .'|ntacts/(?'
                                .'|python/(?'
                                    .'|add/([^/]++)/([^/]++)(*:2865)'
                                    .'|delete/([^/]++)(*:2889)'
                                    .'|upd/([^/]++)/([^/]++)/([^/]++)(*:2928)'
                                .')'
                                .'|client/([^/]++)(*:2953)'
                            .')'
                        .')'
                    .')'
                    .'|de(?'
                        .'|compte/(?'
                            .'|a(?'
                                .'|dd/(\\d+)/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:3037)'
                                .'|pdf/get/([^/]++)(*:3062)'
                            .')'
                            .'|update/(\\d+)/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:3129)'
                            .'|chantier/(\\d+)(*:3152)'
                            .'|get/(\\d+)(*:3170)'
                            .'|valider/([^/]++)(*:3195)'
                            .'|de(?'
                                .'|valider/([^/]++)(*:3225)'
                                .'|lete/(\\d+)(*:3244)'
                            .')'
                            .'|reloadligne/([^/]++)(*:3274)'
                            .'|ligne/([^/]++)/([^/]++)(*:3306)'
                            .'|pdf/get/([^/]++)(*:3331)'
                        .')'
                        .'|vis/(?'
                            .'|g(?'
                                .'|et(?'
                                    .'|/(\\d+)(*:3363)'
                                    .'|groupe/([^/]++)(*:3387)'
                                .')'
                                .'|roupe/([^/]++)(*:3411)'
                            .')'
                            .'|python/(?'
                                .'|get/(\\d+)(*:3440)'
                                .'|valider/([^/]++)/([^/]++)(*:3474)'
                                .'|devalider/([^/]++)/([^/]++)(*:3510)'
                            .')'
                            .'|chantier/(\\d+)(*:3534)'
                            .'|valid/([^/]++)(*:3557)'
                            .'|d(?'
                                .'|e(?'
                                    .'|va/([^/]++)(*:3585)'
                                    .'|l(?'
                                        .'|e/([^/]++)(*:3608)'
                                        .'|groupe/([^/]++)/([^/]++)(*:3641)'
                                    .')'
                                    .'|placer/([^/]++)/([^/]++)(*:3675)'
                                .')'
                                .'|upliquer/([^/]++)(*:3702)'
                            .')'
                            .'|re(?'
                                .'|staure/([^/]++)(*:3732)'
                                .'|mise/([^/]++)(*:3754)'
                            .')'
                            .'|add/([^/]++)(*:3776)'
                            .'|win/add/([^/]++)(*:3801)'
                            .'|up(?'
                                .'|date/(\\d+)(*:3825)'
                                .'|groupe/([^/]++)/([^/]++)(*:3858)'
                            .')'
                            .'|basetva/([^/]++)(*:3884)'
                            .'|lot/([^/]++)(*:3905)'
                        .')'
                    .')'
                    .'|f(?'
                        .'|acture/(?'
                            .'|chantier/(\\d+)(*:3944)'
                            .'|get/(\\d+)(*:3962)'
                            .'|update/(\\d+)(*:3983)'
                            .'|a(?'
                                .'|dd/([^/]++)/([^/]++)/([^/]++)(*:4025)'
                                .'|pdf/get/([^/]++)(*:4050)'
                            .')'
                            .'|excel/get/([^/]++)(*:4078)'
                            .'|p(?'
                                .'|pdf/get/([^/]++)(*:4107)'
                                .'|ourcentage/([^/]++)/([^/]++)(*:4144)'
                            .')'
                            .'|del(?'
                                .'|e(?'
                                    .'|te/(\\d+)(*:4172)'
                                    .'|/(\\d+)(*:4187)'
                                .')'
                                .'|/([^/]++)(*:4206)'
                            .')'
                            .'|montant/([^/]++)/([^/]++)(*:4241)'
                        .')'
                        .'|ichier/(?'
                            .'|delete/(\\d+)(*:4273)'
                            .'|add/chantier/(\\d+)(*:4300)'
                        .')'
                        .'|o(?'
                            .'|rme/(?'
                                .'|choix/([^/]++)(*:4335)'
                                .'|update(?'
                                    .'|/([^/]++)(*:4362)'
                                    .'|sss/([^/]++)(*:4383)'
                                .')'
                            .')'
                            .'|urnisseur/(?'
                                .'|add/([^/]++)/([^/]++)(*:4428)'
                                .'|upd/([^/]++)/([^/]++)/([^/]++)(*:4467)'
                                .'|del/([^/]++)(*:4488)'
                                .'|pdf/([^/]++)/get(*:4513)'
                            .')'
                        .')'
                    .')'
                    .'|in(?'
                        .'|tervenant/(?'
                            .'|c(?'
                                .'|hantier/([^/]++)/([^/]++)(*:4572)'
                                .'|aisses/([^/]++)(*:4596)'
                            .')'
                            .'|add/([^/]++)(*:4618)'
                            .'|operation/add/([^/]++)(*:4649)'
                            .'|delete/([^/]++)(*:4673)'
                        .')'
                        .'|ventaire/(?'
                            .'|chantier/(?'
                                .'|(\\d+)(*:4712)'
                                .'|python/(\\d+)(*:4733)'
                            .')'
                            .'|recap/add/([^/]++)/([^/]++)/([^/]++)(*:4779)'
                        .')'
                    .')'
                    .'|ligne/(?'
                        .'|c(?'
                            .'|aisse/(?'
                                .'|get/([^/]++)(*:4824)'
                                .'|de(?'
                                    .'|signation/([^/]++)(*:4856)'
                                    .'|lete/([^/]++)/([^/]++)(*:4887)'
                                .')'
                            .')'
                            .'|ommande/(?'
                                .'|get/([^/]++)(*:4921)'
                                .'|choix/([^/]++)/([^/]++)/([^/]++)(*:4962)'
                                .'|de(?'
                                    .'|signation/([^/]++)/([^/]++)(*:5003)'
                                    .'|lete/([^/]++)/([^/]++)(*:5034)'
                                .')'
                                .'|update/([^/]++)/([^/]++)/([^/]++)(*:5077)'
                                .'|valeur/upd/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:5132)'
                            .')'
                        .')'
                        .'|de(?'
                            .'|compte/get/([^/]++)(*:5167)'
                            .'|vis/(?'
                                .'|get/([^/]++)(*:5195)'
                                .'|choix/([^/]++)/([^/]++)/([^/]++)(*:5236)'
                                .'|de(?'
                                    .'|signation/([^/]++)/([^/]++)(*:5277)'
                                    .'|lete/([^/]++)/([^/]++)(*:5308)'
                                .')'
                                .'|update/([^/]++)/([^/]++)/([^/]++)(*:5351)'
                                .'|valeur/upd/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:5406)'
                            .')'
                        .')'
                        .'|facture/get/([^/]++)(*:5437)'
                    .')'
                    .'|materiel/(?'
                        .'|add/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:5498)'
                        .'|update/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:5558)'
                        .'|delete/([^/]++)(*:5582)'
                        .'|f(?'
                            .'|ournisseur/(?'
                                .'|add/([^/]++)(*:5621)'
                                .'|update/([^/]++)/([^/]++)(*:5654)'
                                .'|delete/([^/]++)(*:5678)'
                            .')'
                            .'|amille/(?'
                                .'|add/([^/]++)(*:5710)'
                                .'|update/([^/]++)/([^/]++)(*:5743)'
                                .'|del/([^/]++)(*:5764)'
                            .')'
                        .')'
                        .'|benef/(?'
                            .'|add/([^/]++)/([^/]++)(*:5805)'
                            .'|update/([^/]++)/([^/]++)(*:5838)'
                            .'|delete/([^/]++)(*:5862)'
                        .')'
                        .'|mat(?'
                            .'|chan/add/([^/]++)/([^/]++)/([^/]++)(*:5913)'
                            .'|benef/add/([^/]++)/([^/]++)/([^/]++)(*:5958)'
                        .')'
                    .')'
                    .'|p(?'
                        .'|ersonnel/(?'
                            .'|add/([^/]++)(*:5997)'
                            .'|update/([^/]++)/([^/]++)(*:6030)'
                            .'|del/(?'
                                .'|([^/]++)(*:6054)'
                                .'|service/([^/]++)(*:6079)'
                            .')'
                            .'|charge/(?'
                                .'|add/([^/]++)(*:6111)'
                                .'|update/([^/]++)/([^/]++)(*:6144)'
                            .')'
                            .'|service/(?'
                                .'|add/([^/]++)/([^/]++)(*:6186)'
                                .'|update/([^/]++)/([^/]++)/([^/]++)(*:6228)'
                            .')'
                        .')'
                        .'|lanning/(?'
                            .'|add/([^/]++)/([^/]++)(*:6271)'
                            .'|s(?'
                                .'|ection/add/([^/]++)/([^/]++)(*:6312)'
                                .'|uperviseur/add/([^/]++)/([^/]++)(*:6353)'
                            .')'
                            .'|tache/add/([^/]++)(*:6381)'
                        .')'
                    .')'
                    .'|statut/(?'
                        .'|charge(?'
                            .'|interne/([^/]++)(*:6427)'
                            .'|p(?'
                                .'|erso/([^/]++)(*:6453)'
                                .'|resta/([^/]++)(*:6476)'
                            .')'
                            .'|fourni/([^/]++)(*:6501)'
                        .')'
                        .'|reglements/([^/]++)(*:6530)'
                    .')'
                    .'|todo/(?'
                        .'|add/([^/]++)/([^/]++)(*:6569)'
                        .'|delete/([^/]++)(*:6593)'
                    .')'
                    .'|user/(?'
                        .'|first/([^/]++)/([^/]++)(*:6634)'
                        .'|adduser/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:6713)'
                    .')'
                    .'|valider/(?'
                        .'|chantier/(\\d+)(*:6748)'
                        .'|mois/([^/]++)(*:6770)'
                    .')'
                    .'|excel/bonfournisseur/(\\d+)(*:6806)'
                .')'
                .'|/c(?'
                    .'|rm/(?'
                        .'|article/(?'
                            .'|update/([^/]++)(*:6853)'
                            .'|ajouter/([^/]++)(*:6878)'
                            .'|partage(?:/([^/]++))?(*:6908)'
                            .'|delete(?'
                                .'|/([^/]++)(*:6935)'
                                .'|cate(?:/([^/]++))?(*:6962)'
                                .'|sec(?:/([^/]++))?(*:6988)'
                            .')'
                            .'|migrate/([^/]++)(*:7014)'
                            .'|vente/([^/]++)(*:7037)'
                            .'|search(?:/([^/]++))?(*:7066)'
                            .'|(\\d+)(*:7080)'
                            .'|f(?'
                                .'|amille/([^/]++)(*:7108)'
                                .'|ournisseur/([^/]++)(*:7136)'
                            .')'
                            .'|sousfamille/([^/]++)(*:7166)'
                        .')'
                        .'|d(?'
                            .'|oc/(?'
                                .'|deldoc/([^/]++)/del(?:/([^/]++))?(*:7219)'
                                .'|attache/([^/]++)/([^/]++)/([^/]++)(*:7262)'
                            .')'
                            .'|e(?'
                                .'|compte/(?'
                                    .'|add(?'
                                        .'|/([^/]++)(*:7301)'
                                        .'|o/([^/]++)(*:7320)'
                                    .')'
                                    .'|update/([^/]++)(*:7345)'
                                    .'|reloaddevis/([^/]++)(*:7374)'
                                    .'|de(?'
                                        .'|valider/([^/]++)(*:7404)'
                                        .'|l/([^/]++)(*:7423)'
                                    .')'
                                    .'|valide(?'
                                        .'|r/([^/]++)(*:7452)'
                                        .'|convertirfacture/([^/]++)(*:7486)'
                                    .')'
                                    .'|convertirfacture/([^/]++)(*:7521)'
                                    .'|(\\d+)/(\\d+)(*:7541)'
                                    .'|ligne/([^/]++)/([^/]++)(*:7573)'
                                .')'
                                .'|vis/(?'
                                    .'|add/([^/]++)(*:7602)'
                                    .'|evaluer/([^/]++)(*:7627)'
                                    .'|get(?'
                                        .'|/([^/]++)(*:7651)'
                                        .'|s/([^/]++)(*:7670)'
                                    .')'
                                    .'|d(?'
                                        .'|e(?'
                                            .'|v(?'
                                                .'|ischantier/([^/]++)(*:7711)'
                                                .'|alider/([^/]++)(*:7735)'
                                            .')'
                                            .'|l(?'
                                                .'|/([^/]++)(*:7758)'
                                                .'|definitive/([^/]++)(*:7786)'
                                            .')'
                                            .'|placer/([^/]++)/([^/]++)(*:7820)'
                                        .')'
                                        .'|upliquer/([^/]++)(*:7847)'
                                    .')'
                                    .'|convertir/([^/]++)(*:7875)'
                                    .'|update/([^/]++)(*:7899)'
                                    .'|basetva/([^/]++)(*:7924)'
                                    .'|re(?'
                                        .'|mise/([^/]++)(*:7951)'
                                        .'|staurer/([^/]++)(*:7976)'
                                    .')'
                                    .'|v(?'
                                        .'|alider/([^/]++)(*:8005)'
                                        .'|ente/([^/]++)(*:8027)'
                                    .')'
                                    .'|(\\d+)/(\\d+)(*:8048)'
                                    .'|groupe/([^/]++)/([^/]++)/([^/]++)(*:8090)'
                                    .'|ligne/([^/]++)/([^/]++)/([^/]++)(*:8131)'
                                .')'
                            .')'
                        .')'
                        .'|b(?'
                            .'|on/(?'
                                .'|a(?'
                                    .'|dd/(?'
                                        .'|([^/]++)(*:8171)'
                                        .'|prepa/([^/]++)(*:8194)'
                                    .')'
                                    .'|rticle/([^/]++)(*:8219)'
                                .')'
                                .'|livre/add/([^/]++)(*:8247)'
                                .'|fourn(?'
                                    .'|isseur/([^/]++)(?'
                                        .'|(*:8282)'
                                        .'|/([^/]++)(*:8300)'
                                    .')'
                                    .'|/update/([^/]++)(*:8326)'
                                .')'
                                .'|chanpresta/add/([^/]++)(*:8359)'
                                .'|update/([^/]++)(*:8383)'
                                .'|presta/update/([^/]++)(*:8414)'
                                .'|s(?'
                                    .'|tatus/([^/]++)/([^/]++)(*:8450)'
                                    .'|older/([^/]++)/([^/]++)(*:8482)'
                                .')'
                                .'|valider/([^/]++)(*:8508)'
                                .'|d(?'
                                    .'|e(?'
                                        .'|valider/([^/]++)(*:8541)'
                                        .'|l(?'
                                            .'|/([^/]++)(*:8563)'
                                            .'|definitive/([^/]++)(*:8591)'
                                        .')'
                                        .'|placer/([^/]++)/([^/]++)(*:8625)'
                                    .')'
                                    .'|upliquer/([^/]++)(*:8652)'
                                .')'
                                .'|restaurer/([^/]++)(*:8680)'
                                .'|(\\d+)/(\\d+)(*:8700)'
                                .'|groupe/([^/]++)/([^/]++)/([^/]++)(*:8742)'
                                .'|ligne/([^/]++)/([^/]++)/([^/]++)(*:8783)'
                            .')'
                            .'|udget/(?'
                                .'|devis/(?'
                                    .'|([^/]++)(*:8819)'
                                    .'|lignes/([^/]++)(*:8843)'
                                .')'
                                .'|bon/lignes/([^/]++)(*:8872)'
                                .'|ch(?'
                                    .'|devis(?:/([^/]++))?(*:8905)'
                                    .'|chan(?:/([^/]++))?(*:8932)'
                                .')'
                            .')'
                        .')'
                        .'|c(?'
                            .'|aisse/(?'
                                .'|add/(\\d+)(*:8966)'
                                .'|frais(?'
                                    .'|/update/([^/]++)(*:8999)'
                                    .'|chantier/update/([^/]++)(*:9032)'
                                .')'
                                .'|personnel/upd/([^/]++)(*:9064)'
                                .'|update/(\\d+)(*:9085)'
                                .'|etats/update/(\\d+)(*:9112)'
                                .'|montant/(\\d+)(*:9134)'
                                .'|valider/(\\d+)(*:9156)'
                                .'|de(?'
                                    .'|valider/(\\d+)(*:9183)'
                                    .'|l(?'
                                        .'|/(\\d+)(*:9202)'
                                        .'|definitive/(\\d+)(*:9227)'
                                    .')'
                                    .'|placer/(\\d+)/([^/]++)(*:9258)'
                                .')'
                                .'|restaurer/(\\d+)(*:9283)'
                                .'|(\\d+)/(\\d+)(*:9303)'
                                .'|(\\d+)/(\\d+)/(\\d+)(*:9329)'
                            .')'
                            .'|ha(?'
                                .'|ntier(?'
                                    .'|/(?'
                                        .'|miseajour/(\\d+)(*:9371)'
                                        .'|deltache/(\\d+)(*:9394)'
                                        .'|get/(\\d+)(*:9412)'
                                        .'|recap/(?'
                                            .'|add/(\\d+)(*:9439)'
                                            .'|update/(\\d+)(*:9460)'
                                            .'|del/(\\d+)(*:9478)'
                                        .')'
                                        .'|search/([^/]++)(*:9503)'
                                        .'|(\\d+)(*:9517)'
                                        .'|contact/(\\d+)/(\\d+)(*:9545)'
                                        .'|recap/(\\d+)/(\\d+)(*:9571)'
                                        .'|intervenant/(\\d+)/(\\d+)(*:9603)'
                                        .'|fournisseur(?:/([^/]++))?(*:9637)'
                                        .'|prestataire(?:/([^/]++))?(*:9671)'
                                        .'|upload/(\\d+)(*:9692)'
                                    .')'
                                    .'|s(?'
                                        .'|clotures(?:/(\\d+))?(*:9725)'
                                        .'|/(?'
                                            .'|forte/([^/]++)(*:9752)'
                                            .'|get(?'
                                                .'|d(?'
                                                    .'|atas(?'
                                                        .'|/([^/]++)(*:9787)'
                                                        .'|s/([^/]++)(*:9806)'
                                                    .')'
                                                    .'|evis/([^/]++)(*:9829)'
                                                .')'
                                                .'|contact/([^/]++)(*:9855)'
                                                .'|interve/([^/]++)(*:9880)'
                                            .')'
                                            .'|upda(?'
                                                .'|te(?'
                                                    .'|/(\\d+)(*:9908)'
                                                    .'|chantier/([^/]++)(*:9934)'
                                                .')'
                                                .'|/(\\d+)(*:9950)'
                                            .')'
                                            .'|del(?'
                                                .'|/([^/]++)(*:9975)'
                                                .'|definitive/([^/]++)(*:10003)'
                                                .'|reglement/([^/]++)(*:10031)'
                                            .')'
                                            .'|restaurer/([^/]++)(*:10060)'
                                            .'|a(?'
                                                .'|rchiver/([^/]++)(*:10090)'
                                                .'|ccepter/([^/]++)(*:10116)'
                                            .')'
                                            .'|e(?'
                                                .'|choue/([^/]++)(*:10145)'
                                                .'|ncours/([^/]++)(*:10170)'
                                            .')'
                                            .'|terminer/([^/]++)(*:10198)'
                                            .'|cloturer/([^/]++)(*:10225)'
                                        .')'
                                        .'|(?:/([^/]++))?(*:10250)'
                                        .'|/(?'
                                            .'|c(?'
                                                .'|lient(?:/(\\d+))?(*:10284)'
                                                .'|aisse(?:/(\\d+))?(*:10310)'
                                                .'|ontact(?:/(\\d+))?(*:10337)'
                                            .')'
                                            .'|de(?'
                                                .'|vis(?:/(\\d+))?(*:10367)'
                                                .'|compte(?:/(\\d+))?(*:10394)'
                                            .')'
                                            .'|livraison/(\\d+)(*:10420)'
                                            .'|facture(?:/(\\d+))?(*:10448)'
                                        .')'
                                        .'|t(?'
                                            .'|ermines(?:/(\\d+))?(*:10481)'
                                            .'|ous(?:/(\\d+))?(*:10505)'
                                        .')'
                                    .')'
                                    .'|cours(?:/(\\d+))?(*:10533)'
                                    .'|e(?'
                                        .'|chouer(?:/(\\d+))?(*:10564)'
                                        .'|tude(?:/(\\d+))?(*:10589)'
                                    .')'
                                .')'
                                .'|rgesinternes/edit/charge(?:/(\\d+))?(*:10636)'
                                .'|t/(?'
                                    .'|tache/(?'
                                        .'|add/([^/]++)/([^/]++)(*:10681)'
                                        .'|([^/]++)(*:10699)'
                                        .'|get/(\\d+)(*:10718)'
                                    .')'
                                    .'|del/(?'
                                        .'|tache/([^/]++)/([^/]++)(*:10759)'
                                        .'|([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:10804)'
                                    .')'
                                    .'|share/([^/]++)/([^/]++)(*:10838)'
                                    .'|get/([^/]++)/(\\d+)(*:10866)'
                                .')'
                            .')'
                            .'|lient/(?'
                                .'|get/(\\d+)(*:10896)'
                                .'|update/(\\d+)(*:10918)'
                                .'|del(?'
                                    .'|ete/(\\d+)(*:10943)'
                                    .'|definitive/([^/]++)(*:10972)'
                                .')'
                                .'|restaurer/([^/]++)(*:11001)'
                                .'|(\\d+)(*:11016)'
                            .')'
                            .'|ontact(?'
                                .'|/(?'
                                    .'|get/([^/]++)(*:11052)'
                                    .'|add/([^/]++)(*:11074)'
                                    .'|update/([^/]++)/([^/]++)(*:11108)'
                                    .'|del/([^/]++)(*:11130)'
                                .')'
                                .'|(?:/(\\d+))?(*:11152)'
                            .')'
                        .')'
                        .'|e(?'
                            .'|tat(?'
                                .'|/(?'
                                    .'|search/client/([^/]++)(*:11200)'
                                    .'|depense/mois/([^/]++)(*:11231)'
                                .')'
                                .'|(?:/(\\d+))?(*:11253)'
                                .'|/(?'
                                    .'|fournisseur(?:/([^/]++))?(*:11292)'
                                    .'|p(?'
                                        .'|restataire(?:/([^/]++))?(*:11330)'
                                        .'|ersonnel(?:/(\\d+))?(*:11359)'
                                    .')'
                                    .'|intervenant(?:/(\\d+))?(*:11392)'
                                .')'
                            .')'
                            .'|xercices(?'
                                .'|/(?'
                                    .'|joindre/([^/]++)/([^/]++)(*:11444)'
                                    .'|remove/([^/]++)/([^/]++)(*:11478)'
                                .')'
                                .'|(?:/(\\d+))?(*:11500)'
                            .')'
                        .')'
                        .'|f(?'
                            .'|a(?'
                                .'|cture/(?'
                                    .'|a(?'
                                        .'|dd/(\\d+)(*:11541)'
                                        .'|compte/(\\d+)(*:11563)'
                                    .')'
                                    .'|pourcentage/(\\d+)/(\\d+)(*:11597)'
                                    .'|montant/(\\d+)/(\\d+)(*:11626)'
                                    .'|upda(?'
                                        .'|te/(\\d+)(*:11651)'
                                        .'|/(\\d+)(*:11667)'
                                    .')'
                                    .'|valider/(\\d+)(*:11691)'
                                    .'|getreste/(\\d+)(*:11715)'
                                    .'|de(?'
                                        .'|valider/(\\d+)(*:11743)'
                                        .'|l(?:/(\\d+))?(*:11765)'
                                    .')'
                                    .'|(\\d+)/(\\d+)(*:11787)'
                                    .'|groupe/(\\d+)/(\\d+)/([^/]++)(*:11824)'
                                    .'|ligne/(\\d+)/(\\d+)/([^/]++)(*:11860)'
                                .')'
                                .'|mille/(?'
                                    .'|add/([^/]++)(*:11892)'
                                    .'|update/([^/]++)(*:11917)'
                                    .'|del/([^/]++)(*:11939)'
                                .')'
                            .')'
                            .'|ournisseur/(?'
                                .'|add/([^/]++)(*:11977)'
                                .'|presta/(?'
                                    .'|add/([^/]++)(*:12009)'
                                    .'|update/([^/]++)(*:12034)'
                                .')'
                                .'|update/([^/]++)(*:12060)'
                                .'|del/([^/]++)(*:12082)'
                                .'|edit(?:/(\\d+))?(*:12107)'
                            .')'
                        .')'
                        .'|g(?'
                            .'|estion/(?'
                                .'|delfichier/(\\d+)(*:12149)'
                                .'|fichier/(?'
                                    .'|(\\d+)(*:12175)'
                                    .'|tache/add/([^/]++)(*:12203)'
                                    .'|chat/add/([^/]++)/([^/]++)(*:12239)'
                                .')'
                                .'|(\\d+)(*:12255)'
                                .'|contact/(\\d+)/(\\d+)(*:12284)'
                                .'|section/(\\d+)/(\\d+)(*:12313)'
                                .'|tache/(\\d+)/(\\d+)(*:12340)'
                                .'|recap/(\\d+)/(\\d+)(*:12367)'
                                .'|planning/(\\d+)/(\\d+)(*:12397)'
                                .'|upload/([^/]++)(*:12422)'
                                .'|equipe/([^/]++)/([^/]++)(*:12456)'
                            .')'
                            .'|roupe/(?'
                                .'|add/([^/]++)/([^/]++)(*:12497)'
                                .'|update/([^/]++)/([^/]++)/([^/]++)(*:12540)'
                            .')'
                        .')'
                        .'|intervenant/(?'
                            .'|add/(\\d+)(*:12576)'
                            .'|operation/(?'
                                .'|add/(\\d+)(*:12608)'
                                .'|update/(\\d+)(*:12630)'
                            .')'
                            .'|update/(\\d+)(*:12653)'
                            .'|del(?'
                                .'|/(\\d+)(*:12675)'
                                .'|definitive/(\\d+)(*:12701)'
                            .')'
                            .'|restaurer/(\\d+)(*:12727)'
                        .')'
                        .'|li(?'
                            .'|gne/(?'
                                .'|add/([^/]++)/([^/]++)(*:12771)'
                                .'|upd(?'
                                    .'|ate(?'
                                        .'|r(?'
                                            .'|/([^/]++)/([^/]++)(*:12815)'
                                            .'|e(?'
                                                .'|/([^/]++)/([^/]++)(*:12847)'
                                                .'|s/([^/]++)(*:12867)'
                                            .')'
                                        .')'
                                        .'|/([^/]++)/([^/]++)/([^/]++)(*:12906)'
                                    .')'
                                    .'|/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:12962)'
                                .')'
                                .'|g(?'
                                    .'|etter/(\\d+)(*:12988)'
                                    .'|roupe/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:13039)'
                                .')'
                                .'|choisir/([^/]++)/([^/]++)(*:13075)'
                                .'|d(?'
                                    .'|elete/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:13130)'
                                    .'|upliquer/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:13184)'
                                .')'
                                .'|ligne/([^/]++)/([^/]++)/add(*:13222)'
                            .')'
                            .'|steclient(?:/(\\d+))?(*:13253)'
                            .'|vraison/(?'
                                .'|add/(\\d+)(*:13283)'
                                .'|update/([^/]++)(*:13308)'
                                .'|valider/([^/]++)(*:13334)'
                                .'|d(?'
                                    .'|e(?'
                                        .'|valider/([^/]++)(*:13368)'
                                        .'|l(?'
                                            .'|/([^/]++)(*:13391)'
                                            .'|definitive/([^/]++)(*:13420)'
                                        .')'
                                    .')'
                                    .'|upliquer/([^/]++)(*:13449)'
                                .')'
                                .'|status/([^/]++)/([^/]++)(*:13484)'
                                .'|restaurer/([^/]++)(*:13512)'
                                .'|(\\d+)(*:13527)'
                                .'|ligne/([^/]++)/([^/]++)(*:13560)'
                            .')'
                        .')'
                        .'|m(?'
                            .'|ateriel(?'
                                .'|/(?'
                                    .'|update/([^/]++)(*:13605)'
                                    .'|benef/(?'
                                        .'|update/([^/]++)(*:13639)'
                                        .'|del/(\\d+)(*:13658)'
                                    .')'
                                    .'|del/(\\d+)(*:13678)'
                                    .'|fournisseur/del/(\\d+)(*:13709)'
                                .')'
                                .'|(?:/([^/]++))?(*:13734)'
                                .'|/(?'
                                    .'|beneficiaire(?:/([^/]++))?(*:13774)'
                                    .'|f(?'
                                        .'|amille(?:/([^/]++))?(*:13808)'
                                        .'|ournisseur(?:/([^/]++))?(*:13842)'
                                    .')'
                                .')'
                            .')'
                            .'|essage/(?'
                                .'|a(?'
                                    .'|dd/([^/]++)/([^/]++)(*:13889)'
                                    .'|percu(?:/([^/]++)(?:/([^/]++)(?:/([^/]++))?)?)?(*:13946)'
                                .')'
                                .'|gettache/([^/]++)(*:13974)'
                                .'|del/([^/]++)(*:13996)'
                                .'|edit(?:/([^/]++))?(*:14024)'
                            .')'
                        .')'
                        .'|p(?'
                            .'|a(?'
                                .'|gechantiers(?:/(\\d+))?(*:14066)'
                                .'|ie/(?'
                                    .'|journalier(?'
                                        .'|/(?'
                                            .'|update/([^/]++)(*:14114)'
                                            .'|del/([^/]++)(*:14136)'
                                        .')'
                                        .'|(?:/([^/]++))?(*:14161)'
                                    .')'
                                    .'|fiche(?'
                                        .'|/(?'
                                            .'|update/([^/]++)(*:14199)'
                                            .'|del/([^/]++)(*:14221)'
                                        .')'
                                        .'|(?:/([^/]++))?(*:14246)'
                                    .')'
                                .')'
                                .'|rametre/(?'
                                    .'|sousupd/upd/([^/]++)(*:14289)'
                                    .'|d(?'
                                        .'|roit/add/([^/]++)(*:14320)'
                                        .'|el(?'
                                            .'|picture/(\\d+)/(\\d+)/(\\d+)(*:14360)'
                                            .'|users(?:/(\\d+))?(*:14386)'
                                        .')'
                                    .')'
                                    .'|(\\d+)(*:14403)'
                                    .'|souscompte(?:/(\\d+))?(*:14434)'
                                    .'|droit(?:/(\\d+))?(*:14460)'
                                .')'
                            .')'
                            .'|ersonnel/(?'
                                .'|imager/pers/([^/]++)(*:14504)'
                                .'|team/add/(\\d+)(*:14528)'
                                .'|update/(\\d+)(*:14550)'
                                .'|service/(?'
                                    .'|update/(\\d+)(*:14583)'
                                    .'|del/(\\d+)(*:14602)'
                                .')'
                                .'|operation/update/(\\d+)(*:14635)'
                                .'|lier/([^/]++)/([^/]++)(*:14667)'
                                .'|del/(\\d+)(*:14686)'
                                .'|edit/(?'
                                    .'|person(?:/(\\d+))?(*:14721)'
                                    .'|service(?:/([^/]++))?(*:14752)'
                                .')'
                            .')'
                            .'|lanning/(?'
                                .'|equipe/(?'
                                    .'|get/([^/]++)(*:14797)'
                                    .'|update/([^/]++)(*:14822)'
                                    .'|delete/(\\d+)(*:14844)'
                                .')'
                                .'|se(?'
                                    .'|arch/([^/]++)(*:14873)'
                                    .'|ction/(?'
                                        .'|get/([^/]++)(*:14904)'
                                        .'|update(?'
                                            .'|r/([^/]++)(*:14933)'
                                            .'|/([^/]++)(*:14952)'
                                        .')'
                                        .'|ordre/([^/]++)/([^/]++)(*:14986)'
                                        .'|add/(\\d+)(*:15005)'
                                        .'|del/(\\d+)(*:15024)'
                                    .')'
                                .')'
                                .'|get/([^/]++)(*:15048)'
                                .'|tache/(?'
                                    .'|get/([^/]++)(*:15079)'
                                    .'|add/(\\d+)(*:15098)'
                                    .'|ordre/([^/]++)/([^/]++)(*:15131)'
                                    .'|del(?'
                                        .'|ete/(\\d+)(*:15156)'
                                        .'|/(\\d+)(*:15172)'
                                    .')'
                                    .'|update/([^/]++)(*:15198)'
                                .')'
                                .'|chantier/get/([^/]++)(*:15230)'
                                .'|add/(\\d+)(*:15249)'
                                .'|update(?'
                                    .'|/(\\d+)(*:15274)'
                                    .'|r/(\\d+)(*:15291)'
                                .')'
                                .'|ordre/([^/]++)/([^/]++)(*:15325)'
                                .'|delplanning/([^/]++)(*:15355)'
                            .')'
                            .'|re(?'
                                .'|stataire/edit(?:/(\\d+))?(*:15395)'
                                .'|vision(?'
                                    .'|(?:/(\\d+)(?:/(\\d+))?)?(*:15436)'
                                    .'|/ligne(?:/([^/]++)(?:/([^/]++)(?:/([^/]++))?)?)?(*:15494)'
                                .')'
                            .')'
                        .')'
                        .'|s(?'
                            .'|tart/(?'
                                .'|todo(?'
                                    .'|/(?'
                                        .'|get/(\\d+)(*:15539)'
                                        .'|update/(\\d+)(*:15561)'
                                        .'|delete/(\\d+)(*:15583)'
                                    .')'
                                    .'|(?:/(\\d+))?(*:15605)'
                                .')'
                                .'|c(?'
                                    .'|ha(?'
                                        .'|t(?'
                                            .'|s/(?'
                                                .'|delete/(\\d+)/(\\d+)(*:15652)'
                                                .'|get/(\\d+)(*:15671)'
                                            .')'
                                            .'|/add(?'
                                                .'|/([^/]++)/(\\d+)/(\\d+)(*:15710)'
                                                .'|er/(\\d+)/([^/]++)/([^/]++)(*:15746)'
                                            .')'
                                        .')'
                                        .'|ntier(?:/(\\d+))?(*:15774)'
                                    .')'
                                    .'|lient(?:/(\\d+))?(*:15801)'
                                    .'|ontact(?:/(\\d+))?(*:15828)'
                                .')'
                            .')'
                            .'|ous(?'
                                .'|chantier(?:/(\\d+))?(*:15865)'
                                .'|famille/(?'
                                    .'|update/([^/]++)(*:15901)'
                                    .'|del/([^/]++)(*:15923)'
                                .')'
                            .')'
                            .'|uivi(?'
                                .'|(?:/(\\d+))?(*:15953)'
                                .'|/c(?'
                                    .'|amion(?:/(\\d+))?(*:15984)'
                                    .'|hauffeur(?:/(\\d+))?(*:16013)'
                                .')'
                            .')'
                        .')'
                        .'|rapportchantier/chchan(?:/([^/]++))?(*:16062)'
                        .'|welcome/(?'
                            .'|alerte/delete/([^/]++)(*:16105)'
                            .'|cha(?'
                                .'|ntiers/([^/]++)(*:16136)'
                                .'|tbesoins/get/(\\d+)(*:16164)'
                            .')'
                            .'|exercices/(?'
                                .'|delete/([^/]++)(*:16203)'
                                .'|upd/(\\d+)(*:16222)'
                                .'|([^/]++)(?'
                                    .'|(*:16243)'
                                    .'|/([^/]++)(*:16262)'
                                .')'
                            .')'
                            .'|besoin(?'
                                .'|s/(?'
                                    .'|upd/(\\d+)(*:16297)'
                                    .'|c(?'
                                        .'|hat/(\\d+)/([^/]++)(*:16329)'
                                        .'|loturer/(\\d+)(*:16352)'
                                    .')'
                                    .'|del/(\\d+)(*:16372)'
                                    .'|archiver/(\\d+)(*:16396)'
                                    .'|relancer/(\\d+)(*:16420)'
                                .')'
                                .'|/(\\d+)(*:16437)'
                            .')'
                            .'|tableau/([^/]++)(*:16464)'
                            .'|listebesoins/([^/]++)/([^/]++)(*:16504)'
                        .')'
                        .'|t(?'
                            .'|ache(?'
                                .'|/get/([^/]++)(*:16539)'
                                .'|(?:/([^/]++))?(*:16563)'
                            .')'
                            .'|echnique(?'
                                .'|(?:/([^/]++))?(*:16599)'
                                .'|/(?'
                                    .'|c(?'
                                        .'|lient(?:/([^/]++))?(*:16636)'
                                        .'|ontact(?:/([^/]++))?(*:16666)'
                                    .')'
                                    .'|p(?'
                                        .'|ersonnel(?:/([^/]++))?(*:16703)'
                                        .'|lanning(?:/([^/]++))?(*:16734)'
                                    .')'
                                    .'|section(?:/([^/]++))?(*:16766)'
                                    .'|tache(?:/([^/]++))?(*:16795)'
                                .')'
                            .')'
                            .'|resorerie/bilan(?:/([^/]++))?(*:16836)'
                        .')'
                    .')'
                    .'|atalogue/([^/]++)/([^/]++)(*:16874)'
                    .'|ontent(?'
                        .'|(?:/([^/]++))?(*:16907)'
                        .'|/([^/]++)(*:16926)'
                    .')'
                .')'
                .'|/partage/(?'
                    .'|article(?:/(\\d+))?(*:16968)'
                    .'|(\\d+)/(\\d+)(*:16989)'
                .')'
                .'|/user/add/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:17072)'
                .'|/resetpasse/([^/]++)(*:17102)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        235 => [[['_route' => 'api_get_alerte', '_controller' => 'App\\Controller\\ApiAlerteController::loadAlerte'], ['id'], ['POST' => 0], null, false, true, null]],
        258 => [[['_route' => 'api_del_alerte', '_controller' => 'App\\Controller\\ApiAlerteController::delAlerte'], ['id'], ['POST' => 0], null, false, true, null]],
        316 => [[['_route' => 'api_add_article', '_controller' => 'App\\Controller\\ApiArticleController::add_Articles'], ['idfamille', 'idfour', 'type', 'idmonnaie'], ['POST' => 0], null, false, true, null]],
        372 => [[['_route' => 'api_upd_article', '_controller' => 'App\\Controller\\ApiArticleController::upd_Articles'], ['id', 'idfamille', 'idfour', 'type', 'monnaie'], ['POST' => 0], null, false, true, null]],
        392 => [[['_route' => 'api_del_article', '_controller' => 'App\\Controller\\ApiArticleController::del_Articles'], ['id'], ['POST' => 0], null, false, true, null]],
        433 => [[['_route' => 'api_add_famille_article', '_controller' => 'App\\Controller\\ApiArticleController::addeFamilles'], ['fam'], null, null, false, true, null]],
        465 => [[['_route' => 'api_upd_famille_article', '_controller' => 'App\\Controller\\ApiArticleController::updFamilles'], ['id', 'fam'], null, null, false, true, null]],
        485 => [[['_route' => 'api_del_famille_article', '_controller' => 'App\\Controller\\ApiArticleController::delFamille'], ['id'], null, null, false, true, null]],
        527 => [[['_route' => 'api_add_fournisseur_article', '_controller' => 'App\\Controller\\ApiArticleController::adderFournisseur'], ['fou'], null, null, false, true, null]],
        559 => [[['_route' => 'api_upd_fournisseur_article', '_controller' => 'App\\Controller\\ApiArticleController::updFournisseur'], ['id', 'fou'], null, null, false, true, null]],
        582 => [[['_route' => 'api_del_fournisseur_article', '_controller' => 'App\\Controller\\ApiArticleController::delFournisseur'], ['id'], null, null, false, true, null]],
        635 => [[['_route' => 'api_add_sousfamille_article', '_controller' => 'App\\Controller\\ApiArticleController::addSousFamilles'], ['idfam', 'sousfam'], null, null, false, true, null]],
        676 => [[['_route' => 'api_upd_sousfamille_article', '_controller' => 'App\\Controller\\ApiArticleController::updSousFamilles'], ['idfamille', 'sousfam', 'idsous'], null, null, false, true, null]],
        696 => [[['_route' => 'api_del_sousfamille_article', '_controller' => 'App\\Controller\\ApiArticleController::delSousFamille'], ['id'], null, null, false, true, null]],
        733 => [[['_route' => 'apidellllbesoins', '_controller' => 'App\\Controller\\ApiBesoinsController::delllBesoins'], ['id'], ['DELETE' => 0], null, false, true, null]],
        777 => [[['_route' => 'apichatbesoins', '_controller' => 'App\\Controller\\ApiBesoinsController::chatBesoinsGet'], ['id'], ['POST' => 0], null, false, true, null]],
        800 => [[['_route' => 'apidelbesoinsdel', '_controller' => 'App\\Controller\\ApiBesoinsController::chatBesoinsDelete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        832 => [[['_route' => 'apiaddChatbesoins', '_controller' => 'App\\Controller\\ApiBesoinsController::chatBesoinsAddChat'], ['mess', 'idbesoin'], ['POST' => 0], null, false, true, null]],
        853 => [[['_route' => 'apiaddbesoins', '_controller' => 'App\\Controller\\ApiBesoinsController::addIosBesoins'], ['id'], ['POST' => 0], null, false, true, null]],
        879 => [[['_route' => 'apicloturerbesoins', '_controller' => 'App\\Controller\\ApiBesoinsController::cloturerBesoins'], ['id'], ['POST' => 0], null, false, true, null]],
        904 => [[['_route' => 'apiarchiverbesoins', '_controller' => 'App\\Controller\\ApiBesoinsController::archiverBesoins'], ['id'], ['POST' => 0], null, false, true, null]],
        929 => [[['_route' => 'apirelancerrbesoins', '_controller' => 'App\\Controller\\ApiBesoinsController::relancerBesoins'], ['id'], ['POST' => 0], null, false, true, null]],
        961 => [[['_route' => 'apiupdbesoins', '_controller' => 'App\\Controller\\ApiBesoinsController::updIosBesoins'], ['idchan', 'idbeso'], ['POST' => 0], null, false, true, null]],
        999 => [[['_route' => 'api_caisse_get_depenses', '_controller' => 'App\\Controller\\ApiCaisseController::caisseget'], ['mois'], ['POST' => 0], null, false, true, null]],
        1030 => [[['_route' => 'api_caisse_montant_add', '_controller' => 'App\\Controller\\ApiCaisseController::addmontant'], ['id', 'montant'], ['POST' => 0], null, false, true, null]],
        1054 => [[['_route' => 'api_caisse', '_controller' => 'App\\Controller\\ApiCaisseController::index'], ['id'], ['POST' => 0], null, false, true, null]],
        1072 => [[['_route' => 'api_caisse_one', '_controller' => 'App\\Controller\\ApiCaisseController::indexer'], ['id'], ['POST' => 0], null, false, true, null]],
        1094 => [[['_route' => 'api_caisse_history', '_controller' => 'App\\Controller\\ApiCaisseController::historycaisse'], ['id'], ['POST' => 0], null, false, true, null]],
        1117 => [[['_route' => 'api_caisse_valider_caisser', '_controller' => 'App\\Controller\\ApiCaisseController::validers'], ['id'], ['POST' => 0], null, false, true, null]],
        1145 => [[['_route' => 'api_caisse_devalider_caisse', '_controller' => 'App\\Controller\\ApiCaisseController::devaliders'], ['id'], ['POST' => 0], null, false, true, null]],
        1165 => [[['_route' => 'api_caisse_del_caisse', '_controller' => 'App\\Controller\\ApiCaisseController::dele'], ['id'], ['POST' => 0], null, false, true, null]],
        1205 => [[['_route' => 'api_caisse_add_perso', '_controller' => 'App\\Controller\\ApiCaisseController::adde'], ['id', 'apmonnaie'], ['POST' => 0], null, false, true, null]],
        1229 => [[['_route' => 'api_caisse_add_charge', '_controller' => 'App\\Controller\\ApiCaisseController::addBonCharge'], ['charge'], ['POST' => 0], null, false, true, null]],
        1290 => [[['_route' => 'add_Caisse_Fourn_api', '_controller' => 'App\\Controller\\ApiCaisseController::addCaisseFournApi'], ['idfour', 'idbon', 'desi', 'montant'], ['POST' => 0], null, false, true, null]],
        1342 => [[['_route' => 'apiaddprojet', '_controller' => 'App\\Controller\\ApiChantierController::addChantier'], ['id', 'sous'], ['POST' => 0], null, false, true, null]],
        1381 => [[['_route' => 'apiupdchantier', '_controller' => 'App\\Controller\\ApiChantierController::updateChantier'], ['idclient', 'sous', 'idchantier'], ['POST' => 0], null, false, true, null]],
        1407 => [[['_route' => 'apiArchiverChantier', '_controller' => 'App\\Controller\\ApiChantierController::archiverChantier'], ['id'], ['POST' => 0], null, false, true, null]],
        1432 => [[['_route' => 'apiAccepterChantier', '_controller' => 'App\\Controller\\ApiChantierController::accepterChantier'], ['id'], ['POST' => 0], null, false, true, null]],
        1461 => [[['_route' => 'apiEchouerChantier', '_controller' => 'App\\Controller\\ApiChantierController::echouerChantier'], ['id'], ['POST' => 0], null, false, true, null]],
        1485 => [[['_route' => 'apiEncoursChantier', '_controller' => 'App\\Controller\\ApiChantierController::coursChantier'], ['id'], ['POST' => 0], null, false, true, null]],
        1512 => [[['_route' => 'apiCloturerChantier', '_controller' => 'App\\Controller\\ApiChantierController::cloturerChantier'], ['id'], ['POST' => 0], null, false, true, null]],
        1533 => [[['_route' => 'apiDletecChantier', '_controller' => 'App\\Controller\\ApiChantierController::deleteProjet'], ['id'], ['POST' => 0], null, false, true, null]],
        1547 => [[['_route' => 'apigetchantier', '_controller' => 'App\\Controller\\ApiChantierController::getChantier'], ['id'], ['POST' => 0], null, false, true, null]],
        1598 => [[['_route' => 'apichantierreglement', '_controller' => 'App\\Controller\\ApiChantierController::reglement'], ['montant', 'moyen', 'idfac'], ['POST' => 0], null, false, true, null]],
        1623 => [[['_route' => 'apidelreglement', '_controller' => 'App\\Controller\\ApiChantierController::delreglement'], ['id'], ['POST' => 0], null, false, true, null]],
        1654 => [[['_route' => 'api_all_relever_client', '_controller' => 'App\\Controller\\ApiChantierController::apreleverclient'], ['id'], ['POST' => 0], null, false, true, null]],
        1683 => [[['_route' => 'apiChantierWindows', '_controller' => 'App\\Controller\\ApiChantierController::etudeWindow'], ['type'], ['POST' => 0], null, false, true, null]],
        1720 => [[['_route' => 'api_presta_bon_chan_client', '_controller' => 'App\\Controller\\ApiChantierController::apiprestachan'], ['idchan', 'idpresta'], ['POST' => 0], null, false, true, null]],
        1747 => [[['_route' => 'api_get_chat', '_controller' => 'App\\Controller\\ApiChatController::index'], ['id'], ['POST' => 0], null, false, true, null]],
        1781 => [[['_route' => 'api_message_chat', '_controller' => 'App\\Controller\\ApiChatController::indexez'], ['id', 'receiver'], ['POST' => 0], null, false, true, null]],
        1813 => [[['_route' => 'api_message_chat_share', '_controller' => 'App\\Controller\\ApiChatController::shareChat'], ['idmess', 'receiver'], ['POST' => 0], null, false, true, null]],
        1844 => [[['_route' => 'api_read_chat', '_controller' => 'App\\Controller\\ApiChatController::chatReader'], ['id', 'receiver'], ['POST' => 0], null, false, true, null]],
        1878 => [[['_route' => 'api_message_chat_tache', '_controller' => 'App\\Controller\\ApiChatController::indtache'], ['id'], ['POST' => 0], null, false, true, null]],
        1926 => [[['_route' => 'api_chat_fichier', '_controller' => 'App\\Controller\\ApiChatController::addchatechnique'], ['id', 'receiver', 'idtache'], ['POST' => 0], null, false, true, null]],
        1969 => [[['_route' => 'api_add_chat', '_controller' => 'App\\Controller\\ApiChatController::addChat'], ['id', 'receiver', 'message'], ['POST' => 0], null, false, true, null]],
        2010 => [[['_route' => 'api_add_tache_chat', '_controller' => 'App\\Controller\\ApiChatController::addTacheChat'], ['id', 'idtache', 'message'], ['POST' => 0], null, false, true, null]],
        2053 => [[['_route' => 'api_client_Python', '_controller' => 'App\\Controller\\ApiClientController::allclients_logi'], ['type'], ['POST' => 0], null, false, false, null]],
        2077 => [[['_route' => 'api_upd_client', '_controller' => 'App\\Controller\\ApiClientController::updClient'], ['id'], ['POST' => 0], null, false, true, null]],
        2101 => [[['_route' => 'api_del_client', '_controller' => 'App\\Controller\\ApiClientController::delClient'], ['id'], ['POST' => 0], null, false, true, null]],
        2127 => [[['_route' => 'api_searche', '_controller' => 'App\\Controller\\ApiClientController::allsearche'], ['val'], ['POST' => 0], null, false, true, null]],
        2159 => [[['_route' => 'api_client_relever', '_controller' => 'App\\Controller\\ApiClientController::clientRelever'], ['id'], ['POST' => 0], null, false, true, null]],
        2178 => [[['_route' => 'api_client_relevers', '_controller' => 'App\\Controller\\ApiClientController::clientRelevers'], ['id'], ['POST' => 0], null, false, true, null]],
        2218 => [[['_route' => 'api_del_reglement', '_controller' => 'App\\Controller\\ApiClientController::delReglement'], ['id', 'idclient'], ['POST' => 0], null, false, true, null]],
        2251 => [[['_route' => 'api_get_one_bon', '_controller' => 'App\\Controller\\ApiCommandeController::index'], ['id'], ['POST' => 0], null, false, true, null]],
        2274 => [[['_route' => 'bons_suivi', '_controller' => 'App\\Controller\\ApiCommandeController::suivis'], ['id'], ['POST' => 0], null, false, true, null]],
        2306 => [[['_route' => 'api_commande', '_controller' => 'App\\Controller\\ApiCommandeController::avoir'], ['id', 'type'], ['POST' => 0], null, false, true, null]],
        2333 => [[['_route' => 'api_commande_valide_bon', '_controller' => 'App\\Controller\\ApiCommandeController::valider'], ['num'], ['POST' => 0], null, false, true, null]],
        2354 => [[['_route' => 'api_commande_validone_bon', '_controller' => 'App\\Controller\\ApiCommandeController::validone'], ['id'], ['POST' => 0], null, false, true, null]],
        2372 => [[['_route' => 'api_commande_vali_bon', '_controller' => 'App\\Controller\\ApiCommandeController::vali'], ['id'], ['POST' => 0], null, false, true, null]],
        2412 => [[['_route' => 'api_commande_devalider_bon', '_controller' => 'App\\Controller\\ApiCommandeController::devalider'], ['num'], ['POST' => 0], null, false, true, null]],
        2433 => [[['_route' => 'api_commande_devalidone_bon', '_controller' => 'App\\Controller\\ApiCommandeController::devalidone'], ['id'], ['POST' => 0], null, false, true, null]],
        2452 => [[['_route' => 'api_commande_deva_bon', '_controller' => 'App\\Controller\\ApiCommandeController::deva'], ['id'], ['POST' => 0], null, false, true, null]],
        2479 => [[['_route' => 'api_commande_dele_bon', '_controller' => 'App\\Controller\\ApiCommandeController::dele'], ['id'], ['POST' => 0], null, false, true, null]],
        2499 => [[['_route' => 'api_commande_delete_bon', '_controller' => 'App\\Controller\\ApiCommandeController::delete'], ['num'], ['POST' => 0], null, false, true, null]],
        2521 => [[['_route' => 'api_commande_delone_bon', '_controller' => 'App\\Controller\\ApiCommandeController::delone'], ['id'], ['POST' => 0], null, false, true, null]],
        2548 => [[['_route' => 'api_commande_delgroupe_bon', '_controller' => 'App\\Controller\\ApiCommandeController::delgroupe'], ['idbon', 'idgr'], ['POST' => 0], null, false, true, null]],
        2582 => [[['_route' => 'api_commande_deplacer_bon', '_controller' => 'App\\Controller\\ApiCommandeController::deplacerBon'], ['idbon', 'iddevis'], ['PUT' => 0, 'POST' => 1], null, false, true, null]],
        2609 => [[['_route' => 'api_commande_dupliquer_bon', '_controller' => 'App\\Controller\\ApiCommandeController::dupliquerBon'], ['idbon'], ['PUT' => 0, 'POST' => 1], null, false, true, null]],
        2637 => [[['_route' => 'api_commande_restauree_bon', '_controller' => 'App\\Controller\\ApiCommandeController::restaurer'], ['id'], ['POST' => 0], null, false, true, null]],
        2691 => [[['_route' => 'api_commande_ajouter_bon', '_controller' => 'App\\Controller\\ApiCommandeController::adde'], ['id', 'idfourne', 'idsuive', 'type'], ['POST' => 0], null, false, true, null]],
        2714 => [[['_route' => 'api_add_prepa', '_controller' => 'App\\Controller\\ApiCommandeController::addprepa'], ['id'], ['POST' => 0], null, false, true, null]],
        2740 => [[['_route' => 'api_commande_apgroupe_bon', '_controller' => 'App\\Controller\\ApiCommandeController::adagroupe'], ['idbon'], ['POST' => 0], null, false, true, null]],
        2786 => [[['_route' => 'api_commande_update_bon', '_controller' => 'App\\Controller\\ApiCommandeController::update'], ['id', 'idfourne', 'idsuive'], ['PUT' => 0, 'POST' => 1], null, false, true, null]],
        2813 => [[['_route' => 'api_commande_upgroupe_bon', '_controller' => 'App\\Controller\\ApiCommandeController::upgroupe'], ['idbon', 'idgr'], ['POST' => 0], null, false, true, null]],
        2865 => [[['_route' => 'api_add_contact', '_controller' => 'App\\Controller\\ApiContactController::index'], ['id', 'con'], ['POST' => 0], null, false, true, null]],
        2889 => [[['_route' => 'api_del_contact', '_controller' => 'App\\Controller\\ApiContactController::getDelClient'], ['id'], ['POST' => 0], null, false, true, null]],
        2928 => [[['_route' => 'api_upd_contact', '_controller' => 'App\\Controller\\ApiContactController::getUpdContact'], ['idcli', 'idcon', 'con'], ['POST' => 0], null, false, true, null]],
        2953 => [[['_route' => 'api_get_contact', '_controller' => 'App\\Controller\\ApiContactController::getClientContact'], ['id'], ['POST' => 0], null, false, true, null]],
        3037 => [[['_route' => 'api_ajouter_decompte', '_controller' => 'App\\Controller\\ApiDecompteController::aDecompte'], ['id', 'fi', 'ga', 'pro', 'ded', 'trc'], ['POST' => 0], null, false, true, null]],
        3062 => [[['_route' => 'api_decompte_apdf', '_controller' => 'App\\Controller\\ApiDecompteController::apdff'], ['id'], ['POST' => 0], null, false, true, null]],
        3129 => [[['_route' => 'api_update_decompte', '_controller' => 'App\\Controller\\ApiDecompteController::updDecompte'], ['id', 'fi', 'ga', 'pro', 'ded', 'trc'], ['POST' => 0], null, false, true, null]],
        3152 => [[['_route' => 'api_decompte', '_controller' => 'App\\Controller\\ApiDecompteController::index'], ['id'], ['POST' => 0], null, false, true, null]],
        3170 => [[['_route' => 'api_decompte_get', '_controller' => 'App\\Controller\\ApiDecompteController::getDecompte'], ['id'], ['POST' => 0], null, false, true, null]],
        3195 => [[['_route' => 'api_decompte_valider', '_controller' => 'App\\Controller\\ApiDecompteController::apvalider'], ['id'], ['POST' => 0], null, false, true, null]],
        3225 => [[['_route' => 'api_decompte_devalide', '_controller' => 'App\\Controller\\ApiDecompteController::devalider'], ['id'], ['POST' => 0], null, false, true, null]],
        3244 => [[['_route' => 'delyDecompte', '_controller' => 'App\\Controller\\ApiDecompteController::delyDecompte'], ['id'], ['POST' => 0], null, false, true, null]],
        3274 => [[['_route' => 'api_decompte_reload', '_controller' => 'App\\Controller\\ApiDecompteController::reloadligne'], ['id'], ['POST' => 0], null, false, true, null]],
        3306 => [[['_route' => 'api_update_ligne', '_controller' => 'App\\Controller\\ApiDecompteController::update_Ligne'], ['a', 'b'], ['POST' => 0], null, false, true, null]],
        3331 => [[['_route' => 'api_decompte_pdf', '_controller' => 'App\\Controller\\ApiDecompteController::pdff'], ['id'], ['POST' => 0], null, false, true, null]],
        3363 => [[['_route' => 'api_get_devis', '_controller' => 'App\\Controller\\ApiDevisController::index'], ['id'], ['POST' => 0], null, false, true, null]],
        3387 => [[['_route' => 'api_devis_getgroupe_devis', '_controller' => 'App\\Controller\\ApiDevisController::getgroupe'], ['id'], ['POST' => 0], null, false, true, null]],
        3411 => [[['_route' => 'api_devis_groupe_devis', '_controller' => 'App\\Controller\\ApiDevisController::adgroupe'], ['iddev'], ['POST' => 0], null, false, true, null]],
        3440 => [[['_route' => 'api_get_pydevis', '_controller' => 'App\\Controller\\ApiDevisController::pyindex'], ['id'], ['POST' => 0], null, false, true, null]],
        3474 => [[['_route' => 'api_devis_valide_devis', '_controller' => 'App\\Controller\\ApiDevisController::valider'], ['type', 'id'], ['POST' => 0], null, false, true, null]],
        3510 => [[['_route' => 'api_devalidedevis', '_controller' => 'App\\Controller\\ApiDevisController::devalider'], ['type', 'id'], ['POST' => 0], null, false, true, null]],
        3534 => [[['_route' => 'api_devis', '_controller' => 'App\\Controller\\ApiDevisController::getByChantier'], ['id'], ['POST' => 0], null, false, true, null]],
        3557 => [[['_route' => 'api_devis_val_devis', '_controller' => 'App\\Controller\\ApiDevisController::valid'], ['id'], ['POST' => 0], null, false, true, null]],
        3585 => [[['_route' => 'api_devadevis', '_controller' => 'App\\Controller\\ApiDevisController::deva'], ['id'], ['POST' => 0], null, false, true, null]],
        3608 => [[['_route' => 'api_devis_dele_devis', '_controller' => 'App\\Controller\\ApiDevisController::dele'], ['id'], ['POST' => 0], null, false, true, null]],
        3641 => [[['_route' => 'api_devis_delgroupe_devis', '_controller' => 'App\\Controller\\ApiDevisController::delgroupe'], ['iddev', 'idgr'], ['POST' => 0], null, false, true, null]],
        3675 => [[['_route' => 'api_deplacer_devis', '_controller' => 'App\\Controller\\ApiDevisController::deplacerDev'], ['iddev', 'idchantier'], ['POST' => 0], null, false, true, null]],
        3702 => [[['_route' => 'api_dupliquer_devis', '_controller' => 'App\\Controller\\ApiDevisController::dupliqueDev'], ['iddev'], ['POST' => 0], null, false, true, null]],
        3732 => [[['_route' => 'api_devis_restaure_devis', '_controller' => 'App\\Controller\\ApiDevisController::derestaure'], ['id'], ['POST' => 0], null, false, true, null]],
        3754 => [[['_route' => 'api_remise_devis', '_controller' => 'App\\Controller\\ApiDevisController::addRemise'], ['iddev'], ['POST' => 0], null, false, true, null]],
        3776 => [[['_route' => 'api_devis_ajouter_devis', '_controller' => 'App\\Controller\\ApiDevisController::adde'], ['idchantier'], ['POST' => 0], null, false, true, null]],
        3801 => [[['_route' => 'api_devis_ajouter_win', '_controller' => 'App\\Controller\\ApiDevisController::addwin'], ['idchantier'], ['POST' => 0], null, false, true, null]],
        3825 => [[['_route' => 'api_devs_update_devis', '_controller' => 'App\\Controller\\ApiDevisController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        3858 => [[['_route' => 'api_devis_upgroupe_devis', '_controller' => 'App\\Controller\\ApiDevisController::upgroupe'], ['iddev', 'idgr'], ['POST' => 0], null, false, true, null]],
        3884 => [[['_route' => 'api_devis_basetva_devis', '_controller' => 'App\\Controller\\ApiDevisController::adbase'], ['iddev'], ['POST' => 0], null, false, true, null]],
        3905 => [[['_route' => 'api_devis_lot_devis', '_controller' => 'App\\Controller\\ApiDevisController::lotDevis'], ['id'], ['POST' => 0], null, false, true, null]],
        3944 => [[['_route' => 'api_facture', '_controller' => 'App\\Controller\\ApiFactureController::index'], ['id'], ['POST' => 0], null, false, true, null]],
        3962 => [[['_route' => 'api_get_facture_api', '_controller' => 'App\\Controller\\ApiFactureController::getOne'], ['id'], ['POST' => 0], null, false, true, null]],
        3983 => [[['_route' => 'api_update_facture_api', '_controller' => 'App\\Controller\\ApiFactureController::updateFacture'], ['id'], ['POST' => 0], null, false, true, null]],
        4025 => [[['_route' => 'api_add_facture', '_controller' => 'App\\Controller\\ApiFactureController::addfac'], ['iddec', 'iddev', 'typ'], ['POST' => 0], null, false, true, null]],
        4050 => [[['_route' => 'api_facture_apdf_facture', '_controller' => 'App\\Controller\\ApiFactureController::apdff'], ['id'], ['POST' => 0], null, false, true, null]],
        4078 => [[['_route' => 'api_facture_excel_facture', '_controller' => 'App\\Controller\\ApiFactureController::excel'], ['id'], ['POST' => 0], null, false, true, null]],
        4107 => [[['_route' => 'api_facture_ppdf_facture', '_controller' => 'App\\Controller\\ApiFactureController::ppdff'], ['id'], ['POST' => 0], null, false, true, null]],
        4144 => [[['_route' => 'add_Pourcentage_api', '_controller' => 'App\\Controller\\ApiFactureController::addPourcentage'], ['idfa', 'pourcent'], ['POST' => 0], null, false, true, null]],
        4172 => [[['_route' => 'api_delete_facture', '_controller' => 'App\\Controller\\ApiFactureController::deleteFacture'], ['id'], ['POST' => 0], null, false, true, null]],
        4187 => [[['_route' => 'api_dele_facture', '_controller' => 'App\\Controller\\ApiFactureController::deleFacture'], ['id'], ['POST' => 0], null, false, true, null]],
        4206 => [[['_route' => 'api_del_facture', '_controller' => 'App\\Controller\\ApiFactureController::delFacture'], ['id'], ['POST' => 0], null, false, true, null]],
        4241 => [[['_route' => 'add_Montant_api', '_controller' => 'App\\Controller\\ApiFactureController::addMontant'], ['idfa', 'montant'], ['POST' => 0], null, false, true, null]],
        4273 => [[['_route' => 'api_delete_fichier', '_controller' => 'App\\Controller\\ApiFichierController::delfichier'], ['id'], ['POST' => 0], null, false, true, null]],
        4300 => [[['_route' => 'api_chantier_fichier', '_controller' => 'App\\Controller\\ApiFichierController::addfichierchantier'], ['id'], ['POST' => 0], null, false, true, null]],
        4335 => [[['_route' => 'api_choix_forme', '_controller' => 'App\\Controller\\ApiFormeController::choixforme'], ['id'], ['POST' => 0], null, false, true, null]],
        4362 => [[['_route' => 'api_updates_forme', '_controller' => 'App\\Controller\\ApiFormeController::updateformeSS'], ['id'], ['POST' => 0], null, false, true, null]],
        4383 => [[['_route' => 'api_update_forme', '_controller' => 'App\\Controller\\ApiFormeController::updateFormeWithImages'], ['id'], ['POST' => 0], null, false, true, null]],
        4428 => [[['_route' => 'api_fournisseur_add', '_controller' => 'App\\Controller\\ApiFournisseurController::addFournisseures'], ['type', 'fourne'], ['POST' => 0], null, false, true, null]],
        4467 => [[['_route' => 'upd_fournisseur_add', '_controller' => 'App\\Controller\\ApiFournisseurController::updFournisseures'], ['type', 'fourne', 'id'], ['POST' => 0], null, false, true, null]],
        4488 => [[['_route' => 'del_fournisseur_api', '_controller' => 'App\\Controller\\ApiFournisseurController::delFournisseures'], ['id'], ['POST' => 0], null, false, true, null]],
        4513 => [[['_route' => 'api_fournisseur_pdf', '_controller' => 'App\\Controller\\ApiFournisseurController::pdff'], ['typ'], ['POST' => 0], null, false, false, null]],
        4572 => [[['_route' => 'api_intervenant', '_controller' => 'App\\Controller\\ApiIntervenantController::index'], ['id', 'type'], ['POST' => 0], null, false, true, null]],
        4596 => [[['_route' => 'api_intervenant_caisses', '_controller' => 'App\\Controller\\ApiIntervenantController::boninterve'], ['id'], ['POST' => 0], null, false, true, null]],
        4618 => [[['_route' => 'api_intervenant_add', '_controller' => 'App\\Controller\\ApiIntervenantController::add'], ['id'], ['POST' => 0], null, false, true, null]],
        4649 => [[['_route' => 'api_oper_intervenant_add', '_controller' => 'App\\Controller\\ApiIntervenantController::addOper'], ['id'], ['POST' => 0], null, false, true, null]],
        4673 => [[['_route' => 'api_intervenant_update', '_controller' => 'App\\Controller\\ApiIntervenantController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        4712 => [[['_route' => 'apiinventaires', '_controller' => 'App\\Controller\\ApiInventaireController::getArticle'], ['id'], ['POST' => 0], null, false, true, null]],
        4733 => [[['_route' => 'api_inventaire', '_controller' => 'App\\Controller\\ApiInventaireController::getPythonArticle'], ['id'], ['POST' => 0], null, false, true, null]],
        4779 => [[['_route' => 'api_recap_add', '_controller' => 'App\\Controller\\ApiInventaireController::addrecap'], ['idchan', 'idar', 'qte'], ['POST' => 0], null, false, true, null]],
        4824 => [[['_route' => 'api_ligne_caisse', '_controller' => 'App\\Controller\\ApiLigneCaisseController::index'], ['id'], ['POST' => 0], null, false, true, null]],
        4856 => [[['_route' => 'api_ligne_caisse_designation_add', '_controller' => 'App\\Controller\\ApiLigneCaisseController::addDesi'], ['id'], ['POST' => 0], null, false, true, null]],
        4887 => [[['_route' => 'api_ligne_caisse_delete_ligne', '_controller' => 'App\\Controller\\ApiLigneCaisseController::delligne'], ['idligne', 'idcaisse'], ['POST' => 0], null, false, true, null]],
        4921 => [[['_route' => 'apilignecommande', '_controller' => 'App\\Controller\\ApiLigneCommandeController::index'], ['id'], ['POST' => 0], null, false, true, null]],
        4962 => [[['_route' => 'api_ligne_commande_choix_add', '_controller' => 'App\\Controller\\ApiLigneCommandeController::addLiigne'], ['idar', 'idgr', 'idbon'], ['POST' => 0], null, false, true, null]],
        5003 => [[['_route' => 'api_ligne_commande_designation_add', '_controller' => 'App\\Controller\\ApiLigneCommandeController::addDesi'], ['idbon', 'idgr'], ['POST' => 0], null, false, true, null]],
        5034 => [[['_route' => 'api_ligne_commande_delete_ligne', '_controller' => 'App\\Controller\\ApiLigneCommandeController::delligne'], ['id', 'idbon'], ['POST' => 0], null, false, true, null]],
        5077 => [[['_route' => 'api_ligne_commande_update_ligne', '_controller' => 'App\\Controller\\ApiLigneCommandeController::update'], ['id', 'idbon', 'idgr'], ['POST' => 0], null, false, true, null]],
        5132 => [[['_route' => 'api_lignebon_ref_upd', '_controller' => 'App\\Controller\\ApiLigneCommandeController::upddevref'], ['id', 'val', 'idbon', 'type'], ['POST' => 0], null, false, true, null]],
        5167 => [[['_route' => 'apilignedecompte', '_controller' => 'App\\Controller\\ApiLigneDecompteController::index'], ['id'], ['POST' => 0], null, false, true, null]],
        5195 => [[['_route' => 'apilignedevis', '_controller' => 'App\\Controller\\ApiLigneDevisController::index'], ['id'], ['POST' => 0], null, false, true, null]],
        5236 => [[['_route' => 'api_ligne_devis_choix_add', '_controller' => 'App\\Controller\\ApiLigneDevisController::addLiigne'], ['idar', 'idgr', 'iddev'], ['POST' => 0], null, false, true, null]],
        5277 => [[['_route' => 'api_ligne_devis_designation_add', '_controller' => 'App\\Controller\\ApiLigneDevisController::addDesi'], ['id', 'idgr'], ['POST' => 0], null, false, true, null]],
        5308 => [[['_route' => 'api_ligne_devis_delete_ligne', '_controller' => 'App\\Controller\\ApiLigneDevisController::delligne'], ['id', 'iddev'], ['POST' => 0], null, false, true, null]],
        5351 => [[['_route' => 'api_ligne_devis_update_ligne', '_controller' => 'App\\Controller\\ApiLigneDevisController::update'], ['id', 'iddev', 'idgr'], ['POST' => 0], null, false, true, null]],
        5406 => [[['_route' => 'api_ligne_ref_upd', '_controller' => 'App\\Controller\\ApiLigneDevisController::upddevref'], ['id', 'val', 'iddev', 'type'], ['POST' => 0], null, false, true, null]],
        5437 => [[['_route' => 'apilignefacture', '_controller' => 'App\\Controller\\ApiLigneFactureController::index'], ['id'], ['POST' => 0], null, false, true, null]],
        5498 => [[['_route' => 'api_add_materiel', '_controller' => 'App\\Controller\\ApiMaterielController::addMateriels'], ['mat', 'idfam', 'idfourn', 'stock'], ['POST' => 0], null, false, true, null]],
        5558 => [[['_route' => 'api_upd_materiel', '_controller' => 'App\\Controller\\ApiMaterielController::updMateriels'], ['id', 'mat', 'idfam', 'idfourn', 'stock'], null, null, false, true, null]],
        5582 => [[['_route' => 'api_del_materiel', '_controller' => 'App\\Controller\\ApiMaterielController::delMateriels'], ['id'], null, null, false, true, null]],
        5621 => [[['_route' => 'api_add_fournisseur_materiel', '_controller' => 'App\\Controller\\ApiMaterielController::adderFournisseur'], ['fou'], null, null, false, true, null]],
        5654 => [[['_route' => 'api_upd_fournisseur_materiel', '_controller' => 'App\\Controller\\ApiMaterielController::updFournisseur'], ['id', 'fou'], null, null, false, true, null]],
        5678 => [[['_route' => 'api_del_fournisseur_materiel', '_controller' => 'App\\Controller\\ApiMaterielController::delFournisseur'], ['id'], null, null, false, true, null]],
        5710 => [[['_route' => 'api_add_famille_materiel', '_controller' => 'App\\Controller\\ApiMaterielController::adderFamilles'], ['fam'], null, null, false, true, null]],
        5743 => [[['_route' => 'api_upd_famille_materiel', '_controller' => 'App\\Controller\\ApiMaterielController::updFamilles'], ['id', 'fam'], null, null, false, true, null]],
        5764 => [[['_route' => 'api_del_famille_materiel', '_controller' => 'App\\Controller\\ApiMaterielController::delFamille'], ['id'], null, null, false, true, null]],
        5805 => [[['_route' => 'api_add_benef', '_controller' => 'App\\Controller\\ApiMaterielController::addBenef'], ['idbenef', 'typebenef'], ['POST' => 0], null, false, true, null]],
        5838 => [[['_route' => 'api_upd_benef', '_controller' => 'App\\Controller\\ApiMaterielController::updBenef'], ['id', 'contacts'], null, null, false, true, null]],
        5862 => [[['_route' => 'api_del_benef', '_controller' => 'App\\Controller\\ApiMaterielController::delBenef'], ['id'], null, null, false, true, null]],
        5913 => [[['_route' => 'api_add_matchan', '_controller' => 'App\\Controller\\ApiMaterielController::addMatChan'], ['idchan', 'idmat', 'qte'], null, null, false, true, null]],
        5958 => [[['_route' => 'api_add_matbenef', '_controller' => 'App\\Controller\\ApiMaterielController::addMatBenef'], ['idbenef', 'idmat', 'qte'], null, null, false, true, null]],
        5997 => [[['_route' => 'api_personnel_add', '_controller' => 'App\\Controller\\ApiPersonnelController::addPers'], ['idservice'], ['POST' => 0], null, false, true, null]],
        6030 => [[['_route' => 'api_personnel_update', '_controller' => 'App\\Controller\\ApiPersonnelController::updatePers'], ['idservice', 'idperso'], ['POST' => 0], null, false, true, null]],
        6054 => [[['_route' => 'api_personnel_del', '_controller' => 'App\\Controller\\ApiPersonnelController::delPers'], ['idservice'], ['DELETE' => 0], null, false, true, null]],
        6079 => [[['_route' => 'api_personnel_del_service', '_controller' => 'App\\Controller\\ApiPersonnelController::delServe'], ['idservice'], ['DELETE' => 0], null, false, true, null]],
        6111 => [[['_route' => 'api_personnel_add_charge', '_controller' => 'App\\Controller\\ApiPersonnelController::addCharge'], ['charge'], ['POST' => 0], null, false, true, null]],
        6144 => [[['_route' => 'api_personnel_update_charge', '_controller' => 'App\\Controller\\ApiPersonnelController::updCharge'], ['idcharge', 'charge'], ['POST' => 0], null, false, true, null]],
        6186 => [[['_route' => 'api_service_add', '_controller' => 'App\\Controller\\ApiPersonnelController::addService'], ['rang', 'serve'], ['POST' => 0], null, false, true, null]],
        6228 => [[['_route' => 'api_service_update', '_controller' => 'App\\Controller\\ApiPersonnelController::updateService'], ['rang', 'serve', 'idserve'], ['POST' => 0], null, false, true, null]],
        6271 => [[['_route' => 'api_add_planning', '_controller' => 'App\\Controller\\ApiPlanningController::addPlann'], ['idchan', 'plan'], ['POST' => 0], null, false, true, null]],
        6312 => [[['_route' => 'api_add_section', '_controller' => 'App\\Controller\\ApiPlanningController::addSection'], ['idplan', 'sec'], ['POST' => 0], null, false, true, null]],
        6353 => [[['_route' => 'api_sup_planning', '_controller' => 'App\\Controller\\ApiPlanningController::addSupTache'], ['idtache', 'idsup'], ['POST' => 0], null, false, true, null]],
        6381 => [[['_route' => 'api_add_tache', '_controller' => 'App\\Controller\\ApiPlanningController::addTache'], ['idsec'], ['POST' => 0], null, false, true, null]],
        6427 => [[['_route' => 'api_charge_interne_depenses', '_controller' => 'App\\Controller\\ApiStatutController::caisseget'], ['mois'], ['POST' => 0], null, false, true, null]],
        6453 => [[['_route' => 'api_charge_perso_depenses', '_controller' => 'App\\Controller\\ApiStatutController::caissepers'], ['mois'], ['POST' => 0], null, false, true, null]],
        6476 => [[['_route' => 'api_charge_presta_depenses', '_controller' => 'App\\Controller\\ApiStatutController::caissepresta'], ['mois'], ['POST' => 0], null, false, true, null]],
        6501 => [[['_route' => 'api_charge_fourni_depenses', '_controller' => 'App\\Controller\\ApiStatutController::caissefourni'], ['mois'], ['POST' => 0], null, false, true, null]],
        6530 => [[['_route' => 'api_reglements_depenses', '_controller' => 'App\\Controller\\ApiStatutController::caissereglements'], ['mois'], ['POST' => 0], null, false, true, null]],
        6569 => [[['_route' => 'api_add_todo', '_controller' => 'App\\Controller\\ApiTodoController::addTodo'], ['id', 'todor'], ['POST' => 0], null, false, true, null]],
        6593 => [[['_route' => 'api_del_todo', '_controller' => 'App\\Controller\\ApiTodoController::delTodo'], ['id'], ['POST' => 0], null, false, true, null]],
        6634 => [[['_route' => 'apifirst', '_controller' => 'App\\Controller\\ApiUserController::updateLangueTheme'], ['themes', 'langue'], ['POST' => 0], null, false, true, null]],
        6713 => [[['_route' => 'apiUserCompte', '_controller' => 'App\\Controller\\ApiUserController::addComptes'], ['idpays', 'nom', 'prenoms', 'societe', 'contact', 'username', 'password'], ['POST' => 0], null, false, true, null]],
        6748 => [[['_route' => 'apivalider', '_controller' => 'App\\Controller\\ApiValiderController::index'], ['id'], ['POST' => 0], null, false, true, null]],
        6770 => [[['_route' => 'apigetvalider', '_controller' => 'App\\Controller\\ApiValiderController::validerDate'], ['date'], ['POST' => 0], null, false, true, null]],
        6806 => [[['_route' => 'api_excel_bonfournisseur', '_controller' => 'App\\Controller\\ExportController::pdfToExcel'], ['id'], ['POST' => 0], null, false, true, null]],
        6853 => [[['_route' => 'updateArticle', '_controller' => 'App\\Controller\\ArticleController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        6878 => [[['_route' => 'ajouterArticle', '_controller' => 'App\\Controller\\ArticleController::ajouterArticle'], ['id'], ['POST' => 0], null, false, true, null]],
        6908 => [[['_route' => 'rempartage', 'id' => null, '_controller' => 'App\\Controller\\ArticleController::delpartage'], ['id'], null, null, false, true, null]],
        6935 => [[['_route' => 'delarticle', '_controller' => 'App\\Controller\\ArticleController::delarticle'], ['id'], null, null, false, true, null]],
        6962 => [[['_route' => 'delcate', 'id' => null, '_controller' => 'App\\Controller\\ArticleController::delcate'], ['id'], null, null, false, true, null]],
        6988 => [[['_route' => 'delsec', 'id' => null, '_controller' => 'App\\Controller\\ArticleController::delsec'], ['id'], null, null, false, true, null]],
        7014 => [[['_route' => 'artmigrate', '_controller' => 'App\\Controller\\ArticleController::artmigrate'], ['id'], null, null, false, true, null]],
        7037 => [[['_route' => 'vente', '_controller' => 'App\\Controller\\ArticleController::vente'], ['idarticle'], null, null, false, true, null]],
        7066 => [[['_route' => 'searchRef', 'rech' => null, '_controller' => 'App\\Controller\\ArticleController::searchRef'], ['rech'], ['POST' => 0], null, false, true, null]],
        7080 => [[['_route' => 'editArticle', '_controller' => 'App\\Controller\\ArticleController::index'], ['id'], null, null, false, true, null]],
        7108 => [[['_route' => 'editfamille', '_controller' => 'App\\Controller\\ArticleController::index'], ['idfamille'], null, null, false, true, null]],
        7136 => [[['_route' => 'editfourn', '_controller' => 'App\\Controller\\ArticleController::index'], ['idfourn'], null, null, false, true, null]],
        7166 => [[['_route' => 'editSousfamille', '_controller' => 'App\\Controller\\ArticleController::index'], ['idsousfamille'], null, null, false, true, null]],
        7219 => [[['_route' => 'deldoc', 'type' => null, '_controller' => 'App\\Controller\\AttacheDocController::deldoc'], ['id', 'type'], null, null, false, true, null]],
        7262 => [[['_route' => 'attacher', '_controller' => 'App\\Controller\\AttacheDocController::index'], ['id', 'type', 'charger'], null, null, false, true, null]],
        7301 => [[['_route' => 'addDecompte', '_controller' => 'App\\Controller\\DecompteController::addDecompte'], ['id'], ['POST' => 0], null, false, true, null]],
        7320 => [[['_route' => 'addoDecompte', '_controller' => 'App\\Controller\\DecompteController::addoDecompte'], ['id'], ['POST' => 0], null, false, true, null]],
        7345 => [[['_route' => 'updateDECOMPTE', '_controller' => 'App\\Controller\\DecompteController::updateDecompte'], ['id'], ['PUT' => 0], null, false, true, null]],
        7374 => [[['_route' => 'reloadDECOMPTE', '_controller' => 'App\\Controller\\DecompteController::reloadDecompte'], ['id'], ['GET' => 0], null, false, true, null]],
        7404 => [[['_route' => 'devaliderdecompte', '_controller' => 'App\\Controller\\DecompteController::devalidedecompte'], ['id'], ['GET' => 0], null, false, true, null]],
        7423 => [[['_route' => 'delDecompte', '_controller' => 'App\\Controller\\DecompteController::delDecompte'], ['id'], ['DELETE' => 0], null, false, true, null]],
        7452 => [[['_route' => 'validerdecompte', '_controller' => 'App\\Controller\\DecompteController::validedecompte'], ['id'], ['GET' => 0], null, false, true, null]],
        7486 => [[['_route' => 'valideconvertirfacture', '_controller' => 'App\\Controller\\DecompteController::valideconvertirfacture'], ['id'], ['GET' => 0], null, false, true, null]],
        7521 => [[['_route' => 'convertirfacture', '_controller' => 'App\\Controller\\DecompteController::convertirfacture'], ['id'], ['GET' => 0], null, false, true, null]],
        7541 => [[['_route' => 'editdecompte', '_controller' => 'App\\Controller\\DecompteController::decompte'], ['id', 'idchantier'], ['GET' => 0], null, false, true, null]],
        7573 => [[['_route' => 'editlignedecompte', '_controller' => 'App\\Controller\\DecompteController::decompte'], ['id', 'idligne'], null, null, false, true, null]],
        7602 => [[['_route' => 'addDevis', '_controller' => 'App\\Controller\\DevisController::addDevis'], ['id'], ['POST' => 0], null, false, true, null]],
        7627 => [[['_route' => 'evaluerDevis', '_controller' => 'App\\Controller\\DevisController::evaluerDevis'], ['id'], ['POST' => 0], null, false, true, null]],
        7651 => [[['_route' => 'getDevies', '_controller' => 'App\\Controller\\DevisController::getDevis'], ['id'], ['POST' => 0], null, false, true, null]],
        7670 => [[['_route' => 'getDevis', '_controller' => 'App\\Controller\\DevisController::getsDevis'], ['idchan'], ['POST' => 0], null, false, true, null]],
        7711 => [[['_route' => 'getDevisChantier', '_controller' => 'App\\Controller\\DevisController::getDevisChantier'], ['id'], ['POST' => 0], null, false, true, null]],
        7735 => [[['_route' => 'devalidedevis', '_controller' => 'App\\Controller\\DevisController::devaldevis'], ['id'], ['GET' => 0], null, false, true, null]],
        7758 => [[['_route' => 'delDevis', '_controller' => 'App\\Controller\\DevisController::delDevis'], ['id'], ['DELETE' => 0], null, false, true, null]],
        7786 => [[['_route' => 'deldefDevis', '_controller' => 'App\\Controller\\DevisController::deldefdevis'], ['id'], ['DELETE' => 0], null, false, true, null]],
        7820 => [[['_route' => 'depdevis', '_controller' => 'App\\Controller\\DevisController::deplacerDevis'], ['id', 'idchantier'], ['GET' => 0], null, false, true, null]],
        7847 => [[['_route' => 'dupdevis', '_controller' => 'App\\Controller\\DevisController::dupDevis'], ['id'], ['GET' => 0], null, false, true, null]],
        7875 => [[['_route' => 'convertirDevis', '_controller' => 'App\\Controller\\DevisController::convertir'], ['id'], null, null, false, true, null]],
        7899 => [[['_route' => 'updateDevis', '_controller' => 'App\\Controller\\DevisController::updateDevis'], ['id'], ['PUT' => 0], null, false, true, null]],
        7924 => [[['_route' => 'basetvaDevis', '_controller' => 'App\\Controller\\DevisController::addBase'], ['id'], ['PUT' => 0], null, false, true, null]],
        7951 => [[['_route' => 'addRemise', '_controller' => 'App\\Controller\\DevisController::addRemise'], ['id'], ['POST' => 0], null, false, true, null]],
        7976 => [[['_route' => 'restaureDevis', '_controller' => 'App\\Controller\\DevisController::restaureDevis'], ['id'], ['GET' => 0], null, false, true, null]],
        8005 => [[['_route' => 'validedevis', '_controller' => 'App\\Controller\\DevisController::validedevis'], ['id'], ['GET' => 0], null, false, true, null]],
        8027 => [[['_route' => 'ventedevis', '_controller' => 'App\\Controller\\DevisController::venteDevis'], ['id'], ['POST' => 0], null, false, true, null]],
        8048 => [[['_route' => 'editdevis', '_controller' => 'App\\Controller\\DevisController::devis'], ['id', 'idchantier'], ['GET' => 0], null, false, true, null]],
        8090 => [[['_route' => 'editgroupe', '_controller' => 'App\\Controller\\DevisController::devis'], ['id', 'idgroupe', 'idchantier'], null, null, false, true, null]],
        8131 => [[['_route' => 'editlignedevis', '_controller' => 'App\\Controller\\DevisController::devis'], ['id', 'idligne', 'idchantier'], null, null, false, true, null]],
        8171 => [[['_route' => 'addBon', '_controller' => 'App\\Controller\\BonController::addBon'], ['id'], ['POST' => 0], null, false, true, null]],
        8194 => [[['_route' => 'addBonPrepa', '_controller' => 'App\\Controller\\BonController::addBonPrepa'], ['id'], ['POST' => 0], null, false, true, null]],
        8219 => [[['_route' => 'addBonArticle', '_controller' => 'App\\Controller\\BonController::addBonArticle'], ['id'], null, null, false, true, null]],
        8247 => [[['_route' => 'addBonLivre', '_controller' => 'App\\Controller\\BonController::addBonLivre'], ['id'], ['POST' => 0], null, false, true, null]],
        8282 => [[['_route' => 'getBonFour', '_controller' => 'App\\Controller\\BonController::getBonFour'], ['id'], ['POST' => 0], null, false, true, null]],
        8300 => [[['_route' => 'getBonFourChantier', '_controller' => 'App\\Controller\\BonController::getBonFourChan'], ['id', 'idchantier'], ['POST' => 0], null, false, true, null]],
        8326 => [[['_route' => 'updateBonFourn', '_controller' => 'App\\Controller\\BonController::fourneUpdateBon'], ['id'], ['PUT' => 0], null, false, true, null]],
        8359 => [[['_route' => 'addPrestaBonchan', '_controller' => 'App\\Controller\\BonController::addPrestaBonChan'], ['id'], ['POST' => 0], null, false, true, null]],
        8383 => [[['_route' => 'updateBon', '_controller' => 'App\\Controller\\BonController::updateBon'], ['id'], ['PUT' => 0], null, false, true, null]],
        8414 => [[['_route' => 'updateBonPresta', '_controller' => 'App\\Controller\\BonController::prestaUpdateBon'], ['id'], ['PUT' => 0], null, false, true, null]],
        8450 => [[['_route' => 'statusBon', '_controller' => 'App\\Controller\\BonController::statusBon'], ['id', 'status'], ['GET' => 0], null, false, true, null]],
        8482 => [[['_route' => 'solderBon', '_controller' => 'App\\Controller\\BonController::solderBon'], ['id', 'll'], ['GET' => 0], null, false, true, null]],
        8508 => [[['_route' => 'validerBon', '_controller' => 'App\\Controller\\BonController::validebon'], ['id'], ['GET' => 0], null, false, true, null]],
        8541 => [[['_route' => 'devaliderBon', '_controller' => 'App\\Controller\\BonController::delvalbon'], ['id'], ['GET' => 0], null, false, true, null]],
        8563 => [[['_route' => 'delBon', '_controller' => 'App\\Controller\\BonController::delBon'], ['id'], ['DELETE' => 0], null, false, true, null]],
        8591 => [[['_route' => 'deldefBon', '_controller' => 'App\\Controller\\BonController::deldefbon'], ['id'], ['DELETE' => 0], null, false, true, null]],
        8625 => [[['_route' => 'deplaceBon', '_controller' => 'App\\Controller\\BonController::depBon'], ['id', 'idchan'], ['GET' => 0], null, false, true, null]],
        8652 => [[['_route' => 'dupBon', '_controller' => 'App\\Controller\\BonController::dupBon'], ['id'], ['POST' => 0], null, false, true, null]],
        8680 => [[['_route' => 'restaureBon', '_controller' => 'App\\Controller\\BonController::restaureBon'], ['id'], ['GET' => 0], null, false, true, null]],
        8700 => [[['_route' => 'editbon', '_controller' => 'App\\Controller\\BonController::bon'], ['id', 'idchantier'], ['GET' => 0], null, false, true, null]],
        8742 => [[['_route' => 'bongroupe', '_controller' => 'App\\Controller\\BonController::bon'], ['id', 'idgroupe', 'idchantier'], null, null, false, true, null]],
        8783 => [[['_route' => 'editlignebon', '_controller' => 'App\\Controller\\BonController::bon'], ['id', 'idligne', 'idchantier'], null, null, false, true, null]],
        8819 => [[['_route' => 'budgetDevis', '_controller' => 'App\\Controller\\BudgetController::budgetDevis'], ['id'], ['GET' => 0], null, false, true, null]],
        8843 => [[['_route' => 'budgetDevisLignes', '_controller' => 'App\\Controller\\BudgetController::budgetDevisLignes'], ['id'], ['GET' => 0], null, false, true, null]],
        8872 => [[['_route' => 'budgetBonLignes', '_controller' => 'App\\Controller\\BudgetController::budgetBonLignes'], ['id'], ['GET' => 0], null, false, true, null]],
        8905 => [[['_route' => 'chbudget', 'iddev' => null, '_controller' => 'App\\Controller\\BudgetController::index'], ['iddev'], null, null, false, true, null]],
        8932 => [[['_route' => 'chchan', 'idchan' => null, '_controller' => 'App\\Controller\\BudgetController::index'], ['idchan'], null, null, false, true, null]],
        8966 => [[['_route' => 'addCaisse', '_controller' => 'App\\Controller\\CaisseController::addCaisse'], ['id'], ['POST' => 0], null, false, true, null]],
        8999 => [[['_route' => 'updCaissefrais', '_controller' => 'App\\Controller\\CaisseController::updFraisCaisse'], ['id'], ['PUT' => 0], null, false, true, null]],
        9032 => [[['_route' => 'updCaissefraisChantier', '_controller' => 'App\\Controller\\CaisseController::updFraisCaisseChantier'], ['id'], ['PUT' => 0], null, false, true, null]],
        9064 => [[['_route' => 'updCaissepersonnel', '_controller' => 'App\\Controller\\CaisseController::updPersonnelCaisse'], ['id'], ['PUT' => 0], null, false, true, null]],
        9085 => [[['_route' => 'updateCaisse', '_controller' => 'App\\Controller\\CaisseController::updateCaisse'], ['id'], ['PUT' => 0], null, false, true, null]],
        9112 => [[['_route' => 'updCaisse', '_controller' => 'App\\Controller\\CaisseController::updCaisse'], ['id'], ['PUT' => 0], null, false, true, null]],
        9134 => [[['_route' => 'montantCaisse', '_controller' => 'App\\Controller\\CaisseController::montantCaisse'], ['id'], ['PUT' => 0], null, false, true, null]],
        9156 => [[['_route' => 'validecaisse', '_controller' => 'App\\Controller\\CaisseController::valideCaisse'], ['id'], ['GET' => 0], null, false, true, null]],
        9183 => [[['_route' => 'devalidecaisse', '_controller' => 'App\\Controller\\CaisseController::devalidecaisse'], ['id'], ['GET' => 0], null, false, true, null]],
        9202 => [[['_route' => 'delCaisse', '_controller' => 'App\\Controller\\CaisseController::delCaisse'], ['id'], ['DELETE' => 0], null, false, true, null]],
        9227 => [[['_route' => 'deldefCaisse', '_controller' => 'App\\Controller\\CaisseController::deldefon'], ['id'], ['DELETE' => 0], null, false, true, null]],
        9258 => [[['_route' => 'depcaisse', '_controller' => 'App\\Controller\\CaisseController::deplacerCaisse'], ['id', 'idchan'], ['GET' => 0], null, false, true, null]],
        9283 => [[['_route' => 'restaureCaisse', '_controller' => 'App\\Controller\\CaisseController::restaureCaisse'], ['id'], ['GET' => 0], null, false, true, null]],
        9303 => [[['_route' => 'editcaisse', '_controller' => 'App\\Controller\\CaisseController::caisse'], ['idcaisse', 'idchantier'], null, null, false, true, null]],
        9329 => [[['_route' => 'editlignecaisse', '_controller' => 'App\\Controller\\CaisseController::caisse'], ['idcaisse', 'idligne', 'idchantier'], null, null, false, true, null]],
        9371 => [[['_route' => 'miseajourchantier', '_controller' => 'App\\Controller\\ChantierController::ajourChantier'], ['id'], ['POST' => 0], null, false, true, null]],
        9394 => [[['_route' => 'deltache', '_controller' => 'App\\Controller\\ChantierController::deltache'], ['id'], null, null, false, true, null]],
        9412 => [[['_route' => 'getchantier', '_controller' => 'App\\Controller\\ChantierController::getchantiere'], ['id'], ['GET' => 0], null, false, true, null]],
        9439 => [[['_route' => 'addRecap', '_controller' => 'App\\Controller\\ChantierController::addRecap'], ['id'], ['POST' => 0], null, false, true, null]],
        9460 => [[['_route' => 'updateRecap', '_controller' => 'App\\Controller\\ChantierController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        9478 => [[['_route' => 'delRecap', '_controller' => 'App\\Controller\\ChantierController::delContact'], ['id'], ['DELETE' => 0], null, false, true, null]],
        9503 => [[['_route' => 'searchez', '_controller' => 'App\\Controller\\ChantierController::search'], ['id'], null, null, false, true, null]],
        9517 => [[['_route' => 'chantier', '_controller' => 'App\\Controller\\ChantierController::index'], ['id'], null, null, false, true, null]],
        9545 => [[['_route' => 'contact', 'idcontact' => null, '_controller' => 'App\\Controller\\ChantierController::index'], ['idcontact', 'id'], null, null, false, true, null]],
        9571 => [[['_route' => 'derecap', 'idrecap' => null, '_controller' => 'App\\Controller\\ChantierController::index'], ['idrecap', 'id'], null, null, false, true, null]],
        9603 => [[['_route' => 'editYnterve', 'idinterve' => null, '_controller' => 'App\\Controller\\ChantierController::index'], ['idinterve', 'id'], null, null, false, true, null]],
        9637 => [[['_route' => 'editfournisseur', 'idfourn' => null, '_controller' => 'App\\Controller\\ChantierController::index'], ['idfourn'], null, null, false, true, null]],
        9671 => [[['_route' => 'editprestataire', 'idpresta' => null, '_controller' => 'App\\Controller\\ChantierController::index'], ['idpresta'], null, null, false, true, null]],
        9692 => [[['_route' => 'upload', '_controller' => 'App\\Controller\\ChantierController::index'], ['id'], null, null, false, true, null]],
        9725 => [[['_route' => 'editclotures', 'id' => null, '_controller' => 'App\\Controller\\ChantiersCloturesController::chantermines'], ['id'], null, null, false, true, null]],
        9752 => [[['_route' => 'sertforme', '_controller' => 'App\\Controller\\ChantiersController::sertforme'], ['id'], ['GET' => 0], null, false, true, null]],
        9787 => [[['_route' => 'getdatas', '_controller' => 'App\\Controller\\ChantiersController::getdatas'], ['type'], ['GET' => 0], null, false, true, null]],
        9806 => [[['_route' => 'getdatass', '_controller' => 'App\\Controller\\ChantiersController::getdatass'], ['type'], ['GET' => 0], null, false, true, null]],
        9829 => [[['_route' => 'getChantierDevis', '_controller' => 'App\\Controller\\ChantiersController::getDevisChantier'], ['id'], ['POST' => 0], null, false, true, null]],
        9855 => [[['_route' => 'getcontactchantier', '_controller' => 'App\\Controller\\ChantiersController::getContactChantier'], ['id'], ['GET' => 0], null, false, true, null]],
        9880 => [[['_route' => 'getIntervechantier', '_controller' => 'App\\Controller\\ChantiersController::getInterveChantier'], ['id'], ['POST' => 0], null, false, true, null]],
        9908 => [[['_route' => 'updateChantier', '_controller' => 'App\\Controller\\ChantiersController::updateChantier'], ['id'], ['PUT' => 0], null, false, true, null]],
        9934 => [[['_route' => 'updateChan', '_controller' => 'App\\Controller\\ChantiersController::updateChan'], ['id'], ['PUT' => 0], null, false, true, null]],
        9950 => [[['_route' => 'updaChantier', '_controller' => 'App\\Controller\\ChantiersController::updaChantier'], ['id'], ['PUT' => 0], null, false, true, null]],
        9975 => [[['_route' => 'delChantier', '_controller' => 'App\\Controller\\ChantiersController::delChantier'], ['id'], ['DELETE' => 0], null, false, true, null]],
        10003 => [[['_route' => 'deldefChantier', '_controller' => 'App\\Controller\\ChantiersController::deldefChantier'], ['id'], ['DELETE' => 0], null, false, true, null]],
        10031 => [[['_route' => 'delReglement', '_controller' => 'App\\Controller\\ChantiersController::deleReglememt'], ['id'], ['GET' => 0], null, false, true, null]],
        10060 => [[['_route' => 'restaureChantier', '_controller' => 'App\\Controller\\ChantiersController::restaureChantier'], ['id'], ['GET' => 0], null, false, true, null]],
        10090 => [[['_route' => 'archiver', '_controller' => 'App\\Controller\\ChantiersController::archiver'], ['id'], ['GET' => 0], null, false, true, null]],
        10116 => [[['_route' => 'accepter', '_controller' => 'App\\Controller\\ChantiersController::acceprer'], ['id'], ['GET' => 0], null, false, true, null]],
        10145 => [[['_route' => 'echoue', '_controller' => 'App\\Controller\\ChantiersController::echoue'], ['id'], ['GET' => 0], null, false, true, null]],
        10170 => [[['_route' => 'encours', '_controller' => 'App\\Controller\\ChantiersController::encours'], ['id'], ['GET' => 0], null, false, true, null]],
        10198 => [[['_route' => 'terminer', '_controller' => 'App\\Controller\\ChantiersController::terminer'], ['id'], ['GET' => 0], null, false, true, null]],
        10225 => [[['_route' => 'cloturer', '_controller' => 'App\\Controller\\ChantiersController::cloturer'], ['id'], ['GET' => 0], null, false, true, null]],
        10250 => [[['_route' => 'editechantier', 'id' => null, '_controller' => 'App\\Controller\\ChantiersController::chantier'], ['id'], null, null, false, true, null]],
        10284 => [[['_route' => 'editclient', 'idclient' => null, '_controller' => 'App\\Controller\\ChantiersController::chantier'], ['idclient'], null, null, false, true, null]],
        10310 => [[['_route' => 'editcaissePR', 'idcaisse' => null, '_controller' => 'App\\Controller\\ChantiersController::chantier'], ['idcaisse'], null, null, false, true, null]],
        10337 => [[['_route' => 'editerContacte', 'idcontact' => null, '_controller' => 'App\\Controller\\ChantiersController::chantier'], ['idcontact'], null, null, false, true, null]],
        10367 => [[['_route' => 'editdevisPR', 'iddevis' => null, '_controller' => 'App\\Controller\\ChantiersController::chantier'], ['iddevis'], null, null, false, true, null]],
        10394 => [[['_route' => 'editdecomptePR', 'iddecompte' => null, '_controller' => 'App\\Controller\\ChantiersController::chantier'], ['iddecompte'], null, null, false, true, null]],
        10420 => [[['_route' => 'editlivrePR', '_controller' => 'App\\Controller\\ChantiersController::chantier'], ['idlivre'], null, null, false, true, null]],
        10448 => [[['_route' => 'editfacturePR', 'idfacture' => null, '_controller' => 'App\\Controller\\ChantiersController::chantier'], ['idfacture'], null, null, false, true, null]],
        10481 => [[['_route' => 'edittermines', 'id' => null, '_controller' => 'App\\Controller\\ChantiersTerminesController::chantermines'], ['id'], null, null, false, true, null]],
        10505 => [[['_route' => 'edittous', 'id' => null, '_controller' => 'App\\Controller\\ChantiersTousController::chantous'], ['id'], null, null, false, true, null]],
        10533 => [[['_route' => 'editcours', 'id' => null, '_controller' => 'App\\Controller\\ChantiersCoursController::chancours'], ['id'], null, null, false, true, null]],
        10564 => [[['_route' => 'editechouer', 'id' => null, '_controller' => 'App\\Controller\\ChantiersEchouesController::chanechouer'], ['id'], null, null, false, true, null]],
        10589 => [[['_route' => 'editetude', 'id' => null, '_controller' => 'App\\Controller\\ChantiersEtudeController::chantieretude'], ['id'], null, null, false, true, null]],
        10636 => [[['_route' => 'editcharger', 'id' => null, '_controller' => 'App\\Controller\\ChargesInternesController::index'], ['id'], null, null, false, true, null]],
        10681 => [[['_route' => 'addChat', '_controller' => 'App\\Controller\\ChatController::addChat'], ['id', 'message'], ['POST' => 0], null, false, true, null]],
        10699 => [[['_route' => 'getChat', '_controller' => 'App\\Controller\\ChatController::getChat'], ['id'], ['GET' => 0], null, false, true, null]],
        10718 => [[['_route' => 'getTacheChates', '_controller' => 'App\\Controller\\ChatController::getTacheChates'], ['id'], ['GET' => 0], null, false, true, null]],
        10759 => [[['_route' => 'api_del_chat', '_controller' => 'App\\Controller\\ChatController::delMess'], ['id', 'idtache'], ['DELETE' => 0], null, false, true, null]],
        10804 => [[['_route' => 'del_chat', '_controller' => 'App\\Controller\\ChatController::delMessage'], ['idd', 'receiver', 'id', 'idtache'], ['GET' => 0], null, false, true, null]],
        10838 => [[['_route' => 'message_chat_share', '_controller' => 'App\\Controller\\ChatController::shareChat'], ['idmess', 'receiver'], ['GET' => 0], null, false, true, null]],
        10866 => [[['_route' => 'getChates', '_controller' => 'App\\Controller\\ChatController::getChates'], ['receiver', 'id'], ['GET' => 0], null, false, true, null]],
        10896 => [[['_route' => 'getclientbyid', '_controller' => 'App\\Controller\\ClientController::getClient'], ['id'], ['GET' => 0], null, false, true, null]],
        10918 => [[['_route' => 'updateClient', '_controller' => 'App\\Controller\\ClientController::updateClient'], ['id'], ['PUT' => 0], null, false, true, null]],
        10943 => [[['_route' => 'delClient', '_controller' => 'App\\Controller\\ClientController::delclient'], ['id'], ['DELETE' => 0], null, false, true, null]],
        10972 => [[['_route' => 'deldefClient', '_controller' => 'App\\Controller\\ClientController::deldefclient'], ['id'], ['DELETE' => 0], null, false, true, null]],
        11001 => [[['_route' => 'restaureClient', '_controller' => 'App\\Controller\\ClientController::restaureClient'], ['id'], ['GET' => 0], null, false, true, null]],
        11016 => [[['_route' => 'client', '_controller' => 'App\\Controller\\ClientController::index'], ['id'], null, null, false, true, null]],
        11052 => [[['_route' => 'getcontact', '_controller' => 'App\\Controller\\ContactController::getContact'], ['id'], ['GET' => 0], null, false, true, null]],
        11074 => [[['_route' => 'addContact', '_controller' => 'App\\Controller\\ContactController::add'], ['id'], ['POST' => 0], null, false, true, null]],
        11108 => [[['_route' => 'updateContact', '_controller' => 'App\\Controller\\ContactController::update'], ['id', 'lieu'], ['PUT' => 0], null, false, true, null]],
        11130 => [[['_route' => 'delContact', '_controller' => 'App\\Controller\\ContactController::delContact'], ['id'], ['DELETE' => 0], null, false, true, null]],
        11152 => [[['_route' => 'editcontactor', 'id' => null, '_controller' => 'App\\Controller\\ContactController::editcontact'], ['id'], null, null, false, true, null]],
        11200 => [[['_route' => 'geckli', '_controller' => 'App\\Controller\\EtatController::getCliek'], ['aa'], ['GET' => 0], null, false, true, null]],
        11231 => [[['_route' => 'getDepenseMois', '_controller' => 'App\\Controller\\EtatController::getDepenseMois'], ['aa'], ['GET' => 0], null, false, true, null]],
        11253 => [[['_route' => 'edchantier', 'idchantier' => null, '_controller' => 'App\\Controller\\EtatController::index'], ['idchantier'], null, null, false, true, null]],
        11292 => [[['_route' => 'editfourne', 'idfourn' => null, '_controller' => 'App\\Controller\\EtatController::index'], ['idfourn'], null, null, false, true, null]],
        11330 => [[['_route' => 'editpresta', 'idpresta' => null, '_controller' => 'App\\Controller\\EtatController::index'], ['idpresta'], null, null, false, true, null]],
        11359 => [[['_route' => 'editpersondepense', 'idperson' => null, '_controller' => 'App\\Controller\\EtatController::index'], ['idperson'], null, null, false, true, null]],
        11392 => [[['_route' => 'getIntervenant', 'idinterve' => null, '_controller' => 'App\\Controller\\EtatController::index'], ['idinterve'], null, null, false, true, null]],
        11444 => [[['_route' => 'joindreExcercices', '_controller' => 'App\\Controller\\ExercicesController::addExercices'], ['idchan', 'idexe'], ['POST' => 0], null, false, true, null]],
        11478 => [[['_route' => 'removeExcercices', '_controller' => 'App\\Controller\\ExercicesController::removeExercices'], ['idchan', 'idexe'], ['DELETE' => 0], null, false, true, null]],
        11500 => [[['_route' => 'edit_exercices', 'id' => null, '_controller' => 'App\\Controller\\ExercicesController::exercicespages'], ['id'], null, null, false, true, null]],
        11541 => [[['_route' => 'addFacture', '_controller' => 'App\\Controller\\FactureController::addFacture'], ['id'], ['POST' => 0], null, false, true, null]],
        11563 => [[['_route' => 'acompteFacture', '_controller' => 'App\\Controller\\FactureController::acompteFacture'], ['id'], ['PUT' => 0], null, false, true, null]],
        11597 => [[['_route' => 'addPourcentage', '_controller' => 'App\\Controller\\FactureController::addPourcentage'], ['idchan', 'idfa'], ['POST' => 0], null, false, true, null]],
        11626 => [[['_route' => 'addMontant', '_controller' => 'App\\Controller\\FactureController::addMontant'], ['idchan', 'idfa'], ['POST' => 0], null, false, true, null]],
        11651 => [[['_route' => 'updateFacture', '_controller' => 'App\\Controller\\FactureController::updateFacture'], ['id'], ['PUT' => 0], null, false, true, null]],
        11667 => [[['_route' => 'updaFacture', '_controller' => 'App\\Controller\\FactureController::updaFacture'], ['id'], ['PUT' => 0], null, false, true, null]],
        11691 => [[['_route' => 'validefacture', '_controller' => 'App\\Controller\\FactureController::valideFacture'], ['id'], ['GET' => 0], null, false, true, null]],
        11715 => [[['_route' => 'getreste', '_controller' => 'App\\Controller\\FactureController::resteFacture'], ['id'], ['GET' => 0], null, false, true, null]],
        11743 => [[['_route' => 'devalidefacture', '_controller' => 'App\\Controller\\FactureController::devalideFacture'], ['id'], ['GET' => 0], null, false, true, null]],
        11765 => [[['_route' => 'delofacture', 'id' => null, '_controller' => 'App\\Controller\\FactureController::delFacture'], ['id'], ['DELETE' => 0], null, false, true, null]],
        11787 => [[['_route' => 'editfacture', '_controller' => 'App\\Controller\\FactureController::facture'], ['id', 'idchantier'], null, null, false, true, null]],
        11824 => [[['_route' => 'facturegroupe', '_controller' => 'App\\Controller\\FactureController::facture'], ['id', 'idgroupe', 'idchantier'], null, null, false, true, null]],
        11860 => [[['_route' => 'editlignefacture', '_controller' => 'App\\Controller\\FactureController::facture'], ['id', 'idligne', 'idchantier'], null, null, false, true, null]],
        11892 => [[['_route' => 'addFamille', '_controller' => 'App\\Controller\\FamilleController::addFamille'], ['type'], ['POST' => 0], null, false, true, null]],
        11917 => [[['_route' => 'updateFamille', '_controller' => 'App\\Controller\\FamilleController::updateFamille'], ['id'], ['POST' => 0], null, false, true, null]],
        11939 => [[['_route' => 'delFamille', '_controller' => 'App\\Controller\\FamilleController::delFamille'], ['id'], ['DELETE' => 0], null, false, true, null]],
        11977 => [[['_route' => 'addFournisseur', '_controller' => 'App\\Controller\\FournisseurController::add'], ['type'], ['POST' => 0], null, false, true, null]],
        12009 => [[['_route' => 'addPresta', '_controller' => 'App\\Controller\\FournisseurController::addPresta'], ['type'], ['POST' => 0], null, false, true, null]],
        12034 => [[['_route' => 'updatePrestataire', '_controller' => 'App\\Controller\\FournisseurController::updatePresta'], ['id'], ['POST' => 0], null, false, true, null]],
        12060 => [[['_route' => 'updateFournisseur', '_controller' => 'App\\Controller\\FournisseurController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        12082 => [[['_route' => 'delFourn', '_controller' => 'App\\Controller\\FournisseurController::delFour'], ['id'], ['DELETE' => 0], null, false, true, null]],
        12107 => [[['_route' => 'efournisseur', 'idfourn' => null, '_controller' => 'App\\Controller\\FournisseurController::index'], ['idfourn'], null, null, false, true, null]],
        12149 => [[['_route' => 'delfichier', '_controller' => 'App\\Controller\\GestionController::delFichier'], ['id'], ['DELETE' => 0], null, false, true, null]],
        12175 => [[['_route' => 'addfile', '_controller' => 'App\\Controller\\GestionController::addfile'], ['id'], ['POST' => 0], null, false, true, null]],
        12203 => [[['_route' => 'addfileTache', '_controller' => 'App\\Controller\\GestionController::addfileTache'], ['id'], ['POST' => 0], null, false, true, null]],
        12239 => [[['_route' => 'addfileChat', '_controller' => 'App\\Controller\\GestionController::addfileChat'], ['receiver', 'idtache'], ['POST' => 0], null, false, true, null]],
        12255 => [[['_route' => 'gestion', '_controller' => 'App\\Controller\\GestionController::index'], ['id'], null, null, false, true, null]],
        12284 => [[['_route' => 'gestcontact', '_controller' => 'App\\Controller\\GestionController::index'], ['idcontact', 'id'], null, null, false, true, null]],
        12313 => [[['_route' => 'editSection', '_controller' => 'App\\Controller\\GestionController::index'], ['idsection', 'id'], null, null, false, true, null]],
        12340 => [[['_route' => 'gesteditTache', '_controller' => 'App\\Controller\\GestionController::index'], ['idtache', 'id'], null, null, false, true, null]],
        12367 => [[['_route' => 'gestrecap', '_controller' => 'App\\Controller\\GestionController::index'], ['idrecap', 'id'], null, null, false, true, null]],
        12397 => [[['_route' => 'editPlanning', '_controller' => 'App\\Controller\\GestionController::index'], ['idplanning', 'id'], null, null, false, true, null]],
        12422 => [[['_route' => 'gestupload', '_controller' => 'App\\Controller\\GestionController::index'], ['id'], null, null, false, true, null]],
        12456 => [[['_route' => 'gesteam', '_controller' => 'App\\Controller\\GestionController::index'], ['idteam', 'id'], null, null, false, true, null]],
        12497 => [[['_route' => 'addGroupe', '_controller' => 'App\\Controller\\GroupeController::addGroupe'], ['id', 'type'], ['POST' => 0], null, false, true, null]],
        12540 => [[['_route' => 'updateGroupe', '_controller' => 'App\\Controller\\GroupeController::updateGroupe'], ['id', 'ids', 'type'], ['PUT' => 0], null, false, true, null]],
        12576 => [[['_route' => 'addIntervenant', '_controller' => 'App\\Controller\\IntervenantController::add'], ['id'], ['POST' => 0], null, false, true, null]],
        12608 => [[['_route' => 'addOper', '_controller' => 'App\\Controller\\IntervenantController::addoper'], ['id'], ['POST' => 0], null, false, true, null]],
        12630 => [[['_route' => 'updateOperIntervenant', '_controller' => 'App\\Controller\\IntervenantController::updateOper'], ['id'], ['PUT' => 0], null, false, true, null]],
        12653 => [[['_route' => 'updateIntervenant', '_controller' => 'App\\Controller\\IntervenantController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        12675 => [[['_route' => 'delIntervenant', '_controller' => 'App\\Controller\\IntervenantController::delInterve'], ['id'], ['DELETE' => 0], null, false, true, null]],
        12701 => [[['_route' => 'deldefInterve', '_controller' => 'App\\Controller\\IntervenantController::deldefon'], ['id'], ['DELETE' => 0], null, false, true, null]],
        12727 => [[['_route' => 'restaureInterve', '_controller' => 'App\\Controller\\IntervenantController::restaureInterve'], ['id'], ['GET' => 0], null, false, true, null]],
        12771 => [[['_route' => 'addligne', '_controller' => 'App\\Controller\\LigneController::addLigne'], ['type', 'id'], null, null, false, true, null]],
        12815 => [[['_route' => 'updaterligne', '_controller' => 'App\\Controller\\LigneController::updaterLigne'], ['a', 'b'], null, null, false, true, null]],
        12847 => [[['_route' => 'updaterlignee', '_controller' => 'App\\Controller\\LigneController::updatereLigne'], ['a', 'b'], null, null, false, true, null]],
        12867 => [[['_route' => 'updaterlignees', '_controller' => 'App\\Controller\\LigneController::updatereLignes'], ['id'], null, null, false, true, null]],
        12906 => [[['_route' => 'updateligne', '_controller' => 'App\\Controller\\LigneController::updateLigne'], ['type', 'idligne', 'id'], null, null, false, true, null]],
        12962 => [[['_route' => 'updateligneRemise', '_controller' => 'App\\Controller\\LigneController::updateLigner'], ['doc', 'type', 'idligne', 'id', 'val'], ['POST' => 0], null, false, true, null]],
        12988 => [[['_route' => 'searchLigne', '_controller' => 'App\\Controller\\LigneController::search'], ['id'], null, null, false, true, null]],
        13039 => [[['_route' => 'supgroupe', '_controller' => 'App\\Controller\\LigneController::deleteGroupe'], ['id', 'idchantier', 'idgroupe', 'type'], ['DELETE' => 0], null, false, true, null]],
        13075 => [[['_route' => 'choiligne', '_controller' => 'App\\Controller\\LigneController::choisir'], ['type', 'id'], ['POST' => 0], null, false, true, null]],
        13130 => [[['_route' => 'supligne', '_controller' => 'App\\Controller\\LigneController::deleteLigne'], ['id', 'idchantier', 'idligne', 'type'], null, null, false, true, null]],
        13184 => [[['_route' => 'dupligne', '_controller' => 'App\\Controller\\LigneController::dupliquerLigne'], ['id', 'idchantier', 'idligne', 'type'], null, null, false, true, null]],
        13222 => [[['_route' => 'addlign', '_controller' => 'App\\Controller\\LigneController::addLigne2'], ['iddevis', 'idarticle'], null, null, false, false, null]],
        13253 => [[['_route' => 'edclient', 'idclient' => null, '_controller' => 'App\\Controller\\ListeClientController::index'], ['idclient'], null, null, false, true, null]],
        13283 => [[['_route' => 'addLivraison', '_controller' => 'App\\Controller\\LivraisonController::addLivraison'], ['id'], ['POST' => 0], null, false, true, null]],
        13308 => [[['_route' => 'updateLivraison', '_controller' => 'App\\Controller\\LivraisonController::updateLivraison'], ['id'], ['PUT' => 0], null, false, true, null]],
        13334 => [[['_route' => 'validerlivraison', '_controller' => 'App\\Controller\\LivraisonController::validelivraison'], ['id'], ['GET' => 0], null, false, true, null]],
        13368 => [[['_route' => 'devaliderlivraison', '_controller' => 'App\\Controller\\LivraisonController::devalidelivraison'], ['id'], ['GET' => 0], null, false, true, null]],
        13391 => [[['_route' => 'delLivre', '_controller' => 'App\\Controller\\LivraisonController::delLivraison'], ['id'], ['DELETE' => 0], null, false, true, null]],
        13420 => [[['_route' => 'deldeflivre', '_controller' => 'App\\Controller\\LivraisonController::deldefLivre'], ['id'], ['DELETE' => 0], null, false, true, null]],
        13449 => [[['_route' => 'duplivraison', '_controller' => 'App\\Controller\\LivraisonController::duplivraison'], ['id'], ['POST' => 0], null, false, true, null]],
        13484 => [[['_route' => 'statusLivre', '_controller' => 'App\\Controller\\LivraisonController::statusLivre'], ['id', 'status'], ['GET' => 0], null, false, true, null]],
        13512 => [[['_route' => 'restaureLivre', '_controller' => 'App\\Controller\\LivraisonController::restaureLivre'], ['id'], ['GET' => 0], null, false, true, null]],
        13527 => [[['_route' => 'editlivraison', '_controller' => 'App\\Controller\\LivraisonController::livraison'], ['id'], ['GET' => 0], null, false, true, null]],
        13560 => [[['_route' => 'editlignelivre', '_controller' => 'App\\Controller\\LivraisonController::livraison'], ['id', 'idligne'], null, null, false, true, null]],
        13605 => [[['_route' => 'updateMateriel', '_controller' => 'App\\Controller\\MaterielController::updateMateriel'], ['id'], ['PUT' => 0], null, false, true, null]],
        13639 => [[['_route' => 'updateBenef', '_controller' => 'App\\Controller\\MaterielController::updateBenef'], ['id'], ['PUT' => 0], null, false, true, null]],
        13658 => [[['_route' => 'delBenef', '_controller' => 'App\\Controller\\MaterielController::delBenef'], ['id'], ['DELETE' => 0], null, false, true, null]],
        13678 => [[['_route' => 'delMateriel', '_controller' => 'App\\Controller\\MaterielController::delMateriel'], ['id'], ['DELETE' => 0], null, false, true, null]],
        13709 => [[['_route' => 'delfournisseur', '_controller' => 'App\\Controller\\MaterielController::delFour'], ['id'], ['DELETE' => 0], null, false, true, null]],
        13734 => [[['_route' => 'editmateriel', 'id' => null, '_controller' => 'App\\Controller\\MaterielController::index'], ['id'], null, null, false, true, null]],
        13774 => [[['_route' => 'editBenef', 'idbenef' => null, '_controller' => 'App\\Controller\\MaterielController::index'], ['idbenef'], null, null, false, true, null]],
        13808 => [[['_route' => 'editerfamille', 'idfamille' => null, '_controller' => 'App\\Controller\\MaterielController::index'], ['idfamille'], null, null, false, true, null]],
        13842 => [[['_route' => 'editerfourn', 'idfourn' => null, '_controller' => 'App\\Controller\\MaterielController::index'], ['idfourn'], null, null, false, true, null]],
        13889 => [[['_route' => 'addMessage', '_controller' => 'App\\Controller\\MessageController::getMessagee'], ['id', 'contenu'], ['POST' => 0], null, false, true, null]],
        13946 => [[['_route' => 'apercu', 'id' => null, 'type' => null, 'idmessage' => null, '_controller' => 'App\\Controller\\MessageController::index'], ['id', 'type', 'idmessage'], null, null, false, true, null]],
        13974 => [[['_route' => 'getMessageTache', '_controller' => 'App\\Controller\\MessageController::getMessageTache'], ['id'], ['GET' => 0], null, false, true, null]],
        13996 => [[['_route' => 'delMessage', '_controller' => 'App\\Controller\\MessageController::delMes'], ['idmess'], ['DELETE' => 0], null, false, true, null]],
        14024 => [[['_route' => 'editmessage', 'idmessage' => null, '_controller' => 'App\\Controller\\MessageController::index'], ['idmessage'], null, null, false, true, null]],
        14066 => [[['_route' => 'edichantiers', 'id' => null, '_controller' => 'App\\Controller\\PageChantiersController::pagechantiers'], ['id'], null, null, false, true, null]],
        14114 => [[['_route' => 'updJournalier', '_controller' => 'App\\Controller\\PaieController::updJournaliers'], ['id'], ['PUT' => 0], null, false, true, null]],
        14136 => [[['_route' => 'delJournalier', '_controller' => 'App\\Controller\\PaieController::delJournaliers'], ['id'], ['DELETE' => 0], null, false, true, null]],
        14161 => [[['_route' => 'editjournalier', 'idjournas' => null, '_controller' => 'App\\Controller\\PaieController::index'], ['idjournas'], null, null, false, true, null]],
        14199 => [[['_route' => 'updFichePaie', '_controller' => 'App\\Controller\\PaieController::updFichePaie'], ['id'], ['PUT' => 0], null, false, true, null]],
        14221 => [[['_route' => 'delFiche', '_controller' => 'App\\Controller\\PaieController::delFiche'], ['id'], ['DELETE' => 0], null, false, true, null]],
        14246 => [[['_route' => 'editfiche', 'idfiche' => null, '_controller' => 'App\\Controller\\PaieController::index'], ['idfiche'], null, null, false, true, null]],
        14289 => [[['_route' => 'updSouscompte', '_controller' => 'App\\Controller\\ParametreController::updsouscompte'], ['id'], ['PUT' => 0], null, false, true, null]],
        14320 => [[['_route' => 'addDroitUser', '_controller' => 'App\\Controller\\ParametreController::addDroitcompte'], ['id'], ['POST' => 0], null, false, true, null]],
        14360 => [[['_route' => 'delpicture', '_controller' => 'App\\Controller\\ParametreController::delpicture'], ['id', 'iduser', 'position'], null, null, false, true, null]],
        14386 => [[['_route' => 'deluseus', 'id' => null, '_controller' => 'App\\Controller\\ParametreController::deluser'], ['id'], null, null, false, true, null]],
        14403 => [[['_route' => 'choimetier', '_controller' => 'App\\Controller\\ParametreController::choisirMetier'], ['choi'], null, null, false, true, null]],
        14434 => [[['_route' => 'editsouscompte', 'id' => null, '_controller' => 'App\\Controller\\ParametreController::parametre'], ['id'], null, null, false, true, null]],
        14460 => [[['_route' => 'droitcompte', 'idcompte' => null, '_controller' => 'App\\Controller\\ParametreController::parametre'], ['idcompte'], null, null, false, true, null]],
        14504 => [[['_route' => 'addPersoUser', '_controller' => 'App\\Controller\\PersonnelController::addPersoUser'], ['id'], ['POST' => 0], null, false, true, null]],
        14528 => [[['_route' => 'addTeam', '_controller' => 'App\\Controller\\PersonnelController::addTeam'], ['id'], ['POST' => 0], null, false, true, null]],
        14550 => [[['_route' => 'updatePersonnel', '_controller' => 'App\\Controller\\PersonnelController::updatePersonnel'], ['idperson'], ['POST' => 0], null, false, true, null]],
        14583 => [[['_route' => 'updateService', '_controller' => 'App\\Controller\\PersonnelController::updateService'], ['id'], ['POST' => 0], null, false, true, null]],
        14602 => [[['_route' => 'delService', '_controller' => 'App\\Controller\\PersonnelController::delService'], ['id'], ['DELETE' => 0], null, false, true, null]],
        14635 => [[['_route' => 'updatePersonnelOperation', '_controller' => 'App\\Controller\\PersonnelController::updateOperationPersonnel'], ['idperson'], ['POST' => 0], null, false, true, null]],
        14667 => [[['_route' => 'upSuperviseur', '_controller' => 'App\\Controller\\PersonnelController::updateSuperviseur'], ['idchantier', 'idsup'], null, null, false, true, null]],
        14686 => [[['_route' => 'delPerson', '_controller' => 'App\\Controller\\PersonnelController::delPersonn'], ['id'], ['DELETE' => 0], null, false, true, null]],
        14721 => [[['_route' => 'editper', 'idperson' => null, '_controller' => 'App\\Controller\\PersonnelController::index'], ['idperson'], null, null, false, true, null]],
        14752 => [[['_route' => 'editser', 'idservice' => null, '_controller' => 'App\\Controller\\PersonnelController::index'], ['idservice'], null, null, false, true, null]],
        14797 => [[['_route' => 'getEquipePlann', '_controller' => 'App\\Controller\\PlanningController::getEquipePlann'], ['id'], ['GET' => 0], null, false, true, null]],
        14822 => [[['_route' => 'updEquipePlann', '_controller' => 'App\\Controller\\PlanningController::updEquipePlann'], ['id'], ['POST' => 0], null, false, true, null]],
        14844 => [[['_route' => 'delEquipe', '_controller' => 'App\\Controller\\PlanningController::delEquipe'], ['id'], ['DELETE' => 0], null, false, true, null]],
        14873 => [[['_route' => 'searchPlannings', '_controller' => 'App\\Controller\\PlanningController::searchPlannings'], ['val'], ['GET' => 0], null, false, true, null]],
        14904 => [[['_route' => 'geteSection', '_controller' => 'App\\Controller\\PlanningController::getSection'], ['idsec'], ['GET' => 0], null, false, true, null]],
        14933 => [[['_route' => 'updaSection', '_controller' => 'App\\Controller\\PlanningController::updaSection'], ['id'], ['PUT' => 0], null, false, true, null]],
        14952 => [[['_route' => 'updSection', '_controller' => 'App\\Controller\\PlanningController::updSection'], ['id'], ['PUT' => 0], null, false, true, null]],
        14986 => [[['_route' => 'ordresection', '_controller' => 'App\\Controller\\PlanningController::ordresection'], ['id', 'val'], ['POST' => 0], null, false, true, null]],
        15005 => [[['_route' => 'addSection', '_controller' => 'App\\Controller\\PlanningController::addSection'], ['id'], ['POST' => 0], null, false, true, null]],
        15024 => [[['_route' => 'delSection', '_controller' => 'App\\Controller\\PlanningController::delSection'], ['id'], null, null, false, true, null]],
        15048 => [[['_route' => 'getPlannings', '_controller' => 'App\\Controller\\PlanningController::getPlannings'], ['id'], ['GET' => 0], null, false, true, null]],
        15079 => [[['_route' => 'geteTache', '_controller' => 'App\\Controller\\PlanningController::getTache'], ['id'], ['GET' => 0], null, false, true, null]],
        15098 => [[['_route' => 'addTacher', '_controller' => 'App\\Controller\\PlanningController::addTache'], ['id'], ['POST' => 0], null, false, true, null]],
        15131 => [[['_route' => 'ordreache', '_controller' => 'App\\Controller\\PlanningController::ordreTache'], ['id', 'val'], ['POST' => 0], null, false, true, null]],
        15156 => [[['_route' => 'deltacher', '_controller' => 'App\\Controller\\PlanningController::delTacher'], ['id'], ['DELETE' => 0], null, false, true, null]],
        15172 => [[['_route' => 'delta', '_controller' => 'App\\Controller\\PlanningController::delTa'], ['id'], null, null, false, true, null]],
        15198 => [[['_route' => 'updateTacher', '_controller' => 'App\\Controller\\PlanningController::updTache'], ['id'], ['POST' => 0], null, false, true, null]],
        15230 => [[['_route' => 'getChantierSection', '_controller' => 'App\\Controller\\PlanningController::getChantierBySection'], ['id'], ['GET' => 0], null, false, true, null]],
        15249 => [[['_route' => 'addPlanning', '_controller' => 'App\\Controller\\PlanningController::addPlanning'], ['id'], ['POST' => 0], null, false, true, null]],
        15274 => [[['_route' => 'updatePlanning', '_controller' => 'App\\Controller\\PlanningController::updatePlanning'], ['id'], ['PUT' => 0], null, false, true, null]],
        15291 => [[['_route' => 'updaterPlanning', '_controller' => 'App\\Controller\\PlanningController::updaterPlanning'], ['id'], ['PUT' => 0], null, false, true, null]],
        15325 => [[['_route' => 'ordreplanning', '_controller' => 'App\\Controller\\PlanningController::ordreplaning'], ['id', 'val'], ['POST' => 0], null, false, true, null]],
        15355 => [[['_route' => 'delePlanning', '_controller' => 'App\\Controller\\PlanningController::delPlanning'], ['id'], ['DELETE' => 0], null, false, true, null]],
        15395 => [[['_route' => 'epresta', 'idpresta' => null, '_controller' => 'App\\Controller\\PrestataireController::index'], ['idpresta'], null, null, false, true, null]],
        15436 => [[['_route' => 'editprevision', 'id' => null, 'idchantier' => null, '_controller' => 'App\\Controller\\PrevisionController::index'], ['id', 'idchantier'], ['GET' => 0], null, false, true, null]],
        15494 => [[['_route' => 'editligneprevision', 'id' => null, 'idligne' => null, 'idchantier' => null, '_controller' => 'App\\Controller\\PrevisionController::index'], ['id', 'idchantier', 'idligne'], null, null, false, true, null]],
        15539 => [[['_route' => 'getTodo', '_controller' => 'App\\Controller\\PageController::getTodo'], ['id'], ['GET' => 0], null, false, true, null]],
        15561 => [[['_route' => 'updateTodo', '_controller' => 'App\\Controller\\PageController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        15583 => [[['_route' => 'delTodo', '_controller' => 'App\\Controller\\PageController::delTodo'], ['id'], ['DELETE' => 0], null, false, true, null]],
        15605 => [[['_route' => 'editTodo', 'idtodo' => null, '_controller' => 'App\\Controller\\PageController::page'], ['idtodo'], null, null, false, true, null]],
        15652 => [[['_route' => 'deleteChats', '_controller' => 'App\\Controller\\PageController::delChats'], ['id', 'idto'], ['DELETE' => 0], null, false, true, null]],
        15671 => [[['_route' => 'getChats', '_controller' => 'App\\Controller\\PageController::getChats'], ['id'], ['GET' => 0], null, false, true, null]],
        15710 => [[['_route' => 'addchat', '_controller' => 'App\\Controller\\PageController::addChatAgenda'], ['mess', 'todoid', 'recid'], ['POST' => 0], null, false, true, null]],
        15746 => [[['_route' => 'addchatpasagenda', '_controller' => 'App\\Controller\\PageController::addChat'], ['recid', 'idtache', 'idreply'], ['POST' => 0], null, false, true, null]],
        15774 => [[['_route' => 'editechantierST', 'idchantier' => null, '_controller' => 'App\\Controller\\PageController::page'], ['idchantier'], null, null, false, true, null]],
        15801 => [[['_route' => 'editclientST', 'idclient' => null, '_controller' => 'App\\Controller\\PageController::page'], ['idclient'], null, null, false, true, null]],
        15828 => [[['_route' => 'editerContactST', 'idcontact' => null, '_controller' => 'App\\Controller\\PageController::page'], ['idcontact'], null, null, false, true, null]],
        15865 => [[['_route' => 'editsouschantier', 'id' => null, '_controller' => 'App\\Controller\\SousChantierController::chancours'], ['id'], null, null, false, true, null]],
        15901 => [[['_route' => 'updateSousFamille', '_controller' => 'App\\Controller\\SousFamilleController::updateSousFamille'], ['id'], ['POST' => 0], null, false, true, null]],
        15923 => [[['_route' => 'delSousFamille', '_controller' => 'App\\Controller\\SousFamilleController::delSous'], ['id'], ['DELETE' => 0], null, false, true, null]],
        15953 => [[['_route' => 'editsuivi', 'idsuivi' => null, '_controller' => 'App\\Controller\\SuiviController::index'], ['idsuivi'], null, null, false, true, null]],
        15984 => [[['_route' => 'editcamion', 'idcamion' => null, '_controller' => 'App\\Controller\\SuiviController::index'], ['idcamion'], null, null, false, true, null]],
        16013 => [[['_route' => 'editchauffeur', 'idchauffeur' => null, '_controller' => 'App\\Controller\\SuiviController::index'], ['idchauffeur'], null, null, false, true, null]],
        16062 => [[['_route' => 'chchansuivi', 'id' => null, '_controller' => 'App\\Controller\\RapportchantierController::index'], ['id'], null, null, false, true, null]],
        16105 => [[['_route' => 'delAlerto', '_controller' => 'App\\Controller\\StartController::delAlerte'], ['id'], ['POST' => 0], null, false, true, null]],
        16136 => [[['_route' => 'getChana', '_controller' => 'App\\Controller\\StartController::getChana'], ['a'], ['POST' => 0], null, false, true, null]],
        16164 => [[['_route' => 'getchatBesoins', '_controller' => 'App\\Controller\\StartController::chatterBesoins'], ['idbesoin'], ['POST' => 0], null, false, true, null]],
        16203 => [[['_route' => 'delExercices', '_controller' => 'App\\Controller\\StartController::delExercices'], ['id'], ['DELETE' => 0], null, false, true, null]],
        16222 => [[['_route' => 'updExercices', '_controller' => 'App\\Controller\\StartController::updExercices'], ['id'], ['POST' => 0], null, false, true, null]],
        16243 => [[['_route' => 'editexercices', '_controller' => 'App\\Controller\\StartController::page'], ['idexer'], null, null, false, true, null]],
        16262 => [[['_route' => 'editexercicestab', '_controller' => 'App\\Controller\\StartController::page'], ['idexer', 'tab'], null, null, false, true, null]],
        16297 => [[['_route' => 'updBesoins', '_controller' => 'App\\Controller\\StartController::updBesoins'], ['idbesoin'], ['POST' => 0], null, false, true, null]],
        16329 => [[['_route' => 'chatBesoins', '_controller' => 'App\\Controller\\StartController::chatBesoins'], ['idbesoin', 'message'], ['POST' => 0], null, false, true, null]],
        16352 => [[['_route' => 'cloturerBesoins', '_controller' => 'App\\Controller\\StartController::cloturerBesoins'], ['idbesoin'], ['POST' => 0], null, false, true, null]],
        16372 => [[['_route' => 'delBesoins', '_controller' => 'App\\Controller\\StartController::delBesoins'], ['idbesoin'], ['DELETE' => 0], null, false, true, null]],
        16396 => [[['_route' => 'archiverBesoins', '_controller' => 'App\\Controller\\StartController::archiverBesoins'], ['idbesoin'], ['POST' => 0], null, false, true, null]],
        16420 => [[['_route' => 'relancerBesoins', '_controller' => 'App\\Controller\\StartController::relancerBesoins'], ['idbesoin'], ['POST' => 0], null, false, true, null]],
        16437 => [[['_route' => 'editbesoin', '_controller' => 'App\\Controller\\StartController::page'], ['idbeso'], null, null, false, true, null]],
        16464 => [[['_route' => 'tableaudebord', '_controller' => 'App\\Controller\\StartController::page'], ['tab'], null, null, false, true, null]],
        16504 => [[['_route' => 'listerbesoin', '_controller' => 'App\\Controller\\StartController::page'], ['beso', 'tab'], null, null, false, true, null]],
        16539 => [[['_route' => 'tache', '_controller' => 'App\\Controller\\TacheController::tache'], ['id'], ['GET' => 0], null, false, true, null]],
        16563 => [[['_route' => 'patache', 'id' => null, '_controller' => 'App\\Controller\\TacheController::index'], ['id'], null, null, false, true, null]],
        16599 => [[['_route' => 'techchantier', 'idchantier' => null, '_controller' => 'App\\Controller\\TechniqueController::chantier'], ['idchantier'], null, null, false, true, null]],
        16636 => [[['_route' => 'techclient', 'idclient' => null, '_controller' => 'App\\Controller\\TechniqueController::chantier'], ['idclient'], null, null, false, true, null]],
        16666 => [[['_route' => 'techcontact', 'idcontact' => null, '_controller' => 'App\\Controller\\TechniqueController::chantier'], ['idcontact'], null, null, false, true, null]],
        16703 => [[['_route' => 'techperson', 'idperson' => null, '_controller' => 'App\\Controller\\TechniqueController::chantier'], ['idperson'], null, null, false, true, null]],
        16734 => [[['_route' => 'peditPlanning', 'idplanning' => null, '_controller' => 'App\\Controller\\TechniqueController::chantier'], ['idplanning'], null, null, false, true, null]],
        16766 => [[['_route' => 'peditSection', 'idsection' => null, '_controller' => 'App\\Controller\\TechniqueController::chantier'], ['idsection'], null, null, false, true, null]],
        16795 => [[['_route' => 'pgesteditTache', 'idtache' => null, '_controller' => 'App\\Controller\\TechniqueController::chantier'], ['idtache'], null, null, false, true, null]],
        16836 => [[['_route' => 'bilantresor', 'an' => null, '_controller' => 'App\\Controller\\TresorerieController::index'], ['an'], null, null, false, true, null]],
        16874 => [[['_route' => 'catalogue', '_controller' => 'App\\Controller\\CatalogueController::index'], ['metier', 'idpays'], null, null, false, true, null]],
        16907 => [[['_route' => 'pub', 'id' => null, '_controller' => 'App\\Controller\\ContentController::index'], ['id'], null, null, false, true, null]],
        16926 => [[['_route' => 'search', '_controller' => 'App\\Controller\\ContentController::search'], ['rech'], null, null, false, true, null]],
        16968 => [[['_route' => 'addarticle', 'id' => null, '_controller' => 'App\\Controller\\PartageController::addarticle'], ['id'], ['GET' => 0], null, false, true, null]],
        16989 => [[['_route' => 'partage', '_controller' => 'App\\Controller\\PartageController::partager'], ['metier', 'idpays'], ['GET' => 0], null, false, true, null]],
        17072 => [[['_route' => 'app_user_add', '_controller' => 'App\\Controller\\RegistrationController::registerapi'], ['nom', 'prenoms', 'password', 'username', 'idpays', 'societe', 'contact'], null, null, false, true, null]],
        17102 => [
            [['_route' => 'reset_pass', '_controller' => 'App\\Controller\\RegistrationController::resetPass'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
