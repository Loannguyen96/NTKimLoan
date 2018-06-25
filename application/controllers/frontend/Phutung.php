<?php 
	Class Phutung extends MY_Controller{
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
			$where['where']=array('Loai'=>'02');
			$total=$this->Sanpham_model->get_total($where);
			//pre($total);
			$this->data['total']=$total;
			//load ra thu vien phan trang
			$this-> load-> library('pagination');
			$config = array();
			$config['total_rows'] = $total;
			$config['base_url'] = frontend_url('Phutung/index/');
			$config['per_page'] = 2;//so luong san pham hien thi tren 1 trang
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
			 
			//$input=array();
			//$input['limit']=array($config['per_page'],$segment);

			$master=$this->Masterdata_model->get_list();
			$query="SELECT thongtinsanpham.*,sanpham.*,masterdata.Name, masterdata.Value FROM `thongtinsanpham` JOIN sanpham ON thongtinsanpham.ID=sanpham.ID JOIN masterdata on thongtinsanpham.TinhTrang=masterdata.Name  WHERE sanpham.Loai='02' LIMIT ".$segment.",".$config['per_page'];
			$sql=$this->db->query($query);
			$info=$sql->result();
			$data = array();

			$this->data['info']= $info;
			$this->data['temp'] = 'frontend/home/Phutung';
			$this->load->view('frontend/layout', $this->data);
		}

			
	}
?>