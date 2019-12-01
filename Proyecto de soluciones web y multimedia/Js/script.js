(function () {
	document.addEventListener("DOMContentLoaded", function() {
		

		var boton_movil = document.getElementById('boton-movil');
		var botones = document.getElementById('botones');
		var estado_btn = false;

		document.addEventListener("scroll", function(e) {
			
			// if (window.scrollY > 50) {
			// 	boton_movil.classList.add("boton-fijo");
			// 	boton_movil.classList.remove("boton-movil");

			// }else {
			// 	boton_movil.classList.remove("boton-fijo");
			// 	boton_movil.classList.add("boton-movil");

			// }

			//condicion de barra fija.
			if(window.scrollY > 10) {

				document.querySelector("nav").classList.add("nav1");
			}else if(window.scrollY == 0) {
				console.log("klk");
				document.querySelector("nav").classList.remove("nav1");
			}

		});
		// condicion para el boton flotante en el celular 

		document.getElementById("boton-movil").addEventListener("click", function() {
			if(estado_btn == false) {
				botones.style.left = "0";
				estado_btn = true;
				document.getElementById("efecto").style.display = "block";
			}
		});

		document.getElementById("efecto").addEventListener("click", function() {
			if(estado_btn == true) {
				botones.style.left = "-100%";
				document.getElementById("efecto").style.display = "none";
				estado_btn = false;

			}
		});

	});
})();