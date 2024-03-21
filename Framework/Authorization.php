<?php

namespace Framework;

use Framework\Session;
use Random\Engine\Secure;

class Authorization
{
    /**
     * Check if current user own a resource
     *
     * @param int $resourceId
     * @return bool
     */
    public static function isOwner($resourceId)
    {
        $sessionUser = Session::get('user');

        if ($sessionUser !== null && isset($sessionUser['id'])) {
            $sessionUser = (int) $sessionUser['id'];
            return $sessionUser === $resourceId;
        }
        return false;
    }
}
