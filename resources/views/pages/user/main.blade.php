<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to our website</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">        
    
    {{-- CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    
    <style>
        *{
            box-sizing:border-box;
            margin:0;
            padding:0;
        }
        body{
            background:#333;
            color:#fff;
            font-family:'Roboto',sans-serif;
            overflow: hidden; /* Mencegah scroll */
        }
        a {
            background-color: white;
            padding: 10px 20px;
            font-size: 1.25rem;
            border-radius: 100%;
        }
        
        .center-text {
            position: fixed;
            top: 55%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            text-align: center;
            z-index: 10;
            pointer-events: none; /* Prevent interaction */
        }
        
        .wawasan {
            font-size: 10rem !important;
            line-height: 0.3;
            margin: 0px;
            padding: 0px;
            letter-spacing: -2px;
        }

        .pacifico-regular {
            margin: 0px;
            padding: 0px;
            font-size: 5rem !important;
            font-family: "Pacifico", serif;
            font-weight: 400;
            font-style: normal;
            font-style: italic;
            text-shadow: 
                0 0 5px blue,     /* Cahaya dekat */
                0 0 10px blue,    /* Cahaya sedang */
                0 0 20px blue,    /* Cahaya jauh */
                0 0 40px blue, /* Cahaya lebih terang */
                0 0 80px blue, /* Cahaya luar */
                0 0 100px blue; /* Cahaya paling jauh */
        }


        h2{
            font-size:45px;
            font-weight:300;
            margin:18px;
        }
        h2 span{
            font-size:30px;
        }
        .container{
            display:grid;
            grid-template-columns:repeat(4,1fr);
            grid-gap:15px;
        }
        .container >div{
            cursor:pointer;
            height:210px;

            background-size:cover;
            background-attachment:fixed;
            
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:center;
            text-align:center;
            transition:all 0.5s ease-in;
        }
        /* .container >div:hover{
            opacity:0.7;
            transform:scale(0.98);
        } */
        .container >div:nth-of-type(1){
            grid-column:1/3;
        }
        .container >div:nth-of-type(6){
            grid-column:3/5;
        }
        .container >div:nth-of-type(9){
            grid-column:3/5;
        }
        .container >div:nth-of-type(10){
            grid-column:1/5;
        }
        .bg1{
            background:url({{ asset('assets/img/index.jpeg') }});
        }
        @media (max-width: 576px) {
                .wawasan {
                    font-size: 5rem !important;
                    line-height: 1;
                }
                .pacifico-regular {
                    font-size: 3rem !important;
                }
            }
    </style>
</head>
<body>
        <section class="grid-image">
            <div class="center-text">
                <h1 class="wawasan text-white fw-bold mb-0">Wawasan</h1>
                <h1 class="pacifico-regular">Tak Terbuka</h1>
                <a href="#" class="btn btn-secondary rounded-circle btn-lg ms-3 d-flex justify-content-center align-items-center" style="width: 60px; height: 60px;">
                    <i class="bi bi-play-fill"></i>
                </a>
            </div>
            <div class="container">
                <div class="bg-dark">
                {{-- <h2>16<span>24</span></h2>
                <p>Goals Completed</p> --}}
                </div>
                
                <div class="bg1">
                {{-- <h2><i class="fa fa-battery-three-quarters" aria-hidden="true"></i></h2>
                <p>Respiration</p> --}}
                </div>
                
                <div class="bg-dark">
                {{-- <h2><i class="fa fa-child" aria-hidden="true"></i></h2>
                <p>Child</p> --}}
                </div>
                
                <div class="bg1">
                {{-- <h2>36 &deg;</h2>
                <p>Temperature</p> --}}
                </div>
                
                <div class="bg1">
                {{-- <h2><i class="fa fa-bed" aria-hidden="true"></i></h2>
                <p>Sleep Keep</p> --}}
                </div>
                
                <div class="bg1">
                {{-- <h2>98<span>bpm</span></h2>
                <p>Heart Rate</p> --}}
                </div>
                
                <div class="bg-dark">
                {{-- <h2>179<span>lbs</span></h2>
                <p>Weight</p> --}}
                </div>
                
                <div class="bg1">
                {{-- <h2>28<span>%</span></h2>
                <p>Fat Percentage</p> --}}
                </div>
                
                <div class="bg-dark">
                {{-- <h2>118<span>mgdl</span></h2>
                <p>Blood Glucose</p> --}}
                </div>
                
                <div class="bg1">
                {{-- <h2>680<span>kcal</span></h2>
                <p>AVG Consumption</p> --}}
                </div>
            </div>
    </section>      
</body>
</html>