<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
	public function up()
	{
		$this->forge->addfield([
			'user_id'	=>	[
						'type'			=>	'INT',
						'constraint'	=>	11,
						'unsigned'		=>	true,
						'auto_increment'=>	true		
						],
			'firstname'	=>	[
						'type'			=>	'VARCHAR',
						'constraint'	=>	'50', 
						],
			'lastname'	=>	[
						'type'			=> 'VARCHAR',
						'constraint'	=>	'50'
						],
			'email'		=>	[
						'type'			=>	'VARCHAR',
						'constraint'	=>	'50'
						],
			'password'	=>	[
						'type'			=>	'VARCHAR',
						'constraint'	=>	'255'
						],
			'created_at datetime default current_timestamp',
			'updated_at datetime default current_timestamp on update current_timestamp' 
		]);

		$this->forge->addKey('user_id', true);
		$this->forge->createTable('tbl_users');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('tbl_users');
	}
}
