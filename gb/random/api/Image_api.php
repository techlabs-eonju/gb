<?php
include('../../common.php'); 

/*
$sql2 ="SELECT idx, pokemon_name, pokemon_url FROM pokemon_list";
$row2 = sql_query($sql2);


foreach($row2 as $data) {


    $fileName = basename( $data['pokemon_url'], "/"); // 확장자 제거

    $list = [
        'pokemon_name' => $data['pokemon_name'],
        'pokemon_image_url' => "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/" .  $fileName . ".png",
        'pokemon_list_idx' => $data['idx']
    ];
    if (insertData('pokemon_image', $list)) {
        echo "데이터가 성공적으로 저장되었습니다.<br>";
    } else {
        echo "데이터 삽입에 실패했습니다.<br>";
    }

}
*/
?>
