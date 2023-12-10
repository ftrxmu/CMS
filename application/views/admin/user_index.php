<div id="myalert">
	<?php echo $this->session->flashdata('alert','true');?>
</div>
<div class="col-lg-4 col-md-6">
	<div class="mb-3">
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
			Tambah User
		</button>

		<div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true" style="display: none;">
			<div class="modal-dialog modal-md" role="document">
				<form action="<?=base_url('admin/user/simpan');?>" method="post">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="modalCenterTitle">Tambah user</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Nama</label>
									<input type="text" class="form-control" placeholder="Enter Name" name="nama">
								</div>
							</div>
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Username</label>
									<input type="text" class="form-control" placeholder="Enter Username" name="username">
								</div>
							</div>
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Password</label>
									<input type="password" class="form-control" placeholder="Enter Password" name="password">
								</div>
							</div>
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Level</label>
									<select name="level" class="form-control">
										<option value="Admin">Admin</option>
										<option value="Kontributor">Kontributor</option>
									</select>
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
	<table class="table">
		<thead>
			<tr>
				<th>Username</th>
				<th>Nama</th>
				<th>Level</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody class="table-border-bottom-0">
			<?php 
        foreach($user as $a) {?>
			<tr>
				<td><?= $a['username'] ;?></td>
				<td><?= $a['nama'] ;?></td>
				<td><?= $a['level'] ;?></td>
				<td>
					<a class="btn btn-danger" onClick="return confirm('Apakah anda yakin ingin hapus data ini?')"
						href="<?=base_url('admin/user/delete/'.$a['id_user'])?>">
						<i class="menu-icon tf-icons bx bx-trash"></i>
					</a>
					<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?= $a['id_user'] ;?>">
					<i class="menu-icon tf-icons bx bx-edit"></i>
					</button>
					<div class="modal fade" id="edit<?= $a['id_user'] ;?>" tabindex="-1" aria-hidden="true" style="display: none;">
						<div class="modal-dialog modal-md" role="document">
							<form action="<?=base_url('admin/user/update');?>" method="post">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="modalCenterTitle">Update user</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<div class="row">
										<input type="hidden" name="id_user" value="<?= $a['id_user'] ;?>">
											<div class="col mb-3">
												<label class="form-label">Nama</label>
												<input type="text" class="form-control" name="nama" value="<?= $a['nama'] ;?>">
											</div>
										</div>
										<div class="row">
											<div class="col mb-3">
												<label class="form-label">Username</label>
												<input type="text" class="form-control" name="username" value="<?= $a['username'];?>" readonly>
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