 <?php

 $target = rand(1, 100);
 $tries = 0;
 
 do {
	// Write the output
	// Notice the space after the ?
	fwrite(STDOUT, 'Guess the random number! ');

	// Get the input from user
	$guess = trim(fgets(STDIN));
	// var_dump(trim($firstName));
	if ($guess == $target) {
		fwrite(STDOUT, "You Got It!\n" . PHP_EOL);
	} else if ($guess < $target) {
		fwrite(STDOUT, "Too Low!\n" . PHP_EOL);
	} else if ($guess > $target) {
		fwrite(STDOUT, "Too High!\n" . PHP_EOL);
	}
	$tries++;
} while ($guess != $target) 
echo "It took you $tries number of attempts to guess the number" . PHP_EOL;
exit(0);

?>
