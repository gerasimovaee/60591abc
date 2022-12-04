<?php
function get_products() {
    return ['1' => ['title'=> 'Лампа Мсюлида', 'Url'=> 'img/item-mseyulida.jpg',],
    '2' =>[
        'title' =>'Диван Рмаериба',
        'url' =>'img/item-rmaeribi.jpg',
    ],
    '3' =>[
        'title' =>'Люстра Блетуб',
        'url' =>'img/item-bletub.jpg',
    ],
    '4' =>[
        'title' =>'Рабочий стол Ннулм',
        'url' =>'img/item-nnulm.jpg',
    ],
    '5' =>[
        'title' =>'Подвесная кровать Асусмер',
        'url' =>'img/item-asusmer.jpg',
    ],
    '6' =>[
        'title' =>'Набор мебели Тре',
        'url' =>'img/item-tre.jpg',
    ]
    ];
}
function get_product_attribute($id, $attr) {
    $products = get_products();
    $result = $products[$id] [$attr] ?? null;
    return $result;
}
function get_product_title($id) {
    return get_product_attribute($id,'title');
}
