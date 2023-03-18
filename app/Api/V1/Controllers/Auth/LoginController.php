<?php

namespace App\Api\V1\Controllers\Auth;

use App\Api\V1\Controllers\BaseController;
use App\Api\V1\Requests\Auth\LoginRequest;
use App\Exceptions\GeneralException;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Throwable;
use Illuminate\Support\Facades\Auth;

class LoginController extends BaseController
{
    /**
     * @param LoginRequest $request
     * @return JsonResponse
     * @throws Throwable
     */
    public function login(LoginRequest $request)
    {
        $credentials = $request->only(['email', 'password']);
        $token = Auth::attempt($credentials);

        if(!$token) {
            throw new GeneralException(config('error.credential_not_match'));
        }

        $isSavePassword = $request->get('save_password', false);

        $expiresInDate = 1/24;

        if($isSavePassword) {
            $expiresInDate = 30;
        }

        $expiresIn = auth()->guard()->factory()->getTTL() * 60 * 24 * $expiresInDate;

        return responder()->data([
            'token' => $token,
            'expires_in' => $expiresIn
        ]);
    }
}
