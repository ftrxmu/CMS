<div id="myalert">
	<?php echo $this->session->flashdata('alert','true');?>
</div>
<div class="table-responsive text-nowrap">
	<h5 class="card-header">Saran</h5>
	<table class="table">
		<thead>
			<tr>
				<th>No. </th>
				<th>isi saran</th>
				<th>Tanggal</th>
				<th>Kreator</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody class="table-border-bottom-0">
			<?php $no=1;
        foreach($saran as $a) {?>
			<tr>
				<td><?= $no++;?></td>
				<td><?= $a['isi_saran'] ;?></td>
				<td><?= $a['tanggal'] ;?></td>
				<td><?= $a['nama'] ;?></td>
				<td>
					<a class="btn btn-danger" onClick="return confirm('Apakah anda yakin ingin hapus data ini?')"
						href="<?=base_url('admin/feedback/delete/'.$a['id_saran'])?>">
						<span class="tf-icons bx bx-trash"></span>
					</a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>