<div class="container">
    <div class="row">
        <div class="col-md-10 col-sm-10">
            <div class="clearfix"></div>
            <div class="header_bottom">
                <ul class="option">
                    <li id="search" class="search">
                        <form action="<?php echo sanpham_url('sanpham/search'); ?>" method="get">
                            <input class="search-submit" type="submit" value="">
                            <input class="search-input" placeholder="Nhập tên sản phẩm tìm kiếm" type="text" value="" name="search">
                         </form>
                    </li>
                </ul>
                    
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo base_url('Home'); ?>">Trang chủ</a></li>
                        <li><a href="<?php echo frontend_url('XeNang') ?>">Xe Nâng</a></li>
                        <li><a href="<?php echo frontend_url('PhuTung') ?>">Phụ tùng</a></li>
                         <li><a href="<?php echo frontend_url('Dathang') ?>">Đặt hàng</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>