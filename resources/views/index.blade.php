@extends('layouts.app')

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">


@section('content')

    <style type="text/css">
        @import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Source Sans Pro", sans-serif;
        }

        h1 {
            text-align: center;
            margin-top: 2rem;
        }

        p {
            text-align: center;
            margin-bottom: 4rem;
        }

        .pricing {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding-bottom: 2.5rem;


            .plan {
                background-color: #fff;
                padding: 2.5rem;
                margin: 12px;
                border-radius: 5px;
                text-align: center;
                transition: 0.3s;
                cursor: pointer;

                h2 {
                    font-size: 22px;
                    margin-bottom: 12px;
                }

                .price {
                    margin-bottom: 1rem;
                    font-size: 30px;
                }

                ul.features {
                    list-style-type: none;
                    text-align: left;

                    li {
                        margin: 8px;

                        .fas {
                            margin-right: 4px;
                        }

                        .fa-check-circle {
                            color: #6ab04c;
                        }

                        .fa-times-circle {
                            color: #eb4d4b;
                        }
                    }
                }

                button {
                    border: none;
                    width: 100%;
                    padding: 12px 35px;
                    margin-top: 1rem;
                    background-color: #6ab04c;
                    color: #fff;
                    border-radius: 5px;
                    cursor: pointer;
                    font-size: 16px;
                }

                &.popular {
                    border: 2px solid purple;
                    position: relative;
                    transform: scale(1.08);

                    span {
                        position: absolute;
                        top: -20px;
                        left: 50%;
                        transform: translateX(-50%);
                        background-color: purple;
                        color: #fff;
                        padding: 4px 20px;
                        font-size: 18px;
                        border-radius: 5px;
                    }
                }

                &:hover {
                    box-shadow: 5px 7px 67px -28px rgba(0, 0, 0, 0.37);
                }
            }
        }

        .discount-badge {
            display: inline-block;
            background-color: #e84118;
            color: #fff;
            font-size: 14px;
            padding: 4px 12px;
            border-radius: 12px;
        }

        .price small {
            font-size: 16px;
            text-decoration: line-through;
            color: #888;
            margin-left: 8px;
        }

        .discount-container {
            margin-bottom: 1rem;
        }

        .duration {
            font-size: 14px;
            color: #555;
            margin-bottom: 1rem;
        }

        .full-row {
            position: relative;
            width: 100%;
            padding: 20px 0;
        }

        .swiper-wrapper {
            display: flex;
            align-items: center;
            /* Vertically centers the images */
            justify-content: flex-start;
            /* Align items to the start to avoid gaps */
        }

        .swiper-slide {
            display: flex;
            justify-content: center;
            /* Centers content inside the slide */
            align-items: center;
            /* Vertically aligns content inside the slide */
            margin: 0;
            /* Remove the left-right margin between slides */
        }

        .swiper-slide img {
            max-height: 100px;
            /* Ensure consistent image height */
            width: auto;
            /* Adjusts width proportionally to maintain aspect ratio */
            object-fit: contain;
            /* Ensures the image fits within the box without being cropped */
            display: block;
            margin: 0 auto;
        }

        .slider-area {
            text-align: center;
        }

        /* Ensure all blog cards have the same height */


        /*.table-striped tbody tr:nth-of-type(2n+2) {
                                background-color: #cb0505;
                                color: #fff;
                            }

                            .table-striped tbody tr:nth-of-type(2n+1) {
                                background-color: #007a00;
                                    color: #fff;

                            }*/

        .vertical-line {
            border-left: 1px solid #ccc;
            /* Line style */
            height: 30px;
            /* Adjust height as needed */
            margin: 0 10px;
            /* Space around the line */
        }


        #validationDefault03 {
            width: 229px;
        }


        input::placeholder {
            color: #333;
        }


        .property_type {
            width: 150px;
        }



        .search-bar {
            width: 50%;
            display: flex;
            justify-content: center;
            margin-top: 20px;
            margin-left: 25%;

        }

        .input-group {
            display: flex;
            align-items: center;
            background-color: #f0f0f0;
            border-radius: 50px;
            padding: 10px 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .input-item {
            display: flex;
            align-items: center;
            margin-right: 20px;
        }

        .input-item i {
            margin-right: 10px;
            color: purple;
        }

        input[type="text"],
        select {
            border: none;
            background: none;
            outline: none;
            font-size: 16px;
            color: #333;
        }

        .search-btn {
            background-color: purple;
            color: white;
            padding: 10px 40px;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        input[type="text"] {

            color: #333;

        }



        .search-btn i {
            margin-right: 10px;
        }

        .search-btn:hover {
            background-color: #0056b3;
        }

        .view-all {
            float: inline-end;
            margin-bottom: 5px;
        }

        .table-light tr {
            background-color: #C70039;
        }

        .blog-start .blog-card {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .find-property {
            margin-left: 25%;

        }

        .slider-banner1 {
            width: 100%;
            height: 400px;
            min-height: 400px;
        }

        .swiper-wrapper img {
            width: 60% !important;
        }

        /* Limit title to one line */
        .blog-start .truncate-title {
            display: -webkit-box;
            -webkit-line-clamp: 1;
            /* Limits to 1 line */
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        /* Limit description to two lines */
        .blog-start .truncate-description {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            /* Limits to 2 lines */
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* Ensure the 'Read More' link stays at the bottom */
        .blog-start .blog-card .p-4 {
            flex-grow: 1;
            /* Makes content fill up available space */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            /* Space between the content and the 'Read More' button */
        }

        .blog-start .blog-card img {
            width: 100%;
            height: auto;
        }

        /* Ensure consistent layout for different screen sizes */
        @media (min-width: 768px) {
            .blog-start .blog-card {
                height: auto;
            }
        }


        /* Media Queries */
        @media (max-width: 768px) {
            .slider-banner1 {
                min-height: 400px;
                padding: 50px 0;
            }

            .find-property {
                font-size: 2rem;
            }

            .nav-underline {
                flex-direction: column;
                margin-bottom: 20px;
            }

            .nav-item {
                margin-bottom: 10px;
            }

            .search-bar {
                margin-top: 20px;
            }

            .input-group {
                flex-direction: column;
            }

            .input-item {
                margin-bottom: 10px;
            }

            .search-btn {
                width: 100%;
            }
        }

        @media (max-width: 576px) {
            .find-property {
                font-size: 1.5rem;
            }

            .input-item select,
            .input-item input {
                width: 100%;
            }
        }

        @media (min-width: 1023px) and (max-width: 1099px) {

            .search-bar {
                width: 70%;
                display: flex;
                justify-content: center;
                margin-top: 20px;
                margin-left: 15%;
            }

            .find-property {
                margin-left: 16%;
            }

        }

        @media (min-width: 1200px) and (max-width: 1299px) {

            .search-bar {
                width: 58%;
                display: flex;
                justify-content: center;
                margin-top: 20px;
                margin-left: 20%;
            }

        }


        @media (min-width: 850px) and (max-width: 899px) {
            .search-bar {
                width: 94%;
                display: flex;
                justify-content: center;
                margin-top: 20px;
                margin-left: 3%;
            }

            .find-property {
                margin-left: 4%;
            }
        }

        @media (min-width: 800px) and (max-width: 849px) {
            .search-bar {
                width: 94%;
                display: flex;
                justify-content: center;
                margin-top: 20px;
                margin-left: 3%;
            }

            .find-property {
                margin-left: 4%;
            }
        }

        @media (min-width: 900px) and (max-width: 950px) {
            .search-bar {
                width: 95%;
                display: flex;
                justify-content: center;
                margin-top: 20px;
                margin-left: 3%;
            }

            .find-property {
                margin-left: 4%;
            }
        }
    </style>


    <!-- Start Banner code  -->
    <div class="realestate-banner-home">
        <div class="container position-relative">

            <div class="realestate-home-banner-headings position-relative mt-20">
                <h1><span>Find Property</span></h1>
            </div>
            <div class="realestate-home-banner-search style1 position-relative">



                <form method="get" action="{{ config('app.baseURL') }}/search">

                    <div class="realestate-form-content">


                        <div class="realestate-form">
                            <div class="realestate-form-inputs">
                                <img src="assets/images/icons/home-new-location.svg" alt="location">
                                <input type="text" name="city" id="address-search"
                                    placeholder="Enter an address, city or ZIP code" required="">
                            </div>
                        </div>



                        <div class="realestate-form ">
                            <div class="realestate-form-inputs">
                                <i class="fas fa-home"></i>
                                <select class="property_type realestate-input select2" name="property_type">
                                    <option value="">All Category</option>
                                    @foreach ($category as $categorys)
                                        <option value="{{ $categorys->id }}">{{ $categorys->name }}</option>
                                    @endforeach
                                </select>
                            </div>



                        </div>

                        <div class="realestate-form search">
                            <button type="submit" class="form-control realestate-input-search search-btn"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
                        </div>




                    </div>

                </form>



            </div>
            <div class="realestate-category-style1">
                <ul class="realestate-category-style1-list-iterms">
                    <li>
                        <a href="archive.html">
                            <span><img src="assets/images/icons/ho1.svg" alt="Vacant Land "></span> Residential
                        </a>
                    </li>
                    <li>
                        <a href="archive.html"> <span><img src="assets/images/icons/ho2.svg"
                                    alt="Agricultural"></span>Agricultural</a>
                    </li>
                    <li>
                        <a href="archive.html"> <span><img src="assets/images/icons/ho3.svg" alt="Industrial"></span>
                            Industrial
                        </a>
                    </li>
                    <li>
                        <a href="archive.html"> <span><img src="assets/images/icons/ho4.svg" alt="Commercial"></span>
                            Commercial
                        </a>
                    </li>
                    <li>
                        <a href="archive.html"> <span><img src="assets/images/icons/ho5.svg"
                                    alt="Residential "></span>Jewellery</a>
                    </li>

                </ul>
            </div>
        </div>


    </div>

    <!-- Start Realestate Classic Home Features  -->
    <section class="realestate-element-section pt-85 pb-90">
        <div class="reaestate-section-headings text-center">
            <h2>How we help with your journey</h2>
            <p>People have people to share their journey with for a time.</p>
        </div>
        <div class="container ">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mt-20">
                    <div class="reaestate-classic-home-features "
                        style="background-image: url('assets/images/features1.png');">
                        <h3>DreamHome™</h3>
                        <h4>Get instant evaluation <br>
                            of your property</h4>
                        <svg class="feature-animate-deatils" width="64" height="60" viewBox="0 0 64 60"
                            fill="none">
                            <path d="M49.1399 58.5512C43.9847 51.264 41.0641 43.7616 40.9678 38.5837" stroke="#0B0816"
                                stroke-linecap="round" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M46.7678 32.8953L42.9901 18.6795C42.8473 17.969 42.5509 17.2983 42.1216 16.7144C41.6923 16.1306 41.1405 15.6476 40.5049 15.2995L17.6402 2.07775C17.0662 1.73691 16.4305 1.51279 15.7696 1.41827C15.1087 1.32374 14.4357 1.36067 13.7891 1.52693C13.1425 1.69319 12.5351 1.98551 12.0018 2.38711C11.4685 2.78871 11.0198 3.29169 10.6814 3.86716L0.740223 20.8665C0.385746 21.4368 0.150513 22.0731 0.0486984 22.7368C-0.0531197 23.4005 -0.0194168 24.078 0.147812 24.7283C0.315041 25.3787 0.612305 25.9884 1.02167 26.5207C1.43103 27.053 1.944 27.4968 2.52962 27.8253L25.3943 40.9477C26.0715 41.369 26.8386 41.6246 27.6332 41.6937C28.4278 41.7627 29.2274 41.6434 29.9672 41.3453L43.8848 37.6671C44.6515 37.4782 45.3445 37.0653 45.8757 36.481C46.4068 35.8968 46.752 35.1676 46.8672 34.3865V32.8953H46.7678ZM43.7854 30.5095C43.9951 31.3044 43.9654 32.1435 43.7002 32.9216C43.4349 33.6998 42.9458 34.3823 42.2942 34.8836C41.795 35.2551 41.2207 35.5132 40.6114 35.6398C40.0021 35.7663 39.3725 35.7583 38.7666 35.6163C38.1607 35.4743 37.5931 35.2017 37.1035 34.8176C36.6139 34.4335 36.2141 33.9471 35.9319 33.3924C35.5712 32.6558 35.4354 31.8294 35.5415 31.0161C35.6476 30.2029 35.9908 29.4389 36.5284 28.8195C37.0405 28.26 37.6923 27.8469 38.4167 27.6225C39.1412 27.398 39.9124 27.3704 40.6511 27.5425C41.3898 27.7145 42.0694 28.0799 42.6202 28.6014C43.171 29.1228 43.5732 29.7813 43.7854 30.5095Z"
                                fill="#B29F32" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M47.4652 31.503L43.6876 17.2872C43.5448 16.5766 43.2483 15.906 42.819 15.3221C42.3897 14.7382 41.8379 14.2553 41.2024 13.9072L18.3376 0.685418C17.7577 0.348689 17.1167 0.13037 16.4517 0.0431056C15.7868 -0.0441592 15.1111 0.00136207 14.4639 0.177036C13.8167 0.352711 13.2108 0.655049 12.6812 1.06654C12.1516 1.47802 11.709 1.99048 11.3788 2.57424L1.43768 19.4742C1.08321 20.0445 0.847942 20.6807 0.746128 21.3445C0.64431 22.0082 0.678043 22.6857 0.845272 23.336C1.0125 23.9863 1.30976 24.5961 1.71913 25.1283C2.12849 25.6606 2.64146 26.1044 3.22708 26.433L26.0917 39.6548C26.7646 40.0441 27.518 40.2735 28.2937 40.3252C29.0694 40.3769 29.8466 40.2496 30.5653 39.953L44.6817 36.2748C45.4347 36.0926 46.118 35.6946 46.6478 35.1294C47.1776 34.5643 47.5308 33.8567 47.6641 33.0936C47.6641 32.4971 47.6641 32.0995 47.4652 31.503ZM44.4829 29.1171C44.6926 29.912 44.6629 30.7512 44.3976 31.5293C44.1324 32.3074 43.6433 32.9899 42.9917 33.4912C42.4925 33.8628 41.9182 34.1209 41.3089 34.2474C40.6996 34.374 40.07 34.366 39.4641 34.224C38.8582 34.082 38.2906 33.8094 37.801 33.4253C37.3113 33.0411 36.9115 32.5547 36.6294 32.0001C36.2687 31.2635 36.1329 30.437 36.239 29.6238C36.3451 28.8105 36.6883 28.0465 37.2258 27.4271C37.738 26.8677 38.3897 26.4545 39.1142 26.2301C39.8387 26.0057 40.6098 25.9781 41.3485 26.1501C42.0872 26.3221 42.7668 26.6876 43.3177 27.209C43.8685 27.7304 44.2706 28.389 44.4829 29.1171Z"
                                fill="#FFE447" />
                            <path
                                d="M15.3434 20.7952C15.9341 21.0326 16.5135 21.048 16.9575 21.0256C17.3904 20.7813 17.8232 20.5369 18.1095 20.0328L18.2114 19.4045L18.2268 18.8251L17.9335 18.3056L17.5049 17.7485L15.3434 20.7952ZM19.63 12.2108L18.9039 11.9357L18.1513 12.0181C17.8172 12.1022 17.5262 12.3072 17.3345 12.5934L17.0106 13.2329L17.1306 13.8501L17.7659 14.9755L19.63 12.2108ZM18.7098 16.0408L19.6049 17.0197L20.2402 18.145C20.4845 18.5779 20.5069 19.0219 20.5292 19.4659L20.1523 20.8204L19.0115 22.0351C18.5929 22.3618 18.1118 22.599 17.5978 22.7321C17.0838 22.8652 16.5479 22.8912 16.0234 22.8087C15.444 22.7933 14.8533 22.556 14.2627 22.3186L13.4682 23.3379C13.4305 23.4733 13.344 23.5222 13.122 23.5334C12.9488 23.6311 12.8622 23.68 12.6779 23.5557L11.9896 23.1452L13.1568 21.573C12.6159 21.1496 12.1407 20.6485 11.7466 20.0859L10.8557 18.3057L11.9811 17.6704L12.3386 17.6969L12.6095 17.7723L12.9404 18.1563C13.1678 18.5223 13.3798 18.8978 13.5757 19.2817C13.7223 19.5414 13.8689 19.8011 14.2376 20.0496L16.561 16.6831L15.6659 15.7044L15.0306 14.579C14.8577 14.1153 14.799 13.6167 14.8596 13.1255C14.9201 12.6343 15.098 12.1649 15.3783 11.757C15.6198 11.3611 15.938 11.0174 16.3142 10.7462C16.6904 10.475 17.1171 10.2818 17.5691 10.1778C18.0508 10.0201 18.5813 9.94883 19.1231 10.0996C19.7088 10.1783 20.2757 10.3609 20.7973 10.6386L21.4186 9.71704L21.938 9.42382L22.3444 9.5369L23.0327 9.94742L22.0386 11.4219C22.5028 11.7749 22.9012 12.2069 23.2157 12.6981C23.46 13.131 23.7044 13.5638 23.7756 14.0944L22.9099 14.5831L22.6013 14.6431L22.195 14.5301L22.0484 14.2703C21.8512 14.0019 21.6594 13.7295 21.4731 13.4535L20.9579 12.9453L18.7964 15.992L18.7098 16.0408ZM24.5143 26.1206C24.9695 26.3203 25.5112 26.4711 25.993 26.3133C26.4258 26.069 26.8587 25.8246 27.0583 25.3694L27.2957 24.7788L27.2245 24.2482L26.5403 23.0362L24.3789 26.0829L24.5143 26.1206ZM28.8009 17.5362L27.9016 17.3589L27.1867 17.3058C27.0031 17.3592 26.8325 17.4499 26.6854 17.5722C26.5384 17.6945 26.4182 17.8457 26.3322 18.0165L26.0949 18.6072L26.1661 19.1378L26.8503 20.3498L28.7143 17.5851L28.8009 17.5362ZM27.7453 21.3285L28.6026 22.4428L29.2379 23.5682L29.5647 24.7536C29.587 25.1976 29.3873 25.6528 29.1877 26.108C28.8149 26.661 28.5663 27.0296 28.0469 27.3228C27.6411 27.6582 27.1712 27.9075 26.6659 28.0554C26.1605 28.2033 25.6304 28.2467 25.1077 28.183C24.5283 28.1676 23.8511 27.9791 23.2981 27.6063L22.5525 28.7122L22.2062 28.9076C22.0331 29.0054 21.9465 29.0543 21.7622 28.93L21.025 28.4329L22.1923 26.8607C21.6514 26.4373 21.1761 25.9362 20.782 25.3736C20.3533 24.8165 20.1467 24.2482 19.8912 23.5934L20.9789 23.0935L21.2875 23.0335L21.6938 23.1466L21.8893 23.4928C22.1353 23.8864 22.3636 24.2908 22.5734 24.7048L23.3219 25.4239L25.5587 22.1063L24.7014 20.9921L24.066 19.8666C23.9101 19.4248 23.8569 18.9531 23.9106 18.4876C23.9643 18.0221 24.1235 17.5749 24.376 17.1802C24.6077 16.7551 24.9256 16.383 25.3093 16.0877C25.693 15.7925 26.1342 15.5806 26.6045 15.4655L28.1585 15.3873C28.7667 15.4872 29.351 15.6993 29.8816 16.0128L30.5029 15.0913L30.8492 14.8958C31.0223 14.7981 31.1089 14.7492 31.2932 14.8735L32.0305 15.3705L30.9874 16.7585C31.477 17.1328 31.8928 17.5949 32.2134 18.1212C32.4577 18.5541 32.7021 18.9869 32.7244 19.431L31.5125 20.1152L31.1927 19.9532L31.0461 19.6935C30.803 19.4139 30.566 19.129 30.3354 18.8389L29.9067 18.2818L27.7453 21.3285Z"
                                fill="#3298BF" />
                            <path
                                d="M41.9922 33.7734C44.9391 31.6887 51.4685 35.8516 56.5761 43.0715C59.2668 46.8751 61.0261 50.7683 61.6578 53.9058"
                                stroke="#0B0816" stroke-linecap="round" />
                        </svg>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-20">
                    <div class="reaestate-classic-home-features"
                        style="background-image: url('assets/images/features2.png');">
                        <h3>SafetyFirst™</h3>
                        <h4>Find homes in Safest <br>Locations</h4>
                        <img src="assets/images/car.png" alt="car" class="feature-car">
                        <svg class="locarion-car2 " width="23" height="33" viewBox="0 0 23 33" fill="none">
                            <path
                                d="M11.4775 3.20843e-05C8.43504 3.11411e-05 5.51706 1.20803 3.36487 3.35853C1.21268 5.50902 0.00239564 8.42605 0 11.4685C0 20.0269 11.4775 32.6613 11.4775 32.6613C11.4775 32.6613 22.955 20.0269 22.955 11.4685C22.9562 9.96059 22.6598 8.46726 22.0827 7.07412C21.5057 5.68099 20.6594 4.41544 19.5923 3.35002C18.5252 2.2846 17.2583 1.44025 15.8642 0.865396C14.4702 0.290537 12.9764 -0.00353602 11.4685 3.20843e-05H11.4775Z"
                                fill="#4081FF" />
                            <path
                                d="M6.13733 12.6004C6.10731 11.8606 6.22709 11.1225 6.48947 10.4302C6.75185 9.7379 7.15144 9.10578 7.66422 8.57177C8.17699 8.03777 8.79239 7.61289 9.47346 7.32266C10.1545 7.03242 10.8872 6.88281 11.6276 6.88281C12.3679 6.88281 13.1006 7.03242 13.7817 7.32266C14.4628 7.61289 15.0782 8.03777 15.5909 8.57177C16.1037 9.10578 16.5033 9.7379 16.7657 10.4302C17.0281 11.1225 17.1478 11.8606 17.1178 12.6004C17.0603 14.0179 16.4567 15.3583 15.4334 16.3409C14.41 17.3236 13.0463 17.8723 11.6276 17.8723C10.2088 17.8723 8.84511 17.3236 7.82178 16.3409C6.79845 15.3583 6.19486 14.0179 6.13733 12.6004Z"
                                fill="white" />
                        </svg>
                        <svg class="locarion-car1 " width="15" height="22" viewBox="0 0 15 22" fill="none">
                            <path
                                d="M7.46491 8.79893e-05C5.49124 0.00481938 3.59935 0.789102 2.20122 2.18216C0.803077 3.57522 0.0119127 5.46424 0 7.43788C0 12.9959 7.46491 21.2019 7.46491 21.2019C7.46491 21.2019 14.9298 12.9959 14.9298 7.43788C14.931 6.45852 14.7386 5.48857 14.3635 4.58386C13.9884 3.67916 13.4382 2.85754 12.7444 2.16628C12.0507 1.47503 11.227 0.927779 10.321 0.556018C9.4149 0.184257 8.44427 -0.00467853 7.46491 8.79893e-05Z"
                                fill="#070026" />
                            <path
                                d="M3.92188 7.45221C3.92188 6.51384 4.29463 5.61389 4.95817 4.95036C5.6217 4.28683 6.52163 3.91406 7.46 3.91406C8.39838 3.91406 9.29834 4.28683 9.96187 4.95036C10.6254 5.61389 10.9982 6.51384 10.9982 7.45221C10.9982 8.39059 10.6254 9.29053 9.96187 9.95406C9.29834 10.6176 8.39838 10.9904 7.46 10.9904C6.52163 10.9904 5.6217 10.6176 4.95817 9.95406C4.29463 9.29053 3.92188 8.39059 3.92188 7.45221Z"
                                fill="#E9F7F0" />
                        </svg>


                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-20">
                    <div class="reaestate-classic-home-features"
                        style="background-image: url('assets/images/features3.png');">
                        <h3>EaseApproved™</h3>
                        <h4>pre-approval online and <br>
                            know your budget.</h4>
                        <svg class="location-last " width="33" height="54" viewBox="0 0 33 54" fill="none">
                            <path
                                d="M16.4085 0.000161847C18.551 -0.00940836 20.6742 0.405535 22.6554 1.22102C24.6367 2.0365 26.4368 3.23638 27.9518 4.75137C29.4668 6.26636 30.6666 8.06644 31.4821 10.0477C32.2976 12.029 32.7125 14.1521 32.703 16.2946C32.703 28.4951 16.4718 46.5338 16.4718 46.5338C16.4718 46.5338 0.177315 28.5042 0.177315 16.2946C0.177313 14.1616 0.597742 12.0495 1.41457 10.079C2.23139 8.1086 3.42858 6.31848 4.93771 4.81104C6.44683 3.3036 8.23828 2.10839 10.2096 1.29376C12.181 0.47913 14.2936 0.0610551 16.4266 0.0634304V0.000161847H16.4085Z"
                                fill="#FFE447" />
                            <path
                                d="M23.5703 15.9321C23.5703 13.9859 22.7972 12.1193 21.4209 10.7431C20.0447 9.3669 18.1782 8.59375 16.2319 8.59375C14.2857 8.59375 12.4191 9.3669 11.0429 10.7431C9.6667 12.1193 8.89355 13.9859 8.89355 15.9321C8.89355 17.8772 9.66622 19.7426 11.0416 21.118C12.417 22.4933 14.2824 23.266 16.2274 23.266C18.1725 23.266 20.0379 22.4933 21.4132 21.118C22.7886 19.7426 23.5613 17.8772 23.5613 15.9321H23.5703Z"
                                fill="#B29F32" />
                            <path opacity="0.1"
                                d="M24.7109 51.1687C24.7109 50.0209 21.096 49.1172 16.5321 49.1172C11.9591 49.1172 8.35322 50.0209 8.35322 51.1687C8.35322 52.2983 11.9682 53.2021 16.5321 53.2021C21.096 53.2021 24.7109 52.2984 24.7109 51.1596V51.1687Z"
                                fill="#222222" />
                        </svg>
                        <svg class="location-last1 " width="18" height="32" viewBox="0 0 18 32" fill="none">
                            <path
                                d="M8.77155 0.6875C11.0989 0.6875 13.3309 1.61204 14.9766 3.25774C16.6223 4.90343 17.5469 7.13547 17.5469 9.46284C17.5469 16.015 8.78057 25.694 8.78057 25.694C8.78057 25.694 -0.00379753 16.024 -0.00379753 9.46284C-0.00379753 7.13547 0.920744 4.90343 2.56644 3.25774C4.21213 1.61204 6.44419 0.6875 8.77155 0.6875Z"
                                fill="#F4FDFF" />
                            <path
                                d="M12.8594 9.35083C12.8594 8.23628 12.4166 7.16739 11.6285 6.37929C10.8404 5.59119 9.77153 5.14844 8.65698 5.14844C7.54244 5.14844 6.47353 5.59119 5.68543 6.37929C4.89733 7.16739 4.45459 8.23628 4.45459 9.35083C4.45459 10.4654 4.89733 11.5343 5.68543 12.3224C6.47353 13.1105 7.54244 13.5532 8.65698 13.5532C9.77153 13.5532 10.8404 13.1105 11.6285 12.3224C12.4166 11.5343 12.8594 10.4654 12.8594 9.35083Z"
                                fill="#4081FF" />
                            <path opacity="0.1"
                                d="M14.8516 29.6658C14.8516 28.762 12.1403 28.0391 8.71515 28.0391C5.28997 28.0391 2.64201 28.762 2.64201 29.6658C2.64201 30.5153 5.35323 31.2293 8.71515 31.2293C12.0861 31.2293 14.8516 30.5063 14.8516 29.6658Z"
                                fill="#222222" />
                        </svg>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--============== Upcoming Auctions Properties Section Start ==============-->
    <div class="full-row bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col">
                            <h2 class="text-secondary double-down-line text-center">Live Auctions</h2>
                            <span class="text-center mt-4 d-block mb-5">All of our Live Auctions properties for this month
                                are included</span>
                        </div>
                        @if (!$upcomingauction->isEmpty())
                            <div>
                                <a href="{{ config('    ') }}/search">
                                    <button class="btn btn-primary view-all">View All</button>
                                </a>
                            </div>
                        @endif
                    </div>

                    @if ($upcomingauction->isEmpty())
                        <!-- Display image if no auction data is available -->
                        <div class="text-center">
                            <img src="{{ asset('assets/img/coming-soon.png') }}" alt="No Auctions Available"
                                style="max-width: 75%; height: auto;">
                            <p>No auctions available at the moment. Please check back later.</p>
                        </div>
                    @else
                        <!-- Table showing auction data -->
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col" >Sr. No
                                        </th>
                                        <th scope="col" >Auction ID
                                        </th>
                                        <th scope="col" >Bank</th>
                                        <th scope="col" >Location
                                        </th>
                                        <th scope="col" >Auction
                                            Start Date</th>
                                        <th scope="col" >Auction
                                            End Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($upcomingauction as $upcomingauctions)
                                        <tr>
                                            <td >
                                                {{ $loop->iteration + ($upcomingauction->currentPage() - 1) * $upcomingauction->perPage() }}
                                            </td>
                                            <td >
                                                {{ $upcomingauctions->id }}</td>
                                            <td >
                                                {{ $upcomingauctions->bank->bank_name }}</td>
                                            <td >
                                                {{ $upcomingauctions->locality }}</td>
                                            <td >
                                                {{ $upcomingauctions->auction_start_datetime }}</td>
                                            <td >
                                                {{ $upcomingauctions->auction_end_datetime }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        @if ($upcomingauction->hasPages())
                            <div class="pagination-container">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <!-- Previous Page Link -->
                                        @if ($upcomingauction->onFirstPage())
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1"
                                                    aria-disabled="true">Previous</a>
                                            </li>
                                        @else
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $upcomingauction->previousPageUrl() }}"
                                                    rel="prev">Previous</a>
                                            </li>
                                        @endif

                                        <!-- Pagination Elements -->
                                        @foreach ($upcomingauction->links()->elements as $element)
                                            @if (is_string($element))
                                                <li class="page-item disabled"><span
                                                        class="page-link">{{ $element }}</span></li>
                                            @endif
                                            @if (is_array($element))
                                                @foreach ($element as $page => $url)
                                                    @if ($page == $upcomingauction->currentPage())
                                                        <li class="page-item active" aria-current="page"><span
                                                                class="page-link">{{ $page }}</span></li>
                                                    @else
                                                        <li class="page-item"><a class="page-link"
                                                                href="{{ $url }}">{{ $page }}</a></li>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach

                                        <!-- Next Page Link -->
                                        @if ($upcomingauction->hasMorePages())
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $upcomingauction->nextPageUrl() }}"
                                                    rel="next">Next</a>
                                            </li>
                                        @else
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        @endif
                                    </ul>
                                </nav>
                            </div>
                        @endif
                    @endif
                </div>
                <div class="col-md-8">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-white border-0 d-flex justify-content-between align-items-center">
                            <div>
                                <h2 class="text-secondary double-down-line text-center mb-0">Verified Properties</h2>
                                <p class="text-muted mb-0">All of our verified properties for this month</p>
                            </div>
                            @if (!$auction->isEmpty())
                                <a href="{{ config('app.baseURL') }}/verify-auction" class="btn btn-outline-primary">
                                    View All <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            @endif
                        </div>
                        
                        <div class="card-body">
                            @if ($auction->isEmpty())
                                <div class="text-center py-5">
                                    <img src="{{ asset('assets/img/coming-soon.png') }}" alt="No Auctions Available" class="img-fluid" style="max-height: 200px;">
                                    <h4 class="mt-4 text-muted">No auctions available</h4>
                                    <p class="text-muted">Please check back later for updates</p>
                                </div>
                            @else
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col" class="text-nowrap">Sr. No</th>
                                                <th scope="col" class="text-nowrap">Auction ID</th>
                                                <th scope="col" class="text-nowrap">Bank</th>
                                                <th scope="col" class="text-nowrap">Location</th>
                                                <th scope="col" class="text-nowrap">Auction Start</th>
                                                <th scope="col" class="text-nowrap">Auction End</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($auction as $auctions)
                                                <tr class="align-middle">
                                                    <td class="text-center">
                                                        {{ $loop->iteration + ($auction->currentPage() - 1) * $auction->perPage() }}
                                                    </td>
                                                    <td class="text-center">{{ $auctions->id }}</td>
                                                    <td class="text-center">{{ $auctions->bank->bank_name }}</td>
                                                    <td class="text-center">
                                                        <span class="badge bg-light text-dark">{{ $auctions->locality }}</span>
                                                    </td>
                                                    <td class="text-center text-nowrap">
                                                        <span class="badge bg-info text-white">
                                                            {{ \Carbon\Carbon::parse($auctions->auction_start_datetime)->format('d M Y') }}
                                                        </span>
                                                    </td>
                                                    <td class="text-center text-nowrap">
                                                        <span class="badge bg-danger text-white">
                                                            {{ \Carbon\Carbon::parse($auctions->auction_end_datetime)->format('d M Y') }}
                                                        </span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                
                                <!-- Pagination -->
                                @if ($auction->hasPages())
                                    <div class="d-flex justify-content-between align-items-center mt-4">
                                        <div class="text-muted">
                                            Showing {{ $auction->firstItem() }} to {{ $auction->lastItem() }} of {{ $auction->total() }} entries
                                        </div>
                                        <nav aria-label="Page navigation">
                                            <ul class="pagination mb-0">
                                                <!-- Previous Page Link -->
                                                @if ($auction->onFirstPage())
                                                    <li class="page-item disabled">
                                                        <span class="page-link"><i class="fas fa-angle-left"></i></span>
                                                    </li>
                                                @else
                                                    <li class="page-item">
                                                        <a class="page-link" href="{{ $auction->previousPageUrl() }}" rel="prev">
                                                            <i class="fas fa-angle-left"></i>
                                                        </a>
                                                    </li>
                                                @endif
                
                                                <!-- Pagination Elements -->
                                                @foreach ($auction->links()->elements as $element)
                                                    @if (is_string($element))
                                                        <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
                                                    @endif
                
                                                    @if (is_array($element))
                                                        @foreach ($element as $page => $url)
                                                            @if ($page == $auction->currentPage())
                                                                <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                                                            @else
                                                                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                @endforeach
                
                                                <!-- Next Page Link -->
                                                @if ($auction->hasMorePages())
                                                    <li class="page-item">
                                                        <a class="page-link" href="{{ $auction->nextPageUrl() }}" rel="next">
                                                            <i class="fas fa-angle-right"></i>
                                                        </a>
                                                    </li>
                                                @else
                                                    <li class="page-item disabled">
                                                        <span class="page-link"><i class="fas fa-angle-right"></i></span>
                                                    </li>
                                                @endif
                                            </ul>
                                        </nav>
                                    </div>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </div>



    <!--============== Blog Section Start ==============-->
    <div class="full-row bg-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-secondary double-down-line text-center">Loan Partners</h2>
                    <span class="text-center mt-4 d-block mb-5">
                        The most recent posted articles and valuable tips.
                    </span>
                </div>
            </div>

            <div class="row">
                <div class="slider-area property-slider1">
                    <!-- Swiper Container -->
                    <div class="swiper th-slider property-thumb-slider">
                        <div class="swiper-wrapper">
                            <!-- Swiper Slide 1 -->
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/bank/sbi.png') }}" alt="Dummy Image">
                            </div>
                            <!-- Swiper Slide 2 -->
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/bank/kotak.png') }}" alt="Dummy Image">
                            </div>
                            <!-- Swiper Slide 3 -->
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/bank/icici.png') }}" alt="Dummy Image">
                            </div>
                            <!-- Swiper Slide 4 -->
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/bank/hdfc.png') }}" alt="Dummy Image">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/bank/maharashtra.png') }}" alt="Dummy Image">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/bank/saraswatbank.png') }}" alt="Dummy Image">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/bank/central.png') }}" alt="Dummy Image">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/bank/pnb.png') }}" alt="Dummy Image">
                            </div>





                        </div>
                    </div>
                    <!-- Navigation Buttons -->
                    <button class="slider-arrow style3 slider-prev" data-slider-prev="#propertySlider"></button>
                    <button class="slider-arrow style3 slider-next" data-slider-next="#propertySlider"></button>
                </div>
            </div>
        </div>
    </div>




    <!--============== How it work Section Start ==============-->
    <!--  <div class="full-row bg-white">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col">
                                                    <h2 class="text-secondary double-down-line text-center">How It Work</h2>
                                                    <span class="text-center mt-4 d-block mb-5">We listed our oppertunity and servies as a real estate company</span> </div>
                                            </div>
                                            <div class="row row-cols-md-3 row-cols-1">
                                                <div class="col">
                                                    <div class="icon-thumb-one text-center mb-5">
                                                        <div class="left-arrow">
                                                            <div class="icon-area">
                                                                <div class="bg-primary text-white rounded-circle position-absolute">1</div>
                                                                <i class="flaticon-investor flat-medium icon-primary"></i>
                                                            </div>
                                                        </div>
                                                        <h5 class="text-secondary mt-5 mb-4">Discussion</h5>
                                                        <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="icon-thumb-one text-center mb-5">
                                                        <div class="left-arrow">
                                                            <div class="icon-area">
                                                                <div class="bg-primary text-white rounded-circle position-absolute">2</div>
                                                                <i class="flaticon-search flat-medium icon-primary"></i>
                                                            </div>
                                                        </div>
                                                        <h5 class="text-secondary mt-5 mb-4">Files Review</h5>
                                                        <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="icon-thumb-one text-center mb-5">
                                                        <div class="left-arrow">
                                                            <div class="icon-area">
                                                                <div class="bg-primary text-white rounded-circle position-absolute">3</div>
                                                                <i class="flaticon-handshake flat-medium icon-primary"></i>
                                                            </div>
                                                        </div>
                                                        <h5 class="text-secondary mt-5 mb-4">Acquire</h5>
                                                        <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="icon-thumb-one text-center mb-5">
                                                        <div class="left-arrow">
                                                            <div class="icon-area">
                                                                <div class="bg-primary text-white rounded-circle position-absolute">4</div>
                                                                <i class="flaticon-strategy flat-medium icon-primary"></i>
                                                            </div>
                                                        </div>
                                                        <h5 class="text-secondary mt-5 mb-4">Managment</h5>
                                                        <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="icon-thumb-one text-center mb-5">
                                                        <div class="left-arrow">
                                                            <div class="icon-area">
                                                                <div class="bg-primary text-white rounded-circle position-absolute">5</div>
                                                                <i class="flaticon-diagram flat-medium icon-primary"></i>
                                                            </div>
                                                        </div>
                                                        <h5 class="text-secondary mt-5 mb-4">Survey</h5>
                                                        <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="icon-thumb-one text-center mb-5">
                                                        <div class="left-arrow">
                                                            <div class="icon-area">
                                                                <div class="bg-primary text-white rounded-circle position-absolute">6</div>
                                                                <i class="flaticon-money flat-medium icon-primary"></i>
                                                            </div>
                                                        </div>
                                                        <h5 class="text-secondary mt-5 mb-4">Collect</h5>
                                                        <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
    <!--============== How it work Section End ==============-->



    <!--============== Positive Thinking Section Start ==============-->
    <!-- <div class="full-row overlay-secondary" style="background-image: url('assets/images/making.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat; background-attachment: fixed;">
                                        <div class="container position-relative">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <div class="text-white">
                                                        <h2 class="text-white double-down-line-left position-relative pb-4 mb-5"><span class="h4 d-block">Start Study</span>Making your positive thinking</h2>
                                                        <p>Malesuada hac lectus. Ligula donec. Sodales odio conubia facilisis, sagittis velit rutrum sodales, conubia. Curae; nunc conubia accumsan vitae congue ornare ultricies bibendum justo. Mus sit porta luctus ultricies platea duis
                                                            cum aliquam tristique gravida accumsan orci velit lobortis posuere, eu ullamcorper quam eget. Tempor urna, luctus leo parturient augue.</p>
                                                        <a class="btn btn-primary mt-4" href="#">Download Brochure</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
    <!--============== Positive Thinking Section End ==============-->

    <!--============== Blog Section Start ==============-->
    <!--  <div class="full-row bg-white">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col">
                                                    <h2 class="text-secondary double-down-line text-center">Recent Blogs</h2>
                                                    <span class="text-center mt-4 d-block mb-5">The most recent posted articles and valuable tips.</span> </div>
                                            </div>
                                            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4 blog-start">

                                @foreach ($blog as $blogs)
    <div class="col">
                                        <div class="hover-zoomer thumb-two shadow-one blog-card">
                                            <div class="overlay-black overflow-hidden position-relative">
                                                <img src="{{ config('app.baseURL') }}/storage/app/{{ $blogs->image }}" alt="image">
                                                <div class="date text-white position-absolute z-index-9">{{ \Carbon\Carbon::parse($blogs->created_at)->format('F j, Y') }}</div>
                                            </div>
                                            <div class="p-4">
                                                <h6 class="text-secondary hover-text-primary mb-4 truncate-title">
                                                    <a href="blog-details.html">{{ $blogs->title }}</a>
                                                </h6>
                                                <p class="truncate-description">{{ $blogs->description }}</p>
                                                <a class="mt-3 text-primary hover-text-secondary" href="{{ config('app.baseURL') }}/blogdetails?id={{ $blogs->id }}">Read More</a>
                                            </div>
                                        </div>
                                    </div>
    @endforeach -->
    <!--     @foreach ($blog as $blogs)
    <div class="col">
                                                    <div class="hover-zoomer thumb-two shadow-one">
                                                        <div class="overlay-black overflow-hidden position-relative"> <img src="{{ config('app.baseURL') }}/storage/app/{{ $blogs->image }}" alt="image">
                                                            <div class="date text-white position-absolute z-index-9">{{ \Carbon\Carbon::parse($blogs->created_at)->format('F j, Y') }}
                            </div>
                                                        </div>
                                                        <div class="p-4">
                                                            <h6 class="text-secondary hover-text-primary mb-4"><a href="blog-details.html">{{ $blogs->title }}.</a></h6>
                                                            <p>{{ $blogs->description }}</p>
                                                            <a class="mt-3 text-primary hover-text-secondary" href="">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>
    @endforeach -->
    <!-- <div class="col">
                                                    <div class="hover-zoomer thumb-two shadow-one">
                                                        <div class="overlay-black overflow-hidden position-relative"> <img src="assets/images/blog/02.jpg" alt="image">
                                                            <div class="date text-white position-absolute z-index-9">November 10, 2018</div>
                                                        </div>
                                                        <div class="p-4">
                                                            <h6 class="text-secondary hover-text-primary mb-4"><a href="blog-details.html">Your investment is our heart, so you can stay in relax.</a></h6>
                                                            <p>Nunc tempus, auctor mauris montes, attis fringilla dignissim. Vitae habitant estibulum quisque commodo.</p>
                                                            <a class="mt-3 text-primary hover-text-secondary" href="#">Read More</a>
                                                        </div>
                                                    </div>
                                                </div> -->
    <!-- <div class="col">
                                                    <div class="hover-zoomer thumb-two shadow-one">
                                                        <div class="overlay-black overflow-hidden position-relative"> <img src="assets/images/blog/03.jpg" alt="image">
                                                            <div class="date text-white position-absolute z-index-9">October 31, 2018</div>
                                                        </div>
                                                        <div class="p-4">
                                                            <h6 class="text-secondary hover-text-primary mb-4"><a href="blog-details.html">What do you thinking for your family house planing.</a></h6>
                                                            <p>Nunc tempus, auctor mauris montes, attis fringilla dignissim. Vitae habitant estibulum quisque commodo.</p>
                                                            <a class="mt-3 text-primary hover-text-secondary" href="#">Read More</a>
                                                        </div>
                                                    </div>
                                                </div> -->
    <!-- </div>
                                        </div>
                                    </div> -->
    <!--============== Blog Section End ==============-->

    <!--============== Massage Box One Section Start ==============-->
    <!--  <div class="full-row bg-primary py-5">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col">
                                                    <h3 class="text-white text-center line-height-50">How to Become Easy and Flexible to Living in Los Angles. Get A Comfortable Appartment in Budget.</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
    <!--============== Massage Box One Section End ==============-->

    <h1>Services</h1>
    <p>
        We listed our oppertunity and servies as a real estate company
    </p>

    <div class="pricing">
        @foreach ($premium as $premiumItem)
            <div class="plan popular">
                <span>Most Popular</span>
                <h2>Pro</h2>
                <div class="price">
                    ₹{{ $premiumItem->price - $premiumItem->offer_price }}
                    <small>₹{{ $premiumItem->price }}</small>
                </div>

                <div class="discount-container">
                    <strong class="discount-badge">{{ $premiumItem->offer_percentage }}% Off</strong>
                </div>

                <div class="duration">
                    <strong>Duration:</strong> {{ $premiumItem->days }} Days
                </div>
                <ul class="features">
                    <li><i class="fas fa-check-circle"></i> Unlimited Listing</li>
                    <li><i class="fas fa-check-circle"></i> 30 Days Free</li>
                    <li><i class="fas fa-check-circle"></i> High Rank Search Engine</li>
                    <li><i class="fas fa-check-circle"></i> {{ $premiumItem->email_support == '1' ? 'check' : 'times' }}
                        Certification</li>
                    <li><i class="fas fa-{{ $premiumItem->email_support == '1' ? 'check' : 'times' }}-circle"></i> Email
                        Support</li>
                    <li><i class="fas fa-check-circle"></i> Payment Guarantee</li>
                </ul>
                @guest
                    <button onclick="window.location.href='{{ config('app.baseURL') }}/register'">Register Now</button>
                @else
                    <button onclick="showConfirmationModal({{ $premiumItem->id }})">Buy
                        Now</button>
                @endguest
            </div>
        @endforeach
    </div>

    {{-- Confirmation Modal --}}
    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Confirm Purchase</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to buy this plan?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="confirmPurchase">OK</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Swiper
            var swiper = new Swiper('.th-slider', {
                effect: 'slide',
                loop: true, // Enable continuous loop without any gaps
                slidesPerView: 'auto', // Dynamically show as many slides as fit
                spaceBetween: 0, // Set space between slides to 0 for continuous scrolling
                autoplay: {
                    delay: 0, // No delay for continuous scroll
                    disableOnInteraction: false, // Keep autoplay running on interaction
                },
                speed: 3000, // Adjust speed for smooth scrolling (3 seconds for a full transition)
                loopedSlides: 6, // Ensures continuous scrolling without gap
                breakpoints: {
                    0: {
                        slidesPerView: 2, // 2 slides on small screens
                        spaceBetween: 0, // No space between on small screens
                    },
                    576: {
                        slidesPerView: 3, // 3 slides for medium screens
                    },
                    768: {
                        slidesPerView: 4, // 4 slides for larger screens
                    },
                    992: {
                        slidesPerView: 5, // 5 slides for larger devices
                    },
                    1200: {
                        slidesPerView: 6, // 6 slides for wide screens
                    },
                },
                navigation: {
                    nextEl: '.slider-next', // Next button
                    prevEl: '.slider-prev', // Previous button
                },
            });
        });
    </script>

    <script>
        let selectedPlanId = null;

        function showConfirmationModal(planId) {
            selectedPlanId = planId;
            $('#confirmationModal').modal('show');
        }

        $('#confirmPurchase').on('click', function() {
            if (selectedPlanId) {
                $.ajax({
                    url: '{{ route('buy.plan') }}', // Update this route accordingly
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        plan_id: selectedPlanId
                    },
                    success: function(response) {
                        if (response.success) {
                            alert('Purchase successful!');
                            $('#confirmationModal').modal('hide');
                            // Optionally redirect or refresh the page
                            window.location.reload();
                        } else {
                            alert('An error occurred. Please try again.');
                        }
                    },
                    error: function() {
                        alert('An error occurred. Please try again.');
                    }
                });
            }
        });
    </script>






@endsection
