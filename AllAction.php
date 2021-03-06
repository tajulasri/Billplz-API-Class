<?php

/*
 * This file shows how to Create A Bill using BillplzCURL class
 * The commented line is Optional parameter
 * 
 */
require 'billplz.php';
$api_key = '4e49de80-1670-4606-84f8-2f1d33a38670';

$a = new Billplz($api_key);

/*
 * Create Collection
 */
$collectionid2 = $a->create_collection('Aikkkk');

/*
 * Validate Collection
 */
$booleanA = $a->check_collection_id($collectionid2);

/*
 * Get Collection Index at Page 1
 */
$colIndex = $a->getCollectionIndex('1');
echo '<pre>' . print_r($colIndex, true) . '</pre>';

/*
 * Create Bills
 */
$a->setName("Wan Zulkarnain");
$a->setAmount('10.60');
$a->setEmail('wan@wanzul-hosting.com');
$a->setDescription("Test");
$a->setPassbackURL('http://callback-url.com', 'http://redirect-url.com');
//$a->setCollection('ypppifx4m');
//$a->setPassbackURL('http://callback-url.com');
//$a->setReference_1('Exam');
//$a->setReference_1_Label('A');
//$a->setMobile('0145356443');
//$a->setDeliver('0'); //No Notification
//$a->setDeliver('1'); //Email Notification
//$a->setDeliver('2'); //SMS Notification
//$a->setDeliver('3'); //Email & SMS Notification
//$a->create_bill(true);
$a->create_bill();
echo $a->getURL();

$billid = $a->getID();

/*
 * Get Bills
 */
$abc = $a->check_bill($billid);
echo '<pre>' . print_r($abc, true) . '</pre>';

/*
 * Delete Bills
 */
if ($a->deleteBill($billid)) {
    // Successfully deleted bills
} else {
    // Failed to delete bills
}
