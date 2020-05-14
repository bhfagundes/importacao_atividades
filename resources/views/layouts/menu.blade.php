<li class="nav-item {{ Request::is('atividades*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('atividades.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Atividades</span>
    </a>
</li>

<li class="nav-item {{ Request::is('cidades*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('cidades.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Cidades</span>
    </a>
</li>


<li class="nav-item {{ Request::is('conteudo*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('conteudo.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Conteudo Tributário</span>
    </a>
</li>
