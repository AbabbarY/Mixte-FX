@extends("master.layout")

@section('title')
Accueil
@endsection

@section('style')
<style></style>
@endsection


@section('content')
    <!-- STEP 2 -->

    
    <div class="img visible">
        <div class="bg rev-2">
            <a href="#category rev-3" >Decouvrez Now</a>
        </div>
    </div>

    
         <!-- SHOP BY CATEGORY  -->
         <div class="latest my-5 visible">
          <div class="work rev-2">
              <p >YOUR ARE IN THE RIGHT PLACE</p>
              <a href="#" class="view">View All Product</a>
          </div>
          <div class="product_type">
              <div class="puza visible">
                  <img id='image1' class="image-data rev-3" data-img="../image/pexels-r-fera-432059.jpg">
                  <div class="lien">
                      <a href="{{ route('show.produit.type','homme') }}">View All</a>
                  </div>
                  
              </div>
              <div class="puza visible">
                  <img id='image2' class="image-data rev-3"   data-img="../image/pexels-andrea-piacquadio-972995.jpg">
                  <div class="lien">
                      <a href="{{ route('show.produit.type','femme') }}">View All</a>
                  </div>
              </div>
              <div class="puza visible">
                  <img id='image3' class="image-data rev-3"  data-img="../image/ali-pazani-Wr9YY-tZVwc-unsplash.jpg">
                  <div class="lien">
                      <a href="{{ route('show.produit.type','femme') }}">View All</a>
                  </div>
              </div>
              <div class="puza visible">
                  <img id='image4'  class="image-data rev-3"  data-img="../image/pexels-elias-de-carvalho-1144834.jpg">
                  <div class="lien">
                      <a href="{{ route('show.produit.type','femme') }}">View All</a>
                  </div>
              </div>
              <div class="puza visible">
                  <img id='image5' class="image-data rev-3"  data-img="../image/pexels-spencer-selover-428340.jpg">
                  <div class="lien">
                      <a href="{{ route('show.produit.type','homme') }}">View All</a>
                  </div>
                  
              </div>
              <div class="puza visible">
                  <img id='image6' class="image-data rev-3"  data-img="../image/pexels-andrea-piacquadio-837140.jpg">
                  <div class="lien">
                      <a href="{{ route('show.produit.type','homme') }}">View All</a>
                  </div>
              </div>
          </div>
      </div>

  



    <div class="best mt-3 mb-2 ">
      <p style="text-align: center;letter-spacing: 2px;font-weight: 100;" class="">BEST SELLER</p>
    </div>
    <div class="vibral mb-5  ">
      <div class="black">
         <div class="mkhk visible" >
              <p class="rev-3">𝔗𝔥𝔦𝔫𝔤 𝔖𝔥𝔬𝔭</p>
              <!-- <h1>Lorem ipsum <span>dolor</span> sit amet consectetur</h1> -->
              <h1>𝓜𝓸𝓼𝓽 <span>𝓒𝓵𝓸𝓽𝓱𝓲𝓷𝓰</span> 𝓲𝓷 𝓗𝓸𝓾𝓼𝓮</h1>
              <p class="para rev-4">Lorem ipsum dolor sit amet consectetur adipisicing elit
                  . Delectus excepturi tempora enim perspiciatis
                   repudiandae quaerat molestias ut vel harum au
                  </p>
              <a href="#" class="rev-2">Shop Now</a>

         </div>
      </div>
      <div class="image visible">
         <img id="image7" class="image-data rev-3" data-img="../image/onne-beauty-u8bTCVoJCP8-unsplash.jpg">
      </div>
    </div>
  
  

                 
  

                    <div class="container ">
                      <p style=" text-align: center;letter-spacing: 2px;font-weight: 100;" class="">Nos Products</p>
                      <div class="card_template">
                        
                        @foreach($produits as $produit)
                          <div class="product_card">
                              <div class="card_img">
                                  <img  src="{{asset('./uploads/'.$produit['image'])}}">
                              </div>
                              <div class="type_product">
                                  <p>{{$produit['type']}}</p>
                              </div>
                              <div class="name_product" >
                                  <p>{{$produit['title']}} </p>
                              </div>
                              <div class="prix_product">
                                  <p>{{$produit['prix']}} DH </p>
                              </div>
                              <div class="lien_product">
                                  <a href="{{ route('show.produit.title',$produit['id']) }}">View Product</a>
                              </div>
                          </div>
                          @endforeach
              
                      </div>
                    </div>
                </div></div></div></div></div>
               
                 
      
   
  
      
  
       
  
  
  
  
  
  
<div class="p-3 " >
          
  <div class="slider">
    <div class="slide-track">
  
      <div class="slide">
        <p>ɴɪᴋᴇ</p>
         
      </div>
      <div class="slide">
        <p>sᴇ́ᴢᴀɴᴇ</p>
  
  
         
      </div>
      <div class="slide">
        <p>ᴢᴀʀᴀ</p>
  
        
      </div>
      <div class="slide">
        <p>ʙᴇʀsʜᴋᴀ</p>
  
       
      </div>
      <div class="slide">
        <p>ᴘᴜʟʟ&ʙᴇᴀʀ</p>     
      </div>
  
      <div class="slide">
        <p>ғᴏʀᴇᴠᴇʀ 𝟸𝟷</p>
      </div>
  
      <div class="slide">
        <p>ᴛᴇʀʀᴀɴᴏᴠᴀ</p>
      </div>
     
      <div class="slide">
        <p>ɴɪᴋᴇ</p>
         
      </div>
      <div class="slide">
        <p>sᴇ́ᴢᴀɴᴇ</p>
  
  
         
      </div>
      <div class="slide">
        <p>ᴢᴀʀᴀ</p>
  
        
      </div>
      <div class="slide">
        <p>ʙᴇʀsʜᴋᴀ</p>
  
       
      </div>
      <div class="slide">
        <p>ᴘᴜʟʟ&ʙᴇᴀʀ</p>     
      </div>
  
      <div class="slide">
        <p>ғᴏʀᴇᴠᴇʀ 𝟸𝟷</p>
      </div>
  
      <div class="slide">
        <p>ᴛᴇʀʀᴀɴᴏᴠᴀ</p>
      </div>
  
  
      
  
    </div>
  </div>
  
     </div>
   
  
  
  
  
 <script>
      let work = document.querySelector('.work .view');

      work.addEventListener('mouseover',function(){
          work.classList.add("hover_view")
      })
      work.addEventListener('mouseout',function(){
          work.classList.remove("hover_view")
      })










      let about = document.querySelectorAll(".visible");
      let ratio = .117;

      const option = {
          root:null,
          rootMargin:"0px",
          threshold:ratio
      }


      let callback = function (entries,observe){
          entries.forEach(function(entre){
              if(entre.intersectionRatio > ratio){
                  entre.target.classList.add("visible-show");
                    let imageUrl = entre.target.getAttribute('data-img')
                    if(imageUrl){
                        entre.target.src = imageUrl
                        observe.unobserve(entre.target)
                    }
              }

          })
      }

      const observe = new IntersectionObserver(callback,option);

      about.forEach(function(data){
          observe.observe(data);
        })
        observe.observe(document.querySelector('#image1'));
        observe.observe(document.querySelector('#image2'));
        observe.observe(document.querySelector('#image3'));
        observe.observe(document.querySelector('#image4'));
        observe.observe(document.querySelector('#image5'));
        observe.observe(document.querySelector('#image6'));
        observe.observe(document.querySelector('#image7'));
      
 </script>
  
@endsection