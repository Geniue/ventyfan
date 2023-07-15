@extends("layouts.index")


@section("content")
<main class="main-content" id="MainContent">
    <div class="page-width page-content">




<div class="grid">
<div class="grid__item medium-up--three-quarters medium-up--push-one-eighth"><grammarly-extension data-grammarly-shadow-root="true" style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="dnXmp"></grammarly-extension><grammarly-extension data-grammarly-shadow-root="true" style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="dnXmp"></grammarly-extension>

  <header class="section-header">
    <h1 class="section-header__title">Contact Us</h1>
  </header>

  <div class="rte text-spacing">
    <h3>Address</h3>
<p>📌VENTY Inc.<br>9436 W. Lake Mead Blvd<br>Suite 5 PMB 1098<br>Las Vegas, NV 89134<br>📧<a href="mailto:support@ventyfan.com" class="js-no-transition">support@ventyfan.com</a><br>
📞<a href="tel:888-339-5115">888-339-5115</a>
</p>
  </div>

  <div class="form-vertical">
    <form method="post" action="/contact#contact_form" id="contact_form" accept-charset="UTF-8" class="contact-form" onsubmit="window.Shopify.recaptchaV3.addToken(this, &quot;contact&quot;); return false;"><input type="hidden" name="form_type" value="contact"><input type="hidden" name="utf8" value="✓">

      

      

      <div class="grid grid--small">
        <div class="grid__item medium-up--one-half">
          <label for="ContactFormName">Name</label>
          <input type="text" id="ContactFormName" class="input-full" name="contact[name]" autocapitalize="words" value="">
        </div>

        <div class="grid__item medium-up--one-half">
          <label for="ContactFormEmail">Email</label>
          <input type="email" id="ContactFormEmail" class="input-full" name="contact[email]" autocorrect="off" autocapitalize="off" value="">
        </div>
      </div>

      <!--
      <label for="ContactFormPhone">Phone number</label>
      <input type="tel" id="ContactFormPhone" class="input-full" name="contact[phone]" pattern="[0-9\-]*" value="">
      -->

      <label for="ContactFormMessage">Message</label>
      <textarea rows="10" id="ContactFormMessage" class="input-full" name="contact[body]" spellcheck="false"></textarea>

      <input type="submit" class="btn right" value="Send">

    </form>
   
  </div>

</div>
</div>

</div>

  </main>
@endsection