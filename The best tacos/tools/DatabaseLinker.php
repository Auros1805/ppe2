<?php
	class DatabaseLinker
	{
		private static $URL = 'mysql:host=localhost;dbname=tacos;charset=utf8';
		private static $id = 'root';
		private static $mdp = 'root';
		private static $PDO;

		
		public static function getConnexion()
		{
                        $url = $_SERVER['SERVER_NAME'];
                        if($url == "sio.jbdelasalle.com")
                        {
                            $URL = 'mysql:host=192.168.153.10:3306;dbname=201819_base03_hdenise;charset=utf8';
                            $id = 'hdenise';
                            $mdp = 'btssio';
                            $PDO;
                            DatabaseLinker::$PDO = new PDO($URL, $id, $mdp);
                        }
                        else
                        {
                            if(empty(DatabaseLinker::$PDO))
                            {
                            	DatabaseLinker::$PDO = new PDO(DatabaseLinker::$URL, DatabaseLinker::$id, DatabaseLinker::$mdp);
                            }
                        }    
                        return DatabaseLinker::$PDO;
		}
	}
?>