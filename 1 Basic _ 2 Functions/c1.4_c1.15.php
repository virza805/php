<?php   

$number = 12;

$number *= 5;

echo $number;
echo "\n";

$numbers = (12-6) * 5;
$numbers1 = (12-6) / (6-3);
echo $numbers;
echo "\n";
echo $numbers1;
echo "\n";
/*
$n = 7;
$n = ++$n;
// $n = $n + 1;
$n = $n;
echo $n, "\n", $n;
*/

$n = 7;
$m = $n++;
echo $m, "\n", $n; // Ans:- m=7 & n=8

/*
এখানে যাহয় তাহলো 
$m = $n++;
$m = $n;
$n = $n + 1;

বিভিন্ন রকম নাম্বার গননা আছে 
ডেছিমেল %d = 1-10;
অক্টাল   %o = 0-7;
বাইনারি  %b = 01;
হেস্কাডেছিমেল %x= 0-9 a b c d e f;
*/
echo "\n";

$n = 56;
$o = 05;
$h = 0x1B;
$b = 11100001;

printf("decimal %d = %b binary \n", $o, $o);
printf("decimal %d = %b binary \n", $n, $n);
printf("decimal %d = %b binary \n", $h, $h);
printf("decimal %d = %b binary \n", 11100001, 11100001);
echo "\n";
printf("decimal %d = %o octal = %x hexadecimal \n", 564, 564, 564);
printf("decimal %d = %o octal = %X hexadecimal \n", 11100001, 11100001, 11100001);

//একই জিনিস বারবার লিখতে হচ্ছে তাই 
printf('decimal %1$d = %1$o octal = %1$X hexadecimal',123);
echo "\n";

// দশমিকের পরে ২ সংখ্যা
$result = 0.9531805;
printf("%.2f", $result);
echo "\n";
$a = 27.567;
printf("%04d", $a);
echo "\n";
printf("%07.2f", $a);

// ## && = and, ## || = or 

// Ternary operator টার্নারী অপারেটর 12.Ternary or Conditional operator
echo "\n";
$n = 12;
if( 12 == $n ){
    echo "Twelve";
}else if (10 == $n){
    echo "Ten";
}else{
    echo " A Number";
}
echo "\n";

// $numberInWord = ( 12 == $n ) ? "Twelve" : (10 == $n )? "Ten" : "A Number";
$numberInWord = ( 12 == $n ) ? "Twelve" : "A Number";
echo $numberInWord; 
echo "\n"; 

if ($n % 2 == 0){
    echo "Even Number";
}else{
    echo "Odd Number";
}
echo "\n";

$result = ( $n % 2 == 0) ? "{$n} is an Even Number" : "{$n} is a Odd Number";

echo $result ."\n";

$age = 18;
$tk = 180000;

$need = 150000 - $tk;
$remove = $tk - 150000;

$message = ($age >= 18 ) ? ((150000 <= $tk ) ? "{$tk} tk is enough and you can remove {$remove} tk" : "Not enough and extra {$need} tk need") : 'Not eligible to buy this Bick';
echo $message ."\n";

