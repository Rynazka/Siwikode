<main class="wisata color-back">
	<h2 class="mr-3"><center><b>Wisata</b></center></h2>
	<table class="table table-striped">
		<thead class="tableHead">
			<tr>
				<th>No</th>
				<th>Image</th>
				<th>Nama</th>
				<th>Deskripsi</th>
				<th>Jenis Wisata</th>
				<th>Kategori Wisata</th>
				<th>Fasilitas</th>
				<th>Kontak</th>
				<th>Alamat</th>
				<th>Latlong</th>
				<th>Email</th>
				<th>URL</th>
				<th>Action</th>
			</tr>
		</thead> 
		<tbody>
		<?php $no=1; foreach($wisata as $row): ?>
			<tr id="<?=$row->id?>">
				<td><?=$no?></td>
				<td><img src="<?=base_url('assets/img/photo_wisata/'.$row->image)?>" alt="" width='100px' height='auto'></td>
				<td><?=$row->nama_wisata?></td>
				<td><details><?=$row->deskripsi?></details></td>
				<td><?=$row->jenis?></td>
				<td><?=$row->nama_kategori?></td>
				<td><details><?=$row->fasilitas?></details></td>
				<td><?=$row->kontak?></td>
				<td><details><?=$row->alamat?></details></td>
				<td><?=$row->latlong?></td>
				<td><?=$row->email?></td>
				<td><?=$row->url?></td>
				<td>
					<a href="<?=base_url('wisata/edit/'.$row->id)?>" class="btn btn-warning">Edit</a>
					<a href="<?=base_url('wisata/delete/'.$row->id)?>" class="btn btn-danger delete">Delete</a>
				</td>
			</tr>
		<?php $no++; endforeach;?>
		</tbody>
	</table>
</main>