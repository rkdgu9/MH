<head>
    <head>
        <meta charset="utf-8">
        <title>로그인</title>
    </head>
    <body>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "opop789";
            $dbname = "test"; 
            $A;
            
            $id = $_POST["id1"];
            $pass = $_POST["pass1"];
            
            $conn = new mysqli($servername, $username, $password, $dbname);
            if($conn->connect_error) {
                die("연결 실패 :". $conn->connect_error);
            }
            $sql = "SELECT Id, Pass FROM test";
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($result)){
                if($row['Id'] == $id && $row['Pass'] == $pass){
                    <?php
                        $Id1 = "user";
                        $Pass1 = "password";
                        $Name1 = "song";
                        setcookie("id",$_POST["name1"],time() + 3600); 
                        setcookie("id",$_POST["id1"],time() + 3600); setcookie("pass",$_POST["pass1"],time() + 3600);
                    ?>
                    echo("<script>location.href='../home/index.html';</script>");
                }
            }
            
        ?>
    </body>
</head>