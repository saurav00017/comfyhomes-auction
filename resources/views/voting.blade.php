@extends('layouts.app')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style>


        [type="radio"] {
    display: block!important;
}

.form-check-input:checked {
    background-color: purple!important;
    border-color: purple!important;
}


          .premium-container {
        background-color: #007ac9;
        padding: 40px;
        border-radius: 10px;
        text-align: center;
        color: white;
        margin-top: 2%!important;
        width: 75%!important;
    }
    .premium-container h1 {
        margin-bottom: 20px;
        font-size: 24px;
        color: #ffc107;
    }
    .premium-container button {
        background-color: #28a745;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
    }
    .premium-container button:hover {
        background-color: #218838;
    }
    .login-register {
        margin-top: 15px;
    }
    .login-register a {
        color: #fff;
        text-decoration: underline;
    }
    .app-links img {
        width: 150px;
        margin-top: 20px;
    }
    .premium-modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 999;
    }
    .premium-content {
        background-color: purple;
        padding: 40px;
        border-radius: 10px;
        text-align: center;
        color: white;
        width: 50%;
    }
    .premium-content button {
        background-color: #eaceea;
        color: purple;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
    }
    .premium-content button:hover {
        background-color: #218838;
    }
    .hidden {
        display: none;
    }



         span{
        font-family: "Poppins", sans-serif;
        font-weight: 500;
  font-style: normal;
    }



        .body-section .container {
            padding: 20px;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }


        footer .container {
     padding: 0px!important; 
     margin-top: 0px!important; 
     border-radius: 0px!important; 
    box-shadow: 0 0 0px rgba(0, 0, 0, 0.1)!important;
}

        .section-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: purple;
/*            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
*/            padding-bottom: 5px;
            margin-bottom: 20px;
                    font-family: "Poppins", sans-serif;

        }

        .detail-row {
            margin-bottom: 10px;
        }

        .detail-row span {
            font-weight: bold;
        }

        .detail-row div {
            margin-bottom: 5px;
        }

        .go-back {
            color: purple;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 20px;
                float: inline-end;
                    font-family: "Poppins", sans-serif;


        }

        .go-back:hover {
            text-decoration: underline;
        }

        .text-secondary {
            color: #6c757d;
        }
    </style>
@section('content')
<div class="full-row body-section bg-white py-80">
<div class="container">
<a href="javascript:void(0);" class="go-back" onclick="history.back()">&laquo; Go Back</a>
    <h3 class="section-title">Voting</h3>
    <hr>

    <div>
       <div class="row detail-row">

       <form action="{{config('app.baseURL')}}/voting-form" method="POST">
    @csrf
    <div class="row detail-row">
        @foreach($voting as $key => $votings)
            <div class="mb-4">
                <h5 style="color:purple">{{ $key + 1 }}. {{ $votings->question }}</h5>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="vote_{{ $votings->id }}" id="yes_{{ $votings->id }}" value="yes" required>
                    <label class="form-check-label" for="yes_{{ $votings->id }}">
                        a) Yes
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="vote_{{ $votings->id }}" id="no_{{ $votings->id }}" value="no" required>
                    <label class="form-check-label" for="no_{{ $votings->id }}">
                        b) No
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="vote_{{ $votings->id }}" id="other_{{ $votings->id }}" value="other" required>
                    <label class="form-check-label" for="other_{{ $votings->id }}">
                        c) Other
                    </label>
                </div>
            </div>
        @endforeach
    </div>

    <button type="submit" class="btn btn-primary">Submit Vote</button>
</form>

      
       


        
    </div>

    




</div>
</div>
</div>


<script>
    // Show the premium modal when the download button is clicked
    document.getElementById('show-premium-download').addEventListener('click', function() {
        var modal = document.getElementById('premium-modal');
        modal.classList.remove('hidden');
        modal.style.display = 'flex';
    });

    // Close the modal when clicking outside the content
    document.getElementById('premium-modal').addEventListener('click', function(event) {
        if (event.target === this) {
            this.style.display = 'none';
        }
    });
</script>

@endsection