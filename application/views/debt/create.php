<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Receiv debts</title>
  </head>
  <body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
		<a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
		<a class="nav-link" href="?r=/clients">Todos os Clientes</a>
	      </li>
	      <li class="nav-item">
		<a class="nav-link" href="?r=/debts">Todas as dívidas</a>
	      </li>
	    </ul>
	  </div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="card mt-3">
			  <div class="card-body">
				<form action="?r=/debts/create" method="POST">
				  <input type="hidden" id="client_id" name="client_id" value="<?php echo $_GET['client_id'] ?>">
				  <label for="title">Título:</label><br>
				  <input type="text" id="title" name="title" class="col-6"><br>
				  <label for="value">Valor:</label><br>
				  <input type="text" id="value" name="value"><br>
				  <label for="due_date">Data de vencimento:</label><br>
				  <input type="date" id="due_date" name="due_date"><br>
				  <input type="submit" value="Submit">
				</form> 
			  </div>
			</div>

		</div>
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>