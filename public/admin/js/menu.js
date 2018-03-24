// dropdown1 menu1
var dropdown1 = document.querySelectorAll('.dropdown1');
var dropdown1Array = Array.prototype.slice.call(dropdown1, 0);
dropdown1Array.forEach(function(el) {
  var button = el.querySelector('a[data-toggle="dropdown1"]'),
    menu1 = el.querySelector('.dropdown1-menu1'),
    arrow = button.querySelector('i.icon-arrow');

  button.onclick = function(event) {
    if (!menu1.hasClass('show')) {
      menu1.classList.add('show');
      menu1.classList.remove('hide');
      arrow.classList.add('open');
      arrow.classList.remove('close');
      event.preventDefault();
    } else {
      menu1.classList.remove('show');
      menu1.classList.add('hide');
      arrow.classList.remove('open');
      arrow.classList.add('close');
      event.preventDefault();
    }
  };
})

Element.prototype.hasClass = function(className) {
  return this.className && new RegExp("(^|\\s)" + className + "(\\s|$)").test(this.className);
};