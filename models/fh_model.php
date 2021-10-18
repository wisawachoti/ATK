<?php

class fh_Model
{

    public $field_hospital_id, $fh_name, $green, $yellow, $red;



    // =============================================================================================================================================__construct

    public function __construct($field_hospital_id, $fh_name, $green, $yellow, $red)
    {
        $this->field_hospital_id =$field_hospital_id;
        $this->fh_name = $fh_name;
        $this->green  = $green;
        $this->yellow  = $yellow;
        $this->red  =  $red;
    }

    // =============================================================================================================================================__get

    //     public static function get($detail_id)
    //     {
    //         require("connection_connect.php");
    //         $sql = "SELECT offerdetail_id,offer_id,of.product_id,quantity,of.print as pt,cp.color_name , cp.cp_id as c FROM offerdetail as of INNER JOIN Color_Product as cp ON cp.cp_id = of.cp_id
    //                   WHERE offerdetail_id=$detail_id ";
    //         $result = $conn->query($sql);
    //         $my_row = $result->fetch_assoc();

    //             $offer_id= $my_row[offer_id];
    //             $quantity = $my_row[quantity];
    //             $product_id= $my_row[product_id];
    //             $printt = $my_row[pt];
    //             $color_name= $my_row[color_name];
    //             $cp_id= $my_row[c];
    //         require("connection_close.php");

    //         return new offerdetailModel($detail_id,$offer_id,$product_id,$quantity,$printt,$color_name,$cp_id);
    //     }

    // // =============================================================================================================================================__search

    //     public static function search($key)
    //     {
    //         $offerdetailList=[];
    //         require("connection_connect.php");

    //         $sql = "SELECT offerdetail_id,offer_id,of.product_id,quantity,of.print as pt,cp.color_name , cp.cp_id as c FROM offerdetail as of INNER JOIN Color_Product as cp ON cp.cp_id = of.cp_id

    //          WHERE (of.offer_id like '%$key%' or of.product_id like '%$key%' or of.quantity like '%$key%' or of.print like '%$key%' or cp.color_name like '%$key%') ";
    //         $result = $conn->query($sql);
    //         while($my_row = $result->fetch_assoc())
    //         {

    //             $detail_id= $my_row[offerdetail_id];
    //             $offer_id= $my_row[offer_id];
    //             $quantity = $my_row[quantity];
    //             $product_id= $my_row[product_id];
    //             $printt = $my_row[pt];
    //             $color_name= $my_row[color_name];
    //             $cp_id= $my_row[c];

    //             $offerdetailList[] = new offerdetailModel($detail_id,$offer_id,$product_id,$quantity,$printt,$color_name,$cp_id);

    //         }
    //         require("connection_close.php");

    //         return $offerdetailList;
    //     }

    // // =============================================================================================================================================__update

    //     public static function update($detail_id,$offer_id,$product_id,$quantity,$printt,$cp_id,$detailid)
    //     {
    //         require("connection_connect.php");
    //         $sql = "UPDATE offerdetail
    //         SET `offerdetail_id`=$detail_id,`offer_id`='$offer_id',`product_id`='$product_id',`print`=$printt,`quantity`=$quantity
    //         WHERE `offerdetail_id`='$detailid'";
    //         $result = $conn->query($sql);

    //         $sql2 = "UPDATE `offerdetail`
    //         SET `cp_id`=$cp_id
    //         WHERE `offerdetail_id`='$detailid'";
    //         $result = $conn->query($sql2);

    //         require("connection_close.php");
    //         return "update success $result row";

    //     }

    // // =============================================================================================================================================__delete

    //     public static function delete($detailid)
    //     {
    //         require("connection_connect.php");
    //         $sql = "DELETE FROM offerdetail WHERE offerdetail_id = $detailid ";
    //         $result = $conn->query($sql);
    //         require("connection_close.php");
    //         return "delete success $result row";
    //     }

    // // =============================================================================================================================================__Add

    //     public static function Add($offer_id,$product_id,$quantity,$print,$cp_id)
    //     {
    //         require("connection_connect.php");
    //         $sql = "INSERT INTO `offerdetail`(`offer_id`,`product_id`,`quantity`,`print`,`cp_id` ) 
    //         VALUES ('$offer_id','$product_id',$quantity,$print,$cp_id)";
    //         $result = $conn->query($sql);
    //         require("connection_close.php");
    //         return ;
    //     }

    // // =============================================================================================================================================__getall

    public static function getAll()
    {

        $fhList = [];
        require("connection_connect.php");
        $sql = "SELECT `field_hospital_id`,`fh_name`,`green`,`yellow`,`red` FROM Field_hospital";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {

            $field_hospital_id = $my_row['field_hospital_id'];
            $fh_name = $my_row['fh_name'];
            $green = $my_row['green'];
            $yellow = $my_row['yellow'];
            $red = $my_row['red'];


            $fhList[] = new  fh_Model($field_hospital_id, $fh_name, $green, $yellow, $red);
        }
        require("connection_close.php");

        return $fhList;
    }

    public static function Add($field_hospital_id, $fh_name, $green, $yellow, $red)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `Field_hospital`(`field_hospital_id`, `fh_name`, `green`, `yellow`, `red`) 
        VALUES($field_hospital_id, $fh_name, $green, $yellow, $red)";
        $result = $conn->query($sql);
        require("connection_close.php");
        return ;
    }


}
