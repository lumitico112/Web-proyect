<?php
/**
 * Created by:
 * author: @LuisMi
 * Fecha: 2025-07-14
 * Time: 15:12
 */
if ( (isset($_SESSION['mensaje'])) && (isset($_SESSION['icono'])) ) {
    $mensaje = $_SESSION['mensaje'];
    $icono = $_SESSION['icono'];
    ?>
    <script>
        Swal.fire({
            position: "top",
            icon: "<?= $icono;?>",
            title: "<?= $mensaje;?>",
            showConfirmButton: false,
            timer: 3000
        });
    </script>
    <?php
        unset($_SESSION['mensaje']);
        unset($_SESSION['icono']);   
}
?>