<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GenerateSertifikat extends CI_Controller {
    
    public function index() {
        $this->load->view('sertifikat/generate_sertifikat.php');
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

            // Lakukan apa pun yang perlu dilakukan dengan data ini, seperti menyimpan ke database atau mengirim email

            // Contoh: Menampilkan data yang diterima
            echo "<h2>Data yang Anda masukkan:</h2>";
            echo "<p>First Name: $first_name</p>";
            echo "<p>Last Name: $last_name</p>";
            echo "<p>Organization: $organization</p>";
            echo "<p>Certificate For: $certificate_for</p>";
            echo "<p>Assigned Date: $assigned_date</p>";
            echo "<p>Email: $email</p>";
        }
    }
}
