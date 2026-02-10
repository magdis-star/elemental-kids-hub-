'use client';

import { useState, useEffect } from 'react';
import Image from 'next/image';

export default function LoadingScreen() {
  const [isLoading, setIsLoading] = useState(true);

  useEffect(() => {
    // Hide loading screen after animation completes
    const timer = setTimeout(() => {
      setIsLoading(false);
    }, 2500); // 2.5 seconds for the animation

    return () => clearTimeout(timer);
  }, []);

  if (!isLoading) return null;

  return (
    <div className="fixed inset-0 z-50 bg-white flex items-center justify-center">
      {/* Rocket Animation */}
      <div className="rocket-container">
        <div className="rocket">
          <Image
            src="/logo.png"
            alt="Loading..."
            width={200}
            height={100}
            className="rocket-image"
          />
        </div>
      </div>

      <style jsx>{`
        .rocket-container {
          position: relative;
          width: 100vw;
          height: 100vh;
          overflow: hidden;
        }

        .rocket {
          position: absolute;
          bottom: -100px;
          left: -200px;
          animation: fly 2s ease-in-out forwards;
          transform-origin: center;
        }

        .rocket-image {
          transform: rotate(45deg);
          filter: drop-shadow(0 0 20px rgba(91, 192, 235, 0.5));
        }

        @keyframes fly {
          0% {
            bottom: -100px;
            left: -200px;
            opacity: 1;
          }
          50% {
            opacity: 1;
          }
          100% {
            bottom: 110vh;
            left: 110vw;
            opacity: 0;
          }
        }
      `}</style>
    </div>
  );
}
