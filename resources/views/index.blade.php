<x-app-layout>

    <header>
        <nav class="navbar navbar-expand-lg navbar-blue">
            <div class="container-fluid">
                <a class="navbar-brand" href="javascript:void()">
                    <img src="assets/images/logo.png" alt="logo" class="logo" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="javascript:void()navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"> </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void()" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="javascript:void()">Article Writing</a></li>
                                <li><a class="dropdown-item" href="javascript:void()">Blog Posts</a></li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void()">Copywriting</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void()">Ghostwriting</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void()">Local SEO City Pages</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void()">Press Releases</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void()">Product Descriptions</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void()">SEO Content</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void()">Subject Matter Experts</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void()">Website Content</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void()">White Papers</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void()">Managed Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void()">Marketplace</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void()">Pricing</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void()" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Resources
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="javascript:void()">Action</a></li>
                                <li><a class="dropdown-item" href="javascript:void()">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void()">Something else here</a>
                                </li>
                            </ul>
                        </li>
                        @auth

                        <li class="nav-item dropdown btn btn-white">
                            <a class="nav-link dropdown-toggle text-dark" href="javascript:void()" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Account
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <b class="dropdown-item">
                                        {{ auth()->user()->name }}
                                        <p class="text-muted"> {{ auth()->user()->email }}</p>
                                    </b>
                                </li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                                </li>
                            </ul>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-white" href="{{ route('register') }}">Sign Up</a>
                        </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main></main>

</x-app-layout>
