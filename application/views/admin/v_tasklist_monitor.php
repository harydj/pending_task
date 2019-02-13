<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("admin/_partials/head.php")?>
</head>

<body id="page-top">
  <?php $this->load->view("admin/_partials/navbar.php") ?>
  <div id="wrapper">
    <?php $this->load->view("admin/_partials/sidebar.php") ?>
    <div id="content-wrapper">
      <div id="container-fluid">
        <?php $this->load->view("admin/_partials/breadcrumbs.php") ?>

        <!-- DataTables -->
        <div class="card-mb-3">
          <div class="card-header">
            <a href="<?php echo site_url('c_task_monitor/add') ?>"><i class="fas fa-plus"></i>Add New Task</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Task</th>
                    <th>Aplikasi</th>
                    <th>PJ</th>
                    <th>Kategori</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Status Sekarang</th>
                    <th>Status Liniear</th>
                    <th>Keterangan</th>
                    <th>Done?</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($t_tasklist as $tasklist):?>
                  <tr>
                    <td ><?php echo $tasklist->id ?></td>
                    <td ><?php echo $tasklist->task_name ?></td>
                    <td ><?php echo $tasklist->aplikasi ?></td>
                    <td ><?php echo $tasklist->pj ?></td>
                    <td ><?php echo $tasklist->kategori ?></td>
                    <td ><?php echo $tasklist->start_date ?></td>
                    <td ><?php echo $tasklist->end_date ?></td>
                    <td ><?php echo $tasklist->status_sekarang ?></td>
                    <td ><?php echo $tasklist->status_liniear ?></td>
                    <td ><?php echo $tasklist->keterangan ?></td>
                    <td width="250">
                      <a href="<?php echo site_url('c_task_monitor/edit'.$tasklist->task_id)?>" class="btn btn-small"><i class="fas fa-edit"></i>Edit</a>
                      <a onclick="deleteConfirm('<?php echo site_url('c_task_monitor/delete'.$tasklist->task_id) ?>')" href="#" class="btn btn-small text-danger"><i class="fas fa-trash"></i>Hapus</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <!-- container fluid -->

      <!-- Sticky Footer -->
      <?php $this->load->view("admin/_partials/footer.php") ?>

    </div>
    <!-- content-wrapper -->

  </div>
  <!-- wrapper -->

  <?php $this->load->view("admin/_partials/scrolltop.php") ?>
  <?php $this->load->view("admin/_partials/modal.php") ?>

  <?php $this->load->view("admin/_partials/js.php") ?>
</body>
</html>
