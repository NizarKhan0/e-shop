<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CosMerch - Toko Merchandise Cosplayer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        border: "hsl(214.3 31.8% 91.4%)",
                        input: "hsl(214.3 31.8% 91.4%)",
                        ring: "hsl(215 20.2% 65.1%)",
                        background: "hsl(0 0% 100%)",
                        foreground: "hsl(222.2 84% 4.9%)",
                        primary: {
                            DEFAULT: "hsl(222.2 47.4% 11.2%)",
                            foreground: "hsl(210 40% 98%)",
                            50: "hsl(210 40% 98%)",
                            100: "hsl(214.3 31.8% 91.4%)",
                            200: "hsl(213 26.8% 83.9%)",
                            300: "hsl(215 20.2% 65.1%)",
                            400: "hsl(215.4 16.3% 46.9%)",
                            500: "hsl(215.4 16.3% 36.9%)",
                            600: "hsl(215.4 16.3% 26.9%)",
                            700: "hsl(215.4 16.3% 16.9%)",
                            800: "hsl(222.2 47.4% 11.2%)",
                            900: "hsl(222.2 47.4% 5.2%)",
                        },
                        secondary: {
                            DEFAULT: "hsl(210 40% 96%)",
                            foreground: "hsl(222.2 47.4% 11.2%)",
                            50: "hsl(210 40% 98%)",
                            100: "hsl(210 40% 96%)",
                            200: "hsl(214.3 31.8% 91.4%)",
                            300: "hsl(213 26.8% 83.9%)",
                            400: "hsl(215 20.2% 65.1%)",
                            500: "hsl(215.4 16.3% 46.9%)",
                            600: "hsl(215.4 16.3% 36.9%)",
                            700: "hsl(215.4 16.3% 26.9%)",
                            800: "hsl(222.2 47.4% 11.2%)",
                            900: "hsl(222.2 47.4% 5.2%)",
                        },
                        accent: {
                            DEFAULT: "hsl(210 40% 96%)",
                            foreground: "hsl(222.2 47.4% 11.2%)",
                        },
                        destructive: {
                            DEFAULT: "hsl(0 84.2% 60.2%)",
                            foreground: "hsl(210 40% 98%)",
                        },
                        muted: {
                            DEFAULT: "hsl(210 40% 96%)",
                            foreground: "hsl(215.4 16.3% 46.9%)",
                        },
                        card: {
                            DEFAULT: "hsl(0 0% 100%)",
                            foreground: "hsl(222.2 47.4% 11.2%)",
                        },
                        popover: {
                            DEFAULT: "hsl(0 0% 100%)",
                            foreground: "hsl(222.2 47.4% 11.2%)",
                        },
                    },
                    borderRadius: {
                        lg: "0.5rem",
                        md: "calc(0.5rem - 2px)",
                        sm: "calc(0.5rem - 4px)",
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: hsl(0 0% 100%);
            color: hsl(222.2 47.4% 11.2%);
        }

        .shadcn-card {
            background-color: hsl(0 0% 100%);
            border: 1px solid hsl(214.3 31.8% 91.4%);
            border-radius: 0.5rem;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .shadcn-card:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
        }

        .shadcn-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 0.375rem;
            font-weight: 500;
            transition: all 0.2s ease;
            outline: none;
        }

        .shadcn-button-primary {
            background-color: hsl(222.2 47.4% 11.2%);
            color: hsl(210 40% 98%);
        }

        .shadcn-button-primary:hover {
            background-color: hsl(222.2 47.4% 15.2%);
        }

        .shadcn-button-secondary {
            background-color: hsl(210 40% 96%);
            color: hsl(222.2 47.4% 11.2%);
            border: 1px solid hsl(214.3 31.8% 91.4%);
        }

        .shadcn-button-secondary:hover {
            background-color: hsl(214.3 31.8% 91.4%);
        }

        .shadcn-button-outline {
            background-color: transparent;
            border: 1px solid hsl(214.3 31.8% 91.4%);
            color: hsl(222.2 47.4% 11.2%);
        }

        .shadcn-button-outline:hover {
            background-color: hsl(210 40% 96%);
        }

        .shadcn-input {
            display: flex;
            height: 2.5rem;
            width: 100%;
            border-radius: 0.375rem;
            border: 1px solid hsl(214.3 31.8% 91.4%);
            background-color: transparent;
            padding: 0 0.75rem;
            font-size: 0.875rem;
            transition: border-color 0.2s ease;
        }

        .shadcn-input:focus {
            outline: none;
            border-color: hsl(222.2 47.4% 11.2%);
        }

        .animate-in {
            animation: animateIn 0.5s ease-out;
        }

        @keyframes animateIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .grid-pattern {
            background-color: #ffffff;
            background-image: url("data:image/svg+xml,%3Csvg width='20' height='20' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23d1d5db' fill-opacity='0.2' fill-rule='evenodd'%3E%3Ccircle cx='3' cy='3' r='3'/%3E%3Ccircle cx='13' cy='13' r='3'/%3E%3C/g%3E%3C/svg%3E");
        }
    </style>
</head>

<body class="bg-background text-foreground">
    <!-- Header/Navbar -->
    <header
        class="sticky top-0 z-50 w-full border-b bg-background/95 backdrop-blur supports-[backdrop-filter]:bg-background/60">
        <div class="container mx-auto px-4 flex h-16 items-center">
            <div class="flex items-center space-x-2">
                <div class="w-8 h-8 bg-primary rounded-md flex items-center justify-center">
                    <span class="text-primary-foreground font-bold text-sm">CM</span>
                </div>
                <span class="text-xl font-bold">CosMerch</span>
            </div>

            <nav class="hidden md:flex ml-8 space-x-6">
                <a href="#" class="text-sm font-medium transition-colors hover:text-primary">Beranda</a>
                <a href="#"
                    class="text-sm font-medium text-muted-foreground transition-colors hover:text-primary">Cosplayer</a>
                <a href="#"
                    class="text-sm font-medium text-muted-foreground transition-colors hover:text-primary">Kategori</a>
                <a href="#"
                    class="text-sm font-medium text-muted-foreground transition-colors hover:text-primary">Tentang
                    Kami</a>
            </nav>

            <div class="ml-auto flex items-center space-x-4">
                <button class="shadcn-button shadcn-button-outline h-9 w-9 p-0">
                    <i class="fas fa-search text-foreground"></i>
                </button>
                <button class="shadcn-button shadcn-button-outline h-9 w-9 p-0 relative">
                    <i class="fas fa-shopping-cart text-foreground"></i>
                    <span
                        class="absolute -top-1 -right-1 bg-primary text-primary-foreground text-xs rounded-full w-4 h-4 flex items-center justify-center">3</span>
                </button>
                <button class="shadcn-button shadcn-button-primary h-9 px-4 hidden md:inline-flex">
                    Login
                </button>
                <button class="shadcn-button shadcn-button-outline h-9 w-9 p-0 md:hidden">
                    <i class="fas fa-bars text-foreground"></i>
                </button>
            </div>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="grid-pattern py-16 md:py-24">
            <div class="container mx-auto px-4">
                <div class="flex flex-col items-center text-center space-y-6">
                    <h1 class="text-4xl font-bold tracking-tighter sm:text-5xl md:text-6xl animate-in">
                        Temukan Merchandise
                        <span class="text-primary">Cosplayer</span>
                        Favoritmu
                    </h1>
                    <p class="max-w-[700px] text-muted-foreground text-xl animate-in" style="animation-delay: 0.2s;">
                        Dukung cosplayer Indonesia dengan membeli merchandise eksklusif mereka. Poster, stiker,
                        gantungan kunci, dan banyak lagi!
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 animate-in" style="animation-delay: 0.4s;">
                        <button class="shadcn-button shadcn-button-primary h-11 px-8">
                            Jelajahi Sekarang
                        </button>
                        <button class="shadcn-button shadcn-button-outline h-11 px-8">
                            Lihat Cosplayer
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cosplayer List Section -->
        <section class="py-16 bg-secondary/30" id="cosplayers">
            <div class="container mx-auto px-4">
                <div class="flex flex-col items-center text-center space-y-4 mb-12">
                    <h2 class="text-3xl font-bold tracking-tight">Pilih Cosplayer Favoritmu</h2>
                    <p class="max-w-[600px] text-muted-foreground">
                        Telusuri koleksi merchandise dari berbagai cosplayer talenta Indonesia
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <!-- Cosplayer Cards -->
                    <div class="shadcn-card cursor-pointer group" onclick="showMerch(1)">
                        <div class="aspect-square overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=400&q=80"
                                alt="Miko Chan"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="p-6">
                            <h3 class="font-semibold text-lg">Miko Chan</h3>
                            <p class="text-sm text-muted-foreground">Cosplayer Anime</p>
                            <div class="flex items-center mt-4 text-sm text-muted-foreground">
                                <div class="flex items-center mr-4">
                                    <i class="fas fa-star text-yellow-400 mr-1"></i>
                                    <span>4.9</span>
                                </div>
                                <span>•</span>
                                <span class="ml-4">25 Produk</span>
                            </div>
                        </div>
                    </div>

                    <div class="shadcn-card cursor-pointer group" onclick="showMerch(2)">
                        <div class="aspect-square overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=400&q=80"
                                alt="Ryu Takahashi"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="p-6">
                            <h3 class="font-semibold text-lg">Ryu Takahashi</h3>
                            <p class="text-sm text-muted-foreground">Cosplayer Game</p>
                            <div class="flex items-center mt-4 text-sm text-muted-foreground">
                                <div class="flex items-center mr-4">
                                    <i class="fas fa-star text-yellow-400 mr-1"></i>
                                    <span>4.7</span>
                                </div>
                                <span>•</span>
                                <span class="ml-4">18 Produk</span>
                            </div>
                        </div>
                    </div>

                    <div class="shadcn-card cursor-pointer group" onclick="showMerch(3)">
                        <div class="aspect-square overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=400&q=80"
                                alt="Sakura Miyu"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="p-6">
                            <h3 class="font-semibold text-lg">Sakura Miyu</h3>
                            <p class="text-sm text-muted-foreground">Cosplayer Anime</p>
                            <div class="flex items-center mt-4 text-sm text-muted-foreground">
                                <div class="flex items-center mr-4">
                                    <i class="fas fa-star text-yellow-400 mr-1"></i>
                                    <span>4.8</span>
                                </div>
                                <span>•</span>
                                <span class="ml-4">22 Produk</span>
                            </div>
                        </div>
                    </div>

                    <div class="shadcn-card cursor-pointer group" onclick="showMerch(4)">
                        <div class="aspect-square overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1552058544-f2b08422138a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=400&q=80"
                                alt="Hana Kimura"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="p-6">
                            <h3 class="font-semibold text-lg">Hana Kimura</h3>
                            <p class="text-sm text-muted-foreground">Cosplayer Manga</p>
                            <div class="flex items-center mt-4 text-sm text-muted-foreground">
                                <div class="flex items-center mr-4">
                                    <i class="fas fa-star text-yellow-400 mr-1"></i>
                                    <span>4.6</span>
                                </div>
                                <span>•</span>
                                <span class="ml-4">15 Produk</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-12">
                    <button class="shadcn-button shadcn-button-outline h-11 px-8">
                        Lihat Semua Cosplayer
                    </button>
                </div>
            </div>
        </section>

        <!-- Merchandise Section (Initially Hidden) -->
        <section class="py-16 bg-background hidden animate-in" id="merch-section">
            <div class="container mx-auto px-4">
                <div class="flex items-center mb-8">
                    <button onclick="hideMerch()" class="shadcn-button shadcn-button-outline h-9 w-9 p-0 mr-4">
                        <i class="fas fa-arrow-left"></i>
                    </button>
                    <h2 class="text-3xl font-bold tracking-tight">Merchandise <span id="cosplayer-name">Cosplayer</span>
                    </h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6" id="merch-container">
                    <!-- Merch items will be loaded here dynamically -->
                </div>
            </div>
        </section>

        <!-- Testimonial Section -->
        <section class="py-16 bg-secondary/50">
            <div class="container mx-auto px-4">
                <div class="flex flex-col items-center text-center space-y-4 mb-12">
                    <h2 class="text-3xl font-bold tracking-tight">Apa Kata Pelanggan Kami</h2>
                    <p class="max-w-[600px] text-muted-foreground">
                        Lihat testimoni dari pelanggan yang sudah berbelanja di CosMerch
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="shadcn-card p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=300&q=80"
                                    alt="Customer" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h4 class="font-semibold">Rizky Pratama</h4>
                                <div class="flex items-center text-yellow-400 text-sm">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted-foreground">
                            "Kualitas merchandise-nya bagus banget! Pengiriman juga cepat. Pokoknya recommended deh buat
                            belanja di sini."
                        </p>
                    </div>

                    <div class="shadcn-card p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=300&q=80"
                                    alt="Customer" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h4 class="font-semibold">Siti Rahayu</h4>
                                <div class="flex items-center text-yellow-400 text-sm">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted-foreground">
                            "Akhirnya nemu juga tempat jual merchandise cosplayer Indonesia yang lengkap. Desainnya
                            unik-unik dan harganya terjangkau."
                        </p>
                    </div>

                    <div class="shadcn-card p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                                <img src="https://images.unsplash.com/photo-1567532939604-b6b5b0db1604?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=300&q=80"
                                    alt="Customer" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h4 class="font-semibold">Dewi Anggraini</h4>
                                <div class="flex items-center text-yellow-400 text-sm">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted-foreground">
                            "Pelayanannya ramah banget, respon cepat. Barang sesuai gambar dan packagingnya aman. Pasti
                            akan belanja lagi di sini."
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Newsletter Section -->
        <section class="py-16 bg-primary text-primary-foreground">
            <div class="container mx-auto px-4">
                <div class="flex flex-col items-center text-center space-y-4">
                    <h2 class="text-3xl font-bold tracking-tight">Dapatkan Update Terbaru</h2>
                    <p class="max-w-[600px] text-primary-100">
                        Berlangganan newsletter kami untuk mendapatkan informasi tentang merchandise baru dan promo
                        eksklusif
                    </p>
                    <div class="flex flex-col sm:flex-row gap-2 w-full max-w-md mt-6">
                        <input type="email" placeholder="Alamat email Anda" class="shadcn-input flex-1">
                        <button class="shadcn-button shadcn-button-secondary h-10 px-4 whitespace-nowrap">
                            Berlangganan
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="border-t bg-secondary/30 py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="w-8 h-8 bg-primary rounded-md flex items-center justify-center">
                            <span class="text-primary-foreground font-bold text-sm">CM</span>
                        </div>
                        <span class="text-xl font-bold">CosMerch</span>
                    </div>
                    <p class="text-muted-foreground">Platform merchandise untuk cosplayer Indonesia.</p>
                </div>

                <div>
                    <h3 class="font-semibold mb-4">Tautan Cepat</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-muted-foreground hover:text-primary transition-colors">Beranda</a>
                        </li>
                        <li><a href="#" class="text-muted-foreground hover:text-primary transition-colors">Cosplayer</a>
                        </li>
                        <li><a href="#" class="text-muted-foreground hover:text-primary transition-colors">Kategori</a>
                        </li>
                        <li><a href="#" class="text-muted-foreground hover:text-primary transition-colors">Tentang
                                Kami</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-4">Bantuan</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-muted-foreground hover:text-primary transition-colors">FAQ</a></li>
                        <li><a href="#"
                                class="text-muted-foreground hover:text-primary transition-colors">Pengembalian</a></li>
                        <li><a href="#" class="text-muted-foreground hover:text-primary transition-colors">Kebijakan
                                Privasi</a></li>
                        <li><a href="#" class="text-muted-foreground hover:text-primary transition-colors">Syarat &
                                Ketentuan</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-4">Hubungi Kami</h3>
                    <ul class="space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-envelope text-muted-foreground mr-2"></i>
                            <span class="text-muted-foreground">info@cosmerch.id</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone text-muted-foreground mr-2"></i>
                            <span class="text-muted-foreground">+62 123 456 789</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-map-marker-alt text-muted-foreground mr-2"></i>
                            <span class="text-muted-foreground">Jakarta, Indonesia</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-border mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-muted-foreground text-sm">© 2023 CosMerch. All rights reserved.</p>
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <a href="#" class="text-muted-foreground hover:text-primary transition-colors"><i
                            class="fab fa-instagram"></i></a>
                    <a href="#" class="text-muted-foreground hover:text-primary transition-colors"><i
                            class="fab fa-twitter"></i></a>
                    <a href="#" class="text-muted-foreground hover:text-primary transition-colors"><i
                            class="fab fa-facebook"></i></a>
                    <a href="#" class="text-muted-foreground hover:text-primary transition-colors"><i
                            class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Sample data for merchandise
        const cosplayers = {
            1: {
                name: "Miko Chan",
                merch: [
                    { id: 1, name: "Poster Exclusive", price: 50000, image: "https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=300&q=80" },
                    { id: 2, name: "Stiker Pack", price: 25000, image: "https://images.unsplash.com/photo-1561361513-2d000a50f0dc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=300&q=80" },
                    { id: 3, name: "Gantungan Kunci", price: 20000, image: "https://images.unsplash.com/photo-1618354691373-d851c5c3a990?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=300&q=80" },
                    { id: 4, name: "Tote Bag", price: 75000, image: "https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=300&q=80" }
                ]
            },
            2: {
                name: "Ryu Takahashi",
                merch: [
                    { id: 5, name: "Artbook Limited", price: 120000, image: "https://images.unsplash.com/photo-1544947950-fa07a98d237f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=300&q=80" },
                    { id: 6, name: "Phone Case", price: 85000, image: "https://images.unsplash.com/photo-1609081219090-a6d81d3085bf?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=300&q=80" },
                    { id: 7, name: "Pin Set", price: 45000, image: "https://images.unsplash.com/photo-1618519764620-7403abdbdfe9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=300&q=80" }
                ]
            },
            3: {
                name: "Sakura Miyu",
                merch: [
                    { id: 8, name: "Signed Poster", price: 80000, image: "https://images.unsplash.com/photo-1584824486539-53bb4646bdbc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=300&q=80" },
                    { id: 9, name: "Keychain", price: 30000, image: "https://images.unsplash.com/photo-1618346138544-8cc43c6c9317?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=300&q=80" },
                    { id: 10, name: "Cosplay Photo Set", price: 65000, image: "https://images.unsplash.com/photo-1516633630673-67bbad747022?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=300&q=80" }
                ]
            }
        };

        // Function to show merchandise for a specific cosplayer
        function showMerch(cosplayerId) {
            const cosplayer = cosplayers[cosplayerId];
            if (!cosplayer) return;

            // Update cosplayer name
            document.getElementById('cosplayer-name').textContent = cosplayer.name;

            // Generate merchandise items
            const merchContainer = document.getElementById('merch-container');
            merchContainer.innerHTML = '';

            cosplayer.merch.forEach(item => {
                const merchItem = document.createElement('div');
                merchItem.className = 'shadcn-card group';
                merchItem.innerHTML = `
                    <div class="aspect-square overflow-hidden">
                        <img src="${item.image}" alt="${item.name}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6">
                        <h3 class="font-semibold">${item.name}</h3>
                        <p class="text-primary font-bold mt-1">Rp ${item.price.toLocaleString('id-ID')}</p>
                        <button class="shadcn-button shadcn-button-primary w-full mt-4">
                            Tambah ke Keranjang
                        </button>
                    </div>
                `;
                merchContainer.appendChild(merchItem);
            });

            // Show merchandise section, hide cosplayer section
            document.getElementById('merch-section').classList.remove('hidden');
            document.getElementById('cosplayers').classList.add('hidden');

            // Scroll to merchandise section
            document.getElementById('merch-section').scrollIntoView({ behavior: 'smooth' });
        }

        // Function to hide merchandise and show cosplayer list
        function hideMerch() {
            document.getElementById('merch-section').classList.add('hidden');
            document.getElementById('cosplayers').classList.remove('hidden');

            // Scroll to cosplayer section
            document.getElementById('cosplayers').scrollIntoView({ behavior: 'smooth' });
        }
    </script>
</body>

</html>