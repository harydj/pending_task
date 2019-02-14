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

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/Tasklists/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/Tasklist/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="task_name">Task Name*</label>
								<input class="form-control <?php echo form_error('task_name') ? 'is-invalid':'' ?>"
								 type="text" name="task_name" placeholder="Task name" />
								<div class="invalid-feedback">
									<?php echo form_error('task_name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="application">Application*</label>
								<input class="form-control <?php echo form_error('application') ? 'is-invalid':'' ?>"
								 type="text" name="application" placeholder="application" />
								<div class="invalid-feedback">
									<?php echo form_error('application') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="pj">PJ*</label>
								<input class="form-control <?php echo form_error('pj') ? 'is-invalid':'' ?>"
								 type="text" name="pj" placeholder="pj" />
								<div class="invalid-feedback">
									<?php echo form_error('pj') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="category">Category*</label>
								<input class="form-control <?php echo form_error('category') ? 'is-invalid':'' ?>"
								 type="text" name="category" placeholder="category" />
								<div class="invalid-feedback">
									<?php echo form_error('category') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="mandays">Mandays*</label>
								<input class="form-control <?php echo form_error('mandays') ? 'is-invalid':'' ?>"
								 type="text" name="mandays" placeholder="mandays" />
								<div class="invalid-feedback">
									<?php echo form_error('mandays') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="frekuensi">Frekuensi*</label>
								<input class="form-control <?php echo form_error('frekuensi') ? 'is-invalid':'' ?>"
								 type="number" name="frekuensi" placeholder="frekuensi" />
								<div class="invalid-feedback">
									<?php echo form_error('frekuensi') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="start_date">Start_Date*</label>
								<input class="form-control <?php echo form_error('start_date') ? 'is-invalid':'' ?>"
								 type="date" name="start_date" placeholder="start date" />
								<div class="invalid-feedback">
									<?php echo form_error('start_date') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="end_date">End_Date*</label>
								<input class="form-control <?php echo form_error('end_date') ? 'is-invalid':'' ?>"
								 type="date" name="end_date" placeholder="end date" />
								<div class="invalid-feedback">
									<?php echo form_error('end_date') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="priority">Priority*</label>
								<input class="form-control <?php echo form_error('priority') ? 'is-invalid':'' ?>"
								 type="text" name="priority" placeholder="priority" />
								<div class="invalid-feedback">
									<?php echo form_error('priority') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="stat_now">Status Now*</label>
								<input class="form-control <?php echo form_error('stat_now') ? 'is-invalid':'' ?>"
								 type="number" name="stat_now" placeholder="stat_now" />
								<div class="invalid-feedback">
									<?php echo form_error('stat_now') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="stat_lin">Status Liniear*</label>
								<input class="form-control <?php echo form_error('stat_lin') ? 'is-invalid':'' ?>"
								 type="number" name="stat_lin" placeholder="stat_lin" />
								<div class="invalid-feedback">
									<?php echo form_error('stat_lin') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="done">Done*</label>
								<input class="form-control <?php echo form_error('done') ? 'is-invalid':'' ?>"
								 type="text" name="done" placeholder="-" />
								<div class="invalid-feedback">
									<?php echo form_error('done') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Description*</label>
								<textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 name="description" placeholder="Product description..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="sum_mandays">Total Mandays*</label>
								<input class="form-control <?php echo form_error('sum_mandays') ? 'is-invalid':'' ?>"
								 name="sum_mandays" placeholder="total mandays" readonly></input>
								<div class="invalid-feedback">
									<?php echo form_error('sum_mandays') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="level_task">Level Task*</label>
								<input class="form-control <?php echo form_error('level_task') ? 'is-invalid':'' ?>"
								 name="level_task" placeholder="level_task"></input>
								<div class="invalid-feedback">
									<?php echo form_error('level_task') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="type_task">Type Task*</label>
								<input class="form-control <?php echo form_error('type_task') ? 'is-invalid':'' ?>"
								 name="type_task" placeholder="type_task"></input>
								<div class="invalid-feedback">
									<?php echo form_error('type_task') ?>
								</div>
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

<script type="text/javascript"></script>
