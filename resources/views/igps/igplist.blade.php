@extends('layouts.app')

@section('content')
<head>
<link rel="stylesheet" type="text/css" href="css/igplist.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<?php 
    $isExecom = DB::table('positions')
        ->join('memberships', 'positions.id', '=','memberships.position_id')
        ->join('users', 'memberships.user_id', '=', 'users.id')
        ->where('users.id', Auth::user()->id)
        ->select('positions.is_execom')
        ->value('is_execom');
?>
<!-- Modal for Adding item -->
@if($isExecom)
    <div class="modal-whole-div" id="modal-add-item">
        <div id="modal-add-item-content">           
            <span id="close-btn">&times;</span>
                <h2>Add Item</h2>
                    <form action="/igps" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <h3>Item Name: </h3>
                        <span id="nameMsg" name="nameMsg"></span>
                        <input type="text" id="item_name" name="item_name" required autofocus>

                        <h3>Description:</h3>
                        <span id="descMsg" name="descMsg"></span>
                        <textarea class="form-control" id="description" name="description" cols="30" rows="" maxlength="200" placeholder="Maximum of 200 characters" required autofocus></textarea>

                        <h3>Price:</h3>
                        <span id="priceMsg" name="priceMsg"></span>
                        <input type="text" id="price" name="price" required autofocus>
                        <br>

                        <h3>Add Photo</h3><br>
                        <input type="file" name="item_image" required autofocus>

                        <br><br>
                        <input type="submit" name="submit" value="Submit" class="hover-cursor-pointer">
                    </form>
        </div>
    </div>
@endif

<!-- Modal for Viewing item -->
<h1>INCOME-GENERATING PROJECTS</h1>
@if($isExecom)
<div id="newItem" class="newItem-box">
        <label><i class="fa fa-plus"></i><br>
                <span>Add Item</span>
        </label>
</div>
@endif

@forelse($igps as $igp)
<!-- End of Modals -->
<!-- Display the items -->
    <!-- iterate through the IGPs -->
    <a class="hover-cursor-pointer" onclick="viewModal({{ $igp->id }})">
        <div class="item-box">
            <img src="{{ $igp->getImage($igp->doc_id) }}"></img>
            <div class="item-title">
                <label>{{ $igp->title }}</label>
                <label>Price: {{ $igp->price }}</label>
            </div>
            @if($isExecom)
                <div class="buttons">
                <button type="button" class="editButton"><a id="editItem" class="hover-cursor-pointer" onclick="editModal({{ $igp->id }})"><i class="fa fa-edit"></i></a></button>

                <button id="deleteButton" class="deleteButton"><i class="fa fa-trash-o" onclick="deleteModal({{ $igp->id }})"></i></button>  
                </div>
            @endif
        </div>
    </a>    

    <!-- View more details -->
    <div class="modal-whole-div" id="modal-view-{{ $igp->id }}">
        <div id="modal-view-item-content">
            <div id="view-div">
                <!-- <span id="close-btn">&times;</span> -->
                <div id="modal-view-image">
                    <img src="{{ $igp->getImage($igp->doc_id) }}">
                </div>
                <div id="modal-view-details">
                    <h2>{{ $igp->title }}</h2>
                    <h3>Price: {{ $igp->price }}</h3>
                    <p>{{ $igp->content }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for confirm deletion -->
    <div class="modal-confirm-div" id="modal-confirm-{{ $igp->id }}">
        <h3>CONFIRM DELETE</h3>
        Are you sure you want to delete?
        <br><br>
        <form id="form-c-delete" action="/igps/{{ $igp->id }}" method="POST">
            {{ method_field('delete') }}
            {{ csrf_field() }}
            <button class="yesButton" id="yesButton"><i class="fa fa-check"></i></button>
        </form>
        <button class="noButton" id="noButton" onclick="closeModal({{ $igp->id }})"><i class="fa fa-remove"></i></button>        
    </div>  

    <!-- Modal for edit -->
    <div class="modal-whole-div" id="modal-edit-{{ $igp->id }}">
        <div id="modal-add-item-content">
            <span id="edit-close-btn">&times;</span>
            <h2>Edit IGP</h2>
            <form action="/igps/{{ $igp->id }}" method="POST" enctype="multipart/form-data">   
                {{ method_field('put') }}
                {{ csrf_field() }}
                <h3>Item Name:</h3>
                <input id="edit-name" type="text" name="edit_name" value="{{ $igp->title }}" required autofocus>

                <h3>Description:</h3>
                <textarea name="edit_description" cols="30" rows="" maxlength="200">{{ $igp->content }}</textarea>

                <h3>Price:</h3>
                <input type="text" name="edit_price" value="{{ $igp->price }}" required autofocus>
                <br>

                <h3>Edit Photo</h3><br>
                <input type="file" name="edit_image" required autofocus>

                <br><br>

                <input type="submit" name="submit" value="Update" class="hover-cursor-pointer">
            </form>
        </div>
    </div>  
    @empty
        No IGPs found.
@endforelse
<script type="text/javascript" src="js/igp.js"></script>
@endsection