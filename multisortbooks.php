
<?php
$mybooks=array(
				array(
					"title"=>"Kava",
					"author"=>"Charles"
						),
				array(
					"title"=>"JavaScript",
					"author"=>"Binny"
					),
				);
print_r($mybooks);
echo "<br>";
array_multisort($mybooks);
print_r($mybooks);
/*
array_unshift() – – Adds one or more new elements to the start of an array
array_shift() – – Removes the first element from the start of an array
array_push() — Adds one or more new elements to the end of an array
array_pop() — Removes the last element from the end of an array
array_splice() — Removes element(s) from and/or adds element(s) to any point in an array
$authors = array( “Steinbeck”, “Kafka”, “Tolkien”, “Dickens” );
echo array_unshift( $authors, “Hardy”, “Melville” ) . “ < br/ > ”; // Displays “6”
// Displays “Array ( [0] = > Hardy [1] = > Melville [2] = > Steinbeck [3] = >
Kafka [4] = > Tolkien [5] = > Dickens )”
print_r( $authors );
$myBook = array( “title” = > “The Grapes of Wrath”,
“author” = > “John Steinbeck”,
“pubYear” = > 1939 );
echo array_shift( $myBook ) . “ < br/ > ”; // Displays “The Grapes of Wrath”
// Displays “Array ( [author] = > John Steinbeck [pubYear] = > 1939 )”
print_r( $myBook );
$authors = array( “Steinbeck”, “Kafka”, “Tolkien”, “Dickens” );
echo array_push( $authors, “Hardy”, “Melville” ) . “ < br/ > ”; // Displays “6”
// Displays “Array ( [0] = > Steinbeck [1] = > Kafka [2] = > Tolkien [3] = >
Dickens [4] = > Hardy [5] = > Melville )”
print_r( $authors );
$myBook = array( “title” = > “The Grapes of Wrath”,
“author” = > “John Steinbeck”,
“pubYear” = > 1939 );
echo array_pop( $myBook ) . “ < br/ > ”; // Displays “1939”
// Displays “Array ( [title] = > The Grapes of Wrath [author] = > John
Steinbeck )”
print_r( $myBook );
//if you have $authors, $arrayToAdd-try the following
print_r( array_splice( $authors, 2, 0, $arrayToAdd ) );
You can read this line as: “At the third position (2), remove zero (0) elements, then insert
$arrayToAdd”.
//array merge
$authors = array( “Steinbeck”, “Kafka” );
$moreAuthors = array( “Tolkien”, “Milton” );
// Displays “Array ( [0] = > Steinbeck [1] = > Kafka [2] = > Tolkien [3] = >
Milton )”
print_r( array_merge( $authors, $moreAuthors ) );
*/
