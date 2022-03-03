<?
	class Auto
	{
		private $select_array;
		private $names;
		private $logins;
		private $passwords;
 		function __construct($select_array)
		{
			$this->select_array = $select_array;
		}
		public function filling()
		{
			foreach($this->select_array as $key) 
			{
		        foreach($key as $value => $item)
		        {
		            switch ($value) 
		            {
		                case 'name':
		                    $this->names[] = $item;
		                    break;
		                case 'login':
		                    $this->logins[] = $item;
		                    break;
		                case 'password':
		                    $this->passwords[] = $item;
		                    break;    
		                default:
		                    break;
		            }
		        }
	    	}
		}

		public function check(&$data)
		{	
			for($i = 0; $i < count($this->logins); $i++)
            {
                if(trim($data['login']) == $this->logins[$i] && md5($data['password']) == $this->passwords[$i])
                {
                    $new_url = 'hello.php';
                    setcookie('name', strtoupper($this->names[$i]), time() + 600);
                    header('Location: ' . $new_url);
                    exit();
                }
                else
                {
                    continue;
                }
            }
		}
	}
?>