$(function () {
    $("nav + div").css('padding-top', $('.navbar').height())



    // // 햄버거메뉴 클릭
    // function checkWindowWidth(){

    //     if(window.innerWidth <= 991){
    //         let navLinks = document.querySelectorAll('.nav-link');
    //         navLinks.forEach(function(navLinklist){
    //             navLinklist.addEventListener('click', function(event){
    //                 let submenu = this.parentElement.querySelector('.submenu');

    //                 let allSubmenus = document.querySelectorAll('.submenu');
    //                 allSubmenus.forEach(function(submenu){
    //                     submenu.classList.remove('menushow');
    //                 });
    //                 if(submenu){
    //                     submenu.classList.add('menushow')
    //                 }
    //                 event.stopPropagation();
    //             });
    //         });

    //         document.addEventListener('click', function(){
    //             let allSubmenus = document.querySelectorAll('.submenu');
    //             allSubmenus.forEach(function(submenu){
    //                 submenu.classList.remove('menushow');
    //             })
    //         })
    //     }
    // }
    // window.addEventListener('load', checkWindowWidth);
    // window.addEventListener('resize', checkWindowWidth);

    $(window).scroll(function () {
        var wst = $(window).scrollTop();
        if (wst > 80) {
            $("body").addClass('scroll')
        } else {
            $("body").removeClass('scroll')
        }
    })


    wr(991, "mobile");


    $(window).resize(function () {
        wr(991, "mobile");
    })



    function wr(n, cls) {
        if ($(window).width() < n) {
            $("html").addClass(cls);
        } else {
            $("html").removeClass(cls);
        }
    }

    $(".mobile .nav-item > a ").click(function (e) {
        e.preventDefault(); //모바일일때만 링크 안걸림
        $(this).parent().toggleClass('on').siblings().removeClass('on');
    })

})