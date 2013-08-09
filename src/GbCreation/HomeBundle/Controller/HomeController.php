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
    	//$this->FeedParser("http://vimeo.com/user3746792/videos/rss", 2);
    	$params = $this->container->getParameter('param');
        $NB_ITEM_TO_GET = $params['MAX_ITEM'];
        $NB_COMMENT_TO_GET = $params['MAX_COMMENT'];

        $em = $this->getDoctrine()
                   ->getManager();

        $items = $em->getRepository('GbCreationWallBundle:Item')->getLastItems($NB_ITEM_TO_GET);
        $comments = $em->getRepository('GbCreationWallBundle:Comment')->getLastComments($NB_COMMENT_TO_GET);

        return $this->container->get('templating')->renderResponse('GbCreationHomeBundle:Home:news.html.twig',array(
        		'items' => $items,
        		'comments' => $comments,
        	));
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

	function FeedParser($url_feed, $nb_items_affiches=10)
	 {
		try {	
		    // is cURL installed yet?
		    if (!function_exists('curl_init')){
		        die('Sorry cURL is not installed!');
		    }
		 
		    // OK cool - then let's create a new cURL resource handle
		    $ch = curl_init();

		    if (FALSE === $ch)
		        throw new Exception('failed to initialize');
		 
		    // Now set some options (most are optional) 
		    // Set URL to download
		    curl_setopt($ch, CURLOPT_URL, $url_feed);
		    // Include header in result? (0 = yes, 1 = no)
		    curl_setopt($ch, CURLOPT_HEADER, 0);
		    // Should cURL return or print out the data? (true = return, false = print)
		    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		    // Timeout in seconds
		    //curl_setopt($ch, CURLOPT_TIMEOUT, 10);
		 
	 
			$header[0] = "Accept: text/xml,application/xml,application/xhtml+xml,";
			$header[0] .= "text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5";
			$header[] = "Cache-Control: max-age=0";
			$header[] = "Connection: keep-alive";
			$header[] = "Keep-Alive: 300";
			$header[] = "Accept-Charset: utf-8";
			$header[] = "Accept-Language: fr"; // Langue fr
			$header[] = "Pragma: "; // Simule un navigateur
			 
			$useragent = 'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0'; // Pour se faire passer pour Firefox
			curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $header);


		    // Download the given URL, and return output
		    $contenu = curl_exec($ch);
		 
		 	//var_dump($contenu);

			if (FALSE === $contenu){
				echo 'Erreur Curl [' . curl_error($ch).']<br>';
				echo 'Erreur Curl [' . curl_errno($ch).']<br>';
				curl_error($ch);
				//throw new Exception(curl_error($ch), curl_errno($ch));
			}
			echo "GBE test rss";

			//$rss_doc = new SimpleXmlElement($contenu, LIBXML_NOCDATA);
			$rss_doc ="bla bla bla";
			echo "<pre>".print_r($rss_doc,1)."</pre>";

			if(isset($rss_doc->channel))
			{
			    $this->parse_rss($rss_doc);
			}  
			elseif(isset($rss_doc->entry))
			{
			    $this->parse_atom($rss_doc);
			}

		    // Close the cURL resource, and free system resources
			curl_close($ch);

		} catch(Exception $e) {
			echo 'Exception........ GBE  code['.$e->getCode().'] msg['.$e->getMessage().']';
			//trigger_error(sprintf('Curl failed with error #%d: %s',$e->getCode(), $e->getMessage()),E_USER_ERROR);

		}
	 
	 	$rssHtml="";
	    return $rssHtml;
	}
	function parse_rss($doc)
	{
	    // Pour chaque element...
	    foreach($doc->channel->item as $item)
	    {
	        echo $item->title . "\n";
	        echo $item->link . "\n";
	        echo $item->description . "\n\n";
	    }  
	}  

	function parse_atom($doc)
	{
	    // Pour chaque element...
	    foreach($doc->entry as $item)
	    {
	        echo $item->title . "\n";
	        echo $item->link->attributes() . "\n";
	        echo $item->content . "\n\n";
	    }  
}

}
