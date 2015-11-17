<script src="./chart.js"></script>
<script> 
    
      var datos_grafica = {
		labels : ["Numero de Citas","Numero de Llamadas","Envio de Mails","Alta de Establecimiento"],
		datasets : [
			{
				fillColor : "#009EDF",
				strokeColor : "#009EDF",
				highlightFill : "#2dc2ff",
				highlightStroke : "#2dc2ff",
				data : [30,31,12,32]
			}
		]
	}
	var ctx = document.getElementById("reporte_2").getContext("2d");
	myBar = new Chart(ctx).Bar(datos_grafica); 
</script>
<canvas style="width:700px" id="reporte_2"></canvas>
<?php 
echo 'a';
?>