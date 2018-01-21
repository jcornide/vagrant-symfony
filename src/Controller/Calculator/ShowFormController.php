<?php

namespace App\Controller\Calculator;

use App\Form\Calculator;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShowFormController extends Controller
{
    public function showForm()
    {
        return $this->render(
            'Calculator/form.html.twig',
            ['form' => $this->createForm(Calculator::class)->createView()]
        );
    }
}