<swiper-container class="mySwiper reveal" pagination="true" pagination-clickable="false" direction="vertical"
    space-between="200" mousewheel="true">
    <?php
        getAllOurWork();
    ?>
  </swiper-container>
  <style>
.swiperWrap-vertical{
            height:55rem; 
            padding-top: 4rem;
        }
swiper-container {
      width: 100%;
      height: 100%;
    }
    swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    /*vertical swiper*/
    @media (max-width: 1380px) {
        .swiperWrap-vertical{
            height:45rem; 
            padding-top: 4rem;
        }
       
    }
    @media (max-width: 1110px) {
        .swiperWrap-vertical{
            height:35rem; 
            padding-top: 4rem;
        }
       
    }
    @media (max-width: 975px) {
        .swiperWrap-vertical{
            height: 30rem; 
            padding-top: 4rem;
        }
       
    }
    @media (max-width: 750px) {
        .swiperWrap-vertical{
            height: 25rem; 
            padding-top: 4rem;
        }
       
    }
    @media (max-width: 600px) {
        .swiperWrap-vertical{
            height: 20rem; 
            padding-top: 4rem;
        }
        .vertical-img{
            padding: 1rem !important;
        }
       
    }
    @media (max-width: 550px) {
        .swiperWrap-vertical{
            height: 15rem; 
            padding-top: 4rem;
        }
        .vertical-img{
            padding: 1rem !important;
        }
       
    }
    @media (max-width: 400px) {
        .swiperWrap-vertical{
            height: 13rem; 
            padding-top: 4rem;
        }
        .vertical-img{
            padding: 1rem !important;
        }
       
    }
    @media (max-width: 350px) {
        .swiperWrap-vertical{
            height: 11rem; 
            padding-top: 4rem;
        }
        .vertical-img{
            padding: 0rem !important;
        }
    }

  </style><script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>