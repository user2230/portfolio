import React, { useEffect, useRef, useState } from 'https://esm.sh/react@18.3.1';
import { createRoot } from 'https://esm.sh/react-dom@18.3.1/client';
import { motion } from 'https://esm.sh/motion@12.23.12/react?deps=react@18.3.1,react-dom@18.3.1';

const StaggeredText = ({
  text = 'Software Developer i.o.',
  delay = 80,
  duration = 0.6,
  direction = 'top',
  blur = true,
  threshold = 0.1,
  className = ''
}) => {
  const ref = useRef(null);
  const [inView, setInView] = useState(false);
  const segments = text.split(' ');
  const offset = direction === 'bottom' ? 24 : -24;

  useEffect(() => {
    const element = ref.current;
    if (!element) return undefined;

    const observer = new IntersectionObserver(
      ([entry]) => {
        if (entry.isIntersecting) {
          setInView(true);
          observer.unobserve(element);
        }
      },
      { threshold }
    );

    observer.observe(element);
    return () => observer.disconnect();
  }, [threshold]);

  return React.createElement(
    'span',
    { ref, className, 'aria-label': text },
    segments.map((segment, index) => React.createElement(
      motion.span,
      {
        key: `${segment}-${index}`,
        'aria-hidden': true,
        initial: {
          opacity: 0,
          y: offset,
          filter: blur ? 'blur(8px)' : 'blur(0px)'
        },
        animate: inView ? {
          opacity: 1,
          y: 0,
          filter: 'blur(0px)'
        } : undefined,
        transition: {
          delay: (index * delay) / 1000,
          duration,
          ease: 'easeOut'
        },
        style: { display: 'inline-block' }
      },
      segment,
      index < segments.length - 1 ? '\u00A0' : null
    ))
  );
};

export default StaggeredText;

const mountStaggeredText = (selector, text) => {
  const element = document.querySelector(selector);

  if (element) {
    createRoot(element).render(
      React.createElement(StaggeredText, text ? { text } : null)
    );
  }
};

mountStaggeredText('#role-text');
mountStaggeredText('#name-text', 'Furkan Ceylan');