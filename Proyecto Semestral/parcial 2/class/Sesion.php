<?php
require_once('modelo.php');
class Sesion extends modeloCredencialesBD{
    public function __construct(){
        parent:: __construct();
    } 

public function Registrar($username,$email, $password,$role){
    $instruccion = "CALL sp_registrar('".$username."','".$email."','".$password."','".$role."')";

    $agrega=$this->_db->query($instruccion);

        if ($agrega) {
            return $agrega;
            $agrega->close();
            $this->_db->close();
        }
}
public function validar($email, $password){
    $instruccion = "CALL sp_mostrar1('".$email."','".$password."','".$role."')";
    
    $consult = $this->_db->query($instruccion);
    
    if (!$consult) {
        return "Error en la consulta: " . $this->_db->error;
    } else {
        $resultado = $consult->fetch_assoc();
        $consult->close();
        
        if ($resultado['resultado'] == 1) {
            return 1; // Correo y contraseña coinciden
        } else {
            return 0; // No hay coincidencia o error
        }
    }

}
}
?>