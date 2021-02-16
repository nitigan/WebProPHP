<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
<br>
<div class="container">
<center>

<img src="7-11.jpg" width=40%>
  <p></p>
    <form action="mid1.php" action="get">


    

    <table class="table table-striped">

        <tr>
            <td>ลำดับที่</td>
            <td>รายชื่อสินค้า</td>
            <td>ราคาต่อหน่วย</td>
            <td>จำนวนที่ซื้อ</td>
        </tr>
  
        

        <tr >
        <td>1</td>
            <td><input type="text" name="shop1" size="70"></td>
            <td><input type="number" name="price1" min="0" max="100" step="10" value=0></td>
            <td><input type="number" name="num1" min="0" max="10" value=0></td>
        </tr>
        <tr >
        <td>2</td>
            <td><input type="text" name="shop2" size="70"></td>
            <td><input type="number" name="price2" min="0" max="100" step="10" value=0></td>
            <td><input type="number" name="num2" min="0" max="10"  value=0></td>
        </tr>
        <tr  >
        <td>3</td>
            <td><input type="text" name="shop3" size="70"></td>
            <td><input type="number" name="price3"  min="0" max="100" step="10"value=0></td>
            <td><input type="number" name="num3" min="0" max="10"  value=0></td>
        </tr>
        <tr  >
        <td>4</td>
            <td><input type="text" name="shop4" size="70"></td>
            <td><input type="number" name="price4" min="0" max="100" step="10" value=0></td>
            <td><input type="number" name="num4" min="0" max="10"  value=0></td>
        </tr>
        <tr  >
        <td>5</td>
            <td><input type="text" name="shop5" size="70"></td>
            <td><input type="number" name="price5" min="0" max="100" step="10" value=0></td>
            <td><input type="number" name="num5" min="0" max="10"  value=0></td>
        </tr>
        <tr>
        <td colspan=2 style="text-align: center">
        ลูกค้าชำระเงินด้วย:
            <select name="bankType">
                <option value="100">แบงค์ 100 บาท</option>
                <option value="500">แบงค์ 500 บาท</option>
                <option value="1000">แบงค์ 1000 บาท</option>
                
            </select>
        </td>
        <td colspan=2> จำนวน <input type="number" name="bankNum" min="0" max="100">  ใบ </td>
        </tr>

    </table>
    
    <input type="submit" value="คำนวณราคาสินค้าทั้งหมด และเงินทอน">

    </form>

  
<?php

    //$list1 = $_GET['list1'];
   // $list2 = $_GET['list2'];
    //$list3 = $_GET['list3'];
    //$num1 = $_GET['num1'];
    //$num2 = $_GET['num2'];
   // $num3 = $_GET['num3'];


    //echo $list1 ," จำนวน ", $num1 ,"<br>";
    //echo $list2 ," จำนวน ", $num2 ,"<br>";
    //echo $list3 ," จำนวน ", $num3 ,"<br>";

?>
<br>
สรุปการซื้อสินค้า
<br>
<table class="table table-striped" >

        <tr>
            <td>ลำดับที่</td>
            <td>รายชื่อสินค้า</td>
            <td>ราคาต่อหน่วย</td>
            <td>จำนวนที่ซื้อ</td>
            <td>ราคารวม</td>
        </tr>
  
        

        <tr >
        <td>1</td>
            <td>น้ำอัดลมกระป๋อง</td>
            <td>10</td>
            <td>4</td>
            <td>40</td>
        </tr>
        <tr >
        <td>2</td>
            <td>ขนมมันฝรั่งทอด</td>
            <td>20</td>
            <td>2</td>
            <td>40</td>
        </tr>
        <tr  >
        <td>3</td>
            <td>กาแฟสำเร็จรูป</td>
            <td>30</td>
            <td>2</td>
            <td>60</td>
        </tr>
        <tr  >
        <td>4</td>
            <td>ข้าวผัดกระเพราหมู</td>
            <td>40</td>
            <td>2</td>
            <td>80</td>
        </tr>
        <tr  >
        <td>5</td>
            <td>สปาเก็ตตี้</td>
            <td>50</td>
            <td>2</td>
            <td>100</td>
        </tr>
        <td colspan=3 style="text-align: center"> รวมจำนวนสินค้าและราคา </td>
           
            <td>12</td>
            <td>320</td>
        </tr>
        </tr>
        <td colspan=3 style="text-align: center"> ส่วนลด </td>
           
            <td>2%</td>
            <td>64</td>
        </tr>
        </tr>
        <td colspan=3 style="text-align: center"> ราคาสุทธิ </td>
           
            <td></td>
            <td>256</td>
        </tr>

        <td colspan=3 style="text-align: center"> ลูกค้าชำระเงิน จำนวน </td>
           
            <td>  </td>
            <td>1000</td>
        </tr>
        <td colspan=3 style="text-align: center"> เงินทอน จำนวน </td>
           
            <td>  </td>
            <td>744</td>
        </tr>
        <td colspan=3 style="text-align: center"> เงินทอน ธนบัตร 500 บาท จำนวน </td>
           
            <td>  </td>
            <td>1</td>
        </tr>
        <td colspan=3 style="text-align: center"> เงินทอน ธนบัตร 100 บาท จำนวน </td>
           
            <td>  </td>
            <td>2</td>
        </tr>
        <td colspan=3 style="text-align: center"> เงินทอน เหรียญ 10 บาท จำนวน </td>
           
            <td>  </td>
            <td>4</td>
        </tr>
        <td colspan=3 style="text-align: center"> เงินทอน เหรียญ 1 บาท จำนวน </td>
           
            <td>  </td>
            <td>4</td>
        </tr>
    </table>
    </div>


</center>
</body>
</html>