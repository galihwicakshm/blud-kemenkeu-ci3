<?php
if ($this->session->userdata('level') != 1) {
    redirect('auth');
}
require_once('v_head_backend.php');
require_once('v_nav_backend.php');
require_once('v_sidebar_backend.php');
require_once('v_content_backend.php');
require_once('v_footer_backend.php');
