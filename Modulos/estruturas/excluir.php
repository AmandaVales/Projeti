<?php
    if(isset( $_GET[ 'id' ]) AND is_numeric ($_GET[ 'id' ])){
        $id = $_GET [ 'id' ];

        $sql = "DELETE * FROM estruturas WHERE id_estruturas =: id_estruturas" ;

        $stmt = DB :: conexao()-> prepare($sql);
        $stmt -> bindParam(': id' , $id);
        $stmt -> execute();

    } else {
        echo  "ID INVÁLIDO" ;
    }
?>