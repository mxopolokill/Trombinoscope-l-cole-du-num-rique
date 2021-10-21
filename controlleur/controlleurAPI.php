<?php



$API = new APICALL;
$API->url = "https://www.lecoledunumerique.fr/wp-json/wp/v2/apprenants?per_page=100";

$Myjson = $API->curl1($API->url);



