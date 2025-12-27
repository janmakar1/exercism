<?php

declare(strict_types=1);

class BankAccount
{
    private $isOpened;
    private $balance;

    public function open()
    {
        if ($this->isOpened) {
            throw new Exception("Error: account already opened");
        } else {
            $this->isOpened = true;
            $this->balance = 0;
        }
    }

    public function close()
    {
        if ($this->isOpened) {
            $this->isOpened = false;
        } else {
            throw new Exception("Error: account not open. Account is already closed");
        }
    }

    public function balance(): int
    {
        if ($this->isOpened) {
            return $this->balance;
        } else {
            throw new Exception("Error: account not open. The account is closed!");
        }
    }

    public function deposit(int $amt)
    {
        if ($amt < 0) {
            throw new InvalidArgumentException("amount must be greater than 0");
        }

        if ($this->isOpened) {
            $this->balance += $amt;
        } else {
            throw new Exception("Error: account not open. You cannot deposit into a closed account!");
        }
    }
    
    public function withdraw(int $amt)
    {
        if ($amt < 0) {
            throw new InvalidArgumentException("amount must be greater than 0");
        }

        if ($this->isOpened) {
            if ($this->balance - $amt < 0) {
                throw new InvalidArgumentException("amount must be less than balance");
            } else {
                $this->balance -= $amt;
            }
        } else {
            throw new Exception("Error: account not open. You cannot withdraw from a closed account!");
        }
    }
}
