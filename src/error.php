
    <?php
    include('config/header.php');
     if(isset($_SESSION['noti'])){
        echo $_SESSION['noti'];
        unset($_SESSION['noti']);
    }


    ?>

    
    <div class="container text-center mt-5 error">
    <h1>404 NOT FOUND</h1>
    <h3>
    <a href="index.php" >Quay lại trang chủ</a>
    <br>
    <img src="https://www.freeiconspng.com/uploads/error-icon-4.png" alt="">
    </h3>
    </div>
</body>
<?php
include('config/footer.php');
?>