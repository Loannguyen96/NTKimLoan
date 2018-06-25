<?php 
	Class XeNang extends MY_Controller{
		function __construct(){
			parent::__construct();
			$this-> load-> model('Sanpham_model');
			$this-> load-> model('ThongtinSP_model');
			$this-> load->model('Masterdata_model');
			$this->load->library('Upload_library');

			
		}
		function index(){
			$this->load->model('Sanpham_model');
			$this->load->model('ThongtinSP_model');
			$this->load->model('Masterdata_model');
			$master=$this->Masterdata_model->get_list();
			$where['where']=array('Loai'=>'01');
			$total=$this->Sanpham_model->get_total($where);
			//pre($total);
			//pre($total);
			//$total=$this-> Sanpham_model->get_total($xn);
			//pre($total);
			$this->data['total']=$total;
			//load ra thu vien phan trang
			$this-> load-> library('pagination');
			$config = array();
			$config['total_rows'] = $total;
			$config['base_url'] = frontend_url('XeNang/index/');
			$config['per_page'] = 10;//so luong san pham hien thi tren 1 trang
			$config['uri_segment'] =4;//phan doan hien thi so trang tren url
			$config['num_links'] = 3;
			$config['next_link'] = '>>';
			$config['prev_link'] = '<<';
			$config['cur_tag_open'] =  '<a class="currentpage">';
			$config['cur_tag_close'] =  '</a>';
			//$config['use_page_numbers'] = TRUE;
			//khoi tao cac cau hinh phan trang
			$this-> pagination-> initialize($config);
			//lấy phân đoạn thứ 4 tính từ controller
			$segment = $this -> uri->segment('4');
			if($segment==''){
				$segment=0;
			}
			$segment=intval($segment);
			$query="SELECT thongtinsanpham.*,sanpham.*,masterdata.Name, masterdata.Value FROM `thongtinsanpham` JOIN sanpham ON thongtinsanpham.ID=sanpham.ID JOIN masterdata on thongtinsanpham.TinhTrang=masterdata.Name WHERE sanpham.Loai='01' LIMIT ".$segment.",".$config['per_page'];

			$sql=$this->db->query($query);
			$info=$sql->result();
			//pre($info);
			$data = array();

			$this->data['info']= $info;
			$this->data['temp'] = 'frontend/home/XeNang';
			$this->load->view('frontend/layout', $this->data);
		}
		function view(){
			$this->load->model('Sanpham_model');
			$this->load->model('ThongtinSP_model');
			$this->load->model('Masterdata_model');

			$id= $this->uri->segment('4');
			//pre($id);
			$info=$this->Sanpham_model->get_info($id);
			$info2=$this->ThongtinSP_model->get_info($id);
			//pre($info);
			
			$this->data['info']= $info;
			$this->data['info2']= $info2;
			//pre($info2);
			$this->data['temp'] = 'frontend/home/ChiTietSP';
			$this->load->view('frontend/layout', $this->data);
		}
			
	}
?>