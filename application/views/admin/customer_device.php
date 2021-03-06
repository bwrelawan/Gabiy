<div class="main-panel">
	<div class="main-content">
		<div class="content-wrapper">
			<section id="scroll-dynamic">
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<span class="col-md-6 col-sm-12 pull-left mb-2" style="font-size: 25px;text-align: left;">Table Customer Device</span>
								<div class="pull-right">
									<button type="button" class="mr-1 mb-1 btn btn-raised btn-outline-success btn-min-width" data-toggle="modal" data-target="#addDeviceModal">
										<i class="ft-user-plus"></i> Add Device
									</button>
								</div>
							</div>
							<div class="card-body collapse show">
								<div class="card-block card-dashboard">
									<table class="table table-striped table-bordered dynamic-height">
										<thead>
											<tr>
												<th width="2%">No</th>
												<!-- <th>ID Customer Device</th>
													<th>Device ID</th> -->
													<th>Customer ID</th>
													<th width="15%">Nama Device</th>
													<th width="15%">Device Alias</th>
													<th width="2%">PIN</th>
													<th width="15%">Keyword</th>
													<th width="10%">kategori</th>
													<th width="20%">Action</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$no = 1;
												foreach ($device->result_array() as $u): 
													$id             =$u['id'];
													$customer_id  	=$u['customer_id'];
													$nama_device  	=$u['nama_device'];
													$device_alias 	=$u['device_alias'];
													$pin            =$u['pin'];
													$description  	=$u['description'];
													$keyword        =$u['keyword'];
													$kategori       =$u['kategori'];
													?>
													<tr>
														<td>
															<?php echo $no++; ?>
														</td>
													<!-- <td>
														<?php echo $id; ?>
													</td> -->
													<td>
														<?php echo $customer_id; ?>
													</td>
													<td>
														<?php echo $nama_device; ?>
													</td>
													<td>
														<?php echo $device_alias; ?>
													</td>
													<td>
														<?php echo $pin; ?>
													</td>
													<td>
														<?php echo $keyword; ?>
													</td>
													<td>
														<?php echo $kategori; ?>
													</td>
													<td>
														<!-- tombol edit device-->
														<button type="button" id="editDevice" class="btn mr-1 mb-1 btn-success btn-sm" data-toggle="modal" data-target="#modal_edit<?php echo $id;?>">
															<i class="ft-edit-2"></i> Edit
														</button>
														<!-- tombol delete device -->
														<button type="button" id="deleteDevice" class="btn mr-1 mb-1 btn-danger btn-sm" data-toggle="modal" data-target="#modal_hapus<?php echo $id;?>">
															<i class="ft-x"></i> Delete
														</button>
														<!-- tombol detail device -->
														<button type="button" id="detailDevice" data-toggle="modal" data-target="#detailDeviceModal" class="btn mr-1 mb-1 btn-info btn-sm">
															<i class="icon-info"></i> Detail
														</button>
													</td>
												</tr>
											<?php endforeach;?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--Table customer device -->
		</div>
	</div>
	<!-- </div> -->
</div>
<footer class="footer footer-static footer-light">
	<p class="clearfix text-muted text-sm-center px-2"><span>Copyright  &copy; <?php echo date('Y')?> <a href="https://sdtech.co.id/" target="_blank" class="text-bold-800 primary darken-2">PT Sinergi Digital Teknologi </a>, All rights reserved. </span></p>
</footer>
<!-- modal edit customer -->
<?php
foreach ($device->result_array() as $u): 
	$id             =$u['id'];
	$customer_id  	=$u['customer_id'];
	$nama_device  	=$u['nama_device'];
	$device_alias 	=$u['device_alias'];
	$pin            =$u['pin'];
	$description  	=$u['description'];
	$keyword        =$u['keyword'];
	$kategori       =$u['kategori'];
	?>
	<div class="modal fade text-left" id="modal_edit<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title">Edit Customer Device</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<!-- form modal edit customer-->
				<?php echo form_open('admin/edit_data_device',array('class'=>'form-horizontal','method'=>'post')); ?>
				<div class="modal-body">
					<div class="row">
						<div class="col-4">
							<div class="form-group">
								<label>Id</label>
								<input name="id" value="<?php echo $id;?>" class="form-control" type="text" placeholder="Id" readonly>
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label>Customer Id</label>
								<input name="customer_id" value="<?php echo $customer_id;?>" class="form-control" type="text" placeholder="Customer Id" readonly>
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label>Pin</label>
								<input name="pin" value="<?php echo $pin;?>" class="form-control" type="text" placeholder="Pin" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<div class="form-group">
								<label>Nama Device</label>
								<input name="nama_device" value="<?php echo $nama_device;?>" class="form-control" type="text" placeholder="Nama Device" required>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label>Device Alias</label>
								<input name="device_alias" value="<?php echo $device_alias;?>" class="form-control" type="text" placeholder="Device Alias" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<div class="form-group">
								<label>Keyword</label>
								<input name="keyword" value="<?php echo $keyword;?>" class="form-control" type="text" placeholder="Keyword" required>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label>Kategori</label>
								<input name="kategori" value="<?php echo $kategori;?>" class="form-control" type="text" placeholder="Kategori" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<label>Deskripsi</label>
								<input name="description" value="<?php echo $description;?>" class="form-control" type="text" placeholder="Deskripsi" required>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="Close">
					<input type="submit" class="btn btn-outline-primary btn-lg" value="Edit">
				</div>
				<?php echo form_close() ?>
			</div>
		</div>
	</div>
<?php endforeach;?>
<!-- akhir modal edit customer -->
<!-- ========== modal add new customer ================-->
<div class="modal fade text-left" id="addDeviceModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content border-success" style="border-radius: 8px;">
			<div class="modal-header bg-success">
				<h3 class="modal-title white">Add Customer Device</h3>
				<button type="button" class="close white" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<!-- form modal add customer-->
			<?php echo form_open('admin/tambah_data_device',array('class'=>'form-horizontal','method'=>'post')); ?>
			<div class="modal-body">
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label>Customer Id</label>
							<!-- id dari cutomer device -->
							<input name="customer_id" class="form-control" type="text" placeholder="Customer Id" required>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label>Pin</label>
							<input name="pin" class="form-control" type="text" placeholder="Pin" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label>Nama Device</label>
							<input name="nama_device" class="form-control" type="text" placeholder="Nama Device" required>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label>Device Alias</label>
							<input name="device_alias" class="form-control" type="text" placeholder="Device Alias" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<label>Keyword</label>
						<div class="form-group">
							<input type="text" value="" name="taging" data-role="tagsinput"/>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label>Kategori</label>
							<input name="kategori" class="form-control" type="text" placeholder="Kategori" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="form-group">
							<label>Deskripsi</label>
							<textarea name="description" rows="5" class="form-control" placeholder="Deskripsi"></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="Close">
				<input type="submit" class="btn btn-outline-success btn-lg" value="Add">
			</div>
			<?php echo form_close() ?>
		</div>
	</div>
</div>
<!--=========== akhir modal add customer ============-->
<!-- modal detail customer -->
<div class="modal fade text-left" id="detailCustomerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title">Detail Device Customer</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<!-- form modal detail customer-->
			<div class="col-xl-12 col-sm-12 col-lg-12">
				<div class="justified-tabs">
					<ul class="nav nav-tabs nav-justified">
						<li class="nav-item">
							<a class="nav-link" id="home-tab3" data-toggle="tab" href="#ac" aria-controls="ac" aria-expanded="true">AC</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" id="profile-tab3" data-toggle="tab" href="#tv" aria-controls="tv" aria-expanded="false">TV</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="about-tab3" data-toggle="tab" href="#lamp" aria-controls="lamp" aria-expanded="false">Lamp</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="about-tab3" data-toggle="tab" href="#lockdoor" aria-controls="lockdoor" aria-expanded="false">Lamp</a>
						</li>
					</ul>
					<div class="tab-content px-1 pt-1">
						<div role="tabpanel" class="tab-pane" id="ac" aria-labelledby="home-tab3" aria-expanded="true">
							<p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes marzipan carrot cake. Sesame snaps lemon drops candy marzipan donut brownie tootsie roll. Icing croissant bonbon biscuit gummi bears.</p>
						</div>
						<div class="tab-pane active show" id="tv" role="tabpanel" aria-labelledby="profile-tab3" aria-expanded="false">
							<p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish candy cake muffin croissant tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll liquorice icing cupcake.</p>
						</div>
						<div class="tab-pane" id="lamp" role="tabpanel" aria-labelledby="about-tab3" aria-expanded="false">
							<p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice cheesecake cookie chupa chups marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream powder tootsie roll cake.</p>
						</div>
						<div class="tab-pane" id="lockdoor" role="tabpanel" aria-labelledby="about-tab3" aria-expanded="false">
							<p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice cheesecake cookie chupa chups marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream powder tootsie roll cake.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="Close">
				<input type="submit" class="btn btn-outline-primary btn-lg" value="Edit">
			</div>
		</div>
	</div>
</div>
<!-- akhir modal detail customer -->
<?php
foreach ($device->result_array() as $u): 
	$id               =$u['id'];
	$customer_id  =$u['customer_id'];
	$device_alias =$u['device_alias'];
	$pin            =$u['pin'];
	$description  =$u['description'];
	$keyword        =$u['keyword'];
	?>
	<!-- ============ MODAL HAPUS CUSTOMER =============== -->
	<div class="modal fade" id="modal_hapus<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 class="modal-title" id="myModalLabel">Hapus Customer</h3>
				</div>
				<?php echo form_open('admin/hapus_data_device',array('class'=>'form-horizontal','method'=>'post')); ?>
				<div class="modal-body">
					<p>Anda yakin mau menghapus <b><?php echo $device_alias;?></b></p>
				</div>
				<div class="modal-footer">
					<input type="hidden" name="id" value="<?php echo $id;?>">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
					<button id="deleteCustomer" class="btn btn-danger">Hapus</button>
				</div>
				<?php echo form_close() ?>
			</div>
		</div>
	</div>
<?php endforeach;?>
<!--END MODAL HAPUS CUSTOMER-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
<script src="<?php echo base_url('assets/js/bootstrap-tagsinput.min.js')?>"></script>
<script>
	$(function() {
		$('input, select').on('change', function(event) {
			var $element = $(event.target),
			$container = $element.closest('.example');

			if (!$element.data('tagsinput'))
				return;

			var val = $element.val();
			if (val === null)
				val = "null";
			$('code', $('pre.val', $container)).html( ($.isArray(val) ? JSON.stringify(val) : "\"" + val.replace('"', '\\"') + "\"") );
			$('code', $('pre.items', $container)).html(JSON.stringify($element.tagsinput('items')));
		}).trigger('change');
	});
</script>
<script>
  $(document).ready(function() {
      $('#example').DataTable();
  } );
</script>