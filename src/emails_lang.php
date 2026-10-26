<?php

/**
 * System emails language lines.
 *
 * @package     CiSkeleton\Core
 * @subpackage  Language
 * @category    Core
 *
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

// ====================================================================
// SYSTEM NOTIFICATIONS
// ====================================================================

// ----------------------------------------------------------------
// Update Available
// ----------------------------------------------------------------

$lang['emails_updates_available_subject'] = 'Systemuppdateringar tillgängliga';
$lang['emails_updates_available_message'] = <<<EOT
Hej,

Nya systemuppdateringar har upptäckts för {site_anchor}.

Dessa uppdateringar kan innehålla säkerhetskorrigeringar, prestandaförbättringar eller nya funktioner.
Vi rekommenderar att du granskar dem så snart som möjligt.

Du kan granska och hantera tillgängliga uppdateringar från administratörspanelen:
{link}

Om du redan har granskat eller tillämpat uppdateringarna behöver du inte vidta några ytterligare åtgärder.

Detta är ett automatiskt systemmeddelande som skickats av {site_name}.
Svara inte på detta e-postmeddelande.

-- {site_name}
EOT;

// ====================================================================
// USER ACCOUNTS
// ====================================================================

// ----------------------------------------------------------------
// Account Activation Request
// ----------------------------------------------------------------

$lang['emails_account_activation_request_subject'] = 'Kontoaktivering';
$lang['emails_account_activation_request_message'] = <<<EOT
Hej {name},

Tack för att du registrerade dig på {site_anchor}. Ditt konto har skapats och måste aktiveras innan du kan använda det.

För att aktivera ditt konto, klicka på följande länk eller kopiera och klistra in den i din webbläsare:
{link}

Med vänlig hälsning,
-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Resend Account Activation Link
// ----------------------------------------------------------------

$lang['emails_account_activation_resend_subject'] = 'Ny aktiveringslänk';
$lang['emails_account_activation_resend_message'] = <<<EOT
Hej {name},

Du har nyligen begärt en ny aktiveringslänk på {site_anchor} eftersom ditt konto inte var aktivt.
För att aktivera ditt konto, klicka på följande länk eller kopiera och klistra in den i din webbläsare:
{link}

Om du inte begärde detta behövs ingen ytterligare åtgärd.

Denna åtgärd begärdes från följande IP-adress: {ip_link}.

Med vänlig hälsning,
-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Account Activation Successful
// ----------------------------------------------------------------

$lang['emails_account_activation_success_subject'] = 'Kontot aktiverat';
$lang['emails_account_activation_success_message'] = <<<EOT
Hej {name},

Ditt konto på {site_anchor} har aktiverats framgångsrikt. Du kan nu <a href="{login_url}" target="_blank" rel="noopener">logga in</a> när som helst.

Vi hoppas att du kommer att trivas, vänligen acceptera vår vänliga hälsning.

-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Pending Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_pending_subject'] = 'Kontot väntar på godkännande';
$lang['emails_account_approval_pending_message'] = <<<EOT
Hej {name},

Tack för att du går med oss på {site_anchor}. Ditt konto har skapats men behöver godkännas av en webbplatsadministratör innan det är aktivt.
Vi ber om ursäkt för detta viktiga steg, men det är endast av säkerhetsskäl.

Du kommer att få ett bekräftelsemeddelande så snart ditt konto har godkänts.

Vi hoppas att du kommer att trivas, vänligen acceptera vår vänliga hälsning.

-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Successful Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_success_subject'] = 'Kontot godkänt';
$lang['emails_account_approval_success_message'] = <<<EOT
Hej {name},

Goda nyheter! Ditt konto på {site_anchor} har godkänts.

Du kan nu logga in och börja använda ditt konto omedelbart:
{link}

Vi är glada att ha dig med oss.

-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Account Restoration
// ----------------------------------------------------------------

$lang['emails_account_restored_subject'] = 'Kontot återställt';
$lang['emails_account_restored_message'] = <<<EOT
Hej {name},

Detta e-postmeddelande bekräftar att ditt konto på {site_anchor} har återställts framgångsrikt.

Vi hälsar dig välkommen tillbaka och hoppas att du kommer att trivas denna gången.

Med vänlig hälsning,
-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Welcome Message
// ----------------------------------------------------------------

$lang['emails_account_welcome_subject'] = 'Välkommen till {site_name}';
$lang['emails_account_welcome_message'] = <<<EOT
Hej {name},

De flesta människor har riktigt långa välkomstmejlsekvenser efter att du registrerar dig på deras webbplats.

Goda nyheter: vi är inte som de flesta människor.
Men vi vill ändå välkomna dig och tacka dig för att du går med oss på {site_anchor}.

Vi hoppas att du kommer att trivas. Vänligen acceptera vår vänliga hälsning.

-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Email Change Request
// ----------------------------------------------------------------

$lang['emails_email_change_request_subject'] = 'Begäran om e-poständring';
$lang['emails_email_change_request_message'] = <<<EOT
Hej {name},

Du får detta e-postmeddelande eftersom vi har fått en begäran om att ändra e-postadressen för ditt konto på {site_anchor}.

Klicka på följande länk eller kopiera och klistra in den i din webbläsare om du vill fortsätta:
{link}

Om du inte begärde en e-poständring behövs ingen ytterligare åtgärd.

Denna åtgärd begärdes från följande IP-adress: {ip_link}.

Med vänlig hälsning,
-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Successful Email Change
// ----------------------------------------------------------------

$lang['emails_email_change_success_subject'] = 'E-postadress ändrad';
$lang['emails_email_change_success_message'] = <<<EOT
Hej {name},

Detta e-postmeddelande bekräftar att din e-postadress som används på {site_anchor} har ändrats framgångsrikt.

Om du inte utförde denna åtgärd, kontakta oss så snart som möjligt för att lösa detta problem.

Denna åtgärd utfördes från följande IP-adress: {ip_link}.

Med vänlig hälsning,
-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Login Alert: Failure
// ----------------------------------------------------------------

$lang['emails_login_alert_failure_subject'] = 'Varning för misslyckad inloggning';
$lang['emails_login_alert_failure_message'] = <<<EOT
Hej {name},

Någon försökte nyligen använda felaktiga lösenord för att logga in på ditt {site_name}-konto.

Serverdatum: {date}
Enhet: {browser}, {platform}
IP-adress: {ip_link}

Om det inte var du, oroa dig inte, inloggningsförsöket lyckades inte.

Om det var du och du inte kommer ihåg ditt lösenord, klicka på länken nedan för att återställa det:
{reset_link}

Om du har problem med att logga in på ditt konto, kontakta vårt team eller be om en one-click-inloggningslänk.

-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Login Alert: Success
// ----------------------------------------------------------------

$lang['emails_login_alert_success_subject'] = 'Meddelande om lyckad inloggning';
$lang['emails_login_alert_success_message'] = <<<EOT
Hej {name},

Vi skickar detta e-postmeddelande efter att du har loggat in framgångsrikt på ditt {site_name}-konto.

Serverdatum: {date}
Enhet: {browser}, {platform}
IP-adress: {ip_link}

Om det var du kan du ignorera detta e-postmeddelande.

Om det inte var du, ändra ditt lösenord omedelbart för att skydda ditt konto.

För all hjälp, kontakta vårt supportteam.

-- {site_name} Team
EOT;

// ----------------------------------------------------------------
// One-Click Login Link
// ----------------------------------------------------------------

$lang['emails_login_magic_link_subject'] = 'Snabb inloggningslänk';
$lang['emails_login_magic_link_message'] = <<<EOT
Hej {name},

Du har begärt en one-click-inloggning på ditt {site_anchor}-konto.

Klicka på följande länk eller kopiera och klistra in den i din webbläsare för att logga in direkt:
{link}

Denna länk upphör att gälla efter 15 minuter. Om du inte begärde detta, vänligen ignorera detta e-postmeddelande.

Denna begäran gjordes från följande IP-adress: {ip_link}.

Med vänlig hälsning,
-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Login: Two-Factor Authentication Code
// ----------------------------------------------------------------

$lang['emails_login_two_factor_code_subject'] = 'Tvåfaktorsautentisering';
$lang['emails_login_two_factor_code_message'] = <<<EOT
Hej {name},

Din tvåfaktorsautentiseringskod är: <strong>{code}</strong>

Du kan alltid inaktivera tvåfaktorsautentisering i dina kontoinställningar.

Denna åtgärd utfördes från följande IP-adress: {ip_link}.

Med vänlig hälsning,
-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Password Change Request
// ----------------------------------------------------------------

$lang['emails_password_change_request_subject'] = 'Begäran om återställning av lösenord';
$lang['emails_password_change_request_message'] = <<<EOT
Hej {name},

Du får detta e-postmeddelande eftersom vi har fått en begäran om att återställa lösenordet för ditt konto på {site_anchor}.

Klicka på följande länk eller kopiera och klistra in den i din webbläsare om du vill fortsätta:
{link}

Om du inte begärde lösenordsåterställning behövs ingen ytterligare åtgärd.

Denna begäran gjordes från följande IP-adress: {ip_link}.

Med vänlig hälsning,
-- {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Password Change Successful
// ----------------------------------------------------------------

$lang['emails_password_change_success_subject'] = 'Lösenordet ändrat';
$lang['emails_password_change_success_message'] = <<<EOT
Hej {name},

Detta e-postmeddelande bekräftar att ditt lösenord på {site_anchor} har ändrats framgångsrikt. Du kan nu <a href="{login_url}" target="_blank" rel="noopener">logga in</a> med det nya lösenordet.

Om du inte utförde denna åtgärd, vänligen kontakta oss så snart som möjligt för att lösa detta problem.

Denna åtgärd utfördes från följande IP-adress: {ip_link}.

Med vänlig hälsning,
-- {site_name} Team.
EOT;
