<center><h1>Listar Usuarios</h1></center>
<?php
	$sql = "SELECT * FROM usuarios";

	$res =$conn->query($sql);

	$qtd=$res->num_rows;

	if ($qtd>0){
		print "<table class='table table-hover table-striped table-bordered'>";
			print "<tr>";
			print "<th>Id</th>";
			print "<th>Nome</th>";
			print "<th>E-mail</th>";
			print "<th>Data Nascimento</th>";
			print "<th>Alterar</th>";
			print "</tr>";
		while($row=$res->fetch_object()){
			print "<tr>";
			print "<td>".$row->Id."</td>";
			print "<td>".$row->Nome."</td>";
			print "<td>".$row->Email."</td>";
			print "<td>".$row->data_nasc."</td>";
			print "<td>
					<button onclick=\"location.href='?page=editar&id=".$row->Id."';\" class='btn btn-success'>Ir para pagamentos</button>
					<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->Id."';}else{false;}\"  class='btn btn-danger'>Adicionar ao carrinho</button></td>";
			print "</tr>";
		}
		print "</table>";

	}
	else
	{
		print "<p class='alert alert-danger'>Não encontrou resultados</p>";
	}
?>