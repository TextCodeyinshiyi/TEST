<?php
//第一种 
$sum=0;
for($i=1;$i<=100;$i++){
	$sum+=$i;
}
//print_r($sum);
//第二种
function add($n){
	return $n==1?1:$n+add($n-1);

}
//echo add(100);

//第三种
//echo array_sum(range(1,100)); 

/*第二题*/
function demo($a){
	if($a>1){
		$r=$a*demo($a-1);
	}
	else{
		$r=$a;
	}
	return $r;
}
$a=6;
//echo $a."的阶乘的值为".demo($a);

$b=6;
$result=1;
	for($i=2;$i<=$b;$i++){
		$result*=$i;
	}
//echo $result;

/*第三题*/
function ishuiwen($str){
	$len=strlen($str);
	$l=1;
	$k=intval($len/2)+1;
	for($j=0;$j<$k;$j++){
		if(substr($str,$j,1)!=substr($str,$len-$j-1,1)){
			$l=0;
			break;
		}
	}
		if($l==1){
			return "是回文字符串";
		}
		else{
			return "不是回文字符串";
		}
	
}

$str="abac";
echo ishuiwen($str);

//第四题
class Person
{
	private $name;
	private $age;
}

interface Walk
{
	public function go();
}

class Student extends Person implements Walk
{
	

	public function __construct($name,$age)
	{
		$this->name=$name;
		$this->age=$age;
	}

	public $go="走路去上学";
	public function go(){
		echo $this->go;
	}
 

	public function student(){
		return "学生".$this->name."年龄".$this->age;
	}

}
$a1=new Student("张三",18);
$a2=new Student("李四",19);
$a3=new Student("王五",15);
$a4=new Student("赵六",14);
$a5=new Student("小兵甲",19);
$a6=new Student("小兵乙",26);
$a7=new Student("小兵丙",21);
$a8=new Student("小兵丁",14);
//echo $a2->student();

function agemax(){

}