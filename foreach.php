<?php
$food = array('heatlthy' =>
						array('Salad', 'Vegetables'),
			 'unhealthy' =>
			 			array('pizza', 'ice cream')
 );
	foreach($food as $element => $innerarray){
		echo '<strong>'.$element.'</strong><br>';
		foreach($innerarray as $item){
		echo $item. '<br>' ;
		}

	}

?>