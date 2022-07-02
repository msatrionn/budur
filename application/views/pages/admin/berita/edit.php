<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Edit Berita</h1>
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Edit Berita</h6>
		</div>
		<div class="card-body">
		<form action="<?= base_url('berita/update') ?>" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id_berita" value="<?= $post->id_berita ?>" required>
			<div class="form-group col-md-12">
				<label for="">Judul</label>
				<input type="text" class="form-control" name="judul" id="" value="<?= $post->judul ?>" required>
			</div>
			<div class="form-group col-md-12">
				<label for="alamat">Isi Berita</label>
				<textarea name="isi" id="" class="form-control" cols="30" rows="10"><?= $post->isi ?></textarea>
			</div>
			<div class="form-group col-md-4">
				<label for="">Gambar</label>
				<img src="<?= base_url('assets/file/berita/'.$post->gambar) ?>" alt="" width="300px">
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
