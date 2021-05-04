<?php
if(isset($_POST[ 'botao' ]) AND $_POST ['botao' ] == 'Salva' ) {
    $categoria_de_orcamento = $_POST ['categoria de orcamento' ];
    $qual_serviço_voce_necessita = $_POST [ 'qual servico voce necessita?' ];
    $prazo_de_entrega = $_POST [ 'prazo de entrega' ];
    $estado = $_POST ['estado'];
    $cidade = $_POST ['cidade'];
    $bairro = $_POST ['bairro'];
    $localizacao_do_fornecedor = $_POST ['localizacao do fornecedor'];

    $sql = "INSERT INTO eventos (categoria de orçamento, qual servico voce necessita ?, prazo de entrega, estado, cidade, bairro, localização do fornecedor)
            VALUES (: categoria de orçamento,: qual servico voce necessita ?,: prazo de entrega,: estado,: cidade,: bairro,: localizacao do fornecedor) " ;
try{ $stmt = DB :: conexao () -> prepare($sql);
    $stmt -> bindParam (':categoria de orçamento' , $categoria_de_orcamento);
    $stmt -> bindParam (':qual servico voce precisa?' , $qual_serviço_voce_necessita);
    $stmt -> bindParam (':prazo de entrega' , $prazo_de_entrega);
    $stmt -> bindParam (':estado' , $estado);
    $stmt -> bindParam (':cidade' , $cidade);
    $stmt -> bindParam (':bairro' , $bairro);
    $stmt -> bindParam (':localizacao de fornecedor' , $localizacao_do_fornecedor);
    $stmt -> execute ();
    
    echo  "Registro Efetuado com sucesso!" ;
} catch ( Exceção  $e ) {

    echo  "Erro ao Inserir Registro: <br/> [" . $e -> getMessage (). "]" ;

    }
}

?>

<Form  method = ' post ' action = "" >
Categoria de orçamento:          
<input  type = " text " name = 'categoria de orçamento ' ></br>
Qual de serviço você precisa ?:         
<input  type = " text " name = 'qual servico voce precisa? ' ></br>
Prazo de entrega:      
<input  type = " text " name = 'prazo de entrega ' ></br>
Estado:      
<input  type = " text " name = 'estado' ></br>
Cidade:      
<input  type = " text " name = 'cidade' ></br>
Bairro:      
<input  type = " text " name = 'bairro' ></br>
Localização do fornecedor:      
<input  type = " text " name = 'localizacao de fornecedor'></br>



<input  type = ' submit ' name = ' botao ' value = ' Salvar ' >

</form>