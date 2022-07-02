<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Data candi</h1>
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Tabel Data candi</h6>
			<a href="<?= base_url('candi/create') ?>" class="btn btn-success">Create</a>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama candi</th>
							<th>Sejarah</th>
							<th>Alamat</th>
							<th>Gambar</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$no=1;
						foreach ($candi as $key => $value) { 
						?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $value->nama_candi ?></td>
							<td><?= $value->sejarah ?></td>
							<td><?= $value->alamat ?></td>
							<td><img src="<?= base_url("assets/file/candi/".$value->gambar) ?>" height="100px" width="200px" style="object-fit: cover;" alt="" srcset=""></td>
							<td>
								<a href="<?= base_url('candi/edit/'.$value->id_candi) ?>" class="btn btn-warning">Edit</a>
								<a href="<?= base_url('candi/deleted_candi/'.$value->id_candi) ?>" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus?');">Hapus</a>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
