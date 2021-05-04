<?php
if(isset( $_POST [ 'botao' ]) AND $_POST [ 'botao' ] ==
'Salva'){
    $descricao = $_POST [ 'descricao' ];
    $preco = $_POST [ 'preco' ];
    $quantidade = $_POST [ 'quantidade' ];

try{
    $sql = "INSERT INTO estruturas (descricao, preco, quantidade) VALUES (: descricao,: preco,: quantidade)" ;
    $stmt = DB :: conexao() -> prepare($sql);
    $stmt -> bindParam ( ':descricao' , $descricao);
    $stmt -> bindParam ( ':preco' , $preco);
    $stmt -> bindParam ( ':quantidade' , $quantidade);
    $stmt -> execute ();
    
    echo "Registro Efetuado com sucesso!" ;
}catch(Exceção  $e ) {

    echo  "Erro ao Inserir Registro: <br/> [" . $e -> getMessage ()."]" ;

    }
}

?>

<Form  method = ' post ' action = "" >
Descrição:           <input  type = " text " name = ' descricao ' ></br>
Preço:               <input  type = " text " name = ' preco ' ></br>
Quantidade:          <input  type = " text " name = ' quantidade ' ></br>
<input  type = ' submit ' name = ' botao ' value = ' Salvar '>

</form>