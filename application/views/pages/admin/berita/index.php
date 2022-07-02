<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Data Berita</h1>
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Tabel Data Berita</h6>
			<a href="<?= base_url('berita/create') ?>" class="btn btn-success">Create</a>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Judul</th>
							<th>Isi berita</th>
							<th>Gambar</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$no=1;
						foreach ($berita as $key => $value) { 
						?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $value->judul ?></td>
							<td><?= $value->isi ?></td>
							<td><img src="<?= base_url("assets/file/berita/".$value->gambar) ?>" height="100px" width="200px" style="object-fit: cover;" alt="" srcset=""></td>
							<td>
								<a href="<?= base_url('berita/edit/'.$value->id_berita) ?>" class="btn btn-warning">Edit</a>
								<a href="<?= base_url('berita/deleted_berita/'.$value->id_berita) ?>" class="btn btn-danger mt-2" onclick="return confirm('anda yakin akan menghapus?');">Hapus</a>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
