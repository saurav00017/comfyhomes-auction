; (function () {
    var k; function l(a) {var b = 0; return function () {return b < a.length ? {done: !1, value: a[b++]} : {done: !0}}} var m = "function" == typeof Object.defineProperties ? Object.defineProperty : function (a, b, d) {a != Array.prototype && a != Object.prototype && (a[b] = d.value)}, n = "undefined" != typeof window && window === this ? this : "undefined" != typeof global && null != global ? global : this; function p() {p = function () {}; n.Symbol || (n.Symbol = r)} var r = function () {var a = 0; return function (b) {return "jscomp_symbol_" + (b || "") + a++}}();
    function u() {p(); var a = n.Symbol.iterator; a || (a = n.Symbol.iterator = n.Symbol("iterator")); "function" != typeof Array.prototype[a] && m(Array.prototype, a, {configurable: !0, writable: !0, value: function () {return v(l(this))}}); u = function () {}} function v(a) {u(); a = {next: a}; a[n.Symbol.iterator] = function () {return this}; return a} function x(a) {var b = "undefined" != typeof Symbol && Symbol.iterator && a[Symbol.iterator]; return b ? b.call(a) : {next: l(a)}} var y;
    if ("function" == typeof Object.setPrototypeOf) y = Object.setPrototypeOf; else {var z; a: {var A = {o: !0}, B = {}; try {B.__proto__ = A; z = B.o; break a} catch (a) {} z = !1} y = z ? function (a, b) {a.__proto__ = b; if (a.__proto__ !== b) throw new TypeError(a + " is not extensible"); return a} : null} var C = y; function D() {this.g = !1; this.c = null; this.m = void 0; this.b = 1; this.l = this.s = 0; this.f = null} function E(a) {if (a.g) throw new TypeError("Generator is already running"); a.g = !0} D.prototype.h = function (a) {this.m = a};
    D.prototype.i = function (a) {this.f = {u: a, v: !0}; this.b = this.s || this.l}; D.prototype["return"] = function (a) {this.f = {"return": a}; this.b = this.l}; function F(a, b, d) {a.b = d; return {value: b}} function G(a) {this.w = a; this.j = []; for (var b in a) this.j.push(b); this.j.reverse()} function H(a) {this.a = new D; this.A = a} H.prototype.h = function (a) {E(this.a); if (this.a.c) return I(this, this.a.c.next, a, this.a.h); this.a.h(a); return J(this)};
    function K(a, b) {E(a.a); var d = a.a.c; if (d) return I(a, "return" in d ? d["return"] : function (a) {return {value: a, done: !0}}, b, a.a["return"]); a.a["return"](b); return J(a)} H.prototype.i = function (a) {E(this.a); if (this.a.c) return I(this, this.a.c["throw"], a, this.a.h); this.a.i(a); return J(this)};
    function I(a, b, d, c) {try {var e = b.call(a.a.c, d); if (!(e instanceof Object)) throw new TypeError("Iterator result " + e + " is not an object"); if (!e.done) return a.a.g = !1, e; var f = e.value} catch (g) {return a.a.c = null, a.a.i(g), J(a)} a.a.c = null; c.call(a.a, f); return J(a)} function J(a) {for (; a.a.b;)try {var b = a.A(a.a); if (b) return a.a.g = !1, {value: b.value, done: !1}} catch (d) {a.a.m = void 0, a.a.i(d)} a.a.g = !1; if (a.a.f) {b = a.a.f; a.a.f = null; if (b.v) throw b.u; return {value: b["return"], done: !0}} return {value: void 0, done: !0}}
    function L(a) {this.next = function (b) {return a.h(b)}; this["throw"] = function (b) {return a.i(b)}; this["return"] = function (b) {return K(a, b)}; u(); this[Symbol.iterator] = function () {return this}} function M(a, b) {var d = new L(new H(b)); C && C(d, a.prototype); return d}
    if ("undefined" === typeof FormData || !FormData.prototype.keys) {
        var N = function (a, b) {for (var d = 0; d < a.length; d++)b(a[d])}, O = function (a, b, d) {if (2 > arguments.length) throw new TypeError("2 arguments required, but only " + arguments.length + " present."); return b instanceof Blob ? [a + "", b, void 0 !== d ? d + "" : "string" === typeof b.name ? b.name : "blob"] : [a + "", b + ""]}, P = function (a) {if (!arguments.length) throw new TypeError("1 argument required, but only 0 present."); return [a + ""]}, Q = function (a) {
            var b = x(a); a = b.next().value; b = b.next().value;
            a instanceof Blob && (a = new File([a], b, {type: a.type, lastModified: a.lastModified})); return a
        }, R = "object" === typeof window ? window : "object" === typeof self ? self : this, S = R.FormData, T = R.XMLHttpRequest && R.XMLHttpRequest.prototype.send, U = R.Request && R.fetch; p(); var V = R.Symbol && Symbol.toStringTag, W = new WeakMap, X = Array.from || function (a) {return [].slice.call(a)}; V && (Blob.prototype[V] || (Blob.prototype[V] = "Blob"), "File" in R && !File.prototype[V] && (File.prototype[V] = "File")); try {new File([], "")} catch (a) {
            R.File = function (b,
                d, c) {b = new Blob(b, c); c = c && void 0 !== c.lastModified ? new Date(c.lastModified) : new Date; Object.defineProperties(b, {name: {value: d}, lastModifiedDate: {value: c}, lastModified: {value: +c}, toString: {value: function () {return "[object File]"}}}); V && Object.defineProperty(b, V, {value: "File"}); return b}
        } p(); u(); var Y = function (a) {
            W.set(this, Object.create(null)); if (!a) return this; var b = this; N(a.elements, function (a) {
                a.name && !a.disabled && "submit" !== a.type && "button" !== a.type && ("file" === a.type ? N(a.files || [], function (c) {
                    b.append(a.name,
                        c)
                }) : "select-multiple" === a.type || "select-one" === a.type ? N(a.options, function (c) {!c.disabled && c.selected && b.append(a.name, c.value)}) : "checkbox" === a.type || "radio" === a.type ? a.checked && b.append(a.name, a.value) : b.append(a.name, a.value))
            })
        }; k = Y.prototype; k.append = function (a, b, d) {var c = W.get(this); c[a] || (c[a] = []); c[a].push([b, d])}; k["delete"] = function (a) {delete W.get(this)[a]}; k.entries = function b() {
            var d = this, c, e, f, g, h, q; return M(b, function (b) {
                switch (b.b) {
                    case 1: c = W.get(d), f = new G(c); case 2: var t; a: {
                        for (t =
                            f; 0 < t.j.length;) {var w = t.j.pop(); if (w in t.w) {t = w; break a} } t = null
                    } if (null == (e = t)) {b.b = 0; break} g = x(c[e]); h = g.next(); case 5: if (h.done) {b.b = 2; break} q = h.value; return F(b, [e, Q(q)], 6); case 6: h = g.next(), b.b = 5
                }
            })
        }; k.forEach = function (b, d) {for (var c = x(this), e = c.next(); !e.done; e = c.next()) {var f = x(e.value); e = f.next().value; f = f.next().value; b.call(d, f, e, this)} }; k.get = function (b) {var d = W.get(this); return d[b] ? Q(d[b][0]) : null}; k.getAll = function (b) {return (W.get(this)[b] || []).map(Q)}; k.has = function (b) {
            return b in
                W.get(this)
        }; k.keys = function d() {var c = this, e, f, g, h, q; return M(d, function (d) {1 == d.b && (e = x(c), f = e.next()); if (3 != d.b) {if (f.done) {d.b = 0; return } g = f.value; h = x(g); q = h.next().value; return F(d, q, 3)} f = e.next(); d.b = 2})}; k.set = function (d, c, e) {W.get(this)[d] = [[c, e]]}; k.values = function c() {var e = this, f, g, h, q, w; return M(c, function (c) {1 == c.b && (f = x(e), g = f.next()); if (3 != c.b) {if (g.done) {c.b = 0; return } h = g.value; q = x(h); q.next(); w = q.next().value; return F(c, w, 3)} g = f.next(); c.b = 2})}; Y.prototype._asNative = function () {
            for (var c =
                new S, e = x(this), f = e.next(); !f.done; f = e.next()) {var g = x(f.value); f = g.next().value; g = g.next().value; c.append(f, g)} return c
        }; Y.prototype._blob = function () {
            for (var c = "----formdata-polyfill-" + Math.random(), e = [], f = x(this), g = f.next(); !g.done; g = f.next()) {
                var h = x(g.value); g = h.next().value; h = h.next().value; e.push("--" + c + "\r\n"); h instanceof Blob ? e.push('Content-Disposition: form-data; name="' + g + '"; filename="' + h.name + '"\r\n', "Content-Type: " + (h.type || "application/octet-stream") + "\r\n\r\n", h, "\r\n") : e.push('Content-Disposition: form-data; name="' +
                    g + '"\r\n\r\n' + h + "\r\n")
            } e.push("--" + c + "--"); return new Blob(e, {type: "multipart/form-data; boundary=" + c})
        }; Y.prototype[Symbol.iterator] = function () {return this.entries()}; Y.prototype.toString = function () {return "[object FormData]"}; V && (Y.prototype[V] = "FormData");[["append", O], ["delete", P], ["get", P], ["getAll", P], ["has", P], ["set", O]].forEach(function (c) {var e = Y.prototype[c[0]]; Y.prototype[c[0]] = function () {return e.apply(this, c[1].apply(this, X(arguments)))}}); T && (XMLHttpRequest.prototype.send = function (c) {
            c instanceof
                Y ? (c = c._blob(), this.setRequestHeader("Content-Type", c.type), T.call(this, c)) : T.call(this, c)
        }); if (U) {var Z = R.fetch; R.fetch = function (c, e) {e && e.body && e.body instanceof Y && (e.body = e.body._blob()); return Z(c, e)}} R.FormData = Y
    };
})();
