<?php
//for loading admin site views
function get_views($page,$title=FALSE,$data=FALSE)
{
	$title2['title']=$title;
	$__CI =& get_instance();
	$__CI->load->view($__CI->config->item('admin_site_folder').'admin_common/top_script',$title2);
	$__CI->load->view($__CI->config->item('admin_site_folder').'admin_common/header');
	$__CI->load->view($__CI->config->item('admin_site_folder').$page,$data);
	$__CI->load->view($__CI->config->item('admin_site_folder').'admin_common/footer');
	$__CI->load->view($__CI->config->item('admin_site_folder').'admin_common/bottom_script');
}

//for loading user site views
function get_view($page,$title=FALSE,$data=FALSE)
{
	$title2['title']=$title;
	$__CI =& get_instance();
	$__CI->load->view('user_common/top_script',$title2);
	$__CI->load->view('user_common/header');
	$__CI->load->view($page,$data);
	$__CI->load->view('user_common/footer');
	$__CI->load->view('user_common/bottom_script');
}

function rsFileUpload($file){
	$rsCI =&get_instance();
	$output = [];
	$output['uri']  = 'file_dir';
	$output['url']  = 'url';

	$config['upload_path']          = './uploads/';
	$config['allowed_types'] = 'gif|jpg|png|mp4|pdf|wav';
	/*$config['max_size']     = '10000';
	$config['max_width'] = '1920';
	$config['max_height'] = '1920';*/

	//$config['allowed_types']        = 'gif|jpg|png|MP4|WMV|PDF';

	$rsCI->load->library('upload', $config);
	if ( ! $rsCI->upload->do_upload($file))
	{
	   $output['error'] = $rsCI->upload->display_errors();
	}
	else
	{
	   $output['data'] = $rsCI->upload->data();
	}



	return $output;
}

?>