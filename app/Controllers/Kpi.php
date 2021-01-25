<?php namespace App\Controllers;
use App\Models\KpiModel;

class Kpi extends BaseController
{
	public function index()
	{
    $KpiModel = new KpiModel();
    $kpi = $KpiModel->getAllActiveKpi();
		$data = array(
			'kpi' => $kpi->getResult()
		);
		return view('kpi',$data);
  }
    
  public function new()
	{
		return view('kpi_new');
  }

  function input_kpi(){
		$KpiModel = new KpiModel();
		$data = array(
      'objective' => $this->request->getPost('objective'),
      'kpi' => $this->request->getPost('kpi'),
      'uom' => $this->request->getPost('uom'),
      'threshold' => $this->request->getPost('thr'),
      'target' => $this->request->getPost('target'),
      'max' => $this->request->getPost('max'),
      'weight' => $this->request->getPost('weight'),
      'ytd_method' => $this->request->getPost('ytdMethod'),
      'status' => 'Active',
      'created_by' => session()->get('userId'),
      'date_time_created' => date('Y-m-d H:i:s')
    );
		$insert = $KpiModel->add($data);

		if($insert){
      return redirect()->to(base_url('kpi')); 
		}
  }

  public function pica()
	{
		return view('pica');
  }

}
