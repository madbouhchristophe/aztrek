<ul class="nav flex-column">
    <li class="nav-item">
          <a class="nav-link <?php echo (CURRENT_URL == ADMIN_URL) ? "active" : ""; ?>" href="<?php echo ADMIN_URL; ?>">
            <i class="fa fa-home"></i>
           
            Dashboard
        </a>
    </li>
    <li class="nav-item">
          <a class="nav-link" href="<?php echo ADMIN_URL; ?>crud/pays/">
            <i class="fa fa-flag"></i>
            Pays
        </a>
    </li>
    
    <li class="nav-item">
          <a class="nav-link" href="<?php echo ADMIN_URL; ?>crud/commercial/">
            <i class="fa fa-flag"></i>
           Commercial
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo ADMIN_URL; ?>crud/destination/">
            <i class="fa fa-briefcase"></i>
         Destinations
        </a>
    </li>
</ul>