<?php

namespace Liloi\Bionica\API\Dashboard\Show;

use Liloi\API\Response;
use Liloi\Bionica\API\Method as SuperMethod;
use Liloi\Bionica\Domain\Exercises\Manager as ExercisesManager;
use Liloi\Bionica\Domain\Exercises\Types as ExercisesTypes;

class Method extends SuperMethod
{
    public static function execute(): Response
    {
        $percentages = ExercisesManager::getPercentages();
        $total = round(array_sum($percentages) / count($percentages), 2);
        $response = new Response();
        $response->set('render', static::render(__DIR__ . '/Template.tpl', [
            'coordinates' => ExercisesTypes::$coordinates,
            'list' => ExercisesTypes::$list,
            'percentages' => $percentages,
            'total' => $total,
        ]));

        return $response;
    }
}