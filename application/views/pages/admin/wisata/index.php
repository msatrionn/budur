<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Data wisata</h1>
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Tabel Data wisata</h6>
			<a href="<?= base_url('wisata/create') ?>" class="btn btn-success">Create</a>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Wisata</th>
							<th>Deskripsi</th>
							<th>Lokasi</th>
							<th>Gambar</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$no=1;
						foreach ($wisata as $key => $value) { 
						?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $value->nama_wisata ?></td>
							<td><?= $value->deskripsi_wisata ?></td>
							<td><?= $value->lokasi_wisata ?></td>
							<td><img src="<?= base_url("assets/file/wisata/".$value->gambar) ?>" height="100px" width="200px" style="object-fit: cover;" alt="" srcset=""></td>
							<td>
								<a href="<?= base_url('wisata/edit/'.$value->id_wisata) ?>" class="btn btn-warning">Edit</a>
								<a href="<?= base_url('wisata/deleted_wisata/'.$value->id_wisata) ?>" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus?');">Hapus</a>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
