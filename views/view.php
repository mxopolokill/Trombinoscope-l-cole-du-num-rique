
<?php


//ajout du header
include "./views/header.php";



//créaction d'un tableau  // avec ma variable retourner de mes info Json décoder 
foreach($Myjson as $Apprenant) {


echo '<div class="card" style="width: 30%">';
            echo '<img src="'. $Apprenant->image.'" class="lestetes" alt="#">';
      echo '<div class="card-body">';


      echo '<div class="';
            echo  '<h5 class="">'. $Apprenant->prenom. '&nbsp' . $Apprenant->nom .  
            '</h5>';

                  echo  '<h5 class="">'. $Apprenant->promotion->name . '</h5>';
            
            foreach($Apprenant->competences as $competence) {
                  echo  '<h5 class="">'. $competence->name . '</h5>';
            }
      echo '</div>';


            echo '<div class="extrait';
                  echo '<p class="">'. $Apprenant->excerpt->rendered .'</p>';
            echo '</div>';


                  echo "<div clas'3bouton'>";
                        echo '<a href="'. $Apprenant->portfolio .'" class="btn btn-primary"><i class="fas fa-file-alt"></i> Portfolio</a>&nbsp&nbsp&nbsp';
                              echo '<a href="'. $Apprenant->linkedin .'" class="btn btn-primary"><i class="fab fa-linkedin"></i> linkedin</a>&nbsp&nbsp&nbsp';
                  //vérification de l'éxistance du cv de l'apprenant 
                              if (array_key_exists('cv', $Apprenant)) {      
                    echo '<a href="'. $Apprenant->cv .'" class="btn btn-primary"><i class="fas fa-file-pdf"></i></a>';

                  }else{      
                  }
                    echo '</div>';

      echo '</div>';
      echo '</div>';
  
 



}

   echo '</body>';
echo '</html>';
