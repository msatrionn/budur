
  <!-- Full Page Intro -->
  <div class="view" style="background-image: url('<?= base_url('assets/file/borobudur.jpg') ?>'); background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center" >
      <!-- Content -->
	  <div class="text-center white-text mx-5 wow fadeIn">
		  <h2 style="color:white;margin-top:30%">Selamat Datang di Website Sistem Informasi Wisata <br>di Area Borobudur</h2>
			<form action="" method="get">
				<div class=""  style="margin-top: 10%;">
					<h3 class="text-center text-white">Apa yang anda cari ?</h3>
					<div class="d-flex justify-content-center align-items-center mt-4">
					<div class="row col-md-8 ">
						<div class="col-md-5">
							<select name="" id="" class="form-control">
								<option value="">ccek</option>
							</select>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control">
						</div>
						<div class="col-md-1">
							<button class="btn btn-danger">Cari</button>
						</div>
					</div>				
				</div>
				</form>
				</div>
      </div>
      <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

  </div>
  <!-- Full Page Intro -->

  <!--Main layout-->
  <main>
    <div class="container">

      <!--Section: Main info-->
      <section class="mt-5 wow fadeIn" id="profil">

      <h2 class="text-center py-4 my-4">Tentang Borobudur</h2>
        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <img src="<?= base_url('assets/file/profil/'.$profil->gambar) ?>" class="img-profile img-fluid z-depth-1-half" alt="">

          </div>
          <!--Grid column-->

          <!--Grid column-->
          	<div class="col-md-6 mb-4 wrapper-about">
				<!-- Main heading -->
				<h3 class="h3 mb-3">Candi Borobudur</h3>
				<p style="text-align:justify;" id="text-desc-about">
					<?= $profil->profil_candi ?>
				</p>

				<hr>
			</div>
			<div class="col-md-2">
				<a href="<?= base_url('home/about') ?>" class="btn btn-primary btn-md">Lihat Lebih
				</a>
			</div>
        </div>

      </section>
      <hr class="my-5">
      <section id="berita">

        <h3 class="h3 text-center mb-5">Berita</h3>

        <!--Grid row-->
        <div class="row wow fadeIn">
					<div class="row" style="width: 100%;">
							<?php foreach ($data->result()  as $key => $value) { ?>
								<div class="col-md-6">
									<div class="card mb-3">
										<img id="img_size" class="card-img-top" src="<?= base_url('assets/file/berita/'.$value->gambar) ?>" alt="Card image cap">
										<div class="card-body">
											<h5 class="card-title"><?= $value->judul ?></h5>
											<p class="card-text"><?= $value->isi ?></p>
											<div class="row">
												<div class="col-md-10">
													<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
												</div>
												<div class="col-md-2">
													<a href="<?= base_url('home/berita_detail/'.$value->id_berita) ?>" class="btn btn-primary">Lihat</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
						<div class="row mt-4" style="margin: 0 auto;">
							<div class="col">
								<!--Tampilkan pagination-->
								<?php echo $pagination; ?>
							</div>
						</div>
        </div>
        <!--/Grid row-->

      </section>

      <hr class="my-5">

      <section id="wisata">
			<div class = "shadow-lg p-3 mb-5 bg-white rounded">
				<h2 class="text-center">
						Wisata
				</h2>
				<div class="row">
					<?php foreach($wisata as $value_wisata){ ?>
						<div class="col-md-4 mt-2">
						<div class="content"> 
								<a href="<?= base_url('home/wisata_detail/'.$value_wisata->id_wisata) ?>">
										<div class="content-overlay"></div> <img class="content-image" id="img-travel" width= "pheap" height="200px" src="<?= base_url('assets/file/wisata/'.$value_wisata->gambar) ?>">
										<div class="content-details fadeIn-bottom">
												<h3 class="content-title"><?= $value_wisata->nama_wisata ?></h3>
												<p class="content-text"><i class="fa fa-map-marker"></i> <?= $value_wisata->lokasi_wisata ?></p>
										</div>
								</a> 
							</div>
					</div>
				<?php } ?>
				</div>
				<a href="<?= base_url('home/wisata') ?>" class="btn btn-success mt-2">Lainnya</a>
      </div>
      </section>
      <hr class="mb-5">

			<section id="wisata">
			<div class = "shadow-lg p-3 mb-5 bg-white rounded">
				<h2 class="text-center">
						Candi
				</h2>
				<div class="row">
					<?php foreach ($candi as $candivalue) { ?>
						<div class="col-md-4 mt-2">
							<div class="content"> 
								<a href="<?= base_url('home/candi_detail/'.$candivalue->id_candi) ?>">
										<div class="content-overlay"></div> <img class="content-image" id="img-travel" width= "pheap" height="200px" src="<?= base_url('assets/file/candi/'.$candivalue->gambar) ?>">
										<div class="content-details fadeIn-bottom">
												<h3 class="content-title"><?= $candivalue->nama_candi ?></h3>
												<p class="content-text"><i class="fa fa-map-marker"></i> <?= $candivalue->alamat ?></p>
										</div>
								</a> 
							</div>
					</div>
					<?php } ?>
				</div>
				<a href="<?= base_url('home/candi') ?>" class="btn btn-success mt-2">Lainnya</a>
      </div>
      </section>
     

    </div>
  </main>
  <!--Main layout-->
	<script src = "https://code.jquery.com/jquery-3.2.1.slim.min.js" 
         integrity = "sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
         crossorigin = "anonymous">
      </script>
      
      <!-- Popper -->
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
         integrity = "sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" 
         crossorigin = "anonymous">
      </script>
      
      <!-- Latest compiled and minified Bootstrap JavaScript -->
      <script src =" https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
         integrity = "sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
         crossorigin = "anonymous">
      </script>
