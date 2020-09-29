<?php
$answer='';
$current='';
$cat=$_POST['category'];
echo "<script>console.log('Debug Objects: " . $cat . "' );</script>";
if ($cat=="C++") {
	$answer='';
$current='';
if(!empty($_POST['inputs']))
{
	$dirname="Online-Compiler";
	$current=$_POST['inputs'];
	$filename="hello.cpp";
	chmod($filename, 0755);
	$file = fopen($filename, "w") or die("Unable to open file!");
            fwrite($file, $current);
            
            fclose($file);

	//$file="sudo touch hello.cpp";
	//shell_exec("sudo touch hello.cpp");
	//file_put_contents($file,$current);
	//putenv("PATH=C:\Program Files (x86)\Dev-Cpp\MinGW64\bin");
	shell_exec("gcc -o hello hello.cpp");//compile
	$answer=shell_exec("./hello");//run
	if(file_exists("hello"))
{
//unlink("hello");
}
else{
	$answer="Error";
}
	
}
}
	if(!empty($_POST['inputs']))
{
	$dirname="Online-Compiler";
	$current=$_POST['inputs'];
	$filename="hello1.py";
	//file_put_contents($file,$current);
	//putenv("PATH=C:\Program Files (x86)\Dev-Cpp\MinGW64\bin");
	//shell_exec("Python hello1.py -o hello1.exe");//compile
	chmod($filename, 0755);
	$file = fopen($filename, "w") or die("Unable to open file!");
            fwrite($file, $current);
            
            fclose($file);
	//shell_exec("python");
	$answer=shell_exec("python hello1.py");//run
	//unlink($file);
	if(empty($answer))
	{
		$answer="Error";
	}
	
}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<center><h1>CPPSECRETS C++ & Python Online Compiler</h1></center>
                <select id = "category"  name="category" style="width:100%;padding: 8px 10px;margin: 8px 0;box-sizing: border-box;font-family: Arial, Helvetica Neue, Helvetica, sans-serif;font-size:0.95em" >
                    <option value="0">--Select Article Category--</option>
                    <option value="C++">C++</option>
                    <option value="Python">Python</option>
                </select>
                <br/>
       <form method="POST">
       	
       	<div class="row container-fluid">
       		<div class="col-md-6">
     <label>WRITE YOUR INPUT</label><input type="submit" name="RUN"><br>
    <textarea class="container-fluid" id="in" name="inputs" rows="20" cols="500" style="width: 100%; resize: none; height: 70%" placeholder="Write your code Here.."><?php echo $current; ?>
</textarea><br>
</div>
<div class="col-md-6">
<label> YOUR OUTPUT</label>
<textarea id="out" name="Output" rows="20" cols="500" style="width: 100%; resize: none; height: 70%" placeholder="Write"><?php echo $answer; ?>
</textarea>
</div>
</div>
    </form>
</div>
</body>
</html>