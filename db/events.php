<?php

/**
 * This file is part of Cria.
 * Cria is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * Cria is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with Cria. If not, see <https://www.gnu.org/licenses/>.
 *
 * @package    local_cria
 * @author     Patrick Thibaudeau
 * @copyright  2024 onwards York University (https://yorku.ca)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$observers = array(
    array(
        'eventname'   => '\core\event\dashboard_viewed',
        'callback'    => '\theme_cria\events::redirect_user_to_home_page',
        'priority'    => 9999,
        'internal'    => false,
    ),
    array(
        'eventname'   => '\core\event\user_loggedin',
        'callback'    => '\theme_cria\events::redirect_user_to_home_page',
        'priority'    => 9999,
        'internal'    => false,
    ),
    array(
        'eventname'   => '\core\event\user_loggedinas',
        'callback'    => '\theme_cria\events::redirect_user_to_home_page',
        'priority'    => 9999,
        'internal'    => false,
    ),


);