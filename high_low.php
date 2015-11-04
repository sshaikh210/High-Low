 <?php

 $target = rand(1, 100);
 
 do {
	// Write the output
	// Notice the space after the ?
	fwrite(STDOUT, 'Guess the random number! ');

	// Get the input from user
	$guess = trim(fgets(STDIN));
	// var_dump(trim($firstName));
	if ($guess == $target) {
		fwrite(STDOUT, "You Got It!\n");
	} else if ($guess < $target) {
		fwrite(STDOUT, "Too Low!\n");
	} else if ($guess > $target) {
		fwrite(STDOUT, "Too High!\n");
	}
} while ($guess !== $target) 
exit(0);

?>
