<?php

class payroll {
	private string $fname = "Josh"
	private string $lname = "omsim"

	private float $tax = 50;
	private float $salary = 550;

	public function computeNet(): float {
	return $net + $this->salary - $this->tax;
	}
	public function getEmployeeName() : string {
	return $this->fname. " " . $this->lname;
	}
	public function displayNet(): string {
	return number_format($this->computeNet(),2);
	}

}
    
    $payroll = new payroll();
    echo "Employee Name" ".$payroll->getEmployeeName() . "<br/>";
    echo "Net: " . $ $payroll->computeNet();


?> 

