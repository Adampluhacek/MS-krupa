<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DownloadPageController extends AbstractController
{
    /**
     * @Route ("/download",name="download")
     */
    public function downloadpage ()
    {
        return $this->render("frontend/download.html.twig");
    }
}