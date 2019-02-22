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
						<a href="<?php echo site_url('admin/tasklists/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover table-striped table-bordered data-table" id="dataTable" width="100%" cellspacing="0" style="font-size:12px">
								<thead>
									<tr>
										<th>No</th>
										<th>Task_Name</th>
										<th>App</th>
										<th>PJ</th>
										<th>Category</th>
										<th>Mandays</th>
										<th>Frek</th>
										<th>Start_Date</th>
										<th>End_Date</th>
										<th>Priority</th>
										<th>Status_Now</th>
										<th>Status_Liniear</th>
										<th>Done</th>
										<th>Description</th>
										<th></th>
										<th>Level</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($tasklists as $tasklist):
											$today = date("Y-m-d");
											$linier = $this->Tasklist_model->stLinier($today,$tasklist->start_date,$tasklist->end_date);
										?>
									<tr>
										<td>
										</td>
										<td>
											<?php echo $tasklist->task_name ?>
										</td>
										<td>
											<?php echo $tasklist->application ?>
										</td>
										<td>
											<?php echo $tasklist->pj ?>
										</td>
										<td>
											<?php echo $tasklist->category ?>
										</td>
										<td>
											<?php echo $tasklist->mandays ?>
										</td>
										<td>
											<?php echo $tasklist->frekuensi ?>
										</td>
										<td>
											<?php echo $tasklist->start_date ?>
										</td>
										<td>
											<?php echo $tasklist->end_date ?>
										</td>
										<td>
											<?php echo $tasklist->priority ?>
										</td>
										<td>
											<?php echo $tasklist->stat_now ?>%
										</td>
										<td>
											<?php echo $linier ?>%
										</td>
										<td><?php echo $tasklist->done ?></td>
										<td><?php echo $tasklist->description ?></td>
										<td width="30">
											<a class="text-left" href="<?php echo site_url('admin/tasklists/edit/'.$tasklist->task_id) ?>"
											 class="btn btn-small" ><i class="fas fa-edit"></i></a>
											 <a class="text-right" onclick="deleteConfirm('<?php echo site_url('admin/tasklists/delete/'.$tasklist->task_id) ?>')"
 											 href="#!" class="btn btn-small text-danger" ><i class="fas fa-trash"></i></a>
										</td>
										<td><?php echo $tasklist->level_task ?></td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<?php $this->load->view("admin/_partials/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->


	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

  <script type="text/javascript" charset="utf-8">

	//delete modal

  function deleteConfirm(url){
  	$('#btn-delete').attr('href', url);
  	$('#deleteModal').modal();
  }
	//numbering data table
	$(document).ready(function() {

    var t = $('#dataTable').DataTable( {
        "columnDefs": [ {
            "searchable": true,
            "orderable": false,
            "targets": 0
        } ],
        "order": [[ 1, 'asc' ]]
    } );

		// RowCallback: function(row, data, index){
		// 	if(data[15]== 1){
		// 			$(row).find('td:eq(8)').css('color', 'green');
		// 	}
		// 	else if (data[15]== 2) {
		// 			$(row).find('td:eq(8)').css('color', 'green');
		// 	}
		// 	else if (data[15]== 3) {
		// 			$(row).find('td:eq(8)').css('color', 'blue');
		// 	}
		// 	else if (data[15]== 4) {
		// 			$(row).find('td:eq(8)').css('color', 'red');
		// 		}
		// 	}
		// });s


		//search and short
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();

		//color

		// var oTable = $('table.dataTable').DataTable({


		} );
  </script>

</body>

</html>
