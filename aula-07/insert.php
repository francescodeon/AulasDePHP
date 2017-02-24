
<?php
$link = mysqli_connect ( '127.0.0.1', 'root', '' );
$conexao = mysqli_select_db ( $link, 'maestro' );
$sql = 'insert into usuarios(nome,usuario,senha)values("NOMEasssssss","ssss","ss")';

$resultado= mysqli_query($link,$sql);

mysqli_close ( $link );



