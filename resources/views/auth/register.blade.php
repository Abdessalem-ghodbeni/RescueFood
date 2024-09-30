
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from booking.webestica.com/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Feb 2024 15:41:24 GMT -->
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
						<div class="col-lg-5 d-md-flex align-items-center order-2 order-lg-1">
							<div class="p-3 p-lg-5">
								<img src="{{asset('layoutsCss/images/element/signin.svg')}}" alt="">
							</div>
							<!-- Divider -->
							<div class="vr opacity-1 d-none d-lg-block"></div>
						</div>
		
						<!-- Information -->
						<div class="col-lg-7 order-1">
							<div class="p-4 p-sm-6">
								<!-- Logo -->
								<a href="index.html">
                                    <img class="h-50px mb-4" src="{{asset('layoutsCss/images/az.png')}}" alt="logo" style="border-radius:50px">
								</a>
								<!-- Title -->
								<h1 class="mb-2 h3">Create new account</h1>
								<p class="mb-0">Already a member?<a href="sign-in.html"> Log in</a></p>
                                {{-- <form method="POST" action="{{ route('register') }}" class="mt-4 text-start">
                                    @csrf
                            
                                    <div class="form-group d-flex justify-content-center align-items-cener  mt-3 mb-5">
                                        <label for="role">Select Role:</label><br>
                                        @foreach ($roles as $role)
                                            <input class="mx-2" type="radio" name="role" value="{{ $role->value }}" id="{{ $role->value }}">
                                            <label for="{{ $role->value }}">{{ $role->value }}</label><br>
                                        @endforeach
                                    </div>
                            
                                    <div id="additional-fields" style="display: none;">
                                        <div class="form-group">
                                            <label for="name">Name:</label>
                                            <input type="text" name="name" id="name" class="form-control" required>
                                        </div>
                            
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="email" name="email" id="email" class="form-control" required>
                                        </div>
                            
                                        <div class="form-group">
                                            <label for="password">Password:</label>
                                            <input type="password" name="password" id="password" class="form-control" required>
                                        </div>
                            
                                        <div class="form-group">
                                            <label for="password_confirmation">Confirm Password:</label>
                                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                                        </div>
                            
                                        <div class="form-group">
                                            <label for="region">Region:</label>
                                            <input type="text" name="region" id="region" class="form-control" required>
                                        </div>
                            
                                        <div class="form-group">
                                            <label for="adresse">Adresse:</label>
                                            <input type="text" name="adresse" id="adresse" class="form-control">
                                        </div>
                            
                                        <div class="form-group">
                                            <label for="numero_telephone">Numéro de téléphone:</label>
                                            <input type="text" name="numero_telephone" id="numero_telephone" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <input type="checkbox" class="form-check-input" id="rememberCheck">
                                            <label class="form-check-label" for="rememberCheck">Keep me signed in</label>
                                        </div>
                                        <!-- Button -->
                                    </div>
                                    <div><button type="submit" class="btn btn-primary w-100 mb-0">Sign up</button></div>
                            
                                    <div class="position-relative my-4">
										<hr>
										<p class="small position-absolute top-50 start-50 translate-middle bg-mode px-1 px-sm-2">Or sign in with</p>
									</div>
									<!-- Google and facebook button -->
									<div class="vstack gap-3">
										<a href="#" class="btn btn-light mb-0"><i class="fab fa-fw fa-google text-google-icon me-2"></i>Sign in with Google</a>
										<a href="#" class="btn btn-light mb-0"><i class="fab fa-fw fa-facebook-f text-facebook me-2"></i>Sign in with Facebook</a>
									</div>
		 
									<div class="text-primary-hover text-body mt-3 text-center"> Copyrights ©2024 ESPRIT. Build by <a href="https://www.webestica.com/" class="text-body">Twin 5 </a>. </div>
                                </form> --}}
                                <form method="POST" action="{{ route('register') }}" class="mt-4 text-start">
                                    @csrf
                                
                                    <div class="form-group d-flex justify-content-center align-items-center mt-3 mb-5">
                                        <label for="role">Select Role:</label><br>
                                        @foreach ($roles as $role)
                                            <input class="mx-2" type="radio" name="role" value="{{ $role->value }}" id="{{ $role->value }}">
                                            <label for="{{ $role->value }}">{{ ucfirst($role->value) }}</label><br>
                                        @endforeach
                                    </div>
                                
                                    <div id="additional-fields" style="display: none;">
                                        <!-- Name field -->
                                        <div class="form-group">
                                            <label for="name" id="name-label">Name:</label>
                                            <input type="text" name="name" id="name" class="form-control" required>
                                        </div>
                                
                                        <!-- Email field -->
                                        <div class="form-group">
                                            <label for="email" id="email-label">Email:</label>
                                            <input type="email" name="email" id="email" class="form-control" required>
                                        </div>
                                
                                        <!-- Password field -->
                                        <div class="form-group">
                                            <label for="password">Password:</label>
                                            <input type="password" name="password" id="password" class="form-control" required>
                                        </div>
                                
                                        <!-- Confirm Password field -->
                                        <div class="form-group">
                                            <label for="password_confirmation">Confirm Password:</label>
                                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                                        </div>
                                
                                        <!-- Region field -->
                                        <div class="form-group">
                                            <label for="region">Region:</label>
                                            <input type="text" name="region" id="region" class="form-control" required>
                                        </div>
                                
                                        <!-- Adresse field -->
                                        <div class="form-group">
                                            <label for="adresse" id="adresse-label">Adresse:</label>
                                            <input type="text" name="adresse" id="adresse" class="form-control">
                                        </div>
                                
                                        <!-- Numéro de téléphone field -->
                                        <div class="form-group">
                                            <label for="numero_telephone" id="numero_telephone-label">Numéro de téléphone:</label>
                                            <input type="text" name="numero_telephone" id="numero_telephone" class="form-control">
                                        </div>
                                
                                        <div class="mb-3">
                                            <input type="checkbox" class="form-check-input" id="rememberCheck">
                                            <label class="form-check-label" for="rememberCheck">Keep me signed in</label>
                                        </div>
                                
                                        <!-- Button -->
                                        <div><button type="submit" class="btn btn-primary w-100 mb-0">Sign up</button></div>
                                    </div>
                                
                                    <div class="position-relative my-4">
                                        <hr>
                                        <p class="small position-absolute top-50 start-50 translate-middle bg-mode px-1 px-sm-2">Or sign in with</p>
                                    </div>
                                
                                    <!-- Google and Facebook button -->
                                    <div class="vstack gap-3">
                                        <a href="#" class="btn btn-light mb-0"><i class="fab fa-fw fa-google text-google-icon me-2"></i>Sign in with Google</a>
                                        <a href="#" class="btn btn-light mb-0"><i class="fab fa-fw fa-facebook-f text-facebook me-2"></i>Sign in with Facebook</a>
                                    </div>
                                
                                    <div class="text-primary-hover text-body mt-3 text-center">
                                        Copyrights ©2024 ESPRIT. Build by <a href="https://www.webestica.com/" class="text-body">Twin 5</a>.
                                    </div>
                                </form>
							 
							</div>		
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
 
</main>
 

<!-- Back to top -->
<div class="back-top"></div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const roleInputs = document.querySelectorAll('input[name="role"]');
        const additionalFields = document.getElementById('additional-fields');
        const nameLabel = document.getElementById('name-label');
        const emailLabel = document.getElementById('email-label');
        const adresseLabel = document.getElementById('adresse-label');
        const numeroTelephoneLabel = document.getElementById('numero_telephone-label');

        // Mapping of role to label text
        const roleLabels = {
            'restaurant': {
                name: 'Nom du restaurant',
                email: 'Email du restaurant',
                adresse: 'Adresse du restaurant',
                numero_telephone: 'Numéro de téléphone du restaurant'
            },
            'association': {
                name: 'Nom de l\'association',
                email: 'Email de l\'association',
                adresse: 'Adresse de l\'association',
                numero_telephone: 'Numéro de téléphone de l\'association'
            },
            'livreur': {
                name: 'Nom du livreur',
                email: 'Email du livreur',
                adresse: 'Adresse du livreur',
                numero_telephone: 'Numéro de téléphone du livreur'
            },
            'admin': {
                name: 'Nom de l\'admin',
                email: 'Email de l\'admin',
                adresse: 'Adresse de l\'admin',
                numero_telephone: 'Numéro de téléphone de l\'admin'
            }
        };

        // Event listener for role change
        roleInputs.forEach(input => {
            input.addEventListener('change', function () {
                const selectedRole = this.value;

                // Display additional fields
                additionalFields.style.display = 'block';

                // Update labels based on selected role
                if (roleLabels[selectedRole]) {
                    nameLabel.textContent = roleLabels[selectedRole].name;
                    emailLabel.textContent = roleLabels[selectedRole].email;
                    adresseLabel.textContent = roleLabels[selectedRole].adresse;
                    numeroTelephoneLabel.textContent = roleLabels[selectedRole].numero_telephone;
                }
            });
        });
    });
</script>
<!-- Bootstrap JS -->
<script src="{{asset('layoutsCss/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

<!-- ThemeFunctions -->
<script src="{{asset('layoutsCss/js/functions.js')}}"></script>
<script>
    document.querySelectorAll('input[name="role"]').forEach((elem) => {
        elem.addEventListener('change', function() {
            document.getElementById('additional-fields').style.display = 'block';
        });
    });
</script>
</body>
 
</html>