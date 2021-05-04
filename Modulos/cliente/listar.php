<?php
    include('config/DB.php');
    $sql = "SELECT * FROM $cliente" ;
    $stmt = DB :: conexao () -> prepare( $sql );
    $stmt -> execute ();

    $cliente = $stmt -> fetchAll ( PDO::FETCH_ASSOC );
?>
<table>
<tr>
    <th>ID</th >
    <th>NOME</th >
    <th>EMAIL</th >
    <th>TELEFONE</th >
    <th  colspan = ' 2 ' > OPERAÇÃO </th >

</tr>

<?php
if ($cliente) {
    foreach ($cliente as $cliente) { ?>
    <tr>
    <td> <?php  echo  $cliente [ 'id' ]; ?></td >
    <td> <?php  echo  $cliente [ 'nome' ]; ?></td >
    <td> <?php  echo  $cliente [ 'endereço' ];?></td >
    <td> <?php  echo  $cliente [ 'cidade' ]; ?></td >
    <td> <?php  echo  $cliente [ 'telefone' ]; ?></td >

    <td><a href = "Modulos=cliente&acao=editar&id =?<?php echo $cliente [ 'id_cliente' ];?>"></a></td>
    <td><a href = "Modulos=cliente&acao=excluir&id =?<?php echo $cliente [ 'id_cliente' ];?>"></a></td>
    </tr >
<?php }} ?>
</table> 