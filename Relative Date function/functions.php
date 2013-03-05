<?php

/*
/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\ INSTRUCTIONS /\/\/\/\/\/\/\/\/\/\/\/\/\//\/\/\/\/\

The following adds a function to WordPress that lets you use the relative date of a post
rather than the absolute date. Instead of January 1, 2010, you would see "2 years ago"
and instead of the current date, you'd see "5 hours ago". You get the idea.

Don't copy any of this stuff up here. Just copy the stuff down below and paste it into
your existing functions.php file.

This is intended for Standard Theme 3 (www.standardtheme.com). Add this to your
child theme folder rather than modifying the core functions.php file.

/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\//\/\/\/\/\/\/\/\/\/\
*/


// Add Relatative Date Function
if(!function_exists('how_long_ago')){
        function how_long_ago($timestamp){

            $difference = current_time('timestamp') - $timestamp;

            if($difference >= 60*60*24*365){        // if more than a year ago
                $int = intval($difference / (60*60*24*365));
                $s = ($int > 1) ? 's' : '';
                $r = $int . ' year' . $s . ' ago';
            } elseif($difference >= 60*60*24*7*5){  // if more than five weeks ago
                $int = intval($difference / (60*60*24*30));
                $s = ($int > 1) ? 's' : '';
                $r = $int . ' month' . $s . ' ago';
            } elseif($difference >= 60*60*24*7){        // if more than a week ago
                $int = intval($difference / (60*60*24*7));
                $s = ($int > 1) ? 's' : '';
                $r = $int . ' week' . $s . ' ago';
            } elseif($difference >= 60*60*24){      // if more than a day ago
                $int = intval($difference / (60*60*24));
                $s = ($int > 1) ? 's' : '';
                $r = $int . ' day' . $s . ' ago';
            } elseif($difference >= 60*60){         // if more than an hour ago
                $int = intval($difference / (60*60));
                $s = ($int > 1) ? 's' : '';
                $r = $int . ' hour' . $s . ' ago';
            } elseif($difference >= 60){            // if more than a minute ago
                $int = intval($difference / (60));
                $s = ($int > 1) ? 's' : '';
                $r = $int . ' minute' . $s . ' ago';
            } else {                                // if less than a minute ago
                $r = 'moments ago';
            }

            return $r;
        }
    }


?>