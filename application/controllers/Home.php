<?php
/**
 * Created by PhpStorm.
 * User: Itarsia007
 * Date: 08-04-2019
 * Time: 04:54 PM
 */

class Home extends  CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('SliderModel');
		$this->load->model('PopularTourModel');
		$this->load->model('ContactUsModel');
		$this->load->model('TestimonialModel');
	}

	public  function index()
	 {
		$data['slider']      = $this->SliderModel->fetchSingleRow();
	 	$data['popularTour'] = $this->PopularTourModel->fetchSingleRow();
	 	$data['videoSlider'] = $this->SliderModel->fetchVideoDataToFront();
	 	$this->load->view('front/pages/front_index',$data);
	 }
	 public function visa()
	 {
	 	$this->load->model('VisaModel');
	 	$data['visa'] = $this->VisaModel->fetchDataToFront();
	 	$this->load->view('front/pages/visa',$data);
	 }

	 public function online_booking()
	 {
	 	$this->load->view('front/pages/online-booking');
	 }
	 public function car_on_rent()
	 {
	 	$this->load->model('CarModel');
	 	$data['car'] = $this->CarModel->fetchDataToFront();
	 	$this->load->view('front/pages/car-on-rent',$data);
	 }
	 public function foreign_exchange()
	 {
	 	$this->load->model('ForeignModel');
	 	$data['foreign'] = $this->ForeignModel->fetchDataToFront();
	 	$this->load->view('front/pages/foreign_exchange',$data);
	 }
	 public function travel_insurance()
	 {
	 	$this->load->model('TravelModel');
	 	$data['travelIns'] = $this->TravelModel->fetchDataToFront();
	 	$this->load->view('front/pages/travel_insurance',$data);
	 }
	 public function domestic_international()
	 {
	 	$this->load->model('TourPackageModel');
	 	$data['tourPackage'] = $this->TourPackageModel->fetchTourPackage();
	 	$this->load->view('front/pages/domestic_international',$data);
	 }

	 public function gallery()
	 {
	 	 $this->load->model('ImageGalleryModel');
		 $data['imgGallery'] = $this->ImageGalleryModel->FetchImgGallery();
	 	$this->load->view('front/pages/gallery',$data);
	 }
	 public function contact_us()
	 {
	 	$data['contact'] = $this->ContactUsModel->fetchSingleRow();
	 	$this->load->view('front/pages/contact_us',$data);
	 }
	 public function about_us()
	 {
	 	$this->load->model('AboutModel');
	 	$data['about'] = $this->AboutModel->fetchDataToFront();
	 	$this->load->view('front/pages/about_us',$data);
	 }

	 public function testimonial()
	{
		$data['testimonial'] = $this->TestimonialModel->fetchDataToFront();
		$this->load->view('front/pages/testimonial',$data);
	}

	public function package()
	{
		$this->load->view('front/pages/package');
	}
	public function term_condition()
	{
		$this->load->model('TermConModel');
		$data['terms'] = $this->TermConModel->fetchDataToFront();
		$this->load->view('front/pages/term_condition',$data);
	}
	public function privacy_policy()
	{
		$this->load->model('PrivacyModel');
		$data['privacy'] = $this->PrivacyModel->fetchDataToFront();
		$this->load->view('front/pages/privacy_policy',$data);
	}

	public function details($id)
	{
		$this->load->model('TourPackageModel');
		$data['tourPackage'] = $this->TourPackageModel->fetchDataToDetails($id);

		$this->load->view('front/pages/details',$data);
	}
	
/* -----------------domestic and internatioanl package ---------------- */

	public function domestic_package()
	{
		$this->load->model('DomesticModel');
		$data['domestic'] = $this->DomesticModel->fetchDomestic();
		$this->load->view('front/pages/domestic_package',$data);
	}

	public function domestic_package_details($id)
	{
		$this->load->model('DomesticModel');
		$data['domesticDetails'] = $this->DomesticModel->fetchToDetails($id);
		$this->load->view('front/pages/domestic_details',$data);
	}

	public function international_package()
	{
		$this->load->model('InternationalModel');
		$data['international'] = $this->InternationalModel->fetchDataInter();
		$this->load->view('front/pages/international_package',$data);
	}

	public function international_package_details($id)
	{
		$this->load->model('InternationalModel');
		$data['internationalDetails'] = $this->InternationalModel->fetchToDetails($id);
		$this->load->view('front/pages/international_details',$data);
	}


	/* -------------..//end domestic and internatioanl package -------------------- */
	
	
  
	
}
