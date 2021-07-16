Viết chương trình C++ để in các dấu sao 2 theo dạng sau:
in từ 1-> n mỗi dòng n sao

<?php
function random_color_part() {
    return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
}

function random_color() {
    return random_color_part() . random_color_part() . random_color_part();
}


$n = 10;
for ($i=1;$i<=$n;$i++){
    echo "<p style='color:#".random_color()."'>";
    for($j=0;$j<=$i;$j++){
        echo "* ";
    }
    echo "</p>";
}
for ($i = $n; $i >= 1; $i--){
    echo "<p style='color:#".random_color()."'>";
    for($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "</p>";
}

?>