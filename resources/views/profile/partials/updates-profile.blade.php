@extends('layouts.app') 

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">

                <div class="card mb-6">
                    <h5 class="card-header"><strong>Profile Information</strong></h5>
                    <div class="card-body">
                        {{-- Hidden form for email verification --}}
                        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                            @csrf
                        </form>

                        <form id="formAccountSettings" method="post" action="{{ route('profile.update') }}">
                            @csrf
                            @method('patch')

                            {{-- Form-specific Success/Error --}}
                            @if (session('status') === 'profile-updated')
                                <div class="alert alert-success alert-dismissible">
                                    Profile updated successfully!
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            <div class="row g-6">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input class="form-control" type="text" id="name" name="name" value="{{ old('name', $user->name) }}" required autofocus />
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input class="form-control" type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required />
                                    
                                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                        <div class="mt-2">
                                            <p class="text-sm text-gray-800">
                                                Your email address is unverified.
                                                <button form="send-verification" class="btn btn-link p-0 text-decoration-underline">Click here to re-send.</button>
                                            </p>
                                            @if (session('status') === 'verification-link-sent')
                                                <p class="text-success small">A new verification link has been sent.</p>
                                            @endif
                                        </div>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label" for="fone">Phone Number</label>
                                    <input type="text" id="fone" name="fone" class="form-control" value="{{ old('fone', $user->fone) }}" required />
                                </div>
                            </div>

                            <div class="mt-6">
                                <button type="submit" class="btn btn-primary me-3">Save Changes</button>
                                <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card mb-6">
                    <h5 class="card-header"><strong>Update Password</strong></h5>
                    <div class="card-body">
                        <form method="post" action="{{ route('password.update') }}">
                            @csrf
                            @method('put')

                            {{-- Password Specific Status --}}
                            @if (session('status') === 'password-updated')
                                <div class="alert alert-success alert-dismissible">
                                    Password changed successfully!
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            {{-- Display validation errors for password specifically --}}
                            @if ($errors->updatePassword->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->updatePassword->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="row g-6">
                                <div class="col-md-6">
                                    <label for="current_password" class="form-label">Current Password</label>
                                    <input type="password" name="current_password" id="current_password" class="form-control" autocomplete="current-password" />
                                </div>
                                <div class="col-md-6">
                                    <label for="password" class="form-label">New Password</label>
                                    <input type="password" name="password" id="password" class="form-control" autocomplete="new-password" />
                                </div>
                                <div class="col-md-6">
                                    <label for="password_confirmation" class="form-label">Confirm New Password</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" autocomplete="new-password" />
                                </div>
                            </div>

                            <div class="mt-6">
                                <button type="submit" class="btn btn-primary me-3">Update Password</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <h5 class="card-header"><strong>Delete Account</strong></h5>
                    <div class="card-body">
                        <div class="mb-6 col-12 mb-0">
                            <div class="alert alert-warning">
                                <h5 class="alert-heading mb-1">Are you sure you want to delete your account?</h5>
                                <p class="mb-0">Once you delete your account, there is no going back.</p>
                            </div>
                        </div>

                <form id="formAccountDeactivation" method="post" action="{{ route('profile.destroy') }}">
    @csrf
    @method('delete')

    <div class="mb-3">
        <label for="password" class="form-label">Confirm Password to Delete</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
        @if($errors->userDeletion->has('password'))
            <div class="text-danger mt-1 small">{{ $errors->userDeletion->first('password') }}</div>
        @endif
    </div>

    <div class="form-check mb-4">
        <input class="form-check-input" type="checkbox" name="confirm_deletion" id="accountActivation" required />
        <label class="form-check-label" for="accountActivation">I confirm my account deactivation</label>
    </div>

    <button type="submit" class="btn btn-danger">Deactivate Account</button>
</form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection