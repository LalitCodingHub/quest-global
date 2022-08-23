@extends('default')

@section('content')

          <!-- slideshow carousel -->

          <div class="slideshow-container">
            <div class="mySlides fade">
              <img
                src="https://assets.myntassets.com/f_webp,w_980,c_limit,fl_progressive,dpr_2.0/assets/images/2021/7/19/bc0bb077-6ca5-414f-a30a-b7f8e4e2e8c11626700392540-H-N_Desk_Banner--1-.jpg"
                style="width: 100%"
              />
            </div>
    
            <div class="mySlides fade">
              <img
                src="https://assets.myntassets.com/f_webp,w_980,c_limit,fl_progressive,dpr_2.0/assets/images/2021/7/19/0561c26e-e90f-49e4-ba4f-3158a97179f21626700545599-Occasion_wear_Desk.jpg"
                style="width: 100%"
              />
            </div>
    
            <div class="mySlides fade">
              <img
                src="https://assets.myntassets.com/f_webp,w_980,c_limit,fl_progressive,dpr_2.0/assets/images/2021/7/19/53a9d49b-85d7-40d4-a393-98435d3d04e31626700661018-cat-fest-dk-april.jpg"
                style="width: 100%"
              />
            </div>
    
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
          </div>
          <br />
    
          <div style="text-align: center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
          </div>
    
          <div class="text-banner-container">
            <h4 class="text-banner-title">Available Products</h4>
          </div>
          <div class="img-link-container">
            @foreach($products as $pro)
              <a class="each-product" href="{{route('showproductdetails',$pro['id'])}}">
                <div>
                  {{-- {{dd(asset('images/'.$pro->productimage['image']))}}   --}}
                  @if (isset($pro->productimage->image))
                  <img href="{{route('showproductdetails',$pro['id'])}}" src="{{ asset('images/'.$pro->productimage->image) }}" alt="" />
                  @else
                  <img href="{{route('showproductdetails',$pro['id'])}}" src="{{ asset('images/default.jpg') }}" alt="" />
                  @endif
                  <div class="brand">{{$pro['name']}}</div>
                  <div class="name">{{$pro['description']}}</div>
                  <div class="price">Rs. {{$pro['price']}}</div>
                  {{-- <div class="newdiv">
                    <button class="homecartbtn" href="{{route('')}}">
                      <img src="{{asset('images/bag.svg')}}">ADD TO BAG
                    </button>
                  </div> --}}
                </div>
              </a>
            @endforeach
        </div>
          <!-- BIGGEST DEALS ON TOP BRANDS -->
          <div class="text-banner-container">
            <h4 class="text-banner-title">BIGGEST DEALS ON TOP BRANDS</h4>
          </div>
    
          <div class="img-link-container">
            <a href=""
              ><img
                src="https://assets.myntassets.com/f_webp,w_196,c_limit,fl_progressive,dpr_2.0/assets/images/2020/11/14/6e0a9fa0-9e8d-4c29-9250-995c9f1ba9331605363273176-Home---U.S.-Polo-Assn..jpg"
                alt=""
            /></a>
            <a href=""  
              ><img
                src="https://assets.myntassets.com/f_webp,w_196,c_limit,fl_progressive,dpr_2.0/assets/images/2020/8/31/e72c82f2-cfd5-4f9a-b1b0-ba9e2b3e51251598892519506-W.jpg"
                alt="" /></a
            ><a href=""
              ><img
                src="https://assets.myntassets.com/f_webp,w_196,c_limit,fl_progressive,dpr_2.0/assets/images/2020/11/14/0524cbd5-f034-4155-9e3b-336c4e530ee41605363272658-Home---Levis.jpg"
                alt="" /></a
            ><a href=""
              ><img
                src="https://assets.myntassets.com/f_webp,w_196,c_limit,fl_progressive,dpr_2.0/assets/images/2020/8/31/64ecc170-58af-473f-8144-b1639895a8291598892519457-Veromodo.jpg"
                alt="" /></a
            ><a href=""
              ><img
                src="https://assets.myntassets.com/f_webp,w_196,c_limit,fl_progressive,dpr_2.0/assets/images/2020/8/31/af31285e-f6a3-426e-bbea-0aedef9da17c1598892377537-Tommy-Hilfiger.jpg"
                alt=""
            /></a>
            <a href=""
              ><img
                src="https://assets.myntassets.com/f_webp,w_196,c_limit,fl_progressive,dpr_2.0/assets/images/retaillabs/2020/9/4/e6c7a718-acc0-4aa6-b04c-470ab139d66c1599230080722-F21--4-.jpg"
                alt=""
            /></a>
            <a href=""
              ><img
                src="https://assets.myntassets.com/f_webp,w_196,c_limit,fl_progressive,dpr_2.0/assets/images/2020/11/14/d5c17859-f366-4a65-ab42-5a066254feaa1605363272474-Home---GAP.jpg"
                alt="" /></a
            ><a href=""
              ><img
                src="https://assets.myntassets.com/f_webp,w_196,c_limit,fl_progressive,dpr_2.0/assets/images/2020/11/14/5544cd64-d95b-461d-802a-8025fdfeb3331605363272844-Home---Nike.jpg"
                alt="" /></a
            ><a href=""
              ><img
                src="https://assets.myntassets.com/f_webp,w_196,c_limit,fl_progressive,dpr_2.0/assets/images/2020/8/31/8d5afb84-a464-40af-9971-2e9f0827e9b71598892377591-UCB.jpg"
                alt="" /></a
            ><a href=""
              ><img
                src="https://assets.myntassets.com/f_webp,w_196,c_limit,fl_progressive,dpr_2.0/assets/images/2020/8/31/581e2bf6-6d47-4a4b-a11f-43200dc9c6791598892519362-Puma.jpg"
                alt=""
            /></a>
          </div>
    
          <!-- CATEGORIES TO BAG -->
          <div class="text-banner-container">
            <h4 class="text-banner-title">CATEGORIES TO BAG</h4>
          </div>
    
          <div class="img-link-container-2">
            <a href="products.html"
              ><img
                src="https://assets.myntassets.com/f_webp,w_163,c_limit,fl_progressive,dpr_2.0/assets/images/2020/7/8/89f1bd9d-3a28-456d-888a-beff717a06f81594222908155-Shirts.jpg"
                alt=""
            /></a>
            <a href=""
              ><img
                src="https://assets.myntassets.com/f_webp,w_163,c_limit,fl_progressive,dpr_2.0/assets/images/2020/7/8/9ff1f34e-9242-47fd-9566-e7d7a5c240511594222908483-T-shirt.jpg"
                alt="" /></a
            ><a href=""
              ><img
                src="https://assets.myntassets.com/f_webp,w_163,c_limit,fl_progressive,dpr_2.0/assets/images/2020/7/8/720cf6ef-3be4-4825-8211-0125c942e3821594222907960-Jeans.jpg"
                alt=""
            /></a>
    
            <a href=""
              ><img
                src="https://assets.myntassets.com/f_webp,w_163,c_limit,fl_progressive,dpr_2.0/assets/images/2020/7/8/2bac5e2d-337b-42c0-88c7-3d4e2dc464141594222908262-Shorts-_-Trousers.jpg"
                alt=""
            /></a>
    
            <a href=""
              ><img
                src="https://assets.myntassets.com/f_webp,w_163,c_limit,fl_progressive,dpr_2.0/assets/images/2020/7/8/ae14f627-9fd9-41ce-80a4-f107c316c7eb1594222907625-Casual-shoes.jpg"
                alt=""
            /></a>
    
            <a href=""
              ><img
                src="https://assets.myntassets.com/f_webp,w_163,c_limit,fl_progressive,dpr_2.0/assets/images/2020/7/8/f0f9b81a-b9d5-4b8b-94d5-ea878fa9b18e1594222834121-Infant-Essential.jpg"
                alt=""
            /></a>
    
            <a href=""
              ><img
                src="https://assets.myntassets.com/f_webp,w_163,c_limit,fl_progressive,dpr_2.0/assets/images/2020/7/8/8d992d81-49e6-4dec-89a4-49a8af8beb5d1594222967220-Kurtas-_-Kurta-Sets.jpg"
                alt=""
            /></a>
            <a href=""
              ><img
                src="https://assets.myntassets.com/f_webp,w_163,c_limit,fl_progressive,dpr_2.0/assets/images/2020/7/8/a048cca8-7b5d-417e-9645-ca98f4b6e52c1594222967506-Sarees.jpg"
                alt="" /></a
            ><a href=""
              ><img
                src="https://assets.myntassets.com/f_webp,w_163,c_limit,fl_progressive,dpr_2.0/assets/images/2020/7/8/b0f459a0-9ef0-4392-a9ed-23892a36e79c1594222966859-Dresses.jpg"
                alt=""
            /></a>
    
            <a href=""
              ><img
                src="https://assets.myntassets.com/f_webp,w_163,c_limit,fl_progressive,dpr_2.0/assets/images/2020/7/8/a4dedaa4-3710-4061-b7d6-ca8c83ce9d021594222967117-Heels.jpg"
                alt=""
            /></a>
    
            <a href=""
              ><img
                src="https://assets.myntassets.com/f_webp,w_163,c_limit,fl_progressive,dpr_2.0/assets/images/2020/7/8/a352f908-57c8-4c66-b052-18137cf15e6c1594222967074-Handbags.jpg"
                alt=""
            /></a>
    
            <a href=""
              ><img
                src="https://assets.myntassets.com/f_webp,w_163,c_limit,fl_progressive,dpr_2.0/assets/images/2020/7/8/18eb31db-8dcb-4efa-b92d-61c8ebe0ee811594222834368-Shorts.jpg"
                alt=""
            /></a>
          </div>
    
          <!-- EXPLORE TOP BRANDS -->
    
          <div class="text-banner-container">
            <h4 class="text-banner-title">EXPLORE TOP BRANDS</h4>
          </div>
    
          <div class="img-link-container">
            <a href=""
              ><img
                src="https://assets.myntassets.com/f_webp,w_196,c_limit,fl_progressive,dpr_2.0/assets/images/2020/8/25/a88b9390-5adb-493b-a1b3-702c59ccf53a1598348260502-Nike.jpg"
                alt=""
            /></a>
            <a href=""
              ><img
                src="https://assets.myntassets.com/f_webp,w_196,c_limit,fl_progressive,dpr_2.0/assets/images/2020/8/25/c9f66558-feab-4d76-aa3c-adc68d81dce21598348260415-Levis.jpg"
                alt="" /></a
            ><a href=""
              ><img
                src="https://assets.myntassets.com/f_webp,w_196,c_limit,fl_progressive,dpr_2.0/assets/images/2020/8/5/178c1e5d-69f2-402f-a2a5-ef44700a0f691596640983793-Roadster---.jpg"
                alt="" /></a
            ><a href=""
              ><img
                src="https://assets.myntassets.com/f_webp,w_196,c_limit,fl_progressive,dpr_2.0/assets/images/2020/8/25/085719b1-c71e-4f47-950c-9a6b7f291fac1598348260370-Jack-_-Jones.jpg"
                alt="" /></a
            ><a href=""
              ><img
                src="https://assets.myntassets.com/f_webp,w_196,c_limit,fl_progressive,dpr_2.0/assets/images/2020/8/5/774f42c4-f459-4514-9b90-cf8a60a5f68c1596644478087-hrx30.jpg"
                alt=""
            /></a>
            <a href=""
              ><img
                src="https://assets.myntassets.com/f_webp,w_196,c_limit,fl_progressive,dpr_2.0/assets/images/2020/8/25/f6e40444-b1a4-4c91-bb3c-fe213356e7de1598348260541-Only.jpg"
                alt=""
            /></a>
            <a href=""
              ><img
                src="https://assets.myntassets.com/f_webp,w_196,c_limit,fl_progressive,dpr_2.0/assets/images/2020/8/5/a6de806a-b58b-460b-97fd-d78d80eab39b1596641021693-Women-s-Ethnic-Wear_Anouk.jpg"
                alt="" /></a
            ><a href=""
              ><img
                src="https://assets.myntassets.com/f_webp,w_196,c_limit,fl_progressive,dpr_2.0/assets/images/2020/8/25/8d13b55d-a6a0-40ae-b39f-16f43e7911681598348260460-MAC.jpg"
                alt="" /></a
            ><a href=""
              ><img
                src="https://assets.myntassets.com/f_webp,w_196,c_limit,fl_progressive,dpr_2.0/assets/images/2020/8/25/046ab589-87d5-4afa-8ab3-10e06fdbe6a61598348260596-W.jpg"
                alt="" /></a
            ><a href=""
              ><img
                src="https://assets.myntassets.com/f_webp,w_196,c_limit,fl_progressive,dpr_2.0/assets/images/2020/8/25/f2fdda02-423c-4f11-8f1b-618ba807e5841598348260323-H_M.jpg"
                alt=""
            /></a>
          </div>

@endsection