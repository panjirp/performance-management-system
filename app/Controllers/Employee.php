<?php namespace App\Controllers;
use App\Models\UserModel;
use App\Models\MasterModel;

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
		$UserModel = new UserModel();
		$MasterModel = new MasterModel();
		$department = $MasterModel->getAllActiveDepartment();
		$jobPosition = $MasterModel->getAllActiveJobPosition();
        $user = $UserModel->getAllActiveUser();
		$data = array(
			'department' => $department->getResult(),
			'jobPosition' => $jobPosition->getResult(),
			'user' => $user->getResult()
		);
		return view('employee_new',$data);
    }
    
    function input_process(){
		$UserModel = new UserModel();
		$data = array(
            'name' => $this->request->getPost('empName'),
            'password' => md5($this->request->getPost('password')),
            'emp_id' => $this->request->getPost('empId'),
            'master_department_id' => $this->request->getPost('departmentId'),
            'master_position_id' => $this->request->getPost('jobPositionId'),
            'email' => $this->request->getPost('email'),
            'birth_date' => $this->request->getPost('birthDate'),
            'entry_date' => $this->request->getPost('entryDate'),
            'status' => 'Active',
            'created_by' => session()->get('userId'),
            'date_time_created' => date('Y-m-d H:i:s')
        );
		$insert = $UserModel->add($data);
		if(null != $this->request->getPost('bossId')){
			$data2 = array(
				'user_id' => $insert, 
				'user_boss_id' => $this->request->getPost('bossId'),
				'status' => 'Active',
				'created_by' => session()->get('userId'),
				'date_time_created' => date('Y-m-d H:i:s')
			);
			$insert2 = $UserModel->addUserBoss($data2);
		}

		if($insert){
            return redirect()->to(base_url('employee')); 
		}
    }
    
    public function edit()
	{
		$UserModel = new UserModel();
		$MasterModel = new MasterModel();
		$userId = $this->request->uri->getSegment(3);
		$user = $UserModel->getUserById($userId);
		$userBoss = $UserModel->getUserBoss($userId);
		$allUser = $UserModel->getAllActiveUser();
		$department = $MasterModel->getAllActiveDepartment();
		$jobPosition = $MasterModel->getAllActiveJobPosition();
		$data = array(
			'department' => $department->getResult(),
			'jobPosition' => $jobPosition->getResult(),
			'user' => $user->getResult(),
			'userBoss' => $userBoss->getResult(),
			'allUser' => $allUser->getResult()
		);
		return view('employee_edit',$data);
    }
    
    public function edit_process()
	{		
        $UserModel = new UserModel();
		$userId = $this->request->getPost('userId');
		$data = array(
            'name' => $this->request->getPost('empName'),
            //'password' => md5($this->request->getPost('password')),
            'emp_id' => $this->request->getPost('empId'),
            'master_department_id' => $this->request->getPost('departmentId'),
            'master_position_id' => $this->request->getPost('jobPositionId'),
            'email' => $this->request->getPost('email'),
            'birth_date' => $this->request->getPost('birthDate'),
            'entry_date' => $this->request->getPost('entryDate'),
            'modified_by' => session()->get('userId'),
			'date_time_modified' => date('Y-m-d H:i:s')
        );
		$edit = $UserModel->editUser($userId,$data);
		if(null != $this->request->getPost('bossId')){
			$data2 = array(
				'user_boss_id' => $this->request->getPost('bossId'),
				'modified_by' => session()->get('userId'),
				'date_time_modified' => date('Y-m-d H:i:s')
			);
			$edit2 = $UserModel->editUserBoss($userId,$data2);
		}

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
