<?php

return [
    'products.products' => [
        'index' => 'products::products.list resource',
        'create' => 'products::products.create resource',
        'edit' => 'products::products.edit resource',
        'destroy' => 'products::products.destroy resource',
    ],
    'menu.productitems' => [
        'index' => 'products::product-items.list resource',
        'create' => 'products::product-items.create resource',
        'edit' => 'products::product-items.edit resource',
        'destroy' => 'products::product-items.destroy resource',
    ],
];
