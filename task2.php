
<?php 
$max=0;$a="jkgjkfg dhghlsknlkds dhlkhdlkfn";
$a=$_POST['text'];
$aa = preg_split("/[\s,]+/", $a);
$kil_elem=count($aa);
for($i=0;i<$kil_elem;$i++){
	$length=mb_strlen($aa[$i], 'utf-8');
		if($length>$max){
			$max=$length;
		}
}
echo $max;

//length=mb_strlen($aa, 'utf-8');
//for ($i=0; $i<=$length; $i++) 
//{if strlen($aa[$i])>max
//max=strlen($aa[$i]);
	
//}
?>