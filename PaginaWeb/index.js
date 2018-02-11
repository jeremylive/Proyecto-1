var link_proyecto = "http://127.0.0.1/proyecto.php";
var link_muestreo = "http://127.0.0.1/muestreo.php";
var link_operacion = "http://127.0.0.1/operacion.php";
var link_muestra = "http://127.0.0.1/muestra.php";
var link_tarea = "http://127.0.0.1/tarea.php";
var link_observacion = "http://127.0.0.1/observacion.php";
var link_empleado = "http://127.0.0.1/empleado.php";


$(document).ready(function(){
	
	 $("#b_proyecto").click(function(){
        //$(this).hide();
        window.location.href = link_proyecto;
    });
    $("#b_muestreo").click(function(){
        window.location.href = link_muestreo;
    });
    $("#b_operacion").click(function(){
        window.location.href = link_operacion;
    });
    $("#b_muestra").click(function(){
        window.location.href = link_muestra;
    });
    $("#b_tarea").click(function(){
        window.location.href = link_tarea;
    });
    $("#b_operacion").click(function(){
        window.location.href = link_observacion;
    });
        $("#b_empleado").click(function(){
        window.location.href = link_empleado;
    });
    $("#b_observacion").click(function(){
        window.location.href = link_observacion;
    });
});
