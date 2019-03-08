<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ChangePasswordRequest;
use App\Services\UserService;

class UserController extends AdminController {

	private $service;

	public function __construct(UserService $userService) {
		$this->service = $userService;
	}

	public function password() {
		return view('admin.password');
	}

	public function changePassword(ChangePasswordRequest $request) {
		$status = [
			'status' => '',
			'info' => '',
		];

		try {
			if ($request->isMethod('put')) {
				list($old, $password, $confirmed) = array_values($request->only('old_password', 'password', 'password_confirmation'));
		
				$this->service->changePassword($old, $password, $confirmed);
				$status = [
					'status' => 'success',
					'info' => '成功',
				];
			}
		} catch (Exception $e) {
			$status = [
				'status' => 'danger',
				'info' => '失败',
			];

			dd($e);
		}

		$request->session()->flash($status['status'], $status['info']);
		return back();
	}
}
