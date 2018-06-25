<?php 
	Class Dathang extends MY_Controller{
		function __construct(){
			parent::__construct();
			$this-> load-> model('Dathang_model');
			$this-> load-> model('Sanpham_model');
			$this-> load->helper('string');

			
		}
		function index(){
			$message=$this->session->flashdata('message');
			$this->data['message']=$message;

			
			$this->data['temp'] = 'frontend/DatHang';
			$this->load->view('frontend/layout', $this->data);
		}
		function add(){
			$this->load->helper(array('form', 'url'));
			$this-> load-> library('form_validation');
			$this->load->helper('date');
			//var_dump($_POST);
			if($this-> input-> post()){
				$ngaydat= date("Y-m-d");
					//pre($ngaydat);
				$this-> form_validation->set_rules('nameuser','Tên bạn','required');
				$this-> form_validation->set_rules('email','Email của bạn','required');
				$this-> form_validation->set_rules('diachi','Địa của bạn','required');
				$this-> form_validation->set_rules('sdt','Số điện thoại của bạn','required');
				$this-> form_validation->set_rules('tensp','Tên sản phẩm ','required');
				$this-> form_validation->set_rules('number','Số lượng','required|callback_KTSL');
				$this-> form_validation->set_rules('ngay','Ngày lấy hàng','required|callback_KiemTraNgay');
				

				if($this-> form_validation->run()){
					//thêm vào csdl
					$name=$this-> input ->post('nameuser');
					$email=$this-> input ->post('email');
					$dc=$this-> input ->post('diachi');
					$sdt=$this-> input ->post('sdt');
					$tensp=$this-> input ->post('tensp');
					$sl=$this-> input ->post('number');
					$ngay=$this-> input ->post('ngay');
					$ghichu=$this-> input ->post('ghichu');
					
					
					$data=array(
						'TenNguoiDat'=>$name,
						'DiaChi'=>$dc,
						'SDT'=>$sdt,
						'MailZalo'=>$email,
						'TenHang'=>$tensp,
						'ThoiGianCanLay'=>$ngay,
						'SoLuong'=>$sl,
						'MoTa'=>$ghichu,
						'TrangThai'=>'02',
						'CreateDt'=>$ngaydat
					);

					if($this->Dathang_model -> create($data)){
							$this-> session-> set_flashdata('message','Đặt hàng thành công');
						}
						else{
							$this-> session-> set_flashdata('message','Đặt hàng thất bại');
						}
						redirect(base_url('Home'));

				}
				
			}
			$this->data['temp'] = 'frontend/DatHang';
			$this->load->view('frontend/layout', $this->data);
		}
		function check_name(){
			$name=$this-> input ->post('tensp');
			$where= array('Ten'=>$name);
			if($this->Sanpham_model->check_exists($where)=='FALSE'){
				//Trả về thông báo lỗi
				$this->form_validation-> set_message( __FUNCTION__ ,'Sản phẩm này không có');
				return false;
			}
			return true;
		}
		function KiemTraNgay(){
			$ngaylay=$this-> input ->post('ngay');
			$ngaydat= $ngaydat= date("Y-m-d");
			if(strtotime($ngaydat) < strtotime($ngaylay)){
				//Trả về thông báo lỗi
				$this->form_validation-> set_message( __FUNCTION__ ,'Yêu cầu ngày không hợp lệ');
				return false;
			}
			return true;
		}
		function KTSL(){
			$sl=$this-> input ->post('number');
			if($sl<1){
				$this->form_validation-> set_message( __FUNCTION__ ,'Yêu cầu ngày không hợp lệ');
				return false;
			}
			return true;
		}
	}
?>