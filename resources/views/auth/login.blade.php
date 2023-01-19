<x-app-layout>
    <main class="section-login">
        <section class="section-login--logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="img-fluid" />
            </a>
        </section>

        <section class="section-login--form">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-title">Sign In</div>
                            <div class="card-body">
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="mt-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control u-box-shadow-1" required
                                            placeholder="Enter Your Email" autofocus />
                                        @error('email')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mt-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control u-box-shadow-1" name="password"
                                            placeholder="Enter Your Password" required />
                                        @error('password')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mt-5">
                                        <button type="submit" class="btn btn-green">Sign In</button>
                                    </div>
                                </form>
                                <div class="links">
                                    <p>
                                        <a href="{{ route('register') }}">Need an account?</a>
                                        <a href="{{ route('password.forgot') }}">Forgot Password?</a>
                                    </p>
                                </div>
                                <div class="back-button">
                                    <a href="{{ route('home') }}">
                                        <i class="bi bi-arrow-left-circle"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-app-layout>
