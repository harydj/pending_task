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
          <?php $this->load->view("admin/_partials/breadcrumb.php") ?>

          <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success" role="alert">
                   <?php echo $this->session->flashdata('success'); ?>
            </div>
          <?php endif; ?>

          <div class="card mb-3">
            <div class="card-header">
              <a href="<?php echo site_url('c_task_monitor/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
            <div class="card-body">
              <form action="<?php base_url('c_task_monitor/edit') ?>" method="post" >
                <input type="hidden" name="id" value="<?php echo $tasklist->task_id ?>"/>

                <div class="form-group">
                  <label for="name">NAMA TASK</label>
                  <input class="form-control <?php echo form_error('task_name') ? 'is-invalid':'' ?>" type="text" name="task_name" placeholder="NAMA TASK" value="<?php echo $tasklist->task_name ?>" />
                  <div class="invalid-feedback">
                    <?php echo form_error('task_name') ?>
                  </div>
                </div>

                <div class="form-group">
                  <label for="name">APLIKASI</label>
                  <input class="form-control <?php echo form_error('aplikasi') ? 'is-invalid':'' ?>" type="text" name="aplikasi" placeholder="APLIKASI" value="<?php echo $tasklist->aplikasi ?>"/>
                  <div class="invalid-feedback">
                    <?php echo form_error('aplikasi') ?>
                  </div>
                </div>

                <div class="form-group">
                  <label for="name">PJ TASK</label>
                  <input class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>" type="text" name="username" placeholder="PJ TASK" value="<?php echo $tasklist->username ?>"/>
                  <div class="invalid-feedback">
                    <?php echo form_error('username') ?>
                  </div>
                </div>

                <div class="form-group">
                  <label for="name">TASK KATEGORI</label>
                  <select name="kategori" class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>" value="<?php echo $tasklist->kategori ?>">
                    <option value="-"></option>
                    <option value="GANGGUAN"></option>
                    <option value="PERMINTAAN"></option>
                  </select>
                  <div class="invalid-feedback">
                    <?php echo form_error('kategori') ?>
                  </div>
                </div>

                <div class="form-group">
                  <label for="mandays">MANDAYS</label>
                  <select name="mandays" class="form-control <?php echo form_error('mandays') ? 'is-invalid':'' ?>" value="<?php echo $tasklist->mandays ?>">
                    <option value="-"></option>
                    <option value="YA"></option>
                    <option value="TIDAK"></option>
                  </select>
                  <div class="invalid-feedback">
                    <?php echo form_error('kategori') ?>
                  </div>
                </div>

                <div class="form-group">
                  <label for="frekuensi">FREKUENSI</label>
                  <input class="form-control <?php echo form_error('frekuensi') ? 'is-invalid':'' ?>" type="number" name="frekuensi" placeholder="ex: 1" value="<?php echo $tasklist->frekuensi ?>"/>
                  <div class="invalid-feedback">
                    <?php echo form_error('frekuensi') ?>
                  </div>
                </div>

                <div class="form-group">
                  <label for="start_date">TANGGAL MULAI</label>
                  <input class="form-control <?php echo form_error('start_date') ? 'is-invalid':'' ?>" type="date" name="start_date" placeholder="ex: 01/01/2019" value="<?php echo $tasklist->start_date ?>"/>
                  <div class="invalid-feedback">
                    <?php echo form_error('start_date') ?>
                  </div>
                </div>

                <div class="form-group">
                  <label for="end_date">TANGGAL TARGET SELESAI</label>
                  <input class="form-control <?php echo form_error('end_date') ? 'is-invalid':'' ?>" type="date" name="end_date" placeholder="ex: 01/01/2019" value="<?php echo $tasklist->end_date ?>" />
                  <div class="invalid-feedback">
                    <?php echo form_error('end_date') ?>
                  </div>
                </div>

                <div class="form-group">
                  <label for="prioritas">PRIORITAS</label>
                  <select name="prioritas" class="form-control <?php echo form_error('prioritas') ? 'is-invalid':'' ?>" value="<?php echo $tasklist->prioritas ?>">
                    <option value="-"></option>
                    <option value="LOW"></option>
                    <option value="MEDIUN"></option>
                    <option value="HIGH"></option>
                  </select>
                  <div class="invalid-feedback">
                    <?php echo form_error('prioritas') ?>
                  </div>
                </div>

                <div class="form-group">
                  <label for="status_sekarang">PROGRESS STATUS SAAT INI</label>
                  <input class="form-control <?php echo form_error('status_sekarang') ? 'is-invalid':'' ?>" type="number" name="status_sekarang" placeholder="ex: 10%" value="<?php echo $tasklist->status_sekarang ?>"/>
                  <div class="invalid-feedback">
                    <?php echo form_error('status_liniear') ?>
                  </div>
                </div>

                <div class="form-group">
                  <label for="status_liniear">STATUS LINIEAR</label>
                  <input class="form-control <?php echo form_error('status_liniear') ? 'is-invalid':'' ?>" type="number" name="status_liniear" placeholder="ex: 10%" value="<?php echo $tasklist->status_liniear ?>"/>
                  <div class="invalid-feedback">
                    <?php echo form_error('status_liniear') ?>
                  </div>
                </div>

                <div class="form-group">
                  <label for="done">TASK SELESAI?</label>
                  <select name="done" class="form-control <?php echo form_error('done') ? 'is-invalid':'' ?>" value="<?php echo $tasklist->done ?>">
                    <option value="-"></option>
                    <option value="YA"></option>
                    <option value="TIDAK"></option>
                  </select>
                  <div class="invalid-feedback">
                    <?php echo form_error('done') ?>
                  </div>
                </div>

                <div class="form-group">
                  <label for="jns_task_id">JENIS TASK</label>
                  <select name="jns_task_id" class="form-control <?php echo form_error('jns_task_id') ? 'is-invalid':'' ?>" value="<?php echo $tasklist->jns_task_id ?>">
                    <option value="-"></option>
                    <option value="BARU BULAN INI"></option>
                    <option value="CARRY OVER"></option>
                    <option value="DILUAR TIKET"></option>
                  </select>
                  <div class="invalid-feedback">
                    <?php echo form_error('jns_task_id') ?>
                  </div>
                </div>


                <div class="form-group">
                  <label for="keterangan">KETERANGAN</label>
                  <div class="col-sm-9">
                    <textarea class="form-control <?php echo form_error('keterangan') ? 'is-invalid':'' ?>" rows="3" name="keterangan" placeholder="-" value="<?php echo $tasklist->keterangan ?>"></textarea>
                  </div>
                  <div class="invalid-feedback">
                    <?php echo form_error('status_liniear') ?>
                  </div>
                </div>

                <input class="btn btn-success" type="submit" name="btn" value="Simpan"/>

              </form>
            </div>
            <!-- card body -->
          </div>
          <!-- card-mb-3 -->


        </div>
        <!-- container fluid -->

        <!-- Sticky footer  -->
        <?php $this->load->view("admin/_partials/footer.php") ?>


      </div>
      <!-- content wrapper -->

    </div>
    <!-- wrapper -->

    <?php $this->load->view("admin/_partials/scrolltop.php") ?>
    <?php $this->load->view("admin/_partials/js.php") ?>

  </body>
  </html>
