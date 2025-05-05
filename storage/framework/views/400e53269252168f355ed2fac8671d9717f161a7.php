
<?php $__env->startSection('content'); ?>

<script src="<?php echo e(config('app.baseURL')); ?>/admin-assets/js/jquery.min.js"></script>
<!-- <script src="<?php echo e(config('app.baseURL')); ?>/assets/js/bootstrap.min.js"></script>
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
    margin-left: 1111px;
    background:: #5ce1e6;

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

@media  screen and (max-width: 1400px){

   .dataTables_filter{
    margin-top: -55px!important;
    margin-left: 850px!important;
   }

   .add-btn {
    margin-top: 10px;
    margin-left: 950px;
  }
}



</style>


<!-- <style type="text/css">
  
.my-custom-scrollbar {
position: relative;
height: 200px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;

}

.scrollbar-primary::-webkit-scrollbar {
width: 12px;
background-color: #262C49; }

.scrollbar-primary::-webkit-scrollbar-thumb {
border-radius: 10px;
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #F5F5F5; }

.scrollbar-primary {
scrollbar-color: #F5F5F5 #F5F5F5;

}

.scroll {
  overflow-x: auto;
  text-align: center;
  padding: 2px;
}

}
</style> -->
<body>

<div class="content-wrapper">

  <div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
      <div class="row breadcrumbs-top">
        <div class="col-12">
           <h4 class="card-title" style="color:  #880808;">All Auction</h4>
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">

              <li class="breadcrumb-item">
                <a> Home </a>
              </li>
              <li class="breadcrumb-item">
                <a> Auction </a>
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

        <a href="<?php echo e(config('app.baseURL')); ?>/admin/create-auction"> <button type="submit" class="btn pull-right btn btn-primary panel-button add-btn" >Create Auction</button></a><br>
        
        
        <div class="card-header col-md-3">
          <h4 class="card-title" style="color:  #880808;">All Auction</h4>
         
        </div>

  <body>  

    <table class="table zero-configuration-resposive scroll"  id="data-table" width="100%">
           <thead>
            <tr>
                  <th>Sr.no</th>
                  <th>State</th>
                  <th>District</th>
                  <th>Locality</th>
                  <th>Bank Name</th>
                  <th>Property Type</th>
                  <th>Property price</th>
                  <th>Reserve price</th>
                  <th>Emd Amount</th>
                  <th>Bid Increment</th>
                  <th>Emd Submission</th>
                  <th>Auction Start Date & Time</th>
                  <th>Auction End Date & Time</th>
                  <th>Status</th>

                        <th>Action</th>

                   

                  
           </tr>
          </thead>

          
      </table>
    </div>
   
</div>
</div>
</div>
</body>


<script type="text/javascript">
$(document).ready( function () {
    var table = $('#data-table').DataTable({
        scrollX: true,
        processing: true,
        serverSide: true,
        order: [[0, 'desc']],
        ajax: "<?php echo e(config('app.baseURL')); ?>/admin/auction-management-allData",
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

             if(row.state!='' && row.state!=null && row.state!='undefined'){           
                 
                return row.state;

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

             if(row.district!='' && row.district!=null && row.district!='undefined'){           
                 
                return row.district;

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

             if(row.locality!='' && row.locality!=null && row.locality!='undefined'){           
                 
                return row.locality;

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

             if(row.bank_name!='' && row.bank_name!=null && row.bank_name!='undefined'){           
                 
                return row.bank_name;

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

             if(row.property_type!='' && row.property_type!=null && row.property_type!='undefined'){           
                 
                return row.property_type;

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

             if(row.property_price!='' && row.property_price!=null && row.property_price!='undefined'){           
                 
                return row.property_price;

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

             if(row.reserve_price!='' && row.reserve_price!=null && row.reserve_price!='undefined'){           
                 
                return row.reserve_price;

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

             if(row.emd_amount!='' && row.emd_amount!=null && row.emd_amount!='undefined'){           
                 
                return row.emd_amount;

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

             if(row.bid_increment!='' && row.bid_increment!=null && row.bid_increment!='undefined'){           
                 
                return row.bid_increment;

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

             if(row.emd_submission!='' && row.emd_submission!=null && row.emd_submission!='undefined'){           
                 
                return row.emd_submission;

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

             if(row.auction_start_datetime!='' && row.auction_start_datetime!=null && row.auction_start_datetime!='undefined'){           
                 
                return row.auction_start_datetime;

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

             if(row.auction_end_datetime!='' && row.auction_end_datetime!=null && row.auction_end_datetime!='undefined'){           
                 
                return row.auction_end_datetime;

              }
              else
              {
                    return "<span>---</span>";
                  
              }

          },

        },


//         {
//     "targets": -1,
//     "mData": "Action",
//     "bSortable": false,
//     "filter": false,
//     "mRender": function(data, type, row) {
//         if (row.is_active == 0) {
//             return "<a class='datatable-left-link' href='<?php echo e(config('app.baseURL')); ?>/admin/active-auction/" + row.id + "'><span><button type='submit' class='btn btn-success'>Active</button></span></a><button type='button' class='btn btn-success' onclick='confirmSold(" + row.id + ")'>Sold Property</button>";
//         } else {
//             return "<a class='datatable-left-link' href='<?php echo e(config('app.baseURL')); ?>/admin/inactive-auction/" + row.id + "'><span><button type='submit' class='btn btn-danger'>InActive</button></span></a><button type='button' class='btn btn-success' onclick='confirmSold(" + row.id + ")'>Sold Property</button>";
//         }
//     },
// },








       
            
          
           
            

       

       {"targets":-1,
             "mData": "Action",
             "bSortable": false,
             "ilter":false,
             "mRender": function(data, type, row) {
             if(row.is_active==0){
             return "<a class=datatable-left-link href=<?php echo e(config('app.baseURL')); ?>/admin/active-auction/" + row.id+"><span><button type='submit' class='btn btn-success'>Active</button></span></a>";
              
            }
            else{
               return "<a class=datatable-left-link href=<?php echo e(config('app.baseURL')); ?>/admin/inactive-auction/" + row.id+"><span><button type='submit' class='btn btn-danger'>InActive</button></span></a><a class=datatable-left-link href=<?php echo e(config('app.baseURL')); ?>/admin/sold-auction/" + row.id+"><span><button type='submit' class='btn btn-success'>Sold Property</button></span></a>";
               }
            },
          },
          

             {"targets":-1,
             "mData": "Action",
             "bSortable": false,
             "ilter":false,
             "mRender": function(data, type, row){
              return "<a class=datatable-left-link href=<?php echo e(config('app.baseURL')); ?>/admin/update-auction/" + row.id+"><span><button type='submit' class='btn btn-primary mr-1'>Update</button></span></a><a class=datatable-left-link href=<?php echo e(config('app.baseURL')); ?>/admin/delete-auction/" + row.id+"><span><button type='submit' class='btn btn-danger mr-1'>Delete</button></span></a>";

             },
        },




        





        ]
    });
    
  });
</script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


     <script src="<?php echo e(config('app.baseURL')); ?>/js/toaster.min.js"></script>
     <script src="<?php echo e(config('app.baseURL')); ?>/assets/js/jquery.min.js"></script>


 

 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
 <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>

 <!-- <script>
    function confirmSold(auctionId) {
        if (confirm("Are you sure you want to mark this property as sold?")) {
            // Send AJAX request to mark property as sold
            fetch('<?php echo e(config('app.baseURL')); ?>/admin/sold-property/' + auctionId, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>' // Required for Laravel
                },
                body: JSON.stringify({
                    id: auctionId
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Property marked as sold successfully!');
                    // Optionally reload the page or update the table
                    location.reload(); // Reloads the page
                } else {
                    alert('Failed to mark the property as sold.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Something went wrong.');
            });
        } else {
            // If "No" is clicked, do nothing
            return;
        }
    }
</script> -->


 <script>
  $(".editor").on('keyup  mouseover',function(e) {
    var myEditor = document.querySelector('.editor')
    var html = myEditor.children[0].innerHTML;
    $('.new-editor').val(html);
  });

  <?php if(Session::has('message')): ?>
  var type = "<?php echo e(Session::get('alert-type', 'info')); ?>";
  switch(type){
    case 'info':
    toastr.info("<?php echo e(Session::get('message')); ?>");
    break;

    case 'warning':
    toastr.warning("<?php echo e(Session::get('message')); ?>");
    break;
    case 'success':
    toastr.success("<?php echo e(Session::get('message')); ?>");
    break;
    case 'error':
    toastr.error("<?php echo e(Session::get('message')); ?>");
    break;
  }
  <?php endif; ?>

</script>

<script type="text/javascript">
$('#l1').addClass('nav-item');
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
$('#l15').removeClass('nav-item');
$('#l16').removeClass('nav-item');
$('#l17').removeClass('nav-item');
$('#l18').removeClass('nav-item');
$('#l19').removeClass('nav-item');
$('#l20').removeClass('nav-item');
$('#l21').removeClass('nav-item');
$('#l22').removeClass('nav-item');
$('#l23').removeClass('nav-item');
$('#l24').removeClass('nav-item');
$('#l25').removeClass('nav-item');







</script>
</html>



<!-- datatable js -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<!-- <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
 --><?php $__env->stopSection(); ?>


<?php echo $__env->make('admin layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\auction\resources\views/admin/auction/all.blade.php ENDPATH**/ ?>