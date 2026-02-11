export const siteConfig = {
  name: 'Elemental Kids Club',
  description: 'Libros de actividades educativas para niños de 5 a 12 años. Aprendizaje sin pantallas con más de 100 actividades por libro: sudokus, laberintos, sopas de letras y mucho más.',
  url: 'https://elementalkidsclub.com', // Update with actual domain
  ogImage: '/logo.png',
  keywords: [
    'libros actividades niños',
    'cuadernos educativos infantiles',
    'aprendizaje sin pantallas',
    'actividades niños 5-12 años',
    'sudokus para niños',
    'laberintos infantiles',
    'sopas de letras niños',
    'libros educativos España',
    'retos lógica niños',
    'cuadernos viaje niños'
  ],
  authors: [
    {
      name: 'Ediciones Elemental Kids Club',
      url: 'https://elementalkidsclub.com'
    }
  ],
  creator: 'Ediciones Elemental Kids Club',
  publisher: 'Ediciones Elemental Kids Club',
  locale: 'es_ES',
  type: 'website'
};

export const organizationSchema = {
  '@context': 'https://schema.org',
  '@type': 'Organization',
  name: 'Elemental Kids Club',
  url: siteConfig.url,
  logo: `${siteConfig.url}/logo.png`,
  description: siteConfig.description,
  founder: {
    '@type': 'Person',
    name: 'Ediciones Elemental Kids Club',
    description: 'Ingeniera apasionada por la educación'
  },
  sameAs: [
    'https://www.amazon.es/stores/Ediciones-Elemental-Kids-Club/author/B0G24P67WS'
  ],
  contactPoint: {
    '@type': 'ContactPoint',
    email: 'info@elementalkids.com',
    contactType: 'customer service',
    availableLanguage: ['Spanish']
  }
};

export function generateProductSchema(book: {
  id: number;
  title: string;
  description: string;
  coverImage: string;
  price?: string;
  rating?: number;
}) {
  return {
    '@context': 'https://schema.org',
    '@type': 'Product',
    name: book.title,
    description: book.description,
    image: `${siteConfig.url}${book.coverImage}`,
    brand: {
      '@type': 'Brand',
      name: 'Elemental Kids Club'
    },
    offers: {
      '@type': 'Offer',
      availability: 'https://schema.org/InStock',
      price: book.price || '12.99',
      priceCurrency: 'EUR',
      url: 'https://www.amazon.es/stores/Ediciones-Elemental-Kids-Club/author/B0G24P67WS',
      seller: {
        '@type': 'Organization',
        name: 'Amazon España'
      }
    },
    aggregateRating: book.rating ? {
      '@type': 'AggregateRating',
      ratingValue: book.rating,
      reviewCount: 50
    } : undefined,
    audience: {
      '@type': 'PeopleAudience',
      suggestedMinAge: 5,
      suggestedMaxAge: 12
    }
  };
}

export function generateBreadcrumbSchema(items: { name: string; url: string }[]) {
  return {
    '@context': 'https://schema.org',
    '@type': 'BreadcrumbList',
    itemListElement: items.map((item, index) => ({
      '@type': 'ListItem',
      position: index + 1,
      name: item.name,
      item: `${siteConfig.url}${item.url}`
    }))
  };
}
