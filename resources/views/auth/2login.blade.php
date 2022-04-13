<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container" id="container">
<div class="form-container sign-up-container">

<form action="">
	<h1>Reset Password </h1>
	<input type="email" name="email" placeholder="Email">
	<button>Reset</button>
</form>
</div>
<div class="form-container sign-in-container">
	<form method="POST" action="{{ route('login') }}">
        @csrf
		<h1>Sign In</h1>
	<span></span>
	
    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
     @enderror
	<button type="submit">Sign In</button>
	</form>
</div>
<div class="overlay-container">
	<div class="overlay">
		<div class="overlay-panel overlay-left">
			<h1>Welcome</h1>
			<p>if you would like to sign in </p>
			<button href="{{route('dashboard')}}" class="ghost" id="signIn">Click here</button>
		</div>
		<div class="overlay-panel overlay-right">
			<h1>Hello!</h1>
			<p>if you happened to forget your password </p>
			<button class="ghost" id="reSet">click here</button>
		</div>
	</div>
</div>
</div>

<script type="text/javascript">
	const signUpButton = document.getElementById('reSet');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');

	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});
	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});
</script>


</body>
</html>








