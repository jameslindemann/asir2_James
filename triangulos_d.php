<?php
function longitud ($e,$i,$eq) {
	$r='escaleno';
if ($e==$i || $e==$eq or $i==$eq) 
	$r='isosceles';
if ($i==$eq and $e==$eq)
	$r='equilatero';
		
return $r;
}
function angulo ($e,$i,$eq) {
	$r='acutangulo';
if ($e==90 or $i==90 or $eq==90)
	$r='rectangulo';
if ($e>90 or $i>90 or $eq>90)
	$r='obtusangulo';
		
return $r;
}
$e= [
	'lados'=>[1,1,1],
	'angulo'=>[100,40,40],
];
$e= [
	'lados'=>[1,1,1],
	'angulo'=>[60,20,100],
];
	
function eq ($e) {
return longitud(
	$e['lados'][0],
	$e['lados'][1],
	$e['lados'][2]
	).' y '.angulo(
	$e['angulo'][0],
	$e['angulo'][1],
	$e['angulo'][2]
);
}
echo eq ($e);
?>