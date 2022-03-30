 <!-- Llamado a la DB -->
 <?php  
$query = mysqli_query($mysqli, "SELECT name_user FROM usuarios WHERE id_user='$_SESSION[id_user]'");
$data = mysqli_fetch_assoc($query);
?>


  <section class="content-header">
  <div class="alert alert-warning alert-dismissable">
    <i class="glyphicon glyphicon-user icon-title"></i>

    <?php $today = getdate(); $hora=$today["hours"];
            if ($hora<6) {
            echo("Has madrugado. ");
            }elseif($hora<12){
            echo("Buenos días. ");
            }elseif($hora<=18){
            echo("Buenas Tardes. ");
            }else{ echo("Buenas Noches. "); }
            ?>
            <strong><b><?php echo $data['name_user'];?>.</b></strong> Bienvenido al Sistema.
</div>

  </section>
  <!-- DESARROLLADO POR:
[Ing. Darwin Mavares] ©2022.
Telefono: +58.0414.3601706 / E-mail: darwinmavares@gmail.com
Venezuela.
-->