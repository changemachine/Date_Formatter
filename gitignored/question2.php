<?php
/*****************************************************************************
question2.php
Create a class called myDateClass

myDateClass can be instantiated by passing three variables:
myDateClass(mm,dd,yyyy)

There are two public methods in myDateClass:

---
prettyDate($num)
---
should return the following format when given these numbers
$instance->prettyDate(0) returns the date in format yyyy-mm-dd
$instance->prettyDate(1) returns the date in format mm/dd/yyyy
$instance->prettyDate(2) returns the date in format Month day, yyyy
$instance->prettyDate(3) returns the date in format The Xst day of the month of Month, in the year yyyy
	[Xst should be interpreted as the number with the suffix, i.e. 1st, 2nd, 3rd, 4th....]
return an error message when any other variable is passed to the method

---
today()
---
should return today's date in the format yyyy-mm-dd, and does not require
an instantiated class object: myDateClass::today()


In the same file, execute the following 5 test cases using all date formats of prettyDate() including an error message.
Each format should be printed on a separate line with 3 line breaks between each text case group.
Jan 1, 2001
Feb 2, 2002
Mar 3, 2003
Apr 4, 2004
Dec 5, 2015 <- note the difference in sequence for this last one

After that, print today() in a new paragraph
*****************************************************************************/
?>
