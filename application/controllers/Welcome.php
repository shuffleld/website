<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function main(){
		$this->tp->assign("title","恭喜你smarty安装成功！");
		$this->tp->assign("body","欢迎使用smarty模板引擎");
		$arr = array(1=>'zhang',2=>'xing',3=>'wang');
		$this->tp->assign("myarray",$arr);
		$this->tp->display('main.tpl');
	}
}
