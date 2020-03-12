<?php

class database{
	private $db = [
		'host' => 'localhost',
		'username' => 'root',
		'password' => '',
		'database' => 'restoputri'
	];

	public function db(){
		return $this->db;

	}
}