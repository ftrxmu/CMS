<div id="myalert">
	<?php echo $this->session->flashdata('alert','true');?>
</div>
<div class="col-lg-4 col-md-6">
	<div class="mb-3">
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
			Tambah Konten
		</button>

		<div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true" style="display: none;">
			<div class="modal-dialog modal-lg" role="document">
				<form action="<?=base_url('admin/konten/simpan');?>" method="post" enctype="multipart/form-data">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="modalCenterTitle">Tambah Konten</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Judul</label>
									<input type="text" class="form-control" placeholder="Judul" name="judul" required>
								</div>
							</div>
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Kategori</label>
									<select name="id_kategori" class="form-control">
										<?php foreach($kategori as $a) {?>
										<option value="<?= $a['id_kategori'] ?>"><?= $a['nama_kategori'] ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Keterangan</label>
									<textarea name="keterangan" class="form-control"></textarea>
								</div>
							</div>
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Foto</label>
									<input type="file" accept="image/png, image/jpeg, image/jpg" name="foto"
										class="form-control">
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
	<h5 class="card-header">Konten</h5>
	<table class="table">
		<thead>
			<tr>
				<th>No. </th>
				<th>Judul</th>
				<th>Kategori Konten</th>
				<th>Tanggal</th>
				<th>Kreator</th>
				<th>Foto</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody class="table-border-bottom-0">
			<?php $no=1;
        foreach($konten as $a) {?>
			<tr>
				<td><?= $no++;?></td>
				<td><?= $a['judul'] ;?></td>
				<td><?= $a['nama_kategori'] ;?></td>
				<td><?= $a['tanggal'] ;?></td>
					<td><?= $a['nama'] ;?></td>
				<td>
					<a href="<?= base_url('assets/upload/konten/'.$a['foto'])?>" target="_blank">
						<span class="tf-icons bx bx-search-alt-2"></span> Lihat Foto
					</a>
				</td>
				<td>
					<a class="btn btn-danger" onClick="return confirm('Apakah anda yakin ingin hapus data ini?')"
						href="<?=base_url('admin/konten/delete/'.$a['foto'])?>">
						<span class="tf-icons bx bx-trash"></span>
					</a>
					<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#konten<?= $no;?>">
						<span class="tf-icons bx bx-edit"></span>
					</button>

					<div class="modal fade" id="konten<?= $no;?>" tabindex="-1" aria-hidden="true" style="display: none;">
						<div class="modal-dialog modal-lg" role="document">
							<form action="<?=base_url('admin/konten/update');?>" method="post"
								enctype="multipart/form-data">
								<input type="hidden" name="nama_foto" value="<?= $a['foto'] ;?>">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="modalCenterTitle"><?= $a['judul'] ;?></h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal"
											aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<div class="row">
											<div class="col mb-3">
												<label class="form-label">Judul</label>
												<input type="text" class="form-control" value="<?= $a['judul'] ;?>" name="judul"
													required>
											</div>
										</div>
										<div class="row">
											<div class="col mb-3">
												<label class="form-label">Kategori</label>
												<select name="id_kategori" class="form-control">
													<?php foreach($kategori as $b) {?>
													<option 
													<?php if($b['id_kategori']==$a['id_kategori']){echo "selected";} ?>
													value="<?= $b['id_kategori'] ?>"><?= $b['nama_kategori'] ?>
													</option>
													<?php } ?>
												</select>
											</div>
										</div>
										<div class="row">
											<div class="col mb-3">
												<label class="form-label">Keterangan</label>
												<textarea name="keterangan" class="form-control"><?= $a['keterangan'] ;?></textarea>
											</div>
										</div>
										<div class="row">
											<div class="col mb-3">
												<label class="form-label">Foto</label>
												<input type="file" accept="image/png, image/jpeg, image/jpg" name="foto"
													class="form-control">
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