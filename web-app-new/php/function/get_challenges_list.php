<?php
	// Include session php file to start PHP session 
	include($_SERVER['DOCUMENT_ROOT'].'/v0-6/php/function/session_start.php');

	// Include challenge_data php file to get user challenge data 
	include($_SERVER['DOCUMENT_ROOT'].'/v0-6/php/function/challenge_data.php');

	// display all the challenge list 
	for($i = 0; $i<sizeof($search_challenge_id); $i++)
	{?>
        <li onClick="showChallenge('<?php echo $search_challenge_id[$i]; ?>', this);"></div><i class="fa fa-calendar fa-fw"></i><p class="list-challenge-name"><?php echo $search_challenge_name[$i]; ?></p><p class="list-challenge-status"><?php echo $challenge_percentage[$i]; ?>% completed, <?php echo $search_challenge_remaining_time_left[$i]; ?> days left</p></li>
    <?php 
	}
?>

