<?php

class Employee {
    private $name;
    private $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->setSalary($salary);
    }

    public function setSalary($amount)
    {
        if ($amount < 0) {
            throw new Exception("Salary cannot be negative");
        }
        $this->salary = $amount;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

$emp = new Employee("Rahim", 30000);
echo "Salary: " . $emp->getSalary();
