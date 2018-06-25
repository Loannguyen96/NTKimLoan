<?php $this->load->view('admin/sanpham/head',$this->data); ?>
<div class="line"></div>
<div class="wrapper">
	<div class="widget">
		<div class="title">
			<h6>Danh sách đặt hàng</h6>
		</div>
		<form class="form" id="form" action="" method="post" enctype="multipart/form-data">
			<fieldset>
				<div class="formRow">
					<label class="formLeft" for="param_name">Mã đặt hàng:<span class="req"></span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="id" id="param_id" _autocheck="true" type="text" value="<?php echo $info->ID; ?>" disabled="disabled" ></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('id')?></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label class="formLeft" for="param_name">Tên khách hàng:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="name" id="param_name" _autocheck="true" type="text" value="<?php echo $info->TenNguoiDat; ?>" disabled="disabled"></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('name')?></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label class="formLeft" for="param_dc">Địa chỉ:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="dc" id="param_dc" _autocheck="true" type="text" value="<?php echo $info->DiaChi; ?>" disabled="disabled"></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('dc')?></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label class="formLeft" for="param_sdt">Số điện thoại:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="sdt" id="param_sdt" _autocheck="true" type="text" value="<?php echo $info->SDT; ?>" disabled="disabled"></span>
						<span name="name_autocheck" class="autocheck"></span>
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label class="formLeft" for="param_mail">Mail/Zalo:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="mailzalo" id="param_mail" _autocheck="true" type="text" value="<?php echo $info->MailZalo; ?>"  disabled="disabled"></span>
						<span name="name_autocheck" class="autocheck"></span>
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label class="formLeft" for="param_hang">Tên sản phẩm mua:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="hang" id="param_hang" _autocheck="true" type="text" value="<?php echo $info->TenHang; ?>" disabled="disabled"></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('hang')?></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label class="formLeft" for="param_ngay">Thời gian cần lấy:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="ngay" id="param_ngay" _autocheck="true" type="date" value="<?php echo $info->ThoiGianCanLay; ?>" disabled="disabled"></span>
						<span name="name_autocheck" class="autocheck"></span>
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label class="formLeft" for="param_sl">Số lượng :<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="sl" id="param_sl" _autocheck="true" type="number" value="<?php echo $info->SoLuong; ?>" disabled="disabled"></span>
						<span name="name_autocheck" class="autocheck"></span>
					</div>
					<div class="clear"></div>
				</div>
				
				<div class="formRow">
					<label class="formLeft" for="param_mota">Mô tả :<span class="req"></span></label>
					<div class="formRight">
						<span class="oneTwo">
							<input name="mota" id="param_mota" _autocheck="true" type="text" value="<?php echo $info->MoTa; ?>" disabled="disabled">

						</span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('mota')?></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label class="formLeft" for="param_trangthai">Trạng thái:<span class="req">*</span></label>
					<div class="formRight">
						<div class="selector" id="uniform-selectReq">
							<select name="tt" id="param_trangthai" value="" class="validate[required]">
								<?php
									if($info->TrangThai=='01'){ ?>
										<option value="01" selected="selected">Đã duyệt</option>
										<option value="02">Đang chờ</option>
								<?php }
									else{ ?>
										<option value="01" >Đã duyệt</option>
										<option value="02" selected="selected">Đang chờ</option>
								<?php }
								?>
	                           
	                            
	                        </select>	
                    	</div>
						
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label class="formLeft" for="param_ngaydt">Ngày đặt hàng:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="ngaydt" id="param_ngaydt" _autocheck="true" type="text" value="<?php echo $info->CreateDt; ?>" disabled="disabled"></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('hang')?></div>
					</div>
					<div class="clear"></div>
				</div>
				
				
				
				
				
				
				<div class="formSubmit">
	           		<input type="submit" name="submit" value="Cập nhật" class="redB">
	           		<input type="reset" value="Hủy bỏ" class="basic">
	           	</div>
			</fieldset>
		</form>
	</div>
</div>