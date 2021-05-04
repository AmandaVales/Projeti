<?php  include('config/DB.php');?>

<?php
if (isset( $_POST [ "botao" ]) AND $_POST [ "botao" ] == "Salvar" ) {
    $id = $_POST ['id_calendario'];
    $qualserviço = $_POST [ 'qual serviço?' ];
    $maisdetalhes = $_POST [ 'mais detalhes' ];
    $datadesejada = $_POST [ 'data desejada' ];
    $quantidade = $_POST [ 'quantidade' ];
    
    $sql = "UPDATE SET calendario
    qual serviço? =: qual serviço ?,
    mais detalhes =: mais detalhes,
    dados estimados =: dados estimados,
    quantidade =: quantidade
    WHERE id_calendario =: id_calendario " ;

    $stmt = DB :: conexao() -> preparar($sql );
    $stmt -> bindParam (': id_calendario' , $id );
    $stmt -> bindParam (': qual serviço?' , $qualserviço );
    $stmt -> bindParam (': mais detalhes' , $maisdetalhes );
    $stmt -> bindParam (': data desejada' , $datadesejada );
    $stmt -> bindParam (': quantidade' , $quantidade );
    $stmt -> execute ();
}
?>   

<?php

if (isset($_GET['id']) && is_numeric ($_GET [ 'id' ])) {
    $id = $_GET ['id'];

    $sql = "SELECT * FROM calendario WHERE id_calendario =: id_calendario" ;

    $stmt = DB :: Conexao() -> preparar ($sql);
    $stmt -> bindParam(': id', $id);
    $stmt -> execute();
    $calendario = $stmt -> Fetchall( PDO::FETCH_ASSOC);

?>

    <form  method = "POST" action = "" >
    Qual serviço ?: 
    <input type = "text" nome ="qual serviço?" Value ="<?php echo $calendario [0]('Serviço Qual?');?>"/><br/>
    Mais detalhes: 
    <input type = "text" nome ="mais detalhes" Value ="<?php echo $calendario [0]('mais detalhes');?>"/><br/>
    Data desejada:
    <input type = "text" nome ="data desejada" Value ="<?php echo $calendario[0]('Desejada dados');?>"><br/>
    Quantidade:
    <input type = "text" nome ="Quantidade" Value ="<?php echo  $calendario [0]('Quantidade');?>"/><br/>


    <input type = 'hidden' name = "id_calendario"
    value = "<?php echo  $calendario[ 0 ] ['id_calendario' ];?>"/><br/>

    <input type ='submit' name = 'botao' value = 'Salvar' >
    </form>

<?php

    }
    else{
        echo "ID INVÁLIDO" ;
    }
?>