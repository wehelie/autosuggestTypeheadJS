<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>pull Address</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Lato:100,400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/style.css">
	
</head>
<body>

<h1>Address Database <small>typeahead.js</small></h1>
<p class="lead text-left">This <code>app</code> uses <code>typeahead.js</code> to query backend database. As one types the address, the autosuggest shows all matches in a dropdown menu</p>

	<form action="index.php" method="get">
		<input type="text" name="address" id="addreses" placeholder="type address here">
		<input type="submit" value="search">
	</form>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/typeahead.js"></script>
	<script src="js/app.js"></script>
</body>
</html>