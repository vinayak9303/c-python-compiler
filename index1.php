<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>CPPSECRETS C++ & Python Online Compiler</h1>
                
       <form method="POST" >
       	<select id = "category" name="category" style="width:100%;padding: 8px 10px;margin: 8px 0;box-sizing: border-box;font-family: Arial, Helvetica Neue, Helvetica, sans-serif;font-size:0.95em">
                    <option value="0">--Select Language--</option>
                    <option value="C++">C++</option>
                    <option value="Python">Python</option>
                </select>
                <br/>
     <label>WRITE YOUR INPUT</label>
    <textarea id="in" name="inputs" rows="20" cols="500" style="width: 100%; resize: none; height: 100%" placeholder="Write your code Here.."><?php echo $current; ?>
</textarea><br>
<input type="submit" name="RUN">
<label>WRITE YOUR INPUT</label>
<textarea id="out" name="Output" rows="20" cols="500" style="width: 100%; resize: none; height: 100%" placeholder="Write"><?php echo $answer; ?>
</textarea>

    </form>
<script>
	
</script>
</div>
</body>
</html>