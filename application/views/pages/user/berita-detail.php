 <div style="text-align:center;margin-top:7%;">
	<h3 class="h3 mb-3"><?= $detail->judul ?></h3>
	<div class="view" style="background-image: url('<?= base_url('assets/file/berita/'.$detail->gambar) ?>'); background-repeat: no-repeat; background-size: cover;height:300px;background-position-y: center;width:70%;margin:0 auto">
		<div class="mask rgba-black-light d-flex justify-content-center align-items-center" >
		</div>
	</div>
 </div>
  <main>
    <div class="container" style="min-height:21vh">
      <section class="mt-5 wow fadeIn" id="profil">
        <p style="text-align:justify;margin-bottom: 50px;"><?= $detail->isi?>
			</p>
      </section>
    </div>
  </main>
