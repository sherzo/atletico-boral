<?php

function statisticsGeneral($statisticsGeneral)
{
	$count = 0;

	foreach ($statisticsGeneral as $key => $statistic) 
	{
		if ($statistic->status == 1)
		{
			$count++;
		}
	}

	return $count;
}
