<?php

namespace Liloi\Bionica\Domain\Exercises;

class Types
{
    public const MEDICAL = 1;
    public const BALANCE = 2;
    public const STRETCH = 3;
    public const SWORD_PLAY = 4;
    public const FINE_MOTOR_SKILLS = 5;
    public const DANCE_FLOOR = 6;
    public const SPORTS = 7;

    static public array $list = [
        self::MEDICAL => 'Medical',
        self::BALANCE => 'Balance',
        self::STRETCH => 'Stretch',
        self::SWORD_PLAY => 'Sword play',
        self::FINE_MOTOR_SKILLS => 'Fine motor skills',
        self::DANCE_FLOOR => 'Dance-floor',
        self::SPORTS => 'Sports',
    ];

    static public array $coordinates = [
        self::MEDICAL => ['x' => 162, 'y' => 195],
        self::BALANCE => ['x' => 162, 'y' => 923],
        self::STRETCH => ['x' => 66, 'y' => 335],
        self::SWORD_PLAY => ['x' => 66, 'y' => 640],
        self::FINE_MOTOR_SKILLS => ['x' => 250, 'y' => 640],
        self::DANCE_FLOOR => ['x' => 162, 'y' => 335],
        self::SPORTS => ['x' => 162, 'y' => 435],
    ];
}