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
	<body >
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
				<div class="login-wrap p-4 p-md-5" >
		      		<span class="fa fa-user-o"></span>
					  <img src="images/IMG-20220522-WA0024.jpg "  style="margin-left: 20%;">
		      	<h3 class="text-center mb-4" style="color: green;">Welcome!</h3>
    @if (session()->has('message'))
    <p class="alert alert">
      {{ session()->get('message') }}
    </p>
@endif
						<form action="{{ route('login.custom') }}" method="POST" class="login-form">
            @csrf
		      		<div class="form-group">
		      			<input type="text" name="user_name" class="form-control rounded-left" placeholder="Username" required>
              </div>
              @if ($errors->has('user_name'))
                  <div class="alert alert-danger alert-dismissible">{{ $errors->first('user_name') }}</div>
                    
              </div>
              @endif
	            <div class="form-group d-flex">
	              <input type="password" name="password" class="form-control rounded-left" placeholder="Password" required>
	            </div>
              @if ($errors->has('password'))
                  <div class="alert alert-danger alert-dismissible">{{ $errors->first('password') }}</div>
                    
              </div>
              @endif
				<span>
					<a href="/forgot" style="color: green; font-size: small; ">Forgot Password?</a>
				</span>
				
				
				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-primary rounded submit p-3 px-5">Login</button>
				</div>
	            <div class="form-group d-md-flex" >
<br><br>

	            </div>
			
				<div class="vl" style="text-align: center; color: black;">
					<span class="vl-innertext" style="text-align: center;">or</span>
				  </div>
      <div class="col">
        <a href="#" class="fb btn hfh"  >
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
        </a>
        <a href="#" class="google btn hfh">
          <i class="fa-brands fa-google"></i> Login with Google
        </a>
      </div>

<style>
	
/* style the container */
.container {
  position: relative;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px 0 30px 0;
}
/* vertical line */
.vl {
  position: relative;
  left: 50%;
  transform: translate(-50%);
  border: 1px dotted #f1f1f1;
  height: 20px;
}

/* text inside the vertical line */
.inner {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}

/* style inputs and link buttons */
input,
.btn{
  width: 85%;
  padding: 12px;
  border: none;
  border-radius: 12px;
  margin: 8px 0;
  margin-left: 4%;
  opacity: 0.85;
  display: inline-block;
  font-size: 14px;
  line-height: 4px;
  text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}

/* add appropriate colors to fb, twitter and google buttons */
.fb {
  background-color: #3B5998;
  color: white;
}

.twitter {
  background-color: #55ACEE;
  color: white;
}

.google {
  background-color: #5239dd;
  color: white;
}


</style>
<br>
		<span style="color: black; font-size: small;">Don't have an account?</span>
		<a href="/"><span style="color: green; margin-left: 30px; font-size: small;">Create a new account</span></a>		


				  <div class="w-50 text-md-right">
				<a href="#" style="color: red;"></a> 
			</div>
	          </form>
			
	        </div>
				</div>
			</div>
		</div>


	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

