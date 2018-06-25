  <?php $this->load->view('admin/message', $this->data); ?>
<div class="hot-products">
     <?php $this->load->view('admin/message', $this->data); ?>
    <h3 class="title"><strong>Xe nâng</strong></h3>
    <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next" href="#">&gt;</a></div>

    <ul id="hot">
        <li>
            <div class="row">
                <?php foreach ($info as $row ){ ?>
                    <form id="form">
                        <div class="col-md-3 col-sm-6">
                            <div class="products">
                                <div class="thumbnail">
                                   
                                    <a href="<?php echo frontend_url('XeNang/view/'.$row->ID); ?>">
                                        <img src="<?php echo base_url('./upload/sanpham/'.$row->Image1) ?>" alt="">
                                    </a>
                                </div>
                                <div class="productname"><?php echo ($row->Ten); ?></div>
                                <h4 class="price"><?php echo ($row->Value); ?></h4>
                                <div class="button_group">
                                     <button class="button add-cart" form="form" formaction="<?php echo frontend_url('XeNang/view/'.$row->ID); ?>" >Xem chi tiết</button>
                                </div>
                            </div>
                        </div>
                    </form>
               <?php } ?>
            </div>
        </li>
    </ul>
</div>
<div class="hot-products">
   <h3 class="title"><strong>Phụ Tùng</strong></h3>
    <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next" href="#">&gt;</a></div>
    <ul id="hot">
        <li>
            <div class="row">
                <?php foreach ($info2 as $key) { ?>
                    <form id="form" >
                     <form id="form" >
                    <div class="col-md-3 col-sm-6">
                        <div class="products">
                            <div class="thumbnail">
                                <a href="<?php echo frontend_url('XeNang/view/'.$row->ID); ?>">
                                    <img src="<?php echo base_url('upload/sanpham/'.$key->Image1) ?>" alt="">
                                </a>
                            </div>
                          
                            <div class="productname"><?php echo($key->Ten); ?></div>
                            <h4 class="price"><?php echo ($key->Value); ?></h4>
                            <div class="button_group">
                                <button class="button add-cart" form="form" formaction="<?php echo frontend_url('XeNang/view/'.$row->ID); ?>" >Xem chi tiết</button>
                            </div>
                        </div>
                    </div>
                </form>
              <?php  } ?>
               
            </div>
        </li>
    </ul>
</div>