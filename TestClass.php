<?php

/**
 * Created by PhpStorm.
 * User: Tanvir
 * Date: 21-Aug-17
 * Time: 5:31 PM
 */
class TestClass
{
    public $var = 'Tanvir Sarker';
    public function myHome()
    {
        return $this->var;
    }

    public function myArr()
    {
        $data['pr'] = 'Mango';
        $data['price'] = '100';
        return $data;
    }

    public function testing()
    {
        return $this->myArr()['pr'];

        //var_dump($this->myArr());
    }
}

$tstCls = new TestClass();

echo $tstCls->testing();

echo phpinfo();
