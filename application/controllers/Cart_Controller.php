<?php 

Class Cart_Controller extends CI_Controller{

 function __construct(){
 	parent::__construct();
 	$this->load->library('cart');
 	$this->load->model('Product','pro');

 }

public function index()
{
   $data=array();
   $data['result']=$this->pro->show();
   $this->load->view('cart/home',$data);
        
}

public function insert()
{
  $config['upload_path']  ='./uploads/';
  $config['allowed_types'] = 'jpg|jpeg|png|gif';  
  $this->load->library('upload',$config);
  $this->upload->do_upload('userfile');
  $data1=$this->upload->data();
  $image= $data1['file_name'];
  $name=$this->input->post('name');
  $price=$this->input->post('price');
  $description=$this->input->post('description');
  $data=array(
     'name'=>$name,
     'price'=>$price,
     'description'=>$description,
     'status'=>'active',
     'image' =>$image
      );
  $query=$this->pro->insert($data);
  if ($query) {
     $this->session->set_flashdata('message','Data Insert Successfully');
     $this->load->view('cart/add-product');
  }
  else
  {
    echo "data not inserted";
  }

}

public function Add_product(){

	$this->load->view('cart/add-product');
}
public function add_to_cart($id)
{
  
   $product=array();
   $product=$this->pro->show($id);

   $data = array(
                 'id'      => $product[0]['id'],
                 'qty'     => 1,
                 'price'   => $product[0]['price'],
                 'name'    => $product[0]['name'],
                 'image'    => $product[0]['image'],
                
                
            );
    
    $this->cart->insert($data);
    
    $this->cart_page();
    
}

public function cart_page()
{
   
   $data1=array();
   $data1['cartItems']=$this->cart->contents();
   $this->load->view('cart/cart',$data1);
}

}