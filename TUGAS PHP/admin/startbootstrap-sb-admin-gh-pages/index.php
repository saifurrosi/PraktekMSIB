<?php 
include_once 'heeder.php';
include_once 'menu.php';

?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1>selamat datang di web admin</h1>
                        <?php 
                        error_reporting(0);
                        //algoritma menangkap url agar masuk kedalam index
                        $url = $_GET['url'];
                        if($url == 'dashboard'){
                            include_once 'dashboard.php';
                        } else if (!empty($url)){
                            include_once ''.$url.'.php';
                        } else { 'dashboard.php';
                       
                        }
                        ?>
                    </div>
                </main>
</div>

<?php 
//memanggil file dibawah
include_once 'footer.php';
?>