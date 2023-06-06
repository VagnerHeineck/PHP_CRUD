<center><h1>Editar Usuário</h1></center>
<?php 
	$sql ="SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
	$res=$conn->query($sql);
	$row=$res->fetch_object();
?>
<form action="?page=salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id" value="<?php print $row->Id; ?>">
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="nome" value="<?php print $row->Nome; ?>" class="form_control">
	</div>
	<div class="mb-3">
		<label>E-mail</label>
		<input type="email" name="email" value="<?php print $row->Email; ?>" class="form_control">
	</div>
	<div class="mb-3">
		<label>Senha</label>
		<input type="password" name="senha" class="form_control" required>
	</div>
	<div class="mb-3">
		<label>Data de Nascimento</label>
		<input type="date" name="data_nasc"
		value="<?php print $row->data_nasc; ?>"
		  class="form_control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>