<?php


namespace Hanson\Rainbow;

use Encore\Admin\Extension;

class Rainbow extends Extension
{
    public $name = 'rainbow';

    public $assets = __DIR__.'/../resources/assets';

    public function blue()
    {
        return __DIR__.'/../resources/assets/blue';
    }

    public function whiteBlue()
    {
        return __DIR__.'/../resources/assets/white-blue';
    }

    public function red()
    {
        return __DIR__.'/../resources/assets/red';
    }

    public function orange()
    {
        return __DIR__.'/../resources/assets/orange';
    }

    public function yellow()
    {
        return __DIR__.'/../resources/assets/yellow';
    }

    public function olive()
    {
        return __DIR__.'/../resources/assets/olive';
    }

    public function cyan()
    {
        return __DIR__.'/../resources/assets/cyan';
    }

    public function green()
    {
        return __DIR__.'/../resources/assets/green';
    }

    public function origin()
    {
        return __DIR__.'/../resources/assets/origin';
    }
}
