<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MicroController extends Controller
{
    /**
     * @param int $version
     *
     * @return Response
     */
    public function helloSymfony($version)
    {
        return new Response('Hi Symfony version '.$version);
    }
}
