<?php
class ReversalOfAString
{
    /**
     * reversing a string.
     */
    function reverse()
    {
        $stringName = "DCBA";
        $countLiteral = strlen($stringName);
        echo "The Reversal of a string is: ";
        for ($i = $countLiteral-1; $i >= 0; $i--)
        {
          echo $stringName[$i];
        }
    }

}

//creating object for class and calling function inside it.
$reverse = new ReversalOfAString();
$reverse -> reverse();
?>