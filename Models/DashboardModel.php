<?php 
	class DashboardModel extends Mysql
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function cantUsuarios(){
			$sql = "SELECT COUNT(*) as total FROM persona WHERE status != 0";
			$request = $this->select($sql);
			$total = $request['total']; 
			return $total;
		}

		public function cantVoluntarios(){
			$sql = "SELECT COUNT(*) as total FROM volunteers";
			$request = $this->select($sql);
			$total = $request['total']; 
			return $total;
		}



	


	}
 ?>