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
<li class="nav-item {{ Request::is('atividadeEvidencias*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('atividadeEvidencias.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Atividade Evidencias</span>
    </a>
</li>
<li class="nav-item {{ Request::is('evidencias*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('evidencias.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Evidencias</span>
    </a>
</li>
<li class="nav-item {{ Request::is('dataAtividadeEvidencias*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('dataAtividadeEvidencias.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Data Atividade Evidencias</span>
    </a>
</li>
<li class="nav-item {{ Request::is('cruzamentos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('cruzamentos.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Cruzamentos</span>
    </a>
</li>
