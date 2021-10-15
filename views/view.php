<?php
foreach($Myjson as $student){
        

        echo '<div class="Card4"> ';
              
        echo '<div><img class="image44" src=' . $student->image . '></img></div>';
  
  echo '<div class="NameDate0">';
  
        echo '<div><p>' . $student->prenom, $student->nom . '</p></div>';
        
        
  
  echo '</div>';
        
        echo '<div class="extrait"><p>' . $student->extrait . '</p></div>';
  
  echo '</div>';
  
  echo '<div class="BoutonAll">';
  
        echo '<div><bouton class="portfolio" href="' . $student->portfolio . '">Portfolio</bouton></div>';  
  
        echo '<div><bouton class="Linkedin" href="' . $student->linkedin . '">Linkedin</bouton></div>'; 
  
        echo '<div><bouton class="CV" href="' . $student->cv . '">CV</bouton></div>';
        
  echo '</div></br>';
  
  }
  
 