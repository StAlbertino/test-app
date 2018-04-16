<?php
header('Content-type: application/json');
$response_array = array(
    0 => array(
        'name' => 'Kaķu tests',
        'questions' => array(
            0 => array(
                'name' => 'Kuri kaķi ir jaukākie?',
                'answers' => array(
                    0 => 'Rižie',
                    1 => 'Pelēkie',
                    2 => 'Melnie',
                    3 => 'Baltie'
                )
            ),
            1 => array(
                'name' => 'Kurš ir lielākais kaķveidīgais?',
                'answers' => array(
                    0 => 'Laigers',
                    1 => 'Zobenzobu tīģeris',
                    2 => 'Mājas kaķis',
                    3 => 'Siāmietis',
                    4 => 'Tīģeris',
                    5 => 'Lauva',
                )
            ),
            2 => array(
                'name' => 'Vai Jums patīk kaķi?',
                'answers' => array(
                    0 => 'Nē',
                    1 => 'Jā'
                )
            )
        )
    ),
    1 => array(
        'name' => 'Suņu tests',
        'questions' => array(
            0 => array(
                'name' => 'Vai haskiji padodas dresūrai?',
                'answers' => array(
                    0 => 'Nē, dresūrai padodas slikti',
                    1 => 'Jā, dresūrai padodas labi'
                )
            ),
            1 => array(
                'name' => 'Vai suņa izmērs ir tieši saistīts ar suņa prāta spējām?',
                'answers' => array(
                    0 => 'Jā',
                    1 => 'Nē'
                )
            ),
            2 => array(
                'name' => 'Vai Reksis ir gudrākais no suņiem?',
                'answers' => array(
                    0 => 'Jā',
                    1 => 'Nē'
                )
            ),
            3 => array(
                'name' => 'Vai Jums patīk kaķi?',
                'answers' => array(
                    0 => 'Jā',
                    1 => 'Dievinu'
                )
            )
        )
    ),
    2 => array(
        'name' => 'Putnu tests',
        'questions' => array(
            0 => array(
                'name' => 'Zarā sēdēja 10 zvirbuļi. Vienu nošāva. Cik zvirbuļu palika zarā?',
                'answers' => array(
                    0 => 'Viens',
                    1 => 'Deviņi',
                    2 => 'Neviens',
                    3 => 'Vienpadsmit'
                )
            ),
            1 => array(
                'name' => 'Vai Indijas Skrējējpīles prot peldēt?',
                'answers' => array(
                    0 => 'Jā',
                    1 => 'Nē'
                )
            ),
        )
    )
);
echo json_encode($response_array);
?>