<!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
          <a class="nav-link" href="<?php echo site_url('admin/Dashboard_admin') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span style="font-size:15px">Dashboard</span>
          </a>
        </li>
         <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'tasklists' ? 'active': '' ?>">
           <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
             aria-expanded="false">
             <i class="fas fa-fw fa-boxes"></i>
             <span style="font-size:14px">TASK LIST LOG</span>
         </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown" style="font-size:15px">
            <a class="dropdown-item" href="<?php echo site_url("admin/Tasklists/add") ?>">New Task List!</a>
            <a class="dropdown-item" href="<?php echo site_url("admin/Tasklists/index") ?>">Task List Monitoring</a>
          </div>
        </li>
        <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'tasklists' ? 'active': '' ?>">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-chart-area"></i>
            <span style="font-size:14px">COST SAVING</span>
          </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown" style="font-size:15px">
              <a class="dropdown-item" href="<?php echo site_url("admin/CostMonitor/index")?>">Cost Saving Monitoring</a>
              <a class="dropdown-item" href="<?php echo site_url("admin/CostSaving/index")?>">Cost Saving Log</a>
            </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url("admin/TasklistLog/index") ?>">
            <i class="fas fa-fw fa-table"></i>
            <span style="font-size:14px">TASK LIST DONE</span></a>
        </li>
      </ul>
