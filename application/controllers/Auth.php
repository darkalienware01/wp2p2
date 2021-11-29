<?php
class Auth extends CI_Controller
{
    public function index()
    {
		$this->form_validation->set_rules('email', 'Email Address','required|trim|valid_email',
		['required' => 'Email is required.',
		'valid_email' => 'Invalid email.'
		]);
		$this->form_validation->set_rules('password', 'Password','required|trim',
		['required' => 'Password is required.'
		]);
		if ($this->form_validation->run() == false) {
			$data['judul'] = 'Login';
			$data['user'] = '';

			$this->load->view('templates/auth_header');
			$this->load->view('auth/login');
			$this->load->view('templates/auth_footer');
    }else{
		$this->_login();
	}
	}
	
	private function _login(){
		
		$email    = htmlspecialchars($this->input->post('email', true));
		$password = $this->input->post('password', true);
		$user     = $this->ModelUser->cekData(['email'=> $email])->row_array();
		if ($user){
			if ($user['is_active'] == 1)
			{
				//cek password
				
				if (md5($password)==$user['password'])
				{
					$data     = ['email' => $user['email'], 'role_id' => $user['role_id']];
					$this->session->set_userdata($data);
					if ($user['role_id'] == 1)
					{
						redirect('admin');
					}
					else
					{
						if ($user['image'] == 'default.jpg'){ 
					$this->session->set_flashdata('pesan','<div class="alert alert-info alert-message" role="alert">Silahkan Ubah Profile Anda untuk Ubah Photo Profil</div>'); }
						redirect('user');}
						} else {
						$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Password salah!!</div>'); 
						redirect('Auth');}
						} else {
						$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">User belum diaktifasi!!</div>');
						redirect('Auth');}
						} else {
						$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Email tidak terdaftar!!</div>');
						redirect('Auth');}
						}
						
						
				public function blok()
			{
				$this->load->view('Auth/blok');
			}
				public function gagal()
			{
			$this->load->view('Auth/gagal');
			}
			public function logout()
			{
			$this->session->sess_destroy();
			redirect('Admin');
			}
				
				public function register()
			{
				if ($this->session->userdata('email')) {
				redirect('user');
			}
			$this->form_validation->set_rules('nama', 'Nama Lengkap','required', 
			['required' => 'Name is required.']);	
			$this->form_validation->set_rules('email', 'Alamat Email',
			'required|trim|valid_email|is_unique[user.email]', [
			'valid_email' => 'Invalid Email.',
			'required' => 'Email is required.',
			'is_unique' => 'Email already registered.'
			]);
			$this->form_validation->set_rules('password1', 'Password','required|trim|min_length[3]|matches[password2]', [
			'matches' => "Password doesn't match.",
			'min_length' => 'Password is too weak.'
			]);
			$this->form_validation->set_rules('password2', 'Repeat
			Password', 'required|trim|matches[password1]');
			
			if ($this->form_validation->run() == false) {
			$data['judul'] = 'register Member';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('Auth/register');
			$this->load->view('templates/auth_footer');
			} else {
				$email = $this->input->post('email', true);
				$data = [
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'email' => htmlspecialchars($email),
				'image' => 'default.jpg',
				'password' => md5($this->input->post('password1')),
				'role_id' => 2,
				'is_active' => 0,
				'tanggal_input' => time()
				];
				
				$this->ModelUser->simpanData($data); //menggunakan model
				
				$this->session->set_flashdata('pesan', '<divclass="alert alert-success alert-message" role="alert">Selamat!!akun member anda sudah dibuat. Silahkan Aktivasi Akun anda</div>');
				redirect('Auth');
				}
				}

						}
				




