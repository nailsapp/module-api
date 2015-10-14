<?php

/**
 * Generates API routes
 *
 * @package     Nails
 * @subpackage  module-api
 * @category    Controller
 * @author      Nails Dev Team
 * @link
 */

namespace Nails\Routes\Api;

class Routes
{
    /**
     * Returns an array of routes for this module
     * @return array
     */
    public function getRoutes()
    {
        $routes = array();
        $routes['api/(:any)'] = 'api/apiRouter/index';
        return $routes;
    }
}
