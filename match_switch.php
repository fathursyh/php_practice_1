<?php 

$paymentStatus = 'pending';
echo '<p>Switch Case</p>';
switch ($paymentStatus) {
  case 'complete':
    echo 'paid';
    break;
  ####
  case 'denied' :  
  case 'error' :
    echo 'payment declined';
    break;
  ####
  case 'pending' :
    echo 'payment pending';
    break;
  ####
  default :
    echo 'unknown payment status';
    break;
}
echo '<hr/>'; nl();
#############################################
echo '<p>Match Case</p>';
match($paymentStatus) {
  'complete' => print 'payment paid',
  'denied', 'error' => print 'payment declined',
  'pending' => print 'payment pending',
  default => print 'unknown payment status',
};
nl();


