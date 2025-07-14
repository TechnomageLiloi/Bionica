<?php

namespace Liloi\Bionica\Domain\Exercises;

use Liloi\Tools\Entity as AbstractEntity;
use Liloi\Stylo\Parser;

/**
 * @method string getTitle()
 * @method void setTitle(string $value)
 *
 * @method string getMark()
 * @method void setMark(string $value)
 *
 * @method string getType()
 * @method void setType(string $value)
 *
 * @method string getSummary()
 * @method void setSummary(string $value)
 */
class Entity extends AbstractEntity
{
    public function getKey(): string
    {
        return $this->getField('key_exercise');
    }

    public function getTypeTitle(): string
    {
        return Types::$list[$this->getType()];
    }

    public function save(): void
    {
        Manager::save($this);
    }

    public function remove(): void
    {
        Manager::remove($this);
    }

    public function parseSummary(): string
    {
        return Parser::parseString($this->getSummary());
    }
}