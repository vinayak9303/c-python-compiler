<?php
$answer='';
$current='';
$cat=$_POST['category'];
if ($cat=="C++") {
	$answer='';
$current='';
	if(!empty($_POST['inputs']))
{
	$current=$_POST['inputs'];
	$file="hello.cpp";
	file_put_contents($file,$current);
	putenv("PATH=C:\Program Files (x86)\Dev-Cpp\MinGW64\bin");
	shell_exec("g++ hello.cpp -o hello.exe");//compile
	$answer=shell_exec("hello.exe");//run
	

if(file_exists("hello.exe"))
{
unlink("hello.exe");
}
else{
	$answer="Error";
}
}

}
if ($_POST['category']=="Python") {
	if(!empty($_POST['inputs']))
{
	$current=$_POST['inputs'];
	$file="hello1.py";
	file_put_contents($file,$current);
	//putenv("PATH=C:\Program Files (x86)\Dev-Cpp\MinGW64\bin");
	//shell_exec("Python hello1.py -o hello1.exe");//compile
	shell_exec("python");
	$answer=shell_exec("hello1.py");//run
	unlink($file);
	if(empty($answer))
	{
		$answer="Error";
	}
	
}

}


?>