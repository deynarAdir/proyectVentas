<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Formulario</h1>
		<form id="formulario" method="POST" action="procesa.php">
		  <div class="form-group row">
		    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
		    <div class="col-sm-10">
		      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="correo">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="inputPassword3" placeholder="Password" name="contraseña">
		    </div>
		  </div>
		  <div class="well well-sm">
		  	<h2>ingrese los datos de sus hijos</h2>
		    
		    <?php for($i = 0;$i<=4;$i++) {?>
		    <div class="row">
		    	<div class="col-8">
		    		<div class="form-group row">
				    	<label for="inputHijos">hijo Nª <?php echo $i+1 ?></label>
				      <input type="text" class="form-control" id="inputHijos" placeholder="Hijos" name="hijos[<?php echo $i; ?>][nombre]">
				    </div>
		    	</div>
		    	<div class="col-4">
		    		<div class="form-group row">
				    	<label for="inputHijos">edad</label>
				      <input type="text" class="form-control" id="inputHijos" placeholder="edad" name="hijos[<?php echo $i; ?>][edad]">
				    </div>
		    	</div>
		    </div>
		    <?php } ?>
		  </div>
		  <fieldset class="form-group">
		    <div class="row">
		      <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
		      <div class="col-sm-10">
		        <div class="form-check">
		          <input class="form-check-input" type="radio" name="radio" id="gridRadios1" value="option1" checked>
		          <label class="form-check-label" for="gridRadios1">
		            First radio
		          </label>
		        </div>
		        <div class="form-check">
		          <input class="form-check-input" type="radio" name="radio" id="gridRadios2" value="option2">
		          <label class="form-check-label" for="gridRadios2">
		            Second radio
		          </label>
		        </div>
		        <div class="form-check disabled">
		          <input class="form-check-input" type="radio" name="radio" id="gridRadios3" value="option3" disabled>
		          <label class="form-check-label" for="gridRadios3">
		            Third disabled radio
		          </label>
		        </div>
		      </div>
		    </div>
		  </fieldset>
		  <div class="form-group row">
		    <div class="col-sm-2">Checkbox</div>
		    <div class="col-sm-10">
		      <div class="form-check">
		        <input class="form-check-input" type="checkbox" id="gridCheck1" name="seleccionar">
		        <label class="form-check-label" for="gridCheck1">
		          Example checkbox
		        </label>
		      </div>
		    </div>
		  </div>
		  <div class="form-group row">
		    <div class="col-sm-10">
		      <button type="submit" class="btn btn-primary">Sign in</button>
		    </div>
		  </div>
		</form>
	</div>

	<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
	<script>
		$(document).ready(function() {
			$("#formulario").submit(function(){
				$.ajax({
					url: "procesa.php",
					method:"POST",
					//con data: guardamos nuestro formulario con var formulario
					//y hacemos
					// data:form.serialize(),
					//y te manda todos los esenarios que utilices
					data: {
						nombre:$("input[name='correo']").val(),
						contraseña:$("input[name='contraseña']").val(),
						radio:$("input[name='radio']").val(),
					},
					success:function(){
						alert(r.response);
					},
					datatype: "json"
				});
				return false;
			})
		});
	</script>
</body>
</html>