<?php $this->load->view('admin/sanpham/head',$this->data); ?>
<div class="line"></div>
<div class="wrapper">
	<div class="widget">
		<div class="title">
			<h6>Cập nhật sản phẩm</h6>
		</div>
		<form class="form" id="form" action="" method="post" enctype="multipart/form-data">
			<fieldset>
				<div class="formRow">
					<label class="formLeft" for="param_name">Mã sản phẩm:<span class="req"></span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="id" id="param_id" _autocheck="true" type="text" value="<?php echo $info->ID; ?>" disabled="disabled" ></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('id')?></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label class="formLeft" for="param_name">Tên sản phẩm:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="name" id="param_name" _autocheck="true" type="text" value="<?php echo $info->Ten; ?>" ></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('name')?></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label class="formLeft" for="param_loai">Loại sản phẩm:<span class="req">*</span></label>
					<div class="formRight">
						<div class="selector" id="uniform-selectReq">
							<select name="loai" id="loai" value="" class="validate[required]">
								<?php
									if($info->Loai=='01'){ ?>
										<option value="01" selected="selected">Xe nâng</option>
										<option value="02">Phụ tùng</option>
								<?php }
									else{ ?>
										<option value="01" >Xe nâng</option>
										<option value="02" selected="selected">Phụ tùng</option>
								<?php }
								?>
	                           
	                            
	                        </select>	
                    	</div>
						<div name="name_error" class="clear error"><?php echo form_error('loai'); ?></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label class="formLeft" for="param_hieu">Hiệu sản phẩm:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="hieu" id="param_hieu" _autocheck="true" type="text" value="<?php echo $info2->Hieu; ?>" ></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('hieu')?></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label class="formLeft" for="param_doi">Đời sản phẩm:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="doi" id="param_doi" _autocheck="true" type="text" value="<?php echo $info2->Doi; ?>" ></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('doi')?></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label class="formLeft" for="param_hang">Hãng sản phẩm:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="hang" id="param_hang" _autocheck="true" type="text" value="<?php echo $info2->Hang; ?>" ></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('hang')?></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label class="formLeft" for="param_mota">Mô tả sản phẩm:<span class="req"></span></label>
					<div class="formRight">
						<span class="oneTwo">
							<input name="mota" id="param_name" _autocheck="true" type="text" value="<?php echo $info2->MoTa; ?>" >

						</span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('mota')?></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label class="formLeft" for="param_tinhtrang">Tình trạng sản phẩm:<span class="req">*</span></label>
					<div class="formRight">
						<div class="selector" id="uniform-selectReq">
							<select name="tinhtrang" id="tinhtrang" class="validate[required]">
	                            <?php foreach ($tt as $row) { ?>
										<option value="<?php echo ($row->Name); ?>" <?php if($info2->TinhTrang==$row->Name){echo 'selected="selected"';} ?> ><?php echo ($row->Value); ?></option>
								<?php } ?>
	                        </select>
                    	</div>
						<div name="name_error" class="clear error"><?php echo form_error('tinhtrang')?></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label class="formLeft" for="param_phanloai">Phân loại sản phẩm:<span class="req">*</span></label>
					<div class="formRight">
						<div class="selector" id="uniform-selectReq">
							<select name="phanloai" id="phanloai" class="validate[required]">
						<?php foreach ($pl as $row) { ?>
										<option value="<?php echo ($row->Name); ?>" <?php if($info2->PhanLoai==$row->Name){echo 'selected="selected"';} ?>><?php echo ($row->Value); ?></option>
						<?php } ?>
	                        </select>
                    	</div>
						<div name="name_error" class="clear error"><?php echo form_error('phanloai')?></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label class="formLeft" for="param_img1">Hình 1:<span class="req">*</span></label>
					<div class="formRight">
						<div class="left">
							<input type="file"  id="param_img1" name="img1" value=""   >
							<?php
								if($info2->Image1!=''){ ?>
									<img src="<?php echo base_url('upload/sanpham/'.$info2->Image1) ?>" style="width: 70px; height: 70px;">
							<?php } ?>
						</div>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('img1')?></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label class="formLeft" for="param_img2">Hình 2:<span class="req"></span></label>
					<div class="formRight">
						<div class="left">
							<input type="file"  id="param_img2" name="img2" value=""   >
							<?php
								if($info2->Image2!=''){ ?>
									<img src="<?php echo base_url('upload/sanpham/'.$info2->Image2) ?>" style="width: 70px; height: 70px;">
							<?php } ?>
						</div>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('img2')?></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label class="formLeft" for="param_img3">Hình 3:<span class="req"></span></label>
					<div class="formRight">
						<div class="left">
							<input type="file"  id="param_img3" name="img3" value=""   >
							<?php
								if($info2->Image3!=''){ ?>
									<img src="<?php echo base_url('upload/sanpham/'.$info2->Image3) ?>" style="width: 70px; height: 70px;">
							<?php } ?>
						</div>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('img3')?></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label class="formLeft" for="param_img4">Hình 4:<span class="req"></span></label>
					<div class="formRight">
						<div class="left">
							<input type="file"  id="param_img4" name="img4" value=""   >
							<?php
								if($info2->Image4!=''){ ?>
									<img src="<?php echo base_url('upload/sanpham/'.$info2->Image4) ?>" style="width: 70px; height: 70px;">
							<?php } ?>
						</div>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('img4')?></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label class="formLeft" for="param_img5">Hình 5:<span class="req"></span></label>
					<div class="formRight">
						<div class="left">
							<input type="file"  id="param_img5" name="img5"  >
							<?php
								if($info2->Image5!=''){ ?>
									<img src="<?php echo base_url('upload/sanpham/'.$info2->Image5) ?>" style="width: 70px; height: 70px;">
							<?php } ?>
							
						</div>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('img5')?></div>
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