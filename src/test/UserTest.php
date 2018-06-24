<?php
include_once '../../init.php';
/**
 * Created by PhpStorm.
 * User: fagner
 * Date: 24/06/18
 * Time: 14:10
 */

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    public function testGetUser()
    {
        $location = new Location();
        $location->getLocations(25753);
        $objUser = new User($location);
        $this->assertTrue(is_array($objUser->getUser()));
        $this->assertTrue(is_array($objUser->getUser(517167)));
    }
}
