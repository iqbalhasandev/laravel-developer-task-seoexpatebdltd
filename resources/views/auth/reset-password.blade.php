<x-app-layout>
    <main class="section-forgot-password">
        <section class="section-forgot-password--logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="img-fluid" />
            </a>
        </section>

        <section class="section-forgot-password--form">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-title">Reset Password</div>
                            <div class="card-body">
                                <form action="{{ route('password.reset') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token }}">
                                    <div class="mt-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control u-box-shadow-1" name="email"
                                            value="{{ $email ?? old('email') }}" placeholder="Enter your email"
                                            readonly />
                                        @error('email')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mt-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control u-box-shadow-1" name="password"
                                            placeholder="Enter Your Password" autofocus />
                                        @error('password')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mt-3">
                                        <label for="password_confirmation" class="form-label">Password
                                            Confirmation</label>
                                        <input type="password" class="form-control u-box-shadow-1"
                                            name="password_confirmation" placeholder="Re-enter Your Password" />
                                        @error('password_confirmation')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="my-5">
                                        <button type="submit" class="btn btn-green">Reset Password</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-app-layout>
