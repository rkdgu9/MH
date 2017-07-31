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
    <?=$_COOKIE["id"]?>
    <?php } ?>선생님 자료</div>
<hr>
<div>
<ul>
    <li><a class="active" href="main1.php">Home</a></li>
    <li><a href="main4.php">upload</a></li>
    <li><a href="main3.php">Data</a></li>
</ul>
</div>
<br>
<br>
<br>
<br>
7월 27일 업로드
<br>
<br>    
    <div>
        <a href="https://s3.ap-northeast-2.amazonaws.com/xusbtest/2017%E1%84%92%E1%85%A1%E1%86%A8%E1%84%82%E1%85%A7%E1%86%AB%E1%84%83%E1%85%A9-%E1%84%91%E1%85%B3%E1%84%85%E1%85%A9%E1%84%8C%E1%85%A6%E1%86%A8%E1%84%90%E1%85%B3%E1%84%80%E1%85%A8%E1%84%92%E1%85%AC%E1%86%A8%E1%84%89%E1%85%A5%E1%84%8B%E1%85%A3%E1%86%BC%E1%84%89%E1%85%B5%E1%86%A8.hwp"><img src="m.png" width="140" height="140"></a>
        <br>
        <span>2017년 학교 프로젝트보고서</span>
    </div>
    <div>
        <a href="https://s3.ap-northeast-2.amazonaws.com/xusbtest/35470184_p0_master1200.jpg"><img src="n.png" width="110" height="140"></a>
        <br>
        <span>사진</span>
    </div>
</body>
</html>
