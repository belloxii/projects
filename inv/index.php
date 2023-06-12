<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>

        html,body{
                    background-color: grey;
                    font-weight: bold;
                    font-family: Core Sans N SC 75 ExtraBold;
                }
        .page{
                    height:290mm;
                    width:210mm;
                    margin: auto;
                    padding: 5%;
                    background-color: white;
        }
        table, th, td, tr {
                    border: 2px solid black;
                    border-collapse: collapse;
                    }
        #logo{
            display: block;
            height: 2.2cm;
            width: 2.5cm;
            background-color: #12188c;
            border-radius: 50%;
            color: white;
            padding: auto;
            padding-top: 15px;
            text-align: center;
            /* font-family: Gidley JNL; */
            margin-top: 5%;
        }
        #head{
            text-align: center;
            color: #009;
            margin: 0px;
            padding: 0px;
            font-size: large;
            /* font-weight: bolder; */
        }
        #under{
            border-top: none;
            border-left: none;
            border-right: none;
        }

        #addr{
            color: #fc4503;
            margin: 0px;
            padding: 0px;
        }

        #inv{
            background-color: #fc4503;
            color: white;
            width: 30%;
            margin: auto;
            margin-top: 4px;
        }
        h1{
            margin: 0px;
            padding: 0px;
        }
        p{
            margin: 0px;
            padding: 0px;
        }
        
    </style>
</head>

<body>

<div class="container">
 <div class="page">

 <div class="row">

<div class="col-2" id="logo"><h1><strong>IIL</strong></h1></div>

<div class="col-10" id="head">
  <h1 style="font-weight: bolder;"><strong>ISHAQKEJI</strong></h1>
  <h1 style="font-weight: bolder;"><strong>INTEGRATED LIMITED</strong></h1>
  <p><strong>General Contractor, Programs and Project Management</strong></p>
  <p id="addr">Address: No. 625, Wuye District, Abuja. Phone No: 07062237700</p>
  <h3 id="inv">INVOICE</h3>
</div>

<div style="margin:15px">
<div style="float:left">
  <p style="float:left">Name: </p>
  <input type="text" id="under" style="width:9cm"> <br>
  <input type="text" id="under" style="width:10cm"><br>
  <input type="text" id="under" style="width:10cm">
  </div>
  <table style="float:right; margin:15px">
    <tr>
        <th>Day</th>
        <th>Month</th>
        <th>Year</th>
    </tr>
    <tr>
        <td contenteditable id="day"><input type="text"></td>
        <td contenteditable id="month"><input type="text"></td>
        <td contenteditable id="year"><input type="text"></td>
    </tr>
  </table>
 </div>

<script>
document.getElementById('day').innerHTML = (new Date().toDateString()).slice(8,10);
document.getElementById('month').innerHTML = (new Date().toDateString()).slice(4,7)
document.getElementById('year').innerHTML = (new Date().toDateString()).slice(10,15)
</script>

  <table contenteditable class="table" style="margin-bottom: 2cm;">
    <tr>
        <th rowspan="2">S/N</th>
        <th rowspan="2">Description of Item</th>
        <th rowspan="2">Quantity</th>
        <th rowspan="2">Rate</th>
        <th colspan="2">Amount</th>
    </tr>

    <tr>
        <th>₦</th>
        <th>K</th>
    </tr>
    
    <tbody id="tableBody">
    <tr>
        <td>00</td>
        <td>0000</td>
        <td>0000</td>
        <td>0000</td>
        <td>00</td>
    </tr>

    <tr>
        <td>00</td>
        <td>0000</td>
        <td>0000</td>
        <td>0000</td>
        <td>00</td>
    </tr>
    </tbody>

    <tr>
        <td>7.5% VAT</td>
        <td></td>
        <td></td>
        <td></td>
        <td>0000</td>
        <td>00</td>
    </tr>

    <tr>
        <td></td>
        <td><h5>Account Details:</h5>
            <pre>Name: Ishaqkeji Integrated Limited
Account No.: 1233325955
Bank Name: Access
TIN: 22316607-0001</pre>
        </td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>

    <tr>
        <td colspan="4" align="right">TOTAL ₦</td>
        <td>0000</td>
        <td>00</td>
    </tr>
  </table>

  <table id="myTable">
  <tr>
    <td>Row 1, Cell 1</td>
    <td>Row 1, Cell 2</td>
  </tr>
  <tr>
    <td>Row 2, Cell 1</td>
    <td>Row 2, Cell 2</td>
  </tr>
</table>

  <button onclick="addRow()">Add Row</button>
  <button onclick="delRow()">Delete Row</button>

  <div class="row" style="margin-bottom: 2cm;">
    <p class="col-3">Amount in words:</p>
    <input type="text" class="col-9" id="under">   
  </div>
  
<div class="row">
    <p class="col-8">__________________________________</p>
    <p class="col-4">__________________________________</p>
</div>

<div class="row">
    <p class="col-8">Customer's Signature</p>
    <p id="dd" class="col-4">Manager's Signature</p>
</div>
 
</div>    

<script>
function addRow() {
  var table = document.getElementById("tableBody");

  var row = table.insertRow();
  var cell1 = row.insertCell(1);
  var cell1 = row.insertCell(1);
  var cell2 = row.insertCell(2);
  cell1.innerHTML = "New Row, Cell 1";
  cell2.innerHTML = "New Row, Cell 2";
}

function delRow() {
var table = document.getElementById("tableBody");
table.deleteRow(table.rows.lenght-1);
}
 
var table = document.getElementById("tableBody");
  var rows = table.getElementsByTagName("tr");

  for (var i = 0; i < rows.length; i++) {
    var cell = document.createElement("td");
    cell.innerHTML = i + 1;
    rows[i].insertBefore(cell, rows[i].firstChild);
  }
</script>

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.js"></script>

</body>
</html>