<?php namespace App\Controllers;

use App\Models\userModel;

class userController extends BaseController
{
  
	 public function dashboard()
	 {

	 	$data = [
	 		'title'	=>	'Dashboard'
	 	];
	 	$model = new userModel();

	 	$data['user'] = $model->where('user_id', session()->get('id'))->first();

	 	echo view('templates/header', $data);
		echo view('templates/navbar');
		echo view('pages/dashboard');
		echo view('templates/footer.php');
	 }


	 public function logout(){
	 	session()->destroy();  
	 	return redirect()->to('/login');
	 }
 	 
}


	


 