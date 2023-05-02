<?php
//*  Una variabile si inizializza con il dollaro
$nomeVariabile = 5; //! Il punto e virgola è obbligatorio 



//* Può contenere solo caratteri alfanumerici o l'underscore
//*  $1pippo = non può iniziare con un numero

// $nome Variabile //*non può contenere spazi

// $pippo != $piPPo 
//* sono case sensitive!!

//! Data types

$integer = 5;

$float = 3.25;

$string = "sono una stringa";

$boolean = true;


//stringa


//* in js: console.log(`L'età dell'utente è ${anni}`)
$string1 = "sono una stringa e stampo la variabile $integer \n";

// \n ci permette di mandare a capo il nostro terminale

$string2 = 'sono una stringa e non stampo la variabile $integer';

// echo $string1;

// echo $string2;


//concatenare 2 stringhe:

//in js: console.log("ciao" + "sono Lorenzo");

//* in php invece del + si utilizza il .

// echo "ciao " . "sono Lorenzo" . $string1;

//! Array

//* sono una collezione di dati

$array = [3, 5, 8, 99, 10000];

$arrayVuoto = [];

$arrayVecchio = array(3,5,8,99); //metodo vecchio che non si utilizza più

$array2 = [3, "ciao", true, ["Tricheco", 90]];

// var_dump($array2[3][0]); //* Stampa informazioni su una variabile


//! Array Chiave Valore

$tricheco = [
    "razza" => "animale",
    "età" => 2,
    "abilità" => ["mangiare","rotolarsi"],
];


// var_dump($tricheco["abilità"]);

//! Operatori Matematici

$num1 = "9";
$num2 = "5";

// echo $num1 - $num2;


//! Operatori di Confronto

$num3 = 5;
$num4 = "5";

// var_dump( $num3 == $num4);

// var_dump( $num3 === $num4);

//* la built-in function echo non funziona bene con gli op. di confronto perchè tende a convertirli in numeri, stampa "true" come 1 e "false" non lo stampa


//! Operatori Logici

$num5 = 0;
$num6 = 3;

// var_dump($num5 && $num6); //* se entrambi gli operandi sono true ritorna true
// var_dump($num5 || $num6); //* se almeno uno è true ritorna true
// var_dump(!$num5); //* ritorna true se il dato convertito in booleano ritorna false

//! Valori Truthy

$val1 = 8;
var_dump((bool)$val1);

$val0 = 0;
var_dump((bool)$val0);

$val2 = "ciao";
var_dump((bool)$val2);

$val3 = "";
var_dump((bool)$val3);

$quiz = " ";
var_dump($quiz);

//! SEQUENZA (esempio di sequenza errata)

$name = "Lorenzo";

echo $name . $surname;

$surname = "Lettieri";

//! SELEZIONE

$age = 15;

if(
    $age >= 18 
    //*condizione
    ){
    echo "Puoi bere \n"; //* blocco di istruzioni da eseguire se la condizione è rispettata
} else {
    echo "Cresci :) \n";
}


//* if else if...

$grade = 25;

if($grade < 18 && $grade > 0){
    echo "Insufficiente! \n";
} else if($grade >= 18 && $grade < 25){
    echo "Mica male! \n";
} else if($grade >= 25 && $grade < 30){
    echo "Ottimo lavoro! \n";
} else if($grade == 30){
    echo "Sei un dragone fra! \n";
}else{
    echo "il dato non è valido :) \n";
}


//* rifattorizziamolo con lo switch
    //* lo switch esegue tutti i comandi dalla prima condizione verificata in poi :)

switch ($grade){
    case ($grade == 30):
        echo "Sei un dragone \n";
        break;
    case ($grade >= 25):
        echo "ottimo \n";
        break;
    case ($grade >= 18):
        echo "buono \n";
        break;
    case ($grade < 18):
        echo "insufficiente \n";
        break;
    default:
    echo "dato non valido \n";
}

//! ITERAZIONI

//? For: stampiamo i numeri da 1 a 10

for($i = 1; $i<=10; $i++){
    echo $i . "\n";
}

//? while e do while

$i = 11;
while($i<=10){
    echo $i;
    $i++;
}

do{
    echo $i . "\n";
    $i++;
}while($i <= 10);


//? foreach

$students = ["Lorenzo", "Riccardo", "Massimo", "Alessio", "Sara", "Stefano"];

for($i = 0; $i < count($students); $i++){
    var_dump($students[$i]);
}

//* il foreach è un ciclo che viene eseguito su ogni elemento di un determinato array

foreach($students as $student){
    echo $student . "\n";
}

//? è come quando in js -> students.foreach((student)=>{bla bla});


$animals = [
    "volanti" => ["Aquila", "Momonga", "Falco", "Piccione"],
    "terrestri" => ["Cheetah", "Leopardo", "Tricheco", "Golden Retriever"],
];

//* se animals non fosse un array chaive valore sarebbe cosi:
// $animals = [["Aquila", "Momonga", "Falco", "Piccione"],["Cheetah", "Leopardo", "Tricheco", "Golden Retriever"]]


foreach($animals as $movimento => $animalList){
    echo "gli animali $movimento sono:  \n";
    foreach($animalList as $singleAnimal){
        echo "$singleAnimal \n";
    }
}


$persone = [
    "persona1" => "Luca",
    "persona2" => "Stefano",
];

foreach($persone as $key => $person){
     echo "la persona con il numero $key ha il nome di $person \n";
 }


$LorenzoLettieri = [
    "name" => "Lorenzo",
    "surname" => "Lettieri",
    "age" => 20,
    "skills" => ["PHP", "JS", "HTML", "CSS"],
];

$LucaVenturi = [
    "name" => "Luca",
    "surname" => "Venturi",
    "age" => 28,
    "skills" => ["PHP", "JS", "HTML", "CSS", "Java", "Python"],
];


//! Esercizio: dato un array di studenti e la loro media, stampami il nome di coloro che hanno la sufficienza

$students = [
    [
        "name" => "Lorenzo",
        "grade" => 30,
    ],
    [
        "name" => "Sara",
        "grade" => 90,
    ],[
        "name" => "Massimo",
        "grade" => 78,
    ],[
        "name" => "Marco",
        "grade" => 59,
    ],
];

foreach($students as $student){
    if($student["grade"] >= 60){
        echo $student['name'] . " verrà promosso/a \n";
    }
}

//! Esercizio: dato un array di docenti, stampami prima solo quelli che insegnano backend, poi quelli che insegnao front-end

$teachers = [
    [
        "name" => "Lorenzo",
        "subject" => "Backend",
    ],
    [
        "name" => "Nicola",
        "subject" => "Frontend",
    ],
    [
        "name" => "Angela",
        "subject" => "Frontend",
    ],
    [
        "name" => "Andrea",
        "subject" => "Backend",
    ],
];

foreach($teachers as $teacher){
    switch($teacher["subject"]){
        case ($teacher["subject"] == "Backend"):
            echo "Il docente " . $teacher["name"] . " insegna " . $teacher["subject"] . "è proprio uno strano \n";
            break;
        default:
        echo "Il docente " . $teacher["name"] . " insegna " . $teacher["subject"] . "è proprio un figo \n";
    }
    
}