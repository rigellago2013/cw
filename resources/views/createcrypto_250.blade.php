@extends('layouts.cryptoapp')

@section('content')

<div class="container-fluid">

<input type="file" id="fileUpload" />
<input type="button" id="upload" value="Upload" onclick="Upload()" />
<input type="button" id="push_live" class="btn btn-primary" value="Push Live"/>
<hr />
<div id="dvExcel"></div>



    
</div>
@endsection


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.13.5/xlsx.full.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.13.5/jszip.js"></script>
<script type="text/javascript">
    function Upload() {
        //Reference the FileUpload element.
        var fileUpload = document.getElementById("fileUpload");
 
        //Validate whether File is valid Excel file.
        var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.xls|.xlsx)$/;
        if (regex.test(fileUpload.value.toLowerCase())) {
            if (typeof (FileReader) != "undefined") {
                var reader = new FileReader();
 
                //For Browsers other than IE.
                if (reader.readAsBinaryString) {
                    reader.onload = function (e) {
                        ProcessExcel(e.target.result);
                    };
                    reader.readAsBinaryString(fileUpload.files[0]);
                } else {
                    //For IE Browser.
                    reader.onload = function (e) {
                        var data = "";
                        var bytes = new Uint8Array(e.target.result);
                        for (var i = 0; i < bytes.byteLength; i++) {
                            data += String.fromCharCode(bytes[i]);
                        }
                        ProcessExcel(data);
                    };
                    reader.readAsArrayBuffer(fileUpload.files[0]);
                }
            } else {
                alert("This browser does not support HTML5.");
            }
        } else {
            alert("Please upload a valid Excel file.");
        }
    };
    function ProcessExcel(data) {
        //Read the Excel File data.
        var workbook = XLSX.read(data, {
            type: 'binary'
        });
 





        //Fetch the name of First Sheet.
        var firstSheet = workbook.SheetNames[0];
 
        //Read all rows from First Sheet into an JSON array.
        var excelRows = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[firstSheet]);
 



        
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            //$(".postbutton").click(function(){
                $.ajax({
                    /* the route pointing to the post function */
                    url: '/add_crypto_250',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {_token: CSRF_TOKEN, message:JSON.stringify(excelRows)},
                    dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) {
                        console.log(data); 
//$(".writeinfo").append(data.msg); 
                    }
                }); 
            //});




        //Create a HTML Table element.
        var table = document.createElement("table");
        table.border = "1";
        table.class="table";
 
        //Add the header row.
        var row = table.insertRow(-1);


        //Add the header cells.
        //var headerCell = document.createElement("TH");
       //headerCell.innerHTML = "srno";
        //row.appendChild(headerCell);
 
        var headerCell  = document.createElement("TH");
        headerCell.innerHTML = "position";
        row.appendChild(headerCell);
 
        headerCell = document.createElement("TH");
        headerCell.innerHTML = "Company";
        row.appendChild(headerCell);
            
        headerCell = document.createElement("TH");
        headerCell.innerHTML = "Tier";
        row.appendChild(headerCell);
 
 
        headerCell = document.createElement("TH");
        headerCell.innerHTML = "URL";
        row.appendChild(headerCell);
 
        headerCell = document.createElement("TH");
        headerCell.innerHTML = "Catageory";
        row.appendChild(headerCell);
 
        headerCell = document.createElement("TH");
        headerCell.innerHTML = "Description";
        row.appendChild(headerCell);
 
        headerCell = document.createElement("TH");
        headerCell.innerHTML = "Logo URL";
        row.appendChild(headerCell);
 
       // console.log(excelRows);
        //Add the data rows from Excel file.
        for (var i = 0; i < excelRows.length; i++) {
            //Add the data row.
            var row = table.insertRow(-1);
 
            //Add the data cells.
            var cell = row.insertCell(-1);
            cell.innerHTML = excelRows[i].position;
 
            cell = row.insertCell(-1);
            cell.innerHTML = excelRows[i].company_name;
            
            
            cell = row.insertCell(-1);
            cell.innerHTML = excelRows[i].tier;
 
            
            cell = row.insertCell(-1);
            cell.innerHTML = excelRows[i].url;
 
            
            cell = row.insertCell(-1);
            cell.innerHTML = excelRows[i].category;
 
            
            cell = row.insertCell(-1);
            cell.innerHTML = excelRows[i].cescription;
 
            cell = row.insertCell(-1);
            cell.innerHTML = excelRows[i].logourl;
 

        }
 
        var dvExcel = document.getElementById("dvExcel");
        dvExcel.innerHTML = "";
        dvExcel.appendChild(table);
    };
</script>

