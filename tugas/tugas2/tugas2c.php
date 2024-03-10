<?php
for ($i = 10; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "<div style='height: 50px; width: 50px; background-color:salmon; display: inline-block; text-align: center; line-height: 50px; border: 1px black solid; margin:-2px;'>
        $j
        </div>
        ";
    }
    echo "<br>";
}
?>