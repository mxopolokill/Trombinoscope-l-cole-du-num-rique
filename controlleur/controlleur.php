<?php



$API = new APICALL;
$API->Url = "http://app-d6e4214a-9a28-46b5-967f-565f071952c1.cleverapps.io/students";

$Myjson = $API->curl1($API->Url);

include "views/view.php";
