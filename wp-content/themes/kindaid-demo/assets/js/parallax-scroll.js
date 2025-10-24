(function($) {
    var ParallaxScroll = {
        /* PUBLIC VARIABLES */
        showLogs: false,
        round: 1000,

        /* PUBLIC FUNCTIONS */
        init: function() {
            this._log("init");
            if (this._inited) {
                this._log("Already Inited");
                return;
            }
            this._inited = true;
            this._requestAnimationFrame = (
                window.requestAnimationFrame ||
                window.webkitRequestAnimationFrame ||
                window.mozRequestAnimationFrame ||
                window.oRequestAnimationFrame ||
                window.msRequestAnimationFrame ||
                function(callback) { window.setTimeout(callback, 1000 / 60); }
            );
            this._onScroll(true);
        },

        /* PRIVATE VARIABLES */
        _inited: false,
        _properties: ['x', 'y', 'z', 'rotateX', 'rotateY', 'rotateZ', 'scaleX', 'scaleY', 'scaleZ', 'scale'],
        _requestAnimationFrame: null,

        /* PRIVATE FUNCTIONS */
        _log: function(message) {
            if (this.showLogs) console.log("Parallax Scroll / " + message);
        },
        _onScroll: function(noSmooth) {
            var scroll = $(document).scrollTop();
            var windowHeight = $(window).height();
            this._log("onScroll " + scroll);

            $("[data-parallax]").each($.proxy(function(index, el) {
                var $el = $(el);
                var style = $el.data("style");
                if (style == undefined) {
                    style = $el.attr("style") || "";
                    $el.data("style", style);
                }

                // তোমার আগের complex property update code এখানে রাখো...
                // (আমি বাদ দিচ্ছি কারণ তুমি আগেই পাঠিয়েছো, আর এতে কোনো structural সমস্যা ছিল না)

            }, this));

            if (window.requestAnimationFrame) {
                window.requestAnimationFrame($.proxy(this._onScroll, this, false));
            } else {
                this._requestAnimationFrame($.proxy(this._onScroll, this, false));
            }
        }
    };

    // jQuery ready এর ভিতরে init কল করো
    $(document).ready(function() {
        $('.parallax').each(function() {
            ParallaxScroll.init();
        });
    });
})(jQuery);
