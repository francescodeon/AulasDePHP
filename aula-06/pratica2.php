<a href="pratica2.php?menu=aluno">Aluno</a>
<a href="pratica2.php?menu=professor">Professor</a>

<?php
if(isset($_GET['menu']))
{
	if($_GET['menu']=='aluno')
	{
		echo 'Aluno';
	}
	elseif($_GET['menu']=='professor')
	{
		echo 'Professor';
	}
}
?>
	
