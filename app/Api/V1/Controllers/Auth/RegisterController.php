<?php

namespace App\Api\V1\Controllers\Auth;

use App\Api\V1\Controllers\BaseController;
use App\Api\V1\Requests\Auth\RegisterRequest;
use App\Services\RegisterService;
use Illuminate\Http\Request;

class RegisterController extends BaseController
{
    /**
     * @var RegisterService $registerService
     */
    protected $registerService;

    /**
     * @param RegisterService $registerService
     */
    public function __construct(RegisterService $registerService)
    {
        $this->registerService = $registerService;
    }

    /** 
     * @param Request $request 
     * @return method
     */
    public function store(Request $request)
    {
        $data = $request->all();
        return $this->registerService->store($data);
    }

    /**
     * @param Request $request
     * @return method
     */
    public function register (Request $request) 
    {
        $data = $request->all();
        return $this->registerService->register($data); 
    }
}
