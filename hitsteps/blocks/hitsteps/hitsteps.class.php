<?php
namespace Block;
/**
 * hit steps - Main Class
 * 
 * 
 * 
 * @copyright Edward Gao
 *
 * @license MIT
 *
 * @package hitsteps
 * @version 1.0
 * @author  Edward Gao <edward.gao21@gmail.com>
 * @link    https://github.com/EdwardG21
 */
class hitsteps extends \SCHLIX\cmsBlock
{
	public function Run()
	{
                $hit_steps_code = $this->config['str_hit_steps_code'];
                			
                $this->loadTemplateFile('view.block',compact(array_keys(get_defined_vars())));
  	}
}
