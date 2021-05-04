<?php
    include('config/DB.php');
    $sql = "SELECT * FROM $calendario" ;
    $stmt = DB:: conexao()-> prepare( $sql );
    $stmt -> execute ();

    $calendario = $stmt -> fetchAll (PDO::FETCH_ASSOC);
?>
<table>
<tr>
    <th>ID</th>
    <th>QUAL SERVIÇO?</th>
    <th>MAIS DETALHES</th>
    <th>DATA DESEJADA</th>
    <th>QUATIDADE</th>
    <th  colspan = ' 2 ' > OPERAÇÃO </th >

</tr>

<?php
if ($calendario) {
    foreach ($calendario as $calendario){ ?>
    <tr>
    <td> <?php echo $calendario ['id']; ?> </td >
    <td> <?php echo $calendario ['qual o serviço?']; ?></td>
    <td> <?php echo $calendario ['mais detalhes']; ?></td>
    <td> <?php echo $calendario ['data desejada']; ?></td>
    <td> <?php echo $calendario ['quantidade']; ?></td>

    <td><a href ="Modulos=calendario&acao=editar&id =?<?php echo $calendario ['id_calendario'];?>"></a></td>
    <td><a href ="Modulos=calendario&acao=excluir&id =?<?php echo $calendario ['id_calendario'];?>"></a></td>
    </tr>
<?php }} ?>
</table>