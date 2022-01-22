<?php
class Bill extends Db{
    public function getAllBill(){
        $sql = parent::$connection->prepare("SELECT * FROM bill ORDER BY id_bill DESC");
        return  parent::select($sql);
    }
    public function getBillById($id){
        $sql = parent::$connection->prepare("SELECT * FROM bill WHERE id_bill='$id'");
        return  parent::select($sql);
    }
}