
 cul = document.querySelector('#formulario');
 nombre = document.getElementById('txtnombre');
 tipo = document.getElementById('txttipo');
 inicio = document.getElementById('txtfi');
 final = document.getElementById('txtff');
 area = document.getElementById('txtarea');
 descripcion = document.getElementById('txtdescripcion');
 rendimiento = document.getElementById('txtreni');
 enviarBtnCul = document.getElementById('enviarCul');
 cerrarBtnCul = document.getElementById('cerrarCul');

cul.addEventListener('input', validarCamposCul);

function validarCamposCul() {
  if (nombre.value !== '', tipo.value !== '' && inicio.value !== '' && final.value !== '' && area.value !== '' && descripcion.value !== '' && rendimiento.value !== '') {
    enviarBtnCul.disabled = false;
  } else {
    enviarBtnCul.disabled = true;
  }
}

function limpiarCamposCul(){
  document.getElementById("formulario").reset();
} 






