<?php

namespace Momento\View\Helper;

use Zend\View\Helper\AbstractHelper;

/**
 * Class AvatarHelper
 * Helps finding user avatars.
 *
 * @package Momento
 */
class AvatarHelper extends AbstractHelper {

    private static $AVATARS_DIR = "img/users/avatars/";

    public function __invoke($avatarName) {
        return $this->getView()
            ->basePath(AvatarHelper::$AVATARS_DIR . $avatarName);
    }
}