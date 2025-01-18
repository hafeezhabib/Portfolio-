$(document).ready(function() {
    $("#owl-demo").owlCarousel({
        items: 1,
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        dots: false
    });


    $("#owl-demoo").owlCarousel({
        items: 3,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            991: {
                items: 3
            }
        }
    });

    $("#owl-deemone").owlCarousel({
        items: 6,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        nav: true,
        dots: false,
        margin: 10,
        responsive: {
            0: {
                items: 3
            },
            991: {
                items: 6
            }
        }
    });

    $("#owl-deemtwo").owlCarousel({
        items: 6,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        nav: true,
        dots: false,
        margin: 10,
        rtl: true,
        responsive: {
            0: {
                items: 3
            },
            991: {
                items: 6
            }
        }
    });

    $("#owll-demo").owlCarousel({
        items: 3, // Adjust as needed
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000, // Adjust as needed
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            991: {
                items: 3
            }
        }
    });

    $("#owll-demoo").owlCarousel({
        items: 3, // Adjust as needed
        loop: true,
        autoplay: false,
        autoplayTimeout: 5000, // Adjust as needed
        nav: true,
        dots: false,
        center: true,
        responsive: {
            0: {
                items: 1
            },
            991: {
                items: 3
            }
        }
    });
});

jQuery(document).ready(function(e) {
    e(".items .item").slice(0, 6).addClass("shown");
    e(".items .item").not(".shown").hide();
    e(".showMore").on("click", function() {
        e(".items .item").not(".shown").slideToggle(300);
        if (e(this).text() == "Show Less") e(this).text("View More");
        else e(this).text("Show Less")
    });
});


function cycleImages() {
    var e = $(".images-rotator   .active");
    var a = e.next().length > 0 ? e.next() : $(".images-rotator   img:first");
    a.css("z-index", 2);
    e.fadeOut(1500, function() {
        e.css("z-index", 1).show().removeClass("active");
        a.css("z-index", 3).addClass("active")
    })
}

setInterval("cycleImages()", 3e3);

jQuery(document).ready(function(e) {
    const at = new URLSearchParams(window.location.search);
    const tt = at.get("fbclid");
    const r = at.get("campaign");
    const o = at.get("adgroup");
    e("#fbclid_field").val(tt);
    e("#campaign").val(r);
    e("#adgroup").val(o)
});
$('a[href*="#"]:not(.tab-btn)').on("click", function(e) {
    e.preventDefault();
    $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top }, 500)
});




jQuery(document).ready(function(e) {
    e(".cc-first").addClass("active");
    e(".cc-first-tab").addClass("active");
    e("li.cc-nav-link").on("click", function() {
        e(".cc-nav-link").removeClass("active");
        e(this).addClass("active");
        let a = e(this).data("navtab");
        e(".cc-content").removeClass("active");
        e(".ccTabs-wrapper").removeClass("active");
        e("#" + a).addClass("active")
    });
    e("a.cc-color2").on("click", function() {
        e(".cc-nav-link").removeClass("active");
        let a = e(this).data("navtab");
        e('li[data-navtab="' + a + '"').addClass("active");
        console.log(e('a[data-navtab="' + a + '"'));
        e(".cc-content").removeClass("active");
        e(".ccTabs-wrapper").removeClass("active");
        e("#" + a).addClass("active")
    });
    var at = { strings: ["Content Writing Services", "Website Design Services", "Digital Marketing Services", "Premium Design Services", "Complete SEO Services", "Book Writing Services", "Video Creation Services", "Book Marketing Services", "Social Media Services"], typeSpeed: 100, backSpeed: 50, loop: true, martBackspace: true };
    var ta = new Typed("#changingText", at);
});


$(document).ready(function() {

    $('.faq1').click(function() {
        console.log("entered");
        $('.faq1-content').slideToggle(300);

    });

    $('.faq2').click(function() {

        $('.faq2-content').slideToggle(300);

    });

    $('.faq3').click(function() {

        $('.faq3-content').slideToggle(300);

    });

    $('.faq4').click(function() {

        $('.faq4-content').slideToggle(300);

    });

    $('.faq5').click(function() {

        $('.faq5-content').slideToggle(300);

    });

    $('.faq6').click(function() {

        $('.faq6-content').slideToggle(300);

    });

    $('.faq7').click(function() {

        $('.faq7-content').slideToggle(300);

    });

    $('.faq8').click(function() {

        $('.faq8-content').slideToggle(300);

    });

    $('.faq9').click(function() {

        $('.faq9-content').slideToggle(300);

    });

    $('.faq10').click(function() {

        $('.faq10-content').slideToggle(300);

    });


    $('.review-carousel').owlCarousel({

        loop: true,

        nav: false,

        mouseDrag: false,

        autoplay: false,

        autoplayTimeout: 3000,

        autoplayHoverPause: true,

        dots: true,

        items: 1,

        autoHeight: false,

    });



    $("#package_accordion > div.package_accordion1").accordion({

        collapsible: true,

        clearStyle: true

    });

    $("#package_accordion > div.package_accordion2").accordion({

        collapsible: true,

        clearStyle: true,

        active: false

    });

    $("#package_accordion > div.package_accordion3").accordion({

        collapsible: true,

        clearStyle: true,

        active: false

    });

    var carousel = $("#carousel").waterwheelCarousel({

        flankingItems: 1,

        separation: 240,

        movingToCenter: function($item) {

            $('#callback-output').prepend('movingToCenter: ' + $item.attr('id') + '<br/>');

        },

        movedToCenter: function($item) {

            $('#callback-output').prepend('movedToCenter: ' + $item.attr('id') + '<br/>');

        },

        movingFromCenter: function($item) {

            $('#callback-output').prepend('movingFromCenter: ' + $item.attr('id') + '<br/>');

        },

        movedFromCenter: function($item) {

            $('#callback-output').prepend('movedFromCenter: ' + $item.attr('id') + '<br/>');

        },

        clickedCenter: function($item) {

            $('#callback-output').prepend('clickedCenter: ' + $item.attr('id') + '<br/>');

        }

    });

    $('#prev').bind('click', function() {

        carousel.prev();

        return false

    });

    $('#next').bind('click', function() {

        carousel.next();

        return false;

    });

    $('#reload').bind('click', function() {

        newOptions = eval("(" + $('#newoptions').val() + ")");

        carousel.reload(newOptions);

        return false;

    });

});


$(document).ready(function() {
    $(document).tooltip({
        position: {
            my: "center bottom-20",
            at: "center top",
            using: function(a, e) {
                $(this).css(a);
                $("<div>").addClass("arrow").addClass(e.vertical).addClass(e.horizontal).appendTo(this)
            }
        }
    });
    $(".cc-first").addClass("active");
    $(".cc-first-tab").addClass("active");
    $("li.cc-nav-link").on("click", function() {
        $(".cc-nav-link").removeClass("active");
        $(this).addClass("active");
        let a = $(this).data("navtab");
        $(".cc-content").removeClass("active");
        $(".ccTabs-wrapper").removeClass("active");
        $("#" + a).addClass("active")
    });
    $("a.cc-color2").on("click", function() {
        $(".cc-nav-link").removeClass("active");
        let a = $(this).data("navtab");
        $('li[data-navtab="' + a + '"').addClass("active");
        console.log($('a[data-navtab="' + a + '"'));
        $(".cc-content").removeClass("active");
        $(".ccTabs-wrapper").removeClass("active");
        $("#" + a).addClass("active")
    });
    $("a.cc-color").on("click", function() {
        $(this).addClass("active");
        let a = $(this).data("navtab");
        $("#" + a).toggleClass("active");
        $(".pop-overlay").addClass("active")
    });
    $(".pop-overlay").on("click", function() {
        console.log("test");
        $(".ccTabs-wrapper").removeClass("active");
        $(".pop-overlay").removeClass("active")
    });
    $(".s2").on("click", function() {
        $(".s2").removeClass("active");
        $(this).addClass("active");
        dataId = $(this).data("id");
        $(".cs2").removeClass("active");
        $("#" + dataId).addClass("active")
    });
    $(".samplework-carousel").owlCarousel({ loop: true, nav: true, margin: 50, mouseDrag: true, autoplay: false, autoplayTimeout: 3e3, autoplayHoverPause: true, dots: false, items: 1, autoHeight: false, center: true, responsive: { 0: { items: 1, loop: true, nav: true }, 767: { items: 1, loop: true, nav: true } } })
});
$(".toggle-faq").click(function(a) {
    $(this).parent().siblings().children().removeClass("active");
    $(this).toggleClass("active");
    a.preventDefault();
    let e = $(this);
    if (e.next().hasClass("show")) {
        e.next().removeClass("show");
        e.next().slideUp(350)
    } else {
        e.parent().parent().find("li .inner-faq").removeClass("show");
        e.parent().parent().find("li .inner-faq").slideUp(350);
        e.next().toggleClass("show");
        e.next().slideToggle(350)
    }
});
$(window).width() < 992 && ($(".tabs-slider").addClass("owl-carousel"), $(".tabs-slider").owlCarousel({ loop: false, nav: 1, mouseDrag: false, autoplay: false, autoplayTimeout: 3e3, autoplayHoverPause: !0, dots: 0, items: 1, autoHeight: 1, responsive: { 0: { items: 1 }, 768: { items: 1 } } }));


$(".tabNew-link").on("click", function() {
    $(".tabNew-link").removeClass("active");
    $(this).addClass("active");
    dataId = $(this).data("id");
    console.log(dataId);
    $(".tabNew-content").removeClass("active");
    $("#" + dataId).addClass("active");
    $("#" + dataId).css("opacity", "0");
    $(".loader").show();
    setTimeout(function() {
        $(".loader").hide();
        $("#" + dataId).css("opacity", "1")
    }, 1e3)
});

$(window).width() < 992 && ($(".tabs-slider").addClass("owl-carousel"), $(".tabs-slider").owlCarousel({ loop: false, nav: 1, mouseDrag: false, autoplay: false, autoplayTimeout: 3e3, autoplayHoverPause: !0, dots: 0, items: 1, autoHeight: 1, responsive: { 0: { items: 1 }, 768: { items: 1 } } }));
$(window).width() < 992 && ($(".book-slider-mob").addClass("owl-carousel"), $(".book-slider-mob").owlCarousel({ loop: false, nav: 1, mouseDrag: false, autoplay: false, autoplayTimeout: 3e3, autoplayHoverPause: !0, dots: 0, items: 1, autoHeight: 1, responsive: { 0: { items: 1 }, 768: { items: 1 } } }));
$(window).width() < 992 && ($(".audio-platform").addClass("owl-carousel"), $(".audio-platform").owlCarousel({ loop: true, nav: !0, mouseDrag: !1, autoplay: false, autoplayTimeout: 3e3, autoplayHoverPause: !0, dots: !1, items: 3, autoHeight: 0, responsive: { 0: { items: 1 }, 768: { items: 3 } } }));
$(window).width() < 992 && ($(".slider-mob").addClass("owl-carousel"), $(".slider-mob").owlCarousel({ loop: true, nav: !0, mouseDrag: !1, autoplay: false, autoplayTimeout: 3e3, autoplayHoverPause: !0, dots: !1, items: 3, autoHeight: 0, responsive: { 0: { items: 1 }, 768: { items: 3 } } }));
$(".client-carousel").owlCarousel({ loop: true, nav: true, mouseDrag: false, autoplay: false, autoplayTimeout: 3e3, autoplayHoverPause: true, dots: false, items: 1, autoHeight: false });
$(".soc-sample-carousel").owlCarousel({ loop: true, nav: true, mouseDrag: true, autoplay: false, autoplayTimeout: 3e3, autoplayHoverPause: true, dots: false, items: 3, autoHeight: false, center: true, responsive: { 0: { items: 1, loop: true, nav: true }, 767: { items: 3, loop: true, nav: true } } });
$(".samplework-carousel").owlCarousel({ loop: true, nav: true, margin: 50, mouseDrag: true, autoplay: false, autoplayTimeout: 3e3, autoplayHoverPause: true, dots: false, items: 1, autoHeight: false, center: true, responsive: { 0: { items: 1, loop: true, nav: true }, 767: { items: 1, loop: true, nav: true } } });



$(document).ready(function() {
    $(".humburg").on("click", function() {
        $("#sidebar").addClass("opensidebar");
        $(".overlayscreen").fadeIn();
        $("body").css("overflow-y", "hidden")
    });
    $("#dismiss, .overlayscreen,.barsBtn").on("click", function() {
        $("#sidebar").removeClass("opensidebar");
        $(".overlayscreen").fadeOut();
        $("body").css("overflow-y", "inherit")
    });
    $("#sidebarCollapse").on("click", function() {
        $("#sidebar").addClass("active");
        $(".overlayscreen").fadeIn();
        $(".collapse.in").toggleClass("in");
        $("a[aria-expanded=true]").attr("aria-expanded", "false")
    });
    var e = document.getElementById("logo");
    var n = document.getElementById("hide-sc");
    var a = e.offsetTop
});


(function() {
    let e = Math.max(document.documentElement.clientHeight || 0, window.innerHeight || 0);
    let t = typeof NPSH !== "undefined" && NPSH.isScrolled();
    let n = [];
    let i = ["nitro-offscreen"];
    let l = [""];
    if (t) { i.shift() }
    if (l[0].length) { i.push(...l) }

    function d(t) { if (t === null) return; let i = t.children.length; let l; let o = ["SCRIPT", "STYLE", "LINK", "TEMPLATE"]; for (let f = 0; f < i; f++) { l = t.children[f]; if (o.indexOf(l.tagName) == -1) { let t = l.getBoundingClientRect(); if (t.width * t.height > 0) { if (t.y > e) { n.push(l) } else { d(l) } } } } }
    if (typeof NPRL !== "undefined" && i.length) {
        d(document.body);
        if (!t) {
            let e = n.length;
            let t;
            for (let l = 1; l < e; l++) {
                t = n[l];
                t.classList.add(...i)
            }
            let l = false;

            // function o() {
            //     if (!l) {
            //         document.getElementById("nitro-preloader") ? .remove();
            //         l = true
            //     }
            // }
            // window.addEventListener("NitroStylesLoaded", o);
            // setTimeout(o, 3e3)
        } else {
            window.addEventListener("NitroStylesLoaded", () => {
                requestAnimationFrame(function() {
                    let e = n.length;
                    let t;
                    for (let l = 1; l < e; l++) {
                        t = n[l];
                        t.classList.add(...i)
                    }
                })
            })
        }
    }
})();


$(function() {
    var e = function(e, t) {
        this.el = e || {};
        this.multiple = t || false;
        var i = this.el.find(".link");
        i.on("click", { el: this.el, multiple: this.multiple }, this.dropdown)
    };
    e.prototype.dropdown = function(e) {
        var t = e.data.el;
        $this = $(this), $next = $this.next();
        $next.slideToggle();
        $this.parent().toggleClass("open");
        if (!e.data.multiple) { t.find(".sidebar_submenu").not($next).slideUp().parent().removeClass("open") };
    };
    var t = new e($("#accordionmenu"), false)
});


window.nitro_lazySizesConfig = window.nitro_lazySizesConfig || {};
window.nitro_lazySizesConfig.lazyClass = "nitro-lazy";
nitro_lazySizesConfig.srcAttr = "nitro-lazy-src";
nitro_lazySizesConfig.srcsetAttr = "nitro-lazy-srcset";
nitro_lazySizesConfig.expand = 10;
nitro_lazySizesConfig.expFactor = 1;
nitro_lazySizesConfig.hFac = 1;
nitro_lazySizesConfig.loadMode = 1;
nitro_lazySizesConfig.ricTimeout = 50;
nitro_lazySizesConfig.loadHidden = true;
(function() {
    var t = null;
    var e = false;
    var a = false;
    var i = window.scrollY;
    var r = Date.now();

    function n() {
        window.removeEventListener("scroll", n);
        window.nitro_lazySizesConfig.expand = 300
    }

    function o(t) {
        let e = t.timeStamp - r;
        let a = Math.abs(i - window.scrollY) / e;
        let n = Math.max(a * 200, 300);
        r = t.timeStamp;
        i = window.scrollY;
        window.nitro_lazySizesConfig.expand = n
    }
    window.addEventListener("scroll", o, { passive: true });
    window.addEventListener("NitroStylesLoaded", function() { e = true });
    window.addEventListener("load", function() { a = true });
    document.addEventListener("lazybeforeunveil", function(t) {
        var e = false;
        var a = t.target.getAttribute("nitro-lazy-bg");
        var i = t.target.getAttribute("data-nitro-fragment-id");
        if (a) {
            let i = t.target.style.backgroundImage.replace("data:image/gif;base64,R0lGODlhAQABAIABAAAAAP///yH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==", a.replace(/\(/g, "%28").replace(/\)/g, "%29"));
            if (i === t.target.style.backgroundImage) { i = "url(" + a.replace(/\(/g, "%28").replace(/\)/g, "%29") + ")" }
            let r = t.target.style.backgroundImage;
            let n = ["initial", "inherit"].indexOf(r.toLowerCase()) === -1;
            if (r && n) { i = r + ", " + i }
            t.target.style.backgroundImage = i;
            e = true
        }
        if (t.target.tagName == "VIDEO") {
            if (t.target.hasAttribute("nitro-lazy-poster")) { t.target.setAttribute("poster", t.target.getAttribute("nitro-lazy-poster")) } else if (!t.target.hasAttribute("poster")) { t.target.setAttribute("preload", "metadata") }
            e = true
        }
        if (i) { if (!window.loadNitroFragment(i, "lazy")) { t.preventDefault(); return false } }
        if (t.target.classList.contains("av-animated-generic")) {
            t.target.classList.add("avia_start_animation", "avia_start_delayed_animation");
            e = true
        }
        if (!e) { var r = t.target.tagName.toLowerCase(); if (r !== "img" && r !== "iframe") { t.target.querySelectorAll("img[nitro-lazy-src],img[nitro-lazy-srcset]").forEach(function(t) { t.classList.add("nitro-lazy") }) } }
    })
})();



(function(e, t) { if (typeof module == "object" && module.exports) { module.exports = lazySizes } else { e.lazySizes = t(e, e.document, Date) } })(window, function e(e, t, r) {
    "use strict";
    if (!e.IntersectionObserver || !t.getElementsByClassName || !e.MutationObserver) { return }
    var i, n;
    var a = t.documentElement;
    var s = e.HTMLPictureElement;
    var o = "addEventListener";
    var l = "getAttribute";
    var c = e[o].bind(e);
    var u = e.setTimeout;
    var f = e.requestAnimationFrame || u;
    var d = e.requestIdleCallback || u;
    var v = /^picture$/i;
    var m = ["load", "error", "lazyincluded", "_lazyloaded"];
    var g = Array.prototype.forEach;
    var p = function(e, t) { return e.classList.contains(t) };
    var z = function(e, t) { e.classList.add(t) };
    var h = function(e, t) { e.classList.remove(t) };
    var y = function(e, t, r) {
        var i = r ? o : "removeEventListener";
        if (r) { y(e, t) }
        m.forEach(function(r) { e[i](r, t) })
    };
    var b = function(e, r, n, a, s) {
        var o = t.createEvent("CustomEvent");
        if (!n) { n = {} }
        n.instance = i;
        o.initCustomEvent(r, !a, !s, n);
        e.dispatchEvent(o);
        return o
    };
    var C = function(t, r) { var i; if (!s && (i = e.picturefill || n.pf)) { i({ reevaluate: true, elements: [t] }) } else if (r && r.src) { t.src = r.src } };
    var w = function(e, t) { return (getComputedStyle(e, null) || {})[t] };
    var E = function(e, t, r) {
        r = r || e.offsetWidth;
        while (r < n.minSize && t && !e._lazysizesWidth) {
            r = t.offsetWidth;
            t = t.parentNode
        }
        return r
    };
    var A = function() {
        var e, r;
        var i = [];
        var n = function() {
            var t;
            e = true;
            r = false;
            while (i.length) {
                t = i.shift();
                t[0].apply(t[1], t[2])
            }
            e = false
        };
        return function(a) {
            if (e) { a.apply(this, arguments) } else {
                i.push([a, this, arguments]);
                if (!r) {
                    r = true;
                    (t.hidden ? u : f)(n)
                }
            }
        }
    }();
    var x = function(e, t) {
        return t ? function() { A(e) } : function() {
            var t = this;
            var r = arguments;
            A(function() { e.apply(t, r) })
        }
    };
    var L = function(e) {
        var t;
        var i = 0;
        var a = n.throttleDelay;
        var s = n.ricTimeout;
        var o = function() {
            t = false;
            i = r.now();
            e()
        };
        var l = d && s > 49 ? function() { d(o, { timeout: s }); if (s !== n.ricTimeout) { s = n.ricTimeout } } : x(function() { u(o) }, true);
        return function(e) {
            var n;
            if (e = e === true) { s = 33 }
            if (t) { return }
            t = true;
            n = a - (r.now() - i);
            if (n < 0) { n = 0 }
            if (e || n < 9) { l() } else { u(l, n) }
        }
    };
    var T = function(e) {
        var t, i;
        var n = 99;
        var a = function() {
            t = null;
            e()
        };
        var s = function() {
            var e = r.now() - i;
            if (e < n) { u(s, n - e) } else {
                (d || a)(a)
            }
        };
        return function() { i = r.now(); if (!t) { t = u(s, n) } }
    };
    var _ = function() {
        var i, s;
        var o, f, d, m;
        var E;
        var T = new Set;
        var _ = new Map;
        var M = /^img$/i;
        var R = /^iframe$/i;
        var W = "onscroll" in e && !/glebot/.test(navigator.userAgent);
        var O = 0;
        var S = 0;
        var F = function(e) {
            O--;
            if (S) { S-- }
            if (e && e.target) { y(e.target, F) }
            if (!e || O < 0 || !e.target) {
                O = 0;
                S = 0
            }
            if (G.length && O - S < 1 && O < 3) { u(function() { while (G.length && O - S < 1 && O < 4) { J({ target: G.shift() }) } }) }
        };
        var I = function(e) { if (E == null) { E = w(t.body, "visibility") == "hidden" } return E || !(w(e.parentNode, "visibility") == "hidden" && w(e, "visibility") == "hidden") };
        var P = function(e) {
            z(e.target, n.loadedClass);
            h(e.target, n.loadingClass);
            h(e.target, n.lazyClass);
            y(e.target, D)
        };
        var B = x(P);
        var D = function(e) { B({ target: e.target }) };
        var $ = function(e, t) { try { e.contentWindow.location.replace(t) } catch (r) { e.src = t } };
        var k = function(e) { var t; var r = e[l](n.srcsetAttr); if (t = n.customMedia[e[l]("data-media") || e[l]("media")]) { e.setAttribute("media", t) } if (r) { e.setAttribute("srcset", r) } };
        var q = x(function(e, t, r, i, a) {
            var s, o, c, f, m, p;
            if (!(m = b(e, "lazybeforeunveil", t)).defaultPrevented) {
                if (i) { if (r) { z(e, n.autosizesClass) } else { e.setAttribute("sizes", i) } }
                o = e[l](n.srcsetAttr);
                s = e[l](n.srcAttr);
                if (a) {
                    c = e.parentNode;
                    f = c && v.test(c.nodeName || "")
                }
                p = t.firesLoad || "src" in e && (o || s || f);
                m = { target: e };
                if (p) {
                    y(e, F, true);
                    clearTimeout(d);
                    d = u(F, 2500);
                    z(e, n.loadingClass);
                    y(e, D, true)
                }
                if (f) { g.call(c.getElementsByTagName("source"), k) }
                if (o) { e.setAttribute("srcset", o) } else if (s && !f) { if (R.test(e.nodeName)) { $(e, s) } else { e.src = s } }
                if (o || f) { C(e, { src: s }) }
            }
            A(function() {
                if (e._lazyRace) { delete e._lazyRace }
                if (!p || e.complete) {
                    if (p) { F(m) } else { O-- }
                    P(m)
                }
            })
        });
        var H = function(e) {
            if (n.isPaused) return;
            var t, r;
            var a = M.test(e.nodeName);
            var o = a && (e[l](n.sizesAttr) || e[l]("sizes"));
            var c = o == "auto";
            if (c && a && (e.src || e.srcset) && !e.complete && !p(e, n.errorClass)) { return }
            t = b(e, "lazyunveilread").detail;
            if (c) { N.updateElem(e, true, e.offsetWidth) }
            O++;
            if ((r = G.indexOf(e)) != -1) { G.splice(r, 1) }
            _.delete(e);
            T.delete(e);
            i.unobserve(e);
            s.unobserve(e);
            q(e, t, c, o, a)
        };
        var j = function(e) {
            var t, r;
            for (t = 0, r = e.length; t < r; t++) {
                if (e[t].isIntersecting === false) { continue }
                H(e[t].target)
            }
        };
        var G = [];
        var J = function(e, r) {
            var i, n, a, s;
            for (n = 0, a = e.length; n < a; n++) {
                if (r && e[n].boundingClientRect.width > 0 && e[n].boundingClientRect.height > 0) { _.set(e[n].target, { rect: e[n].boundingClientRect, scrollTop: t.documentElement.scrollTop, scrollLeft: t.documentElement.scrollLeft }) }
                if (e[n].boundingClientRect.bottom <= 0 && e[n].boundingClientRect.right <= 0 && e[n].boundingClientRect.left <= 0 && e[n].boundingClientRect.top <= 0) { continue }
                if (!e[n].isIntersecting) { continue }
                s = e[n].target;
                if (O - S < 1 && O < 4) {
                    S++;
                    H(s)
                } else if ((i = G.indexOf(s)) == -1) { G.push(s) } else { G.splice(i, 1) }
            }
        };
        var K = function() {
            var e, t;
            for (e = 0, t = o.length; e < t; e++) {
                if (!o[e]._lazyAdd && !o[e].classList.contains(n.loadedClass)) {
                    o[e]._lazyAdd = true;
                    i.observe(o[e]);
                    s.observe(o[e]);
                    T.add(o[e]);
                    if (!W) { H(o[e]) }
                }
            }
        };
        var Q = function() {
            if (n.isPaused) return;
            if (_.size === 0) return;
            const r = t.documentElement.scrollTop;
            const i = t.documentElement.scrollLeft;
            E = null;
            const a = r + e.innerHeight + n.expand;
            const s = i + e.innerWidth + n.expand * n.hFac;
            const o = r - n.expand;
            const l = (i - n.expand) * n.hFac;
            for (let e of _) { const [t, r] = e; const i = r.rect.top + r.scrollTop; const n = r.rect.bottom + r.scrollTop; const c = r.rect.left + r.scrollLeft; const u = r.rect.right + r.scrollLeft; if (n >= o && i <= a && u >= l && c <= s && I(t)) { H(t) } }
        };
        return {
            _: function() {
                m = r.now();
                o = t.getElementsByClassName(n.lazyClass);
                i = new IntersectionObserver(j);
                s = new IntersectionObserver(J, { rootMargin: n.expand + "px " + n.expand * n.hFac + "px" });
                const e = new ResizeObserver(e => {
                    if (T.size === 0) return;
                    s.disconnect();
                    s = new IntersectionObserver(J, { rootMargin: n.expand + "px " + n.expand * n.hFac + "px" });
                    _ = new Map;
                    for (let e of T) { s.observe(e) }
                });
                e.observe(t.documentElement);
                c("scroll", L(Q), true);
                new MutationObserver(K).observe(a, { childList: true, subtree: true, attributes: true });
                K()
            },
            unveil: H
        }
    }();
    var N = function() {
        var e;
        var r = x(function(e, t, r, i) {
            var n, a, s;
            e._lazysizesWidth = i;
            i += "px";
            e.setAttribute("sizes", i);
            if (v.test(t.nodeName || "")) { n = t.getElementsByTagName("source"); for (a = 0, s = n.length; a < s; a++) { n[a].setAttribute("sizes", i) } }
            if (!r.detail.dataAttr) { C(e, r.detail) }
        });
        var i = function(e, t, i) {
            var n;
            var a = e.parentNode;
            if (a) {
                i = E(e, a, i);
                n = b(e, "lazybeforesizes", { width: i, dataAttr: !!t });
                if (!n.defaultPrevented) { i = n.detail.width; if (i && i !== e._lazysizesWidth) { r(e, a, n, i) } }
            }
        };
        var a = function() { var t; var r = e.length; if (r) { t = 0; for (; t < r; t++) { i(e[t]) } } };
        var s = T(a);
        return {
            _: function() {
                e = t.getElementsByClassName(n.autosizesClass);
                c("resize", s)
            },
            checkElems: s,
            updateElem: i
        }
    }();
    var M = function() {
        if (!M.i) {
            M.i = true;
            N._();
            _._()
        }
    };
    (function() {
        var t;
        var r = { lazyClass: "lazyload", lazyWaitClass: "lazyloadwait", loadedClass: "lazyloaded", loadingClass: "lazyloading", preloadClass: "lazypreload", errorClass: "lazyerror", autosizesClass: "lazyautosizes", srcAttr: "data-src", srcsetAttr: "data-srcset", sizesAttr: "data-sizes", minSize: 40, customMedia: {}, init: true, hFac: .8, loadMode: 2, expand: 400, ricTimeout: 0, throttleDelay: 125, isPaused: false };
        n = e.nitro_lazySizesConfig || e.nitro_lazysizesConfig || {};
        for (t in r) { if (!(t in n)) { n[t] = r[t] } }
        u(function() { if (n.init) { M() } })
    })();
    i = { cfg: n, autoSizer: N, loader: _, init: M, uP: C, aC: z, rC: h, hC: p, fire: b, gW: E, rAF: A };
    return i
});

jQuery(document).ready(function(e) {
    // e(".tab-link").on("click", function() {
    //     e(".tab-link").removeClass("active");
    //     e(this).addClass("active");
    //     dataId = e(this).data("id");
    //     dataImg = e(this).data("img");
    //     e(".tab-content").removeClass("active");
    //     e("#" + dataId).addClass("active");
    //     e(".tab-image").removeClass("active");
    //     e("#" + dataImg).addClass("active")
    // });
    e(".tabPackage-link").on("click", function() {
        e(".tabPackage-link").removeClass("active");
        e(this).addClass("active");
        dataId = e(this).data("id");
        e(".tabPackage-content").removeClass("active");
        e("#" + dataId).addClass("active")
    });
    const a = new URLSearchParams(window.location.search);
    const t = a.get("fbclid");
    const o = a.get("campaign");
    const s = a.get("adgroup");
    e("#fbclid_field").val(t);
    e("#campaign").val(o);
    e("#adgroup").val(s)
});



// window.addEventListener('DOMContentLoaded', () => {

//     const activeTab = localStorage.getItem('activeTab');
//     const currentUrl = window.location.href;

//     if (currentUrl.includes('index.php')) {
//         return;
//     } else if (activeTab) {
//         document.querySelectorAll('.cc-nav-link').forEach(link => {
//             if (link.querySelector('a').getAttribute('href') === activeTab) {
//                 link.classList.add('active');
//             }
//         });
//     }
// });

// document.querySelectorAll('.cc-nav-link').forEach(item => {
//     item.addEventListener('click', function() {
//         document.querySelectorAll('.cc-nav-link').forEach(link => link.classList.remove('active'));

//         this.classList.add('active');

//         const activeLink = this.querySelector('a').getAttribute('href');
//         localStorage.setItem('activeTab', activeLink);
//     });
// });


jQuery(document).ready(function($) {
    // Handle all tab links except Contact Us
    $(".tab-link").on("click", function() {
        $(".tab-link").removeClass("active");
        $(this).addClass("active");

        let dataId = $(this).data("id");
        let dataImg = $(this).data("img");

        $(".tab-content").removeClass("active");
        if (dataId) {
            $("#" + dataId).addClass("active");
        }

        $(".tab-image").removeClass("active");
        if (dataImg) {
            $("#" + dataImg).addClass("active");
        }
    });

    if (window.location.href.indexOf("contact.php") > -1) {
        $(".cc-nav-link").removeClass("active"); // Remove active from all
        $(".cc-nav-link[data-navtab='contact']").addClass("active"); // Add active to Contact Us
    }

    $(".cc-nav-link[data-navtab='contact']").on("click", function(event) {
        event.preventDefault(); // Prevent default action of the link

        $(".cc-nav-link").removeClass("active");
        $(this).addClass("active");

        window.location.href = "contact.php";
    });
});

document.querySelector('.cc-nav-link.service').addEventListener('mouseover', function() {
    document.getElementById('ccTabs04').style.display = 'block';
});

document.querySelector('.cc-nav-link.service').addEventListener('mouseout', function() {
    document.getElementById('ccTabs04').style.display = 'none';
});

document.getElementById('ccTabs04').addEventListener('mouseover', function() {
    this.style.display = 'block';
});

document.getElementById('ccTabs04').addEventListener('mouseout', function() {
    this.style.display = 'none';
});