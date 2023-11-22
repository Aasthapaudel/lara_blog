<!DOCTYPE html>
<html>
  <head>


  <base href="/public">
   @include('admin.css')
   <style type="text/css">
        .post_title {
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            padding: 30px;
            color: white;

        }
        .div_center{
            text-align:center;
            padding:30px;

        }
        label{
            display:inline-block;
            width:200px;

        }
        img, video {
    max-width: 30%;
    height: auto
        }
    </style>
  </head>
  <body>
    <header class="header">
      @include('admin.header')
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
        </div>
        <div class="page-content">

        @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}
        </div>
        @endif

        <div class="post_title">Update Post</div>

<form action ="{{url('update_post',$post->id)}}" method="POST" enctype="multipart/form-data">
@csrf
<div class ="div_center">
            <label>Post Title</label>
            <input type="text" name="title" value="{{$post->title}}">

        </div>
        <div class ="div_center">

            <label>Post Description</label>
            <textarea name="description">{{$post->description}}</textarea>

        </div>
        <div class="div_center">
            <label>Old image</label>
            <img style="margin:auto;" height="100px" width="150px" src="/postimage/{{$post->image}}">
        </div>
        <div class ="div_center">
            <label> Update Old Image</label>

            <input type="file" name="image">
        </div>
        <div class ="div_center">

            <input type="submit" class="btn btn-primary">
        </div>
</form>
       <!-- @include('admin.body') -->
      @include('admin.footer')
</html>
