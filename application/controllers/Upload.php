<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class Upload extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function __construct() {
        parent::__construct();
    }

	public function index() {
		$this->load->view('progress-bar');
	}

    public function fileUpload() {
        $json = array();
        if (!empty($_FILES['file']['name'])) {
            // Configuration Upload file
            $config['upload_path'] = 'assets/uploads/img';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = 2048;
            $config['filename'] = $_FILES['file']['name'];

            // Load Libraries Codeigniter Upload
            $this->load->library('upload', $config);
            
            // Proses File Upload
            if (!$this->upload->do_upload('file')) {
                $error = array('error' => $this->upload->display_errors());
                $json = $this->upload->display_errors();;
            } else { 
                $uploadData = $this->upload->data();
                $json = 'Success'; 
            }
            header('Content-Type: application/json');
            echo json_encode($json);
        }
    }

    public function fileUploadExcel() {
        $json = array();
        if (!empty($_FILES['file']['name'])) {
            // Configuration Upload file
            $config['upload_path'] = 'assets/uploads/';
            $config['allowed_types'] = 'xls|xlsx';
            $config['max_size'] = 2048;
            $config['filename'] = $_FILES['file']['name'];

            // Load Libraries Codeigniter Upload
            $this->load->library('upload', $config);
            
            // Proses File Upload
            if (!$this->upload->do_upload('file')) {
                $error = array('error' => $this->upload->display_errors());
                $json = $this->upload->display_errors();;
            } else { 
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
                $spreadsheet = $reader->load($this->upload->data('full_path'));
                $rowData = $spreadsheet->getActiveSheet()->toArray();
                for($i = 1; $i < count($rowData); $i++) {
                    $username = ''; $password = '';
                    if ($username == '') { $username = $rowData[$i][0]; }
                    if ($password == '') { $password = $rowData[$i][1]; }
                    $data = array(
                        'username' => $username,
                        'password' => $password
                    );
                    $this->db->insert('admin', $data);
                }
                $json = 'Success'; 
            }
            header('Content-Type: application/json');
            echo json_encode($json);
        }
    }
}
