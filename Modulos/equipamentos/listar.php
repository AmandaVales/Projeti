<?php
    include('config/DB.php');
    $sql = "SELECT * FROM $cliente" ;
    $stmt = DB :: conexao()-> prepare( $sql );
    $stmt -> execute();

    $equipamentos = $stmt-> fetchAll (PDO::FETCH_ASSOC);
?>
<table>
<tr>
    <th>ID</th>
    <th>DESCRIÇÃO</th>
    <th>PREÇO</th>
    <th>QUANTIDADE</th>
    <th  colspan = ' 2 ' > OPERAÇÃO </th >

<tr>

<?php
if ($equipamentos){
    foreach ($equipamentos as $equipamentos){ ?>
    <tr>
    <td><?php echo $equipamentos['id']; ?></td >
    <td><?php echo $equipamentos['descricao']; ?></td >
    <td><?php echo $equipamentos['preco']; ?></td >
    <td><?php echo $equipamentos['quantidade']; ?></td >

    <td><a href = "?Modulos=equipamentos&acao=editar&id=<?php echo $equipamentos ['id_equipamentos' ];?>" ></a></td >
    <td><a href = "?Modulos=equipamentos&acao=excluir&id=<?php echo $equipamentos ['id_equipamentos' ];?>" ></a></td >
    </tr>
<?php }} ?>
</table>