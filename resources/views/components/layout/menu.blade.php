<aside id="sidebar" class="sidebar">
  @php
    $ruta = explode(".",Request::route()->getName());
  @endphp

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="timelog-personal">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#timelog-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Marcaciones</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="timelog-nav" class="nav-content collapse @if ($ruta[0] == 'timelog') show @endif " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('timelog.extract')}}" class="{{$ruta[1]=='extract' ? 'active': ''}}">
              <i class="bi bi-circle"></i><span>Extraer marcaciones</span>
            </a>
          </li>
          <li>
            <a href="{{route('timelog.personal')}}" class="{{$ruta[1]=='personal' ? 'active': ''}}">
              <i class="bi bi-circle"></i><span>Listar Marcaciones</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#registro-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Registros</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="registro-nav" class="nav-content collapse @if ($ruta[0] == 'registro') show @endif " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('registro.personal')}}" class="{{$ruta[1]=='personal' ? 'active': ''}}">
              <i class="bi bi-circle"></i><span>Personal</span>
            </a>
          </li>
          <li>
            <a href="{{route('registro.area')}}" class="{{$ruta[1]=='area' ? 'active': ''}}">
              <i class="bi bi-circle"></i><span>Areas</span>
            </a>
          </li>
          <li>
            <a href="{{route('registro.subArea')}}" class="{{$ruta[1]=='subArea' ? 'active': ''}}">
              <i class="bi bi-circle"></i><span>Sub Areas</span>
            </a>
          </li>
          <li>
            <a href="{{route('registro.position')}}" class="{{$ruta[1]=='position' ? 'active': ''}}">
              <i class="bi bi-circle"></i><span>Position</span>
            </a>
          </li>
         </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#timeTable-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Programación</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="timeTable-nav" class="nav-content collapse @if ($ruta[0] == 'timeTable') show @endif " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('timeTable.index')}}" class="{{$ruta[1]=='index' ? 'active': ''}}">
              <i class="bi bi-circle"></i><span>Horarios</span>
            </a>
            <li>
              <a href="{{route('timeTable.timeCalendar')}}" class="{{$ruta[1]=='timeCalendar' ? 'active': ''}}">
                <i class="bi bi-circle"></i><span>Calendario</span>
              </a>
            </li>
            <li>
                <a class="nav-link " href="timeCalendar">
                  <i class="bi bi-circle"></i>
                  <span>Cambio de Turno</span>
                </a>

          </ul>
      </li>


    </ul>

  </aside>
