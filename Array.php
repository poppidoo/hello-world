<?php
	$BookArray = array("PHP ฉบับเริ่มต้น","คู่มือ Windows Vista","แต่งภาพด้วย Photoshop");
	print $BookArray[0]."<br>";
	print $BookArray[1]."<br>";
	print $BookArray[2]."<br>";
?>

<?php  
	// 3 x dimension array
	print ("สร้าง Array ขนาด 3 x 3 แล้วกำหนดค่า")."<hr>";
	
	$aa[0][0]=10;	$aa[1][0]=20;	$aa[2][0]=30;
	$aa[0][1]=40;	$aa[1][1]=50;	$aa[2][1]=60;
	$aa[0][2]=70;	$aa[1][2]=80;	$aa[2][2]=90;
	
	print "อาเรย์[0][1] =".$aa[0][1]."<br>";
	print "อาเรย์[1][2] =".$aa[1][2]."<br>";
	print "อาเรย์[2][0] =".$aa[2][0]."<br>";	
	
	print "ผลรวมของอาเรย์ทั้งหมด =".($aa[0][0]+$aa[1][0]+$aa[2][0]+$aa[0][1]+$aa[1][1]+$aa[2][1]+$aa[0][2]+$aa[1][2]+$aa[2][2])."<hr>";
?>

<?php
	
	print "สร้างข้อมูลชนิด Associative Array เพื่อเก็บข้อมูลส่วนตัว"."<hr>";
	$MyRec["name"] = "ภณัชต์ เติมสายทอง";
	$MyRec["age"] = 40;
	$MyRec["gender"] = "Male";
	
	print "ชื่อ ".$MyRec["name"]."<br>";
	print "ขณะนี้อายุ ".$MyRec["age"]." ปี, เพศ ".$MyRec["gender"]."<hr>";
?>

<?php
	$a = array
	(
		"apple" => array("color"=>"แดง","taste"=>"หวานกรอบ","shape"=>"กลม",),
		"orange"=> array("color"=>"ส้ม","taste"=>"เปรี้ยว","shape"=>"กลม",),
		"banana"=> array("color"=>"เหลือง","taste"=>"หวาน","shape"=>"เรียวยาว",)
	);
	print "แอปเปิ้ล มีรสชาด : ".$a["apple"]["taste"]."<br>";
	print "ส้มมีรูปทรง : ".$a["orange"]["shape"]."<br>";
	print "กล้วยหอมมีสี : ".$a["banana"]["color"]."<hr>";
?>

