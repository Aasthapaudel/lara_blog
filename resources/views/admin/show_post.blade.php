<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
    <style type="text/css">
        .title_deg {
            font-size: 30px;
            font-weight: bold;
            color: white;
            padding: 30px;
            text-align: center;
        }

        .table_deg {
            border: 2px solid white;
            width: 100%;
            text-align: center;
            margin-left: 80px;
            padding: 10px;
        }

        .th_dg {
            border: 1px solid white;

            background-color: skyblue;

        }

        .img_deg {
            height: 100px;
            width: 150px;
            padding: 10px;

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
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}
        </div>
        @endif
        <h1 class="title_deg">All Post</h1>

        <table class="table_deg">
            <tr class="th_dg">
                <th>Post title</th>
                <th>Description</th>
                <th>Post by</th>
                <th>Post status</th>
                <th>Usertype</th>
                <th>Image</th>
                <th>Delete</th>
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
                <td>
                    <!-- <a href="{{url('delete_post',$post->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to Delete This ?')">Delete</a> -->
                    <a href="{{url('delete_post',$post->id)}}" class="btn btn-danger" onclick="confirmation(event)">Delete</a>
                    <!-- <a href="{{url('delete_post',$post->id)}}" class="btn btn-danger"
                        onclick="confirmation(event)">Delete</a> -->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
      function confirmation(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');
        console.log(urlToRedirect);
        swal({
            title: "Are you sure to Delete this post",
            text: "You will not be able to revert this!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willCancel) => {
            if (willCancel) {



                window.location.href = urlToRedirect;

            }


        });


    }
</script>
</body>
</html>
