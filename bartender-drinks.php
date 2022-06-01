<?php

function get_drink_by_profession($s) {
    if (strtolower($s) === 'jabroni') { return 'Patron Tequila';}
    if (strtolower($s) == 'school counselor') { return 'Anything with Alcohol';}
    if (strtolower($s) == 'programmer') {return 'Hipster Craft Beer';} 
    if (strtolower($s) == 'bike gang member') {return 'Moonshine';}
    if (strtolower($s) == 'politician') {return 'Your tax dollars';}
    if (strtolower($s) == 'rapper') {return 'Cristal';}
    else return 'Beer';
}

get_drink_by_profession("jabrOni");




// Complete the function that receives as input a string, and produces outputs according to the following table:

// Input	                    Output

// "Jabroni"	            "Patron Tequila"
// "School Counselor"       "Anything with Alcohol"
// "Programmer"	            "Hipster Craft Beer"
// "Bike Gang Member"   	"Moonshine"
// "Politician"	            "Your tax dollars"
// "Rapper"	                "Cristal"
// anything else	        "Beer"