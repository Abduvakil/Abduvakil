<?php

$reels = [
    [9, 9, 3, 3, 6, 7, 6, 7, 5, 1, 6, 9, 4, 4, 5, 3, 9, 8, 8, 4, 6, 9, 9, 5, 5, 8, 8, 7, 7, 9, 6, 8, 7, 5, 5, 9, 8, 7, 9, 6, 4, 6, 9, 8, 7, 6, 6, 9, 9, 8, 6, 9, 8, 9, 4, 9, 9, 7, 6, 9, 9, 8, 3, 5, 5, 3, 3, 7, 7, 8, 6, 5, 7, 6, 8, 3, 5, 4, 8, 4, 5, 3, 7, 8, 8, 7, 8, 4, 5, 7, 4, 8, 8, 5, 4, 4, 3, 9, 9, 7, 8, 9, 3, 3, 8, 9, 8, 8, 4, 7, 9, 7, 6, 9, 9, 8, 5, 3, 7, 7, 8, 6, 9, 7, 6, 8, 5, 5, 4, 5, 3, 7, 7, 8, 4, 5, 7, 4, 8, 8, 6, 6, 6],
    [9, 9, 3, 3, 6, 7, 6, 7, 5, 9, 6, 9, 4, 4, 5, 3, 1, 8, 8, 4, 6, 9, 9, 5, 5, 8, 8, 7, 7, 9, 6, 8, 7, 5, 5, 9, 8, 7, 9, 6, 4, 6, 9, 8, 7, 6, 6, 9, 9, 8, 6, 9, 8, 9, 4, 9, 9, 7, 6, 9, 9, 8, 3, 5, 5, 3, 3, 7, 7, 8, 6, 5, 7, 6, 8, 3, 5, 4, 8, 4, 5, 3, 7, 8, 8, 7, 8, 4, 5, 7, 4, 8, 8, 5, 4, 4, 3, 9, 9, 7, 8, 9, 3, 3, 8, 9, 8, 8, 4, 7, 9, 7, 6, 9, 9, 8, 5, 3, 7, 7, 8, 6, 9, 7, 6, 8, 5, 5, 4, 5, 3, 7, 7, 8, 4, 5, 7, 4, 8, 8, 6, 6, 6],
    [9, 9, 3, 3, 6, 7, 6, 7, 5, 9, 6, 9, 4, 4, 5, 3, 9, 1, 8, 4, 6, 9, 9, 5, 5, 8, 8, 7, 7, 9, 6, 8, 7, 5, 5, 9, 8, 7, 9, 6, 4, 6, 9, 8, 7, 6, 6, 9, 9, 8, 6, 9, 8, 9, 4, 9, 9, 7, 6, 9, 9, 8, 3, 5, 5, 3, 3, 7, 7, 8, 6, 5, 7, 6, 8, 3, 5, 4, 8, 4, 5, 3, 7, 8, 8, 7, 8, 4, 5, 7, 4, 8, 8, 5, 4, 4, 3, 9, 9, 7, 8, 8, 3, 3, 8, 9, 8, 8, 4, 7, 9, 7, 6, 9, 9, 8, 5, 3, 7, 7, 8, 6, 9, 7, 6, 8, 5, 5, 4, 5, 3, 7, 7, 8, 4, 5, 7, 4, 8, 8, 6, 6, 6],
    [9, 9, 3, 3, 6, 7, 6, 7, 5, 9, 6, 9, 4, 4, 5, 3, 9, 8, 8, 4, 6, 9, 1, 5, 5, 8, 8, 7, 7, 9, 6, 8, 7, 5, 5, 9, 8, 7, 9, 6, 4, 6, 9, 8, 7, 6, 6, 9, 9, 8, 6, 9, 8, 9, 4, 9, 9, 7, 6, 9, 9, 8, 3, 5, 5, 3, 3, 7, 7, 8, 6, 5, 7, 6, 8, 3, 5, 4, 8, 4, 5, 3, 7, 8, 8, 7, 8, 4, 5, 7, 4, 8, 8, 5, 4, 4, 3, 9, 9, 7, 8, 9, 3, 3, 8, 9, 8, 8, 4, 7, 9, 7, 6, 9, 9, 8, 5, 3, 7, 7, 8, 6, 9, 7, 6, 8, 5, 5, 4, 5, 3, 7, 7, 8, 4, 5, 7, 4, 8, 8, 6, 6, 6],
    [9, 9, 3, 3, 6, 7, 6, 7, 5, 9, 6, 9, 4, 4, 5, 3, 1, 8, 8, 4, 6, 9, 9, 5, 5, 8, 8, 7, 7, 9, 6, 8, 7, 5, 5, 9, 8, 7, 9, 6, 4, 6, 9, 8, 7, 6, 6, 9, 9, 8, 6, 9, 8, 9, 4, 9, 9, 7, 6, 9, 9, 8, 3, 5, 5, 3, 3, 7, 7, 8, 6, 5, 7, 6, 8, 3, 5, 4, 8, 4, 5, 3, 7, 8, 8, 7, 8, 4, 5, 7, 1, 8, 8, 5, 4, 4, 3, 9, 9, 7, 8, 9, 3, 3, 8, 9, 8, 8, 4, 7, 9, 7, 6, 9, 9, 8, 5, 3, 7, 7, 8, 6, 9, 7, 6, 8, 5, 5, 4, 5, 3, 7, 7, 8, 4, 5, 7, 4, 8, 8],
    [9, 9, 3, 3, 6, 7, 6, 7, 5, 9, 6, 9, 4, 4, 5, 3, 9, 8, 8, 1, 6, 9, 9, 5, 5, 8, 8, 7, 7, 9, 6, 8, 7, 5, 5, 9, 8, 7, 9, 6, 4, 6, 9, 8, 7, 6, 6, 9, 9, 8, 6, 9, 8, 9, 4, 9, 9, 7, 6, 9, 9, 8, 3, 5, 5, 3, 3, 7, 7, 8, 6, 5, 7, 6, 8, 3, 5, 4, 8, 4, 5, 3, 7, 8, 8, 7, 8, 4, 5, 7, 4, 8, 8, 5, 4, 4, 3, 9, 9, 7, 8, 9, 3, 3, 8, 9, 8, 8, 4, 7, 9, 7, 6, 9, 9, 8, 5, 3, 7, 7, 8, 6, 9, 7, 6, 8, 5, 5, 4, 5, 3, 7, 7, 8, 4, 5, 7, 4, 8, 8],
    [9, 9, 3, 3, 6, 7, 6, 7, 5,, 1, 8, 8, 4, 6, 9, 9, 5, 5, 8, 8, 7, 7, 9, 6, 8, 7, 5, 5, 9, 8, 7, 9, 6, 4, 6, 9, 8, 7, 6, 6, 9, 9, 8, 6, 9, 8, 9, 4, 9, 9, 7, 6, 9, 9, 8, 3, 5, 5, 3, 3, 7, 7, 8, 6, 5, 7, 6, 8, 3, 5, 4, 8, 4, 5, 3, 7, 8, 8, 7, 8, 4, 5, 7, 4, 8, 8, 5, 4, 4, 3, 9, 9, 7, 8, 9, 3, 3, 8, 9, 8, 8, 4, 7, 9, 7, 6, 9, 9, 8, 5, 3, 7, 7, 8, 6, 9, 7, 6, 8, 5, 5, 4, 5, 3, 7, 7, 8, 4, 5, 7, 4, 8, 8]
];

// Функция для чтения ввода с консоли
function readInput()
{
    $handle = fopen("php://stdin", "r");
    $input = trim(fgets($handle));
    fclose($handle);
    return $input;
}

// Функция для генерации точки остановки катушки
function getStopPosition($reelLength)
{
    return rand(0, $reelLength - 1);
}

// Функция для получения символов из катушки
function getSymbolsFromReel($reel, $stopPosition, $count)
{
    $reelLength = count($reel);
    $symbols = [];
    for ($i = 0; $i < $count; $i++) {
        $symbols[] = $reel[($stopPosition + $i) % $reelLength];
    }
    return $symbols;
}

echo "Введите сумму ставки: ";
$bet = (float)readInput();
echo "Ставка: $bet\n";

// Генерация игрового поля
$field = [];
for ($i = 0; $i < 7; $i++) {
    $stopPosition = getStopPosition(count($reels[$i]));
    $field[] = getSymbolsFromReel($reels[$i], $stopPosition, 7);
}

echo "Игровое поле:\n";
for ($i = 0; $i < count($reels); $i++) {
    echo implode(" ", $field[$i]) . "\n";
}

// Функция для поиска выигрышных комбинаций
function findWinningCombinations($field) {
    $winningCombinations = [];

    for ($row = 0; $row < 7; $row++) {
        for ($col = 0; $col <= 2; $col++) {
            $symbol = $field[$row][$col];
            $count = 1;
            for ($k = $col + 1; $k < 7 && $field[$row][$k] == $symbol; $k++) {
                $count++;
            }
            if ($symbol === null || $symbol === '') {
                return [];
            }
            if ($count >= 5) {
                $winningCombinations[] = [
                    'symbol' => $symbol,
                    'start' => [$row, $col],
                    'end' => [$row, $col + $count - 1],
                    'length' => $count
                ];
            }
        }
    }

    for ($col = 0; $col < 7; $col++) {
        for ($row = 0; $row <= 2; $row++) {
            $symbol = $field[$row][$col];
            $count = 1;
            for ($k = $row + 1; $k < 7 && $field[$k][$col] == $symbol; $k++) {
                $count++;
            }
            if ($symbol === null || $symbol === '') {
                return [];
            }
            if ($count >= 5) {
                $winningCombinations[] = [
                    'symbol' => $symbol,
                    'start' => [$row, $col],
                    'end' => [$row + $count - 1, $col],
                    'length' => $count
                ];
            }
        }
    }

    return $winningCombinations;
}

// Функция для расчета выплат
function calculatePayout($combinations, $bet) {
    $payoutTable = [
        5 => 1,
        6 => 2,
        7 => 3,
        8 => 5,
        9 => 7,
        10 => 10,
        11 => 13,
        12 => 16,
        13 => 20,
        14 => 25,
        15 => 30
    ];

    $symbolPrice = [
        1 => 0.5,
        3 => 0.7,
        4 => 0.9,
        5 => 1.1,
        6 => 1.3,
        7 => 1.5,
        8 => 1.7,
        9 => 1.9
    ];

    $totalPayout = 0;
    foreach ($combinations as $combo) {
        $length = $combo['length'];
        if (isset($payoutTable[$length])) {
            $totalPayout += $payoutTable[$length] * $symbolPrice[$combo['symbol']] * $bet;
        }
    }

    return $totalPayout;
}

// Функция для удаления выигрышных символов и опускания символов
function clearWinningSymbols(&$field, $combinations) {
    foreach ($combinations as $combo) {
        if ($combo['start'][0] == $combo['end'][0]) {
            for ($i = $combo['start'][1]; $i <= $combo['end'][1]; $i++) {
                $field[$combo['start'][0]][$i] = null;
            }
        } else {
            for ($i = $combo['start'][0]; $i <= $combo['end'][0]; $i++) {
                $field[$i][$combo['start'][1]] = null;
            }
        }
    }

    for ($col = 0; $col < 7; $col++) {
        for ($row = 6; $row >= 0; $row--) {
            if ($field[$row][$col] === null) {
                for ($k = $row - 1; $k >= 0; $k--) {
                    if ($field[$k][$col] !== null) {
                        $field[$row][$col] = $field[$k][$col];
                        $field[$k][$col] = null;
                        break;
                    }
                }
            }
        }
    }
}

// Функция для подсчета и вывода RTP
function calculateRTP($totalBet, $totalPayout) {
    return ($totalPayout / ($totalBet * 100));
}

$totalBet = $bet;
$totalPayout = 0;

while (true) {
    $winningCombinations = findWinningCombinations($field);

    if (count($winningCombinations) > 0) {
        $payout = calculatePayout($winningCombinations, $bet);
        $totalPayout += $payout;
        echo "Выигрыш: $payout\n";

        clearWinningSymbols($field, $winningCombinations);

        echo "Обновленное игровое поле:\n";
        for ($i = 0; $i < 7; $i++) {
            echo implode(" ", $field[$i]) . "\n";
        }
    } else {
        break;
    }
}

$rtp = calculateRTP($totalBet, $totalPayout);
echo "Общий RTP: $rtp%\n";

?>
