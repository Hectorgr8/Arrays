<html>
            
                <body bgcolor="lightblue">
                </body>
</html>


<?php 
if(!isset($_GET['companero']))
	$_GET['companero']=1;
?>

<!DOCTYPE html>
<html>
<body>
<h3>Sitios de los compañeros</h3>
	<label for ="compañeros"> Nombre:</label>
<?php 
	$companeros = [
		'1'=>'Andres',
		'2'=>'Sergio',
		'3'=>'Andres',
		'4'=>'Ivan',
		'5'=>'Pablo',
		'6'=>'Alberto',
		'7'=>'Eduardo',
		'8'=>'Pablo',
		'9'=>'Jaury',
		'10'=>'Sergio',
		'11'=>'Pablo',
		'12'=>'Valentin',
		'13'=>'Fran',
		'14'=>'Hector',
	];
	
	$txt='<form>';
	$txt.='<select name="companero" id="companero" onchange="calcular()">';
	foreach ($companeros as $mesa => $nombre){
	$txt.='<option value="'.$mesa.'" '
		.($mesa==$_GET['companero']?'selected':'')
		.'>'.$nombre.'</option>';
	$txt.='value="'.$mesa.'"';
	}
	$txt.='</select>';
	$txt.='<button>Enviar</button>';
	$txt.='</form>';
	echo $txt;
	echo $_GET['companero'];
?>
	
<div id="r"> </div>


<script>
console.log ('Companero');
function calcular(){
	companero=document.getElementById('companero').value;
	document.getElementById('companero').value;
	document.getElementById('r').innerHTML=companero;
}
</script>