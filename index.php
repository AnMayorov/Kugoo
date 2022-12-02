<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/scooter.svg"></link>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <script>
    /*! modernizr 3.6.0 (Custom Build) | MIT *
    * https://modernizr.com/download/?-webp-setclasses !*/
    !function(e,n,A){function o(e){var n=u.className,A=Modernizr._config.classPrefix||"";if(c&&(n=n.baseVal),Modernizr._config.enableJSClass){var o=new RegExp("(^|\\s)"+A+"no-js(\\s|$)");n=n.replace(o,"$1"+A+"js$2")}Modernizr._config.enableClasses&&(n+=" "+A+e.join(" "+A),c?u.className.baseVal=n:u.className=n)}function t(e,n){return typeof e===n}function a(){var e,n,A,o,a,i,l;for(var f in r)if(r.hasOwnProperty(f)){if(e=[],n=r[f],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(A=0;A<n.options.aliases.length;A++)e.push(n.options.aliases[A].toLowerCase());for(o=t(n.fn,"function")?n.fn():n.fn,a=0;a<e.length;a++)i=e[a],l=i.split("."),1===l.length?Modernizr[l[0]]=o:(!Modernizr[l[0]]||Modernizr[l[0]]instanceof Boolean||(Modernizr[l[0]]=new Boolean(Modernizr[l[0]])),Modernizr[l[0]][l[1]]=o),s.push((o?"":"no-")+l.join("-"))}}function i(e,n){if("object"==typeof e)for(var A in e)f(e,A)&&i(A,e[A]);else{e=e.toLowerCase();var t=e.split("."),a=Modernizr[t[0]];if(2==t.length&&(a=a[t[1]]),"undefined"!=typeof a)return Modernizr;n="function"==typeof n?n():n,1==t.length?Modernizr[t[0]]=n:(!Modernizr[t[0]]||Modernizr[t[0]]instanceof Boolean||(Modernizr[t[0]]=new Boolean(Modernizr[t[0]])),Modernizr[t[0]][t[1]]=n),o([(n&&0!=n?"":"no-")+t.join("-")]),Modernizr._trigger(e,n)}return Modernizr}var s=[],r=[],l={_version:"3.6.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var A=this;setTimeout(function(){n(A[e])},0)},addTest:function(e,n,A){r.push({name:e,fn:n,options:A})},addAsyncTest:function(e){r.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=l,Modernizr=new Modernizr;var f,u=n.documentElement,c="svg"===u.nodeName.toLowerCase();!function(){var e={}.hasOwnProperty;f=t(e,"undefined")||t(e.call,"undefined")?function(e,n){return n in e&&t(e.constructor.prototype[n],"undefined")}:function(n,A){return e.call(n,A)}}(),l._l={},l.on=function(e,n){this._l[e]||(this._l[e]=[]),this._l[e].push(n),Modernizr.hasOwnProperty(e)&&setTimeout(function(){Modernizr._trigger(e,Modernizr[e])},0)},l._trigger=function(e,n){if(this._l[e]){var A=this._l[e];setTimeout(function(){var e,o;for(e=0;e<A.length;e++)(o=A[e])(n)},0),delete this._l[e]}},Modernizr._q.push(function(){l.addTest=i}),Modernizr.addAsyncTest(function(){function e(e,n,A){function o(n){var o=n&&"load"===n.type?1==t.width:!1,a="webp"===e;i(e,a&&o?new Boolean(o):o),A&&A(n)}var t=new Image;t.onerror=o,t.onload=o,t.src=n}var n=[{uri:"data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=",name:"webp"},{uri:"data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==",name:"webp.alpha"},{uri:"data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA",name:"webp.animation"},{uri:"data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=",name:"webp.lossless"}],A=n.shift();e(A.name,A.uri,function(A){if(A&&"load"===A.type)for(var o=0;o<n.length;o++)e(n[o].name,n[o].uri)})}),a(),o(s),delete l.addTest,delete l.addAsyncTest;for(var p=0;p<Modernizr._q.length;p++)Modernizr._q[p]();e.Modernizr=Modernizr}(window,document);
  </script>
  <script src="js/just-validate.production.min.js" defer></script>
  <script src="js/script.js" defer></script>
  <title>Kugoo</title>
</head>
<body>
  <div class="wrapper">
    <nav class="header__nav nav">
      <div class="nav__container flex">
        <div class="nav__lists flex">
          <ul class="nav__list flex">
            <li class="nav__item">
              <a href="#" class="nav__item-link link">Сервис</a>
            </li>
            <li class="nav__item">
              <a href="#" class="nav__item-link link">Сотрудничество</a>
            </li>
            <li class="nav__item">
              <a href="#" class="nav__item-link link">Заказать звонок</a>
            </li>
          </ul>
          <ul class="nav__social-list flex">
            <li class="nav__social-item">
              <a href="#" class="nav__social-link link">
                <svg class="nav__social-svg">
                  <use href="img/sprite.svg#viber-1"></use>
                </svg>
              </a>
            </li>
            <li class="nav__social-item">
              <a href="#" class="nav__social-link link">
                <svg class="nav__social-svg">
                  <use href="img/sprite.svg#whatsapp-1"></use>
                </svg>
              </a>
            </li>
            <li class="nav__social-item">
              <a href="#" class="nav__social-link link">
                <svg class="nav__social-svg">
                  <use href="img/sprite.svg#telega-1"></use>
                </svg>
              </a>
            </li>
          </ul>
        </div>
        
        
        <a href="tel:+78005055461" class="nav__phone link">+7 (800) 505-54-61</a>
      </div>
    </nav>
    <header class="header">
      <div class="header__container">
        <div class="header__form flex">
          <a href="#" class="header__logo">
            <svg class="header__logo-svg">
              <use href="img/sprite.svg#Logo"></use>
            </svg>
          </a>

          <a href="#" class="header__button button btn flex">
            <div class="button__line-box flex">
              <span class="button__line"></span>
              <span class="button__line"></span>
              <span class="button__line-last"></span>
            </div>
            <span class="header__button-span">Каталог</span>
          </a>

          <form action="#" method="POST" class="header__search-form form flex">
            <input 
              class="form__input"
              type="text" 
              id="search_form" 
              name="searchform" 
              placeholder="Искать самокат KUGO"
              maxlength="50"
              required>
              <button class="form__button btn flex" type="submit">
                <svg class="form__search-icon">
                  <use href="img/sprite.svg#search-form"></use>
                </svg>
              </button>
          </form>

          <div class="header__links-box flex">
            <a href="#" class="header__link flex">
              <svg class="header__link-svg" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="path-1-inside-1_1_15994" fill="white">
                <path d="M19.4141 11.2639H18.7766L16.7349 6.32553C17.0208 6.28663 17.2413 6.04217 17.2413 5.74561C17.2413 5.42202 16.979 5.15967 16.6554 5.15967H11.6177C11.3769 4.49088 10.7363 4.01135 9.98559 4.01135C9.23488 4.01135 8.59422 4.49092 8.3534 5.15967H3.34465C3.02105 5.15967 2.75871 5.42202 2.75871 5.74561C2.75871 6.04217 2.97926 6.28663 3.26512 6.32553L1.22344 11.2639H0.585938C0.262344 11.2639 0 11.5263 0 11.8499C0 14.132 1.85668 15.9887 4.13883 15.9887C6.42098 15.9887 8.27766 14.132 8.27766 11.8499C8.27766 11.5263 8.01531 11.2639 7.69172 11.2639H7.05418L5.01504 6.33155H8.3534C8.59422 7.00034 9.23484 7.47987 9.98559 7.47987C10.7363 7.47987 11.3769 7.00034 11.6177 6.33155H14.985L12.9459 11.2639H12.3083C11.9847 11.2639 11.7224 11.5263 11.7224 11.8499C11.7224 14.132 13.5791 15.9887 15.8612 15.9887C18.1434 15.9887 20 14.132 20 11.8499C20 11.5263 19.7377 11.2639 19.4141 11.2639ZM4.13883 14.8168C2.70332 14.8168 1.5027 13.7922 1.22996 12.4358H7.0477C6.77496 13.7922 5.57434 14.8168 4.13883 14.8168ZM5.78613 11.2639H2.49152L4.13883 7.2794L5.78613 11.2639ZM9.98555 6.30799C9.67543 6.30799 9.42316 6.05573 9.42316 5.74561C9.42316 5.43549 9.67543 5.18323 9.98555 5.18323C10.2956 5.18323 10.5479 5.43549 10.5479 5.74561C10.5479 6.05573 10.2957 6.30799 9.98555 6.30799ZM15.8612 7.2794L17.5085 11.2639H14.2139L15.8612 7.2794ZM15.8612 14.8168C14.4257 14.8168 13.225 13.7922 12.9523 12.4358H18.77C18.4973 13.7922 17.2966 14.8168 15.8612 14.8168Z"/>
                </mask>
                <path d="M19.4141 11.2639H18.7766L16.7349 6.32553C17.0208 6.28663 17.2413 6.04217 17.2413 5.74561C17.2413 5.42202 16.979 5.15967 16.6554 5.15967H11.6177C11.3769 4.49088 10.7363 4.01135 9.98559 4.01135C9.23488 4.01135 8.59422 4.49092 8.3534 5.15967H3.34465C3.02105 5.15967 2.75871 5.42202 2.75871 5.74561C2.75871 6.04217 2.97926 6.28663 3.26512 6.32553L1.22344 11.2639H0.585938C0.262344 11.2639 0 11.5263 0 11.8499C0 14.132 1.85668 15.9887 4.13883 15.9887C6.42098 15.9887 8.27766 14.132 8.27766 11.8499C8.27766 11.5263 8.01531 11.2639 7.69172 11.2639H7.05418L5.01504 6.33155H8.3534C8.59422 7.00034 9.23484 7.47987 9.98559 7.47987C10.7363 7.47987 11.3769 7.00034 11.6177 6.33155H14.985L12.9459 11.2639H12.3083C11.9847 11.2639 11.7224 11.5263 11.7224 11.8499C11.7224 14.132 13.5791 15.9887 15.8612 15.9887C18.1434 15.9887 20 14.132 20 11.8499C20 11.5263 19.7377 11.2639 19.4141 11.2639ZM4.13883 14.8168C2.70332 14.8168 1.5027 13.7922 1.22996 12.4358H7.0477C6.77496 13.7922 5.57434 14.8168 4.13883 14.8168ZM5.78613 11.2639H2.49152L4.13883 7.2794L5.78613 11.2639ZM9.98555 6.30799C9.67543 6.30799 9.42316 6.05573 9.42316 5.74561C9.42316 5.43549 9.67543 5.18323 9.98555 5.18323C10.2956 5.18323 10.5479 5.43549 10.5479 5.74561C10.5479 6.05573 10.2957 6.30799 9.98555 6.30799ZM15.8612 7.2794L17.5085 11.2639H14.2139L15.8612 7.2794ZM15.8612 14.8168C14.4257 14.8168 13.225 13.7922 12.9523 12.4358H18.77C18.4973 13.7922 17.2966 14.8168 15.8612 14.8168Z" fill="#282739"/>
                <path d="M18.7766 11.2639L15.08 12.7922L16.1019 15.2639H18.7766V11.2639ZM16.7349 6.32553L16.1956 2.36206L11.0571 3.06133L13.0384 7.85377L16.7349 6.32553ZM11.6177 5.15967L7.85429 6.51483L8.80665 9.15967H11.6177V5.15967ZM8.3534 5.15967V9.15967H11.1644L12.1168 6.5149L8.3534 5.15967ZM3.26512 6.32553L6.96166 7.85379L8.94296 3.06142L3.80455 2.36207L3.26512 6.32553ZM1.22344 11.2639V15.2639H3.89809L4.91998 12.7922L1.22344 11.2639ZM7.05418 11.2639L3.35762 12.7922L4.3795 15.2639H7.05418V11.2639ZM5.01504 6.33155V2.33155H-0.966991L1.31848 7.85977L5.01504 6.33155ZM8.3534 6.33155L12.1168 4.97639L11.1645 2.33155H8.3534V6.33155ZM11.6177 6.33155V2.33155H8.80665L7.85429 4.97639L11.6177 6.33155ZM14.985 6.33155L18.6816 7.85977L20.967 2.33155H14.985V6.33155ZM12.9459 11.2639V15.2639H15.6205L16.6424 12.7922L12.9459 11.2639ZM1.22996 12.4358V8.43581H-3.65441L-2.69155 13.2243L1.22996 12.4358ZM7.0477 12.4358L10.9692 13.2243L11.9321 8.43581H7.0477V12.4358ZM5.78613 11.2639V15.2639H11.7682L9.48268 9.73569L5.78613 11.2639ZM2.49152 11.2639L-1.20502 9.73568L-3.49054 15.2639H2.49152V11.2639ZM4.13883 7.2794L7.83538 5.75115L4.13883 -3.19012L0.44228 5.75115L4.13883 7.2794ZM15.8612 7.2794L19.5577 5.75115L15.8612 -3.19012L12.1646 5.75115L15.8612 7.2794ZM17.5085 11.2639V15.2639H23.4905L21.205 9.73569L17.5085 11.2639ZM14.2139 11.2639L10.5173 9.73569L8.2318 15.2639H14.2139V11.2639ZM12.9523 12.4358V8.43581H8.06793L9.0308 13.2243L12.9523 12.4358ZM18.77 12.4358L22.6915 13.2243L23.6544 8.43581H18.77V12.4358ZM19.4141 7.26393H18.7766V15.2639H19.4141V7.26393ZM22.4731 9.7357L20.4315 4.7973L13.0384 7.85377L15.08 12.7922L22.4731 9.7357ZM17.2743 10.289C19.5083 9.98499 21.2413 8.07734 21.2413 5.74561H13.2413C13.2413 4.007 14.5334 2.58826 16.1956 2.36206L17.2743 10.289ZM21.2413 5.74561C21.2413 3.21288 19.1881 1.15967 16.6554 1.15967V9.15967C14.7698 9.15967 13.2413 7.63116 13.2413 5.74561H21.2413ZM16.6554 1.15967H11.6177V9.15967H16.6554V1.15967ZM15.3812 3.80451C14.5889 1.60414 12.4809 0.0113525 9.98559 0.0113525V8.01135C8.99163 8.01135 8.16497 7.37763 7.85429 6.51483L15.3812 3.80451ZM9.98559 0.0113525C7.49022 0.0113525 5.38231 1.60417 4.58997 3.80444L12.1168 6.5149C11.8061 7.37768 10.9795 8.01135 9.98559 8.01135V0.0113525ZM8.3534 1.15967H3.34465V9.15967H8.3534V1.15967ZM3.34465 1.15967C0.811916 1.15967 -1.24129 3.21288 -1.24129 5.74561H6.75871C6.75871 7.63116 5.23019 9.15967 3.34465 9.15967V1.15967ZM-1.24129 5.74561C-1.24129 8.07758 0.492035 9.98499 2.72568 10.289L3.80455 2.36207C5.46648 2.58827 6.75871 4.00677 6.75871 5.74561H-1.24129ZM-0.431425 4.79727L-2.4731 9.73567L4.91998 12.7922L6.96166 7.85379L-0.431425 4.79727ZM1.22344 7.26393H0.585938V15.2639H1.22344V7.26393ZM0.585938 7.26393C-1.9468 7.26393 -4 9.31713 -4 11.8499H4C4 13.7354 2.47148 15.2639 0.585938 15.2639V7.26393ZM-4 11.8499C-4 16.3412 -0.352459 19.9887 4.13883 19.9887V11.9887C4.11514 11.9887 4.10112 11.9847 4.08983 11.9799C4.07582 11.9739 4.05865 11.9633 4.04204 11.9467C4.02542 11.93 4.01476 11.9129 4.00882 11.8989C4.00404 11.8876 4 11.8736 4 11.8499H-4ZM4.13883 19.9887C8.63012 19.9887 12.2777 16.3412 12.2777 11.8499H4.27766C4.27766 11.8736 4.27362 11.8876 4.26883 11.8989C4.2629 11.9129 4.25223 11.93 4.23562 11.9467C4.21901 11.9633 4.20183 11.9739 4.18783 11.9799C4.17654 11.9847 4.16251 11.9887 4.13883 11.9887V19.9887ZM12.2777 11.8499C12.2777 9.31713 10.2245 7.26393 7.69172 7.26393V15.2639C5.80617 15.2639 4.27766 13.7354 4.27766 11.8499H12.2777ZM7.69172 7.26393H7.05418V15.2639H7.69172V7.26393ZM10.7507 9.7357L8.71159 4.80332L1.31848 7.85977L3.35762 12.7922L10.7507 9.7357ZM5.01504 10.3315H8.3534V2.33155H5.01504V10.3315ZM4.58995 7.68671C5.38229 9.88714 7.49024 11.4799 9.98559 11.4799V3.47987C10.9795 3.47987 11.8061 4.11354 12.1168 4.97639L4.58995 7.68671ZM9.98559 11.4799C12.4809 11.4799 14.5889 9.88709 15.3812 7.68671L7.85429 4.97639C8.16497 4.11359 8.99163 3.47987 9.98559 3.47987V11.4799ZM11.6177 10.3315H14.985V2.33155H11.6177V10.3315ZM11.2884 4.80332L9.2493 9.7357L16.6424 12.7922L18.6816 7.85977L11.2884 4.80332ZM12.9459 7.26393H12.3083V15.2639H12.9459V7.26393ZM12.3083 7.26393C9.77559 7.26393 7.72238 9.31713 7.72238 11.8499H15.7224C15.7224 13.7354 14.1939 15.2639 12.3083 15.2639V7.26393ZM7.72238 11.8499C7.72238 16.3412 11.3699 19.9887 15.8612 19.9887V11.9887C15.8375 11.9887 15.8235 11.9847 15.8122 11.9799C15.7982 11.9739 15.781 11.9633 15.7644 11.9467C15.7478 11.93 15.7371 11.9129 15.7312 11.8989C15.7264 11.8876 15.7224 11.8736 15.7224 11.8499H7.72238ZM15.8612 19.9887C20.3525 19.9887 24 16.3411 24 11.8499H16C16 11.8736 15.996 11.8876 15.9912 11.8989C15.9852 11.9129 15.9746 11.9301 15.958 11.9467C15.9414 11.9633 15.9242 11.9739 15.9102 11.9799C15.8989 11.9847 15.8849 11.9887 15.8612 11.9887V19.9887ZM24 11.8499C24 9.31713 21.9468 7.26393 19.4141 7.26393V15.2639C17.5285 15.2639 16 13.7354 16 11.8499H24ZM4.13883 10.8168C4.64856 10.8168 5.05659 11.1754 5.15147 11.6473L-2.69155 13.2243C-2.0512 16.4089 0.758084 18.8168 4.13883 18.8168V10.8168ZM1.22996 16.4358H7.0477V8.43581H1.22996V16.4358ZM3.12619 11.6473C3.22107 11.1754 3.6291 10.8168 4.13883 10.8168V18.8168C7.51957 18.8168 10.3289 16.4089 10.9692 13.2243L3.12619 11.6473ZM5.78613 7.26393H2.49152V15.2639H5.78613V7.26393ZM6.18807 12.7922L7.83538 8.80764L0.44228 5.75115L-1.20502 9.73568L6.18807 12.7922ZM0.44228 8.80764L2.08958 12.7922L9.48268 9.73569L7.83538 5.75115L0.44228 8.80764ZM9.98555 2.30799C11.8846 2.30799 13.4232 3.84659 13.4232 5.74561H5.42316C5.42316 8.26487 7.46629 10.308 9.98555 10.308V2.30799ZM13.4232 5.74561C13.4232 7.64463 11.8846 9.18323 9.98555 9.18323V1.18323C7.46629 1.18323 5.42316 3.22636 5.42316 5.74561H13.4232ZM9.98555 9.18323C8.08667 9.18323 6.54793 7.64481 6.54793 5.74561H14.5479C14.5479 3.22618 12.5046 1.18323 9.98555 1.18323V9.18323ZM6.54793 5.74561C6.54793 3.84659 8.08653 2.30799 9.98555 2.30799V10.308C12.5048 10.308 14.5479 8.26487 14.5479 5.74561H6.54793ZM12.1646 8.80764L13.8119 12.7922L21.205 9.73569L19.5577 5.75115L12.1646 8.80764ZM17.5085 7.26393H14.2139V15.2639H17.5085V7.26393ZM17.9104 12.7922L19.5577 8.80764L12.1646 5.75115L10.5173 9.73569L17.9104 12.7922ZM15.8612 10.8168C16.3709 10.8168 16.7789 11.1754 16.8738 11.6473L9.0308 13.2243C9.67114 16.4089 12.4804 18.8168 15.8612 18.8168V10.8168ZM12.9523 16.4358H18.77V8.43581H12.9523V16.4358ZM14.8485 11.6473C14.9434 11.1754 15.3514 10.8168 15.8612 10.8168V18.8168C19.2418 18.8168 22.0512 16.4089 22.6915 13.2243L14.8485 11.6473Z" fill="#282739" mask="url(#path-1-inside-1_1_15994)"/>
              </svg>
            </a>
            <a href="#" class="header__link flex">         
              <svg class="header__link-svg">
                <use href="img/sprite.svg#heart"></use>
              </svg>
            </a>
            <a href="#" class="header__link flex">
              <svg class="header__link-svg">
                <use href="img/sprite.svg#shopping-cart-1"></use>
              </svg>
              <span class="header__link-span">Корзина</span>
            </a>
          </div>
        </div>
      </div>
    </header>

    <main class="main">
      <section class="test">
        <div class="test__bg">
          <div class="test__container">
            <div class="test__content flex">
              <a href="#" class="test__address-link flex">
                <svg class="test__address-icon">
                  <use href="img/sprite.svg#address-check"></use>
                </svg>
                <address class="test__address">
                  Восточно-Кругликовская улица, 86
                </address>
                <span class="test__days">
                  Вт - Сб 10:00 - 20:00
                </span>
              </a>
          
              <h2 class="test__title">
                Запишитесь на бесплатный тест-драйв электросамокатов
              </h2>
              <p class="test__text">
                в Москве без ограничения по времени
              </p>
              <ul class="test__choice-list flex">
                <li class="test__choice-item flex">
                  <div class="test__choice-icon-box flex">
                    <svg class="test__choice-icon">
                      <use href="img/sprite.svg#scooter"></use>
                    </svg>
                  </div>
                  
                  <p class="test__choice-text">
                    Поймете, какая модель вам подходит
                  </p>
                </li>
                <li class="test__choice-item flex">
                  <div class="test__choice-icon-box flex">
                    <svg class="test__choice-icon">
                      <use href="img/sprite.svg#energy"></use>
                    </svg>
                  </div>
                    
                  <p class="test__choice-text">
                    Проверите лучшие самокаты в деле
                  </p>
                </li>
              </ul>
          
              <a href="#" class="test__link btn-sub flex" data-toggle="modal" data-target="#feedback-modal">
                Записаться
              </a>
            </div>
          </div>
        </div>
        
      </section>

      <section class="model">
        <div class="model__content flex">
          <div class="model__info flex">
            <h2 class="model__title title">
              Определите максимально подходящую вам модель
              <span>не теоретически, а на практике</span>
            </h2>
      
            <p class="model__text">
              Тест-драйв поможет:
            </p>
            
            <ul class="model__list flex">
              <li class="model__item flex">
                <svg class="model__item-svg">
                  <use href="img/sprite.svg#check-circle"></use>
                </svg>
      
                <p class="model__item-text">
                  <span>
                    Понять
                  </span>
                  подходит ли вам конкретная модель;
                </p>
              </li>
              <li class="model__item flex">
                <svg class="model__item-svg">
                  <use href="img/sprite.svg#check-circle"></use>
                </svg>
      
                <p class="model__item-text">
                  <span>
                    Испытать
                  </span>
                  самокат в «реальной жизни»;
                </p>
              </li>
              <li class="model__item flex">
                <svg class="model__item-svg">
                  <use href="img/sprite.svg#check-circle"></use>
                </svg>
      
                <p class="model__item-text">
                  <span>
                    Оценить
                  </span>
                  удобство хранения и эксплуатации;
                </p>
              </li>
              <li class="model__item flex">
                <svg class="model__item-svg">
                  <use href="img/sprite.svg#check-circle"></use>
                </svg>
      
                <p class="model__item-text">
                  <span>
                    Узнать 
                  </span>
                  реальные характеристики и возможности модели.
                </p>
              </li>
            </ul>
          </div>
      
          <picture class="model__img">
            <source type="image/webp" srcset="img/middle_sections/scooters.webp">
            <source type="image/jpeg" srcset="img/middle_sections/scooters.jpg">
            <img class="model__img" src="img/middle_sections/scooters.jpg" alt="самокаты">
          </picture>
        </div>
      </section>

      <section class="riding">
        <div class="riding__content flex">
          <div class="riding__img-box">
            <picture class="riding__img">
              <source type="image/webp" srcset="img/middle_sections/rider.webp">
              <source type="image/jpeg" srcset="img/middle_sections/rider.jpg">
              <img class="riding__img" src="img/middle_sections/rider.jpg" alt="rider">
            </picture>
          </div>

          <div class="riding__info">
            <h2 class="riding__title title">
              Научим правильной <span>и безопасной езде в городе</span> вас или вашего ребенка
            </h2>
      
            <p class="riding__text">
              На обучении специалист расскажет:
            </p>
            
            <ul class="riding__list flex">
              <li class="riding__item flex">
                <svg class="riding__item-svg">
                  <use href="img/sprite.svg#check-circle"></use>
                </svg>
      
                <p class="riding__item-text">
                  Как подготовить самокат к поездке;
                </p>
              </li>
              <li class="riding__item flex">
                <svg class="riding__item-svg">
                  <use href="img/sprite.svg#check-circle"></use>
                </svg>
      
                <p class="riding__item-text">
                  Как «завести» самокат;
                </p>
              </li>
              <li class="riding__item flex">
                <svg class="riding__item-svg">
                  <use href="img/sprite.svg#check-circle"></use>
                </svg>
      
                <p class="riding__item-text">
                  Как вести себя во время поездки и обезопасить себя и окружающих;
                </p>
              </li>
              <li class="riding__item flex">
                <svg class="riding__item-svg">
                  <use href="img/sprite.svg#check-circle"></use>
                </svg>
      
                <p class="riding__item-text">
                  Как складывать и раскладывать электросамокат;
                </p>
              </li>
              <li class="riding__item flex">
                <svg class="riding__item-svg">
                  <use href="img/sprite.svg#check-circle"></use>
                </svg>
      
                <p class="riding__item-text">
                  Как ухаживать за своим девайсом.
                </p>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <section class="cards">
        <div class="cards__container">
          <div class="cards__title-box flex">
            <h2 class="cards__title title">
              Сейчас для тест-драйва и обучения доступны следующие модели
            </h2>
          </div>
          

          <div class="cards__content flex">
            <div class="cards__body-card flex">
              <div class="cards__img-box">
                <div class="cards__bg-red bg-red flex">
                  <p class="bg-red__text">ХИТ</p>
                </div>
                <div class="cards__icon-box flex">
                  <svg class="cards__icon-svg" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <mask id="path-1-inside-1_1_15994" fill="white">
                    <path d="M19.4141 11.2639H18.7766L16.7349 6.32553C17.0208 6.28663 17.2413 6.04217 17.2413 5.74561C17.2413 5.42202 16.979 5.15967 16.6554 5.15967H11.6177C11.3769 4.49088 10.7363 4.01135 9.98559 4.01135C9.23488 4.01135 8.59422 4.49092 8.3534 5.15967H3.34465C3.02105 5.15967 2.75871 5.42202 2.75871 5.74561C2.75871 6.04217 2.97926 6.28663 3.26512 6.32553L1.22344 11.2639H0.585938C0.262344 11.2639 0 11.5263 0 11.8499C0 14.132 1.85668 15.9887 4.13883 15.9887C6.42098 15.9887 8.27766 14.132 8.27766 11.8499C8.27766 11.5263 8.01531 11.2639 7.69172 11.2639H7.05418L5.01504 6.33155H8.3534C8.59422 7.00034 9.23484 7.47987 9.98559 7.47987C10.7363 7.47987 11.3769 7.00034 11.6177 6.33155H14.985L12.9459 11.2639H12.3083C11.9847 11.2639 11.7224 11.5263 11.7224 11.8499C11.7224 14.132 13.5791 15.9887 15.8612 15.9887C18.1434 15.9887 20 14.132 20 11.8499C20 11.5263 19.7377 11.2639 19.4141 11.2639ZM4.13883 14.8168C2.70332 14.8168 1.5027 13.7922 1.22996 12.4358H7.0477C6.77496 13.7922 5.57434 14.8168 4.13883 14.8168ZM5.78613 11.2639H2.49152L4.13883 7.2794L5.78613 11.2639ZM9.98555 6.30799C9.67543 6.30799 9.42316 6.05573 9.42316 5.74561C9.42316 5.43549 9.67543 5.18323 9.98555 5.18323C10.2956 5.18323 10.5479 5.43549 10.5479 5.74561C10.5479 6.05573 10.2957 6.30799 9.98555 6.30799ZM15.8612 7.2794L17.5085 11.2639H14.2139L15.8612 7.2794ZM15.8612 14.8168C14.4257 14.8168 13.225 13.7922 12.9523 12.4358H18.77C18.4973 13.7922 17.2966 14.8168 15.8612 14.8168Z"/>
                    </mask>
                    <path d="M19.4141 11.2639H18.7766L16.7349 6.32553C17.0208 6.28663 17.2413 6.04217 17.2413 5.74561C17.2413 5.42202 16.979 5.15967 16.6554 5.15967H11.6177C11.3769 4.49088 10.7363 4.01135 9.98559 4.01135C9.23488 4.01135 8.59422 4.49092 8.3534 5.15967H3.34465C3.02105 5.15967 2.75871 5.42202 2.75871 5.74561C2.75871 6.04217 2.97926 6.28663 3.26512 6.32553L1.22344 11.2639H0.585938C0.262344 11.2639 0 11.5263 0 11.8499C0 14.132 1.85668 15.9887 4.13883 15.9887C6.42098 15.9887 8.27766 14.132 8.27766 11.8499C8.27766 11.5263 8.01531 11.2639 7.69172 11.2639H7.05418L5.01504 6.33155H8.3534C8.59422 7.00034 9.23484 7.47987 9.98559 7.47987C10.7363 7.47987 11.3769 7.00034 11.6177 6.33155H14.985L12.9459 11.2639H12.3083C11.9847 11.2639 11.7224 11.5263 11.7224 11.8499C11.7224 14.132 13.5791 15.9887 15.8612 15.9887C18.1434 15.9887 20 14.132 20 11.8499C20 11.5263 19.7377 11.2639 19.4141 11.2639ZM4.13883 14.8168C2.70332 14.8168 1.5027 13.7922 1.22996 12.4358H7.0477C6.77496 13.7922 5.57434 14.8168 4.13883 14.8168ZM5.78613 11.2639H2.49152L4.13883 7.2794L5.78613 11.2639ZM9.98555 6.30799C9.67543 6.30799 9.42316 6.05573 9.42316 5.74561C9.42316 5.43549 9.67543 5.18323 9.98555 5.18323C10.2956 5.18323 10.5479 5.43549 10.5479 5.74561C10.5479 6.05573 10.2957 6.30799 9.98555 6.30799ZM15.8612 7.2794L17.5085 11.2639H14.2139L15.8612 7.2794ZM15.8612 14.8168C14.4257 14.8168 13.225 13.7922 12.9523 12.4358H18.77C18.4973 13.7922 17.2966 14.8168 15.8612 14.8168Z" fill="#282739"/>
                    <path d="M18.7766 11.2639L15.08 12.7922L16.1019 15.2639H18.7766V11.2639ZM16.7349 6.32553L16.1956 2.36206L11.0571 3.06133L13.0384 7.85377L16.7349 6.32553ZM11.6177 5.15967L7.85429 6.51483L8.80665 9.15967H11.6177V5.15967ZM8.3534 5.15967V9.15967H11.1644L12.1168 6.5149L8.3534 5.15967ZM3.26512 6.32553L6.96166 7.85379L8.94296 3.06142L3.80455 2.36207L3.26512 6.32553ZM1.22344 11.2639V15.2639H3.89809L4.91998 12.7922L1.22344 11.2639ZM7.05418 11.2639L3.35762 12.7922L4.3795 15.2639H7.05418V11.2639ZM5.01504 6.33155V2.33155H-0.966991L1.31848 7.85977L5.01504 6.33155ZM8.3534 6.33155L12.1168 4.97639L11.1645 2.33155H8.3534V6.33155ZM11.6177 6.33155V2.33155H8.80665L7.85429 4.97639L11.6177 6.33155ZM14.985 6.33155L18.6816 7.85977L20.967 2.33155H14.985V6.33155ZM12.9459 11.2639V15.2639H15.6205L16.6424 12.7922L12.9459 11.2639ZM1.22996 12.4358V8.43581H-3.65441L-2.69155 13.2243L1.22996 12.4358ZM7.0477 12.4358L10.9692 13.2243L11.9321 8.43581H7.0477V12.4358ZM5.78613 11.2639V15.2639H11.7682L9.48268 9.73569L5.78613 11.2639ZM2.49152 11.2639L-1.20502 9.73568L-3.49054 15.2639H2.49152V11.2639ZM4.13883 7.2794L7.83538 5.75115L4.13883 -3.19012L0.44228 5.75115L4.13883 7.2794ZM15.8612 7.2794L19.5577 5.75115L15.8612 -3.19012L12.1646 5.75115L15.8612 7.2794ZM17.5085 11.2639V15.2639H23.4905L21.205 9.73569L17.5085 11.2639ZM14.2139 11.2639L10.5173 9.73569L8.2318 15.2639H14.2139V11.2639ZM12.9523 12.4358V8.43581H8.06793L9.0308 13.2243L12.9523 12.4358ZM18.77 12.4358L22.6915 13.2243L23.6544 8.43581H18.77V12.4358ZM19.4141 7.26393H18.7766V15.2639H19.4141V7.26393ZM22.4731 9.7357L20.4315 4.7973L13.0384 7.85377L15.08 12.7922L22.4731 9.7357ZM17.2743 10.289C19.5083 9.98499 21.2413 8.07734 21.2413 5.74561H13.2413C13.2413 4.007 14.5334 2.58826 16.1956 2.36206L17.2743 10.289ZM21.2413 5.74561C21.2413 3.21288 19.1881 1.15967 16.6554 1.15967V9.15967C14.7698 9.15967 13.2413 7.63116 13.2413 5.74561H21.2413ZM16.6554 1.15967H11.6177V9.15967H16.6554V1.15967ZM15.3812 3.80451C14.5889 1.60414 12.4809 0.0113525 9.98559 0.0113525V8.01135C8.99163 8.01135 8.16497 7.37763 7.85429 6.51483L15.3812 3.80451ZM9.98559 0.0113525C7.49022 0.0113525 5.38231 1.60417 4.58997 3.80444L12.1168 6.5149C11.8061 7.37768 10.9795 8.01135 9.98559 8.01135V0.0113525ZM8.3534 1.15967H3.34465V9.15967H8.3534V1.15967ZM3.34465 1.15967C0.811916 1.15967 -1.24129 3.21288 -1.24129 5.74561H6.75871C6.75871 7.63116 5.23019 9.15967 3.34465 9.15967V1.15967ZM-1.24129 5.74561C-1.24129 8.07758 0.492035 9.98499 2.72568 10.289L3.80455 2.36207C5.46648 2.58827 6.75871 4.00677 6.75871 5.74561H-1.24129ZM-0.431425 4.79727L-2.4731 9.73567L4.91998 12.7922L6.96166 7.85379L-0.431425 4.79727ZM1.22344 7.26393H0.585938V15.2639H1.22344V7.26393ZM0.585938 7.26393C-1.9468 7.26393 -4 9.31713 -4 11.8499H4C4 13.7354 2.47148 15.2639 0.585938 15.2639V7.26393ZM-4 11.8499C-4 16.3412 -0.352459 19.9887 4.13883 19.9887V11.9887C4.11514 11.9887 4.10112 11.9847 4.08983 11.9799C4.07582 11.9739 4.05865 11.9633 4.04204 11.9467C4.02542 11.93 4.01476 11.9129 4.00882 11.8989C4.00404 11.8876 4 11.8736 4 11.8499H-4ZM4.13883 19.9887C8.63012 19.9887 12.2777 16.3412 12.2777 11.8499H4.27766C4.27766 11.8736 4.27362 11.8876 4.26883 11.8989C4.2629 11.9129 4.25223 11.93 4.23562 11.9467C4.21901 11.9633 4.20183 11.9739 4.18783 11.9799C4.17654 11.9847 4.16251 11.9887 4.13883 11.9887V19.9887ZM12.2777 11.8499C12.2777 9.31713 10.2245 7.26393 7.69172 7.26393V15.2639C5.80617 15.2639 4.27766 13.7354 4.27766 11.8499H12.2777ZM7.69172 7.26393H7.05418V15.2639H7.69172V7.26393ZM10.7507 9.7357L8.71159 4.80332L1.31848 7.85977L3.35762 12.7922L10.7507 9.7357ZM5.01504 10.3315H8.3534V2.33155H5.01504V10.3315ZM4.58995 7.68671C5.38229 9.88714 7.49024 11.4799 9.98559 11.4799V3.47987C10.9795 3.47987 11.8061 4.11354 12.1168 4.97639L4.58995 7.68671ZM9.98559 11.4799C12.4809 11.4799 14.5889 9.88709 15.3812 7.68671L7.85429 4.97639C8.16497 4.11359 8.99163 3.47987 9.98559 3.47987V11.4799ZM11.6177 10.3315H14.985V2.33155H11.6177V10.3315ZM11.2884 4.80332L9.2493 9.7357L16.6424 12.7922L18.6816 7.85977L11.2884 4.80332ZM12.9459 7.26393H12.3083V15.2639H12.9459V7.26393ZM12.3083 7.26393C9.77559 7.26393 7.72238 9.31713 7.72238 11.8499H15.7224C15.7224 13.7354 14.1939 15.2639 12.3083 15.2639V7.26393ZM7.72238 11.8499C7.72238 16.3412 11.3699 19.9887 15.8612 19.9887V11.9887C15.8375 11.9887 15.8235 11.9847 15.8122 11.9799C15.7982 11.9739 15.781 11.9633 15.7644 11.9467C15.7478 11.93 15.7371 11.9129 15.7312 11.8989C15.7264 11.8876 15.7224 11.8736 15.7224 11.8499H7.72238ZM15.8612 19.9887C20.3525 19.9887 24 16.3411 24 11.8499H16C16 11.8736 15.996 11.8876 15.9912 11.8989C15.9852 11.9129 15.9746 11.9301 15.958 11.9467C15.9414 11.9633 15.9242 11.9739 15.9102 11.9799C15.8989 11.9847 15.8849 11.9887 15.8612 11.9887V19.9887ZM24 11.8499C24 9.31713 21.9468 7.26393 19.4141 7.26393V15.2639C17.5285 15.2639 16 13.7354 16 11.8499H24ZM4.13883 10.8168C4.64856 10.8168 5.05659 11.1754 5.15147 11.6473L-2.69155 13.2243C-2.0512 16.4089 0.758084 18.8168 4.13883 18.8168V10.8168ZM1.22996 16.4358H7.0477V8.43581H1.22996V16.4358ZM3.12619 11.6473C3.22107 11.1754 3.6291 10.8168 4.13883 10.8168V18.8168C7.51957 18.8168 10.3289 16.4089 10.9692 13.2243L3.12619 11.6473ZM5.78613 7.26393H2.49152V15.2639H5.78613V7.26393ZM6.18807 12.7922L7.83538 8.80764L0.44228 5.75115L-1.20502 9.73568L6.18807 12.7922ZM0.44228 8.80764L2.08958 12.7922L9.48268 9.73569L7.83538 5.75115L0.44228 8.80764ZM9.98555 2.30799C11.8846 2.30799 13.4232 3.84659 13.4232 5.74561H5.42316C5.42316 8.26487 7.46629 10.308 9.98555 10.308V2.30799ZM13.4232 5.74561C13.4232 7.64463 11.8846 9.18323 9.98555 9.18323V1.18323C7.46629 1.18323 5.42316 3.22636 5.42316 5.74561H13.4232ZM9.98555 9.18323C8.08667 9.18323 6.54793 7.64481 6.54793 5.74561H14.5479C14.5479 3.22618 12.5046 1.18323 9.98555 1.18323V9.18323ZM6.54793 5.74561C6.54793 3.84659 8.08653 2.30799 9.98555 2.30799V10.308C12.5048 10.308 14.5479 8.26487 14.5479 5.74561H6.54793ZM12.1646 8.80764L13.8119 12.7922L21.205 9.73569L19.5577 5.75115L12.1646 8.80764ZM17.5085 7.26393H14.2139V15.2639H17.5085V7.26393ZM17.9104 12.7922L19.5577 8.80764L12.1646 5.75115L10.5173 9.73569L17.9104 12.7922ZM15.8612 10.8168C16.3709 10.8168 16.7789 11.1754 16.8738 11.6473L9.0308 13.2243C9.67114 16.4089 12.4804 18.8168 15.8612 18.8168V10.8168ZM12.9523 16.4358H18.77V8.43581H12.9523V16.4358ZM14.8485 11.6473C14.9434 11.1754 15.3514 10.8168 15.8612 10.8168V18.8168C19.2418 18.8168 22.0512 16.4089 22.6915 13.2243L14.8485 11.6473Z" fill="#282739" mask="url(#path-1-inside-1_1_15994)"/>
                  </svg>
                </div>
                <picture class="cards__img">
                  <source type="image/webp" srcset="img/middle_sections/test-drive-model-2.webp">
                  <source type="image/jpeg" srcset="img/middle_sections/test-drive-model-2.jpg">
                  <img class="cards__img" src="img/middle_sections/test-drive-model-2.jpg" alt="scooter">
                </picture>
              </div>

              <div class="cards__list-box flex">
                <ul class="cards__list">
                  <li class="cards__item card-item-1">
                    <p class="cards__item-text">
                      Kugoo Kirin M4
                    </p>
                  </li>
                  <li class="cards__item card-item-2 flex">
                    <div class="cards__item-block flex">
                      <svg class="cards__item-icon">
                        <use href="img/sprite.svg#accumulator"></use>
                      </svg>
                      <span class="cards__item-span">
                        2000 mAh
                      </span>
                    </div>
                    <div class="cards__item-block flex">
                      <svg class="cards__item-icon">
                        <use href="img/sprite.svg#power"></use>
                      </svg>
                      <span class="cards__item-span">
                        1,2 л.с.
                      </span>
                    </div>
                  </li>
                  <li class="cards__item card-item-3 flex">
                    <div class="cards__item-block flex">
                      <svg class="cards__item-icon">
                        <use href="img/sprite.svg#speedometer"></use>
                      </svg>
                      <span class="cards__item-span">
                        60 км/ч  
                      </span> 
                    </div>
                    <div class="cards__item-block flex">
                      <svg class="cards__item-icon">
                        <use href="img/sprite.svg#timer"></use>
                      </svg>
                      <span class="cards__item-span">
                        5 часов
                      </span>
                    </div>
                  </li>
                  <li class="cards__item card-item-4 flex">
                    <div class="cards__item-price flex">
                      <span class="cards__prise-span">
                        39 900 ₽
                      </span>
                      <p class="cards__prise-text">
                        29 900 ₽
                      </p>
                    </div>
                    <div class="cards__item-links-block flex">
                      <a href="#" class="cards__item-link flex">
                        <svg class="cards__item-link-icon">
                          <use href="img/sprite.svg#shopping-cart-2"></use>
                        </svg>
                      </a>
                      <a href="#" class="cards__item-link flex">
                        <svg class="cards__item-link-icon">
                          <use href="img/sprite.svg#heart-2"></use>
                        </svg>
                      </a>
                    </div>
                  </li>
                </ul>
                <a href="#" class="cards__link btn flex" data-toggle="modal" data-target="#feedback-modal">
                  Записаться на тест-драйв
                </a>
              </div>
            </div>
            <div class="cards__body-card flex">
              <div class="cards__img-box">
                <div class="cards__bg-green bg-green flex">
                  <p class="bg-green__text">Новинка</p>
                </div>
                <div class="cards__icon-box flex">
                  <svg class="cards__icon-svg" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <mask id="path-1-inside-1_1_15994" fill="white">
                    <path d="M19.4141 11.2639H18.7766L16.7349 6.32553C17.0208 6.28663 17.2413 6.04217 17.2413 5.74561C17.2413 5.42202 16.979 5.15967 16.6554 5.15967H11.6177C11.3769 4.49088 10.7363 4.01135 9.98559 4.01135C9.23488 4.01135 8.59422 4.49092 8.3534 5.15967H3.34465C3.02105 5.15967 2.75871 5.42202 2.75871 5.74561C2.75871 6.04217 2.97926 6.28663 3.26512 6.32553L1.22344 11.2639H0.585938C0.262344 11.2639 0 11.5263 0 11.8499C0 14.132 1.85668 15.9887 4.13883 15.9887C6.42098 15.9887 8.27766 14.132 8.27766 11.8499C8.27766 11.5263 8.01531 11.2639 7.69172 11.2639H7.05418L5.01504 6.33155H8.3534C8.59422 7.00034 9.23484 7.47987 9.98559 7.47987C10.7363 7.47987 11.3769 7.00034 11.6177 6.33155H14.985L12.9459 11.2639H12.3083C11.9847 11.2639 11.7224 11.5263 11.7224 11.8499C11.7224 14.132 13.5791 15.9887 15.8612 15.9887C18.1434 15.9887 20 14.132 20 11.8499C20 11.5263 19.7377 11.2639 19.4141 11.2639ZM4.13883 14.8168C2.70332 14.8168 1.5027 13.7922 1.22996 12.4358H7.0477C6.77496 13.7922 5.57434 14.8168 4.13883 14.8168ZM5.78613 11.2639H2.49152L4.13883 7.2794L5.78613 11.2639ZM9.98555 6.30799C9.67543 6.30799 9.42316 6.05573 9.42316 5.74561C9.42316 5.43549 9.67543 5.18323 9.98555 5.18323C10.2956 5.18323 10.5479 5.43549 10.5479 5.74561C10.5479 6.05573 10.2957 6.30799 9.98555 6.30799ZM15.8612 7.2794L17.5085 11.2639H14.2139L15.8612 7.2794ZM15.8612 14.8168C14.4257 14.8168 13.225 13.7922 12.9523 12.4358H18.77C18.4973 13.7922 17.2966 14.8168 15.8612 14.8168Z"/>
                    </mask>
                    <path d="M19.4141 11.2639H18.7766L16.7349 6.32553C17.0208 6.28663 17.2413 6.04217 17.2413 5.74561C17.2413 5.42202 16.979 5.15967 16.6554 5.15967H11.6177C11.3769 4.49088 10.7363 4.01135 9.98559 4.01135C9.23488 4.01135 8.59422 4.49092 8.3534 5.15967H3.34465C3.02105 5.15967 2.75871 5.42202 2.75871 5.74561C2.75871 6.04217 2.97926 6.28663 3.26512 6.32553L1.22344 11.2639H0.585938C0.262344 11.2639 0 11.5263 0 11.8499C0 14.132 1.85668 15.9887 4.13883 15.9887C6.42098 15.9887 8.27766 14.132 8.27766 11.8499C8.27766 11.5263 8.01531 11.2639 7.69172 11.2639H7.05418L5.01504 6.33155H8.3534C8.59422 7.00034 9.23484 7.47987 9.98559 7.47987C10.7363 7.47987 11.3769 7.00034 11.6177 6.33155H14.985L12.9459 11.2639H12.3083C11.9847 11.2639 11.7224 11.5263 11.7224 11.8499C11.7224 14.132 13.5791 15.9887 15.8612 15.9887C18.1434 15.9887 20 14.132 20 11.8499C20 11.5263 19.7377 11.2639 19.4141 11.2639ZM4.13883 14.8168C2.70332 14.8168 1.5027 13.7922 1.22996 12.4358H7.0477C6.77496 13.7922 5.57434 14.8168 4.13883 14.8168ZM5.78613 11.2639H2.49152L4.13883 7.2794L5.78613 11.2639ZM9.98555 6.30799C9.67543 6.30799 9.42316 6.05573 9.42316 5.74561C9.42316 5.43549 9.67543 5.18323 9.98555 5.18323C10.2956 5.18323 10.5479 5.43549 10.5479 5.74561C10.5479 6.05573 10.2957 6.30799 9.98555 6.30799ZM15.8612 7.2794L17.5085 11.2639H14.2139L15.8612 7.2794ZM15.8612 14.8168C14.4257 14.8168 13.225 13.7922 12.9523 12.4358H18.77C18.4973 13.7922 17.2966 14.8168 15.8612 14.8168Z" fill="#282739"/>
                    <path d="M18.7766 11.2639L15.08 12.7922L16.1019 15.2639H18.7766V11.2639ZM16.7349 6.32553L16.1956 2.36206L11.0571 3.06133L13.0384 7.85377L16.7349 6.32553ZM11.6177 5.15967L7.85429 6.51483L8.80665 9.15967H11.6177V5.15967ZM8.3534 5.15967V9.15967H11.1644L12.1168 6.5149L8.3534 5.15967ZM3.26512 6.32553L6.96166 7.85379L8.94296 3.06142L3.80455 2.36207L3.26512 6.32553ZM1.22344 11.2639V15.2639H3.89809L4.91998 12.7922L1.22344 11.2639ZM7.05418 11.2639L3.35762 12.7922L4.3795 15.2639H7.05418V11.2639ZM5.01504 6.33155V2.33155H-0.966991L1.31848 7.85977L5.01504 6.33155ZM8.3534 6.33155L12.1168 4.97639L11.1645 2.33155H8.3534V6.33155ZM11.6177 6.33155V2.33155H8.80665L7.85429 4.97639L11.6177 6.33155ZM14.985 6.33155L18.6816 7.85977L20.967 2.33155H14.985V6.33155ZM12.9459 11.2639V15.2639H15.6205L16.6424 12.7922L12.9459 11.2639ZM1.22996 12.4358V8.43581H-3.65441L-2.69155 13.2243L1.22996 12.4358ZM7.0477 12.4358L10.9692 13.2243L11.9321 8.43581H7.0477V12.4358ZM5.78613 11.2639V15.2639H11.7682L9.48268 9.73569L5.78613 11.2639ZM2.49152 11.2639L-1.20502 9.73568L-3.49054 15.2639H2.49152V11.2639ZM4.13883 7.2794L7.83538 5.75115L4.13883 -3.19012L0.44228 5.75115L4.13883 7.2794ZM15.8612 7.2794L19.5577 5.75115L15.8612 -3.19012L12.1646 5.75115L15.8612 7.2794ZM17.5085 11.2639V15.2639H23.4905L21.205 9.73569L17.5085 11.2639ZM14.2139 11.2639L10.5173 9.73569L8.2318 15.2639H14.2139V11.2639ZM12.9523 12.4358V8.43581H8.06793L9.0308 13.2243L12.9523 12.4358ZM18.77 12.4358L22.6915 13.2243L23.6544 8.43581H18.77V12.4358ZM19.4141 7.26393H18.7766V15.2639H19.4141V7.26393ZM22.4731 9.7357L20.4315 4.7973L13.0384 7.85377L15.08 12.7922L22.4731 9.7357ZM17.2743 10.289C19.5083 9.98499 21.2413 8.07734 21.2413 5.74561H13.2413C13.2413 4.007 14.5334 2.58826 16.1956 2.36206L17.2743 10.289ZM21.2413 5.74561C21.2413 3.21288 19.1881 1.15967 16.6554 1.15967V9.15967C14.7698 9.15967 13.2413 7.63116 13.2413 5.74561H21.2413ZM16.6554 1.15967H11.6177V9.15967H16.6554V1.15967ZM15.3812 3.80451C14.5889 1.60414 12.4809 0.0113525 9.98559 0.0113525V8.01135C8.99163 8.01135 8.16497 7.37763 7.85429 6.51483L15.3812 3.80451ZM9.98559 0.0113525C7.49022 0.0113525 5.38231 1.60417 4.58997 3.80444L12.1168 6.5149C11.8061 7.37768 10.9795 8.01135 9.98559 8.01135V0.0113525ZM8.3534 1.15967H3.34465V9.15967H8.3534V1.15967ZM3.34465 1.15967C0.811916 1.15967 -1.24129 3.21288 -1.24129 5.74561H6.75871C6.75871 7.63116 5.23019 9.15967 3.34465 9.15967V1.15967ZM-1.24129 5.74561C-1.24129 8.07758 0.492035 9.98499 2.72568 10.289L3.80455 2.36207C5.46648 2.58827 6.75871 4.00677 6.75871 5.74561H-1.24129ZM-0.431425 4.79727L-2.4731 9.73567L4.91998 12.7922L6.96166 7.85379L-0.431425 4.79727ZM1.22344 7.26393H0.585938V15.2639H1.22344V7.26393ZM0.585938 7.26393C-1.9468 7.26393 -4 9.31713 -4 11.8499H4C4 13.7354 2.47148 15.2639 0.585938 15.2639V7.26393ZM-4 11.8499C-4 16.3412 -0.352459 19.9887 4.13883 19.9887V11.9887C4.11514 11.9887 4.10112 11.9847 4.08983 11.9799C4.07582 11.9739 4.05865 11.9633 4.04204 11.9467C4.02542 11.93 4.01476 11.9129 4.00882 11.8989C4.00404 11.8876 4 11.8736 4 11.8499H-4ZM4.13883 19.9887C8.63012 19.9887 12.2777 16.3412 12.2777 11.8499H4.27766C4.27766 11.8736 4.27362 11.8876 4.26883 11.8989C4.2629 11.9129 4.25223 11.93 4.23562 11.9467C4.21901 11.9633 4.20183 11.9739 4.18783 11.9799C4.17654 11.9847 4.16251 11.9887 4.13883 11.9887V19.9887ZM12.2777 11.8499C12.2777 9.31713 10.2245 7.26393 7.69172 7.26393V15.2639C5.80617 15.2639 4.27766 13.7354 4.27766 11.8499H12.2777ZM7.69172 7.26393H7.05418V15.2639H7.69172V7.26393ZM10.7507 9.7357L8.71159 4.80332L1.31848 7.85977L3.35762 12.7922L10.7507 9.7357ZM5.01504 10.3315H8.3534V2.33155H5.01504V10.3315ZM4.58995 7.68671C5.38229 9.88714 7.49024 11.4799 9.98559 11.4799V3.47987C10.9795 3.47987 11.8061 4.11354 12.1168 4.97639L4.58995 7.68671ZM9.98559 11.4799C12.4809 11.4799 14.5889 9.88709 15.3812 7.68671L7.85429 4.97639C8.16497 4.11359 8.99163 3.47987 9.98559 3.47987V11.4799ZM11.6177 10.3315H14.985V2.33155H11.6177V10.3315ZM11.2884 4.80332L9.2493 9.7357L16.6424 12.7922L18.6816 7.85977L11.2884 4.80332ZM12.9459 7.26393H12.3083V15.2639H12.9459V7.26393ZM12.3083 7.26393C9.77559 7.26393 7.72238 9.31713 7.72238 11.8499H15.7224C15.7224 13.7354 14.1939 15.2639 12.3083 15.2639V7.26393ZM7.72238 11.8499C7.72238 16.3412 11.3699 19.9887 15.8612 19.9887V11.9887C15.8375 11.9887 15.8235 11.9847 15.8122 11.9799C15.7982 11.9739 15.781 11.9633 15.7644 11.9467C15.7478 11.93 15.7371 11.9129 15.7312 11.8989C15.7264 11.8876 15.7224 11.8736 15.7224 11.8499H7.72238ZM15.8612 19.9887C20.3525 19.9887 24 16.3411 24 11.8499H16C16 11.8736 15.996 11.8876 15.9912 11.8989C15.9852 11.9129 15.9746 11.9301 15.958 11.9467C15.9414 11.9633 15.9242 11.9739 15.9102 11.9799C15.8989 11.9847 15.8849 11.9887 15.8612 11.9887V19.9887ZM24 11.8499C24 9.31713 21.9468 7.26393 19.4141 7.26393V15.2639C17.5285 15.2639 16 13.7354 16 11.8499H24ZM4.13883 10.8168C4.64856 10.8168 5.05659 11.1754 5.15147 11.6473L-2.69155 13.2243C-2.0512 16.4089 0.758084 18.8168 4.13883 18.8168V10.8168ZM1.22996 16.4358H7.0477V8.43581H1.22996V16.4358ZM3.12619 11.6473C3.22107 11.1754 3.6291 10.8168 4.13883 10.8168V18.8168C7.51957 18.8168 10.3289 16.4089 10.9692 13.2243L3.12619 11.6473ZM5.78613 7.26393H2.49152V15.2639H5.78613V7.26393ZM6.18807 12.7922L7.83538 8.80764L0.44228 5.75115L-1.20502 9.73568L6.18807 12.7922ZM0.44228 8.80764L2.08958 12.7922L9.48268 9.73569L7.83538 5.75115L0.44228 8.80764ZM9.98555 2.30799C11.8846 2.30799 13.4232 3.84659 13.4232 5.74561H5.42316C5.42316 8.26487 7.46629 10.308 9.98555 10.308V2.30799ZM13.4232 5.74561C13.4232 7.64463 11.8846 9.18323 9.98555 9.18323V1.18323C7.46629 1.18323 5.42316 3.22636 5.42316 5.74561H13.4232ZM9.98555 9.18323C8.08667 9.18323 6.54793 7.64481 6.54793 5.74561H14.5479C14.5479 3.22618 12.5046 1.18323 9.98555 1.18323V9.18323ZM6.54793 5.74561C6.54793 3.84659 8.08653 2.30799 9.98555 2.30799V10.308C12.5048 10.308 14.5479 8.26487 14.5479 5.74561H6.54793ZM12.1646 8.80764L13.8119 12.7922L21.205 9.73569L19.5577 5.75115L12.1646 8.80764ZM17.5085 7.26393H14.2139V15.2639H17.5085V7.26393ZM17.9104 12.7922L19.5577 8.80764L12.1646 5.75115L10.5173 9.73569L17.9104 12.7922ZM15.8612 10.8168C16.3709 10.8168 16.7789 11.1754 16.8738 11.6473L9.0308 13.2243C9.67114 16.4089 12.4804 18.8168 15.8612 18.8168V10.8168ZM12.9523 16.4358H18.77V8.43581H12.9523V16.4358ZM14.8485 11.6473C14.9434 11.1754 15.3514 10.8168 15.8612 10.8168V18.8168C19.2418 18.8168 22.0512 16.4089 22.6915 13.2243L14.8485 11.6473Z" fill="#282739" mask="url(#path-1-inside-1_1_15994)"/>
                  </svg>
                </div>
                <picture class="cards__img">
                  <source type="image/webp" srcset="img/middle_sections/test-drive-model-2.webp">
                  <source type="image/jpeg" srcset="img/middle_sections/test-drive-model-2.jpg">
                  <img class="cards__img" src="img/middle_sections/test-drive-model-2.jpg" alt="scooter">
                </picture>
              </div>

              <div class="cards__list-box flex">
                <ul class="cards__list">
                  <li class="cards__item card-item-1">
                    <p class="cards__item-text">
                      Kugoo Kirin M4
                    </p>
                  </li>
                  <li class="cards__item card-item-2 flex">
                    <div class="cards__item-block flex">
                      <svg class="cards__item-icon">
                        <use href="img/sprite.svg#accumulator"></use>
                      </svg>
                      <span class="cards__item-span">
                        2000 mAh
                      </span>
                    </div>
                    <div class="cards__item-block flex">
                      <svg class="cards__item-icon">
                        <use href="img/sprite.svg#power"></use>
                      </svg>
                      <span class="cards__item-span">
                        1,2 л.с.
                      </span>
                    </div>
                  </li>
                  <li class="cards__item card-item-3 flex">
                    <div class="cards__item-block flex">
                      <svg class="cards__item-icon">
                        <use href="img/sprite.svg#speedometer"></use>
                      </svg>
                      <span class="cards__item-span">
                        60 км/ч  
                      </span> 
                    </div>
                    <div class="cards__item-block flex">
                      <svg class="cards__item-icon">
                        <use href="img/sprite.svg#timer"></use>
                      </svg>
                      <span class="cards__item-span">
                        5 часов
                      </span>
                    </div>
                  </li>
                  <li class="cards__item card-item-4 flex">
                    <div class="cards__item-price flex">
                      <span class="cards__prise-span">
                        39 900 ₽
                      </span>
                      <p class="cards__prise-text">
                        29 900 ₽
                      </p>
                    </div>
                    <div class="cards__item-links-block flex">
                      <a href="#" class="cards__item-link flex">
                        <svg class="cards__item-link-icon">
                          <use href="img/sprite.svg#shopping-cart-2"></use>
                        </svg>
                      </a>
                      <a href="#" class="cards__item-link flex">
                        <svg class="cards__item-link-icon">
                          <use href="img/sprite.svg#heart-2"></use>
                        </svg>
                      </a>
                    </div>
                  </li>
                </ul>
                <a href="#" class="cards__link btn flex" data-toggle="modal" data-target="#feedback-modal">
                  Записаться на тест-драйв
                </a>
              </div>
            </div>
            <div class="cards__body-card flex">
              <div class="cards__img-box">
                <div class="cards__bg-red bg-red flex">
                  <p class="bg-red__text">ХИТ</p>
                </div>
                <div class="cards__icon-box flex">
                  <svg class="cards__icon-svg" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <mask id="path-1-inside-1_1_15994" fill="white">
                    <path d="M19.4141 11.2639H18.7766L16.7349 6.32553C17.0208 6.28663 17.2413 6.04217 17.2413 5.74561C17.2413 5.42202 16.979 5.15967 16.6554 5.15967H11.6177C11.3769 4.49088 10.7363 4.01135 9.98559 4.01135C9.23488 4.01135 8.59422 4.49092 8.3534 5.15967H3.34465C3.02105 5.15967 2.75871 5.42202 2.75871 5.74561C2.75871 6.04217 2.97926 6.28663 3.26512 6.32553L1.22344 11.2639H0.585938C0.262344 11.2639 0 11.5263 0 11.8499C0 14.132 1.85668 15.9887 4.13883 15.9887C6.42098 15.9887 8.27766 14.132 8.27766 11.8499C8.27766 11.5263 8.01531 11.2639 7.69172 11.2639H7.05418L5.01504 6.33155H8.3534C8.59422 7.00034 9.23484 7.47987 9.98559 7.47987C10.7363 7.47987 11.3769 7.00034 11.6177 6.33155H14.985L12.9459 11.2639H12.3083C11.9847 11.2639 11.7224 11.5263 11.7224 11.8499C11.7224 14.132 13.5791 15.9887 15.8612 15.9887C18.1434 15.9887 20 14.132 20 11.8499C20 11.5263 19.7377 11.2639 19.4141 11.2639ZM4.13883 14.8168C2.70332 14.8168 1.5027 13.7922 1.22996 12.4358H7.0477C6.77496 13.7922 5.57434 14.8168 4.13883 14.8168ZM5.78613 11.2639H2.49152L4.13883 7.2794L5.78613 11.2639ZM9.98555 6.30799C9.67543 6.30799 9.42316 6.05573 9.42316 5.74561C9.42316 5.43549 9.67543 5.18323 9.98555 5.18323C10.2956 5.18323 10.5479 5.43549 10.5479 5.74561C10.5479 6.05573 10.2957 6.30799 9.98555 6.30799ZM15.8612 7.2794L17.5085 11.2639H14.2139L15.8612 7.2794ZM15.8612 14.8168C14.4257 14.8168 13.225 13.7922 12.9523 12.4358H18.77C18.4973 13.7922 17.2966 14.8168 15.8612 14.8168Z"/>
                    </mask>
                    <path d="M19.4141 11.2639H18.7766L16.7349 6.32553C17.0208 6.28663 17.2413 6.04217 17.2413 5.74561C17.2413 5.42202 16.979 5.15967 16.6554 5.15967H11.6177C11.3769 4.49088 10.7363 4.01135 9.98559 4.01135C9.23488 4.01135 8.59422 4.49092 8.3534 5.15967H3.34465C3.02105 5.15967 2.75871 5.42202 2.75871 5.74561C2.75871 6.04217 2.97926 6.28663 3.26512 6.32553L1.22344 11.2639H0.585938C0.262344 11.2639 0 11.5263 0 11.8499C0 14.132 1.85668 15.9887 4.13883 15.9887C6.42098 15.9887 8.27766 14.132 8.27766 11.8499C8.27766 11.5263 8.01531 11.2639 7.69172 11.2639H7.05418L5.01504 6.33155H8.3534C8.59422 7.00034 9.23484 7.47987 9.98559 7.47987C10.7363 7.47987 11.3769 7.00034 11.6177 6.33155H14.985L12.9459 11.2639H12.3083C11.9847 11.2639 11.7224 11.5263 11.7224 11.8499C11.7224 14.132 13.5791 15.9887 15.8612 15.9887C18.1434 15.9887 20 14.132 20 11.8499C20 11.5263 19.7377 11.2639 19.4141 11.2639ZM4.13883 14.8168C2.70332 14.8168 1.5027 13.7922 1.22996 12.4358H7.0477C6.77496 13.7922 5.57434 14.8168 4.13883 14.8168ZM5.78613 11.2639H2.49152L4.13883 7.2794L5.78613 11.2639ZM9.98555 6.30799C9.67543 6.30799 9.42316 6.05573 9.42316 5.74561C9.42316 5.43549 9.67543 5.18323 9.98555 5.18323C10.2956 5.18323 10.5479 5.43549 10.5479 5.74561C10.5479 6.05573 10.2957 6.30799 9.98555 6.30799ZM15.8612 7.2794L17.5085 11.2639H14.2139L15.8612 7.2794ZM15.8612 14.8168C14.4257 14.8168 13.225 13.7922 12.9523 12.4358H18.77C18.4973 13.7922 17.2966 14.8168 15.8612 14.8168Z" fill="#282739"/>
                    <path d="M18.7766 11.2639L15.08 12.7922L16.1019 15.2639H18.7766V11.2639ZM16.7349 6.32553L16.1956 2.36206L11.0571 3.06133L13.0384 7.85377L16.7349 6.32553ZM11.6177 5.15967L7.85429 6.51483L8.80665 9.15967H11.6177V5.15967ZM8.3534 5.15967V9.15967H11.1644L12.1168 6.5149L8.3534 5.15967ZM3.26512 6.32553L6.96166 7.85379L8.94296 3.06142L3.80455 2.36207L3.26512 6.32553ZM1.22344 11.2639V15.2639H3.89809L4.91998 12.7922L1.22344 11.2639ZM7.05418 11.2639L3.35762 12.7922L4.3795 15.2639H7.05418V11.2639ZM5.01504 6.33155V2.33155H-0.966991L1.31848 7.85977L5.01504 6.33155ZM8.3534 6.33155L12.1168 4.97639L11.1645 2.33155H8.3534V6.33155ZM11.6177 6.33155V2.33155H8.80665L7.85429 4.97639L11.6177 6.33155ZM14.985 6.33155L18.6816 7.85977L20.967 2.33155H14.985V6.33155ZM12.9459 11.2639V15.2639H15.6205L16.6424 12.7922L12.9459 11.2639ZM1.22996 12.4358V8.43581H-3.65441L-2.69155 13.2243L1.22996 12.4358ZM7.0477 12.4358L10.9692 13.2243L11.9321 8.43581H7.0477V12.4358ZM5.78613 11.2639V15.2639H11.7682L9.48268 9.73569L5.78613 11.2639ZM2.49152 11.2639L-1.20502 9.73568L-3.49054 15.2639H2.49152V11.2639ZM4.13883 7.2794L7.83538 5.75115L4.13883 -3.19012L0.44228 5.75115L4.13883 7.2794ZM15.8612 7.2794L19.5577 5.75115L15.8612 -3.19012L12.1646 5.75115L15.8612 7.2794ZM17.5085 11.2639V15.2639H23.4905L21.205 9.73569L17.5085 11.2639ZM14.2139 11.2639L10.5173 9.73569L8.2318 15.2639H14.2139V11.2639ZM12.9523 12.4358V8.43581H8.06793L9.0308 13.2243L12.9523 12.4358ZM18.77 12.4358L22.6915 13.2243L23.6544 8.43581H18.77V12.4358ZM19.4141 7.26393H18.7766V15.2639H19.4141V7.26393ZM22.4731 9.7357L20.4315 4.7973L13.0384 7.85377L15.08 12.7922L22.4731 9.7357ZM17.2743 10.289C19.5083 9.98499 21.2413 8.07734 21.2413 5.74561H13.2413C13.2413 4.007 14.5334 2.58826 16.1956 2.36206L17.2743 10.289ZM21.2413 5.74561C21.2413 3.21288 19.1881 1.15967 16.6554 1.15967V9.15967C14.7698 9.15967 13.2413 7.63116 13.2413 5.74561H21.2413ZM16.6554 1.15967H11.6177V9.15967H16.6554V1.15967ZM15.3812 3.80451C14.5889 1.60414 12.4809 0.0113525 9.98559 0.0113525V8.01135C8.99163 8.01135 8.16497 7.37763 7.85429 6.51483L15.3812 3.80451ZM9.98559 0.0113525C7.49022 0.0113525 5.38231 1.60417 4.58997 3.80444L12.1168 6.5149C11.8061 7.37768 10.9795 8.01135 9.98559 8.01135V0.0113525ZM8.3534 1.15967H3.34465V9.15967H8.3534V1.15967ZM3.34465 1.15967C0.811916 1.15967 -1.24129 3.21288 -1.24129 5.74561H6.75871C6.75871 7.63116 5.23019 9.15967 3.34465 9.15967V1.15967ZM-1.24129 5.74561C-1.24129 8.07758 0.492035 9.98499 2.72568 10.289L3.80455 2.36207C5.46648 2.58827 6.75871 4.00677 6.75871 5.74561H-1.24129ZM-0.431425 4.79727L-2.4731 9.73567L4.91998 12.7922L6.96166 7.85379L-0.431425 4.79727ZM1.22344 7.26393H0.585938V15.2639H1.22344V7.26393ZM0.585938 7.26393C-1.9468 7.26393 -4 9.31713 -4 11.8499H4C4 13.7354 2.47148 15.2639 0.585938 15.2639V7.26393ZM-4 11.8499C-4 16.3412 -0.352459 19.9887 4.13883 19.9887V11.9887C4.11514 11.9887 4.10112 11.9847 4.08983 11.9799C4.07582 11.9739 4.05865 11.9633 4.04204 11.9467C4.02542 11.93 4.01476 11.9129 4.00882 11.8989C4.00404 11.8876 4 11.8736 4 11.8499H-4ZM4.13883 19.9887C8.63012 19.9887 12.2777 16.3412 12.2777 11.8499H4.27766C4.27766 11.8736 4.27362 11.8876 4.26883 11.8989C4.2629 11.9129 4.25223 11.93 4.23562 11.9467C4.21901 11.9633 4.20183 11.9739 4.18783 11.9799C4.17654 11.9847 4.16251 11.9887 4.13883 11.9887V19.9887ZM12.2777 11.8499C12.2777 9.31713 10.2245 7.26393 7.69172 7.26393V15.2639C5.80617 15.2639 4.27766 13.7354 4.27766 11.8499H12.2777ZM7.69172 7.26393H7.05418V15.2639H7.69172V7.26393ZM10.7507 9.7357L8.71159 4.80332L1.31848 7.85977L3.35762 12.7922L10.7507 9.7357ZM5.01504 10.3315H8.3534V2.33155H5.01504V10.3315ZM4.58995 7.68671C5.38229 9.88714 7.49024 11.4799 9.98559 11.4799V3.47987C10.9795 3.47987 11.8061 4.11354 12.1168 4.97639L4.58995 7.68671ZM9.98559 11.4799C12.4809 11.4799 14.5889 9.88709 15.3812 7.68671L7.85429 4.97639C8.16497 4.11359 8.99163 3.47987 9.98559 3.47987V11.4799ZM11.6177 10.3315H14.985V2.33155H11.6177V10.3315ZM11.2884 4.80332L9.2493 9.7357L16.6424 12.7922L18.6816 7.85977L11.2884 4.80332ZM12.9459 7.26393H12.3083V15.2639H12.9459V7.26393ZM12.3083 7.26393C9.77559 7.26393 7.72238 9.31713 7.72238 11.8499H15.7224C15.7224 13.7354 14.1939 15.2639 12.3083 15.2639V7.26393ZM7.72238 11.8499C7.72238 16.3412 11.3699 19.9887 15.8612 19.9887V11.9887C15.8375 11.9887 15.8235 11.9847 15.8122 11.9799C15.7982 11.9739 15.781 11.9633 15.7644 11.9467C15.7478 11.93 15.7371 11.9129 15.7312 11.8989C15.7264 11.8876 15.7224 11.8736 15.7224 11.8499H7.72238ZM15.8612 19.9887C20.3525 19.9887 24 16.3411 24 11.8499H16C16 11.8736 15.996 11.8876 15.9912 11.8989C15.9852 11.9129 15.9746 11.9301 15.958 11.9467C15.9414 11.9633 15.9242 11.9739 15.9102 11.9799C15.8989 11.9847 15.8849 11.9887 15.8612 11.9887V19.9887ZM24 11.8499C24 9.31713 21.9468 7.26393 19.4141 7.26393V15.2639C17.5285 15.2639 16 13.7354 16 11.8499H24ZM4.13883 10.8168C4.64856 10.8168 5.05659 11.1754 5.15147 11.6473L-2.69155 13.2243C-2.0512 16.4089 0.758084 18.8168 4.13883 18.8168V10.8168ZM1.22996 16.4358H7.0477V8.43581H1.22996V16.4358ZM3.12619 11.6473C3.22107 11.1754 3.6291 10.8168 4.13883 10.8168V18.8168C7.51957 18.8168 10.3289 16.4089 10.9692 13.2243L3.12619 11.6473ZM5.78613 7.26393H2.49152V15.2639H5.78613V7.26393ZM6.18807 12.7922L7.83538 8.80764L0.44228 5.75115L-1.20502 9.73568L6.18807 12.7922ZM0.44228 8.80764L2.08958 12.7922L9.48268 9.73569L7.83538 5.75115L0.44228 8.80764ZM9.98555 2.30799C11.8846 2.30799 13.4232 3.84659 13.4232 5.74561H5.42316C5.42316 8.26487 7.46629 10.308 9.98555 10.308V2.30799ZM13.4232 5.74561C13.4232 7.64463 11.8846 9.18323 9.98555 9.18323V1.18323C7.46629 1.18323 5.42316 3.22636 5.42316 5.74561H13.4232ZM9.98555 9.18323C8.08667 9.18323 6.54793 7.64481 6.54793 5.74561H14.5479C14.5479 3.22618 12.5046 1.18323 9.98555 1.18323V9.18323ZM6.54793 5.74561C6.54793 3.84659 8.08653 2.30799 9.98555 2.30799V10.308C12.5048 10.308 14.5479 8.26487 14.5479 5.74561H6.54793ZM12.1646 8.80764L13.8119 12.7922L21.205 9.73569L19.5577 5.75115L12.1646 8.80764ZM17.5085 7.26393H14.2139V15.2639H17.5085V7.26393ZM17.9104 12.7922L19.5577 8.80764L12.1646 5.75115L10.5173 9.73569L17.9104 12.7922ZM15.8612 10.8168C16.3709 10.8168 16.7789 11.1754 16.8738 11.6473L9.0308 13.2243C9.67114 16.4089 12.4804 18.8168 15.8612 18.8168V10.8168ZM12.9523 16.4358H18.77V8.43581H12.9523V16.4358ZM14.8485 11.6473C14.9434 11.1754 15.3514 10.8168 15.8612 10.8168V18.8168C19.2418 18.8168 22.0512 16.4089 22.6915 13.2243L14.8485 11.6473Z" fill="#282739" mask="url(#path-1-inside-1_1_15994)"/>
                  </svg>
                </div>
                <picture class="cards__img">
                  <source type="image/webp" srcset="img/middle_sections/test-drive-model-2.webp">
                  <source type="image/jpeg" srcset="img/middle_sections/test-drive-model-2.jpg">
                  <img class="cards__img" src="img/middle_sections/test-drive-model-2.jpg" alt="scooter">
                </picture>
                </picture>
              </div>

              <div class="cards__list-box flex">
                <ul class="cards__list">
                  <li class="cards__item card-item-1">
                    <p class="cards__item-text">
                      Kugoo Kirin M4
                    </p>
                  </li>
                  <li class="cards__item card-item-2 flex">
                    <div class="cards__item-block flex">
                      <svg class="cards__item-icon">
                        <use href="img/sprite.svg#accumulator"></use>
                      </svg>
                      <span class="cards__item-span">
                        2000 mAh
                      </span>
                    </div>
                    <div class="cards__item-block flex">
                      <svg class="cards__item-icon">
                        <use href="img/sprite.svg#power"></use>
                      </svg>
                      <span class="cards__item-span">
                        1,2 л.с.
                      </span>
                    </div>
                  </li>
                  <li class="cards__item card-item-3 flex">
                    <div class="cards__item-block flex">
                      <svg class="cards__item-icon">
                        <use href="img/sprite.svg#speedometer"></use>
                      </svg>
                      <span class="cards__item-span">
                        60 км/ч  
                      </span> 
                    </div>
                    <div class="cards__item-block flex">
                      <svg class="cards__item-icon">
                        <use href="img/sprite.svg#timer"></use>
                      </svg>
                      <span class="cards__item-span">
                        5 часов
                      </span>
                    </div>
                  </li>
                  <li class="cards__item card-item-4 flex">
                    <div class="cards__item-price flex">
                      <span class="cards__prise-span">
                        39 900 ₽
                      </span>
                      <p class="cards__prise-text">
                        29 900 ₽
                      </p>
                    </div>
                    <div class="cards__item-links-block flex">
                      <a href="#" class="cards__item-link flex">
                        <svg class="cards__item-link-icon">
                          <use href="img/sprite.svg#shopping-cart-2"></use>
                        </svg>
                      </a>
                      <a href="#" class="cards__item-link flex">
                        <svg class="cards__item-link-icon">
                          <use href="img/sprite.svg#heart-2"></use>
                        </svg>
                      </a>
                    </div>
                  </li>
                </ul>
                <a href="#" class="cards__link btn flex" data-toggle="modal" data-target="#feedback-modal">
                  Записаться на тест-драйв
                </a>
              </div>
            </div>
            <div class="cards__body-card flex">
              <div class="cards__img-box">
                <div class="cards__bg-green bg-green flex">
                  <p class="bg-green__text">Новинка</p>
                </div>
                <div class="cards__icon-box flex">
                  <svg class="cards__icon-svg" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <mask id="path-1-inside-1_1_15994" fill="white">
                    <path d="M19.4141 11.2639H18.7766L16.7349 6.32553C17.0208 6.28663 17.2413 6.04217 17.2413 5.74561C17.2413 5.42202 16.979 5.15967 16.6554 5.15967H11.6177C11.3769 4.49088 10.7363 4.01135 9.98559 4.01135C9.23488 4.01135 8.59422 4.49092 8.3534 5.15967H3.34465C3.02105 5.15967 2.75871 5.42202 2.75871 5.74561C2.75871 6.04217 2.97926 6.28663 3.26512 6.32553L1.22344 11.2639H0.585938C0.262344 11.2639 0 11.5263 0 11.8499C0 14.132 1.85668 15.9887 4.13883 15.9887C6.42098 15.9887 8.27766 14.132 8.27766 11.8499C8.27766 11.5263 8.01531 11.2639 7.69172 11.2639H7.05418L5.01504 6.33155H8.3534C8.59422 7.00034 9.23484 7.47987 9.98559 7.47987C10.7363 7.47987 11.3769 7.00034 11.6177 6.33155H14.985L12.9459 11.2639H12.3083C11.9847 11.2639 11.7224 11.5263 11.7224 11.8499C11.7224 14.132 13.5791 15.9887 15.8612 15.9887C18.1434 15.9887 20 14.132 20 11.8499C20 11.5263 19.7377 11.2639 19.4141 11.2639ZM4.13883 14.8168C2.70332 14.8168 1.5027 13.7922 1.22996 12.4358H7.0477C6.77496 13.7922 5.57434 14.8168 4.13883 14.8168ZM5.78613 11.2639H2.49152L4.13883 7.2794L5.78613 11.2639ZM9.98555 6.30799C9.67543 6.30799 9.42316 6.05573 9.42316 5.74561C9.42316 5.43549 9.67543 5.18323 9.98555 5.18323C10.2956 5.18323 10.5479 5.43549 10.5479 5.74561C10.5479 6.05573 10.2957 6.30799 9.98555 6.30799ZM15.8612 7.2794L17.5085 11.2639H14.2139L15.8612 7.2794ZM15.8612 14.8168C14.4257 14.8168 13.225 13.7922 12.9523 12.4358H18.77C18.4973 13.7922 17.2966 14.8168 15.8612 14.8168Z"/>
                    </mask>
                    <path d="M19.4141 11.2639H18.7766L16.7349 6.32553C17.0208 6.28663 17.2413 6.04217 17.2413 5.74561C17.2413 5.42202 16.979 5.15967 16.6554 5.15967H11.6177C11.3769 4.49088 10.7363 4.01135 9.98559 4.01135C9.23488 4.01135 8.59422 4.49092 8.3534 5.15967H3.34465C3.02105 5.15967 2.75871 5.42202 2.75871 5.74561C2.75871 6.04217 2.97926 6.28663 3.26512 6.32553L1.22344 11.2639H0.585938C0.262344 11.2639 0 11.5263 0 11.8499C0 14.132 1.85668 15.9887 4.13883 15.9887C6.42098 15.9887 8.27766 14.132 8.27766 11.8499C8.27766 11.5263 8.01531 11.2639 7.69172 11.2639H7.05418L5.01504 6.33155H8.3534C8.59422 7.00034 9.23484 7.47987 9.98559 7.47987C10.7363 7.47987 11.3769 7.00034 11.6177 6.33155H14.985L12.9459 11.2639H12.3083C11.9847 11.2639 11.7224 11.5263 11.7224 11.8499C11.7224 14.132 13.5791 15.9887 15.8612 15.9887C18.1434 15.9887 20 14.132 20 11.8499C20 11.5263 19.7377 11.2639 19.4141 11.2639ZM4.13883 14.8168C2.70332 14.8168 1.5027 13.7922 1.22996 12.4358H7.0477C6.77496 13.7922 5.57434 14.8168 4.13883 14.8168ZM5.78613 11.2639H2.49152L4.13883 7.2794L5.78613 11.2639ZM9.98555 6.30799C9.67543 6.30799 9.42316 6.05573 9.42316 5.74561C9.42316 5.43549 9.67543 5.18323 9.98555 5.18323C10.2956 5.18323 10.5479 5.43549 10.5479 5.74561C10.5479 6.05573 10.2957 6.30799 9.98555 6.30799ZM15.8612 7.2794L17.5085 11.2639H14.2139L15.8612 7.2794ZM15.8612 14.8168C14.4257 14.8168 13.225 13.7922 12.9523 12.4358H18.77C18.4973 13.7922 17.2966 14.8168 15.8612 14.8168Z" fill="#282739"/>
                    <path d="M18.7766 11.2639L15.08 12.7922L16.1019 15.2639H18.7766V11.2639ZM16.7349 6.32553L16.1956 2.36206L11.0571 3.06133L13.0384 7.85377L16.7349 6.32553ZM11.6177 5.15967L7.85429 6.51483L8.80665 9.15967H11.6177V5.15967ZM8.3534 5.15967V9.15967H11.1644L12.1168 6.5149L8.3534 5.15967ZM3.26512 6.32553L6.96166 7.85379L8.94296 3.06142L3.80455 2.36207L3.26512 6.32553ZM1.22344 11.2639V15.2639H3.89809L4.91998 12.7922L1.22344 11.2639ZM7.05418 11.2639L3.35762 12.7922L4.3795 15.2639H7.05418V11.2639ZM5.01504 6.33155V2.33155H-0.966991L1.31848 7.85977L5.01504 6.33155ZM8.3534 6.33155L12.1168 4.97639L11.1645 2.33155H8.3534V6.33155ZM11.6177 6.33155V2.33155H8.80665L7.85429 4.97639L11.6177 6.33155ZM14.985 6.33155L18.6816 7.85977L20.967 2.33155H14.985V6.33155ZM12.9459 11.2639V15.2639H15.6205L16.6424 12.7922L12.9459 11.2639ZM1.22996 12.4358V8.43581H-3.65441L-2.69155 13.2243L1.22996 12.4358ZM7.0477 12.4358L10.9692 13.2243L11.9321 8.43581H7.0477V12.4358ZM5.78613 11.2639V15.2639H11.7682L9.48268 9.73569L5.78613 11.2639ZM2.49152 11.2639L-1.20502 9.73568L-3.49054 15.2639H2.49152V11.2639ZM4.13883 7.2794L7.83538 5.75115L4.13883 -3.19012L0.44228 5.75115L4.13883 7.2794ZM15.8612 7.2794L19.5577 5.75115L15.8612 -3.19012L12.1646 5.75115L15.8612 7.2794ZM17.5085 11.2639V15.2639H23.4905L21.205 9.73569L17.5085 11.2639ZM14.2139 11.2639L10.5173 9.73569L8.2318 15.2639H14.2139V11.2639ZM12.9523 12.4358V8.43581H8.06793L9.0308 13.2243L12.9523 12.4358ZM18.77 12.4358L22.6915 13.2243L23.6544 8.43581H18.77V12.4358ZM19.4141 7.26393H18.7766V15.2639H19.4141V7.26393ZM22.4731 9.7357L20.4315 4.7973L13.0384 7.85377L15.08 12.7922L22.4731 9.7357ZM17.2743 10.289C19.5083 9.98499 21.2413 8.07734 21.2413 5.74561H13.2413C13.2413 4.007 14.5334 2.58826 16.1956 2.36206L17.2743 10.289ZM21.2413 5.74561C21.2413 3.21288 19.1881 1.15967 16.6554 1.15967V9.15967C14.7698 9.15967 13.2413 7.63116 13.2413 5.74561H21.2413ZM16.6554 1.15967H11.6177V9.15967H16.6554V1.15967ZM15.3812 3.80451C14.5889 1.60414 12.4809 0.0113525 9.98559 0.0113525V8.01135C8.99163 8.01135 8.16497 7.37763 7.85429 6.51483L15.3812 3.80451ZM9.98559 0.0113525C7.49022 0.0113525 5.38231 1.60417 4.58997 3.80444L12.1168 6.5149C11.8061 7.37768 10.9795 8.01135 9.98559 8.01135V0.0113525ZM8.3534 1.15967H3.34465V9.15967H8.3534V1.15967ZM3.34465 1.15967C0.811916 1.15967 -1.24129 3.21288 -1.24129 5.74561H6.75871C6.75871 7.63116 5.23019 9.15967 3.34465 9.15967V1.15967ZM-1.24129 5.74561C-1.24129 8.07758 0.492035 9.98499 2.72568 10.289L3.80455 2.36207C5.46648 2.58827 6.75871 4.00677 6.75871 5.74561H-1.24129ZM-0.431425 4.79727L-2.4731 9.73567L4.91998 12.7922L6.96166 7.85379L-0.431425 4.79727ZM1.22344 7.26393H0.585938V15.2639H1.22344V7.26393ZM0.585938 7.26393C-1.9468 7.26393 -4 9.31713 -4 11.8499H4C4 13.7354 2.47148 15.2639 0.585938 15.2639V7.26393ZM-4 11.8499C-4 16.3412 -0.352459 19.9887 4.13883 19.9887V11.9887C4.11514 11.9887 4.10112 11.9847 4.08983 11.9799C4.07582 11.9739 4.05865 11.9633 4.04204 11.9467C4.02542 11.93 4.01476 11.9129 4.00882 11.8989C4.00404 11.8876 4 11.8736 4 11.8499H-4ZM4.13883 19.9887C8.63012 19.9887 12.2777 16.3412 12.2777 11.8499H4.27766C4.27766 11.8736 4.27362 11.8876 4.26883 11.8989C4.2629 11.9129 4.25223 11.93 4.23562 11.9467C4.21901 11.9633 4.20183 11.9739 4.18783 11.9799C4.17654 11.9847 4.16251 11.9887 4.13883 11.9887V19.9887ZM12.2777 11.8499C12.2777 9.31713 10.2245 7.26393 7.69172 7.26393V15.2639C5.80617 15.2639 4.27766 13.7354 4.27766 11.8499H12.2777ZM7.69172 7.26393H7.05418V15.2639H7.69172V7.26393ZM10.7507 9.7357L8.71159 4.80332L1.31848 7.85977L3.35762 12.7922L10.7507 9.7357ZM5.01504 10.3315H8.3534V2.33155H5.01504V10.3315ZM4.58995 7.68671C5.38229 9.88714 7.49024 11.4799 9.98559 11.4799V3.47987C10.9795 3.47987 11.8061 4.11354 12.1168 4.97639L4.58995 7.68671ZM9.98559 11.4799C12.4809 11.4799 14.5889 9.88709 15.3812 7.68671L7.85429 4.97639C8.16497 4.11359 8.99163 3.47987 9.98559 3.47987V11.4799ZM11.6177 10.3315H14.985V2.33155H11.6177V10.3315ZM11.2884 4.80332L9.2493 9.7357L16.6424 12.7922L18.6816 7.85977L11.2884 4.80332ZM12.9459 7.26393H12.3083V15.2639H12.9459V7.26393ZM12.3083 7.26393C9.77559 7.26393 7.72238 9.31713 7.72238 11.8499H15.7224C15.7224 13.7354 14.1939 15.2639 12.3083 15.2639V7.26393ZM7.72238 11.8499C7.72238 16.3412 11.3699 19.9887 15.8612 19.9887V11.9887C15.8375 11.9887 15.8235 11.9847 15.8122 11.9799C15.7982 11.9739 15.781 11.9633 15.7644 11.9467C15.7478 11.93 15.7371 11.9129 15.7312 11.8989C15.7264 11.8876 15.7224 11.8736 15.7224 11.8499H7.72238ZM15.8612 19.9887C20.3525 19.9887 24 16.3411 24 11.8499H16C16 11.8736 15.996 11.8876 15.9912 11.8989C15.9852 11.9129 15.9746 11.9301 15.958 11.9467C15.9414 11.9633 15.9242 11.9739 15.9102 11.9799C15.8989 11.9847 15.8849 11.9887 15.8612 11.9887V19.9887ZM24 11.8499C24 9.31713 21.9468 7.26393 19.4141 7.26393V15.2639C17.5285 15.2639 16 13.7354 16 11.8499H24ZM4.13883 10.8168C4.64856 10.8168 5.05659 11.1754 5.15147 11.6473L-2.69155 13.2243C-2.0512 16.4089 0.758084 18.8168 4.13883 18.8168V10.8168ZM1.22996 16.4358H7.0477V8.43581H1.22996V16.4358ZM3.12619 11.6473C3.22107 11.1754 3.6291 10.8168 4.13883 10.8168V18.8168C7.51957 18.8168 10.3289 16.4089 10.9692 13.2243L3.12619 11.6473ZM5.78613 7.26393H2.49152V15.2639H5.78613V7.26393ZM6.18807 12.7922L7.83538 8.80764L0.44228 5.75115L-1.20502 9.73568L6.18807 12.7922ZM0.44228 8.80764L2.08958 12.7922L9.48268 9.73569L7.83538 5.75115L0.44228 8.80764ZM9.98555 2.30799C11.8846 2.30799 13.4232 3.84659 13.4232 5.74561H5.42316C5.42316 8.26487 7.46629 10.308 9.98555 10.308V2.30799ZM13.4232 5.74561C13.4232 7.64463 11.8846 9.18323 9.98555 9.18323V1.18323C7.46629 1.18323 5.42316 3.22636 5.42316 5.74561H13.4232ZM9.98555 9.18323C8.08667 9.18323 6.54793 7.64481 6.54793 5.74561H14.5479C14.5479 3.22618 12.5046 1.18323 9.98555 1.18323V9.18323ZM6.54793 5.74561C6.54793 3.84659 8.08653 2.30799 9.98555 2.30799V10.308C12.5048 10.308 14.5479 8.26487 14.5479 5.74561H6.54793ZM12.1646 8.80764L13.8119 12.7922L21.205 9.73569L19.5577 5.75115L12.1646 8.80764ZM17.5085 7.26393H14.2139V15.2639H17.5085V7.26393ZM17.9104 12.7922L19.5577 8.80764L12.1646 5.75115L10.5173 9.73569L17.9104 12.7922ZM15.8612 10.8168C16.3709 10.8168 16.7789 11.1754 16.8738 11.6473L9.0308 13.2243C9.67114 16.4089 12.4804 18.8168 15.8612 18.8168V10.8168ZM12.9523 16.4358H18.77V8.43581H12.9523V16.4358ZM14.8485 11.6473C14.9434 11.1754 15.3514 10.8168 15.8612 10.8168V18.8168C19.2418 18.8168 22.0512 16.4089 22.6915 13.2243L14.8485 11.6473Z" fill="#282739" mask="url(#path-1-inside-1_1_15994)"/>
                  </svg>
                </div>
                <picture class="cards__img">
                  <source type="image/webp" srcset="img/middle_sections/test-drive-model-2.webp">
                  <source type="image/jpeg" srcset="img/middle_sections/test-drive-model-2.jpg">
                  <img class="cards__img" src="img/middle_sections/test-drive-model-2.jpg" alt="scooter">
                </picture>
                </picture>
              </div>

              <div class="cards__list-box flex">
                <ul class="cards__list">
                  <li class="cards__item card-item-1">
                    <p class="cards__item-text">
                      Kugoo Kirin M4
                    </p>
                  </li>
                  <li class="cards__item card-item-2 flex">
                    <div class="cards__item-block flex">
                      <svg class="cards__item-icon">
                        <use href="img/sprite.svg#accumulator"></use>
                      </svg>
                      <span class="cards__item-span">
                        2000 mAh
                      </span>
                    </div>
                    <div class="cards__item-block flex">
                      <svg class="cards__item-icon">
                        <use href="img/sprite.svg#power"></use>
                      </svg>
                      <span class="cards__item-span">
                        1,2 л.с.
                      </span>
                    </div>
                  </li>
                  <li class="cards__item card-item-3 flex">
                    <div class="cards__item-block flex">
                      <svg class="cards__item-icon">
                        <use href="img/sprite.svg#speedometer"></use>
                      </svg>
                      <span class="cards__item-span">
                        60 км/ч  
                      </span> 
                    </div>
                    <div class="cards__item-block flex">
                      <svg class="cards__item-icon">
                        <use href="img/sprite.svg#timer"></use>
                      </svg>
                      <span class="cards__item-span">
                        5 часов
                      </span>
                    </div>
                  </li>
                  <li class="cards__item card-item-4 flex">
                    <div class="cards__item-price flex">
                      <span class="cards__prise-span">
                        39 900 ₽
                      </span>
                      <p class="cards__prise-text">
                        29 900 ₽
                      </p>
                    </div>
                    <div class="cards__item-links-block flex">
                      <a href="#" class="cards__item-link flex">
                        <svg class="cards__item-link-icon">
                          <use href="img/sprite.svg#shopping-cart-2"></use>
                        </svg>
                      </a>
                      <a href="#" class="cards__item-link flex">
                        <svg class="cards__item-link-icon">
                          <use href="img/sprite.svg#heart-2"></use>
                        </svg>
                      </a>
                    </div>
                  </li>
                </ul>
                <a href="#" class="cards__link btn flex" data-toggle="modal" data-target="#feedback-modal">
                  Записаться на тест-драйв
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="send">
        <div class="send__bg">
          <div class="send__container">
            <div class="send__content flex">
              <h2 class="send__title title">
                Нет нужной модели, которую хотите протестировать?
              </h2>
          
              <div class="send__form-box flex">
                <p class="send__descr">
                  Оставьте заявку, и менеджер подберет нужный самокат
                </p>
          
                <form action="handler.php" method="POST" class="send__form flex">
                  <div class="send__input-box flex">
                    <input 
                    class="send__input phone-mask flex" 
                    type="tel" 
                    name="userphone" 
                    id="user-phone"
                    placeholder="+7 (_ _ _) _ _ - _ _ - _ _" 
                    maxlength="30" 
                    required>
                    <label 
                      for="user-phone" 
                      class="send__label-form">
                    </label>
                    <button class="send__form-btn btn flex" type="submit" data-toggle="modal">
                      Оставить заявку на тест-драйв
                    </button>
                  </div>
                  <div class="send__label-box flex">
                    <label class="send__label flex">
                      <input type="checkbox" class="send__checkbox-real" required>
                      <span class="send__checkbox-custom flex"></span>
                      <p class="send__label-text">
                        Нажимая на кнопку, вы соглашаетесь на обработку персональных данных и <a href="#" class="send__politics">политикой конфиденциальности</a>
                      </p>
                    </label>
                  </div> 
                </form>
                
              </div>
            </div>
            <picture class="send__img">
              <source type="image/webp" srcset="img/form_section/manager.webp">
              <source type="image/jpeg" srcset="img/form_section/manager.png">
              <img class="send__img" src="img/form_section/manager.png" alt="manager">
            </picture>
          </div>
        </div>
      </section>
    </main>

    <footer class="footer">
      <div class="footer__form-box">
        <div class="footer__container flex">
          <h2 class="footer__form-title">
            Оставьте свою почту и станьте первым, кто получит скидку на новые самокаты
          </h2>
    
          <form action="handler.php" class="footer__form flex" method="POST">
            <input 
            class="footer__input" 
            type="Email"
            name="usermail"
            id="user-mail"
            placeholder="Введите Ваш email"
            maxlength="18"
            required>
            <button class="footer__button-form btn-sub" type="submit" data-toggle="modal">
              Подписаться
            </button>
          </form>
        </div>
      </div>
      
      <div class="footer__bg">
        <div class="footer__container middle">
          <div class="middle__block-1 flex">
            <div class="footer__catlog-block catalog flex">
              <h3 class="catalog__title">
                Каталог товаров
              </h3>
      
              <ul class="catalog__list flex">
                <li class="catalog__item">
                  <a href="#" class="catalog__item-link link">
                    Электросамокаты
                  </a>
                </li>
                <li class="catalog__item">
                  <a href="#" class="catalog__item-link link">
                    Электроскутеры
                  </a>
                </li>
                <li class="catalog__item">
                  <a href="#" class="catalog__item-link link">
                    Электровелосипеды
                  </a>
                </li>
                <li class="catalog__item">
                  <a href="#" class="catalog__item-link link">
                    Электровелосипеды
                  </a>
                </li>
              </ul>
            </div>
      
            <div class="footer__buyers-block buyers flex">
              <h3 class="buyers__title">
                Покупателям
              </h3>
      
              <div class="buyers__box-list flex">
                <ul class="buyers__list grid">
                  <li class="buyers__item b-item-1">
                    <a href="#" class="buyers__item-link link">
                      Сервисный центр
                    </a>
                  </li>
                  <li class="buyers__item b-item-2">
                    <a href="#" class="buyers__item-link link">
                      Доставка и оплата
                    </a>
                  </li>
                  <li class="buyers__item b-item-3">
                    <a href="#" class="buyers__item-link link">
                      Рассрочка
                    </a>
                  </li>
                  <li class="buyers__item b-item-4">
                    <a href="#" class="buyers__item-link link">
                      Тест-драйв
                    </a>
                  </li>
                  <li class="buyers__item b-item-5">
                    <a href="#" class="buyers__item-link link">
                      Блог
                    </a>
                  </li>
                  <li class="buyers__item b-item-6">
                    <a href="#" class="buyers__item-link link">
                      Сотрудничество
                    </a>
                  </li>
                  <li class="buyers__item b-item-7">
                    <a href="#" class="buyers__item-link link">
                      Контакты
                    </a>
                  </li>
                  <li class="buyers__item b-item-8">
                    <a href="#" class="buyers__item-link link">
                      Акции
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
      
          <div class="middle__block-2 flex">
            <div class="footer__contacts-block contacts flex">
              <div class="contacts__box-title flex">
                <h3 class="contacts__title">
                  Контакты
                </h3>
              </div>
      
              <div class="contacts__box-list flex">
                <ul class="contacts__list grid">
                  <li class="contacts__item flex c-item-1">
                    <p class="contacts__item-text">
                      Call-центр
                    </p>
                    <a href="tel:+78005055461" class="contacts__phone">+7 (800) 505-54-61</a>
                    <span class="contacts__item-span">
                      Пн-Вс 10:00 - 20:00
                    </span>
                  </li>
                  <li class="contacts__item flex c-item-2">
                    <p class="contacts__item-text">
                      Сервисный центр
                    </p>
                    <a href="tel:+74993507692" class="contacts__phone">+7 (499) 350-76-92</a>
                    <span class="contacts__item-span">
                      Пн-Вс 10:00 - 20:00
                    </span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="contacts__order-link">
              <a href="#" class="contacts__call-link link flex">
                Заказать звонок
              </a>
            </div>
          </div>
        </div>
      
        <div class="footer__container lower">
          <div class="footer__links-block-1 flex">
            <a href="#" class="footer__logo">
              <svg class="header__logo-svg">
                <use href="img/sprite.svg#Logo"></use>
              </svg>
            </a>
            <a href="#" class="footer__gplay lower-links-style flex">
            </a>
            <a href="#" class="footer__app lower-links-style flex">
            </a>
          </div>
      
          <div class="footer__links-block-2 flex">
            <a href="#" class="footer__vk lower-links-style flex">
            </a>
            <a href="#" class="footer__tube lower-links-style flex">
            </a>
            <a href="#" class="footer__telega lower-links-style flex">
            </a>
          </div>
        </div>
      
        <div class="footer__container transfer">
          <div class="footer__docs-block flex">
            <a href="#" class="footer__requisites-link link">
              Реквизиты
            </a>
            <a href="#" class="footer__politics-link link">
              Политика конфиденциальности
            </a>
          </div>
      
          <div class="footer__transfer flex">
            <ul class="footer__transfer-list flex">
              <li class="footer__transfer-item">
                <a href="#" class="footer__transfer-link flex">
                  <svg class="footer__gpay-img">
                    <use href="img/sprite.svg#g-pay"></use>
                  </svg>
                </a>
              </li>
              <li class="footer__transfer-item">
                <a href="#" class="footer__transfer-link flex">
                  <svg class="footer__apay-img">
                    <use href="img/sprite.svg#a-pay"></use>
                  </svg>
                </a>
              </li>
              <li class="footer__transfer-item">
                <a href="#" class="footer__transfer-link flex">
                  <svg class="footer__visa-img">
                    <use href="img/sprite.svg#visa"></use>
                  </svg>
                </a>
              </li>
              <li class="footer__transfer-item">
                <a href="#" class="footer__transfer-link flex">
                  <svg class="footer__mcard-img">
                    <use href="img/sprite.svg#master-card-1"></use>
                  </svg>
                </a>
              </li>
              <li class="footer__transfer-item">
                <a href="#" class="footer__transfer-link flex">
                  <svg class="footer__mcard-img">
                    <use href="img/sprite.svg#master-card-2"></use>
                  </svg>
                </a>
              </li>
              <li class="footer__transfer-item">
                <a href="#" class="footer__transfer-link flex">
                  <svg class="footer__wmoney-img">
                    <use href="img/sprite.svg#web-money"></use>
                  </svg>
                </a>
              </li>
              <li class="footer__transfer-item">
                <a href="#" class="footer__transfer-link flex">
                  <svg class="footer__qiwi-img">
                    <use href="img/sprite.svg#qiwi"></use>
                  </svg>
                </a>
              </li>
              </ul>
      
            <div class="footer__transfer-social-box social flex">
              <h3 class="social__chat-subtitle">
                Online чат:
              </h3>
      
              <ul class="social__list flex">
                <li class="social__item">
                  <a href="#" class="social__footer-link link">
                    <svg class="social__footer-icon">
                      <use href="img/sprite.svg#viber-1"></use>
                    </svg>
                  </a>
                </li>
                <li class="social__item">
                  <a href="#" class="social__footer-link link">
                    <svg class="social__footer-icon">
                      <use href="img/sprite.svg#whatsapp-1"></use>
                    </svg>
                  </a>
                </li>
                <li class="social__item">
                  <a href="#" class="social__footer-link link">
                    <svg class="social__footer-icon">
                      <use href="img/sprite.svg#telega-1"></use>
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <div class="modal flex" id="feedback-modal">
      <div class="modal__dialog flex">
        <div class="modal__dialog-info flex">
          <h2 class="modal__title">
            Запишитесь <wbr>натест-драйв электросамоката
          </h2>
          <span class="modal__span flex">
            и подберите модель для себя
          </span>
      
          <a href="#" class="modal__close flex" data-toggle="modal" data-target="#feedback-modal">
            <svg class="modal__close-icon">
              <use href="img/sprite.svg#modal-close"></use>
            </svg>
          </a>
      
          <p class="modal__text">
            Менеджер свяжется с вами в течение 5 минут, чтобы согласовать время.
          </p>

          <p class="modal__text-2">
            Как с вами удобнее связаться?
          </p>
      
          <form action="handler.php" method="POST" class="modal__form form">
            <div class="modal__input-wrapper flex">
              <input 
                class="modal__input phone-mask" 
                id="modal-user-phone" 
                type="tel" 
                name="userphone"
                placeholder="+7 (_ _ _) _ _ - _ _ - _ _" 
                maxlength="30" 
                required>
              <label for="modal-user-phone" class="modal__label-form">
              </label>  
              <button class="modal__button btn" type="submit" data-toggle="">
                Оформить предзаказ
              </button>
            </div>
            
      
            <div class="modal__label-box flex">
              <label class="modal__label flex">
                <input 
                  type="checkbox" 
                  class="modal__checkbox-real" 
                  required>
                <span class="modal__checkbox-custom flex"></span>
      
              
                <p class="modal__label-text">
                  Нажимая на кнопку, вы соглашаетесь на обработку персональных данных и <a href="#"
                    class="modal__politics link">политикой конфиденциальности</a>
                </p>
              </label>
            </div>
          </form>
        </div>
        
        <div class="modal__box-img">
          <picture class="modal__img">
            <source type="image/webp" srcset="img/modal_img/rider-2.webp">
            <source type="image/jpeg" srcset="img/modal_img/rider-2.jpg">
            <img class="modal__img" src="img/modal_img/rider-2.jpg" alt="rider">
          </picture>
        </div>
      </div>
    </div>
  </div>
</body>
</html>