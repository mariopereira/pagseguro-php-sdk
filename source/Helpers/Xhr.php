<?php
/**
 * 2007-2016 [PagSeguro Internet Ltda.]
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @author    PagSeguro Internet Ltda.
 * @copyright 2007-2016 PagSeguro Internet Ltda.
 * @license   http://www.apache.org/licenses/LICENSE-2.0
 *
 */

namespace PagSeguro\Helpers;

/**
 * Class Xhr
 * @package PagSeguro\Helpers
 */
class Xhr
{

    /**
     * @return bool
     */
    public static function hasPost()
    {
        if (isset($_POST)) {
            return true;
        }
        return false;
    }

    /**
     * @return bool
     */
    public static function hasGet()
    {
        if (isset($_GET)) {
            return true;
        }
        return false;
    }

    /**
     * @return integer|null
     */
    public static function getInputCode()
    {
        return filter_input(INPUT_POST, 'notificationCode', FILTER_SANITIZE_NUMBER_FLOAT) !== null ?
            filter_input(INPUT_POST, 'notificationCode', FILTER_SANITIZE_NUMBER_FLOAT) : null;
    }

    /**
     * @return string|null
     */
    public static function getInputType()
    {
        return filter_input(INPUT_POST, 'notificationType', FILTER_SANITIZE_STRING) !== null ?
            filter_input(INPUT_POST, 'notificationType', FILTER_SANITIZE_STRING) : null;
    }
}