  <DOCTYPE html>
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

            <?php if ($this->session->flashdata('success')): ?>
              <div class="alert alert-success" role="alert">
					           <?php echo $this->session->flashdata('success'); ?>
				      </div>
				    <?php endif; ?>

            <div class="card mb-3">
              <div class="card-header" >
                <center>
                <a><strong>BUAT TASKLIST BARU</strong></a>
              </center>
              </div>
              <div class="card-body">
                <form class="form-horizontal" id="form_tasklist" method="POST" action="<?php base_url().'c_task_monitor/save'; ?>"  onsubmit="return(check)" >
                  <div class="form-group">
                    <label for="name">NAMA TASK</label>
                    <input class="form-control <?php echo form_error('task_name') ? 'is-invalid':'' ?>" type="text" name="task_name" placeholder="NAMA TASK" />
                    <div class="invalid-feedback">
									    <?php echo form_error('task_name') ?>
								    </div>
                  </div>

                  <div class="form-group">
                    <label for="name">APLIKASI</label>
                    <input class="form-control <?php echo form_error('aplikasi') ? 'is-invalid':'' ?>" type="text" name="aplikasi" placeholder="APLIKASI" />
                    <div class="invalid-feedback">
									    <?php echo form_error('aplikasi') ?>
								    </div>
                  </div>

                  <div class="form-group">
                    <label for="name">PJ TASK</label>
                    <input class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>" type="text" name="username" placeholder="PJ TASK" />
                    <div class="invalid-feedback">
									    <?php echo form_error('username') ?>
								    </div>
                  </div>

                  <div class="form-group">
                    <label for="name">TASK KATEGORI</label>
                    <select name="kategori" class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>">
                      <option value=" ">-</option>
                      <option value="GANGGUAN">GANGGUAN</option>
                      <option value="PERMINTAAN">PERMINTAAN</option>
                    </select>
                    <div class="invalid-feedback">
									    <?php echo form_error('kategori') ?>
								    </div>
                  </div>

                  <div class="form-group">
                    <label for="mandays">MANDAYS</label>
                    <select name="mandays" class="form-control <?php echo form_error('mandays') ? 'is-invalid':'' ?>">
                      <option value=" ">-</option>
                      <option value="YA">YA</option>
                      <option value="TIDAK">TIDAK</option>
                    </select>
                    <div class="invalid-feedback">
									    <?php echo form_error('kategori') ?>
								    </div>
                  </div>

                  <div class="form-group">
                    <label for="frekuensi">FREKUENSI</label>
                    <input class="form-control <?php echo form_error('frekuensi') ? 'is-invalid':'' ?>" type="number" name="frekuensi" placeholder="ex: 1" />
                    <div class="invalid-feedback">
									    <?php echo form_error('frekuensi') ?>
								    </div>
                  </div>

                  <div class="form-group">
                    <label for="start_date">TANGGAL MULAI</label>
                    <input class="form-control <?php echo form_error('start_date') ? 'is-invalid':'' ?>" type="date" name="start_date" placeholder="ex: 01/01/2019" />
                    <div class="invalid-feedback">
									    <?php echo form_error('start_date') ?>
								    </div>
                  </div>

                  <div class="form-group">
                    <label for="end_date">TANGGAL TARGET SELESAI</label>
                    <input class="form-control <?php echo form_error('end_date') ? 'is-invalid':'' ?>" type="date" name="end_date" placeholder="ex: 01/01/2019" />
                    <div class="invalid-feedback">
									    <?php echo form_error('end_date') ?>
								    </div>
                  </div>

                  <div class="form-group">
                    <label for="prioritas">PRIORITAS</label>
                    <select name="prioritas" class="form-control <?php echo form_error('prioritas') ? 'is-invalid':'' ?>">
                      <option value=" ">-</option>
                      <option value="LOW">LOW</option>
                      <option value="MEDIUN">MEDIUM</option>
                      <option value="HIGH">HIGH</option>
                    </select>
                    <div class="invalid-feedback">
									    <?php echo form_error('prioritas') ?>
								    </div>
                  </div>

                  <div class="form-group">
                    <label for="status_sekarang">PROGRESS STATUS SAAT INI</label>
                    <input class="form-control <?php echo form_error('status_sekarang') ? 'is-invalid':'' ?>" type="number" name="status_sekarang" placeholder="ex: 10%" />
                    <div class="invalid-feedback">
									    <?php echo form_error('status_liniear') ?>
								    </div>
                  </div>

                  <div class="form-group">
                    <label for="status_liniear">STATUS LINIEAR</label>
                    <input class="form-control <?php echo form_error('status_liniear') ? 'is-invalid':'' ?>" type="number" name="status_liniear" placeholder="ex: 10%" />
                    <div class="invalid-feedback">
									    <?php echo form_error('status_liniear') ?>
								    </div>
                  </div>

                  <div class="form-group">
                    <label for="done">TASK SUDAH SELESAI?</label>
                    <select name="done" class="form-control <?php echo form_error('done') ? 'is-invalid':'' ?>">
                      <option value=" ">-</option>
                      <option value="YA">SUDAH</option>
                      <option value="TIDAK">BELUM</option>
                    </select>
                    <div class="invalid-feedback">
									    <?php echo form_error('done') ?>
								    </div>
                  </div>

                  <div class="form-group">
                    <label for="jns_task_id">JENIS TASK</label>
                    <select name="jns_task_id" class="form-control <?php echo form_error('jns_task_id') ? 'is-invalid':'' ?>">
                      <option value=" "></option>
                      <option value="1">TASK BARU BULAN INI</option>
                      <option value="2">TASK CARY OVER</option>
                      <option value="3">TASK DILUAR TIKET</option>
                    </select>
                    <div class="invalid-feedback">
									    <?php echo form_error('jns_task_id') ?>
								    </div>
                  </div>


                  <div class="form-group">
                    <label for="keterangan">KETERANGAN</label>
                    <div class="col-sm-9" width="100%">
                      <textarea class="form-control <?php echo form_error('keterangan') ? 'is-invalid':'' ?>" rows="3" name="keterangan" placeholder="-"></textarea>
                    </div>
                    <div class="invalid-feedback">
									    <?php echo form_error('status_liniear') ?>
								    </div>
                  </div>

                  <input class="btn btn-success" type="submit" name="btn" value="Simpan" />

                </form>
              </div>
              <!-- card body -->
            </div>
            <!-- card-mb-3 -->


          </div>
          <!-- container fluid -->

        </div>
        <!-- content wrapper -->

      </div>
      <!-- wrapper -->

      <?php $this->load->view("admin/_partials/scrolltop.php") ?>
      <?php $this->load->view("admin/_partials/js.php") ?>

    </body>
    </html>
