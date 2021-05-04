<!doctype html>

<html>
    <head>
        <title>Projeto</title>        
    </head>

    <body>
        <header>TOPO</header>
        <div id= "content">
        <nav>
        <a href = "?Modulos=dashboard$acao=ver?">DASHBOARD</a>
        <a href = "?Modulos=estruturas$acao=listar?">ESTRUTURAS LISTAR </a>
        <a href = "?Modulos=estruturas$acao=preço total:Adicionar?">ESTRUTURAS PREÇO: ADICIONAR</a>
        <a href = "?Modulos=cliente$acao=listar?">CLIENTE LISTAR</a>
        <a href = "?Modulos=cliente$acao=preço total:Adicionar?">CLIENTE PREÇO: ADICIONAR</a>
        <a href = "?Modulos=equipamentos$acao=listar?">ESTRUTURAS LISTAR</a>
        <a href = "?Modulos=equipamentos$acao=listar?">EQUIPAMENTOS LISTAR</a>
        <a href = "?Modulos=equipamentos$acao=Preço total:Adicionar?">EQUIPAMENTOS PREÇO: ADICIONAR</a>
        <a href = "?Modulos=eventos$acao=listar? "> EVENTOS LISTAR</a>
        <a href = "?Modulos=eventos$acao=preço total:Adicionar? ">EVENTOS PREÇO: ADICIONAR</a>
        <a href = "?Modulos=calendario$acao=listar?">CALENDARIO LISTAR</a>
        <a href = "?Modulos=calendario$acao=preço total:Adicionar? ">CALENDARIO PREÇO: ADICIONAR</a>
        </nav > 

        <?php
            if(isset($_GET['modulo'])){$modulo= $_GET[ 'modulo' ];}else{ $modulo = "dashboard";}
            if(isset($_GET['acao'])){$acao= $_GET['acao' ];}else{ $acao = "ver";}

            include("modulos /" .$modulo . "/" .$acao . ".php" );
                    
            ?>
        </div>
        <footer>
            Rodapé do site
        </footer>
    </body>
</hmtl>
