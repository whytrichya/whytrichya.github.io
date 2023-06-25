<?php
    session_start();
    include 'koneksi.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin | The Brother</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Page Login -->
    <div class="page-login">
        <!-- box -->
        <div class="box box-login">
            <div class="box-header text-center">
                Login
            </div>
            <!-- Box Body -->
            <div class="box-body">

                <?php 
                
                    if(isset($_GET['msg'])){
                        echo "<div class='alert alert-error'>".$_GET['msg']."</div";
                    } 
                    if(isset($_GET['success'])){
                        echo '<div class="alert alert-succes">'.$_GET['success'].'</div>';
                    }
                
                ?>

                <!-- Form Login -->
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="user" placeholder="Username" class="input-control">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="pass" placeholder="Password" class="input-control">
                    </div>
                    <input type="submit" name="submit" value="Login" class="btn btn-light">
                </form>

                <?php
                    if(isset($_POST['submit'])){
                        $user = mysqli_real_escape_string($koneksi, $_POST['user']);
                        $pass = mysqli_real_escape_string($koneksi, $_POST['pass']);
                        
                        $cek = mysqli_query($koneksi, "SELECT * FROM adm_thebrother WHERE username = '".$user."' ");
                        if(mysqli_num_rows($cek) > 0){
                            $d = mysqli_fetch_object($cek);
                            if(MD5($pass) == $d->password_adm){
                                $_SESSION['status_login'] = true;
                                $_SESSION['uid']          = $d->id_adm;
                                $_SESSION['uname']        = $d->nama_adm;
                                $_SESSION['user']        = $d->username;

                                echo "<script>window.location = 'admin.php'</script>";
                            }else{
                                echo '<div class="alert alert-error">Username atau Password salah</div>';
                            }
                        }else{
                            echo '<div class="alert alert-error">Username tidak ditemukan</div>';
                        }
                    }
                ?>
            </div>
            <!-- Box Footer -->
            <div class="box-footer text-center">
                <a href="login.php">Halaman Utama</a>
            </div>
        </div>

    </div>
</body>
</html>