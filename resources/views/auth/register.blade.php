@extends('layouts.app')

@section('content')
<body class='registerscreen'>
<div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Register</h5>
                        <form class="form-signin" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-label-group">
                                <input type="text" id="inputFirstName" name="firstName" class="form-control @error('firstName') is-invalid @enderror" name='firstName' value="{{ old('firstName') }}" placeholder="First name"
                                    required autofocus autocomplete="firstName">
                                <label for="firstName">{{ __('First name') }}</label>
                            </div>

                            <div class="form-label-group">
                                <input type="text" id="inputLastName" name="lastName" class="form-control @error('lastName') is-invalid @enderror" name='lastName' value="{{ old('lastName') }}" placeholder="Last name"
                                    required autofocus autocomplete="lastName">
                                <label for="inputLastName">Last name</label>
                            </div>

                            <div class="form-label-group">
                                <input type="text" id="inputAddress" name="address" class="form-control @error('address') is-invalid @enderror" name='address' value="{{ old('address') }}" placeholder="Address"
                                    required autofocus autocomplete="address">
                                <label for="inputAddress">Address</label>
                            </div>

                            <div class="form-label-group">
                                <input type="text" id="inputPostalCode" name="postalCode" class="form-control @error('postalCode') is-invalid @enderror" name='postalCode' value="{{ old('postalCode') }}" placeholder="Postal code"
                                    required autofocus autocomplete="postalCode" maxlength="6">
                                <label for="inputPostalCode">Postal code</label>
                            </div>

                            <div class="form-label-group">
                                <input type="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                <label for="inputEmail">Email address</label>
                            </div>

                            <div class="form-label-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                <label for="inputPassword">Password</label>
                            </div>

                            <div class="form-label-group">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <label for="inputPassword">Confirm password</label>
                            </div>

                            <button class="btn btn-lg btn-primary btn-block text-uppercase"
                                type="submit">Register</button>
                            <hr class="my-4">
                            <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i
                                    class="fab fa-google mr-2"></i> Register with Google</button>
                            <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i
                                    class="fab fa-facebook-f mr-2"></i> Register with Facebook</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
