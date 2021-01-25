<?php namespace App\Controllers;
use App\Models\MasterModel;

class Master extends BaseController
{
	public function department()
	{
        $MasterModel = new MasterModel();
        $department = $MasterModel->getAllActiveDepartment();
		$data = array(
			'department' => $department->getResult()
		);
        return view('master_department',$data);
    }

    public function new_department()
	{
		return view('master_department_new');
    }

    public function edit_department()
	{
		$MasterModel = new MasterModel();
        $deptId = $this->request->uri->getSegment(3);
		$department = $MasterModel->getDepartmentById($deptId);
		$data = array(
			'department' => $department->getResult()
		);
		return view('master_department_edit',$data);
    }

    function input_process_department(){
		$MasterModel = new MasterModel();
		$data = array(
            'name' => $this->request->getPost('deptName'),
            'status' => 'Active',
            'created_by' => session()->get('userId'),
            'date_time_created' => date('Y-m-d H:i:s')
        );
		$insert = $MasterModel->addDepartment($data);

		if($insert){
            return redirect()->to(base_url('master/department')); 
		}
    }

    public function edit_process_department()
	{		
        $MasterModel = new MasterModel();
		$deptId = $this->request->getPost('deptId');
		$data = array(
            'name' => $this->request->getPost('deptName'),
            'modified_by' => session()->get('userId'),
			'date_time_modified' => date('Y-m-d H:i:s')
        );
		$edit = $MasterModel->editDepartment($deptId,$data);

		if($edit){
            return redirect()->to(base_url('master/department')); 
		}
    }
    
    public function delete_department()
	{
        $MasterModel = new MasterModel();
		$deptId = $this->request->getPost('deptId');
		if($MasterModel->deleteDepartment($deptId)){
			return redirect()->to(base_url('master/department'));
		}
	}


	//job position

	public function job_position()
	{
        $MasterModel = new MasterModel();
        $jobPosition = $MasterModel->getAllActiveJobPosition();
		$data = array(
			'jobPosition' => $jobPosition->getResult()
		);
        return view('master_job_position',$data);
    }

    public function new_job_position()
	{
		return view('master_job_position_new');
    }

    public function edit_job_position()
	{
		$MasterModel = new MasterModel();
        $jobId = $this->request->uri->getSegment(3);
		$jobPosition = $MasterModel->getJobPositionById($jobId);
		$data = array(
			'jobPosition' => $jobPosition->getResult()
		);
		return view('master_job_position_edit',$data);
    }

    function input_process_job_position(){
		$MasterModel = new MasterModel();
		$data = array(
            'name' => $this->request->getPost('jobName'),
            'status' => 'Active',
            'created_by' => session()->get('userId'),
            'date_time_created' => date('Y-m-d H:i:s')
        );
		$insert = $MasterModel->addJobPosition($data);

		if($insert){
            return redirect()->to(base_url('master/job_position')); 
		}
    }

    public function edit_process_job_position()
	{		
        $MasterModel = new MasterModel();
		$jobId = $this->request->getPost('jobId');
		$data = array(
            'name' => $this->request->getPost('jobName'),
            'modified_by' => session()->get('userId'),
			'date_time_modified' => date('Y-m-d H:i:s')
        );
		$edit = $MasterModel->editJobPosition($jobId,$data);

		if($edit){
            return redirect()->to(base_url('master/job_position')); 
		}
    }
    
    public function delete_job_position()
	{
        $MasterModel = new MasterModel();
		$jobId = $this->request->getPost('jobId');
		if($MasterModel->deleteJobPosition($jobId)){
			return redirect()->to(base_url('master/job_position'));
		}
	}
}
