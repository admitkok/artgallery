<!DOCTYPE html>
<html lang="en"  class="h-full bg-white font-serif">

<head>
    <meta charset="utf-8">
{{--    <link rel="icon" href="public/favicon.ico" type="image/x-icon">--}}
{{--    <link rel="shortcut icon" href="public/favicon.ico" type="image/x-icon">--}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ArtGallery</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="script.js"></script>
</head>

<style>
    .color-change-container {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background-color 0.5s ease; /* Transition for smoother color change */
    }

    .color-change-container.active {
        background-color: #333333; /* Change to your desired background color */
        color: #fff; /* Change to your desired text color */
    }

    @keyframes fillAnimation {
           0% {
               background-size: 0% 100%;
           }
           100% {
               background-size: 100% 100%;
           }
       }

    .fill-button {
        background: linear-gradient(to right, #7E57C2, #7B1FA2); /* Gradient colors */
        color: #fff; /* Text color */
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        background-size: 0% 100%;
        background-position: 0% 0%;
        transition: background-size 0.5s ease; /* Transition for smoother effect */
    }

    .fill-button1 {
        background: linear-gradient(to right, #FF9800, #F57C00); /* Gradient colors */
        color: #fff; /* Text color */
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        background-size: 0% 100%;
        background-position: 0% 0%;
        transition: background-size 0.5s ease; /* Transition for smoother effect */
    }

    .fill-button:hover {
        animation: fillAnimation 1s forwards; /* Play the animation on hover */
    }
    .fill-button1:hover {
        animation: fillAnimation 1s forwards; /* Play the animation on hover */
    }
</style>

<body class="h-full">
<div class="min-h-full">

    <x-site-layout-navbar/>
    <div class="py-10"></div>
    <header>
        <div class="mx-auto max-w-7xl px-24 py-6 sm:px-6 lg:px-8">
            <span class="justify-center text-3xl font-bold tracking-tight text-gray-900">{{$title}}</span>
        </div>
    </header>

    <main>
        <div class="z-0 mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            {{$slot}}
        </div>
    </main>

{{--    <x-featured-news/>--}}

</div>

</body>

</html>
