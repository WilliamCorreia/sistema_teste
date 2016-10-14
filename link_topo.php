<?php 
	require ("config.php");
	include ("inc_head.php");

session_start();
$_SESSION['idusuario'];

$idrec = $_SESSION['idusuario']; // variavel para salvamento automatico de quem criou o evento

if (isset($_GET["action"]) AND $_GET["action"] == "sair") {
  session_destroy();
  header ("Location: http://143.106.163.126/sistema_teste/index.php");
}



?>

<div class="col-xs-12">
	<div class="row">
		<div class="container">
		<a href="?action=sair"> <button class="btn btn-danger pull-right col-xs-2">  Sair  </button> </a>
			<img src="css/imagens/logo_topo.png" class="img-responsive" />

			 <div class="conteudo-menu">
			 		
			
			            <ul class="nav nav-tabs nav-justified">
			              <li role="presentation" class="active"><a href="registrado.php?" target="_self">Início</a></li>
			              <li role="presentation"><a href="registro.php?" target="_self">Inserir Registro</a></li>
			              <li role="presentation"><a href="relatorio.php?" target="_self">Relatórios</a></li>
			              <li role="presentation"><a href="downloads.php?" target="_self">Downloads</a></li>
			              <li role="presentation"><a href="ajuda.php?" target="_self">Ajuda</a></li>
			            </ul>
			            
			           
			            </div>
		</div>
	</div>
</div>