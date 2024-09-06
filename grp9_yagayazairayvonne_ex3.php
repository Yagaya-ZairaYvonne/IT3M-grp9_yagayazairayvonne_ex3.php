<?php
// Define the file name
$filename = 'test.txt';

// Check if the file exists using file_exists()
if (file_exists($filename)) {
    echo "File exists.\n";

    // Read the content using file_get_contents()
    $content = file_get_contents($filename);
    echo "Content of the file:\n";
    echo $content;

    // Read the file line by line using file()
    $lines = file($filename);
    echo "\nRead file line by line:\n";
    foreach ($lines as $line) { 
        echo $line; // Output the content of each line
    }
} else {
    echo "There's no file found. Creating the file...\n";

    // Create and write to the file using file_put_contents()
    $content = "Hi,We're doing a test content.\nThis file is made to run file_put_contents().";
    file_put_contents($filename, $content);
    echo "File has been made and written content will be displayed.\n";
    echo $content;
}
?>
