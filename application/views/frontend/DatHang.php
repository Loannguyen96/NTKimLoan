<div class="clearfix"></div>
<div class="container_fullwidth">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h5 class="title contact-title">
                    Đặt hàng của chúng tôi
                </h5>
                <div class="clearfix">
                </div>
                <?php $this->load->view('admin/message', $this->data); ?>
                <div class="clearfix">
                </div>
                <form class="form" id="form" action="<?php echo frontend_url('Dathang/add') ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="contact-infoormation">
                                <h5>
                                    Thông tin cửa hàng
                                </h5>

                                <h5>Cửa Hàng Trung - Lộc - Phát</h5>
                                <h6>Chuyên kinh doanh</h6>
                                <br />
                                <h6>Phốt ben thủy lợi</h6>
                                <br />
                                <h6>Phốt dầu lò xo, phốt bơm</h6>
                                <br />
                                <h6>Sin hộp xe cơ giới, sin bơm</h6>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="ContactForm">
                                <h5>Để lại thông tin của bạn</h5>
                                <div class="row">
                                        <div class="col-md-6">
                                            <label>Tên bạn<strong class="red">*</strong></label>
                                            <div>
                                                <div class="red">
                                                    <br />

                                                    <br />
                                                </div>
                                            </div>
                                            <input class="inputfild" type="text" name="nameuser" value="<?php echo set_value('nameuser'); ?>"/>
                                            <div name="name_error" class="red"> <?php echo form_error('nameuser')?> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Email của bạn/ Zalo<strong class="red">*</strong></label>
                                            <div>
                                                <div class="red">
                                                    <br />
                                                    <br />
                                                </div>
                                            </div>
                                            <input class="inputfild" type="email" name="email" onchange="ktmail()" value="<?php echo set_value('email'); ?>"/>
                                            <div name="name_error" class="red"> <?php echo form_error('email')?> </div>
                                        </div>
                                </div>
                                <br />
                                <div class="row">
                                    <div class="col-md-12">
                                            <label>Địa chỉ<strong class="red">*</strong> </label>
                                            <div class="red">
                                                <br />
                                                <br />
                                            </div>
                                            <input class="inputfild" type="text" name="diachi" value="<?php echo set_value('diachi'); ?>"/>
                                            <div name="name_error" class="red"> <?php echo form_error('diachi')?> </div>
                                        </div>
                                    </div>
                                    <br />
                                  <div class="row">
                                        <div class="col-md-12">
                                            <label>Số điện thoại<strong class="red">*</strong></label>
                                            <div class="red" class="red">
                                                <br />
                                                <br />
                                            </div>
                                            <input class="inputfild" type="text" name="sdt" onkeypress="return isNumberKey(event);" maxlength="11" value="<?php echo set_value('sdt'); ?>"/>
                                            <div name="name_error" class="red"> <?php echo form_error('sdt')?> </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Tên sản phẩm mong muốn<strong class="red">*</strong></label>
                                            <input class="inputfild" type="text" name="tensp" value="<?php echo set_value('tensp'); ?>"/>
                                            <div name="name_error" class="red"> <?php echo form_error('tensp')?> </div>
                                            <div class="red" >
                                                <br />
                                               
                                                <br />
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col-md-4"><label>Số lượng<strong class="red">*</strong></label>
                                            <input class="inputfild" type="number" name="number" value="<?php echo set_value('number'); ?>"/>
                                            <div name="name_error"class="red"> <?php echo form_error('number')?> </div>
                                            <div class="red" ">
                                                <br />
                                               
                                                <br />
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <label>
                                                Ngày cần lấy
                                                <strong class="red">*</strong>
                                            </label>
                                            <input type="date" class="inputfild" name="ngay" value="<?php echo set_value('ngay'); ?>"/>
                                            <div name="name_error"class="red"> <?php echo form_error('number')?> </div>
                                            <div class="red" >
                                                <br />
                                                <br />
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col-md-12"><label>Ghi chú ngắn gọn</label>
                                            <textarea class="inputfild" name="ghichu" value="<?php echo set_value('ghichu'); ?>"></textarea>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <label class="text-center">Chúng tôi sẽ liên hệ với bạn ngay khi có sản phẩm</label>
                                    </div>


                                    <div class="button_group">
                                        <input type="submit" class="pull-right" value="Đặt hàng">
                                    </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="clearfix">
        </div>
    </div>
</div>
