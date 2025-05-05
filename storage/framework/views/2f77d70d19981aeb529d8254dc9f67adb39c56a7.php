

<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic|Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="styles/newspaper.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

<?php $__env->startSection('content'); ?>
<style type="text/css">
    body {
        font-family: 'Droid Serif', serif;
        font-size: 14px;
        color: #2f2f2f;
        background-color: #f9f7f1!important;
    }

    .bank_logo {
        width: 100%;
        max-width: 100px;
        height: auto;
        margin-top: 1%;
    margin-bottom: 1%;
    margin-left: 1%;
    }

    .line{
        width: 28%;
    }

    .notice-container {
        background: white;
        border: 1px solid black;
        padding: 20px;
        margin-top: 5%;
        margin-left: 2%;
    }

    .branch-info {
        text-align: justify;
        font-size: 14px;
        margin-top: 10px;
        margin-right: 2%;
    }

    .title {
        font-size: 18px;
        font-weight: bold;
        text-align: center;
        margin: 10px 0;
    }

    .content {
        font-size: 14px;
        line-height: 1.6;
        margin: 10px 0;
        text-align: justify;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .table th, .table td {
        border: 1px solid black;
        padding: 5px;
        text-align: center;
        font-size: 14px;
    }

    .table th {
        background-color: #eaeaea;
        font-weight: bold;
    }

    .footer {
        font-size: 12px;
        margin-top: 20px;
        border-top: 1px solid black;
        padding-top: 10px;
    }

    .footer p {
        margin: 5px 0;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .branch-info {
            text-align: left;
            font-size: 12px;
        }
        .title {
            font-size: 16px;
        }
        .content, .table th, .table td {
            font-size: 12px;
        }
    }

    @media (max-width: 480px) {
        .bank_logo {
            max-width: 80px;
        }
        .branch-info {
            font-size: 11px;
        }
        .title {
            font-size: 14px;
        }
        .content {
            font-size: 12px;
        }
        .table th, .table td {
            font-size: 10px;
            padding: 4px;
        }
        .footer {
            font-size: 10px;
        }
    }
</style>

<div id="printArea">
    <div class="full-row body-section bg-white py-5">
            <div class="row">
                <?php $__currentLoopData = $property; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $propertys): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6 mb-4">
                    <div class="notice-container">
                        <div class="header" style="display: flex; justify-content: space-between; border: 1px solid black;">
                            <img src="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($propertys->bank->icon); ?>" class="bank_logo" alt="Bank Logo">
                            <div><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/line.png" class="line" alt="Bank Logo"></div>
                            <div class="branch-info">
                                <p><?php echo e($propertys->branch_location); ?> Branch<br>
                                <?php echo e($propertys->branch_address); ?><br>
                                Email: <?php echo e($propertys->branch_email); ?><br>
                                Ph.: 020-<?php echo e($propertys->branch_phone); ?></p>
                            </div>
                        </div>

                        <div class="title" style="border: 1px solid;">SALE NOTICE</div>



                        <div class="content">
                            <p><strong>E-Auction Sale Notice for Sale of Immovable Properties under the Securitisation and Reconstruction of Financial Assets and Enforcement of Security Interest Act, 2002 read with provision to Rule 8 (6) of the Security Interest (Enforcement) Rules, 2002.</strong>
                            </p>
                            <p>Notice is hereby given to the public in general and in particular to the Borrower (s) and Guarantor (s) that the below described immovable property mortgaged/charged to the Secured Creditor, taken possession under the provision of Section 13(4) of <sapn style="font-weight: 700;">Securitisation and Reconstruction of Financial Assets and Enforcement of Security Interest Act, 2002,</sapn> will be sold on <sapn  style="font-weight: 700;">“As is where is”, “As is what is”, and “Whatever there is”</sapn>  as such sale is without recourse basis and without any kind of warranties and indemnities <sapn  style="font-weight: 700;">on <?php echo e($propertys->branch_eauction_sate); ?> </sapn>through the e-auction website [Name] for recovery of <sapn  style="font-weight: 700;">under mentioned dues and further interest, charge and costs.</sapn> Details and full description of immovable/movable properties, Reserve Price, EMD and last date to deposit EMD are as follows:</p>
                        </div>

                        <table class="table">
                            <tr>
                                <th>Sl No</th>
                                <th>Name of Borrower</th>
                                <th>Description of Property</th>
                                <th>Reserve Price and Earnest Money (EMD)</th>
                                <th>Due Amount</th>
                                <th>Bid Increment Amount</th>
                                <th>Type of Possession</th>
                                <th>Known Encumbrance</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><?php echo e($propertys->borrower_name); ?></td>
                                <td><?php echo e($propertys->description_property); ?></td>
                                <td>₹<?php echo e($propertys->reserve_price); ?> / ₹<?php echo e($propertys->earnest_money); ?></td>
                                <td>₹<?php echo e($propertys->due_amount); ?></td>
                                <td>₹<?php echo e($propertys->bid_increment_amount); ?></td>
                                <?php if($propertys->possession==1): ?>
                                <td>Physical</td>
                                <?php else: ?>
                                <td>Symbolic</td>
                                <?php endif; ?>
                                <td><?php echo e($propertys->known_encumbrance); ?></td>
                            </tr>
                        </table>

                        <div class="footer">
                            <p><strong>Terms and Conditions of E-Auction:</strong></p>
                            <p> 1. Auction/bidding shall only be through online electronic mode through the website [Website Name] who shall arrange & coordinate the entire process of auction through the e-auction platform. </p>
                            <p>2.The sale shall be strictly as per the provisions of The Security Interest (Enforcement) rules, 2002.</p>
                            <p>3. <strong>Date & time of auction-<?php echo e($propertys->branch_eauction_sate); ?> </strong> between <strong><?php echo e($propertys->auction_time); ?>  to 5.00 </strong>. with unlimited extension of "<?php echo e($propertys->auction_minute); ?>" minutes each, i.e. the end time of e-auction shall be automatically extended by <?php echo e($propertys->auction_minute); ?> Minutes each time if bid is made within <?php echo e($propertys->auction_minute); ?> minutes from the last extension. </p>
                            <p>4. Bidders are advised to go through the link “E-Auction” provided in <?php echo e($propertys->bank->bank_name); ?> website: <span><?php echo e($propertys->bank_website); ?></span> and auction platform [Name] for detailed terms and conditions of Auction Sale before submitting their bids and taking part in the E-Auction sale proceedings.</p>
                            <p>5. Successful bidder will be intimated through e-mail after the closing of the e-Bidding Process.</p>
                            <p>6. The interested bidder may contact <?php echo e($propertys->bank_name); ?> Branch (Phone No. 020-<?php echo e($propertys->branch_phone); ?>) during office hours on any working day, for ascertaining the details of auction and inspection of property.</p>

                        </div>

                        <div style="display: flex; justify-content: space-between;">
                            <p style="font-weight: 700;">Date: <?php echo e($propertys->branch_eauction_sate); ?></p>
                            <p style="font-weight: 700;">Place: <?php echo e($propertys->place); ?></p>
                            <p style="font-weight: 700;">Authorized Officer, <?php echo e($propertys->bank->bank_name); ?> Bank</p>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

<!-- Print Button -->
<button class="btn btn-primary" onclick="printNotices()" style="margin-bottom: 3%; margin-left:2%; margin-top: 3%;">Print Auction</button>

<script>
    function printNotices() {
        var printContent = document.getElementById('printArea').innerHTML;
        var printWindow = window.open('', '', 'height=800,width=800');
        
        printWindow.document.write('<html><head><title>Print Notices</title>');
        printWindow.document.write(`
            <style>
                body {
                    font-family: 'Droid Serif', serif;
                    font-size: 14px;
                    color: #2f2f2f;
                    background-color: #f9f7f1!important;
                }
                .notice-container {
                    width: 100%;
                    padding: 20px;
                    margin: 0 auto;
                    border: 1px solid black;
                    box-sizing: border-box;
                }
                .table {
                    width: 100%;
                    border-collapse: collapse;
                }
                .table th, .table td {
                    border: 1px solid black;
                    padding: 5px;
                    text-align: center;
                    font-size: 12px;
                }
                .footer {
                    font-size: 10px;
                    border-top: 1px solid black;
                    padding-top: 10px;
                }

                .title {

                    text-align:center;

                }

                 .bank_logo {
        width: 100%;
        max-width: 100px;
        height: auto;
        margin-top: 1%;
    margin-bottom: 1%;
    margin-left: 1%;
    }

    .line{
        width: 28%;
    }
            </style>
        `);
        printWindow.document.write('</head><body>');
        printWindow.document.write(printContent);
        printWindow.document.write('</body></html>');
        
        printWindow.document.close();
        printWindow.print();
    }
</script>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/comfyhomes/public_html/auction/resources/views/eauction.blade.php ENDPATH**/ ?>