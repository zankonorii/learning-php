<?php

    function test(string $name, string $value, int $expire)
    {
        var_dump($name);
        var_dump($value);
        var_dump($expire);

    }


    test('name', 'value', 1);    // return OK!

    test(123,5555555,"1");  // return OK!
