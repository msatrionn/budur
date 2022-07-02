<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Tambah Berita</h1>
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Tambah Berita</h6>
		</div>
		<div class="card-body">
		<form action="<?= base_url('berita/simpan') ?>" method="post" enctype="multipart/form-data">
			<div class="form-group col-md-12">
				<label for="">Judul</label>
				<input type="text" class="form-control" name="judul" id="" required>
			</div>
			<div class="form-group col-md-12">
				<label for="alamat">Isi Berita</label>
				<textarea name="isi" id="" class="form-control" cols="30" rows="10"></textarea>
			</div>
			<div class="form-group col-md-4">
				<label for="">Gambar</label>
				<input type="file" class="form-control" name="gambar" id="" required>
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
