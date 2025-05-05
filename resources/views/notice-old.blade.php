@extends('layouts.app')

@section('content')

    <style>
        .notice-container {
            border: 2px solid black;
            padding: 10px;
            margin-top: 15%;
            margin-bottom: 10%;
        }
        .notice-header {
            background-color: black;
            color: white;
            text-align: center;
            font-weight: bold;
            padding: 5px;
        }
        .notice-body {
            margin-top: 10px;
            font-size: 14px;
            line-height: 1.5;
        }
        .notice-signature {
            text-align: right;
            margin-top: 20px;
        }
        .notice-footer {
            margin-top: 20px;
            font-size: 12px;
        }
        .notice-footer p {
            margin: 5px 0;
        }
    </style>

    <body>

    <div class="container" style="display: flex; gap: 5%; flex-wrap: wrap;">
        <!-- This button will trigger the download of the PDF -->
        <!-- <a href="{{ route('pdf.download') }}">
            <button class="btn btn-primary" style="margin-top: 112%;">Download PDF</button>
        </a> -->

<a >
        <button class="btn btn-primary" style="margin-top: 112%;" onclick="printPage()">Print</button>
    </a>



        @foreach($notice as $notices)
        <div class="{{ $notices->column_size }} notice-container">
            <div class="notice-header">PUBLIC NOTICE</div>
            <div class="notice-body">
                <p>{{ $notices->description }}</p>
            </div>
            <div class="notice-signature">
                Sd/-<br>
                {{ $notices->advertiser_name }}<br>
                {{ $notices->advertiser_address }}
            </div>
            <div class="notice-footer">
                <p>Place: {{ $notices->advertiser_place }}</p>
                <p>Date: {{ \Carbon\Carbon::parse($notices->created_at)->format('d/m/Y') }}</p>
            </div>
        </div>
        @endforeach
    </div>

    <script>
            // JavaScript function to trigger the print dialog
            function printPage() {
                window.print(); // Triggers the browser's print dialog
            }
        </script>

    </body>

@endsection
