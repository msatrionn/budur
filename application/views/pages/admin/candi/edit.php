<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Edit candi</h1>
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Edit candi</h6>
		</div>
		<div class="card-body">
		<form action="<?= base_url('candi/update') ?>" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id_candi" value="<?= $post->id_candi ?>">
			<div class="form-group col-md-12">
				<label for="">Nama candi</label>
				<input type="text" class="form-control" name="nama_candi" id="" required value="<?= $post->nama_candi ?>">
			</div>
			<div class="form-group col-md-12">
				<label for="">Sejarah</label>
				<textarea name="sejarah" id="" class="form-control" cols="30" rows="10" ><?= $post->sejarah ?></textarea>
			</div>
			<div class="form-group col-md-12">
				<label for="">Alamat</label>
				<input type="text" class="form-control" name="alamat" id="" required value="<?= $post->alamat ?>">
			</div>
			<div class="form-group col-md-4">
				<label for="">Gambar</label>
				<img src="<?= base_url('assets/file/candi/'.$post->gambar) ?>" alt="" width="300px">
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
