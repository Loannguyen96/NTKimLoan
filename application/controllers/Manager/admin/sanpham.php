<?php
	Class sanpham extends MY_Controller{
		function __construct(){
			parent::__construct();
			$this-> load-> model('Sanpham_model');
			$this-> load-> model('ThongtinSP_model');
			$this-> load->model('Masterdata_model');
			$this-> load->model('Dathang_model');
			$this->load->library('Upload_library');

			
		}
		// Lấy danh sách sản phẩm
		function index(){
			

			$total=$this-> Sanpham_model->get_total();
			$this->data['total']=$total;
			//load ra thu vien phan trang
			$this-> load-> library('pagination');
			$config = array();
			$config['total_rows'] = $total;
			$config['base_url'] = sanpham_url('sanpham/index/');
			$config['per_page'] = 10;//so luong san pham hien thi tren 1 trang
			$config['uri_segment'] =5;//phan doan hien thi so trang tren url
			$config['num_links'] = 3;
			$config['next_link'] = 'Trang kế tiếp';
			$config['prev_link'] = 'Trang trước';
			$config['cur_tag_open'] =  '<a class="currentpage">';
			$config['cur_tag_close'] =  '</a>';
			//$config['use_page_numbers'] = TRUE;
			//khoi tao cac cau hinh phan trang
			$this-> pagination-> initialize($config);
			//lấy phân đoạn thứ 4 tính từ controller
			$segment = $this -> uri->segment('5');
			if($segment==''){
				$segment=0;
			}
			$segment=intval($segment);


			$input=array();
			$input['limit']=array($config['per_page'],$segment);
			//Lọc dữ liệu
			$name=$this->input->get('name');
			$id=$this->input->get('id');
			

			$input['where']=array();
			if($name){
				$input['like']=array('Ten', $name);

			}
			if($id){
				$input['like']=array('ID', $id);

			}
			
			//lấy danh sách sản phẩm
			$list = $this-> Sanpham_model->get_list($input);
			
			$this->data['list']=$list;
			
			//tạo thông báo
			$message=$this->session->flashdata('message');
			$this->data['message']=$message;

			$this->data['temp'] = 'admin/sanpham/index';
			$this->load->view('admin/mainlayout',$this->data);
		}
		//Check Tên có trùng không
		function check_name(){
			$name=$this-> input ->post('name');
			$where= array('Ten'=>$name);
			if($this->Sanpham_model->check_exists($where)){
				//Trả về thông báo lỗi
				$this->form_validation-> set_message( __FUNCTION__ ,'Tên sản phẩm này đã có');
				return false;
			}
			return true;
		}
		//Kiểm tra file rỗng
		function file_selected_test(){
			$upload_path='./upload/sanpham';
			$upload_hinh1= $this-> upload_library-> upload($upload_path, 'img1');
			//pre($upload_hinh1);
		    if (empty($upload_hinh1['file_name'])){
		    	$this->form_validation->set_message(__FUNCTION__, 'Chưa được chọn file');
		        return false;
		    }
		    return true;
		}
		//Thêm mới sản phẩm
		function add(){
			
			$this->load->helper(array('form', 'url'));
			$this-> load-> library('form_validation');
			$this->load->library('Upload_library');

			//pre($idthongtinsp);
			$master=$this->Masterdata_model->get_list();
			//Lấy danh mục Phân Loại
			$loai = array('Type', 'TypeV');
			$qr=$this->db->where_in('Keys', $loai);
			$qr=$this->db->get('masterdata');
			$pl=$qr->result();
			//lấy danh mục tình trạng
			$sql = $this->db->get_where('masterdata', array('Keys' => 'Status'));
			$tt=$sql->result();
			//pre($pl);
			//neu ma co du lieu post len thi kiem tra
			if($this-> input-> post()){
				

				$this-> form_validation->set_rules('name', 'Tên sản phẩm', 'required|callback_check_name');
				$this-> form_validation->set_rules('hieu', 'Hiệu sản phẩm', 'required');
				$this-> form_validation->set_rules('doi', 'Đời sản phẩm', 'required');
				$this-> form_validation->set_rules('hang', 'Hãng sản phẩm', 'required');
				$this-> form_validation->set_rules('img1', 'Hình 1', 'callback_file_selected_test');
				//nhập liệu chính xác
				if($this-> form_validation->run()){
					//thêm vào csdl
					$name=$this-> input ->post('name');
					$loai=$this-> input ->post('loai');
					$hieu=$this-> input ->post('hieu');
					$doi=$this-> input ->post('doi');
					$hang=$this-> input ->post('hang');
					$mota=$this-> input ->post('mota');
					$tinhtrang=$this-> input ->post('tinhtrang');
					//pre($tinhtrang);
					$phanloai=$this-> input ->post('phanloai');
					//lấyy tên file ảnh đc upload
					$upload_path='./upload/sanpham';
					$upload_hinh1= $this-> upload_library-> upload($upload_path, 'img1');
					$upload_hinh2= $this-> upload_library-> upload($upload_path, 'img2');
					$upload_hinh3= $this-> upload_library-> upload($upload_path, 'img3');
					$upload_hinh4= $this-> upload_library-> upload($upload_path, 'img4');
					$upload_hinh5= $this-> upload_library-> upload($upload_path, 'img5');
					//pre($upload_data);
					if(isset($upload_hinh1['file_name'])){
						$image1=$upload_hinh1['file_name'];
					}
					else{
						$image1='';
					}
					if(isset($upload_hinh2['file_name'])){
						$image2=$upload_hinh2['file_name'];
					}
					else{
						$image2='';
					}
					if(isset($upload_hinh3['file_name'])){
						$image3=$upload_hinh3['file_name'];
					}
					else{
						$image3='';
					}
					if(isset($upload_hinh4['file_name'])){
						$image4=$upload_hinh4['file_name'];
					}
					else{
						$image4='';
					}
					if(isset($upload_hinh5['file_name'])){
						$image5=$upload_hinh5['file_name'];
					}
					else{
						$image5='';
					}

					$data1=array(
						'Ten'=> $name,
						'Loai' => $loai
					);
					

					if($this->Sanpham_model -> create($data1) ){
						$sanpham=$this->Sanpham_model->get_list();
						$max=$sanpham[0]->ID;
						foreach ($sanpham as $row) {
							if($row->ID>$max){
								$max=$row->ID;
							}
						}
						$id=$max;
						$idthongtinsp=$max;
						//pre($idthongtinsp);
						$data2=array(
							'ID'=>$idthongtinsp,
							'Hieu'=>$hieu,
							'Doi'=>$doi,
							'Hang'=>$hang,
							'MoTa'=>$mota,
							'TinhTrang'=>$tinhtrang,
							'PhanLoai'=>$phanloai,
							'Image1'=>$image1,
							'Image2'=>$image2,
							'Image3'=>$image3,
							'Image4'=>$image4,
							'Image5'=>$image5
						);
						if($this->ThongtinSP_model -> create($data2)){
							$this-> session-> set_flashdata('message','Thêm dữ liệu mới thành công');
						}
						else{
							$this-> session-> set_flashdata('message','Thêm dữ liệu mới không thành công');
						}
					}
					else{
						$this-> session-> set_flashdata('message','Thêm dữ liệu mới không thành công');
					}
					// di chuyển sang trang sản phẩm
					redirect(sanpham_url(sanpham));
				}
				

			}
			$this->data['pl']=$pl;
			$this->data['tt']=$tt;
			$this->data['temp'] = 'admin/add';
			$this->load->view('admin/mainlayout',$this->data);
		}

		//Sửa sản phẩm
		function edit(){
			//lấy id sản phẩm chỉnh sửa
			$id= $this->uri->segment('5');

			$this->load->helper(array('form', 'url'));
			$this-> load-> library('form_validation');
			//lấy thông tin sản phẩm
			$info=$this->Sanpham_model->get_info($id);
			$info2=$this->ThongtinSP_model->get_info($id);

			$master=$this->Masterdata_model->get_list();

			$loai = array('Type', 'TypeV');
			$qr=$this->db->where_in('Keys', $loai);
			$qr=$this->db->get('masterdata');
			$pl=$qr->result();

			$sql = $this->db->get_where('masterdata', array('Keys' => 'Status'));
			$tt=$sql->result();

			if(!$info && !$info2){
				$this-> session-> set_flashdata('message','Không tồn tại sản phẩm này');
				redirect(sanpham_url(sanpham));
			}

			if($this-> input-> post()){
				$this-> form_validation->set_rules('name', 'Tên sản phẩm', 'required');
				$this-> form_validation->set_rules('hieu', 'Hiệu sản phẩm', 'required');
				$this-> form_validation->set_rules('doi', 'Đời sản phẩm', 'required');
				$this-> form_validation->set_rules('hang', 'Hãng sản phẩm', 'required');

				if($this-> form_validation->run()){
					//thêm vào csdl
					$name=$this-> input ->post('name');
					$loai=$this-> input ->post('loai');

					$hieu=$this-> input ->post('hieu');
					$doi=$this-> input ->post('doi');
					$hang=$this-> input ->post('hang');
					$mota=$this-> input ->post('mota');
					$tinhtrang=$this-> input ->post('tinhtrang');
					//pre($tinhtrang);
					$phanloai=$this-> input ->post('phanloai');
					//lấyy tên file ảnh đc upload
					$upload_path='./upload/sanpham';
					$upload_hinh1= $this-> upload_library-> upload($upload_path, 'img1');
					$upload_hinh2= $this-> upload_library-> upload($upload_path, 'img2');
					$upload_hinh3= $this-> upload_library-> upload($upload_path, 'img3');
					$upload_hinh4= $this-> upload_library-> upload($upload_path, 'img4');
					$upload_hinh5= $this-> upload_library-> upload($upload_path, 'img5');
					//pre($upload_data);
					if(isset($upload_hinh1['file_name'])){
						$image1=$upload_hinh1['file_name'];
					}
					if(isset($upload_hinh2['file_name'])){
						$image2=$upload_hinh2['file_name'];
					}
					if(isset($upload_hinh3['file_name'])){
						$image3=$upload_hinh3['file_name'];
					}
					if(isset($upload_hinh4['file_name'])){
						$image4=$upload_hinh4['file_name'];
					}
					if(isset($upload_hinh5['file_name'])){
						$image5=$upload_hinh5['file_name'];
					}
					$data=array(
						'Ten'=> $name,
						'Loai' => $loai
					);
					$data2=array(
						'ID'=>$id,
						'Hieu'=>$hieu,
						'Doi'=>$doi,
						'Hang'=>$hang,
						'MoTa'=>$mota,
						'TinhTrang'=>$tinhtrang,
						'PhanLoai'=>$phanloai,
					);
					if($image1!=''){
						$data2['Image1']=$image1;
					}
					if($image2!=''){
						$data2['Image2']=$image2;
					}
					if($image3!=''){
						$data2['Image3']=$image3;
					}
					if($image4!=''){
						$data2['Image4']=$image4;
					}
					if($image5!=''){
						$data2['Image5']=$image5;
					}

					if($this->Sanpham_model -> update($id,$data) && $this->ThongtinSP_model -> update($id,$data2)){
						//tạo nội dung thông báo
						$this-> session-> set_flashdata('message','Cập nhật dữ liệu mới thành công');
					}
						
					else{
						$this-> session-> set_flashdata('message','Cập nhật dữ liệu mới không thành công');
						
					}
					// di chuyển sang trang sản phẩm
					redirect(sanpham_url(sanpham));
				}
				

			}

			$this->data['info']= $info;
			$this->data['info2']= $info2;
			$this->data['pl']=$pl;
			$this->data['tt']=$tt;
			$this->data['temp'] = 'admin/edit';
			$this->load->view('admin/mainlayout',$this->data);
		}
		//Thông tin sản phẩm
		function ShowThongtinSP(){
			//lấy id sản phẩm chỉnh sửa
			$id= $this->uri->segment('5');
			//lấy thông tin sản phẩm
			$info=$this->ThongtinSP_model->get_info($id);
			$sql = $this->db->get_where('masterdata', array('Name' => $info->PhanLoai));
			$query=$this->db->get_where('masterdata', array('Name' => $info->TinhTrang));
			$tinhtrang=$query->result();
			$phanloai=$sql->result();
			//pre($tinhtrang);
			if(!$info){
				$this-> session-> set_flashdata('message','Không tồn tại sản phẩm này');
				redirect(sanpham_url(sanpham));
			}
			$this->data['info']= $info;
			$this->data['phanloai']=$phanloai;
			$this->data['tinhtrang']=$tinhtrang;
			$this->data['temp'] = 'admin/ChitietSP/index';
			$this->load->view('admin/mainlayout',$this->data);
		}
		function dathang(){
			$total=$this-> Dathang_model->get_total();
			$this->data['total']=$total;
			$this-> load-> library('pagination');
			$config = array();
			$config['total_rows'] = $total;
			$config['base_url'] = sanpham_url('sanpham/dathang/');
			$config['per_page'] = 10;//so luong san pham hien thi tren 1 trang
			$config['uri_segment'] =5;//phan doan hien thi so trang tren url
			$config['num_links'] = 3;
			$config['next_link'] = '>>';
			$config['prev_link'] = '<<';
			$config['cur_tag_open'] =  '<a class="currentpage">';
			$config['cur_tag_close'] =  '</a>';
			//$config['use_page_numbers'] = TRUE;
			//khoi tao cac cau hinh phan trang
			$this-> pagination-> initialize($config);
			//lấy phân đoạn thứ 4 tính từ controller
			$segment = $this -> uri->segment('5');
			if($segment==''){
				$segment=0;
			}
			$segment=intval($segment);


			$input=array();
			$input['limit']=array($config['per_page'],$segment);
			
			//Lọc dữ liệu
			$name=$this->input->get('name');
			$sdt=$this->input->get('sdt');
			
			
			$input['where']=array();
			if($name){
				$input['like']=array('TenNguoiDat', $name);

			}
			
			if($sdt){
				$input['like']=array('SDT', $sdt);

			}
			
			
			
			$segment=$this-> uri->segment('5');

			$dh = $this-> Dathang_model->get_list($input);
			$this->data['dh']=$dh;
			$this->data['temp'] = 'admin/dathang/dsdathang';
			$this->load->view('admin/mainlayout',$this->data);
		}
		function editDathang(){

			$id= $this->uri->segment('5');
			$info=$this->Dathang_model->get_info($id);
			if($this-> input-> post()){
				$tt=$this-> input ->post('tt');

				$data=array(
							'TrangThai'=> $tt
						);
				if($this-> Dathang_model -> update($id,$data) ){
					//tạo nội dung thông báo
					$this-> session-> set_flashdata('message','Cập nhật dữ liệu mới thành công');
				}
				else{
						$this-> session-> set_flashdata('message','Cập nhật dữ liệu mới không thành công');
				}
				redirect(sanpham_url('sanpham/dathang'));
			}

			
			$this->data['info']= $info;
			$this->data['temp'] = 'admin/dathang';
			$this->load->view('admin/mainlayout',$this->data);
		}
		//search
		function search(){
			$key = $this-> input-> get('search');
			$this-> data['key'] = trim($key);
			$info = $this-> Sanpham_model->search($key);
			/*$total =count($info);
			$this-> load-> library('pagination');
			$config = array();
			$config['total_rows'] = $total;
			$config['base_url'] = sanpham_url('sanpham/search?saerch='.$key.'/');
			$config['per_page'] = 3;//so luong san pham hien thi tren 1 trang
			$config['uri_segment'] =5;//phan doan hien thi so trang tren url
			$config['num_links'] = 3;
			$config['next_link'] = '>>';
			$config['prev_link'] = '<<';
			$config['cur_tag_open'] =  '<a class="currentpage">';
			$config['cur_tag_close'] =  '</a>';
			$this-> pagination-> initialize($config);
			//lấy phân đoạn thứ 4 tính từ controller
			$segment = $this -> uri->segment('5');
			if($segment==''){
				$segment=0;
			}
			$segment=intval($segment);*/
        	$master=$this->Masterdata_model->get_list();
        	$thongtinsp=$this->ThongtinSP_model->get_list();
			

			$data = array();
        	
			
			$this->data['master'] = $master;
			$this->data['thongtinsp'] = $thongtinsp;
			$this->data['info'] = $info;
			$this->data['temp'] = 'frontend/search';
			$this->load->view('frontend/layout', $this->data);
		}
		//Xóa sản phẩm
		function delete(){
			$id= $this->uri->segment('5');
			$info=$this->Sanpham_model->get_info($id);
			if(!$info){
				$this-> session-> set_flashdata('message','Không tồn tại sản phẩm này');
				redirect(sanpham_url(sanpham));
			}
			if($this->Sanpham_model -> delete($id)){
						//tạo nội dung thông báo
						$this-> session-> set_flashdata('message','Xóa dữ liệu mới thành công');
					}
						
					else{
						$this-> session-> set_flashdata('message','Xóa dữ liệu mới không thành công');
						
					}
					// di chuyển sang trang sản phẩm
					redirect(sanpham_url(sanpham));
			
		}

}