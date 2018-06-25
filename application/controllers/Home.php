<?php
	Class Home extends MY_Controller{
		
		function index(){
			//lấy danh sách sản phẩm xe nâng
			$this->load->model('Sanpham_model');
			$this->load->model('ThongtinSP_model');
			$this->load->model('Masterdata_model');
			$master=$this->Masterdata_model->get_list();

			$query="SELECT sanpham.*, thongtinsanpham.*, masterdata.Name, masterdata.Value FROM `sanpham` JOIN thongtinsanpham ON sanpham.ID=thongtinsanpham.ID JOIN masterdata on thongtinsanpham.TinhTrang=masterdata.Name WHERE sanpham.Loai='01' LIMIT 0,4";

			$sql=$this->db->query($query);
			$info=$sql->result();
			//pre($info);
			$qr="SELECT sanpham.*, thongtinsanpham.*, masterdata.Name, masterdata.Value FROM `thongtinsanpham` JOIN sanpham ON thongtinsanpham.ID=sanpham.ID JOIN masterdata on thongtinsanpham.TinhTrang=masterdata.Name WHERE sanpham.Loai='02' LIMIT 0,4";
			$sql2=$this->db->query($qr);
			$info2=$sql2->result();
			//pre($info2);
			$data = array();
			$this->data['info']= $info;
			$this->data['info2']= $info2;
			$this->data['temp'] = 'frontend/home/index';
			$this->load->view('frontend/layout', $this->data);
		}
	}
?>