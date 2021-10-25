<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <title>곡강최가 간지연표</title>
  <style>
    * {font-family: serif;}
    body {
      min-width: 800px;
      max-width: 1600px;
      margin: auto;
      padding: 16px;
      line-height: 1.6rem;
    }
    table.even {
      border: 1px solid grey;
      border-collapse: collapse;
      width: 100%;
    }
    table.even tr:nth-child(even){
      background-color: #eee;
    }
    table tr:hover {
      background-color: #def;
    }
    table td {
      border: 1px solid grey;
      text-align: right;
      width: 90px;
    }
    table td:first-child, table td:nth-child(2) {
      text-align: center;
    }
  </style>
</head>
<body>
  <h1>천간 지지 연표</h1>
  <hr>
<pre class="border">
  <table class="even">
<?php
  $천간 = ['갑', '을', '병', '정', '무', '기', '경', '신', '임', '계'];
  $gan = ['甲', '乙', '丙', '丁', '戊', '己', '庚', '辛', '壬', '癸'];
  $지지 = ['자', '축', '인', '묘', '진', '사', '오', '미', '신', '유', '술', '해'];
  $jiji = ['子', '丑', '寅', '卯', '辰', '巳', '午', '未', '申', '酉', '戌', '亥'];
  $base = 904;
/* 
  $myfile = fopen("ganji.html", "w") or die("열 수 없는 파일!");

  fwrite($myfile, '<table>');
  for ($i=0, $j=0, $k=0; $k < 60; $k++, $y++) {
    fwrite($myfile, '<tr>');
    fwrite($myfile, '<td>' . $천간[$i] . $지지[$j] . '</td>');
    fwrite($myfile, '<td>' . $gan[$i] . $jiji[$j] . '</td>');
    for ($y=$base; $y < 2044; $y += 60) {
      fwrite($myfile, '<td>' . $y . '</td>');
    }
    $base++;
    $i++;
    if ($i == 10) {
      $i = 0;
    }
    $j++;
    if ($j ==12){
      $j = 0;
    }
    fwrite($myfile, '</tr>');
  }
  fwrite($myfile, '</table>');

  fclose($myfile); */
  ?>
</pre>
</body>
</html>