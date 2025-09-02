<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oasis Travel Manage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flag-icons@6.7.0/css/flag-icons.min.css">

    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">


    <style>
        .hero {
            position: relative;
            height: 300px;
            color: white;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .carousel-caption {

            /* Fond semi-transparent pour la lisibilité */
            border-radius: 10px;
        }

        footer.text-center {
            text-align: center;
            padding: 20px;
            background-color: white;
        }

        .social-logos {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 10px;
        }

        .social-logos img {
            width: 60px;
            height: auto;
        }

        .call-logos {
            display: flex;
            justify-content: right;
            gap: 90px;
            margin-top: 30px;
        }

        .call-logos img {
            width: 60px;
            height: auto;
        }

        /* Stili generali */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            margin: 0;
            font-size: 24px;
        }

        header nav a {
            color: black;
            text-decoration: none;
            margin-left: 15px;
        }

        .logo {
            width: 100px;
            height: auto;
        }



        /* Search Container */
        .search-container {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
        }

        .search-box {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
            background: rgba(255, 255, 255, 0.8);
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 800px;
            flex-wrap: wrap;
        }

        .search-input,
        .date-input,
        .guest-input {
            flex: 1;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        .search-button {
            padding: 12px 24px;
            background-color: #006ce4;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            flex-shrink: 0;
            transition: background-color 0.3s ease;
        }

        .search-button:hover {
            background-color: #005bb5;
        }

        /* Container Section */
        .container {
            display: flex;
            flex-wrap: wrap;
            padding: 20px;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
        }



        /* Sezione hero */
        .hero {
            position: relative;
            background: url('scatto.jpg') no-repeat center center/cover;
            height: 300px;
            color: white;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .hero h1 {
            font-size: 2em;
            /* Ridotto per adattarsi */
            margin: 0;
            color: white;
            background-color: #0071c2;
        }

        .hero p {
            font-size: 1.2em;
            margin: 10px 0;
            color: white;
            background-color: #0071c2;
        }

        .hero .btn-primary {
            background-color: #0071c2;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            margin-top: 20px;
        }

        .hero .btn-primary:hover {
            background-color: #005bb5;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        }

        .search-container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 15px;
        }

        .search-bar {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .search-input {
            flex: 1;
            padding: 12px;
            border: 2px solid #febb02;
            border-radius: 4px;
        }

        .date-input {
            flex: 1;
            padding: 12px;
            border: 2px solid #febb02;
            border-radius: 4px;
        }

        .guest-input {
            flex: 1;
            padding: 12px;
            border: 2px solid #febb02;
            border-radius: 4px;
        }

        .search-button {
            padding: 12px 24px;
            background-color: #006ce4;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        .flight-checkbox {
            margin: 10px 0;
        }

        .offers-section {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 15px;
        }

        .offers-title {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .offers-subtitle {
            color: #6b6b6b;
            margin-bottom: 20px;
        }

        .offer-card {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 24px;
            border: 1px solid #e7e7e7;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .offer-content {
            flex: 1;
        }

        .offer-title {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .offer-description {
            color: #333;
            margin-bottom: 15px;
        }

        .offer-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #006ce4;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
        }

        .offer-image {
            width: 200px;
            height: 150px;
            object-fit: cover;
            border-radius: 4px;
            margin-left: 20px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .section-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 8px;
            color: #1a1a1a;
        }

        .section-subtitle {
            font-size: 16px;
            color: #6b6b6b;
            margin-bottom: 24px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        }

        .destinations-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .destinations-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-auto-rows: 300px;
            gap: 20px;
            margin-bottom: 20px;
        }

        .destinations-grid-bottom {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-auto-rows: 300px;
            gap: 20px;
        }

        .destination-card {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .destination-card:hover {
            transform: translateY(-5px);
        }

        .destination-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .destination-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            padding: 20px;
            background: linear-gradient(to bottom,
                    rgba(0, 0, 0, 0.5) 0%,
                    rgba(0, 0, 0, 0.2) 30%,
                    rgba(0, 0, 0, 0) 100%);
            color: white;
        }

        .destination-name {
            font-size: 24px;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .flag {
            font-size: 20px;
            text-shadow: none;
        }

        @media (max-width: 768px) {

            .destinations-grid,
            .destinations-grid-bottom {
                grid-template-columns: 1fr;
            }
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            margin-bottom: 24px;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 8px;
            color: #1a1a1a;
        }

        .subtitle {
            color: #6b6b6b;
            font-size: 16px;
        }

        .filters {
            display: flex;
            gap: 12px;
            margin-bottom: 24px;
            overflow-x: auto;
            padding-bottom: 8px;
        }

        .filter-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 8px 16px;
            border-radius: 20px;
            border: 1px solid #e7e7e7;
            background: white;
            cursor: pointer;
            white-space: nowrap;
            font-size: 14px;
            transition: all 0.2s ease;
        }

        .filter-btn.active {
            background: #e6f2ff;
            border-color: #0071c2;
            color: #0071c2;
        }

        .destinations-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            position: relative;
        }

        .destination-card {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .destination-card:hover {
            transform: translateY(-4px);
        }

        .destination-image {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .destination-info {
            padding: 12px;
        }

        .destination-name {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 4px;
        }

        .destination-distance {
            color: #6b6b6b;
            font-size: 14px;
        }

        .scroll-button {
            position: absolute;
            right: -20px;
            top: 50%;
            transform: translateY(-50%);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: white;
            border: 1px solid #e7e7e7;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .section-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .section-subtitle {
            color: #6b6b6b;
            font-size: 16px;
            margin-bottom: 24px;
        }

        .hotel-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
            position: relative;
        }

        .hotel-card {
            border: 1px solid #e7e7e7;
            border-radius: 8px;
            overflow: hidden;
            background: white;
        }

        .hotel-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .hotel-info {
            padding: 16px;
        }

        .hotel-name {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 4px;
        }

        .hotel-location {
            color: #6b6b6b;
            font-size: 14px;
            margin-bottom: 12px;
        }

        .rating {
            display: inline-flex;
            align-items: center;
            padding: 4px 8px;
            background: #003580;
            color: white;
            border-radius: 4px;
            font-weight: bold;
            margin-right: 8px;
        }

        .review-text {
            display: inline;
            font-size: 14px;
            color: #262626;
        }

        .review-count {
            color: #6b6b6b;
            font-size: 14px;
        }

        .genius-badge {
            display: inline-block;
            background: #004cb8;
            color: white;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            margin-top: 8px;
        }

        .price-section {
            margin-top: 16px;
            text-align: right;
        }

        .old-price {
            color: #6b6b6b;
            text-decoration: line-through;
            font-size: 14px;
        }

        .current-price {
            font-size: 20px;
            font-weight: bold;
            color: #262626;
        }

        .nights {
            font-size: 14px;
            color: #6b6b6b;
        }

        .promo-badge {
            display: inline-block;
            background: #008009;
            color: white;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            margin-top: 8px;
        }

        .scroll-button {
            position: absolute;
            right: -20px;
            top: 50%;
            transform: translateY(-50%);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: white;
            border: 1px solid #e7e7e7;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .inspiration-section {
            margin-top: 40px;
        }

        .inspiration-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .see-more {
            color: #0071c2;
            text-decoration: none;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: left;
            font-size: 24px;
            color: #333;
        }

        .cards {
            display: flex;
            gap: 20px;
            overflow-x: auto;
            padding: 10px 0;
        }

        .card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            flex: 0 0 300px;
            overflow: hidden;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-content {
            padding: 15px;
        }

        .card-title {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin: 0;
        }

        .card-text {
            font-size: 14px;
            color: #666;
            margin-top: 10px;
        }

        .more-link {
            text-align: right;
            display: block;
            margin-top: 15px;
            color: #007BFF;
            text-decoration: none;
            font-size: 14px;
        }

        .more-link:hover {
            text-decoration: underline;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .promo-section {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            margin-bottom: 20px;
        }

        .promo-section .text {
            max-width: 70%;
        }

        .promo-section h2 {
            font-size: 20px;
            margin: 0 0 10px;
            color: #333;
        }

        .promo-section p {
            font-size: 14px;
            color: #666;
        }

        .promo-buttons {
            display: flex;
            gap: 10px;
        }

        .promo-buttons button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 14px;
        }

        .promo-buttons button:hover {
            background-color: #0056b3;
        }

        .promo-section img {
            width: 50px;
            height: 50px;
        }

        .banner {
            background: #007BFF;
            color: white;
            border-radius: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            margin-bottom: 20px;
        }

        .banner h3 {
            font-size: 24px;
            margin: 0;
        }

        .banner button {
            background: white;
            color: #007BFF;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 14px;
        }

        .banner button:hover {
            background: #f4f4f4;
        }

        .suggestions {
            text-align: center;
        }

        .suggestions h2 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .suggestions .buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .suggestions button {
            background-color: #f4f4f4;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 14px;
        }

        .suggestions button:hover {
            background-color: #ddd;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .tabs {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }

        .tabs button {
            padding: 10px 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
            cursor: pointer;
            font-size: 16px;
        }

        .tabs button.active {
            border-color: #007BFF;
            background-color: #007BFF;
            color: #fff;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-bottom: 20px;
        }

        .grid a {
            text-decoration: none;
            color: #007BFF;
            font-size: 16px;
        }

        .grid a:hover {
            text-decoration: underline;
        }

        .footer {
            background-color: white;
            padding: 20px;
            margin-top: 20px;
            border-top: 1px solid #ddd;
        }

        .footer .footer-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
        }

        .footer-column {
            flex: 1 1 200px;
        }

        .footer-column h4 {
            font-size: 16px;
            margin-bottom: 10px;
            color: #333;
        }

        .footer-column ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-column ul li {
            margin-bottom: 5px;
        }

        .footer-column ul li a {
            text-decoration: none;
            color: black;
            font-size: 14px;
        }

        .footer-column ul li a:hover {
            text-decoration: underline;
        }

        .footer-bottom {
            margin-top: 20px;
            font-size: 12px;
            color: #666;
            text-align: center;
        }

        .footer-bottom img {
            vertical-align: middle;
            margin-right: 5px;
        }

        .nav-item {
            color: #004cb8;

        }

        .user-icon {
            width: 32px;
            height: 32px;
            background-color: #007bff;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            text-transform: uppercase;
        }

        .dropdown-menu.show {
            display: block;
        }

        .belgium-flag {
            display: flex;
            width: 30px;
            height: 20px;
            margin-right: 10px;
            border: 1px solid #ccc;
        }

        .Paris-flag div {
            width: 33.33%;
            height: 100%;
        }

        .belgium-flag .black {
            background-color: black;
        }

        .belgium-flag .yellow {
            background-color: yellow;
        }

        .belgium-flag .red {
            background-color: red;
        }

        .text-muted-lg {
            font-size: 1.125rem;
            /* 18px environ, un peu plus grand que la taille normale */
            color: #6c757d;
            /* couleur grise Bootstrap pour "text-muted" */
        }
    </style>
</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container d-flex align-items-center">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('Logo Oasis.svg') }}" alt="Logo" style="width: 100px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tableau de bord</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('avis.index') }}">Avis</a>
                    </li>
                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center gap-2" href="#" role="button" data-bs-toggle="dropdown">
                            <div class="user-icon">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</div>
                            Bonjour, {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Modifications profil</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Se déconnecter</button>
                                </form>
                            </li>
                            <li><a class="dropdown-item" href="{{ url('/login') }}">Retour à la page login</a></li>
                        </ul>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/login') }}">Se connecter</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    <!-- Contenu principal -->


    <!-- 🎯 Carrousel Hero avec 3 images et des boutons "En savoir plus" -->
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" style="height: 300px;">
        <div class="carousel-inner" style="height: 300px;">

            <div class="carousel-item active">
                <div class="hero" style="background: url('{{ asset('scatto.jpg') }}') no-repeat center center/cover;" alt="image 1">
                    <div class="carousel-caption d-flex justify-content-center align-items-center h-100">
                        <a href="#" class="btn btn-light btn-lg">En savoir plus</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('fame.jpg') }}" class="d-block w-100" style="height: 300px; object-fit: cover;" alt="Image 2">
                <div class="carousel-caption d-flex justify-content-center align-items-center h-100">
                    <a href="#" class="btn btn-light btn-lg">En savoir plus</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('furma.jpg') }}" class="d-block w-100" style="height: 300px; object-fit: cover;" alt="Image 3">
                <div class="carousel-caption d-flex justify-content-center align-items-center h-100">
                    <a href="#" class="btn btn-light btn-lg">En savoir plus</a>
                </div>
            </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
    </div>


    <!-- Recherche -->
    <!-- Flatpickr CSS -->
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">

    <!-- Formulaire de recherche -->
    <form action="{{ route('destination.redirect') }}" method="GET">
        <section class="py-4 bg-light">
            <div class="container">
                <div class="row g-2 align-items-center border border-warning rounded-pill p-2 shadow-sm bg-white">
                    <!-- Destination -->
                    <div class="col-md-4 d-flex align-items-center px-2">
                        <i class="bi bi-bed me-2 text-secondary"></i>
                        <input type="text" name="ville" id="autocomplete-ville" class="form-control border-0" placeholder="Où voulez-vous partir ?" required autocomplete="off">
                        <div id="suggestions" class="position-absolute bg-white border rounded shadow-sm w-100 mt-1 z-3" style="display: none;"></div>

                    </div>


                    <!-- Date de séjour -->
                    <div class="col-md-4 d-flex align-items-center px-2 border-start border-end border-warning">
                        <i class="bi bi-calendar-event me-2 text-secondary"></i>
                        <input type="text" id="date-range" class="form-control border-0" placeholder="Date d’arrivée — Date de départ">
                    </div>

                    <!-- Personnes -->
                    <div class="col-md-3 d-flex align-items-center px-2">
                        <i class="bi bi-person me-2 text-secondary"></i>
                        <input type="text" class="form-control border-0" value="2 adultes · 0 enfant · 1 chambre">
                    </div>

                    <!-- Bouton -->
                    <div class="col-md-1 d-grid">
                        <button type="submit" class="btn btn-primary rounded-pill">Rechercher</button>
                    </div>
                </div>
            </div>
        </section>
    </form>


    <!-- Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr("#date-range", {
            mode: "range",
            dateFormat: "D. d M", // Format style: mar. 10 juin
            minDate: "today",
            locale: {
                firstDayOfWeek: 1
            }
        });
    </script>


    <!-- Offres Section -->
    <section class="container py-5">
        <h2 class="mb-3">Offres Promotions, réductions et autres offres spéciales pour vous</h2>
        <div class="row align-items-center g-4">
            <div class="col-md-6">
                <h3>Économisez sur votre séjour</h3>
                <p>Commencez l’année par une nouvelle aventure, économisez 15 % ou plus avec les Offres Début 2025.</p>
                <a href="#" class="btn btn-success">Économisez 15 % ou plus</a>
            </div>
            <div class="col-md-6">
                <img src="turisti.jpg" alt="Offre vacances" class="img-fluid rounded">
            </div>
        </div>
    </section>


    <!-- Filtres -->
    <section class="bg-light py-4">
        <div class="container text-center">
            <h2>Votre voyage idéal, en un clic</h2>


            <div class="btn-group flex-wrap" role="group" aria-label="Filtres de thèmes">

                <button type="button" class="btn btn-outline-danger mb-2">❤️ Romantisme</button>
                <button type="button" class="btn btn-outline-secondary mb-2">🏛️ Ville</button>
                <button type="button" class="btn btn-outline-info mb-2">🏖️ Plage</button>
                <button type="button" class="btn btn-outline-success mb-2">🚴‍♂️ Plein air</button>
                <button type="button" class="btn btn-outline-warning mb-2">🧘‍♂️ Relaxation</button>
            </div>
            <p class="text-muted-lg mb-4">
                Choisissez un thème qui correspond à vos envies et découvrez une sélection exclusive des meilleures destinations.
                Que vous recherchiez la romance, l’aventure urbaine, la détente au bord de la mer ou l’évasion en pleine nature,
                nous avons tout ce qu’il vous faut pour un séjour inoubliable.
            </p>
        </div>
    </section>



    <!-- Section Destinations dynamiques -->
    <div class="container mt-4">
        <h2>Nos Destinations propose</h2>
        <div class="row">
            @forelse($destinations as $destination)
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm h-100">

                    @if(!empty($destination->image))
                    <img src="{{ asset($destination->image) }}"
                        class="card-img-top"
                        alt="{{ $destination->ville }}"
                        style="object-fit:cover; height:200px;">
                    @else
                    <img src="{{ asset('images/default.jpg') }}"
                        class="card-img-top"
                        alt="Image par défaut"
                        style="object-fit:cover; height:200px;">
                    @endif

                    <div class="card-body">
                        <h5 class="card-title">{{ $destination->ville }}, {{ $destination->pays }}</h5>
                        <p>{{ \Illuminate\Support\Str::limit($destination->description, 80) }}</p>
                        <p><strong>{{ number_format($destination->prix, 2, ',', ' ') }} €</strong></p>
                        <a href="{{ route('destination.show', ['slug' => Str::slug($destination->ville)]) }}"
                            class="btn btn-outline-primary">Voir</a>
                    </div>

                </div>
            </div>
            @empty
            <p>Aucune destination disponible pour le moment.</p>
            @endforelse
        </div>
    </div>



    </section>


    <!-- Flèches de navigation -->

    <section class="container py-5">
        <h2 class="mb-4">Hébergements récents</h2>
        <div class="row">
            @forelse($hebergements as $logement)
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset($logement->image) }}"
                        class="card-img-top"
                        alt="Image de {{ $logement->nom }}"
                        style="object-fit: cover; height: 200px;">

                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $logement->nom }}</h5>
                        <p class="card-text">{{ Str::limit($logement->description, 80) }}</p>
                        <p class="mt-auto"><strong>{{ number_format($logement->prix,2,',',' ') }} €</strong></p>

                        {{-- Cette route fonctionnera maintenant avec l'ID --}}
                        <a href="{{ route('logement.show', $logement->id) }}"
                            class="btn btn-outline-primary mt-2">Voir le logement</a>
                    </div>
                </div>
            </div>
            @empty
            <p>Aucun hébergement disponible pour le moment.</p>
            @endforelse
        </div>
    </section>



    </section>

