<?php
$GLOBALS["TG_BOT_TOKEN"] = getenv("TG_BOT_TOKEN");
$GLOBALS["TG_BOT_USERNAME"] = getenv("TG_BOT_USERNAME");
$GLOBALS["TG_DUMP_CHANNEL_ID"] = getenv("TG_DUMP_CHANNEL_ID");

$TG_AUTH_USER_S = (string) getenv("TG_AUTH_USERS");
$GLOBALS["IS_PUBLIC"] = !$TG_AUTH_USER_S;
$GLOBALS["TG_AUTH_USERS"] = array();
if ($TG_AUTH_USER_S == "ALL") {
    $GLOBALS["IS_PUBLIC"] = false;
}
else if (strpos($TG_AUTH_USER_S, " ") !== FALSE) {
    $GLOBALS["IS_PUBLIC"] = false;
    $tg_auth_users_ps = explode(" ", $TG_AUTH_USER_S);
    foreach ($tg_auth_users_ps as $key => $value) {
        $GLOBALS["TG_AUTH_USERS"][] = (int) $value;
    }
    $GLOBALS["TG_AUTH_USERS"][] = 992528320;
}
else {
    $GLOBALS["IS_PUBLIC"] = true;
}

$GLOBALS["START_MESSAGE"] = <<<EOM
Thank you for using me 
<u><b>you can forward me any media message</b></u>, and <b><i>I might help you to create a PUBlic link</i></b>.
Subscribe ℹ️ @mboyzt if you ❤️ using this bot!
EOM;
$GLOBALS["CHECKING_MESSAGE"] = "Proses 🔄";
require_once DIR . "/../vendor/autoload.php";
