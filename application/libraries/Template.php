<?php
class Template{

    protected $_ci;
    
    function __construct(){
        $this->_ci = &get_instance();
    }
    
    function user($content, $data = NULL){
        $data['nav'] = $this->_ci->load->view('v_nav', $data, TRUE);
        $data['content'] = $this->_ci->load->view($content, $data, TRUE);
        $data['footer'] = $this->_ci->load->view('v_footer', $data, TRUE);
        
        $this->_ci->load->view('v_template', $data);
    }

}