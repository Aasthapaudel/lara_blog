<div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital">Blog post </h1>
            <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
            <div class="services_section_2">
               <div class="row">

               @foreach($post as $post)

                  <div class="col-md-4">
                     <div><img src="/postimage/{{$post->image}}" class="services_img"></div>
                     <h4 class="image_area">{{$post->title}}

                     </h4>
                     <p>Post by <b>{{$post->name}}</b></p>
                     <div class="btn_main"><a href="#">Review more</a></div>
                  </div>

                  @endforeach
                  <!-- <div class="col-md-4">
                     <div><img src="images/img-2.png" class="services_img"></div>
                     <div class="btn_main active"><a href="#">Hiking</a></div>
                  </div>
                  <div class="col-md-4">
                     <div><img src="images/img-3.png" class="services_img"></div>
                     <div class="btn_main"><a href="#">Camping</a></div>
                  </div> -->
               </div>
            </div>
         </div>
      </div>
