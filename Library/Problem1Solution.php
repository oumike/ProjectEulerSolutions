<?php

require_once('ProblemSolution.php');

class Problem1Solution extends ProblemSolution
{
	
	public function getSolution($params = null)
	{
		$params = json_decode($params, true);
		
		$multiples = $params['multiples'];
		$sum = 0;
		for ($i = 0; $i < $params['limit']; $i++) {
			$isMultiple = false;
			foreach ($multiples as $m) {
				if ($i % $m == 0) {
					$isMultiple = true;
					break;
				}
			}
			$sum = ($isMultiple) ? $i + $sum : $sum;
		}
		
		return $sum;
		
	}

}
