<?php

class Controller
{
		
	public static function app($controllerName )
	{
		$controllerName = strtolower($controllerName);
		return PATH . '/app/controllers/' . $controllerName . '.php';
			
	}
	
	public static function admin($controllerName )
	{
		$controllerName = strtolower($controllerName);
		return PATH . '/admin/controllers/' . $controllerName . '.php';
			
	}
	
};

class View
{
	
	public static function app($viewName )
	{
		$viewName = strtolower($viewName);
		return PATH . '/app/views/' . settings('theme') . '/' .  $viewName . '.php';
			
	}
	
	public static function admin($viewName)
	{
		$viewName = strtolower($viewName);
		return PATH . '/admin/views/' . settings('admin_theme') . '/' .  $viewName . '.php';
			
	}
	
};

class Url
{
	
	public static function site($url = false)
	{
		return URL . '/' . $url; //return URL_DIR . '/' . $url;
	}
	
	
	public static function app($url = false)
	{
		return URL . '/app/' . $url;
	}
	
	public static function admin($url = false)
	{
		return URL . '/admin/' . $url;
	}
	
	public static function pub($url = false)
	{
		return URL . '/app/views/' . settings('theme') . '/public/' . $url;
	}
	
	public static function adpub($url = false)
	{
		return URL . '/admin/views/' . settings('admin_theme') . '/public/' . $url;
	}
		
};