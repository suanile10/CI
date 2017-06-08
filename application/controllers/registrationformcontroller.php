<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Registrationformcontroller extends CI_Controller {

        public function registrationForm()
        {
                $this->load->view('registrationform');
        }

        public function welcome(){
		echo "Hello Nepal, a beautiful Nepal";
	}
}
?>