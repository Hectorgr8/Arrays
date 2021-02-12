<center>
	<div>
		<form>
			<input id="N" name="N" placeholder="Numero" onkeyup="calcular()" value ="1"/>
				<button onclick="calcular()"> Calcular </button>
		</form>
	</div>
</center>

<center>
	<div id="resultado" style ="background-color:lightyellow;
								width:50%;
								padding:20px;
								">
	</div>
</center>


<?php
if(!isset($_GET['N']))
	$_GET['N']=1;
		$a=7;
				$dia=[
					'lunes',
					'martes',
					'miercoles',
					'jueves',
					'viernes',
					'sabado',
					'domingo',
				];
				echo $dia[$_GET['N']-1];
?>


<script>
function calcular(){
			dia=[
				'lunes',
				'martes',
				'miercoles',
				'jueves',
				'viernes',
				'sabado',
				'domingo',
			];
			
			
if(true){
		numero=document.getElementById("N").value;
		document.getElementById("resultado").innerHTML =dia[numero-1];
		}}
</script>