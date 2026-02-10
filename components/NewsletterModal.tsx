'use client';

import { useState } from 'react';

interface NewsletterModalProps {
  isOpen: boolean;
  onClose: () => void;
  bookTitle: string;
}

export default function NewsletterModal({ isOpen, onClose, bookTitle }: NewsletterModalProps) {
  const [email, setEmail] = useState('');
  const [name, setName] = useState('');
  const [submitted, setSubmitted] = useState(false);
  const [loading, setLoading] = useState(false);

  if (!isOpen) return null;

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault();
    setLoading(true);

    // Simulate API call - replace with actual newsletter service
    await new Promise(resolve => setTimeout(resolve, 1000));

    setSubmitted(true);
    setLoading(false);

    // Reset after 3 seconds
    setTimeout(() => {
      setSubmitted(false);
      setEmail('');
      setName('');
      onClose();
    }, 3000);
  };

  return (
    <div className="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
      <div className="bg-white rounded-3xl max-w-md w-full p-8 relative">
        <button
          onClick={onClose}
          className="absolute top-4 right-4 text-gray-400 hover:text-gray-600 text-3xl leading-none"
          aria-label="Cerrar"
        >
          ×
        </button>

        {!submitted ? (
          <>
            <h2 className="text-3xl font-bold text-slate-800 mb-3">
              ¡No te lo pierdas!
            </h2>
            <p className="text-slate-600 mb-6">
              Sé el primero en saber cuándo lanzamos <strong>{bookTitle}</strong>. Te enviaremos un email en cuanto esté disponible.
            </p>

            <form onSubmit={handleSubmit} className="space-y-4">
              <div>
                <label htmlFor="name" className="block text-sm font-medium text-slate-700 mb-1">
                  Tu nombre
                </label>
                <input
                  type="text"
                  id="name"
                  value={name}
                  onChange={(e) => setName(e.target.value)}
                  required
                  className="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#2EC4B6] focus:border-transparent outline-none"
                  placeholder="María García"
                />
              </div>

              <div>
                <label htmlFor="email" className="block text-sm font-medium text-slate-700 mb-1">
                  Tu email
                </label>
                <input
                  type="email"
                  id="email"
                  value={email}
                  onChange={(e) => setEmail(e.target.value)}
                  required
                  className="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#2EC4B6] focus:border-transparent outline-none"
                  placeholder="maria@ejemplo.com"
                />
              </div>

              <button
                type="submit"
                disabled={loading}
                className="w-full bg-[#2EC4B6] hover:bg-[#28B0A3] text-white py-3 px-6 rounded-full font-bold transition-all hover:scale-105 disabled:opacity-50 disabled:cursor-not-allowed"
              >
                {loading ? 'Enviando...' : 'Notificarme'}
              </button>

              <p className="text-xs text-gray-500 text-center">
                No spam, solo noticias sobre nuevos libros. Puedes darte de baja cuando quieras.
              </p>
            </form>
          </>
        ) : (
          <div className="text-center py-8">
            <div className="text-6xl mb-4">✓</div>
            <h3 className="text-2xl font-bold text-slate-800 mb-2">
              ¡Listo!
            </h3>
            <p className="text-slate-600">
              Te avisaremos cuando {bookTitle} esté disponible.
            </p>
          </div>
        )}
      </div>
    </div>
  );
}
