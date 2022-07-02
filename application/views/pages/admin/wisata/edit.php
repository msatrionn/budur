<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Edit wisata</h1>
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Edit wisata</h6>
		</div>
		<div class="card-body">
		<form action="<?= base_url('wisata/update') ?>" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id_wisata" value="<?= $post->id_wisata ?>">
			<div class="form-group col-md-12">
				<label for="">Nama Wisata</label>
				<input type="text" class="form-control" name="nama_wisata" id="" required value="<?= $post->nama_wisata ?>">
			</div>
			<div class="form-group col-md-12">
				<label for="">Deskripsi wisata</label>
				<textarea name="deskripsi_wisata" id="" class="form-control" cols="30" rows="10" ><?= $post->deskripsi_wisata ?></textarea>
			</div>
			<div class="form-group col-md-12">
				<label for="">Lokasi Wisata</label>
				<input type="text" class="form-control" name="lokasi_wisata" id="" required value="<?= $post->lokasi_wisata ?>">
			</div>
			<div class="form-group col-md-4">
				<label for="">Gambar</label>
				<img src="<?= base_url('assets/file/wisata/'.$post->gambar) ?>" alt="" width="300px">
				<input type="file" class="form-control" name="gambar" id="">
			</div>
			<div class="form-group col-md-2">
				<button type="submit" class="btn btn-success">Simpan</button>
			</div>
		</form>
		</div>
	</div>
</div>
<script src="<?php echo base_url('assets/tinymce/js/tinymce/tinymce.min.js');?>"></script>
<script>tinymce.init({ selector:'textarea' });</script>    
