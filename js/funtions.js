
/* Definimos constantes*/
const dollar = 3441
const fletekilo = 43000/dollar /* en USD */
const comisioninter = 0.02
const data = 5000


/* home function peso volumetrico*/
function operaciones (){
		m1 = document.getElementById("ancho").value;
		m2 = document.getElementById("alto").value;
		m3 = document.getElementById("largo").value;
		p1 = document.getElementById("peso").value;
		v1 = document.getElementById("valor").value;
		r = m1*m2*m3/data;

		/*elije si se tomara el peso volumetrico o el peso kg*/
		if(m1,m2,m3,p1>0){
				if (r>p1) {
					document.getElementById("rvolumetrico").value = r;
				}else {
					document.getElementById("rpeso").value = p1;
				}
				document.getElementById("rvalor").value = v1;
				}
		/* Evalua si r o p1 es el peso tomado */

		if(r>p1){
			flete = r*fletekilo;
		document.getElementById("rflete").value = flete;
		}else{
			flete=p1*fletekilo;
			document.getElementById("rflete").value = flete;
		}

		/*comision por giro internacional*/
		comisionbanco = v1*comisioninter;

		/*CIF en USD*/
		if (flete>0) {
			cif=parseInt(v1)+parseInt(flete);
			document.getElementById("rcif").value = cif;
		}

		/* Honorarios por gestion*/
		if (cif<=600){
			honorarios=(cif*0.25);
			document.getElementById("rhonorarios").value = honorarios;
		}else {
			if ((cif>600) && (cif<=1200)) {
				honorarios=(cif*0.20);
				document.getElementById("rhonorarios").value = honorarios;
			}else {
				if (cif>1200) {
					honorarios=(cif*0.15);
					document.getElementById("rhonorarios").value = honorarios;
				}
			}
		}
		/*total importacion*/
		total=parseFloat(cif)+parseFloat(comisionbanco)+parseFloat(honorarios);
		document.getElementById("rtotal").value = total;

	/*Total en pesos*/
	vpesos=(total*dollar);
	document.getElementById("rvpesos").value = vpesos;

	}

	
		var dt = new Date();

		// Display the month, day, and year. getMonth() returns a 0-based number.
		var month = dt.getMonth()+1;
		var day = dt.getDate();
		var year = dt.getFullYear();
		document.write(month + '-' + day + '-' + year);

		// Output: current month, day, year
	
