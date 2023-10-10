var tl = gsap.timeline()

tl.from(".nav-logo img,.nav-items ul li,.Header_btn ul li",{
  y: -100,
  duration: 1,
  delay: 0.5,
  opacity: 0,
  stagger: 0.2,
})

gsap.from(".banner-text-01 img,.banner-text-01 h3,.banner-text-01 p,.banner-text-01 .banner-btn",{
  x: -200,
  duration: 1,
  delay: 0.5,
  opacity: 0,
  stagger: 0.3,
})


tl.from(".services_head h5",{
  x: -200,
  duration: 0.5,
  delay: 0.5,
  opacity: 0,
  stagger: 0.2,
  scrollTrigger:{
    trigger:".services_head h5",
    scroller: "body",
    scrub: 1,
  }
})

tl.from(".services_head h1",{
  x: 200,
  duration: 0.5,
  delay: 0.5,
  opacity: 0,
  stagger: 0.2,
  scrollTrigger:{
    trigger:".services_head h1",
    scroller: "body",
    scrub: 1,
  }
})