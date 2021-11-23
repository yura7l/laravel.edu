<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link px-2 text-white">Home</a></li>
                <li class="nav-item"><a href="{{ route('about') }}" class="nav-link px-2 text-white">About us</a></li>
                <li class="nav-item"><a href="{{ route('news') }}" class="nav-link px-2 text-white">News</a></li>
                <li class="nav-item dropdown">
                    <a href="{{ route('contacts') }}" class="nav-link px-2 text-white dropdown-toggle" id="contactsDropdownHeader" role="button" data-bs-toggle="dropdown" aria-expanded="false">Contacts</a>
                    <ul class="dropdown-menu" aria-labelledby="contactsDropdownHeader">
                        <li><a class="dropdown-item" href="{{ route('contacts') }}">Get in touch</a></li>
                        <li><a class="dropdown-item" href="{{ route('contact-list') }}">Messages</a></li>
                    </ul>
                </li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
            </form>

            <div class="text-end">
                <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</a>
                <a href="{{ route('sign-up') }}" class="btn btn-warning">Sign-up</a>
            </div>
        </div>
    </div>
</header>
