<?php


namespace App\Providers;

use Laravel\Socialite\Two\AbstractProvider;
use Laravel\Socialite\Two\ProviderInterface;
use Laravel\Socialite\Two\User;
class OctopusXSocialiteProvider extends AbstractProvider implements ProviderInterface
{
    /**
     * {@inheritdoc}
     */
    protected function getAuthUrl($state)
    {
        return $this->buildAuthUrlFromBase('https://accounts.spotify.com/authorize', $state);
    }


}
