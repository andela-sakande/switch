<?php

class Account
{
    public $accounts = [];

    public function addNewUser(int $number, string $name)
    {
        $user = [
            'Acct No' => $number,
            'Owner' => $name,
            'balance' => 0
        ];

        array_push($this->accounts, $user);
    }

    public function showAccounts()
    {
        return $this->accounts;
    }

    public function withdraw(int $accNum, int $amount) : array
    {
        $owner = $this->userExists($accNum);

        $balance = $owner['balance'];

        if ($balance < $amount) {
            die("Onigbese");
        }

        $balance -= $amount;

        return $owner;
    }

    public function deposit(int $accNum, int $amount) : array
    {
        $owner = $this->userExists($accNum);

        $owner['balance'] += $amount;

        return $owner;
    }

    public function getBalance(int $accNum) : array
    {
        $owner = $this->userExists($accNum);

        return $owner;
    }

    public function userExists($accNum)
    {
        $users = $this->accounts;

        foreach ($users as $user) {
            if ($user['Acct No'] == $accNum) {
                $owner =  $user;
            }
        }

        if (! in_array($owner, $this->accounts)) {
            die('User does not exist');
        }

        return $owner;
    }
}

$acc = new Account();
$acc->addNewUser(12234, 'Kolade');
$acc->addNewUser(34455, 'Bukky');
$acc->addNewUser(56778, 'Sodeeq');
$acc->addNewUser(35359, 'Ademola');
// $acc->deposit(12234, 45);
// $acc->withdraw(12234, 2);
print_r($acc->deposit(12234, 45));
