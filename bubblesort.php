<?php 
//冒泡排序方法 
function bubblesort(&$arr){ 
    //定义一个变量保存交换的值 
    $temp =0; 
    for($i=0;$i<count($arr);$i++){ 
        for($j=0;$j<count($arr)-$i-1;$j++){ 
            if($arr[$j]>$arr[$j+1]){ 
                //如果前面的那个数大于后面的那个数，那么他们就进行交换 
                $temp=$arr[$j]; $arr[$j]=$arr[$j+1]; $arr[$j+1]=$temp; 
            } 
        } 
    } 
} 
$arr=array(100,99,200,5,-4,6,-7); 
bubbleSort($arr); 
print_r($arr); 
//数组是值传递，所以传递的时候加个&符号就是地址传递，改变外部变量
?>
