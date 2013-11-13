# OpenCart_Franko
### by John Atkinson (jga) from [BTC Gear](http://btcgear.com/)
### Forked by The Franko Collective

Donations can be paid here: **FRdiiTPozKMGZCLVntXdCJM5DhCf7RwVrk**

Initial bounty paid by cablepair.

This is an OpenCart payment module that communicates with a Franko client using JSON RPC.

This code accurately converts FRK currency to USD using the up-to-the-minute USD values for last trade value.  It is completely self contained and requires no cron jobs or external hardware other than a properly configured bitcoind server.  Every order creates a new bitcoin address for payment and gives it a label corresponding to the order_id of the order.  It installs like any other OpenCart plugin and it is completely integrated with OpenCart.

This extension has been tested with OpenCart versions between 1.5.2.1 and 1.5.5.1.

Any questions or comments can be sent to http://franko.freshdesk.com.


# Dependencies

This extension now requires previous installation of [vQmod](https://code.google.com/p/vqmod/) and will not run properly without it. vQmod enables making changes to core OpenCart functionality without actually editing the core OpenCart files.

# Installation

1. Install vQmod.
2. Upload all files maintaining OpenCart folder structure.
3. Install the payment module in the admin console (Extensions > Payments > Franko > Install).
4. Edit the payment module settings (Extensions > Payments > Franko > Edit).
5. Run at least one test order through checkout up until payment (no payment required).  The first order initializes the Franko currency and will return 0 BTC for the order total.

## Explanation of Settings

* *Franko RPC Username*: This is the username in the "rpcuser" line of your bitcoin.conf file.
* *Franko RPC Host Address*: This is the IP address of the computer frankod is running on.
* *Franko RPC Password*: This is the password in the "rpcpassword" line of your franko.conf file.
* *Franko RPC Port*: This is the port number in the "rpcport" line of your bitcoin.conf file.  The default port is 7913.
* *The prefix for the address labels*: The addresses will be assigned to accounts named with the format [prefix]_[order_id].
* *Is this a blockchain.info JSON-RPC server?*: Choose yes if connecting to blockchain.info JSON-RPC API.
* *Show BTC as a store currency*: If you select yes, your customers will be able to view prices in BTC.
* *Calculate BTC amount to this many decimal places*: Self explanatory. Choose the precision of the exchange rate calculation.
* *Time to complete order*: The number of seconds a customer has to send bitcoins to complete the order.
* *Status of a new order*: Choose a status for an order that has received payment with 0 confirmations.
* *Status*: Enable the Franko payment module here.
* *Sort Order*: Where you want this module to show up in relation to the other payment modules on the checkout page.

### New in version 1.4.0

* Now compatible with the http://frk.cryptocoinexplorer.com/ JSON-RPC API

* * *

Copyright (c) 2013 John Atkinson (jga)
Copyright (c) 2013 Franko Collective

See license.txt for license.
