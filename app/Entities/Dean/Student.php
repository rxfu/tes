<?php

namespace App\Entities\Dean;

use App\Entities\Dean\Model;

class Student extends Model
{
    public $table = 'xk_xsmm';

    public function profile()
    {
        return $this->hasOne('App\Entities\Dean\Profile', 'xh', 'xh');
    }
}
