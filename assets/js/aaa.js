Nx = (function () {
   function t(e) {
      p()(this, t),
         this._bind(),
         (this.el = e),
         (this.bounds = {
            width: _.windowWidth,
            height: _.windowHeight,
            mouseX: 0,
            headerHeight: _.isGreaterThan767 ? 100 : 80,
         }),
         (this.domEmojis = Array.prototype.slice.call(
            document.querySelectorAll(".nav-emoji")
         )),
         (this.domEmojiTriggers = Array.prototype.slice.call(
            document.querySelectorAll(".mode-triggers .trigger")
         )),
         (this.domLogo = document.querySelector(".logo")),
         (this.emojiDrawerOpen = !1),
         (this.tieDie = document.querySelector(".third-media")),
         (this.emojis = {}),
         (this.emojiList = []),
         (this.mode = 0),
         (this.pointerEventEls = _.isGreaterThan767
            ? M.header.querySelectorAll(".logo, .nav-emoji")
            : M.header.querySelectorAll(".logo, .nav-emoji:not(.contact)")),
         (this.darkMode = !1),
         (this.emojiGutter = _.isMobile ? 40 : 50),
         (this.mobileOffset = _.isMobile ? 15 : 0),
         (this.gltfLoader = new kx()),
         (this.backdropZindex = 1),
         (this.modelsLoaded = 0),
         (this.headerIn = !1),
         (this.dom = {
            email: document.querySelector(".domgl-email"),
            lollipop: document.querySelector(".domgl-lollipop"),
            heart: document.querySelector(".domgl-heart"),
         }),
         this.init(),
         this._addEvents(),
         this.run();
   }
   return (
      m()(t, [
         {
            key: "_bind",
            value: function () {
               var t = this;
               ["run", "onResize", "hideShowLogo"].forEach(function (e) {
                  return (t[e] = t[e].bind(t));
               });
            },
         },
         {
            key: "_addEvents",
            value: function () {
               var t = this;
               this.domEmojiTriggers.forEach(function (e, n) {
                  e.addEventListener("click", function () {
                     var e;
                     if (
                        (er.to(t.emojiList[n].scene.rotation, 0.5, {
                           y: 6,
                           ease: "sine.inOut",
                           onUpdate: function () {
                              S.renderer.render(S.scene, S.camera);
                           },
                           onComplete: function () {
                              er.set(t.emojiList[n].scene.rotation, { y: 0 }),
                                 S.renderer.render(S.scene, S.camera);
                           },
                        }),
                        er.set(t.hitboxBounds[n], { lerpedEase: 0.03 }),
                        er.delayedCall(0.52, function () {
                           er.to(t.hitboxBounds[n], 0.5, {
                              lerpedEase: 0.1,
                              ease: "sine.inOut",
                           });
                        }),
                        0 === n)
                     )
                        er.to(t.emojiList[n].scene.rotation, 0.5, {
                           x: 0,
                           ease: "sine.inOut",
                        }),
                           (e = _.tripMode ? (t.darkMode ? 0 : 2) : 1),
                           t.setMode(e);
                     else if (t.mode !== n) {
                        var i;
                        (i = _.tripMode ? 1 : t.darkMode ? 0 : 2), t.setMode(i);
                     }
                  });
               }),
                  this.domLogo.addEventListener("click", function () {
                     "home" === _.namespace &&
                        er.to(document.documentElement, {
                           scrollTop: 0,
                           duration: 0.8,
                           ease: "expo.inOut",
                        });
                  }),
                  _.isMobile ||
                     (this.domEmojis[1].addEventListener(
                        "mouseenter",
                        function () {
                           t.revealOtherEmojis();
                        }
                     ),
                     this.domEmojis[1].addEventListener(
                        "mouseleave",
                        function () {
                           t.hideOtherEmojis();
                        }
                     )),
                  _.isMobile ||
                     (this.domLogo.addEventListener("mousedown", function () {
                        er.to(t.sphere.position, {
                           z: -120,
                           duration: 0.5,
                           ease: "expo.out",
                           onUpdate: function () {
                              S.renderer.render(S.scene, S.camera);
                           },
                        });
                     }),
                     this.domLogo.addEventListener("mouseup", function () {
                        er.to(t.sphere.position, {
                           z: -100,
                           duration: 1,
                           ease: "expo.out",
                           onUpdate: function () {
                              S.renderer.render(S.scene, S.camera);
                           },
                        });
                     }),
                     this.hitboxBounds.forEach(function (e, n) {
                        var i;
                        e.el.addEventListener("mouseenter", function () {
                           (i = 0 === n ? t.emojis.email : t.emojiList[n - 1]),
                              (e.prevX = i.scene.rotation.x),
                              (e.prevY = i.scene.rotation.y),
                              er.to(e, 0.5, {
                                 lerpedEase: 0.1,
                                 ease: "sine.inOut",
                              });
                        }),
                           e.el.addEventListener("mouseleave", function () {
                              er.set(e, { lerpedEase: 0.03 });
                           }),
                           e.el.addEventListener(
                              "mousemove",
                              function (r) {
                                 i = 0 === n ? t.emojis.email : t.emojiList[n - 1];
                                 var o = t.getValues(r, e, n);
                                 (e.prevX = y(e.prevX, o.tiltX, e.lerpedEase)),
                                    (e.prevY = y(e.prevY, o.tiltY, e.lerpedEase)),
                                    er.set(i.scene.rotation, {
                                       x: e.prevX,
                                       y: e.prevY,
                                    }),
                                    S.renderer.render(S.scene, S.camera);
                              },
                              { passive: !0 }
                           ),
                           e.el.addEventListener("mouseleave", function () {
                              (i = 0 === n ? t.emojis.email : t.emojiList[n - 1]),
                                 er.to(i.scene.rotation, 0.5, {
                                    y: 0,
                                    x: 0,
                                    ease: "sine.inOut",
                                    onUpdate: function () {
                                       S.renderer.render(S.scene, S.camera);
                                    },
                                 });
                           });
                     }));
            },
         },
         {
            key: "onResize",
            value: function () {
               this.getBounds(),
                  (S.camera.left = -_.windowWidth / 2),
                  (S.camera.right = _.windowWidth / 2),
                  (S.camera.top = _.windowHeight / 2),
                  (S.camera.bottom = -_.windowHeight / 2),
                  S.camera.updateProjectionMatrix(),
                  S.renderer.setSize(this.bounds.width, this.bounds.height),
                  (this.emojis.lollipop.origY = this.coords[0].y),
                  (this.emojis.lollipop.hiddenY =
                     this.coords[2].y + this.bounds.headerHeight),
                  (this.emojis.heart.origY = this.coords[0].y),
                  (this.emojis.heart.hiddenY =
                     this.coords[2].y + this.bounds.headerHeight),
                  (this.emojis.email.origY = this.coords[0].y),
                  (this.emojis.email.hiddenY =
                     this.coords[2].y + this.bounds.headerHeight),
                  this.sphere.position.set(0, this.coords[0].y, -100),
                  this.emojis.email.scene.position.set(
                     this.coords[2].x,
                     this.coords[2].y,
                     -100
                  ),
                  this.emojis.heart.scene.position.set(
                     this.coords[1].x,
                     this.coords[1].y,
                     -100
                  ),
                  this.emojis.lollipop.scene.position.set(
                     this.coords[0].x,
                     this.coords[0].y,
                     -100
                  ),
                  S.renderer.render(S.scene, S.camera),
                  this.hideOtherEmojis();
            },
         },
         {
            key: "getBounds",
            value: function () {
               (this.bounds.width = _.windowWidth),
                  (this.bounds.height = _.windowHeight);
               var t = this.dom.email.getBoundingClientRect(),
                  e = this.dom.lollipop.getBoundingClientRect(),
                  n = this.dom.heart.getBoundingClientRect();
               this.coords = [
                  {
                     type: "lollipop",
                     x: e.left + e.width / 2 - _.windowWidth / 2,
                     y: _.windowHeight / 2 - (e.top + e.height / 2),
                  },
                  {
                     type: "heart",
                     x: n.left + n.width / 2 - _.windowWidth / 2,
                     y: _.windowHeight / 2 - (n.top + n.height / 2),
                  },
                  {
                     type: "email",
                     x: t.left + t.width / 2 - _.windowWidth / 2,
                     y: _.windowHeight / 2 - (t.top + t.height / 2),
                  },
               ];
            },
         },
         {
            key: "loadModels",
            value: function () {
               var t = this;
               _.isGreaterThan767 &&
                  this.gltfLoader.load(
                     `${domain_url}assets/emoji/envelope.glb`,
                     function (e) {
                        e.scene.scale.set(0.09, 0.09, 0.09),
                           e.scene.position.set(
                              t.coords[2].x,
                              t.coords[2].y,
                              -100
                           );
                        var n = e.scene.children[0].children[0].material;
                        n.color.setHex(16737126),
                           (n.roughness = 0.45),
                           (n.metalness = 0.12),
                           (n.emissiveIntensity = 1),
                           (n.needsUpdate = !0),
                           console.log(n),
                           t.domEmojis[0].addEventListener("click", function () {
                              er.to(e.scene.rotation, {
                                 y: 6,
                                 duration: 0.5,
                                 ease: "sine.inOut",
                                 onUpdate: function () {
                                    S.renderer.render(S.scene, S.camera);
                                 },
                                 onComplete: function () {
                                    er.set(e.scene.rotation, { y: 0 }),
                                       S.renderer.render(S.scene, S.camera);
                                 },
                              }),
                                 er.set(t.hitboxBounds[0], { lerpedEase: 0.03 });
                           }),
                           (t.emojis.email = {
                              origY: e.scene.position.y,
                              hiddenY: t.coords[2].y + t.bounds.headerHeight,
                              scene: e.scene,
                           }),
                           S.scene.add(e.scene),
                           er.set(t.emojis.email.scene.position, {
                              y: t.emojis.email.hiddenY,
                           }),
                           er.set(t.emojis.email.scene.rotation, { y: 6 }),
                           t.modelsLoaded++;
                     }
                  );
               var e = new zg();
               (this.whiteHeartTexture = !1), (this.heartMaterial = !1);
               e.load(
                  `${domain_url}/assets/emoji/heart-test.glb`,
                  function (e) {
                     (e.flipY = !1),
                        t.heartMaterial
                           ? (t.heartMaterial.emissiveMap = t.whiteHeartTexture)
                           : (t.whiteHeartTexture = e);
                  }
               ),
                  this.gltfLoader.load(
                     `${domain_url}/assets/emoji/heart-test.glb`,
                     function (e) {
                        e.scene.scale.set(0.08, 0.08, 0.08),
                           e.scene.position.set(
                              t.coords[1].x,
                              t.coords[1].y,
                              -100
                           ),
                           e.scene.traverse(function (e) {
                              e instanceof xu &&
                                 ((e.userData.emissiveMap = e.material.emissiveMap),
                                 t.whiteHeartTexture
                                    ? (e.material.emissiveMap = t.whiteHeartTexture)
                                    : (t.heartMaterial = e.material),
                                 (e.material.emissive = new Eh(14277081)),
                                 e.material.color.setHex(15921906),
                                 (e.material.roughness = 0.45),
                                 (e.material.metalness = 0.12),
                                 (e.material.emissiveIntensity = 0.85),
                                 (e.receiveShadow = !1),
                                 (e.castShadow = !1),
                                 (e.material.needsUpdate = !0));
                           }),
                           (e.scene.children[0].material.depthWrite = !0),
                           (t.emojis.heart = {
                              origY: e.scene.position.y,
                              hiddenY: t.coords[2].y + t.bounds.headerHeight,
                              scene: e.scene,
                           }),
                           t.modelsLoaded++,
                           (t.emojiList[1] = t.emojis.heart),
                           S.scene.add(e.scene),
                           er.set(t.emojis.heart.scene.rotation, { y: 6 }),
                           er.set(t.emojis.heart.scene.position, {
                              y: t.emojis.heart.hiddenY,
                           });
                     }
                  ),
                  this.gltfLoader.load(
                     `${domain_url}assets/emoji/lollipop.glb`,
                     function (e) {
                        e.scene.scale.set(0.085, 0.085, 0.085),
                           e.scene.position.set(
                              t.coords[0].x,
                              t.coords[0].y,
                              -100
                           ),
                           (t.emojis.lollipop = {
                              origY: e.scene.position.y,
                              hiddenY: t.coords[2].y + t.bounds.headerHeight,
                              scene: e.scene,
                           }),
                           (t.emojiList[0] = t.emojis.lollipop),
                           S.scene.add(e.scene),
                           er.set(t.emojis.lollipop.scene.rotation, { y: -6 }),
                           er.set(t.emojis.lollipop.scene.position, {
                              y: t.emojis.lollipop.hiddenY,
                           }),
                           t.modelsLoaded++;
                     }
                  );
               var n = new zm(20, 20, 20),
                  i = new og({
                     color: new Eh(16777215),
                     emissive: new Eh(7829367),
                     roughness: 0,
                     metalness: 0,
                  });
               (this.sphere = new xu(n, i)),
                  this.sphere.position.set(0, this.coords[0].y, -100),
                  S.scene.add(this.sphere),
                  (this.sphere.receiveShadow = !1),
                  (this.sphere.castShadow = !0);
               var r = new Xu(_.isMobile ? 60 : 100, 100),
                  o = new ng();
               (o.opacity = 0.7),
                  (this.plane = new xu(r, o)),
                  this.plane.position.set(0, this.coords[0].y, -120),
                  (this.plane.castShadow = !1),
                  (this.plane.receiveShadow = !0),
                  S.scene.add(this.plane),
                  (this.dummy = this.sphere.clone()),
                  this.dummy.position.set(0, this.coords[0].y, -100),
                  (this.dummy.visible = !1),
                  S.scene.add(this.dummy),
                  (this.directionalLight.target = this.dummy),
                  er.set(
                     [
                        this.sphere.position,
                        this.plane.position,
                        this.dummy.position,
                     ],
                     { y: this.coords[2].y + this.bounds.headerHeight }
                  ),
                  this.modelsLoaded++;
            },
         },
         {
            key: "init",
            value: function () {
               var t = this;
               this.getBounds(), this.getHitboxPositions();
               var e = new yv(16777215, 0.5);
               S.scene.add(e),
                  e.position.set(40, 0.5 * this.bounds.height, 50),
                  (e.castShadow = !0),
                  (e.shadow.mapSize.width = 4096),
                  (e.shadow.mapSize.height = 4096),
                  (e.shadow.camera.near = 1),
                  (e.shadow.camera.far = 400),
                  (e.shadow.camera.left = -_.windowWidth / 2),
                  (e.shadow.camera.right = _.windowWidth / 2),
                  (e.shadow.camera.top = _.windowHeight / 2),
                  (e.shadow.camera.bottom = -_.windowHeight / 2),
                  (this.directionalLight = e),
                  this.loadModels();
               var n = document.querySelector(".logo-hitbox"),
                  i = n.getBoundingClientRect(),
                  r = {
                     el: n,
                     top: i.top,
                     left: i.left,
                     width: i.width,
                     height: i.height,
                     prevShiftX: 40,
                     prevShiftY: 0.5 * this.bounds.height,
                     lerpedEase: 0.03,
                  };
               n.addEventListener("mouseenter", function (t) {
                  er.fromTo(
                     r,
                     0.5,
                     { lerpedEase: 0.03 },
                     { lerpedEase: 0.12, ease: "sine.inOut" }
                  );
               }),
                  n.addEventListener(
                     "mousemove",
                     function (n) {
                        var i = t.get2DValues(n, r);
                        (r.prevShiftX = y(r.prevShiftX, i.shiftX, r.lerpedEase)),
                           (r.prevShiftY = y(
                              r.prevShiftY,
                              i.shiftY,
                              r.lerpedEase
                           )),
                           er.set(e.position, {
                              x: r.prevShiftX,
                              y: r.prevShiftY,
                           }),
                           S.renderer.render(S.scene, S.camera);
                     },
                     { passive: !0 }
                  ),
                  n.addEventListener("mouseleave", function () {
                     (r.prevShiftX = 40),
                        (r.prevShiftY = 0.5 * t.bounds.height),
                        er.set(r, { lerpedEase: 0.03 }),
                        er.to(e.position, 0.45, {
                           x: 40,
                           y: 0.5 * t.bounds.height,
                           ease: "sine.inOut",
                           onUpdate: function () {
                              S.renderer.render(S.scene, S.camera);
                           },
                        });
                  });
            },
         },
         {
            key: "showHeader",
            value: function () {
               er.set(this.pointerEventEls, { pointerEvents: "all" }),
                  _.isGreaterThan767
                     ? this.showEmail(!1)
                     : er.fromTo(
                           M.hammy,
                           0.7,
                           { autoAlpha: 0, y: -Cx.bounds.headerHeight },
                           { autoAlpha: 1, y: 0, ease: "sine.inOut", force3D: !0 }
                       ),
                  _.tripMode ? this.showLollipop(!1) : this.showHeart(!1),
                  this.showLogo(!1),
                  this.renderCycle(0.8);
            },
         },
         {
            key: "hideHeader",
            value: function () {
               er.set(this.pointerEventEls, { pointerEvents: "none" }),
                  _.isGreaterThan767
                     ? this.hideEmail(!1)
                     : er.to(M.hammy, 0.7, {
                           y: -Cx.bounds.headerHeight,
                           ease: "sine.inOut",
                       }),
                  _.tripMode ? this.hideLollipop(!1) : this.hideHeart(!1),
                  this.hideLogo(!1),
                  this.renderCycle(0.8);
            },
         },
         {
            key: "hideEmail",
            value: function () {
               var t =
                  !(arguments.length > 0 && void 0 !== arguments[0]) ||
                  arguments[0];
               er.to(this.emojis.email.scene.position, 0.7, {
                  y: this.emojis.email.hiddenY,
                  ease: "sine.inOut",
               }),
                  er.to(this.emojis.email.scene.rotation, 0.8, {
                     y: 6,
                     ease: "sine.inOut",
                  }),
                  t && this.renderCycle(0.8);
            },
         },
         {
            key: "hideLollipop",
            value: function () {
               var t =
                  !(arguments.length > 0 && void 0 !== arguments[0]) ||
                  arguments[0];
               er.to(this.emojis.lollipop.scene.rotation, 0.8, {
                  y: 6,
                  ease: "sine.inOut",
               }),
                  er.to(this.emojis.lollipop.scene.position, 0.7, {
                     y: this.emojis.lollipop.hiddenY,
                     ease: "sine.inOut",
                  }),
                  t && this.renderCycle(0.8);
            },
         },
         {
            key: "hideHeart",
            value: function () {
               var t =
                  !(arguments.length > 0 && void 0 !== arguments[0]) ||
                  arguments[0];
               er.to(this.emojis.heart.scene.rotation, 0.8, {
                  y: 6,
                  ease: "sine.inOut",
               }),
                  er.to(this.emojis.heart.scene.position, 0.7, {
                     y: this.emojis.heart.hiddenY,
                     ease: "sine.inOut",
                  }),
                  t && this.renderCycle(0.8);
            },
         },
         {
            key: "hideLogo",
            value: function () {
               var t =
                  !(arguments.length > 0 && void 0 !== arguments[0]) ||
                  arguments[0];
               er.to(
                  [
                     this.sphere.position,
                     this.plane.position,
                     this.dummy.position,
                  ],
                  0.7,
                  { y: this.emojis.lollipop.hiddenY, ease: "sine.inOut" }
               ),
                  t && this.renderCycle(0.8);
            },
         },
         {
            key: "showEmail",
            value: function () {
               var t =
                  !(arguments.length > 0 && void 0 !== arguments[0]) ||
                  arguments[0];
               er.to(this.emojis.email.scene.position, 0.7, {
                  y: this.emojis.email.origY,
                  ease: "sine.inOut",
               }),
                  er.to(this.emojis.email.scene.rotation, 0.8, {
                     y: 0,
                     ease: "sine.inOut",
                  }),
                  t && this.renderCycle(0.8);
            },
         },
         {
            key: "showLollipop",
            value: function () {
               var t =
                  !(arguments.length > 0 && void 0 !== arguments[0]) ||
                  arguments[0];
               er.to(this.emojis.lollipop.scene.rotation, 0.8, {
                  y: 0,
                  ease: "sine.inOut",
               }),
                  er.to(this.emojis.lollipop.scene.position, 0.7, {
                     y: this.emojis.lollipop.origY,
                     ease: "sine.inOut",
                  }),
                  t && this.renderCycle(0.8);
            },
         },
         {
            key: "showHeart",
            value: function () {
               var t =
                  !(arguments.length > 0 && void 0 !== arguments[0]) ||
                  arguments[0];
               er.to(this.emojis.heart.scene.rotation, 0.8, {
                  y: 0,
                  ease: "sine.inOut",
               }),
                  er.to(this.emojis.heart.scene.position, 0.7, {
                     y: this.emojis.heart.origY,
                     ease: "sine.inOut",
                  }),
                  t && this.renderCycle(0.8);
            },
         },
         {
            key: "showLogo",
            value: function () {
               var t =
                  !(arguments.length > 0 && void 0 !== arguments[0]) ||
                  arguments[0];
               er.to(
                  [
                     this.sphere.position,
                     this.plane.position,
                     this.dummy.position,
                  ],
                  0.7,
                  { y: this.coords[0].y, ease: "sine.inOut" }
               ),
                  t && this.renderCycle(0.7);
            },
         },
         {
            key: "renderCycle",
            value: function (t) {
               er.to({ x: 0 }, t, {
                  x: 100,
                  ease: "none",
                  onUpdate: function () {
                     S.renderer.render(S.scene, S.camera);
                  },
               });
            },
         },
         {
            key: "getValues",
            value: function (t, e, n) {
               var i, r;
               return (
                  (i = (t.clientX - e.left) / e.width),
                  (r = (t.clientY - e.top) / e.height),
                  (i = Math.min(Math.max(i, 0), 1)),
                  (r = Math.min(Math.max(r, 0), 1)),
                  {
                     tiltY: (-1 * (1.3 - 1.3 * i * 2)).toFixed(2),
                     tiltX: (1.3 * r * 2 - 1.3).toFixed(2),
                  }
               );
            },
         },
         {
            key: "get2DValues",
            value: function (t, e) {
               var n, i;
               (n = (t.clientX - e.left) / e.width),
                  (i = (t.clientY - e.top) / e.height),
                  (n = Math.min(Math.max(n, 0), 1)),
                  (i = Math.min(Math.max(i, 0), 1));
               var r = v(n, 0, 1, -150, 150);
               return {
                  shiftY: v(
                     i,
                     0,
                     1,
                     0.5 * this.bounds.height + 60,
                     0.5 * this.bounds.height - 200
                  ),
                  shiftX: r,
               };
            },
         },
         {
            key: "getHitboxPositions",
            value: function () {
               (this.emojiHitboxes =
                  document.querySelectorAll("#header .hitbox")),
                  (this.hitboxBounds = []);
               for (var t = 0; t < this.emojiHitboxes.length; t++) {
                  var e = this.emojiHitboxes[t],
                     n = e.getBoundingClientRect();
                  this.hitboxBounds.push({
                     el: e,
                     top: n.top,
                     left: n.left,
                     width: n.width,
                     height: n.height,
                     prevX: 0,
                     prevY: 0,
                     lerpedEase: 0.03,
                  });
               }
            },
         },
         {
            key: "revealOtherEmojis",
            value: function () {
               this.emojiDrawerOpen ||
                  ((this.emojiDrawerOpen = !0),
                  _.tripMode ? this.showHeart() : this.showLollipop());
            },
         },
         {
            key: "hideOtherEmojis",
            value: function () {
               console.log("hiding other emojis"),
                  this.emojiDrawerOpen &&
                     ((this.emojiDrawerOpen = !1),
                     _.tripMode ? this.hideHeart() : this.hideLollipop());
            },
         },
         {
            key: "setMode",
            value: function (t) {
               var e = this;
               (this.mode = t), this.backdropZindex++;
               var n = document.querySelectorAll(".custom-font");
               switch (this.mode) {
                  case 0:
                     M.tieDieMedia.paused || M.tieDieMedia.pause(),
                        er.to("html", 0.5, {
                           "--primary": "#FFFFFF",
                           ease: "sine.out",
                        }),
                        er.set("html", { "--secondary": "#000000" }),
                        er.set(M.drawers, {
                           "--primary": "#000000",
                           "--secondary": "#FFFFFF",
                        }),
                        "work" === _.namespace &&
                           M.workMobileFilterEl &&
                           er.set(M.workMobileFilterEl, {
                              clearProps: "--primary, --secondary",
                           }),
                        er.set(M.blackBackdrop, { zIndex: this.backdropZindex }),
                        er.to(M.blackBackdrop, 0.5, {
                           opacity: 1,
                           onComplete: function () {
                              er.set(M.whiteBackdrop, { opacity: 0 });
                           },
                        }),
                        er.to(n, 0.25, {
                           opacity: 0,
                           ease: "sine.out",
                           onComplete: function () {
                              er.set(document.body, {
                                 "--font": "white-theme-font",
                                 "--font2": "black-theme-font",
                                 "--font3": "third-theme-font",
                              }),
                                 er.to(n, 0.25, { opacity: 1, ease: "sine.out" });
                           },
                        }),
                        (_.tripMode = !1),
                        (this.darkMode = !1),
                        this.emojis.heart.scene.traverse(function (t) {
                           t instanceof xu &&
                              ((t.material.emissiveMap = e.whiteHeartTexture),
                              (t.material.emissive = new Eh(14277081)),
                              t.material.color.setHex(15921906),
                              (t.material.needsUpdate = !0));
                        }),
                        er.to(this.tieDie, {
                           autoAlpha: 0,
                           duration: 0.5,
                           ease: "sine.inOut",
                           force3D: !0,
                        }),
                        er.to(this.emojis.heart.scene.position, {
                           x: this.coords[1].x,
                           duration: 0.5,
                           ease: "sine.inOut",
                           onUpdate: function () {
                              S.renderer.render(S.scene, S.camera);
                           },
                        }),
                        er.to(this.emojis.lollipop.scene.position, {
                           x: this.coords[0].x,
                           duration: 0.5,
                           ease: "sine.inOut",
                           onUpdate: function () {
                              S.renderer.render(S.scene, S.camera);
                           },
                        }),
                        (this.emojiList = [
                           this.emojis.lollipop,
                           this.emojis.heart,
                        ]);
                     break;
                  case 1:
                     M.tieDieMedia.paused && M.tieDieMedia.play(),
                        er.to("html", 0.5, {
                           "--primary": "#ffffff",
                           ease: "sine.out",
                        }),
                        er.set("html", { "--secondary": "#000000" }),
                        er.set(M.drawers, {
                           "--primary": "#000000",
                           "--secondary": "#ffffff",
                        }),
                        "work" === _.namespace &&
                           M.workMobileFilterEl &&
                           er.set(M.workMobileFilterEl, {
                              "--primary": "#000000",
                              "--secondary": "#ffffff",
                           }),
                        er.to(n, 0.25, {
                           opacity: 0,
                           ease: "sine.out",
                           onComplete: function () {
                              er.set(document.body, {
                                 "--font": "third-theme-font",
                                 "--font2": "white-theme-font",
                                 "--font3": "black-theme-font",
                              }),
                                 er.to(n, 0.25, { opacity: 1, ease: "sine.out" });
                           },
                        }),
                        er.set(M.whiteBackdrop, { zIndex: this.backdropZindex }),
                        er.to(M.whiteBackdrop, 0.5, {
                           opacity: 1,
                           onComplete: function () {
                              er.set(M.blackBackdrop, { opacity: 0 });
                           },
                        }),
                        (_.tripMode = !0),
                        er.to(this.tieDie, {
                           autoAlpha: 1,
                           duration: 0.5,
                           ease: "sine.inOut",
                           force3D: !0,
                           onComplete: function () {},
                        }),
                        er.to(this.emojis.heart.scene.position, {
                           x: this.coords[0].x,
                           duration: 0.5,
                           ease: "sine.inOut",
                           onUpdate: function () {
                              S.renderer.render(S.scene, S.camera);
                           },
                        }),
                        er.to(this.emojis.lollipop.scene.position, {
                           x: this.coords[1].x,
                           duration: 0.5,
                           ease: "sine.inOut",
                           onUpdate: function () {
                              S.renderer.render(S.scene, S.camera);
                           },
                        }),
                        (this.emojiList = [
                           this.emojis.heart,
                           this.emojis.lollipop,
                        ]);
                     break;
                  case 2:
                     M.tieDieMedia.paused || M.tieDieMedia.pause(),
                        er.to("html", 0.5, {
                           "--primary": "#000000",
                           ease: "sine.out",
                        }),
                        er.set("html", { "--secondary": "#ffffff" }),
                        er.set(M.drawers, {
                           "--primary": "#ffffff",
                           "--secondary": "#000000",
                        }),
                        "work" === _.namespace &&
                           M.workMobileFilterEl &&
                           er.set(M.workMobileFilterEl, {
                              clearProps: "--primary, --secondary",
                           }),
                        er.to(n, 0.25, {
                           opacity: 0,
                           ease: "sine.out",
                           onComplete: function () {
                              er.set(document.body, {
                                 "--font": "black-theme-font",
                                 "--font2": "white-theme-font",
                                 "--font3": "third-theme-font",
                              }),
                                 er.to(n, 0.25, { opacity: 1, ease: "sine.out" });
                           },
                        }),
                        er.set(M.whiteBackdrop, { zIndex: this.backdropZindex }),
                        er.to(M.whiteBackdrop, 0.5, {
                           opacity: 1,
                           onComplete: function () {
                              er.set(M.blackBackdrop, { opacity: 0 });
                           },
                        }),
                        (_.tripMode = !1),
                        (this.darkMode = !0),
                        this.emojis.heart.scene.traverse(function (t) {
                           t instanceof xu &&
                              ((t.material.emissiveMap = t.userData.emissiveMap),
                              t.material.color.setHex(3355443),
                              (t.material.needsUpdate = !0));
                        }),
                        er.to(this.tieDie, {
                           autoAlpha: 0,
                           duration: 0.5,
                           ease: "sine.inOut",
                           force3D: !0,
                        }),
                        er.to(this.emojis.heart.scene.position, {
                           x: this.coords[1].x,
                           duration: 0.5,
                           ease: "sine.inOut",
                           onUpdate: function () {
                              S.renderer.render(S.scene, S.camera);
                           },
                        }),
                        er.to(this.emojis.lollipop.scene.position, {
                           x: this.coords[0].x,
                           duration: 0.5,
                           ease: "sine.inOut",
                           onUpdate: function () {
                              S.renderer.render(S.scene, S.camera);
                           },
                        }),
                        (this.emojiList = [
                           this.emojis.lollipop,
                           this.emojis.heart,
                        ]);
               }
            },
         },
         {
            key: "run",
            value: function (t) {
               (this.raf = requestAnimationFrame(this.run)),
                  (this.counter += 0.01);
            },
         },
         {
            key: "hideShowLogo",
            value: function () {
               document.body.scrollTop > 10 && this.logoShowing
                  ? (this.logoShowing = !1)
                  : document.body.scrollTop < 10 &&
                    !this.logoShowing &&
                    (this.logoShowing = !0);
            },
         },
         {
            key: "kill",
            value: function () {
               cancelAnimationFrame(this.raf);
            },
         },
      ]),
      t
   );
})(),