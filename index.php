<?php
$title="
<script>
alert('Welcome')
</script>
";
echo htmlentities($title).'</br>';

$socialnetwork=("<a href='instagram'>Instagram</a>");
echo html_entity_decode($socialnetwork).'</br>';

$name='Dale,';
echo str_repeat($name,3).'</br>';

$idnum='james';
if(empty($idnum)){
    echo "Please write your Id number";

}else{
    if(is_numeric($idnum)){
     echo"Successfully login";

    }else{
        echo"Id number must be numeric" .'</br>';
    }
}

$site_name="speedtest.com";
$site_array=explode('.',$site_name);
if(end($site_array)=='com'){
    echo"Click on speedtest".'</br>';

}else{
    echo"Please select correct site for test";
}

$array=[
    'speedtest',
    'sg',
    'com'
];
echo implode('.',$array).'</br>';

$speed_test="fast.com";
$speed_array=explode('.',$speed_test);
if(in_array('fast',$speed_array)){
    echo"Select your server".'</br>';

}else{
    echo"your site name is wrong";
}

$count=[
    [
        'name'=>'dale',
        'address'=>'los angles'
    ],
    [
        'name'=>'dale',
        'address'=>'los angles'
    ],

    [
        'name'=>'dale',
        'address'=>'los angles'
    ]

];
if(count($count)>2){
    echo "Sorry you're late".'</br>';
}else{
    echo"Enter successfully";
}

$username=[
    'name'=> 'Stoke',
    'address'=> 'England',
    'Email'=>'stoke@gmail.com'

];
$usernameUpdate=[
    'name'=> 'Stokesy',
    'address'=> 'England',
    'Email'=>'stokesy@gmail.com'
];
print_r (array_diff($username,$usernameUpdate)).'</br>';

$cars=[
    'Audi',
    'Aprelia',
    'BMW'
];
array_push($cars,'Ferrari','Acura');
array_pop($cars);
echo "<pre>";
print_r($cars);
echo"</pre>";

$speed_test="fast.com";
$speed_array=explode('.',$speed_test);
echo "<pre>";
print_r(array_reverse($speed_array));
echo"</pre>";
