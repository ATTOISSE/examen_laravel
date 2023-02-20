<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('accueil') }}">GES-FORM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('accueil') }}">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('candidat.create') }}">Candidat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('formation.create') }}">Formation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('referentiel.create') }}">Reférentiel</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Ajout
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('candidat.index') }}">Candidat</a></li>
                        <li><a class="dropdown-item" href="{{ route('formation.index') }}">Formation</a></li>
                        <li><a class="dropdown-item" href="{{ route('referentiel.index') }}">Reférentiel</a></li>
                        <li><a class="dropdown-item" href="{{ route('type.index') }}">Type</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>