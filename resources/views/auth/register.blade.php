@extends('layouts.master')

@section('title')
    <title>Register</title>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>
                <div class="card-body">

                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(session()->has('message'))
                        <div class="alert alert-{{ session('type') }}">
                            {{ session('message') }}
                        </div>
                    @endif

                    <form id="signup-form" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" placeholder="Enter name here..." required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" placeholder="Enter email here..." required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" placeholder="Enter password here..." required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" placeholder="Confirm password here..." required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

        // Constructor function for a Validator class.
		function Validator(name, email, password)
		{
			// store the data that it validates as properties
			this.name = name;
			this.email = email;
            this.password = password;

			// returns true if both the name and age are OK
			this.isOk = function ()
			{
				return this.isNameOk() && this.isEmailOk() && this.isPasswordOk();
			};

			// returns true if the name property of the validator is:
			// - only letters
			// - is the right length
			// - is not the reserved name of 'admin'
			this.isNameOk = function ()
			{
				var name = this.name;

				// test for all apha - upper or lower
				var regEx = /^[a-zA-Z]+$/;
				var isAllAlpha = regEx.test(name);

				// name must be 3 - 30 charachters long
				var isLengthOk = name.length > 2 && name.length <= 30;

				// admin is a reserved word for the name
				var isNotReservedWord = name !=  'admin';

				// if any one of the requirements is false, return false
				return isAllAlpha && isLengthOk && isNotReservedWord;
			};

			// returns true if the email property of the validator is:
			// - only letters, numbers, @._-
			// - is the right length
			this.isEmailOk = function ()
			{
				var email = this.email;

                var regEx = /[a-zA-Z0-9]@[a-zA-Z]/;
                var isEmail = regEx.test(email);

                var isLengthOk = email.length > 5 && email.length <= 30;

                return isEmail && isLengthOk;
			};

            this.isPasswordOk = function ()
			{
				var password = this.password;

                var isLengthOk = password.length > 5 && password.length <= 30;

                return isLengthOk;
			};
		}

		// wire up the event handlers when this func is called
		function bindToEvents()
		{
			// before the form data is sent to the server, check that the
			// form is OK.
			var form = document.getElementById('signup-form');
			form.onsubmit = function (event)
			{
				// extract the value of the data to validate
				var validator = new Validator(this.name.value, this.email.value, this.password.value);
				if (!validator.isOk())
				{
					alert('Warning! your input is bad!');
					
					// prevent the form from sending data to the server!
					event.preventDefault();
				}
			};

			// each time the name input field receives input, check to see
			// if it's OK!
			var nameInput = document.querySelector('[name=name]');
			nameInput.oninput = function () {
				// determine if the name field is ok...
				var validator = new Validator(form.name.value, -1);
				setInputState(nameInput, validator.isNameOk());
			};

			// each time the email input field receives input, check to see
			// if it's OK!
			var emailInput = document.querySelector('[name=email]');
			emailInput.oninput = function () {
				// determine if the name field is ok...
				var validator = new Validator(null, form.email.value);
				setInputState(emailInput, validator.isEmailOk());
			};

            var passwordInput = document.querySelector('[name=password]');
			passwordInput.oninput = function () {
				// determine if the name field is ok...
				var validator = new Validator(null, form.password.value);
				setInputState(passwordInput, validator.isPasswordOk());
			};
		}

		// Updates the given input in the DOM to indicate if it's OK or not
		function setInputState(input, isOk)
		{
			var color = isOk ? 'lightgreen' : 'pink';
			input.style.backgroundColor = color;
		}

		// invoke the function that will wire up the event handlers
		bindToEvents();

</script>

@endsection
