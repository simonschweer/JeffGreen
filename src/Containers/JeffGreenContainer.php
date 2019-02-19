<?php

namespace JeffGreen\Containers;

use Plenty\Plugin\Templates\Twig;

class JeffGreenContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('JeffGreen::Stylesheet');
    }
}