<?php 

    class BankAccount {
    private $accountNumber;
    private $balance;
    private $name;
    
    public function setAcc($accountNumber) {
        $this->accountNumber = $accountNumber;
    }

    public function setBal($balance) {
        $this->balance = $balance;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getAcc() {
        return $this->accountNumber;
    }

    public function getBal() {
        return $this->balance;
    }

    public function getName() {
        return $this->name;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            return true;
        }
        return false;
    }

    public function transaction($action, $amount) {
        if ($action === 'deposit') {
            $this->deposit($amount);
            return;
        } elseif ($action === 'withdraw') {
            $this->withdraw($amount);
            return;
        } else {
            echo "ERROR";
        }
    }
}

class Customer{
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function setName($name) {
        $name = trim($name);

        if ($name === "") {
            return false;
        }

        $this->name = $name;

        return true;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }
}

    $account = new BankAccount();

    $account->setAcc(1);
    $account->setBal(100);
    $account->setName("John");

    // $account->deposit(100);
    // $account->deposit(1000);

    // $account->withdraw(100);

    $account->transaction("withdraw", 10);

    $customer = new Customer("John doe", 10000);

?>