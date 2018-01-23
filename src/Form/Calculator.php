<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\Type;

class Calculator extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'number1', NumberType::class, [
                'label' => 'Number 1',
                'required' => true,
            ])
            ->add(
                'number2', NumberType::class, [
                'label' => 'Number 2',
                'required' => true,
            ])
            ->add(
                'sum', SubmitType::class, [
                'label' => 'Sum!'
            ])
        ;
    }
}