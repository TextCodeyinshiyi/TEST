<?php
function demo($arr){
	$num=0;
	$len=count($arr);
	for($i=0;$i<$len;$i++){
		for($j=0;$j<$len;$j++){
			for($k=0;$k<$len;$k++){
				if($i!=$j && $j!=$k && $i!=$k){
					echo $arr[$i].$arr[$j].$arr[$k]."\n";
					$num+=1;
				}
			}
		}
	}
	echo "一共".$num."个";
}
demo([1,2,3,4]);

?>