<?php

namespace JeffGreen\Containers;

use Plenty\Plugin\Templates\Twig;

class JeffGreenItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('JeffGreen::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}