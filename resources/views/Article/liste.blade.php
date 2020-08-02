@extends('home')
 @section('contenu') 

 <H1>Liste des articles</H1>
	<a href="{{url('forme-Article')}}" class=""><button type="button" class="btn btn-success btn-xl btn3d"> <i class="fa fa-plus-circle"></i>Nouveau article</button></a>
	
	<!-- <h1 class="title">UI - Card Design</h1> -->

	<body>
    <article class="card article" style="margin-left:20%; margin-top:25%;">
        <header class="cardThumb">
            <a href="#">
                <img src="https://unsplash.it/370/235/?random">
            </a>
        </header>
        <div class="cardDate">
            <span class="cardDateDay">1</span>
            <span class="cardDateMonth">Janv</span>
        </div>
        <div class="cardBody">
            <div class="cardCategory"><a href="#">Photos</a></div>
            <h2 class="cardTitle"><a href="#">Lorem Ipsum</a></h2>
            <div class="cardSubtitle">dolor sit amet, consectetur adipiscing elit</div>
            <p class="cardDescription">
                In ut quam quis magna pulvinar tempor at non elit. Ut lacinia elit vestibulum nulla accumsan, et fringilla mi accumsan. Etiam urna justo, luctus non porta eget, interdum quis tellus.
            </p>
        </div>
        <footer class="cardFooter">
            <span class="icon icon--time"></span>33 min
            <span class="icon icon--comment"></span><a href="#">1 comments</a>
        </footer>
    </article>
</body>




 
 @endsection