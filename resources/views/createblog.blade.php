@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card blog_save">
                <div class="card-header">
                        <h3>Create Blog</h3>
                        
        </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
   <form action="{{route('blog1.saveblog')}}" method="post">
  
                    <input class="form-control " type="hidden" id="bid" />

        <input class="form-control blog_title" name="blog_title" type="text" required placeholder="Blog Title" />
<br/>
<textarea class="form-control video_code" name="video_code" placeholder="Video embded code"></textarea>
<br/>
        <input class="form-control title_url" name="title_url" type="text" placeholder="Title image url" />
        <br/>
        <input class="form-control keywords" name="keywords" type= "text" required placeholder="Top Keywords (separated by , )" />
        <br/>
        <label for="published">Published on date</label>
        <input class="form-control keywords" name="published" id="published_on" type= "date" required  />
        <br/>

                  <textarea  id="blog_content" name="editor1" required class="form-control blog_content"></textarea>

                  <br/>
                  <p class="error" style="color:red;"></p>
                                <button type="submit" class="btn btn-primary btn-sm float-right btnsave">Save</button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
        var a=CKEDITOR.replace('editor1');

        $("form").submit(function(event){
            //blog.saveblog     
        
            event.preventDefault()
            var blog_content=a.getData();
            if(blog_content.length<100){
                $(".error").text("Please enter minimum 100 words");
        
                return false;
            }
    
            $.post("{{route('blog1.saveblog')}}",
            {
                "_token": "{{ csrf_token() }}",
                blog_title: $(".blog_title").val(),
                video: $(".video_code").val(),
                title_img :$(".title_url").val(),
                keywords :$(".keywords").val(),
                published_on:$("#published_on").val(),
                blog :blog_content,
                bid:$("#bid").val()
            },
            function(data, status){
            // alert("Data: " + data + "\nStatus: " + status);
            console.log(data)
            $(".blog_save").html("<h1 class='text-center '>Blog Saved</h1>");
        
            }) .fail(function() {
                $(".error").html("Please remove invalid character from editor.");
  });
            
            console.log("Save hit");
        });
    });

</script>