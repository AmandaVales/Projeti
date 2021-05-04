<?php
    include('config/DB.php');
    $sql = "SELECT * FROM $ estruturas" ;
    $stmt = DB::conexao()-> prepare( $sql );
    $stmt -> execute ();

    $estruturas = $stmt -> fetchAll ( PDO :: FETCH_ASSOC );
?>
<table>
<tr>
    <th>ID</th >
    <th>DESCRIÇÃO</th >
    <th>PREÇO</th>
    <th>QUANTIDADE</th>
    <th>OPERAÇÃO</th>
    <th  colspan = ' 2 ' > OPERAÇÃO </th >

</tr>

<?php
if( $estruturas ){
    foreach( $estruturas as $estruturas){ ?>
    <tr >
    <td><?php echo $estruturas['id']; ?></td >
    <td><?php echo $estruturas['descricao']; ?></td >
    <td><?php echo $estruturas['preco']; ?> </td >
    <td><?php echo $estruturas['quantidade']; ?></td >

    <td><a href = "Modulos=estruturas&acao=editar&id=?<?php echo $estruturas [ 'id_estruturas' ]; ?>"></a></td >
    <td><a href = "Modulos=estruturas&acao=excluir&id=?<?Php echo $estruturas [ 'id_estruturas' ]; ?>"></a></td >
    </tr>
<?php }} ?>
</table>