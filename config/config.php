<?php
include 'security.php';
//Do not edit above

//Configuration - Edit below

//SteamAPI Developer ID - Replace below with your steam developer id
$steamapi = 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX';

//Please enter the SteamAPI if you are using this feature
$steaminfo = true;

//If below is true then it will enable servername
$sname = true;
$servername = 'Impact Gaming';

//Set base color below RGB This is the color that the borders and progress bar will be SET THIS VALUE EVEN IF BORDER IS SET TO FALSE for the progress bar to work
$r = '105';
$g = '166';
$b = '245';

//if you set below to false it will disable the border on all divs including the progress bar
$border = true;
//If below is true it will make all borders curved -- Uncomment below before setting to true --- This feature is still in development and some of the borders may not respond correctly
$bcurved = false;

//0 = Static Image - check below for image name for static, 1 = Slide Show - Just replace the images from 1 - 6 in the image folder if you want to change the current slide show backgrounds
$background =  1;

//Static Image Settings
$backimage = '1.jpg';

//Background Overlay Effect
//0 = Dotted, 1 = Stripped from Left, 2 = Stripped from Right, 3 = Disable
$overlay = 2;

//If below true then it enables the music player else if false it will disable and hide the div box in the top left
$music = true;
//Below value sets the volume please use between 0 to 100
$mvol = 10;

//If below true then it will show downloading content in the bottom left if false it will disable and hide the dive box in the bottem left
$content = true;

//Enable or disable the custom boxes below
$left = false; //Uncomment below if you set this value to true.
//$lefthead = "Left Panel Header";
//$leftbody = "Put anything you want in the body here!";

$right = false; //Uncomment below if you set this value to true.
//$righthead = "Right Panel Header";
//$rightbody = "Put anything you want in the body here!";

//End of Configuration

//Do not edit below here unless you know what you are doing.

//So much stuff below here? lel
$steamsystem = "JHBsbmFtZSAgPSAnVW5rbm93biBQbGF5ZXInOwokYXZhdGFyICA9ICdpbWFnZXMvbm91c2VyLnBuZyc7CiRtYXBuYW1lID0gJ1Vua25vd24gTWFwJzsKaWYgKGlzc2V0KCRfR0VUWydzdGVhbWlkJ10pKSB7CiAgICAkZGF0YSA9ICdodHRwOi8vYXBpLnN0ZWFtcG93ZXJlZC5jb20vSVN0ZWFtVXNlci9HZXRQbGF5ZXJTdW1tYXJpZXMvdjAwMDIvP2tleT0nIC4gJHN0ZWFtYXBpIC4gJyZzdGVhbWlkcz0nLiRfR0VUWydzdGVhbWlkJ107CiAgICAkZiA9IGZpbGVfZ2V0X2NvbnRlbnRzKCRkYXRhKTsKICAgICRhcnIgPSBqc29uX2RlY29kZSgkZiwgdHJ1ZSk7CiAgICBpZiAoaXNzZXQoJGFyclsncmVzcG9uc2UnXVsncGxheWVycyddWzBdWydwZXJzb25hbmFtZSddKSkKICAgICAgICAkcGxuYW1lID0gJGFyclsncmVzcG9uc2UnXVsncGxheWVycyddWzBdWydwZXJzb25hbmFtZSddOwogICAgaWYgKGlzc2V0KCRhcnJbJ3Jlc3BvbnNlJ11bJ3BsYXllcnMnXVswXVsnYXZhdGFyJ10pKQogICAgICAgICRhdmF0YXIgPSAkYXJyWydyZXNwb25zZSddWydwbGF5ZXJzJ11bMF1bJ2F2YXRhcmZ1bGwnXTsKfQ==";
eval(base64_decode($steamsystem));
?>