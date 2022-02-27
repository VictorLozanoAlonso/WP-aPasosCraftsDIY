// Mobile Nav Drawer Animation
// function openNav () {
//   document.getElementById ('nav').style.height = 'auto';
//   document.getElementById ('nav-open').style.display = 'none';
//   document.getElementById ('nav-close').style.display = 'block';
// }
// function closeNav () {
//   document.getElementById ('nav').style.height = '0';
//   document.getElementById ('nav-open').style.display = 'block';
//   document.getElementById ('nav-close').style.display = 'none';
// }

// Create a script reference AdSense
function addScript(src, async, callback) {
  var js = document.createElement("script");
  js.type = "text/javascript";
  if (async)
      js.async = true;
  if (callback)
      js.onload = callback;
  js.src = src;
  js.crossOrigin = "anonymous";
  document.body.appendChild(js);
}
function tamVentana() {
  var tam = [0, 0];
  if (typeof window.innerWidth != 'undefined')
  {
    tam = [window.innerWidth,window.innerHeight];
  }
  else if (typeof document.documentElement != 'undefined'
      && typeof document.documentElement.clientWidth !=
      'undefined' && document.documentElement.clientWidth != 0)
  {
    tam = [
        document.documentElement.clientWidth,
        document.documentElement.clientHeight
    ];
  }
  else   {
    tam = [
        document.getElementsByTagName('body')[0].clientWidth,
        document.getElementsByTagName('body')[0].clientHeight
    ];
  }
  return tam;
}

function searchDiv(){
  let divSearch = document.createElement('div');
  divSearch.id = "search";
  let btn = document.createElement('button');
  let iIcon = document.createElement('i');
  iIcon.className = "fas fa-search";
  btn.appendChild(iIcon);
  divSearch.appendChild(btn);
  return divSearch;
}

function menuDiv(){
  let divMenu = document.createElement('div');
  divMenu.className = "burguer-menu";
  divMenu.onclick = function(){
    document.querySelector(".burguer-menu").classList.toggle('change');
    $ ('#nav').slideToggle (300);
  };
  let divBar1 = document.createElement('div');
  divBar1.className = "bar1";
  let divBar2 = document.createElement('div');
  divBar2.className = "bar2";
  let divBar3 = document.createElement('div');
  divBar3.className = "bar3";
  divMenu.appendChild(divBar1);
  divMenu.appendChild(divBar2);
  divMenu.appendChild(divBar3);
  return divMenu;
}

function mobileMenu() {
  let div = document.createElement('div');
  div.classList.add('mobile-menu');
  div.appendChild(searchDiv());
  div.appendChild(menuDiv());
  return div;
}
function desktopMenu(){
  document.querySelector('.nav-bar').appendChild(searchDiv());
  document.querySelector('.nav-bar').appendChild(menuDiv());
}
function mobileMenu(){
  document.querySelector('.menu-footer').appendChild(searchDiv());
  document.querySelector('.menu-footer').appendChild(menuDiv());
}
// function menuFunction(x) {
//   x.classList.toggle("change");
//   $ ('#nav').slideToggle (300);
// }
// Document Ready
$ (document).ready (function () {
  $ ('.screen-reader-text').remove();
  let tam = tamVentana();
  if(tam[0] > 768){
    desktopMenu();
  } else {
    mobileMenu();
    $ ('#logo-name').remove();
  }
  $ ('#search').click (function (e) {
    e.stopPropagation ();
    if ($ (this).hasClass ('active')) {
      $ ('#header-widgets-1').toggle (300);
      $ (this).removeClass ('active');
    } else {
      $ ('#header-widgets-1').toggle (300);
      $ (this).addClass ('active');
    }
    $("#wp-block-search__input-1").focus();
  });
  function closeMenu () {
    $ ('#header-widgets-1').fadeOut (200);
    $ ('#search').removeClass ('active');
    $ ('#nav').fadeOut (300);
    $ (".burguer-menu").removeClass("change");
  }
  $ ('main').click (function (e) {
    closeMenu ();
  });
  // Wait for one second to ensure the user started browsing
  setTimeout(function() {
      (adsbygoogle = window.adsbygoogle || []);
      $("ins.adsbygoogle").each(function() {
          $("<script>(adsbygoogle = window.adsbygoogle || []).push({})</script>").insertAfter($(this));
      });
      addScript("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6383740821711465", true);
  }, 500);

});
