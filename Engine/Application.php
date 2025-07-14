<?php

namespace Liloi\Bionica;

use Liloi\Config\Pool;
//use Liloi\Bionic\API\Method;
//use Liloi\Bionic\API\Tree;
//use Liloi\Bionic\Domain\Manager;
use Rune\Application\Conceptual as ConceptualApplication;

/**
 * @inheritDoc
 */
class Application extends ConceptualApplication
{
    /**
     * Configuration data ppol.
     *
     * @var Pool
     */
    private Pool $config;

    /**
     * Application constructor.
     *
     * @param Pool $config Configuration data object.
     */
    public function __construct(Pool $config)
    {
        $this->config = $config;
//        Manager::setConfig($config);
//        Method::setConfig($config);
    }

    /**
     * Gets configuration data object.
     *
     * @return Pool Configuration data object.
     */
    public function getConfig(): Pool
    {
        return $this->config;
    }

    /**
     * @inheritDoc
     */
    public function compile(): string
    {
        // If API requested.
//        if(isset($_POST['method']))
//        {
//            return Tree::getInstance()->execute();
//        }

        return $this->render(__DIR__ . '/Layout.tpl', [

        ]);
    }
}