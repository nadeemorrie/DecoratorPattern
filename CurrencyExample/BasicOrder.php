<?php

require ('Order.php');

class BasicOrder extends Order {

	private $surchargeRate;
	
	/**
     * Constructor to initialise variables
     *            
     * @return float, float, decimal
     */
	function __construct($exchangeRate, $surchargeRate, $buyAmount) {
		$this->exchangeRate = $exchangeRate;
		$this->surchargeRate = $surchargeRate;
		$this->buyAmount = $buyAmount;
	}
	
	/**
     * Calculate surchage amount using the surcharge rate.
     *            
     * @return decimal 
     */
	protected function getSurchageAmount() {		
		return $this->getConvertedAmount() * $this->surchargeRate;
	}

	/**
     * Total amount to pay
     *        
     * @return decimal 
     */
	public function getTotalCost () {
		var_dump($this->getConvertedAmount() + $this->getSurchageAmount());
	}

}
?>