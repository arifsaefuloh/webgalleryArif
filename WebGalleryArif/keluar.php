<?php
    session_start();
    session_destroy();
    echo '<script>alert("Anda berhasil keluar!")</script>';
	echo '<script>window.location="login.php"</script>';
    
?>