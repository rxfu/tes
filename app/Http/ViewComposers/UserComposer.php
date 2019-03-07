<?php

namespace App\Http\ViewComposers;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class UserComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $sessionGuard = explode('_', Auth::guard()->getName());
        $guard = $sessionGuard[1];

        $name = ('student' === $guard) ? Auth::user()->profile->xm : Auth::user()->name;

        $view->with(compact('guard', 'name'));
    }
}
