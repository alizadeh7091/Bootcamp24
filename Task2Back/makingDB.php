
<?php

function getRandomName()
{
    $names = array(
        "ali",
        "reza",
        "hasan",
        "sara",
        "maryam",
        "fateme",
        "asqar",
        "sepehr",
        "amin",
        "jafar",
        "javad",
        "farzad",
        "samad",
        "sina",
        "saqar",
        "simin",
        "sahar",
        "qasem",
        "mohamad",
        "hosein",
        "ahmad",
        "mahmud",
        "akbar",
        "ehsan",
        "asma",
    );
    $index = array_rand($names);
    $name = $names[$index];
    return $name;
};

function GetRandomFamily()
{
    $families = array(
        "akbari",
        "yaghooti",
        "feyz",
        "alizade",
        "parvin",
        "jamshidi",
        "shahsavan",
        "sadati",
        "ramezani",
        "tafreshi",
        "mazani",
        "golestan",
        "jafari",
        "zaheri",
        "Harris",
        "madadi",
        "miri",
        "hasani",
        "naji",
        "bakhti"
    );
    $index = array_rand($families);
    $families = $families[$index];
    return $families;
}

// GetRandomFamily();
// echo(rand() . "<br>");

function GetRandomId()
{
    return (rand(1000000000, 9999999999));
}

function GetRandomMobile()
{
    return (rand(9000000000, 9999999999));
}

// GetRandomMobile();

$name = getRandomName();

$family = GetRandomFamily();

$personalId = GetRandomId();

$mobile = GetRandomMobile();

$conn = mysqli_connect("localhost", "root", "", "task2back");
$conn->query("INSERT into users (id , name , family , personalId , mobile ) VALUES 
(null,'$name','$family',$personalId,$mobile)");

for ($i = 0; $i < 9990; $i++) {
    $conn = mysqli_connect("localhost", "root", "", "task2back");
    $name = getRandomName();

    $family = GetRandomFamily();

    $personalId = GetRandomId();

    $mobile = GetRandomMobile();

    $conn->query("INSERT into users (id , name , family , personalId , mobile ) VALUES 
(null,'$name','$family',$personalId,$mobile)");
}

echo ('done');
