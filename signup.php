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
        
        $id = $_POST["id"];
        $pass = $_POST["pass"];
            
        $con = new mysqli($servername, $username, $password,$dbname);
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }

        $sql = "INSERT INTO test VALUES ('".$id."','".$pass."')";
        if ($con->query($sql) == TRUE) {
            echo("<script>location.href='start.html';</script>");
            }
            else {
            echo "오류 : " . $sql;
        }
        $conn->close();
    ?>
</body>
</html>
