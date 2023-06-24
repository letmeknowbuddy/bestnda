$(document).ready(function () {

    //Form submit for IE Browser
    $('button[type=\'submit\']').on('click', function () {
    $("form[id*='form-']").submit();
    });
  
    $('.text-danger').each(function () {
      var element = $(this).parents('.form-group').addClass('has-error');
    });

    $('#menu a[href]').on('click', function () {
      sessionStorage.setItem('menu', $(this).attr('href'));
    });

    if (!sessionStorage.getItem('menu')) {
      $('#menu #dashboard').addClass('active');
    } else {
      $('#menu a[href=\'' + sessionStorage.getItem('menu') + '\']').parents('li').addClass('active open');
    }

    if ($(window).width() > 480 && localStorage.getItem('column-left') == 'active') {
      $('#button-menu').attr('src', '/backend/images/inner-logo.webp');
      $('#column-left').addClass('active');
      $('#menu li.active').has('ul').children('ul').addClass('collapse in');
      $('#menu li').not('.active').has('ul').children('ul').addClass('collapse');
    } else {
      $('#button-menu').attr('src', '/backend/images/inner-favicon.webp');
      $('#menu li li.active').has('ul').children('ul').addClass('collapse in');
      $('#menu li li').not('.active').has('ul').children('ul').addClass('collapse');
    }

    $('#button-menu').on('click', function () {
      if ($('#column-left').hasClass('active')) {
      localStorage.setItem('column-left', '');
      $('#button-menu').attr('src', '/backend/images/inner-favicon.webp');
      $('#column-left').removeClass('active');
      $('#menu > li > a > span').hide();
      $('#menu > li > ul').removeClass('in collapse');
      $('#menu > li > ul').removeAttr('style');
    } else {
      localStorage.setItem('column-left', 'active');
      $('#column-left span').stop().hide();
      $('#column-left').addClass('active');
        setTimeout(function () {
    if ($('#column-left').hasClass('active')) {
      $('#column-left span').stop().fadeIn();
    }
    }, 300);
      $('#button-menu').attr('src', '/backend/images/inner-logo.webp');
      $('#menu li.open').has('ul').children('ul').addClass('collapse in');
      $('#menu li').not('.open').has('ul').children('ul').addClass('collapse');
    }
    });

    $('#menu').find('li').has('ul').children('a').on('click', function () {
      if ($('#column-left').hasClass('active')) {
      $(this).parent('li').toggleClass('open').children('ul').collapse('toggle');
      $(this).parent('li').siblings().removeClass('open').children('ul.in').collapse('hide');
    } else if (!$(this).parent().parent().is('#menu')) {
      $(this).parent('li').toggleClass('open').children('ul').collapse('toggle');
      $(this).parent('li').siblings().removeClass('open').children('ul.in').collapse('hide');
    }

    });

      $('[data-toggle=\'tooltip\']').tooltip({container: 'body', html: true});
      $(document).ajaxStop(function () {
      $('[data-toggle=\'tooltip\']').tooltip({container: 'body'});

    });

      $('.nav-tabs a[data-toggle=tab]').on('click', function (e) {
      if ($(this).parent().hasClass('disabled')) {
      e.preventDefault();
      return false;
    }

    });

	  $("#preview").click(function () {
  	  $("#photo").trigger('click');
	});

	$("#upload").click(function () {
	  var oFReader = new FileReader();
	  var photo=document.getElementById("photo").files[0];
      oFReader.readAsDataURL(photo);
	  oFReader.onload = function (oFREvent) {
      document.getElementById("preview").src = oFREvent.target.result;
    };

	});

    });

    (function ($) {
      $.fn.autocomplete = function (option) {
      return this.each(function () {
      this.timer = null;
      this.items = new Array();
      $.extend(this, option);
      $(this).attr('autocomplete', 'off');

      $(this).on('blur', function () {
        setTimeout(function (object) {
        object.hide();
        }, 400, this);
    });

      $(this).on('keydown', function (event) {
        switch (event.keyCode) {
        case 27: // escape
        this.hide();
        break;
        default:
        this.request();
        break;
        }
    });

    this.click = function (event) {
      event.preventDefault();
      value = $(event.target).parent().attr('data-value');
      if (value && this.items[value]) {
      this.select(this.items[value]);
       }
    }

    this.show = function () {
      var pos = $(this).position();
      $(this).siblings('ul.dropdown-menu').css({
      top: pos.top + $(this).outerHeight(),
      left: pos.left
    });

    $(this).siblings('ul.dropdown-menu').show();

    }

    this.hide = function () {
    $(this).siblings('ul.dropdown-menu').hide();
    }

    this.request = function () {
    clearTimeout(this.timer);
    this.timer = setTimeout(function (object) {
    object.source($(object).val(), $.proxy(object.response, object));
    }, 400, this);
    }
    
    this.response = function (json) {
      html = '';

      if (json.length) {
        for (i = 0; i < json.length; i++) {
        this.items[json[i]['value']] = json[i];
    }

    for (i = 0; i < json.length; i++) {
      if (!json[i]['category']) {
      html += '<li data-value="' + json[i]['value'] + '"><a href="#">' + json[i]['label'] + '</a></li>';
    }
    }

    var category = new Array();
      for (i = 0; i < json.length; i++) {
      if (json[i]['category']) {
      if (!category[json[i]['category']]) {
        category[json[i]['category']] = new Array();
        category[json[i]['category']]['name'] = json[i]['category'];
        category[json[i]['category']]['item'] = new Array();
    }
        category[json[i]['category']]['item'].push(json[i]);
    }
    }

    for (i in category) {
      html += '<li class="dropdown-header">' + category[i]['name'] + '</li>';
      for (j = 0; j < category[i]['item'].length; j++) {
      html += '<li data-value="' + category[i]['item'][j]['value'] + '"><a href="#">&nbsp;&nbsp;&nbsp;' + category[i]['item'][j]['label'] + '</a></li>';
        }
      }
    }

    if (html) {
      this.show();
      } else {
      this.hide();
      }
      $(this).siblings('ul.dropdown-menu').html(html);
      }
      $(this).after('<ul class="dropdown-menu"></ul>');
      $(this).siblings('ul.dropdown-menu').delegate('a', 'click', $.proxy(this.click, this));
      });
    }
    })(window.jQuery);

    $(document).ready(function(){
	$('.multipleSelect').fastselect();
    });

    function getAccessIp(value) {
	$("#access_ip").val(value); 
    }