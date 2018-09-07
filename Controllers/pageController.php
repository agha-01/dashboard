<?php 
class pageController extends Controller{
	public function __construct(){
		Controller::__construct();
	}
	public function home(){
		Controller::$view->view('home');

	}
	public function login(){
		Controller::$view->view('login');
	}
	public function about(){
		Controller::$view->view('about',$str);
	}
	public function a_exit(){
		Controller::$view->view('a_exit');
	}
	public function news(){
		Controller::$view->view('news');
	}
	
	public function editnews($str){
		Controller::$view->view('editnews',$str);
	}
	public function addnews(){
		Controller::$view->view('addnews');
	}
	public function userlist(){
		Controller::$view->view('userlist');
	}
	public function addadmin(){
		Controller::$view->view('addadmin');
	}
	public function adminlist(){
		Controller::$view->view('adminlist');
	}
	public function editusers($str){
		Controller::$view->view('editusers',$str);
	}
	public function elanlar(){
		Controller::$view->view('elanlar');
	}
	public function updateUser(){
		Controller::$view->view('updateUser');
	}
	public function editelanlar(){
		Controller::$view->view('editelanlar');
	}
	public function editadmin($str){
		Controller::$view->view('editadmin',$str);
	}
	public function adminadd(){
		Controller::$view->view('adminadd');
	}
	public function newsadd(){
		Controller::$view->view('newsadd');
	}
	public function adminedit(){
		Controller::$view->view('adminedit');
	}
	public function newsedit($str=null){
		Controller::$view->view('newsedit',$str);
	}
	public function delete($str=null){
		Controller::$view->view('delete',$str);
	}
	public function elanlaredit(){
		Controller::$view->view('elanlaredit');
	}
	public function order_pages($str){
		Controller::$view->view('order_pages',$str);
	}
	public function orderSave(){
		Controller::$view->view('orderSave');
	}
	public function mail(){
		Controller::$view->view('mail');
	}
	
	
	public function existsMethod($str){
		if (method_exists($this, $str)) {
			return  true;
		}
		else{
			return false;
		}
	}
}




?>	