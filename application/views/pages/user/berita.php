<section id="berita" style="margin-top: 100px;">
	<h3 class="h3 text-center mb-5">Berita</h3>
	<div class="container">
		<div class="row wow fadeIn">
			<div class="row" style="width: 100%;">
					<?php foreach ($data->result()  as $key => $value) { ?>
						<div class="card mt-4 col-md-12" style="margin: 0 auto;">
							<img id="img_size" class="card-img-top mt-3" src="<?= base_url('assets/file/berita/'.$value->gambar) ?>" alt="Card image cap">
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
					<?php } ?>
				</div>
				<div class="row mt-4" style="margin: 0 auto;">
					<div class="col">
						<!--Tampilkan pagination-->
						<?php echo $pagination; ?>
					</div>
				</div>
		</div>
	</div>
</section>
