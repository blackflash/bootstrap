<?php

namespace Todo;

use Nette;
use Nette\Application\UI\Form;
use Nette\Application\BadRequestException;
use Nette\Application\ForbiddenRequestException;



class GeneralRepository extends Repository
{

	/**
	 * Vrací seznam nehotových úkolů.
	 * @return Nette\Database\Table\Selection
	 */
	public function findIncomplete()
	{
		return $this->findBy(array('done' => false))->order('created ASC');
	}
	
	public function getByTable($tableName){
		return $this->connection->table($tableName);
	}

	public function getCountOfRowsByTable($tableName){
		return $this->connection->table($tableName)->count();
	}

	public function getByTableAndId($tableName,$column, $gallery_id){
		return $this->connection->table($tableName)->where(array($column => $gallery_id));
	}

	public function getByTableAndIdWithOrder($tableName,$column, $gallery_id,$orderColumnName,$ordering){
		return $this->connection->table($tableName)->where(array($column => $gallery_id))->order($orderColumnName,$ordering);
	}

	public function getLastInsertedId($table,$column){
		return $this->connection->table($table)->max($column);
	}

	public function findBy(array $by)
	{
		return $this->getTable()->where($by);
	}

	public function updateTableById($tableName, $rowName, $rowId, $data)
	{
		return $this->connection->table($tableName)->where($rowName,$rowId)->update($data);
	}

	public function deleteRowByTableAndId($tableName,$column,$value){
		return $this->connection->table($tableName)->where(array($column => $value))->delete();
	}

}
