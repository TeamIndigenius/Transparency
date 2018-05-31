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

    <main id="events-article-main">

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
                                <form action="/eventArticle" method="post" enctype="multipart/form-data" accept="image/*" id="imageUpload">
                                    {{csrf_field()}}
                                    <input id="imageupload" type="file" name="file_name">
                                    <input type="submit" name="add-img" value="Add">
                                </form>

                                <div id="imagePreview">
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
                    <div id="filePreview">
                        
                    </div>

                    <form action="/eventArticle" method="POST" enctype="multipart/form-data" id="fileUpload">
                        {{csrf_field()}}
                        <label id="btn-doc-upload">
                           Choose File <input id="fileupload" type="file" name="file_name"  accept=".pdf,.doc,.docx">
                        </label>    
                        <input id="addDoc" type="submit" name="add-doc" value="Upload">
                    </form>

                    

                    <br>
                    <div id="display-event-docs">
                        <a href="uploads/docs/126_lec2_HTML.pdf?iframe=true" target="_blank">126_lec2_HTML.pdf</a> <br>
                        <a href="uploads/docs/CMSC132_IO.pdf" target="_blank">CMSC132_IO.pdf</a> <br>
                        <a href="uploads/docs/126_lec08_XML.pdf" target="_blank">126_lec08_XML.pdf</a> <br>
                        <a href="uploads/docs/BNF.docx" target="_blank">BNF.docx</a>
                    </div>
                    

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
            $("#imageupload").change(function () {
                if (typeof (FileReader) != "undefined") {
                    var dvPreview = $("#imagePreview");
                    dvPreview.html("");
                    var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.png)$/;
                    $($(this)[0].files).each(function () {
                        var file = $(this);
                        if (regex.test(file[0].name.toLowerCase())) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                var img = $("<img />");
                                img.attr("style", "height:150px;width: 150px;display:inline;");
                                img.attr("src", e.target.result);
                                dvPreview.append(img);
                            }
                            reader.readAsDataURL(file[0]);
                        } else {
                            alert("Upload only jpeg, jpg, png files");
                            dvPreview.html("");
                            imageUpload.reset();
                            return false;
                        }
                    });
                } else {
                    alert("This browser does not support HTML5 FileReader.");
                }
            });
        });

        $(function () {
            $("#fileupload").change(function () {
                if (typeof (FileReader) != "undefined") {
                    var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.pdf|.doc|.docx)$/;
                    $($(this)[0].files).each(function () {
                        var file = $(this);
                        if (regex.test(file[0].name.toLowerCase())) {
                            return true;
                        } else {
                            alert("Upload only pdf, doc, docx files");
                            fileUpload.reset();
                            return false;
                        }
                    });
                }
            });
        });

        // var selDiv = "";
        
        // document.addEventListener("DOMContentLoaded", init, false);
        
        // function init() {
        //     document.querySelector('#fileupload').addEventListener('change', handleFileSelect, false);
        //     selDiv = document.querySelector("#filePreview");
        // }
            
        // function handleFileSelect(e) {
            
        //     if(!e.target.files) return;
            
        //     selDiv.innerHTML = "";
            
        //     var files = e.target.files;
        //     for(var i=0; i<files.length; i++) {
        //         var f = files[i];
                
        //         selDiv.innerHTML += f.name + "<br/>";

        //     }
            
        // }
    </script>



@endsection