<?php

namespace JeffGreen\Containers;

use Plenty\Plugin\Templates\Twig;

class JeffGreenItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('JeffGreen::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}