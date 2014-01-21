<?php

return array(

    'multi' => array(

        'kumis' => array (
            'driver' => 'eloquent',
            'model' => 'User',
        ),

        'reminder' => array(
            'email' => 'emails.auth.reminder',
            'table' => 'password_reminders',
            'expire' => 60,
        ),

    )
);
