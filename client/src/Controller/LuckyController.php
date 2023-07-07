<?php

namespace App\Controller;

use Exception;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    public function __construct(){

    }
    /**
     * @throws Exception
     */
    #[Route('/lucky/number')]
    public function number(): Response
    {
        return new Response(random_int(0, 100));
    }

    /**
     * @throws Exception
     */
    #[Route('/lucky/numberHtml')]
    public function numberHtml(): Response
    {
        $number = random_int(0, 100);
        return $this->render('lucky/number.html.twig',
            [
                'number' => $number
            ]
        );
    }
}