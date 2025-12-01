<?php

class BankAccount
{
    public function __construct(
        public string $owner,
        private float $balance
    ) {
    }

    public function deposit(float $amount)
    {
        if ($amount <= 0) {
            echo "jabut poz depozitam {$this->owner}.<br>\n";
            return;
        }

        $this -> balance + $amount;
        echo "ielikia {$amount} konta {$this->owner}.<br>\n";

        
    }
    public function withdraw(float $amount)
    {
        if ($amount <= 0) {
            echo "summa nevar but neg {$this->owner}.<br>\n";
            return;
        }
         if ($amount > $this->balance) {
            echo "nav cac ching prieks {$this->owner}.<br>\n";
            return;
        }
        $this->balance -= $amount;
        echo "iznemts {$amount} no {$this->owner} konta.<br>\n";
    }
    public function printInfo(): void
    {
        $balanceFormatted = number_format($this->balance, 2);
        echo "owneris: {$this->owner} | balance: {$balanceFormatted}.<br>\n";
    }
}