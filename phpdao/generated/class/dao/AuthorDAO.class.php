<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2011-01-20 18:48
 */
interface AuthorDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Author 
	 */
	public function load($id);

	/**
	 * Get all records from table
	 */
	public function queryAll();
	
	/**
	 * Get all records from table ordered by field
	 * @Param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn);
	
	/**
 	 * Delete record from table
 	 * @param author primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Author author
 	 */
	public function insert($author);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Author author
 	 */
	public function update($author);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByName($value);

	public function queryByPassword($value);


	public function deleteByName($value);

	public function deleteByPassword($value);


}
?>