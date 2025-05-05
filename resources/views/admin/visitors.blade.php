@extends('admin layouts.app')
@section('content')

<script src="{{config('app.baseURL')}}/assets/js/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
    margin-left: 1100px;
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

  @media screen and (max-width: 1400px){

   .dataTables_filter{
    margin-top: -55px!important;
    margin-left: 780px!important;
   }

   .add-btn {
    margin-top: 10px;
    margin-left: 800px;
  }
  .dataTables_paginate {
    margin-left: 900px!important;
   
}
}




</style>





<body>

<div class="content-wrapper">

  <div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
      <div class="row breadcrumbs-top">
        <div class="col-12">
           <h4 class="card-title" style="color:  #880808;">All Visitor Schedule</h4>
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">

              <li class="breadcrumb-item">
                <a> Home </a>
              </li>
              <li class="breadcrumb-item">
                <a> Visitor Schedule </a>
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

        
        
        <div class="card-header col-md-3">
          <h4 class="card-title" style="color:  #880808;">All Visitor Schedule</h4>
         
        </div>

  <body>  

    <table class="table zero-configuration-resposive scroll"  id="data-table" width="100%">
           <thead>
            <tr>
                  <th>Sr.No</th>
                  <th>Name</th>
                  <th>Contact Number</th>
                  <th>Email</th>
                  <th>test</th>
                  <th>Message</th>


                  
           </tr>
          </thead>

          
      </table>
    </div>
   
</div>
</div>
</div>



<script type="text/javascript">
$(document).ready( function () {
    var table = $('#data-table').DataTable({
        scrollX: true,
        processing: true,
        serverSide: true,
        order: [[0, 'desc']],
        ajax: "{{config('app.baseURL')}}/admin/visitor-management-allData",
        columns: [

          {
        "title": "Serial",
        render: function (data, type, row, meta) {
        return meta.row + meta.settings._iDisplayStart + 1;
        },
        },    
        

           
           {"targets":-1,
             "mData": "Action",
             "bSortable": false,
             "ilter":false,
             "mRender": function(data, type, row) {

             if(row.name!='' && row.name!=null && row.name!='undefined')
             {       
                return row.name;
              }
              else
              {
                    return "<span>---</span>"; 
              }

          },

        },

        {"targets":-1,
             "mData": "Action",
             "bSortable": false,
             "ilter":false,
             "mRender": function(data, type, row) {

             if(row.contact_no!='' && row.contact_no!=null && row.contact_no!='undefined')
             {       
                return row.contact_no;
              }
              else
              {
                    return "<span></span>"; 
              }

          },

        },


        

        {"targets":-1,
             "mData": "Action",
             "bSortable": false,
             "ilter":false,
             "mRender": function(data, type, row) {

             if(row.email!='' && row.email!=null && row.email!='undefined')
             {       
                return row.email;
              }
              else
              {
                    return "<span>---</span>"; 
              }

          },

        },

       
        {"targets":-1,
             "mData": "Action",
             "bSortable": false,
             "ilter":false,
             "mRender": function(data, type, row) {

             if(row.service_type!='' && row.service_type!=null && row.service_type!='undefined')
             {       
                return row.service_type;
              }
              else
              {
                    return "<span>---</span>"; 
              }

          },

        },


       {"targets":-1,
             "mData": "Action",
             "bSortable": false,
             "ilter":false,
             "mRender": function(data, type, row) {

             if(row.message!='' && row.message!=null && row.message!='undefined')
             {       
                return row.message;
              }
              else
              {
                    return "<span>---</span>"; 
              }

          },

        },


           
       
           
        



        





        ]
    });
    
  });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


     <script src="{{config('app.baseURL')}}/js/toaster.min.js"></script>
     <script src="{{config('app.baseURL')}}/assets/js/jquery.min.js"></script>


 

 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
 <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>

 <script>
  $(".editor").on('keyup  mouseover',function(e) {
    var myEditor = document.querySelector('.editor')
    var html = myEditor.children[0].innerHTML;
    $('.new-editor').val(html);
  });

  @if(Session::has('message'))
  var type = "{{ Session::get('alert-type', 'info') }}";
  switch(type){
    case 'info':
    toastr.info("{{ Session::get('message') }}");
    break;

    case 'warning':
    toastr.warning("{{ Session::get('message') }}");
    break;
    case 'success':
    toastr.success("{{ Session::get('message') }}");
    break;
    case 'error':
    toastr.error("{{ Session::get('message') }}");
    break;
  }
  @endif

</script>
<script type="text/javascript">
$('#l1').removeClass('nav-item');
$('#l2').removeClass('nav-item');
$('#l3').removeClass('nav-item');
$('#l5').removeClass('nav-item');
$('#l6').removeClass('nav-item');
$('#l7').removeClass('nav-item');
$('#l8').removeClass('nav-item');
$('#l9').removeClass('nav-item');
$('#l10').removeClass('nav-item');
$('#l4').removeClass('nav-item');
$('#l11').removeClass('nav-item');
$('#l12').removeClass('nav-item');
$('#l13').removeClass('nav-item');
$('#l14').removeClass('nav-item');
$('#l14').removeClass('nav-item');
$('#l16').removeClass('nav-item');
$('#l17').removeClass('nav-item');
$('#l18').removeClass('nav-item');
$('#l19').removeClass('nav-item');
$('#l20').removeClass('nav-item');
$('#l21').removeClass('nav-item');
$('#l22').removeClass('nav-item');
$('#l23').removeClass('nav-item');
$('#l24').addClass('nav-item');
$('#l25').removeClass('nav-item');




</script>
</body>
</html>



<!-- datatable js -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<!-- <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
 -->@endsection

