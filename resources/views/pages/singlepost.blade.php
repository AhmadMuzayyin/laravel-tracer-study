@extends('layouts.home')
@section('content')
    <section class="pager-section blog-version">
        <div class="container">
            <div class="pager-content text-center">
                <ul>
                    <li><a href="{{ route('landing.index') }}" title="">Home</a></li>
                    <li><a href="{{ route('landing.blogs') }}" title="">Blog</a></li>
                    <li><span>{{ $post->title }}</span></li>
                </ul>
                <h2>{{ $post->title }}</h2>
                <span class="categry">{{ $post->category->name }}</span>
                <ul class="meta">
                    <li><a href="#" title="">{{ $post->created_at->diffForHumans() }}</a></li>
                    <li><a href="#" title="">by {{ $post->user->name }}</a></li>
                </ul>
            </div><!--pager-content end-->
        </div>
    </section><!--pager-section end-->

    <section class="page-content p80">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="blog-post single">
                        <div class="card shadow">
                            <div class="card-body">
                                {!! $post->trixRender('content') !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="sidebar">
                        <div class="widget widget-search">
                            <form>
                                <input type="text" name="search" placeholder="Search">
                                <button type="submit"><img src="{{ url('frontend/assets/img/icon4.png') }}"
                                        alt=""></button>
                            </form>
                        </div>
                        <div class="widget widget-categories">
                            <h3 class="widget-title">Categories</h3>
                            <ul>
                                @foreach ($categories as $category)
                                    <li>
                                        <a href="#" title="">{{ $category->name }}</a>
                                        <span>{{ count($category->post) }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget widget-posts">
                            <h3 class="widget-title">Latest Posts</h3>
                            <div class="wd-posts">
                                <div class="wd-post d-flex flex-wrap">
                                    <div class="wd-thumb">
                                        <img src="https://via.placeholder.com/52x52" alt="">
                                    </div>
                                    <div class="wd-info">
                                        <h3><a href="post.html" title="">Duis tempor eros tortor, a ornare</a></h3>
                                        <span>17/09/2020</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
