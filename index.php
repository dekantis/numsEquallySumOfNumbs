<?php
function numsEquallySumOfNumbs($num)
{
    $numsEquallySum = [];
    for ($first = 1; $first < 10; $first++) {
        for ($second = 0; $second < 10; $second++) {
            for ($third = 0; $third < 10; $third++) {
                for ($fourth = 0; $fourth < 10; $fourth++) {
                    if ($first + $second + $third + $fourth == $num) {
                        $numsEquallySum[] = $first.$second.$third.$fourth;
                    }
                }
            }
        }
    }
    return $numsEquallySum;
}
//В аргумент функции подставляйте свое значение
print_r(numsEquallySumOfNumbs(22));