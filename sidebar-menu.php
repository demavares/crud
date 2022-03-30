<?php 

/*Sección que solo puede ver el Super administrador */
if ($_SESSION['permisos_acceso']=='Super Admin') { ?>

    <ul class="sidebar-menu">
        <li class="header">MENU</li>

	<?php 

	if ($_GET["module"]=="start") { 
		$active_home="active";
	} else {
		$active_home="";
	}
	?>
		<li class="<?php echo $active_home;?>">
			<a href="?module=start"><i class="fa fa-home"></i> Inicio </a>
	  	</li>
	<?php


	if ($_GET["module"]=="user" || $_GET["module"]=="form_user") { ?>
		<li class="active">
			<a href="?module=user"><i class="fa fa-user"></i> Administrar Empleados</a>
	  	</li>
	<?php
	}

	else { ?>
		<li>
			<a href="?module=user"><i class="fa fa-user"></i> Administrar Empleados</a>
	  	</li>
	<?php
	}


	if ($_GET["module"]=="password") { ?>
		<li class="active">
			<a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
		</li>
	<?php
	}

	else { ?>
		<li>
			<a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
		</li>
	<?php
	}

	if ($_GET["module"]=="logout") { ?>
		<li class="active">
			<a href="?module=logout"><i class="fa fa-arrow"></i> Salir</a>
		</li>
	<?php
	}

	else { ?>
		<li>
			<a href="?module=logout"><i class="fa fa-arrow" ></i> Salir</a>
		</li>
	<?php
	}
	?>
	</ul>

<?php
}

/*Sección que solo puede ver el empleado */
if ($_SESSION['permisos_acceso']=='Empleado') { ?>

    <ul class="sidebar-menu">
        <li class="header">MENU</li>

	<?php 

  if ($_GET["module"]=="start") { ?>
    <li class="active">
      <a href="?module=start"><i class="fa fa-home"></i> Inicio </a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?module=start"><i class="fa fa-home"></i> Inicio </a>
      </li>
  <?php
  }

  

	if ($_GET["module"]=="password") { ?>
		<li class="active">
			<a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
		</li>
	<?php
	}
	else { ?>
		<li>
			<a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
		</li>
	<?php
	}

	if ($_GET["module"]=="logout") { ?>
		<li class="active">
			<a href="?module=logout"><i class="fa fa-arrow"></i> Salir</a>
		</li>
	<?php
	}

	else { ?>
		<li>
			<a href="?module=logout"><i class="fa fa-arrow"></i> Salir</a>
		</li>
	<?php
	}
	
	?>
	</ul>
<?php
}
?>
<!-- DESARROLLADO POR:
[Ing. Darwin Mavares] ©2022.
Telefono: +58.0414.3601706 / E-mail: darwinmavares@gmail.com
Venezuela.
-->