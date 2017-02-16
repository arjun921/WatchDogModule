$handle = fopen("inputfile.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        // process the line read.
    }

    fclose($handle);
} else {
    // error opening the file.
}
