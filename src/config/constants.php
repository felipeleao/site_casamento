<?php

////////////////////////////////////////////////////////////////
// Constantes de navegacao
////////////////////////////////////////////////////////////////
define("SITE_URL", siteURL() );
define("APPLICATION_ROOT", getApplicationRoot() );
define("IMAGES_ROOT", APPLICATION_ROOT."/assets/images");
define("CSS_ROOT", APPLICATION_ROOT."/assets/css");
define("JS_ROOT", APPLICATION_ROOT."/assets/js");
define("THIRD_PARTY_ROOT", APPLICATION_ROOT."/third-party");

////////////////////////////////////////////////////////////////
// Constantes para configuracao do envio de email
////////////////////////////////////////////////////////////////
define("MAIL_DEBUG_MODE", 0 );
define("MAIL_SMTP_HOST", "smtp.gmail.com");
define("MAIL_SMTP_SECURITY", "tls");
define("MAIL_SMTP_PORT", 587);
define("MAIL_SMTP_USERNAME", "no.reply.bbtecno@gmail.com");
define("MAIL_SMTP_PASSWORD", "testeBBTECNO");
define("MAIL_FROM", array('EMAIL'=>'no-reply@camillaefelipenoaltar.com.br', 'NOME'=>'Camilla & Felipe no altar') );
define("MAIL_DESTINATARIOS", array(
    array('EMAIL'=>'felipebcleao@gmail.com', 'NOME'=>'Felipe'),
    array('EMAIL'=>'felipeleao88@gmail.com', 'NOME'=>'Felipe (alternativo)'),
));

////////////////////////////////////////////////////////////////
// Constantes para reCaptcha
////////////////////////////////////////////////////////////////
define("RECAPTCHA_SITE_URL", "https://www.google.com/recaptcha/api/siteverify");
define("RECAPTCHA_SECRET", "6LcAlVEUAAAAAJU2UJT0hgIpgMVuTD-YfFo3R8hT");









//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function getApplicationRoot(){
    $current_dir = dirname(__FILE__);
    $root_dir = $_SERVER['DOCUMENT_ROOT'];
    return str_replace("/src/config", "", str_replace($root_dir, SITE_URL, $current_dir));
}

function siteURL(){
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $domainName = $_SERVER['HTTP_HOST'];
    return $protocol.$domainName;
}
?>