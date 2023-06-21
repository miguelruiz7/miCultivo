function registro() {
    if(navigator.onLine ) {
        fetch('login.php',{method: 'GET'})
            .then(function(response) {

                if(!response.ok) {
                    throw Error(response.statusText);
                }

                if(response.ok) {
                var nombre = $("#nombre").val(); 
                var correo = $("#correo").val();
                var usuario = $("#usuario").val();
                var contrasena = $("#contrasena").val();
                var contrasena2 = $("#contrasena2").val();
                
                $.ajax({
                        url: "controlador/registro.php",
                        type: "POST",
                        data: { nombre:nombre,correo:correo,usuario:usuario,contrasena: contrasena,contrasena2:contrasena2},
                        success: function(errores){
                            $("#notificaciones").html(errores);
                        }
                    });
            
                    window.setTimeout(function() {
                        $(".alert").fadeTo(200, 0).slideUp(200, function(){
                            $(this).remove(); 
                        });
                    }, 2500);
                }
    
                return response;
    
            }).then(function(response) {
                // response.ok fue true
                console.log('ok');   
            }).catch(function(error) {
                var alerta = "Sin conexion a red";
                var icono = "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-exclamation-circle' viewBox='0 0 16 16'><path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/> <path d='M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z'/></svg>";
                var mensaje = "<div class='alert alert-dismissible bg-dark text-light fade show' role='alert'><center>"+ alerta +" "+ icono +"</center></div>";
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
                var mensaje = "<div class='alert alert-dismissible bg-dark text-light fade show' role='alert'><center>"+ alerta +" "+ icono +"</center></div>";
                document.getElementById("notificaciones").innerHTML = mensaje;
                window.setTimeout(function() {
                    $(".alert").fadeTo(200, 0).slideUp(200, function(){
                        $(this).remove(); 
                    });
                }, 2500);  
    }

  }
