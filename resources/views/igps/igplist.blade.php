@extends('layouts.app')

@section('content')
    <link rel="stylesheet" type="text/css" href="css/igplist.css">


<!-- Modal for Adding item -->
    <div class="modal-whole-div" id="modal-add-item">
        <div id="modal-add-item-content">           
            <span id="close-btn">&times;</span>
            <h2>Add Item</h2>

            <form method="post" action="">
                <h3>Item Name:</h3>
                <input type="text" name="item-name">

                <h3>Description:</h3>
                <textarea name="description" cols="30" rows="" placeholder="Write description and/or contact details..."></textarea>

                <h3>Price:</h3>
                <input type="text" name="price">

                <h3>Add Photo</h3>
                <input type="image" name="item-image">

                <!-- membership_id -->
                <input type="hidden" name="membership_id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="is_public" value="1">

                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>

<!-- Modal for Viewing item -->
    <div class="modal-whole-div" id="modal-view-item">
        <div id="modal-view-item-content">
            <div id="view-div">
                <!-- <span id="close-btn">&times;</span> -->

                <div id="modal-view-image">
                    <img src="img/transparency_logo.png" >
                </div>

                <div id="modal-view-details">
                    <h2>ELEKTRONS LANTERN PARADE SHIRT</h2>
                    <p>
                        Available shirt color: Black and Orange. For orders or more details, please contact Hannah Paula Jalbuna at 09123456789.
                    </p>
                    <h3>
                        Price: P200.00
                    </h3>
                </div>
            </div>
        </div>
    </div>
<!-- End of Modals -->

    <h1>INCOME-GENERATING PROJECTS</h1>
 <!--    <h2>For orders, you may contact Hannah Jalbuna 09171234567</h2> -->

    <div id="newItem" class="newItem-box">
        <label><i class="fa fa-plus"></i><br>
                <span>Add Item</span>
        </label>
    </div>

    <div class="item-box">
        <img src="" width="150" height="150"></img>
        <div class="item-title">
            <label>Elektrons Lantern Parade T-shirt</label>
            <p>P180.00</p>
        </div>
    </div>

    <div class="item-box">
        <img src="" width="150" height="150"></img>
        <div class="item-title">
            <label>Elektrons Hoodie</label>
            <p>P750.00</p>
        </div>
    </div>

    <div class="item-box">
        <img src="" width="150" height="150"></img>
        <div class="item-title">
            <label>Elektrons Umbrella</label>
            <p>P300.00</p>
        </div>
    </div>

    <div class="item-box">
        <img src="" width="150" height="150"></img>
        <div class="item-title">
            <label>Elektrons Pahampang Jersey</label>
            <p>P800.00</p>
        </div>
    </div>

    <div class="item-box">
        <img src="" width="150" height="150"></img>
        <div class="item-title">
            <label>Elektrons cap</label>
            <p>P300.00</p>
        </div>
    </div>

    <div class="item-box">
        <img src="" width="150" height="150"></img>
        <div class="item-title">
            <label>Skimmers cap</label>
            <p>P300.00</p>
        </div>
    </div>

    <div class="item-box">
        <img src="" width="150" height="150"></img>
        <div class="item-title">
            <label>Clovers cap</label>
            <p>P300.00</p>
        </div>
    </div>

    <div class="item-box">
        <img src="" width="150" height="150"></img>
        <div class="item-title">
            <label>Redbolts cap</label>
            <p>P300.00</p>
        </div>
    </div>
    
    <div class="item-box">
        <img src="" width="150" height="150"></img>
        <div class="item-title">
            <label>Fisheries cap</label>
            <p>P300.00</p>
        </div>
    </div>

    <div class="item-box">
        <img src="" width="150" height="150"></img>
        <div class="item-title">
            <label>Bluechips cap</label>
            <p>P300.00</p>
        </div>
    </div>

<!-- JAVASCRIPT -->
   <!--  <script type="text/javascript" src="js/add-igp-modal.js"></script> -->
    <!-- OKAY na ang Add Item Modal -->

<!-- NOT OKAY: view Item modal -->
    <script type="text/javascript">
        var modal = document.getElementById('modal-view-item');
        // var view = document.getElementsByClassName('item-box');

        // view[0].onclick = function(){
        //     modal.style.display = "block";
        // }

        var viewBtn = document.querySelectorAll('.item-box');
        //Different boxes has different modal content

        [].forEach.call(viewBtn, function(el) {
          el.onclick = function() {
            modal.style.display = "block";
          }
        })

        var exit = document.getElementById("close-btn");

        exit.onclick = function(){
            modal.style.display = "none";
        }

        window.onclick = function(event)
        {
            if (event.target == modal)
            {
                modal.style.display = "none";
            }
        }
    </script>
@endsection