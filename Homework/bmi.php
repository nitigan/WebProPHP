<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
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
    

    

<br><br><br>
<div class="container">
 <div class="columns is-centered">
  <div class="column box is-6">
        <center>

                <h1 style="font-size:30px">โปรแกรมคำนวณค่าดัชนีมวลกาย - BMI</h1>


        <br><br>
            <form class="" action="bmiCal.php" method="post">
            <table class="table is-bordered is-striped is-narrow" width=500px >

              

              <tr>
                <td>ส่วนสูง : </td>
                <td><input type="number" name="height" value="" class="Primary input" > </td><td>cm</td>
              </tr>
              <tr>
                <td>น้ำหนัก : </td>
                <td><input type="number" name="weight" value="" class="Primary input" ></td><td>Kg.</td>
            </tr>


        </table>
          <input type="submit" name="submit" value="Calculate BMI" class="button" >
        <br>

         
        </form>

        </center>
        <br>





      </div>
     </div>
    </div>
  </body>
</html>
