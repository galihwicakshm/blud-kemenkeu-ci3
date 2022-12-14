 
 <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Recaptcha extends CI_Controller
    {

        public function index()
        {

            $this->load->library('recaptcha');
            $recaptcha = $this->input->post('g-recaptcha-response');
            if (!empty($recaptcha)) {
                $response = $this->recaptcha->verifyResponse($recaptcha);
                if (isset($response['success']) and $response['success'] === true) {
                    echo "You got it!";
                }
            }

            $data = array(
                'widget' => $this->recaptcha->getWidget(),
                'script' => $this->recaptcha->getScriptTag(),
            );
            $this->load->view('recaptcha', $data);
        }
    }
