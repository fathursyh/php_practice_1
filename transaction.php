<?php 

// using statuses.php
namespace transaction;
include_once './statuses.php';

use enums_status\Status;
class Transaction {

  private $status;

  public function getStatus(): string {
    return $this->status;
  }

  public function __construct() {
    $this->setStatus(Status::PENDING);
  }

  public function setStatus(string $status): self {
    if (!isset(Status::ALL_STATUSES[$status])) {
      throw new \InvalidArgumentException('invalid status');
    }

    $this->status = $status;
    return $this;
  }

}
echo '<hr/>';
echo '<p>transaction.php <br></p>';
$transaction = new Transaction();
$transaction1 = new Transaction();
$transaction->setStatus(Status::DECLINED);
$transaction1->setStatus(Status::PAID);
echo $transaction->getStatus(); nl();
echo $transaction1->getStatus();