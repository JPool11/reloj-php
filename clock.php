<?php
function calculateAngle($hour, $minute) {
    $hour = $hour % 12;

    $hourAngle = ($hour * 30) + ($minute * 0.5);
    $minuteAngle = $minute * 6;

    $angle = abs($hourAngle - $minuteAngle);

    $angle = min($angle, 360 - $angle);

    return $angle;
}

function drawClock($hour, $minute) {
    $angle = calculateAngle($hour, $minute);

    $hour = $hour % 12;

    $centerX = 150;
    $centerY = 150;
    $hourHandRadius = 70;
    $minuteHandRadius = 100;

    $hourHandAngle = deg2rad((360 - (($hour * 30) + ($minute * 0.5))) % 360);
    $hourX = $centerX + $hourHandRadius * cos($hourHandAngle);
    $hourY = $centerY - $hourHandRadius * sin($hourHandAngle);

    $minuteHandAngle = deg2rad((360 - ($minute * 6)) % 360);
    $minuteX = $centerX + $minuteHandRadius * cos($minuteHandAngle);
    $minuteY = $centerY - $minuteHandRadius * sin($minuteHandAngle);

    echo "<svg width='300' height='300' xmlns='http://www.w3.org/2000/svg' style='background: #f4f4f4; border: 1px solid #ccc;'>";
    echo "<circle cx='$centerX' cy='$centerY' r='120' fill='none' stroke='black' stroke-width='2' />";
    echo "<line x1='$centerX' y1='$centerY' x2='$hourX' y2='$hourY' stroke='blue' stroke-width='4' />";
    echo "<line x1='$centerX' y1='$centerY' x2='$minuteX' y2='$minuteY' stroke='red' stroke-width='2' />";
    echo "<text x='10' y='290' fill='black' font-size='14'>Angle: $angle </text>";
    echo "</svg>";
}

$hour = 1;
$minute = 37;
drawClock($hour, $minute);
?>
