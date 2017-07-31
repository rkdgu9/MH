<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="upload.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/hiun/NanumSquare/master/nanumsquare.css">
</head>
<style>
    hr {
        margin-top: 30px;
    }
    </style>
<body style="font-family: 'Nanum Square'">

<img id="logo" src="Logo1.png" width="200" height="180">

    <div id="name">자료 올리기</div>
<hr>
<div>
<ul>
    <li><a class="active" href="main1.php">Home</a></li>
    <li><a href="main4.php">upload</a></li>
    <li><a href="main3.php">Data</a></li>
</ul>

</div>
<br><br>
<br><br>
<br><br>
<form action="r.php" method="post" style="text-align:center">
        <input style="text-align: center;" type="file" name="userfile">
        <br>
        <input style="text-align: center;" type="submit" name="upload">
    </form>
    
</body>
</html>
