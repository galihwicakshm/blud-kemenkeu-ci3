<?php
if ($this->session->userdata('level') != 2) {
    redirect('auth');
}
require_once('v_head.php');
require_once('v_nav.php');
// require_once('v_nav_baru.php');
require_once('v_sidebar.php');
require_once('v_content.php');
require_once('v_footer.php');
