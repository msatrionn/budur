<div class = "shadow-lg p-3 mb-5 bg-white rounded" style="margin-top: 57px; min-height: 80vh;">
	<h2 class="text-center">
		Wisata
	</h2>
	<div class="row">
		<?php
		foreach ($wisata as $key => $value) {
		?>
		<div class="col-md-4 mt-2">
			<div class="content"> 
					<a href="<?= base_url('home/wisata_detail/'.$value->id_wisata) ?>">
							<div class="content-overlay"></div> <img class="content-image" id="img-travel" width= "pheap" height="200px" src="<?= base_url('assets/file/wisata/'.$value->gambar) ?>">
							<div class="content-details fadeIn-bottom">
									<h3 class="content-title"><?= $value->nama_wisata ?></h3>
									<p class="content-text"><i class="fa fa-map-marker"></i> <?= $value->lokasi_wisata ?></p>
							</div>
					</a> 
				</div>
		</div>
		<?php } ?>
	
	</div>
</div>
