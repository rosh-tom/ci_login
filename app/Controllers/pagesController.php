<?php namespace App\Controllers;
	
	use App\Models\userModel;

		
class pagesController extends BaseController
{
 
 	// ===================================================================	Home  

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


// ======================================================================= Login 
	public function login()
	{		
		$data = [
			'title' => 'Login'
		];
		helper(['form']);
		 
		if($this->request->getMethod() == 'post')
		{
			$rules = [
				'email'	=>	'valid_email',
				'password'	=>	'validateUser[email, password]'
			];
			$errors = [
				'password'	=>	[
					'validateUser'	=>	'Email or Password did not match'
				]
			];

			if(! $this->validate($rules, $errors))
			{
				$data['validation'] = $this->validator; 
			}
			else
			{
				$model = new userModel();
				$user = $model->where('email', $this->request->getPost('email'))->first();
				$this->setUserSession($user);
				return redirect()->to('/dashboard');
			} 
		}
 
		echo view('templates/header', $data);
		echo view('templates/navbar');
		echo view('pages/login');
		echo view('templates/footer.php');
	}
// ============================================================================== Register

	public function register()
	{ 
		$session = session();
		helper(['form']);
		$data = [
			'title'=>'Register'
		];  

			if($this->request->getMethod() == 'post')
			{
				$rules = [
	 				'email'				=>	'is_unique[tbl_users.email]',
	 				'password'			=>	'min_length[5]'	,
	 				'password_confirm'	=>	'matches[password]'
	 			];

	 			if(! $this->validate($rules))
	 			{
	 				$data['validation'] = $this->validator;  
	 			}
	 			else
	 			{ 
	 				$model = new userModel();
	 				$postData = [
	 				'firstname'	=>	$this->request->getPost('firstname'),
	 				'lastname'	=>	$this->request->getPost('lastname'),
	 				'email'		=>	$this->request->getPost('email'),
	 				'password'	=>	$this->request->getPost('password')
	 				];  	

	 				$model->insert($postData);
	 				$session->setFlashdata('success', 'Successful Registration');
	 				return redirect()->to('/login');

	 			} 
			}  

		echo view('templates/header', $data);
		echo view('templates/navbar');
		echo view('pages/register');
		echo view('templates/footer.php');
	}




// ================================================================ FUNCTIONS 
	public function setUserSession($user)
	{
		$data = [
			'id'=>$user['user_id'], 
			'email'=>$user['email'],
			'isLoggedIn'=>true
		];

		session()->set($data);
		return true;

	}
   

 // =========== end 
}
