<?=form_open($this->uri->uri_string(),array('id'=>'frm_data','name'=>'frm_data','role'=>'form','class'=>'form-horizontal'));?>
<?php if(isset($views)) {?>
<div class="tab-content">
	<div class="tab-pane active">
		<div class="box box-primary">
			<div class="box-body">
				<div class="form-group ">
					<label class="col-sm-2 control-label">No Purchase Request<b class="text-red">*</b></label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="pr_no" name="pr_no" value="<?php echo (isset($data->pr_no) ? $data->pr_no: ""); ?>" placeholder="Automatic" readonly>
					</div>
					<label class="col-sm-2 control-label">Tanggal Purchase Request<b class="text-red">*</b></label>
					<div class="col-sm-4">
						<input type="text" class="form-control tanggal" id="pr_date" name="pr_date" value="<?php echo (isset($data->trans_date) ? $data->pr_date: date("Y-m-d")); ?>" placeholder="Tanggal Purchase Request" required>
					</div>
				</div>
				<div class="form-group ">
					<label for="id_type" class="col-sm-2 control-label"> Inventory Type<b class="text-red">*</b></label>
					<div class="col-sm-4">
						<?php
						echo form_dropdown('id_type',$inventory_type,  (isset($data->id_type)?$data->id_type:''),array('id'=>'id_type','required'=>'required','class'=>'form-control select2'));
						?>
					</div>
					<label class="col-sm-2 control-label">Keterangan</label>
					<div class="col-sm-4">
						<textarea class="form-control" id="pr_info" name="pr_info"><?php echo (isset($data->pr_info) ? $data->pr_info: ""); ?></textarea>
					</div>
				</div>
			</div>
			<div class="box-footer table-responsive">
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
					<th width="5">#</th>
					<th>Nama</th>
					<th>Spesifikasi</th>
					<th>Brand</th>
					<th>Max Stok</th>
					<th>Qty Stok</th>
					<th>Satuan</th>
					<th>Saran Qty Pembelian</th>
					<th>Qty Permintaan</th>
					</tr>
				</thead>
				<tbody id="tbl_detail">
				<?php if(!empty($data_material)){
					$idd=0;
					foreach($data_material AS $record){
						$idd++;?>
					<tr>
						<td><input type="checkbox" name="detail_id[]" id="raw_id_<?=$idd?>" value="<?=$idd;?>" checked>
						<input type="hidden" name="id_material_<?=$idd;?>" id="id_material_<?=$idd;?>" value="<?=$record->id_material;?>">
						</td>
						<td><?= $record->nama ?></td>
						<td><?= $record->spec3 ?></td>
						<td><?= $record->spec2 ?></td>
						<td><?= $record->spec13 ?></td>
						<td><input type="text" class="form-control divide" readonly tabindex="-1" name="material_stock_<?=$idd;?>" id="material_stock_<?=$idd;?>" value="<?=(($record->stock!='')?$record->stock:'0');?>"></td>
						<td><input type="text" class="form-control" readonly tabindex="-1" name="material_unit_<?=$idd;?>" id="material_unit_<?=$idd;?>" value="<?=$record->satuan;?>"></td>
						<td><?php
						echo number_format($record->spec13-$record->stock) ?></td>
						<td><input type="text" class="form-control divide" name="material_qty_<?=$idd;?>" id="material_qty_<?=$idd;?>" value="<?=$record->material_qty;?>"></td>
					</tr>
					<?php }
				}?>
				</tbody>
			</table>
			</div>
		</div>
	</div>
	<a class="btn btn-warning btn-sm" onclick="cancel()"><i class="fa fa-reply">&nbsp;</i>Kembali</a>

</div>
<script src="<?= base_url('assets/js/number-divider.min.js')?>"></script>
<script type="text/javascript">
	$('.divide').divide();
	$(".tab-content :input").attr("disabled", true);
</script>
<?php } else { ?>
<input type="hidden" id="id" name="id" value="<?php echo set_value('id', isset($data->id) ? $data->id : ''); ?>">
<input type="hidden" id="status" name="status" value="<?php echo (isset($data->status) ? $data->status : '0'); ?>">
<div class="tab-content">
	<div class="tab-pane active">
		<div class="box box-primary">
			<div class="box-body">
				<div class="form-group ">
					<label class="col-sm-2 control-label">No Purchase Request<b class="text-red">*</b></label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="pr_no" name="pr_no" value="<?php echo (isset($data->pr_no) ? $data->pr_no: ""); ?>" placeholder="Automatic" readonly>
					</div>
					<label class="col-sm-2 control-label">Tanggal Purchase Request<b class="text-red">*</b></label>
					<div class="col-sm-4">
						<input type="text" class="form-control tanggal" id="pr_date" name="pr_date" value="<?php echo (isset($data->trans_date) ? $data->pr_date: date("Y-m-d")); ?>" placeholder="Tanggal Purchase Request" required>
					</div>
				</div>
				<div class="form-group ">
					<label for="id_type" class="col-sm-2 control-label"> Inventory Type<b class="text-red">*</b></label>
					<div class="col-sm-4">
						<?php
						echo form_dropdown('id_type',$inventory_type,  (isset($data->id_type)?$data->id_type:''),array('id'=>'id_type','required'=>'required','class'=>'form-control select2'));
						?>
					</div>
					<label class="col-sm-2 control-label">Keterangan</label>
					<div class="col-sm-4">
						<textarea class="form-control" id="pr_info" name="pr_info"><?php echo (isset($data->pr_info) ? $data->pr_info: ""); ?></textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<?php
						if(isset($data)){
							if($data->status==0){
								echo '<button type="button" name="Approve" class="btn btn-primary btn-sm" id="approve" onclick="data_approve()"><i class="fa fa-save">&nbsp;</i>Approve</button>';
							}
						}
						?>
						<button type="submit" name="save" class="btn btn-success btn-sm" id="submit"><i class="fa fa-save">&nbsp;</i>Simpan</button>
						<a class="btn btn-warning btn-sm" onclick="location.reload();return false;"><i class="fa fa-reply">&nbsp;</i>Batal</a>
					</div>
				</div>
			</div>
			<div class="box-footer table-responsive">
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
					<th width="5">#</th>
					<th>Nama</th>
					<th>Spesifikasi</th>
					<th>Brand</th>
					<th>Max Stok</th>
					<th>Qty Stok</th>
					<th>Satuan</th>
					<th>Saran Qty Pembelian</th>
					<th>Qty Permintaan
					<div class="pull-right"><a class="btn btn-success btn-xs" href="javascript:void(0)" title="Tambah" onclick="add_material()" id="add-material"><i class="fa fa-plus">&nbsp;</i>Tambah</a></div></th>
					</tr>
				</thead>
				<tbody id="tbl_detail">
				<?php if(!empty($data_material)){
					$idd=0;
					foreach($data_material AS $record){
						$idd++;?>
					<tr>
						<td><input type="checkbox" name="detail_id[]" id="raw_id_<?=$idd?>" value="<?=$idd;?>" checked>
						<input type="hidden" name="id_material_<?=$idd;?>" id="id_material_<?=$idd;?>" value="<?=$record->id_material;?>">
						<td><?= $record->nama ?></td>
						<td><?= $record->spec1 ?></td>
						<td><?= $record->spec3 ?></td>
						<td><?= $record->spec13 ?></td>
						<td><input type="text" class="form-control divide" readonly tabindex="-1" name="material_stock_<?=$idd;?>" id="material_stock_<?=$idd;?>" value="<?=(($record->stock!='')?$record->stock:'0');?>"></td>
						<td><input type="text" class="form-control" readonly tabindex="-1" name="material_unit_<?=$idd;?>" id="material_unit_<?=$idd;?>" value="<?=$record->satuan;?>"></td>
						<td><?php
						echo number_format($record->spec13-$record->stock) ?></td>
						<td><input type="text" class="form-control divide" name="material_qty_<?=$idd;?>" id="material_qty_<?=$idd;?>" value="<?=$record->material_qty;?>"></td>
					</tr>
					<?php }
				}?>
					<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
				</tbody>
			</table>
			</div>
		</div>
	</div>
</div>
<?= form_close() ?>
<script src="<?= base_url('assets/js/number-divider.min.js')?>"></script>
<script type="text/javascript">
	var url_save = siteurl+'purchase_request/save/';
	var url_approve = siteurl+'purchase_request/approve/';
	var url_list_detail = siteurl+'purchase_request/add_material/';
	$(document).ready(function(){
		var status=$("#status").val();
		if(status!='0'){
			$("#submit").addClass("hidden");
			$("#add_material").addClass("hidden");
			$('form input[type="submit"]').prop("disabled", true);
		}
		<?php echo (isset($data) ? '' : '$("#add-material").addClass("hidden");'); ?>;

	});
	$('.divide').divide();
    $('#frm_data').on('submit', function(e){
        e.preventDefault();
		var errors="";
		if($("#id_type").val()=="0") errors="Inventory Type tidak boleh kosong";
		if($("#pr_date").val()=="") errors="Tanggal Transaksi tidak boleh kosong";
		if(errors==""){
			data_save_self();
		}else{
			swal(errors);
			return false;
		}
    });

	$(function () {
		$(".tanggal").datepicker({
			todayHighlight: true,
			format : "yyyy-mm-dd",
			showInputs: true,
			autoclose:true
		});
	});

	function add_material(){
		id=$("#id").val();
		$.ajax({
			url : url_list_detail+id, type : "POST", cache : false,
			success : function(data){
				if(data!=''){
					$("#add-material").addClass("hidden");
					$("#tbl_detail tr:last").after(data);
				}else{
					swal("Data tidak ditemukan");
				}
			}
		});
	}
	function data_approve(){
		swal({
		  title: "Anda Yakin?",
		  text: "Data Akan Disetujui!",
		  type: "info",
		  showCancelButton: true,
		  confirmButtonText: "Ya, setuju!",
		  cancelButtonText: "Tidak!",
		  closeOnConfirm: false,
		  closeOnCancel: true
		},
		function(isConfirm){
		  if (isConfirm) {
			id=$("#id").val();
			$.ajax({
				url: url_approve+id,
				dataType : "json",
				type: 'POST',
				success: function(msg){
					if(msg['save']=='1'){
						swal({
							title: "Sukses!",
							text: "Data Berhasil Di Setujui",
							type: "success",
							timer: 1500,
							showConfirmButton: false
						});
						window.location.reload();
					} else {
						swal({
							title: "Gagal!",
							text: "Data Gagal Di Setujui",
							type: "error",
							timer: 1500,
							showConfirmButton: false
						});
					};
					console.log(msg);
				},
				error: function(msg){
					swal({
						title: "Gagal!",
						text: "Ajax Data Gagal Di Proses",
						type: "error",
						timer: 1500,
						showConfirmButton: false
					});
					console.log(msg);
				}
			});
		  }
		});
	}
</script>
<?php } ?>
