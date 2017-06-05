<?php
/*******************************************************************************
 * Copyright 2017 Okta, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 ******************************************************************************/

namespace Okta\Apps;

use Okta\Resource\AbstractResource;

class PublicAppInstanceSettings extends AbstractResource
{
    const APP = 'app';
    const SIGN_ON = 'signOn';
    const NOTIFICATIONS = 'notifications';
    const MANUAL_PROVISIONING = 'manualProvisioning';


    /**
     * Get the app.
     *
     * @return array
     */
    public function getApp(): array
    {
        return $this->getProperty(self::APP);
    }
    
    /**
     * Get the signOn.
     *
     * @return PublicSignOnModeMediated
     */
    public function getSignOn(array $options = []): PublicSignOnModeMediated
    {
        return $this->getResourceProperty(
                        self::SIGN_ON,
                        PublicSignOnModeMediated::class,
                        $options
                    );
    }

    /**
     * Set the signOn.
     *
     * @param PublicSignOnModeMediated $signOn The PublicSignOnModeMediated instance.
     * @return self
     */
    public function setSignOn(PublicSignOnModeMediated $signOn)
    {
        $this->setResourceProperty(
                        self::SIGN_ON,
                        $signOn
                    );
        
        return $this;
    }
    
    /**
     * Get the notifications.
     *
     * @return PublicAppInstanceSettingsNotifications
     */
    public function getNotifications(array $options = []): PublicAppInstanceSettingsNotifications
    {
        return $this->getResourceProperty(
                        self::NOTIFICATIONS,
                        PublicAppInstanceSettingsNotifications::class,
                        $options
                    );
    }

    /**
     * Set the notifications.
     *
     * @param PublicAppInstanceSettingsNotifications $notifications The PublicAppInstanceSettingsNotifications instance.
     * @return self
     */
    public function setNotifications(PublicAppInstanceSettingsNotifications $notifications)
    {
        $this->setResourceProperty(
                        self::NOTIFICATIONS,
                        $notifications
                    );
        
        return $this;
    }
    
    /**
     * Get the manualProvisioning.
     *
     * @return boolean
     */
    public function getManualProvisioning(): boolean
    {
        return $this->getProperty(self::MANUAL_PROVISIONING);
    }
    
}
