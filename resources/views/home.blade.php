@livewireStyles
@livewireScripts


<x-layout>
    <x-slot:heading>
        Home
    </x-slot:heading>

    <div class="min-h-screen bg-gray-50">
        <!-- Hero Section -->
        <div class="bg-white shadow-sm">
            <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h1 class="text-4xl font-bold text-gray-900 sm:text-5xl md:text-6xl">
                        Effortlessly Scrape & Manage Business Leads
                    </h1>
                    <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                        Extract valuable business leads from Google Maps with ease. Our intuitive dashboard and Chrome extension make lead generation faster, smarter, and more efficient.
                    </p>
                    <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                        <a href="/dashboard" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
                            Start Scraping Now
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <div class="py-12 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:text-center">
                    <h2 class="text-base text-blue-600 font-semibold tracking-wide uppercase">Features</h2>
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        Everything You Need to Generate Leads
                    </p>
                </div>

                <div class="mt-10 grid grid-cols-1 gap-8 md:grid-cols-3">
                    <!-- Real-Time Data Scraping -->
                    <div class="p-6 bg-white rounded-lg shadow-md">
                        <div class="flex items-center mb-4">
                            <div class="flex-shrink-0 bg-blue-500 p-3 rounded-md">
                                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900">Real-Time Scraping</h3>
                        <p class="mt-2 text-base text-gray-500">
                            Instantly scrape and preview business leads from Google Maps with real-time results.
                        </p>
                    </div>

                    <!-- Advanced Filters -->
                    <div class="p-6 bg-white rounded-lg shadow-md">
                        <div class="flex items-center mb-4">
                            <div class="flex-shrink-0 bg-blue-500 p-3 rounded-md">
                                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900">Advanced Filters</h3>
                        <p class="mt-2 text-base text-gray-500">
                            Filter leads by category, location, rating, and more to find exactly what you need.
                        </p>
                    </div>

                    <!-- Scheduled Scraping -->
                    <div class="p-6 bg-white rounded-lg shadow-md">
                        <div class="flex items-center mb-4">
                            <div class="flex-shrink-0 bg-blue-500 p-3 rounded-md">
                                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900">Scheduled Scraping</h3>
                        <p class="mt-2 text-base text-gray-500">
                            Automate lead generation by scheduling scraping jobs at your convenience.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="bg-blue-600">
            <div class="max-w-7xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8 lg:py-20">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                        Trusted by Businesses Worldwide
                    </h2>
                </div>
                <dl class="mt-10 text-center sm:max-w-3xl sm:mx-auto sm:grid sm:grid-cols-3 sm:gap-8">
                    <div class="flex flex-col">
                        <dt class="order-2 mt-2 text-lg leading-6 font-medium text-blue-200">
                            Active Users
                        </dt>
                        <dd class="order-1 text-5xl font-extrabold text-white">
                            10,000+
                        </dd>
                    </div>
                    <div class="flex flex-col mt-10 sm:mt-0">
                        <dt class="order-2 mt-2 text-lg leading-6 font-medium text-blue-200">
                            Scraped Leads
                        </dt>
                        <dd class="order-1 text-5xl font-extrabold text-white">
                            2M+
                        </dd>
                    </div>
                    <div class="flex flex-col mt-10 sm:mt-0">
                        <dt class="order-2 mt-2 text-lg leading-6 font-medium text-blue-200">
                            Satisfaction Rate
                        </dt>
                        <dd class="order-1 text-5xl font-extrabold text-white">
                            98%
                        </dd>
                    </div>
                </dl>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="bg-white">
            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
                <div class="bg-blue-700 rounded-lg shadow-xl overflow-hidden lg:grid lg:grid-cols-2 lg:gap-4">
                    <div class="pt-10 pb-12 px-6 sm:pt-16 sm:px-16 lg:py-16 lg:pr-0 xl:py-20 xl:px-20">
                        <div class="lg:self-center">
                            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                                <span class="block">Ready to Transform Your Lead Generation?</span>
                                <span class="block">Start Your Free Trial Today.</span>
                            </h2>
                            <p class="mt-4 text-lg leading-6 text-blue-200">
                                Experience the power of our scraping tools with a 14-day free trial. No credit card required.
                            </p>
                            <a href="/dashboard" class="mt-8 bg-white border border-transparent rounded-md shadow px-5 py-3 inline-flex items-center text-base font-medium text-blue-600 hover:bg-blue-50">
                                Sign Up for Free
                            </a>
                        </div>
                    </div>
                    <div class="-mt-6 aspect-w-5 aspect-h-3 md:aspect-w-2 md:aspect-h-1">
                        <img class="transform translate-x-6 translate-y-6 rounded-md object-cover object-left-top" src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&auto=format&fit=crop&w=2850&q=80" alt="App screenshot">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>