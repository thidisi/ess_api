<?php

namespace App\Services;

use App\Jobs\SendMailRegister;
use App\Jobs\SendMailRequestRegister;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterService extends BaseService
{

    /**
     * @var $userMaster
     */
    protected $userMaster;

    public function __construct(User $userMaster)
    {
        $this->userMaster = $userMaster;
    }

    /**
     * @param $data
     * @return Responder
     */
    public function store($data)
    {
        DB::beginTransaction();
        try {
            $this->userMaster->create([
                'name' => $data['name'],
                'email' => $data['email'],
                'type' => User::TYPE_USER,
                'phone' => $data['phone'],
                'birthday' => $data['birthday'],
                'password' => $data['password'],
                'access_token' => Str::uuid()->toString(),
                'updated_at' => now()
            ]);

            DB::commit();
            return responder()->created();
        } catch (Exception $exc) {
            DB::rollBack();
            dd($exc->getMessage());
        }
    }
}
