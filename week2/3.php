<?php

function myScandir($dir){
    $files = scandir($dir);//读取当前文件夹的文件
    foreach ($files as $file){
    	if ($file=='.'||$file=='..') continue;
    	if(is_dir($dir.'/'.$file)){
	      //递归处理文件夹
	      echo '<font color="blue">','文件夹:'.$file,'</font>',"</br>";
          myScandir($dir.'/'.$file);//
        }
        else{
	    //处理文件
	     echo '<font color="red">','文件:'.$file,'</font>',"</br>";
	    }
    }
}
myScandir("./");//测试用例