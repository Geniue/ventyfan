<div id="shopify-section-header" class="shopify-section">


    <div id="NavDrawer" class="drawer drawer--right">
        <div class="drawer__fixed-header">
            <div
              class="drawer__header appear-animation appear-delay-1">
                <div class="drawer__close">
                    <button type="button"
                      class="drawer__close-button js-drawer-close">
                        <svg aria-hidden="true" focusable="false"
                          role="presentation"
                          class="icon icon-close"
                          viewBox="0 0 64 64">
                            <defs>
                                <style>
                                    .cls-1{fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:2px}
                                </style>
                            </defs>
                            <path class="cls-1"
                              d="M19 17.61l27.12 27.13m0-27.12L19 44.74" />
                        </svg>
                        <span class="icon__fallback-text">Close
                            menu</span>
                    </button>
                </div>
                <div class="drawer__title">

                </div>
            </div>
        </div>
        <div class="drawer__inner">

            <ul class="mobile-nav" role="navigation"
              aria-label="Primary">


                <li
                  class="mobile-nav__item appear-animation appear-delay-2">

                    <a href="{{route("foldable_fan")}}"
                      class="mobile-nav__link">Shop</a>


                </li>


                <li
                  class="mobile-nav__item appear-animation appear-delay-3">

                    <a href="{{route('reviews')}}"
                      class="mobile-nav__link">Reviews</a>


                </li>


                <li
                  class="mobile-nav__item appear-animation appear-delay-4">

                    <a href="{{route("contact")}}"
                      class="mobile-nav__link">Contact Us</a>


                </li>


                <li
                  class="mobile-nav__item appear-animation appear-delay-5">

                    <div class="mobile-nav__has-sublist">

                        <button type="button"
                          class="mobile-nav__link--button collapsible-trigger collapsible--auto-height"
                          aria-controls="Linklist-more">
                            <span
                              class="mobile-nav__faux-link">More</span>
                            <div class="mobile-nav__toggle">
                                <span>
                                    <span
                                      class="collapsible-trigger__icon collapsible-trigger__icon--open"
                                      role="presentation">
                                        <svg aria-hidden="true"
                                          focusable="false"
                                          role="presentation"
                                          class="icon icon--wide icon-chevron-down"
                                          viewBox="0 0 28 16">
                                            <path
                                              d="M1.57 1.59l12.76 12.77L27.1 1.59"
                                              stroke-width="2"
                                              stroke="#000"
                                              fill="none"
                                              fill-rule="evenodd" />
                                        </svg>
                                    </span>

                                </span>
                            </div>
                        </button>

                    </div>


                    <div id="Linklist-more"
                      class="mobile-nav__sublist collapsible-content collapsible-content--all"
                      aria-labelledby="Label-more">
                        <div class="collapsible-content__inner">
                            <ul class="mobile-nav__sublist">


                                <li class="mobile-nav__item">
                                    <div
                                      class="mobile-nav__child-item">

                                        <a href="{{route('instruction_manual')}}"
                                          class="mobile-nav__link"
                                          id="Sublabel-manual">
                                            Manual
                                        </a>


                                    </div>


                                </li>


                                <li class="mobile-nav__item">
                                    <div
                                      class="mobile-nav__child-item">

                                        <a href="{{route("about_us")}}"
                                          class="mobile-nav__link"
                                          id="Sublabel-about">
                                            About
                                        </a>


                                    </div>


                                </li>


                                <li class="mobile-nav__item">
                                    <div
                                      class="mobile-nav__child-item">

                                        <a href="{{route("faqs")}}"
                                          class="mobile-nav__link"
                                          id="Sublabel-faq">
                                            FAQ
                                        </a>


                                    </div>


                                </li>

                            </ul>
                        </div>
                    </div>

                </li>


                <li
                  class="mobile-nav__item appear-animation appear-delay-6">
                    <a href="/account/login"
                      class="mobile-nav__link">Log in</a>
                </li>


                <li class="mobile-nav__spacer"></li>

            </ul>

            <span
              class="currency-picker__wrapper currency-picker--drawer">

                <label for="CurrencyPicker-drawer"
                  class="visually-hidden">Pick a currency</label>
                <select class="currency-input"
                  id="CurrencyPicker-drawer" name="currencies">


                    <option value="USD" selected="selected">USD
                    </option>


                    <option value="CAD">CAD</option>


                    <option value="GBP">GBP</option>


                    <option value="AUD">AUD</option>


                    <option value="EUR">EUR</option>


                    <option value="JPY">JPY</option>


                    <option value="CHF">CHF</option>


                    <option value="NZD">NZD</option>


                    <option value="SGD">SGD</option>


                    <option value="INR">INR</option>


                    <option value="MYR">MYR</option>


                </select>

            </span>


            <ul class="mobile-nav__social">

                <li class="appear-animation appear-delay-7">
                    <a href="https://www.facebook.com/theventyfan"
                      title="V E N T Y on Facebook">
                        <svg aria-hidden="true" focusable="false"
                          role="presentation"
                          class="icon icon-facebook"
                          viewBox="0 0 32 32">
                            <path fill="#444"
                              d="M18.56 31.36V17.28h4.48l.64-5.12h-5.12v-3.2c0-1.28.64-2.56 2.56-2.56h2.56V1.28H19.2c-3.84 0-7.04 2.56-7.04 7.04v3.84H7.68v5.12h4.48v14.08h6.4z" />
                        </svg>
                        <span
                          class="icon__fallback-text">Facebook</span>
                    </a>
                </li>


                <li class="appear-animation appear-delay-8">
                    <a href="https://www.instagram.com/ventyfan/"
                      title="V E N T Y on Instagram">
                        <svg aria-hidden="true" focusable="false"
                          role="presentation"
                          class="icon icon-instagram"
                          viewBox="0 0 32 32">
                            <path fill="#444"
                              d="M16 3.094c4.206 0 4.7.019 6.363.094 1.538.069 2.369.325 2.925.544.738.287 1.262.625 1.813 1.175s.894 1.075 1.175 1.813c.212.556.475 1.387.544 2.925.075 1.662.094 2.156.094 6.363s-.019 4.7-.094 6.363c-.069 1.538-.325 2.369-.544 2.925-.288.738-.625 1.262-1.175 1.813s-1.075.894-1.813 1.175c-.556.212-1.387.475-2.925.544-1.663.075-2.156.094-6.363.094s-4.7-.019-6.363-.094c-1.537-.069-2.369-.325-2.925-.544-.737-.288-1.263-.625-1.813-1.175s-.894-1.075-1.175-1.813c-.212-.556-.475-1.387-.544-2.925-.075-1.663-.094-2.156-.094-6.363s.019-4.7.094-6.363c.069-1.537.325-2.369.544-2.925.287-.737.625-1.263 1.175-1.813s1.075-.894 1.813-1.175c.556-.212 1.388-.475 2.925-.544 1.662-.081 2.156-.094 6.363-.094zm0-2.838c-4.275 0-4.813.019-6.494.094-1.675.075-2.819.344-3.819.731-1.037.4-1.913.944-2.788 1.819S1.486 4.656 1.08 5.688c-.387 1-.656 2.144-.731 3.825-.075 1.675-.094 2.213-.094 6.488s.019 4.813.094 6.494c.075 1.675.344 2.819.731 3.825.4 1.038.944 1.913 1.819 2.788s1.756 1.413 2.788 1.819c1 .387 2.144.656 3.825.731s2.213.094 6.494.094 4.813-.019 6.494-.094c1.675-.075 2.819-.344 3.825-.731 1.038-.4 1.913-.944 2.788-1.819s1.413-1.756 1.819-2.788c.387-1 .656-2.144.731-3.825s.094-2.212.094-6.494-.019-4.813-.094-6.494c-.075-1.675-.344-2.819-.731-3.825-.4-1.038-.944-1.913-1.819-2.788s-1.756-1.413-2.788-1.819c-1-.387-2.144-.656-3.825-.731C20.812.275 20.275.256 16 .256z" />
                            <path fill="#444"
                              d="M16 7.912a8.088 8.088 0 0 0 0 16.175c4.463 0 8.087-3.625 8.087-8.088s-3.625-8.088-8.088-8.088zm0 13.338a5.25 5.25 0 1 1 0-10.5 5.25 5.25 0 1 1 0 10.5zM26.294 7.594a1.887 1.887 0 1 1-3.774.002 1.887 1.887 0 0 1 3.774-.003z" />
                        </svg>
                        <span
                          class="icon__fallback-text">Instagram</span>
                    </a>
                </li>


            </ul>

        </div>
    </div>


    <div id="CartDrawer"
      class="drawer drawer--right drawer--has-fixed-footer">
        <div class="drawer__fixed-header">
            <div
              class="drawer__header appear-animation appear-delay-1">
                <!--         <div class="drawer__title">Cart</div> -->
                <div class="drawer__close">
                    <button type="button"
                      class="drawer__close-button js-drawer-close">
                        <svg aria-hidden="true" focusable="false"
                          role="presentation"
                          class="icon icon-close"
                          viewBox="0 0 64 64">
                            <defs>
                                <style>
                                    .cls-1{fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:2px}
                                </style>
                            </defs>
                            <path class="cls-1"
                              d="M19 17.61l27.12 27.13m0-27.12L19 44.74" />
                        </svg>
                        <span class="icon__fallback-text">Close
                            cart</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="drawer__inner">
            <div id="CartContainer" class="drawer__cart"></div>
        </div>
    </div>


    <style>
        .site-nav__link,
        .site-nav__dropdown-link {
          font-size: 16px;
        }
        
        
          .site-nav__link {
            padding-left: 8px;
            padding-right: 8px;
          }
        
    </style>

    <div data-section-id="header"
      data-section-type="header-section">
        <div class="header-wrapper">


            <div class="announcement">

                <a href="/products/foldable-fan"
                  class="announcement__link">


                    <span
                      class="announcement__text announcement__text--open"
                      data-text="free-shipping-on-2-fans-ships-today">
                        FREE SHIPPING ON 2 + FANS. SHIPS TODAY.
                    </span>


                </a>


            </div>


            <header class="site-header" data-sticky="true">
                <div class="page-width">
                    <div class="header-layout header-layout--left"
                      data-logo-align="left">


                        <div class="header-item header-item--logo">


                            <style>
                                .header-item--logo,
                                .header-layout--left-center .header-item--logo,
                                .header-layout--left-center .header-item--icons {
                                  -webkit-box-flex: 0 1 90px;
                                  -ms-flex: 0 1 90px;
                                  flex: 0 1 90px;
                                }
                                
                                @media only screen and (min-width: 590px) {
                                  .header-item--logo,
                                  .header-layout--left-center .header-item--logo,
                                  .header-layout--left-center .header-item--icons {
                                    -webkit-box-flex: 0 0 150px;
                                    -ms-flex: 0 0 150px;
                                    flex: 0 0 150px;
                                  }
                                }
                                
                                .site-header__logo a {
                                  max-width: 90px;
                                }
                                .is-light .site-header__logo .logo--inverted {
                                  max-width: 90px;
                                }
                                @media only screen and (min-width: 590px) {
                                  .site-header__logo a {
                                    max-width: 150px;
                                  }
                                
                                  .is-light .site-header__logo .logo--inverted {
                                    max-width: 150px;
                                  }
                                }
                            </style>


                            <h1 class="site-header__logo" itemscope
                              itemtype="http://schema.org/Organization">


                                <a href="/" itemprop="url"
                                  class="site-header__logo-link">
                                    <img class="small--hide"
                                      src="{{asset('assets/Vento_b_w_73160ec2-14d4-402b-96df-3bf92ae93b66_150x.webp')}}"
                                      alt="V E N T Y"
                                      itemprop="logo">
                                </a>


                            </h1>


                        </div>


                        <div
                          class="header-item header-item--navigation">


                            <ul
                              class="site-nav site-navigation medium-down--hide"
                              role="navigation"
                              aria-label="Primary">


                                <li
                                  class="site-nav__item site-nav__expanded-item">

                                    <a href="/products/foldable-fan"
                                      class="site-nav__link">
                                        Shop

                                    </a>

                                </li>


                                <li
                                  class="site-nav__item site-nav__expanded-item">

                                    <a href="/pages/reviews"
                                      class="site-nav__link">
                                        Reviews

                                    </a>

                                </li>


                                <li
                                  class="site-nav__item site-nav__expanded-item">

                                    <a href="/pages/contact"
                                      class="site-nav__link">
                                        Contact Us

                                    </a>

                                </li>


                                <li
                                  class="site-nav__item site-nav__expanded-item site-nav--has-dropdown"
                                  aria-haspopup="true">

                                    <a href="#"
                                      class="site-nav__link site-nav__link--has-dropdown">
                                        More

                                        <svg aria-hidden="true"
                                          focusable="false"
                                          role="presentation"
                                          class="icon icon--wide icon-chevron-down"
                                          viewBox="0 0 28 16">
                                            <path
                                              d="M1.57 1.59l12.76 12.77L27.1 1.59"
                                              stroke-width="2"
                                              stroke="#000"
                                              fill="none"
                                              fill-rule="evenodd" />
                                        </svg>

                                    </a>

                                    <ul
                                      class="site-nav__dropdown text-left">


                                        <li class="">
                                            <a href="/pages/instruction-manual"
                                              class="site-nav__dropdown-link site-nav__dropdown-link--second-level ">
                                                Manual

                                            </a>

                                        </li>


                                        <li class="">
                                            <a href="/pages/about-us"
                                              class="site-nav__dropdown-link site-nav__dropdown-link--second-level ">
                                                About

                                            </a>

                                        </li>


                                        <li class="">
                                            <a href="/pages/faq"
                                              class="site-nav__dropdown-link site-nav__dropdown-link--second-level ">
                                                FAQ

                                            </a>

                                        </li>

                                    </ul>

                                </li>

                            </ul>

                        </div>


                        <div class="header-item header-item--icons">
                            <div class="site-nav site-nav--icons">
                                <div class="gtranslate_wrapper">
                                </div>
                                <script>
                                    window.gtranslateSettings = {"default_language":"en","detect_browser_language":true,"languages":["en","tl","fr","de","ja","ms","th","vi"],"wrapper_selector":".gtranslate_wrapper"}
                                </script>
                                <script
                                  src="https://cdn.gtranslate.net/widgets/latest/dropdown.js"
                                  defer></script>


                                <span
                                  class="currency-picker__wrapper medium-down--hide">

                                    <label
                                      for="CurrencyPicker-header"
                                      class="visually-hidden">Pick a
                                        currency</label>
                                    <select class="currency-input"
                                      id="CurrencyPicker-header"
                                      name="currencies">


                                        <option value="USD"
                                          selected="selected">USD
                                        </option>


                                        <option value="CAD">CAD
                                        </option>


                                        <option value="GBP">GBP
                                        </option>


                                        <option value="AUD">AUD
                                        </option>


                                        <option value="EUR">EUR
                                        </option>


                                        <option value="JPY">JPY
                                        </option>


                                        <option value="CHF">CHF
                                        </option>


                                        <option value="NZD">NZD
                                        </option>


                                        <option value="SGD">SGD
                                        </option>


                                        <option value="INR">INR
                                        </option>


                                        <option value="MYR">MYR
                                        </option>


                                    </select>

                                </span>


                                <div class="site-nav__icons">

                                    <a class="site-nav__link site-nav__link--icon medium-down--hide"
                                      href="/account">
                                        <svg aria-hidden="true"
                                          focusable="false"
                                          role="presentation"
                                          class="icon icon-user"
                                          viewBox="0 0 64 64">
                                            <defs>
                                                <style>
                                                    .cls-1{fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:2px}
                                                </style>
                                            </defs>
                                            <path class="cls-1"
                                              d="M35 39.84v-2.53c3.3-1.91 6-6.66 6-11.41 0-7.63 0-13.82-9-13.82s-9 6.19-9 13.82c0 4.75 2.7 9.51 6 11.41v2.53c-10.18.85-18 6-18 12.16h42c0-6.19-7.82-11.31-18-12.16z" />
                                        </svg>
                                        <span
                                          class="icon__fallback-text">

                                            Log in

                                        </span>
                                    </a>


                                    <button type="button"
                                      class="site-nav__link site-nav__link--icon js-drawer-open-nav large-up--hide"
                                      aria-controls="NavDrawer">
                                        <svg aria-hidden="true"
                                          focusable="false"
                                          role="presentation"
                                          class="icon icon-hamburger"
                                          viewBox="0 0 64 64">
                                            <defs>
                                                <style>
                                                    .cls-1{fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:2px}
                                                </style>
                                            </defs>
                                            <path class="cls-1"
                                              d="M7 15h51M7 32h43M7 49h51" />
                                        </svg>
                                        <span
                                          class="icon__fallback-text">Site
                                            navigation</span>
                                    </button>


                                    <div
                                      class="header-item header-item--logo mobile-logo">


                                        <style>
                                            .header-item--logo,
                                            .header-layout--left-center .header-item--logo,
                                            .header-layout--left-center .header-item--icons {
                                              -webkit-box-flex: 0 1 90px;
                                              -ms-flex: 0 1 90px;
                                              flex: 0 1 90px;
                                            }
                                            
                                            @media only screen and (min-width: 590px) {
                                              .header-item--logo,
                                              .header-layout--left-center .header-item--logo,
                                              .header-layout--left-center .header-item--icons {
                                                -webkit-box-flex: 0 0 150px;
                                                -ms-flex: 0 0 150px;
                                                flex: 0 0 150px;
                                              }
                                            }
                                            
                                            .site-header__logo a {
                                              max-width: 90px;
                                            }
                                            .is-light .site-header__logo .logo--inverted {
                                              max-width: 90px;
                                            }
                                            @media only screen and (min-width: 590px) {
                                              .site-header__logo a {
                                                max-width: 150px;
                                              }
                                            
                                              .is-light .site-header__logo .logo--inverted {
                                                max-width: 150px;
                                              }
                                            }
                                        </style>


                                        <h1
                                          class="site-header__logo"
                                          itemscope
                                          itemtype="http://schema.org/Organization">


                                            <a href="/"
                                              itemprop="url"
                                              class="site-header__logo-link">
                                                <img
                                                  class="small--hide"
                                                  src="{{asset('assets/Vento_b_w_73160ec2-14d4-402b-96df-3bf92ae93b66_150x.webp')}}"
                                                  alt="V E N T Y"
                                                  itemprop="logo">
                                                <img
                                                  class="medium-up--hide"
                                                  src="{{asset('assets/Vento_b_w_73160ec2-14d4-402b-96df-3bf92ae93b66_90x.webp')}}"
                                                  alt="V E N T Y">
                                            </a>


                                        </h1>


                                    </div>

                                    <a href="/cart"
                                      class="site-nav__link site-nav__link--icon js-drawer-open-cart js-no-transition"
                                      aria-controls="CartDrawer">
                                        <span class="cart-link">
                                            <svg aria-hidden="true"
                                              focusable="false"
                                              role="presentation"
                                              class="icon icon-cart"
                                              viewBox="0 0 64 64">
                                                <defs>
                                                    <style>
                                                        .cls-1{fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:2px}
                                                    </style>
                                                </defs>
                                                <path class="cls-1"
                                                  d="M14 17.44h46.79l-7.94 25.61H20.96l-9.65-35.1H3" />
                                                <circle cx="27"
                                                  cy="53" r="2" />
                                                <circle cx="47"
                                                  cy="53" r="2" />
                                            </svg>
                                            <span
                                              class="icon__fallback-text">Cart</span>
                                            <span
                                              class="cart-link__bubble"></span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
                <div class="site-header__search-container">
                    <div class="site-header__search">
                        <div class="page-width">
                            <form action="/search" method="get"
                              class="site-header__search-form"
                              role="search">

                                <input type="hidden" name="type"
                                  value="product">

                                <button type="submit"
                                  class="text-link site-header__search-btn">
                                    <svg aria-hidden="true"
                                      focusable="false"
                                      role="presentation"
                                      class="icon icon-search"
                                      viewBox="0 0 64 64">
                                        <defs>
                                            <style>
                                                .cls-1{fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:2px}
                                            </style>
                                        </defs>
                                        <path class="cls-1"
                                          d="M47.16 28.58A18.58 18.58 0 1 1 28.58 10a18.58 18.58 0 0 1 18.58 18.58zM54 54L41.94 42" />
                                    </svg>
                                    <span
                                      class="icon__fallback-text">Search</span>
                                </button>
                                <input type="search" name="q"
                                  value=""
                                  placeholder="Search our store"
                                  class="site-header__search-input"
                                  aria-label="Search our store">
                            </form>
                            <button type="button"
                              class="js-search-header-close text-link site-header__search-btn">
                                <svg aria-hidden="true"
                                  focusable="false"
                                  role="presentation"
                                  class="icon icon-close"
                                  viewBox="0 0 64 64">
                                    <defs>
                                        <style>
                                            .cls-1{fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:2px}
                                        </style>
                                    </defs>
                                    <path class="cls-1"
                                      d="M19 17.61l27.12 27.13m0-27.12L19 44.74" />
                                </svg>
                                <span
                                  class="icon__fallback-text">"Close
                                    (esc)"</span>
                            </button>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </div>


</div>