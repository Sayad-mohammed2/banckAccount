# 💳 PHP Bank Account System

A simple object-oriented **Bank Account System** built in PHP, demonstrating key OOP concepts including:

- Classes & Objects
- Access Modifiers (`private`, `public`)
- Static Properties & Methods
- Constructor Magic Method (`__construct`)
- Basic Transaction Operations (Deposit, Withdraw)
- Error Handling (e.g. Insufficient Funds)

## 📦 Features

- Create new accounts with an initial deposit
- Deposit money into an account
- Withdraw money with balance checking
- Check current account balance
- Track the total number of created accounts using a static property

## 📂 Example Usage

```php
$acc1 = new Account("USER1", 100);
$acc1->deposit(50);
$acc1->withdraw(30);
echo $acc1->getBalance(); // Output: 120

$acc2 = new Account("USER2", 200);
echo Account::getTotalAccount(); // Output: 2
