<?php

use PHPUnit\Framework\TestCase;
/**
 * Created by PhpStorm.
 * User: arun
 * Date: 21/05/2017
 * Time: 9:16 PM
 */
class MD5HasherTest extends TestCase
{
    protected $hasher;

    public function setUp()
    {
        $this->hasher = new \Arun\Hasher\MD5Hasher();
    }

    public function testMD5HasherMake()
    {
        $password = md5('password');
        $passwordTwo = $this->hasher->make('password');

        $this->assertEquals($password,$passwordTwo);
    }

    public function testMD5HasherMakeWithSalt()
    {
        $password = md5('passwordarun');
        $passwordTwo = $this->hasher->make('password',['salt'=>'arun']);

        $this->assertEquals($password,$passwordTwo);
    }

    public function testMD5HasherCheck()
    {
        $password = md5('password');
        $passwordCheck = $this->hasher->check('password',$password);

        $this->assertTrue($passwordCheck);
    }
}