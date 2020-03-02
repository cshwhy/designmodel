<?php
interface  man{
    public function run();

    public function say();

    public function crawl();
}

class human implements man{

    public function run()
    {
        echo '我是实现了人类接口 run 这个方法';
        // TODO: Implement run() method.
    }

    public function say()
    {
        echo '我是实现了人类接口 say 这个方法';
        // TODO: Implement say() method.
    }

    public function crawl()
    {
        echo '我是实现了人类接口 crawl 这个方法';
        // TODO: Implement crawl() method.
    }
}

abstract class factory{

    abstract public static function createHuman();

    abstract public static function  createWoman();
}

class createMnaFactory extends factory{

    public static function createHuman()
    {

        return new human();
        // TODO: Implement createHuman() method.
    }

    public static function createWoman()
    {
        // TODO: Implement createWoman() method.
    }
}

$human=createMnaFactory::createHuman();
$human->say();