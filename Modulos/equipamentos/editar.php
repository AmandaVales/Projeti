<?php  include('config/DB.php');?>

<?php
if (isset($_POST [ "botao" ]) && $_POST [ "botao" ] == "Salvar" ) {
    $id = $_POST [ 'id_equipamentos' ];
    $descricao = $_POST [ 'descricao' ];
    $preco = $_POST [ 'preco' ];
    $quantidade = $_POST [ 'quantidade' ];
    
    $sql = "UPDATE SET FROM cliente
    descricao =: descricao,
    preco =: preco,
    quantidade =: quantidade
    WHERE id_equipamentos =: id_equipamentos " ;

    $stmt = DB::conexao () -> prepare( $sql);
    $stmt -> bindParam (':id_equipamentos', $id);
    $stmt -> bindParam (':descricao', $descricao);
    $stmt -> bindParam (':preco', $preco);
    $stmt -> bindParam (':quantidade', $quantidade);
    $stmt -> execute ();
?>   

<?php

if(isset($_GET [ 'id' ]) && is_numeric ( $_GET ['id'])){
    $id = $_GET [ 'id' ];

    $sql = "SELECT * FROM equipamentos where id_equipamentos =: id_equipametos" ;

    $stmt = DB :: Conexao () -> preparar ( $sql );
    $stmt -> bindParam ( ': id' , $id );
    $stmt -> execute ();
    $equipamentos = $stmt -> Fetchall (PDO::FETCH_ASSOC);
}
?>

    <form  method = " POST " action = "" >
    Descrição: 
    <input type = "text" name = "descricao" value =" <?php echo $equipamentos[0] ('descricao')?>"/><br/>
    Preco: 
    <input type = "text" name = "preco" value =" <?php echo $equipamentos[0]('preco') ?>"/><br/>
    Quantidade:
    <input type = "text" name = "quantidade " value =" <?php echo $equipamentos[0]('Quantidade'); ?>"/><br/>

    <input type = 'hidden' name = " id_equipamentos "
    valor = " <?php echo $equipamentos[0]('id_equipamentos');?>"/><br/>

    <input  type = ' submit ' name = ' botao ' value = ' Salvar ' >
    </form >

<?php

    }
    else {
        echo  "ID INVÁLIDO" ;
    }
?>