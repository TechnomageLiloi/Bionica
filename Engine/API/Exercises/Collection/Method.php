<?php

namespace Liloi\Bionica\API\Exercises\Collection;

use Liloi\API\Response;
use Liloi\Bionica\API\Method as SuperMethod;
use Liloi\Bionica\Domain\Exercises\Manager as ExercisesManager;
use Liloi\Bionica\Domain\Exercises\Types as ExercisesTypes;

/**
 * Rune API: Blueprint.Blueprints.Show
 * @package Liloi\Librarium\API\Blueprints\Show
 */
class Method extends SuperMethod
{
    public static function execute(): Response
    {
        $type = self::getParameter('type');
        $collection = ExercisesManager::loadCollection($type);

        $filTemplate = __DIR__ . '/Template.tpl';

        $response = new Response();
        $response->set('render', static::render($filTemplate, [
            'collection' => $collection,
            'list' => ExercisesTypes::$list,
            'type' => $type,
        ]));

        return $response;
    }
}