 <div class="row">
 	<div class="col-12">
 		<div class="card m-b-30">
 			<div class="card-body">
 				<a href="<?= base_url('add-jabatan'); ?>"><button class="btn btn-primary btn-block mb-2">
 						<i class="fa fa-plus-circle"></i> Tambah Data
 					</button>
 				</a>
 				<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
 					<thead>
 						<tr>
 							<th>No</th>
 							<th>Nama Jabatan</th>
 							<th>Aksi</th>
 						</tr>
 					</thead>


 					<tbody>
 						<?php $no = 1;
							foreach ($data as $jabatan) { ?>
 							<tr>
 								<td><?= $no++ ?></td>
 								<td><?= ucfirst($jabatan->jabatan_nama) ?></td>
 								<td>
 									<a href="<?= base_url('karyawan/editjabatan/' . $jabatan->jabatan_id) ?>" class="btn btn-sm btn-primary btn-sm"><span class="fa fa-edit"></span></a>
 									<a onclick="return confirm('Apakah anda yakin ingin menghapus data jabatan ini?')" href="<?= base_url('karyawan/deletejabatan/' . $jabatan->jabatan_id) ?>" class="btn btn-sm btn-danger btn-sm"><span class="fa fa-trash"></span></a>
 								</td>
 							</tr>
 						<?php } ?>
 					</tbody>
 				</table>

 			</div>
 		</div>
 	</div> <!-- end col -->
 </div> <!-- end row -->