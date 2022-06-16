<?php
function checkuserEligibilityToVote()
{
    $age =18;
    $myname="Franziska";
    if($age >=18)
    {
        echo $myname." You are eligible to vote";
    }
    else{
        echo $myname." You are not eligible to vote";
    } 
}
// checkuserEligibilityToVote();
function studentgrade()
{
    $marks=70;
    if($marks>=80)
    {
        $grade=" A";
    }
    elseif($marks>=75)
    {
        $grade=" A-";
    }
    elseif($marks>=65)
    {
        $grade=" B+";
    }
    elseif($marks>=60)
    {
        $grade=" B";
    }
    elseif($marks>=55)
    {
        $grade=" B-";
    }
    elseif ($marks>=50) 
    {
        $grade=" C+";
    }
    else
    {
        $grade="fail";
    }
    echo "Your score is" .$grade;
}
studentgrade();



?>