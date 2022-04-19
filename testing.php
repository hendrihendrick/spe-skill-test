<?php
class SpeSkillTest
{
	function NarcisticNumber($Numbers)
	{
		$numbersInserted = array($Numbers);
		foreach($numbersInserted as a $value)
		{
			pow($numbersInserted[$value], $numbersInserted[$value-1])
		}
		return $numbersInserted;
	}

	function ParityOutlier()
	{
		$NumbersOfArray = array(2, 4, 0, 100, 4, 11, 2602, 36);
		if ($NumbersOfArray %2 == 0) 
		{
			return true;
		}
		else
			return false;

	}

	function NeedleInHaystack($haystack, $needle)
	{
		$insertIntoArrayHaystack = array($haystack);
		array_push($insertIntoArrayHaystack, $needle);
		foreach ($insertIntoArrayHaystack as a $value)
		{
			
		};
	}

	function blueOcean()
	{
		
	}
}
?>