<?php

namespace App\Controller\Calculator;

use App\Form\Calculator;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\RouterInterface;
use Twig\Template;

class ShowForm2Controller extends Controller
{
    /** @var RouterInterface  */
    private $router;
    /**
     * @var Template
     */
    private $render;

    /**
     * ShowFormController constructor.
     *
     * @param RouterInterface $router
     */
    public function __construct(
        RouterInterface $router,
        \Twig_Environment $render
    )
    {
        $this->render = $render;
    }

    public function showForm()
    {
        return $this->render->render(
            'Calculator/form.html.twig',
            ['form' => $this->createForm(Calculator::class)->createView()]
        );
    }
}