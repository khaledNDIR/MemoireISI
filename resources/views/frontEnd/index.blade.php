 <!DOCTYPE html>
 <html lang="zxx" class="no-js">

 <head>
	@include('frontEnd/layouts.head')
 </head>

 <body>
     <header id="header">
		@include('frontEnd/layouts.header')
     </header><!-- #header -->

     <!-- start banner Area -->
     <section class="banner-area relative">
         <div class="overlay overlay-bg"></div>
         <div class="container"> 
             <div class="row fullscreen align-items-center justify-content-between">
                 <div class="col-lg-6 col-md-6 banner-left">
                     <h6 class="text-white">Rever Debout</h6>
                     <h1 class="text-white">WEST|SN <br>  voyages</h1>
                     <p class="text-white">
                         ****************************************
                     </p>
                     <a href="#reservation" class="primary-btn text-uppercase">Reserver Maintenant</a>
                 </div>
                 <div class="col-lg-4 col-md-6 banner-right">
                     <ul class="nav nav-tabs" id="myTab" role="tablist">
                         <li class="nav-item">
                             <a class="nav-link active" id="flight-tab" data-toggle="tab" href="#flight" role="tab"
                                 aria-controls="flight" aria-selected="true">Vols</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab"
                                 aria-controls="hotel" aria-selected="false">Hotels</a>
                         </li>
                         {{-- <li class="nav-item">
                             <a class="nav-link" id="holiday-tab" data-toggle="tab" href="#holiday" role="tab"
                                 aria-controls="holiday" aria-selected="false">Holidays</a>
                         </li> --}}
                     </ul>
                     <div class="tab-content" id="myTabContent">
                         <div class="tab-pane fade show active" id="flight" role="tabpanel"
                             aria-labelledby="flight-tab">
                             <form class="form-wrap" action="{{ route('vols.recherche') }}" method="POST">
                                @csrf
                                <input type="text" class="form-control" name="from" placeholder="From"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'From'">
                                <input type="text" class="form-control" name="to" placeholder="To"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'To'">
                                <input type="text" class="form-control date-picker" name="start"
                                       placeholder="Start" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Start'">
                                <input type="text" class="form-control date-picker" name="return"
                                       placeholder="Return" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Return'">
                                <input type="number" min="1" max="20" class="form-control" name="adults" 
                                       placeholder="Adults" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adults'">
                                <input type="number" min="1" max="20" class="form-control" name="child" 
                                       placeholder="Child" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Child'">
                                <button type="submit" class="primary-btn text-uppercase">Trouver un vols</button>
                            </form>
                         </div>
                         <div class="tab-pane fade" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                             <form class="form-wrap">
                                 <input type="text" class="form-control" name="name" placeholder="From "
                                     onfocus="this.placeholder = ''" onblur="this.placeholder = 'From '">
                                 <input type="text" class="form-control" name="to" placeholder="To "
                                     onfocus="this.placeholder = ''" onblur="this.placeholder = 'To '">
                                 <input type="text" class="form-control date-picker" name="start"
                                     placeholder="Start " onfocus="this.placeholder = ''"
                                     onblur="this.placeholder = 'Start '">
                                 <input type="text" class="form-control date-picker" name="return"
                                     placeholder="Return " onfocus="this.placeholder = ''"
                                     onblur="this.placeholder = 'Return '">
                                 <input type="number" min="1" max="20" class="form-control"
                                     name="adults" placeholder="Adults " onfocus="this.placeholder = ''"
                                     onblur="this.placeholder = 'Adults '">
                                 <input type="number" min="1" max="20" class="form-control"
                                     name="child" placeholder="Child " onfocus="this.placeholder = ''"
                                     onblur="this.placeholder = 'Child '">
                                 <a href="#" class="primary-btn text-uppercase">Trouver un hotel</a>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- End banner Area -->

     <!-- Start popular-destination Area -->
     <section class="popular-destination-area section-gap">
         <div class="container">
             <div class="row d-flex justify-content-center">
                 <div class="menu-content pb-70 col-lg-8">
                     <div class="title text-center">
                         <h1 class="mb-10">Destinations Populaire</h1>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-lg-4">
                     <div class="single-destination relative">
                         <div class="thumb relative">
                             <div class="overlay overlay-bg"></div>
                             <img class="img-fluid" src="frontEnd/img/d1.jpg" alt="">
                         </div>
                         <div class="desc">
                             <a href="#" class="price-btn">300.000</a>
                             <h4>USA</h4>
                             <p>Visite</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4">
                     <div class="single-destination relative">
                         <div class="thumb relative">
                             <div class="overlay overlay-bg"></div>
                             <img class="img-fluid" src="frontEnd/img/d2.jpg" alt="">
                         </div>
                         <div class="desc">
                             <a href="#" class="price-btn">250.000</a>
                             <h4>Dakar - Paris</h4>
                             <p>Promotion</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4">
                     <div class="single-destination relative">
                         <div class="thumb relative">
                             <div class="overlay overlay-bg"></div>
                             <img class="img-fluid" src="frontEnd/img/d3.jpg" alt="">
                         </div>
                         <div class="desc">
                             <a href="#" class="price-btn">250.000</a>
                             <h4>Suisse</h4>
                             <p>Profesionnel</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- End popular-destination Area -->


     <!-- Start price Area -->
     <section class="price-area section-gap" style="margin-top: -3px; background-color:rgba(241, 230, 18, 0.898)">
         <div class="container">
             <div class="row d-flex justify-content-center">
                 <div class="menu-content pb-70 col-lg-8">
                     <div class="title text-center">
                         <h1 class="mb-10">NOS OFFRES VOYAGES</h1>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-lg-12" id="reservation">
                    <div class="single-price" style="box-shadow: 0 2 0 2 gold">
                        <h4>Liste des Vols</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Compagnie Aérienne</th>
                                    <th>Aéroport de Départ</th>
                                    <th>Aéroport de Destination</th>
                                    <th>Heure de Départ</th>
                                    <th>Heure d'Arrivée</th>
                                    <th>Prix</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($vols as $vol)
                                <tr>
                                    <td>{{ $vol->compagnie_aerienne }}</td>
                                    <td>{{ $vol->aeroport_depart }}</td>
                                    <td>{{ $vol->aeroport_destination }}</td>
                                    <td>{{ $vol->heure_depart }}</td>
                                    <td>{{ $vol->heure_arrivee }}</td>
                                    <td>${{ $vol->prix }}</td>
                                    <td>
                                        <a href="{{ route('vols.reserver',['id' => $vol->id]) }}" class="btn btn-warning">Réserver</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                 </div>          
             </div>
         </div>
     </section>
     <!-- End price Area -->


     <!-- Start other-issue Area -->
     <section class="other-issue-area section-gap">
         <div class="container">
             <div class="row d-flex justify-content-center">
                 <div class="menu-content pb-70 col-lg-9">
                     <div class="title text-center">
                         <h1 class="mb-10">Other issues we can help you with</h1>
                         <p>We all live in an age that belongs to the young at heart. Life that is.</p>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-lg-3 col-md-6">
                     <div class="single-other-issue">
                         <div class="thumb">
                             <img class="img-fluid" src="frontEnd/img/o1.jpg" alt="">
                         </div>
                         <a href="#">
                             <h4>Rent a Car</h4>
                         </a>
                         <p>
                             The preservation of human life is the ultimate value, a pillar of ethics and the
                             foundation.
                         </p>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6">
                     <div class="single-other-issue">
                         <div class="thumb">
                             <img class="img-fluid" src="frontEnd/img/o2.jpg" alt="">
                         </div>
                         <a href="#">
                             <h4>Cruise Booking</h4>
                         </a>
                         <p>
                             I was always somebody who felt quite sorry for myself, what I had not got compared.
                         </p>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6">
                     <div class="single-other-issue">
                         <div class="thumb">
                             <img class="img-fluid" src="frontEnd/img/o3.jpg" alt="">
                         </div>
                         <a href="#">
                             <h4>To Do List</h4>
                         </a>
                         <p>
                             The following article covers a topic that has recently moved to center stage–at least it
                             seems.
                         </p>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6">
                     <div class="single-other-issue">
                         <div class="thumb">
                             <img class="img-fluid" src="frontEnd/img/o4.jpg" alt="">
                         </div>
                         <a href="#">
                             <h4>Food Features</h4>
                         </a>
                         <p>
                             There are many kinds of narratives and organizing principles. Science is driven by
                             evidence.
                         </p>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- End other-issue Area -->


     <!-- Start testimonial Area -->
     <section class="testimonial-area section-gap" style="margin-top: -3px; background-color:rgba(241, 230, 18, 0.496)">
         <div class="container">
             <div class="row d-flex justify-content-center">
                 <div class="menu-content pb-70 col-lg-8">
                     <div class="title text-center">
                         <h1 class="mb-10">Testimonial from our Clients</h1>
                         <p>The French Revolution constituted for the conscience of the dominant aristocratic class a
                             fall from </p>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="active-testimonial">
                     <div class="single-testimonial item d-flex flex-row">
                         <div class="thumb">
                             <img class="img-fluid" src="frontEnd/img/elements/user1.png" alt="">
                         </div>
                         <div class="desc">
                             <p>
                                 Do you want to be even more successful? Learn to love learning and growth. The more
                                 effort you put into improving your skills, the bigger the payoff you.
                             </p>
                             <h4>Harriet Maxwell</h4>
                             <div class="star">
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star"></span>
                             </div>
                         </div>
                     </div>
                     <div class="single-testimonial item d-flex flex-row">
                         <div class="thumb">
                             <img class="img-fluid" src="frontEnd/img/elements/user2.png" alt="">
                         </div>
                         <div class="desc">
                             <p>
                                 A purpose is the eternal condition for success. Every former smoker can tell you just
                                 how hard it is to stop smoking cigarettes. However.
                             </p>
                             <h4>Carolyn Craig</h4>
                             <div class="star">
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star"></span>
                                 <span class="fa fa-star"></span>
                             </div>
                         </div>
                     </div>
                     <div class="single-testimonial item d-flex flex-row">
                         <div class="thumb">
                             <img class="img-fluid" src="frontEnd/img/elements/user1.png" alt="">
                         </div>
                         <div class="desc">
                             <p>
                                 Do you want to be even more successful? Learn to love learning and growth. The more
                                 effort you put into improving your skills, the bigger the payoff you.
                             </p>
                             <h4>Harriet Maxwell</h4>
                             <div class="star">
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star"></span>
                             </div>
                         </div>
                     </div>
                     <div class="single-testimonial item d-flex flex-row">
                         <div class="thumb">
                             <img class="img-fluid" src="frontEnd/img/elements/user2.png" alt="">
                         </div>
                         <div class="desc">
                             <p>
                                 A purpose is the eternal condition for success. Every former smoker can tell you just
                                 how hard it is to stop smoking cigarettes. However.
                             </p>
                             <h4>Carolyn Craig</h4>
                             <div class="star">
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star"></span>
                                 <span class="fa fa-star"></span>
                             </div>
                         </div>
                     </div>
                     <div class="single-testimonial item d-flex flex-row">
                         <div class="thumb">
                             <img class="img-fluid" src="frontEnd/img/elements/user1.png" alt="">
                         </div>
                         <div class="desc">
                             <p>
                                 Do you want to be even more successful? Learn to love learning and growth. The more
                                 effort you put into improving your skills, the bigger the payoff you.
                             </p>
                             <h4>Harriet Maxwell</h4>
                             <div class="star">
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star"></span>
                             </div>
                         </div>
                     </div>
                     <div class="single-testimonial item d-flex flex-row">
                         <div class="thumb">
                             <img class="img-fluid" src="frontEnd/img/elements/user2.png" alt="">
                         </div>
                         <div class="desc">
                             <p>
                                 A purpose is the eternal condition for success. Every former smoker can tell you just
                                 how hard it is to stop smoking cigarettes. However.
                             </p>
                             <h4>Carolyn Craig</h4>
                             <div class="star">
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star"></span>
                                 <span class="fa fa-star"></span>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- End testimonial Area -->

     <!-- Start home-about Area -->
     <section class="home-about-area">
         <div class="container-fluid">
             <div class="row align-items-center justify-content-end">
                 <div class="col-lg-6 col-md-12 home-about-left">
                     <h1>
                         Did not find your Package? <br>
                         Feel free to ask us. <br>
                         We‘ll make it for you
                     </h1>
                     <p>
                         inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct
                         standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on
                         the job is beyond reproach. inappropriate behavior is often laughed.
                     </p>
                     <a href="#" class="primary-btn text-uppercase">request custom price</a>
                 </div>
                 <div class="col-lg-6 col-md-12 home-about-right no-padding">
                     <img class="img-fluid" src="frontEnd/img/about-img.jpg" alt="">
                 </div>
             </div>
         </div>
     </section>
     <!-- End home-about Area -->


     <!-- Start blog Area -->
     {{-- <section class="recent-blog-area section-gap">
         <div class="container">
             <div class="row d-flex justify-content-center">
                 <div class="menu-content pb-60 col-lg-9">
                     <div class="title text-center">
                         <h1 class="mb-10">Latest from Our Blog</h1>
                         <p>With the exception of Nietzsche, no other madman has contributed so much to human sanity as
                             has.</p>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="active-recent-blog-carusel">
                     <div class="single-recent-blog-post item">
                         <div class="thumb">
                             <img class="img-fluid" src="frontEnd/img/b1.jpg" alt="">
                         </div>
                         <div class="details">
                             <div class="tags">
                                 <ul>
                                     <li>
                                         <a href="#">Travel</a>
                                     </li>
                                     <li>
                                         <a href="#">Life Style</a>
                                     </li>
                                 </ul>
                             </div>
                             <a href="#">
                                 <h4 class="title">Low Cost Advertising</h4>
                             </a>
                             <p>
                                 Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A
                                 farmer.
                             </p>
                             <h6 class="date">31st January,2018</h6>
                         </div>
                     </div>
                     <div class="single-recent-blog-post item">
                         <div class="thumb">
                             <img class="img-fluid" src="frontEnd/img/b2.jpg" alt="">
                         </div>
                         <div class="details">
                             <div class="tags">
                                 <ul>
                                     <li>
                                         <a href="#">Travel</a>
                                     </li>
                                     <li>
                                         <a href="#">Life Style</a>
                                     </li>
                                 </ul>
                             </div>
                             <a href="#">
                                 <h4 class="title">Creative Outdoor Ads</h4>
                             </a>
                             <p>
                                 Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A
                                 farmer.
                             </p>
                             <h6 class="date">31st January,2018</h6>
                         </div>
                     </div>
                     <div class="single-recent-blog-post item">
                         <div class="thumb">
                             <img class="img-fluid" src="frontEnd/img/b3.jpg" alt="">
                         </div>
                         <div class="details">
                             <div class="tags">
                                 <ul>
                                     <li>
                                         <a href="#">Travel</a>
                                     </li>
                                     <li>
                                         <a href="#">Life Style</a>
                                     </li>
                                 </ul>
                             </div>
                             <a href="#">
                                 <h4 class="title">It's Classified How To Utilize Free</h4>
                             </a>
                             <p>
                                 Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A
                                 farmer.
                             </p>
                             <h6 class="date">31st January,2018</h6>
                         </div>
                     </div>
                     <div class="single-recent-blog-post item">
                         <div class="thumb">
                             <img class="img-fluid" src="frontEnd/img/b1.jpg" alt="">
                         </div>
                         <div class="details">
                             <div class="tags">
                                 <ul>
                                     <li>
                                         <a href="#">Travel</a>
                                     </li>
                                     <li>
                                         <a href="#">Life Style</a>
                                     </li>
                                 </ul>
                             </div>
                             <a href="#">
                                 <h4 class="title">Low Cost Advertising</h4>
                             </a>
                             <p>
                                 Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A
                                 farmer.
                             </p>
                             <h6 class="date">31st January,2018</h6>
                         </div>
                     </div>
                     <div class="single-recent-blog-post item">
                         <div class="thumb">
                             <img class="img-fluid" src="frontEnd/img/b2.jpg" alt="">
                         </div>
                         <div class="details">
                             <div class="tags">
                                 <ul>
                                     <li>
                                         <a href="#">Travel</a>
                                     </li>
                                     <li>
                                         <a href="#">Life Style</a>
                                     </li>
                                 </ul>
                             </div>
                             <a href="#">
                                 <h4 class="title">Creative Outdoor Ads</h4>
                             </a>
                             <p>
                                 Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A
                                 farmer.
                             </p>
                             <h6 class="date">31st January,2018</h6>
                         </div>
                     </div>
                     <div class="single-recent-blog-post item">
                         <div class="thumb">
                             <img class="img-fluid" src="frontEnd/frontEnd/img/b3.jpg" alt="">
                         </div>
                         <div class="details">
                             <div class="tags">
                                 <ul>
                                     <li>
                                         <a href="#">Travel</a>
                                     </li>
                                     <li>
                                         <a href="#">Life Style</a>
                                     </li>
                                 </ul>
                             </div>
                             <a href="#">
                                 <h4 class="title">It's Classified How To Utilize Free</h4>
                             </a>
                             <p>
                                 Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A
                                 farmer.
                             </p>
                             <h6 class="date">31st January,2018</h6>
                         </div>
                     </div>

                 </div>
             </div>
         </div>
     </section> --}}
     <!-- End recent-blog Area -->

     <!-- start footer Area -->
     <footer class="footer-area section-gap">
         <div class="container">

             <div class="row">
                 <div class="col-lg-3  col-md-6 col-sm-6">
                     <div class="single-footer-widget">
                         <h6>About Agency</h6>
                         <p>
                             The world has become so fast paced that people don’t want to stand by reading a page of
                             information, they would much rather look at a presentation and understand the message. It
                             has come to a point
                         </p>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="single-footer-widget">
                         <h6>Navigation Links</h6>
                         <div class="row">
                             <div class="col">
                                 <ul>
                                     <li><a href="/acceuil">accueil</a></li>
                                     <li><a href="/apropos">apropos</a></li>
                                     <li><a href="/hotel">hotels</a></li>
                                     <li><a href="/bloc">bloc</a></li>
                                     <li><a href="/contact">contact</a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3  col-md-6 col-sm-6">
                     <div class="single-footer-widget">
                         <h6>Newsletter</h6>
                         <p>
                             For business professionals caught between high OEM price and mediocre print and graphic
                             output.
                         </p>
                         <div id="mc_embed_signup">
                             <form target="_blank"
                                 action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                 method="get" class="subscription relative">
                                 <div class="input-group d-flex flex-row">
                                     <input name="EMAIL" placeholder="Email Address"
                                         onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '"
                                         required="" type="email">
                                     <button class="btn bb-btn"><span class="lnr lnr-location"></span></button>
                                 </div>
                                 <div class="mt-10 info"></div>
                             </form>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3  col-md-6 col-sm-6">
                     <div class="single-footer-widget mail-chimp">
                         <h6 class="mb-20">InstaFeed</h6>
                         <ul class="instafeed d-flex flex-wrap">
                             <li><img src="frontEnd/img/i1.jpg" alt=""></li>
                             <li><img src="frontEnd/img/i2.jpg" alt=""></li>
                             <li><img src="frontEnd/img/i3.jpg" alt=""></li>
                             <li><img src="frontEnd/img/i4.jpg" alt=""></li>
                             <li><img src="frontEnd/img/i5.jpg" alt=""></li>
                             <li><img src="frontEnd/img/i6.jpg" alt=""></li>
                             <li><img src="frontEnd/img/i7.jpg" alt=""></li>
                             <li><img src="frontEnd/img/i8.jpg" alt=""></li>
                         </ul>
                     </div>
                 </div>
             </div>

             <div class="row footer-bottom d-flex justify-content-between align-items-center">
                 <p class="col-lg-8 col-sm-12 footer-text m-0">
                     <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                     Copyright &copy;
                     <script>
                         document.write(new Date().getFullYear());
                     </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                         aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                     <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                 </p>
                 <div class="col-lg-4 col-sm-12 footer-social">
                     <a href="#"><i class="fa fa-facebook"></i></a>
                     <a href="#"><i class="fa fa-twitter"></i></a>
                     <a href="#"><i class="fa fa-dribbble"></i></a>
                     <a href="#"><i class="fa fa-behance"></i></a>
                 </div>
             </div>
         </div>
     </footer>
     <!-- End footer Area -->

     @include('frontEnd/layouts.js');
 </body>

 </html>
