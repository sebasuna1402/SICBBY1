<?php 
	class DocumentacionI extends Controllers{
		public function __construct()
		{
			parent::__construct();
			session_start();
			//getPermisos(MDPAGINAS);
		}

        public function DocumentacionI()
        {
            if (empty($_SESSION['permisosMod']['r'])) {
                header("Location:" . base_url() . '/dashboard');
            }
            $data['page_tag'] = "DocumentacionI";
            $data['page_title'] = "Dodumentacion Interna";
            $data['page_name'] = "DocumentacionI";
            $data['page_functions_js'] = "functions_voluntarios.js";
            $this->views->getView($this, "DocumentacionI", $data);
        }
	}
 ?>
