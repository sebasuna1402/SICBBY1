<?php
require_once("Models/TCliente.php");
require_once("Models/LoginModel.php");

class Corredor extends Controllers
{
    use TCliente;
    public $login;

    public function __construct()
    {
        parent::__construct();
        session_start();
        $this->login = new LoginModel();
    }

    public function Corredor()
    {
        $data['page_tag'] = defined('NOMBRE_EMPRESA') ? NOMBRE_EMPRESA : "Nombre de la Empresa"; // Verifica si la constante está definida
        $data['page_title'] = defined('NOMBRE_EMPRESA') ? NOMBRE_EMPRESA : "Nombre de la Empresa"; // Verifica si la constante está definida
        $data['page_name'] = "Ptemplate";
        //$data['productos'] = $this->getProductosT();
        $pagina = 1;

        $this->views->getView($this, "Ptemplate", $data);
    }

    public function voluntario()
    {
        // Configura el encabezado para indicar que se envía una respuesta JSON
       // header('Content-Type: application/json');
        //$arrResponse = array('status' => false, 'msg' => "No es posible enviar la inscribcion."); // Mensaje de error predeterminado

        if ($_POST) {
            // Validar y procesar los datos POST
            $identificacion_volunteer = ucwords(strtolower(strClean($_POST['identificacion_volunteer'])));
            $frist_name_volunteer = strtolower(strClean($_POST['frist_name_volunteer']));
            $last_name_volunteer = strtolower(strClean($_POST['last_name_volunteer']));
            $email = strtolower(strClean($_POST['email']));
            $address_volunteer = strtolower(strClean($_POST['address_volunteer']));
            $age_volunteer = ucwords(strtolower(strClean($_POST['age_volunteer'])));
            $mensaje = strClean($_POST['mensaje']);
            $ocupation_volunteer = strtolower(strClean($_POST['ocupation_volunteer']));
            $phone_number_volunteer = strtolower(strClean($_POST['phone_number_volunteer']));

            // Validar los datos aquí (puedes agregar más validaciones según tus requisitos)

            // Procesar los datos si son válidos
            $userVolunteer = $this->setVoluntario($identificacion_volunteer, $frist_name_volunteer, $last_name_volunteer, $email, $address_volunteer, $age_volunteer, $mensaje, $ocupation_volunteer, $phone_number_volunteer);

            if ($userVolunteer > 0) {
                $arrResponse = array('status' => true, 'msg' => "Su inscribcion fue enviada correctamente.");
                //Enviar correo
               /* $dataUsuario = array(
                    'asunto' => "Nueva Usuario en Voluntario",
                    'emailV' => EMAIL_Voluntario,
                    'identificacion_volunteer' => $identificacion_volunteer,
                    'frist_name_volunteer' => $frist_name_volunteer,
                    'last_name_volunteer' => $last_name_volunteer,
                    'email' => $email,
                    'address_volunteer' => $address_volunteer,
                    'age_volunteer' => $age_volunteer,
                    'mensaje' => $mensaje,
                    'ocupation_volunteer' => $ocupation_volunteer,
                    'phone_number_volunteer' => $phone_number_volunteer
                );

                // Manejo de errores al enviar el correo
                try {
                    sendEmail($dataUsuario, "email");
                } catch (Exception $e) {
                    $arrResponse = array('status' => false, 'msg' => "Error al enviar el correo: " . $e->getMessage());
                }
                */
            } 
             // Envía la respuesta JSON al cliente
        echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
        }
        die();
    }
}
?>
