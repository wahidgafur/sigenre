<?php include 'temp/head.php'; ?>

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Duta GenRe</li>
          <li>Pemenang Duta GenRe</li>
        </ol>
        <h2>Pemenang Duta Genre</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <div class="portfolio-description">
              <h1><b>Pemenang Duta Genre</b></h1>
            </div>

          </div><!-- End blog entries list -->
        </div>

        <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Pemenang Duta Genre</h6> 
                         
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
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Pemenang Pria</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Pemenang Wanita</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tahun</th>
                  
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php
                    include "conn.php";
                      $tampil = mysqli_query ($conn, "select * from genre_peme");
                      $no = 1;
                      while($hasil = mysqli_fetch_array($tampil)){
                  ?>
                    <tr>
                      <td><h6 class="mb-0 text-sm"><?php echo $no++; ?></td></h6>
                      <td><h6 class="mb-0 text-sm"><?php echo $hasil['np_putra']; ?></td></h6>
                      <td><h6 class="mb-0 text-sm"><?php echo $hasil['np_wanita']; ?></td></h6>
                      <td><h6 class="mb-0 text-sm"><?php echo $hasil['tahun']; ?></td></h6>
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