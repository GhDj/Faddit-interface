<?php
/**
 * Created by PhpStorm.
 * User: ghdj9
 * Date: 22/05/2017
 * Time: 15:36
 */
?>

@extends('faddit::layout')

@section('title','Ajouter')

@section('content')
    <style>

        input[type="radio"] {
            display:none;
        }
        input[type="radio"] + label {
            font-family:Arial, sans-serif;
            font-size:14px;
            color: #000000;
            padding: 4px 3px;
            border-radius: 50%;
            width: 50px;
            height: 50px;
        }
        input[type="radio"] + label span {
            display:inline-block;
            width:40px;
            height:40px;
            margin:-1px 4px 0 0;
            vertical-align:middle;
            cursor:pointer;
            -moz-border-radius:  50%;
            border-radius:  50%;
        }

        input[type="radio"] + label span {
          /*  background-color:#ffff00;*/
        }

        input[type="radio"]:checked + label span{
           /* background-color: #f0ad4e;*/
           /* border: 2px solid #000000; */
        }

        input[type=radio]:checked + label {
            color: #000000;
            padding: 4px 3px;
            border: 2px solid;
            border-radius: 50%;
            width: 50px;
            height: 50px;
        }

        input[type=radio]:hover + label:hover {
            border: 2px solid;
        }

        input[type="radio"] + label span,
        input[type="radio"]:checked + label span {
            -webkit-transition:background-color 0.4s linear;
            -o-transition:background-color 0.4s linear;
            -moz-transition:background-color 0.4s linear;
            transition:background-color 0.4s linear;
        }
    </style>

    <form action="#" class="text-center" id="message-form">

        <div id="message-form-container">

            <div class="row">
                <div class="col-sm-3 user-img">
                    <img class="rounded-circle img-responsive" src="http://placehold.it/200x200" alt="">
                </div>

                <div class="form-group col-sm-9">
                    <label for="text">Le message</label>
                    <textarea name="text" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
                
            </div>
          </div>
            <div>
                <input type="radio" name="color" id="blue" class="blue-gradient">
                <label for="blue">
                    <span  class="blue-gradient"></span>
                </label>
             </div>
        <button type="submit" class="btn btn-outline-primary btn-lg pull-right">Publier</button>
    </form>

@endsection

@section('scripts')
@endsection