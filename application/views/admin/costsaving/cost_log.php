<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">
  <?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">
    <?php $this->load->view("admin/_partials/sidebar.php") ?>
    <div id="content-wrapper">
      <div class="container-fluid">
        <?php $this->load->view("admin/_partials/breadcrumbs.php") ?>

        <!-- DataTables -->
        <div class="card mb-3">
          <div class="card-header">
						<a style="font-color:blue"><strong>Cost Saving Log</strong></a>
					</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover" id="dataTable" width="100%" cellspacing="0" style="font-size:12px">
                <thead>
									<tr>
                    <th>No</th>
										<th>Task_Name</th>
										<th>App</th>
										<th>PJ</th>
										<th>Category</th>
										<th>Start_Date</th>
										<th>End_Date</th>
										<th>Status_Now</th>
                    <th>Total_Mandays</th>
										<th>Cost_Saving</th>
                    <th></th>
									</tr>
								</thead>
                <tbody>
									<?php foreach ($tasklists as $tasklist): ?>
									<tr>
                    <td></td>
										<td><?php echo $tasklist->task_name ?></td>
										<td><?php echo $tasklist->application ?></td>
										<td><?php echo $tasklist->pj ?></td>
                    <td><?php echo $tasklist->category?></td>
										<td><?php echo $tasklist->start_date ?></td>
										<td><?php echo $tasklist->end_date ?></td>
										<td><?php echo $tasklist->stat_now ?>%</td>
										<td><?php echo $tasklist->sum_mandays ?></td>
                    <td>Rp2.500.000</td>
										<td>
											<a class="text-left" href="<?php echo site_url('admin/tasklists/edit/'.$tasklist->task_id) ?>"
											 class="btn btn-small" ><i class="fas fa-edit"></i></a>
											 <a class="text-right" onclick="deleteConfirm('<?php echo site_url('admin/tasklists/delete/'.$tasklist->task_id) ?>')"
 											 href="#!" class="btn btn-small text-danger" ><i class="fas fa-trash"></i></a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- card mb-3 -->
      </div>
      <!-- container fluid -->
    </div>
    <!-- content-wrapper -->
  </div>
  <!-- wrapper -->
  <?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

  <script>
  function deleteConfirm(url){
  	$('#btn-delete').attr('href', url);
  	$('#deleteModal').modal();
  }
  </script>
</body>

</html>
