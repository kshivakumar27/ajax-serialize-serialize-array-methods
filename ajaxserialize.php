<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("div").text($("form").serialize());
  });
});
</script>


<script>
$(document).ready(function(){
  $("button").click(function(){
    $.get("example.php", function(data, status){
      alert("Data: " + data + "\nStatus: " + status);
    });
  });
});
</script>
</head>
<body>

<form action="example.php" method='POST'>
  First name: <input type="text" name="FirstName" value=""><br>
  Last name: <input type="text" name="LastName" value=""><br>
 
 <!-- <button type="submit" value="submit" name="submit">submit</button>--->
  
<button>Serialize form values</button>

</form>

<div></div>

</body>
</html>
