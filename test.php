<?php include 'functions/db.php'; 

$q=mysqli_query($con,"select category from category");
 echo '<select name="cat">';
while($row=mysqli_fetch_array($q)){
   
          echo '<option value="'.$row['category'].'">'.$row['category'].'</option>';
                        }
          echo '</select>';


?>



<!DOCTYPE html>
<html>
<head>
<!--
	<title>Test Page</title>
	
</head>
<body>
<form action="test.php" method="post">
	<input id="text" type="text" name="name">
	<input type="submit" name="submitz">
</form>	

</body>
<script type="text/javascript">
                   	var restrict = ['teacher','TEACHER','admin','ADMIN','author','AUTHOR','verified','VERIFIED','CERTIFIED','certified'];
document.getElementById('text').addEventListener('keyup', function(e) {
    var text = document.getElementById('text').value;
    for (var x=0;x<restrict.length;x++) {
        if (text.search(restrict[x]) !== -1) {
            alert(restrict[x]+' is not allowed!');
        }
        var regExp = new RegExp(restrict[x]);
        text = text.replace(regExp,'');
    }
    document.getElementById('text').value = text;
},false);
       
                   </script>

--></html>
<?php 
echo md5("827ccb0eea8a706c4c34a16891f84e7b"); ?>