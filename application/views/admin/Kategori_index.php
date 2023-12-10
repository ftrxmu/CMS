<div id="myalert">
	<?php echo $this->session->flashdata('alert','true');?>
</div>
<div class="col-lg-4 col-md-6">
	<div class="mb-3">
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
			Tambah Kategori
		</button>

		<div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true" style="display: none;">
			<div class="modal-dialog modal-md" role="document">
				<form action="<?=base_url('admin/kategori/simpan');?>" method="post">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="modalCenterTitle">Tambah kategori</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Nama kategori</label>
									<input type="text" class="form-control" placeholder="Enter Name" name="nama_kategori" required>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
								Close
							</button>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
<div class="table-responsive text-nowrap">
    <h5 class="card-header">Kategori Konten</h5>
	<table class="table">
		<thead>
			<tr>
				<th>No. </th>
				<th>Nama Kategori Konten</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody class="table-border-bottom-0">
			<?php $no=1;
        foreach($kategori as $a) {?>
			<tr>
				<td><?= $no++;?></td>
				<td><?= $a['nama_kategori'] ;?></td>
				<td>
					<a class="btn btn-danger" onClick="return confirm('Apakah anda yakin ingin hapus data ini?')"
						href="<?=base_url('admin/kategori/delete/'.$a['id_kategori'])?>">
						<i class="menu-icon tf-icons bx bx-trash"></i>
					</a>
					<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?= $a['id_kategori'] ;?>">
					<i class="menu-icon tf-icons bx bx-edit"></i>
					</button>
					<div class="modal fade" id="edit<?= $a['id_kategori'] ;?>" tabindex="-1" aria-hidden="true" style="display: none;">
						<div class="modal-dialog modal-md" role="document">
							<form action="<?=base_url('admin/kategori/update');?>" method="post">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="modalCenterTitle">Update kategori</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<div class="row">
										<input type="hidden" name="id_kategori" value="<?= $a['id_kategori'] ;?>">
											<div class="col mb-3">
												<label class="form-label">Nama kategori</label>
												<input type="text" class="form-control" name="nama_kategori" value="<?= $a['nama_kategori'] ;?>">
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
											Close
										</button>
										<button type="submit" class="btn btn-primary">Simpan</button>
									</div>
							</form>
						</div>
					</div>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>