<?php 
namespace App\Controllers;
use App\Models\UserModel;

class Signup extends BaseController
{
	public function index()
	{
		return view('signup');
	}

	public function signup_process(){
		$UserModel = new UserModel();
		$email = $this->request->getPost('email');
		$name = $this->request->getPost('username');
		$password = md5($this->request->getPost('password'));
		
		$where = array(
			'email' => $email,
			'name' => $name,
			'password' => $password,
			'date_time_created' => date('Y-m-d H:i:s'),
			'status' => 'Active'
		);

		$register = $UserModel->add($where);
		if($register){
			return redirect()->to(site_url('login')); 
		}else{
			return redirect()->to(site_url('signup')); 
		}
	}
}
