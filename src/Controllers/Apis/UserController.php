<?php

namespace App\Controllers\Apis;

use App\Context;
use Exedra\Routeller\Controller\Controller;

class UserController extends Controller
{
    public function get(Context $context)
    {
        return [
            'id' => $context->param('id'),
            'name' => 'eimihar',
            'country' => 'MY'
        ];
    }

    public function post()
    {
    }

    public function delete()
    {
    }

    /**
     * @path /books
     */
    public function groupBooks()
    {
        return UserBooksController::class;
    }
}