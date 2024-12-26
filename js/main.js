

'use strict';

(function ($) {

    /*------------------
        Preloader
    --------------------*/
    $(window).on('load', function () {
        $(".loader").fadeOut();
        $("#preloder").delay(200).fadeOut("slow");

        /*------------------
            Gallery filter
        --------------------*/
        $('.featured__controls li').on('click', function () {
            $('.featured__controls li').removeClass('active');
            $(this).addClass('active');
        });
        if ($('.featured__filter').length > 0) {
            var containerEl = document.querySelector('.featured__filter');
            var mixer = mixitup(containerEl);
        }
    });

    /*------------------
        Background Set
    --------------------*/
    $('.set-bg').each(function () {
        var bg = $(this).data('setbg');
        $(this).css('background-image', 'url(' + bg + ')');
    });

    //Humberger Menu
    $(".humberger__open").on('click', function () {
        $(".humberger__menu__wrapper").addClass("show__humberger__menu__wrapper");
        $(".humberger__menu__overlay").addClass("active");
        $("body").addClass("over_hid");
    });

    $(".humberger__menu__overlay").on('click', function () {
        $(".humberger__menu__wrapper").removeClass("show__humberger__menu__wrapper");
        $(".humberger__menu__overlay").removeClass("active");
        $("body").removeClass("over_hid");
    });

    /*------------------
		Navigation
	--------------------*/
    $(".mobile-menu").slicknav({
        prependTo: '#mobile-menu-wrap',
        allowParentLinks: true
    });

    /*-----------------------
        Categories Slider
    ------------------------*/
    $(".categories__slider").owlCarousel({
        loop: true,
        margin: 0,
        items: 4,
        dots: false,
        nav: true,
        navText: ["<span class='fa fa-angle-left'><span/>", "<span class='fa fa-angle-right'><span/>"],
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true,
        responsive: {

            0: {
                items: 1,
            },

            480: {
                items: 2,
            },

            768: {
                items: 3,
            },

            992: {
                items: 4,
            }
        }
    });


    // $('.hero__categories__all').on('click', function(){
    //     $('.hero__categories ul').slideToggle(400);
    // });
    $('.hero__search__categories').on('click', function(){
        $('.hero__search ul').slideToggle(400);
    });
    /*--------------------------
        Latest Product Slider
    ----------------------------*/
    $(".latest-product__slider").owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        dots: false,
        nav: true,
        navText: ["<span class='fa fa-angle-left'><span/>", "<span class='fa fa-angle-right'><span/>"],
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true
    });

    /*-----------------------------
        Product Discount Slider
    -------------------------------*/
    $(".product__discount__slider").owlCarousel({
        loop: true,
        margin: 0,
        items: 4,
        dots: true,
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true,
        responsive: {

            320: {
                items: 1,
            },

            480: {
                items: 2,
            },

            768: {
                items: 3,
            },

            992: {
                items: 4,
            }
        }
    });

    /*---------------------------------
        Product Details Pic Slider
    ----------------------------------*/
    $(".product__details__pic__slider").owlCarousel({
        loop: true,
        margin: 20,
        items: 4,
        dots: true,
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true
    });

    /*-----------------------
		Price Range Slider
	------------------------ */
    var rangeSlider = $(".price-range"),
        minamount = $("#minamount"),
        maxamount = $("#maxamount"),
        minPrice = rangeSlider.data('min'),
        maxPrice = rangeSlider.data('max');
    rangeSlider.slider({
        range: true,
        min: minPrice,
        max: maxPrice,
        values: [minPrice, maxPrice],
        slide: function (event, ui) {
            minamount.val('$' + ui.values[0]);
            maxamount.val('$' + ui.values[1]);
        }
    });
    minamount.val('$' + rangeSlider.slider("values", 0));
    maxamount.val('$' + rangeSlider.slider("values", 1));

    /*--------------------------
        Select
    ----------------------------*/
    $("select").niceSelect();

    /*------------------
		Single Product
	--------------------*/
    $('.product__details__pic__slider img').on('click', function () {

        var imgurl = $(this).data('imgbigurl');
        var bigImg = $('.product__details__pic__item--large').attr('src');
        if (imgurl != bigImg) {
            $('.product__details__pic__item--large').attr({
                src: imgurl
            });
        }
    });

    /*-------------------
		Quantity change
	--------------------- */
    var proQty = $('.pro-qty');
    proQty.prepend('<span class="dec qtybtn">-</span>');
    proQty.append('<span class="inc qtybtn">+</span>');
    proQty.on('click', '.qtybtn', function () {
        var $button = $(this);
        var oldValue = $button.parent().find('input').val();
        if ($button.hasClass('inc')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find('input').val(newVal);
    });

})(jQuery);


const accordionContent = document.querySelectorAll(".accordion-content");
        
        accordionContent.forEach((item,index)=>{
        let header = item.querySelector("header");
        header.addEventListener("click", ()=>{
            item.classList.toggle("is-open");
        
            let description = item.querySelector(".accordion-content-description");
            if(item.classList.contains("is-open")){
            	// Scrollheight property return the height of
                // an element including padding
                description.style.height=`${description.scrollHeight}px`; 
                item.querySelector("i").classList.replace("fa-plus","fa-minus");
            }else{
                description.style.height = "0px";
                item.querySelector("i").classList.replace("fa-minus","fa-plus");
            }
            // function to pass the index number of clicked header
            removeOpenedContent(index); 
        })
        })
        
        function removeOpenedContent(index){
        accordionContent.forEach((item2,index2)=>{
            if(index != index2){
                item2.classList.remove("is-open");
                let descrip = item2.querySelector(".accordion-content-description");
                descrip.style.height="0px";
                item2.querySelector("i").classList.replace("fa-minus","fa-plus");
            }
        })
        }
        document.addEventListener("DOMContentLoaded", function () {
            const gridButton = document.getElementById("grid-view");
            const listButton = document.getElementById("list-view");
            const productContainer = document.querySelector(".product-container");
          
            // Function to switch to grid view
            gridButton.addEventListener("click", function () {
              productContainer.classList.remove("list-view");
              productContainer.classList.add("grid-view");
          
              gridButton.classList.add("active");
              listButton.classList.remove("active");
            });
          
            // Function to switch to list view
            listButton.addEventListener("click", function () {
              productContainer.classList.remove("grid-view");
              productContainer.classList.add("list-view");
          
              listButton.classList.add("active");
              gridButton.classList.remove("active");
            });
          });





          $(document).ready(function () {
            // Initialize the main image slider
            const mainSlider = $(".product__details__pic__item").owlCarousel({
              items: 1, // Single image display
              loop: true,
              nav: false,
              dots: false,
              autoplay: true, // Enable autoplay
              autoplayTimeout: 3000, // Time between slides (5 seconds)
              autoplayHoverPause: true, // Pause on hover
              smartSpeed: 1000, // Transition speed in milliseconds (1 second)
            });
          
            // Initialize the thumbnail slider
            const thumbSlider = $(".product__details__pic__slider").owlCarousel({
              items: 4,
              loop: false,
              margin: 10,
              nav: false,
              dots: false,
            });
          
            // Sync thumbnails with the main slider
            $(".product__details__pic__slider img").on("click", function () {
              const index = $(this).parent().index(); // Get thumbnail index
              mainSlider.trigger("to.owl.carousel", [index, 300]); // Slide to the image
            });
          
            // Highlight the active thumbnail when the main slider changes
            mainSlider.on("changed.owl.carousel", function (event) {
              const index = event.item.index;
              $(".product__details__pic__slider img").removeClass("active");
              $(".product__details__pic__slider img")
                .eq(index % $(".product__details__pic__slider img").length)
                .addClass("active");
            });
          });



          document.addEventListener("DOMContentLoaded", () => {
            const gridTab = document.getElementById("grid-tab");
            const listTab = document.getElementById("list-tab");
            const productContainer = document.getElementById("category-container");
          
            gridTab.addEventListener("click", () => {
              productContainer.classList.remove("list-view");
              productContainer.classList.add("grid-view");
              gridTab.classList.add("active");
              listTab.classList.remove("active");
            });
          
            listTab.addEventListener("click", () => {
              productContainer.classList.remove("grid-view");
              productContainer.classList.add("list-view");
              listTab.classList.add("active");
              gridTab.classList.remove("active");
            });
          });

/*-----------notification popup----------------*/

document.addEventListener('DOMContentLoaded', () => {
    const bellIcon = document.getElementById('bellIcon'); // The notification bell button
    const notificationDropdown = document.getElementById('notificationDropdown'); // The dropdown element
    const closeNotificationDropdown = document.getElementById('closeNotificationDropdown'); // Close button inside dropdown
  
    // Toggle dropdown visibility when bell icon is clicked
    bellIcon.addEventListener('click', (e) => {
      e.stopPropagation(); // Prevent click from bubbling up
      notificationDropdown.style.display =
        notificationDropdown.style.display === 'none' || notificationDropdown.style.display === '' ? 'block' : 'none';
    });
  
    // Close dropdown when close icon is clicked
    closeNotificationDropdown.addEventListener('click', (e) => {
      e.stopPropagation();
      notificationDropdown.style.display = 'none';
    });
  
    // Close dropdown when clicking outside
    window.addEventListener('click', (e) => {
      if (!notificationDropdown.contains(e.target) && e.target !== bellIcon) {
        notificationDropdown.style.display = 'none';
      }
    });
  });
  



          
          