<?php

namespace App\Controllers;

class User extends BaseController
{
	protected $userModel;

	protected $db, $builder;

	public function __construct()
	{
		$this->db = \Config\Database::connect();
		$this->builder = $this->db->table('users');
	}

	public function index()
	{
		$this->builder->select('users.id as id_user, username, email, name');
		$this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
		$this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
		$query = $this->builder->get();

		$data = [
			'title' => 'User List',
			'navbar' => 'user',
			'users' => $query->getResult()
		];
		return view('user/index', $data);
	}
}