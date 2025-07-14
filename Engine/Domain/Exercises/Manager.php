<?php

namespace Liloi\Bionica\Domain\Exercises;

use Liloi\Bionica\Domain\Manager as DomainManager;

class Manager extends DomainManager
{
    /**
     * Get table name.
     *
     * @return string
     */
    public static function getTableName(): string
    {
        return self::getTablePrefix() . 'exercises';
    }

    public static function loadCollection(int $type = Types::MEDICAL): Collection
    {
        $name = self::getTableName();

        $rows = self::getAdapter()->getArray(sprintf(
            'select * from %s where type="%s" order by title asc;',
            $name, $type
        ));

        $collection = new Collection();

        foreach($rows as $row)
        {
            $collection[] = Entity::create($row);
        }

        return $collection;
    }

    public static function create(int $type = Types::MEDICAL): void
    {
        self::getAdapter()->insert(self::getTableName(), [
            'key_exercise' => date('Y-m-d H:i:s'),
            'title' => 'Enter the title',
            'mark' => '0',
            'type' => $type,
            'summary' => ''
        ]);
    }

    public static function load(string $key_exercise): Entity
    {
        $name = self::getTableName();

        $row = self::getAdapter()->getRow(sprintf(
            'select * from %s where key_exercise="%s";',
            $name, $key_exercise
        ));

        return Entity::create($row);
    }

    public static function save(Entity $entity): void
    {
        $name = self::getTableName();
        $data = $entity->get();
        unset($data['key_exercise']);

        self::getAdapter()->update($name, $data, sprintf('key_exercise="%s"', $entity->getKey()));
    }

    public static function getPercentages(): array
    {
        $percentage = array_combine(array_keys(Types::$list), [0, 0, 0, 0, 0, 0, 0]);
        $group = [];

        $name = self::getTableName();

        $rows = self::getAdapter()->getArray(sprintf(
            'select type, mark from %s',
            $name
        ));

        foreach ($rows as $row)
        {
            if(!isset($group[$row['type']]))
            {
                $group[$row['type']] = [];
            }

            $group[$row['type']][] = $row['mark'];
        }

        foreach ($group as $type => $marks)
        {
            $percentage[$type] = round(array_sum($marks) / count($marks), 1);
        }

        return $percentage;
    }

    public static function remove(Entity $entity): void
    {
        $name = self::getTableName();
        self::getAdapter()->delete($name, sprintf('key_exercise="%s"', $entity->getKey()));
    }
}