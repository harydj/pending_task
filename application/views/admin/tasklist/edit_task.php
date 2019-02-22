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

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/tasklists/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo base_url()."admin/Tasklists/update"; ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $tasklist->task_id?>" />

							<div class="form-group">
								<label for="task_name">Task Name*</label>
								<input class="form-control <?php echo form_error('task_name') ? 'is-invalid':'' ?>"
								 type="text" name="task_name" placeholder="Task Name" value="<?php echo $tasklist->task_name ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('task_name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="application">Application*</label>
								<select class="form-control" type="text" name="application">
								 <option value="<?php echo $tasklist->application ?>"><?php echo $tasklist->application ?></option>
									<option value="ALL">ALL</option>
									<option value="AFIS">AFIS</option>
									<option value="BIOS">BIOS</option>
									<option value="ISDS">ISDS</option>
									<option value="Humanis">Humanis</option>
									<option value="IIPS">IIPS</option>
									<option value="Sales Cloud">Sales Cloud</option>
									<option value="Service Cloud">Service Cloud</option>
									<option value="Webla">Webla</option>
								</select>
								<!-- <div class="invalid-feedback">
									<?php echo form_error('application') ?>
								</div> -->
							</div>

							<div class="form-group">
								<label for="pj">PJ*</label>
								<input class="form-control <?php echo form_error('pj') ? 'is-invalid':'' ?>"
								 type="text" name="pj" placeholder="PJ" value="<?php echo $tasklist->pj ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('pj') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="category">Category*</label>
								<select class="form-control" name="category">
									<option selected='true' value="<?php echo $tasklist->category ?>"><?php echo $tasklist->category ?></option>
									<option value="Gangguan">Gangguan</option>
									<option value="Permintaan">Permintaan</option>
								</select>
								<!-- <div class="invalid-feedback">
									<?php echo form_error('category') ?>
								</div> -->
							</div>

							<div class="form-group">
								<label for="mandays">Mandays*</label>
								<select class="form-control" name="mandays">
									<option selected='true' value="<?php echo $tasklist->mandays ?>"><?php echo $tasklist->mandays ?></option>
									<option value="Yes">Yes</option>
									<option value="No">No</option>
								</select>
								<!-- <div class="invalid-feedback">
									<?php echo form_error('mandays') ?>
								</div> -->
							</div>

							<div class="form-group">
								<label for="frekuensi">Frekuensi*</label>
								<input class="form-control <?php echo form_error('frekuensi') ? 'is-invalid':'' ?>"
								 type="number" name="frekuensi" placeholder="Frekuensi" value="<?php echo $tasklist->frekuensi ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('frekuensi') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="start_date">Start Date*</label>
								<input class="form-control <?php echo form_error('start_date') ? 'is-invalid':'' ?>"
								 type="date" name="start_date" placeholder="Start Date" value="<?php echo $tasklist->start_date ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('start_date') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="end_date">End Date*</label>
								<input class="form-control <?php echo form_error('end_date') ? 'is-invalid':'' ?>"
								 type="date" name="end_date" placeholder="End Date" value="<?php echo $tasklist->end_date ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('end_date') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="priority">Priority*</label>
								<select class="form-control" name="priority">
								 <option selected='true' value="<?php echo $tasklist->priority ?>"><?php echo $tasklist->priority ?></option>
									<option value="Low">Low</option>
									<option value="Medium">Medium</option>
									<option value="High">High</option>
								</select>
								<!-- <div class="invalid-feedback">
									<?php echo form_error('priority') ?>
								</div> -->
							</div>

							<div class="form-group">
								<label for="stat_now">Status Now*</label>
								<input class="form-control <?php echo form_error('stat_now') ? 'is-invalid':'' ?>"
								 type="number" name="stat_now" placeholder="Status Now" value="<?php echo $tasklist->stat_now ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('stat_now') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="done">Have Done?*</label>
								<select class="form-control" name="done">
									<option selected='true' value="<?php echo $tasklist->done ?>"><?php echo $tasklist->done ?></option>
									<option value="Yes">Yes</option>
									<option value="No">No</option>
								</select>
								<!-- <div class="invalid-feedback">
									<?php echo form_error('done') ?>
								</div> -->
							</div>

							<div class="form-group">
								<label for="name">Description*</label>
								<textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 name="description" placeholder="Description"><?php echo $tasklist->description ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="sum_mandays">Total Mandays*</label>
								<input class="form-control <?php echo form_error('sum_mandays') ? 'is-invalid':'' ?>"
								 type="number" name="sum_mandays" placeholder="ex: 1" value="<?php echo $tasklist->sum_mandays ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('sum_mandays') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="level_task">Level Task*</label>
								<select class="form-control" name="level_task">
									<option selected='true' value="<?php echo $tasklist->level_task ?>"><?php
									 	if($tasklist->level_task == 1){echo 'Task Baru';}
										elseif ($tasklist->level_task == 2) {echo 'Revisi tanggal pertama';}
										elseif ($tasklist->level_task == 3){echo 'Revisi tanggal ke-2';}
										elseif($tasklist->level_task == 4){echo 'Revisi tanggal ke-3';}
										?></option>
										<option value="1">Task Baru</option>
										<option value="2">Revisi tanggal pertama</option>
										<option value="3">Revisi tanggal ke-2</option>
										<option value="4">Revisi tanggal ke-3</option>
								</select>
								<!-- <div class="invalid-feedback">
									<?php echo form_error('level_task') ?>
								</div> -->
							</div>

							<div class="form-group">
								<label for="type_task">Type Task*</label>
								<select class="form-control" name="type_task">
									<option selected='true' value="<?php echo $tasklist->type_task ?>"><?php
									if($tasklist->type_task == 1) {echo 'New Task from Ticket';}
									elseif($tasklist->type_task == 2) {echo 'Carry Over Task';}
									elseif($tasklist->type_task == 2) {echo 'Task Out of Ticket';}
									 ?></option>
									<option value="1">New Task from Ticket</option>
									<option value="2">Carry Over Task</option>
									<option value="3">Task Out of Ticket</option>
								</select>
								<!-- <div class="invalid-feedback">
									<?php echo form_error('type_task') ?>
								</div> -->
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
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

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
