<?php 
    class Account 
    {
        private string $name;
        private float $balance = 0;

        private static int $acountCount = 0;

        public function __construct(string $name, float $initialDeposit = 0 ) 
        {
            $this->name = $name;
            $this->balance = $initialDeposit;
            
            self::$acountCount++;

        }
        public function deposit(float $amount) : void 
        {
            $this->balance += $amount;

        }
        public function withdraw(float $amount) : void
        {
            if ($amount > $this->balance) // ERROR HANDLING CONDITION 
            {
                echo "Insufficient funds";
                return;
                }
                $this->balance -= $amount;

        }
        public function getBalance() 
        {
            return $this->balance;
        }

        public static function getTotalAccount()
        {
            return self::$acountCount;
        }



    }
$acc1 = new Account("USER1", 100); 
$acc1->deposit(50);                   
$acc1->withdraw(30);                  
echo $acc1->getBalance().PHP_EOL;            

$acc2 = new Account("USER2", 200);   

echo Account::getTotalAccount();  
