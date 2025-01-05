<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to our Website</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">        

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background: #333;
            color: #fff;
            font-family: 'Roboto', sans-serif;
            overflow: hidden; /* Prevent scrolling */
        }

        .center-text {
            position: fixed;
            top: 55%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            text-align: center;
            z-index: 10;
        }

        .center-text a {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            background-color: white;
            width: 60px;
            height: 60px;
            font-size: 1.25rem;
            border-radius: 50%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            z-index: 11; /* Ensure the button is above other elements */
        }

        .center-text a:hover {
            transform: scale(1.5);
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
        }

        .wawasan {
            font-size: 10rem !important;
            line-height: 0.3;
            margin: 0;
            padding: 0;
            letter-spacing: -2px;
        }

        .pacifico-regular {
            margin: 0;
            padding: 0;
            font-size: 5rem !important;
            font-family: "Pacifico", serif;
            font-weight: 400;
            font-style: italic;
            text-shadow: 
                0 0 5px blue,
                0 0 10px blue,
                0 0 20px blue,
                0 0 40px blue,
                0 0 80px blue,
                0 0 100px blue;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 15px;
        }

        .container > div {
            cursor: pointer;
            height: 210px;
            background-size: cover;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            transition: all 0.5s ease-in;
        }

        .container > div:nth-of-type(1) {
            grid-column: 1 / 3;
        }

        .container > div:nth-of-type(6),
        .container > div:nth-of-type(9) {
            grid-column: 3 / 5;
        }

        .container > div:nth-of-type(10) {
            grid-column: 1 / 5;
        }

        .bg1 {
            background: url({{ asset('assets/img/index.jpeg') }}) no-repeat center;
            background-size: cover;
        }

        .bg-dark {
            background: #555;
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
            <a href="/daftar-isi" class="play">
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