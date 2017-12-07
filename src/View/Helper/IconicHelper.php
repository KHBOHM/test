<?php
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

/**
 * Iconic helper
 */
class IconicHelper extends Helper
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function icon($name){
    	echo '<span class="oi oi-'.$name.'" aria-hidden="true"></span>';
    }

}
