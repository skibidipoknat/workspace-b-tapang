<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    include 'function.php';

    $item = new Item("Lebron Jersey", "Laker team jersey", 20);

    echo "Name: " . $item->getName() . "<br>";
    echo "Description: " . $item->getDescription() . "<br>";
    echo "Starting Price: " . $item->getStartingPrice() . "<br><hr>";

    $item->listItem("Kurt");
    echo "Seller: ". $item->getSeller() . "<br><hr>";

    $item->placeBid("Joshua", 100);
    echo "Bidder: ". $item->getBidder() . "<br>";
    echo "Amount: ". $item->getAmount() . "<br><hr>";

    $bidder = new Bidder("Batong Nasisinghot", 30);
    
    $bidder->bidOnItem("Batong Bakal", 100);
    echo "Item: ". $bidder->getItem() . "<br>";
    echo "Amount: ". $bidder->getAmount() . "<br>";
    ?>
</body>
</html>