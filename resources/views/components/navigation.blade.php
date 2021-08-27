    <nav class="navbar navbar-expand-sm navbar-{{ $type }} bg-{{ $type }} mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">TP Dev App</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID"
                aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarID">
                <div class="navbar-nav">
                    <a class="me-3 text-{{ $linkColor }}" href="{{ route("homepage") }}">Index</a>
                    <a class="me-3 text-{{ $linkColor }}" href="{{ route("aboutpage") }}">About</a>
                    <a class="me-3 text-{{ $linkColor }}" href="{{ route("servicespage") }}">Services</a>
                    <a class="me-3 text-{{ $linkColor }}" href="{{ route("contactpage") }}">Contact</a>
                    
                </div>
            </div>
        </div>
    </nav>