<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GenerateSertifikat extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        // Load database library
        $this->load->database();
    }

    public function index() {
        $this->load->view('sertifikat/generate_sertifikat');
    }

    public function submit_form() {
        // Cek apakah form telah disubmit
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            // Ambil nilai dari form
            $first_name = $this->input->post('first_name');
            $last_name = $this->input->post('last_name');
            $organization = $this->input->post('organization');
            $certificate_for = $this->input->post('certificate_for');
            $assigned_date = $this->input->post('assigned_date');
            $email = $this->input->post('email');

            // Simpan data ke dalam database
            $data = array(
                'first_name' => $first_name,
                'last_name' => $last_name,
                'organization' => $organization,
                'certificate_for' => $certificate_for,
                'assigned_date' => $assigned_date,
                'email' => $email
            );
            $this->db->insert('sertifikat', $data);

            // Set pesan sukses
            $data['success_message'] = 'Formulir telah berhasil dikirim!';

            // Muat kembali tampilan
            $this->load->view('sertifikat/generate_sertifikat', $data);
        }
    }
}
