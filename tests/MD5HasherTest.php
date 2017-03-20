<?php

use PHPUnit\Framework\TestCase;

class MD5HasherTest extends TestCase
{
    /**
     * @var
     */
    protected $hasher;

    /**
     * 服务注入 类似于 构造方法
     *
     * @author: Luoyan
     */
    public function setUp()
    {
        $this->hasher = new \Destiny\Hasher\MD5Hasher();
    }

    /**
     * 测试 MD5Hasher 类 make 方法
     *
     * @author: Luoyan
     */
    public function testMD5HasherMake()
    {
        $password = md5('password');
        $passwordTwo = $this->hasher->make('password');

        $this->assertEquals($password, $passwordTwo);
    }

    /**
     * @author: Luoyan
     */
    public function testMD5HasherMakeWithSale()
    {
        $passwordTwo = $this->hasher->make('password', ['salt' => 'luoyan']);
        $password = md5('passwordluoyan');
        $this->assertEquals($password, $passwordTwo);
    }
}