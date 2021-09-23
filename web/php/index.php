<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <base href="" target="_blank">
  <link rel="stylesheet" href="./php.css">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <title>PHP 배우기</title>
  <style>
  div {
    display: inline-block;
    width: 49%;
    vertical-align: top;
  }
  </style>
</head>

<body>
  <h1>PHP 배우기</h1>

  <?php
  echo "<p style='font-size: 36px;color: darkgreen;'>Welcome to <b>P</b>ersonal <b>H</b>ypertext <b>P</b>rocessor</p>";
  echo "\n";
  ?>

  <p>
    PHP는 Server Script 언어이며 동적이고 대화형 웹 문서를 만들기 위한 강력한 도구이다. <br>
    PHP는Microsoft의 ASP에 비해 개발자들이 널리 사용하는 효율적이고 무료인 언어이다.
  </p>
  <ul>
    <div>
      <li><a href="./php_doc/basic_syntax_phptag.php">기본 구문</a></li>
      <ul>
        <li><a href="./phpinfo.php">PHP 정보</a></li>
        <li><a href="./example.php">예문</a></li>
        <li><a href="./inuloduction.php">PHP 개요</a></li>
        <li><a href="./install.php">PHP 설치</a></li>
        <li><a href="./syntax.php">PHP 구문</a></li>
        <li><a href="./comment.php">PHP 풀이</a></li>
        <li><a href="./echo_print.php">출력</a></li>
      </ul>
      <li><a href="./datatype.php">자료형</a></li>
      <ul>
        <li><a href="./variable.php">변수</a></li>
        <li><a href="./constant.php">상수</a></li>
        <li><a href="./suling.php">문자열</a></li>
        <li><a href="./suling_function.php">문자열 함수</a></li>
        <li><a href="./number.php">숫자</a></li>
        <li><a href="./perator.php">연산자</a></li>
      </ul>
      <li>제어문</li>
      <ul>
        <li><a href="./condition.php">조건문</a></li>
        <li><a href="./switch.php">switch 문</a></li>
        <li><a href="./loop.php">반복문</a></li>
      </ul>
      <li><a href="./array.php">배열</a></li>
      <ul>
        <li><a href="./array_index.php">차례있는 배열</a></li>
        <li><a href="./array_associative.php">연관 배열</a></li>
        <li><a href="./array_multidemension.php">배열 겹치기</a></li>
        <li><a href="./array_sort.php">배열의 정렬</a></li>
      </ul>
      <li><a href="./super_global.php">전역 변수</a></li>
      <ul>
        <li><a href="./super_global_server.php">$_SERVER</a></li>
        <li><a href="./super_global_request.php">$_REQUEST</a></li>
        <li><a href="./super_global_post.php">$_POST</a></li>
        <li><a href="./super_global_get.php">$_GET</a></li>
        <li><a href="./regular_expression.php">정규표현식</a></li>
      </ul>
      <li><a href="./function.php">함수</a></li>
      <ul>
        <li><a href="./math.php">수학 함수</a></li>
        <li><a href="./function_callback.php">콜백 함수</a></li>
      </ul>
    </div>
    <div>
      <li><a href="./form.php">양식 처리</a></li>
      <ul>
        <li><a href="./form_validation.php">유효성 검사</a></li>
        <li><a href="./form_required.php">필수 양식칸</a></li>
        <li><a href="./form_check_url_email.php">url email 확인</a></li>
        <li><a href="./form_complete.php">완전한 양식</a></li>
        <li><a href="./form_example.php">form 예제</a></li>
      </ul>
      <li><a href="./date_time.php">날짜와 시간</a></li>
      <li><a href="./filter.php">자료 검증</a></li>
      <ul>
        <li><a href="./filter_reference.php">검증 함수</a></li>
        <li><a href="./filter_advanced.php">고급 검증</a></li>
        <li><a href="./json.php">JSON</a></li>
        <li><a href="./exceptions.php">예외 처리</a></li>
      </ul>
      <li><a href="./php_file.php">파일 처리</a></li>
      <ul>
        <li><a href="./php_include.php">File 포함</a></li>
        <li><a href="./file_open.php">File 열고 닫기</a></li>
        <li><a href="./file_create.php">File 만들기</a></li>
        <li><a href="./file_upload.php">File 올리기</a></li>
        <li><a href="./cookies.php">Cookies</a></li>
        <li><a href="./sessions.php">Sessions</a></li>
      </ul>
      <li><a href="./object_oriented_programming.php">객체지향 프로그래밍</a></li>
      <ul>
        <li><a href="./oop_constructor.php">생성자</a></li>
        <li><a href="./oop_destructor.php">소멸자</a></li>
        <li><a href="./oop_access_modifier.php">접근 한정자</a></li>
        <li><a href="./oop_inheritance.php">Class 상속</a></li>
        <li><a href="./oop_constants.php">Class 상수</a></li>
        <li><a href="./oop_classes_abstract.php">추상 Class</a></li>
        <li><a href="./oop_interface.php">Interface</a></li>
        <li><a href="./oop_trait.php">판박이</a></li>
        <li><a href="./oop_static_methods.php">정적 Method</a></li>
        <li><a href="./oop_static_properties.php">정적 속성</a></li>
      </ul>
      <li><a href="./namespace.php">Namespace</a></li>
      <li><a href="./iterables.php">되풀이형</a></li>
      <li><a href="./mysql/index.php">MySQL</a></li>
    </div>
  </ul>

  <p><a href="./php/drop_down_menu_design/index.html">펼침 메뉴</a></p>
  <div style="text-align: right;">
    <img src="./img_flower.png" style="width: 50%; opacity: 0.5;">
  </div>
</body>

</html>