@extends('layouts.standalone')

@section('content')

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="css/events-article.css">

    <button id="return-events">
                <a href="{{ url('eventlist') }}">
                    <i class="fa fa-caret-left"></i>return 
                </a>
            </button>
            <main id="events-article-main">   
                <header id="main-header">
                    <label><strong> A.Y.</strong><br>2017-2018</label>
                    <div id="main-header-event-title">
                        <h1>
                            Pahampang
                        </h1>
                    </div>
                    <label>
                        <strong>Date</strong>
                        <br>March 12-17<br>
                        <strong>Venue
                        </strong>
                        <br>Marina
                    </label>

                </header>
                <aside>
                    <h3>EXECOM</h3>
                    <ul>
                        <li><label> Juan Dela  Cruz</label>
                            <p class="position">Governor</label>
                        </li>
                        <li><label> Lily Cruz</label>
                            <p class="position">Vice Governor</p>
                        </li>
                        <li><label> Bimb Aquino</label>
                            <p class="position">VG Internal</p>
                        </li>
                        <li><label> Jose Rizal</label>
                            <p class="position">VG External</p>
                        </li>
                        <li><label> Oh Susanna De Roses</label>
                            <p class="position">Secretary</p>
                        </li>
                        <li><label > Apolinario Mabini</label>
                            <p class="position">Asst. Secretary</p>
                        </li>
                        <li><label > Bruno Mars</label>
                            <p class="position">Treasurer</p>
                        </li>
                        <li><label > Maria Makiling</label>
                            <p class="position">Auditor</p>
                        </li>
                        <li><label> Ako Si Lakas</label>
                            <p class="position">Execom</p>
                        </li>
                        <li><label > Ako Si Ganda</label>
                            <p class="position">Execom</p>
                        </li>
                    </ul>
                </aside>

                <picture>
                    <img src="img/covers/clovers.png">
                </picture>

                <section>
                    <div><a href="Maxwell.pdf" target="_blank">
                        <label><i class="fa fa-download"></i></label>
                        <p>preview</p></a>
                    </div>

                    <div>
                        <label>Pahampang.pdf</label>
                        <p>Uploaded yesterday</p>
                    </div>

                </section>
                
              
            </main>

@endsection