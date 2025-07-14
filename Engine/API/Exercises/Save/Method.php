<?php

namespace Liloi\Bionica\API\Exercises\Save;

use Liloi\API\Response;
use Liloi\Bionica\API\Method as SuperMethod;
use Liloi\Bionica\Domain\Exercises\Manager as MapsManager;

/**
 * Rune API: Blueprint.Blueprints.Show
 * @package Liloi\Librarium\API\Blueprints\Show
 */
class Method extends SuperMethod
{
    public static function execute(): Response
    {
        $keyExercise = self::getParameter('key_exercise');
        $entity = MapsManager::load($keyExercise);

        $entity->setTitle(self::getParameter('title'));
        $entity->setMark(self::getParameter('mark'));
        $entity->setType(self::getParameter('type'));
        $entity->setSummary(self::getParameter('summary'));

        $entity->save();

        return new Response();
    }
}