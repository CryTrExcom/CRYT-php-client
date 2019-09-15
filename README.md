# CRYT PHP Client

Here is a command line tool that facilitate CRYT node management and to do some blockchain queries.
It comes with a very basic PHP library to call CRYT API nodesj, that you may like to use in
you PHP projects.

Requirements: PHP5+ for the php library alone

## Installation

If you have git installed:

```	
git clone https://github.com/CryTrExcom/CRYT-php-client.git
```
(il will create the folder CRYT-php-client)

else

```
wget https://github.com/CryTrExcom/CRYT-php-client/archive/master.zip;
unzip CRYT-php-client.zip; 
```

## To use with PHP projects

Add `require('/PATH_TO/CRYT-php-client/params.php')` and  `class Cryt extends CrytApi {}` to the top of your PHP project

Having your own class to store your own functions remove the risk to loose anything during an update.

Here is an example of a sendMoney request :

```php
$oApp = new Cryt;
$oApp->aInput = array(
				'requestType'=>'sendMoney',
				'recipient'=>'CRYT-SL44-R65Z-HMNZ-7WVJM',
				'amountNQT'=>'500000000000',
				'secretPhrase'=>'PUT_YOUR_HOT_WALLET_SECRET',
				'message'=>'Here is your payment',
				'messageIsPrunable'=>true,
				'messageToEncrypt'=>true,
				'feeNQT'=>100000000	// 1 CRYT = 100000000 NQT			
);
$oResp = $oApp->getResponse();
```

If you need to make the same query to an another node :

```php
$oApp->protocol='http';
$oApp->host='IPADDRESS';
$oApp->protocol='PORT';

$oResp = $oApp->getResponse();
```

Available Functions:

	function getSecret()

	function setSecret($sSecret)

	function getAccountId()
	'requestType'=>'getAccountId'

	function getAccount($accountId)
	'requestType'=>'getAccount'

	function getAliasList($accountId,$index=0)
	'requestType'=>'getAliases'

	function getTransaction($transactionId)
	'requestType'=>'getTransaction'

	function getBlock($blockId)
	'requestType'=>'getBlock'

	function getTime()
	'requestType'=>'getTime' 

	function sendMoney($amount, $recipient, $deadline=60,$fee=0.01,$reference)
	'requestType'=>'sendMoney'

	function unlock()
	'requestType'=>'startForging'

	function lock()
	'requestType'=>'stopForging'

	function islocked()
	'requestType'=>'getForging'

