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
                            <div class="card-title">Forgot Password</div>
                            <div class="card-body">
                                <form action="{{ route('password.forgot') }}" method="POST">
                                    @csrf
                                    <div class="mt-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control u-box-shadow-1" name="email"
                                            placeholder="Enter your email" autofocus />
                                        @error('email')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="my-5">
                                        <button type="submit" class="btn btn-green">Request Password</button>
                                    </div>
                                </form>
                                <div class="back-button">
                                    <a href="{{ route('login') }}">
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
