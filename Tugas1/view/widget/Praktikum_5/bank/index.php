<?php
require_once 'class_Account.php';

class AccountBank extends Account
{
    public function doTransfer($destination, $uangTranfer)
    {
        Account::withdraw($uangTranfer, false);
        $destination->deposit($uangTranfer, false);

        echo "Transfer sejumlah " .  number_format($uangTranfer, 2, ',', '.') . " dari $this->nama - $this->nomor ke $destination->nama - $destination->nomor sukses! </br>";
    }
}

$Ahmad = new AccountBank('1010', 'Ahmad', 500000);
$kurniawan = new AccountBank('1011', 'kurniawan', 0);
$budi = new AccountBank('1012', 'budi', 0);

$Ahmad->deposit(1000000);
$Ahmad->cetak();

$Ahmad->doTransfer($kurniawan, 1000000);
$Ahmad->cetak();

$Ahmad->doTransfer($budi, 500000);
$Ahmad->cetak();

$kurniawan->cetak();
$budi->cetak();