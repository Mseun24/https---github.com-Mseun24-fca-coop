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
    <img src="images/IMG-20220522-WA0024.jpg " style="border-radius: 74px; padding-left: 120px;">
    <h3 class="er">Create a new account</h3>
    @if (session()->has('message'))
    <p class="alert alert">
        {{ session()->get('message') }}
    </p>
@endif
    <form action="{{ route('register.custom') }}" method="POST">
        @csrf
        <div class="container">
          Please fill in this form to create an account.
          <hr>
          <label for="First Name"><b>First Name</b></label>
          <input type="text" placeholder="Enter First Name" name="first_name" required>
          <label for="Last Name"><b>Last Name</b></label>
          <input type="text" placeholder="Enter Last Name" name="last_name" required>

          <label for="Username"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="user_name" required>

          <label for="Phonenumber"><b>Phonenumber</b></label>
          <input type="text" placeholder="Enter Phone Number" name="phone_number" required>

          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" required>
      
          <label for="psw-repeat"><b>Repeat Password</b></label>
          <input type="password" placeholder="Repeat Password" name="password1" required>
          
          <label for="Referral code"><b>Referral code * optional</b></label>
          <input type="text" placeholder="Enter Referral Code" name="refr code">
          <hr>
      
          <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
          <button type="submit" class="registerbtn">CREATE NEW ACCOUNT</button>
        </div>
      
        <div class="container signin">
          <p>Already have an account? <a href="/login">Sign in</a>.</p>
        </div>
      </form>
</body>
</html>
