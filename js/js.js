/* Please ❤ this if you like it! */


(function($) {
    "use strict";

    $(function() {
        var header = $(".start-style");
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 10) {
                header.removeClass('start-style').addClass("scroll-on");
            } else {
                header.removeClass("scroll-on").addClass('start-style');
            }
        });
    });

    //Animation

    $(document).ready(function() {
        $('body.hero-anime').removeClass('hero-anime');
    });

    //Menu On Hover

    $('body').on('mouseenter mouseleave', '.nav-item', function(e) {
        if ($(window).width() > 750) {
            var _d = $(e.target).closest('.nav-item');
            _d.addClass('show');
            setTimeout(function() {
                _d[_d.is(':hover') ? 'addClass' : 'removeClass']('show');
            }, 1);
        }
    });

    //Switch light/dark

    $("#switch").on('click', function() {
        if ($("body").hasClass("dark")) {
            $("body").removeClass("dark");
            $("#switch").removeClass("switched");
        } else {
            $("body").addClass("dark");
            $("#switch").addClass("switched");
        }
    });

})(jQuery);





var el_keyword = document.querySelector('.cla-filter input[name=keyword]');
var el_cat = document.querySelector('.cla-filter select[name=iCat]');
var el_city = document.querySelector('.cla-filter select[name=iCitId]');
var el_district = document.querySelector('.cla-filter select[name=iDisId]');
var el_ward = document.querySelector('.cla-filter select[name=iWardId]');
var el_price = document.querySelector('.cla-filter select[name=iPrice]');
var el_category = document.querySelector('.cla-filter select[name=iCat]');

function openFormFilterCla() {
    document.querySelector('.box-cla-filter.is-mobile').classList.remove('hidden-mb');
}

function closeFormFilterCla() {
    document.querySelector('.box-cla-filter.is-mobile').classList.add('hidden-mb');
}

function resetFilterCla() {
    if (el_keyword) el_keyword.value = '';
    el_cat.value = 0;
    el_city.value = 0;
    el_price.value = 0;
    el_district.disabled = true;
    inertHtmlDomFilter(el_district, [], '<option value="">Quận/Huyện</option>');
    el_ward.disabled = true;
    inertHtmlDomFilter(el_ward, [], '<option value="">Phường/Xã</option>');
    return false;
}

function getWardClaFilter(add_id) {
    if (add_id != 0) {
        fetch('https://sosanhnha.com/api/v3/address?fields=id,name,type&where=disid+' + add_id + ',type+ward')
            .then((response) => response.json())
            .then((data) => {
                inertHtmlDomFilter(el_ward, data.data, '<option value="">Phường/Xã</option>');
                el_ward.disabled = false;
            })
            .catch((e) => {
                console.error("Get address error:", e)
            });
    } else {
        el_ward.disabled = true;
        inertHtmlDomFilter(el_ward, [], '<option value="">Phường/Xã</option>');
    }
}

function getDistrictClaFilter(add_id) {
    if (add_id != 0) {
        fetch('https://sosanhnha.com/api/v3/address?fields=id,name,type&where=citid+' + add_id + ',type+district')
            .then((response) => response.json())
            .then((data) => {
                inertHtmlDomFilter(el_district, data.data, '<option value="">Quận/Huyện</option>');
                el_district.disabled = false;
                el_ward.disabled = true;
                inertHtmlDomFilter(el_ward, [], '<option value="">Phường/Xã</option>');
            })
            .catch((e) => {
                console.error("Get address error:", e)
            });
    } else {
        el_district.disabled = true;
        inertHtmlDomFilter(el_district, [], '<option value="">Quận/Huyện</option>');
        el_ward.disabled = true;
        inertHtmlDomFilter(el_ward, [], '<option value="">Phường/Xã</option>');
    }
}

function inertHtmlDomFilter(el, data, html_content = '') {
    data.forEach(function(address) {
        html_content += '<option value="' + address.id + '">' + address.name + '</option>';
    })
    el.innerHTML = html_content;
}