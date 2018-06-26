<!-- load head -->
<?php $this->load->view('admin/sanpham/head',$this->data); ?>
<div class="line"></div>

<div class="wrapper" id="main_product">
	<?php $this->load->view('admin/message', $this->data); ?>
	<div class="widget">
		<div class="title">
			<h6>Danh sách sản phẩm</h6>
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
									<td class="label" style="width:40px;">
										<label for="filter_id">Mã </label>
									</td>
									<td class="item" style="width:155px;" >
										<input name="id" value="<?php echo $this->input->get('id'); ?>" id="filter_iname" type="text" style="width:155px;" />
									</td>
									<td class="label" style="width:40px;">
										<label for="filter_id">Tên: </label>
									</td>
									<td class="item" style="width:155px;" >
										<input name="name" value="<?php echo $this->input->get('name'); ?>" id="filter_iname" type="text" style="width:155px;" />
									</td>
									
											
									<td style='width:200px'>
									<input type="submit" class="button blueB" value="Tìm kiếm" />
									<input type="reset" onclick="window.location.href='<?php echo sanpham_url('sanpham'); ?>'" value=" reset" class="basic">
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
					
					<td class="" style="width:60px;">Mã số</td>
					<td class="">Tên sản phẩm</td>
					<td>Loại sản phẩm</td>
					<td style="width:120px;">Hành động</td>
				</tr>
			</thead>
			
			<tbody class="list_item">
			<?php foreach ($list as $row) { ?>
				<tr class="row_9">
					<td class="textC"><?php echo($row->ID); ?></td>
					<td class="textC"><?php echo($row->Ten); ?></td>
					<td class="textC">
						<?php
							if($row->Loai=="01") 
								echo("Xe nâng"); 
							elseif ($row->Loai=="02") {
								echo("Phụ tùng");
							}
						?>
					</td>
					<td class="option textC">
						<a href="<?php echo sanpham_url('sanpham/ShowThongtinSP/'.$row->ID) ?>" target="_blank"  class="tipS" title="Xem chi tiết sản phẩm" >
							<img src="<?php echo public_url('admin') ?>/images/icons/color/view.png">
						</a>
						<a href="<?php echo sanpham_url('sanpham/edit/'.$row->ID) ?>" title="Chỉnh sửa" class="tipS">
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