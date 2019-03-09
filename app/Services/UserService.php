<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;

class UserService extends Service
{

    public function __construct(UserRepository $users)
    {
        $this->repository = $users;
    }

    public function changePassword($oldPassword, $newPassword, $confirmedPassword)
    {
        $credentials = [
            'username' => Auth::user()->username,
            'password' => $oldPassword,
        ];

        if (Auth::attempt($credentials)) {
            if ($newPassword === $confirmedPassword) {
                $this->repository->update(Auth::user()->id, ['password' => bcrypt($newPassword]));
            }
        }
    }
}
