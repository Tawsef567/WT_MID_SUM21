<?php $marks=95;
if($marks>=90){
    echo "The grade is <b>A+ </b>";}
elseif($marks>=80 && $marks<90){
    echo"The grade is <b>A </b>"; }
elseif($marks>=70 && $marks<80){
     echo "The grade is <b>B </b>";}
elseif($marks>=60 && $marks<70){
    echo "The grade is <b>C </b>";}
else{echo "The grade is <b>F</b>";}
?>