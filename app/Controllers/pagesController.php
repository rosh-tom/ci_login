<?php namespace App\Controllers;

class pagesController extends BaseController
{


	public function login()
	{
		
		$data = [
			'title' => 'Login'
		];
		
		echo view('templates/header', $data);
		echo view('templates/navbar');
		echo view('pages/login');
		echo view('templates/footer.php');
	}

	public function home()
	{ 
		$data = [
			'title' => 'Home'
		];

		echo view('templates/header', $data);
		echo view('templates/navbar');
		echo view('pages/home');
		echo view('templates/footer.php');
	} 

	public function register()
	{ 
		helper(['form']);
		$data = [
			'title'=>'Register'
		]; 

		if($this->request->getMethod() == 'post')
		{
			$rules = [
 				// 'email'				=>	'is_unique[tbl.email]',
 				'password'			=>	'min_length[5]'	,
 				'password_confirm'	=>	'matches[password]'
 			];

 			if(! $this->validate($rules))
 			{
 				$data['validation'] = $this->validator;  
 			}
 			else
 			{ 
 				$postData = [
 				'firstname'	=>	$this->request->getPost('firstname'),
 				'lastname'	=>	$this->request->getPost('lastname'),
 				'email'		=>	$this->request->getPost('email'),
 				'password'	=>	$this->request->getPost('password')
 				];  	
 			} 
		} 


		
		echo view('templates/header', $data);
		echo view('templates/navbar');
		echo view('pages/register');
		echo view('templates/footer.php');
	}
 
}
	