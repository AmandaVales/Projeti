<?php 
    include( 'config / DB.php' );
    if(isset($_POST [ "botao" ]) AND $_POST [ "botao" ] == "Salvar" ) {
        $id = $_POST ['id_eventos'];
        $categoria_de_orcamento = $_POST [ 'categoria de orcamento' ];
        $qual_serviço_voce_necessita = $_POST [ 'qual servico voce necessita?' ];
        $prazo_de_entrega = $_POST [ 'prazo de entrega' ];
        $estado = $_POST [ 'estado' ];
        $cidade = $_POST [ 'cidade' ];
        $bairro = $_POST [ 'bairro' ];
        $localizacao_do_fornecedor = $_POST [ 'localizacao do fornecedor' ];
        
        $sql = "UPDATE eventos SET
            categoria de orçamento = :categoria de orçamento, 
            qual servico voce precisa? = :qual servico voce precisa ?,
            prazo de entrega = :prazo de entrega, 
            estado = :estado, 
            cidade = :cidade, 
            bairro = :bairro, 
            localizacao do fornecedor = :localizacao do fornecedor
            WHERE id_eventos =: id_eventos " ;

        $stmt = DB :: conexao () -> preparar ( $sql );
        $stmt-> bindParam (':categoria de orçamento' , $categoria_de_orcamento );
        $stmt-> bindParam (':qual servico voce precisa?' , $qual_serviço_voce_necessita );
        $stmt-> bindParam (':prazo de entrega' , $prazo_de_entrega );
        $stmt-> bindParam (':estado' , $estado );
        $stmt-> bindParam (':cidade' , $cidade );
        $stmt-> bindParam (':bairro' , $bairro );
        $stmt-> bindParam (':localizacao de fornecedor' , $localizacao_do_fornecedor );
        $stmt-> execute ();
    }
        
?>   

<?php

if(isset($_GET [ 'id' ]) && is_numeric ( $_GET [ 'id' ])) {
    $id = $_GET [ 'id' ];

    $sql = "SELECT * FROM cliente onde id_cliente =: id_cliente" ;

    $stmt = DB :: Conexao () -> prepare($sql);
    $stmt -> bindParam ( ': id' , $id );
    $stmt -> execute ();
    $eventos = $stmt -> Fetchall ( PDO :: FETCH_ASSOC );

?>

    <Form  method = ' post ' action = "" >
    Categoria de orçamento:          
    <input type ="text" name = ' categoria de orçamento' value = "<?php echo $eventos[0]('categoria de orçamento') ?>"/><br>
    Qual de serviço você precisa ?:         
    <input type ="text "name = 'qual servico voce precisa?' value = " <?php echo $eventos[0]('qual servico voce necessita?') ?>"/><br>
    Prazo de entrega:      
    <input type ="text" name = 'prazo de entrega' value = " <?php  echo $eventos [ 0 ]('Prazo de Entrega')?> "/><br>
    Estado:      
    <input type ="text" name = 'estado' value = " <?php echo $eventos[0]('estado')?>"/><br>
    Cidade:      
    <input type ="text" name = 'cidade' value = " <?php echo $eventos[0]('Cidade')?>"/><br>
    Bairro:      
    <input type ="text" name = 'bairro' value = " <?php echo $eventos[0]('bairro')?>"/><br>
    Localização do fornecedor:      
    <input type ="text" name = 'localizacao do fornecedor' value = " <?php echo $eventos[0]( 'localizacao fazer supplier' )?>"/><br>



    <input  type = ' submit ' name = ' botao ' value = ' Salvar ' >

    </form>

<?php

    }
    else {
        echo  "ID INVÁLIDO" ;
    }
?>