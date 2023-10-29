gsap.registerPlugin(ScrollTrigger);

gsap
  .timeline()
  .from(".drawanim", { x:"400%" },1)
  .from(".h2_page_draw", { x:"400%" })
  .from(".info_draw", { x:"400%"} )
  .from(".use_loupe_draw", { x:"400%"} )
  .from(".signaler_draw", { x:"400%"} )
  .from(".search_draw", { x:"400%"} );