<!doctype html>
<html lang="en">
  <head>
  	<title>Food coop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="\css\style.css">

	</head>
    <body>
    <div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
				<div class="login-wrap p-4 p-md-5" >
		      		<span class="fa fa-user-o"></span>
					  <img src="images/IMG-20220522-WA0024.jpg "  style="margin-left: 20%;">
		      	<h3 class="text-center mb-4" style="color: green;">Retrieve Password</h3>
			<form action="{{ route('get.pass') }}" method="POST" class="login-form">
            @csrf
		    <div class="form-group">
		      	<input type="password" name="password" class="form-control rounded-left" placeholder="Old password" required>
                  <input type="password" name="password1" class="form-control rounded-left" placeholder="New password" required>
                  <button type="submit" name="submit" class="btn btn-lg btn-success">Submit</button>
              </div>
              </div>
</form>

</body>
</html>