<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserService extends BaseService
{

    //get information in user logged
    public function getInfo(): object
    {
        return auth()->user();
    }

    /**
     * @param User $user, $params
     * @return JsonResponse|mixed
     * @throws Throwable
     */
    public function update(User $user, array $params): bool
    {
        $idUser = Auth::id();
        $aryInfoUser = $user->where('id', $idUser)->update($params);
        return $aryInfoUser;
    }

    public function changePassword(User $user, array $params): bool
    {
        $idUser = Auth::id();
        $strPasswordUser = Auth::user()->password;
        $aryParams['password'] = password_hash($params['new_password'], PASSWORD_DEFAULT);
        $statusCheckPass = Hash::check($params['old_password'], $strPasswordUser);
        $aryInfoUser = false;
        if ($statusCheckPass && $params['new_password'] === $params['pre_password']) {
            $aryInfoUser = $user->where('id', $idUser)->update([
                'password' => Hash::make($params['new_password'])
            ]);
        }
        return $aryInfoUser ? true : false;
    }
}
