<footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="{{ route('home') }}" class="nav-link px-2 text-muted">Home</a></li>
        <li class="nav-item"><a href="{{ route('about') }}" class="nav-link px-2 text-muted">About us</a></li>
        <li class="nav-item"><a href="{{ route('news') }}" class="nav-link px-2 text-muted">News</a></li>
        <li class="nav-item"><a href="{{ route('gallery.index') }}" class="nav-link px-2 text-muted">Gallery</a></li>
        <li class="nav-item dropdown">
            <a href="{{ route('contacts') }}" class="nav-link px-2 text-muted dropdown-toggle" id="contactsDropdownFooter" role="button" data-bs-toggle="dropdown" aria-expanded="false">Contacts</a>
            <ul class="dropdown-menu" aria-labelledby="contactsDropdownFooter">
                <li><a class="dropdown-item" href="{{ route('contacts') }}">Get in touch</a></li>
                <li><a class="dropdown-item" href="{{ route('contact-list') }}">Messages</a></li>
            </ul>
        </li>
    </ul>
    <p class="text-center text-muted">© 2021 Yurii Lobur</p>
</footer>
