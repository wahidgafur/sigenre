<?php include 'temp/head.php'; ?>

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Data PIK-R</li>
        </ol>
        <h2>Data PIK-R</h2>
        

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <div class="container">
              <h1><b>Data PIK-R</b></h1>
            </div>

          </div><!-- End blog entries list -->
        </div>

        <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>DATA PIK-R</h6> 
                         
            </div>
            <div class="collapse navbar-collapse">
            <i class="fa fa-plus" aria-hidden="true"></i>
            </div>
            <div class="card-body px-2 pt-1 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No.</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama PIK-R</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Asal Sekolah</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Ketua</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jumlah Anggota</th>
                  
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php
                    include "conn.php";
                      $tampil = mysqli_query ($conn, "select * from pikr");
                      $no = 1;
                      while($hasil = mysqli_fetch_array($tampil)){
                  ?>
                    <tr>
                      <td><h6 class="mb-0 text-sm"><?php echo $no++; ?></td></h6>
                      <td><h6 class="mb-0 text-sm"><?php echo $hasil['nama_pikr']; ?></td></h6>
                      <td><h6 class="mb-0 text-sm"><?php echo $hasil['asal_sekolah']; ?></td></h6>
                      <td><h6 class="mb-0 text-sm"><?php echo $hasil['nama_ketua']; ?></td></h6>
                      <td><h6 class="mb-0 text-sm"><?php echo $hasil['jumlah_anggota']; ?> Peserta</td></h6>
                    </tr>
                  <?php
                      }
                  ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->


  <?php include 'temp/footer.php'; ?>