<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <base href="" target="_blank">
  <link rel="stylesheet" href="./php/php.css">
  <link rel="icon" href="favicon.png">
  <title>PHP 배우기</title>
  <style>
    table {border-top: 1px solid lightgrey;}
    table td {border-bottom: 1px solid lightgrey; padding: 8px;}
  </style>
</head>
<body>
  <h1>PHP 배우기</h1>

  <?php
    echo "<p style='text-align: center;font-size: 36px;color: darkgreen;'>Welcome to <b>P</b>ersonal <b>H</b>ypertext <b>P</b>rocessor</p>";
    echo "\n";
  ?>

  <p>
    PHP는 Server Script 언어이며 동적이고 대화형 웹 문서를 만들기 위한 강력한 도구이다. <br>
    PHP는Microsoft의 ASP에 비해 개발자들이 널리 사용하는 효율적이고 무료인 언어이다.
  </p>
  <table style="width: 100%;">
    <tr>
      <td><a href="./php/phpinfo.php">PHP 정보</a></td>
      <td><a href="./php/example.php">맛보기</a></td>
      <td><a href="./php/introduction.php">PHP 개요</a></td>
      <td><a href="./php/install.php">PHP 설치</a></td>
      <td><a href="./php/syntax.php">PHP 구문</a></td>
      <td><a href="./php/comment.php">PHP 풀이</a></td>
    </tr>
    <tr>
      <td><a href="./php/echo_print.php">출력</a></td>
      <td><a href="./php/datatype.php">자료형</a></td>
      <td><a href="./php/variable.php">변수</a></td>
      <td><a href="./php/constant.php">상수</a></td>
      <td><a href="./php/string.php">문자열</a></td>
      <td><a href="./php/string_function.php">문자열 함수</a></td>
    </tr>
    <tr>
      <td><a href="./php/number.php">숫자</a></td>
      <td><a href="./php/math.php">수학 함수</a></td>
      <td><a href="./php/operator.php">연산자</a></td>
      <td><a href="./php/condition.php">조건문</a></td>
      <td><a href="./php/switch.php">switch 문</a></td>
      <td><a href="./php/loop.php">반복문</a></td>
    </tr>
    <tr>
      <td><a href="./php/function.php">함수</a></td>
    </tr>
  </table>

  <p><a href="./php/drop_down_menu_design/index.html">펼침 메뉴</a></p>
  <div style="text-align: right;">
    <img src="php/img_flower.png" style="width: 50%; opacity: 0.5;">
  </div>
</body>
</html>
