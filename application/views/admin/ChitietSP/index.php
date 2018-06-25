<?php $this->load->view('admin/ChitietSP/head',$this->data); ?>
<div class="line"></div>
<div class="wrapper" id="main_product">
	<div class="widget">
		<div class="title">
			<h6>Thông tin sản phẩm</h6>
		</div>
		<div class="gallery">
			<ul>
				
				<?php 
					if($info->Image1!=''){ ?>
						<li><a ><img src="<?php echo base_url('upload/sanpham/'.$info->Image1) ?>" width="180px" height="180px" ></a></li>
				<?php } ?>
				<?php 
					if($info->Image2!=''){ ?>
						<li><a ><img src="<?php echo base_url('upload/sanpham/'.$info->Image2) ?>" width="180px" height="180px" ></a></li>
				<?php } ?>
				<?php 
					if($info->Image3!=''){ ?>
						<li><a ><img src="<?php echo base_url('upload/sanpham/'.$info->Image3) ?>" width="180px" height="180px" ></a></li>
				<?php } ?>
				<?php 
					if($info->Image4!=''){ ?>
						<li><a ><img src="<?php echo base_url('upload/sanpham/'.$info->Image4) ?>" width="180px" height="180px" ></a></li>
				<?php } ?>
				<?php 
					if($info->Image5!=''){ ?>
						<li ><a ><img src="<?php echo base_url('upload/sanpham/'.$info->Image5) ?>" width="180px" height="180px" ></a></li>
				<?php } ?>
			</ul>
			<div class="cLine"></div>
			<div>
				<table class="sTable" cellpadding="0" cellspacing="0" width="100%" style="border: none;" >
					<tbody class="list_item">
								<tr>
									<td style="width:100px; padding-left: 50px;"><h5>Hiệu:</h5></td>
									<td class="textC"><?php echo $info->Hieu; ?></td>
								</tr>
								<tr>
									<td style="width:100px; padding-left: 50px;"><h5>Đời :</h5></td>
									<td class="textC"><?php echo $info->Doi; ?></td>
								</tr>
								<tr>
									<td style="width:100px; padding-left: 50px;"><h5>Hãng:</h5></td>
									<td class="textC"><?php echo $info->Hang; ?></td>
								</tr>
								<tr>
									<td style="width:100px; padding-left: 50px;"><h5>Phân loại:</h5></td>
									<td class="textC"><?php echo $phanloai[0]->Value; ?></td>
								</tr>
								<tr>
									<td style="width:100px; padding-left: 50px;"><h5>Tình trạng:</h5></td>
									<td class="textC"><?php echo $tinhtrang[0]->Value; ?></td>
								</tr>
								<?php
									if( $info->MoTa!=''){?>
										<tr>
											<td style="width:100px; padding-left: 50px;"><h5>Mô tả:</h5></td>
											<td class="textC"><?php echo $info->MoTa; ?></td>
										</tr>
								<?php	} ?>
								
					</tbody>
				</table>

			</div>
		</div>
	</div>
</div>

			