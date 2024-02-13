@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <tr style="color:white;background-color:black">
                            <td>#Id</td>
                            <td>Title</td>
                            <td>Title Img</td>
                           
                            <td>Author</td>
                             <td>Published On</td>
                          <!--  <td>Payment Status</td> -->
                            <td>Blog Status</td>
                            <td>Actions</td>
                            <td>Created At</td>
                            
                        </tr>
                    

                        @forelse ($blogs as $blog)

                        <tr>
                            <td>{{ $blog->blog_id }}</td>
                            <td style="width:300px  ">{{ $blog->blog_title }}</td>
                            <td><img src="{{ $blog->title_img }}" width="100px"/></td>
                         
                            <td>{{ $blog->name }}</td>
                            <td>{{date('F d,Y', strtotime($blog->published_on))}}</td>
                         <!--   <td>
                                
                            @if ($blog->payment_status === 1)
                                   <button class="btn btn-success ">Paid</button>
                                @elseif ($blog->payment_status === 0)
                                <button class="btn btn-danger ">mark as paid</button>
                                @else
                                    
                                @endif


                            </td>

                        -->
                            <td class="c{{ $blog->blog_id }}">      
                            @if ($blog->status === 1)
                                   <button class="btn " style="background-color:#3297f8;color:white" onclick="publish({{ $blog->blog_id }})">published</button>
                                @elseif ($blog->status === 0)
                                <button class="btn  " style="background-color:#b3b3b3;color:white" onclick="unpublish({{ $blog->blog_id }})">unpublished</button>
                                @else
                                    
                                @endif
                            </td>
                            <td>    
                                
                           
                            <a  href="/blog-edit/{{$blog->blog_id}}"  class="btn btn-secondary">Edit</a>
                            <a  href="/crypto-blog/asd_{{$blog->blog_id}}" target="_blank" style="color:#FFFF00;color:black;" class="btn btn-warning">View</a>
                        
                        </td>
                            <td> {{$blog->createdAt}}</td>
                            
                        </tr>

                        @empty
                            <p>No Blogs</p>
                        @endforelse

                        </table>
</br>
{{$blogs->links()}}
     
 





<div class="modal fade" id="modal-id">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
             Update Blog
            </div>
            <div class="modal-body">
                
                <span class="label">Blog Title</span>
                
                <input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
</br>
<span class="label">Title Image</span>
                <input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
                </br>
                <span class="label">Title Video</span>
                <input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
                </br>
                <span class="label">Slug</span>
                <input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary save">Save changes</button>
            </div>
        </div>
    </div>
</div>





<!--
    
        <form action="" class="">

        <input class="form-control" type="text" placeholder="Blog Title" />
        <input class="form-control" type="text" placeholder="Title Image" />
        <input class="form-control" type=   "text" placeholder="Top Keywords (separated by , )" />


                  <textarea name="editor1"></textarea>
              
-->
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

function publish(bid){
    console.log(bid);
    $.post("{{route('blog.publish')}}",
        {
            "_token": "{{ csrf_token() }}",
            bid:bid,
            p:0
        },
        function(data, status){
          $(".c"+bid).html('<button class="btn btn-danger " onclick="unpublish('+bid+')">unpublished</button>');
        });

}


function unpublish(bid){
    console.log(bid);
    $.post("{{route('blog.publish')}}",
        {
            "_token": "{{ csrf_token() }}",
            bid:bid,
            p:1
        },
        function(data, status){
            $(".c"+bid).html('<button class="btn btn-success" onclick="publish('+bid+')">published</button>');
        });

}


</script>