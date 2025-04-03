<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include 'class.php';
        include 'fileClass.php';

        // Create acccount
        $account1 = new Account("tite");
        $account2 = new Account("tite2");
        $account3 = new Account("tite3");
        $account4 = new Account("tite4");

        // Create bank account object
        $savingAccount = new SavingAccount(1000, 3);
        $checkingAccount = new CheckingAccount(500, 200);

        $savingAccount2 = new SavingAccount(1000, 3);
        $checkingAccount2 = new CheckingAccount(500, 200);

        // Create Customer
        $customer1 = new Customer("TITENG BALIKO", 40, "004");
        $customer2 = new Customer("TITENG STRAIGHT", 100, "005");

        $customer1->openAccount($account1, $savingAccount);
        $customer1->openAccount($account2, $checkingAccount);

        $customer2->openAccount($account3, $savingAccount2);
        $customer2->openAccount($account4, $checkingAccount2);

        // Create bank
        $bank = new Bank();

        $bank->addCustomer($customer1);
        $bank->addCustomer($customer2);

        echo $bank->verifyCustomer($customer1) . "<br>";
        echo $bank->verifyCustomer($customer2) . "<br>";

        echo '<a href="https://ca.pinterest.com/pin/malupiton-bossing-boss-dila-gif-malupiton-bossing-boss-dila-malupiton-discover-share-gifs--675610381637196674/"> <img src="https://play-lh.googleusercontent.com/GZtSB3al75utdpSmC15fs_8SntbLn3LviArTh-xHFmTc4OFONA_mEsIVIPWV1sMW8lY=w526-h296-rw" alt=""> </a>' . '<br>';
            
        echo "Interest: " . $savingAccount->getInterestRate() . "<br>";
        echo "<hr>";

        

        echo $account1->getAccountNumber() . "<br>";
        echo $account2->getAccountNumber() . "<br>";

        echo $customer1->getName() . "<br>";
        echo $customer1->getAge() . "<br>"; 

        echo $customer2->getName() . "<br>";
        echo $customer2->getAge() . "<br>";   
   
        // Process transaction
        $bank->processTransaction($customer2->getAccounts()[0]['bankAccount'], 999);
        $bank->processTransaction($customer2->getAccounts()[1]['bankAccount'], 10);

        // echo "Closing Account: " . $account1->getAccountNumber() . "<br>";
        // $customer1->closeAccount($account1);

        echo "Closing Account: " . $customer1->getName() . "<br>";
        $bank->removeCustomer($customer1);

        // Display customer
        foreach($bank->getCustomer() as $customer) {
            
            echo "Customer name: " . $customer->getName() ."<br>";
            echo "Customer id: " . $customer->getId() ."<br>";
            echo "Customer age: " . $customer->getAge() ."<br>";

            foreach($customer->getAccounts() as $account) {
                echo "Account id: " . $account['account']->getAccountNumber() . '<br>'; 
                echo "Balance: " . $account['bankAccount']->getBal() . '<br>';
            }
            
            echo "<br>";
        }

    ?>

    
</body>
</html>