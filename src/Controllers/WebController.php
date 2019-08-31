<?php

namespace App\Controllers;

use App\Context;
use Exedra\Routeller\Controller\Controller;

class WebController extends Controller
{
    /**
     * @path /
     */
    public function getIndex(Context $context)
    {
        return $context->twig->render('index.twig');
    }

    /**
     * @path /about
     */
    public function getAbout(Context $context)
    {
        return $context->twig->render('about.twig');
    }

    /**
     * @path /admin
     */
    public function groupAdmin()
    {
        return AdminController::class;
    }
}