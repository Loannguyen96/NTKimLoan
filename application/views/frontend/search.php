<div class="clearfix"></div>
<div class="container_fullwidth">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <?php $this->load->view('frontend/leftlayout'); ?>
            </div>
            <div class="col-md-8">
                <div class="products-grid">
                    <div class="row">
                        <form id="form">
                            <?php foreach ($info as $key ) { ?>
                                <div class="col-md-4 col-sm-6">
                                    <div class="products">
                                        <div class="thumbnail">
                                            <a href="<?php echo frontend_url('XeNang/view/'.$key->ID); ?> ">
                                            <?php foreach ($thongtinsp as $row){
                                                if($key->ID==$row->ID){ ?>
                                                     <img src="<?php echo base_url('./upload/sanpham/'.$row->Image1) ?>" alt="<?php echo ($key->Ten); ?>">
                                              <?php  }
                                            } ?>
                                             
                                
                                            </a>
                                        </div>
                                        <div class="productname">
                                            <?php echo ($key->Ten); ?>
                                        </div>
                                        <?php 
                                        foreach ($thongtinsp as $row ) {
                                           if($key->ID==$row->ID){
                                                foreach ($master as $value) {
                                                   if($row->TinhTrang==$value->Name){ ?>
                                                        <h4 class="price"> <?php echo ($value->Value); ?></h4>
                                                <?php   }
                                                }
                                           }
                                        }
                                            
                                         ?>
                                       
                                        <div class="button_group">
                                            <button class="btn" form="form" formaction="<?php echo frontend_url('XeNang/view/'.$key->ID); ?>" >Xem chi tiết</button>
                                        </div>
                                    </div>
                                </div>
                            <?php   }  ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix">
    </div>
</div>
<!--<div class="pagination" style="float: right;"><?php echo $this->pagination->create_links(); ?></div>-->

