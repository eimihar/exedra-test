<?php

namespace App\Controllers\Apis;

use Exedra\Routeller\Controller\Controller;

class UsersController extends Controller
{
    /**
     * List users
     * @path /
     */
    public function get()
    {
    }

    /**
     * Add user
     * @path /
     */
    public function post()
    {
    }

    /**
     * @path /:id
     */
    public function groupUser()
    {
        return UserController::class;
    }
}