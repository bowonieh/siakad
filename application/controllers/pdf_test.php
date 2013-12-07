<?php
class Pdf_test extends CI_Controller {

	function __construct() {
		parent::__construct();
        
	}
	
	function index(){
	
		$html = '<html>
				<head></head>
				<body>
					<h1>HELLO WORLD!</h1>
				</body>
				</html>
				';
		
		$pdf_filename  = 'laporandatasiswa.pdf';
		$this->load->library('dompdf_lib');
		$this->dompdf_lib->convert_html_to_pdf($html, $pdf_filename, true);
	}
	
}
