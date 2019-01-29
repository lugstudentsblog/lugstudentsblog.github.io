@extends('layouts.header-footer')

@section('content')
<div class="section">
    <div class="blog-banner">
        <div style="height: 100%;">
            <div class="center-text">
                <div class="row">
                    <div class="col-sm-12 col-md-10 offset-md-1 col-lg-10 offset-lg-1">
                        <h1>Student Blog</h1>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sixty">
        <div class="row center-text">
            <div class="col-sm-12 col-md-10 offset-md-1 col-lg-10 offset-lg-1">
                <nav>
                	<a href="#" class="active">All</a>
                	<a href="#">Academics</a>
                	<a href="#">Entertainment</a>
                	<a href="#">Sports</a>
                	<a href="#">Activities</a>
                </nav>
            </div>
        </div>
    </div>

    <div class="space-30"></div>

    <div class="row">
        <div class="col-sm-12 col-md-10 offset-md-1 col-lg-10 offset-lg-1">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 margin-bottom-20">
                            <a href="{{ url('blogpost-detail') }}"><div class="top-image bg-hover" style="background-image: url('/images/leadership.jpg');"></div></a>
                            <div class="top-content">
                                <span class="top-category theme-color">Upcoming event</span>
                                <div class="top-title no-margin-top"><a href="{{ url('blogpost-detail') }}">Celebrating Sports & Leadership Achievements</a></div>
                                <span class="top-author-date pale">by <span class="theme-color">Shaniqua Asumah</span> • Aug 12, 2018</span>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-6 margin-bottom-10">
                            <a href="{{ url('blogpost-detail') }}"><div class="top-subimage bg-hover" style="background-image: url('/images/students.jpg');"></div></a>
                            <div class="top-content">
                                <span class="top-category theme-color">Academics</span>
                                <div class="top-subtitle no-margin-top"><a href="{{ url('blogpost-detail') }}">Students who represented LUG at UN</a></div>
                                <span class="top-author-date pale">by <span class="theme-color">Shaniqua Asumah</span> • Aug 12, 2018</span>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-6 margin-bottom-10">
                            <a href="{{ url('blogpost-detail') }}"><div class="top-subimage" style="background-image: url('/images/dizii.jpg');"></div></a>
                            <div class="top-content bg-hover">
                                <span class="top-category theme-color">Entertainment</span>
                                <div class="top-subtitle no-margin-top"><a href="{{ url('blogpost-detail') }}">Lord Dizii releases a new song “Don’t Care”</a></div>
                                <span class="top-author-date pale">by <span class="theme-color">Shaniqua Asumah</span> • Aug 12, 2018</span>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-6 margin-bottom-10">
                            <a href="{{ url('blogpost-detail') }}"><div class="top-subimage bg-hover" style="background-image: url('/images/lecturer.jpg');"></div></a>
                            <div class="top-content">
                                <span class="top-category theme-color">Academics</span>
                                <div class="top-subtitle no-margin-top"><a href="{{ url('blogpost-detail') }}">Lecturer - Student Relationship like no other</a></div>
                                <span class="top-author-date pale">by <span class="theme-color">Shaniqua Asumah</span> • Aug 12, 2018</span>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-6 margin-bottom-10">
                            <a href="{{ url('blogpost-detail') }}"><div class="top-subimage" style="background-image: url('/images/src.jpg');"></div></a>
                            <div class="top-content bg-hover">
                                <span class="top-category theme-color">On-campus Activities</span>
                                <div class="top-subtitle no-margin-top"><a href="{{ url('blogpost-detail') }}">Fundraiser to support the less privileged</a></div>
                                <span class="top-author-date pale">by <span class="theme-color">Shaniqua Asumah</span> • Aug 12, 2018</span>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-6 margin-bottom-10">
                            <a href="{{ url('blogpost-detail') }}"><div class="top-subimage bg-hover" style="background-image: url('/images/lecturer.jpg');"></div></a>
                            <div class="top-content">
                                <span class="top-category theme-color">Academics</span>
                                <div class="top-subtitle no-margin-top"><a href="{{ url('blogpost-detail') }}">Lecturer - Student Relationship like no other</a></div>
                                <span class="top-author-date pale">by <span class="theme-color">Shaniqua Asumah</span> • Aug 12, 2018</span>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-6 margin-bottom-10">
                            <a href="{{ url('blogpost-detail') }}"><div class="top-subimage bg-hover" style="background-image: url('/images/src.jpg');"></div></a>
                            <div class="top-content">
                                <span class="top-category theme-color">On-campus Activities</span>
                                <div class="top-subtitle no-margin-top"><a href="{{ url('blogpost-detail') }}">Fundraiser to support the less privileged</a></div>
                                <span class="top-author-date pale">by <span class="theme-color">Shaniqua Asumah</span> • Aug 12, 2018</span>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-6 margin-bottom-10">
                            <a href="{{ url('blogpost-detail') }}"><div class="top-subimage bg-hover" style="background-image: url('/images/lecturer.jpg');"></div></a>
                            <div class="top-content">
                                <span class="top-category theme-color">Academics</span>
                                <div class="top-subtitle no-margin-top"><a href="{{ url('blogpost-detail') }}">Lecturer - Student Relationship like no other</a></div>
                                <span class="top-author-date pale">by <span class="theme-color">Shaniqua Asumah</span> • Aug 12, 2018</span>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-6 margin-bottom-10">
                            <a href="{{ url('blogpost-detail') }}"><div class="top-subimage bg-hover" style="background-image: url('/images/src.jpg');"></div></a>
                            <div class="top-content">
                                <span class="top-category theme-color">On-campus Activities</span>
                                <div class="top-subtitle no-margin-top"><a href="{{ url('blogpost-detail') }}">Fundraiser to support the less privileged</a></div>
                                <span class="top-author-date pale">by <span class="theme-color">Shaniqua Asumah</span> • Aug 12, 2018</span>
                            </div>
                        </div>

                    </div>

                    <center>
                        <div class="space-30"></div>
                        <button class="ui button see-more">See more</button>
                    </center>

                    <div class="space-50"></div>

                </div>

                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="ui fluid left icon input">
                      <input type="text" class="rounded" placeholder="Search articles">
                      <i class="search icon theme-color"></i>
                    </div>

                    <div class="space-20"></div>

                    <div class="quote">
                        <div class="center-text">
                            <div class="word-title">WORD FOR THE DAY</div>
                            <div class="word-content">Dream, struggle, create, prevail. Be daring. Be brave. Be loving. Be compassionate. Be strong. Be brilliant. Be beautiful.</div>
                            <div class="word-author">- Caterina Fake</div>
                        </div>
                    </div>

                    <div class="space-40"></div>

                    <div class="announcement">
                        <div class="title">
                            <i class="lightbulb outline icon theme-color"></i>
                            ANNOUNCEMENT
                        </div>

                        <div class="space-20"></div>

                        <div class="item">
                            <div class="title">Free Essay Tutorials</div>
                            <div class="desc theme-color">Learn how to write credible essays and avoid plagiarism...</div>
                            <div class="ui divider"></div>
                        </div>

                        <div class="space-20"></div>

                        <div class="item">
                            <div class="title">Free Essay Tutorials</div>
                            <div class="desc theme-color">Learn how to write credible essays and avoid plagiarism...</div>
                            <div class="ui divider"></div>
                        </div>

                        <div class="space-20"></div>

                        <div class="item">
                            <div class="title">Free Essay Tutorials</div>
                            <div class="desc theme-color">Learn how to write credible essays and avoid plagiarism...</div>
                            <div class="ui divider"></div>
                        </div>

                        <div class="space-20"></div>

                        <div class="item">
                            <div class="title">Free Essay Tutorials</div>
                            <div class="desc theme-color">Learn how to write credible essays and avoid plagiarism...</div>
                            <div class="ui divider"></div>
                        </div>

                        <div class="space-20"></div>

                        <div class="item">
                            <div class="title">Free Essay Tutorials</div>
                            <div class="desc theme-color">Learn how to write credible essays and avoid plagiarism...</div>
                            <div class="ui divider"></div>
                        </div>


                    </div>


                </div>
            </div>
            
        </div>
    </div>

    <div class="space-50"></div>
</div>



@endsection
