<?php
namespace GbCreation\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('GbCreationHomeBundle:Home:index.html.twig');
    }

    public function homeAction()
    {
    	$headerSlide = $this->displaySlider("images/slider");

        return $this->container->get('templating')->renderResponse('GbCreationHomeBundle:Home:home.html.twig',array(
        	'headerSlide' => $headerSlide,
        	));
    }

    public function newsAction()
    {
        return $this->container->get('templating')->renderResponse('GbCreationHomeBundle:Home:news.html.twig');
    }

    public function portfolioAction()
    {
        return $this->container->get('templating')->renderResponse('GbCreationHomeBundle:Home:portfolio.html.twig');
    }

    public function decompteAction()
    {
        return $this->container->get('templating')->renderResponse('GbCreationHomeBundle:Home:decompte.html.twig');
    }


	public function getNbHeader($path)
	{
		$nb_fichier = 0;
		if($dossier = opendir($path)){
			while(false !== ($fichier = readdir($dossier))){
				if($fichier != '.' && $fichier != '..' && $fichier != 'index.php'&& $fichier != '@eaDir'){
					//echo '==>' . $fichier .'<br>';  
					$nb_fichier++;
				}
			}
			//echo 'Il y a <strong>' . $nb_fichier .'</strong> fichier(s) dans le dossier<br>';  
			closedir($dossier);
		}
		else{
			 echo 'Le dossier n\' a pas pu être ouvert';
		}
		return 	$nb_fichier;				
	}
	 
	 public function displaySlider($path)
	{
		 $params = $this->container->getParameter('param');


		$slides = array();
		$slidesChecked = array();
		$nb = $this->getNbHeader($path);
		//print_r("il faut afficher ".NB_SLIDE." sur ".$nb." fichiers");
		if($nb <= $params['NB_SLIDE']){
			for($i=0;$i<$params['NB_SLIDE'];$i++){
				$slides[$i] = 'header'.$i.'.jpg';
			}
		}
		else{
			for($i=0;$i<$params['NB_SLIDE'];$i++){
				$toFind = true;
				while($toFind){
					// si 8 fichiers random de 0 a 7
					$z = mt_rand(0, $nb-1);	
					if(!array_key_exists($z, $slidesChecked)) {		
						$slidesChecked[$z]="true";
						$toFind = false;	
					}
				}
				$slides[$i] = 'header'.$z.'.jpg';
			}
		}
		//print_r($slides);
		//print_r($slidesChecked);
		return $slides;
	}

}
