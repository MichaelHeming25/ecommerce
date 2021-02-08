// $( document ).ready(function() {
!(function () {
  var a = AniJS.getHelper();
  a.scrollReveal = function (a, c, d) {
    var e = 0.07;
    (animationContextBehaviorTargetList = c.behaviorTargetList),
      d.length < 2 &&
        "repeat" !== d[0] &&
        c.after.length < 1 &&
        (c.after = [AniJS.getHelper().fireOnce]),
      isNaN(parseFloat(d[0])) || (e = d[0]);
    for (var f = 0; f < animationContextBehaviorTargetList.length; f++)
      (element = animationContextBehaviorTargetList[f]),
        b.isElementInViewport(element, e)
          ? element.isRevealed || ((element.isRevealed = 1), c.run())
          : (element.isRevealed = 0);
  };
  var b = {
    viewportFactor: 1,
    docElem: window.document.documentElement,
    isElementInViewport: function (a, b) {
      var c = window.pageYOffset,
        d = c + this._getViewportH(),
        e = a.offsetHeight,
        f = this._getOffset(a).top,
        g = f + e,
        b = b || 0;
      return (
        (d >= f + e * b && g >= c) ||
        "fixed" ==
          (a.currentStyle ? a.currentStyle : window.getComputedStyle(a, null))
            .position
      );
    },
    _getViewportH: function () {
      var a = this.docElem.clientHeight,
        b = window.innerHeight;
      return b > a ? b : a;
    },
    _getOffset: function (a) {
      var b = 0,
        c = 0;
      do
        isNaN(a.offsetTop) || (b += a.offsetTop),
          isNaN(a.offsetLeft) || (c += a.offsetLeft);
      while ((a = a.offsetParent));
      return { top: b, left: c };
    },
  };
  window.scroll(window.scrollX, window.scrollY + 1);
})(window);
// });
