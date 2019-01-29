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
                        	<h1>Celebrating academics and excellence, Sports & Leadership Achievements</h1>
                        	<span class="top-author-date pale">by <span class="theme-color">Shaniqua Asumah</span> • Category</span><br/>
                        	<span class="top-author-date pale">Aug 12, 2018</span>

                        	<div class="space-30"></div>
                            <a href="{{ url('blogpost-detail') }}"><div class="top-image" style="background-image: url('/images/leadership.jpg');"></div></a>
                            <div class="space-50"></div>

                            <div class="row">
                            	<div class="col-sm-12 col-md-12 col-lg-12 post">
                            		<p class="font-16 pale">The club details goes here following a WYSIWYG Format. The club details goes here following a WYSIWYG Format. The club details goes here following a WYSIWYG Format. The club details goes here following a WYSIWYG Format.<br/><br/>

									The club details goes here following a WYSIWYG Format. The club details goes here following a WYSIWYG Format. The club details goes here following a WYSIWYG Format. The club details goes here following a WYSIWYG Format. 

						    		<h2>Another Headeing</h2>
						    		<p  class="font-16 pale">The club details goes here following a WYSIWYG Format. The club details goes here following a WYSIWYG Format. The club details goes here following a WYSIWYG Format. The club details goes here following a WYSIWYG Format.<br/><br/>

									The club details goes here following a WYSIWYG Format. The club details goes here following a WYSIWYG Format. The club details goes here following a WYSIWYG Format. The club details goes here following a WYSIWYG Format. </p>
                            	</div>
                            </div>

                            <div class="space-30"></div>
                            <div class="ui divider"></div>
                            <h3>Share:</h3>
                            <div class="share-icons">
                                <a href="#" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            </div>


                            
                        </div>

                        

                    </div>

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
