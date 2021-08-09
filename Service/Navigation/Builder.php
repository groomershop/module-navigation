<?php

namespace Groomershop\Navigation\Service\Navigation;

class Builder extends \MageSuite\Navigation\Service\Navigation\Builder
{
    public function isVisible($category, $navigationType = self::TYPE_DESKTOP)
    {
        if ($navigationType == self::TYPE_MOBILE) {
            return $category->getIncludeInMobileNavigation();
        }
        if ($navigationType == self::TYPE_DESKTOP) {
            return $category->getIncludeInMenu();
        }
        return true;
    }
}
