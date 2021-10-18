
<?php

include "./style/bootstrap.php";
include "./style/bootstrap-grid.php";
include "./style/style.php";

foreach($Myjson as $Apprenant){

echo '<div class="card" style="width: 18rem;">';
            echo '<img src="img/img/a.JPG" class="card-img-top" alt="#">';
      echo '<div class="card-body">';

      echo '<div class="PrenomPromo';
            echo  '<h5 class="card-title">'. $Apprenant->prenom. '&nbsp' . $Apprenant->nom .'</h5>';
                  echo  '<h5 class="card-title">'. 2021 . '</h5>';
      echo '</div>';

            echo '<div class="extrait';
                  echo '<p class="card-text">'. $Apprenant->extrait .'</p>';
            echo '</div>';

                  echo "<div clas'3bouton'>";
                        echo '<a href="'. $Apprenant->portfolio .'" class="btn btn-primary">Portfolio</a>&nbsp&nbsp&nbsp';
                              echo '<a href="'. $Apprenant->linkedin .'" class="btn btn-primary">linkedin</a>&nbsp&nbsp&nbsp';
                                    echo '<a href="'. $Apprenant->cv .'" class="btn btn-primary">cv</a>';
            echo '</div>';

echo '</div>';
echo '</div>';

}