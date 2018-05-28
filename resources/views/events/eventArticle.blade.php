@extends('layouts.standalone')

@section('content')

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="css/events-article.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script type="text/javascript" src="http://code.jquery.com/jquery-3.3.1.js"></script>

    <button id="return-events">
        <a href="{{ url('eventlist') }}">
            <i class="fa fa-caret-left"></i>return 
        </a>
    </button>

    <main id="events-article-main">
        <div id="main-header">
            <label id="event-acad-year"><strong>A.Y. 2017 - 2018</strong></label>
            <div id="main-header-event-title">
                <h1>Prom</h1>
                <label id="event-information">
                    <strong>Date: </strong> April 14
                    <strong>Venue: </strong> MO2 Westown
                </label>
            </div>
        </div>
        <div class="main-event-content">
            <aside id="execom">
                <h4>EXECOM</h4>
            <ul>
                <li><label> Juan Dela Cruz</label>
                    <p class="position">Governor</p>
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

            <section class="event-content">

                <div class="event-image-container">
                    <label>Images</label>

                    <p>No images to display</p>

                    <div class="display-event-images">
                        <div id="add-image-box">
                            <label><i class="fa fa-plus"></i><br/>
                            <span>Add image</span>
                            </label>
                        </div>

                        <!-- MODAL -->
                        <div id="add-image-modal-whole-div">

                            <div id="add-image-modal-div">
                                <span id="close-btn">&times;</span>

                                <h2>Add Image</h2>

                                <!-- limit to images only -->
                                <form action="" method="post" enctype="multipart/form-data" accept="image/*">
                                    <input id="fileupload" type="file" name="image[]" multiple="multiple">
                                    <input type="submit" name="add-img" value="Add">
                                </form>

                                <div id="dvPreview">
                                </div>

                            </div>

                        </div>
                        <!-- END OF MODAL -->

                        <!-- Dont forget the <a> tag -->

                            <div class="image-box">
                                <!--image goes here-->
                                <img src="uploads/media/prom1.jpg">
                            </div>

                            <div class="image-box">
                                <img src="forest.jpg">
                            </div>

                            <div class="image-box">
                                <img src="forest.jpg">
                            </div>

                            <div class="image-box">
                                <img src="forest.jpg">
                            </div>

                         <div class="image-box">
                            <img src="forest.jpg">
                        </div>

                        <div class="image-box">
                            <img src="forest.jpg">
                        </div>

                    </div>
                    <!-- end display-event-images div -->

                </div>
                <!-- end of event image container -->



                <div class="event-doc-container">
                    <label>Files</label>

                    <p>No files to display</p>

                    <!-- limit to docs, pdf -->
                    <form action="" method="POST">
                        <input type="file" name="doc" multiple="">
                        <input type="submit" name="add-doc" value="Add">
                    </form>

                    <a href="uploads/docs/126_lec2_HTML.pdf?iframe=true" target="_blank">126_lec2_HTML.pdf</a>


                    <!-- <a href="uploads/docs/CMSC132_IO.pdf" target="_blank">CMSC132_IO.pdf</a>

                    <a href="uploads/docs/126_lec08_XML.pdf" target="_blank">126_lec08_XML.pdf</a> -->

                </div>
                <!-- end of event doc container -->

            </section>

        </div>
        <!-- end of main event div -->

    </main>

    <script type="text/javascript">
        var modal_div = document.getElementById('add-image-modal-whole-div');

        var add = document.getElementById("add-image-box");

        var exit = document.getElementById("close-btn");

        add.onclick = function()
        {
            modal_div.style.display = "block";
        }

        exit.onclick = function()
        {
            modal_div.style.display = "none";
        }

        // Dont delete this -------------------------------
        window.onclick = function(event)
        {
            if (event.target == modal_div)
            {
                modal_div.style.display = "none";
            }
            else if(event.target == modal_app){ // For app.js @change_password
                modal_app.style.display = "none";
            }
        }
        // ------------------------------------------------


        // ------------------image preview-----------------
        $(function () {
            $("#fileupload").change(function () {
                if (typeof (FileReader) != "undefined") {
                    var dvPreview = $("#dvPreview");
                    dvPreview.html("");
                    var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
                    $($(this)[0].files).each(function () {
                        var file = $(this);
                        if (regex.test(file[0].name.toLowerCase())) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                var img = $("<img />");
                                img.attr("style", "height:100px;width: 100px;");
                                img.attr("src", e.target.result);
                                dvPreview.append(img);
                            }
                            reader.readAsDataURL(file[0]);
                        } else {
                            alert(file[0].name + " is not a valid image file.");
                            dvPreview.html("");
                            return false;
                        }
                    });
                } else {
                    alert("This browser does not support HTML5 FileReader.");
                }
            });
        });
    </script>



@endsection