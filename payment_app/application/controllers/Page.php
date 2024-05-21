<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	 public function __construct()
	 {
	   parent::__construct();
	   $this->load->model('payment_model');
	 }

	public function index()
	{
		$data['meta'] = [
			'title' => 'Mustika',
		];

		$this->load->view('home', $data);
	}

	public function list_payment()
	{

		$data['meta'] = [
			'title' => 'list payment mustika',
		];

		$data['mean_salary'] = $this->payment_model->get_dataPayment()->result();

		$this->load->view('list_payment', $data);
	}

	function tambah_data(){
		$this->load->view('tambah_data');
	}

	function tambah_aksi(){
		$nama1 = $this->input->post('nama1');
		$nama2 = $this->input->post('nama2');
		$nama3 = $this->input->post('nama3');
		$percent1 = $this->input->post('percent1');
		$percent2 = $this->input->post('percent2');
		$percent3 = $this->input->post('percent3');
		$pembayaran = $this->input->post('pembayaran');
 
		$data = array(
			'karyawan_1' => $nama1,
			'karyawan_2' => $nama2,
			'karyawan_3' => $nama3,
			'percent_1' => $percent1,
			'percent_2' => $percent2,
			'percent_3' => $percent3,
			'gaji_karyawan_1' => $pembayaran*($percent1/100),
			'gaji_karyawan_2' => $pembayaran*($percent2/100),
			'gaji_karyawan_3' => $pembayaran*($percent3/100),
			'pembayaran' => $pembayaran,
			);
		$this->payment_model->input_data($data,'mean_salary');
		redirect('list_payment');
	}

	

	function edit_data($id){
		$where = array('id' => $id);
		$data['mean_salary'] = $this->payment_model->edit_data($where,'mean_salary')->result();
		$this->load->view('edit_data',$data);
	}


	function edit_aksi(){
		$id = $this->input->post('id');
		$nama1 = $this->input->post('nama1');
		$nama2 = $this->input->post('nama2');
		$nama3 = $this->input->post('nama3');
		$percent1 = $this->input->post('percent1');
		$percent2 = $this->input->post('percent2');
		$percent3 = $this->input->post('percent3');
		$pembayaran = $this->input->post('pembayaran');
	 
		$data = array(
			'karyawan_1' => $nama1,
			'karyawan_2' => $nama2,
			'karyawan_3' => $nama3,
			'percent_1' => $percent1,
			'percent_2' => $percent2,
			'percent_3' => $percent3,
			'gaji_karyawan_1' => $pembayaran*($percent1/100),
			'gaji_karyawan_2' => $pembayaran*($percent2/100),
			'gaji_karyawan_3' => $pembayaran*($percent3/100),
			'pembayaran' => $pembayaran,
			);
	 
		$where = array(
			'id' => $id
		);
	 
		$this->payment_model->update_data($where,$data,'mean_salary');
		redirect('list_payment');
	}
	

	function hapus($id){
		$where = array('id' => $id);
		$this->payment_model->hapus_data($where,'mean_salary');
		redirect('list_payment');
	}
}