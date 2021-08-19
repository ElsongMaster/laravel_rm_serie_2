<ul class="nav d-flex justify-content-center bg-info text-light">
    <li class="nav-item"><a  href="{{route('pg1')}}" class="nav-link text-light @if(request()->routeIs('pg1')) active @else '' @endif">Nom</a></li>
    <li class="nav-item"><a  href="{{route('pg2')}}" class="nav-link text-light @if(request()->routeIs('pg2')) active @else '' @endif">Age</a></li>
    <li class="nav-item"><a  href="{{route('pg3')}}" class="nav-link text-light @if(request()->routeIs('pg3')) active @else '' @endif">Adresse</a></li>
    <li class="nav-item"><a  href="{{route('pg4')}}" class="nav-link text-light @if(request()->routeIs('pg4')) active @else '' @endif">Outils Scolaire</a></li>
</ul>