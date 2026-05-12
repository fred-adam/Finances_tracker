<x-guest-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        
        <!-- Affichage des messages de succès ou d'erreur -->
       
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <div class="card px-sm-6 px-0">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">

                           
                <span class="text-primary">
                <img src="data:image/png;base64,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" alt="bitcoin-sccepted">
                </span>
                             <span class="app-brand-text demo text-heading fw-bold">{{ config('app.name') }}</span>
                        </div>
                        
                        <h4 class="mb-1">Welcome to {{ config('app.name') }}!</h4>
                        <p class="mb-6">Register your new account here</p>
                        <!-- error display -->
                          @if (session('message'))
            <div class="alert alert-success alert-dismissible">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

                        <!-- UN SEUL FORMULAIRE ICI -->
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Username -->
                            <div class="mb-6">
                                <label for="name" class="form-label">Username</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required autofocus />
                            </div>

                            <!-- Phone -->
                            <div class="mb-6">
                                <label for="fone" class="form-label">Phone number</label>
                                <input type="text" class="form-control" id="fone" name="fone" value="{{ old('fone') }}" required />
                            </div>

                            <!-- Email -->
                            <div class="mb-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required />
                            </div>

                            <!-- Password -->
                            <div class="mb-6 form-password-toggle">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" id="password" class="form-control" name="password" placeholder="············" required />
                            </div>

                            <!-- Password Confirmation (OBLIGATOIRE à cause de 'confirmed' dans le contrôleur) -->
                            <div class="mb-6 form-password-toggle">
                                <label class="form-label" for="password_confirmation">Confirm Password</label>
                                <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" placeholder="············" required />
                            </div>

                            <div class="mb-6">
                                <button class="btn btn-primary d-grid w-100" type="submit">Register</button>
                            </div>
                        </form>

                        <p class="text-center">
                            <span>Already have an account?</span>
                            <a href="{{ route('login') }}">
                                <span>Sign in instead</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>