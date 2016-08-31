<?php
/**
 * Created by PhpStorm.
 * User: charlescombs
 * Date: 8/31/16
 * Time: 2:13 PM
 */
?>

        <!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700|Merriweather:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{ elixir('css/reset.css') }}"> <!-- CSS reset -->
    <link rel="stylesheet" href="{{ elixir('css/style.css') }}"> <!-- Resource style -->
    <script src="{{ elixir('js/modernizr.js') }}"></script> <!-- Modernizr -->

    <title>Full-Screen Pushing Navigation | CodyHouse</title>
</head>
<body>
<main>
    <h1>Full-Screen Pushing Navigation</h1>

    <p>A full page menu, that replaces the current content by pushing it off the screen.</p>
</main>

<a href="#cd-nav" class="cd-nav-trigger">Menu
    <span class="cd-nav-icon"></span>

    <svg x="0px" y="0px" width="54px" height="54px" viewBox="0 0 54 54">
        <circle fill="transparent" stroke="#656e79" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
    </svg>
</a>

<div id="cd-nav" class="cd-nav">
    <div class="cd-navigation-wrapper">
        <div class="cd-half-block">
            <h2>Navigation</h2>

            <nav>
                <ul class="cd-primary-nav">
                    <li><a href="#0" class="selected">The team</a></li>
                    <li><a href="#0">Our services</a></li>
                    <li><a href="#0">Our projects</a></li>
                    <li><a href="#0">Start a project</a></li>
                    <li><a href="#0">Contact us</a></li>
                </ul>
            </nav>
        </div><!-- .cd-half-block -->

        <div class="cd-half-block">
            <address>
                <ul class="cd-contact-info">
                    <li><a href="mailto:info@myemail.co">info@myemail.co</a></li>
                    <li>0244-12345678</li>
                    <li>
                        <span>MyStreetName 24</span>
                        <span>W1234X</span>
                        <span>London, UK</span>
                    </li>
                </ul>
            </address>
        </div> <!-- .cd-half-block -->
    </div> <!-- .cd-navigation-wrapper -->
</div> <!-- .cd-nav -->
<script src="{{ elixir('js/jquery-2.1.1.js') }}"></script>
<script src="{{ elixir('js/main.js') }}"></script> <!-- Resource jQuery -->
</body>
</html>
