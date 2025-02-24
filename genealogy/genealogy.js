
  // 아버지를 모르면 입력란 감추기
  function hide(hide) {
    const element = document.getElementById(hide);
    if (element.style.visibility != "hidden") {
      element.style.visibility = "hidden";
      element.value = "";
      document.getElementById("fatherSelector").value = "false";
    } else {
      element.style.visibility = "visible";
      element.value = "";
      document.getElementById("fatherSelector").value = "true";
    }
  }

  // 아버지 이름과 자신의 이름으로 찾기
  function findFamily (fatheName="", selfName="") {
    let count = 0;  // 찾은 사람 수
    const element = document.getElementById('fatherSelector');

    if (element.value === "true" && fatheName === "") {
      return alert("아버지의 이름을 입력하세요!");
    }

    if (selfName === "") {
      return alert("족친의 이름을 입력하세요!");
  }

    if (fatheName != "" && selfName != "") {
      let length = Family.length;
      for (let i=0; i < length; i++){
        let len = Family[i].length;
        for (let j=0; j < len; j++) {
          if (Family[i][j].father === fatheName && Family[i][j].self === selfName) {
            count++;
            if (count  === 1) {
              // document.getElementById("mainframe").src = Family[i][j].url;
              window.open(Family[i][j].url);
              break;
            } else if (count > 1) {
              window.open(Family[i][j].url);
              break;
            }
          }//end if
        }//end inner for
      }//end outter for
    } else {
      let length = Family.length;
      for (let i=0; i < length; i++){
        let len = Family[i].length;
        for (let j=0; j < len; j++) {
          if (Family[i][j].self === selfName) {
            // window.open(Family[i][j].url);
            count++;
            if (count  === 1) {
              // document.getElementById("mainframe").src = Family[i][j].url;
              window.open(Family[i][j].url);
              break;
            } else if (count > 1) {
              window.open(Family[i][j].url);
              break;
            }
            /*  if (count > 0) {
              window.open(Family[i][j].url);
              break;
            }
            break; */
            // return;
          }//end if
        }//end inner for
      }//end outter for
    } // end else-if

    if (count > 0) {
      alert(`모두 ${count} 명의 족친을 찾았습니다.`);
      return;
    } else {
      return  alert(`아버지 [${fatheName}], 이름 [${selfName}]의 족친은 계시지 않습니다!`);
    }

  }// end findFamily()

  // 입력 헤더 고정
  const section = document.querySelector('section');
  const sectionTopOffset = section.offsetTop;

  window.addEventListener('scroll', e => {
      if (window.pageYOffset >= sectionTopOffset){
          section.style.position = 'fixed';
          section.style.top = 0;
          section.style.left = 0;
          section.style.right = 0;
      } else {
          section.style.position = '';
          section.style.top = '';
      }
  });