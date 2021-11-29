@section('aside')
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light ms-auto h-100" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <span class="fs-4">Sidebar</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link link-dark">Home</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('about') }}" class="nav-link link-dark">About us</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('news') }}" class="nav-link link-dark">News</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('gallery.index') }}" class="nav-link link-dark">Gallery</a>
            </li>
            <li class="nav-item dropdown">
                <a href="{{ route('contacts') }}" class="nav-link link-dark dropdown-toggle" id="contactsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Contacts</a>
                <ul class="dropdown-menu" aria-labelledby="contactsDropdown">
                    <li><a class="dropdown-item" href="{{ route('contacts') }}">Get in touch</a></li>
                    <li><a class="dropdown-item" href="{{ route('contact-list') }}">Messages</a></li>
                </ul>
            </li>
        </ul>
        @show
    </div>
