<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    var x = $("form").serializeArray();
    $.each(x, function(i, field){
      $("#results").append(field.name + ":" + field.value + " ");
    });
  });
});
</script>
</head>
<body>

<form action="">
  First name: <input type="text" name="FirstName" value="Mickey"><br>
  Last name: <input type="text" name="LastName" value="Mouse"><br>
</form>

<button>Serialize form values</button>

<div id="results"></div>

</body>
</html>
