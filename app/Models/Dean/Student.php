<?php

namespace App\Models\Dean;

use App\Models\Dean\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Student extends Model implements AuthenticatableContract
{
    use Authenticatable;
    
    protected $table = 'xk_xsmm';

    public $incrementing = false;

    public $timestamps = false;

    protected $primaryKey = 'xh';

    /**
     * 获取密码
     * @author FuRongxin
     */
    public function getAuthPassword()
    {
        return $this->mm;
    }

    /**
     * 获取remember token
     * @author FuRongxin
     */
    public function getRememberToken()
    {
        return null;
    }

    /**
     * 设置remember token
     * @author FuRongxin
     */
    public function setRememberToken($value)
    {
    }

    /**
     * 获取remember token名
     * @author FuRongxin
     */
    public function getRememberTokenName()
    {
        return null;
    }

    /**
     * 覆盖原方法，忽略remember token
     * @author FuRongxin
     */
    public function setAttribute($key, $value)
    {
        if ($key != $this->getRememberTokenName()) {
            parent::setAttribute($key, $value);
        }
    }

    public function profile()
    {
        return $this->hasOne('App\Models\Dean\Profile', 'xh', 'xh');
    }
}
