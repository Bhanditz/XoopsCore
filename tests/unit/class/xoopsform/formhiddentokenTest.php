<?php
require_once(dirname(__FILE__).'/../../init_new.php');

/**
* PHPUnit special settings :
* @backupGlobals disabled
* @backupStaticAttributes disabled
*/
class XoopsFormHiddenTokenTest extends \PHPUnit_Framework_TestCase
{
    protected $myClass = 'XoopsFormHiddenToken';
    
    public function test___construct()
	{
		$instance = new $this->myClass();
        $this->assertInstanceOf('Xoops\\Form\\Token', $instance);
    }
        
}
