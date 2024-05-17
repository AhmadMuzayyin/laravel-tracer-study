@extends('layouts.home')
@section('content')
    <section class="pager-section">
        <div class="container">
            <div class="pager-content text-center">
                <h2>Blog</h2>
                <ul>
                    <li><a href="#" title="">Home</a></li>
                    <li><span>Blog</span></li>
                </ul>
            </div>
            <h2 class="page-titlee">SMKN 1</h2>
        </div>
    </section>

    <section class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="blog-section p-0 posts-page">
                        <div class="blog-posts">
                            {{-- @dd($posts) --}}
                            @foreach ($posts as $post)
                                <div class="blog-post">
                                    <div class="blog-thumbnail">
                                        <a href="#" title="">
                                            <img src="{{ $post->trixAttachments->count() == 0 ? "https://source.unsplash.com/random/2172x1448/?{$post->category->name}" : $post->trixAttachments }}"
                                                alt="" class="w-100">
                                        </a>
                                        <span class="category">{{ $post->category->name }}</span>
                                    </div>
                                    <div class="blog-info">
                                        <ul class="meta">
                                            <li><a href="#" title="">17/09/2020</a></li>
                                            <li><a href="#" title="">by {{ $post->user->name }}</a></li>
                                        </ul>
                                        <h3 class="stick">
                                            <a href="{{ route('landing.single_post', $post->slug) }}"
                                                title="">{{ $post->title }}</a>
                                        </h3>
                                        <p>
                                            {{ $post->excerpt() }}
                                        </p>
                                        <a href="{{ route('landing.single_post', $post->slug) }}" title=""
                                            class="read-more">Read <i class="fa fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            @endforeach
                        </div><!--blog-posts end-->
                    </div><!--blog-section end-->
                    <div class="mdp-pagination">
                        {{ $posts->links() }}
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
