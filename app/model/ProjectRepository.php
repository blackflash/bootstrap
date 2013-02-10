<?php

namespace Todo;

use Nette;



class ProjectRepository extends Repository
{


	public function getTable()
	{
		return $this->connection->query('SELECT * FROM project ');
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

	function getUsersByProject($tableName, $projectId){

		return $this->connection->query(" SELECT user_id FROM user_profile where project_id = " .$projectId)->fetchAll();
	}

}

