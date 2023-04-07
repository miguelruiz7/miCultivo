// FUNCIONES FRAME Y CIERRE
function index() {
    if(navigator.onLine ) {
        fetch('login.php',{method: 'GET'})
            .then(function(response) {

                if(!response.ok) {
                    throw Error(response.statusText);
                }

                if(response.ok) {
                    
                 var iframe = document.getElementById("main");
                 iframe.src = "cultivo";
                 
                }
    
                return response;
    
            }).then(function(response) {
                // response.ok fue true
                console.log('ok');   
            }).catch(function(error) {
                var alerta = "Sin conexion a red";
                var icono = "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-exclamation-circle' viewBox='0 0 16 16'><path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/> <path d='M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z'/></svg>";
                var mensaje = "<div class='alert alert-dismissible bg-dark text-light fade show  m-2' role='alert'><center>"+ alerta +" "+ icono +"</center></div>";
                document.getElementById("notificaciones").innerHTML = mensaje;
                window.setTimeout(function() {
                    $(".alert").fadeTo(200, 0).slideUp(200, function(){
                        $(this).remove(); 
                    });
                }, 2500);  
                console.log('Problema al realizar la solicitud: ' + error.message);
                
               
            });
    }else{
       var alerta = "Sin conexion a red";
                var icono = "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-exclamation-circle' viewBox='0 0 16 16'><path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/> <path d='M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z'/></svg>";
                var mensaje = "<div class='alert alert-dismissible bg-dark text-light fade show  m-2' role='alert'><center>"+ alerta +" "+ icono +"</center></div>";
                document.getElementById("notificaciones").innerHTML = mensaje;
                window.setTimeout(function() {
                    $(".alert").fadeTo(200, 0).slideUp(200, function(){
                        $(this).remove(); 
                    });
                }, 2500);  
    }

  }

function calculadora() {
    if(navigator.onLine ) {
        fetch('login.php',{method: 'GET'})
            .then(function(response) {

                if(!response.ok) {
                    throw Error(response.statusText);
                }

                if(response.ok) {
                    
                 var iframe = document.getElementById("main");
                 iframe.src = "calculadora";
                 
                }
    
                return response;
    
            }).then(function(response) {
                // response.ok fue true
                console.log('ok');   
            }).catch(function(error) {
                var alerta = "Sin conexion a red";
                var icono = "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-exclamation-circle' viewBox='0 0 16 16'><path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/> <path d='M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z'/></svg>";
                var mensaje = "<div class='alert alert-dismissible bg-dark text-light fade show  m-2' role='alert'><center>"+ alerta +" "+ icono +"</center></div>";
                document.getElementById("notificaciones").innerHTML = mensaje;
                window.setTimeout(function() {
                    $(".alert").fadeTo(200, 0).slideUp(200, function(){
                        $(this).remove(); 
                    });
                }, 2500);  
                console.log('Problema al realizar la solicitud: ' + error.message);
                
               
            });
    }else{
       var alerta = "Sin conexion a red";
                var icono = "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-exclamation-circle' viewBox='0 0 16 16'><path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/> <path d='M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z'/></svg>";
                var mensaje = "<div class='alert alert-dismissible bg-dark text-light fade show  m-2' role='alert'><center>"+ alerta +" "+ icono +"</center></div>";
                document.getElementById("notificaciones").innerHTML = mensaje;
                window.setTimeout(function() {
                    $(".alert").fadeTo(200, 0).slideUp(200, function(){
                        $(this).remove(); 
                    });
                }, 2500);  
    }

  }


 function ajustes() {
    if(navigator.onLine ) {
        fetch('login.php',{method: 'GET'})
            .then(function(response) {

                if(!response.ok) {
                    throw Error(response.statusText);
                }

                if(response.ok) {
                    
                 var iframe = document.getElementById("main");
                 iframe.src = "ajustes";
                 
                }
    
                return response;
    
            }).then(function(response) {
                // response.ok fue true
                console.log('ok');   
            }).catch(function(error) {
                var alerta = "Sin conexion a red";
                var icono = "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-exclamation-circle' viewBox='0 0 16 16'><path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/> <path d='M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z'/></svg>";
                var mensaje = "<div class='alert alert-dismissible bg-dark text-light fade show  m-2' role='alert'><center>"+ alerta +" "+ icono +"</center></div>";
                document.getElementById("notificaciones").innerHTML = mensaje;
                window.setTimeout(function() {
                    $(".alert").fadeTo(200, 0).slideUp(200, function(){
                        $(this).remove(); 
                    });
                }, 2500);  
                console.log('Problema al realizar la solicitud: ' + error.message);
                
               
            });
    }else{
       var alerta = "Sin conexion a red";
                var icono = "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-exclamation-circle' viewBox='0 0 16 16'><path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/> <path d='M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z'/></svg>";
                var mensaje = "<div class='alert alert-dismissible bg-dark text-light fade show  m-2' role='alert'><center>"+ alerta +" "+ icono +"</center></div>";
                document.getElementById("notificaciones").innerHTML = mensaje;
                window.setTimeout(function() {
                    $(".alert").fadeTo(200, 0).slideUp(200, function(){
                        $(this).remove(); 
                    });
                }, 2500);  
    }

  }


  function ayuda() {
    if(navigator.onLine ) {
        fetch('login.php',{method: 'GET'})
            .then(function(response) {

                if(!response.ok) {
                    throw Error(response.statusText);
                }

                if(response.ok) {
                    
                 var iframe = document.getElementById("main");
                 iframe.src = "ayuda";
                 
                }
    
                return response;
    
            }).then(function(response) {
                // response.ok fue true
                console.log('ok');   
            }).catch(function(error) {
                var alerta = "Sin conexion a red";
                var icono = "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-exclamation-circle' viewBox='0 0 16 16'><path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/> <path d='M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z'/></svg>";
                var mensaje = "<div class='alert alert-dismissible bg-dark text-light fade show  m-2' role='alert'><center>"+ alerta +" "+ icono +"</center></div>";
                document.getElementById("notificaciones").innerHTML = mensaje;
                window.setTimeout(function() {
                    $(".alert").fadeTo(200, 0).slideUp(200, function(){
                        $(this).remove(); 
                    });
                }, 2500);  
                console.log('Problema al realizar la solicitud: ' + error.message);
                
               
            });
    }else{
       var alerta = "Sin conexion a red";
                var icono = "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-exclamation-circle' viewBox='0 0 16 16'><path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/> <path d='M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z'/></svg>";
                var mensaje = "<div class='alert alert-dismissible bg-dark text-light fade show  m-2' role='alert'><center>"+ alerta +" "+ icono +"</center></div>";
                document.getElementById("notificaciones").innerHTML = mensaje;
                window.setTimeout(function() {
                    $(".alert").fadeTo(200, 0).slideUp(200, function(){
                        $(this).remove(); 
                    });
                }, 2500);  
    }

  }
  
  
  
  
  
  function cerrar() {
    if(navigator.onLine ) {
        fetch('login.php',{method: 'GET'})
            .then(function(response) {

                if(!response.ok) {
                    throw Error(response.statusText);
                }

                if(response.ok) {
                    
                 var alerta = "Se cerrará la sesión";
                var mensaje = "<div class='alert alert-dismissible bg-dark text-light fade show  m-2' role='alert'><center>" + alerta + "</center></div>";
                document.getElementById("notificaciones").innerHTML = mensaje;
                
                window.setTimeout(function() {
                    $(".alert").fadeTo(200, 0).slideUp(200, function(){
                        $(this).remove(); 
                    });
                }, 2500);
                
                window.setTimeout(function() {
                    location.href = 'logout';
                }, 3500);
                 
                }
    
                return response;
    
            }).then(function(response) {
                // response.ok fue true
                console.log('ok');   
            }).catch(function(error) {
                var alerta = "Sin conexion a red";
                var icono = "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-exclamation-circle' viewBox='0 0 16 16'><path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/> <path d='M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z'/></svg>";
                var mensaje = "<div class='alert alert-dismissible bg-dark text-light fade show  m-2' role='alert'><center>"+ alerta +" "+ icono +"</center></div>";
                document.getElementById("notificaciones").innerHTML = mensaje;
                window.setTimeout(function() {
                    $(".alert").fadeTo(200, 0).slideUp(200, function(){
                        $(this).remove(); 
                    });
                }, 2500);  
                console.log('Problema al realizar la solicitud: ' + error.message);
                
               
            });
    }else{
       var alerta = "Sin conexion a red";
                var icono = "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-exclamation-circle' viewBox='0 0 16 16'><path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/> <path d='M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z'/></svg>";
                var mensaje = "<div class='alert alert-dismissible bg-dark text-light fade show  m-2' role='alert'><center>"+ alerta +" "+ icono +"</center></div>";
                document.getElementById("notificaciones").innerHTML = mensaje;
                window.setTimeout(function() {
                    $(".alert").fadeTo(200, 0).slideUp(200, function(){
                        $(this).remove(); 
                    });
                }, 2500);  
    }

  }
  
  //FUNCIONES DE LA PÁGINA PRINCIPAL -- CRUD

function insertar() {
    if(navigator.onLine ) {
        fetch('login.php',{method: 'GET'})
            .then(function(response) {

                if(!response.ok) {
                    throw Error(response.statusText);
                }

                if(response.ok) {
                    const form = document.getElementById("addcrop");
                      // Obtener todos los campos del formulario
                      const fields = form.querySelectorAll("input, textarea, select");
                    
                      // Recorrer los campos y verificar si están llenos
                      let allFieldsFilled = true;
                      fields.forEach((field) => {
                        if (field.value.trim() === "") {
                          allFieldsFilled = false;
                        }
                      });
                    
                      // Si todos los campos están llenos, enviar el formulario
                      if (allFieldsFilled) {
                          var txtnombre = $("#txtnombre").val();
                var txttipo = $("#txttipo").val();
                var txtubicacion = $("#txtubicacion").val();
                var txtfi = $("#txtfi").val();
                var txtff = $("#txtff").val();
                var txtdescripcion = $("#txtdescripcion").val();
                var txtarea = $("#txtarea").val();
                var txtreni = $("#txtreni").val();
                var agregar = $("#agregar").val();

                
                $.ajax({
                        url: "controlador/cultivos.crud.php",
                        type: "POST",
                        data: {txtnombre:txtnombre,
                                txttipo:txttipo,
                                txtubicacion:txtubicacion,
                                txtfi:txtfi,txtff:txtff,
                                txtdescripcion:txtdescripcion,
                                txtarea:txtarea,
                                txtreni:txtreni,
                                agregar:agregar},
                        success: function(errores){
                            $("#notificaciones").html(errores);
                        }
                    });
            
                    window.setTimeout(function() {
                        $(".alert").fadeTo(200, 0).slideUp(200, function(){
                            $(this).remove(); 
                        });
                    }, 2500);
                    
                    $('#agregar').modal('hide');
                      } else {
                          var alerta = "Campos vacíos";
                            var icono = "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-exclamation-circle' viewBox='0 0 16 16'><path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/> <path d='M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z'/></svg>";
                            var mensaje = "<div class='alert alert-dismissible bg-dark text-light fade show  m-2' role='alert'><center>"+ alerta +" "+ icono +"</center></div>";
                            document.getElementById("notificacionescul").innerHTML = mensaje;
                             window.setTimeout(function() {
                    $(".alert").fadeTo(200, 0).slideUp(200, function(){
                        $(this).remove(); 
                    });
                }, 2500);  
                      }
                }
    
                return response;
    
            }).then(function(response) {
                // response.ok fue true
                console.log('ok');   
            }).catch(function(error) {
                $('#agregar').modal('hide');
                var alerta = "Sin conexion a red";
                var icono = "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-exclamation-circle' viewBox='0 0 16 16'><path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/> <path d='M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z'/></svg>";
                var mensaje = "<div class='alert alert-dismissible bg-dark text-light fade show  m-2' role='alert'><center>"+ alerta +" "+ icono +"</center></div>";
                document.getElementById("notificaciones").innerHTML = mensaje;
                window.setTimeout(function() {
                    $(".alert").fadeTo(200, 0).slideUp(200, function(){
                        $(this).remove(); 
                    });
                }, 2500);  
                console.log('Problema al realizar la solicitud: ' + error.message);
                
               
            });
    }else{
                 $('#agregar').modal('hide');
                var alerta = "Sin conexion a red";
                var icono = "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-exclamation-circle' viewBox='0 0 16 16'><path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/> <path d='M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z'/></svg>";
                var mensaje = "<div class='alert alert-dismissible bg-dark text-light fade show  m-2' role='alert'><center>"+ alerta +" "+ icono +"</center></div>";
                document.getElementById("notificaciones").innerHTML = mensaje;
                window.setTimeout(function() {
                    $(".alert").fadeTo(200, 0).slideUp(200, function(){
                        $(this).remove(); 
                    });
                }, 2500);  
    }

  }


  function insertarplan() {
    if(navigator.onLine ) {
        fetch('login.php',{method: 'GET'})
            .then(function(response) {

                if(!response.ok) {
                    throw Error(response.statusText);
                }

                if(response.ok) {
                    const form = document.getElementById("addplan");
                    const fields = form.querySelectorAll("input, textarea, select");

                      // Recorrer los campos y verificar si están llenos
                      let allFieldsFilled = true;
                      fields.forEach((field) => {
                        if (field.value.trim() === "") {
                          allFieldsFilled = false;
                        }
                      });
                    
                      // Si todos los campos están llenos, enviar el formulario
                      if (allFieldsFilled) {
                        var idcultivo = $("#idcultivo").val();
                var plan = $("#plan").val();
                var txtini = $("#txtini").val();
                var txtfin = $("#txtfin").val();
                var descripcion = $("#descripcion").val();
                var humanos = $("#txthum").val();
                var presupuesto = $("#txtpto").val();
                var materiales = $("#txtmat").val();
                var agregarplan = $("#agregarplan").val();

                
                $.ajax({
                        url: "controlador/cultivos.crud.php",
                        type: "POST",
                        data: { idcultivo:idcultivo,
                                plan:plan,
                                txtini:txtini,
                                txtfin:txtfin,
                                txtdescripcion:descripcion,
                                txthum:humanos,
                                txtpto:presupuesto,
                                txtmat:materiales,
                                agregarplan:agregarplan},
                        success: function(errores){
                            $("#notificaciones").html(errores);
                        }
                    });
            
                    window.setTimeout(function() {
                        $(".alert").fadeTo(200, 0).slideUp(200, function(){
                            $(this).remove(); 
                        });
                    }, 2500);
                     $('#planificar').modal('hide');
                      } else {
                         var alerta = "Campos vacíos";
                            var icono = "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-exclamation-circle' viewBox='0 0 16 16'><path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/> <path d='M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z'/></svg>";
                            var mensaje = "<div class='alert alert-dismissible bg-dark text-light fade show  m-2' role='alert'><center>"+ alerta +" "+ icono +"</center></div>";
                            document.getElementById("notificacionesplan").innerHTML = mensaje;
                             window.setTimeout(function() {
                    $(".alert").fadeTo(200, 0).slideUp(200, function(){
                        $(this).remove(); 
                    });
                }, 2500);  
                      }
                }
    
                return response;
    
            }).then(function(response) {
                // response.ok fue true
                console.log('ok');   
            }).catch(function(error) {
                $('#planificar').modal('hide');
                var alerta = "Sin conexion a red";
                var icono = "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-exclamation-circle' viewBox='0 0 16 16'><path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/> <path d='M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z'/></svg>";
                var mensaje = "<div class='alert alert-dismissible bg-dark text-light fade show  m-2' role='alert'><center>"+ alerta +" "+ icono +"</center></div>";
                document.getElementById("notificaciones").innerHTML = mensaje;
                window.setTimeout(function() {
                    $(".alert").fadeTo(200, 0).slideUp(200, function(){
                        $(this).remove(); 
                    });
                }, 2500);  
                console.log('Problema al realizar la solicitud: ' + error.message);
                
               
            });
    }else{
        $('#planificar').modal('hide');
       var alerta = "Sin conexion a red";
                var icono = "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-exclamation-circle' viewBox='0 0 16 16'><path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/> <path d='M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z'/></svg>";
                var mensaje = "<div class='alert alert-dismissible bg-dark text-light fade show  m-2' role='alert'><center>"+ alerta +" "+ icono +"</center></div>";
                document.getElementById("notificaciones").innerHTML = mensaje;
                window.setTimeout(function() {
                    $(".alert").fadeTo(200, 0).slideUp(200, function(){
                        $(this).remove(); 
                    });
                }, 2500);  
    }

  }
  
  function insertarbitacora() {
    if(navigator.onLine ) {
        fetch('login.php',{method: 'GET'})
            .then(function(response) {

                if(!response.ok) {
                    throw Error(response.statusText);
                }

                if(response.ok) {
                        const form = document.getElementById("addbit");
                      // Obtener todos los campos del formulario
                      const fields = form.querySelectorAll("input, select, textarea");
                    
                      // Recorrer los campos y verificar si están llenos
                      let allFieldsFilled = true;
                      fields.forEach((field) => {
                        if (field.value.trim() === "") {
                          allFieldsFilled = false;
                        }
                      });
                    
                      // Si todos los campos están llenos, enviar el formulario
                      if (allFieldsFilled) {
                        var txtplan = $("#txtplan").val();
                var txtlugar = $("#txtlugar").val();
                var txtdescripcion = $("#txtdesarollo").val();
                var completar = $("#completar").val();
                var agregarbit = $("#agregarbit").val();

                
                $.ajax({
                        url: "controlador/cultivos.crud.php",
                        type: "POST",
                        data: { 
                                txtplan:txtplan,
                                txtlugar:txtlugar,
                                completar:completar,
                                txtdescripcion:txtdescripcion,
                                agregarbit:agregarbit},
                        success: function(errores){
                            $("#notificaciones").html(errores);
                        }
                    });
            
                    window.setTimeout(function() {
                        $(".alert").fadeTo(200, 0).slideUp(200, function(){
                            $(this).remove(); 
                        });
                    }, 2500);
                         $('#bitacora').modal('hide');
                      } else {
                           var alerta = "Campos vacíos";
                            var icono = "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-exclamation-circle' viewBox='0 0 16 16'><path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/> <path d='M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z'/></svg>";
                            var mensaje = "<div class='alert alert-dismissible bg-dark text-light fade show  m-2' role='alert'><center>"+ alerta +" "+ icono +"</center></div>";
                            document.getElementById("notificacionesbit").innerHTML = mensaje;
                             window.setTimeout(function() {
                    $(".alert").fadeTo(200, 0).slideUp(200, function(){
                        $(this).remove(); 
                    });
                }, 2500);  
                      }
                    
                
                }
    
                return response;
    
            }).then(function(response) {
                // response.ok fue true
                console.log('ok');   
            }).catch(function(error) {
                $('#bitacora').modal('hide');
                var alerta = "Sin conexion a red";
                var icono = "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-exclamation-circle' viewBox='0 0 16 16'><path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/> <path d='M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z'/></svg>";
                var mensaje = "<div class='alert alert-dismissible bg-dark text-light fade show  m-2' role='alert'><center>"+ alerta +" "+ icono +"</center></div>";
                document.getElementById("notificaciones").innerHTML = mensaje;
                window.setTimeout(function() {
                    $(".alert").fadeTo(200, 0).slideUp(200, function(){
                        $(this).remove(); 
                    });
                }, 2500);  
                console.log('Problema al realizar la solicitud: ' + error.message);
                
               
            });
    }else{
        $('#bitacora').modal('hide');
       var alerta = "Sin conexion a red";
                var icono = "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-exclamation-circle' viewBox='0 0 16 16'><path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/> <path d='M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z'/></svg>";
                var mensaje = "<div class='alert alert-dismissible bg-dark text-light fade show  m-2' role='alert'><center>"+ alerta +" "+ icono +"</center></div>";
                document.getElementById("notificaciones").innerHTML = mensaje;
                window.setTimeout(function() {
                    $(".alert").fadeTo(200, 0).slideUp(200, function(){
                        $(this).remove(); 
                    });
                }, 2500);  
    }

  }

  
  