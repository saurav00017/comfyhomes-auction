@extends('layouts.app')

<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic|Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="styles/newspaper.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

@section('content')
    <style type="text/css">
        body {
            font-family: 'Droid Serif', serif;
            font-size: 14px;
            color: #2f2f2f;
            background-color: #f9f7f1!important;
        }

        p {
            margin-top: 0;
            margin-bottom: 20px;
        }

        .head {
            text-align: center;
            position: relative;
        }

        .subhead {
            text-transform: uppercase;
            border-bottom: 2px solid #2f2f2f;
            border-top: 2px solid #2f2f2f;
            padding: 12px 0;
        }

        .content {
            display: flex;
            flex-wrap: wrap;
            margin: 30px 2%;
        }

        .collumn {
            font-size: 14px;
            line-height: 20px;
            padding: 0 1%;
            margin-bottom: 50px;
            box-sizing: border-box;
        }

        .collumn + .collumn {
            border-left: 1px solid #2f2f2f;
        }

        .collumn .headline {
            text-align: center;
            font-family: 'Playfair Display', serif;
            margin: 0 auto;
        }

        .headline.hl3 img {
            width: 100%;
            height: auto;
        }

        /* Responsive Styles */
        @media only all and (max-width: 1200px) {
            .collumn {
                width: 31%;
            }
        }

        @media only all and (max-width: 900px) {
            .collumn {
                width: 47%;
            }
        }

        @media only all and (max-width: 600px) {
            .collumn {
                width: 100%;
                border-left: none;
                border-bottom: 1px solid #2f2f2f;
            }

            header {
                max-width: 320px;
                font-size: 60px;
                line-height: 54px;
            }
        }
    </style>

    <!-- Add a wrapper with ID 'printArea' to target the printable content -->
    <div id="printArea">
        <div class="head">
            <div class="headerobjectswrapper">
                <header class="notice-header">Notices</header>
            </div>
            <div class="subhead"></div>
        </div>

        <div class="content">
            @foreach($notice as $notices)
            <div class="collumn" style="width: {{$notices->column_width}}%;">
                <div class="head">
                    <span class="headline hl3">
                        <img class="image-size slider-img" src="{{ config('app.baseURL') }}/storage/app/{{ $notices->image }}" alt="">
                    </span>
                    <p style="background-color:black;"><span class="headline hl4" style="color: white;">Public Notice</span></p>
                </div>
                <p>{{ $notices->description }}</p>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Print Button -->
    <button class="btn btn-primary" onclick="printNotices()" style="margin-bottom: 3%; margin-left:3%;">Print Notices</button>

    <script>
        function printNotices() {
            // Get the content inside the 'printArea' div
            var printContent = document.getElementById('printArea').innerHTML;
            
            // Create a new window to hold the print content
            var printWindow = window.open('', '', 'height=800,width=800');
            
            // Add the content to the new window
            printWindow.document.write('<html><head><title>Print Notices</title>');
            
            // Add any required styles for print layout
            printWindow.document.write(`
                <style>
                    body {
                        font-family: 'Droid Serif', serif;
                        font-size: 14px;
                        color: #2f2f2f;
                        background-color: #f9f7f1!important;
                    }
                    .content {
                        display: flex;
                        flex-wrap: wrap;
                        margin: 30px 2%;
                    }
                    .collumn {
                        font-size: 14px;
                        line-height: 20px;
                        padding: 0 1%;
                        margin-bottom: 50px;
                        box-sizing: border-box;
                    }
                    .collumn img {
                        max-width: 100%;
                        height: auto;
                    }
                    .headline {
                        text-align: center;
                        font-family: 'Playfair Display', serif;
                    }
                </style>
            `);
            printWindow.document.write('</head><body>');
            printWindow.document.write(printContent);
            printWindow.document.write('</body></html>');
            
            // Close the document to ensure the content loads
            printWindow.document.close();
            
            // Trigger the print dialog
            printWindow.print();
        }
    </script>
@endsection
