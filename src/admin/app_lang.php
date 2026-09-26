<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'Komponenter';
$lang['admin_content'] = 'Innehåll';
$lang['admin_database_backup'] = 'Databas-säkerhetskopior';
$lang['admin_extensions'] = 'Tillägg';
$lang['admin_firewall'] = 'Brandvägg';
$lang['admin_help'] = 'Hjälp';
$lang['admin_languages'] = 'Språk';
$lang['admin_logs'] = 'Systemloggar';
$lang['admin_media'] = 'Mediebibliotek';
$lang['admin_modules'] = 'Moduler';
$lang['admin_plugins'] = 'Plugins';
$lang['admin_reports'] = 'Aktivitetslogg';
$lang['admin_settings'] = 'Systeminställningar';
$lang['admin_sysinfo'] = 'Systeminformation';
$lang['admin_system'] = 'System';
$lang['admin_system_firewall'] = 'Systembrandvägg';
$lang['admin_themes'] = 'Teman';
$lang['admin_updates'] = 'Systemuppdateringar';
$lang['admin_users'] = 'Användare';
$lang['admin_view_site'] = 'Visa webbplats';
$lang['per_page'] = 'Per sida';

// Generic Messages
$lang['admin_footer_thankyou'] = 'Tack för att du skapar med <a href="%s" target="_blank">%s</a>.';
$lang['admin_items_active_count'] = '=0{Inga aktiva objekt.} other{<b>#</b> av <b>%s</b> objekt är aktiva.}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install_error_com'] = 'Installationen misslyckades: %s';
$lang['admin_install_location_app'] = 'Endast denna applikation';
$lang['admin_install_location_core'] = 'Alla applikationer';
$lang['admin_install_location_select'] = '&#151; Välj plats &#151;';
$lang['admin_install_update_confirm'] = 'Är du säker på att du vill uppdatera detta paket?';
$lang['admin_install_update_error'] = 'Det gick inte att uppdatera paketet.';
$lang['admin_install_update_skip_confirm'] = 'Är du säker på att du vill hoppa över denna uppdatering?';
$lang['admin_install_update_skip_error'] = 'Det gick inte att hoppa över denna uppdatering.';
$lang['admin_install_update_skip_success'] = 'Uppdateringen hoppades över.';
$lang['admin_install_update_success'] = 'Paketet uppdaterades.';
$lang['admin_install_upload_tip'] = 'Installera ett paket genom att ladda upp dess <b>.zip</b>-fil här.';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'Kunde inte rensa gamla säkerhetskopiefiler.';
$lang['admin_database_backup_clean_success'] = '%d säkerhetskopiefiler borttagna. %d diskutrymme frigjort.';
$lang['admin_database_backup_create'] = 'Skapa säkerhetskopia';
$lang['admin_database_backup_create_confirm'] = 'Är du säker på att du vill skapa en säkerhetskopia nu?';
$lang['admin_database_backup_create_error'] = 'Kunde inte skapa säkerhetskopiafil. Se till att mappen <b>%s</b> är skrivbar.';
$lang['admin_database_backup_create_success'] = 'Databassäkerhetskopiafil <b>%s</b> skapades framgångsrikt.';
$lang['admin_database_backup_delete_confirm'] = 'Är du säker på att du vill ta bort dessa säkerhetskopiefiler?';
$lang['admin_database_backup_delete_error'] = 'Kunde inte ta bort valda säkerhetskopiefiler.';
$lang['admin_database_backup_delete_success'] = 'Säkerhetskopiefiler togs bort framgångsrikt.';
$lang['admin_database_backup_download_error'] = 'Kunde inte ladda ner vald säkerhetskopiafil.';
$lang['admin_database_backup_download_success'] = 'Säkerhetskopiafil laddades ner framgångsrikt.';
$lang['admin_database_backup_lock_confirm'] = 'Är du säker på att du vill låsa dessa säkerhetskopiefiler?';
$lang['admin_database_backup_lock_error'] = 'Kunde inte låsa valda säkerhetskopiefiler.';
$lang['admin_database_backup_lock_success'] = 'Säkerhetskopiefiler låstes framgångsrikt.';
$lang['admin_database_backup_locked_error'] = 'Kunde inte ta bort låsta säkerhetskopiefiler.';
$lang['admin_database_backup_missing_error'] = 'Säkerhetskopiafilen kunde inte hittas.';
$lang['admin_database_backup_unlock_confirm'] = 'Är du säker på att du vill låsa upp dessa säkerhetskopiefiler?';
$lang['admin_database_backup_unlock_error'] = 'Kunde inte låsa upp valda säkerhetskopiefiler.';
$lang['admin_database_backup_unlock_success'] = 'Säkerhetskopiefiler låstes upp framgångsrikt.';
$lang['admin_database_prune'] = 'Rensa';
$lang['admin_database_prune_confirm'] = 'Är du säker på att du vill rensa databasen? En säkerhetskopia kommer att skapas innan körning.';
$lang['admin_database_prune_error'] = 'Kunde inte rensa databasen.';
$lang['admin_database_prune_next'] = 'Nästa rensning: <b>%s</b>';
$lang['admin_database_prune_success'] = 'Databasen rensades framgångsrikt.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'Ta bort loggar';
$lang['admin_logs_delete_confirm'] = 'Är du säker på att du vill ta bort valda loggfiler?';
$lang['admin_logs_delete_error'] = 'Kunde inte ta bort loggfiler.';
$lang['admin_logs_delete_success'] = 'Loggfiler togs bort framgångsrikt.';
$lang['admin_logs_error_disabled'] = 'Loggning är för närvarande inte aktiverad.';
$lang['admin_logs_error_empty'] = 'Inga loggar hittades.';
$lang['admin_logs_error_missing'] = 'Antingen kunde loggfilen inte hittas, eller så var den tom.';
$lang['admin_logs_tip'] = 'Loggning kan snabbt skapa mycket stora filer. För live-webbplatser, överväg att ta bort gamla.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'Är du säker på att du vill ta bort valda e-postmeddelanden?';
$lang['admin_emails_delete_error'] = 'Kunde inte ta bort valda e-postmeddelanden.';
$lang['admin_emails_delete_success'] = 'Valda e-postmeddelanden togs bort framgångsrikt.';
$lang['admin_emails_email_from'] = 'Skickat från';
$lang['admin_emails_mail_queue'] = 'E-postkö';
$lang['admin_emails_mailer'] = 'Massutskick';
$lang['admin_emails_search'] = 'Sök e-postmeddelanden efter ämne eller innehåll...';
$lang['admin_emails_send_error'] = 'Misslyckades att köa e-post. Vänligen försök igen.';
$lang['admin_emails_send_none'] = 'Inga användare matchar dina valda kriterier.';
$lang['admin_emails_send_success'] = 'E-postmeddelandet har köats och kommer att skickas inom kort.';
$lang['admin_emails_send_to_banned'] = 'Skicka till bannlysta användare.';
$lang['admin_emails_send_to_deleted'] = 'Skicka till borttagna användare.';
$lang['admin_emails_send_to_disabled'] = 'Skicka till inaktiva användare.';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'Lägg till användare';
$lang['admin_users_all_users'] = 'Alla användare';
$lang['admin_users_ban_confirm'] = 'Är du säker på att du vill stänga av valda användare?';
$lang['admin_users_ban_error'] = 'Kan inte stänga av valda användare.';
$lang['admin_users_ban_success'] = 'Valda användare har stängts av.';
$lang['admin_users_delete_confirm'] = 'Är du säker på att du vill radera valda användare?';
$lang['admin_users_delete_error'] = 'Kan inte radera valda användare.';
$lang['admin_users_delete_success'] = 'Valda användare har raderats.';
$lang['admin_users_disable_confirm'] = 'Är du säker på att du vill inaktivera valda användare?';
$lang['admin_users_disable_error'] = 'Kan inte inaktivera valda användare.';
$lang['admin_users_disable_success'] = 'Valda användare har inaktiverats.';
$lang['admin_users_edit'] = 'Redigera användare';
$lang['admin_users_edit_error'] = 'Kunde inte uppdatera användare.';
$lang['admin_users_edit_success'] = 'Användare uppdaterades framgångsrikt.';
$lang['admin_users_enable_confirm'] = 'Är du säker på att du vill aktivera valda användare?';
$lang['admin_users_enable_error'] = 'Kan inte aktivera valda användare.';
$lang['admin_users_enable_success'] = 'Valda användare har aktiverats.';
$lang['admin_users_groups'] = 'Grupper';
$lang['admin_users_lock_confirm'] = 'Är du säker på att du vill låsa valda användare?';
$lang['admin_users_lock_error'] = 'Kunde inte låsa valda användare.';
$lang['admin_users_lock_success'] = 'Valda användare låstes framgångsrikt.';
$lang['admin_users_logged'] = 'Inloggade användare';
$lang['admin_users_manage'] = 'Hantera användare';
$lang['admin_users_remove_confirm'] = 'Är du säker på att du vill radera valda användare och all deras data permanent?';
$lang['admin_users_remove_error'] = 'Kan inte radera valda användare och all deras data permanent.';
$lang['admin_users_remove_success'] = 'Valda användare och all deras data har raderats.';
$lang['admin_users_restore_confirm'] = 'Är du säker på att du vill återställa valda användare?';
$lang['admin_users_restore_error'] = 'Kan inte återställa valda användare.';
$lang['admin_users_restore_success'] = 'Valda användare har återställts.';
$lang['admin_users_search'] = 'Sök efter namn, användarnamn eller e-post...';
$lang['admin_users_unban_confirm'] = 'Är du säker på att du vill häva avstängningen av valda användare?';
$lang['admin_users_unban_error'] = 'Kan inte häva avstängningen av valda användare.';
$lang['admin_users_unban_success'] = 'Avstängningen av valda användare har hävs.';
$lang['admin_users_unlock_confirm'] = 'Är du säker på att du vill låsa upp valda användare?';
$lang['admin_users_unlock_error'] = 'Kunde inte låsa upp valda användare.';
$lang['admin_users_unlock_success'] = 'Valda användare låstes upp framgångsrikt.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'Rensa loggar';
$lang['admin_reports_clear_confirm'] = 'Är du säker på att du vill rensa åtgärdsloggen?';
$lang['admin_reports_clear_error'] = 'Kunde inte rensa åtgärdsloggen.';
$lang['admin_reports_clear_success'] = 'Åtgärdslogg rensades framgångsrikt.';
$lang['admin_reports_latest_actions'] = 'Senaste åtgärder';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'Är du säker på att du vill ta bort valda filer?';
$lang['admin_media_delete_error'] = 'Kunde inte ta bort filer.';
$lang['admin_media_delete_success'] = 'Filer togs bort framgångsrikt.';
$lang['admin_media_file_delete_error'] = 'Kunde inte ta bort fil.';
$lang['admin_media_file_delete_success'] = 'Fil togs bort framgångsrikt.';
$lang['admin_media_file_update_error'] = 'Kunde inte uppdatera fil.';
$lang['admin_media_file_update_success'] = 'Fil uppdaterades framgångsrikt.';
$lang['admin_media_search'] = 'Sök efter namn, beskrivning eller filnamn...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{Inga aktiva moduler.} other{<b>#</b> av <b>%s</b> moduler är aktiva.}';
$lang['admin_modules_add'] = 'Lägg till modul';
$lang['admin_modules_delete_confirm'] = 'Är du säker på att du vill ta bort modulen: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'Kunde inte ta bort modulen.';
$lang['admin_modules_delete_error_active'] = 'Aktiva moduler kan inte tas bort.';
$lang['admin_modules_delete_success'] = 'Modul togs bort framgångsrikt.';
$lang['admin_modules_disable_all_confirm'] = 'Är du säker på att du vill inaktivera alla moduler?';
$lang['admin_modules_disable_all_error'] = 'Kunde inte inaktivera alla moduler.';
$lang['admin_modules_disable_all_success'] = 'Alla moduler inaktiverades framgångsrikt.';
$lang['admin_modules_disable_confirm'] = 'Är du säker på att du vill inaktivera modulen: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'Kunde inte inaktivera modulen.';
$lang['admin_modules_disable_success'] = 'Modul inaktiverades framgångsrikt.';
$lang['admin_modules_enable_all_confirm'] = 'Är du säker på att du vill aktivera alla moduler?';
$lang['admin_modules_enable_all_error'] = 'Kunde inte aktivera alla moduler.';
$lang['admin_modules_enable_all_success'] = 'Alla moduler aktiverades framgångsrikt.';
$lang['admin_modules_enable_confirm'] = 'Är du säker på att du vill aktivera modulen: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'Kunde inte aktivera modulen.';
$lang['admin_modules_enable_success'] = 'Modul aktiverades framgångsrikt.';
$lang['admin_modules_global'] = 'Global modul (delad)';
$lang['admin_modules_install_confirm'] = 'Är du säker på att du vill installera modulen: <b>%s</b>?';
$lang['admin_modules_install_error'] = 'Det gick inte att installera modulen.';
$lang['admin_modules_install_success'] = 'Modulen installerades.';
$lang['admin_modules_install_tip'] = 'Moduler lägger till nya funktioner och funktionalitet till din webbplats. Bläddra bland tillgängliga moduler i <a href="%s" target="_blank" rel="noopener">modulkatalogen</a> eller ladda upp en som ett <b>.zip</b>-paket.';
$lang['admin_modules_update_confirm'] = 'Är du säker på att du vill uppdatera denna modul?';
$lang['admin_modules_update_error'] = 'Det gick inte att uppdatera modulen.';
$lang['admin_modules_update_success'] = 'Modulen uppdaterades.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{Inga aktiva plugins.} other{<b>#</b> av <b>%s</b> plugins är aktiva.}';
$lang['admin_plugins_add'] = 'Lägg till plugin';
$lang['admin_plugins_delete_confirm'] = 'Är du säker på att du vill ta bort pluginet: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = 'Kunde inte ta bort pluginet.';
$lang['admin_plugins_delete_error_active'] = 'Aktiva tillägg kan inte tas bort.';
$lang['admin_plugins_delete_success'] = 'Plugin togs bort framgångsrikt.';
$lang['admin_plugins_disable_all_confirm'] = 'Är du säker på att du vill inaktivera alla plugins?';
$lang['admin_plugins_disable_all_error'] = 'Kunde inte inaktivera alla plugins.';
$lang['admin_plugins_disable_all_success'] = 'Alla plugins inaktiverades framgångsrikt.';
$lang['admin_plugins_disable_confirm'] = 'Är du säker på att du vill inaktivera pluginet: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'Kunde inte inaktivera pluginet.';
$lang['admin_plugins_disable_success'] = 'Plugin inaktiverades framgångsrikt.';
$lang['admin_plugins_enable_all_confirm'] = 'Är du säker på att du vill aktivera alla plugins?';
$lang['admin_plugins_enable_all_error'] = 'Kunde inte aktivera alla plugins.';
$lang['admin_plugins_enable_all_success'] = 'Alla plugins aktiverades framgångsrikt.';
$lang['admin_plugins_enable_confirm'] = 'Är du säker på att du vill aktivera pluginet: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'Kunde inte aktivera pluginet.';
$lang['admin_plugins_enable_success'] = 'Plugin aktiverades framgångsrikt.';
$lang['admin_plugins_global'] = 'Globalt tillägg (delat)';
$lang['admin_plugins_install_confirm'] = 'Är du säker på att du vill installera tillägget: <b>%s</b>?';
$lang['admin_plugins_install_error'] = 'Det gick inte att installera tillägget.';
$lang['admin_plugins_install_success'] = 'Tillägget installerades.';
$lang['admin_plugins_install_tip'] = 'Plugins lägger till nya funktioner och funktionalitet till din webbplats. Bläddra bland tillgängliga plugins i <a href="%s" target="_blank" rel="noopener">pluginkatalogen</a> eller ladda upp en som ett <b>.zip</b>-paket.';
$lang['admin_plugins_update_confirm'] = 'Är du säker på att du vill uppdatera detta tillägg?';
$lang['admin_plugins_update_error'] = 'Det gick inte att uppdatera tillägget.';
$lang['admin_plugins_update_success'] = 'Tillägget uppdaterades.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'Lägg till tema';
$lang['admin_themes_delete_confirm'] = 'Är du säker på att du vill ta bort temat: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'Kunde inte ta bort tema.';
$lang['admin_themes_delete_error_active'] = 'Du kan inte ta bort det aktiva temat.';
$lang['admin_themes_delete_success'] = 'Temat har raderats.';
$lang['admin_themes_disable_confirm'] = 'Är du säker på att du vill inaktivera temat: <b>%s</b>?';
$lang['admin_themes_disable_error'] = 'Kunde inte inaktivera temat.';
$lang['admin_themes_disable_error_active'] = 'Det aktiva temat kan inte inaktiveras.';
$lang['admin_themes_disable_success'] = 'Temat har inaktiverats.';
$lang['admin_themes_enable_confirm'] = 'Är du säker på att du vill aktivera temat: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'Kunde inte aktivera temat.';
$lang['admin_themes_enable_success'] = 'Temat aktiverades framgångsrikt.';
$lang['admin_themes_install_confirm'] = 'Är du säker på att du vill installera temat: <b>%s</b>?';
$lang['admin_themes_install_error'] = 'Det gick inte att installera temat.';
$lang['admin_themes_install_success'] = 'Temat installerades.';
$lang['admin_themes_install_tip'] = 'Teman ändrar din webbplats utseende och layout. Välj från <a href="%s" target="_blank" rel="noopener">temabibliotek</a> eller ladda upp en <b>.zip</b>-fil för att installera ditt eget.';
$lang['admin_themes_none_tip'] = 'Den här applikationen körs utan ett tema. Installera ett för att anpassa det publika gränssnittet.';
$lang['admin_themes_update_confirm'] = 'Är du säker på att du vill uppdatera detta tema?';
$lang['admin_themes_update_error'] = 'Det gick inte att uppdatera temat.';
$lang['admin_themes_update_success'] = 'Temat uppdaterades.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'Menus';
$lang['admin_menus_assign_error'] = 'Kunde inte uppdatera menyplatser.';
$lang['admin_menus_assign_success'] = 'Menyplatser uppdaterades framgångsrikt.';
$lang['admin_menus_header'] = 'Det finns <b>%s</b> menylägen tillgängliga.';
$lang['admin_menus_location'] = 'Plats';
$lang['admin_menus_locations'] = 'Menyplatser';
$lang['admin_menus_manage'] = 'Hantera menyer';
$lang['admin_menus_menu'] = 'Tilldelad meny';
$lang['admin_menus_none'] = '&#151; Ingen &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = 'Lägg till språk';
$lang['admin_languages_default_confirm'] = 'Är du säker på att du vill göra det här språket till webbplatsens standardspråk?';
$lang['admin_languages_default_error'] = 'Kunde inte ändra standardspråk.';
$lang['admin_languages_default_error_nochange'] = 'Detta språk är redan standardspråket.';
$lang['admin_languages_default_success'] = 'Standardspråk ändrades framgångsrikt.';
$lang['admin_languages_delete_confirm'] = 'Är du säker på att du vill ta bort språket: <b>%s</b>?';
$lang['admin_languages_delete_error'] = 'Det gick inte att ta bort språket.';
$lang['admin_languages_delete_error_active'] = 'Aktiva språk kan inte tas bort.';
$lang['admin_languages_delete_error_default'] = 'Standardspråket kan inte tas bort.';
$lang['admin_languages_delete_success'] = 'Språket har tagits bort.';
$lang['admin_languages_disable_all_confirm'] = 'Är du säker på att du vill inaktivera alla språk?';
$lang['admin_languages_disable_all_error'] = 'Kunde inte inaktivera alla språk.';
$lang['admin_languages_disable_all_success'] = 'Alla språk inaktiverades framgångsrikt.';
$lang['admin_languages_disable_confirm'] = 'Är du säker på att du vill inaktivera språket: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'Kunde inte inaktivera språk.';
$lang['admin_languages_disable_error_default'] = 'Standardspråk kan inte inaktiveras.';
$lang['admin_languages_disable_error_nochange'] = 'Detta språk är redan inaktiverat.';
$lang['admin_languages_disable_success'] = 'Språket har inaktiverats.';
$lang['admin_languages_enable_all_confirm'] = 'Är du säker på att du vill aktivera alla språk?';
$lang['admin_languages_enable_all_error'] = 'Det gick inte att aktivera alla språk.';
$lang['admin_languages_enable_all_success'] = 'Alla språk har aktiverats.';
$lang['admin_languages_enable_confirm'] = 'Är du säker på att du vill aktivera språket: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'Kunde inte aktivera språk.';
$lang['admin_languages_enable_error_nochange'] = 'Detta språk är redan aktiverat.';
$lang['admin_languages_enable_success'] = 'Språket aktiverades framgångsrikt.';
$lang['admin_languages_install_confirm'] = 'Är du säker på att du vill installera språket: <b>%s</b>?';
$lang['admin_languages_install_error'] = 'Det gick inte att installera språket.';
$lang['admin_languages_install_success'] = 'Språket installerades.';
$lang['admin_languages_install_tip'] = 'Språk lägger till översättningar för webbplatsens gränssnitt och innehåll. Bläddra bland tillgängliga språk i <a href="%s" target="_blank" rel="noopener">språkkatalogen</a> eller ladda upp ett <b>.zip</b>-paket för att installera ditt eget.';
$lang['admin_languages_tip'] = 'Aktivera, inaktivera och ställ in webbplatsens standardspråk. Aktiverade språk är tillgängliga för webbplatsbesökare.';
$lang['admin_languages_update_confirm'] = 'Är du säker på att du vill uppdatera detta språk?';
$lang['admin_languages_update_error'] = 'Det gick inte att uppdatera språket.';
$lang['admin_languages_update_success'] = 'Språket uppdaterades.';

/**
 * ---------------------------------------------------------------
 * Package Driver & Installation Messages
 * ---------------------------------------------------------------
 * Language lines for package installation, download, backup, and validation.
 */
$lang['package_already_exists'] = 'Paketet finns redan.';
$lang['package_archive_download_failed'] = 'Det gick inte att ladda ner paketarkivet.';
$lang['package_backup_create_error'] = 'Det gick inte att skapa säkerhetskopia av paketet.';
$lang['package_backup_dir_failed'] = 'Det gick inte att skapa säkerhetskopieringsmapp %s';
$lang['package_backup_missing'] = 'Säkerhetskopian finns inte.';
$lang['package_backup_path_error'] = 'Kunde inte hitta sökvägen till säkerhetskopian.';
$lang['package_backup_request_invalid'] = 'Ogiltig begäran om säkerhetskopia.';
$lang['package_backup_restore_error'] = 'Det gick inte att återställa säkerhetskopian av paketet.';
$lang['package_catalog_type_unknown'] = 'Okänd katalogtyp.';
$lang['package_checksum_error'] = 'Checksummakontroll av paketet misslyckades.';
$lang['package_copy_files_error'] = 'Det gick inte att kopiera paketfiler till destinationen.';
$lang['package_copy_updates_error'] = 'Det gick inte att kopiera uppdateringsfiler till destinationen.';
$lang['package_dest_dir_failed'] = 'Det gick inte att skapa målmapp %s';
$lang['package_destination_error'] = 'Kunde inte fastställa paketets destination.';
$lang['package_download_dir_failed'] = 'Det gick inte att skapa nedladdningsmapp %s';
$lang['package_download_empty'] = 'Pakethämtningen returnerade ett tomt svar.';
$lang['package_download_request_invalid'] = 'Ogiltig begäran om hämtning av paket.';
$lang['package_extract_failed'] = 'Det gick inte att extrahera ZIP-filen %s';
$lang['package_invalid_lang_files'] = 'Ogiltigt språk — obligatoriska språkfiler för applikationen saknas.';
$lang['package_invalid_lang_structure'] = 'Ogiltigt språk — admin- och/eller ci3-mappar saknas.';
$lang['package_invalid_missing_info'] = 'Ogiltig %s: "info.php" saknas.';
$lang['package_invalid_module_structure'] = 'Ogiltig modul — obligatoriska config- och/eller controllers-mappar saknas.';
$lang['package_invalid_plugin_boot'] = 'Ogiltigt tillägg (plugin) — "boot.php" saknas.';
$lang['package_invalid_plugin_contents'] = 'Ogiltigt tillägg (plugin) — tillägg får inte innehålla controllers eller views.';
$lang['package_invalid_theme_boot'] = 'Ogiltigt tema — "boot.php" saknas.';
$lang['package_invalid_theme_views'] = 'Ogiltigt tema — views-mappen saknas.';
$lang['package_no_root_dir'] = 'Paketet innehåller ingen rotkatalog.';
$lang['package_not_downloadable'] = 'Paketet är inte tillgängligt för offentlig hämtning.';
$lang['package_not_in_registry'] = 'Paketet är inte tillgängligt i det offentliga registret.';
$lang['package_request_invalid'] = 'Ogiltig paketbegäran.';
$lang['package_rollback_request_invalid'] = 'Ogiltig begäran om återställning (rollback).';
$lang['package_root_mismatch'] = 'Paketarkivets rot matchar inte %s';
$lang['package_single_root_required'] = 'Paketet måste innehålla exakt en rotkatalog.';
$lang['package_source_error'] = 'Kunde inte fastställa paketets källa.';
$lang['package_system_core_restricted'] = 'Systemkomponenter kan inte installeras som paket.';
$lang['package_temp_dir_failed'] = 'Det gick inte att skapa tillfällig mapp %s';
$lang['package_type_unknown'] = 'Okänd pakettyp.';
$lang['package_update_request_invalid'] = 'Ogiltig begäran om paketuppdatering.';
$lang['package_update_root_mismatch'] = 'Uppdateringsarkivets rot matchar inte %s.';
$lang['package_upload_dir_failed'] = 'Det gick inte att skapa uppladdningsmapp %s';
$lang['package_url_invalid'] = 'Ogiltig URL för paketdistribution.';
$lang['package_write_failed'] = 'Det gick inte att skriva paketet till %s';
$lang['package_zip_not_found'] = 'Paketets ZIP-fil finns inte: %s';

/**
 * ---------------------------------------------------------------
 * Updates Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'Nya uppdateringar tillgängliga!';
$lang['update_backup_error'] = 'Det gick inte att skapa en säkerhetskopia av det befintliga paketet. Uppdateringen avbröts.';
$lang['update_check_disabled'] = 'Automatiska uppdateringskontroller är inaktiverade. Aktivera dem för att visa uppdateringar.';
$lang['update_check_error'] = 'Det går inte att köra uppdateringskontrollen för tillfället.';
$lang['update_check_success'] = 'Uppdateringskontroll slutförd framgångsrikt.';
$lang['update_install_error'] = 'Paketet kunde inte installeras. Den tidigare versionen behölls.';
$lang['update_install_success'] = 'Paketet har uppdaterats till den senaste versionen.';
$lang['update_interval_3days'] = 'Var 3:e dag';
$lang['update_interval_biweekly'] = 'Varannan vecka';
$lang['update_interval_daily'] = 'Varje dag';
$lang['update_interval_monthly'] = 'En gång i månaden';
$lang['update_interval_weekly'] = 'En gång i veckan';
$lang['update_not_available'] = 'Din webbplats är uppdaterad.';
$lang['update_rollback_confirm'] = 'Är du säker på att du vill återställa den föregående versionen?';
$lang['update_rollback_error'] = 'Det gick inte att återställa den tidigare versionen. Manuellt ingripande kan krävas.';
$lang['update_rollback_success'] = 'Tidigare version återställd framgångsrikt.';
$lang['updates_available'] = 'Tillgängliga uppdateringar';
$lang['updates_check_now'] = 'Kontrollera nu';
$lang['updates_check_now_confirm'] = 'Är du säker på att du vill kontrollera uppdateringar nu?';
$lang['updates_current_version'] = 'Nuvarande version';
$lang['updates_enable'] = 'Aktivera uppdateringar';
$lang['updates_last_check'] = 'Senaste kontroll: %s';
$lang['updates_latest_version'] = 'Senaste version';
$lang['updates_next_check'] = 'Nästa schemalagda kontroll: %s';
$lang['updates_previous_version'] = 'Tidigare version';
$lang['updates_recent'] = 'Nyligen uppdaterad';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'Blockering av den angivna IP-adressen misslyckades.';
$lang['admin_firewall_ban_success'] = 'IP-adressen har blockerats.';
$lang['admin_firewall_block_ip'] = 'Blockera IP-adress';
$lang['admin_firewall_delete_confirm'] = 'Är du säker på att du vill avblockera de valda IP-adresserna?';
$lang['admin_firewall_delete_error'] = 'Avblockering av de valda IP-adresserna misslyckades.';
$lang['admin_firewall_delete_success'] = 'De valda IP-adresserna har avblockerats.';
$lang['admin_firewall_duration'] = 'Blockeringstid';
$lang['admin_firewall_permanent'] = 'Permanent';
$lang['admin_firewall_reason'] = 'Blockeringsorsak';
$lang['admin_firewall_tip'] = 'Visa och hantera IP-adresser som blockerats av brandväggen på grund av upprepade överträdelser eller misstänkt aktivitet.';

// Settings
$lang['404_ban_duration'] = '404-blockeringstid';
$lang['404_threshold'] = '404-gräns';
$lang['uri_ban_duration'] = 'URI-blockeringens varaktighet';
$lang['uri_strike_threshold'] = 'URI-gräns';
