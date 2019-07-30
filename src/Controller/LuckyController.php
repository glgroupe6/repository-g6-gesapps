<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class LuckyController
{
	/**
	*@var Environment
	*/
	private $twig;
     
    public function __construct(Environment $twig){
    	$this->twig=$twig;
    }
     /**
      * @Route("/lucky/number")
      */
    public function number(){
        $number = random_int(0, 100);
        //return new Response('<html><body>Lucky number: '.$number.'</body></html>');
        return new Response($this->twig->render('pages/home.html.twig'));
    }
}