<?php


//création d'un nouvelle appel API
$API = new APICALL;
// URL de mon API appeler 
$API->url = "https://www.lecoledunumerique.fr/wp-json/wp/v2/apprenants?per_page=100";


//La varibable My json repend tout mon cursus de récupération De l'url et de la récupération et 
//l'éxcution de ma function public étant présente dans ma classe APICALL 
$Myjson = $API->curl1($API->url);



