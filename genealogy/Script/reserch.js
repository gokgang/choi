const section = document.querySelector('section');
    const sectionTopOffset = section.offsetTop;

    window.addEventListener('scroll', e => {
        if (window.pageYOffset >= sectionTopOffset){
            section.style.position = 'fixed';
            section.style.top = 0;
            section.style.left = 0;
            section.style.right = 0;
        } else {
            section.style.position = ' ';
            section.style.top = ' ';
        }
    });

    function findName(){
        const id_input = document.getElementById('input');
       if(id_input.value=="") {
           alert("이름을 입력하세요^-^");
       } else if(!find(id_input.value)) alert("같은 이름의 친족이 더 계시지 않습니다!");
    }