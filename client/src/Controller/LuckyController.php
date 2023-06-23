<?php

namespace App\Controller;

use Exception;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{

    public function __construct(private LoggerInterface $logger){

    }
    /**
     * @throws Exception
     */
    #[Route('/lucky/number')]
    public function number(): Response
    {
        $this->logger->info('I love Tony Vairelles\' hairdresser.');
        return new Response(random_int(0, 100));
    }
}