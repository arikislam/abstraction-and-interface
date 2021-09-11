<?php
require_once "dependencies/autoload.php";

use Main\FaceBookFeedSubscription;
use Main\FreeMember;
use Main\LinkedInFeedSubscription;
use Main\ProMember;

$freeUser = new FreeMember();

echo "Free user class: <br/> <br/> <br/>";
echo $freeUser->email();
echo $freeUser->name();
echo $freeUser->subscriptionToSocialMedia(new FaceBookFeedSubscription());
echo $freeUser->subscriptionToSocialMedia(new LinkedInFeedSubscription());
echo $freeUser->canNotPostJobs();
echo "<br/> <br/> <br/>";

$proMember = new ProMember();

echo "Pro user class: <br/> <br/> <br/>";
echo $proMember->email();
echo $proMember->name();
echo $proMember->subscriptionToSocialMedia(new FaceBookFeedSubscription());
echo $proMember->subscriptionToSocialMedia(new LinkedInFeedSubscription());
echo $proMember->canPostJobs();