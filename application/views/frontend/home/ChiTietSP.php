<div class="clearfix"></div>
<div class="container_fullwidth">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="products-details">
                    <div class="preview_image">
                        <div class="preview-small">
                            <img id="zoom_03" src="<?php echo base_url('upload/sanpham/'.$info2->Image1) ?>" data-zoom-image="<?php echo base_url('upload/sanpham/'.$info2->Image1) ?>" alt="">
                        </div>
                    </div>
                    <div class="products-description">
                        <h5 class="name">
                            Tên:   <?php echo $info->Ten; ?>
                        </h5>
                        <p class="name">
                            Hiệu:   <?php echo $info2->Hieu; ?>
                        </p>
                        <p class="name">
                            Đời: <?php echo $info2->Doi; ?>
                        </p>
                        <p class="name">
                            Hãng: <?php echo $info2->Hang; ?>
                        </p>
                        <?php if ($info2->MoTa != null){ ?>
                            <p class="name">
                                Mô tả: <?php echo $info2->MoTa; ?>
                            </p>
                       <?php } ?>
                        <p class="name">
                            Liên hệ : <span class="price">01223232434</span> để mua hàng
                        </p>

                        <div class="clearfix">
                        </div>
                    </div>
                </div>
                <div class="clearfix">
                </div>
                <!--  -->

            </div>

        </div>
        <div class="clearfix">
        </div>
    </div>
</div>

