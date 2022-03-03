<?
	class Regi
	{
		private $db_con;
		function __construct($db_con)
		{
			$this->db_con = $db_con;
		}
		public function registration(&$data)
		{
			if($data['password'] == $data['rpassword'])
        	{
	            $name = $data['name'];
	            $login = trim($data['login']);
	            $rpassword = md5($data['rpassword']);
	            $query = "INSERT INTO `people`(`ID_person`, `name`, `login`, `password`) VALUES (NULL, '$name', '$login', '$rpassword')";
	            $insert = mysqli_query($this->db_con, $query);
	            echo "Вы зарегистрировались!";
        	}
        	else 
            	echo 'Пароли должны быть одинаковыми';
		}
	}
?>	