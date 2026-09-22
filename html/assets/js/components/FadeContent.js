import React, { useEffect, useRef } from 'https://esm.sh/react@18.3.1';
import { createRoot } from 'https://esm.sh/react-dom@18.3.1/client';
import { gsap } from 'https://esm.sh/gsap@3.12.5';
import { ScrollTrigger } from 'https://esm.sh/gsap@3.12.5/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

const FadeContent = ({
  children,
  container,
  blur = false,
  duration = 1000,
  ease = 'power2.out',
  delay = 0,
  threshold = 0.1,
  initialOpacity = 0,
  disappearAfter = 0,
  disappearDuration = 0.5,
  disappearEase = 'power2.in',
  onComplete,
  onDisappearanceComplete,
  className = '',
  style,
  ...props
}) => {
  const ref = useRef(null);

  useEffect(() => {
    const element = ref.current;
    if (!element) return undefined;

    let scrollerTarget = container || document.getElementById('snap-main-container') || null;
    if (typeof scrollerTarget === 'string') {
      scrollerTarget = document.querySelector(scrollerTarget);
    }

    const getSeconds = value => (typeof value === 'number' && value > 10 ? value / 1000 : value);
    const startPercent = (1 - threshold) * 100;

    gsap.set(element, {
      autoAlpha: initialOpacity,
      filter: blur ? 'blur(10px)' : 'blur(0px)',
      willChange: 'opacity, filter, transform'
    });

    const timeline = gsap.timeline({
      paused: true,
      delay: getSeconds(delay),
      onComplete: () => {
        onComplete?.();

        if (disappearAfter > 0) {
          gsap.to(element, {
            autoAlpha: initialOpacity,
            filter: blur ? 'blur(10px)' : 'blur(0px)',
            delay: getSeconds(disappearAfter),
            duration: getSeconds(disappearDuration),
            ease: disappearEase,
            onComplete: () => onDisappearanceComplete?.()
          });
        }
      }
    });

    timeline.to(element, {
      autoAlpha: 1,
      filter: 'blur(0px)',
      duration: getSeconds(duration),
      ease
    });

    const scrollTrigger = ScrollTrigger.create({
      trigger: element,
      scroller: scrollerTarget || window,
      start: `top ${startPercent}%`,
      once: true,
      onEnter: () => timeline.play()
    });

    return () => {
      scrollTrigger.kill();
      timeline.kill();
      gsap.killTweensOf(element);
    };
  }, []);

  return React.createElement(
    'div',
    { ref, className, style, ...props },
    children
  );
};

export default FadeContent;

document.querySelectorAll('[data-fade-content]').forEach(section => {
  const originalContent = section.innerHTML;

  createRoot(section).render(
    React.createElement(
      FadeContent,
      {
        blur: true,
        duration: 900,
        ease: 'power2.out',
        initialOpacity: 0
      },
      React.createElement('div', {
        dangerouslySetInnerHTML: { __html: originalContent }
      })
    )
  );
});