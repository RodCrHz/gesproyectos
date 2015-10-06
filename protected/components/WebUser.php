<?php

/**
 * Overload of CWebUser to set some more methods.
 */
class WebUser extends CWebUser
{

        public function isAdmin()
        {
                // When Users are implemented, change this to check roles.
                return ( $this->getName() == 'admin' );
        }

        public function isRegistered()
        {
                return ( !$this->isGuest() && !$this->isAdmin() );
        }
}