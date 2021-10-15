<?php
class APICALL {
  
    public function curl1($Url) {
        $Cinit = curl_init();
        curl_setopt($Cinit, CURLOPT_URL, $Url);
        curl_setopt($Cinit, CURLOPT_HEADER, 0);
        curl_setopt($Cinit, CURLOPT_RETURNTRANSFER, True);
        $donnée = curl_exec($Cinit);
        curl_close($Cinit);
        
        $Myjson = json_decode($donnée);
        
        return $Myjson;
    }
}