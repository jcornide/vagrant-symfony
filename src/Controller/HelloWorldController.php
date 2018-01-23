<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloWorldController extends Controller
{
    public function salute() {

        $a=1;

        return $this->render('HelloWorld/show.html.twig');
    }
}