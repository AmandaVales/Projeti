<?php
if (isset($_POST [ 'botao' ]) AND $_POST [ 'botao' ] ==
'Salva' ) {
    $nome = $_POST [ 'nome' ];
    $email = $_POST [ 'email' ];
    $telefone = $_POST [ 'telefone' ];

try{
    $sql = "INSERT INTO cliente (nome, email, telefone) VALUES (: nome,: email,: telefone)" ;
    $stmt= DB::conexao() ->preparar ( $sql );
    $stmt->bindParam(': nome' , $nome );
    $stmt->bindParam(': email' , $email );
    $stmt->bindParam(': telefone' , $telefone );
    $stmt->execute();
    
    echo "Registro Efetuado com sucesso!" ;
} catch (Exceção  $e ) {

    echo  "Erro ao Inserir Registro: </br> [" . $e -> getMessage (). "]" ;

    }
}

?>

<Form method = ' post ' action = "" >
Nome:           <input  type = " text " name = ' nome '></br >
Email:          <input  type = " text " name = ' email '></br >
Telefone:       <input  type = " text " name = ' telefone '></br >
<input  type = 'submit ' name = 'botao' value = 'Salvar'>

</form >