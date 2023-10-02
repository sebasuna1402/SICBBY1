<?php 
	class DocumentacionE extends Controllers{
		public function __construct()
		{
			parent::__construct();
			session_start();
			//getPermisos(MDPAGINAS);
		}

        public function DocumentacionE()
        {
            if (empty($_SESSION['permisosMod']['r'])) {
                header("Location:" . base_url() . '/dashboard');
            }
            $data['page_tag'] = "DocumentacionE";
            $data['page_title'] = "Dodumentacion Externa";
            $data['page_name'] = "DocumentacionE";
            $data['page_functions_js'] = "functions_voluntarios.js";
            $this->views->getView($this, "DocumentacionE", $data);
        }
	}
 ?>
