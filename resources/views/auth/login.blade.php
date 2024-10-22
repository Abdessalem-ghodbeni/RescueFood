{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from booking.webestica.com/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Feb 2024 15:41:23 GMT -->
<head>
    @include('auth.authRessources')

</head>

<body>

<!-- **************** MAIN CONTENT START **************** -->
<main>
	
<!-- =======================
Main Content START -->
<section class="vh-xxl-100">
	<div class="container h-100 d-flex px-0 px-sm-4">
		<div class="row justify-content-center align-items-center m-auto">
			<div class="col-12">
				<div class="bg-mode shadow rounded-3 overflow-hidden">
					<div class="row g-0">
						<!-- Vector Image -->
						<div class="col-lg-6 d-flex align-items-center order-2 order-lg-1">
							<div class="p-3 p-lg-5">
								<img src="{{asset('layoutsCss/images/element/signin.svg')}}" alt="">
							</div>
							<!-- Divider -->
							<div class="vr opacity-1 d-none d-lg-block"></div>
						</div>
		
						<!-- Information -->
						<div class="col-lg-6 order-1">
							<div class="p-4 p-sm-7">
								<!-- Logo -->
								<a href="index.html">	 
									<img class="h-50px mb-4" src="{{asset('layoutsCss/images/az.png')}}" alt="logo" style="border-radius:50px">
								</a>
								<!-- Title -->
								<h1 class="mb-2 h3">Welcome back</h1>
								<p class="mb-0">New here?<a href="{{ route('register') }}"> Create an account</a></p>
		
								<!-- Form START -->
                                <form method="POST" action="{{ route('login') }}" class="mt-4 text-start">
                                    @csrf
                                
                                    <!-- Email -->
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Enter email id</label>
                                        <input type="email" id="email" class="form-control" name="email" :value="old('email')" required autofocus autocomplete="username">
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                
                                    <!-- Password -->
                                    <div class="mb-3 position-relative">
                                        <label for="password" class="form-label">Enter password</label>
                                        <input class="form-control fakepassword" type="password" id="psw-input" name="password" required autocomplete="current-password">
                                        <span class="position-absolute top-50 end-0 translate-middle-y p-0 mt-3">
                                            <i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
                                        </span>
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                
                                    <!-- Remember me -->
                                    <div class="mb-3 d-sm-flex justify-content-between">
                                        <div>
                                            <input type="checkbox" id="remember_me" class="form-check-input" name="remember">
                                            <label class="form-check-label" for="remember_me">Remember me?</label>
                                        </div>
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}">Forgot password?</a>
                                        @endif
                                    </div>
                                
                                    <!-- Button -->
                                    <div>
                                        <button type="submit" class="btn btn-primary w-100 mb-0">Login</button>
                                    </div>
                                
                                    <!-- Divider -->
                                    <div class="position-relative my-4">
                                        <hr>
                                        <p class="small bg-mode position-absolute top-50 start-50 translate-middle px-2">Or sign in with</p>
                                    </div>
                                
                                    <!-- Google and Facebook button -->
                                    <div class="vstack gap-3">
                                        <a href="#" class="btn btn-light mb-0">
                                            <i class="fab fa-fw fa-google text-google-icon me-2"></i>Sign in with Google
                                        </a>
                                        <a href="#" class="btn btn-light mb-0">
                                            <i class="fab fa-fw fa-facebook-f text-facebook me-2"></i>Sign in with Facebook
                                        </a>
                                    </div>
                                
                                    <!-- Copyright -->
                                    <div class="text-primary-hover text-body mt-3 text-center">
                                        Copyrights ©2023 Booking. Build by <a href="https://www.webestica.com/" class="text-body">Webestica</a>.
                                    </div>
                                </form>
                                
								<!-- Form END -->
							</div>		
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Main Content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Back to top -->
<div class="back-top"></div>

<script src="{{asset('layoutsCss/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

<!-- ThemeFunctions -->
<script src="{{asset('layoutsCss/js/functions.js')}}"></script>

</body>

<!-- Mirrored from booking.webestica.com/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Feb 2024 15:41:24 GMT -->
</html>