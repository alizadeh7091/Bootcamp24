<?php
require_once 'vendor/autoload.php';

$faker = Faker\factory::create();

$conn = mysqli_connect('localhost', 'root', '', 'task4back');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

for ($i = 0; $i <= 100000000; $i++) {
    $name = $faker->word();
    $family = $faker->word();
    $age =$faker->randomNumber(2, true);
    $gender = $faker->numberBetween(1, 2);
    // gender 1 is male and 2 is female
    $married = $faker->numberBetween(1, 2);
    // 1 shows singles wheras 2 shows married
    $mobile = $faker->randomNumber(9, true);
    $nationalcode = $faker->randomNumber(9, true);
    $about = $faker->text(40);
    $sql = $conn->query("INSERT INTO users (id,name,family,age,gender,married,mobile,nationalcode,about) 
                    VALUES (null,'$name','$family','$age','$gender','$married','$mobile','$nationalcode','$about')");
}

$conn->close();
