<?php

$xml = simplexml_load_file("books.xml");
$books = $xml->xpath('/library/book[author="陈忠实"]');
echo $books[0]->title;
