nav {
    background: #39FF14; /* Neon Green */
    border-bottom: 2px solid transparent;
    position: sticky; /* Make the navbar sticky */
    top: 0; /* Sticks it to the top */
    z-index: 10;
}

nav::before {
    content: '';
    position: absolute;
    inset: 0;
    background: none; /* Remove the rainbow gradient */
    z-index: -1;
    border-bottom: 2px solid #fff;
}

/* Adjusting the link hover effect to match neon green theme */
.nav-link {
    color: white;
    text-decoration: none;
    font-weight: 500;
    position: relative;
    padding: 0.3rem 0.5rem;
    border-radius: 5px;
    transition: color 0.3s ease;
}

.nav-link:hover {
    color: #39FF14; /* Neon green on hover */
    border-bottom: 2px solid #39FF14; /* Neon green underline */
}

/* The hamburger menu and mobile styles remain the same */
.hamburger {
    display: none;
    background: none;
    border: none;
    cursor: pointer;
    color: white;
    font-size: 1.5rem;
}

@media (max-width: 768px) {
    .nav-left > .nav-link,
    .nav-right {
        display: none;
    }

    .hamburger {
        display: block;
    }

    .mobile-menu {
        display: block;
        background: #39FF14; /* Neon green background for mobile */
        padding: 1rem 2rem;
        animation: fadeIn 0.3s ease-in-out;
    }
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-10px); }
    to { opacity: 1; transform: translateY(0); }
}

