<?php
class APICALL {
  
    public function curl1($Url) {
   
        $Cinit = curl_init();

        curl_setopt($Cinit, CURLOPT_URL, $Url);
        curl_setopt($Cinit, CURLOPT_HEADER, 0);
        curl_setopt($Cinit, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($Cinit,CURLOPT_SSL_VERIFYPEER, false);
        
        $donnee = curl_exec($Cinit);
        curl_close($Cinit);

        $Myjson = json_decode($donnee);
        return $Myjson;
    }
}