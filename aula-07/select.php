<html>
	<head>
	<title>Tabela</title>
	</head>
	<body>
		<table>
			<tr>
				<td>ID</td>
				<td>Usuario</td>
				<td>Senha</td>
				<td>Nome</td>
			</tr>
				<?php
				$link = mysqli_connect ( '127.0.0.1', 'root', '' );
				$conexao = mysqli_select_db ( $link, 'maestro' );
				$sql = 'select * from usuarios';
				$resultado = mysqli_query ( $link, $sql );
				while ( $row = mysqli_fetch_assoc ( $resultado ) ) 
				{
				?>
				<tr>
					<td><?=$row['id'];?></td>
					<td><?=$row['usuario'];?></td>
					<td><?=$row['senha'];?></td>
					<td><?=$row['nome'];?></td>
				</tr>
				<?php
				}
				mysqli_close ( $link );
				?>
		</table>
	</body>
</html>


