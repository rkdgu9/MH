<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "opop789";
        $dbname = "test";
        
        $name = $_POST["name"];
        $id = $_POST["id"];
        $pass = $_POST["pass"];
            
        $con = new mysqli($servername, $username, $password,$dbname);
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }

        $sql = "INSERT INTO test VALUES ('$name','$id','$pass')";
        if ($con->query($sql) == TRUE) {
            setcookie("NAME",$name, time() + 3600);
            echo("<script>location.href='index.html';</script>");
            }
            else {
            echo "오류 : " . $sql;
        }
        $conn->close();
    ?>
</body>
</html>
