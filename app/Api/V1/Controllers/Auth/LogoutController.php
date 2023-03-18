<?php

namespace App\Api\V1\Controllers\Auth;

use App\Http\Controllers\Controller;

class LogoutController extends Controller
{
    /**
     * Log the user out (Invalidate the token)
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke()
    {
        auth()->guard()->logout();
        return responder()->data(['status' => 200, 'message' => 'Logout success.']);
    }
}
