<?php

namespace Application\View\Helper;

use Zend\View\Helper\AbstractHelper;

/**
 * Class AvatarHelper
 * Helps finding user avatars.
 *
 * @package Application
 */
class AvatarHelper extends AbstractHelper {

    private static $AVATARS_DIR = "img/users/avatars/";

    public function __invoke($avatarName) {
        return $this->getView()
            ->basePath(AvatarHelper::$AVATARS_DIR . $avatarName);
    }
}