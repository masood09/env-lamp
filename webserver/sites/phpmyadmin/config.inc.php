<?php
$cfg['CheckConfigurationPermissions'] = false;
$cfg['blowfish_secret'] = 'a8b7c6d'; /* YOU MUST FILL IN THIS FOR COOKIE AUTH! */
$i = 0;
$i++;
$cfg['Servers'][$i]['auth_type'] = 'cookie';
$cfg['Servers'][$i]['host'] = 'database';
$cfg['Servers'][$i]['connect_type'] = 'tcp';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = false;
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';
?>
