<aside id="sidebar" class="sidebar">
  <?php
    $ruta = explode(".",Request::route()->getName());
  ?>

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
        <ul id="timelog-nav" class="nav-content collapse <?php if($ruta[0] == 'timelog'): ?> show <?php endif; ?> " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo e(route('timelog.extract')); ?>" class="<?php echo e($ruta[1]=='extract' ? 'active': ''); ?>">
              <i class="bi bi-circle"></i><span>Extraer marcaciones</span>
            </a>
          </li>
          <li>
            <a href="<?php echo e(route('timelog.personal')); ?>" class="<?php echo e($ruta[1]=='personal' ? 'active': ''); ?>">
              <i class="bi bi-circle"></i><span>Listar Marcaciones</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#registro-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Registros</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="registro-nav" class="nav-content collapse <?php if($ruta[0] == 'registro'): ?> show <?php endif; ?> " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo e(route('registro.personal')); ?>" class="<?php echo e($ruta[1]=='personal' ? 'active': ''); ?>">
              <i class="bi bi-circle"></i><span>Personal</span>
            </a>
          </li>
          <li>
            <a href="<?php echo e(route('registro.area')); ?>" class="<?php echo e($ruta[1]=='area' ? 'active': ''); ?>">
              <i class="bi bi-circle"></i><span>Areas</span>
            </a>
          </li>
          <li>
            <a href="<?php echo e(route('registro.subArea')); ?>" class="<?php echo e($ruta[1]=='subArea' ? 'active': ''); ?>">
              <i class="bi bi-circle"></i><span>Sub Areas</span>
            </a>
          </li>
          <li>
            <a href="<?php echo e(route('registro.position')); ?>" class="<?php echo e($ruta[1]=='position' ? 'active': ''); ?>">
              <i class="bi bi-circle"></i><span>Position</span>
            </a>
          </li>
         </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#timeTable-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Programación</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="timeTable-nav" class="nav-content collapse <?php if($ruta[0] == 'timeTable'): ?> show <?php endif; ?> " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo e(route('timeTable.index')); ?>" class="<?php echo e($ruta[1]=='index' ? 'active': ''); ?>">
              <i class="bi bi-circle"></i><span>Horarios</span>
            </a>
            <li>
              <a href="<?php echo e(route('timeTable.timeCalendar')); ?>" class="<?php echo e($ruta[1]=='timeCalendar' ? 'active': ''); ?>">
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
<?php /**PATH C:\xampp\htdocs\control-personal\resources\views/components/layout/menu.blade.php ENDPATH**/ ?>