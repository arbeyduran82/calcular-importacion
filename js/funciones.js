	
	/*Calculamos peso volumetrico */
	var flete = 14.4 //Costo de flete internacional por kilo en USD

	var volumetrico = function(){

		var  m1 = document.getElementById("ancho").value;
		var  m2 = document.getElementById("alto").value;
		var  m3 = document.getElementById("largo").value;
		r = m1*m2*m3/5000;	
		document.getElementById("rvolumetrico").value = r;

		}

	/*mostramos peso en kilos ingresado por el cliente */
	var peso = function(){

		p1 = document.getElementById('peso').value;
		document.getElementById('rpeso').value = p1
		}

	var costo = function(){

		var v1 = document.getElementById('valor').value;
		document.getElementById('rvalor').value = v1
		}

	/* Evalua cual de las dos funciones anteriores es mayor
	var mayor =function(){
	
			if(r > p1){
				document.getElementById('resultado').value = r
				}

			else{

				document.getElementById('resultado').value = p1

				}
		
		}*/