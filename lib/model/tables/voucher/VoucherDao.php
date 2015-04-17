<?php
require_once('lib/model/Dao.php');
class VoucherDao extends Dao {
	public function __construct() {
		parent::__construct("Voucher", "VoucherDto");
	}
}
?>