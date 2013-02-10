<?php

namespace Todo;

use Nette;
use Nette\Application\UI\Form;
use Nette\Application\BadRequestException;
use Nette\Application\ForbiddenRequestException;



class TaskRepository extends Repository
{

	/**
	 * Vrací seznam nehotových úkolů.
	 * @return Nette\Database\Table\Selection
	 */
	public function findIncomplete()
	{
		return $this->findBy(array('done' => false))->order('created ASC');
	}

	public function getTable()
	{
		return $this->connection->query('SELECT * FROM task ');
	}


	/**
	 * @return Nette\Database\Table\Selection
	 */
	public function findIncompleteByUser($userId)
	{
		return $this->findIncomplete()->where(array(
			'user_id' => $userId
		));
	}


	/**
	 * @param int $listId
	 * @param string $task
	 * @param int $assignedUser
	 * @return Nette\Database\Table\ActiveRow
	 */
	public function createTask($description)
	{
		return $this->connection->query('
			INSERT INTO `tswp`.`task` (`id`, `text`, `created`, `done`, `user_id`, `project_id`, `list_id`) VALUES
			 (NULL, "'.$description.'", CURRENT_TIMESTAMP ,0,2,1,2)');

	}

	public function findBy(array $by)
	{
		return $this->getTable()->where($by);
	}


	/**
	 * @param int $id
	 */
	public function markDone($id,$value)
	{
		//$this->findBy(array('id' => $id))->update(array('done' => $value));
		return $this->connection->query('
			UPDATE task
			SET done = '.$value.'
			WHERE id = '.$id
		);
	}

}
