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

	 public function profile(){
	 	 
	 	$data = [
	 		'title'	=>	'Profile'
	 	];


	 	helper(['form']);
	 	$id = session()->get('id');
	 	$model = new userModel();

	 	if($this->request->getMethod() == 'post')
	 	{
 
	 		$rules = [
	 			'firstname' => 'required',
	 		];

	 		if($this->request->getPost('password') != '')
	 		{
	 			$rules = [
	 				'password'	=>	'min_length[5]',
	 				'password_confirm'	=>	'matches[password]'  
	 			];
	 		  
	 			$upData['password']	= $this->request->getPost('password');
	 		}

	 		if(! $this->validate($rules))
	 		{
	 			$data['validation'] = $this->validator;

	 		}else{
	 			$upData = [
	 				'firstname' =>	$this->request->getPost('firstname'),
	 				'lastname'	=>	$this->request->getPost('lastname')
	 			];

	 			$model->wherein('user_id', [$id])->set($upData)->update();
	 			session()->setFlashdata('success', 'successfully Updated');

	 			return redirect()->to('/profile');
 
	 			}
 
	 	}
 

	 	$model = new userModel();

	 	$data['user'] = $model->where('user_id', session()->get('id'))->first();

	 	echo view('templates/header', $data);
	 	echo view('templates/navbar');
	 	echo view('pages/profile');
	 	echo view('templates/footer.php');
	 }


	 public function userlist(){
	 	$data = [
	 		'title'	=>	'List of Users'
	 	];

	 	$model = new userModel();

	 	$data['users'] = $model->findAll();

	 	echo view('templates/header', $data);
	 	echo view('templates/navbar');
	 	echo view('pages/userlist');
	 	echo view('templates/footer.php');
	 }

	 public function delete($id = null){ 

	 	if(session()->get('isLoggedIn')){ 
	 		$uri = service('uri'); 
		   	$id = $uri->getSegment(3);
		   	if($id != session()->get('id')){
	   			$model = new userModel();
			   	$model->where('user_id', [$id])->delete(); 
				session()->setFlashdata('success', 'Successfully Deleted. '); 
			   }else{ 
			   		session()->setFlashdata('failed', 'Loggedin Account Cannot be deleted. '); 
			   }


			   	return redirect()->to('/userlist'); 
	 	}else{
	 		session()->setFlashdata('illegal', 'Bulok. ');
	 		return redirect()->to('/login');
	 	}

	 }
 	 
}


	


 