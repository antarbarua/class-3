<?php

function number($studentname, $cq, $mcq ){               //1
    $result = $cq + $mcq;
    echo "$studentname marks is $result";
    echo "<br>";
}
number('azad', 70, 30);
number('diraz', 50, 35);
number('bijoy', 55, 25);
number('joy', 40, 30);
number('sem', 50, 20);
echo "<br>";
echo "<hr>";



function work($pname, $total, $sell){                   //2
    $result = $total - $sell;
    echo "$pname remaing $result";
    echo "<br>";
}
work('ram',1000, 450 );
work('pc', 200, 70);
work('ssd', 500, 300);
work('mouse', 150, 80);
work('monitor', 100, 70);
echo "<br>";
echo "<hr>";



function info($name, $age, $year){                      //3
    echo "$name $age born $year";
    echo "<br>";
}
info('shari', 23, 2000);
info('joy', 30, 1993);
info('kamal', 20, 2003);
info('shakil', 25, 1998);
echo "<br>";
echo "<hr>";

function bro($book, $b, $d){                            //4
    $result = $b * $d;
    echo "$book result is $result";
    echo "<br>";
}
bro('english', 10, 5,);
bro('math', 20, 7,);
bro('computer1', 30, 20);
bro('computer2', 50, 10);
echo "<br>";
echo "<hr>";



function vid($num, $a, $d){                             //5
    $result = $a / $d;
    echo "$num result is $result";
    echo "<br>";
}
vid('exp', 100, 50);
vid('exp', 200, 20);
vid('exp', 40, 2);
vid('exp', 50, 10);
vid('exp', 80, 20);
echo "<hr>";



function location($user, $address){                     //6
    echo "$user lives in $address";
    echo "<br>";
}
location('shari', 'dewanhat');
location('diraz', 'muradpur');
location('azad', 'atur dipu');
location('rakib', 'dhaka');
location('joy', 'gec');
