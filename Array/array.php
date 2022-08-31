<?php 

$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];
function myFunction($dizi, $deger)
{
    $filtre = array_filter($dizi);
    $random = array_rand($filtre, $deger);
    $result = array_map(function ($item) use ($filtre) {
        return $filtre[$item];
    }, $random);
    return $result;
}

echo "<pre>";
print_r(myFunction($planets, 2));
print_r(myFunction($planets, 3));
print_r(myFunction($planets, 2));
print_r(myFunction($planets, 4));
print_r(myFunction($planets, 5));




?>