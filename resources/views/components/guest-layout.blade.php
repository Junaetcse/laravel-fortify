<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <style>
            body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: black;
            }

            * {
            box-sizing: border-box;
            }

            /* Add padding to containers */
            .container {
            padding: 16px;
            background-color: white;
            }

            /* Full-width input fields */
            input[type=text], input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
            }

            input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
            }

            /* Overwrite default styles of hr */
            hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
            }

            /* Set a style for the submit button */
            .registerbtn {
            background-color: #04AA6D;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
            }

            .registerbtn:hover {
            opacity: 1;
            }

            /* Add a blue text color to links */
            a {
            color: dodgerblue;
            }

            /* Set a grey background color and center the text of the "sign in" section */
            .signin {
            background-color: #f1f1f1;
            text-align: center;
            }
            </style>
    </head>
    <body>
        <h2>guest componennt</h2>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
