<?php namespace App\Models;

use CodeIgniter\Model;

class userModel extends Model{
	protected $table = 'tbl_users';
	protected $allowedFields = ['firstname', 'lastname', 'email', 'password'];
	protected $beforeInsert = ['beforeInsert'];
	protected $beforeUpdate = ['beforeUpdate'];

	public function beforeInsert(array $data)
	{
		$data = $this->passwordHash($data);
		return $data;

	}

	public function beforeUpdate(array $data)
	{
		$data = $this->passwordHash($data);
		return $data;
	}

	// ============================================ FUNCTIONS
	public function passwordHash(array $data)
	{
		if(isset($data['data']['password']))
		{
			$data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
		}
		return $data;

	}
}