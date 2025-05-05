@extends('layouts.app')
@section('content')

<script src="{{config('app.baseURL')}}/assets/js/jquery.min.js"></script>
<!-- <script src="{{config('app.baseURL')}}/assets/js/bootstrap.min.js"></script>
 -->

<style type="text/css">
  .col-sm-12{
     margin-top: 100px;"
  }

  /*.col-sm-5{
        margin-top: 364px;
  }

  .col-sm-7{
        margin-top: 374px;
  }*/

  .dataTables_scroll{
       margin-right: 15px;
    margin-left: 15px;
}

.dataTables_paginate{
  margin-left: 1117px;
    margin-bottom: 15px;
        margin-top: -21px;

}

.dataTables_length{
  
  margin-left: 10px;
}

.dataTables_filter{
    margin-top: -55px!important;
    margin-left: 999px!important;
}

  .dataTables_info{
    margin-left: 10px;
  }
  /*.row{
    margin-right: -163px;
  }
*/
  label{
        margin-top: 19px;

  }

  .card-title{
        margin-top: 13px;

  }

  .card-header{
        margin-top: -70px;

  }

.add-btn{

  margin-top: 10px;
    margin-left: 1111px;
    background:: #8a7b8e;

}
  .dataTables_wrapper .dataTables_filter input {
    margin-left: 2px;
    border: 1px solid #e1e6f1;
}
}

.dataTables_wrapper .dataTables_filter input {
    margin-left: 2px;
    border: 1px solid black;

  }

 .form-control {
    border-radius: 43px;
}

.form-control{
      border: 1px solid black;

}

input, button, select, optgroup, textarea {
    margin: 3px;
  }

  .content-wrapper{
  overflow-y: hidden!important;
}

.card-title{
        margin-top: 16px;
        margin-left: 21px;


  }


body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid black;
    width: 30%;
        margin-top: 200px;

}

/* The Close Button */
.close {
  color: red;
  float: right;
  font-size: 28px;
  font-weight: bold;
  height: 16px;
    width: 18px;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

p {
    margin-top: 11px;
    margin-bottom: 1rem;
}

.hide{
  display: none;
}

@media screen and (max-width: 1400px){

   .dataTables_filter{
    margin-top: -55px!important;
    margin-left: 850px!important;
   }

   .add-btn {
    margin-top: 10px;
    margin-left: 938px;
  }
}
</style>





<body>

<div class="content-wrapper">

  <div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
      <div class="row breadcrumbs-top">
        <div class="col-12">
           <h4 class="card-title" style="color:  #880808;">All Notification</h4>
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">

              <li class="breadcrumb-item">
                <a> Home </a>
              </li>
              <li class="breadcrumb-item">
                <a> Notification </a>
              </li>
              <li class="breadcrumb-item" style="color: blue;">
              All</li>
            </ol> 
          </div>
        </div>
      </div>
    </div>

  </div>   


  <div class="content-body">
<section id="basic-datatable">
  <div class="row">
    <div class="col-12" >
      <div class="card">



        <a href="{{config('app.baseURL')}}/admin/notification/add" > <button type="submit" class="btn pull-right btn btn-primary panel-button add-btn" style="margin-left: 1091px;">Add Notification</button></a><br>


        
        <div class="card-header col-md-3">
          <h4 class="card-title" style="color:  #880808;">All Notification</h4>
         
        </div>

  <body>  

    <table class="table zero-configuration-resposive scroll"  id="data-table" width="100%">
           <thead>
            <tr>
                  <th>Id</th>
                  <th>Image</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Active</th>
                  <th>Edit</th>
                  <th>Send</th>


                  
           </tr>
          </thead>

          
      </table>

     <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <button class="close" style="margin-top: -15px; margin-left: 411px;border: 1px solid red;background-color: black;
" value="1">&times;</button>
    <p>Are You sure to Send a Notification</p>
    <div class="row">
      <a><button type="btn" class="btn btn-primary" style="width: 83px;">Yes</button></a><button type="btn" class="btn btn-primary" style="width: 83px;">No</button>

    </div>
  </div>

</div>


    </div>
   
</div>
</div>
</div>
</body>


<script type="text/javascript">
$(document).ready( function () {

  function sendAllNotification(){

    var table = $('#data-table').DataTable({
        scrollX: true,
        processing: true,
        serverSide: true,
        ajax: "{{config('app.baseURL')}}/admin/notification/allData",
        columns: [
        
             {data: 'id'},
             // {data: 'banner_image'},

             {
                'mRender':function(data,type,row){
                return "<img src={{config('app.baseURL')}}/storage/app/"+ row.img +" style=width:50%>";
            }
          },
          {data:'title'},
          {data:'description'},

             {"targets":-1,
             "mData": "Action",
             "bSortable": false,
             "ilter":false,
             "mRender": function(data, type, row) {
             if(row.is_active==0){
              return "<a class=datatable-left-link href={{config('app.baseURL')}}/admin/notification/active/" + row.id+"><span><button type='submit' class='btn btn-success'>Activate</button></span></a>";
              
            }
            
            else{
              return "<a class=datatable-left-link href={{config('app.baseURL')}}/admin/notification/inactive/" + row.id+"><span><button type='submit' class='btn btn-danger'>Inactivate</button></span></a>";
               }
            },
          },

          

             {"targets":-1,
             "mData": "Action",
             "bSortable": false,
             "ilter":false,
             "mRender": function(data, type, row){
              return "<a class=datatable-left-link href={{config('app.baseURL')}}/admin/notification/edit/" + row.id+"><span><button type='submit' class='btn btn-primary mr-1'>Edit</button></span></a>";

             },
        },

         
                  { "targets":-1,
                    "bSortable": false,
                    "filter":false,
                   "mRender": function(data, type, row) {
                    if(row.is_active==0){
                     
                    return "<button type='button' class='btn btn-primary send-notification' value='"+row.id+"'>Send</button>";
                  }else{
                    return "";
                  }
                  }
          },

        





        ]
    });

}


 sendAllNotification();
  });


</script>

<script type="text/javascript">


  
$('table').on('click','tr td button.send-notification',function(){

var modal = document.getElementById("myModal");

    modal.style.display = "block";



var notification_id=$(this).attr('value');

var close=$('.close').val();

// if(close==1)
// {
//    alert('anf');
//    $('#myModal').addClass('hidden');

// }

$.ajax({
        type: 'post',
        url: "{{config('app.baseURL')}}/admin/notification/sendNotification",
        data: { "_token": "{{ csrf_token() }}", 'notification_id':notification_id},

  });









 
});


</script>




<script type="text/javascript">
$('#l1').removeClass('nav-item');
$('#l2').removeClass('nav-item');
$('#l3').removeClass('nav-item');
$('#l5').removeClass('nav-item');
$('#l6').removeClass('nav-item');
$('#l7').addClass('nav-item');
$('#l8').removeClass('nav-item');
$('#l9').removeClass('nav-item');
$('#l10').removeClass('nav-item');
$('#l4').removeClass('nav-item');
$('#l11').removeClass('nav-item');
$('#l12').removeClass('nav-item');
$('#l13').removeClass('nav-item');
</script>
</html>



<!-- datatable js -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<!-- <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
 -->@endsection

