<?php

class Order extends CI_Controller
{
public function index()
{
$data['order'] = $this->Order_model->getAllOrder();
$this->load->view('order/index', $data);
}

}
