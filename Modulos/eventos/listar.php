<?php
    include('config/DB.php');
    $sql = "SELECT * FROM $eventos" ;
    $stmt = DB :: conexao()-> prepare( $sql );
    $stmt -> execute ();

    $eventos = $stmt -> fetchAll (PDO::FETCH_ASSOC);
?>
<table>
<tr>
    <th>ID</th >
    <th>CATEGORIA DE ORÇAMENTO</th >
    <th>QUAL SERVIÇO VOCÊ NECESSITA?</th >
    <th>PRAZO DE ENTREGA</th>
    <th>ESTADO</th>
    <th>CIDADE</th>
    <th>BAIRRO</th>
    <th>LOCALIZAÇÃO DO FORNECEDOR</th>
    <th  colspan = ' 2 ' > OPERAÇÃO </th >

</tr>

<?php
if ($eventos){
    foreach ($eventos as $eventos){?>
    <tr>
    <td><?php echo $eventos('categoria de orcamento' ) ?></td>
    <td><?php echo $eventos('qual servico voce precisa?' ) ?> </td>
    <td><?php echo $eventos('prazo de entrega' )?></td>
    <td><?php echo $eventos('estado' ) ?></td>
    <td><?php echo $eventos('cidade' ) ?></td>
    <td><?php echo $eventos('bairro' ) ?></td>
    <td><?php echo $eventos('localizacao do fornecedor' )?></td>

    <td><a  href = " Modulos=eventos&acao=editar&id=?<?php echo $eventos ['id_eventos'];?>"></a></td>
    <td><a  href = " Modulos=eventos&acao=excluir&id=?<?php echo $eventos ['id_eventos'];?>"></a></td>
    </tr>
<?php }} ?>
</table>