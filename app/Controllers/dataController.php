<?php namespace App\Controllers;

class dataController extends BaseController
{
 	public function register(){

 		if($this->request->getMethod() == 'post')
 		{
 			helper(['form']);
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

 				// $postData = [
 				// 'firstname'	=>	$this->request->getPost('firstname'),
 				// 'lastname'	=>	$this->request->getPost('lastname'),
 				// 'email'		=>	$this->request->getPost('email'),
 				// 'password'	=>	$this->request->getPost('password')
 				// ];

 				
 			} 
 		} 
 	}
}
	