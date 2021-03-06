<?php

namespace SpiffyNavigation;

use SpiffyNavigation\Container;
use SpiffyNavigation\Page\PageFactory;

class ContainerFactory
{
    protected function __construct()
    {
    }

    /**
     * Creates a container from a spec.
     *
     * @param array $spec
     * @return Container
     */
    public static function create(array $spec)
    {
        $container = new Container();

        foreach($spec as $pageSpec) {
            $container->addPage(PageFactory::create($pageSpec));
        }

        return $container;
    }
}