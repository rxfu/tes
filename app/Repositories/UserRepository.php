<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository extends Repository
{
    public function __construct(User $user)
    {
        $this->object = $user;
    }
}
