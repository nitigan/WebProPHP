<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">
    <style>
    .button {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        margin: 4px 2px;
        cursor: pointer;
    }
   </style>
</head>
<body>
<div class="container">
 <div class="columns is-centered">
  <div class="column box is-6">

  
<?php
          if(isset($_POST['submit'])){
                $h = $_POST["height"];
                $w = $_POST["weight"];


                


          ?><br>

          <?php
               $sum=$w/(($h/100)*($h/100));
               
               ?><br>
          

        <center>

                <h1 style="font-size:30px">ผลการคำนวณค่าดัชนีมวลกาย - BMI</h1>

            <?php
                if($sum >=30){
                    echo '<img src="bmi5.jpg" width=20%>';
                }else if($sum >=25){
                    echo '<img src="bmi4.jpg"  width=20%>';
                }else if($sum >=23){
                    echo '<img src="bmi3.jpg"  width=20%>';
                }else if($sum >=18.5){
                    echo '<img src="bmi2.jpg"  width=20%>';
                }else{
                    echo '<img src="bmi1.jpg"  width=20%>';
                }

            ?>
        <br><br>
             
            <table class="table is-bordered is-striped is-narrow" width=500px >

              

              <tr>
                 
                <td><?php echo "ส่วนสูงของคุณ : $h  ";?>cm</td>
              </tr>
              <tr>
                 
                <td><?php echo "น้ำหนักของคุณ : $w  ";?>Kg.</td>
            </tr>
            <tr><td><?php echo "BMI ของคุณ คือ : $sum" ?></td></tr>
            <tr><td><?php
               if($sum>=30){
                 echo "ดัชนีมวลกายของคุณ : อ้วนมาก";
               }
               else if($sum>=25.0&&$sum<=29.9){
                 echo "ดัชนีมวลกายของคุณ : อ้วน";
               }
               else if($sum>=23.0&&$sum<=24.9){
                 echo "ดัชนีมวลกายของคุณ : ท้วม";
               }
               else if($sum>=18.5&&$sum<=22.9){
                 echo "ดัชนีมวลกายของคุณ : ปกติ";
               }
               else if($sum<18.5){
                 echo "ดัชนีมวลกายของคุณ : ผอม";
               }

             }
          ?>
          </td></tr>
          <tr><td>
             คุณต้องลดน้ำหนักอีก 
             <?php
                $newWeight = 22.9*(($h/100)*($h/100));
                echo ($w-$newWeight);
             ?>
             kg. เพื่อให้ BMI อยู่ในเกณฑ์ปกติ
          </td></tr>
          <tr><td>
          <center><a href="bmi.php"><button>Back</button></a>
          </center>
             
          </td></tr>


        </table>
        

        </center>

</body>
</html>