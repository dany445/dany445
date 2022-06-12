<!DOCTYPE html>
<html>
<head>
	<title>Documento</title>
</head>
<link rel="stylesheet" type="text/css" href="estilo.css">
<body>
		<h1>Listado de Personajes</h1>

		<form method="POST" action="registrar.php" enctype="multipart/form_data">

            <strong><label for='nombre'>Nombre:</label></strong>
            <input type="text" name="nombre" placeholder="Ingrese el nombre"></input><br>

            <strong><label for='raza'>Raza:</label></strong>
            <input type="text" name="raza" placeholder="Ingrese la raza"></input><br>

            <strong><label for='ocupacion'>Ocupación:</label></strong>
            <input type="text" name="ocupacion" placeholder="Ingrese la ocupacion"></input><br>

            <strong><label for='primeraaparicion'>Primera Aparición:</label></strong>
            <input type="text" name="primeraaparicion" placeholder="Ingrese la primera aparicion"></input><br>

            <strong><label for='bio'>Biografía:</label></strong>
            <input type="text" name="bio" placeholder="Ingrese la biografía"></input><br><br>

            <input type="submit" name="submit" value="Introducir">
        </form>
		<table>
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Raza</th>
		        <th>Ocupación</th>
				<th>Primera Aparición</th>
				<th>Bio</th>
			</tr>
			<tbody>
				<?php include_once("listar.php");?>
				<?php foreach ($personas as $persona) {?>
				<tr>
					<td><?php echo $persona->id?></td>
					<td><?php echo $persona->nombre?></td>
					<td><?php echo $persona->raza?></td>
					<td><?php echo $persona->ocupacion?></td>
					<td><?php echo $persona->primeraaparicion?></td>
		  		    <td><?php echo $persona->bio?></td>
				</tr>
			<?php }?>
		</tbody>
	</table>	
</body>
</html>

