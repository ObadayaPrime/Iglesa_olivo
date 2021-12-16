<ul class="list-unstyled full-box dashboard-sideBar-Menu">
  <li>
    <a href="{{ route('inicio.show') }}">
      <i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Inicio
    </a>
  </li>

  @if (Auth::user()->isAdmin())
  <li>
    <a href="#!" class="btn-sideBar-SubMenu">
      <i class="zmdi zmdi-male-female"></i> Miembros <i class="zmdi zmdi-caret-down pull-right"></i>
    </a>
    <ul class="list-unstyled full-box">
      <li>
        <a href="{{ route('miembro.show') }}"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Registro de Miembros</a>
      </li>
      <li>
        <a href="{{ route('miembro.index') }}"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Lista de Miembros</a>
      </li>
      
    </ul>
  </li>
  @endif

  @if (Auth::user()->isAdmin())
  <li>
    <a href="#!" class="btn-sideBar-SubMenu">
      <i class="zmdi zmdi-tab zmdi-hc-fw"></i> Ministerios <i class="zmdi zmdi-caret-down pull-right"></i>
    </a>
    <ul class="list-unstyled full-box">
      <li>
        <a href="{{ route('ministerio.create') }}"><i class="zmdi zmdi-group zmdi-hc-fw"></i> Registrar Ministerio</a>
      </li>
      <li>
        <a href="{{ route('ministerio.show') }}"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> Lista de Ministerio</a>
      </li>
    </ul>
  </li>
  @endif

  @if (Auth::user()->isAdmin())
  <li>
    <a href="#!" class="btn-sideBar-SubMenu">
      <i class="zmdi zmdi-card zmdi-hc-fw"></i> Diezmos y Ofrenda <i class="zmdi zmdi-caret-down pull-right"></i>
    </a>
    <ul class="list-unstyled full-box">
      <li>
        <a href="{{ route('diezmos.create') }}"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i> Registro de Diezmo</a>
      </li>
      <li>
        <a href="{{ route('ofrenda.create') }}"><i class="zmdi zmdi-money zmdi-hc-fw"></i> Registro de Ofrenda</a>
      </li>
    </ul>
  </li>
  @endif

  @if (Auth::user()->isAdmin()||Auth::user()->isEvangelista())
  <li>
    <a href="#!" class="btn-sideBar-SubMenu">
      <i class="zmdi zmdi-card zmdi-hc-fw"></i>Personas Nuevas<i class="zmdi zmdi-caret-down pull-right"></i>
    </a>
    <ul class="list-unstyled full-box">
      <li>
        <a href="{{ route('persona.index') }}"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i> Registro de Persona</a>
      </li>
      <li>
        <a href="{{ route('listapersona.show') }}"><i class="zmdi zmdi-book zmdi-hc-fw"></i>Lista de Personas</a>
      </li>
    </ul>
  </li>
  @endif

  @if (Auth::user()->isAdmin()||Auth::user()->isEvangelista())
  <li>  
    <a href="#!" class="btn-sideBar-SubMenu">
      <i class="zmdi zmdi-card zmdi-hc-fw"></i>Actividad<i class="zmdi zmdi-caret-down pull-right"></i>
    </a>
    <ul class="list-unstyled full-box">
      <li>
        <a href="{{ route('actividad.create') }}"><i class="zmdi zmdi-book zmdi-hc-fw"></i>Registro y Lista</a>
      </li>
    </ul>
  </li>
  @endif

  @if (Auth::user()->isAlabanza())
  <li>
    <a href="#!" class="btn-sideBar-SubMenu">
      <i class="zmdi zmdi-card zmdi-hc-fw"></i>Alabanzas<i class="zmdi zmdi-caret-down pull-right"></i>
    </a>
    <ul class="list-unstyled full-box">
      <li>
        <a href="{{ route('alabanza.create') }}"><i class="zmdi zmdi-book zmdi-hc-fw"></i>Registro de Alabanzas</a>
      </li>
      <li>
        <a href="{{ route('alabanza.show') }}"><i class="zmdi zmdi-book zmdi-hc-fw"></i>Lista de Alabanza</a>
      </li>
    </ul>
  </li>
  @endif
</ul>