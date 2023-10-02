<?php

class Voluntarios extends Controllers
{
	public function __construct()
	{
		parent::__construct();
		session_start();
		if (empty($_SESSION['login'])) {
			header('Location: ' . base_url() . '/login');
			die();
		}
	}

	public function Voluntarios()
	{
		if (empty($_SESSION['permisosMod']['r'])) {
			header("Location:" . base_url() . '/dashboard');
		}
		$data['page_tag'] = "Voluntarios";
		$data['page_title'] = "VOLUNTARIOS";
		$data['page_name'] = "voluntarios";
		$data['page_functions_js'] = "functions_voluntarios.js";
		$this->views->getView($this, "voluntarios", $data);
	}


	public function setVoluntario1()
	{
		dep($_POST);
		die();
	}


	
	public function setVoluntario()
	{
		// Configura el encabezado para indicar que se envía una respuesta JSON
        //header('Content-Type: application/json');
		//header("Content-type: application/x-www-form-urlencoded");
		if ($_POST) {
			if (empty($_POST['txtIdentificacion']) || empty($_POST['txtNombre']) || empty($_POST['txtApellido']) || empty($_POST['txtEmail']) || empty($_POST['txtDireccion']) || empty($_POST['txtEdad']) || empty($_POST['txtMensaje']) || empty($_POST['txtTelefono']) || empty($_POST['txtOcupacion'])) {
				$arrResponse = array("status" => false, "msg" => 'Datos incorrectos.');
			} else {
				$idVoluntario = intval($_POST['celCodigo']);
				$strIdentificacion = strClean($_POST['txtIdentificacion']);
				$strNombre = ucwords(strClean($_POST['txtNombre']));
				$strApellido = ucwords(strClean($_POST['txtApellido']));
				$strEmail = strtolower(strClean($_POST['txtEmail']));
				$strDireccion = ucwords(strClean($_POST['txtDireccion']));
				$intEdad = intval(strClean($_POST['txtEdad']));
				$strMensaje = ucwords(strClean($_POST['txtMensaje']));
				$strOcupacion = strtolower(strClean($_POST['txtOcupacion']));
				$intTelefono = intval(strClean($_POST['txtTelefono']));
				$request_voluntario = "";
				if ($idVoluntario == 0) {
					$option = 1;
					if ($_SESSION['permisosMod']['w']) {
						$request_user = $this->model->insertVoluntario(
							$strIdentificacion,
							$strNombre,
							$strApellido,
							$strEmail,
							$strDireccion,
							$intEdad,
							$strMensaje,
							$strOcupacion,
							$intTelefono
							

						);
					}
				} else {
					$option = 2;

					if ($_SESSION['permisosMod']['u']) {
						$request_user = $this->model->updateVoluntario(
							$idVoluntario,
							$strIdentificacion,
							$strNombre,
							$strApellido,
							$strEmail,
							$strDireccion,
							$intEdad,
							$strMensaje,
							$intTelefono,
							$strOcupacion

						);
					}

				}


				if ($request_voluntario > 0) {
					if ($option == 1) {
						$arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
					} else {
						$arrResponse = array('status' => true, 'msg' => 'Datos Actualizados correctamente.');
					}
				} else if ($request_user == 'exist') {
					$arrResponse = array('status' => false, 'msg' => '¡Atención! el email o la identificación ya existe, ingrese otro.');
				} else {
					$arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
				}
			}
			echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
		}
		die();
	}


	public function getVoluntarios()
	{
		if ($_SESSION['permisosMod']['r']) {
			$arrData = $this->model->selectVoluntarios();
			for ($i = 0; $i < count($arrData); $i++) {
				$btnView = '';
				$btnEdit = '';
				$btnDelete = '';
				if ($_SESSION['permisosMod']['r']) {
					$btnView = '<button class="btn btn-info btn-sm btnViewVoluntario" onClick="fntViewVoluntario(' . $arrData[$i]['id'] . ')" title="Ver voluntario"><i class="far fa-eye"></i></button>';
				}
				// if ($_SESSION['permisosMod']['u']) {
				// 	$btnEdit = '<button class="btn btn-primary  btn-sm btnEditVoluntario" onClick="fntEditVoluntario(this,' . $arrData[$i]['id'] . ')" title="Editar voluntario"><i class="fas fa-pencil-alt"></i></button>';
				// }
				if ($_SESSION['permisosMod']['d']) {
					$btnDelete = '<button class="btn btn-danger btn-sm btnDelVoluntario" onClick="fntDelVoluntario(' . $arrData[$i]['id'] . ')" title="Eliminar voluntario"><i class="far fa-trash-alt"></i></button>';
				}
				$arrData[$i]['options'] = '<div class="text-center">' . $btnView . ' ' . $btnEdit . ' ' . $btnDelete . '</div>';
			}
			echo json_encode($arrData, JSON_UNESCAPED_UNICODE);
		}
		die();
	}



	public function getVoluntario($idv)
	{
		if ($_SESSION['permisosMod']['r']) {
			$idVoluntario = intval($idv);
			if ($idVoluntario > 0) {
				$arrData = $this->model->selectVoluntario($idVoluntario);
				if (empty($arrData)) {
					$arrResponse = array('status' => false, 'msg' => 'Datos no encontrados.');
				} else {
					$arrResponse = array('status' => true, 'data' => $arrData);
				}
				echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
			}
		}
		die();
	}


	public function delVoluntario()
	{
		if ($_POST) {
			if ($_SESSION['permisosMod']['d']) {
				$intIdVoluntario = intval($_POST['id']);
				$requestDelete = $this->model->deleteVoluntario($intIdVoluntario);
				if ($requestDelete) {
					$arrResponse = array('status' => true, 'msg' => 'Se ha eliminado el voluntario');
				} else {
					$arrResponse = array('status' => false, 'msg' => 'Error al eliminar el voluntario.');
				}
				echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
			}
		}
		die();
	}


	public function getMensaje($idmensaje)
	{
		if ($_SESSION['permisosMod']['r']) {
			$idmensaje = intval($idmensaje);
			if ($idmensaje > 0) {
				$arrData = $this->model->selectMensaje($idmensaje);
				if (empty($arrData)) {
					$arrResponse = array('status' => false, 'msg' => 'Datos no encontrados.');
				} else {
					$arrResponse = array('status' => true, 'data' => $arrData);
				}
				echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
			}
		}
		die();
	}

}
?>