<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloWorldController extends Controller
{
    public function greet() {
        return $this->render('HelloWorld/show.html.twig');
    }
}