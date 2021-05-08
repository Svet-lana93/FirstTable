  function tablemore() {
   if (document.getElementById("textarea").value != "") { 
    let name = document.querySelector('.NAME').cloneNode(true);
	tableAdd.appendChild(name);
    let empty = document.querySelector('.Empty').cloneNode(true);
	tableAdd.appendChild(empty);
    let data = document.querySelector('.DATA').cloneNode(true);
	tableAdd.appendChild(data);
    let clear = document.querySelector('.clear').cloneNode(true);
	tableAdd.appendChild(clear);
    let message = document.querySelector('.Message').cloneNode(false);
	tableAdd.appendChild(message);		
	message.innerHTML = document.getElementById("textarea").value;
	document.getElementById('textarea').value = "";
  }}
