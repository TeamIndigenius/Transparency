@extends('layouts.app')

@section('content')

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="css/events-list.css">
    <!-- JQUERY: WORD COUNT -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.11/jquery-ui.min.js"></script>

    <h1 id="event-header">EVENTS FOR A.Y. 2017-2018</h1>

    <!--UPDATE 0.1-->
    <div id="add-event-box">
        <label><i class="fa fa-plus"></i><br/>
        <span>Add event</span>
        </label>
    </div>
    <!--END UPDATE 0.1-->

    <!-- MODAL -->
    <!-- add event -->
    <div id="modal-whole-div">
            <div id="modal-div">
                <span id="close-btn">&times;</span>

                <h2>Add Event</h2>

                <form action="/eventlist" method="POST" id="form-validation">
                    {{ csrf_field() }}
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title" placeholder="Enter event title here(Max of 7 words) ..." required autofocus="">

                    <label for="description">Description:</label>
                    <textarea id="description" name="description" rows="5" placeholder="Write a short description. (Max. of 300 words)"></textarea>
                    <!-- <label id="count">Count</label>  -->
                    <p id="count">words left</p>

                    <label for="venue">Venue:</label>
                    <input type="text" id="venue" name="venue" placeholder="Where is the event?" required>

                    <label for="date">Date:</label>
                    <input type="date" id="date" name="date"  required>

                    <label for="time">Time:</label>
                    <input type="time" id="time" name="time" required>

                    <input type="hidden" name="membership_id" value="{{ $membership[0]->id}}">

<!-- How can I add a document on documents table. HUHUHUHU -->
                    <!-- <br/>
                        <input type="file" name="file" multiple>
                    <br/> -->


                    <!-- membership_id -->
                    <!-- <input type="hidden" name="membership_id" value="{{ Auth::user()->id }}"> -->

                    <input type="hidden" name="is_public" value="1">

                    <input type="submit" name="submit" value="Submit" id="submit">
                    
                </form>
            </div>
        </div>
    <!-- END OF MODAL -->

<!-- Dont forget the <a> tag -->

    @forelse($events as $event)
    <a href="{{ url('eventArticle') }}">
        <div class="event-box">
            <!--image goes here-->
            @if(empty($event->DocIsAvailable($event->id)) == 0)
                <img src="/img/no-img.jpg" width="150" height="150"></img>
               
            @else
                <img src="{{ $event->getImage($event->id) }}" width="150" height="150"></img>
                 
            @endif
            <div class="event-title">
                <label>{{ $event->title }}</label>
                <p>{{ $event->date}}</p>

                 <form id="delete-event" action="/eventlist/{{ $event->id }}" method="POST">
                        {{ method_field('delete') }}
                        {{ csrf_field() }}
                        <button><label class="hover-cursor-pointer"><i class="fa fa-trash-o"></i></label></button>
                </form>

            </div>       
        </div>
    </a>
    @empty
        No announcements found.
    @endforelse

    <a href="{{ url('eventArticle') }}">
        <div class="event-box" style="background-color: yellow;">
            
                 <!--image goes here-->
                <img src="forest.jpg">
                <div class="event-title">

                    <label>Prom</label>
                    <p>04-14-2018</p>
                   
                </div>
        </div>
    </a>

    <a href="{{ url('eventArticle') }}">
        <div class="event-box" style="background-color: lightgreen;">
            <!--image goes here-->
            <img src="forest.jpg">
            <div class="event-title">
                <label>Victory Party</label>
                <p>04-06-2018</p>
           
            </div>
        </div>
    </a>

    <a href="{{ url('eventArticle') }}">
        <div class="event-box" style="background-color: powderblue;">
            <!--image goes here-->
            <img src="forest.jpg">
            <div class="event-title">
                <label>E-camp</label>
                <p>02-14-2014</p>
            </div>
        </div>
    </a>

     <div class="event-box"  style="background-color: magenta;">
        <!--image goes here-->
        <img src="forest.jpg">
        <div class="event-title" ">
            <label>Pahampang</label>
            <p>03-17-2018</p>
        </div>
    </div>

    <div class="event-box" style="background-color: powderblue;">
        <!--image goes here-->
        <img src="forest.jpg">
        <div class="event-title">
            <label>Prom</label>
            <p>04-14-2018</p>
        </div>
    </div>

    <div class="event-box" style="background-color: lavender;">
        <!--image goes here-->
        <img src="forest.jpg">
        <div class="event-title">
            <label>Victory Party</label>
            <p>04-06-2018</p>
        </div>
    </div>

    <div class="event-box" style="background-color: teal;">
        <!--image goes here-->
        <img src="forest.jpg">
        <div class="event-title">
            <label>E-camp</label>
            <p>02-14-2014</p>
        </div>
    </div>

    <!-- more ddddiiiiivvvsss -->

     <div class="event-box"  style="background-color: orange;">
        <!--image goes here-->
        <img src="forest.jpg">
        <div class="event-title">
            <label>Pahampang</label>
            <p>03-17-2018</p>
        </div>
    </div>

    <div class="event-box" style="background-color: lightgreen;">
        <!--image goes here-->
        <img src="forest.jpg">
        <div class="event-title">
            <label>Prom</label>
            <p>04-14-2018</p>
        </div>
    </div>

<!-- JAVASCRIPT -->
    <script type="text/javascript" src="js/add-event-modal.js"></script>
    <!-- delete-event-model ain't working it yet -->
    <script type="text/javascript" src="js/delete-event-modal.js"></script>
    <script type="text/javascript" src="js/validation-event.js"></script>





@endsection
