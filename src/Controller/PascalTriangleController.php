<?php

namespace App\Controller;

use App\Form\PascalTriangleType;
use App\Handler\PascalTriangleHandler;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PascalTriangleController extends AbstractController
{
    /**
     * @Route("/", name="calculate")
     */
    public function index(Request $request, PascalTriangleHandler $handler)
    {
        $form = $this->createForm(PascalTriangleType::class)->handleRequest($request);
        $payload = $handler->handle($form);
        if ($payload['status']) {
            return $this->render('pascal-triangle/index.html.twig', [
                'form' => $form->createView(),
                'result' => $payload['result']
            ]);
        }
        return $this->render('pascal-triangle/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
