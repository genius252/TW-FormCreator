<html>
<body>

<?php
//	$conn = oci_connect("system","wowmaster252","localhost/orcl");
    include 'db.php';
	if (isset($_GET['q'])):
        $name = ($_GET['q']);
		$token = strtok($name, "~");
        echo "Nume field : <input type=text value=$token>" . "<button onclick=function()>Edit</button>" ."<br>";
		$token = strtok(".");
		//adaugaugare in sql  - 1st token=  numele fieldului 2nd token= numele formularului
    endif;
?>
</body>
</html>