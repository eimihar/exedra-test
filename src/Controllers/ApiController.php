<?php

namespace App\Controllers;

use App\Context;
use App\Controllers\Apis\UsersController;
use Exedra\Routeller\Controller\Controller;

class ApiController extends Controller
{
    public function middlewareJson(Context $context)
    {
        try {
            $response = $context->next($context);

            if (is_array($response)) {
                $response = array('data' => $response);
            } else {
                $response = array('error' => 'Internal error');
            }
        } catch (\Exception $e) {
            $response = array('error' => $e->getMessage());
        }

        return json_encode($response);
    }

    /**
     * @path /users
     */
    public function groupUsers()
    {
        return UsersController::class;
    }

    /**
     * @path /404
     * @asFailRoute true
     */
    public function get404()
    {
        throw new \Exception('Invalid Endpoint');
    }
}