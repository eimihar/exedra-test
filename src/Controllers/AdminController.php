<?php

namespace App\Controllers;

use App\Context;
use Exedra\Routeller\Controller\Controller;

class AdminController extends Controller
{
    /**
     * @path /login
     */
    public function getLogin(Context $context)
    {
        return $context->twig->render('admin/login.twig');
    }
}