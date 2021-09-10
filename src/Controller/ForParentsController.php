<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ForParentsController extends AbstractController
{
    /**
     * @Route ("/forparents",name="forparents")
     */
    public function index ()
    {
        return $this->render("frontend/forparents.html.twig");
    }
}