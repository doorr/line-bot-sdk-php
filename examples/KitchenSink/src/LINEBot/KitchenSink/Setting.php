<?php

/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

namespace LINE\LINEBot\KitchenSink;

class Setting
{
    public static function getSetting()
    {
        return [
            'settings' => [
                'displayErrorDetails' => true, // set to false in production

                'logger' => [
                    'name' => 'slim-app',
                    'path' => __DIR__ . '/../../../logs/app.log',
                ],

                'bot' => [
                    'channelToken' => getenv('LINEBOT_CHANNEL_TOKEN') ?: 'wnSEoGyt8FGC6wpwEs5Mnb3xqeuKLWbtr1tNtEEiyTjf0cm/rIrjAff3JzZkMDY8Di87XAMMZlbGKHym/DvJxBMbTgfMx6Kvg9itSXDrmMhz4J1VUu5nA5y3xB4n1IcRHf4F3OLqe21tMeRuLs167QdB04t89/1O/w1cDnyilFU=',
                    'channelSecret' => getenv('LINEBOT_CHANNEL_SECRET') ?: ' 	
ee1655e16f059647f9e25bb8a267c5e1 ',
                ],

                'apiEndpointBase' => getenv('LINEBOT_API_ENDPOINT_BASE'),
            ],
        ];
    }
}
