<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-interval="3000">
    
    <div class="carousel-inner" style="width: 100%; margin-top: 9%; text-align: center" >
      @foreach ($sliders as $key => $slider)
          <div class="carousel-item {{$key == 0 ? "active":""}}">
              <img src="{{asset($slider->image_path) }}" style="width: 80%; margin: 0 auto" alt="...">
          </div>
      @endforeach
    </div>

    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>

    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    
  </div>
</div>

