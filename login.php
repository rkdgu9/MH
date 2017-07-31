<?php
    $id = "user";
    $pass = "password";
    setcookie("id",$_POST["id1"],time() + 3600); setcookie("pass",$_POST["pass1"],time() + 3600);
?>
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
            $rt=0;    
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
                    $rt=1;
                    echo("<script>location.href='main1.php';</script>");
                }
            }
            if($rt != 1){
                setcookie("id","",time()-3600);
                setcookie("pass","",time()-3600);
                echo ("<script>window.alert('비밀번호나 아이디가 틀립니다');</script>");
                echo("<script>location.href='login.html';</script>");
            }
        ?>
    </body>
</head>