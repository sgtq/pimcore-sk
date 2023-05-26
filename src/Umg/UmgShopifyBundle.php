<?php

namespace Umg\ShopifyBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class UmgShopifyBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
