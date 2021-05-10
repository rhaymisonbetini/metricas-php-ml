<?php

require_once __DIR__ . '/vendor/autoload.php';

use Phpml\Metric\ConfusionMatrix;

$confusionMatrix = new ConfusionMatrix();

$actualLabls =     [0, 0, 0, 1, 1, 1, 1, 1, 1, 1];
$predictedLabels = [0, 1, 1, 0, 0, 0, 1, 1, 1, 1];


$result = $confusionMatrix->compute($actualLabls, $predictedLabels);

$validations = array();
foreach ($result as $result) {
    foreach ($result as $coluns) {
        $validations[] = $coluns;
    }
}

var_dump($result);

echo "acertou o falso: " . $validations[0] . "\n";
echo "errou o falso: " . $validations[1] . "\n";
echo "errou o verdadeiro: " . $validations[2] . "\n";
echo "errou o verdadeiro: " . $validations[3] . "\n";
