<?php
//Here doc syntax is used for complex strings

$title = "The guardian of galaxy";
$author ="robert";


$heredoc = <<< EOT
In '$title' by $author he got to do a menial "tasks".
EOT;


echo $heredoc;




?>