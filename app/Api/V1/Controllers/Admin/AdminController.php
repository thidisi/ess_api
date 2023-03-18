<?php

namespace App\Api\V1\Controllers\Admin;

use App\Api\V1\Controllers\BaseController;
use App\Services\Admin\AdminService;
use Illuminate\Http\Request;

class AdminController extends BaseController
{
    /**
     * @var AdminService 
     */
    protected $adminService;

    /**
     * @param AdminService $adminService
     */
    public function __construct(AdminService $adminService)
    {
        $this->adminService = $adminService;
    }

    public function index()
    {
        $data = $this->adminService->getAdminDetai();
        return responder()->data($data);
    }

    /**
     * @param Request $request
     */
    public function updateAdmin(Request $request)
    {
        $param = $request->all();
        $update = $this->adminService->updateAdmin($param);
        return responder()->updated($update);
    }
}
