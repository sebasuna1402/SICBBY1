<?php

class VoluntariosModel extends Mysql
{


	private $intId;
	private $strIdentificacion;
	private $strNombre;
	private $strApellido;
	private $strEmail;
	private $strDireccion;
	private $intEdad;
	private $strMensaje;
	private $strOcupacion;
	private $strTelefono;





	public function __construct()
	{
		parent::__construct();
	}

	public function insertVoluntario(string $identificacion, string $nombre, string $apellido, string $email, string $direccion, int $edad, string $mensaje, string $ocupacion, string $telefono)
	{

		$this->strIdentificacion = $identificacion;
		$this->strNombre = $nombre;
		$this->strApellido = $apellido;
		$this->strEmail = $email;
		$this->strDireccion = $direccion;
		$this->intEdad = $edad;
		$this->strMensaje = $mensaje;
		$this->strOcupacion = $ocupacion;
		$this->strTelefono = $telefono;
		

		$return = 0;

		$sql = "SELECT * FROM volunteers WHERE 
				email = '{$this->strEmail}' or identificacion_volunteer = '{$this->strIdentificacion}'";
		$request = $this->select_all($sql);

		if (empty($request)) {
			$query_insert = "INSERT INTO volunteers(identificacion_volunteer, frist_name_volunteer, last_name_volunteer, email, address_volunteer, age_volunteer, mensaje, ocupation_volunteer, phone_number_volunteer) 
							  VALUES(?,?,?,?,?,?,?,?,?)";
			$arrData = array(
				$this->strIdentificacion,
				$this->strNombre,
				$this->strApellido,
				$this->strEmail,
				$this->strDireccion,
				$this->intEdad,
				$this->strMensaje,
				$this->strOcupacion,
				$this->strTelefono
			);
			$request_insert = $this->insert($query_insert, $arrData);
			$return = $request_insert;
		} else {
			$return = "exist";
		}
		return $return;
	}


	public function selectVoluntarios()
	{
		$sql = "SELECT id,identificacion_volunteer,frist_name_volunteer,last_name_volunteer,email,address_volunteer,age_volunteer,
        mensaje, ocupation_volunteer, phone_number_volunteer, DATE_FORMAT(datecreated, '%d/%m/%Y') as datecreated
				FROM volunteers ORDER BY id DESC";
		$request = $this->select_all($sql);
		return $request;
	}

	public function selectVoluntario(int $id)
	{
		$sql = "SELECT id,identificacion_volunteer,frist_name_volunteer,last_name_volunteer,email,address_volunteer,age_volunteer
        ,mensaje ,ocupation_volunteer,phone_number_volunteer, DATE_FORMAT(datecreated, '%d/%m/%Y') as datecreated
				FROM volunteers WHERE id = {$id}";
		$request = $this->select($sql);
		return $request;
	}

	public function updateVoluntario(int $id, string $identificacion, string $nombre, string $apellido, string $email, int $edad, string $mensaje, string $ocupacion, string $telefono)
	{

		$this->intId = $id;
		$this->strIdentificacion = $identificacion;
		$this->strNombre = $nombre;
		$this->strApellido = $apellido;
		$this->strEmail = $email;
		$this->intEdad = $edad;
		$this->strMensaje = $mensaje;
		$this->strOcupacion = $ocupacion;
		$this->strTelefono = $telefono;
		


		$sql = "SELECT * FROM volunteers WHERE (email = '{$this->strEmail}' AND id != $this->intId)
										  OR (identificacion = '{$this->strIdentificacion}' AND id != $this->intId) ";
		$request = $this->select_all($sql);

		if (empty($request)) {

			$sql = "UPDATE volunteers SET id = ?, identificacion_volunteer =?, frist_name_volunteer =?, last_name_volunteer =?, email =?, addres_volunteer =?, age_volunteer =?, mensaje =?, ocupation_volunteer =?, phone_number_volunteer =?
							WHERE id = $this->intId ";
			$arrData = array(

				$this->strIdentificacion,
				$this->strNombre,
				$this->strApellido,
				$this->strEmail,
				$this->intEdad,
				$this->strMensaje,
				$this->strOcupacion,
				$this->strTelefono
				
			);

			$request = $this->update($sql, $arrData);
		} else {
			$request = "exist";
		}
		return $request;

	}

	public function deleteVoluntario(int $intId)
	{
		$this->intId = $intId;
		$sql = "DELETE FROM volunteers WHERE id = $this->intId ";
		$arrData = array(0);
		$request = $this->delete($sql);
		return $request;
	}




	public function selectMensaje(int $idmensaje)
	{
		$sql = "SELECT id,identificacion_volunteer,frist_name_volunteer,last_name_volunteer,email,address_volunteer,age_volunteer
        ,ocupation_volunteer,phone_number_volunteer, mensaje
				FROM volunteers WHERE id = {$idmensaje}";
		$request = $this->select($sql);
		return $request;
	}

}
?>