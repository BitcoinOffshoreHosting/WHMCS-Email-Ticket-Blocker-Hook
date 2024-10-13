# WHMCS-Email-Ticket-Blocker-Hook
This WHMCS hook prevents users with specific email addresses from opening support tickets. It leverages the WHMCS block list feature and helps in minimizing ticket spam by automatically rejecting ticket submissions from blocked email addresses.

## Features
- Checks the `tblticketspamfilters` table for email addresses flagged as `sender`.
- Blocks ticket creation from any email address in the block list.
- Simple and efficient WHMCS hook to improve ticket management.

## How it Works
This hook taps into the WHMCS `TicketOpenValidation` hook point, checking if the email trying to submit a ticket exists in the `tblticketspamfilters` table under the `sender` type. If a match is found, the ticket submission is blocked, and a custom error message is returned.

## Installation

1. Clone or download this repository.
2. Place the hook file into the following directory in your WHMCS installation:
/path/to/whmcs/includes/hooks/
3. The hook will automatically start working based on your WHMCS block list.

## Usage

- This hook is intended to prevent ticket submissions from unwanted email addresses using the WHMCS block list feature.
- If an email address is blocked, users will see the message: `Your email address is blocked from submitting tickets.`

## Customization

- You can modify the blocked email list by editing the WHMCS spam filters via the WHMCS admin panel.
- To change the block message, simply edit the return string in the hook code.

## License

This project is open-source and licensed under the [MIT License](LICENSE).

## Contribution

Feel free to open issues or submit pull requests if you have suggestions, improvements, or bug reports.

## Contact

For any questions or assistance, you can reach out on LowEndTalk (BTCHost) or via DM.



