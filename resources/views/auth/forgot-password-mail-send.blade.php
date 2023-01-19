<x-app-layout>
    <main class="section-password-request">
        <section class="section-password-request--logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="img-fluid" />
            </a>
        </section>

        <section class="section-password-request--details">
            <div class="container">
                <div class="row align-items-center bg-white p-5">
                    <div class="col-md-6 p-5">
                        <div class="card border-0">
                            <div class="card-title justify-content-start">
                                <h1 class="heading">Forgotten Password</h1>
                            </div>
                            <div class="card-body ps-0">
                                <p>A new password has been emailed to you.</p>
                                <p>
                                    If you do not receive and email please
                                    <a href="{{ route('password.forgot') }}"> try again </a> or contact
                                    support.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('assets/images/emailed.svg') }}" alt="" />
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-app-layout>
