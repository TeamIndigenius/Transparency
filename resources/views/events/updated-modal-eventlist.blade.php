@extends('layouts.app')

@section('content')

	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="css/events-list.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>

    <h1>EVENTS FOR A.Y. 2017-2018</h1>

    <!--UPDATE 0.1-->
    <div id="add-event-box">
        <label><i class="fa fa-plus"></i><br>
        <span>Add event</span>
        </label>
    </div>
    <!--END UPDATE 0.1-->

    <!-- MODAL -->
    <div id="modal-whole-div">
            <div id="modal-div">
                <span id="close-btn">&times;</span>

                <h2>Add Event</h2>

                <form  method="post" action="">
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title" placeholder="Enter event title here ..." value="" required autofocus="">

                    <label for="description">Description:</label>
                    <textarea id="description" name="description" rows="5" placeholder="Write a short description. (Max. of 300 words)"></textarea>
                    <!-- <label id="count">Count</label>  -->
                    <p id="count"></p>

                    <label for="venue">Venue:</label>
                    <input type="text" id="venue" name="venue" placeholder="Where is the event?" value="" required>

                    <label for="date">Date:</label>
                    <input type="date" id="date" name="date" placeholder="2017-12-23" value="">

                    <label for="time">Time:</label>
                    <input type="time" id="time" name="time" placeholder="08:00 AM" value="">

                    <br>
                    <!-- <label id="selectfile-btn"><i class="fa fa-upload"></i> Choose a file... -->
                        <input type="file" name="file" value="" multiple>
                    <!-- </label> -->

                    <br>

                    <input type="submit" name="submit" value="Submit">
                    
                </form>
            </div>
        </div>
    <!-- END OF MODAL -->

<!-- Dont forget the <a> tag -->

    <a href="{{ url('archive') }}">
        <div class="event-box">
            <!--image goes here-->
            <img src="forest.jpg">
            <div class="event-title">
                <label>Pahampang</label>
                <p>03-17-2018</p>
            </div>       
        </div>
    </a>
    <a href="{{ url('archive') }}">
        <div class="event-box" style="background-color: yellow;">
            
                 <!--image goes here-->
                <img src="forest.jpg">
                <div class="event-title">

                    <label>Prom</label>
                    <p>04-14-2018</p>
                </div>
        </div>
    </a>

    <a href="{{ url('archive') }}">
        <div class="event-box" style="background-color: lightgreen;">
            <!--image goes here-->
            <img src="forest.jpg">
            <div class="event-title">
                <label>Victory Party</label>
                <p>04-06-2018</p>
            </div>
        </div>
    </a>

    <a href="{{ url('archive') }}">
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

@endsection