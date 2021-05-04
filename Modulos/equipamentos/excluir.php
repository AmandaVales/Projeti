<?php
    if( isset( $_GET [ 'id' ]) AND is_numeric ( $_GET [ 'id' ])) {
        $id = $_GET [ 'id' ];

        $sql = "DELETE * FROM equipamentos where id_equipamentos = :id_equipamentos";

        $stmt = DB :: conexao () -> prepare($sql);
        $stmt -> bindParam ( ':id' , $id);
        $stmt -> execute ();

    } else {
        echo  "ID INVÁLIDO" ;
    }
?>