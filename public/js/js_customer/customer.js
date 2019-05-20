var base_url = $('meta[name="base_url"]').attr('content');

$().ready(() => {
   cargarTabla();	
});

function modalCustomer(){

	let action = base_url + "/customer/modalCustomer";	
	$.ajax({
		type: 'GET',
		url: action,
		data: null,
		success: (response) => {
			$('#resultModalCustomer').html(response);
		},
		error: (response) => {
			alert("a ocurrido un error");
		}	

	});
}

function GuardarCustomer(){

	jQuery.noConflict();
	let nombre = document.getElementById('Nombre').value;
	let telefono = document.getElementById('Telefono').value;

	let action = base_url + "/customer/GuardarCustomer";	
	$.ajax({
		type: 'POST',
		url: action,
		data: { nombre , telefono },
		success: (response) => {
			$('#modalCustomer').modal('hide');
			cargarTabla()
		},
		error: (response) => {
			alert("a ocurrido un error");
		}	

	});

}


  function cargarTabla(){
  		
	let action = base_url + "/customer/cargarTabla";	
	$.ajax({
		type: 'GET',
		url: action,
		data: null,
		success: (response) => {
			$('#cargarTabla').html(response);

			$('#myTable').DataTable( {
			    responsive: true
			});
		},
		error: (response) => {
			alert("a ocurrido un error");
		}	

	});
}

function cam(){
let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
  scanner.addListener('scan', function (content) {
    console.log(content);
    window.open(content, "_blank");
  });
  Instascan.Camera.getCameras().then(function (cameras) {
    if (cameras.length > 0) {
      scanner.start(cameras[0]);
    } else {
      console.error('No cameras found.');
    }
  }).catch(function (e) {
    console.error(e);
  });
}