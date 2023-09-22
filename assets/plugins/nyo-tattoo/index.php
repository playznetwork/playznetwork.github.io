<?php

$folder = array(
    'head/mpbeach_overlays',
    'head/mpbiker_overlays',
    'head/mpbusiness_overlays',
    'head/mpchristmas2_overlays',
    'head/mpgunrunning_overlays',
    'head/mphipster_overlays',
    'head/mpsmuggler_overlays',
    'head/mpstunt_overlays',
    'head/multiplayer_overlays',
    'head/mpheist3_overlays',

    'leftarm/mpairraces_overlays',
    'leftarm/mpbeach_overlays',
    'leftarm/mpbiker_overlays',
    'leftarm/mpbusiness_overlays',
    'leftarm/mpchristmas2_overlays',
    'leftarm/mpchristmas2017_overlays',
    'leftarm/mpgunrunning_overlays',
    'leftarm/mphipster_overlays',
    'leftarm/mpimportexport_overlays',
    'leftarm/mplowrider_overlays',
    'leftarm/mplowrider2_overlays',
    'leftarm/mpluxe_overlays',
    'leftarm/mpluxe2_overlays',
    'leftarm/mpsmuggler_overlays',
    'leftarm/mpstunt_overlays',
    'leftarm/multiplayer_overlays',
    'leftarm/mpheist3_overlays',
    'leftarm/mpvinewood_overlays',

    'rightarm/mpbeach_overlays',
    'rightarm/mpbiker_overlays',
    'rightarm/mpbusiness_overlays',
    'rightarm/mpchristmas2_overlays',
    'rightarm/mpchristmas2017_overlays',
    'rightarm/mpgunrunning_overlays',
    'rightarm/mphipster_overlays',
    'rightarm/mpimportexport_overlays',
    'rightarm/mplowrider_overlays',
    'rightarm/mplowrider2_overlays',
    'rightarm/mpluxe_overlays',
    'rightarm/mpluxe2_overlays',
    'rightarm/mpsmuggler_overlays',
    'rightarm/mpstunt_overlays',
    'rightarm/multiplayer_overlays',
    'rightarm/mpheist3_overlays',
    'rightarm/mpvinewood_overlays',

    'leftleg/mpbeach_overlays',
    'leftleg/mpbiker_overlays',
    'leftleg/mpbusiness_overlays',
    'leftleg/mpchristmas2_overlays',
    'leftleg/mpgunrunning_overlays',
    'leftleg/mphipster_overlays',
    'leftleg/mplowrider2_overlays',
    'leftleg/mplowrider_overlays',
    'leftleg/mpluxe2_overlays',
    'leftleg/mpluxe_overlays',
    'leftleg/mpstunt_overlays',
    'leftleg/multiplayer_overlays',
    'leftleg/mpheist3_overlays',
    'leftleg/mpvinewood_overlays',

    'rightleg/mpbeach_overlays',
    'rightleg/mpbiker_overlays',
    'rightleg/mpbusiness_overlays',
    'rightleg/mpchristmas2_overlays',
    'rightleg/mpgunrunning_overlays',
    'rightleg/mphipster_overlays',
    'rightleg/mplowrider2_overlays',
    'rightleg/mplowrider_overlays',
    'rightleg/mpluxe2_overlays',
    'rightleg/mpluxe_overlays',
    'rightleg/mpsmuggler_overlays',
    'rightleg/mpstunt_overlays',
    'rightleg/multiplayer_overlays',
    'rightleg/mpheist3_overlays',



    'torso/mpairraces_overlays',
    'torso/mpbeach_overlays',
    'torso/mpbiker_overlays',
    'torso/mpbusiness_overlays',
    'torso/mpchristmas2_overlays',
    'torso/mpchristmas2017_overlays',
    'torso/mpchristmas2018_overlays',
    'torso/mpgunrunning_overlays',
    'torso/mphipster_overlays',
    'torso/mpimportexport_overlays',
    'torso/mplowrider_overlays',
    'torso/mplowrider2_overlays',
    'torso/mpluxe_overlays',
    'torso/mpluxe2_overlays',
    'torso/mpsmuggler_overlays',
    'torso/mpstunt_overlays',
    'torso/multiplayer_overlays',
    'torso/mpheist3_overlays',
    'torso/mpvinewood_overlays',
);

$i = 1;
for ($x=0; $x<count($folder); $x++){
    $scan = scandir($folder[$x]);
    foreach($scan as $file) {
        if (!is_dir($folder[$x].$file)) {
             $stamp= imagecreatefrompng('wathermaker.png');
             $im = imagecreatefromjpeg($folder[$x].'/'.$file);

            $marge_right = 0;
            $marge_bottom = 0;
            $sx = imagesx($stamp);
            $sy = imagesy($stamp);

            $imgx = imagesx($im);
            $imgy = imagesy($im);
            $centerX=round(0);
            $centerY=round(0);

            imagecopy($im, $stamp, $centerX, $centerY, 0, 0, imagesx($stamp), imagesy($stamp));

            imagejpeg($im, $folder[$x].'/'.$file, 100);
         }
    }
}



?>
