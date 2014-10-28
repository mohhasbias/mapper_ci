<?php

function addCssClass($class_name, $condition = TRUE)
{
	return $condition? $class_name : '';
}

function addActiveClass($class_name, $url_segment)
{
	return addCssClass($class_name, current_url() === site_url($url_segment));
}