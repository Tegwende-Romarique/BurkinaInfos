
<div class="container-fluid breaking-news">
	<div class="row mb-5">
	    <div class="col-12 py-4 bg-dark">
    	    <div class="row">
                <div class="col-md-3 col-lg-2 pr-md-0">
                    <div class="p-2 bg-primary text-white text-center breaking-caret"><span class="font-weight-bold">Flash Infos:</span></div>
                </div> 
                        <div class="col-md-9 col-lg-10 pl-md-4 py-2">
                           <div class="breaking-box">
                             <div id="carouselbreaking" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                    <!-- @foreach($article as $articles) -->
                                         <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/"><span class="position-relative mx-2 badge badge-primary rounded-0"><!-- {{$articles->rubrique_id}} --></span></a>
                                        <a class="text-white" href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">5 Takeaways From Elon Musk’s Interview With The Times About Tesla</a>
                                    <!-- @endforeach -->
                                    </div>
                               </div>
                            </div>
                    
                            <div class="navigation-box p-2 d-none d-sm-block">
                                <!--nav left-->
                                <a class="carousel-control-prev text-white" href="#carouselbreaking" role="button" data-slide="prev">
                                    <i class="fa fa-angle-left" aria-hidden="true"></i><span class="sr-only">Previous</span></a>
                                <!--nav right-->
                                <a class="carousel-control-next text-primary" href="#carouselbreaking" role="button" data-slide="next"><i class="fa fa-angle-right" aria-hidden="true"></i><span class="sr-only">Next</span></a>
                            </div>
                            <!--end navigation slider-->
                        </div>
                    </div>
                </div>
                <!--end breaking content-->
            </div>
        </div>
	</div>
	<!--end code-->



