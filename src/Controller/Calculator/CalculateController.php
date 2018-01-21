<?php

namespace App\Controller\Calculator;

use App\Form\Calculator;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CalculateController extends Controller
{
    public function calculate(Request $request)
    {
        $form = $this->createForm(Calculator::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $result = $form->get('number1')->getData() + $form->get('number2')->getData();
            return $this->render(
                'Calculator/result.html.twig',
                ['result' => $result]
            );
        }

        return $this->render(
            'Calculator/form.html.twig',
            ['form' => $this->createForm(Calculator::class)->createView()]
        );
    }
}