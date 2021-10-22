<?php

//création de ma classe APICALL
class APICALL {
    //ajout de ma fonction public ce nommant curl1 avec ma variable  $URL etant l'URL de mon API 
    public function curl1($Url) {
        //ajout d'une propriété 
        //$Cinit ma variable pour Initialiser une session cURL
        $Cinit = curl_init();
        //Définit une option de transmission cURL
        //CURLOPT_URL = fourni l'URL à utiliser dans la requête
        curl_setopt($Cinit, CURLOPT_URL, $Url);
        //CURLOPT_HEADER = passer les en-têtes au flux de données
        curl_setopt($Cinit, CURLOPT_HEADER, 0);
        // CURLOPT_RETURNTRANSFER = true pour retourner le transfert sous forme de chaîne de la valeur de retour de curl_exec() 
        //au lieu de l'afficher directement. CURLOPT_SASL_IR.
        curl_setopt($Cinit, CURLOPT_RETURNTRANSFER, true);
        //CURLOPT_SSL_VERIFYPEER = vérifie le certificat SSL de l'homologue
        curl_setopt($Cinit,CURLOPT_SSL_VERIFYPEER, false);
        
        //création de ma variable donnée 
        //Exécutant une session cURL
        //en récupérant l'initialisation de l'url de mon API 
        $donnee = curl_exec($Cinit);
        //Fermeture de ma session Curl 
        curl_close($Cinit);

        //décode la chaise Json venant de L'API 
        $Myjson = json_decode($donnee);
        //puis de return mon Json décoder pour l'exporter a ma view 
        return $Myjson;
    }
}