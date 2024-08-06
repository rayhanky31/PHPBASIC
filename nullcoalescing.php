<?php 
// $data =[
//     "action" => null,
// ];

// if ((isset($data["action"]))) {
//     $action =$data["action"];
// }else{
//     $action = "Nothing";
// }

// echo $action .PHP_EOL;

//mengguannakan coalescing

$data=[
    "action"=> "create",
];
$action= $data["action"] ?? 'Nothing';
echo $action;