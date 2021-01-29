<?php 
namespace App\Controllers;
use App\Models\ThreeSixtyModel;

class Threesixty extends BaseController
{
	public function index()
	{
        $ThreeSixtyModel = new ThreeSixtyModel();
        $stakeholder = $ThreeSixtyModel->getStackholders(session()->get('userId'));
		$data = array(
			'stakeholder' => $stakeholder->getResult()
		);
		return view('threesixty',$data);
	}

}
