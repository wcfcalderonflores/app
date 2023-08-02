<aside id="sidebar" class="sidebar">
  <?php
    $ruta = explode(".",Request::route()->getName());
  ?>

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
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
        <a class="nav-link collapsed" data-bs-target="#personal-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Registros</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="personal-nav" class="nav-content collapse <?php if($ruta[0] == 'personal'): ?> show <?php endif; ?> " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo e(route('personal.index')); ?>" class="<?php echo e($ruta[1]=='index' ? 'active': ''); ?>">
              <i class="bi bi-circle"></i><span>Personal</span>
            </a>
          </li>
          <li>
            <a href="<?php echo e(route('timelog.personal')); ?>" class="<?php echo e($ruta[1]=='personal' ? 'active': ''); ?>">
              <i class="bi bi-circle"></i><span>Areas</span>
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
          </li>
        </ul>
      </li>

    </ul>

  </aside><?php /**PATH E:\proyectos-netbeans\proyecto laravel\control-personal\resources\views/components/layout/menu.blade.php ENDPATH**/ ?>