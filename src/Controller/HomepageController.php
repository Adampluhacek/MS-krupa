<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
/**
 * @Route ("/jidelnicek",name="jidelnicek")
 */
public function index ()
{
    return $this->render("frontend/index.html.twig");
}
}