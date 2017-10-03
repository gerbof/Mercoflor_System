$('document').ready(

	function() {
     
        document.getElementById('choice_0').onclick = function() {
				document.getElementById('cantidad').style.display="initial";
				//document.getElementById('ayudante').style.display="initial";
		}  
		
		document.getElementById('choice_1').onclick = function() {
				document.getElementById('cantidad').style.display="none";
				document.getElementById('ayudante').style.display="none";
				document.getElementById("cant").selectedIndex="0";
		}
        });

function seleccionTipo(){
	switch (document.getElementById("Usuario_idperfil_usuario").selectedIndex){
		case 1:
			document.getElementById("condicion").style.display="none";
			document.getElementById("Usuario_nrosocio").value=socio;						
			break;
		case 2:
			document.getElementById("condicion").style.display="none";
			document.getElementById("Usuario_nrosocio").value="";
			break;
		case 3:
			document.getElementById("condicion").style.display="initial";
			document.getElementById("Usuario_nrosocio").value="";
			break;
	}
}

function selecCant(){
		switch (document.getElementById("cant").selectedIndex){
			case 1:
				document.getElementById('ayudante').style.display="initial";
				document.getElementById('ayu1').style.display="initial";
				document.getElementById('ayu2').style.display="none";
				break;
			case 2:
				document.getElementById('ayudante').style.display="initial";
				document.getElementById('ayu1').style.display="initial";
				document.getElementById('ayu2').style.display="initial";
				break;
		}
}