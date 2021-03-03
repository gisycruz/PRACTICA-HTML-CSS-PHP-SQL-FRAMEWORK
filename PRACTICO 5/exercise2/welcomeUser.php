<?php
include_once "header.php";
include_once "nav.php";


$user = $_SESSION['loggin'];

?>
<div class="container mt-5">
	<h2 style="text-align: center;">WELCOME!!!!!!</h2>
	<table class="table table-dark">
		<thead>
			<tr>
				<th scope="col">User Name</th>
				<th scope="col">Password</th>
				<th scope="col">First Name</th>
				<th scope="col">Last Name</th>
				<th scope="col">Email</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th><?php echo $user->getUserName(); ?></th>
				<td><?php echo $user->getPassword(); ?></td>
				<td><?php echo $user->getFirstName(); ?></td>
				<td><?php echo $user->getLastName(); ?></td>
				<td><?php echo $user->getEmail(); ?></td>				
			</tr>
			
		</tbody>
	</table>
	<div class="container">
		<form action="process/cambio.php" method="post">
		<div class="row">
		<div class="col-md-10">
			<button name="do" value="continuar" class="btn btn-success">Continuar</button>
		</div>
		<div class="col-md-2">
			<button name="do" value="salir" class="btn btn-danger">Salir</button>	
	</div>
	</div>
	</div>
	</form>
	</div>
	</div>	
</div>
<br>
<div>
<?php include_once "footer.php" ?>
</div>