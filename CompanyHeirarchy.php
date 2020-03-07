<?php

/*
Hierarchy:
Jeff ($100k salary) is the CEO of a startup. He has 2 reports, Dave ($85k) and Cory($65k). Dave has 5
reports: Andy ($65k), Dan ($60k), Jason ($60k), Rick ($56k), and Suzanne ($61k)

*/

//Get Companny Data From JSON File
$staff = file_get_contents("employees.json");

//Convert JSON Object to Array
$decoded_staff = json_decode($staff,true);

//Store Array In Variables
$ceo = $decoded_staff["Staff"]["CEO"];
$manager_1 =  $decoded_staff["Staff"]["Employees"]["Manager_1"];
$manager_2 = $decoded_staff["Staff"]["Employees"]["Manager_2"];
$staff_1 = $decoded_staff["Staff"]["Employees"]["Hires"]["Staff_1"];
$staff_2 = $decoded_staff["Staff"]["Employees"]["Hires"]["Staff_2"];
$staff_3 = $decoded_staff["Staff"]["Employees"]["Hires"]["Staff_3"];
$staff_4 = $decoded_staff["Staff"]["Employees"]["Hires"]["Staff_4"];
$staff_5 = $decoded_staff["Staff"]["Employees"]["Hires"]["Staff_5"];
$company_salary = $decoded_staff["Salary"];


//Tree Heirarchy Format
echo $ceo. '<br/>'.
     " &nbsp-Employees Of: ". $ceo. '<br/>'.
            " &nbsp&nbsp---".$manager_1.'<br/>'.
                "  -------Employees Of: ".$manager_1. '<br/>'.
                " |&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-".$staff_1.'<br/>'.
                " |&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-".$staff_2.'<br/>'.
                " |&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-".$staff_3.'<br/>'.
                " |&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-".$staff_4.'<br/>'.
                " |&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-".$staff_5.'<br/>'.
            " &nbsp&nbsp---".$manager_2.'<br/>'.
    "  Total Salary: ".$company_salary.'<br/>';

?>