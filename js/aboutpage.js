// Fixes the text content on the right until page scrolls to bottom

//   var $header,
//     compactHeader,
//     compactTrigger,
//     e,
//     isMobile,
//     isMobileAndLandscape,
//     throttle,
//     trackEvent,
//     updateHeader;
// isMobile = window.matchMedia("only screen and (max-width: 768px)").matches;
// isMobileAndLandscape = window.matchMedia("only screen and (max-width: 768px) and (orientation: landscape)").matches;
// $(document).ready(function() {
//         $(window).on("throttledscroll", updateHeader);
//         return $(window).trigger("throttledscroll")
// });
// compactHeader = false;
// compactTrigger = 40;
// $header = $("header");
//
// window.requestAnimFrame = function() {
//     return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || function(callback) {
//             window.setTimeout(callback, 1e3 / 60)
//         }
// }();
// throttle = function(type, name, obj) {
//     var func,
//         running;
//     running = false;
//     obj = obj || window;
//     func = function() {
//         if (running) {
//             return
//         }
//         running = true;
//         window.requestAnimFrame(function() {
//             obj.dispatchEvent(new CustomEvent(name));
//             running = false
//         })
//     };
//     obj.addEventListener(type, func)
// };
// throttle("scroll", "throttledscroll");
//   $(window).on("load", function() {
//       if (!isMobile || isMobile && isMobileAndLandscape) {
//           return function() {
//               var $right,
//                   fixUnfixLeft,
//                   fixed,
//                   height,
//                   updateHeight;
//               fixed = true;
//               height = $("section.team-the-team").outerHeight() - $(window).height();
//               $right = $("section.team-the-team div.right");
//               if (height <= 0) {
//                   $right.removeClass("fixed");
//                   return
//               }
//               updateHeight = function() {
//                   console.log('updating height');
//                   return height = $("section.team-the-team").outerHeight() - $(window).height()
//               };
//               updateScrolltop = function() {
//                   console.log('updating scrolltop');
//                   return scrolltop = $(window).scrollTop();
//               };
//               fixUnfixLeft = function() {
//                   updateHeight();
//                   updateScrolltop();
//                   console.log(height);
//                   // var scrolltop;
//                   // scrolltop = $(window).scrollTop();
//                   console.log(scrolltop);
//                   if (fixed && scrolltop > height) {
//                       $right.removeClass("fixed").css("transform", "translate3d(0, calc(" + height + "px - 50%), 0)");
//                       return fixed = false
//                   }
//                   else if (!fixed && scrolltop <= height) {
//                       if  (!fixed && scrolltop <= height) {
//                         $right.addClass("fixed").css("transform", "translate3d(0, -50%, 0)");
//                         console.log('fixunfix height');
//                         console.log(height)
//                         console.log('fixing');
//                         return fixed = true
//                       }
//                   }
//               };
//               // $(window).on("throttledscroll", fixUnfixLeft);
//               // $(window).on("resize", updateHeight);
//               // $(window).on("filterSelection", updateHeight);
//               return $(window).trigger("throttledscroll")
//           }()
//       }
//   });
// End of code that fixes the text content on the right until page scrolls to bottom


// Add colored bars by role
var leadership = document.getElementsByClassName('leadership');

for (var i = 0; i < leadership.length; i++) {
  var para = document.createElement("div");
  para.setAttribute('class', 'square');
  para.setAttribute('class', 'lead');
  var imagediv = leadership[i].firstChild.nextSibling.nextSibling;
  leadership[i].insertBefore(para,imagediv);
}


var founding = document.getElementsByClassName('founding');

for (var i = 0; i < founding.length; i++) {
  var para = document.createElement("div");
  para.setAttribute('class', 'square');
  para.setAttribute('class', 'found');
  var imagediv = founding[i].firstChild.nextSibling.nextSibling;
  founding[i].insertBefore(para,imagediv);
}

var algorithms = document.getElementsByClassName('algorithms');

for (var i = 0; i < algorithms.length; i++) {
  var para = document.createElement("div");
  para.setAttribute('class', 'square');
  para.setAttribute('class', 'algo');
  var imagediv = algorithms[i].firstChild.nextSibling.nextSibling;
  algorithms[i].insertBefore(para,imagediv);
}

var commercial = document.getElementsByClassName('commercial');

  for (var i = 0; i < commercial.length; i++) {
    var para = document.createElement("div");
    para.setAttribute('class', 'square');
    para.setAttribute('class', 'com');
    var imagediv = commercial[i].firstChild.nextSibling.nextSibling;
    commercial[i].insertBefore(para,imagediv);
  }


  var clinical = document.getElementsByClassName('clinical');

  for (var i = 0; i < clinical.length; i++) {
    var para = document.createElement("div");
    para.setAttribute('class', 'square');
    para.setAttribute('class', 'clin');
    var imagediv = clinical[i].firstChild.nextSibling.nextSibling;
    clinical[i].insertBefore(para,imagediv);
  }

  var corporate = document.getElementsByClassName('corporate');

  for (var i = 0; i < corporate.length; i++) {
    var para = document.createElement("div");
    para.setAttribute('class', 'square');
    para.setAttribute('class', 'pub');
    var imagediv = corporate[i].firstChild.nextSibling.nextSibling;
    corporate[i].insertBefore(para,imagediv);
  }

  var advisor = document.getElementsByClassName('advisor');

  for (var i = 0; i < advisor.length; i++) {
    var para = document.createElement("div");
    para.setAttribute('class', 'square');
    para.setAttribute('class', 'adv');
    var imagediv = advisor[i].firstChild.nextSibling.nextSibling;
    advisor[i].insertBefore(para,imagediv);
  }

  var operations = document.getElementsByClassName('operations');

  for (var i = 0; i < operations.length; i++) {
    var para = document.createElement("div");
    para.setAttribute('class', 'square');
    para.setAttribute('class', 'ops');
    var imagediv = operations[i].firstChild.nextSibling.nextSibling;
    operations[i].insertBefore(para,imagediv);
  }

  var engineering = document.getElementsByClassName('engineering');

    for (var i = 0; i < engineering.length; i++) {
      var para = document.createElement("div");
      para.setAttribute('class', 'square');
      para.setAttribute('class', 'eng');
      var imagediv = engineering[i].firstChild.nextSibling.nextSibling;
      engineering[i].insertBefore(para,imagediv);
    }


  var regulatory = document.getElementsByClassName('regulatory');

    for (var i = 0; i < regulatory.length; i++) {
      var para = document.createElement("div");
      para.setAttribute('class', 'square');
      para.setAttribute('class', 'reg');
      var imagediv = regulatory[i].firstChild.nextSibling.nextSibling;
      regulatory[i].insertBefore(para,imagediv);
    }

    var products = document.getElementsByClassName('products');

    for (var i = 0; i < products.length; i++) {
      var para = document.createElement("div");
      para.setAttribute('class', 'square');
      para.setAttribute('class', 'prod');
      var imagediv = products[i].firstChild.nextSibling.nextSibling;
      products[i].insertBefore(para,imagediv);
    }
// End of code that adds colored bars by role

// Filter team images by role
filterSelection("all")
function filterSelection(c) {
  var x, i, height, fixed, $right, updateHeight, fixUnfixLeft, scrolltop;
  scrolltop = $(window).scrollTop();
  updateHeight = function() {
      console.log('updating height filter');
      return height = $("section.team-the-team").outerHeight() - $(window).height()
  };
  x = document.getElementsByClassName("member");
  if (c == "all") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
  // height = $("section.team-the-team").outerHeight() - $(window).height();
  // $right = $("section.team-the-team div.right");
  // if (height <= 0) {
  //     $right.removeClass("fixed");
  //     // updateHeight;
  //     console.log('filter height');
  //     console.log(height);
  //     console.log(scrolltop);
  //     console.log('unfixing with filter');
  //     return
  // }
  // else if (!fixed){
  //     $right.addClass("fixed");
  //     return
  // }

  // $(window).on("throttledscroll", fixUnfixLeft);
  // $(window).on("resize", updateHeight);
  // return $(window).trigger("throttledscroll")
}

// Show filtered elements
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current control button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
