@extends('layouts/header')
@section('content')

<div class="blog-contents m-0 p-0">
        <div class="row">
                <div class="col-9">
                        <h2>Latest Blogs</h2>
                </div>
                <div class="col-3">
                        <h2>Related Blogs</h2>
                </div>
        </div>
        <div class="row">
                <div class="col-9 d-inline-flex">
                        <div class="row ">
                                <div class="col-3">
                                        <img src="{{asset('images/book1.jpeg') }}" alt="book1" class="blog-img">
                                </div>
                                <div class="col-9">
                                        <h1>Blog-Title</h1>
                                        <h6>Published By: Shibu Sharma</h6>
                                        <h6>Published Date: 2024-01-21</h6>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus nobis
                                                veniam aperiam quod minima nulla odio atque voluptates neque officiis
                                                provident placeat ullam quia soluta veritatis, dignissimos sit ratione,
                                                unde repellat maxime inventore corrupti maiores aspernatur? Accusantium
                                                reprehenderit sint nulla, molestiae natus esse nemo?</p>
                                </div>
                        </div>
                </div>
                <div class="col-3">
                        <div class="row ">
                                <div class="col-3">
                                        <img src="{{asset('images/book2.jpeg') }}" alt="book2" class="blog-img">
                                </div>
                                <div class="col-9">
                                        <h1>Blog-Title</h1>
                                        <h6>Published By: Shibu Sharma</h6>
                                        <h6>Published Date: 2024-01-21</h6>
                                                                        </div>
                        </div>


                </div>
        </div>

        <div class="row">
                <div class="col-9 d-inline-flex">
                        <div class="row ">
                                <div class="col-3">
                                        <img src="{{asset('images/book3.jpeg') }}" alt="book3" class="blog-img">
                                </div>
                                <div class="col-9">
                                        <h1>Blog-Title</h1>
                                        <h6>Published By: Shibu Sharma</h6>
                                        <h6>Published Date: 2024-01-21</h6>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus nobis
                                                veniam aperiam quod minima nulla odio atque voluptates neque officiis
                                                provident placeat ullam quia soluta veritatis, dignissimos sit ratione,
                                                unde repellat maxime inventore corrupti maiores aspernatur? Accusantium
                                                reprehenderit sint nulla, molestiae natus esse nemo?</p>
                                </div>
                        </div>
                </div>
                <div class="col-3">
                        <div class="row ">
                                <div class="col-3">
                                        <img src="{{asset('images/book3.jpeg') }}" alt="book3" class="blog-img">
                                </div>
                                <div class="col-9">
                                        <h1>Blog-Title</h1>
                                        <h6>Published By: Shibu Sharma</h6>
                                        <h6>Published Date: 2024-01-21</h6>
                                                                        </div>
                        </div>


                </div>
        </div>
        

                </div>
        </div>


</div>
@endsection