<?php 
	//tạo ra các link trong sản phẩm
	function sanpham_url($url = ''){
		return base_url('Manager/admin/'.$url);
	}
	function frontend_url($url=''){
		return base_url('frontend/'.$url);
	}
?>