@extends('layout.main')
@section('konten')


<div class="container">
    <article>
        <div class="row">
            <div class="col-md-8">
                <article class="post-item">
                    <div class="post-item-image">
                        <a href="/tampil">
                            <img src="img/Post_Image_1.jpg" alt="">
                        </a>
                    </div>
                    <div class="post-item-body">
                        <div class="padding-10">
                            <h2><a href="/tampil">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos voluptas, blanditiis impedit repellat harum, eaque saepe aspernatur quo magnam obcaecati dolor! Deleniti quod repellendus non iste architecto, voluptate excepturi velit.</p>
                        </div>

                        <div class="post-meta padding-10 clearfix">
                            <div class="pull-left">
                                <ul class="post-meta-group">
                                    <li><i class="fa fa-user"></i><a href="#"> Admin</a></li>
                                    <li><i class="fa fa-clock-o"></i><time> February 12, 2016</time></li>
                                    <li><i class="fa fa-tags"></i><a href="#"> Blog</a></li>
                                    <li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li>
                                </ul>
                            </div>
                            <div class="pull-right">
                                <a href="/tampil">Continue Reading &raquo;</a>
                            </div>
                        </div>
                    </div>
            </article>

                <nav>
                  <ul class="pager">
                    <li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span> Newer</a></li>
                    <li class="next"><a href="#">Older <span aria-hidden="true">&rarr;</span></a></li>
                  </ul>
                </nav>
            </div>
    @include('layout.sidebar')
        </div>
    </div>

@endsection