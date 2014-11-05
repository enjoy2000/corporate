<?php
/**
 * Created by PhpStorm.
 * User: hat.dao
 * Date: 10/17/2014
 * Time: 1:46 PM
 */

if (isset($_GET["locale"])) {
    $locale = $_GET["locale"];
}
else if (isset($_SESSION["locale"])) {
    $locale = $_SESSION["locale"];
}

// I18N support information here
putenv("LANG=" . $locale);
setlocale(LC_ALL, $locale);

// Set the text domain as "messages"
$domain = "messages";
bindtextdomain($domain, "./Locale");
bind_textdomain_codeset($domain, 'UTF-8');

textdomain($domain);