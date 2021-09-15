<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MenuController extends AbstractController
{
    /**
     * @Route ("/menu",name="menu")
     */
    public function Menu ()
    {
        return $this->render("frontend/menu.html.twig");
    }
}