<?php

namespace JeffGreen\Containers;

use Plenty\Plugin\Templates\Twig;

class JeffGreenItemListContainer1
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('JeffGreen::Containers.ItemLists.ItemList1', ["item" => $arg[0]]);
    }
}