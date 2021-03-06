<?php
// $Id: image_mime.php,v 1.1.1.1 2012/03/17 09:28:15 ohwada Exp $

//=========================================================
// webmap3 module
// 2012-03-01 K.OHWADA
//=========================================================

if( ! defined( 'XOOPS_TRUST_PATH' ) ) die( 'not permit' ) ;

//=========================================================
// class webmap3_lib_image_mime
//=========================================================
class webmap3_lib_image_mime
{
	var $_EXTS  = array('gif','jpg','jpeg','png');
	var $_MIMES = array('image/gif','image/jpeg','image/pjpeg','image/png','image/x-png');

//---------------------------------------------------------
// constructor
//---------------------------------------------------------
function webmap3_lib_image_mime()
{
	//
}

function &getInstance()
{
	static $instance;
	if (!isset($instance)) {
		$instance = new webmap3_lib_image_mime();
	}
	return $instance;
}

//---------------------------------------------------------
// get param
//---------------------------------------------------------
function get_exts()
{
	return $this->_EXTS ;
}

function get_mimes()
{
	return $this->_MIMES ;
}

// --- class end ---
}

?>