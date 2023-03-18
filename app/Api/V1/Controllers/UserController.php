<?php

namespace App\Api\V1\Controllers;

use App\Models\User;
use App\Services\UserService;
use App\Transformers\UserDetailTransformer;

class UserController extends BaseController
{
    /**
     * @var UserService
     */
    protected $userService;

    /**
     * UserController constructor.
     * @param UserService $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * @param null
     * @return JsonResponse|mixed
     * @throws Throwable
     */
    public function getProfile()
    {
        $aryInfoUser = $this->userService->getInfo();

        return responder()->data($aryInfoUser, new UserDetailTransformer);
    }
}
