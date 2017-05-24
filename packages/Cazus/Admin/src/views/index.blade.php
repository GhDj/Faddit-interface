<?php
/**
 * Created by PhpStorm.
 * User: ghdj9
 * Date: 22/05/2017
 * Time: 02:56
 */

?>

@extends('faddit::layout')

@section('title','Accueil')


@section('content')


    <div class="col-sm-6 col-md-4 post-wrapper">
        <div class="top-post-wrapper">

            <div class="user"><i class="fa fa-user-circle" aria-hidden="true"></i> Ghabri Djalel</div>
            <div class="time">1h</div>
        </div>
        <div class="container blue-gradient post">

            <p>
                Hello Wordl!
                Hello 3asba!
                hello zebi zebi, nam ijik bin ejelda wel 3dham
            </p>
        </div>

        <div class="lc-wrapper">

            <div class="like-icon">
                <div class="lk-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.8 25.87">
                        <defs></defs>
                        <title>Asset 1</title>
                        <g id="Layer_2" data-name="Layer 2">
                            <g id="Layer_1-2" data-name="Layer 1">
                                <path class="cls-1"
                                      d="M25.47,9.53a3.68,3.68,0,0,0-2.38-.89H17.3V4.46A4.38,4.38,0,0,0,15.78.69a4.78,4.78,0,0,0-3.9-.47.66.66,0,0,0-.46.63V5.52A4.62,4.62,0,0,1,9.25,9.37,8.54,8.54,0,0,1,7,10.51l-.16,0a1.36,1.36,0,0,0-1.17-.67H1.36A1.36,1.36,0,0,0,0,11.24V23.81a1.36,1.36,0,0,0,1.36,1.36H5.65a1.37,1.37,0,0,0,1-.49,3.74,3.74,0,0,0,2.72,1.19H20.85c2.53,0,4.14-1.32,4.42-3.63L26.75,13A3.87,3.87,0,0,0,25.47,9.53ZM5.68,23.81a0,0,0,0,1,0,0H1.36a0,0,0,0,1,0,0V11.24a0,0,0,0,1,0,0H5.65a0,0,0,0,1,0,0V23.81Zm19.76-11L24,22a.06.06,0,0,1,0,0c-.2,1.65-1.25,2.48-3.12,2.48H9.41a2.42,2.42,0,0,1-2.37-2,.88.88,0,0,0,0-.12V11.86l.29-.07h0A9.55,9.55,0,0,0,10,10.47a6,6,0,0,0,2.75-4.95V1.38A3.07,3.07,0,0,1,15,1.76a3.18,3.18,0,0,1,1,2.7V9.29a.66.66,0,0,0,.66.66h6.44a2.35,2.35,0,0,1,1.52.58A2.52,2.52,0,0,1,25.44,12.84Z"/>
                            </g>
                        </g>
                    </svg>
                </div>
                <span>28</span>
            </div>

            <div class="comment-icon">
                <span>28</span>
                <div class="com-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.2 22.91"><defs><style>.cls-2{fill:none;stroke:gray;stroke-miterlimit:10;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="messenger"><path class="cls-2" d="M19.58.5h-17A2.13,2.13,0,0,0,.5,2.62V21.7l4.24-4.24H19.58a2.13,2.13,0,0,0,2.12-2.12V2.62A2.13,2.13,0,0,0,19.58.5Z"/></g></g></g></svg>

                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-4 post-wrapper">
        <div>Ghabri Djalel</div>
        <div class="container limeade post">

            <p>
                Hello Wordl!
                Hello 3asba!
                hello zebi zebi, nam ijik bin ejelda wel 3dham
            </p>
        </div>

        <div class="lc-wrapper">

            <div class="like-icon">
                <div class="lk-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.8 25.87">
                        <defs></defs>
                        <title>Asset 1</title>
                        <g id="Layer_2" data-name="Layer 2">
                            <g id="Layer_1-2" data-name="Layer 1">
                                <path class="cls-1"
                                      d="M25.47,9.53a3.68,3.68,0,0,0-2.38-.89H17.3V4.46A4.38,4.38,0,0,0,15.78.69a4.78,4.78,0,0,0-3.9-.47.66.66,0,0,0-.46.63V5.52A4.62,4.62,0,0,1,9.25,9.37,8.54,8.54,0,0,1,7,10.51l-.16,0a1.36,1.36,0,0,0-1.17-.67H1.36A1.36,1.36,0,0,0,0,11.24V23.81a1.36,1.36,0,0,0,1.36,1.36H5.65a1.37,1.37,0,0,0,1-.49,3.74,3.74,0,0,0,2.72,1.19H20.85c2.53,0,4.14-1.32,4.42-3.63L26.75,13A3.87,3.87,0,0,0,25.47,9.53ZM5.68,23.81a0,0,0,0,1,0,0H1.36a0,0,0,0,1,0,0V11.24a0,0,0,0,1,0,0H5.65a0,0,0,0,1,0,0V23.81Zm19.76-11L24,22a.06.06,0,0,1,0,0c-.2,1.65-1.25,2.48-3.12,2.48H9.41a2.42,2.42,0,0,1-2.37-2,.88.88,0,0,0,0-.12V11.86l.29-.07h0A9.55,9.55,0,0,0,10,10.47a6,6,0,0,0,2.75-4.95V1.38A3.07,3.07,0,0,1,15,1.76a3.18,3.18,0,0,1,1,2.7V9.29a.66.66,0,0,0,.66.66h6.44a2.35,2.35,0,0,1,1.52.58A2.52,2.52,0,0,1,25.44,12.84Z"/>
                            </g>
                        </g>
                    </svg>
                </div>
                <span>28</span>
            </div>

            <div class="comment-icon">
                <span>28</span>
                <div class="com-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.2 22.91"><defs><style>.cls-2{fill:none;stroke:gray;stroke-miterlimit:10;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="messenger"><path class="cls-2" d="M19.58.5h-17A2.13,2.13,0,0,0,.5,2.62V21.7l4.24-4.24H19.58a2.13,2.13,0,0,0,2.12-2.12V2.62A2.13,2.13,0,0,0,19.58.5Z"/></g></g></g></svg>

                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-4 post-wrapper">
        <div>Ghabri Djalel</div>
        <div class="container socialive post">

            <p>
                Hello Wordl!
                Hello 3asba!
                hello zebi zebi, nam ijik bin ejelda wel 3dham
            </p>
        </div>

        <div class="lc-wrapper">

            <div class="like-icon">
                <div class="lk-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.8 25.87">
                        <defs></defs>
                        <title>Asset 1</title>
                        <g id="Layer_2" data-name="Layer 2">
                            <g id="Layer_1-2" data-name="Layer 1">
                                <path class="cls-1"
                                      d="M25.47,9.53a3.68,3.68,0,0,0-2.38-.89H17.3V4.46A4.38,4.38,0,0,0,15.78.69a4.78,4.78,0,0,0-3.9-.47.66.66,0,0,0-.46.63V5.52A4.62,4.62,0,0,1,9.25,9.37,8.54,8.54,0,0,1,7,10.51l-.16,0a1.36,1.36,0,0,0-1.17-.67H1.36A1.36,1.36,0,0,0,0,11.24V23.81a1.36,1.36,0,0,0,1.36,1.36H5.65a1.37,1.37,0,0,0,1-.49,3.74,3.74,0,0,0,2.72,1.19H20.85c2.53,0,4.14-1.32,4.42-3.63L26.75,13A3.87,3.87,0,0,0,25.47,9.53ZM5.68,23.81a0,0,0,0,1,0,0H1.36a0,0,0,0,1,0,0V11.24a0,0,0,0,1,0,0H5.65a0,0,0,0,1,0,0V23.81Zm19.76-11L24,22a.06.06,0,0,1,0,0c-.2,1.65-1.25,2.48-3.12,2.48H9.41a2.42,2.42,0,0,1-2.37-2,.88.88,0,0,0,0-.12V11.86l.29-.07h0A9.55,9.55,0,0,0,10,10.47a6,6,0,0,0,2.75-4.95V1.38A3.07,3.07,0,0,1,15,1.76a3.18,3.18,0,0,1,1,2.7V9.29a.66.66,0,0,0,.66.66h6.44a2.35,2.35,0,0,1,1.52.58A2.52,2.52,0,0,1,25.44,12.84Z"/>
                            </g>
                        </g>
                    </svg>
                </div>
                <span>28</span>
            </div>

            <div class="comment-icon">
                <span>28</span>
                <div class="com-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.2 22.91"><defs><style>.cls-2{fill:none;stroke:gray;stroke-miterlimit:10;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="messenger"><path class="cls-2" d="M19.58.5h-17A2.13,2.13,0,0,0,.5,2.62V21.7l4.24-4.24H19.58a2.13,2.13,0,0,0,2.12-2.12V2.62A2.13,2.13,0,0,0,19.58.5Z"/></g></g></g></svg>

                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-4 post-wrapper">
        <div>Ghabri Djalel</div>
        <div class="container red-gradient post">

            <p>
                Hello Wordl!
                Hello 3asba!
                hello zebi zebi, nam ijik bin ejelda wel 3dham
            </p>
        </div>

        <div class="lc-wrapper">

            <div class="like-icon">
                <div class="lk-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.8 25.87">
                        <defs></defs>
                        <title>Asset 1</title>
                        <g id="Layer_2" data-name="Layer 2">
                            <g id="Layer_1-2" data-name="Layer 1">
                                <path class="cls-1"
                                      d="M25.47,9.53a3.68,3.68,0,0,0-2.38-.89H17.3V4.46A4.38,4.38,0,0,0,15.78.69a4.78,4.78,0,0,0-3.9-.47.66.66,0,0,0-.46.63V5.52A4.62,4.62,0,0,1,9.25,9.37,8.54,8.54,0,0,1,7,10.51l-.16,0a1.36,1.36,0,0,0-1.17-.67H1.36A1.36,1.36,0,0,0,0,11.24V23.81a1.36,1.36,0,0,0,1.36,1.36H5.65a1.37,1.37,0,0,0,1-.49,3.74,3.74,0,0,0,2.72,1.19H20.85c2.53,0,4.14-1.32,4.42-3.63L26.75,13A3.87,3.87,0,0,0,25.47,9.53ZM5.68,23.81a0,0,0,0,1,0,0H1.36a0,0,0,0,1,0,0V11.24a0,0,0,0,1,0,0H5.65a0,0,0,0,1,0,0V23.81Zm19.76-11L24,22a.06.06,0,0,1,0,0c-.2,1.65-1.25,2.48-3.12,2.48H9.41a2.42,2.42,0,0,1-2.37-2,.88.88,0,0,0,0-.12V11.86l.29-.07h0A9.55,9.55,0,0,0,10,10.47a6,6,0,0,0,2.75-4.95V1.38A3.07,3.07,0,0,1,15,1.76a3.18,3.18,0,0,1,1,2.7V9.29a.66.66,0,0,0,.66.66h6.44a2.35,2.35,0,0,1,1.52.58A2.52,2.52,0,0,1,25.44,12.84Z"/>
                            </g>
                        </g>
                    </svg>
                </div>
                <span>28</span>
            </div>

            <div class="comment-icon">
                <span>28</span>
                <div class="com-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.2 22.91"><defs><style>.cls-2{fill:none;stroke:gray;stroke-miterlimit:10;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="messenger"><path class="cls-2" d="M19.58.5h-17A2.13,2.13,0,0,0,.5,2.62V21.7l4.24-4.24H19.58a2.13,2.13,0,0,0,2.12-2.12V2.62A2.13,2.13,0,0,0,19.58.5Z"/></g></g></g></svg>

                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-4 post-wrapper">
        <div>Ghabri Djalel</div>
        <div class="container alive post">

            <p>
                Hello Wordl!
                Hello 3asba!
                hello zebi zebi, nam ijik bin ejelda wel 3dham
            </p>
        </div>

        <div class="lc-wrapper">

            <div class="like-icon">
                <div class="lk-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.8 25.87">
                        <defs></defs>
                        <title>Asset 1</title>
                        <g id="Layer_2" data-name="Layer 2">
                            <g id="Layer_1-2" data-name="Layer 1">
                                <path class="cls-1"
                                      d="M25.47,9.53a3.68,3.68,0,0,0-2.38-.89H17.3V4.46A4.38,4.38,0,0,0,15.78.69a4.78,4.78,0,0,0-3.9-.47.66.66,0,0,0-.46.63V5.52A4.62,4.62,0,0,1,9.25,9.37,8.54,8.54,0,0,1,7,10.51l-.16,0a1.36,1.36,0,0,0-1.17-.67H1.36A1.36,1.36,0,0,0,0,11.24V23.81a1.36,1.36,0,0,0,1.36,1.36H5.65a1.37,1.37,0,0,0,1-.49,3.74,3.74,0,0,0,2.72,1.19H20.85c2.53,0,4.14-1.32,4.42-3.63L26.75,13A3.87,3.87,0,0,0,25.47,9.53ZM5.68,23.81a0,0,0,0,1,0,0H1.36a0,0,0,0,1,0,0V11.24a0,0,0,0,1,0,0H5.65a0,0,0,0,1,0,0V23.81Zm19.76-11L24,22a.06.06,0,0,1,0,0c-.2,1.65-1.25,2.48-3.12,2.48H9.41a2.42,2.42,0,0,1-2.37-2,.88.88,0,0,0,0-.12V11.86l.29-.07h0A9.55,9.55,0,0,0,10,10.47a6,6,0,0,0,2.75-4.95V1.38A3.07,3.07,0,0,1,15,1.76a3.18,3.18,0,0,1,1,2.7V9.29a.66.66,0,0,0,.66.66h6.44a2.35,2.35,0,0,1,1.52.58A2.52,2.52,0,0,1,25.44,12.84Z"/>
                            </g>
                        </g>
                    </svg>
                </div>
                <span>28</span>
            </div>

            <div class="comment-icon">
                <span>28</span>
                <div class="com-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.2 22.91"><defs><style>.cls-2{fill:none;stroke:gray;stroke-miterlimit:10;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="messenger"><path class="cls-2" d="M19.58.5h-17A2.13,2.13,0,0,0,.5,2.62V21.7l4.24-4.24H19.58a2.13,2.13,0,0,0,2.12-2.12V2.62A2.13,2.13,0,0,0,19.58.5Z"/></g></g></g></svg>

                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-4 post-wrapper">
        <div>Ghabri Djalel</div>
        <div class="container luch post">

            <p>
                Hello Wordl!
                Hello 3asba!
                hello zebi zebi, nam ijik bin ejelda wel 3dham
            </p>
        </div>

        <div class="lc-wrapper">

            <div class="like-icon">
                <div class="lk-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.8 25.87">
                        <defs></defs>
                        <title>Asset 1</title>
                        <g id="Layer_2" data-name="Layer 2">
                            <g id="Layer_1-2" data-name="Layer 1">
                                <path class="cls-1"
                                      d="M25.47,9.53a3.68,3.68,0,0,0-2.38-.89H17.3V4.46A4.38,4.38,0,0,0,15.78.69a4.78,4.78,0,0,0-3.9-.47.66.66,0,0,0-.46.63V5.52A4.62,4.62,0,0,1,9.25,9.37,8.54,8.54,0,0,1,7,10.51l-.16,0a1.36,1.36,0,0,0-1.17-.67H1.36A1.36,1.36,0,0,0,0,11.24V23.81a1.36,1.36,0,0,0,1.36,1.36H5.65a1.37,1.37,0,0,0,1-.49,3.74,3.74,0,0,0,2.72,1.19H20.85c2.53,0,4.14-1.32,4.42-3.63L26.75,13A3.87,3.87,0,0,0,25.47,9.53ZM5.68,23.81a0,0,0,0,1,0,0H1.36a0,0,0,0,1,0,0V11.24a0,0,0,0,1,0,0H5.65a0,0,0,0,1,0,0V23.81Zm19.76-11L24,22a.06.06,0,0,1,0,0c-.2,1.65-1.25,2.48-3.12,2.48H9.41a2.42,2.42,0,0,1-2.37-2,.88.88,0,0,0,0-.12V11.86l.29-.07h0A9.55,9.55,0,0,0,10,10.47a6,6,0,0,0,2.75-4.95V1.38A3.07,3.07,0,0,1,15,1.76a3.18,3.18,0,0,1,1,2.7V9.29a.66.66,0,0,0,.66.66h6.44a2.35,2.35,0,0,1,1.52.58A2.52,2.52,0,0,1,25.44,12.84Z"/>
                            </g>
                        </g>
                    </svg>
                </div>
                <span>28</span>
            </div>

            <div class="comment-icon">
                <span>28</span>
                <div class="com-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.2 22.91"><defs><style>.cls-2{fill:none;stroke:gray;stroke-miterlimit:10;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="messenger"><path class="cls-2" d="M19.58.5h-17A2.13,2.13,0,0,0,.5,2.62V21.7l4.24-4.24H19.58a2.13,2.13,0,0,0,2.12-2.12V2.62A2.13,2.13,0,0,0,19.58.5Z"/></g></g></g></svg>

                </div>

            </div>
        </div>
    </div>





@endsection



