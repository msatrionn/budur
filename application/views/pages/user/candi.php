<div class = "shadow-lg p-3 mb-5 bg-white rounded" style="margin-top: 57px; min-height: 80vh;">
	<h2 class="text-center">
		Candi
	</h2>
	<div class="row">
		<?= $null ?? "" ?>
		<?php
		foreach ($candi as $key => $value) {
		?>
		<div class="col-md-4 mt-2">
			<div class="content"> 
					<a href="<?= base_url('home/candi_detail/'.$value->id_candi) ?>">
						<div class="content-overlay"></div> 
						<img class="content-image" id="img-travel" width= "pheap" height="200px" src="<?= base_url('assets/file/candi/'.$value->gambar) ?>">
						<div class="content-details fadeIn-bottom">
								<h3 class="content-title"><?= $value->nama_candi ?></h3>
								<p class="content-text"><i class="fa fa-map-marker"></i> <?= $value->alamat ?></p>
						</div>
					</a> 
				</div>
		</div>
		<?php } ?>
	
	</div>
</div>
