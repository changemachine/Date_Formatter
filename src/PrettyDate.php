<?php
/*****************************************************************************
In the same file, execute the following 5 test cases using all date formats + error.
Each format should be printed on a separate line with 3 line breaks between each text case group.
Jan 1, 2001
Feb 2, 2002
Mar 3, 2003
Apr 4, 2004
Dec 5, 2015 <- note the difference in sequence for this last one

*****************************************************************************/

    class myDateClass {
	    private $mm;
    	private $dd;
    	private $yy;

    	function __construct($mm, $dd, $yy){
    			$this->mm = $mm;
    			$this->dd = $dd;
    			$this->yy = $yy;
    	}
/*****************************************************************************/

    	function prettyDate($num){
            $dateOutput = '';
            $timeStamp = 0;

            // **************** mktime(hr, min, sec, month, day, year);
            $timeStamp = mktime(0,0,0, $this->mm, $this->dd, $this->yy);

        	// $instance->prettyDate(0) = yyyy-mm-dd
            if($num == 0){
                // Pre-Refactor: $dateOutput = $this->yy .'-'. $this->mm .'-'. $this->dd;
                $dateOutput = date('Y-m-d', $timeStamp);
            }
            // $instance->prettyDate(1) = mm/dd/yyyy
            else if($num == 1){
                $dateOutput = date('m/d/Y', $timeStamp);
            }
            // $instance->prettyDate(2) = Month day, yyyy
            else if($num == 2){
                $dateOutput = date('M d, Y', $timeStamp);
            }
            // $instance->prettyDate(3) = The dd'st day of the month of Month, in the year yyyy
            else if($num == 3){
                $dateOutput = date('\T\h\e jS \d\a\y \o\f \t\h\e \m\o\n\t\h \o\f F, \i\n \t\h\e \y\e\a\r Y', $timeStamp);
            }

            // return an error message when any other variable is passed to the method
            else {
                $dateOutput = 'ERROR';
            }
            return $dateOutput;
        }// /translate

    } //myDateClass ****************************************************


	function today($num){ //should format date according to given numbers
        $today = date('Y-m-d');
        // $dateOutput = '';
        // $instance->prettyDate(0) = yyyy-mm-dd
        if($num == 0){
            $today = date('Y-m-d');
        }
        // $instance->prettyDate(1) = mm/dd/yyyy
        else if($num == 1){
            $today = date('m-d-Y');
        }
        // $instance->prettyDate(2) = Month day, yyyy
        else if($num == 2){
            $today = date('Month day, yyyy');
        }
        // $instance->prettyDate(3) = The dd'st day of the month of Month, in the year yyyy
        else if($num == 4){
            $today = date("The Date " . 'Y-m-d' . " end date");
        }
        // return an error message when any other variable is passed to the method
        else {
            $dateOutput = 'ERROR';
        }

        return $dateOutput;
    }

?>
