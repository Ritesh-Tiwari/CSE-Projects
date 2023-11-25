<?php
require 'Encryption.php';
// require "../e.php";
// Set a secret key
const KEY = 'avcdev-odoo-rtiwari';

 // Defining variables
 $username = $databasae = $password = $enc_password = $decoded_text = "";

 // Checking for a POST request
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //  $username = $_POST["username"];
  //  $database = $_POST["database"];
   $password = $_POST["password"];

  // Encrypt message
  $enc_password = Encryption::Encode($password, KEY);


  // $myfile = fopen(".env", "w") or die("Unable to open file!");
  // // $txt = "HOST = http://localhost:8069 \nUSERNAME = $username\nDATABASE = $database\nPASSWORD = $enc_password";
  // fwrite($myfile, $txt);
  // fclose($myfile);

//   HOST = http://localhost:8069
// USERNAME = odoo
// DATABASE = auto11
// PASSWORD = odoo

}

 ?>



<!doctype html>
<html lang="en">

<head>
    <title>Encription Form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<style>
*{
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

</style>

</head>

<body>
  <div class="container">
    <div class="row">
        <div class="col-8 mx-auto">
            <div class="my-5 text-center text-dark">
                <h1 style="text-transform: capitalize;">
                    Generate Encrypted Password 
                </h1>
            </div>
            <div class="col-lg-10 m-auto">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                    <!-- <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text"
                    class="form-control" name="username" id="username" aria-describedby="helpId" placeholder="username">
                </div>
        
        
                <div class="mb-3">
                    <label for="database" class="form-label">Database</label>
                    <input type="text"
                      class="form-control" name="database" id="database" aria-describedby="helpId" placeholder="Database">
                  </div> -->


                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" class="form-control" name="password" id="password"
                            aria-describedby="helpId" placeholder="Password">
                    </div>
                    <button type="submit" value="submit" name="submit" class="btn btn-dark mt-3">
                        Generate Password</button>
                </form>
                <?php
        echo "<br><br><br>";
       
        // echo "Username : ". $username;
        // echo "<br>";
        // echo "Database : " . $database;
        echo "<strong>Encrypted Password : </strong> ". $enc_password;
        echo "<br>";
        $decoded_text = Encryption::Decode($enc_password, KEY);
       
        echo "Decrypt password : ". $decoded_text; 
    ?>

            </div>
        </div>
    </div>



  </div>

    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>