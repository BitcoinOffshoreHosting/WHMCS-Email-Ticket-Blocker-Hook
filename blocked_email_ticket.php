<?php
use WHMCS\Database\Capsule;

// This hook prevents users with blocked email addresses from opening support tickets
add_hook('TicketOpenValidation', 1, function($vars) {

    // Retrieve blocked email addresses from 'tblticketspamfilters' where type is 'sender'
    $blockedEmails = Capsule::table('tblticketspamfilters')
        ->where('type', '=', 'sender')  // Only filter by 'sender' type
        ->pluck('content')              // Extract the 'content' field as the blocked email list
        ->toArray();

    // Check if the email trying to open the ticket is in the blocked list
    if (in_array($vars['email'], $blockedEmails)) {
        return 'Your email address is blocked from submitting tickets.'; // Custom block message
    }
    
});
