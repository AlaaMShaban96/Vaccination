<!DOCTYPE html>
<html lang="en">
<head>
{{--
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href='https://fonts.googleapis.com/css?family=Tajawal' rel='stylesheet'>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script src="https://kit.fontawesome.com/5366d31a4a.js" crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   --}}
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/5366d31a4a.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link href='https://fonts.googleapis.com/css?family=Tajawal' rel='stylesheet'>
@yield('head')
    <title>تطعيماتي</title>
    <style>
   /*******************************************************************************
 *              bootstrap-rtl (version 4.0.0 beta2)
 *      Author: Morteza Ghalambor
 *  Created on: september 7,2016
 *     Project: bootstrap-rtl
 *   Copyright: GPL
 *******************************************************************************/

body {
    direction: rtl;
    text-align:right;
}

dd {
    margin-right: 0;
}

figure {
    margin: 0 0 1rem;
}

caption {
    text-align: right;
}

th {
    text-align: right;
}

.list-unstyled {
    padding-right: 0;
}

.list-inline {
    padding-right: 0;
}

.list-inline-item:not(:last-child) {
    margin-right: 0;
    margin-left: 5px;
}

.blockquote {
    border-left: none;
    border-right: 0.25rem solid #eceeef;
}

.blockquote-reverse {
    padding-left: 1rem;
    padding-right: 0;
    text-align: left;
    border-left: 0.25rem solid #eceeef;
    border-right: 0;
}

dl.row > dd + dt {
    clear: right;
}


.pull-0 {
    left: auto;
}

.pull-1 {
    left: 8.33333%;
}

.pull-2 {
    left: 16.66667%;
}

.pull-3 {
    left: 25%;
}

.pull-4 {
    left: 33.33333%;
}

.pull-5 {
    left: 41.66667%;
}

.pull-6 {
    left: 50%;
}

.pull-7 {
    left: 58.33333%;
}

.pull-8 {
    left: 66.66667%;
}

.pull-9 {
    left: 75%;
}

.pull-10 {
    left: 83.33333%;
}

.pull-11 {
    left: 91.66667%;
}

.pull-12 {
    left: 100%;
}

.push-0 {
    right: auto;
}

.push-1 {
    right: 8.33333%;
}

.push-2 {
    right: 16.66667%;
}

.push-3 {
    right: 25%;
}

.push-4 {
    right: 33.33333%;
}

.push-5 {
    right: 41.66667%;
}

.push-6 {
    right: 50%;
}

.push-7 {
    right: 58.33333%;
}

.push-8 {
    right: 66.66667%;
}

.push-9 {
    right: 75%;
}

.push-10 {
    right: 83.33333%;
}

.push-11 {
    right: 91.66667%;
}

.push-12 {
    right: 100%;
}

.offset-1 {
    margin-right: 8.33333%;
}

.offset-2 {
    margin-right: 16.66667%;
}

.offset-3 {
    margin-right: 25%;
}

.offset-4 {
    margin-right: 33.33333%;
}

.offset-5 {
    margin-right: 41.66667%;
}

.offset-6 {
    margin-right: 50%;
}

.offset-7 {
    margin-right: 58.33333%;
}

.offset-8 {
    margin-right: 66.66667%;
}

.offset-9 {
    margin-right: 75%;
}

.offset-10 {
    margin-right: 83.33333%;
}

.offset-11 {
    margin-right: 91.66667%;
}

@media (min-width: 544px) {

    .pull-sm-0 {
        left: auto;
    }

    .pull-sm-1 {
        left: 8.33333%;
    }

    .pull-sm-2 {
        left: 16.66667%;
    }

    .pull-sm-3 {
        left: 25%;
    }

    .pull-sm-4 {
        left: 33.33333%;
    }

    .pull-sm-5 {
        left: 41.66667%;
    }

    .pull-sm-6 {
        left: 50%;
    }

    .pull-sm-7 {
        left: 58.33333%;
    }

    .pull-sm-8 {
        left: 66.66667%;
    }

    .pull-sm-9 {
        left: 75%;
    }

    .pull-sm-10 {
        left: 83.33333%;
    }

    .pull-sm-11 {
        left: 91.66667%;
    }

    .pull-sm-12 {
        left: 100%;
    }

    .push-sm-0 {
        right: auto;
    }

    .push-sm-1 {
        right: 8.33333%;
    }

    .push-sm-2 {
        right: 16.66667%;
    }

    .push-sm-3 {
        right: 25%;
    }

    .push-sm-4 {
        right: 33.33333%;
    }

    .push-sm-5 {
        right: 41.66667%;
    }

    .push-sm-6 {
        right: 50%;
    }

    .push-sm-7 {
        right: 58.33333%;
    }

    .push-sm-8 {
        right: 66.66667%;
    }

    .push-sm-9 {
        right: 75%;
    }

    .push-sm-10 {
        right: 83.33333%;
    }

    .push-sm-11 {
        right: 91.66667%;
    }

    .push-sm-12 {
        right: 100%;
    }

    .offset-sm-0 {
        margin-right: 0%;
    }

    .offset-sm-1 {
        margin-right: 8.33333%;
    }

    .offset-sm-2 {
        margin-right: 16.66667%;
    }

    .offset-sm-3 {
        margin-right: 25%;
    }

    .offset-sm-4 {
        margin-right: 33.33333%;
    }

    .offset-sm-5 {
        margin-right: 41.66667%;
    }

    .offset-sm-6 {
        margin-right: 50%;
    }

    .offset-sm-7 {
        margin-right: 58.33333%;
    }

    .offset-sm-8 {
        margin-right: 66.66667%;
    }

    .offset-sm-9 {
        margin-right: 75%;
    }

    .offset-sm-10 {
        margin-right: 83.33333%;
    }

    .offset-sm-11 {
        margin-right: 91.66667%;
    }
}

@media (min-width: 768px) {

    .pull-md-0 {
        left: auto;
    }

    .pull-md-1 {
        left: 8.33333%;
    }

    .pull-md-2 {
        left: 16.66667%;
    }

    .pull-md-3 {
        left: 25%;
    }

    .pull-md-4 {
        left: 33.33333%;
    }

    .pull-md-5 {
        left: 41.66667%;
    }

    .pull-md-6 {
        left: 50%;
    }

    .pull-md-7 {
        left: 58.33333%;
    }

    .pull-md-8 {
        left: 66.66667%;
    }

    .pull-md-9 {
        left: 75%;
    }

    .pull-md-10 {
        left: 83.33333%;
    }

    .pull-md-11 {
        left: 91.66667%;
    }

    .pull-md-12 {
        left: 100%;
    }

    .push-md-0 {
        right: auto;
    }

    .push-md-1 {
        right: 8.33333%;
    }

    .push-md-2 {
        right: 16.66667%;
    }

    .push-md-3 {
        right: 25%;
    }

    .push-md-4 {
        right: 33.33333%;
    }

    .push-md-5 {
        right: 41.66667%;
    }

    .push-md-6 {
        right: 50%;
    }

    .push-md-7 {
        right: 58.33333%;
    }

    .push-md-8 {
        right: 66.66667%;
    }

    .push-md-9 {
        right: 75%;
    }

    .push-md-10 {
        right: 83.33333%;
    }

    .push-md-11 {
        right: 91.66667%;
    }

    .push-md-12 {
        right: 100%;
    }

    .offset-md-0 {
        margin-right: 0%;
    }

    .offset-md-1 {
        margin-right: 8.33333%;
    }

    .offset-md-2 {
        margin-right: 16.66667%;
    }

    .offset-md-3 {
        margin-right: 25%;
    }

    .offset-md-4 {
        margin-right: 33.33333%;
    }

    .offset-md-5 {
        margin-right: 41.66667%;
    }

    .offset-md-6 {
        margin-right: 50%;
    }

    .offset-md-7 {
        margin-right: 58.33333%;
    }

    .offset-md-8 {
        margin-right: 66.66667%;
    }

    .offset-md-9 {
        margin-right: 75%;
    }

    .offset-md-10 {
        margin-right: 83.33333%;
    }

    .offset-md-11 {
        margin-right: 91.66667%;
    }
}

@media (min-width: 992px) {

    .pull-lg-0 {
        left: auto;
    }

    .pull-lg-1 {
        left: 8.33333%;
    }

    .pull-lg-2 {
        left: 16.66667%;
    }

    .pull-lg-3 {
        left: 25%;
    }

    .pull-lg-4 {
        left: 33.33333%;
    }

    .pull-lg-5 {
        left: 41.66667%;
    }

    .pull-lg-6 {
        left: 50%;
    }

    .pull-lg-7 {
        left: 58.33333%;
    }

    .pull-lg-8 {
        left: 66.66667%;
    }

    .pull-lg-9 {
        left: 75%;
    }

    .pull-lg-10 {
        left: 83.33333%;
    }

    .pull-lg-11 {
        left: 91.66667%;
    }

    .pull-lg-12 {
        left: 100%;
    }

    .push-lg-0 {
        right: auto;
    }

    .push-lg-1 {
        right: 8.33333%;
    }

    .push-lg-2 {
        right: 16.66667%;
    }

    .push-lg-3 {
        right: 25%;
    }

    .push-lg-4 {
        right: 33.33333%;
    }

    .push-lg-5 {
        right: 41.66667%;
    }

    .push-lg-6 {
        right: 50%;
    }

    .push-lg-7 {
        right: 58.33333%;
    }

    .push-lg-8 {
        right: 66.66667%;
    }

    .push-lg-9 {
        right: 75%;
    }

    .push-lg-10 {
        right: 83.33333%;
    }

    .push-lg-11 {
        right: 91.66667%;
    }

    .push-lg-12 {
        right: 100%;
    }

    .offset-lg-0 {
        margin-right: 0%;
    }

    .offset-lg-1 {
        margin-right: 8.33333%;
    }

    .offset-lg-2 {
        margin-right: 16.66667%;
    }

    .offset-lg-3 {
        margin-right: 25%;
    }

    .offset-lg-4 {
        margin-right: 33.33333%;
    }

    .offset-lg-5 {
        margin-right: 41.66667%;
    }

    .offset-lg-6 {
        margin-right: 50%;
    }

    .offset-lg-7 {
        margin-right: 58.33333%;
    }

    .offset-lg-8 {
        margin-right: 66.66667%;
    }

    .offset-lg-9 {
        margin-right: 75%;
    }

    .offset-lg-10 {
        margin-right: 83.33333%;
    }

    .offset-lg-11 {
        margin-right: 91.66667%;
    }
}

@media (min-width: 1200px) {

    .pull-xl-0 {
        left: auto;
    }

    .pull-xl-1 {
        left: 8.33333%;
    }

    .pull-xl-2 {
        left: 16.66667%;
    }

    .pull-xl-3 {
        left: 25%;
    }

    .pull-xl-4 {
        left: 33.33333%;
    }

    .pull-xl-5 {
        left: 41.66667%;
    }

    .pull-xl-6 {
        left: 50%;
    }

    .pull-xl-7 {
        left: 58.33333%;
    }

    .pull-xl-8 {
        left: 66.66667%;
    }

    .pull-xl-9 {
        left: 75%;
    }

    .pull-xl-10 {
        left: 83.33333%;
    }

    .pull-xl-11 {
        left: 91.66667%;
    }

    .pull-xl-12 {
        left: 100%;
    }

    .push-xl-0 {
        right: auto;
    }

    .push-xl-1 {
        right: 8.33333%;
    }

    .push-xl-2 {
        right: 16.66667%;
    }

    .push-xl-3 {
        right: 25%;
    }

    .push-xl-4 {
        right: 33.33333%;
    }

    .push-xl-5 {
        right: 41.66667%;
    }

    .push-xl-6 {
        right: 50%;
    }

    .push-xl-7 {
        right: 58.33333%;
    }

    .push-xl-8 {
        right: 66.66667%;
    }

    .push-xl-9 {
        right: 75%;
    }

    .push-xl-10 {
        right: 83.33333%;
    }

    .push-xl-11 {
        right: 91.66667%;
    }

    .push-xl-12 {
        right: 100%;
    }

    .offset-xl-0 {
        margin-right: 0%;
    }

    .offset-xl-1 {
        margin-right: 8.33333%;
    }

    .offset-xl-2 {
        margin-right: 16.66667%;
    }

    .offset-xl-3 {
        margin-right: 25%;
    }

    .offset-xl-4 {
        margin-right: 33.33333%;
    }

    .offset-xl-5 {
        margin-right: 41.66667%;
    }

    .offset-xl-6 {
        margin-right: 50%;
    }

    .offset-xl-7 {
        margin-right: 58.33333%;
    }

    .offset-xl-8 {
        margin-right: 66.66667%;
    }

    .offset-xl-9 {
        margin-right: 75%;
    }

    .offset-xl-10 {
        margin-right: 83.33333%;
    }

    .offset-xl-11 {
        margin-right: 91.66667%;
    }
}

.form-check-label {
    padding-right: 1.25rem;
}

.form-check-input {
    margin-right: -1.25rem;
}

.form-check-inline {
    padding-right: 1.25rem;
}

    .form-check-inline + .form-check-inline {
        margin-right: .75rem;
    }

.form-control-feedback {
    margin-top: 0.25rem;
}

.form-control-success,
.form-control-warning,
.form-control-danger {
    padding-left: 2.25rem;
    background-position: center right 0.625rem;
}

.form-inline .form-check-label {
    padding-right: 0;
}

.dropdown-toggle::after {
    margin-right: 0.3em;
}

.dropdown-menu {
    right: 0;
    float: right;
    margin: 2px 0 0;
    text-align: right;
}

.dropdown-divider {
    margin: 0.5rem 0;
}



.btn-group .btn + .btn,
.btn-group .btn + .btn-group,
.btn-group .btn-group + .btn,
.btn-group .btn-group + .btn-group {
    margin-right: -1px;
}

.btn-toolbar {
    margin-right: -0.5rem;
}



    .btn-toolbar > .btn,
    .btn-toolbar > .btn-group,
    .btn-toolbar > .input-group {
        margin-right: 0.5rem;
    }

.btn-group > .btn:first-child {
    margin-right: 0;
}

.btn-group > .btn-group {
    float: right;
}

.btn + .dropdown-toggle-split::after {
    margin-right: 0;
}


.btn-group-vertical > .btn + .btn,
.btn-group-vertical > .btn + .btn-group,
.btn-group-vertical > .btn-group + .btn,
.btn-group-vertical > .btn-group + .btn-group {
    margin-right: 0;
}

.input-group .form-control {
    float: left;
}

.input-group-addon:not(:last-child) {
    border-right: 1px solid rgba(0,0,0,.15);
    border-left: 0;
}

.form-control + .input-group-addon:not(:first-child) {
    border-left-width: medium;
    border-right: 0;
}



.input-group-btn > .btn + .btn {
    margin-right: -1px;
}

.input-group-btn:not(:last-child) > .btn,
.input-group-btn:not(:last-child) > .btn-group {
    margin-left: -1px;
}

.input-group-btn:not(:first-child) > .btn,
.input-group-btn:not(:first-child) > .btn-group {
    margin-right: -1px;
}

.custom-control {
    padding-right: 1.5rem;
}

    .custom-control + .custom-control {
        margin-right: 1rem;
    }

.custom-control-indicator {
    right: 0;
}

.custom-controls-stacked .custom-control + .custom-control {
    margin-right: 0;
}

.custom-select {
    padding-left: 0.75rem \9;
}

.nav {
    padding-right: 0;
}



    .nav-tabs .nav-item + .nav-item {
        margin-right: 0.2rem;
    }



    .nav-pills .nav-item + .nav-item {
        margin-right: 0.2rem;
    }

.nav-stacked .nav-item + .nav-item {
    margin-right: 0;
}







.navbar-nav .nav-link + .nav-link {
    margin-right: 1rem;
}

.navbar-nav .nav-item + .nav-item {
    margin-right: 1rem;
}

@media (max-width: 543px) {
    .navbar-toggleable .navbar-nav .nav-item {
        margin-right: 0;
    }
}

@media (max-width: 767px) {
    .navbar-toggleable-sm .navbar-nav .nav-item {
        margin-right: 0;
    }
}

@media (max-width: 991px) {
    .navbar-toggleable-md .navbar-nav .nav-item {
        margin-right: 0;
    }
}

.card-link + .card-link {
    margin-right: 1.25rem;
}

.card-blockquote {
    border-right: 0;
}

.breadcrumb-item {
    float: right;
}

.pagination {
    padding-right: 0;
}

.page-item:first-child .page-link {
    margin-right: 0;
}

.page-link {

    margin-right: -1px;
}

.alert-dismissible {
    padding-left: 2rem;
}

    .alert-dismissible .close {
        left: -1rem;
    }

.media-list {
    padding-right: 0;
}

.list-group {
    padding-right: 0;
}

.embed-responsive .embed-responsive-item,
.embed-responsive iframe,
.embed-responsive embed,
.embed-responsive object,
.embed-responsive video {
    right: 0;
}

.close {
    float: left;
}

.tooltip {
    text-align: right;
}

    .tooltip.tooltip-top .tooltip-arrow,
    .tooltip.bs-tether-element-attached-bottom .tooltip-arrow {
        right: 50%;
        margin-right: -5px;
    }

    .tooltip.tooltip-bottom .tooltip-arrow,
    .tooltip.bs-tether-element-attached-top .tooltip-arrow {
        right: 50%;
        margin-right: -5px;
    }

.popover {
    right: 0;
    text-align: right;
}

    .popover.popover-top .popover-arrow,
    .popover.bs-tether-element-attached-bottom .popover-arrow {
        right: 50%;
        margin-right: -11px;
    }

        .popover.popover-top .popover-arrow::after,
        .popover.bs-tether-element-attached-bottom .popover-arrow::after {
            margin-right: -10px;
        }

    .popover.popover-bottom .popover-arrow,
    .popover.bs-tether-element-attached-top .popover-arrow {
        right: 50%;
        margin-right: -11px;
    }

        .popover.popover-bottom .popover-arrow::after,
        .popover.bs-tether-element-attached-top .popover-arrow::after {
            margin-right: -10px;
        }

@media all and (transform-3d), (-webkit-transform-3d) {
    .carousel-inner > .carousel-item.next,
    .carousel-inner > .carousel-item.active.right {
        right: 0;
    }

    .carousel-inner > .carousel-item.prev,
    .carousel-inner > .carousel-item.active.left {
        right: 0;
    }

        .carousel-inner > .carousel-item.next.left,
        .carousel-inner > .carousel-item.prev.right,
        .carousel-inner > .carousel-item.active {
            right: 0;
        }
}

.carousel-inner > .active {
    right: 0;
}

.carousel-inner > .next {
    right: 100%;
}

.carousel-inner > .prev {
    right: -100%;
}

    .carousel-inner > .next.left,
    .carousel-inner > .prev.right {
        right: 0;
    }

.carousel-inner > .active.left {
    right: -100%;
}

.carousel-inner > .active.right {
    right: 100%;
}

/*.carousel-control {
  right: 0;
}

.carousel-control.right {
  left: 0;
  right: auto;
}*/

.carousel-control .icon-prev {
    right: 50%;
    margin-right: -10px;
}

.carousel-control .icon-next {
    left: 50%;
    margin-left: -10px;
}

.carousel-indicators {
    right: 50%;
    padding-right: 0;
    margin-right: -30%;
}

.carousel-caption {
    left: 15%;
    right: 15%;
    z-index: 10;
}

@media (min-width: 544px) {
    .carousel-control .icon-prev {
        margin-right: -15px;
    }

    .carousel-control .icon-next {
        margin-left: -15px;
    }

    .carousel-caption {
        left: 20%;
        right: 20%;
    }
}



/*!
 * Start Bootstrap - Simple Sidebar (https://startbootstrap.com/template-overviews/simple-sidebar)
 * Copyright 2013-2017 Start Bootstrap
 * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap-simple-sidebar/blob/master/LICENSE)
 */

body {
  overflow-x: hidden;
}

#wrapper {
  padding-left: 0;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

#wrapper.toggled {
  padding-right: 250px;
}

#sidebar-wrapper {
  z-index: 1000;
  position: fixed;
  right: 250px;
  width: 0;
  height: 100%;
  margin-right: -250px;
  overflow-y: auto;
  background: #000;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

#wrapper.toggled #sidebar-wrapper {
  width: 250px;
}

#page-content-wrapper {
  width: 100%;
  position: absolute;
  padding: 15px;
}

#wrapper.toggled #page-content-wrapper {
  position: absolute;
  margin-right: 0px;
}


/* Sidebar Styles */

.sidebar-nav {
  position: absolute;
  top: 0;
  width: 250px;
  margin: 0;
  padding: 0;
  list-style: none;
}

.sidebar-nav li {
  text-indent: 20px;
  line-height: 40px;
}

.sidebar-nav li a {
  display: block;
  text-decoration: none;
  color: #999999;
}

.sidebar-nav li a:hover {
  text-decoration: none;
  color: #fff;
  background: rgba(255, 255, 255, 0.2);
}

.sidebar-nav li a:active, .sidebar-nav li a:focus {
  text-decoration: none;
}

.sidebar-nav>.sidebar-brand {
  height: 65px;
  font-size: 18px;
  line-height: 60px;
}

.sidebar-nav>.sidebar-brand a {
  color: #999999;
}

.sidebar-nav>.sidebar-brand a:hover {
  color: #fff;
  background: none;
}

@media(min-width:768px) {
  #wrapper {
    padding-left: 0;
  }
  #wrapper.toggled {
    padding-right: 250px;
  }
  #sidebar-wrapper {
    width: 0;
  }
  #wrapper.toggled #sidebar-wrapper {
    width: 250px;
  }
  #page-content-wrapper {
    padding: 20px;
    position: relative;
  }
  #wrapper.toggled #page-content-wrapper {
    position: relative;
    margin-right: 0;
  }
}

body {
font-family:'Tajawal'; font-size: 20px; }

/* test nav */


.dbox {
    position: relative;
    background: rgb(255, 86, 65);
    background: -moz-linear-gradient(top, rgba(255, 86, 65, 1) 0%, rgba(253, 50, 97, 1) 100%);
    background: -webkit-linear-gradient(top, rgba(255, 86, 65, 1) 0%, rgba(253, 50, 97, 1) 100%);
    background: linear-gradient(to bottom, rgba(255, 86, 65, 1) 0%, rgba(253, 50, 97, 1) 100%);
    filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#ff5641', endColorstr='#fd3261', GradientType=0);
    border-radius: 4px;
    text-align: center;
    margin: 60px 0 50px;
}
.dbox__icon {
    position: absolute;
    transform: translateY(-50%) translateX(-50%);
    left: 50%;
}
.dbox__icon:before {
    width: 75px;
    height: 75px;
    position: absolute;
    background: #fda299;
    background: rgba(253, 162, 153, 0.34);
    content: '';
    border-radius: 50%;
    left: -17px;
    top: -17px;
    z-index: -2;
}
.dbox__icon:after {
    width: 60px;
    height: 60px;
    position: absolute;
    background: #f79489;
    background: rgba(247, 148, 137, 0.91);
    content: '';
    border-radius: 50%;
    left: -10px;
    top: -10px;
    z-index: -1;
}
.dbox__icon > i {
    background: #ff5444;
    border-radius: 50%;
    line-height: 40px;
    color: #FFF;
    width: 40px;
    height: 40px;
	font-size:22px;
}
.dbox__body {
    padding: 50px 20px;
}
.dbox__count {
    display: block;
    font-size: 30px;
    color: #FFF;
    font-weight: 300;
}
.dbox__title {
    font-size: 13px;
    color: #FFF;
    color: rgba(255, 255, 255, 0.81);
}
.dbox__action {
    transform: translateY(-50%) translateX(-50%);
    position: absolute;
    left: 50%;
}
.dbox__action__btn {
    border: none;
    background: #FFF;
    border-radius: 19px;
    padding: 7px 16px;
    text-transform: uppercase;
    font-weight: 500;
    font-size: 11px;
    letter-spacing: .5px;
    color: #003e85;
    box-shadow: 0 3px 5px #d4d4d4;
}


.dbox--color-2 {
    background: rgb(252, 190, 27);
    background: -moz-linear-gradient(top, rgba(252, 190, 27, 1) 1%, rgba(248, 86, 72, 1) 99%);
    background: -webkit-linear-gradient(top, rgba(252, 190, 27, 1) 1%, rgba(248, 86, 72, 1) 99%);
    background: linear-gradient(to bottom, rgba(252, 190, 27, 1) 1%, rgba(248, 86, 72, 1) 99%);
    filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#fcbe1b', endColorstr='#f85648', GradientType=0);
}
.dbox--color-2 .dbox__icon:after {
    background: #fee036;
    background: rgba(254, 224, 54, 0.81);
}
.dbox--color-2 .dbox__icon:before {
    background: #fee036;
    background: rgba(254, 224, 54, 0.64);
}
.dbox--color-2 .dbox__icon > i {
    background: #fb9f28;
}

.dbox--color-3 {
    background: rgb(183,71,247);
    background: -moz-linear-gradient(top, rgba(183,71,247,1) 0%, rgba(108,83,220,1) 100%);
    background: -webkit-linear-gradient(top, rgba(183,71,247,1) 0%,rgba(108,83,220,1) 100%);
    background: linear-gradient(to bottom, rgba(183,71,247,1) 0%,rgba(108,83,220,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b747f7', endColorstr='#6c53dc',GradientType=0 );
}
.dbox--color-3 .dbox__icon:after {
    background: #b446f5;
    background: rgba(180, 70, 245, 0.76);
}
.dbox--color-3 .dbox__icon:before {
    background: #e284ff;
    background: rgba(226, 132, 255, 0.66);
}
.dbox--color-3 .dbox__icon > i {
    background: #8150e4;
}



    </style>
</head>
<body data-spy="scroll">
    <nav class="navbar navbar-expand navbar-dark bg-primary"> <a href="#menu-toggle" id="menu-toggle" class="navbar-brand"><span class="navbar-toggler-icon"></span></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarsExample02">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"> <a class="nav-link" href="#">Admin<span class="sr-only">(current)</span></a> </li>
            </ul>
            <form class="form-inline my-2 my-md-0"> </form>
        </div>
    </nav>
    <div id="wrapper" class="toggled">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"> <a href={{ url('/admin/index') }}><i class="fas fa-home"></i>   الرئيسية</a> </li>
                <li> <a href={{ url('admin/users') }}><i class="far fa-user-circle"></i>   الحسابات</a></li>
                <li> <a href={{ url('admin/vaccinations') }}><i class="fas fa-syringe"></i>   التطعيمات</a> </li>
                <li> <a href={{ url('admin/cities') }}><i class="fas fa-map-marker-alt"></i>   المدن</a> </li>
                <li> <a href={{ url('admin/requests') }}>
                    <i class="far fa-bell"></i>   طلبات الجرعات</a> </li>
                {{-- <li> <a href={{ url('/reports') }}><i class="fas fa-chart-pie"></i>   الإحصائيات</a> </li> --}}
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                    تسجيل الخروج
                   </a> </li>
                   <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                       {{ csrf_field() }}
                   </form>

            </ul>
        </div> <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div style=" overflow-y: scroll; height:625px;">

        <div id="page-content-wrapper">

            <div class="container-fluid">

               @yield('content')

                </div>
            </div>
        </div> <!-- /#page-content-wrapper -->
    </div> <!-- /#wrapper -->
    <!-- Bootstrap core JavaScript -->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script> <!-- Menu Toggle Script -->

    <script>
      $(function(){
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });

        $(window).resize(function(e) {
          if($(window).width()<=768){
            $("#wrapper").removeClass("toggled");
          }else{
            $("#wrapper").addClass("toggled");
          }
        });
      });

    </script>

@yield('script')

</body>
</html>
