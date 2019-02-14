<!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
          <a class="nav-link" href="<?php echo site_url('admin/Dashboard_admin') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span style="font-size:14px">Dashboard</span>
          </a>
        </li>
         <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'tasklists' ? 'active': '' ?>">
           <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
             aria-expanded="false">
             <i class="fas fa-fw fa-boxes"></i>
             <span style="font-size:13px">TASK LIST LOG</span>
         </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown" style="font-size:12px">
            <a class="dropdown-item" href="<?php echo site_url("admin/Tasklists/add") ?>">New Task List!</a>
            <a class="dropdown-item" href="<?php echo site_url("admin/Tasklists/index") ?>">Task List Monitoring</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" >
            <i class="fas fa-fw fa-chart-area"></i>
            <span style="font-size:13px">COST SAVING</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-fw fa-table"></i>
            <span style="font-size:13px">TASK LIST DONE</span></a>
        </li>
      </ul>
