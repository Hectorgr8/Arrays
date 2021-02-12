<pre>
<?php
$tabla=[];
	for ($i=0;$i<=10;$i=$i+1)
	$tabla[]=6*$i;
	print_r($tabla);
?>

<div id="tabla"></div>

<script> tabla=[];
	for (i=0;i<=10;i=i+1)
		tabla[i]=6*i;
	for(i in tabla)
	document.getElementById('tabla').innerHTML+=
		'6*' + i + '='
		+tabla[i] + '</br>';
	
</script>



