$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })

$('#exampleModalCenter').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget) // Button that triggered the modal
var recipient = button.data('whatever') // Extract info from data-* attributes
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)
modal.find('#display-image').attr('src',recipient)
})

var countDownDate = new Date("Jun 23, 2020 16:10:00").getTime();
var x = setInterval(function() {
  var now = new Date().getTime();
  var distance = countDownDate - now;
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  document.getElementById("countdown").innerHTML = hours + ":"
  + minutes + ":" + seconds + " left";
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("countdown").innerHTML = "EXPIRED";
  }
}, 1000);


$(function () {
$('#myTab li:last-child a').tab('show')
})

$('#myTab a').on('click', function (e) {
    e.preventDefault()
    $(this).tab('show')
  })

$('#myTab a[href="#profile"]').tab('show') // Select tab by name
$('#myTab li:first-child a').tab('show') // Select first tab
$('#myTab li:last-child a').tab('show') // Select last tab
$('#myTab li:nth-child(3) a').tab('show') // Select third tab
$('#someTab').tab('show')

$(".circle").click(function(){
    let q = $(this).parent();
    let a = q.next();
    let active = $(".circle").parent(".faq-active");
    let vertical = $(this).children(".vertical");
    if(a.is(":hidden")){
      $(this).removeClass("click-ani");
      active.css({"background-position":"initial"});
      active.next().css({"background-position":"initial"});
      active.next().slideToggle();
      active.children(".circle").children(".vertical").css({"transform":"rotate(90deg)"});
      active.removeClass("faq-active");
      q.addClass("faq-active");
      q.css({"background-position":"0 100%"});
      vertical.css({"transform":"rotate(-0deg)"});
      a.slideToggle();
      a.css({"background-position":"0 -100%"});
      $(this).addClass("click-ani");
    }else{
      $(this).removeClass("click-ani");
      q.css({"background-position":"initial"});
      a.css({"background-position":"initial"});
      vertical.css({"transform":"rotate(90deg)"});
      q.removeClass("faq-active");
      a.slideToggle();
      $(this).addClass("click-ani");
    }
})

{
  const colors = ['#3498DB', '#E74C3C', '#463991'];
  const bubbles = 30;

  function explode(x, y){
    let particles = [];
    let ratio = window.devicePixelRatio;
    let c = document.createElement('canvas');
    let ctx = c.getContext('2d');

    c.style.position = 'absolute';
    c.style.left = x - 100 + 'px';
    c.style.top = y - 100 + 'px';
    c.style.pointerEvents = 'none';
    c.style.width = 200 + 'px';
    c.style.height = 200 + 'px';
    c.style.zIndex = 100;
    c.width = 500 * ratio;
    c.height = 500 * ratio;
    document.body.appendChild(c);

    for (var i = 0; i < bubbles; i++) {
      particles.push({
        x: c.width / 2,
        y: c.height / 2,
        radius: r(20, 30),
        color: colors[Math.floor(Math.random() * colors.length)],
        rotation: r(0, 360, true),
        speed: r(0, 15),
        friction: 1,
        opacity: r(0.5, 1, true),
        yVel: 0,
        gravity: 0 });
    }

    render(particles, ctx, c.width, c.height);
    setTimeout(() => document.body.removeChild(c), 1000);
  };

  function render(particles, ctx, width, height){
    requestAnimationFrame(() => render(particles, ctx, width, height));
    ctx.clearRect(0, 0, width, height);

    particles.forEach((p, i) => {
      p.x += p.speed * Math.cos(p.rotation * Math.PI / 180);
      p.y += p.speed * Math.sin(p.rotation * Math.PI / 180);

      p.opacity -= 0.01;
      p.speed *= p.friction;
      p.radius *= p.friction;
      p.yVel += p.gravity;
      p.y += p.yVel;

      if (p.opacity < 0 || p.radius < 0) return;

      ctx.beginPath();
      ctx.globalAlpha = p.opacity;
      ctx.fillStyle = p.color;
      ctx.arc(p.x, p.y, p.radius, 0, 2 * Math.PI, false);
      ctx.fill();
    });

    return ctx;
  };

  const r = (a, b, c) => parseFloat((Math.random() * ((a ? a : 1) - (b ? b : 0)) + (b ? b : 0)).toFixed(c ? c : 0));
}

let dot = $('#timeline-dot-active');
dot.click(e => explode(e.pageX, e.pageY));

$("#navbar-c").mouseenter(function(){
    $(".navbar-caption").css({
      "visibility":"visible",
      "overflow":"visible",
      "width":"55%",
      "margin":"0px 20px"
    });
    $(".navbar-caption-special").css({
      "visibility":"visible",
      "overflow":"visible",
      "width":"55%"
    });    
    $(".navbar-caption-2").css({
      "visibility":"visible",
      "overflow":"visible",
      "width":"55%",
      "margin-left":"40px"
    });
    $(".navbar-footer").css({
      "visibility":"visible",
      "width":"100%",
    });     
})
$("#navbar-c").mouseleave(function(){
    $(".navbar-caption").css({
      "visibility":"hidden",
      "overflow":"hidden",
      "width":"0",
      "margin":"0"
    });
    $(".navbar-caption-special").css({
      "visibility":"hidden",
      "overflow":"hidden",
      "width":"0",
      "margin":"0"
    });    
    $(".navbar-caption-2").css({
      "visibility":"hidden",
      "overflow":"hidden",
      "width":"0",
      "margin":"0"
    });   
    $(".navbar-footer").css({
      "visibility":"hidden",
      "width":"0%",
    });     
})

$(".payment-cross").click(function(){
  // getElementsByClassName("payment-cross").setAttribute("aria-expanded","false");
  let vertical = $(this).children(".vertical");
  if($(this).hasClass('expand')){
    $(this).removeClass("click-ani");
    vertical.css({"transform":"rotate(90deg)"});
    $(this).addClass("click-ani");
    $(this).removeClass("expand");
    $(this).removeAttr("id");
  }else{
    let a=$("#pay-expand").parent().next();
    $("#pay-expand").children('.vertical').css({"transform":"rotate(90deg)"});
    a.removeClass("show");
    $("#pay-expand").attr("aria-expanded","false");
    $("#pay-expand").removeClass("expand");
    $("#pay-expand").addClass("collapsed");
    $("#pay-expand").removeAttr("id");
    $(this).removeClass("click-ani");


    vertical.css({"transform":"rotate(-0deg)"});
    $(this).addClass("click-ani");
    $(this).addClass("expand");
    $(this).attr("id","pay-expand");
  }
})