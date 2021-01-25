<?php 
namespace App\Controllers;
use App\Models\LoginModel;

class Login extends BaseController
{
	public function index()
	{
		return view('login');
	}

	public function login_process(){
		$LoginModel = new LoginModel();
		$email = $this->request->getPost('email');
		$password = md5($this->request->getPost('password'));
		
		$where = array(
			'email' => $email,
			'password' => $password
		);

		$cek = $LoginModel->cek_login($where);
		if(count($cek->getResult()) > 0){
 
			$data_session = array(
				'userId' => $cek->getResult()[0]->id,
				'email' => $email,
				'name' => $cek->getResult()[0]->name,
				'status' => "login"
			);
 
			$this->session->set($data_session);
			return redirect()->to(site_url('home')); 
		}else{
			return redirect()->to(site_url('login')); 
		}
	}

	function logout(){
		$this->session->destroy();
		return redirect()->to(site_url('login')); 
	}

	public function forgot_password()
	{
		return view('forgot_password');
	}

}
