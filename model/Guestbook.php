<?php
/**
 * Created by PhpStorm.
 * User: mandy
 * Date: 5/10/2019
 * Time: 11:17 AM
 */

class Guestbook
{
    private $_entries = array(
        array('name'=>'Celine',
            'message'=>'Hi'),
        array('name'=>'Ean',
            'message'=>'Hello')
    );

    function viewAll()
    {
        return $this->_entries;
    }

    function deleteAll()
    {
        $this->_entries=array();
    }
}