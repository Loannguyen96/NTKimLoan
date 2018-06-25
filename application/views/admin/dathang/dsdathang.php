<!-- load head -->
<?php $this->load->view('admin/sanpham/head',$this->data); ?>
<div class="line"></div>

<div class="wrapper" id="main_product">
	<?php $this->load->view('admin/message', $this->data); ?>
	<div class="widget">
		<div class="title">
			<h6>Danh sách đặt hàng</h6>
		 	<div class="num f12">Số lượng: <b><?php echo $total; ?></b></div>
		</div>
		
		<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable" id="checkAll">
			<thead class="filter">
				<tr>
					<td colspan="6">
						<form class="list_filter form" action="" method="get">
							<table cellpadding="0" cellspacing="0" width="100%">
								<tbody>					
								<tr>
									<td class="label" style="width:100px;">
										<label for="filter_id">Tên KH: </label>
									</td>
									<td class="item" style="width:155px;" >
										<input name="name" value="<?php echo $this->input->get('name'); ?>" id="filter_iname" type="text" style="width:155px;" />
									</td>
									<td class="label" style="width:100px;">
										<label for="filter_id">SDT:</label>
									</td>
									<td class="item" style="width:155px;" >
										<input name="sdt" value="<?php echo $this->input->get('sdt'); ?>" id="filter_iname" type="text" style="width:155px;" />
									</td>
									<td class="label" style="width:100px;">
										<label for="filter_id">Trạng thái:</label>
									</td>
									<td class="item" style="width:155px;" >
										<input name="tt" value="<?php echo $this->input->get('tt'); ?>" id="filter_iname" type="text" style="width:155px;" />
									</td>		
									<td style='width:200px'>
									<input type="submit" class="button blueB" value="Tìm kiếm" />
									<input type="reset" onclick="window.location.href='<?php echo sanpham_url('sanpham/dathang'); ?>'" value=" reset" class="basic"/>
									</td>
								</tr> 
								</tbody>
							</table>
						</form>
					</td>
				</tr>
			</thead>
			
			<thead>
				<tr>
					
					<td class="" >Mã đặt hàng</td>
					<td class="">Tên khách hàng</td>
					<td class="">Địa chỉ</td>
					<td class="">Số điện thoại</td>
					<td class="">Email/Zalo</td>
					<td class="">Tên sản phẩm mua</td>
					<td class="">Ngày lấy hàng</td>
					<td class="">Số lượng</td>
					<td class="">Ngày đặt hàng</td>
					<td class="">Mô tả</td>
					<td class="">Trạng thái</td>
					<td class="" >Hành động</td>
				</tr>
			</thead>
			
			<tbody class="list_item">
			<?php foreach ($dh as $row) { ?>
				<tr class="row_9">
					<td class="textC"><?php echo($row->ID); ?></td>
					<td class="textC"><?php echo($row->TenNguoiDat); ?></td>
					<td class="textC"><?php echo($row->DiaChi); ?></td>
					<td class="textC"><?php echo($row->SDT); ?></td>
					<td class="textC"><?php echo($row->MailZalo); ?></td>
					<td class="textC"><?php echo($row->TenHang); ?></td>
					<td class="textC"><?php echo($row->ThoiGianCanLay); ?></td>
					<td class="textC"><?php echo($row->SoLuong); ?></td>
					<td class="textC"><?php echo($row->CreateDt); ?></td>
					<td class="textC"><?php echo($row->MoTa); ?></td>
					<td class="textC">
						<?php
							if($row->TrangThai=="01") 
								echo("Đã duyệt"); 
							elseif ($row->TrangThai=="02") {
								echo("Đang chờ");
							}
						?>
					</td>
					<td class="option textC">
						
						<a href="<?php echo sanpham_url('sanpham/editDathang/'.$row->ID) ?>" title="Chỉnh sửa" class="tipS">
							<img src="<?php echo public_url('admin') ?>/images/icons/color/edit.png">
						</a>
					</td>
				</tr>
			<?php }?>
		    </tbody>
		    <tfoot class="auto_check_pages">
				<tr>
					<td colspan="6">
						
					     <div class='pagination'>

					     	<?php echo $this->pagination->create_links(); ?>
   			            </div>
					</td>
				</tr>
			</tfoot>
			
		</table>

	</div>
</div>