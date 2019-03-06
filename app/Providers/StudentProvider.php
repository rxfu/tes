<?php

namespace App\Providers;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Contracts\Auth\Authenticatable as UserContract;

class StudentProvider extends EloquentUserProvider
{
    public function __construct($model) {
        $this->model = $model;
    }

    /**
     * 覆盖原方法，验证用户密码
     */
    public function validateCredentials(UserContract $user, array $credentials) {
        return $user->getAuthPassword() === $credentials['mm'];
    }
}
