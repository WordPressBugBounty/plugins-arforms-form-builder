<?php

global $wpdb, $armainhelper, $arfieldhelper, $arformcontroller, $arrecordcontroller, $arfieldcontroller;
$form->form_css = ( $form->form_css );
$aweber_arr     = '';
$aweber_arr     = $form->form_css;
$newarr         = array();

if ( '' != $aweber_arr ) {
	$arr = maybe_unserialize( $aweber_arr );
	foreach ( $arr as $k => $v ) {
		$newarr[ $k ] = $v;
	}
}
$inline_css_with_style_tag = '';
$inline_css_without_style  = '';
if ( ARF_TC_SLUG == $field['type'] ) {
	$formid = ( isset( $form->id ) ) ? $form->id : '';
	
	$description_style = ( isset( $field['field_width'] ) and $field['field_width'] != '' ) ? 'style="width:' . $field['field_width'] . 'px;"' : '';

	$return_string .= '<div class="arfformfield">';
		$return_string .= '<div class="controls">';
			$return_string .= '<div id="tccaptcha_res_'.$formid.'_'.$arf_data_uniq_id.'">'; 
			$return_string .= '</div>';
			$return_string .= ( isset( $field['description'] ) && $field['description'] != '' ) ? '<div class="arf_field_description formdescription_style arf_heading_description" ' . $description_style . '>' . $field['description'] . '</div>' : '';
		$return_string .= '</div>';
	$return_string .= '</div>';
}
