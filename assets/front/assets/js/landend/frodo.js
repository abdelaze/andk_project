var frodo = function(c) {
    "use strict";

    function _regeneratorRuntime() {
        "use strict"; /*! regenerator-runtime -- Copyright (c) 2014-present, Facebook, Inc. -- license (MIT): https://github.com/facebook/regenerator/blob/main/LICENSE */
        _regeneratorRuntime = function() {
            return c
        };
        var c = {},
            m = Object.prototype,
            p = m.hasOwnProperty,
            k = Object.defineProperty || function(v, a, l) {
                v[a] = l.value
            },
            C = typeof Symbol == "function" ? Symbol : {},
            P = C.iterator || "@@iterator",
            R = C.asyncIterator || "@@asyncIterator",
            U = C.toStringTag || "@@toStringTag";

        function S(v, a, l) {
            return Object.defineProperty(v, a, {
                value: l,
                enumerable: !0,
                configurable: !0,
                writable: !0
            }), v[a]
        }
        try {
            S({}, "")
        } catch {
            S = function(l, f, b) {
                return l[f] = b
            }
        }

        function x(v, a, l, f) {
            var b = a && a.prototype instanceof Q ? a : Q,
                g = Object.create(b.prototype),
                I = new z(f || []);
            return k(g, "_invoke", {
                value: pe(v, l, I)
            }), g
        }

        function K(v, a, l) {
            try {
                return {
                    type: "normal",
                    arg: v.call(a, l)
                }
            } catch (f) {
                return {
                    type: "throw",
                    arg: f
                }
            }
        }
        c.wrap = x;
        var D = {};

        function Q() {}

        function Y() {}

        function $() {}
        var ee = {};
        S(ee, P, function() {
            return this
        });
        var J = Object.getPrototypeOf,
            te = J && J(J(X([])));
        te && te !== m && p.call(te, P) && (ee = te);
        var W = $.prototype = Q.prototype = Object.create(ee);

        function ie(v) {
            ["next", "throw", "return"].forEach(function(a) {
                S(v, a, function(l) {
                    return this._invoke(a, l)
                })
            })
        }

        function re(v, a) {
            function l(b, g, I, N) {
                var V = K(v[b], v, g);
                if (V.type !== "throw") {
                    var H = V.arg,
                        j = H.value;
                    return j && typeof j == "object" && p.call(j, "__await") ? a.resolve(j.__await).then(function(q) {
                        l("next", q, I, N)
                    }, function(q) {
                        l("throw", q, I, N)
                    }) : a.resolve(j).then(function(q) {
                        H.value = q, I(H)
                    }, function(q) {
                        return l("throw", q, I, N)
                    })
                }
                N(V.arg)
            }
            var f;
            k(this, "_invoke", {
                value: function(g, I) {
                    function N() {
                        return new a(function(V, H) {
                            l(g, I, V, H)
                        })
                    }
                    return f = f ? f.then(N, N) : N()
                }
            })
        }

        function pe(v, a, l) {
            var f = "suspendedStart";
            return function(b, g) {
                if (f === "executing") throw new Error("Generator is already running");
                if (f === "completed") {
                    if (b === "throw") throw g;
                    return ce()
                }
                for (l.method = b, l.arg = g;;) {
                    var I = l.delegate;
                    if (I) {
                        var N = ue(I, l);
                        if (N) {
                            if (N === D) continue;
                            return N
                        }
                    }
                    if (l.method === "next") l.sent = l._sent = l.arg;
                    else if (l.method === "throw") {
                        if (f === "suspendedStart") throw f = "completed", l.arg;
                        l.dispatchException(l.arg)
                    } else l.method === "return" && l.abrupt("return", l.arg);
                    f = "executing";
                    var V = K(v, a, l);
                    if (V.type === "normal") {
                        if (f = l.done ? "completed" : "suspendedYield", V.arg === D) continue;
                        return {
                            value: V.arg,
                            done: l.done
                        }
                    }
                    V.type === "throw" && (f = "completed", l.method = "throw", l.arg = V.arg)
                }
            }
        }

        function ue(v, a) {
            var l = a.method,
                f = v.iterator[l];
            if (f === void 0) return a.delegate = null, l === "throw" && v.iterator.return && (a.method = "return", a.arg = void 0, ue(v, a), a.method === "throw") || l !== "return" && (a.method = "throw", a.arg = new TypeError("The iterator does not provide a '" + l + "' method")), D;
            var b = K(f, v.iterator, a.arg);
            if (b.type === "throw") return a.method = "throw", a.arg = b.arg, a.delegate = null, D;
            var g = b.arg;
            return g ? g.done ? (a[v.resultName] = g.value, a.next = v.nextLoc, a.method !== "return" && (a.method = "next", a.arg = void 0), a.delegate = null, D) : g : (a.method = "throw", a.arg = new TypeError("iterator result is not an object"), a.delegate = null, D)
        }

        function he(v) {
            var a = {
                tryLoc: v[0]
            };
            1 in v && (a.catchLoc = v[1]), 2 in v && (a.finallyLoc = v[2], a.afterLoc = v[3]), this.tryEntries.push(a)
        }

        function oe(v) {
            var a = v.completion || {};
            a.type = "normal", delete a.arg, v.completion = a
        }

        function z(v) {
            this.tryEntries = [{
                tryLoc: "root"
            }], v.forEach(he, this), this.reset(!0)
        }

        function X(v) {
            if (v) {
                var a = v[P];
                if (a) return a.call(v);
                if (typeof v.next == "function") return v;
                if (!isNaN(v.length)) {
                    var l = -1,
                        f = function b() {
                            for (; ++l < v.length;)
                                if (p.call(v, l)) return b.value = v[l], b.done = !1, b;
                            return b.value = void 0, b.done = !0, b
                        };
                    return f.next = f
                }
            }
            return {
                next: ce
            }
        }

        function ce() {
            return {
                value: void 0,
                done: !0
            }
        }
        return Y.prototype = $, k(W, "constructor", {
            value: $,
            configurable: !0
        }), k($, "constructor", {
            value: Y,
            configurable: !0
        }), Y.displayName = S($, U, "GeneratorFunction"), c.isGeneratorFunction = function(v) {
            var a = typeof v == "function" && v.constructor;
            return !!a && (a === Y || (a.displayName || a.name) === "GeneratorFunction")
        }, c.mark = function(v) {
            return Object.setPrototypeOf ? Object.setPrototypeOf(v, $) : (v.__proto__ = $, S(v, U, "GeneratorFunction")), v.prototype = Object.create(W), v
        }, c.awrap = function(v) {
            return {
                __await: v
            }
        }, ie(re.prototype), S(re.prototype, R, function() {
            return this
        }), c.AsyncIterator = re, c.async = function(v, a, l, f, b) {
            b === void 0 && (b = Promise);
            var g = new re(x(v, a, l, f), b);
            return c.isGeneratorFunction(a) ? g : g.next().then(function(I) {
                return I.done ? I.value : g.next()
            })
        }, ie(W), S(W, U, "Generator"), S(W, P, function() {
            return this
        }), S(W, "toString", function() {
            return "[object Generator]"
        }), c.keys = function(v) {
            var a = Object(v),
                l = [];
            for (var f in a) l.push(f);
            return l.reverse(),
                function b() {
                    for (; l.length;) {
                        var g = l.pop();
                        if (g in a) return b.value = g, b.done = !1, b
                    }
                    return b.done = !0, b
                }
        }, c.values = X, z.prototype = {
            constructor: z,
            reset: function(a) {
                if (this.prev = 0, this.next = 0, this.sent = this._sent = void 0, this.done = !1, this.delegate = null, this.method = "next", this.arg = void 0, this.tryEntries.forEach(oe), !a)
                    for (var l in this) l.charAt(0) === "t" && p.call(this, l) && !isNaN(+l.slice(1)) && (this[l] = void 0)
            },
            stop: function() {
                this.done = !0;
                var a = this.tryEntries[0].completion;
                if (a.type === "throw") throw a.arg;
                return this.rval
            },
            dispatchException: function(a) {
                if (this.done) throw a;
                var l = this;

                function f(H, j) {
                    return I.type = "throw", I.arg = a, l.next = H, j && (l.method = "next", l.arg = void 0), !!j
                }
                for (var b = this.tryEntries.length - 1; b >= 0; --b) {
                    var g = this.tryEntries[b],
                        I = g.completion;
                    if (g.tryLoc === "root") return f("end");
                    if (g.tryLoc <= this.prev) {
                        var N = p.call(g, "catchLoc"),
                            V = p.call(g, "finallyLoc");
                        if (N && V) {
                            if (this.prev < g.catchLoc) return f(g.catchLoc, !0);
                            if (this.prev < g.finallyLoc) return f(g.finallyLoc)
                        } else if (N) {
                            if (this.prev < g.catchLoc) return f(g.catchLoc, !0)
                        } else {
                            if (!V) throw new Error("try statement without catch or finally");
                            if (this.prev < g.finallyLoc) return f(g.finallyLoc)
                        }
                    }
                }
            },
            abrupt: function(a, l) {
                for (var f = this.tryEntries.length - 1; f >= 0; --f) {
                    var b = this.tryEntries[f];
                    if (b.tryLoc <= this.prev && p.call(b, "finallyLoc") && this.prev < b.finallyLoc) {
                        var g = b;
                        break
                    }
                }
                g && (a === "break" || a === "continue") && g.tryLoc <= l && l <= g.finallyLoc && (g = null);
                var I = g ? g.completion : {};
                return I.type = a, I.arg = l, g ? (this.method = "next", this.next = g.finallyLoc, D) : this.complete(I)
            },
            complete: function(a, l) {
                if (a.type === "throw") throw a.arg;
                return a.type === "break" || a.type === "continue" ? this.next = a.arg : a.type === "return" ? (this.rval = this.arg = a.arg, this.method = "return", this.next = "end") : a.type === "normal" && l && (this.next = l), D
            },
            finish: function(a) {
                for (var l = this.tryEntries.length - 1; l >= 0; --l) {
                    var f = this.tryEntries[l];
                    if (f.finallyLoc === a) return this.complete(f.completion, f.afterLoc), oe(f), D
                }
            },
            catch: function(a) {
                for (var l = this.tryEntries.length - 1; l >= 0; --l) {
                    var f = this.tryEntries[l];
                    if (f.tryLoc === a) {
                        var b = f.completion;
                        if (b.type === "throw") {
                            var g = b.arg;
                            oe(f)
                        }
                        return g
                    }
                }
                throw new Error("illegal catch attempt")
            },
            delegateYield: function(a, l, f) {
                return this.delegate = {
                    iterator: X(a),
                    resultName: l,
                    nextLoc: f
                }, this.method === "next" && (this.arg = void 0), D
            }
        }, c
    }

    function _slicedToArray(c, m) {
        return _arrayWithHoles(c) || _iterableToArrayLimit(c, m) || _unsupportedIterableToArray(c, m) || _nonIterableRest()
    }

    function _nonIterableRest() {
        throw new TypeError(`Invalid attempt to destructure non-iterable instance.
In order to be iterable, non-array objects must have a [Symbol.iterator]() method.`)
    }

    function _iterableToArrayLimit(c, m) {
        var p = c == null ? null : typeof Symbol < "u" && c[Symbol.iterator] || c["@@iterator"];
        if (p != null) {
            var k, C, P, R, U = [],
                S = !0,
                x = !1;
            try {
                if (P = (p = p.call(c)).next, m === 0) {
                    if (Object(p) !== p) return;
                    S = !1
                } else
                    for (; !(S = (k = P.call(p)).done) && (U.push(k.value), U.length !== m); S = !0);
            } catch (K) {
                x = !0, C = K
            } finally {
                try {
                    if (!S && p.return != null && (R = p.return(), Object(R) !== R)) return
                } finally {
                    if (x) throw C
                }
            }
            return U
        }
    }

    function _arrayWithHoles(c) {
        if (Array.isArray(c)) return c
    }

    function ownKeys(c, m) {
        var p = Object.keys(c);
        if (Object.getOwnPropertySymbols) {
            var k = Object.getOwnPropertySymbols(c);
            m && (k = k.filter(function(C) {
                return Object.getOwnPropertyDescriptor(c, C).enumerable
            })), p.push.apply(p, k)
        }
        return p
    }

    function _objectSpread(c) {
        for (var m = 1; m < arguments.length; m++) {
            var p = arguments[m] != null ? arguments[m] : {};
            m % 2 ? ownKeys(Object(p), !0).forEach(function(k) {
                _defineProperty(c, k, p[k])
            }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(c, Object.getOwnPropertyDescriptors(p)) : ownKeys(Object(p)).forEach(function(k) {
                Object.defineProperty(c, k, Object.getOwnPropertyDescriptor(p, k))
            })
        }
        return c
    }

    function _defineProperty(c, m, p) {
        return m = _toPropertyKey(m), m in c ? Object.defineProperty(c, m, {
            value: p,
            enumerable: !0,
            configurable: !0,
            writable: !0
        }) : c[m] = p, c
    }

    function _toPropertyKey(c) {
        var m = _toPrimitive(c, "string");
        return typeof m == "symbol" ? m : String(m)
    }

    function _toPrimitive(c, m) {
        if (typeof c != "object" || c === null) return c;
        var p = c[Symbol.toPrimitive];
        if (p !== void 0) {
            var k = p.call(c, m || "default");
            if (typeof k != "object") return k;
            throw new TypeError("@@toPrimitive must return a primitive value.")
        }
        return (m === "string" ? String : Number)(c)
    }

    function asyncGeneratorStep(c, m, p, k, C, P, R) {
        try {
            var U = c[P](R),
                S = U.value
        } catch (x) {
            p(x);
            return
        }
        U.done ? m(S) : Promise.resolve(S).then(k, C)
    }

    function _asyncToGenerator(c) {
        return function() {
            var m = this,
                p = arguments;
            return new Promise(function(k, C) {
                var P = c.apply(m, p);

                function R(S) {
                    asyncGeneratorStep(P, k, C, R, U, "next", S)
                }

                function U(S) {
                    asyncGeneratorStep(P, k, C, R, U, "throw", S)
                }
                R(void 0)
            })
        }
    }

    function _toConsumableArray(c) {
        return _arrayWithoutHoles(c) || _iterableToArray(c) || _unsupportedIterableToArray(c) || _nonIterableSpread()
    }

    function _nonIterableSpread() {
        throw new TypeError(`Invalid attempt to spread non-iterable instance.
In order to be iterable, non-array objects must have a [Symbol.iterator]() method.`)
    }

    function _unsupportedIterableToArray(c, m) {
        if (c) {
            if (typeof c == "string") return _arrayLikeToArray(c, m);
            var p = Object.prototype.toString.call(c).slice(8, -1);
            if (p === "Object" && c.constructor && (p = c.constructor.name), p === "Map" || p === "Set") return Array.from(c);
            if (p === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(p)) return _arrayLikeToArray(c, m)
        }
    }

    function _iterableToArray(c) {
        if (typeof Symbol < "u" && c[Symbol.iterator] != null || c["@@iterator"] != null) return Array.from(c)
    }

    function _arrayWithoutHoles(c) {
        if (Array.isArray(c)) return _arrayLikeToArray(c)
    }

    function _arrayLikeToArray(c, m) {
        (m == null || m > c.length) && (m = c.length);
        for (var p = 0, k = new Array(m); p < m; p++) k[p] = c[p];
        return k
    } /*! js-cookie v3.0.5 | MIT */
    function m(s) {
        for (var e = 1; e < arguments.length; e++) {
            var r = arguments[e];
            for (var n in r) s[n] = r[n]
        }
        return s
    }
    var p = {
        read: function(e) {
            return e[0] === '"' && (e = e.slice(1, -1)), e.replace(/(%[\dA-F]{2})+/gi, decodeURIComponent)
        },
        write: function(e) {
            return encodeURIComponent(e).replace(/%(2[346BF]|3[AC-F]|40|5[BDE]|60|7[BCD])/g, decodeURIComponent)
        }
    };

    function k(s, e) {
        function r(t, u, i) {
            if (!(typeof document > "u")) {
                i = m({}, e, i), typeof i.expires == "number" && (i.expires = new Date(Date.now() + i.expires * 864e5)), i.expires && (i.expires = i.expires.toUTCString()), t = encodeURIComponent(t).replace(/%(2[346B]|5E|60|7C)/g, decodeURIComponent).replace(/[()]/g, escape);
                var o = "";
                for (var d in i) i[d] && (o += "; " + d, i[d] !== !0 && (o += "=" + i[d].split(";")[0]));
                return document.cookie = t + "=" + s.write(u, t) + o
            }
        }

        function n(t) {
            if (!(typeof document > "u" || arguments.length && !t)) {
                for (var u = document.cookie ? document.cookie.split("; ") : [], i = {}, o = 0; o < u.length; o++) {
                    var d = u[o].split("="),
                        y = d.slice(1).join("=");
                    try {
                        var h = decodeURIComponent(d[0]);
                        if (i[h] = s.read(y, h), t === h) break
                    } catch {}
                }
                return t ? i[t] : i
            }
        }
        return Object.create({
            set: r,
            get: n,
            remove: function(u, i) {
                r(u, "", m({}, i, {
                    expires: -1
                }))
            },
            withAttributes: function(u) {
                return k(this.converter, m({}, this.attributes, u))
            },
            withConverter: function(u) {
                return k(m({}, this.converter, u), this.attributes)
            }
        }, {
            attributes: {
                value: Object.freeze(e)
            },
            converter: {
                value: Object.freeze(s)
            }
        })
    }
    var C = k(p, {
            path: "/"
        }),
        P, R = new Uint8Array(16);

    function U() {
        if (!P && (P = typeof crypto < "u" && crypto.getRandomValues && crypto.getRandomValues.bind(crypto), !P)) throw new Error("crypto.getRandomValues() not supported. See https://github.com/uuidjs/uuid#getrandomvalues-not-supported");
        return P(R)
    }
    for (var S = [], x = 0; x < 256; ++x) S.push((x + 256).toString(16).slice(1));

    function K(s) {
        var e = arguments.length > 1 && arguments[1] !== void 0 ? arguments[1] : 0;
        return (S[s[e + 0]] + S[s[e + 1]] + S[s[e + 2]] + S[s[e + 3]] + "-" + S[s[e + 4]] + S[s[e + 5]] + "-" + S[s[e + 6]] + S[s[e + 7]] + "-" + S[s[e + 8]] + S[s[e + 9]] + "-" + S[s[e + 10]] + S[s[e + 11]] + S[s[e + 12]] + S[s[e + 13]] + S[s[e + 14]] + S[s[e + 15]]).toLowerCase()
    }
    var D = typeof crypto < "u" && crypto.randomUUID && crypto.randomUUID.bind(crypto),
        Q = {
            randomUUID: D
        };

    function Y(s, e, r) {
        if (Q.randomUUID && !e && !s) return Q.randomUUID();
        s = s || {};
        var n = s.random || (s.rng || U)();
        if (n[6] = n[6] & 15 | 64, n[8] = n[8] & 63 | 128, e) {
            r = r || 0;
            for (var t = 0; t < 16; ++t) e[r + t] = n[t];
            return e
        }
        return K(n)
    }
    var $ = function(e) {
            var r = new Date(new Date().getTime() + e * 60 * 1e3);
            return r
        },
        ee = "https://et.landingi.com",
        J = function() {
            var e = window,
                r = e.conversion,
                n = r != null && r.hash ? "thankyou" : "main";
            return n
        };

    function te(s) {
        var e = {},
            r = new URLSearchParams(new URL(s).search);
        return r.forEach(function(n, t) {
            var u = ["utm_campaign", "utm_term", "utm_content", "utm_medium", "utm_source"];
            if (u.includes(t)) {
                var i = t;
                e[i] = n
            }
        }), Object.keys(e).length === 0 ? null : e
    }
    var W = function(e) {
            var r = te(e);
            return r
        },
        ie = function() {
            var e = C.get("_ga");
            if (!e) return null;
            var r = e.split("."),
                n = "".concat(r[2], ".").concat(r[3]);
            return n.length > 50 ? n.substring(0, 50) : n
        },
        re = "error_form",
        pe = "start_filling_form",
        ue = "visit",
        he = "view_lightbox",
        oe = "click_accordion",
        z = "cannot_find_lightbox",
        X = "cookie_value",
        ce = "thankyou",
        v = "main",
        a = 255,
        l = function(e) {
            if (!e) return "";
            for (var r = e.substring(0, a).trim(), n = r.split(" "), t = n.length - 1, u = n.reduce(function(A, w) {
                    return A + encodeURIComponent(w).length
                }, 0), i = u + t, o; n.length > 0 && i > a;)
                if (o = n.pop(), o) {
                    var d = encodeURIComponent(o).length;
                    i--, i -= d
                }
            var y = "";
            if (i < a && o)
                for (var h = a - i, E = _toConsumableArray(o); h > 0 && E.length > 0;) {
                    var T = E.shift();
                    if (T) {
                        var O = encodeURIComponent(T).length;
                        O <= h && (h -= O, y += T)
                    }
                }
            y.length && n.push(y);
            var L = n.join(" ");
            return L
        },
        f = function() {
            var s = _asyncToGenerator(_regeneratorRuntime().mark(function e(r) {
                var n, t, u, i, o, d, y, h, E, T, O, L, A, w, _;
                return _regeneratorRuntime().wrap(function(B) {
                    for (;;) switch (B.prev = B.next) {
                        case 0:
                            return n = r.type, t = r.element_id, u = r.label, i = r.cookieValue, o = r.data, d = r.page_location, y = o.tid, h = o.luuid, E = o.lhash, T = o.auuid, O = J(), L = window.location.href, A = W(L), w = ie(), _ = function() {
                                var F = _asyncToGenerator(_regeneratorRuntime().mark(function Z() {
                                    var ne, ae, fe, Pe, Ne, be;
                                    return _regeneratorRuntime().wrap(function(G) {
                                        for (;;) switch (G.prev = G.next) {
                                            case 0:
                                                return ne = l(u), ae = _objectSpread(_objectSpread(_objectSpread(_objectSpread(_objectSpread(_objectSpread(_objectSpread(_objectSpread(_objectSpread({
                                                    type: n,
                                                    label: ne
                                                }, t && {
                                                    element_id: t
                                                }), {}, {
                                                    session: i
                                                }, y && {
                                                    tid: y.toString()
                                                }), h && {
                                                    landing_uuid: h
                                                }), E && {
                                                    variant_hash: E
                                                }), T && {
                                                    account_uuid: T
                                                }), O && {
                                                    page_type: O
                                                }), A && _objectSpread({}, A)), w && {
                                                    ga_client_id: w
                                                }), d && {
                                                    page_location: d
                                                }), fe = Object.fromEntries(Object.entries(ae).map(function($e) {
                                                    var Ve = _slicedToArray($e, 2),
                                                        Je = Ve[0],
                                                        We = Ve[1];
                                                    return [Je, String(We)]
                                                })), Pe = new URLSearchParams(fe), Ne = "".concat(ee, "/publish-event?").concat(Pe), G.prev = 5, G.next = 8, fetch(Ne);
                                            case 8:
                                                if (be = G.sent, be.ok) {
                                                    G.next = 11;
                                                    break
                                                }
                                                throw new Error("Request failed with status ".concat(be.status));
                                            case 11:
                                                G.next = 16;
                                                break;
                                            case 13:
                                                G.prev = 13, G.t0 = G.catch(5), console.error(G.t0);
                                            case 16:
                                            case "end":
                                                return G.stop()
                                        }
                                    }, Z, null, [
                                        [5, 13]
                                    ])
                                }));
                                return function() {
                                    return F.apply(this, arguments)
                                }
                            }(), B.next = 9, _();
                        case 9:
                        case "end":
                            return B.stop()
                    }
                }, e)
            }));
            return function(r) {
                return s.apply(this, arguments)
            }
        }(),
        b = function(e, r) {
            var n = ["widget-button", "widget-image", "widget-svgicon"];
            return n.includes(r) && e.classList.contains(r)
        },
        g = function(e, r) {
            var n, t = r.map(function(o) {
                    return "".concat(o)
                }).join(","),
                u = e == null || (n = e.querySelectorAll) === null || n === void 0 ? void 0 : n.call(e, t),
                i = Array.from(u || []).filter(function(o) {
                    return o.tagName === "A"
                });
            return i.length > 0 ? i : b(e, t) ? [e] : []
        },
        I = function(e) {
            var r, n = e,
                t = n == null || (r = n.parentElement) === null || r === void 0 ? void 0 : r.classList;
            return t != null && t.contains("widget-button") ? "click_button" : t != null && t.contains("widget-image") ? "click_image" : t != null && t.contains("widget-svgicon") ? "click_icon" : ""
        },
        N = function(e) {
            var r, n, t = e,
                u = t == null || (r = t.parentElement) === null || r === void 0 ? void 0 : r.innerText,
                i = t == null ? void 0 : t.parentElement,
                o = (n = i.getAttribute("href")) === null || n === void 0 ? void 0 : n.split("://")[1],
                d = i.getAttribute("subtype"),
                y = d === "popup",
                h = d === "anchor",
                E = i == null ? void 0 : i.classList.contains("widget-button");
            if (y && !E) {
                var T, O = (T = i.getAttribute("href")) === null || T === void 0 ? void 0 : T.split("#")[1];
                if (!O) return z;
                var L = document.getElementById(O);
                if (L == null) return z;
                var A = L == null ? void 0 : L.getAttribute("data-lightbox-name");
                return A ? ? z
            }
            if (h) {
                var w = i.getAttribute("href");
                if (E) {
                    var _ = i == null ? void 0 : i.innerText;
                    return "".concat(_)
                }
                return w
            }
            return o !== "lp.landingi.it" && o !== "www.landpagepreview.com" && (u == null ? void 0 : u.length) === 0 ? o : u && u.length > 0 ? u : ""
        },
        V = [];

    function H(s) {
        var e = s.parentElement,
            r = s.data,
            n = s.cookieValue,
            t = s.selectors,
            u = _toConsumableArray(document.querySelectorAll(".widget-image")).filter(function(o) {
                return o.nodeName === "IMG" && o.hasAttribute("data-gallery")
            });
        u.forEach(function(o) {
            var d = o.getAttribute("id");
            d && (V.includes(d) || (V.push(d), o.addEventListener("pointerdown", function(y) {
                var h = y.target,
                    E = "click_image",
                    T = o.getAttribute("data-gallery");
                h != null && h.id && f({
                    type: E,
                    element_id: h.id,
                    label: T || void 0,
                    cookieValue: n,
                    data: r
                })
            })))
        });
        var i = g(e, t);
        i.forEach(function(o) {
            o.addEventListener("pointerdown", function(d) {
                var y, h = d.target,
                    E = I(h),
                    T = N(h);
                h != null && (y = h.parentElement) !== null && y !== void 0 && y.id && f({
                    type: E,
                    element_id: h.parentElement.id,
                    label: T || "",
                    cookieValue: n,
                    data: r
                })
            })
        })
    }
    var j = function(e, r) {
            e.forEach(function(n) {
                var t = document.createElement("input");
                t.type = "hidden", t.name = "_session", t.value = r, n.appendChild(t);
                var u = n.querySelector('.widget-input-button[type="submit"]');
                if (u) {
                    var i = u.innerText,
                        o = document.createElement("input");
                    o.type = "hidden", o.name = "_form_submit_label", o.value = i, n.appendChild(o)
                }
            })
        },
        q = function(e) {
            var r = new URL(e),
                n = r.pathname.split("/")[1];
            return n === "" || n === void 0 ? r.host : n
        },
        we = function(e) {
            var r = e.querySelector('.widget-input-button[type="submit"]');
            if (r) {
                var n = r.innerText;
                return n || r.textContent
            }
        },
        le = function(e, r, n) {
            e.forEach(function(t) {
                var u = /^widget-input-[a-zA-Z]+$/,
                    i = Array.from(t.querySelectorAll("input")).filter(function(A) {
                        var w = A.className.split(" ");
                        return w.some(function(_) {
                            return _.match(u) !== null
                        })
                    }),
                    o = Array.from(t.querySelectorAll("select")).filter(function(A) {
                        var w = A.className.split(" ");
                        return w.some(function(_) {
                            return _.match(u) !== null
                        })
                    }),
                    d = Array.from(t.querySelectorAll("textarea")).filter(function(A) {
                        var w = A.className.split(" ");
                        return w.some(function(_) {
                            return _.match("widget-textarea") !== null
                        })
                    }),
                    y = Array.from(t.querySelectorAll("input")).filter(function(A) {
                        var w = A.className.split(" ");
                        return w.some(function(_) {
                            return _.match("file-input") !== null
                        })
                    }),
                    h = we(t);
                if (!(h !== "" && !h)) {
                    var E = [].concat(_toConsumableArray(i), _toConsumableArray(o), _toConsumableArray(d), _toConsumableArray(y)),
                        T = window.location.href,
                        O = q(T),
                        L = "previousCookieValues-".concat(O);
                    E.forEach(function(A) {
                        A.addEventListener("focus", function() {
                            if (t.id !== null) {
                                var w = t.id,
                                    _ = localStorage.getItem(L),
                                    M = _ !== null ? JSON.parse(_) : {},
                                    B = M[w];
                                n !== B && (f({
                                    type: pe,
                                    element_id: w,
                                    label: h,
                                    cookieValue: n,
                                    data: r
                                }), M[w] = n, localStorage.setItem(L, JSON.stringify(M)))
                            }
                        })
                    })
                }
            })
        },
        Ue = function(e) {
            return e.classList.contains("widget-paypal") ? "click_paypal_button" : e.classList.contains("widget-payu") ? "click_payu_button" : e.classList.contains("widget-stripe") ? "click_stripe_button" : "click_pay_button"
        },
        Se = function(e, r) {
            var n = [].concat(_toConsumableArray(document.querySelectorAll(".widget-paypal")), _toConsumableArray(document.querySelectorAll(".widget-payu")), _toConsumableArray(document.querySelectorAll(".widget-stripe")));
            n.forEach(function(t) {
                t.addEventListener("pointerdown", function(u) {
                    var i = u.target,
                        o = Ue(t),
                        d = t.getAttribute("data-product-name");
                    i != null && i.id && d && f({
                        type: o,
                        element_id: i.id,
                        label: d,
                        cookieValue: e,
                        data: r
                    })
                })
            })
        },
        Be = function(e, r, n) {
            var t = e.getAttribute("data-uid");
            if (t) {
                var u = document.getElementById(t);
                if (u) {
                    var i = u.getAttribute("parentid");
                    if (i) {
                        var o = document.getElementById(i);
                        if (o) {
                            var d = we(o);
                            d !== "" && !d || f({
                                type: re,
                                element_id: i,
                                label: d,
                                cookieValue: n,
                                data: r
                            })
                        }
                    }
                }
            }
        },
        Re = function(e, r, n) {
            if (!(!e || e.getAttribute("data-observed")) && (e.setAttribute("data-observed", "true"), !!r)) {
                e.getAttribute("data-handled") || (e.setAttribute("data-handled", "true"), Be(e, n, r));
                var t = new MutationObserver(function() {
                    e.removeAttribute("data-observed"), t.disconnect()
                });
                e.parentNode && t.observe(e.parentNode, {
                    childList: !0,
                    subtree: !0
                })
            }
        },
        Ee = function(e, r) {
            var n = ".form-error-tooltip",
                t = document.querySelectorAll(n),
                u = {};
            t.forEach(function(i) {
                var o = i.getAttribute("data-uid");
                if (o) {
                    var d = document.getElementById(o);
                    if (d) {
                        var y = d.getAttribute("parentid");
                        y && (u[y] || (Re(i, e, r), u[y] = !0))
                    }
                }
            })
        },
        Ae = function(e) {
            var r = [].concat(_toConsumableArray(document.querySelectorAll(".widget-paypal")), _toConsumableArray(document.querySelectorAll(".widget-payu")), _toConsumableArray(document.querySelectorAll(".widget-stripe")));
            r.forEach(function(n) {
                return n.setAttribute("data-session", e)
            })
        },
        ge = function(e) {
            try {
                return localStorage.getItem(e)
            } catch {
                return null
            }
        },
        ke = function(e, r) {
            try {
                localStorage.setItem(e, r)
            } catch {
                return
            }
        },
        je = function(e) {
            try {
                localStorage.removeItem(e)
            } catch {
                return
            }
        },
        Le = function() {
            var s = _asyncToGenerator(_regeneratorRuntime().mark(function e(r) {
                var n, t, u, i, o, d, y;
                return _regeneratorRuntime().wrap(function(E) {
                    for (;;) switch (E.prev = E.next) {
                        case 0:
                            if (n = r.cookieValue, t = r.data, u = r.url, i = q(u), o = "cookie-value-visit-".concat(i), d = ge(o), y = d !== null ? JSON.parse(d) : {}, n === y) {
                                E.next = 9;
                                break
                            }
                            return E.next = 8, f({
                                type: ue,
                                cookieValue: n,
                                data: t,
                                page_location: u
                            });
                        case 8:
                            ke(o, JSON.stringify(n));
                        case 9:
                        case "end":
                            return E.stop()
                    }
                }, e)
            }));
            return function(r) {
                return s.apply(this, arguments)
            }
        }(),
        De = function(e) {
            var r = e.scroll_depth,
                n = e.cookieValue,
                t = e.data,
                u = t.luuid,
                i = t.lhash,
                o = t.auuid,
                d = J(),
                y = function() {
                    var h = _asyncToGenerator(_regeneratorRuntime().mark(function E() {
                        var T, O, L;
                        return _regeneratorRuntime().wrap(function(w) {
                            for (;;) switch (w.prev = w.next) {
                                case 0:
                                    return T = _objectSpread({
                                        session_id: n,
                                        scroll_depth: r,
                                        landing_uuid: u,
                                        variant_hash: i,
                                        account_uuid: o
                                    }, d && {
                                        page_type: d.toString()
                                    }), O = "".concat(ee, "/scroll?").concat(new URLSearchParams(_objectSpread({}, T))), w.prev = 2, w.next = 5, fetch(O);
                                case 5:
                                    if (L = w.sent, L.ok) {
                                        w.next = 8;
                                        break
                                    }
                                    throw new Error("Request failed with status ".concat(L.status));
                                case 8:
                                    w.next = 13;
                                    break;
                                case 10:
                                    w.prev = 10, w.t0 = w.catch(2), console.error(w.t0);
                                case 13:
                                case "end":
                                    return w.stop()
                            }
                        }, E, null, [
                            [2, 10]
                        ])
                    }));
                    return function() {
                        return h.apply(this, arguments)
                    }
                }();
            y()
        },
        He = function(e, r, n) {
            var t = r === ce ? "-typ" : "";
            localStorage.setItem("".concat(X, "-").concat(e).concat(t), JSON.stringify(n))
        },
        Te = {
            10: "10",
            25: "25",
            50: "50",
            75: "75",
            90: "90",
            99: "100"
        },
        Oe = {},
        Ie = function(e, r) {
            var n = window.location.href,
                t = q(n),
                u = J(),
                i = u === v ? localStorage.getItem("".concat(X, "-").concat(t)) : localStorage.getItem("".concat(X, "-").concat(t, "-typ")),
                o = i !== null ? JSON.parse(i) : {},
                d = function() {
                    var h = document.documentElement.scrollHeight,
                        E = window.innerHeight,
                        T = window.scrollY,
                        O = T + E,
                        L = O / h * 100;
                    if (L >= 10) {
                        var A = 0;
                        Object.keys(Te).map(Number).forEach(function(w) {
                            L >= w && (A = w)
                        }), Oe[A] || (Oe[A] = !0, De({
                            scroll_depth: Te[A],
                            cookieValue: e,
                            data: r
                        }), He(t, u, e))
                    }
                };
            e !== o && (d(), window.addEventListener("scroll", function() {
                d()
            }))
        },
        Ge = function(e) {
            var r = new URL(e);
            return r.protocol.includes("https")
        },
        _e = function(e) {
            var r = e.lightbox,
                n = e.cookieValue,
                t = e.data,
                u = r.getAttribute("id");
            if (u) {
                var i = r.classList.contains("show-lightbox"),
                    o = new MutationObserver(function(d) {
                        d.forEach(function(y) {
                            if (y.type === "attributes" && y.attributeName === "class") {
                                var h = r.classList.contains("show-lightbox");
                                if (h && !i) {
                                    var E = r.getAttribute("data-lightbox-name") || "";
                                    f({
                                        type: he,
                                        element_id: u,
                                        label: E,
                                        cookieValue: n,
                                        data: t
                                    })
                                }
                                i = h
                            }
                        })
                    });
                o.observe(r, {
                    attributes: !0
                })
            }
        },
        se = function(e) {
            var r = function(u) {
                    return u instanceof HTMLAnchorElement
                },
                n = e.filter(r);
            return n
        },
        de = function(e) {
            var r = e.filter(function(n) {
                var t = n.hasAttribute("subtype"),
                    u = n.getAttribute("subtype") === "redirect" || n.getAttribute("subtype") === "landingpage";
                return t && u
            });
            return r
        },
        ve = function(e, r) {
            e.forEach(function(n) {
                var t = n.getAttribute("href");
                if (t) {
                    var u = "".concat(t).concat(t.includes("?") ? "&" : "?", "_session=").concat(r);
                    n.setAttribute("href", u)
                }
            })
        },
        xe = function(e, r) {
            var n = document.querySelectorAll(".widget-accordion");
            n.forEach(function(t) {
                var u = Array.from(t.children);
                u.forEach(function(i) {
                    var o, d = i.querySelector(".accordion-heading-container");
                    if (d) {
                        var y = (o = d.querySelector(".accordion-heading-text")) === null || o === void 0 ? void 0 : o.textContent,
                            h = new MutationObserver(function(T) {
                                T.forEach(function(O) {
                                    if (O.type === "attributes" && O.attributeName === "class") {
                                        var L = O.target;
                                        if (L instanceof HTMLElement) {
                                            var A, w = (A = O.oldValue) === null || A === void 0 ? void 0 : A.includes("open"),
                                                _ = L.classList.contains("open");
                                            w !== _ && f({
                                                type: oe,
                                                element_id: i.id,
                                                label: y || void 0,
                                                cookieValue: e,
                                                data: r
                                            })
                                        }
                                    }
                                })
                            }),
                            E = function() {
                                h.observe(i, {
                                    attributes: !0,
                                    attributeFilter: ["class"],
                                    attributeOldValue: !0
                                })
                            };
                        i.addEventListener("pointerdown", E, {
                            once: !0
                        })
                    }
                })
            })
        },
        me = function(e, r) {
            var n = r.tid,
                t = new FormData;
            n && t.append("tid", n.toString()), fetch(e, {
                method: "POST",
                body: t
            }).then(function(u) {
                if (!u.ok) throw new Error("EventTracker: Request failed with status ".concat(u.status, ". Response message: ").concat(u.statusText, ", response url: ").concat(u.url, ". Url: ").concat(e, ", data: ").concat(JSON.stringify(r)))
            }).catch(function(u) {
                return console.error("EventTracker: ".concat(u))
            })
        },
        ye = function(e, r, n) {
            var t = r.hasAccessToVisitWithoutCookie;
            if (t) {
                var u = J() === "main";
                u && me(n, r);
                return
            }
            var i = C.get(e);
            if (i) return i;
            me(n, r);
            var o = window.location.href,
                d = Ge(o);
            try {
                if (!d) throw new Error("EventTracker: URL is not secure. url: ".concat(o));
                var y = Y();
                C.set(e, y, {
                    expires: $(30),
                    path: window.location.pathname,
                    secure: !0
                });
                var h = C.get(e);
                if (!h) throw new Error("EventTracker: Cookie not found. cookieValue: ".concat(h, ", cookieName: ").concat(e));
                return h
            } catch (E) {
                throw new Error("EventTracker: Error posting cookie: ".concat(E, ", data: ").concat(JSON.stringify(r), ", name: ").concat(e, ", url: ").concat(n))
            }
        },
        qe = function() {
            for (var e = new Date().getTime(), r = 30 * 60 * 1e3, n = 0; n < localStorage.length; n++) {
                var t = localStorage.key(n);
                if (t && t.startsWith("ls_sid_")) {
                    var u = ge(t);
                    if (u) {
                        var i = JSON.parse(u),
                            o = i.timestamp;
                        e - o >= r && je(t)
                    }
                }
            }
        },
        Ce = function(e, r, n) {
            qe();
            var t = ge(e);
            if (t) {
                var u = JSON.parse(t),
                    i = u.value;
                return i
            }
            me(n, r);
            try {
                var o = Y(),
                    d = {
                        value: o,
                        timestamp: new Date().getTime()
                    };
                return ke(e, JSON.stringify(d)), d.value
            } catch (y) {
                throw new Error("EventTracker: Error setting local storage value: ".concat(y, ", data: ").concat(JSON.stringify(r), ", name: ").concat(e, ", url: ").concat(n))
            }
        },
        Me = function() {
            var s = _asyncToGenerator(_regeneratorRuntime().mark(function e(r, n, t) {
                var u, i, o, d, y, h, E, T;
                return _regeneratorRuntime().wrap(function(L) {
                    for (;;) switch (L.prev = L.next) {
                        case 0:
                            if (u = t.hasAccessToEventTracker, i = t.hasAccessToEventTrackerData, o = ye(r, t, n), o) {
                                L.next = 4;
                                break
                            }
                            return L.abrupt("return");
                        case 4:
                            if (!(u || i)) {
                                L.next = 20;
                                break
                            }
                            return L.next = 7, Le({
                                cookieValue: o,
                                data: t,
                                url: window.location.href
                            });
                        case 7:
                            H({
                                parentElement: document.body,
                                data: t,
                                cookieValue: o,
                                selectors: [".widget-button", ".widget-image", ".widget-svgicon"]
                            }), d = _toConsumableArray(document.getElementsByClassName("widget-form")), j(d, o), Ae(o), le(d, t, o), Se(o, t), Ie(o, t), y = _toConsumableArray(document.getElementsByClassName("widget-button")), h = se(y), E = de(h), ve(E, o), T = new MutationObserver(function(A) {
                                A.forEach(function(w) {
                                    var _;
                                    (_ = w.addedNodes) === null || _ === void 0 || _.forEach(function(M) {
                                        if (M instanceof HTMLElement) {
                                            var B = M;
                                            H({
                                                parentElement: B,
                                                data: t,
                                                cookieValue: o,
                                                selectors: [".widget-button", ".widget-icon", ".widget-svgicon"]
                                            }), Ee(o, t);
                                            var F = _toConsumableArray(B.getElementsByClassName("widget-form"));
                                            j(F, o), le(F, t, o);
                                            var Z = _toConsumableArray(B.getElementsByClassName("widget-button")),
                                                ne = se(Z),
                                                ae = de(ne);
                                            ve(ae, o), B.hasAttribute("data-lightbox-name") && _e({
                                                lightbox: B,
                                                cookieValue: o,
                                                data: t
                                            })
                                        }
                                    })
                                })
                            }), T.observe(document.body, {
                                childList: !0,
                                subtree: !0
                            });
                        case 20:
                        case "end":
                            return L.stop()
                    }
                }, e)
            }));
            return function(r, n, t) {
                return s.apply(this, arguments)
            }
        }(),
        Fe = function() {
            var s = _asyncToGenerator(_regeneratorRuntime().mark(function e(r, n, t) {
                var u, i, o, d, y, h, E, T, O;
                return _regeneratorRuntime().wrap(function(A) {
                    for (;;) switch (A.prev = A.next) {
                        case 0:
                            if (u = t.hasAccessToEventTracker, i = t.hasAccessToEventTrackerData, o = t.hasAccessToVisitWithLocalStorage, d = o ? Ce(r, t, n) : ye(r, t, n), d) {
                                A.next = 4;
                                break
                            }
                            return A.abrupt("return");
                        case 4:
                            if (!(u || i)) {
                                A.next = 21;
                                break
                            }
                            return A.next = 7, Le({
                                cookieValue: d,
                                data: t,
                                url: window.location.href
                            });
                        case 7:
                            H({
                                parentElement: document.body,
                                data: t,
                                cookieValue: d,
                                selectors: [".widget-button", ".widget-image", ".widget-svgicon"]
                            }), y = _toConsumableArray(document.getElementsByClassName("widget-form")), j(y, d), Ae(d), le(y, t, d), Se(d, t), xe(d, t), Ie(d, t), h = _toConsumableArray(document.getElementsByClassName("widget-button")), E = se(h), T = de(E), ve(T, d), O = new MutationObserver(function(w) {
                                w.forEach(function(_) {
                                    var M;
                                    (M = _.addedNodes) === null || M === void 0 || M.forEach(function(B) {
                                        if (B instanceof HTMLElement) {
                                            var F = B;
                                            H({
                                                parentElement: F,
                                                data: t,
                                                cookieValue: d,
                                                selectors: [".widget-button", ".widget-icon", ".widget-svgicon"]
                                            }), Ee(d, t);
                                            var Z = _toConsumableArray(F.getElementsByClassName("widget-form"));
                                            j(Z, d), le(Z, t, d);
                                            var ne = _toConsumableArray(F.getElementsByClassName("widget-button")),
                                                ae = se(ne),
                                                fe = de(ae);
                                            ve(fe, d), F.hasAttribute("data-lightbox-name") && _e({
                                                lightbox: F,
                                                cookieValue: d,
                                                data: t
                                            })
                                        }
                                    })
                                })
                            }), O.observe(document.body, {
                                childList: !0,
                                subtree: !0
                            });
                        case 21:
                        case "end":
                            return A.stop()
                    }
                }, e)
            }));
            return function(r, n, t) {
                return s.apply(this, arguments)
            }
        }();
    return c.postCookieAndGetValue = ye, c.postLocalStorageAndGetValue = Ce, c.runScript = Me, c.runScriptDev = Fe, Object.defineProperty(c, Symbol.toStringTag, {
        value: "Module"
    }), c
}({});