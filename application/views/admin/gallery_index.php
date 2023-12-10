<div id="myalert">
	<?php echo $this->session->flashdata('alert','true');?>
</div>
<div class="col-xl-12">
	<div class="card">
		<form action="<?=base_url('admin/gallery/simpan');?>" method="post" enctype="multipart/form-data">
			<h5 class="card-header">File input</h5>
			<div class="card-body">
				<div class="col mb-3">
					<label class="form-label">Judul</label>
					<input type="text" class="form-control" placeholder="Judul Foto" name="judul" required>
				</div>
				<div class="mb-3">
					<label for="formFile" class="form-label">Foto terserah</label>
					<input class="form-control" type="file" name="foto" required>
				</div>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
		</form>
	</div>
</div>
<?php foreach ($gallery as $a) {?>
<div class="col-md-6 col-lg-4 mb-3 mt-4">
	<div class="card h-100">
		<img class="card-img-top" src="<?= base_url('assets/upload/gallery/'.$a['foto'])?>" alt="Card image cap">
		<div class="card-body">
			<h5 class="card-title"><?= $a['judul'] ;?></h5>
			<a class="btn btn-danger" onClick="return confirm('Apakah anda yakin ingin hapus data ini?')"
						href="<?=base_url('admin/gallery/delete/'.$a['foto'])?>">
						<span class="tf-icons bx bx-trash"></span>
			</a>
		</div>
	</div>
</div>
<?php }?>