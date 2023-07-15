(window.theme = window.theme || {}),
  (window.slate = window.slate || {}),
  (window.lazySizesConfig = window.lazySizesConfig || {}),
  (lazySizesConfig.expFactor = 4),
  (function ($) {
    var $ = (jQuery = $);
    (slate.utils = {
      defaultTo: function (value, defaultValue) {
        return value == null || value !== value ? defaultValue : value;
      },
    }),
      (slate.a11y = {
        pageLinkFocus: function ($element) {
          var focusClass = "js-focus-hidden";
          $element
            .first()
            .attr("tabIndex", "-1")
            .focus()
            .addClass(focusClass)
            .one("blur", callback);
          function callback() {
            $element.first().removeClass(focusClass).removeAttr("tabindex");
          }
        },
        focusHash: function () {
          var hash = window.location.hash;
          hash &&
            document.getElementById(hash.slice(1)) &&
            this.pageLinkFocus($(hash));
        },
        bindInPageLinks: function () {
          $("a[href*=#]").on(
            "click",
            function (evt) {
              this.pageLinkFocus($(evt.currentTarget.hash));
            }.bind(this)
          );
        },
        trapFocus: function (options) {
          var eventName = options.namespace
            ? "focusin." + options.namespace
            : "focusin";
          options.$elementToFocus ||
            (options.$elementToFocus = options.$container),
            options.$container.attr("tabindex", "-1"),
            options.$elementToFocus.focus(),
            $(document).off("focusin"),
            $(document).on(eventName, function (evt) {
              options.$container[0] !== evt.target &&
                !options.$container.has(evt.target).length &&
                options.$container.focus();
            });
        },
        removeTrapFocus: function (options) {
          var eventName = options.namespace
            ? "focusin." + options.namespace
            : "focusin";
          options.$container &&
            options.$container.length &&
            options.$container.removeAttr("tabindex"),
            $(document).off(eventName);
        },
        lockMobileScrolling: function (namespace, $element) {
          if ($element) var $el = $element;
          else var $el = $(document.documentElement).add("body");
          $el.on("touchmove" + namespace, function () {
            return !1;
          });
        },
        unlockMobileScrolling: function (namespace, $element) {
          if ($element) var $el = $element;
          else var $el = $(document.documentElement).add("body");
          $el.off(namespace);
        },
      }),
      (theme.Sections = function () {
        (this.constructors = {}),
          (this.instances = []),
          $(document)
            .on("shopify:section:load", this._onSectionLoad.bind(this))
            .on("shopify:section:unload", this._onSectionUnload.bind(this))
            .on("shopify:section:select", this._onSelect.bind(this))
            .on("shopify:section:deselect", this._onDeselect.bind(this))
            .on("shopify:block:select", this._onBlockSelect.bind(this))
            .on("shopify:block:deselect", this._onBlockDeselect.bind(this));
      }),
      (theme.Sections.prototype = $.extend({}, theme.Sections.prototype, {
        createInstance: function (container, constructor) {
          var $container = $(container),
            id = $container.attr("data-section-id"),
            type = $container.attr("data-section-type");
          if (
            ((constructor = constructor || this.constructors[type]),
            typeof constructor != "undefined")
          ) {
            var instance = $.extend(new constructor(container), {
              id: id,
              type: type,
              container: container,
            });
            this.instances.push(instance);
          }
        },
        _onSectionLoad: function (evt, subSection, subSectionId) {
          AOS && AOS.refreshHard();
          var container = subSection || $("[data-section-id]", evt.target)[0];
          if (container) {
            this.createInstance(container);
            var instance = subSection
              ? subSectionId
              : this._findInstance(evt.detail.sectionId);
            subSection || this._loadSubSections(),
              instance &&
                typeof instance.onLoad == "function" &&
                instance.onLoad(evt);
          }
        },
        _loadSubSections: function () {
          AOS && AOS.refreshHard(),
            $("[data-subsection]").each(
              function (evt, el) {
                this._onSectionLoad(null, el, $(el).data("section-d"));
              }.bind(this)
            );
        },
        _onSectionUnload: function (evt) {
          var instance = this._removeInstance(evt.detail.sectionId);
          instance &&
            typeof instance.onUnload == "function" &&
            instance.onUnload(evt);
        },
        _onSelect: function (evt) {
          var instance = this._findInstance(evt.detail.sectionId);
          instance &&
            typeof instance.onSelect == "function" &&
            instance.onSelect(evt);
        },
        _onDeselect: function (evt) {
          var instance = this._findInstance(evt.detail.sectionId);
          instance &&
            typeof instance.onDeselect == "function" &&
            instance.onDeselect(evt);
        },
        _onBlockSelect: function (evt) {
          var instance = this._findInstance(evt.detail.sectionId);
          instance &&
            typeof instance.onBlockSelect == "function" &&
            instance.onBlockSelect(evt);
        },
        _onBlockDeselect: function (evt) {
          var instance = this._findInstance(evt.detail.sectionId);
          instance &&
            typeof instance.onBlockDeselect == "function" &&
            instance.onBlockDeselect(evt);
        },
        _findInstance: function (id) {
          for (var i = 0; i < this.instances.length; i++)
            if (this.instances[i].id === id) return this.instances[i];
        },
        _removeInstance: function (id) {
          for (var i = this.instances.length, instance; i--; )
            if (this.instances[i].id === id) {
              (instance = this.instances[i]), this.instances.splice(i, 1);
              break;
            }
          return instance;
        },
        register: function (type, constructor) {
          this.constructors[type] = constructor;
          var $sections = $("[data-section-type=" + type + "]");
          $sections.each(
            function (index2, container) {
              this.createInstance(container, constructor);
            }.bind(this)
          );
        },
      })),
      (theme.Currency = (function () {
        var moneyFormat = "$";
        function formatMoney(cents, format) {
          typeof cents == "string" && (cents = cents.replace(".", ""));
          var value = "",
            placeholderRegex = /\{\{\s*(\w+)\s*\}\}/,
            formatString = format || moneyFormat;
          function formatWithDelimiters(number, precision, thousands, decimal) {
            if (
              ((precision = slate.utils.defaultTo(precision, 2)),
              (thousands = slate.utils.defaultTo(thousands, ",")),
              (decimal = slate.utils.defaultTo(decimal, ".")),
              isNaN(number) || number == null)
            )
              return 0;
            number = (number / 100).toFixed(precision);
            var parts = number.split("."),
              dollarsAmount = parts[0].replace(
                /(\d)(?=(\d\d\d)+(?!\d))/g,
                "$1" + thousands
              ),
              centsAmount = parts[1] ? decimal + parts[1] : "";
            return dollarsAmount + centsAmount;
          }
          switch (formatString.match(placeholderRegex)[1]) {
            case "amount":
              value = formatWithDelimiters(cents, 2);
              break;
            case "amount_no_decimals":
              value = formatWithDelimiters(cents, 0);
              break;
            case "amount_with_comma_separator":
              value = formatWithDelimiters(cents, 2, ".", ",");
              break;
            case "amount_no_decimals_with_comma_separator":
              value = formatWithDelimiters(cents, 0, ".", ",");
              break;
            case "amount_no_decimals_with_space_separator":
              value = formatWithDelimiters(cents, 0, " ");
              break;
          }
          return formatString.replace(placeholderRegex, value);
        }
        return { formatMoney: formatMoney };
      })()),
      (theme.Images = (function () {
        function imageSize(src) {
          if (!src) return "620x";
          var match = src.match(
            /.+_((?:pico|icon|thumb|small|compact|medium|large|grande)|\d{1,4}x\d{0,4}|x\d{1,4})[_\.@]/
          );
          return match !== null ? match[1] : null;
        }
        function getSizedImageUrl(src, size) {
          if (size == null) return src;
          if (size === "master") return this.removeProtocol(src);
          var match = src.match(
            /\.(jpg|jpeg|gif|png|bmp|bitmap|tiff|tif)(\?v=\d+)?$/i
          );
          if (match != null) {
            var prefix = src.split(match[0]),
              suffix = match[0];
            return this.removeProtocol(prefix[0] + "_" + size + suffix);
          }
          return null;
        }
        function removeProtocol(path) {
          return path.replace(/http(s)?:/, "");
        }
        return {
          imageSize: imageSize,
          getSizedImageUrl: getSizedImageUrl,
          removeProtocol: removeProtocol,
        };
      })()),
      (slate.Variants = (function () {
        function Variants(options) {
          (this.$container = options.$container),
            (this.variants = options.variants),
            (this.singleOptionSelector = options.singleOptionSelector),
            (this.originalSelectorId = options.originalSelectorId),
            (this.enableHistoryState = options.enableHistoryState),
            (this.currentVariant = this._getVariantFromOptions()),
            $(this.singleOptionSelector, this.$container).on(
              "change",
              this._onSelectChange.bind(this)
            );
        }
        return (
          (Variants.prototype = $.extend({}, Variants.prototype, {
            _getCurrentOptions: function () {
              var currentOptions = $.map(
                $(this.singleOptionSelector, this.$container),
                function (element) {
                  var $element = $(element),
                    type = $element.attr("type"),
                    currentOption = {};
                  return type === "radio" || type === "checkbox"
                    ? $element[0].checked
                      ? ((currentOption.value = $element.val()),
                        (currentOption.index = $element.data("index")),
                        currentOption)
                      : !1
                    : ((currentOption.value = $element.val()),
                      (currentOption.index = $element.data("index")),
                      currentOption);
                }
              );
              return (
                (currentOptions = this._compact(currentOptions)), currentOptions
              );
            },
            _getVariantFromOptions: function () {
              var selectedValues = this._getCurrentOptions(),
                variants = this.variants,
                found = !1;
              return (
                variants.forEach(function (variant) {
                  var match = !0,
                    options = variant.options;
                  selectedValues.forEach(function (option) {
                    match && (match = variant[option.index] === option.value);
                  }),
                    match && (found = variant);
                }),
                found || null
              );
            },
            _onSelectChange: function () {
              var variant = this._getVariantFromOptions();
              this.$container.trigger({
                type: "variantChange",
                variant: variant,
              }),
                variant &&
                  (this._updateMasterSelect(variant),
                  this._updateImages(variant),
                  this._updatePrice(variant),
                  this._updateSKU(variant),
                  (this.currentVariant = variant),
                  this.enableHistoryState && this._updateHistoryState(variant));
            },
            _updateImages: function (variant) {
              var variantImage = variant.featured_image || {},
                currentVariantImage = this.currentVariant.featured_image || {};
              !variant.featured_image ||
                variantImage.src === currentVariantImage.src ||
                this.$container.trigger({
                  type: "variantImageChange",
                  variant: variant,
                });
            },
            _updatePrice: function (variant) {
              (variant.price === this.currentVariant.price &&
                variant.compare_at_price ===
                  this.currentVariant.compare_at_price) ||
                this.$container.trigger({
                  type: "variantPriceChange",
                  variant: variant,
                });
            },
            _updateSKU: function (variant) {
              variant.sku !== this.currentVariant.sku &&
                this.$container.trigger({
                  type: "variantSKUChange",
                  variant: variant,
                });
            },
            _updateHistoryState: function (variant) {
              if (!(!history.replaceState || !variant)) {
                var newurl =
                  window.location.protocol +
                  "//" +
                  window.location.host +
                  window.location.pathname +
                  "?variant=" +
                  variant.id;
                window.history.replaceState({ path: newurl }, "", newurl);
              }
            },
            _updateMasterSelect: function (variant) {
              $(this.originalSelectorId, this.$container).val(variant.id);
            },
            _compact: function (array) {
              for (
                var index2 = -1,
                  length = array == null ? 0 : array.length,
                  resIndex = 0,
                  result = [];
                ++index2 < length;

              ) {
                var value = array[index2];
                value && (result[resIndex++] = value);
              }
              return result;
            },
          })),
          Variants
        );
      })()),
      (slate.rte = {
        wrapTable: function () {
          $(".rte table").wrap('<div class="table-wrapper"></div>');
        },
        wrapVideo: function () {
          var $iframeVideo = $(
              '.rte iframe[src*="youtube.com/embed"], .rte iframe[src*="player.vimeo"]'
            ),
            $iframeReset = $iframeVideo.add("iframe#admin_bar_iframe");
          $iframeVideo.each(function () {
            $(this).parents(".video-wrapper").length ||
              $(this).wrap('<div class="video-wrapper"></div>');
          }),
            $iframeReset.each(function () {
              this.src = this.src;
            });
        },
      }),
      (theme.Modals = (function () {
        function Modal(id, name, options) {
          var defaults = {
            close: ".js-modal-close",
            open: ".js-modal-open-" + name,
            openClass: "modal--is-active",
            closingClass: "modal--is-closing",
            bodyOpenClass: "modal-open",
            bodyOpenSolidClass: "modal-open--solid",
            bodyClosingClass: "modal-closing",
            closeOffContentClick: !0,
          };
          if (
            ((this.id = id), (this.$modal = $("#" + id)), !this.$modal.length)
          )
            return !1;
          (this.nodes = {
            $parent: $("html").add("body"),
            $modalContent: this.$modal.find(".modal__inner"),
          }),
            (this.config = $.extend(defaults, options)),
            (this.modalIsOpen = !1),
            (this.$focusOnOpen = this.config.focusOnOpen
              ? $(this.config.focusOnOpen)
              : this.$modal),
            (this.isSolid = this.config.solid),
            this.init();
        }
        return (
          (Modal.prototype.init = function () {
            var $openBtn = $(this.config.open);
            $openBtn.attr("aria-expanded", "false"),
              $(this.config.open).on("click", this.open.bind(this)),
              this.$modal
                .find(this.config.close)
                .on("click", this.close.bind(this)),
              $("body").on(
                "drawerOpen",
                function () {
                  this.close();
                }.bind(this)
              );
          }),
          (Modal.prototype.open = function (evt) {
            var externalCall = !1;
            this.modalIsOpen ||
              (evt ? evt.preventDefault() : (externalCall = !0),
              evt &&
                evt.stopPropagation &&
                (evt.stopPropagation(),
                (this.$activeSource = $(evt.currentTarget))),
              this.modalIsOpen && !externalCall && this.close(),
              this.$modal.prepareTransition().addClass(this.config.openClass),
              this.nodes.$parent.addClass(this.config.bodyOpenClass),
              this.isSolid &&
                this.nodes.$parent.addClass(this.config.bodyOpenSolidClass),
              (this.modalIsOpen = !0),
              slate.a11y.trapFocus({
                $container: this.$modal,
                $elementToFocus: this.$focusOnOpen,
                namespace: "modal_focus",
              }),
              this.$activeSource &&
                this.$activeSource.attr("aria-expanded") &&
                this.$activeSource.attr("aria-expanded", "true"),
              $("body").trigger("modalOpen." + this.id),
              this.bindEvents());
          }),
          (Modal.prototype.close = function () {
            if (this.modalIsOpen) {
              $(document.activeElement).trigger("blur"),
                this.$modal
                  .prepareTransition()
                  .removeClass(this.config.openClass)
                  .addClass(this.config.closingClass),
                this.nodes.$parent.removeClass(this.config.bodyOpenClass),
                this.nodes.$parent.addClass(this.config.bodyClosingClass);
              var o = this;
              window.setTimeout(function () {
                o.nodes.$parent.removeClass(o.config.bodyClosingClass),
                  o.$modal.removeClass(o.config.closingClass);
              }, 500),
                this.isSolid &&
                  this.nodes.$parent.removeClass(
                    this.config.bodyOpenSolidClass
                  ),
                (this.modalIsOpen = !1),
                slate.a11y.removeTrapFocus({
                  $container: this.$modal,
                  namespace: "modal_focus",
                }),
                this.$activeSource &&
                  this.$activeSource.attr("aria-expanded") &&
                  this.$activeSource.attr("aria-expanded", "false").focus(),
                $("body").trigger("modalClose." + this.id),
                this.unbindEvents();
            }
          }),
          (Modal.prototype.bindEvents = function () {
            this.nodes.$parent.on(
              "keyup.modal",
              function (evt) {
                evt.keyCode === 27 && this.close();
              }.bind(this)
            ),
              this.config.closeOffContentClick &&
                (this.$modal.on("click.modal", this.close.bind(this)),
                this.nodes.$modalContent.on("click.modal", function (evt) {
                  evt.stopImmediatePropagation();
                }));
          }),
          (Modal.prototype.unbindEvents = function () {
            this.nodes.$parent.off(".modal"),
              this.config.closeOffContentClick &&
                (this.$modal.off(".modal"),
                this.nodes.$modalContent.off(".modal"));
          }),
          Modal
        );
      })()),
      (theme.Drawers = (function () {
        function Drawer(id, name) {
          if (
            ((this.config = {
              id: id,
              close: ".js-drawer-close",
              open: ".js-drawer-open-" + name,
              openClass: "js-drawer-open",
              closingClass: "js-drawer-closing",
              activeDrawer: "drawer--is-open",
              namespace: ".drawer-" + name,
            }),
            (this.$nodes = {
              parent: $(document.documentElement).add("body"),
              page: $("#MainContent"),
            }),
            (this.$drawer = $("#" + id)),
            !this.$drawer.length)
          )
            return !1;
          (this.isOpen = !1), this.init();
        }
        return (
          (Drawer.prototype = $.extend({}, Drawer.prototype, {
            init: function () {
              var $openBtn = $(this.config.open);
              $openBtn.attr("aria-expanded", "false"),
                $openBtn.on("click", this.open.bind(this)),
                this.$drawer
                  .find(this.config.close)
                  .on("click", this.close.bind(this));
            },
            open: function (evt) {
              evt && evt.preventDefault(),
                !this.isOpen &&
                  (evt &&
                    evt.stopPropagation &&
                    (evt.stopPropagation(),
                    (this.$activeSource = $(evt.currentTarget))),
                  this.$drawer
                    .prepareTransition()
                    .addClass(this.config.activeDrawer),
                  this.$nodes.parent.addClass(this.config.openClass),
                  (this.isOpen = !0),
                  slate.a11y.trapFocus({
                    $container: this.$drawer,
                    namespace: "drawer_focus",
                  }),
                  $("body").trigger("drawerOpen." + this.config.id),
                  this.$activeSource &&
                    this.$activeSource.attr("aria-expanded") &&
                    this.$activeSource.attr("aria-expanded", "true"),
                  this.bindEvents());
            },
            close: function () {
              if (this.isOpen) {
                $(document.activeElement).trigger("blur"),
                  this.$drawer
                    .prepareTransition()
                    .removeClass(this.config.activeDrawer),
                  this.$nodes.parent.removeClass(this.config.openClass),
                  this.$nodes.parent.addClass(this.config.closingClass);
                var o = this;
                window.setTimeout(function () {
                  o.$nodes.parent.removeClass(o.config.closingClass);
                }, 500),
                  (this.isOpen = !1),
                  slate.a11y.removeTrapFocus({
                    $container: this.$drawer,
                    namespace: "drawer_focus",
                  }),
                  this.$activeSource &&
                    this.$activeSource.attr("aria-expanded") &&
                    this.$activeSource.attr("aria-expanded", "false"),
                  this.unbindEvents();
              }
            },
            bindEvents: function () {
              slate.a11y.lockMobileScrolling(
                this.config.namespace,
                this.$nodes.page
              ),
                this.$nodes.page.on(
                  "click" + this.config.namespace,
                  function () {
                    return this.close(), !1;
                  }.bind(this)
                ),
                this.$nodes.parent.on(
                  "keyup" + this.config.namespace,
                  function (evt) {
                    evt.keyCode === 27 && this.close();
                  }.bind(this)
                );
            },
            unbindEvents: function () {
              slate.a11y.unlockMobileScrolling(
                this.config.namespace,
                this.$nodes.page
              ),
                this.$nodes.parent.off(this.config.namespace),
                this.$nodes.page.off(this.config.namespace);
            },
          })),
          Drawer
        );
      })()),
      (theme.cart = {
        getCart: function () {
          return $.getJSON("/cart.js");
        },
        changeItem: function (key2, qty) {
          return this._updateCart({
            type: "POST",
            url: "/cart/change.js",
            data: "quantity=" + qty + "&id=" + key2,
            dataType: "json",
          });
        },
        addItemFromForm: function (data) {
          return this._updateCart({
            type: "POST",
            url: "/cart/add.js",
            data: data,
            dataType: "json",
          });
        },
        _updateCart: function (params) {
          return $.ajax(params).then(
            function (cart) {
              return cart;
            }.bind(this)
          );
        },
        updateNote: function (note) {
          var params = {
            type: "POST",
            url: "/cart/update.js",
            data: "note=" + theme.cart.attributeToString(note),
            dataType: "json",
            success: function (cart) {},
            error: function (XMLHttpRequest, textStatus) {},
          };
          $.ajax(params);
        },
        attributeToString: function (attribute) {
          return (
            typeof attribute != "string" &&
              ((attribute += ""),
              attribute === "undefined" && (attribute = "")),
            $.trim(attribute)
          );
        },
      }),
      $(function () {
        $("body").on("click", ".cart__checkout", function () {
          $(this).addClass("btn--loading");
        }),
          $("body").on("change", 'textarea[name="note"]', function () {
            var newNote = $(this).val();
            theme.cart.updateNote(newNote);
          }),
          $("body").on("click", ".cart__checkout--ajax", function (evt) {
            if (!$("#CartAgree").is(":checked"))
              return (
                alert(theme.strings.cartTermsConfirmation),
                $(this).removeClass("btn--loading"),
                !1
              );
          }),
          $("body").on("click", ".cart__checkout--page", function (evt) {
            if (!$("#CartPageAgree").is(":checked"))
              return (
                alert(theme.strings.cartTermsConfirmation),
                $(this).removeClass("btn--loading"),
                !1
              );
          });
      }),
      (theme.QtySelector = (function () {
        var classes = {
          input: ".js-qty__num",
          plus: ".js-qty__adjust--plus",
          minus: ".js-qty__adjust--minus",
        };
        function QtySelector($el, options) {
          (this.$wrapper = $el),
            (this.$originalInput = $el.find('input[type="number"]')),
            (this.minValue = this.$originalInput.attr("min") || 1);
          var defaults = { namespace: null };
          (this.options = $.extend(defaults, options)),
            (this.source = $("#JsQty").html()),
            (this.template = Handlebars.compile(this.source));
          var quantities = {
            current: this._getOriginalQty(),
            add: this._getOriginalQty() + 1,
            minus: this._getOriginalQty() - 1,
          };
          (this.data = {
            key: this._getProductKey(),
            itemQty: quantities.current,
            itemAdd: quantities.add,
            itemMinus: quantities.minus,
            inputName: this._getInputName(),
            inputId: this._getId(),
          }),
            this.$originalInput.after(this.template(this.data)).remove(),
            (this.$input = this.$wrapper.find(classes.input)),
            (this.$plus = this.$wrapper.find(classes.plus)),
            (this.$minus = this.$wrapper.find(classes.minus)),
            this.initEventListeners();
        }
        return (
          (QtySelector.prototype = $.extend({}, QtySelector.prototype, {
            _getProductKey: function () {
              return this.$originalInput.data("id") || null;
            },
            _getOriginalQty: function () {
              return parseInt(this.$originalInput.val());
            },
            _getInputName: function () {
              return this.$originalInput.attr("name");
            },
            _getId: function () {
              return this.$originalInput.attr("id");
            },
            initEventListeners: function () {
              this.$plus.on(
                "click",
                function () {
                  var qty = this.validateQty(this.$input.val());
                  this.addQty(qty);
                }.bind(this)
              ),
                this.$minus.on(
                  "click",
                  function () {
                    var qty = this.validateQty(this.$input.val());
                    this.subtractQty(qty);
                  }.bind(this)
                ),
                this.$input.on(
                  "change",
                  function () {
                    var qty = this.validateQty(this.$input.val());
                    this.changeQty(qty);
                  }.bind(this)
                );
            },
            addQty: function (number) {
              var qty = number + 1;
              this.changeQty(qty);
            },
            subtractQty: function (number) {
              var qty = number - 1;
              qty <= this.minValue && (qty = this.minValue),
                this.changeQty(qty);
            },
            changeQty: function (qty) {
              this.$input.val(qty),
                $("body").trigger("qty" + this.options.namespace, [
                  this.data.key,
                  qty,
                ]);
            },
            validateQty: function (number) {
              return (
                (parseFloat(number) == parseInt(number) && !isNaN(number)) ||
                  (number = 1),
                parseInt(number)
              );
            },
          })),
          QtySelector
        );
      })()),
      (theme.CartDrawer = (function () {
        var config = { namespace: ".ajaxcart" },
          selectors = {
            drawer: "#CartDrawer",
            container: "#CartContainer",
            template: "#CartTemplate",
            fixedFooter: ".drawer__footer--fixed",
            fixedInnerContent: ".drawer__inner--has-fixed-footer",
            cartBubble: ".cart-link__bubble",
          };
        function CartDrawer() {
          (this.status = { loaded: !1, loading: !1 }),
            (this.qtySelectors = []),
            (this.drawer = new theme.Drawers("CartDrawer", "cart"));
          var source = $(selectors.template).html();
          (this.template = Handlebars.compile(source)),
            theme.cart.getCart().then(this.buildCart.bind(this)),
            this.initEventListeners();
        }
        return (
          (CartDrawer.prototype = $.extend({}, CartDrawer.prototype, {
            initEventListeners: function () {
              $("body").on(
                "updateCart" + config.namespace,
                this.initQtySelectors.bind(this)
              ),
                $("body").on(
                  "updateCart" + config.namespace,
                  this.sizeFooter.bind(this)
                ),
                $("body").on(
                  "updateCart" + config.namespace,
                  this.updateCartNotification.bind(this)
                ),
                $("body").on(
                  "drawerOpen.CartDrawer",
                  this.sizeFooter.bind(this)
                ),
                $(window).on(
                  "resize" + config.namespace,
                  $.debounce(150, this.sizeFooter.bind(this))
                ),
                $("body").on(
                  "added.ajaxProduct",
                  function () {
                    theme.cart.getCart().then(
                      function (cart) {
                        this.buildCart(cart, !0);
                      }.bind(this)
                    );
                  }.bind(this)
                );
            },
            buildCart: function (cart, openDrawer) {
              if ((this.loading(!0), this.emptyCart(), cart.item_count === 0))
                $(selectors.container).append(
                  '<p class="appear-animation appear-delay-3">' +
                    theme.strings.cartEmpty +
                    '</p><div class="cart-box"><img src="https://cdn.shopify.com/s/files/1/0613/3297/9961/files/star-rating.png?v=1678141505"><p style="font-weight:bold">"Venty is the best purchase I\u2019ve made online. Ever."</p><p>- Julie Sanders</p><p>Free US Shipping on 2+ fans.</p></div>'
                );
              else {
                var items = [],
                  item = {},
                  data = {},
                  animation_row = 1;
                $.each(cart.items, function (index2, product) {
                  var prodImg;
                  product.image !== null
                    ? (prodImg = product.image.replace(/(\.[^.]*)$/, "_180x$1"))
                    : (prodImg =
                        "//cdn.shopify.com/s/assets/admin/no-image-medium-cc9732cb976dd349a0df1d39816fbcc7.gif"),
                    product.properties !== null &&
                      $.each(product.properties, function (key2, value) {
                        (key2.charAt(0) === "_" || !value) &&
                          delete product.properties[key2];
                      }),
                    (animation_row += 2),
                    (item = {
                      key: product.key,
                      url: product.url,
                      img: prodImg,
                      animationRow: animation_row,
                      name: product.product_title,
                      variation: product.variant_title,
                      properties: product.properties,
                      itemQty: product.quantity,
                      price: theme.Currency.formatMoney(
                        product.price,
                        theme.settings.moneyFormat
                      ),
                      discountedPrice: theme.Currency.formatMoney(
                        product.price -
                          product.total_discount / product.quantity,
                        theme.settings.moneyFormat
                      ),
                      discounts: product.discounts,
                      discountsApplied:
                        product.price !==
                        product.price - product.total_discount,
                      vendor: product.vendor,
                    }),
                    items.push(item);
                }),
                  (animation_row += 2),
                  (data = {
                    items: items,
                    note: cart.note,
                    lastAnimationRow: animation_row,
                    totalPrice: theme.Currency.formatMoney(
                      cart.total_price,
                      theme.settings.moneyFormat
                    ),
                    totalCartDiscount:
                      cart.total_discount === 0
                        ? 0
                        : theme.strings.cartSavings.replace(
                            "[savings]",
                            theme.Currency.formatMoney(
                              cart.total_discount,
                              theme.settings.moneyFormat
                            )
                          ),
                  }),
                  $(selectors.container).append(this.template(data));
              }
              (this.status.loaded = !0),
                this.loading(!1),
                $("body").hasClass("currencies-enabled") &&
                  theme.currencySwitcher.ajaxrefresh(),
                $("body").trigger("updateCart" + config.namespace, cart),
                window.Shopify &&
                  Shopify.StorefrontExpressButtons &&
                  (Shopify.StorefrontExpressButtons.initialize(),
                  setTimeout(
                    function () {
                      this.sizeFooter();
                    }.bind(this),
                    800
                  )),
                openDrawer === !0 && this.drawer.open();
            },
            initQtySelectors: function () {
              (this.qtySelectors = []),
                $(selectors.container)
                  .find(".js-qty")
                  .each(
                    function (index2, el) {
                      var selector = new theme.QtySelector($(el), {
                        namespace: ".cart-drawer",
                      });
                      this.qtySelectors.push(selector);
                    }.bind(this)
                  ),
                $("body").on("qty.cart-drawer", this.updateItem.bind(this));
            },
            updateItem: function (evt, key2, qty) {
              this.status.loading ||
                (this.loading(!0),
                theme.cart
                  .changeItem(key2, qty)
                  .then(
                    function (cart) {
                      this.updateSuccess(cart);
                    }.bind(this)
                  )
                  .catch(
                    function (XMLHttpRequest) {
                      this.updateError(XMLHttpRequest);
                    }.bind(this)
                  )
                  .always(
                    function () {
                      this.loading(!1);
                    }.bind(this)
                  ));
            },
            loading: function (state) {
              (this.status.loading = state),
                state
                  ? $(selectors.container).addClass("is-loading")
                  : $(selectors.container).removeClass("is-loading");
            },
            emptyCart: function () {
              $(selectors.container).empty();
            },
            updateSuccess: function (cart) {
              this.buildCart(cart);
            },
            updateError: function (XMLHttpRequest) {
              XMLHttpRequest.responseJSON &&
                XMLHttpRequest.responseJSON.description &&
                console.warn(XMLHttpRequest.responseJSON.description);
            },
            sizeFooter: function () {
              if ($(selectors.drawer).hasClass("drawer--has-fixed-footer")) {
                var $cartFooter = $(selectors.drawer)
                    .find(selectors.fixedFooter)
                    .removeAttr("style"),
                  $cartInner = $(selectors.drawer)
                    .find(selectors.fixedInnerContent)
                    .removeAttr("style"),
                  cartFooterHeight = $cartFooter.outerHeight();
                $cartInner.css("bottom", cartFooterHeight),
                  $cartFooter.css("height", cartFooterHeight);
              }
            },
            updateCartNotification: function (evt, cart) {
              cart.items.length > 0
                ? $(selectors.cartBubble).addClass("cart-link__bubble--visible")
                : $(selectors.cartBubble).removeClass(
                    "cart-link__bubble--visible"
                  );
            },
          })),
          CartDrawer
        );
      })()),
      (theme.AjaxProduct = (function () {
        var status2 = { loading: !1 };
        function ProductForm($form) {
          (this.$form = $form),
            (this.$addToCart = this.$form.find(".add-to-cart")),
            this.$form.length &&
              this.$form.on("submit", this.addItemFromForm.bind(this));
        }
        return (
          (ProductForm.prototype = $.extend({}, ProductForm.prototype, {
            addItemFromForm: function (evt, callback) {
              if ((evt.preventDefault(), status2.loading)) {
                console.warn("already adding item to cart | bail");
                return;
              }
              this.$addToCart.addClass("btn--loading"), (status2.loading = !0);
              var data = this.$form.serialize();
              theme.cart
                .addItemFromForm(data)
                .then(
                  function (product) {
                    this.success(product);
                  }.bind(this)
                )
                .catch(
                  function (XMLHttpRequest) {
                    this.error(XMLHttpRequest);
                  }.bind(this)
                )
                .always(
                  function () {
                    (status2.loading = !1),
                      this.$addToCart.removeClass("btn--loading");
                  }.bind(this)
                );
            },
            success: function (product) {
              this.$form.find(".errors").remove(),
                $("body").trigger("added.ajaxProduct");
            },
            error: function (XMLHttpRequest) {
              this.$form.find(".errors").remove(),
                XMLHttpRequest.responseJSON &&
                  XMLHttpRequest.responseJSON.description &&
                  (console.warn(XMLHttpRequest.responseJSON.description),
                  this.$form.prepend(
                    '<div class="errors text-center">' +
                      XMLHttpRequest.responseJSON.description +
                      "</div>"
                  ));
            },
          })),
          ProductForm
        );
      })()),
      (theme.collapsibles = (function () {
        var selectors = {
            trigger: ".collapsible-trigger",
            module: ".collapsible-content",
            moduleInner: ".collapsible-content__inner",
          },
          classes = {
            hide: "hide",
            open: "is-open",
            autoHeight: "collapsible--auto-height",
          },
          isTransitioning = !1;
        function init() {
          $(selectors.trigger).each(function () {
            var $el = $(this),
              state = $el.hasClass(classes.open);
            $el.attr("aria-expanded", state);
          }),
            $("body, .modal__inner").on(
              "click",
              selectors.trigger,
              function () {
                if (!isTransitioning) {
                  isTransitioning = !0;
                  var $el = $(this),
                    isOpen = $el.hasClass(classes.open),
                    moduleId = $el.attr("aria-controls"),
                    $module = $("#" + moduleId),
                    height = $module.find(selectors.moduleInner).outerHeight(),
                    isAutoHeight = $el.hasClass(classes.autoHeight);
                  isOpen &&
                    isAutoHeight &&
                    setTimeout(function () {
                      (height = 0),
                        setTransitionHeight(
                          $module,
                          height,
                          isOpen,
                          isAutoHeight
                        );
                    }, 0),
                    isOpen && !isAutoHeight && (height = 0),
                    $el
                      .attr("aria-expanded", !isOpen)
                      .toggleClass(classes.open, !isOpen),
                    setTransitionHeight($module, height, isOpen, isAutoHeight);
                }
              }
            );
        }
        function setTransitionHeight($module, height, isOpen, isAutoHeight) {
          if (
            ($module
              .removeClass(classes.hide)
              .prepareTransition()
              .css("height", height)
              .toggleClass(classes.open, !isOpen),
            !isOpen && isAutoHeight)
          ) {
            var o = $module;
            window.setTimeout(function () {
              o.css("height", "auto"), (isTransitioning = !1);
            }, 500);
          } else isTransitioning = !1;
        }
        return { init: init };
      })()),
      (theme.headerNav = (function () {
        var $parent = $(document.documentElement).add("body"),
          $page = $("#MainContent"),
          selectors = {
            wrapper: ".header-wrapper",
            siteHeader: ".site-header",
            searchBtn: ".js-search-header",
            closeSearch: ".js-search-header-close",
            searchContainer: ".site-header__search-container",
            logoContainer: ".site-header__logo",
            logo: ".site-header__logo img",
            navigation: ".site-navigation",
            navContainerWithLogo: ".header-item--logo",
            navItems: ".site-nav__item",
            navLinks: ".site-nav__link",
            navLinksWithDropdown: ".site-nav__link--has-dropdown",
            navDropdownLinks: ".site-nav__dropdown-link--second-level",
          },
          classes = {
            hasDropdownClass: "site-nav--has-dropdown",
            hasSubDropdownClass: "site-nav__deep-dropdown-trigger",
            dropdownActive: "is-focused",
          },
          config = {
            namespace: ".siteNav",
            wrapperOverlayed: !1,
            overlayedClass: "is-light",
            stickyEnabled: !1,
            stickyActive: !1,
            stickyClass: "site-header--stuck",
            openTransitionClass: "site-header--opening",
            lastScroll: 0,
          },
          $window,
          $navContainerWithLogo,
          $logoContainer,
          $nav,
          $wrapper,
          $siteHeader;
        function init() {
          ($window = $(window)),
            ($navContainerWithLogo = $(selectors.navContainerWithLogo)),
            ($logoContainer = $(selectors.logoContainer)),
            ($nav = $(selectors.navigation)),
            ($wrapper = $(selectors.wrapper)),
            ($siteHeader = $(selectors.siteHeader)),
            (config.stickyEnabled = $siteHeader.data("sticky")),
            config.stickyEnabled &&
              ((config.wrapperOverlayed = $wrapper.hasClass(
                config.overlayedClass
              )),
              stickyHeader()),
            accessibleDropdowns(),
            searchDrawer(),
            $window.on("load" + config.namespace, resizeLogo),
            $window.on(
              "resize" + config.namespace,
              $.debounce(150, resizeLogo)
            );
        }
        function unload() {
          $(window).off(config.namespace),
            $(selectors.searchBtn).off(config.namespace),
            $(selectors.closeSearch).off(config.namespace),
            $parent.off(config.namespace),
            $(selectors.navLinks).off(config.namespace),
            $(selectors.navDropdownLinks).off(config.namespace);
        }
        function searchDrawer() {
          $(selectors.searchBtn).on("click" + config.namespace, function (evt) {
            evt.preventDefault(), openSearchDrawer();
          }),
            $(selectors.closeSearch).on(
              "click" + config.namespace,
              function () {
                closeSearchDrawer();
              }
            );
        }
        function openSearchDrawer() {
          $(selectors.searchContainer).addClass("is-active"),
            $parent.addClass("js-drawer-open js-drawer-open--search"),
            slate.a11y.trapFocus({
              $container: $(selectors.searchContainer),
              namespace: "header_search",
              $elementToFocus: $(selectors.searchContainer).find("input"),
            }),
            theme.config.bpSmall &&
              config.stickyEnabled &&
              config.lastScroll < 300 &&
              window.scrollTo(0, 0),
            slate.a11y.lockMobileScrolling(config.namespace),
            $page.on("click" + config.namespace, function () {
              return closeSearchDrawer(), !1;
            }),
            $parent.on("keyup" + config.namespace, function (evt) {
              evt.keyCode === 27 && closeSearchDrawer();
            });
        }
        function closeSearchDrawer() {
          $(document.activeElement).trigger("blur"),
            $parent
              .removeClass("js-drawer-open js-drawer-open--search")
              .off(config.namespace),
            $(selectors.searchContainer).removeClass("is-active"),
            slate.a11y.removeTrapFocus({
              $container: $(selectors.searchContainer),
              namespace: "header_search",
            }),
            slate.a11y.unlockMobileScrolling(config.namespace),
            $page.off("click" + config.namespace),
            $parent.off("keyup" + config.namespace);
        }
        function resizeLogo() {
          $(selectors.logo).each(function () {
            var $el = $(this),
              logoWidthOnScreen = $el.width(),
              containerWidth = $el.closest(".grid__item").width();
            logoWidthOnScreen > containerWidth
              ? $el.css("maxWidth", containerWidth)
              : $el.removeAttr("style");
          });
        }
        function accessibleDropdowns() {
          var hasActiveDropdown = !1,
            hasActiveSubDropdown = !1,
            closeOnClickActive = !1;
          theme.config.isTouch &&
            ($(selectors.navLinksWithDropdown).on(
              "touchend" + config.namespace,
              function (evt) {
                var $el = $(this),
                  $parentItem = $el.parent();
                $parentItem.hasClass(classes.dropdownActive)
                  ? window.location.replace($el.attr("href"))
                  : (evt.preventDefault(),
                    closeDropdowns(),
                    openFirstLevelDropdown($el));
              }
            ),
            $(selectors.navDropdownLinks).on(
              "touchend" + config.namespace,
              function (evt) {
                var $el = $(this),
                  $parentItem = $el.parent();
                $parentItem.hasClass(classes.hasSubDropdownClass)
                  ? $parentItem.hasClass(classes.dropdownActive)
                    ? window.location.replace($el.attr("href"))
                    : (evt.preventDefault(),
                      closeThirdLevelDropdown(),
                      openSecondLevelDropdown($el))
                  : window.location.replace($el.attr("href"));
              }
            )),
            $(selectors.navLinks).on(
              "focusin mouseover" + config.namespace,
              function () {
                hasActiveDropdown && closeSecondLevelDropdown(),
                  hasActiveSubDropdown && closeThirdLevelDropdown(),
                  openFirstLevelDropdown($(this));
              }
            ),
            $(selectors.navLinks).on(
              "mouseleave" + config.namespace,
              function () {
                closeDropdowns();
              }
            ),
            $(selectors.navDropdownLinks).on(
              "focusin" + config.namespace,
              function () {
                closeThirdLevelDropdown(), openSecondLevelDropdown($(this), !0);
              }
            );
          function openFirstLevelDropdown($el) {
            var $parentItem = $el.parent();
            if (
              ($parentItem.hasClass(classes.hasDropdownClass) &&
                ($parentItem.addClass(classes.dropdownActive),
                (hasActiveDropdown = !0)),
              !theme.config.isTouch && !closeOnClickActive)
            ) {
              var eventType = theme.config.isTouch ? "touchend" : "click";
              (closeOnClickActive = !0),
                $("body").on(eventType + config.namespace, function () {
                  closeDropdowns(),
                    $("body").off(config.namespace),
                    (closeOnClickActive = !1);
                });
            }
          }
          function openSecondLevelDropdown($el, skipCheck) {
            var $parentItem = $el.parent();
            ($parentItem.hasClass(classes.hasSubDropdownClass) || skipCheck) &&
              ($parentItem.addClass(classes.dropdownActive),
              (hasActiveSubDropdown = !0));
          }
          function closeDropdowns() {
            closeSecondLevelDropdown(), closeThirdLevelDropdown();
          }
          function closeSecondLevelDropdown() {
            $(selectors.navItems).removeClass(classes.dropdownActive);
          }
          function closeThirdLevelDropdown() {
            $(selectors.navDropdownLinks)
              .parent()
              .removeClass(classes.dropdownActive);
          }
        }
        function stickyHeader() {
          (config.lastScroll = 0),
            $siteHeader.wrap('<div class="site-header-sticky"></div>'),
            stickyHeaderHeight(),
            $window.on(
              "resize" + config.namespace,
              $.debounce(50, stickyHeaderHeight)
            ),
            $window.on(
              "scroll" + config.namespace,
              $.throttle(15, stickyHeaderScroll)
            ),
            Shopify &&
              Shopify.designMode &&
              setTimeout(function () {
                stickyHeaderHeight();
              }, 250);
        }
        function stickyHeaderHeight() {
          var $stickyHeader = $(".site-header-sticky").css(
            "height",
            $siteHeader.outerHeight(!0)
          );
        }
        function stickyHeaderScroll() {
          var scroll = $window.scrollTop(),
            threshold = 250;
          if (scroll > threshold) {
            if (config.stickyActive) return;
            (config.stickyActive = !0),
              $siteHeader.addClass(config.stickyClass),
              config.wrapperOverlayed &&
                $wrapper.removeClass(config.overlayedClass),
              setTimeout(function () {
                $siteHeader.addClass(config.openTransitionClass);
              }, 100);
          } else {
            if (!config.stickyActive) return;
            (config.stickyActive = !1),
              $siteHeader
                .removeClass(config.openTransitionClass)
                .removeClass(config.stickyClass),
              config.wrapperOverlayed &&
                $wrapper.addClass(config.overlayedClass);
          }
          config.lastScroll = scroll;
        }
        return { init: init, unload: unload };
      })()),
      (theme.articleImages = (function () {
        var cache = {};
        function init() {
          (cache.$rteImages = $(".rte--indented-images")),
            cache.$rteImages.length && $(window).on("load", setImages);
        }
        function setImages() {
          cache.$rteImages.find("img").each(function () {
            var $el = $(this),
              attr = $el.attr("style");
            (!attr || attr == "float: none;") &&
              $el.width() < cache.$rteImages.width() &&
              $el.addClass("rte__no-indent");
          });
        }
        return { init: init };
      })()),
      (theme.Slideshow = (function () {
        this.$slideshow = null;
        var classes = {
          next: "is-next",
          init: "is-init",
          wrapper: "slideshow-wrapper",
          slideshow: "slideshow",
          currentSlide: "slick-current",
          pauseButton: "slideshow__pause",
          isPaused: "is-paused",
        };
        function slideshow(el, args) {
          (this.$slideshow = $(el)),
            (this.$wrapper = this.$slideshow.closest("." + classes.wrapper)),
            (this.$pause = this.$wrapper.find("." + classes.pauseButton)),
            (this.settings = {
              accessibility: !0,
              arrows: !!args.arrows,
              dots: !!args.dots,
              draggable: !0,
              touchThreshold: 5,
              pauseOnHover: !1,
              autoplay: this.$slideshow.data("autoplay"),
              autoplaySpeed: this.$slideshow.data("speed"),
            }),
            this.$slideshow.on("init", this.init.bind(this)),
            this.$slideshow.slick(this.settings),
            this.$pause.on("click", this._togglePause.bind(this));
        }
        return (
          (slideshow.prototype = $.extend({}, slideshow.prototype, {
            init: function (event, obj) {
              (this.$slideshowList = obj.$list),
                (this.$slickDots = obj.$dots),
                (this.$allSlides = obj.$slides),
                (this.slideCount = obj.slideCount),
                this.$slideshow.addClass(classes.init),
                this._a11y(),
                this._clonedLazyloading();
            },
            destroy: function () {
              this.$slideshow.slick("unslick");
            },
            _play: function () {
              this.$slideshow.slick("slickPause"),
                $(classes.pauseButton).addClass("is-paused");
            },
            _pause: function () {
              this.$slideshow.slick("slickPlay"),
                $(classes.pauseButton).removeClass("is-paused");
            },
            _togglePause: function () {
              var slideshowSelector = this._getSlideshowId(this.$pause);
              this.$pause.hasClass(classes.isPaused)
                ? (this.$pause.removeClass(classes.isPaused),
                  $(slideshowSelector).slick("slickPlay"))
                : (this.$pause.addClass(classes.isPaused),
                  $(slideshowSelector).slick("slickPause"));
            },
            _getSlideshowId: function ($el) {
              return "#Slideshow-" + $el.data("id");
            },
            _activeSlide: function () {
              return this.$slideshow.find(".slick-active");
            },
            _currentSlide: function () {
              return this.$slideshow.find(".slick-current");
            },
            _nextSlide: function (index2) {
              return this.$slideshow.find(
                '.slideshow__slide[data-slick-index="' + index2 + '"]'
              );
            },
            _a11y: function () {
              var $list = this.$slideshowList,
                autoplay = this.settings.autoplay;
              $list &&
                ($list.removeAttr("aria-live"),
                $(classes.wrapper).on(
                  "focusin",
                  function (evt) {
                    $(classes.wrapper).has(evt.target).length &&
                      ($list.attr("aria-live", "polite"),
                      autoplay && this._pause());
                  }.bind(this)
                ),
                $(classes.wrapper).on(
                  "focusout",
                  function (evt) {
                    $(classes.wrapper).has(evt.target).length &&
                      ($list.removeAttr("aria-live"), autoplay && this._play());
                  }.bind(this)
                ));
            },
            _clonedLazyloading: function () {
              var $slideshow = this.$slideshow;
              $slideshow.find(".slick-slide").each(
                function (index2, el) {
                  var $slide = $(el);
                  if ($slide.hasClass("slick-cloned")) {
                    var slideId = $slide.data("id"),
                      $slideImg = $slide
                        .find(".hero__image")
                        .removeClass("lazyloading")
                        .addClass("lazyloaded");
                    setTimeout(function () {
                      var loadedImageStyle = $slideshow
                        .find(
                          ".slideshow__slide--" +
                            slideId +
                            ":not(.slick-cloned) .hero__image"
                        )
                        .attr("style");
                      loadedImageStyle &&
                        $slideImg.attr("style", loadedImageStyle);
                    }, this.settings.autoplaySpeed / 1.5);
                  }
                }.bind(this)
              );
            },
          })),
          slideshow
        );
      })()),
      (theme.announcementBar = (function () {
        var selectors = {
            bar: ".announcement",
            text: ".announcement__text",
            closeBtn: ".announcement__close",
          },
          classes = {
            opening: "announcement--opening",
            closed: "announcement--closed",
          },
          config = { namespace: ".announcementBar" };
        function init() {
          $(selectors.closeBtn).length &&
            (theme.config.hasSessionStorage &&
              sessionStorage[announcementBarText()] !== "hidden" &&
              window.setTimeout(function () {
                announcementBarShow();
              }, 2e3),
            theme.config.hasSessionStorage ||
              window.setTimeout(function () {
                announcementBarShow();
              }, 2e3),
            $(selectors.closeBtn).on("click", function (evt) {
              evt.preventDefault(), announcementBarClose();
            }),
            $(window).on(
              "resize" + config.namespace,
              $.debounce(150, announcementBarHeight)
            ));
        }
        function unload() {
          $(window).off(config.namespace);
        }
        function announcementBarShow() {
          $(selectors.bar).removeClass(classes.closed), announcementBarHeight();
        }
        function announcementBarHeight() {
          var barHeight = $(selectors.text).outerHeight(!0);
          $(selectors.bar)
            .addClass(classes.opening)
            .prepareTransition()
            .css({ height: barHeight }),
            $(selectors.closeBtn).css({ height: barHeight });
        }
        function announcementBarClose() {
          theme.config.hasSessionStorage &&
            sessionStorage.setItem(announcementBarText(), "hidden");
          var barHeight = $(selectors.bar).height();
          $(selectors.bar).addClass(classes.closed);
        }
        function announcementBarText() {
          return $(selectors.text).data("text");
        }
        return { init: init, unload: unload };
      })()),
      (theme.currencySwitcher = (function () {
        var selectors = { dataDiv: "#CurrencyData", picker: ".currency-input" },
          data = {};
        function init() {
          var $dataDiv = $(selectors.dataDiv);
          $dataDiv.length &&
            (($primaryPicker = $("#CurrencyPicker-header")),
            ($drawerPicker = $("#CurrencyPicker-drawer")),
            $primaryPicker.on("change", function () {
              $drawerPicker.val($(this).val());
            }),
            $drawerPicker.on("change", function () {
              $primaryPicker.val($(this).val());
            }),
            (data = {
              currency: $dataDiv.data("shop-currency"),
              default: $dataDiv.data("default-currency"),
              format: $dataDiv.data("format"),
              moneyFormat: $dataDiv.data("money-format"),
              moneyCurrencyFormat: $dataDiv.data("money-currency-format"),
            }),
            (Currency.format = data.format),
            (Currency.money_format[data.currency] = data.moneyFormat),
            (Currency.money_with_currency_format[data.currency] =
              data.moneyCurrencyFormat),
            $("span.money span.money").each(function () {
              $(this).parents("span.money").removeClass("money");
            }),
            $("span.money").each(function () {
              $(this).attr("data-currency-" + data.currency, $(this).html());
            }),
            checkCookie(),
            $(selectors.picker)
              .val(Currency.currentCurrency)
              .on("change", refresh));
        }
        function refresh() {
          var newCurrency = $(selectors.picker).val();
          Currency.convertAll(Currency.currentCurrency, newCurrency);
        }
        function ajaxrefresh() {
          var newCurrency = $(selectors.picker).val();
          Currency.convertAll(data.currency, newCurrency);
        }
        function checkCookie() {
          var cookieCurrency = Currency.cookie.read();
          cookieCurrency == null
            ? data.currency !== data.default
              ? Currency.convertAll(data.currency, data.default)
              : (Currency.currentCurrency = data.default)
            : $(selectors.picker).length &&
              $(selectors.picker).find("option[value=" + cookieCurrency + "]")
                .length === 0
            ? ((Currency.currentCurrency = data.currency),
              Currency.cookie.write(data.currency))
            : cookieCurrency === data.currency
            ? (Currency.currentCurrency = data.currency)
            : Currency.convertAll(data.currency, cookieCurrency);
        }
        return { init: init, refresh: refresh, ajaxrefresh: ajaxrefresh };
      })()),
      (theme.initQuickShop = function (reinit) {
        var ids = [],
          $buttons = $(".quick-product__btn");
        $buttons.each(function () {
          var id = $(this).data("product-id"),
            modalId = "QuickShopModal-" + id,
            name = "quick-modal-" + id;
          if (ids.indexOf(id) > -1) {
            $('.modal--quick-shop[data-product-id="' + id + '"]').each(
              function (i) {
                i > 0 && $(this).remove();
              }
            );
            return;
          }
          new theme.Modals(modalId, name), ids.push(id);
        });
      }),
      (theme.videoModal = function () {
        var videoModalPlayer = null,
          videoOptions = {
            width: 1280,
            height: 720,
            playerVars: {
              autohide: 0,
              autoplay: 1,
              branding: 0,
              cc_load_policy: 0,
              fs: 0,
              iv_load_policy: 3,
              modestbranding: 1,
              playsinline: 1,
              quality: "hd720",
              rel: 0,
              showinfo: 0,
              wmode: "opaque",
            },
          },
          selectors = {
            triggers: 'a[href*="youtube.com/watch"], a[href*="youtu.be/"]',
          };
        if (!$(selectors.triggers).length) return;
        var modal = new theme.Modals("VideoModal", "video-modal", {
          closeOffContentClick: !0,
          solid: !0,
        });
        $(selectors.triggers).on("click", triggerYouTubeModal);
        function triggerYouTubeModal(evt) {
          evt.preventDefault(),
            window.loadYouTube(),
            theme.config.youTubeReady
              ? startVideoOnClick(evt)
              : $("body").on("youTubeReady", function () {
                  startVideoOnClick(evt);
                });
        }
        function startVideoOnClick(evt) {
          var $el = $(evt.currentTarget),
            videoId = getYoutubeVideoId($el.attr("href")),
            args = $.extend({}, videoOptions, { videoId: videoId });
          args.playerVars.playsinline = theme.config.bpSmall ? 0 : 1;
          var videoModalPlayer2 = new YT.Player("VideoHolder", args);
          modal.open(),
            $("body").on("modalClose.VideoModal", function () {
              setTimeout(function () {
                videoModalPlayer2.destroy();
              }, 500);
            });
        }
        function getYoutubeVideoId(url) {
          var regExp =
              /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/,
            match = url.match(regExp);
          return match && match[7].length == 11 ? match[7] : !1;
        }
      }),
      (theme.customerTemplates = (function () {
        function initEventListeners() {
          $("#RecoverPassword").on("click", function (evt) {
            evt.preventDefault(), toggleRecoverPasswordForm();
          }),
            $("#HideRecoverPasswordLink").on("click", function (evt) {
              evt.preventDefault(), toggleRecoverPasswordForm();
            });
        }
        function toggleRecoverPasswordForm() {
          $("#RecoverPasswordForm").toggleClass("hide"),
            $("#CustomerLoginForm").toggleClass("hide");
        }
        function resetPasswordSuccess() {
          var $formState = $(".reset-password-success");
          $formState.length && $("#ResetSuccess").removeClass("hide");
        }
        function customerAddressForm() {
          var $newAddressForm = $("#AddressNewForm"),
            $addressForms = $(".js-address-form");
          !$newAddressForm.length ||
            !$addressForms.length ||
            (Shopify &&
              $(".js-address-country").each(function () {
                var $container = $(this),
                  countryId = $container.data("country-id"),
                  provinceId = $container.data("province-id"),
                  provinceContainerId = $container.data(
                    "province-container-id"
                  );
                new Shopify.CountryProvinceSelector(countryId, provinceId, {
                  hideElement: provinceContainerId,
                });
              }),
            $(".address-new-toggle").on("click", function () {
              $newAddressForm.toggleClass("hide");
            }),
            $(".address-edit-toggle").on("click", function () {
              var formId = $(this).data("form-id");
              $("#EditAddress_" + formId).toggleClass("hide");
            }),
            $(".address-delete").on("click", function () {
              var $el = $(this),
                formId = $el.data("form-id"),
                confirmMessage = $el.data("confirm-message");
              confirm(
                confirmMessage ||
                  "Are you sure you wish to delete this address?"
              ) &&
                Shopify.postLink("/account/addresses/" + formId, {
                  parameters: { _method: "delete" },
                });
            }));
        }
        function checkUrlHash() {
          var hash = window.location.hash;
          hash === "#recover" && toggleRecoverPasswordForm();
        }
        return {
          init: function () {
            checkUrlHash(),
              initEventListeners(),
              resetPasswordSuccess(),
              customerAddressForm();
          },
        };
      })()),
      (theme.Product = (function () {
        var classes = {
            onSale: "on-sale",
            disabled: "disabled",
            isModal: "is-modal",
            loading: "loading",
            loaded: "loaded",
            interactable: "video-interactable",
            zoomInit: "photo-zoom-init",
          },
          selectors = {
            productVideo: ".product__video",
            videoParent: ".product__video-wrapper",
            currentSlide: ".slick-current",
            zoomImage: ".photo-zoom-link__initial",
          },
          youtubeReady,
          videos = {},
          youtubePlayers = [],
          youtubeVideoOptions = {
            height: "480",
            width: "850",
            playerVars: {
              autohide: 0,
              autoplay: 1,
              branding: 0,
              cc_load_policy: 0,
              controls: 0,
              fs: 0,
              iv_load_policy: 3,
              modestbranding: 1,
              playsinline: 1,
              quality: "hd720",
              rel: 0,
              showinfo: 0,
              wmode: "opaque",
            },
            events: {
              onReady: onVideoPlayerReady,
              onStateChange: onVideoStateChange,
            },
          },
          vimeoReady,
          vimeoPlayers = [],
          vimeoVideoOptions = { byline: !1, title: !1, portrait: !1, loop: !0 };
        function onVideoPlayerReady(evt) {
          var $player = $(evt.target.a),
            playerId = $player.attr("id");
          youtubePlayers[playerId] = evt.target;
          var player = youtubePlayers[playerId];
          setParentAsLoading($player),
            videos[playerId].style === "muted"
              ? youtubePlayers[playerId].mute().playVideo().pauseVideo()
              : setParentAsLoaded($player),
            ($player.closest(selectors.currentSlide).length ||
              $player.data("image-count") === 1) &&
              videos[playerId].style === "muted" &&
              (youtubePlayers[playerId].playVideo(),
              initCheckVisibility(playerId));
        }
        function initCheckVisibility(playerId) {
          videoVisibilityCheck(playerId),
            $(window).on(
              "scroll." + playerId,
              { id: playerId },
              $.throttle(150, videoVisibilityCheck)
            );
        }
        function videoVisibilityCheck(id) {
          var playerId;
          if (
            (typeof id == "string" ? (playerId = id) : (playerId = id.data.id),
            theme.isElementVisible($("#" + playerId)))
          ) {
            if (videos[playerId] && videos[playerId].style === "unmuted")
              return;
            playVisibleVideo(playerId);
          } else pauseHiddenVideo(playerId);
        }
        function playVisibleVideo(id) {
          youtubePlayers[id] &&
            typeof youtubePlayers[id].playVideo == "function" &&
            youtubePlayers[id].playVideo();
        }
        function pauseHiddenVideo(id) {
          youtubePlayers[id] &&
            typeof youtubePlayers[id].pauseVideo == "function" &&
            youtubePlayers[id].pauseVideo();
        }
        function onVideoStateChange(evt) {
          var $player = $(evt.target.a),
            playerId = $player.attr("id"),
            player = youtubePlayers[playerId];
          switch (evt.data) {
            case -1:
              videos[playerId].attemptedToPlay &&
                (setParentAsLoaded($player),
                setVideoToBeInteractedWith($player));
              break;
            case 0:
              player.playVideo();
              break;
            case 1:
              setParentAsLoaded($player);
              break;
            case 3:
              videos[playerId].attemptedToPlay = !0;
              break;
          }
        }
        function setParentAsLoading($el) {
          $el.closest(selectors.videoParent).addClass(classes.loading);
        }
        function setParentAsLoaded($el) {
          $el
            .closest(selectors.videoParent)
            .removeClass(classes.loading)
            .addClass(classes.loaded);
        }
        function setVideoToBeInteractedWith($el) {
          $el.closest(selectors.videoParent).addClass(classes.interactable);
        }
        function Product(container) {
          var $container = (this.$container = $(container)),
            sectionId = (this.sectionId = $container.attr("data-section-id"));
          (this.inModal = $container.closest(".modal").length),
            this.$modal,
            (this.settings = {
              enableHistoryState: $container.data("enable-history-state") || !1,
              namespace: ".product-" + sectionId,
              zoom: $container.data("image-zoom") || !1,
              inventory: $container.data("inventory") || !1,
              modalInit: !1,
              lazyLoadModalContent: $container.data("lazyload-content") || !1,
              slickInitialized: !1,
              hasImages: !0,
              hasMultipleImages: !1,
              imageSize: "620x",
            }),
            this.inModal &&
              ((this.settings.enableHistoryState = !1),
              (this.settings.namespace = ".product-" + sectionId + "-modal"),
              (this.$modal = $("#QuickShopModal-" + sectionId))),
            (this.selectors = {
              variantsJson: "VariantsJson-" + sectionId,
              video: "ProductVideo-" + sectionId,
              photoThumbs: ".product__thumb-" + sectionId,
              thumbSlider: "#ProductThumbs-" + sectionId,
              mainSlider: "#ProductPhotos-" + sectionId,
              productImageMain: ".product-image-main--" + sectionId,
              priceWrapper: ".product__price-wrap-" + sectionId,
              price: "#ProductPrice-" + sectionId,
              comparePrice: "#ComparePrice-" + sectionId,
              priceA11y: "#PriceA11y-" + sectionId,
              comparePriceA11y: "#ComparePriceA11y-" + sectionId,
              sku: "#Sku-" + sectionId,
              inventory: "#ProductInventory-" + sectionId,
              addToCart: "#AddToCart-" + sectionId,
              addToCartText: "#AddToCartText-" + sectionId,
              originalSelectorId: "#ProductSelect-" + sectionId,
              singleOptionSelector: ".variant__input-" + sectionId,
              variantColorSwatch: ".variant__input--color-swatch-" + sectionId,
              modalFormHolder: "#ProductFormHolder-" + sectionId,
              formContainer: "#AddToCartForm-" + sectionId,
            }),
            (this.$mainSlider = $(this.selectors.mainSlider)),
            (this.$thumbSlider = $(this.selectors.thumbSlider)),
            (this.$firstProductImage = this.$mainSlider.find("img").first()),
            this.$firstProductImage.length || (this.settings.hasImages = !1),
            this.init();
        }
        return (
          (Product.prototype = $.extend({}, Product.prototype, {
            init: function () {
              this.inModal &&
                (this.$container.addClass(classes.isModal),
                $("body").on(
                  "modalOpen.QuickShopModal-" + this.sectionId,
                  this.openModalProduct.bind(this)
                ),
                $("body").on(
                  "modalClose.QuickShopModal-" + this.sectionId,
                  this.closeModalProduct.bind(this)
                )),
                this.inModal ||
                  (this.stringOverrides(),
                  this.formSetup(),
                  this.productSetup(),
                  this.checkIfVideos(),
                  this.createImageCarousels());
            },
            formSetup: function () {
              this.initQtySelector(),
                this.initAjaxProductForm(),
                this.initVariants();
            },
            productSetup: function () {
              this.setImageSizes(), this.initImageSwitch();
            },
            stringOverrides: function () {
              (theme.productStrings = theme.productStrings || {}),
                $.extend(theme.strings, theme.productStrings);
            },
            setImageSizes: function () {
              if (this.settings.hasImages) {
                var currentImage = this.$firstProductImage[0].currentSrc;
                currentImage &&
                  (this.settings.imageSize =
                    theme.Images.imageSize(currentImage)),
                  this.settings.zoom &&
                    (this.settings.imageZoomSize = theme.Images.imageSize(
                      this.$firstProductImage.parent().data("zoom-size")
                    ));
              }
            },
            initVariants: function () {
              if (document.getElementById(this.selectors.variantsJson)) {
                this.variantsObject = JSON.parse(
                  document.getElementById(this.selectors.variantsJson).innerHTML
                );
                var options = {
                  $container: this.$container,
                  enableHistoryState: this.settings.enableHistoryState,
                  singleOptionSelector: this.selectors.singleOptionSelector,
                  originalSelectorId: this.selectors.originalSelectorId,
                  variants: this.variantsObject,
                };
                $(this.selectors.variantColorSwatch).length &&
                  $(this.selectors.variantColorSwatch).on(
                    "change",
                    function (evt) {
                      var $el = $(evt.currentTarget),
                        color = $el.data("color-name"),
                        index2 = $el.data("color-index");
                      this.updateColorName(color, index2);
                    }.bind(this)
                  ),
                  (this.variants = new slate.Variants(options)),
                  this.$container.on(
                    "variantChange" + this.settings.namespace,
                    this.updateCartButton.bind(this)
                  ),
                  this.$container.on(
                    "variantImageChange" + this.settings.namespace,
                    this.updateVariantImage.bind(this)
                  ),
                  this.$container.on(
                    "variantPriceChange" + this.settings.namespace,
                    this.updatePrice.bind(this)
                  ),
                  $(this.selectors.sku).length &&
                    this.$container.on(
                      "variantSKUChange" + this.settings.namespace,
                      this.updateSku.bind(this)
                    ),
                  this.settings.inventory &&
                    this.$container.on(
                      "variantChange" + this.settings.namespace,
                      this.updateInventory.bind(this)
                    );
              }
            },
            updateColorName: function (color, index2) {
              $("#VariantColorLabel-" + this.sectionId + "-" + index2).text(
                color
              );
            },
            updateCartButton: function (evt) {
              var variant = evt.variant;
              variant
                ? variant.available
                  ? ($(this.selectors.addToCart)
                      .removeClass(classes.disabled)
                      .prop("disabled", !1),
                    $(this.selectors.addToCartText).html(
                      theme.strings.addToCart
                    ))
                  : ($(this.selectors.addToCart)
                      .addClass(classes.disabled)
                      .prop("disabled", !0),
                    $(this.selectors.addToCartText).html(theme.strings.soldOut))
                : ($(this.selectors.addToCart)
                    .addClass(classes.disabled)
                    .prop("disabled", !0),
                  $(this.selectors.addToCartText).html(
                    theme.strings.unavailable
                  ));
            },
            updatePrice: function (evt) {
              var variant = evt.variant;
              if (variant) {
                $(this.selectors.price)
                  .html(
                    theme.Currency.formatMoney(
                      variant.price,
                      theme.settings.moneyFormat
                    )
                  )
                  .show();
                var regularprice = $(this.selectors.price).html(
                  theme.Currency.formatMoney(
                    variant.price,
                    theme.settings.moneyFormat
                  )
                );
                variant.compare_at_price > variant.price
                  ? ($(this.selectors.comparePrice).html(
                      theme.Currency.formatMoney(
                        variant.compare_at_price,
                        theme.settings.moneyFormat
                      )
                    ),
                    $(this.selectors.priceWrapper).removeClass("hide"),
                    $(this.selectors.price).addClass(classes.onSale),
                    $(this.selectors.comparePriceA11y).attr(
                      "aria-hidden",
                      "false"
                    ),
                    $(this.selectors.priceA11y).attr("aria-hidden", "false"))
                  : ($(this.selectors.priceWrapper).addClass("hide"),
                    $(this.selectors.price).removeClass(classes.onSale),
                    $(this.selectors.comparePriceA11y).attr(
                      "aria-hidden",
                      "true"
                    ),
                    $(this.selectors.priceA11y).attr("aria-hidden", "true"));
                var percoff =
                  ((variant.compare_at_price - variant.price) * 100) /
                  variant.compare_at_price;
                (document.getElementById("percLoc").innerText =
                  Math.round(percoff) + "% OFF"),
                  $("body").hasClass("currencies-enabled") &&
                    theme.currencySwitcher.ajaxrefresh();
              }
            },
            updateSku: function (evt) {
              var variant = evt.variant,
                newSku = "";
              variant &&
                (variant.sku && (newSku = variant.sku),
                $(this.selectors.sku).html(newSku));
            },
            updateInventory: function (evt) {
              var variant = evt.variant,
                showInventory = !1,
                quantity = 0,
                $inventoryLabel = $(this.selectors.inventory);
              variant &&
                variant.inventory_management === "shopify" &&
                ((showInventory = !0),
                (quantity = window.inventories[this.sectionId][variant.id]),
                quantity === 0 && (showInventory = !1)),
                showInventory
                  ? $inventoryLabel
                      .removeClass("hide")
                      .text(
                        theme.strings.stockLabel.replace("[count]", quantity)
                      )
                  : $inventoryLabel.addClass("hide");
            },
            updateVariantImage: function (evt) {
              var variant = evt.variant,
                sizedImgUrl = theme.Images.getSizedImageUrl(
                  variant.featured_image.src,
                  this.settings.imageSize
                ),
                zoomSizedImgUrl;
              this.settings.zoom &&
                (zoomSizedImgUrl = theme.Images.getSizedImageUrl(
                  variant.featured_image.src,
                  this.settings.imageZoomSize
                ));
              var $newImage = $(
                  '.product__thumb[data-id="' + variant.featured_image.id + '"]'
                ),
                imageIndex = this._slideIndex(
                  $newImage.closest(".product__thumb-item")
                );
              typeof imageIndex != "undefined" &&
                this.$mainSlider.slick("slickGoTo", imageIndex);
            },
            initImageSwitch: function () {
              if ($(this.selectors.photoThumbs).length) {
                var self = this;
                $(this.selectors.photoThumbs).on("click", function (evt) {
                  evt.preventDefault();
                });
              }
            },
            checkIfVideos: function () {
              var $productVideos = this.$mainSlider.find(
                selectors.productVideo
              );
              if (!$productVideos.length) return !1;
              var videoTypes = [];
              return (
                $productVideos.each(function () {
                  var type = $(this).data("video-type");
                  videoTypes.indexOf(type) < 0 && videoTypes.push(type);
                }),
                videoTypes.indexOf("youtube") > -1 &&
                  (theme.config.youTubeReady
                    ? this.loadYoutubeVideos($productVideos)
                    : (window.loadYouTube(),
                      $("body").on(
                        "youTubeReady" + this.settings.namespace,
                        function () {
                          this.loadYoutubeVideos($productVideos);
                        }.bind(this)
                      ))),
                videoTypes.indexOf("vimeo") > -1 &&
                  (vimeoReady
                    ? this.loadVimeoVideos($productVideos)
                    : (window.loadVimeo(),
                      $("body").on(
                        "vimeoReady" + this.settings.namespace,
                        function () {
                          this.loadVimeoVideos($productVideos);
                        }.bind(this)
                      ))),
                videoTypes.indexOf("mp4") > -1 &&
                  this.loadMp4Videos($productVideos),
                videoTypes
              );
            },
            loadMp4Videos: function ($videos) {
              $videos.each(function () {
                var $el = $(this);
                if ($el.data("video-type") == "mp4") {
                  var id = $el.attr("id"),
                    videoId = $el.data("video-id");
                  videos[this.id] = {
                    type: "mp4",
                    divId: id,
                    style: $el.data("video-style"),
                  };
                }
              });
            },
            loadVimeoVideos: function ($videos) {
              $videos.each(function () {
                var $el = $(this);
                if ($el.data("video-type") == "vimeo") {
                  var id = $el.attr("id"),
                    videoId = $el.data("video-id");
                  videos[this.id] = {
                    type: "vimeo",
                    divId: id,
                    id: videoId,
                    style: $el.data("video-style"),
                    width: $el.data("video-width"),
                    height: $el.data("video-height"),
                  };
                }
              });
              for (var key2 in videos)
                if (videos[key2].type == "vimeo") {
                  var args = $.extend({}, vimeoVideoOptions, videos[key2]);
                  vimeoPlayers[key2] = new Vimeo.Player(
                    videos[key2].divId,
                    args
                  );
                }
              vimeoReady = !0;
            },
            autoplayVimeoVideo: function (id) {
              if (!theme.config.bpSmall) this.requestToPlayVimeoVideo(id);
              else {
                var $player = $("#" + id);
                setParentAsLoaded($player);
              }
            },
            requestToPlayVimeoVideo: function (id) {
              var $player = $("#" + id);
              if ((setParentAsLoading($player), !vimeoReady)) {
                $("body").on(
                  "vimeoReady" + this.settings.namespace,
                  function () {
                    this.playVimeoVideo(id);
                  }.bind(this)
                );
                return;
              }
              this.playVimeoVideo(id);
            },
            playVimeoVideo: function (id) {
              vimeoPlayers[id].play(),
                videos[id].style === "muted" && vimeoPlayers[id].setVolume(0);
              var $player = $("#" + id);
              setParentAsLoaded($player);
            },
            stopVimeoVideo: function (id) {
              if (theme.config.vimeoReady)
                if (id) vimeoPlayers[id].pause();
                else
                  for (key in vimeoPlayers)
                    typeof vimeoPlayers[key].pause == "function" &&
                      vimeoPlayers[key].pause();
            },
            loadYoutubeVideos: function ($videos) {
              $videos.each(function () {
                var $el = $(this);
                if ($el.data("video-type") == "youtube") {
                  var id = $el.attr("id"),
                    videoId = $el.data("youtube-id");
                  videos[this.id] = {
                    type: "youtube",
                    id: id,
                    videoId: videoId,
                    style: $el.data("video-style"),
                    width: $el.data("video-width"),
                    height: $el.data("video-height"),
                    attemptedToPlay: !1,
                  };
                }
              });
              for (var key2 in videos)
                if (
                  videos[key2].type === "youtube" &&
                  videos.hasOwnProperty(key2)
                ) {
                  var args = $.extend({}, youtubeVideoOptions, videos[key2]);
                  args.style === "muted" ||
                    ((args.playerVars.controls = 1),
                    (args.playerVars.autoplay = 0)),
                    (youtubePlayers[key2] = new YT.Player(key2, args));
                }
              youtubeReady = !0;
            },
            requestToPlayYoutubeVideo: function (id, forcePlay) {
              if (theme.config.youTubeReady) {
                var $player = $("#" + id);
                if (
                  (setParentAsLoading($player),
                  typeof youtubePlayers[id].playVideo != "function")
                ) {
                  var o = this;
                  setTimeout(function () {
                    o.playYoutubeVideo(id, forcePlay);
                  }, 1e3);
                  return;
                }
                this.playYoutubeVideo(id, forcePlay);
              }
            },
            playYoutubeVideo: function (id, forcePlay) {
              var $player = $("#" + id);
              setParentAsLoaded($player),
                typeof youtubePlayers[id].playVideo == "function" &&
                  youtubePlayers[id].playVideo(),
                forcePlay || initCheckVisibility(id);
            },
            stopYoutubeVideo: function (id) {
              if (theme.config.youTubeReady)
                if (id && youtubePlayers[id])
                  typeof youtubePlayers[id].pauseVideo == "function" &&
                    youtubePlayers[id].pauseVideo(),
                    $(window).off("scroll." + id);
                else
                  for (key in youtubePlayers)
                    typeof youtubePlayers[key].pauseVideo == "function" &&
                      (youtubePlayers[key].pauseVideo(),
                      $(window).off("scroll." + key));
            },
            playMp4Video: function (id) {
              var $player = $("#" + id);
              setParentAsLoaded($player), $player[0].play();
            },
            stopMp4Video: function (id) {
              if (id) $("#" + id)[0].pause();
              else
                for (var key2 in videos)
                  if (videos[key2].type === "mp4") {
                    var player = $("#" + videos[key2].divId)[0];
                    typeof player.pause == "function" && player.pause();
                  }
            },
            initZoom: function ($image) {
              var largeImage = $image.parent().data("zoom-size");
              $image
                .parent()
                .on("click", function (evt) {
                  evt.preventDefault();
                })
                .zoom({
                  on: "click",
                  url: largeImage,
                  duration: 180,
                  touch: !1,
                  onZoomIn: function () {
                    $(this).addClass("photo-zoom-linked");
                  },
                  onZoomOut: function () {
                    $(this).removeClass("photo-zoom-linked");
                  },
                });
            },
            createImageCarousels: function () {
              if (
                !this.$thumbSlider.length ||
                $(this.selectors.photoThumbs).length < 2
              ) {
                var $video = $(this.selectors.productImageMain).find(
                  selectors.productVideo
                );
                $video.length && this.initVideo($video),
                  this.settings.zoom &&
                    this.initZoom(
                      $(this.selectors.productImageMain).find(
                        selectors.zoomImage
                      )
                    );
                return;
              }
              this.settings.hasMultipleImages = !0;
              var $activeSlide = this.$mainSlider.find(".starting-slide"),
                startIndex = this._slideIndex($activeSlide);
              this.$mainSlider.off("init"),
                this.$mainSlider.off("beforeChange"),
                this.$mainSlider.on("init", this.mainSlideInit.bind(this)),
                this.$mainSlider.on(
                  "beforeChange",
                  this.beforeSlideChange.bind(this)
                );
              var thumbnailsVertical =
                this.$thumbSlider.data("position") === "beside";
              this.$mainSlider.slick({
                adaptiveHeight: !thumbnailsVertical,
                asNavFor: this.selectors.thumbSlider,
                infinite: !1,
                arrows: !1,
                dots: !0,
                initialSlide: startIndex,
              }),
                this.$thumbSlider.slick({
                  asNavFor: this.selectors.mainSlider,
                  slidesToShow: thumbnailsVertical ? 3 : 5,
                  slidesToScroll: 1,
                  arrows: !0,
                  dots: !1,
                  vertical: thumbnailsVertical,
                  verticalSwiping: thumbnailsVertical,
                  focusOnSelect: !0,
                  infinite: !1,
                  customHeightMatching: thumbnailsVertical,
                  customSlideAdvancement: !0,
                  initialSlide: startIndex,
                }),
                AOS && AOS.refresh(),
                (this.settings.slickInitialized = !0);
            },
            destroyImageCarousels: function () {
              this.settings.slickInitialized &&
                (this.$mainSlider && this.$mainSlider.slick("unslick"),
                this.$thumbSlider && this.$thumbSlider.slick("unslick"),
                (this.settings.slickInitialized = !1));
            },
            mainSlideInit: function (event, slick) {
              var $slider = slick.$slider,
                $currentSlide = $slider.find(selectors.currentSlide),
                $video = $currentSlide.find(selectors.productVideo);
              $video.length && this.initVideo($video);
            },
            initVideo: function ($video) {
              var videoType = $video.data("video-type"),
                divId = $video.attr("id");
              videoType === "mp4" &&
                videos[divId].style === "muted" &&
                this.playMp4Video(divId),
                videoType === "youtube" &&
                  youtubeReady &&
                  videos[divId].style === "muted" &&
                  this.requestToPlayYoutubeVideo(divId),
                videoType === "vimeo" &&
                  (vimeoReady
                    ? this.playOrShowVimeo(divId)
                    : $("body").on(
                        "vimeoReady" + this.settings.namespace,
                        function () {
                          this.playOrShowVimeo(divId);
                        }.bind(this)
                      )),
                this.inModal && this.resizeSlides();
            },
            playOrShowVimeo: function (id) {
              videos[id] && videos[id].style === "muted"
                ? this.autoplayVimeoVideo(id)
                : videos[id] &&
                  videos[id].style === "unmuted" &&
                  setParentAsLoaded($("#" + id));
            },
            getVideoType: function ($video) {
              return $video.data("video-type");
            },
            getVideoId: function ($video) {
              return $video.attr("id");
            },
            beforeSlideChange: function (
              event,
              slick,
              currentSlide,
              nextSlide
            ) {
              var $slider = slick.$slider,
                $currentSlide = $slider.find(selectors.currentSlide),
                $prevVideo = $currentSlide.find(".product__video"),
                $nextSlide = $slider.find(
                  '.slick-slide[data-slick-index="' + nextSlide + '"]'
                ),
                $nextVideo = $nextSlide.find(".product__video");
              if (currentSlide !== nextSlide && $prevVideo.length) {
                var prevVideoType = this.getVideoType($prevVideo),
                  prevVideoId = this.getVideoId($prevVideo);
                prevVideoId &&
                  (prevVideoType === "youtube" &&
                    this.stopYoutubeVideo(prevVideoId),
                  prevVideoType === "mp4" && this.stopMp4Video(prevVideoId),
                  prevVideoType === "vimeo" &&
                    this.stopVimeoVideo(prevVideoId));
              }
              if ($nextVideo.length) {
                var nextVideoType = this.getVideoType($nextVideo),
                  nextVideoId = this.getVideoId($nextVideo);
                nextVideoId &&
                  nextVideoType === "vimeo" &&
                  (vimeoReady
                    ? videos[nextVideoId] &&
                      videos[nextVideoId].style === "muted" &&
                      this.autoplayVimeoVideo(nextVideoId)
                    : $("body").on(
                        "vimeoReady" + this.settings.namespace,
                        function () {
                          videos[nextVideoId] &&
                            videos[nextVideoId].style === "muted" &&
                            this.autoplayVimeoVideo(nextVideoId);
                        }.bind(this)
                      )),
                  nextVideoId &&
                    nextVideoType === "youtube" &&
                    (youtubeReady
                      ? videos[nextVideoId] &&
                        videos[nextVideoId].style === "muted" &&
                        this.requestToPlayYoutubeVideo(nextVideoId, !0)
                      : $("body").on(
                          "youTubeReady" + this.settings.namespace,
                          function () {
                            videos[nextVideoId] &&
                              videos[nextVideoId].style === "muted" &&
                              this.requestToPlayYoutubeVideo(nextVideoId, !0);
                          }.bind(this)
                        )),
                  nextVideoId &&
                    videos[nextVideoId] &&
                    videos[nextVideoId].style === "muted" &&
                    nextVideoType === "mp4" &&
                    this.playMp4Video(nextVideoId),
                  nextVideoId &&
                    videos[nextVideoId] &&
                    videos[nextVideoId].style != "muted" &&
                    setParentAsLoaded($("#" + nextVideoId));
              }
              if (this.settings.zoom) {
                if ($nextSlide.hasClass(classes.zoomInit)) return;
                var $image = $nextSlide
                  .addClass(classes.zoomInit)
                  .find("img")
                  .addClass("lazyload");
                this.initZoom($image);
              }
            },
            resizeSlides: function () {
              this.settings.hasMultipleImages &&
                ($(window).trigger("resize"),
                setTimeout(
                  function () {
                    this.$mainSlider.slick("setPosition"),
                      this.$thumbSlider.slick("setPosition");
                  }.bind(this),
                  500
                ));
            },
            _slideIndex: function ($el) {
              return $el.data("index");
            },
            initQtySelector: function () {
              this.$container.find(".js-qty").each(function () {
                new theme.QtySelector($(this), { namespace: ".product" });
              });
            },
            initAjaxProductForm: function () {
              theme.settings.cartType === "drawer" &&
                new theme.AjaxProduct($(this.selectors.formContainer));
            },
            openModalProduct: function () {
              if (!this.settings.modalInit) {
                var $formHolder = $(this.selectors.modalFormHolder),
                  url = $formHolder.data("url");
                $formHolder.load(
                  url + " #AddToCartForm-" + this.sectionId,
                  function () {
                    this.formSetup(),
                      Shopify.PaymentButton && Shopify.PaymentButton.init();
                  }.bind(this)
                ),
                  this.productSetup(),
                  this.loadModalContent(),
                  this.createImageCarousels(),
                  (this.settings.modalInit = !0);
              }
              this.resizeSlides();
            },
            closeModalProduct: function () {
              this.stopYoutubeVideo(),
                this.stopVimeoVideo(),
                this.stopMp4Video();
            },
            loadModalContent: function () {
              var videoTypes = this.checkIfVideos();
              videoTypes &&
                videoTypes.indexOf("mp4") > -1 &&
                this.$modal.find('.product__video[data-video-type="mp4"]').each(
                  function (i, video) {
                    var $el = $(video),
                      src = $el.data("video-src"),
                      source = document.createElement("source");
                    source.setAttribute("src", src), $el.append(source);
                  }.bind(this)
                );
            },
            onUnload: function () {
              this.$container.off(this.settings.namespace),
                $("body").off(this.settings.namespace),
                this.destroyImageCarousels();
            },
          })),
          Product
        );
      })()),
      (theme.Collection = (function () {
        var isAnimating = !1,
          classes = { tags: ".tags", activeTag: "tag--active" };
        function Collection(container) {
          (this.container = container),
            (this.sectionId = $(container).attr("data-section-id")),
            (this.namespace = ".collection-" + this.sectionId);
          var $heroImageContainer = $(container).find(".collection-hero");
          $heroImageContainer.length &&
            theme.loadImageSection($heroImageContainer),
            $(window).on(
              "popstate",
              function (state) {
                state && this.getNewCollectionContent(location.href);
              }.bind(this)
            ),
            this.init();
        }
        return (
          (Collection.prototype = $.extend({}, Collection.prototype, {
            init: function () {
              (this.$container = $(this.container)),
                (this.sectionId = this.$container.attr("data-section-id")),
                this.sortBy(),
                this.sortTags(),
                this.initTagAjax();
            },
            initTagAjax: function () {
              this.$container.on(
                "click" + this.namespace,
                ".tags a",
                function (evt) {
                  var $el = $(evt.currentTarget);
                  if (
                    !$el.hasClass("no-ajax") &&
                    (evt.preventDefault(), !isAnimating)
                  ) {
                    isAnimating = !0;
                    var newUrl = $el.attr("href");
                    $(classes.tags)
                      .find("." + classes.activeTag)
                      .removeClass(classes.activeTag),
                      $el.parent().addClass(classes.activeTag),
                      history.pushState({}, "", newUrl),
                      $(".grid-product").addClass("unload"),
                      this.getNewCollectionContent(newUrl);
                  }
                }.bind(this)
              );
            },
            getNewCollectionContent: function (url) {
              $("#CollectionAjaxResult").load(
                url + " #CollectionAjaxContent",
                function () {
                  (isAnimating = !1), this.reInit();
                }.bind(this)
              );
            },
            sortBy: function () {
              var $sortBy = $("#SortBy");
              $sortBy.length &&
                $sortBy.on("change", function () {
                  location.href = "?sort_by=" + $(this).val();
                });
            },
            sortTags: function () {
              var $sortTags = $("#SortTags");
              $sortTags.length &&
                $sortTags.on("change", function () {
                  location.href = $(this).val();
                });
            },
            reInit: function () {
              for (var i = 0; i < sections.instances.length; i++) {
                var instance = sections.instances[i];
                instance.type === "collection-template" &&
                  instance.forceReload();
              }
              AOS.refreshHard(),
                theme.initQuickShop(!0),
                $("body").hasClass("currencies-enabled") &&
                  theme.currencySwitcher.ajaxrefresh(),
                window.SPR && (SPR.initDomEls(), SPR.loadBadges()),
                sections.register("product-template", theme.Product);
            },
            forceReload: function () {
              this.onUnload(), this.init();
            },
            onUnload: function () {
              $(window).off(this.namespace),
                this.$container.off(this.namespace);
            },
          })),
          Collection
        );
      })()),
      (theme.HeaderSection = (function () {
        var selectors = {
            drawer: "#NavDrawer",
            mobileSubNavToggle: ".mobile-nav__toggle-btn",
            hasSublist: ".mobile-nav__has-sublist",
          },
          classes = { navExpanded: "mobile-nav--expanded" };
        function Header(container) {
          for (
            var $container = (this.$container = $(container)),
              sectionId = (this.sectionId = $container.attr("data-section-id")),
              i = 0;
            i < sections.instances.length;
            i++
          ) {
            var instance = sections.instances[i];
            instance.type === "slideshow-section" && instance.forceReload();
          }
          theme.currencySwitcher.init(),
            this.initDrawers(),
            theme.headerNav.init(),
            theme.announcementBar.init();
        }
        return (
          (Header.prototype = $.extend({}, Header.prototype, {
            initDrawers: function () {
              (theme.NavDrawer = new theme.Drawers("NavDrawer", "nav")),
                theme.settings.cartType === "drawer" && new theme.CartDrawer(),
                this.drawerMenuButtons();
            },
            drawerMenuButtons: function () {
              $(selectors.drawer)
                .find(".js-drawer-close")
                .on("click", function (evt) {
                  evt.preventDefault(), theme.NavDrawer.close();
                });
              var $mobileSubNavToggle = $(selectors.mobileSubNavToggle);
              $mobileSubNavToggle.attr("aria-expanded", "false"),
                $mobileSubNavToggle.each(function (i, el) {
                  var $el = $(el);
                  $el.attr("aria-controls", $el.attr("data-aria-controls"));
                }),
                $mobileSubNavToggle.on("click", function () {
                  var $el = $(this),
                    currentlyExpanded = $el.attr("aria-expanded"),
                    toggleState = !1;
                  currentlyExpanded === "true"
                    ? $el.attr("aria-expanded", "false")
                    : ($el.attr("aria-expanded", "true"), (toggleState = !0)),
                    $el
                      .closest(selectors.hasSublist)
                      .toggleClass(classes.navExpanded, toggleState);
                });
            },
            onUnload: function () {
              theme.NavDrawer.close(),
                theme.headerNav.unload(),
                theme.announcementBar.unload();
            },
          })),
          Header
        );
      })()),
      (theme.FeaturedContentSection = (function () {
        function FeaturedContent() {
          $(".rte").find("a:not(:has(img))").addClass("text-link");
        }
        return FeaturedContent;
      })()),
      (theme.slideshows = {}),
      (theme.SlideshowSection = (function () {
        function SlideshowSection(container) {
          var $container = (this.$container = $(container)),
            $section = $container.parent(),
            sectionId = $container.attr("data-section-id"),
            slideshow = (this.slideshow = "#Slideshow-" + sectionId),
            $imageContainer = $(container).find(".hero");
          $imageContainer.length && theme.loadImageSection($imageContainer),
            this.init();
        }
        return (
          (SlideshowSection.prototype = $.extend(
            {},
            SlideshowSection.prototype,
            {
              init: function () {
                var args = {
                  arrows: $(this.slideshow).data("arrows"),
                  dots: $(this.slideshow).data("dots"),
                };
                theme.slideshows[this.slideshow] = new theme.Slideshow(
                  this.slideshow,
                  args
                );
              },
              forceReload: function () {
                this.onUnload(), this.init();
              },
              onUnload: function () {
                theme.slideshows[this.slideshow].destroy(),
                  delete theme.slideshows[this.slideshow];
              },
              onSelect: function () {
                $(this.slideshow).slick("slickPause");
              },
              onDeselect: function () {
                $(this.slideshow).slick("slickPlay");
              },
              onBlockSelect: function (evt) {
                var $slideshow = $(this.slideshow),
                  $slide = $(
                    ".slideshow__slide--" +
                      evt.detail.blockId +
                      ":not(.slick-cloned)"
                  ),
                  slideIndex = $slide.data("slick-index");
                $slideshow.slick("slickGoTo", slideIndex).slick("slickPause");
              },
              onBlockDeselect: function () {
                $(this.slideshow).slick("slickPlay");
              },
            }
          )),
          SlideshowSection
        );
      })()),
      (theme.VideoSection = (function () {
        var youtubeReady,
          videos = [],
          youtubePlayers = [],
          youtubeVideoOptions = {
            width: 1280,
            height: 720,
            playerVars: {
              autohide: 0,
              branding: 0,
              cc_load_policy: 0,
              controls: 0,
              fs: 0,
              iv_load_policy: 3,
              modestbranding: 1,
              playsinline: 1,
              quality: "hd720",
              rel: 0,
              showinfo: 0,
              wmode: "opaque",
            },
            events: {
              onReady: onVideoPlayerReady,
              onStateChange: onVideoStateChange,
            },
          },
          vimeoReady = !1,
          vimeoVideoOptions = { byline: !1, title: !1, portrait: !1, loop: !0 },
          selectors = { videoParent: ".video-parent-section" },
          classes = {
            loading: "loading",
            loaded: "loaded",
            interactable: "video-interactable",
          };
        function videoSection(container) {
          var $container = (this.$container = $(container)),
            sectionId = (this.sectionId = $container.attr("data-section-id")),
            youtubePlayerId = (this.youtubePlayerId =
              "YouTubeVideo-" + this.sectionId);
          this.namespace = "." + youtubePlayerId;
          var vimeoPlayerId = (this.vimeoPlayerId = "Vimeo-" + this.sectionId),
            $vimeoTrigger = (this.$vimeoTrigger = $(
              "#VimeoTrigger-" + this.sectionId
            )),
            mp4Video = "Mp4Video-" + this.sectionId,
            $youtubeDiv = $("#" + youtubePlayerId),
            $vimeoDiv = $("#" + vimeoPlayerId),
            $mp4Div = $("#" + mp4Video);
          (this.vimeoPlayer = []),
            $youtubeDiv.length &&
              ((this.youtubeVideoId = $youtubeDiv.data("video-id")),
              this.initYoutubeVideo()),
            $vimeoDiv.length &&
              ((this.vimeoVideoId = $vimeoDiv.data("video-id")),
              this.initVimeoVideo()),
            $mp4Div.length &&
              (setParentAsLoaded($mp4Div),
              startMp4Playback(mp4Video)
                .then(function () {})
                .catch(function (error) {
                  setVideoToBeInteractedWith($mp4Div);
                }));
        }
        function startMp4Playback(mp4Video) {
          return document.querySelector("#" + mp4Video).play();
        }
        function onVideoPlayerReady(evt) {
          var $player = $(evt.target.a),
            playerId = $player.attr("id");
          youtubePlayers[playerId] = evt.target;
          var player = youtubePlayers[playerId];
          setParentAsLoading($player),
            youtubePlayers[playerId].mute(),
            $player.attr("tabindex", "-1"),
            videoVisibilityCheck(playerId),
            $(window).on(
              "scroll." + playerId,
              { id: playerId },
              $.throttle(150, videoVisibilityCheck)
            );
        }
        function videoVisibilityCheck(id) {
          var playerId;
          typeof id == "string" ? (playerId = id) : (playerId = id.data.id),
            theme.isElementVisible($("#" + playerId))
              ? playVisibleVideo(playerId)
              : pauseHiddenVideo(playerId);
        }
        function playVisibleVideo(id) {
          youtubePlayers[id] &&
            typeof youtubePlayers[id].playVideo == "function" &&
            youtubePlayers[id].playVideo();
        }
        function pauseHiddenVideo(id) {
          youtubePlayers[id] &&
            typeof youtubePlayers[id].pauseVideo == "function" &&
            youtubePlayers[id].pauseVideo();
        }
        function onVideoStateChange(evt) {
          var $player = $(evt.target.a),
            playerId = $player.attr("id"),
            player = youtubePlayers[playerId];
          switch (evt.data) {
            case -1:
              videos[playerId].attemptedToPlay &&
                (setParentAsLoaded($player),
                setVideoToBeInteractedWith($player));
              break;
            case 0:
              player.playVideo();
              break;
            case 1:
              setParentAsLoaded($player);
              break;
            case 3:
              videos[playerId].attemptedToPlay = !0;
              break;
          }
        }
        function setParentAsLoading($el) {
          $el.closest(selectors.videoParent).addClass(classes.loading);
        }
        function setParentAsLoaded($el) {
          $el
            .closest(selectors.videoParent)
            .removeClass(classes.loading)
            .addClass(classes.loaded);
        }
        function setVideoToBeInteractedWith($el) {
          $el.closest(selectors.videoParent).addClass(classes.interactable);
        }
        return (
          (videoSection.prototype = $.extend({}, videoSection.prototype, {
            initYoutubeVideo: function () {
              (videos[this.youtubePlayerId] = {
                id: this.youtubePlayerId,
                videoId: this.youtubeVideoId,
                type: "youtube",
                attemptedToPlay: !1,
              }),
                youtubeReady
                  ? this.loadYoutubeVideo()
                  : (window.loadYouTube(),
                    $("body").on(
                      "youTubeReady" + this.namespace,
                      this.loadYoutubeVideo.bind(this)
                    ));
            },
            loadYoutubeVideo: function () {
              var args = $.extend(
                {},
                youtubeVideoOptions,
                videos[this.youtubePlayerId]
              );
              (args.playerVars.controls = 0),
                (youtubePlayers[this.youtubePlayerId] = new YT.Player(
                  this.youtubePlayerId,
                  args
                )),
                (youtubeReady = !0);
            },
            initVimeoVideo: function () {
              videos[this.vimeoPlayerId] = {
                divId: this.vimeoPlayerId,
                id: this.vimeoVideoId,
                type: "vimeo",
              };
              var $player = $("#" + this.vimeoPlayerId);
              setParentAsLoading($player),
                this.$vimeoTrigger.on(
                  "click",
                  +this.namespace,
                  function (evt) {
                    this.requestToPlayVimeoVideo(this.vimeoPlayerId);
                  }.bind(this)
                ),
                vimeoReady
                  ? this.loadVimeoVideo()
                  : (window.loadVimeo(),
                    $("body").on(
                      "vimeoReady" + this.namespace,
                      this.loadVimeoVideo.bind(this)
                    ));
            },
            loadVimeoVideo: function () {
              var args = $.extend(
                {},
                vimeoVideoOptions,
                videos[this.vimeoPlayerId]
              );
              if (
                ((this.vimeoPlayer[this.vimeoPlayerId] = new Vimeo.Player(
                  videos[this.vimeoPlayerId].divId,
                  args
                )),
                (vimeoReady = !0),
                !theme.config.bpSmall)
              )
                this.requestToPlayVimeoVideo(this.vimeoPlayerId);
              else {
                var $player = $("#" + this.vimeoPlayerId);
                setParentAsLoaded($player);
              }
            },
            requestToPlayVimeoVideo: function (id) {
              if (!vimeoReady) {
                $("body").on(
                  "vimeoReady" + this.namespace,
                  function () {
                    this.playVimeoVideo(id);
                  }.bind(this)
                );
                return;
              }
              this.playVimeoVideo(id);
            },
            playVimeoVideo: function (id) {
              this.vimeoPlayer[id].play(), this.vimeoPlayer[id].setVolume(0);
              var $player = $("#" + id);
              setParentAsLoaded($player);
            },
            onUnload: function (evt) {
              var sectionId = evt.target.id.replace("shopify-section-", ""),
                playerId = "YouTubeVideo-" + sectionId;
              youtubePlayers[playerId].destroy(),
                $(window).off("scroll" + this.namespace),
                $("body").off("vimeoReady" + this.namespace);
            },
          })),
          videoSection
        );
      })()),
      (theme.Testimonials = (function () {
        var slideCount = 0,
          defaults = {
            accessibility: !0,
            arrows: !1,
            dots: !0,
            autoplay: !1,
            touchThreshold: 20,
            slidesToShow: 3,
            slidesToScroll: 3,
          };
        function Testimonials(container) {
          var $container = (this.$container = $(container)),
            sectionId = $container.attr("data-section-id"),
            wrapper = (this.wrapper = ".testimonials-wrapper"),
            slider = (this.slider = "#Testimonials-" + sectionId),
            $slider = $(slider);
          this.sliderActive = !1;
          var mobileOptions = $.extend({}, defaults, {
            slidesToShow: 1,
            slidesToScroll: 1,
            adaptiveHeight: !0,
          });
          (slideCount = $slider.data("count")),
            slideCount < defaults.slidesToShow &&
              ((defaults.slidesToShow = slideCount),
              (defaults.slidesToScroll = slideCount)),
            $slider.on("init", this.a11y.bind(this)),
            theme.config.bpSmall
              ? this.init($slider, mobileOptions)
              : this.init($slider, defaults),
            $("body").on(
              "matchSmall",
              function () {
                this.init($slider, mobileOptions);
              }.bind(this)
            ),
            $("body").on(
              "matchLarge",
              function () {
                this.init($slider, defaults);
              }.bind(this)
            );
        }
        return (
          (Testimonials.prototype = $.extend({}, Testimonials.prototype, {
            onUnload: function () {
              $(this.slider, this.wrapper).slick("unslick");
            },
            onBlockSelect: function (evt) {
              var $slide = $(
                  ".testimonials-slide--" +
                    evt.detail.blockId +
                    ":not(.slick-cloned)"
                ),
                slideIndex = $slide.data("slick-index");
              $(this.slider, this.wrapper).slick("slickGoTo", slideIndex);
            },
            init: function (obj, args) {
              this.sliderActive &&
                (obj.slick("unslick"), (this.sliderActive = !1)),
                obj.slick(args),
                (this.sliderActive = !0),
                AOS && AOS.refresh();
            },
            a11y: function (event, obj) {
              var $list = obj.$list,
                $wrapper = $(this.wrapper, this.$container);
              $list.removeAttr("aria-live"),
                $wrapper.on("focusin", function (evt) {
                  $wrapper.has(evt.target).length &&
                    $list.attr("aria-live", "polite");
                }),
                $wrapper.on("focusout", function (evt) {
                  $wrapper.has(evt.target).length &&
                    $list.removeAttr("aria-live");
                });
            },
          })),
          Testimonials
        );
      })()),
      (theme.Instagram = (function () {
        function Instagram(container) {
          var $container = (this.$container = $(container)),
            sectionId = $container.attr("data-section-id"),
            $target = $("#Instafeed-" + sectionId);
          if ($target.length) {
            var userId = $target.data("user-id"),
              clientId = $target.data("client-id"),
              count = parseInt($target.data("count")),
              feed = (this.feed = new Instafeed({
                target: $target[0],
                accessToken: clientId,
                get: "user",
                userId: userId,
                limit: count + 2,
                template:
                  '<div class="grid__item small--one-half medium-up--one-fifth" data-aos="row-of-5"><div class="image-wrap"><a href="{{link}}" target="_blank" style="background-image: url({{image}}); display: block; padding-bottom: 100%; background-size: cover; background-position: center;"></a></div></div>',
                resolution: "standard_resolution",
              }));
            feed.run();
          }
        }
        return (
          (Instagram.prototype = $.extend({}, Instagram.prototype, {
            onUnload: function () {},
          })),
          Instagram
        );
      })()),
      (theme.NewsletterPopup = (function () {
        function NewsletterPopup(container) {
          var $container = (this.$container = $(container)),
            sectionId = $container.attr("data-section-id");
          if (
            ((this.cookieName = "newsletter-" + sectionId), !!$container.length)
          ) {
            if (
              ((this.data = {
                secondsBeforeShow: $container.data("delay-seconds"),
                daysBeforeReappear: $container.data("delay-days"),
                cookie: $.cookie(this.cookieName),
                testMode: $container.data("test-mode"),
              }),
              (this.modal = new theme.Modals(
                "NewsletterPopup-" + sectionId,
                "newsletter-popup-modal"
              )),
              ($container.find(".errors").length ||
                $container.find(".note--success").length) &&
                this.modal.open(),
              $container.find(".note--success").length)
            ) {
              this.closePopup(!0);
              return;
            }
            $("body").on(
              "modalClose." + $container.attr("id"),
              this.closePopup.bind(this)
            ),
              (!this.data.cookie || this.data.testMode) &&
                this.initPopupDelay();
          }
        }
        return (
          (NewsletterPopup.prototype = $.extend({}, NewsletterPopup.prototype, {
            initPopupDelay: function () {
              setTimeout(
                function () {
                  this.modal.open();
                }.bind(this),
                this.data.secondsBeforeShow * 1e3
              );
            },
            closePopup: function (success) {
              if (this.data.testMode) {
                $.removeCookie(this.cookieName, { path: "/" });
                return;
              }
              var expiry = success ? 200 : this.data.daysBeforeReappear;
              $.cookie(this.cookieName, "opened", {
                path: "/",
                expires: expiry,
              });
            },
            onLoad: function () {
              this.modal.open();
            },
            onSelect: function () {
              this.modal.open();
            },
            onDeselect: function () {
              this.modal.close();
            },
            onUnload: function () {},
          })),
          NewsletterPopup
        );
      })()),
      (theme.FadingImages = (function () {
        var classes = {
          activeImage: "active-image",
          finishedImage: "finished-image",
          activeTitles: "active-titles",
          finishedTitles: "finished-titles",
          compensation: "compensation",
        };
        function FadingImages(container) {
          var $container = (this.$container = $(container)),
            sectionId = $container.attr("data-section-id"),
            namespace = (this.namespace = ".fading-images-" + sectionId);
          if ($container.length) {
            var $imageContainer = $container.find(".fading-images");
            theme.loadImageSection($imageContainer),
              (this.data = {
                isInit: !1,
                interval: $container.data("interval"),
                block_count: $container.data("count"),
                finish_interval: 1e3,
                timer_offset: 400,
                active_image: 1,
                active_title: 1,
                removed_compensation: !1,
              }),
              (this.selectors = {
                $allTitles: $container.find(".fading-images-overlay__titles"),
              }),
              this.checkVisibility(),
              $(window).on(
                "scroll" + this.namespace,
                $.throttle(100, this.checkVisibility.bind(this))
              );
          }
        }
        return (
          (FadingImages.prototype = $.extend({}, FadingImages.prototype, {
            checkVisibility: function () {
              if (this.data.isInit) {
                $(window).off("scroll" + this.namespace);
                return;
              }
              theme.isElementVisible(this.$container) &&
                (this.startImages(),
                this.startTitles(),
                (this.data.isInit = !0));
            },
            nextImage: function () {
              var $container = this.$container;
              this.data.removed_compensation ||
                ($container
                  .find(
                    ".fading-images__item[data-slide-index=" +
                      this.data.active_image +
                      "]"
                  )
                  .removeClass(classes.compensation),
                (this.data.removed_compensation = !0)),
                $container
                  .find(
                    ".fading-images__item[data-slide-index=" +
                      this.data.active_image +
                      "]"
                  )
                  .removeClass(classes.activeImage)
                  .addClass(classes.finishedImage);
              var target_image = this.data.active_image;
              window.setTimeout(function () {
                $container
                  .find(
                    ".fading-images__item[data-slide-index=" +
                      target_image +
                      "]"
                  )
                  .removeClass(classes.finishedImage);
              }, this.data.finish_interval),
                this.data.active_image++,
                this.data.active_image > this.data.block_count &&
                  (this.data.active_image = 1),
                $container
                  .find(
                    ".fading-images__item[data-slide-index=" +
                      this.data.active_image +
                      "]"
                  )
                  .addClass(classes.activeImage);
            },
            nextTitle: function () {
              var $container = this.$container,
                $allTitles = this.selectors.$allTitles;
              this.selectors.$allTitles
                .removeClass(classes.activeTitles)
                .addClass(classes.finishedTitles),
                this.data.active_title++,
                this.data.active_title > this.data.block_count &&
                  (this.data.active_title = 1);
              var target_title = this.data.active_title;
              window.setTimeout(function () {
                var newText1 = $container
                    .find(
                      ".fading-images__item[data-slide-index=" +
                        target_title +
                        "]"
                    )
                    .attr("data-slide-title1"),
                  newText2 = $container
                    .find(
                      ".fading-images__item[data-slide-index=" +
                        target_title +
                        "]"
                    )
                    .attr("data-slide-title2");
                $container
                  .find(".fading-images-overlay__title--1")
                  .text(newText1),
                  $container
                    .find(".fading-images-overlay__title--2")
                    .text(newText2),
                  $allTitles
                    .removeClass(classes.finishedTitles)
                    .addClass(classes.activeTitles);
              }, this.data.finish_interval - 200);
            },
            startImages: function () {
              this.$container
                .find(
                  ".fading-images__item[data-slide-index=" +
                    this.data.active_image +
                    "]"
                )
                .addClass(classes.activeImage)
                .addClass(classes.compensation);
              var o = this;
              window.setTimeout(function () {
                var fading_images_timer = window.setInterval(
                  o.nextImage.bind(o),
                  o.data.interval
                );
              }, this.data.timer_offset);
            },
            startTitles: function () {
              var $container = this.$container,
                $allTitles = this.selectors.$allTitles,
                target_title = this.data.active_title;
              window.setTimeout(function () {
                var newText1 = $container
                    .find(
                      ".fading-images__item[data-slide-index=" +
                        target_title +
                        "]"
                    )
                    .attr("data-slide-title1"),
                  newText2 = $container
                    .find(
                      ".fading-images__item[data-slide-index=" +
                        target_title +
                        "]"
                    )
                    .attr("data-slide-title2");
                $container
                  .find(".fading-images-overlay__title--1")
                  .text(newText1),
                  $container
                    .find(".fading-images-overlay__title--2")
                    .text(newText2),
                  $allTitles.addClass(classes.activeTitles);
              }, 750);
              var fading_titles_timer = window.setInterval(
                this.nextTitle.bind(this),
                this.data.interval
              );
            },
            onLoad: function () {},
            onSelect: function () {},
            onDeselect: function () {},
            onUnload: function () {},
          })),
          FadingImages
        );
      })()),
      (theme.Maps = (function () {
        var config = { zoom: 14 },
          apiStatus = null,
          mapsToLoad = [],
          errors = {
            addressNoResults: theme.strings.addressNoResults,
            addressQueryLimit: theme.strings.addressQueryLimit,
            addressError: theme.strings.addressError,
            authError: theme.strings.authError,
          },
          selectors = {
            section: '[data-section-type="map"]',
            map: "[data-map]",
            mapOverlay: "[data-map-overlay]",
          },
          classes = {
            mapError: "map-section--load-error",
            errorMsg: "map-section__error errors text-center",
          };
        window.gm_authFailure = function () {
          Shopify.designMode &&
            ($(selectors.section).addClass(classes.mapError),
            $(selectors.map).remove(),
            $(selectors.mapOverlay).after(
              '<div class="' +
                classes.errorMsg +
                '">' +
                theme.strings.authError +
                "</div>"
            ));
        };
        function Map(container) {
          (this.$container = $(container)),
            (this.sectionId = this.$container.attr("data-section-id")),
            (this.namespace = ".map-" + this.sectionId),
            (this.$map = this.$container.find(selectors.map)),
            (this.key = this.$map.data("api-key")),
            this.key &&
              (this.checkVisibility(),
              $(window).on(
                "scroll" + this.namespace,
                $.throttle(50, this.checkVisibility.bind(this))
              ));
        }
        function initAllMaps() {
          $.each(mapsToLoad, function (index2, instance) {
            instance.createMap();
          });
        }
        function geolocate($map) {
          var deferred = $.Deferred(),
            geocoder = new google.maps.Geocoder(),
            address = $map.data("address-setting");
          return (
            geocoder.geocode({ address: address }, function (results, status2) {
              status2 !== google.maps.GeocoderStatus.OK &&
                deferred.reject(status2),
                deferred.resolve(results);
            }),
            deferred
          );
        }
        return (
          (Map.prototype = $.extend({}, Map.prototype, {
            prepMapApi: function () {
              apiStatus === "loaded"
                ? this.createMap()
                : (mapsToLoad.push(this),
                  apiStatus !== "loading" &&
                    ((apiStatus = "loading"),
                    typeof window.google == "undefined" &&
                      $.getScript(
                        "https://maps.googleapis.com/maps/api/js?key=" +
                          this.key
                      ).then(function () {
                        (apiStatus = "loaded"), initAllMaps();
                      })));
            },
            createMap: function () {
              var $map = this.$map;
              return geolocate($map)
                .then(
                  function (results) {
                    var mapOptions = {
                        zoom: config.zoom,
                        backgroundColor: "none",
                        center: results[0].geometry.location,
                        draggable: !1,
                        clickableIcons: !1,
                        scrollwheel: !1,
                        disableDoubleClickZoom: !0,
                        disableDefaultUI: !0,
                      },
                      map = (this.map = new google.maps.Map(
                        $map[0],
                        mapOptions
                      )),
                      center = (this.center = map.getCenter()),
                      marker = new google.maps.Marker({
                        map: map,
                        position: map.getCenter(),
                      });
                    google.maps.event.addDomListener(
                      window,
                      "resize",
                      $.debounce(250, function () {
                        google.maps.event.trigger(map, "resize"),
                          map.setCenter(center),
                          $map.removeAttr("style");
                      })
                    );
                  }.bind(this)
                )
                .fail(function () {
                  var errorMessage;
                  switch (status) {
                    case "ZERO_RESULTS":
                      errorMessage = errors.addressNoResults;
                      break;
                    case "OVER_QUERY_LIMIT":
                      errorMessage = errors.addressQueryLimit;
                      break;
                    case "REQUEST_DENIED":
                      errorMessage = errors.authError;
                      break;
                    default:
                      errorMessage = errors.addressError;
                      break;
                  }
                  Shopify.designMode &&
                    $map
                      .parent()
                      .addClass(classes.mapError)
                      .html(
                        '<div class="' +
                          classes.errorMsg +
                          '">' +
                          errorMessage +
                          "</div>"
                      );
                });
            },
            checkVisibility: function () {
              theme.isElementVisible(this.$container, 600) &&
                (this.prepMapApi(), $(window).off(this.namespace));
            },
            onUnload: function () {
              this.$map.length !== 0 &&
                google.maps.event.clearListeners(this.map, "resize");
            },
          })),
          Map
        );
      })()),
      (theme.Blog = (function () {
        function Blog(container) {
          this.tagFilters();
        }
        return (
          (Blog.prototype = $.extend({}, Blog.prototype, {
            tagFilters: function () {
              var $filterBy = $("#BlogTagFilter");
              $filterBy.length &&
                $filterBy.on("change", function () {
                  location.href = $(this).val();
                });
            },
            onUnload: function () {},
          })),
          Blog
        );
      })()),
      (theme.Photoswipe = (function () {
        var selectors = { photoswipeImg: ".photoswipe__image" };
        function Photoswipe(container) {
          var $container = (this.$container = $(container)),
            sectionId = $container.attr("data-section-id");
          this.namespace = ".photoswipe-" + this.sectionId;
          var $images = (this.$images = $container.find(
            selectors.photoswipeImg
          ));
          this.gallery, $container.length && this.init();
        }
        return (
          (Photoswipe.prototype = $.extend({}, Photoswipe.prototype, {
            init: function () {
              var haveImages = !1,
                items = [],
                options = {};
              this.$images.each(function () {
                var haveImages2 = !0,
                  smallSrc = $(this).prop("currentSrc") || $(this).prop("src"),
                  item = {
                    msrc: smallSrc,
                    src: $(this).data("photoswipe-src"),
                    w: $(this).data("photoswipe-width"),
                    h: $(this).data("photoswipe-height"),
                    el: $(this)[0],
                  };
                items.push(item);
              }),
                this.$images.on(
                  "click" + this.namespace,
                  function (evt) {
                    (index = $(evt.currentTarget).data("index")),
                      this.initGallery(items, index);
                  }.bind(this)
                );
            },
            initGallery: function (items, index2) {
              var pswpElement = document.querySelectorAll(".pswp")[0],
                options = {
                  history: !1,
                  index: index2 - 1,
                  getThumbBoundsFn: function (index3) {
                    var pageYScroll =
                        window.pageYOffset ||
                        document.documentElement.scrollTop,
                      thumbnail = items[index3].el,
                      rect = thumbnail.getBoundingClientRect();
                    return {
                      x: rect.left,
                      y: rect.top + pageYScroll,
                      w: rect.width,
                    };
                  },
                };
              (this.gallery = new PhotoSwipe(
                pswpElement,
                PhotoSwipeUI_Default,
                items,
                options
              )),
                this.gallery.init();
            },
            onUnload: function () {
              this.$images.off("click" + this.namespace),
                this.gallery.destroy();
            },
          })),
          Photoswipe
        );
      })()),
      (theme.config = {
        bpSmall: !1,
        hasSessionStorage: !0,
        mediaQuerySmall: "screen and (max-width: 589px)",
        mediaQueryMediumUp: "screen and (min-width: 590px)",
        youTubeReady: !1,
        vimeoReady: !1,
        vimeoLoading: !1,
        isTouch: !!(
          "ontouchstart" in window ||
          (window.DocumentTouch && window.document instanceof DocumentTouch) ||
          window.navigator.maxTouchPoints ||
          window.navigator.msMaxTouchPoints
        ),
      }),
      (window.onYouTubeIframeAPIReady = function () {
        (theme.config.youTubeReady = !0), $("body").trigger("youTubeReady");
      }),
      (window.loadYouTube = function () {
        if (!theme.config.youtubeReady) {
          var tag = document.createElement("script");
          tag.src = "https://www.youtube.com/iframe_api";
          var firstScriptTag = document.getElementsByTagName("script")[0];
          firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
        }
      }),
      (window.loadVimeo = function () {
        if (!theme.config.vimeoLoading && !theme.config.vimeoReady) {
          theme.config.vimeoLoading = !0;
          var tag = document.createElement("script");
          tag.src = "https://player.vimeo.com/api/player.js";
          var firstScriptTag = document.getElementsByTagName("script")[0];
          firstScriptTag.parentNode.insertBefore(tag, firstScriptTag),
            checkIfVimeoIsReady()
              .then(function () {
                (theme.config.vimeoReady = !0),
                  (theme.config.vimeoLoading = !1),
                  $("body").trigger("vimeoReady");
              })
              .fail(function () {});
        }
      });
    function checkIfVimeoIsReady() {
      var deferred = $.Deferred(),
        wait,
        timeout;
      return (
        (wait = setInterval(function () {
          Vimeo &&
            (clearInterval(wait), clearTimeout(timeout), deferred.resolve());
        }, 500)),
        (timeout = setTimeout(function () {
          clearInterval(wait), deferred.reject();
        }, 4e3)),
        deferred
      );
    }
    (theme.init = function () {
      theme.setGlobals(),
        theme.pageTransitions(),
        theme.initQuickShop(),
        theme.videoModal(),
        theme.articleImages.init(),
        theme.customerTemplates.init(),
        theme.collapsibles.init(),
        slate.rte.wrapTable(),
        slate.rte.wrapVideo(),
        AOS.init({
          easing: "ease-out-quad",
          once: !0,
          offset: 60,
          disableMutationObserver: !0,
        }),
        $(document.documentElement).on("keyup.tab", function (evt) {
          evt.keyCode === 9 &&
            ($(document.documentElement).addClass("tab-outline"),
            $(document.documentElement).off("keyup.tab"));
        });
    }),
      (theme.setGlobals = function () {
        (theme.config.hasSessionStorage = theme.isSessionStorageSupported()),
          theme.config.isTouch && $("body").addClass("supports-touch"),
          enquire.register(theme.config.mediaQuerySmall, {
            match: function () {
              (theme.config.bpSmall = !0), $("body").trigger("matchSmall");
            },
            unmatch: function () {
              (theme.config.bpSmall = !1), $("body").trigger("unmatchSmall");
            },
          }),
          enquire.register(theme.config.mediaQueryMediumUp, {
            match: function () {
              $("body").trigger("matchLarge");
            },
            unmatch: function () {
              $("body").trigger("unmatchLarge");
            },
          });
      }),
      (theme.loadImageSection = function ($container) {
        function setAsLoaded() {
          $container.removeClass("loading loading--delayed").addClass("loaded");
        }
        function checkForLazyloadedImage() {
          return $container.find(".lazyloaded").length;
        }
        if ($container.find("svg").length) {
          setAsLoaded();
          return;
        }
        if (checkForLazyloadedImage() > 0) {
          setAsLoaded();
          return;
        }
        var interval = setInterval(function () {
          checkForLazyloadedImage() > 0 &&
            (clearInterval(interval), setAsLoaded());
        }, 80);
      }),
      (theme.isSessionStorageSupported = function () {
        if (window.self !== window.top) return !1;
        var testKey = "test",
          storage = window.sessionStorage;
        try {
          return storage.setItem(testKey, "1"), storage.removeItem(testKey), !0;
        } catch (error) {
          return !1;
        }
      }),
      (theme.isElementVisible = function ($el, threshold) {
        var rect = $el[0].getBoundingClientRect(),
          windowHeight =
            window.innerHeight || document.documentElement.clientHeight;
        return (
          (threshold = threshold || 0),
          rect.bottom >= 0 &&
            rect.right >= 0 &&
            rect.top <= windowHeight + threshold &&
            rect.left <=
              (window.innerWidth || document.documentElement.clientWidth)
        );
      }),
      (theme.pageTransitions = function () {
        $("body").data("transitions") == !0 &&
          (navigator.userAgent.match(/Version\/[\d\.]+.*Safari/) &&
            $("a").on("click", function () {
              window.setTimeout(function () {
                $("body").removeClass("unloading");
              }, 1200);
            }),
          $(
            'a[href^="mailto:"], a[href^="#"], a[target="_blank"], a[href*="youtube.com/watch"], a[href*="youtu.be/"]'
          ).each(function () {
            $(this).addClass("js-no-transition");
          }),
          $("a:not(.js-no-transition, .jdgm-paginate__page, .jdgm-star)").bind(
            "click",
            function (evt) {
              if (evt.metaKey) return !0;
              evt.preventDefault(), $("body").addClass("unloading");
              var src = $(this).attr("href");
              window.setTimeout(function () {
                location.href = src;
              }, 50);
            }
          ),
          $("a.mobile-nav__link").bind("click", function () {
            theme.NavDrawer.close();
          }));
      }),
      (window.onpageshow = function (evt) {
        evt.persisted && $("body").removeClass("unloading");
      }),
      $(document).ready(function () {
        theme.init(),
          (window.sections = new theme.Sections()),
          sections.register("header-section", theme.HeaderSection),
          sections.register("slideshow-section", theme.SlideshowSection),
          sections.register("video-section", theme.VideoSection),
          sections.register("product", theme.Product),
          sections.register("product-template", theme.Product),
          sections.register("collection-template", theme.Collection),
          sections.register(
            "featured-content-section",
            theme.FeaturedContentSection
          ),
          sections.register("testimonials", theme.Testimonials),
          sections.register("instagram", theme.Instagram),
          sections.register("newsletter-popup", theme.NewsletterPopup),
          sections.register("fading-images", theme.FadingImages),
          sections.register("map", theme.Maps),
          sections.register("blog", theme.Blog),
          sections.register("photoswipe", theme.Photoswipe);
      });
  })(theme.jQuery);
//# sourceMappingURL=/cdn/shop/t/47/assets/theme.js.map?v=138319844754918881321686144465
