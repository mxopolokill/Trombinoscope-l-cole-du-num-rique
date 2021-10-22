<?php
//ma classe 
class TemplateEngine
{
    /**
     * @var string
     */
    private $templateDir; //Private Variable 

    //mon controlleur 
    public function __construct($templateDir)//public fonction
    {
        $this->templateDir = $templateDir;
    }

    /**
     * {@inheritDoc}
     */
    //LE rendu du template
    public function render($template, array $parameters = array())
    {   
        //importation des paramettres 
        extract($parameters);

        //Vérifie si le chemin d'accès $path est absolu ou relatif 
        //(en détectant soit '/' soit 'x:/' comme première partie de la chaîne) 
        //et renvoie TRUE si c'est le cas.
        if (false === $this->isAbsolutePath($template)) {
            $template = $this->templateDir . DIRECTORY_SEPARATOR . $template;
        }
        //enclenche la temporisation de sortie
        ob_start();
        include $template;
        //Lit le contenu courant du tampon de sortie puis l'efface
        return ob_get_clean();
    }
    //Vérifie si le chemin d'accès $path est absolu ou relatif 
    private function isAbsolutePath($file)
    {   //Trouve la longueur du segment initial d'une chaîne contenant tous les caractères d'un masque donné
        if (strspn($file, '/\\', 0, 1)
        //Calcule la taille d'une chaîne puis  Vérifie qu'une chaîne est alphabétique
            || (strlen($file) > 3 && ctype_alpha($file[0])
            //Retourne un segment de chaîne
            && substr($file, 1, 1) === ':'
             //Trouve la longueur du segment initial d'une chaîne contenant tous les caractères d'un masque donné
            && (strspn($file, '/\\', 2, 1))
        )
        // Analyse une URL et retourne ses composants
        || null !== parse_url($file, PHP_URL_SCHEME)
        ) {
            return true;
        }

        return false;
    }
}
