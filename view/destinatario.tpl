{$destinatario}
<form action='destinatario.php' method='post'>
	<div class='seccao'>
		<div class='title'>Selecione Uma Acção</div>
		<div>
			<div style='width: 50%; float: left;'>
				Destinatário
				<div>
					<button type='submit' name='destinatario' value='actualizarDestinatario' value='0'>Actualizar Informações do Destinatário</button>
				</div>
				<div>
					<button type='submit' name='destinatario' value='removerDestinatario'>Remover Destinatário</button>
				</div>
			</div>
			<div style='width: 50%; float: right;'>
				Contas
				<div>
					<button type='submit' name='destinatario' value='actualizarContas'>Actualizar Contas do Destinatário</button>
				</div>
				<div>
					<button type='submit' name='destinatario' value='removerContas'>Remover Contas do Destinatário</button>
				</div>
				{include file='space.tpl'}
				<div>
					<button type='submit' name='destinatario' value='adicionarContas'>+ Adicionar Contas do Destinatário</button>
				</div>
			</div>
		</div>
		{include file='space.tpl'}
	</div>
</form>
