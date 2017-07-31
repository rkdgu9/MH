<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/hiun/NanumSquare/master/nanumsquare.css">
</head>
<style>
    hr {
        margin-top: 30px;
    }
    </style>
<body style="font-family: 'Nanum Square'">

<img id="logo" src="Logo1.png" width="200" height="180">

    <div id="name"><?php if(!isset($_COOKIE["id"]) || !isset($_COOKIE["pass"])) { ?>
        로그인되지 않았습니다.
        <a href="login.html">로그인</a>
    <?php } else { ?>
        환영합니다. <?=$_COOKIE["id"]?>
    <?php } ?>선생님</div>
<hr>
<div>
<ul>
    <li><a class="active" href="main1.php">Home</a></li>
    <li><a href="main4.php">upload</a></li>
    <li><a href="main3.php">Data</a></li>
</ul>

</div>

</body>
</html>
