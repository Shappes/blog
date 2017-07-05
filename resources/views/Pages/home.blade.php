@extends('main')

@section('title', '| Hompage')

@section('scripts')

@section('mainbar')

            <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron">
                        <h1>Willkommen auf mein Blog!</h1>
                          <p>Vielen Dank für deinen besuch. Dies ist mein erster Blog, gebaut mit Laravel.</p>
                          <p><a class="btn btn-warning btn-lg" href="#" role="  button">Latest Post</a></p>
                        </div>
                    </div>
            </div> <!-- end of header .row -->

            <div class="row">
                <div class="col-md-8" >
                    <div class="post">
                        <h3>Post Title</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua...</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>   

                    <hr> 

                    <div class="post">
                        <h3>Post Title</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua...</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>

                    <hr>

                    <div class="post">
                        <h3>Post Title</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua...</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>

                    <hr>

                    <div class="post">
                        <h3>Post Title</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua...</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>


                </div>

                <div class="col-md-3 col-md-offset-1" > 
                    <h2> Sidebar </h2>                
                </div>
            </div>
@endsection