<?php
class ControllerExtensionModuleNewsletter extends Controller
{
    public function index()
    {
        $this->load->language('extension/module/newsletter');
        $this->load->model('extension/module/newsletter');
        
        $this->model_extension_module_newsletter->createNewslettersubscribe();
        $data['newsletter_title'] = $this->language->get('newsletter_title');
		$data['newsletter_placeholder'] = $this->language->get('newsletter_placeholder');
        $data['email'] = $this->language->get('email');
        $data['subscribe'] = $this->language->get('subscribe');
		$data['newsletter_desc'] = $this->language->get('newsletter_desc');
		$data['bg_title'] = $this->language->get('bg_title');
		$data['popup_txt1'] = $this->language->get('popup_txt1');
		$data['popup_txt2'] = $this->language->get('popup_txt2');
		$data['popup_desc'] = $this->language->get('popup_desc');
		$data['chk_text'] = $this->language->get('chk_text');
        
        return $this->load->view('extension/module/newsletter', $data);
       
    }
    
    public function jsonnewsletter()
    {
		$this->load->language('extension/module/newsletter');
        $this->load->model('extension/module/newsletter');
        $json = array();
        $json['messagestatus'] = $this->model_extension_module_newsletter->NewsletterSubscribes($this->request->post);
        $data['text_success_already']            = $this->language->get('text_success_already');
        $data['text_success_add']        = $this->language->get('text_success_add');
        if ($json['messagestatus'] == 'Email Already Exist') {
            $json['fail'] = $data['text_success_already'];
        } else {
            $json['success'] = $data['text_success_add'];
        }
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
    
}
