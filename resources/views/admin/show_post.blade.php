<!DOCTYPE html>
<html>
  <head>
   @include('admin.css')
   <style type="text/css">
    .title_deg{
font-size:30px;
font-weight:bold;
color:white;
padding:30px;
text-align:center;
    }
    .table_deg{
        border:2px solid white;
        width:100%;
        text-align:center;
        margin-left:80px;
        padding:10px;
    }
    .th_dg{
        border:1px solid white;

        background-color:skyblue;

    }
    .img_deg{
        height:100px;
        width:150px;
        padding:10px;

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

          <h1 class ="title_deg">All Post</h1>

          <table class="table_deg">
            <tr class="th_dg">
                <th>Post title</th>
                <th>Description</th>
                <th>Post by</th>
                <th>Post status</th>
                <th>Usertype</th>
                <th>Image</th>
            </tr>
            @foreach($post as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->description}}</td>
                <td>{{$post->name}}</td>
                <td>{{$post->post_status}}</td>
                <td>{{$post->usertype}}</td>
                <td>
                    <img class="img_deg" src="postimage/{{$post->image}}">
                </td>
            </tr>
@endforeach
            <!-- <tr>
                <td>ABCD</td>
                <td>ABCD</td>
                <td>ABCD</td>
                <td>ABCD</td>
                <td>ABCD</td>
                <td>ABCD</td>
            </tr>
            <tr>
                <td>ABCD</td>
                <td>ABCD</td>
                <td>ABCD</td>
                <td>ABCD</td>
                <td>ABCD</td>
                <td>ABCD</td>
            </tr> -->
          </table>

</div>
       <!-- @include('admin.body') -->
      @include('admin.footer')
</html>
