<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Module\Service\Config;

class HomeController extends Controller
{
	private $config;

	public function __construct(Config $config)
	{
		$this->config = $config;
	}

    /**
     * @Route("/", name="home")
     */
    public function index()
    {
    	echo "</pre>";
    	var_dump($this->config->dump());
    	die();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
