<?php
$invoice = [
    "invoiceNumber" => "INV-123",
    "invoiceDate" => "2021-01-02",
    "invoiceItem" => [

    [

        "item" => "item1",
        "quantity" =>  2,
         "price" => 100,
    ],
    [
        "item" => "item2",
        "quantity"=> 3,
        "price"=> 200
    ],
    [
        "item" => "item3",
        "quantity"=> 4,
        "price"=> 200
    ]

    ]
    ];
    echo $invoice["invoiceNumber"];
    echo PHP_EOL;
    echo "----------------------------------";
    echo PHP_EOL;
    echo $invoice['invoiceDate'];
    echo "----------------------------------";
    echo PHP_EOL;
    echo "----------------------------------";
      foreach($invoice['invoiceItem'] as $item){
        // echo $item['item'] . " - " . $item['quantity'] . " - " . $item['price']; //string concatenation
        echo "{$item['item']} - {$item['quantity']} - {$item['price']}";
        echo PHP_EOL;
    };