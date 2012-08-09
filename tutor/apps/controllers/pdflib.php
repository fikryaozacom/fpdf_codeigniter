<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Pdflib extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->library('fpdf');
  }

  function index() {
    $header = array('Name','end','stay','Id');
    $data = array(
        array('Austria', 'Vienna', '83859', '8075'),
        array('Belgium', 'Brussels', '30518', '10192'),
        array('Denmark', 'Copenhagen', '43094', '5295'),
        array('Finland', 'Helsinki', '304529', '5147'),
        array('France', 'Paris', '543965', '58728'),
        array('Germany', 'Berlin', '357022', '82057')
    );
    $this->fpdf->AddPage();
    $this->fpdf->SetFont('Arial','',14);
    $this->fpdf->SetLeftMargin(20);
    $this->fpdf->FancyTable($header, $data); 
    $this->fpdf->Output();
  }
}