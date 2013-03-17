<?php

namespace Todo;

use Nette;



class UserRepository extends Repository
{


	/**
	 * @return Nette\Database\Table\ActiveRow
	 */
	public function findByName($username)
	{
		return $this->findBy("user",array('username' => $username))->fetch();
	}

	public function getAllUsers()
	{
		return $this->getTable();
	}

	public function insertRowByTable($table, $data)
	{	
		$this->connection->query('INSERT INTO '.$table,
			$data
		);
	}

	public function deleteRowByColumn($table, $column, $value){
		$this->connection->table($table)->where($column, $value)->delete();
	}

}
