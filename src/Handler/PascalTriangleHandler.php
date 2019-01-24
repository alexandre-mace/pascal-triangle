<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 04/12/18
 * Time: 23:01
 */

namespace App\Handler;

use App\Service\PascalTriangleCalculator;
use Symfony\Component\Form\FormInterface;

class PascalTriangleHandler
{
    private $calculator;

    public function __construct(PascalTriangleCalculator $calculator)
    {
        $this->calculator = $calculator;
    }

    public function handle(FormInterface $form)
    {
        if ($form->isSubmitted() && $form->isValid()) {
            return [
                'status' => true,
                'result' => $this->calculator->calculate($form->getData()['ordinate'], $form->getData()['abscissa'])
            ];
        }
        return ['status' => false];
    }
}