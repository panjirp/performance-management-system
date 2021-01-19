<?php namespace App\Controllers;
use App\Models\UserModel;

class Employee extends BaseController
{
	public function index()
	{
		$UserModel = new UserModel();
        $user = $UserModel->getAllActiveUser();
		$data = array(
			'user' => $user->getResult()
		);
		return view('employee',$data);
    }
    
    public function new()
	{
		return view('employee_new');
    }
    
    function input_process(){
		$UserModel = new UserModel();
		$data = array(
            'name' => $this->request->getPost('empName'),
            'password' => md5($this->request->getPost('password')),
            'emp_id' => $this->request->getPost('empId'),
            'email' => $this->request->getPost('email'),
            'birth_date' => $this->request->getPost('birthDate'),
            'entry_date' => $this->request->getPost('entryDate'),
            'status' => 'Active',
            'created_by' => session()->get('userId'),
            'date_time_created' => date('Y-m-d H:i:s')
        );
		$insert = $UserModel->add($data);

		if($insert){
            return redirect()->to(base_url('employee')); 
		}
    }
    
    public function edit()
	{
		$UserModel = new UserModel();
		$userId = $this->request->uri->getSegment(3);
		$user = $UserModel->getUserById($userId);
		$data = array(
			'user' => $user->getResult()
		);
		return view('employee_edit',$data);
    }
    
    public function edit_process()
	{		
        $UserModel = new UserModel();
		$userId = $this->request->getPost('userId');
		$data = array(
            'name' => $this->request->getPost('empName'),
            'password' => md5($this->request->getPost('password')),
            'emp_id' => $this->request->getPost('empId'),
            'email' => $this->request->getPost('email'),
            'birth_date' => $this->request->getPost('birthDate'),
            'entry_date' => $this->request->getPost('entryDate'),
            'modified_by' => session()->get('userId'),
			'date_time_modified' => date('Y-m-d H:i:s')
        );
		$edit = $UserModel->editUser($userId,$data);

		if($edit){
            return redirect()->to(base_url('employee')); 
		}
	}

	public function delete()
	{
        $UserModel = new UserModel();
		$userId = $this->request->getPost('userId');
		if($UserModel->deleteUser($userId)){
			return redirect()->to(base_url('employee'));
		}
	}

}
