
<?php



include "./views/header.php";
include "./style/styleheader.php";

include "./style/stylecard.php";
include "./views/viewerror.php";



foreach($Myjson as $Apprenant) {


echo '<div class="card" style="width: 30%">';
            echo '<img src="'. $Apprenant->image.'" class="" alt="#">';
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
                    echo '<a href="'. $Apprenant->cv .'" class="btn btn-primary"><i class="fas fa-file-pdf"></i></a>';
            echo '</div>';

echo '</div>';
echo '</div>';

 



}
include "./style/viewfooter.php";
include "./views/footer.php";