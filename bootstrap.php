<?php

	$base = dirname(realpath(__FILE__));

	$paths	= implode(PATH_SEPARATOR, 
							array(	get_include_path(),
									$base.PATH_SEPARATOR.'library',
									$base.PATH_SEPARATOR.'config'));

	set_include_path($paths);

	function auto_load($class)
	{
		@include_once($class.'.php');	
	}

	spl_autoload_register('auto_load');
