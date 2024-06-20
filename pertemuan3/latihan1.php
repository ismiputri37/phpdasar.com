<?php  
//SWITCH STATEMENT
//n biasanya variabel
// switch (n){
//     case label1:
//         kode yang dieksekusi jika n=label1;
//         break; //menghentikan program;
//     case label2:
//         kode yang dieksekusi jika n=label2;
//         break;
//     case label3:
//         kode yang dieksekusi jika n=label3;
//         break;
//     default:
//         kode yang dieksekusi jika n berbeda dari semua label;
// }

// $favcolor = 'red';

// switch ($favcolor) {
//     case 'red' :
//         echo "Your fave color is blue";
//         break;
//     case 'blue':
//         echo "Your fave color is red";
//         break;
//     default:
//         echo "Your fave color is not here";
//         break;
// }

//STUDI KASUS
// buatlah program dengan switch case 
// program untuk menampilkan level skill programmer
// jika level 1 maka tampilkan "pelajari html"
// jika level 2 maka tampilkan "pelajari css"
// jika level 3 maka tampilkan "pelajari javascript"
// jika level 4 maka tampilkan "pelajari mysql"
// jika level 5 maka tampilkan "pelajari php"
// jika 5 case tidak terpenuhi tampilkan "anda bukan programmer"

$skill = "level 1";
switch($skill){
    case "level 1":
        echo "pelajari html";
        break;
    
    case "level 2":
        echo "pelajari css";
        break;

    case "level 3":
        echo "pelajari javascript";
        break;

    case "level 4":
        echo "pelajari mysql";
        break;

    case "level 5":
        echo "pelajari php";
        break;

    default :
        echo "anda bukan programmer";
        break;
}

?>