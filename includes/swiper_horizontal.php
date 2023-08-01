<div class="swiper-container reveal"style="padding:2rem">
    <div class="swiper-wrapper">
        <?php
        getAllCustomerData();
        ?>
        <div class="swiper-slide"> <img style="width: 30%;" src="Images/Customers/FX_logo.png"></div>
        <div class="swiper-slide"> <img style="width: 30%;" src="Images/Customers/FX_logo.png"></div>
        <div class="swiper-slide"> <img style="width: 30%;" src="Images/Customers/FX_logo.png"></div>
        <div class="swiper-slide"> <img style="width: 30%;" src="Images/Customers/FX_logo.png"></div>
        <div class="swiper-slide"> <img style="width: 30%;" src="Images/Customers/FX_logo.png"></div>
        <div class="swiper-slide"> <img style="width: 30%;" src="Images/Customers/FX_logo.png"></div>
        <div class="swiper-slide"> <img style="width: 30%;" src="Images/Customers/FX_logo.png"></div>
        <div class="swiper-slide"> <img style="width: 30%;" src="Images/Customers/FX_logo.png"></div>
        <div class="swiper-slide"> <img style="width: 30%;" src="Images/Customers/FX_logo.png"></div>
        <div class="swiper-slide"> <img style="width: 30%;" src="Images/Customers/FX_logo.png"></div>
        <div class="swiper-slide"> <img style="width: 30%;" src="Images/Customers/FX_logo.png"></div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const mySwiper = new Swiper('.swiper-container', {
            direction: 'horizontal', // Set the swiper direction to horizontal
            loop: true, // Enable looping of the slides
            slidesPerView: 10, // Display 5 slides at a time
            spaceBetween: 0, // Set the space between slides to 50 (adjust this value as needed)
            autoplay: {
                delay: 1000, // Set the delay (in milliseconds) between each slide change
                disableOnInteraction: false, // Allow autoplay to continue even when the user interacts with the swiper
            },
            pagination: {
                el: '.swiper-pagination', // Add pagination
            },
        });
    });
</script>
</style><script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>