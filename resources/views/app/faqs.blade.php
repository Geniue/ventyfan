
@extends("layouts.index")


@section('head')
<script src='{{asset('js/faqs.js')}}' defer="defer"></script>
<style>
    .bootstrap-ddshop {
}
.bootstrap-ddshop html {
  font-family: sans-serif;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}
.bootstrap-ddshop body {
  margin: 0;
}
.bootstrap-ddshop article,
.bootstrap-ddshop aside,
.bootstrap-ddshop details,
.bootstrap-ddshop figcaption,
.bootstrap-ddshop figure,
.bootstrap-ddshop footer,
.bootstrap-ddshop header,
.bootstrap-ddshop hgroup,
.bootstrap-ddshop main,
.bootstrap-ddshop menu,
.bootstrap-ddshop nav,
.bootstrap-ddshop section,
.bootstrap-ddshop summary {
  display: block;
}
.bootstrap-ddshop audio,
.bootstrap-ddshop canvas,
.bootstrap-ddshop progress,
.bootstrap-ddshop video {
  display: inline-block;
  vertical-align: baseline;
}
.bootstrap-ddshop audio:not([controls]) {
  display: none;
  height: 0;
}
.bootstrap-ddshop [hidden],
.bootstrap-ddshop template {
  display: none;
}
.bootstrap-ddshop a {
  background-color: transparent;
}
.bootstrap-ddshop a:active,
.bootstrap-ddshop a:hover {
  outline: 0;
}
.bootstrap-ddshop abbr[title] {
  border-bottom: 1px dotted;
}
.bootstrap-ddshop b,
.bootstrap-ddshop strong {
  font-weight: bold;
}
.bootstrap-ddshop dfn {
  font-style: italic;
}
.bootstrap-ddshop h1 {
  font-size: 2em;
  margin: 0.67em 0;
}
.bootstrap-ddshop mark {
  background: #ff0;
  color: #000;
}
.bootstrap-ddshop small {
  font-size: 80%;
}
.bootstrap-ddshop sub,
.bootstrap-ddshop sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}
.bootstrap-ddshop sup {
  top: -0.5em;
}
.bootstrap-ddshop sub {
  bottom: -0.25em;
}
.bootstrap-ddshop img {
  border: 0;
}
.bootstrap-ddshop svg:not(:root) {
  overflow: hidden;
}
.bootstrap-ddshop figure {
  margin: 1em 40px;
}
.bootstrap-ddshop hr {
  -moz-box-sizing: content-box;
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
  height: 0;
}
.bootstrap-ddshop pre {
  overflow: auto;
}
.bootstrap-ddshop code,
.bootstrap-ddshop kbd,
.bootstrap-ddshop pre,
.bootstrap-ddshop samp {
  font-family: monospace, monospace;
  font-size: 1em;
}
.bootstrap-ddshop button,
.bootstrap-ddshop input,
.bootstrap-ddshop optgroup,
.bootstrap-ddshop select,
.bootstrap-ddshop textarea {
  color: inherit;
  font: inherit;
  margin: 0;
}
.bootstrap-ddshop button {
  overflow: visible;
}
.bootstrap-ddshop button,
.bootstrap-ddshop select {
  text-transform: none;
}
.bootstrap-ddshop button,
.bootstrap-ddshop html input[type="button"],
.bootstrap-ddshop input[type="reset"],
.bootstrap-ddshop input[type="submit"] {
  -webkit-appearance: button;
  cursor: pointer;
}
.bootstrap-ddshop button[disabled],
.bootstrap-ddshop html input[disabled] {
  cursor: default;
}
.bootstrap-ddshop button::-moz-focus-inner,
.bootstrap-ddshop input::-moz-focus-inner {
  border: 0;
  padding: 0;
}
.bootstrap-ddshop input {
  line-height: normal;
}
.bootstrap-ddshop input[type="checkbox"],
.bootstrap-ddshop input[type="radio"] {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  padding: 0;
}
.bootstrap-ddshop input[type="number"]::-webkit-inner-spin-button,
.bootstrap-ddshop input[type="number"]::-webkit-outer-spin-button {
  height: auto;
}
.bootstrap-ddshop input[type="search"] {
  -webkit-appearance: textfield;
  -moz-box-sizing: content-box;
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
}
.bootstrap-ddshop input[type="search"]::-webkit-search-cancel-button,
.bootstrap-ddshop input[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}
.bootstrap-ddshop fieldset {
  border: 1px solid #c0c0c0;
  margin: 0 2px;
  padding: 0.35em 0.625em 0.75em;
}
.bootstrap-ddshop legend {
  border: 0;
  padding: 0;
}
.bootstrap-ddshop textarea {
  overflow: auto;
}
.bootstrap-ddshop optgroup {
  font-weight: bold;
}
.bootstrap-ddshop table {
  border-collapse: collapse;
  border-spacing: 0;
}
.bootstrap-ddshop td,
.bootstrap-ddshop th {
  padding: 0;
}
@media print {
  .bootstrap-ddshop *,
  .bootstrap-ddshop *:before,
  .bootstrap-ddshop *:after {
    background: transparent !important;
    color: #000 !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    text-shadow: none !important;
  }
  /*
  .bootstrap-ddshop a,
  .bootstrap-ddshop a:visited {
    text-decoration: underline;
  }
  .bootstrap-ddshop a[href]:after {
    content: " (" attr(href) ")";
  }
  .bootstrap-ddshop abbr[title]:after {
    content: " (" attr(title) ")";
  }
  .bootstrap-ddshop a[href^="#"]:after,
  .bootstrap-ddshop a[href^="javascript:"]:after {
    content: "";
  }*/
  .bootstrap-ddshop pre,
  .bootstrap-ddshop blockquote {
    border: 1px solid #999;
    page-break-inside: avoid;
  }
  .bootstrap-ddshop thead {
    display: table-header-group;
  }
  .bootstrap-ddshop tr,
  .bootstrap-ddshop img {
    page-break-inside: avoid;
  }
  .bootstrap-ddshop img {
    max-width: 100% !important;
  }
  .bootstrap-ddshop p,
  .bootstrap-ddshop h2,
  .bootstrap-ddshop h3 {
    orphans: 3;
    widows: 3;
  }
  .bootstrap-ddshop h2,
  .bootstrap-ddshop h3 {
    page-break-after: avoid;
  }
  .bootstrap-ddshop select {
    background: #fff !important;
  }
  .bootstrap-ddshop .navbar {
    display: none;
  }
  .bootstrap-ddshop .btn > .caret,
  .bootstrap-ddshop .dropup > .btn > .caret {
    border-top-color: #000 !important;
  }
  .bootstrap-ddshop .label {
    border: 1px solid #000;
  }
  .bootstrap-ddshop .table {
    border-collapse: collapse !important;
  }
  .bootstrap-ddshop .table td,
  .bootstrap-ddshop .table th {
    background-color: #fff !important;
  }
  .bootstrap-ddshop .table-bordered th,
  .bootstrap-ddshop .table-bordered td {
    border: 1px solid #ddd !important;
  }
}
@font-face {
  font-family: 'Glyphicons Halflings';
  src: url('../fonts/glyphicons-halflings-regular.eot');
  src: url('../fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'), url('../fonts/glyphicons-halflings-regular.woff2') format('woff2'), url('../fonts/glyphicons-halflings-regular.woff') format('woff'), url('../fonts/glyphicons-halflings-regular.ttf') format('truetype'), url('../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular') format('svg');
}
.bootstrap-ddshop .glyphicon {
  position: relative;
  top: 1px;
  display: inline-block;
  font-family: 'Glyphicons Halflings';
  font-style: normal;
  font-weight: normal;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.bootstrap-ddshop .glyphicon-asterisk:before {
  content: "\2a";
}
.bootstrap-ddshop .glyphicon-plus:before {
  content: "\2b";
}
.bootstrap-ddshop .glyphicon-euro:before,
.bootstrap-ddshop .glyphicon-eur:before {
  content: "\20ac";
}
.bootstrap-ddshop .glyphicon-minus:before {
  content: "\2212";
}
.bootstrap-ddshop .glyphicon-cloud:before {
  content: "\2601";
}
.bootstrap-ddshop .glyphicon-envelope:before {
  content: "\2709";
}
.bootstrap-ddshop .glyphicon-pencil:before {
  content: "\270f";
}
.bootstrap-ddshop .glyphicon-glass:before {
  content: "\e001";
}
.bootstrap-ddshop .glyphicon-music:before {
  content: "\e002";
}
.bootstrap-ddshop .glyphicon-search:before {
  content: "\e003";
}
.bootstrap-ddshop .glyphicon-heart:before {
  content: "\e005";
}
.bootstrap-ddshop .glyphicon-star:before {
  content: "\e006";
}
.bootstrap-ddshop .glyphicon-star-empty:before {
  content: "\e007";
}
.bootstrap-ddshop .glyphicon-user:before {
  content: "\e008";
}
.bootstrap-ddshop .glyphicon-film:before {
  content: "\e009";
}
.bootstrap-ddshop .glyphicon-th-large:before {
  content: "\e010";
}
.bootstrap-ddshop .glyphicon-th:before {
  content: "\e011";
}
.bootstrap-ddshop .glyphicon-th-list:before {
  content: "\e012";
}
.bootstrap-ddshop .glyphicon-ok:before {
  content: "\e013";
}
.bootstrap-ddshop .glyphicon-remove:before {
  content: "\e014";
}
.bootstrap-ddshop .glyphicon-zoom-in:before {
  content: "\e015";
}
.bootstrap-ddshop .glyphicon-zoom-out:before {
  content: "\e016";
}
.bootstrap-ddshop .glyphicon-off:before {
  content: "\e017";
}
.bootstrap-ddshop .glyphicon-signal:before {
  content: "\e018";
}
.bootstrap-ddshop .glyphicon-cog:before {
  content: "\e019";
}
.bootstrap-ddshop .glyphicon-trash:before {
  content: "\e020";
}
.bootstrap-ddshop .glyphicon-home:before {
  content: "\e021";
}
.bootstrap-ddshop .glyphicon-file:before {
  content: "\e022";
}
.bootstrap-ddshop .glyphicon-time:before {
  content: "\e023";
}
.bootstrap-ddshop .glyphicon-road:before {
  content: "\e024";
}
.bootstrap-ddshop .glyphicon-download-alt:before {
  content: "\e025";
}
.bootstrap-ddshop .glyphicon-download:before {
  content: "\e026";
}
.bootstrap-ddshop .glyphicon-upload:before {
  content: "\e027";
}
.bootstrap-ddshop .glyphicon-inbox:before {
  content: "\e028";
}
.bootstrap-ddshop .glyphicon-play-circle:before {
  content: "\e029";
}
.bootstrap-ddshop .glyphicon-repeat:before {
  content: "\e030";
}
.bootstrap-ddshop .glyphicon-refresh:before {
  content: "\e031";
}
.bootstrap-ddshop .glyphicon-list-alt:before {
  content: "\e032";
}
.bootstrap-ddshop .glyphicon-lock:before {
  content: "\e033";
}
.bootstrap-ddshop .glyphicon-flag:before {
  content: "\e034";
}
.bootstrap-ddshop .glyphicon-headphones:before {
  content: "\e035";
}
.bootstrap-ddshop .glyphicon-volume-off:before {
  content: "\e036";
}
.bootstrap-ddshop .glyphicon-volume-down:before {
  content: "\e037";
}
.bootstrap-ddshop .glyphicon-volume-up:before {
  content: "\e038";
}
.bootstrap-ddshop .glyphicon-qrcode:before {
  content: "\e039";
}
.bootstrap-ddshop .glyphicon-barcode:before {
  content: "\e040";
}
.bootstrap-ddshop .glyphicon-tag:before {
  content: "\e041";
}
.bootstrap-ddshop .glyphicon-tags:before {
  content: "\e042";
}
.bootstrap-ddshop .glyphicon-book:before {
  content: "\e043";
}
.bootstrap-ddshop .glyphicon-bookmark:before {
  content: "\e044";
}
.bootstrap-ddshop .glyphicon-print:before {
  content: "\e045";
}
.bootstrap-ddshop .glyphicon-camera:before {
  content: "\e046";
}
.bootstrap-ddshop .glyphicon-font:before {
  content: "\e047";
}
.bootstrap-ddshop .glyphicon-bold:before {
  content: "\e048";
}
.bootstrap-ddshop .glyphicon-italic:before {
  content: "\e049";
}
.bootstrap-ddshop .glyphicon-text-height:before {
  content: "\e050";
}
.bootstrap-ddshop .glyphicon-text-width:before {
  content: "\e051";
}
.bootstrap-ddshop .glyphicon-align-left:before {
  content: "\e052";
}
.bootstrap-ddshop .glyphicon-align-center:before {
  content: "\e053";
}
.bootstrap-ddshop .glyphicon-align-right:before {
  content: "\e054";
}
.bootstrap-ddshop .glyphicon-align-justify:before {
  content: "\e055";
}
.bootstrap-ddshop .glyphicon-list:before {
  content: "\e056";
}
.bootstrap-ddshop .glyphicon-indent-left:before {
  content: "\e057";
}
.bootstrap-ddshop .glyphicon-indent-right:before {
  content: "\e058";
}
.bootstrap-ddshop .glyphicon-facetime-video:before {
  content: "\e059";
}
.bootstrap-ddshop .glyphicon-picture:before {
  content: "\e060";
}
.bootstrap-ddshop .glyphicon-map-marker:before {
  content: "\e062";
}
.bootstrap-ddshop .glyphicon-adjust:before {
  content: "\e063";
}
.bootstrap-ddshop .glyphicon-tint:before {
  content: "\e064";
}
.bootstrap-ddshop .glyphicon-edit:before {
  content: "\e065";
}
.bootstrap-ddshop .glyphicon-share:before {
  content: "\e066";
}
.bootstrap-ddshop .glyphicon-check:before {
  content: "\e067";
}
.bootstrap-ddshop .glyphicon-move:before {
  content: "\e068";
}
.bootstrap-ddshop .glyphicon-step-backward:before {
  content: "\e069";
}
.bootstrap-ddshop .glyphicon-fast-backward:before {
  content: "\e070";
}
.bootstrap-ddshop .glyphicon-backward:before {
  content: "\e071";
}
.bootstrap-ddshop .glyphicon-play:before {
  content: "\e072";
}
.bootstrap-ddshop .glyphicon-pause:before {
  content: "\e073";
}
.bootstrap-ddshop .glyphicon-stop:before {
  content: "\e074";
}
.bootstrap-ddshop .glyphicon-forward:before {
  content: "\e075";
}
.bootstrap-ddshop .glyphicon-fast-forward:before {
  content: "\e076";
}
.bootstrap-ddshop .glyphicon-step-forward:before {
  content: "\e077";
}
.bootstrap-ddshop .glyphicon-eject:before {
  content: "\e078";
}
.bootstrap-ddshop .glyphicon-chevron-left:before {
  content: "\e079";
}
.bootstrap-ddshop .glyphicon-chevron-right:before {
  content: "\e080";
}
.bootstrap-ddshop .glyphicon-plus-sign:before {
  content: "\e081";
}
.bootstrap-ddshop .glyphicon-minus-sign:before {
  content: "\e082";
}
.bootstrap-ddshop .glyphicon-remove-sign:before {
  content: "\e083";
}
.bootstrap-ddshop .glyphicon-ok-sign:before {
  content: "\e084";
}
.bootstrap-ddshop .glyphicon-question-sign:before {
  content: "\e085";
}
.bootstrap-ddshop .glyphicon-info-sign:before {
  content: "\e086";
}
.bootstrap-ddshop .glyphicon-screenshot:before {
  content: "\e087";
}
.bootstrap-ddshop .glyphicon-remove-circle:before {
  content: "\e088";
}
.bootstrap-ddshop .glyphicon-ok-circle:before {
  content: "\e089";
}
.bootstrap-ddshop .glyphicon-ban-circle:before {
  content: "\e090";
}
.bootstrap-ddshop .glyphicon-arrow-left:before {
  content: "\e091";
}
.bootstrap-ddshop .glyphicon-arrow-right:before {
  content: "\e092";
}
.bootstrap-ddshop .glyphicon-arrow-up:before {
  content: "\e093";
}
.bootstrap-ddshop .glyphicon-arrow-down:before {
  content: "\e094";
}
.bootstrap-ddshop .glyphicon-share-alt:before {
  content: "\e095";
}
.bootstrap-ddshop .glyphicon-resize-full:before {
  content: "\e096";
}
.bootstrap-ddshop .glyphicon-resize-small:before {
  content: "\e097";
}
.bootstrap-ddshop .glyphicon-exclamation-sign:before {
  content: "\e101";
}
.bootstrap-ddshop .glyphicon-gift:before {
  content: "\e102";
}
.bootstrap-ddshop .glyphicon-leaf:before {
  content: "\e103";
}
.bootstrap-ddshop .glyphicon-fire:before {
  content: "\e104";
}
.bootstrap-ddshop .glyphicon-eye-open:before {
  content: "\e105";
}
.bootstrap-ddshop .glyphicon-eye-close:before {
  content: "\e106";
}
.bootstrap-ddshop .glyphicon-warning-sign:before {
  content: "\e107";
}
.bootstrap-ddshop .glyphicon-plane:before {
  content: "\e108";
}
.bootstrap-ddshop .glyphicon-calendar:before {
  content: "\e109";
}
.bootstrap-ddshop .glyphicon-random:before {
  content: "\e110";
}
.bootstrap-ddshop .glyphicon-comment:before {
  content: "\e111";
}
.bootstrap-ddshop .glyphicon-magnet:before {
  content: "\e112";
}
.bootstrap-ddshop .glyphicon-chevron-up:before {
  content: "\e113";
}
.bootstrap-ddshop .glyphicon-chevron-down:before {
  content: "\e114";
}
.bootstrap-ddshop .glyphicon-retweet:before {
  content: "\e115";
}
.bootstrap-ddshop .glyphicon-shopping-cart:before {
  content: "\e116";
}
.bootstrap-ddshop .glyphicon-folder-close:before {
  content: "\e117";
}
.bootstrap-ddshop .glyphicon-folder-open:before {
  content: "\e118";
}
.bootstrap-ddshop .glyphicon-resize-vertical:before {
  content: "\e119";
}
.bootstrap-ddshop .glyphicon-resize-horizontal:before {
  content: "\e120";
}
.bootstrap-ddshop .glyphicon-hdd:before {
  content: "\e121";
}
.bootstrap-ddshop .glyphicon-bullhorn:before {
  content: "\e122";
}
.bootstrap-ddshop .glyphicon-bell:before {
  content: "\e123";
}
.bootstrap-ddshop .glyphicon-certificate:before {
  content: "\e124";
}
.bootstrap-ddshop .glyphicon-thumbs-up:before {
  content: "\e125";
}
.bootstrap-ddshop .glyphicon-thumbs-down:before {
  content: "\e126";
}
.bootstrap-ddshop .glyphicon-hand-right:before {
  content: "\e127";
}
.bootstrap-ddshop .glyphicon-hand-left:before {
  content: "\e128";
}
.bootstrap-ddshop .glyphicon-hand-up:before {
  content: "\e129";
}
.bootstrap-ddshop .glyphicon-hand-down:before {
  content: "\e130";
}
.bootstrap-ddshop .glyphicon-circle-arrow-right:before {
  content: "\e131";
}
.bootstrap-ddshop .glyphicon-circle-arrow-left:before {
  content: "\e132";
}
.bootstrap-ddshop .glyphicon-circle-arrow-up:before {
  content: "\e133";
}
.bootstrap-ddshop .glyphicon-circle-arrow-down:before {
  content: "\e134";
}
.bootstrap-ddshop .glyphicon-globe:before {
  content: "\e135";
}
.bootstrap-ddshop .glyphicon-wrench:before {
  content: "\e136";
}
.bootstrap-ddshop .glyphicon-tasks:before {
  content: "\e137";
}
.bootstrap-ddshop .glyphicon-filter:before {
  content: "\e138";
}
.bootstrap-ddshop .glyphicon-briefcase:before {
  content: "\e139";
}
.bootstrap-ddshop .glyphicon-fullscreen:before {
  content: "\e140";
}
.bootstrap-ddshop .glyphicon-dashboard:before {
  content: "\e141";
}
.bootstrap-ddshop .glyphicon-paperclip:before {
  content: "\e142";
}
.bootstrap-ddshop .glyphicon-heart-empty:before {
  content: "\e143";
}
.bootstrap-ddshop .glyphicon-link:before {
  content: "\e144";
}
.bootstrap-ddshop .glyphicon-phone:before {
  content: "\e145";
}
.bootstrap-ddshop .glyphicon-pushpin:before {
  content: "\e146";
}
.bootstrap-ddshop .glyphicon-usd:before {
  content: "\e148";
}
.bootstrap-ddshop .glyphicon-gbp:before {
  content: "\e149";
}
.bootstrap-ddshop .glyphicon-sort:before {
  content: "\e150";
}
.bootstrap-ddshop .glyphicon-sort-by-alphabet:before {
  content: "\e151";
}
.bootstrap-ddshop .glyphicon-sort-by-alphabet-alt:before {
  content: "\e152";
}
.bootstrap-ddshop .glyphicon-sort-by-order:before {
  content: "\e153";
}
.bootstrap-ddshop .glyphicon-sort-by-order-alt:before {
  content: "\e154";
}
.bootstrap-ddshop .glyphicon-sort-by-attributes:before {
  content: "\e155";
}
.bootstrap-ddshop .glyphicon-sort-by-attributes-alt:before {
  content: "\e156";
}
.bootstrap-ddshop .glyphicon-unchecked:before {
  content: "\e157";
}
.bootstrap-ddshop .glyphicon-expand:before {
  content: "\e158";
}
.bootstrap-ddshop .glyphicon-collapse-down:before {
  content: "\e159";
}
.bootstrap-ddshop .glyphicon-collapse-up:before {
  content: "\e160";
}
.bootstrap-ddshop .glyphicon-log-in:before {
  content: "\e161";
}
.bootstrap-ddshop .glyphicon-flash:before {
  content: "\e162";
}
.bootstrap-ddshop .glyphicon-log-out:before {
  content: "\e163";
}
.bootstrap-ddshop .glyphicon-new-window:before {
  content: "\e164";
}
.bootstrap-ddshop .glyphicon-record:before {
  content: "\e165";
}
.bootstrap-ddshop .glyphicon-save:before {
  content: "\e166";
}
.bootstrap-ddshop .glyphicon-open:before {
  content: "\e167";
}
.bootstrap-ddshop .glyphicon-saved:before {
  content: "\e168";
}
.bootstrap-ddshop .glyphicon-import:before {
  content: "\e169";
}
.bootstrap-ddshop .glyphicon-export:before {
  content: "\e170";
}
.bootstrap-ddshop .glyphicon-send:before {
  content: "\e171";
}
.bootstrap-ddshop .glyphicon-floppy-disk:before {
  content: "\e172";
}
.bootstrap-ddshop .glyphicon-floppy-saved:before {
  content: "\e173";
}
.bootstrap-ddshop .glyphicon-floppy-remove:before {
  content: "\e174";
}
.bootstrap-ddshop .glyphicon-floppy-save:before {
  content: "\e175";
}
.bootstrap-ddshop .glyphicon-floppy-open:before {
  content: "\e176";
}
.bootstrap-ddshop .glyphicon-credit-card:before {
  content: "\e177";
}
.bootstrap-ddshop .glyphicon-transfer:before {
  content: "\e178";
}
.bootstrap-ddshop .glyphicon-cutlery:before {
  content: "\e179";
}
.bootstrap-ddshop .glyphicon-header:before {
  content: "\e180";
}
.bootstrap-ddshop .glyphicon-compressed:before {
  content: "\e181";
}
.bootstrap-ddshop .glyphicon-earphone:before {
  content: "\e182";
}
.bootstrap-ddshop .glyphicon-phone-alt:before {
  content: "\e183";
}
.bootstrap-ddshop .glyphicon-tower:before {
  content: "\e184";
}
.bootstrap-ddshop .glyphicon-stats:before {
  content: "\e185";
}
.bootstrap-ddshop .glyphicon-sd-video:before {
  content: "\e186";
}
.bootstrap-ddshop .glyphicon-hd-video:before {
  content: "\e187";
}
.bootstrap-ddshop .glyphicon-subtitles:before {
  content: "\e188";
}
.bootstrap-ddshop .glyphicon-sound-stereo:before {
  content: "\e189";
}
.bootstrap-ddshop .glyphicon-sound-dolby:before {
  content: "\e190";
}
.bootstrap-ddshop .glyphicon-sound-5-1:before {
  content: "\e191";
}
.bootstrap-ddshop .glyphicon-sound-6-1:before {
  content: "\e192";
}
.bootstrap-ddshop .glyphicon-sound-7-1:before {
  content: "\e193";
}
.bootstrap-ddshop .glyphicon-copyright-mark:before {
  content: "\e194";
}
.bootstrap-ddshop .glyphicon-registration-mark:before {
  content: "\e195";
}
.bootstrap-ddshop .glyphicon-cloud-download:before {
  content: "\e197";
}
.bootstrap-ddshop .glyphicon-cloud-upload:before {
  content: "\e198";
}
.bootstrap-ddshop .glyphicon-tree-conifer:before {
  content: "\e199";
}
.bootstrap-ddshop .glyphicon-tree-deciduous:before {
  content: "\e200";
}
.bootstrap-ddshop .glyphicon-cd:before {
  content: "\e201";
}
.bootstrap-ddshop .glyphicon-save-file:before {
  content: "\e202";
}
.bootstrap-ddshop .glyphicon-open-file:before {
  content: "\e203";
}
.bootstrap-ddshop .glyphicon-level-up:before {
  content: "\e204";
}
.bootstrap-ddshop .glyphicon-copy:before {
  content: "\e205";
}
.bootstrap-ddshop .glyphicon-paste:before {
  content: "\e206";
}
.bootstrap-ddshop .glyphicon-alert:before {
  content: "\e209";
}
.bootstrap-ddshop .glyphicon-equalizer:before {
  content: "\e210";
}
.bootstrap-ddshop .glyphicon-king:before {
  content: "\e211";
}
.bootstrap-ddshop .glyphicon-queen:before {
  content: "\e212";
}
.bootstrap-ddshop .glyphicon-pawn:before {
  content: "\e213";
}
.bootstrap-ddshop .glyphicon-bishop:before {
  content: "\e214";
}
.bootstrap-ddshop .glyphicon-knight:before {
  content: "\e215";
}
.bootstrap-ddshop .glyphicon-baby-formula:before {
  content: "\e216";
}
.bootstrap-ddshop .glyphicon-tent:before {
  content: "\26fa";
}
.bootstrap-ddshop .glyphicon-blackboard:before {
  content: "\e218";
}
.bootstrap-ddshop .glyphicon-bed:before {
  content: "\e219";
}
.bootstrap-ddshop .glyphicon-apple:before {
  content: "\f8ff";
}
.bootstrap-ddshop .glyphicon-erase:before {
  content: "\e221";
}
.bootstrap-ddshop .glyphicon-hourglass:before {
  content: "\231b";
}
.bootstrap-ddshop .glyphicon-lamp:before {
  content: "\e223";
}
.bootstrap-ddshop .glyphicon-duplicate:before {
  content: "\e224";
}
.bootstrap-ddshop .glyphicon-piggy-bank:before {
  content: "\e225";
}
.bootstrap-ddshop .glyphicon-scissors:before {
  content: "\e226";
}
.bootstrap-ddshop .glyphicon-bitcoin:before {
  content: "\e227";
}
.bootstrap-ddshop .glyphicon-btc:before {
  content: "\e227";
}
.bootstrap-ddshop .glyphicon-xbt:before {
  content: "\e227";
}
.bootstrap-ddshop .glyphicon-yen:before {
  content: "\00a5";
}
.bootstrap-ddshop .glyphicon-jpy:before {
  content: "\00a5";
}
.bootstrap-ddshop .glyphicon-ruble:before {
  content: "\20bd";
}
.bootstrap-ddshop .glyphicon-rub:before {
  content: "\20bd";
}
.bootstrap-ddshop .glyphicon-scale:before {
  content: "\e230";
}
.bootstrap-ddshop .glyphicon-ice-lolly:before {
  content: "\e231";
}
.bootstrap-ddshop .glyphicon-ice-lolly-tasted:before {
  content: "\e232";
}
.bootstrap-ddshop .glyphicon-education:before {
  content: "\e233";
}
.bootstrap-ddshop .glyphicon-option-horizontal:before {
  content: "\e234";
}
.bootstrap-ddshop .glyphicon-option-vertical:before {
  content: "\e235";
}
.bootstrap-ddshop .glyphicon-menu-hamburger:before {
  content: "\e236";
}
.bootstrap-ddshop .glyphicon-modal-window:before {
  content: "\e237";
}
.bootstrap-ddshop .glyphicon-oil:before {
  content: "\e238";
}
.bootstrap-ddshop .glyphicon-grain:before {
  content: "\e239";
}
.bootstrap-ddshop .glyphicon-sunglasses:before {
  content: "\e240";
}
.bootstrap-ddshop .glyphicon-text-size:before {
  content: "\e241";
}
.bootstrap-ddshop .glyphicon-text-color:before {
  content: "\e242";
}
.bootstrap-ddshop .glyphicon-text-background:before {
  content: "\e243";
}
.bootstrap-ddshop .glyphicon-object-align-top:before {
  content: "\e244";
}
.bootstrap-ddshop .glyphicon-object-align-bottom:before {
  content: "\e245";
}
.bootstrap-ddshop .glyphicon-object-align-horizontal:before {
  content: "\e246";
}
.bootstrap-ddshop .glyphicon-object-align-left:before {
  content: "\e247";
}
.bootstrap-ddshop .glyphicon-object-align-vertical:before {
  content: "\e248";
}
.bootstrap-ddshop .glyphicon-object-align-right:before {
  content: "\e249";
}
.bootstrap-ddshop .glyphicon-triangle-right:before {
  content: "\e250";
}
.bootstrap-ddshop .glyphicon-triangle-left:before {
  content: "\e251";
}
.bootstrap-ddshop .glyphicon-triangle-bottom:before {
  content: "\e252";
}
.bootstrap-ddshop .glyphicon-triangle-top:before {
  content: "\e253";
}
.bootstrap-ddshop .glyphicon-console:before {
  content: "\e254";
}
.bootstrap-ddshop .glyphicon-superscript:before {
  content: "\e255";
}
.bootstrap-ddshop .glyphicon-subscript:before {
  content: "\e256";
}
.bootstrap-ddshop .glyphicon-menu-left:before {
  content: "\e257";
}
.bootstrap-ddshop .glyphicon-menu-right:before {
  content: "\e258";
}
.bootstrap-ddshop .glyphicon-menu-down:before {
  content: "\e259";
}
.bootstrap-ddshop .glyphicon-menu-up:before {
  content: "\e260";
}
.bootstrap-ddshop * {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.bootstrap-ddshop *:before,
.bootstrap-ddshop *:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.bootstrap-ddshop html {
  font-size: 10px;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
.bootstrap-ddshop body {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 14px;
  line-height: 1.42857143;
  color: #333333;
  background-color: #ffffff;
}
.bootstrap-ddshop input,
.bootstrap-ddshop button,
.bootstrap-ddshop select,
.bootstrap-ddshop textarea {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}
/*
.bootstrap-ddshop a {
  color: #337ab7;
  text-decoration: none;
}
.bootstrap-ddshop a:hover,
.bootstrap-ddshop a:focus {
  color: #23527c;
  text-decoration: underline;
}
.bootstrap-ddshop a:focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
*/
.bootstrap-ddshop figure {
  margin: 0;
}
.bootstrap-ddshop img {
  vertical-align: middle;
}
.bootstrap-ddshop .img-responsive,
.bootstrap-ddshop .thumbnail > img,
.bootstrap-ddshop .thumbnail a > img,
.bootstrap-ddshop .carousel-inner > .item > img,
.bootstrap-ddshop .carousel-inner > .item > a > img {
  display: block;
  max-width: 100%;
  height: auto;
}
.bootstrap-ddshop .img-rounded {
  border-radius: 6px;
}
.bootstrap-ddshop .img-thumbnail {
  padding: 4px;
  line-height: 1.42857143;
  background-color: #ffffff;
  border: 1px solid #dddddd;
  border-radius: 4px;
  -webkit-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  display: inline-block;
  max-width: 100%;
  height: auto;
}
.bootstrap-ddshop .img-circle {
  border-radius: 50%;
}
.bootstrap-ddshop hr {
  margin-top: 20px;
  margin-bottom: 20px;
  border: 0;
  border-top: 1px solid #eeeeee;
}
.bootstrap-ddshop .sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  margin: -1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.bootstrap-ddshop .sr-only-focusable:active,
.bootstrap-ddshop .sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto;
}
.bootstrap-ddshop [role="button"] {
  cursor: pointer;
}
.bootstrap-ddshop h1,
.bootstrap-ddshop h2,
.bootstrap-ddshop h3,
.bootstrap-ddshop h4,
.bootstrap-ddshop h5,
.bootstrap-ddshop h6,
.bootstrap-ddshop .h1,
.bootstrap-ddshop .h2,
.bootstrap-ddshop .h3,
.bootstrap-ddshop .h4,
.bootstrap-ddshop .h5,
.bootstrap-ddshop .h6 {
  font-family: inherit;
  font-weight: 500;
  line-height: 1.1;
  color: inherit;
}
.bootstrap-ddshop h1 small,
.bootstrap-ddshop h2 small,
.bootstrap-ddshop h3 small,
.bootstrap-ddshop h4 small,
.bootstrap-ddshop h5 small,
.bootstrap-ddshop h6 small,
.bootstrap-ddshop .h1 small,
.bootstrap-ddshop .h2 small,
.bootstrap-ddshop .h3 small,
.bootstrap-ddshop .h4 small,
.bootstrap-ddshop .h5 small,
.bootstrap-ddshop .h6 small,
.bootstrap-ddshop h1 .small,
.bootstrap-ddshop h2 .small,
.bootstrap-ddshop h3 .small,
.bootstrap-ddshop h4 .small,
.bootstrap-ddshop h5 .small,
.bootstrap-ddshop h6 .small,
.bootstrap-ddshop .h1 .small,
.bootstrap-ddshop .h2 .small,
.bootstrap-ddshop .h3 .small,
.bootstrap-ddshop .h4 .small,
.bootstrap-ddshop .h5 .small,
.bootstrap-ddshop .h6 .small {
  font-weight: normal;
  line-height: 1;
  color: #777777;
}
.bootstrap-ddshop h1,
.bootstrap-ddshop .h1,
.bootstrap-ddshop h2,
.bootstrap-ddshop .h2,
.bootstrap-ddshop h3,
.bootstrap-ddshop .h3 {
  margin-top: 20px;
  margin-bottom: 10px;
}
.bootstrap-ddshop h1 small,
.bootstrap-ddshop .h1 small,
.bootstrap-ddshop h2 small,
.bootstrap-ddshop .h2 small,
.bootstrap-ddshop h3 small,
.bootstrap-ddshop .h3 small,
.bootstrap-ddshop h1 .small,
.bootstrap-ddshop .h1 .small,
.bootstrap-ddshop h2 .small,
.bootstrap-ddshop .h2 .small,
.bootstrap-ddshop h3 .small,
.bootstrap-ddshop .h3 .small {
  font-size: 65%;
}
.bootstrap-ddshop h4,
.bootstrap-ddshop .h4,
.bootstrap-ddshop h5,
.bootstrap-ddshop .h5,
.bootstrap-ddshop h6,
.bootstrap-ddshop .h6 {
  margin-top: 10px;
  margin-bottom: 10px;
}
.bootstrap-ddshop h4 small,
.bootstrap-ddshop .h4 small,
.bootstrap-ddshop h5 small,
.bootstrap-ddshop .h5 small,
.bootstrap-ddshop h6 small,
.bootstrap-ddshop .h6 small,
.bootstrap-ddshop h4 .small,
.bootstrap-ddshop .h4 .small,
.bootstrap-ddshop h5 .small,
.bootstrap-ddshop .h5 .small,
.bootstrap-ddshop h6 .small,
.bootstrap-ddshop .h6 .small {
  font-size: 75%;
}
.bootstrap-ddshop h1,
.bootstrap-ddshop .h1 {
  font-size: 36px;
}
.bootstrap-ddshop h2,
.bootstrap-ddshop .h2 {
  font-size: 30px;
}
.bootstrap-ddshop h3,
.bootstrap-ddshop .h3 {
  font-size: 24px;
}
.bootstrap-ddshop h4,
.bootstrap-ddshop .h4 {
  font-size: 18px;
}
.bootstrap-ddshop h5,
.bootstrap-ddshop .h5 {
  font-size: 14px;
}
.bootstrap-ddshop h6,
.bootstrap-ddshop .h6 {
  font-size: 12px;
}
.bootstrap-ddshop p {
  margin: 0 0 10px;
}
.bootstrap-ddshop .lead {
  margin-bottom: 20px;
  font-size: 16px;
  font-weight: 300;
  line-height: 1.4;
}
@media (min-width: 768px) {
  .bootstrap-ddshop .lead {
    font-size: 21px;
  }
}
.bootstrap-ddshop small,
.bootstrap-ddshop .small {
  font-size: 85%;
}
.bootstrap-ddshop mark,
.bootstrap-ddshop .mark {
  background-color: #fcf8e3;
  padding: .2em;
}
.bootstrap-ddshop .text-left {
  text-align: left;
}
.bootstrap-ddshop .text-right {
  text-align: right;
}
.bootstrap-ddshop .text-center {
  text-align: center;
}
.bootstrap-ddshop .text-justify {
  text-align: justify;
}
.bootstrap-ddshop .text-nowrap {
  white-space: nowrap;
}
.bootstrap-ddshop .text-lowercase {
  text-transform: lowercase;
}
.bootstrap-ddshop .text-uppercase {
  text-transform: uppercase;
}
.bootstrap-ddshop .text-capitalize {
  text-transform: capitalize;
}
.bootstrap-ddshop .text-muted {
  color: #777777;
}
.bootstrap-ddshop .text-primary {
  color: #337ab7;
}
.bootstrap-ddshop a.text-primary:hover {
  color: #286090;
}
.bootstrap-ddshop .text-success {
  color: #3c763d;
}
.bootstrap-ddshop a.text-success:hover {
  color: #2b542c;
}
.bootstrap-ddshop .text-info {
  color: #31708f;
}
.bootstrap-ddshop a.text-info:hover {
  color: #245269;
}
.bootstrap-ddshop .text-warning {
  color: #8a6d3b;
}
.bootstrap-ddshop a.text-warning:hover {
  color: #66512c;
}
.bootstrap-ddshop .text-danger {
  color: #a94442;
}
.bootstrap-ddshop a.text-danger:hover {
  color: #843534;
}
.bootstrap-ddshop .bg-primary {
  color: #fff;
  background-color: #337ab7;
}
.bootstrap-ddshop a.bg-primary:hover {
  background-color: #286090;
}
.bootstrap-ddshop .bg-success {
  background-color: #dff0d8;
}
.bootstrap-ddshop a.bg-success:hover {
  background-color: #c1e2b3;
}
.bootstrap-ddshop .bg-info {
  background-color: #d9edf7;
}
.bootstrap-ddshop a.bg-info:hover {
  background-color: #afd9ee;
}
.bootstrap-ddshop .bg-warning {
  background-color: #fcf8e3;
}
.bootstrap-ddshop a.bg-warning:hover {
  background-color: #f7ecb5;
}
.bootstrap-ddshop .bg-danger {
  background-color: #f2dede;
}
.bootstrap-ddshop a.bg-danger:hover {
  background-color: #e4b9b9;
}
.bootstrap-ddshop .page-header {
  padding-bottom: 9px;
  margin: 40px 0 20px;
  border-bottom: 1px solid #eeeeee;
}
.bootstrap-ddshop ul,
.bootstrap-ddshop ol {
  margin-top: 0;
  margin-bottom: 10px;
}
.bootstrap-ddshop ul ul,
.bootstrap-ddshop ol ul,
.bootstrap-ddshop ul ol,
.bootstrap-ddshop ol ol {
  margin-bottom: 0;
}
.bootstrap-ddshop .list-unstyled {
  padding-left: 0;
  list-style: none;
}
.bootstrap-ddshop .list-inline {
  padding-left: 0;
  list-style: none;
  margin-left: -5px;
}
.bootstrap-ddshop .list-inline > li {
  display: inline-block;
  padding-left: 5px;
  padding-right: 5px;
}
.bootstrap-ddshop dl {
  margin-top: 0;
  margin-bottom: 20px;
}
.bootstrap-ddshop dt,
.bootstrap-ddshop dd {
  line-height: 1.42857143;
}
.bootstrap-ddshop dt {
  font-weight: bold;
}
.bootstrap-ddshop dd {
  margin-left: 0;
}
@media (min-width: 768px) {
  .bootstrap-ddshop .dl-horizontal dt {
    float: left;
    width: 160px;
    clear: left;
    text-align: right;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
  .bootstrap-ddshop .dl-horizontal dd {
    margin-left: 180px;
  }
}
.bootstrap-ddshop abbr[title],
.bootstrap-ddshop abbr[data-original-title] {
  cursor: help;
  border-bottom: 1px dotted #777777;
}
.bootstrap-ddshop .initialism {
  font-size: 90%;
  text-transform: uppercase;
}
.bootstrap-ddshop blockquote {
  padding: 10px 20px;
  margin: 0 0 20px;
  font-size: 17.5px;
  border-left: 5px solid #eeeeee;
}
.bootstrap-ddshop blockquote p:last-child,
.bootstrap-ddshop blockquote ul:last-child,
.bootstrap-ddshop blockquote ol:last-child {
  margin-bottom: 0;
}
.bootstrap-ddshop blockquote footer,
.bootstrap-ddshop blockquote small,
.bootstrap-ddshop blockquote .small {
  display: block;
  font-size: 80%;
  line-height: 1.42857143;
  color: #777777;
}
.bootstrap-ddshop blockquote footer:before,
.bootstrap-ddshop blockquote small:before,
.bootstrap-ddshop blockquote .small:before {
  content: '\2014 \00A0';
}
.bootstrap-ddshop .blockquote-reverse,
.bootstrap-ddshop blockquote.pull-right {
  padding-right: 15px;
  padding-left: 0;
  border-right: 5px solid #eeeeee;
  border-left: 0;
  text-align: right;
}
.bootstrap-ddshop .blockquote-reverse footer:before,
.bootstrap-ddshop blockquote.pull-right footer:before,
.bootstrap-ddshop .blockquote-reverse small:before,
.bootstrap-ddshop blockquote.pull-right small:before,
.bootstrap-ddshop .blockquote-reverse .small:before,
.bootstrap-ddshop blockquote.pull-right .small:before {
  content: '';
}
.bootstrap-ddshop .blockquote-reverse footer:after,
.bootstrap-ddshop blockquote.pull-right footer:after,
.bootstrap-ddshop .blockquote-reverse small:after,
.bootstrap-ddshop blockquote.pull-right small:after,
.bootstrap-ddshop .blockquote-reverse .small:after,
.bootstrap-ddshop blockquote.pull-right .small:after {
  content: '\00A0 \2014';
}
.bootstrap-ddshop address {
  margin-bottom: 20px;
  font-style: normal;
  line-height: 1.42857143;
}
.bootstrap-ddshop code,
.bootstrap-ddshop kbd,
.bootstrap-ddshop pre,
.bootstrap-ddshop samp {
  font-family: Menlo, Monaco, Consolas, "Courier New", monospace;
}
.bootstrap-ddshop code {
  padding: 2px 4px;
  font-size: 90%;
  color: #c7254e;
  background-color: #f9f2f4;
  border-radius: 4px;
}
.bootstrap-ddshop kbd {
  padding: 2px 4px;
  font-size: 90%;
  color: #ffffff;
  background-color: #333333;
  border-radius: 3px;
  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.25);
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.25);
}
.bootstrap-ddshop kbd kbd {
  padding: 0;
  font-size: 100%;
  font-weight: bold;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.bootstrap-ddshop pre {
  display: block;
  padding: 9.5px;
  margin: 0 0 10px;
  font-size: 13px;
  line-height: 1.42857143;
  word-break: break-all;
  word-wrap: break-word;
  color: #333333;
  background-color: #f5f5f5;
  border: 1px solid #cccccc;
  border-radius: 4px;
}
.bootstrap-ddshop pre code {
  padding: 0;
  font-size: inherit;
  color: inherit;
  white-space: pre-wrap;
  background-color: transparent;
  border-radius: 0;
}
.bootstrap-ddshop .pre-scrollable {
  max-height: 340px;
  overflow-y: scroll;
}
.bootstrap-ddshop .container {
  margin-right: auto;
  margin-left: auto;
  padding-left: 15px;
  padding-right: 15px;
}
@media (min-width: 768px) {
  .bootstrap-ddshop .container {
    width: 750px;
  }
}
@media (min-width: 992px) {
  .bootstrap-ddshop .container {
    width: 970px;
  }
}
@media (min-width: 1200px) {
  .bootstrap-ddshop .container {
    width: 1170px;
  }
}
.bootstrap-ddshop .container-fluid {
  margin-right: auto;
  margin-left: auto;
  padding-left: 15px;
  padding-right: 15px;
}
.bootstrap-ddshop .row {
  margin-left: -15px;
  margin-right: -15px;
}
.bootstrap-ddshop .col-xs-1,
.bootstrap-ddshop .col-sm-1,
.bootstrap-ddshop .col-md-1,
.bootstrap-ddshop .col-lg-1,
.bootstrap-ddshop .col-xs-2,
.bootstrap-ddshop .col-sm-2,
.bootstrap-ddshop .col-md-2,
.bootstrap-ddshop .col-lg-2,
.bootstrap-ddshop .col-xs-3,
.bootstrap-ddshop .col-sm-3,
.bootstrap-ddshop .col-md-3,
.bootstrap-ddshop .col-lg-3,
.bootstrap-ddshop .col-xs-4,
.bootstrap-ddshop .col-sm-4,
.bootstrap-ddshop .col-md-4,
.bootstrap-ddshop .col-lg-4,
.bootstrap-ddshop .col-xs-5,
.bootstrap-ddshop .col-sm-5,
.bootstrap-ddshop .col-md-5,
.bootstrap-ddshop .col-lg-5,
.bootstrap-ddshop .col-xs-6,
.bootstrap-ddshop .col-sm-6,
.bootstrap-ddshop .col-md-6,
.bootstrap-ddshop .col-lg-6,
.bootstrap-ddshop .col-xs-7,
.bootstrap-ddshop .col-sm-7,
.bootstrap-ddshop .col-md-7,
.bootstrap-ddshop .col-lg-7,
.bootstrap-ddshop .col-xs-8,
.bootstrap-ddshop .col-sm-8,
.bootstrap-ddshop .col-md-8,
.bootstrap-ddshop .col-lg-8,
.bootstrap-ddshop .col-xs-9,
.bootstrap-ddshop .col-sm-9,
.bootstrap-ddshop .col-md-9,
.bootstrap-ddshop .col-lg-9,
.bootstrap-ddshop .col-xs-10,
.bootstrap-ddshop .col-sm-10,
.bootstrap-ddshop .col-md-10,
.bootstrap-ddshop .col-lg-10,
.bootstrap-ddshop .col-xs-11,
.bootstrap-ddshop .col-sm-11,
.bootstrap-ddshop .col-md-11,
.bootstrap-ddshop .col-lg-11,
.bootstrap-ddshop .col-xs-12,
.bootstrap-ddshop .col-sm-12,
.bootstrap-ddshop .col-md-12,
.bootstrap-ddshop .col-lg-12 {
  position: relative;
  min-height: 1px;
  padding-left: 15px;
  padding-right: 15px;
}
.bootstrap-ddshop .col-xs-1,
.bootstrap-ddshop .col-xs-2,
.bootstrap-ddshop .col-xs-3,
.bootstrap-ddshop .col-xs-4,
.bootstrap-ddshop .col-xs-5,
.bootstrap-ddshop .col-xs-6,
.bootstrap-ddshop .col-xs-7,
.bootstrap-ddshop .col-xs-8,
.bootstrap-ddshop .col-xs-9,
.bootstrap-ddshop .col-xs-10,
.bootstrap-ddshop .col-xs-11,
.bootstrap-ddshop .col-xs-12 {
  float: left;
}
.bootstrap-ddshop .col-xs-12 {
  width: 100%;
}
.bootstrap-ddshop .col-xs-11 {
  width: 91.66666667%;
}
.bootstrap-ddshop .col-xs-10 {
  width: 83.33333333%;
}
.bootstrap-ddshop .col-xs-9 {
  width: 75%;
}
.bootstrap-ddshop .col-xs-8 {
  width: 66.66666667%;
}
.bootstrap-ddshop .col-xs-7 {
  width: 58.33333333%;
}
.bootstrap-ddshop .col-xs-6 {
  width: 50%;
}
.bootstrap-ddshop .col-xs-5 {
  width: 41.66666667%;
}
.bootstrap-ddshop .col-xs-4 {
  width: 33.33333333%;
}
.bootstrap-ddshop .col-xs-3 {
  width: 25%;
}
.bootstrap-ddshop .col-xs-2 {
  width: 16.66666667%;
}
.bootstrap-ddshop .col-xs-1 {
  width: 8.33333333%;
}
.bootstrap-ddshop .col-xs-pull-12 {
  right: 100%;
}
.bootstrap-ddshop .col-xs-pull-11 {
  right: 91.66666667%;
}
.bootstrap-ddshop .col-xs-pull-10 {
  right: 83.33333333%;
}
.bootstrap-ddshop .col-xs-pull-9 {
  right: 75%;
}
.bootstrap-ddshop .col-xs-pull-8 {
  right: 66.66666667%;
}
.bootstrap-ddshop .col-xs-pull-7 {
  right: 58.33333333%;
}
.bootstrap-ddshop .col-xs-pull-6 {
  right: 50%;
}
.bootstrap-ddshop .col-xs-pull-5 {
  right: 41.66666667%;
}
.bootstrap-ddshop .col-xs-pull-4 {
  right: 33.33333333%;
}
.bootstrap-ddshop .col-xs-pull-3 {
  right: 25%;
}
.bootstrap-ddshop .col-xs-pull-2 {
  right: 16.66666667%;
}
.bootstrap-ddshop .col-xs-pull-1 {
  right: 8.33333333%;
}
.bootstrap-ddshop .col-xs-pull-0 {
  right: auto;
}
.bootstrap-ddshop .col-xs-push-12 {
  left: 100%;
}
.bootstrap-ddshop .col-xs-push-11 {
  left: 91.66666667%;
}
.bootstrap-ddshop .col-xs-push-10 {
  left: 83.33333333%;
}
.bootstrap-ddshop .col-xs-push-9 {
  left: 75%;
}
.bootstrap-ddshop .col-xs-push-8 {
  left: 66.66666667%;
}
.bootstrap-ddshop .col-xs-push-7 {
  left: 58.33333333%;
}
.bootstrap-ddshop .col-xs-push-6 {
  left: 50%;
}
.bootstrap-ddshop .col-xs-push-5 {
  left: 41.66666667%;
}
.bootstrap-ddshop .col-xs-push-4 {
  left: 33.33333333%;
}
.bootstrap-ddshop .col-xs-push-3 {
  left: 25%;
}
.bootstrap-ddshop .col-xs-push-2 {
  left: 16.66666667%;
}
.bootstrap-ddshop .col-xs-push-1 {
  left: 8.33333333%;
}
.bootstrap-ddshop .col-xs-push-0 {
  left: auto;
}
.bootstrap-ddshop .col-xs-offset-12 {
  margin-left: 100%;
}
.bootstrap-ddshop .col-xs-offset-11 {
  margin-left: 91.66666667%;
}
.bootstrap-ddshop .col-xs-offset-10 {
  margin-left: 83.33333333%;
}
.bootstrap-ddshop .col-xs-offset-9 {
  margin-left: 75%;
}
.bootstrap-ddshop .col-xs-offset-8 {
  margin-left: 66.66666667%;
}
.bootstrap-ddshop .col-xs-offset-7 {
  margin-left: 58.33333333%;
}
.bootstrap-ddshop .col-xs-offset-6 {
  margin-left: 50%;
}
.bootstrap-ddshop .col-xs-offset-5 {
  margin-left: 41.66666667%;
}
.bootstrap-ddshop .col-xs-offset-4 {
  margin-left: 33.33333333%;
}
.bootstrap-ddshop .col-xs-offset-3 {
  margin-left: 25%;
}
.bootstrap-ddshop .col-xs-offset-2 {
  margin-left: 16.66666667%;
}
.bootstrap-ddshop .col-xs-offset-1 {
  margin-left: 8.33333333%;
}
.bootstrap-ddshop .col-xs-offset-0 {
  margin-left: 0%;
}
@media (min-width: 768px) {
  .bootstrap-ddshop .col-sm-1,
  .bootstrap-ddshop .col-sm-2,
  .bootstrap-ddshop .col-sm-3,
  .bootstrap-ddshop .col-sm-4,
  .bootstrap-ddshop .col-sm-5,
  .bootstrap-ddshop .col-sm-6,
  .bootstrap-ddshop .col-sm-7,
  .bootstrap-ddshop .col-sm-8,
  .bootstrap-ddshop .col-sm-9,
  .bootstrap-ddshop .col-sm-10,
  .bootstrap-ddshop .col-sm-11,
  .bootstrap-ddshop .col-sm-12 {
    float: left;
  }
  .bootstrap-ddshop .col-sm-12 {
    width: 100%;
  }
  .bootstrap-ddshop .col-sm-11 {
    width: 91.66666667%;
  }
  .bootstrap-ddshop .col-sm-10 {
    width: 83.33333333%;
  }
  .bootstrap-ddshop .col-sm-9 {
    width: 75%;
  }
  .bootstrap-ddshop .col-sm-8 {
    width: 66.66666667%;
  }
  .bootstrap-ddshop .col-sm-7 {
    width: 58.33333333%;
  }
  .bootstrap-ddshop .col-sm-6 {
    width: 50%;
  }
  .bootstrap-ddshop .col-sm-5 {
    width: 41.66666667%;
  }
  .bootstrap-ddshop .col-sm-4 {
    width: 33.33333333%;
  }
  .bootstrap-ddshop .col-sm-3 {
    width: 25%;
  }
  .bootstrap-ddshop .col-sm-2 {
    width: 16.66666667%;
  }
  .bootstrap-ddshop .col-sm-1 {
    width: 8.33333333%;
  }
  .bootstrap-ddshop .col-sm-pull-12 {
    right: 100%;
  }
  .bootstrap-ddshop .col-sm-pull-11 {
    right: 91.66666667%;
  }
  .bootstrap-ddshop .col-sm-pull-10 {
    right: 83.33333333%;
  }
  .bootstrap-ddshop .col-sm-pull-9 {
    right: 75%;
  }
  .bootstrap-ddshop .col-sm-pull-8 {
    right: 66.66666667%;
  }
  .bootstrap-ddshop .col-sm-pull-7 {
    right: 58.33333333%;
  }
  .bootstrap-ddshop .col-sm-pull-6 {
    right: 50%;
  }
  .bootstrap-ddshop .col-sm-pull-5 {
    right: 41.66666667%;
  }
  .bootstrap-ddshop .col-sm-pull-4 {
    right: 33.33333333%;
  }
  .bootstrap-ddshop .col-sm-pull-3 {
    right: 25%;
  }
  .bootstrap-ddshop .col-sm-pull-2 {
    right: 16.66666667%;
  }
  .bootstrap-ddshop .col-sm-pull-1 {
    right: 8.33333333%;
  }
  .bootstrap-ddshop .col-sm-pull-0 {
    right: auto;
  }
  .bootstrap-ddshop .col-sm-push-12 {
    left: 100%;
  }
  .bootstrap-ddshop .col-sm-push-11 {
    left: 91.66666667%;
  }
  .bootstrap-ddshop .col-sm-push-10 {
    left: 83.33333333%;
  }
  .bootstrap-ddshop .col-sm-push-9 {
    left: 75%;
  }
  .bootstrap-ddshop .col-sm-push-8 {
    left: 66.66666667%;
  }
  .bootstrap-ddshop .col-sm-push-7 {
    left: 58.33333333%;
  }
  .bootstrap-ddshop .col-sm-push-6 {
    left: 50%;
  }
  .bootstrap-ddshop .col-sm-push-5 {
    left: 41.66666667%;
  }
  .bootstrap-ddshop .col-sm-push-4 {
    left: 33.33333333%;
  }
  .bootstrap-ddshop .col-sm-push-3 {
    left: 25%;
  }
  .bootstrap-ddshop .col-sm-push-2 {
    left: 16.66666667%;
  }
  .bootstrap-ddshop .col-sm-push-1 {
    left: 8.33333333%;
  }
  .bootstrap-ddshop .col-sm-push-0 {
    left: auto;
  }
  .bootstrap-ddshop .col-sm-offset-12 {
    margin-left: 100%;
  }
  .bootstrap-ddshop .col-sm-offset-11 {
    margin-left: 91.66666667%;
  }
  .bootstrap-ddshop .col-sm-offset-10 {
    margin-left: 83.33333333%;
  }
  .bootstrap-ddshop .col-sm-offset-9 {
    margin-left: 75%;
  }
  .bootstrap-ddshop .col-sm-offset-8 {
    margin-left: 66.66666667%;
  }
  .bootstrap-ddshop .col-sm-offset-7 {
    margin-left: 58.33333333%;
  }
  .bootstrap-ddshop .col-sm-offset-6 {
    margin-left: 50%;
  }
  .bootstrap-ddshop .col-sm-offset-5 {
    margin-left: 41.66666667%;
  }
  .bootstrap-ddshop .col-sm-offset-4 {
    margin-left: 33.33333333%;
  }
  .bootstrap-ddshop .col-sm-offset-3 {
    margin-left: 25%;
  }
  .bootstrap-ddshop .col-sm-offset-2 {
    margin-left: 16.66666667%;
  }
  .bootstrap-ddshop .col-sm-offset-1 {
    margin-left: 8.33333333%;
  }
  .bootstrap-ddshop .col-sm-offset-0 {
    margin-left: 0%;
  }
}
@media (min-width: 992px) {
  .bootstrap-ddshop .col-md-1,
  .bootstrap-ddshop .col-md-2,
  .bootstrap-ddshop .col-md-3,
  .bootstrap-ddshop .col-md-4,
  .bootstrap-ddshop .col-md-5,
  .bootstrap-ddshop .col-md-6,
  .bootstrap-ddshop .col-md-7,
  .bootstrap-ddshop .col-md-8,
  .bootstrap-ddshop .col-md-9,
  .bootstrap-ddshop .col-md-10,
  .bootstrap-ddshop .col-md-11,
  .bootstrap-ddshop .col-md-12 {
    float: left;
  }
  .bootstrap-ddshop .col-md-12 {
    width: 100%;
  }
  .bootstrap-ddshop .col-md-11 {
    width: 91.66666667%;
  }
  .bootstrap-ddshop .col-md-10 {
    width: 83.33333333%;
  }
  .bootstrap-ddshop .col-md-9 {
    width: 75%;
  }
  .bootstrap-ddshop .col-md-8 {
    width: 66.66666667%;
  }
  .bootstrap-ddshop .col-md-7 {
    width: 58.33333333%;
  }
  .bootstrap-ddshop .col-md-6 {
    width: 50%;
  }
  .bootstrap-ddshop .col-md-5 {
    width: 41.66666667%;
  }
  .bootstrap-ddshop .col-md-4 {
    width: 33.33333333%;
  }
  .bootstrap-ddshop .col-md-3 {
    width: 25%;
  }
  .bootstrap-ddshop .col-md-2 {
    width: 16.66666667%;
  }
  .bootstrap-ddshop .col-md-1 {
    width: 8.33333333%;
  }
  .bootstrap-ddshop .col-md-pull-12 {
    right: 100%;
  }
  .bootstrap-ddshop .col-md-pull-11 {
    right: 91.66666667%;
  }
  .bootstrap-ddshop .col-md-pull-10 {
    right: 83.33333333%;
  }
  .bootstrap-ddshop .col-md-pull-9 {
    right: 75%;
  }
  .bootstrap-ddshop .col-md-pull-8 {
    right: 66.66666667%;
  }
  .bootstrap-ddshop .col-md-pull-7 {
    right: 58.33333333%;
  }
  .bootstrap-ddshop .col-md-pull-6 {
    right: 50%;
  }
  .bootstrap-ddshop .col-md-pull-5 {
    right: 41.66666667%;
  }
  .bootstrap-ddshop .col-md-pull-4 {
    right: 33.33333333%;
  }
  .bootstrap-ddshop .col-md-pull-3 {
    right: 25%;
  }
  .bootstrap-ddshop .col-md-pull-2 {
    right: 16.66666667%;
  }
  .bootstrap-ddshop .col-md-pull-1 {
    right: 8.33333333%;
  }
  .bootstrap-ddshop .col-md-pull-0 {
    right: auto;
  }
  .bootstrap-ddshop .col-md-push-12 {
    left: 100%;
  }
  .bootstrap-ddshop .col-md-push-11 {
    left: 91.66666667%;
  }
  .bootstrap-ddshop .col-md-push-10 {
    left: 83.33333333%;
  }
  .bootstrap-ddshop .col-md-push-9 {
    left: 75%;
  }
  .bootstrap-ddshop .col-md-push-8 {
    left: 66.66666667%;
  }
  .bootstrap-ddshop .col-md-push-7 {
    left: 58.33333333%;
  }
  .bootstrap-ddshop .col-md-push-6 {
    left: 50%;
  }
  .bootstrap-ddshop .col-md-push-5 {
    left: 41.66666667%;
  }
  .bootstrap-ddshop .col-md-push-4 {
    left: 33.33333333%;
  }
  .bootstrap-ddshop .col-md-push-3 {
    left: 25%;
  }
  .bootstrap-ddshop .col-md-push-2 {
    left: 16.66666667%;
  }
  .bootstrap-ddshop .col-md-push-1 {
    left: 8.33333333%;
  }
  .bootstrap-ddshop .col-md-push-0 {
    left: auto;
  }
  .bootstrap-ddshop .col-md-offset-12 {
    margin-left: 100%;
  }
  .bootstrap-ddshop .col-md-offset-11 {
    margin-left: 91.66666667%;
  }
  .bootstrap-ddshop .col-md-offset-10 {
    margin-left: 83.33333333%;
  }
  .bootstrap-ddshop .col-md-offset-9 {
    margin-left: 75%;
  }
  .bootstrap-ddshop .col-md-offset-8 {
    margin-left: 66.66666667%;
  }
  .bootstrap-ddshop .col-md-offset-7 {
    margin-left: 58.33333333%;
  }
  .bootstrap-ddshop .col-md-offset-6 {
    margin-left: 50%;
  }
  .bootstrap-ddshop .col-md-offset-5 {
    margin-left: 41.66666667%;
  }
  .bootstrap-ddshop .col-md-offset-4 {
    margin-left: 33.33333333%;
  }
  .bootstrap-ddshop .col-md-offset-3 {
    margin-left: 25%;
  }
  .bootstrap-ddshop .col-md-offset-2 {
    margin-left: 16.66666667%;
  }
  .bootstrap-ddshop .col-md-offset-1 {
    margin-left: 8.33333333%;
  }
  .bootstrap-ddshop .col-md-offset-0 {
    margin-left: 0%;
  }
}
@media (min-width: 1200px) {
  .bootstrap-ddshop .col-lg-1,
  .bootstrap-ddshop .col-lg-2,
  .bootstrap-ddshop .col-lg-3,
  .bootstrap-ddshop .col-lg-4,
  .bootstrap-ddshop .col-lg-5,
  .bootstrap-ddshop .col-lg-6,
  .bootstrap-ddshop .col-lg-7,
  .bootstrap-ddshop .col-lg-8,
  .bootstrap-ddshop .col-lg-9,
  .bootstrap-ddshop .col-lg-10,
  .bootstrap-ddshop .col-lg-11,
  .bootstrap-ddshop .col-lg-12 {
    float: left;
  }
  .bootstrap-ddshop .col-lg-12 {
    width: 100%;
  }
  .bootstrap-ddshop .col-lg-11 {
    width: 91.66666667%;
  }
  .bootstrap-ddshop .col-lg-10 {
    width: 83.33333333%;
  }
  .bootstrap-ddshop .col-lg-9 {
    width: 75%;
  }
  .bootstrap-ddshop .col-lg-8 {
    width: 66.66666667%;
  }
  .bootstrap-ddshop .col-lg-7 {
    width: 58.33333333%;
  }
  .bootstrap-ddshop .col-lg-6 {
    width: 50%;
  }
  .bootstrap-ddshop .col-lg-5 {
    width: 41.66666667%;
  }
  .bootstrap-ddshop .col-lg-4 {
    width: 33.33333333%;
  }
  .bootstrap-ddshop .col-lg-3 {
    width: 25%;
  }
  .bootstrap-ddshop .col-lg-2 {
    width: 16.66666667%;
  }
  .bootstrap-ddshop .col-lg-1 {
    width: 8.33333333%;
  }
  .bootstrap-ddshop .col-lg-pull-12 {
    right: 100%;
  }
  .bootstrap-ddshop .col-lg-pull-11 {
    right: 91.66666667%;
  }
  .bootstrap-ddshop .col-lg-pull-10 {
    right: 83.33333333%;
  }
  .bootstrap-ddshop .col-lg-pull-9 {
    right: 75%;
  }
  .bootstrap-ddshop .col-lg-pull-8 {
    right: 66.66666667%;
  }
  .bootstrap-ddshop .col-lg-pull-7 {
    right: 58.33333333%;
  }
  .bootstrap-ddshop .col-lg-pull-6 {
    right: 50%;
  }
  .bootstrap-ddshop .col-lg-pull-5 {
    right: 41.66666667%;
  }
  .bootstrap-ddshop .col-lg-pull-4 {
    right: 33.33333333%;
  }
  .bootstrap-ddshop .col-lg-pull-3 {
    right: 25%;
  }
  .bootstrap-ddshop .col-lg-pull-2 {
    right: 16.66666667%;
  }
  .bootstrap-ddshop .col-lg-pull-1 {
    right: 8.33333333%;
  }
  .bootstrap-ddshop .col-lg-pull-0 {
    right: auto;
  }
  .bootstrap-ddshop .col-lg-push-12 {
    left: 100%;
  }
  .bootstrap-ddshop .col-lg-push-11 {
    left: 91.66666667%;
  }
  .bootstrap-ddshop .col-lg-push-10 {
    left: 83.33333333%;
  }
  .bootstrap-ddshop .col-lg-push-9 {
    left: 75%;
  }
  .bootstrap-ddshop .col-lg-push-8 {
    left: 66.66666667%;
  }
  .bootstrap-ddshop .col-lg-push-7 {
    left: 58.33333333%;
  }
  .bootstrap-ddshop .col-lg-push-6 {
    left: 50%;
  }
  .bootstrap-ddshop .col-lg-push-5 {
    left: 41.66666667%;
  }
  .bootstrap-ddshop .col-lg-push-4 {
    left: 33.33333333%;
  }
  .bootstrap-ddshop .col-lg-push-3 {
    left: 25%;
  }
  .bootstrap-ddshop .col-lg-push-2 {
    left: 16.66666667%;
  }
  .bootstrap-ddshop .col-lg-push-1 {
    left: 8.33333333%;
  }
  .bootstrap-ddshop .col-lg-push-0 {
    left: auto;
  }
  .bootstrap-ddshop .col-lg-offset-12 {
    margin-left: 100%;
  }
  .bootstrap-ddshop .col-lg-offset-11 {
    margin-left: 91.66666667%;
  }
  .bootstrap-ddshop .col-lg-offset-10 {
    margin-left: 83.33333333%;
  }
  .bootstrap-ddshop .col-lg-offset-9 {
    margin-left: 75%;
  }
  .bootstrap-ddshop .col-lg-offset-8 {
    margin-left: 66.66666667%;
  }
  .bootstrap-ddshop .col-lg-offset-7 {
    margin-left: 58.33333333%;
  }
  .bootstrap-ddshop .col-lg-offset-6 {
    margin-left: 50%;
  }
  .bootstrap-ddshop .col-lg-offset-5 {
    margin-left: 41.66666667%;
  }
  .bootstrap-ddshop .col-lg-offset-4 {
    margin-left: 33.33333333%;
  }
  .bootstrap-ddshop .col-lg-offset-3 {
    margin-left: 25%;
  }
  .bootstrap-ddshop .col-lg-offset-2 {
    margin-left: 16.66666667%;
  }
  .bootstrap-ddshop .col-lg-offset-1 {
    margin-left: 8.33333333%;
  }
  .bootstrap-ddshop .col-lg-offset-0 {
    margin-left: 0%;
  }
}
.bootstrap-ddshop table {
  background-color: transparent;
}
.bootstrap-ddshop caption {
  padding-top: 8px;
  padding-bottom: 8px;
  color: #777777;
  text-align: left;
}
.bootstrap-ddshop th {
  text-align: left;
}
.bootstrap-ddshop .table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 20px;
}
.bootstrap-ddshop .table > thead > tr > th,
.bootstrap-ddshop .table > tbody > tr > th,
.bootstrap-ddshop .table > tfoot > tr > th,
.bootstrap-ddshop .table > thead > tr > td,
.bootstrap-ddshop .table > tbody > tr > td,
.bootstrap-ddshop .table > tfoot > tr > td {
  padding: 8px;
  line-height: 1.42857143;
  vertical-align: top;
  border-top: 1px solid #dddddd;
}
.bootstrap-ddshop .table > thead > tr > th {
  vertical-align: bottom;
  border-bottom: 2px solid #dddddd;
}
.bootstrap-ddshop .table > caption + thead > tr:first-child > th,
.bootstrap-ddshop .table > colgroup + thead > tr:first-child > th,
.bootstrap-ddshop .table > thead:first-child > tr:first-child > th,
.bootstrap-ddshop .table > caption + thead > tr:first-child > td,
.bootstrap-ddshop .table > colgroup + thead > tr:first-child > td,
.bootstrap-ddshop .table > thead:first-child > tr:first-child > td {
  border-top: 0;
}
.bootstrap-ddshop .table > tbody + tbody {
  border-top: 2px solid #dddddd;
}
.bootstrap-ddshop .table .table {
  background-color: #ffffff;
}
.bootstrap-ddshop .table-condensed > thead > tr > th,
.bootstrap-ddshop .table-condensed > tbody > tr > th,
.bootstrap-ddshop .table-condensed > tfoot > tr > th,
.bootstrap-ddshop .table-condensed > thead > tr > td,
.bootstrap-ddshop .table-condensed > tbody > tr > td,
.bootstrap-ddshop .table-condensed > tfoot > tr > td {
  padding: 5px;
}
.bootstrap-ddshop .table-bordered {
  border: 1px solid #dddddd;
}
.bootstrap-ddshop .table-bordered > thead > tr > th,
.bootstrap-ddshop .table-bordered > tbody > tr > th,
.bootstrap-ddshop .table-bordered > tfoot > tr > th,
.bootstrap-ddshop .table-bordered > thead > tr > td,
.bootstrap-ddshop .table-bordered > tbody > tr > td,
.bootstrap-ddshop .table-bordered > tfoot > tr > td {
  border: 1px solid #dddddd;
}
.bootstrap-ddshop .table-bordered > thead > tr > th,
.bootstrap-ddshop .table-bordered > thead > tr > td {
  border-bottom-width: 2px;
}
.bootstrap-ddshop .table-striped > tbody > tr:nth-of-type(odd) {
  background-color: #f9f9f9;
}
.bootstrap-ddshop .table-hover > tbody > tr:hover {
  background-color: #f5f5f5;
}
.bootstrap-ddshop table col[class*="col-"] {
  position: static;
  float: none;
  display: table-column;
}
.bootstrap-ddshop table td[class*="col-"],
.bootstrap-ddshop table th[class*="col-"] {
  position: static;
  float: none;
  display: table-cell;
}
.bootstrap-ddshop .table > thead > tr > td.active,
.bootstrap-ddshop .table > tbody > tr > td.active,
.bootstrap-ddshop .table > tfoot > tr > td.active,
.bootstrap-ddshop .table > thead > tr > th.active,
.bootstrap-ddshop .table > tbody > tr > th.active,
.bootstrap-ddshop .table > tfoot > tr > th.active,
.bootstrap-ddshop .table > thead > tr.active > td,
.bootstrap-ddshop .table > tbody > tr.active > td,
.bootstrap-ddshop .table > tfoot > tr.active > td,
.bootstrap-ddshop .table > thead > tr.active > th,
.bootstrap-ddshop .table > tbody > tr.active > th,
.bootstrap-ddshop .table > tfoot > tr.active > th {
  background-color: #f5f5f5;
}
.bootstrap-ddshop .table-hover > tbody > tr > td.active:hover,
.bootstrap-ddshop .table-hover > tbody > tr > th.active:hover,
.bootstrap-ddshop .table-hover > tbody > tr.active:hover > td,
.bootstrap-ddshop .table-hover > tbody > tr:hover > .active,
.bootstrap-ddshop .table-hover > tbody > tr.active:hover > th {
  background-color: #e8e8e8;
}
.bootstrap-ddshop .table > thead > tr > td.success,
.bootstrap-ddshop .table > tbody > tr > td.success,
.bootstrap-ddshop .table > tfoot > tr > td.success,
.bootstrap-ddshop .table > thead > tr > th.success,
.bootstrap-ddshop .table > tbody > tr > th.success,
.bootstrap-ddshop .table > tfoot > tr > th.success,
.bootstrap-ddshop .table > thead > tr.success > td,
.bootstrap-ddshop .table > tbody > tr.success > td,
.bootstrap-ddshop .table > tfoot > tr.success > td,
.bootstrap-ddshop .table > thead > tr.success > th,
.bootstrap-ddshop .table > tbody > tr.success > th,
.bootstrap-ddshop .table > tfoot > tr.success > th {
  background-color: #dff0d8;
}
.bootstrap-ddshop .table-hover > tbody > tr > td.success:hover,
.bootstrap-ddshop .table-hover > tbody > tr > th.success:hover,
.bootstrap-ddshop .table-hover > tbody > tr.success:hover > td,
.bootstrap-ddshop .table-hover > tbody > tr:hover > .success,
.bootstrap-ddshop .table-hover > tbody > tr.success:hover > th {
  background-color: #d0e9c6;
}
.bootstrap-ddshop .table > thead > tr > td.info,
.bootstrap-ddshop .table > tbody > tr > td.info,
.bootstrap-ddshop .table > tfoot > tr > td.info,
.bootstrap-ddshop .table > thead > tr > th.info,
.bootstrap-ddshop .table > tbody > tr > th.info,
.bootstrap-ddshop .table > tfoot > tr > th.info,
.bootstrap-ddshop .table > thead > tr.info > td,
.bootstrap-ddshop .table > tbody > tr.info > td,
.bootstrap-ddshop .table > tfoot > tr.info > td,
.bootstrap-ddshop .table > thead > tr.info > th,
.bootstrap-ddshop .table > tbody > tr.info > th,
.bootstrap-ddshop .table > tfoot > tr.info > th {
  background-color: #d9edf7;
}
.bootstrap-ddshop .table-hover > tbody > tr > td.info:hover,
.bootstrap-ddshop .table-hover > tbody > tr > th.info:hover,
.bootstrap-ddshop .table-hover > tbody > tr.info:hover > td,
.bootstrap-ddshop .table-hover > tbody > tr:hover > .info,
.bootstrap-ddshop .table-hover > tbody > tr.info:hover > th {
  background-color: #c4e3f3;
}
.bootstrap-ddshop .table > thead > tr > td.warning,
.bootstrap-ddshop .table > tbody > tr > td.warning,
.bootstrap-ddshop .table > tfoot > tr > td.warning,
.bootstrap-ddshop .table > thead > tr > th.warning,
.bootstrap-ddshop .table > tbody > tr > th.warning,
.bootstrap-ddshop .table > tfoot > tr > th.warning,
.bootstrap-ddshop .table > thead > tr.warning > td,
.bootstrap-ddshop .table > tbody > tr.warning > td,
.bootstrap-ddshop .table > tfoot > tr.warning > td,
.bootstrap-ddshop .table > thead > tr.warning > th,
.bootstrap-ddshop .table > tbody > tr.warning > th,
.bootstrap-ddshop .table > tfoot > tr.warning > th {
  background-color: #fcf8e3;
}
.bootstrap-ddshop .table-hover > tbody > tr > td.warning:hover,
.bootstrap-ddshop .table-hover > tbody > tr > th.warning:hover,
.bootstrap-ddshop .table-hover > tbody > tr.warning:hover > td,
.bootstrap-ddshop .table-hover > tbody > tr:hover > .warning,
.bootstrap-ddshop .table-hover > tbody > tr.warning:hover > th {
  background-color: #faf2cc;
}
.bootstrap-ddshop .table > thead > tr > td.danger,
.bootstrap-ddshop .table > tbody > tr > td.danger,
.bootstrap-ddshop .table > tfoot > tr > td.danger,
.bootstrap-ddshop .table > thead > tr > th.danger,
.bootstrap-ddshop .table > tbody > tr > th.danger,
.bootstrap-ddshop .table > tfoot > tr > th.danger,
.bootstrap-ddshop .table > thead > tr.danger > td,
.bootstrap-ddshop .table > tbody > tr.danger > td,
.bootstrap-ddshop .table > tfoot > tr.danger > td,
.bootstrap-ddshop .table > thead > tr.danger > th,
.bootstrap-ddshop .table > tbody > tr.danger > th,
.bootstrap-ddshop .table > tfoot > tr.danger > th {
  background-color: #f2dede;
}
.bootstrap-ddshop .table-hover > tbody > tr > td.danger:hover,
.bootstrap-ddshop .table-hover > tbody > tr > th.danger:hover,
.bootstrap-ddshop .table-hover > tbody > tr.danger:hover > td,
.bootstrap-ddshop .table-hover > tbody > tr:hover > .danger,
.bootstrap-ddshop .table-hover > tbody > tr.danger:hover > th {
  background-color: #ebcccc;
}
.bootstrap-ddshop .table-responsive {
  overflow-x: auto;
  min-height: 0.01%;
}
@media screen and (max-width: 767px) {
  .bootstrap-ddshop .table-responsive {
    width: 100%;
    margin-bottom: 15px;
    overflow-y: hidden;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    border: 1px solid #dddddd;
  }
  .bootstrap-ddshop .table-responsive > .table {
    margin-bottom: 0;
  }
  .bootstrap-ddshop .table-responsive > .table > thead > tr > th,
  .bootstrap-ddshop .table-responsive > .table > tbody > tr > th,
  .bootstrap-ddshop .table-responsive > .table > tfoot > tr > th,
  .bootstrap-ddshop .table-responsive > .table > thead > tr > td,
  .bootstrap-ddshop .table-responsive > .table > tbody > tr > td,
  .bootstrap-ddshop .table-responsive > .table > tfoot > tr > td {
    white-space: nowrap;
  }
  .bootstrap-ddshop .table-responsive > .table-bordered {
    border: 0;
  }
  .bootstrap-ddshop .table-responsive > .table-bordered > thead > tr > th:first-child,
  .bootstrap-ddshop .table-responsive > .table-bordered > tbody > tr > th:first-child,
  .bootstrap-ddshop .table-responsive > .table-bordered > tfoot > tr > th:first-child,
  .bootstrap-ddshop .table-responsive > .table-bordered > thead > tr > td:first-child,
  .bootstrap-ddshop .table-responsive > .table-bordered > tbody > tr > td:first-child,
  .bootstrap-ddshop .table-responsive > .table-bordered > tfoot > tr > td:first-child {
    border-left: 0;
  }
  .bootstrap-ddshop .table-responsive > .table-bordered > thead > tr > th:last-child,
  .bootstrap-ddshop .table-responsive > .table-bordered > tbody > tr > th:last-child,
  .bootstrap-ddshop .table-responsive > .table-bordered > tfoot > tr > th:last-child,
  .bootstrap-ddshop .table-responsive > .table-bordered > thead > tr > td:last-child,
  .bootstrap-ddshop .table-responsive > .table-bordered > tbody > tr > td:last-child,
  .bootstrap-ddshop .table-responsive > .table-bordered > tfoot > tr > td:last-child {
    border-right: 0;
  }
  .bootstrap-ddshop .table-responsive > .table-bordered > tbody > tr:last-child > th,
  .bootstrap-ddshop .table-responsive > .table-bordered > tfoot > tr:last-child > th,
  .bootstrap-ddshop .table-responsive > .table-bordered > tbody > tr:last-child > td,
  .bootstrap-ddshop .table-responsive > .table-bordered > tfoot > tr:last-child > td {
    border-bottom: 0;
  }
}
.bootstrap-ddshop fieldset {
  padding: 0;
  margin: 0;
  border: 0;
  min-width: 0;
}
.bootstrap-ddshop legend {
  display: block;
  width: 100%;
  padding: 0;
  margin-bottom: 20px;
  font-size: 21px;
  line-height: inherit;
  color: #333333;
  border: 0;
  border-bottom: 1px solid #e5e5e5;
}
.bootstrap-ddshop label {
  display: inline-block;
  max-width: 100%;
  margin-bottom: 5px;
  font-weight: bold;
}
.bootstrap-ddshop input[type="search"] {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.bootstrap-ddshop input[type="radio"],
.bootstrap-ddshop input[type="checkbox"] {
  margin: 4px 0 0;
  margin-top: 1px \9;
  line-height: normal;
}
.bootstrap-ddshop input[type="file"] {
  display: block;
}
.bootstrap-ddshop input[type="range"] {
  display: block;
  width: 100%;
}
.bootstrap-ddshop select[multiple],
.bootstrap-ddshop select[size] {
  height: auto;
}
.bootstrap-ddshop input[type="file"]:focus,
.bootstrap-ddshop input[type="radio"]:focus,
.bootstrap-ddshop input[type="checkbox"]:focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.bootstrap-ddshop output {
  display: block;
  padding-top: 7px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555555;
}
.bootstrap-ddshop .form-control {
  display: block;
  width: 100%;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555555;
  background-color: #ffffff;
  background-image: none;
  border: 1px solid #cccccc;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;
  -o-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
}
.bootstrap-ddshop .form-control:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
}
.bootstrap-ddshop .form-control::-moz-placeholder {
  color: #999999;
  opacity: 1;
}
.bootstrap-ddshop .form-control:-ms-input-placeholder {
  color: #999999;
}
.bootstrap-ddshop .form-control::-webkit-input-placeholder {
  color: #999999;
}
.bootstrap-ddshop .form-control[disabled],
.bootstrap-ddshop .form-control[readonly],
.bootstrap-ddshop fieldset[disabled] .form-control {
  background-color: #eeeeee;
  opacity: 1;
}
.bootstrap-ddshop .form-control[disabled],
.bootstrap-ddshop fieldset[disabled] .form-control {
  cursor: not-allowed;
}
.bootstrap-ddshop textarea.form-control {
  height: auto;
}
.bootstrap-ddshop input[type="search"] {
  -webkit-appearance: none;
}
@media screen and (-webkit-min-device-pixel-ratio: 0) {
  .bootstrap-ddshop input[type="date"],
  .bootstrap-ddshop input[type="time"],
  .bootstrap-ddshop input[type="datetime-local"],
  .bootstrap-ddshop input[type="month"] {
    line-height: 34px;
  }
  .bootstrap-ddshop input[type="date"].input-sm,
  .bootstrap-ddshop input[type="time"].input-sm,
  .bootstrap-ddshop input[type="datetime-local"].input-sm,
  .bootstrap-ddshop input[type="month"].input-sm,
  .bootstrap-ddshop .input-group-sm input[type="date"],
  .bootstrap-ddshop .input-group-sm input[type="time"],
  .bootstrap-ddshop .input-group-sm input[type="datetime-local"],
  .bootstrap-ddshop .input-group-sm input[type="month"] {
    line-height: 30px;
  }
  .bootstrap-ddshop input[type="date"].input-lg,
  .bootstrap-ddshop input[type="time"].input-lg,
  .bootstrap-ddshop input[type="datetime-local"].input-lg,
  .bootstrap-ddshop input[type="month"].input-lg,
  .bootstrap-ddshop .input-group-lg input[type="date"],
  .bootstrap-ddshop .input-group-lg input[type="time"],
  .bootstrap-ddshop .input-group-lg input[type="datetime-local"],
  .bootstrap-ddshop .input-group-lg input[type="month"] {
    line-height: 46px;
  }
}
.bootstrap-ddshop .form-group {
  margin-bottom: 15px;
}
.bootstrap-ddshop .radio,
.bootstrap-ddshop .checkbox {
  position: relative;
  display: block;
  margin-top: 10px;
  margin-bottom: 10px;
}
.bootstrap-ddshop .radio label,
.bootstrap-ddshop .checkbox label {
  min-height: 20px;
  padding-left: 20px;
  margin-bottom: 0;
  font-weight: normal;
  cursor: pointer;
}
.bootstrap-ddshop .radio input[type="radio"],
.bootstrap-ddshop .radio-inline input[type="radio"],
.bootstrap-ddshop .checkbox input[type="checkbox"],
.bootstrap-ddshop .checkbox-inline input[type="checkbox"] {
  position: absolute;
  margin-left: -20px;
  margin-top: 4px \9;
}
.bootstrap-ddshop .radio + .radio,
.bootstrap-ddshop .checkbox + .checkbox {
  margin-top: -5px;
}
.bootstrap-ddshop .radio-inline,
.bootstrap-ddshop .checkbox-inline {
  position: relative;
  display: inline-block;
  padding-left: 20px;
  margin-bottom: 0;
  vertical-align: middle;
  font-weight: normal;
  cursor: pointer;
}
.bootstrap-ddshop .radio-inline + .radio-inline,
.bootstrap-ddshop .checkbox-inline + .checkbox-inline {
  margin-top: 0;
  margin-left: 10px;
}
.bootstrap-ddshop input[type="radio"][disabled],
.bootstrap-ddshop input[type="checkbox"][disabled],
.bootstrap-ddshop input[type="radio"].disabled,
.bootstrap-ddshop input[type="checkbox"].disabled,
.bootstrap-ddshop fieldset[disabled] input[type="radio"],
.bootstrap-ddshop fieldset[disabled] input[type="checkbox"] {
  cursor: not-allowed;
}
.bootstrap-ddshop .radio-inline.disabled,
.bootstrap-ddshop .checkbox-inline.disabled,
.bootstrap-ddshop fieldset[disabled] .radio-inline,
.bootstrap-ddshop fieldset[disabled] .checkbox-inline {
  cursor: not-allowed;
}
.bootstrap-ddshop .radio.disabled label,
.bootstrap-ddshop .checkbox.disabled label,
.bootstrap-ddshop fieldset[disabled] .radio label,
.bootstrap-ddshop fieldset[disabled] .checkbox label {
  cursor: not-allowed;
}
.bootstrap-ddshop .form-control-static {
  padding-top: 7px;
  padding-bottom: 7px;
  margin-bottom: 0;
  min-height: 34px;
}
.bootstrap-ddshop .form-control-static.input-lg,
.bootstrap-ddshop .form-control-static.input-sm {
  padding-left: 0;
  padding-right: 0;
}
.bootstrap-ddshop .input-sm {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
.bootstrap-ddshop select.input-sm {
  height: 30px;
  line-height: 30px;
}
.bootstrap-ddshop textarea.input-sm,
.bootstrap-ddshop select[multiple].input-sm {
  height: auto;
}
.bootstrap-ddshop .form-group-sm .form-control {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
.bootstrap-ddshop select.form-group-sm .form-control {
  height: 30px;
  line-height: 30px;
}
.bootstrap-ddshop textarea.form-group-sm .form-control,
.bootstrap-ddshop select[multiple].form-group-sm .form-control {
  height: auto;
}
.bootstrap-ddshop .form-group-sm .form-control-static {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  min-height: 32px;
}
.bootstrap-ddshop .input-lg {
  height: 46px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333;
  border-radius: 6px;
}
.bootstrap-ddshop select.input-lg {
  height: 46px;
  line-height: 46px;
}
.bootstrap-ddshop textarea.input-lg,
.bootstrap-ddshop select[multiple].input-lg {
  height: auto;
}
.bootstrap-ddshop .form-group-lg .form-control {
  height: 46px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333;
  border-radius: 6px;
}
.bootstrap-ddshop select.form-group-lg .form-control {
  height: 46px;
  line-height: 46px;
}
.bootstrap-ddshop textarea.form-group-lg .form-control,
.bootstrap-ddshop select[multiple].form-group-lg .form-control {
  height: auto;
}
.bootstrap-ddshop .form-group-lg .form-control-static {
  height: 46px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333;
  min-height: 38px;
}
.bootstrap-ddshop .has-feedback {
  position: relative;
}
.bootstrap-ddshop .has-feedback .form-control {
  padding-right: 42.5px;
}
.bootstrap-ddshop .form-control-feedback {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  display: block;
  width: 34px;
  height: 34px;
  line-height: 34px;
  text-align: center;
  pointer-events: none;
}
.bootstrap-ddshop .input-lg + .form-control-feedback {
  width: 46px;
  height: 46px;
  line-height: 46px;
}
.bootstrap-ddshop .input-sm + .form-control-feedback {
  width: 30px;
  height: 30px;
  line-height: 30px;
}
.bootstrap-ddshop .has-success .help-block,
.bootstrap-ddshop .has-success .control-label,
.bootstrap-ddshop .has-success .radio,
.bootstrap-ddshop .has-success .checkbox,
.bootstrap-ddshop .has-success .radio-inline,
.bootstrap-ddshop .has-success .checkbox-inline,
.bootstrap-ddshop .has-success.radio label,
.bootstrap-ddshop .has-success.checkbox label,
.bootstrap-ddshop .has-success.radio-inline label,
.bootstrap-ddshop .has-success.checkbox-inline label {
  color: #3c763d;
}
.bootstrap-ddshop .has-success .form-control {
  border-color: #3c763d;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.bootstrap-ddshop .has-success .form-control:focus {
  border-color: #2b542c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #67b168;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #67b168;
}
.bootstrap-ddshop .has-success .input-group-addon {
  color: #3c763d;
  border-color: #3c763d;
  background-color: #dff0d8;
}
.bootstrap-ddshop .has-success .form-control-feedback {
  color: #3c763d;
}
.bootstrap-ddshop .has-warning .help-block,
.bootstrap-ddshop .has-warning .control-label,
.bootstrap-ddshop .has-warning .radio,
.bootstrap-ddshop .has-warning .checkbox,
.bootstrap-ddshop .has-warning .radio-inline,
.bootstrap-ddshop .has-warning .checkbox-inline,
.bootstrap-ddshop .has-warning.radio label,
.bootstrap-ddshop .has-warning.checkbox label,
.bootstrap-ddshop .has-warning.radio-inline label,
.bootstrap-ddshop .has-warning.checkbox-inline label {
  color: #8a6d3b;
}
.bootstrap-ddshop .has-warning .form-control {
  border-color: #8a6d3b;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.bootstrap-ddshop .has-warning .form-control:focus {
  border-color: #66512c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b;
}
.bootstrap-ddshop .has-warning .input-group-addon {
  color: #8a6d3b;
  border-color: #8a6d3b;
  background-color: #fcf8e3;
}
.bootstrap-ddshop .has-warning .form-control-feedback {
  color: #8a6d3b;
}
.bootstrap-ddshop .has-error .help-block,
.bootstrap-ddshop .has-error .control-label,
.bootstrap-ddshop .has-error .radio,
.bootstrap-ddshop .has-error .checkbox,
.bootstrap-ddshop .has-error .radio-inline,
.bootstrap-ddshop .has-error .checkbox-inline,
.bootstrap-ddshop .has-error.radio label,
.bootstrap-ddshop .has-error.checkbox label,
.bootstrap-ddshop .has-error.radio-inline label,
.bootstrap-ddshop .has-error.checkbox-inline label {
  color: #a94442;
}
.bootstrap-ddshop .has-error .form-control {
  border-color: #a94442;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.bootstrap-ddshop .has-error .form-control:focus {
  border-color: #843534;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
}
.bootstrap-ddshop .has-error .input-group-addon {
  color: #a94442;
  border-color: #a94442;
  background-color: #f2dede;
}
.bootstrap-ddshop .has-error .form-control-feedback {
  color: #a94442;
}
.bootstrap-ddshop .has-feedback label ~ .form-control-feedback {
  top: 25px;
}
.bootstrap-ddshop .has-feedback label.sr-only ~ .form-control-feedback {
  top: 0;
}
.bootstrap-ddshop .help-block {
  display: block;
  margin-top: 5px;
  margin-bottom: 10px;
  color: #737373;
}
@media (min-width: 768px) {
  .bootstrap-ddshop .form-inline .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .bootstrap-ddshop .form-inline .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .bootstrap-ddshop .form-inline .form-control-static {
    display: inline-block;
  }
  .bootstrap-ddshop .form-inline .input-group {
    display: inline-table;
    vertical-align: middle;
  }
  .bootstrap-ddshop .form-inline .input-group .input-group-addon,
  .bootstrap-ddshop .form-inline .input-group .input-group-btn,
  .bootstrap-ddshop .form-inline .input-group .form-control {
    width: auto;
  }
  .bootstrap-ddshop .form-inline .input-group > .form-control {
    width: 100%;
  }
  .bootstrap-ddshop .form-inline .control-label {
    margin-bottom: 0;
    vertical-align: middle;
  }
  .bootstrap-ddshop .form-inline .radio,
  .bootstrap-ddshop .form-inline .checkbox {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .bootstrap-ddshop .form-inline .radio label,
  .bootstrap-ddshop .form-inline .checkbox label {
    padding-left: 0;
  }
  .bootstrap-ddshop .form-inline .radio input[type="radio"],
  .bootstrap-ddshop .form-inline .checkbox input[type="checkbox"] {
    position: relative;
    margin-left: 0;
  }
  .bootstrap-ddshop .form-inline .has-feedback .form-control-feedback {
    top: 0;
  }
}
.bootstrap-ddshop .form-horizontal .radio,
.bootstrap-ddshop .form-horizontal .checkbox,
.bootstrap-ddshop .form-horizontal .radio-inline,
.bootstrap-ddshop .form-horizontal .checkbox-inline {
  margin-top: 0;
  margin-bottom: 0;
  padding-top: 7px;
}
.bootstrap-ddshop .form-horizontal .radio,
.bootstrap-ddshop .form-horizontal .checkbox {
  min-height: 27px;
}
.bootstrap-ddshop .form-horizontal .form-group {
  margin-left: -15px;
  margin-right: -15px;
}
@media (min-width: 768px) {
  .bootstrap-ddshop .form-horizontal .control-label {
    text-align: right;
    margin-bottom: 0;
    padding-top: 7px;
  }
}
.bootstrap-ddshop .form-horizontal .has-feedback .form-control-feedback {
  right: 15px;
}
@media (min-width: 768px) {
  .bootstrap-ddshop .form-horizontal .form-group-lg .control-label {
    padding-top: 14.333333px;
  }
}
@media (min-width: 768px) {
  .bootstrap-ddshop .form-horizontal .form-group-sm .control-label {
    padding-top: 6px;
  }
}
.bootstrap-ddshop .btn {
  display: inline-block;
  margin-bottom: 0;
  font-weight: normal;
  text-align: center;
  vertical-align: middle;
  -ms-touch-action: manipulation;
  touch-action: manipulation;
  cursor: pointer;
  background-image: none;
  border: 1px solid transparent;
  white-space: nowrap;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  border-radius: 4px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.bootstrap-ddshop .btn:focus,
.bootstrap-ddshop .btn:active:focus,
.bootstrap-ddshop .btn.active:focus,
.bootstrap-ddshop .btn.focus,
.bootstrap-ddshop .btn:active.focus,
.bootstrap-ddshop .btn.active.focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.bootstrap-ddshop .btn:hover,
.bootstrap-ddshop .btn:focus,
.bootstrap-ddshop .btn.focus {
  color: #333333;
  text-decoration: none;
}
.bootstrap-ddshop .btn:active,
.bootstrap-ddshop .btn.active {
  outline: 0;
  background-image: none;
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}
.bootstrap-ddshop .btn.disabled,
.bootstrap-ddshop .btn[disabled],
.bootstrap-ddshop fieldset[disabled] .btn {
  cursor: not-allowed;
  pointer-events: none;
  opacity: 0.65;
  filter: alpha(opacity=65);
  -webkit-box-shadow: none;
  box-shadow: none;
}
.bootstrap-ddshop .btn-default {
  color: #333333;
  background-color: #ffffff;
  border-color: #cccccc;
}
.bootstrap-ddshop .btn-default:hover,
.bootstrap-ddshop .btn-default:focus,
.bootstrap-ddshop .btn-default.focus,
.bootstrap-ddshop .btn-default:active,
.bootstrap-ddshop .btn-default.active,
.bootstrap-ddshop .open > .dropdown-toggle.btn-default {
  color: #333333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
.bootstrap-ddshop .btn-default:active,
.bootstrap-ddshop .btn-default.active,
.bootstrap-ddshop .open > .dropdown-toggle.btn-default {
  background-image: none;
}
.bootstrap-ddshop .btn-default.disabled,
.bootstrap-ddshop .btn-default[disabled],
.bootstrap-ddshop fieldset[disabled] .btn-default,
.bootstrap-ddshop .btn-default.disabled:hover,
.bootstrap-ddshop .btn-default[disabled]:hover,
.bootstrap-ddshop fieldset[disabled] .btn-default:hover,
.bootstrap-ddshop .btn-default.disabled:focus,
.bootstrap-ddshop .btn-default[disabled]:focus,
.bootstrap-ddshop fieldset[disabled] .btn-default:focus,
.bootstrap-ddshop .btn-default.disabled.focus,
.bootstrap-ddshop .btn-default[disabled].focus,
.bootstrap-ddshop fieldset[disabled] .btn-default.focus,
.bootstrap-ddshop .btn-default.disabled:active,
.bootstrap-ddshop .btn-default[disabled]:active,
.bootstrap-ddshop fieldset[disabled] .btn-default:active,
.bootstrap-ddshop .btn-default.disabled.active,
.bootstrap-ddshop .btn-default[disabled].active,
.bootstrap-ddshop fieldset[disabled] .btn-default.active {
  background-color: #ffffff;
  border-color: #cccccc;
}
.bootstrap-ddshop .btn-default .badge {
  color: #ffffff;
  background-color: #333333;
}
.bootstrap-ddshop .btn-primary {
  color: #ffffff;
  background-color: #337ab7;
  border-color: #2e6da4;
}
.bootstrap-ddshop .btn-primary:hover,
.bootstrap-ddshop .btn-primary:focus,
.bootstrap-ddshop .btn-primary.focus,
.bootstrap-ddshop .btn-primary:active,
.bootstrap-ddshop .btn-primary.active,
.bootstrap-ddshop .open > .dropdown-toggle.btn-primary {
  color: #ffffff;
  background-color: #286090;
  border-color: #204d74;
}
.bootstrap-ddshop .btn-primary:active,
.bootstrap-ddshop .btn-primary.active,
.bootstrap-ddshop .open > .dropdown-toggle.btn-primary {
  background-image: none;
}
.bootstrap-ddshop .btn-primary.disabled,
.bootstrap-ddshop .btn-primary[disabled],
.bootstrap-ddshop fieldset[disabled] .btn-primary,
.bootstrap-ddshop .btn-primary.disabled:hover,
.bootstrap-ddshop .btn-primary[disabled]:hover,
.bootstrap-ddshop fieldset[disabled] .btn-primary:hover,
.bootstrap-ddshop .btn-primary.disabled:focus,
.bootstrap-ddshop .btn-primary[disabled]:focus,
.bootstrap-ddshop fieldset[disabled] .btn-primary:focus,
.bootstrap-ddshop .btn-primary.disabled.focus,
.bootstrap-ddshop .btn-primary[disabled].focus,
.bootstrap-ddshop fieldset[disabled] .btn-primary.focus,
.bootstrap-ddshop .btn-primary.disabled:active,
.bootstrap-ddshop .btn-primary[disabled]:active,
.bootstrap-ddshop fieldset[disabled] .btn-primary:active,
.bootstrap-ddshop .btn-primary.disabled.active,
.bootstrap-ddshop .btn-primary[disabled].active,
.bootstrap-ddshop fieldset[disabled] .btn-primary.active {
  background-color: #337ab7;
  border-color: #2e6da4;
}
.bootstrap-ddshop .btn-primary .badge {
  color: #337ab7;
  background-color: #ffffff;
}
.bootstrap-ddshop .btn-success {
  color: #ffffff;
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.bootstrap-ddshop .btn-success:hover,
.bootstrap-ddshop .btn-success:focus,
.bootstrap-ddshop .btn-success.focus,
.bootstrap-ddshop .btn-success:active,
.bootstrap-ddshop .btn-success.active,
.bootstrap-ddshop .open > .dropdown-toggle.btn-success {
  color: #ffffff;
  background-color: #449d44;
  border-color: #398439;
}
.bootstrap-ddshop .btn-success:active,
.bootstrap-ddshop .btn-success.active,
.bootstrap-ddshop .open > .dropdown-toggle.btn-success {
  background-image: none;
}
.bootstrap-ddshop .btn-success.disabled,
.bootstrap-ddshop .btn-success[disabled],
.bootstrap-ddshop fieldset[disabled] .btn-success,
.bootstrap-ddshop .btn-success.disabled:hover,
.bootstrap-ddshop .btn-success[disabled]:hover,
.bootstrap-ddshop fieldset[disabled] .btn-success:hover,
.bootstrap-ddshop .btn-success.disabled:focus,
.bootstrap-ddshop .btn-success[disabled]:focus,
.bootstrap-ddshop fieldset[disabled] .btn-success:focus,
.bootstrap-ddshop .btn-success.disabled.focus,
.bootstrap-ddshop .btn-success[disabled].focus,
.bootstrap-ddshop fieldset[disabled] .btn-success.focus,
.bootstrap-ddshop .btn-success.disabled:active,
.bootstrap-ddshop .btn-success[disabled]:active,
.bootstrap-ddshop fieldset[disabled] .btn-success:active,
.bootstrap-ddshop .btn-success.disabled.active,
.bootstrap-ddshop .btn-success[disabled].active,
.bootstrap-ddshop fieldset[disabled] .btn-success.active {
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.bootstrap-ddshop .btn-success .badge {
  color: #5cb85c;
  background-color: #ffffff;
}
.bootstrap-ddshop .btn-info {
  color: #ffffff;
  background-color: #5bc0de;
  border-color: #46b8da;
}
.bootstrap-ddshop .btn-info:hover,
.bootstrap-ddshop .btn-info:focus,
.bootstrap-ddshop .btn-info.focus,
.bootstrap-ddshop .btn-info:active,
.bootstrap-ddshop .btn-info.active,
.bootstrap-ddshop .open > .dropdown-toggle.btn-info {
  color: #ffffff;
  background-color: #31b0d5;
  border-color: #269abc;
}
.bootstrap-ddshop .btn-info:active,
.bootstrap-ddshop .btn-info.active,
.bootstrap-ddshop .open > .dropdown-toggle.btn-info {
  background-image: none;
}
.bootstrap-ddshop .btn-info.disabled,
.bootstrap-ddshop .btn-info[disabled],
.bootstrap-ddshop fieldset[disabled] .btn-info,
.bootstrap-ddshop .btn-info.disabled:hover,
.bootstrap-ddshop .btn-info[disabled]:hover,
.bootstrap-ddshop fieldset[disabled] .btn-info:hover,
.bootstrap-ddshop .btn-info.disabled:focus,
.bootstrap-ddshop .btn-info[disabled]:focus,
.bootstrap-ddshop fieldset[disabled] .btn-info:focus,
.bootstrap-ddshop .btn-info.disabled.focus,
.bootstrap-ddshop .btn-info[disabled].focus,
.bootstrap-ddshop fieldset[disabled] .btn-info.focus,
.bootstrap-ddshop .btn-info.disabled:active,
.bootstrap-ddshop .btn-info[disabled]:active,
.bootstrap-ddshop fieldset[disabled] .btn-info:active,
.bootstrap-ddshop .btn-info.disabled.active,
.bootstrap-ddshop .btn-info[disabled].active,
.bootstrap-ddshop fieldset[disabled] .btn-info.active {
  background-color: #5bc0de;
  border-color: #46b8da;
}
.bootstrap-ddshop .btn-info .badge {
  color: #5bc0de;
  background-color: #ffffff;
}
.bootstrap-ddshop .btn-warning {
  color: #ffffff;
  background-color: #f0ad4e;
  border-color: #eea236;
}
.bootstrap-ddshop .btn-warning:hover,
.bootstrap-ddshop .btn-warning:focus,
.bootstrap-ddshop .btn-warning.focus,
.bootstrap-ddshop .btn-warning:active,
.bootstrap-ddshop .btn-warning.active,
.bootstrap-ddshop .open > .dropdown-toggle.btn-warning {
  color: #ffffff;
  background-color: #ec971f;
  border-color: #d58512;
}
.bootstrap-ddshop .btn-warning:active,
.bootstrap-ddshop .btn-warning.active,
.bootstrap-ddshop .open > .dropdown-toggle.btn-warning {
  background-image: none;
}
.bootstrap-ddshop .btn-warning.disabled,
.bootstrap-ddshop .btn-warning[disabled],
.bootstrap-ddshop fieldset[disabled] .btn-warning,
.bootstrap-ddshop .btn-warning.disabled:hover,
.bootstrap-ddshop .btn-warning[disabled]:hover,
.bootstrap-ddshop fieldset[disabled] .btn-warning:hover,
.bootstrap-ddshop .btn-warning.disabled:focus,
.bootstrap-ddshop .btn-warning[disabled]:focus,
.bootstrap-ddshop fieldset[disabled] .btn-warning:focus,
.bootstrap-ddshop .btn-warning.disabled.focus,
.bootstrap-ddshop .btn-warning[disabled].focus,
.bootstrap-ddshop fieldset[disabled] .btn-warning.focus,
.bootstrap-ddshop .btn-warning.disabled:active,
.bootstrap-ddshop .btn-warning[disabled]:active,
.bootstrap-ddshop fieldset[disabled] .btn-warning:active,
.bootstrap-ddshop .btn-warning.disabled.active,
.bootstrap-ddshop .btn-warning[disabled].active,
.bootstrap-ddshop fieldset[disabled] .btn-warning.active {
  background-color: #f0ad4e;
  border-color: #eea236;
}
.bootstrap-ddshop .btn-warning .badge {
  color: #f0ad4e;
  background-color: #ffffff;
}
.bootstrap-ddshop .btn-danger {
  color: #ffffff;
  background-color: #d9534f;
  border-color: #d43f3a;
}
.bootstrap-ddshop .btn-danger:hover,
.bootstrap-ddshop .btn-danger:focus,
.bootstrap-ddshop .btn-danger.focus,
.bootstrap-ddshop .btn-danger:active,
.bootstrap-ddshop .btn-danger.active,
.bootstrap-ddshop .open > .dropdown-toggle.btn-danger {
  color: #ffffff;
  background-color: #c9302c;
  border-color: #ac2925;
}
.bootstrap-ddshop .btn-danger:active,
.bootstrap-ddshop .btn-danger.active,
.bootstrap-ddshop .open > .dropdown-toggle.btn-danger {
  background-image: none;
}
.bootstrap-ddshop .btn-danger.disabled,
.bootstrap-ddshop .btn-danger[disabled],
.bootstrap-ddshop fieldset[disabled] .btn-danger,
.bootstrap-ddshop .btn-danger.disabled:hover,
.bootstrap-ddshop .btn-danger[disabled]:hover,
.bootstrap-ddshop fieldset[disabled] .btn-danger:hover,
.bootstrap-ddshop .btn-danger.disabled:focus,
.bootstrap-ddshop .btn-danger[disabled]:focus,
.bootstrap-ddshop fieldset[disabled] .btn-danger:focus,
.bootstrap-ddshop .btn-danger.disabled.focus,
.bootstrap-ddshop .btn-danger[disabled].focus,
.bootstrap-ddshop fieldset[disabled] .btn-danger.focus,
.bootstrap-ddshop .btn-danger.disabled:active,
.bootstrap-ddshop .btn-danger[disabled]:active,
.bootstrap-ddshop fieldset[disabled] .btn-danger:active,
.bootstrap-ddshop .btn-danger.disabled.active,
.bootstrap-ddshop .btn-danger[disabled].active,
.bootstrap-ddshop fieldset[disabled] .btn-danger.active {
  background-color: #d9534f;
  border-color: #d43f3a;
}
.bootstrap-ddshop .btn-danger .badge {
  color: #d9534f;
  background-color: #ffffff;
}
.bootstrap-ddshop .btn-link {
  color: #337ab7;
  font-weight: normal;
  border-radius: 0;
}
.bootstrap-ddshop .btn-link,
.bootstrap-ddshop .btn-link:active,
.bootstrap-ddshop .btn-link.active,
.bootstrap-ddshop .btn-link[disabled],
.bootstrap-ddshop fieldset[disabled] .btn-link {
  background-color: transparent;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.bootstrap-ddshop .btn-link,
.bootstrap-ddshop .btn-link:hover,
.bootstrap-ddshop .btn-link:focus,
.bootstrap-ddshop .btn-link:active {
  border-color: transparent;
}
.bootstrap-ddshop .btn-link:hover,
.bootstrap-ddshop .btn-link:focus {
  color: #23527c;
  text-decoration: underline;
  background-color: transparent;
}
.bootstrap-ddshop .btn-link[disabled]:hover,
.bootstrap-ddshop fieldset[disabled] .btn-link:hover,
.bootstrap-ddshop .btn-link[disabled]:focus,
.bootstrap-ddshop fieldset[disabled] .btn-link:focus {
  color: #777777;
  text-decoration: none;
}
.bootstrap-ddshop .btn-lg,
.bootstrap-ddshop .btn-group-lg > .btn {
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333;
  border-radius: 6px;
}
.bootstrap-ddshop .btn-sm,
.bootstrap-ddshop .btn-group-sm > .btn {
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
.bootstrap-ddshop .btn-xs,
.bootstrap-ddshop .btn-group-xs > .btn {
  padding: 1px 5px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
.bootstrap-ddshop .btn-block {
  display: block;
  width: 100%;
}
.bootstrap-ddshop .btn-block + .btn-block {
  margin-top: 5px;
}
.bootstrap-ddshop input[type="submit"].btn-block,
.bootstrap-ddshop input[type="reset"].btn-block,
.bootstrap-ddshop input[type="button"].btn-block {
  width: 100%;
}
.bootstrap-ddshop .fade {
  opacity: 0;
  -webkit-transition: opacity 0.15s linear;
  -o-transition: opacity 0.15s linear;
  transition: opacity 0.15s linear;
}
.bootstrap-ddshop .fade.in {
  opacity: 1;
}
.bootstrap-ddshop .collapse {
  display: none;
}
.bootstrap-ddshop .collapse.in {
  display: block;
}
.bootstrap-ddshop tr.collapse.in {
  display: table-row;
}
.bootstrap-ddshop tbody.collapse.in {
  display: table-row-group;
}
.bootstrap-ddshop .collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  -webkit-transition-property: height, visibility;
  -o-transition-property: height, visibility;
  transition-property: height, visibility;
  -webkit-transition-duration: 0.35s;
  -o-transition-duration: 0.35s;
  transition-duration: 0.35s;
  -webkit-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
}
.bootstrap-ddshop .caret {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 2px;
  vertical-align: middle;
  border-top: 4px dashed;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
}
.bootstrap-ddshop .dropup,
.bootstrap-ddshop .dropdown {
  position: relative;
}
.bootstrap-ddshop .dropdown-toggle:focus {
  outline: 0;
}
.bootstrap-ddshop .dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0;
  list-style: none;
  font-size: 14px;
  text-align: left;
  background-color: #ffffff;
  border: 1px solid #cccccc;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 4px;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
}
.bootstrap-ddshop .dropdown-menu.pull-right {
  right: 0;
  left: auto;
}
.bootstrap-ddshop .dropdown-menu .divider {
  height: 1px;
  margin: 9px 0;
  overflow: hidden;
  background-color: #e5e5e5;
}
.bootstrap-ddshop .dropdown-menu > li > a {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: normal;
  line-height: 1.42857143;
  color: #333333;
  white-space: nowrap;
}
.bootstrap-ddshop .dropdown-menu > li > a:hover,
.bootstrap-ddshop .dropdown-menu > li > a:focus {
  text-decoration: none;
  color: #262626;
  background-color: #f5f5f5;
}
.bootstrap-ddshop .dropdown-menu > .active > a,
.bootstrap-ddshop .dropdown-menu > .active > a:hover,
.bootstrap-ddshop .dropdown-menu > .active > a:focus {
  color: #ffffff;
  text-decoration: none;
  outline: 0;
  background-color: #337ab7;
}
.bootstrap-ddshop .dropdown-menu > .disabled > a,
.bootstrap-ddshop .dropdown-menu > .disabled > a:hover,
.bootstrap-ddshop .dropdown-menu > .disabled > a:focus {
  color: #777777;
}
.bootstrap-ddshop .dropdown-menu > .disabled > a:hover,
.bootstrap-ddshop .dropdown-menu > .disabled > a:focus {
  text-decoration: none;
  background-color: transparent;
  background-image: none;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
  cursor: not-allowed;
}
.bootstrap-ddshop .open > .dropdown-menu {
  display: block;
}
.bootstrap-ddshop .open > a {
  outline: 0;
}
.bootstrap-ddshop .dropdown-menu-right {
  left: auto;
  right: 0;
}
.bootstrap-ddshop .dropdown-menu-left {
  left: 0;
  right: auto;
}
.bootstrap-ddshop .dropdown-header {
  display: block;
  padding: 3px 20px;
  font-size: 12px;
  line-height: 1.42857143;
  color: #777777;
  white-space: nowrap;
}
.bootstrap-ddshop .dropdown-backdrop {
  position: fixed;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  z-index: 990;
}
.bootstrap-ddshop .pull-right > .dropdown-menu {
  right: 0;
  left: auto;
}
.bootstrap-ddshop .dropup .caret,
.bootstrap-ddshop .navbar-fixed-bottom .dropdown .caret {
  border-top: 0;
  border-bottom: 4px solid;
  content: "";
}
.bootstrap-ddshop .dropup .dropdown-menu,
.bootstrap-ddshop .navbar-fixed-bottom .dropdown .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-bottom: 2px;
}
@media (min-width: 768px) {
  .bootstrap-ddshop .navbar-right .dropdown-menu {
    left: auto;
    right: 0;
  }
  .bootstrap-ddshop .navbar-right .dropdown-menu-left {
    left: 0;
    right: auto;
  }
}
.bootstrap-ddshop .btn-group,
.bootstrap-ddshop .btn-group-vertical {
  position: relative;
  display: inline-block;
  vertical-align: middle;
}
.bootstrap-ddshop .btn-group > .btn,
.bootstrap-ddshop .btn-group-vertical > .btn {
  position: relative;
  float: left;
}
.bootstrap-ddshop .btn-group > .btn:hover,
.bootstrap-ddshop .btn-group-vertical > .btn:hover,
.bootstrap-ddshop .btn-group > .btn:focus,
.bootstrap-ddshop .btn-group-vertical > .btn:focus,
.bootstrap-ddshop .btn-group > .btn:active,
.bootstrap-ddshop .btn-group-vertical > .btn:active,
.bootstrap-ddshop .btn-group > .btn.active,
.bootstrap-ddshop .btn-group-vertical > .btn.active {
  z-index: 2;
}
.bootstrap-ddshop .btn-group .btn + .btn,
.bootstrap-ddshop .btn-group .btn + .btn-group,
.bootstrap-ddshop .btn-group .btn-group + .btn,
.bootstrap-ddshop .btn-group .btn-group + .btn-group {
  margin-left: -1px;
}
.bootstrap-ddshop .btn-toolbar {
  margin-left: -5px;
}
.bootstrap-ddshop .btn-toolbar .btn-group,
.bootstrap-ddshop .btn-toolbar .input-group {
  float: left;
}
.bootstrap-ddshop .btn-toolbar > .btn,
.bootstrap-ddshop .btn-toolbar > .btn-group,
.bootstrap-ddshop .btn-toolbar > .input-group {
  margin-left: 5px;
}
.bootstrap-ddshop .btn-group > .btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
  border-radius: 0;
}
.bootstrap-ddshop .btn-group > .btn:first-child {
  margin-left: 0;
}
.bootstrap-ddshop .btn-group > .btn:first-child:not(:last-child):not(.dropdown-toggle) {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}
.bootstrap-ddshop .btn-group > .btn:last-child:not(:first-child),
.bootstrap-ddshop .btn-group > .dropdown-toggle:not(:first-child) {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.bootstrap-ddshop .btn-group > .btn-group {
  float: left;
}
.bootstrap-ddshop .btn-group > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.bootstrap-ddshop .btn-group > .btn-group:first-child:not(:last-child) > .btn:last-child,
.bootstrap-ddshop .btn-group > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}
.bootstrap-ddshop .btn-group > .btn-group:last-child:not(:first-child) > .btn:first-child {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.bootstrap-ddshop .btn-group .dropdown-toggle:active,
.bootstrap-ddshop .btn-group.open .dropdown-toggle {
  outline: 0;
}
.bootstrap-ddshop .btn-group > .btn + .dropdown-toggle {
  padding-left: 8px;
  padding-right: 8px;
}
.bootstrap-ddshop .btn-group > .btn-lg + .dropdown-toggle {
  padding-left: 12px;
  padding-right: 12px;
}
.bootstrap-ddshop .btn-group.open .dropdown-toggle {
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}
.bootstrap-ddshop .btn-group.open .dropdown-toggle.btn-link {
  -webkit-box-shadow: none;
  box-shadow: none;
}
.bootstrap-ddshop .btn .caret {
  margin-left: 0;
}
.bootstrap-ddshop .btn-lg .caret {
  border-width: 5px 5px 0;
  border-bottom-width: 0;
}
.bootstrap-ddshop .dropup .btn-lg .caret {
  border-width: 0 5px 5px;
}
.bootstrap-ddshop .btn-group-vertical > .btn,
.bootstrap-ddshop .btn-group-vertical > .btn-group,
.bootstrap-ddshop .btn-group-vertical > .btn-group > .btn {
  display: block;
  float: none;
  width: 100%;
  max-width: 100%;
}
.bootstrap-ddshop .btn-group-vertical > .btn-group > .btn {
  float: none;
}
.bootstrap-ddshop .btn-group-vertical > .btn + .btn,
.bootstrap-ddshop .btn-group-vertical > .btn + .btn-group,
.bootstrap-ddshop .btn-group-vertical > .btn-group + .btn,
.bootstrap-ddshop .btn-group-vertical > .btn-group + .btn-group {
  margin-top: -1px;
  margin-left: 0;
}
.bootstrap-ddshop .btn-group-vertical > .btn:not(:first-child):not(:last-child) {
  border-radius: 0;
}
.bootstrap-ddshop .btn-group-vertical > .btn:first-child:not(:last-child) {
  border-top-right-radius: 4px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.bootstrap-ddshop .btn-group-vertical > .btn:last-child:not(:first-child) {
  border-bottom-left-radius: 4px;
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.bootstrap-ddshop .btn-group-vertical > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.bootstrap-ddshop .btn-group-vertical > .btn-group:first-child:not(:last-child) > .btn:last-child,
.bootstrap-ddshop .btn-group-vertical > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.bootstrap-ddshop .btn-group-vertical > .btn-group:last-child:not(:first-child) > .btn:first-child {
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.bootstrap-ddshop .btn-group-justified {
  display: table;
  width: 100%;
  table-layout: fixed;
  border-collapse: separate;
}
.bootstrap-ddshop .btn-group-justified > .btn,
.bootstrap-ddshop .btn-group-justified > .btn-group {
  float: none;
  display: table-cell;
  width: 1%;
}
.bootstrap-ddshop .btn-group-justified > .btn-group .btn {
  width: 100%;
}
.bootstrap-ddshop .btn-group-justified > .btn-group .dropdown-menu {
  left: auto;
}
.bootstrap-ddshop [data-toggle="buttons"] > .btn input[type="radio"],
.bootstrap-ddshop [data-toggle="buttons"] > .btn-group > .btn input[type="radio"],
.bootstrap-ddshop [data-toggle="buttons"] > .btn input[type="checkbox"],
.bootstrap-ddshop [data-toggle="buttons"] > .btn-group > .btn input[type="checkbox"] {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}
.bootstrap-ddshop .input-group {
  position: relative;
  display: table;
  border-collapse: separate;
}
.bootstrap-ddshop .input-group[class*="col-"] {
  float: none;
  padding-left: 0;
  padding-right: 0;
}
.bootstrap-ddshop .input-group .form-control {
  position: relative;
  z-index: 2;
  float: left;
  width: 100%;
  margin-bottom: 0;
}
.bootstrap-ddshop .input-group-lg > .form-control,
.bootstrap-ddshop .input-group-lg > .input-group-addon,
.bootstrap-ddshop .input-group-lg > .input-group-btn > .btn {
  height: 46px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333;
  border-radius: 6px;
}
.bootstrap-ddshop select.input-group-lg > .form-control,
.bootstrap-ddshop select.input-group-lg > .input-group-addon,
.bootstrap-ddshop select.input-group-lg > .input-group-btn > .btn {
  height: 46px;
  line-height: 46px;
}
.bootstrap-ddshop textarea.input-group-lg > .form-control,
.bootstrap-ddshop textarea.input-group-lg > .input-group-addon,
.bootstrap-ddshop textarea.input-group-lg > .input-group-btn > .btn,
.bootstrap-ddshop select[multiple].input-group-lg > .form-control,
.bootstrap-ddshop select[multiple].input-group-lg > .input-group-addon,
.bootstrap-ddshop select[multiple].input-group-lg > .input-group-btn > .btn {
  height: auto;
}
.bootstrap-ddshop .input-group-sm > .form-control,
.bootstrap-ddshop .input-group-sm > .input-group-addon,
.bootstrap-ddshop .input-group-sm > .input-group-btn > .btn {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
.bootstrap-ddshop select.input-group-sm > .form-control,
.bootstrap-ddshop select.input-group-sm > .input-group-addon,
.bootstrap-ddshop select.input-group-sm > .input-group-btn > .btn {
  height: 30px;
  line-height: 30px;
}
.bootstrap-ddshop textarea.input-group-sm > .form-control,
.bootstrap-ddshop textarea.input-group-sm > .input-group-addon,
.bootstrap-ddshop textarea.input-group-sm > .input-group-btn > .btn,
.bootstrap-ddshop select[multiple].input-group-sm > .form-control,
.bootstrap-ddshop select[multiple].input-group-sm > .input-group-addon,
.bootstrap-ddshop select[multiple].input-group-sm > .input-group-btn > .btn {
  height: auto;
}
.bootstrap-ddshop .input-group-addon,
.bootstrap-ddshop .input-group-btn,
.bootstrap-ddshop .input-group .form-control {
  display: table-cell;
}
.bootstrap-ddshop .input-group-addon:not(:first-child):not(:last-child),
.bootstrap-ddshop .input-group-btn:not(:first-child):not(:last-child),
.bootstrap-ddshop .input-group .form-control:not(:first-child):not(:last-child) {
  border-radius: 0;
}
.bootstrap-ddshop .input-group-addon,
.bootstrap-ddshop .input-group-btn {
  width: 1%;
  white-space: nowrap;
  vertical-align: middle;
}
.bootstrap-ddshop .input-group-addon {
  padding: 6px 12px;
  font-size: 14px;
  font-weight: normal;
  line-height: 1;
  color: #555555;
  text-align: center;
  background-color: #eeeeee;
  border: 1px solid #cccccc;
  border-radius: 4px;
}
.bootstrap-ddshop .input-group-addon.input-sm {
  padding: 5px 10px;
  font-size: 12px;
  border-radius: 3px;
}
.bootstrap-ddshop .input-group-addon.input-lg {
  padding: 10px 16px;
  font-size: 18px;
  border-radius: 6px;
}
.bootstrap-ddshop .input-group-addon input[type="radio"],
.bootstrap-ddshop .input-group-addon input[type="checkbox"] {
  margin-top: 0;
}
.bootstrap-ddshop .input-group .form-control:first-child,
.bootstrap-ddshop .input-group-addon:first-child,
.bootstrap-ddshop .input-group-btn:first-child > .btn,
.bootstrap-ddshop .input-group-btn:first-child > .btn-group > .btn,
.bootstrap-ddshop .input-group-btn:first-child > .dropdown-toggle,
.bootstrap-ddshop .input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.bootstrap-ddshop .input-group-btn:last-child > .btn-group:not(:last-child) > .btn {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}
.bootstrap-ddshop .input-group-addon:first-child {
  border-right: 0;
}
.bootstrap-ddshop .input-group .form-control:last-child,
.bootstrap-ddshop .input-group-addon:last-child,
.bootstrap-ddshop .input-group-btn:last-child > .btn,
.bootstrap-ddshop .input-group-btn:last-child > .btn-group > .btn,
.bootstrap-ddshop .input-group-btn:last-child > .dropdown-toggle,
.bootstrap-ddshop .input-group-btn:first-child > .btn:not(:first-child),
.bootstrap-ddshop .input-group-btn:first-child > .btn-group:not(:first-child) > .btn {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.bootstrap-ddshop .input-group-addon:last-child {
  border-left: 0;
}
.bootstrap-ddshop .input-group-btn {
  position: relative;
  font-size: 0;
  white-space: nowrap;
}
.bootstrap-ddshop .input-group-btn > .btn {
  position: relative;
}
.bootstrap-ddshop .input-group-btn > .btn + .btn {
  margin-left: -1px;
}
.bootstrap-ddshop .input-group-btn > .btn:hover,
.bootstrap-ddshop .input-group-btn > .btn:focus,
.bootstrap-ddshop .input-group-btn > .btn:active {
  z-index: 2;
}
.bootstrap-ddshop .input-group-btn:first-child > .btn,
.bootstrap-ddshop .input-group-btn:first-child > .btn-group {
  margin-right: -1px;
}
.bootstrap-ddshop .input-group-btn:last-child > .btn,
.bootstrap-ddshop .input-group-btn:last-child > .btn-group {
  margin-left: -1px;
}
.bootstrap-ddshop .nav {
  margin-bottom: 0;
  padding-left: 0;
  list-style: none;
}
.bootstrap-ddshop .nav > li {
  position: relative;
  display: block;
}
.bootstrap-ddshop .nav > li > a {
  position: relative;
  display: block;
  padding: 10px 15px;
}
.bootstrap-ddshop .nav > li > a:hover,
.bootstrap-ddshop .nav > li > a:focus {
  text-decoration: none;
  background-color: #eeeeee;
}
.bootstrap-ddshop .nav > li.disabled > a {
  color: #777777;
}
.bootstrap-ddshop .nav > li.disabled > a:hover,
.bootstrap-ddshop .nav > li.disabled > a:focus {
  color: #777777;
  text-decoration: none;
  background-color: transparent;
  cursor: not-allowed;
}
.bootstrap-ddshop .nav .open > a,
.bootstrap-ddshop .nav .open > a:hover,
.bootstrap-ddshop .nav .open > a:focus {
  background-color: #eeeeee;
  border-color: #337ab7;
}
.bootstrap-ddshop .nav .nav-divider {
  height: 1px;
  margin: 9px 0;
  overflow: hidden;
  background-color: #e5e5e5;
}
.bootstrap-ddshop .nav > li > a > img {
  max-width: none;
}
.bootstrap-ddshop .nav-tabs {
  border-bottom: 1px solid #dddddd;
}
.bootstrap-ddshop .nav-tabs > li {
  float: left;
  margin-bottom: -1px;
}
.bootstrap-ddshop .nav-tabs > li > a {
  margin-right: 2px;
  line-height: 1.42857143;
  border: 1px solid transparent;
  border-radius: 4px 4px 0 0;
}
.bootstrap-ddshop .nav-tabs > li > a:hover {
  border-color: #eeeeee #eeeeee #dddddd;
}
.bootstrap-ddshop .nav-tabs > li.active > a,
.bootstrap-ddshop .nav-tabs > li.active > a:hover,
.bootstrap-ddshop .nav-tabs > li.active > a:focus {
  color: #555555;
  background-color: #ffffff;
  border: 1px solid #dddddd;
  border-bottom-color: transparent;
  cursor: default;
}
.bootstrap-ddshop .nav-tabs.nav-justified {
  width: 100%;
  border-bottom: 0;
}
.bootstrap-ddshop .nav-tabs.nav-justified > li {
  float: none;
}
.bootstrap-ddshop .nav-tabs.nav-justified > li > a {
  text-align: center;
  margin-bottom: 5px;
}
.bootstrap-ddshop .nav-tabs.nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto;
}
@media (min-width: 768px) {
  .bootstrap-ddshop .nav-tabs.nav-justified > li {
    display: table-cell;
    width: 1%;
  }
  .bootstrap-ddshop .nav-tabs.nav-justified > li > a {
    margin-bottom: 0;
  }
}
.bootstrap-ddshop .nav-tabs.nav-justified > li > a {
  margin-right: 0;
  border-radius: 4px;
}
.bootstrap-ddshop .nav-tabs.nav-justified > .active > a,
.bootstrap-ddshop .nav-tabs.nav-justified > .active > a:hover,
.bootstrap-ddshop .nav-tabs.nav-justified > .active > a:focus {
  border: 1px solid #dddddd;
}
@media (min-width: 768px) {
  .bootstrap-ddshop .nav-tabs.nav-justified > li > a {
    border-bottom: 1px solid #dddddd;
    border-radius: 4px 4px 0 0;
  }
  .bootstrap-ddshop .nav-tabs.nav-justified > .active > a,
  .bootstrap-ddshop .nav-tabs.nav-justified > .active > a:hover,
  .bootstrap-ddshop .nav-tabs.nav-justified > .active > a:focus {
    border-bottom-color: #ffffff;
  }
}
.bootstrap-ddshop .nav-pills > li {
  float: left;
}
.bootstrap-ddshop .nav-pills > li > a {
  border-radius: 4px;
}
.bootstrap-ddshop .nav-pills > li + li {
  margin-left: 2px;
}
.bootstrap-ddshop .nav-pills > li.active > a,
.bootstrap-ddshop .nav-pills > li.active > a:hover,
.bootstrap-ddshop .nav-pills > li.active > a:focus {
  color: #ffffff;
  background-color: #337ab7;
}
.bootstrap-ddshop .nav-stacked > li {
  float: none;
}
.bootstrap-ddshop .nav-stacked > li + li {
  margin-top: 2px;
  margin-left: 0;
}
.bootstrap-ddshop .nav-justified {
  width: 100%;
}
.bootstrap-ddshop .nav-justified > li {
  float: none;
}
.bootstrap-ddshop .nav-justified > li > a {
  text-align: center;
  margin-bottom: 5px;
}
.bootstrap-ddshop .nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto;
}
@media (min-width: 768px) {
  .bootstrap-ddshop .nav-justified > li {
    display: table-cell;
    width: 1%;
  }
  .bootstrap-ddshop .nav-justified > li > a {
    margin-bottom: 0;
  }
}
.bootstrap-ddshop .nav-tabs-justified {
  border-bottom: 0;
}
.bootstrap-ddshop .nav-tabs-justified > li > a {
  margin-right: 0;
  border-radius: 4px;
}
.bootstrap-ddshop .nav-tabs-justified > .active > a,
.bootstrap-ddshop .nav-tabs-justified > .active > a:hover,
.bootstrap-ddshop .nav-tabs-justified > .active > a:focus {
  border: 1px solid #dddddd;
}
@media (min-width: 768px) {
  .bootstrap-ddshop .nav-tabs-justified > li > a {
    border-bottom: 1px solid #dddddd;
    border-radius: 4px 4px 0 0;
  }
  .bootstrap-ddshop .nav-tabs-justified > .active > a,
  .bootstrap-ddshop .nav-tabs-justified > .active > a:hover,
  .bootstrap-ddshop .nav-tabs-justified > .active > a:focus {
    border-bottom-color: #ffffff;
  }
}
.bootstrap-ddshop .tab-content > .tab-pane {
  display: none;
}
.bootstrap-ddshop .tab-content > .active {
  display: block;
}
.bootstrap-ddshop .nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.bootstrap-ddshop .navbar {
  position: relative;
  min-height: 50px;
  margin-bottom: 20px;
  border: 1px solid transparent;
}
@media (min-width: 768px) {
  .bootstrap-ddshop .navbar {
    border-radius: 4px;
  }
}
@media (min-width: 768px) {
  .bootstrap-ddshop .navbar-header {
    float: left;
  }
}
.bootstrap-ddshop .navbar-collapse {
  overflow-x: visible;
  padding-right: 15px;
  padding-left: 15px;
  border-top: 1px solid transparent;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
  -webkit-overflow-scrolling: touch;
}
.bootstrap-ddshop .navbar-collapse.in {
  overflow-y: auto;
}
@media (min-width: 768px) {
  .bootstrap-ddshop .navbar-collapse {
    width: auto;
    border-top: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
  }
  .bootstrap-ddshop .navbar-collapse.collapse {
    display: block !important;
    height: auto !important;
    padding-bottom: 0;
    overflow: visible !important;
  }
  .bootstrap-ddshop .navbar-collapse.in {
    overflow-y: visible;
  }
  .bootstrap-ddshop .navbar-fixed-top .navbar-collapse,
  .bootstrap-ddshop .navbar-static-top .navbar-collapse,
  .bootstrap-ddshop .navbar-fixed-bottom .navbar-collapse {
    padding-left: 0;
    padding-right: 0;
  }
}
.bootstrap-ddshop .navbar-fixed-top .navbar-collapse,
.bootstrap-ddshop .navbar-fixed-bottom .navbar-collapse {
  max-height: 340px;
}
@media (max-device-width: 480px) and (orientation: landscape) {
  .bootstrap-ddshop .navbar-fixed-top .navbar-collapse,
  .bootstrap-ddshop .navbar-fixed-bottom .navbar-collapse {
    max-height: 200px;
  }
}
.bootstrap-ddshop .container > .navbar-header,
.bootstrap-ddshop .container-fluid > .navbar-header,
.bootstrap-ddshop .container > .navbar-collapse,
.bootstrap-ddshop .container-fluid > .navbar-collapse {
  margin-right: -15px;
  margin-left: -15px;
}
@media (min-width: 768px) {
  .bootstrap-ddshop .container > .navbar-header,
  .bootstrap-ddshop .container-fluid > .navbar-header,
  .bootstrap-ddshop .container > .navbar-collapse,
  .bootstrap-ddshop .container-fluid > .navbar-collapse {
    margin-right: 0;
    margin-left: 0;
  }
}
.bootstrap-ddshop .navbar-static-top {
  z-index: 1000;
  border-width: 0 0 1px;
}
@media (min-width: 768px) {
  .bootstrap-ddshop .navbar-static-top {
    border-radius: 0;
  }
}
.bootstrap-ddshop .navbar-fixed-top,
.bootstrap-ddshop .navbar-fixed-bottom {
  position: fixed;
  right: 0;
  left: 0;
  z-index: 1030;
}
@media (min-width: 768px) {
  .bootstrap-ddshop .navbar-fixed-top,
  .bootstrap-ddshop .navbar-fixed-bottom {
    border-radius: 0;
  }
}
.bootstrap-ddshop .navbar-fixed-top {
  top: 0;
  border-width: 0 0 1px;
}
.bootstrap-ddshop .navbar-fixed-bottom {
  bottom: 0;
  margin-bottom: 0;
  border-width: 1px 0 0;
}
.bootstrap-ddshop .navbar-brand {
  float: left;
  padding: 15px 15px;
  font-size: 18px;
  line-height: 20px;
  height: 50px;
}
.bootstrap-ddshop .navbar-brand:hover,
.bootstrap-ddshop .navbar-brand:focus {
  text-decoration: none;
}
.bootstrap-ddshop .navbar-brand > img {
  display: block;
}
@media (min-width: 768px) {
  .bootstrap-ddshop .navbar > .container .navbar-brand,
  .bootstrap-ddshop .navbar > .container-fluid .navbar-brand {
    margin-left: -15px;
  }
}
.bootstrap-ddshop .navbar-toggle {
  position: relative;
  float: right;
  margin-right: 15px;
  padding: 9px 10px;
  margin-top: 8px;
  margin-bottom: 8px;
  background-color: transparent;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 4px;
}
.bootstrap-ddshop .navbar-toggle:focus {
  outline: 0;
}
.bootstrap-ddshop .navbar-toggle .icon-bar {
  display: block;
  width: 22px;
  height: 2px;
  border-radius: 1px;
}
.bootstrap-ddshop .navbar-toggle .icon-bar + .icon-bar {
  margin-top: 4px;
}
@media (min-width: 768px) {
  .bootstrap-ddshop .navbar-toggle {
    display: none;
  }
}
.bootstrap-ddshop .navbar-nav {
  margin: 7.5px -15px;
}
.bootstrap-ddshop .navbar-nav > li > a {
  padding-top: 10px;
  padding-bottom: 10px;
  line-height: 20px;
}
@media (max-width: 767px) {
  .bootstrap-ddshop .navbar-nav .open .dropdown-menu {
    position: static;
    float: none;
    width: auto;
    margin-top: 0;
    background-color: transparent;
    border: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
  }
  .bootstrap-ddshop .navbar-nav .open .dropdown-menu > li > a,
  .bootstrap-ddshop .navbar-nav .open .dropdown-menu .dropdown-header {
    padding: 5px 15px 5px 25px;
  }
  .bootstrap-ddshop .navbar-nav .open .dropdown-menu > li > a {
    line-height: 20px;
  }
  .bootstrap-ddshop .navbar-nav .open .dropdown-menu > li > a:hover,
  .bootstrap-ddshop .navbar-nav .open .dropdown-menu > li > a:focus {
    background-image: none;
  }
}
@media (min-width: 768px) {
  .bootstrap-ddshop .navbar-nav {
    float: left;
    margin: 0;
  }
  .bootstrap-ddshop .navbar-nav > li {
    float: left;
  }
  .bootstrap-ddshop .navbar-nav > li > a {
    padding-top: 15px;
    padding-bottom: 15px;
  }
}
.bootstrap-ddshop .navbar-form {
  margin-left: -15px;
  margin-right: -15px;
  padding: 10px 15px;
  border-top: 1px solid transparent;
  border-bottom: 1px solid transparent;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
  margin-top: 8px;
  margin-bottom: 8px;
}
@media (min-width: 768px) {
  .bootstrap-ddshop .navbar-form .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .bootstrap-ddshop .navbar-form .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .bootstrap-ddshop .navbar-form .form-control-static {
    display: inline-block;
  }
  .bootstrap-ddshop .navbar-form .input-group {
    display: inline-table;
    vertical-align: middle;
  }
  .bootstrap-ddshop .navbar-form .input-group .input-group-addon,
  .bootstrap-ddshop .navbar-form .input-group .input-group-btn,
  .bootstrap-ddshop .navbar-form .input-group .form-control {
    width: auto;
  }
  .bootstrap-ddshop .navbar-form .input-group > .form-control {
    width: 100%;
  }
  .bootstrap-ddshop .navbar-form .control-label {
    margin-bottom: 0;
    vertical-align: middle;
  }
  .bootstrap-ddshop .navbar-form .radio,
  .bootstrap-ddshop .navbar-form .checkbox {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .bootstrap-ddshop .navbar-form .radio label,
  .bootstrap-ddshop .navbar-form .checkbox label {
    padding-left: 0;
  }
  .bootstrap-ddshop .navbar-form .radio input[type="radio"],
  .bootstrap-ddshop .navbar-form .checkbox input[type="checkbox"] {
    position: relative;
    margin-left: 0;
  }
  .bootstrap-ddshop .navbar-form .has-feedback .form-control-feedback {
    top: 0;
  }
}
@media (max-width: 767px) {
  .bootstrap-ddshop .navbar-form .form-group {
    margin-bottom: 5px;
  }
  .bootstrap-ddshop .navbar-form .form-group:last-child {
    margin-bottom: 0;
  }
}
@media (min-width: 768px) {
  .bootstrap-ddshop .navbar-form {
    width: auto;
    border: 0;
    margin-left: 0;
    margin-right: 0;
    padding-top: 0;
    padding-bottom: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
  }
}
.bootstrap-ddshop .navbar-nav > li > .dropdown-menu {
  margin-top: 0;
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.bootstrap-ddshop .navbar-fixed-bottom .navbar-nav > li > .dropdown-menu {
  margin-bottom: 0;
  border-top-right-radius: 4px;
  border-top-left-radius: 4px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.bootstrap-ddshop .navbar-btn {
  margin-top: 8px;
  margin-bottom: 8px;
}
.bootstrap-ddshop .navbar-btn.btn-sm {
  margin-top: 10px;
  margin-bottom: 10px;
}
.bootstrap-ddshop .navbar-btn.btn-xs {
  margin-top: 14px;
  margin-bottom: 14px;
}
.bootstrap-ddshop .navbar-text {
  margin-top: 15px;
  margin-bottom: 15px;
}
@media (min-width: 768px) {
  .bootstrap-ddshop .navbar-text {
    float: left;
    margin-left: 15px;
    margin-right: 15px;
  }
}
@media (min-width: 768px) {
  .bootstrap-ddshop .navbar-left {
    float: left !important;
  }
  .bootstrap-ddshop .navbar-right {
    float: right !important;
    margin-right: -15px;
  }
  .bootstrap-ddshop .navbar-right ~ .navbar-right {
    margin-right: 0;
  }
}
.bootstrap-ddshop .navbar-default {
  background-color: #f8f8f8;
  border-color: #e7e7e7;
}
.bootstrap-ddshop .navbar-default .navbar-brand {
  color: #777777;
}
.bootstrap-ddshop .navbar-default .navbar-brand:hover,
.bootstrap-ddshop .navbar-default .navbar-brand:focus {
  color: #5e5e5e;
  background-color: transparent;
}
.bootstrap-ddshop .navbar-default .navbar-text {
  color: #777777;
}
.bootstrap-ddshop .navbar-default .navbar-nav > li > a {
  color: #777777;
}
.bootstrap-ddshop .navbar-default .navbar-nav > li > a:hover,
.bootstrap-ddshop .navbar-default .navbar-nav > li > a:focus {
  color: #333333;
  background-color: transparent;
}
.bootstrap-ddshop .navbar-default .navbar-nav > .active > a,
.bootstrap-ddshop .navbar-default .navbar-nav > .active > a:hover,
.bootstrap-ddshop .navbar-default .navbar-nav > .active > a:focus {
  color: #555555;
  background-color: #e7e7e7;
}
.bootstrap-ddshop .navbar-default .navbar-nav > .disabled > a,
.bootstrap-ddshop .navbar-default .navbar-nav > .disabled > a:hover,
.bootstrap-ddshop .navbar-default .navbar-nav > .disabled > a:focus {
  color: #cccccc;
  background-color: transparent;
}
.bootstrap-ddshop .navbar-default .navbar-toggle {
  border-color: #dddddd;
}
.bootstrap-ddshop .navbar-default .navbar-toggle:hover,
.bootstrap-ddshop .navbar-default .navbar-toggle:focus {
  background-color: #dddddd;
}
.bootstrap-ddshop .navbar-default .navbar-toggle .icon-bar {
  background-color: #888888;
}
.bootstrap-ddshop .navbar-default .navbar-collapse,
.bootstrap-ddshop .navbar-default .navbar-form {
  border-color: #e7e7e7;
}
.bootstrap-ddshop .navbar-default .navbar-nav > .open > a,
.bootstrap-ddshop .navbar-default .navbar-nav > .open > a:hover,
.bootstrap-ddshop .navbar-default .navbar-nav > .open > a:focus {
  background-color: #e7e7e7;
  color: #555555;
}
@media (max-width: 767px) {
  .bootstrap-ddshop .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #777777;
  }
  .bootstrap-ddshop .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
  .bootstrap-ddshop .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #333333;
    background-color: transparent;
  }
  .bootstrap-ddshop .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
  .bootstrap-ddshop .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
  .bootstrap-ddshop .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #555555;
    background-color: #e7e7e7;
  }
  .bootstrap-ddshop .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a,
  .bootstrap-ddshop .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .bootstrap-ddshop .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #cccccc;
    background-color: transparent;
  }
}
.bootstrap-ddshop .navbar-default .navbar-link {
  color: #777777;
}
.bootstrap-ddshop .navbar-default .navbar-link:hover {
  color: #333333;
}
.bootstrap-ddshop .navbar-default .btn-link {
  color: #777777;
}
.bootstrap-ddshop .navbar-default .btn-link:hover,
.bootstrap-ddshop .navbar-default .btn-link:focus {
  color: #333333;
}
.bootstrap-ddshop .navbar-default .btn-link[disabled]:hover,
.bootstrap-ddshop fieldset[disabled] .navbar-default .btn-link:hover,
.bootstrap-ddshop .navbar-default .btn-link[disabled]:focus,
.bootstrap-ddshop fieldset[disabled] .navbar-default .btn-link:focus {
  color: #cccccc;
}
.bootstrap-ddshop .navbar-inverse {
  background-color: #222222;
  border-color: #080808;
}
.bootstrap-ddshop .navbar-inverse .navbar-brand {
  color: #9d9d9d;
}
.bootstrap-ddshop .navbar-inverse .navbar-brand:hover,
.bootstrap-ddshop .navbar-inverse .navbar-brand:focus {
  color: #ffffff;
  background-color: transparent;
}
.bootstrap-ddshop .navbar-inverse .navbar-text {
  color: #9d9d9d;
}
.bootstrap-ddshop .navbar-inverse .navbar-nav > li > a {
  color: #9d9d9d;
}
.bootstrap-ddshop .navbar-inverse .navbar-nav > li > a:hover,
.bootstrap-ddshop .navbar-inverse .navbar-nav > li > a:focus {
  color: #ffffff;
  background-color: transparent;
}
.bootstrap-ddshop .navbar-inverse .navbar-nav > .active > a,
.bootstrap-ddshop .navbar-inverse .navbar-nav > .active > a:hover,
.bootstrap-ddshop .navbar-inverse .navbar-nav > .active > a:focus {
  color: #ffffff;
  background-color: #080808;
}
.bootstrap-ddshop .navbar-inverse .navbar-nav > .disabled > a,
.bootstrap-ddshop .navbar-inverse .navbar-nav > .disabled > a:hover,
.bootstrap-ddshop .navbar-inverse .navbar-nav > .disabled > a:focus {
  color: #444444;
  background-color: transparent;
}
.bootstrap-ddshop .navbar-inverse .navbar-toggle {
  border-color: #333333;
}
.bootstrap-ddshop .navbar-inverse .navbar-toggle:hover,
.bootstrap-ddshop .navbar-inverse .navbar-toggle:focus {
  background-color: #333333;
}
.bootstrap-ddshop .navbar-inverse .navbar-toggle .icon-bar {
  background-color: #ffffff;
}
.bootstrap-ddshop .navbar-inverse .navbar-collapse,
.bootstrap-ddshop .navbar-inverse .navbar-form {
  border-color: #101010;
}
.bootstrap-ddshop .navbar-inverse .navbar-nav > .open > a,
.bootstrap-ddshop .navbar-inverse .navbar-nav > .open > a:hover,
.bootstrap-ddshop .navbar-inverse .navbar-nav > .open > a:focus {
  background-color: #080808;
  color: #ffffff;
}
@media (max-width: 767px) {
  .bootstrap-ddshop .navbar-inverse .navbar-nav .open .dropdown-menu > .dropdown-header {
    border-color: #080808;
  }
  .bootstrap-ddshop .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
    background-color: #080808;
  }
  .bootstrap-ddshop .navbar-inverse .navbar-nav .open .dropdown-menu > li > a {
    color: #9d9d9d;
  }
  .bootstrap-ddshop .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover,
  .bootstrap-ddshop .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #ffffff;
    background-color: transparent;
  }
  .bootstrap-ddshop .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a,
  .bootstrap-ddshop .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:hover,
  .bootstrap-ddshop .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #ffffff;
    background-color: #080808;
  }
  .bootstrap-ddshop .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a,
  .bootstrap-ddshop .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .bootstrap-ddshop .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #444444;
    background-color: transparent;
  }
}
.bootstrap-ddshop .navbar-inverse .navbar-link {
  color: #9d9d9d;
}
.bootstrap-ddshop .navbar-inverse .navbar-link:hover {
  color: #ffffff;
}
.bootstrap-ddshop .navbar-inverse .btn-link {
  color: #9d9d9d;
}
.bootstrap-ddshop .navbar-inverse .btn-link:hover,
.bootstrap-ddshop .navbar-inverse .btn-link:focus {
  color: #ffffff;
}
.bootstrap-ddshop .navbar-inverse .btn-link[disabled]:hover,
.bootstrap-ddshop fieldset[disabled] .navbar-inverse .btn-link:hover,
.bootstrap-ddshop .navbar-inverse .btn-link[disabled]:focus,
.bootstrap-ddshop fieldset[disabled] .navbar-inverse .btn-link:focus {
  color: #444444;
}
.bootstrap-ddshop .breadcrumb {
  padding: 8px 15px;
  margin-bottom: 20px;
  list-style: none;
  background-color: #f5f5f5;
  border-radius: 4px;
}
.bootstrap-ddshop .breadcrumb > li {
  display: inline-block;
}
.bootstrap-ddshop .breadcrumb > li + li:before {
  content: "/\00a0";
  padding: 0 5px;
  color: #cccccc;
}
.bootstrap-ddshop .breadcrumb > .active {
  color: #777777;
}
.bootstrap-ddshop .pagination {
  display: inline-block;
  padding-left: 0;
  margin: 20px 0;
  border-radius: 4px;
}
.bootstrap-ddshop .pagination > li {
  display: inline;
}
.bootstrap-ddshop .pagination > li > a,
.bootstrap-ddshop .pagination > li > span {
  position: relative;
  float: left;
  padding: 6px 12px;
  line-height: 1.42857143;
  text-decoration: none;
  color: #337ab7;
  background-color: #ffffff;
  border: 1px solid #dddddd;
  margin-left: -1px;
}
.bootstrap-ddshop .pagination > li:first-child > a,
.bootstrap-ddshop .pagination > li:first-child > span {
  margin-left: 0;
  border-bottom-left-radius: 4px;
  border-top-left-radius: 4px;
}
.bootstrap-ddshop .pagination > li:last-child > a,
.bootstrap-ddshop .pagination > li:last-child > span {
  border-bottom-right-radius: 4px;
  border-top-right-radius: 4px;
}
.bootstrap-ddshop .pagination > li > a:hover,
.bootstrap-ddshop .pagination > li > span:hover,
.bootstrap-ddshop .pagination > li > a:focus,
.bootstrap-ddshop .pagination > li > span:focus {
  color: #23527c;
  background-color: #eeeeee;
  border-color: #dddddd;
}
.bootstrap-ddshop .pagination > .active > a,
.bootstrap-ddshop .pagination > .active > span,
.bootstrap-ddshop .pagination > .active > a:hover,
.bootstrap-ddshop .pagination > .active > span:hover,
.bootstrap-ddshop .pagination > .active > a:focus,
.bootstrap-ddshop .pagination > .active > span:focus {
  z-index: 2;
  color: #ffffff;
  background-color: #337ab7;
  border-color: #337ab7;
  cursor: default;
}
.bootstrap-ddshop .pagination > .disabled > span,
.bootstrap-ddshop .pagination > .disabled > span:hover,
.bootstrap-ddshop .pagination > .disabled > span:focus,
.bootstrap-ddshop .pagination > .disabled > a,
.bootstrap-ddshop .pagination > .disabled > a:hover,
.bootstrap-ddshop .pagination > .disabled > a:focus {
  color: #777777;
  background-color: #ffffff;
  border-color: #dddddd;
  cursor: not-allowed;
}
.bootstrap-ddshop .pagination-lg > li > a,
.bootstrap-ddshop .pagination-lg > li > span {
  padding: 10px 16px;
  font-size: 18px;
}
.bootstrap-ddshop .pagination-lg > li:first-child > a,
.bootstrap-ddshop .pagination-lg > li:first-child > span {
  border-bottom-left-radius: 6px;
  border-top-left-radius: 6px;
}
.bootstrap-ddshop .pagination-lg > li:last-child > a,
.bootstrap-ddshop .pagination-lg > li:last-child > span {
  border-bottom-right-radius: 6px;
  border-top-right-radius: 6px;
}
.bootstrap-ddshop .pagination-sm > li > a,
.bootstrap-ddshop .pagination-sm > li > span {
  padding: 5px 10px;
  font-size: 12px;
}
.bootstrap-ddshop .pagination-sm > li:first-child > a,
.bootstrap-ddshop .pagination-sm > li:first-child > span {
  border-bottom-left-radius: 3px;
  border-top-left-radius: 3px;
}
.bootstrap-ddshop .pagination-sm > li:last-child > a,
.bootstrap-ddshop .pagination-sm > li:last-child > span {
  border-bottom-right-radius: 3px;
  border-top-right-radius: 3px;
}
.bootstrap-ddshop .pager {
  padding-left: 0;
  margin: 20px 0;
  list-style: none;
  text-align: center;
}
.bootstrap-ddshop .pager li {
  display: inline;
}
.bootstrap-ddshop .pager li > a,
.bootstrap-ddshop .pager li > span {
  display: inline-block;
  padding: 5px 14px;
  background-color: #ffffff;
  border: 1px solid #dddddd;
  border-radius: 15px;
}
.bootstrap-ddshop .pager li > a:hover,
.bootstrap-ddshop .pager li > a:focus {
  text-decoration: none;
  background-color: #eeeeee;
}
.bootstrap-ddshop .pager .next > a,
.bootstrap-ddshop .pager .next > span {
  float: right;
}
.bootstrap-ddshop .pager .previous > a,
.bootstrap-ddshop .pager .previous > span {
  float: left;
}
.bootstrap-ddshop .pager .disabled > a,
.bootstrap-ddshop .pager .disabled > a:hover,
.bootstrap-ddshop .pager .disabled > a:focus,
.bootstrap-ddshop .pager .disabled > span {
  color: #777777;
  background-color: #ffffff;
  cursor: not-allowed;
}
.bootstrap-ddshop .label {
  display: inline;
  padding: .2em .6em .3em;
  font-size: 75%;
  font-weight: bold;
  line-height: 1;
  color: #ffffff;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: .25em;
}
.bootstrap-ddshop a.label:hover,
.bootstrap-ddshop a.label:focus {
  color: #ffffff;
  text-decoration: none;
  cursor: pointer;
}
.bootstrap-ddshop .label:empty {
  display: none;
}
.bootstrap-ddshop .btn .label {
  position: relative;
  top: -1px;
}
.bootstrap-ddshop .label-default {
  background-color: #777777;
}
.bootstrap-ddshop .label-default[href]:hover,
.bootstrap-ddshop .label-default[href]:focus {
  background-color: #5e5e5e;
}
.bootstrap-ddshop .label-primary {
  background-color: #337ab7;
}
.bootstrap-ddshop .label-primary[href]:hover,
.bootstrap-ddshop .label-primary[href]:focus {
  background-color: #286090;
}
.bootstrap-ddshop .label-success {
  background-color: #5cb85c;
}
.bootstrap-ddshop .label-success[href]:hover,
.bootstrap-ddshop .label-success[href]:focus {
  background-color: #449d44;
}
.bootstrap-ddshop .label-info {
  background-color: #5bc0de;
}
.bootstrap-ddshop .label-info[href]:hover,
.bootstrap-ddshop .label-info[href]:focus {
  background-color: #31b0d5;
}
.bootstrap-ddshop .label-warning {
  background-color: #f0ad4e;
}
.bootstrap-ddshop .label-warning[href]:hover,
.bootstrap-ddshop .label-warning[href]:focus {
  background-color: #ec971f;
}
.bootstrap-ddshop .label-danger {
  background-color: #d9534f;
}
.bootstrap-ddshop .label-danger[href]:hover,
.bootstrap-ddshop .label-danger[href]:focus {
  background-color: #c9302c;
}
.bootstrap-ddshop .badge {
  display: inline-block;
  min-width: 10px;
  padding: 3px 7px;
  font-size: 12px;
  font-weight: bold;
  color: #ffffff;
  line-height: 1;
  vertical-align: baseline;
  white-space: nowrap;
  text-align: center;
  background-color: #777777;
  border-radius: 10px;
}
.bootstrap-ddshop .badge:empty {
  display: none;
}
.bootstrap-ddshop .btn .badge {
  position: relative;
  top: -1px;
}
.bootstrap-ddshop .btn-xs .badge,
.bootstrap-ddshop .btn-group-xs > .btn .badge {
  top: 0;
  padding: 1px 5px;
}
.bootstrap-ddshop a.badge:hover,
.bootstrap-ddshop a.badge:focus {
  color: #ffffff;
  text-decoration: none;
  cursor: pointer;
}
.bootstrap-ddshop .list-group-item.active > .badge,
.bootstrap-ddshop .nav-pills > .active > a > .badge {
  color: #337ab7;
  background-color: #ffffff;
}
.bootstrap-ddshop .list-group-item > .badge {
  float: right;
}
.bootstrap-ddshop .list-group-item > .badge + .badge {
  margin-right: 5px;
}
.bootstrap-ddshop .nav-pills > li > a > .badge {
  margin-left: 3px;
}
.bootstrap-ddshop .jumbotron {
  padding: 30px 15px;
  margin-bottom: 30px;
  color: inherit;
  background-color: #eeeeee;
}
.bootstrap-ddshop .jumbotron h1,
.bootstrap-ddshop .jumbotron .h1 {
  color: inherit;
}
.bootstrap-ddshop .jumbotron p {
  margin-bottom: 15px;
  font-size: 21px;
  font-weight: 200;
}
.bootstrap-ddshop .jumbotron > hr {
  border-top-color: #d5d5d5;
}
.bootstrap-ddshop .container .jumbotron,
.bootstrap-ddshop .container-fluid .jumbotron {
  border-radius: 6px;
}
.bootstrap-ddshop .jumbotron .container {
  max-width: 100%;
}
@media screen and (min-width: 768px) {
  .bootstrap-ddshop .jumbotron {
    padding: 48px 0;
  }
  .bootstrap-ddshop .container .jumbotron,
  .bootstrap-ddshop .container-fluid .jumbotron {
    padding-left: 60px;
    padding-right: 60px;
  }
  .bootstrap-ddshop .jumbotron h1,
  .bootstrap-ddshop .jumbotron .h1 {
    font-size: 63px;
  }
}
.bootstrap-ddshop .thumbnail {
  display: block;
  padding: 4px;
  margin-bottom: 20px;
  line-height: 1.42857143;
  background-color: #ffffff;
  border: 1px solid #dddddd;
  border-radius: 4px;
  -webkit-transition: border 0.2s ease-in-out;
  -o-transition: border 0.2s ease-in-out;
  transition: border 0.2s ease-in-out;
}
.bootstrap-ddshop .thumbnail > img,
.bootstrap-ddshop .thumbnail a > img {
  margin-left: auto;
  margin-right: auto;
}
.bootstrap-ddshop a.thumbnail:hover,
.bootstrap-ddshop a.thumbnail:focus,
.bootstrap-ddshop a.thumbnail.active {
  border-color: #337ab7;
}
.bootstrap-ddshop .thumbnail .caption {
  padding: 9px;
  color: #333333;
}
.bootstrap-ddshop .alert {
  padding: 15px;
  margin-bottom: 20px;
  border: 1px solid transparent;
  border-radius: 4px;
}
.bootstrap-ddshop .alert h4 {
  margin-top: 0;
  color: inherit;
}
.bootstrap-ddshop .alert .alert-link {
  font-weight: bold;
}
.bootstrap-ddshop .alert > p,
.bootstrap-ddshop .alert > ul {
  margin-bottom: 0;
}
.bootstrap-ddshop .alert > p + p {
  margin-top: 5px;
}
.bootstrap-ddshop .alert-dismissable,
.bootstrap-ddshop .alert-dismissible {
  padding-right: 35px;
}
.bootstrap-ddshop .alert-dismissable .close,
.bootstrap-ddshop .alert-dismissible .close {
  position: relative;
  top: -2px;
  right: -21px;
  color: inherit;
}
.bootstrap-ddshop .alert-success {
  background-color: #dff0d8;
  border-color: #d6e9c6;
  color: #3c763d;
}
.bootstrap-ddshop .alert-success hr {
  border-top-color: #c9e2b3;
}
.bootstrap-ddshop .alert-success .alert-link {
  color: #2b542c;
}
.bootstrap-ddshop .alert-info {
  background-color: #d9edf7;
  border-color: #bce8f1;
  color: #31708f;
}
.bootstrap-ddshop .alert-info hr {
  border-top-color: #a6e1ec;
}
.bootstrap-ddshop .alert-info .alert-link {
  color: #245269;
}
.bootstrap-ddshop .alert-warning {
  background-color: #fcf8e3;
  border-color: #faebcc;
  color: #8a6d3b;
}
.bootstrap-ddshop .alert-warning hr {
  border-top-color: #f7e1b5;
}
.bootstrap-ddshop .alert-warning .alert-link {
  color: #66512c;
}
.bootstrap-ddshop .alert-danger {
  background-color: #f2dede;
  border-color: #ebccd1;
  color: #a94442;
}
.bootstrap-ddshop .alert-danger hr {
  border-top-color: #e4b9c0;
}
.bootstrap-ddshop .alert-danger .alert-link {
  color: #843534;
}
@-webkit-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
@-o-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
@keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
.bootstrap-ddshop .progress {
  overflow: hidden;
  height: 20px;
  margin-bottom: 20px;
  background-color: #f5f5f5;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
}
.bootstrap-ddshop .progress-bar {
  float: left;
  width: 0%;
  height: 100%;
  font-size: 12px;
  line-height: 20px;
  color: #ffffff;
  text-align: center;
  background-color: #337ab7;
  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  -webkit-transition: width 0.6s ease;
  -o-transition: width 0.6s ease;
  transition: width 0.6s ease;
}
.bootstrap-ddshop .progress-striped .progress-bar,
.bootstrap-ddshop .progress-bar-striped {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  -webkit-background-size: 40px 40px;
  background-size: 40px 40px;
}
.bootstrap-ddshop .progress.active .progress-bar,
.bootstrap-ddshop .progress-bar.active {
  -webkit-animation: progress-bar-stripes 2s linear infinite;
  -o-animation: progress-bar-stripes 2s linear infinite;
  animation: progress-bar-stripes 2s linear infinite;
}
.bootstrap-ddshop .progress-bar-success {
  background-color: #5cb85c;
}
.bootstrap-ddshop .progress-striped .progress-bar-success {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.bootstrap-ddshop .progress-bar-info {
  background-color: #5bc0de;
}
.bootstrap-ddshop .progress-striped .progress-bar-info {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.bootstrap-ddshop .progress-bar-warning {
  background-color: #f0ad4e;
}
.bootstrap-ddshop .progress-striped .progress-bar-warning {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.bootstrap-ddshop .progress-bar-danger {
  background-color: #d9534f;
}
.bootstrap-ddshop .progress-striped .progress-bar-danger {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.bootstrap-ddshop .media {
  margin-top: 15px;
}
.bootstrap-ddshop .media:first-child {
  margin-top: 0;
}
.bootstrap-ddshop .media,
.bootstrap-ddshop .media-body {
  zoom: 1;
  overflow: hidden;
}
.bootstrap-ddshop .media-body {
  width: 10000px;
}
.bootstrap-ddshop .media-object {
  display: block;
}
.bootstrap-ddshop .media-right,
.bootstrap-ddshop .media > .pull-right {
  padding-left: 10px;
}
.bootstrap-ddshop .media-left,
.bootstrap-ddshop .media > .pull-left {
  padding-right: 10px;
}
.bootstrap-ddshop .media-left,
.bootstrap-ddshop .media-right,
.bootstrap-ddshop .media-body {
  display: table-cell;
  vertical-align: top;
}
.bootstrap-ddshop .media-middle {
  vertical-align: middle;
}
.bootstrap-ddshop .media-bottom {
  vertical-align: bottom;
}
.bootstrap-ddshop .media-heading {
  margin-top: 0;
  margin-bottom: 5px;
}
.bootstrap-ddshop .media-list {
  padding-left: 0;
  list-style: none;
}
.bootstrap-ddshop .list-group {
  margin-bottom: 20px;
  padding-left: 0;
}
.bootstrap-ddshop .list-group-item {
  position: relative;
  display: block;
  padding: 10px 15px;
  margin-bottom: -1px;
  background-color: #ffffff;
  border: 1px solid #dddddd;
}
.bootstrap-ddshop .list-group-item:first-child {
  border-top-right-radius: 4px;
  border-top-left-radius: 4px;
}
.bootstrap-ddshop .list-group-item:last-child {
  margin-bottom: 0;
  border-bottom-right-radius: 4px;
  border-bottom-left-radius: 4px;
}
.bootstrap-ddshop a.list-group-item {
  color: #555555;
}
.bootstrap-ddshop a.list-group-item .list-group-item-heading {
  color: #333333;
}
.bootstrap-ddshop a.list-group-item:hover,
.bootstrap-ddshop a.list-group-item:focus {
  text-decoration: none;
  color: #555555;
  background-color: #f5f5f5;
}
.bootstrap-ddshop .list-group-item.disabled,
.bootstrap-ddshop .list-group-item.disabled:hover,
.bootstrap-ddshop .list-group-item.disabled:focus {
  background-color: #eeeeee;
  color: #777777;
  cursor: not-allowed;
}
.bootstrap-ddshop .list-group-item.disabled .list-group-item-heading,
.bootstrap-ddshop .list-group-item.disabled:hover .list-group-item-heading,
.bootstrap-ddshop .list-group-item.disabled:focus .list-group-item-heading {
  color: inherit;
}
.bootstrap-ddshop .list-group-item.disabled .list-group-item-text,
.bootstrap-ddshop .list-group-item.disabled:hover .list-group-item-text,
.bootstrap-ddshop .list-group-item.disabled:focus .list-group-item-text {
  color: #777777;
}
.bootstrap-ddshop .list-group-item.active,
.bootstrap-ddshop .list-group-item.active:hover,
.bootstrap-ddshop .list-group-item.active:focus {
  z-index: 2;
  color: #ffffff;
  background-color: #337ab7;
  border-color: #337ab7;
}
.bootstrap-ddshop .list-group-item.active .list-group-item-heading,
.bootstrap-ddshop .list-group-item.active:hover .list-group-item-heading,
.bootstrap-ddshop .list-group-item.active:focus .list-group-item-heading,
.bootstrap-ddshop .list-group-item.active .list-group-item-heading > small,
.bootstrap-ddshop .list-group-item.active:hover .list-group-item-heading > small,
.bootstrap-ddshop .list-group-item.active:focus .list-group-item-heading > small,
.bootstrap-ddshop .list-group-item.active .list-group-item-heading > .small,
.bootstrap-ddshop .list-group-item.active:hover .list-group-item-heading > .small,
.bootstrap-ddshop .list-group-item.active:focus .list-group-item-heading > .small {
  color: inherit;
}
.bootstrap-ddshop .list-group-item.active .list-group-item-text,
.bootstrap-ddshop .list-group-item.active:hover .list-group-item-text,
.bootstrap-ddshop .list-group-item.active:focus .list-group-item-text {
  color: #c7ddef;
}
.bootstrap-ddshop .list-group-item-success {
  color: #3c763d;
  background-color: #dff0d8;
}
.bootstrap-ddshop a.list-group-item-success {
  color: #3c763d;
}
.bootstrap-ddshop a.list-group-item-success .list-group-item-heading {
  color: inherit;
}
.bootstrap-ddshop a.list-group-item-success:hover,
.bootstrap-ddshop a.list-group-item-success:focus {
  color: #3c763d;
  background-color: #d0e9c6;
}
.bootstrap-ddshop a.list-group-item-success.active,
.bootstrap-ddshop a.list-group-item-success.active:hover,
.bootstrap-ddshop a.list-group-item-success.active:focus {
  color: #fff;
  background-color: #3c763d;
  border-color: #3c763d;
}
.bootstrap-ddshop .list-group-item-info {
  color: #31708f;
  background-color: #d9edf7;
}
.bootstrap-ddshop a.list-group-item-info {
  color: #31708f;
}
.bootstrap-ddshop a.list-group-item-info .list-group-item-heading {
  color: inherit;
}
.bootstrap-ddshop a.list-group-item-info:hover,
.bootstrap-ddshop a.list-group-item-info:focus {
  color: #31708f;
  background-color: #c4e3f3;
}
.bootstrap-ddshop a.list-group-item-info.active,
.bootstrap-ddshop a.list-group-item-info.active:hover,
.bootstrap-ddshop a.list-group-item-info.active:focus {
  color: #fff;
  background-color: #31708f;
  border-color: #31708f;
}
.bootstrap-ddshop .list-group-item-warning {
  color: #8a6d3b;
  background-color: #fcf8e3;
}
.bootstrap-ddshop a.list-group-item-warning {
  color: #8a6d3b;
}
.bootstrap-ddshop a.list-group-item-warning .list-group-item-heading {
  color: inherit;
}
.bootstrap-ddshop a.list-group-item-warning:hover,
.bootstrap-ddshop a.list-group-item-warning:focus {
  color: #8a6d3b;
  background-color: #faf2cc;
}
.bootstrap-ddshop a.list-group-item-warning.active,
.bootstrap-ddshop a.list-group-item-warning.active:hover,
.bootstrap-ddshop a.list-group-item-warning.active:focus {
  color: #fff;
  background-color: #8a6d3b;
  border-color: #8a6d3b;
}
.bootstrap-ddshop .list-group-item-danger {
  color: #a94442;
  background-color: #f2dede;
}
.bootstrap-ddshop a.list-group-item-danger {
  color: #a94442;
}
.bootstrap-ddshop a.list-group-item-danger .list-group-item-heading {
  color: inherit;
}
.bootstrap-ddshop a.list-group-item-danger:hover,
.bootstrap-ddshop a.list-group-item-danger:focus {
  color: #a94442;
  background-color: #ebcccc;
}
.bootstrap-ddshop a.list-group-item-danger.active,
.bootstrap-ddshop a.list-group-item-danger.active:hover,
.bootstrap-ddshop a.list-group-item-danger.active:focus {
  color: #fff;
  background-color: #a94442;
  border-color: #a94442;
}
.bootstrap-ddshop .list-group-item-heading {
  margin-top: 0;
  margin-bottom: 5px;
}
.bootstrap-ddshop .list-group-item-text {
  margin-bottom: 0;
  line-height: 1.3;
}
.bootstrap-ddshop .panel {
  margin-bottom: 20px;
  background-color: #ffffff;
  border: 1px solid transparent;
  border-radius: 4px;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
}
.bootstrap-ddshop .panel-body {
  padding: 15px;
}
.bootstrap-ddshop .panel-heading {
  padding: 10px 15px;
  border-bottom: 1px solid transparent;
  border-top-right-radius: 3px;
  border-top-left-radius: 3px;
}
.bootstrap-ddshop .panel-heading > .dropdown .dropdown-toggle {
  color: inherit;
}
.bootstrap-ddshop .panel-title {
  margin-top: 0;
  margin-bottom: 0;
  font-size: 16px;
  color: inherit;
}
.bootstrap-ddshop .panel-title > a,
.bootstrap-ddshop .panel-title > small,
.bootstrap-ddshop .panel-title > .small,
.bootstrap-ddshop .panel-title > small > a,
.bootstrap-ddshop .panel-title > .small > a {
  color: inherit;
}
.bootstrap-ddshop .panel-footer {
  padding: 10px 15px;
  background-color: #f5f5f5;
  border-top: 1px solid #dddddd;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.bootstrap-ddshop .panel > .list-group,
.bootstrap-ddshop .panel > .panel-collapse > .list-group {
  margin-bottom: 0;
}
.bootstrap-ddshop .panel > .list-group .list-group-item,
.bootstrap-ddshop .panel > .panel-collapse > .list-group .list-group-item {
  border-width: 1px 0;
  border-radius: 0;
}
.bootstrap-ddshop .panel > .list-group:first-child .list-group-item:first-child,
.bootstrap-ddshop .panel > .panel-collapse > .list-group:first-child .list-group-item:first-child {
  border-top: 0;
  border-top-right-radius: 3px;
  border-top-left-radius: 3px;
}
.bootstrap-ddshop .panel > .list-group:last-child .list-group-item:last-child,
.bootstrap-ddshop .panel > .panel-collapse > .list-group:last-child .list-group-item:last-child {
  border-bottom: 0;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.bootstrap-ddshop .panel-heading + .list-group .list-group-item:first-child {
  border-top-width: 0;
}
.bootstrap-ddshop .list-group + .panel-footer {
  border-top-width: 0;
}
.bootstrap-ddshop .panel > .table,
.bootstrap-ddshop .panel > .table-responsive > .table,
.bootstrap-ddshop .panel > .panel-collapse > .table {
  margin-bottom: 0;
}
.bootstrap-ddshop .panel > .table caption,
.bootstrap-ddshop .panel > .table-responsive > .table caption,
.bootstrap-ddshop .panel > .panel-collapse > .table caption {
  padding-left: 15px;
  padding-right: 15px;
}
.bootstrap-ddshop .panel > .table:first-child,
.bootstrap-ddshop .panel > .table-responsive:first-child > .table:first-child {
  border-top-right-radius: 3px;
  border-top-left-radius: 3px;
}
.bootstrap-ddshop .panel > .table:first-child > thead:first-child > tr:first-child,
.bootstrap-ddshop .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child,
.bootstrap-ddshop .panel > .table:first-child > tbody:first-child > tr:first-child,
.bootstrap-ddshop .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child {
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}
.bootstrap-ddshop .panel > .table:first-child > thead:first-child > tr:first-child td:first-child,
.bootstrap-ddshop .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:first-child,
.bootstrap-ddshop .panel > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.bootstrap-ddshop .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.bootstrap-ddshop .panel > .table:first-child > thead:first-child > tr:first-child th:first-child,
.bootstrap-ddshop .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:first-child,
.bootstrap-ddshop .panel > .table:first-child > tbody:first-child > tr:first-child th:first-child,
.bootstrap-ddshop .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:first-child {
  border-top-left-radius: 3px;
}
.bootstrap-ddshop .panel > .table:first-child > thead:first-child > tr:first-child td:last-child,
.bootstrap-ddshop .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:last-child,
.bootstrap-ddshop .panel > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.bootstrap-ddshop .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.bootstrap-ddshop .panel > .table:first-child > thead:first-child > tr:first-child th:last-child,
.bootstrap-ddshop .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:last-child,
.bootstrap-ddshop .panel > .table:first-child > tbody:first-child > tr:first-child th:last-child,
.bootstrap-ddshop .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:last-child {
  border-top-right-radius: 3px;
}
.bootstrap-ddshop .panel > .table:last-child,
.bootstrap-ddshop .panel > .table-responsive:last-child > .table:last-child {
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.bootstrap-ddshop .panel > .table:last-child > tbody:last-child > tr:last-child,
.bootstrap-ddshop .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child,
.bootstrap-ddshop .panel > .table:last-child > tfoot:last-child > tr:last-child,
.bootstrap-ddshop .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child {
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
}
.bootstrap-ddshop .panel > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.bootstrap-ddshop .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.bootstrap-ddshop .panel > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.bootstrap-ddshop .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.bootstrap-ddshop .panel > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.bootstrap-ddshop .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.bootstrap-ddshop .panel > .table:last-child > tfoot:last-child > tr:last-child th:first-child,
.bootstrap-ddshop .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:first-child {
  border-bottom-left-radius: 3px;
}
.bootstrap-ddshop .panel > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.bootstrap-ddshop .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.bootstrap-ddshop .panel > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.bootstrap-ddshop .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.bootstrap-ddshop .panel > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.bootstrap-ddshop .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.bootstrap-ddshop .panel > .table:last-child > tfoot:last-child > tr:last-child th:last-child,
.bootstrap-ddshop .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:last-child {
  border-bottom-right-radius: 3px;
}
.bootstrap-ddshop .panel > .panel-body + .table,
.bootstrap-ddshop .panel > .panel-body + .table-responsive,
.bootstrap-ddshop .panel > .table + .panel-body,
.bootstrap-ddshop .panel > .table-responsive + .panel-body {
  border-top: 1px solid #dddddd;
}
.bootstrap-ddshop .panel > .table > tbody:first-child > tr:first-child th,
.bootstrap-ddshop .panel > .table > tbody:first-child > tr:first-child td {
  border-top: 0;
}
.bootstrap-ddshop .panel > .table-bordered,
.bootstrap-ddshop .panel > .table-responsive > .table-bordered {
  border: 0;
}
.bootstrap-ddshop .panel > .table-bordered > thead > tr > th:first-child,
.bootstrap-ddshop .panel > .table-responsive > .table-bordered > thead > tr > th:first-child,
.bootstrap-ddshop .panel > .table-bordered > tbody > tr > th:first-child,
.bootstrap-ddshop .panel > .table-responsive > .table-bordered > tbody > tr > th:first-child,
.bootstrap-ddshop .panel > .table-bordered > tfoot > tr > th:first-child,
.bootstrap-ddshop .panel > .table-responsive > .table-bordered > tfoot > tr > th:first-child,
.bootstrap-ddshop .panel > .table-bordered > thead > tr > td:first-child,
.bootstrap-ddshop .panel > .table-responsive > .table-bordered > thead > tr > td:first-child,
.bootstrap-ddshop .panel > .table-bordered > tbody > tr > td:first-child,
.bootstrap-ddshop .panel > .table-responsive > .table-bordered > tbody > tr > td:first-child,
.bootstrap-ddshop .panel > .table-bordered > tfoot > tr > td:first-child,
.bootstrap-ddshop .panel > .table-responsive > .table-bordered > tfoot > tr > td:first-child {
  border-left: 0;
}
.bootstrap-ddshop .panel > .table-bordered > thead > tr > th:last-child,
.bootstrap-ddshop .panel > .table-responsive > .table-bordered > thead > tr > th:last-child,
.bootstrap-ddshop .panel > .table-bordered > tbody > tr > th:last-child,
.bootstrap-ddshop .panel > .table-responsive > .table-bordered > tbody > tr > th:last-child,
.bootstrap-ddshop .panel > .table-bordered > tfoot > tr > th:last-child,
.bootstrap-ddshop .panel > .table-responsive > .table-bordered > tfoot > tr > th:last-child,
.bootstrap-ddshop .panel > .table-bordered > thead > tr > td:last-child,
.bootstrap-ddshop .panel > .table-responsive > .table-bordered > thead > tr > td:last-child,
.bootstrap-ddshop .panel > .table-bordered > tbody > tr > td:last-child,
.bootstrap-ddshop .panel > .table-responsive > .table-bordered > tbody > tr > td:last-child,
.bootstrap-ddshop .panel > .table-bordered > tfoot > tr > td:last-child,
.bootstrap-ddshop .panel > .table-responsive > .table-bordered > tfoot > tr > td:last-child {
  border-right: 0;
}
.bootstrap-ddshop .panel > .table-bordered > thead > tr:first-child > td,
.bootstrap-ddshop .panel > .table-responsive > .table-bordered > thead > tr:first-child > td,
.bootstrap-ddshop .panel > .table-bordered > tbody > tr:first-child > td,
.bootstrap-ddshop .panel > .table-responsive > .table-bordered > tbody > tr:first-child > td,
.bootstrap-ddshop .panel > .table-bordered > thead > tr:first-child > th,
.bootstrap-ddshop .panel > .table-responsive > .table-bordered > thead > tr:first-child > th,
.bootstrap-ddshop .panel > .table-bordered > tbody > tr:first-child > th,
.bootstrap-ddshop .panel > .table-responsive > .table-bordered > tbody > tr:first-child > th {
  border-bottom: 0;
}
.bootstrap-ddshop .panel > .table-bordered > tbody > tr:last-child > td,
.bootstrap-ddshop .panel > .table-responsive > .table-bordered > tbody > tr:last-child > td,
.bootstrap-ddshop .panel > .table-bordered > tfoot > tr:last-child > td,
.bootstrap-ddshop .panel > .table-responsive > .table-bordered > tfoot > tr:last-child > td,
.bootstrap-ddshop .panel > .table-bordered > tbody > tr:last-child > th,
.bootstrap-ddshop .panel > .table-responsive > .table-bordered > tbody > tr:last-child > th,
.bootstrap-ddshop .panel > .table-bordered > tfoot > tr:last-child > th,
.bootstrap-ddshop .panel > .table-responsive > .table-bordered > tfoot > tr:last-child > th {
  border-bottom: 0;
}
.bootstrap-ddshop .panel > .table-responsive {
  border: 0;
  margin-bottom: 0;
}
.bootstrap-ddshop .panel-group {
  margin-bottom: 20px;
}
.bootstrap-ddshop .panel-group .panel {
  margin-bottom: 0;
  border-radius: 4px;
}
.bootstrap-ddshop .panel-group .panel + .panel {
  margin-top: 5px;
}
.bootstrap-ddshop .panel-group .panel-heading {
  border-bottom: 0;
}
.bootstrap-ddshop .panel-group .panel-heading + .panel-collapse > .panel-body,
.bootstrap-ddshop .panel-group .panel-heading + .panel-collapse > .list-group {
  border-top: 1px solid #dddddd;
}
.bootstrap-ddshop .panel-group .panel-footer {
  border-top: 0;
}
.bootstrap-ddshop .panel-group .panel-footer + .panel-collapse .panel-body {
  border-bottom: 1px solid #dddddd;
}
.bootstrap-ddshop .panel-default {
  border-color: #dddddd;
}
.bootstrap-ddshop .panel-default > .panel-heading {
  color: #333333;
  background-color: #f5f5f5;
  border-color: #dddddd;
}
.bootstrap-ddshop .panel-default > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #dddddd;
}
.bootstrap-ddshop .panel-default > .panel-heading .badge {
  color: #f5f5f5;
  background-color: #333333;
}
.bootstrap-ddshop .panel-default > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #dddddd;
}
.bootstrap-ddshop .panel-primary {
  border-color: #337ab7;
}
.bootstrap-ddshop .panel-primary > .panel-heading {
  color: #ffffff;
  background-color: #337ab7;
  border-color: #337ab7;
}
.bootstrap-ddshop .panel-primary > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #337ab7;
}
.bootstrap-ddshop .panel-primary > .panel-heading .badge {
  color: #337ab7;
  background-color: #ffffff;
}
.bootstrap-ddshop .panel-primary > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #337ab7;
}
.bootstrap-ddshop .panel-success {
  border-color: #d6e9c6;
}
.bootstrap-ddshop .panel-success > .panel-heading {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #d6e9c6;
}
.bootstrap-ddshop .panel-success > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #d6e9c6;
}
.bootstrap-ddshop .panel-success > .panel-heading .badge {
  color: #dff0d8;
  background-color: #3c763d;
}
.bootstrap-ddshop .panel-success > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #d6e9c6;
}
.bootstrap-ddshop .panel-info {
  border-color: #bce8f1;
}
.bootstrap-ddshop .panel-info > .panel-heading {
  color: #31708f;
  background-color: #d9edf7;
  border-color: #bce8f1;
}
.bootstrap-ddshop .panel-info > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #bce8f1;
}
.bootstrap-ddshop .panel-info > .panel-heading .badge {
  color: #d9edf7;
  background-color: #31708f;
}
.bootstrap-ddshop .panel-info > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #bce8f1;
}
.bootstrap-ddshop .panel-warning {
  border-color: #faebcc;
}
.bootstrap-ddshop .panel-warning > .panel-heading {
  color: #8a6d3b;
  background-color: #fcf8e3;
  border-color: #faebcc;
}
.bootstrap-ddshop .panel-warning > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #faebcc;
}
.bootstrap-ddshop .panel-warning > .panel-heading .badge {
  color: #fcf8e3;
  background-color: #8a6d3b;
}
.bootstrap-ddshop .panel-warning > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #faebcc;
}
.bootstrap-ddshop .panel-danger {
  border-color: #ebccd1;
}
.bootstrap-ddshop .panel-danger > .panel-heading {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
}
.bootstrap-ddshop .panel-danger > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #ebccd1;
}
.bootstrap-ddshop .panel-danger > .panel-heading .badge {
  color: #f2dede;
  background-color: #a94442;
}
.bootstrap-ddshop .panel-danger > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #ebccd1;
}
.bootstrap-ddshop .embed-responsive {
  position: relative;
  display: block;
  height: 0;
  padding: 0;
  overflow: hidden;
}
.bootstrap-ddshop .embed-responsive .embed-responsive-item,
.bootstrap-ddshop .embed-responsive iframe,
.bootstrap-ddshop .embed-responsive embed,
.bootstrap-ddshop .embed-responsive object,
.bootstrap-ddshop .embed-responsive video {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  height: 100%;
  width: 100%;
  border: 0;
}
.bootstrap-ddshop .embed-responsive-16by9 {
  padding-bottom: 56.25%;
}
.bootstrap-ddshop .embed-responsive-4by3 {
  padding-bottom: 75%;
}
.bootstrap-ddshop .well {
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: #f5f5f5;
  border: 1px solid #e3e3e3;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
}
.bootstrap-ddshop .well blockquote {
  border-color: #ddd;
  border-color: rgba(0, 0, 0, 0.15);
}
.bootstrap-ddshop .well-lg {
  padding: 24px;
  border-radius: 6px;
}
.bootstrap-ddshop .well-sm {
  padding: 9px;
  border-radius: 3px;
}
.bootstrap-ddshop .close {
  float: right;
  font-size: 21px;
  font-weight: bold;
  line-height: 1;
  color: #000000;
  text-shadow: 0 1px 0 #ffffff;
  opacity: 0.2;
  filter: alpha(opacity=20);
}
.bootstrap-ddshop .close:hover,
.bootstrap-ddshop .close:focus {
  color: #000000;
  text-decoration: none;
  cursor: pointer;
  opacity: 0.5;
  filter: alpha(opacity=50);
}
.bootstrap-ddshop button.close {
  padding: 0;
  cursor: pointer;
  background: transparent;
  border: 0;
  -webkit-appearance: none;
}
.bootstrap-ddshop .modal-open {
  overflow: hidden;
}
.bootstrap-ddshop .modal {
  display: none;
  overflow: hidden;
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1050;
  -webkit-overflow-scrolling: touch;
  outline: 0;
}
.bootstrap-ddshop .modal.fade .modal-dialog {
  -webkit-transform: translate(0, -25%);
  -ms-transform: translate(0, -25%);
  -o-transform: translate(0, -25%);
  transform: translate(0, -25%);
  -webkit-transition: -webkit-transform 0.3s ease-out;
  -o-transition: -o-transform 0.3s ease-out;
  transition: transform 0.3s ease-out;
}
.bootstrap-ddshop .modal.in .modal-dialog {
  -webkit-transform: translate(0, 0);
  -ms-transform: translate(0, 0);
  -o-transform: translate(0, 0);
  transform: translate(0, 0);
}
.bootstrap-ddshop .modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto;
}
.bootstrap-ddshop .modal-dialog {
  position: relative;
  width: auto;
  margin: 10px;
}
.bootstrap-ddshop .modal-content {
  position: relative;
  background-color: #ffffff;
  border: 1px solid #999999;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 6px;
  -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  outline: 0;
}
.bootstrap-ddshop .modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1040;
  background-color: #000000;
}
.bootstrap-ddshop .modal-backdrop.fade {
  opacity: 0;
  filter: alpha(opacity=0);
}
.bootstrap-ddshop .modal-backdrop.in {
  opacity: 0.5;
  filter: alpha(opacity=50);
}
.bootstrap-ddshop .modal-header {
  padding: 15px;
  border-bottom: 1px solid #e5e5e5;
  min-height: 16.42857143px;
}
.bootstrap-ddshop .modal-header .close {
  margin-top: -2px;
}
.bootstrap-ddshop .modal-title {
  margin: 0;
  line-height: 1.42857143;
}
.bootstrap-ddshop .modal-body {
  position: relative;
  padding: 15px;
}
.bootstrap-ddshop .modal-footer {
  padding: 15px;
  text-align: right;
  border-top: 1px solid #e5e5e5;
}
.bootstrap-ddshop .modal-footer .btn + .btn {
  margin-left: 5px;
  margin-bottom: 0;
}
.bootstrap-ddshop .modal-footer .btn-group .btn + .btn {
  margin-left: -1px;
}
.bootstrap-ddshop .modal-footer .btn-block + .btn-block {
  margin-left: 0;
}
.bootstrap-ddshop .modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll;
}
@media (min-width: 768px) {
  .bootstrap-ddshop .modal-dialog {
    width: 600px;
    margin: 30px auto;
  }
  .bootstrap-ddshop .modal-content {
    -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
  }
  .bootstrap-ddshop .modal-sm {
    width: 300px;
  }
}
@media (min-width: 992px) {
  .bootstrap-ddshop .modal-lg {
    width: 900px;
  }
}
.bootstrap-ddshop .tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 12px;
  font-weight: normal;
  line-height: 1.4;
  opacity: 0;
  filter: alpha(opacity=0);
}
.bootstrap-ddshop .tooltip.in {
  opacity: 0.9;
  filter: alpha(opacity=90);
}
.bootstrap-ddshop .tooltip.top {
  margin-top: -3px;
  padding: 5px 0;
}
.bootstrap-ddshop .tooltip.right {
  margin-left: 3px;
  padding: 0 5px;
}
.bootstrap-ddshop .tooltip.bottom {
  margin-top: 3px;
  padding: 5px 0;
}
.bootstrap-ddshop .tooltip.left {
  margin-left: -3px;
  padding: 0 5px;
}
.bootstrap-ddshop .tooltip-inner {
  max-width: 200px;
  padding: 3px 8px;
  color: #ffffff;
  text-align: center;
  text-decoration: none;
  background-color: #000000;
  border-radius: 4px;
}
.bootstrap-ddshop .tooltip-arrow {
  position: absolute;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.bootstrap-ddshop .tooltip.top .tooltip-arrow {
  bottom: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000000;
}
.bootstrap-ddshop .tooltip.top-left .tooltip-arrow {
  bottom: 0;
  right: 5px;
  margin-bottom: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000000;
}
.bootstrap-ddshop .tooltip.top-right .tooltip-arrow {
  bottom: 0;
  left: 5px;
  margin-bottom: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000000;
}
.bootstrap-ddshop .tooltip.right .tooltip-arrow {
  top: 50%;
  left: 0;
  margin-top: -5px;
  border-width: 5px 5px 5px 0;
  border-right-color: #000000;
}
.bootstrap-ddshop .tooltip.left .tooltip-arrow {
  top: 50%;
  right: 0;
  margin-top: -5px;
  border-width: 5px 0 5px 5px;
  border-left-color: #000000;
}
.bootstrap-ddshop .tooltip.bottom .tooltip-arrow {
  top: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000000;
}
.bootstrap-ddshop .tooltip.bottom-left .tooltip-arrow {
  top: 0;
  right: 5px;
  margin-top: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000000;
}
.bootstrap-ddshop .tooltip.bottom-right .tooltip-arrow {
  top: 0;
  left: 5px;
  margin-top: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000000;
}
.bootstrap-ddshop .popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: none;
  max-width: 276px;
  padding: 1px;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 14px;
  font-weight: normal;
  line-height: 1.42857143;
  text-align: left;
  background-color: #ffffff;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  border: 1px solid #cccccc;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 6px;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  white-space: normal;
}
.bootstrap-ddshop .popover.top {
  margin-top: -10px;
}
.bootstrap-ddshop .popover.right {
  margin-left: 10px;
}
.bootstrap-ddshop .popover.bottom {
  margin-top: 10px;
}
.bootstrap-ddshop .popover.left {
  margin-left: -10px;
}
.bootstrap-ddshop .popover-title {
  margin: 0;
  padding: 8px 14px;
  font-size: 14px;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-radius: 5px 5px 0 0;
}
.bootstrap-ddshop .popover-content {
  padding: 9px 14px;
}
.bootstrap-ddshop .popover > .arrow,
.bootstrap-ddshop .popover > .arrow:after {
  position: absolute;
  display: block;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.bootstrap-ddshop .popover > .arrow {
  border-width: 11px;
}
.bootstrap-ddshop .popover > .arrow:after {
  border-width: 10px;
  content: "";
}
.bootstrap-ddshop .popover.top > .arrow {
  left: 50%;
  margin-left: -11px;
  border-bottom-width: 0;
  border-top-color: #999999;
  border-top-color: rgba(0, 0, 0, 0.25);
  bottom: -11px;
}
.bootstrap-ddshop .popover.top > .arrow:after {
  content: " ";
  bottom: 1px;
  margin-left: -10px;
  border-bottom-width: 0;
  border-top-color: #ffffff;
}
.bootstrap-ddshop .popover.right > .arrow {
  top: 50%;
  left: -11px;
  margin-top: -11px;
  border-left-width: 0;
  border-right-color: #999999;
  border-right-color: rgba(0, 0, 0, 0.25);
}
.bootstrap-ddshop .popover.right > .arrow:after {
  content: " ";
  left: 1px;
  bottom: -10px;
  border-left-width: 0;
  border-right-color: #ffffff;
}
.bootstrap-ddshop .popover.bottom > .arrow {
  left: 50%;
  margin-left: -11px;
  border-top-width: 0;
  border-bottom-color: #999999;
  border-bottom-color: rgba(0, 0, 0, 0.25);
  top: -11px;
}
.bootstrap-ddshop .popover.bottom > .arrow:after {
  content: " ";
  top: 1px;
  margin-left: -10px;
  border-top-width: 0;
  border-bottom-color: #ffffff;
}
.bootstrap-ddshop .popover.left > .arrow {
  top: 50%;
  right: -11px;
  margin-top: -11px;
  border-right-width: 0;
  border-left-color: #999999;
  border-left-color: rgba(0, 0, 0, 0.25);
}
.bootstrap-ddshop .popover.left > .arrow:after {
  content: " ";
  right: 1px;
  border-right-width: 0;
  border-left-color: #ffffff;
  bottom: -10px;
}
.bootstrap-ddshop .carousel {
  position: relative;
}
.bootstrap-ddshop .carousel-inner {
  position: relative;
  overflow: hidden;
  width: 100%;
}
.bootstrap-ddshop .carousel-inner > .item {
  display: none;
  position: relative;
  -webkit-transition: 0.6s ease-in-out left;
  -o-transition: 0.6s ease-in-out left;
  transition: 0.6s ease-in-out left;
}
.bootstrap-ddshop .carousel-inner > .item > img,
.bootstrap-ddshop .carousel-inner > .item > a > img {
  line-height: 1;
}
@media all and (transform-3d), (-webkit-transform-3d) {
  .bootstrap-ddshop .carousel-inner > .item {
    -webkit-transition: -webkit-transform 0.6s ease-in-out;
    -o-transition: -o-transform 0.6s ease-in-out;
    transition: transform 0.6s ease-in-out;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-perspective: 1000;
    perspective: 1000;
  }
  .bootstrap-ddshop .carousel-inner > .item.next,
  .bootstrap-ddshop .carousel-inner > .item.active.right {
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    left: 0;
  }
  .bootstrap-ddshop .carousel-inner > .item.prev,
  .bootstrap-ddshop .carousel-inner > .item.active.left {
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
    left: 0;
  }
  .bootstrap-ddshop .carousel-inner > .item.next.left,
  .bootstrap-ddshop .carousel-inner > .item.prev.right,
  .bootstrap-ddshop .carousel-inner > .item.active {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    left: 0;
  }
}
.bootstrap-ddshop .carousel-inner > .active,
.bootstrap-ddshop .carousel-inner > .next,
.bootstrap-ddshop .carousel-inner > .prev {
  display: block;
}
.bootstrap-ddshop .carousel-inner > .active {
  left: 0;
}
.bootstrap-ddshop .carousel-inner > .next,
.bootstrap-ddshop .carousel-inner > .prev {
  position: absolute;
  top: 0;
  width: 100%;
}
.bootstrap-ddshop .carousel-inner > .next {
  left: 100%;
}
.bootstrap-ddshop .carousel-inner > .prev {
  left: -100%;
}
.bootstrap-ddshop .carousel-inner > .next.left,
.bootstrap-ddshop .carousel-inner > .prev.right {
  left: 0;
}
.bootstrap-ddshop .carousel-inner > .active.left {
  left: -100%;
}
.bootstrap-ddshop .carousel-inner > .active.right {
  left: 100%;
}
.bootstrap-ddshop .carousel-control {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  width: 15%;
  opacity: 0.5;
  filter: alpha(opacity=50);
  font-size: 20px;
  color: #ffffff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
}
.bootstrap-ddshop .carousel-control.left {
  background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
  background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
  background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, 0.5)), to(rgba(0, 0, 0, 0.0001)));
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
}
.bootstrap-ddshop .carousel-control.right {
  left: auto;
  right: 0;
  background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
  background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
  background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, 0.0001)), to(rgba(0, 0, 0, 0.5)));
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);
}
.bootstrap-ddshop .carousel-control:hover,
.bootstrap-ddshop .carousel-control:focus {
  outline: 0;
  color: #ffffff;
  text-decoration: none;
  opacity: 0.9;
  filter: alpha(opacity=90);
}
.bootstrap-ddshop .carousel-control .icon-prev,
.bootstrap-ddshop .carousel-control .icon-next,
.bootstrap-ddshop .carousel-control .glyphicon-chevron-left,
.bootstrap-ddshop .carousel-control .glyphicon-chevron-right {
  position: absolute;
  top: 50%;
  z-index: 5;
  display: inline-block;
}
.bootstrap-ddshop .carousel-control .icon-prev,
.bootstrap-ddshop .carousel-control .glyphicon-chevron-left {
  left: 50%;
  margin-left: -10px;
}
.bootstrap-ddshop .carousel-control .icon-next,
.bootstrap-ddshop .carousel-control .glyphicon-chevron-right {
  right: 50%;
  margin-right: -10px;
}
.bootstrap-ddshop .carousel-control .icon-prev,
.bootstrap-ddshop .carousel-control .icon-next {
  width: 20px;
  height: 20px;
  margin-top: -10px;
  line-height: 1;
  font-family: serif;
}
.bootstrap-ddshop .carousel-control .icon-prev:before {
  content: '\2039';
}
.bootstrap-ddshop .carousel-control .icon-next:before {
  content: '\203a';
}
.bootstrap-ddshop .carousel-indicators {
  position: absolute;
  bottom: 10px;
  left: 50%;
  z-index: 15;
  width: 60%;
  margin-left: -30%;
  padding-left: 0;
  list-style: none;
  text-align: center;
}
.bootstrap-ddshop .carousel-indicators li {
  display: inline-block;
  width: 10px;
  height: 10px;
  margin: 1px;
  text-indent: -999px;
  border: 1px solid #ffffff;
  border-radius: 10px;
  cursor: pointer;
  background-color: #000 \9;
  background-color: rgba(0, 0, 0, 0);
}
.bootstrap-ddshop .carousel-indicators .active {
  margin: 0;
  width: 12px;
  height: 12px;
  background-color: #ffffff;
}
.bootstrap-ddshop .carousel-caption {
  position: absolute;
  left: 15%;
  right: 15%;
  bottom: 20px;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #ffffff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
}
.bootstrap-ddshop .carousel-caption .btn {
  text-shadow: none;
}
@media screen and (min-width: 768px) {
  .bootstrap-ddshop .carousel-control .glyphicon-chevron-left,
  .bootstrap-ddshop .carousel-control .glyphicon-chevron-right,
  .bootstrap-ddshop .carousel-control .icon-prev,
  .bootstrap-ddshop .carousel-control .icon-next {
    width: 30px;
    height: 30px;
    margin-top: -15px;
    font-size: 30px;
  }
  .bootstrap-ddshop .carousel-control .glyphicon-chevron-left,
  .bootstrap-ddshop .carousel-control .icon-prev {
    margin-left: -15px;
  }
  .bootstrap-ddshop .carousel-control .glyphicon-chevron-right,
  .bootstrap-ddshop .carousel-control .icon-next {
    margin-right: -15px;
  }
  .bootstrap-ddshop .carousel-caption {
    left: 20%;
    right: 20%;
    padding-bottom: 30px;
  }
  .bootstrap-ddshop .carousel-indicators {
    bottom: 20px;
  }
}
.bootstrap-ddshop .clearfix:before,
.bootstrap-ddshop .clearfix:after,
.bootstrap-ddshop .dl-horizontal dd:before,
.bootstrap-ddshop .dl-horizontal dd:after,
.bootstrap-ddshop .container:before,
.bootstrap-ddshop .container:after,
.bootstrap-ddshop .container-fluid:before,
.bootstrap-ddshop .container-fluid:after,
.bootstrap-ddshop .row:before,
.bootstrap-ddshop .row:after,
.bootstrap-ddshop .form-horizontal .form-group:before,
.bootstrap-ddshop .form-horizontal .form-group:after,
.bootstrap-ddshop .btn-toolbar:before,
.bootstrap-ddshop .btn-toolbar:after,
.bootstrap-ddshop .btn-group-vertical > .btn-group:before,
.bootstrap-ddshop .btn-group-vertical > .btn-group:after,
.bootstrap-ddshop .nav:before,
.bootstrap-ddshop .nav:after,
.bootstrap-ddshop .navbar:before,
.bootstrap-ddshop .navbar:after,
.bootstrap-ddshop .navbar-header:before,
.bootstrap-ddshop .navbar-header:after,
.bootstrap-ddshop .navbar-collapse:before,
.bootstrap-ddshop .navbar-collapse:after,
.bootstrap-ddshop .pager:before,
.bootstrap-ddshop .pager:after,
.bootstrap-ddshop .panel-body:before,
.bootstrap-ddshop .panel-body:after,
.bootstrap-ddshop .modal-footer:before,
.bootstrap-ddshop .modal-footer:after {
  content: " ";
  display: table;
}
.bootstrap-ddshop .clearfix:after,
.bootstrap-ddshop .dl-horizontal dd:after,
.bootstrap-ddshop .container:after,
.bootstrap-ddshop .container-fluid:after,
.bootstrap-ddshop .row:after,
.bootstrap-ddshop .form-horizontal .form-group:after,
.bootstrap-ddshop .btn-toolbar:after,
.bootstrap-ddshop .btn-group-vertical > .btn-group:after,
.bootstrap-ddshop .nav:after,
.bootstrap-ddshop .navbar:after,
.bootstrap-ddshop .navbar-header:after,
.bootstrap-ddshop .navbar-collapse:after,
.bootstrap-ddshop .pager:after,
.bootstrap-ddshop .panel-body:after,
.bootstrap-ddshop .modal-footer:after {
  clear: both;
}
.bootstrap-ddshop .center-block {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.bootstrap-ddshop .pull-right {
  float: right !important;
}
.bootstrap-ddshop .pull-left {
  float: left !important;
}
.bootstrap-ddshop .hide {
  display: none !important;
}
.bootstrap-ddshop .show {
  display: block !important;
}
.bootstrap-ddshop .invisible {
  visibility: hidden;
}
.bootstrap-ddshop .text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}
.bootstrap-ddshop .hidden {
  display: none !important;
}
.bootstrap-ddshop .affix {
  position: fixed;
}
@-ms-viewport {
  width: device-width;
}
.bootstrap-ddshop .visible-xs,
.bootstrap-ddshop .visible-sm,
.bootstrap-ddshop .visible-md,
.bootstrap-ddshop .visible-lg {
  display: none !important;
}
.bootstrap-ddshop .visible-xs-block,
.bootstrap-ddshop .visible-xs-inline,
.bootstrap-ddshop .visible-xs-inline-block,
.bootstrap-ddshop .visible-sm-block,
.bootstrap-ddshop .visible-sm-inline,
.bootstrap-ddshop .visible-sm-inline-block,
.bootstrap-ddshop .visible-md-block,
.bootstrap-ddshop .visible-md-inline,
.bootstrap-ddshop .visible-md-inline-block,
.bootstrap-ddshop .visible-lg-block,
.bootstrap-ddshop .visible-lg-inline,
.bootstrap-ddshop .visible-lg-inline-block {
  display: none !important;
}
@media (max-width: 767px) {
  .bootstrap-ddshop .visible-xs {
    display: block !important;
  }
  .bootstrap-ddshop table.visible-xs {
    display: table;
  }
  .bootstrap-ddshop tr.visible-xs {
    display: table-row !important;
  }
  .bootstrap-ddshop th.visible-xs,
  .bootstrap-ddshop td.visible-xs {
    display: table-cell !important;
  }
}
@media (max-width: 767px) {
  .bootstrap-ddshop .visible-xs-block {
    display: block !important;
  }
}
@media (max-width: 767px) {
  .bootstrap-ddshop .visible-xs-inline {
    display: inline !important;
  }
}
@media (max-width: 767px) {
  .bootstrap-ddshop .visible-xs-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .bootstrap-ddshop .visible-sm {
    display: block !important;
  }
  .bootstrap-ddshop table.visible-sm {
    display: table;
  }
  .bootstrap-ddshop tr.visible-sm {
    display: table-row !important;
  }
  .bootstrap-ddshop th.visible-sm,
  .bootstrap-ddshop td.visible-sm {
    display: table-cell !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .bootstrap-ddshop .visible-sm-block {
    display: block !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .bootstrap-ddshop .visible-sm-inline {
    display: inline !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .bootstrap-ddshop .visible-sm-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .bootstrap-ddshop .visible-md {
    display: block !important;
  }
  .bootstrap-ddshop table.visible-md {
    display: table;
  }
  .bootstrap-ddshop tr.visible-md {
    display: table-row !important;
  }
  .bootstrap-ddshop th.visible-md,
  .bootstrap-ddshop td.visible-md {
    display: table-cell !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .bootstrap-ddshop .visible-md-block {
    display: block !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .bootstrap-ddshop .visible-md-inline {
    display: inline !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .bootstrap-ddshop .visible-md-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 1200px) {
  .bootstrap-ddshop .visible-lg {
    display: block !important;
  }
  .bootstrap-ddshop table.visible-lg {
    display: table;
  }
  .bootstrap-ddshop tr.visible-lg {
    display: table-row !important;
  }
  .bootstrap-ddshop th.visible-lg,
  .bootstrap-ddshop td.visible-lg {
    display: table-cell !important;
  }
}
@media (min-width: 1200px) {
  .bootstrap-ddshop .visible-lg-block {
    display: block !important;
  }
}
@media (min-width: 1200px) {
  .bootstrap-ddshop .visible-lg-inline {
    display: inline !important;
  }
}
@media (min-width: 1200px) {
  .bootstrap-ddshop .visible-lg-inline-block {
    display: inline-block !important;
  }
}
@media (max-width: 767px) {
  .bootstrap-ddshop .hidden-xs {
    display: none !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .bootstrap-ddshop .hidden-sm {
    display: none !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .bootstrap-ddshop .hidden-md {
    display: none !important;
  }
}
@media (min-width: 1200px) {
  .bootstrap-ddshop .hidden-lg {
    display: none !important;
  }
}
.bootstrap-ddshop .visible-print {
  display: none !important;
}
@media print {
  .bootstrap-ddshop .visible-print {
    display: block !important;
  }
  .bootstrap-ddshop table.visible-print {
    display: table;
  }
  .bootstrap-ddshop tr.visible-print {
    display: table-row !important;
  }
  .bootstrap-ddshop th.visible-print,
  .bootstrap-ddshop td.visible-print {
    display: table-cell !important;
  }
}
.bootstrap-ddshop .visible-print-block {
  display: none !important;
}
@media print {
  .bootstrap-ddshop .visible-print-block {
    display: block !important;
  }
}
.bootstrap-ddshop .visible-print-inline {
  display: none !important;
}
@media print {
  .bootstrap-ddshop .visible-print-inline {
    display: inline !important;
  }
}
.bootstrap-ddshop .visible-print-inline-block {
  display: none !important;
}
@media print {
  .bootstrap-ddshop .visible-print-inline-block {
    display: inline-block !important;
  }
}
@media print {
  .bootstrap-ddshop .hidden-print {
    display: none !important;
  }
}
.bootstrap-ddshop .btn-default,
.bootstrap-ddshop .btn-primary,
.bootstrap-ddshop .btn-success,
.bootstrap-ddshop .btn-info,
.bootstrap-ddshop .btn-warning,
.bootstrap-ddshop .btn-danger {
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15), 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15), 0 1px 1px rgba(0, 0, 0, 0.075);
}
.bootstrap-ddshop .btn-default:active,
.bootstrap-ddshop .btn-primary:active,
.bootstrap-ddshop .btn-success:active,
.bootstrap-ddshop .btn-info:active,
.bootstrap-ddshop .btn-warning:active,
.bootstrap-ddshop .btn-danger:active,
.bootstrap-ddshop .btn-default.active,
.bootstrap-ddshop .btn-primary.active,
.bootstrap-ddshop .btn-success.active,
.bootstrap-ddshop .btn-info.active,
.bootstrap-ddshop .btn-warning.active,
.bootstrap-ddshop .btn-danger.active {
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}
.bootstrap-ddshop .btn-default .badge,
.bootstrap-ddshop .btn-primary .badge,
.bootstrap-ddshop .btn-success .badge,
.bootstrap-ddshop .btn-info .badge,
.bootstrap-ddshop .btn-warning .badge,
.bootstrap-ddshop .btn-danger .badge {
  text-shadow: none;
}
.bootstrap-ddshop .btn:active,
.bootstrap-ddshop .btn.active {
  background-image: none;
}
.bootstrap-ddshop .btn-default {
  background-image: -webkit-linear-gradient(top, #ffffff 0%, #e0e0e0 100%);
  background-image: -o-linear-gradient(top, #ffffff 0%, #e0e0e0 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#e0e0e0));
  background-image: linear-gradient(to bottom, #ffffff 0%, #e0e0e0 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe0e0e0', GradientType=0);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
  background-repeat: repeat-x;
  border-color: #dbdbdb;
  text-shadow: 0 1px 0 #fff;
  border-color: #ccc;
}
.bootstrap-ddshop .btn-default:hover,
.bootstrap-ddshop .btn-default:focus {
  background-color: #e0e0e0;
  background-position: 0 -15px;
}
.bootstrap-ddshop .btn-default:active,
.bootstrap-ddshop .btn-default.active {
  background-color: #e0e0e0;
  border-color: #dbdbdb;
}
.bootstrap-ddshop .btn-default.disabled,
.bootstrap-ddshop .btn-default:disabled,
.bootstrap-ddshop .btn-default[disabled] {
  background-color: #e0e0e0;
  background-image: none;
}
.bootstrap-ddshop .btn-primary {
  background-image: -webkit-linear-gradient(top, #337ab7 0%, #265a88 100%);
  background-image: -o-linear-gradient(top, #337ab7 0%, #265a88 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, from(#337ab7), to(#265a88));
  background-image: linear-gradient(to bottom, #337ab7 0%, #265a88 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff337ab7', endColorstr='#ff265a88', GradientType=0);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
  background-repeat: repeat-x;
  border-color: #245580;
}
.bootstrap-ddshop .btn-primary:hover,
.bootstrap-ddshop .btn-primary:focus {
  background-color: #265a88;
  background-position: 0 -15px;
}
.bootstrap-ddshop .btn-primary:active,
.bootstrap-ddshop .btn-primary.active {
  background-color: #265a88;
  border-color: #245580;
}
.bootstrap-ddshop .btn-primary.disabled,
.bootstrap-ddshop .btn-primary:disabled,
.bootstrap-ddshop .btn-primary[disabled] {
  background-color: #265a88;
  background-image: none;
}
.bootstrap-ddshop .btn-success {
  background-image: -webkit-linear-gradient(top, #5cb85c 0%, #419641 100%);
  background-image: -o-linear-gradient(top, #5cb85c 0%, #419641 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, from(#5cb85c), to(#419641));
  background-image: linear-gradient(to bottom, #5cb85c 0%, #419641 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5cb85c', endColorstr='#ff419641', GradientType=0);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
  background-repeat: repeat-x;
  border-color: #3e8f3e;
}
.bootstrap-ddshop .btn-success:hover,
.bootstrap-ddshop .btn-success:focus {
  background-color: #419641;
  background-position: 0 -15px;
}
.bootstrap-ddshop .btn-success:active,
.bootstrap-ddshop .btn-success.active {
  background-color: #419641;
  border-color: #3e8f3e;
}
.bootstrap-ddshop .btn-success.disabled,
.bootstrap-ddshop .btn-success:disabled,
.bootstrap-ddshop .btn-success[disabled] {
  background-color: #419641;
  background-image: none;
}
.bootstrap-ddshop .btn-info {
  background-image: -webkit-linear-gradient(top, #5bc0de 0%, #2aabd2 100%);
  background-image: -o-linear-gradient(top, #5bc0de 0%, #2aabd2 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, from(#5bc0de), to(#2aabd2));
  background-image: linear-gradient(to bottom, #5bc0de 0%, #2aabd2 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5bc0de', endColorstr='#ff2aabd2', GradientType=0);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
  background-repeat: repeat-x;
  border-color: #28a4c9;
}
.bootstrap-ddshop .btn-info:hover,
.bootstrap-ddshop .btn-info:focus {
  background-color: #2aabd2;
  background-position: 0 -15px;
}
.bootstrap-ddshop .btn-info:active,
.bootstrap-ddshop .btn-info.active {
  background-color: #2aabd2;
  border-color: #28a4c9;
}
.bootstrap-ddshop .btn-info.disabled,
.bootstrap-ddshop .btn-info:disabled,
.bootstrap-ddshop .btn-info[disabled] {
  background-color: #2aabd2;
  background-image: none;
}
.bootstrap-ddshop .btn-warning {
  background-image: -webkit-linear-gradient(top, #f0ad4e 0%, #eb9316 100%);
  background-image: -o-linear-gradient(top, #f0ad4e 0%, #eb9316 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, from(#f0ad4e), to(#eb9316));
  background-image: linear-gradient(to bottom, #f0ad4e 0%, #eb9316 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff0ad4e', endColorstr='#ffeb9316', GradientType=0);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
  background-repeat: repeat-x;
  border-color: #e38d13;
}
.bootstrap-ddshop .btn-warning:hover,
.bootstrap-ddshop .btn-warning:focus {
  background-color: #eb9316;
  background-position: 0 -15px;
}
.bootstrap-ddshop .btn-warning:active,
.bootstrap-ddshop .btn-warning.active {
  background-color: #eb9316;
  border-color: #e38d13;
}
.bootstrap-ddshop .btn-warning.disabled,
.bootstrap-ddshop .btn-warning:disabled,
.bootstrap-ddshop .btn-warning[disabled] {
  background-color: #eb9316;
  background-image: none;
}
.bootstrap-ddshop .btn-danger {
  background-image: -webkit-linear-gradient(top, #d9534f 0%, #c12e2a 100%);
  background-image: -o-linear-gradient(top, #d9534f 0%, #c12e2a 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, from(#d9534f), to(#c12e2a));
  background-image: linear-gradient(to bottom, #d9534f 0%, #c12e2a 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffd9534f', endColorstr='#ffc12e2a', GradientType=0);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
  background-repeat: repeat-x;
  border-color: #b92c28;
}
.bootstrap-ddshop .btn-danger:hover,
.bootstrap-ddshop .btn-danger:focus {
  background-color: #c12e2a;
  background-position: 0 -15px;
}
.bootstrap-ddshop .btn-danger:active,
.bootstrap-ddshop .btn-danger.active {
  background-color: #c12e2a;
  border-color: #b92c28;
}
.bootstrap-ddshop .btn-danger.disabled,
.bootstrap-ddshop .btn-danger:disabled,
.bootstrap-ddshop .btn-danger[disabled] {
  background-color: #c12e2a;
  background-image: none;
}
.bootstrap-ddshop .thumbnail,
.bootstrap-ddshop .img-thumbnail {
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.075);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.075);
}
.bootstrap-ddshop .dropdown-menu > li > a:hover,
.bootstrap-ddshop .dropdown-menu > li > a:focus {
  background-image: -webkit-linear-gradient(top, #f5f5f5 0%, #e8e8e8 100%);
  background-image: -o-linear-gradient(top, #f5f5f5 0%, #e8e8e8 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, from(#f5f5f5), to(#e8e8e8));
  background-image: linear-gradient(to bottom, #f5f5f5 0%, #e8e8e8 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff5f5f5', endColorstr='#ffe8e8e8', GradientType=0);
  background-color: #e8e8e8;
}
.bootstrap-ddshop .dropdown-menu > .active > a,
.bootstrap-ddshop .dropdown-menu > .active > a:hover,
.bootstrap-ddshop .dropdown-menu > .active > a:focus {
  background-image: -webkit-linear-gradient(top, #337ab7 0%, #2e6da4 100%);
  background-image: -o-linear-gradient(top, #337ab7 0%, #2e6da4 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, from(#337ab7), to(#2e6da4));
  background-image: linear-gradient(to bottom, #337ab7 0%, #2e6da4 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff337ab7', endColorstr='#ff2e6da4', GradientType=0);
  background-color: #2e6da4;
}
.bootstrap-ddshop .navbar-default {
  background-image: -webkit-linear-gradient(top, #ffffff 0%, #f8f8f8 100%);
  background-image: -o-linear-gradient(top, #ffffff 0%, #f8f8f8 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#f8f8f8));
  background-image: linear-gradient(to bottom, #ffffff 0%, #f8f8f8 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#fff8f8f8', GradientType=0);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15), 0 1px 5px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15), 0 1px 5px rgba(0, 0, 0, 0.075);
}
.bootstrap-ddshop .navbar-default .navbar-nav > .open > a,
.bootstrap-ddshop .navbar-default .navbar-nav > .active > a {
  background-image: -webkit-linear-gradient(top, #dbdbdb 0%, #e2e2e2 100%);
  background-image: -o-linear-gradient(top, #dbdbdb 0%, #e2e2e2 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, from(#dbdbdb), to(#e2e2e2));
  background-image: linear-gradient(to bottom, #dbdbdb 0%, #e2e2e2 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffdbdbdb', endColorstr='#ffe2e2e2', GradientType=0);
  -webkit-box-shadow: inset 0 3px 9px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 3px 9px rgba(0, 0, 0, 0.075);
}
.bootstrap-ddshop .navbar-brand,
.bootstrap-ddshop .navbar-nav > li > a {
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.25);
}
.bootstrap-ddshop .navbar-inverse {
  background-image: -webkit-linear-gradient(top, #3c3c3c 0%, #222222 100%);
  background-image: -o-linear-gradient(top, #3c3c3c 0%, #222222 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, from(#3c3c3c), to(#222222));
  background-image: linear-gradient(to bottom, #3c3c3c 0%, #222222 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff3c3c3c', endColorstr='#ff222222', GradientType=0);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
}
.bootstrap-ddshop .navbar-inverse .navbar-nav > .open > a,
.bootstrap-ddshop .navbar-inverse .navbar-nav > .active > a {
  background-image: -webkit-linear-gradient(top, #080808 0%, #0f0f0f 100%);
  background-image: -o-linear-gradient(top, #080808 0%, #0f0f0f 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, from(#080808), to(#0f0f0f));
  background-image: linear-gradient(to bottom, #080808 0%, #0f0f0f 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff080808', endColorstr='#ff0f0f0f', GradientType=0);
  -webkit-box-shadow: inset 0 3px 9px rgba(0, 0, 0, 0.25);
  box-shadow: inset 0 3px 9px rgba(0, 0, 0, 0.25);
}
.bootstrap-ddshop .navbar-inverse .navbar-brand,
.bootstrap-ddshop .navbar-inverse .navbar-nav > li > a {
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
}
.bootstrap-ddshop .navbar-static-top,
.bootstrap-ddshop .navbar-fixed-top,
.bootstrap-ddshop .navbar-fixed-bottom {
  border-radius: 0;
}
@media (max-width: 767px) {
  .bootstrap-ddshop .navbar .navbar-nav .open .dropdown-menu > .active > a,
  .bootstrap-ddshop .navbar .navbar-nav .open .dropdown-menu > .active > a:hover,
  .bootstrap-ddshop .navbar .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #fff;
    background-image: -webkit-linear-gradient(top, #337ab7 0%, #2e6da4 100%);
    background-image: -o-linear-gradient(top, #337ab7 0%, #2e6da4 100%);
    background-image: -webkit-gradient(linear, left top, left bottom, from(#337ab7), to(#2e6da4));
    background-image: linear-gradient(to bottom, #337ab7 0%, #2e6da4 100%);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff337ab7', endColorstr='#ff2e6da4', GradientType=0);
  }
}
.bootstrap-ddshop .alert {
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.2);
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.25), 0 1px 2px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.25), 0 1px 2px rgba(0, 0, 0, 0.05);
}
.bootstrap-ddshop .alert-success {
  background-image: -webkit-linear-gradient(top, #dff0d8 0%, #c8e5bc 100%);
  background-image: -o-linear-gradient(top, #dff0d8 0%, #c8e5bc 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, from(#dff0d8), to(#c8e5bc));
  background-image: linear-gradient(to bottom, #dff0d8 0%, #c8e5bc 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffdff0d8', endColorstr='#ffc8e5bc', GradientType=0);
  border-color: #b2dba1;
}
.bootstrap-ddshop .alert-info {
  background-image: -webkit-linear-gradient(top, #d9edf7 0%, #b9def0 100%);
  background-image: -o-linear-gradient(top, #d9edf7 0%, #b9def0 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, from(#d9edf7), to(#b9def0));
  background-image: linear-gradient(to bottom, #d9edf7 0%, #b9def0 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffd9edf7', endColorstr='#ffb9def0', GradientType=0);
  border-color: #9acfea;
}
.bootstrap-ddshop .alert-warning {
  background-image: -webkit-linear-gradient(top, #fcf8e3 0%, #f8efc0 100%);
  background-image: -o-linear-gradient(top, #fcf8e3 0%, #f8efc0 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, from(#fcf8e3), to(#f8efc0));
  background-image: linear-gradient(to bottom, #fcf8e3 0%, #f8efc0 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fffcf8e3', endColorstr='#fff8efc0', GradientType=0);
  border-color: #f5e79e;
}
.bootstrap-ddshop .alert-danger {
  background-image: -webkit-linear-gradient(top, #f2dede 0%, #e7c3c3 100%);
  background-image: -o-linear-gradient(top, #f2dede 0%, #e7c3c3 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, from(#f2dede), to(#e7c3c3));
  background-image: linear-gradient(to bottom, #f2dede 0%, #e7c3c3 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff2dede', endColorstr='#ffe7c3c3', GradientType=0);
  border-color: #dca7a7;
}
.bootstrap-ddshop .progress {
  background-image: -webkit-linear-gradient(top, #ebebeb 0%, #f5f5f5 100%);
  background-image: -o-linear-gradient(top, #ebebeb 0%, #f5f5f5 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, from(#ebebeb), to(#f5f5f5));
  background-image: linear-gradient(to bottom, #ebebeb 0%, #f5f5f5 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffebebeb', endColorstr='#fff5f5f5', GradientType=0);
}
.bootstrap-ddshop .progress-bar {
  background-image: -webkit-linear-gradient(top, #337ab7 0%, #286090 100%);
  background-image: -o-linear-gradient(top, #337ab7 0%, #286090 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, from(#337ab7), to(#286090));
  background-image: linear-gradient(to bottom, #337ab7 0%, #286090 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff337ab7', endColorstr='#ff286090', GradientType=0);
}
.bootstrap-ddshop .progress-bar-success {
  background-image: -webkit-linear-gradient(top, #5cb85c 0%, #449d44 100%);
  background-image: -o-linear-gradient(top, #5cb85c 0%, #449d44 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, from(#5cb85c), to(#449d44));
  background-image: linear-gradient(to bottom, #5cb85c 0%, #449d44 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5cb85c', endColorstr='#ff449d44', GradientType=0);
}
.bootstrap-ddshop .progress-bar-info {
  background-image: -webkit-linear-gradient(top, #5bc0de 0%, #31b0d5 100%);
  background-image: -o-linear-gradient(top, #5bc0de 0%, #31b0d5 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, from(#5bc0de), to(#31b0d5));
  background-image: linear-gradient(to bottom, #5bc0de 0%, #31b0d5 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5bc0de', endColorstr='#ff31b0d5', GradientType=0);
}
.bootstrap-ddshop .progress-bar-warning {
  background-image: -webkit-linear-gradient(top, #f0ad4e 0%, #ec971f 100%);
  background-image: -o-linear-gradient(top, #f0ad4e 0%, #ec971f 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, from(#f0ad4e), to(#ec971f));
  background-image: linear-gradient(to bottom, #f0ad4e 0%, #ec971f 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff0ad4e', endColorstr='#ffec971f', GradientType=0);
}
.bootstrap-ddshop .progress-bar-danger {
  background-image: -webkit-linear-gradient(top, #d9534f 0%, #c9302c 100%);
  background-image: -o-linear-gradient(top, #d9534f 0%, #c9302c 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, from(#d9534f), to(#c9302c));
  background-image: linear-gradient(to bottom, #d9534f 0%, #c9302c 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffd9534f', endColorstr='#ffc9302c', GradientType=0);
}
.bootstrap-ddshop .progress-bar-striped {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.bootstrap-ddshop .list-group {
  border-radius: 4px;
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.075);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.075);
}
.bootstrap-ddshop .list-group-item.active,
.bootstrap-ddshop .list-group-item.active:hover,
.bootstrap-ddshop .list-group-item.active:focus {
  text-shadow: 0 -1px 0 #286090;
  background-image: -webkit-linear-gradient(top, #337ab7 0%, #2b669a 100%);
  background-image: -o-linear-gradient(top, #337ab7 0%, #2b669a 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, from(#337ab7), to(#2b669a));
  background-image: linear-gradient(to bottom, #337ab7 0%, #2b669a 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff337ab7', endColorstr='#ff2b669a', GradientType=0);
  border-color: #2b669a;
}
.bootstrap-ddshop .list-group-item.active .badge,
.bootstrap-ddshop .list-group-item.active:hover .badge,
.bootstrap-ddshop .list-group-item.active:focus .badge {
  text-shadow: none;
}
.bootstrap-ddshop .panel {
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
}
.bootstrap-ddshop .panel-default > .panel-heading {
  background-image: -webkit-linear-gradient(top, #f5f5f5 0%, #e8e8e8 100%);
  background-image: -o-linear-gradient(top, #f5f5f5 0%, #e8e8e8 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, from(#f5f5f5), to(#e8e8e8));
  background-image: linear-gradient(to bottom, #f5f5f5 0%, #e8e8e8 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff5f5f5', endColorstr='#ffe8e8e8', GradientType=0);
}
.bootstrap-ddshop .panel-primary > .panel-heading {
  background-image: -webkit-linear-gradient(top, #337ab7 0%, #2e6da4 100%);
  background-image: -o-linear-gradient(top, #337ab7 0%, #2e6da4 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, from(#337ab7), to(#2e6da4));
  background-image: linear-gradient(to bottom, #337ab7 0%, #2e6da4 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff337ab7', endColorstr='#ff2e6da4', GradientType=0);
}
.bootstrap-ddshop .panel-success > .panel-heading {
  background-image: -webkit-linear-gradient(top, #dff0d8 0%, #d0e9c6 100%);
  background-image: -o-linear-gradient(top, #dff0d8 0%, #d0e9c6 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, from(#dff0d8), to(#d0e9c6));
  background-image: linear-gradient(to bottom, #dff0d8 0%, #d0e9c6 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffdff0d8', endColorstr='#ffd0e9c6', GradientType=0);
}
.bootstrap-ddshop .panel-info > .panel-heading {
  background-image: -webkit-linear-gradient(top, #d9edf7 0%, #c4e3f3 100%);
  background-image: -o-linear-gradient(top, #d9edf7 0%, #c4e3f3 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, from(#d9edf7), to(#c4e3f3));
  background-image: linear-gradient(to bottom, #d9edf7 0%, #c4e3f3 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffd9edf7', endColorstr='#ffc4e3f3', GradientType=0);
}
.bootstrap-ddshop .panel-warning > .panel-heading {
  background-image: -webkit-linear-gradient(top, #fcf8e3 0%, #faf2cc 100%);
  background-image: -o-linear-gradient(top, #fcf8e3 0%, #faf2cc 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, from(#fcf8e3), to(#faf2cc));
  background-image: linear-gradient(to bottom, #fcf8e3 0%, #faf2cc 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fffcf8e3', endColorstr='#fffaf2cc', GradientType=0);
}
.bootstrap-ddshop .panel-danger > .panel-heading {
  background-image: -webkit-linear-gradient(top, #f2dede 0%, #ebcccc 100%);
  background-image: -o-linear-gradient(top, #f2dede 0%, #ebcccc 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, from(#f2dede), to(#ebcccc));
  background-image: linear-gradient(to bottom, #f2dede 0%, #ebcccc 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff2dede', endColorstr='#ffebcccc', GradientType=0);
}
.bootstrap-ddshop .well {
  background-image: -webkit-linear-gradient(top, #e8e8e8 0%, #f5f5f5 100%);
  background-image: -o-linear-gradient(top, #e8e8e8 0%, #f5f5f5 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, from(#e8e8e8), to(#f5f5f5));
  background-image: linear-gradient(to bottom, #e8e8e8 0%, #f5f5f5 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffe8e8e8', endColorstr='#fff5f5f5', GradientType=0);
  border-color: #dcdcdc;
  -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.05), 0 1px 0 rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.05), 0 1px 0 rgba(255, 255, 255, 0.1);
}

/*fix video class - blank page*/
html.video{display: block !important; position: relative !important;}

.bootstrap-ddshop a{text-decoration: none !important;}
.bootstrap-ddshop .input-group-addon {
    background: none !important;
}
/*Fix conflicting with shopify*/
/*
.page-container {
    transform: none !important;
}*/

.ddshop-widget{position: relative;margin-bottom: 20px !important;}
#ddshop-search-query{width: 100%; border: 1px solid #ddd;}
#faqitem-loading{
    position: absolute;
    top: 10px;
    right: 10px;
    display: none;
}
#faq-submit-question {
    text-align: right;
    display: block;
    clear: both;
    position: relative;
    margin-top: 30px;
}
#faq-submit-question-btn{
  padding: 10px;
  border-radius: 34px;
  border: 1px solid #f8f8ff;
}

/* The Modal (background) */
#ddshop-faq-wrapper {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 9999999999; /* Sit on top */
  padding-top: 120px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.5); /* Black w/ opacity */
  opacity: 1 !important;
  box-sizing: content-box;
  visibility:visible !important;
}

#ddshop-faq-wrapper h2.heading{
margin-bottom: 8px;
margin-top: 0;
}

/* Modal Content */
#ddshop-faq-wrapper .modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 30%;
  height: auto;
  border-radius: 8px;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
#ddshop-faq-wrapper .close {
    float: right;
    font-size: 32px;
    position: absolute;
    top: 0px;
    right: 5px;
    color: #000;
}

#ddshop-faq-wrapper .close:hover,
#ddshop-faq-wrapper .close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

#ddshop-faq-wrapper .modal-header, #ddshop-faq-wrapper .modal-footer {
  border: 0;
}

#contact-btn{
cursor: pointer;
position: fixed;
bottom: 5px;
right: 5px;
z-index: 9999;
width:60px;
height:60px;
color:#FFF;
border-radius:50px;
text-align:center;
box-shadow: 2px 2px 3px #999;
border: 0;
}
#contact-btn .fa {font-size: 22px;padding-top: 18px;}

.help-block.with-errors {color: #ff5050; margin-top: -5px; font-size: 12px; text-align: left;}
button#ddshop-faq-sendbtn {
  height: 50px;
  padding: 0 20px;
  font-size: 18px;
  color: #fff;
}
#ddshop-faq-wrapper .messages .alert-success{
background: green;
color: #fff;
padding: 10px;
font-size: 14px;
margin: 10px 0;
}
#ddshop-faq-wrapper .copyright,#ddshop-faq-wrapper .copyright a{text-align: center;color: #999;font-size: 12px;}
/*Fix Main menu */
.mobile-nav-wrapper.js-menu--is-open{z-index: 9999;}

.cd-faq-content table{table-layout: auto;width: auto !important;}
.cd-faq-content td {
    padding: 10px !important;
    border: 1px solid #ccc;
    width: auto;
}
.panel-group .cd-faq-group {
    margin-bottom: 35px !important;
}
.ddshop-faq-answer{position: relative;}
.ddshop-faq-answer .anchor{position: unset !important;}
.ddshop-faq-answer .fa.fa-link {
    position: absolute;
    top: -40px;
    right: 55px;
    font-size: 14px !important;
    line-height: 26px !important;
}
.bootstrap-ddshop .twitter-typeahead,
.bootstrap-ddshop .tt-hint,.bootstrap-ddshop .tt-input,.bootstrap-ddshop .tt-menu{
   width: 100%;
   font-weight: normal;
   text-align: left;
}

.bootstrap-ddshop .twitter-typeahead input {
  height: 55px;
  padding-left: 25px;
  border-radius: 5px;
  font-size: 18px;
  text-align: left;
}
#ddshop-faq-form .form-control {
    height: 45px;
    font-size: 16px;
}
#ddshop-faq-form .help-block.with-errors {
    display: none;
}   
.cd-faq-title, .cd-faqitem {
    list-style: none;
}
.ddshop-faq-answer img {
    height: auto !important;
}
.ddshop-faq-answer li {
    list-style: inherit !important;
}
@media (max-width: 768px){
#ddshop-faq-wrapper{padding-top: 20px;}
#ddshop-faq-wrapper .modal-content{width:100%;border-radius: 0;}
button#ddshop-faq-sendbtn{float: left;}
}
#PageContainer{
-ms-transform: unset !important;
-webkit-transform: unset !important);
transform: unset !important;
}
/*Fix rte class*/
.rte .cd-faq-trigger::before, .rte .cd-faq-trigger::after{
    left: auto !important;
    border: 0 !important;
    width: 13px !important;
}
.rte a.cd-faq-trigger{display: block !important;}
/* -------------------------------- 
Primary style
-------------------------------- */
/*
*, *::after, *::before {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
*/
.cd-faq *:before, .cd-faq *:after {
  content: '';
}

@media only screen and (min-width: 768px) {
  body::after {
    display: none;
  }
}

/* -------------------------------- 
Main components 
-------------------------------- */

.cd-faq {
  width: 100%;
  margin: 20px auto;
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
}
.cd-faq:after {
  content: "";
  display: table;
  clear: both;
}
@media only screen and (min-width: 768px) {
  .cd-faq {
    position: relative;
    margin: 0 auto !important;
    box-shadow: none;
  }
}

.cd-faq-categories a {
  position: relative;
  display: block;
  overflow: hidden;
  height: 50px;
  line-height: 50px;
  padding: 0 28px 0 16px;
  background-color: #4e5359;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #ffffff;
  white-space: nowrap;
  border-bottom: 1px solid #fff;
  text-overflow: ellipsis;
}
.cd-faq-categories a::before, .cd-faq-categories a::after {
  /* plus icon on the right */
  position: absolute;
  top: 50%;
  right: 16px;
  display: inline-block;
  height: 1px;
  width: 10px;
  background-color: #fff;
}
.cd-faq-categories a::after {
  -webkit-transform: rotate(90deg);
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -o-transform: rotate(90deg);
  transform: rotate(90deg);
}
.cd-faq-categories li:last-child a {
  border-bottom: none;
}
@media only screen and (min-width: 768px) {
  .cd-faq-categories {
    width: 20%;
    float: left;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.08);
    margin: 0 !important;
    list-style: none !important;
    padding: 0 !important;
  }
  .cd-faq-categories li{list-style: none !important;}
  .cd-faq-categories a {
    font-size: 13px;
    font-weight: 600;
    padding-left: 24px;
    padding: 0 24px;
    -webkit-transition: background 0.2s, padding 0.2s;
    -moz-transition: background 0.2s, padding 0.2s;
    transition: background 0.2s, padding 0.2s;
  }
  .cd-faq-categories a::before, .cd-faq-categories a::after {
    display: none;
  }
  .no-touch .cd-faq-categories a:hover {
    background: #555b61;
  }
  /*.no-js .cd-faq-categories {
    width: 100%;
    margin-bottom: 2em;
  }*/
}
@media only screen and (min-width: 1024px) {
  .cd-faq-categories {
    position: absolute;
    top: 0;
    left: 0;
    width: 240px;
    z-index: 9;
    margin: 0 !important;
    list-style: none !important;
  }
  .cd-faq-categories a::before {
    /* decorative rectangle on the left visible for the selected item */
    display: block;
    top: 0;
    right: auto;
    left: 0;
    height: 100%;
    width: 3px;
    background-color: #a9c056;
    opacity: 0;
    -webkit-transition: opacity 0.2s;
    -moz-transition: opacity 0.2s;
    transition: opacity 0.2s;
  }
  .cd-faq-categories .selected {
    background: #42464b !important;
  }
  .cd-faq-categories .selected::before {
    opacity: 1;
  }
  .cd-faq-categories.is-fixed {
    /* top and left value assigned in jQuery */
    position: fixed;
  }
  /*.no-js .cd-faq-categories {
    position: relative;
  }*/
}


@media only screen and (min-width: 768px) {
  .cd-faq-items {
    position: static;
    height: auto;
    width: 78%;
    float: right;
    overflow: visible;
    -webkit-transform: translateZ(0) translateX(0);
    -moz-transform: translateZ(0) translateX(0);
    -ms-transform: translateZ(0) translateX(0);
    -o-transform: translateZ(0) translateX(0);
    transform: translateZ(0) translateX(0);
    padding: 0;
    background: transparent;
  }
}
@media only screen and (min-width: 1024px) {
  .cd-faq-items {
    float: none;
    width: 100%;
    padding-left: 260px;
  }
  /*.no-js .cd-faq-items {
    padding-left: 0;
  }*/
}

.cd-close-panel {
  position: fixed;
  top: 5px;
  right: -100%;
  display: none;
  height: 40px;
  width: 40px;
  overflow: hidden;
  text-indent: 100%;
  white-space: nowrap;
  z-index: 9999;
  /* Force Hardware Acceleration in WebKit */
  -webkit-transform: translateZ(0);
  -moz-transform: translateZ(0);
  -ms-transform: translateZ(0);
  -o-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transition: right 0.4s;
  -moz-transition: right 0.4s;
  transition: right 0.4s;
}
.cd-close-panel::before, .cd-close-panel::after {
  /* close icon in CSS */
  position: absolute;
  top: 16px;
  left: 12px;
  display: inline-block;
  height: 3px;
  width: 18px;
  background: #6c7d8e;
}
.cd-close-panel::before {
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
}
.cd-close-panel::after {
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  transform: rotate(-45deg);
}
.cd-close-panel.move-left {
  right: 2%;
}
@media only screen and (min-width: 768px) {
  .cd-close-panel {
    display: none;
  }
}

.cd-faq-group {
  /* hide group not selected */
  display: none;
}
.cd-faq-group li{list-style: none;}
.cd-faq-group.selected {
  display: block;
}
.cd-faq-group .cd-faq-title {
  background: transparent !important;
  box-shadow: none;
  margin: 1em 0;
}
.no-touch .cd-faq-group .cd-faq-title:hover {
  box-shadow: none;
}
.cd-faq-group .cd-faq-title h2 {
  text-transform: uppercase;
  font-size: 13px;
  font-weight: 700;
  color: #bbbbc7;
}
/*.no-js .cd-faq-group {
  display: block;
}*/
@media only screen and (min-width: 768px) {
  .cd-faq-group {
    /* all groups visible */
    display: block;
    list-style: none !important;
    padding: 0 !important;
    margin: 0 !important;
  }
  .cd-faq-group > li {
    background: ghostwhite;
    margin-bottom: 6px;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.08);
    -webkit-transition: box-shadow 0.2s;
    -moz-transition: box-shadow 0.2s;
    transition: box-shadow 0.2s;
  }
  .no-touch .cd-faq-group > li:hover {
    box-shadow: 0 1px 10px rgba(108, 125, 142, 0.3);
  }
  .cd-faq-group .cd-faq-title {
    margin: 2em 0 1em;
  }
  .cd-faq-group:first-child .cd-faq-title {
    margin-top: 0;
  }
}

.cd-faq-trigger {
  position: relative;
  display: block;
  margin: 1.6em 0 .4em;
  line-height: 1.2;
}
/*@media only screen and (min-width: 768px) {*/
  .cd-faq-trigger {
    font-size: 18px;
    font-weight: 500;
    margin: 0 !important;
    padding: 15px 60px 15px 20px !important;
    border: 0 !important;
   text-transform: inherit;
    line-height: 26px !important;
    cursor: pointer;
    letter-spacing: normal;
  }
  .cd-faq-trigger::before, .cd-faq-trigger::after {
    /* arrow icon on the right */
    position: absolute;
    right: 24px;
    top: 50%;
    height: 2px;
    width: 13px;
    background: #cfdca0;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition-property: -webkit-transform;
    -moz-transition-property: -moz-transform;
    transition-property: transform;
    -webkit-transition-duration: 0.2s;
    -moz-transition-duration: 0.2s;
    transition-duration: 0.2s;
  }
  .cd-faq-trigger::before {
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg);
    right: 32px;
  }
  .cd-faq-trigger::after {
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    transform: rotate(-45deg);
  }
  .cd-faq-trigger.active::before{
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    transform: rotate(-45deg);
  
  }
  .cd-faq-trigger.active::after {
      -webkit-transform: rotate(45deg);
      -moz-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      -o-transform: rotate(45deg);
      transform: rotate(45deg);
    
  }
  .content-visible .cd-faq-trigger::before {
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    transform: rotate(-45deg);
  }
  .content-visible .cd-faq-trigger::after {
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg);
  }
/*}*/

.cd-faq-content, .cd-faq-content p {
  font-size: 14px;
  line-height: 1.4;
  color: inherit;
}
/*@media only screen and (min-width: 768px) {*/
  .cd-faq-content {
    display: none;
    padding: 10px 25px 15px;
  }
  .cd-faq-content p {
    line-height: 1.6;
  }
  /*.no-js .cd-faq-content {
    display: none;
  }*/
  .cd-faq-content ul li {
    list-style: initial !important;
  }
/*}*/

@media (max-width: 768px) {
  .cd-faq{box-shadow: none !important;}
  .cd-faq-categories {width: 100% !important;list-style: none !important;margin: 0 !important;}
  .cd-faq-trigger {
    line-height: 20px;
  }
  .cd-faq-content {display: none;}
  .cd-faq-group > li{list-style: none;margin-bottom: 1px;}
  .cd-faq-categories, .cd-close-panel{display: none;}
  .cd-faq-group {
    display: block !important;
    padding: 0 !important;
    margin: 0 !important;
    border: 0 !important;
  }
}
#ddshop-faq-a01 .cd-faq-group {
    margin-top: 20px !important;
}
#ddshop-faq-a01 .panel{
    border-radius: 0;
    box-shadow: none;
}
#ddshop-faq-a01 .panel-heading{
    padding: 0;
    border-radius: 0;
    background: #fff;
}
#ddshop-faq-a01 .panel-title{
    overflow: hidden;
    margin: 0;
}
#ddshop-faq-a01 .panel-title a{
    display: block;
    border: 0;
    font-size: 16px;
    text-transform: none;
    padding: 17px 17px 17px 60px;
    position: relative;
    transition: all 0.30s linear 0s;
}
#ddshop-faq-a01 .panel-title a.collapsed{
    background: #fff;
    color: #333;
}
#ddshop-faq-a01 .panel-title a.collapsed:hover{
}
#ddshop-faq-a01 .panel-title a:before,
#ddshop-faq-a01 .panel-title a.collapsed:before{
    content: "\f107";
    font-family: FontAwesome;
    width: 50px;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    color: #fff;
    font-size: 20px;
    line-height: 50px;
    text-align: center;
    background: #999;
    transition: all 0.30s linear 0s;
}
#ddshop-faq-a01 .panel-title a.collapsed:before{
    content: "\f105";
    background: #fff;
    color: #333;
}
#ddshop-faq-a01 .panel-body{
    border-top: none;
    color: #888;
}#ddshop-faq-a02 .cd-faq-group {
    margin-top: 20px !important;
}
#ddshop-faq-a02 .panel{
    border: none;
    box-shadow: none;
    border-radius: 0;
    margin-top: 3px;
}
#ddshop-faq-a02 .panel-heading{
    padding: 0;
    border-radius: 0;
    border: none;
}
#ddshop-faq-a02 .panel-title a{
    display: block;
    font-size: 16px;
    /*font-weight: bold;
    color: #f7c59f;*/
    padding: 15px 48px 15px 20px;
    background: #F8F8FF;
    position: relative;
    transition: all 0.3s ease 0s;
}
#ddshop-faq-a02 .panel-title a.collapsed{
    border-bottom: 1px solid #fff;
}
#ddshop-faq-a02 .panel-title a:after,
#ddshop-faq-a02 .panel-title a.collapsed:after{
    content: "";
    display: block;
    width: 3px;
    height: 100%;
    position: absolute;
    top: 0;
    right: 28px;
    background: #ccc;
}
#ddshop-faq-a02 .panel-title a.collapsed:after{
}
#ddshop-faq-a02 .panel-title a:before,
#ddshop-faq-a02 .panel-title a.collapsed:before{
    content: "\f068";
    font-family: FontAwesome;
    font-weight: normal;
    width: 20px;
    height: 20px;
    line-height: 20px;
    border-radius: 50%;
    background: #ccc;
    position: absolute;
    top: 12px;
    right: 19px;
    font-size: 10px;
    color: #F8F8FF;
    text-align: center;
    z-index: 1;
}
#ddshop-faq-a02 .panel-title a.collapsed:before{
    content: "\f067";
}
#ddshop-faq-a02 .panel-body{
    background: #F8F8FF;
    padding: 20px 50px 15px 20px;
    line-height: 25px;
    border: none;
    position: relative;
}
#ddshop-faq-a02 .panel-body:after{
    content: "";
    display: block;
    width: 3px;
    height: 100%;
    background: #ccc;
    position: absolute;
    top: 0;
    right: 28px;
}#ddshop-faq-a03 .cd-faq-group {
    margin-top: 20px !important;
}
#ddshop-faq-a03 h3{margin-top: 35px !important;}
#ddshop-faq-a03 .panel{
    border: none;
    background: transparent;
    box-shadow: none;
    border-radius: 0;
    padding-left: 40px;
    margin-bottom: 10px;
}
#ddshop-faq-a03 .panel-heading{
    padding: 0;
}
#ddshop-faq-a03 .panel-title a{
    display: block;
    padding: 15px;
    background: #fff;
    font-size: 16px;
    /*text-transform: uppercase;*/
    border: 2px solid #F8F8FF;
    border-left: none;
    border-radius: 0 8px 8px 0;
    box-shadow: none;
    position: relative;
    transition: all 0.3s ease 0s;
}
#ddshop-faq-a03 .panel-title a span{
    display: block;
    width: 40px;
    height: 110%;
    line-height: 70px;
    background: #F8F8FF;
    font-size: 14px;
    text-align: center;
    position: absolute;
    top: -2px;
    left: -40px;
}
#ddshop-faq-a03 .panel-title a span:before,
#ddshop-faq-a03 .panel-title a span:after{
    content: "";
    border-top: 20px solid #fff;
    border-left: 20px solid transparent;
    border-right: 20px solid transparent;
    position: absolute;
    left: 0;
}
#ddshop-faq-a03 .panel-title a span:before{
    top: -1px;
}
#ddshop-faq-a03 .panel-title a span:after{
    border-top-color: #F8F8FF;
    bottom: -20px;
    z-index: 1;
}
#ddshop-faq-a03 .panel-body{
    font-size: 14px;
    color: #808080;
    line-height: 23px;
    border-top: none;
}
#ddshop-faq-a03 .panel-body p{
    margin-bottom: 0;
}#ddshop-faq-a04{
    padding-right: 24px;
    padding-left: 24px;
    z-index: 1;
}
#ddshop-faq-a04 .cd-faq-group {
    margin-top: 20px !important;
}
#ddshop-faq-a04 .panel{
    border: none;
    box-shadow: none;
}
#ddshop-faq-a04 .panel-heading{
    padding: 0;
    border-radius: 0;
    border: none;
}
#ddshop-faq-a04 .panel-title{
    padding: 0;
}
#ddshop-faq-a04 .panel-title a{
    display: block;
    font-size: 16px;
    background: #F8F8FF;
    border: 0;
    padding: 15px 25px;
    position: relative;
    margin-left: -24px;
    transition: all 0.3s ease 0s;
}
#ddshop-faq-a04 .panel-title a.collapsed{
    background: #F8F8FF;
    margin-left: 0;
    transition: all 0.3s ease 0s;
}
#ddshop-faq-a04 .panel-title a:before{
    content: "";
    border-left: 24px solid #F8F8FF;
    border-top: 24px solid transparent;
    border-bottom: 24px solid transparent;
    position: absolute;
    top: 0;
    right: -24px;
    transition: all 0.3s ease 0s;
}
#ddshop-faq-a04 .panel-title a.collapsed:before{
    border-left-color: #F8F8FF;
}
#ddshop-faq-a04 .panel-title a:after{
    content: "\f106";
    font-family: 'FontAwesome';
    position: absolute;
    top: 25%;
    right: 15px;
    font-size: 22px;
    /*color: #f7c59f;*/
}
#ddshop-faq-a04 .panel-title a.collapsed:after{
    content: "\f107";
    /*color: #e16b47;*/
}
#ddshop-faq-a04 .panel-collapse{
    position: relative;
}
#ddshop-faq-a04 .panel-collapse.in:before{
    content: "";
    border-right: 24px solid #ccc;
    border-bottom: 18px solid transparent;
    position: absolute;
    top: 0;
    left: -24px;
}
#ddshop-faq-a04 .panel-body{
    font-size: 14px;
    background: #fff;
    border: 1px solid #F8F8FF;
    border-top: none;
    z-index: 1;
}.dteco-faq-wrapper h3 {
    margin: 30px 0 20px !important;
}
.dteco-faq-simple-listing .dteco-faq-title{
	position: relative;
	padding: 10px 15px;
	font-size: 16px;
	display: block;
	line-height: 20px;
	cursor: pointer;
}
.dteco-faq-simple-listing .dteco-faq-title i{
	margin-right: 5px;
	font-size: 15px;
	color: #fff;
	line-height: 20px;
	
}
.dteco-faq-simple-listing .dteco-faq-content{
	padding: 15px;
    border: 3px solid #f8f8ff;
    margin: 0 0 10px 15px;
    border-top: 0 !important;
}
.dteco-faq-simple-listing .panel-body img,
.dteco-faq-simple-listing .panel-body iframe,
.dteco-faq-simple-listing .panel-body video{
	margin: 10px;
}
/*Random Theme color*/
.dteco-faq-simple-listing.dteco-faq-random-colors .dteco-faq-wrapper:nth-child(3n+2) .dteco-faq-title{
	background: #ea3566;
}
.dteco-faq-simple-listing.dteco-faq-random-colors .dteco-faq-wrapper:nth-child(4n+3) .dteco-faq-title{
	background: #ea4e00;
}
.dteco-faq-simple-listing.dteco-faq-random-colors .dteco-faq-wrapper:nth-child(5n+4)  .dteco-faq-title{
	background: #00aac4;
}
.dteco-faq-simple-listing.dteco-faq-random-colors .dteco-faq-wrapper:nth-child(6n+5)  .dteco-faq-title{
	background: #ffc65d;
}
.dteco-faq-simple-listing.dteco-faq-random-colors .dteco-faq-wrapper:nth-child(7n+6)  .dteco-faq-title{
	background: #d96557;
}
/*Default Theme color*/
.dteco-faq-simple-listing .dteco-faq-title{
	background: #f8f8ff;
}
#ddshop-faq-a05 a:hover, #ddshop-faq-a05 a:focus{
text-decoration: none;
outline: none;
}
#ddshop-faq-a05 .panel{
border: none;
box-shadow: none;
border-radius: 0;
margin-bottom: 15px;
}
#ddshop-faq-a05 .panel-heading{
padding: 0;
border-radius:0;
border: none;
}
#ddshop-faq-a05 .panel-title a{
display: block;
padding: 14px 30px 14px 70px;
font-size: 16px;
font-weight: bold;
border: 0;
position: relative;
overflow: hidden;
transition: all 0.5s ease 0s;
}
#ddshop-faq-a05 .panel-title a.collapsed{
background: #f8f8f8;
}
#ddshop-faq-a05 .panel-title a.collapsed:hover{
}
#ddshop-faq-a05 .panel-title a:before{
content: "";
width: 55px;
height: 100%;
background-color: rgba(0, 0, 0, 0.1);
position: absolute;
top: 0;
left: -13px;
transform: skewX(-25deg);
transition: all 0.5s ease 0s;
}
#ddshop-faq-a05 .panel-title a.collapsed:hover:before{
background: #d7573e;
}
#ddshop-faq-a05 .panel-title a:after{
content: "\f047";
font-family: "FontAwesome";
font-weight: 900;
position: absolute;
left: 10px;
top: 50%;
color: #fff;
transform: translateY(-50%);
}
#ddshop-faq-a05 .panel-title a.collapsed:after{
color: #9f9f9f;
}
#ddshop-faq-a05 .panel-title a.collapsed:hover:after{
color: #fff;
}
#ddshop-faq-a05 .panel-body{
font-size: 14px;
color: #5a3245;
line-height: 25px;
padding: 20px 15px 20px 40px;
position: relative;
border: none;
position: relative;
transition: all 0.5s ease 0s;
}
#ddshop-faq-a05 .panel-body:before{
content: "";
width: 5px;
height: 40px;
background: #ef6145;
position: absolute;
top: 30px;
left: 0;
}
#ddshop-faq-a05 .panel-body p{
margin-bottom: 0;
}#ddshop-faq-a06 a:hover, #ddshop-faq-a06 a:focus{
    text-decoration: none;
    outline: none;
}
#ddshop-faq-a06 .panel{
    border: none;
    box-shadow: none;
    border-radius: 0;
    margin-bottom: 15px;
}
#ddshop-faq-a06 .panel-heading{
    padding: 0;
    border-radius:0;
    border: none;
}
#ddshop-faq-a06 .panel-title a{
    display: block;
    padding: 14px 60px;
    font-size: 16px;
    position: relative;
    margin-bottom: 15px;
    border: 0;
    box-shadow: 0px 1px 3px rgb(0 0 0 / 15%);
    transition: all 0.5s ease 0s;
}
#ddshop-faq-a06 .panel-title a.collapsed{
    
}
#ddshop-faq-a06 .panel-title a:before,
#ddshop-faq-a06 .panel-title a.collapsed:before{
    content: "";
    width: 20px;
    height: 1px;
    background: #0760dc;
    position: absolute;
    top: 23px;
    left: 0;
}
#ddshop-faq-a06 .panel-title a.collapsed:before{
    background: #ddd;
}
#ddshop-faq-a06 .panel-title a:after,
#ddshop-faq-a06 .panel-title a.collapsed:after{
    content: "\f068";
    font-family: "FontAwesome";
    font-weight: 900;
    width: 27px;
    height: 27px;
    line-height: 27px;
    border-radius: 50%;
    background: #0760dc;
    position: absolute;
    top: 10px;
    left: 25px;
    font-size: 14px;
    color: #fff;
    text-align: center;
    z-index: 1;
}
#ddshop-faq-a06 .panel-title a.collapsed:after{
    content: "\f067" !important;
    background: #ddd;
}
#ddshop-faq-a06 .panel-body{
    font-size: 13px;
    line-height: 25px;
    padding: 0 15px;
    margin-left: 35px;
    border: none;
    border-left: 2px dashed #eee;
}#ddshop-faq-a07 a:hover, #ddshop-faq-a07 a:focus{
    outline: none;
    text-decoration:none;
}
#ddshop-faq-a07 .panel{
    border-radius:0;
    margin-bottom:15px;
}
#ddshop-faq-a07 .panel-heading{
    padding:0;
}
#ddshop-faq-a07 .panel-title{
    position: relative;
}
#ddshop-faq-a07 .panel-title:before{
    content: "";
    border-bottom: 25px solid rgba(0, 0, 0, 0);
    border-left: 15px solid #eee;
    border-top: 24px solid rgba(0, 0, 0, 0);
    width: 0;
    height: 0;
    position: absolute;
    top: 0;
    left: 34px;
}
#ddshop-faq-a07 .panel-title a{
    display: block;
    font-size: 16px;
    line-height: 21px;
    font-weight:normal;
    text-transform: none;
    padding: 15px 10px 13px 65px;
    border: 0;
}

#ddshop-faq-a07 .panel-title a:before,
#ddshop-faq-a07 .panel-title a.collapsed:before{
    content: "\f068";
    font-family: "FontAwesome";
    font-weight: 900;
    position: absolute;
    top:0;
    left:0px;
    padding:14px 10px;
    color:#e63c22;
    background:#eee;
}
#ddshop-faq-a07 .panel-title a.collapsed:before{
    content: "\f067";
}
#ddshop-faq-a07 .panel-body{
    font-size: 14px;
    line-height: 26px;
}#ddshop-faq-a08 a:hover, #ddshop-faq-a08 a:focus{
    text-decoration: none;
    outline: none;
}
#ddshop-faq-a08 .cd-faq-group{margin-top: 20px !important;}
#ddshop-faq-a08 .panel{
    border: none;
    background: none;
    border-radius: 0;
    box-shadow: none;
}
#ddshop-faq-a08 .panel-heading{
    padding: 0;
    background: #fff;
}
#ddshop-faq-a08 .panel-title a{
    display: block;
    font-size: 16px;
    padding: 17px 40px 17px 65px;
    border: 1px solid #f3f3f3;
    border-bottom: none;
    position: relative;
    transition: all 0.5s ease 0s;
}
#ddshop-faq-a08 .panel-title a.collapsed{
    border-bottom: 1px solid #f3f3f3;
}
#ddshop-faq-a08 .panel-title a.collapsed:hover{
  
}
#ddshop-faq-a08 .panel-title a:after,
#ddshop-faq-a08 .panel-title a.collapsed:after{
    content: "\f068";
    font-family: "FontAwesome";
    font-weight: 900;
    font-size: 15px;
    color: #fff;
    width: 45px;
    height: 100%;
    line-height: 54px;
    text-align: center;
    position: absolute;
    top: 0px;
    left: -1px;
    background: #9c88b9;
    transition: all .2s;
}
#ddshop-faq-a08 .panel-title a.collapsed:after{
    content: "\f067";
    color: #959595;
    background: #f4f4f4;
    transition: all 0.5s ease 0s;
}
#ddshop-faq-a08 .panel-title a.collapsed:hover:after{
    background: #9c88b9;
    color:#fff;
}
#ddshop-faq-a08 .panel-title a:before{
    content: "";
    position: absolute;
    bottom: -11px;
    left: -1px;
    border-bottom: 12px solid transparent;
    border-right: 12px solid #9c88b9;
}
#ddshop-faq-a08 .panel-title a.collapsed:before{
    display: none;
}
#ddshop-faq-a08 .panel-body{
    font-size: 14px;
    padding: 0 65px 15px;
    line-height: 20px;
    margin-left: 12px;
    background: #fff;
    border: 1px solid #f3f3f3;
    border-top: none;
}#ddshop-faq-a09 a:hover, #ddshop-faq-a09 a:focus{
    text-decoration: none;
    outline: none;
}
#ddshop-faq-a09 .panel{
    border: none;
    border-radius: 0;
    box-shadow: none;
    margin-bottom: 15px;
    position: relative;
}
#ddshop-faq-a09 .panel:before{
    content: "";
    display: block;
    width: 1px;
    height: 100%;
    border: 1px dashed #6e8898;
    position: absolute;
    top: 25px;
    left: 18px;
}
#ddshop-faq-a09 .panel:last-child:before{ display: none; }
#ddshop-faq-a09 .panel-heading{
    padding: 0;
    border: none;
    border-radius: 0;
    position: relative;
    background: #fff;
}
#ddshop-faq-a09 .panel-title a{
    display: block;
    padding: 12px 30px 12px 60px;
    margin: 0;
    background: #fff;
    font-size: 18px;
    font-weight: normal;
    letter-spacing: 1px;
    border-radius: 0;
    position: relative;
    border: 0;
}
#ddshop-faq-a09 .panel-title a:before,
#ddshop-faq-a09 .panel-title a.collapsed:before{
    content: "\f107";
    font-family: "FontAwesome";
    font-weight: 900;
    width: 40px;
    height: 100%;
    line-height: 40px;
    border-radius: 3px;
    font-size: 18px;
    color: #fff;
    text-align: center;
    position: absolute;
    top: 0;
    left: 0;
    transition: all 0.3s ease 0s;
}
#ddshop-faq-a09 .panel-title a.collapsed:before{
    content: "\f105";
    background: #fff;
    color: #000;
}
#ddshop-faq-a09 .panel-body{
    padding: 10px 30px 10px 30px;
    margin-left: 40px;
    background: #fff;
    border-top: none;
    font-size: 15px;
    color: #6f6f6f;
    line-height: 28px;
    letter-spacing: 1px;
}#ddshop-faq-a10 a:hover, #ddshop-faq-a10 a:focus{
    text-decoration: none;
    outline: none;
}
#ddshop-faq-a10 .panel{
    border: none;
    border-radius: 0;
    box-shadow: none;
    margin: 0 0 10px;
    overflow: hidden;
    position: relative;
}
#ddshop-faq-a10 .panel-heading{
    padding: 0;
    border: none;
    border-radius: 0;
    margin-bottom: 10px;
    z-index: 1;
    position: relative;
}
#ddshop-faq-a10 .panel-heading:before,
#ddshop-faq-a10 .panel-heading:after{
    content: "";
    width: 50%;
    height: 20%;
    box-shadow: 0 15px 5px rgba(0, 0, 0, 0.4);
    position: absolute;
    bottom: 15px;
    left: 10px;
    transform: rotate(-3deg);
    z-index: -1;
}
#ddshop-faq-a10 .panel-heading:after{
    left: auto;
    right: 10px;
    transform: rotate(3deg);
}
#ddshop-faq-a10 .panel-title a{
    display: block;
    padding: 15px 70px 15px 70px;
    margin: 0;
    background: #fff;
    letter-spacing: 1px;
    border-radius: 0;
    border: 0;
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) inset;
    position: relative;
}
#ddshop-faq-a10 .panel-title, #ddshop-faq-a10 .panel-title:hover{background: #fff;opacity: 1;}
#ddshop-faq-a10 .panel-title a:before,
#ddshop-faq-a10 .panel-title a.collapsed:before{
    content: "\f106";
    font-family: "FontAwesome";
    font-weight: 900;
    width: 55px;
    height: 100%;
    text-align: center;
    line-height: 50px;
    border-left: 2px solid #D11149;
    position: absolute;
    top: 0;
    right: 0;
}
#ddshop-faq-a10 .panel-title a.collapsed:before{ content: "\f107"; }
#ddshop-faq-a10 .panel-title a .icon{
    display: inline-block;
    width: 55px;
    height: 100%;
    border-right: 2px solid #d11149;
    font-size: 20px;
    color: rgba(0,0,0,0.7);
    line-height: 50px;
    text-align: center;
    position: absolute;
    top: 0;
    left: 0;
}
#ddshop-faq-a10 .panel-body{
    padding: 10px 20px;
    margin: 0 0 20px;
    border-bottom: 3px solid #d11149;
    border-top: none;
    background: #fff;
    font-size: 15px;
    color: #333;
    line-height: 27px;
}
</style>

@endsection

@section("content")

<main class="main-content" id="MainContent">
    <div class="page-width page-content">




<div class="grid">
<div class="grid__item medium-up--three-quarters medium-up--push-one-eighth">

  <header class="section-header">
    <h1 class="section-header__title">FAQ</h1>
  </header>

  <div class="rte rte--nomargin">
    <div id="ddshopfaq-wrapper"><div class="ddshop-faqs-published">
                                            <div class="bootstrap-ddshop" itemscope="" itemtype="https://schema.org/FAQPage">
<!--
<link href="https://faq.ddshopapps.com/css/frontend/common.css" rel="stylesheet" type="text/css">
<link href="https://faq.ddshopapps.com/css/frontend/bootstrap-ddshop.css" rel="stylesheet" type="text/css">
<link href="https://faq.ddshopapps.com/css/frontend/templates/a01.css" rel="stylesheet" type="text/css">-->
<link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" type="text/css">
<!--STORE SETTING-->
        <style type="text/css">
        /*Question Setting*/
        .ddshop-faq-question a{
            background: #FFFFFF !important;
            color: #333333 !important;
            font-size: 18px !important;
        }
        .ddshop-faq-question a:before{
            background: #333333 !important;
            color: #FFFFFF !important;
        }
        /*Answer Setting*/
        .ddshop-faq-answer{
            background: #FFFFFF !important;
        }
        .ddshop-faq-answer p, .ddshop-faq-answer span{
            color: #333333;
            font-size: 14px;
        }

        .twitter-typeahead .list-group-item:hover{
            cursor: pointer;
            background: #FFFFFF !important;
        }
        #faq-submit-question-btn{
            border: 2px solid #FFFFFF !important;
        }
        
    
    </style>
            <!--END STORE SETTING-->
    
<div class="panel-group" id="ddshop-faq-a01" role="tablist" aria-multiselectable="true">
                <div class="cd-faq-group" data-id="50606">
                                                                <div class="panel panel-default" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title ddshop-faq-question" itemprop="name">
                            <a id="faq-question-218922" role="button" data-toggle="collapse" data-parent="#ddshop-faq-a01" href="#collapse-faqitem-218922" aria-expanded="false" aria-controls="collapse218922" data-id="218922" class="question-title collapsed js-no-transition">
                                Is this the same fan that I saw on Kickstarter?
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-faqitem-218922" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-question-218922" aria-expanded="false" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div class="panel-body ddshop-faq-answer" itemprop="text">
                            <p style="margin-left:0in; margin-right:0in"><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif">Yes it is - On Kickstarter we are listed as "Vento" but had to change our name for Trademark reasons to "Venty"</span></span></p>
                        </div>
                    </div>
                </div>
                                <div class="panel panel-default" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title ddshop-faq-question" itemprop="name">
                            <a id="faq-question-218923" role="button" data-toggle="collapse" data-parent="#ddshop-faq-a01" href="#collapse-faqitem-218923" aria-expanded="false" aria-controls="collapse218923" data-id="218923" class="question-title collapsed js-no-transition">
                                Do you offer international shipping?
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-faqitem-218923" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-question-218923" aria-expanded="false" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div class="panel-body ddshop-faq-answer" itemprop="text">
                            <p style="margin-left:0in; margin-right:0in"><span style="font-family:Calibri, sans-serif"><span style="font-size:16px">We are adding more and more countries as our distribution center grows. Currently the US and Austalia have the cheapest shipping options. We apologize that Europe is a bit expensive at the moment.</span></span></p>
                        </div>
                    </div>
                </div>
                                <div class="panel panel-default" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title ddshop-faq-question" itemprop="name">
                            <a id="faq-question-218924" role="button" data-toggle="collapse" data-parent="#ddshop-faq-a01" href="#collapse-faqitem-218924" aria-expanded="false" aria-controls="collapse218924" data-id="218924" class="question-title collapsed js-no-transition">
                                How long does shipping take?
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-faqitem-218924" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-question-218924" aria-expanded="false" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div class="panel-body ddshop-faq-answer" itemprop="text">
                            <p style="margin-left:0in; margin-right:0in"><span style="font-family:Calibri,sans-serif"><span style="font-size:16px">Shipping to USA and Australia is&nbsp;under 5-7 business days. Check our complete shipping time estimation <a href="https://ventyfan.com/policies/shipping-policy">here</a> to various countries.</span></span></p>
                        </div>
                    </div>
                </div>
                                <div class="panel panel-default" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title ddshop-faq-question" itemprop="name">
                            <a id="faq-question-218925" role="button" data-toggle="collapse" data-parent="#ddshop-faq-a01" href="#collapse-faqitem-218925" aria-expanded="false" aria-controls="collapse218925" data-id="218925" class="question-title collapsed js-no-transition">
                                What is the warranty on the fan?
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-faqitem-218925" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-question-218925" aria-expanded="false" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div class="panel-body ddshop-faq-answer" itemprop="text">
                            <p><span style="font-size:12.0pt">We offer a 100% money back guarantee if you do not want the fan within 30 days. You would cover the shipping cost back to us in the original packaging and box. If you receive a fan that has a defect contact us within 30 days and we will repair or replace it.</span></p>
                        </div>
                    </div>
                </div>
                                <div class="panel panel-default" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title ddshop-faq-question" itemprop="name">
                            <a id="faq-question-218926" role="button" data-toggle="collapse" data-parent="#ddshop-faq-a01" href="#collapse-faqitem-218926" aria-expanded="false" aria-controls="collapse218926" data-id="218926" class="question-title collapsed js-no-transition">
                                Does the battery really last 2 full days per charge?
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-faqitem-218926" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-question-218926" aria-expanded="false" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div class="panel-body ddshop-faq-answer" itemprop="text">
                            <p><span style="font-size:12.0pt"><span style="font-family:&quot;Calibri&quot;,sans-serif">Yes, depending on which functionality is used. The higher the speed setting set it will consume more power.</span></span></p>
                        </div>
                    </div>
                </div>
                                <div class="panel panel-default" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title ddshop-faq-question" itemprop="name">
                            <a id="faq-question-218927" role="button" data-toggle="collapse" data-parent="#ddshop-faq-a01" href="#collapse-faqitem-218927" aria-expanded="false" aria-controls="collapse218927" data-id="218927" class="question-title collapsed js-no-transition">
                                Does the fan oscillate?
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-faqitem-218927" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-question-218927" aria-expanded="false" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div class="panel-body ddshop-faq-answer" itemprop="text">
                            <p>Yep!</p>
                        </div>
                    </div>
                </div>
                                <div class="panel panel-default" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title ddshop-faq-question" itemprop="name">
                            <a id="faq-question-218928" role="button" data-toggle="collapse" data-parent="#ddshop-faq-a01" href="#collapse-faqitem-218928" aria-expanded="false" aria-controls="collapse218928" data-id="218928" class="question-title collapsed js-no-transition">
                                Who do I contact if I have an issue with my order?
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-faqitem-218928" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-question-218928" aria-expanded="false" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div class="panel-body ddshop-faq-answer" itemprop="text">
                            <p><span style="font-size:12.0pt">Contact us directly at support@ventyfan.com</span></p>
                        </div>
                    </div>
                </div>
                                <div class="panel panel-default" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title ddshop-faq-question" itemprop="name">
                            <a id="faq-question-235199" role="button" data-toggle="collapse" data-parent="#ddshop-faq-a01" href="#collapse-faqitem-235199" aria-expanded="false" aria-controls="collapse235199" data-id="235199" class="question-title collapsed js-no-transition">
                                What is the diameter of the fan?
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-faqitem-235199" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-question-235199" aria-expanded="false" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div class="panel-body ddshop-faq-answer" itemprop="text">
                            <p>Venty is 8 inches in diameter, folds to 3 inches, extends to 3.5 feet and weighs 2.6 lbs - perfect for travel!</p>
                        </div>
                    </div>
                </div>
                        </div>
        </div>
</div>
                            </div><div class="ddshop-faqs-published">
                                            <div class="bootstrap-ddshop" itemscope="" itemtype="https://schema.org/FAQPage">
<!--
<link href="https://faq.ddshopapps.com/css/frontend/common.css" rel="stylesheet" type="text/css">
<link href="https://faq.ddshopapps.com/css/frontend/bootstrap-ddshop.css" rel="stylesheet" type="text/css">
<link href="https://faq.ddshopapps.com/css/frontend/templates/a01.css" rel="stylesheet" type="text/css">-->
<link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" type="text/css">
<!--STORE SETTING-->
        <style type="text/css">
        /*Question Setting*/
        .ddshop-faq-question a{
            background: #FFFFFF !important;
            color: #333333 !important;
            font-size: 18px !important;
        }
        .ddshop-faq-question a:before{
            background: #333333 !important;
            color: #FFFFFF !important;
        }
        /*Answer Setting*/
        .ddshop-faq-answer{
            background: #FFFFFF !important;
        }
        .ddshop-faq-answer p, .ddshop-faq-answer span{
            color: #333333;
            font-size: 14px;
        }

        .twitter-typeahead .list-group-item:hover{
            cursor: pointer;
            background: #FFFFFF !important;
        }
        #faq-submit-question-btn{
            border: 2px solid #FFFFFF !important;
        }
        
    
    </style>
            <!--END STORE SETTING-->
    
<div class="panel-group" id="ddshop-faq-a01" role="tablist" aria-multiselectable="true">
                <div class="cd-faq-group" data-id="50606">
                                                                <div class="panel panel-default" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title ddshop-faq-question" itemprop="name">
                            <a id="faq-question-218922" role="button" data-toggle="collapse" data-parent="#ddshop-faq-a01" href="#collapse-faqitem-218922" aria-expanded="false" aria-controls="collapse218922" data-id="218922" class="question-title collapsed js-no-transition">
                                Is this the same fan that I saw on Kickstarter?
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-faqitem-218922" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-question-218922" aria-expanded="false" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div class="panel-body ddshop-faq-answer" itemprop="text">
                            <p style="margin-left:0in; margin-right:0in"><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif">Yes it is - On Kickstarter we are listed as "Vento" but had to change our name for Trademark reasons to "Venty"</span></span></p>
                        </div>
                    </div>
                </div>
                                <div class="panel panel-default" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title ddshop-faq-question" itemprop="name">
                            <a id="faq-question-218923" role="button" data-toggle="collapse" data-parent="#ddshop-faq-a01" href="#collapse-faqitem-218923" aria-expanded="false" aria-controls="collapse218923" data-id="218923" class="question-title collapsed js-no-transition">
                                Do you offer international shipping?
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-faqitem-218923" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-question-218923" aria-expanded="false" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div class="panel-body ddshop-faq-answer" itemprop="text">
                            <p style="margin-left:0in; margin-right:0in"><span style="font-family:Calibri, sans-serif"><span style="font-size:16px">We are adding more and more countries as our distribution center grows. Currently the US and Austalia have the cheapest shipping options. We apologize that Europe is a bit expensive at the moment.</span></span></p>
                        </div>
                    </div>
                </div>
                                <div class="panel panel-default" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title ddshop-faq-question" itemprop="name">
                            <a id="faq-question-218924" role="button" data-toggle="collapse" data-parent="#ddshop-faq-a01" href="#collapse-faqitem-218924" aria-expanded="false" aria-controls="collapse218924" data-id="218924" class="question-title collapsed js-no-transition">
                                How long does shipping take?
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-faqitem-218924" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-question-218924" aria-expanded="false" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div class="panel-body ddshop-faq-answer" itemprop="text">
                            <p style="margin-left:0in; margin-right:0in"><span style="font-family:Calibri,sans-serif"><span style="font-size:16px">Shipping to USA and Australia is&nbsp;under 5-7 business days. Check our complete shipping time estimation <a href="https://ventyfan.com/policies/shipping-policy">here</a> to various countries.</span></span></p>
                        </div>
                    </div>
                </div>
                                <div class="panel panel-default" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title ddshop-faq-question" itemprop="name">
                            <a id="faq-question-218925" role="button" data-toggle="collapse" data-parent="#ddshop-faq-a01" href="#collapse-faqitem-218925" aria-expanded="false" aria-controls="collapse218925" data-id="218925" class="question-title collapsed js-no-transition">
                                What is the warranty on the fan?
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-faqitem-218925" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-question-218925" aria-expanded="false" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div class="panel-body ddshop-faq-answer" itemprop="text">
                            <p><span style="font-size:12.0pt">We offer a 100% money back guarantee if you do not want the fan within 30 days. You would cover the shipping cost back to us in the original packaging and box. If you receive a fan that has a defect contact us within 30 days and we will repair or replace it.</span></p>
                        </div>
                    </div>
                </div>
                                <div class="panel panel-default" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title ddshop-faq-question" itemprop="name">
                            <a id="faq-question-218926" role="button" data-toggle="collapse" data-parent="#ddshop-faq-a01" href="#collapse-faqitem-218926" aria-expanded="false" aria-controls="collapse218926" data-id="218926" class="question-title collapsed js-no-transition">
                                Does the battery really last 2 full days per charge?
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-faqitem-218926" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-question-218926" aria-expanded="false" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div class="panel-body ddshop-faq-answer" itemprop="text">
                            <p><span style="font-size:12.0pt"><span style="font-family:&quot;Calibri&quot;,sans-serif">Yes, depending on which functionality is used. The higher the speed setting set it will consume more power.</span></span></p>
                        </div>
                    </div>
                </div>
                                <div class="panel panel-default" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title ddshop-faq-question" itemprop="name">
                            <a id="faq-question-218927" role="button" data-toggle="collapse" data-parent="#ddshop-faq-a01" href="#collapse-faqitem-218927" aria-expanded="false" aria-controls="collapse218927" data-id="218927" class="question-title collapsed js-no-transition">
                                Does the fan oscillate?
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-faqitem-218927" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-question-218927" aria-expanded="false" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div class="panel-body ddshop-faq-answer" itemprop="text">
                            <p>Yep!</p>
                        </div>
                    </div>
                </div>
                                <div class="panel panel-default" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title ddshop-faq-question" itemprop="name">
                            <a id="faq-question-218928" role="button" data-toggle="collapse" data-parent="#ddshop-faq-a01" href="#collapse-faqitem-218928" aria-expanded="false" aria-controls="collapse218928" data-id="218928" class="question-title collapsed js-no-transition">
                                Who do I contact if I have an issue with my order?
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-faqitem-218928" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-question-218928" aria-expanded="false" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div class="panel-body ddshop-faq-answer" itemprop="text">
                            <p><span style="font-size:12.0pt">Contact us directly at support@ventyfan.com</span></p>
                        </div>
                    </div>
                </div>
                                <div class="panel panel-default" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title ddshop-faq-question" itemprop="name">
                            <a id="faq-question-235199" role="button" data-toggle="collapse" data-parent="#ddshop-faq-a01" href="#collapse-faqitem-235199" aria-expanded="false" aria-controls="collapse235199" data-id="235199" class="question-title collapsed js-no-transition">
                                What is the diameter of the fan?
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-faqitem-235199" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-question-235199" aria-expanded="false" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div class="panel-body ddshop-faq-answer" itemprop="text">
                            <p>Venty is 8 inches in diameter, folds to 3 inches, extends to 3.5 feet and weighs 2.6 lbs - perfect for travel!</p>
                        </div>
                    </div>
                </div>
                        </div>
        </div>
</div>
                            </div></div>
  </div>

</div>
</div>

</div>

  </main>

@endsection

@section('js')
<script>
    
</script>
@endsection