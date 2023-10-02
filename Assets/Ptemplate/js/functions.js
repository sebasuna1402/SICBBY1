
if (document.querySelector("#formVoluntario")) {


	let formVoluntario = document.querySelector("#formVoluntario");
	formVoluntario.addEventListener('submit', function (e) {
		e.preventDefault();


		let identificacion_volunteer = document.querySelector("#identificacion_volunteer").value;
		let frist_name_volunteer = document.querySelector("#frist_name_volunteer").value;
		let last_name_volunteer = document.querySelector("#last_name_volunteer").value;
		let email = document.querySelector("#email").value;
		let address_volunteer = document.querySelector("#address_volunteer").value;
		let age_volunteer = document.querySelector("#age_volunteer").value;
		let ocupation_volunteer = document.querySelector("#ocupation_volunteer").value;
		let phone_number_volunteer = document.querySelector("#phone_number_volunteer").value;
		let mensaje = document.querySelector("#mensaje").value;

		//validaciones vacias
		if (identificacion_volunteer == "") {
			swal("", "La identificacion es obligatorio", "error");
			return false;
		}

		if (!fntEmailValidate(email)) {
			swal("", "El email no es válido.", "error");
			return false;
		}

		if (frist_name_volunteer == "") {
			swal("", "El nombre es obligatorio.", "error");
			return false;
		}

		if (last_name_volunteer == "") {
			swal("", "El apellido es obligatorio.", "error");
			return false;
		}

		if (address_volunteer == "") {
			swal("", "La direcccion es obligatoria", "error");
			return false;
		}

		if (age_volunteer == "") {
			swal("", "La edad es obligatoria.", "error");
			return false;
		}

		if (ocupation_volunteer == "") {
			swal("", "La ocupacion es obligatoria.", "error");
			return false;
		}

		if (phone_number_volunteer == "") {
			swal("", "El numero de telefono es obligatorio.", "error");
			return false;
		}

		if (mensaje == "") {
			swal("", "Por favor escribe el mensaje.", "error");
			return false;
		}
		
		let request = (window.XMLHttpRequest) ?
			new XMLHttpRequest() :
			new ActiveXObject('Microsoft.XMLHTTP');

		let ajaxUrl = base_url + '/Corredor/voluntario';

		let formData = new FormData(formVoluntario);


		console.log("Enviando solicitud AJAX"); // Agrega esta línea

		request.open("POST", ajaxUrl, true);
		request.onerror = function () {
			swal("", "Error en la solicitud AJAX", "error");
		}; // Agrega esta línea antes de request.send(formData);


		request.send(formData);


		request.onreadystatechange = function () {
			if (request.readyState != 4) return;
			if (request.status == 200) {
				swal("", "Se ha guardado su informacion", "success");
				document.querySelector("#formVoluntario").reset();
				//alert("Información enviada correctamente.");
				let objData = JSON.parse(request.responseText);
				if (objData.status) {
					
				} else {
					swal("", "No se ha guardado su informacion", "error");
				}
			}

			return false;
		}

	}, false);
}

