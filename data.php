<?php
// 데이터베이스나 다른 소스로부터 옵션 데이터를 가져오는 로직을 구현
// 이 예제에서는 간단히 배열로 제공합니다.
$options = array(
    array('value' => 'option1', 'label' => '옵션 1'),
    array('value' => 'option2', 'label' => '옵션 2'),
    array('value' => 'option3', 'label' => '옵션 3'),
    // 추가 옵션들...
);

// JSON 형식으로 데이터 반환
header('Content-Type: application/json');
echo json_encode($options);
