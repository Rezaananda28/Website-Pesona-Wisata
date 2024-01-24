<?php
         //Fungsi untuk mencegah inputan karakter yang tidak sesuai
         function input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        //Cek apakah ada kiriman form dari method post
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            session_start();
            include "admin/koneksi.php";
            $username = input($_POST["username"]);
            $password = input($_POST["password"]);

            $sql = "select * from tbadmin where username='".$username."' and password='".$password."' limit 1";
            $hasil = mysqli_query ($con,$sql);
            $jumlah = mysqli_num_rows($hasil);

            if ($jumlah>0) {
                $row = mysqli_fetch_assoc($hasil);
                $_SESSION["kdadmin"]=$row["kdadmin"];
                $_SESSION["nama"]=$row["nama"];
                $_SESSION["username"]=$row["username"];
                $_SESSION["password"]=$row["password"];
                $_SESSION["kategori"]=$row["kategori"];
        
        
                if ($_SESSION["kategori"]=$row["kategori"]==1)
                {
                    header("Location:admin/index.php");
                } else if ($_SESSION["kategori"]=$row["kategori"]==2){
                    header("Location:cs/index.php");
                }
        
                
            }else {
                echo "<div class='alert alert-danger'>
                <strong>Error!</strong> Username dan password salah. 
              </div>";
            }

        }
    
    ?>      