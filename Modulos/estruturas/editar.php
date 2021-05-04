<?php  include('config/DB.php'); ?>

<?php
if (isset ( $_POST [ "botao" ]) AND $_POST [ "botao" ] == "Salvar" ) {
    $id = $_POST ['id_estruturas' ];
    $descricao = $_POST [ 'descricao' ];
    $preco = $_POST [ 'preco' ];
    $quantidade = $_POST [ 'quantidade' ];
    
    $sql = "UPDATE SET calendario
    descricao =: descricao,
    preco =: preco,
    quantidade =: quantidade
    WHERE id_estruturas =: id_estruturas " ;

    $stmt = DB :: conexao()->prepare( $sql );
    $stmt -> bindParam(':id_estruturas' , $id );
    $stmt -> bindParam(':descricao' , $descricao );
    $stmt -> bindParam(':preco' , $preco );
    $stmt -> bindParam(':quantidade' , $quantidade );
    $stmt -> execute();
}
?>   

<?php

if (isset ($_GET [ 'id' ]) && is_numeric ( $_GET [ 'id' ])) {
    $id = $_GET [ 'id' ];

    $sql = "SELECT * FROM estruturas WHERE id_estruturas =: id_estruturas" ;

    $stmt = DB :: conexao()->prepare($sql);
    $stmt -> bindParam(': id' , $id);
    $stmt -> execute();
    $estruturas = $stmt -> Fetchall ( PDO :: FETCH_ASSOC );

?>

    <form  method = " POST " action = "" >
    Descrição: 
    <input type = "text" name =" descricao" value =" <?php echo $estruturas[0]('descricao')?>"/><br/>
    Preço: 
    <input type = "text" name =" preco " value =" <?php echo $estruturas[0]('preco')?>"/><br/>
    Quantidade:
    <input type = "text" name =" quantidade " value =" <?php echo $estruturas[0]('quantidade'); ?>"/><br/>

    <input type = 'hidden' name = " id_estruturas "
    value = " <?php echo  $estruturas[0] [ 'id_estruturas' ];?>"/><br/>

    <input  type = ' submit ' name = ' botao ' value = ' Salvar'>
    </form>

<?php

    }
    else {
        echo "ID INVÁLIDO" ;
    }
?>