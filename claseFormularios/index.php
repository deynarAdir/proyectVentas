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
		<form method="GET" action="procesa.php">
		  <div class="form-group row">
		    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
		    <div class="col-sm-10">
		      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="correo">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="contraseña">
		    </div>
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
</body>
</html>