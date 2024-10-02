<?php

final class Foo
{
    public function __construct()
    {
        if (defined('BUZ')) {
            define('BUZ', 'buz');
        }
    }

    public function buz(): void
    {
        no_exists_func(); // @phpstan-ignore function.notFound

        echo BUZ; // @phpstan-ignore constant.notFound
    }
}
