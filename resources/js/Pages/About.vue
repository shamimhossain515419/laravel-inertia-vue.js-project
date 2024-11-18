<script setup>
// Static SEO data
const pageTitle = "About Us - Shopping Gonj E-Commerce";
const pageDescription = "Learn more about Shopping Gonj E-Commerce, our mission, vision, and what makes us your go-to destination for online shopping.";
const pageKeywords = "About Shopping Gonj, E-Commerce, Online Shopping, Company Mission, Vision";
const pageUrl = "https://www.yoursite.com/about";
const pageImage = "https://www.yoursite.com/images/about-page-thumbnail.jpg"; // Replace with the actual image URL
</script>

<template>
    <Head title="| About page">
        <meta name="description" content="{{ pageDescription }}"/>
        <meta name="keywords" content="{{ pageKeywords }}"/>
        <meta name="author" content="Shopping Gonj E-Commerce"/>
        <meta property="og:title" content="{{ pageTitle }}"/>
        <meta property="og:description" content="{{ pageDescription }}"/>
        <meta property="og:url" content="{{ pageUrl }}"/>
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="{{ pageImage }}"/>
        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:title" content="{{ pageTitle }}"/>
        <meta name="twitter:description" content="{{ pageDescription }}"/>
        <meta name="twitter:image" content="{{ pageImage }}"/>
    </Head>

    <section class="about-page">
        <h1>About Us</h1>
        <p>
            Welcome to <strong>Shopping Gonj E-Commerce</strong>, your number one source for online shopping.
            We're dedicated to giving you the very best of products, with a focus on dependability, customer service,
            and uniqueness.
        </p>
        <p>
            Founded in 2024, Shopping Gonj E-Commerce has come a long way from its beginnings.
            Our passion for serving customers drove us to start this platform to create an exceptional shopping
            experience.
        </p>
        <p>
            We hope you enjoy our products as much as we enjoy offering them to you.
            If you have any questions or comments, please don't hesitate to contact us.
        </p>
    </section>
</template>

<style scoped>
.about-page {
    padding: 2rem;
    color: #333;
    font-family: Arial, sans-serif;
}

h1 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    color: #222;
}

p {
    font-size: 1.125rem;
    line-height: 1.6;
    margin-bottom: 1rem;
}

strong {
    color: #0070f3;
}
</style>
