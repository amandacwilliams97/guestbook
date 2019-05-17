<?php
/**
 * Created by PhpStorm.
 * User: mandy
 * Date: 5/10/2019
 * Time: 11:19 AM
 */

use PHPUnit\Framework\TestCase as TestCase;

class GuestbookTest extends TestCase
{
    private$guestbook;

    public function setUp()
    {
        $this->guestbook = new Guestbook();
    }

    //Test to ensure that the guestbook
    //contains at least one entry
    public function  testCountGuestbookEntries()
    {
        $entries = $this->guestbook->viewAll();
        $this->assertInternalType('array', $entries);
        $this->assertTrue(count($entries) >0);
    }

    public function tearDown()
    {
        unset($this->guestbook);
    }

    //Test to ensure that the deleteAll() function
    //returns true and creates an empty array
    public function testDeleteAll()
    {
        $return = $this->guestbook->deleteAll();
        $entries = $this->guestbook->viewAll();
        $this->assertInternalType('array', $entries);
        $this->assertTrue(count($entries) == 0);
    }
}

//this is the command you type to run this test program
//...]$ vendor/bin/phpunit --bootstrap vendor/autoload.php tdd/GuestbookTest
//call phpunit
//bootstrap ... autoload runs auto load before testing
//tdd/GuestbookTest instructs to execute tests of this class