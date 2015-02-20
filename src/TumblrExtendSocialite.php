<?php
namespace SocialiteProviders\Tumblr;

use SocialiteProviders\Manager\SocialiteWasCalled;

class TumblrExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'tumblr',
            __NAMESPACE__.'\Provider',
            'League\OAuth1\Client\Server\Tumblr'
        );
    }
}
