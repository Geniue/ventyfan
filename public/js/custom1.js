/*
 * Currency tools
 *
 * Copyright (c) 2013 Caroline Schnapp (mllegeorgesand@gmail.com)
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/mit-license.php
 *
 * Requires jquery.cookie.js, imported earlier
 *
 */

if (typeof Currency === "undefined") {
  var Currency = {};
}
Currency.cookie = {
  configuration: { expires: 365, path: "/", domain: window.location.hostname },
  name: "currency",
  write: function (a) {
    jQuery.cookie(this.name, a, this.configuration);
  },
  read: function () {
    return jQuery.cookie(this.name);
  },
  destroy: function () {
    jQuery.cookie(this.name, null, this.configuration);
  },
};
Currency.money_with_currency_format = {
  USD: "${{amount}} USD",
  ILS: "â‚ª{{amount}} ILS",
  EUR: "&euro;{{amount}} EUR",
  GBP: "&pound;{{amount}} GBP",
  CAD: "${{amount}} CAD",
  ARS: "${{amount_with_comma_separator}} ARS",
  AUD: "${{amount}} AUD",
  BBD: "${{amount}} Bds",
  BDT: "Tk {{amount}} BDT",
  BSD: "BS${{amount}} BSD",
  BHD: "{{amount}}0 BHD",
  BRL: "R$ {{amount_with_comma_separator}} BRL",
  BOB: "Bs{{amount_with_comma_separator}} BOB",
  BND: "${{amount}} BND",
  BGN: "{{amount}} Ð»Ð² BGN",
  MMK: "K{{amount}} MMK",
  KYD: "${{amount}} KYD",
  CLP: "${{amount_no_decimals}} CLP",
  CNY: "&#165;{{amount}} CNY",
  COP: "${{amount_with_comma_separator}} COP",
  CRC: "&#8353; {{amount_with_comma_separator}} CRC",
  HRK: "{{amount_with_comma_separator}} kn HRK",
  CZK: "{{amount_with_comma_separator}} K&#269;",
  DKK: "kr.{{amount_with_comma_separator}}",
  DOP: "RD$ {{amount_with_comma_separator}}",
  XCD: "EC${{amount}}",
  EGP: "LE {{amount}} EGP",
  XPF: "{{amount_no_decimals_with_space_separator}}} XPF",
  FJD: "FJ${{amount}}",
  GHS: "GH&#8373;{{amount}}",
  GTQ: "{{amount}} GTQ",
  GYD: "${{amount}} GYD",
  GEL: "{{amount}} GEL",
  HKD: "HK${{amount}}",
  HUF: "{{amount_no_decimals_with_comma_separator}} Ft",
  ISK: "{{amount_no_decimals}} kr ISK",
  INR: "Rs.{{amount}}",
  IDR: "Rp {{amount_with_comma_separator}}",
  NIS: "{{amount}} NIS",
  JMD: "${{amount}} JMD",
  JPY: "&#165;{{amount_no_decimals}} JPY",
  JOD: "{{amount}}0 JOD",
  KZT: "{{amount}} KZT",
  KES: "KSh{{amount}}",
  KWD: "{{amount}}0 KWD",
  LVL: "Ls {{amount}} LVL",
  LTL: "{{amount}} Lt",
  MXN: "$ {{amount}} MXN",
  MYR: "RM{{amount}} MYR",
  MUR: "Rs {{amount}} MUR",
  MDL: "{{amount}} MDL",
  MAD: "Dh {{amount}} MAD",
  MNT: "{{amount_no_decimals}} MNT",
  MZN: "Mt {{amount}} MZN",
  ANG: "{{amount}} NA&fnof;",
  NZD: "${{amount}} NZD",
  NGN: "&#8358;{{amount}} NGN",
  NOK: "kr {{amount_with_comma_separator}} NOK",
  OMR: "{{amount_with_comma_separator}} OMR",
  PKR: "Rs.{{amount}} PKR",
  PYG: "Gs. {{amount_no_decimals_with_comma_separator}} PYG",
  PEN: "S/. {{amount}} PEN",
  PHP: "&#8369;{{amount}} PHP",
  PLN: "{{amount_with_comma_separator}} zl PLN",
  QAR: "QAR {{amount_with_comma_separator}}",
  RON: "{{amount_with_comma_separator}} lei RON",
  RUB: "&#1088;&#1091;&#1073;{{amount_with_comma_separator}} RUB",
  SAR: "{{amount}} SAR",
  RSD: "{{amount}} RSD",
  SCR: "Rs {{amount}} SCR",
  SGD: "${{amount}} SGD",
  SYP: "S&pound;{{amount}} SYP",
  ZAR: "R {{amount}} ZAR",
  KRW: "&#8361;{{amount_no_decimals}} KRW",
  LKR: "Rs {{amount}} LKR",
  SEK: "{{amount_no_decimals}} kr SEK",
  CHF: "SFr. {{amount}} CHF",
  TWD: "${{amount}} TWD",
  THB: "{{amount}} &#xe3f; THB",
  TZS: "{{amount}} TZS",
  TTD: "${{amount}} TTD",
  TRY: "{{amount}}TL",
  UAH: "â‚´{{amount}} UAH",
  AED: "Dhs. {{amount}} AED",
  UYU: "${{amount_with_comma_separator}} UYU",
  VEB: "Bs. {{amount_with_comma_separator}} VEB",
  VND: "{{amount_no_decimals_with_comma_separator}} VND",
  ZMK: "ZMK{{amount_no_decimals_with_comma_separator}}",
};
Currency.money_format = {
  USD: "${{amount}}",
  ILS: "â‚ª{{amount}}",
  EUR: "&euro;{{amount}}",
  GBP: "&pound;{{amount}}",
  CAD: "${{amount}}",
  ARS: "${{amount_with_comma_separator}}",
  AUD: "${{amount}}",
  BBD: "${{amount}}",
  BDT: "Tk {{amount}}",
  BSD: "BS${{amount}}",
  BHD: "{{amount}}0 BHD",
  BRL: "R$ {{amount_with_comma_separator}}",
  BOB: "Bs{{amount_with_comma_separator}}",
  BND: "${{amount}}",
  BGN: "{{amount}} Ð»Ð²",
  MMK: "K{{amount}}",
  KYD: "${{amount}}",
  CLP: "${{amount_no_decimals}}",
  CNY: "&#165;{{amount}}",
  COP: "${{amount_with_comma_separator}}",
  CRC: "&#8353; {{amount_with_comma_separator}}",
  HRK: "{{amount_with_comma_separator}} kn",
  CZK: "{{amount_with_comma_separator}} K&#269;",
  DKK: "{{amount_with_comma_separator}}",
  DOP: "RD$ {{amount_with_comma_separator}}",
  XCD: "${{amount}}",
  EGP: "LE {{amount}}",
  XPF: "{{amount_no_decimals_with_space_separator}}} XPF",
  FJD: "${{amount}}",
  GHS: "GH&#8373;{{amount}}",
  GTQ: "{{amount}}",
  GYD: "${{amount}}",
  GEL: "{{amount}} GEL",
  HKD: "${{amount}}",
  HUF: "{{amount_no_decimals_with_comma_separator}}",
  ISK: "{{amount_no_decimals}} kr",
  INR: "{{amount}}",
  IDR: "{{amount_with_comma_separator}}",
  NIS: "{{amount}} NIS",
  JMD: "${{amount}}",
  JPY: "&#165;{{amount_no_decimals}}",
  JOD: "{{amount}}0 JD",
  KZT: "{{amount}} KZT",
  KES: "KSh{{amount}}",
  KWD: "{{amount}}0 KD",
  LVL: "Ls {{amount}}",
  LTL: "{{amount}} Lt",
  MXN: "$ {{amount}}",
  MYR: "RM{{amount}} MYR",
  MUR: "Rs {{amount}}",
  MDL: "{{amount}} MDL",
  MAD: "{{amount}} dh",
  MNT: "{{amount_no_decimals}} &#8366",
  MZN: "{{amount}} Mt",
  ANG: "&fnof;{{amount}}",
  NZD: "${{amount}}",
  NGN: "&#8358;{{amount}}",
  NOK: "kr {{amount_with_comma_separator}}",
  OMR: "{{amount_with_comma_separator}} OMR",
  PKR: "Rs.{{amount}}",
  PYG: "Gs. {{amount_no_decimals_with_comma_separator}}",
  PEN: "S/. {{amount}}",
  PHP: "&#8369;{{amount}}",
  PLN: "{{amount_with_comma_separator}} zl",
  QAR: "QAR {{amount_with_comma_separator}}",
  RON: "{{amount_with_comma_separator}} lei",
  RUB: "&#1088;&#1091;&#1073;{{amount_with_comma_separator}}",
  SAR: "{{amount}} SR",
  RSD: "{{amount}} RSD",
  SCR: "Rs {{amount}}",
  SGD: "${{amount}}",
  SYP: "S&pound;{{amount}}",
  ZAR: "R {{amount}}",
  KRW: "&#8361;{{amount_no_decimals}}",
  LKR: "Rs {{amount}}",
  SEK: "{{amount_no_decimals}} kr",
  CHF: "SFr. {{amount}}",
  TWD: "${{amount}}",
  THB: "{{amount}} &#xe3f;",
  TZS: "{{amount}} TZS",
  TTD: "${{amount}}",
  TRY: "{{amount}}TL",
  UAH: "â‚´{{amount}}",
  AED: "Dhs. {{amount}}",
  UYU: "${{amount_with_comma_separator}}",
  VEB: "Bs. {{amount_with_comma_separator}}",
  VND: "{{amount_no_decimals_with_comma_separator}}â‚«",
  ZMK: "K{{amount_no_decimals_with_comma_separator}}",
};
Currency.formatMoney = function (b, f) {
  if (typeof b == "string") {
    b = b.replace(".", "");
  }
  var e = "";
  var d = /\{\{\s*(\w+)\s*\}\}/;
  var a = f || this.money_format;
  function c(g) {
    return g.replace(/(\d+)(\d{3}[\.,]?)/, "$1,$2");
  }
  switch (a.match(d)[1]) {
    case "amount":
      e = c(floatToString(b / 100, 2));
      break;
    case "amount_no_decimals":
      e = c(floatToString(b / 100, 0));
      break;
    case "amount_with_comma_separator":
      e = floatToString(b / 100, 2).replace(/\./, ",");
      break;
    case "amount_no_decimals_with_comma_separator":
      e = c(floatToString(b / 100, 0)).replace(/\./, ",");
      break;
  }
  return a.replace(d, e);
};
function floatToString(c, a) {
  var b = c.toFixed(a).toString();
  if (b.match(/^\.\d+/)) {
    return "0" + b;
  } else {
    return b;
  }
}
Currency.currentCurrency = "";
Currency.format = "money_with_currency_format";
Currency.convertAll = function (c, b, a, d) {
  jQuery(a || "span.money").each(function () {
    if (jQuery(this).attr("data-currency") === b) {
      return;
    }
    if (jQuery(this).attr("data-currency-" + b)) {
      jQuery(this).html(jQuery(this).attr("data-currency-" + b));
    } else {
      var e = 0;
      var f = Currency[d || Currency.format][c] || "{{amount}}";
      var g = Currency[d || Currency.format][b] || "{{amount}}";
      if (f.indexOf("amount_no_decimals") !== -1) {
        e = Currency.convert(
          parseInt(
            jQuery(this)
              .html()
              .replace(/[^0-9]/g, ""),
            10
          ) * 100,
          c,
          b
        );
      } else {
        if (c === "JOD" || c == "KWD" || c == "BHD") {
          e = Currency.convert(
            parseInt(
              jQuery(this)
                .html()
                .replace(/[^0-9]/g, ""),
              10
            ) / 10,
            c,
            b
          );
        } else {
          e = Currency.convert(
            parseInt(
              jQuery(this)
                .html()
                .replace(/[^0-9]/g, ""),
              10
            ),
            c,
            b
          );
        }
      }
      var h = Currency.formatMoney(e, g);
      jQuery(this).html(h);
      jQuery(this).attr("data-currency-" + b, h);
    }
    jQuery(this).attr("data-currency", b);
  });
  this.currentCurrency = b;
  this.cookie.write(b);
};
