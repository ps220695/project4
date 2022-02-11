<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>stonkspizza's home</title>
</head>
<style>


    .grid1 {
        display: grid;
        grid-template-columns: 32% 10% 10% 10% 30% 10%;
        grid-template-rows: 10%  5% 40%;
    }

    .menu {
        grid-row: 2;
        grid-column: 2;

    }

    .over_ons {
        grid-column: 2;
    }

    .pizzas {
        grid-column: 3;
    }

    .image {
        grid-column: 2;
        grid-row: 1;
    }

    .grid3 {
        display: grid;
        grid-template-rows: 100% 10px 10% 10% 10% 10%;
        grid-template-columns: 100% 10px;
        margin-right: 50px;
        width: 200px;
        grid-column: 3;

    }

    .flex1 {
        grid-row: 5;
        grid-column: 1;


    }

    .pizza_img {
        grid-column: 1;
        grid-row: 1;
    }

    .in_winkel_mandje {
        grid-row: 7;
        grid-column: 1;

    }

    .flex2 {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        width: 65%;

        justify-content: center;
        align-content: center;
        margin: auto;
        margin-top: 50px;
        row-gap: 75px;

    }

    .name_pizza {
        grid-row: 3;
    }

    .prijs {
        grid-row: 6;
        margin-top: -10px;
    }
    .winkelwagen
    {
        width: 3%;
        height: 3%;
    }


</style>
    <body>
        <FORM METHOD=”LINK” ACTION=login>

            <div class="navbar">
                <nav class="bg-black border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800">
                    <div class="container flex flex-wrap justify-between items-center mx-auto">
                        <a href="#" class="flex">
                            <span class="imgage self-center text-lg font-semibold whitespace-nowrap text-white"><img
                                    style="max-width: 15%" src="/img/Stonkspizza.PNG" alt="logo"></span>
                        </a>
                        <div class="flex md:order-2">
                            <button type="submit"
                                    value="login_pagina"
                                    type="button"
                                    class="text-white bg-green-800 hover:bg-green-700 focus:ring-4 focus:ring-offset-green-900 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Login
                            </button>
                            <button data-collapse-toggle="mobile-menu-4" type="button"
                                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                    aria-controls="mobile-menu-4" aria-expanded="false">
                                <span class="sr-only">Open main menu</span>
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-4">
                            <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                                <li>
                                    <a href="#" style="margin-top: 10px"
                                       class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-green-800 md:hover:text-red-600 md:p-0 dark:text-white"
                                       aria-current="page">Pizza's</a>
                                </li>
                                <li>
                                    <a href="/about_us" style="margin-top: 10px"
                                       class=" block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-white md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Over
                                        ons</a>
                                </li>
                                <li>
                                    <a href="/werken_bij_ons"
                                       class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">werken
                                        bij <br> StonksPizza's</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </FORM>
        <form action="{{route('order.store')}}" method="POST">
            @csrf
            <table>
                <tr>
                    <td>
                        <label name="name">Naam:</label>
                    </td>
                    <td>
                        <input type="text" name="name" ></input>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label name="emailadres">Emailadres:</label>
                    </td>
                    <td>
                        <input type="text" name="email" ></input>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label name="phone">Telefoonnummer:</label>
                    </td>
                    <td>
                        <input id="phonenumber" type="number" name="phone"></input>
                    </td>

                </tr>

                <tr>
                    <td>
                        <label name="address">Adres +(huisnummer):</label>
                    </td>
                    <td>
                        <input type="text" name="address" ></input>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label name="zipcode">Postcode:</label>
                    </td>
                    <td>
                        <input type="text" name="zipcode" ></input>
                    </td>
                </tr>
                <input type="hidden" name="status_id" value="1">

            </table>


            <input type="submit"
                   value="Naar bestellen"
                   class="input_verder bg-green-500 hover:bg-yellow-500">
        </form>

    </body>
</html>
