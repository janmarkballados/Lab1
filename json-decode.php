<?php

fucntion w3rfunction($value,$key)
{
    echo "$key : $value"."<br";
}
$json = '{
"Title": "The Cuckoos Calling",
"Author": " Robert Galbraith",
"Detial":
    {
        "Publisher": "Little Brown"
    }
}';
$j1= json_decode($json,true);

array_walk_recursive($j1,"w3rfunctions")
?>