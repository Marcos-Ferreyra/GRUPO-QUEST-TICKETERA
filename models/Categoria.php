<?php
class Categoria extends Conectar {
    public function get_categoria() {
        $conectar = parent::Conexion();
        parent::set_names();
        
        // Preparar la consulta SQL
        $sql = "SELECT * FROM tm_categoria WHERE est = 1;";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        
        // Obtener y devolver todos los resultados
        return $resultado=$sql->fetchAll();
    }
}
?>
