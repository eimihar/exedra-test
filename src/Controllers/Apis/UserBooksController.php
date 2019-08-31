<?php

namespace App\Controllers\Apis;

use Exedra\Routeller\Controller\Controller;

class UserBooksController extends Controller
{
    /**
     * List user books
     */
    public function get()
    {

    }

    /**
     * Add new book
     */
    public function post()
    {

    }

    /**
     * @path /:book-id
     */
    public function groupBook()
    {
        return UserBookController::class;
    }
}