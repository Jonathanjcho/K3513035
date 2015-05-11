<?php if (! defined('BASEPATH')) exit('No direct script access
allowed');
class Siswa extends CI_Controller {

function __construct()
{
 parent::__construct();
 $this->load->library(array('table'));
 $this->load->helper(array('url','form'));
 $this->load->model('siswa_model','',TRUE);
 }
 function index()
 {
 $this->load->view('menu_siswa');
 }
 
 function cetak_semua(){
 $this->load->view('siswa_list');
 }
 
 
 function input()
 {
 $this->load->view('input_siswa');
 }
 
  function cetak_detail($id){
  $data['id']=$id;
 $this->load->view('siswa_detail',$data);
 }
 }