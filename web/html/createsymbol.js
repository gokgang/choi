    function inner_symbol (id, start , end) {
    let num_symbol = start;
    let text = ``;
    text += `<table class='even'>`;
    while (num_symbol < end) {
      text += `<tr>`;
      for (let i = 0; i < 12; i++) {
        text += `<td>&#${num_symbol};<br>${num_symbol}</td>`;
        num_symbol++;
      }
      text += `</tr>`;
    }
    text += `</tr>`;
    document.getElementById(id).innerHTML = text;
  }