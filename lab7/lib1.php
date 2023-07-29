<?php
$id=readline("Enter id ");
$book_taken=readline("Books taken");
$c=readline("Enter 1 to issue books or 2 to to return books");
if($c==1)
{
$c2=readline("Enter the number of books to be issued");
$book_taken=$book_taken+$c2;
if($book_taken<=10)
{
 echo "(Updated)books taken in total=".$book_taken;
}
else
{
 echo "Full";
}
}
else if($c==2)
{
$c2=readline("Enter the number of books to return");
if($book_taken>=$c2)
{
 $book_taken=$book_taken-$c2;
 echo "(Updated)books taken in total=".$book_taken;

}
else
{
 echo "Invalid";
}
}
?>