<?php

namespace App\Controller;

use App\Service\PersonService;
use Exception;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonController extends AbstractController
{

    public function __construct(private PersonService $service){

    }
    /**
     * @throws Exception
     */
    #[Route('/people')]
    public function people(): Response
    {

        return new Response('user/notifications.html.twig');
    }
}