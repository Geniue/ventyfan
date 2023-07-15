@extends("layouts.index")

@section('head')
<link rel="stylesheet" href="{{asset('css/review.css')}}">


<style>
    @-webkit-keyframes jdgm-spin {
     0% {
      -webkit-transform:rotate(0deg);
      -ms-transform:rotate(0deg);
      transform:rotate(0deg)
     }
     100% {
      -webkit-transform:rotate(359deg);
      -ms-transform:rotate(359deg);
      transform:rotate(359deg)
     }
    }
    @keyframes jdgm-spin {
     0% {
      -webkit-transform:rotate(0deg);
      -ms-transform:rotate(0deg);
      transform:rotate(0deg)
     }
     100% {
      -webkit-transform:rotate(359deg);
      -ms-transform:rotate(359deg);
      transform:rotate(359deg)
     }
    }
    @font-face {
     font-family:'JudgemeStar';
     src:url("data:application/x-font-woff;charset=utf-8;base64,d09GRgABAAAAAAScAA0AAAAABrAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABGRlRNAAAEgAAAABoAAAAcbyQ+3kdERUYAAARgAAAAHgAAACAAMwAGT1MvMgAAAZgAAABGAAAAVi+vS9xjbWFwAAAB8AAAAEAAAAFKwBMjvmdhc3AAAARYAAAACAAAAAj//wADZ2x5ZgAAAkAAAAEJAAABdH33LXtoZWFkAAABMAAAAC0AAAA2BroQKWhoZWEAAAFgAAAAHAAAACQD5QHQaG10eAAAAeAAAAAPAAAAFAYAAABsb2NhAAACMAAAAA4AAAAOAO4AeG1heHAAAAF8AAAAHAAAACAASgAvbmFtZQAAA0wAAADeAAABkorWfVZwb3N0AAAELAAAACkAAABEp3ubLXgBY2BkYADhPPP4OfH8Nl8ZuJkYQODS2fRrCPr/aSYGxq1ALgcDWBoAO60LkwAAAHgBY2BkYGDc+v80gx4TAwgASaAICmABAFB+Arl4AWNgZGBgYGPQYWBiAAIwyQgWc2AAAwAHVQB6eAFjYGRiYJzAwMrAwejDmMbAwOAOpb8ySDK0MDAwMbByMsCBAAMCBKS5pjA4PGB4wMR44P8BBj3GrQymQGFGkBwAjtgK/gAAeAFjYoAAEA1jAwAAZAAHAHgB3crBCcAwDEPRZydkih567CDdf4ZskmLwFBV8xBfCaC4BXkOUmx4sU0h2ngNb9V0vQCxaRKIAevT7fGWuBrEAAAAAAAAAAAA0AHgAugAAeAF9z79Kw1AUx/FzTm7un6QmJtwmQ5Bg1abgEGr/BAqlU6Gju+Cgg1MkQ/sA7Vj7BOnmO/gUvo2Lo14NqIO6/IazfD8HEODtmQCfoANwNsyp2/GJt3WKQrd1NLiYYWx2PBqOsmJMEOznPOTzfSCrhAtbbLdmeFLJV9eKd63WLrZcIcuaEVdssWCKM6pLCfTVOYbz/0pNSMSZKLIZpvh78sAUH6PlMrreTCabP9r+Z/puPZ2ur/RqpQHgh+MIegCnXeM4MRAPjYN//5tj4ZtTjkFqEdmeMShlEJ7tVAly2TAkx6R68Fl4E/aVvn8JqHFQ4JS1434gXKcuL31dDhzs3YbsEOAd/IU88gAAAHgBfY4xTgMxEEVfkk0AgRCioKFxQYd2ZRtpixxgRU2RfhU5q5VWseQ4JdfgAJyBlmNwAM7ABRhZQ0ORwp7nr+eZAa54YwYg9zm3ynPOeFRe8MCrciXOh/KSS76UV5L/iDmrLiS5AeU519wrL3jmSbkS5115yR2fyivJv9kx0ZMZ2RLZw27q87iNQi8EBo5FSPIMw3HqBboi5lKTGAGDp8FKXWP+t9TU01Lj5His1Ba6uM9dTEMwvrFmbf5GC/q2drW3ruXUhhsCiQOjznFlCzYhHUZp4xp76vsvQh89CQAAeAFjYGJABowM6IANLMrEyMTIzMjCXpyRWJBqZshWXJJYBKOMAFHFBucAAAAAAAAB//8AAngBY2BkYGDgA2IJBhBgAvKZGViBJAuYxwAABJsAOgAAeAFjYGBgZACCk535hiD60tn0azAaAEqpB6wAAA==") format("woff");
     font-weight:normal;
     font-style:normal
    }
    .jdgm-star {
     font-family:'JudgemeStar';
     display:inline !important;
     text-decoration:none !important;
     padding:0 4px 0 0 !important;
     margin:0 !important;
     font-weight:bold;
     opacity:1;
     -webkit-font-smoothing:antialiased;
     -moz-osx-font-smoothing:grayscale
    }
    .jdgm-star:hover {
     opacity:1
    }
    .jdgm-star:last-of-type {
     padding:0 !important
    }
    .jdgm-star.jdgm--on:before {
     content:"\e000"
    }
    .jdgm-star.jdgm--off:before {
     content:"\e001"
    }
    .jdgm-star.jdgm--half:before {
     content:"\e002"
    }
    .jdgm-widget * {
     margin:0;
     line-height:1.4;
     -webkit-box-sizing:border-box;
     -moz-box-sizing:border-box;
     box-sizing:border-box;
     -webkit-overflow-scrolling:touch
    }
    .jdgm-hidden {
     display:none !important;
     visibility:hidden !important
    }
    .jdgm-temp-hidden {
     display:none
    }
    .jdgm-spinner {
     width:40px;
     height:40px;
     margin:auto;
     border-radius:50%;
     border-top:2px solid #eee;
     border-right:2px solid #eee;
     border-bottom:2px solid #eee;
     border-left:2px solid #ccc;
     -webkit-animation:jdgm-spin 0.8s infinite linear;
     animation:jdgm-spin 0.8s infinite linear
    }
    .jdgm-prev-badge {
     display:block !important
    }
    
</style>
@endsection

@section("content")
<main class="main-content" id="MainContent">
    <div id="judgeme_all_reviews_page"
      class="page clearfix jdgm-all-reviews-page">
        <div class="jdgm-all-reviews-page__wrapper">
            <h1 class="jdgm-all-reviews-page__title">Reviews</h1>
            <div class="jdgm-all-reviews-page__description"></div>


            <article
              class="jdgm-widget jdgm-all-reviews-widget jdgm--done-setup-widget">
                <div class="jdgm-all-reviews__header"
                  data-number-of-reviews="1875" data-average-rating="4.77"
                  data-number-of-product-reviews="1778"
                  data-number-of-shop-reviews="97">
                    <div
                      class="jdgm-all-reviews__summary jdgm-rev-widg__summary">
                        <div class="jdgm-rev-widg__summary-inner">
                            <div class="jdgm-all-reviews__summary-stars"
                              tabindex="0" aria-label="Average rating is 4.77"
                              role="img"> <span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span> </div>
                            <div class="jdgm-all-reviews__summary-text">Based on
                                1875 reviews</div>
                        </div>
                    </div>
                    <div class="jdgm-widget-actions-wrapper">

                        <a style="" href="#"
                          class="jdgm-write-rev-link js-no-transition"
                          aria-expanded="false">Write a Store Review</a>
                    </div>
                    <div class="jdgm-histogram jdgm-temp-hidden">
                        <div class="jdgm-histogram__row" data-rating="5"
                          data-frequency="1660" data-percentage="89">
                            <div class="jdgm-histogram__star" role="button"
                              aria-label="89% (1660) reviews with 5 star rating"
                              tabindex="0"><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span></div>
                            <div class="jdgm-histogram__bar">
                                <div class="jdgm-histogram__bar-content"
                                  style="width: 89%;"> </div>
                            </div>
                            <div class="jdgm-histogram__percentage">89%</div>
                            <div class="jdgm-histogram__frequency">(1660)</div>
                        </div>
                        <div class="jdgm-histogram__row" data-rating="4"
                          data-frequency="112" data-percentage="6">
                            <div class="jdgm-histogram__star" role="button"
                              aria-label="6% (112) reviews with 4 star rating"
                              tabindex="0"><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--off"></span></div>
                            <div class="jdgm-histogram__bar">
                                <div class="jdgm-histogram__bar-content"
                                  style="width: 6%;"> </div>
                            </div>
                            <div class="jdgm-histogram__percentage">6%</div>
                            <div class="jdgm-histogram__frequency">(112)</div>
                        </div>
                        <div class="jdgm-histogram__row" data-rating="3"
                          data-frequency="43" data-percentage="2">
                            <div class="jdgm-histogram__star" role="button"
                              aria-label="2% (43) reviews with 3 star rating"
                              tabindex="0"><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--off"></span><span
                                  class="jdgm-star jdgm--off"></span></div>
                            <div class="jdgm-histogram__bar">
                                <div class="jdgm-histogram__bar-content"
                                  style="width: 2%;"> </div>
                            </div>
                            <div class="jdgm-histogram__percentage">2%</div>
                            <div class="jdgm-histogram__frequency">(43)</div>
                        </div>
                        <div class="jdgm-histogram__row" data-rating="2"
                          data-frequency="14" data-percentage="1">
                            <div class="jdgm-histogram__star" role="button"
                              aria-label="1% (14) reviews with 2 star rating"
                              tabindex="0"><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--off"></span><span
                                  class="jdgm-star jdgm--off"></span><span
                                  class="jdgm-star jdgm--off"></span></div>
                            <div class="jdgm-histogram__bar">
                                <div class="jdgm-histogram__bar-content"
                                  style="width: 1%;"> </div>
                            </div>
                            <div class="jdgm-histogram__percentage">1%</div>
                            <div class="jdgm-histogram__frequency">(14)</div>
                        </div>
                        <div class="jdgm-histogram__row" data-rating="1"
                          data-frequency="46" data-percentage="2">
                            <div class="jdgm-histogram__star" role="button"
                              aria-label="2% (46) reviews with 1 star rating"
                              tabindex="0"><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--off"></span><span
                                  class="jdgm-star jdgm--off"></span><span
                                  class="jdgm-star jdgm--off"></span><span
                                  class="jdgm-star jdgm--off"></span></div>
                            <div class="jdgm-histogram__bar">
                                <div class="jdgm-histogram__bar-content"
                                  style="width: 2%;"> </div>
                            </div>
                            <div class="jdgm-histogram__percentage">2%</div>
                            <div class="jdgm-histogram__frequency">(46)</div>
                        </div>
                        <div
                          class="jdgm-histogram__row jdgm-histogram__clear-filter"
                          data-rating="null" tabindex="0">See all reviews</div>
                    </div>
                    <div class="jdgm-rev-widg__sort-wrapper">
                        <div class="jdgm-sort-dropdown-wrapper">
                            <select class="jdgm-sort-dropdown"
                              aria-label="Sort dropdown">
                                <option value="most-recent">Most Recent</option>
                                <option value="highest-rating">Highest Rating
                                </option>
                                <option value="lowest-rating">Lowest Rating
                                </option>
                                <option value="with-pictures">Only Pictures
                                </option>
                                <option value="pictures-first">Pictures First
                                </option>
                                <option value="videos-first">Videos First
                                </option>
                                <option value="most-helpful">Most Helpful
                                </option>
                            </select><span
                              class="jdgm-sort-dropdown-arrow"></span>
                        </div>
                    </div>

                    <div class="jdgm-rev__br"></div>
                    <div class="jdgm-form-wrapper" style="display: none">
                        <form class="jdgm-form" novalidate="novalidate">
                            <div class="jdgm-form__name-fieldset">

                                <label
                                  for="jdgm_review_reviewer_name_z3c372oxn">Name</label>

                                <span
                                  class="jdgm-form__reviewer-name-format-container">
                                    (<label
                                      for="jdgm_review_reviewer_name_format_z3c372oxn"
                                      class="jdgm-form__inline-label jdgm-always-visible">displayed
                                        publicly like</label>
                                    <span
                                      class="jdgm-form__reviewer-name-format-dropdown-wrapper">
                                        <select
                                          id="jdgm_review_reviewer_name_format_z3c372oxn"
                                          name="reviewer_name_format"
                                          class="jdgm-form__reviewer-name-format-dropdown">


                                            <option value="" selected="">John
                                                Smith</option>

                                            <option value="last_initial">John S.
                                            </option>

                                            <option value="all_initials">J.S.
                                            </option>

                                            <option value="anonymous">Anonymous
                                            </option>

                                        </select>
                                        <span
                                          class="jdgm-form__reviewer-name-format-dropdown-arrow"></span>
                                    </span>
                                    )
                                </span>

                                <input id="jdgm_review_reviewer_name_z3c372oxn"
                                  name="reviewer_name" type="text"
                                  placeholder="Enter your name (public)"
                                  aria-label="Name">
                            </div>

                            <div class="jdgm-form__email-fieldset">

                                <label
                                  for="jdgm_review_reviewer_email_z3c372oxn">Email</label>
                                <input id="jdgm_review_reviewer_email_z3c372oxn"
                                  name="reviewer_email" type="email" required=""
                                  placeholder="Enter your email (private)"
                                  aria-label="Email" aria-required="true">
                            </div>

                            <div class="jdgm-form__rating-fieldset"
                              aria-label="Rating">
                                <label>Rating</label>
                                <span class="jdgm-form__rating"
                                  style="cursor: pointer;"><a data-alt="1"
                                      class="jdgm-star jdgm--on" title="1 star"
                                      role="button" aria-label="1 star"></a><a
                                      data-alt="2" class="jdgm-star jdgm--on"
                                      title="2 stars" role="button"
                                      aria-label="2 stars"></a><a data-alt="3"
                                      class="jdgm-star jdgm--on" title="3 stars"
                                      role="button" aria-label="3 stars"></a><a
                                      data-alt="4" class="jdgm-star jdgm--on"
                                      title="4 stars" role="button"
                                      aria-label="4 stars"></a><a data-alt="5"
                                      class="jdgm-star jdgm--on" title="5 stars"
                                      role="button" tabindex="0"
                                      aria-label="5 stars"></a><input
                                      name="score" type="hidden"
                                      value="5"></span>
                            </div>

                            <div class="jdgm-form__title-fieldset">

                                <label for="jdgm_review_title_z3c372oxn">Review
                                    Title</label><span
                                  class="jdgm-countdown"></span>
                                <input id="jdgm_review_title_z3c372oxn"
                                  name="review_title" type="text"
                                  placeholder="Give your review a title"
                                  aria-label="Review Title">
                            </div>

                            <div class="jdgm-form__body-fieldset">

                                <label
                                  for="jdgm_review_body_z3c372oxn">Review</label><span
                                  class="jdgm-countdown"></span>
                                <textarea id="jdgm_review_body_z3c372oxn"
                                  rows="5" name="review_body"
                                  placeholder="Write your comments here"
                                  aria-label="Review"></textarea>
                            </div>

                            <div class="jdgm-custom-forms"></div>


                            <label
                              class="jdgm-picture-fieldset-title">Picture/Video
                                (optional)</label>

                            <div class="jdgm-picture-fieldset">

                                <div
                                  class="jdgm-picture-fieldset__container jdgm-media-fieldset__container">
                                    <label
                                      class="jdgm-picture-fieldset__box jdgm-picture-fieldset__box--input">
                                        <div
                                          class="jdgm-picture-fieldset__box-wrapper">
                                            <div
                                              class="jdgm-picture-fieldset__icon jdgm-photocamera-icon">
                                            </div>
                                        </div>

                                        <input type="file" name="pictures"
                                          class="jdgm-picture-fieldset__input"
                                          multiple=""
                                          accept="image/gif,image/jpeg,image/jpg,image/png,image/webp"
                                          aria-label="Choose a review picture (optional)">
                                        <div style="display: none !important"
                                          aria-label="Choose a review picture (optional)">
                                            Choose a review picture (optional)
                                        </div>
                                    </label>
                                </div>


                            </div>


                            <input type="submit"
                              class="jdgm-submit-rev btn btn_c button "
                              value="Submit Review">
                        </form>
                    </div>
                    <div class="jdgm-form-dynamic-wrapper"
                      style="display: none">
                        <div class="jdgm-mask"></div>
                        <form class="jdgm-form-dynamic" novalidate="novalidate">

                            <div
                              class="jdgm-form-dynamic__close jdgm-close-ico">
                            </div>

                            <div
                              class="jdgm-form-dynamic__picture-upload-field jdgm-form-dynamic__row"
                              data-pos="0">

                                <label
                                  class="jdgm-picture-dynamic-fieldset-title">Picture/Video
                                    (optional)</label>

                                <div class="jdgm-picture-dynamic-fieldset">
                                    <div
                                      class="jdgm-picture-fieldset__container jdgm-media-fieldset__container">
                                        <label
                                          class="jdgm-picture-fieldset__box jdgm-picture-fieldset__box--input">
                                            <div
                                              class="jdgm-picture-fieldset__box-wrapper">
                                                <div
                                                  class="jdgm-picture-fieldset__icon jdgm-photocamera-icon">
                                                </div>
                                            </div>

                                            <input type="file" name="pictures"
                                              class="jdgm-picture-fieldset__input"
                                              multiple=""
                                              accept="image/gif,image/jpeg,image/jpg,image/png,image/webp"
                                              aria-label="Choose a review picture (optional)">
                                            <div
                                              style="display: none !important"
                                              aria-label="Choose a review picture (optional)">
                                                Choose a review picture
                                                (optional)</div>
                                        </label>
                                    </div>
                                </div>


                                <div class="jdgm-form-dynamic__buttons-row">
                                    <div
                                      class="jdgm-btn jdgm-btn--border jdgm-form-dynamic__back btn btn_c button"
                                      tabindex="0" role="button">Back</div>
                                    <div
                                      class="jdgm-btn jdgm-btn--solid jdgm-form-dynamic__next btn btn_c button"
                                      tabindex="0" role="button">Next</div>
                                </div>
                            </div>

                            <div
                              class="jdgm-form-dynamic__rating-fieldset jdgm-form-dynamic__row"
                              data-pos="1">
                                <label>Rating</label>
                                <span class="jdgm-form-dynamic__rating"
                                  style="cursor: pointer;"><a data-alt="1"
                                      class="jdgm-star jdgm--on"
                                      title="1 star"></a><a data-alt="2"
                                      class="jdgm-star jdgm--on"
                                      title="2 stars"></a><a data-alt="3"
                                      class="jdgm-star jdgm--on"
                                      title="3 stars"></a><a data-alt="4"
                                      class="jdgm-star jdgm--on"
                                      title="4 stars"></a><a data-alt="5"
                                      class="jdgm-star jdgm--on"
                                      title="5 stars"></a><input name="score"
                                      type="hidden" value="5"></span>
                                <div class="jdgm-form-dynamic__buttons-row">
                                    <div
                                      class="jdgm-btn jdgm-btn--border jdgm-form-dynamic__back btn btn_c button"
                                      tabindex="0" role="button">Back</div>
                                    <div
                                      class="jdgm-btn jdgm-btn--solid jdgm-form-dynamic__next btn btn_c button"
                                      tabindex="0" role="button">Next</div>
                                </div>
                            </div>

                            <div class="jdgm-form-dynamic__row" data-pos="2">
                                <div class="jdgm-form-dynamic__name-fieldset">
                                    <label for="jdgm_reviewer_name">Name</label>
                                    <input id="jdgm_reviewer_name"
                                      name="reviewer_name" type="text"
                                      placeholder="Enter your name (public)">
                                </div>

                                <div class="jdgm-form-dynamic__email-fieldset">
                                    <label
                                      for="jdgm_reviewer_email">Email</label>
                                    <input id="jdgm_reviewer_email"
                                      name="reviewer_email" type="email"
                                      placeholder="Enter your email (private)">
                                </div>
                                <div class="jdgm-form-dynamic__buttons-row">
                                    <div
                                      class="jdgm-btn jdgm-btn--border jdgm-form-dynamic__back btn btn_c button"
                                      tabindex="0" role="button">Back</div>
                                    <div
                                      class="jdgm-btn jdgm-btn--solid jdgm-form-dynamic__next btn btn_c button"
                                      tabindex="0" role="button">Next</div>
                                </div>
                            </div>

                            <div
                              class="jdgm-form-dynamic__row jdgm-form-dynamic__submit-slide"
                              data-pos="3">
                                <div class="jdgm-form-dynamic__title-fieldset">
                                    <label for="jdgm_review_title">Review
                                        Title</label><span
                                      class="jdgm-countdown"></span>
                                    <input id="jdgm_review_title"
                                      name="review_title" type="text"
                                      placeholder="Give your review a title">
                                </div>

                                <div class="jdgm-form-dynamic__body-fieldset">
                                    <label
                                      for="jdgm_review_body">Review</label><span
                                      class="jdgm-countdown"></span>
                                    <textarea id="jdgm_review_body" rows="5"
                                      name="review_body"
                                      placeholder="Write your comments here"></textarea>
                                </div>
                                <div class="jdgm-form-dynamic__buttons-row">
                                    <div
                                      class="jdgm-btn jdgm-btn--border jdgm-form-dynamic__back btn btn_c button"
                                      tabindex="0" role="button">Back</div>
                                    <div
                                      class="jdgm-btn jdgm-btn--solid jdgm-form-dynamic__next btn btn_c button"
                                      tabindex="0" role="button">Next</div>
                                </div>
                            </div>

                            <div
                              class="jdgm-custom-forms-dynamic jdgm-custom-forms">
                            </div>

                            <input type="submit"
                              class="jdgm-form-dynamic__submit-rev btn btn_c button "
                              value="Submit Review">
                        </form>
                    </div>
                </div>
                <div class="jdgm-subtab"><span
                      class="jdgm-subtab__name jdgm--active"
                      data-tabname="product-reviews" tabindex="0">Product
                        Reviews (<span
                          class="jdgm-subtab__count">1778</span>)</span><span
                      class="jdgm-subtab__name " data-tabname="shop-reviews"
                      tabindex="0">Shop Reviews (<span
                          class="jdgm-subtab__count">97</span>)</span></div>
                <div class="jdgm-all-reviews__body"
                  style="position: relative; height: 7765.15px;">


                    <div
                      class="jdgm-rev jdgm-divider-top jdgm--done-setup jdgm--leex-done-setup"
                      data-verified-buyer="true"
                      data-review-id="a1fae1b2-a316-47a0-9913-0d1807d6bba4"
                      data-thumb-up-count="0" data-thumb-down-count="0"
                      style="position: absolute; left: 0px; top: 16px;">
                        <div class="jdgm-rev__pics"> <a
                              class="jdgm-rev__pic-link js-no-transition"
                              target="_blank" rel="nofollow"
                              href="{{asset('assets/1689310423__img_5219__original.webp')}}"
                              data-mfp-src="{{asset('assets/1689310423__img_5219__original.webp')}}">
                                <img class="jdgm-rev__pic-img"
                                  alt="User picture"
                                  data-src="{{asset('assets/1689310423__img_5219__original.webp')}}"
                                  src="{{asset('assets/1689310423__img_5219__original.webp')}}">
                            </a> </div>
                        <div class="jdgm-rev__header"> <span
                              class="jdgm-rev__author-wrapper"> <span
                                  class="jdgm-rev__author">terrie
                                    marshall</span> <span
                                  class="jdgm-rev__location"> </span> <span
                                  class="jdgm-rev__buyer-badge-wrapper"> <span
                                      class="jdgm-rev__buyer-badge"></span>
                                </span></span>
                            <div class="jdgm-rev__icon"> t </div> <span
                              class="jdgm-rev__timestamp"
                              data-content="2023-07-14 04:52:32 UTC">07/14/2023</span><span
                              class="jdgm-rev__rating" data-score="5"
                              tabindex="0" aria-label="5 star review"
                              role="img"> <span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span> </span>
                            <div class="jdgm-rev__br"></div>
                        </div>
                        <div class="jdgm-rev__content">
                            <div class="jdgm-rev__custom-form"> </div> <b
                              class="jdgm-rev__title">Great!</b>
                            <div class="jdgm-rev__body">
                                <p>I set mine up above my horse’s stall where he
                                    is unable to reach.
                                    <br>It is powerful enough to keep his area
                                    cool and the remote is very convenient to
                                    turn on and off!
                                </p>
                            </div>
                            <div class="jdgm-rev__vids"> </div>
                        </div>
                        <div class="jdgm-rev__actions">
                            <div class="jdgm-rev__social"></div>
                            <div class="jdgm-rev__votes"></div>
                        </div>
                        <div class="jdgm-rev__reply"> </div> <span
                          class="jdgm-rev__prod-info-wrapper"> <span
                              class="jdgm-rev__prod-link-prefix"></span> <a
                              href="/products/foldable-fan#judgeme_product_reviews"
                              target="_blank"
                              class="jdgm-rev__prod-link js-no-transition">
                                Original VENTY Fan </a> </span>
                    </div>
                    <div
                      class="jdgm-rev jdgm-divider-top jdgm--done-setup jdgm--leex-done-setup"
                      data-verified-buyer="true"
                      data-review-id="904d0d96-8514-4d6f-9df3-1330544c1f2a"
                      data-thumb-up-count="0" data-thumb-down-count="0"
                      style="position: absolute; left: 397px; top: 16px;">
                        <div class="jdgm-rev__pics"> <a
                              class="jdgm-rev__pic-link js-no-transition"
                              target="_blank" rel="nofollow"
                              href="{{asset('assets/1689293545__image__original.webp')}} "
                              data-mfp-src="{{asset('assets/1689293545__image__original.webp  ')}}">
                                <img class="jdgm-rev__pic-img"
                                  alt="User picture"
                                  data-src="{{asset('assets/1689293545__image__original.webp ')}} "
                                  src="{{asset('assets/1689293545__image__original.webp  ')}}">
                            </a> </div>
                        <div class="jdgm-rev__header"> <span
                              class="jdgm-rev__author-wrapper"> <span
                                  class="jdgm-rev__author">Shawna Mahoney</span>
                                <span class="jdgm-rev__location"> </span> <span
                                  class="jdgm-rev__buyer-badge-wrapper"> <span
                                      class="jdgm-rev__buyer-badge"></span>
                                </span></span>
                            <div class="jdgm-rev__icon"> S </div> <span
                              class="jdgm-rev__timestamp"
                              data-content="2023-07-14 00:11:24 UTC">07/14/2023</span><span
                              class="jdgm-rev__rating" data-score="5"
                              tabindex="0" aria-label="5 star review"
                              role="img"> <span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span> </span>
                            <div class="jdgm-rev__br"></div>
                        </div>
                        <div class="jdgm-rev__content">
                            <div class="jdgm-rev__custom-form"> </div> <b
                              class="jdgm-rev__title">Small but mighty</b>
                            <div class="jdgm-rev__body">
                                <p>I absolutely love this fan, I bought it to
                                    take on my vacation for our hotel room
                                    because I love having a fan when I sleep but
                                    since I’ve got it, I have it on my
                                    nightstand! I’m so glad I made the purchase
                                </p>
                            </div>
                            <div class="jdgm-rev__vids"> </div>
                        </div>
                        <div class="jdgm-rev__actions">
                            <div class="jdgm-rev__social"></div>
                            <div class="jdgm-rev__votes"></div>
                        </div>
                        <div class="jdgm-rev__reply"> </div> <span
                          class="jdgm-rev__prod-info-wrapper"> <span
                              class="jdgm-rev__prod-link-prefix"></span> <a
                              href="/products/foldable-fan#judgeme_product_reviews"
                              target="_blank"
                              class="jdgm-rev__prod-link js-no-transition">
                                Original VENTY Fan </a> </span>
                    </div>
                    <div
                      class="jdgm-rev jdgm-divider-top jdgm--done-setup jdgm--leex-done-setup"
                      data-verified-buyer="true"
                      data-review-id="cec46333-518c-47ee-b605-4c29d8ad889c"
                      data-thumb-up-count="0" data-thumb-down-count="0"
                      style="position: absolute; left: 795px; top: 16px;">
                        <div class="jdgm-rev__pics"> <a
                              class="jdgm-rev__pic-link js-no-transition"
                              target="_blank" rel="nofollow"
                              href="{{asset('assets/1689162699__img_4942__original.webp')}} "
                              data-mfp-src="{{asset('assets/1689162699__img_4942__original.webp  ')}}">
                                <img class="jdgm-rev__pic-img"
                                  alt="User picture"
                                  data-src="{{asset('assets/1689162699__img_4942__original.webp ')}} "
                                  src="{{asset('assets/1689162699__img_4942__original.webp  ')}}">
                            </a> </div>
                        <div class="jdgm-rev__header"> <span
                              class="jdgm-rev__author-wrapper"> <span
                                  class="jdgm-rev__author">Pam Gillette/
                                    5-1</span> <span class="jdgm-rev__location">
                                </span> <span
                                  class="jdgm-rev__buyer-badge-wrapper"> <span
                                      class="jdgm-rev__buyer-badge"></span>
                                </span></span>
                            <div class="jdgm-rev__icon"> P </div> <span
                              class="jdgm-rev__timestamp"
                              data-content="2023-07-12 11:50:27 UTC">07/12/2023</span><span
                              class="jdgm-rev__rating" data-score="5"
                              tabindex="0" aria-label="5 star review"
                              role="img"> <span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span> </span>
                            <div class="jdgm-rev__br"></div>
                        </div>
                        <div class="jdgm-rev__content">
                            <div class="jdgm-rev__custom-form"> </div> <b
                              class="jdgm-rev__title">Awesome</b>
                            <div class="jdgm-rev__body">
                                <p>So far, I love it and it is the best thing I
                                    have bought in a long time.
                                    <br>I take it to my grandson’s baseball
                                    games.
                                    <br>It really keeps me cool in the summer
                                    heat!
                                </p>
                            </div>
                            <div class="jdgm-rev__vids"> </div>
                        </div>
                        <div class="jdgm-rev__actions">
                            <div class="jdgm-rev__social"></div>
                            <div class="jdgm-rev__votes"></div>
                        </div>
                        <div class="jdgm-rev__reply"> </div> <span
                          class="jdgm-rev__prod-info-wrapper"> <span
                              class="jdgm-rev__prod-link-prefix"></span> <a
                              href="/products/foldable-fan#judgeme_product_reviews"
                              target="_blank"
                              class="jdgm-rev__prod-link js-no-transition">
                                Original VENTY Fan </a> </span>
                    </div>
                    <div
                      class="jdgm-rev jdgm-divider-top jdgm--done-setup jdgm--leex-done-setup"
                      data-verified-buyer="true"
                      data-review-id="2e62bc78-590c-4cb5-8c76-48a82bc5661e"
                      data-thumb-up-count="0" data-thumb-down-count="0"
                      style="position: absolute; left: 795px; top: 834px;">
                        <div class="jdgm-rev__pics"> <a
                              class="jdgm-rev__pic-link js-no-transition"
                              target="_blank" rel="nofollow"
                              href="{{asset('assets/1689023429__16890233406853251608906249848329__original.webp')}} "
                              data-mfp-src="{{asset('assets/1689023429__16890233406853251608906249848329__original.webp  ')}}">
                                <img class="jdgm-rev__pic-img"
                                  alt="User picture"
                                  data-src="{{asset('assets/1689023429__16890233406853251608906249848329__original.webp ')}} "
                                  src="{{asset('assets/1689023429__16890233406853251608906249848329__original.webp  ')}}">
                            </a> </div>
                        <div class="jdgm-rev__header"> <span
                              class="jdgm-rev__author-wrapper"> <span
                                  class="jdgm-rev__author">Peter Ajao</span>
                                <span class="jdgm-rev__location"> </span> <span
                                  class="jdgm-rev__buyer-badge-wrapper"> <span
                                      class="jdgm-rev__buyer-badge"></span>
                                </span></span>
                            <div class="jdgm-rev__icon"> P </div> <span
                              class="jdgm-rev__timestamp"
                              data-content="2023-07-10 21:08:28 UTC">07/10/2023</span><span
                              class="jdgm-rev__rating" data-score="5"
                              tabindex="0" aria-label="5 star review"
                              role="img"> <span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span> </span>
                            <div class="jdgm-rev__br"></div>
                        </div>
                        <div class="jdgm-rev__content">
                            <div class="jdgm-rev__custom-form"> </div> <b
                              class="jdgm-rev__title">Great Product</b>
                            <div class="jdgm-rev__body">
                                <p>It's well designed and great to use. I'm
                                    enjoying the product now. Thanks you.</p>
                            </div>
                            <div class="jdgm-rev__vids"> </div>
                        </div>
                        <div class="jdgm-rev__actions">
                            <div class="jdgm-rev__social"></div>
                            <div class="jdgm-rev__votes"></div>
                        </div>
                        <div class="jdgm-rev__reply"> </div> <span
                          class="jdgm-rev__prod-info-wrapper"> <span
                              class="jdgm-rev__prod-link-prefix"></span> <a
                              href="/products/foldable-fan#judgeme_product_reviews"
                              target="_blank"
                              class="jdgm-rev__prod-link js-no-transition">
                                Original VENTY Fan </a> </span>
                    </div>
                    <div
                      class="jdgm-rev jdgm-divider-top jdgm--done-setup jdgm--leex-done-setup"
                      data-verified-buyer="false"
                      data-review-id="3365493e-42c6-475e-b4b2-49436ce33e40"
                      data-thumb-up-count="0" data-thumb-down-count="0"
                      style="position: absolute; left: 0px; top: 858px;">
                        <div class="jdgm-rev__pics"> <a
                              class="jdgm-rev__pic-link js-no-transition"
                              target="_blank" rel="nofollow"
                              href="{{asset('assets/1688178552__img_1660__original.webp')}} "
                              data-mfp-src="{{asset('assets/1688178552__img_1660__original.webp  ')}}">
                                <img class="jdgm-rev__pic-img"
                                  alt="User picture"
                                  data-src="{{asset('assets/1688178552__img_1660__original.webp ')}} "
                                  src="{{asset('assets/1688178552__img_1660__original.webp  ')}}">
                            </a> </div>
                        <div class="jdgm-rev__header"> <span
                              class="jdgm-rev__author-wrapper"> <span
                                  class="jdgm-rev__author">L.P.</span> <span
                                  class="jdgm-rev__location"> </span> <span
                                  class="jdgm-rev__buyer-badge-wrapper">
                                </span></span>
                            <div class="jdgm-rev__icon"> L </div> <span
                              class="jdgm-rev__timestamp"
                              data-content="2023-07-01 02:29:11 UTC">07/01/2023</span><span
                              class="jdgm-rev__rating" data-score="5"
                              tabindex="0" aria-label="5 star review"
                              role="img"> <span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span> </span>
                            <div class="jdgm-rev__br"></div>
                        </div>
                        <div class="jdgm-rev__content">
                            <div class="jdgm-rev__custom-form"> </div> <b
                              class="jdgm-rev__title">It my new best friend</b>
                            <div class="jdgm-rev__body">
                                <p>Love this fan. Quality is top notch. Was
                                    worried I was buying another random, cheap
                                    product off a ad. This fan is NOT THAT.
                                    <br>Love it. The 4 speeds, 3 light levels,
                                    180 oscillating, cordless, 3.5 foot
                                    extending fan has been great. I have a pool
                                    bit sometimes its hot and non-breeze, and
                                    thats where this fan comes in to bat.
                                    <br>Plus I can throw it in my suitcase for
                                    travel.
                                </p>
                            </div>
                            <div class="jdgm-rev__vids"> </div>
                        </div>
                        <div class="jdgm-rev__actions">
                            <div class="jdgm-rev__social"></div>
                            <div class="jdgm-rev__votes"></div>
                        </div>
                        <div class="jdgm-rev__reply"> </div> <span
                          class="jdgm-rev__prod-info-wrapper"> <span
                              class="jdgm-rev__prod-link-prefix"></span> <a
                              href="/products/foldable-fan#judgeme_product_reviews"
                              target="_blank"
                              class="jdgm-rev__prod-link js-no-transition">
                                Original VENTY Fan </a> </span>
                    </div>
                    <div
                      class="jdgm-rev jdgm-divider-top jdgm--done-setup jdgm--leex-done-setup"
                      data-verified-buyer="true"
                      data-review-id="d370de1b-83c5-45f3-8aca-424537f36616"
                      data-thumb-up-count="0" data-thumb-down-count="0"
                      style="position: absolute; left: 397px; top: 858px;">
                        <div class="jdgm-rev__pics"> <a
                              class="jdgm-rev__pic-link js-no-transition"
                              target="_blank" rel="nofollow"
                              href="{{asset('assets/1687720987__image__original.webp')}} "
                              data-mfp-src="{{asset('assets/1687720987__image__original.webp  ')}}">
                                <img class="jdgm-rev__pic-img"
                                  alt="User picture"
                                  data-src="{{asset('assets/1687720987__image__original.webp ')}} "
                                  src="{{asset('assets/1687720987__image__original.webp  ')}}">
                            </a> </div>
                        <div class="jdgm-rev__header"> <span
                              class="jdgm-rev__author-wrapper"> <span
                                  class="jdgm-rev__author">J.</span> <span
                                  class="jdgm-rev__location"> </span> <span
                                  class="jdgm-rev__buyer-badge-wrapper"> <span
                                      class="jdgm-rev__buyer-badge"></span>
                                </span></span>
                            <div class="jdgm-rev__icon"> J </div> <span
                              class="jdgm-rev__timestamp"
                              data-content="2023-06-25 19:22:01 UTC">06/25/2023</span><span
                              class="jdgm-rev__rating" data-score="5"
                              tabindex="0" aria-label="5 star review"
                              role="img"> <span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span> </span>
                            <div class="jdgm-rev__br"></div>
                        </div>
                        <div class="jdgm-rev__content">
                            <div class="jdgm-rev__custom-form"> </div> <b
                              class="jdgm-rev__title">Very Content</b>
                            <div class="jdgm-rev__body">
                                <p>Ideal for what my needs are… and packs up
                                    great in its case.</p>
                            </div>
                            <div class="jdgm-rev__vids"> </div>
                        </div>
                        <div class="jdgm-rev__actions">
                            <div class="jdgm-rev__social"></div>
                            <div class="jdgm-rev__votes"></div>
                        </div>
                        <div class="jdgm-rev__reply"> </div> <span
                          class="jdgm-rev__prod-info-wrapper"> <span
                              class="jdgm-rev__prod-link-prefix"></span> <a
                              href="/products/foldable-fan#judgeme_product_reviews"
                              target="_blank"
                              class="jdgm-rev__prod-link js-no-transition">
                                Original VENTY Fan </a> </span>
                    </div>
                    <div
                      class="jdgm-rev jdgm-divider-top jdgm--done-setup jdgm--leex-done-setup"
                      data-verified-buyer="true"
                      data-review-id="a0e6900a-769e-40a7-a49a-62655e0023df"
                      data-thumb-up-count="0" data-thumb-down-count="0"
                      style="position: absolute; left: 397px; top: 1629px;">
                        <div class="jdgm-rev__pics"> <a
                              class="jdgm-rev__pic-link js-no-transition"
                              target="_blank" rel="nofollow"
                              href="{{asset('assets/1687452270__img_6636__original.webp')}} "
                              data-mfp-src="{{asset('assets/1687452270__img_6636__original.webp  ')}}">
                                <img class="jdgm-rev__pic-img"
                                  alt="User picture"
                                  data-src="{{asset('assets/1687452270__img_6636__original.webp ')}} "
                                  src="{{asset('assets/1687452270__img_6636__original.webp  ')}}">
                            </a> </div>
                        <div class="jdgm-rev__header"> <span
                              class="jdgm-rev__author-wrapper"> <span
                                  class="jdgm-rev__author">Deb</span> <span
                                  class="jdgm-rev__location"> </span> <span
                                  class="jdgm-rev__buyer-badge-wrapper"> <span
                                      class="jdgm-rev__buyer-badge"></span>
                                </span></span>
                            <div class="jdgm-rev__icon"> D </div> <span
                              class="jdgm-rev__timestamp"
                              data-content="2023-06-22 16:35:43 UTC">06/22/2023</span><span
                              class="jdgm-rev__rating" data-score="5"
                              tabindex="0" aria-label="5 star review"
                              role="img"> <span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span> </span>
                            <div class="jdgm-rev__br"></div>
                        </div>
                        <div class="jdgm-rev__content">
                            <div class="jdgm-rev__custom-form"> </div> <b
                              class="jdgm-rev__title">Perfect!</b>
                            <div class="jdgm-rev__body">
                                <p>Have needed this fan for years! For
                                    sunbathing on the dock when there’s no
                                    breeze! For out on the boat when you’ve
                                    stopped to relax, sun or read; for traveling
                                    in Europe where there’s no AC; could even
                                    use it while watching your kid’s sports!
                                    Sturdy construction. Worth every penny!
                                    Can’t believe it actually oscillates and has
                                    a remote! A bit large/heavy when trying to
                                    pack light for overseas~</p>
                            </div>
                            <div class="jdgm-rev__vids"> </div>
                        </div>
                        <div class="jdgm-rev__actions">
                            <div class="jdgm-rev__social"></div>
                            <div class="jdgm-rev__votes"></div>
                        </div>
                        <div class="jdgm-rev__reply"> </div> <span
                          class="jdgm-rev__prod-info-wrapper"> <span
                              class="jdgm-rev__prod-link-prefix"></span> <a
                              href="/products/foldable-fan#judgeme_product_reviews"
                              target="_blank"
                              class="jdgm-rev__prod-link js-no-transition">
                                Original VENTY Fan </a> </span>
                    </div>
                    <div
                      class="jdgm-rev jdgm-divider-top jdgm--done-setup jdgm--leex-done-setup"
                      data-verified-buyer="true"
                      data-review-id="a1b123a3-f04a-44df-89f8-b6e0cea88c20"
                      data-thumb-up-count="0" data-thumb-down-count="0"
                      style="position: absolute; left: 0px; top: 1796px;">
                        <div class="jdgm-rev__pics"> <a
                              class="jdgm-rev__pic-link js-no-transition"
                              target="_blank" rel="nofollow"
                              href="{{asset('assets/1687098566__16870984831227813644561195312076__original.webp')}} "
                              data-mfp-src="{{asset('assets/1687098566__16870984831227813644561195312076__original.webp  ')}}">
                                <img class="jdgm-rev__pic-img"
                                  alt="User picture"
                                  data-src="{{asset('assets/1687098566__16870984831227813644561195312076__original.webp ')}} "
                                  src="{{asset('assets/1687098566__16870984831227813644561195312076__original.webp  ')}}">
                            </a> </div>
                        <div class="jdgm-rev__header"> <span
                              class="jdgm-rev__author-wrapper"> <span
                                  class="jdgm-rev__author">Zadia Green</span>
                                <span class="jdgm-rev__location"> </span> <span
                                  class="jdgm-rev__buyer-badge-wrapper"> <span
                                      class="jdgm-rev__buyer-badge"></span>
                                </span></span>
                            <div class="jdgm-rev__icon"> Z </div> <span
                              class="jdgm-rev__timestamp"
                              data-content="2023-06-18 14:24:49 UTC">06/18/2023</span><span
                              class="jdgm-rev__rating" data-score="5"
                              tabindex="0" aria-label="5 star review"
                              role="img"> <span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span> </span>
                            <div class="jdgm-rev__br"></div>
                        </div>
                        <div class="jdgm-rev__content">
                            <div class="jdgm-rev__custom-form"> </div> <b
                              class="jdgm-rev__title">Fabulous, quality fan</b>
                            <div class="jdgm-rev__body">
                                <p>I am so happy that I bought 2 of these. They
                                    are amazing. So easy to charge, use, extend.
                                    Love the fact that they have a remote
                                    control, a light and are so easily portable.
                                    Could not be more satisfied!</p>
                            </div>
                            <div class="jdgm-rev__vids"> </div>
                        </div>
                        <div class="jdgm-rev__actions">
                            <div class="jdgm-rev__social"></div>
                            <div class="jdgm-rev__votes"></div>
                        </div>
                        <div class="jdgm-rev__reply"> </div> <span
                          class="jdgm-rev__prod-info-wrapper"> <span
                              class="jdgm-rev__prod-link-prefix"></span> <a
                              href="/products/foldable-fan#judgeme_product_reviews"
                              target="_blank"
                              class="jdgm-rev__prod-link js-no-transition">
                                Original VENTY Fan </a> </span>
                    </div>
                    <div
                      class="jdgm-rev jdgm-divider-top jdgm--done-setup jdgm--leex-done-setup"
                      data-verified-buyer="true"
                      data-review-id="e68a88a4-a8bf-4c72-a461-e6e4b995bf75"
                      data-thumb-up-count="0" data-thumb-down-count="0"
                      style="position: absolute; left: 795px; top: 1914px;">
                        <div class="jdgm-rev__pics"> <a
                              class="jdgm-rev__pic-link js-no-transition"
                              target="_blank" rel="nofollow"
                              href="{{asset('assets/1687062517__image__original.webp')}} "
                              data-mfp-src="{{asset('assets/1687062517__image__original.webp  ')}}">
                                <img class="jdgm-rev__pic-img"
                                  alt="User picture"
                                  data-src="{{asset('assets/1687062517__image__original.webp ')}} "
                                  src="{{asset('assets/1687062517__image__original.webp  ')}}">
                            </a> </div>
                        <div class="jdgm-rev__header"> <span
                              class="jdgm-rev__author-wrapper"> <span
                                  class="jdgm-rev__author">Linda</span> <span
                                  class="jdgm-rev__location"> </span> <span
                                  class="jdgm-rev__buyer-badge-wrapper"> <span
                                      class="jdgm-rev__buyer-badge"></span>
                                </span></span>
                            <div class="jdgm-rev__icon"> L </div> <span
                              class="jdgm-rev__timestamp"
                              data-content="2023-06-18 04:27:10 UTC">06/18/2023</span><span
                              class="jdgm-rev__rating" data-score="5"
                              tabindex="0" aria-label="5 star review"
                              role="img"> <span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span> </span>
                            <div class="jdgm-rev__br"></div>
                        </div>
                        <div class="jdgm-rev__content">
                            <div class="jdgm-rev__custom-form"> </div> <b
                              class="jdgm-rev__title">Love my Venty Fan</b>
                            <div class="jdgm-rev__body">
                                <p>Works very well! I get hot putting on makeup
                                    so wanted something to keep me cool! It’s
                                    perfect and very light so no problem moving
                                    from room to room and out on the terrace
                                    sitting in the sun. This fan does the
                                    trick!!!</p>
                            </div>
                            <div class="jdgm-rev__vids"> </div>
                        </div>
                        <div class="jdgm-rev__actions">
                            <div class="jdgm-rev__social"></div>
                            <div class="jdgm-rev__votes"></div>
                        </div>
                        <div class="jdgm-rev__reply"> </div> <span
                          class="jdgm-rev__prod-info-wrapper"> <span
                              class="jdgm-rev__prod-link-prefix"></span> <a
                              href="/products/foldable-fan#judgeme_product_reviews"
                              target="_blank"
                              class="jdgm-rev__prod-link js-no-transition">
                                Original VENTY Fan </a> </span>
                    </div>
                    <div
                      class="jdgm-rev jdgm-divider-top jdgm--done-setup jdgm--leex-done-setup"
                      data-verified-buyer="true"
                      data-review-id="2fd2586b-01f4-4149-8d20-e316863edd29"
                      data-thumb-up-count="0" data-thumb-down-count="0"
                      style="position: absolute; left: 397px; top: 2334px;">
                        <div class="jdgm-rev__pics"> <a
                              class="jdgm-rev__pic-link js-no-transition"
                              target="_blank" rel="nofollow"
                              href="{{asset('assets/1686662805__image__original.webp')}} "
                              data-mfp-src="{{asset('assets/1686662805__image__original.webp  ')}}">
                                <img class="jdgm-rev__pic-img"
                                  alt="User picture"
                                  data-src="{{asset('assets/1686662805__image__original.webp ')}} "
                                  src="{{asset('assets/1686662805__image__original.webp  ')}}">
                            </a> </div>
                        <div class="jdgm-rev__header"> <span
                              class="jdgm-rev__author-wrapper"> <span
                                  class="jdgm-rev__author">Gretchen
                                    Cseplo</span> <span
                                  class="jdgm-rev__location"> </span> <span
                                  class="jdgm-rev__buyer-badge-wrapper"> <span
                                      class="jdgm-rev__buyer-badge"></span>
                                </span></span>
                            <div class="jdgm-rev__icon"> G </div> <span
                              class="jdgm-rev__timestamp"
                              data-content="2023-06-13 13:25:27 UTC">06/13/2023</span><span
                              class="jdgm-rev__rating" data-score="5"
                              tabindex="0" aria-label="5 star review"
                              role="img"> <span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span> </span>
                            <div class="jdgm-rev__br"></div>
                        </div>
                        <div class="jdgm-rev__content">
                            <div class="jdgm-rev__custom-form"> </div> <b
                              class="jdgm-rev__title"></b>
                            <div class="jdgm-rev__body">
                                <p>Best travel fan ever!</p>
                            </div>
                            <div class="jdgm-rev__vids"> </div>
                        </div>
                        <div class="jdgm-rev__actions">
                            <div class="jdgm-rev__social"></div>
                            <div class="jdgm-rev__votes"></div>
                        </div>
                        <div class="jdgm-rev__reply"> </div> <span
                          class="jdgm-rev__prod-info-wrapper"> <span
                              class="jdgm-rev__prod-link-prefix"></span> <a
                              href="/products/foldable-fan#judgeme_product_reviews"
                              target="_blank"
                              class="jdgm-rev__prod-link js-no-transition">
                                Original VENTY Fan </a> </span>
                    </div>
                    <div
                      class="jdgm-rev jdgm-divider-top jdgm--done-setup jdgm--leex-done-setup"
                      data-verified-buyer="true"
                      data-review-id="143c4aa1-fe80-4275-951f-65be10acb355"
                      data-thumb-up-count="0" data-thumb-down-count="0"
                      style="position: absolute; left: 795px; top: 2781px;">
                        <div class="jdgm-rev__pics"> <a
                              class="jdgm-rev__pic-link js-no-transition"
                              target="_blank" rel="nofollow"
                              href="{{asset('assets/1686571362__img_7211__original.webp')}} "
                              data-mfp-src="{{asset('assets/1686571362__img_7211__original.webp  ')}}">
                                <img class="jdgm-rev__pic-img"
                                  alt="User picture"
                                  data-src="{{asset('assets/1686571362__img_7211__original.webp ')}} "
                                  src="{{asset('assets/1686571362__img_7211__original.webp  ')}}">
                            </a> </div>
                        <div class="jdgm-rev__header"> <span
                              class="jdgm-rev__author-wrapper"> <span
                                  class="jdgm-rev__author">NIXXA</span> <span
                                  class="jdgm-rev__location"> </span> <span
                                  class="jdgm-rev__buyer-badge-wrapper"> <span
                                      class="jdgm-rev__buyer-badge"></span>
                                </span></span>
                            <div class="jdgm-rev__icon"> N </div> <span
                              class="jdgm-rev__timestamp"
                              data-content="2023-06-12 12:01:37 UTC">06/12/2023</span><span
                              class="jdgm-rev__rating" data-score="5"
                              tabindex="0" aria-label="5 star review"
                              role="img"> <span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span> </span>
                            <div class="jdgm-rev__br"></div>
                        </div>
                        <div class="jdgm-rev__content">
                            <div class="jdgm-rev__custom-form"> </div> <b
                              class="jdgm-rev__title">Great portable fan</b>
                            <div class="jdgm-rev__body">
                                <p>Love the quality of the fan and its power.
                                    Looks to be well made. </p>

                                <p>Only gripe was the delivery - comms could
                                    have been a bit better.</p>
                            </div>
                            <div class="jdgm-rev__vids"> </div>
                        </div>
                        <div class="jdgm-rev__actions">
                            <div class="jdgm-rev__social"></div>
                            <div class="jdgm-rev__votes"></div>
                        </div>
                        <div class="jdgm-rev__reply"> </div> <span
                          class="jdgm-rev__prod-info-wrapper"> <span
                              class="jdgm-rev__prod-link-prefix"></span> <a
                              href="/products/foldable-fan#judgeme_product_reviews"
                              target="_blank"
                              class="jdgm-rev__prod-link js-no-transition">
                                Original VENTY Fan </a> </span>
                    </div>
                    <div
                      class="jdgm-rev jdgm-divider-top jdgm--done-setup jdgm--leex-done-setup"
                      data-verified-buyer="true"
                      data-review-id="c028413e-e4d9-4c75-80e9-29a7ec08c02f"
                      data-thumb-up-count="0" data-thumb-down-count="0"
                      style="position: absolute; left: 0px; top: 2978px;">
                        <div class="jdgm-rev__pics"> <a
                              class="jdgm-rev__pic-link js-no-transition"
                              target="_blank" rel="nofollow"
                              href="{{asset('assets/1685912563__image__original.webp')}} "
                              data-mfp-src="{{asset('assets/1685912563__image__original.webp  ')}}">
                                <img class="jdgm-rev__pic-img"
                                  alt="User picture"
                                  data-src="{{asset('assets/1685912563__image__original.webp ')}} "
                                  src="{{asset('assets/1685912563__image__original.webp  ')}}">
                            </a> </div>
                        <div class="jdgm-rev__header"> <span
                              class="jdgm-rev__author-wrapper"> <span
                                  class="jdgm-rev__author">Kristina Moser</span>
                                <span class="jdgm-rev__location"> </span> <span
                                  class="jdgm-rev__buyer-badge-wrapper"> <span
                                      class="jdgm-rev__buyer-badge"></span>
                                </span></span>
                            <div class="jdgm-rev__icon"> K </div> <span
                              class="jdgm-rev__timestamp"
                              data-content="2023-06-04 21:02:43 UTC">06/04/2023</span><span
                              class="jdgm-rev__rating" data-score="5"
                              tabindex="0" aria-label="5 star review"
                              role="img"> <span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span> </span>
                            <div class="jdgm-rev__br"></div>
                        </div>
                        <div class="jdgm-rev__content">
                            <div class="jdgm-rev__custom-form"> </div> <b
                              class="jdgm-rev__title">Ventyfan Rocks!</b>
                            <div class="jdgm-rev__body">
                                <p>Love my new fan! Quiet and powerful at the
                                    same time. Can’t wait to take on my road
                                    trip this summer. Will be charging my phone
                                    soon. Enjoying the remote control a lot.</p>
                            </div>
                            <div class="jdgm-rev__vids"> </div>
                        </div>
                        <div class="jdgm-rev__actions">
                            <div class="jdgm-rev__social"></div>
                            <div class="jdgm-rev__votes"></div>
                        </div>
                        <div class="jdgm-rev__reply"> </div> <span
                          class="jdgm-rev__prod-info-wrapper"> <span
                              class="jdgm-rev__prod-link-prefix"></span> <a
                              href="/products/foldable-fan#judgeme_product_reviews"
                              target="_blank"
                              class="jdgm-rev__prod-link js-no-transition">
                                Original VENTY Fan </a> </span>
                    </div>
                    <div
                      class="jdgm-rev jdgm-divider-top jdgm--done-setup jdgm--leex-done-setup"
                      data-verified-buyer="false"
                      data-review-id="dff2d45b-d973-4aef-ae0c-b882984c4a8e"
                      data-thumb-up-count="0" data-thumb-down-count="0"
                      style="position: absolute; left: 397px; top: 3057px;">
                        <div class="jdgm-rev__pics"> <a
                              class="jdgm-rev__pic-link js-no-transition"
                              target="_blank" rel="nofollow"
                              href="{{asset('assets/1685829598__img_1635__original.webp')}} "
                              data-mfp-src="{{asset('assets/1685829598__img_1635__original.webp  ')}}">
                                <img class="jdgm-rev__pic-img"
                                  alt="User picture"
                                  data-src="{{asset('assets/1685829598__img_1635__original.webp ')}} "
                                  src="{{asset('assets/1685829598__img_1635__original.webp  ')}}">
                            </a> </div>
                        <div class="jdgm-rev__header"> <span
                              class="jdgm-rev__author-wrapper"> <span
                                  class="jdgm-rev__author">T.P.</span> <span
                                  class="jdgm-rev__location"> </span> <span
                                  class="jdgm-rev__buyer-badge-wrapper">
                                </span></span>
                            <div class="jdgm-rev__icon"> T </div> <span
                              class="jdgm-rev__timestamp"
                              data-content="2023-06-03 21:59:57 UTC">06/03/2023</span><span
                              class="jdgm-rev__rating" data-score="5"
                              tabindex="0" aria-label="5 star review"
                              role="img"> <span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span> </span>
                            <div class="jdgm-rev__br"></div>
                        </div>
                        <div class="jdgm-rev__content">
                            <div class="jdgm-rev__custom-form"> </div> <b
                              class="jdgm-rev__title">I WON’T go anywhere with
                                out it.</b>
                            <div class="jdgm-rev__body">
                                <p>I travel international for work. I have taken
                                    the Venty around the globe, and most
                                    recently to Italy where the air conditioning
                                    was out in the entire hotel. After cracking
                                    my window and covering most of the opening
                                    with towels to keep out the bugs, my Venty
                                    saved me and allowed me to have a
                                    comfortable nights sleep. This is hands down
                                    one of the best travel products I have EVER
                                    purchased and can’t imagine going anywhere
                                    with out it. I now see they have it in blue
                                    and I’m tempted to get that as well since
                                    blue is my color</p>
                            </div>
                            <div class="jdgm-rev__vids"> </div>
                        </div>
                        <div class="jdgm-rev__actions">
                            <div class="jdgm-rev__social"></div>
                            <div class="jdgm-rev__votes"></div>
                        </div>
                        <div class="jdgm-rev__reply"> </div> <span
                          class="jdgm-rev__prod-info-wrapper"> <span
                              class="jdgm-rev__prod-link-prefix"></span> <a
                              href="/products/foldable-fan#judgeme_product_reviews"
                              target="_blank"
                              class="jdgm-rev__prod-link js-no-transition">
                                Original VENTY Fan </a> </span>
                    </div>
                    <div
                      class="jdgm-rev jdgm-divider-top jdgm--done-setup jdgm--leex-done-setup"
                      data-verified-buyer="true"
                      data-review-id="579a6e73-8eed-4e04-9b86-ea11204eec46"
                      data-thumb-up-count="0" data-thumb-down-count="0"
                      style="position: absolute; left: 795px; top: 3616px;">
                        <div class="jdgm-rev__pics"> <a
                              class="jdgm-rev__pic-link js-no-transition"
                              target="_blank" rel="nofollow"
                              href="{{asset('assets/1676179414__14dd57a7-13ea-4b1f-8fdb-a5d14af932e8__original.webp')}} "
                              data-mfp-src="{{asset('assets/1676179414__14dd57a7-13ea-4b1f-8fdb-a5d14af932e8__original.webp  ')}}">
                                <img class="jdgm-rev__pic-img"
                                  alt="User picture"
                                  data-src="{{asset('assets/1676179414__14dd57a7-13ea-4b1f-8fdb-a5d14af932e8__original.webp ')}} "
                                  src="{{asset('assets/1676179414__14dd57a7-13ea-4b1f-8fdb-a5d14af932e8__original.webp  ')}}">
                            </a> </div>
                        <div class="jdgm-rev__header"> <span
                              class="jdgm-rev__author-wrapper"> <span
                                  class="jdgm-rev__author">elaine clark</span>
                                <span class="jdgm-rev__location"> </span> <span
                                  class="jdgm-rev__buyer-badge-wrapper"> <span
                                      class="jdgm-rev__buyer-badge"></span>
                                </span></span>
                            <div class="jdgm-rev__icon"> e </div> <span
                              class="jdgm-rev__timestamp"
                              data-content="2023-02-12 05:23:33 UTC">02/12/2023</span><span
                              class="jdgm-rev__rating" data-score="5"
                              tabindex="0" aria-label="5 star review"
                              role="img"> <span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span> </span>
                            <div class="jdgm-rev__br"></div>
                        </div>
                        <div class="jdgm-rev__content">
                            <div class="jdgm-rev__custom-form"> </div> <b
                              class="jdgm-rev__title">Omg awesome 😎</b>
                            <div class="jdgm-rev__body">
                                <p>Wow I friggin live this fan !!! A totally
                                    wicked invention … we are travelling across
                                    Australia and it’s just bloody awesome… and
                                    lasts forever ! In the swag outside just
                                    amazing</p>
                            </div>
                            <div class="jdgm-rev__vids"> </div>
                        </div>
                        <div class="jdgm-rev__actions">
                            <div class="jdgm-rev__social"></div>
                            <div class="jdgm-rev__votes"></div>
                        </div>
                        <div class="jdgm-rev__reply"> </div> <span
                          class="jdgm-rev__prod-info-wrapper"> <span
                              class="jdgm-rev__prod-link-prefix"></span> <a
                              href="/products/foldable-fan#judgeme_product_reviews"
                              target="_blank"
                              class="jdgm-rev__prod-link js-no-transition">
                                Original VENTY Fan </a> </span>
                    </div>
                    <div
                      class="jdgm-rev jdgm-divider-top jdgm--done-setup jdgm--leex-done-setup"
                      data-verified-buyer="true"
                      data-review-id="ec5ecfc3-3e57-46de-bd8f-be217f268fb5"
                      data-thumb-up-count="0" data-thumb-down-count="0"
                      style="position: absolute; left: 0px; top: 3797px;">
                        <div class="jdgm-rev__pics"> <a
                              class="jdgm-rev__pic-link js-no-transition"
                              target="_blank" rel="nofollow"
                              href="{{asset('assets/1663040865__image__original.webp')}} "
                              data-mfp-src="{{asset('assets/1663040865__image__original.webp  ')}}">
                                <img class="jdgm-rev__pic-img"
                                  alt="User picture"
                                  data-src="{{asset('assets/1663040865__image__original.webp ')}} "
                                  src="{{asset('assets/1663040865__image__original.webp  ')}}">
                            </a> </div>
                        <div class="jdgm-rev__header"> <span
                              class="jdgm-rev__author-wrapper"> <span
                                  class="jdgm-rev__author">Tim Eskew</span>
                                <span class="jdgm-rev__location"> </span> <span
                                  class="jdgm-rev__buyer-badge-wrapper"> <span
                                      class="jdgm-rev__buyer-badge"></span>
                                </span></span>
                            <div class="jdgm-rev__icon"> T </div> <span
                              class="jdgm-rev__timestamp"
                              data-content="2022-09-13 03:46:39 UTC">09/13/2022</span><span
                              class="jdgm-rev__rating" data-score="5"
                              tabindex="0" aria-label="5 star review"
                              role="img"> <span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span> </span>
                            <div class="jdgm-rev__br"></div>
                        </div>
                        <div class="jdgm-rev__content">
                            <div class="jdgm-rev__custom-form"> </div> <b
                              class="jdgm-rev__title">Every fan to me.</b>
                            <div class="jdgm-rev__body">
                                <p>It’s not a blower fan, it’s quiet and highly
                                    adjustable. Mine will get packed up on
                                    occasion as it will be on every road trip I
                                    take. Swivel is nice when it’s stuffy and
                                    the light is great on camping trips. It
                                    works on the floor or table. I have two.
                                    When we vege out each has their own. The
                                    black remote has hard to read symbols as the
                                    ink is grey, nothing a paint pen can’t
                                    fix..! Time will tell if the materials will
                                    outlive the battery. Initial quality seems
                                    great, but not tough so be gentle. btw, this
                                    is the place to but this fan, others are
                                    fakes or scams! Definitely worth the money.
                                </p>
                            </div>
                            <div class="jdgm-rev__vids"> </div>
                        </div>
                        <div class="jdgm-rev__actions">
                            <div class="jdgm-rev__social"></div>
                            <div class="jdgm-rev__votes"></div>
                        </div>
                        <div class="jdgm-rev__reply"> </div> <span
                          class="jdgm-rev__prod-info-wrapper"> <span
                              class="jdgm-rev__prod-link-prefix"></span> <a
                              href="/products/foldable-fan#judgeme_product_reviews"
                              target="_blank"
                              class="jdgm-rev__prod-link js-no-transition">
                                Original VENTY Fan </a> </span>
                    </div>
                    <div
                      class="jdgm-rev jdgm-divider-top jdgm--done-setup jdgm--leex-done-setup"
                      data-verified-buyer="true"
                      data-review-id="3d600ef5-7251-4b9c-baf6-60c80fdedf1e"
                      data-thumb-up-count="0" data-thumb-down-count="0"
                      style="position: absolute; left: 397px; top: 3844px;">
                        <div class="jdgm-rev__pics"> <a
                              class="jdgm-rev__pic-link js-no-transition"
                              target="_blank" rel="nofollow"
                              href="{{asset('assets/1662604814__image__original.webp')}} "
                              data-mfp-src="{{asset('assets/1662604814__image__original.webp  ')}}">
                                <img class="jdgm-rev__pic-img"
                                  alt="User picture"
                                  data-src="{{asset('assets/1662604814__image__original.webp ')}} "
                                  src="{{asset('assets/1662604814__image__original.webp  ')}}">
                            </a> </div>
                        <div class="jdgm-rev__header"> <span
                              class="jdgm-rev__author-wrapper"> <span
                                  class="jdgm-rev__author">Don R</span> <span
                                  class="jdgm-rev__location"> </span> <span
                                  class="jdgm-rev__buyer-badge-wrapper"> <span
                                      class="jdgm-rev__buyer-badge"></span>
                                </span></span>
                            <div class="jdgm-rev__icon"> D </div> <span
                              class="jdgm-rev__timestamp"
                              data-content="2022-09-08 02:30:38 UTC">09/08/2022</span><span
                              class="jdgm-rev__rating" data-score="5"
                              tabindex="0" aria-label="5 star review"
                              role="img"> <span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span> </span>
                            <div class="jdgm-rev__br"></div>
                        </div>
                        <div class="jdgm-rev__content">
                            <div class="jdgm-rev__custom-form"> </div> <b
                              class="jdgm-rev__title">Excellent!!</b>
                            <div class="jdgm-rev__body">
                                <p>Where has this been all my life? The VENTY is
                                    sturdily constructed, quiet, moves air well
                                    even on the lowest setting, the oscillation
                                    is a full 180 degrees, the height adjustment
                                    &amp; angle tilt makes it infinitely
                                    adjustable and useful in multiple settings.
                                    The remote! The light! The easy charge!
                                    <br>I love it! I have two, and will probably
                                    get some as gifts. Bravo!
                                </p>
                            </div>
                            <div class="jdgm-rev__vids"> </div>
                        </div>
                        <div class="jdgm-rev__actions">
                            <div class="jdgm-rev__social"></div>
                            <div class="jdgm-rev__votes"></div>
                        </div>
                        <div class="jdgm-rev__reply"> </div> <span
                          class="jdgm-rev__prod-info-wrapper"> <span
                              class="jdgm-rev__prod-link-prefix"></span> <a
                              href="/products/foldable-fan#judgeme_product_reviews"
                              target="_blank"
                              class="jdgm-rev__prod-link js-no-transition">
                                Original VENTY Fan </a> </span>
                    </div>
                    <div
                      class="jdgm-rev jdgm-divider-top jdgm--done-setup jdgm--leex-done-setup"
                      data-verified-buyer="true"
                      data-review-id="2dce989c-91f7-4198-be99-f6ca702a8223"
                      data-thumb-up-count="0" data-thumb-down-count="0"
                      style="position: absolute; left: 795px; top: 4478px;">
                        <div class="jdgm-rev__pics"> <a
                              class="jdgm-rev__pic-link js-no-transition"
                              target="_blank" rel="nofollow"
                              href="{{asset('assets/1662137284__ceb50dc2-7fba-4272-ab18-1dd0d63d038e__original.webp')}} "
                              data-mfp-src="{{asset('assets/1662137284__ceb50dc2-7fba-4272-ab18-1dd0d63d038e__original.webp  ')}}">
                                <img class="jdgm-rev__pic-img"
                                  alt="User picture"
                                  data-src="{{asset('assets/1662137284__ceb50dc2-7fba-4272-ab18-1dd0d63d038e__original.webp ')}} "
                                  src="{{asset('assets/1662137284__ceb50dc2-7fba-4272-ab18-1dd0d63d038e__original.webp  ')}}">
                            </a> </div>
                        <div class="jdgm-rev__header"> <span
                              class="jdgm-rev__author-wrapper"> <span
                                  class="jdgm-rev__author">D.B.</span> <span
                                  class="jdgm-rev__location"> </span> <span
                                  class="jdgm-rev__buyer-badge-wrapper"> <span
                                      class="jdgm-rev__buyer-badge"></span>
                                </span></span>
                            <div class="jdgm-rev__icon"> D </div> <span
                              class="jdgm-rev__timestamp"
                              data-content="2022-09-02 16:40:54 UTC">09/02/2022</span><span
                              class="jdgm-rev__rating" data-score="5"
                              tabindex="0" aria-label="5 star review"
                              role="img"> <span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span> </span>
                            <div class="jdgm-rev__br"></div>
                        </div>
                        <div class="jdgm-rev__content">
                            <div class="jdgm-rev__custom-form"> </div> <b
                              class="jdgm-rev__title">Awesome fan</b>
                            <div class="jdgm-rev__body">
                                <p>This is an awesome fan that puts out a lot of
                                    air to be small. I love the portability
                                    &amp; remote stays put.</p>
                            </div>
                            <div class="jdgm-rev__vids"> </div>
                        </div>
                        <div class="jdgm-rev__actions">
                            <div class="jdgm-rev__social"></div>
                            <div class="jdgm-rev__votes"></div>
                        </div>
                        <div class="jdgm-rev__reply"> </div> <span
                          class="jdgm-rev__prod-info-wrapper"> <span
                              class="jdgm-rev__prod-link-prefix"></span> <a
                              href="/products/foldable-fan#judgeme_product_reviews"
                              target="_blank"
                              class="jdgm-rev__prod-link js-no-transition">
                                Original VENTY Fan </a> </span>
                    </div>
                    <div
                      class="jdgm-rev jdgm-divider-top jdgm--done-setup jdgm--leex-done-setup"
                      data-verified-buyer="true"
                      data-review-id="c1b5f80b-4133-4901-87be-5895ef2a7e71"
                      data-thumb-up-count="0" data-thumb-down-count="0"
                      style="position: absolute; left: 397px; top: 4782px;">
                        <div class="jdgm-rev__pics"> <a
                              class="jdgm-rev__pic-link js-no-transition"
                              target="_blank" rel="nofollow"
                              href="{{asset('assets/1660928082__16609280652013383826449975148384__original.webp')}} "
                              data-mfp-src="{{asset('assets/1660928082__16609280652013383826449975148384__original.webp  ')}}">
                                <img class="jdgm-rev__pic-img"
                                  alt="User picture"
                                  data-src="{{asset('assets/1660928082__16609280652013383826449975148384__original.webp ')}} "
                                  src="{{asset('assets/1660928082__16609280652013383826449975148384__original.webp  ')}}">
                            </a> </div>
                        <div class="jdgm-rev__header"> <span
                              class="jdgm-rev__author-wrapper"> <span
                                  class="jdgm-rev__author">F.S.</span> <span
                                  class="jdgm-rev__location"> </span> <span
                                  class="jdgm-rev__buyer-badge-wrapper"> <span
                                      class="jdgm-rev__buyer-badge"></span>
                                </span></span>
                            <div class="jdgm-rev__icon"> F </div> <span
                              class="jdgm-rev__timestamp"
                              data-content="2022-08-19 16:54:42 UTC">08/19/2022</span><span
                              class="jdgm-rev__rating" data-score="5"
                              tabindex="0" aria-label="5 star review"
                              role="img"> <span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span> </span>
                            <div class="jdgm-rev__br"></div>
                        </div>
                        <div class="jdgm-rev__content">
                            <div class="jdgm-rev__custom-form"> </div> <b
                              class="jdgm-rev__title">Great fan. One issue</b>
                            <div class="jdgm-rev__body">
                                <p>I would say i really love the fan. Only issue
                                    is there is a 50/50 chance when i select
                                    oscillate it gets stuck</p>
                            </div>
                            <div class="jdgm-rev__vids"> </div>
                        </div>
                        <div class="jdgm-rev__actions">
                            <div class="jdgm-rev__social"></div>
                            <div class="jdgm-rev__votes"></div>
                        </div>
                        <div class="jdgm-rev__reply"> </div> <span
                          class="jdgm-rev__prod-info-wrapper"> <span
                              class="jdgm-rev__prod-link-prefix"></span> <a
                              href="/products/foldable-fan#judgeme_product_reviews"
                              target="_blank"
                              class="jdgm-rev__prod-link js-no-transition">
                                Original VENTY Fan </a> </span>
                    </div>
                    <div
                      class="jdgm-rev jdgm-divider-top jdgm--done-setup jdgm--leex-done-setup"
                      data-verified-buyer="true"
                      data-review-id="18920689-c257-4827-be6c-ef52c3966b2c"
                      data-thumb-up-count="0" data-thumb-down-count="0"
                      style="position: absolute; left: 0px; top: 4854px;">
                        <div class="jdgm-rev__pics"> <a
                              class="jdgm-rev__pic-link js-no-transition"
                              target="_blank" rel="nofollow"
                              href="{{asset('assets/1660358506__image__original.webp')}} "
                              data-mfp-src="{{asset('assets/1660358506__image__original.webp  ')}}">
                                <img class="jdgm-rev__pic-img"
                                  alt="User picture"
                                  data-src="{{asset('assets/1660358506__image__original.webp ')}} "
                                  src="{{asset('assets/1660358506__image__original.webp  ')}}">
                            </a> </div>
                        <div class="jdgm-rev__header"> <span
                              class="jdgm-rev__author-wrapper"> <span
                                  class="jdgm-rev__author">Delphine
                                    Bowles</span> <span
                                  class="jdgm-rev__location"> </span> <span
                                  class="jdgm-rev__buyer-badge-wrapper"> <span
                                      class="jdgm-rev__buyer-badge"></span>
                                </span></span>
                            <div class="jdgm-rev__icon"> D </div> <span
                              class="jdgm-rev__timestamp"
                              data-content="2022-08-13 02:40:03 UTC">08/13/2022</span><span
                              class="jdgm-rev__rating" data-score="5"
                              tabindex="0" aria-label="5 star review"
                              role="img"> <span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span> </span>
                            <div class="jdgm-rev__br"></div>
                        </div>
                        <div class="jdgm-rev__content">
                            <div class="jdgm-rev__custom-form"> </div> <b
                              class="jdgm-rev__title">Awesome fan</b>
                            <div class="jdgm-rev__body">
                                <p>Fast delivery and works great</p>
                            </div>
                            <div class="jdgm-rev__vids"> </div>
                        </div>
                        <div class="jdgm-rev__actions">
                            <div class="jdgm-rev__social"></div>
                            <div class="jdgm-rev__votes"></div>
                        </div>
                        <div class="jdgm-rev__reply"> </div> <span
                          class="jdgm-rev__prod-info-wrapper"> <span
                              class="jdgm-rev__prod-link-prefix"></span> <a
                              href="/products/foldable-fan#judgeme_product_reviews"
                              target="_blank"
                              class="jdgm-rev__prod-link js-no-transition">
                                Original VENTY Fan </a> </span>
                    </div>
                    <div
                      class="jdgm-rev jdgm-divider-top jdgm--done-setup jdgm--leex-done-setup"
                      data-verified-buyer="false"
                      data-review-id="4addff81-d51a-4ba5-a43d-84e3da2793c3"
                      data-thumb-up-count="0" data-thumb-down-count="0"
                      style="position: absolute; left: 795px; top: 5328px;">
                        <div class="jdgm-rev__pics"> <a
                              class="jdgm-rev__pic-link js-no-transition"
                              target="_blank" rel="nofollow"
                              href="{{asset('assets/1660323811__7adb294d-f459-4c84-b4ce-7a905818843d__original.webp')}} "
                              data-mfp-src="{{asset('assets/1660323811__7adb294d-f459-4c84-b4ce-7a905818843d__original.webp  ')}}">
                                <img class="jdgm-rev__pic-img"
                                  alt="User picture"
                                  data-src="{{asset('assets/1660323811__7adb294d-f459-4c84-b4ce-7a905818843d__original.webp ')}} "
                                  src="{{asset('assets/1660323811__7adb294d-f459-4c84-b4ce-7a905818843d__original.webp  ')}}">
                            </a> </div>
                        <div class="jdgm-rev__header"> <span
                              class="jdgm-rev__author-wrapper"> <span
                                  class="jdgm-rev__author">A.A.</span> <span
                                  class="jdgm-rev__location"> </span> <span
                                  class="jdgm-rev__buyer-badge-wrapper">
                                </span></span>
                            <div class="jdgm-rev__icon"> A </div> <span
                              class="jdgm-rev__timestamp"
                              data-content="2022-08-12 17:03:31 UTC">08/12/2022</span><span
                              class="jdgm-rev__rating" data-score="5"
                              tabindex="0" aria-label="5 star review"
                              role="img"> <span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span> </span>
                            <div class="jdgm-rev__br"></div>
                        </div>
                        <div class="jdgm-rev__content">
                            <div class="jdgm-rev__custom-form"> </div> <b
                              class="jdgm-rev__title">Travel fan</b>
                            <div class="jdgm-rev__body">
                                <p>I purchased this fan for travel purposes and
                                    it works absolutely wonderful. My husband
                                    can’t go anywhere without a fan. It works
                                    perfectly. Perfect size. Easy to pack. Easy
                                    to use.</p>
                            </div>
                            <div class="jdgm-rev__vids"> </div>
                        </div>
                        <div class="jdgm-rev__actions">
                            <div class="jdgm-rev__social"></div>
                            <div class="jdgm-rev__votes"></div>
                        </div>
                        <div class="jdgm-rev__reply"> </div> <span
                          class="jdgm-rev__prod-info-wrapper"> <span
                              class="jdgm-rev__prod-link-prefix"></span> <a
                              href="/products/foldable-fan#judgeme_product_reviews"
                              target="_blank"
                              class="jdgm-rev__prod-link js-no-transition">
                                Original VENTY Fan </a> </span>
                    </div>
                    <div
                      class="jdgm-rev jdgm-divider-top jdgm--done-setup jdgm--leex-done-setup"
                      data-verified-buyer="false"
                      data-review-id="4aefc513-9704-417f-8c37-b4b83bc800cd"
                      data-thumb-up-count="0" data-thumb-down-count="0"
                      style="position: absolute; left: 0px; top: 5601px;">
                        <div class="jdgm-rev__pics"> <a
                              class="jdgm-rev__pic-link js-no-transition"
                              target="_blank" rel="nofollow"
                              href="{{asset('assets/1660254899__image__original.webp')}} "
                              data-mfp-src="{{asset('assets/1660254899__image__original.webp  ')}}">
                                <img class="jdgm-rev__pic-img"
                                  alt="User picture"
                                  data-src="{{asset('assets/1660254899__image__original.webp ')}} "
                                  src="{{asset('assets/1660254899__image__original.webp  ')}}">
                            </a> </div>
                        <div class="jdgm-rev__header"> <span
                              class="jdgm-rev__author-wrapper"> <span
                                  class="jdgm-rev__author">S.C.</span> <span
                                  class="jdgm-rev__location"> </span> <span
                                  class="jdgm-rev__buyer-badge-wrapper">
                                </span></span>
                            <div class="jdgm-rev__icon"> S </div> <span
                              class="jdgm-rev__timestamp"
                              data-content="2022-08-11 21:54:59 UTC">08/11/2022</span><span
                              class="jdgm-rev__rating" data-score="5"
                              tabindex="0" aria-label="5 star review"
                              role="img"> <span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span> </span>
                            <div class="jdgm-rev__br"></div>
                        </div>
                        <div class="jdgm-rev__content">
                            <div class="jdgm-rev__custom-form"> </div> <b
                              class="jdgm-rev__title">Best fan!</b>
                            <div class="jdgm-rev__body">
                                <p>We got this fan awhile ago when it was a bit
                                    cheaper but no matter. WE LOVE IT! We use it
                                    in our TV room and take it traveling in our
                                    RV. Smartly designed and engineered, it is
                                    super user friendly and super effective.
                                    We’ve even used it outside (!) on hot days
                                    when camping. We are ordering a 2nd one to
                                    leave in the RV so it’s always available and
                                    never forgotten. Thank you Venty!</p>
                            </div>
                            <div class="jdgm-rev__vids"> </div>
                        </div>
                        <div class="jdgm-rev__actions">
                            <div class="jdgm-rev__social"></div>
                            <div class="jdgm-rev__votes"></div>
                        </div>
                        <div class="jdgm-rev__reply"> </div> <span
                          class="jdgm-rev__prod-info-wrapper"> <span
                              class="jdgm-rev__prod-link-prefix"></span> <a
                              href="/products/foldable-fan#judgeme_product_reviews"
                              target="_blank"
                              class="jdgm-rev__prod-link js-no-transition">
                                Original VENTY Fan </a> </span>
                    </div>
                    <div
                      class="jdgm-rev jdgm-divider-top jdgm--done-setup jdgm--leex-done-setup"
                      data-verified-buyer="true"
                      data-review-id="889fb16b-86a3-462d-8897-c43bfc22e2db"
                      data-thumb-up-count="0" data-thumb-down-count="0"
                      style="position: absolute; left: 397px; top: 5746px;">
                        <div class="jdgm-rev__pics"> <a
                              class="jdgm-rev__pic-link js-no-transition"
                              target="_blank" rel="nofollow"
                              href="{{asset('assets/1660232535__20220811_084012__original.webp')}} "
                              data-mfp-src="{{asset('assets/1660232535__20220811_084012__original.webp  ')}}">
                                <img class="jdgm-rev__pic-img"
                                  alt="User picture"
                                  data-src="{{asset('assets/1660232535__20220811_084012__original.webp ')}} "
                                  src="{{asset('assets/1660232535__20220811_084012__original.webp  ')}}">
                            </a> </div>
                        <div class="jdgm-rev__header"> <span
                              class="jdgm-rev__author-wrapper"> <span
                                  class="jdgm-rev__author">Y.</span> <span
                                  class="jdgm-rev__location"> </span> <span
                                  class="jdgm-rev__buyer-badge-wrapper"> <span
                                      class="jdgm-rev__buyer-badge"></span>
                                </span></span>
                            <div class="jdgm-rev__icon"> Y </div> <span
                              class="jdgm-rev__timestamp"
                              data-content="2022-08-11 15:42:15 UTC">08/11/2022</span><span
                              class="jdgm-rev__rating" data-score="5"
                              tabindex="0" aria-label="5 star review"
                              role="img"> <span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span> </span>
                            <div class="jdgm-rev__br"></div>
                        </div>
                        <div class="jdgm-rev__content">
                            <div class="jdgm-rev__custom-form"> </div> <b
                              class="jdgm-rev__title">Better then expected</b>
                            <div class="jdgm-rev__body">
                                <p>Just got my new Venty travel fan and
                                    ....WOW...so happy!! This is going to be a
                                    game changer for my traveling. I'm the
                                    person who needs a fan to sleep and so far
                                    it meets my expectations. It's a little to
                                    quiet but I think on high speed the fan
                                    noise will help me sleep. But good job, all
                                    in all. I might be ordering a second for my
                                    husband's side of the bed!!</p>
                            </div>
                            <div class="jdgm-rev__vids"> </div>
                        </div>
                        <div class="jdgm-rev__actions">
                            <div class="jdgm-rev__social"></div>
                            <div class="jdgm-rev__votes"></div>
                        </div>
                        <div class="jdgm-rev__reply"> </div> <span
                          class="jdgm-rev__prod-info-wrapper"> <span
                              class="jdgm-rev__prod-link-prefix"></span> <a
                              href="/products/foldable-fan#judgeme_product_reviews"
                              target="_blank"
                              class="jdgm-rev__prod-link js-no-transition">
                                Original VENTY Fan </a> </span>
                    </div>
                    <div
                      class="jdgm-rev jdgm-divider-top jdgm--done-setup jdgm--leex-done-setup"
                      data-verified-buyer="true"
                      data-review-id="bf75d046-2877-44ef-bca8-f526da40cbe9"
                      data-thumb-up-count="0" data-thumb-down-count="0"
                      style="position: absolute; left: 0px; top: 6515px;">
                        <div class="jdgm-rev__pics"> <a
                              class="jdgm-rev__pic-link js-no-transition"
                              target="_blank" rel="nofollow"
                              href="{{asset('assets/1660076192__image__original.webp')}} "
                              data-mfp-src="{{asset('assets/1660076192__image__original.webp  ')}}">
                                <img class="jdgm-rev__pic-img"
                                  alt="User picture"
                                  data-src="{{asset('assets/1660076192__image__original.webp ')}} "
                                  src="{{asset('assets/1660076192__image__original.webp  ')}}">
                            </a> </div>
                        <div class="jdgm-rev__header"> <span
                              class="jdgm-rev__author-wrapper"> <span
                                  class="jdgm-rev__author">Rylee</span> <span
                                  class="jdgm-rev__location"> </span> <span
                                  class="jdgm-rev__buyer-badge-wrapper"> <span
                                      class="jdgm-rev__buyer-badge"></span>
                                </span></span>
                            <div class="jdgm-rev__icon"> R </div> <span
                              class="jdgm-rev__timestamp"
                              data-content="2022-08-09 20:15:02 UTC">08/09/2022</span><span
                              class="jdgm-rev__rating" data-score="5"
                              tabindex="0" aria-label="5 star review"
                              role="img"> <span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span> </span>
                            <div class="jdgm-rev__br"></div>
                        </div>
                        <div class="jdgm-rev__content">
                            <div class="jdgm-rev__custom-form"> </div> <b
                              class="jdgm-rev__title">I’m a fan!</b>
                            <div class="jdgm-rev__body">
                                <p>I love this little fan. It’s so functional, I
                                    love the fact that you can use it as a
                                    nightlight too! Going to buy multiple for
                                    Christmas presents!</p>
                            </div>
                            <div class="jdgm-rev__vids"> </div>
                        </div>
                        <div class="jdgm-rev__actions">
                            <div class="jdgm-rev__social"></div>
                            <div class="jdgm-rev__votes"></div>
                        </div>
                        <div class="jdgm-rev__reply"> </div> <span
                          class="jdgm-rev__prod-info-wrapper"> <span
                              class="jdgm-rev__prod-link-prefix"></span> <a
                              href="/products/foldable-fan#judgeme_product_reviews"
                              target="_blank"
                              class="jdgm-rev__prod-link js-no-transition">
                                Original VENTY Fan </a> </span>
                    </div>
                    <div
                      class="jdgm-rev jdgm-divider-top jdgm--done-setup jdgm--leex-done-setup"
                      data-verified-buyer="true"
                      data-review-id="9f30227b-5604-4703-8c64-317aef0bd5b2"
                      data-thumb-up-count="0" data-thumb-down-count="0"
                      style="position: absolute; left: 397px; top: 6684px;">
                        <div class="jdgm-rev__pics"> <a
                              class="jdgm-rev__pic-link js-no-transition"
                              target="_blank" rel="nofollow"
                              href="{{asset('assets/1659369624__328a1529-719f-4687-80e0-0a7f645fb098__original.webp')}} "
                              data-mfp-src="{{asset('assets/1659369624__328a1529-719f-4687-80e0-0a7f645fb098__original.webp  ')}}">
                                <img class="jdgm-rev__pic-img"
                                  alt="User picture"
                                  data-src="{{asset('assets/1659369624__328a1529-719f-4687-80e0-0a7f645fb098__original.webp ')}} "
                                  src="{{asset('assets/1659369624__328a1529-719f-4687-80e0-0a7f645fb098__original.webp  ')}}">
                            </a> <a class="jdgm-rev__pic-link js-no-transition"
                              target="_blank" rel="nofollow"
                              href="{{asset('assets/1659369626__8d310c5d-838e-44cd-ab72-6bece0ee0976__original.webp')}} "
                              data-mfp-src="{{asset('assets/1659369626__8d310c5d-838e-44cd-ab72-6bece0ee0976__original.webp  ')}}">
                                <img class="jdgm-rev__pic-img"
                                  alt="User picture"
                                  data-src="{{asset('assets/1659369626__8d310c5d-838e-44cd-ab72-6bece0ee0976__original.webp')}}">
                            </a> <a class="jdgm-rev__pic-link js-no-transition"
                              target="_blank" rel="nofollow"
                              href="{{asset('assets/1659369629__71da8797-a664-4b6e-abca-3407d9e967c1__original.webp')}} "
                              data-mfp-src="{{asset('assets/1659369629__71da8797-a664-4b6e-abca-3407d9e967c1__original.webp  ')}}">
                                <img class="jdgm-rev__pic-img"
                                  alt="User picture"
                                  data-src="{{asset('assets/1659369629__71da8797-a664-4b6e-abca-3407d9e967c1__original.webp')}}">
                            </a> </div>
                        <div class="jdgm-rev__header"> <span
                              class="jdgm-rev__author-wrapper"> <span
                                  class="jdgm-rev__author">Heather Paez</span>
                                <span class="jdgm-rev__location"> </span> <span
                                  class="jdgm-rev__buyer-badge-wrapper"> <span
                                      class="jdgm-rev__buyer-badge"></span>
                                </span></span>
                            <div class="jdgm-rev__icon"> H </div> <span
                              class="jdgm-rev__timestamp"
                              data-content="2022-08-01 15:57:58 UTC">08/01/2022</span><span
                              class="jdgm-rev__rating" data-score="5"
                              tabindex="0" aria-label="5 star review"
                              role="img"> <span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span> </span>
                            <div class="jdgm-rev__br"></div>
                        </div>
                        <div class="jdgm-rev__content">
                            <div class="jdgm-rev__custom-form"> </div> <b
                              class="jdgm-rev__title">Amazing in every way!</b>
                            <div class="jdgm-rev__body">
                                <p>Venty thought about everything when creating
                                    this fan. Lightweight, compact, cordless
                                    (holds its charge long), rotates, the light,
                                    the charger, the remote, small yet mighty,
                                    the height, it’s stylish and and the bag and
                                    fan are both made with high quality
                                    materials. I take this fan with me to jobs
                                    (I am a professional organizer). I Cary the
                                    fan from room to room with ease. I use it
                                    when I stay overnight at hotels. One of the
                                    best purchases I have ever made. Also, I get
                                    compliments and inquiries everywhere I go!
                                    This fan was a great investment and I plan
                                    on purchasing more in the future for each of
                                    my family members.</p>
                            </div>
                            <div class="jdgm-rev__vids"> </div>
                        </div>
                        <div class="jdgm-rev__actions">
                            <div class="jdgm-rev__social"></div>
                            <div class="jdgm-rev__votes"></div>
                        </div>
                        <div class="jdgm-rev__reply"> </div> <span
                          class="jdgm-rev__prod-info-wrapper"> <span
                              class="jdgm-rev__prod-link-prefix"></span> <a
                              href="/products/foldable-fan#judgeme_product_reviews"
                              target="_blank"
                              class="jdgm-rev__prod-link js-no-transition">
                                Original VENTY Fan </a> </span>
                    </div>
                    <div
                      class="jdgm-rev jdgm-divider-top jdgm--done-setup jdgm--leex-done-setup"
                      data-verified-buyer="true"
                      data-review-id="9968c4f7-cd18-4f69-ab8f-d6c9864dee56"
                      data-thumb-up-count="0" data-thumb-down-count="0"
                      style="position: absolute; left: 795px; top: 6733px;">
                        <div class="jdgm-rev__pics"> <a
                              class="jdgm-rev__pic-link js-no-transition"
                              target="_blank" rel="nofollow"
                              href="{{asset('assets/1659327170__ae9df67f-4657-4539-8a8e-bca9025b08af__original.webp')}} "
                              data-mfp-src="{{asset('assets/1659327170__ae9df67f-4657-4539-8a8e-bca9025b08af__original.webp  ')}}">
                                <img class="jdgm-rev__pic-img"
                                  alt="User picture"
                                  data-src="{{asset('assets/1659327170__ae9df67f-4657-4539-8a8e-bca9025b08af__original.webp ')}} "
                                  src="{{asset('assets/1659327170__ae9df67f-4657-4539-8a8e-bca9025b08af__original.webp  ')}}">
                            </a> <a class="jdgm-rev__pic-link js-no-transition"
                              target="_blank" rel="nofollow"
                              href="{{asset('assets/1659327173__19941b5d-6b4c-40b0-af29-6136992c4772__original.webp')}} "
                              data-mfp-src="{{asset('assets/1659327173__19941b5d-6b4c-40b0-af29-6136992c4772__original.webp  ')}}">
                                <img class="jdgm-rev__pic-img"
                                  alt="User picture"
                                  data-src="{{asset('assets/1659327173__19941b5d-6b4c-40b0-af29-6136992c4772__original.webp')}}">
                            </a> </div>
                        <div class="jdgm-rev__header"> <span
                              class="jdgm-rev__author-wrapper"> <span
                                  class="jdgm-rev__author">Laura S.</span> <span
                                  class="jdgm-rev__location"> </span> <span
                                  class="jdgm-rev__buyer-badge-wrapper"> <span
                                      class="jdgm-rev__buyer-badge"></span>
                                </span></span>
                            <div class="jdgm-rev__icon"> L </div> <span
                              class="jdgm-rev__timestamp"
                              data-content="2022-08-01 04:09:58 UTC">08/01/2022</span><span
                              class="jdgm-rev__rating" data-score="5"
                              tabindex="0" aria-label="5 star review"
                              role="img"> <span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span><span
                                  class="jdgm-star jdgm--on"></span> </span>
                            <div class="jdgm-rev__br"></div>
                        </div>
                        <div class="jdgm-rev__content">
                            <div class="jdgm-rev__custom-form"> </div> <b
                              class="jdgm-rev__title">Perfect for camping</b>
                            <div class="jdgm-rev__body">
                                <p>Used this on a recent tent camping trip and
                                    it was perfect. Had it on the low setting
                                    and it lasted all night. Remote and light
                                    were a bonus to an already great fan! Highly
                                    recommend.</p>
                            </div>
                            <div class="jdgm-rev__vids"> </div>
                        </div>
                        <div class="jdgm-rev__actions">
                            <div class="jdgm-rev__social"></div>
                            <div class="jdgm-rev__votes"></div>
                        </div>
                        <div class="jdgm-rev__reply"> </div> <span
                          class="jdgm-rev__prod-info-wrapper"> <span
                              class="jdgm-rev__prod-link-prefix"></span> <a
                              href="/products/foldable-fan#judgeme_product_reviews"
                              target="_blank"
                              class="jdgm-rev__prod-link js-no-transition">
                                Original VENTY Fan </a> </span>
                    </div>


                </div>
                <div class="jdgm-shop-reviews__body"></div>
                <div class="jdgm-spinner" style="display: none;"></div>
                <div class="jdgm-all-reviews__footer">
                    <div class="jdgm-all-reviews-page__load-more-wrapper"><a
                          href="#"
                          class="jdgm-all-reviews-page__load-more jdgm-btn jdgm-btn--solid"
                          role="button">Load More Reviews</a></div>
                </div>
            </article>

        </div>
    </div>

</main>


@endsection