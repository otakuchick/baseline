if (typeof xp === "undefined") {
    var xp = {};
}
if (typeof xp.namespace === "undefined") {
    xp.namespace = function() {
        var c = arguments, a = null, b;
        for (i = 0; i < c.length; i = i + 1) {
            b = c[i].split(".");
            a = window;
            for (j = 0; j < b.length; j = j + 1) {
                a[b[j]] = a[b[j]] || {};
                a = a[b[j]];
            }
        }
        return a;
    };
}
xp.namespace("xp.nav");
xp.nav.trackAnalytics = function(b, a, c) {
    if ("undefined" != typeof(s_exp_trackClick) && s_exp_trackClick) {
        s_exp_trackClick(b, a, c);
    }
    return true;
};
xp.namespace("xp.nav.event");
xp.nav.event.onDOMReady = function(b) {
    if (window.addEventListener) {
        window.addEventListener("load", b, false);
    } else {
        if (window.attachEvent) {
            window.attachEvent("onload", b);
        } else {
            if (window.onload != null) {
                var a = window.onload;
                window.onload = function(c) {
                    a(c);
                    window[b]();
                };
            } else {
                window.onload = b;
            }
        }
    }
};
fillTestOverrideParams = function() {
    var a = window.location.pathname + window.location.search + window.location.hash;
    if (a.indexOf("ue2e")!=-1) {
        document.getElementById("header-itineraries").href += a;
    }
};
appendRedirectionUrl = function(a) {
    var c = window.location.pathname;
    var f = a.id;
    var d = document.getElementById(f).href;
    var e = "/";
    if (d.indexOf("/user/login")!=-1) {
        e = "/user/login?";
    } else {
        e = "/user/logout?";
    }
    if (c != "/") {
        var b = c.concat(window.location.search, window.location.hash);
        b = "&uurl=" + encodeURIComponent("e3id=redr&rurl=" + b);
        document.location.href = e + b;
    } else {
        document.location.href = e;
    }
};
addScratchpadBadge = function() {
    if (typeof ab3115status !== "undefined" && ab3115status == 2) {
        $.ajax({
            dataType: "json",
            url: "/api/userhistory/count",
            success: function(a) {
                if (a.count > 0) {
                    if (a.count > 30) {
                        a.count = 30;
                    }
                    $("#scratchpad-badge").removeClass("visuallyhidden").text(a.count);
                }
            },
            cache: false,
            timeout: 500
        });
    }
};
function headerFeedback(g) {
    var c = screen.width;
    var f = screen.height;
    var d = "http%3A%2F%2Fwww.expedia.com%2F/Homepage-new.html";
    var b = document.getElementById("home-page");
    var a = OpinionLab_FB.O_HT();
    if (b) {
        a = d;
    }
    var h = window.open("/p/info-other/feedback.htm?referer=" + a + "&customvar=" + OpinionLab_FB.O_CV() + "&prev=" + OpinionLab_FB.O_PRV(), "ModalPopUp", "toolbar=no," + "scrollbars=no," + "location=no," + "statusbar=no," + "menubar=no," + "resizable=no," + "width=635px," + "height=280px," + "screenX=" + ((c-535) / 2) + "," + "screenY=" + ((f-192) / 2) + "," + "left=" + ((c-535) / 2) + "," + "top=" + ((f-192) / 2));
    h.focus();
}
var OpinionLab_FB = (function() {
    var custom_var, _sp = "%3A\\/\\/", _rp = "%3A//", _poE = 0, _poX = 0, _sH = screen.height, _d = document, _w = window, _ht = escape(_w.location.href), _hr = _d.referrer, _tm = (new Date()).getTime(), _kp = 0, _sW = screen.width;
    function _fC(_u) {
        _aT = _sp + ",\\/,\\.,-,_," + _rp + ",%2F,%2E,%2D,%5F";
        _aA = _aT.split(",");
        for (i = 0; i < 5; i++) {
            eval("_u=_u.replace(/" + _aA[i] + "/g,_aA[i+5])");
        }
        return _u;
    }
    function _fPe() {
        if (Math.random() >= 1 - _poE) {
            O_LC();
            _poX = 0;
        }
    }
    function _fPx() {
        if (Math.random() >= 1 - _poX) {
            O_LC();
        }
    }
    function _populateCustomVar() {
        var t = "";
        var g = "";
        if ((typeof(dctk) !== "undefined") && (typeof(dctk.omtr) !== "undefined")) {
            t = (typeof(dctk.omtr.prop11) !== "undefined") ? dctk.omtr.prop11 : "";
            g = (typeof(dctk.omtr.prop12) !== "undefined") ? dctk.omtr.prop12 : "";
        } else {
            if (typeof(s_exp) !== "undefined") {
                t = (typeof(s_exp.prop11) !== "undefined") ? s_exp.prop11 : "";
                g = (typeof(s_exp.prop12) !== "undefined") ? s_exp.prop12 : "";
            } else {
                t = (typeof(s_prop11) !== "undefined") ? s_prop11 : "";
                g = (typeof(s_prop12) !== "undefined") ? s_prop12 : "";
            }
        }
        custom_var = g + "|" + t;
    }
    function _replacePageName() {
        var page_name = null;
        page_name = ((typeof(dctk) !== "undefined") && (typeof(dctk.omtr) !== "undefined")) ? escape(dctk.omtr.pageName) + ".html" : ((typeof(s_exp) !== "undefined") && (typeof(s_exp.pageName) !== "undefined")) ? escape(s_exp.pageName) + ".html" : (typeof(s_pageName) !== "undefined") ? escape(s_pageName) + ".html" : null;
        if (page_name) {
            var l_page_name = page_name.toLowerCase();
            if (l_page_name.search("infosite") >= 0) {
                page_name = null;
            }
        }
        if (page_name) {
            _domain = _ht.replace("https%3A//", "").replace("http%3A//", "");
            _ht = _ht.substr(0, _ht.indexOf("%3A//")) + "%3A//" + _domain.substr(0, _domain.indexOf("/")) + "/" + page_name;
        }
        if (typeof(bIsCAFR) != "undefined") {
            if (bIsCAFR == true) {
                _lG = "fr-CA.";
                _rp = "%3A//" + _lG;
            }
        }
        if (typeof(bIsMSMY) != "undefined") {
            if (bIsMSMY == true) {
                _lG = "ms-my.";
                _rp = "%3A//" + _lG;
            }
        }
        if (typeof(OlAltLang) != "undefined") {
            if (OlAltLang != null) {
                _lG = OlAltLang;
                _rp = "%3A//" + _lG;
            }
        }
    }
    return {
        O_HT: function() {
            _replacePageName();
            return _ht;
        },
        O_CV: function() {
            _populateCustomVar();
            return custom_var;
        },
        O_PRV: function() {
            if (_hr == null || _hr.length < 1) {
                return "null";
            }
            return escape(_hr);
        },
        O_LC: function(target, referer, customvar, prev) {
            _replacePageName();
            _populateCustomVar();
            if (target == null || target.length < 1) {
                target = "comments";
            }
            if (referer == null || referer.length < 1) {
                referer = _ht;
            }
            if (customvar == null || customvar.length < 1) {
                customvar = custom_var;
            }
            if (prev == null || prev.length < 1) {
                prev = _fC(escape(_hr));
            } else {
                if (prev == "null") {
                    prev = "";
                } else {
                    prev = _fC(escape(prev));
                }
            }
            _w.open("https://secure.opinionlab.com/ccc01/comment_card.asp?time1=" + _tm + "&time2=" + (new Date()).getTime() + "&prev=" + prev + "&referer=" + _fC(referer) + "&height=" + _sH + "&width=" + _sW + "&custom_var=" + customvar, target, "width=535,height=192,screenX=" + ((_sW-535) / 2) + ",screenY=" + ((_sH-192) / 2) + ",top=" + ((_sH-192) / 2) + ",left=" + ((_sW-535) / 2) + ",resizable=yes,copyhistory=yes,scrollbars=no");
        },
        O_GoT: function(_p) {
            _d.write("<a href='javascript:O_LC()'>" + _p + "</a>");
        }
    };
})();
/*!  generated on 2013-11-11 02:39:42.955 PST(-0800) */