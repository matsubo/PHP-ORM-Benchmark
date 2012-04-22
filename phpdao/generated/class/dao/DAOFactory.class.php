<?php

/**
 * DAOFactory
 * @author: http://phpdao.com
 * @date: ${date}
 */
class DAOFactory{
	
	/**
	 * @return AuthorDAO
	 */
	public static function getAuthorDAO(){
		return new AuthorMySqlExtDAO();
	}


}
?>